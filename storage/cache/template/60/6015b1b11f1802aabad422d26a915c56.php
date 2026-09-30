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

/* extension/module/yolcu_provider1.twig */
class __TwigTemplate_fe5bcef57399e5124148913bcbd331fa extends Template
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
        <button type=\"submit\" form=\"form-yolcu-provider1\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>

      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      <ul class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 22
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-danger\">
      <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 24
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 31
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>

      <div class=\"panel-body\">
        <form action=\"";
        // line 35
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-yolcu-provider1\" class=\"form-horizontal\">

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 38
        echo ($context["entry_status"] ?? null);
        echo "</label>

            <div class=\"col-sm-10\">
              <select name=\"module_yolcu_provider1_status\" class=\"form-control\">
                ";
        // line 42
        if (($context["module_yolcu_provider1_status"] ?? null)) {
            // line 43
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 44
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 46
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 47
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 49
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 54
        echo ($context["entry_api_url"] ?? null);
        echo "</label>

            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_yolcu_provider1_api_url\" value=\"";
        // line 57
        echo ($context["module_yolcu_provider1_api_url"] ?? null);
        echo "\" class=\"form-control\" />
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

";
        // line 67
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/yolcu_provider1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 67,  159 => 57,  153 => 54,  146 => 49,  141 => 47,  136 => 46,  131 => 44,  126 => 43,  124 => 42,  117 => 38,  111 => 35,  104 => 31,  99 => 28,  92 => 24,  89 => 23,  87 => 22,  80 => 17,  69 => 15,  65 => 14,  59 => 11,  51 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/yolcu_provider1.twig", "");
    }
}
