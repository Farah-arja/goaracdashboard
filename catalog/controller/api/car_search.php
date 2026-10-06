<?php

class ControllerApiCarSearch extends Controller
{
    private $ttl = 900;
     public function index()
    {
        // Read JSON body
        $body = json_decode(file_get_contents('php://input'), true );

        if (!is_array($body) || empty($body)) {
        $this->jsonResponse(0, ['Invalid or empty JSON request']);
        return;
        }

       // API authentication

       require_once DIR_SYSTEM . 'library/goarac/api_access.php';
       $apiAccess = new GoaracApiAccess($this->registry);
       $apiAccessRecord = $apiAccess->authenticate();
       if (!$apiAccessRecord) {
       $this->jsonResponse(0, ['Invalid or missing API key']);
       return;
       }

        // Provider Manager
        require_once DIR_SYSTEM . 'library/goarac/provider_manager.php';
        
        $providerManager = new GoaracProviderManager( $this->registry);

// currency
$targetCurrency   = $this->resolveTargetCurrency($body);
$providerCurrency = 'TRY';

// Search all enabled providers
$allCars = array();

$providers = $providerManager->getEnabledProviders();

foreach ($providers as $provider) {
    try {
        $result = $provider->search($body);

        if (!is_array($result) || empty($result['success'])) {
            $this->log->write(
                '[CarSearch] Provider failed: '
                . $provider->getCode()
                . ' - '
                . json_encode(
                    is_array($result)
                        ? ($result['error'] ?? 'unknown')
                        : 'invalid response'
                )
            );

            continue;
        }

        $data = $this->getProviderData($result);

        $cars = (
            isset($data['results']) &&
            is_array($data['results'])
        ) ? $data['results'] : [];

        $cars = $this->attachProvider(
            $cars,
            $provider->getCode()
        );

        $allCars = array_merge(
            $allCars,
            $cars
        );

    } catch (\Throwable $e) {
        $this->log->write(
            '[CarSearch] Provider failed: '
            . $provider->getCode()
            . ' - '
            . $e->getMessage()
        );

        continue;
    }
}

$mergedCars = $this->mergeCars(
    $allCars,
    array(),
    $providerCurrency
);

        // time for quote
        $quoteCreatedAt = date('c');
        $quoteExpiresAt = date(
            'c',
            time() + (int)$this->ttl
        );

        // finalize the car
        $this->finalizeMergedCars(
            $mergedCars,
            $providerCurrency,
            $targetCurrency,
            $quoteCreatedAt,
            $quoteExpiresAt
        );

        $responseResults = [];

        foreach ($mergedCars as $car) {
            $responseResults[] = $this->cleanVehicleData($car);
        }

        // Pagination
        $total = count($responseResults);

        $limit = $total > 0
            ? $total
            : 1;

        $totalPages = 1;

        // response
        $responseData = [
            'page'              => 1,
            'limit'             => $limit,
            'total'             => $total,
            'total_pages'       => $totalPages,
            'quote_created_at'  => $quoteCreatedAt,
            'quote_expires_at'  => $quoteExpiresAt,
            'quote_ttl_seconds' => (int)$this->ttl,
            'currency'          => $targetCurrency,
            'results'           => $responseResults,
        ];

        $this->jsonResponse( 1, [], $responseData );
    }

    //extra products
    public function extraProducts()
    {
        // read the body
        $body = json_decode(file_get_contents('php://input'), true);

        if (!is_array($body)) {
            $body = [];
        }

        // read the car 
        $car = [];

        if (isset($body['car']) && is_array($body['car'])) {
            $car = $body['car'];
        } else {
            $car = $body;
        }

        $provider = strtolower(trim((string)( $car['provider'] ?? $car['_provider'] ?? '' )));

        $searchID = trim((string)( $car['searchID'] ?? $car['search_id'] ?? '' ));

        $code = trim((string)( $car['code'] ?? $car['providerCode'] ?? $car['provider_code'] ?? '' ));

       
        if ($provider === '') {
            return $this->jsonResponse( 0, ['provider is required'] );
        }

        if ($searchID === '') {
            return $this->jsonResponse( 0,  ['searchID is required'] );
        }

        if ($code === '') {
            return $this->jsonResponse( 0, ['code is required'] );
        }

        require_once DIR_SYSTEM . 'library/goarac/provider_manager.php';


        $providerManager = new GoaracProviderManager(
    
        $this->registry

        );


        $providerClient = $providerManager->getProvider($provider);


        if (!$providerClient) {
   
        return $this->jsonResponse(
        0,
        ['Invalid or disabled provider']
    );
}

        // language
        $language = $this->resolveRequestLanguage($body);

        // Call the selected provider dynamically

        $result = $providerClient->getVehicleExtraProducts( $searchID, $code, $language);

        // Verifying the result
        if (!is_array($result)) {
            return $this->jsonResponse( 0, ['Invalid provider response'] );
        }

        if (empty($result['success'])) {
            return $this->jsonResponse( 0,
                [
                    $result['error']
                    ?? 'Unable to load extra products'
                ]
            );
        }

        // Data extraction
        $data = $this->getProviderData($result);

        $extras = [];

        if (isset($data['results']) && is_array($data['results'])) {
            $extras = $data['results'];
        } elseif (isset($data['extraProducts']) && is_array($data['extraProducts'])) {
            $extras = $data['extraProducts'];
        } elseif (isset($data['extras']) && is_array($data['extras'])) {
            $extras = $data['extras'];
        } elseif (is_array($data) && array_is_list($data)) {
            $extras = $data;
        }

        // Normalize extra products
        $normalizedExtras = [];

        foreach ($extras as $index => $extra) {

            if (!is_array($extra)) {
                continue;
            }

            $extra = $this->normalizeExtraProductMoneyReturn($extra);

            // for id
            $providerExtraCode = (string)(
                $extra['code']
                ?? $extra['id']
                ?? $extra['extraProductCode']
                ?? $index
            );

            $extraProductId = substr( hash( 'sha256', $provider . '|' . $searchID . '|' . $code . '|' . $providerExtraCode),0,24);

            $extra['extraProductId'] = $extraProductId;

            $extra['_provider'] = $provider;
            $extra['_searchID'] = $searchID;
            $extra['_car_code'] = $code;

            $normalizedExtras[] = $extra;
        }

        // Currency
        $currency = $this->resolveTargetCurrency($body);

        if (!empty($normalizedExtras)) {
            $normalizedExtras = $this->convertExtraProductsToCurrentCurrency( $normalizedExtras,$currency );
        }


        $responseExtras = [];

        foreach ($normalizedExtras as $extra) {
            $responseExtras[] = $this->cleanExtraProductData($extra);
        }

        // Response
        return $this->jsonResponse( 1,[],
            [
                'provider'      => $provider,
                'searchID'      => $searchID,
                'code'          => $code,
                'currency'      => $currency,
                'extra_products'=> $responseExtras,
            ]
        );
    }
    public function quote()
{
    // Read the body
    $body = json_decode(file_get_contents('php://input'), true);

    if (!is_array($body)) {
        $body = [];
    }

    // Car
    $vehicle = [];

    if (isset($body['car']) && is_array($body['car'])) {
        $vehicle = $body['car'];
    }

    if (empty($vehicle)) {
        return $this->jsonResponse(
            0,
            ['car is required']
        );
    }

    // Car ID
    $carId = trim((string)(
        $vehicle['carId']
        ?? $body['carId']
        ?? $body['car_id']
        ?? ''
    ));

    if ($carId === '') {
        $carId = $this->buildCarId($vehicle);
    }

    // Quote expiration
    $quoteExpiresAt = trim((string)(
        $vehicle['quote_expires_at']
        ?? $body['quote_expires_at']
        ?? ''
    ));

    if (
        $quoteExpiresAt !== '' &&
        $this->isQuoteExpired($quoteExpiresAt)
    ) {
        return $this->jsonResponse(
            0,
            ['Quote expired. Please refresh search results before payment.']
        );
    }

    // Currency
    $currency = $this->resolveTargetCurrency($body);

    // Provider
    $provider = strtolower(trim((string)(
        $vehicle['provider']
        ?? $vehicle['_provider']
        ?? ''
    )));

    if ($provider === '') {
        return $this->jsonResponse(
            0,
            ['provider is required in car']
        );
    }

    // Standardize vehicle money
    $this->normalizeVehicleMoney(
        $vehicle,
        'TRY'
    );

    $this->applyOfficeInfo($vehicle);
    $this->normalizeVehicleLabels($vehicle);

    // Convert car price to requested currency
    if (!empty($vehicle['price'])) {
        $vehicle = $this->convertVehicleToCurrency(
            $vehicle,
            $currency
        );
    }


    $requestedExtras = (
        isset($body['extraProducts']) &&
        is_array($body['extraProducts'])
    )
        ? $body['extraProducts']
        : [];

    $selectedExtras = [];

    if (!empty($requestedExtras)) {

        
        $providerManager = new GoaracProviderManager(
            $this->registry
        );

        $providerClient = $providerManager->getProvider(
            $provider
        );

        if (!$providerClient) {
            return $this->jsonResponse(
                0,
                ['Invalid or unavailable provider: ' . $provider]
            );
        }

        if (!$providerClient->isEnabled()) {
            return $this->jsonResponse(
                0,
                ['Selected provider is disabled']
            );
        }

        // Search ID
        $searchID = trim((string)(
            $vehicle['searchID']
            ?? $vehicle['search_id']
            ?? ''
        ));

        // Provider vehicle code
        $code = trim((string)(
            $vehicle['code']
            ?? $vehicle['providerCode']
            ?? $vehicle['provider_code']
            ?? ''
        ));

        if ($searchID === '' || $code === '') {
            return $this->jsonResponse(
                0,
                [
                    'searchID and code are required in car to load extra products'
                ]
            );
        }

        $language = $this->resolveRequestLanguage(
            $body
        );

        
        $extraResult = $providerClient->getVehicleExtraProducts(
            $searchID,
            $code,
            $language
        );

        if (
            !is_array($extraResult) ||
            empty($extraResult['success'])
        ) {
            return $this->jsonResponse(
                0,
                [
                    is_array($extraResult)
                        ? (
                            $extraResult['error']
                            ?? 'Unable to refresh extra products'
                        )
                        : 'Unable to refresh extra products'
                ]
            );
        }

        $extraData = $this->getProviderData(
            $extraResult
        );

        $availableExtras = [];

        if (
            isset($extraData['results']) &&
            is_array($extraData['results'])
        ) {
            $availableExtras = $extraData['results'];

        } elseif (
            isset($extraData['extraProducts']) &&
            is_array($extraData['extraProducts'])
        ) {
            $availableExtras = $extraData['extraProducts'];

        } elseif (
            isset($extraData['extras']) &&
            is_array($extraData['extras'])
        ) {
            $availableExtras = $extraData['extras'];

        } elseif (
            is_array($extraData) &&
            array_is_list($extraData)
        ) {
            $availableExtras = $extraData;
        }

        $availableById = [];

        foreach ($availableExtras as $index => $extra) {

            if (!is_array($extra)) {
                continue;
            }

            $extra = $this->normalizeExtraProductMoneyReturn(
                $extra
            );

            $providerExtraCode = (string)(
                $extra['code']
                ?? $extra['id']
                ?? $extra['extraProductCode']
                ?? $index
            );

            $extraProductId = substr(
                hash(
                    'sha256',
                    $provider
                    . '|'
                    . $searchID
                    . '|'
                    . $code
                    . '|'
                    . $providerExtraCode
                ),
                0,
                24
            );

            $extra['extraProductId'] = $extraProductId;

            $availableById[$extraProductId] = $extra;
        }

        // Validate requested extras
        foreach ($requestedExtras as $requestedExtra) {

            if (!is_array($requestedExtra)) {
                continue;
            }

            $requestedId = trim((string)(
                $requestedExtra['extraProductId']
                ?? $requestedExtra['extra_product_id']
                ?? ''
            ));

            if ($requestedId === '') {
                continue;
            }

            if (!isset($availableById[$requestedId])) {
                return $this->jsonResponse(
                    0,
                    [
                        'Extra product not found: '
                        . $requestedId
                    ]
                );
            }

            $selectedExtra = $availableById[$requestedId];

            $selectedExtra['quantity'] = max(
                1,
                (int)(
                    $requestedExtra['quantity']
                    ?? 1
                )
            );

            $selectedExtras[] = $selectedExtra;
        }
    }

    // Convert extras to requested currency
    if (!empty($selectedExtras)) {
        $selectedExtras =
            $this->convertExtraProductsToCurrentCurrency(
                $selectedExtras,
                $currency
            );
    }

    // Clean extras
    $cleanSelectedExtras = [];

    foreach ($selectedExtras as $extra) {
        $cleanSelectedExtras[] =
            $this->cleanExtraProductData(
                $extra
            );
    }

    // Quote timestamps
    $quoteCreatedAt = (string)(
        $vehicle['quote_created_at']
        ?? $body['quote_created_at']
        ?? date('c')
    );

    if ($quoteExpiresAt === '') {
        $quoteExpiresAt = date(
            'c',
            time() + (int)$this->ttl
        );
    }

    // Response
    $responseData = [
        'quote_id' => $carId,

        'carId' => $carId,

        'is_valid' => true,

        'quote_created_at' => $quoteCreatedAt,

        'quote_expires_at' => $quoteExpiresAt,

        'quote_ttl_seconds' => (int)(
            $vehicle['quote_ttl_seconds']
            ?? $this->ttl
        ),

        'currency' => $currency,

        'car' => $this->cleanVehicleData(
            $vehicle
        ),

        'extra_products' => $cleanSelectedExtras,
    ];

    return $this->jsonResponse(
        1,
        [],
        $responseData
    );
}


    //merge
    private function mergeCars(
        array $cars1,
        array $cars2,
        string $providerCurrency
    ): array {

        $merged = [];
        $noKeyCounter = 0;

        foreach ( array_merge($cars1, $cars2) as $car) {

            if (!is_array($car)) {
                continue;
            }

            $car = $this->normalizeVehicleMoneyReturn( $car );

            $key = $this->buildCarKey($car);

            if ($key === null) {
                $noKeyCounter++;
                $merged[ '__nokey_' . $noKeyCounter ] = $car;

                continue;
            }

            if (!isset($merged[$key])) {
                $merged[$key] = $car;
                continue;
            }

            $currentPrice = isset( $merged[$key]['price'] ) ? (float)$merged[$key]['price']: null;

            $newPrice = isset($car['price']) ? (float)$car['price']: null;

            if ($newPrice !== null &&($currentPrice === null || $newPrice < $currentPrice )
            ) {
                $merged[$key] = $car;
            }
        }

        return array_values($merged);
    }

    // FINALIZE
    private function finalizeMergedCars(
        array &$mergedCars,
        string $providerCurrency,
        string $targetCurrency,
        string $quoteCreatedAt,
        string $quoteExpiresAt
    ): void {

       //for image
        $mergedCars = $this->addImage( $mergedCars );

        // logos
        $mergedCars = $this->addVendorLogos( $mergedCars );

        foreach ($mergedCars as $index => &$car) {
            if (!is_array($car)) {
                continue;
            }
            $originalPrice = isset($car['price']) ? (float)$car['price'] : 0;

            $originalCurrency = isset($car['currency']) ? (string)$car['currency'] : $providerCurrency;

            // commission
            $car = $this->applyCommissionToVehicle( $car, $providerCurrency );

            // currency conversion
            if (!empty($car['price']) && $targetCurrency !== $car['currency']) {
                $car = $this->convertVehicleToCurrency( $car, $targetCurrency );
            }

            // normalize
            $this->normalizeVehicleMoney( $car, $providerCurrency );

            $this->applyOfficeInfo($car);
            $this->normalizeVehicleLabels($car);

            //identifier for car id
            $car['carId'] = $this->buildCarId( $car );

            // quote information
            $car['_original_price'] = $originalPrice;

            $car['_original_currency'] = $originalCurrency;

            $car['_provider_currency'] = $providerCurrency;

            $car['quote_created_at'] = $quoteCreatedAt;

            $car['quote_expires_at'] = $quoteExpiresAt;

            $car['quote_ttl_seconds'] = (int)$this->ttl;
        }

        unset($car);
    }

    private function attachProvider(
        array $cars,
        string $provider
    ): array {

        foreach ($cars as &$car) {

            if (!is_array($car)) {
                continue;
            }

            // public field
            $car['provider'] = $provider;

            // internal copy
            $car['_provider'] = $provider;
        }

        unset($car);

        return $cars;
    }


    //providers
    private function loadProviderClasses()
    {
        require_once(
            DIR_SYSTEM .
            'library/provider1/yolcu_provider1_client.php'
        );

        require_once(
            DIR_SYSTEM .
            'library/provider2/yolcu_provider2_client.php'
        );

        require_once(
            DIR_SYSTEM .
            'library/provider1/yolcu_provider1_config.php'
        );

        require_once(
            DIR_SYSTEM .
            'library/provider2/yolcu_provider2_config.php'
        );
    }


    //images
    private function addImage($vehicles)
    {
        $this->load->model('tool/image');

        $dir = DIR_IMAGE . 'car-images/';

        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        $downloaded = [];

        foreach ($vehicles as &$vehicle) {

            $imageParts =
                $this->resolveVehicleImageParts(
                    $vehicle
                );

            $brand = $imageParts['make'];
            $model = $imageParts['model'];

            $slugSource = trim(
                $brand . '-' . $model,
                '-'
            );

            if (
                $brand === '' ||
                $model === '' ||
                $slugSource === ''
            ) {

                $imageUrl =
                    $this->localImagePlaceholderUrl();

                $vehicle['image'] =
                    $imageUrl;

                $vehicle['imageUrl'] =
                    $imageUrl;

                $vehicle['imageURL'] =
                    $imageUrl;

                $vehicle['images'] = [[
                    'size' => 'local',
                    'url'  => $imageUrl
                ]];

                continue;
            }

            $filename = strtolower(
                preg_replace(
                    '/[^a-z0-9]/',
                    '-',
                    $slugSource
                )
            ) . '.webp';

            $image_relative =
                'car-images/' . $filename;

            $image_path =
                DIR_IMAGE . $image_relative;

            $remoteImageUrl =
                $this->buildImaginVehicleImageUrl(
                    $vehicle
                );

            if (
                !is_file($image_path) &&
                count($downloaded) < 4 &&
                !isset($downloaded[$filename])
            ) {

                $imageBody =
                    $this->downloadRemoteImage(
                        $remoteImageUrl,
                        [
                            'image/webp',
                            'image/jpeg',
                            'image/png'
                        ],
                        2,
                        5
                    );

                if (
                    $imageBody !== '' &&
                    @file_put_contents(
                        $image_path,
                        $imageBody
                    ) !== false
                ) {
                    @chmod(
                        $image_path,
                        0644
                    );
                }

                $downloaded[$filename] = true;
            }

            $imageUrl =
                is_file($image_path) &&
                filesize($image_path) > 100
                ? $this->buildImageUrl(
                    $image_relative
                )
                : (
                    $remoteImageUrl !== ''
                    ? $remoteImageUrl
                    : $this->localImagePlaceholderUrl()
                );

            $vehicle['image'] =
                $imageUrl;

            $vehicle['imageUrl'] =
                $imageUrl;

            $vehicle['imageURL'] =
                $imageUrl;

            $vehicle['images'] = [[
                'size' => 'local',
                'url'  => $imageUrl
            ]];
        }

        unset($vehicle);

        return $vehicles;
    }


   //logo

    private function addVendorLogos($vehicles)
    {
        $dir = DIR_IMAGE . 'vendor/';

        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        $downloaded = [];

        foreach ($vehicles as &$vehicle) {

            if (
                !isset($vehicle['vendor']) ||
                !is_array($vehicle['vendor'])
            ) {
                continue;
            }

            $vendorName =
                $this->safeString(
                    $vehicle['vendor']['name']
                    ?? (
                        $vehicle['vendor']['displayName']
                        ?? ''
                    )
                );

            if ($vendorName === '') {
                continue;
            }

            $extension = 'png';

            $filename =
                'goarac-' .
                preg_replace(
                    '/[^a-z0-9]+/',
                    '-',
                    $vendorName
                ) .
                '.' .
                $extension;

            $filename = trim(
                preg_replace(
                    '/-+/',
                    '-',
                    $filename
                ),
                '-'
            );

            if (
                strpos(
                    $filename,
                    'goarac-.'
                ) === 0
            ) {
                $filename =
                    'goarac-vendor.' .
                    $extension;
            }

            $imageRelative =
                'vendor/' . $filename;

            $imagePath =
                DIR_IMAGE . $imageRelative;

            $fallbackPath =
                $this->resolveVendorFallbackFile(
                    $vendorName,
                    $dir
                );

            $remoteLogoUrl =
                $this->extractVendorLogoUrl(
                    $vehicle['vendor']['logo']
                    ?? ''
                );

            if (
                !file_exists($imagePath) &&
                count($downloaded) < 6 &&
                !isset($downloaded[$filename]) &&
                $remoteLogoUrl !== '' &&
                !$this->isLocalImageUrl(
                    $remoteLogoUrl
                )
            ) {

                $logoBody =
                    $this->downloadRemoteImage(
                        $remoteLogoUrl,
                        [
                            'image/png',
                            'image/jpeg',
                            'image/webp',
                            'image/svg+xml'
                        ],
                        2,
                        5
                    );

                if (
                    $logoBody !== '' &&
                    @file_put_contents(
                        $imagePath,
                        $logoBody
                    ) !== false
                ) {
                    @chmod(
                        $imagePath,
                        0644
                    );
                }

                $downloaded[$filename] = true;
            }

            if (
                !file_exists($imagePath) &&
                !isset($downloaded[$filename]) &&
                $fallbackPath &&
                is_file($fallbackPath)
            ) {

                copy(
                    $fallbackPath,
                    $imagePath
                );

                @chmod(
                    $imagePath,
                    0644
                );

                $downloaded[$filename] = true;
            }

            if (file_exists($imagePath)) {

                $vehicle['vendor']['logo'] =
                    $this->buildImageUrl(
                        $imageRelative
                    );

            } elseif (
                $fallbackPath &&
                is_file($fallbackPath)
            ) {

                $vehicle['vendor']['logo'] =
                    $this->buildImageUrl(
                        'vendor/' .
                        basename($fallbackPath)
                    );

            } elseif (
                $remoteLogoUrl !== '' &&
                !$this->isLocalImageUrl(
                    $remoteLogoUrl
                )
            ) {

                $vehicle['vendor']['logo'] =
                    $remoteLogoUrl;

            } else {

                $vehicle['vendor']['logo'] =
                    $this->localVendorPlaceholderUrl();
            }
        }

        unset($vehicle);

        return $vehicles;
    }


    private function resolveVendorFallbackFile(
        $vendorName,
        $dir
    ) {

        $map = [
            'avis'        => 'avis.png',
            'budget'      => 'budget.png',
            'europcar'    => 'europcar.png',
            'hertz'       => 'hertz.png',
            'rentgo'      => 'rentgo.png',
            'qcar'        => 'qcar.png',
            'autoland'    => 'autoland.png',
            'garenta'     => 'garenta.png',
            'greenmotion' => 'greenmotion.png',
            'windycar'    => 'windycar.png',
            'ziraatfilo'  => 'Ziraatfilo.png',
            'sixt'        => 'SIXT.png',
        ];

        if (isset($map[$vendorName])) {

            $candidate =
                $dir . $map[$vendorName];

            if (is_file($candidate)) {
                return $candidate;
            }
        }

        return null;
    }


    private function buildImageUrl($imageRelative)
    {
        $baseUrl =
            $this->config->get('config_ssl');

        if (!$baseUrl) {
            $baseUrl =
                $this->config->get('config_url');
        }

        if (!$baseUrl) {
            $baseUrl =
                (
                    defined('HTTP_SERVER') &&
                    HTTP_SERVER
                )
                    ? HTTP_SERVER
                    : '';
        }

        $absolute =
            DIR_IMAGE .
            ltrim($imageRelative, '/');

        $url =
            rtrim($baseUrl, '/') .
            '/image/' .
            ltrim($imageRelative, '/');

        if (is_file($absolute)) {

            $url .=
                (
                    strpos($url, '?') === false
                    ? '?'
                    : '&'
                ) .
                'v=' .
                filemtime($absolute);
        }

        return $url;
    }


    private function localImagePlaceholderUrl()
    {
        return $this->buildImageUrl(
            'cache/placeholder-228x228.png'
        );
    }


    private function localVendorPlaceholderUrl()
    {
        return $this->buildImageUrl(
            'goarac-logo.png'
        );
    }


    private function isLocalImageUrl($url)
    {
        $url = trim((string)$url);

        if (
            $url === '' ||
            stripos(
                $url,
                'yolcu360.com'
            ) !== false
        ) {
            return false;
        }

        return
            strpos($url, '/image/') !== false ||
            strpos($url, 'image/') === 0;
    }


    private function buildImaginVehicleImageUrl($car)
    {
        $imageParts =
            $this->resolveVehicleImageParts(
                $car
            );

        $make =
            strtolower(
                $imageParts['make']
            );

        $modelFamily =
            strtolower(
                $imageParts['model']
            );

        if (
            $make === '' ||
            $modelFamily === ''
        ) {
            return '';
        }

        $paint =
            $this->resolveVehiclePaint(
                $car,
                $make,
                $modelFamily
            );

        return 'https://cdn.imagin.studio/getImage?' .
            http_build_query(
                [
                    'customer'         => 'n4c',
                    'make'             => $make,
                    'modelFamily'      => $modelFamily,
                    'modelYear'        => '2025',
                    'modelVariant'     => 'suv',
                    'bodySize'         => '5',
                    'paintId'          => $paint['id'],
                    'paintDescription' => $paint['description'],
                    'zoomType'         => 'original',
                    'zoomLevel'        => '80',
                    'width'            => '800',
                    'angle'            => '01',
                ],
                '',
                '&',
                PHP_QUERY_RFC3986
            );
    }


    private function resolveVehiclePaint(
        $car,
        $make,
        $modelFamily
    ) {

        $paints = [
            [
                'id' => '6w9',
                'description' => 'radiant-green'
            ],
            [
                'id' => 'KHK',
                'description' => 'metallic-clay-orange'
            ],
            [
                'id' => '8U7',
                'description' => 'blue-electra'
            ],
            [
                'id' => '3i',
                'description' => 'python-green'
            ],
            [
                'id' => '3U5',
                'description' => 'emotional-red-metallic'
            ],
        ];

        $seed = implode(
            '|',
            [
                $make,
                $modelFamily,
                $this->imageValueToString(
                    $car['code'] ?? ''
                ),
                $this->imageValueToString(
                    $car['searchID'] ?? ''
                ),
            ]
        );

        $index =
            abs((int)crc32($seed)) %
            count($paints);

        return $paints[$index];
    }


    private function resolveVehicleImageParts($car)
    {
        $brand =
            $this->safeImagePart(
                $car['brand'] ?? ''
            );

        if ($brand === '') {
            $brand =
                $this->safeImagePart(
                    $car['brandName'] ?? ''
                );
        }

        if ($brand === '') {
            $brand =
                $this->safeImagePart(
                    $car['make'] ?? ''
                );
        }

        $model =
            $this->safeImagePart(
                $car['model'] ?? '',
                $brand
            );

        if ($model === '') {
            $model =
                $this->safeImagePart(
                    $car['modelName'] ?? '',
                    $brand
                );
        }

        if ($model === '') {
            $model =
                $this->safeImagePart(
                    $car['modelFamily'] ?? '',
                    $brand
                );
        }

        return [
            'make'  => $brand,
            'model' => $model
        ];
    }


    private function safeImagePart(
        $value,
        $make = ''
    ) {

        $value =
            trim(
                mb_strtolower(
                    strip_tags(
                        $this->imageValueToString(
                            $value
                        )
                    )
                )
            );

        $value = str_replace(
            [
                'ı',
                'ğ',
                'ü',
                'ş',
                'ö',
                'ç'
            ],
            [
                'i',
                'g',
                'u',
                's',
                'o',
                'c'
            ],
            $value
        );

        $value =
            preg_replace(
                '/\b(veya|ve|or)?\s*(benzeri|similar)\b.*/iu',
                '',
                $value
            );

        $value =
            preg_replace(
                '/\b(otomatik|automatic|manuel|manual|dizel|diesel|benzin|petrol|hybrid|hibrit)\b/iu',
                '',
                $value
            );

        $value =
            preg_replace(
                '/\b(19|20)\d{2}\b/u',
                '',
                $value
            );

        $value =
            preg_replace(
                '/\([^)]*\)/u',
                '',
                $value
            );

        $value =
            trim(
                preg_replace(
                    '/[^a-z0-9]+/',
                    '-',
                    $value
                ),
                '-'
            );

        $make =
            trim(
                (string)$make,
                '-'
            );

        if ($make !== '') {
            $value =
                preg_replace(
                    '/^' .
                    preg_quote(
                        $make,
                        '/'
                    ) .
                    '-?/i',
                    '',
                    $value
                );
        }

        return trim(
            $value,
            '-'
        );
    }


    private function imageValueToString($value)
    {
        if (
            is_string($value) ||
            is_numeric($value)
        ) {
            return (string)$value;
        }

        if (is_array($value)) {

            foreach (
                [
                    'name',
                    'displayName',
                    'title',
                    'label',
                    'value',
                    'model',
                    'brand',
                    'make',
                    'text'
                ] as $key
            ) {

                if (isset($value[$key])) {

                    $candidate =
                        $this->imageValueToString(
                            $value[$key]
                        );

                    if (
                        trim($candidate) !== ''
                    ) {
                        return $candidate;
                    }
                }
            }

            foreach ($value as $item) {

                $candidate =
                    $this->imageValueToString(
                        $item
                    );

                if (
                    trim($candidate) !== ''
                ) {
                    return $candidate;
                }
            }
        }

        return '';
    }


    // image download

    private function downloadRemoteImage(
        $url,
        array $allowedContentTypes = [],
        $connectTimeout = 3,
        $timeout = 8
    ) {

        $url = trim((string)$url);

        if (
            $url === '' ||
            !preg_match(
                '#^https?://#i',
                $url
            )
        ) {
            return '';
        }

        $ch = curl_init($url);

        if (!$ch) {
            return '';
        }

        curl_setopt_array(
            $ch,
            [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_MAXREDIRS      => 4,
                CURLOPT_CONNECTTIMEOUT => (int)$connectTimeout,
                CURLOPT_TIMEOUT        => (int)$timeout,
                CURLOPT_SSL_VERIFYPEER => true,
                CURLOPT_SSL_VERIFYHOST => 2,
                CURLOPT_USERAGENT      =>
                    'Mozilla/5.0 (compatible; GoAracImage/1.0; +https://goarac.com)',
                CURLOPT_HTTPHEADER     => [
                    'Accept: image/avif,image/webp,image/apng,image/svg+xml,image/*,*/*;q=0.8'
                ],
            ]
        );

        $body =
            curl_exec($ch);

        $status =
            (int)curl_getinfo(
                $ch,
                CURLINFO_HTTP_CODE
            );

        $contentType =
            strtolower(
                (string)curl_getinfo(
                    $ch,
                    CURLINFO_CONTENT_TYPE
                )
            );

        $error =
            curl_error($ch);

        curl_close($ch);

        if (
            $body === false ||
            $status < 200 ||
            $status >= 300 ||
            strlen((string)$body) <= 100
        ) {

            if (
                $status > 0 &&
                $status < 500
            ) {

                $this->log->write(
                    'GoAraç image download failed: ' .
                    $url .
                    ' status=' .
                    $status .
                    ' error=' .
                    $error
                );
            }

            return '';
        }

        if ($allowedContentTypes) {

            if (
                !$this->isAllowedRemoteImageContent(
                    $contentType,
                    (string)$body,
                    $allowedContentTypes,
                    $url
                )
            ) {

                $this->log->write(
                    'GoAraç image download rejected non-image response: ' .
                    $url .
                    ' content_type=' .
                    $contentType
                );

                return '';
            }
        }

        return (string)$body;
    }


    private function isAllowedRemoteImageContent(
        $contentType,
        $body,
        array $allowedContentTypes,
        $url = ''
    ) {

        $contentType =
            strtolower(
                trim((string)$contentType)
            );

        $allowed =
            array_map(
                'strtolower',
                array_filter(
                    $allowedContentTypes
                )
            );

        foreach ($allowed as $allowedContentType) {

            if (
                $allowedContentType !== '' &&
                strpos(
                    $contentType,
                    $allowedContentType
                ) !== false
            ) {
                return true;
            }
        }

        $detected =
            $this->detectImageContentType(
                $body
            );

        if (
            $detected !== '' &&
            in_array(
                $detected,
                $allowed,
                true
            )
        ) {
            return true;
        }

        return false;
    }


    private function detectImageContentType($body)
    {
        $body = (string)$body;

        if (
            strncmp(
                $body,
                "\x89PNG\r\n\x1a\n",
                8
            ) === 0
        ) {
            return 'image/png';
        }

        if (
            strncmp(
                $body,
                "\xff\xd8\xff",
                3
            ) === 0
        ) {
            return 'image/jpeg';
        }

        if (
            strncmp(
                $body,
                'RIFF',
                4
            ) === 0 &&
            substr(
                $body,
                8,
                4
            ) === 'WEBP'
        ) {
            return 'image/webp';
        }

        if (
            substr(
                $body,
                4,
                8
            ) === 'ftypavif'
        ) {
            return 'image/avif';
        }

        if (
            preg_match(
                '/^\s*<svg\b/i',
                $body
            )
        ) {
            return 'image/svg+xml';
        }

        return '';
    }


    // commission

    private function applyCommissionToVehicle(
        array $car,
        string $providerCurrency
    ): array {

        if (
            !isset($car['price']) ||
            !is_numeric($car['price'])
        ) {
            return $car;
        }

        $buyAmount =
            (float)$car['price'];

        $currency =
            isset($car['currency']) &&
            is_string($car['currency']) &&
            trim($car['currency']) !== ''
            ? strtoupper(
                trim($car['currency'])
            )
            : strtoupper(
                trim($providerCurrency)
            );

        $commissionType =
            (string)(
                $this->config->get(
                    'config_car_commission_type'
                ) ?: 'percentage'
            );

        $commissionValue =
            (float)(
                $this->config->get(
                    'config_car_commission_value'
                ) ?? 0
            );

        if ($commissionValue <= 0) {
            return $car;
        }

        if ($commissionType === 'fixed') {

            $sellAmount =
                $buyAmount +
                max(
                    0,
                    $commissionValue
                );

        } else {

            $sellAmount =
                $buyAmount *
                (
                    1 +
                    (
                        min(
                            100,
                            max(
                                0,
                                $commissionValue
                            )
                        ) / 100
                    )
                );
        }

        $car['goarac_accounting'] = [
            'buy_price' =>
                round($buyAmount, 2),

            'buy_currency' =>
                $currency,

            'sell_price' =>
                round($sellAmount, 2),

            'sell_currency' =>
                $currency,

            'commission_type' =>
                $commissionType,

            'commission_value' =>
                round(
                    $commissionValue,
                    4
                ),
        ];

        $car['price'] =
            round(
                $sellAmount,
                2
            );

        $car['currency'] =
            $currency;

        return $car;
    }


    //currency

    private function convertVehicleToCurrency(
        array $car,
        string $targetCurrency
    ): array {

        if (
            empty($car['price']) ||
            !isset($car['currency'])
        ) {
            return $car;
        }

        $sourceCurrency =
            strtoupper(
                trim(
                    (string)$car['currency']
                )
            );

        $targetCurrency =
            strtoupper(
                trim($targetCurrency)
            );

        if (
            $sourceCurrency ===
            $targetCurrency
        ) {
            return $car;
        }

        $this->load->model(
            'localisation/currency'
        );

        $currencies =
            $this->model_localisation_currency
                ->getCurrencies();

        if (
            !isset(
                $currencies[$sourceCurrency]
            ) ||
            !isset(
                $currencies[$targetCurrency]
            )
        ) {
            return $car;
        }

        $converted =
            $this->currency->convert(
                (float)$car['price'],
                $sourceCurrency,
                $targetCurrency
            );

        if (
            $converted === false ||
            $converted === null
        ) {
            return $car;
        }

        $car['price'] =
            round(
                (float)$converted,
                2
            );

        $car['currency'] =
            $targetCurrency;

        return $car;
    }


    private function convertExtraProductsToCurrentCurrency(
        array $extras,
        string $targetCurrency
    ): array {

        if (
            empty($targetCurrency)
        ) {
            return $extras;
        }

        $this->load->model(
            'localisation/currency'
        );

        $currencies =
            $this->model_localisation_currency
                ->getCurrencies();

        if (
            !isset(
                $currencies[$targetCurrency]
            )
        ) {
            return $extras;
        }

        foreach ($extras as &$extra) {

            if (
                !isset($extra['price']) ||
                !is_numeric($extra['price'])
            ) {
                continue;
            }

            $sourceCurrency =
                isset($extra['currency']) &&
                is_string($extra['currency'])
                ? strtoupper(
                    trim($extra['currency'])
                )
                : 'TRY';

            if (
                $sourceCurrency ===
                $targetCurrency
            ) {
                continue;
            }

            $converted =
                $this->currency->convert(
                    (float)$extra['price'],
                    $sourceCurrency,
                    $targetCurrency
                );

            if (
                $converted === false ||
                $converted === null
            ) {
                continue;
            }

            $extra['price'] =
                round(
                    (float)$converted,
                    2
                );

            $extra['currency'] =
                $targetCurrency;
        }

        unset($extra);

        return $extras;
    }


    // TARGET CURRENCY

    private function resolveTargetCurrency(
        array $body
    ): string {

        if (
            !empty($body['currency']) &&
            is_string($body['currency'])
        ) {
            return strtoupper(
                trim($body['currency'])
            );
        }

        if (
            method_exists(
                $this->currency,
                'getRestCurrencyCode'
            )
        ) {

            $code =
                $this->currency
                    ->getRestCurrencyCode();

            if (
                is_string($code) &&
                trim($code) !== ''
            ) {
                return strtoupper(
                    trim($code)
                );
            }
        }

        if (
            !empty(
                $this->session->data['currency']
            )
        ) {
            return strtoupper(
                trim(
                    (string)
                    $this->session->data['currency']
                )
            );
        }

        $configCurrency =
            $this->config->get(
                'config_currency'
            );

        if (!empty($configCurrency)) {
            return strtoupper(
                trim(
                    (string)$configCurrency
                )
            );
        }

        return 'TRY';
    }


    // NORMALIZATION

    private function normalizeVehicleMoneyReturn(
        array $car
    ): array {

        $this->normalizeVehicleMoney(
            $car
        );

        return $car;
    }


    private function normalizeVehicleMoney(
        array &$car,
        string $fallbackCurrency = 'TRY'
    ): void {

        if (
            !isset($car['price']) ||
            !is_numeric($car['price'])
        ) {

            if (
                isset($car['pricing']) &&
                is_array($car['pricing']) &&
                isset($car['pricing']['total']) &&
                is_array($car['pricing']['total'])
            ) {

                if (
                    isset(
                        $car['pricing']['total']['amount']
                    )
                ) {
                    $car['price'] =
                        (
                            (float)
                            $car['pricing']['total']['amount']
                        ) / 100;
                }

                if (
                    isset(
                        $car['pricing']['total']['currency']
                    )
                ) {
                    $car['currency'] =
                        (string)
                        $car['pricing']['total']['currency'];
                }
            }
        }

        if (
            isset($car['price']) &&
            is_array($car['price'])
        ) {

            $car['currency'] =
                $this->extractCurrency(
                    $car['price'],
                    $car['currency']
                    ?? $fallbackCurrency
                );

            $car['price'] =
                $this->extractAmount(
                    $car['price']
                );
        }

        if (
            !isset($car['currency']) ||
            !is_string($car['currency']) ||
            trim($car['currency']) === ''
        ) {
            $car['currency'] =
                $fallbackCurrency;
        }

        $this->normalizeDepositRule(
            $car
        );
    }


    private function normalizeDepositRule(
        array &$vehicle
    ): void {

        if (
            !isset($vehicle['rules']) ||
            !is_array($vehicle['rules'])
        ) {
            return;
        }

        if (
            isset(
                $vehicle['rules']['deposit']
            )
        ) {

            $vehicle['rules']['deposit'] =
                $this->normalizeMoneyArray(
                    $vehicle['rules']['deposit'],
                    'TRY'
                );

            return;
        }

        foreach (
            $vehicle['rules'] as &$rule
        ) {

            if (!is_array($rule)) {
                continue;
            }

            $type =
                strtolower(
                    trim(
                        (string)(
                            $rule['type']
                            ??
                            $rule['name']
                            ??
                            ''
                        )
                    )
                );

            if (
                $type !== 'deposit' ||
                !isset($rule['deposit'])
            ) {
                continue;
            }

            $rule['deposit'] =
                $this->normalizeMoneyArray(
                    $rule['deposit'],
                    'TRY'
                );
        }

        unset($rule);
    }


    private function normalizeMoneyArray(
        $money,
        string $fallbackCurrency
    ): array {

        if (is_array($money)) {

            return [
                'amount' =>
                    $this->extractAmount(
                        $money
                    ),

                'currency' =>
                    $this->extractCurrency(
                        $money,
                        $fallbackCurrency
                    ),
            ];
        }

        return [
            'amount' =>
                is_numeric($money)
                ? (float)$money
                : 0,

            'currency' =>
                $fallbackCurrency,
        ];
    }


    private function extractAmount(
        array $money
    ): float {

        if (
            isset($money['amount']) &&
            is_numeric($money['amount'])
        ) {
            return
                (
                    (float)$money['amount']
                ) / 100;
        }

        if (
            isset($money['value']) &&
            is_numeric($money['value'])
        ) {
            return
                (
                    (float)$money['value']
                ) / 100;
        }

        return 0;
    }


    private function extractCurrency(
        array $money,
        string $fallback
    ): string {

        if (
            isset($money['currency']) &&
            is_string($money['currency']) &&
            trim($money['currency']) !== ''
        ) {
            return trim(
                $money['currency']
            );
        }

        if (
            isset($money['code']) &&
            is_string($money['code']) &&
            trim($money['code']) !== ''
        ) {
            return trim(
                $money['code']
            );
        }

        return $fallback;
    }


    //EXTRA NORMALIZATION

    private function normalizeExtraProductMoneyReturn(
        array $extra
    ): array {

        if (
            isset($extra['price']) &&
            is_numeric($extra['price'])
        ) {
            if (
                !isset($extra['currency']) ||
                !is_string($extra['currency']) ||
                trim($extra['currency']) === ''
            ) {
                $extra['currency'] = 'TRY';
            }

            return $extra;
        }

        if (
            isset($extra['price']) &&
            is_array($extra['price'])
        ) {

            $currency =
                $this->extractCurrency(
                    $extra['price'],
                    'TRY'
                );

            $amount =
                $this->extractAmount(
                    $extra['price']
                );

            $extra['price'] =
                $amount;

            $extra['currency'] =
                $currency;

            return $extra;
        }

        if (
            isset($extra['pricing']) &&
            is_array($extra['pricing']) &&
            isset($extra['pricing']['total']) &&
            is_array($extra['pricing']['total'])
        ) {

            if (
                isset(
                    $extra['pricing']['total']['amount']
                )
            ) {
                $extra['price'] =
                    (
                        (float)
                        $extra['pricing']['total']['amount']
                    ) / 100;
            }

            $extra['currency'] =
                $extra['pricing']['total']['currency']
                ?? 'TRY';
        }

        if (
            !isset($extra['currency']) ||
            trim(
                (string)$extra['currency']
            ) === ''
        ) {
            $extra['currency'] = 'TRY';
        }

        return $extra;
    }


    // LABELS

    private function normalizeVehicleLabels(
        array &$vehicle
    ): void {

        if (isset($vehicle['brand'])) {
            $vehicle['brand'] =
                $this->normalizeLabelField(
                    $vehicle['brand']
                );
        }

        if (isset($vehicle['model'])) {
            $vehicle['model'] =
                $this->normalizeLabelField(
                    $vehicle['model']
                );
        }

        if (isset($vehicle['class'])) {
            $vehicle['class'] =
                $this->normalizeLabelField(
                    $vehicle['class']
                );
        }

        if (isset($vehicle['transmission'])) {
            $vehicle['transmission'] =
                $this->normalizeLabelField(
                    $vehicle['transmission']
                );
        }

        if (isset($vehicle['fuel'])) {
            $vehicle['fuel'] =
                $this->normalizeLabelField(
                    $vehicle['fuel']
                );
        }

        if (isset($vehicle['deliveryType'])) {
            $vehicle['deliveryType'] =
                $this->normalizeLabelField(
                    $vehicle['deliveryType']
                );
        }

        if (
            isset($vehicle['vendor']) &&
            is_array($vehicle['vendor'])
        ) {

            if (
                isset(
                    $vehicle['vendor']['name']
                )
            ) {
                $vehicle['vendor']['name'] =
                    $this->normalizeLabelField(
                        $vehicle['vendor']['name']
                    );
            }

            if (
                isset(
                    $vehicle['vendor']['displayName']
                )
            ) {
                $vehicle['vendor']['displayName'] =
                    $this->normalizeLabelField(
                        $vehicle['vendor']['displayName']
                    );
            }
        }
    }


    private function normalizeLabelField(
        $value
    ): string {

        if (is_array($value)) {

            foreach (
                [
                    'name',
                    'title',
                    'label',
                    'displayName'
                ] as $key
            ) {

                if (
                    isset($value[$key]) &&
                    is_string($value[$key]) &&
                    trim($value[$key]) !== ''
                ) {
                    return trim(
                        $value[$key]
                    );
                }
            }

            $first =
                reset($value);

            return is_string($first)
                ? trim($first)
                : '';
        }

        if (is_string($value)) {

            $trimmed =
                trim($value);

            if ($trimmed === '') {
                return '';
            }

            if (
                preg_match(
                    '/name\s*[:=]\s*([^,}]+)/i',
                    $trimmed,
                    $matches
                )
            ) {
                return trim(
                    $matches[1]
                );
            }

            return $trimmed;
        }

        return '';
    }


    // OFFICE

    private function applyOfficeInfo(
        array &$vehicle
    ): void {

        if (
            !isset(
                $vehicle['appointment']['checkInOffice']
            ) ||
            !is_array(
                $vehicle['appointment']['checkInOffice']
            )
        ) {
            return;
        }

        $office =
            $vehicle['appointment']['checkInOffice'];

        if (
            !isset($vehicle['vendor']) ||
            !is_array($vehicle['vendor'])
        ) {
            $vehicle['vendor'] = [];
        }

        if (
            !empty($office['email']) &&
            is_string($office['email'])
        ) {
            $vehicle['vendor']['email'] =
                $office['email'];
        }

        if (
            !empty($office['phones']) &&
            is_array($office['phones'])
        ) {

            $vehicle['vendor']['phone'] =
                (string)(
                    $office['phones'][0]
                    ?? ''
                );

            $vehicle['vendor']['phones'] =
                $office['phones'];
        }

        if (
            !empty($office['address']) &&
            is_array($office['address'])
        ) {

            $addressParts = [];

            foreach (
                [
                    'street',
                    'adm2',
                    'adm1',
                    'country'
                ] as $key
            ) {

                if (
                    !empty(
                        $office['address'][$key]
                    )
                ) {
                    $addressParts[] =
                        $office['address'][$key];
                }
            }

            if ($addressParts) {
                $vehicle['vendor']['address'] =
                    implode(
                        ', ',
                        $addressParts
                    );
            }
        }

        if (
            !empty($office['openingHours']) &&
            is_array($office['openingHours'])
        ) {
            $vehicle['vendor']['openingHours'] =
                $office['openingHours'];
        }
    }


    // VENDOR HELPERS

    private function extractVendorLogoUrl(
        $logo
    ) {

        if (is_string($logo)) {

            $trimmed =
                trim($logo);

            return $trimmed !== ''
                ? $trimmed
                : '';
        }

        if (is_array($logo)) {

            foreach (
                [
                    'url',
                    'image',
                    'src',
                    'href'
                ] as $key
            ) {

                if (
                    !empty($logo[$key]) &&
                    is_string($logo[$key])
                ) {
                    return trim(
                        $logo[$key]
                    );
                }
            }
        }

        return '';
    }


    private function safeString($value)
    {
        if (is_string($value)) {
            return trim(
                strtolower($value)
            );
        }

        if (is_array($value)) {

            foreach (
                [
                    'name',
                    'title',
                    'label'
                ] as $key
            ) {

                if (
                    isset($value[$key]) &&
                    is_string($value[$key])
                ) {
                    return trim(
                        strtolower(
                            $value[$key]
                        )
                    );
                }
            }

            $first =
                reset($value);

            if (is_string($first)) {
                return trim(
                    strtolower($first)
                );
            }
        }

        return '';
    }


    // CLEAN VEHICLE

    private function cleanVehicleData(
        array $vehicle
    ): array {
        unset(
            $vehicle['integrationCode'],
            $vehicle['applicableForFullCredit'],
            $vehicle['applicableForLimitCredit'],
            $vehicle['isFindeksRequired'],
            $vehicle['goarac_accounting'],
            $vehicle['goarac_order_financials'],
            $vehicle['_goarac_accounting'],
            $vehicle['provider_price'],
            $vehicle['provider_currency'],
            $vehicle['buy_price'],
            $vehicle['buy_currency'],
            $vehicle['_original_price'],
            $vehicle['_original_currency'],
            $vehicle['_provider_currency'],
            $vehicle['_provider'],
            $vehicle['_searchID'],
            $vehicle['_car_code']
        );

        return $vehicle;
    }


    private function cleanExtraProductData(
        array $extra
    ): array {

        unset(
            $extra['_provider'],
            $extra['_searchID'],
            $extra['_car_code']
        );

        return $extra;
    }


    // PROVIDER DATA

    private function getProviderData($providerResult) {

        if (
            !isset($providerResult['data']) ||
            !is_array($providerResult['data'])
        ) {
            return [];
        }

        $response =
            $providerResult['data'];

        if (
            isset($response['data']) &&
            is_array($response['data'])
        ) {
            return $response['data'];
        }

        return $response;
    }


    // CAR KEY
    private function buildCarKey(
        array $car
    ): ?string {

        $brand =
            $this->extractName(
                $car['brand'] ?? ''
            );

        $model =
            $this->extractName(
                $car['model'] ?? ''
            );

        $fuel =
            $this->extractName(
                $car['fuel'] ?? ''
            );

        $trans =
            $this->extractName(
                $car['transmission'] ?? ''
            );

        $seatCount =
            isset($car['seatCount'])
            ? (int)$car['seatCount']
            : 0;

        if (
            $brand === '' &&
            $model === '' &&
            $fuel === '' &&
            $trans === '' &&
            $seatCount === 0
        ) {
            return null;
        }

        return
            mb_strtolower(
                $brand,
                'UTF-8'
            ) .
            '|' .
            mb_strtolower(
                $model,
                'UTF-8'
            ) .
            '|' .
            mb_strtolower(
                $fuel,
                'UTF-8'
            ) .
            '|' .
            mb_strtolower(
                $trans,
                'UTF-8'
            ) .
            '|' .
            $seatCount;
    }


    private function extractName(
        $value
    ): string {

        if (
            is_array($value) &&
            isset($value['name'])
        ) {
            return trim(
                (string)$value['name']
            );
        }

        if (is_string($value)) {
            return trim($value);
        }

        return '';
    }


    // CAR ID

    private function buildCarId(
        array $car
    ): string {

        $provider =
            (string)(
                $car['provider']
                ?? $car['_provider']
                ?? ''
            );

        $code =
            (string)(
                $car['code']
                ?? $car['providerCode']
                ?? ''
            );

        $searchID =
            (string)(
                $car['searchID']
                ?? $car['search_id']
                ?? ''
            );

        return substr(
            hash(
                'sha256',
                $provider .
                '|' .
                $code .
                '|' .
                $searchID
            ),
            0,
            24
        );
    }


    // LANGUAGE

    private function resolveRequestLanguage(
        array $body
    ): string {

        if (
            !empty($body['language']) &&
            is_string($body['language'])
        ) {
            return strtolower(
                trim($body['language'])
            );
        }

        if (
            !empty($body['lang']) &&
            is_string($body['lang'])
        ) {
            return strtolower(
                trim($body['lang'])
            );
        }

        if (
            isset(
                $this->session->data['language']
            )
        ) {
            $language =
                (string)
                $this->session->data['language'];

            if ($language !== '') {

                $parts =
                    explode(
                        '-',
                        $language
                    );

                return strtolower(
                    $parts[0]
                );
            }
        }

        return 'en';
    }


    // JSON RESPONSE

    private function jsonResponse(
        int $success,
        array $errors = [],
        $data = null,
        int $statusCode = 200
    ) {

        if ($statusCode !== 200) {
            http_response_code(
                $statusCode
            );
        }

        $this->response->addHeader(
            'Content-Type: application/json'
        );

        $payload = [
            'success' => $success,
            'error'   => $errors,
        ];

        if ($data !== null) {
            $payload['data'] = $data;
        }

        $this->response->setOutput(
            json_encode(
                $payload
            )
        );
    }


    // quote

    private function isQuoteExpired(
        string $quoteExpiresAt
    ): bool {

        $quoteExpiresAt =
            trim($quoteExpiresAt);

        if ($quoteExpiresAt === '') {
            return false;
        }

        $expiresAt =
            strtotime(
                $quoteExpiresAt
            );

        if ($expiresAt === false) {
            return false;
        }

        return $expiresAt <= time();
    }
}