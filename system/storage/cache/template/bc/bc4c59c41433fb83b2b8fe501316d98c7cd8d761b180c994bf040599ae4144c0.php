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

/* glow01/template/extension/module/ishioffersblock.twig */
class __TwigTemplate_a785f3a10d7260b22641e953f0394b4b53f6df00564b83d8e381562260840f28 extends \Twig\Template
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
        echo "<div id=\"ishioffersblock\">
\t<div class=\"container\">\t
        <div class=\"offer-background\" style=\"background: ";
        // line 3
        echo ($context["bg_color"] ?? null);
        echo ";\">
            <div id=\"offer-carousel\" class=\"owl-carousel\">
                    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            echo " 
                        <div class=\"item\">
                            <p>";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["offer"], "title", [], "any", false, false, false, 7);
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            </div>
        </div>
    </div>    
</div>
<script type=\"text/javascript\">
        \$('#offer-carousel.owl-carousel').owlCarousel({
            loop:true,
            nav:true,
            dots:false,
            autoplay:true,
            margin: 30,
            animateOut: 'fadeOut',
            animateIn:\"zoomIn\",
            smartSpeed:4000,
            rtl: \$('html').attr('dir') == 'rtl'? true : false,
            navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
            responsive:{
                    0:{
                        items:1
                    },
                    544:{
                        items:1
                    },
                    768:{
                        items:1
                    },
                    992:{
                        items:1
                    },
                    1200:{
                        items:1
                    }
                }
        });
</script>";
    }

    public function getTemplateName()
    {
        return "glow01/template/extension/module/ishioffersblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  53 => 7,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/ishioffersblock.twig", "");
    }
}
