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
class __TwigTemplate_b1e988a1a66c0657cd6ca9d961cbd7b6ffd551af09e56e79397cb2231031e3b5 extends \Twig\Template
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
        echo ($context["random_id"] ?? null);
        echo "\" class=\"ishitestimonials\" style=\"background-image: url(";
        echo ($context["bgimage"] ?? null);
        echo ")\">
\t\t<div  class=\"ishitestimonials-container\" data-source-url=\"";
        // line 2
        echo ($context["bgimage"] ?? null);
        echo "\" >
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 4
        if (($context["title"] ?? null)) {
            // line 5
            echo "\t\t\t\t\t<h2 class=\"home-title\">";
            echo ($context["title"] ?? null);
            echo "</h2>
\t\t\t\t";
        }
        // line 7
        echo "\t\t\t\t<div class=\"owl-carousel\">\t\t\t\t
\t\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishitestimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishitestimonial"]) {
            // line 9
            echo "\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"user-details\">
\t\t\t\t\t\t\t\t<div class=\"testimonial-img\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "image", [], "any", false, false, false, 12);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "username", [], "any", false, false, false, 12);
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"user-description\">
\t\t\t\t\t\t\t\t\t";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "description", [], "any", false, false, false, 15);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"user-detail\">
\t\t\t\t\t\t\t\t\t<span class=\"user-name\">
\t\t\t\t\t\t\t\t\t\t";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "username", [], "any", false, false, false, 19);
            echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"user-designation\">
\t\t\t\t\t\t\t\t\t\t";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "designation", [], "any", false, false, false, 22);
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
        // line 27
        echo "\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t    <script type=\"text/javascript\">  
\t        \$('#";
        // line 32
        echo ($context["random_id"] ?? null);
        echo " .owl-carousel').owlCarousel({
\t            loop:true,
\t            nav: true,
\t            dots:false,
\t            margin:30,
\t\t\t\tautoplay:";
        // line 37
        echo ($context["autoplay"] ?? null);
        echo ",
\t            rtl: \$('html').attr('dir') == 'rtl'? true : false,
\t            navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
\t            items:2
\t        });
\t    </script>
\t\t<style>
\t\t\t#";
        // line 44
        echo ($context["random_id"] ?? null);
        echo "{
\t\t\t\tbackground-color: ";
        // line 45
        echo ($context["bgcolor"] ?? null);
        echo "
\t\t\t}
\t\t</style>
</div>";
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
        return array (  131 => 45,  127 => 44,  117 => 37,  109 => 32,  102 => 27,  90 => 22,  84 => 19,  77 => 15,  69 => 12,  64 => 9,  60 => 8,  57 => 7,  51 => 5,  49 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishitestimonialsblock.twig", "");
    }
}
