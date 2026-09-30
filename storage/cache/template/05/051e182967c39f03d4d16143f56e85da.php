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

/* goarac/sitemap_seo.twig */
class __TwigTemplate_1c594c8ddd43dde03e8ca0f040b5e05b extends Template
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
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>

            <ul class=\"breadcrumb\">
                <li>
                    <a href=\"";
        // line 12
        echo ($context["url_home"] ?? null);
        echo "\">
                        <i class=\"fa fa-home\"></i>
                    </a>
                </li>
                <li>
                    ";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "
                </li>
            </ul>

        </div>
    </div>

    <div class=\"container-fluid\">

        <div class=\"panel panel-default\">

            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">
                    <i class=\"fa fa-sitemap\"></i>
                    Sitemap Information
                </h3>
            </div>

            <div class=\"panel-body\">

                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">
                        Frontend URL
                    </label>

                    <div class=\"col-sm-10\">
                        <p class=\"form-control-static\">
                            ";
        // line 44
        echo ($context["frontend_url"] ?? null);
        echo "
                        </p>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">
                        Sitemap URL
                    </label>

                    <div class=\"col-sm-10\">
                        <p class=\"form-control-static\">
                            ";
        // line 56
        echo ($context["sitemap_url"] ?? null);
        echo "
                        </p>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">
                        Robots URL
                    </label>

                    <div class=\"col-sm-10\">
                        <p class=\"form-control-static\">
                            ";
        // line 68
        echo ($context["robots_url"] ?? null);
        echo "
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

";
        // line 81
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "goarac/sitemap_seo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 81,  123 => 68,  108 => 56,  93 => 44,  63 => 17,  55 => 12,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "goarac/sitemap_seo.twig", "");
    }
}
