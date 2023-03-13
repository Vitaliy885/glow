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

/* fabulous/template/extension/module/ishitestimonialsblock.twig */
class __TwigTemplate_b1a2ede3ae0ad9ebb3967881096a3fc3910a6372861a151aed7b98b2b5b47678 extends \Twig\Template
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
        echo "\" class=\"ishitestimonials\" style=\"background-image: url(";
        echo ($context["bgimage"] ?? null);
        echo ")\">
\t\t<div  class=\"ishitestimonials-container\" data-source-url=\"";
        // line 2
        echo ($context["bgimage"] ?? null);
        echo "\" >
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t<div class=\"subtitle\">";
        // line 5
        echo ($context["subtitle"] ?? null);
        echo "</div>
\t\t\t\t\t";
        // line 6
        if (($context["title"] ?? null)) {
            // line 7
            echo "\t\t\t\t\t\t<h3 class=\"home-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
\t\t\t\t\t";
        }
        // line 9
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"owl-carousel\">\t\t\t\t
\t\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishitestimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishitestimonial"]) {
            // line 12
            echo "\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"user-details\">
\t\t\t\t\t\t\t\t<div class=\"testimonial-img\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "image", [], "any", false, false, false, 15);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "username", [], "any", false, false, false, 15);
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"user-description\">
\t\t\t\t\t\t\t\t\t";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "description", [], "any", false, false, false, 18);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"user-detail\">
\t\t\t\t\t\t\t\t\t<span class=\"user-name\">
\t\t\t\t\t\t\t\t\t\t";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "username", [], "any", false, false, false, 22);
            echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"user-designation\">
\t\t\t\t\t\t\t\t\t\t";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "designation", [], "any", false, false, false, 25);
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
        // line 30
        echo "\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t    <script type=\"text/javascript\">  
\t        \$('#";
        // line 35
        echo ($context["random_id"] ?? null);
        echo " .owl-carousel').owlCarousel({
\t            loop:true,
\t            nav: true,
\t            dots:false,
\t            margin:30,
\t\t\t\tautoplay:";
        // line 40
        echo ($context["autoplay"] ?? null);
        echo ",
\t            rtl: \$('html').attr('dir') == 'rtl'? true : false,
\t            navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
\t            items:2
\t        });
\t    </script>
\t\t<style>
\t\t\t#";
        // line 47
        echo ($context["random_id"] ?? null);
        echo "{
\t\t\t\tbackground-color: ";
        // line 48
        echo ($context["bgcolor"] ?? null);
        echo "
\t\t\t}
\t\t</style>
</section>";
    }

    public function getTemplateName()
    {
        return "fabulous/template/extension/module/ishitestimonialsblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 48,  133 => 47,  123 => 40,  115 => 35,  108 => 30,  96 => 25,  90 => 22,  83 => 18,  75 => 15,  70 => 12,  66 => 11,  62 => 9,  56 => 7,  54 => 6,  50 => 5,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishitestimonialsblock.twig", "");
    }
}
