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

/* glow01/template/extension/module/ishispecialblock.twig */
class __TwigTemplate_a9a2d76eb22b73077c7571592b3d22d537de7782b5439d6087dc1e0d98f61169 extends \Twig\Template
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
        echo "<section class=\"ishispecial clearfix\">
    <div class=\"subtitle\">";
        // line 2
        echo ($context["subtitle"] ?? null);
        echo "</div>
    <h2 class=\"home-title\">";
        // line 3
        echo ($context["heading"] ?? null);
        echo "</h2>
    <div id=\"";
        // line 4
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"ishispecialblock owl-carousel\">
      ";
        // line 5
        $context["counter"] = 1;
        // line 6
        echo "      ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["products"] ?? null));
        // line 7
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "      ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 9
                echo "          ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 10
                    echo "              <div class=\"multilevel-item\">
          ";
                }
                // line 12
                echo "        ";
            }
            // line 13
            echo "        <div class=\"product-layout item\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 13);
            echo "\">
          <div class=\"product-thumb\">
              <div class=\"image col-lg-5 col-md-12 col-sm-12 col-xs-12\">
                <a href=\"";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
            echo "\">
                  <img src=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 17);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
            echo "\" class=\"img-responsive\" />
                  ";
            // line 18
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 18) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 19
                echo "                    <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 19);
                echo "\"/>
                  ";
            }
            // line 21
            echo "                </a>
                ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 22)) {
                echo " <span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 22);
                echo "</span> ";
            }
            // line 23
            echo "              </div>
            <div class=\"caption col-lg-6 col-md-12 col-sm-12 col-xs-12\">  
              <h4><a href=\"";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 25);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
            echo "</a></h4>
              <p class=\"description\">";
            // line 26
            echo (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 26), 0, 60) . "...");
            echo "</p>          
              ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27)) {
                // line 28
                echo "              <p class=\"price\">
                ";
                // line 29
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "                ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30);
                    echo "
                ";
                } else {
                    // line 32
                    echo "                <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 32);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 32);
                    echo "</span> 
                ";
                }
                // line 34
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "                <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 35);
                    echo "</span>
                ";
                }
                // line 37
                echo "              </p>
              ";
            }
            // line 38
            echo "  
              ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 39)) {
                // line 40
                echo "                <div class=\"rating\">
                  ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 42
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 42) < $context["i"])) {
                        echo " 
                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star gray fa-stack-2x\"></i>
                      </span> 
                    ";
                    } else {
                        // line 46
                        echo " 
                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                      </span> 
                    ";
                    }
                    // line 51
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                </div>
                ";
            } else {
                // line 54
                echo "                <div class=\"rating\">
                  ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 56
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star gray fa-stack-2x\"></i>
                      </span>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "                </div>
              ";
            }
            // line 62
            echo "        ";
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 63
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 63)) {
                    // line 64
                    echo "          <div class='countdown-container'>
            <div class='countdown-days counter'>
              <span class=\"data\"></span>
              <span class=\"lbl\">";
                    // line 67
                    echo ($context["days_name"] ?? null);
                    echo "</span>
            </div>
            <div class='countdown-hours counter'>
              <span class=\"data\"></span>
              <span class=\"lbl\">";
                    // line 71
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
            </div>
            <div class='countdown-minutes counter'>
              <span class=\"data\"></span>
              <span class=\"lbl\">";
                    // line 75
                    echo ($context["min_name"] ?? null);
                    echo "</span>
            </div>
            <div class='countdown-seconds counter'>
              <span class=\"data\"></span>
              <span class=\"lbl\">";
                    // line 79
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
            </div>
          </div>
        ";
                }
                // line 82
                echo "\t
        ";
            }
            // line 83
            echo "\t
        
              <div class=\"button-group\">  
                <div class=\"btn-quickview\"> 
                    <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 87
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                      <a class=\"quickbox\" href=\"";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 88);
            echo "\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                          <symbol id=\"quickview\" viewBox=\"0 0 850 850\"><title>quickview</title>
                                <path d=\"M221.02,341.304c-49.708,0-103.206-19.44-154.71-56.22C27.808,257.59,4.044,230.351,3.051,229.203
                                          c-4.068-4.697-4.068-11.669,0-16.367c0.993-1.146,24.756-28.387,63.259-55.881c51.505-36.777,105.003-56.219,154.71-56.219
                                          c49.708,0,103.207,19.441,154.71,56.219c38.502,27.494,62.266,54.734,63.259,55.881c4.068,4.697,4.068,11.669,0,16.367
                                          c-0.993,1.146-24.756,28.387-63.259,55.881C324.227,321.863,270.729,341.304,221.02,341.304z M29.638,221.021
                                          c9.61,9.799,27.747,27.03,51.694,44.071c32.83,23.361,83.714,51.212,139.688,51.212s106.859-27.851,139.688-51.212
                                          c23.944-17.038,42.082-34.271,51.694-44.071c-9.609-9.799-27.747-27.03-51.694-44.071
                                          c-32.829-23.362-83.714-51.212-139.688-51.212s-106.858,27.85-139.688,51.212C57.388,193.988,39.25,211.219,29.638,221.021z\"></path>
                                <path d=\"M221.02,298.521c-42.734,0-77.5-34.767-77.5-77.5c0-42.733,34.766-77.5,77.5-77.5c18.794,0,36.924,6.814,51.048,19.188
                                          c5.193,4.549,5.715,12.446,1.166,17.639c-4.549,5.193-12.447,5.714-17.639,1.166c-9.564-8.379-21.844-12.993-34.576-12.993
                                          c-28.949,0-52.5,23.552-52.5,52.5s23.551,52.5,52.5,52.5c28.95,0,52.5-23.552,52.5-52.5c0-6.903,5.597-12.5,12.5-12.5
                                          s12.5,5.597,12.5,12.5C298.521,263.754,263.754,298.521,221.02,298.521z\"></path>
                                <path d=\"M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z\"></path>                                      
                          </symbol>
                      </svg>
                      <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#quickview\" x=\"24%\" y=\"25%\"></use></svg>
                      <span class=\"lblcart\">";
            // line 106
            echo ($context["quick_view"] ?? null);
            echo "</span>
                      </a>
                    </div>
                </div>                 
                <div class=\"btn-wishlist\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 111
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 111);
            echo "');\"><i class=\"fa fa-heart\"></i>                            
                    <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                      <symbol id=\"heart-shape-outline\" viewBox=\"0 0 1150 1150\"><title>heart-shape-outline</title><path d=\"M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z\"/></symbol>
                    </svg>
                    <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"27%\" y=\"30%\"></use></svg>
                  </button>
                </div>
                <div class=\"btn-compare\">  
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 119
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 119);
            echo "');\"><i class=\"fa fa-exchange\"></i>                            
                    <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                      <symbol id=\"report\" viewBox=\"0 0 1400 1400\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                    </svg>
                    <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"26%\" y=\"30%\"></use></svg>
                  </button>
                </div>  
                <div class=\"btn-cart\">
                    <div class=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 127
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 127);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 127)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                      <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                          <symbol id=\"addtocarts\" viewBox=\"0 0 1200 1200\"><title>addtocart</title>
                            <path d=\"M187.57,359.458h360.895l63.856-227.934h-93.973l-33.74-104.22L343.9,72.916l19.244,58.608h-6.623l-34.74-104.22 L181.072,72.916l19.244,58.608h-75.228l-15.62-62.482c-7.873-31.241-35.115-53.359-66.481-53.359H0V41.8h42.987
                                          c19.494,0,36.489,12.996,41.738,32.616l69.105,270.421c-14.246,10.247-23.618,26.992-23.618,46.112
                                          c0,31.241,26.117,57.358,57.358,57.358h351.773V422.19H187.57c-16.995,0-31.241-14.371-31.241-31.241
                                          C156.33,373.829,170.7,359.458,187.57,359.458L187.57,359.458z M467.739,59.795l23.493,70.355H389.637l-14.371-40.363
                                          L467.739,59.795z M304.911,59.795l23.493,70.355H226.809l-14.371-40.363L304.911,59.795z M578.457,156.267l-49.486,177.199
                                          H177.198l-45.612-177.198L578.457,156.267L578.457,156.267z\"></path>
                              <path d=\"M424.751,487.171c-29.991,0-54.734,24.743-54.734,54.734c0,29.991,24.743,54.734,54.734,54.734
                                        c31.241,0,54.734-24.743,54.734-54.734C479.486,511.914,454.743,487.171,424.751,487.171z M424.751,571.896
                                        c-16.995,0-29.991-14.371-29.991-29.991c0-16.995,14.371-29.991,29.991-29.991c16.995,0,29.991,12.996,29.991,29.991
                                        C454.743,558.9,440.372,571.896,424.751,571.896z\"></path>
                              <path d=\"M224.06,487.171c-29.991,0-54.734,24.743-54.734,54.734c0,29.991,24.743,54.734,54.734,54.734
                                        s54.734-24.743,54.734-54.734C278.794,511.914,254.051,487.171,224.06,487.171z M224.06,571.896
                                        c-16.995,0-29.991-14.371-29.991-29.991c0-16.995,14.371-29.991,29.991-29.991s29.991,12.996,29.991,29.991
                                        C254.051,558.9,239.68,571.896,224.06,571.896z\"></path>
                            </symbol>
                      </svg>
                      <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#addtocarts\" x=\"25%\" y=\"26%\"></use></svg>
                    </div>
                </div>
              </div>               
            </div>
          </div>
        </div>
        ";
            // line 153
            if ((($context["product_row"] ?? null) != 1)) {
                // line 154
                echo "          ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 155
                    echo "        </div>
        ";
                }
                // line 157
                echo "        ";
            }
            // line 158
            echo "        ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 159
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
    </div>
  <script type=\"text/javascript\">
    \$('#";
        // line 162
        echo ($context["ishi_randomnumer"] ?? null);
        echo "').owlCarousel({
        loop:false,
        nav:true,    
        dots:false,  
        rewind: true,
        rtl: \$('html').attr('dir') == 'rtl'? true : false,
        navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
        responsive:{
          0:{
              items:";
        // line 171
        echo ($context["mobile_column"] ?? null);
        echo "
          },
          544:{
              items:";
        // line 174
        echo ($context["tablet_column"] ?? null);
        echo "
          },
          768:{ 
              items:";
        // line 177
        echo ($context["laptop_column"] ?? null);
        echo "
          },
          992:{
              items:";
        // line 180
        echo ($context["laptop_column"] ?? null);
        echo "
          },
          1200:{
              items:";
        // line 183
        echo ($context["desktop_column"] ?? null);
        echo "
          }
        }
    });   
  </script>
</section>";
    }

    public function getTemplateName()
    {
        return "glow01/template/extension/module/ishispecialblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 183,  421 => 180,  415 => 177,  409 => 174,  403 => 171,  391 => 162,  381 => 159,  378 => 158,  375 => 157,  371 => 155,  368 => 154,  366 => 153,  331 => 127,  318 => 119,  305 => 111,  297 => 106,  276 => 88,  272 => 87,  266 => 83,  262 => 82,  255 => 79,  248 => 75,  241 => 71,  234 => 67,  229 => 64,  226 => 63,  223 => 62,  219 => 60,  210 => 56,  206 => 55,  203 => 54,  199 => 52,  193 => 51,  186 => 46,  177 => 42,  173 => 41,  170 => 40,  168 => 39,  165 => 38,  161 => 37,  153 => 35,  150 => 34,  142 => 32,  136 => 30,  134 => 29,  131 => 28,  129 => 27,  125 => 26,  119 => 25,  115 => 23,  109 => 22,  106 => 21,  96 => 19,  94 => 18,  86 => 17,  82 => 16,  75 => 13,  72 => 12,  68 => 10,  65 => 9,  62 => 8,  57 => 7,  54 => 6,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/ishispecialblock.twig", "");
    }
}
