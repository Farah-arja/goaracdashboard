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
class __TwigTemplate_891fd7b662f5aa370821f48d51fcc0a6 extends Template
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
        <button type=\"submit\" form=\"form-goarac-sitemap\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_seed"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button>
      </div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo " <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
    ";
        }
        // line 20
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo " <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
    ";
        }
        // line 23
        echo "    <div class=\"row\">
      <div class=\"col-sm-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\"><h3 class=\"panel-title\"><i class=\"fa fa-link\"></i> ";
        // line 26
        echo ($context["text_frontend_url"] ?? null);
        echo "</h3></div>
          <div class=\"panel-body\">
            <p><strong>";
        // line 28
        echo ($context["frontend_url"] ?? null);
        echo "</strong></p>
            <p>";
        // line 29
        echo ($context["text_sitemap_url"] ?? null);
        echo ": <a href=\"";
        echo ($context["sitemap_url"] ?? null);
        echo "\" target=\"_blank\">";
        echo ($context["sitemap_url"] ?? null);
        echo "</a></p>
            <p>";
        // line 30
        echo ($context["text_robots_url"] ?? null);
        echo ": <a href=\"";
        echo ($context["robots_url"] ?? null);
        echo "\" target=\"_blank\">";
        echo ($context["robots_url"] ?? null);
        echo "</a></p>
          </div>
        </div>
      </div>
      <div class=\"col-sm-4\">
        <div class=\"tile\">
          <div class=\"tile-heading\">Sitemap Entries</div>
          <div class=\"tile-body\"><i class=\"fa fa-sitemap\"></i><h2 class=\"pull-right\">";
        // line 37
        echo ($context["entry_count"] ?? null);
        echo "</h2></div>
        </div>
      </div>
      <div class=\"col-sm-4\">
        <div class=\"tile\">
          <div class=\"tile-heading\">Included URLs</div>
          <div class=\"tile-body\"><i class=\"fa fa-check-circle\"></i><h2 class=\"pull-right\">";
        // line 43
        echo ($context["included_count"] ?? null);
        echo "</h2></div>
        </div>
      </div>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\"><h3 class=\"panel-title\"><i class=\"fa fa-search\"></i> SEO Landing Pages</h3></div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 50
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-goarac-sitemap\">
          <p>";
        // line 51
        echo ($context["text_seed_help"] ?? null);
        echo "</p>
          <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i> ";
        // line 52
        echo ($context["button_seed"] ?? null);
        echo "</button>
        </form>
      </div>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\"><h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> Sitemap Preview</h3></div>
      <div class=\"panel-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td>";
        // line 63
        echo ($context["column_language"] ?? null);
        echo "</td>
                <td>";
        // line 64
        echo ($context["column_type"] ?? null);
        echo "</td>
                <td>";
        // line 65
        echo ($context["column_title"] ?? null);
        echo "</td>
                <td>";
        // line 66
        echo ($context["column_url"] ?? null);
        echo "</td>
                <td>";
        // line 67
        echo ($context["column_include"] ?? null);
        echo "</td>
                <td>";
        // line 68
        echo ($context["column_priority"] ?? null);
        echo "</td>
                <td>";
        // line 69
        echo ($context["column_changefreq"] ?? null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
              ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 74
            echo "              <tr>
                <td>";
            // line 75
            echo twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "language_code", [], "any", false, false, false, 75));
            echo "</td>
                <td>";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 76);
            echo "</td>
                <td>";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "title", [], "any", false, false, false, 77);
            echo "</td>
                <td><a href=\"";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "url", [], "any", false, false, false, 78);
            echo "\" target=\"_blank\">";
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "url", [], "any", false, false, false, 78);
            echo "</a></td>
                <td>";
            // line 79
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "include", [], "any", false, false, false, 79)) {
                echo "<span class=\"label label-success\">";
                echo ($context["text_enabled"] ?? null);
                echo "</span>";
            } else {
                echo "<span class=\"label label-default\">";
                echo ($context["text_disabled"] ?? null);
                echo "</span>";
            }
            echo "</td>
                <td>";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "priority", [], "any", false, false, false, 80);
            echo "</td>
                <td>";
            // line 81
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "changefreq", [], "any", false, false, false, 81);
            echo "</td>
              </tr>
              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 84
            echo "              <tr><td colspan=\"7\" class=\"text-center\">No sitemap entries yet.</td></tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 93
        echo ($context["footer"] ?? null);
        echo "
";
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
        return array (  268 => 93,  259 => 86,  252 => 84,  244 => 81,  240 => 80,  228 => 79,  222 => 78,  218 => 77,  214 => 76,  210 => 75,  207 => 74,  202 => 73,  195 => 69,  191 => 68,  187 => 67,  183 => 66,  179 => 65,  175 => 64,  171 => 63,  157 => 52,  153 => 51,  149 => 50,  139 => 43,  130 => 37,  116 => 30,  108 => 29,  104 => 28,  99 => 26,  94 => 23,  88 => 21,  85 => 20,  79 => 18,  77 => 17,  71 => 13,  60 => 11,  56 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "goarac/sitemap_seo.twig", "");
    }
}
