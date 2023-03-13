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
class __TwigTemplate_1dc1bb576fc83d4865460cb9a3f18f98ae24d217e2d4fc85e4e4413753772ea2 extends \Twig\Template
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
\t<div class=\"parallax_banner\" data-source-url=\"";
        // line 2
        echo ($context["bgimage"] ?? null);
        echo "\" style=\"background-image: url(";
        echo ($context["bgimage"] ?? null);
        echo ");\" data-counter=\"";
        echo ($context["enddate"] ?? null);
        echo "\" data-deal=\"";
        echo ($context["deal"] ?? null);
        echo "\">
\t\t";
        // line 3
        echo ($context["html"] ?? null);
        echo "
\t</div>
</section>
<style>
\t#";
        // line 7
        echo ($context["ishi_randomnumer"] ?? null);
        echo "{
\t\tbackground: ";
        // line 8
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
        return array (  63 => 8,  59 => 7,  52 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishiparallaxblock.twig", "");
    }
}
