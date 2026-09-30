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
class __TwigTemplate_8f8f65d6fd50ef084dba1feca4484218 extends Template
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

                <form
                    action=\"";
        // line 28
        echo ($context["fetch_action"] ?? null);
        echo "\"
                    method=\"get\"
                    class=\"form-horizontal\"
                >

                    <input
                        type=\"hidden\"
                        name=\"route\"
                        value=\"sale/yolcu_api_orders\"
                    >

                    <input
                        type=\"hidden\"
                        name=\"user_token\"
                        value=\"";
        // line 42
        echo ($context["user_token"] ?? null);
        echo "\"
                    >

                    <div class=\"form-group\">

                        <label class=\"col-sm-2 control-label\">
                            Provider
                        </label>

                        <div class=\"col-sm-8\">

                            <select
                                name=\"provider\"
                                class=\"form-control\"
                            >
                                <option value=\"provider1\">
                                    Provider 1
                                </option>

                                <option value=\"provider2\">
                                    Provider 2
                                </option>
                            </select>

                        </div>

                    </div>

                    <div class=\"form-group\">

                        <label class=\"col-sm-2 control-label\">
                            ";
        // line 73
        echo ($context["entry_order_id"] ?? null);
        echo "
                        </label>

                        <div class=\"col-sm-8\">

                            <input
                                type=\"text\"
                                name=\"order_id\"
                                value=\"";
        // line 81
        echo ($context["order_id"] ?? null);
        echo "\"
                                class=\"form-control\"
                                placeholder=\"";
        // line 83
        echo ($context["entry_order_id"] ?? null);
        echo "\"
                                autocomplete=\"off\"
                            >

                        </div>

                        <div class=\"col-sm-2\">

                            <button
                                type=\"submit\"
                                class=\"btn btn-primary\"
                            >
                                <i class=\"fa fa-search\"></i>
                                ";
        // line 96
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
        // line 112
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
        return array (  179 => 112,  160 => 96,  144 => 83,  139 => 81,  128 => 73,  94 => 42,  77 => 28,  70 => 24,  60 => 17,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/yolcu_api_orders.twig", "");
    }
}
