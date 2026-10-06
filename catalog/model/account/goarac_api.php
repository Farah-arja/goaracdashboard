<?php

class ModelAccountGoaracApi extends Model {

    public function getApiAccessByCustomerId($customer_id) {
        $query = $this->db->query("SELECT *
            FROM `" . DB_PREFIX . "goarac_api_access`
            WHERE customer_id = '" . (int)$customer_id . "'
            LIMIT 1
        ");

        return $query->row;
    }

    public function requestApiAccess($customer_id) {
        $existing = $this->getApiAccessByCustomerId($customer_id);
        if ($existing) {
            return false;
        }
        $this->db->query(" INSERT INTO `" . DB_PREFIX . "goarac_api_access`
            SET customer_id = '" . (int)$customer_id . "',
                api_key = '',
                status = '2',
                date_added = NOW(),
                date_modified = NOW()
        ");

        return true;
    }

    public function getCustomerByApiKey($api_key) {
        $query = $this->db->query("SELECT c.*
            FROM `" . DB_PREFIX . "goarac_api_access` a
            INNER JOIN `" . DB_PREFIX . "customer` c
                ON c.customer_id = a.customer_id
            WHERE a.api_key = '" . $this->db->escape($api_key) . "'
              AND a.status = '1'
              AND c.status = '1'
            LIMIT 1
        ");

        return $query->row;
    }

    public function getApiAccessByApiKey($api_key) {
    $query = $this->db->query("SELECT a.*, c.firstname, c.lastname, c.email, c.customer_group_id
        FROM `" . DB_PREFIX . "goarac_api_access` a
        LEFT JOIN `" . DB_PREFIX . "customer` c
            ON c.customer_id = a.customer_id
        WHERE a.api_key = '" . $this->db->escape($api_key) . "'
          AND a.status = '1'
        LIMIT 1
    ");

    return $query->row;
}

    public function setStatus($api_access_id, $status) {
        $this->db->query("UPDATE `" . DB_PREFIX . "goarac_api_access`
            SET
                status = '" . (int)$status . "',
                date_modified = NOW()
            WHERE api_access_id = '" . (int)$api_access_id . "'
        ");
    }
}