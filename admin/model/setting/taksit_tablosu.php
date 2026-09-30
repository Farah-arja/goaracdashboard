<?php

class ModelSettingTaksitTablosu extends Model {

    public function getBinCount() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "goarac_bkm_bin");

        return (int)$query->row['total'];
    }
    public function getLastSync() {
        $query = $this->db->query("SELECT MAX(date_modified) AS last_sync FROM " . DB_PREFIX . "goarac_bkm_bin" );
        
        return $query->row['last_sync'];
    }
}