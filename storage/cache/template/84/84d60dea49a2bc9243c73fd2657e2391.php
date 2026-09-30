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
class __TwigTemplate_0ca005c2599626b999a03778098c6073 extends Template
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
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        if (($context["success"] ?? null)) {
            // line 25
            echo "<div class=\"alert alert-success\">
  <i class=\"fa fa-check-circle\"></i> ";
            // line 26
            echo ($context["success"] ?? null);
            echo "
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
</div>
";
        }
        // line 30
        echo "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-plug\"></i> ";
        // line 33
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>

      <div class=\"panel-body\">
        <form action=\"";
        // line 37
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-yolcu-provider1\" class=\"form-horizontal\">

          <input type=\"hidden\" name=\"module_yolcu_provider1_api_logging_status\" value=\"";
        // line 39
        echo ($context["module_yolcu_provider1_api_logging_status"] ?? null);
        echo "\" />

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 42
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_yolcu_provider1_status\" class=\"form-control\">
                ";
        // line 45
        if (($context["module_yolcu_provider1_status"] ?? null)) {
            // line 46
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 47
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 49
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 50
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 52
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 57
        echo ($context["help_api_url"] ?? null);
        echo "\">";
        echo ($context["entry_api_url"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_yolcu_provider1_api_url\" value=\"";
        // line 59
        echo ($context["module_yolcu_provider1_api_url"] ?? null);
        echo "\" class=\"form-control\" />
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 64
        echo ($context["entry_api_key"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_yolcu_provider1_api_key\" value=\"";
        // line 66
        echo ($context["module_yolcu_provider1_api_key"] ?? null);
        echo "\" class=\"form-control\" />
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 71
        echo ($context["entry_api_secret"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"module_yolcu_provider1_api_secret\" value=\"";
        // line 73
        echo ($context["module_yolcu_provider1_api_secret"] ?? null);
        echo "\" class=\"form-control\" />
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 78
        echo ($context["entry_default_currency"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_yolcu_provider1_default_currency\" class=\"form-control\">
                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 82
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 82) == ($context["module_yolcu_provider1_default_currency"] ?? null))) {
                // line 83
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 83);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 83);
                echo "</option>
                  ";
            } else {
                // line 85
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 85);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 85);
                echo "</option>
                  ";
            }
            // line 87
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 93
        echo ($context["entry_default_language"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_yolcu_provider1_default_language\" class=\"form-control\">
                ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 97
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 97) == ($context["module_yolcu_provider1_default_language"] ?? null))) {
                // line 98
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 98);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 98);
                echo "</option>
                  ";
            } else {
                // line 100
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 100);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 100);
                echo "</option>
                  ";
            }
            // line 102
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "              </select>
            </div>
          </div>

          <fieldset>
            <legend>";
        // line 108
        echo ($context["text_yolcu_search_rules"] ?? null);
        echo "</legend>

            <div class=\"alert alert-info\">";
        // line 110
        echo ($context["help_yolcu_search_rules"] ?? null);
        echo "</div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 113
        echo ($context["help_search_commission_status"] ?? null);
        echo "\">";
        echo ($context["entry_search_commission_status"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <select name=\"module_yolcu_provider1_search_commission_status\" class=\"form-control\">
                  <option value=\"1\" ";
        // line 116
        echo ((($context["module_yolcu_provider1_search_commission_status"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                  <option value=\"0\" ";
        // line 117
        echo (( !($context["module_yolcu_provider1_search_commission_status"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                </select>
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 123
        echo ($context["help_commission_type"] ?? null);
        echo "\">";
        echo ($context["entry_commission_type"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <select name=\"module_yolcu_provider1_commission_type\" class=\"form-control\">
                  <option value=\"percentage\" ";
        // line 126
        echo (((($context["module_yolcu_provider1_commission_type"] ?? null) == "percentage")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_percentage"] ?? null);
        echo "</option>
                  <option value=\"fixed\" ";
        // line 127
        echo (((($context["module_yolcu_provider1_commission_type"] ?? null) == "fixed")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_fixed"] ?? null);
        echo "</option>
                </select>
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 133
        echo ($context["entry_commission_percentage"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_yolcu_provider1_commission_percentage\" value=\"";
        // line 135
        echo ($context["module_yolcu_provider1_commission_percentage"] ?? null);
        echo "\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 140
        echo ($context["entry_commission_fixed_amount"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_yolcu_provider1_commission_fixed_amount\" value=\"";
        // line 142
        echo ($context["module_yolcu_provider1_commission_fixed_amount"] ?? null);
        echo "\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 147
        echo ($context["help_campaign_code_status"] ?? null);
        echo "\">";
        echo ($context["entry_campaign_code_status"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <select name=\"module_yolcu_provider1_campaign_code_status\" class=\"form-control\">
                  <option value=\"1\" ";
        // line 150
        echo ((($context["module_yolcu_provider1_campaign_code_status"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                  <option value=\"0\" ";
        // line 151
        echo (( !($context["module_yolcu_provider1_campaign_code_status"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                </select>
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 157
        echo ($context["help_campaign_code"] ?? null);
        echo "\">";
        echo ($context["entry_campaign_code"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_yolcu_provider1_campaign_code\" value=\"";
        // line 159
        echo ($context["module_yolcu_provider1_campaign_code"] ?? null);
        echo "\" class=\"form-control\" />
              </div>
            </div>
          </fieldset>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 165
        echo ($context["help_payment_type"] ?? null);
        echo "\">";
        echo ($context["entry_payment_type"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"module_yolcu_provider1_api_payment_type\" class=\"form-control\">
                <option value=\"limit\" ";
        // line 168
        echo (((($context["module_yolcu_provider1_api_payment_type"] ?? null) == "limit")) ? ("selected=\"selected\"") : (""));
        echo ">limit</option>
                <option value=\"creditCard\" ";
        // line 169
        echo (((($context["module_yolcu_provider1_api_payment_type"] ?? null) == "creditCard")) ? ("selected=\"selected\"") : (""));
        echo ">creditCard</option>
              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 175
        echo ($context["entry_full_credit"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_yolcu_provider1_api_payment_is_full_credit\" class=\"form-control\">
                <option value=\"1\" ";
        // line 178
        echo ((($context["module_yolcu_provider1_api_payment_is_full_credit"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                <option value=\"0\" ";
        // line 179
        echo (( !($context["module_yolcu_provider1_api_payment_is_full_credit"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 185
        echo ($context["entry_limited_credit"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_yolcu_provider1_api_payment_is_limited_credit\" class=\"form-control\">
                <option value=\"1\" ";
        // line 188
        echo ((($context["module_yolcu_provider1_api_payment_is_limited_credit"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                <option value=\"0\" ";
        // line 189
        echo (( !($context["module_yolcu_provider1_api_payment_is_limited_credit"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
              </select>
            </div>
          </div>

          <fieldset>
            <legend>";
        // line 195
        echo ($context["text_site_content"] ?? null);
        echo "</legend>

            <div class=\"alert alert-info\">
              ";
        // line 198
        echo ($context["help_site_content_json"] ?? null);
        echo "
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 202
        echo ($context["entry_site_content_json"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <textarea name=\"module_yolcu_provider1_site_content_json\" rows=\"12\" class=\"form-control\">";
        // line 204
        echo ($context["module_yolcu_provider1_site_content_json"] ?? null);
        echo "</textarea>
                <p class=\"help-block\">";
        // line 205
        echo ($context["text_site_content_json_hint"] ?? null);
        echo "</p>
              </div>
            </div>
          </fieldset>

          <fieldset>
            <legend>Endpoints</legend>

            <div class=\"alert alert-info\">
              Checkout displays eligible installment options from the BKM BIN integration when the customer enters a supported Turkish credit card. Single payment stays available by default.
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 218
        echo ($context["entry_endpoint_auth_login"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_yolcu_provider1_endpoint_auth_login\" value=\"";
        // line 220
        echo ($context["module_yolcu_provider1_endpoint_auth_login"] ?? null);
        echo "\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 225
        echo ($context["entry_endpoint_auth_refresh"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_yolcu_provider1_endpoint_auth_refresh\" value=\"";
        // line 227
        echo ($context["module_yolcu_provider1_endpoint_auth_refresh"] ?? null);
        echo "\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 232
        echo ($context["entry_endpoint_locations"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_yolcu_provider1_endpoint_locations\" value=\"";
        // line 234
        echo ($context["module_yolcu_provider1_endpoint_locations"] ?? null);
        echo "\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 239
        echo ($context["entry_endpoint_search"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_yolcu_provider1_endpoint_search\" value=\"";
        // line 241
        echo ($context["module_yolcu_provider1_endpoint_search"] ?? null);
        echo "\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 246
        echo ($context["entry_endpoint_orders"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_yolcu_provider1_endpoint_orders\" value=\"";
        // line 248
        echo ($context["module_yolcu_provider1_endpoint_orders"] ?? null);
        echo "\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 253
        echo ($context["entry_endpoint_payment_process"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_yolcu_provider1_endpoint_payment_process\" value=\"";
        // line 255
        echo ($context["module_yolcu_provider1_endpoint_payment_process"] ?? null);
        echo "\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 260
        echo ($context["entry_endpoint_payment_3d_secure_callback"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_yolcu_provider1_endpoint_payment_3d_secure_callback\" value=\"";
        // line 262
        echo ($context["module_yolcu_provider1_endpoint_payment_3d_secure_callback"] ?? null);
        echo "\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 267
        echo ($context["entry_endpoint_helper_car_classes"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_yolcu_provider1_endpoint_helper_car_classes\" value=\"";
        // line 269
        echo ($context["module_yolcu_provider1_endpoint_helper_car_classes"] ?? null);
        echo "\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 274
        echo ($context["entry_endpoint_helper_fuel_types"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_yolcu_provider1_endpoint_helper_fuel_types\" value=\"";
        // line 276
        echo ($context["module_yolcu_provider1_endpoint_helper_fuel_types"] ?? null);
        echo "\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 281
        echo ($context["entry_endpoint_helper_transmission_types"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_yolcu_provider1_endpoint_helper_transmission_types\" value=\"";
        // line 283
        echo ($context["module_yolcu_provider1_endpoint_helper_transmission_types"] ?? null);
        echo "\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 288
        echo ($context["entry_endpoint_helper_delivery_types"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_yolcu_provider1_endpoint_helper_delivery_types\" value=\"";
        // line 290
        echo ($context["module_yolcu_provider1_endpoint_helper_delivery_types"] ?? null);
        echo "\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 295
        echo ($context["entry_endpoint_helper_extra_products"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_yolcu_provider1_endpoint_helper_extra_products\" value=\"";
        // line 297
        echo ($context["module_yolcu_provider1_endpoint_helper_extra_products"] ?? null);
        echo "\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 302
        echo ($context["entry_endpoint_helper_suppliers"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_yolcu_provider1_endpoint_helper_suppliers\" value=\"";
        // line 304
        echo ($context["module_yolcu_provider1_endpoint_helper_suppliers"] ?? null);
        echo "\" class=\"form-control\" />
              </div>
            </div>
          </fieldset>

        </form>
      </div>
    </div>
  </div>
</div>

";
        // line 315
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
        return array (  697 => 315,  683 => 304,  678 => 302,  670 => 297,  665 => 295,  657 => 290,  652 => 288,  644 => 283,  639 => 281,  631 => 276,  626 => 274,  618 => 269,  613 => 267,  605 => 262,  600 => 260,  592 => 255,  587 => 253,  579 => 248,  574 => 246,  566 => 241,  561 => 239,  553 => 234,  548 => 232,  540 => 227,  535 => 225,  527 => 220,  522 => 218,  506 => 205,  502 => 204,  497 => 202,  490 => 198,  484 => 195,  473 => 189,  467 => 188,  461 => 185,  450 => 179,  444 => 178,  438 => 175,  429 => 169,  425 => 168,  417 => 165,  408 => 159,  401 => 157,  390 => 151,  384 => 150,  376 => 147,  368 => 142,  363 => 140,  355 => 135,  350 => 133,  339 => 127,  333 => 126,  325 => 123,  314 => 117,  308 => 116,  300 => 113,  294 => 110,  289 => 108,  282 => 103,  276 => 102,  268 => 100,  260 => 98,  257 => 97,  253 => 96,  247 => 93,  240 => 88,  234 => 87,  226 => 85,  218 => 83,  215 => 82,  211 => 81,  205 => 78,  197 => 73,  192 => 71,  184 => 66,  179 => 64,  171 => 59,  164 => 57,  157 => 52,  152 => 50,  147 => 49,  142 => 47,  137 => 46,  135 => 45,  129 => 42,  123 => 39,  118 => 37,  111 => 33,  106 => 30,  99 => 26,  96 => 25,  94 => 24,  86 => 20,  84 => 19,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/provider/yolcu_provider1.twig", "");
    }
}
