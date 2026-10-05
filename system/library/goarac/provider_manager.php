<?php

class GoaracProviderManager
{
    protected $registry;

    protected $providers = array();

    public function __construct($registry)
    {
        $this->registry = $registry;

        $this->loadProviders();
    }

    /**
     * Load all installed and enabled providers.
     */
    protected function loadProviders()
    {
        $providerCodes = $this->getInstalledProviderCodes();

        foreach ($providerCodes as $providerCode) {
            $provider = $this->createProvider($providerCode);

            if (!$provider) {
                continue;
            }

            if (!$provider->isEnabled()) {
                continue;
            }

            $this->providers[$providerCode] = $provider;
        }
    }

    /**
     * Get installed provider codes from the provider registry.
     *
     * Example:
     * system/library/provider/yolcu_provider1/provider.php
     * system/library/provider/yolcu_provider2/provider.php
     * system/library/provider/rental/provider.php
     */
    protected function getInstalledProviderCodes()
    {
        $codes = array();

        $files = glob(
            DIR_SYSTEM . 'library/provider/*/provider.php'
        );

        if (!$files) {
            return $codes;
        }

        foreach ($files as $file) {
            $providerCode = basename(
                dirname($file)
            );

            if ($providerCode === '') {
                continue;
            }

            $codes[] = $providerCode;
        }

        return array_values(
            array_unique($codes)
        );
    }

    /**
     * Create provider object from its registry file.
     */
    protected function createProvider($providerCode)
    {
        $providerFile = DIR_SYSTEM
            . 'library/provider/'
            . $providerCode
            . '/provider.php';

        if (!is_file($providerFile)) {
            return null;
        }

        $registry = $this->registry;

        $provider = require $providerFile;

        if (!is_object($provider)) {
            return null;
        }

        if (!method_exists($provider, 'getCode')) {
            return null;
        }

        if (!method_exists($provider, 'isEnabled')) {
            return null;
        }

        if (!method_exists($provider, 'search')) {
            return null;
        }

        if (!method_exists($provider, 'getVehicleExtraProducts')) {
            return null;
        }

        return $provider;
    }

    /**
     * Return all enabled providers.
     */
    public function getEnabledProviders()
    {
        return array_values(
            $this->providers
        );
    }

    /**
     * Return one provider by code.
     */
    public function getProvider($providerCode)
    {
        if (!isset($this->providers[$providerCode])) {
            return null;
        }

        return $this->providers[$providerCode];
    }

    /**
     * Check whether a provider is loaded.
     */
    public function hasProvider($providerCode)
    {
        return isset(
            $this->providers[$providerCode]
        );
    }
}