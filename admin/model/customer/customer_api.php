<?php

class ModelCustomerCustomerApi extends Model {

    public function getApiRequests() {
        $query = $this->db->query(" SELECT a.*, c.firstname, c.lastname, c.email
            FROM `" . DB_PREFIX . "goarac_api_access` a
            LEFT JOIN `" . DB_PREFIX . "customer` c
                ON c.customer_id = a.customer_id
            ORDER BY a.date_added DESC
        ");

        return $query->rows;
    }

    public function approveApiAccess($api_access_id) {
        $api_key = 'GA_' . bin2hex(random_bytes(24));

        $this->db->query(" UPDATE `" . DB_PREFIX . "goarac_api_access`
            SET api_key = '" . $this->db->escape($api_key) . "', status = '1', date_modified = NOW()
            WHERE api_access_id = '" . (int)$api_access_id . "'
        ");

        return $api_key;
    }

    public function disableApiAccess($api_access_id) {
        $this->db->query(" UPDATE `" . DB_PREFIX . "goarac_api_access`
            SET status = '0', date_modified = NOW()
            WHERE api_access_id = '" . (int)$api_access_id . "'
        ");
    }
}