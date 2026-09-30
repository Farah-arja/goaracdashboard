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

/* sale/yolcu_api_orders.twig */
class __TwigTemplate_23e238572edafedbc27d2a3b49d740ca extends Template
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
                    <i class=\"fa fa-list\"></i>
                    ";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "
                </h3>
            </div>

            <div class=\"panel-body\">

                <p>
                    ";
        // line 24
        echo ($context["text_fetch_help"] ?? null);
        echo "
                </p>

                <form class=\"form-horizontal\">

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">
                            ";
        // line 31
        echo ($context["entry_order_id"] ?? null);
        echo "
                        </label>

                        <div class=\"col-sm-8\">
                            <input
                                type=\"text\"
                                class=\"form-control\"
                                placeholder=\"Enter Yolcu order ID\"
                            >
                        </div>

                        <div class=\"col-sm-2\">
                            <button
                                type=\"button\"
                                class=\"btn btn-primary\"
                            >
                                <i class=\"fa fa-search\"></i>
                                ";
        // line 48
        echo ($context["button_fetch"] ?? null);
        echo "
                            </button>
                        </div>
                    </div>

                </form>

            </div>

        </div>

    </div>
</div>

";
        // line 62
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "sale/yolcu_api_orders.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 62,  100 => 48,  80 => 31,  70 => 24,  60 => 17,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/yolcu_api_orders.twig", "");
    }
}
