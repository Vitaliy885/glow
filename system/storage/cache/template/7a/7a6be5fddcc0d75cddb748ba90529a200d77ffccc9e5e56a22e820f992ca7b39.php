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

/* fabulous01/template/extension/module/ishimanufacturerblock.twig */
class __TwigTemplate_2cc37fb13307f65c051bc950a73456c29ef08cae3c1fbb47cd9043908671ce5b extends \Twig\Template
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
        echo "\" class=\"manufacturerblock  clearfix\">
    <div class=\"container\">
        <div class=\"manufacturersblock\" style=\"background-color: ";
        // line 3
        echo ($context["bgcolor"] ?? null);
        echo "\">
            <div class=\"owl-carousel\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 6
            echo "            <div class=\"item\">
                        ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["manufacturer"], "link", [], "any", false, false, false, 7)) {
                // line 8
                echo "                            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "link", [], "any", false, false, false, 8);
                echo "\">
                                <img src=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "image", [], "any", false, false, false, 9);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "title", [], "any", false, false, false, 9);
                echo "\" class=\"img-responsive\" />
                            </a>
                        ";
            } else {
                // line 12
                echo "                            <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "image", [], "any", false, false, false, 12);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "title", [], "any", false, false, false, 12);
                echo "\" class=\"img-responsive\" />
                        ";
            }
            // line 14
            echo "            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
        \$('#";
        // line 20
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
            loop:";
        // line 21
        echo ($context["loop"] ?? null);
        echo ",
            nav:false,
            dots:false,
            margin:30,
            autoplay:";
        // line 25
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
        return "fabulous01/template/extension/module/ishimanufacturerblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  95 => 21,  91 => 20,  85 => 16,  78 => 14,  70 => 12,  62 => 9,  57 => 8,  55 => 7,  52 => 6,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous01/template/extension/module/ishimanufacturerblock.twig", "");
    }
}
