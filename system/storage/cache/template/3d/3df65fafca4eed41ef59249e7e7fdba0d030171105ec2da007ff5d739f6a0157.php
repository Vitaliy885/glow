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

/* glow01/template/common/home.twig */
class __TwigTemplate_3cec1b324f14f98e3cc03910ca227f2d1b32ef70c7a2dcb9762df7c68527786d extends \Twig\Template
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
        echo "
\t";
        // line 2
        echo ($context["header"] ?? null);
        echo "
\t<div id=\"common-home\">    
\t    ";
        // line 4
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            echo "\t    ";
            $context["class"] = "col-sm-6";
            // line 6
            echo "\t    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            echo "\t    ";
            $context["class"] = "col-sm-9";
            // line 8
            echo "\t    ";
        } else {
            // line 9
            echo "\t    ";
            $context["class"] = "col-sm-12";
            // line 10
            echo "\t    ";
        }
        echo "    
\t    ";
        // line 11
        echo ($context["content_top"] ?? null);
        echo "
\t    <div class=\"content_middle\">
\t    \t<div class=\"container\">
\t    \t\t<div class=\"row\">
\t    \t\t\t";
        // line 15
        echo ($context["content_middle"] ?? null);
        echo "\t\t
\t    \t\t</div>
    \t\t</div>
\t    </div>
\t\t";
        // line 19
        echo ($context["content_bottom"] ?? null);
        echo "
\t    ";
        // line 20
        echo ($context["column_left"] ?? null);
        echo " 
\t    ";
        // line 21
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
\t";
        // line 23
        echo ($context["footer"] ?? null);
        echo "   ";
    }

    public function getTemplateName()
    {
        return "glow01/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  89 => 21,  85 => 20,  81 => 19,  74 => 15,  67 => 11,  62 => 10,  59 => 9,  56 => 8,  53 => 7,  50 => 6,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/common/home.twig", "");
    }
}
