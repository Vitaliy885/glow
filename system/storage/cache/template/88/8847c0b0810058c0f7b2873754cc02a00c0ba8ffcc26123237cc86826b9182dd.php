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
class __TwigTemplate_52f6ea0a8819f4a38b543280bc78773811ebf0769a7d08f30f9fd1da7a394059 extends \Twig\Template
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
        echo "<section class=\"ishifeaturesblock clearfix\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"section-header\">
                ";
        // line 5
        if ((($context["showtitle"] ?? null) == 1)) {
            // line 6
            echo "                    <div class=\"subtitle\">";
            echo ($context["subtitle"] ?? null);
            echo "</div>
                    <h3 class=\"home-title\">";
            // line 7
            echo ($context["title"] ?? null);
            echo "</h3>
                ";
        }
        // line 9
        echo "            </div>
            <div class=\"feature-content\">
                <div class=\"banner-left col-md-6 col-sm-12 col-xs-12\">
                    <div class=\"img-container\">
                        <img src=\" ";
        // line 13
        echo ($context["bgimage"] ?? null);
        echo " \" alt=\"story-img\" />
                    </div>
                </div>
                <div class=\"features-right col-md-6 col-sm-12 col-xs-12\">
                    <div class=\"row\">
                        <div class=\"ishifeatures\">
                            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishiservices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishiservice"]) {
            // line 20
            echo "                                <div class=\"features ";
            echo ($context["class"] ?? null);
            echo "\">
                                    <a href=\"#\">
                                        <div class=\"features-img\">
                                            <span style=\"background-image: url(";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "image", [], "any", false, false, false, 23);
            echo ");\"></span>
                                        </div>
                                        <div class=\"features-block\">
                                            <div class=\"features-title\">";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "title", [], "any", false, false, false, 26);
            echo "</div>
                                            <div class=\"features-desc\">";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "description", [], "any", false, false, false, 27);
            echo "</div>
                                        </div>
                                    </a>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishiservice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        </div>
                    </div>
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
        return array (  102 => 32,  91 => 27,  87 => 26,  81 => 23,  74 => 20,  70 => 19,  61 => 13,  55 => 9,  50 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishifeatureblock.twig", "");
    }
}
