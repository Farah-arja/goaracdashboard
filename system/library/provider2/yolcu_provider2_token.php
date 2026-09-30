<?php

class Provider2YolcuProvider2TokenStore
{
    protected $db;

    public function __construct($registry)
    {
        $this->db = $registry->get('db');
    }

    public function getTokens()
    {
        $query = $this->db->query(
            "SELECT *
             FROM `" . DB_PREFIX . "goarac_yolcu360_token`
             ORDER BY token_id DESC
             LIMIT 1"
        );

        if (!$query->num_rows) {
            return array();
        }

        return $query->row;
    }

    public function saveTokens(array $data)
    {
        $accessToken = isset($data['accessToken'])
            ? (string)$data['accessToken']
            : '';

        $refreshToken = isset($data['refreshToken'])
            ? (string)$data['refreshToken']
            : '';

        $accessExpiresAt = isset($data['accessTokenExpireAt'])
            ? (string)$data['accessTokenExpireAt']
            : '';

        $refreshExpiresAt = isset($data['refreshTokenExpireAt'])
            ? (string)$data['refreshTokenExpireAt']
            : '';

        $userPayload = '';

        if (isset($data['user'])) {
            $userPayload = json_encode($data['user']);
        }

        $this->db->query(
            "INSERT INTO `" . DB_PREFIX . "goarac_yolcu360_token`
             SET
                access_token = '" . $this->db->escape($accessToken) . "',
                refresh_token = '" . $this->db->escape($refreshToken) . "',
                access_expires_at = '" . $this->db->escape($accessExpiresAt) . "',
                refresh_expires_at = '" . $this->db->escape($refreshExpiresAt) . "',
                user_payload = '" . $this->db->escape($userPayload) . "',
                date_added = NOW(),
                date_modified = NOW()"
        );
    }

    public function clearTokens()
    {
        $this->db->query(
            "DELETE FROM `" . DB_PREFIX . "goarac_yolcu360_token`"
        );
    }
}