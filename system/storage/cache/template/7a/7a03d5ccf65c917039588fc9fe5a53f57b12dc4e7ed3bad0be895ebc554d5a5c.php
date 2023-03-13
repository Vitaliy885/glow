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
class __TwigTemplate_217aa09403071eb0c50121ce6c45da198f71b500394d19bb0c0bc7efbd2351a8 extends \Twig\Template
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
            <div class=\"banner-left col-md-6 col-sm-12 col-xs-12\">
                <div class=\"img-container\">
                    <img src=\" ";
        // line 12
        echo ($context["bgimage"] ?? null);
        echo " \" alt=\"story-img\" />
                </div>
            </div>
            <div class=\"features-right col-md-6 col-sm-12 col-xs-12\">
                <div class=\"row\">
                    <div class=\"ishifeatures\">
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishiservices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishiservice"]) {
            // line 19
            echo "                            <div class=\"features ";
            echo ($context["class"] ?? null);
            echo "\">
                                <a href=\"#\">
                                    <div class=\"features-img\">
                                        <span style=\"background-image: url(";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "image", [], "any", false, false, false, 22);
            echo ");\"></span>
                                    </div>
                                    <div class=\"features-block\">
                                        <div class=\"features-title\">";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "title", [], "any", false, false, false, 25);
            echo "</div>
                                        <div class=\"features-desc\">";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "description", [], "any", false, false, false, 26);
            echo "</div>
                                    </div>
                                </a>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishiservice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
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
        return array (  101 => 31,  90 => 26,  86 => 25,  80 => 22,  73 => 19,  69 => 18,  60 => 12,  55 => 9,  50 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishifeatureblock.twig", "");
    }
}
