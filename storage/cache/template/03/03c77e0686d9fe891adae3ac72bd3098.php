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
class __TwigTemplate_9ffa51cef4863de30968bf27ae5d39e5 extends Template
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
        echo "
";
        // line 2
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "

<div id=\"content\">

  ";
        // line 9
        echo "  <div class=\"page-header\">
    <div class=\"container-fluid\">

      <div class=\"pull-right\">

        ";
        // line 14
        if (($context["invoice"] ?? null)) {
            // line 15
            echo "          <a href=\"";
            echo ($context["invoice"] ?? null);
            echo "\"
             target=\"_blank\"
             data-toggle=\"tooltip\"
             title=\"";
            // line 18
            echo ($context["button_invoice_print"] ?? null);
            echo "\"
             class=\"btn btn-info\">
            <i class=\"fa fa-print\"></i>
          </a>
        ";
        }
        // line 23
        echo "
        ";
        // line 24
        if (($context["shipping"] ?? null)) {
            // line 25
            echo "          <a href=\"";
            echo ($context["shipping"] ?? null);
            echo "\"
             target=\"_blank\"
             data-toggle=\"tooltip\"
             title=\"";
            // line 28
            echo ($context["button_shipping_print"] ?? null);
            echo "\"
             class=\"btn btn-info\">
            <i class=\"fa fa-truck\"></i>
          </a>
        ";
        }
        // line 33
        echo "
        <a href=\"";
        // line 34
        echo ($context["edit"] ?? null);
        echo "\"
           data-toggle=\"tooltip\"
           title=\"";
        // line 36
        echo ($context["button_edit"] ?? null);
        echo "\"
           class=\"btn btn-primary\">
          <i class=\"fa fa-pencil\"></i>
        </a>

        ";
        // line 41
        if (($context["cancel"] ?? null)) {
            // line 42
            echo "          <a href=\"";
            echo ($context["cancel"] ?? null);
            echo "\"
             data-toggle=\"tooltip\"
             title=\"";
            // line 44
            echo ($context["button_cancel"] ?? null);
            echo "\"
             class=\"btn btn-danger\">
            <i class=\"fa fa-times\"></i>
          </a>
        ";
        }
        // line 49
        echo "
      </div>

      <h1>";
        // line 52
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      <ul class=\"breadcrumb\">
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 56
            echo "          <li>
            <a href=\"";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 57);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 57);
            echo "</a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "      </ul>

    </div>
  </div>


  ";
        // line 69
        echo "  <div class=\"container-fluid\">

    <style>
      .reservation-page {
        color: #333;
      }

      .reservation-page .card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 1px 3px rgba(0,0,0,.04);
      }

      .reservation-page .card-header {
        padding: 15px 20px;
        border-bottom: 1px solid #eee;
        font-size: 16px;
        font-weight: 600;
      }

      .reservation-page .card-body {
        padding: 20px;
      }

      .reservation-header {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        padding: 22px;
        margin-bottom: 20px;
      }

      .reservation-title {
        font-size: 24px;
        font-weight: 600;
        margin: 0 0 8px;
      }

      .reservation-subtitle {
        color: #777;
        font-size: 13px;
      }

      .reservation-meta {
        text-align: right;
      }

      .status-badge {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        background: #f3f4f6;
        color: #555;
        margin-bottom: 8px;
      }

      .provider-badge {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 5px;
        background: #f5f5f5;
        color: #555;
        font-size: 12px;
      }

      .financial-card {
        height: 100%;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        background: #fff;
        padding: 18px;
      }

      .financial-label {
        color: #888;
        font-size: 12px;
        margin-bottom: 7px;
        text-transform: uppercase;
      }

      .financial-value {
        font-size: 22px;
        font-weight: 600;
      }

      .financial-profit {
        color: #28a745;
      }

      .info-row {
        margin-bottom: 14px;
      }

      .info-label {
        color: #888;
        font-size: 12px;
        margin-bottom: 4px;
      }

      .info-value {
        font-size: 14px;
        font-weight: 500;
        word-break: break-word;
      }

      .muted {
        color: #999;
      }

      .car-card {
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
      }

      .car-image-wrapper {
        width: 250px;
        min-height: 220px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #fafafa;
        border-radius: 8px;
        overflow: hidden;
      }

      .car-image-wrapper img {
        max-width: 100%;
        max-height: 220px;
        object-fit: contain;
      }

      .car-main-info {
        flex: 1;
        padding-left: 25px;
        min-width: 300px;
      }

      .car-name {
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 5px;
      }

      .car-class {
        color: #888;
        margin-bottom: 20px;
      }

      .spec-box {
        border: 1px solid #eee;
        border-radius: 7px;
        padding: 12px;
        margin-bottom: 10px;
        min-height: 65px;
      }

      .spec-label {
        font-size: 11px;
        color: #999;
        margin-bottom: 4px;
      }

      .spec-value {
        font-size: 14px;
        font-weight: 600;
      }

      .price-box {
        margin-top: 15px;
        padding: 15px;
        background: #f8f9fa;
        border-radius: 7px;
      }

      .price-box .price-label {
        color: #888;
        font-size: 12px;
      }

      .price-box .price-value {
        font-size: 22px;
        font-weight: 600;
      }

      .location-card {
        height: 100%;
      }

      .location-title {
        font-size: 17px;
        font-weight: 600;
        margin-bottom: 15px;
      }

      .location-date {
        font-size: 15px;
        font-weight: 600;
        margin-bottom: 15px;
      }

      .location-item {
        margin-bottom: 10px;
      }

      .location-item i {
        width: 20px;
        color: #888;
      }

      .vendor-box {
        display: flex;
        align-items: center;
      }

      .vendor-logo {
        width: 100px;
        height: 60px;
        object-fit: contain;
        margin-right: 20px;
      }

      .vendor-name {
        font-size: 18px;
        font-weight: 600;
      }

      .rule-box {
        border: 1px solid #eee;
        border-radius: 7px;
        padding: 15px;
        margin-bottom: 10px;
      }

      .rule-label {
        font-size: 11px;
        color: #999;
        margin-bottom: 5px;
      }

      .rule-value {
        font-size: 15px;
        font-weight: 600;
      }

      .extra-empty {
        text-align: center;
        padding: 25px;
        color: #999;
      }

      .note-box {
        background: #fffdf3;
        border: 1px solid #eee2a8;
        border-radius: 7px;
        padding: 15px;
      }

      .admin-note-textarea {
        width: 100%;
        min-height: 120px;
        resize: vertical;
        border: 1px solid #ddd;
        border-radius: 6px;
        padding: 10px;
      }

      .address-lines {
        line-height: 1.7;
      }

      .opening-hours {
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid #eee;
      }

      .opening-hours div {
        font-size: 12px;
        margin-bottom: 4px;
      }

      .reservation-table {
        width: 100%;
      }

      .reservation-table tr {
        border-bottom: 1px solid #eee;
      }

      .reservation-table tr:last-child {
        border-bottom: 0;
      }

      .reservation-table td {
        padding: 11px 5px;
        vertical-align: top;
      }

      .reservation-table td:first-child {
        width: 40%;
        color: #888;
        font-size: 12px;
      }

      @media (max-width: 767px) {
        .reservation-meta {
          text-align: left;
          margin-top: 15px;
        }

        .car-image-wrapper {
          width: 100%;
          margin-bottom: 20px;
        }

        .car-main-info {
          padding-left: 0;
        }
      }
    </style>


    <div class=\"reservation-page\">


      ";
        // line 402
        echo "      <div class=\"reservation-header\">
        <div class=\"row\">

          <div class=\"col-sm-8\">

            <div class=\"reservation-title\">
              Reservation overview
            </div>

            <div class=\"reservation-subtitle\">
              Order #";
        // line 412
        echo ($context["order_id"] ?? null);
        echo "

              ";
        // line 414
        if (($context["reservation_number"] ?? null)) {
            // line 415
            echo "                · ";
            echo ($context["reservation_number"] ?? null);
            echo "
              ";
        }
        // line 417
        echo "            </div>

          </div>

          <div class=\"col-sm-4 reservation-meta\">

            ";
        // line 423
        if (($context["order_status"] ?? null)) {
            // line 424
            echo "              <div>
                <span class=\"status-badge\">
                  ";
            // line 426
            echo ($context["order_status"] ?? null);
            echo "
                </span>
              </div>
            ";
        }
        // line 430
        echo "
            ";
        // line 431
        if (($context["provider_name"] ?? null)) {
            // line 432
            echo "              <span class=\"provider-badge\">
                ";
            // line 433
            echo ($context["provider_name"] ?? null);
            echo "
              </span>
            ";
        }
        // line 436
        echo "
            ";
        // line 437
        if (($context["date_added"] ?? null)) {
            // line 438
            echo "              <div class=\"reservation-subtitle\" style=\"margin-top:8px;\">
                ";
            // line 439
            echo ($context["date_added"] ?? null);
            echo "
              </div>
            ";
        }
        // line 442
        echo "
          </div>

        </div>
      </div>


      ";
        // line 452
        echo "      ";
        if (($context["financial_summary"] ?? null)) {
            // line 453
            echo "        <div class=\"row\">

          <div class=\"col-md-4\">
            <div class=\"financial-card\">

              <div class=\"financial-label\">
                Buy price
              </div>

              <div class=\"financial-value\">
                ";
            // line 463
            echo twig_get_attribute($this->env, $this->source, ($context["financial_summary"] ?? null), "buy_total", [], "any", false, false, false, 463);
            echo "
              </div>

            </div>
          </div>

          <div class=\"col-md-4\">
            <div class=\"financial-card\">

              <div class=\"financial-label\">
                Sell price
              </div>

              <div class=\"financial-value\">
                ";
            // line 477
            echo twig_get_attribute($this->env, $this->source, ($context["financial_summary"] ?? null), "sell_total", [], "any", false, false, false, 477);
            echo "
              </div>

            </div>
          </div>

          <div class=\"col-md-4\">
            <div class=\"financial-card\">

              <div class=\"financial-label\">
                Profit
              </div>

              <div class=\"financial-value financial-profit\">
                ";
            // line 491
            echo twig_get_attribute($this->env, $this->source, ($context["financial_summary"] ?? null), "profit_total", [], "any", false, false, false, 491);
            echo "
              </div>

            </div>
          </div>

        </div>

        <div style=\"height:20px;\"></div>
      ";
        }
        // line 501
        echo "

      ";
        // line 506
        echo "      <div class=\"row\">

        ";
        // line 509
        echo "        <div class=\"col-md-6\">
          <div class=\"card\">

            <div class=\"card-header\">
              <i class=\"fa fa-file-text-o\"></i>
              Reservation Details
            </div>

            <div class=\"card-body\">

              <table class=\"reservation-table\">

                <tr>
                  <td>Order ID</td>
                  <td>
                    <strong>#";
        // line 524
        echo ($context["order_id"] ?? null);
        echo "</strong>
                  </td>
                </tr>

                ";
        // line 528
        if (($context["reservation_number"] ?? null)) {
            // line 529
            echo "                  <tr>
                    <td>Go Araç PNR</td>
                    <td>";
            // line 531
            echo ($context["reservation_number"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 534
        echo "
                ";
        // line 535
        if (($context["provider_order_id"] ?? null)) {
            // line 536
            echo "                  <tr>
                    <td>Provider Reservation</td>
                    <td>";
            // line 538
            echo ($context["provider_order_id"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 541
        echo "
                ";
        // line 542
        if (($context["reservation_id"] ?? null)) {
            // line 543
            echo "                  <tr>
                    <td>Reservation ID</td>
                    <td>";
            // line 545
            echo ($context["reservation_id"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 548
        echo "
                ";
        // line 549
        if (($context["order_status"] ?? null)) {
            // line 550
            echo "                  <tr>
                    <td>Order Status</td>
                    <td>";
            // line 552
            echo ($context["order_status"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 555
        echo "
                ";
        // line 556
        if (($context["date_added"] ?? null)) {
            // line 557
            echo "                  <tr>
                    <td>Date Added</td>
                    <td>";
            // line 559
            echo ($context["date_added"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 562
        echo "
                ";
        // line 563
        if (($context["date_modified"] ?? null)) {
            // line 564
            echo "                  <tr>
                    <td>Date Modified</td>
                    <td>";
            // line 566
            echo ($context["date_modified"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 569
        echo "
              </table>

            </div>
          </div>
        </div>


        ";
        // line 578
        echo "        <div class=\"col-md-6\">
          <div class=\"card\">

            <div class=\"card-header\">
              <i class=\"fa fa-user\"></i>
              Reservation & Customer
            </div>

            <div class=\"card-body\">

              ";
        // line 588
        if (($context["reservation_customer"] ?? null)) {
            // line 589
            echo "
                <div class=\"info-row\">
                  <div class=\"info-label\">
                    Driver Name
                  </div>

                  <div class=\"info-value\">
                    ";
            // line 596
            echo ((twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "full_name", [], "any", true, true, false, 596)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "full_name", [], "any", false, false, false, 596), "—")) : ("—"));
            echo "
                  </div>
                </div>

                <div class=\"info-row\">
                  <div class=\"info-label\">
                    Passport / ID
                  </div>

                  <div class=\"info-value\">
                    ";
            // line 606
            echo ((twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "passport_or_id", [], "any", true, true, false, 606)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "passport_or_id", [], "any", false, false, false, 606), "—")) : ("—"));
            echo "
                  </div>
                </div>

                <div class=\"info-row\">
                  <div class=\"info-label\">
                    Email
                  </div>

                  <div class=\"info-value\">
                    ";
            // line 616
            echo ((twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "email", [], "any", true, true, false, 616)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "email", [], "any", false, false, false, 616), "—")) : ("—"));
            echo "
                  </div>
                </div>

                <div class=\"info-row\">
                  <div class=\"info-label\">
                    Telephone
                  </div>

                  <div class=\"info-value\">
                    ";
            // line 626
            echo ((twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "telephone", [], "any", true, true, false, 626)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "telephone", [], "any", false, false, false, 626), "—")) : ("—"));
            echo "
                  </div>
                </div>

                ";
            // line 630
            if (twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "language_id", [], "any", false, false, false, 630)) {
                // line 631
                echo "                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      Language ID
                    </div>

                    <div class=\"info-value\">
                      ";
                // line 637
                echo twig_get_attribute($this->env, $this->source, ($context["reservation_customer"] ?? null), "language_id", [], "any", false, false, false, 637);
                echo "
                    </div>
                  </div>
                ";
            }
            // line 641
            echo "
              ";
        }
        // line 643
        echo "
            </div>
          </div>
        </div>

      </div>


      ";
        // line 654
        echo "      ";
        if (($context["account_customer"] ?? null)) {
            // line 655
            echo "        <div class=\"card\">

          <div class=\"card-header\">
            <i class=\"fa fa-address-card-o\"></i>
            Customer Account
          </div>

          <div class=\"card-body\">

            <div class=\"row\">

              <div class=\"col-md-4\">
                <div class=\"info-row\">

                  <div class=\"info-label\">
                    Customer
                  </div>

                  <div class=\"info-value\">

                    ";
            // line 675
            if (twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "edit_url", [], "any", false, false, false, 675)) {
                // line 676
                echo "                      <a href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "edit_url", [], "any", false, false, false, 676);
                echo "\">
                        ";
                // line 677
                echo ((twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "label", [], "any", true, true, false, 677)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "label", [], "any", false, false, false, 677), "PUBLIC CUSTOMER")) : ("PUBLIC CUSTOMER"));
                echo "
                      </a>
                    ";
            } else {
                // line 680
                echo "                      ";
                echo ((twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "label", [], "any", true, true, false, 680)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "label", [], "any", false, false, false, 680), "PUBLIC CUSTOMER")) : ("PUBLIC CUSTOMER"));
                echo "
                    ";
            }
            // line 682
            echo "
                  </div>

                </div>
              </div>

              <div class=\"col-md-4\">

                <div class=\"info-row\">

                  <div class=\"info-label\">
                    Customer ID
                  </div>

                  <div class=\"info-value\">
                    ";
            // line 697
            if (twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "customer_id", [], "any", false, false, false, 697)) {
                // line 698
                echo "                      ";
                echo twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "customer_id", [], "any", false, false, false, 698);
                echo "
                    ";
            } else {
                // line 700
                echo "                      <span class=\"muted\">Public customer</span>
                    ";
            }
            // line 702
            echo "                  </div>

                </div>

              </div>

              <div class=\"col-md-4\">

                <div class=\"info-row\">

                  <div class=\"info-label\">
                    Email
                  </div>

                  <div class=\"info-value\">
                    ";
            // line 717
            echo ((twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "email", [], "any", true, true, false, 717)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["account_customer"] ?? null), "email", [], "any", false, false, false, 717), "—")) : ("—"));
            echo "
                  </div>

                </div>

              </div>

            </div>

          </div>
        </div>
      ";
        }
        // line 729
        echo "

      ";
        // line 734
        echo "      ";
        if (($context["car_details"] ?? null)) {
            // line 735
            echo "
        <div class=\"card\">

          <div class=\"card-header\">
            <i class=\"fa fa-car\"></i>
            Car / Vehicle
          </div>

          <div class=\"card-body\">

            <div class=\"car-card\">

              ";
            // line 748
            echo "              <div class=\"car-image-wrapper\">

                ";
            // line 750
            if (twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "image", [], "any", false, false, false, 750)) {
                // line 751
                echo "                  <img src=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "image", [], "any", false, false, false, 751);
                echo "\"
                       alt=\"";
                // line 752
                echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "brand", [], "any", true, true, false, 752)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "brand", [], "any", false, false, false, 752), "Car")) : ("Car"));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "model", [], "any", true, true, false, 752)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "model", [], "any", false, false, false, 752), "")) : (""));
                echo "\">
                ";
            }
            // line 754
            echo "
              </div>


              ";
            // line 759
            echo "              <div class=\"car-main-info\">

                <div class=\"car-name\">

                  ";
            // line 763
            echo ((twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "brand", [], "any", true, true, false, 763)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "brand", [], "any", false, false, false, 763), "")) : (""));
            echo "

                  ";
            // line 765
            if (twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "model", [], "any", false, false, false, 765)) {
                // line 766
                echo "                    ";
                echo twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "model", [], "any", false, false, false, 766);
                echo "
                  ";
            }
            // line 768
            echo "
                </div>

                ";
            // line 771
            if (twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "class", [], "any", false, false, false, 771)) {
                // line 772
                echo "                  <div class=\"car-class\">
                    ";
                // line 773
                echo twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "class", [], "any", false, false, false, 773);
                echo "
                  </div>
                ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 775
($context["car_details"] ?? null), "segment", [], "any", false, false, false, 775)) {
                // line 776
                echo "                  <div class=\"car-class\">
                    ";
                // line 777
                echo twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "segment", [], "any", false, false, false, 777);
                echo "
                  </div>
                ";
            }
            // line 780
            echo "

                <div class=\"row\">

                  ";
            // line 784
            if (twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "class", [], "any", false, false, false, 784)) {
                // line 785
                echo "                    <div class=\"col-sm-4\">
                      <div class=\"spec-box\">

                        <div class=\"spec-label\">
                          Class
                        </div>

                        <div class=\"spec-value\">
                          ";
                // line 793
                echo twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "class", [], "any", false, false, false, 793);
                echo "
                        </div>

                      </div>
                    </div>
                  ";
            }
            // line 799
            echo "

                  ";
            // line 801
            if (twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "seats", [], "any", true, true, false, 801)) {
                // line 802
                echo "                    <div class=\"col-sm-4\">
                      <div class=\"spec-box\">

                        <div class=\"spec-label\">
                          Seats
                        </div>

                        <div class=\"spec-value\">
                          ";
                // line 810
                echo twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "seats", [], "any", false, false, false, 810);
                echo "
                        </div>

                      </div>
                    </div>
                  ";
            }
            // line 816
            echo "

                  ";
            // line 818
            if (twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "transmission", [], "any", false, false, false, 818)) {
                // line 819
                echo "                    <div class=\"col-sm-4\">
                      <div class=\"spec-box\">

                        <div class=\"spec-label\">
                          Transmission
                        </div>

                        <div class=\"spec-value\">
                          ";
                // line 827
                echo twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "transmission", [], "any", false, false, false, 827);
                echo "
                        </div>

                      </div>
                    </div>
                  ";
            }
            // line 833
            echo "

                  ";
            // line 835
            if (twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "fuel", [], "any", false, false, false, 835)) {
                // line 836
                echo "                    <div class=\"col-sm-4\">
                      <div class=\"spec-box\">

                        <div class=\"spec-label\">
                          Fuel
                        </div>

                        <div class=\"spec-value\">
                          ";
                // line 844
                echo twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "fuel", [], "any", false, false, false, 844);
                echo "
                        </div>

                      </div>
                    </div>
                  ";
            }
            // line 850
            echo "

                  ";
            // line 852
            if (twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "segment", [], "any", false, false, false, 852)) {
                // line 853
                echo "                    <div class=\"col-sm-4\">
                      <div class=\"spec-box\">

                        <div class=\"spec-label\">
                          Segment
                        </div>

                        <div class=\"spec-value\">
                          ";
                // line 861
                echo twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "segment", [], "any", false, false, false, 861);
                echo "
                        </div>

                      </div>
                    </div>
                  ";
            }
            // line 867
            echo "

                  ";
            // line 869
            if (twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "deliveryType", [], "any", false, false, false, 869)) {
                // line 870
                echo "                    <div class=\"col-sm-4\">
                      <div class=\"spec-box\">

                        <div class=\"spec-label\">
                          Delivery Type
                        </div>

                        <div class=\"spec-value\">
                          ";
                // line 878
                echo twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "deliveryType", [], "any", false, false, false, 878);
                echo "
                        </div>

                      </div>
                    </div>
                  ";
            }
            // line 884
            echo "
                </div>


                ";
            // line 888
            if (($context["car_details_formatted_price"] ?? null)) {
                // line 889
                echo "
                  <div class=\"price-box\">

                    <div class=\"price-label\">
                      Provider Price
                    </div>

                    <div class=\"price-value\">
                      ";
                // line 897
                echo ($context["car_details_formatted_price"] ?? null);
                echo "
                    </div>

                  </div>

                ";
            } elseif (            // line 902
($context["provider_total"] ?? null)) {
                // line 903
                echo "
                  <div class=\"price-box\">

                    <div class=\"price-label\">
                      Provider Price
                    </div>

                    <div class=\"price-value\">
                      ";
                // line 911
                echo ($context["provider_total"] ?? null);
                echo "
                    </div>

                  </div>

                ";
            }
            // line 917
            echo "
              </div>

            </div>

          </div>
        </div>

      ";
        }
        // line 926
        echo "

      ";
        // line 931
        echo "      ";
        if ((($context["pickup"] ?? null) || ($context["dropoff"] ?? null))) {
            // line 932
            echo "
        <div class=\"row\">

          ";
            // line 936
            echo "          ";
            if (($context["pickup"] ?? null)) {
                // line 937
                echo "            <div class=\"col-md-6\">

              <div class=\"card location-card\">

                <div class=\"card-header\">
                  <i class=\"fa fa-map-marker\"></i>
                  Pickup
                </div>

                <div class=\"card-body\">

                  ";
                // line 948
                if (twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "label", [], "any", false, false, false, 948)) {
                    // line 949
                    echo "                    <div class=\"location-title\">
                      ";
                    // line 950
                    echo twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "label", [], "any", false, false, false, 950);
                    echo "
                    </div>
                  ";
                }
                // line 953
                echo "
                  ";
                // line 954
                if (twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "date_time", [], "any", false, false, false, 954)) {
                    // line 955
                    echo "                    <div class=\"location-date\">
                      <i class=\"fa fa-calendar\"></i>
                      ";
                    // line 957
                    echo twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "date_time", [], "any", false, false, false, 957);
                    echo "
                    </div>
                  ";
                }
                // line 960
                echo "
                  ";
                // line 961
                if (twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "iata", [], "any", false, false, false, 961)) {
                    // line 962
                    echo "                    <div class=\"location-item\">
                      <i class=\"fa fa-plane\"></i>
                      <strong>IATA:</strong>
                      ";
                    // line 965
                    echo twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "iata", [], "any", false, false, false, 965);
                    echo "
                    </div>
                  ";
                }
                // line 968
                echo "
                  ";
                // line 969
                if (twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "delivery_type", [], "any", false, false, false, 969)) {
                    // line 970
                    echo "                    <div class=\"location-item\">
                      <i class=\"fa fa-exchange\"></i>
                      <strong>Delivery:</strong>
                      ";
                    // line 973
                    echo twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "delivery_type", [], "any", false, false, false, 973);
                    echo "
                    </div>
                  ";
                }
                // line 976
                echo "
                  ";
                // line 977
                if (twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "address_lines", [], "any", false, false, false, 977)) {
                    // line 978
                    echo "                    <div class=\"location-item\">

                      <i class=\"fa fa-home\"></i>
                      <strong>Address:</strong>

                      <div class=\"address-lines\">
                        ";
                    // line 984
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "address_lines", [], "any", false, false, false, 984));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                        // line 985
                        echo "                          ";
                        echo $context["line"];
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 985)) {
                            echo "<br>";
                        }
                        // line 986
                        echo "                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 987
                    echo "                      </div>

                    </div>
                  ";
                }
                // line 991
                echo "
                  ";
                // line 992
                if (twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "phones", [], "any", false, false, false, 992)) {
                    // line 993
                    echo "                    <div class=\"location-item\">

                      <i class=\"fa fa-phone\"></i>
                      <strong>Phone:</strong>

                      ";
                    // line 998
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "phones", [], "any", false, false, false, 998));
                    foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                        // line 999
                        echo "                        <div>";
                        echo $context["phone"];
                        echo "</div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1001
                    echo "
                    </div>
                  ";
                }
                // line 1004
                echo "
                  ";
                // line 1005
                if (twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "email", [], "any", false, false, false, 1005)) {
                    // line 1006
                    echo "                    <div class=\"location-item\">

                      <i class=\"fa fa-envelope\"></i>
                      <strong>Email:</strong>

                      ";
                    // line 1011
                    echo twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "email", [], "any", false, false, false, 1011);
                    echo "

                    </div>
                  ";
                }
                // line 1015
                echo "
                  ";
                // line 1016
                if (twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "opening_hours", [], "any", false, false, false, 1016)) {
                    // line 1017
                    echo "
                    <div class=\"opening-hours\">

                      <strong>Opening Hours</strong>

                      ";
                    // line 1022
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pickup"] ?? null), "opening_hours", [], "any", false, false, false, 1022));
                    foreach ($context['_seq'] as $context["_key"] => $context["hour"]) {
                        // line 1023
                        echo "                        <div>";
                        echo $context["hour"];
                        echo "</div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hour'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1025
                    echo "
                    </div>

                  ";
                }
                // line 1029
                echo "
                </div>
              </div>

            </div>
          ";
            }
            // line 1035
            echo "

          ";
            // line 1038
            echo "          ";
            if (($context["dropoff"] ?? null)) {
                // line 1039
                echo "            <div class=\"col-md-6\">

              <div class=\"card location-card\">

                <div class=\"card-header\">
                  <i class=\"fa fa-map-marker\"></i>
                  Dropoff
                </div>

                <div class=\"card-body\">

                  ";
                // line 1050
                if (twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "label", [], "any", false, false, false, 1050)) {
                    // line 1051
                    echo "                    <div class=\"location-title\">
                      ";
                    // line 1052
                    echo twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "label", [], "any", false, false, false, 1052);
                    echo "
                    </div>
                  ";
                }
                // line 1055
                echo "
                  ";
                // line 1056
                if (twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "date_time", [], "any", false, false, false, 1056)) {
                    // line 1057
                    echo "                    <div class=\"location-date\">
                      <i class=\"fa fa-calendar\"></i>
                      ";
                    // line 1059
                    echo twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "date_time", [], "any", false, false, false, 1059);
                    echo "
                    </div>
                  ";
                }
                // line 1062
                echo "
                  ";
                // line 1063
                if (twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "iata", [], "any", false, false, false, 1063)) {
                    // line 1064
                    echo "                    <div class=\"location-item\">
                      <i class=\"fa fa-plane\"></i>
                      <strong>IATA:</strong>
                      ";
                    // line 1067
                    echo twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "iata", [], "any", false, false, false, 1067);
                    echo "
                    </div>
                  ";
                }
                // line 1070
                echo "
                  ";
                // line 1071
                if (twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "delivery_type", [], "any", false, false, false, 1071)) {
                    // line 1072
                    echo "                    <div class=\"location-item\">
                      <i class=\"fa fa-exchange\"></i>
                      <strong>Delivery:</strong>
                      ";
                    // line 1075
                    echo twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "delivery_type", [], "any", false, false, false, 1075);
                    echo "
                    </div>
                  ";
                }
                // line 1078
                echo "
                  ";
                // line 1079
                if (twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "address_lines", [], "any", false, false, false, 1079)) {
                    // line 1080
                    echo "                    <div class=\"location-item\">

                      <i class=\"fa fa-home\"></i>
                      <strong>Address:</strong>

                      <div class=\"address-lines\">
                        ";
                    // line 1086
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "address_lines", [], "any", false, false, false, 1086));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                        // line 1087
                        echo "                          ";
                        echo $context["line"];
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1087)) {
                            echo "<br>";
                        }
                        // line 1088
                        echo "                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1089
                    echo "                      </div>

                    </div>
                  ";
                }
                // line 1093
                echo "
                  ";
                // line 1094
                if (twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "phones", [], "any", false, false, false, 1094)) {
                    // line 1095
                    echo "                    <div class=\"location-item\">

                      <i class=\"fa fa-phone\"></i>
                      <strong>Phone:</strong>

                      ";
                    // line 1100
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "phones", [], "any", false, false, false, 1100));
                    foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                        // line 1101
                        echo "                        <div>";
                        echo $context["phone"];
                        echo "</div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1103
                    echo "
                    </div>
                  ";
                }
                // line 1106
                echo "
                  ";
                // line 1107
                if (twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "email", [], "any", false, false, false, 1107)) {
                    // line 1108
                    echo "                    <div class=\"location-item\">

                      <i class=\"fa fa-envelope\"></i>
                      <strong>Email:</strong>

                      ";
                    // line 1113
                    echo twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "email", [], "any", false, false, false, 1113);
                    echo "

                    </div>
                  ";
                }
                // line 1117
                echo "
                  ";
                // line 1118
                if (twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "opening_hours", [], "any", false, false, false, 1118)) {
                    // line 1119
                    echo "
                    <div class=\"opening-hours\">

                      <strong>Opening Hours</strong>

                      ";
                    // line 1124
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["dropoff"] ?? null), "opening_hours", [], "any", false, false, false, 1124));
                    foreach ($context['_seq'] as $context["_key"] => $context["hour"]) {
                        // line 1125
                        echo "                        <div>";
                        echo $context["hour"];
                        echo "</div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hour'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1127
                    echo "
                    </div>

                  ";
                }
                // line 1131
                echo "
                </div>
              </div>

            </div>
          ";
            }
            // line 1137
            echo "
        </div>

      ";
        }
        // line 1141
        echo "

      ";
        // line 1146
        echo "      ";
        if ((($context["car_details"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, false, false, 1146))) {
            // line 1147
            echo "
        <div class=\"card\">

          <div class=\"card-header\">
            <i class=\"fa fa-building\"></i>
            Vendor
          </div>

          <div class=\"card-body\">

            <div class=\"vendor-box\">

              ";
            // line 1159
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, false, false, 1159), "logo", [], "any", false, false, false, 1159)) {
                // line 1160
                echo "                <img src=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, false, false, 1160), "logo", [], "any", false, false, false, 1160);
                echo "\"
                     class=\"vendor-logo\"
                     alt=\"";
                // line 1162
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 1162), "displayName", [], "any", true, true, false, 1162)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 1162), "displayName", [], "any", false, false, false, 1162), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 1162), "name", [], "any", true, true, false, 1162)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 1162), "name", [], "any", false, false, false, 1162), "Vendor")) : ("Vendor")))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 1162), "name", [], "any", true, true, false, 1162)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 1162), "name", [], "any", false, false, false, 1162), "Vendor")) : ("Vendor"))));
                echo "\">
              ";
            }
            // line 1164
            echo "
              <div>

                <div class=\"vendor-name\">
                  ";
            // line 1168
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 1168), "displayName", [], "any", true, true, false, 1168)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 1168), "displayName", [], "any", false, false, false, 1168), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 1168), "name", [], "any", true, true, false, 1168)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 1168), "name", [], "any", false, false, false, 1168), "—")) : ("—")))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 1168), "name", [], "any", true, true, false, 1168)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, true, false, 1168), "name", [], "any", false, false, false, 1168), "—")) : ("—"))));
            echo "
                </div>

                ";
            // line 1171
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, false, false, 1171), "name", [], "any", false, false, false, 1171) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, false, false, 1171), "name", [], "any", false, false, false, 1171) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, false, false, 1171), "displayName", [], "any", false, false, false, 1171)))) {
                // line 1172
                echo "                  <div class=\"muted\">
                    ";
                // line 1173
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "vendor", [], "any", false, false, false, 1173), "name", [], "any", false, false, false, 1173);
                echo "
                  </div>
                ";
            }
            // line 1176
            echo "
              </div>

            </div>

          </div>
        </div>

      ";
        }
        // line 1185
        echo "

      ";
        // line 1190
        echo "      ";
        if ((($context["car_details"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rentalConditionsPDF", [], "any", false, false, false, 1190) || twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, false, false, 1190)))) {
            // line 1191
            echo "
        <div class=\"card\">

          <div class=\"card-header\">
            <i class=\"fa fa-file-pdf-o\"></i>
            Rental Conditions
          </div>

          <div class=\"card-body\">

            ";
            // line 1201
            if (twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rentalConditionsPDF", [], "any", false, false, false, 1201)) {
                // line 1202
                echo "
              <p>
                <a href=\"";
                // line 1204
                echo twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rentalConditionsPDF", [], "any", false, false, false, 1204);
                echo "\"
                   target=\"_blank\"
                   class=\"btn btn-danger\">
                  <i class=\"fa fa-file-pdf-o\"></i>
                  Rental Conditions PDF
                </a>
              </p>

            ";
            }
            // line 1213
            echo "

            ";
            // line 1215
            if (twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, false, false, 1215)) {
                // line 1216
                echo "
              <div class=\"row\">

                ";
                // line 1219
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["car_details"] ?? null), "rules", [], "any", false, false, false, 1219));
                foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                    // line 1220
                    echo "
                  ";
                    // line 1221
                    if (twig_test_iterable($context["rule"])) {
                        // line 1222
                        echo "
                    <div class=\"col-md-3 col-sm-6\">

                      <div class=\"rule-box\">

                        ";
                        // line 1227
                        if (twig_get_attribute($this->env, $this->source, $context["rule"], "label", [], "any", true, true, false, 1227)) {
                            // line 1228
                            echo "                          <div class=\"rule-label\">
                            ";
                            // line 1229
                            echo twig_get_attribute($this->env, $this->source, $context["rule"], "label", [], "any", false, false, false, 1229);
                            echo "
                          </div>
                        ";
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 1231
$context["rule"], "name", [], "any", true, true, false, 1231)) {
                            // line 1232
                            echo "                          <div class=\"rule-label\">
                            ";
                            // line 1233
                            echo twig_get_attribute($this->env, $this->source, $context["rule"], "name", [], "any", false, false, false, 1233);
                            echo "
                          </div>
                        ";
                        }
                        // line 1236
                        echo "
                        ";
                        // line 1237
                        if (twig_get_attribute($this->env, $this->source, $context["rule"], "value", [], "any", true, true, false, 1237)) {
                            // line 1238
                            echo "                          <div class=\"rule-value\">
                            ";
                            // line 1239
                            echo twig_get_attribute($this->env, $this->source, $context["rule"], "value", [], "any", false, false, false, 1239);
                            echo "
                          </div>
                        ";
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 1241
$context["rule"], "description", [], "any", true, true, false, 1241)) {
                            // line 1242
                            echo "                          <div class=\"rule-value\">
                            ";
                            // line 1243
                            echo twig_get_attribute($this->env, $this->source, $context["rule"], "description", [], "any", false, false, false, 1243);
                            echo "
                          </div>
                        ";
                        }
                        // line 1246
                        echo "
                      </div>

                    </div>

                  ";
                    }
                    // line 1252
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1254
                echo "
              </div>

            ";
            }
            // line 1258
            echo "
          </div>
        </div>

      ";
        }
        // line 1263
        echo "

      ";
        // line 1268
        echo "      <div class=\"card\">

        <div class=\"card-header\">
          <i class=\"fa fa-plus-square\"></i>
          Extra Products
        </div>

        <div class=\"card-body\">

          ";
        // line 1277
        if (($context["extra_products"] ?? null)) {
            // line 1278
            echo "
            <div class=\"table-responsive\">

              <table class=\"table table-bordered table-striped\">

                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                  </tr>
                </thead>

                <tbody>

                  ";
            // line 1293
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extra_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 1294
                echo "
                    <tr>

                      <td>
                        ";
                // line 1298
                echo ((twig_get_attribute($this->env, $this->source, $context["extra"], "name", [], "any", true, true, false, 1298)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["extra"], "name", [], "any", false, false, false, 1298), ((twig_get_attribute($this->env, $this->source, $context["extra"], "type", [], "any", true, true, false, 1298)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["extra"], "type", [], "any", false, false, false, 1298), "—")) : ("—")))) : (((twig_get_attribute($this->env, $this->source, $context["extra"], "type", [], "any", true, true, false, 1298)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["extra"], "type", [], "any", false, false, false, 1298), "—")) : ("—"))));
                echo "
                      </td>

                      <td>
                        ";
                // line 1302
                echo ((twig_get_attribute($this->env, $this->source, $context["extra"], "quantity", [], "any", true, true, false, 1302)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["extra"], "quantity", [], "any", false, false, false, 1302), 1)) : (1));
                echo "
                      </td>

                      <td>

                        ";
                // line 1307
                if ((twig_get_attribute($this->env, $this->source, $context["extra"], "price", [], "any", true, true, false, 1307) &&  !(null === twig_get_attribute($this->env, $this->source, $context["extra"], "price", [], "any", false, false, false, 1307)))) {
                    // line 1308
                    echo "                          ";
                    echo twig_get_attribute($this->env, $this->source, $context["extra"], "price", [], "any", false, false, false, 1308);
                    echo "

                          ";
                    // line 1310
                    if (twig_get_attribute($this->env, $this->source, $context["extra"], "currency", [], "any", false, false, false, 1310)) {
                        // line 1311
                        echo "                            ";
                        echo twig_get_attribute($this->env, $this->source, $context["extra"], "currency", [], "any", false, false, false, 1311);
                        echo "
                          ";
                    }
                    // line 1313
                    echo "                        ";
                } else {
                    // line 1314
                    echo "                          —
                        ";
                }
                // line 1316
                echo "
                      </td>

                    </tr>

                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1322
            echo "
                </tbody>

              </table>

            </div>

          ";
        } else {
            // line 1330
            echo "
            <div class=\"extra-empty\">
              No extra products
            </div>

          ";
        }
        // line 1336
        echo "
        </div>
      </div>


      ";
        // line 1344
        echo "      ";
        if (array_key_exists("admin_note", $context)) {
            // line 1345
            echo "
        <div class=\"card\">

          <div class=\"card-header\">
            <i class=\"fa fa-sticky-note-o\"></i>
            Admin Note
          </div>

          <div class=\"card-body\">

            <div class=\"note-box\">

              <textarea
                id=\"input-admin-note\"
                class=\"admin-note-textarea\"
                placeholder=\"Add an internal note...\">";
            // line 1360
            echo ($context["admin_note"] ?? null);
            echo "</textarea>

              ";
            // line 1362
            if (($context["save_admin_note"] ?? null)) {
                // line 1363
                echo "
                <div style=\"margin-top:10px;\">

                  <button type=\"button\"
                          id=\"button-save-admin-note\"
                          class=\"btn btn-primary\">
                    <i class=\"fa fa-save\"></i>
                    Save Note
                  </button>

                  <span id=\"admin-note-result\"
                        style=\"margin-left:10px;\"></span>

                </div>

              ";
            }
            // line 1379
            echo "
            </div>

          </div>
        </div>

      ";
        }
        // line 1386
        echo "

      ";
        // line 1391
        echo "      <div class=\"card\">

        <div class=\"card-header\">
          <i class=\"fa fa-info-circle\"></i>
          Additional Information
        </div>

        <div class=\"card-body\">

          <div class=\"row\">

            ";
        // line 1402
        if (($context["email"] ?? null)) {
            // line 1403
            echo "              <div class=\"col-md-4\">
                <div class=\"info-row\">
                  <div class=\"info-label\">Email</div>
                  <div class=\"info-value\">";
            // line 1406
            echo ($context["email"] ?? null);
            echo "</div>
                </div>
              </div>
            ";
        }
        // line 1410
        echo "
            ";
        // line 1411
        if (($context["telephone"] ?? null)) {
            // line 1412
            echo "              <div class=\"col-md-4\">
                <div class=\"info-row\">
                  <div class=\"info-label\">Telephone</div>
                  <div class=\"info-value\">";
            // line 1415
            echo ($context["telephone"] ?? null);
            echo "</div>
                </div>
              </div>
            ";
        }
        // line 1419
        echo "
            ";
        // line 1420
        if (($context["comment"] ?? null)) {
            // line 1421
            echo "              <div class=\"col-md-12\">
                <div class=\"info-row\">
                  <div class=\"info-label\">Customer Comment</div>
                  <div class=\"info-value\">
                    ";
            // line 1425
            echo twig_nl2br(twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true));
            echo "
                  </div>
                </div>
              </div>
            ";
        }
        // line 1430
        echo "
          </div>

        </div>
      </div>


      ";
        // line 1440
        echo "      <div class=\"card\">

        <div class=\"card-header\">
          <i class=\"fa fa-history\"></i>
          Order History
        </div>

        <div class=\"card-body\">

          <ul class=\"nav nav-tabs\">

            <li class=\"active\">
              <a href=\"#tab-history\"
                 data-toggle=\"tab\">
                ";
        // line 1454
        echo ($context["tab_history"] ?? null);
        echo "
              </a>
            </li>

            ";
        // line 1458
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 1459
            echo "              <li>
                <a href=\"#tab-";
            // line 1460
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 1460);
            echo "\"
                   data-toggle=\"tab\">
                  ";
            // line 1462
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 1462);
            echo "
                </a>
              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1466
        echo "
          </ul>


          <div class=\"tab-content\">

            <div class=\"tab-pane active\"
                 id=\"tab-history\">

              <div id=\"history\"></div>

              <br>

              <fieldset>

                <legend>
                  ";
        // line 1482
        echo ($context["text_order_history"] ?? null);
        echo "
                </legend>

                <form id=\"form-history\"
                      class=\"form-horizontal\">

                  <div class=\"form-group\">

                    <label class=\"col-sm-2 control-label\"
                           for=\"input-order-status\">
                      ";
        // line 1492
        echo ($context["entry_order_status"] ?? null);
        echo "
                    </label>

                    <div class=\"col-sm-10\">

                      <select name=\"order_status_id\"
                              id=\"input-order-status\"
                              class=\"form-control\">

                        ";
        // line 1501
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 1502
            echo "
                          ";
            // line 1503
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 1503) == ($context["order_status_id"] ?? null))) {
                // line 1504
                echo "
                            <option value=\"";
                // line 1505
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 1505);
                echo "\"
                                    selected=\"selected\">
                              ";
                // line 1507
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 1507);
                echo "
                            </option>

                          ";
            } else {
                // line 1511
                echo "
                            <option value=\"";
                // line 1512
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 1512);
                echo "\">
                              ";
                // line 1513
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 1513);
                echo "
                            </option>

                          ";
            }
            // line 1517
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1519
        echo "
                      </select>

                    </div>

                  </div>


                  <div class=\"form-group\">

                    <label class=\"col-sm-2 control-label\">
                      ";
        // line 1530
        echo ($context["entry_override"] ?? null);
        echo "
                    </label>

                    <div class=\"col-sm-10\">

                      <label class=\"radio-inline\">

                        ";
        // line 1537
        if (($context["override"] ?? null)) {
            // line 1538
            echo "                          <input type=\"radio\"
                                 name=\"override\"
                                 value=\"1\"
                                 checked=\"checked\">
                        ";
        } else {
            // line 1543
            echo "                          <input type=\"radio\"
                                 name=\"override\"
                                 value=\"1\">
                        ";
        }
        // line 1547
        echo "
                        ";
        // line 1548
        echo ($context["text_yes"] ?? null);
        echo "

                      </label>

                      <label class=\"radio-inline\">

                        ";
        // line 1554
        if ( !($context["override"] ?? null)) {
            // line 1555
            echo "                          <input type=\"radio\"
                                 name=\"override\"
                                 value=\"0\"
                                 checked=\"checked\">
                        ";
        } else {
            // line 1560
            echo "                          <input type=\"radio\"
                                 name=\"override\"
                                 value=\"0\">
                        ";
        }
        // line 1564
        echo "
                        ";
        // line 1565
        echo ($context["text_no"] ?? null);
        echo "

                      </label>

                    </div>

                  </div>


                  <div class=\"form-group\">

                    <label class=\"col-sm-2 control-label\">
                      ";
        // line 1577
        echo ($context["entry_notify"] ?? null);
        echo "
                    </label>

                    <div class=\"col-sm-10\">

                      <label class=\"radio-inline\">

                        <input type=\"radio\"
                               name=\"notify\"
                               value=\"1\">

                        ";
        // line 1588
        echo ($context["text_yes"] ?? null);
        echo "

                      </label>

                      <label class=\"radio-inline\">

                        <input type=\"radio\"
                               name=\"notify\"
                               value=\"0\"
                               checked=\"checked\">

                        ";
        // line 1599
        echo ($context["text_no"] ?? null);
        echo "

                      </label>

                    </div>

                  </div>


                  <div class=\"form-group\">

                    <label class=\"col-sm-2 control-label\"
                           for=\"input-comment\">
                      ";
        // line 1612
        echo ($context["entry_comment"] ?? null);
        echo "
                    </label>

                    <div class=\"col-sm-10\">

                      <textarea name=\"comment\"
                                rows=\"8\"
                                id=\"input-comment\"
                                class=\"form-control\"></textarea>

                    </div>

                  </div>


                  <div class=\"form-group\">

                    <div class=\"col-sm-offset-2 col-sm-10\">

                      <button type=\"submit\"
                              id=\"button-history\"
                              data-loading-text=\"";
        // line 1633
        echo ($context["text_loading"] ?? null);
        echo "\"
                              class=\"btn btn-primary\">
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
        // line 1636
        echo ($context["button_add_history"] ?? null);
        echo "
                      </button>

                    </div>

                  </div>

                </form>

              </fieldset>

            </div>


            ";
        // line 1651
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 1652
            echo "
              <div class=\"tab-pane\"
                   id=\"tab-";
            // line 1654
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 1654);
            echo "\">

                ";
            // line 1656
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 1656);
            echo "

              </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1661
        echo "
          </div>

        </div>
      </div>

    </div>
  </div>

</div>


";
        // line 1676
        if (($context["save_admin_note"] ?? null)) {
            // line 1677
            echo "
<script type=\"text/javascript\">
\$('#button-save-admin-note').on('click', function() {

  var button = \$(this);

  \$.ajax({
    url: '";
            // line 1684
            echo ($context["save_admin_note"] ?? null);
            echo "',
    type: 'post',
    data: {
      order_id: '";
            // line 1687
            echo ($context["order_id"] ?? null);
            echo "',
      admin_note: \$('#input-admin-note').val()
    },
    dataType: 'json',
    beforeSend: function() {
      button.prop('disabled', true);
      \$('#admin-note-result').html(
        '<span class=\"text-muted\">Saving...</span>'
      );
    },
    complete: function() {
      button.prop('disabled', false);
    },
    success: function(json) {

      if (json.success) {

        \$('#admin-note-result').html(
          '<span class=\"text-success\"><i class=\"fa fa-check\"></i> Saved</span>'
        );

      } else {

        \$('#admin-note-result').html(
          '<span class=\"text-danger\">' +
          (json.error || 'Could not save note.') +
          '</span>'
        );

      }

    },
    error: function() {

      \$('#admin-note-result').html(
        '<span class=\"text-danger\">Could not save note.</span>'
      );

    }
  });

});
</script>

";
        }
        // line 1732
        echo "

";
        // line 1737
        echo "<script type=\"text/javascript\">

function loadHistory() {

  \$('#history').load(
    'index.php?route=sale/order/history&user_token=";
        // line 1742
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "'
  );

}

\$('#form-history').on('submit', function(e) {

  e.preventDefault();

  \$.ajax({
    url: 'index.php?route=sale/order/history&user_token=";
        // line 1752
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
    type: 'post',
    data: \$('#form-history').serialize(),
    dataType: 'json',

    beforeSend: function() {

      \$('#button-history').button('loading');

    },

    complete: function() {

      \$('#button-history').button('reset');

    },

    success: function(json) {

      \$('.alert-dismissible').remove();

      if (json['error']) {

        \$('#form-history').before(
          '<div class=\"alert alert-danger alert-dismissible\">' +
          '<i class=\"fa fa-exclamation-circle\"></i> ' +
          json['error'] +
          '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>' +
          '</div>'
        );

      }

      if (json['success']) {

        \$('#form-history').before(
          '<div class=\"alert alert-success alert-dismissible\">' +
          '<i class=\"fa fa-check-circle\"></i> ' +
          json['success'] +
          '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>' +
          '</div>'
        );

        \$('#input-comment').val('');

        loadHistory();

      }

    }

  });

});


\$(document).ready(function() {

  loadHistory();

});


";
        // line 1815
        if (($context["invoice"] ?? null)) {
            // line 1816
            echo "
\$('#button-invoice').on('click', function() {

  \$.ajax({
    url: 'index.php?route=sale/order/invoice&user_token=";
            // line 1820
            echo ($context["user_token"] ?? null);
            echo "&order_id=";
            echo ($context["order_id"] ?? null);
            echo "',
    type: 'post',
    dataType: 'json',

    success: function(json) {

      if (json['success']) {
        window.open(json['success'], '_blank');
      }

    }

  });

});

";
        }
        // line 1837
        echo "
</script>


";
        // line 1841
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
        return array (  2724 => 1841,  2718 => 1837,  2696 => 1820,  2690 => 1816,  2688 => 1815,  2620 => 1752,  2605 => 1742,  2598 => 1737,  2594 => 1732,  2546 => 1687,  2540 => 1684,  2531 => 1677,  2529 => 1676,  2515 => 1661,  2504 => 1656,  2499 => 1654,  2495 => 1652,  2490 => 1651,  2473 => 1636,  2467 => 1633,  2443 => 1612,  2427 => 1599,  2413 => 1588,  2399 => 1577,  2384 => 1565,  2381 => 1564,  2375 => 1560,  2368 => 1555,  2366 => 1554,  2357 => 1548,  2354 => 1547,  2348 => 1543,  2341 => 1538,  2339 => 1537,  2329 => 1530,  2316 => 1519,  2309 => 1517,  2302 => 1513,  2298 => 1512,  2295 => 1511,  2288 => 1507,  2283 => 1505,  2280 => 1504,  2278 => 1503,  2275 => 1502,  2271 => 1501,  2259 => 1492,  2246 => 1482,  2228 => 1466,  2218 => 1462,  2213 => 1460,  2210 => 1459,  2206 => 1458,  2199 => 1454,  2183 => 1440,  2174 => 1430,  2166 => 1425,  2160 => 1421,  2158 => 1420,  2155 => 1419,  2148 => 1415,  2143 => 1412,  2141 => 1411,  2138 => 1410,  2131 => 1406,  2126 => 1403,  2124 => 1402,  2111 => 1391,  2107 => 1386,  2098 => 1379,  2080 => 1363,  2078 => 1362,  2073 => 1360,  2056 => 1345,  2053 => 1344,  2046 => 1336,  2038 => 1330,  2028 => 1322,  2017 => 1316,  2013 => 1314,  2010 => 1313,  2004 => 1311,  2002 => 1310,  1996 => 1308,  1994 => 1307,  1986 => 1302,  1979 => 1298,  1973 => 1294,  1969 => 1293,  1952 => 1278,  1950 => 1277,  1939 => 1268,  1935 => 1263,  1928 => 1258,  1922 => 1254,  1915 => 1252,  1907 => 1246,  1901 => 1243,  1898 => 1242,  1896 => 1241,  1891 => 1239,  1888 => 1238,  1886 => 1237,  1883 => 1236,  1877 => 1233,  1874 => 1232,  1872 => 1231,  1867 => 1229,  1864 => 1228,  1862 => 1227,  1855 => 1222,  1853 => 1221,  1850 => 1220,  1846 => 1219,  1841 => 1216,  1839 => 1215,  1835 => 1213,  1823 => 1204,  1819 => 1202,  1817 => 1201,  1805 => 1191,  1802 => 1190,  1798 => 1185,  1787 => 1176,  1781 => 1173,  1778 => 1172,  1776 => 1171,  1770 => 1168,  1764 => 1164,  1759 => 1162,  1753 => 1160,  1751 => 1159,  1737 => 1147,  1734 => 1146,  1730 => 1141,  1724 => 1137,  1716 => 1131,  1710 => 1127,  1701 => 1125,  1697 => 1124,  1690 => 1119,  1688 => 1118,  1685 => 1117,  1678 => 1113,  1671 => 1108,  1669 => 1107,  1666 => 1106,  1661 => 1103,  1652 => 1101,  1648 => 1100,  1641 => 1095,  1639 => 1094,  1636 => 1093,  1630 => 1089,  1616 => 1088,  1610 => 1087,  1593 => 1086,  1585 => 1080,  1583 => 1079,  1580 => 1078,  1574 => 1075,  1569 => 1072,  1567 => 1071,  1564 => 1070,  1558 => 1067,  1553 => 1064,  1551 => 1063,  1548 => 1062,  1542 => 1059,  1538 => 1057,  1536 => 1056,  1533 => 1055,  1527 => 1052,  1524 => 1051,  1522 => 1050,  1509 => 1039,  1506 => 1038,  1502 => 1035,  1494 => 1029,  1488 => 1025,  1479 => 1023,  1475 => 1022,  1468 => 1017,  1466 => 1016,  1463 => 1015,  1456 => 1011,  1449 => 1006,  1447 => 1005,  1444 => 1004,  1439 => 1001,  1430 => 999,  1426 => 998,  1419 => 993,  1417 => 992,  1414 => 991,  1408 => 987,  1394 => 986,  1388 => 985,  1371 => 984,  1363 => 978,  1361 => 977,  1358 => 976,  1352 => 973,  1347 => 970,  1345 => 969,  1342 => 968,  1336 => 965,  1331 => 962,  1329 => 961,  1326 => 960,  1320 => 957,  1316 => 955,  1314 => 954,  1311 => 953,  1305 => 950,  1302 => 949,  1300 => 948,  1287 => 937,  1284 => 936,  1279 => 932,  1276 => 931,  1272 => 926,  1261 => 917,  1252 => 911,  1242 => 903,  1240 => 902,  1232 => 897,  1222 => 889,  1220 => 888,  1214 => 884,  1205 => 878,  1195 => 870,  1193 => 869,  1189 => 867,  1180 => 861,  1170 => 853,  1168 => 852,  1164 => 850,  1155 => 844,  1145 => 836,  1143 => 835,  1139 => 833,  1130 => 827,  1120 => 819,  1118 => 818,  1114 => 816,  1105 => 810,  1095 => 802,  1093 => 801,  1089 => 799,  1080 => 793,  1070 => 785,  1068 => 784,  1062 => 780,  1056 => 777,  1053 => 776,  1051 => 775,  1046 => 773,  1043 => 772,  1041 => 771,  1036 => 768,  1030 => 766,  1028 => 765,  1023 => 763,  1017 => 759,  1011 => 754,  1004 => 752,  999 => 751,  997 => 750,  993 => 748,  979 => 735,  976 => 734,  972 => 729,  957 => 717,  940 => 702,  936 => 700,  930 => 698,  928 => 697,  911 => 682,  905 => 680,  899 => 677,  894 => 676,  892 => 675,  870 => 655,  867 => 654,  857 => 643,  853 => 641,  846 => 637,  838 => 631,  836 => 630,  829 => 626,  816 => 616,  803 => 606,  790 => 596,  781 => 589,  779 => 588,  767 => 578,  757 => 569,  751 => 566,  747 => 564,  745 => 563,  742 => 562,  736 => 559,  732 => 557,  730 => 556,  727 => 555,  721 => 552,  717 => 550,  715 => 549,  712 => 548,  706 => 545,  702 => 543,  700 => 542,  697 => 541,  691 => 538,  687 => 536,  685 => 535,  682 => 534,  676 => 531,  672 => 529,  670 => 528,  663 => 524,  646 => 509,  642 => 506,  638 => 501,  625 => 491,  608 => 477,  591 => 463,  579 => 453,  576 => 452,  567 => 442,  561 => 439,  558 => 438,  556 => 437,  553 => 436,  547 => 433,  544 => 432,  542 => 431,  539 => 430,  532 => 426,  528 => 424,  526 => 423,  518 => 417,  512 => 415,  510 => 414,  505 => 412,  493 => 402,  161 => 69,  153 => 60,  142 => 57,  139 => 56,  135 => 55,  129 => 52,  124 => 49,  116 => 44,  110 => 42,  108 => 41,  100 => 36,  95 => 34,  92 => 33,  84 => 28,  77 => 25,  75 => 24,  72 => 23,  64 => 18,  57 => 15,  55 => 14,  48 => 9,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_info.twig", "");
    }
}
