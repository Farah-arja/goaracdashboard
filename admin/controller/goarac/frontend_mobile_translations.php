<?php
class ControllerGoaracFrontendMobileTranslations extends Controller {

    public function index() {
        $this->load->language('goarac/frontend_mobile_translations');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['heading_title'] = $this->language->get('heading_title');

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput(
            $this->load->view('goarac/frontend_mobile_translations', $data)
        );
    }
}