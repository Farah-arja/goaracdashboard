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

/* sale/order_list.twig */
class __TwigTemplate_1dce8d57aefd12ea779b1a8feeb06a00 extends Template
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
<div class=\"page-header\">
  <div class=\"container-fluid\">
    <div class=\"pull-right\">
      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-order').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"></button>
      <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 8
        echo ($context["shipping"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></button>
      <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 9
        echo ($context["invoice"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></button>
      <button type=\"submit\" id=\"button-delete\" form=\"form-order\" formaction=\"";
        // line 10
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" disabled=\"disabled\" onclick=\"return confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "');\"><i class=\"fa fa-trash-o\"></i></button>
      <a href=\"";
        // line 11
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
    </div>

    <h1>";
        // line 14
        echo ($context["heading_title"] ?? null);
        echo "</h1>

    <ul class=\"breadcrumb\">
      ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "      <li><a href=\"";
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
        echo "    </ul>
  </div>
</div>

<div class=\"container-fluid\">

  ";
        // line 26
        if (($context["error_warning"] ?? null)) {
            // line 27
            echo "  <div class=\"alert alert-danger alert-dismissible\">
    <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 28
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 32
        echo "
  ";
        // line 33
        if (($context["success"] ?? null)) {
            // line 34
            echo "  <div class=\"alert alert-success alert-dismissible\">
    <i class=\"fa fa-check-circle\"></i> ";
            // line 35
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 39
        echo "
  <div class=\"row\">

    <!-- FILTER -->
    <div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">

      <div class=\"panel panel-default\">

        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">
            <i class=\"fa fa-filter\"></i> ";
        // line 49
        echo ($context["text_filter"] ?? null);
        echo "
          </h3>
        </div>

        <div class=\"panel-body\">

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-id\">";
        // line 56
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <input
              type=\"text\"
              name=\"filter_order_id\"
              value=\"";
        // line 60
        echo ($context["filter_order_id"] ?? null);
        echo "\"
              placeholder=\"";
        // line 61
        echo ($context["entry_order_id"] ?? null);
        echo "\"
              id=\"input-order-id\"
              class=\"form-control\"
            />
          </div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-customer\">";
        // line 68
        echo ($context["entry_customer"] ?? null);
        echo "</label>
            <input
              type=\"text\"
              name=\"filter_customer\"
              value=\"";
        // line 72
        echo ($context["filter_customer"] ?? null);
        echo "\"
              placeholder=\"";
        // line 73
        echo ($context["entry_customer"] ?? null);
        echo "\"
              id=\"input-customer\"
              class=\"form-control\"
            />
          </div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-status\">";
        // line 80
        echo ($context["entry_order_status"] ?? null);
        echo "</label>

            <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">

              <option value=\"\"></option>

              ";
        // line 86
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            // line 87
            echo "              <option value=\"0\" selected=\"selected\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
              ";
        } else {
            // line 89
            echo "              <option value=\"0\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
              ";
        }
        // line 91
        echo "
              ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 93
            echo "
                ";
            // line 94
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 94) == ($context["filter_order_status_id"] ?? null))) {
                // line 95
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 95);
                echo "\" selected=\"selected\">
                  ";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 96);
                echo "
                </option>
                ";
            } else {
                // line 99
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 99);
                echo "\">
                  ";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 100);
                echo "
                </option>
                ";
            }
            // line 103
            echo "
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "
            </select>
          </div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-total\">";
        // line 110
        echo ($context["entry_total"] ?? null);
        echo "</label>
            <input
              type=\"text\"
              name=\"filter_total\"
              value=\"";
        // line 114
        echo ($context["filter_total"] ?? null);
        echo "\"
              placeholder=\"";
        // line 115
        echo ($context["entry_total"] ?? null);
        echo "\"
              id=\"input-total\"
              class=\"form-control\"
            />
          </div>

          <!-- PROVIDER FILTER -->
          <div class=\"form-group\">

            <label class=\"control-label\" for=\"input-provider\">
              Provider
            </label>

            <select
              name=\"filter_provider\"
              id=\"input-provider\"
              class=\"form-control\"
            >

              <option value=\"\">All Providers</option>

              ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["providers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 137
            echo "
                ";
            // line 138
            if ((($context["filter_provider"] ?? null) == twig_get_attribute($this->env, $this->source, $context["provider"], "provider_name", [], "any", false, false, false, 138))) {
                // line 139
                echo "
                <option
                  value=\"";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["provider"], "provider_name", [], "any", false, false, false, 141);
                echo "\"
                  selected=\"selected\"
                >
                  ";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["provider"], "provider_name", [], "any", false, false, false, 144);
                echo "
                </option>

                ";
            } else {
                // line 148
                echo "
                <option value=\"";
                // line 149
                echo twig_get_attribute($this->env, $this->source, $context["provider"], "provider_name", [], "any", false, false, false, 149);
                echo "\">
                  ";
                // line 150
                echo twig_get_attribute($this->env, $this->source, $context["provider"], "provider_name", [], "any", false, false, false, 150);
                echo "
                </option>

                ";
            }
            // line 154
            echo "
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "
            </select>

          </div>
          <!-- END PROVIDER FILTER -->

          <div class=\"form-group\">

            <label class=\"control-label\" for=\"input-date-added\">
              ";
        // line 165
        echo ($context["entry_date_added"] ?? null);
        echo "
            </label>

            <div class=\"input-group date\">

              <input
                type=\"text\"
                name=\"filter_date_added\"
                value=\"";
        // line 173
        echo ($context["filter_date_added"] ?? null);
        echo "\"
                placeholder=\"";
        // line 174
        echo ($context["entry_date_added"] ?? null);
        echo "\"
                data-date-format=\"YYYY-MM-DD\"
                id=\"input-date-added\"
                class=\"form-control\"
              />

              <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\">
                  <i class=\"fa fa-calendar\"></i>
                </button>
              </span>

            </div>

          </div>

          <div class=\"form-group\">

            <label class=\"control-label\" for=\"input-date-modified\">
              ";
        // line 193
        echo ($context["entry_date_modified"] ?? null);
        echo "
            </label>

            <div class=\"input-group date\">

              <input
                type=\"text\"
                name=\"filter_date_modified\"
                value=\"";
        // line 201
        echo ($context["filter_date_modified"] ?? null);
        echo "\"
                placeholder=\"";
        // line 202
        echo ($context["entry_date_modified"] ?? null);
        echo "\"
                data-date-format=\"YYYY-MM-DD\"
                id=\"input-date-modified\"
                class=\"form-control\"
              />

              <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\">
                  <i class=\"fa fa-calendar\"></i>
                </button>
              </span>

            </div>

          </div>

          <div class=\"form-group text-right\">

            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\">
              <i class=\"fa fa-filter\"></i> ";
        // line 221
        echo ($context["button_filter"] ?? null);
        echo "
            </button>

          </div>

        </div>
      </div>

    </div>
    <!-- END FILTER -->


    <div class=\"col-md-9 col-md-pull-3 col-sm-12\">

      <div
        class=\"panel panel-default\"
        id=\"order-list-panel\"
        data-poll-url=\"";
        // line 238
        echo ((array_key_exists("poll_url", $context)) ? (_twig_default_filter(($context["poll_url"] ?? null), "")) : (""));
        echo "\"
        data-button-view=\"";
        // line 239
        echo ($context["button_view"] ?? null);
        echo "\"
        data-button-edit=\"";
        // line 240
        echo ($context["button_edit"] ?? null);
        echo "\"
        data-button-delete=\"";
        // line 241
        echo ($context["button_delete"] ?? null);
        echo "\"
        data-text-confirm=\"";
        // line 242
        echo ($context["text_confirm"] ?? null);
        echo "\"
        data-catalog=\"";
        // line 243
        echo ($context["catalog"] ?? null);
        echo "\"
        data-api-token=\"";
        // line 244
        echo ($context["api_token"] ?? null);
        echo "\"
        data-store-id=\"";
        // line 245
        echo ($context["store_id"] ?? null);
        echo "\"
        data-delete-url=\"";
        // line 246
        echo ($context["delete"] ?? null);
        echo "\"
      >

        <div class=\"panel-heading\">

          <h3 class=\"panel-title\">
            <i class=\"fa fa-list\"></i> ";
        // line 252
        echo ($context["text_list"] ?? null);
        echo "
          </h3>

        </div>

        <div class=\"panel-body\">

          <form
            method=\"post\"
            action=\"\"
            enctype=\"multipart/form-data\"
            id=\"form-order\"
          >

            <div class=\"table-responsive\">

              <table class=\"table table-bordered table-hover\">

                <thead>

                  <tr>

                    <!-- CHECKBOX -->

                    <td style=\"width: 1px;\" class=\"text-center\">

                      <input
                        type=\"checkbox\"
                        onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked).trigger('change');\"
                      />

                    </td>


                    <!-- ORDER ID -->

                    <td class=\"text-right\">

                      ";
        // line 290
        if ((($context["sort"] ?? null) == "o.order_id")) {
            // line 291
            echo "
                        <a
                          href=\"";
            // line 293
            echo ($context["sort_order"] ?? null);
            echo "\"
                          class=\"";
            // line 294
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"
                        >
                          ";
            // line 296
            echo ($context["column_order_id"] ?? null);
            echo "
                        </a>

                      ";
        } else {
            // line 300
            echo "
                        <a href=\"";
            // line 301
            echo ($context["sort_order"] ?? null);
            echo "\">
                          ";
            // line 302
            echo ($context["column_order_id"] ?? null);
            echo "
                        </a>

                      ";
        }
        // line 306
        echo "
                    </td>


                    <!-- CUSTOMER -->

                    <td class=\"text-left\">

                      ";
        // line 314
        if ((($context["sort"] ?? null) == "customer")) {
            // line 315
            echo "
                        <a
                          href=\"";
            // line 317
            echo ($context["sort_customer"] ?? null);
            echo "\"
                          class=\"";
            // line 318
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"
                        >
                          ";
            // line 320
            echo ($context["column_customer"] ?? null);
            echo "
                        </a>

                      ";
        } else {
            // line 324
            echo "
                        <a href=\"";
            // line 325
            echo ($context["sort_customer"] ?? null);
            echo "\">
                          ";
            // line 326
            echo ($context["column_customer"] ?? null);
            echo "
                        </a>

                      ";
        }
        // line 330
        echo "
                    </td>


                    <!-- STATUS -->

                    <td class=\"text-left\">

                      ";
        // line 338
        if ((($context["sort"] ?? null) == "order_status")) {
            // line 339
            echo "
                        <a
                          href=\"";
            // line 341
            echo ($context["sort_status"] ?? null);
            echo "\"
                          class=\"";
            // line 342
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"
                        >
                          ";
            // line 344
            echo ($context["column_status"] ?? null);
            echo "
                        </a>

                      ";
        } else {
            // line 348
            echo "
                        <a href=\"";
            // line 349
            echo ($context["sort_status"] ?? null);
            echo "\">
                          ";
            // line 350
            echo ($context["column_status"] ?? null);
            echo "
                        </a>

                      ";
        }
        // line 354
        echo "
                    </td>


                    <!-- PROVIDER -->

                    <td class=\"text-left order-provider-cell\">
                      Provider
                    </td>


                    <!-- BUY PROVIDER TRY -->

                    <td class=\"text-left\">

                      ";
        // line 369
        if ((($context["sort"] ?? null) == "buy_total")) {
            // line 370
            echo "
                        <a
                          href=\"";
            // line 372
            echo ($context["buy_total"] ?? null);
            echo "\"
                          class=\"";
            // line 373
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"
                        >
                          ";
            // line 375
            echo ($context["column_buy_provider_try"] ?? null);
            echo "
                        </a>

                      ";
        } else {
            // line 379
            echo "
                        <a href=\"";
            // line 380
            echo ($context["buy_total"] ?? null);
            echo "\">
                          ";
            // line 381
            echo ($context["column_buy_provider_try"] ?? null);
            echo "
                        </a>

                      ";
        }
        // line 385
        echo "
                    </td>


                    <!-- SELL -->

                    <td class=\"text-right\">

                      ";
        // line 393
        if ((($context["sort"] ?? null) == "o.total")) {
            // line 394
            echo "
                        <a
                          href=\"";
            // line 396
            echo ($context["sort_total"] ?? null);
            echo "\"
                          class=\"";
            // line 397
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"
                        >
                          ";
            // line 399
            echo ($context["column_sell"] ?? null);
            echo "
                        </a>

                      ";
        } else {
            // line 403
            echo "
                        <a href=\"";
            // line 404
            echo ($context["sort_total"] ?? null);
            echo "\">
                          ";
            // line 405
            echo ($context["column_sell"] ?? null);
            echo "
                        </a>

                      ";
        }
        // line 409
        echo "
                    </td>


                    <!-- PROFIT -->

                    <td class=\"text-left\">

                      ";
        // line 417
        if ((($context["sort"] ?? null) == "profit_try")) {
            // line 418
            echo "
                        <a
                          href=\"";
            // line 420
            echo ($context["profit_try"] ?? null);
            echo "\"
                          class=\"";
            // line 421
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"
                        >
                          ";
            // line 423
            echo ($context["column_profit_try"] ?? null);
            echo "
                        </a>

                      ";
        } else {
            // line 427
            echo "
                        <a href=\"";
            // line 428
            echo ($context["profit_try"] ?? null);
            echo "\">
                          ";
            // line 429
            echo ($context["column_profit_try"] ?? null);
            echo "
                        </a>

                      ";
        }
        // line 433
        echo "
                    </td>


                    <!-- DATE ADDED -->

                    <td class=\"text-left\">

                      ";
        // line 441
        if ((($context["sort"] ?? null) == "o.date_added")) {
            // line 442
            echo "
                        <a
                          href=\"";
            // line 444
            echo ($context["sort_date_added"] ?? null);
            echo "\"
                          class=\"";
            // line 445
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"
                        >
                          ";
            // line 447
            echo ($context["column_date_added"] ?? null);
            echo "
                        </a>

                      ";
        } else {
            // line 451
            echo "
                        <a href=\"";
            // line 452
            echo ($context["sort_date_added"] ?? null);
            echo "\">
                          ";
            // line 453
            echo ($context["column_date_added"] ?? null);
            echo "
                        </a>

                      ";
        }
        // line 457
        echo "
                    </td>


                    <!-- DATE MODIFIED -->

                    <td class=\"text-left\">

                      ";
        // line 465
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            // line 466
            echo "
                        <a
                          href=\"";
            // line 468
            echo ($context["sort_date_modified"] ?? null);
            echo "\"
                          class=\"";
            // line 469
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"
                        >
                          ";
            // line 471
            echo ($context["column_date_modified"] ?? null);
            echo "
                        </a>

                      ";
        } else {
            // line 475
            echo "
                        <a href=\"";
            // line 476
            echo ($context["sort_date_modified"] ?? null);
            echo "\">
                          ";
            // line 477
            echo ($context["column_date_modified"] ?? null);
            echo "
                        </a>

                      ";
        }
        // line 481
        echo "
                    </td>


                    <!-- ACTION -->

                    <td class=\"text-right\">
                      ";
        // line 488
        echo ($context["column_action"] ?? null);
        echo "
                    </td>

                  </tr>

                </thead>


                <tbody id=\"order-list-tbody\">

                  ";
        // line 498
        if (($context["orders"] ?? null)) {
            // line 499
            echo "
                    ";
            // line 500
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 501
                echo "
                    <tr data-order-id=\"";
                // line 502
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 502);
                echo "\">

                      <!-- CHECKBOX -->

                      <td class=\"text-center\">

                        ";
                // line 508
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 508), ($context["selected"] ?? null))) {
                    // line 509
                    echo "
                          <input
                            type=\"checkbox\"
                            name=\"selected[]\"
                            value=\"";
                    // line 513
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 513);
                    echo "\"
                            checked=\"checked\"
                          />

                        ";
                } else {
                    // line 518
                    echo "
                          <input
                            type=\"checkbox\"
                            name=\"selected[]\"
                            value=\"";
                    // line 522
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 522);
                    echo "\"
                          />

                        ";
                }
                // line 526
                echo "
                        <input
                          type=\"hidden\"
                          name=\"shipping_code[]\"
                          value=\"";
                // line 530
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", true, true, false, 530)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", false, false, false, 530), "")) : (""));
                echo "\"
                        />

                      </td>


                      <!-- ORDER ID -->

                      <td class=\"text-right order-id-cell\">
                        ";
                // line 539
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 539);
                echo "
                      </td>


                      <!-- CUSTOMER -->

                      <td class=\"text-left order-customer-cell\">
                        ";
                // line 546
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 546);
                echo "
                      </td>


                      <!-- STATUS -->

                      <td class=\"text-left order-status-cell\">

                        <span
                          class=\"order-status-badge order-status-id-";
                // line 555
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "order_status_id", [], "any", true, true, false, 555)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_status_id", [], "any", false, false, false, 555), 0)) : (0));
                echo "\"
                        >
                          ";
                // line 557
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 557);
                echo "
                        </span>

                      </td>


                      <!-- PROVIDER -->

                      <td class=\"text-left order-provider-cell\">
                        ";
                // line 566
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "provider_name", [], "any", true, true, false, 566)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "provider_name", [], "any", false, false, false, 566), "-")) : ("-"));
                echo "
                      </td>


                      <!-- BUY -->

                      <td class=\"text-right order-buy-cell\">
                        ";
                // line 573
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "buy_total", [], "any", true, true, false, 573)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "buy_total", [], "any", false, false, false, 573), "-")) : ("-"));
                echo "
                      </td>


                      <!-- SELL -->

                      <td class=\"text-right order-total-cell\">
                        ";
                // line 580
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "sell_total", [], "any", true, true, false, 580)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "sell_total", [], "any", false, false, false, 580), "-")) : ("-"));
                echo "
                      </td>


                      <!-- PROFIT -->

                      <td class=\"text-right order-profit-cell\">
                        ";
                // line 587
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "profit_total", [], "any", true, true, false, 587)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "profit_total", [], "any", false, false, false, 587), "-")) : ("-"));
                echo "
                      </td>


                      <!-- DATE ADDED -->

                      <td class=\"text-left order-date-added-cell\">
                        ";
                // line 594
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 594);
                echo "
                      </td>


                      <!-- DATE MODIFIED -->

                      <td class=\"text-left order-date-modified-cell\">
                        ";
                // line 601
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_modified", [], "any", false, false, false, 601);
                echo "
                      </td>


                      <!-- ACTION -->

                      <td class=\"text-right\">

                        <div style=\"min-width: 120px;\">

                          <div class=\"btn-group\">

                            <a
                              href=\"";
                // line 614
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 614);
                echo "\"
                              data-toggle=\"tooltip\"
                              title=\"";
                // line 616
                echo ($context["button_view"] ?? null);
                echo "\"
                              class=\"btn btn-primary\"
                            >
                              <i class=\"fa fa-eye\"></i>
                            </a>

                            <button
                              type=\"button\"
                              data-toggle=\"dropdown\"
                              class=\"btn btn-primary dropdown-toggle\"
                            >
                              <span class=\"caret\"></span>
                            </button>

                            <ul class=\"dropdown-menu dropdown-menu-right\">

                              <li>

                                <a href=\"";
                // line 634
                echo twig_get_attribute($this->env, $this->source, $context["order"], "edit", [], "any", false, false, false, 634);
                echo "\">
                                  <i class=\"fa fa-pencil\"></i>
                                  ";
                // line 636
                echo ($context["button_edit"] ?? null);
                echo "
                                </a>

                              </li>

                              <li>

                                <a href=\"";
                // line 643
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 643);
                echo "\">
                                  <i class=\"fa fa-trash-o\"></i>
                                  ";
                // line 645
                echo ($context["button_delete"] ?? null);
                echo "
                                </a>

                              </li>

                            </ul>

                          </div>

                        </div>

                      </td>

                    </tr>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 661
            echo "
                  ";
        } else {
            // line 663
            echo "
                    <tr id=\"order-list-no-results\">

                      <td class=\"text-center\" colspan=\"11\">
                        ";
            // line 667
            echo ($context["text_no_results"] ?? null);
            echo "
                      </td>

                    </tr>

                  ";
        }
        // line 673
        echo "
                </tbody>

              </table>

            </div>

          </form>


          <!-- PAGINATION -->

          <div class=\"row\">

            <div class=\"col-sm-6 text-left\">
              ";
        // line 688
        echo ($context["pagination"] ?? null);
        echo "
            </div>

            <div class=\"col-sm-6 text-right\">
              ";
        // line 692
        echo ($context["results"] ?? null);
        echo "
            </div>

          </div>

        </div>
      </div>

    </div>

  </div>


  <!-- FILTER SCRIPT -->

  <script type=\"text/javascript\"><!--

  \$('#button-filter').on('click', function() {

    url = '';

    var filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

    if (filter_order_id) {
      url += '&filter_order_id=' + encodeURIComponent(filter_order_id);
    }


    var filter_customer = \$('input[name=\\'filter_customer\\']').val();

    if (filter_customer) {
      url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }


    var filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();

    if (filter_order_status_id !== '') {
      url += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
    }


    var filter_total = \$('input[name=\\'filter_total\\']').val();

    if (filter_total) {
      url += '&filter_total=' + encodeURIComponent(filter_total);
    }


    /* PROVIDER FILTER */

    var filter_provider = \$('select[name=\\'filter_provider\\']').val();

    if (filter_provider) {
      url += '&filter_provider=' + encodeURIComponent(filter_provider);
    }


    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

    if (filter_date_added) {
      url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }


    var filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

    if (filter_date_modified) {
      url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
    }


    location = 'index.php?route=sale/order&user_token=";
        // line 764
        echo ($context["user_token"] ?? null);
        echo "' + url;

  });

  //--></script>


  <!-- POLLING SCRIPT -->

  <script type=\"text/javascript\"><!--

  (function() {

    var panel = \$('#order-list-panel');

    var pollUrl = panel.data('poll-url');

    if (!pollUrl) return;


    function esc(s) {

      s = (s == null ? '' : s);

      var d = document.createElement('div');

      d.textContent = s;

      return d.innerHTML;

    }


    function rowHtml(o) {

      var statusId = o.order_status_id || 0;

      var btnView = esc(
        panel.data('button-view') || 'View'
      );

      var btnEdit = esc(
        panel.data('button-edit') || 'Edit'
      );

      var btnDel = esc(
        panel.data('button-delete') || 'Delete'
      );


      var h =
        '<tr data-order-id=\"' +
        esc(String(o.order_id)) +
        '\">';


      /* CHECKBOX */

      h += '<td class=\"text-center\">';

      h +=
        '<input type=\"checkbox\" name=\"selected[]\" value=\"' +
        esc(String(o.order_id)) +
        '\" />';

      h +=
        '<input type=\"hidden\" name=\"shipping_code[]\" value=\"' +
        esc((o.shipping_code || '')) +
        '\" />';

      h += '</td>';


      /* ORDER ID */

      h +=
        '<td class=\"text-right order-id-cell\">' +
        esc(String(o.order_id)) +
        '</td>';


      /* CUSTOMER */

      h +=
        '<td class=\"text-left order-customer-cell\">' +
        esc(o.customer || '') +
        '</td>';


      /* STATUS */

      h += '<td class=\"text-left order-status-cell\">';

      h +=
        '<span class=\"order-status-badge order-status-id-' +
        statusId +
        '\">';

      h += esc(o.order_status || '');

      h += '</span>';

      h += '</td>';


      /* PROVIDER */

      h +=
        '<td class=\"text-left order-provider-cell\">' +
        esc(o.provider_name || '-') +
        '</td>';


      /* BUY */

      h +=
        '<td class=\"text-right order-buy-cell\">' +
        esc(o.buy_total || '-') +
        '</td>';


      /* SELL */

      h +=
        '<td class=\"text-right order-total-cell\">' +
        esc(o.sell_total || '-') +
        '</td>';


      /* PROFIT */

      h +=
        '<td class=\"text-right order-profit-cell\">' +
        esc(o.profit_total || '-') +
        '</td>';


      /* DATE ADDED */

      h +=
        '<td class=\"text-left order-date-added-cell\">' +
        esc(o.date_added || '') +
        '</td>';


      /* DATE MODIFIED */

      h +=
        '<td class=\"text-left order-date-modified-cell\">' +
        esc(o.date_modified || '') +
        '</td>';


      /* ACTION */

      h += '<td class=\"text-right\">';

      h += '<div style=\"min-width:120px;\">';

      h += '<div class=\"btn-group\">';


      h +=
        '<a href=\"' +
        esc(o.view || '') +
        '\" data-toggle=\"tooltip\" title=\"' +
        btnView +
        '\" class=\"btn btn-primary\">' +
        '<i class=\"fa fa-eye\"></i>' +
        '</a>';


      h +=
        '<button type=\"button\" data-toggle=\"dropdown\" ' +
        'class=\"btn btn-primary dropdown-toggle\">';

      h += '<span class=\"caret\"></span>';

      h += '</button>';


      h +=
        '<ul class=\"dropdown-menu dropdown-menu-right\">';


      h +=
        '<li>' +
        '<a href=\"' +
        esc(o.edit || '') +
        '\">' +
        '<i class=\"fa fa-pencil\"></i> ' +
        btnEdit +
        '</a>' +
        '</li>';


      h +=
        '<li>' +
        '<a href=\"' +
        esc(String(o.order_id)) +
        '\">' +
        '<i class=\"fa fa-trash-o\"></i> ' +
        btnDel +
        '</a>' +
        '</li>';


      h += '</ul>';

      h += '</div>';

      h += '</div>';

      h += '</td>';

      h += '</tr>';


      return h;

    }


    function poll() {

      \$.get(pollUrl).done(function(data) {

        if (typeof data === 'string') {

          try {

            data = JSON.parse(data);

          } catch (e) {

            return;

          }

        }


        var list = data.orders || [];

        var tbody = \$('#order-list-tbody');

        var noResults =
          tbody.find('#order-list-no-results');


        list.forEach(function(ord) {

          var existing =
            tbody.find(
              'tr[data-order-id=\"' +
              ord.order_id +
              '\"]'
            );


          if (existing.length) {


            /* STATUS */

            existing
              .find('.order-status-cell span')
              .removeClass()
              .addClass(
                'order-status-badge order-status-id-' +
                (ord.order_status_id || 0)
              )
              .text(
                ord.order_status || ''
              );


            /* BUY */

            existing
              .find('.order-buy-cell')
              .text(
                ord.buy_total || '-'
              );


            /* SELL */

            existing
              .find('.order-total-cell')
              .text(
                ord.sell_total || '-'
              );


            /* PROFIT */

            existing
              .find('.order-profit-cell')
              .text(
                ord.profit_total || '-'
              );


            /* DATE ADDED */

            existing
              .find('.order-date-added-cell')
              .text(
                ord.date_added || ''
              );


            /* DATE MODIFIED */

            existing
              .find('.order-date-modified-cell')
              .text(
                ord.date_modified || ''
              );


            /* CUSTOMER */

            existing
              .find('.order-customer-cell')
              .text(
                ord.customer || ''
              );


            /* PROVIDER */

            existing
              .find('.order-provider-cell')
              .text(
                ord.provider_name || '-'
              );


          } else {

            noResults.remove();

            tbody.prepend(
              rowHtml(ord)
            );

          }

        });


        \$('[data-toggle=\"tooltip\"]').tooltip();

      });

    }


    setInterval(
      poll,
      5000
    );

  })();

  //--></script>


  <!-- CUSTOMER AUTOCOMPLETE -->

  <script type=\"text/javascript\"><!--

  \$('input[name=\\'filter_customer\\']').autocomplete({

    'source': function(request, response) {

      \$.ajax({

        url:
          'index.php?route=customer/customer/autocomplete&user_token=";
        // line 1145
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +
          encodeURIComponent(request),

        dataType: 'json',

        success: function(json) {

          response(
            \$.map(json, function(item) {

              return {

                label: item['name'],

                value: item['customer_id']

              };

            })
          );

        }

      });

    },


    'select': function(item) {

      \$('input[name=\\'filter_customer\\']')
        .val(item['label']);

    }

  });

  //--></script>


  <!-- ORDER SELECTION -->

  <script type=\"text/javascript\"><!--

  function updateOrderSelectionActions() {

    \$('#button-shipping, #button-invoice, #button-delete')
      .prop('disabled', true);


    var selected =
      \$('input[name^=\\'selected\\']:checked');


    if (selected.length) {

      \$('#button-invoice')
        .prop('disabled', false);

      \$('#button-delete')
        .prop('disabled', false);

    }


    for (
      var i = 0;
      i < selected.length;
      i++
    ) {

      if (
        \$(selected[i])
          .parent()
          .find(
            'input[name^=\\'shipping_code\\']'
          )
          .val()
      ) {

        \$('#button-shipping')
          .prop('disabled', false);

        break;

      }

    }

  }


  \$(document).on(
    'change',
    'input[name^=\\'selected\\']',
    updateOrderSelectionActions
  );


  \$('#button-shipping, #button-invoice, #button-delete')
    .prop('disabled', true);


  \$('input[name^=\\'selected\\']:first')
    .trigger('change');


  // IE and Edge fix!

  \$('#button-shipping, #button-invoice, #button-delete')
    .on('click', function(e) {

      \$('#form-order')
        .attr(
          'action',
          this.getAttribute('formAction')
        );

    });


  \$(document).on(
    'click',
    '#form-order .dropdown-menu li:last-child a',
    function(e) {

      e.preventDefault();

      var element = this;


      if (confirm('";
        // line 1276
        echo ($context["text_confirm"] ?? null);
        echo "')) {

        \$.ajax({

          url:
            '";
        // line 1281
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/delete&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "&order_id=' +
            \$(element).attr('href'),

          dataType: 'json',


          beforeSend: function() {

            \$(element)
              .parent()
              .parent()
              .parent()
              .find('button')
              .button('loading');

          },


          complete: function() {

            \$(element)
              .parent()
              .parent()
              .parent()
              .find('button')
              .button('reset');

          },


          success: function(json) {

            \$('.alert-dismissible').remove();


            if (json['error']) {

              \$('#content > .container-fluid')
                .prepend(
                  '<div class=\"alert alert-danger alert-dismissible\">' +
                  '<i class=\"fa fa-exclamation-circle\"></i> ' +
                  json['error'] +
                  ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>' +
                  '</div>'
                );

            }


            if (json['success']) {

              location = '";
        // line 1332
        echo ($context["delete"] ?? null);
        echo "';

            }

          },


          error: function(
            xhr,
            ajaxOptions,
            thrownError
          ) {

            alert(
              thrownError +
              \"\\r\\n\" +
              xhr.statusText +
              \"\\r\\n\" +
              xhr.responseText
            );

          }

        });

      }

    }

  );

  //--></script>


  <!-- DATEPICKER -->

  <script
    src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\"
    type=\"text/javascript\"
  ></script>

  <link
    href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\"
    type=\"text/css\"
    rel=\"stylesheet\"
    media=\"screen\"
  />


  <script type=\"text/javascript\"><!--

  \$('.date').datetimepicker({

    language: '";
        // line 1385
        echo ($context["datepicker"] ?? null);
        echo "',

    pickTime: false

  });

  //--></script>


  <!-- STYLES -->

  <style>

    /* Colored status badges */

    .order-status-badge {

      display: inline-block;

      min-width: 86px;

      padding: 5px 10px;

      border-radius: 999px;

      border: 1px solid transparent;

      font-size: 12px;

      font-weight: 700;

      line-height: 1.2;

      text-align: center;

      white-space: nowrap;

      color: #fff;

      background: #64748b;

    }


    .order-status-id-0 {
      background: #64748b;
      border-color: #475569;
      color: #fff;
    }

    .order-status-id-1 {
      background: #f59e0b;
      border-color: #d97706;
      color: #fff;
    }

    .order-status-id-2 {
      background: #2563eb;
      border-color: #1d4ed8;
      color: #fff;
    }

    .order-status-id-3 {
      background: #0ea5e9;
      border-color: #0284c7;
      color: #fff;
    }

    .order-status-id-4 {
      background: #14b8a6;
      border-color: #0f766e;
      color: #fff;
    }

    .order-status-id-5 {
      background: #16a34a;
      border-color: #15803d;
      color: #fff;
    }

    .order-status-id-6 {
      background: #475569;
      border-color: #334155;
      color: #fff;
    }

    .order-status-id-7 {
      background: #be123c;
      border-color: #9f1239;
      color: #fff;
    }

    .order-status-id-8 {
      background: #7c3aed;
      border-color: #6d28a9;
      color: #fff;
    }

    .order-status-id-9 {
      background: #dc2626;
      border-color: #b91c1c;
      color: #fff;
    }

    .order-status-id-10 {
      background: #e11d48;
      border-color: #be123c;
      color: #fff;
    }

    .order-status-id-11 {
      background: #9333ea;
      border-color: #7e22c8;
      color: #fff;
    }

    .order-status-id-12 {
      background: #ea580c;
      border-color: #c2410c;
      color: #fff;
    }

    .order-status-id-13 {
      background: #4f46e5;
      border-color: #4338ca;
      color: #fff;
    }

    .order-status-id-14 {
      background: #15803d;
      border-color: #166534;
      color: #fff;
    }

    .order-status-id-15 {
      background: #0891b2;
      border-color: #0e7490;
      color: #0f172a;
    }

    .order-status-id-16 {
      background: #334155;
      border-color: #1e293b;
      color: #fff;
    }

    .order-status-id-17 {
      background: #059669;
      border-color: #047857;
      color: #fff;
    }


    /* Provider text */

    .order-provider-cell {
      color: #2563eb;
      font-weight: 600;
    }

  </style>

</div>

";
        // line 1549
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "sale/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2094 => 1549,  1927 => 1385,  1871 => 1332,  1813 => 1281,  1805 => 1276,  1671 => 1145,  1287 => 764,  1212 => 692,  1205 => 688,  1188 => 673,  1179 => 667,  1173 => 663,  1169 => 661,  1147 => 645,  1142 => 643,  1132 => 636,  1127 => 634,  1106 => 616,  1101 => 614,  1085 => 601,  1075 => 594,  1065 => 587,  1055 => 580,  1045 => 573,  1035 => 566,  1023 => 557,  1018 => 555,  1006 => 546,  996 => 539,  984 => 530,  978 => 526,  971 => 522,  965 => 518,  957 => 513,  951 => 509,  949 => 508,  940 => 502,  937 => 501,  933 => 500,  930 => 499,  928 => 498,  915 => 488,  906 => 481,  899 => 477,  895 => 476,  892 => 475,  885 => 471,  880 => 469,  876 => 468,  872 => 466,  870 => 465,  860 => 457,  853 => 453,  849 => 452,  846 => 451,  839 => 447,  834 => 445,  830 => 444,  826 => 442,  824 => 441,  814 => 433,  807 => 429,  803 => 428,  800 => 427,  793 => 423,  788 => 421,  784 => 420,  780 => 418,  778 => 417,  768 => 409,  761 => 405,  757 => 404,  754 => 403,  747 => 399,  742 => 397,  738 => 396,  734 => 394,  732 => 393,  722 => 385,  715 => 381,  711 => 380,  708 => 379,  701 => 375,  696 => 373,  692 => 372,  688 => 370,  686 => 369,  669 => 354,  662 => 350,  658 => 349,  655 => 348,  648 => 344,  643 => 342,  639 => 341,  635 => 339,  633 => 338,  623 => 330,  616 => 326,  612 => 325,  609 => 324,  602 => 320,  597 => 318,  593 => 317,  589 => 315,  587 => 314,  577 => 306,  570 => 302,  566 => 301,  563 => 300,  556 => 296,  551 => 294,  547 => 293,  543 => 291,  541 => 290,  500 => 252,  491 => 246,  487 => 245,  483 => 244,  479 => 243,  475 => 242,  471 => 241,  467 => 240,  463 => 239,  459 => 238,  439 => 221,  417 => 202,  413 => 201,  402 => 193,  380 => 174,  376 => 173,  365 => 165,  354 => 156,  347 => 154,  340 => 150,  336 => 149,  333 => 148,  326 => 144,  320 => 141,  316 => 139,  314 => 138,  311 => 137,  307 => 136,  283 => 115,  279 => 114,  272 => 110,  265 => 105,  258 => 103,  252 => 100,  247 => 99,  241 => 96,  236 => 95,  234 => 94,  231 => 93,  227 => 92,  224 => 91,  218 => 89,  212 => 87,  210 => 86,  201 => 80,  191 => 73,  187 => 72,  180 => 68,  170 => 61,  166 => 60,  159 => 56,  149 => 49,  137 => 39,  130 => 35,  127 => 34,  125 => 33,  122 => 32,  115 => 28,  112 => 27,  110 => 26,  102 => 20,  91 => 18,  87 => 17,  81 => 14,  73 => 11,  65 => 10,  59 => 9,  53 => 8,  49 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_list.twig", "");
    }
}
