<?php

class ControllerCustomerCustomerApi extends Controller {

    public function index() {

        $this->load->language('customer/customer_api');
        $this->load->model('customer/customer_api');

        $data['api_requests'] = $this->model_customer_customer_api->getApiRequests();

        $data['approve'] = $this->url->link(
            'customer/customer_api/approve',
            'user_token=' . $this->session->data['user_token'],
            true
        );

        $data['disable'] = $this->url->link(
            'customer/customer_api/disable',
            'user_token=' . $this->session->data['user_token'],
            true
        );

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput(
            $this->load->view('customer/customer_api', $data)
        );
    }

    public function approve() {

        $this->load->model('customer/customer_api');

        if (isset($this->request->get['api_access_id'])) {

            $api_access_id = (int)$this->request->get['api_access_id'];

            $this->model_customer_customer_api->approveApiAccess($api_access_id);
        }

        $this->response->redirect(
            $this->url->link(
                'customer/customer_api',
                'user_token=' . $this->session->data['user_token'],
                true
            )
        );
    }

    public function disable() {

        $this->load->model('customer/customer_api');

        if (isset($this->request->get['api_access_id'])) {

            $api_access_id = (int)$this->request->get['api_access_id'];

            $this->model_customer_customer_api->disableApiAccess($api_access_id);
        }

        $this->response->redirect(
            $this->url->link(
                'customer/customer_api',
                'user_token=' . $this->session->data['user_token'],
                true
            )
        );
    }
}