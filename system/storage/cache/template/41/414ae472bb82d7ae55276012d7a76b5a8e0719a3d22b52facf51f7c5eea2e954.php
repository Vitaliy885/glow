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

/* fabulous/template/common/search.twig */
class __TwigTemplate_98381d219abfa07a0fd32957ea4dd51092486ba1b7713114fc631e88c20c0f64 extends \Twig\Template
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
        echo "<div id=\"search\" class=\"input-group\">
  <input id=\"ajax-search-text\" type=\"text\" name=\"search\" value=\"";
        // line 2
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control input-lg\" />
  <div class=\"ajaxishi-search\" style=\"display: none;\"><ul></ul></div>
  <span class=\"input-group-btn\">
    <button id=\"ajax-search-btn\" type=\"button\" class=\"btn btn-default btn-lg\">
      <div class=\"btn-text\">";
        // line 6
        echo ($context["text_btn"] ?? null);
        echo "</div>
      <i class=\"fa fa-search\"></i>
    </button>
  </span>
</div>

<script>
    (function() {
        document.getElementById('ajax-search-text').addEventListener('keypress', function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                document.getElementById('ajax-search-btn').click();
            }
        });
    }());
</script>";
    }

    public function getTemplateName()
    {
        return "fabulous/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/common/search.twig", "");
    }
}
