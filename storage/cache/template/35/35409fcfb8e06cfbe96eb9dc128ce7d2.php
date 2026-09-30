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
class __TwigTemplate_6826ffe580a181afb8d824291c467073 extends Template
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
        echo "```twig
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
                    <i class=\"fa fa-credit-card\"></i> ";
        // line 26
        echo ($context["heading_title"] ?? null);
        echo "
                </h3>
            </div>

            <div class=\"panel-body\">

                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Cached BIN rows</label>
                            <div>";
        // line 36
        echo ($context["bin_count"] ?? null);
        echo "</div>
                        </div>
                    </div>

                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Last sync</label>
                            <div><strong>";
        // line 43
        echo ($context["last_sync"] ?? null);
        echo "</strong></div>

                            <button type=\"button\" class=\"btn btn-primary\" style=\"margin-top: 10px;\">
                                <i class=\"fa fa-refresh\"></i> Sync BKM BIN List
                            </button>
                        </div>
                    </div>
                </div>

                <p class=\"text-muted\">
                    BKM has a low daily request limit. Sync from admin and checkout will use the local cached table.
                </p>

            </div>
        </div>
    </div>
</div>

";
        // line 61
        echo ($context["footer"] ?? null);
        echo "
```
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
        return array (  125 => 61,  104 => 43,  94 => 36,  81 => 26,  70 => 18,  60 => 13,  53 => 9,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/taksit_tablosu.twig", "");
    }
}
