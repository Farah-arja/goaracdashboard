<?php
class ControllerSaleOrder extends Controller {
	private $error = array();

	public function index() {
    $this->load->language('sale/order');

    $this->load->model('sale/order');

    // Same list data as getList(), but return JSON for polling
    if (!empty($this->request->get['format']) && $this->request->get['format'] === 'json') {

        $filter_order_id        = $this->request->get['filter_order_id'] ?? '';
        $filter_customer        = $this->request->get['filter_customer'] ?? '';
        $filter_order_status    = $this->request->get['filter_order_status'] ?? '';
        $filter_order_status_id = $this->request->get['filter_order_status_id'] ?? '';
        $filter_total           = $this->request->get['filter_total'] ?? '';
        $filter_date_added      = $this->request->get['filter_date_added'] ?? '';
        $filter_date_modified   = $this->request->get['filter_date_modified'] ?? '';
        $filter_provider        = $this->request->get['filter_provider'] ?? '';

        $sort  = $this->request->get['sort'] ?? 'o.order_id';
        $order = $this->request->get['order'] ?? 'DESC';
        $page  = (int)($this->request->get['page'] ?? 1);

        $filter_data = array(
            'filter_order_id'        => $filter_order_id,
            'filter_customer'       => $filter_customer,
            'filter_order_status'   => $filter_order_status,
            'filter_order_status_id'=> $filter_order_status_id,
            'filter_total'          => $filter_total,
            'filter_date_added'     => $filter_date_added,
            'filter_date_modified'  => $filter_date_modified,
            'filter_provider'       => $filter_provider,
            'sort'                  => $sort,
            'order'                 => $order,
            'start'                 => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit'                 => $this->config->get('config_limit_admin')
        );

        $results = $this->model_sale_order->getOrders($filter_data);

        $orders = array();

        foreach ($results as $result) {
            $financial = $this->formatOrderFinancialSummary(
                $this->model_sale_order->getOrderFinancialSummary($result)
            );

            $orders[] = array(
                'order_id'         => $result['order_id'],
                'customer'         => $result['customer'],
                'order_status'     => $result['order_status'] ? $result['order_status'] : $this->language->get('text_missing'),
                'order_status_id'  => isset($result['order_status_id']) ? (int)$result['order_status_id'] : 0,
                'provider_name'    => isset($result['provider_name']) ? $result['provider_name'] : '',
                'total'            => $financial['sell_total'],
                'buy_total'        => $financial['buy_total'],
                'sell_total'       => $financial['sell_total'],
                'profit_total'     => $financial['profit_total'],
                'date_added'       => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
                'date_modified'    => date($this->language->get('date_format_short'), strtotime($result['date_modified'])),
                'shipping_code'    => isset($result['shipping_code']) ? $result['shipping_code'] : '',
				'view'             => $this->url->link(
                'sale/order/info','user_token=' . $this->session->data['user_token'] . '&order_id=' . $result['order_id'], 
				true
				),
				'edit' => $this->url->link(
				'sale/order/edit',
				'user_token=' . $this->session->data['user_token'] . '&order_id=' . $result['order_id'],
				true)
            );
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode(array('orders' => $orders)));

        return;
    }

    $this->document->setTitle($this->language->get('heading_title'));

    $this->getList();
}

	public function add() {
		$this->load->language('sale/order');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('sale/order');

		$this->getForm();
	}

	public function edit() {
		$this->load->language('sale/order');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('sale/order');

		$this->getForm();
	}
	
	public function delete() {
		$this->load->language('sale/order');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->session->data['success'] = $this->language->get('text_success');

		$url = '';

		if (isset($this->request->get['filter_order_id'])) {
			$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
		}

		if (isset($this->request->get['filter_customer'])) {
			$url .= '&filter_customer=' . urlencode(html_entity_decode($this->request->get['filter_customer'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_order_status'])) {
			$url .= '&filter_order_status=' . $this->request->get['filter_order_status'];
		}
	
		if (isset($this->request->get['filter_order_status_id'])) {
			$url .= '&filter_order_status_id=' . $this->request->get['filter_order_status_id'];
		}
			
		if (isset($this->request->get['filter_total'])) {
			$url .= '&filter_total=' . $this->request->get['filter_total'];
		}

		if (isset($this->request->get['filter_provider'])) {
		$url .= '&filter_provider=' . urlencode($this->request->get['filter_provider']);
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['filter_date_modified'])) {
			$url .= '&filter_date_modified=' . $this->request->get['filter_date_modified'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$this->response->redirect($this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . $url, true));
	}
			
	protected function getList() {
		if (isset($this->request->get['filter_order_id'])) {
			$filter_order_id = $this->request->get['filter_order_id'];
		} else {
			$filter_order_id = '';
		}

		if (isset($this->request->get['filter_customer'])) {
			$filter_customer = $this->request->get['filter_customer'];
		} else {
			$filter_customer = '';
		}

		if (isset($this->request->get['filter_order_status'])) {
			$filter_order_status = $this->request->get['filter_order_status'];
		} else {
			$filter_order_status = '';
		}
		
		if (isset($this->request->get['filter_order_status_id'])) {
			$filter_order_status_id = $this->request->get['filter_order_status_id'];
		} else {
			$filter_order_status_id = '';
		}
		
		if (isset($this->request->get['filter_total'])) {
			$filter_total = $this->request->get['filter_total'];
		} else {
			$filter_total = '';
		}
		$filter_provider = '';
		if (isset($this->request->get['filter_provider'])) {
		$filter_provider = $this->request->get['filter_provider'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$filter_date_added = $this->request->get['filter_date_added'];
		} else {
			$filter_date_added = '';
		}

		if (isset($this->request->get['filter_date_modified'])) {
			$filter_date_modified = $this->request->get['filter_date_modified'];
		} else {
			$filter_date_modified = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'o.order_id';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'DESC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['filter_order_id'])) {
			$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
		}

		if (isset($this->request->get['filter_customer'])) {
			$url .= '&filter_customer=' . urlencode(html_entity_decode($this->request->get['filter_customer'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_order_status'])) {
			$url .= '&filter_order_status=' . $this->request->get['filter_order_status'];
		}
	
		if (isset($this->request->get['filter_order_status_id'])) {
			$url .= '&filter_order_status_id=' . $this->request->get['filter_order_status_id'];
		}
			
		if (isset($this->request->get['filter_total'])) {
			$url .= '&filter_total=' . $this->request->get['filter_total'];
		}
		
		if (isset($this->request->get['filter_provider'])) {
		$url .= '&filter_provider=' . urlencode($this->request->get['filter_provider']);
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['filter_date_modified'])) {
			$url .= '&filter_date_modified=' . $this->request->get['filter_date_modified'];
		}

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
			'href' => $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['invoice'] = $this->url->link('sale/order/invoice', 'user_token=' . $this->session->data['user_token'], true);
		$data['shipping'] = $this->url->link('sale/order/shipping', 'user_token=' . $this->session->data['user_token'], true);
		$data['add'] = $this->url->link('sale/order/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = str_replace('&amp;', '&', $this->url->link('sale/order/delete', 'user_token=' . $this->session->data['user_token'] . $url, true));

		$data['orders'] = array();

		$filter_data = array(
			'filter_order_id'        => $filter_order_id,
			'filter_customer'	     => $filter_customer,
			'filter_order_status'    => $filter_order_status,
			'filter_order_status_id' => $filter_order_status_id,
			'filter_total'           => $filter_total,
			'filter_provider'        => $filter_provider,
			'filter_date_added'      => $filter_date_added,
			'filter_date_modified'   => $filter_date_modified,
			'sort'                   => $sort,
			'order'                  => $order,
			'start'                  => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'                  => $this->config->get('config_limit_admin')
		);

		$order_total = $this->model_sale_order->getTotalOrders($filter_data);

		$results = $this->model_sale_order->getOrders($filter_data);

	foreach ($results as $result) {
    $buyProviderTry = $this->model_sale_order->getOrderProviderBuyTry($result);
    $sellTry = $this->model_sale_order->getOrderSellTry($result);
    $profitTry = $this->model_sale_order->getOrderProfitTry($result);

    $data['orders'][] = array(
        'order_id'      => $result['order_id'],
        'customer'      => $result['customer'],
		'provider_name' => $result['provider_name'],
        'order_status'  => $result['order_status']
            ? $result['order_status']
            : $this->language->get('text_missing'),

        'order_status_id' => $result['order_status_id'],

        'buy_total' => $buyProviderTry !== null
            ? number_format($buyProviderTry, 2, ',', '.') . ' TL'
            : '-',

        'sell_total' => $sellTry !== null
		? number_format($sellTry, 2, ',', '.') . ' TL'
        : '-',

        'profit_total' => $profitTry !== null
            ? number_format($profitTry, 2, ',', '.') . ' TL'
            : '-',

        'total' => $this->currency->format(
            $result['total'],
            $result['currency_code'],
            $result['currency_value']
        ),

        'date_added' => date(
            $this->language->get('date_format_short'),
            strtotime($result['date_added'])
        ),

        'date_modified' => date(
            $this->language->get('date_format_short'),
            strtotime($result['date_modified'])
        ),

        'shipping_code' => $result['shipping_code'],

        'view' => $this->url->link(
            'sale/order/info',
            'user_token=' . $this->session->data['user_token']
            . '&order_id=' . $result['order_id']
            . $url,
            true
        ),

        'edit' => $this->url->link(
            'sale/order/edit',
            'user_token=' . $this->session->data['user_token']
            . '&order_id=' . $result['order_id']
            . $url,
            true
        )
    );
}

		$data['user_token'] = $this->session->data['user_token'];

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

		if (isset($this->request->get['filter_order_id'])) {
			$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
		}

		if (isset($this->request->get['filter_customer'])) {
			$url .= '&filter_customer=' . urlencode(html_entity_decode($this->request->get['filter_customer'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_order_status'])) {
			$url .= '&filter_order_status=' . $this->request->get['filter_order_status'];
		}
		
		if (isset($this->request->get['filter_order_status_id'])) {
			$url .= '&filter_order_status_id=' . $this->request->get['filter_order_status_id'];
		}
			
		if (isset($this->request->get['filter_total'])) {
			$url .= '&filter_total=' . $this->request->get['filter_total'];
		}

		if (isset($this->request->get['filter_provider'])) {
		$url .= '&filter_provider=' . urlencode($this->request->get['filter_provider']);
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['filter_date_modified'])) {
			$url .= '&filter_date_modified=' . $this->request->get['filter_date_modified'];
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_order'] = $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . '&sort=o.order_id' . $url, true);
		$data['sort_customer'] = $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . '&sort=customer' . $url, true);
		$data['sort_status'] = $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . '&sort=order_status' . $url, true);
		$data['sort_total'] = $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . '&sort=o.total' . $url, true);
		$data['sort_date_added'] = $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . '&sort=o.date_added' . $url, true);
		$data['sort_date_modified'] = $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . '&sort=o.date_modified' . $url, true);

		$url = '';

		if (isset($this->request->get['filter_order_id'])) {
			$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
		}

		if (isset($this->request->get['filter_customer'])) {
			$url .= '&filter_customer=' . urlencode(html_entity_decode($this->request->get['filter_customer'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_order_status'])) {
			$url .= '&filter_order_status=' . $this->request->get['filter_order_status'];
		}
		
		if (isset($this->request->get['filter_order_status_id'])) {
			$url .= '&filter_order_status_id=' . $this->request->get['filter_order_status_id'];
		}
			
		if (isset($this->request->get['filter_total'])) {
			$url .= '&filter_total=' . $this->request->get['filter_total'];
		}

		if (isset($this->request->get['filter_provider'])) {
		$url .= '&filter_provider=' . urlencode($this->request->get['filter_provider']);
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['filter_date_modified'])) {
			$url .= '&filter_date_modified=' . $this->request->get['filter_date_modified'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $order_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($order_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($order_total - $this->config->get('config_limit_admin'))) ? $order_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $order_total, ceil($order_total / $this->config->get('config_limit_admin')));

		$data['filter_order_id'] = $filter_order_id;
		$data['filter_customer'] = $filter_customer;
		$data['filter_order_status'] = $filter_order_status;
		$data['filter_order_status_id'] = $filter_order_status_id;
		$data['filter_total'] = $filter_total;
		$data['filter_provider'] = $filter_provider;
		$data['filter_date_added'] = $filter_date_added;
		$data['filter_date_modified'] = $filter_date_modified;

		$data['sort'] = $sort;
		$data['order'] = $order;
		$data['sort_provider'] = $this->url->link('sale/order','user_token=' . $this->session->data['user_token'] .'&sort=o.provider_name' .$url, true);

		// Poll URL for live order updates
		$poll_url = 'user_token=' . $this->session->data['user_token'] . '&format=json';
		if ($filter_order_id !== '') {
		$poll_url .= '&filter_order_id=' . $filter_order_id;
		}
		if ($filter_customer !== '') {
		$poll_url .= '&filter_customer=' . urlencode(html_entity_decode($filter_customer, ENT_QUOTES, 'UTF-8'));
		}
		if ($filter_order_status !== '') {
		$poll_url .= '&filter_order_status=' . $filter_order_status;
		}
		if ($filter_order_status_id !== '') {
		$poll_url .= '&filter_order_status_id=' . $filter_order_status_id;
		}
		if ($filter_total !== '') {
		$poll_url .= '&filter_total=' . $filter_total;
		}
		if ($filter_provider !== '') {
		$poll_url .= '&filter_provider=' . urlencode($filter_provider);
		}
		if ($filter_date_added !== '') {
		$poll_url .= '&filter_date_added=' . $filter_date_added;
		}
		if ($filter_date_modified !== '') {
		$poll_url .= '&filter_date_modified=' . $filter_date_modified;
		}
		if ($sort !== '') {
		$poll_url .= '&sort=' . $sort;
		}
		if ($order !== '') {
		$poll_url .= '&order=' . $order;
		}
		if ($page > 0) {
		$poll_url .= '&page=' . $page;
		}
		$data['poll_url'] = $this->url->link('sale/order', $poll_url, true);

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();
		$data['providers'] = $this->model_sale_order->getOrderProviders();

		// API login
		$data['catalog'] = $this->request->server['HTTPS'] ? HTTPS_CATALOG : HTTP_CATALOG;
		
		// API login
		$this->load->model('user/api');

		$api_info = $this->model_user_api->getApi($this->config->get('config_api_id'));

		if ($api_info && $this->user->hasPermission('modify', 'sale/order')) {
			$session = new Session($this->config->get('session_engine'), $this->registry);
			
			$session->start();
					
			$this->model_user_api->deleteApiSessionBySessionId($session->getId());
			
			$this->model_user_api->addApiSession($api_info['api_id'], $session->getId(), $this->request->server['REMOTE_ADDR']);
			
			$session->data['api_id'] = $api_info['api_id'];

			$data['api_token'] = $session->getId();
		} else {
			$data['api_token'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('sale/order_list', $data));
	}
		
	public function getForm() {
		$data['text_form'] = !isset($this->request->get['order_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		$url = '';

		if (isset($this->request->get['filter_order_id'])) {
			$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
		}

		if (isset($this->request->get['filter_customer'])) {
			$url .= '&filter_customer=' . urlencode(html_entity_decode($this->request->get['filter_customer'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_order_status'])) {
			$url .= '&filter_order_status=' . $this->request->get['filter_order_status'];
		}
		
		if (isset($this->request->get['filter_order_status_id'])) {
			$url .= '&filter_order_status_id=' . $this->request->get['filter_order_status_id'];
		}
			
		if (isset($this->request->get['filter_total'])) {
			$url .= '&filter_total=' . $this->request->get['filter_total'];
		}

		if (isset($this->request->get['filter_provider'])) {
		$url .= '&filter_provider=' . urlencode($this->request->get['filter_provider']);
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['filter_date_modified'])) {
			$url .= '&filter_date_modified=' . $this->request->get['filter_date_modified'];
		}

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
			'href' => $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['cancel'] = $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->request->get['order_id'])) {
			$order_info = $this->model_sale_order->getOrder($this->request->get['order_id']);
		}

		if (!empty($order_info)) {
			$data['order_id'] = (int)$this->request->get['order_id'];
			
			$data['store_id'] = $order_info['store_id'];
			$data['store_url'] = $this->request->server['HTTPS'] ? HTTPS_CATALOG : HTTP_CATALOG;

			$data['customer'] = $order_info['customer'];
			$data['customer_id'] = $order_info['customer_id'];
			$data['customer_group_id'] = $order_info['customer_group_id'];
			$data['firstname'] = $order_info['firstname'];
			$data['lastname'] = $order_info['lastname'];
			$data['email'] = $order_info['email'];
			$data['telephone'] = $order_info['telephone'];

			$data['account_custom_field'] = $order_info['custom_field'];

			$this->load->model('customer/customer');

			$data['addresses'] = $this->model_customer_customer->getAddresses($order_info['customer_id']);

			$data['payment_firstname'] = $order_info['payment_firstname'];
			$data['payment_lastname'] = $order_info['payment_lastname'];
			$data['payment_company'] = $order_info['payment_company'];
			$data['payment_address_1'] = $order_info['payment_address_1'];
			$data['payment_address_2'] = $order_info['payment_address_2'];
			$data['payment_city'] = $order_info['payment_city'];
			$data['payment_postcode'] = $order_info['payment_postcode'];
			$data['payment_country_id'] = $order_info['payment_country_id'];
			$data['payment_zone_id'] = $order_info['payment_zone_id'];
			$data['payment_custom_field'] = $order_info['payment_custom_field'];
			$data['payment_method'] = $order_info['payment_method'];
			$data['payment_code'] = $order_info['payment_code'];

			$data['shipping_firstname'] = $order_info['shipping_firstname'];
			$data['shipping_lastname'] = $order_info['shipping_lastname'];
			$data['shipping_company'] = $order_info['shipping_company'];
			$data['shipping_address_1'] = $order_info['shipping_address_1'];
			$data['shipping_address_2'] = $order_info['shipping_address_2'];
			$data['shipping_city'] = $order_info['shipping_city'];
			$data['shipping_postcode'] = $order_info['shipping_postcode'];
			$data['shipping_country_id'] = $order_info['shipping_country_id'];
			$data['shipping_zone_id'] = $order_info['shipping_zone_id'];
			$data['shipping_custom_field'] = $order_info['shipping_custom_field'];
			$data['shipping_method'] = $order_info['shipping_method'];
			$data['shipping_code'] = $order_info['shipping_code'];

			// Products
			$data['order_products'] = array();

			$products = $this->model_sale_order->getOrderProducts($this->request->get['order_id']);

			foreach ($products as $product) {
				$data['order_products'][] = array(
					'product_id' => $product['product_id'],
					'name'       => $product['name'],
					'model'      => $product['model'],
					'option'     => $this->model_sale_order->getOrderOptions($this->request->get['order_id'], $product['order_product_id']),
					'quantity'   => $product['quantity'],
					'price'      => $product['price'],
					'total'      => $product['total'],
					'reward'     => $product['reward']
				);
			}

			// Vouchers
			$data['order_vouchers'] = $this->model_sale_order->getOrderVouchers($this->request->get['order_id']);

			$data['coupon'] = '';
			$data['voucher'] = '';
			$data['reward'] = '';

			$data['order_totals'] = array();

			$order_totals = $this->model_sale_order->getOrderTotals($this->request->get['order_id']);

			foreach ($order_totals as $order_total) {
				// If coupon, voucher or reward points
				$start = strpos($order_total['title'], '(') + 1;
				$end = strrpos($order_total['title'], ')');

				if ($start && $end) {
					$data[$order_total['code']] = substr($order_total['title'], $start, $end - $start);
				}
			}

			$data['order_status_id'] = $order_info['order_status_id'];
			$data['comment'] = $order_info['comment'];
			$data['affiliate_id'] = $order_info['affiliate_id'];
			$data['affiliate'] = $order_info['affiliate_firstname'] . ' ' . $order_info['affiliate_lastname'];
			$data['currency_code'] = $order_info['currency_code'];
		} else {
			$data['order_id'] = 0;
			$data['store_id'] = 0;
			$data['store_url'] = $this->request->server['HTTPS'] ? HTTPS_CATALOG : HTTP_CATALOG;
			
			$data['customer'] = '';
			$data['customer_id'] = '';
			$data['customer_group_id'] = $this->config->get('config_customer_group_id');
			$data['firstname'] = '';
			$data['lastname'] = '';
			$data['email'] = '';
			$data['telephone'] = '';
			$data['customer_custom_field'] = array();

			$data['addresses'] = array();

			$data['payment_firstname'] = '';
			$data['payment_lastname'] = '';
			$data['payment_company'] = '';
			$data['payment_address_1'] = '';
			$data['payment_address_2'] = '';
			$data['payment_city'] = '';
			$data['payment_postcode'] = '';
			$data['payment_country_id'] = '';
			$data['payment_zone_id'] = '';
			$data['payment_custom_field'] = array();
			$data['payment_method'] = '';
			$data['payment_code'] = '';

			$data['shipping_firstname'] = '';
			$data['shipping_lastname'] = '';
			$data['shipping_company'] = '';
			$data['shipping_address_1'] = '';
			$data['shipping_address_2'] = '';
			$data['shipping_city'] = '';
			$data['shipping_postcode'] = '';
			$data['shipping_country_id'] = '';
			$data['shipping_zone_id'] = '';
			$data['shipping_custom_field'] = array();
			$data['shipping_method'] = '';
			$data['shipping_code'] = '';

			$data['order_products'] = array();
			$data['order_vouchers'] = array();
			$data['order_totals'] = array();

			$data['order_status_id'] = $this->config->get('config_order_status_id');
			$data['comment'] = '';
			$data['affiliate_id'] = '';
			$data['affiliate'] = '';
			$data['currency_code'] = $this->config->get('config_currency');

			$data['coupon'] = '';
			$data['voucher'] = '';
			$data['reward'] = '';
		}

		// Stores
		$this->load->model('setting/store');

		$data['stores'] = array();

		$data['stores'][] = array(
			'store_id' => 0,
			'name'     => $this->language->get('text_default')
		);

		$results = $this->model_setting_store->getStores();

		foreach ($results as $result) {
			$data['stores'][] = array(
				'store_id' => $result['store_id'],
				'name'     => $result['name']
			);
		}

		// Customer Groups
		$this->load->model('customer/customer_group');

		$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();

		// Custom Fields
		$this->load->model('customer/custom_field');
		$this->load->model('tool/upload');

		$data['custom_fields'] = array();

		$custom_field_locations = array(
			'account_custom_field',
			'payment_custom_field',
			'shipping_custom_field'
		);

		$filter_data = array(
			'sort'  => 'cf.sort_order',
			'order' => 'ASC'
		);

		$custom_fields = $this->model_customer_custom_field->getCustomFields($filter_data);

		foreach ($custom_fields as $custom_field) {
			$data['custom_fields'][] = array(
				'custom_field_id'    => $custom_field['custom_field_id'],
				'custom_field_value' => $this->model_customer_custom_field->getCustomFieldValues($custom_field['custom_field_id']),
				'name'               => $custom_field['name'],
				'value'              => $custom_field['value'],
				'type'               => $custom_field['type'],
				'location'           => $custom_field['location'],
				'sort_order'         => $custom_field['sort_order']
			);

			if($custom_field['type'] == 'file') {
				foreach($custom_field_locations as $location) {
					if(isset($data[$location][$custom_field['custom_field_id']])) {
						$code = $data[$location][$custom_field['custom_field_id']];

						$upload_result = $this->model_tool_upload->getUploadByCode($code);

						$data[$location][$custom_field['custom_field_id']] = array();
						if($upload_result) {
							$data[$location][$custom_field['custom_field_id']]['name'] = $upload_result['name'];
							$data[$location][$custom_field['custom_field_id']]['code'] = $upload_result['code'];
						} else {
							$data[$location][$custom_field['custom_field_id']]['name'] = "";
							$data[$location][$custom_field['custom_field_id']]['code'] = $code;
						}
					}
				}
			}
		}

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		$this->load->model('localisation/country');

		$data['countries'] = $this->model_localisation_country->getCountries();

		$this->load->model('localisation/currency');

		$data['currencies'] = $this->model_localisation_currency->getCurrencies();

		$data['voucher_min'] = $this->config->get('config_voucher_min');

		$this->load->model('sale/voucher_theme');

		$data['voucher_themes'] = $this->model_sale_voucher_theme->getVoucherThemes();

		// API login
		$data['catalog'] = $this->request->server['HTTPS'] ? HTTPS_CATALOG : HTTP_CATALOG;
		
		// API login
		$this->load->model('user/api');

		$api_info = $this->model_user_api->getApi($this->config->get('config_api_id'));

		if ($api_info && $this->user->hasPermission('modify', 'sale/order')) {
			$session = new Session($this->config->get('session_engine'), $this->registry);
			
			$session->start();
					
			$this->model_user_api->deleteApiSessionBySessionId($session->getId());
			
			$this->model_user_api->addApiSession($api_info['api_id'], $session->getId(), $this->request->server['REMOTE_ADDR']);
			
			$session->data['api_id'] = $api_info['api_id'];

			$data['api_token'] = $session->getId();
		} else {
			$data['api_token'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('sale/order_form', $data));
	}

	public function info() {
		$this->load->model('sale/order');

		if (isset($this->request->get['order_id'])) {
			$order_id = $this->request->get['order_id'];
		} else {
			$order_id = 0;
		}

		$order_info = $this->model_sale_order->getOrder($order_id);

		if ($order_info) {
			$this->load->language('sale/order');

			$this->document->setTitle($this->language->get('heading_title'));

			$data['text_ip_add'] = sprintf($this->language->get('text_ip_add'), $this->request->server['REMOTE_ADDR']);
			$data['text_order'] = sprintf($this->language->get('text_order'), $this->request->get['order_id']);

			$url = '';

			if (isset($this->request->get['filter_order_id'])) {
				$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
			}

			if (isset($this->request->get['filter_customer'])) {
				$url .= '&filter_customer=' . urlencode(html_entity_decode($this->request->get['filter_customer'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_order_status'])) {
				$url .= '&filter_order_status=' . $this->request->get['filter_order_status'];
			}
			
			if (isset($this->request->get['filter_order_status_id'])) {
				$url .= '&filter_order_status_id=' . $this->request->get['filter_order_status_id'];
			}
			
			if (isset($this->request->get['filter_total'])) {
				$url .= '&filter_total=' . $this->request->get['filter_total'];
			}
			if (isset($this->request->get['filter_provider'])) {
			$url .= '&filter_provider=' . urlencode($this->request->get['filter_provider']);
			}

			if (isset($this->request->get['filter_date_added'])) {
				$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
			}

			if (isset($this->request->get['filter_date_modified'])) {
				$url .= '&filter_date_modified=' . $this->request->get['filter_date_modified'];
			}

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
				'href' => $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . $url, true)
			);

			$data['shipping'] = $this->url->link('sale/order/shipping', 'user_token=' . $this->session->data['user_token'] . '&order_id=' . (int)$this->request->get['order_id'], true);
			$data['invoice'] = $this->url->link('sale/order/invoice', 'user_token=' . $this->session->data['user_token'] . '&order_id=' . (int)$this->request->get['order_id'], true);
			$data['edit'] = $this->url->link('sale/order/edit', 'user_token=' . $this->session->data['user_token'] . '&order_id=' . (int)$this->request->get['order_id'], true);
			$data['cancel'] = $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . $url, true);

			$data['user_token'] = $this->session->data['user_token'];

			$data['order_id'] = (int)$this->request->get['order_id'];

			$data['text_order_id'] = $this->language->get('text_order_id');
			$data['text_reservation_number'] = 'Go Araç PNR';
			$data['text_provider_order_id'] = 'Provider Order ID';
			$data['text_provider_name'] = 'Provider Name';
			$data['text_reservation_id'] = 'Reservation ID';
			$data['text_order_status'] = 'Order Status';
			$data['text_date_added'] = $this->language->get('text_date_added');
			$data['text_date_modified'] = 'Date Modified';

			$data['reservation_number'] = $order_info['reservation_number'];
			$data['provider_name'] = $order_info['provider_name'];
			$data['provider_order_id'] = $order_info['provider_order_id'];
			$data['reservation_id'] = $order_info['reservation_id'];
			$buyPrice = $this->model_sale_order->getOrderProviderBuyTry($order_info);

			$sellPrice = $this->model_sale_order->getOrderSellTry($order_info);

			$profit = $this->model_sale_order->getOrderProfitTry($order_info);

			$data['financial_summary'] = array(
    
			'buy_total' => $buyPrice !== null ? number_format($buyPrice, 2, ',', '.') . ' TL' : '-',
			'sell_total' => $sellPrice !== null ? number_format($sellPrice, 2, ',', '.') . ' TL' : '-',
			'profit_total' => $profit !== null ? number_format($profit, 2, ',', '.') . ' TL' : '-'
			);

		
			$reservation_passenger_name = trim(
			(string)$order_info['firstname'] . ' ' . (string)$order_info['lastname']
			);
			$reservation_passenger_id = trim(
			(string)($order_info['passport_no'] ?? '')
			);
			if (!$reservation_passenger_id) {
			$reservation_passenger_id = trim(
			(string)($order_info['identity_number'] ?? '')
			);
			}
			$data['reservation_customer'] = array(
				'full_name' => $reservation_passenger_name,
				'firstname' => (string)$order_info['firstname'],
				'lastname' => (string)$order_info['lastname'],
				'passport_or_id' => $reservation_passenger_id,
				'email' => (string)$order_info['email'],
				'telephone' => (string)$order_info['telephone'],
				'language_id' => (int)$order_info['language_id'],
			);

			$data['account_customer'] = array(
			'is_public' => !$order_info['customer_id'],
			'label' => $order_info['customer_id'] ? trim($order_info['firstname'] . ' ' . $order_info['lastname']) : 'PUBLIC CUSTOMER',
			'email' => $order_info['customer_id'] ? $order_info['email'] : '',
			'telephone' => $order_info['customer_id'] ? $order_info['telephone'] : ''
			);

			$data['store_id'] = $order_info['store_id'];
			$data['store_name'] = $order_info['store_name'];
			
			if ($order_info['store_id'] == 0) {
				$data['store_url'] = $this->request->server['HTTPS'] ? HTTPS_CATALOG : HTTP_CATALOG;
			} else {
				$data['store_url'] = $order_info['store_url'];
			}

			if ($order_info['invoice_no']) {
				$data['invoice_no'] = $order_info['invoice_prefix'] . $order_info['invoice_no'];
			} else {
				$data['invoice_no'] = '';
			}

			$data['date_added'] = $order_info['date_added']
			? date($this->language->get('date_format_short') . ' H:i:s', strtotime($order_info['date_added']))
			: '';

			$data['date_modified'] = $order_info['date_modified']
			? date($this->language->get('date_format_short') . ' H:i:s', strtotime($order_info['date_modified']))
			: '';

			$data['firstname'] = $order_info['firstname'];
			$data['lastname'] = $order_info['lastname'];

			if ($order_info['customer_id']) {
				$data['customer'] = $this->url->link('customer/customer/edit', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . $order_info['customer_id'], true);
			} else {
				$data['customer'] = '';
			}

			$this->load->model('customer/customer_group');

			$customer_group_info = $this->model_customer_customer_group->getCustomerGroup($order_info['customer_group_id']);

			if ($customer_group_info) {
				$data['customer_group'] = $customer_group_info['name'];
			} else {
				$data['customer_group'] = '';
			}

			$data['email'] = $order_info['email'];
			$data['telephone'] = $order_info['telephone'];

			// for admin note
			$data['admin_note'] = $order_info['goarac_admin_note'] ?? '';
			$data['save_admin_note'] = $this->url->link(
			'sale/order/saveAdminNote',
			'user_token=' . $this->session->data['user_token'] . '&order_id=' . (int)$order_info['order_id'],
			true
			);
			
			$data['shipping_method'] = $order_info['shipping_method'];
			$data['payment_method'] = $order_info['payment_method'];

			// Payment Address
			if ($order_info['payment_address_format']) {
				$format = $order_info['payment_address_format'];
			} else {
				$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
			}

			$find = array(
				'{firstname}',
				'{lastname}',
				'{company}',
				'{address_1}',
				'{address_2}',
				'{city}',
				'{postcode}',
				'{zone}',
				'{zone_code}',
				'{country}'
			);

			$replace = array(
				'firstname' => $order_info['payment_firstname'],
				'lastname'  => $order_info['payment_lastname'],
				'company'   => $order_info['payment_company'],
				'address_1' => $order_info['payment_address_1'],
				'address_2' => $order_info['payment_address_2'],
				'city'      => $order_info['payment_city'],
				'postcode'  => $order_info['payment_postcode'],
				'zone'      => $order_info['payment_zone'],
				'zone_code' => $order_info['payment_zone_code'],
				'country'   => $order_info['payment_country']
			);

			$data['payment_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

			// Shipping Address
			if ($order_info['shipping_address_format']) {
				$format = $order_info['shipping_address_format'];
			} else {
				$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
			}

			$find = array(
				'{firstname}',
				'{lastname}',
				'{company}',
				'{address_1}',
				'{address_2}',
				'{city}',
				'{postcode}',
				'{zone}',
				'{zone_code}',
				'{country}'
			);

			$replace = array(
				'firstname' => $order_info['shipping_firstname'],
				'lastname'  => $order_info['shipping_lastname'],
				'company'   => $order_info['shipping_company'],
				'address_1' => $order_info['shipping_address_1'],
				'address_2' => $order_info['shipping_address_2'],
				'city'      => $order_info['shipping_city'],
				'postcode'  => $order_info['shipping_postcode'],
				'zone'      => $order_info['shipping_zone'],
				'zone_code' => $order_info['shipping_zone_code'],
				'country'   => $order_info['shipping_country']
			);

			$data['shipping_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

			// Uploaded files
			$this->load->model('tool/upload');

			$data['products'] = array();

			$products = $this->model_sale_order->getOrderProducts($this->request->get['order_id']);

			foreach ($products as $product) {
				$option_data = array();

				$options = $this->model_sale_order->getOrderOptions($this->request->get['order_id'], $product['order_product_id']);

				foreach ($options as $option) {
					if ($option['type'] != 'file') {
						$option_data[] = array(
							'name'  => $option['name'],
							'value' => $option['value'],
							'type'  => $option['type']
						);
					} else {
						$upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

						if ($upload_info) {
							$option_data[] = array(
								'name'  => $option['name'],
								'value' => $upload_info['name'],
								'type'  => $option['type'],
								'href'  => $this->url->link('tool/upload/download', 'user_token=' . $this->session->data['user_token'] . '&code=' . $upload_info['code'], true)
							);
						}
					}
				}

				$data['products'][] = array(
					'order_product_id' => $product['order_product_id'],
					'product_id'       => $product['product_id'],
					'name'    	 	   => $product['name'],
					'model'    		   => $product['model'],
					'option'   		   => $option_data,
					'quantity'		   => $product['quantity'],
					'price'    		   => $this->currency->format($product['price'] + ($this->config->get('config_tax') ? $product['tax'] : 0), $order_info['currency_code'], $order_info['currency_value']),
					'total'    		   => $this->currency->format($product['total'] + ($this->config->get('config_tax') ? ($product['tax'] * $product['quantity']) : 0), $order_info['currency_code'], $order_info['currency_value']),
					'href'     		   => $this->url->link('catalog/product/edit', 'user_token=' . $this->session->data['user_token'] . '&product_id=' . $product['product_id'], true)
				);
			}

			$data['vouchers'] = array();

			$vouchers = $this->model_sale_order->getOrderVouchers($this->request->get['order_id']);

			foreach ($vouchers as $voucher) {
				$data['vouchers'][] = array(
					'description' => $voucher['description'],
					'amount'      => $this->currency->format($voucher['amount'], $order_info['currency_code'], $order_info['currency_value']),
					'href'        => $this->url->link('sale/voucher/edit', 'user_token=' . $this->session->data['user_token'] . '&voucher_id=' . $voucher['voucher_id'], true)
				);
			}

			$data['totals'] = array();

			$totals = $this->model_sale_order->getOrderTotals($this->request->get['order_id']);

			foreach ($totals as $total) {
				$data['totals'][] = array(
					'title' => $total['title'],
					'text'  => $this->currency->format($total['value'], $order_info['currency_code'], $order_info['currency_value'])
				);
			}

			$data['comment'] = nl2br($order_info['comment']);

			$this->load->model('customer/customer');

			$data['reward'] = $order_info['reward'];

			$data['reward_total'] = $this->model_customer_customer->getTotalCustomerRewardsByOrderId($this->request->get['order_id']);

			$data['affiliate_firstname'] = $order_info['affiliate_firstname'];
			$data['affiliate_lastname'] = $order_info['affiliate_lastname'];

			if ($order_info['affiliate_id']) {
				$data['affiliate'] = $this->url->link('customer/customer/edit', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . $order_info['affiliate_id'], true);
			} else {
				$data['affiliate'] = '';
			}

			$data['commission'] = $this->currency->format($order_info['commission'], $order_info['currency_code'], $order_info['currency_value']);

			$data['commission_total'] = $this->model_customer_customer->getTotalTransactionsByOrderId($this->request->get['order_id']);

			$this->load->model('localisation/order_status');

			$order_status_info = $this->model_localisation_order_status->getOrderStatus($order_info['order_status_id']);

			if ($order_status_info) {
				$data['order_status'] = $order_status_info['name'];
			} else {
				$data['order_status'] = '';
			}

			$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

			$data['order_status_id'] = $order_info['order_status_id'];

			$data['account_custom_field'] = $order_info['custom_field'];

			// Custom Fields
			$this->load->model('customer/custom_field');

			$data['account_custom_fields'] = array();

			$filter_data = array(
				'sort'  => 'cf.sort_order',
				'order' => 'ASC'
			);

			$custom_fields = $this->model_customer_custom_field->getCustomFields($filter_data);

			foreach ($custom_fields as $custom_field) {
				if ($custom_field['location'] == 'account' && isset($order_info['custom_field'][$custom_field['custom_field_id']])) {
					if ($custom_field['type'] == 'select' || $custom_field['type'] == 'radio') {
						$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($order_info['custom_field'][$custom_field['custom_field_id']]);

						if ($custom_field_value_info) {
							$data['account_custom_fields'][] = array(
								'name'  => $custom_field['name'],
								'value' => $custom_field_value_info['name']
							);
						}
					}

					if ($custom_field['type'] == 'checkbox' && is_array($order_info['custom_field'][$custom_field['custom_field_id']])) {
						foreach ($order_info['custom_field'][$custom_field['custom_field_id']] as $custom_field_value_id) {
							$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($custom_field_value_id);

							if ($custom_field_value_info) {
								$data['account_custom_fields'][] = array(
									'name'  => $custom_field['name'],
									'value' => $custom_field_value_info['name']
								);
							}
						}
					}

					if ($custom_field['type'] == 'text' || $custom_field['type'] == 'textarea' || $custom_field['type'] == 'file' || $custom_field['type'] == 'date' || $custom_field['type'] == 'datetime' || $custom_field['type'] == 'time') {
						$data['account_custom_fields'][] = array(
							'name'  => $custom_field['name'],
							'value' => $order_info['custom_field'][$custom_field['custom_field_id']]
						);
					}

					if ($custom_field['type'] == 'file') {
						$upload_info = $this->model_tool_upload->getUploadByCode($order_info['custom_field'][$custom_field['custom_field_id']]);

						if ($upload_info) {
							$data['account_custom_fields'][] = array(
								'name'  => $custom_field['name'],
								'value' => $upload_info['name']
							);
						}
					}
				}
			}

			// Custom fields
			$data['payment_custom_fields'] = array();

			foreach ($custom_fields as $custom_field) {
				if ($custom_field['location'] == 'address' && isset($order_info['payment_custom_field'][$custom_field['custom_field_id']])) {
					if ($custom_field['type'] == 'select' || $custom_field['type'] == 'radio') {
						$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($order_info['payment_custom_field'][$custom_field['custom_field_id']]);

						if ($custom_field_value_info) {
							$data['payment_custom_fields'][] = array(
								'name'  => $custom_field['name'],
								'value' => $custom_field_value_info['name'],
								'sort_order' => $custom_field['sort_order']
							);
						}
					}

					if ($custom_field['type'] == 'checkbox' && is_array($order_info['payment_custom_field'][$custom_field['custom_field_id']])) {
						foreach ($order_info['payment_custom_field'][$custom_field['custom_field_id']] as $custom_field_value_id) {
							$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($custom_field_value_id);

							if ($custom_field_value_info) {
								$data['payment_custom_fields'][] = array(
									'name'  => $custom_field['name'],
									'value' => $custom_field_value_info['name'],
									'sort_order' => $custom_field['sort_order']
								);
							}
						}
					}

					if ($custom_field['type'] == 'text' || $custom_field['type'] == 'textarea' || $custom_field['type'] == 'file' || $custom_field['type'] == 'date' || $custom_field['type'] == 'datetime' || $custom_field['type'] == 'time') {
						$data['payment_custom_fields'][] = array(
							'name'  => $custom_field['name'],
							'value' => $order_info['payment_custom_field'][$custom_field['custom_field_id']],
							'sort_order' => $custom_field['sort_order']
						);
					}

					if ($custom_field['type'] == 'file') {
						$upload_info = $this->model_tool_upload->getUploadByCode($order_info['payment_custom_field'][$custom_field['custom_field_id']]);

						if ($upload_info) {
							$data['payment_custom_fields'][] = array(
								'name'  => $custom_field['name'],
								'value' => $upload_info['name'],
								'sort_order' => $custom_field['sort_order']
							);
						}
					}
				}
			}

			// Shipping
			$data['shipping_custom_fields'] = array();

			foreach ($custom_fields as $custom_field) {
				if ($custom_field['location'] == 'address' && isset($order_info['shipping_custom_field'][$custom_field['custom_field_id']])) {
					if ($custom_field['type'] == 'select' || $custom_field['type'] == 'radio') {
						$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($order_info['shipping_custom_field'][$custom_field['custom_field_id']]);

						if ($custom_field_value_info) {
							$data['shipping_custom_fields'][] = array(
								'name'  => $custom_field['name'],
								'value' => $custom_field_value_info['name'],
								'sort_order' => $custom_field['sort_order']
							);
						}
					}

					if ($custom_field['type'] == 'checkbox' && is_array($order_info['shipping_custom_field'][$custom_field['custom_field_id']])) {
						foreach ($order_info['shipping_custom_field'][$custom_field['custom_field_id']] as $custom_field_value_id) {
							$custom_field_value_info = $this->model_customer_custom_field->getCustomFieldValue($custom_field_value_id);

							if ($custom_field_value_info) {
								$data['shipping_custom_fields'][] = array(
									'name'  => $custom_field['name'],
									'value' => $custom_field_value_info['name'],
									'sort_order' => $custom_field['sort_order']
								);
							}
						}
					}

					if ($custom_field['type'] == 'text' || $custom_field['type'] == 'textarea' || $custom_field['type'] == 'file' || $custom_field['type'] == 'date' || $custom_field['type'] == 'datetime' || $custom_field['type'] == 'time') {
						$data['shipping_custom_fields'][] = array(
							'name'  => $custom_field['name'],
							'value' => $order_info['shipping_custom_field'][$custom_field['custom_field_id']],
							'sort_order' => $custom_field['sort_order']
						);
					}

					if ($custom_field['type'] == 'file') {
						$upload_info = $this->model_tool_upload->getUploadByCode($order_info['shipping_custom_field'][$custom_field['custom_field_id']]);

						if ($upload_info) {
							$data['shipping_custom_fields'][] = array(
								'name'  => $custom_field['name'],
								'value' => $upload_info['name'],
								'sort_order' => $custom_field['sort_order']
							);
						}
					}
				}
			}

			$data['ip'] = $order_info['ip'];
			$data['forwarded_ip'] = $order_info['forwarded_ip'];
			$data['user_agent'] = $order_info['user_agent'];
			$data['accept_language'] = $order_info['accept_language'];

			// Additional Tabs
			$data['tabs'] = array();

			if ($this->user->hasPermission('access', 'extension/payment/' . $order_info['payment_code'])) {
				if (is_file(DIR_CATALOG . 'controller/extension/payment/' . $order_info['payment_code'] . '.php')) {
					$content = $this->load->controller('extension/payment/' . $order_info['payment_code'] . '/order');
				} else {
					$content = '';
				}

				if ($content) {
					$this->load->language('extension/payment/' . $order_info['payment_code']);

					$data['tabs'][] = array(
						'code'    => $order_info['payment_code'],
						'title'   => $this->language->get('heading_title'),
						'content' => $content
					);
				}
			}

			$this->load->model('setting/extension');

			$extensions = $this->model_setting_extension->getInstalled('fraud');

			foreach ($extensions as $extension) {
				if ($this->config->get('fraud_' . $extension . '_status')) {
					$this->load->language('extension/fraud/' . $extension, 'extension');

					$content = $this->load->controller('extension/fraud/' . $extension . '/order');

					if ($content) {
						$data['tabs'][] = array(
							'code'    => $extension,
							'title'   => $this->language->get('extension')->get('heading_title'),
							'content' => $content
						);
					}
				}
			}
			
			// The URL we send API requests to
			$data['catalog'] = $this->request->server['HTTPS'] ? HTTPS_CATALOG : HTTP_CATALOG;
			
			// API login
			$this->load->model('user/api');

			$api_info = $this->model_user_api->getApi($this->config->get('config_api_id'));

			if ($api_info && $this->user->hasPermission('modify', 'sale/order')) {
				$session = new Session($this->config->get('session_engine'), $this->registry);
				
				$session->start();
				
				$this->model_user_api->deleteApiSessionBySessionId($session->getId());
				
				$this->model_user_api->addApiSession($api_info['api_id'], $session->getId(), $this->request->server['REMOTE_ADDR']);
				
				$session->data['api_id'] = $api_info['api_id'];

				$data['api_token'] = $session->getId();
			} else {
				$data['api_token'] = '';
			}

			$data['header'] = $this->load->controller('common/header');
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['footer'] = $this->load->controller('common/footer');

			//car/vehicle
			$provider_response_raw = (string)($order_info['provider_response'] ?? '');


			$provider_response_data = json_decode(
	
			$provider_response_raw,
	
			true

			);


			if (!is_array($provider_response_data)) {
	
			$provider_response_data = array();

			}


			$car_details = json_decode(
	
			$order_info['car_details'] ?? '{}',
	
			true

			);


			if (!is_array($car_details)) {
	
			$car_details = array();

			}


			$normalized = $this->buildOrderCarContext(
	
			$car_details,
	
			$provider_response_data,
	
			$order_info

			);


			$data['car_details'] = $normalized['car_details'];

			$data['car_details_formatted_price'] = $normalized['car_details_formatted_price'];

			$data['provider_total'] = $normalized['provider_total'];


			$data['pickup'] = $normalized['pickup'];

			$data['dropoff'] = $normalized['dropoff'];
			$data['text_language_id'] = 'Language ID';
			$data['text_firstname'] = $this->language->get('entry_firstname');
			$data['text_lastname'] = $this->language->get('entry_lastname');
			$data['text_passport_or_id'] = 'Passport / ID number';
			$data['text_email'] = $this->language->get('text_email');
			$data['text_telephone'] = $this->language->get('text_telephone');

			$this->response->setOutput($this->load->view('sale/order_info', $data));
		} else {
			return new Action('error/not_found');
		}
	}

	// Format a stored amount using the correct currency
	private function formatStoredOrderMoney($amount, $currency){
		if(!is_numeric($amount)){
			return'-';

		}
		if (!$currency){
			$currency = $this->config->get('config_currency');
		}
		if(!$currency){
			$currency = 'TRY';
		}
		return $this->currency->format((float)$amount, $currency, 1, true);
	}

	// Convert a name into a simple format that can be used in file names
	private function voucherSlug($value){
		$value = trim((string)$value);

		if (!$value){
			return'';
		}
		if (function_exists('iconv')){
			$value = @iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $value);
		}
		$value = strtolower($value);
		$value = preg_replace('/[^a-z0-9]+/', '-', $value);

		return trim($value, '-');

		}

		// Get a readable provider value even when the API returns different formats
		private function normalizeProviderLabel($value ,$fallback=''){
			if (is_array($value)){
				if(!empty($value['name'])){
					return $value['name'];
				}
				if(!empty($value['displayName'])){
					return $value['displayName'];
				}
				if(!empty($value['label'])){
					return $value['label'];
				}
				if (!empty($value['code'])) {
				return $value['code'];
				}
				}
				if (is_string($value) && $value !== '') {
				return $value;
				}
				return $fallback;
				}

				// Get the price from pricing data and convert it from the smallest unit
				private function extractPricingAmount($pricing) {
				foreach (array('paymentTotal', 'total', 'fee', 'net') as $key) {
				if (!isset($pricing[$key]) || !is_array($pricing[$key])) {	
				continue;
				}	
				if (isset($pricing[$key]['amount']) && is_numeric($pricing[$key]['amount'])) {		
				return (float)$pricing[$key]['amount'] / 100;
				}
				}
				return null;
				}

				// Get the currency from the pricing data
				private function extractPricingCurrency($pricing) {
				foreach (array('paymentTotal', 'total', 'fee', 'net') as $key) {
				if (!empty($pricing[$key]['currency'])) {
				return $pricing[$key]['currency'];			
				}	
				}	
				return '';
				}	 
				
				// Normalize the rental rules into one simple format
				private function normalizeRules($rules) {
				if (!is_array($rules)) {	
				return array();
				}
				if (	
				isset($rules['deposit']) ||	
				isset($rules['rangeLimit']) ||	
				isset($rules['minDriverAge']) ||	
				isset($rules['minLicenseYear'])
				) {
				if (isset($rules['deposit']['amount']) && is_numeric($rules['deposit']['amount'])) {	
				$rules['deposit']['amount'] =	
				(float)$rules['deposit']['amount'] / 100;	
				}		
				return $rules;	
				}
				$result = array();
				foreach ($rules as $rule) {	
				if (!is_array($rule)) {	
				continue;
				}	
				$type = $rule['type'] ?? $rule['name'] ?? '';	
				if ($type === 'deposit' && isset($rule['deposit'])) {	
				$result['deposit'] = $rule['deposit'];	
			}
			if ($type === 'rangeLimit' && isset($rule['rangeLimit'])) {
			$result['rangeLimit'] = $rule['rangeLimit'];
		}

		if ($type === 'minDriverAge' && isset($rule['minDriverAge'])) {
			$result['minDriverAge'] = $rule['minDriverAge'];
		}

		if ($type === 'minLicenseYear' && isset($rule['minLicenseYear'])) {
			$result['minLicenseYear'] = $rule['minLicenseYear'];
		}
	}

	return $result;
}

         // Prepare pickup or dropoff office data for the Twig
		 private function normalizeOfficeInfo($office, $date_time, $label) {
	if (!is_array($office)) {
		return array();
	}

	$address = $office['address'] ?? array();
	$address_lines = array();

	foreach (array('street', 'adm2', 'adm1', 'country', 'zipCode') as $key) {
		if (!empty($address[$key])) {
			$address_lines[] = $address[$key];
		}
	}

	$phones = array();

	if (!empty($office['phones']) && is_array($office['phones'])) {
		foreach ($office['phones'] as $phone) {
			if ($phone) {
				$phones[] = $phone;
			}
		}
	} elseif (!empty($office['telephone'])) {
		$phones[] = $office['telephone'];
	}

	$opening_hours = array();

	if (!empty($office['openingHours']) && is_array($office['openingHours'])) {
		$days = array(
			1 => 'Mon',
			2 => 'Tue',
			3 => 'Wed',
			4 => 'Thu',
			5 => 'Fri',
			6 => 'Sat',
			7 => 'Sun'
		);

		foreach ($office['openingHours'] as $hours) {
			if (!is_array($hours)) {
				continue;
			}

			$day = $days[$hours['dayOfWeek'] ?? 0] ?? '';
			$open = $hours['open'] ?? '';
			$close = $hours['close'] ?? '';

			if ($day && $open && $close) {
				$opening_hours[] = $day . ' ' . $open . ' - ' . $close;
			}
		}
	}

	$formatted_date = '';

	if ($date_time) {
		$formatted_date = date(
			$this->language->get('date_format_short') . ' H:i',
			strtotime($date_time)
		);
	}

	return array(
		'label' => $label,
		'date_time' => $formatted_date,
		'delivery_type' => $this->normalizeProviderLabel($office['deliveryType'] ?? ''),
		'iata' => $office['iataCode'] ?? '',
		'address_lines' => $address_lines,
		'phones' => $phones,
		'email' => $office['email'] ?? '',
		'opening_hours' => $opening_hours
	);
}

// Find the car image stored on the server
private function resolveVoucherCarImage($car) {
	$name = trim(
		($car['brand'] ?? '') . ' ' .
		($car['model'] ?? '')
	);

	$slug = $this->voucherSlug($name);

	if ($slug) {
		$files = array(
			DIR_IMAGE . 'car-images-pdf/' . $slug . '.jpg',
			DIR_IMAGE . 'car-images/' . $slug . '.webp'
		);

		foreach ($files as $file) {
			if (is_file($file)) {
				return $file;
			}
		}
	}

	$brand = $this->voucherSlug($car['brand'] ?? '');

	if ($brand) {
		$files = glob(DIR_IMAGE . 'car-images-pdf/' . $brand . '-*.jpg');

		if (!empty($files) && is_file($files[0])) {
			return $files[0];
		}

		$files = glob(DIR_IMAGE . 'car-images/' . $brand . '-*.webp');

		if (!empty($files) && is_file($files[0])) {
			return $files[0];
		}
	}

	if (!empty($car['image'])) {
		return $car['image'];
	}

	return '';
}

// Convert the car image path into a URL for the page
private function resolveAdminCarImageUrl($car) {
	$image = $this->resolveVoucherCarImage($car);

	if (!$image) {
		return '';
	}

	if (strpos($image, DIR_IMAGE) === 0) {
		$image = str_replace('\\', '/', substr($image, strlen(DIR_IMAGE)));

		return $this->adminImageUrl($image);
	}

	if (strpos($image, '/image/') === 0) {
		return (defined('HTTPS_CATALOG') ? HTTPS_CATALOG : HTTP_CATALOG) . ltrim($image, '/');
	}

	return $image;
}

// Find the vendor logo stored locally
private function resolveVoucherVendorLogo($vendor) {
	$name = $vendor['name'] ?? $vendor['displayName'] ?? '';
	$slug = $this->voucherSlug($name);

	if ($slug) {
		$file = DIR_IMAGE . 'vendor/goarac-' . $slug . '.png';

		if (is_file($file)) {
			return $file;
		}
	}

	if (!empty($vendor['logo'])) {
		return $vendor['logo'];
	}

	return '';
}

// Convert the vendor logo into a displayable URL
private function normalizeLogoUrl($logo, $vendor = array()) {
	$localLogo = $this->resolveVoucherVendorLogo($vendor);

	if ($localLogo) {
		if (strpos($localLogo, DIR_IMAGE) === 0) {
			$localLogo = str_replace('\\', '/', substr($localLogo, strlen(DIR_IMAGE)));
			return $this->adminImageUrl($localLogo);
		}

		return $localLogo;
	}

	return $this->adminImageUrl('goarac-logo.png');
}

// Build a URL for an image inside the image folder
private function adminImageUrl($image) {
	$base = defined('HTTPS_CATALOG') ? HTTPS_CATALOG : HTTP_CATALOG;

	return rtrim($base, '/') . '/image/' . ltrim($image, '/');
}
// Normalize extra products before sending them to the Twig
private function normalizeOrderExtraProducts($extra_products, $provider_response) {
	$result = array();

	foreach ($extra_products as $extra) {
		if (!is_array($extra)) {
			continue;
		}

		$extra['name'] = $this->normalizeProviderLabel(
			$extra['name'] ?? '',
			$extra['type'] ?? ''
		); 
		if (
			!isset($extra['price']) ||
			$extra['price'] === null
		) {
			if (
				isset($extra['pricing']) &&
				is_array($extra['pricing'])
			) {
				$extra['price'] = $this->extractPricingAmount(
					$extra['pricing']
				);

				$extra['currency'] = $this->extractPricingCurrency(
					$extra['pricing']
				);
			}
		}

		$result[] = $extra;
	}

	return $result;
}

// Build the car and reservation data used by the order page
private function buildOrderCarContext($car_details, $provider_response, $order_info) {
	$car = $car_details;
	$has_source = !empty($car);

	// If car_details is empty, try the car data from the provider response
	if (
		!$has_source &&
		isset($provider_response['orderedCarProduct']['car']) &&
		is_array($provider_response['orderedCarProduct']['car'])
	) {
		$car = $provider_response['orderedCarProduct']['car'];
		$has_source = true;
	}

	// If no car data exists, return the basic order information
	if (!$has_source) {
		return array(
			'car_details' => null,
			'car_details_formatted_price' => null,
			'provider_total' => $this->formatStoredOrderMoney(
				$order_info['total_cost'] ?? $order_info['total'] ?? 0,
				$order_info['currency_code'] ?? 'TRY'
			),
			'pickup' => array(),
			'dropoff' => array()
		);
	}
// Normalize the main car information
$car['brand'] = $this->normalizeProviderLabel($car['brand'] ?? '');
$car['model'] = $this->normalizeProviderLabel($car['model'] ?? '');
$car['class'] = $this->normalizeProviderLabel($car['class'] ?? '');
$car['fuel'] = $this->normalizeProviderLabel($car['fuel'] ?? '');
$car['transmission'] = $this->normalizeProviderLabel($car['transmission'] ?? '');
$car['segment'] = $this->normalizeProviderLabel($car['segment'] ?? '');

// Get the delivery type
if (isset($car['deliveryType'])) {
	$car['deliveryType'] = $this->normalizeProviderLabel(
		$car['deliveryType']
	);
} elseif (
	isset($car['appointment']['checkInOffice']['deliveryType'])
) {
	$car['deliveryType'] = $this->normalizeProviderLabel(
		$car['appointment']['checkInOffice']['deliveryType']
	);
}
	// Prepare the car image
	$local_admin_image = $this->resolveAdminCarImageUrl($car);

	if ($local_admin_image !== '') {
		$car['image'] = $local_admin_image;
	} else {
		$car['image'] = $this->adminImageUrl(
			'cache/placeholder-228x228.png'
		);
	}

	$car['imageUrl'] = $car['image'];
	$car['imageURL'] = $car['image'];

	$car['images'] = array(
		array(
			'size' => 'local',
			'url' => $car['image']
		)
	);
	// Prepare the rental vendor information
	if (
		isset($car['vendor']) &&
		is_array($car['vendor'])
	) {
		$vendor = $car['vendor'];

		$vendor['displayName'] = $this->normalizeProviderLabel(
			$vendor['displayName'] ?? '',
			$vendor['name'] ?? ''
		);

		$vendor['name'] = $this->normalizeProviderLabel(
			$vendor['name'] ?? '',
			$vendor['displayName'] ?? ''
		);

		$vendor['logo'] = $this->normalizeLogoUrl(
			$vendor['logo'] ?? '',
			$vendor
		);

		$car['vendor'] = $vendor;
	}
	// Prepare the rental conditions PDF
	if (
		isset($car['rentalConditions']) &&
		is_array($car['rentalConditions'])
	) {
		$car['rentalConditionsPDF'] =
			$car['rentalConditions']['termsConditionPDF']
			?? ($car['rentalConditions']['pdf'] ?? null);
	}	
	// Normalize the rental rules
	$car['rules'] = $this->normalizeRules(
		$car['rules'] ?? null
	);
	// Prepare the car price and currency
	if (
		!isset($car['price']) ||
		!isset($car['currency'])
	) {
		$pricing = $car['pricing'] ?? array();

		if (is_array($pricing)) {
			$price_amount = $this->extractPricingAmount($pricing);
			$price_currency = $this->extractPricingCurrency($pricing);

			if ($price_amount !== null) {
				$car['price'] = $price_amount;
				$car['currency'] =
					$price_currency ?: ($car['currency'] ?? '');
			}
		}
	}
	// Format the car price for display
	$formatted_price = null;

	if (
		isset($car['price'], $car['currency']) &&
		$car['currency']
	) {
		$formatted_price = $this->currency->format(
			(float)$car['price'],
			$car['currency'],
			1,
			true
		);
	}
	// If the car price is not available, use the stored order price
	$provider_total = $formatted_price;

	if (!$provider_total) {
		$provider_total = $this->formatStoredOrderMoney(
			$order_info['total_cost'] ?? $order_info['total'] ?? 0,
			$order_info['currency_code'] ?? 'TRY'
		);
	}

	// Prepare pickup information
	$pickup = $this->normalizeOfficeInfo(
		$car['appointment']['checkInOffice'] ?? null,
		$car['appointment']['checkInDateTime'] ?? null,
		'Pickup'
	);

	// Prepare dropoff information
	$dropoff = $this->normalizeOfficeInfo(
		$car['appointment']['checkOutOffice'] ?? null,
		$car['appointment']['checkOutDateTime'] ?? null,
		'Dropoff'
	);

	// Return all prepared car data to the order page
	return array(
		'car_details' => !empty($car) ? $car : null,
		'car_details_formatted_price' => $formatted_price,
		'provider_total' => $provider_total,
		'pickup' => $pickup,
		'dropoff' => $dropoff
	);
}

    // for  button save note in order
	public function saveAdminNote() {
    $json = array();

    if (!$this->user->hasPermission('modify', 'sale/order')) {
        $json['error'] = 'You do not have permission to modify orders.';
    } else {
        $order_id = isset($this->request->get['order_id'])
            ? (int)$this->request->get['order_id']
            : 0;

        if ($order_id <= 0) {
            $json['error'] = 'Order not found.';
        } else {
            $this->load->model('sale/order');

            $order_info = $this->model_sale_order->getOrder($order_id);

            if (!$order_info) {
                $json['error'] = 'Order not found.';
            } else {
                $note = isset($this->request->post['admin_note'])
                    ? trim((string)$this->request->post['admin_note'])
                    : '';

                $this->model_sale_order->saveOrderAdminNote($order_id, $note);

                $json['success'] = 'Admin note saved.';
            }
        }
    }

    $this->response->addHeader('Content-Type: application/json');
    $this->response->setOutput(json_encode($json));
}


	protected function validate() {
		if (!$this->user->hasPermission('modify', 'sale/order')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
	
	public function createInvoiceNo() {
		$this->load->language('sale/order');

		$json = array();

		if (!$this->user->hasPermission('modify', 'sale/order')) {
			$json['error'] = $this->language->get('error_permission');
		} elseif (isset($this->request->get['order_id'])) {
			if (isset($this->request->get['order_id'])) {
				$order_id = $this->request->get['order_id'];
			} else {
				$order_id = 0;
			}

			$this->load->model('sale/order');

			$invoice_no = $this->model_sale_order->createInvoiceNo($order_id);

			if ($invoice_no) {
				$json['invoice_no'] = $invoice_no;
			} else {
				$json['error'] = $this->language->get('error_action');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function addReward() {
		$this->load->language('sale/order');

		$json = array();

		if (!$this->user->hasPermission('modify', 'sale/order')) {
			$json['error'] = $this->language->get('error_permission');
		} else {
			if (isset($this->request->get['order_id'])) {
				$order_id = $this->request->get['order_id'];
			} else {
				$order_id = 0;
			}

			$this->load->model('sale/order');

			$order_info = $this->model_sale_order->getOrder($order_id);

			if ($order_info && $order_info['customer_id'] && ($order_info['reward'] > 0)) {
				$this->load->model('customer/customer');

				$reward_total = $this->model_customer_customer->getTotalCustomerRewardsByOrderId($order_id);

				if (!$reward_total) {
					$this->model_customer_customer->addReward($order_info['customer_id'], $this->language->get('text_order_id') . ' #' . $order_id, $order_info['reward'], $order_id);
				}
			}

			$json['success'] = $this->language->get('text_reward_added');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function removeReward() {
		$this->load->language('sale/order');

		$json = array();

		if (!$this->user->hasPermission('modify', 'sale/order')) {
			$json['error'] = $this->language->get('error_permission');
		} else {
			if (isset($this->request->get['order_id'])) {
				$order_id = $this->request->get['order_id'];
			} else {
				$order_id = 0;
			}

			$this->load->model('sale/order');

			$order_info = $this->model_sale_order->getOrder($order_id);

			if ($order_info) {
				$this->load->model('customer/customer');

				$this->model_customer_customer->deleteReward($order_id);
			}

			$json['success'] = $this->language->get('text_reward_removed');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function addCommission() {
		$this->load->language('sale/order');

		$json = array();

		if (!$this->user->hasPermission('modify', 'sale/order')) {
			$json['error'] = $this->language->get('error_permission');
		} else {
			if (isset($this->request->get['order_id'])) {
				$order_id = $this->request->get['order_id'];
			} else {
				$order_id = 0;
			}

			$this->load->model('sale/order');

			$order_info = $this->model_sale_order->getOrder($order_id);

			if ($order_info) {
				$this->load->model('customer/customer');

				$affiliate_total = $this->model_customer_customer->getTotalTransactionsByOrderId($order_id);

				if (!$affiliate_total) {
					$this->model_customer_customer->addTransaction($order_info['affiliate_id'], $this->language->get('text_order_id') . ' #' . $order_id, $order_info['commission'], $order_id);
				}
			}

			$json['success'] = $this->language->get('text_commission_added');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function removeCommission() {
		$this->load->language('sale/order');

		$json = array();

		if (!$this->user->hasPermission('modify', 'sale/order')) {
			$json['error'] = $this->language->get('error_permission');
		} else {
			if (isset($this->request->get['order_id'])) {
				$order_id = $this->request->get['order_id'];
			} else {
				$order_id = 0;
			}

			$this->load->model('sale/order');

			$order_info = $this->model_sale_order->getOrder($order_id);

			if ($order_info) {
				$this->load->model('customer/customer');

				$this->model_customer_customer->deleteTransactionByOrderId($order_id);
			}

			$json['success'] = $this->language->get('text_commission_removed');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function history() {
		$this->load->language('sale/order');

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$data['histories'] = array();

		$this->load->model('sale/order');

		$results = $this->model_sale_order->getOrderHistories($this->request->get['order_id'], ($page - 1) * 10, 10);

		foreach ($results as $result) {
			$data['histories'][] = array(
				'notify'     => $result['notify'] ? $this->language->get('text_yes') : $this->language->get('text_no'),
				'status'     => $result['status'],
				'comment'    => nl2br($result['comment']),
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added']))
			);
		}

		$history_total = $this->model_sale_order->getTotalOrderHistories($this->request->get['order_id']);

		$pagination = new Pagination();
		$pagination->total = $history_total;
		$pagination->page = $page;
		$pagination->limit = 10;
		$pagination->url = $this->url->link('sale/order/history', 'user_token=' . $this->session->data['user_token'] . '&order_id=' . $this->request->get['order_id'] . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($history_total) ? (($page - 1) * 10) + 1 : 0, ((($page - 1) * 10) > ($history_total - 10)) ? $history_total : ((($page - 1) * 10) + 10), $history_total, ceil($history_total / 10));

		$this->response->setOutput($this->load->view('sale/order_history', $data));
	}

	public function invoice() {
		$this->load->language('sale/order');

		$data['title'] = $this->language->get('text_invoice');

		if ($this->request->server['HTTPS']) {
			$data['base'] = HTTPS_SERVER;
		} else {
			$data['base'] = HTTP_SERVER;
		}

		$data['direction'] = $this->language->get('direction');
		
		$data['lang'] = $this->language->get('code');

		$this->load->model('sale/order');

		$this->load->model('setting/setting');

		$data['orders'] = array();

		$orders = array();

		if (isset($this->request->post['selected'])) {
			$orders = $this->request->post['selected'];
		} elseif (isset($this->request->get['order_id'])) {
			$orders[] = $this->request->get['order_id'];
		}

		foreach ($orders as $order_id) {
			$order_info = $this->model_sale_order->getOrder($order_id);
			
			$text_order = sprintf($this->language->get('text_order'), $order_id);
			
			if ($order_info) {
				$store_info = $this->model_setting_setting->getSetting('config', $order_info['store_id']);

				if ($store_info) {
					$store_address = $store_info['config_address'];
					$store_email = $store_info['config_email'];
					$store_telephone = $store_info['config_telephone'];
					$store_fax = $store_info['config_fax'];
				} else {
					$store_address = $this->config->get('config_address');
					$store_email = $this->config->get('config_email');
					$store_telephone = $this->config->get('config_telephone');
					$store_fax = $this->config->get('config_fax');
				}

				if ($order_info['invoice_no']) {
					$invoice_no = $order_info['invoice_prefix'] . $order_info['invoice_no'];
				} else {
					$invoice_no = '';
				}

				if ($order_info['payment_address_format']) {
					$format = $order_info['payment_address_format'];
				} else {
					$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
				}

				$find = array(
					'{firstname}',
					'{lastname}',
					'{company}',
					'{address_1}',
					'{address_2}',
					'{city}',
					'{postcode}',
					'{zone}',
					'{zone_code}',
					'{country}'
				);

				$replace = array(
					'firstname' => $order_info['payment_firstname'],
					'lastname'  => $order_info['payment_lastname'],
					'company'   => $order_info['payment_company'],
					'address_1' => $order_info['payment_address_1'],
					'address_2' => $order_info['payment_address_2'],
					'city'      => $order_info['payment_city'],
					'postcode'  => $order_info['payment_postcode'],
					'zone'      => $order_info['payment_zone'],
					'zone_code' => $order_info['payment_zone_code'],
					'country'   => $order_info['payment_country']
				);

				$payment_address = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

				if ($order_info['shipping_address_format']) {
					$format = $order_info['shipping_address_format'];
				} else {
					$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
				}

				$find = array(
					'{firstname}',
					'{lastname}',
					'{company}',
					'{address_1}',
					'{address_2}',
					'{city}',
					'{postcode}',
					'{zone}',
					'{zone_code}',
					'{country}'
				);

				$replace = array(
					'firstname' => $order_info['shipping_firstname'],
					'lastname'  => $order_info['shipping_lastname'],
					'company'   => $order_info['shipping_company'],
					'address_1' => $order_info['shipping_address_1'],
					'address_2' => $order_info['shipping_address_2'],
					'city'      => $order_info['shipping_city'],
					'postcode'  => $order_info['shipping_postcode'],
					'zone'      => $order_info['shipping_zone'],
					'zone_code' => $order_info['shipping_zone_code'],
					'country'   => $order_info['shipping_country']
				);

				$shipping_address = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

				$this->load->model('tool/upload');

				$product_data = array();

				$products = $this->model_sale_order->getOrderProducts($order_id);

				foreach ($products as $product) {
					$option_data = array();

					$options = $this->model_sale_order->getOrderOptions($order_id, $product['order_product_id']);

					foreach ($options as $option) {
						if ($option['type'] != 'file') {
							$value = $option['value'];
						} else {
							$upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

							if ($upload_info) {
								$value = $upload_info['name'];
							} else {
								$value = '';
							}
						}

						$option_data[] = array(
							'name'  => $option['name'],
							'value' => $value
						);
					}

					$product_data[] = array(
						'name'     => $product['name'],
						'model'    => $product['model'],
						'option'   => $option_data,
						'quantity' => $product['quantity'],
						'price'    => $this->currency->format($product['price'] + ($this->config->get('config_tax') ? $product['tax'] : 0), $order_info['currency_code'], $order_info['currency_value']),
						'total'    => $this->currency->format($product['total'] + ($this->config->get('config_tax') ? ($product['tax'] * $product['quantity']) : 0), $order_info['currency_code'], $order_info['currency_value'])
					);
				}

				$voucher_data = array();

				$vouchers = $this->model_sale_order->getOrderVouchers($order_id);

				foreach ($vouchers as $voucher) {
					$voucher_data[] = array(
						'description' => $voucher['description'],
						'amount'      => $this->currency->format($voucher['amount'], $order_info['currency_code'], $order_info['currency_value'])
					);
				}

				$total_data = array();

				$totals = $this->model_sale_order->getOrderTotals($order_id);

				foreach ($totals as $total) {
					$total_data[] = array(
						'title' => $total['title'],
						'text'  => $this->currency->format($total['value'], $order_info['currency_code'], $order_info['currency_value'])
					);
				}

				$data['orders'][] = array(
					'order_id'	   => $order_id,
					'invoice_no'       => $invoice_no,
					'text_order'	   => $text_order,
					'date_added'       => date($this->language->get('date_format_short'), strtotime($order_info['date_added'])),
					'store_name'       => $order_info['store_name'],
					'store_url'        => rtrim($order_info['store_url'], '/'),
					'store_address'    => nl2br($store_address),
					'store_email'      => $store_email,
					'store_telephone'  => $store_telephone,
					'store_fax'        => $store_fax,
					'email'            => $order_info['email'],
					'telephone'        => $order_info['telephone'],
					'shipping_address' => $shipping_address,
					'shipping_method'  => $order_info['shipping_method'],
					'payment_address'  => $payment_address,
					'payment_method'   => $order_info['payment_method'],
					'product'          => $product_data,
					'voucher'          => $voucher_data,
					'total'            => $total_data,
					'comment'          => nl2br($order_info['comment'])
				);
			}
		}

		$this->response->setOutput($this->load->view('sale/order_invoice', $data));
	}

	public function shipping() {
		$this->load->language('sale/order');

		$data['title'] = $this->language->get('text_shipping');

		if ($this->request->server['HTTPS']) {
			$data['base'] = HTTPS_SERVER;
		} else {
			$data['base'] = HTTP_SERVER;
		}

		$data['direction'] = $this->language->get('direction');
		$data['lang'] = $this->language->get('code');

		$this->load->model('sale/order');

		$this->load->model('catalog/product');

		$this->load->model('setting/setting');

		$data['orders'] = array();

		$orders = array();

		if (isset($this->request->post['selected'])) {
			$orders = $this->request->post['selected'];
		} elseif (isset($this->request->get['order_id'])) {
			$orders[] = $this->request->get['order_id'];
		}

		foreach ($orders as $order_id) {
			$order_info = $this->model_sale_order->getOrder($order_id);

			// Make sure there is a shipping method
			if ($order_info && $order_info['shipping_code']) {
				$store_info = $this->model_setting_setting->getSetting('config', $order_info['store_id']);

				if ($store_info) {
					$store_address = $store_info['config_address'];
					$store_email = $store_info['config_email'];
					$store_telephone = $store_info['config_telephone'];
				} else {
					$store_address = $this->config->get('config_address');
					$store_email = $this->config->get('config_email');
					$store_telephone = $this->config->get('config_telephone');
				}

				if ($order_info['invoice_no']) {
					$invoice_no = $order_info['invoice_prefix'] . $order_info['invoice_no'];
				} else {
					$invoice_no = '';
				}

				if ($order_info['shipping_address_format']) {
					$format = $order_info['shipping_address_format'];
				} else {
					$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
				}

				$find = array(
					'{firstname}',
					'{lastname}',
					'{company}',
					'{address_1}',
					'{address_2}',
					'{city}',
					'{postcode}',
					'{zone}',
					'{zone_code}',
					'{country}'
				);

				$replace = array(
					'firstname' => $order_info['shipping_firstname'],
					'lastname'  => $order_info['shipping_lastname'],
					'company'   => $order_info['shipping_company'],
					'address_1' => $order_info['shipping_address_1'],
					'address_2' => $order_info['shipping_address_2'],
					'city'      => $order_info['shipping_city'],
					'postcode'  => $order_info['shipping_postcode'],
					'zone'      => $order_info['shipping_zone'],
					'zone_code' => $order_info['shipping_zone_code'],
					'country'   => $order_info['shipping_country']
				);

				$shipping_address = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

				$this->load->model('tool/upload');

				$product_data = array();

				$products = $this->model_sale_order->getOrderProducts($order_id);

				foreach ($products as $product) {
					$option_weight = 0;

					$product_info = $this->model_catalog_product->getProduct($product['product_id']);

					if ($product_info) {
						$option_data = array();

						$options = $this->model_sale_order->getOrderOptions($order_id, $product['order_product_id']);

						foreach ($options as $option) {
							if ($option['type'] != 'file') {
								$value = $option['value'];
							} else {
								$upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

								if ($upload_info) {
									$value = $upload_info['name'];
								} else {
									$value = '';
								}
							}

							$option_data[] = array(
								'name'  => $option['name'],
								'value' => $value
							);

							$product_option_value_info = $this->model_catalog_product->getProductOptionValue($product['product_id'], $option['product_option_value_id']);

							if (!empty($product_option_value_info['weight'])) {
								if ($product_option_value_info['weight_prefix'] == '+') {
									$option_weight += $product_option_value_info['weight'];
								} elseif ($product_option_value_info['weight_prefix'] == '-') {
									$option_weight -= $product_option_value_info['weight'];
								}
							}
						}

						$product_data[] = array(
							'name'     => $product_info['name'],
							'model'    => $product_info['model'],
							'option'   => $option_data,
							'quantity' => $product['quantity'],
							'location' => $product_info['location'],
							'sku'      => $product_info['sku'],
							'upc'      => $product_info['upc'],
							'ean'      => $product_info['ean'],
							'jan'      => $product_info['jan'],
							'isbn'     => $product_info['isbn'],
							'mpn'      => $product_info['mpn'],
							'weight'   => $this->weight->format(($product_info['weight'] + (float)$option_weight) * $product['quantity'], $product_info['weight_class_id'], $this->language->get('decimal_point'), $this->language->get('thousand_point'))
						);
					}
				}

				$data['orders'][] = array(
					'order_id'	       => $order_id,
					'invoice_no'       => $invoice_no,
					'date_added'       => date($this->language->get('date_format_short'), strtotime($order_info['date_added'])),
					'store_name'       => $order_info['store_name'],
					'store_url'        => rtrim($order_info['store_url'], '/'),
					'store_address'    => nl2br($store_address),
					'store_email'      => $store_email,
					'store_telephone'  => $store_telephone,
					'email'            => $order_info['email'],
					'telephone'        => $order_info['telephone'],
					'shipping_address' => $shipping_address,
					'shipping_method'  => $order_info['shipping_method'],
					'product'          => $product_data,
					'comment'          => nl2br($order_info['comment'])
				);
			}
		}

		$this->response->setOutput($this->load->view('sale/order_shipping', $data));
	}
}
