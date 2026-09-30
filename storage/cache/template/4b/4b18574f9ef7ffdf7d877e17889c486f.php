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
class __TwigTemplate_310e966b6c38b4117ddd6405bde838d5 extends Template
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
                <button type=\"submit\" form=\"form-taksit-tablosu\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\">
                    <i class=\"fa fa-save\"></i>
                </button>

                <a href=\"";
        // line 12
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\">
                    <i class=\"fa fa-reply\"></i>
                </a>
            </div>

            <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        </div>
    </div>

    <div class=\"container-fluid\">
        <div class=\"row\">

            <!-- Left Section -->
            <div class=\"col-sm-6\">
                <div class=\"panel panel-default\" style=\"max-width: 500px;>
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">
                            Cached BIN rows
                        </h3>
                    </div>

                    <div class=\"panel-body\">
                        <h3>";
        // line 34
        echo ($context["bin_count"] ?? null);
        echo "</h3>

                        <p class=\"text-muted\">
                            BKM has a low daily request limit. Sync from admin and checkout will use the local cached table.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div class=\"col-sm-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">
                            Last sync
                        </h3>
                    </div>

                    <div class=\"panel-body\">
                        <h3><strong>";
        // line 53
        echo ($context["last_sync"] ?? null);
        echo "</strong></h3>

                        <button type=\"button\" class=\"btn btn-primary\">
                            <i class=\"fa fa-refresh\"></i> Sync BKM BIN List
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

";
        // line 66
        echo ($context["footer"] ?? null);
        echo "

";
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
        return array (  125 => 66,  109 => 53,  87 => 34,  67 => 17,  57 => 12,  50 => 8,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/taksit_tablosu.twig", "");
    }
}
