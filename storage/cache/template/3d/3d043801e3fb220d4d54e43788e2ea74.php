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
class __TwigTemplate_ef4391bd38eb6638f799dfa033a4e052 extends Template
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

<div id=\"content\"><div class=\"page-header\">
    <div class=\"container-fluid\">
        <div class=\"pull-right\">
            <button type=\"submit\" form=\"form-taksit-tablosu\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\">
                <i class=\"fa fa-save\"></i>
            </button>

            <a href=\"";
        // line 11
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\">
                <i class=\"fa fa-reply\"></i>
            </a>
        </div>

        <h1>";
        // line 16
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    </div>
</div>
    <div class=\"container-fluid\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">
                    <i class=\"fa fa-credit-card\"></i> ";
        // line 23
        echo ($context["heading_title"] ?? null);
        echo "
                </h3>
            </div>

            <div class=\"panel-body\">

<div class=\"form-group\">
    <label class=\"control-label\">Cached BIN rows:</label>
    <span>";
        // line 31
        echo ($context["bin_count"] ?? null);
        echo "</span>
</div>

<p class=\"text-muted\">
    BKM has a low daily request limit. Sync from admin and checkout will use the local cached table.
</p>


        </div>
    </div>
</div>

";
        // line 43
        echo ($context["footer"] ?? null);
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
        return array (  102 => 43,  87 => 31,  76 => 23,  66 => 16,  56 => 11,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/taksit_tablosu.twig", "");
    }
}
