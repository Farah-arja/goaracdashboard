<?php

class Provider2YolcuProvider2Config
{
    protected $config;

    public function __construct($registry)
    {
        $this->config = $registry->get('config');
    }

    public function getValue($key)
    {
        $value = $this->config->get($key);

        if ($value === null) {
            return '';
        }

        return $value;
    }

    public function hasValue($key)
    {
        $value = $this->config->get($key);

        return $value !== null && $value !== '';
    }

    public function apiUrl()
    {
        return rtrim(
            (string)$this->getValue('module_yolcu_provider2_api_url'),
            '/'
        );
    }

    public function apiKey()
    {
        return trim(
            (string)$this->getValue('module_yolcu_provider2_api_key')
        );
    }

    public function apiSecret()
    {
        return trim(
            (string)$this->getValue('module_yolcu_provider2_api_secret')
        );
    }

    public function endpointAuthLogin()
    {
        return $this->getValue(
            'module_yolcu_provider2_endpoint_auth_login'
        );
    }

    public function endpointAuthRefresh()
    {
        return $this->getValue(
            'module_yolcu_provider2_endpoint_auth_refresh'
        );
    }

    public function endpointLocations()
    {
        return $this->getValue(
            'module_yolcu_provider2_endpoint_locations'
        );
    }

    public function endpointSearch()
    {
        return $this->getValue(
            'module_yolcu_provider2_endpoint_search'
        );
    }

    public function endpointOrders()
    {
        return $this->getValue(
            'module_yolcu_provider2_endpoint_orders'
        );
    }

    public function endpointPaymentProcess()
    {
        return $this->getValue(
            'module_yolcu_provider2_endpoint_payment_process'
        );
    }

    public function endpointPayment3dsCallback()
    {
        return $this->getValue(
            'module_yolcu_provider2_endpoint_payment_3d_secure_callback'
        );
    }

    public function endpointHelperCarClasses()
    {
        return $this->getValue(
            'module_yolcu_provider2_endpoint_helper_car_classes'
        );
    }

    public function endpointHelperFuelTypes()
    {
        return $this->getValue(
            'module_yolcu_provider2_endpoint_helper_fuel_types'
        );
    }

    public function endpointHelperTransmissionTypes()
    {
        return $this->getValue(
            'module_yolcu_provider2_endpoint_helper_transmission_types'
        );
    }

    public function endpointHelperDeliveryTypes()
    {
        return $this->getValue(
            'module_yolcu_provider2_endpoint_helper_delivery_types'
        );
    }

    public function endpointHelperExtraProducts()
    {
        return $this->getValue(
            'module_yolcu_provider2_endpoint_helper_extra_products'
        );
    }

    public function endpointHelperSuppliers()
    {
        return $this->getValue(
            'module_yolcu_provider2_endpoint_helper_suppliers'
        );
    }

    public function defaultCurrency()
    {
        return $this->getValue(
            'module_yolcu_provider2_default_currency'
        );
    }

    public function defaultLanguage()
    {
        return $this->getValue(
            'module_yolcu_provider2_default_language'
        );
    }

    public function resolveLanguage($requested = '')
    {
        $requested = strtolower(trim((string)$requested));

        if ($requested === '') {
            return '';
        }

        $requested = str_replace('_', '-', $requested);

        if (strpos($requested, 'tr') === 0) {
            return 'tr';
        }

        if (strpos($requested, 'en') === 0) {
            return 'en';
        }

        return $requested;
    }

    public function commissionType()
    {
        return $this->getValue(
            'module_yolcu_provider2_commission_type'
        );
    }

    public function commissionPercentage()
    {
        return (float)$this->getValue(
            'module_yolcu_provider2_commission_percentage'
        );
    }

    public function commissionFixedAmount()
    {
        return (float)$this->getValue(
            'module_yolcu_provider2_commission_fixed_amount'
        );
    }

    public function searchCommissionEnabled()
    {
        return $this->boolValue(
            'module_yolcu_provider2_search_commission_status'
        );
    }

    public function searchCommission($currency = '')
    {
        if (!$this->searchCommissionEnabled()) {
            return null;
        }

        $currency = strtoupper(trim((string)$currency));

        if ($currency === '') {
            $currency = strtoupper(
                trim((string)$this->defaultCurrency())
            );
        }

        $type = (string)$this->commissionType();

        if ($type === 'fixed') {
            return array(
                'type' => 'fixed',
                'fixed' => array(
                    'amount' => max(
                        0,
                        $this->commissionFixedAmount()
                    ),
                    'currency' => $currency
                )
            );
        }

        return array(
            'type' => 'percentage',
            'percentage' => min(
                100,
                max(
                    0,
                    $this->commissionPercentage()
                )
            )
        );
    }

    public function campaignCodeEnabled()
    {
        return $this->boolValue(
            'module_yolcu_provider2_campaign_code_status'
        );
    }

    public function campaignCode()
    {
        return trim(
            (string)$this->getValue(
                'module_yolcu_provider2_campaign_code'
            )
        );
    }

    public function paymentType()
    {
        return $this->getValue(
            'module_yolcu_provider2_api_payment_type'
        );
    }

    public function isFullCredit()
    {
        return $this->boolValue(
            'module_yolcu_provider2_api_payment_is_full_credit'
        );
    }

    public function isLimitedCredit()
    {
        return $this->boolValue(
            'module_yolcu_provider2_api_payment_is_limited_credit'
        );
    }
    public function isEnabled()
    {
    return $this->boolValue(
        'module_yolcu_provider2_status'
    );
    }

    protected function boolValue($key)
    {
        $value = $this->config->get($key);

        if ($value === null || $value === '') {
            return false;
        }

        return (bool)(int)$value;
    }
}