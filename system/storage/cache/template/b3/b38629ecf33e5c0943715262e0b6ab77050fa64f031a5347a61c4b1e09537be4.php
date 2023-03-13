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
class __TwigTemplate_d57fd46e95ccb149a9c2b6197dfb643a08715d925e175dc9c75bde6dc8bfcd6b extends \Twig\Template
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
                ";
        // line 4
        if ((($context["showtitle"] ?? null) == 1)) {
            // line 5
            echo "                    <div class=\"subtitle\">";
            echo ($context["subtitle"] ?? null);
            echo "</div>
                    <h3 class=\"home-title\">";
            // line 6
            echo ($context["title"] ?? null);
            echo "</h3>
                ";
        }
        // line 8
        echo "            <div class=\"ishiservices\">
        \t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishiservices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishiservice"]) {
            // line 10
            echo "                    <div class=\"services ";
            echo ($context["class"] ?? null);
            echo "\">
                        <a href=\"#\">
                            <div class=\"service-img\">
                                <span style=\"background-image: url(";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "image", [], "any", false, false, false, 13);
            echo ");\"></span>
                            </div>
                            <div class=\"service-block\">
                                <div class=\"service-title\">";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "title", [], "any", false, false, false, 16);
            echo "</div>
                                <div class=\"service-desc\">";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "description", [], "any", false, false, false, 17);
            echo "</div>
                            </div>
                        </a>
                    </div>
        \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishiservice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
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
        return array (  89 => 22,  78 => 17,  74 => 16,  68 => 13,  61 => 10,  57 => 9,  54 => 8,  49 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishiservicesblock.twig", "");
    }
}
