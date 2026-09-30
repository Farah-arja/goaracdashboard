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
class __TwigTemplate_4d91630071413db2ab02b2a7f0cbe69f extends Template
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
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-information').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>

```
  <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>

  <ul class=\"breadcrumb\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  </ul>
</div>
```

  </div>

  <div class=\"container-fluid\">

```
";
        // line 27
        if (($context["error_warning"] ?? null)) {
            // line 28
            echo "<div class=\"alert alert-danger alert-dismissible\">
  <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 29
            echo ($context["error_warning"] ?? null);
            echo "
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
</div>
";
        }
        // line 33
        echo "
";
        // line 34
        if (($context["success"] ?? null)) {
            // line 35
            echo "<div class=\"alert alert-success alert-dismissible\">
  <i class=\"fa fa-check-circle\"></i> ";
            // line 36
            echo ($context["success"] ?? null);
            echo "
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
</div>
";
        }
        // line 40
        echo "
<div class=\"panel panel-default\">

  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">
      <i class=\"fa fa-list\"></i> ";
        // line 45
        echo ($context["text_list"] ?? null);
        echo "
    </h3>
  </div>

  <div class=\"panel-body\">

    <form action=\"";
        // line 51
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-information\">

      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">

          <thead>
            <tr>

              <td style=\"width: 1px;\" class=\"text-center\">
                <input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" />
              </td>

              <td class=\"text-left\">
                ";
        // line 64
        if ((($context["sort"] ?? null) == "id.title")) {
            // line 65
            echo "                <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                ";
        } else {
            // line 67
            echo "                <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                ";
        }
        // line 69
        echo "              </td>

              <td class=\"text-left\">
                ";
        // line 72
        echo ($context["column_goarac_type"] ?? null);
        echo "
              </td>

              <td class=\"text-right\">
                ";
        // line 76
        if ((($context["sort"] ?? null) == "i.sort_order")) {
            // line 77
            echo "                <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                ";
        } else {
            // line 79
            echo "                <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                ";
        }
        // line 81
        echo "              </td>

              <td class=\"text-right\">
                ";
        // line 84
        echo ($context["column_action"] ?? null);
        echo "
              </td>

            </tr>
          </thead>

          <tbody>

            ";
        // line 92
        if (($context["informations"] ?? null)) {
            // line 93
            echo "
            ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 95
                echo "
            <tr>

              <td class=\"text-center\">
                ";
                // line 99
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 99), ($context["selected"] ?? null))) {
                    // line 100
                    echo "                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 100);
                    echo "\" checked=\"checked\" />
                ";
                } else {
                    // line 102
                    echo "                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 102);
                    echo "\" />
                ";
                }
                // line 104
                echo "              </td>

              <td class=\"text-left\">
                ";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 107);
                echo "
              </td>

              <td class=\"text-left\">
                <span class=\"label label-info\">";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["information"], "goarac_type", [], "any", false, false, false, 111);
                echo "</span>
              </td>

              <td class=\"text-right\">
                ";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["information"], "sort_order", [], "any", false, false, false, 115);
                echo "
              </td>

              <td class=\"text-right\">
                <a href=\"";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["information"], "edit", [], "any", false, false, false, 119);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\">
                  <i class=\"fa fa-pencil\"></i>
                </a>
              </td>

            </tr>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "
            ";
        } else {
            // line 129
            echo "
            <tr>
              <td class=\"text-center\" colspan=\"5\">";
            // line 131
            echo ($context["text_no_results"] ?? null);
            echo "</td>
            </tr>

            ";
        }
        // line 135
        echo "
          </tbody>

        </table>
      </div>

    </form>

    <div class=\"row\">
      <div class=\"col-sm-6 text-left\">";
        // line 144
        echo ($context["pagination"] ?? null);
        echo "</div>
      <div class=\"col-sm-6 text-right\">";
        // line 145
        echo ($context["results"] ?? null);
        echo "</div>
    </div>

  </div>
</div>
```

  </div>
</div>

";
        // line 155
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
        return array (  335 => 155,  322 => 145,  318 => 144,  307 => 135,  300 => 131,  296 => 129,  292 => 127,  276 => 119,  269 => 115,  262 => 111,  255 => 107,  250 => 104,  244 => 102,  238 => 100,  236 => 99,  230 => 95,  226 => 94,  223 => 93,  221 => 92,  210 => 84,  205 => 81,  197 => 79,  187 => 77,  185 => 76,  178 => 72,  173 => 69,  165 => 67,  155 => 65,  153 => 64,  137 => 51,  128 => 45,  121 => 40,  114 => 36,  111 => 35,  109 => 34,  106 => 33,  99 => 29,  96 => 28,  94 => 27,  83 => 18,  72 => 16,  68 => 15,  62 => 12,  53 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/information_list.twig", "");
    }
}
