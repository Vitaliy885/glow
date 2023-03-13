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

/* extension/module/blogger/list.twig */
class __TwigTemplate_899cc735c595a04437a4e0f1b1b2051817150c4b6b3395632f60f1cac272d7a7 extends \Twig\Template
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
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
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
        <form action=\"";
        // line 32
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blogger\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">
                    ";
        // line 39
        if ((($context["sort"] ?? null) == "bd.title")) {
            echo " 
                    <a href=\"";
            // line 40
            echo ($context["sort_title"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 41
            echo " 
                    <a href=\"";
            // line 42
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        }
        // line 43
        echo " 
                  </td>

                  <td class=\"text-left\">
                    ";
        // line 47
        if ((($context["sort"] ?? null) == "bd.title")) {
            echo " 
                    <a href=\"";
            // line 48
            echo ($context["sort_title"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 49
            echo " 
                    <a href=\"";
            // line 50
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        }
        // line 51
        echo " 
                  </td>


                  <td class=\"text-left\">
                    ";
        // line 56
        if ((($context["sort"] ?? null) == "b.module_id")) {
            echo " 
                    <a href=\"";
            // line 57
            echo ($context["sort_module"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_module"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 58
            echo " 
                    <a href=\"";
            // line 59
            echo ($context["sort_module"] ?? null);
            echo "\">";
            echo ($context["column_module"] ?? null);
            echo "</a>
                    ";
        }
        // line 60
        echo " 
                  </td>
                  <td class=\"text-left\">";
        // line 62
        echo ($context["column_status"] ?? null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 63
        echo ($context["column_comments"] ?? null);
        echo "</td>  
                  <td class=\"text-right\">";
        // line 64
        if ((($context["sort"] ?? null) == "b.date_added")) {
            echo " 
                    <a href=\"";
            // line 65
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 66
            echo " 
                    <a href=\"";
            // line 67
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                    ";
        }
        // line 68
        echo " 
                  </td>
                  <td class=\"text-right\">";
        // line 70
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 74
        if (($context["bloggers"] ?? null)) {
            echo " 
                ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bloggers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                echo " 
                <tr>
                  <td class=\"text-center\"> 
                    ";
                // line 78
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["blog"], "blogger_id", [], "any", false, false, false, 78), ($context["selected"] ?? null))) {
                    // line 79
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "blogger_id", [], "any", false, false, false, 79);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 80
                    echo " 
                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "blogger_id", [], "any", false, false, false, 81);
                    echo "\" />
                    ";
                }
                // line 82
                echo "</td>
                  <td class=\"text-left\">";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 83);
                echo "</td>
                  <td class=\"text-left\">";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "module", [], "any", false, false, false, 84);
                echo "</td>
                  <td class=\"text-left\">";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "status", [], "any", false, false, false, 85);
                echo "</td>
                  <td class=\"text-right\">";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "total_comments", [], "any", false, false, false, 86);
                echo "</td>
                  <td class=\"text-right\">";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 87);
                echo "</td>
                  <td class=\"text-right\">
                      <a href=\"";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "comments", [], "any", false, false, false, 89);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_comments"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a>
                      <a href=\"";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "edit", [], "any", false, false, false, 90);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo " 
                ";
        } else {
            // line 94
            echo " 
                <tr>
                  <td class=\"text-center\" colspan=\"7\">";
            // line 96
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 99
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 104
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 105
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 111
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/blogger/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 111,  346 => 105,  342 => 104,  335 => 99,  329 => 96,  325 => 94,  321 => 93,  309 => 90,  303 => 89,  298 => 87,  294 => 86,  290 => 85,  286 => 84,  282 => 83,  279 => 82,  274 => 81,  271 => 80,  265 => 79,  263 => 78,  255 => 75,  251 => 74,  244 => 70,  240 => 68,  233 => 67,  230 => 66,  221 => 65,  217 => 64,  213 => 63,  209 => 62,  205 => 60,  198 => 59,  195 => 58,  186 => 57,  182 => 56,  175 => 51,  168 => 50,  165 => 49,  156 => 48,  152 => 47,  146 => 43,  139 => 42,  136 => 41,  127 => 40,  123 => 39,  113 => 32,  107 => 29,  103 => 27,  95 => 23,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/blogger/list.twig", "");
    }
}
