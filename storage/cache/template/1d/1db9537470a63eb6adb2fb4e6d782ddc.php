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
class __TwigTemplate_e760ce64fba9a50704f44e06696dd425 extends Template
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

                <legend class=\"float-none w-auto px-2 text-primary fw-bold\">
                            BKM API
                        </legend>

                <form id=\"form-taksit-tablosu\" action=\"";
        // line 80
        echo ($context["action"] ?? null);
        echo "\" method=\"post\">

                    <!-- Status -->
                    <div class=\"row mb-3\">
                        <label class=\"col-sm-3 control-label\">
                            Status
                        </label>

                        <div class=\"col-sm-9\">
                            <input type=\"hidden\"
                                   name=\"payment_bkm_bin_status\"
                                   value=\"0\">

                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\"
                                           name=\"payment_bkm_bin_status\"
                                           value=\"1\"
                                           ";
        // line 98
        if (($context["payment_bkm_bin_status"] ?? null)) {
            echo "checked";
        }
        echo ">
                                </label>
                            </div>
                        </div>
                    </div>


                    <!-- BKM API Base URL -->
                    <div class=\"row mb-3\">
                        <label class=\"col-sm-3 control-label\">
                            BKM API Base URL
                        </label>

                        <div class=\"col-sm-9\">
                            <input type=\"text\"
                                   class=\"form-control\"
                                   name=\"payment_bkm_bin_base_url\"
                                   value=\"";
        // line 115
        echo ($context["payment_bkm_bin_base_url"] ?? null);
        echo "\"
                                   placeholder=\"https://api-prod.bkm.com.tr\">

                            <p class=\"help-block\">
                                Production BKM API URL. Default: https://api-prod.bkm.com.tr
                            </p>
                        </div>
                    </div>


                    <!-- Client ID -->
                    <div class=\"row mb-3\">
                        <label class=\"col-sm-3 control-label\">
                            Client ID
                        </label>

                        <div class=\"col-sm-9\">
                            <input type=\"text\"
                                   class=\"form-control\"
                                   name=\"payment_bkm_bin_client_id\"
                                   value=\"";
        // line 135
        echo ($context["payment_bkm_bin_client_id"] ?? null);
        echo "\"
                                   autocomplete=\"off\">

                            <p class=\"help-block\">
                                Store BKM credentials here. They are never sent to frontend or mobile apps.
                            </p>
                        </div>
                    </div>


                    <!-- Client Secret -->
                    <div class=\"row mb-3\">
                        <label class=\"col-sm-3 control-label\">
                            Client Secret
                        </label>

                        <div class=\"col-sm-9\">
                            <input type=\"password\"
                                   class=\"form-control\"
                                   name=\"payment_bkm_bin_client_secret\"
                                   value=\"";
        // line 155
        echo ($context["payment_bkm_bin_client_secret"] ?? null);
        echo "\"
                                   autocomplete=\"new-password\">
                        </div>
                    </div>


                    <!-- Installment Commission Rates -->
                    <fieldset class=\"border rounded-3 p-3 mb-4\">

                        <legend class=\"float-none w-auto px-2 text-primary fw-bold\">
                            Installment commission rates
                        </legend>


                        <!-- Maximum Installment Count -->
                        <div class=\"row mb-3\">
                            <label class=\"col-sm-3 control-label\">
                                Maximum Installment Count
                            </label>

                            <div class=\"col-sm-9\">
                                <input type=\"number\"
                                       min=\"1\"
                                       max=\"12\"
                                       class=\"form-control\"
                                       name=\"payment_bkm_bin_max_installment_count\"
                                       value=\"";
        // line 181
        echo ($context["payment_bkm_bin_max_installment_count"] ?? null);
        echo "\">
                            </div>
                        </div>


                        <!-- Only Credit Cards -->
                        <div class=\"row mb-3\">
                            <label class=\"col-sm-3 control-label\">
                                Only credit cards
                            </label>

                            <div class=\"col-sm-9\">
                                <input type=\"hidden\"
                                       name=\"payment_bkm_bin_require_credit_card\"
                                       value=\"0\">

                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"
                                               name=\"payment_bkm_bin_require_credit_card\"
                                               value=\"1\"
                                               ";
        // line 202
        if (($context["payment_bkm_bin_require_credit_card"] ?? null)) {
            echo "checked";
        }
        echo ">
                                    </label>
                                </div>
                            </div>
                        </div>


                        <!-- Only Turkish BIN Cards -->
                        <div class=\"row mb-3\">
                            <label class=\"col-sm-3 control-label\">
                                Only Turkish BIN cards
                            </label>

                            <div class=\"col-sm-9\">
                                <input type=\"hidden\"
                                       name=\"payment_bkm_bin_require_turkish_bin\"
                                       value=\"0\">

                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"
                                               name=\"payment_bkm_bin_require_turkish_bin\"
                                               value=\"1\"
                                               ";
        // line 225
        if (($context["payment_bkm_bin_require_turkish_bin"] ?? null)) {
            echo "checked";
        }
        echo ">
                                    </label>
                                </div>
                            </div>
                        </div>


                        <!-- Allowed Card Families -->
                        <div class=\"row mb-3\">
                            <label class=\"col-sm-3 control-label\">
                                Allowed card families
                            </label>

                            <div class=\"col-sm-9\">
                                <textarea class=\"form-control\"
                                          rows=\"3\"
                                          name=\"payment_bkm_bin_card_family_filter\">";
        // line 241
        echo ($context["payment_bkm_bin_card_family_filter"] ?? null);
        echo "</textarea>

                                <p class=\"help-block\">
                                    Optional comma or line separated filter, e.g. WORLD, BANKKART.
                                    Leave empty to allow every Turkish credit card found in BKM.
                                </p>
                            </div>
                        </div>


                        <!-- Installment Commission Table -->
                        <div class=\"table-responsive\">

                            <table class=\"table table-bordered\">

                                <thead>
                                    <tr>
                                        <th>Month</th>
                                        <th>Commission %</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    ";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["installment_months"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 266
            echo "
                                        <tr>

                                            <td>
                                                <strong>";
            // line 270
            echo $context["month"];
            echo "</strong>
                                            </td>

                                            <td>
                                                <div class=\"input-group\">

                                                    <input type=\"number\"
                                                           step=\"0.0001\"
                                                           min=\"0\"
                                                           class=\"form-control\"
                                                           name=\"payment_bkm_bin_installment_rates[";
            // line 280
            echo $context["month"];
            echo "]\"
                                                           value=\"";
            // line 281
            echo (($__internal_compile_0 = ($context["payment_bkm_bin_installment_rates"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["month"]] ?? null) : null);
            echo "\">

                                                    <span class=\"input-group-addon\">
                                                        %
                                                    </span>

                                                </div>
                                            </td>

                                        </tr>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        echo "
                                </tbody>

                            </table>

                        </div>

                    </fieldset>

                </form>

            </div>
        </div>

    </div>
</div>

";
        // line 310
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
        return array (  421 => 310,  402 => 293,  384 => 281,  380 => 280,  367 => 270,  361 => 266,  357 => 265,  330 => 241,  309 => 225,  281 => 202,  257 => 181,  228 => 155,  205 => 135,  182 => 115,  160 => 98,  139 => 80,  107 => 51,  92 => 39,  67 => 17,  57 => 12,  50 => 8,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/taksit_tablosu.twig", "");
    }
}
