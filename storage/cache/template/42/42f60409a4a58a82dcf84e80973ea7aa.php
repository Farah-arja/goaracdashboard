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

/* setting/taksit_tablosu.twig */
class __TwigTemplate_3f55221f32ceda648d7ee689d7108299 extends Template
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
         <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\">
                    <i class=\"fa fa-save\"></i> ";
        // line 9
        echo ($context["button_save"] ?? null);
        echo "
                </button>
                <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 11
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-primary\">
                    <i class=\"fa fa-cancel\"></i> ";
        // line 12
        echo ($context["button_cancel"] ?? null);
        echo "
                </button>
                
            </div>
            <h1>";
        // line 16
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        </div>
    </div>

    <div class=\"container-fluid\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">
                    <i class=\"fa fa-credit-card\"></i> ";
        // line 24
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
        // line 35
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "setting/taksit_tablosu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  81 => 24,  70 => 16,  63 => 12,  59 => 11,  54 => 9,  50 => 8,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/taksit_tablosu.twig", "");
    }
}
