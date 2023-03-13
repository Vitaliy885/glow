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

/* fabulous/template/extension/module/ishiinstagramblock.twig */
class __TwigTemplate_55fb948d4ce0df6406515a71aa46bfeb4a446a8cf89c98987f72ce099d8a9cce extends \Twig\Template
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
        echo "<section class=\"ishiinstagramblock clearfix\">
  <div class=\"container\">
    <div class=\"ishiinstagram-inner\"> 
        <div class=\"subtitle\">
          ";
        // line 5
        echo ($context["title"] ?? null);
        echo "
        </div> 
        <div class=\"home-title\">
            <a href=\"https://www.instagram.com/";
        // line 8
        echo ($context["username"] ?? null);
        echo "\" target=\"_blank\" rel=\"nofollow\">    
               <span>@";
        // line 9
        echo ($context["username"] ?? null);
        echo "</span>
            </a>
        </div>
          <div id=\"ishiinstagram-carousel\" class=\"owl-carousel\">
          </div>
    </div>
  </div>
<script type=\"text/javascript\">
jQuery(document).ready(function (\$) {
  var userFeed = new Instafeed({
      get: 'user',
      target: \"ishiinstagram-carousel\",
      userId: '";
        // line 21
        echo ($context["userid"] ?? null);
        echo "',
      accessToken: '";
        // line 22
        echo ($context["accesstoken"] ?? null);
        echo "',
      resolution: 'standard_resolution',
      sortBy: '";
        // line 24
        echo ($context["sortby"] ?? null);
        echo "',
      limit: 6,
      template:'<div class=\"item\"><a href=";
        // line 26
        echo "{{link";
        echo "}} target=\"_blank\" id=";
        echo "{{id";
        echo "}}><img src=";
        echo "{{image";
        echo "}} /><span class=\"instagram\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></span></a><div class=\"text-container\"><span class=\"likes\"><span class=\"likes-count\">";
        echo "{{likes";
        echo "}}</span><i class=\"fa fa-heart\" aria-hidden=\"true\"></i></span><span class=\"comments\"><span class=\"comments-count\">";
        echo "{{comments";
        echo "}}</span><i class=\"fa fa-comments\" aria-hidden=\"true\"></i></span></div></div>',
      links: false,
      after: function(){
          \$('#ishiinstagram-carousel.owl-carousel').owlCarousel({
              loop:true,
              dots:false,
              nav:false,
              autoplay:true,
              autoplayTimeout:5000,
              smartSpeed: 2500,
              rtl: \$('html').attr('dir') == 'rtl'? true : false,
              responsive:{
                  0:{
                      items:1
                  },
                  350:{
                      items:2
                  },
                  480:{
                      items:2
                  },
                  544:{
                      items:2
                  },
                  768:{
                      items:3
                  },
                  992:{
                      items:4
                  },
                  1200: {
                      items:6
                  }
              }
          });
          insertDummyData();
          resizeInstagramTitle();
      }
  });
    userFeed.run();
});

function insertDummyData() {

    \$(\"#ishiinstagram-carousel .owl-item\").each(function(){
      \$(this).find(\".comments-count\").text(niceNumberDisplay(Math.floor((Math.random() * 10000) + 1)));
      \$(this).find(\".likes-count\").text(niceNumberDisplay(Math.floor((Math.random() * 100000) + 1)));
    });
}
function niceNumberDisplay(num) {
    var n = parseFloat(num);
    if(n > 1000000) {
        return Math.round(n / 1000000) + 'm';
    } else if(n > 1000) {
        return Math.round(n / 1000) + 'k';
    } else {
        return n.toFixed(0);
    }
}

function resizeInstagramTitle() {
    \$('.ishiinstagramblock .home-title.special').css('width',\$('#ishiinstagram-carousel .owl-item').css('width'));
}

</script>

</section> ";
    }

    public function getTemplateName()
    {
        return "fabulous/template/extension/module/ishiinstagramblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  77 => 24,  72 => 22,  68 => 21,  53 => 9,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishiinstagramblock.twig", "");
    }
}
