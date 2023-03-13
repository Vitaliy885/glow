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
class __TwigTemplate_7b834f17ac590771e5f16cb18d62b6487745ae4b2a31d5795362051b091e2161 extends \Twig\Template
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
\t<div class=\"parallax_banner ";
        // line 2
        echo ($context["parallax"] ?? null);
        echo "\" data-source-url=\"";
        echo ($context["bgimage"] ?? null);
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
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</div>
</section>
<style>
\t#";
        // line 18
        echo ($context["ishi_randomnumer"] ?? null);
        echo "{
\t\tbackground: ";
        // line 19
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
        return array (  70 => 19,  66 => 18,  53 => 8,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/ishiparallaxblock.twig", "");
    }
}
