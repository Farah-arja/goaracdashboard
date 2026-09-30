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

/* sale/cancel_request_list.twig */
class __TwigTemplate_dd12eda369d1aa1c357865f40e4f04c4 extends Template
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

<div id=\"content\" class=\"cancel-request-page\">

  <div class=\"page-header\">
    <div class=\"container-fluid\">

      <div class=\"pull-right\">
        <button
          type=\"button\"
          data-toggle=\"tooltip\"
          title=\"";
        // line 12
        echo ($context["button_filter"] ?? null);
        echo "\"
          onclick=\"\$('#filter-cancel-request').toggleClass('hidden-sm hidden-xs');\"
          class=\"btn btn-default hidden-md hidden-lg\"
        >
          <i class=\"fa fa-filter\"></i>
        </button>
      </div>

      <h1>";
        // line 20
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      ";
        // line 22
        if ((array_key_exists("breadcrumbs", $context) && twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) {
            // line 23
            echo "        <ul class=\"breadcrumb\">
          ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 25
                echo "            <li>
              <a href=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 26);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 26);
                echo "</a>
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </ul>
      ";
        }
        // line 31
        echo "
    </div>
  </div>

  <div class=\"container-fluid cancel-request-sections\">

    ";
        // line 37
        if (($context["success"] ?? null)) {
            // line 38
            echo "      <div class=\"alert alert-success alert-dismissible\">
        <i class=\"fa fa-check-circle\"></i>
        ";
            // line 40
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if (($context["error_warning"] ?? null)) {
            // line 46
            echo "      <div class=\"alert alert-warning alert-dismissible\">
        <i class=\"fa fa-exclamation-triangle\"></i>
        ";
            // line 48
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 52
        echo "
    <div class=\"row\">

      <!-- FILTER -->
      <div
        id=\"filter-cancel-request\"
        class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\"
      >

        <div class=\"panel panel-default cancel-request-filter-panel\">

          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              <i class=\"fa fa-filter\"></i>
              ";
        // line 66
        echo ($context["text_filter"] ?? null);
        echo "
            </h3>
          </div>

          <div class=\"panel-body\">

            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">
                ";
        // line 74
        echo ($context["entry_status"] ?? null);
        echo "
              </label>

              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>

                <option value=\"pending\"";
        // line 80
        if ((($context["filter_status"] ?? null) == "pending")) {
            echo " selected=\"selected\"";
        }
        echo ">
                  Pending
                </option>

                <option value=\"approved\"";
        // line 84
        if ((($context["filter_status"] ?? null) == "approved")) {
            echo " selected=\"selected\"";
        }
        echo ">
                  Approved
                </option>

                <option value=\"rejected\"";
        // line 88
        if ((($context["filter_status"] ?? null) == "rejected")) {
            echo " selected=\"selected\"";
        }
        echo ">
                  Rejected
                </option>
              </select>
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-customer\">
                ";
        // line 96
        echo ($context["entry_customer"] ?? null);
        echo "
              </label>

              <input
                type=\"text\"
                name=\"filter_customer\"
                value=\"";
        // line 102
        echo ($context["filter_customer"] ?? null);
        echo "\"
                placeholder=\"";
        // line 103
        echo ($context["entry_customer"] ?? null);
        echo "\"
                id=\"input-customer\"
                class=\"form-control\"
              />
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-reason\">
                ";
        // line 111
        echo ($context["entry_reason"] ?? null);
        echo "
              </label>

              <input
                type=\"text\"
                name=\"filter_reason\"
                value=\"";
        // line 117
        echo ($context["filter_reason"] ?? null);
        echo "\"
                placeholder=\"";
        // line 118
        echo ($context["entry_reason"] ?? null);
        echo "\"
                id=\"input-reason\"
                class=\"form-control\"
              />
            </div>

            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date\">
                ";
        // line 126
        echo ($context["entry_date_added"] ?? null);
        echo "
              </label>

              <div class=\"input-group date\">
                <input
                  type=\"text\"
                  name=\"filter_date\"
                  value=\"";
        // line 133
        echo ($context["filter_date"] ?? null);
        echo "\"
                  placeholder=\"YYYY-MM-DD\"
                  data-date-format=\"YYYY-MM-DD\"
                  id=\"input-date\"
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
                <i class=\"fa fa-filter\"></i>
                ";
        // line 151
        echo ($context["button_filter"] ?? null);
        echo "
              </button>
            </div>

          </div>
        </div>

      </div>


      <!-- LIST -->
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">

        <div class=\"panel panel-default cancel-request-panel\">

          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              <i class=\"fa fa-times-circle\"></i>
              ";
        // line 169
        echo ($context["text_list"] ?? null);
        echo "
            </h3>
          </div>

          <div class=\"panel-body\">

            ";
        // line 175
        if (twig_length_filter($this->env, ($context["cancel_requests"] ?? null))) {
            // line 176
            echo "
              <div class=\"cancel-request-cards\">

                ";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cancel_requests"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
                // line 180
                echo "
                  <div
                    class=\"cancel-request-card\"
                    data-cancel-request-id=\"";
                // line 183
                echo twig_get_attribute($this->env, $this->source, $context["req"], "cancel_request_id", [], "any", false, false, false, 183);
                echo "\"
                  >

                    <div class=\"cancel-request-card-header\">

                      <div class=\"cancel-request-id\">
                        #";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["req"], "cancel_request_id", [], "any", false, false, false, 189);
                echo "
                      </div>

                      <span class=\"cancel-request-status cancel-request-status-";
                // line 192
                echo twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["req"], "status", [], "any", false, false, false, 192));
                echo "\">
                        ";
                // line 193
                echo twig_get_attribute($this->env, $this->source, $context["req"], "status", [], "any", false, false, false, 193);
                echo "
                      </span>

                    </div>

                    <div class=\"cancel-request-card-body\">

                      <dl class=\"dl-horizontal cancel-request-dl\">

                        <dt>";
                // line 202
                echo ($context["column_order_id"] ?? null);
                echo "</dt>

                        <dd>
                          <a
                            href=\"";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["req"], "order_link", [], "any", false, false, false, 206);
                echo "\"
                            class=\"cancel-request-order-link\"
                          >
                            #";
                // line 209
                echo twig_get_attribute($this->env, $this->source, $context["req"], "order_id", [], "any", false, false, false, 209);
                echo "
                            <i class=\"fa fa-external-link\"></i>
                          </a>
                        </dd>


                        <dt>";
                // line 215
                echo ($context["column_customer_id"] ?? null);
                echo "</dt>

                        <dd>
                          ";
                // line 218
                echo twig_get_attribute($this->env, $this->source, $context["req"], "customer_id", [], "any", false, false, false, 218);
                echo "
                        </dd>


                        <dt>";
                // line 222
                echo ($context["column_reason"] ?? null);
                echo "</dt>

                        <dd class=\"cancel-request-reason\">
                          ";
                // line 225
                echo ((twig_get_attribute($this->env, $this->source, $context["req"], "reason", [], "any", true, true, false, 225)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["req"], "reason", [], "any", false, false, false, 225), "—")) : ("—"));
                echo "
                        </dd>


                        <dt>";
                // line 229
                echo ($context["column_date_added"] ?? null);
                echo "</dt>

                        <dd>
                          ";
                // line 232
                echo twig_get_attribute($this->env, $this->source, $context["req"], "date_added", [], "any", false, false, false, 232);
                echo "
                        </dd>

                      </dl>


                      <div class=\"cancel-request-actions\">

                        <a
                          href=\"";
                // line 241
                echo twig_get_attribute($this->env, $this->source, $context["req"], "order_link", [], "any", false, false, false, 241);
                echo "\"
                          class=\"btn btn-default btn-sm\"
                          data-toggle=\"tooltip\"
                          title=\"";
                // line 244
                echo ($context["button_view"] ?? null);
                echo "\"
                        >
                          <i class=\"fa fa-eye\"></i>
                          ";
                // line 247
                echo ($context["button_view"] ?? null);
                echo "
                        </a>


                        ";
                // line 251
                if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["req"], "status", [], "any", false, false, false, 251)) == "pending")) {
                    // line 252
                    echo "
                          <a
                            href=\"";
                    // line 254
                    echo twig_get_attribute($this->env, $this->source, $context["req"], "reject", [], "any", false, false, false, 254);
                    echo "\"
                            class=\"btn btn-danger btn-sm\"
                            data-toggle=\"tooltip\"
                            title=\"";
                    // line 257
                    echo ($context["button_reject"] ?? null);
                    echo "\"
                          >
                            <i class=\"fa fa-times\"></i>
                            ";
                    // line 260
                    echo ($context["button_reject"] ?? null);
                    echo "
                          </a>

                        ";
                }
                // line 264
                echo "
                      </div>

                    </div>

                  </div>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "
              </div>


              <div class=\"row cancel-request-pagination\">
                <div class=\"col-sm-6 text-left\">
                  ";
            // line 278
            echo ($context["pagination"] ?? null);
            echo "
                </div>
              </div>


            ";
        } else {
            // line 284
            echo "
              <div class=\"cancel-request-empty\">

                <i class=\"fa fa-inbox\"></i>

                <p>
                  ";
            // line 290
            echo ($context["text_no_results"] ?? null);
            echo "
                </p>

              </div>

            ";
        }
        // line 296
        echo "
          </div>

        </div>

      </div>

    </div>

  </div>

</div>


<style>

/* Main */

.cancel-request-page .cancel-request-sections {
  padding-bottom: 24px;
}


/* Panel */

.cancel-request-page .cancel-request-panel {
  border-radius: 6px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.06);
  margin-bottom: 20px;
  border-color: #e8e8e8;
}

.cancel-request-page .cancel-request-panel .panel-heading {
  border-radius: 6px 6px 0 0;
  background: #fafafa;
  border-bottom: 1px solid #e8e8e8;
  padding: 12px 16px;
}

.cancel-request-page .cancel-request-panel .panel-title {
  margin: 0;
  font-size: 15px;
  font-weight: 600;
  color: #333;
}

.cancel-request-page .cancel-request-panel .panel-title .fa {
  margin-right: 8px;
  color: #5a5a5a;
}

.cancel-request-page .cancel-request-panel .panel-body {
  padding: 18px 20px;
}


/* Cards */

.cancel-request-cards {
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.cancel-request-card {
  background: #fff;
  border: 1px solid #e8e8e8;
  border-radius: 8px;
  overflow: hidden;
  transition: box-shadow 0.2s ease, border-color 0.2s ease;
}

.cancel-request-card:hover {
  border-color: #d0d0d0;
  box-shadow: 0 2px 8px rgba(0,0,0,0.06);
}


/* Card header */

.cancel-request-card-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 12px 18px;
  background: linear-gradient(135deg, #f8f9fa 0%, #eef1f4 100%);
  border-bottom: 1px solid #e8e8e8;
}

.cancel-request-id {
  font-size: 14px;
  font-weight: 700;
  color: #2c3e50;
}


/* Status */

.cancel-request-status {
  display: inline-block;
  padding: 4px 12px;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 600;
  text-transform: capitalize;
}

.cancel-request-status-pending {
  background: #fef3cd;
  color: #856404;
  border: 1px solid #ffeeba;
}

.cancel-request-status-approved {
  background: #d4edda;
  color: #155724;
  border: 1px solid #c3e6cb;
}

.cancel-request-status-rejected {
  background: #f8d7da;
  color: #721c24;
  border: 1px solid #f5c6cb;
}


/* Card body */

.cancel-request-card-body {
  padding: 18px 20px;
}

.cancel-request-dl.dl-horizontal {
  margin-bottom: 16px;
}

.cancel-request-dl.dl-horizontal dt {
  width: 120px;
  color: #6b6b6b;
  font-weight: 500;
  font-size: 13px;
  padding: 4px 0;
}

.cancel-request-dl.dl-horizontal dd {
  margin-left: 140px;
  padding: 4px 0;
  font-size: 13px;
}

.cancel-request-order-link {
  font-weight: 600;
  color: #337ab7;
}

.cancel-request-order-link:hover {
  color: #23527c;
}

.cancel-request-reason {
  max-width: 100%;
  word-wrap: break-word;
  line-height: 1.5;
}


/* Actions */

.cancel-request-actions {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  padding-top: 12px;
  border-top: 1px solid #eee;
}

.cancel-request-actions .btn {
  margin-right: 4px;
}


/* Pagination */

.cancel-request-pagination {
  margin-top: 16px;
}


/* Empty */

.cancel-request-empty {
  text-align: center;
  padding: 48px 24px;
  color: #999;
}

.cancel-request-empty .fa {
  font-size: 48px;
  margin-bottom: 16px;
  opacity: 0.5;
}

.cancel-request-empty p {
  margin: 0;
  font-size: 15px;
}


/* Filter panel */

.cancel-request-filter-panel {
  border-radius: 6px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.06);
  border-color: #e8e8e8;
}

.cancel-request-filter-panel .panel-heading {
  border-radius: 6px 6px 0 0;
  background: #fafafa;
  border-bottom: 1px solid #e8e8e8;
  padding: 12px 16px;
}

.cancel-request-filter-panel .panel-title {
  margin: 0;
  font-size: 14px;
  font-weight: 600;
  color: #333;
}

</style>


<script>

document.addEventListener('DOMContentLoaded', function() {

  \$('[data-toggle=\"tooltip\"]').tooltip();


  /* Filter */

  \$('#button-filter').on('click', function() {

    var url = 'index.php?route=sale/cancel_request&user_token=";
        // line 540
        echo ($context["user_token"] ?? null);
        echo "';

    var filter_status = \$('select[name=\\'filter_status\\']').val();
    var filter_customer = \$('input[name=\\'filter_customer\\']').val();
    var filter_reason = \$('input[name=\\'filter_reason\\']').val();
    var filter_date = \$('input[name=\\'filter_date\\']').val();

    if (filter_status) {
      url += '&filter_status=' + encodeURIComponent(filter_status);
    }

    if (filter_customer) {
      url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    if (filter_reason) {
      url += '&filter_reason=' + encodeURIComponent(filter_reason);
    }

    if (filter_date) {
      url += '&filter_date=' + encodeURIComponent(filter_date);
    }

    location = url;

  });


  /* Date picker */

  \$('.date').datetimepicker({
    pickTime: false
  });

});

</script>


<link
  href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\"
  type=\"text/css\"
  rel=\"stylesheet\"
  media=\"screen\"
/>

<script
  src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\"
  type=\"text/javascript\"
></script>


";
        // line 592
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "sale/cancel_request_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  813 => 592,  758 => 540,  512 => 296,  503 => 290,  495 => 284,  486 => 278,  478 => 272,  465 => 264,  458 => 260,  452 => 257,  446 => 254,  442 => 252,  440 => 251,  433 => 247,  427 => 244,  421 => 241,  409 => 232,  403 => 229,  396 => 225,  390 => 222,  383 => 218,  377 => 215,  368 => 209,  362 => 206,  355 => 202,  343 => 193,  339 => 192,  333 => 189,  324 => 183,  319 => 180,  315 => 179,  310 => 176,  308 => 175,  299 => 169,  278 => 151,  257 => 133,  247 => 126,  236 => 118,  232 => 117,  223 => 111,  212 => 103,  208 => 102,  199 => 96,  186 => 88,  177 => 84,  168 => 80,  159 => 74,  148 => 66,  132 => 52,  125 => 48,  121 => 46,  119 => 45,  116 => 44,  109 => 40,  105 => 38,  103 => 37,  95 => 31,  91 => 29,  80 => 26,  77 => 25,  73 => 24,  70 => 23,  68 => 22,  63 => 20,  52 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/cancel_request_list.twig", "");
    }
}
