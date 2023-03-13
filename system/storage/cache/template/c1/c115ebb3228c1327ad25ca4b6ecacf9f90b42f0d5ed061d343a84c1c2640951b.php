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

/* fabulous01/template/extension/module/ishiparallaxblock.twig */
class __TwigTemplate_942e8af59448993f3f4b280a0b322d63b9acaea5409f5e580e82eb0b8f351832 extends \Twig\Template
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
        echo "\" class=\"ishiparallaxbannerblock\" data-source-url=\"";
        echo ($context["bg_image"] ?? null);
        echo "\" style=\"background-image: url(";
        echo ($context["bg_image"] ?? null);
        echo ")\">
\t<div class=\"parallax_banner ";
        // line 2
        echo ($context["parallax"] ?? null);
        echo "\" data-counter=\"";
        echo ($context["enddate"] ?? null);
        echo "\" data-deal=\"";
        echo ($context["deal"] ?? null);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"timer-content\">
\t\t\t\t\t<div class=\"col-lg-7 col-md-7 col-sm-6 col-xs-12 timer-text\">
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
        return "fabulous01/template/extension/module/ishiparallaxblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  80 => 23,  67 => 13,  59 => 8,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous01/template/extension/module/ishiparallaxblock.twig", "");
    }
}
