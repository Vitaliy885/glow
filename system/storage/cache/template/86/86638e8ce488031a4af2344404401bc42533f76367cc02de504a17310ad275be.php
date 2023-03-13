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

/* extension/module/ishifeatureblock.twig */
class __TwigTemplate_96be1ae47c34e2018253ef02241a757fa17656a979a7b3c6f57445f510c02303 extends \Twig\Template
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
            echo "          <li><a href=\"";
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
        echo "        </ul>
      </div>
    </div>
    <div class=\"container-fluid\">
      ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
      ";
        }
        // line 22
        echo "      <div class=\"panel panel-default\">
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
            echo "                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                ";
        }
        // line 35
        echo "              </div>
            </div>
            <div class=\"form-group\">
              <div class=\"col-sm-6\">
                <label class=\"col-sm-4 control-label\" for=\"input-image\">";
        // line 39
        echo ($context["entry_banner"] ?? null);
        echo "</label>
                <div class=\"col-sm-8\">
                  <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 41
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                    <input type=\"hidden\" name=\"image\" value=\"";
        // line 42
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"col-sm-6\">
                <label class=\"col-sm-4 control-label\" for=\"input-column\">";
        // line 46
        echo ($context["entry_column"] ?? null);
        echo "</label>
                <div class=\"col-sm-8\">
                  <select name=\"column\" id=\"input-column\" class=\"form-control\">
                    <option value=\"1\" ";
        // line 49
        if ((($context["column"] ?? null) == 1)) {
            echo " selected=selected ";
        }
        echo ">1</option>
                    <option value=\"2\" ";
        // line 50
        if ((($context["column"] ?? null) == 2)) {
            echo " selected=selected ";
        }
        echo ">2</option>
                    <option value=\"3\" ";
        // line 51
        if ((($context["column"] ?? null) == 3)) {
            echo " selected=selected ";
        }
        echo ">3</option>
                    <option value=\"4\" ";
        // line 52
        if ((($context["column"] ?? null) == 4)) {
            echo " selected=selected ";
        }
        echo ">4</option>
                  </select>
                </div>
              </div>
            </div>
\t\t\t<div class=\"form-group\">
\t\t\t <div class=\"col-sm-6\">
              <label class=\"col-sm-4 control-label\" for=\"input-width\">";
        // line 59
        echo ($context["entry_width"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
                <input type=\"text\" name=\"width\" value=\"";
        // line 61
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
              </div>
\t\t\t  </div>
\t\t\t  <div class=\"col-sm-6\">
              <label class=\"col-sm-4 control-label\" for=\"input-height\">";
        // line 65
        echo ($context["entry_height"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
                <input type=\"text\" name=\"height\" value=\"";
        // line 67
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
              </div>
            </div>
            </div>
\t\t\t<div class=\"form-group\">
\t\t\t <div class=\"col-sm-6\">
              <label class=\"col-sm-4 control-label\" for=\"input-showtitle\">";
        // line 73
        echo ($context["entry_showtitle"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
               <label class=\"switch\">
\t\t\t\t\t";
        // line 76
        if (($context["showtitle"] ?? null)) {
            // line 77
            echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"showtitle\" value=\"1\" class=\"primary checkbox\" checked=\"checked\" id=\"input-category-status\" />
\t\t\t\t\t";
        } else {
            // line 79
            echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"showtitle\" value=\"1\" class=\"primary checkbox\" id=\"input-showtitle\" />
\t\t\t\t\t";
        }
        // line 81
        echo "\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t</label>
              </div>
\t\t\t  </div>
\t\t\t  <div class=\"col-sm-3 show-title ";
        // line 85
        if (($context["showtitle"] ?? null)) {
            echo " show ";
        }
        echo "\">
              <label class=\"col-sm-4 control-label\" for=\"input-title\">";
        // line 86
        echo ($context["entry_title"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
\t\t\t\t";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 89
            echo "\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 89);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 89);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 89);
            echo "\" /></span>
\t\t\t\t\t\t<input type=\"text\" name=\"title[";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90);
            echo "]\" value=\"
                        ";
            // line 91
            if (($context["title"] ?? null)) {
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91)] ?? null) : null);
            }
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91);
            echo "\" />
\t\t\t\t\t</div> 
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "\t\t\t</div>
            </div>
            <div class=\"col-sm-3 show-title ";
        // line 96
        if (($context["showtitle"] ?? null)) {
            echo " show ";
        }
        echo "\">
              <label class=\"col-sm-4 control-label\" for=\"input-subtitle\">";
        // line 97
        echo ($context["entry_subtitle"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 100
            echo "          <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 100);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 100);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 100);
            echo "\" /></span>
            <input type=\"text\" name=\"subtitle[";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101);
            echo "]\" value=\"
                        ";
            // line 102
            if (($context["subtitle"] ?? null)) {
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["subtitle"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102)] ?? null) : null);
            }
            echo "\" placeholder=\"";
            echo ($context["entry_subtitle"] ?? null);
            echo "\" class=\"form-control\" id=\"input-subtitle-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102);
            echo "\" />
          </div> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "      </div>
            </div>

            </div>
         <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 110
        echo ($context["entry_status"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <select name=\"status\" id=\"input-status\" class=\"form-control\">
              ";
        // line 113
        if (($context["status"] ?? null)) {
            // line 114
            echo "              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\">";
            // line 115
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        } else {
            // line 117
            echo "              <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\" selected=\"selected\">";
            // line 118
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        }
        // line 120
        echo "            </select>
          </div>
        </div>
        <div class=\"tab-pane\">
          <ul class=\"nav nav-tabs\" id=\"language\">
            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 126
            echo "            <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 126);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 126);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 126);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 126);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 126);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "          </ul>
          <div class=\"tab-content\">
           ";
        // line 130
        $context["service_row"] = 0;
        // line 131
        echo "           ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 132
            echo "           <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 132);
            echo "\">
            <table id=\"images";
            // line 133
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 133);
            echo "\" class=\"table table-striped table-bordered table-hover\">
             <thead>
               <tr>
                 <td class=\"text-center\">";
            // line 136
            echo ($context["entry_image"] ?? null);
            echo "</td>
                 <td class=\"text-left\">";
            // line 137
            echo ($context["entry_service_title"] ?? null);
            echo "</td>
                 <td class=\"text-left\">";
            // line 138
            echo ($context["entry_description"] ?? null);
            echo "</td>
                 <td></td>
               </tr>
             </thead>
             <tbody>
               ";
            // line 143
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["services"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 143)] ?? null) : null)) {
                // line 144
                echo "               ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["services"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 144)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                    // line 145
                    echo "               <tr id=\"service-row";
                    echo ($context["service_row"] ?? null);
                    echo "\">
                <td class=\"text-center\"><a href=\"\" id=\"thumb-image";
                    // line 146
                    echo ($context["service_row"] ?? null);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["service"], "thumb", [], "any", false, false, false, 146);
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" /></a>
                  <input type=\"hidden\" name=\"service[";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 147);
                    echo "][";
                    echo ($context["service_row"] ?? null);
                    echo "][image]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 147);
                    echo "\" id=\"input-image";
                    echo ($context["service_row"] ?? null);
                    echo "\" /></td>
                  <td class=\"text-left\"><input type=\"text\" name=\"service[";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148);
                    echo "][";
                    echo ($context["service_row"] ?? null);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 148);
                    echo "\" placeholder=\"";
                    echo ($context["entry_service_title"] ?? null);
                    echo "\" class=\"form-control\" />
                    ";
                    // line 149
                    if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["error_service"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 149)] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["service_row"] ?? null)] ?? null) : null)) {
                        // line 150
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_service"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 150)] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["service_row"] ?? null)] ?? null) : null);
                        echo "</div>
                  ";
                    }
                    // line 151
                    echo "</td>
                  <td class=\"text-left\"><input type=\"text\" name=\"service[";
                    // line 152
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152);
                    echo "][";
                    echo ($context["service_row"] ?? null);
                    echo "][description]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 152);
                    echo "\" placeholder=\"";
                    echo ($context["entry_link"] ?? null);
                    echo "\" class=\"form-control\" /></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#service-row";
                    // line 153
                    echo ($context["service_row"] ?? null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                </tr>
                ";
                    // line 155
                    $context["service_row"] = (($context["service_row"] ?? null) + 1);
                    // line 156
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo "                ";
            }
            // line 158
            echo "              </tbody>
              <tfoot>
               <tr>
                <td colspan=\"3\"></td>
                <td class=\"text-left\"><button type=\"button\" onclick=\"addService('";
            // line 162
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 162);
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
        // line 168
        echo "      </div>
    </div>
  </form>
</div>
</div>
</div>
<style>
/* The switch - the box around the slider */
.show-title{
\tdisplay:none;
}
.show{
\tdisplay:block;
}
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
\$(\".checkbox\").change(function() {
    if(this.checked) {
       \$('.show-title').attr(\"style\", \"display: block !important\");
    }else{
\t\t\$('.show-title').attr(\"style\", \"display: none !important\");
\t}
});

  var service_row = ";
        // line 263
        echo ($context["service_row"] ?? null);
        echo ";

  function addService(language_id) {
   html  = '<tr id=\"service-row' + service_row + '\">';
   html += '  <td class=\"text-center\"><a href=\"\" id=\"thumb-image' + service_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 267
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"service[' + language_id + '][' + service_row + '][image]\" value=\"\" id=\"input-image' + service_row + '\" /></td>';
   html += '  <td class=\"text-left\"><input type=\"text\" name=\"service[' + language_id + '][' + service_row + '][title]\" value=\"\" placeholder=\"";
        // line 268
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" /></td>';\t
   html += '  <td class=\"text-left\" style=\"width: 30%;\"><input type=\"text\" name=\"service[' + language_id + '][' + service_row + '][description]\" value=\"\" placeholder=\"";
        // line 269
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control\" /></td>';\t
   html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#service-row' + service_row  + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 270
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
   html += '</tr>';
   
   \$('#images' + language_id + ' tbody').append(html);
   
   service_row++;
 }
 //--></script>
  <script src=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.js\" type=\"text/javascript\"></script>
  <link href=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.css\" type=\"text/css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\"><!--
    \$('#language a:first').tab('show');

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
  //--></script></div>
";
        // line 307
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ishifeatureblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  686 => 307,  646 => 270,  642 => 269,  638 => 268,  632 => 267,  625 => 263,  528 => 168,  514 => 162,  508 => 158,  505 => 157,  499 => 156,  497 => 155,  490 => 153,  480 => 152,  477 => 151,  471 => 150,  469 => 149,  459 => 148,  449 => 147,  441 => 146,  436 => 145,  431 => 144,  429 => 143,  421 => 138,  417 => 137,  413 => 136,  407 => 133,  402 => 132,  397 => 131,  395 => 130,  391 => 128,  374 => 126,  370 => 125,  363 => 120,  358 => 118,  353 => 117,  348 => 115,  343 => 114,  341 => 113,  335 => 110,  328 => 105,  313 => 102,  309 => 101,  300 => 100,  296 => 99,  291 => 97,  285 => 96,  281 => 94,  266 => 91,  262 => 90,  253 => 89,  249 => 88,  244 => 86,  238 => 85,  232 => 81,  228 => 79,  224 => 77,  222 => 76,  216 => 73,  205 => 67,  200 => 65,  191 => 61,  186 => 59,  174 => 52,  168 => 51,  162 => 50,  156 => 49,  150 => 46,  143 => 42,  137 => 41,  132 => 39,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ishifeatureblock.twig", "");
    }
}
