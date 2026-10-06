<?php

class GoaracApiAccess {

	protected $registry;

	public function __construct($registry) {
		$this->registry = $registry;
	}

	public function getApiAccessByApiKey($api_key) {
		$db = $this->registry->get('db');

		$query = $db->query("SELECT
				a.*,
				c.firstname,
				c.lastname,
				c.email,
				c.customer_group_id
			FROM `" . DB_PREFIX . "goarac_api_access` a
			LEFT JOIN `" . DB_PREFIX . "customer` c
				ON c.customer_id = a.customer_id
			WHERE a.api_key = '" . $db->escape($api_key) . "'
			AND a.status = '1'
			AND (a.customer_id IS NULL OR c.status = '1')
			LIMIT 1
		");

		return $query->row;
	}

	public function getApiKeyFromRequest() {
		$api_key = '';

		if (isset($_SERVER['HTTP_X_API_KEY'])) {
			$api_key = trim($_SERVER['HTTP_X_API_KEY']);
		}

		if (!$api_key && isset($_GET['api_key'])) {
			$api_key = trim($_GET['api_key']);
		}

		return $api_key;
	}

	public function authenticate() {
		$api_key = $this->getApiKeyFromRequest();

		if (!$api_key) {
			return false;
		}

		return $this->getApiAccessByApiKey($api_key);
	}
}