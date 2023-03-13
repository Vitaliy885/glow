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
class __TwigTemplate_e5b65a40ae306564b1da6e71a4f0d9316b071f66d43ec1207ffa4b876f43707a extends \Twig\Template
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
        echo "<section class=\"ishiservicesblock col-xs-12 col-sm-12 col-lg-6 col-md-12\">
        ";
        // line 2
        if ((($context["showtitle"] ?? null) == 1)) {
            // line 3
            echo "            <div class=\"subtitle\">";
            echo ($context["subtitle"] ?? null);
            echo "</div>
            <h3 class=\"home-title\">";
            // line 4
            echo ($context["title"] ?? null);
            echo "</h3>
        ";
        }
        // line 6
        echo "        <div class=\"ishiservices\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishiservices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishiservice"]) {
            // line 8
            echo "                <div class=\"services ";
            echo ($context["class"] ?? null);
            echo "\">
                    <div class=\"services-part\">
                        <a href=\"#\">
                            <div class=\"service-img\">
                                <span style=\"background-image: url(";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "image", [], "any", false, false, false, 12);
            echo ");\"></span>
                            </div>
                            <div class=\"service-block\">
                                <div class=\"service-title\">";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "title", [], "any", false, false, false, 15);
            echo "</div>
                                <div class=\"service-desc\">";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "description", [], "any", false, false, false, 16);
            echo "</div>
                            </div>
                        </a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishiservice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </div>
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
        return array (  89 => 22,  77 => 16,  73 => 15,  67 => 12,  59 => 8,  55 => 7,  52 => 6,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/ishiservicesblock.twig", "");
    }
}
