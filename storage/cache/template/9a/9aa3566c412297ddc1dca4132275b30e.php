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

/* customer/customer_api.twig */
class __TwigTemplate_22065de6070da0766fe4d0d5342982fe extends Template
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
        // line 3
        echo ($context["column_left"] ?? null);
        echo "

<div id=\"content\">
    <div class=\"container-fluid\">

        <div class=\"page-header\">
            <div class=\"container-fluid\">
                <h1>Customer API</h1>
            </div>
        </div>

        <div class=\"panel panel-default\">

            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">
                    Customer API Requests
                </h3>
            </div>

            <div class=\"panel-body\">

                <div class=\"table-responsive\">

                    <table class=\"table table-bordered table-hover\">

                        <thead>
                            <tr>
                                <th>Customer</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>API Key</th>
                                <th>Date Added</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            ";
        // line 41
        if (($context["api_requests"] ?? null)) {
            // line 42
            echo "
                                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["api_requests"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
                // line 44
                echo "
                                    <tr>

                                        <td>
                                            ";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["request"], "firstname", [], "any", false, false, false, 48);
                echo "
                                            ";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["request"], "lastname", [], "any", false, false, false, 49);
                echo "
                                        </td>

                                        <td>
                                            ";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["request"], "email", [], "any", false, false, false, 53);
                echo "
                                        </td>

                                        <td>

                                            ";
                // line 58
                if ((twig_get_attribute($this->env, $this->source, $context["request"], "status", [], "any", false, false, false, 58) == 1)) {
                    // line 59
                    echo "
                                                <span class=\"label label-success\">
                                                    Active
                                                </span>

                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 64
$context["request"], "status", [], "any", false, false, false, 64) == 2)) {
                    // line 65
                    echo "
                                                <span class=\"label label-warning\">
                                                    Pending
                                                </span>

                                            ";
                } else {
                    // line 71
                    echo "
                                                <span class=\"label label-danger\">
                                                    Disabled
                                                </span>

                                            ";
                }
                // line 77
                echo "
                                        </td>

                                        <td>
                                            ";
                // line 81
                if (twig_get_attribute($this->env, $this->source, $context["request"], "api_key", [], "any", false, false, false, 81)) {
                    // line 82
                    echo "                                                ";
                    echo twig_get_attribute($this->env, $this->source, $context["request"], "api_key", [], "any", false, false, false, 82);
                    echo "
                                            ";
                } else {
                    // line 84
                    echo "                                                -
                                            ";
                }
                // line 86
                echo "                                        </td>

                                        <td>
                                            ";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["request"], "date_added", [], "any", false, false, false, 89);
                echo "
                                        </td>

                                        <td>

                                            ";
                // line 94
                if ((twig_get_attribute($this->env, $this->source, $context["request"], "status", [], "any", false, false, false, 94) == 2)) {
                    // line 95
                    echo "
                                                <a
                                                    href=\"";
                    // line 97
                    echo ($context["approve"] ?? null);
                    echo "&api_access_id=";
                    echo twig_get_attribute($this->env, $this->source, $context["request"], "api_access_id", [], "any", false, false, false, 97);
                    echo "\"
                                                    class=\"btn btn-success\"
                                                >
                                                    Approve
                                                </a>

                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 103
$context["request"], "status", [], "any", false, false, false, 103) == 1)) {
                    // line 104
                    echo "
                                                <a
                                                    href=\"";
                    // line 106
                    echo ($context["disable"] ?? null);
                    echo "&api_access_id=";
                    echo twig_get_attribute($this->env, $this->source, $context["request"], "api_access_id", [], "any", false, false, false, 106);
                    echo "\"
                                                    class=\"btn btn-danger\"
                                                >
                                                    Disable
                                                </a>

                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 112
$context["request"], "status", [], "any", false, false, false, 112) == 0)) {
                    // line 113
                    echo "
                                                <a
                                                    href=\"";
                    // line 115
                    echo ($context["approve"] ?? null);
                    echo "&api_access_id=";
                    echo twig_get_attribute($this->env, $this->source, $context["request"], "api_access_id", [], "any", false, false, false, 115);
                    echo "\"
                                                    class=\"btn btn-success\"
                                                >
                                                    Enable
                                                </a>

                                            ";
                }
                // line 122
                echo "
                                        </td>

                                    </tr>

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['request'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "
                            ";
        } else {
            // line 130
            echo "
                                <tr>
                                    <td colspan=\"6\" class=\"text-center\">
                                        No Customer API requests found.
                                    </td>
                                </tr>

                            ";
        }
        // line 138
        echo "
                        </tbody>

                    </table>

                </div>

            </div>
        </div>

    </div>
</div>

";
        // line 151
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "customer/customer_api.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 151,  252 => 138,  242 => 130,  238 => 128,  227 => 122,  215 => 115,  211 => 113,  209 => 112,  198 => 106,  194 => 104,  192 => 103,  181 => 97,  177 => 95,  175 => 94,  167 => 89,  162 => 86,  158 => 84,  152 => 82,  150 => 81,  144 => 77,  136 => 71,  128 => 65,  126 => 64,  119 => 59,  117 => 58,  109 => 53,  102 => 49,  98 => 48,  92 => 44,  88 => 43,  85 => 42,  83 => 41,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/customer_api.twig", "");
    }
}
