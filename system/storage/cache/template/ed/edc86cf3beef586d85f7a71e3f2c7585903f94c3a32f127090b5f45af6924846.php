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
class __TwigTemplate_d5f7f7612dc10cf4327cfd2faa950dd1f0d1c06893cd7e5b3e03fb223749c6f1 extends \Twig\Template
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
          ";
        // line 53
        echo ($context["footermiddle"] ?? null);
        echo "
          <section class=\"account col-lg-4 col-md-4 col-sm-12 footer-block\">
              <h5 class=\"hidden-sm hidden-xs\">";
        // line 55
        echo ($context["text_account"] ?? null);
        echo "</h5>
              <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#account-container\" data-toggle=\"collapse\">
                <span class=\"h3\">";
        // line 57
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
        // line 65
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 66
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 67
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 68
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 69
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
        // line 80
        echo ($context["powered"] ?? null);
        echo "</p>
           </div>
          <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
              ";
        // line 83
        echo ($context["footerafter"] ?? null);
        echo "
          </div>
        </div>
      </div>
    </div>
    <a id=\"slidetop\" href=\"#\" ></a>
</footer>
";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 91
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
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
        return array (  224 => 93,  215 => 91,  211 => 90,  201 => 83,  195 => 80,  179 => 69,  173 => 68,  167 => 67,  161 => 66,  155 => 65,  144 => 57,  139 => 55,  134 => 53,  127 => 48,  120 => 44,  116 => 43,  111 => 40,  109 => 39,  106 => 38,  97 => 35,  93 => 34,  88 => 31,  86 => 30,  83 => 29,  76 => 26,  72 => 25,  67 => 22,  65 => 21,  53 => 12,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/common/footer.twig", "");
    }
}
