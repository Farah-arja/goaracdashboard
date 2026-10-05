<?php

class ControllerSaleYolcuApiOrders extends Controller
{
    public function index()
    {
        $this->load->language('sale/yolcu_api_orders');

        $this->document->setTitle(
            $this->language->get('heading_title')
        );

        $data = array();

        // Get provider
        $provider = '';

        if (isset($this->request->get['provider'])) {
            $provider = trim(
                (string)$this->request->get['provider']
            );
        }

        // Get order ID
        $order_id = '';

        if (isset($this->request->get['order_id'])) {
            $order_id = trim(
                (string)$this->request->get['order_id']
            );
        }

        // Language
        $data['heading_title'] = $this->language->get('heading_title');
        $data['text_home'] = $this->language->get('text_home');
        $data['text_fetch_help'] = $this->language->get('text_fetch_help');
        $data['text_no_order'] = $this->language->get('text_no_order');
        $data['text_summary'] = $this->language->get('text_summary');
        $data['text_raw_response'] = $this->language->get('text_raw_response');
        $data['entry_order_id'] = $this->language->get('entry_order_id');
        $data['button_fetch'] = $this->language->get('button_fetch');
        $data['button_back'] = $this->language->get('button_back');

        // Form values
        $data['user_token'] = $this->session->data['user_token'];
        $data['provider'] = $provider;
        $data['order_id'] = $order_id;

        $data['fetch_action'] = $this->url->link(
            'sale/yolcu_api_orders',
            'user_token=' . $this->session->data['user_token'],
            true
        );

        // Result
        $data['warning'] = '';
        $data['summary'] = array();
        $data['raw_response'] = '';

        // Fetch order
        if ($provider !== '' && $order_id !== '') {

            try {

                if ($provider === 'provider1') {

                    require_once(
                        DIR_SYSTEM . 'library/provider1/yolcu_provider1_client.php'
                    );

                    $client = new Provider1YolcuProvider1Client(
                        $this->registry
                    );

                    $response = $client->getOrderDetails($order_id);

                } elseif ($provider === 'provider2') {

                    require_once(
                        DIR_SYSTEM . 'library/provider2/yolcu_provider2_client.php'
                    );

                    $client = new Provider2YolcuProvider2Client(
                        $this->registry
                    );

                } else {

                    throw new Exception('Invalid provider.');
                }

            } catch (Exception $e) {

                $data['warning'] = $e->getMessage();
            }
        }

        // Breadcrumbs
        $data['breadcrumbs'] = array(
            array(
                'text' => $data['text_home'],
                'href' => $this->url->link(
                    'common/dashboard',
                    'user_token=' . $this->session->data['user_token'],
                    true
                )
            ),
            array(
                'text' => $data['heading_title'],
                'href' => $this->url->link(
                    'sale/yolcu_api_orders',
                    'user_token=' . $this->session->data['user_token'],
                    true
                )
            )
        );

        // Back button
        $data['back'] = $this->url->link(
            'common/dashboard',
            'user_token=' . $this->session->data['user_token'],
            true
        );

        // Header
        $data['header'] = $this->load->controller(
            'common/header'
        );

        // Left column
        $data['column_left'] = $this->load->controller(
            'common/column_left'
        );

        // Footer
        $data['footer'] = $this->load->controller(
            'common/footer'
        );

        // View
        $this->response->setOutput(
            $this->load->view(
                'sale/yolcu_api_orders',
                $data
            )
        );
    }

    private function buildSummary(array $order)
    {
        return array(
            'Yolcu order ID' => $this->firstValue(
                $order,
                array(
                    'id',
                    'orderID',
                    'orderId',
                    'order_id'
                )
            ),

            'Reservation ID' => $this->firstValue(
                $order,
                array(
                    'reservationID',
                    'reservationId',
                    'reservation_id',
                    'pnr'
                )
            ),

            'Status' => $this->firstValue(
                $order,
                array(
                    'status',
                    'orderStatus',
                    'order_status'
                )
            ),

            'Payment status' => $this->firstValue(
                $order,
                array(
                    'payment.status',
                    'paymentStatus',
                    'payment_status'
                )
            ),

            'Supplier' => $this->firstValue(
                $order,
                array(
                    'supplier.name',
                    'supplierName',
                    'vendor.name',
                    'provider.name'
                )
            ),

            'Customer' => trim(
                $this->firstValue(
                    $order,
                    array(
                        'customer.firstName',
                        'firstName',
                        'firstname'
                    )
                ) . ' ' .
                $this->firstValue(
                    $order,
                    array(
                        'customer.lastName',
                        'lastName',
                        'lastname'
                    )
                )
            ),

            'Pickup' => $this->firstValue(
                $order,
                array(
                    'pickup.location.name',
                    'pickupLocation.name',
                    'pickupLocationName',
                    'pickup.name'
                )
            ),

            'Drop-off' => $this->firstValue(
                $order,
                array(
                    'dropoff.location.name',
                    'dropoffLocation.name',
                    'dropoffLocationName',
                    'dropoff.name'
                )
            ),

            'Total' => $this->firstValue(
                $order,
                array(
                    'total',
                    'totalPrice',
                    'amount',
                    'price.total'
                )
            ),

            'Currency' => $this->firstValue(
                $order,
                array(
                    'currency',
                    'currencyCode',
                    'price.currency'
                )
            )
        );
    }

    private function firstValue(array $source, array $paths)
    {
        foreach ($paths as $path) {

            $value = $this->pathValue(
                $source,
                $path
            );

            if ($value !== null && $value !== '') {

                if (is_array($value)) {
                    return json_encode(
                        $value,
                        JSON_UNESCAPED_UNICODE |
                        JSON_UNESCAPED_SLASHES
                    );
                }

                return (string)$value;
            }
        }

        return '';
    }

    private function pathValue(array $source, $path)
    {
        $value = $source;

        foreach (explode('.', $path) as $part) {

            if (
                !is_array($value) ||
                !array_key_exists($part, $value)
            ) {
                return null;
            }

            $value = $value[$part];
        }

        return $value;
    }

    private function prettyJson($value)
    {
        return json_encode(
            $value,
            JSON_PRETTY_PRINT |
            JSON_UNESCAPED_UNICODE |
            JSON_UNESCAPED_SLASHES
        );
    }
}