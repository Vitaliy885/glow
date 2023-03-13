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
class __TwigTemplate_272ca022bfea7f4e8933ca687e0337bb8e6ce4087c65a05f7c75dff94c7588ae extends \Twig\Template
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
\t<div class=\"blog-content col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"blog-title\">
\t\t\t\t\t<div class=\"subtitle\">";
        // line 6
        echo ($context["subtitle"] ?? null);
        echo "</div>
\t\t\t\t\t<h3 class=\"home-title\">";
        // line 7
        echo ($context["heading"] ?? null);
        echo "</h3>
\t\t\t\t</div>
\t\t\t\t<div id=\"smartblog-carousel\" class=\"owl-carousel\">
\t\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            echo "\t\t\t
\t\t\t\t\t\t<div class=\"blog_post item\">
\t\t\t\t\t\t\t<div class=\"news_module_image_holder col-lg-4 col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 13)) {
                echo " 
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 14);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 15);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"blogicons icon readmore_link\" title=\"Click to view Read More \" href=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 17);
                echo "\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t";
            }
            // line 18
            echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"blog_content col-lg-8 col-md-8 col-sm-6 col-xs-12\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"blog_date\">
\t\t\t\t\t\t\t\t\t<span class=\"date_month\">";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 22);
            echo "</span>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h4 class=\"blog_title\"><a href=\"";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 24);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 24);
            echo "</a> </h4>\t
\t\t\t\t\t\t\t\t";
            // line 25
            if ((($context["desc"] ?? null) == 1)) {
                echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"blog-desc\"> ";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 26);
                echo " </div>\t
\t\t\t\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"story-video col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t\t<div class=\"story-image\">
\t\t\t<div class=\"img-container\">
\t\t\t\t<img src=\" ";
        // line 38
        echo ($context["bgimage"] ?? null);
        echo " \" alt=\"story-img\" />
\t\t\t</div>
\t\t\t";
        // line 40
        if ((($context["videolink"] ?? null) != ($context["blank"] ?? null))) {
            // line 41
            echo "\t\t\t\t<div class=\"video-play-icon\">
\t\t\t\t\t<a class=\"video\" href=\"";
            // line 42
            echo ($context["videolink"] ?? null);
            echo "\">
\t\t\t\t\t<span class=\"ripple-effect\">
\t\t\t\t\t\t<i class=\"fa fa-play-circle\" aria-hidden=\"true\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t</a> 
\t\t\t\t</div>
\t\t\t";
        }
        // line 49
        echo "\t\t</div>
\t</div>\t

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
        return array (  148 => 49,  138 => 42,  135 => 41,  133 => 40,  128 => 38,  119 => 31,  110 => 27,  105 => 26,  101 => 25,  95 => 24,  90 => 22,  84 => 18,  79 => 17,  70 => 15,  66 => 14,  62 => 13,  54 => 10,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/blogger.twig", "");
    }
}
