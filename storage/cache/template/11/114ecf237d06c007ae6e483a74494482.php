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
class __TwigTemplate_135d360f7274236b8b35b797d0abdec1 extends Template
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
            <h1>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        </div>
    </div>

    <div class=\"container-fluid\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">
                    <i class=\"fa fa-credit-card\"></i> ";
        // line 15
        echo ($context["heading_title"] ?? null);
        echo "
                </h3>
            </div>

            <div class=\"panel-body\">

<div class=\"form-group\">
    <label class=\"control-label\">Cached BIN rows:</label>
    <span>";
        // line 23
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
        // line 35
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
        return array (  86 => 35,  71 => 23,  60 => 15,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/taksit_tablosu.twig", "");
    }
}
