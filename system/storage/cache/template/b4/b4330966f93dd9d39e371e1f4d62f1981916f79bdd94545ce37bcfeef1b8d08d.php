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

/* fabulous01/template/extension/module/ishibannerblock.twig */
class __TwigTemplate_bf21095e4064df6d4526ce1201a302b508e0110347d23fe930dcdfccdb1f2021 extends \Twig\Template
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
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"ishibannerblock ";
        echo ($context["bannerclass"] ?? null);
        echo "\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 3
            echo "\t\t<div class=\"bannerblock ";
            echo ($context["column_class"] ?? null);
            echo "\">
\t\t\t<div class=\"image-container\">
\t\t\t\t<a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5);
            echo "\" class=\"";
            echo ($context["style"] ?? null);
            echo " ";
            echo ($context["scale"] ?? null);
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 6);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 6);
            echo "\" class=\"img-responsive\">  
\t\t\t\t</a>
\t\t\t</div>
\t\t\t";
            // line 9
            if ((twig_get_attribute($this->env, $this->source, $context["banner"], "showtext", [], "any", false, false, false, 9) == 1)) {
                echo "\t
\t\t\t\t<div class=\"banner-data\">
\t\t\t\t\t";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "\t\t\t\t\t\t<div class=\"banner-title\">";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 12);
                    echo "</div>
\t\t\t\t\t";
                }
                // line 14
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "subtitle", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "\t\t\t\t\t\t<div class=\"banner-subtitle\">";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "subtitle", [], "any", false, false, false, 15);
                    echo "</div>
\t\t\t\t\t";
                }
                // line 17
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "button_name", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 18);
                    echo "\" class=\"banner-btn btn-primary\">";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "button_name", [], "any", false, false, false, 18);
                    echo "</a>
\t\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 22
            echo "\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "fabulous01/template/extension/module/ishibannerblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 24,  107 => 22,  103 => 20,  95 => 18,  92 => 17,  86 => 15,  83 => 14,  77 => 12,  75 => 11,  70 => 9,  62 => 6,  54 => 5,  48 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous01/template/extension/module/ishibannerblock.twig", "");
    }
}
