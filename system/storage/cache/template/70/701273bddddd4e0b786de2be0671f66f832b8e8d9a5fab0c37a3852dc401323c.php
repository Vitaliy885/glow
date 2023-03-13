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
class __TwigTemplate_f30a9e82dd12f91ecd4551d2d50932fdd16c4c00a7f6d5bd1e0b20d9e7b5b9cf extends \Twig\Template
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
          <div class=\"footermiddle col-lg-4 col-md-4 col-sm-12\">
            <div class=\"ishistoreinfoblock col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                <div id=\"ishistoreinfo-container\" class=\"ishistoreinfo-inner\">
                  <a href=\"";
        // line 54
        echo ($context["storehome"] ?? null);
        echo "\" class=\"store-logo\">
                  <img src=\"";
        // line 55
        echo ($context["footerlogo"] ?? null);
        echo "\" alt=\"footer-logo\">
                  </a>
                  <div class=\"store-description\">
                    <p>";
        // line 58
        echo ($context["storecomment"] ?? null);
        echo "</p>
                  </div>
                </div>
            </div>
            ";
        // line 62
        echo ($context["footermiddle"] ?? null);
        echo "
            <div id=\"_mobile_contact\"></div>
          </div>
          <section class=\"account col-lg-4 col-md-4 col-sm-12 footer-block\">
              <h5 class=\"hidden-sm hidden-xs\">";
        // line 66
        echo ($context["text_account"] ?? null);
        echo "</h5>
              <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#account-container\" data-toggle=\"collapse\">
                <span class=\"h3\">";
        // line 68
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
        // line 76
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 77
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 78
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 79
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 80
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
                </ul>
              </div>
          </section>  
        </div>
      </div>
    </div>
    <div class=\"footer-after\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-aftertext\">
            <p>";
        // line 91
        echo ($context["powered"] ?? null);
        echo "</p>
           </div>
          <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
              ";
        // line 94
        echo ($context["footerafter"] ?? null);
        echo "
          </div>
        </div>
      </div>
    </div>
    <a id=\"slidetop\" href=\"#\" ></a>
</footer>
";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 102
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
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
        return array (  244 => 104,  235 => 102,  231 => 101,  221 => 94,  215 => 91,  199 => 80,  193 => 79,  187 => 78,  181 => 77,  175 => 76,  164 => 68,  159 => 66,  152 => 62,  145 => 58,  139 => 55,  135 => 54,  125 => 46,  118 => 42,  114 => 41,  109 => 38,  107 => 37,  104 => 36,  95 => 33,  91 => 32,  86 => 29,  84 => 28,  81 => 27,  74 => 24,  70 => 23,  65 => 20,  63 => 19,  51 => 10,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/common/footer.twig", "");
    }
}
