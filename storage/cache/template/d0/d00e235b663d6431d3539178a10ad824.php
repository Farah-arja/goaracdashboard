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
class __TwigTemplate_51953876192a021ecf9b85f422e86abf extends Template
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
```
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"fa fa-plug\"></i> ";
        // line 29
        echo ($context["text_edit"] ?? null);
        echo "</h3>
  </div>

  <div class=\"panel-body\">
    <form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-yolcu-provider2\" class=\"form-horizontal\">

      <input type=\"hidden\" name=\"module_yolcu_provider2_api_logging_status\" value=\"";
        // line 35
        echo ($context["module_yolcu_provider2_api_logging_status"] ?? null);
        echo "\" />

      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 38
        echo ($context["entry_status"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
          <select name=\"module_yolcu_provider2_status\" class=\"form-control\">
            ";
        // line 41
        if (($context["module_yolcu_provider2_status"] ?? null)) {
            // line 42
            echo "            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
            <option value=\"0\">";
            // line 43
            echo ($context["text_disabled"] ?? null);
            echo "</option>
            ";
        } else {
            // line 45
            echo "            <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
            <option value=\"0\" selected=\"selected\">";
            // line 46
            echo ($context["text_disabled"] ?? null);
            echo "</option>
            ";
        }
        // line 48
        echo "          </select>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 53
        echo ($context["help_api_url"] ?? null);
        echo "\">";
        echo ($context["entry_api_url"] ?? null);
        echo "</span></label>
        <div class=\"col-sm-10\">
          <input type=\"text\" name=\"module_yolcu_provider2_api_url\" value=\"";
        // line 55
        echo ($context["module_yolcu_provider2_api_url"] ?? null);
        echo "\" class=\"form-control\" />
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 60
        echo ($context["entry_api_key"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
          <input type=\"text\" name=\"module_yolcu_provider2_api_key\" value=\"";
        // line 62
        echo ($context["module_yolcu_provider2_api_key"] ?? null);
        echo "\" class=\"form-control\" />
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 67
        echo ($context["entry_api_secret"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
          <input type=\"password\" name=\"module_yolcu_provider2_api_secret\" value=\"";
        // line 69
        echo ($context["module_yolcu_provider2_api_secret"] ?? null);
        echo "\" class=\"form-control\" />
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 74
        echo ($context["entry_default_currency"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
          <select name=\"module_yolcu_provider2_default_currency\" class=\"form-control\">
            ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 78
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 78) == ($context["module_yolcu_provider2_default_currency"] ?? null))) {
                // line 79
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 79);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 79);
                echo "</option>
              ";
            } else {
                // line 81
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 81);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 81);
                echo "</option>
              ";
            }
            // line 83
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "          </select>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 89
        echo ($context["entry_default_language"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
          <select name=\"module_yolcu_provider2_default_language\" class=\"form-control\">
            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 93
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 93) == ($context["module_yolcu_provider2_default_language"] ?? null))) {
                // line 94
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 94);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 94);
                echo "</option>
              ";
            } else {
                // line 96
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 96);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 96);
                echo "</option>
              ";
            }
            // line 98
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "          </select>
        </div>
      </div>

      <fieldset>
        <legend>";
        // line 104
        echo ($context["text_yolcu_search_rules"] ?? null);
        echo "</legend>

        <div class=\"alert alert-info\">";
        // line 106
        echo ($context["help_yolcu_search_rules"] ?? null);
        echo "</div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 109
        echo ($context["help_search_commission_status"] ?? null);
        echo "\">";
        echo ($context["entry_search_commission_status"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <select name=\"module_yolcu_provider2_search_commission_status\" class=\"form-control\">
              <option value=\"1\" ";
        // line 112
        echo ((($context["module_yolcu_provider2_search_commission_status"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
              <option value=\"0\" ";
        // line 113
        echo (( !($context["module_yolcu_provider2_search_commission_status"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
            </select>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 119
        echo ($context["help_commission_type"] ?? null);
        echo "\">";
        echo ($context["entry_commission_type"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <select name=\"module_yolcu_provider2_commission_type\" class=\"form-control\">
              <option value=\"percentage\" ";
        // line 122
        echo (((($context["module_yolcu_provider2_commission_type"] ?? null) == "percentage")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_percentage"] ?? null);
        echo "</option>
              <option value=\"fixed\" ";
        // line 123
        echo (((($context["module_yolcu_provider2_commission_type"] ?? null) == "fixed")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_fixed"] ?? null);
        echo "</option>
            </select>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 129
        echo ($context["entry_commission_percentage"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_commission_percentage\" value=\"";
        // line 131
        echo ($context["module_yolcu_provider2_commission_percentage"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 136
        echo ($context["entry_commission_fixed_amount"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_commission_fixed_amount\" value=\"";
        // line 138
        echo ($context["module_yolcu_provider2_commission_fixed_amount"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 143
        echo ($context["help_campaign_code_status"] ?? null);
        echo "\">";
        echo ($context["entry_campaign_code_status"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <select name=\"module_yolcu_provider2_campaign_code_status\" class=\"form-control\">
              <option value=\"1\" ";
        // line 146
        echo ((($context["module_yolcu_provider2_campaign_code_status"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
              <option value=\"0\" ";
        // line 147
        echo (( !($context["module_yolcu_provider2_campaign_code_status"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
            </select>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 153
        echo ($context["help_campaign_code"] ?? null);
        echo "\">";
        echo ($context["entry_campaign_code"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_campaign_code\" value=\"";
        // line 155
        echo ($context["module_yolcu_provider2_campaign_code"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>
      </fieldset>

      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 161
        echo ($context["help_payment_type"] ?? null);
        echo "\">";
        echo ($context["entry_payment_type"] ?? null);
        echo "</span></label>
        <div class=\"col-sm-10\">
          <select name=\"module_yolcu_provider2_api_payment_type\" class=\"form-control\">
            <option value=\"limit\" ";
        // line 164
        echo (((($context["module_yolcu_provider2_api_payment_type"] ?? null) == "limit")) ? ("selected=\"selected\"") : (""));
        echo ">limit</option>
            <option value=\"creditCard\" ";
        // line 165
        echo (((($context["module_yolcu_provider2_api_payment_type"] ?? null) == "creditCard")) ? ("selected=\"selected\"") : (""));
        echo ">creditCard</option>
          </select>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 171
        echo ($context["entry_full_credit"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
          <select name=\"module_yolcu_provider2_api_payment_is_full_credit\" class=\"form-control\">
            <option value=\"1\" ";
        // line 174
        echo ((($context["module_yolcu_provider2_api_payment_is_full_credit"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
            <option value=\"0\" ";
        // line 175
        echo (( !($context["module_yolcu_provider2_api_payment_is_full_credit"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
          </select>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 181
        echo ($context["entry_limited_credit"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
          <select name=\"module_yolcu_provider2_api_payment_is_limited_credit\" class=\"form-control\">
            <option value=\"1\" ";
        // line 184
        echo ((($context["module_yolcu_provider2_api_payment_is_limited_credit"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
            <option value=\"0\" ";
        // line 185
        echo (( !($context["module_yolcu_provider2_api_payment_is_limited_credit"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
          </select>
        </div>
      </div>

      <fieldset>
        <legend>";
        // line 191
        echo ($context["text_site_content"] ?? null);
        echo "</legend>

        <div class=\"alert alert-info\">
          ";
        // line 194
        echo ($context["help_site_content_json"] ?? null);
        echo "
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 198
        echo ($context["entry_site_content_json"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <textarea name=\"module_yolcu_provider2_site_content_json\" rows=\"12\" class=\"form-control\">";
        // line 200
        echo ($context["module_yolcu_provider2_site_content_json"] ?? null);
        echo "</textarea>
            <p class=\"help-block\">";
        // line 201
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
        // line 214
        echo ($context["entry_endpoint_auth_login"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_auth_login\" value=\"";
        // line 216
        echo ($context["module_yolcu_provider2_endpoint_auth_login"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 221
        echo ($context["entry_endpoint_auth_refresh"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_auth_refresh\" value=\"";
        // line 223
        echo ($context["module_yolcu_provider2_endpoint_auth_refresh"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 228
        echo ($context["entry_endpoint_locations"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_locations\" value=\"";
        // line 230
        echo ($context["module_yolcu_provider2_endpoint_locations"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 235
        echo ($context["entry_endpoint_search"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_search\" value=\"";
        // line 237
        echo ($context["module_yolcu_provider2_endpoint_search"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 242
        echo ($context["entry_endpoint_orders"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_orders\" value=\"";
        // line 244
        echo ($context["module_yolcu_provider2_endpoint_orders"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 249
        echo ($context["entry_endpoint_payment_process"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_payment_process\" value=\"";
        // line 251
        echo ($context["module_yolcu_provider2_endpoint_payment_process"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 256
        echo ($context["entry_endpoint_payment_3d_secure_callback"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_payment_3d_secure_callback\" value=\"";
        // line 258
        echo ($context["module_yolcu_provider2_endpoint_payment_3d_secure_callback"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 263
        echo ($context["entry_endpoint_helper_car_classes"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_helper_car_classes\" value=\"";
        // line 265
        echo ($context["module_yolcu_provider2_endpoint_helper_car_classes"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 270
        echo ($context["entry_endpoint_helper_fuel_types"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_helper_fuel_types\" value=\"";
        // line 272
        echo ($context["module_yolcu_provider2_endpoint_helper_fuel_types"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 277
        echo ($context["entry_endpoint_helper_transmission_types"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_helper_transmission_types\" value=\"";
        // line 279
        echo ($context["module_yolcu_provider2_endpoint_helper_transmission_types"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 284
        echo ($context["entry_endpoint_helper_delivery_types"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_helper_delivery_types\" value=\"";
        // line 286
        echo ($context["module_yolcu_provider2_endpoint_helper_delivery_types"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 291
        echo ($context["entry_endpoint_helper_extra_products"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_helper_extra_products\" value=\"";
        // line 293
        echo ($context["module_yolcu_provider2_endpoint_helper_extra_products"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 298
        echo ($context["entry_endpoint_helper_suppliers"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"module_yolcu_provider2_endpoint_helper_suppliers\" value=\"";
        // line 300
        echo ($context["module_yolcu_provider2_endpoint_helper_suppliers"] ?? null);
        echo "\" class=\"form-control\" />
          </div>
        </div>
      </fieldset>

    </form>
  </div>
</div>
```

  </div>
</div>

";
        // line 313
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
        return array (  689 => 313,  673 => 300,  668 => 298,  660 => 293,  655 => 291,  647 => 286,  642 => 284,  634 => 279,  629 => 277,  621 => 272,  616 => 270,  608 => 265,  603 => 263,  595 => 258,  590 => 256,  582 => 251,  577 => 249,  569 => 244,  564 => 242,  556 => 237,  551 => 235,  543 => 230,  538 => 228,  530 => 223,  525 => 221,  517 => 216,  512 => 214,  496 => 201,  492 => 200,  487 => 198,  480 => 194,  474 => 191,  463 => 185,  457 => 184,  451 => 181,  440 => 175,  434 => 174,  428 => 171,  419 => 165,  415 => 164,  407 => 161,  398 => 155,  391 => 153,  380 => 147,  374 => 146,  366 => 143,  358 => 138,  353 => 136,  345 => 131,  340 => 129,  329 => 123,  323 => 122,  315 => 119,  304 => 113,  298 => 112,  290 => 109,  284 => 106,  279 => 104,  272 => 99,  266 => 98,  258 => 96,  250 => 94,  247 => 93,  243 => 92,  237 => 89,  230 => 84,  224 => 83,  216 => 81,  208 => 79,  205 => 78,  201 => 77,  195 => 74,  187 => 69,  182 => 67,  174 => 62,  169 => 60,  161 => 55,  154 => 53,  147 => 48,  142 => 46,  137 => 45,  132 => 43,  127 => 42,  125 => 41,  119 => 38,  113 => 35,  108 => 33,  101 => 29,  95 => 25,  87 => 21,  85 => 20,  78 => 15,  67 => 13,  63 => 12,  58 => 10,  51 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/yolcu_provider2.twig", "");
    }
}
