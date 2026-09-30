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
class __TwigTemplate_334aa6f200c78533392ff94a0bf0ceef extends Template
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
    <!-- Sitemap Information -->
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

   <!-- Sitemap Overview -->

<div class=\"row\">

  <!-- Sitemap Entries -->
  <div class=\"col-sm-6\">

    <div class=\"tile\" style=\"background: #686767; color: #fff;\">

      <div class=\"tile-heading\" style=\"color: #fff;\">
        Sitemap Entries
      </div>

      <div class=\"tile-body\">

        <i class=\"fa fa-sitemap\"></i>

        <h2 class=\"pull-right\" style=\"color: #fff;\">
          ";
        // line 139
        echo ($context["entry_count"] ?? null);
        echo "
        </h2>

      </div>

    </div>

  </div>


  <!-- Included URLs -->
  <div class=\"col-sm-6\">

    <div class=\"tile\" style=\"background: #686767; color: #fff;\">

      <div class=\"tile-heading\" style=\"color: #fff;\">
        Included URLs
      </div>

      <div class=\"tile-body\">

        <i class=\"fa fa-check-circle\"></i>

        <h2 class=\"pull-right\" style=\"color: #fff;\">
          ";
        // line 163
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
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 215
            echo "
                <tr>

                  <!-- Language -->
                  <td>
                    ";
            // line 220
            echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "language_code", [], "any", false, false, false, 220));
            echo "
                  </td>


                  <!-- Type -->
                  <td>
                    ";
            // line 226
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 226);
            echo "
                  </td>


                  <!-- Title -->
                  <td>
                    ";
            // line 232
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "title", [], "any", false, false, false, 232);
            echo "
                  </td>


                  <!-- URL -->
                  <td>
                    <a href=\"";
            // line 238
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "url", [], "any", false, false, false, 238);
            echo "\" target=\"_blank\">
                      ";
            // line 239
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "url", [], "any", false, false, false, 239);
            echo "
                    </a>
                  </td>


                  <!-- Include -->
                  <td>

                    ";
            // line 247
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "include", [], "any", false, false, false, 247)) {
                // line 248
                echo "
                      <span class=\"label label-success\">
                        Enabled
                      </span>

                    ";
            } else {
                // line 254
                echo "
                      <span class=\"label label-default\">
                        Disabled
                      </span>

                    ";
            }
            // line 260
            echo "
                  </td>


                  <!-- Priority -->
                  <td>
                    ";
            // line 266
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "priority", [], "any", false, false, false, 266);
            echo "
                  </td>


                  <!-- Change Frequency -->
                  <td>
                    ";
            // line 272
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "changefreq", [], "any", false, false, false, 272);
            echo "
                  </td>

                </tr>


              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 279
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
        // line 289
        echo "
            </tbody>

          </table>

        </div>

      </div>

    </div>


  </div>

</div>

";
        // line 305
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
        return array (  430 => 305,  412 => 289,  397 => 279,  385 => 272,  376 => 266,  368 => 260,  360 => 254,  352 => 248,  350 => 247,  339 => 239,  335 => 238,  326 => 232,  317 => 226,  308 => 220,  301 => 215,  296 => 214,  242 => 163,  215 => 139,  177 => 104,  173 => 103,  144 => 77,  140 => 76,  110 => 49,  106 => 48,  73 => 17,  62 => 14,  59 => 13,  55 => 12,  49 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "goarac/sitemap_seo.twig", "");
    }
}
