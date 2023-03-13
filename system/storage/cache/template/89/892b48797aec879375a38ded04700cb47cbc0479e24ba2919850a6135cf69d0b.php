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
class __TwigTemplate_15a29ac486c61e0f607b27eedfdbbbf8ae0ced88d576ebf1556bd3d9d21d9557 extends \Twig\Template
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
\t\t\t\t";
        // line 8
        if ((($context["videolink"] ?? null) != ($context["blank"] ?? null))) {
            // line 9
            echo "\t\t\t\t\t<div class=\"video-play-icon\">
\t\t\t            <a class=\"video\" href=\"";
            // line 10
            echo ($context["videolink"] ?? null);
            echo "\">
\t\t\t              <span class=\"ripple-effect\">
\t\t\t                <i class=\"fa fa-play-circle\" aria-hidden=\"true\"></i>
\t\t\t              </span>
\t\t\t            </a> 
\t\t          \t</div>
\t          \t";
        }
        // line 17
        echo "\t\t\t</div>
\t\t\t<div class=\"text-wrapper text-wrapper-";
        // line 18
        if ((($context["position"] ?? null) == "text-left")) {
            echo "left";
        } else {
            echo "right";
        }
        echo " col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t  \t\t\t\t<div class=\"subtitle\">";
        // line 19
        echo ($context["subtitle"] ?? null);
        echo "</div>
\t\t\t\t\t<h3 class=\"home-title\">";
        // line 20
        echo ($context["heading"] ?? null);
        echo "</h3>
\t\t\t\t\t";
        // line 21
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
        return array (  90 => 21,  86 => 20,  82 => 19,  74 => 18,  71 => 17,  61 => 10,  58 => 9,  56 => 8,  51 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/ishistoryblock.twig", "");
    }
}
