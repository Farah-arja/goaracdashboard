<?php

class Provider1YolcuProvider1Http
{
    protected $registry;
    protected $config;

    public function __construct($registry)
    {
        $this->registry = $registry;
        $this->config = $registry->get('config');
    }

    public function request($method, $url, $headers = [], $body = null, $timeout = 20)
    {
        $ch = curl_init();

        $payload = null;

        if ($body !== null) {
            $payload = json_encode($body);
        }

        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => (int)$timeout,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_HEADER => true,
        ]);

        $method = strtoupper($method);

        if ($method === 'POST') {
            curl_setopt($ch, CURLOPT_POST, true);

            if ($payload !== null) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            }
        } elseif ($method === 'PUT' || $method === 'PATCH') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

            if ($payload !== null) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            }
        } elseif ($method === 'DELETE') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

            if ($payload !== null) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            }
        }

        $response = curl_exec($ch);

        $curlError = '';

        if ($response === false) {
            $curlError = curl_error($ch);
        }

        $status = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $headerSize = (int)curl_getinfo($ch, CURLINFO_HEADER_SIZE);

        curl_close($ch);

        $responseHeaders = '';
        $responseBody = '';

        if ($response !== false) {
            $responseHeaders = substr(
                (string)$response,
                0,
                $headerSize
            );

            $responseBody = substr(
                (string)$response,
                $headerSize
            );
        }

        $decodedResponse = null;

        if (
            is_string($responseBody) &&
            trim($responseBody) !== ''
        ) {
            $decodedResponse = json_decode(
                $responseBody,
                true
            );
        }

        return [
            'status' => $status,
            'headers' => $responseHeaders,
            'raw' => $responseBody,
            'data' => $decodedResponse,
            'error' => $curlError
        ];
    }
}