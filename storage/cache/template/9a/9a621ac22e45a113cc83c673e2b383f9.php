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
class __TwigTemplate_7e263093bcb02d6cf5219ce2af431e47 extends Template
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
        echo "
";
        // line 2
        echo ($context["header"] ?? null);
        echo "
";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "

<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-taksit-tablosu\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\">
                    <i class=\"fa fa-save\"></i>
                </button>

                <a href=\"";
        // line 13
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\">
                    <i class=\"fa fa-reply\"></i>
                </a>
            </div>

            <h1>";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        </div>
    </div>

    <div class=\"container-fluid\">

        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">
                    <i class=\"fa fa-credit-card\"></i> BKM BIN Information
                </h3>
            </div>

            <div class=\"panel-body\">

                <div class=\"row\">

                    <!-- Left Section -->
                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Cached BIN rows</label>
                            <h3>";
        // line 39
        echo ($context["bin_count"] ?? null);
        echo "</h3>

                            <p class=\"text-muted\">
                                BKM has a low daily request limit. Sync from admin and checkout will use the local cached table.
                            </p>
                        </div>
                    </div>

                    <!-- Right Section -->
                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Last sync</label>
                            <h3><strong>";
        // line 51
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
</div>

";
        // line 67
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
        return array (  128 => 67,  109 => 51,  94 => 39,  70 => 18,  60 => 13,  53 => 9,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/taksit_tablosu.twig", "");
    }
}
