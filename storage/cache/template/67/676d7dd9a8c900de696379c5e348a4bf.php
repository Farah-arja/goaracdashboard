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

/* extension/module/yolcu_provider2.twig */
class __TwigTemplate_2339fc1b2840089438027be263410fb6 extends Template
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
        <button type=\"submit\" form=\"form-yolcu-provider2\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "
";
        // line 26
        if (($context["success"] ?? null)) {
            // line 27
            echo "<div class=\"alert alert-success\">
  <i class=\"fa fa-check-circle\"></i> ";
            // line 28
            echo ($context["success"] ?? null);
            echo "
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
</div>
";
        }
        // line 32
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"fa fa-plug\"></i> ";
        // line 34
        echo ($context["text_edit"] ?? null);
        echo "</h3>
  </div>

  <div class=\"panel-body\">
    <form action=\"";
        // line 38
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-yolcu-provider2\" class=\"form-horizontal\">

      <input type=\"hidden\" name=\"module_yolcu_provider2_api_logging_status\" value=\"";
        // line 40
        echo ($context["module_yolcu_provider2_api_logging_status"] ?? null);
        echo "\" />

      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 43
        echo ($context["entry_status"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
          <select name=\"module_yolcu_provider2_status\" class=\"form-control\">
            ";
        // line 46
        if (($context["module_yolcu_provider2_status"] ?? null)) {
            // line 47
            echo "            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
            <option value=\"0\">";
            // line 48
            echo ($context["text_disabled"] ?? null);
            echo "</option>
            ";
        } else {
            // line 50
            echo "            <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
            <option value=\"0\" selected=\"selected\">";
            // line 51
            echo ($context["text_disabled"] ?? null);
            echo "</option>
            ";
        }
        // line 53
        echo "          </select>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 58
        echo ($context["help_api_url"] ?? null);
        echo "\">";
        echo ($context["entry_api_url"] ?? null);
        echo "</span></label>
        <div class=\"col-sm-10\">
          <input type=\"text\" name=\"module_yolcu_provider2_api_url\" value=\"";
        // line 60
        echo ($context["module_yolcu_provider2_api_url"] ?? null);
        echo "\" class=\"form-control\" />
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 65
        echo ($context["entry_api_key"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
          <input type=\"text\" name=\"module_yolcu_provider2_api_key\" value=\"";
        // line 67
        echo ($context["module_yolcu_provider2_api_key"] ?? null);
        echo "\" class=\"form-control\" />
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 72
        echo ($context["entry_api_secret"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
          <input type=\"password\" name=\"module_yolcu_provider2_api_secret\" value=\"";
        // line 74
        echo ($context["module_yolcu_provider2_api_secret"] ?? null);
        echo "\" class=\"form-control\" />
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 79
        echo ($context["entry_default_currency"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
          <select name=\"module_yolcu_provider2_default_currency\" class=\"form-control\">
            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 83
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 83) == ($context["module_yolcu_provider2_default_currency"] ?? null))) {
                // line 84
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 84);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 84);
                echo "</option>
              ";
            } else {
                // line 86
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 86);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 86);
                echo "</option>
              ";
            }
            // line 88
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "          </select>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 94
        echo ($context["entry_default_language"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
          <select name=\"module_yolcu_provider2_default_language\" class=\"form-control\">
            ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 98
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 98) == ($context["module_yolcu_provider2_default_language"] ?? null))) {
                // line 99
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 99);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 99);
                echo "</option>
              ";
            } else {
                // line 101
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 101);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 101);
                echo "</option>
              ";
            }
            // line 103
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "          </select>
        </div>
      </div>

      <fieldset>
        <legend>";
        // line 109
        echo ($context["text_yolcu_search_rules"] ?? null);
        echo "</legend>

        <div class=\"alert alert-info\">";
        // line 111
        echo ($context["help_yolcu_search_rules"] ?? null);
        echo "</div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 114
        echo ($context["help_search_commission_status"] ?? null);
        echo "\">";
        echo ($context["entry_search_commission_status"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <select name=\"module_yolcu_provider2_search_commission_status\" class=\"form-control\">
              <option value=\"1\" ";
        // line 117
        echo ((($context["module_yolcu_provider2_search_commission_status"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
              <option value=\"0\" ";
        // line 118
        echo (( !($context["module_yolcu_provider2_search_commission_status"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
            </select>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 124
        echo ($context["help_commission_type"] ?? null);
        echo "\">";
        echo ($context["entry_commission_type"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <select name=\"module_yolcu_provider2_commission_type\" class=\"form-control\">
              <option value=\"percentage\" ";
        // line 127
        echo (((($context["module_yolcu_provider2_commission_type"] ?? null) == "percentage")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_percentage"] ?? null);
        echo "</option>
              <option value=\"fixed\" ";
        // line 128
        echo (((($context["module_yolcu_provider2_commission_type"] ?? null) == "fixed")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_fixed"] ?? null);
        echo "</option>
            </select>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 134
        echo ($context["entry_commission_percentage"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_commission_percentage\" value=\"";
        // line 136
        echo ($context["module_yolcu_provider2_commission_percentage"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 141
        echo ($context["entry_commission_fixed_amount"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_commission_fixed_amount\" value=\"";
        // line 143
        echo ($context["module_yolcu_provider2_commission_fixed_amount"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 148
        echo ($context["help_campaign_code_status"] ?? null);
        echo "\">";
        echo ($context["entry_campaign_code_status"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <select name=\"module_yolcu_provider2_campaign_code_status\" class=\"form-control\">
              <option value=\"1\" ";
        // line 151
        echo ((($context["module_yolcu_provider2_campaign_code_status"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
              <option value=\"0\" ";
        // line 152
        echo (( !($context["module_yolcu_provider2_campaign_code_status"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
            </select>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 158
        echo ($context["help_campaign_code"] ?? null);
        echo "\">";
        echo ($context["entry_campaign_code"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_campaign_code\" value=\"";
        // line 160
        echo ($context["module_yolcu_provider2_campaign_code"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>
      </fieldset>

      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 166
        echo ($context["help_payment_type"] ?? null);
        echo "\">";
        echo ($context["entry_payment_type"] ?? null);
        echo "</span></label>
        <div class=\"col-sm-10\">
          <select name=\"module_yolcu_provider2_api_payment_type\" class=\"form-control\">
            <option value=\"limit\" ";
        // line 169
        echo (((($context["module_yolcu_provider2_api_payment_type"] ?? null) == "limit")) ? ("selected=\"selected\"") : (""));
        echo ">limit</option>
            <option value=\"creditCard\" ";
        // line 170
        echo (((($context["module_yolcu_provider2_api_payment_type"] ?? null) == "creditCard")) ? ("selected=\"selected\"") : (""));
        echo ">creditCard</option>
          </select>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 176
        echo ($context["entry_full_credit"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
          <select name=\"module_yolcu_provider2_api_payment_is_full_credit\" class=\"form-control\">
            <option value=\"1\" ";
        // line 179
        echo ((($context["module_yolcu_provider2_api_payment_is_full_credit"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
            <option value=\"0\" ";
        // line 180
        echo (( !($context["module_yolcu_provider2_api_payment_is_full_credit"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
          </select>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 186
        echo ($context["entry_limited_credit"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
          <select name=\"module_yolcu_provider2_api_payment_is_limited_credit\" class=\"form-control\">
            <option value=\"1\" ";
        // line 189
        echo ((($context["module_yolcu_provider2_api_payment_is_limited_credit"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
            <option value=\"0\" ";
        // line 190
        echo (( !($context["module_yolcu_provider2_api_payment_is_limited_credit"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
          </select>
        </div>
      </div>

      <fieldset>
        <legend>";
        // line 196
        echo ($context["text_site_content"] ?? null);
        echo "</legend>

        <div class=\"alert alert-info\">
          ";
        // line 199
        echo ($context["help_site_content_json"] ?? null);
        echo "
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 203
        echo ($context["entry_site_content_json"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <textarea name=\"module_yolcu_provider2_site_content_json\" rows=\"12\" class=\"form-control\">";
        // line 205
        echo ($context["module_yolcu_provider2_site_content_json"] ?? null);
        echo "</textarea>
            <p class=\"help-block\">";
        // line 206
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
        // line 219
        echo ($context["entry_endpoint_auth_login"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_auth_login\" value=\"";
        // line 221
        echo ($context["module_yolcu_provider2_endpoint_auth_login"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 226
        echo ($context["entry_endpoint_auth_refresh"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_auth_refresh\" value=\"";
        // line 228
        echo ($context["module_yolcu_provider2_endpoint_auth_refresh"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 233
        echo ($context["entry_endpoint_locations"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_locations\" value=\"";
        // line 235
        echo ($context["module_yolcu_provider2_endpoint_locations"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 240
        echo ($context["entry_endpoint_search"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_search\" value=\"";
        // line 242
        echo ($context["module_yolcu_provider2_endpoint_search"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 247
        echo ($context["entry_endpoint_orders"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_orders\" value=\"";
        // line 249
        echo ($context["module_yolcu_provider2_endpoint_orders"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 254
        echo ($context["entry_endpoint_payment_process"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_payment_process\" value=\"";
        // line 256
        echo ($context["module_yolcu_provider2_endpoint_payment_process"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 261
        echo ($context["entry_endpoint_payment_3d_secure_callback"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_payment_3d_secure_callback\" value=\"";
        // line 263
        echo ($context["module_yolcu_provider2_endpoint_payment_3d_secure_callback"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 268
        echo ($context["entry_endpoint_helper_car_classes"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_helper_car_classes\" value=\"";
        // line 270
        echo ($context["module_yolcu_provider2_endpoint_helper_car_classes"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 275
        echo ($context["entry_endpoint_helper_fuel_types"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_helper_fuel_types\" value=\"";
        // line 277
        echo ($context["module_yolcu_provider2_endpoint_helper_fuel_types"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 282
        echo ($context["entry_endpoint_helper_transmission_types"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_helper_transmission_types\" value=\"";
        // line 284
        echo ($context["module_yolcu_provider2_endpoint_helper_transmission_types"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 289
        echo ($context["entry_endpoint_helper_delivery_types"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_helper_delivery_types\" value=\"";
        // line 291
        echo ($context["module_yolcu_provider2_endpoint_helper_delivery_types"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 296
        echo ($context["entry_endpoint_helper_extra_products"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_helper_extra_products\" value=\"";
        // line 298
        echo ($context["module_yolcu_provider2_endpoint_helper_extra_products"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 303
        echo ($context["entry_endpoint_helper_suppliers"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_helper_suppliers\" value=\"";
        // line 305
        echo ($context["module_yolcu_provider2_endpoint_helper_suppliers"] ?? null);
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
        // line 318
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/yolcu_provider2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  702 => 318,  686 => 305,  681 => 303,  673 => 298,  668 => 296,  660 => 291,  655 => 289,  647 => 284,  642 => 282,  634 => 277,  629 => 275,  621 => 270,  616 => 268,  608 => 263,  603 => 261,  595 => 256,  590 => 254,  582 => 249,  577 => 247,  569 => 242,  564 => 240,  556 => 235,  551 => 233,  543 => 228,  538 => 226,  530 => 221,  525 => 219,  509 => 206,  505 => 205,  500 => 203,  493 => 199,  487 => 196,  476 => 190,  470 => 189,  464 => 186,  453 => 180,  447 => 179,  441 => 176,  432 => 170,  428 => 169,  420 => 166,  411 => 160,  404 => 158,  393 => 152,  387 => 151,  379 => 148,  371 => 143,  366 => 141,  358 => 136,  353 => 134,  342 => 128,  336 => 127,  328 => 124,  317 => 118,  311 => 117,  303 => 114,  297 => 111,  292 => 109,  285 => 104,  279 => 103,  271 => 101,  263 => 99,  260 => 98,  256 => 97,  250 => 94,  243 => 89,  237 => 88,  229 => 86,  221 => 84,  218 => 83,  214 => 82,  208 => 79,  200 => 74,  195 => 72,  187 => 67,  182 => 65,  174 => 60,  167 => 58,  160 => 53,  155 => 51,  150 => 50,  145 => 48,  140 => 47,  138 => 46,  132 => 43,  126 => 40,  121 => 38,  114 => 34,  110 => 32,  103 => 28,  100 => 27,  98 => 26,  95 => 25,  87 => 21,  85 => 20,  78 => 15,  67 => 13,  63 => 12,  58 => 10,  51 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/yolcu_provider2.twig", "");
    }
}
