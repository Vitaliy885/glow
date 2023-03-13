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

/* glow01/template/extension/module/ishiparallaxblock.twig */
class __TwigTemplate_180d0330fa448faaecd193899fc0f0947cdb7dfa9e0e67ed55f5fa98ed474ac2 extends \Twig\Template
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
        echo "<div id=\"";
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"ishiparallaxbannerblock\">
\t<div class=\"parallax_banner ";
        // line 2
        echo ($context["parallax"] ?? null);
        echo "\" data-source-url=\"";
        echo ($context["bgimage"] ?? null);
        echo "\" style=\"background-image: url(";
        echo ($context["bgimage"] ?? null);
        echo ");background-attachment: fixed;background-position: center;\" data-deal=\"";
        echo ($context["deal"] ?? null);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 5
        echo ($context["html"] ?? null);
        echo "\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<style>
\t#";
        // line 11
        echo ($context["ishi_randomnumer"] ?? null);
        echo "{
\t\tbackground: ";
        // line 12
        echo ($context["bg_color"] ?? null);
        echo ";
\t}
</style>";
    }

    public function getTemplateName()
    {
        return "glow01/template/extension/module/ishiparallaxblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  63 => 11,  54 => 5,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/ishiparallaxblock.twig", "");
    }
}
