<?php

class Provider1YolcuProvider1Auth
{
    protected $registry;
    protected $config;
    protected $http;
    protected $tokenStore;

    public function __construct($registry)
    {
        $this->registry = $registry;

        require_once(
            DIR_SYSTEM . 'library/provider1/yolcu_provider1_config.php'
        );

        require_once(
            DIR_SYSTEM . 'library/provider1/yolcu_provider1_http.php'
        );

        require_once(
            DIR_SYSTEM . 'library/provider1/yolcu_provider1_token.php'
        );

        $this->config = new Provider1YolcuProvider1Config($registry);
        $this->http = new Provider1YolcuProvider1Http($registry);
        $this->tokenStore = new Provider1YolcuProvider1TokenStore($registry);
    }

    public function getAccessToken()
    {
        $tokens = $this->tokenStore->getTokens();

        if (
            !empty($tokens['access_token']) &&
            $this->isValidExpiry($tokens['access_expires_at'])
        ) {
            return $tokens['access_token'];
        }

        if (
            !empty($tokens['refresh_token']) &&
            $this->isValidExpiry($tokens['refresh_expires_at'])
        ) {
            $accessToken = $this->refresh(
                $tokens['refresh_token']
            );

            if ($accessToken !== '') {
                return $accessToken;
            }
        }

        return $this->login();
    }

    protected function login()
    {
        $apiKey = $this->config->apiKey();
        $apiSecret = $this->config->apiSecret();

        if ($apiKey === '' || $apiSecret === '') {
            throw new Exception(
                'Provider 1 API key or API secret is missing.'
            );
        }

        $url = $this->buildUrl(
            $this->config->endpointAuthLogin()
        );
        echo '<pre>';
echo 'API URL: ' . $this->config->apiUrl() . PHP_EOL;
echo 'LOGIN ENDPOINT: ' . $this->config->endpointAuthLogin() . PHP_EOL;
echo 'FINAL URL: ' . $url . PHP_EOL;
echo 'API KEY EXISTS: ' . ($apiKey !== '' ? 'YES' : 'NO') . PHP_EOL;
echo 'API SECRET EXISTS: ' . ($apiSecret !== '' ? 'YES' : 'NO') . PHP_EOL;
echo '</pre>';

        $body = array(
            'key' => $apiKey,
            'secret' => $apiSecret
        );

        $headers = array(
            'Content-Type: application/json',
            'Accept: application/json'
        );

        $response = $this->http->request(
            'POST',
            $url,
            $headers,
            $body
        );

        if (
            $response['status'] !== 200 &&
            $response['status'] !== 201
        ) {
            throw new Exception(
                'Provider 1 authentication failed. HTTP status: ' .
                $response['status'] .
                ' Response: ' .
                $response['raw'] .
                ' CURL error: ' .
                $response['error']
            );
        }

        if (
            !is_array($response['data']) ||
            empty($response['data']['accessToken'])
        ) {
            throw new Exception(
                'Provider 1 authentication response is invalid.'
            );
        }

        $this->tokenStore->saveTokens(
            $response['data']
        );

        return $response['data']['accessToken'];
    }

    protected function refresh($refreshToken)
    {
        $url = $this->buildUrl(
            $this->config->endpointAuthRefresh()
        );

        $body = array(
            'token' => $refreshToken
        );

        $headers = array(
            'Content-Type: application/json',
            'Accept: application/json'
        );

        $response = $this->http->request(
            'POST',
            $url,
            $headers,
            $body
        );

        if (
            $response['status'] !== 200 &&
            $response['status'] !== 201
        ) {
            return '';
        }

        if (
            !is_array($response['data']) ||
            empty($response['data']['accessToken'])
        ) {
            return '';
        }

        $this->tokenStore->saveTokens(
            $response['data']
        );

        return $response['data']['accessToken'];
    }

    protected function isValidExpiry($expiresAt)
    {
        if (empty($expiresAt)) {
            return false;
        }

        $timestamp = strtotime($expiresAt);

        if ($timestamp === false) {
            return false;
        }

        return $timestamp > time();
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