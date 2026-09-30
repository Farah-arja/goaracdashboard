<?php
class ModelSaleCancelRequest extends Model {

	/* ---------------- APPROVE ---------------- */

	public function approveCancelRequest($request_id) {

		$this->db->query("
			UPDATE " . DB_PREFIX . "order_cancel_request 
			SET status = 'approved' 
			WHERE id = '" . (int)$request_id . "'
		");
	}

	public function cancelOrder($order_id, $order_status_id) {
		$this->db->query("UPDATE " . DB_PREFIX . "order SET order_status_id = '" . (int)$order_status_id . "', date_modified = NOW() WHERE order_id = '" . (int)$order_id . "'");
		return $this->db->getLastId();
	}
	

	/* ---------------- REJECT ---------------- */

	public function rejectCancelRequest($request_id) {

		$this->db->query("
			UPDATE " . DB_PREFIX . "order_cancel_request 
			SET status = 'rejected' 
			WHERE id = '" . (int)$request_id . "'
		");
	}


	/* ---------------- GET SINGLE REQUEST ---------------- */

	public function getCancelRequestById($request_id) {

		$query = $this->db->query("
			SELECT *
			FROM " . DB_PREFIX . "order_cancel_request
			WHERE id = '" . (int)$request_id . "'
		");

		return $query->row;
	}


	/* ---------------- TOTAL REQUESTS ---------------- */

	public function getTotalCancelRequests($filter_data = array()) {

		$sql = "
			SELECT COUNT(*) AS total
			FROM " . DB_PREFIX . "order_cancel_request
			WHERE 1
		";

		if (!empty($filter_data['filter_status'])) {
			$sql .= " AND status = '" . $this->db->escape($filter_data['filter_status']) . "'";
		}

		if (!empty($filter_data['filter_customer'])) {
			$sql .= " AND customer_id = '" . (int)$filter_data['filter_customer'] . "'";
		}

		if (!empty($filter_data['filter_reason'])) {
			$sql .= " AND reason LIKE '%" . $this->db->escape($filter_data['filter_reason']) . "%'";
		}

		if (!empty($filter_data['filter_date'])) {
			$sql .= " AND DATE(date_added) = DATE('" . $this->db->escape($filter_data['filter_date']) . "')";
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}


	/* ---------------- LIST REQUESTS ---------------- */

	public function getCancelRequests($filter_data = array()) {

		$sql = "
			SELECT *
			FROM " . DB_PREFIX . "order_cancel_request
			WHERE 1
		";

		if (!empty($filter_data['filter_status'])) {
			$sql .= " AND status = '" . $this->db->escape($filter_data['filter_status']) . "'";
		}

		if (!empty($filter_data['filter_customer'])) {
			$sql .= " AND customer_id = '" . (int)$filter_data['filter_customer'] . "'";
		}

		if (!empty($filter_data['filter_reason'])) {
			$sql .= " AND reason LIKE '%" . $this->db->escape($filter_data['filter_reason']) . "%'";
		}

		if (!empty($filter_data['filter_date'])) {
			$sql .= " AND DATE(date_added) = DATE('" . $this->db->escape($filter_data['filter_date']) . "')";
		}

		$sql .= " ORDER BY date_added DESC";


		/* Pagination */

		if (isset($filter_data['start']) || isset($filter_data['limit'])) {

			if ($filter_data['start'] < 0) {
				$filter_data['start'] = 0;
			}

			if ($filter_data['limit'] < 1) {
				$filter_data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$filter_data['start'] . "," . (int)$filter_data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

}