<?php
class ControllerExtensionProviderYolcuProvider2 extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/provider/yolcu_provider2');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_yolcu_provider2', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect(
				$this->url->link(
					'extension/provider/yolcu_provider2',
					'user_token=' . $this->session->data['user_token'],
					true
				)
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

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link(
				'common/dashboard',
				'user_token=' . $this->session->data['user_token'],
				true
			)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link(
				'marketplace/extension',
				'user_token=' . $this->session->data['user_token'],
				true
			)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link(
				'extension/provider/yolcu_provider2',
				'user_token=' . $this->session->data['user_token'],
				true
			)
		);

		$data['action'] = $this->url->link(
			'extension/provider/yolcu_provider2',
			'user_token=' . $this->session->data['user_token'],
			true
		);

		$data['cancel'] = $this->url->link(
			'extension/extension/provider',
			'user_token=' . $this->session->data['user_token'],
			true
		);

		$fields = array(
			'module_yolcu_provider2_status',
			'module_yolcu_provider2_api_url',
			'module_yolcu_provider2_api_key',
			'module_yolcu_provider2_api_secret',
			'module_yolcu_provider2_default_currency',
			'module_yolcu_provider2_default_language',
			'module_yolcu_provider2_api_logging_status',
			'module_yolcu_provider2_search_commission_status',
			'module_yolcu_provider2_commission_type',
			'module_yolcu_provider2_commission_percentage',
			'module_yolcu_provider2_commission_fixed_amount',
			'module_yolcu_provider2_campaign_code_status',
			'module_yolcu_provider2_campaign_code',
			'module_yolcu_provider2_api_payment_type',
			'module_yolcu_provider2_api_payment_is_full_credit',
			'module_yolcu_provider2_api_payment_is_limited_credit',
			'module_yolcu_provider2_endpoint_auth_login',
			'module_yolcu_provider2_endpoint_auth_refresh',
			'module_yolcu_provider2_endpoint_locations',
			'module_yolcu_provider2_endpoint_search',
			'module_yolcu_provider2_endpoint_orders',
			'module_yolcu_provider2_endpoint_payment_process',
			'module_yolcu_provider2_endpoint_payment_3d_secure_callback',
			'module_yolcu_provider2_endpoint_helper_car_classes',
			'module_yolcu_provider2_endpoint_helper_fuel_types',
			'module_yolcu_provider2_endpoint_helper_transmission_types',
			'module_yolcu_provider2_endpoint_helper_delivery_types',
			'module_yolcu_provider2_endpoint_helper_extra_products',
			'module_yolcu_provider2_endpoint_helper_suppliers',
			'module_yolcu_provider2_site_content_json'
		);

		foreach ($fields as $field) {
			if (isset($this->request->post[$field])) {
				$data[$field] = $this->request->post[$field];
			} else {
				$data[$field] = $this->config->get($field);
			}
		}

		$this->load->model('localisation/currency');

		$data['currencies'] = $this->model_localisation_currency->getCurrencies();

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput(
			$this->load->view(
				'extension/provider/yolcu_provider2',
				$data
			)
		);
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/provider/yolcu_provider2')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}