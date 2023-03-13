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
class __TwigTemplate_a493764c592ec1ab893415930f690ad1aa04310d9ceedbbe228ffcb1a2c32de1 extends \Twig\Template
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
    <div class=\"offer-background\" style=\"background: ";
        // line 2
        echo ($context["bg_color"] ?? null);
        echo ";\">
        <div id=\"offer-carousel\" class=\"owl-carousel\">
                ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            echo " 
                    <div class=\"item\">
                        <p>";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["offer"], "title", [], "any", false, false, false, 6);
            echo "</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </div>
    </div>
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
</div>
<script type=\"text/javascript\">
        \$('#offer-carousel.owl-carousel').owlCarousel({
            loop:true,
            nav:false,
            dots:false,
            autoplay:true,
            margin: 30,
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
        return array (  61 => 9,  52 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/ishioffersblock.twig", "");
    }
}
