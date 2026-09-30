<?php
class ControllerCustomerPaymentCard extends Controller {
	public function index() {
		$this->load->language('customer/payment_card');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['heading_title'] = $this->language->get('heading_title');

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('customer/payment_card', $data));
	}
}