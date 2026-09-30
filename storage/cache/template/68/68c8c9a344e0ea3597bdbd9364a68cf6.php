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
class __TwigTemplate_0ec2f6b40b4f4fc44c4b6e42b51f70f9 extends Template
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
                action=\"\"
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
        // line 68
        echo ($context["entry_order_id"] ?? null);
        echo "
                    </label>

                    <div class=\"col-sm-8\">
                        <input
                            type=\"text\"
                            name=\"order_id\"
                            value=\"";
        // line 75
        echo ($context["order_id"] ?? null);
        echo "\"
                            class=\"form-control\"
                            placeholder=\"";
        // line 77
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
        // line 88
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
        // line 104
        echo ($context["footer"] ?? null);
        echo "
";
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
        return array (  168 => 104,  149 => 88,  135 => 77,  130 => 75,  120 => 68,  91 => 42,  70 => 24,  60 => 17,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/yolcu_api_orders.twig", "");
    }
}
