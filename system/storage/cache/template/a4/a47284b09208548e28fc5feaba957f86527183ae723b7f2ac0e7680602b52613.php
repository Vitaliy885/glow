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
class __TwigTemplate_4f33b819cc8354fd70b7202a8912123b7d6891fa77aabf41a51dca2b5c278bf3 extends \Twig\Template
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
        echo "\" class=\"galleryblock container clearfix\">
    <div class=\"subtitle\">";
        // line 2
        echo ($context["subtitle"] ?? null);
        echo "</div>
    <h3 class=\"home-title\">";
        // line 3
        echo ($context["heading"] ?? null);
        echo "</h3>
    <div class=\"owl-carousel\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_sliderimages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_sliderimage"]) {
            // line 6
            echo "    <div class=\"item gallery-image\">
        <a href=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "image", [], "any", false, false, false, 7);
            echo "\" class=\"image_popup\">
            <img src=\"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "image", [], "any", false, false, false, 8);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "title", [], "any", false, false, false, 8);
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
        // line 19
        echo "    </div>
    <script type=\"text/javascript\">
        \$('#";
        // line 21
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
            loop:";
        // line 22
        echo ($context["loop"] ?? null);
        echo ",
            nav:false,
            dots:false,
            margin:30,
            autoplay:";
        // line 26
        echo ($context["autoplay"] ?? null);
        echo ",
            animateOut: 'fadeOut',
            navigateByImgClick: true,
            rtl: \$('html').attr('dir') == 'rtl'? true : false,
            navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
            responsive:{
                0:{
                    items:2,
                    margin:10 
                },
                375:{
                    items:2,
                    margin:10 
                },
                480:{
                    items:2,
                    margin:10 
                },
                544:{
                    items:3
                },
                768:{
                    items:3
                },
                992:{
                    items:3
                },
                1200:{
                    items:4
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
</section>";
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
        return array (  96 => 26,  89 => 22,  85 => 21,  81 => 19,  62 => 8,  58 => 7,  55 => 6,  51 => 5,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/ishigalleryblock.twig", "");
    }
}
