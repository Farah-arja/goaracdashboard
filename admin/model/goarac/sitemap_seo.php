<?php

require_once(DIR_SYSTEM . 'library/goarac/seo_landing_pages.php');

class ModelGoaracSitemapSeo extends Model {

	public function ensureStorage() {
		$this->ensureInformationColumns();
	}


	public function seedLandingPages() {
		$this->ensureStorage();

		$count = 0;

		foreach (GoaracSeoLandingPages::pages() as $page) {
			if ($this->upsertLandingPage($page)) {
				$count++;
			}
		}

		$this->cache->delete('information');

		return $count;
	}


	public function getEntries() {
		$this->ensureStorage();

		$entries = array();

		$sql = "SELECT 
					i.*,
					id.language_id,
					id.title,
					id.meta_title,
					id.meta_description,
					su.keyword,
					l.code AS language_code

				FROM `" . DB_PREFIX . "information` i

				LEFT JOIN `" . DB_PREFIX . "information_description` id
					ON (i.information_id = id.information_id)

				LEFT JOIN `" . DB_PREFIX . "language` l
					ON (id.language_id = l.language_id)

				LEFT JOIN `" . DB_PREFIX . "seo_url` su
					ON (
						su.query = CONCAT('information_id=', i.information_id)
						AND su.language_id = id.language_id
						AND su.store_id = 0
					)

				WHERE i.status = 1
					AND id.title IS NOT NULL

				ORDER BY
					i.goarac_sitemap_include DESC,
					i.goarac_sitemap_priority DESC,
					i.goarac_type ASC,
					id.title ASC";

		foreach ($this->db->query($sql)->rows as $row) {

			$language = $this->normalizeLanguage(
				$row['language_code'] ?? 'tr'
			);

			$slug = $this->slugify(
				$row['keyword'] ?? $row['title'] ?? ''
			);

			$entries[] = array(
				'information_id' => (int)$row['information_id'],

				'language_code' => $language,

				'type' => $this->normalizeType(
					$row['goarac_type'] ?? 'page'
				),

				'title' => html_entity_decode(
					(string)$row['title'],
					ENT_QUOTES,
					'UTF-8'
				),

				'slug' => $slug,

				'url' => $this->getFrontendBaseUrl()
					. '/' . $language
					. '/' . $slug,

				'include' => (int)(
					$row['goarac_sitemap_include'] ?? 1
				),

				'priority' => (float)(
					$row['goarac_sitemap_priority'] ?? 0.7
				),

				'changefreq' => $this->normalizeChangefreq(
					$row['goarac_sitemap_changefreq'] ?? 'weekly'
				)
			);
		}

		return $entries;
	}


	public function getFrontendBaseUrl() {

		$query = $this->db->query("
			SELECT `setting_value`
			FROM `" . DB_PREFIX . "goarac_site_setting`
			WHERE `setting_key` = 'site'
			ORDER BY `language_code` = 'tr' DESC
			LIMIT 1
		");

		if ($query->num_rows) {

			$site = json_decode(
				(string)$query->row['setting_value'],
				true
			);

			if (is_array($site) && !empty($site['frontend_url'])) {
				return $this->normalizeFrontendUrl(
					$site['frontend_url']
				);
			}
		}

		return 'https://goarac.com';
	}


	private function ensureInformationColumns() {

		$query = $this->db->query(
			"SHOW COLUMNS FROM `" . DB_PREFIX . "information`"
		);

		$columns = array();

		foreach ($query->rows as $row) {
			$columns[$row['Field']] = true;
		}


		if (!isset($columns['goarac_type'])) {

			$this->db->query("
				ALTER TABLE `" . DB_PREFIX . "information`
				ADD `goarac_type` VARCHAR(32)
				NOT NULL DEFAULT 'page'
				AFTER `status`
			");
		}


		if (!isset($columns['goarac_image'])) {

			$this->db->query("
				ALTER TABLE `" . DB_PREFIX . "information`
				ADD `goarac_image` VARCHAR(255)
				NOT NULL DEFAULT ''
				AFTER `goarac_type`
			");
		}


		if (!isset($columns['goarac_data_json'])) {

			$this->db->query("
				ALTER TABLE `" . DB_PREFIX . "information`
				ADD `goarac_data_json` LONGTEXT NULL
				AFTER `goarac_image`
			");
		}


		if (!isset($columns['goarac_sitemap_include'])) {

			$this->db->query("
				ALTER TABLE `" . DB_PREFIX . "information`
				ADD `goarac_sitemap_include` TINYINT(1)
				NOT NULL DEFAULT 1
				AFTER `goarac_data_json`
			");
		}


		if (!isset($columns['goarac_sitemap_priority'])) {

			$this->db->query("
				ALTER TABLE `" . DB_PREFIX . "information`
				ADD `goarac_sitemap_priority` DECIMAL(3,2)
				NOT NULL DEFAULT 0.70
				AFTER `goarac_sitemap_include`
			");
		}


		if (!isset($columns['goarac_sitemap_changefreq'])) {

			$this->db->query("
				ALTER TABLE `" . DB_PREFIX . "information`
				ADD `goarac_sitemap_changefreq` VARCHAR(16)
				NOT NULL DEFAULT 'weekly'
				AFTER `goarac_sitemap_priority`
			");
		}
	}


	private function upsertLandingPage(array $page) {

		$language = $this->normalizeLanguage(
			$page['language_code'] ?? 'tr'
		);

		$language_id = $this->getLanguageId($language);

		$slug = $this->slugify(
			$page['slug'] ?? $page['title'] ?? ''
		);

		$title = trim(
			(string)($page['title'] ?? '')
		);


		if (!$language_id || $slug === '' || $title === '') {
			return false;
		}


		$information_id = $this->findInformationIdBySlug(
			$slug,
			$language_id
		);


		$data_json = json_encode(
			$page['data'] ?? array(),
			JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
		);


		$type = $this->normalizeType(
			$page['type'] ?? 'seo_landing'
		);


		$image = $this->normalizeSeedImage(
			$page['image'] ?? ''
		);


		$priority = $this->normalizePriority(
			$page['sitemap_priority'] ?? 0.8
		);


		$changefreq = $this->normalizeChangefreq(
			$page['sitemap_changefreq'] ?? 'weekly'
		);


		if ($information_id) {

			$this->db->query("
				UPDATE `" . DB_PREFIX . "information`
				SET
					`goarac_type` = IF(
						TRIM(`goarac_type`) = '',
						'" . $this->db->escape($type) . "',
						`goarac_type`
					),

					`goarac_image` = IF(
						TRIM(`goarac_image`) = ''
						OR `goarac_image` LIKE 'https://images.unsplash.com/%'
						OR `goarac_image` LIKE 'http://images.unsplash.com/%'
						OR `goarac_image` LIKE '%demo.goarac.com/image/%',
						'" . $this->db->escape($image) . "',
						`goarac_image`
					),

					`goarac_data_json` = IF(
						TRIM(IFNULL(`goarac_data_json`, '')) = ''
						OR TRIM(IFNULL(`goarac_data_json`, '')) = '[]'
						OR TRIM(IFNULL(`goarac_data_json`, '')) = '{}',
						'" . $this->db->escape($data_json) . "',
						`goarac_data_json`
					),

					`goarac_sitemap_include` = 1,

					`goarac_sitemap_priority` = IF(
						`goarac_sitemap_priority` = 0,
						'" . (float)$priority . "',
						`goarac_sitemap_priority`
					),

					`goarac_sitemap_changefreq` = IF(
						TRIM(`goarac_sitemap_changefreq`) = '',
						'" . $this->db->escape($changefreq) . "',
						`goarac_sitemap_changefreq`
					)

				WHERE `information_id` = '" . (int)$information_id . "'
			");

		} else {

			$this->db->query("
				INSERT INTO `" . DB_PREFIX . "information`
				SET
					`bottom` = 0,

					`sort_order` = '" . (int)(
						$page['sort_order'] ?? 500
					) . "',

					`status` = 1,

					`goarac_type` = '" . $this->db->escape($type) . "',

					`goarac_image` = '" . $this->db->escape($image) . "',

					`goarac_data_json` = '" . $this->db->escape($data_json) . "',

					`goarac_sitemap_include` = 1,

					`goarac_sitemap_priority` = '" . (float)$priority . "',

					`goarac_sitemap_changefreq` = '" . $this->db->escape($changefreq) . "'
			");


			$information_id = (int)$this->db->getLastId();
		}


		$description = $this->db->query("
			SELECT `information_id`
			FROM `" . DB_PREFIX . "information_description`
			WHERE
				`information_id` = '" . (int)$information_id . "'
				AND `language_id` = '" . (int)$language_id . "'
			LIMIT 1
		");


		if (!$description->num_rows) {

			$this->db->query("
				INSERT INTO `" . DB_PREFIX . "information_description`
				SET
					`information_id` = '" . (int)$information_id . "',

					`language_id` = '" . (int)$language_id . "',

					`title` = '" . $this->db->escape($title) . "',

					`description` = '" . $this->db->escape(
						(string)($page['content_html'] ?? '')
					) . "',

					`meta_title` = '" . $this->db->escape(
						(string)($page['meta_title'] ?? $title)
					) . "',

					`meta_description` = '" . $this->db->escape(
						(string)(
							$page['meta_description']
							?? $page['excerpt']
							?? ''
						)
					) . "',

					`meta_keyword` = '" . $this->db->escape(
						implode(
							', ',
							$page['data']['target_keywords'] ?? array()
						)
					) . "'
			");
		}


		$store = $this->db->query("
			SELECT `information_id`
			FROM `" . DB_PREFIX . "information_to_store`
			WHERE
				`information_id` = '" . (int)$information_id . "'
				AND `store_id` = 0
			LIMIT 1
		");


		if (!$store->num_rows) {

			$this->db->query("
				INSERT INTO `" . DB_PREFIX . "information_to_store`
				SET
					`information_id` = '" . (int)$information_id . "',
					`store_id` = 0
			");
		}


		$seo = $this->db->query("
			SELECT `seo_url_id`
			FROM `" . DB_PREFIX . "seo_url`
			WHERE
				`query` = 'information_id=" . (int)$information_id . "'
				AND `language_id` = '" . (int)$language_id . "'
				AND `store_id` = 0
			LIMIT 1
		");


		if (!$seo->num_rows) {

			$this->db->query("
				INSERT INTO `" . DB_PREFIX . "seo_url`
				SET
					`store_id` = 0,

					`language_id` = '" . (int)$language_id . "',

					`query` = 'information_id=" . (int)$information_id . "',

					`keyword` = '" . $this->db->escape($slug) . "'
			");
		}


		return true;
	}


	private function findInformationIdBySlug($slug, $language_id) {

		$query = $this->db->query("
			SELECT `query`
			FROM `" . DB_PREFIX . "seo_url`
			WHERE
				`keyword` = '" . $this->db->escape($slug) . "'
				AND `language_id` = '" . (int)$language_id . "'
				AND `query` LIKE 'information_id=%'
			LIMIT 1
		");


		if (
			$query->num_rows
			&& preg_match(
				'/information_id=(\d+)/',
				(string)$query->row['query'],
				$match
			)
		) {
			return (int)$match[1];
		}


		return 0;
	}


	private function getLanguageId($language) {

		$query = $this->db->query("
			SELECT `language_id`
			FROM `" . DB_PREFIX . "language`
			WHERE
				LOWER(`code`) = '" . $this->db->escape($language) . "'
				OR LOWER(`code`) LIKE '" . $this->db->escape($language) . "-%'
			ORDER BY
				`status` DESC,
				`sort_order` ASC
			LIMIT 1
		");


		return $query->num_rows
			? (int)$query->row['language_id']
			: (int)$this->config->get('config_language_id');
	}


	private function normalizeLanguage($code) {

		$code = strtolower(
			trim((string)$code)
		);

		$code = preg_split(
			'/[-_]/',
			$code,
			2
		)[0] ?? 'tr';

		return $code === 'en' ? 'en' : 'tr';
	}


	private function normalizeType($type) {

		$type = strtolower(
			trim((string)$type)
		);

		return in_array(
			$type,
			array(
				'page',
				'legal',
				'blog',
				'campaign',
				'seo_landing'
			),
			true
		) ? $type : 'page';
	}


	private function normalizePriority($value) {

		$value = max(
			0.1,
			min(1.0, (float)$value)
		);

		return round($value, 2);
	}


	private function normalizeChangefreq($value) {

		$value = strtolower(
			trim((string)$value)
		);

		$allowed = array(
			'always',
			'hourly',
			'daily',
			'weekly',
			'monthly',
			'yearly',
			'never'
		);

		return in_array(
			$value,
			$allowed,
			true
		) ? $value : 'weekly';
	}


	private function normalizeSeedImage($image) {

		$image = trim((string)$image);

		if (
			$image === ''
			|| strpos(
				$image,
				'images.unsplash.com/'
			) !== false
			|| strpos(
				$image,
				'demo.goarac.com/image/'
			) !== false
		) {
			return 'https://api.goarac.com/image/catalog/arac-kira/go-arac-az-ode.png';
		}

		return $image;
	}


	private function normalizeFrontendUrl($url) {

		$url = str_ireplace(
			array(
				'https://rental.goarac.com',
				'http://rental.goarac.com'
			),
			'https://goarac.com',
			trim((string)$url)
		);

		return rtrim($url, '/');
	}


	private function slugify($value) {

		$value = strtolower(
			trim((string)$value)
		);

		$value = strtr(
			$value,
			array(
				'ı' => 'i',
				'ğ' => 'g',
				'ü' => 'u',
				'ş' => 's',
				'ö' => 'o',
				'ç' => 'c'
			)
		);

		$value = preg_replace(
			'/[^a-z0-9]+/u',
			'-',
			$value
		);

		return trim(
			(string)$value,
			'-'
		);
	}
}