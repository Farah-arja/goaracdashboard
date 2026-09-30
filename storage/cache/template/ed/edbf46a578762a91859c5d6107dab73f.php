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

/* extension/extension/provider.twig */
class __TwigTemplate_90a06b88d7c52f08d6699d5333c6d3a9 extends Template
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
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    </div>
  </div>

  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
          <i class=\"fa fa-list\"></i> ";
        // line 14
        echo ($context["heading_title"] ?? null);
        echo "
        </h3>
      </div>

      <div class=\"panel-body\">
        <div class=\"list-group\">
          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["providers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 21
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["provider"], "href", [], "any", false, false, false, 21);
            echo "\" class=\"list-group-item\">
              ";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["provider"], "name", [], "any", false, false, false, 22);
            echo "
            </a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>
      </div>
    </div>
  </div>
</div>

";
        // line 31
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/extension/provider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 31,  84 => 25,  75 => 22,  70 => 21,  66 => 20,  57 => 14,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/extension/provider.twig", "");
    }
}
