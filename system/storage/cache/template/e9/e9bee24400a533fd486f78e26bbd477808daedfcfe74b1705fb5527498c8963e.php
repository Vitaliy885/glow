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

/* extension/module/ishiinstagramblock.twig */
class __TwigTemplate_7cdb518ed0b2cb9e8e945aa18611fe94ad7b32c82cb8c3042bec640a68496061 extends \Twig\Template
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
             <div class=\"col-sm-12\">
              <label class=\"col-sm-2 control-label\" for=\"input-title\">";
        // line 39
        echo ($context["entry_title"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
               ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 42
            echo "               <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 42);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 42);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 42);
            echo "\" /></span>
                 <input type=\"text\" name=\"title[";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            echo "]\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            echo "\" />
               </div> 
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "             </div>
           </div>
         </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 50
        echo ($context["entry_username"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"username\" value=\"";
        // line 52
        echo ($context["username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 56
        echo ($context["entry_userid"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"userid\" value=\"";
        // line 58
        echo ($context["userid"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_userid"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 62
        echo ($context["entry_accesstoken"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"accesstoken\" value=\"";
        // line 64
        echo ($context["accesstoken"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_accesstoken"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sortby\">";
        // line 68
        echo ($context["entry_sortby"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"sortby\" id=\"input-sortby\" class=\"form-control\">
                <option value=\"most-recent\" ";
        // line 71
        if ((($context["sortby"] ?? null) == "most-recent")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["sortby_mostrecent"] ?? null);
        echo "</option>
                <option value=\"least-recent\" ";
        // line 72
        if ((($context["sortby"] ?? null) == "least-recent")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["sortby_leastrecent"] ?? null);
        echo "</option>
                <option value=\"most-liked\" ";
        // line 73
        if ((($context["sortby"] ?? null) == "most-liked")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["sortby_mostliked"] ?? null);
        echo "</option>
                <option value=\"least-liked\" ";
        // line 74
        if ((($context["sortby"] ?? null) == "least-liked")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["sortby_leastliked"] ?? null);
        echo "</option>
                <option value=\"most-commented\" ";
        // line 75
        if ((($context["sortby"] ?? null) == "most-commented")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["sortby_mostcommented"] ?? null);
        echo "</option>
                <option value=\"least-commented\" ";
        // line 76
        if ((($context["sortby"] ?? null) == "least-commented")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["sortby_leastcommented"] ?? null);
        echo "</option>
                <option value=\"random\" ";
        // line 77
        if ((($context["sortby"] ?? null) == "random")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["sortby_random"] ?? null);
        echo "</option>
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 82
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 85
        if (($context["status"] ?? null)) {
            // line 86
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 87
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 89
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 90
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 92
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 100
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/ishiinstagramblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 100,  307 => 92,  302 => 90,  297 => 89,  292 => 87,  287 => 86,  285 => 85,  279 => 82,  267 => 77,  259 => 76,  251 => 75,  243 => 74,  235 => 73,  227 => 72,  219 => 71,  213 => 68,  204 => 64,  199 => 62,  190 => 58,  185 => 56,  176 => 52,  171 => 50,  165 => 46,  150 => 43,  141 => 42,  137 => 41,  132 => 39,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ishiinstagramblock.twig", "");
    }
}
