
<?php
// Heading
$_['heading_title'] = 'Yolcu Provider 1';

// Text
$_['text_extension'] = 'Extensions';
$_['text_success'] = 'Success: You have modified Yolcu Provider 1 settings!';
$_['text_edit'] = 'Edit Yolcu Provider 1 Module';
$_['text_enabled'] = 'Enabled';
$_['text_disabled'] = 'Disabled';
$_['text_percentage'] = 'Percentage';
$_['text_fixed'] = 'Fixed';
$_['text_yolcu_search_rules'] = 'Yolcu Search Request Rules';
$_['text_site_content'] = 'Website Content Settings';
$_['text_site_content_json_hint'] = 'Optional JSON overrides for homepage, footer, SEO, blog posts, campaign pages, legal pages, and contact/about content. Leave empty to use the database defaults created by the Go Araç content API.';

// Entry
$_['entry_status'] = 'Status';
$_['entry_api_url'] = 'API Base URL';
$_['entry_api_key'] = 'API Key';
$_['entry_api_secret'] = 'API Secret';
$_['entry_default_currency'] = 'Default Currency';
$_['entry_default_language'] = 'Default Language';
$_['entry_search_commission_status'] = 'Send Commission to Yolcu';
$_['entry_commission_type'] = 'Commission Type';
$_['entry_commission_percentage'] = 'Commission Percentage';
$_['entry_commission_fixed_amount'] = 'Commission Fixed Amount';
$_['entry_campaign_code_status'] = 'Send Campaign Code';
$_['entry_campaign_code'] = 'Campaign Code';
$_['entry_payment_type'] = 'Payment Type';
$_['entry_full_credit'] = 'Full Credit';
$_['entry_limited_credit'] = 'Limited Credit';
$_['entry_site_content_json'] = 'Site Content JSON';

$_['entry_endpoint_auth_login'] = 'Auth Login Endpoint';
$_['entry_endpoint_auth_refresh'] = 'Auth Refresh Endpoint';
$_['entry_endpoint_locations'] = 'Locations Endpoint';
$_['entry_endpoint_search'] = 'Search Endpoint';
$_['entry_endpoint_orders'] = 'Orders Endpoint';
$_['entry_endpoint_payment_process'] = 'Payment Process Endpoint';
$_['entry_endpoint_payment_3d_secure_callback'] = 'Payment 3DS Callback Endpoint';
$_['entry_endpoint_helper_car_classes'] = 'Helper Car Classes Endpoint';
$_['entry_endpoint_helper_fuel_types'] = 'Helper Fuel Types Endpoint';
$_['entry_endpoint_helper_transmission_types'] = 'Helper Transmission Types Endpoint';
$_['entry_endpoint_helper_delivery_types'] = 'Helper Delivery Types Endpoint';
$_['entry_endpoint_helper_extra_products'] = 'Helper Extra Products Endpoint';
$_['entry_endpoint_helper_suppliers'] = 'Helper Suppliers Endpoint';

// Help
$_['help_api_url'] = 'Base URL for Yolcu360 API (without trailing slash).';
$_['help_yolcu_search_rules'] = 'These values are injected by the backend into Yolcu vehicle search requests. Browser/mobile request values are ignored for security.';
$_['help_search_commission_status'] = 'When enabled, the backend sends a trusted commission object to Yolcu. Default is percentage 0.';
$_['help_commission_type'] = 'Select percentage or fixed commission.';
$_['help_campaign_code_status'] = 'Enable only when a Yolcu campaign code should be sent with every vehicle search.';
$_['help_campaign_code'] = 'Optional Yolcu campaign code. It is sent only when Send Campaign Code is enabled.';
$_['help_payment_type'] = 'Use "limit" or "creditCard" based on Yolcu360 rules.';
$_['help_site_content_json'] = 'The frontend reads editable content from car_rental/content and car_rental/content/settings. Use this JSON only for quick admin overrides; regular rows are stored in goarac_site_page and goarac_site_setting.';

// Error
$_['error_permission'] = 'Warning: You do not have permission to modify Yolcu Provider 1!';

