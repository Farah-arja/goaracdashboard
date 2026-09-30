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
class __TwigTemplate_fd08f5b31757c332ba3e96f254c21ec4 extends Template
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
<!-- Sitemap Overview -->
<!-- ========================================= -->

<div class=\"row\">

  <!-- Sitemap Entries -->
  <div class=\"col-sm-6\">

    <div class=\"tile\">

      <div class=\"tile-heading\">
        <i class=\"fa fa-sitemap\"></i>
        Sitemap Entries
      </div>

      <div class=\"tile-body\">

        <div style=\"font-size: 16px; margin-bottom: 5px;\">
          Total sitemap entries
        </div>

        <h2 style=\"font-size: 32px; margin: 0;\">
          ";
        // line 49
        echo ($context["entry_count"] ?? null);
        echo "
        </h2>

      </div>

    </div>

  </div>


  <!-- Included URLs -->
  <div class=\"col-sm-6\">

    <div class=\"tile\">

      <div class=\"tile-heading\">
        <i class=\"fa fa-check-circle\"></i>
        Included URLs
      </div>

      <div class=\"tile-body\">

        <div style=\"font-size: 16px; margin-bottom: 5px;\">
          URLs included in sitemap
        </div>

        <h2 style=\"font-size: 32px; margin: 0;\">
          ";
        // line 76
        echo ($context["included_count"] ?? null);
        echo "
        </h2>

      </div>

    </div>

  </div>

</div>


    <!-- ========================================= -->
    <!-- Sitemap Overview -->
    <!-- ========================================= -->

    <div class=\"row\">

      <!-- Sitemap Entries -->
      <div class=\"col-sm-6\">

        <div class=\"tile\">

          <div class=\"tile-heading\">
            Sitemap Entries
          </div>

          <div class=\"tile-body\">

            <i class=\"fa fa-sitemap\"></i>

            <h2 class=\"pull-right\">
              ";
        // line 108
        echo ($context["entry_count"] ?? null);
        echo "
            </h2>

          </div>

        </div>

      </div>


      <!-- Included URLs -->
      <div class=\"col-sm-6\">

        <div class=\"tile\">

          <div class=\"tile-heading\">
            Included URLs
          </div>

          <div class=\"tile-body\">

            <i class=\"fa fa-check-circle\"></i>

            <h2 class=\"pull-right\">
              ";
        // line 132
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
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 184
            echo "
                <tr>

                  <!-- Language -->
                  <td>
                    ";
            // line 189
            echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "language_code", [], "any", false, false, false, 189));
            echo "
                  </td>


                  <!-- Type -->
                  <td>
                    ";
            // line 195
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 195);
            echo "
                  </td>


                  <!-- Title -->
                  <td>
                    ";
            // line 201
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "title", [], "any", false, false, false, 201);
            echo "
                  </td>


                  <!-- URL -->
                  <td>
                    <a href=\"";
            // line 207
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "url", [], "any", false, false, false, 207);
            echo "\" target=\"_blank\">
                      ";
            // line 208
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "url", [], "any", false, false, false, 208);
            echo "
                    </a>
                  </td>


                  <!-- Include -->
                  <td>

                    ";
            // line 216
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "include", [], "any", false, false, false, 216)) {
                // line 217
                echo "
                      <span class=\"label label-success\">
                        Enabled
                      </span>

                    ";
            } else {
                // line 223
                echo "
                      <span class=\"label label-default\">
                        Disabled
                      </span>

                    ";
            }
            // line 229
            echo "
                  </td>


                  <!-- Priority -->
                  <td>
                    ";
            // line 235
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "priority", [], "any", false, false, false, 235);
            echo "
                  </td>


                  <!-- Change Frequency -->
                  <td>
                    ";
            // line 241
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "changefreq", [], "any", false, false, false, 241);
            echo "
                  </td>

                </tr>


              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 248
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
        // line 258
        echo "
            </tbody>

          </table>

        </div>

      </div>

    </div>


  </div>

</div>

";
        // line 274
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
        return array (  387 => 274,  369 => 258,  354 => 248,  342 => 241,  333 => 235,  325 => 229,  317 => 223,  309 => 217,  307 => 216,  296 => 208,  292 => 207,  283 => 201,  274 => 195,  265 => 189,  258 => 184,  253 => 183,  199 => 132,  172 => 108,  137 => 76,  107 => 49,  73 => 17,  62 => 14,  59 => 13,  55 => 12,  49 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "goarac/sitemap_seo.twig", "");
    }
}
