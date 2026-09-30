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
class __TwigTemplate_ef59b91456899c8644894a45a1fce911 extends Template
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

  <!-- =========================
       PAGE HEADER
  ========================== -->
  <div class=\"page-header\">
    <div class=\"container-fluid\">

      <div class=\"pull-right\">
        <button type=\"button\"
                data-toggle=\"tooltip\"
                title=\"";
        // line 15
        echo ($context["button_filter"] ?? null);
        echo "\"
                onclick=\"\$('#filter-order').toggleClass('hidden-sm hidden-xs');\"
                class=\"btn btn-default hidden-md hidden-lg\">
          <i class=\"fa fa-filter\"></i>
        </button>

        <button type=\"submit\"
                id=\"button-shipping\"
                form=\"form-order\"
                formaction=\"";
        // line 24
        echo ($context["shipping"] ?? null);
        echo "\"
                formtarget=\"_blank\"
                data-toggle=\"tooltip\"
                title=\"";
        // line 27
        echo ($context["button_shipping_print"] ?? null);
        echo "\"
                class=\"btn btn-info\">
          <i class=\"fa fa-truck\"></i>
        </button>

        <button type=\"submit\"
                id=\"button-invoice\"
                form=\"form-order\"
                formaction=\"";
        // line 35
        echo ($context["invoice"] ?? null);
        echo "\"
                formtarget=\"_blank\"
                data-toggle=\"tooltip\"
                title=\"";
        // line 38
        echo ($context["button_invoice_print"] ?? null);
        echo "\"
                class=\"btn btn-info\">
          <i class=\"fa fa-print\"></i>
        </button>

        <button type=\"submit\"
                id=\"button-delete\"
                form=\"form-order\"
                formaction=\"";
        // line 46
        echo ($context["delete"] ?? null);
        echo "\"
                data-toggle=\"tooltip\"
                title=\"";
        // line 48
        echo ($context["button_delete"] ?? null);
        echo "\"
                class=\"btn btn-danger\"
                disabled=\"disabled\"
                onclick=\"return confirm('";
        // line 51
        echo ($context["text_confirm"] ?? null);
        echo "');\">
          <i class=\"fa fa-trash-o\"></i>
        </button>

        <a href=\"";
        // line 55
        echo ($context["add"] ?? null);
        echo "\"
           data-toggle=\"tooltip\"
           title=\"";
        // line 57
        echo ($context["button_add"] ?? null);
        echo "\"
           class=\"btn btn-primary\">
          <i class=\"fa fa-plus\"></i>
        </a>
      </div>

      <h1>";
        // line 63
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      <ul class=\"breadcrumb\">
        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 67
            echo "          <li>
            <a href=\"";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 68);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 68);
            echo "</a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "      </ul>

    </div>
  </div>


  <!-- =========================
       CONTENT
  ========================== -->
  <div class=\"container-fluid\">

    ";
        // line 82
        if (($context["error_warning"] ?? null)) {
            // line 83
            echo "      <div class=\"alert alert-danger alert-dismissible\">
        <i class=\"fa fa-exclamation-circle\"></i>
        ";
            // line 85
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 89
        echo "
    ";
        // line 90
        if (($context["success"] ?? null)) {
            // line 91
            echo "      <div class=\"alert alert-success alert-dismissible\">
        <i class=\"fa fa-check-circle\"></i>
        ";
            // line 93
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 97
        echo "

    <div class=\"row\">

      <!-- =========================
           FILTER
      ========================== -->
      <div id=\"filter-order\"
           class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">

        <div class=\"panel panel-default\">

          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              <i class=\"fa fa-filter\"></i>
              ";
        // line 112
        echo ($context["text_filter"] ?? null);
        echo "
            </h3>
          </div>

          <div class=\"panel-body\">

            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-order-id\">
                ";
        // line 120
        echo ($context["entry_order_id"] ?? null);
        echo "
              </label>

              <input type=\"text\"
                     name=\"filter_order_id\"
                     value=\"";
        // line 125
        echo ($context["filter_order_id"] ?? null);
        echo "\"
                     placeholder=\"";
        // line 126
        echo ($context["entry_order_id"] ?? null);
        echo "\"
                     id=\"input-order-id\"
                     class=\"form-control\" />
            </div>


            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-customer\">
                ";
        // line 134
        echo ($context["entry_customer"] ?? null);
        echo "
              </label>

              <input type=\"text\"
                     name=\"filter_customer\"
                     value=\"";
        // line 139
        echo ($context["filter_customer"] ?? null);
        echo "\"
                     placeholder=\"";
        // line 140
        echo ($context["entry_customer"] ?? null);
        echo "\"
                     id=\"input-customer\"
                     class=\"form-control\" />
            </div>


            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-order-status\">
                ";
        // line 148
        echo ($context["entry_order_status"] ?? null);
        echo "
              </label>

              <select name=\"filter_order_status_id\"
                      id=\"input-order-status\"
                      class=\"form-control\">

                <option value=\"\"></option>

                ";
        // line 157
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            // line 158
            echo "                  <option value=\"0\" selected=\"selected\">
                    ";
            // line 159
            echo ($context["text_missing"] ?? null);
            echo "
                  </option>
                ";
        } else {
            // line 162
            echo "                  <option value=\"0\">
                    ";
            // line 163
            echo ($context["text_missing"] ?? null);
            echo "
                  </option>
                ";
        }
        // line 166
        echo "
                ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 168
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 168) == ($context["filter_order_status_id"] ?? null))) {
                // line 169
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 169);
                echo "\"
                            selected=\"selected\">
                      ";
                // line 171
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 171);
                echo "
                    </option>
                  ";
            } else {
                // line 174
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 174);
                echo "\">
                      ";
                // line 175
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 175);
                echo "
                    </option>
                  ";
            }
            // line 178
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "
              </select>
            </div>


            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-total\">
                ";
        // line 186
        echo ($context["entry_total"] ?? null);
        echo "
              </label>

              <input type=\"text\"
                     name=\"filter_total\"
                     value=\"";
        // line 191
        echo ($context["filter_total"] ?? null);
        echo "\"
                     placeholder=\"";
        // line 192
        echo ($context["entry_total"] ?? null);
        echo "\"
                     id=\"input-total\"
                     class=\"form-control\" />
            </div>


            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">
                ";
        // line 200
        echo ($context["entry_date_added"] ?? null);
        echo "
              </label>

              <div class=\"input-group date\">
                <input type=\"text\"
                       name=\"filter_date_added\"
                       value=\"";
        // line 206
        echo ($context["filter_date_added"] ?? null);
        echo "\"
                       placeholder=\"";
        // line 207
        echo ($context["entry_date_added"] ?? null);
        echo "\"
                       data-date-format=\"YYYY-MM-DD\"
                       id=\"input-date-added\"
                       class=\"form-control\" />

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
        // line 223
        echo ($context["entry_date_modified"] ?? null);
        echo "
              </label>

              <div class=\"input-group date\">
                <input type=\"text\"
                       name=\"filter_date_modified\"
                       value=\"";
        // line 229
        echo ($context["filter_date_modified"] ?? null);
        echo "\"
                       placeholder=\"";
        // line 230
        echo ($context["entry_date_modified"] ?? null);
        echo "\"
                       data-date-format=\"YYYY-MM-DD\"
                       id=\"input-date-modified\"
                       class=\"form-control\" />

                <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\">
                    <i class=\"fa fa-calendar\"></i>
                  </button>
                </span>
              </div>
            </div>


            <div class=\"form-group text-right\">
              <button type=\"button\"
                      id=\"button-filter\"
                      class=\"btn btn-default\">
                <i class=\"fa fa-filter\"></i>
                ";
        // line 249
        echo ($context["button_filter"] ?? null);
        echo "
              </button>
            </div>

          </div>
        </div>
      </div>


      <!-- =========================
           ORDER LIST
      ========================== -->
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">

        <div class=\"panel panel-default\"
             id=\"order-list-panel\"
             data-poll-url=\"";
        // line 265
        echo ((array_key_exists("poll_url", $context)) ? (_twig_default_filter(($context["poll_url"] ?? null), "")) : (""));
        echo "\"
             data-button-view=\"";
        // line 266
        echo ($context["button_view"] ?? null);
        echo "\"
             data-button-edit=\"";
        // line 267
        echo ($context["button_edit"] ?? null);
        echo "\"
             data-button-delete=\"";
        // line 268
        echo ($context["button_delete"] ?? null);
        echo "\"
             data-text-confirm=\"";
        // line 269
        echo ($context["text_confirm"] ?? null);
        echo "\"
             data-catalog=\"";
        // line 270
        echo ($context["catalog"] ?? null);
        echo "\"
             data-api-token=\"";
        // line 271
        echo ($context["api_token"] ?? null);
        echo "\"
             data-store-id=\"";
        // line 272
        echo ($context["store_id"] ?? null);
        echo "\"
             data-delete-url=\"";
        // line 273
        echo ($context["delete"] ?? null);
        echo "\">

          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              <i class=\"fa fa-list\"></i>
              ";
        // line 278
        echo ($context["text_list"] ?? null);
        echo "
            </h3>
          </div>


          <div class=\"panel-body\">

            <form method=\"post\"
                  action=\"\"
                  enctype=\"multipart/form-data\"
                  id=\"form-order\">

              <div class=\"table-responsive order-table-wrapper\">

                <table class=\"table table-bordered table-hover order-table\">

                  <!-- =========================
                       TABLE HEADER
                  ========================== -->
                  <thead>
                    <tr>

                      <td class=\"order-check\">
                        <input type=\"checkbox\"
                               onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked).trigger('change');\" />
                      </td>


                      <td class=\"order-id-head\">
                        ";
        // line 307
        if ((($context["sort"] ?? null) == "o.order_id")) {
            // line 308
            echo "                          <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\"
                             class=\"";
            // line 309
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                            ";
            // line 310
            echo ($context["column_order_id"] ?? null);
            echo "
                          </a>
                        ";
        } else {
            // line 313
            echo "                          <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\">
                            ";
            // line 314
            echo ($context["column_order_id"] ?? null);
            echo "
                          </a>
                        ";
        }
        // line 317
        echo "                      </td>


                      <td class=\"order-customer-head\">
                        ";
        // line 321
        if ((($context["sort"] ?? null) == "customer")) {
            // line 322
            echo "                          <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\"
                             class=\"";
            // line 323
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                            ";
            // line 324
            echo ($context["column_customer"] ?? null);
            echo "
                          </a>
                        ";
        } else {
            // line 327
            echo "                          <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">
                            ";
            // line 328
            echo ($context["column_customer"] ?? null);
            echo "
                          </a>
                        ";
        }
        // line 331
        echo "                      </td>


                      <td class=\"order-status-head\">
                        ";
        // line 335
        if ((($context["sort"] ?? null) == "order_status")) {
            // line 336
            echo "                          <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\"
                             class=\"";
            // line 337
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                            ";
            // line 338
            echo ($context["column_status"] ?? null);
            echo "
                          </a>
                        ";
        } else {
            // line 341
            echo "                          <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">
                            ";
            // line 342
            echo ($context["column_status"] ?? null);
            echo "
                          </a>
                        ";
        }
        // line 345
        echo "                      </td>


                      <td class=\"money-head\">
                        BUY
                        <small>Provider TRY</small>
                      </td>


                      <td class=\"money-head\">
                        ";
        // line 355
        if ((($context["sort"] ?? null) == "o.total")) {
            // line 356
            echo "                          <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\"
                             class=\"";
            // line 357
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                            SELL
                          </a>
                        ";
        } else {
            // line 361
            echo "                          <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\">
                            SELL
                          </a>
                        ";
        }
        // line 365
        echo "                      </td>


                      <td class=\"money-head\">
                        PROFIT
                        <small>TRY</small>
                      </td>


                      <td class=\"date-head\">
                        ";
        // line 375
        if ((($context["sort"] ?? null) == "o.date_added")) {
            // line 376
            echo "                          <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\"
                             class=\"";
            // line 377
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                            ";
            // line 378
            echo ($context["column_date_added"] ?? null);
            echo "
                          </a>
                        ";
        } else {
            // line 381
            echo "                          <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">
                            ";
            // line 382
            echo ($context["column_date_added"] ?? null);
            echo "
                          </a>
                        ";
        }
        // line 385
        echo "                      </td>


                      <td class=\"date-head\">
                        ";
        // line 389
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            // line 390
            echo "                          <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\"
                             class=\"";
            // line 391
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                            ";
            // line 392
            echo ($context["column_date_modified"] ?? null);
            echo "
                          </a>
                        ";
        } else {
            // line 395
            echo "                          <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">
                            ";
            // line 396
            echo ($context["column_date_modified"] ?? null);
            echo "
                          </a>
                        ";
        }
        // line 399
        echo "                      </td>


                      <td class=\"action-head\">
                        ";
        // line 403
        echo ($context["column_action"] ?? null);
        echo "
                      </td>

                    </tr>
                  </thead>


                  <!-- =========================
                       TABLE BODY
                  ========================== -->
                  <tbody id=\"order-list-tbody\">

                    ";
        // line 415
        if (($context["orders"] ?? null)) {
            // line 416
            echo "
                      ";
            // line 417
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 418
                echo "
                        <tr data-order-id=\"";
                // line 419
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 419);
                echo "\">

                          <td class=\"text-center order-check\">
                            ";
                // line 422
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 422), ($context["selected"] ?? null))) {
                    // line 423
                    echo "                              <input type=\"checkbox\"
                                     name=\"selected[]\"
                                     value=\"";
                    // line 425
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 425);
                    echo "\"
                                     checked=\"checked\" />
                            ";
                } else {
                    // line 428
                    echo "                              <input type=\"checkbox\"
                                     name=\"selected[]\"
                                     value=\"";
                    // line 430
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 430);
                    echo "\" />
                            ";
                }
                // line 432
                echo "
                            <input type=\"hidden\"
                                   name=\"shipping_code[]\"
                                   value=\"";
                // line 435
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", true, true, false, 435)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", false, false, false, 435), "")) : (""));
                echo "\" />
                          </td>


                          <td class=\"text-right order-id-cell\">
                            ";
                // line 440
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 440);
                echo "
                          </td>


                          <td class=\"order-customer-cell\">
                            ";
                // line 445
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 445);
                echo "
                          </td>


                          <td class=\"order-status-cell\">
                            <span class=\"order-status-badge order-status-id-";
                // line 450
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "order_status_id", [], "any", true, true, false, 450)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_status_id", [], "any", false, false, false, 450), 0)) : (0));
                echo "\">
                              ";
                // line 451
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 451);
                echo "
                            </span>
                          </td>


                          <td class=\"text-right order-buy-cell money-cell\">
                            ";
                // line 457
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "buy_total", [], "any", true, true, false, 457)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "buy_total", [], "any", false, false, false, 457), "-")) : ("-"));
                echo "
                          </td>


                          <td class=\"text-right order-total-cell order-sell-cell money-cell\">
                            ";
                // line 462
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "sell_total", [], "any", true, true, false, 462)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "sell_total", [], "any", false, false, false, 462), twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 462))) : (twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 462)));
                echo "
                          </td>


                          <td class=\"text-right order-profit-cell money-cell\">
                            ";
                // line 467
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "profit_total", [], "any", true, true, false, 467)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "profit_total", [], "any", false, false, false, 467), "-")) : ("-"));
                echo "
                          </td>


                          <td class=\"order-date-added-cell date-cell\">
                            ";
                // line 472
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 472);
                echo "
                          </td>


                          <td class=\"order-date-modified-cell date-cell\">
                            ";
                // line 477
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_modified", [], "any", false, false, false, 477);
                echo "
                          </td>


                          <td class=\"text-center action-cell\">

                            <div class=\"btn-group\">

                              <a href=\"";
                // line 485
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 485);
                echo "\"
                                 data-toggle=\"tooltip\"
                                 title=\"";
                // line 487
                echo ($context["button_view"] ?? null);
                echo "\"
                                 class=\"btn btn-primary\">
                                <i class=\"fa fa-eye\"></i>
                              </a>

                              <button type=\"button\"
                                      data-toggle=\"dropdown\"
                                      class=\"btn btn-primary dropdown-toggle\">
                                <span class=\"caret\"></span>
                              </button>

                              <ul class=\"dropdown-menu dropdown-menu-right\">

                                <li>
                                  <a href=\"";
                // line 501
                echo twig_get_attribute($this->env, $this->source, $context["order"], "edit", [], "any", false, false, false, 501);
                echo "\">
                                    <i class=\"fa fa-pencil\"></i>
                                    ";
                // line 503
                echo ($context["button_edit"] ?? null);
                echo "
                                  </a>
                                </li>

                                <li>
                                  <a href=\"";
                // line 508
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 508);
                echo "\">
                                    <i class=\"fa fa-trash-o\"></i>
                                    ";
                // line 510
                echo ($context["button_delete"] ?? null);
                echo "
                                  </a>
                                </li>

                              </ul>

                            </div>

                          </td>

                        </tr>

                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 523
            echo "
                    ";
        } else {
            // line 525
            echo "
                      <tr id=\"order-list-no-results\">
                        <td class=\"text-center\" colspan=\"10\">
                          ";
            // line 528
            echo ($context["text_no_results"] ?? null);
            echo "
                        </td>
                      </tr>

                    ";
        }
        // line 533
        echo "
                  </tbody>

                </table>

              </div>

            </form>


            <!-- =========================
                 PAGINATION
            ========================== -->
            <div class=\"row order-pagination\">

              <div class=\"col-sm-6 text-left\">
                ";
        // line 549
        echo ($context["pagination"] ?? null);
        echo "
              </div>

              <div class=\"col-sm-6 text-right\">
                ";
        // line 553
        echo ($context["results"] ?? null);
        echo "
              </div>

            </div>

          </div>
        </div>

      </div>

    </div>


    <!-- =========================
         FILTER JAVASCRIPT
    ========================== -->
    <script type=\"text/javascript\"><!--

    \$('#button-filter').on('click', function() {

      var url = '';

      var filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

      if (filter_order_id) {
        url += '&filter_order_id=' + encodeURIComponent(filter_order_id);
      }


      var filter_customer = \$('input[name=\\'filter_customer\\']').val();

      if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
      }


      var filter_order_status_id =
        \$('select[name=\\'filter_order_status_id\\']').val();

      if (filter_order_status_id !== '') {
        url += '&filter_order_status_id=' +
          encodeURIComponent(filter_order_status_id);
      }


      var filter_total = \$('input[name=\\'filter_total\\']').val();

      if (filter_total) {
        url += '&filter_total=' + encodeURIComponent(filter_total);
      }


      var filter_date_added =
        \$('input[name=\\'filter_date_added\\']').val();

      if (filter_date_added) {
        url += '&filter_date_added=' +
          encodeURIComponent(filter_date_added);
      }


      var filter_date_modified =
        \$('input[name=\\'filter_date_modified\\']').val();

      if (filter_date_modified) {
        url += '&filter_date_modified=' +
          encodeURIComponent(filter_date_modified);
      }


      location =
        'index.php?route=sale/order&user_token=";
        // line 624
        echo ($context["user_token"] ?? null);
        echo "' + url;

    });

    //--></script>


    <!-- =========================
         LIVE ORDER POLLING
    ========================== -->
    <script type=\"text/javascript\"><!--

    (function() {

      var panel = \$('#order-list-panel');
      var pollUrl = panel.data('poll-url');

      if (!pollUrl) {
        return;
      }


      function esc(s) {

        s = (s == null ? '' : s);

        var d = document.createElement('div');

        d.textContent = s;

        return d.innerHTML;
      }


      function rowHtml(o) {

        var statusId = o.order_status_id || 0;

        var btnView =
          esc(panel.data('button-view') || 'View');

        var btnEdit =
          esc(panel.data('button-edit') || 'Edit');

        var btnDel =
          esc(panel.data('button-delete') || 'Delete');


        var h =
          '<tr data-order-id=\"' +
          esc(String(o.order_id)) +
          '\">';


        h +=
          '<td class=\"text-center order-check\">' +
          '<input type=\"checkbox\" name=\"selected[]\" value=\"' +
          esc(String(o.order_id)) +
          '\" />' +
          '<input type=\"hidden\" name=\"shipping_code[]\" value=\"' +
          esc(o.shipping_code || '') +
          '\" />' +
          '</td>';


        h +=
          '<td class=\"text-right order-id-cell\">' +
          esc(String(o.order_id)) +
          '</td>';


        h +=
          '<td class=\"order-customer-cell\">' +
          esc(o.customer || '') +
          '</td>';


        h +=
          '<td class=\"order-status-cell\">' +
          '<span class=\"order-status-badge order-status-id-' +
          statusId +
          '\">' +
          esc(o.order_status || '') +
          '</span>' +
          '</td>';


        h +=
          '<td class=\"text-right order-buy-cell money-cell\">' +
          esc(o.buy_total || '-') +
          '</td>';


        h +=
          '<td class=\"text-right order-total-cell order-sell-cell money-cell\">' +
          esc(o.sell_total || o.total || '') +
          '</td>';


        h +=
          '<td class=\"text-right order-profit-cell money-cell\">' +
          esc(o.profit_total || '-') +
          '</td>';


        h +=
          '<td class=\"order-date-added-cell date-cell\">' +
          esc(o.date_added || '') +
          '</td>';


        h +=
          '<td class=\"order-date-modified-cell date-cell\">' +
          esc(o.date_modified || '') +
          '</td>';


        h +=
          '<td class=\"text-center action-cell\">' +

          '<div class=\"btn-group\">' +

          '<a href=\"' +
          esc(o.view) +
          '\" data-toggle=\"tooltip\" title=\"' +
          btnView +
          '\" class=\"btn btn-primary\">' +

          '<i class=\"fa fa-eye\"></i>' +

          '</a>' +

          '<button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\">' +
          '<span class=\"caret\"></span>' +
          '</button>' +

          '<ul class=\"dropdown-menu dropdown-menu-right\">' +

          '<li>' +
          '<a href=\"' +
          esc(o.edit) +
          '\">' +
          '<i class=\"fa fa-pencil\"></i> ' +
          btnEdit +
          '</a>' +
          '</li>' +

          '<li>' +
          '<a href=\"' +
          esc(String(o.order_id)) +
          '\">' +
          '<i class=\"fa fa-trash-o\"></i> ' +
          btnDel +
          '</a>' +
          '</li>' +

          '</ul>' +

          '</div>' +

          '</td>' +

          '</tr>';


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

              existing
                .find('.order-status-cell span')
                .removeClass()
                .addClass(
                  'order-status-badge order-status-id-' +
                  (ord.order_status_id || 0)
                )
                .text(ord.order_status || '');


              existing
                .find('.order-buy-cell')
                .text(ord.buy_total || '-');


              existing
                .find('.order-total-cell')
                .text(
                  ord.sell_total ||
                  ord.total ||
                  ''
                );


              existing
                .find('.order-profit-cell')
                .text(
                  ord.profit_total || '-'
                );


              existing
                .find('.order-date-added-cell')
                .text(
                  ord.date_added || ''
                );


              existing
                .find('.order-date-modified-cell')
                .text(
                  ord.date_modified || ''
                );


              existing
                .find('.order-customer-cell')
                .text(
                  ord.customer || ''
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


      setInterval(poll, 5000);

    })();

    //--></script>


    <!-- =========================
         CUSTOMER AUTOCOMPLETE
    ========================== -->
    <script type=\"text/javascript\"><!--

    \$('input[name=\\'filter_customer\\']').autocomplete({

      'source': function(request, response) {

        \$.ajax({

          url:
            'index.php?route=customer/customer/autocomplete' +
            '&user_token=";
        // line 919
        echo ($context["user_token"] ?? null);
        echo "' +
            '&filter_name=' +
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


    <!-- =========================
         ORDER SELECTION / ACTIONS
    ========================== -->
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


      for (var i = 0; i < selected.length; i++) {

        if (
          \$(selected[i])
            .parent()
            .find('input[name^=\\'shipping_code\\']')
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


    // IE and Edge fix
    \$('#button-shipping, #button-invoice, #button-delete')
      .on('click', function(e) {

        \$('#form-order')
          .attr(
            'action',
            this.getAttribute('formAction')
          );

      });


    // Delete order
    \$(document).on(
      'click',
      '#form-order .dropdown-menu li:last-child a',
      function(e) {

        e.preventDefault();

        var element = this;


        if (confirm('";
        // line 1042
        echo ($context["text_confirm"] ?? null);
        echo "')) {

          \$.ajax({

            url:
              '";
        // line 1047
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/delete' +
              '&api_token=";
        // line 1048
        echo ($context["api_token"] ?? null);
        echo "' +
              '&store_id=";
        // line 1049
        echo ($context["store_id"] ?? null);
        echo "' +
              '&order_id=' +
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
        // line 1100
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


    <!-- =========================
         DATEPICKER
    ========================== -->
    <script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\"
            type=\"text/javascript\"></script>

    <link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\"
          type=\"text/css\"
          rel=\"stylesheet\"
          media=\"screen\" />

    <script type=\"text/javascript\"><!--

    \$('.date').datetimepicker({
      language: '";
        // line 1146
        echo ($context["datepicker"] ?? null);
        echo "',
      pickTime: false
    });

    //--></script>


    <!-- =========================
         TABLE STYLING
    ========================== -->
    <style>

      /* Table wrapper */
      .order-table-wrapper {
        border: 0;
      }


      /* Main table */
      .order-table {
        width: 100%;
        margin-bottom: 0;
        table-layout: fixed;
      }


      /* Header */
      .order-table thead td {
        background: #f8f9fa;
        color: #374151;
        font-size: 12px;
        font-weight: 700;
        vertical-align: middle;
        padding: 11px 8px;
        border-bottom: 2px solid #e5e7eb;
        white-space: nowrap;
      }


      /* Header links */
      .order-table thead td a {
        color: #374151;
        text-decoration: none;
      }


      .order-table thead td a:hover {
        color: #337ab7;
      }


      /* Header small text */
      .order-table thead td small {
        display: block;
        margin-top: 3px;
        color: #6b7280;
        font-size: 10px;
        font-weight: 500;
        line-height: 1.2;
      }


      /* Body */
      .order-table tbody td {
        height: 58px;
        padding: 9px 8px;
        vertical-align: middle;
        font-size: 13px;
        color: #374151;
      }


      /* Row hover */
      .order-table tbody tr:hover td {
        background: #f8fafc;
      }


      /* Checkbox */
      .order-table .order-check {
        width: 42px;
        text-align: center;
      }


      .order-table .order-check input {
        margin: 0;
        vertical-align: middle;
      }


      /* Order ID */
      .order-table .order-id-cell,
      .order-table .order-id-head {
        width: 75px;
        white-space: nowrap;
        font-weight: 600;
      }


      /* Customer */
      .order-table .order-customer-cell,
      .order-table .order-customer-head {
        width: 17%;
      }


      .order-table .order-customer-cell {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
      }


      /* Status */
      .order-table .order-status-cell,
      .order-table .order-status-head {
        width: 120px;
        text-align: center;
      }


      /* Money columns */
      .order-table .money-head,
      .order-table .money-cell {
        width: 105px;
        text-align: right;
        white-space: nowrap;
      }


      .order-table .money-cell {
        font-weight: 600;
      }


      /* Profit */
      .order-table .order-profit-cell {
        font-weight: 700;
      }


      /* Dates */
      .order-table .date-head,
      .order-table .date-cell {
        width: 145px;
        white-space: nowrap;
      }


      .order-table .date-cell {
        color: #6b7280;
        font-size: 12px;
      }


      /* Actions */
      .order-table .action-head,
      .order-table .action-cell {
        width: 115px;
        text-align: center;
        white-space: nowrap;
      }


      .order-table .action-cell .btn-group {
        display: inline-flex;
        vertical-align: middle;
      }


      .order-table .action-cell .btn {
        height: 34px;
        min-width: 34px;
        padding: 7px 10px;
      }


      .order-table .dropdown-menu {
        min-width: 145px;
      }


      .order-table .dropdown-menu > li > a {
        padding: 8px 12px;
        font-size: 13px;
      }


      /* Status badge */
      .order-status-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        min-width: 88px;
        max-width: 110px;
        height: 28px;

        padding: 4px 10px;

        border-radius: 999px;
        border: 1px solid transparent;

        font-size: 11px;
        font-weight: 700;
        line-height: 1;

        text-align: center;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;

        color: #fff;
        background: #64748b;

        box-sizing: border-box;
      }


      /* Status colors */
      .order-status-id-0 {
        background: #64748b;
        border-color: #475569;
      }

      .order-status-id-1 {
        background: #f59e0b;
        border-color: #d97706;
      }

      .order-status-id-2 {
        background: #2563eb;
        border-color: #1d4ed8;
      }

      .order-status-id-3 {
        background: #0ea5e9;
        border-color: #0284c7;
      }

      .order-status-id-4 {
        background: #14b8a6;
        border-color: #0f766e;
      }

      .order-status-id-5 {
        background: #16a34a;
        border-color: #15803d;
      }

      .order-status-id-6 {
        background: #475569;
        border-color: #334155;
      }

      .order-status-id-7 {
        background: #be123c;
        border-color: #9f1239;
      }

      .order-status-id-8 {
        background: #7c3aed;
        border-color: #6d28d9;
      }

      .order-status-id-9 {
        background: #dc2626;
        border-color: #b91c1c;
      }

      .order-status-id-10 {
        background: #e11d48;
        border-color: #be123c;
      }

      .order-status-id-11 {
        background: #9333ea;
        border-color: #7e22ce;
      }

      .order-status-id-12 {
        background: #ea580c;
        border-color: #c2410c;
      }

      .order-status-id-13 {
        background: #4f46e5;
        border-color: #4338ca;
      }

      .order-status-id-14 {
        background: #15803d;
        border-color: #166534;
      }

      .order-status-id-15 {
        background: #0891b2;
        border-color: #0e7490;
      }

      .order-status-id-16 {
        background: #334155;
        border-color: #1e293b;
      }

      .order-status-id-17 {
        background: #059669;
        border-color: #047857;
      }


      /* Empty table */
      #order-list-no-results td {
        padding: 35px 10px;
        color: #9ca3af;
      }


      /* Pagination */
      .order-pagination {
        margin-top: 15px;
      }


      /* Responsive */
      @media (max-width: 1200px) {

        .order-table {
          table-layout: auto;
        }

        .order-table .order-customer-cell {
          min-width: 140px;
        }

        .order-table .date-cell {
          min-width: 135px;
        }

      }


      @media (max-width: 767px) {

        .order-table thead td {
          padding: 8px 6px;
          font-size: 11px;
        }

        .order-table tbody td {
          padding: 7px 6px;
          font-size: 12px;
        }

        .order-status-badge {
          min-width: 75px;
          font-size: 10px;
        }

      }

    </style>

  </div>

</div>

";
        // line 1514
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
        return array (  1974 => 1514,  1603 => 1146,  1554 => 1100,  1500 => 1049,  1496 => 1048,  1492 => 1047,  1484 => 1042,  1358 => 919,  1060 => 624,  986 => 553,  979 => 549,  961 => 533,  953 => 528,  948 => 525,  944 => 523,  925 => 510,  920 => 508,  912 => 503,  907 => 501,  890 => 487,  885 => 485,  874 => 477,  866 => 472,  858 => 467,  850 => 462,  842 => 457,  833 => 451,  829 => 450,  821 => 445,  813 => 440,  805 => 435,  800 => 432,  795 => 430,  791 => 428,  785 => 425,  781 => 423,  779 => 422,  773 => 419,  770 => 418,  766 => 417,  763 => 416,  761 => 415,  746 => 403,  740 => 399,  734 => 396,  729 => 395,  723 => 392,  719 => 391,  714 => 390,  712 => 389,  706 => 385,  700 => 382,  695 => 381,  689 => 378,  685 => 377,  680 => 376,  678 => 375,  666 => 365,  658 => 361,  651 => 357,  646 => 356,  644 => 355,  632 => 345,  626 => 342,  621 => 341,  615 => 338,  611 => 337,  606 => 336,  604 => 335,  598 => 331,  592 => 328,  587 => 327,  581 => 324,  577 => 323,  572 => 322,  570 => 321,  564 => 317,  558 => 314,  553 => 313,  547 => 310,  543 => 309,  538 => 308,  536 => 307,  504 => 278,  496 => 273,  492 => 272,  488 => 271,  484 => 270,  480 => 269,  476 => 268,  472 => 267,  468 => 266,  464 => 265,  445 => 249,  423 => 230,  419 => 229,  410 => 223,  391 => 207,  387 => 206,  378 => 200,  367 => 192,  363 => 191,  355 => 186,  346 => 179,  340 => 178,  334 => 175,  329 => 174,  323 => 171,  317 => 169,  314 => 168,  310 => 167,  307 => 166,  301 => 163,  298 => 162,  292 => 159,  289 => 158,  287 => 157,  275 => 148,  264 => 140,  260 => 139,  252 => 134,  241 => 126,  237 => 125,  229 => 120,  218 => 112,  201 => 97,  194 => 93,  190 => 91,  188 => 90,  185 => 89,  178 => 85,  174 => 83,  172 => 82,  159 => 71,  148 => 68,  145 => 67,  141 => 66,  135 => 63,  126 => 57,  121 => 55,  114 => 51,  108 => 48,  103 => 46,  92 => 38,  86 => 35,  75 => 27,  69 => 24,  57 => 15,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_list.twig", "");
    }
}
