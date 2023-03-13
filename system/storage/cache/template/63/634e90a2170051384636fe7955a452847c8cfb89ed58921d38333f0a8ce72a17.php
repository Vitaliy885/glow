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
class __TwigTemplate_999ed13e961aecfed2caab51cfdd4fa036b243c29ea3f960384e3b55e3849489 extends \Twig\Template
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
            <div class=\"block_contact col-lg-3 col-md-3 col-sm-12\">
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
          <section class=\"company col-lg-2 col-md-2 col-sm-12 footer-block\">
            <h5 class=\"hidden-sm hidden-xs\">";
        // line 52
        echo ($context["text_company"] ?? null);
        echo "</h5>
            <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#company-container\" data-toggle=\"collapse\">
              <span class=\"h3\">";
        // line 54
        echo ($context["text_company"] ?? null);
        echo "</span>
              <span class=\"navbar-toggler collapse-icons\">
                <i class=\"fa fa-angle-down add\"></i>
                <i class=\"fa fa-angle-up remove\"></i>
              </span>
            </div>
            <div id=\"company-container\" class=\"collapse footer-dropdown\">
              <ul class=\"list-unstyled\">
                <li><a href=\"";
        // line 62
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_myaccount"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 63
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 64
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 65
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 66
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
              </ul>
            </div>
          </section>
          <section class=\"extras col-lg-2 col-md-2 col-sm-12 footer-block\">
              <h5 class=\"hidden-sm hidden-xs\">";
        // line 71
        echo ($context["text_extra"] ?? null);
        echo "</h5>
              <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#extras-container\" data-toggle=\"collapse\">
                <span class=\"h3\">";
        // line 73
        echo ($context["text_extra"] ?? null);
        echo "</span>
                <span class=\"navbar-toggler collapse-icons\">
                  <i class=\"fa fa-angle-down add\"></i>
                  <i class=\"fa fa-angle-up remove\"></i>
                </span>
              </div>
              <div id=\"extras-container\" class=\"collapse footer-dropdown\">
                <ul class=\"list-unstyled\">
                  <li><a href=\"";
        // line 81
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 82
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 83
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 84
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 85
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
                </ul>
              </div>
          </section>
          <section class=\"account col-lg-2 col-md-2 col-sm-12 footer-block\">
              <h5 class=\"hidden-sm hidden-xs\">";
        // line 90
        echo ($context["text_account"] ?? null);
        echo "</h5>
              <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#account-container\" data-toggle=\"collapse\">
                <span class=\"h3\">";
        // line 92
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
        // line 100
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 101
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 102
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 103
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 104
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
                </ul>
              </div>
          </section>  
              ";
        // line 108
        echo ($context["footerbefore"] ?? null);
        echo " 
          <div id=\"_mobile_newsletter\"></div>
          <div class=\"footer-right col-lg-4 col-md-4 col-sm-12\">
            <div class=\"account footer-block\">
              <div class=\"wrapper linkblock\">
                <h5 class=\"hidden-sm hidden-xs\">";
        // line 113
        echo ($context["text_account"] ?? null);
        echo "</h5>
                <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#account-container\" data-toggle=\"collapse\">
                  <span class=\"h3\">";
        // line 115
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
        // line 123
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 125
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 127
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 129
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 131
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 133
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 135
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 137
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 139
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
        // line 146
        echo ($context["footermiddle"] ?? null);
        echo "
        </div>
      </div>
    </div>
    <div class=\"footer-after\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"row\">
          ";
        // line 153
        echo ($context["footerafter"] ?? null);
        echo "
        </div>
      </div>
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-aftertext\">
        <p>";
        // line 157
        echo ($context["powered"] ?? null);
        echo "</p>
       </div>
    </div>
    <a id=\"slidetop\" href=\"#\" ></a>
</footer>
";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 163
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
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
        return array (  412 => 165,  403 => 163,  399 => 162,  391 => 157,  384 => 153,  374 => 146,  362 => 139,  355 => 137,  348 => 135,  341 => 133,  334 => 131,  327 => 129,  320 => 127,  313 => 125,  306 => 123,  295 => 115,  290 => 113,  282 => 108,  273 => 104,  267 => 103,  261 => 102,  255 => 101,  249 => 100,  238 => 92,  233 => 90,  223 => 85,  217 => 84,  211 => 83,  205 => 82,  199 => 81,  188 => 73,  183 => 71,  173 => 66,  167 => 65,  161 => 64,  155 => 63,  149 => 62,  138 => 54,  133 => 52,  125 => 46,  118 => 42,  114 => 41,  109 => 38,  107 => 37,  104 => 36,  95 => 33,  91 => 32,  86 => 29,  84 => 28,  81 => 27,  74 => 24,  70 => 23,  65 => 20,  63 => 19,  51 => 10,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/common/footer.twig", "");
    }
}
