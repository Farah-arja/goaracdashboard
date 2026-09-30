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
class __TwigTemplate_d723ec497c14b5544fac7d7ac7b37ee0 extends Template
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

  <!-- Page Header -->
  <div class=\"page-header\">
    <div class=\"container-fluid\">

      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "          <li>
            <a href=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      </ul>

    </div>
  </div>


  <div class=\"container-fluid\">


    <!-- ========================================= -->
    <!-- Sitemap URLs -->
    <!-- ========================================= -->

    <div class=\"row\">

      <!-- Frontend URL -->
      <div class=\"col-sm-4\">

        <div class=\"panel panel-default\">

          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              <i class=\"fa fa-globe\"></i>
              Frontend URL
            </h3>
          </div>

          <div class=\"panel-body\">

            <p>
              <strong>
                <a href=\"";
        // line 48
        echo ($context["frontend_url"] ?? null);
        echo "\" target=\"_blank\">
                  ";
        // line 49
        echo ($context["frontend_url"] ?? null);
        echo "
                </a>
              </strong>
            </p>

          </div>

        </div>

      </div>


      <!-- Sitemap URL -->
      <div class=\"col-sm-4\">

        <div class=\"panel panel-default\">

          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              <i class=\"fa fa-sitemap\"></i>
              Sitemap URL
            </h3>
          </div>

          <div class=\"panel-body\">

            <p>
              <a href=\"";
        // line 76
        echo ($context["sitemap_url"] ?? null);
        echo "\" target=\"_blank\">
                ";
        // line 77
        echo ($context["sitemap_url"] ?? null);
        echo "
              </a>
            </p>

          </div>

        </div>

      </div>


      <!-- Robots URL -->
      <div class=\"col-sm-4\">

        <div class=\"panel panel-default\">

          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              <i class=\"fa fa-file-text-o\"></i>
              Robots URL
            </h3>
          </div>

          <div class=\"panel-body\">

            <p>
              <a href=\"";
        // line 103
        echo ($context["robots_url"] ?? null);
        echo "\" target=\"_blank\">
                ";
        // line 104
        echo ($context["robots_url"] ?? null);
        echo "
              </a>
            </p>

          </div>

        </div>

      </div>

    </div>


    <!-- ========================================= -->
    <!-- Sitemap Overview -->
    <!-- ========================================= -->

    <div class=\"row\">

      <!-- All URLs -->
      <div class=\"col-sm-4\">

        <div class=\"tile\">

          <div class=\"tile-heading\">
            <i class=\"fa fa-link\"></i>
            All URLs
          </div>

          <div class=\"tile-body\">

            <i class=\"fa fa-globe\"></i>

            <h2 class=\"pull-right\">
              ";
        // line 138
        echo ($context["entry_count"] ?? null);
        echo "
            </h2>

          </div>

        </div>

      </div>


      <!-- Sitemap Entries -->
      <div class=\"col-sm-4\">

        <div class=\"tile\">

          <div class=\"tile-heading\">
            <i class=\"fa fa-sitemap\"></i>
            Sitemap Entries
          </div>

          <div class=\"tile-body\">

            <i class=\"fa fa-list\"></i>

            <h2 class=\"pull-right\">
              ";
        // line 163
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
            <i class=\"fa fa-check-circle\"></i>
            Included URLs
          </div>

          <div class=\"tile-body\">

            <i class=\"fa fa-check\"></i>

            <h2 class=\"pull-right\">
              ";
        // line 188
        echo ($context["included_count"] ?? null);
        echo "
            </h2>

          </div>

        </div>

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
                <td>Language</td>
                <td>Type</td>
                <td>Title</td>
                <td>URL</td>
                <td>Include</td>
                <td>Priority</td>
                <td>Change Frequency</td>
              </tr>

            </thead>


            <tbody>

              ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 240
            echo "
                <tr>

                  <!-- Language -->
                  <td>
                    ";
            // line 245
            echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "language_code", [], "any", false, false, false, 245));
            echo "
                  </td>


                  <!-- Type -->
                  <td>
                    ";
            // line 251
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 251);
            echo "
                  </td>


                  <!-- Title -->
                  <td>
                    ";
            // line 257
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "title", [], "any", false, false, false, 257);
            echo "
                  </td>


                  <!-- URL -->
                  <td>
                    <a href=\"";
            // line 263
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "url", [], "any", false, false, false, 263);
            echo "\" target=\"_blank\">
                      ";
            // line 264
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "url", [], "any", false, false, false, 264);
            echo "
                    </a>
                  </td>


                  <!-- Include -->
                  <td>

                    ";
            // line 272
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "include", [], "any", false, false, false, 272)) {
                // line 273
                echo "
                      <span class=\"label label-success\">
                        Enabled
                      </span>

                    ";
            } else {
                // line 279
                echo "
                      <span class=\"label label-default\">
                        Disabled
                      </span>

                    ";
            }
            // line 285
            echo "
                  </td>


                  <!-- Priority -->
                  <td>
                    ";
            // line 291
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "priority", [], "any", false, false, false, 291);
            echo "
                  </td>


                  <!-- Change Frequency -->
                  <td>
                    ";
            // line 297
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "changefreq", [], "any", false, false, false, 297);
            echo "
                  </td>

                </tr>


              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 304
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
        // line 314
        echo "
            </tbody>

          </table>

        </div>

      </div>

    </div>


  </div>

</div>

";
        // line 330
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
        return array (  458 => 330,  440 => 314,  425 => 304,  413 => 297,  404 => 291,  396 => 285,  388 => 279,  380 => 273,  378 => 272,  367 => 264,  363 => 263,  354 => 257,  345 => 251,  336 => 245,  329 => 240,  324 => 239,  270 => 188,  242 => 163,  214 => 138,  177 => 104,  173 => 103,  144 => 77,  140 => 76,  110 => 49,  106 => 48,  73 => 17,  62 => 14,  59 => 13,  55 => 12,  49 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "goarac/sitemap_seo.twig", "");
    }
}
