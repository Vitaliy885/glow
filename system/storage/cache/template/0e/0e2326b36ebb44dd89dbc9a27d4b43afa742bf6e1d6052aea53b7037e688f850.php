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
class __TwigTemplate_058dca1f8eb6be687e87aa3046cde4333a700e36fb84a777dc37941bf6c24b4d extends \Twig\Template
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
            
            <div class=\"story-image col-lg-7 col-md-6 col-sm-12 col-xs-12\">
                <div class=\"img-container\">
                    <img src=\" ";
        // line 7
        echo ($context["bgimage"] ?? null);
        echo " \" alt=\"story-img\" />
                </div>
            </div>
            <div class=\"ishiservices\">
                ";
        // line 11
        if ((($context["showtitle"] ?? null) == 1)) {
            // line 12
            echo "                    <div class=\"subtitle\">";
            echo ($context["subtitle"] ?? null);
            echo "</div>
                    <h3 class=\"home-title\">";
            // line 13
            echo ($context["title"] ?? null);
            echo "</h3>
                ";
        }
        // line 15
        echo "        \t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishiservices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishiservice"]) {
            // line 16
            echo "                    <div class=\"services ";
            echo ($context["class"] ?? null);
            echo "\">
                        <a href=\"#\">
                            <div class=\"service-img\">
                                <span style=\"background-image: url(";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "image", [], "any", false, false, false, 19);
            echo ");\"></span>
                            </div>
                            <div class=\"service-block\">
                                <div class=\"service-title\">";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "title", [], "any", false, false, false, 22);
            echo "</div>
                                <div class=\"service-desc\">";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "description", [], "any", false, false, false, 23);
            echo "</div>
                            </div>
                        </a>
                    </div>
        \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishiservice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </div>
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
        return array (  99 => 28,  88 => 23,  84 => 22,  78 => 19,  71 => 16,  66 => 15,  61 => 13,  56 => 12,  54 => 11,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishifeatureblock.twig", "");
    }
}
