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

/* extension/module/ishimanufacturerblock.twig */
class __TwigTemplate_10246d6a3600809a87c24f526be732ca1b2947f9ea2e058416291b5715d46e0b extends \Twig\Template
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
\t\t  <div class=\"col-sm-6\">
            <label class=\"col-sm-4 control-label\" for=\"input-width\">";
        // line 39
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 41
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 42
        if (($context["error_width"] ?? null)) {
            // line 43
            echo "              <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
              ";
        }
        // line 45
        echo "            </div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
            <label class=\"col-sm-4 control-label\" for=\"input-height\">";
        // line 48
        echo ($context["entry_height"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 50
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 51
        if (($context["error_height"] ?? null)) {
            // line 52
            echo "              <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
              ";
        }
        // line 54
        echo "            </div>
          </div>
          </div>
\t\t  <div class=\"form-group\">
\t\t  <div class=\"col-sm-6\">
            <label class=\"col-sm-4 control-label\" for=\"input-autoplay\">";
        // line 59
        echo ($context["entry_autoplay"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
            <label class=\"switch\">
\t\t\t\t\t\t\t";
        // line 62
        if (($context["autoplay"] ?? null)) {
            // line 63
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"autoplay\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-autoplay\" />
\t\t\t\t\t\t\t";
        } else {
            // line 65
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"autoplay\" value=\"1\" class=\"primary\" id=\"input-autoplay\" />
\t\t\t\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t\t\t  <span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
            </div>
\t\t\t </div>
\t\t\t<div class=\"col-sm-6\">
            <label class=\"col-sm-4 control-label\" for=\"input-loop\">";
        // line 72
        echo ($context["entry_loop"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
          <label class=\"switch\">
\t\t\t\t\t\t\t";
        // line 75
        if (($context["loop"] ?? null)) {
            // line 76
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"loop\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-loop\" />
\t\t\t\t\t\t\t";
        } else {
            // line 78
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"loop\" value=\"1\" class=\"primary\" id=\"input-loop\" />
\t\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t\t  <span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
            </div>
          </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 86
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 89
        if (($context["status"] ?? null)) {
            // line 90
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 91
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 93
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 94
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 96
        echo "              </select>
            </div>
          </div>
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
        // line 179
        echo ($context["image_row"] ?? null);
        echo ";

function addImage(language_id) {
\thtml  = '<tr id=\"image-row' + image_row + '\">';\t
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"ishi_image[' + language_id + '][' + image_row + '][title]\" value=\"\" placeholder=\"";
        // line 183
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" /></td>';\t
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"ishi_image[' + language_id + '][' + image_row + '][link]\" value=\"\" placeholder=\"";
        // line 184
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control\" /></td>';\t\t
\thtml += '  <td class=\"text-center\"><a href=\"\" id=\"thumb-image' + image_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 185
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"ishi_image[' + language_id + '][' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';\t
  html += '  <td class=\"text-right\" style=\"width: 10%;\"><input type=\"text\" name=\"ishi_image[' + language_id + '][' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 186
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row  + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 187
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
        // line 198
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ishimanufacturerblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 198,  367 => 187,  363 => 186,  357 => 185,  353 => 184,  349 => 183,  342 => 179,  257 => 96,  252 => 94,  247 => 93,  242 => 91,  237 => 90,  235 => 89,  229 => 86,  221 => 80,  217 => 78,  213 => 76,  211 => 75,  205 => 72,  198 => 67,  194 => 65,  190 => 63,  188 => 62,  182 => 59,  175 => 54,  169 => 52,  167 => 51,  161 => 50,  156 => 48,  151 => 45,  145 => 43,  143 => 42,  137 => 41,  132 => 39,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ishimanufacturerblock.twig", "");
    }
}
