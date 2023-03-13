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
class __TwigTemplate_84392ec6dcd79449a34747ce23c32f5e9eca58bb31d052787f8293d885ce1894 extends \Twig\Template
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
\t<div class=\"story-video col-lg-6 col-md-12 col-sm-12 col-xs-12\">
\t\t<div class=\"story-image\">
\t\t\t<div class=\"img-container\">
\t\t\t\t<img src=\" ";
        // line 5
        echo ($context["bgimage"] ?? null);
        echo " \" alt=\"story-img\" />
\t\t\t</div>
\t\t\t";
        // line 7
        if ((($context["videolink"] ?? null) != ($context["blank"] ?? null))) {
            // line 8
            echo "\t\t\t\t<div class=\"video-play-icon\">
\t\t\t\t\t<a class=\"video\" href=\"";
            // line 9
            echo ($context["videolink"] ?? null);
            echo "\">
\t\t\t\t\t<span class=\"ripple-effect\">
\t\t\t\t\t\t<i class=\"fa fa-play-circle\" aria-hidden=\"true\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t</a> 
\t\t\t\t</div>
\t\t\t";
        }
        // line 16
        echo "\t\t</div>
\t</div>
\t<div class=\"blog-content col-lg-6 col-md-12 col-sm-12 col-xs-12\">
\t\t<div class=\"demo\" data-source-url=\"";
        // line 19
        echo ($context["bg_image"] ?? null);
        echo "\" style=\"background-image:";
        echo ($context["bg_image"] ?? null);
        echo ";\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"blog-title\">
\t\t\t\t\t\t<div class=\"subtitle\">";
        // line 23
        echo ($context["subtitle"] ?? null);
        echo "</div>
\t\t\t\t\t\t<h3 class=\"home-title\">";
        // line 24
        echo ($context["heading"] ?? null);
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"smartblog-carousel\" class=\"owl-carousel\">
\t\t\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            echo "\t\t\t
\t\t\t\t\t\t\t<div class=\"blog_post item\">
\t\t\t\t\t\t\t\t<div class=\"news_module_image_holder col-lg-4 col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 30)) {
                echo " 
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 31);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 32);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"blogicons icon readmore_link\" title=\"Click to view Read More \" href=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 34);
                echo "\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 35
            echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog_content col-lg-8 col-md-8 col-sm-6 col-xs-12\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"blog_date\">
\t\t\t\t\t\t\t\t\t\t<span class=\"date_month\">";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 39);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<h4 class=\"blog_title\"><a href=\"";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 41);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 41);
            echo "</a> </h4>\t
\t\t\t\t\t\t\t\t\t";
            // line 42
            if ((($context["desc"] ?? null) == 1)) {
                echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-desc\"> ";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 43);
                echo " </div>\t
\t\t\t\t\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<style>
\t\t\t.blog-content{
\t\t\t\tbackground-color: ";
        // line 54
        echo ($context["bgcolor"] ?? null);
        echo ";
\t\t\t}
\t\t</style>
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
        return array (  160 => 54,  152 => 48,  143 => 44,  138 => 43,  134 => 42,  128 => 41,  123 => 39,  117 => 35,  112 => 34,  103 => 32,  99 => 31,  95 => 30,  87 => 27,  81 => 24,  77 => 23,  68 => 19,  63 => 16,  53 => 9,  50 => 8,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/blogger.twig", "");
    }
}
