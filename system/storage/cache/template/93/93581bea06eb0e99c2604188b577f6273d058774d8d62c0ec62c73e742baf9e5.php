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

/* extension/module/blogger.twig */
class __TwigTemplate_e07acd814e8f7cca5994be4d1d76f301683342cbeb216e5e86277d48879c4169 extends \Twig\Template
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
        echo "      ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "      <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
      ";
        }
        // line 27
        echo "      <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i>";
        echo ($context["text_view_list"] ?? null);
        echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>   
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 32
        echo ($context["text_edit"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <form action=\"";
        // line 35
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blogger\" class=\"form-horizontal\">
            <input type=\"hidden\" name=\"module_id\" value=\"";
        // line 36
        echo ($context["module_id"] ?? null);
        echo "\" />
            <div class=\"form-group\">
              <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 38
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 40
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                ";
        // line 41
        if (($context["error_name"] ?? null)) {
            echo " 
                <div class=\"text-danger\">";
            // line 42
            echo ($context["error_name"] ?? null);
            echo "</div>
                ";
        }
        // line 44
        echo "              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-3 control-label\" for=\"input-title-";
        // line 47
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 47);
        echo "\">";
        echo ($context["entry_title"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 50
            echo "                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 50);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 50);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 50);
            echo "\" /></span>
                  <input type=\"text\" name=\"title[";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "]\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "\" />
                  ";
            // line 52
            if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["error_title"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 52)] ?? null) : null)) {
                // line 53
                echo "                  <div class=\"text-danger\">";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_title"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null);
                echo "</div>
                  ";
            }
            // line 55
            echo "                </div> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-3 control-label\" for=\"input-subtitle-";
        // line 60
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 60);
        echo "\">";
        echo ($context["entry_subtitle"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 63
            echo "                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 63);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 63);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 63);
            echo "\" /></span>
                  <input type=\"text\" name=\"subtitle[";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 64);
            echo "]\" value=\"";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["subtitle"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 64)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_subtitle"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-subtitle-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 64);
            echo "\" />
                  ";
            // line 65
            if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_title"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65)] ?? null) : null)) {
                // line 66
                echo "                  <div class=\"text-danger\">";
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["error_title"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66)] ?? null) : null);
                echo "</div>
                  ";
            }
            // line 68
            echo "                </div> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "              </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-bg_image\">";
        // line 73
        echo ($context["entry_banners"] ?? null);
        echo "</label>
                <div class=\"col-sm-8\">
                  <a href=\"\" id=\"bg_thumb-bg_image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 75
        echo ($context["bg_thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"bg_image\" value=\"";
        // line 76
        echo ($context["bg_image"] ?? null);
        echo "\" id=\"input-bg_image\" />
                </div>
            </div>
          <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-bgcolor\">";
        // line 80
        echo ($context["entry_bgcolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-8\">
                  <input type=\"text\" name=\"bgcolor\" class=\"form-control color\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 82
        echo ($context["bgcolor"] ?? null);
        echo "\">
                </div>
          </div>
            <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-image\">";
        // line 86
        echo ($context["entry_banner"] ?? null);
        echo "</label>
                  <div class=\"col-sm-8\">
                    <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 88
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                      <input type=\"hidden\" name=\"image\" value=\"";
        // line 89
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
                  </div>
              </div>
            <div class=\"form-group\">
              <label class=\"col-sm-3 control-label\" for=\"input-link\">";
        // line 93
        echo ($context["entry_videolink"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
                <input type=\"text\" name=\"videolink\" value=\"";
        // line 95
        echo ($context["videolink"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_videolink"] ?? null);
        echo "\" class=\"form-control\" id=\"input-videolink\"/>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 99
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
                <select name=\"status\" id=\"input-status\" class=\"form-control\">
                  ";
        // line 102
        if (($context["status"] ?? null)) {
            echo " 
                  <option value=\"1\" selected=\"selected\">";
            // line 103
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\">";
            // line 104
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 105
            echo " 
                  <option value=\"1\">";
            // line 106
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 107
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 109
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-3 control-label\" for=\"input-width\"><span data-toggle=\"tooltip\" title=\"";
        // line 113
        echo ($context["help_image"] ?? null);
        echo "\">";
        echo ($context["entry_image_size"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-4\">
                <input type=\"text\" name=\"width\" value=\"";
        // line 115
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                ";
        // line 116
        if (($context["error_width"] ?? null)) {
            echo " 
                <div class=\"text-danger\">";
            // line 117
            echo ($context["error_width"] ?? null);
            echo "</div>
                ";
        }
        // line 118
        echo " 
              </div>
              <div class=\"col-sm-4\">
                <input type=\"text\" name=\"height\" value=\"";
        // line 121
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                ";
        // line 122
        if (($context["error_height"] ?? null)) {
            echo " 
                <div class=\"text-danger\">";
            // line 123
            echo ($context["error_height"] ?? null);
            echo "</div>
                ";
        }
        // line 124
        echo " 
              </div>
            </div>
            <div class=\"form-group\">
              <div class=\"col-sm-6\">
                <label class=\"col-sm-6 control-label\" for=\"input-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 129
        echo ($context["help_limit"] ?? null);
        echo "\">";
        echo ($context["entry_limit"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-6\">
                  <input type=\"text\" name=\"limit\" value=\"";
        // line 131
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"col-sm-6\">
                <label class=\"col-sm-6 control-label\" for=\"input-char-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 135
        echo ($context["help_char_limit"] ?? null);
        echo "\">";
        echo ($context["entry_char_limit"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-6\">
                  <input type=\"text\" name=\"char_limit\" value=\"";
        // line 137
        echo ($context["char_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_char_limit"] ?? null);
        echo "\" id=\"input-char-limit\" class=\"form-control\" />
                </div>
              </div>
            </div>
            <div class=\"form-group\">
              <div class=\"col-sm-6\">
                <label class=\"col-sm-6 control-label\" for=\"input-desc\">";
        // line 143
        echo ($context["entry_desc"] ?? null);
        echo "</label>
                <div class=\"col-sm-6\">
                 <label class=\"switch\">
                   ";
        // line 146
        if (($context["desc"] ?? null)) {
            // line 147
            echo "                   <input type=\"checkbox\" name=\"desc\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-desc\" />
                   ";
        } else {
            // line 149
            echo "                   <input type=\"checkbox\" name=\"desc\" value=\"1\" class=\"primary\" id=\"input-desc\" />
                   ";
        }
        // line 151
        echo "                   <span class=\"slider round\"></span>
                 </label>
               </div>
              </div>
              <div class=\"col-sm-6\">
                <label class=\"col-sm-6 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 156
        echo ($context["help_allow_comments"] ?? null);
        echo "\">";
        echo ($context["entry_allow_comments"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-6\">
                  <label class=\"switch\">
                    ";
        // line 159
        if (($context["comments"] ?? null)) {
            // line 160
            echo "                    <input type=\"checkbox\" name=\"comments\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-comments\" />
                    ";
        } else {
            // line 162
            echo "                    <input type=\"checkbox\" name=\"comments\" value=\"1\" class=\"primary\" id=\"input-comments\" />
                    ";
        }
        // line 164
        echo "                    <span class=\"slider round\"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class=\"form-group\">
              <div class=\"col-sm-6\">
                <label class=\"col-sm-6 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 171
        echo ($context["help_login_required"] ?? null);
        echo "\">";
        echo ($context["entry_login_required"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-6\">
                 <label class=\"switch\">
                   ";
        // line 174
        if (($context["login"] ?? null)) {
            // line 175
            echo "                   <input type=\"checkbox\" name=\"login\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-login\" />
                   ";
        } else {
            // line 177
            echo "                   <input type=\"checkbox\" name=\"login\" value=\"1\" class=\"primary\" id=\"input-login\" />
                   ";
        }
        // line 179
        echo "                   <span class=\"slider round\"></span>
                 </label>
                  </div>
              </div>
              <div class=\"col-sm-6\">
                 <label class=\"col-sm-6 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 184
        echo ($context["help_auto_approve"] ?? null);
        echo "\">";
        echo ($context["entry_auto_approve"] ?? null);
        echo "</span></label>
                 <div class=\"col-sm-6\">
                   <label class=\"switch\">
                     ";
        // line 187
        if (($context["auto_approve"] ?? null)) {
            // line 188
            echo "                     <input type=\"checkbox\" name=\"auto_approve\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-auto_approve\" />
                     ";
        } else {
            // line 190
            echo "                     <input type=\"checkbox\" name=\"auto_approve\" value=\"1\" class=\"primary\" id=\"input-auto_approve\" />
                     ";
        }
        // line 192
        echo "                     <span class=\"slider round\"></span>
                   </label>
                 </div>
              </div>
            </div>
      <table class=\"table table-striped table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
        // line 200
        echo ($context["column_title"] ?? null);
        echo "</td>
            <td class=\"text-left\">";
        // line 201
        echo ($context["column_status"] ?? null);
        echo "</td>
            <td class=\"text-right\">";
        // line 202
        echo ($context["column_comments"] ?? null);
        echo "</td>
            <td class=\"text-right\">";
        // line 203
        echo ($context["column_date_added"] ?? null);
        echo "</td>
            <td class=\"text-right\">";
        // line 204
        echo ($context["column_action"] ?? null);
        echo "</td>
          </tr>
        </thead>
        ";
        // line 207
        if (($context["blogger_entries"] ?? null)) {
            echo " 
        <tbody>
          ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blogger_entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                echo " 
          <tr>
            <td class=\"text-left\">";
                // line 211
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["entry"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["title"] ?? null) : null);
                echo "</td>
            <td class=\"text-left\">";
                // line 212
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["entry"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["status"] ?? null) : null);
                echo "</td>
            <td class=\"text-right\">";
                // line 213
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["entry"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["total_comments"] ?? null) : null);
                echo "</td>
            <td class=\"text-right\">";
                // line 214
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["entry"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["date_added"] ?? null) : null);
                echo "</td>
            <td class=\"text-right\">
              <a onclick=\"confirm('";
                // line 216
                echo ($context["text_confirm"] ?? null);
                echo "') ? location.href='";
                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["entry"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["delete"] ?? null) : null);
                echo "' : false;\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
              <a href=\"";
                // line 217
                echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["entry"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["comments"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_comments"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a>
              <a href=\"";
                // line 218
                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["entry"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["edit"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
            </td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo " 
        </tbody>
        ";
        }
        // line 223
        echo " 
        <tfoot>
          ";
        // line 225
        if (($context["add_blog"] ?? null)) {
            echo " 
          <tr>
            <td class=\"text-right\" colspan=\"5\"><button type=\"button\" onclick=\"location = '";
            // line 227
            echo ($context["add_blog"] ?? null);
            echo "';\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_add_blog"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
          </tr>
          ";
        } else {
            // line 229
            echo " 
          <tr>
            <td class=\"text-center\" colspan=\"5\">";
            // line 231
            echo ($context["text_save_module"] ?? null);
            echo "</td>
          </tr>
          ";
        }
        // line 233
        echo " 
        </tfoot>
      </table>
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
  \$('#language a:first').tab('show');
  //--></script>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
    
   <script src=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.js\" type=\"text/javascript\"></script>
\t<link href=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.css\" type=\"text/css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
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
  ";
        // line 355
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  770 => 355,  646 => 233,  640 => 231,  636 => 229,  628 => 227,  623 => 225,  619 => 223,  614 => 221,  602 => 218,  596 => 217,  588 => 216,  583 => 214,  579 => 213,  575 => 212,  571 => 211,  564 => 209,  559 => 207,  553 => 204,  549 => 203,  545 => 202,  541 => 201,  537 => 200,  527 => 192,  523 => 190,  519 => 188,  517 => 187,  509 => 184,  502 => 179,  498 => 177,  494 => 175,  492 => 174,  484 => 171,  475 => 164,  471 => 162,  467 => 160,  465 => 159,  457 => 156,  450 => 151,  446 => 149,  442 => 147,  440 => 146,  434 => 143,  423 => 137,  416 => 135,  407 => 131,  400 => 129,  393 => 124,  388 => 123,  384 => 122,  378 => 121,  373 => 118,  368 => 117,  364 => 116,  358 => 115,  351 => 113,  345 => 109,  340 => 107,  336 => 106,  333 => 105,  328 => 104,  324 => 103,  320 => 102,  314 => 99,  305 => 95,  300 => 93,  293 => 89,  287 => 88,  282 => 86,  275 => 82,  270 => 80,  263 => 76,  257 => 75,  252 => 73,  247 => 70,  240 => 68,  234 => 66,  232 => 65,  222 => 64,  213 => 63,  209 => 62,  202 => 60,  197 => 57,  190 => 55,  184 => 53,  182 => 52,  172 => 51,  163 => 50,  159 => 49,  152 => 47,  147 => 44,  142 => 42,  138 => 41,  132 => 40,  127 => 38,  122 => 36,  118 => 35,  112 => 32,  103 => 27,  95 => 23,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/blogger.twig", "");
    }
}
