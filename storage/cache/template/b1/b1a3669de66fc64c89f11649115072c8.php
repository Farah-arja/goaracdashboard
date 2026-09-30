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
class __TwigTemplate_5c510af89adf67b1371a430c82954085 extends Template
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

    <div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 44
        echo ($context["text_filter"] ?? null);
        echo "</h3>
        </div>

        <div class=\"panel-body\">

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-id\">";
        // line 50
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 51
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
          </div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-customer\">";
        // line 55
        echo ($context["entry_customer"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 56
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
          </div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-status\">";
        // line 60
        echo ($context["entry_order_status"] ?? null);
        echo "</label>

            <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">
              <option value=\"\"></option>

              ";
        // line 65
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            // line 66
            echo "              <option value=\"0\" selected=\"selected\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
              ";
        } else {
            // line 68
            echo "              <option value=\"0\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
              ";
        }
        // line 70
        echo "
              ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 72
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 72) == ($context["filter_order_status_id"] ?? null))) {
                // line 73
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 73);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 73);
                echo "</option>
              ";
            } else {
                // line 75
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 75);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 75);
                echo "</option>
              ";
            }
            // line 77
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "            </select>
          </div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-total\">";
        // line 82
        echo ($context["entry_total"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_total\" value=\"";
        // line 83
        echo ($context["filter_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
          </div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-added\">";
        // line 87
        echo ($context["entry_date_added"] ?? null);
        echo "</label>

            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 90
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />

              <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-modified\">";
        // line 99
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>

            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 102
        echo ($context["filter_date_modified"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_modified"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />

              <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span>
            </div>
          </div>

          <div class=\"form-group text-right\">
            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\">
              <i class=\"fa fa-filter\"></i> ";
        // line 112
        echo ($context["button_filter"] ?? null);
        echo "
            </button>
          </div>

        </div>
      </div>
    </div>

    <div class=\"col-md-9 col-md-pull-3 col-sm-12\">

      <div class=\"panel panel-default\"
           id=\"order-list-panel\"
           data-poll-url=\"";
        // line 124
        echo ((array_key_exists("poll_url", $context)) ? (_twig_default_filter(($context["poll_url"] ?? null), "")) : (""));
        echo "\"
           data-button-view=\"";
        // line 125
        echo ($context["button_view"] ?? null);
        echo "\"
           data-button-edit=\"";
        // line 126
        echo ($context["button_edit"] ?? null);
        echo "\"
           data-button-delete=\"";
        // line 127
        echo ($context["button_delete"] ?? null);
        echo "\"
           data-text-confirm=\"";
        // line 128
        echo ($context["text_confirm"] ?? null);
        echo "\"
           data-catalog=\"";
        // line 129
        echo ($context["catalog"] ?? null);
        echo "\"
           data-api-token=\"";
        // line 130
        echo ($context["api_token"] ?? null);
        echo "\"
           data-store-id=\"";
        // line 131
        echo ($context["store_id"] ?? null);
        echo "\"
           data-delete-url=\"";
        // line 132
        echo ($context["delete"] ?? null);
        echo "\">

        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">
            <i class=\"fa fa-list\"></i> ";
        // line 136
        echo ($context["text_list"] ?? null);
        echo "
          </h3>
        </div>

        <div class=\"panel-body\">

          <form method=\"post\" action=\"\" enctype=\"multipart/form-data\" id=\"form-order\">

            <div class=\"table-responsive\">

              <table class=\"table table-bordered table-hover\">

                <thead>
                  <tr>

                    <td style=\"width: 1px;\" class=\"text-center\">
                      <input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked).trigger('change');\" />
                    </td>

                    <td class=\"text-right\">
                      ";
        // line 156
        if ((($context["sort"] ?? null) == "o.order_id")) {
            // line 157
            echo "                        <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a>
                      ";
        } else {
            // line 159
            echo "                        <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a>
                      ";
        }
        // line 161
        echo "                    </td>

                    <td class=\"text-left\">
                      ";
        // line 164
        if ((($context["sort"] ?? null) == "customer")) {
            // line 165
            echo "                        <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a>
                      ";
        } else {
            // line 167
            echo "                        <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a>
                      ";
        }
        // line 169
        echo "                    </td>

                    <td class=\"text-left\">
                      ";
        // line 172
        if ((($context["sort"] ?? null) == "order_status")) {
            // line 173
            echo "                        <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                      ";
        } else {
            // line 175
            echo "                        <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                      ";
        }
        // line 177
        echo "                    </td>

                    <td class=\"text-left\">
                      ";
        // line 180
        if ((($context["sort"] ?? null) == "buy_provider_try")) {
            // line 181
            echo "                        <a href=\"";
            echo ($context["buy_provider_try"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_buy_provider_try"] ?? null);
            echo "</a>
                      ";
        } else {
            // line 183
            echo "                        <a href=\"";
            echo ($context["buy_provider_try"] ?? null);
            echo "\">";
            echo ($context["column_buy_provider_try"] ?? null);
            echo "</a>
                      ";
        }
        // line 185
        echo "                    </td>

                    <td class=\"text-right\">
                      ";
        // line 188
        if ((($context["sort"] ?? null) == "o.total")) {
            // line 189
            echo "                        <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sell"] ?? null);
            echo "</a>
                      ";
        } else {
            // line 191
            echo "                        <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\">";
            echo ($context["column_sell"] ?? null);
            echo "</a>
                      ";
        }
        // line 193
        echo "                    </td>

                    <td class=\"text-left\">
                      ";
        // line 196
        if ((($context["sort"] ?? null) == "profit_try")) {
            // line 197
            echo "                        <a href=\"";
            echo ($context["profit_try"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_profit_try"] ?? null);
            echo "</a>
                      ";
        } else {
            // line 199
            echo "                        <a href=\"";
            echo ($context["profit_try"] ?? null);
            echo "\">";
            echo ($context["column_profit_try"] ?? null);
            echo "</a>
                      ";
        }
        // line 201
        echo "                    </td>

                    <td class=\"text-left\">
                      ";
        // line 204
        if ((($context["sort"] ?? null) == "o.date_added")) {
            // line 205
            echo "                        <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                      ";
        } else {
            // line 207
            echo "                        <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                      ";
        }
        // line 209
        echo "                    </td>

                    <td class=\"text-left\">
                      ";
        // line 212
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            // line 213
            echo "                        <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>
                      ";
        } else {
            // line 215
            echo "                        <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>
                      ";
        }
        // line 217
        echo "                    </td>

                    <td class=\"text-right\">";
        // line 219
        echo ($context["column_action"] ?? null);
        echo "</td>

                  </tr>
                </thead>

                <tbody id=\"order-list-tbody\">

                ";
        // line 226
        if (($context["orders"] ?? null)) {
            // line 227
            echo "
                  ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 229
                echo "
                  <tr data-order-id=\"";
                // line 230
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 230);
                echo "\">

                    <td class=\"text-center\">

                      ";
                // line 234
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 234), ($context["selected"] ?? null))) {
                    // line 235
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 235);
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 237
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 237);
                    echo "\" />
                      ";
                }
                // line 239
                echo "
                      <input type=\"hidden\" name=\"shipping_code[]\" value=\"";
                // line 240
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", true, true, false, 240)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", false, false, false, 240), "")) : (""));
                echo "\" />

                    </td>

                    <td class=\"text-right order-id-cell\">
                      ";
                // line 245
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 245);
                echo "
                    </td>

                    <td class=\"text-left order-customer-cell\">
                      ";
                // line 249
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 249);
                echo "
                    </td>

                    <td class=\"text-left order-status-cell\">
                      <span class=\"order-status-badge order-status-id-";
                // line 253
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "order_status_id", [], "any", true, true, false, 253)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_status_id", [], "any", false, false, false, 253), 0)) : (0));
                echo "\">
                        ";
                // line 254
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 254);
                echo "
                      </span>
                    </td>

                    <td class=\"text-right order-buy-cell\">
                      ";
                // line 259
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "buy_provider_try", [], "any", true, true, false, 259)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "buy_provider_try", [], "any", false, false, false, 259), "-")) : ("-"));
                echo "
                    </td>

                    <td class=\"text-right order-total-cell order-sell-cell\">
                      ";
                // line 263
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "sell_total", [], "any", true, true, false, 263)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "sell_total", [], "any", false, false, false, 263), twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 263))) : (twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 263)));
                echo "
                    </td>

                    <td class=\"text-right order-profit-cell\">
                      ";
                // line 267
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "profit_total", [], "any", true, true, false, 267)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "profit_total", [], "any", false, false, false, 267), "-")) : ("-"));
                echo "
                    </td>

                    <td class=\"text-left order-date-added-cell\">
                      ";
                // line 271
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 271);
                echo "
                    </td>

                    <td class=\"text-left order-date-modified-cell\">
                      ";
                // line 275
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_modified", [], "any", false, false, false, 275);
                echo "
                    </td>

                    <td class=\"text-right\">
                      <div style=\"min-width: 120px;\">

                        <div class=\"btn-group\">

                          <a href=\"";
                // line 283
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 283);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-primary\">
                            <i class=\"fa fa-eye\"></i>
                          </a>

                          <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\">
                            <span class=\"caret\"></span>
                          </button>

                          <ul class=\"dropdown-menu dropdown-menu-right\">

                            <li>
                              <a href=\"";
                // line 294
                echo twig_get_attribute($this->env, $this->source, $context["order"], "edit", [], "any", false, false, false, 294);
                echo "\">
                                <i class=\"fa fa-pencil\"></i> ";
                // line 295
                echo ($context["button_edit"] ?? null);
                echo "
                              </a>
                            </li>

                            <li>
                              <a href=\"";
                // line 300
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 300);
                echo "\">
                                <i class=\"fa fa-trash-o\"></i> ";
                // line 301
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
            // line 315
            echo "
                ";
        } else {
            // line 317
            echo "
                  <tr id=\"order-list-no-results\">
                    <td class=\"text-center\" colspan=\"10\">
                      ";
            // line 320
            echo ($context["text_no_results"] ?? null);
            echo "
                    </td>
                  </tr>

                ";
        }
        // line 325
        echo "
                </tbody>

              </table>

            </div>

          </form>

          <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 335
        echo ($context["pagination"] ?? null);
        echo "</div>
            <div class=\"col-sm-6 text-right\">";
        // line 336
        echo ($context["results"] ?? null);
        echo "</div>
          </div>

        </div>
      </div>
    </div>
  </div>

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

    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

    if (filter_date_added) {
      url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }

    var filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

    if (filter_date_modified) {
      url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
    }

    location = 'index.php?route=sale/order&user_token=";
        // line 386
        echo ($context["user_token"] ?? null);
        echo "' + url;

  });

  // Poll for new orders every 5s
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
      var btnView = esc(panel.data('button-view') || 'View');
      var btnEdit = esc(panel.data('button-edit') || 'Edit');
      var btnDel = esc(panel.data('button-delete') || 'Delete');

      var h = '<tr data-order-id=\"' + esc(String(o.order_id)) + '\">';

      h += '<td class=\"text-center\">';
      h += '<input type=\"checkbox\" name=\"selected[]\" value=\"' + esc(String(o.order_id)) + '\" />';
      h += '<input type=\"hidden\" name=\"shipping_code[]\" value=\"' + esc((o.shipping_code || '')) + '\" />';
      h += '</td>';

      h += '<td class=\"text-right order-id-cell\">' + esc(String(o.order_id)) + '</td>';

      h += '<td class=\"text-left order-customer-cell\">' + esc(o.customer || '') + '</td>';

      h += '<td class=\"text-left order-status-cell\">';
      h += '<span class=\"order-status-badge order-status-id-' + statusId + '\">';
      h += esc(o.order_status || '');
      h += '</span>';
      h += '</td>';

      h += '<td class=\"text-right order-buy-cell\">' + esc(o.buy_provider_try || '-') + '</td>';

      h += '<td class=\"text-right order-total-cell order-sell-cell\">' + esc(o.sell_total || o.total || '') + '</td>';

      h += '<td class=\"text-right order-profit-cell\">' + esc(o.profit_total || '-') + '</td>';

      h += '<td class=\"text-left order-date-added-cell\">' + esc(o.date_added || '') + '</td>';

      h += '<td class=\"text-left order-date-modified-cell\">' + esc(o.date_modified || '') + '</td>';

      h += '<td class=\"text-right\">';
      h += '<div style=\"min-width:120px;\">';
      h += '<div class=\"btn-group\">';

      h += '<a href=\"' + esc(o.view) + '\" data-toggle=\"tooltip\" title=\"' + btnView + '\" class=\"btn btn-primary\">';
      h += '<i class=\"fa fa-eye\"></i>';
      h += '</a>';

      h += '<button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\">';
      h += '<span class=\"caret\"></span>';
      h += '</button>';

      h += '<ul class=\"dropdown-menu dropdown-menu-right\">';

      h += '<li><a href=\"' + esc(o.edit) + '\"><i class=\"fa fa-pencil\"></i> ' + btnEdit + '</a></li>';

      h += '<li><a href=\"' + esc(String(o.order_id)) + '\"><i class=\"fa fa-trash-o\"></i> ' + btnDel + '</a></li>';

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
        var noResults = tbody.find('#order-list-no-results');

        list.forEach(function(ord) {

          var existing = tbody.find('tr[data-order-id=\"' + ord.order_id + '\"]');

          if (existing.length) {

            existing.find('.order-status-cell span')
              .removeClass()
              .addClass('order-status-badge order-status-id-' + (ord.order_status_id || 0))
              .text(ord.order_status || '');

            existing.find('.order-buy-cell')
              .text(ord.buy_provider_try || '-');

            existing.find('.order-total-cell')
              .text(ord.sell_total || ord.total || '');

            existing.find('.order-profit-cell')
              .text(ord.profit_total || '-');

            existing.find('.order-date-added-cell')
              .text(ord.date_added || '');

            existing.find('.order-date-modified-cell')
              .text(ord.date_modified || '');

            existing.find('.order-customer-cell')
              .text(ord.customer || '');

          } else {

            noResults.remove();
            tbody.prepend(rowHtml(ord));

          }

        });

        \$('[data-toggle=\"tooltip\"]').tooltip();

      });

    }

    setInterval(poll, 5000);

  })();

  //--></script>

  <script type=\"text/javascript\"><!--

  \$('input[name=\\'filter_customer\\']').autocomplete({

    'source': function(request, response) {

      \$.ajax({
        url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 541
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
        dataType: 'json',

        success: function(json) {

          response(\$.map(json, function(item) {

            return {
              label: item['name'],
              value: item['customer_id']
            };

          }));

        }

      });

    },

    'select': function(item) {
      \$('input[name=\\'filter_customer\\']').val(item['label']);
    }

  });

  //--></script>

  <script type=\"text/javascript\"><!--

  function updateOrderSelectionActions() {

    \$('#button-shipping, #button-invoice, #button-delete').prop('disabled', true);

    var selected = \$('input[name^=\\'selected\\']:checked');

    if (selected.length) {
      \$('#button-invoice').prop('disabled', false);
      \$('#button-delete').prop('disabled', false);
    }

    for (var i = 0; i < selected.length; i++) {

      if (\$(selected[i]).parent().find('input[name^=\\'shipping_code\\']').val()) {

        \$('#button-shipping').prop('disabled', false);

        break;
      }

    }

  }

  \$(document).on('change', 'input[name^=\\'selected\\']', updateOrderSelectionActions);

  \$('#button-shipping, #button-invoice, #button-delete').prop('disabled', true);

  \$('input[name^=\\'selected\\']:first').trigger('change');

  // IE and Edge fix!
  \$('#button-shipping, #button-invoice, #button-delete').on('click', function(e) {
    \$('#form-order').attr('action', this.getAttribute('formAction'));
  });

  \$(document).on('click', '#form-order .dropdown-menu li:last-child a', function(e) {

    e.preventDefault();

    var element = this;

    if (confirm('";
        // line 612
        echo ($context["text_confirm"] ?? null);
        echo "')) {

      \$.ajax({

        url: '";
        // line 616
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/delete&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "&order_id=' + \$(element).attr('href'),

        dataType: 'json',

        beforeSend: function() {
          \$(element).parent().parent().parent().find('button').button('loading');
        },

        complete: function() {
          \$(element).parent().parent().parent().find('button').button('reset');
        },

        success: function(json) {

          \$('.alert-dismissible').remove();

          if (json['error']) {

            \$('#content > .container-fluid').prepend(
              '<div class=\"alert alert-danger alert-dismissible\">' +
              '<i class=\"fa fa-exclamation-circle\"></i> ' +
              json['error'] +
              ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>' +
              '</div>'
            );

          }

          if (json['success']) {
            location = '";
        // line 645
        echo ($context["delete"] ?? null);
        echo "';
          }

        },

        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }

      });

    }

  });

  //--></script>

  <script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>

  <link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />

  <script type=\"text/javascript\"><!--

  \$('.date').datetimepicker({
    language: '";
        // line 669
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });

  //--></script>

  <style>

  /* Colored status badges in order list */

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

  .order-status-id-0 { background: #64748b; border-color: #475569; color: #fff; }
  .order-status-id-1 { background: #f59e0b; border-color: #d97706; color: #fff; }
  .order-status-id-2 { background: #2563eb; border-color: #1d4ed8; color: #fff; }
  .order-status-id-3 { background: #0ea5e9; border-color: #0284c7; color: #fff; }
  .order-status-id-4 { background: #14b8a6; border-color: #0f766e; color: #fff; }
  .order-status-id-5 { background: #16a34a; border-color: #15803d; color: #fff; }
  .order-status-id-6 { background: #475569; border-color: #334155; color: #fff; }
  .order-status-id-7 { background: #be123c; border-color: #9f1239; color: #fff; }
  .order-status-id-8 { background: #7c3aed; border-color: #6d28a9; color: #fff; }
  .order-status-id-9 { background: #dc2626; border-color: #b91c1c; color: #fff; }
  .order-status-id-10 { background: #e11d48; border-color: #be123c; color: #fff; }
  .order-status-id-11 { background: #9333ea; border-color: #7e22ce; color: #fff; }
  .order-status-id-12 { background: #ea580c; border-color: #c2410c; color: #fff; }
  .order-status-id-13 { background: #4f46e5; border-color: #4338ca; color: #fff; }
  .order-status-id-14 { background: #15803d; border-color: #166534; color: #fff; }
  .order-status-id-15 { background: #0891b2; border-color: #0e7490; color: #0f172a; }
  .order-status-id-16 { background: #334155; border-color: #1e293b; color: #fff; }
  .order-status-id-17 { background: #059669; border-color: #047857; color: #fff; }

  </style>

</div>

";
        // line 717
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
        return array (  1179 => 717,  1128 => 669,  1101 => 645,  1065 => 616,  1058 => 612,  984 => 541,  826 => 386,  773 => 336,  769 => 335,  757 => 325,  749 => 320,  744 => 317,  740 => 315,  720 => 301,  716 => 300,  708 => 295,  704 => 294,  688 => 283,  677 => 275,  670 => 271,  663 => 267,  656 => 263,  649 => 259,  641 => 254,  637 => 253,  630 => 249,  623 => 245,  615 => 240,  612 => 239,  606 => 237,  600 => 235,  598 => 234,  591 => 230,  588 => 229,  584 => 228,  581 => 227,  579 => 226,  569 => 219,  565 => 217,  557 => 215,  547 => 213,  545 => 212,  540 => 209,  532 => 207,  522 => 205,  520 => 204,  515 => 201,  507 => 199,  497 => 197,  495 => 196,  490 => 193,  482 => 191,  472 => 189,  470 => 188,  465 => 185,  457 => 183,  447 => 181,  445 => 180,  440 => 177,  432 => 175,  422 => 173,  420 => 172,  415 => 169,  407 => 167,  397 => 165,  395 => 164,  390 => 161,  382 => 159,  372 => 157,  370 => 156,  347 => 136,  340 => 132,  336 => 131,  332 => 130,  328 => 129,  324 => 128,  320 => 127,  316 => 126,  312 => 125,  308 => 124,  293 => 112,  278 => 102,  272 => 99,  258 => 90,  252 => 87,  243 => 83,  239 => 82,  233 => 78,  227 => 77,  219 => 75,  211 => 73,  208 => 72,  204 => 71,  201 => 70,  195 => 68,  189 => 66,  187 => 65,  179 => 60,  170 => 56,  166 => 55,  157 => 51,  153 => 50,  144 => 44,  136 => 38,  129 => 34,  126 => 33,  124 => 32,  121 => 31,  114 => 27,  111 => 26,  109 => 25,  102 => 20,  91 => 18,  87 => 17,  81 => 14,  73 => 11,  65 => 10,  59 => 9,  53 => 8,  49 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_list.twig", "");
    }
}
