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

/* fabulous/template/extension/module/ishimanufacturerblock.twig */
class __TwigTemplate_fff4f09e6870738420f33c050116a0713595792e0ea47b3613c2ad954d743333 extends \Twig\Template
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
        echo "\" class=\"manufacturerblock  clearfix\" style=\"background-color: ";
        echo ($context["bgcolor"] ?? null);
        echo "\">
    <div class=\"container\">
        <div class=\"owl-carousel\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 5
            echo "        <div class=\"item\">
                    ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["manufacturer"], "link", [], "any", false, false, false, 6)) {
                // line 7
                echo "                        <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "link", [], "any", false, false, false, 7);
                echo "\">
                            <img src=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "image", [], "any", false, false, false, 8);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "title", [], "any", false, false, false, 8);
                echo "\" class=\"img-responsive\" />
                        </a>
                    ";
            } else {
                // line 11
                echo "                        <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "image", [], "any", false, false, false, 11);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "title", [], "any", false, false, false, 11);
                echo "\" class=\"img-responsive\" />
                    ";
            }
            // line 13
            echo "        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </div>
    </div>
    <script type=\"text/javascript\">
        \$('#";
        // line 18
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
            loop:";
        // line 19
        echo ($context["loop"] ?? null);
        echo ",
            nav:false,
            dots:false,
            autoplay:";
        // line 22
        echo ($context["autoplay"] ?? null);
        echo ",
            animateOut: 'fadeOut',
            rtl: \$('html').attr('dir') == 'rtl'? true : false,
            navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
            responsive:{
                    0:{
                        items:2
                    },
                    480:{
                        items:3
                    },
                    768:{
                        items:4
                    },
                    992:{
                        items:5
                    },
                    1200:{
                        items:6
                    }
                }
        });
    </script>

</section>";
    }

    public function getTemplateName()
    {
        return "fabulous/template/extension/module/ishimanufacturerblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 22,  92 => 19,  88 => 18,  83 => 15,  76 => 13,  68 => 11,  60 => 8,  55 => 7,  53 => 6,  50 => 5,  46 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishimanufacturerblock.twig", "");
    }
}
