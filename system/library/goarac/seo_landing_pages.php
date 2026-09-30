<?php

class GoaracSeoLandingPages {
	public static function version() {
		return '2026-05-01-location-sitemap-v2';
	}

	public static function pages() {
		$pages = array();
		$seen = array();

		foreach (array_merge(self::landingDefinitions(), self::locationLandingDefinitions(), self::keywordLandingDefinitions()) as $definition) {
			foreach (array('tr', 'en') as $language) {
				$page = self::buildPage($definition, $language);
				$key = $page['language_code'] . '|' . $page['slug'];
				if (isset($seen[$key])) {
					continue;
				}
				$seen[$key] = true;
				$pages[] = $page;
			}
		}

		return $pages;
	}

	private static function buildPage($definition, $language) {
		$isTurkish = $language === 'tr';
		$title = $isTurkish ? $definition['tr_title'] : $definition['en_title'];
		$slug = $isTurkish ? $definition['tr_slug'] : $definition['en_slug'];
		$location = $isTurkish ? ($definition['tr_location'] ?? '') : ($definition['en_location'] ?? '');
		$keyword = $isTurkish ? ($definition['tr_keyword'] ?? $title) : ($definition['en_keyword'] ?? $title);
		$description = $isTurkish
			? self::trDescription($keyword, $location, $definition)
			: self::enDescription($keyword, $location, $definition);
		$content = $isTurkish
			? self::trContent($keyword, $location, $definition)
			: self::enContent($keyword, $location, $definition);

		return array(
			'language_code' => $language,
			'type' => $definition['type'] ?? 'seo_landing',
			'slug' => $slug,
			'title' => $title,
			'excerpt' => $description,
			'content_html' => $content,
			'image' => $definition['image'] ?? self::defaultImage(),
			'meta_title' => $title . ' | Go Araç',
			'meta_description' => $description,
			'data' => array(
				'canonical_group' => $definition['group'],
				'source_pattern' => $definition['source_pattern'] ?? 'goarac_keyword',
				'alternate_slugs' => array(
					'tr' => $definition['tr_slug'],
					'en' => $definition['en_slug'],
				),
				'page_label' => $isTurkish ? 'Araç Kiralama' : 'Car Rental',
				'button_label' => $isTurkish ? 'Araç ara' : 'Search cars',
				'button_href' => self::searchHref($definition, $language),
				'search_location' => $definition['search_location'] ?? '',
				'location_country' => $definition['location_country'] ?? '',
				'location_city' => $definition['location_city'] ?? '',
				'location_airport' => $definition['location_airport'] ?? '',
				'intent' => $definition['intent'] ?? 'search',
				'target_keywords' => $isTurkish ? ($definition['tr_keywords'] ?? array($keyword)) : ($definition['en_keywords'] ?? array($keyword)),
				'cards' => self::cards($definition, $language),
			),
			'sitemap_include' => 1,
			'sitemap_priority' => $definition['priority'] ?? '0.80',
			'sitemap_changefreq' => $definition['changefreq'] ?? 'weekly',
			'sort_order' => $definition['sort_order'] ?? 500,
			'status' => 1,
		);
	}

	private static function trDescription($keyword, $location, $definition) {
		if ($location !== '') {
			return $location . ' araç kiralama seçeneklerini Go Araç üzerinde karşılaştırın. Güncel fiyatları, teslim noktalarını, depozito ve iptal koşullarını ödeme öncesi görün.';
		}

		return $keyword . ' seçeneklerini Go Araç ile karşılaştırın. Ekonomik, otomatik, SUV ve havalimanı teslimli araçları güvenli ödeme akışıyla rezerve edin.';
	}

	private static function enDescription($keyword, $location, $definition) {
		if ($location !== '') {
			return 'Compare ' . $location . ' car rental options on Go Araç. Review live prices, pickup points, deposits, and cancellation rules before payment.';
		}

		return 'Compare ' . $keyword . ' options with Go Araç. Book economy, automatic, SUV, and airport pickup cars through a secure payment flow.';
	}

	private static function trContent($keyword, $location, $definition) {
		$heading = $location !== '' ? $location . ' araç kiralama' : $keyword;
		$intent = $definition['intent'] ?? 'search';
		$intro = 'Go Araç, araç kiralama tekliflerini tek ekranda karşılaştırmanız için tasarlanmıştır. Teslim yeri, tarih, araç sınıfı, vites tipi, yakıt bilgisi, depozito ve iptal koşulları ödeme adımından önce net şekilde gösterilir.';
		$compare = 'Arama formunda teslim noktasını, tarihleri, sürücü yaşını ve para birimini seçin. Sistem uygun araçları canlı tedarikçi verileriyle listeler ve toplam fiyatı seçtiğiniz para birimine göre gösterir.';

		if ($intent === 'airport') {
			$intro = 'Havalimanı teslimli araç kiralama aramalarında uçuş planınıza uygun teslim noktalarını, ofis saatlerini ve toplam rezervasyon bedelini ödeme öncesinde karşılaştırabilirsiniz.';
			$compare = 'Teslim ve bırakış saatlerini uçuşunuza göre seçin. Go Araç, uygun araçları canlı tekliflerle listeler ve ücretsiz iptal, depozito ve kilometre bilgilerini aynı kartta gösterir.';
		} elseif ($intent === 'location') {
			$intro = self::escape($heading) . ' aramalarında şehir merkezi, havalimanı ve popüler teslim noktalarına göre uygun araçları karşılaştırabilirsiniz.';
			$compare = 'Lokasyon, tarih ve sürücü yaşı değiştiğinde fiyatlar yeniden canlı tekliflerle hesaplanır. Bu sayede günlük, haftalık veya aylık seçenekleri net toplam bedelle görebilirsiniz.';
		} elseif ($intent === 'provider') {
			$intro = self::escape($keyword) . ' arayan kullanıcılar Go Araç üzerinde farklı tedarikçi tekliflerini aynı akışta inceleyebilir. Go Araç bağımsız karşılaştırma ve rezervasyon deneyimi sunar.';
			$compare = 'Tedarikçi logosu, araç sınıfı, depozito, kilometre limiti ve iptal koşullarını karşılaştırarak ödeme öncesinde tüm detayları kontrol edebilirsiniz.';
		} elseif ($intent === 'price') {
			$intro = self::escape($keyword) . ' için fiyat; teslim noktası, sezon, araç sınıfı, sürücü yaşı, süre ve ek hizmetlere göre değişir.';
			$compare = 'Go Araç fiyatları canlı tedarikçi tekliflerinden alır. Toplam tutar ve günlük ortalama seçtiğiniz para birimine göre gösterilir, ödeme ise güvenli bankacılık akışıyla tamamlanır.';
		} elseif ($intent === 'guide') {
			$intro = self::escape($keyword) . ' konusunda rezervasyon öncesinde dikkat edilmesi gereken başlıkları bu sayfada özetledik.';
			$compare = 'Kiralama koşullarını, kimlik ve ehliyet gereksinimlerini, depozito bilgisini ve iptal kurallarını teklif detayında kontrol ederek rezervasyonunuzu tamamlayabilirsiniz.';
		}

		return '<h2>' . self::escape($heading) . '</h2>'
			. '<p>' . $intro . '</p>'
			. '<h2>Fiyatları nasıl karşılaştırabilirsiniz?</h2>'
			. '<p>' . $compare . '</p>'
			. '<h2>Rezervasyon öncesi kontrol</h2>'
			. '<p>Depozito, kilometre limiti, ücretsiz iptal hakkı, ek hizmetler ve teslim ofisi bilgilerini kontrol ederek rezervasyonunuzu güvenli şekilde tamamlayabilirsiniz.</p>';
	}

	private static function enContent($keyword, $location, $definition) {
		$heading = $location !== '' ? $location . ' car rental' : $keyword;
		$intent = $definition['intent'] ?? 'search';
		$intro = 'Go Araç is built to compare car rental offers in one booking flow. Pickup point, dates, vehicle class, transmission, fuel type, deposit, and cancellation rules are shown before payment.';
		$compare = 'Choose the pickup location, dates, driver age, and currency in the search form. The system lists available cars with live supplier data and shows the total in your selected currency.';

		if ($intent === 'airport') {
			$intro = 'For airport car rental, you can compare pickup offices, opening hours, vehicle classes, deposits, and total reservation costs before payment.';
			$compare = 'Set pickup and drop-off times around your flight. Go Araç lists live supplier offers and shows cancellation, deposit, and mileage details on the same card.';
		} elseif ($intent === 'location') {
			$intro = self::escape($heading) . ' pages help you compare city, airport, and popular pickup locations with live car rental availability.';
			$compare = 'When location, dates, or driver age changes, prices are recalculated from live offers. You can compare daily, weekly, or monthly options with a clear total.';
		} elseif ($intent === 'provider') {
			$intro = 'Users searching for ' . self::escape($keyword) . ' can review supplier offers inside the Go Araç booking flow. Go Araç provides an independent comparison and reservation experience.';
			$compare = 'Compare supplier logos, vehicle class, deposit, mileage limit, and cancellation rules before you continue to secure payment.';
		} elseif ($intent === 'price') {
			$intro = 'Prices for ' . self::escape($keyword) . ' depend on pickup point, season, vehicle class, driver age, rental duration, and extras.';
			$compare = 'Go Araç fetches prices from live supplier offers. Total and average daily prices are shown in the selected currency and payment is handled through a secure bank flow.';
		} elseif ($intent === 'guide') {
			$intro = 'This page summarizes what to check before booking for ' . self::escape($keyword) . '.';
			$compare = 'Review rental rules, ID and driving license requirements, deposit information, and cancellation terms inside the offer details before booking.';
		}

		return '<h2>' . self::escape($heading) . '</h2>'
			. '<p>' . $intro . '</p>'
			. '<h2>How to compare prices</h2>'
			. '<p>' . $compare . '</p>'
			. '<h2>Before booking</h2>'
			. '<p>Review the deposit, mileage limit, free cancellation rule, extras, and pickup office details before confirming your reservation securely.</p>';
	}

	private static function cards($definition, $language) {
		$intent = $definition['intent'] ?? 'search';
		if ($language === 'tr') {
			if ($intent === 'guide') {
				return array(
					array('title' => 'Koşulları okuyun', 'body' => 'Kimlik, ehliyet, yaş, depozito ve ödeme şartlarını teklif detayında kontrol edin.'),
					array('title' => 'Canlı teklif alın', 'body' => 'Fiyatlar lokasyon, tarih ve araç sınıfına göre tedarikçi sistemlerinden güncellenir.'),
					array('title' => 'Güvenli ödeme', 'body' => 'Ödeme onaylanmadan tedarikçi rezervasyonu oluşturulmaz.'),
				);
			}

			return array(
				array('title' => 'Canlı fiyatlar', 'body' => 'Uygun araçlar ve fiyatlar arama kriterlerinize göre tedarikçi sistemlerinden alınır.'),
				array('title' => 'Şeffaf koşullar', 'body' => 'Depozito, kilometre limiti, iptal ve teslim detayları ödeme öncesinde gösterilir.'),
				array('title' => 'Güvenli ödeme', 'body' => 'Ödeme tamamlanmadan tedarikçi rezervasyonu oluşturulmaz.'),
			);
		}

		if ($intent === 'guide') {
			return array(
				array('title' => 'Check the rules', 'body' => 'Review ID, license, age, deposit, and payment requirements in the offer details.'),
				array('title' => 'Get live offers', 'body' => 'Prices update by location, dates, and vehicle class from supplier systems.'),
				array('title' => 'Secure payment', 'body' => 'Supplier booking is not created until payment is confirmed.'),
			);
		}

		return array(
			array('title' => 'Live prices', 'body' => 'Available cars and prices are fetched from supplier systems based on your search.'),
			array('title' => 'Clear conditions', 'body' => 'Deposit, mileage limit, cancellation, and pickup details are shown before payment.'),
			array('title' => 'Secure payment', 'body' => 'Supplier booking is not created until payment is confirmed.'),
		);
	}

	private static function searchHref($definition, $language) {
		$location = trim((string)($definition['search_location'] ?? 'Istanbul Airport'));
		return '/car?pickup-location=' . rawurlencode($location);
	}

	private static function keywordLandingDefinitions() {
		$definitions = array();
		$seen = array();

		foreach (self::landingDefinitions() as $definition) {
			foreach (array('tr_slug', 'en_slug', 'group', 'tr_keyword', 'en_keyword') as $key) {
				if (!empty($definition[$key])) {
					$seen[self::lower($definition[$key])] = true;
				}
			}
			foreach (($definition['tr_keywords'] ?? array()) as $keyword) {
				$seen[self::lower($keyword)] = true;
			}
		}

		$sort = 700;
		foreach (self::rawKeywordList() as $keyword) {
			$keyword = self::normalizeKeyword($keyword);
			$key = self::lower($keyword);
			if ($keyword === '' || isset($seen[$key])) {
				continue;
			}

			$trSlug = self::slugifyAscii($keyword);
			if ($trSlug === '' || isset($seen['slug:' . $trSlug])) {
				continue;
			}

			$intent = self::inferIntent($keyword);
			$enTitle = self::titleCase(self::translateKeywordToEnglish($keyword), 'en');
			$enSlug = self::slugifyAscii($enTitle);
			if ($enSlug === '' || isset($seen['slug:' . $enSlug])) {
				$enSlug = 'car-rental-' . $trSlug;
			}

			$definitions[] = array(
				'group' => 'keyword-' . $trSlug,
				'type' => $intent === 'guide' ? 'blog' : 'seo_landing',
				'intent' => $intent,
				'tr_slug' => $trSlug,
				'en_slug' => $enSlug,
				'tr_title' => self::titleCase($keyword, 'tr'),
				'en_title' => $enTitle,
				'tr_keyword' => $keyword,
				'en_keyword' => self::lower($enTitle),
				'tr_keywords' => array($keyword),
				'en_keywords' => array(self::lower($enTitle), 'car rental Turkey'),
				'search_location' => self::inferSearchLocation($keyword),
				'priority' => self::priorityForIntent($intent),
				'changefreq' => $intent === 'guide' ? 'monthly' : 'weekly',
				'sort_order' => $sort++,
			);

			$seen[$key] = true;
			$seen['slug:' . $trSlug] = true;
			$seen['slug:' . $enSlug] = true;
		}

		return $definitions;
	}

	private static function rawKeywordList() {
		$raw = <<<'KEYWORDS'
araç kiralama, avis araç kiralama, garenta araç kiralama, en uygun araç kiralama, obilet araç kiralama, kıbrıs araç kiralama, sixt araç kiralama, ankara araç kiralama, araç kiralama istanbul, enterprise araç kiralama, havalimanı araç kiralama, araç kiralama aylık, araç kiralama avis, araç kiralama ankara, araç kiralama antalya, araç kiralama aylık istanbul, araç kiralama adana, araç kiralama ataşehir, araç kiralama arnavutköy, araç kiralama aylık fiyat, araç kiralama anadolu yakası, aylık araç kiralama, antalya araç kiralama, avec araç kiralama, adana araç kiralama, antalya havalimanı araç kiralama, avek araç kiralama, adana havalimanı araç kiralama, aylık araç kiralama fiyatları, araç kiralama beylikdüzü, araç kiralama budget, araç kiralama bedelleri, araç kiralama başakşehir, araç kiralama bursa, araç kiralama bodrum, araç kiralama bayrampaşa, araç kiralama bmw, araç kiralama bedeli 2026, araç kiralama bahçelievler, bursa araç kiralama, bodrum araç kiralama, balıkesir araç kiralama, bodrum havalimanı araç kiralama, booking araç kiralama, batman araç kiralama, batman havalimanı araç kiralama, bandırma araç kiralama, bolu araç kiralama, bosna hersek araç kiralama, araç kiralama clio, araç kiralama cabrio, araç kiralama cayma bedeli, araç kiralama chery, araç kiralama ceyhan, araç kiralama caravelle, araç kiralama cizre, araç kiralama ceza sorgulama, araç kiralama contact, araç kiralama çukurova havalimanı, central araç kiralama, cabrio araç kiralama, cizre araç kiralama, contact araç kiralama, cartem araç kiralama, carjet araç kiralama, cidde araç kiralama, ceyhan araç kiralama, chios araç kiralama, cov araç kiralama, araç kiralama çekmeköy, araç kiralama çorlu, araç kiralama çanakkale, araç kiralama çizgi, araç kiralama çorum, araç kiralama çukurova, araç kiralama çerkezköy, araç kiralama çarşamba, araç kiralama çankırı, çukurova havalimanı araç kiralama, çanakkale araç kiralama, çorlu araç kiralama, çizgi araç kiralama, çorum araç kiralama, çerkezköy araç kiralama, çeşme araç kiralama, çarşamba havalimanı araç kiralama, çukurova araç kiralama, çeki demirli araç kiralama, araç kiralama diyarbakır, araç kiralama dakikalık, araç kiralama damga vergisi oranı, araç kiralama dalaman, araç kiralama denizli, araç kiralama depozito nedir, araç kiralama doblo, araç kiralama damga vergisi hesaplama, araç kiralama dakika, araç kiralama diyarbakır havalimanı, dubai araç kiralama, diyarbakır araç kiralama, diyarbakır havalimanı araç kiralama, dokay araç kiralama, dalaman havalimanı araç kiralama, dalaman araç kiralama, denizli araç kiralama, dakikalık araç kiralama, düzce araç kiralama, dubai lüks araç kiralama, araç kiralama en uygun, araç kiralama enterprise, araç kiralama esenyurt, araç kiralama en ucuz, araç kiralama ehliyet kaç yıl, araç kiralama egm, araç kiralama everyday, araç kiralama erzurum, araç kiralama ekşi, araç kiralama eskişehir, ercan havalimanı araç kiralama, erzurum araç kiralama, eskişehir araç kiralama, everyday araç kiralama, elazığ araç kiralama, esenboğa araç kiralama, erzurum havalimanı araç kiralama, elektrikli araç kiralama, araç kiralama fiyatları, araç kiralama firmaları, araç kiralama findeks notu kaç olmalı, araç kiralama fiyatları istanbul, araç kiralama filo şirketleri, araç kiralama fiyatları aylık, araç kiralama findeks, araç kiralama firması, araç kiralama firmaları istanbul, araç kiralama faturası gider gösterme 2026, filo araç kiralama, fethiye araç kiralama, filo teknik araç kiralama, fatsa araç kiralama, filo araç kiralama fiyatları, flamingo araç kiralama, filomingo araç kiralama, findeks notuna bakmayan araç kiralama, frankfurt araç kiralama, frigolu araç kiralama, araç kiralama gider kısıtlaması 2026, araç kiralama gider kısıtlaması 2025, araç kiralama garenta, araç kiralama gider kısıtlaması 2026 muhasebe kaydı, araç kiralama gider sınırı 2026, araç kiralama günlük ne kadar, araç kiralama günlük gider kısıtlaması 2026, araç kiralama gaziantep, araç kiralama getir, araç kiralama gaziantep havalimanı, günlük araç kiralama, getir araç kiralama, gaziantep araç kiralama, gaziantep havalimanı araç kiralama, günlük araç kiralama fiyatları, gebze araç kiralama, green motion araç kiralama, girne araç kiralama, giresun araç kiralama, araç kiralama pilot garage yorumlar, araç kiralama püf noktaları, araç kiralama gider pusulası örneği, araç kiralama platformu, araç kiralama poliçesi, günlük araç kiralama uygun, uygun araç kiralama şirketleri, uygun araç kiralama fiyatları, günlük araç kiralama ümraniye, uygun araç kiralama aylık, araç kiralama havalimanı, araç kiralama havalimanı istanbul, araç kiralama halkalı, araç kiralama hatay, araç kiralama hesaplama, araç kiralama haberleri, araç kiralama haftalık, araç kiralama hizmet alımı, araç kiralama hertz, araç kiralama hollanda, hatay havalimanı araç kiralama, havalimanı araç kiralama izmir, hertz araç kiralama, havalimanı araç kiralama istanbul, havalimanı araç kiralama ankara, havalimanı araç kiralama antalya, havalimanı araç kiralama diyarbakır, havalimanı araç kiralama adana, havalimanı araç kiralama sabiha gökçen, araç kiralama ısparta, araç kiralama ığdır, araç kiralama ıspartakule, hdy araç kiralama ığdır, avis araç kiralama ığdır, everyday araç kiralama ığdır, avis araç kiralama ısparta, easygo araç kiralama ığdır, günlük araç kiralama ısparta, ısparta araç kiralama, ığdır araç kiralama, ığdır havalimanı araç kiralama, ısparta havalimanı araç kiralama, ısparta kurumsal araç kiralama, ısparta araç kiralama fiyatları, ısparta merkez araç kiralama, ıspartakule araç kiralama, ısparta araç kiralama firmaları, ığdır hdy araç kiralama, araç kiralama istanbul havalimanı, araç kiralama izmir, araç kiralama iş ilanları, araç kiralama istanbul fiyat, araç kiralama için kredi notu kaç olmalı, araç kiralama indirim, araç kiralama için ehliyet süresi, araç kiralama için findeks kaç olmalı, izmir araç kiralama, izmir havalimanı araç kiralama, istanbul araç kiralama, istanbul havalimanı araç kiralama, izmit araç kiralama, iskenderun araç kiralama, izmir adnan menderes havalimanı araç kiralama, izmir araç kiralama fiyatları, intercity araç kiralama, italya araç kiralama, araç kiralama jeep, araç kiralama jandarma, japonya araç kiralama, jolly araç kiralama, jet araç kiralama, jetgo araç kiralama, jandarma araç kiralama indirim, jfk araç kiralama, jeddah araç kiralama, japonya araç kiralama fiyatları, july car araç kiralama, jet filo araç kiralama, japonya da araç kiralama ehliyet, jolly tur araç kiralama, jet filo araç kiralama ve ticaret a ş, jeep araç kiralama, jet plus araç kiralama, araç kiralama kampanya, araç kiralama kdv oranı, araç kiralama kampanyaları 2026, araç kiralama kıbrıs, araç kiralama kurumsal firmalar, araç kiralama kısıtlaması 2026, araç kiralama kkeg sınırı 2026, araç kiralama kayseri, araç kiralama kurumsal, araç kiralama km sınırı, kayseri araç kiralama, konya araç kiralama, kurumsal araç kiralama, kayseri havalimanı araç kiralama, karadağ araç kiralama, kastamonu araç kiralama, kars araç kiralama, kktc araç kiralama, kocaeli araç kiralama, araç kiralama limiti 2026, araç kiralama lüks, araç kiralama limiti, araç kiralama lüks istanbul, araç kiralama levent, araç kiralama lefkoşa, araç kiralama leasing, araç kiralama logo, araç kiralama lüleburgaz, araç kiralama lamborghini, lüks araç kiralama, lefkoşa araç kiralama, lüleburgaz araç kiralama, londra araç kiralama, lüks araç kiralama istanbul, lefkoşa havalimanı araç kiralama, lizbon araç kiralama, leaseplan araç kiralama, lüks araç kiralama ankara, leasing araç kiralama, araç kiralama muhasebe kaydı 2026, araç kiralama muhasebe kaydı, araç kiralama maltepe, araç kiralama mardin havalimanı, araç kiralama moov, araç kiralama muhasebe kaydı 2025, araç kiralama mardin, araç kiralama markaları, araç kiralama minibüs, araç kiralama mersin, moov araç kiralama, mersin araç kiralama, mardin araç kiralama
KEYWORDS;

		$keywords = array();
		foreach (explode(',', $raw) as $keyword) {
			$keyword = self::normalizeKeyword($keyword);
			if ($keyword !== '') {
				$keywords[] = $keyword;
			}
		}

		return $keywords;
	}

	private static function normalizeKeyword($keyword) {
		$keyword = preg_replace('/\s+/u', ' ', trim((string)$keyword));
		return trim($keyword);
	}

	private static function inferIntent($keyword) {
		$keyword = self::lower($keyword);

		if (self::containsAny($keyword, array('havalimanı', 'havalimani', 'airport', 'esenboğa', 'adnan menderes', 'erçan', 'ercan', 'dalaman'))) {
			return 'airport';
		}

		if (self::containsAny($keyword, array('avis', 'garenta', 'sixt', 'enterprise', 'budget', 'avec', 'avek', 'central', 'cartem', 'carjet', 'dokay', 'everyday', 'green motion', 'hertz', 'intercity', 'jolly', 'jetgo', 'leaseplan', 'moov', 'obilet', 'booking'))) {
			return 'provider';
		}

		if (self::containsAny($keyword, array('fiyat', 'bedel', 'günlük ne kadar', 'aylık fiyat', 'limiti 2026'))) {
			return 'price';
		}

		if (self::containsAny($keyword, array('gider', 'muhasebe', 'damga vergisi', 'kdv', 'kkeg', 'findeks', 'ehliyet', 'depozito nedir', 'ceza sorgulama', 'cayma bedeli', 'püf noktaları', 'poliçesi', 'haberleri', 'iş ilanları', 'egm', 'jandarma'))) {
			return 'guide';
		}

		if (self::containsAny($keyword, array('istanbul', 'ankara', 'antalya', 'adana', 'ataşehir', 'arnavutköy', 'beylikdüzü', 'başakşehir', 'bursa', 'bodrum', 'bayrampaşa', 'bahçelievler', 'balıkesir', 'batman', 'bandırma', 'bolu', 'bosna hersek', 'ceyhan', 'cizre', 'çekmeköy', 'çorlu', 'çanakkale', 'çorum', 'çukurova', 'çerkezköy', 'çeşme', 'çankırı', 'diyarbakır', 'dalaman', 'denizli', 'dubai', 'düzce', 'esenboğa', 'erzurum', 'eskişehir', 'elazığ', 'fethiye', 'fatsa', 'frankfurt', 'gaziantep', 'gebze', 'girne', 'giresun', 'halkalı', 'hatay', 'hollanda', 'ısparta', 'ığdır', 'izmir', 'izmit', 'iskenderun', 'italya', 'japonya', 'jfk', 'jeddah', 'kayseri', 'konya', 'karadağ', 'kastamonu', 'kars', 'kktc', 'kocaeli', 'levent', 'lefkoşa', 'lüleburgaz', 'londra', 'lizbon', 'maltepe', 'mardin', 'mersin'))) {
			return 'location';
		}

		return 'search';
	}

	private static function priorityForIntent($intent) {
		switch ($intent) {
			case 'airport':
				return '0.72';
			case 'location':
				return '0.68';
			case 'provider':
				return '0.62';
			case 'price':
				return '0.60';
			case 'guide':
				return '0.55';
			default:
				return '0.58';
		}
	}

	private static function inferSearchLocation($keyword) {
		$keyword = self::lower($keyword);
		$locations = array(
			'sabiha' => 'Sabiha Gökçen International Airport',
			'istanbul havalimanı' => 'Istanbul Airport',
			'istanbul' => 'Istanbul Airport',
			'esenboğa' => 'Ankara Esenboğa Airport',
			'ankara' => 'Ankara Esenboğa Airport',
			'antalya' => 'Antalya Airport',
			'adana' => 'Çukurova International Airport',
			'çukurova' => 'Çukurova International Airport',
			'balıkesir' => 'Balıkesir',
			'batman' => 'Batman Airport',
			'bodrum' => 'Bodrum Milas Airport',
			'bursa' => 'Bursa',
			'çanakkale' => 'Çanakkale',
			'çorlu' => 'Tekirdağ Çorlu Airport',
			'dalaman' => 'Dalaman Airport',
			'denizli' => 'Denizli',
			'diyarbakır' => 'Diyarbakır Airport',
			'elazığ' => 'Elazığ Airport',
			'erzurum' => 'Erzurum Airport',
			'eskişehir' => 'Eskişehir',
			'fethiye' => 'Fethiye',
			'gaziantep' => 'Gaziantep Airport',
			'giresun' => 'Ordu Giresun Airport',
			'hatay' => 'Hatay Airport',
			'ığdır' => 'Iğdır Airport',
			'ısparta' => 'Isparta Airport',
			'izmir' => 'Izmir Adnan Menderes Airport',
			'kayseri' => 'Kayseri Airport',
			'konya' => 'Konya Airport',
			'kars' => 'Kars Airport',
			'kocaeli' => 'Kocaeli',
			'mardin' => 'Mardin Airport',
			'mersin' => 'Mersin',
		);

		foreach ($locations as $needle => $location) {
			if (strpos($keyword, $needle) !== false) {
				return $location;
			}
		}

		return 'Istanbul Airport';
	}

	private static function translateKeywordToEnglish($keyword) {
		$english = self::lower($keyword);
		$map = array(
			'araç kiralama' => 'car rental',
			'araba kiralama' => 'car rental',
			'oto kiralama' => 'auto rental',
			'rent a car' => 'rent a car',
			'havalimanı' => 'airport',
			'aylık' => 'monthly',
			'günlük' => 'daily',
			'en uygun' => 'best value',
			'en ucuz' => 'cheap',
			'uygun' => 'affordable',
			'fiyatları' => 'prices',
			'fiyat' => 'price',
			'bedelleri' => 'costs',
			'bedeli' => 'cost',
			'firmaları' => 'companies',
			'firması' => 'company',
			'kampanyaları' => 'campaigns',
			'kampanya' => 'campaign',
			'lüks' => 'luxury',
			'ekonomik' => 'economy',
			'elektrikli' => 'electric',
			'kurumsal' => 'corporate',
			'filo' => 'fleet',
			'depozito nedir' => 'deposit guide',
			'depozito' => 'deposit',
			'findeks notu kaç olmalı' => 'credit score requirements',
			'findeks kaç olmalı' => 'credit score requirements',
			'findeks' => 'credit score',
			'ehliyet kaç yıl' => 'license age requirement',
			'ehliyet süresi' => 'license duration',
			'damga vergisi hesaplama' => 'stamp tax calculation',
			'damga vergisi oranı' => 'stamp tax rate',
			'damga vergisi' => 'stamp tax',
			'kdv oranı' => 'VAT rate',
			'muhasebe kaydı' => 'accounting entry',
			'gider kısıtlaması' => 'expense limitation',
			'gider sınırı' => 'expense limit',
			'gider pusulası örneği' => 'expense slip example',
			'ceza sorgulama' => 'fine inquiry',
			'cayma bedeli' => 'cancellation fee',
			'püf noktaları' => 'tips',
			'poliçesi' => 'policy',
			'çekmeköy' => 'Cekmekoy',
			'çorlu' => 'Corlu',
			'çanakkale' => 'Canakkale',
			'çorum' => 'Corum',
			'çukurova' => 'Cukurova',
			'çerkezköy' => 'Cerkezkoy',
			'çeşme' => 'Cesme',
			'çankırı' => 'Cankiri',
			'ısparta' => 'Isparta',
			'ığdır' => 'Igdir',
			'istanbul' => 'Istanbul',
			'izmir' => 'Izmir',
			'diyarbakır' => 'Diyarbakir',
			'eskişehir' => 'Eskisehir',
			'karadağ' => 'Montenegro',
			'kıbrıs' => 'Cyprus',
			'kktc' => 'Northern Cyprus',
			'bosna hersek' => 'Bosnia and Herzegovina',
			'hollanda' => 'Netherlands',
			'japonya' => 'Japan',
			'italya' => 'Italy',
			'dubai' => 'Dubai',
			'cidde' => 'Jeddah',
			'lüleburgaz' => 'Luleburgaz',
			'lefkoşa' => 'Nicosia',
			'araç' => 'car',
			'kiralama' => 'rental',
		);

		$english = strtr($english, $map);
		$english = self::slugWordsToSpaces($english);
		return $english;
	}

	private static function titleCase($value, $language) {
		$value = trim((string)$value);
		if ($value === '') {
			return '';
		}

		if (function_exists('mb_convert_case')) {
			$title = mb_convert_case($value, MB_CASE_TITLE, 'UTF-8');
		} else {
			$title = ucwords($value);
		}

		$replacements = array(
			'Araç' => 'Araç',
			'İstanbul' => 'İstanbul',
			'Istanbul' => $language === 'tr' ? 'İstanbul' : 'Istanbul',
			'Kdv' => 'KDV',
			'Kkeg' => 'KKEG',
			'Bmw' => 'BMW',
			'Suv' => 'SUV',
			'Tc' => 'T.C.',
			'T.c.' => 'T.C.',
			'Egm' => 'EGM',
			'Jfk' => 'JFK',
			'Hdy' => 'HDY',
			'Vat' => 'VAT',
		);

		return strtr($title, $replacements);
	}

	private static function slugWordsToSpaces($value) {
		$value = preg_replace('/\s+/u', ' ', trim((string)$value));
		return $value;
	}

	private static function slugifyAscii($value) {
		$value = self::lower($value);
		$value = preg_replace('/\x{0307}/u', '', $value);
		$value = strtr($value, array('ı' => 'i', 'ğ' => 'g', 'ü' => 'u', 'ş' => 's', 'ö' => 'o', 'ç' => 'c', 'İ' => 'i'));
		$value = preg_replace('/[^a-z0-9]+/u', '-', $value);
		return trim((string)$value, '-');
	}

	private static function lower($value) {
		$value = trim((string)$value);
		if (function_exists('mb_strtolower')) {
			return mb_strtolower($value, 'UTF-8');
		}
		return strtolower($value);
	}

	private static function containsAny($value, array $needles) {
		foreach ($needles as $needle) {
			if ($needle !== '' && strpos($value, $needle) !== false) {
				return true;
			}
		}
		return false;
	}

	private static function escape($value) {
		return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
	}

	private static function defaultImage() {
		return 'https://api.goarac.com/image/catalog/arac-kira/go-arac-az-ode.png';
	}

	private static function landingDefinitions() {
		$image = self::defaultImage();
		$airportImage = self::defaultImage();

		return array(
			array('group' => 'car-rental', 'tr_slug' => 'arac-kiralama', 'en_slug' => 'car-rental', 'tr_title' => 'Araç Kiralama', 'en_title' => 'Car Rental', 'tr_keyword' => 'araç kiralama', 'en_keyword' => 'car rental', 'tr_keywords' => array('araç kiralama', 'araba kiralama Türkiye', 'online araç kiralama', 'rent a car'), 'en_keywords' => array('car rental', 'rent a car Turkey', 'online car rental'), 'priority' => '1.00', 'sort_order' => 300, 'image' => $image),
			array('group' => 'affordable-car-rental', 'tr_slug' => 'en-uygun-arac-kiralama', 'en_slug' => 'affordable-car-rental', 'tr_title' => 'En Uygun Araç Kiralama', 'en_title' => 'Affordable Car Rental', 'tr_keyword' => 'en uygun araç kiralama', 'en_keyword' => 'affordable car rental', 'tr_keywords' => array('en uygun araç kiralama', 'araç kiralama en uygun', 'uygun araç kiralama fiyatları'), 'priority' => '0.95', 'sort_order' => 310, 'image' => $image),
			array('group' => 'airport-car-rental', 'tr_slug' => 'havalimani-arac-kiralama', 'en_slug' => 'airport-car-rental', 'tr_title' => 'Havalimanı Araç Kiralama', 'en_title' => 'Airport Car Rental', 'tr_keyword' => 'havalimanı araç kiralama', 'en_keyword' => 'airport car rental', 'tr_keywords' => array('havalimanı araç kiralama', 'havalimanı araç kiralama istanbul', 'havalimanı araç kiralama antalya'), 'priority' => '0.92', 'sort_order' => 320, 'image' => $airportImage),
			array('group' => 'istanbul-car-rental', 'tr_slug' => 'istanbul-arac-kiralama', 'en_slug' => 'istanbul-car-rental', 'tr_title' => 'İstanbul Araç Kiralama', 'en_title' => 'Istanbul Car Rental', 'tr_location' => 'İstanbul', 'en_location' => 'Istanbul', 'tr_keyword' => 'İstanbul araç kiralama', 'en_keyword' => 'Istanbul car rental', 'tr_keywords' => array('araç kiralama istanbul', 'istanbul araç kiralama', 'araç kiralama istanbul fiyat'), 'search_location' => 'Istanbul Airport', 'priority' => '0.95', 'sort_order' => 330, 'image' => $airportImage),
			array('group' => 'istanbul-airport-car-rental', 'tr_slug' => 'istanbul-havalimani-arac-kiralama', 'en_slug' => 'istanbul-airport-car-rental', 'tr_title' => 'İstanbul Havalimanı Araç Kiralama', 'en_title' => 'Istanbul Airport Car Rental', 'tr_location' => 'İstanbul Havalimanı', 'en_location' => 'Istanbul Airport', 'tr_keywords' => array('araç kiralama istanbul havalimanı', 'istanbul havalimanı araç kiralama', 'havalimanı araç kiralama istanbul'), 'search_location' => 'Istanbul Airport', 'priority' => '0.95', 'sort_order' => 340, 'image' => $airportImage),
			array('group' => 'sabiha-gokcen-car-rental', 'tr_slug' => 'sabiha-gokcen-arac-kiralama', 'en_slug' => 'sabiha-gokcen-car-rental', 'tr_title' => 'Sabiha Gökçen Araç Kiralama', 'en_title' => 'Sabiha Gokcen Car Rental', 'tr_location' => 'Sabiha Gökçen Havalimanı', 'en_location' => 'Sabiha Gokcen Airport', 'tr_keywords' => array('havalimanı araç kiralama sabiha gökçen', 'sabiha gökçen araç kiralama'), 'search_location' => 'Sabiha Gökçen International Airport', 'priority' => '0.94', 'sort_order' => 350, 'image' => $airportImage),
			array('group' => 'ankara-car-rental', 'tr_slug' => 'ankara-arac-kiralama', 'en_slug' => 'ankara-car-rental', 'tr_title' => 'Ankara Araç Kiralama', 'en_title' => 'Ankara Car Rental', 'tr_location' => 'Ankara', 'en_location' => 'Ankara', 'tr_keywords' => array('ankara araç kiralama', 'araç kiralama ankara', 'havalimanı araç kiralama ankara'), 'search_location' => 'Ankara Esenboğa Airport', 'priority' => '0.88', 'sort_order' => 360, 'image' => $airportImage),
			array('group' => 'antalya-car-rental', 'tr_slug' => 'antalya-arac-kiralama', 'en_slug' => 'antalya-car-rental', 'tr_title' => 'Antalya Araç Kiralama', 'en_title' => 'Antalya Car Rental', 'tr_location' => 'Antalya', 'en_location' => 'Antalya', 'tr_keywords' => array('antalya araç kiralama', 'araç kiralama antalya', 'antalya havalimanı araç kiralama'), 'search_location' => 'Antalya Airport', 'priority' => '0.90', 'sort_order' => 370, 'image' => $airportImage),
			array('group' => 'izmir-car-rental', 'tr_slug' => 'izmir-arac-kiralama', 'en_slug' => 'izmir-car-rental', 'tr_title' => 'İzmir Araç Kiralama', 'en_title' => 'Izmir Car Rental', 'tr_location' => 'İzmir', 'en_location' => 'Izmir', 'tr_keywords' => array('izmir araç kiralama', 'araç kiralama izmir', 'izmir havalimanı araç kiralama'), 'search_location' => 'Izmir Adnan Menderes Airport', 'priority' => '0.88', 'sort_order' => 380, 'image' => $airportImage),
			array('group' => 'adana-car-rental', 'tr_slug' => 'adana-arac-kiralama', 'en_slug' => 'adana-car-rental', 'tr_title' => 'Adana Araç Kiralama', 'en_title' => 'Adana Car Rental', 'tr_location' => 'Adana', 'en_location' => 'Adana', 'tr_keywords' => array('adana araç kiralama', 'araç kiralama adana', 'adana havalimanı araç kiralama'), 'search_location' => 'Adana', 'priority' => '0.82', 'sort_order' => 390, 'image' => $airportImage),
			array('group' => 'bodrum-car-rental', 'tr_slug' => 'bodrum-arac-kiralama', 'en_slug' => 'bodrum-car-rental', 'tr_title' => 'Bodrum Araç Kiralama', 'en_title' => 'Bodrum Car Rental', 'tr_location' => 'Bodrum', 'en_location' => 'Bodrum', 'tr_keywords' => array('bodrum araç kiralama', 'bodrum havalimanı araç kiralama'), 'search_location' => 'Bodrum Milas Airport', 'priority' => '0.82', 'sort_order' => 400, 'image' => $airportImage),
			array('group' => 'dalaman-car-rental', 'tr_slug' => 'dalaman-arac-kiralama', 'en_slug' => 'dalaman-car-rental', 'tr_title' => 'Dalaman Araç Kiralama', 'en_title' => 'Dalaman Car Rental', 'tr_location' => 'Dalaman', 'en_location' => 'Dalaman', 'tr_keywords' => array('dalaman araç kiralama', 'dalaman havalimanı araç kiralama'), 'search_location' => 'Dalaman Airport', 'priority' => '0.82', 'sort_order' => 410, 'image' => $airportImage),
			array('group' => 'monthly-car-rental', 'tr_slug' => 'aylik-arac-kiralama', 'en_slug' => 'monthly-car-rental', 'tr_title' => 'Aylık Araç Kiralama', 'en_title' => 'Monthly Car Rental', 'tr_keyword' => 'aylık araç kiralama', 'en_keyword' => 'monthly car rental', 'tr_keywords' => array('araç kiralama aylık', 'aylık araç kiralama', 'aylık araç kiralama fiyatları'), 'priority' => '0.86', 'sort_order' => 420, 'image' => $image),
			array('group' => 'luxury-car-rental', 'tr_slug' => 'luks-arac-kiralama', 'en_slug' => 'luxury-car-rental', 'tr_title' => 'Lüks Araç Kiralama', 'en_title' => 'Luxury Car Rental', 'tr_keyword' => 'lüks araç kiralama', 'en_keyword' => 'luxury car rental', 'tr_keywords' => array('araç kiralama lüks', 'lüks araç kiralama', 'lüks araç kiralama istanbul'), 'priority' => '0.84', 'sort_order' => 430, 'image' => $image),
			array('group' => 'economy-car-rental', 'tr_slug' => 'ekonomik-arac-kiralama', 'en_slug' => 'economy-car-rental', 'tr_title' => 'Ekonomik Araç Kiralama', 'en_title' => 'Economy Car Rental', 'tr_keyword' => 'ekonomik araç kiralama', 'en_keyword' => 'economy car rental', 'tr_keywords' => array('ekonomik araç kiralama', 'günlük araç kiralama uygun', 'uygun araç kiralama şirketleri'), 'priority' => '0.84', 'sort_order' => 440, 'image' => $image),
			array('group' => 'avis-car-rental', 'tr_slug' => 'avis-arac-kiralama', 'en_slug' => 'avis-car-rental', 'tr_title' => 'Avis Araç Kiralama', 'en_title' => 'Avis Car Rental', 'tr_keyword' => 'Avis araç kiralama', 'en_keyword' => 'Avis car rental', 'tr_keywords' => array('avis araç kiralama', 'araç kiralama avis', 'araç kiralama avis fiyat'), 'priority' => '0.78', 'sort_order' => 450, 'image' => $image),
			array('group' => 'garenta-car-rental', 'tr_slug' => 'garenta-arac-kiralama', 'en_slug' => 'garenta-car-rental', 'tr_title' => 'Garenta Araç Kiralama', 'en_title' => 'Garenta Car Rental', 'tr_keyword' => 'Garenta araç kiralama', 'en_keyword' => 'Garenta car rental', 'tr_keywords' => array('garenta araç kiralama', 'araç kiralama garenta'), 'priority' => '0.78', 'sort_order' => 460, 'image' => $image),
			array('group' => 'sixt-car-rental', 'tr_slug' => 'sixt-arac-kiralama', 'en_slug' => 'sixt-car-rental', 'tr_title' => 'Sixt Araç Kiralama', 'en_title' => 'Sixt Car Rental', 'tr_keyword' => 'Sixt araç kiralama', 'en_keyword' => 'Sixt car rental', 'tr_keywords' => array('sixt araç kiralama', 'araç kiralama sixt'), 'priority' => '0.76', 'sort_order' => 470, 'image' => $image),
			array('group' => 'enterprise-car-rental', 'tr_slug' => 'enterprise-arac-kiralama', 'en_slug' => 'enterprise-car-rental', 'tr_title' => 'Enterprise Araç Kiralama', 'en_title' => 'Enterprise Car Rental', 'tr_keyword' => 'Enterprise araç kiralama', 'en_keyword' => 'Enterprise car rental', 'tr_keywords' => array('enterprise araç kiralama', 'araç kiralama enterprise'), 'priority' => '0.76', 'sort_order' => 480, 'image' => $image),
			array('group' => 'budget-car-rental', 'tr_slug' => 'budget-arac-kiralama', 'en_slug' => 'budget-car-rental', 'tr_title' => 'Budget Araç Kiralama', 'en_title' => 'Budget Car Rental', 'tr_keyword' => 'Budget araç kiralama', 'en_keyword' => 'Budget car rental', 'tr_keywords' => array('araç kiralama budget', 'budget araç kiralama'), 'priority' => '0.76', 'sort_order' => 490, 'image' => $image),
		);
	}

	private static function locationLandingDefinitions() {
		$locations = array(
			array('city_tr' => 'Türkiye', 'city_en' => 'Turkey', 'place_tr' => 'Türkiye', 'place_en' => 'Turkey', 'search' => 'Istanbul Airport', 'country' => 'TR', 'type' => 'country', 'priority' => '0.94'),
			array('city_tr' => 'Kıbrıs', 'city_en' => 'Cyprus', 'place_tr' => 'Kıbrıs', 'place_en' => 'Cyprus', 'search' => 'Ercan Airport', 'country' => 'CY', 'type' => 'country', 'priority' => '0.78'),
			array('city_tr' => 'Ankara', 'city_en' => 'Ankara', 'place_tr' => 'Ankara Esenboğa Havalimanı', 'place_en' => 'Ankara Esenboga Airport', 'search' => 'Ankara Esenboğa Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.86'),
			array('city_tr' => 'Antalya', 'city_en' => 'Antalya', 'place_tr' => 'Antalya Havalimanı', 'place_en' => 'Antalya Airport', 'search' => 'Antalya Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.88'),
			array('city_tr' => 'İzmir', 'city_en' => 'Izmir', 'place_tr' => 'İzmir Adnan Menderes Havalimanı', 'place_en' => 'Izmir Adnan Menderes Airport', 'search' => 'Izmir Adnan Menderes Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.86'),
			array('city_tr' => 'Adana', 'city_en' => 'Adana', 'place_tr' => 'Çukurova Havalimanı', 'place_en' => 'Cukurova Airport', 'search' => 'Çukurova International Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.82'),
			array('city_tr' => 'Bodrum', 'city_en' => 'Bodrum', 'place_tr' => 'Milas Bodrum Havalimanı', 'place_en' => 'Milas Bodrum Airport', 'search' => 'Bodrum Milas Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.82'),
			array('city_tr' => 'Dalaman', 'city_en' => 'Dalaman', 'place_tr' => 'Dalaman Havalimanı', 'place_en' => 'Dalaman Airport', 'search' => 'Dalaman Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.82'),
			array('city_tr' => 'Trabzon', 'city_en' => 'Trabzon', 'place_tr' => 'Trabzon Havalimanı', 'place_en' => 'Trabzon Airport', 'search' => 'Trabzon Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.76'),
			array('city_tr' => 'Gaziantep', 'city_en' => 'Gaziantep', 'place_tr' => 'Gaziantep Havalimanı', 'place_en' => 'Gaziantep Airport', 'search' => 'Gaziantep Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.76'),
			array('city_tr' => 'Diyarbakır', 'city_en' => 'Diyarbakir', 'place_tr' => 'Diyarbakır Havalimanı', 'place_en' => 'Diyarbakir Airport', 'search' => 'Diyarbakır Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.74'),
			array('city_tr' => 'Kayseri', 'city_en' => 'Kayseri', 'place_tr' => 'Kayseri Havalimanı', 'place_en' => 'Kayseri Airport', 'search' => 'Kayseri Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.74'),
			array('city_tr' => 'Konya', 'city_en' => 'Konya', 'place_tr' => 'Konya Havalimanı', 'place_en' => 'Konya Airport', 'search' => 'Konya Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.72'),
			array('city_tr' => 'Erzurum', 'city_en' => 'Erzurum', 'place_tr' => 'Erzurum Havalimanı', 'place_en' => 'Erzurum Airport', 'search' => 'Erzurum Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.72'),
			array('city_tr' => 'Elazığ', 'city_en' => 'Elazig', 'place_tr' => 'Elazığ Havalimanı', 'place_en' => 'Elazig Airport', 'search' => 'Elazığ Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.72'),
			array('city_tr' => 'Hatay', 'city_en' => 'Hatay', 'place_tr' => 'Hatay Havalimanı', 'place_en' => 'Hatay Airport', 'search' => 'Hatay Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.70'),
			array('city_tr' => 'Iğdır', 'city_en' => 'Igdir', 'place_tr' => 'Iğdır Havalimanı', 'place_en' => 'Igdir Airport', 'search' => 'Iğdır Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.70'),
			array('city_tr' => 'Isparta', 'city_en' => 'Isparta', 'place_tr' => 'Isparta Süleyman Demirel Havalimanı', 'place_en' => 'Isparta Suleyman Demirel Airport', 'search' => 'Isparta Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.70'),
			array('city_tr' => 'Mardin', 'city_en' => 'Mardin', 'place_tr' => 'Mardin Havalimanı', 'place_en' => 'Mardin Airport', 'search' => 'Mardin Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.70'),
			array('city_tr' => 'Batman', 'city_en' => 'Batman', 'place_tr' => 'Batman Havalimanı', 'place_en' => 'Batman Airport', 'search' => 'Batman Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.68'),
			array('city_tr' => 'Kars', 'city_en' => 'Kars', 'place_tr' => 'Kars Harakani Havalimanı', 'place_en' => 'Kars Harakani Airport', 'search' => 'Kars Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.68'),
			array('city_tr' => 'Samsun', 'city_en' => 'Samsun', 'place_tr' => 'Samsun Çarşamba Havalimanı', 'place_en' => 'Samsun Carsamba Airport', 'search' => 'Samsun Çarşamba Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.68'),
			array('city_tr' => 'Ordu Giresun', 'city_en' => 'Ordu Giresun', 'place_tr' => 'Ordu Giresun Havalimanı', 'place_en' => 'Ordu Giresun Airport', 'search' => 'Ordu Giresun Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.68'),
			array('city_tr' => 'Van', 'city_en' => 'Van', 'place_tr' => 'Van Ferit Melen Havalimanı', 'place_en' => 'Van Ferit Melen Airport', 'search' => 'Van Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.68'),
			array('city_tr' => 'Nevşehir', 'city_en' => 'Nevsehir', 'place_tr' => 'Nevşehir Kapadokya Havalimanı', 'place_en' => 'Nevsehir Kapadokya Airport', 'search' => 'Nevşehir Kapadokya Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.68'),
			array('city_tr' => 'Denizli', 'city_en' => 'Denizli', 'place_tr' => 'Denizli Çardak Havalimanı', 'place_en' => 'Denizli Cardak Airport', 'search' => 'Denizli Çardak Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.68'),
			array('city_tr' => 'Tekirdağ', 'city_en' => 'Tekirdag', 'place_tr' => 'Tekirdağ Çorlu Havalimanı', 'place_en' => 'Tekirdag Corlu Airport', 'search' => 'Tekirdağ Çorlu Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.66'),
			array('city_tr' => 'Çanakkale', 'city_en' => 'Canakkale', 'place_tr' => 'Çanakkale Havalimanı', 'place_en' => 'Canakkale Airport', 'search' => 'Çanakkale Airport', 'country' => 'TR', 'type' => 'airport', 'priority' => '0.66'),
			array('city_tr' => 'Lefkoşa', 'city_en' => 'Nicosia', 'place_tr' => 'Ercan Havalimanı', 'place_en' => 'Ercan Airport', 'search' => 'Ercan Airport', 'country' => 'CY', 'type' => 'airport', 'priority' => '0.72'),
			array('city_tr' => 'Bursa', 'city_en' => 'Bursa', 'place_tr' => 'Bursa', 'place_en' => 'Bursa', 'search' => 'Bursa', 'country' => 'TR', 'type' => 'city', 'priority' => '0.70'),
			array('city_tr' => 'Eskişehir', 'city_en' => 'Eskisehir', 'place_tr' => 'Eskişehir', 'place_en' => 'Eskisehir', 'search' => 'Eskişehir', 'country' => 'TR', 'type' => 'city', 'priority' => '0.68'),
			array('city_tr' => 'Mersin', 'city_en' => 'Mersin', 'place_tr' => 'Mersin', 'place_en' => 'Mersin', 'search' => 'Mersin', 'country' => 'TR', 'type' => 'city', 'priority' => '0.68'),
			array('city_tr' => 'Fethiye', 'city_en' => 'Fethiye', 'place_tr' => 'Fethiye', 'place_en' => 'Fethiye', 'search' => 'Fethiye', 'country' => 'TR', 'type' => 'city', 'priority' => '0.68'),
		);

		$definitions = array();
		$sort = 520;
		foreach ($locations as $location) {
			$isAirport = ($location['type'] ?? 'city') === 'airport';
			$isCountry = ($location['type'] ?? 'city') === 'country';
			$trPlace = $location['place_tr'];
			$enPlace = $location['place_en'];
			$trSlugBase = self::slugifyAscii($trPlace);
			$enSlugBase = self::slugifyAscii($enPlace);
			$trTitle = $trPlace . ' Araç Kiralama';
			$enTitle = $enPlace . ' Car Rental';

			$definitions[] = array(
				'group' => 'location-' . $enSlugBase . '-car-rental',
				'type' => 'seo_landing',
				'intent' => $isAirport ? 'airport' : 'location',
				'source_pattern' => $isAirport ? 'location_airport' : ($isCountry ? 'location_country' : 'location_city'),
				'tr_slug' => $trSlugBase . '-arac-kiralama',
				'en_slug' => $enSlugBase . '-car-rental',
				'tr_title' => $trTitle,
				'en_title' => $enTitle,
				'tr_location' => $trPlace,
				'en_location' => $enPlace,
				'tr_keyword' => self::lower($trTitle),
				'en_keyword' => self::lower($enTitle),
				'tr_keywords' => array(self::lower($trTitle), self::lower($location['city_tr'] . ' araç kiralama')),
				'en_keywords' => array(self::lower($enTitle), self::lower($location['city_en'] . ' car rental')),
				'search_location' => $location['search'],
				'location_country' => $location['country'] ?? '',
				'location_city' => $location['city_tr'] ?? '',
				'location_airport' => $isAirport ? $trPlace : '',
				'priority' => $location['priority'] ?? '0.68',
				'changefreq' => 'weekly',
				'sort_order' => $sort++,
				'image' => self::defaultImage(),
			);
		}

		return $definitions;
	}
}
