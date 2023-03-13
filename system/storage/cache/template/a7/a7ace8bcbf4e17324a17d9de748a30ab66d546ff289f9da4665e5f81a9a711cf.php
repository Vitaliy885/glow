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

/* fabulous/template/extension/module/ishiparallaxblock.twig */
class __TwigTemplate_b0341c312ff3d0d78efd4e780b38071ac7469accf3ca151922940ee5c05a4cca extends \Twig\Template
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
        echo "<section id=\"";
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"ishiparallaxbannerblock\">
\t<div class=\"parallax_banner\" data-counter=\"";
        // line 2
        echo ($context["enddate"] ?? null);
        echo "\" data-deal=\"";
        echo ($context["deal"] ?? null);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"timer-content\">
\t\t\t\t\t<div class=\"col-lg-7 col-md-7 col-sm-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"timer-text-block\">
\t\t\t\t\t\t\t";
        // line 8
        echo ($context["html"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"timer-image col-lg-5 col-md-5 col-sm-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"image-wrapper\">
\t\t\t\t\t\t\t<img src=\" ";
        // line 13
        echo ($context["bgimage"] ?? null);
        echo " \" alt=\"parallax-img\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</div>
</section>
<style>
\t#";
        // line 23
        echo ($context["ishi_randomnumer"] ?? null);
        echo "{
\t\tbackground: ";
        // line 24
        echo ($context["bg_color"] ?? null);
        echo ";
\t}
</style>";
    }

    public function getTemplateName()
    {
        return "fabulous/template/extension/module/ishiparallaxblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  74 => 23,  61 => 13,  53 => 8,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishiparallaxblock.twig", "");
    }
}
