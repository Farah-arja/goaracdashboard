<?php

class ModelSettingFrontendMobileTranslations extends Model {


    public function getLanguageIdByCode($code) {
        $query = $this->db->query("
            SELECT id
            FROM `" . DB_PREFIX . "api_language`
            WHERE code = '" . $this->db->escape($code) . "'
            LIMIT 1
        ");

        if ($query->num_rows) {
            return (int)$query->row['id'];
        }

        return 0;
    }

    
    public function getTranslationByLanguageId($language_id) {
        $query = $this->db->query("
            SELECT translations
            FROM `" . DB_PREFIX . "api_language_translation`
            WHERE language_id = '" . (int)$language_id . "'
            LIMIT 1
        ");

        if ($query->num_rows) {
            return $query->row['translations'];
        }

        return '';
    }


    public function flattenTranslations($translations, $prefix = '') {
        $result = array();

        if (!is_array($translations)) {
            return $result;
        }

        foreach ($translations as $key => $value) {

            $key = trim((string)$key);

            if ($key === '') {
                continue;
            }

            $full_key = ($prefix === '')
                ? $key
                : $prefix . '.' . $key;

            if (is_array($value)) {

                $result = array_merge(
                    $result,
                    $this->flattenTranslations($value, $full_key)
                );

            } else {

                $result[$full_key] = (string)$value;
            }
        }

        return $result;
    }

   
    public function getTranslations($code) {

        $language_id = $this->getLanguageIdByCode($code);

        if (!$language_id) {
            return array();
        }

        $json = $this->getTranslationByLanguageId($language_id);

        if ($json === '') {
            return array();
        }

        $translations = json_decode($json, true);

        if (!is_array($translations)) {
            return array();
        }

        return $this->flattenTranslations($translations);
    }

    
    public function getRows() {

        $turkish = $this->getTranslations('tr');
        $english = $this->getTranslations('en');

        $keys = array_unique(
            array_merge(
                array_keys($turkish),
                array_keys($english)
            )
        );

        sort($keys, SORT_NATURAL);

        $rows = array();

        foreach ($keys as $key) {

            $rows[] = array(
                'key' => $key,
                'tr'  => isset($turkish[$key]) ? $turkish[$key] : '',
                'en'  => isset($english[$key]) ? $english[$key] : ''
            );
        }

        return $rows;
    }
    public function expandTranslations($translations) {

        $result = array();

        if (!is_array($translations)) {
            return $result;
        }

        foreach ($translations as $key => $value) {

            $key = trim((string)$key);

            if ($key === '') {
                continue;
            }

            $parts = explode('.', $key);

            $node =& $result;

            foreach ($parts as $index => $part) {

                $part = trim((string)$part);

                if ($part === '') {
                    continue 2;
                }

                if ($index === count($parts) - 1) {

                    $node[$part] = (string)$value;

                } else {

                    if (
                        !isset($node[$part]) ||
                        !is_array($node[$part])
                    ) {
                        $node[$part] = array();
                    }

                    $node =& $node[$part];
                }
            }

            unset($node);
        }

        return $result;
    }

   
    public function saveTranslations($code, $translations) {

        $language_id = $this->getLanguageIdByCode($code);

        if (!$language_id) {
            return false;
        }

        $nested = $this->expandTranslations($translations);

        $json = json_encode(
            $nested,
            JSON_UNESCAPED_UNICODE |
            JSON_PRETTY_PRINT |
            JSON_UNESCAPED_SLASHES
        );

        if ($json === false) {
            return false;
        }

        $query = $this->db->query("
            SELECT id
            FROM `" . DB_PREFIX . "api_language_translation`
            WHERE language_id = '" . (int)$language_id . "'
            LIMIT 1
        ");

        if ($query->num_rows) {

            $this->db->query("
                UPDATE `" . DB_PREFIX . "api_language_translation`
                SET
                    translations = '" . $this->db->escape($json) . "',
                    status = '1',
                    updated_at = NOW()
                WHERE id = '" . (int)$query->row['id'] . "'
            ");

        } else {

            $this->db->query("
                INSERT INTO `" . DB_PREFIX . "api_language_translation`
                SET
                    language_id = '" . (int)$language_id . "',
                    translations = '" . $this->db->escape($json) . "',
                    status = '1',
                    sort_order = '1',
                    updated_at = NOW()
            ");
        }

        return true;
    }

    
    public function saveRows($rows) {

        $turkish = array();
        $english = array();

        if (is_array($rows)) {

            foreach ($rows as $row) {

                if (!is_array($row)) {
                    continue;
                }

                $key = isset($row['key'])
                    ? trim((string)$row['key'])
                    : '';

                if ($key === '') {
                    continue;
                }

                $turkish[$key] = isset($row['tr'])
                    ? (string)$row['tr']
                    : '';

                $english[$key] = isset($row['en'])
                    ? (string)$row['en']
                    : '';
            }
        }

        $saved_tr = $this->saveTranslations('tr', $turkish);
        $saved_en = $this->saveTranslations('en', $english);

        return ($saved_tr && $saved_en);
    }
}