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
class __TwigTemplate_3126d746438abf1ab4f12b0f63c445ba86505be3741d05c11079890a16d4ec4c extends \Twig\Template
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
\t\t";
        // line 3
        echo ($context["html"] ?? null);
        echo "
\t\t<div class=\"timer-image col-lg-5 col-md-5 col-sm-6 col-xs-12\">
\t\t\t<div class=\"image-wrapper\" data-source-url=\"";
        // line 5
        echo ($context["bgimage"] ?? null);
        echo "\" style=\"background-image: url(";
        echo ($context["bgimage"] ?? null);
        echo ");\"></div>
\t\t</div>
\t</div>
</section>
<style>
\t#";
        // line 10
        echo ($context["ishi_randomnumer"] ?? null);
        echo "{
\t\tbackground: ";
        // line 11
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
        return array (  67 => 11,  63 => 10,  53 => 5,  48 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishiparallaxblock.twig", "");
    }
}
