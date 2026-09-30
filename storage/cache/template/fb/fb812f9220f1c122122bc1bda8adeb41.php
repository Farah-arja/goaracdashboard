<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* sale/order_info.twig */
class __TwigTemplate_cb94526facb8cfd4e515f0ae00f1179c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\" class=\"order-info-page\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        ";
        // line 6
        if (((array_key_exists("import_reservation_url", $context)) ? (_twig_default_filter(($context["import_reservation_url"] ?? null), "")) : (""))) {
            // line 7
            echo "        <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#import-reservation-modal\" title=\"Import Reservation\"><i class=\"fa fa-cloud-download\"></i> Import Reservation</button>
        ";
        }
        // line 9
        echo "        ";
        if (((array_key_exists("admin_pdf_url", $context)) ? (_twig_default_filter(($context["admin_pdf_url"] ?? null), "")) : (""))) {
            // line 10
            echo "        <a href=\"";
            echo ($context["admin_pdf_url"] ?? null);
            echo "\" target=\"_blank\" rel=\"noopener\" data-toggle=\"tooltip\" title=\"Download customer voucher PDF\" class=\"btn btn-success\"><i class=\"fa fa-download\"></i></a>
        ";
        }
        // line 12
        echo "        <a href=\"";
        echo ($context["edit"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_edit"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
        <a href=\"";
        // line 13
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 15
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 18);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 18);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid order-info-sections\">
    ";
        // line 24
        $context["is_pending"] = (($context["order_status_id"] ?? null) == 1);
        // line 25
        echo "
    <div class=\"order-info-hero-summary\">
      <div class=\"order-info-hero-title\">
        <div class=\"order-info-eyebrow\">Reservation overview</div>
        <h2>Order #";
        // line 29
        echo ($context["order_id"] ?? null);
        if (((array_key_exists("reservation_number", $context)) ? (_twig_default_filter(($context["reservation_number"] ?? null), "")) : (""))) {
            echo " · ";
            echo ($context["reservation_number"] ?? null);
        }
        echo "</h2>
        <div class=\"order-info-hero-meta\">
          <span class=\"label label-order-status\">";
        // line 31
        echo ($context["order_status"] ?? null);
        echo "</span>
          ";
        // line 32
        if (((array_key_exists("provider_name", $context)) ? (_twig_default_filter(($context["provider_name"] ?? null), "")) : (""))) {
            echo "<span>";
            echo ($context["provider_name"] ?? null);
            echo "</span>";
        }
        // line 33
        echo "          ";
        if (((array_key_exists("date_added", $context)) ? (_twig_default_filter(($context["date_added"] ?? null), "")) : (""))) {
            echo "<span>";
            echo ($context["date_added"] ?? null);
            echo "</span>";
        }
        // line 34
        echo "        </div>
      </div>
      <div class=\"order-info-kpi-grid\">
        <div class=\"order-info-kpi\">
          <span>Reservation data</span>
          <strong>";
        // line 39
        echo ((twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "full_name", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "full_name", [], "any", false, false, false, 39), "—")) : ("—"));
        echo "</strong>
          <small>";
        // line 40
        echo ((twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "email", [], "any", true, true, false, 40)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "email", [], "any", false, false, false, 40), "—")) : ("—"));
        echo "</small>
        </div>
        <div class=\"order-info-kpi\">
          <span>Customer account</span>
          <strong>";
        // line 44
        echo ((twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "label", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "label", [], "any", false, false, false, 44), "PUBLIC CUSTOMER")) : ("PUBLIC CUSTOMER"));
        echo "</strong>
          <small>";
        // line 45
        if (((twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "email", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "email", [], "any", false, false, false, 45), "")) : (""))) {
            echo twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "email", [], "any", false, false, false, 45);
        } elseif (((twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "telephone", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "telephone", [], "any", false, false, false, 45), "")) : (""))) {
            echo twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "telephone", [], "any", false, false, false, 45);
        } else {
            echo "Guest reservation";
        }
        echo "</small>
        </div>
        <div class=\"order-info-kpi\">
          <span>Provider reservation</span>
          <strong>";
        // line 49
        echo ((array_key_exists("reservation_id", $context)) ? (_twig_default_filter(($context["reservation_id"] ?? null), "—")) : ("—"));
        echo "</strong>
          <small>";
        // line 50
        echo ((array_key_exists("provider_order_id", $context)) ? (_twig_default_filter(($context["provider_order_id"] ?? null), "No provider order yet")) : ("No provider order yet"));
        echo "</small>
        </div>
      </div>
    </div>

    ";
        // line 55
        if (array_key_exists("financial_summary", $context)) {
            // line 56
            echo "    <div class=\"order-financial-strip\">
      <div class=\"order-financial-item\">
        <span>BUY PRICE</span>
        <strong>";
            // line 59
            echo ((twig_get_attribute($this->env, $this->source, ($context["financial_summary"] ?? null), "buy_total", [], "any", true, true, false, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["financial_summary"] ?? null), "buy_total", [], "any", false, false, false, 59), "-")) : ("-"));
            echo "</strong>
        <small>Yolcu cost in TRY</small>
      </div>
      <div class=\"order-financial-item\">
        <span>SELL PRICE</span>
        <strong>";
            // line 64
            echo ((twig_get_attribute($this->env, $this->source, ($context["financial_summary"] ?? null), "sell_total", [], "any", true, true, false, 64)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["financial_summary"] ?? null), "sell_total", [], "any", false, false, false, 64), "-")) : ("-"));
            echo "</strong>
        <small>Customer charged amount</small>
      </div>
      <div class=\"order-financial-item order-financial-profit\">
        <span>PROFIT</span>
        <strong>";
            // line 69
            echo ((twig_get_attribute($this->env, $this->source, ($context["financial_summary"] ?? null), "profit_total", [], "any", true, true, false, 69)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["financial_summary"] ?? null), "profit_total", [], "any", false, false, false, 69), "-")) : ("-"));
            echo "</strong>
        <small>Always calculated in TRY</small>
      </div>
    </div>
    ";
        }
        // line 74
        echo "
    <div class=\"panel panel-default order-info-panel order-info-panel-order\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-shopping-cart\"></i> ";
        // line 77
        echo ($context["text_order_detail"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"row\">
          <div class=\"col-sm-6\">
            <dl class=\"dl-horizontal order-info-dl\">
\t              <dt>";
        // line 83
        echo ($context["text_order_id"] ?? null);
        echo "</dt>
\t              <dd>";
        // line 84
        echo ($context["order_id"] ?? null);
        echo "</dd>
\t              <dt>";
        // line 85
        echo ($context["text_reservation_number"] ?? null);
        echo "</dt>
\t              <dd><strong>";
        // line 86
        echo ((array_key_exists("reservation_number", $context)) ? (_twig_default_filter(($context["reservation_number"] ?? null), "—")) : ("—"));
        echo "</strong></dd>
\t              ";
        // line 87
        if ( !($context["is_pending"] ?? null)) {
            // line 88
            echo "              <dt>";
            echo ($context["text_provider_order_id"] ?? null);
            echo "</dt>
              <dd>";
            // line 89
            echo ($context["provider_order_id"] ?? null);
            echo "</dd>
              <dt>";
            // line 90
            echo ($context["text_provider_name"] ?? null);
            echo "</dt>
              <dd>";
            // line 91
            echo ($context["provider_name"] ?? null);
            echo "</dd>
              <dt>";
            // line 92
            echo ($context["text_reservation_id"] ?? null);
            echo "</dt>
              <dd>";
            // line 93
            echo ($context["reservation_id"] ?? null);
            echo "</dd>
              ";
        }
        // line 95
        echo "            </dl>
          </div>
          <div class=\"col-sm-6\">
            <dl class=\"dl-horizontal order-info-dl\">
              <dt>";
        // line 99
        echo ($context["text_order_status"] ?? null);
        echo "</dt>
              <dd><span class=\"label label-order-status\">";
        // line 100
        echo ($context["order_status"] ?? null);
        echo "</span></dd>
              <dt>";
        // line 101
        echo ($context["text_date_added"] ?? null);
        echo "</dt>
              <dd>";
        // line 102
        echo ($context["date_added"] ?? null);
        echo "</dd>
              <dt>";
        // line 103
        echo ($context["text_date_modified"] ?? null);
        echo "</dt>
              <dd>";
        // line 104
        echo ($context["date_modified"] ?? null);
        echo "</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>

    ";
        // line 111
        if (($context["car_details"] ?? null)) {
            // line 112
            echo "    <div class=\"panel panel-default order-info-panel order-info-panel-car\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-car\"></i> Car / Vehicle</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"order-info-car-hero\">
          ";
            // line 118
            if ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "image", [], "any", true, true, false, 118) && twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "image", [], "any", false, false, false, 118))) {
                // line 119
                echo "          <div class=\"order-info-car-image-wrap\">
            <img src=\"";
                // line 120
                echo twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "image", [], "any", false, false, false, 120);
                echo "\" alt=\"";
                echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "brand", [], "any", true, true, false, 120)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "brand", [], "any", false, false, false, 120), "")) : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "model", [], "any", true, true, false, 120)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "model", [], "any", false, false, false, 120), "")) : (""));
                echo "\" class=\"order-info-car-image\" />
          </div>
          ";
            }
            // line 123
            echo "          <div class=\"order-info-car-hero-content\">
            <div class=\"order-info-car-title\">";
            // line 124
            echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "brand", [], "any", true, true, false, 124)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "brand", [], "any", false, false, false, 124), "")) : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "model", [], "any", true, true, false, 124)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "model", [], "any", false, false, false, 124), "")) : (""));
            echo "</div>
            ";
            // line 125
            if ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "class", [], "any", true, true, false, 125) && twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "class", [], "any", false, false, false, 125))) {
                // line 126
                echo "            <div class=\"order-info-car-class\">";
                echo twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "class", [], "any", false, false, false, 126);
                echo "</div>
            ";
            }
            // line 128
            echo "            <div class=\"order-info-car-meta\">
              <span class=\"order-info-badge\">";
            // line 129
            echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "seatCount", [], "any", true, true, false, 129)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "seatCount", [], "any", false, false, false, 129), "—")) : ("—"));
            echo " <i class=\"fa fa-users\"></i></span>
              <span class=\"order-info-badge\">";
            // line 130
            echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "transmission", [], "any", true, true, false, 130)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "transmission", [], "any", false, false, false, 130), "—")) : ("—"));
            echo "</span>
              <span class=\"order-info-badge\">";
            // line 131
            echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "fuel", [], "any", true, true, false, 131)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "fuel", [], "any", false, false, false, 131), "—")) : ("—"));
            echo "</span>
              <span class=\"order-info-badge\">";
            // line 132
            echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rentalDurationInDays", [], "any", true, true, false, 132)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rentalDurationInDays", [], "any", false, false, false, 132), "—")) : ("—"));
            echo " day(s)</span>
              <span class=\"order-info-badge\">";
            // line 133
            echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "deliveryType", [], "any", true, true, false, 133)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "deliveryType", [], "any", false, false, false, 133), "—")) : ("—"));
            echo "</span>
            </div>
            <div class=\"order-info-car-price\">";
            // line 135
            echo ((array_key_exists("car_details_formatted_price", $context)) ? (_twig_default_filter(($context["car_details_formatted_price"] ?? null), ((((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "price", [], "any", true, true, false, 135)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "price", [], "any", false, false, false, 135), "—")) : ("—")) . " ") . ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "currency", [], "any", true, true, false, 135)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "currency", [], "any", false, false, false, 135), "")) : (""))))) : (((((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "price", [], "any", true, true, false, 135)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "price", [], "any", false, false, false, 135), "—")) : ("—")) . " ") . ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "currency", [], "any", true, true, false, 135)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "currency", [], "any", false, false, false, 135), "")) : ("")))));
            echo "</div>
          </div>
        </div>
        ";
            // line 138
            if ((($context["pickup"] ?? null) || ($context["dropoff"] ?? null))) {
                // line 139
                echo "        <div class=\"order-info-appointment\">
          <div class=\"row\">
            ";
                // line 141
                if (($context["pickup"] ?? null)) {
                    // line 142
                    echo "            <div class=\"col-sm-6\">
              <div class=\"order-info-location-card\">
                <div class=\"order-info-location-title\">Pickup</div>
                ";
                    // line 145
                    if (twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "date_time", [], "any", false, false, false, 145)) {
                        // line 146
                        echo "                <div class=\"order-info-location-row\"><span>Date/Time</span><strong>";
                        echo twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "date_time", [], "any", false, false, false, 146);
                        echo "</strong></div>
                ";
                    }
                    // line 148
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "iata", [], "any", false, false, false, 148)) {
                        // line 149
                        echo "                <div class=\"order-info-location-row\"><span>Office</span><strong>";
                        echo twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "iata", [], "any", false, false, false, 149);
                        echo "</strong></div>
                ";
                    }
                    // line 151
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "delivery_type", [], "any", false, false, false, 151)) {
                        // line 152
                        echo "                <div class=\"order-info-location-row\"><span>Delivery</span><strong>";
                        echo twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "delivery_type", [], "any", false, false, false, 152);
                        echo "</strong></div>
                ";
                    }
                    // line 154
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "address_lines", [], "any", true, true, false, 154) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "address_lines", [], "any", false, false, false, 154)) > 0))) {
                        // line 155
                        echo "                <div class=\"order-info-location-row\"><span>Address</span>
                  <ul class=\"order-info-location-list\">
                    ";
                        // line 157
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "address_lines", [], "any", false, false, false, 157));
                        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                            // line 158
                            echo "                    <li>";
                            echo $context["line"];
                            echo "</li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 160
                        echo "                  </ul>
                </div>
                ";
                    }
                    // line 163
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "phones", [], "any", true, true, false, 163) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "phones", [], "any", false, false, false, 163)) > 0))) {
                        // line 164
                        echo "                <div class=\"order-info-location-row\"><span>Phone</span><strong>";
                        echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "phones", [], "any", false, false, false, 164), ", ");
                        echo "</strong></div>
                ";
                    }
                    // line 166
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "email", [], "any", false, false, false, 166)) {
                        // line 167
                        echo "                <div class=\"order-info-location-row\"><span>Email</span><strong>";
                        echo twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "email", [], "any", false, false, false, 167);
                        echo "</strong></div>
                ";
                    }
                    // line 169
                    echo "              </div>
            </div>
            ";
                }
                // line 172
                echo "            ";
                if (($context["dropoff"] ?? null)) {
                    // line 173
                    echo "            <div class=\"col-sm-6\">
              <div class=\"order-info-location-card\">
                <div class=\"order-info-location-title\">Dropoff</div>
                ";
                    // line 176
                    if (twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "date_time", [], "any", false, false, false, 176)) {
                        // line 177
                        echo "                <div class=\"order-info-location-row\"><span>Date/Time</span><strong>";
                        echo twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "date_time", [], "any", false, false, false, 177);
                        echo "</strong></div>
                ";
                    }
                    // line 179
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "iata", [], "any", false, false, false, 179)) {
                        // line 180
                        echo "                <div class=\"order-info-location-row\"><span>Office</span><strong>";
                        echo twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "iata", [], "any", false, false, false, 180);
                        echo "</strong></div>
                ";
                    }
                    // line 182
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "delivery_type", [], "any", false, false, false, 182)) {
                        // line 183
                        echo "                <div class=\"order-info-location-row\"><span>Delivery</span><strong>";
                        echo twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "delivery_type", [], "any", false, false, false, 183);
                        echo "</strong></div>
                ";
                    }
                    // line 185
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "address_lines", [], "any", true, true, false, 185) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "address_lines", [], "any", false, false, false, 185)) > 0))) {
                        // line 186
                        echo "                <div class=\"order-info-location-row\"><span>Address</span>
                  <ul class=\"order-info-location-list\">
                    ";
                        // line 188
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "address_lines", [], "any", false, false, false, 188));
                        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                            // line 189
                            echo "                    <li>";
                            echo $context["line"];
                            echo "</li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 191
                        echo "                  </ul>
                </div>
                ";
                    }
                    // line 194
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "phones", [], "any", true, true, false, 194) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "phones", [], "any", false, false, false, 194)) > 0))) {
                        // line 195
                        echo "                <div class=\"order-info-location-row\"><span>Phone</span><strong>";
                        echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "phones", [], "any", false, false, false, 195), ", ");
                        echo "</strong></div>
                ";
                    }
                    // line 197
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "email", [], "any", false, false, false, 197)) {
                        // line 198
                        echo "                <div class=\"order-info-location-row\"><span>Email</span><strong>";
                        echo twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "email", [], "any", false, false, false, 198);
                        echo "</strong></div>
                ";
                    }
                    // line 200
                    echo "              </div>
            </div>
            ";
                }
                // line 203
                echo "          </div>
        </div>
        ";
            }
            // line 206
            echo "        <div class=\"row order-info-car-extras-row\">
          <div class=\"col-sm-7\">
            <div class=\"order-info-car-block\">
              <div class=\"order-info-block-header\">
                <div class=\"order-info-block-title\">Car details</div>
                ";
            // line 211
            if ( !($context["is_pending"] ?? null)) {
                // line 212
                echo "                <div class=\"order-info-block-total\">
                  <span class=\"text-muted\">";
                // line 213
                echo ($context["text_total"] ?? null);
                echo "</span>
                  <strong class=\"text-success\">";
                // line 214
                echo ((array_key_exists("provider_total", $context)) ? (_twig_default_filter(($context["provider_total"] ?? null), ($context["total"] ?? null))) : (($context["total"] ?? null)));
                echo "</strong>
                </div>
                ";
            }
            // line 217
            echo "              </div>
              <div class=\"row order-info-car-details\">
                <div class=\"col-sm-6\">
                  <dl class=\"dl-horizontal order-info-dl\">
                    <dt>Brand</dt>
                    <dd>";
            // line 222
            echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "brand", [], "any", true, true, false, 222)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "brand", [], "any", false, false, false, 222), "—")) : ("—"));
            echo "</dd>
                    <dt>Model</dt>
                    <dd>";
            // line 224
            echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "model", [], "any", true, true, false, 224)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "model", [], "any", false, false, false, 224), "—")) : ("—"));
            echo "</dd>
                    ";
            // line 225
            if ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "class", [], "any", true, true, false, 225) && twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "class", [], "any", false, false, false, 225))) {
                // line 226
                echo "                    <dt>Class</dt>
                    <dd>";
                // line 227
                echo twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "class", [], "any", false, false, false, 227);
                echo "</dd>
                    ";
            }
            // line 229
            echo "                    <dt>Seats</dt>
                    <dd>";
            // line 230
            echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "seatCount", [], "any", true, true, false, 230)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "seatCount", [], "any", false, false, false, 230), "—")) : ("—"));
            echo "</dd>
                    <dt>Transmission</dt>
                    <dd>";
            // line 232
            echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "transmission", [], "any", true, true, false, 232)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "transmission", [], "any", false, false, false, 232), "—")) : ("—"));
            echo "</dd>
                    <dt>Fuel</dt>
                    <dd>";
            // line 234
            echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "fuel", [], "any", true, true, false, 234)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "fuel", [], "any", false, false, false, 234), "—")) : ("—"));
            echo "</dd>
                    <dt>Rental duration</dt>
                    <dd>";
            // line 236
            echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rentalDurationInDays", [], "any", true, true, false, 236)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rentalDurationInDays", [], "any", false, false, false, 236), "—")) : ("—"));
            echo " day(s)</dd>
                    <dt>Delivery type</dt>
                    <dd>";
            // line 238
            echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "deliveryType", [], "any", true, true, false, 238)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "deliveryType", [], "any", false, false, false, 238), "—")) : ("—"));
            echo "</dd>
                  </dl>
                </div>
                <div class=\"col-sm-6\">
                  <dl class=\"dl-horizontal order-info-dl\">
                    <dt>Price</dt>
                    <dd><strong class=\"text-success\">";
            // line 244
            echo ((array_key_exists("car_details_formatted_price", $context)) ? (_twig_default_filter(($context["car_details_formatted_price"] ?? null), ((((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "price", [], "any", true, true, false, 244)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "price", [], "any", false, false, false, 244), "—")) : ("—")) . " ") . ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "currency", [], "any", true, true, false, 244)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "currency", [], "any", false, false, false, 244), "")) : (""))))) : (((((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "price", [], "any", true, true, false, 244)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "price", [], "any", false, false, false, 244), "—")) : ("—")) . " ") . ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "currency", [], "any", true, true, false, 244)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "currency", [], "any", false, false, false, 244), "")) : ("")))));
            echo "</strong></dd>
                    ";
            // line 245
            if ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", true, true, false, 245) && twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, false, false, 245))) {
                // line 246
                echo "                    <dt>Vendor</dt>
                    <dd class=\"order-info-vendor\">
                      ";
                // line 248
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 248), "logo", [], "any", true, true, false, 248) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, false, false, 248), "logo", [], "any", false, false, false, 248))) {
                    // line 249
                    echo "                      <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, false, false, 249), "logo", [], "any", false, false, false, 249);
                    echo "\" alt=\"";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 249), "displayName", [], "any", true, true, false, 249)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 249), "displayName", [], "any", false, false, false, 249), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, false, false, 249), "name", [], "any", false, false, false, 249))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, false, false, 249), "name", [], "any", false, false, false, 249)));
                    echo "\" class=\"order-info-vendor-logo\" />
                      ";
                }
                // line 251
                echo "                      <span>";
                echo _twig_default_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 251), "displayName", [], "any", true, true, false, 251)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 251), "displayName", [], "any", false, false, false, 251), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, false, false, 251), "name", [], "any", false, false, false, 251))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, false, false, 251), "name", [], "any", false, false, false, 251))), "—");
                echo "</span>
                    </dd>
                    ";
                // line 253
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 253), "telephone", [], "any", true, true, false, 253) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, false, false, 253), "telephone", [], "any", false, false, false, 253))) {
                    // line 254
                    echo "                    <dt>Vendor phone</dt>
                    <dd>";
                    // line 255
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, false, false, 255), "telephone", [], "any", false, false, false, 255);
                    echo "</dd>
                    ";
                }
                // line 257
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 257), "email", [], "any", true, true, false, 257) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, false, false, 257), "email", [], "any", false, false, false, 257))) {
                    // line 258
                    echo "                    <dt>Vendor email</dt>
                    <dd>";
                    // line 259
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, false, false, 259), "email", [], "any", false, false, false, 259);
                    echo "</dd>
                    ";
                }
                // line 261
                echo "                    ";
            }
            // line 262
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rentalConditionsPDF", [], "any", true, true, false, 262) && twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rentalConditionsPDF", [], "any", false, false, false, 262))) {
                // line 263
                echo "                    <dt>Rental conditions</dt>
                    <dd><a href=\"";
                // line 264
                echo twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rentalConditionsPDF", [], "any", false, false, false, 264);
                echo "\" target=\"_blank\" rel=\"noopener\" class=\"order-info-pdf-link\">PDF <i class=\"fa fa-external-link\"></i></a></dd>
                    ";
            }
            // line 266
            echo "                  </dl>
                </div>
              </div>
              ";
            // line 269
            if ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", true, true, false, 269) && twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, false, false, 269))) {
                // line 270
                echo "              <div class=\"order-info-rules order-info-rules-inline\">
                <h4 class=\"order-info-subtitle\">Rules</h4>
                <ul class=\"order-info-rules-list\">
                  ";
                // line 273
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, true, false, 273), "deposit", [], "any", true, true, false, 273) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, false, false, 273), "deposit", [], "any", false, false, false, 273))) {
                    // line 274
                    echo "                  <li>Deposit: ";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, true, false, 274), "deposit", [], "any", false, true, false, 274), "amount", [], "any", true, true, false, 274)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, true, false, 274), "deposit", [], "any", false, true, false, 274), "amount", [], "any", false, false, false, 274), "")) : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, true, false, 274), "deposit", [], "any", false, true, false, 274), "currency", [], "any", true, true, false, 274)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, true, false, 274), "deposit", [], "any", false, true, false, 274), "currency", [], "any", false, false, false, 274), "")) : (""));
                    echo "</li>
                  ";
                }
                // line 276
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, true, false, 276), "rangeLimit", [], "any", true, true, false, 276) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, false, false, 276), "rangeLimit", [], "any", false, false, false, 276))) {
                    // line 277
                    echo "                  <li>";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, false, false, 277), "rangeLimit", [], "any", false, false, false, 277), "unlimited", [], "any", false, false, false, 277)) {
                        echo "Unlimited km";
                    } else {
                        echo "Range limit: ";
                        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, true, false, 277), "rangeLimit", [], "any", false, true, false, 277), "amount", [], "any", true, true, false, 277)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, true, false, 277), "rangeLimit", [], "any", false, true, false, 277), "amount", [], "any", false, false, false, 277), "")) : (""));
                        echo " ";
                        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, true, false, 277), "rangeLimit", [], "any", false, true, false, 277), "unit", [], "any", true, true, false, 277)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, true, false, 277), "rangeLimit", [], "any", false, true, false, 277), "unit", [], "any", false, false, false, 277), "km")) : ("km"));
                        echo " (";
                        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, true, false, 277), "rangeLimit", [], "any", false, true, false, 277), "period", [], "any", true, true, false, 277)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, true, false, 277), "rangeLimit", [], "any", false, true, false, 277), "period", [], "any", false, false, false, 277), "total")) : ("total"));
                        echo ")";
                    }
                    echo "</li>
                  ";
                }
                // line 279
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, true, false, 279), "minDriverAge", [], "any", true, true, false, 279)) {
                    // line 280
                    echo "                  <li>Min. driver age: ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, false, false, 280), "minDriverAge", [], "any", false, false, false, 280);
                    echo "</li>
                  ";
                }
                // line 282
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, true, false, 282), "minLicenseYear", [], "any", true, true, false, 282)) {
                    // line 283
                    echo "                  <li>Min. license years: ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, false, false, 283), "minLicenseYear", [], "any", false, false, false, 283);
                    echo "</li>
                  ";
                }
                // line 285
                echo "                </ul>
              </div>
              ";
            }
            // line 288
            echo "            </div>
          </div>
          <div class=\"col-sm-5\">
            <div class=\"order-info-extras-block\">
              <div class=\"order-info-block-header\">
                <div class=\"order-info-block-title\">Extra Products</div>
                ";
            // line 294
            if ((array_key_exists("extra_products", $context) && (twig_length_filter($this->env, ($context["extra_products"] ?? null)) > 0))) {
                // line 295
                echo "                <div class=\"order-info-block-sub\">";
                echo twig_length_filter($this->env, ($context["extra_products"] ?? null));
                echo " item(s)</div>
                ";
            }
            // line 297
            echo "              </div>
              ";
            // line 298
            if ((array_key_exists("extra_products", $context) && (twig_length_filter($this->env, ($context["extra_products"] ?? null)) > 0))) {
                // line 299
                echo "              <div class=\"order-info-extra-list\">
                ";
                // line 300
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extra_products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                    // line 301
                    echo "                <div class=\"order-info-extra-card\">
                  <div>
                    <strong>";
                    // line 303
                    echo ((twig_get_attribute($this->env, $this->source, $context["extra"], "name", [], "any", true, true, false, 303)) ? (twig_get_attribute($this->env, $this->source, $context["extra"], "name", [], "any", false, false, false, 303)) : (((twig_get_attribute($this->env, $this->source, $context["extra"], "type", [], "any", true, true, false, 303)) ? (twig_get_attribute($this->env, $this->source, $context["extra"], "type", [], "any", false, false, false, 303)) : ("—"))));
                    echo "</strong>
                    <small>Qty ";
                    // line 304
                    echo ((twig_get_attribute($this->env, $this->source, $context["extra"], "quantity", [], "any", true, true, false, 304)) ? (twig_get_attribute($this->env, $this->source, $context["extra"], "quantity", [], "any", false, false, false, 304)) : (1));
                    echo "</small>
                  </div>
                  ";
                    // line 306
                    if ((twig_get_attribute($this->env, $this->source, $context["extra"], "price", [], "any", true, true, false, 306) &&  !(null === twig_get_attribute($this->env, $this->source, $context["extra"], "price", [], "any", false, false, false, 306)))) {
                        // line 307
                        echo "                  <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["extra"], "price", [], "any", false, false, false, 307);
                        if ((twig_get_attribute($this->env, $this->source, $context["extra"], "currency", [], "any", true, true, false, 307) && twig_get_attribute($this->env, $this->source, $context["extra"], "currency", [], "any", false, false, false, 307))) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["extra"], "currency", [], "any", false, false, false, 307);
                        }
                        echo "</span>
                  ";
                    }
                    // line 309
                    echo "                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 311
                echo "              </div>
              ";
            } else {
                // line 313
                echo "              <div class=\"order-info-empty\">No extra products</div>
              ";
            }
            // line 315
            echo "            </div>
          </div>
        </div>
      </div>
    </div>
    ";
        }
        // line 321
        echo "
    <div class=\"panel panel-default order-info-panel order-info-panel-customer\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-user\"></i> Reservation &amp; Customer</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"order-info-customer-grid\">
          <div class=\"order-info-customer-card\">
            <div class=\"order-info-block-title\">Reservation driver</div>
            <dl class=\"dl-horizontal order-info-dl\">
              <dt>Name</dt>
              <dd>";
        // line 332
        echo ((twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "full_name", [], "any", true, true, false, 332)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "full_name", [], "any", false, false, false, 332), "—")) : ("—"));
        echo "</dd>
              <dt>";
        // line 333
        echo ($context["text_passport_or_id"] ?? null);
        echo "</dt>
              <dd>";
        // line 334
        echo ((twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "passport_or_id", [], "any", true, true, false, 334)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "passport_or_id", [], "any", false, false, false, 334), "—")) : ("—"));
        echo "</dd>
              <dt>";
        // line 335
        echo ($context["text_email"] ?? null);
        echo "</dt>
              <dd>";
        // line 336
        echo ((twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "email", [], "any", true, true, false, 336)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "email", [], "any", false, false, false, 336), "—")) : ("—"));
        echo "</dd>
              <dt>";
        // line 337
        echo ($context["text_telephone"] ?? null);
        echo "</dt>
              <dd>";
        // line 338
        echo ((twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "telephone", [], "any", true, true, false, 338)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "telephone", [], "any", false, false, false, 338), "—")) : ("—"));
        echo "</dd>
              <dt>";
        // line 339
        echo ($context["text_language_id"] ?? null);
        echo "</dt>
              <dd>";
        // line 340
        echo ((twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "language_id", [], "any", true, true, false, 340)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "language_id", [], "any", false, false, false, 340), "—")) : ("—"));
        echo "</dd>
            </dl>
          </div>
          <div class=\"order-info-customer-card\">
            <div class=\"order-info-block-title\">Customer account</div>
            ";
        // line 345
        if (twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "is_public", [], "any", false, false, false, 345)) {
            // line 346
            echo "            <div class=\"order-info-public-customer\">PUBLIC CUSTOMER</div>
            <p class=\"text-muted order-info-public-help\">This reservation was created without a logged-in customer account.</p>
            ";
        } else {
            // line 349
            echo "            <dl class=\"dl-horizontal order-info-dl\">
              <dt>";
            // line 350
            echo ($context["text_customer_id"] ?? null);
            echo "</dt>
              <dd><a href=\"";
            // line 351
            echo twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "edit_url", [], "any", false, false, false, 351);
            echo "\" target=\"_blank\" rel=\"noopener\">#";
            echo twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "customer_id", [], "any", false, false, false, 351);
            echo "</a></dd>
              <dt>";
            // line 352
            echo ($context["text_customer_group"] ?? null);
            echo "</dt>
              <dd>";
            // line 353
            echo ((twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "customer_group_id", [], "any", true, true, false, 353)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "customer_group_id", [], "any", false, false, false, 353), "—")) : ("—"));
            echo "</dd>
              <dt>Name</dt>
              <dd>";
            // line 355
            echo _twig_default_filter(((twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "full_name", [], "any", true, true, false, 355)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "full_name", [], "any", false, false, false, 355), twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "label", [], "any", false, false, false, 355))) : (twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "label", [], "any", false, false, false, 355))), "—");
            echo "</dd>
              <dt>";
            // line 356
            echo ($context["text_email"] ?? null);
            echo "</dt>
              <dd>";
            // line 357
            echo ((twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "email", [], "any", true, true, false, 357)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "email", [], "any", false, false, false, 357), "—")) : ("—"));
            echo "</dd>
              <dt>";
            // line 358
            echo ($context["text_telephone"] ?? null);
            echo "</dt>
              <dd>";
            // line 359
            echo ((twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "telephone", [], "any", true, true, false, 359)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "telephone", [], "any", false, false, false, 359), "—")) : ("—"));
            echo "</dd>
            </dl>
            ";
        }
        // line 362
        echo "          </div>
        </div>
      </div>
    </div>

    ";
        // line 367
        if ((array_key_exists("invoice_id", $context) && ($context["invoice_id"] ?? null))) {
            // line 368
            echo "    <div class=\"panel panel-default order-info-panel order-info-panel-invoice\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-file-text-o\"></i> Invoice Information</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"row\">
          <div class=\"col-sm-6\">
            <dl class=\"dl-horizontal order-info-dl\">
              <dt>Invoice ID</dt>
              <dd>";
            // line 377
            echo ($context["invoice_id"] ?? null);
            echo "</dd>
              <dt>Type</dt>
              <dd>";
            // line 379
            echo ((array_key_exists("invoice_type", $context)) ? (_twig_default_filter(($context["invoice_type"] ?? null), "—")) : ("—"));
            echo "</dd>
              ";
            // line 380
            if ((array_key_exists("invoice_type", $context) && (($context["invoice_type"] ?? null) == "corporate company"))) {
                // line 381
                echo "              <dt>Title</dt>
              <dd>";
                // line 382
                echo ((array_key_exists("invoice_title", $context)) ? (_twig_default_filter(($context["invoice_title"] ?? null), "—")) : ("—"));
                echo "</dd>
              <dt>Tax Number</dt>
              <dd>";
                // line 384
                echo ((array_key_exists("invoice_tax_number", $context)) ? (_twig_default_filter(($context["invoice_tax_number"] ?? null), "—")) : ("—"));
                echo "</dd>
              ";
            } elseif ((            // line 385
array_key_exists("invoice_type", $context) && (($context["invoice_type"] ?? null) == "private company"))) {
                // line 386
                echo "              <dt>First Name</dt>
              <dd>";
                // line 387
                echo ((array_key_exists("invoice_firstname", $context)) ? (_twig_default_filter(($context["invoice_firstname"] ?? null), "—")) : ("—"));
                echo "</dd>
              <dt>Last Name</dt>
              <dd>";
                // line 389
                echo ((array_key_exists("invoice_lastname", $context)) ? (_twig_default_filter(($context["invoice_lastname"] ?? null), "—")) : ("—"));
                echo "</dd>
              <dt>Identity Number</dt>
              <dd>";
                // line 391
                echo ((array_key_exists("invoice_identity_number", $context)) ? (_twig_default_filter(($context["invoice_identity_number"] ?? null), "—")) : ("—"));
                echo "</dd>
              ";
            }
            // line 393
            echo "              <dt>Tax Office</dt>
              <dd>";
            // line 394
            echo ((array_key_exists("invoice_tax_office", $context)) ? (_twig_default_filter(($context["invoice_tax_office"] ?? null), "—")) : ("—"));
            echo "</dd>
            </dl>
          </div>
          <div class=\"col-sm-6\">
            <dl class=\"dl-horizontal order-info-dl\">
              <dt>Country</dt>
              <dd>";
            // line 400
            echo ((array_key_exists("invoice_country", $context)) ? (_twig_default_filter(($context["invoice_country"] ?? null), "—")) : ("—"));
            echo "</dd>
              <dt>City</dt>
              <dd>";
            // line 402
            echo ((array_key_exists("invoice_city", $context)) ? (_twig_default_filter(($context["invoice_city"] ?? null), "—")) : ("—"));
            echo "</dd>
              <dt>District</dt>
              <dd>";
            // line 404
            echo ((array_key_exists("invoice_district", $context)) ? (_twig_default_filter(($context["invoice_district"] ?? null), "—")) : ("—"));
            echo "</dd>
              <dt>ZIP Code</dt>
              <dd>";
            // line 406
            echo ((array_key_exists("invoice_zip_code", $context)) ? (_twig_default_filter(($context["invoice_zip_code"] ?? null), "—")) : ("—"));
            echo "</dd>
              <dt>Status</dt>
              <dd>";
            // line 408
            echo ((array_key_exists("invoice_status", $context)) ? (_twig_default_filter(($context["invoice_status"] ?? null), "—")) : ("—"));
            echo "</dd>
              <dt>Address</dt>
              <dd>";
            // line 410
            echo ((array_key_exists("invoice_detailed_address", $context)) ? (_twig_default_filter(($context["invoice_detailed_address"] ?? null), ((array_key_exists("invoice_address_description", $context)) ? (_twig_default_filter(($context["invoice_address_description"] ?? null), "—")) : ("—")))) : (((array_key_exists("invoice_address_description", $context)) ? (_twig_default_filter(($context["invoice_address_description"] ?? null), "—")) : ("—"))));
            echo "</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    ";
        }
        // line 417
        echo "
    ";
        // line 418
        if (($context["comment"] ?? null)) {
            // line 419
            echo "    <div class=\"panel panel-default order-info-panel order-info-panel-comment\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-comment\"></i> ";
            // line 421
            echo ($context["text_comment"] ?? null);
            echo "</h3>
      </div>
      <div class=\"panel-body\">
        <p class=\"order-comment\">";
            // line 424
            echo ($context["comment"] ?? null);
            echo "</p>
      </div>
    </div>
\t    ";
        }
        // line 428
        echo "
    <div class=\"panel panel-default order-info-panel order-info-panel-admin-note\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-lock\"></i> Admin note</h3>
      </div>
      <div class=\"panel-body\">
        <p class=\"text-muted order-info-note-help\">Internal note only. This is visible to admin users and is never shown to customers.</p>
        <textarea id=\"order-admin-note\" class=\"form-control order-admin-note-textarea\" rows=\"4\" placeholder=\"Write an internal note for this reservation...\">";
        // line 435
        echo ((array_key_exists("admin_note", $context)) ? (_twig_default_filter(($context["admin_note"] ?? null), "")) : (""));
        echo "</textarea>
        <div class=\"order-admin-note-actions\">
          <button type=\"button\" class=\"btn btn-primary\" id=\"save-admin-note\" data-url=\"";
        // line 437
        echo ((array_key_exists("save_admin_note", $context)) ? (_twig_default_filter(($context["save_admin_note"] ?? null), "")) : (""));
        echo "\"><i class=\"fa fa-save\"></i> Save note</button>
          <span id=\"admin-note-status\" class=\"order-admin-note-status\"></span>
        </div>
      </div>
    </div>

  </div>
</div>
";
        // line 445
        if (((array_key_exists("import_reservation_url", $context)) ? (_twig_default_filter(($context["import_reservation_url"] ?? null), "")) : (""))) {
            // line 446
            echo "<div class=\"modal fade\" id=\"import-reservation-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"import-reservation-title\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"import-reservation-title\">Import Reservation</h4>
      </div>
      <div class=\"modal-body\">
        <p class=\"text-muted\">Use this only after support manually creates a replacement reservation in Yolcu360. The local order passenger, car, supplier reference, totals, and provider response will be replaced from Yolcu360.</p>
        <div class=\"form-group\">
          <label for=\"import-yolcu-order-id\">Yolcu360 order ID</label>
          <input type=\"text\" class=\"form-control\" id=\"import-yolcu-order-id\" value=\"";
            // line 457
            echo ((array_key_exists("import_reservation_default_id", $context)) ? (_twig_default_filter(($context["import_reservation_default_id"] ?? null), "")) : (""));
            echo "\" placeholder=\"YLP_10236090\" autocomplete=\"off\">
        </div>
        <div class=\"alert alert-warning\">
          This does not create a new bank payment. Confirm the payment/refund decision before importing.
        </div>
        <div id=\"import-reservation-status\" class=\"order-import-status\"></div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
        <button type=\"button\" class=\"btn btn-warning\" id=\"submit-import-reservation\" data-url=\"";
            // line 466
            echo ($context["import_reservation_url"] ?? null);
            echo "\"><i class=\"fa fa-cloud-download\"></i> Import Reservation</button>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 472
        echo "<style>
/* Order info page – clean, readable layout */
.order-info-page .order-info-sections { padding-bottom: 24px; }
.order-info-hero-summary {
  display: grid;
  grid-template-columns: minmax(260px, 0.9fr) minmax(0, 1.6fr);
  gap: 18px;
  margin-bottom: 20px;
}
.order-info-hero-title,
.order-info-kpi {
  border: 1px solid #e6eaef;
  border-radius: 10px;
  background: #fff;
  box-shadow: 0 8px 28px rgba(15, 23, 42, 0.04);
}
.order-info-hero-title {
  padding: 20px 22px;
  background: linear-gradient(135deg, #101827 0%, #152238 58%, #0f9aac 100%);
  color: #fff;
}
.order-info-eyebrow {
  color: rgba(255,255,255,0.72);
  font-size: 12px;
  font-weight: 700;
  letter-spacing: .08em;
  text-transform: uppercase;
}
.order-info-hero-title h2 {
  margin: 8px 0 12px;
  font-size: 24px;
  line-height: 1.25;
  font-weight: 700;
}
\t.order-info-hero-meta {
\t  display: flex;
\t  flex-wrap: wrap;
\t  gap: 8px;
  align-items: center;
\t  color: rgba(255,255,255,0.82);
\t  font-size: 12px;
\t}
\t.order-financial-strip {
\t  display: grid;
\t  grid-template-columns: repeat(3, minmax(0, 1fr));
\t  gap: 12px;
\t  margin: -8px 0 20px;
\t}
\t.order-financial-item {
\t  border: 1px solid #e6eaef;
\t  border-radius: 10px;
\t  background: #fff;
\t  padding: 14px 16px;
\t  box-shadow: 0 8px 24px rgba(15, 23, 42, 0.04);
\t}
\t.order-financial-item span {
\t  display: block;
\t  color: #6b7280;
\t  font-size: 11px;
\t  font-weight: 700;
\t  letter-spacing: .06em;
\t}
\t.order-financial-item strong {
\t  display: block;
\t  color: #111827;
\t  font-size: 18px;
\t  margin-top: 6px;
\t}
\t.order-financial-item small {
\t  display: block;
\t  color: #6b7280;
\t  margin-top: 4px;
\t}
\t.order-financial-profit {
\t  border-color: #bfead8;
\t  background: #f5fffb;
\t}
\t.order-financial-profit strong { color: #12805c; }
\t.order-info-kpi-grid {
\t  display: grid;
\t  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 12px;
}
.order-info-kpi {
  min-width: 0;
  padding: 16px;
}
.order-info-kpi span {
  display: block;
  color: #6b7280;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: .04em;
  text-transform: uppercase;
}
.order-info-kpi strong {
  display: block;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  color: #111827;
  font-size: 17px;
  margin-top: 8px;
}
.order-info-kpi small {
  display: block;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  color: #6b7280;
  font-size: 12px;
  margin-top: 5px;
}
.order-info-page .order-info-panel {
  border-radius: 6px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.06);
  margin-bottom: 20px;
  border-color: #e8e8e8;
}
.order-info-page .order-info-panel .panel-heading {
  border-radius: 6px 6px 0 0;
  background: #fafafa;
  border-bottom: 1px solid #e8e8e8;
  padding: 12px 16px;
}
.order-info-page .order-info-panel .panel-title {
  margin: 0;
  font-size: 15px;
  font-weight: 600;
  color: #333;
}
.order-info-page .order-info-panel .panel-title .fa { margin-right: 8px; color: #5a5a5a; }
\t.order-info-page .order-info-panel .panel-body { padding: 18px 20px; }
\t.order-admin-note-textarea {
\t  min-height: 96px;
\t  resize: vertical;
\t}
\t.order-admin-note-actions {
\t  display: flex;
\t  align-items: center;
\t  gap: 10px;
\t  margin-top: 12px;
\t}
\t.order-info-note-help {
\t  margin: 0 0 10px;
\t}
\t.order-admin-note-status {
\t  color: #6b7280;
\t  font-size: 12px;
\t}
\t.order-admin-note-status.is-success { color: #12805c; }
.order-admin-note-status.is-error { color: #a94442; }
.order-import-status { min-height: 20px; font-weight: 600; }
.order-import-status.is-success { color: #3c763d; }
.order-import-status.is-error { color: #a94442; }

.order-info-dl.dl-horizontal { margin-bottom: 0; }
.order-info-dl.dl-horizontal dt {
  width: 180px;
  color: #6b6b6b;
  font-weight: 500;
  font-size: 13px;
  padding: 4px 0;
}
.order-info-dl.dl-horizontal dd {
  margin-left: 200px;
  padding: 4px 0;
  font-size: 13px;
}
.label-order-status {
  background: linear-gradient(180deg, #5cb85c 0%, #4cae4c 100%);
  color: #fff;
  padding: 4px 10px;
  border-radius: 4px;
  font-weight: 500;
}

/* Car / Vehicle panel – hero block */
.order-info-panel-car .order-info-car-hero {
  display: flex;
  align-items: flex-start;
  gap: 24px;
  background: linear-gradient(135deg, #f8f9fa 0%, #eef1f4 100%);
  border-radius: 8px;
  padding: 20px 24px;
  margin-bottom: 20px;
  border: 1px solid #e5e8ec;
}
.order-info-car-image-wrap {
  flex-shrink: 0;
  width: 160px;
  height: 100px;
  border-radius: 6px;
  overflow: hidden;
  background: #fff;
  border: 1px solid #e5e8ec;
}
.order-info-car-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.order-info-car-hero-content { flex: 1; min-width: 0; }
.order-info-car-title {
  font-size: 20px;
  font-weight: 700;
  color: #2c3e50;
  margin-bottom: 4px;
  letter-spacing: -0.02em;
}
.order-info-car-class {
  font-size: 13px;
  color: #6b7280;
  margin-bottom: 10px;
  font-weight: 500;
}
.order-info-car-meta { margin-bottom: 12px; }
.order-info-badge {
  display: inline-block;
  background: #fff;
  border: 1px solid #dee2e6;
  border-radius: 20px;
  padding: 4px 12px;
  font-size: 12px;
  color: #495057;
  margin-right: 8px;
  margin-bottom: 6px;
}
.order-info-badge .fa { margin-right: 4px; opacity: 0.8; }
.order-info-car-price {
  font-size: 18px;
  font-weight: 700;
  color: #28a745;
}
.order-info-car-details { margin-top: 8px; }
.order-info-vendor {
  display: flex;
  align-items: center;
  gap: 8px;
}
.order-info-vendor-logo {
  max-height: 28px;
  max-width: 100px;
  object-fit: contain;
  vertical-align: middle;
}
.order-info-pdf-link { font-weight: 500; }
.order-info-rules {
  margin-top: 18px;
  padding-top: 16px;
  border-top: 1px solid #eee;
}
.order-info-subtitle {
  font-size: 13px;
  font-weight: 600;
  color: #555;
  margin: 0 0 10px 0;
}
.order-info-rules-list {
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 13px;
  color: #555;
}
.order-info-rules-list li {
  padding: 4px 0;
  padding-left: 16px;
  position: relative;
}
.order-info-rules-list li::before {
  content: \"•\";
  position: absolute;
  left: 0;
  color: #999;
}
.order-long-value {
  display: block;
  max-height: 80px;
  overflow: auto;
  word-break: break-all;
  font-size: 11px;
  padding: 10px 12px;
  margin-top: 4px;
  background: #f4f4f5;
  border: 1px solid #e5e5e6;
  border-radius: 4px;
  font-family: Consolas, Monaco, monospace;
}
.order-code-inline {
  font-size: 12px;
  word-break: break-all;
  background: #f4f4f5;
  padding: 3px 8px;
  border-radius: 4px;
  font-family: Consolas, Monaco, monospace;
}

/* Extra products table */
.order-info-extras-table thead th {
  background: #f8f9fa;
  font-weight: 600;
  font-size: 13px;
  color: #495057;
  border-color: #dee2e6;
  padding: 10px 12px;
}
.order-info-extras-table tbody td { padding: 10px 12px; font-size: 13px; }

/* Car + extras side-by-side */
.order-info-car-extras-row { margin-top: 8px; }
.order-info-car-block, .order-info-extras-block {
  border: 1px solid #eee;
  border-radius: 8px;
  background: #fff;
  padding: 14px 16px;
}
.order-info-extras-block { background: #fafbfc; border-color: #e6eaee; }
.order-info-appointment { margin: 16px 0 10px; }
.order-info-location-card {
  border: 1px solid #e6eaee;
  background: #fff;
  border-radius: 8px;
  padding: 14px 16px;
  margin-bottom: 12px;
}
.order-info-location-title {
  font-size: 13px;
  font-weight: 700;
  color: #374151;
  margin-bottom: 10px;
}
.order-info-location-row {
  display: flex;
  gap: 12px;
  font-size: 12px;
  color: #4b5563;
  margin-bottom: 6px;
}
.order-info-location-row span {
  min-width: 70px;
  color: #6b7280;
}
.order-info-location-row strong {
  min-width: 0;
  font-weight: 600;
  color: #111827;
  overflow-wrap: anywhere;
}
.order-info-location-list {
  list-style: none;
  margin: 0;
  padding: 0;
  font-size: 12px;
  color: #4b5563;
}
.order-info-location-list li { padding: 2px 0; }
.order-info-block-header {
  display: flex;
  align-items: baseline;
  justify-content: space-between;
  gap: 12px;
  margin-bottom: 10px;
}
.order-info-block-title { font-size: 13px; font-weight: 700; color: #374151; }
.order-info-block-sub { font-size: 12px; color: #6b7280; white-space: nowrap; }
.order-info-block-total { font-size: 13px; white-space: nowrap; }
.order-info-block-total .text-muted { margin-right: 8px; }
.order-info-empty { color: #6b7280; font-size: 13px; padding: 10px 2px; }
.order-info-extra-list {
  display: grid;
  gap: 10px;
}
.order-info-extra-card {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  border: 1px solid #edf0f4;
  border-radius: 10px;
  background: #fbfcfd;
  padding: 12px 14px;
}
.order-info-extra-card strong {
  display: block;
  color: #111827;
  font-size: 13px;
}
.order-info-extra-card small {
  display: block;
  color: #6b7280;
  margin-top: 3px;
}
.order-info-extra-card span {
  color: #111827;
  font-weight: 700;
  white-space: nowrap;
}
.order-info-customer-grid {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 14px;
}
.order-info-customer-card {
  min-width: 0;
  border: 1px solid #eef1f5;
  border-radius: 10px;
  background: #fbfcfd;
  padding: 14px 16px;
}
.order-info-customer-card .order-info-block-title {
  margin-bottom: 10px;
  color: #111827;
}
.order-info-public-customer {
  display: inline-flex;
  align-items: center;
  border-radius: 999px;
  background: #fff7ed;
  border: 1px solid #fed7aa;
  color: #9a3412;
  font-size: 12px;
  font-weight: 800;
  letter-spacing: .04em;
  padding: 7px 12px;
}
.order-info-public-help {
  margin: 10px 0 0;
}

.order-provider-response {
  max-height: 320px;
  overflow: auto;
  white-space: pre-wrap;
  word-wrap: break-word;
  background: #f8f9fa;
  padding: 14px 16px;
  border: 1px solid #e8e8e8;
  font-size: 12px;
  border-radius: 4px;
  font-family: Consolas, Monaco, monospace;
}
.order-provider-response .jsk { color: #31708f; }
.order-provider-response .jsn { color: #3c763d; }
.order-provider-response .jsl { color: #8a6d3b; }
.order-comment {
  margin: 0;
  padding: 12px 16px;
  background: #f8fbfd;
  border-left: 4px solid #5bc0de;
  border-radius: 0 4px 4px 0;
  font-size: 13px;
  line-height: 1.5;
}
.api-audit-filters {
  display: flex;
  gap: 8px;
  flex-wrap: wrap;
  margin-bottom: 16px;
}
.api-audit-filters .btn.active {
  background: #1f2937;
  color: #fff;
  border-color: #1f2937;
}
.api-audit-timeline {
  position: relative;
  margin-left: 10px;
  padding-left: 22px;
  border-left: 2px solid #e5e7eb;
}
.api-audit-item {
  position: relative;
  margin-bottom: 14px;
}
.api-audit-item.is-hidden { display: none; }
.api-audit-marker {
  position: absolute;
  left: -31px;
  top: 18px;
  width: 16px;
  height: 16px;
  border: 3px solid #5bc0de;
  background: #fff;
  border-radius: 50%;
}
.api-audit-item.is-failed .api-audit-marker {
  border-color: #d9534f;
}
.api-audit-card {
  border: 1px solid #e5e7eb;
  border-radius: 6px;
  background: #fff;
  padding: 14px;
}
.api-audit-item.is-failed .api-audit-card {
  border-color: #f0b9b7;
  background: #fffafa;
}
.api-audit-card-head {
  display: flex;
  justify-content: space-between;
  gap: 12px;
  align-items: flex-start;
}
.api-audit-step {
  font-weight: 700;
  color: #111827;
}
.api-audit-route,
.api-audit-status small,
.api-audit-endpoint {
  color: #6b7280;
  font-size: 12px;
}
.api-audit-status {
  text-align: right;
  white-space: nowrap;
}
.api-audit-facts {
  display: grid;
  grid-template-columns: repeat(5, minmax(0, 1fr));
  gap: 8px;
  margin-top: 12px;
}
.api-audit-facts span {
  background: #f9fafb;
  border: 1px solid #edf0f2;
  border-radius: 4px;
  padding: 8px;
  font-size: 12px;
}
.api-audit-facts strong {
  display: block;
  color: #6b7280;
  font-size: 11px;
  text-transform: uppercase;
}
.api-audit-endpoint {
  margin-top: 10px;
  overflow-wrap: anywhere;
}
.api-audit-error {
  margin-top: 10px;
  padding: 8px 10px;
  border-left: 4px solid #d9534f;
  background: #fff2f2;
  color: #a94442;
  font-size: 12px;
}
.api-audit-json-grid {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 12px;
  margin-top: 12px;
}
.api-audit-details {
  border: 1px solid #e5e7eb;
  border-radius: 4px;
  padding: 8px;
  background: #fcfcfd;
}
.api-audit-details summary {
  cursor: pointer;
  font-weight: 600;
}
.api-audit-copy {
  float: right;
  margin: -24px 0 6px 8px;
}
.api-audit-copy.copied {
  color: #5cb85c;
}
\t@media (max-width: 1199px) {
\t  .order-info-hero-summary { grid-template-columns: 1fr; }
\t  .order-info-kpi-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
\t  .order-financial-strip { grid-template-columns: repeat(3, minmax(0, 1fr)); }
\t}
\t@media (max-width: 767px) {
  .order-info-page .page-header .pull-right {
    float: none !important;
    margin-bottom: 12px;
  }
  .order-info-hero-title h2 { font-size: 20px; }
\t  .order-info-kpi-grid,
\t  .order-info-customer-grid,
\t  .order-financial-strip,
\t  .api-audit-json-grid,
\t  .api-audit-facts {
\t    grid-template-columns: 1fr;
\t  }
  .api-audit-card-head {
    flex-direction: column;
  }
  .api-audit-status {
    text-align: left;
  }
  .order-info-panel-car .order-info-car-hero {
    flex-direction: column;
    padding: 16px;
  }
  .order-info-car-image-wrap {
    width: 100%;
    height: 150px;
  }
  .order-info-dl.dl-horizontal dt {
    width: auto;
    float: none;
    text-align: left;
  }
  .order-info-dl.dl-horizontal dd {
    margin-left: 0;
    margin-bottom: 8px;
  }
  .order-provider-response {
    max-height: 260px;
    font-size: 11px;
  }
}
</style>
<script>
(function() {
  document.addEventListener('DOMContentLoaded', function() {
\t    var noteButton = document.getElementById('save-admin-note');
\t    if (noteButton) {
\t      noteButton.addEventListener('click', function() {
\t        var noteField = document.getElementById('order-admin-note');
\t        var status = document.getElementById('admin-note-status');
\t        var url = noteButton.getAttribute('data-url') || '';
\t        if (!url || !noteField) return;
\t        noteButton.disabled = true;
\t        if (status) {
\t          status.className = 'order-admin-note-status';
\t          status.textContent = 'Saving...';
\t        }
\t        var body = 'admin_note=' + encodeURIComponent(noteField.value || '');
\t        fetch(url, {
\t          method: 'POST',
\t          headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
\t          credentials: 'same-origin',
\t          body: body
\t        }).then(function(response) {
\t          return response.json();
\t        }).then(function(payload) {
\t          if (payload && payload.success) {
\t            if (status) {
\t              status.className = 'order-admin-note-status is-success';
\t              status.textContent = payload.success;
\t            }
\t          } else {
\t            throw new Error((payload && payload.error) || 'Could not save note.');
\t          }
\t        }).catch(function(error) {
\t          if (status) {
\t            status.className = 'order-admin-note-status is-error';
\t            status.textContent = error.message || 'Could not save note.';
\t          }
\t        }).then(function() {
\t          noteButton.disabled = false;
\t        });
\t      });
\t    }
\t    var importButton = document.getElementById('submit-import-reservation');
\t    if (importButton) {
\t      importButton.addEventListener('click', function() {
\t        var input = document.getElementById('import-yolcu-order-id');
\t        var status = document.getElementById('import-reservation-status');
\t        var url = importButton.getAttribute('data-url') || '';
\t        var providerOrderId = input ? (input.value || '').trim() : '';
\t        if (!url || !providerOrderId) {
\t          if (status) {
\t            status.className = 'order-import-status is-error';
\t            status.textContent = 'Yolcu360 order ID is required.';
\t          }
\t          return;
\t        }
\t        importButton.disabled = true;
\t        if (status) {
\t          status.className = 'order-import-status';
\t          status.textContent = 'Importing reservation...';
\t        }
\t        fetch(url, {
\t          method: 'POST',
\t          headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
\t          credentials: 'same-origin',
\t          body: 'yolcu_order_id=' + encodeURIComponent(providerOrderId)
\t        }).then(function(response) {
\t          return response.json();
\t        }).then(function(payload) {
\t          if (payload && payload.success) {
\t            if (status) {
\t              status.className = 'order-import-status is-success';
\t              status.textContent = payload.success + ' Refreshing...';
\t            }
\t            window.setTimeout(function() { window.location.reload(); }, 900);
\t          } else {
\t            throw new Error((payload && payload.error) || 'Reservation import failed.');
\t          }
\t        }).catch(function(error) {
\t          if (status) {
\t            status.className = 'order-import-status is-error';
\t            status.textContent = error.message || 'Reservation import failed.';
\t          }
\t          importButton.disabled = false;
\t        });
\t      });
\t    }
\t    var auditFilterButtons = document.querySelectorAll('[data-api-audit-filter]');
\t    var auditItems = document.querySelectorAll('.api-audit-item');
\t    Array.prototype.forEach.call(auditFilterButtons, function(filterButton) {
\t      filterButton.addEventListener('click', function() {
\t        var filter = filterButton.getAttribute('data-api-audit-filter') || 'all';
\t        Array.prototype.forEach.call(auditFilterButtons, function(button) {
\t          button.classList.toggle('active', button === filterButton);
\t        });
\t        Array.prototype.forEach.call(auditItems, function(item) {
\t          var category = item.getAttribute('data-api-audit-category') || '';
\t          var status = item.getAttribute('data-api-audit-status') || '';
\t          var visible = filter === 'all' || category === filter || (filter === 'failed' && status === 'failed');
\t          item.classList.toggle('is-hidden', !visible);
\t        });
\t      });
\t    });
\t    Array.prototype.forEach.call(document.querySelectorAll('.api-audit-copy'), function(copyButton) {
\t      copyButton.addEventListener('click', function() {
\t        var targetId = copyButton.getAttribute('data-copy-target') || '';
\t        var targetNode = document.getElementById(targetId);
\t        var text = targetNode ? targetNode.textContent : '';
\t        if (!text) return;
\t        function markCopied() {
\t          var icon = copyButton.querySelector('i');
\t          copyButton.classList.add('copied');
\t          if (icon) icon.className = 'fa fa-check';
\t          window.setTimeout(function() {
\t            copyButton.classList.remove('copied');
\t            if (icon) icon.className = 'fa fa-clipboard';
\t          }, 1400);
\t        }
\t        if (navigator.clipboard && navigator.clipboard.writeText) {
\t          navigator.clipboard.writeText(text).then(markCopied);
\t        } else {
\t          var textarea = document.createElement('textarea');
\t          textarea.value = text;
\t          textarea.style.position = 'fixed';
\t          textarea.style.left = '-9999px';
\t          document.body.appendChild(textarea);
\t          textarea.select();
\t          try {
\t            if (document.execCommand('copy')) markCopied();
\t          } catch (e) {}
\t          document.body.removeChild(textarea);
\t        }
\t      });
\t    });
  });
})();
</script>
";
        // line 1229
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "sale/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1890 => 1229,  1131 => 472,  1122 => 466,  1110 => 457,  1097 => 446,  1095 => 445,  1084 => 437,  1079 => 435,  1070 => 428,  1063 => 424,  1057 => 421,  1053 => 419,  1051 => 418,  1048 => 417,  1038 => 410,  1033 => 408,  1028 => 406,  1023 => 404,  1018 => 402,  1013 => 400,  1004 => 394,  1001 => 393,  996 => 391,  991 => 389,  986 => 387,  983 => 386,  981 => 385,  977 => 384,  972 => 382,  969 => 381,  967 => 380,  963 => 379,  958 => 377,  947 => 368,  945 => 367,  938 => 362,  932 => 359,  928 => 358,  924 => 357,  920 => 356,  916 => 355,  911 => 353,  907 => 352,  901 => 351,  897 => 350,  894 => 349,  889 => 346,  887 => 345,  879 => 340,  875 => 339,  871 => 338,  867 => 337,  863 => 336,  859 => 335,  855 => 334,  851 => 333,  847 => 332,  834 => 321,  826 => 315,  822 => 313,  818 => 311,  811 => 309,  801 => 307,  799 => 306,  794 => 304,  790 => 303,  786 => 301,  782 => 300,  779 => 299,  777 => 298,  774 => 297,  768 => 295,  766 => 294,  758 => 288,  753 => 285,  747 => 283,  744 => 282,  738 => 280,  735 => 279,  719 => 277,  716 => 276,  708 => 274,  706 => 273,  701 => 270,  699 => 269,  694 => 266,  689 => 264,  686 => 263,  683 => 262,  680 => 261,  675 => 259,  672 => 258,  669 => 257,  664 => 255,  661 => 254,  659 => 253,  653 => 251,  645 => 249,  643 => 248,  639 => 246,  637 => 245,  633 => 244,  624 => 238,  619 => 236,  614 => 234,  609 => 232,  604 => 230,  601 => 229,  596 => 227,  593 => 226,  591 => 225,  587 => 224,  582 => 222,  575 => 217,  569 => 214,  565 => 213,  562 => 212,  560 => 211,  553 => 206,  548 => 203,  543 => 200,  537 => 198,  534 => 197,  528 => 195,  525 => 194,  520 => 191,  511 => 189,  507 => 188,  503 => 186,  500 => 185,  494 => 183,  491 => 182,  485 => 180,  482 => 179,  476 => 177,  474 => 176,  469 => 173,  466 => 172,  461 => 169,  455 => 167,  452 => 166,  446 => 164,  443 => 163,  438 => 160,  429 => 158,  425 => 157,  421 => 155,  418 => 154,  412 => 152,  409 => 151,  403 => 149,  400 => 148,  394 => 146,  392 => 145,  387 => 142,  385 => 141,  381 => 139,  379 => 138,  373 => 135,  368 => 133,  364 => 132,  360 => 131,  356 => 130,  352 => 129,  349 => 128,  343 => 126,  341 => 125,  335 => 124,  332 => 123,  322 => 120,  319 => 119,  317 => 118,  309 => 112,  307 => 111,  297 => 104,  293 => 103,  289 => 102,  285 => 101,  281 => 100,  277 => 99,  271 => 95,  266 => 93,  262 => 92,  258 => 91,  254 => 90,  250 => 89,  245 => 88,  243 => 87,  239 => 86,  235 => 85,  231 => 84,  227 => 83,  218 => 77,  213 => 74,  205 => 69,  197 => 64,  189 => 59,  184 => 56,  182 => 55,  174 => 50,  170 => 49,  157 => 45,  153 => 44,  146 => 40,  142 => 39,  135 => 34,  128 => 33,  122 => 32,  118 => 31,  109 => 29,  103 => 25,  101 => 24,  95 => 20,  84 => 18,  80 => 17,  75 => 15,  68 => 13,  61 => 12,  55 => 10,  52 => 9,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_info.twig", "");
    }
}
