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

/* fabulous/template/extension/module/ishistoryblock.twig */
class __TwigTemplate_971b00285dfceb215defbd162003b2eb56e862b3cd141c085e582e68a49bff81 extends \Twig\Template
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
        echo "<section class=\"ishistoryblock\">
\t<div class=\"container\">
\t\t<div class=\"row valign-wrapper\">
\t\t\t<div class=\"story-image col-lg-7 col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t<div class=\"img-container\">
\t\t\t\t\t<img src=\" ";
        // line 6
        echo ($context["bgimage"] ?? null);
        echo " \" alt=\"story-img\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"text-wrapper col-lg-5 col-md-6 col-sm-12 col-xs-12\">
  \t\t\t\t<div class=\"subtitle\">";
        // line 10
        echo ($context["subtitle"] ?? null);
        echo "</div>
\t\t\t\t<h3 class=\"home-title\">";
        // line 11
        echo ($context["heading"] ?? null);
        echo "</h3>
\t\t\t\t";
        // line 12
        echo ($context["html"] ?? null);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "fabulous/template/extension/module/ishistoryblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  55 => 11,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishistoryblock.twig", "");
    }
}
