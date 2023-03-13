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
class __TwigTemplate_1f8a22f03be1b5f99e0f5088384e52157c7d838f3821eb0423b0ba5eb727f75d extends \Twig\Template
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
    <h2 class=\"home-title\">";
        // line 2
        echo ($context["heading"] ?? null);
        echo "</h2>
    <div id=\"";
        // line 3
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"ishispecialblock owl-carousel\">
      ";
        // line 4
        $context["counter"] = 1;
        // line 5
        echo "      ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["products"] ?? null));
        // line 6
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "      ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 8
                echo "          ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 9
                    echo "              <div class=\"multilevel-item\">
          ";
                }
                // line 11
                echo "        ";
            }
            // line 12
            echo "        <div class=\"product-layout item\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 12);
            echo "\">
          <div class=\"product-thumb\"> 
            <div class=\"col-lg-5 col-md-12 col-sm-12 col-xs-12\">
              <div class=\"image\">
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
            </div>
            <div class=\"caption col-lg-6 col-md-12 col-sm-12 col-xs-12\">  
              <h4><a href=\"";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 26);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
            echo "</a></h4>
              <p class=\"description\">";
            // line 27
            echo (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 27), 0, 60) . "...");
            echo "</p>          
              ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28)) {
                // line 29
                echo "              <p class=\"price\">
                ";
                // line 30
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "                ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 31);
                    echo "
                ";
                } else {
                    // line 33
                    echo "                <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 33);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 33);
                    echo "</span> 
                ";
                }
                // line 35
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "                <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 36);
                    echo "</span>
                ";
                }
                // line 38
                echo "              </p>
              ";
            }
            // line 39
            echo "  
              ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 40)) {
                // line 41
                echo "                <div class=\"rating\">
                  ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 43
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 43) < $context["i"])) {
                        echo " 
                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star gray fa-stack-2x\"></i>
                      </span> 
                    ";
                    } else {
                        // line 47
                        echo " 
                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                      </span> 
                    ";
                    }
                    // line 52
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                </div>
                ";
            } else {
                // line 55
                echo "                <div class=\"rating\">
                  ";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 57
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star gray fa-stack-2x\"></i>
                      </span>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                </div>
              ";
            }
            // line 63
            echo "        ";
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 64
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 64)) {
                    // line 65
                    echo "          <div class='countdown-container'>
            <div class='countdown-days counter'>
              <span class=\"data\"></span>
              <span class=\"lbl\">";
                    // line 68
                    echo ($context["days_name"] ?? null);
                    echo "</span>
            </div>
            <div class='countdown-hours counter'>
              <span class=\"data\"></span>
              <span class=\"lbl\">";
                    // line 72
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
            </div>
            <div class='countdown-minutes counter'>
              <span class=\"data\"></span>
              <span class=\"lbl\">";
                    // line 76
                    echo ($context["min_name"] ?? null);
                    echo "</span>
            </div>
            <div class='countdown-seconds counter'>
              <span class=\"data\"></span>
              <span class=\"lbl\">";
                    // line 80
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
            </div>
          </div>
        ";
                }
                // line 83
                echo "\t
        ";
            }
            // line 84
            echo "\t
        
              <div class=\"button-group\">  
                <div class=\"btn-quickview\"> 
                  <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 88
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                    <a class=\"quickbox\" href=\"";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 89);
            echo "\">
                      <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                        <symbol id=\"eye-open\" viewBox=\"0 0 1100 1100\"><title>eye-open</title><path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z\"/></symbol>
                      </svg>
                      <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"26%\" y=\"29%\"></use></svg>
                      <i class=\"fa fa-eye\" aria-hidden=\"true\"></i><span class=\"lblcart\">";
            // line 94
            echo ($context["quick_view"] ?? null);
            echo "</span>
                    </a>
                  </div>
                </div>                  
                <div class=\"btn-wishlist\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 99
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 99);
            echo "');\"><i class=\"fa fa-heart\"></i>                            
                    <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                      <symbol id=\"heart-shape-outline\" viewBox=\"0 0 1150 1150\"><title>heart-shape-outline</title><path d=\"M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z\"/></symbol>
                    </svg>
                    <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"27%\" y=\"30%\"></use></svg>
                  </button>
                </div>
                <div class=\"btn-compare\">  
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 107
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 107);
            echo "');\"><i class=\"fa fa-exchange\"></i>                            
                    <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                      <symbol id=\"report\" viewBox=\"0 0 1400 1400\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                    </svg>
                    <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"25%\" y=\"30%\"></use></svg>
                  </button>
                </div>              
                <div class=\"btn-cart\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 115
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 115);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 115)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                      <symbol id=\"shopping-cart\" viewBox=\"0 0 900 900\"><title>shopping-cart</title><path d=\"M470.223,0.561h-89.7c-9.4,0-16.7,6.3-19.8,14.6l-83.4,263.8h-178.3l-50-147h187.7c11.5,0,20.9-9.4,20.9-20.9 s-9.4-20.9-20.9-20.9h-215.9c-18.5,0.9-23.2,18-19.8,26.1l63.6,189.7c3.1,8.3,11.5,13.6,19.8,13.6h207.5c9.4,0,17.7-5.2,19.8-13.6 l83.4-263.8h75.1c11.5,0,20.9-9.4,20.9-20.9S481.623,0.561,470.223,0.561z\"/><path d=\"M103.223,357.161c-36.5,0-66.7,30.2-66.7,66.7s30.2,66.7,66.7,66.7s66.7-30.2,66.7-66.7S139.723,357.161,103.223,357.161z M128.223,424.861c0,14.6-11.5,26.1-25,26.1c-13.6,0-25-11.5-25-26.1s11.5-26.1,25-26.1 C117.823,398.861,129.323,410.261,128.223,424.861z\"/><path d=\"M265.823,357.161c-36.5,0-66.7,30.2-66.7,66.7s30.2,66.7,66.7,66.7c37.5,0,66.7-30.2,66.7-66.7 C332.623,387.361,302.323,357.161,265.823,357.161z M290.923,424.861c0,14.6-11.5,26.1-25,26.1c-13.5,0-25-11.5-25-26.1 s11.5-26.1,25-26.1C280.423,398.861,291.923,410.261,290.923,424.861z\"/></symbol>
                    </svg>
                    <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart\" x=\"25%\" y=\"24%\"></use></svg>
                    <i class=\"fa fa-shopping-cart\"></i> 
                    <span class=\"lblcart\">";
            // line 121
            echo ($context["button_cart"] ?? null);
            echo "</span>
                  </button>
                </div> 
              </div>               
            </div>
          </div>
        </div>
        ";
            // line 128
            if ((($context["product_row"] ?? null) != 1)) {
                // line 129
                echo "          ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 130
                    echo "        </div>
        ";
                }
                // line 132
                echo "        ";
            }
            // line 133
            echo "        ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 134
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
    </div>
  <script type=\"text/javascript\">
    \$('#";
        // line 137
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
        // line 146
        echo ($context["mobile_column"] ?? null);
        echo "
          },
          544:{
              items:";
        // line 149
        echo ($context["tablet_column"] ?? null);
        echo "
          },
          768:{ 
              items:";
        // line 152
        echo ($context["laptop_column"] ?? null);
        echo "
          },
          992:{
              items:";
        // line 155
        echo ($context["laptop_column"] ?? null);
        echo "
          },
          1200:{
              items:";
        // line 158
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
        return array (  402 => 158,  396 => 155,  390 => 152,  384 => 149,  378 => 146,  366 => 137,  356 => 134,  353 => 133,  350 => 132,  346 => 130,  343 => 129,  341 => 128,  331 => 121,  316 => 115,  303 => 107,  290 => 99,  282 => 94,  274 => 89,  270 => 88,  264 => 84,  260 => 83,  253 => 80,  246 => 76,  239 => 72,  232 => 68,  227 => 65,  224 => 64,  221 => 63,  217 => 61,  208 => 57,  204 => 56,  201 => 55,  197 => 53,  191 => 52,  184 => 47,  175 => 43,  171 => 42,  168 => 41,  166 => 40,  163 => 39,  159 => 38,  151 => 36,  148 => 35,  140 => 33,  134 => 31,  132 => 30,  129 => 29,  127 => 28,  123 => 27,  117 => 26,  112 => 23,  106 => 22,  103 => 21,  93 => 19,  91 => 18,  83 => 17,  79 => 16,  71 => 12,  68 => 11,  64 => 9,  61 => 8,  58 => 7,  53 => 6,  50 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/ishispecialblock.twig", "");
    }
}
