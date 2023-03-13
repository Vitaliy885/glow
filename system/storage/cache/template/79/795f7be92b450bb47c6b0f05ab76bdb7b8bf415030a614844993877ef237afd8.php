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

/* glow01/template/extension/module/ishigalleryblock.twig */
class __TwigTemplate_83f114246cb13c392aea667638b94212e98c5e582c0ea61959fa6fc6537161eb extends \Twig\Template
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
        echo "\" class=\"galleryblock\">
    <h3 class=\"home-title\">";
        // line 2
        echo ($context["heading"] ?? null);
        echo "</h3>
    <div class=\"owl-carousel\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_sliderimages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_sliderimage"]) {
            // line 5
            echo "    <div class=\"item gallery-image\">
        <a href=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "image", [], "any", false, false, false, 6);
            echo "\" class=\"image_popup\">
            <img src=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "image", [], "any", false, false, false, 7);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "title", [], "any", false, false, false, 7);
            echo "\" class=\"img-responsive\" />
            <div class=\"imageoverlay\">
                <div class=\"icon\">
                    <div class=\"icon-square\">
                        <i class=\"fa fa-mail-forward\"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_sliderimage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
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
            autoplay:";
        // line 24
        echo ($context["autoplay"] ?? null);
        echo ",
            animateOut: 'fadeOut',
            navigateByImgClick: true,
            rtl: \$('html').attr('dir') == 'rtl'? true : false,
            navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
            responsive:{
                0:{
                    items:2
                },
                375:{
                    items:2
                },
                480:{
                    items:3
                },
                544:{
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
        \$('.gallery-image').magnificPopup({
          type:'image',
          delegate: '.image_popup',
          gallery: {
            enabled: true
          }
        });
    </script>
</div>";
    }

    public function getTemplateName()
    {
        return "glow01/template/extension/module/ishigalleryblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  85 => 21,  81 => 20,  77 => 18,  58 => 7,  54 => 6,  51 => 5,  47 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/ishigalleryblock.twig", "");
    }
}
