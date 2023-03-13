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

/* extension/module/ishisocialfollow.twig */
class __TwigTemplate_567ee3e8d677cab918ec8030e2abb4890f6498aa02c2b13da3bdae43dae700c6 extends \Twig\Template
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
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 38
        echo ($context["entry_facebook"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"facebook\" value=\"";
        // line 40
        echo ($context["facebook"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_facebook"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 41
        if (($context["error_name"] ?? null)) {
            // line 42
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 44
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 47
        echo ($context["entry_twitter"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"twitter\" value=\"";
        // line 49
        echo ($context["twitter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_twitter"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 50
        if (($context["error_name"] ?? null)) {
            // line 51
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 53
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 56
        echo ($context["entry_youtube"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"youtube\" value=\"";
        // line 58
        echo ($context["youtube"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_youtube"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 59
        if (($context["error_name"] ?? null)) {
            // line 60
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 62
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 65
        echo ($context["entry_gplus"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"gplus\" value=\"";
        // line 67
        echo ($context["gplus"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_gplus"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 68
        if (($context["error_name"] ?? null)) {
            // line 69
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 71
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 74
        echo ($context["entry_rss"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"rss\" value=\"";
        // line 76
        echo ($context["rss"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_rss"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 77
        if (($context["error_name"] ?? null)) {
            // line 78
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 80
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 83
        echo ($context["entry_pinterest"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"pinterest\" value=\"";
        // line 85
        echo ($context["pinterest"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_pinterest"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 86
        if (($context["error_name"] ?? null)) {
            // line 87
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 89
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 92
        echo ($context["entry_vimeo"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"vimeo\" value=\"";
        // line 94
        echo ($context["vimeo"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_vimeo"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 95
        if (($context["error_name"] ?? null)) {
            // line 96
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 98
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 101
        echo ($context["entry_instagram"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"instagram\" value=\"";
        // line 103
        echo ($context["instagram"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_instagram"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 104
        if (($context["error_name"] ?? null)) {
            // line 105
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 107
        echo "            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 111
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 114
        if (($context["status"] ?? null)) {
            // line 115
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 116
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 118
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 119
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 121
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 129
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/ishisocialfollow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 129,  352 => 121,  347 => 119,  342 => 118,  337 => 116,  332 => 115,  330 => 114,  324 => 111,  318 => 107,  312 => 105,  310 => 104,  304 => 103,  299 => 101,  294 => 98,  288 => 96,  286 => 95,  280 => 94,  275 => 92,  270 => 89,  264 => 87,  262 => 86,  256 => 85,  251 => 83,  246 => 80,  240 => 78,  238 => 77,  232 => 76,  227 => 74,  222 => 71,  216 => 69,  214 => 68,  208 => 67,  203 => 65,  198 => 62,  192 => 60,  190 => 59,  184 => 58,  179 => 56,  174 => 53,  168 => 51,  166 => 50,  160 => 49,  155 => 47,  150 => 44,  144 => 42,  142 => 41,  136 => 40,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ishisocialfollow.twig", "");
    }
}
