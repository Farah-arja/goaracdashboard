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

/* catalog/information_form.twig */
class __TwigTemplate_34cae2a758149ed32e7a49b8b4841599 extends Template
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
        <button type=\"submit\" form=\"form-information\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
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
  <div class=\"container-fluid\">";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-information\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 37
            echo "                <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 37);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 37);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 37);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 37);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 37);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "              </ul>
              <div class=\"tab-content\">";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 41
            echo "                <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 41);
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            echo "\">";
            echo ($context["entry_title"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"information_description[";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45);
            echo "][title]\" value=\"";
            echo (((($__internal_compile_0 = ($context["information_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["information_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45)] ?? null) : null), "title", [], "any", false, false, false, 45)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45);
            echo "\" class=\"form-control\" />
                      ";
            // line 46
            if ((($__internal_compile_2 = ($context["error_title"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46)] ?? null) : null)) {
                // line 47
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_compile_3 = ($context["error_title"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 48
            echo " </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"information_description[";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_4 = ($context["information_description"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["information_description"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null), "description", [], "any", false, false, false, 53)) : (""));
            echo "</textarea>
                      ";
            // line 54
            if ((($__internal_compile_6 = ($context["error_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null)) {
                // line 55
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_compile_7 = ($context["error_description"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 56
            echo " </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"information_description[";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_compile_8 = ($context["information_description"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["information_description"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null), "meta_title", [], "any", false, false, false, 61)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "\" class=\"form-control\" />
                      ";
            // line 62
            if ((($__internal_compile_10 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62)] ?? null) : null)) {
                // line 63
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_compile_11 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 64
            echo " </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"information_description[";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69);
            echo "][meta_description]\" rows=\"5\"  placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_12 = ($context["information_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["information_description"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69)] ?? null) : null), "meta_description", [], "any", false, false, false, 69)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"information_description[";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_14 = ($context["information_description"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = ($context["information_description"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 75)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "</div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 83
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 86
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 87
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 87), ($context["information_store"] ?? null))) {
                // line 88
                echo "                        <input type=\"checkbox\" name=\"information_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 88);
                echo "\" checked=\"checked\" />
                        ";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 89);
                echo "
                        ";
            } else {
                // line 91
                echo "                        <input type=\"checkbox\" name=\"information_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 91);
                echo "\" />
                        ";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 92);
                echo "
                        ";
            }
            // line 93
            echo "</label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-bottom\"><span data-toggle=\"tooltip\" title=\"";
        // line 99
        echo ($context["help_bottom"] ?? null);
        echo "\">";
        echo ($context["entry_bottom"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"checkbox\">
                    <label>";
        // line 102
        if (($context["bottom"] ?? null)) {
            // line 103
            echo "                      <input type=\"checkbox\" name=\"bottom\" value=\"1\" checked=\"checked\" id=\"input-bottom\" />
                      ";
        } else {
            // line 105
            echo "                      <input type=\"checkbox\" name=\"bottom\" value=\"1\" id=\"input-bottom\" />
                      ";
        }
        // line 107
        echo "                      &nbsp;</label>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 112
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 115
        if (($context["status"] ?? null)) {
            // line 116
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 117
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 119
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 120
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 122
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 126
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 128
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-goarac-type\"><span data-toggle=\"tooltip\" title=\"";
        // line 132
        echo ($context["help_goarac_type"] ?? null);
        echo "\">";
        echo ($context["entry_goarac_type"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"goarac_type\" id=\"input-goarac-type\" class=\"form-control\">
                    ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "page", 1 => "legal", 2 => "blog", 3 => "campaign", 4 => "seo_landing"]);
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 136
            echo "                    ";
            if ((($context["goarac_type"] ?? null) == $context["type"])) {
                // line 137
                echo "                    <option value=\"";
                echo $context["type"];
                echo "\" selected=\"selected\">";
                echo $context["type"];
                echo "</option>
                    ";
            } else {
                // line 139
                echo "                    <option value=\"";
                echo $context["type"];
                echo "\">";
                echo $context["type"];
                echo "</option>
                    ";
            }
            // line 141
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-goarac-image\"><span data-toggle=\"tooltip\" title=\"";
        // line 146
        echo ($context["help_goarac_image"] ?? null);
        echo "\">";
        echo ($context["entry_goarac_image"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"goarac_image\" value=\"";
        // line 148
        echo ($context["goarac_image"] ?? null);
        echo "\" placeholder=\"catalog/goarac/page.jpg or https://...\" id=\"input-goarac-image\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-goarac-page-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 152
        echo ($context["help_goarac_page_label"] ?? null);
        echo "\">";
        echo ($context["entry_goarac_page_label"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"goarac_page_label\" value=\"";
        // line 154
        echo ($context["goarac_page_label"] ?? null);
        echo "\" placeholder=\"Yasal\" id=\"input-goarac-page-label\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 158
        echo ($context["help_goarac_button"] ?? null);
        echo "\">";
        echo ($context["entry_goarac_button_label"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-5\">
                  <input type=\"text\" name=\"goarac_button_label\" value=\"";
        // line 160
        echo ($context["goarac_button_label"] ?? null);
        echo "\" placeholder=\"Button Label\" class=\"form-control\" />
                </div>
                <div class=\"col-sm-5\">
                  <input type=\"text\" name=\"goarac_button_href\" value=\"";
        // line 163
        echo ($context["goarac_button_href"] ?? null);
        echo "\" placeholder=\"Button Label\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 167
        echo ($context["help_goarac_cards"] ?? null);
        echo "\">";
        echo ($context["entry_goarac_cards"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"table-responsive\">
                    <table id=\"goarac-cards\" class=\"table table-bordered table-hover\">
                      <thead>
                        <tr>
                          <td class=\"text-left\">Card Title</td>
                          <td class=\"text-left\">Card Text</td>
                          <td class=\"text-right\"></td>
                        </tr>
                      </thead>
                      <tbody>
                        ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["goarac_cards"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 180
            echo "                        ";
            $context["card_index"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 180);
            // line 181
            echo "                        <tr id=\"goarac-card-row";
            echo ($context["card_index"] ?? null);
            echo "\">
                          <td class=\"text-left\"><input type=\"text\" name=\"goarac_cards[";
            // line 182
            echo ($context["card_index"] ?? null);
            echo "][title]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["card"], "title", [], "any", false, false, false, 182);
            echo "\" placeholder=\"";
            echo ($context["entry_goarac_card_title"] ?? null);
            echo "\" class=\"form-control\" /></td>
                          <td class=\"text-left\"><textarea name=\"goarac_cards[";
            // line 183
            echo ($context["card_index"] ?? null);
            echo "][body]\" rows=\"2\" placeholder=\"";
            echo ($context["entry_goarac_card_body"] ?? null);
            echo "\" class=\"form-control\">";
            echo twig_get_attribute($this->env, $this->source, $context["card"], "body", [], "any", false, false, false, 183);
            echo "</textarea></td>
                          <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#goarac-card-row";
            // line 184
            echo ($context["card_index"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove_card"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan=\"2\"></td>
                          <td class=\"text-right\"><button type=\"button\" onclick=\"addGoaracCard();\" data-toggle=\"tooltip\" title=\"";
        // line 191
        echo ($context["button_add_card"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-goarac-data-json\"><span data-toggle=\"tooltip\" title=\"";
        // line 199
        echo ($context["help_goarac_data_json"] ?? null);
        echo "\">";
        echo ($context["entry_goarac_data_json"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"goarac_data_json\" rows=\"6\" placeholder=\"{&quot;button_label&quot;:&quot;Araç ara&quot;}\" id=\"input-goarac-data-json\" class=\"form-control\" style=\"font-family:Menlo,Consolas,monospace;\">";
        // line 201
        echo ($context["goarac_data_json"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <fieldset>
                <legend>Go Araç Sitemap</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-goarac-sitemap-include\"><span data-toggle=\"tooltip\" title=\"";
        // line 207
        echo ($context["help_goarac_sitemap"] ?? null);
        echo "\">";
        echo ($context["entry_goarac_sitemap_include"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"goarac_sitemap_include\" id=\"input-goarac-sitemap-include\" class=\"form-control\">
                      ";
        // line 210
        if (($context["goarac_sitemap_include"] ?? null)) {
            // line 211
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 212
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 214
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 215
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 217
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-goarac-sitemap-priority\">";
        // line 221
        echo ($context["entry_goarac_sitemap_priority"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"number\" min=\"0.1\" max=\"1\" step=\"0.01\" name=\"goarac_sitemap_priority\" value=\"";
        // line 223
        echo ($context["goarac_sitemap_priority"] ?? null);
        echo "\" id=\"input-goarac-sitemap-priority\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-goarac-sitemap-changefreq\">";
        // line 227
        echo ($context["entry_goarac_sitemap_changefreq"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"goarac_sitemap_changefreq\" id=\"input-goarac-sitemap-changefreq\" class=\"form-control\">
                      ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["goarac_sitemap_changefreq_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 231
            echo "                      ";
            if ((($context["goarac_sitemap_changefreq"] ?? null) == $context["option"])) {
                // line 232
                echo "                      <option value=\"";
                echo $context["option"];
                echo "\" selected=\"selected\">";
                echo $context["option"];
                echo "</option>
                      ";
            } else {
                // line 234
                echo "                      <option value=\"";
                echo $context["option"];
                echo "\">";
                echo $context["option"];
                echo "</option>
                      ";
            }
            // line 236
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 243
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 248
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 249
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 254
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 255
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 255);
            echo "</td>
                    <td class=\"text-left\">";
            // line 256
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 257
                echo "                      <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 257);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 257);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 257);
                echo "\" /></span>
                        <input type=\"text\" name=\"information_seo_url[";
                // line 258
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 258);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 258);
                echo "]\" value=\"";
                if ((($__internal_compile_16 = (($__internal_compile_17 = ($context["information_seo_url"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 258)] ?? null) : null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 258)] ?? null) : null)) {
                    echo (($__internal_compile_18 = (($__internal_compile_19 = ($context["information_seo_url"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 258)] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 258)] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\" />
                      </div>
                      ";
                // line 260
                if ((($__internal_compile_20 = (($__internal_compile_21 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 260)] ?? null) : null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 260)] ?? null) : null)) {
                    // line 261
                    echo "                      <div class=\"text-danger\">";
                    echo (($__internal_compile_22 = (($__internal_compile_23 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 261)] ?? null) : null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 261)] ?? null) : null);
                    echo "</div>
                      ";
                }
                // line 262
                echo " 
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 263
            echo "</td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "                  </tbody>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 275
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 276
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 282
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 283
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 283);
            echo "</td>
                    <td class=\"text-left\"><select name=\"information_layout[";
            // line 284
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 284);
            echo "]\" class=\"form-control\">
                        <option value=\"\"></option>
                        ";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 287
                echo "                        ";
                if (((($__internal_compile_24 = ($context["information_layout"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 287)] ?? null) : null) && ((($__internal_compile_25 = ($context["information_layout"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 287)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 287)))) {
                    // line 288
                    echo "                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 288);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 288);
                    echo "</option>
                        ";
                } else {
                    // line 290
                    echo "                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 290);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 290);
                    echo "</option>
                        ";
                }
                // line 292
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 293
            echo "                      </select></td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        echo "                    </tbody>
                  
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
  <link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
var goaracCardRow = 0;

function addGoaracCard() {
  var html = '';
  html += '<tr id=\"goarac-card-row' + goaracCardRow + '\">';
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"goarac_cards[' + goaracCardRow + '][title]\" value=\"\" placeholder=\"";
        // line 322
        echo twig_escape_filter($this->env, ($context["entry_goarac_card_title"] ?? null), "js");
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-left\"><textarea name=\"goarac_cards[' + goaracCardRow + '][body]\" rows=\"2\" placeholder=\"";
        // line 323
        echo twig_escape_filter($this->env, ($context["entry_goarac_card_body"] ?? null), "js");
        echo "\" class=\"form-control\"></textarea></td>';
  html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#goarac-card-row' + goaracCardRow + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 324
        echo twig_escape_filter($this->env, ($context["button_remove_card"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '</tr>';

  \$('#goarac-cards tbody').append(html);
  goaracCardRow++;
}
//--></script></div>
";
        // line 331
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/information_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  916 => 331,  906 => 324,  902 => 323,  898 => 322,  870 => 296,  862 => 293,  856 => 292,  848 => 290,  840 => 288,  837 => 287,  833 => 286,  828 => 284,  824 => 283,  821 => 282,  817 => 281,  809 => 276,  805 => 275,  794 => 266,  786 => 263,  779 => 262,  773 => 261,  771 => 260,  758 => 258,  749 => 257,  745 => 256,  741 => 255,  738 => 254,  734 => 253,  727 => 249,  723 => 248,  715 => 243,  707 => 237,  701 => 236,  693 => 234,  685 => 232,  682 => 231,  678 => 230,  672 => 227,  665 => 223,  660 => 221,  654 => 217,  649 => 215,  644 => 214,  639 => 212,  634 => 211,  632 => 210,  624 => 207,  615 => 201,  608 => 199,  597 => 191,  591 => 187,  572 => 184,  564 => 183,  556 => 182,  551 => 181,  548 => 180,  531 => 179,  514 => 167,  507 => 163,  501 => 160,  494 => 158,  487 => 154,  480 => 152,  473 => 148,  466 => 146,  460 => 142,  454 => 141,  446 => 139,  438 => 137,  435 => 136,  431 => 135,  423 => 132,  414 => 128,  409 => 126,  403 => 122,  398 => 120,  393 => 119,  388 => 117,  383 => 116,  381 => 115,  375 => 112,  368 => 107,  364 => 105,  360 => 103,  358 => 102,  350 => 99,  344 => 95,  336 => 93,  331 => 92,  326 => 91,  321 => 89,  316 => 88,  314 => 87,  311 => 86,  307 => 85,  302 => 83,  296 => 79,  279 => 75,  272 => 73,  259 => 69,  252 => 67,  247 => 64,  241 => 63,  239 => 62,  229 => 61,  222 => 59,  217 => 56,  211 => 55,  209 => 54,  197 => 53,  190 => 51,  185 => 48,  179 => 47,  177 => 46,  167 => 45,  160 => 43,  154 => 41,  150 => 40,  147 => 39,  130 => 37,  126 => 36,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/information_form.twig", "");
    }
}
