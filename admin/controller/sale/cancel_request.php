<?php
class ControllerSaleCancelRequest extends Controller {

	public function index() {
		$this->load->language('sale/cancel_request');
		$this->load->model('sale/cancel_request');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->getList();
	}

	public function reject() {
		$this->load->language('sale/cancel_request');
		$this->load->model('sale/cancel_request');

		if (isset($this->request->get['request_id'])) {
			$request_id = (int)$this->request->get['request_id'];

			$this->model_sale_cancel_request->rejectCancelRequest($request_id);

			$this->session->data['success'] = $this->language->get('text_success_reject');
		}

		$this->response->redirect(
			$this->url->link(
				'sale/cancel_request',
				'user_token=' . $this->session->data['user_token'],
				true
			)
		);
	}

	protected function getList() {

		/* Filters */

		$filter_status = $this->request->get['filter_status'] ?? '';
		$filter_customer = $this->request->get['filter_customer'] ?? '';
		$filter_reason = $this->request->get['filter_reason'] ?? '';
		$filter_date = $this->request->get['filter_date'] ?? '';

		$page = isset($this->request->get['page'])
			? (int)$this->request->get['page']
			: 1;

		if ($page < 1) {
			$page = 1;
		}

		/* Filter Data */

		$filter_data = array(
			'filter_status'   => $filter_status,
			'filter_customer' => $filter_customer,
			'filter_reason'   => $filter_reason,
			'filter_date'     => $filter_date,
			'start'           => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'            => $this->config->get('config_limit_admin')
		);

		/* Get data */

		$cancel_request_total =
			$this->model_sale_cancel_request->getTotalCancelRequests($filter_data);

		$results =
			$this->model_sale_cancel_request->getCancelRequests($filter_data);

		/* Build list */

		$data['cancel_requests'] = array();

		foreach ($results as $result) {

			$data['cancel_requests'][] = array(
				'cancel_request_id' => $result['id'],
				'order_id'          => $result['order_id'],
				'customer_id'       => $result['customer_id'],
				'reason'            => $result['reason'],
				'status'            => $result['status'],
				'date_added'        => date(
					'Y-m-d',
					strtotime($result['date_added'])
				),

				'order_link' => $this->url->link(
					'sale/order/info',
					'user_token=' . $this->session->data['user_token']
					. '&order_id=' . $result['order_id'],
					true
				),

				'reject' => $this->url->link(
					'sale/cancel_request/reject',
					'user_token=' . $this->session->data['user_token']
					. '&request_id=' . $result['id'],
					true
				)
			);
		}

		/* Pagination */

		$pagination = new Pagination();
		$pagination->total = $cancel_request_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');

		$url = '';

		if ($filter_status !== '') {
			$url .= '&filter_status=' . urlencode($filter_status);
		}

		if ($filter_customer !== '') {
			$url .= '&filter_customer=' . urlencode($filter_customer);
		}

		if ($filter_reason !== '') {
			$url .= '&filter_reason=' . urlencode($filter_reason);
		}

		if ($filter_date !== '') {
			$url .= '&filter_date=' . urlencode($filter_date);
		}

		$pagination->url = $this->url->link(
			'sale/cancel_request',
			'user_token=' . $this->session->data['user_token']
			. $url . '&page={page}',
			true
		);

		$data['pagination'] = $pagination->render();

		/* Filter values */

		$data['filter_status'] = $filter_status;
		$data['filter_customer'] = $filter_customer;
		$data['filter_reason'] = $filter_reason;
		$data['filter_date'] = $filter_date;

		/* Success message */

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		/* Warning message */

		if (isset($this->session->data['error_warning'])) {
			$data['error_warning'] = $this->session->data['error_warning'];
			unset($this->session->data['error_warning']);
		} else {
			$data['error_warning'] = '';
		}

		/* Breadcrumbs */

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
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link(
				'sale/cancel_request',
				'user_token=' . $this->session->data['user_token'],
				true
			)
		);

		/* Language */

		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_list'] = $this->language->get('text_list');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_filter'] = $this->language->get('text_filter');

		$data['column_order_id'] = $this->language->get('column_order_id');
		$data['column_customer_id'] = $this->language->get('column_customer_id');
		$data['column_reason'] = $this->language->get('column_reason');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_date_added'] = $this->language->get('column_date_added');

		$data['entry_customer'] = $this->language->get('entry_customer');
		$data['entry_reason'] = $this->language->get('entry_reason');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_date_added'] = $this->language->get('entry_date_added');

		$data['button_filter'] = $this->language->get('button_filter');
		$data['button_view'] = $this->language->get('button_view');
		$data['button_reject'] = $this->language->get('button_reject');

		/* User token */

		$data['user_token'] = $this->session->data['user_token'];

		/* Layout */

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		/* View */

		$this->response->setOutput(
			$this->load->view(
				'sale/cancel_request_list',
				$data
			)
		);
	}
}