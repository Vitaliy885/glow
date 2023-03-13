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

/* fabulous/template/extension/module/ishiservicesblock.twig */
class __TwigTemplate_7e931a85036fd71d5a808de0fb7cca13a601afc603e91ec0efcf9d8a83de6268 extends \Twig\Template
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
        echo "<section class=\"ishiservicesblock clearfix\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"story-image col-lg-7 col-md-6 col-sm-12 col-xs-12\">
                <div class=\"img-container\">
                    <img src=\" ";
        // line 6
        echo ($context["bgimage"] ?? null);
        echo " \" alt=\"story-img\" />
                </div>
            </div>
                ";
        // line 9
        if ((($context["showtitle"] ?? null) == 1)) {
            // line 10
            echo "                    <div class=\"subtitle\">";
            echo ($context["subtitle"] ?? null);
            echo "</div>
                    <h3 class=\"home-title\">";
            // line 11
            echo ($context["title"] ?? null);
            echo "</h3>
                ";
        }
        // line 13
        echo "            <div class=\"ishiservices\">
        \t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishiservices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishiservice"]) {
            // line 15
            echo "                    <div class=\"services ";
            echo ($context["class"] ?? null);
            echo "\">
                        <a href=\"#\">
                            <div class=\"service-img\">
                                <span style=\"background-image: url(";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "image", [], "any", false, false, false, 18);
            echo ");\"></span>
                            </div>
                            <div class=\"service-block\">
                                <div class=\"service-title\">";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "title", [], "any", false, false, false, 21);
            echo "</div>
                                <div class=\"service-desc\">";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "description", [], "any", false, false, false, 22);
            echo "</div>
                            </div>
                        </a>
                    </div>
        \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishiservice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "fabulous/template/extension/module/ishiservicesblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  86 => 22,  82 => 21,  76 => 18,  69 => 15,  65 => 14,  62 => 13,  57 => 11,  52 => 10,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishiservicesblock.twig", "");
    }
}
