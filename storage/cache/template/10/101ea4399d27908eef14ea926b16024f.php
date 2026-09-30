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

/* setting/sitemap_seo.twig */
class __TwigTemplate_0d2e24695b8cf1213b5a3a0aeb996c19 extends Template
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
          form=\"form-goarac-sitemap\"
          data-toggle=\"tooltip\"
          title=\"";
        // line 13
        echo ($context["button_seed"] ?? null);
        echo "\"
          class=\"btn btn-primary\">
          <i class=\"fa fa-refresh\"></i>
        </button>
      </div>

      <h1>";
        // line 19
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      <ul class=\"breadcrumb\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 23
            echo "          <li>
            <a href=\"";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 24);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 24);
            echo "</a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "      </ul>

    </div>
  </div>


  <div class=\"container-fluid\">

    ";
        // line 35
        if (($context["error_warning"] ?? null)) {
            // line 36
            echo "      <div class=\"alert alert-danger alert-dismissible\">
        <i class=\"fa fa-exclamation-circle\"></i>
        ";
            // line 38
            echo ($context["error_warning"] ?? null);
            echo "

        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
          &times;
        </button>
      </div>
    ";
        }
        // line 45
        echo "

    ";
        // line 47
        if (($context["success"] ?? null)) {
            // line 48
            echo "      <div class=\"alert alert-success alert-dismissible\">
        <i class=\"fa fa-check-circle\"></i>
        ";
            // line 50
            echo ($context["success"] ?? null);
            echo "

        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
          &times;
        </button>
      </div>
    ";
        }
        // line 57
        echo "

    <!-- ========================================= -->
    <!-- Sitemap Information -->
    <!-- ========================================= -->

    <div class=\"row\">

      <!-- Frontend URL -->
      <div class=\"col-sm-4\">

        <div class=\"panel panel-default\">

          <div class=\"panel-heading\">

            <h3 class=\"panel-title\">
              <i class=\"fa fa-link\"></i>
              ";
        // line 74
        echo ($context["text_frontend_url"] ?? null);
        echo "
            </h3>

          </div>

          <div class=\"panel-body\">

            <p>
              <strong>
                <a href=\"";
        // line 83
        echo ($context["frontend_url"] ?? null);
        echo "\" target=\"_blank\">
                  ";
        // line 84
        echo ($context["frontend_url"] ?? null);
        echo "
                </a>
              </strong>
            </p>

            <p>
              ";
        // line 90
        echo ($context["text_sitemap_url"] ?? null);
        echo ":
              <a href=\"";
        // line 91
        echo ($context["sitemap_url"] ?? null);
        echo "\" target=\"_blank\">
                ";
        // line 92
        echo ($context["sitemap_url"] ?? null);
        echo "
              </a>
            </p>

            <p>
              ";
        // line 97
        echo ($context["text_robots_url"] ?? null);
        echo ":
              <a href=\"";
        // line 98
        echo ($context["robots_url"] ?? null);
        echo "\" target=\"_blank\">
                ";
        // line 99
        echo ($context["robots_url"] ?? null);
        echo "
              </a>
            </p>

          </div>

        </div>

      </div>


      <!-- Sitemap Entries -->
      <div class=\"col-sm-4\">

        <div class=\"tile\">

          <div class=\"tile-heading\">
            Sitemap Entries
          </div>

          <div class=\"tile-body\">

            <i class=\"fa fa-sitemap\"></i>

            <h2 class=\"pull-right\">
              ";
        // line 124
        echo ($context["entry_count"] ?? null);
        echo "
            </h2>

          </div>

        </div>

      </div>


      <!-- Included URLs -->
      <div class=\"col-sm-4\">

        <div class=\"tile\">

          <div class=\"tile-heading\">
            Included URLs
          </div>

          <div class=\"tile-body\">

            <i class=\"fa fa-check-circle\"></i>

            <h2 class=\"pull-right\">
              ";
        // line 148
        echo ($context["included_count"] ?? null);
        echo "
            </h2>

          </div>

        </div>

      </div>

    </div>


    <!-- ========================================= -->
    <!-- SEO Landing Pages -->
    <!-- ========================================= -->

    <div class=\"panel panel-default\">

      <div class=\"panel-heading\">

        <h3 class=\"panel-title\">
          <i class=\"fa fa-search\"></i>
          SEO Landing Pages
        </h3>

      </div>

      <div class=\"panel-body\">

        <form
          action=\"";
        // line 178
        echo ($context["action"] ?? null);
        echo "\"
          method=\"post\"
          enctype=\"multipart/form-data\"
          id=\"form-goarac-sitemap\">

          <p>
            ";
        // line 184
        echo ($context["text_seed_help"] ?? null);
        echo "
          </p>

          <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fa fa-refresh\"></i>
            ";
        // line 189
        echo ($context["button_seed"] ?? null);
        echo "
          </button>

        </form>

      </div>

    </div>


    <!-- ========================================= -->
    <!-- Sitemap Preview -->
    <!-- ========================================= -->

    <div class=\"panel panel-default\">

      <div class=\"panel-heading\">

        <h3 class=\"panel-title\">
          <i class=\"fa fa-list\"></i>
          Sitemap Preview
        </h3>

      </div>

      <div class=\"panel-body\">

        <div class=\"table-responsive\">

          <table class=\"table table-bordered table-hover\">

            <thead>

              <tr>

                <td>";
        // line 224
        echo ($context["column_language"] ?? null);
        echo "</td>
                <td>";
        // line 225
        echo ($context["column_type"] ?? null);
        echo "</td>
                <td>";
        // line 226
        echo ($context["column_title"] ?? null);
        echo "</td>
                <td>";
        // line 227
        echo ($context["column_url"] ?? null);
        echo "</td>
                <td>";
        // line 228
        echo ($context["column_include"] ?? null);
        echo "</td>
                <td>";
        // line 229
        echo ($context["column_priority"] ?? null);
        echo "</td>
                <td>";
        // line 230
        echo ($context["column_changefreq"] ?? null);
        echo "</td>

              </tr>

            </thead>

            <tbody>

              ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 239
            echo "
                <tr>

                  <td>
                    ";
            // line 243
            echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "language_code", [], "any", false, false, false, 243));
            echo "
                  </td>

                  <td>
                    ";
            // line 247
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 247);
            echo "
                  </td>

                  <td>
                    ";
            // line 251
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "title", [], "any", false, false, false, 251);
            echo "
                  </td>

                  <td>
                    <a href=\"";
            // line 255
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "url", [], "any", false, false, false, 255);
            echo "\" target=\"_blank\">
                      ";
            // line 256
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "url", [], "any", false, false, false, 256);
            echo "
                    </a>
                  </td>

                  <td>

                    ";
            // line 262
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "include", [], "any", false, false, false, 262)) {
                // line 263
                echo "
                      <span class=\"label label-success\">
                        ";
                // line 265
                echo ($context["text_enabled"] ?? null);
                echo "
                      </span>

                    ";
            } else {
                // line 269
                echo "
                      <span class=\"label label-default\">
                        ";
                // line 271
                echo ($context["text_disabled"] ?? null);
                echo "
                      </span>

                    ";
            }
            // line 275
            echo "
                  </td>

                  <td>
                    ";
            // line 279
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "priority", [], "any", false, false, false, 279);
            echo "
                  </td>

                  <td>
                    ";
            // line 283
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "changefreq", [], "any", false, false, false, 283);
            echo "
                  </td>

                </tr>

              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 289
            echo "
                <tr>

                  <td colspan=\"7\" class=\"text-center\">
                    No sitemap entries yet.
                  </td>

                </tr>

              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 299
        echo "
            </tbody>

          </table>

        </div>

      </div>

    </div>

  </div>

</div>

";
        // line 314
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "setting/sitemap_seo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  503 => 314,  486 => 299,  471 => 289,  460 => 283,  453 => 279,  447 => 275,  440 => 271,  436 => 269,  429 => 265,  425 => 263,  423 => 262,  414 => 256,  410 => 255,  403 => 251,  396 => 247,  389 => 243,  383 => 239,  378 => 238,  367 => 230,  363 => 229,  359 => 228,  355 => 227,  351 => 226,  347 => 225,  343 => 224,  305 => 189,  297 => 184,  288 => 178,  255 => 148,  228 => 124,  200 => 99,  196 => 98,  192 => 97,  184 => 92,  180 => 91,  176 => 90,  167 => 84,  163 => 83,  151 => 74,  132 => 57,  122 => 50,  118 => 48,  116 => 47,  112 => 45,  102 => 38,  98 => 36,  96 => 35,  86 => 27,  75 => 24,  72 => 23,  68 => 22,  62 => 19,  53 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/sitemap_seo.twig", "");
    }
}
