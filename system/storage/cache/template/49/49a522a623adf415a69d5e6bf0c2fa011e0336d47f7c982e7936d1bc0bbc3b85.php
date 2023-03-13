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

/* glow01/template/extension/module/ishiproductsblock.twig */
class __TwigTemplate_29b73201ab344711e32160b91ec4037f530c9d39a47614bc7127d39022454bb2 extends \Twig\Template
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
        echo "<section id=\"";
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"ishiproductsblock container\">
  <div class=\"row\">
  <div class=\"subtitle\">";
        // line 3
        echo ($context["subtitle"] ?? null);
        echo "</div>
  <h3 class=\"home-title\">";
        // line 4
        echo ($context["heading"] ?? null);
        echo "</h3>
  <ul class=\"ishiproductstab nav nav-tabs clearfix\">
    ";
        // line 6
        if (($context["featured"] ?? null)) {
            // line 7
            echo "      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#featured-products-block";
            // line 8
            echo ($context["tab_randomnumer"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["heading_featured"] ?? null);
            echo "</a>
      </li>
    ";
        }
        // line 11
        echo "    ";
        if (($context["bestseller"] ?? null)) {
            // line 12
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#bestseller-products-block";
            // line 13
            echo ($context["tab_randomnumer"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["heading_bestseller"] ?? null);
            echo "</a>
      </li>
    ";
        }
        // line 16
        echo "    ";
        if (($context["new"] ?? null)) {
            // line 17
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#new-products-block";
            // line 18
            echo ($context["tab_randomnumer"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["heading_new"] ?? null);
            echo "</a>
      </li>
    ";
        }
        // line 21
        echo "    ";
        if (($context["special"] ?? null)) {
            // line 22
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#special-products-block";
            // line 23
            echo ($context["tab_randomnumer"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["heading_special"] ?? null);
            echo "</a>
      </li>
    ";
        }
        // line 26
        echo "  ";
        if (($context["category"] ?? null)) {
            // line 27
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 28
                echo "      <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"#category-block";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 29);
                echo "-";
                echo ($context["tab_randomnumer"] ?? null);
                echo "\" data-toggle=\"tab\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29);
                echo "</a>
      </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
        }
        // line 33
        echo "  </ul>

  <div class=\"tab-content\">
    <div class=\"tab-pane active\" id=\"featured-products-block";
        // line 36
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">        
        <div class=\"owl-carousel\"> 
            ";
        // line 39
        $context["counter"] = 1;
        // line 40
        echo "            ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["featured"] ?? null));
        echo " 
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["featured"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 42
            echo "              ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 43
                echo "                ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 44
                    echo "                  <div class=\"multilevel-item\">
                ";
                }
                // line 46
                echo "              ";
            }
            // line 47
            echo "                <div class=\"item product-container\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 47);
            echo "\"> 
                  <div class=\"product-thumb\">
                    <div class=\"image\">
                      <a href=\"";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 50);
            echo "\">
                        <img src=\"";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 51);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51);
            echo "\" class=\"img-responsive\"/>
                        ";
            // line 52
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 52) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 53
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 53);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 53);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 53);
                echo "\"/>
                        ";
            }
            // line 55
            echo "                      </a>  
                      ";
            // line 56
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 56)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 56);
                echo "</span>";
            }
            // line 57
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 57)) {
                // line 58
                echo "                        <div class=\"rating\">
                          ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 60
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 60) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 64
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 69
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "                        </div>
                        ";
            } else {
                // line 72
                echo "                        <div class=\"rating\">
                          ";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 74
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "                        </div>
                      ";
            }
            // line 79
            echo " 
                      ";
            // line 80
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 81
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 81)) {
                    // line 82
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 85
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 89
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 93
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 97
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 100
                echo " 
                      ";
            }
            // line 101
            echo " 
                      <div class=\"button-group\">
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 104
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 104);
            echo "');\"><i class=\"fa fa-heart\"></i>
                             <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"wishlist-outline\" viewBox=\"0 0 1200 1200\"><title>wishlist-outline</title>
                                  <path d=\"M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                  c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                  c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                  l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                  C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                  l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                  c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                  c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                  c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z\"></path>
                                </symbol>
                            </svg>
                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#wishlist-outline\" x=\"29%\" y=\"31%\"></use></svg>
                            </button>
                          </div>
                          <div class=\"btn-compare\">  
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 122
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 122);
            echo "');\"><i class=\"fa fa-exchange\"></i>                            
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"report\" viewBox=\"0 0 1400 1400\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"28%\" y=\"33%\"></use></svg>
                            </button>
                          </div>
                      </div>
                </div> 
                    <div class=\"caption\">
                      <h4><a href=\"";
            // line 132
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 132);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 132);
            echo "</a></h4>
                      <p class=\"description\">";
            // line 133
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 133);
            echo "</p>
                      ";
            // line 134
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 134)) {
                // line 135
                echo "                      <p class=\"price\">
                        ";
                // line 136
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 136)) {
                    // line 137
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 137);
                    echo "
                        ";
                } else {
                    // line 139
                    echo "                        <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 139);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 139);
                    echo "</span> 
                        ";
                }
                // line 141
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 141)) {
                    // line 142
                    echo "                        <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 142);
                    echo "</span>
                        ";
                }
                // line 144
                echo "                      </p>
                      ";
            }
            // line 146
            echo "                      <div class=\"btn-cart-quickview\">  
                        <div class=\"btn-quickview\"> 
                          <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 148
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                            <a class=\"quickbox\" href=\"";
            // line 149
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 149);
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
            // line 167
            echo ($context["quick_view"] ?? null);
            echo "</span>
                            </a>
                          </div>
                        </div>
                        <div class=\"btn-cart\">
                            <div class=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 172
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 172);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 172)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"addtocart\" viewBox=\"0 0 1100 1100\"><title>addtocart</title>
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
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#addtocart\" x=\"20%\" y=\"22%\"></use></svg>
                              <span class=\"lblcart\">";
            // line 192
            echo ($context["button_cart"] ?? null);
            echo "</span>
                            </div>
                        </div>  
                      </div>
                    </div>                         
                  </div>
                </div>
        ";
            // line 199
            if ((($context["product_row"] ?? null) != 1)) {
                // line 200
                echo "          ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 201
                    echo "            </div>
          ";
                }
                // line 203
                echo "        ";
            }
            // line 204
            echo "        ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 205
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "        </div>        
      </div>
    </div>

    <div class=\"tab-pane\" id=\"bestseller-products-block";
        // line 210
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">        
        <div class=\"owl-carousel\">      
            ";
        // line 213
        $context["counter"] = 1;
        // line 214
        echo "            ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["bestseller"] ?? null));
        // line 215
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bestseller"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 216
            echo "              ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 217
                echo "                ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 218
                    echo "                  <div class=\"multilevel-item\">
                ";
                }
                // line 220
                echo "              ";
            }
            // line 221
            echo "                <div class=\"item product-container\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 221);
            echo "\"> 
                  <div class=\"product-thumb\">
                    <div class=\"image\">
                      <a href=\"";
            // line 224
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 224);
            echo "\">
                      <img src=\"";
            // line 225
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 225);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 225);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 225);
            echo "\" class=\"img-responsive ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 225) != "")) {
                echo " no-change ";
            }
            echo "\" />
                        ";
            // line 226
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 226) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 227
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 227);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 227);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 227);
                echo "\"/>
                        ";
            }
            // line 229
            echo "                      </a>  
                      ";
            // line 230
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 230)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 230);
                echo "</span>";
            }
            echo " 
                      ";
            // line 231
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 231)) {
                // line 232
                echo "                        <div class=\"rating\">
                          ";
                // line 233
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 234
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 234) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 238
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 243
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 244
                echo "                        </div>
                        ";
            } else {
                // line 246
                echo "                        <div class=\"rating\">
                          ";
                // line 247
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 248
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 252
                echo "                        </div>
                      ";
            }
            // line 253
            echo " 
                      ";
            // line 254
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 255
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 255)) {
                    // line 256
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 259
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 263
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 267
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 271
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 275
                echo "                      ";
            }
            // line 276
            echo "                      <div class=\"button-group\">
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 278
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 278);
            echo "');\"><i class=\"fa fa-heart\"></i>
                             <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"wishlist-outline\" viewBox=\"0 0 1200 1200\"><title>wishlist-outline</title>
                                  <path d=\"M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                  c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                  c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                  l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                  C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                  l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                  c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                  c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                  c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z\"></path>
                                </symbol>
                            </svg>
                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#wishlist-outline\" x=\"29%\" y=\"31%\"></use></svg>
                            </button>
                          </div>
                          <div class=\"btn-compare\">  
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 296
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 296);
            echo "');\"><i class=\"fa fa-exchange\"></i>                            
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"report\" viewBox=\"0 0 1400 1400\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"28%\" y=\"33%\"></use></svg>
                            </button>
                          </div>
                      </div>
                </div> 
                    <div class=\"caption\"> 
                      <h4><a href=\"";
            // line 306
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 306);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 306);
            echo "</a></h4>
                      <p class=\"description\">";
            // line 307
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 307);
            echo "</p>
                      ";
            // line 308
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 308)) {
                // line 309
                echo "                      <p class=\"price\">
                        ";
                // line 310
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 310)) {
                    // line 311
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 311);
                    echo "
                        ";
                } else {
                    // line 313
                    echo "                        <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 313);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 313);
                    echo "</span> 
                        ";
                }
                // line 315
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 315)) {
                    // line 316
                    echo "                        <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 316);
                    echo "</span>
                        ";
                }
                // line 318
                echo "                      </p>
                      ";
            }
            // line 320
            echo "                      <div class=\"btn-cart-quickview\">  
                        <div class=\"btn-quickview\"> 
                          <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 322
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                            <a class=\"quickbox\" href=\"";
            // line 323
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 323);
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
            // line 341
            echo ($context["quick_view"] ?? null);
            echo "</span>
                            </a>
                          </div>
                        </div>
                        <div class=\"btn-cart\">
                            <div class=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 346
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 346);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 346)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"addtocart\" viewBox=\"0 0 1100 1100\"><title>addtocart</title>
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
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#addtocart\" x=\"20%\" y=\"22%\"></use></svg>
                              <span class=\"lblcart\">";
            // line 366
            echo ($context["button_cart"] ?? null);
            echo "</span>
                            </div>
                        </div>  
                      </div>
                    </div>                             
                </div>
                </div>
        ";
            // line 373
            if ((($context["product_row"] ?? null) != 1)) {
                // line 374
                echo "          ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 375
                    echo "            </div>
          ";
                }
                // line 377
                echo "        ";
            }
            // line 378
            echo "            ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 379
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "        
        </div>        
      </div>
    </div>

    <div class=\"tab-pane\" id=\"new-products-block";
        // line 384
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\"> 
          ";
        // line 387
        $context["counter"] = 1;
        // line 388
        echo "          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["new"] ?? null));
        // line 389
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["new"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "  
            ";
            // line 390
            if ((($context["product_row"] ?? null) != 1)) {
                // line 391
                echo "              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 392
                    echo "                <div class=\"multilevel-item\">
              ";
                }
                // line 394
                echo "            ";
            }
            // line 395
            echo "              <div class=\"item product-container\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 395);
            echo "\"> 
                  <div class=\"product-thumb\">
                <div class=\"image\">
                      <a href=\"";
            // line 398
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 398);
            echo "\">
                  <img src=\"";
            // line 399
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 399);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 399);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 399);
            echo "\" class=\"img-responsive ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 399) != "")) {
                echo " no-change ";
            }
            echo "\" />
                        ";
            // line 400
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 400) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 401
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 401);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 401);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 401);
                echo "\"/>
                        ";
            }
            // line 403
            echo "                      </a>  
                      ";
            // line 404
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 404)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 404);
                echo "</span>";
            }
            echo " 
                      ";
            // line 405
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 405)) {
                // line 406
                echo "                        <div class=\"rating\">
                          ";
                // line 407
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 408
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 408) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 412
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 417
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 418
                echo "                        </div>
                        ";
            } else {
                // line 420
                echo "                        <div class=\"rating\">
                          ";
                // line 421
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 422
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 426
                echo "                        </div>
                      ";
            }
            // line 428
            echo "                      ";
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 429
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 429)) {
                    // line 430
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 433
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 437
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 441
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 445
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 448
                echo "   
                      ";
            }
            // line 450
            echo "                      <div class=\"button-group\">
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 452
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 452);
            echo "');\"><i class=\"fa fa-heart\"></i>
                             <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"wishlist-outline\" viewBox=\"0 0 1200 1200\"><title>wishlist-outline</title>
                                  <path d=\"M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                  c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                  c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                  l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                  C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                  l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                  c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                  c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                  c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z\"></path>
                                </symbol>
                            </svg>
                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#wishlist-outline\" x=\"29%\" y=\"31%\"></use></svg>
                            </button>
                          </div>
                          <div class=\"btn-compare\">  
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 470
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 470);
            echo "');\"><i class=\"fa fa-exchange\"></i>                            
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"report\" viewBox=\"0 0 1400 1400\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"28%\" y=\"33%\"></use></svg>
                            </button>
                          </div>
                      </div>
                </div>   
                <div class=\"caption\">
                  <h4><a href=\"";
            // line 480
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 480);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 480);
            echo "</a></h4>
                  <p class=\"description\">";
            // line 481
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 481);
            echo "</p>
                  ";
            // line 482
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 482)) {
                // line 483
                echo "                  <p class=\"price\">
                    ";
                // line 484
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 484)) {
                    // line 485
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 485);
                    echo "
                    ";
                } else {
                    // line 487
                    echo "                    <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 487);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 487);
                    echo "</span> 
                    ";
                }
                // line 489
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 489)) {
                    // line 490
                    echo "                    <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 490);
                    echo "</span>
                    ";
                }
                // line 492
                echo "                  </p>
                  ";
            }
            // line 493
            echo " 
                      <div class=\"btn-cart-quickview\">  
                        <div class=\"btn-quickview\"> 
                          <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 496
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                            <a class=\"quickbox\" href=\"";
            // line 497
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 497);
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
            // line 515
            echo ($context["quick_view"] ?? null);
            echo "</span>
                            </a>
                          </div>
                        </div>
                        <div class=\"btn-cart\">
                            <div class=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 520
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 520);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 520)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"addtocart\" viewBox=\"0 0 1100 1100\"><title>addtocart</title>
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
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#addtocart\" x=\"20%\" y=\"22%\"></use></svg>
                              <span class=\"lblcart\">";
            // line 540
            echo ($context["button_cart"] ?? null);
            echo "</span>
                            </div>
                        </div>  
                      </div>
                </div>                           
              </div>
                </div>
            ";
            // line 547
            if ((($context["product_row"] ?? null) != 1)) {
                // line 548
                echo "              ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 549
                    echo "                </div>
              ";
                }
                // line 551
                echo "            ";
            }
            echo " 
          ";
            // line 552
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 553
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "        
        </div>        
      </div>
    </div>

    <div class=\"tab-pane\" id=\"special-products-block";
        // line 558
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\">
          ";
        // line 561
        $context["counter"] = 1;
        // line 562
        echo "          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["special"] ?? null));
        // line 563
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["special"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "  
            ";
            // line 564
            if ((($context["product_row"] ?? null) != 1)) {
                // line 565
                echo "              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 566
                    echo "                <div class=\"multilevel-item\">
              ";
                }
                // line 568
                echo "            ";
            }
            echo "     
              <div class=\"item product-container\" data-countdowntime=\"";
            // line 569
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 569);
            echo "\"> 
                  <div class=\"product-thumb\">
                <div class=\"image\">
                      <a href=\"";
            // line 572
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 572);
            echo "\">
                        <img src=\"";
            // line 573
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 573);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 573);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 573);
            echo "\" class=\"img-responsive\" />
                        ";
            // line 574
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 574) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 575
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 575);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 575);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 575);
                echo "\"/>
                        ";
            }
            // line 577
            echo "                      </a>  
                      ";
            // line 578
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 578)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 578);
                echo "</span>";
            }
            // line 579
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 579)) {
                // line 580
                echo "                        <div class=\"rating\">
                          ";
                // line 581
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 582
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 582) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 586
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 591
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 592
                echo "                        </div>
                        ";
            } else {
                // line 594
                echo "                        <div class=\"rating\">
                          ";
                // line 595
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 596
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 600
                echo "                        </div>
                      ";
            }
            // line 601
            echo " 
                      ";
            // line 602
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 603
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 603)) {
                    // line 604
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 607
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 611
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 615
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 619
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 622
                echo " 
                      ";
            }
            // line 624
            echo "                      <div class=\"button-group\">
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 626
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 626);
            echo "');\"><i class=\"fa fa-heart\"></i>
                             <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"wishlist-outline\" viewBox=\"0 0 1200 1200\"><title>wishlist-outline</title>
                                  <path d=\"M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                  c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                  c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                  l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                  C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                  l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                  c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                  c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                  c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z\"></path>
                                </symbol>
                            </svg>
                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#wishlist-outline\" x=\"29%\" y=\"31%\"></use></svg>
                            </button>
                          </div>
                          <div class=\"btn-compare\">  
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 644
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 644);
            echo "');\"><i class=\"fa fa-exchange\"></i>                            
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"report\" viewBox=\"0 0 1400 1400\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"28%\" y=\"33%\"></use></svg>
                            </button>
                          </div>
                      </div>
                </div>                   
                <div class=\"caption\">
                  <h4><a href=\"";
            // line 654
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 654);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 654);
            echo "</a></h4>
                  <p class=\"description\">";
            // line 655
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 655);
            echo "</p>
                  ";
            // line 656
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 656)) {
                // line 657
                echo "                  <p class=\"price\">
                    ";
                // line 658
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 658)) {
                    // line 659
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 659);
                    echo "
                    ";
                } else {
                    // line 661
                    echo "                    <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 661);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 661);
                    echo "</span> 
                    ";
                }
                // line 663
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 663)) {
                    // line 664
                    echo "                    <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 664);
                    echo "</span>
                    ";
                }
                // line 666
                echo "                  </p>
                  ";
            }
            // line 667
            echo "  
                      <div class=\"btn-cart-quickview\">  
                        <div class=\"btn-quickview\"> 
                          <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 670
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                            <a class=\"quickbox\" href=\"";
            // line 671
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 671);
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
            // line 689
            echo ($context["quick_view"] ?? null);
            echo "</span>
                            </a>
                          </div>
                        </div>
                        <div class=\"btn-cart\">
                            <div class=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 694
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 694);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 694)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"addtocart\" viewBox=\"0 0 1100 1100\"><title>addtocart</title>
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
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#addtocart\" x=\"20%\" y=\"22%\"></use></svg>
                              <span class=\"lblcart\">";
            // line 714
            echo ($context["button_cart"] ?? null);
            echo "</span>
                            </div>
                        </div>  
                      </div>
                </div>
              </div>
                </div>
            ";
            // line 721
            if ((($context["product_row"] ?? null) != 1)) {
                // line 722
                echo "              ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 723
                    echo "                </div>
              ";
                }
                // line 725
                echo "            ";
            }
            echo " 
          ";
            // line 726
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 727
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "        
        </div>        
      </div>
    </div>
  
  ";
        // line 732
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 733
            echo "  <div class=\"tab-pane\" id=\"category-block";
            echo twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 733);
            echo "-";
            echo ($context["tab_randomnumer"] ?? null);
            echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\">
          ";
            // line 736
            $context["counter"] = 1;
            // line 737
            echo "              ";
            $context["lastproduct"] = twig_length_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["category"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 737)] ?? null) : null));
            // line 738
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["category"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 738)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 739
                echo "                ";
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 740
                    echo "                  ";
                    if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                        // line 741
                        echo "                    <div class=\"multilevel-item\">
                  ";
                    }
                    // line 743
                    echo "                ";
                }
                // line 744
                echo "                  <div class=\"item product-container\" data-countdowntime=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 744);
                echo "\"> 
                  <div class=\"product-thumb\">
                    <div class=\"image\">
                      <a href=\"";
                // line 747
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 747);
                echo "\">
                        <img src=\"";
                // line 748
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 748);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 748);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 748);
                echo "\" class=\"img-responsive\" />
                        ";
                // line 749
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 749) != "") && (($context["hover_image"] ?? null) == 1))) {
                    // line 750
                    echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 750);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 750);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 750);
                    echo "\"/>
                        ";
                }
                // line 752
                echo "                      </a>  
                      ";
                // line 753
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 753)) {
                    echo "<span class=\"outstock-overlay\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 753);
                    echo "</span>";
                }
                echo " 
                       ";
                // line 754
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 754)) {
                    // line 755
                    echo "                        <div class=\"rating\">
                          ";
                    // line 756
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 757
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 757) < $context["i"])) {
                            echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                        } else {
                            // line 761
                            echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                        }
                        // line 766
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 767
                    echo "                        </div>
                        ";
                } else {
                    // line 769
                    echo "                        <div class=\"rating\">
                          ";
                    // line 770
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 771
                        echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 775
                    echo "                        </div>
                      ";
                }
                // line 776
                echo " 
                      ";
                // line 777
                if ((($context["product_counter"] ?? null) == 1)) {
                    // line 778
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 778)) {
                        // line 779
                        echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 782
                        echo ($context["days_name"] ?? null);
                        echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 786
                        echo ($context["hours_name"] ?? null);
                        echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 790
                        echo ($context["min_name"] ?? null);
                        echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 794
                        echo ($context["sec_name"] ?? null);
                        echo "</span>
                            </div>
                          </div>
                        ";
                    }
                    // line 797
                    echo "  
                      ";
                }
                // line 799
                echo "                      <div class=\"button-group\">
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 801
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 801);
                echo "');\"><i class=\"fa fa-heart\"></i>
                             <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"wishlist-outline\" viewBox=\"0 0 1200 1200\"><title>wishlist-outline</title>
                                  <path d=\"M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                  c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                  c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                  l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                  C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                  l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                  c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                  c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                  c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z\"></path>
                                </symbol>
                            </svg>
                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#wishlist-outline\" x=\"29%\" y=\"31%\"></use></svg>
                            </button>
                          </div>
                          <div class=\"btn-compare\">  
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 819
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 819);
                echo "');\"><i class=\"fa fa-exchange\"></i>                            
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"report\" viewBox=\"0 0 1400 1400\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"28%\" y=\"33%\"></use></svg>
                            </button>
                          </div>
                      </div>
                </div>                   
                    <div class=\"caption\">   
                      <h4><a href=\"";
                // line 829
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 829);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 829);
                echo "</a></h4>
                      <p class=\"description\">";
                // line 830
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 830);
                echo "</p>
                      ";
                // line 831
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 831)) {
                    // line 832
                    echo "                      <p class=\"price\">
                        ";
                    // line 833
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 833)) {
                        // line 834
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 834);
                        echo "
                        ";
                    } else {
                        // line 836
                        echo "                        <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 836);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 836);
                        echo "</span> 
                        ";
                    }
                    // line 838
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 838)) {
                        // line 839
                        echo "                        <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 839);
                        echo "</span>
                        ";
                    }
                    // line 841
                    echo "                      </p>
                      ";
                }
                // line 842
                echo " 
                      <div class=\"btn-cart-quickview\">  
                        <div class=\"btn-quickview\"> 
                          <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
                // line 845
                echo ($context["quick_view"] ?? null);
                echo "\"> 
                            <a class=\"quickbox\" href=\"";
                // line 846
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 846);
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
                // line 864
                echo ($context["quick_view"] ?? null);
                echo "</span>
                            </a>
                          </div>
                        </div>
                        <div class=\"btn-cart\">
                            <div class=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 869
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 869);
                echo "');\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 869)) {
                    echo " class=\"sold-out\" disabled";
                }
                echo ">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"addtocart\" viewBox=\"0 0 1100 1100\"><title>addtocart</title>
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
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#addtocart\" x=\"20%\" y=\"22%\"></use></svg>
                              <span class=\"lblcart\">";
                // line 889
                echo ($context["button_cart"] ?? null);
                echo "</span>
                            </div>
                        </div>  
                      </div>
                    </div>
                  </div>
                </div>
                ";
                // line 896
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 897
                    echo "                  ";
                    if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                        // line 898
                        echo "                    </div>
                  ";
                    }
                    // line 900
                    echo "                ";
                }
                echo " 
              ";
                // line 901
                $context["counter"] = (($context["counter"] ?? null) + 1);
                // line 902
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "        
            </div>        
          </div>
        </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 907
        echo "  </div>
</div>
  <script type=\"text/javascript\">
    \$('#";
        // line 910
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
        loop:false,
        nav:true,  
        dots:false, 
        rewind: true,
        rtl: \$('html').attr('dir') == 'rtl'? true : false,
        navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
        responsive:{
            0:{
                items:";
        // line 919
        echo ($context["mobile_column"] ?? null);
        echo "
            },
            544:{
                items:";
        // line 922
        echo ($context["tablet_column"] ?? null);
        echo "
            },
            768:{
                items:";
        // line 925
        echo ($context["tablet_column"] ?? null);
        echo "
            },
            992:{
                items:";
        // line 928
        echo ($context["laptop_column"] ?? null);
        echo "
            },
            1200:{
                items:";
        // line 931
        echo ($context["desktop_column"] ?? null);
        echo "
            }
        }
    });   
  </script>
<script type=\"text/javascript\"><!--
\$('#";
        // line 937
        echo ($context["ishi_randomnumer"] ?? null);
        echo " li a:first').tab('show');
//--></script>
</section>";
    }

    public function getTemplateName()
    {
        return "glow01/template/extension/module/ishiproductsblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2023 => 937,  2014 => 931,  2008 => 928,  2002 => 925,  1996 => 922,  1990 => 919,  1978 => 910,  1973 => 907,  1958 => 902,  1956 => 901,  1951 => 900,  1947 => 898,  1944 => 897,  1942 => 896,  1932 => 889,  1903 => 869,  1895 => 864,  1874 => 846,  1870 => 845,  1865 => 842,  1861 => 841,  1853 => 839,  1850 => 838,  1842 => 836,  1836 => 834,  1834 => 833,  1831 => 832,  1829 => 831,  1825 => 830,  1819 => 829,  1804 => 819,  1781 => 801,  1777 => 799,  1773 => 797,  1766 => 794,  1759 => 790,  1752 => 786,  1745 => 782,  1740 => 779,  1737 => 778,  1735 => 777,  1732 => 776,  1728 => 775,  1719 => 771,  1715 => 770,  1712 => 769,  1708 => 767,  1702 => 766,  1695 => 761,  1686 => 757,  1682 => 756,  1679 => 755,  1677 => 754,  1669 => 753,  1666 => 752,  1656 => 750,  1654 => 749,  1646 => 748,  1642 => 747,  1635 => 744,  1632 => 743,  1628 => 741,  1625 => 740,  1622 => 739,  1617 => 738,  1614 => 737,  1612 => 736,  1603 => 733,  1599 => 732,  1587 => 727,  1585 => 726,  1580 => 725,  1576 => 723,  1573 => 722,  1571 => 721,  1561 => 714,  1532 => 694,  1524 => 689,  1503 => 671,  1499 => 670,  1494 => 667,  1490 => 666,  1482 => 664,  1479 => 663,  1471 => 661,  1465 => 659,  1463 => 658,  1460 => 657,  1458 => 656,  1454 => 655,  1448 => 654,  1433 => 644,  1410 => 626,  1406 => 624,  1402 => 622,  1395 => 619,  1388 => 615,  1381 => 611,  1374 => 607,  1369 => 604,  1366 => 603,  1364 => 602,  1361 => 601,  1357 => 600,  1348 => 596,  1344 => 595,  1341 => 594,  1337 => 592,  1331 => 591,  1324 => 586,  1315 => 582,  1311 => 581,  1308 => 580,  1305 => 579,  1299 => 578,  1296 => 577,  1286 => 575,  1284 => 574,  1276 => 573,  1272 => 572,  1266 => 569,  1261 => 568,  1257 => 566,  1254 => 565,  1252 => 564,  1245 => 563,  1242 => 562,  1240 => 561,  1234 => 558,  1222 => 553,  1220 => 552,  1215 => 551,  1211 => 549,  1208 => 548,  1206 => 547,  1196 => 540,  1167 => 520,  1159 => 515,  1138 => 497,  1134 => 496,  1129 => 493,  1125 => 492,  1117 => 490,  1114 => 489,  1106 => 487,  1100 => 485,  1098 => 484,  1095 => 483,  1093 => 482,  1089 => 481,  1083 => 480,  1068 => 470,  1045 => 452,  1041 => 450,  1037 => 448,  1030 => 445,  1023 => 441,  1016 => 437,  1009 => 433,  1004 => 430,  1001 => 429,  998 => 428,  994 => 426,  985 => 422,  981 => 421,  978 => 420,  974 => 418,  968 => 417,  961 => 412,  952 => 408,  948 => 407,  945 => 406,  943 => 405,  935 => 404,  932 => 403,  922 => 401,  920 => 400,  908 => 399,  904 => 398,  897 => 395,  894 => 394,  890 => 392,  887 => 391,  885 => 390,  878 => 389,  875 => 388,  873 => 387,  867 => 384,  855 => 379,  852 => 378,  849 => 377,  845 => 375,  842 => 374,  840 => 373,  830 => 366,  801 => 346,  793 => 341,  772 => 323,  768 => 322,  764 => 320,  760 => 318,  752 => 316,  749 => 315,  741 => 313,  735 => 311,  733 => 310,  730 => 309,  728 => 308,  724 => 307,  718 => 306,  703 => 296,  680 => 278,  676 => 276,  673 => 275,  666 => 271,  659 => 267,  652 => 263,  645 => 259,  640 => 256,  637 => 255,  635 => 254,  632 => 253,  628 => 252,  619 => 248,  615 => 247,  612 => 246,  608 => 244,  602 => 243,  595 => 238,  586 => 234,  582 => 233,  579 => 232,  577 => 231,  569 => 230,  566 => 229,  556 => 227,  554 => 226,  542 => 225,  538 => 224,  531 => 221,  528 => 220,  524 => 218,  521 => 217,  518 => 216,  513 => 215,  510 => 214,  508 => 213,  502 => 210,  496 => 206,  490 => 205,  487 => 204,  484 => 203,  480 => 201,  477 => 200,  475 => 199,  465 => 192,  436 => 172,  428 => 167,  407 => 149,  403 => 148,  399 => 146,  395 => 144,  387 => 142,  384 => 141,  376 => 139,  370 => 137,  368 => 136,  365 => 135,  363 => 134,  359 => 133,  353 => 132,  338 => 122,  315 => 104,  310 => 101,  306 => 100,  299 => 97,  292 => 93,  285 => 89,  278 => 85,  273 => 82,  270 => 81,  268 => 80,  265 => 79,  261 => 78,  252 => 74,  248 => 73,  245 => 72,  241 => 70,  235 => 69,  228 => 64,  219 => 60,  215 => 59,  212 => 58,  209 => 57,  203 => 56,  200 => 55,  190 => 53,  188 => 52,  180 => 51,  176 => 50,  169 => 47,  166 => 46,  162 => 44,  159 => 43,  156 => 42,  152 => 41,  147 => 40,  145 => 39,  139 => 36,  134 => 33,  131 => 32,  118 => 29,  115 => 28,  110 => 27,  107 => 26,  99 => 23,  96 => 22,  93 => 21,  85 => 18,  82 => 17,  79 => 16,  71 => 13,  68 => 12,  65 => 11,  57 => 8,  54 => 7,  52 => 6,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/extension/module/ishiproductsblock.twig", "");
    }
}
