<?php
class ControllerExtensionExtensionProvider extends Controller {
	
	public function index() {
		$this->load->language('extension/extension/provider');

		$this->load->model('user/user_group');

		$this->addProviderPermissions();

		$this->getList();
	}

	protected function addProviderPermissions() {
		$user_group_id = $this->user->getGroupId();

		$this->model_user_user_group->addPermission(
			$user_group_id,
			'access',
			'extension/provider/yolcu_provider1'
		);

		$this->model_user_user_group->addPermission(
			$user_group_id,
			'access',
			'extension/provider/yolcu_provider2'
		);
	}

	protected function getList() {
		$data['heading_title'] = $this->language->get('heading_title');

		$data['user_token'] = $this->session->data['user_token'];

		$data['providers'] = array();

		$files = glob(DIR_APPLICATION . 'controller/extension/provider/*.php');

		if ($files) {
			foreach ($files as $file) {
				$provider = basename($file, '.php');

				if ($provider == 'provider') {
					continue;
				}

				$this->load->language('extension/provider/' . $provider, 'extension');

				$data['providers'][] = array(
					'name' => $this->language->get('extension')->get('heading_title'),
					'href' => $this->url->link(
						'extension/provider/' . $provider,
						'user_token=' . $this->session->data['user_token'],
						true
					)
				);
			}
		}

		$this->response->setOutput(
			$this->load->view('extension/extension/provider', $data)
		);
	}
}