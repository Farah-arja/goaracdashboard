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
class __TwigTemplate_69f16e1b0f22277a7aa134856b6e49f4 extends Template
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

        <!-- BKM BIN Information -->
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


        <!-- BKM BIN API & Installment Table -->
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">
                    <i class=\"fa fa-cog\"></i> BKM BIN API & Installment Table
                </h3>
            </div>

            <div class=\"panel-body\">

                <h4>BKM API</h4>

                <hr>

                <div class=\"row mb-3\">
    <label class=\"col-sm-3 col-form-label\">Status</label>

    <div class=\"col-sm-9\">
        <input type=\"hidden\" name=\"payment_bkm_bin_status\" value=\"1\">

        <div class=\"form-check form-switch form-switch-lg\">
            <input type=\"checkbox\"
                   class=\"form-check-input\"
                   name=\"payment_bkm_bin_status\"
                   value=\"1\"
                   ";
        // line 90
        if (($context["payment_bkm_bin_status"] ?? null)) {
            echo "checked";
        }
        echo ">
        </div>
    </div>
</div>


                <!-- BKM API Base URL -->
                <div class=\"form-group\">
                    <label class=\"control-label\">BKM API Base URL</label>

                    <input type=\"text\"
                           name=\"payment_bkm_bin_base_url\"
                           class=\"form-control\"
                           placeholder=\"https://api-prod.bkm.com.tr\">

                    <p class=\"help-block\">
                        Production BKM API URL. Default: https://api-prod.bkm.com.tr
                    </p>
                </div>

                <!-- Client ID -->
                <div class=\"form-group\">
                    <label class=\"control-label\">Client ID</label>

                    <input type=\"text\"
                           name=\"payment_bkm_bin_client_id\"
                           class=\"form-control\">

                    <p class=\"help-block\">
                        Store BKM credentials here. They are never sent to frontend or mobile apps.
                    </p>
                </div>

                <!-- Client Secret -->
                <div class=\"form-group\">
                    <label class=\"control-label\">Client Secret</label>

                    <input type=\"password\"
                           name=\"payment_bkm_bin_client_secret\"
                           class=\"form-control\">
                </div>

            </div>
        </div>

    </div>
</div>

";
        // line 138
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
        return array (  202 => 138,  149 => 90,  107 => 51,  92 => 39,  67 => 17,  57 => 12,  50 => 8,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/taksit_tablosu.twig", "");
    }
}
