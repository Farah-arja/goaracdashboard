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

/* customer/customer_commission_form.twig */
class __TwigTemplate_00904baf5eb68cd8ad3e9658e1f74c65 extends Template
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

        <button type=\"submit\"
                form=\"form-customer-commission\"
                data-toggle=\"tooltip\"
                title=\"";
        // line 13
        echo ($context["button_save"] ?? null);
        echo "\"
                class=\"btn btn-primary\">

          <i class=\"fa fa-save\"></i>

        </button>

        <a href=\"";
        // line 20
        echo ($context["cancel"] ?? null);
        echo "\"
           data-toggle=\"tooltip\"
           title=\"";
        // line 22
        echo ($context["button_cancel"] ?? null);
        echo "\"
           class=\"btn btn-default\">

          <i class=\"fa fa-reply\"></i>

        </a>

      </div>

      <h1>";
        // line 31
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      <ul class=\"breadcrumb\">

        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 36
            echo "
          <li>
            <a href=\"";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 38);
            echo "\">
              ";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 39);
            echo "
            </a>
          </li>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
      </ul>

    </div>
  </div>


  <div class=\"container-fluid\">

    ";
        // line 53
        if (($context["error_warning"] ?? null)) {
            // line 54
            echo "
      <div class=\"alert alert-danger alert-dismissible\">

        <i class=\"fa fa-exclamation-circle\"></i>

        ";
            // line 59
            echo ($context["error_warning"] ?? null);
            echo "

        <button type=\"button\"
                class=\"close\"
                data-dismiss=\"alert\">

          &times;

        </button>

      </div>

    ";
        }
        // line 72
        echo "

    <div class=\"panel panel-default\">

      <div class=\"panel-heading\">

        <h3 class=\"panel-title\">

          <i class=\"fa fa-pencil\"></i>

          ";
        // line 82
        echo ($context["text_form"] ?? null);
        echo "

        </h3>

      </div>


      <div class=\"panel-body\">

        <form action=\"";
        // line 91
        echo ($context["action"] ?? null);
        echo "\"
              method=\"post\"
              enctype=\"multipart/form-data\"
              id=\"form-customer-commission\"
              class=\"form-horizontal\">


          <div class=\"form-group required\">

            <label class=\"col-sm-2 control-label\"
                   for=\"input-name\">

              ";
        // line 103
        echo ($context["entry_name"] ?? null);
        echo "

            </label>

            <div class=\"col-sm-10\">

              <input type=\"text\"
                     name=\"name\"
                     value=\"";
        // line 111
        echo ($context["name"] ?? null);
        echo "\"
                     placeholder=\"";
        // line 112
        echo ($context["entry_name"] ?? null);
        echo "\"
                     id=\"input-name\"
                     class=\"form-control\"
                     ";
        // line 115
        if (($context["is_default"] ?? null)) {
            // line 116
            echo "                       readonly=\"readonly\"
                     ";
        }
        // line 117
        echo " />

              ";
        // line 119
        if (($context["error_name"] ?? null)) {
            // line 120
            echo "
                <div class=\"text-danger\">
                  ";
            // line 122
            echo ($context["error_name"] ?? null);
            echo "
                </div>

              ";
        }
        // line 126
        echo "
            </div>

          </div>


          <div class=\"form-group\">

            <label class=\"col-sm-2 control-label\"
                   for=\"input-type\">

              ";
        // line 137
        echo ($context["entry_type"] ?? null);
        echo "

            </label>

            <div class=\"col-sm-10\">

              <select name=\"type\"
                      id=\"input-type\"
                      class=\"form-control\">

                <option value=\"percentage\"
                  ";
        // line 148
        if ((($context["type"] ?? null) == "percentage")) {
            // line 149
            echo "                    selected=\"selected\"
                  ";
        }
        // line 150
        echo ">

                  ";
        // line 152
        echo ($context["text_percentage"] ?? null);
        echo "

                </option>

                <option value=\"fixed\"
                  ";
        // line 157
        if ((($context["type"] ?? null) == "fixed")) {
            // line 158
            echo "                    selected=\"selected\"
                  ";
        }
        // line 159
        echo ">

                  ";
        // line 161
        echo ($context["text_fixed"] ?? null);
        echo "

                </option>

              </select>

            </div>

          </div>


          <div class=\"form-group required\">

            <label class=\"col-sm-2 control-label\"
                   for=\"input-value\">

              <span data-toggle=\"tooltip\"
                    title=\"";
        // line 178
        echo ($context["help_value"] ?? null);
        echo "\">

                ";
        // line 180
        echo ($context["entry_value"] ?? null);
        echo "

              </span>

            </label>

            <div class=\"col-sm-10\">

              <input type=\"text\"
                     name=\"value\"
                     value=\"";
        // line 190
        echo ($context["value"] ?? null);
        echo "\"
                     placeholder=\"";
        // line 191
        echo ($context["entry_value"] ?? null);
        echo "\"
                     id=\"input-value\"
                     class=\"form-control\" />

              ";
        // line 195
        if (($context["error_value"] ?? null)) {
            // line 196
            echo "
                <div class=\"text-danger\">
                  ";
            // line 198
            echo ($context["error_value"] ?? null);
            echo "
                </div>

              ";
        }
        // line 202
        echo "
            </div>

          </div>


          <div class=\"form-group\">

            <label class=\"col-sm-2 control-label\"
                   for=\"input-currency\">

              ";
        // line 213
        echo ($context["entry_currency"] ?? null);
        echo "

            </label>

            <div class=\"col-sm-10\">

              <input type=\"text\"
                     value=\"";
        // line 220
        echo ($context["currency_code"] ?? null);
        echo "\"
                     id=\"input-currency\"
                     class=\"form-control\"
                     readonly=\"readonly\" />

            </div>

          </div>


          <div class=\"form-group\">

            <label class=\"col-sm-2 control-label\"
                   for=\"input-status\">

              ";
        // line 235
        echo ($context["entry_status"] ?? null);
        echo "

            </label>

            <div class=\"col-sm-10\">

              <select name=\"status\"
                      id=\"input-status\"
                      class=\"form-control\"
                      ";
        // line 244
        if (($context["is_default"] ?? null)) {
            // line 245
            echo "                        disabled=\"disabled\"
                      ";
        }
        // line 246
        echo ">

                <option value=\"1\"
                  ";
        // line 249
        if (($context["status"] ?? null)) {
            // line 250
            echo "                    selected=\"selected\"
                  ";
        }
        // line 251
        echo ">

                  ";
        // line 253
        echo ($context["text_enabled"] ?? null);
        echo "

                </option>

                <option value=\"0\"
                  ";
        // line 258
        if ( !($context["status"] ?? null)) {
            // line 259
            echo "                    selected=\"selected\"
                  ";
        }
        // line 260
        echo ">

                  ";
        // line 262
        echo ($context["text_disabled"] ?? null);
        echo "

                </option>

              </select>


              ";
        // line 269
        if (($context["is_default"] ?? null)) {
            // line 270
            echo "
                <input type=\"hidden\"
                       name=\"status\"
                       value=\"1\" />

              ";
        }
        // line 276
        echo "
            </div>

          </div>


        </form>

      </div>

    </div>

  </div>

</div>

";
        // line 292
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "customer/customer_commission_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 292,  458 => 276,  450 => 270,  448 => 269,  438 => 262,  434 => 260,  430 => 259,  428 => 258,  420 => 253,  416 => 251,  412 => 250,  410 => 249,  405 => 246,  401 => 245,  399 => 244,  387 => 235,  369 => 220,  359 => 213,  346 => 202,  339 => 198,  335 => 196,  333 => 195,  326 => 191,  322 => 190,  309 => 180,  304 => 178,  284 => 161,  280 => 159,  276 => 158,  274 => 157,  266 => 152,  262 => 150,  258 => 149,  256 => 148,  242 => 137,  229 => 126,  222 => 122,  218 => 120,  216 => 119,  212 => 117,  208 => 116,  206 => 115,  200 => 112,  196 => 111,  185 => 103,  170 => 91,  158 => 82,  146 => 72,  130 => 59,  123 => 54,  121 => 53,  110 => 44,  99 => 39,  95 => 38,  91 => 36,  87 => 35,  80 => 31,  68 => 22,  63 => 20,  53 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/customer_commission_form.twig", "");
    }
}
