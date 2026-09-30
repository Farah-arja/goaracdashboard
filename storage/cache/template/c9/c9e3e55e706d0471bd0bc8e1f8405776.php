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

/* setting/frontend_mobile_translations.twig */
class __TwigTemplate_bb238f1a4f8bc1267c151a67a0b519ac extends Template
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

        <button
          type=\"submit\"
          form=\"form-frontend-mobile-translations\"
          data-toggle=\"tooltip\"
          title=\"";
        // line 14
        echo ($context["button_save"] ?? null);
        echo "\"
          class=\"btn btn-primary\"
        >
          <i class=\"fa fa-save\"></i>
        </button>

        <a
          href=\"";
        // line 21
        echo ($context["cancel"] ?? null);
        echo "\"
          data-toggle=\"tooltip\"
          title=\"";
        // line 23
        echo ($context["button_cancel"] ?? null);
        echo "\"
          class=\"btn btn-default\"
        >
          <i class=\"fa fa-reply\"></i>
        </a>

      </div>

      <h1>";
        // line 31
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      <ul class=\"breadcrumb\">
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 35
            echo "          <li>
            <a href=\"";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 36);
            echo "\">
              ";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 37);
            echo "
            </a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "      </ul>

    </div>
  </div>


  <div class=\"container-fluid\">

    ";
        // line 50
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 51
            echo "      <div class=\"alert alert-danger alert-dismissible\">
        <i class=\"fa fa-exclamation-circle\"></i>
        ";
            // line 53
            echo ($context["error_warning"] ?? null);
            echo "

        <button
          type=\"button\"
          class=\"close\"
          data-dismiss=\"alert\"
        >
          &times;
        </button>
      </div>
    ";
        }
        // line 64
        echo "

    ";
        // line 67
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 68
            echo "      <div class=\"alert alert-success alert-dismissible\">
        <i class=\"fa fa-check-circle\"></i>
        ";
            // line 70
            echo ($context["success"] ?? null);
            echo "

        <button
          type=\"button\"
          class=\"close\"
          data-dismiss=\"alert\"
        >
          &times;
        </button>
      </div>
    ";
        }
        // line 81
        echo "

    <div class=\"panel panel-default\">

      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
          <i class=\"fa fa-language\"></i>
          ";
        // line 88
        echo ($context["text_form"] ?? null);
        echo "
        </h3>
      </div>


      <div class=\"panel-body\">

        <p class=\"help-block\">
          ";
        // line 96
        echo ($context["text_help"] ?? null);
        echo "
        </p>


        ";
        // line 101
        echo "        <div class=\"form-group\">
          <label class=\"control-label\" for=\"translation-filter\">
            Search
          </label>

          <input
            type=\"text\"
            id=\"translation-filter\"
            class=\"form-control\"
            placeholder=\"Search translation keys or values\"
          >
        </div>


        <form
          action=\"";
        // line 116
        echo ($context["action"] ?? null);
        echo "\"
          method=\"post\"
          enctype=\"multipart/form-data\"
          id=\"form-frontend-mobile-translations\"
        >

          <div class=\"table-responsive\">

            <table
              class=\"table table-bordered table-hover\"
              id=\"translation-matrix-table\"
            >

              <thead>

                <tr>

                  <td
                    class=\"text-left\"
                    style=\"width: 28%;\"
                  >
                    ";
        // line 137
        echo ($context["entry_key"] ?? null);
        echo "
                  </td>

                  <td
                    class=\"text-left\"
                    style=\"width: 36%;\"
                  >
                    ";
        // line 144
        echo ($context["entry_tr"] ?? null);
        echo "
                  </td>

                  <td
                    class=\"text-left\"
                    style=\"width: 36%;\"
                  >
                    ";
        // line 151
        echo ($context["entry_en"] ?? null);
        echo "
                  </td>

                </tr>

              </thead>


              <tbody>

                ";
        // line 161
        if (($context["rows"] ?? null)) {
            // line 162
            echo "
                  ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 164
                echo "
                    <tr>

                      ";
                // line 168
                echo "                      <td class=\"text-left\">

                        <code>
                          ";
                // line 171
                echo twig_get_attribute($this->env, $this->source, $context["row"], "key", [], "any", false, false, false, 171);
                echo "
                        </code>

                        <input
                          type=\"hidden\"
                          name=\"translations[";
                // line 176
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 176);
                echo "][key]\"
                          value=\"";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["row"], "key", [], "any", false, false, false, 177);
                echo "\"
                        >

                      </td>


                      ";
                // line 184
                echo "                      <td class=\"text-left\">

                        <textarea
                          name=\"translations[";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 187);
                echo "][tr]\"
                          rows=\"2\"
                          class=\"form-control\"
                        >";
                // line 190
                echo twig_get_attribute($this->env, $this->source, $context["row"], "tr", [], "any", false, false, false, 190);
                echo "</textarea>

                      </td>


                      ";
                // line 196
                echo "                      <td class=\"text-left\">

                        <textarea
                          name=\"translations[";
                // line 199
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 199);
                echo "][en]\"
                          rows=\"2\"
                          class=\"form-control\"
                        >";
                // line 202
                echo twig_get_attribute($this->env, $this->source, $context["row"], "en", [], "any", false, false, false, 202);
                echo "</textarea>

                      </td>

                    </tr>

                  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "
                ";
        } else {
            // line 211
            echo "
                  <tr>

                    <td
                      colspan=\"3\"
                      class=\"text-center\"
                    >
                      No translations found.
                    </td>

                  </tr>

                ";
        }
        // line 224
        echo "
              </tbody>

            </table>

          </div>

        </form>

      </div>

    </div>

  </div>

</div>


<script type=\"text/javascript\"><!--

\$('#translation-filter').on('input', function() {

  var needle = String(\$(this).val() || '').toLowerCase();

  \$('#translation-matrix-table tbody tr').each(function() {

    var haystack = \$(this).text().toLowerCase();

    \$(this).toggle(
      !needle ||
      haystack.indexOf(needle) !== -1
    );

  });

});

//--></script>

";
        // line 263
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "setting/frontend_mobile_translations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 263,  387 => 224,  372 => 211,  368 => 209,  347 => 202,  341 => 199,  336 => 196,  328 => 190,  322 => 187,  317 => 184,  308 => 177,  304 => 176,  296 => 171,  291 => 168,  286 => 164,  269 => 163,  266 => 162,  264 => 161,  251 => 151,  241 => 144,  231 => 137,  207 => 116,  190 => 101,  183 => 96,  172 => 88,  163 => 81,  149 => 70,  145 => 68,  142 => 67,  138 => 64,  124 => 53,  120 => 51,  117 => 50,  107 => 41,  97 => 37,  93 => 36,  90 => 35,  86 => 34,  80 => 31,  69 => 23,  64 => 21,  54 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/frontend_mobile_translations.twig", "");
    }
}
