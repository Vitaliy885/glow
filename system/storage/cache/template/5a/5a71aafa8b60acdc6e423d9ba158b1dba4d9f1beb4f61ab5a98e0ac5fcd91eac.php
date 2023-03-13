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

/* extension/module/ishitestimonialsblock.twig */
class __TwigTemplate_2477051d74743dfab91691d2808c4f8c90847cfedc8fe99d4ae5a941f9daf393 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
\t\t\t<div class=\"tab-pane\" id=\"tab-design\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-testimonial\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_testinmonial"] ?? null);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-general\">
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 36
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t  <input type=\"text\" name=\"name\" value=\"";
        // line 38
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t  ";
        // line 39
        if (($context["error_name"] ?? null)) {
            // line 40
            echo "\t\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t\t  ";
        }
        // line 42
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-parallax\">";
        // line 46
        echo ($context["entry_parallax"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 49
        if (($context["parallax"] ?? null)) {
            // line 50
            echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"parallax\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-parallax\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"parallax\" value=\"1\" class=\"primary\" id=\"input-parallax\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 54
        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-bgcolor\">";
        // line 59
        echo ($context["entry_bgcolor"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bgcolor\" class=\"form-control color\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 61
        echo ($context["bgcolor"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-autoplay\">";
        // line 66
        echo ($context["entry_autoplay"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t  \t<label class=\"switch\">
\t\t\t\t\t\t\t\t";
        // line 69
        if (($context["autoplay"] ?? null)) {
            // line 70
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"autoplay\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-autoplay\" />
\t\t\t\t\t\t\t\t";
        } else {
            // line 72
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"autoplay\" value=\"1\" class=\"primary\" id=\"input-autoplay\" />
\t\t\t\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 79
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t  <select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t";
        // line 82
        if (($context["status"] ?? null)) {
            // line 83
            echo "\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t<option value=\"0\">";
            // line 84
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        } else {
            // line 86
            echo "\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 87
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t  </select>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"tab-testimonial\">
\t\t\t\t\t<div class=\"tab-pane\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language\">
\t\t\t\t\t\t  ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 97
            echo "\t\t\t\t\t\t  <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 97);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 97);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 97);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 97);
            echo "</a></li>
\t\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t  ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 102
            echo "\t\t\t\t\t\t  <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102);
            echo "\">\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t              <label class=\"col-sm-2 control-label\" for=\"input-title-";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104);
            echo "\">";
            echo ($context["entry_title"] ?? null);
            echo "</label>
\t\t\t\t              <div class=\"col-sm-10\">
\t\t\t\t                ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 107
                echo "\t\t\t\t                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 107);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 107);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 107);
                echo "\" /></span>
\t\t\t\t                  <input type=\"text\" name=\"title[";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108);
                echo "]\" value=\"";
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_title"] ?? null);
                echo "\" class=\"form-control\" required id=\"input-title-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108);
                echo "\" />
\t\t\t\t                  ";
                // line 109
                if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["error_title"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 109)] ?? null) : null)) {
                    // line 110
                    echo "\t\t\t\t                  <div class=\"text-danger\">";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_title"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110)] ?? null) : null);
                    echo "</div>
\t\t\t\t                  ";
                }
                // line 112
                echo "\t\t\t\t                </div> 
\t\t\t\t                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "\t\t\t\t              </div>
\t\t\t\t            </div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked countul\" id=\"testimonialtab\">
\t\t\t\t\t\t\t\t\t\t";
            // line 119
            $context["testimonial_row"] = 0;
            // line 120
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["ishi_testimonials"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 120)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ishi_testimonial"]) {
                // line 121
                echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"countli\"><a href=\"#tab-singletestimonial";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121);
                echo "lan";
                echo ($context["testimonial_row"] ?? null);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-singletestimonial";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121);
                echo "lan";
                echo ($context["testimonial_row"] ?? null);
                echo "\\']').parent().remove(); \$('#tab-singletestimonial";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121);
                echo "lan";
                echo ($context["testimonial_row"] ?? null);
                echo "').remove(); \$('#testimonialtab a:first').tab('show');\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "username", [], "any", false, false, false, 121);
                echo " </a></li>
\t\t\t\t\t\t\t\t\t\t";
                // line 122
                $context["testimonial_row"] = (($context["testimonial_row"] ?? null) + 1);
                // line 123
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "\t\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-block\" onclick=\"addtestimonial(";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 124);
            echo ");\"><i class=\"fa fa-plus-circle\"></i> ";
            echo ($context["entry_addtestimonial"] ?? null);
            echo " </button></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"ishi_addtestimonial\">
\t\t\t\t\t\t\t\t";
            // line 129
            $context["testimonial_row"] = 0;
            // line 130
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["ishi_testimonials"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 130)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ishi_testimonial"]) {
                // line 131
                echo "\t\t\t\t\t\t\t\t <div class=\"tab-pane\" id=\"tab-singletestimonial";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 131);
                echo "lan";
                echo ($context["testimonial_row"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 133);
                echo ($context["testimonial_row"] ?? null);
                echo "\">";
                echo ($context["entry_image"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 135);
                echo ($context["testimonial_row"] ?? null);
                echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "thumb", [], "any", false, false, false, 135);
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "placeholder", [], "any", false, false, false, 135);
                echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ishitestimonial[";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 136);
                echo "][";
                echo ($context["testimonial_row"] ?? null);
                echo "][image]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "image", [], "any", false, false, false, 136);
                echo "\" id=\"input-image-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 136);
                echo ($context["testimonial_row"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-description";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 140);
                echo "-";
                echo ($context["testimonial_row"] ?? null);
                echo "\">";
                echo ($context["entry_description"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<textarea name=\"ishitestimonial[";
                // line 142
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 142);
                echo "][";
                echo ($context["testimonial_row"] ?? null);
                echo "][description]\" placeholder=\"";
                echo ($context["entry_description"] ?? null);
                echo "\" rows=\"4\" id=\"input-description";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 142);
                echo "-";
                echo ($context["testimonial_row"] ?? null);
                echo "\" data-toggle=\"summernote\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "description", [], "any", false, false, false, 142);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-username-";
                // line 146
                echo ($context["testimonial_row"] ?? null);
                echo "\">";
                echo ($context["entry_username"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"ishitestimonial[";
                // line 148
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148);
                echo "][";
                echo ($context["testimonial_row"] ?? null);
                echo "][username]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "username", [], "any", false, false, false, 148);
                echo "\" placeholder=\"";
                echo ($context["entry_username"] ?? null);
                echo "\" class=\"form-control\" id=\"input-username-";
                echo ($context["testimonial_row"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-designation-";
                // line 152
                echo ($context["testimonial_row"] ?? null);
                echo "\">";
                echo ($context["entry_designation"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"ishitestimonial[";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 154);
                echo "][";
                echo ($context["testimonial_row"] ?? null);
                echo "][designation]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "designation", [], "any", false, false, false, 154);
                echo "\" placeholder=\"";
                echo ($context["entry_designation"] ?? null);
                echo "\" class=\"form-control\" id=\"input-designation-";
                echo ($context["testimonial_row"] ?? null);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t ";
                // line 158
                $context["testimonial_row"] = (($context["testimonial_row"] ?? null) + 1);
                // line 159
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
        </form>
      </div>
    </div>
\t  <style>
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: \"\";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}
input.default:checked + .slider {
  background-color: #444;
}
input.primary:checked + .slider {
  background-color: #2196F3;
}
input.success:checked + .slider {
  background-color: #8bc34a;
}
input.info:checked + .slider {
  background-color: #3de0f5;
}
input.warning:checked + .slider {
  background-color: #FFC107;
}
input.danger:checked + .slider {
  background-color: #f44336;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
  </style>
<script type=\"text/javascript\">

var testimonial_row = \$(\".countli\").length;
function addtestimonial(language_id) {
\t\thtml  = '<div class=\"tab-pane\" id=\"tab-singletestimonial'+ language_id +'lan'+ testimonial_row +'\">';
\t\t\t\t\t\t\t\t
\t\thtml  += '<div class=\"form-group\"> <label class=\"col-sm-2 control-label\" for=\"thumb-image'+ language_id +'-'+ testimonial_row +'\">";
        // line 253
        echo ($context["entry_testimonial_image"] ?? null);
        echo "</label> <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image'+ language_id +'-'+ testimonial_row +'\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        echo ($context["testimonial_thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["testimonial_placeholder"] ?? null);
        echo "\"/></a><input type=\"hidden\" name=\"ishitestimonial['+ language_id +']['+ testimonial_row +'][image]\" value=\"";
        echo ($context["testimonial_image"] ?? null);
        echo "\" id=\"input-image'+ language_id +'-'+ testimonial_row +'\" /></div></div>';
\t\t
\t\thtml  += '<div class=\"form-group\">';
        html  += '<label class=\"col-sm-2 control-label\" for=\"input-description'+ language_id +'-'+ testimonial_row +'\">";
        // line 256
        echo ($context["entry_description"] ?? null);
        echo "</label>';
        html  += '<div class=\"col-sm-10\">';
        html  += '<textarea name=\"ishitestimonial['+ language_id +']['+ testimonial_row +'][description]\" placeholder=\"";
        // line 258
        echo ($context["entry_description"] ?? null);
        echo "\" rows=\"4\" id=\"input-description'+ language_id +'-'+ testimonial_row +'\" data-toggle=\"summernote\" class=\"form-control\"></textarea>';
        html  += '</div>';
        html  += '</div>';
\t\t
\t\thtml  += '<div class=\"form-group\">';
\t\thtml  += '<label class=\"col-sm-2 control-label\" for=\"input-username'+ language_id +'-'+ testimonial_row +'\">";
        // line 263
        echo ($context["entry_username"] ?? null);
        echo "</label>';
\t\thtml  += '<div class=\"col-sm-10\">';
\t\thtml  += '<input type=\"text\" name=\"ishitestimonial['+ language_id +']['+ testimonial_row +'][username]\" placeholder=\"";
        // line 265
        echo ($context["entry_username"] ?? null);
        echo "\" class=\"form-control\"/>';
\t\thtml  += '</div>';
\t\thtml  += '</div>';
\t\t
\t\thtml  += '<div class=\"form-group\">';
\t\thtml  += '<label class=\"col-sm-2 control-label\" for=\"input-designation'+ language_id +'-'+ testimonial_row +'\">";
        // line 270
        echo ($context["entry_designation"] ?? null);
        echo "</label>';
\t\thtml  += '<div class=\"col-sm-10\">';
\t\thtml  += '<input type=\"text\" name=\"ishitestimonial['+ language_id +']['+ testimonial_row +'][designation]\" value=\"\" placeholder=\"";
        // line 272
        echo ($context["entry_designation"] ?? null);
        echo "\" class=\"form-control\"/>';\t\t
\t\thtml  += '</div>';
\t\thtml  += '</div>';
\t\t
\t\t\$('#tab-testimonial #language'+ language_id +' #ishi_addtestimonial').append(html);

\t\t\$('#language'+ language_id +' #testimonialtab > li:last-child').before('<li><a href=\"#tab-singletestimonial'+ language_id +'lan' + testimonial_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#testimonialtab a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-singletestimonial'+ language_id +'lan' + testimonial_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-singletestimonial'+ language_id +'lan' + testimonial_row + '\\').remove();\"></i> ";
        // line 278
        echo ($context["entry_testinmonial"] ?? null);
        echo " </li>');
\t\t 
\t\t\$('#language'+ language_id +' #testimonialtab a[href=\\'#tab-singletestimonial'+ language_id +'lan' + testimonial_row + '\\']').tab('show');

\t\ttestimonial_row++;
\t}
";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 285
            echo "\tvar ln = '";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 285);
            echo "' + ' a:first';
\t
\t\$('#language' + ln).tab('show');
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "</script>
<script src=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.js\" type=\"text/javascript\"></script>
\t<link href=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.css\" type=\"text/css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script>
<script type=\"text/javascript\">
\$(document).ready( function() {
      \$('.color').each( function() {
        \$(this).minicolors({
          control: \$(this).attr('data-control') || 'hue',
          defaultValue: \$(this).attr('data-defaultValue') || '',
          format: \$(this).attr('data-format') || 'hex',
          keywords: \$(this).attr('data-keywords') || '',
          inline: \$(this).attr('data-inline') === 'true',
          letterCase: \$(this).attr('data-letterCase') || 'lowercase',
          opacity: \$(this).attr('data-opacity'),
          position: \$(this).attr('data-position') || 'bottom',
          swatches: \$(this).attr('data-swatches') ? \$(this).attr('data-swatches').split('|') : [],
          change: function(value, opacity) {
            if( !value ) return;
            if( opacity ) value += ', ' + opacity;
            if( typeof console === 'object' ) {
              console.log(value);
            }
          },
          theme: 'bootstrap',
        });
      });
    });
</script>
</div>
";
        // line 325
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ishitestimonialsblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  709 => 325,  671 => 289,  660 => 285,  656 => 284,  647 => 278,  638 => 272,  633 => 270,  625 => 265,  620 => 263,  612 => 258,  607 => 256,  595 => 253,  505 => 165,  495 => 160,  489 => 159,  487 => 158,  472 => 154,  465 => 152,  450 => 148,  443 => 146,  426 => 142,  417 => 140,  403 => 136,  394 => 135,  386 => 133,  378 => 131,  373 => 130,  371 => 129,  360 => 124,  354 => 123,  352 => 122,  335 => 121,  330 => 120,  328 => 119,  321 => 114,  314 => 112,  308 => 110,  306 => 109,  296 => 108,  287 => 107,  283 => 106,  276 => 104,  270 => 102,  266 => 101,  262 => 99,  245 => 97,  241 => 96,  232 => 89,  227 => 87,  222 => 86,  217 => 84,  212 => 83,  210 => 82,  204 => 79,  197 => 74,  193 => 72,  189 => 70,  187 => 69,  181 => 66,  173 => 61,  168 => 59,  161 => 54,  157 => 52,  153 => 50,  151 => 49,  145 => 46,  139 => 42,  133 => 40,  131 => 39,  125 => 38,  120 => 36,  112 => 31,  108 => 30,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ishitestimonialsblock.twig", "");
    }
}
