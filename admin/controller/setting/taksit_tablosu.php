<?php

class ControllerSettingTaksitTablosu extends Controller {

    public function index() {
        $this->load->language('setting/taksit_tablosu');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        if ($this->request->server['REQUEST_METHOD'] === 'POST') {

            $status = isset($this->request->post['payment_bkm_bin_status'])
                ? (int)$this->request->post['payment_bkm_bin_status']
                : 0;

            $base_url = isset($this->request->post['payment_bkm_bin_base_url'])
                ? trim($this->request->post['payment_bkm_bin_base_url'])
                : 'https://api-prod.bkm.com.tr';

            $client_id = isset($this->request->post['payment_bkm_bin_client_id'])
                ? trim($this->request->post['payment_bkm_bin_client_id'])
                : '';

            $client_secret = isset($this->request->post['payment_bkm_bin_client_secret'])
                ? trim($this->request->post['payment_bkm_bin_client_secret'])
                : '';

            $max_installment_count = isset($this->request->post['payment_bkm_bin_max_installment_count'])
                ? (int)$this->request->post['payment_bkm_bin_max_installment_count']
                : 12;

            $max_installment_count = max(1, min(12, $max_installment_count));

            $require_credit_card = isset($this->request->post['payment_bkm_bin_require_credit_card'])
                ? (int)$this->request->post['payment_bkm_bin_require_credit_card']
                : 0;

            $require_turkish_bin = isset($this->request->post['payment_bkm_bin_require_turkish_bin'])
                ? (int)$this->request->post['payment_bkm_bin_require_turkish_bin']
                : 0;

            $card_family_filter = isset($this->request->post['payment_bkm_bin_card_family_filter'])
                ? trim($this->request->post['payment_bkm_bin_card_family_filter'])
                : '';

            $installment_rates = array();

            if (
                isset($this->request->post['payment_bkm_bin_installment_rates'])
                && is_array($this->request->post['payment_bkm_bin_installment_rates'])
            ) {
                foreach ($this->request->post['payment_bkm_bin_installment_rates'] as $month => $rate) {

                    $month = (int)$month;

                    if ($month < 1 || $month > 12) {
                        continue;
                    }

                    $rate = str_replace(',', '.', (string)$rate);
                    $rate = (float)$rate;

                    if ($rate < 0) {
                        $rate = 0;
                    }

                    $installment_rates[$month] = round($rate, 4);
                }
            }

            for ($month = 1; $month <= 12; $month++) {
                if (!isset($installment_rates[$month])) {
                    $installment_rates[$month] = 0;
                }
            }

            ksort($installment_rates);

            $this->model_setting_setting->editSettingValue(
                'payment_bkm_bin',
                'payment_bkm_bin_status',
                $status
            );

            $this->model_setting_setting->editSettingValue(
                'payment_bkm_bin',
                'payment_bkm_bin_base_url',
                $base_url
            );

            $this->model_setting_setting->editSettingValue(
                'payment_bkm_bin',
                'payment_bkm_bin_client_id',
                $client_id
            );

            $this->model_setting_setting->editSettingValue(
                'payment_bkm_bin',
                'payment_bkm_bin_client_secret',
                $client_secret
            );

            $this->model_setting_setting->editSettingValue(
                'payment_bkm_bin',
                'payment_bkm_bin_max_installment_count',
                $max_installment_count
            );

            $this->model_setting_setting->editSettingValue(
                'payment_bkm_bin',
                'payment_bkm_bin_require_credit_card',
                $require_credit_card
            );

            $this->model_setting_setting->editSettingValue(
                'payment_bkm_bin',
                'payment_bkm_bin_require_turkish_bin',
                $require_turkish_bin
            );

            $this->model_setting_setting->editSettingValue(
                'payment_bkm_bin',
                'payment_bkm_bin_card_family_filter',
                $card_family_filter
            );

            $this->model_setting_setting->editSettingValue(
                'payment_bkm_bin',
                'payment_bkm_bin_installment_rates',
                $installment_rates
            );

            $this->session->data['success'] =
                $this->language->get('text_success');

            $this->response->redirect(
                $this->url->link(
                    'setting/taksit_tablosu',
                    'user_token=' . $this->session->data['user_token'],
                    true
                )
            );
        }

        $data['heading_title'] =
            $this->language->get('heading_title');

        $data['button_save'] =
            $this->language->get('button_save');

        $data['button_cancel'] =
            $this->language->get('button_cancel');

        $data['button_sync'] =
            $this->language->get('button_sync');

        $data['text_bkm_bin_information'] =
            $this->language->get('text_bkm_bin_information');

        $data['text_cached_bin_rows'] =
            $this->language->get('text_cached_bin_rows');

        $data['text_last_sync'] =
            $this->language->get('text_last_sync');

        $data['text_bin_cache_help'] =
            $this->language->get('text_bin_cache_help');

        $data['text_bkm_bin_api_installment'] =
            $this->language->get('text_bkm_bin_api_installment');

        $data['text_bkm_api'] =
            $this->language->get('text_bkm_api');

        $data['text_installment_commission_rates'] =
            $this->language->get('text_installment_commission_rates');

        $data['entry_status'] =
            $this->language->get('entry_status');

        $data['entry_bkm_api_base_url'] =
            $this->language->get('entry_bkm_api_base_url');

        $data['entry_client_id'] =
            $this->language->get('entry_client_id');

        $data['entry_client_secret'] =
            $this->language->get('entry_client_secret');

        $data['entry_max_installment_count'] =
            $this->language->get('entry_max_installment_count');

        $data['entry_only_credit_cards'] =
            $this->language->get('entry_only_credit_cards');

        $data['entry_only_turkish_bin_cards'] =
            $this->language->get('entry_only_turkish_bin_cards');

        $data['entry_allowed_card_families'] =
            $this->language->get('entry_allowed_card_families');

        $data['column_month'] =
            $this->language->get('column_month');

        $data['column_commission'] =
            $this->language->get('column_commission');

        $data['help_bkm_api_base_url'] =
            $this->language->get('help_bkm_api_base_url');

        $data['help_client_id'] =
            $this->language->get('help_client_id');

        $data['help_allowed_card_families'] =
            $this->language->get('help_allowed_card_families');


        $data['payment_bkm_bin_status'] =
            $this->config->get('payment_bkm_bin_status');

        $data['payment_bkm_bin_base_url'] =
            $this->config->get('payment_bkm_bin_base_url');

        $data['payment_bkm_bin_client_id'] =
            $this->config->get('payment_bkm_bin_client_id');

        $data['payment_bkm_bin_client_secret'] =
            $this->config->get('payment_bkm_bin_client_secret');

        $data['payment_bkm_bin_max_installment_count'] =
            $this->config->get('payment_bkm_bin_max_installment_count');

        $data['payment_bkm_bin_require_credit_card'] =
            $this->config->get('payment_bkm_bin_require_credit_card');

        $data['payment_bkm_bin_require_turkish_bin'] =
            $this->config->get('payment_bkm_bin_require_turkish_bin');

        $data['payment_bkm_bin_card_family_filter'] =
            $this->config->get('payment_bkm_bin_card_family_filter');


        /*
         * Installment rates
         *
         * Take saved values first.
         * If some months are missing, fill them with defaults.
         */

        $installment_rates =
            $this->config->get('payment_bkm_bin_installment_rates');

        if (!is_array($installment_rates)) {
            $installment_rates = array();
        }

        $default_rates = array(
            1 => 1,
            2 => 3,
            3 => 6,
            4 => 9,
            5 => 12,
            6 => 15,
            7 => 18,
            8 => 21,
            9 => 24,
            10 => 27,
            11 => 30,
            12 => 33
        );

        foreach ($default_rates as $month => $rate) {
            if (!isset($installment_rates[$month])) {
                $installment_rates[$month] = $rate;
            }
        }

        ksort($installment_rates);

        $data['payment_bkm_bin_installment_rates'] =
            $installment_rates;


        if (!$data['payment_bkm_bin_base_url']) {
            $data['payment_bkm_bin_base_url'] =
                'https://api-prod.bkm.com.tr';
        }

        if (!$data['payment_bkm_bin_max_installment_count']) {
            $data['payment_bkm_bin_max_installment_count'] = 12;
        }

        $data['installment_months'] =
            range(1, 12);


        $data['action'] =
            $this->url->link(
                'setting/taksit_tablosu',
                'user_token=' . $this->session->data['user_token'],
                true
            );

        $data['cancel'] =
            $this->url->link(
                'common/dashboard',
                'user_token=' . $this->session->data['user_token'],
                true
            );


        $data['success'] = '';

        if (isset($this->session->data['success'])) {

            $data['success'] =
                $this->session->data['success'];

            unset($this->session->data['success']);
        }


        $this->load->model('setting/taksit_tablosu');

        $data['bin_count'] =
            $this->model_setting_taksit_tablosu->getBinCount();

        $data['last_sync'] =
            $this->model_setting_taksit_tablosu->getLastSync();


        $data['header'] =
            $this->load->controller('common/header');

        $data['column_left'] =
            $this->load->controller('common/column_left');

        $data['footer'] =
            $this->load->controller('common/footer');


        $this->response->setOutput(
            $this->load->view(
                'setting/taksit_tablosu',
                $data
            )
        );
    }
}