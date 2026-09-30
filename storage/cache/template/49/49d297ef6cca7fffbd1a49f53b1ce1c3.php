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

/* customer/customer_commission_list.twig */
class __TwigTemplate_33806664a1ce7ba9ef528cb1e7327512 extends Template
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
        <a href=\"";
        // line 9
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\">
          <i class=\"fa fa-plus\"></i>
        </a>

        <button type=\"button\"
                data-toggle=\"tooltip\"
                title=\"";
        // line 15
        echo ($context["button_delete"] ?? null);
        echo "\"
                class=\"btn btn-danger\"
                onclick=\"confirm('";
        // line 17
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-customer-commission').submit() : false;\">
          <i class=\"fa fa-trash-o\"></i>
        </button>
      </div>

      <h1>";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      <ul class=\"breadcrumb\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 26
            echo "          <li>
            <a href=\"";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 27);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 27);
            echo "</a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "      </ul>

    </div>
  </div>


  <div class=\"container-fluid\">

    ";
        // line 38
        if (($context["error_warning"] ?? null)) {
            // line 39
            echo "      <div class=\"alert alert-danger alert-dismissible\">
        <i class=\"fa fa-exclamation-circle\"></i>
        ";
            // line 41
            echo ($context["error_warning"] ?? null);
            echo "

        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
          &times;
        </button>
      </div>
    ";
        }
        // line 48
        echo "

    ";
        // line 50
        if (($context["success"] ?? null)) {
            // line 51
            echo "      <div class=\"alert alert-success alert-dismissible\">
        <i class=\"fa fa-check-circle\"></i>
        ";
            // line 53
            echo ($context["success"] ?? null);
            echo "

        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
          &times;
        </button>
      </div>
    ";
        }
        // line 60
        echo "

    <div class=\"panel panel-default\">

      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
          <i class=\"fa fa-list\"></i>
          ";
        // line 67
        echo ($context["text_list"] ?? null);
        echo "
        </h3>
      </div>


      <div class=\"panel-body\">

        <form action=\"";
        // line 74
        echo ($context["delete"] ?? null);
        echo "\"
              method=\"post\"
              enctype=\"multipart/form-data\"
              id=\"form-customer-commission\">

          <div class=\"table-responsive\">

            <table class=\"table table-bordered table-hover\">

              <thead>
                <tr>

                  <td style=\"width:1px;\" class=\"text-center\">
                    <input type=\"checkbox\"
                           onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" />
                  </td>

                  <td class=\"text-left\">
                    ";
        // line 92
        echo ($context["column_name"] ?? null);
        echo "
                  </td>

                  <td class=\"text-left\">
                    ";
        // line 96
        echo ($context["column_type"] ?? null);
        echo "
                  </td>

                  <td class=\"text-right\">
                    ";
        // line 100
        echo ($context["column_value"] ?? null);
        echo "
                  </td>

                  <td class=\"text-left\">
                    ";
        // line 104
        echo ($context["column_status"] ?? null);
        echo "
                  </td>

                  <td class=\"text-right\">
                    ";
        // line 108
        echo ($context["column_action"] ?? null);
        echo "
                  </td>

                </tr>
              </thead>


              <tbody>

                ";
        // line 117
        if (($context["plans"] ?? null)) {
            // line 118
            echo "
                  ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
                // line 120
                echo "
                    <tr>

                      <td class=\"text-center\">

                        ";
                // line 125
                if ( !twig_get_attribute($this->env, $this->source, $context["plan"], "is_default", [], "any", false, false, false, 125)) {
                    // line 126
                    echo "
                          <input type=\"checkbox\"
                                 name=\"selected[]\"
                                 value=\"";
                    // line 129
                    echo twig_get_attribute($this->env, $this->source, $context["plan"], "commission_plan_id", [], "any", false, false, false, 129);
                    echo "\"
                                 ";
                    // line 130
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["plan"], "commission_plan_id", [], "any", false, false, false, 130), ($context["selected"] ?? null))) {
                        // line 131
                        echo "                                   checked=\"checked\"
                                 ";
                    }
                    // line 132
                    echo " />

                        ";
                }
                // line 135
                echo "
                      </td>


                      <td class=\"text-left\">

                        ";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 141);
                echo "

                        ";
                // line 143
                if (twig_get_attribute($this->env, $this->source, $context["plan"], "is_default", [], "any", false, false, false, 143)) {
                    // line 144
                    echo "                          <span class=\"label label-info\">
                            ";
                    // line 145
                    echo ($context["text_default"] ?? null);
                    echo "
                          </span>
                        ";
                }
                // line 148
                echo "
                      </td>


                      <td class=\"text-left\">

                        ";
                // line 154
                echo (((twig_get_attribute($this->env, $this->source, $context["plan"], "type", [], "any", false, false, false, 154) == "percentage")) ? (                // line 155
($context["text_percentage"] ?? null)) : (                // line 156
($context["text_fixed"] ?? null)));
                echo "

                      </td>


                      <td class=\"text-right\">

                        ";
                // line 163
                echo (((twig_get_attribute($this->env, $this->source, $context["plan"], "type", [], "any", false, false, false, 163) == "percentage")) ? ((twig_get_attribute($this->env, $this->source,                 // line 164
$context["plan"], "value", [], "any", false, false, false, 164) . "%")) : (((twig_get_attribute($this->env, $this->source,                 // line 165
$context["plan"], "value", [], "any", false, false, false, 165) . " ") . twig_get_attribute($this->env, $this->source, $context["plan"], "currency_code", [], "any", false, false, false, 165))));
                echo "

                      </td>


                      <td class=\"text-left\">

                        ";
                // line 172
                echo ((twig_get_attribute($this->env, $this->source, $context["plan"], "status", [], "any", false, false, false, 172)) ? (                // line 173
($context["text_enabled"] ?? null)) : (                // line 174
($context["text_disabled"] ?? null)));
                echo "

                      </td>


                      <td class=\"text-right\">

                        <a href=\"";
                // line 181
                echo twig_get_attribute($this->env, $this->source, $context["plan"], "edit", [], "any", false, false, false, 181);
                echo "\"
                           data-toggle=\"tooltip\"
                           title=\"";
                // line 183
                echo ($context["button_edit"] ?? null);
                echo "\"
                           class=\"btn btn-primary\">

                          <i class=\"fa fa-pencil\"></i>

                        </a>

                      </td>

                    </tr>

                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "
                ";
        } else {
            // line 197
            echo "
                  <tr>
                    <td class=\"text-center\" colspan=\"6\">
                      ";
            // line 200
            echo ($context["text_no_results"] ?? null);
            echo "
                    </td>
                  </tr>

                ";
        }
        // line 205
        echo "
              </tbody>

            </table>

          </div>

        </form>

      </div>

    </div>

  </div>

</div>

";
        // line 222
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "customer/customer_commission_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 222,  369 => 205,  361 => 200,  356 => 197,  352 => 195,  334 => 183,  329 => 181,  319 => 174,  318 => 173,  317 => 172,  307 => 165,  306 => 164,  305 => 163,  295 => 156,  294 => 155,  293 => 154,  285 => 148,  279 => 145,  276 => 144,  274 => 143,  269 => 141,  261 => 135,  256 => 132,  252 => 131,  250 => 130,  246 => 129,  241 => 126,  239 => 125,  232 => 120,  228 => 119,  225 => 118,  223 => 117,  211 => 108,  204 => 104,  197 => 100,  190 => 96,  183 => 92,  162 => 74,  152 => 67,  143 => 60,  133 => 53,  129 => 51,  127 => 50,  123 => 48,  113 => 41,  109 => 39,  107 => 38,  97 => 30,  86 => 27,  83 => 26,  79 => 25,  73 => 22,  65 => 17,  60 => 15,  49 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/customer_commission_list.twig", "");
    }
}
