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
class __TwigTemplate_65ff018c7c778208f11224e41e9f2ca827e8e2c83b22de9df935fe387ffd19aa extends \Twig\Template
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
        echo "<section class=\"smartblog_block col-lg-6 col-md-12 col-sm-12 col-xs-12\">
\t<div class=\"blog-title\">
\t\t<div class=\"subtitle\">";
        // line 3
        echo ($context["subtitle"] ?? null);
        echo "</div>
\t\t<h3 class=\"home-title\">";
        // line 4
        echo ($context["heading"] ?? null);
        echo "</h3>
\t</div>
\t<div id=\"smartblog-carousel\" class=\"owl-carousel\">
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            echo "\t\t\t
\t\t\t<div class=\"blog_post item\">
\t\t\t\t<div class=\"news_module_image_holder col-lg-4 col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 10)) {
                echo " 
\t\t\t\t\t\t<a href=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 11);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 12);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"blogicons icon readmore_link\" title=\"Click to view Read More \" href=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 14);
                echo "\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t";
            }
            // line 15
            echo " 
\t\t\t\t</div>
\t\t\t\t<div class=\"blog_content col-lg-8 col-md-8 col-sm-6 col-xs-12\">\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"blog_date\">
\t\t\t\t\t\t<span class=\"date_month\">";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 19);
            echo "</span>
\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t<h4 class=\"blog_title\"><a href=\"";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 21);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 21);
            echo "</a> </h4>\t
\t\t\t\t\t";
            // line 22
            if ((($context["desc"] ?? null) == 1)) {
                echo "\t\t\t\t\t
\t\t\t\t\t\t<div class=\"blog-desc\"> ";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 23);
                echo " </div>\t
\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t</div>
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
        return array (  116 => 28,  107 => 24,  102 => 23,  98 => 22,  92 => 21,  87 => 19,  81 => 15,  76 => 14,  67 => 12,  63 => 11,  59 => 10,  51 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/blogger.twig", "");
    }
}
