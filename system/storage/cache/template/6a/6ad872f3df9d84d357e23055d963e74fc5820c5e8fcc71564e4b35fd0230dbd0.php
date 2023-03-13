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
class __TwigTemplate_cb1d31013457ec4d11653b4d246bfe957a6ee7aa45886dee5d26c7927ed87cbb extends \Twig\Template
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
        echo "<section class=\"smartblog_block\">
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
\t\t\t\t<div class=\"news_module_image_holder\">
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
\t\t\t\t\t\t</a>\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"blog_date\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i> <span class=\"date_month\">";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 15);
                echo "</span>
\t\t\t\t\t\t\t<i class=\"fa fa-comments\"></i> <span class=\"write-comment-count\">";
                // line 16
                echo ($context["entry_comment"] ?? null);
                echo "</span>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<a class=\"blogicons icon readmore_link\" title=\"Click to view Read More \" href=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 18);
                echo "\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t";
            }
            // line 19
            echo " 
\t\t\t\t</div>
\t\t\t\t<div class=\"blog_content\">\t\t\t\t\t
\t\t\t\t\t<h4 class=\"blog_title\"><a href=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 22);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 22);
            echo "</a> </h4>\t
\t\t\t\t\t";
            // line 23
            if ((($context["desc"] ?? null) == 1)) {
                echo "\t\t\t\t\t
\t\t\t\t\t\t<div class=\"blog-desc\"> ";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 24);
                echo " </div>\t
\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
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
        return array (  120 => 29,  111 => 25,  106 => 24,  102 => 23,  96 => 22,  91 => 19,  86 => 18,  81 => 16,  77 => 15,  67 => 12,  63 => 11,  59 => 10,  51 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/blogger.twig", "");
    }
}
