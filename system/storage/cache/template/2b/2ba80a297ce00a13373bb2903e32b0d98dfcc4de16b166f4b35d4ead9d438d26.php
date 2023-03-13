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

/* fabulous/template/common/footer.twig */
class __TwigTemplate_920296e7e845476c79266ac82cf150b325c4076932421c61a41066fb55636449 extends \Twig\Template
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
        echo "<div id=\"_mobile_column_left\" class=\"container\"></div>
<div id=\"_mobile_column_right\" class=\"container\"></div>
<footer id=\"footer\" class=\"";
        // line 3
        echo ($context["ishome"] ?? null);
        echo "\">
    <div class=\"footer-before\">
      <div class=\"container\">
        <div class=\"row\">
          <div id=\"_desktop_contact\">       
            <div class=\"block_contact col-lg-4 col-md-4 col-sm-12\">
              <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#contact-info-container\" data-toggle=\"collapse\">
                <span class=\"h3\">";
        // line 10
        echo ($context["text_storeinformation"] ?? null);
        echo "</span>
                <span class=\"navbar-toggler collapse-icons\">
                  <i class=\"fa fa-angle-down add\"></i>
                  <i class=\"fa fa-angle-up remove\"></i>
                </span>
              </div>
              <div id=\"contact-info-container\" class=\"collapse footer-dropdown\">
                <div class=\"block-contact\"> 
                  <div class=\"row\">
                   ";
        // line 19
        if (($context["storetelephone"] ?? null)) {
            // line 20
            echo "                    <div class=\"block phone col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                      <span class=\"icon\"><i class=\"fa fa-phone\"></i></span>
                      <div class=\"content\">
                        <div class=\"phone-title hidden-md-down\">";
            // line 23
            echo ($context["text_contact"] ?? null);
            echo "</div>
                        <a href=\"#\">";
            // line 24
            echo ($context["storetelephone"] ?? null);
            echo "</a>
                      </div>
                    </div>
                    ";
        }
        // line 27
        echo " 
                    ";
        // line 28
        if (($context["storeemail"] ?? null)) {
            // line 29
            echo "                    <div class=\"block email col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                      <span class=\"icon\"><i class=\"fa fa-envelope\"></i></span>
                      <div class=\"content\">
                        <div class=\"email-title hidden-md-down\">";
            // line 32
            echo ($context["text_email"] ?? null);
            echo "</div>
                        <a href=\"mailto:";
            // line 33
            echo ($context["storeemail"] ?? null);
            echo "\">";
            echo ($context["storeemail"] ?? null);
            echo "</a>
                      </div>
                    </div>
                    ";
        }
        // line 36
        echo " 
                    ";
        // line 37
        if (($context["storeaddress"] ?? null)) {
            // line 38
            echo "                    <div class=\"block address col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                      <span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span>
                      <div class=\"content\"> 
                        <div class=\"address-title hidden-md-down\">";
            // line 41
            echo ($context["text_address"] ?? null);
            echo "</div> 
                        <a>";
            // line 42
            echo ($context["storeaddress"] ?? null);
            echo "</a>
                      </div>
                    </div>
                    ";
        }
        // line 46
        echo "                  </div>
                </div>
              </div>
            </div>  
          </div> 
              ";
        // line 51
        echo ($context["footerbefore"] ?? null);
        echo " 
          <div id=\"_mobile_newsletter\"></div>
          <div class=\"footer-right col-lg-4 col-md-4 col-sm-12\">
            <div class=\"account footer-block\">
              <div class=\"wrapper linkblock\">
                <h5 class=\"hidden-sm hidden-xs\">";
        // line 56
        echo ($context["text_account"] ?? null);
        echo "</h5>
                <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#account-container\" data-toggle=\"collapse\">
                  <span class=\"h3\">";
        // line 58
        echo ($context["text_account"] ?? null);
        echo "</span>
                  <span class=\"navbar-toggler collapse-icons\">
                    <i class=\"fa fa-angle-down add\"></i>
                    <i class=\"fa fa-angle-up remove\"></i>
                  </span>
                </div>
                <div id=\"account-container\" class=\"collapse footer-dropdown\">
                  <ul class=\"list-unstyled\">
                    <li><a href=\"";
        // line 66
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 68
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 70
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 72
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 74
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 76
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 78
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 80
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 82
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>  
                  </ul>
                </div>
              </div>  
            </div>
            <div id=\"_mobile_contact\">
          </div>    
          ";
        // line 89
        echo ($context["footermiddle"] ?? null);
        echo "
        </div>
      </div>
    </div>
    <div class=\"footer-after\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"row\">
          ";
        // line 96
        echo ($context["footerafter"] ?? null);
        echo "
        </div>
      </div>
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-aftertext\">
        <p>";
        // line 100
        echo ($context["powered"] ?? null);
        echo "</p>
       </div>
    </div>
    <a id=\"slidetop\" href=\"#\" ></a>
</footer>
";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 106
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "fabulous/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 108,  253 => 106,  249 => 105,  241 => 100,  234 => 96,  224 => 89,  212 => 82,  205 => 80,  198 => 78,  191 => 76,  184 => 74,  177 => 72,  170 => 70,  163 => 68,  156 => 66,  145 => 58,  140 => 56,  132 => 51,  125 => 46,  118 => 42,  114 => 41,  109 => 38,  107 => 37,  104 => 36,  95 => 33,  91 => 32,  86 => 29,  84 => 28,  81 => 27,  74 => 24,  70 => 23,  65 => 20,  63 => 19,  51 => 10,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/common/footer.twig", "");
    }
}
