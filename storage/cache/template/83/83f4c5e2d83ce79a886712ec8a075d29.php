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
class __TwigTemplate_9b662704b81468f451d330c3131b4e88 extends Template
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
        echo "\" onclick=\"\$('#filter-order').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
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
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> </div>
    <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    <ul class=\"breadcrumb\">
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </ul>
  </div>
</div>
<div class=\"container-fluid\">";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 24
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 25
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 29
        echo "  <div class=\"row\">
    <div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 33
        echo ($context["text_filter"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-id\">";
        // line 37
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 38
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-customer\">";
        // line 41
        echo ($context["entry_customer"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 42
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-status\">";
        // line 45
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
            <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">
              <option value=\"\"></option>
              ";
        // line 48
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            // line 49
            echo "              <option value=\"0\" selected=\"selected\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
              ";
        } else {
            // line 51
            echo "              <option value=\"0\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
              ";
        }
        // line 53
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 54
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 54) == ($context["filter_order_status_id"] ?? null))) {
                // line 55
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 55);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 55);
                echo "</option>
              ";
            } else {
                // line 57
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 57);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 57);
                echo "</option>
              ";
            }
            // line 59
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "            
            </select>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-total\">";
        // line 63
        echo ($context["entry_total"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_total\" value=\"";
        // line 64
        echo ($context["filter_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-added\">";
        // line 67
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 69
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-modified\">";
        // line 75
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 77
        echo ($context["filter_date_modified"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_modified"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group text-right\">
            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 83
        echo ($context["button_filter"] ?? null);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
      <div class=\"panel panel-default\" id=\"order-list-panel\"
           data-poll-url=\"";
        // line 90
        echo ((array_key_exists("poll_url", $context)) ? (_twig_default_filter(($context["poll_url"] ?? null), "")) : (""));
        echo "\"
           data-button-view=\"";
        // line 91
        echo ($context["button_view"] ?? null);
        echo "\"
           data-button-edit=\"";
        // line 92
        echo ($context["button_edit"] ?? null);
        echo "\"
           data-button-delete=\"";
        // line 93
        echo ($context["button_delete"] ?? null);
        echo "\"
           data-text-confirm=\"";
        // line 94
        echo ($context["text_confirm"] ?? null);
        echo "\"
           data-catalog=\"";
        // line 95
        echo ($context["catalog"] ?? null);
        echo "\"
           data-api-token=\"";
        // line 96
        echo ($context["api_token"] ?? null);
        echo "\"
           data-store-id=\"";
        // line 97
        echo ($context["store_id"] ?? null);
        echo "\"
           data-delete-url=\"";
        // line 98
        echo ($context["delete"] ?? null);
        echo "\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 100
        echo ($context["text_list"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <form method=\"post\" action=\"\" enctype=\"multipart/form-data\" id=\"form-order\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked).trigger('change');\" /></td>
                    <td class=\"text-right\">";
        // line 109
        if ((($context["sort"] ?? null) == "o.order_id")) {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 110
        if ((($context["sort"] ?? null) == "customer")) {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 111
        if ((($context["sort"] ?? null) == "order_status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-right\">BUY<br><small>Provider TRY</small></td>
                    <td class=\"text-right\">";
        // line 113
        if ((($context["sort"] ?? null) == "o.total")) {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">SELL</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\">SELL</a> ";
        }
        echo "</td>
                    <td class=\"text-right\">PROFIT<br><small>TRY</small></td>
                    <td class=\"text-left\">";
        // line 115
        if ((($context["sort"] ?? null) == "o.date_added")) {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 116
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-right\">";
        // line 117
        echo ($context["column_action"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody id=\"order-list-tbody\">
                ";
        // line 121
        if (($context["orders"] ?? null)) {
            // line 122
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 123
                echo "                <tr data-order-id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 123);
                echo "\">
                  <td class=\"text-center\"> ";
                // line 124
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 124), ($context["selected"] ?? null))) {
                    // line 125
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 125);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 127
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 127);
                    echo "\" />
                    ";
                }
                // line 129
                echo "                    <input type=\"hidden\" name=\"shipping_code[]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", true, true, false, 129)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", false, false, false, 129), "")) : (""));
                echo "\" /></td>
                  <td class=\"text-right order-id-cell\">";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 130);
                echo "</td>
                  <td class=\"text-left order-customer-cell\">";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 131);
                echo "</td>
                  <td class=\"text-left order-status-cell\"><span class=\"order-status-badge order-status-id-";
                // line 132
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "order_status_id", [], "any", true, true, false, 132)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_status_id", [], "any", false, false, false, 132), 0)) : (0));
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 132);
                echo "</span></td>
                  <td class=\"text-right order-buy-cell\">";
                // line 133
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "buy_total", [], "any", true, true, false, 133)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "buy_total", [], "any", false, false, false, 133), "-")) : ("-"));
                echo "</td>
                  <td class=\"text-right order-total-cell order-sell-cell\">";
                // line 134
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "sell_total", [], "any", true, true, false, 134)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "sell_total", [], "any", false, false, false, 134), twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 134))) : (twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 134)));
                echo "</td>
                  <td class=\"text-right order-profit-cell\">";
                // line 135
                echo ((twig_get_attribute($this->env, $this->source, $context["order"], "profit_total", [], "any", true, true, false, 135)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["order"], "profit_total", [], "any", false, false, false, 135), "-")) : ("-"));
                echo "</td>
                  <td class=\"text-left order-date-added-cell\">";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 136);
                echo "</td>
                  <td class=\"text-left order-date-modified-cell\">";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_modified", [], "any", false, false, false, 137);
                echo "</td>
                  <td class=\"text-right\"><div style=\"min-width: 120px;\">
                      <div class=\"btn-group\"> <a href=\"";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 139);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                        <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                          <li><a href=\"";
                // line 142
                echo twig_get_attribute($this->env, $this->source, $context["order"], "edit", [], "any", false, false, false, 142);
                echo "\"><i class=\"fa fa-pencil\"></i> ";
                echo ($context["button_edit"] ?? null);
                echo "</a></li>
                          <li><a href=\"";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 143);
                echo "\"><i class=\"fa fa-trash-o\"></i> ";
                echo ($context["button_delete"] ?? null);
                echo "</a></li>
                        </ul>
                      </div>
                    </div></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "                ";
        } else {
            // line 150
            echo "                <tr id=\"order-list-no-results\">
                  <td class=\"text-center\" colspan=\"10\">";
            // line 151
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 154
        echo "                  </tbody>
                
              </table>
            </div>
          </form>
          <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 160
        echo ($context["pagination"] ?? null);
        echo "</div>
            <div class=\"col-sm-6 text-right\">";
        // line 161
        echo ($context["results"] ?? null);
        echo "</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = '';

\tvar filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

\tif (filter_order_id) {
\t\turl += '&filter_order_id=' + encodeURIComponent(filter_order_id);
\t}

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();

\tif (filter_order_status_id !== '') {
\t\turl += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
\t}

\tvar filter_total = \$('input[name=\\'filter_total\\']').val();

\tif (filter_total) {
\t\turl += '&filter_total=' + encodeURIComponent(filter_total);
\t}

\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tvar filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

\tif (filter_date_modified) {
\t\turl += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
\t}

\tlocation = 'index.php?route=sale/order&user_token=";
        // line 207
        echo ($context["user_token"] ?? null);
        echo "' + url;
});

// Poll for new orders every 5s (same API with format=json)
(function() {
\tvar panel = \$('#order-list-panel');
\tvar pollUrl = panel.data('poll-url');
\tif (!pollUrl) return;
\tfunction esc(s) { s = (s == null ? '' : s); var d = document.createElement('div'); d.textContent = s; return d.innerHTML; }
\tfunction rowHtml(o) {
\t\tvar statusId = o.order_status_id || 0;
\t\tvar btnView = esc(panel.data('button-view') || 'View');
\t\tvar btnEdit = esc(panel.data('button-edit') || 'Edit');
\t\tvar btnDel = esc(panel.data('button-delete') || 'Delete');
\t\tvar h = '<tr data-order-id=\"' + esc(String(o.order_id)) + '\">';
\t\th += '<td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"' + esc(String(o.order_id)) + '\" /><input type=\"hidden\" name=\"shipping_code[]\" value=\"' + esc((o.shipping_code || '')) + '\" /></td>';
\t\th += '<td class=\"text-right order-id-cell\">' + esc(String(o.order_id)) + '</td>';
\t\th += '<td class=\"text-left order-customer-cell\">' + esc(o.customer || '') + '</td>';
\t\th += '<td class=\"text-left order-status-cell\"><span class=\"order-status-badge order-status-id-' + statusId + '\">' + esc(o.order_status || '') + '</span></td>';
\t\t\th += '<td class=\"text-right order-buy-cell\">' + esc(o.buy_total || '-') + '</td>';
\t\t\th += '<td class=\"text-right order-total-cell order-sell-cell\">' + esc(o.sell_total || o.total || '') + '</td>';
\t\t\th += '<td class=\"text-right order-profit-cell\">' + esc(o.profit_total || '-') + '</td>';
\t\th += '<td class=\"text-left order-date-added-cell\">' + esc(o.date_added || '') + '</td>';
\t\th += '<td class=\"text-left order-date-modified-cell\">' + esc(o.date_modified || '') + '</td>';
\t\th += '<td class=\"text-right\"><div style=\"min-width:120px;\"><div class=\"btn-group\"><a href=\"' + esc(o.view) + '\" data-toggle=\"tooltip\" title=\"' + btnView + '\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>';
\t\th += '<button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>';
\t\th += '<ul class=\"dropdown-menu dropdown-menu-right\"><li><a href=\"' + esc(o.edit) + '\"><i class=\"fa fa-pencil\"></i> ' + btnEdit + '</a></li>';
\t\th += '<li><a href=\"' + esc(String(o.order_id)) + '\"><i class=\"fa fa-trash-o\"></i> ' + btnDel + '</a></li></ul></div></div></td></tr>';
\t\treturn h;
\t}
\tfunction poll() {
\t\t\$.get(pollUrl).done(function(data) {
\t\t\tif (typeof data === 'string') { try { data = JSON.parse(data); } catch (e) { return; } }
\t\t\tvar list = data.orders || [];
\t\t\tvar tbody = \$('#order-list-tbody');
\t\t\tvar noResults = tbody.find('#order-list-no-results');
\t\t\tlist.forEach(function(ord) {
\t\t\t\tvar existing = tbody.find('tr[data-order-id=\"' + ord.order_id + '\"]');
\t\t\t\tif (existing.length) {
\t\t\t\t\texisting.find('.order-status-cell span').removeClass().addClass('order-status-badge order-status-id-' + (ord.order_status_id || 0)).text(ord.order_status || '');
\t\t\t\t\t\texisting.find('.order-buy-cell').text(ord.buy_total || '-');
\t\t\t\t\t\texisting.find('.order-total-cell').text(ord.sell_total || ord.total || '');
\t\t\t\t\t\texisting.find('.order-profit-cell').text(ord.profit_total || '-');
\t\t\t\t\texisting.find('.order-date-added-cell').text(ord.date_added || '');
\t\t\t\t\texisting.find('.order-date-modified-cell').text(ord.date_modified || '');
\t\t\t\t\texisting.find('.order-customer-cell').text(ord.customer || '');
\t\t\t\t} else {
\t\t\t\t\tnoResults.remove();
\t\t\t\t\ttbody.prepend(rowHtml(ord));
\t\t\t\t}
\t\t\t});
\t\t\t\$('[data-toggle=\"tooltip\"]').tooltip();
\t\t});
\t}
\tsetInterval(poll, 5000);
})();
//--></script>
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 268
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
//--></script> 
  <script type=\"text/javascript\"><!--
function updateOrderSelectionActions() {
\t\$('#button-shipping, #button-invoice, #button-delete').prop('disabled', true);

\tvar selected = \$('input[name^=\\'selected\\']:checked');

\tif (selected.length) {
\t\t\$('#button-invoice').prop('disabled', false);
\t\t\$('#button-delete').prop('disabled', false);
\t}

\tfor (var i = 0; i < selected.length; i++) {
\t\tif (\$(selected[i]).parent().find('input[name^=\\'shipping_code\\']').val()) {
\t\t\t\$('#button-shipping').prop('disabled', false);

\t\t\tbreak;
\t\t}
\t}
}

\$(document).on('change', 'input[name^=\\'selected\\']', updateOrderSelectionActions);

\$('#button-shipping, #button-invoice, #button-delete').prop('disabled', true);

\$('input[name^=\\'selected\\']:first').trigger('change');

// IE and Edge fix!
\$('#button-shipping, #button-invoice, #button-delete').on('click', function(e) {
\t\$('#form-order').attr('action', this.getAttribute('formAction'));
});

\$(document).on('click', '#form-order .dropdown-menu li:last-child a', function(e) {
\te.preventDefault();
\tvar element = this;
\tif (confirm('";
        // line 319
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\t\$.ajax({
\t\t\turl: '";
        // line 321
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/delete&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "&order_id=' + \$(element).attr('href'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();
\t
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t
\t\t\t\tif (json['success']) {
\t\t\t\t\tlocation = '";
        // line 337
        echo ($context["delete"] ?? null);
        echo "';
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
//--></script> 
  <script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
  <link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 351
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
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
.order-status-id-8 { background: #7c3aed; border-color: #6d28d9; color: #fff; }
.order-status-id-9 { background: #dc2626; border-color: #b91c1c; color: #fff; }
.order-status-id-10 { background: #e11d48; border-color: #be123c; color: #fff; }
.order-status-id-11 { background: #9333ea; border-color: #7e22ce; color: #fff; }
.order-status-id-12 { background: #ea580c; border-color: #c2410c; color: #fff; }
.order-status-id-13 { background: #4f46e5; border-color: #4338ca; color: #fff; }
.order-status-id-14 { background: #15803d; border-color: #166534; color: #fff; }
.order-status-id-15 { background: #0891b2; border-color: #0e7490; color: #fff; }
.order-status-id-16 { background: #334155; border-color: #1e293b; color: #fff; }
.order-status-id-17 { background: #059669; border-color: #047857; color: #fff; }
</style></div>
";
        // line 390
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
        return array (  802 => 390,  760 => 351,  743 => 337,  720 => 321,  715 => 319,  661 => 268,  597 => 207,  548 => 161,  544 => 160,  536 => 154,  530 => 151,  527 => 150,  524 => 149,  510 => 143,  504 => 142,  496 => 139,  491 => 137,  487 => 136,  483 => 135,  479 => 134,  475 => 133,  469 => 132,  465 => 131,  461 => 130,  456 => 129,  450 => 127,  444 => 125,  442 => 124,  437 => 123,  432 => 122,  430 => 121,  423 => 117,  405 => 116,  387 => 115,  372 => 113,  353 => 111,  335 => 110,  317 => 109,  305 => 100,  300 => 98,  296 => 97,  292 => 96,  288 => 95,  284 => 94,  280 => 93,  276 => 92,  272 => 91,  268 => 90,  258 => 83,  247 => 77,  242 => 75,  231 => 69,  226 => 67,  218 => 64,  214 => 63,  203 => 59,  195 => 57,  187 => 55,  184 => 54,  179 => 53,  173 => 51,  167 => 49,  165 => 48,  159 => 45,  151 => 42,  147 => 41,  139 => 38,  135 => 37,  128 => 33,  122 => 29,  114 => 25,  111 => 24,  103 => 20,  101 => 19,  96 => 16,  85 => 14,  81 => 13,  76 => 11,  70 => 10,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_list.twig", "");
    }
}
