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

/* extension/provider/yolcu_provider1.twig */
class __TwigTemplate_d7fe7366cae05b667a491b535d4852f1 extends Template
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
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-yolcu-provider1\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">

    ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-danger\">
      <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 22
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if (($context["success"] ?? null)) {
            // line 28
            echo "    <div class=\"alert alert-success\">
      <i class=\"fa fa-check-circle\"></i> ";
            // line 29
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 33
        echo "
    <div class=\"panel panel-default\">

      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
          <i class=\"fa fa-plug\"></i> ";
        // line 38
        echo ($context["text_edit"] ?? null);
        echo "
        </h3>
      </div>

      <div class=\"panel-body\">

        <form action=\"";
        // line 44
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-yolcu-provider1\" class=\"form-horizontal\">

          <input type=\"hidden\" name=\"module_yolcu_provider1_api_logging_status\" value=\"";
        // line 46
        echo ($context["module_yolcu_provider1_api_logging_status"] ?? null);
        echo "\" />

          <!-- STATUS -->

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 51
        echo ($context["entry_status"] ?? null);
        echo "</label>

            <div class=\"col-sm-10\">
              <select name=\"module_yolcu_provider1_status\" class=\"form-control\">

                ";
        // line 56
        if (($context["module_yolcu_provider1_status"] ?? null)) {
            // line 57
            echo "
                <option value=\"1\" selected=\"selected\">
                  ";
            // line 59
            echo ($context["text_enabled"] ?? null);
            echo "
                </option>

                <option value=\"0\">
                  ";
            // line 63
            echo ($context["text_disabled"] ?? null);
            echo "
                </option>

                ";
        } else {
            // line 67
            echo "
                <option value=\"1\">
                  ";
            // line 69
            echo ($context["text_enabled"] ?? null);
            echo "
                </option>

                <option value=\"0\" selected=\"selected\">
                  ";
            // line 73
            echo ($context["text_disabled"] ?? null);
            echo "
                </option>

                ";
        }
        // line 77
        echo "
              </select>
            </div>
          </div>

          <!-- API URL -->

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">
              <span data-toggle=\"tooltip\" title=\"";
        // line 86
        echo ($context["help_api_url"] ?? null);
        echo "\">
                ";
        // line 87
        echo ($context["entry_api_url"] ?? null);
        echo "
              </span>
            </label>

            <div class=\"col-sm-10\">
              <input
                type=\"text\"
                name=\"module_yolcu_provider1_api_url\"
                value=\"";
        // line 95
        echo ($context["module_yolcu_provider1_api_url"] ?? null);
        echo "\"
                class=\"form-control\"
              />
            </div>
          </div>

          <!-- API KEY -->

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">
              ";
        // line 105
        echo ($context["entry_api_key"] ?? null);
        echo "
            </label>

            <div class=\"col-sm-10\">
              <input
                type=\"text\"
                name=\"module_yolcu_provider1_api_key\"
                value=\"";
        // line 112
        echo ($context["module_yolcu_provider1_api_key"] ?? null);
        echo "\"
                class=\"form-control\"
              />
            </div>
          </div>

          <!-- API SECRET -->

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">
              ";
        // line 122
        echo ($context["entry_api_secret"] ?? null);
        echo "
            </label>

            <div class=\"col-sm-10\">
              <input
                type=\"password\"
                name=\"module_yolcu_provider1_api_secret\"
                value=\"";
        // line 129
        echo ($context["module_yolcu_provider1_api_secret"] ?? null);
        echo "\"
                class=\"form-control\"
              />
            </div>
          </div>

          <!-- DEFAULT CURRENCY -->

          <div class=\"form-group\">

            <label class=\"col-sm-2 control-label\">
              ";
        // line 140
        echo ($context["entry_default_currency"] ?? null);
        echo "
            </label>

            <div class=\"col-sm-10\">

              <select
                name=\"module_yolcu_provider1_default_currency\"
                class=\"form-control\"
              >

                <option value=\"TEST\">TEST</option>

                ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 153
            echo "
                  <option value=\"";
            // line 154
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 154);
            echo "\">
                    ";
            // line 155
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 155);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 155);
            echo " - status: ";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "status", [], "any", false, false, false, 155);
            echo "
                  </option>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "
              </select>

            </div>
          </div>

          <!-- DEFAULT LANGUAGE -->

          <div class=\"form-group\">

            <label class=\"col-sm-2 control-label\">
              ";
        // line 170
        echo ($context["entry_default_language"] ?? null);
        echo "
            </label>

            <div class=\"col-sm-10\">

              <select
                name=\"module_yolcu_provider1_default_language\"
                class=\"form-control\"
              >

                ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 181
            echo "
                  ";
            // line 182
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 182) == ($context["module_yolcu_provider1_default_language"] ?? null))) {
                // line 183
                echo "
                    <option
                      value=\"";
                // line 185
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 185);
                echo "\"
                      selected=\"selected\"
                    >
                      ";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 188);
                echo "
                    </option>

                  ";
            } else {
                // line 192
                echo "
                    <option value=\"";
                // line 193
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 193);
                echo "\">
                      ";
                // line 194
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 194);
                echo "
                    </option>

                  ";
            }
            // line 198
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "
              </select>

            </div>
          </div>

          <!-- SEARCH RULES -->

          <fieldset>

            <legend>
              ";
        // line 211
        echo ($context["text_yolcu_search_rules"] ?? null);
        echo "
            </legend>

            <div class=\"alert alert-info\">
              ";
        // line 215
        echo ($context["help_yolcu_search_rules"] ?? null);
        echo "
            </div>

            <!-- SEARCH COMMISSION STATUS -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">

                <span
                  data-toggle=\"tooltip\"
                  title=\"";
        // line 226
        echo ($context["help_search_commission_status"] ?? null);
        echo "\"
                >
                  ";
        // line 228
        echo ($context["entry_search_commission_status"] ?? null);
        echo "
                </span>

              </label>

              <div class=\"col-sm-10\">

                <select
                  name=\"module_yolcu_provider1_search_commission_status\"
                  class=\"form-control\"
                >

                  <option
                    value=\"1\"
                    ";
        // line 242
        echo ((($context["module_yolcu_provider1_search_commission_status"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo "
                  >
                    ";
        // line 244
        echo ($context["text_enabled"] ?? null);
        echo "
                  </option>

                  <option
                    value=\"0\"
                    ";
        // line 249
        echo (( !($context["module_yolcu_provider1_search_commission_status"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo "
                  >
                    ";
        // line 251
        echo ($context["text_disabled"] ?? null);
        echo "
                  </option>

                </select>

              </div>
            </div>

            <!-- COMMISSION TYPE -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">

                <span
                  data-toggle=\"tooltip\"
                  title=\"";
        // line 267
        echo ($context["help_commission_type"] ?? null);
        echo "\"
                >
                  ";
        // line 269
        echo ($context["entry_commission_type"] ?? null);
        echo "
                </span>

              </label>

              <div class=\"col-sm-10\">

                <select
                  name=\"module_yolcu_provider1_commission_type\"
                  class=\"form-control\"
                >

                  <option
                    value=\"percentage\"
                    ";
        // line 283
        echo (((($context["module_yolcu_provider1_commission_type"] ?? null) == "percentage")) ? ("selected=\"selected\"") : (""));
        echo "
                  >
                    ";
        // line 285
        echo ($context["text_percentage"] ?? null);
        echo "
                  </option>

                  <option
                    value=\"fixed\"
                    ";
        // line 290
        echo (((($context["module_yolcu_provider1_commission_type"] ?? null) == "fixed")) ? ("selected=\"selected\"") : (""));
        echo "
                  >
                    ";
        // line 292
        echo ($context["text_fixed"] ?? null);
        echo "
                  </option>

                </select>

              </div>
            </div>

            <!-- COMMISSION PERCENTAGE -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">
                ";
        // line 305
        echo ($context["entry_commission_percentage"] ?? null);
        echo "
              </label>

              <div class=\"col-sm-10\">

                <input
                  type=\"text\"
                  name=\"module_yolcu_provider1_commission_percentage\"
                  value=\"";
        // line 313
        echo ($context["module_yolcu_provider1_commission_percentage"] ?? null);
        echo "\"
                  class=\"form-control\"
                />

              </div>
            </div>

            <!-- COMMISSION FIXED -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">
                ";
        // line 325
        echo ($context["entry_commission_fixed_amount"] ?? null);
        echo "
              </label>

              <div class=\"col-sm-10\">

                <input
                  type=\"text\"
                  name=\"module_yolcu_provider1_commission_fixed_amount\"
                  value=\"";
        // line 333
        echo ($context["module_yolcu_provider1_commission_fixed_amount"] ?? null);
        echo "\"
                  class=\"form-control\"
                />

              </div>
            </div>

            <!-- CAMPAIGN CODE STATUS -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">

                <span
                  data-toggle=\"tooltip\"
                  title=\"";
        // line 348
        echo ($context["help_campaign_code_status"] ?? null);
        echo "\"
                >
                  ";
        // line 350
        echo ($context["entry_campaign_code_status"] ?? null);
        echo "
                </span>

              </label>

              <div class=\"col-sm-10\">

                <select
                  name=\"module_yolcu_provider1_campaign_code_status\"
                  class=\"form-control\"
                >

                  <option
                    value=\"1\"
                    ";
        // line 364
        echo ((($context["module_yolcu_provider1_campaign_code_status"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo "
                  >
                    ";
        // line 366
        echo ($context["text_enabled"] ?? null);
        echo "
                  </option>

                  <option
                    value=\"0\"
                    ";
        // line 371
        echo (( !($context["module_yolcu_provider1_campaign_code_status"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo "
                  >
                    ";
        // line 373
        echo ($context["text_disabled"] ?? null);
        echo "
                  </option>

                </select>

              </div>
            </div>

            <!-- CAMPAIGN CODE -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">

                <span
                  data-toggle=\"tooltip\"
                  title=\"";
        // line 389
        echo ($context["help_campaign_code"] ?? null);
        echo "\"
                >
                  ";
        // line 391
        echo ($context["entry_campaign_code"] ?? null);
        echo "
                </span>

              </label>

              <div class=\"col-sm-10\">

                <input
                  type=\"text\"
                  name=\"module_yolcu_provider1_campaign_code\"
                  value=\"";
        // line 401
        echo ($context["module_yolcu_provider1_campaign_code"] ?? null);
        echo "\"
                  class=\"form-control\"
                />

              </div>
            </div>

          </fieldset>

          <!-- PAYMENT TYPE -->

          <div class=\"form-group\">

            <label class=\"col-sm-2 control-label\">

              <span
                data-toggle=\"tooltip\"
                title=\"";
        // line 418
        echo ($context["help_payment_type"] ?? null);
        echo "\"
              >
                ";
        // line 420
        echo ($context["entry_payment_type"] ?? null);
        echo "
              </span>

            </label>

            <div class=\"col-sm-10\">

              <select
                name=\"module_yolcu_provider1_api_payment_type\"
                class=\"form-control\"
              >

                <option
                  value=\"limit\"
                  ";
        // line 434
        echo (((($context["module_yolcu_provider1_api_payment_type"] ?? null) == "limit")) ? ("selected=\"selected\"") : (""));
        echo "
                >
                  limit
                </option>

                <option
                  value=\"creditCard\"
                  ";
        // line 441
        echo (((($context["module_yolcu_provider1_api_payment_type"] ?? null) == "creditCard")) ? ("selected=\"selected\"") : (""));
        echo "
                >
                  creditCard
                </option>

              </select>

            </div>
          </div>

          <!-- FULL CREDIT -->

          <div class=\"form-group\">

            <label class=\"col-sm-2 control-label\">
              ";
        // line 456
        echo ($context["entry_full_credit"] ?? null);
        echo "
            </label>

            <div class=\"col-sm-10\">

              <select
                name=\"module_yolcu_provider1_api_payment_is_full_credit\"
                class=\"form-control\"
              >

                <option
                  value=\"1\"
                  ";
        // line 468
        echo ((($context["module_yolcu_provider1_api_payment_is_full_credit"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo "
                >
                  ";
        // line 470
        echo ($context["text_enabled"] ?? null);
        echo "
                </option>

                <option
                  value=\"0\"
                  ";
        // line 475
        echo (( !($context["module_yolcu_provider1_api_payment_is_full_credit"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo "
                >
                  ";
        // line 477
        echo ($context["text_disabled"] ?? null);
        echo "
                </option>

              </select>

            </div>
          </div>

          <!-- LIMITED CREDIT -->

          <div class=\"form-group\">

            <label class=\"col-sm-2 control-label\">
              ";
        // line 490
        echo ($context["entry_limited_credit"] ?? null);
        echo "
            </label>

            <div class=\"col-sm-10\">

              <select
                name=\"module_yolcu_provider1_api_payment_is_limited_credit\"
                class=\"form-control\"
              >

                <option
                  value=\"1\"
                  ";
        // line 502
        echo ((($context["module_yolcu_provider1_api_payment_is_limited_credit"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo "
                >
                  ";
        // line 504
        echo ($context["text_enabled"] ?? null);
        echo "
                </option>

                <option
                  value=\"0\"
                  ";
        // line 509
        echo (( !($context["module_yolcu_provider1_api_payment_is_limited_credit"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo "
                >
                  ";
        // line 511
        echo ($context["text_disabled"] ?? null);
        echo "
                </option>

              </select>

            </div>
          </div>

          <!-- SITE CONTENT -->

          <fieldset>

            <legend>
              ";
        // line 524
        echo ($context["text_site_content"] ?? null);
        echo "
            </legend>

            <div class=\"alert alert-info\">
              ";
        // line 528
        echo ($context["help_site_content_json"] ?? null);
        echo "
            </div>

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">
                ";
        // line 534
        echo ($context["entry_site_content_json"] ?? null);
        echo "
              </label>

              <div class=\"col-sm-10\">

                <textarea
                  name=\"module_yolcu_provider1_site_content_json\"
                  rows=\"12\"
                  class=\"form-control\"
                >";
        // line 543
        echo ($context["module_yolcu_provider1_site_content_json"] ?? null);
        echo "</textarea>

                <p class=\"help-block\">
                  ";
        // line 546
        echo ($context["text_site_content_json_hint"] ?? null);
        echo "
                </p>

              </div>
            </div>

          </fieldset>

          <!-- ENDPOINTS -->

          <fieldset>

            <legend>
              Endpoints
            </legend>

            <div class=\"alert alert-info\">
              Checkout displays eligible installment options from the BKM BIN integration when the customer enters a supported Turkish credit card. Single payment stays available by default.
            </div>

            <!-- AUTH LOGIN -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">
                ";
        // line 571
        echo ($context["entry_endpoint_auth_login"] ?? null);
        echo "
              </label>

              <div class=\"col-sm-10\">

                <input
                  type=\"text\"
                  name=\"module_yolcu_provider1_endpoint_auth_login\"
                  value=\"";
        // line 579
        echo ($context["module_yolcu_provider1_endpoint_auth_login"] ?? null);
        echo "\"
                  class=\"form-control\"
                />

              </div>
            </div>

            <!-- AUTH REFRESH -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">
                ";
        // line 591
        echo ($context["entry_endpoint_auth_refresh"] ?? null);
        echo "
              </label>

              <div class=\"col-sm-10\">

                <input
                  type=\"text\"
                  name=\"module_yolcu_provider1_endpoint_auth_refresh\"
                  value=\"";
        // line 599
        echo ($context["module_yolcu_provider1_endpoint_auth_refresh"] ?? null);
        echo "\"
                  class=\"form-control\"
                />

              </div>
            </div>

            <!-- LOCATIONS -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">
                ";
        // line 611
        echo ($context["entry_endpoint_locations"] ?? null);
        echo "
              </label>

              <div class=\"col-sm-10\">

                <input
                  type=\"text\"
                  name=\"module_yolcu_provider1_endpoint_locations\"
                  value=\"";
        // line 619
        echo ($context["module_yolcu_provider1_endpoint_locations"] ?? null);
        echo "\"
                  class=\"form-control\"
                />

              </div>
            </div>

            <!-- SEARCH -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">
                ";
        // line 631
        echo ($context["entry_endpoint_search"] ?? null);
        echo "
              </label>

              <div class=\"col-sm-10\">

                <input
                  type=\"text\"
                  name=\"module_yolcu_provider1_endpoint_search\"
                  value=\"";
        // line 639
        echo ($context["module_yolcu_provider1_endpoint_search"] ?? null);
        echo "\"
                  class=\"form-control\"
                />

              </div>
            </div>

            <!-- ORDERS -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">
                ";
        // line 651
        echo ($context["entry_endpoint_orders"] ?? null);
        echo "
              </label>

              <div class=\"col-sm-10\">

                <input
                  type=\"text\"
                  name=\"module_yolcu_provider1_endpoint_orders\"
                  value=\"";
        // line 659
        echo ($context["module_yolcu_provider1_endpoint_orders"] ?? null);
        echo "\"
                  class=\"form-control\"
                />

              </div>
            </div>

            <!-- PAYMENT PROCESS -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">
                ";
        // line 671
        echo ($context["entry_endpoint_payment_process"] ?? null);
        echo "
              </label>

              <div class=\"col-sm-10\">

                <input
                  type=\"text\"
                  name=\"module_yolcu_provider1_endpoint_payment_process\"
                  value=\"";
        // line 679
        echo ($context["module_yolcu_provider1_endpoint_payment_process"] ?? null);
        echo "\"
                  class=\"form-control\"
                />

              </div>
            </div>

            <!-- 3D SECURE CALLBACK -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">
                ";
        // line 691
        echo ($context["entry_endpoint_payment_3d_secure_callback"] ?? null);
        echo "
              </label>

              <div class=\"col-sm-10\">

                <input
                  type=\"text\"
                  name=\"module_yolcu_provider1_endpoint_payment_3d_secure_callback\"
                  value=\"";
        // line 699
        echo ($context["module_yolcu_provider1_endpoint_payment_3d_secure_callback"] ?? null);
        echo "\"
                  class=\"form-control\"
                />

              </div>
            </div>

            <!-- CAR CLASSES -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">
                ";
        // line 711
        echo ($context["entry_endpoint_helper_car_classes"] ?? null);
        echo "
              </label>

              <div class=\"col-sm-10\">

                <input
                  type=\"text\"
                  name=\"module_yolcu_provider1_endpoint_helper_car_classes\"
                  value=\"";
        // line 719
        echo ($context["module_yolcu_provider1_endpoint_helper_car_classes"] ?? null);
        echo "\"
                  class=\"form-control\"
                />

              </div>
            </div>

            <!-- FUEL TYPES -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">
                ";
        // line 731
        echo ($context["entry_endpoint_helper_fuel_types"] ?? null);
        echo "
              </label>

              <div class=\"col-sm-10\">

                <input
                  type=\"text\"
                  name=\"module_yolcu_provider1_endpoint_helper_fuel_types\"
                  value=\"";
        // line 739
        echo ($context["module_yolcu_provider1_endpoint_helper_fuel_types"] ?? null);
        echo "\"
                  class=\"form-control\"
                />

              </div>
            </div>

            <!-- TRANSMISSION TYPES -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">
                ";
        // line 751
        echo ($context["entry_endpoint_helper_transmission_types"] ?? null);
        echo "
              </label>

              <div class=\"col-sm-10\">

                <input
                  type=\"text\"
                  name=\"module_yolcu_provider1_endpoint_helper_transmission_types\"
                  value=\"";
        // line 759
        echo ($context["module_yolcu_provider1_endpoint_helper_transmission_types"] ?? null);
        echo "\"
                  class=\"form-control\"
                />

              </div>
            </div>

            <!-- DELIVERY TYPES -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">
                ";
        // line 771
        echo ($context["entry_endpoint_helper_delivery_types"] ?? null);
        echo "
              </label>

              <div class=\"col-sm-10\">

                <input
                  type=\"text\"
                  name=\"module_yolcu_provider1_endpoint_helper_delivery_types\"
                  value=\"";
        // line 779
        echo ($context["module_yolcu_provider1_endpoint_helper_delivery_types"] ?? null);
        echo "\"
                  class=\"form-control\"
                />

              </div>
            </div>

            <!-- EXTRA PRODUCTS -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">
                ";
        // line 791
        echo ($context["entry_endpoint_helper_extra_products"] ?? null);
        echo "
              </label>

              <div class=\"col-sm-10\">

                <input
                  type=\"text\"
                  name=\"module_yolcu_provider1_endpoint_helper_extra_products\"
                  value=\"";
        // line 799
        echo ($context["module_yolcu_provider1_endpoint_helper_extra_products"] ?? null);
        echo "\"
                  class=\"form-control\"
                />

              </div>
            </div>

            <!-- SUPPLIERS -->

            <div class=\"form-group\">

              <label class=\"col-sm-2 control-label\">
                ";
        // line 811
        echo ($context["entry_endpoint_helper_suppliers"] ?? null);
        echo "
              </label>

              <div class=\"col-sm-10\">

                <input
                  type=\"text\"
                  name=\"module_yolcu_provider1_endpoint_helper_suppliers\"
                  value=\"";
        // line 819
        echo ($context["module_yolcu_provider1_endpoint_helper_suppliers"] ?? null);
        echo "\"
                  class=\"form-control\"
                />

              </div>
            </div>

          </fieldset>

        </form>

      </div>
    </div>
  </div>
</div>

";
        // line 835
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/provider/yolcu_provider1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1239 => 835,  1220 => 819,  1209 => 811,  1194 => 799,  1183 => 791,  1168 => 779,  1157 => 771,  1142 => 759,  1131 => 751,  1116 => 739,  1105 => 731,  1090 => 719,  1079 => 711,  1064 => 699,  1053 => 691,  1038 => 679,  1027 => 671,  1012 => 659,  1001 => 651,  986 => 639,  975 => 631,  960 => 619,  949 => 611,  934 => 599,  923 => 591,  908 => 579,  897 => 571,  869 => 546,  863 => 543,  851 => 534,  842 => 528,  835 => 524,  819 => 511,  814 => 509,  806 => 504,  801 => 502,  786 => 490,  770 => 477,  765 => 475,  757 => 470,  752 => 468,  737 => 456,  719 => 441,  709 => 434,  692 => 420,  687 => 418,  667 => 401,  654 => 391,  649 => 389,  630 => 373,  625 => 371,  617 => 366,  612 => 364,  595 => 350,  590 => 348,  572 => 333,  561 => 325,  546 => 313,  535 => 305,  519 => 292,  514 => 290,  506 => 285,  501 => 283,  484 => 269,  479 => 267,  460 => 251,  455 => 249,  447 => 244,  442 => 242,  425 => 228,  420 => 226,  406 => 215,  399 => 211,  386 => 200,  379 => 198,  372 => 194,  368 => 193,  365 => 192,  358 => 188,  352 => 185,  348 => 183,  346 => 182,  343 => 181,  339 => 180,  326 => 170,  313 => 159,  299 => 155,  295 => 154,  292 => 153,  288 => 152,  273 => 140,  259 => 129,  249 => 122,  236 => 112,  226 => 105,  213 => 95,  202 => 87,  198 => 86,  187 => 77,  180 => 73,  173 => 69,  169 => 67,  162 => 63,  155 => 59,  151 => 57,  149 => 56,  141 => 51,  133 => 46,  128 => 44,  119 => 38,  112 => 33,  105 => 29,  102 => 28,  100 => 27,  97 => 26,  90 => 22,  87 => 21,  85 => 20,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/provider/yolcu_provider1.twig", "");
    }
}
