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
class __TwigTemplate_d027c7c8cc63d6567421273e3303abdd extends Template
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
<div id=\"content\">
<div class=\"page-header\">
  <div class=\"container-fluid\">
    <div class=\"pull-right\">
      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-order').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"></button>
      <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 7
        echo ($context["shipping"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></button>
      <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 8
        echo ($context["invoice"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></button>
      <button type=\"submit\" id=\"button-delete\" form=\"form-order\" formaction=\"";
        // line 9
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" disabled=\"disabled\" onclick=\"return confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "');\"><i class=\"fa fa-trash-o\"></i></button>
      <a href=\"";
        // line 10
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
    </div>

    <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>

    <ul class=\"breadcrumb\">
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </ul>
  </div>
</div>

<div class=\"container-fluid\">

  ";
        // line 25
        if (($context["error_warning"] ?? null)) {
            // line 26
            echo "  <div class=\"alert alert-danger alert-dismissible\">
    <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 27
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        if (($context["success"] ?? null)) {
            // line 33
            echo "  <div class=\"alert alert-success alert-dismissible\">
    <i class=\"fa fa-check-circle\"></i> ";
            // line 34
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 38
        echo "
  <div class=\"row\">

    <!-- FILTER -->
    <div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">

      <div class=\"panel panel-default\">

        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">
            <i class=\"fa fa-filter\"></i> ";
        // line 48
        echo ($context["text_filter"] ?? null);
        echo "
          </h3>
        </div>

        <div class=\"panel-body\">

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-id\">";
        // line 55
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <input
              type=\"text\"
              name=\"filter_order_id\"
              value=\"";
        // line 59
        echo ($context["filter_order_id"] ?? null);
        echo "\"
              placeholder=\"";
        // line 60
        echo ($context["entry_order_id"] ?? null);
        echo "\"
              id=\"input-order-id\"
              class=\"form-control\"
            />
          </div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-customer\">";
        // line 67
        echo ($context["entry_customer"] ?? null);
        echo "</label>
            <input
              type=\"text\"
              name=\"filter_customer\"
              value=\"";
        // line 71
        echo ($context["filter_customer"] ?? null);
        echo "\"
              placeholder=\"";
        // line 72
        echo ($context["entry_customer"] ?? null);
        echo "\"
              id=\"input-customer\"
              class=\"form-control\"
            />
          </div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-status\">";
        // line 79
        echo ($context["entry_order_status"] ?? null);
        echo "</label>

            <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">

              <option value=\"\"></option>

              ";
        // line 85
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            // line 86
            echo "              <option value=\"0\" selected=\"selected\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
              ";
        } else {
            // line 88
            echo "              <option value=\"0\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
              ";
        }
        // line 90
        echo "
              ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 92
            echo "
                ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 93) == ($context["filter_order_status_id"] ?? null))) {
                // line 94
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 94);
                echo "\" selected=\"selected\">
                  ";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 95);
                echo "
                </option>
                ";
            } else {
                // line 98
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 98);
                echo "\">
                  ";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 99);
                echo "
                </option>
                ";
            }
            // line 102
            echo "
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
            </select>
          </div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-total\">";
        // line 109
        echo ($context["entry_total"] ?? null);
        echo "</label>
            <input
              type=\"text\"
              name=\"filter_total\"
              value=\"";
        // line 113
        echo ($context["filter_total"] ?? null);
        echo "\"
              placeholder=\"";
        // line 114
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
        // line 166
        echo ($context["entry_date_added"] ?? null);
        echo "
            </label>

            <div class=\"input-group date\">

              <input
                type=\"text\"
                name=\"filter_date_added\"
                value=\"";
        // line 174
        echo ($context["filter_date_added"] ?? null);
        echo "\"
                placeholder=\"";
        // line 175
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
        // line 194
        echo ($context["entry_date_modified"] ?? null);
        echo "
            </label>

            <div class=\"input-group date\">

              <input
                type=\"text\"
                name=\"filter_date_modified\"
                value=\"";
        // line 202
        echo ($context["filter_date_modified"] ?? null);
        echo "\"
                placeholder=\"";
        // line 203
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
        // line 222
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
        // line 239
        echo ((array_key_exists("poll_url", $context)) ? (_twig_default_filter(($context["poll_url"] ?? null), "")) : (""));
        echo "\"
        data-button-view=\"";
        // line 240
        echo ($context["button_view"] ?? null);
        echo "\"
        data-button-edit=\"";
        // line 241
        echo ($context["button_edit"] ?? null);
        echo "\"
        data-button-delete=\"";
        // line 242
        echo ($context["button_delete"] ?? null);
        echo "\"
        data-text-confirm=\"";
        // line 243
        echo ($context["text_confirm"] ?? null);
        echo "\"
        data-catalog=\"";
        // line 244
        echo ($context["catalog"] ?? null);
        echo "\"
        data-api-token=\"";
        // line 245
        echo ($context["api_token"] ?? null);
        echo "\"
        data-store-id=\"";
        // line 246
        echo ($context["store_id"] ?? null);
        echo "\"
        data-delete-url=\"";
        // line 247
        echo ($context["delete"] ?? null);
        echo "\"
      >

        <div class=\"panel-heading\">

          <h3 class=\"panel-title\">
            <i class=\"fa fa-list\"></i> ";
        // line 253
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
        // line 291
        if ((($context["sort"] ?? null) == "o.order_id")) {
            // line 292
            echo "
                        <a
                          href=\"";
            // line 294
            echo ($context["sort_order"] ?? null);
            echo "\"
                          class=\"";
            // line 295
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"
                        >
                          ";
            // line 297
            echo ($context["column_order_id"] ?? null);
            echo "
                        </a>

                      ";
        } else {
            // line 301
            echo "
                        <a href=\"";
            // line 302
            echo ($context["sort_order"] ?? null);
            echo "\">
                          ";
            // line 303
            echo ($context["column_order_id"] ?? null);
            echo "
                        </a>

                      ";
        }
        // line 307
        echo "
                    </td>


                    <!-- CUSTOMER -->

                    <td class=\"text-left\">

                      ";
        // line 315
        if ((($context["sort"] ?? null) == "customer")) {
            // line 316
            echo "
                        <a
                          href=\"";
            // line 318
            echo ($context["sort_customer"] ?? null);
            echo "\"
                          class=\"";
            // line 319
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"
                        >
                          ";
            // line 321
            echo ($context["column_customer"] ?? null);
            echo "
                        </a>

                      ";
        } else {
            // line 325
            echo "
                        <a href=\"";
            // line 326
            echo ($context["sort_customer"] ?? null);
            echo "\">
                          ";
            // line 327
            echo ($context["column_customer"] ?? null);
            echo "
                        </a>

                      ";
        }
        // line 331
        echo "
                    </td>


                    <!-- STATUS -->

                    <td class=\"text-left\">

                      ";
        // line 339
        if ((($context["sort"] ?? null) == "order_status")) {
            // line 340
            echo "
                        <a
                          href=\"";
            // line 342
            echo ($context["sort_status"] ?? null);
            echo "\"
                          class=\"";
            // line 343
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"
                        >
                          ";
            // line 345
            echo ($context["column_status"] ?? null);
            echo "
                        </a>

                      ";
        } else {
            // line 349
            echo "
                        <a href=\"";
            // line 350
            echo ($context["sort_status"] ?? null);
            echo "\">
                          ";
            // line 351
            echo ($context["column_status"] ?? null);
            echo "
                        </a>

                      ";
        }
        // line 355
        echo "
                    </td>


                    <!-- PROVIDER -->

<td class=\"text-left\">

  ";
        // line 363
        if ((($context["sort"] ?? null) == "o.provider_name")) {
            // line 364
            echo "
    <a
      href=\"";
            // line 366
            echo ($context["sort_provider"] ?? null);
            echo "\"
      class=\"";
            // line 367
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"
    >
      Provider
    </a>

  ";
        } else {
            // line 373
            echo "
    <a href=\"";
            // line 374
            echo ($context["sort_provider"] ?? null);
            echo "\">
      Provider
    </a>

  ";
        }
        // line 379
        echo "
</td>


                    <!-- BUY PROVIDER TRY -->

                    <td class=\"text-left\">

                      ";
        // line 387
        if ((($context["sort"] ?? null) == "buy_total")) {
            // line 388
            echo "
                        <a
                          href=\"";
            // line 390
            echo ($context["buy_total"] ?? null);
            echo "\"
                          class=\"";
            // line 391
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"
                        >
                          ";
            // line 393
            echo ($context["column_buy_provider_try"] ?? null);
            echo "
                        </a>

                      ";
        } else {
            // line 397
            echo "
                        <a href=\"";
            // line 398
            echo ($context["buy_total"] ?? null);
            echo "\">
                          ";
            // line 399
            echo ($context["column_buy_provider_try"] ?? null);
            echo "
                        </a>

                      ";
        }
        // line 403
        echo "
                    </td>


                    <!-- SELL -->

                    <td class=\"text-right\">

                      ";
        // line 411
        if ((($context["sort"] ?? null) == "o.total")) {
            // line 412
            echo "
                        <a
                          href=\"";
            // line 414
            echo ($context["sort_total"] ?? null);
            echo "\"
                          class=\"";
            // line 415
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"
                        >
                          ";
            // line 417
            echo ($context["column_sell"] ?? null);
            echo "
                        </a>

                      ";
        } else {
            // line 421
            echo "
                        <a href=\"";
            // line 422
            echo ($context["sort_total"] ?? null);
            echo "\">
                          ";
            // line 423
            echo ($context["column_sell"] ?? null);
            echo "
                        </a>

                      ";
        }
        // line 427
        echo "
                    </td>


                    <!-- PROFIT -->

                    <td class=\"text-left\">

                      ";
        // line 435
        if ((($context["sort"] ?? null) == "profit_try")) {
            // line 436
            echo "
                        <a
                          href=\"";
            // line 438
            echo ($context["profit_try"] ?? null);
            echo "\"
                          class=\"";
            // line 439
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"
                        >
                          ";
            // line 441
            echo ($context["column_profit_try"] ?? null);
            echo "
                        </a>

                      ";
        } else {
            // line 445
            echo "
                        <a href=\"";
            // line 446
            echo ($context["profit_try"] ?? null);
            echo "\">
                          ";
            // line 447
            echo ($context["column_profit_try"] ?? null);
            echo "
                        </a>

                      ";
        }
        // line 451
        echo "
                    </td>


                    <!-- DATE ADDED -->

                    <td class=\"text-left\">

                      ";
        // line 459
        if ((($context["sort"] ?? null) == "o.date_added")) {
            // line 460
            echo "
                        <a
                          href=\"";
            // line 462
            echo ($context["sort_date_added"] ?? null);
            echo "\"
                          class=\"";
            // line 463
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"
                        >
                          ";
            // line 465
            echo ($context["column_date_added"] ?? null);
            echo "
                        </a>

                      ";
        } else {
            // line 469
            echo "
                        <a href=\"";
            // line 470
            echo ($context["sort_date_added"] ?? null);
            echo "\">
                          ";
            // line 471
            echo ($context["column_date_added"] ?? null);
            echo "
                        </a>

                      ";
        }
        // line 475
        echo "
                    </td>


                    <!-- DATE MODIFIED -->

                    <td class=\"text-left\">

                      ";
        // line 483
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            // line 484
            echo "
                        <a
                          href=\"";
            // line 486
            echo ($context["sort_date_modified"] ?? null);
            echo "\"
                          class=\"";
            // line 487
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"
                        >
                          ";
            // line 489
            echo ($context["column_date_modified"] ?? null);
            echo "
                        </a>

                      ";
        } else {
            // line 493
            echo "
                        <a href=\"";
            // line 494
            echo ($context["sort_date_modified"] ?? null);
            echo "\">
                          ";
            // line 495
            echo ($context["column_date_modified"] ?? null);
            echo "
                        </a>

                      ";
        }
        // line 499
        echo "
                    </td>


                    <!-- ACTION -->

                    <td class=\"text-right\">
                      ";
        // line 506
        echo ($context["column_action"] ?? null);
        echo "
                    </td>

                  </tr>

                </thead>


                <tbody id=\"order-list-tbody\">

                  ";
        // line 516
        if (($context["orders"] ?? null)) {
            // line 517
            echo "
                    ";
            // line 518
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 519
                echo "
                    <tr data-order-id=\"";
                // line 520
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 520);
                echo "\">

                      <!-- CHECKBOX -->

                      <td class=\"text-center\">

                        ";
                // line 526
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 526), ($context["selected"] ?? null))) {
                    // line 527
                    echo "
                          <input
                            type=\"checkbox\"
                            name=\"selected[]\"
                            value=\"";
                    // line 531
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 531);
                    echo "\"
                            checked=\"checked\"
                          />

                        ";
                } else {
                    // line 536
                    echo "
                          <input
                            type=\"checkbox\"
                            name=\"selected[]\"
                            value=\"";
                    // line 540
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 540);
                    echo "\"
                          />

                        ";
                }
                // line 544
                echo "
                        <input
                          type=\"hidden\"
                          name=\"shipping_code[]\"
                          value=\"";
                // line 548
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", true, true, false, 548)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", false, false, false, 548), "")) : (""));
                echo "\"
                        />

                      </td>


                      <!-- ORDER ID -->

                      <td class=\"text-right order-id-cell\">
                        ";
                // line 557
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 557);
                echo "
                      </td>


                      <!-- CUSTOMER -->

                      <td class=\"text-left order-customer-cell\">
                        ";
                // line 564
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 564);
                echo "
                      </td>


                      <!-- STATUS -->

                      <td class=\"text-left order-status-cell\">

                        <span
                          class=\"order-status-badge order-status-id-";
                // line 573
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "order_status_id", [], "any", true, true, false, 573)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_status_id", [], "any", false, false, false, 573), 0)) : (0));
                echo "\"
                        >
                          ";
                // line 575
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 575);
                echo "
                        </span>

                      </td>


                      <!-- PROVIDER -->

                      <td class=\"text-left order-provider-cell\">
                        ";
                // line 584
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "provider_name", [], "any", true, true, false, 584)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "provider_name", [], "any", false, false, false, 584), "-")) : ("-"));
                echo "
                      </td>


                      <!-- BUY -->

                      <td class=\"text-right order-buy-cell\">
                        ";
                // line 591
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "buy_total", [], "any", true, true, false, 591)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "buy_total", [], "any", false, false, false, 591), "-")) : ("-"));
                echo "
                      </td>


                      <!-- SELL -->

                      <td class=\"text-right order-total-cell\">
                        ";
                // line 598
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "sell_total", [], "any", true, true, false, 598)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "sell_total", [], "any", false, false, false, 598), "-")) : ("-"));
                echo "
                      </td>


                      <!-- PROFIT -->

                      <td class=\"text-right order-profit-cell\">
                        ";
                // line 605
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "profit_total", [], "any", true, true, false, 605)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "profit_total", [], "any", false, false, false, 605), "-")) : ("-"));
                echo "
                      </td>


                      <!-- DATE ADDED -->

                      <td class=\"text-left order-date-added-cell\">
                        ";
                // line 612
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 612);
                echo "
                      </td>


                      <!-- DATE MODIFIED -->

                      <td class=\"text-left order-date-modified-cell\">
                        ";
                // line 619
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_modified", [], "any", false, false, false, 619);
                echo "
                      </td>


                      <!-- ACTION -->

                      <td class=\"text-right\">

                        <div style=\"min-width: 120px;\">

                          <div class=\"btn-group\">

                            <a
                              href=\"";
                // line 632
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 632);
                echo "\"
                              data-toggle=\"tooltip\"
                              title=\"";
                // line 634
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
                // line 652
                echo twig_get_attribute($this->env, $this->source, $context["order"], "edit", [], "any", false, false, false, 652);
                echo "\">
                                  <i class=\"fa fa-pencil\"></i>
                                  ";
                // line 654
                echo ($context["button_edit"] ?? null);
                echo "
                                </a>

                              </li>

                              <li>

                                <a href=\"";
                // line 661
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 661);
                echo "\">
                                  <i class=\"fa fa-trash-o\"></i>
                                  ";
                // line 663
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
            // line 679
            echo "
                  ";
        } else {
            // line 681
            echo "
                    <tr id=\"order-list-no-results\">

                      <td class=\"text-center\" colspan=\"11\">
                        ";
            // line 685
            echo ($context["text_no_results"] ?? null);
            echo "
                      </td>

                    </tr>

                  ";
        }
        // line 691
        echo "
                </tbody>

              </table>

            </div>

          </form>


          <!-- PAGINATION -->

          <div class=\"row\">

            <div class=\"col-sm-6 text-left\">
              ";
        // line 706
        echo ($context["pagination"] ?? null);
        echo "
            </div>

            <div class=\"col-sm-6 text-right\">
              ";
        // line 710
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
        // line 782
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
        // line 1163
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
        // line 1294
        echo ($context["text_confirm"] ?? null);
        echo "')) {

        \$.ajax({

          url:
            '";
        // line 1299
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
        // line 1350
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
        // line 1403
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
      color: #333;
      font-weight: 400;
    }

  </style>

</div>

";
        // line 1567
        echo ($context["footer"] ?? null);
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
        return array (  2126 => 1567,  1959 => 1403,  1903 => 1350,  1845 => 1299,  1837 => 1294,  1703 => 1163,  1319 => 782,  1244 => 710,  1237 => 706,  1220 => 691,  1211 => 685,  1205 => 681,  1201 => 679,  1179 => 663,  1174 => 661,  1164 => 654,  1159 => 652,  1138 => 634,  1133 => 632,  1117 => 619,  1107 => 612,  1097 => 605,  1087 => 598,  1077 => 591,  1067 => 584,  1055 => 575,  1050 => 573,  1038 => 564,  1028 => 557,  1016 => 548,  1010 => 544,  1003 => 540,  997 => 536,  989 => 531,  983 => 527,  981 => 526,  972 => 520,  969 => 519,  965 => 518,  962 => 517,  960 => 516,  947 => 506,  938 => 499,  931 => 495,  927 => 494,  924 => 493,  917 => 489,  912 => 487,  908 => 486,  904 => 484,  902 => 483,  892 => 475,  885 => 471,  881 => 470,  878 => 469,  871 => 465,  866 => 463,  862 => 462,  858 => 460,  856 => 459,  846 => 451,  839 => 447,  835 => 446,  832 => 445,  825 => 441,  820 => 439,  816 => 438,  812 => 436,  810 => 435,  800 => 427,  793 => 423,  789 => 422,  786 => 421,  779 => 417,  774 => 415,  770 => 414,  766 => 412,  764 => 411,  754 => 403,  747 => 399,  743 => 398,  740 => 397,  733 => 393,  728 => 391,  724 => 390,  720 => 388,  718 => 387,  708 => 379,  700 => 374,  697 => 373,  688 => 367,  684 => 366,  680 => 364,  678 => 363,  668 => 355,  661 => 351,  657 => 350,  654 => 349,  647 => 345,  642 => 343,  638 => 342,  634 => 340,  632 => 339,  622 => 331,  615 => 327,  611 => 326,  608 => 325,  601 => 321,  596 => 319,  592 => 318,  588 => 316,  586 => 315,  576 => 307,  569 => 303,  565 => 302,  562 => 301,  555 => 297,  550 => 295,  546 => 294,  542 => 292,  540 => 291,  499 => 253,  490 => 247,  486 => 246,  482 => 245,  478 => 244,  474 => 243,  470 => 242,  466 => 241,  462 => 240,  458 => 239,  438 => 222,  416 => 203,  412 => 202,  401 => 194,  379 => 175,  375 => 174,  364 => 166,  352 => 156,  345 => 154,  338 => 150,  334 => 149,  331 => 148,  324 => 144,  318 => 141,  314 => 139,  312 => 138,  309 => 137,  305 => 136,  280 => 114,  276 => 113,  269 => 109,  262 => 104,  255 => 102,  249 => 99,  244 => 98,  238 => 95,  233 => 94,  231 => 93,  228 => 92,  224 => 91,  221 => 90,  215 => 88,  209 => 86,  207 => 85,  198 => 79,  188 => 72,  184 => 71,  177 => 67,  167 => 60,  163 => 59,  156 => 55,  146 => 48,  134 => 38,  127 => 34,  124 => 33,  122 => 32,  119 => 31,  112 => 27,  109 => 26,  107 => 25,  99 => 19,  88 => 17,  84 => 16,  78 => 13,  70 => 10,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_list.twig", "");
    }
}
