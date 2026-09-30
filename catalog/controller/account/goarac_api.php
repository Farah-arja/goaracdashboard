<?php

class ControllerAccountGoaracApi extends Controller {

    public function index() {
        if (!$this->customer->isLogged()) {
            $this->response->redirect($this->url->link('account/login', '', true));
        }

        $this->load->model('account/goarac_api');

        $data['api_access'] = $this->model_account_goarac_api->getApiAccessByCustomerId($this->customer->getId());

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            $this->model_account_goarac_api->requestApiAccess($this->customer->getId());

            $this->response->redirect($this->url->link('account/goarac_api', '', true));
        }

        $data['continue'] = $this->url->link('account/account', '', true);

        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');

        $this->response->setOutput($this->load->view('account/goarac_api', $data));
    }
}