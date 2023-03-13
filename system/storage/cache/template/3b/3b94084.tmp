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

/* fabulous/template/extension/module/ishicategoryblock.twig */
class __TwigTemplate_35970a215c9f910367eef855598c874adb95c7a0f9cab3e7c9fe35d6de9834f0 extends \Twig\Template
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
        echo "\" class=\"ishicategoryblock\">
    <div class=\"owl-carousel\">
      ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            echo "  
        <div class=\"ishicategoryblock-container\">
          <div class=\"image-container\"> 
            <div class=\"item\">
                <a href=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7);
            echo "\">
                  <img src=\"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 8);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 8);
            echo "\" class=\"img-responsive\" />
                </a>
                <div class=\"text-container\">                
                    <a href=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 11);
            echo "\" class=\"menu-container\">
                        <span class=\"heading\">";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 12);
            echo "</span>
                    </a>
                </div>
            </div>  
          </div>   
        </div>   
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo " 
    </div>
  <script type=\"text/javascript\">
    \$('#";
        // line 21
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
        loop:true,
        nav:false,
        dots:false,
        navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
        rtl: \$('html').attr('dir') == 'rtl'? true : false,    
        rewind: true,
        responsive:{
            0:{
                items:2
            },
            544:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:4
            },
            1200:{
                items:4
            }
        }
    });
  </script>
</section>";
    }

    public function getTemplateName()
    {
        return "fabulous/template/extension/module/ishicategoryblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 21,  81 => 18,  68 => 12,  64 => 11,  56 => 8,  52 => 7,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishicategoryblock.twig", "");
    }
}
