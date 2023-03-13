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
class __TwigTemplate_0c0cc1167d9af206febdd5b33d92f7be8dea0c7f10ceedac03ee517653e4db4a extends \Twig\Template
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
\t\t\t<div class=\"col-lg-7 col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t<div class=\"story-image-";
        // line 5
        if ((($context["position"] ?? null) == "text-left")) {
            echo "left";
        } else {
            echo "right";
        }
        echo "\">
\t\t\t\t\t<div class=\"img-container\">
\t\t\t\t\t\t<img src=\" ";
        // line 7
        echo ($context["bgimage"] ?? null);
        echo " \" alt=\"story-img\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"text-wrapper col-lg-5 col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t<div class=\"text-wrapper-";
        // line 12
        if ((($context["position"] ?? null) == "text-left")) {
            echo "left";
        } else {
            echo "right";
        }
        echo "\">
\t  \t\t\t\t<div class=\"subtitle\">";
        // line 13
        echo ($context["subtitle"] ?? null);
        echo "</div>
\t\t\t\t\t<h3 class=\"home-title\">";
        // line 14
        echo ($context["heading"] ?? null);
        echo "</h3>
\t\t\t\t\t";
        // line 15
        echo ($context["html"] ?? null);
        echo "
\t\t\t\t</div>
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
        return array (  76 => 15,  72 => 14,  68 => 13,  60 => 12,  52 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishistoryblock.twig", "");
    }
}
