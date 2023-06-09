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

/* fabulous/template/extension/module/ishislider.twig */
class __TwigTemplate_806dd3e23c5a257326b9b8ad161fe7d28bb093fde432aa775dcd325faa398ade extends \Twig\Template
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
        echo "\" class=\"ishislider\">
  <div class=\"owl-carousel\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_sliderimages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_sliderimage"]) {
            // line 4
            echo "      <div class=\"item\">
          <a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "link", [], "any", false, false, false, 5);
            echo "\" class=\"slideshow__link\">
            <img src=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "image", [], "any", false, false, false, 6);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "title", [], "any", false, false, false, 6);
            echo "\" class=\"img-responsive\" />
            <div class=\"container\">
              <div class=\"slider-content col-lg-6 col-md-6 col-sm-6 col-xs-6 ";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "textposition", [], "any", false, false, false, 8);
            echo "\" style=\"text-align:";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "textalignment", [], "any", false, false, false, 8);
            echo "\">
                ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "subtitle", [], "any", false, false, false, 9)) {
                // line 10
                echo "                  <div class=\"sub-title\" style=\"color:";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "subtitlecolor", [], "any", false, false, false, 10);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "subtitle", [], "any", false, false, false, 10);
                echo "</div>
                ";
            }
            // line 12
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "title", [], "any", false, false, false, 12)) {
                // line 13
                echo "                  <div class=\"main-title\" style=\"color: ";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "titlecolor", [], "any", false, false, false, 13);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "title", [], "any", false, false, false, 13);
                echo "</div>
                ";
            }
            // line 15
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "btntext", [], "any", false, false, false, 15)) {
                // line 16
                echo "                  <div class=\"slider-btn\"><span class=\"btn-default btn\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "btntext", [], "any", false, false, false, 16);
                echo "</span></div>
                ";
            }
            // line 18
            echo "              </div> 
            </div>
          </a>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_sliderimage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo " 
  </div>
  <script type=\"text/javascript\">
    \$('#";
        // line 25
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
        loop:true,
        nav:";
        // line 27
        echo ($context["navigation"] ?? null);
        echo ",
        dots:";
        // line 28
        echo ($context["dot"] ?? null);
        echo ",
        autoplay:";
        // line 29
        echo ($context["autoplay"] ?? null);
        echo ",
        rtl: \$('html').attr('dir') == 'rtl'? true : false,
        animateOut: 'fadeOut',
        dotsClass: 'owl-dots ";
        // line 32
        echo ($context["dot_style"] ?? null);
        echo "',
        navClass: [\"owl-prev ";
        // line 33
        echo ($context["navigation_style"] ?? null);
        echo "\",\"owl-next ";
        echo ($context["navigation_style"] ?? null);
        echo "\"],
        navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
        responsive:{
            0:{
                items:1
            }
        }
    });
  </script>
</div>
<div id=\"_mobile_servicesblock\"></div>";
    }

    public function getTemplateName()
    {
        return "fabulous/template/extension/module/ishislider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 33,  131 => 32,  125 => 29,  121 => 28,  117 => 27,  112 => 25,  107 => 22,  97 => 18,  91 => 16,  88 => 15,  80 => 13,  77 => 12,  69 => 10,  67 => 9,  61 => 8,  54 => 6,  50 => 5,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishislider.twig", "");
    }
}
