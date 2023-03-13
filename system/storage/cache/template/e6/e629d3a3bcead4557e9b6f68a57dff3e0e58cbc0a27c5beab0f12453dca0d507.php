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
class __TwigTemplate_60a6fdd16e2f0fcae4db3295b8fde8ad1ee34e95073fbccc55b1869aa83f9ad0 extends \Twig\Template
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
            <div class=\"subtitle\">";
        // line 4
        echo ($context["subtitle"] ?? null);
        echo "</div>
            <h3 class=\"home-title\">";
        // line 5
        echo ($context["heading"] ?? null);
        echo "</h3>
            <div class=\"ishiservices\">
        \t\t";
        // line 7
        if ((($context["showtitle"] ?? null) == 1)) {
            // line 8
            echo "                    <div class=\"subtitle\">";
            echo ($context["subtitle"] ?? null);
            echo "</div>
        \t\t\t<h3 class=\"home-title\">";
            // line 9
            echo ($context["title"] ?? null);
            echo "</h3>
        \t\t";
        }
        // line 11
        echo "        \t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishiservices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishiservice"]) {
            // line 12
            echo "                    <div class=\"services ";
            echo ($context["class"] ?? null);
            echo "\">
                        <a href=\"#\">
                            <div class=\"service-img\">
                                <span style=\"background-image: url(";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "image", [], "any", false, false, false, 15);
            echo ");\"></span>
                            </div>
                            <div class=\"service-block\">
                                <div class=\"service-title\">";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "title", [], "any", false, false, false, 18);
            echo "</div>
                                <div class=\"service-desc\">";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "description", [], "any", false, false, false, 19);
            echo "</div>
                            </div>
                        </a>
                    </div>
        \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishiservice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
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
        return array (  98 => 24,  87 => 19,  83 => 18,  77 => 15,  70 => 12,  65 => 11,  60 => 9,  55 => 8,  53 => 7,  48 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishiservicesblock.twig", "");
    }
}
