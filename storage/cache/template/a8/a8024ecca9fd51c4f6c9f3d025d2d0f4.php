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

/* catalog/information_list.twig */
class __TwigTemplate_33c05dce9b679856b72b7e7e2c044834 extends Template
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
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-information').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-5\">
              <div class=\"form-group\">
    <label class=\"control-label\" for=\"input-filter-title\">Search by Title</label>
    <input type=\"text\"
           name=\"filter_title\"
           value=\"";
        // line 39
        echo ($context["filter_title"] ?? null);
        echo "\"
           placeholder=\"";
        // line 40
        echo ($context["entry_filter_title"] ?? null);
        echo "\"
           id=\"input-filter-title\"
           class=\"form-control\" />
</div>
            </div>
            <div class=\"col-sm-7\">
              <div class=\"form-group\" style=\"margin-top: 25px;\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-search\"></i> ";
        // line 47
        echo ($context["button_filter"] ?? null);
        echo "</button>
                <a href=\"";
        // line 48
        echo ($context["reset"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i> ";
        echo ($context["button_reset"] ?? null);
        echo "</a>
              </div>
            </div>
          </div>
        </div>
        <form action=\"";
        // line 53
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-information\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 59
        if ((($context["sort"] ?? null) == "id.title")) {
            // line 60
            echo "                    <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 62
            echo "                    <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        }
        // line 63
        echo "</td>
                  <td class=\"text-left\">";
        // line 64
        echo ($context["column_goarac_type"] ?? null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 65
        if ((($context["sort"] ?? null) == "i.sort_order")) {
            // line 66
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 68
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        }
        // line 69
        echo "</td>
                  <td class=\"text-right\">";
        // line 70
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 74
        if (($context["informations"] ?? null)) {
            // line 75
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 76
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 77
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 77), ($context["selected"] ?? null))) {
                    // line 78
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 78);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 80
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 80);
                    echo "\" />
                    ";
                }
                // line 81
                echo "</td>
                  <td class=\"text-left\">";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 82);
                echo "</td>
                  <td class=\"text-left\"><span class=\"label label-info\">";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["information"], "goarac_type", [], "any", false, false, false, 83);
                echo "</span></td>
                  <td class=\"text-right\">";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["information"], "sort_order", [], "any", false, false, false, 84);
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["information"], "edit", [], "any", false, false, false, 85);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                ";
        } else {
            // line 89
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"5\">";
            // line 90
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 93
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 98
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 99
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
  var url = '";
        // line 107
        echo twig_replace_filter(($context["filter_action"] ?? null), ["&amp;" => "&"]);
        echo "';
  var filterTitle = \$('input[name=\"filter_title\"]').val();

  if (filterTitle) {
    url += '&filter_title=' + encodeURIComponent(filterTitle);
  }

  location = url;
});

\$('input[name=\"filter_title\"]').on('keydown', function(event) {
  if (event.keyCode == 13) {
    \$('#button-filter').trigger('click');
  }
});
//--></script>
";
        // line 123
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/information_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 123,  300 => 107,  289 => 99,  285 => 98,  278 => 93,  272 => 90,  269 => 89,  266 => 88,  255 => 85,  251 => 84,  247 => 83,  243 => 82,  240 => 81,  234 => 80,  228 => 78,  226 => 77,  223 => 76,  218 => 75,  216 => 74,  209 => 70,  206 => 69,  198 => 68,  188 => 66,  186 => 65,  182 => 64,  179 => 63,  171 => 62,  161 => 60,  159 => 59,  150 => 53,  140 => 48,  136 => 47,  126 => 40,  122 => 39,  109 => 29,  105 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/information_list.twig", "");
    }
}
