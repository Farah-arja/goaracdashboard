<?php
class ControllerCustomerCustomerCommission extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('customer/customer_commission');
        $this->load->model('customer/customer_commission');

        $this->model_customer_customer_commission->ensureSchema();

        $this->getList();
    }

    public function add() {
        $this->load->language('customer/customer_commission');
        $this->load->model('customer/customer_commission');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_customer_customer_commission->addPlan($this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect(
                $this->url->link(
                    'customer/customer_commission',
                    'user_token=' . $this->session->data['user_token'],
                    true
                )
            );
        }

        $this->getForm();
    }

    public function edit() {
        $this->load->language('customer/customer_commission');
        $this->load->model('customer/customer_commission');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_customer_customer_commission->editPlan(
                (int)$this->request->get['commission_plan_id'],
                $this->request->post
            );

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect(
                $this->url->link(
                    'customer/customer_commission',
                    'user_token=' . $this->session->data['user_token'],
                    true
                )
            );
        }

        $this->getForm();
    }

    public function delete() {
        $this->load->language('customer/customer_commission');
        $this->load->model('customer/customer_commission');

        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $commission_plan_id) {
                if (!$this->model_customer_customer_commission->deletePlan((int)$commission_plan_id)) {
                    $this->error['warning'] = $this->language->get('error_delete_default');
                }
            }

            if (!$this->error) {
                $this->session->data['success'] = $this->language->get('text_success');
            }
        }

        $this->getList();
    }

    protected function getList() {
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
                'customer/customer_commission',
                'user_token=' . $this->session->data['user_token'],
                true
            )
        );

        $data['add'] = $this->url->link(
            'customer/customer_commission/add',
            'user_token=' . $this->session->data['user_token'],
            true
        );

        $data['delete'] = $this->url->link(
            'customer/customer_commission/delete',
            'user_token=' . $this->session->data['user_token'],
            true
        );

        $data['plans'] = array();

        foreach ($this->model_customer_customer_commission->getPlans() as $plan) {
            $data['plans'][] = array(
                'commission_plan_id' => (int)$plan['commission_plan_id'],
                'name'              => $plan['name'],
                'type'              => $plan['type'],
                'value'             => (float)$plan['value'],
                'currency_code'     => $plan['currency_code'],
                'is_default'        => (int)$plan['is_default'],
                'status'            => (int)$plan['status'],

                'edit' => $this->url->link(
                    'customer/customer_commission/edit',
                    'user_token=' . $this->session->data['user_token'] .
                    '&commission_plan_id=' . (int)$plan['commission_plan_id'],
                    true
                )
            );
        }

        $data['heading_title']    = $this->language->get('heading_title');
        $data['text_list']        = $this->language->get('text_list');
        $data['text_no_results']  = $this->language->get('text_no_results');
        $data['text_confirm']     = $this->language->get('text_confirm');
        $data['text_enabled']     = $this->language->get('text_enabled');
        $data['text_disabled']    = $this->language->get('text_disabled');
        $data['text_default']     = $this->language->get('text_default');
        $data['text_percentage']  = $this->language->get('text_percentage');
        $data['text_fixed']       = $this->language->get('text_fixed');

        $data['column_name']      = $this->language->get('column_name');
        $data['column_type']      = $this->language->get('column_type');
        $data['column_value']     = $this->language->get('column_value');
        $data['column_status']    = $this->language->get('column_status');
        $data['column_action']    = $this->language->get('column_action');

        $data['button_add']       = $this->language->get('button_add');
        $data['button_edit']      = $this->language->get('button_edit');
        $data['button_delete']   = $this->language->get('button_delete');

        $data['error_warning'] = $this->error['warning'] ?? '';

        $data['success'] = $this->session->data['success'] ?? '';
        unset($this->session->data['success']);

        $data['selected'] = $this->request->post['selected'] ?? array();

        $data['user_token'] = $this->session->data['user_token'];

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput(
            $this->load->view(
                'customer/customer_commission_list',
                $data
            )
        );
    }

    protected function getForm() {
        $commission_plan_id = (int)($this->request->get['commission_plan_id'] ?? 0);

        $plan_info = array();

        if (
            $commission_plan_id &&
            $this->request->server['REQUEST_METHOD'] != 'POST'
        ) {
            $plan_info = $this->model_customer_customer_commission->getPlan(
                $commission_plan_id
            );
        }

        $data['heading_title'] = $this->language->get('heading_title');

        $data['text_form'] = $commission_plan_id
            ? $this->language->get('text_edit')
            : $this->language->get('text_add');

        $data['text_enabled'] = $this->language->get('text_enabled');
        $data['text_disabled'] = $this->language->get('text_disabled');
        $data['text_percentage'] = $this->language->get('text_percentage');
        $data['text_fixed'] = $this->language->get('text_fixed');

        $data['entry_name'] = $this->language->get('entry_name');
        $data['entry_type'] = $this->language->get('entry_type');
        $data['entry_value'] = $this->language->get('entry_value');
        $data['entry_currency'] = $this->language->get('entry_currency');
        $data['entry_status'] = $this->language->get('entry_status');

        $data['help_value'] = $this->language->get('help_value');

        $data['button_save'] = $this->language->get('button_save');
        $data['button_cancel'] = $this->language->get('button_cancel');

        $data['error_warning'] = $this->error['warning'] ?? '';
        $data['error_name'] = $this->error['name'] ?? '';
        $data['error_value'] = $this->error['value'] ?? '';

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
                'customer/customer_commission',
                'user_token=' . $this->session->data['user_token'],
                true
            )
        );

        $data['action'] = $commission_plan_id
            ? $this->url->link(
                'customer/customer_commission/edit',
                'user_token=' . $this->session->data['user_token'] .
                '&commission_plan_id=' . $commission_plan_id,
                true
            )
            : $this->url->link(
                'customer/customer_commission/add',
                'user_token=' . $this->session->data['user_token'],
                true
            );

        $data['cancel'] = $this->url->link(
            'customer/customer_commission',
            'user_token=' . $this->session->data['user_token'],
            true
        );

        $data['name'] = $this->request->post['name']
            ?? ($plan_info['name'] ?? '');

        $data['type'] = $this->request->post['type']
            ?? ($plan_info['type'] ?? 'percentage');

        $data['value'] = $this->request->post['value']
            ?? ($plan_info['value'] ?? '0');

        // Same as the old project
        $data['currency_code'] = 'USD';

        $data['status'] = $this->request->post['status']
            ?? ($plan_info['status'] ?? 1);

        $data['is_default'] = (int)($plan_info['is_default'] ?? 0);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput(
            $this->load->view(
                'customer/customer_commission_form',
                $data
            )
        );
    }

    protected function validateForm(): bool {
        if (!$this->hasModifyPermission()) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        $name = trim($this->request->post['name'] ?? '');

        if (
            utf8_strlen($name) < 2 ||
            utf8_strlen($name) > 64
        ) {
            $this->error['name'] = $this->language->get('error_name');
        }

        $value = $this->request->post['value'] ?? '';

        if (!is_numeric($value) || (float)$value < 0) {
            $this->error['value'] = $this->language->get('error_value');
        }

        if (
            ($this->request->post['type'] ?? 'percentage') === 'percentage' &&
            is_numeric($value) &&
            (float)$value > 100
        ) {
            $this->error['value'] = $this->language->get('error_percentage');
        }

        return !$this->error;
    }

    protected function validateDelete(): bool {
        if (!$this->hasModifyPermission()) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    private function hasModifyPermission(): bool {
        return $this->user->hasPermission(
            'modify',
            'customer/customer_commission'
        ) || $this->user->hasPermission(
            'modify',
            'customer/customer'
        );
    }
}
