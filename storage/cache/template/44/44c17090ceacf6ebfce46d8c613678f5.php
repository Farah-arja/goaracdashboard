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
class __TwigTemplate_64fc51497fc1f30cd4082b598554b86b extends Template
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
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-customer-commission').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 30
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 33
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer-commission\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width:1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 39
        echo ($context["column_name"] ?? null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 40
        echo ($context["column_type"] ?? null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 41
        echo ($context["column_value"] ?? null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 42
        echo ($context["column_status"] ?? null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 43
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 47
        if (($context["plans"] ?? null)) {
            // line 48
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
                // line 49
                echo "                <tr>
                  <td class=\"text-center\">
                    ";
                // line 51
                if ( !twig_get_attribute($this->env, $this->source, $context["plan"], "is_default", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["plan"], "commission_plan_id", [], "any", false, false, false, 52);
                    echo "\" ";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["plan"], "commission_plan_id", [], "any", false, false, false, 52), ($context["selected"] ?? null))) {
                        echo "checked=\"checked\"";
                    }
                    echo " />
                    ";
                }
                // line 54
                echo "                  </td>
                  <td class=\"text-left\">";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 55);
                if (twig_get_attribute($this->env, $this->source, $context["plan"], "is_default", [], "any", false, false, false, 55)) {
                    echo " <span class=\"label label-info\">";
                    echo ($context["text_default"] ?? null);
                    echo "</span>";
                }
                echo "</td>
                  <td class=\"text-left\">";
                // line 56
                echo (((twig_get_attribute($this->env, $this->source, $context["plan"], "type", [], "any", false, false, false, 56) == "percentage")) ? (($context["text_percentage"] ?? null)) : (($context["text_fixed"] ?? null)));
                echo "</td>
                  <td class=\"text-right\">";
                // line 57
                echo (((twig_get_attribute($this->env, $this->source, $context["plan"], "type", [], "any", false, false, false, 57) == "percentage")) ? ((twig_get_attribute($this->env, $this->source, $context["plan"], "value", [], "any", false, false, false, 57) . "%")) : (((twig_get_attribute($this->env, $this->source, $context["plan"], "value", [], "any", false, false, false, 57) . " ") . twig_get_attribute($this->env, $this->source, $context["plan"], "currency_code", [], "any", false, false, false, 57))));
                echo "</td>
                  <td class=\"text-left\">";
                // line 58
                echo ((twig_get_attribute($this->env, $this->source, $context["plan"], "status", [], "any", false, false, false, 58)) ? (($context["text_enabled"] ?? null)) : (($context["text_disabled"] ?? null)));
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["plan"], "edit", [], "any", false, false, false, 59);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                ";
        } else {
            // line 63
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"6\">";
            // line 64
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 67
        echo "              </tbody>
            </table>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 75
        echo ($context["footer"] ?? null);
        echo "
";
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
        return array (  228 => 75,  218 => 67,  212 => 64,  209 => 63,  206 => 62,  195 => 59,  191 => 58,  187 => 57,  183 => 56,  174 => 55,  171 => 54,  161 => 52,  159 => 51,  155 => 49,  150 => 48,  148 => 47,  141 => 43,  137 => 42,  133 => 41,  129 => 40,  125 => 39,  116 => 33,  110 => 30,  106 => 28,  98 => 24,  95 => 23,  87 => 19,  85 => 18,  79 => 14,  68 => 12,  64 => 11,  59 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/customer_commission_list.twig", "");
    }
}
