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

/* glow01/template/extension/module/blogger.twig */
class __TwigTemplate_b97e4174d42f0c9371685472bb0f73aeee51583fd402a1085b600282c252fbd1 extends \Twig\Template
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
        echo "<section class=\"smartblog_block clearfix\">
<div class=\"row\">
\t<div class=\"blog-content col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"blog-title\">
\t\t\t\t\t<div class=\"subtitle\">";
        // line 7
        echo ($context["subtitle"] ?? null);
        echo "</div>
\t\t\t\t\t<h3 class=\"home-title\">";
        // line 8
        echo ($context["heading"] ?? null);
        echo "</h3>
\t\t\t\t</div>
\t\t\t\t<div id=\"smartblog-carousel\" class=\"owl-carousel\">
\t\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            echo "\t\t\t
\t\t\t\t\t\t<div class=\"blog_post item\">
\t\t\t\t\t\t\t<div class=\"news_module_image_holder col-lg-4 col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 14)) {
                echo " 
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 15);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 16);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"blogicons icon readmore_link\" title=\"Click to view Read More \" href=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 18);
                echo "\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t";
            }
            // line 19
            echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"blog_content col-lg-8 col-md-8 col-sm-6 col-xs-12\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"blog_date\">
\t\t\t\t\t\t\t\t\t<span class=\"date_month\">";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 23);
            echo "</span>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h4 class=\"blog_title\"><a href=\"";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 25);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 25);
            echo "</a> </h4>\t
\t\t\t\t\t\t\t\t";
            // line 26
            if ((($context["desc"] ?? null) == 1)) {
                echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"blog-desc\"> ";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 27);
                echo " </div>\t
\t\t\t\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"story-video col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t\t<div class=\"story-image\">
\t\t\t<div class=\"img-container\">
\t\t\t\t<img src=\" ";
        // line 39
        echo ($context["bgimage"] ?? null);
        echo " \" alt=\"story-img\" />
\t\t\t</div>
\t\t\t";
        // line 41
        if ((($context["videolink"] ?? null) != ($context["blank"] ?? null))) {
            // line 42
            echo "\t\t\t\t<div class=\"video-play-icon\">
\t\t\t\t\t<a class=\"video\" href=\"";
            // line 43
            echo ($context["videolink"] ?? null);
            echo "\">
\t\t\t\t\t<span class=\"ripple-effect\">
\t\t\t\t\t\t<i class=\"fa fa-play-circle\" aria-hidden=\"true\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t</a> 
\t\t\t\t</div>
\t\t\t";
        }
        // line 50
        echo "\t\t</div>
\t</div>\t
</div>
\t<script type=\"text/javascript\">
\t\t\$('.smartblog_block .owl-carousel').owlCarousel({
\t\t\tloop:false,
\t\t\tnav:false,
\t\t\tdots:true,
\t\t\trewind:true,
\t\t\tmargin:30,
\t\t\trtl: \$('html').attr('dir') == 'rtl'? true : false,
\t\t\tnavText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
\t\t\tautoplay:false, 
\t\t\tresponsive:{
\t\t\t\t0:{
                \titems:1
\t\t\t\t},
\t\t\t\t544:{
\t\t\t\t\titems:1
\t\t\t\t},
\t\t\t\t768:{
\t\t\t\t\titems:1
\t\t\t\t},
\t\t\t\t992:{
\t\t\t\t\titems:1
\t\t\t\t},
\t\t\t\t1200:{
\t\t\t\t\titems:1
\t\t\t\t}
\t\t\t}
\t\t});
\t</script>
</section>";
    }

    public function getTemplateName()
    {
        return "glow01/template/extension/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 50,  139 => 43,  136 => 42,  134 => 41,  129 => 39,  120 => 32,  111 => 28,  106 => 27,  102 => 26,  96 => 25,  91 => 23,  85 => 19,  80 => 18,  71 => 16,  67 => 15,  63 => 14,  55 => 11,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/blogger.twig", "");
    }
}
