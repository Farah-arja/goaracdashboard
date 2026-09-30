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

/* default/template/account/goarac_api.twig */
class __TwigTemplate_e73e9631215db47c9d8723dc6c7ea89f extends Template
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

<div id=\"account-api\" class=\"container\">

    <ul class=\"breadcrumb\">
        <li><a href=\"";
        // line 6
        echo ($context["home"] ?? null);
        echo "\">";
        echo ($context["text_home"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 7
        echo ($context["continue"] ?? null);
        echo "\">My Account</a></li>
        <li>API Access</li>
    </ul>

    <div class=\"row\">

        ";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "

        ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 19
            echo "        ";
        } else {
            // line 20
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 21
            echo "        ";
        }
        // line 22
        echo "
        <div id=\"content\" class=\"";
        // line 23
        echo ($context["class"] ?? null);
        echo "\">

            ";
        // line 25
        echo ($context["content_top"] ?? null);
        echo "

            <h1>API Access</h1>

            ";
        // line 29
        if ( !($context["api_access"] ?? null)) {
            // line 30
            echo "
                <p>
                    You don't have API access yet.
                </p>

                <form method=\"post\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        Request API Access
                    </button>
                </form>

            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 41
($context["api_access"] ?? null), "status", [], "any", false, false, false, 41) == 2)) {
            // line 42
            echo "
                <h3>API Access Request</h3>

                <p>
                    Your API access request is waiting for approval.
                </p>

                <p>
                    Status: <strong>Pending</strong>
                </p>

            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 53
($context["api_access"] ?? null), "status", [], "any", false, false, false, 53) == 1)) {
            // line 54
            echo "
                <h3>API Access</h3>

                <p>
                    Status: <strong>Active</strong>
                </p>

                <p>
                    API Key:
                </p>

                <input
                    type=\"text\"
                    value=\"";
            // line 67
            echo twig_get_attribute($this->env, $this->source, ($context["api_access"] ?? null), "api_key", [], "any", false, false, false, 67);
            echo "\"
                    class=\"form-control\"
                    readonly
                >

            ";
        } else {
            // line 73
            echo "
                <p>
                    Your API access is disabled.
                </p>

            ";
        }
        // line 79
        echo "
            ";
        // line 80
        echo ($context["content_bottom"] ?? null);
        echo "

        </div>

        ";
        // line 84
        echo ($context["column_right"] ?? null);
        echo "

    </div>
</div>

";
        // line 89
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/goarac_api.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 89,  174 => 84,  167 => 80,  164 => 79,  156 => 73,  147 => 67,  132 => 54,  130 => 53,  117 => 42,  115 => 41,  102 => 30,  100 => 29,  93 => 25,  88 => 23,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  65 => 15,  60 => 13,  51 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/goarac_api.twig", "");
    }
}
