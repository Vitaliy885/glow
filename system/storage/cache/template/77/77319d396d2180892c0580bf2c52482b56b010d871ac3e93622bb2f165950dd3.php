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

/* glow01/template/extension/module/ishiservicesblock.twig */
class __TwigTemplate_0cb475f50aaf4bbc1f99860e64f9b7ec36d90de714de5cb4c94529d325c7aa68 extends \Twig\Template
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
                <div class=\"section-header\">
                    ";
        // line 5
        if ((($context["showtitle"] ?? null) == 1)) {
            // line 6
            echo "                        <div class=\"subtitle\">";
            echo ($context["subtitle"] ?? null);
            echo "</div>
                        <h3 class=\"home-title\">";
            // line 7
            echo ($context["title"] ?? null);
            echo "</h3>
                    ";
        }
        // line 9
        echo "                </div>
            <div class=\"ishiservices\">
        \t\t";
        // line 11
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
        return "glow01/template/extension/module/ishiservicesblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  80 => 19,  76 => 18,  70 => 15,  63 => 12,  59 => 11,  55 => 9,  50 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/ishiservicesblock.twig", "");
    }
}
