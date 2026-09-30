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
class __TwigTemplate_302cf2211da3b5eb3af0e4caa567696c extends Template
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
                    <i class=\"fa fa-credit-card\"></i> ";
        // line 27
        echo ($context["text_bkm_bin_information"] ?? null);
        echo "
                </h3>
            </div>

            <div class=\"panel-body\">

                <div class=\"row\">

                    <!-- Left Section -->
                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">";
        // line 38
        echo ($context["text_cached_bin_rows"] ?? null);
        echo "</label>
                            <h3>";
        // line 39
        echo ($context["bin_count"] ?? null);
        echo "</h3>

                            <p class=\"text-muted\">
                                ";
        // line 42
        echo ($context["text_bin_cache_help"] ?? null);
        echo "
                            </p>
                        </div>
                    </div>

                    <!-- Right Section -->
                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">";
        // line 50
        echo ($context["text_last_sync"] ?? null);
        echo "</label>
                            <h3><strong>";
        // line 51
        echo ($context["last_sync"] ?? null);
        echo "</strong></h3>

                            <button type=\"button\" class=\"btn btn-primary\">
                                <i class=\"fa fa-refresh\"></i> ";
        // line 54
        echo ($context["button_sync"] ?? null);
        echo "
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
                    <i class=\"fa fa-cog\"></i> ";
        // line 70
        echo ($context["text_bkm_bin_api_installment"] ?? null);
        echo "
                </h3>
            </div>

            <div class=\"panel-body\">

                <legend class=\"float-none w-auto px-2 text-primary fw-bold\">
                    ";
        // line 77
        echo ($context["text_bkm_api"] ?? null);
        echo "
                </legend>

                <form id=\"form-taksit-tablosu\" action=\"";
        // line 80
        echo ($context["action"] ?? null);
        echo "\" method=\"post\">

                    <!-- Status -->
                    <div class=\"row mb-3\">
                        <label class=\"col-sm-3 control-label\">
                            ";
        // line 85
        echo ($context["entry_status"] ?? null);
        echo "
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
                            ";
        // line 108
        echo ($context["entry_bkm_api_base_url"] ?? null);
        echo "
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
                                ";
        // line 119
        echo ($context["help_bkm_api_base_url"] ?? null);
        echo "
                            </p>
                        </div>
                    </div>


                    <!-- Client ID -->
                    <div class=\"row mb-3\">
                        <label class=\"col-sm-3 control-label\">
                            ";
        // line 128
        echo ($context["entry_client_id"] ?? null);
        echo "
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
                                ";
        // line 139
        echo ($context["help_client_id"] ?? null);
        echo "
                            </p>
                        </div>
                    </div>


                    <!-- Client Secret -->
                    <div class=\"row mb-3\">
                        <label class=\"col-sm-3 control-label\">
                            ";
        // line 148
        echo ($context["entry_client_secret"] ?? null);
        echo "
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


                    <hr>

                    <!-- Installment Commission Rates -->
                    <fieldset class=\"border rounded-3 p-3 mb-4\">

                        <legend class=\"float-none w-auto px-2 text-primary fw-bold\">
                            ";
        // line 167
        echo ($context["text_installment_commission_rates"] ?? null);
        echo "
                        </legend>


                        <!-- Maximum Installment Count -->
                        <div class=\"row mb-3\">
                            <label class=\"col-sm-3 control-label\">
                                ";
        // line 174
        echo ($context["entry_max_installment_count"] ?? null);
        echo "
                            </label>

                            <div class=\"col-sm-9\">
                                <input type=\"number\"
                                       min=\"1\"
                                       max=\"12\"
                                       class=\"form-control\"
                                       name=\"payment_bkm_bin_max_installment_count\"
                                       value=\"";
        // line 183
        echo ($context["payment_bkm_bin_max_installment_count"] ?? null);
        echo "\">
                            </div>
                        </div>


                        <!-- Only Credit Cards -->
                        <div class=\"row mb-3\">
                            <label class=\"col-sm-3 control-label\">
                                ";
        // line 191
        echo ($context["entry_only_credit_cards"] ?? null);
        echo "
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
        // line 204
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
                                ";
        // line 214
        echo ($context["entry_only_turkish_bin_cards"] ?? null);
        echo "
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
        // line 227
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
                                ";
        // line 237
        echo ($context["entry_allowed_card_families"] ?? null);
        echo "
                            </label>

                            <div class=\"col-sm-9\">
                                <textarea class=\"form-control\"
                                          rows=\"3\"
                                          name=\"payment_bkm_bin_card_family_filter\">";
        // line 243
        echo ($context["payment_bkm_bin_card_family_filter"] ?? null);
        echo "</textarea>

                                <p class=\"help-block\">
                                    ";
        // line 246
        echo ($context["help_allowed_card_families"] ?? null);
        echo "
                                </p>
                            </div>
                        </div>


                        <!-- Installment Commission Table -->
                        <div class=\"table-responsive\">

                            <table class=\"table table-bordered\">

                                <thead>
                                    <tr>
                                        <th>";
        // line 259
        echo ($context["column_month"] ?? null);
        echo "</th>
                                        <th>";
        // line 260
        echo ($context["column_commission"] ?? null);
        echo "</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["installment_months"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 267
            echo "
                                        <tr>

                                            <td>
                                                <strong>";
            // line 271
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
            // line 281
            echo $context["month"];
            echo "]\"
                                                           value=\"";
            // line 282
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
        // line 294
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
        // line 311
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
        return array (  485 => 311,  466 => 294,  448 => 282,  444 => 281,  431 => 271,  425 => 267,  421 => 266,  412 => 260,  408 => 259,  392 => 246,  386 => 243,  377 => 237,  362 => 227,  346 => 214,  331 => 204,  315 => 191,  304 => 183,  292 => 174,  282 => 167,  267 => 155,  257 => 148,  245 => 139,  238 => 135,  228 => 128,  216 => 119,  209 => 115,  199 => 108,  184 => 98,  168 => 85,  160 => 80,  154 => 77,  144 => 70,  125 => 54,  119 => 51,  115 => 50,  104 => 42,  98 => 39,  94 => 38,  80 => 27,  67 => 17,  57 => 12,  50 => 8,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/taksit_tablosu.twig", "");
    }
}
