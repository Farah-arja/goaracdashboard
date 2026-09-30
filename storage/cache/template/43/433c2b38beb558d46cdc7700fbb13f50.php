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
class __TwigTemplate_25cf64fdccdd8a4442249bf9cfc74b4e extends Template
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
        // line 24
        if (($context["error_warning"] ?? null)) {
            // line 25
            echo "  <div class=\"alert alert-danger alert-dismissible\">
    <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 26
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 30
        echo "
  ";
        // line 31
        if (($context["success"] ?? null)) {
            // line 32
            echo "  <div class=\"alert alert-success alert-dismissible\">
    <i class=\"fa fa-check-circle\"></i> ";
            // line 33
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 37
        echo "
  <div class=\"row\">

    <div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 43
        echo ($context["text_filter"] ?? null);
        echo "</h3>
        </div>

        <div class=\"panel-body\">

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-id\">";
        // line 49
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 50
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
          </div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-customer\">";
        // line 54
        echo ($context["entry_customer"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 55
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
          </div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-status\">";
        // line 59
        echo ($context["entry_order_status"] ?? null);
        echo "</label>

            <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">
              <option value=\"\"></option>

              ";
        // line 64
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            // line 65
            echo "              <option value=\"0\" selected=\"selected\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
              ";
        } else {
            // line 67
            echo "              <option value=\"0\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
              ";
        }
        // line 69
        echo "
              ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 71
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 71) == ($context["filter_order_status_id"] ?? null))) {
                // line 72
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 72);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 72);
                echo "</option>
              ";
            } else {
                // line 74
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 74);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 74);
                echo "</option>
              ";
            }
            // line 76
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "            </select>
          </div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-total\">";
        // line 81
        echo ($context["entry_total"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_total\" value=\"";
        // line 82
        echo ($context["filter_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
          </div>
<div class=\"form-group\">
  <label class=\"control-label\" for=\"input-provider\">Provider</label>

  <select name=\"filter_provider\" id=\"input-provider\" class=\"form-control\">
    <option value=\"\">All Providers</option>

    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["providers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 91
            echo "      ";
            if ((($context["filter_provider"] ?? null) == twig_get_attribute($this->env, $this->source, $context["provider"], "provider_name", [], "any", false, false, false, 91))) {
                // line 92
                echo "        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["provider"], "provider_name", [], "any", false, false, false, 92);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["provider"], "provider_name", [], "any", false, false, false, 92);
                echo "</option>
      ";
            } else {
                // line 94
                echo "        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["provider"], "provider_name", [], "any", false, false, false, 94);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["provider"], "provider_name", [], "any", false, false, false, 94);
                echo "</option>
      ";
            }
            // line 96
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "  </select>
</div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-added\">";
        // line 101
        echo ($context["entry_date_added"] ?? null);
        echo "</label>

            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 104
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
        // line 113
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>

            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 116
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
        // line 126
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
        // line 138
        echo ((array_key_exists("poll_url", $context)) ? (_twig_default_filter(($context["poll_url"] ?? null), "")) : (""));
        echo "\"
           data-button-view=\"";
        // line 139
        echo ($context["button_view"] ?? null);
        echo "\"
           data-button-edit=\"";
        // line 140
        echo ($context["button_edit"] ?? null);
        echo "\"
           data-button-delete=\"";
        // line 141
        echo ($context["button_delete"] ?? null);
        echo "\"
           data-text-confirm=\"";
        // line 142
        echo ($context["text_confirm"] ?? null);
        echo "\"
           data-catalog=\"";
        // line 143
        echo ($context["catalog"] ?? null);
        echo "\"
           data-api-token=\"";
        // line 144
        echo ($context["api_token"] ?? null);
        echo "\"
           data-store-id=\"";
        // line 145
        echo ($context["store_id"] ?? null);
        echo "\"
           data-delete-url=\"";
        // line 146
        echo ($context["delete"] ?? null);
        echo "\">

        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">
            <i class=\"fa fa-list\"></i> ";
        // line 150
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
        // line 170
        if ((($context["sort"] ?? null) == "o.order_id")) {
            // line 171
            echo "                        <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a>
                      ";
        } else {
            // line 173
            echo "                        <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a>
                      ";
        }
        // line 175
        echo "                    </td>

                    <td class=\"text-left\">
                      ";
        // line 178
        if ((($context["sort"] ?? null) == "customer")) {
            // line 179
            echo "                        <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a>
                      ";
        } else {
            // line 181
            echo "                        <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a>
                      ";
        }
        // line 183
        echo "                    </td>

                    <td class=\"text-left\">
                      ";
        // line 186
        if ((($context["sort"] ?? null) == "order_status")) {
            // line 187
            echo "                        <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                      ";
        } else {
            // line 189
            echo "                        <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                      ";
        }
        // line 191
        echo "                 <td class=\"text-left order-provider-cell\">
  <span class=\"order-provider-badge\">
    ";
        // line 193
        echo ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "provider_name", [], "any", true, true, false, 193)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "provider_name", [], "any", false, false, false, 193), "-")) : ("-"));
        echo "
  </span>
</td>

                    <td class=\"text-left\">
                      ";
        // line 198
        if ((($context["sort"] ?? null) == "buy_total")) {
            // line 199
            echo "                        <a href=\"";
            echo ($context["buy_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_buy_provider_try"] ?? null);
            echo "</a>
                      ";
        } else {
            // line 201
            echo "                        <a href=\"";
            echo ($context["buy_total"] ?? null);
            echo "\">";
            echo ($context["column_buy_provider_try"] ?? null);
            echo "</a>
                      ";
        }
        // line 203
        echo "                    </td>

                    <td class=\"text-right\">
                      ";
        // line 206
        if ((($context["sort"] ?? null) == "o.total")) {
            // line 207
            echo "                        <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sell"] ?? null);
            echo "</a>
                      ";
        } else {
            // line 209
            echo "                        <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\">";
            echo ($context["column_sell"] ?? null);
            echo "</a>
                      ";
        }
        // line 211
        echo "                    </td>

                    <td class=\"text-left\">
                      ";
        // line 214
        if ((($context["sort"] ?? null) == "profit_try")) {
            // line 215
            echo "                        <a href=\"";
            echo ($context["profit_try"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_profit_try"] ?? null);
            echo "</a>
                      ";
        } else {
            // line 217
            echo "                        <a href=\"";
            echo ($context["profit_try"] ?? null);
            echo "\">";
            echo ($context["column_profit_try"] ?? null);
            echo "</a>
                      ";
        }
        // line 219
        echo "                    </td>

                    <td class=\"text-left\">
                      ";
        // line 222
        if ((($context["sort"] ?? null) == "o.date_added")) {
            // line 223
            echo "                        <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                      ";
        } else {
            // line 225
            echo "                        <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                      ";
        }
        // line 227
        echo "                    </td>

                    <td class=\"text-left\">
                      ";
        // line 230
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            // line 231
            echo "                        <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>
                      ";
        } else {
            // line 233
            echo "                        <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>
                      ";
        }
        // line 235
        echo "                    </td>

                    <td class=\"text-right\">";
        // line 237
        echo ($context["column_action"] ?? null);
        echo "</td>

                  </tr>
                </thead>

                <tbody id=\"order-list-tbody\">

                ";
        // line 244
        if (($context["orders"] ?? null)) {
            // line 245
            echo "
                  ";
            // line 246
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 247
                echo "
                  <tr data-order-id=\"";
                // line 248
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 248);
                echo "\">

                    <td class=\"text-center\">

                      ";
                // line 252
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 252), ($context["selected"] ?? null))) {
                    // line 253
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 253);
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 255
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 255);
                    echo "\" />
                      ";
                }
                // line 257
                echo "
                      <input type=\"hidden\" name=\"shipping_code[]\" value=\"";
                // line 258
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", true, true, false, 258)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", false, false, false, 258), "")) : (""));
                echo "\" />

                    </td>

                    <td class=\"text-right order-id-cell\">
                      ";
                // line 263
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 263);
                echo "
                    </td>

                    <td class=\"text-left order-customer-cell\">
                      ";
                // line 267
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 267);
                echo "
                    </td>

                    <td class=\"text-left order-status-cell\">
                      <span class=\"order-status-badge order-status-id-";
                // line 271
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "order_status_id", [], "any", true, true, false, 271)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_status_id", [], "any", false, false, false, 271), 0)) : (0));
                echo "\">
                        ";
                // line 272
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 272);
                echo "
                      </span>
                    </td>
<td class=\"text-left order-provider-cell\">
  ";
                // line 276
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "provider_name", [], "any", true, true, false, 276)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "provider_name", [], "any", false, false, false, 276), "-")) : ("-"));
                echo "
</td>

                    <td class=\"text-right order-buy-cell\">
                      ";
                // line 280
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "buy_total", [], "any", true, true, false, 280)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "buy_total", [], "any", false, false, false, 280), "-")) : ("-"));
                echo "
                    </td>

                    <td class=\"text-right order-total-cell\">
  ";
                // line 284
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "sell_total", [], "any", true, true, false, 284)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "sell_total", [], "any", false, false, false, 284), "-")) : ("-"));
                echo "
</td>

                    <td class=\"text-right order-profit-cell\">
                      ";
                // line 288
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "profit_total", [], "any", true, true, false, 288)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "profit_total", [], "any", false, false, false, 288), "-")) : ("-"));
                echo "
                    </td>

                    <td class=\"text-left order-date-added-cell\">
                      ";
                // line 292
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 292);
                echo "
                    </td>

                    <td class=\"text-left order-date-modified-cell\">
                      ";
                // line 296
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_modified", [], "any", false, false, false, 296);
                echo "
                    </td>

                    <td class=\"text-right\">
                      <div style=\"min-width: 120px;\">

                        <div class=\"btn-group\">

                          <a href=\"";
                // line 304
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 304);
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
                // line 315
                echo twig_get_attribute($this->env, $this->source, $context["order"], "edit", [], "any", false, false, false, 315);
                echo "\">
                                <i class=\"fa fa-pencil\"></i> ";
                // line 316
                echo ($context["button_edit"] ?? null);
                echo "
                              </a>
                            </li>

                            <li>
                              <a href=\"";
                // line 321
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 321);
                echo "\">
                                <i class=\"fa fa-trash-o\"></i> ";
                // line 322
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
            // line 336
            echo "
                ";
        } else {
            // line 338
            echo "
                  <tr id=\"order-list-no-results\">
                    <td class=\"text-center\" colspan=\"11\">
                      ";
            // line 341
            echo ($context["text_no_results"] ?? null);
            echo "
                    </td>
                  </tr>

                ";
        }
        // line 346
        echo "
                </tbody>

              </table>

            </div>

          </form>

          <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 356
        echo ($context["pagination"] ?? null);
        echo "</div>
            <div class=\"col-sm-6 text-right\">";
        // line 357
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
        // line 413
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
h += '<td class=\"text-left order-provider-cell\">' + esc(o.provider_name || '-') + '</td>';


      h += '<td class=\"text-right order-buy-cell\">' + esc(o.buy_total || '-') + '</td>';

      h += '<td class=\"text-right order-total-cell\">' + esc(o.sell_total || '-') + '</td>';

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
              .text(ord.buy_total || '-');

            existing.find('.order-total-cell')
  .text(ord.sell_total || '-');

            existing.find('.order-profit-cell')
              .text(ord.profit_total || '-');

            existing.find('.order-date-added-cell')
              .text(ord.date_added || '');

            existing.find('.order-date-modified-cell')
              .text(ord.date_modified || '');

            existing.find('.order-customer-cell')
              .text(ord.customer || '');
existing.find('.order-provider-cell')
  .text(ord.provider_name || '-');

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
        // line 572
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
        // line 643
        echo ($context["text_confirm"] ?? null);
        echo "')) {

      \$.ajax({

        url: '";
        // line 647
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
        // line 676
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
        // line 700
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
  .order-status-id-11 { background: #9333ea; border-color: #7e22c8; color: #fff; }
  .order-status-id-12 { background: #ea580c; border-color: #c2410c; color: #fff; }
  .order-status-id-13 { background: #4f46e5; border-color: #4338ca; color: #fff; }
  .order-status-id-14 { background: #15803d; border-color: #166534; color: #fff; }
  .order-status-id-15 { background: #0891b2; border-color: #0e7490; color: #0f172a; }
  .order-status-id-16 { background: #334155; border-color: #1e293b; color: #fff; }
  .order-status-id-17 { background: #059669; border-color: #047857; color: #fff; }
  .order-provider-cell {color: #2563eb;font-weight: 600;}

  </style>

</div>

";
        // line 749
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
        return array (  1239 => 749,  1187 => 700,  1160 => 676,  1124 => 647,  1117 => 643,  1043 => 572,  881 => 413,  822 => 357,  818 => 356,  806 => 346,  798 => 341,  793 => 338,  789 => 336,  769 => 322,  765 => 321,  757 => 316,  753 => 315,  737 => 304,  726 => 296,  719 => 292,  712 => 288,  705 => 284,  698 => 280,  691 => 276,  684 => 272,  680 => 271,  673 => 267,  666 => 263,  658 => 258,  655 => 257,  649 => 255,  643 => 253,  641 => 252,  634 => 248,  631 => 247,  627 => 246,  624 => 245,  622 => 244,  612 => 237,  608 => 235,  600 => 233,  590 => 231,  588 => 230,  583 => 227,  575 => 225,  565 => 223,  563 => 222,  558 => 219,  550 => 217,  540 => 215,  538 => 214,  533 => 211,  525 => 209,  515 => 207,  513 => 206,  508 => 203,  500 => 201,  490 => 199,  488 => 198,  480 => 193,  476 => 191,  468 => 189,  458 => 187,  456 => 186,  451 => 183,  443 => 181,  433 => 179,  431 => 178,  426 => 175,  418 => 173,  408 => 171,  406 => 170,  383 => 150,  376 => 146,  372 => 145,  368 => 144,  364 => 143,  360 => 142,  356 => 141,  352 => 140,  348 => 139,  344 => 138,  329 => 126,  314 => 116,  308 => 113,  294 => 104,  288 => 101,  282 => 97,  276 => 96,  268 => 94,  260 => 92,  257 => 91,  253 => 90,  240 => 82,  236 => 81,  230 => 77,  224 => 76,  216 => 74,  208 => 72,  205 => 71,  201 => 70,  198 => 69,  192 => 67,  186 => 65,  184 => 64,  176 => 59,  167 => 55,  163 => 54,  154 => 50,  150 => 49,  141 => 43,  133 => 37,  126 => 33,  123 => 32,  121 => 31,  118 => 30,  111 => 26,  108 => 25,  106 => 24,  99 => 19,  88 => 17,  84 => 16,  78 => 13,  70 => 10,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_list.twig", "");
    }
}
