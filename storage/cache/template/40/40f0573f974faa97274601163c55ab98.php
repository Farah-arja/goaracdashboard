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

/* customer/customer_commission.twig */
class __TwigTemplate_f7b62f3b7be0e6bda4a760c6e0da834b extends Template
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
        <button type=\"submit\" form=\"form-customer-commission\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer-commission\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 30
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 32
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" ";
        if (($context["is_default"] ?? null)) {
            echo "readonly=\"readonly\"";
        }
        echo " />
              ";
        // line 33
        if (($context["error_name"] ?? null)) {
            // line 34
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 36
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-type\">";
        // line 39
        echo ($context["entry_type"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"type\" id=\"input-type\" class=\"form-control\">
                <option value=\"percentage\" ";
        // line 42
        if ((($context["type"] ?? null) == "percentage")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_percentage"] ?? null);
        echo "</option>
                <option value=\"fixed\" ";
        // line 43
        if ((($context["type"] ?? null) == "fixed")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_fixed"] ?? null);
        echo "</option>
              </select>
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-value\"><span data-toggle=\"tooltip\" title=\"";
        // line 48
        echo ($context["help_value"] ?? null);
        echo "\">";
        echo ($context["entry_value"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"value\" value=\"";
        // line 50
        echo ($context["value"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\" />
              ";
        // line 51
        if (($context["error_value"] ?? null)) {
            // line 52
            echo "              <div class=\"text-danger\">";
            echo ($context["error_value"] ?? null);
            echo "</div>
              ";
        }
        // line 54
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-currency\">";
        // line 57
        echo ($context["entry_currency"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" value=\"";
        // line 59
        echo ($context["currency_code"] ?? null);
        echo "\" id=\"input-currency\" class=\"form-control\" readonly=\"readonly\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 63
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\" ";
        // line 65
        if (($context["is_default"] ?? null)) {
            echo "disabled=\"disabled\"";
        }
        echo ">
                <option value=\"1\" ";
        // line 66
        if (($context["status"] ?? null)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                <option value=\"0\" ";
        // line 67
        if ( !($context["status"] ?? null)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
              </select>
              ";
        // line 69
        if (($context["is_default"] ?? null)) {
            // line 70
            echo "              <input type=\"hidden\" name=\"status\" value=\"1\" />
              ";
        }
        // line 72
        echo "            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 79
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "customer/customer_commission.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 79,  234 => 72,  230 => 70,  228 => 69,  219 => 67,  211 => 66,  205 => 65,  200 => 63,  193 => 59,  188 => 57,  183 => 54,  177 => 52,  175 => 51,  169 => 50,  162 => 48,  150 => 43,  142 => 42,  136 => 39,  131 => 36,  125 => 34,  123 => 33,  113 => 32,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/customer_commission.twig", "");
    }
}
