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

/* fabulous/template/extension/module/ishifeatureblock.twig */
class __TwigTemplate_46210c61f9bb199b27adbb781b81c5abb44547530547e8ef395333a80e35f0af extends \Twig\Template
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
        echo "<section class=\"ishiservicesblock clearfix\" style=\"background: ";
        echo ($context["bg_color"] ?? null);
        echo ";\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 4
        if ((($context["showtitle"] ?? null) == 1)) {
            // line 5
            echo "                <div class=\"subtitle\">";
            echo ($context["subtitle"] ?? null);
            echo "</div>
                <h3 class=\"home-title\">";
            // line 6
            echo ($context["title"] ?? null);
            echo "</h3>
            ";
        }
        // line 8
        echo "            <div class=\"banner-left col-md-6 col-sm-12 col-xs-12\">
                <div class=\"img-container\">
                    <img src=\" ";
        // line 10
        echo ($context["bgimage"] ?? null);
        echo " \" alt=\"story-img\" />
                </div>
            </div>
            <div class=\"features-right col-md-6 col-sm-12 col-xs-12\">
                <div class=\"row\">
                    <div class=\"ishiservices\">
                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishiservices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishiservice"]) {
            // line 17
            echo "                            <div class=\"services ";
            echo ($context["class"] ?? null);
            echo "\">
                                <a href=\"#\">
                                    <div class=\"service-img\">
                                        <span style=\"background-image: url(";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "image", [], "any", false, false, false, 20);
            echo ");\"></span>
                                    </div>
                                    <div class=\"service-block\">
                                        <div class=\"service-title\">";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "title", [], "any", false, false, false, 23);
            echo "</div>
                                        <div class=\"service-desc\">";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "description", [], "any", false, false, false, 24);
            echo "</div>
                                    </div>
                                </a>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishiservice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "fabulous/template/extension/module/ishifeatureblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  90 => 24,  86 => 23,  80 => 20,  73 => 17,  69 => 16,  60 => 10,  56 => 8,  51 => 6,  46 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishifeatureblock.twig", "");
    }
}
