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
class __TwigTemplate_4f25f4efc29e3011097ab64bd10f7dd682b5a8e7c05fded5c90b925e2b1215a8 extends \Twig\Template
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
        echo "\" class=\"ishitestimonials col-md-6 col-sm-12 col-lg-6 col-md-12\">
\t\t<div  class=\"ishitestimonials-container\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t";
        // line 5
        if (($context["title"] ?? null)) {
            // line 6
            echo "\t\t\t\t\t\t<h3 class=\"home-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
\t\t\t\t\t";
        }
        // line 8
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"owl-carousel\">\t\t\t\t
\t\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishitestimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishitestimonial"]) {
            // line 11
            echo "\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"user-details\">
\t\t\t\t\t\t\t\t<div class=\"testimonial-img\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "image", [], "any", false, false, false, 14);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "username", [], "any", false, false, false, 14);
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"user-description\">
\t\t\t\t\t\t\t\t\t";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "description", [], "any", false, false, false, 17);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"user-detail\">
\t\t\t\t\t\t\t\t\t<span class=\"user-name\">
\t\t\t\t\t\t\t\t\t\t";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "username", [], "any", false, false, false, 21);
            echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"user-designation\">
\t\t\t\t\t\t\t\t\t\t";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "designation", [], "any", false, false, false, 24);
            echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishitestimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t    <script type=\"text/javascript\">  
\t        \$('#";
        // line 34
        echo ($context["random_id"] ?? null);
        echo " .owl-carousel').owlCarousel({
\t            loop:false,
\t            nav: true,
\t            rewind:true,
\t            dots:false,
\t            margin:30,
\t\t\t\tautoplay:";
        // line 40
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
\t\t\t#";
        // line 63
        echo ($context["random_id"] ?? null);
        echo "{
\t\t\t\tbackground-color: ";
        // line 64
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
        return array (  145 => 64,  141 => 63,  115 => 40,  106 => 34,  99 => 29,  87 => 24,  81 => 21,  74 => 17,  66 => 14,  61 => 11,  57 => 10,  53 => 8,  47 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/ishitestimonialsblock.twig", "");
    }
}
