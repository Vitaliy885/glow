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

/* extension/module/ishioffersblock/list.twig */
class __TwigTemplate_ce423f55d817dc704ab14a11f34beb5c055e2711da4defe041cae1e9c3b880f4 extends \Twig\Template
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ishioffer\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
              
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">
                    ";
        // line 40
        if ((($context["sort"] ?? null) == "bd.title")) {
            echo " 
                    \t<a href=\"";
            // line 41
            echo ($context["sort_title"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 42
            echo " 
                    \t<a href=\"";
            // line 43
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        }
        // line 44
        echo " 
                  </td>
                  <td class=\"text-right\">
                  \t";
        // line 47
        if ((($context["sort"] ?? null) == "b.date_added")) {
            echo " 
                    \t<a href=\"";
            // line 48
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 49
            echo " 
                    \t<a href=\"";
            // line 50
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                    ";
        }
        // line 51
        echo " 
                  </td>
                  <td class=\"text-right\">";
        // line 53
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 57
        if (($context["offers"] ?? null)) {
            echo " 
                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
                echo " 
                <tr>
                  <td class=\"text-center\">
\t\t\t\t\t";
                // line 61
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["offer"], "offer_id", [], "any", false, false, false, 61), twig_get_array_keys_filter(($context["selected"] ?? null)))) {
                    // line 62
                    echo "                    \t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["offer"], "offer_id", [], "any", false, false, false, 62);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 63
                    echo " 
                    \t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 64
                    echo twig_get_attribute($this->env, $this->source, $context["offer"], "offer_id", [], "any", false, false, false, 64);
                    echo "\" />
                    ";
                }
                // line 66
                echo "                </td>
                <td class=\"text-left\">";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["offer"], "title", [], "any", false, false, false, 67);
                echo "</td>
                  <td class=\"text-right\">";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["offer"], "date_added", [], "any", false, false, false, 68);
                echo "</td>  
                  <td class=\"text-right\">
                     
                      <a href=\"";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["offer"], "edit", [], "any", false, false, false, 71);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                   </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo " 
                ";
        } else {
            // line 75
            echo " 
                <tr>
                  <td class=\"text-center\" colspan=\"7\">";
            // line 77
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 80
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 85
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 86
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 92
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ishioffersblock/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 92,  264 => 86,  260 => 85,  253 => 80,  247 => 77,  243 => 75,  239 => 74,  227 => 71,  221 => 68,  217 => 67,  214 => 66,  209 => 64,  206 => 63,  200 => 62,  198 => 61,  190 => 58,  186 => 57,  179 => 53,  175 => 51,  168 => 50,  165 => 49,  156 => 48,  152 => 47,  147 => 44,  140 => 43,  137 => 42,  128 => 41,  124 => 40,  113 => 32,  107 => 29,  103 => 27,  95 => 23,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ishioffersblock/list.twig", "");
    }
}
