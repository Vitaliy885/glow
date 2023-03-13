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
class __TwigTemplate_df876ba0b4ab61ac6efd6d5dbc13b6e98899b0c36883510abbea09812b9f7bea extends \Twig\Template
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
<div class=\"ishiinstagram-inner\">  
    <div class=\"home-title\">
        <a href=\"https://www.instagram.com/";
        // line 4
        echo ($context["username"] ?? null);
        echo "\" target=\"_blank\" rel=\"nofollow\">    
          ";
        // line 5
        echo ($context["title"] ?? null);
        echo " <span>@";
        echo ($context["username"] ?? null);
        echo "</span>
        </a>
    </div>
      <div id=\"ishiinstagram-carousel\" class=\"owl-carousel\">
      </div>
</div>
<script type=\"text/javascript\">
jQuery(document).ready(function (\$) {
  var userFeed = new Instafeed({
      get: 'user',
      target: \"ishiinstagram-carousel\",
      userId: '";
        // line 16
        echo ($context["userid"] ?? null);
        echo "',
      accessToken: '";
        // line 17
        echo ($context["accesstoken"] ?? null);
        echo "',
      resolution: 'standard_resolution',
      sortBy: '";
        // line 19
        echo ($context["sortby"] ?? null);
        echo "',
      limit: 6,
      template:'<div class=\"item\"><a href=";
        // line 21
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
                      items:3
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
        return array (  76 => 21,  71 => 19,  66 => 17,  62 => 16,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishiinstagramblock.twig", "");
    }
}
