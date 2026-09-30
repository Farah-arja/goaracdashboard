<?php
class ControllerSettingInformation extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('setting/information');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/information');

		$this->getList();
	}

	public function add() {
		$this->load->language('setting/information');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/information');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_setting_information->addInformation($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('setting/information', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('setting/information');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/information');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_setting_information->editInformation($this->request->get['information_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('setting/information', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('setting/information');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/information');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $information_id) {
				$this->model_setting_information->deleteInformation($information_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('setting/information', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}

	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'id.title';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}
		
		// zedet for filtering
		if (isset($this->request->get['filter_title'])) {
		$filter_title = $this->request->get['filter_title'];
		} else {
		$filter_title = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('setting/information', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['add'] = $this->url->link('setting/information/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('setting/information/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['informations'] = array();

		//zedet awalwehdi
		$filter_data = array(
			'filter_title' => $filter_title,
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$information_total = $this->model_setting_information->getTotalInformations($filter_data);

		$results = $this->model_setting_information->getInformations($filter_data);

		foreach ($results as $result) {
			$data['informations'][] = array(
				'information_id' => $result['information_id'],
				'title'          => $result['title'],
				'goarac_type' => $result['goarac_type'],
				'sort_order'     => $result['sort_order'],
				'edit'           => $this->url->link('setting/information/edit', 'user_token=' . $this->session->data['user_token'] . '&information_id=' . $result['information_id'] . $url, true)
			);
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		//zedet lal filter
		if (isset($this->request->get['filter_title'])) {
		$url .= '&filter_title=' . urlencode(html_entity_decode($this->request->get['filter_title'], ENT_QUOTES, 'UTF-8'));
		}

		$data['sort_title'] = $this->url->link('setting/information', 'user_token=' . $this->session->data['user_token'] . '&sort=id.title' . $url, true);
		$data['sort_sort_order'] = $this->url->link('setting/information', 'user_token=' . $this->session->data['user_token'] . '&sort=i.sort_order' . $url, true);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		//zedet lal filter
		if (isset($this->request->get['filter_title'])) {
		$url .= '&filter_title=' . urlencode(html_entity_decode($this->request->get['filter_title'], ENT_QUOTES, 'UTF-8'));
		}

		$pagination = new Pagination();
		$pagination->total = $information_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('setting/information', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($information_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($information_total - $this->config->get('config_limit_admin'))) ? $information_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $information_total, ceil($information_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		//zedet 
		$data['filter_title'] = $filter_title;


		//zedet
		$data['filter_action'] = $this->url->link(
		'setting/information',
		'user_token=' . $this->session->data['user_token'],
		true);
		$data['reset'] = $this->url->link(
		'setting/information',
		'user_token=' . $this->session->data['user_token'],  
		true
		);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('setting/information_list', $data));
	}

	protected function getForm() {
    $data['text_form'] = !isset($this->request->get['information_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

    if (isset($this->error['warning'])) {
        $data['error_warning'] = $this->error['warning'];
    } else {
        $data['error_warning'] = '';
    }

    if (isset($this->error['title'])) {
        $data['error_title'] = $this->error['title'];
    } else {
        $data['error_title'] = array();
    }

    if (isset($this->error['description'])) {
        $data['error_description'] = $this->error['description'];
    } else {
        $data['error_description'] = array();
    }

    if (isset($this->error['meta_title'])) {
        $data['error_meta_title'] = $this->error['meta_title'];
    } else {
        $data['error_meta_title'] = array();
    }

    if (isset($this->error['keyword'])) {
        $data['error_keyword'] = $this->error['keyword'];
    } else {
        $data['error_keyword'] = '';
    }

    $url = '';

    if (isset($this->request->get['sort'])) {
        $url .= '&sort=' . $this->request->get['sort'];
    }

    if (isset($this->request->get['order'])) {
        $url .= '&order=' . $this->request->get['order'];
    }

    if (isset($this->request->get['page'])) {
        $url .= '&page=' . $this->request->get['page'];
    }

    $data['breadcrumbs'] = array();

    $data['breadcrumbs'][] = array(
        'text' => $this->language->get('text_home'),
        'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
    );

    $data['breadcrumbs'][] = array(
        'text' => $this->language->get('heading_title'),
        'href' => $this->url->link('setting/information', 'user_token=' . $this->session->data['user_token'] . $url, true)
    );

    if (!isset($this->request->get['information_id'])) {
        $data['action'] = $this->url->link('setting/information/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
    } else {
        $data['action'] = $this->url->link('setting/information/edit', 'user_token=' . $this->session->data['user_token'] . '&information_id=' . $this->request->get['information_id'] . $url, true);
    }

    $data['cancel'] = $this->url->link('setting/information', 'user_token=' . $this->session->data['user_token'] . $url, true);

    if (isset($this->request->get['information_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
        $information_info = $this->model_setting_information->getInformation($this->request->get['information_id']);
    }

    $data['user_token'] = $this->session->data['user_token'];

    $this->load->model('localisation/language');

    $data['languages'] = $this->model_localisation_language->getLanguages();

    if (isset($this->request->post['information_description'])) {
        $data['information_description'] = $this->request->post['information_description'];
    } elseif (isset($this->request->get['information_id'])) {
        $data['information_description'] = $this->model_setting_information->getInformationDescriptions($this->request->get['information_id']);
    } else {
        $data['information_description'] = array();
    }

    $this->load->model('setting/store');

    $data['stores'] = array();

    $data['stores'][] = array(
        'store_id' => 0,
        'name'     => $this->language->get('text_default')
    );

    $stores = $this->model_setting_store->getStores();

    foreach ($stores as $store) {
        $data['stores'][] = array(
            'store_id' => $store['store_id'],
            'name'     => $store['name']
        );
    }

    if (isset($this->request->post['information_store'])) {
        $data['information_store'] = $this->request->post['information_store'];
    } elseif (isset($this->request->get['information_id'])) {
        $data['information_store'] = $this->model_setting_information->getInformationStores($this->request->get['information_id']);
    } else {
        $data['information_store'] = array(0);
    }

    if (isset($this->request->post['bottom'])) {
        $data['bottom'] = $this->request->post['bottom'];
    } elseif (!empty($information_info)) {
        $data['bottom'] = $information_info['bottom'];
    } else {
        $data['bottom'] = 0;
    }

    if (isset($this->request->post['status'])) {
        $data['status'] = $this->request->post['status'];
    } elseif (!empty($information_info)) {
        $data['status'] = $information_info['status'];
    } else {
        $data['status'] = true;
    }

    if (isset($this->request->post['sort_order'])) {
        $data['sort_order'] = $this->request->post['sort_order'];
    } elseif (!empty($information_info)) {
        $data['sort_order'] = $information_info['sort_order'];
    } else {
        $data['sort_order'] = '';
    }


    // =========================
    // GoArac Data
    // =========================

    if (isset($this->request->post['goarac_type'])) {
        $data['goarac_type'] = $this->request->post['goarac_type'];
    } elseif (!empty($information_info)) {
        $data['goarac_type'] = $information_info['goarac_type'] ?? 'page';
    } else {
        $data['goarac_type'] = 'page';
    }

    if (isset($this->request->post['goarac_image'])) {
        $data['goarac_image'] = $this->request->post['goarac_image'];
    } elseif (!empty($information_info)) {
        $data['goarac_image'] = $information_info['goarac_image'] ?? '';
    } else {
        $data['goarac_image'] = '';
    }

    if (isset($this->request->post['goarac_data_json'])) {
        $data['goarac_data_json'] = $this->request->post['goarac_data_json'];
    } elseif (!empty($information_info)) {
        $decoded = json_decode((string)($information_info['goarac_data_json'] ?? ''), true);

        $data['goarac_data_json'] = is_array($decoded)
            ? json_encode($decoded, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)
            : '{}';
    } else {
        $data['goarac_data_json'] = '{}';
    }

    $goarac_data = $this->decodeGoaracPageData($data['goarac_data_json']);

    if (isset($this->request->post['goarac_page_label'])) {
        $data['goarac_page_label'] = $this->request->post['goarac_page_label'];
    } else {
        $data['goarac_page_label'] = $goarac_data['page_label'] ?? ($goarac_data['eyebrow'] ?? '');
    }

    if (isset($this->request->post['goarac_button_label'])) {
        $data['goarac_button_label'] = $this->request->post['goarac_button_label'];
    } else {
        $data['goarac_button_label'] = $goarac_data['button_label'] ?? '';
    }

    if (isset($this->request->post['goarac_button_href'])) {
        $data['goarac_button_href'] = $this->request->post['goarac_button_href'];
    } else {
        $data['goarac_button_href'] = $goarac_data['button_href'] ?? '';
    }

    if (isset($this->request->post['goarac_cards'])) {
        $data['goarac_cards'] = $this->cleanGoaracCards($this->request->post['goarac_cards']);
    } else {
        $data['goarac_cards'] = $this->cleanGoaracCards($goarac_data['cards'] ?? array());
    }

    $data['goarac_card_row'] = count($data['goarac_cards']);


    // =========================
    // GoArac Sitemap
    // =========================

    if (isset($this->request->post['goarac_sitemap_include'])) {
        $data['goarac_sitemap_include'] = (int)$this->request->post['goarac_sitemap_include'];
    } elseif (!empty($information_info)) {
        $data['goarac_sitemap_include'] = isset($information_info['goarac_sitemap_include'])
            ? (int)$information_info['goarac_sitemap_include']
            : 1;
    } else {
        $data['goarac_sitemap_include'] = 1;
    }

    if (isset($this->request->post['goarac_sitemap_priority'])) {
        $data['goarac_sitemap_priority'] = $this->request->post['goarac_sitemap_priority'];
    } elseif (!empty($information_info)) {
        $data['goarac_sitemap_priority'] = $information_info['goarac_sitemap_priority'] ?? '0.7';
    } else {
        $data['goarac_sitemap_priority'] = '0.7';
    }

    if (isset($this->request->post['goarac_sitemap_changefreq'])) {
        $data['goarac_sitemap_changefreq'] = $this->request->post['goarac_sitemap_changefreq'];
    } elseif (!empty($information_info)) {
        $data['goarac_sitemap_changefreq'] = $information_info['goarac_sitemap_changefreq'] ?? 'weekly';
    } else {
        $data['goarac_sitemap_changefreq'] = 'weekly';
    }

    $data['goarac_sitemap_changefreq_options'] = array(
        'always',
        'hourly',
        'daily',
        'weekly',
        'monthly',
        'yearly',
        'never'
    );


    // =========================
    // SEO URL
    // =========================

    if (isset($this->request->post['information_seo_url'])) {
        $data['information_seo_url'] = $this->request->post['information_seo_url'];
    } elseif (isset($this->request->get['information_id'])) {
        $data['information_seo_url'] = $this->model_setting_information->getInformationSeoUrls($this->request->get['information_id']);
    } else {
        $data['information_seo_url'] = array();
    }


    // =========================
    // Layout
    // =========================

    if (isset($this->request->post['information_layout'])) {
        $data['information_layout'] = $this->request->post['information_layout'];
    } elseif (isset($this->request->get['information_id'])) {
        $data['information_layout'] = $this->model_setting_information->getInformationLayouts($this->request->get['information_id']);
    } else {
        $data['information_layout'] = array();
    }


    // =========================
    // GoArac Language Variables
    // =========================

    $data['entry_goarac_type'] = $this->language->get('entry_goarac_type');
    $data['entry_goarac_image'] = $this->language->get('entry_goarac_image');
    $data['entry_goarac_page_label'] = $this->language->get('entry_goarac_page_label');
    $data['entry_goarac_button_label'] = $this->language->get('entry_goarac_button_label');
    $data['entry_goarac_button_href'] = $this->language->get('entry_goarac_button_href');
    $data['entry_goarac_cards'] = $this->language->get('entry_goarac_cards');
    $data['entry_goarac_card_title'] = $this->language->get('entry_goarac_card_title');
    $data['entry_goarac_card_body'] = $this->language->get('entry_goarac_card_body');
    $data['entry_goarac_data_json'] = $this->language->get('entry_goarac_data_json');

    $data['entry_goarac_sitemap_include'] = $this->language->get('entry_goarac_sitemap_include');
    $data['entry_goarac_sitemap_priority'] = $this->language->get('entry_goarac_sitemap_priority');
    $data['entry_goarac_sitemap_changefreq'] = $this->language->get('entry_goarac_sitemap_changefreq');

    $data['help_goarac_type'] = $this->language->get('help_goarac_type');
    $data['help_goarac_image'] = $this->language->get('help_goarac_image');
    $data['help_goarac_page_label'] = $this->language->get('help_goarac_page_label');
    $data['help_goarac_button'] = $this->language->get('help_goarac_button');
    $data['help_goarac_cards'] = $this->language->get('help_goarac_cards');
    $data['help_goarac_data_json'] = $this->language->get('help_goarac_data_json');
    $data['help_goarac_sitemap'] = $this->language->get('help_goarac_sitemap');


    // =========================
    // Layouts
    // =========================

    $this->load->model('design/layout');

    $data['layouts'] = $this->model_design_layout->getLayouts();


    // =========================
    // Common
    // =========================

    $data['header'] = $this->load->controller('common/header');
    $data['column_left'] = $this->load->controller('common/column_left');
    $data['footer'] = $this->load->controller('common/footer');

    $this->response->setOutput($this->load->view('setting/information_form', $data));
}
	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'setting/information')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		foreach ($this->request->post['information_description'] as $language_id => $value) {
			if ((utf8_strlen($value['title']) < 1) || (utf8_strlen($value['title']) > 64)) {
				$this->error['title'][$language_id] = $this->language->get('error_title');
			}

			if (utf8_strlen($value['description']) < 3) {
				$this->error['description'][$language_id] = $this->language->get('error_description');
			}

			if ((utf8_strlen($value['meta_title']) < 1) || (utf8_strlen($value['meta_title']) > 255)) {
				$this->error['meta_title'][$language_id] = $this->language->get('error_meta_title');
			}
		}

		if ($this->request->post['information_seo_url']) {
			$this->load->model('design/seo_url');

			foreach ($this->request->post['information_seo_url'] as $store_id => $language) {
				foreach ($language as $language_id => $keyword) {
					if (!empty($keyword)) {
						if (count(array_keys($language, $keyword)) > 1) {
							$this->error['keyword'][$store_id][$language_id] = $this->language->get('error_unique');
						}

						$seo_urls = $this->model_design_seo_url->getSeoUrlsByKeyword($keyword);

						foreach ($seo_urls as $seo_url) {
							if (($seo_url['store_id'] == $store_id) && (!isset($this->request->get['information_id']) || ($seo_url['query'] != 'information_id=' . $this->request->get['information_id']))) {
								$this->error['keyword'][$store_id][$language_id] = $this->language->get('error_keyword');
							}
						}
					}
				}
			}
		}

		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'setting/information')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		$this->load->model('setting/store');

		foreach ($this->request->post['selected'] as $information_id) {
			if ($this->config->get('config_account_id') == $information_id) {
				$this->error['warning'] = $this->language->get('error_account');
			}

			if ($this->config->get('config_checkout_id') == $information_id) {
				$this->error['warning'] = $this->language->get('error_checkout');
			}

			if ($this->config->get('config_affiliate_id') == $information_id) {
				$this->error['warning'] = $this->language->get('error_affiliate');
			}

			if ($this->config->get('config_return_id') == $information_id) {
				$this->error['warning'] = $this->language->get('error_return');
			}

			$store_total = $this->model_setting_store->getTotalStoresByInformationId($information_id);

			if ($store_total) {
				$this->error['warning'] = sprintf($this->language->get('error_store'), $store_total);
			}
		}

		return !$this->error;
	}
	//zedet
	private function decodeGoaracPageData($raw) {
    $decoded = json_decode((string)$raw, true);
    return is_array($decoded) ? $decoded : array();
	}
	// zedet
	private function cleanGoaracCards($cards) {
    $clean = array();

    if (!is_array($cards)) {
        return $clean;
    }

    foreach ($cards as $card) {
        if (!is_array($card)) {
            continue;
        }

        $title = trim((string)($card['title'] ?? ''));
        $body = trim((string)($card['body'] ?? ($card['description'] ?? '')));

        if ($title === '' && $body === '') {
            continue;
        }

        $clean[] = array(
            'title' => $title,
            'body' => $body
        );
    }

    return $clean;
}


}
