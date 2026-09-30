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
class __TwigTemplate_d64d80488d5b9054fd1ad742608e95f0 extends Template
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

                <div class=\"row\">

                    <!-- Frontend URL -->
                    <div class=\"col-sm-12\">
                        <div class=\"seo-url-box\">

                            <div class=\"seo-url-icon\">
                                <i class=\"fa fa-globe\"></i>
                            </div>

                            <div class=\"seo-url-content\">
                                <div class=\"seo-url-title\">
                                    Frontend URL
                                </div>

                                <div class=\"seo-url-value\">
                                    ";
        // line 53
        echo ($context["frontend_url"] ?? null);
        echo "
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Sitemap URL -->
                    <div class=\"col-sm-12\">
                        <div class=\"seo-url-box\">

                            <div class=\"seo-url-icon\">
                                <i class=\"fa fa-sitemap\"></i>
                            </div>

                            <div class=\"seo-url-content\">
                                <div class=\"seo-url-title\">
                                    Sitemap URL
                                </div>

                                <div class=\"seo-url-value\">
                                    ";
        // line 75
        echo ($context["sitemap_url"] ?? null);
        echo "
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Robots URL -->
                    <div class=\"col-sm-12\">
                        <div class=\"seo-url-box\">

                            <div class=\"seo-url-icon\">
                                <i class=\"fa fa-android\"></i>
                            </div>

                            <div class=\"seo-url-content\">
                                <div class=\"seo-url-title\">
                                    Robots URL
                                </div>

                                <div class=\"seo-url-value\">
                                    ";
        // line 97
        echo ($context["robots_url"] ?? null);
        echo "
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

";
        // line 114
        echo ($context["footer"] ?? null);
        echo "


<style>
.seo-url-box {
    display: flex;
    align-items: center;
    padding: 18px 20px;
    margin-bottom: 15px;
    background: #fff;
    border: 1px solid #e5e5e5;
    border-radius: 4px;
}

.seo-url-icon {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
    background: #f5f5f5;
    border-radius: 4px;
    font-size: 20px;
    color: #555;
}

.seo-url-content {
    flex: 1;
}

.seo-url-title {
    margin-bottom: 6px;
    font-size: 13px;
    font-weight: 600;
    color: #777;
}

.seo-url-value {
    font-size: 14px;
    color: #333;
    word-break: break-all;
}
</style>";
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
        return array (  172 => 114,  152 => 97,  127 => 75,  102 => 53,  63 => 17,  55 => 12,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "goarac/sitemap_seo.twig", "");
    }
}
