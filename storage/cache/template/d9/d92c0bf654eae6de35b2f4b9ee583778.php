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

/* setting/frontend_mobile_translations.twig */
class __TwigTemplate_5d959a25c0a45f09ca62c4d5237e2137 extends Template
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
        echo "
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "

<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <h1>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        </div>
    </div>

    <div class=\"container-fluid\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">
                    <i class=\"fa fa-language\"></i> ";
        // line 15
        echo ($context["heading_title"] ?? null);
        echo "
                </h3>
            </div>

            <div class=\"panel-body\">
            </div>
        </div>
    </div>
</div>

";
        // line 25
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "setting/frontend_mobile_translations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  60 => 15,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/frontend_mobile_translations.twig", "");
    }
}
