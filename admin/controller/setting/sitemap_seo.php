<?php

class ControllerSettingSitemapSeo extends Controller {

    public function index() {

        // Language
        $this->load->language('setting/sitemap_seo');

        // Page title
        $this->document->setTitle( $this->language->get('heading_title') );

        // Load Model
        $this->load->model('setting/sitemap_seo');

      if ($this->request->server['REQUEST_METHOD'] === 'POST') {

    $created = $this->model_setting_sitemap_seo->seedLandingPages();

    $this->session->data['success'] = sprintf(
        $this->language->get('text_seed_success'),
        $created
    );

    $this->response->redirect(
        $this->url->link(
            'setting/sitemap_seo',
            'user_token=' . $this->session->data['user_token'],
            true
        )
    );
}

        $data['action'] = $this->url->link('setting/sitemap_seo','user_token=' . $this->session->data['user_token'],true);

        // Get Frontend URL from database
        $data['frontend_url'] = $this->model_setting_sitemap_seo->getFrontendBaseUrl();

        // Build Sitemap URL
        $data['sitemap_url'] =  $data['frontend_url'] . '/sitemap.xml';

        // Build Robots URL
        $data['robots_url'] = $data['frontend_url'] . '/robots.txt';


        // Get all sitemap entries from Model
        $data['entries'] = $this->model_setting_sitemap_seo->getEntries();


        // Total number of entries
        $data['entry_count'] = count($data['entries']);


        // Number of included URLs
        $data['included_count'] = count(array_filter($data['entries'], function($entry) {  return !empty($entry['include']);}));
        $data['success'] = '';


        if (isset($this->session->data['success'])) {
        $data['success'] = $this->session->data['success'];
        unset($this->session->data['success']);
        }
        $data['error_warning'] = '';
        if (isset($this->session->data['error'])) {
        $data['error_warning'] = $this->session->data['error'];
        unset($this->session->data['error']);
        }

        $data['heading_title'] = $this->language->get('heading_title');
        $data['text_frontend_url'] =
    
        $this->language->get('text_frontend_url');

        $data['text_robots_url'] =$this->language->get('text_robots_url');
        $data['text_enabled'] = $this->language->get('text_enabled');
        $data['text_disabled'] =$this->language->get('text_disabled');
        $data['text_seed_help'] =$this->language->get('text_seed_help');
        $data['button_seed'] =$this->language->get('button_seed');
        $data['column_language'] =$this->language->get('column_language');
        $data['column_type'] = $this->language->get('column_type');
        $data['column_title'] = $this->language->get('column_title');
        $data['column_url'] =$this->language->get('column_url');
        $data['column_include'] = $this->language->get('column_include');
        $data['column_priority'] =$this->language->get('column_priority');
        $data['column_changefreq'] = $this->language->get('column_changefreq');

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array('text' => $this->language->get('text_home'),'href' => $this->url->link('common/dashboard','user_token=' . $this->session->data['user_token'], true));
       
        $data['breadcrumbs'][] = array( 'text' => $this->language->get('heading_title'), 'href' => $this->url->link('setting/sitemap_seo', 'user_token=' . $this->session->data['user_token'],true));

        $data['header'] = $this->load->controller('common/header');

        $data['column_left'] = $this->load->controller('common/column_left');

        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput( $this->load->view('setting/sitemap_seo', $data ));
    }
}