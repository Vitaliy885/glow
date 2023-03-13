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

/* extension/module/ishigalleryblock.twig */
class __TwigTemplate_868e3282e539ea0c1758f68e45b5891bd9fba9ca0b4d6bb8b93724b1ba72c696 extends \Twig\Template
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
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-title-";
        // line 38
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 38);
        echo "\">";
        echo ($context["entry_heading"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 41
            echo "                  <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 41);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 41);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 41);
            echo "\" /></span>
                    <input type=\"text\" name=\"title[";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 42);
            echo "]\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 42)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_heading"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 42);
            echo "\" />
                    ";
            // line 43
            if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["error_title"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43)] ?? null) : null)) {
                // line 44
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_title"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44)] ?? null) : null);
                echo "</div>
                    ";
            }
            // line 46
            echo "                  </div> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "              </div>
           </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-subtitle-";
        // line 51
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 51);
        echo "\">";
        echo ($context["entry_subtitle"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 54
            echo "                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 54);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 54);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 54);
            echo "\" /></span>
                  <input type=\"text\" name=\"subtitle[";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55);
            echo "]\" value=\"";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["subtitle"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_subtitle"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-subtitle-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55);
            echo "\" />
                  ";
            // line 56
            if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_title"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56)] ?? null) : null)) {
                // line 57
                echo "                  <div class=\"text-danger\">";
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["error_title"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57)] ?? null) : null);
                echo "</div>
                  ";
            }
            // line 59
            echo "                </div> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "              </div>
            </div>
          <div class=\"form-group\">
\t\t  <div class=\"col-sm-6\">
            <label class=\"col-sm-4 control-label\" for=\"input-width\">";
        // line 65
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 67
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 68
        if (($context["error_width"] ?? null)) {
            // line 69
            echo "              <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
              ";
        }
        // line 71
        echo "            </div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
            <label class=\"col-sm-4 control-label\" for=\"input-height\">";
        // line 74
        echo ($context["entry_height"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 76
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 77
        if (($context["error_height"] ?? null)) {
            // line 78
            echo "              <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
              ";
        }
        // line 80
        echo "            </div>
          </div>
          </div>
\t\t  <div class=\"form-group\">
\t\t  <div class=\"col-sm-6\">
            <label class=\"col-sm-4 control-label\" for=\"input-autoplay\">";
        // line 85
        echo ($context["entry_autoplay"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
            <label class=\"switch\">
\t\t\t\t\t\t\t";
        // line 88
        if (($context["autoplay"] ?? null)) {
            // line 89
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"autoplay\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-autoplay\" />
\t\t\t\t\t\t\t";
        } else {
            // line 91
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"autoplay\" value=\"1\" class=\"primary\" id=\"input-autoplay\" />
\t\t\t\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t\t\t  <span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
            </div>
\t\t\t </div>
\t\t\t<div class=\"col-sm-6\">
            <label class=\"col-sm-4 control-label\" for=\"input-loop\">";
        // line 98
        echo ($context["entry_loop"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
          <label class=\"switch\">
\t\t\t\t\t\t\t";
        // line 101
        if (($context["loop"] ?? null)) {
            // line 102
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"loop\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-loop\" />
\t\t\t\t\t\t\t";
        } else {
            // line 104
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"loop\" value=\"1\" class=\"primary\" id=\"input-loop\" />
\t\t\t\t\t\t\t";
        }
        // line 106
        echo "\t\t\t\t\t\t  <span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
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
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 117
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 119
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 120
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 122
        echo "              </select>
            </div>
          </div>
\t\t  <br />
          <ul class=\"nav nav-tabs\" id=\"language\">
            ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 128
            echo "            <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 128);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 128);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 128);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 128);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 128);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "          </ul>
          <div class=\"tab-content\">
            ";
        // line 132
        $context["image_row"] = 0;
        // line 133
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 134
            echo "            <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 134);
            echo "\">
              <table id=\"images";
            // line 135
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 135);
            echo "\" class=\"table table-striped table-bordered table-hover\">
                <thead>
                  <tr>
                    <td class=\"text-left\">";
            // line 138
            echo ($context["entry_title"] ?? null);
            echo "</td>
                    <td class=\"text-center\">";
            // line 139
            echo ($context["entry_image"] ?? null);
            echo "</td>
                    <td class=\"text-left\">";
            // line 140
            echo ($context["entry_sort_order"] ?? null);
            echo "</td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  ";
            // line 145
            if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["ishi_images"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 145)] ?? null) : null)) {
                // line 146
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["ishi_images"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["ishi_image"]) {
                    // line 147
                    echo "                  <tr id=\"image-row";
                    echo ($context["image_row"] ?? null);
                    echo "\">
                    <td class=\"text-left\"><input type=\"text\" name=\"ishi_image[";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishi_image"], "title", [], "any", false, false, false, 148);
                    echo "\" placeholder=\"";
                    echo ($context["entry_title"] ?? null);
                    echo "\" class=\"form-control\" />
                      ";
                    // line 149
                    if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["error_banner_image"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 149)] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["image_row"] ?? null)] ?? null) : null)) {
                        // line 150
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_banner_image"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 150)] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[($context["image_row"] ?? null)] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 151
                    echo "</td>
                    <td class=\"text-center\"><a href=\"\" id=\"thumb-image";
                    // line 152
                    echo ($context["image_row"] ?? null);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishi_image"], "thumb", [], "any", false, false, false, 152);
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" /></a>
                      <input type=\"hidden\" name=\"ishi_image[";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][image]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishi_image"], "image", [], "any", false, false, false, 153);
                    echo "\" id=\"input-image";
                    echo ($context["image_row"] ?? null);
                    echo "\" /></td>
                    <td class=\"text-right\" style=\"width: 20%;\"><input type=\"text\" name=\"ishi_image[";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 154);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][sort_order]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishi_image"], "sort_order", [], "any", false, false, false, 154);
                    echo "\" placeholder=\"";
                    echo ($context["entry_sort_order"] ?? null);
                    echo "\" class=\"form-control\" /></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
                    // line 155
                    echo ($context["image_row"] ?? null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
                    // line 157
                    $context["image_row"] = (($context["image_row"] ?? null) + 1);
                    // line 158
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "                  ";
            }
            // line 160
            echo "                </tbody>
                <tfoot>
                  <tr>
                    <td colspan=\"4\"></td>
                    <td class=\"text-left \" style=\"width: 5%;\"><button type=\"button\" onclick=\"addImage('";
            // line 164
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 164);
            echo "');\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_banner_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                  </tr>
                </tfoot>
              </table>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<style>
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
<script type=\"text/javascript\"><!--
var image_row = ";
        // line 251
        echo ($context["image_row"] ?? null);
        echo ";

function addImage(language_id) {
\thtml  = '<tr id=\"image-row' + image_row + '\">';\t
  html += '  <td class=\"text-left\" style=\"width: 50%;\"><input type=\"text\" name=\"ishi_image[' + language_id + '][' + image_row + '][title]\" value=\"\" placeholder=\"";
        // line 255
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" /></td>';\t\t
\thtml += '  <td class=\"text-center\" style=\"width: 20%;\"><a href=\"\" id=\"thumb-image' + image_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 256
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"ishi_image[' + language_id + '][' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';\t
  html += '  <td class=\"text-right\" style=\"width: 20%;\"><input type=\"text\" name=\"ishi_image[' + language_id + '][' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 257
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\" style=\"width: 10%;\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row  + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 258
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#images' + language_id + ' tbody').append(html);
\t
\timage_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script> 
";
        // line 269
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ishigalleryblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 269,  626 => 258,  622 => 257,  616 => 256,  612 => 255,  605 => 251,  522 => 170,  508 => 164,  502 => 160,  499 => 159,  493 => 158,  491 => 157,  484 => 155,  474 => 154,  464 => 153,  456 => 152,  453 => 151,  447 => 150,  445 => 149,  435 => 148,  430 => 147,  425 => 146,  423 => 145,  415 => 140,  411 => 139,  407 => 138,  401 => 135,  396 => 134,  391 => 133,  389 => 132,  385 => 130,  368 => 128,  364 => 127,  357 => 122,  352 => 120,  347 => 119,  342 => 117,  337 => 116,  335 => 115,  329 => 112,  321 => 106,  317 => 104,  313 => 102,  311 => 101,  305 => 98,  298 => 93,  294 => 91,  290 => 89,  288 => 88,  282 => 85,  275 => 80,  269 => 78,  267 => 77,  261 => 76,  256 => 74,  251 => 71,  245 => 69,  243 => 68,  237 => 67,  232 => 65,  226 => 61,  219 => 59,  213 => 57,  211 => 56,  201 => 55,  192 => 54,  188 => 53,  181 => 51,  176 => 48,  169 => 46,  163 => 44,  161 => 43,  151 => 42,  142 => 41,  138 => 40,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ishigalleryblock.twig", "");
    }
}
