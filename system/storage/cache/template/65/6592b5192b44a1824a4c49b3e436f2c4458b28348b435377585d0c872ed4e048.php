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

/* fabulous01/template/common/language.twig */
class __TwigTemplate_7a8a7eabb554d53957c67848bf5f5f593f6ffb983f7fd7a45b43bc0fdf5563aa extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 2
            echo "  <form action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
    <div class=\"btn-group dropdown\">
      <span class=\"language-selector-label\">";
            // line 4
            echo ($context["text_language"] ?? null);
            echo " :</span>
      <a title=\"";
            // line 5
            echo ($context["text_language"] ?? null);
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"expand-more\">";
            // line 6
            echo ($context["text_language"] ?? null);
            echo "</span> <i class=\"fa fa-angle-down\"></i>
      </a>
      <ul class=\"dropdown-menu\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 10
                echo "        <li>
          <img src=\"catalog/language/";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 11);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 11);
                echo ".png\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 11);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 11);
                echo "\" /> 
          <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 12);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 12);
                echo "</button>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 18
            echo ($context["redirect"] ?? null);
            echo "\" />
  </form>
";
        }
    }

    public function getTemplateName()
    {
        return "fabulous01/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 18,  87 => 15,  76 => 12,  66 => 11,  63 => 10,  59 => 9,  53 => 6,  49 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous01/template/common/language.twig", "");
    }
}
