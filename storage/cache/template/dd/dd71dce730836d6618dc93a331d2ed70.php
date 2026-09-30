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
class __TwigTemplate_4ef98735f10321fc6fc4c875715af755 extends Template
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
        <h3 class=\"panel-title\">";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>

      <div class=\"panel-body\">
        Provider
      </div>
    </div>
  </div>
</div>

";
        // line 23
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
        return array (  69 => 23,  56 => 13,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/extension/provider.twig", "");
    }
}
