<?php
class ModelCustomerCustomerCommission extends Model {
    const DEFAULT_PLAN_NAME = 'DEFAULT';

    public function ensureSchema(): void {
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "customer_commission_plan` (
            `commission_plan_id` int(11) NOT NULL AUTO_INCREMENT,
            `name` varchar(64) NOT NULL,
            `type` varchar(16) NOT NULL DEFAULT 'percentage',
            `value` decimal(15,4) NOT NULL DEFAULT '0.0000',
            `currency_code` char(3) NOT NULL DEFAULT 'USD',
            `is_default` tinyint(1) NOT NULL DEFAULT '0',
            `status` tinyint(1) NOT NULL DEFAULT '1',
            `date_added` datetime NOT NULL,
            `date_modified` datetime NOT NULL,
            PRIMARY KEY (`commission_plan_id`),
            KEY `idx_default_status` (`is_default`, `status`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8");

        $this->ensureCustomerColumn();
        $this->ensureCustomerGroupColumn();
        $this->ensureDefaultPlan();
    }

    public function ensureCustomerColumn(): void {
        $query = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "customer` LIKE 'commission_plan_id'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "customer` ADD `commission_plan_id` int(11) NOT NULL DEFAULT '0'");
        }
    }

    public function ensureCustomerGroupColumn(): void {
        $query = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "customer_group` LIKE 'commission_plan_id'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "customer_group` ADD `commission_plan_id` int(11) NOT NULL DEFAULT '0'");
        }
    }

    public function ensureDefaultPlan(): int {
        $query = $this->db->query("SELECT commission_plan_id FROM `" . DB_PREFIX . "customer_commission_plan` WHERE is_default = '1' ORDER BY commission_plan_id ASC LIMIT 1");

        if ($query->num_rows) {
            return (int)$query->row['commission_plan_id'];
        }

        $this->db->query("INSERT INTO `" . DB_PREFIX . "customer_commission_plan` SET name = '" . $this->db->escape(self::DEFAULT_PLAN_NAME) . "', type = 'percentage', value = '0.0000', currency_code = 'USD', is_default = '1', status = '1', date_added = NOW(), date_modified = NOW()");

        return (int)$this->db->getLastId();
    }

    public function addPlan(array $data): int {
        $this->ensureSchema();

        $type = $this->normalizeType($data['type'] ?? 'percentage');
        $value = max(0, (float)($data['value'] ?? 0));
        if ($type === 'percentage') {
            $value = min(100, $value);
        }

        $this->db->query("INSERT INTO `" . DB_PREFIX . "customer_commission_plan` SET name = '" . $this->db->escape(trim((string)($data['name'] ?? ''))) . "', type = '" . $this->db->escape($type) . "', value = '" . (float)$value . "', currency_code = 'USD', is_default = '0', status = '" . (int)($data['status'] ?? 1) . "', date_added = NOW(), date_modified = NOW()");

        return (int)$this->db->getLastId();
    }

    public function editPlan(int $commission_plan_id, array $data): void {
        $this->ensureSchema();

        $plan = $this->getPlan($commission_plan_id);
        if (!$plan) {
            return;
        }

        $type = $this->normalizeType($data['type'] ?? $plan['type']);
        $value = max(0, (float)($data['value'] ?? 0));
        if ($type === 'percentage') {
            $value = min(100, $value);
        }

        $status = !empty($plan['is_default']) ? 1 : (int)($data['status'] ?? 1);
        $name = !empty($plan['is_default']) ? self::DEFAULT_PLAN_NAME : trim((string)($data['name'] ?? ''));

        $this->db->query("UPDATE `" . DB_PREFIX . "customer_commission_plan` SET name = '" . $this->db->escape($name) . "', type = '" . $this->db->escape($type) . "', value = '" . (float)$value . "', currency_code = 'USD', status = '" . (int)$status . "', date_modified = NOW() WHERE commission_plan_id = '" . (int)$commission_plan_id . "'");
    }

    public function deletePlan(int $commission_plan_id): bool {
        $this->ensureSchema();
        $plan = $this->getPlan($commission_plan_id);

        if (!$plan || !empty($plan['is_default'])) {
            return false;
        }

        $defaultPlanId = $this->ensureDefaultPlan();
        $this->db->query("UPDATE `" . DB_PREFIX . "customer` SET commission_plan_id = '" . (int)$defaultPlanId . "' WHERE commission_plan_id = '" . (int)$commission_plan_id . "'");
        $this->db->query("DELETE FROM `" . DB_PREFIX . "customer_commission_plan` WHERE commission_plan_id = '" . (int)$commission_plan_id . "'");

        return true;
    }

    public function getPlan(int $commission_plan_id): array {
        $this->ensureSchema();
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "customer_commission_plan` WHERE commission_plan_id = '" . (int)$commission_plan_id . "'");
        return $query->row ?: [];
    }

    public function getPlans(array $data = []): array {
        $this->ensureSchema();

        $sql = "SELECT * FROM `" . DB_PREFIX . "customer_commission_plan` ORDER BY is_default DESC, name ASC";

        if (isset($data['start']) || isset($data['limit'])) {
            $start = max(0, (int)($data['start'] ?? 0));
            $limit = max(1, (int)($data['limit'] ?? 20));
            $sql .= " LIMIT " . $start . "," . $limit;
        }

        return $this->db->query($sql)->rows;
    }

    public function getTotalPlans(): int {
        $this->ensureSchema();
        $query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "customer_commission_plan`");
        return (int)$query->row['total'];
    }

    private function normalizeType(string $type): string {
        return $type === 'fixed' ? 'fixed' : 'percentage';
    }
}
