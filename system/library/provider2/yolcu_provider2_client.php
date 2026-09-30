<?php

class Provider2YolcuProvider2Client
{
    protected $registry;
    protected $config;
    protected $http;
    protected $auth;

    public function __construct($registry)
    {
        $this->registry = $registry;

        require_once(
            DIR_SYSTEM . 'library/provider2/yolcu_provider2_config.php'
        );

        require_once(
            DIR_SYSTEM . 'library/provider2/yolcu_provider2_http.php'
        );

        require_once(
            DIR_SYSTEM . 'library/provider2/yolcu_provider2_auth.php'
        );

        $this->config = new Provider2YolcuProvider2Config($registry);
        $this->http = new Provider2YolcuProvider2Http($registry);
        $this->auth = new Provider2YolcuProvider2Auth($registry);
    }

    public function search($body)
    {
        $url = $this->buildUrl(
            $this->config->endpointSearch()
        );

        $accessToken = $this->auth->getAccessToken();

        $headers = [
            'Content-Type: application/json',
            'Accept: application/json',
            'Authorization: Bearer ' . $accessToken
        ];

        return $this->http->request(
            'POST',
            $url,
            $headers,
            $body
        );
    }

    public function getOrderDetails($orderId)
    {
        $endpoint = $this->config->endpointOrders();

        $endpoint = rtrim($endpoint, '/');

        $endpoint = $endpoint . '/' . urlencode($orderId);

        $url = $this->buildUrl($endpoint);

        $accessToken = $this->auth->getAccessToken();

        $headers = [
            'Accept: application/json',
            'Authorization: Bearer ' . $accessToken
        ];

        return $this->http->request(
            'GET',
            $url,
            $headers
        );
    }

    protected function buildUrl($endpoint)
    {
        $baseUrl = rtrim(
            $this->config->apiUrl(),
            '/'
        );

        $endpoint = trim((string)$endpoint);

        if ($endpoint === '') {
            return $baseUrl;
        }

        if (strpos($endpoint, '/') !== 0) {
            $endpoint = '/' . $endpoint;
        }

        return $baseUrl . $endpoint;
    }
}