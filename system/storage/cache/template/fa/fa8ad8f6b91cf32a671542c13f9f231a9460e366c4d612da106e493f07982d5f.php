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

/* glow01/template/extension/module/ishitestimonialsblock.twig */
class __TwigTemplate_e472ad5ebf439e03709bc947da169e87c56e4fc9a9f876f7fa18ff407c46596c extends \Twig\Template
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
        echo ($context["random_id"] ?? null);
        echo "\" class=\"ishitestimonials col-md-12 col-sm-12 col-lg-6 col-md-12\">
\t\t<div  class=\"ishitestimonials-container\">
\t\t\t<div class=\"container\">
\t\t\t\t\t";
        // line 4
        if (($context["title"] ?? null)) {
            // line 5
            echo "\t\t\t\t\t\t<h3 class=\"home-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
\t\t\t\t\t";
        }
        // line 7
        echo "\t\t\t\t\t<div class=\"owl-carousel\">\t\t\t\t
\t\t\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishitestimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishitestimonial"]) {
            // line 9
            echo "\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"user-details\">
\t\t\t\t\t\t\t\t\t<div class=\"testimonial-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "image", [], "any", false, false, false, 12);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "username", [], "any", false, false, false, 12);
            echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"user-detail\">
\t\t\t\t\t\t\t\t\t\t<span class=\"user-name\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "username", [], "any", false, false, false, 16);
            echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"user-designation\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "designation", [], "any", false, false, false, 19);
            echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"user-description\">
\t\t\t\t\t\t\t\t\t";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "description", [], "any", false, false, false, 24);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishitestimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t\t
\t\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t    <script type=\"text/javascript\">  
\t        \$('#";
        // line 32
        echo ($context["random_id"] ?? null);
        echo " .owl-carousel').owlCarousel({
\t            loop:false,
\t            nav: false,
\t            rewind:true,
\t            dots:true,
\t            margin:30,
\t\t\t\tautoplay:";
        // line 38
        echo ($context["autoplay"] ?? null);
        echo ",
\t            rtl: \$('html').attr('dir') == 'rtl'? true : false,
\t            navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
\t            responsive:{
\t            \t0:{
\t\t                items:1
\t\t            },
\t            \t544:{
\t\t                items:1
\t\t            },
\t            \t768:{
\t\t                items:1
\t\t            },
\t            \t992:{
\t\t                items:1
\t\t            },
\t            \t1200:{
\t\t                items:1
\t\t            }
\t            }
\t        });
\t    </script>
\t\t<style>
\t\t\t.ishitestimonials-container{
\t\t\t\tbackground-color: ";
        // line 62
        echo ($context["bgcolor"] ?? null);
        echo "
\t\t\t}
\t\t</style>
</section>";
    }

    public function getTemplateName()
    {
        return "glow01/template/extension/module/ishitestimonialsblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 62,  113 => 38,  104 => 32,  97 => 27,  87 => 24,  79 => 19,  73 => 16,  64 => 12,  59 => 9,  55 => 8,  52 => 7,  46 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/ishitestimonialsblock.twig", "");
    }
}
