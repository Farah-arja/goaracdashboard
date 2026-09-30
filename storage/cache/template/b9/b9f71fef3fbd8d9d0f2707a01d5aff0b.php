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

/* goarac/sitemap_seo.twig */
class __TwigTemplate_40a110cf090e919978bd2a89c396968b extends Template
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
        // line 73
        echo ($context["text_frontend_url"] ?? null);
        echo "
            </h3>
          </div>

          <div class=\"panel-body\">

            <p>
              <strong>
                <a href=\"";
        // line 81
        echo ($context["frontend_url"] ?? null);
        echo "\" target=\"_blank\">
                  ";
        // line 82
        echo ($context["frontend_url"] ?? null);
        echo "
                </a>
              </strong>
            </p>

            <p>
              ";
        // line 88
        echo ($context["text_sitemap_url"] ?? null);
        echo ":
              <a href=\"";
        // line 89
        echo ($context["sitemap_url"] ?? null);
        echo "\" target=\"_blank\">
                ";
        // line 90
        echo ($context["sitemap_url"] ?? null);
        echo "
              </a>
            </p>

            <p>
              ";
        // line 95
        echo ($context["text_robots_url"] ?? null);
        echo ":
              <a href=\"";
        // line 96
        echo ($context["robots_url"] ?? null);
        echo "\" target=\"_blank\">
                ";
        // line 97
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
        // line 122
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
        // line 146
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
        // line 176
        echo ($context["action"] ?? null);
        echo "\"
          method=\"post\"
          enctype=\"multipart/form-data\"
          id=\"form-goarac-sitemap\">

          <p>
            ";
        // line 182
        echo ($context["text_seed_help"] ?? null);
        echo "
          </p>

          <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fa fa-refresh\"></i>
            ";
        // line 187
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

                <td>
                  ";
        // line 223
        echo ($context["column_language"] ?? null);
        echo "
                </td>

                <td>
                  ";
        // line 227
        echo ($context["column_type"] ?? null);
        echo "
                </td>

                <td>
                  ";
        // line 231
        echo ($context["column_title"] ?? null);
        echo "
                </td>

                <td>
                  ";
        // line 235
        echo ($context["column_url"] ?? null);
        echo "
                </td>

                <td>
                  ";
        // line 239
        echo ($context["column_include"] ?? null);
        echo "
                </td>

                <td>
                  ";
        // line 243
        echo ($context["column_priority"] ?? null);
        echo "
                </td>

                <td>
                  ";
        // line 247
        echo ($context["column_changefreq"] ?? null);
        echo "
                </td>

              </tr>

            </thead>


            <tbody>

              ";
        // line 257
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 258
            echo "
                <tr>

                  <!-- Language -->
                  <td>
                    ";
            // line 263
            echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "language_code", [], "any", false, false, false, 263));
            echo "
                  </td>


                  <!-- Type -->
                  <td>
                    ";
            // line 269
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 269);
            echo "
                  </td>


                  <!-- Title -->
                  <td>
                    ";
            // line 275
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "title", [], "any", false, false, false, 275);
            echo "
                  </td>


                  <!-- URL -->
                  <td>
                    <a href=\"";
            // line 281
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "url", [], "any", false, false, false, 281);
            echo "\" target=\"_blank\">
                      ";
            // line 282
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "url", [], "any", false, false, false, 282);
            echo "
                    </a>
                  </td>


                  <!-- Include -->
                  <td>

                    ";
            // line 290
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "include", [], "any", false, false, false, 290)) {
                // line 291
                echo "
                      <span class=\"label label-success\">
                        ";
                // line 293
                echo ($context["text_enabled"] ?? null);
                echo "
                      </span>

                    ";
            } else {
                // line 297
                echo "
                      <span class=\"label label-default\">
                        ";
                // line 299
                echo ($context["text_disabled"] ?? null);
                echo "
                      </span>

                    ";
            }
            // line 303
            echo "
                  </td>


                  <!-- Priority -->
                  <td>
                    ";
            // line 309
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "priority", [], "any", false, false, false, 309);
            echo "
                  </td>


                  <!-- Change Frequency -->
                  <td>
                    ";
            // line 315
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "changefreq", [], "any", false, false, false, 315);
            echo "
                  </td>

                </tr>


              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 322
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
        // line 332
        echo "
            </tbody>

          </table>

        </div>

      </div>

    </div>


  </div>

</div>

";
        // line 348
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "goarac/sitemap_seo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 348,  519 => 332,  504 => 322,  492 => 315,  483 => 309,  475 => 303,  468 => 299,  464 => 297,  457 => 293,  453 => 291,  451 => 290,  440 => 282,  436 => 281,  427 => 275,  418 => 269,  409 => 263,  402 => 258,  397 => 257,  384 => 247,  377 => 243,  370 => 239,  363 => 235,  356 => 231,  349 => 227,  342 => 223,  303 => 187,  295 => 182,  286 => 176,  253 => 146,  226 => 122,  198 => 97,  194 => 96,  190 => 95,  182 => 90,  178 => 89,  174 => 88,  165 => 82,  161 => 81,  150 => 73,  132 => 57,  122 => 50,  118 => 48,  116 => 47,  112 => 45,  102 => 38,  98 => 36,  96 => 35,  86 => 27,  75 => 24,  72 => 23,  68 => 22,  62 => 19,  53 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "goarac/sitemap_seo.twig", "");
    }
}
