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
class __TwigTemplate_8dfcef5b27120f0ff3ade1e34e95e2a97f454eda4f01444f60deaf19c806cf6a extends \Twig\Template
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
    <div class=\"row\">
        ";
        // line 3
        if ((($context["showtitle"] ?? null) == 1)) {
            // line 4
            echo "            <div class=\"subtitle\">";
            echo ($context["subtitle"] ?? null);
            echo "</div>
            <h3 class=\"home-title\">";
            // line 5
            echo ($context["title"] ?? null);
            echo "</h3>
        ";
        }
        // line 7
        echo "        <div class=\"ishiservices\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishiservices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishiservice"]) {
            // line 9
            echo "                <div class=\"services ";
            echo ($context["class"] ?? null);
            echo "\">
                    <div class=\"services-part\">
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
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishiservice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
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
        return array (  90 => 23,  78 => 17,  74 => 16,  68 => 13,  60 => 9,  56 => 8,  53 => 7,  48 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/ishiservicesblock.twig", "");
    }
}
