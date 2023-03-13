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

/* glow01/template/common/footer.twig */
class __TwigTemplate_e0b615e555c2526ca18cf63cf99e1926a03e0373c61dbe57d930421c8b039109 extends \Twig\Template
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
          <div id=\"_mobile_newsletter\"></div>
          <div id=\"_mobile_block-social\"></div>
          <div id=\"_desktop_contact\">       
            <div class=\"block_contact col-lg-4 col-md-4 col-sm-12\">
              <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#contact-info-container\" data-toggle=\"collapse\">
                <span class=\"h3\">";
        // line 12
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
        // line 21
        if (($context["storetelephone"] ?? null)) {
            // line 22
            echo "                    <div class=\"block phone col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                      <span class=\"icon\"><i class=\"fa fa-phone\"></i></span>
                      <div class=\"content\">
                        <div class=\"phone-title hidden-md-down\">";
            // line 25
            echo ($context["text_contact"] ?? null);
            echo "</div>
                        <a href=\"#\">";
            // line 26
            echo ($context["storetelephone"] ?? null);
            echo "</a>
                      </div>
                    </div>
                    ";
        }
        // line 29
        echo " 
                    ";
        // line 30
        if (($context["storeemail"] ?? null)) {
            // line 31
            echo "                    <div class=\"block email col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                      <span class=\"icon\"><i class=\"fa fa-envelope\"></i></span>
                      <div class=\"content\">
                        <div class=\"email-title hidden-md-down\">";
            // line 34
            echo ($context["text_email"] ?? null);
            echo "</div>
                        <a href=\"mailto:";
            // line 35
            echo ($context["storeemail"] ?? null);
            echo "\">";
            echo ($context["storeemail"] ?? null);
            echo "</a>
                      </div>
                    </div>
                    ";
        }
        // line 38
        echo " 
                    ";
        // line 39
        if (($context["storeaddress"] ?? null)) {
            // line 40
            echo "                    <div class=\"block address col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                      <span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span>
                      <div class=\"content\"> 
                        <div class=\"address-title hidden-md-down\">";
            // line 43
            echo ($context["text_address"] ?? null);
            echo "</div> 
                        <a>";
            // line 44
            echo ($context["storeaddress"] ?? null);
            echo "</a>
                      </div>
                    </div>
                    ";
        }
        // line 48
        echo "                  </div>
                </div>
              </div>
            </div>  
          </div>
          <section class=\"company col-lg-2 col-md-2 col-sm-12 footer-block\">
            <h5 class=\"hidden-sm hidden-xs\">";
        // line 54
        echo ($context["text_company"] ?? null);
        echo "</h5>
            <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#company-container\" data-toggle=\"collapse\">
              <span class=\"h3\">";
        // line 56
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
        // line 64
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_myaccount"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 65
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 66
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 67
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 68
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
              </ul>
            </div>
          </section>
          <section class=\"extras col-lg-2 col-md-2 col-sm-12 footer-block\">
              <h5 class=\"hidden-sm hidden-xs\">";
        // line 73
        echo ($context["text_extra"] ?? null);
        echo "</h5>
              <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#extras-container\" data-toggle=\"collapse\">
                <span class=\"h3\">";
        // line 75
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
        // line 83
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 84
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 85
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 86
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 87
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
                </ul>
              </div>
          </section>
          <section class=\"account col-lg-2 col-md-2 col-sm-12 footer-block\">
              <h5 class=\"hidden-sm hidden-xs\">";
        // line 92
        echo ($context["text_account"] ?? null);
        echo "</h5>
              <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#account-container\" data-toggle=\"collapse\">
                <span class=\"h3\">";
        // line 94
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
        // line 102
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 103
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 104
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 105
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 106
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
                </ul>
              </div>
          </section>  
          ";
        // line 110
        echo ($context["footermiddle"] ?? null);
        echo "
        </div>
      </div>
    </div>
    <div class=\"footer-after\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-aftertext\">
            <p>";
        // line 118
        echo ($context["powered"] ?? null);
        echo "</p>
           </div>
          <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
              ";
        // line 121
        echo ($context["footerafter"] ?? null);
        echo "
          </div>
        </div>
      </div>
    </div>
    <a id=\"slidetop\" href=\"#\" ></a>
</footer>
";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 129
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "glow01/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 131,  315 => 129,  311 => 128,  301 => 121,  295 => 118,  284 => 110,  275 => 106,  269 => 105,  263 => 104,  257 => 103,  251 => 102,  240 => 94,  235 => 92,  225 => 87,  219 => 86,  213 => 85,  207 => 84,  201 => 83,  190 => 75,  185 => 73,  175 => 68,  169 => 67,  163 => 66,  157 => 65,  151 => 64,  140 => 56,  135 => 54,  127 => 48,  120 => 44,  116 => 43,  111 => 40,  109 => 39,  106 => 38,  97 => 35,  93 => 34,  88 => 31,  86 => 30,  83 => 29,  76 => 26,  72 => 25,  67 => 22,  65 => 21,  53 => 12,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/common/footer.twig", "");
    }
}
