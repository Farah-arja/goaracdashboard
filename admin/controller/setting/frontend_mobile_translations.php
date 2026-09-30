<?php

class ControllerSettingFrontendMobileTranslations extends Controller {

    private $error = array();

    public function index() {

        // Load language file
        $this->load->language('setting/frontend_mobile_translations');

        // Page title
        $this->document->setTitle(
            $this->language->get('heading_title')
        );

        // Load our NEW model
        $this->load->model('setting/frontend_mobile_translations');

        /*
         * SAVE
         */
        if (
            ($this->request->server['REQUEST_METHOD'] == 'POST') &&
            $this->validate()
        ) {

            $translations = isset($this->request->post['translations'])
                ? $this->request->post['translations']
                : array();

            if (
                $this->model_setting_frontend_mobile_translations
                    ->saveRows($translations)
            ) {

                $this->session->data['success'] =
                    $this->language->get('text_success');

            } else {

                $this->session->data['error'] =
                    $this->language->get('error_save');
            }

            $this->response->redirect(
                $this->url->link(
                    'setting/frontend_mobile_translations',
                    'user_token=' . $this->session->data['user_token'],
                    true
                )
            );
        }

        /*
         * PAGE DATA
         */

        $data['heading_title'] =
            $this->language->get('heading_title');

        $data['text_form'] =
            $this->language->get('text_form');

        $data['text_help'] =
            $this->language->get('text_help');

        $data['entry_key'] =
            $this->language->get('entry_key');

        $data['entry_tr'] =
            $this->language->get('entry_tr');

        $data['entry_en'] =
            $this->language->get('entry_en');

        $data['button_save'] =
            $this->language->get('button_save');

        $data['button_cancel'] =
            $this->language->get('button_cancel');

        /*
         * FORM ACTION
         */
        $data['action'] = $this->url->link(
            'setting/frontend_mobile_translations',
            'user_token=' . $this->session->data['user_token'],
            true
        );

        /*
         * CANCEL
         */
        $data['cancel'] = $this->url->link(
            'common/dashboard',
            'user_token=' . $this->session->data['user_token'],
            true
        );

        /*
         * GET TRANSLATION ROWS
         */
        $data['rows'] =
            $this->model_setting_frontend_mobile_translations
                ->getRows();

        /*
         * ERROR
         */
        if (isset($this->error['warning'])) {

            $data['error_warning'] =
                $this->error['warning'];

        } else {

            $data['error_warning'] = '';
        }

        /*
         * SUCCESS
         */
        if (isset($this->session->data['success'])) {

            $data['success'] =
                $this->session->data['success'];

            unset($this->session->data['success']);

        } else {

            $data['success'] = '';
        }

        /*
         * SAVE ERROR
         */
        if (isset($this->session->data['error'])) {

            $data['error_warning'] =
                $this->session->data['error'];

            unset($this->session->data['error']);
        }

        /*
         * BREADCRUMBS
         */
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
            'text' => 'Settings',
            'href' => $this->url->link(
                'setting/setting',
                'user_token=' . $this->session->data['user_token'],
                true
            )
        );

        $data['breadcrumbs'][] = array(
            'text' => $data['heading_title'],
            'href' => $data['action']
        );

        /*
         * HEADER / SIDEBAR / FOOTER
         */
        $data['header'] =
            $this->load->controller('common/header');

        $data['column_left'] =
            $this->load->controller('common/column_left');

        $data['footer'] =
            $this->load->controller('common/footer');

        /*
         * LOAD NEW TWIG
         */
        $this->response->setOutput(
            $this->load->view(
                'setting/frontend_mobile_translations',
                $data
            )
        );
    }

    /*
     * Permission validation
     */
    protected function validate() {

        if (
            !$this->user->hasPermission(
                'modify',
                'setting/frontend_mobile_translations'
            )
        ) {

            $this->error['warning'] =
                $this->language->get('error_permission');
        }

        return !$this->error;
    }
}