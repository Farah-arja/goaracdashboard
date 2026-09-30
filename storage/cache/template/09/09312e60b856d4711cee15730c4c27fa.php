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
class __TwigTemplate_ff59f8cce1f60a26cee675aba9edd5d5 extends Template
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
        // line 39
        if (($context["api_requests"] ?? null)) {
            // line 40
            echo "
                                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["api_requests"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
                // line 42
                echo "
                                    <tr>

                                        <td>
                                            ";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["request"], "firstname", [], "any", false, false, false, 46);
                echo "
                                            ";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["request"], "lastname", [], "any", false, false, false, 47);
                echo "
                                        </td>

                                        <td>
                                            ";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["request"], "email", [], "any", false, false, false, 51);
                echo "
                                        </td>

                                        <td>

                                            ";
                // line 56
                if ((twig_get_attribute($this->env, $this->source, $context["request"], "status", [], "any", false, false, false, 56) == 1)) {
                    // line 57
                    echo "
                                                <span class=\"label label-success\">
                                                    Active
                                                </span>

                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 62
$context["request"], "status", [], "any", false, false, false, 62) == 2)) {
                    // line 63
                    echo "
                                                <span class=\"label label-warning\">
                                                    Pending
                                                </span>

                                            ";
                } else {
                    // line 69
                    echo "
                                                <span class=\"label label-danger\">
                                                    Disabled
                                                </span>

                                            ";
                }
                // line 75
                echo "
                                        </td>

                                        <td>
                                            ";
                // line 79
                if (twig_get_attribute($this->env, $this->source, $context["request"], "api_key", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "                                                ";
                    echo twig_get_attribute($this->env, $this->source, $context["request"], "api_key", [], "any", false, false, false, 80);
                    echo "
                                            ";
                } else {
                    // line 82
                    echo "                                                -
                                            ";
                }
                // line 84
                echo "                                        </td>

                                        <td>
                                            ";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["request"], "date_added", [], "any", false, false, false, 87);
                echo "
                                        </td>

                                        <td>

                                            ";
                // line 92
                if ((twig_get_attribute($this->env, $this->source, $context["request"], "status", [], "any", false, false, false, 92) == 2)) {
                    // line 93
                    echo "
                                                <a
                                                    href=\"";
                    // line 95
                    echo ($context["approve"] ?? null);
                    echo "&api_access_id=";
                    echo twig_get_attribute($this->env, $this->source, $context["request"], "api_access_id", [], "any", false, false, false, 95);
                    echo "\"
                                                    class=\"btn btn-success\"
                                                >
                                                    Approve
                                                </a>

                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 101
$context["request"], "status", [], "any", false, false, false, 101) == 1)) {
                    // line 102
                    echo "
                                                <a
                                                    href=\"";
                    // line 104
                    echo ($context["disable"] ?? null);
                    echo "&api_access_id=";
                    echo twig_get_attribute($this->env, $this->source, $context["request"], "api_access_id", [], "any", false, false, false, 104);
                    echo "\"
                                                    class=\"btn btn-danger\"
                                                >
                                                    Disable
                                                </a>

                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 110
$context["request"], "status", [], "any", false, false, false, 110) == 0)) {
                    // line 111
                    echo "
                                                <a
                                                    href=\"";
                    // line 113
                    echo ($context["approve"] ?? null);
                    echo "&api_access_id=";
                    echo twig_get_attribute($this->env, $this->source, $context["request"], "api_access_id", [], "any", false, false, false, 113);
                    echo "\"
                                                    class=\"btn btn-success\"
                                                >
                                                    Enable
                                                </a>

                                            ";
                }
                // line 120
                echo "
                                        </td>

                                    </tr>

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['request'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "
                            ";
        } else {
            // line 128
            echo "
                                <tr>
                                    <td colspan=\"6\" class=\"text-center\">
                                        No Customer API requests found.
                                    </td>
                                </tr>

                            ";
        }
        // line 136
        echo "
                        </tbody>

                    </table>

                </div>

            </div>
        </div>

    </div>
</div>

";
        // line 149
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
        return array (  262 => 149,  247 => 136,  237 => 128,  233 => 126,  222 => 120,  210 => 113,  206 => 111,  204 => 110,  193 => 104,  189 => 102,  187 => 101,  176 => 95,  172 => 93,  170 => 92,  162 => 87,  157 => 84,  153 => 82,  147 => 80,  145 => 79,  139 => 75,  131 => 69,  123 => 63,  121 => 62,  114 => 57,  112 => 56,  104 => 51,  97 => 47,  93 => 46,  87 => 42,  83 => 41,  80 => 40,  78 => 39,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/customer_api.twig", "");
    }
}
