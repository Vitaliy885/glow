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

/* glow01/template/extension/module/ishistoryblock.twig */
class __TwigTemplate_d404b2d44e2c56059a3cc7b03b6be0d3a6983c2a1711cdbc9419e6442595a6aa extends \Twig\Template
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
        echo "<section class=\"ishistoryblock\" style=\"margin-bottom:";
        echo ($context["marginbottom"] ?? null);
        echo "\">
\t<div class=\"container\">
\t\t<div class=\"row valign-wrapper\">
\t\t\t<div class=\"story-image-";
        // line 4
        if ((($context["image_position"] ?? null) == "text-left")) {
            echo "left";
        } else {
            echo "right";
        }
        echo " col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t<div class=\"img-container\">
\t\t\t\t\t<img src=\" ";
        // line 6
        echo ($context["bgimage"] ?? null);
        echo " \" alt=\"story-img\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"text-wrapper text-wrapper-";
        // line 9
        if ((($context["position"] ?? null) == "text-left")) {
            echo "left";
        } else {
            echo "right";
        }
        echo " col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t  \t\t\t\t<div class=\"subtitle\">";
        // line 10
        echo ($context["subtitle"] ?? null);
        echo "</div>
\t\t\t\t\t<h3 class=\"home-title\">";
        // line 11
        echo ($context["heading"] ?? null);
        echo "</h3>
\t\t\t\t\t";
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
        return "glow01/template/extension/module/ishistoryblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  71 => 11,  67 => 10,  59 => 9,  53 => 6,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/ishistoryblock.twig", "");
    }
}
