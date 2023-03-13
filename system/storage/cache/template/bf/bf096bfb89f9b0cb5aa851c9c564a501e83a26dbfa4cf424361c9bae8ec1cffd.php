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

/* fabulous/template/extension/module/ishiproductsblock.twig */
class __TwigTemplate_4141b086b54bf96e91088cf16819363a39f62e39de2865ed2453ffb9f5c78b64 extends \Twig\Template
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
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 104
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 105);
            echo "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"eye-open\" viewBox=\"0 0 650 650\"><title>eye-open</title>
                                   <g>
                                      <path d=\"M221.02,341.304c-49.708,0-103.206-19.44-154.71-56.22C27.808,257.59,4.044,230.351,3.051,229.203
                                        c-4.068-4.697-4.068-11.669,0-16.367c0.993-1.146,24.756-28.387,63.259-55.881c51.505-36.777,105.003-56.219,154.71-56.219
                                        c49.708,0,103.207,19.441,154.71,56.219c38.502,27.494,62.266,54.734,63.259,55.881c4.068,4.697,4.068,11.669,0,16.367
                                        c-0.993,1.146-24.756,28.387-63.259,55.881C324.227,321.863,270.729,341.304,221.02,341.304z M29.638,221.021
                                        c9.61,9.799,27.747,27.03,51.694,44.071c32.83,23.361,83.714,51.212,139.688,51.212s106.859-27.851,139.688-51.212
                                        c23.944-17.038,42.082-34.271,51.694-44.071c-9.609-9.799-27.747-27.03-51.694-44.071
                                        c-32.829-23.362-83.714-51.212-139.688-51.212s-106.858,27.85-139.688,51.212C57.388,193.988,39.25,211.219,29.638,221.021z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,298.521c-42.734,0-77.5-34.767-77.5-77.5c0-42.733,34.766-77.5,77.5-77.5c18.794,0,36.924,6.814,51.048,19.188
                                        c5.193,4.549,5.715,12.446,1.166,17.639c-4.549,5.193-12.447,5.714-17.639,1.166c-9.564-8.379-21.844-12.993-34.576-12.993
                                        c-28.949,0-52.5,23.552-52.5,52.5s23.551,52.5,52.5,52.5c28.95,0,52.5-23.552,52.5-52.5c0-6.903,5.597-12.5,12.5-12.5
                                        s12.5,5.597,12.5,12.5C298.521,263.754,263.754,298.521,221.02,298.521z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z\"/>
                                    </g></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"16%\" y=\"14%\"></use></svg>
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                <span class=\"lblcart\">";
            // line 129
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 134
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 134);
            echo "');\"><i class=\"fa fa-heart\"></i>
                             <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"heart-shape-outline\" viewBox=\"0 0 850 850\"><title>heart-shape-outline</title><path d=\"M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z\"/>
                                </symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"19%\" y=\"21%\"></use></svg>
                            </button>
                          </div>
                          <div class=\"btn-compare\">  
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 143
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 143);
            echo "');\"><i class=\"fa fa-exchange\"></i>                            
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"report\" viewBox=\"0 0 1050 1050\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"19%\" y=\"25%\"></use></svg>
                            </button>
                          </div>
                      </div>
                </div> 
                    <div class=\"caption\">
                      <h4><a href=\"";
            // line 153
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 153);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 153);
            echo "</a></h4>
                      <p class=\"description\">";
            // line 154
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 154);
            echo "</p>
                      ";
            // line 155
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 155)) {
                // line 156
                echo "                      <p class=\"price\">
                        ";
                // line 157
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 157)) {
                    // line 158
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 158);
                    echo "
                        ";
                } else {
                    // line 160
                    echo "                        <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 160);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 160);
                    echo "</span> 
                        ";
                }
                // line 162
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 162)) {
                    // line 163
                    echo "                        <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 163);
                    echo "</span>
                        ";
                }
                // line 165
                echo "                      </p>
                      ";
            }
            // line 167
            echo "                      <div class=\"btn-cart\">
                          <button data-toggle=\"tooltip\" title=\"";
            // line 168
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 168);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 168)) {
                echo " class=\"sold-out\" disabled";
            }
            echo "><span class=\"lblcart\">";
            echo ($context["button_cart"] ?? null);
            echo "</span>
                          </button>
                      </div>  
                    </div>                         
                  </div>
                </div>
        ";
            // line 174
            if ((($context["product_row"] ?? null) != 1)) {
                // line 175
                echo "          ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 176
                    echo "            </div>
          ";
                }
                // line 178
                echo "        ";
            }
            // line 179
            echo "        ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 180
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "        </div>        
      </div>
    </div>

    <div class=\"tab-pane\" id=\"bestseller-products-block";
        // line 185
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">        
        <div class=\"owl-carousel\">      
            ";
        // line 188
        $context["counter"] = 1;
        // line 189
        echo "            ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["bestseller"] ?? null));
        // line 190
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bestseller"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 191
            echo "              ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 192
                echo "                ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 193
                    echo "                  <div class=\"multilevel-item\">
                ";
                }
                // line 195
                echo "              ";
            }
            // line 196
            echo "                <div class=\"item product-container\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 196);
            echo "\"> 
                  <div class=\"product-thumb\">
                    <div class=\"image\">
                      <a href=\"";
            // line 199
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 199);
            echo "\">
                      <img src=\"";
            // line 200
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 200);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 200);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 200);
            echo "\" class=\"img-responsive ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 200) != "")) {
                echo " no-change ";
            }
            echo "\" />
                        ";
            // line 201
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 201) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 202
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 202);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 202);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 202);
                echo "\"/>
                        ";
            }
            // line 204
            echo "                      </a>  
                      ";
            // line 205
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 205)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 205);
                echo "</span>";
            }
            echo " 
                      ";
            // line 206
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 206)) {
                // line 207
                echo "                        <div class=\"rating\">
                          ";
                // line 208
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 209
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 209) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 213
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 218
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 219
                echo "                        </div>
                        ";
            } else {
                // line 221
                echo "                        <div class=\"rating\">
                          ";
                // line 222
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 223
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 227
                echo "                        </div>
                      ";
            }
            // line 228
            echo " 
                      ";
            // line 229
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 230
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 230)) {
                    // line 231
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 234
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 238
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 242
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 246
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 250
                echo "                      ";
            }
            // line 251
            echo "                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 253
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 254
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 254);
            echo "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"eye-open\" viewBox=\"0 0 650 650\"><title>eye-open</title>
                                   <g>
                                      <path d=\"M221.02,341.304c-49.708,0-103.206-19.44-154.71-56.22C27.808,257.59,4.044,230.351,3.051,229.203
                                        c-4.068-4.697-4.068-11.669,0-16.367c0.993-1.146,24.756-28.387,63.259-55.881c51.505-36.777,105.003-56.219,154.71-56.219
                                        c49.708,0,103.207,19.441,154.71,56.219c38.502,27.494,62.266,54.734,63.259,55.881c4.068,4.697,4.068,11.669,0,16.367
                                        c-0.993,1.146-24.756,28.387-63.259,55.881C324.227,321.863,270.729,341.304,221.02,341.304z M29.638,221.021
                                        c9.61,9.799,27.747,27.03,51.694,44.071c32.83,23.361,83.714,51.212,139.688,51.212s106.859-27.851,139.688-51.212
                                        c23.944-17.038,42.082-34.271,51.694-44.071c-9.609-9.799-27.747-27.03-51.694-44.071
                                        c-32.829-23.362-83.714-51.212-139.688-51.212s-106.858,27.85-139.688,51.212C57.388,193.988,39.25,211.219,29.638,221.021z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,298.521c-42.734,0-77.5-34.767-77.5-77.5c0-42.733,34.766-77.5,77.5-77.5c18.794,0,36.924,6.814,51.048,19.188
                                        c5.193,4.549,5.715,12.446,1.166,17.639c-4.549,5.193-12.447,5.714-17.639,1.166c-9.564-8.379-21.844-12.993-34.576-12.993
                                        c-28.949,0-52.5,23.552-52.5,52.5s23.551,52.5,52.5,52.5c28.95,0,52.5-23.552,52.5-52.5c0-6.903,5.597-12.5,12.5-12.5
                                        s12.5,5.597,12.5,12.5C298.521,263.754,263.754,298.521,221.02,298.521z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z\"/>
                                    </g></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"16%\" y=\"14%\"></use></svg>
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                <span class=\"lblcart\">";
            // line 278
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 283
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 283);
            echo "');\"><i class=\"fa fa-heart\"></i>
                             <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"heart-shape-outline\" viewBox=\"0 0 850 850\"><title>heart-shape-outline</title><path d=\"M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z\"/>
                                </symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"19%\" y=\"21%\"></use></svg>
                            </button>
                          </div>
                          <div class=\"btn-compare\">  
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 292
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 292);
            echo "');\"><i class=\"fa fa-exchange\"></i>                            
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"report\" viewBox=\"0 0 1050 1050\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"19%\" y=\"25%\"></use></svg>
                            </button>
                          </div>
                      </div>
                </div> 
                    <div class=\"caption\"> 
                      <h4><a href=\"";
            // line 302
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 302);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 302);
            echo "</a></h4>
                      <p class=\"description\">";
            // line 303
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 303);
            echo "</p>
                      ";
            // line 304
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 304)) {
                // line 305
                echo "                      <p class=\"price\">
                        ";
                // line 306
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 306)) {
                    // line 307
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 307);
                    echo "
                        ";
                } else {
                    // line 309
                    echo "                        <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 309);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 309);
                    echo "</span> 
                        ";
                }
                // line 311
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 311)) {
                    // line 312
                    echo "                        <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 312);
                    echo "</span>
                        ";
                }
                // line 314
                echo "                      </p>
                      ";
            }
            // line 316
            echo "                      <div class=\"btn-cart\">
                          <button data-toggle=\"tooltip\" title=\"";
            // line 317
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 317);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 317)) {
                echo " class=\"sold-out\" disabled";
            }
            echo "><span class=\"lblcart\">";
            echo ($context["button_cart"] ?? null);
            echo "</span>
                          </button>
                      </div>
                    </div>                             
                </div>
                </div>
        ";
            // line 323
            if ((($context["product_row"] ?? null) != 1)) {
                // line 324
                echo "          ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 325
                    echo "            </div>
          ";
                }
                // line 327
                echo "        ";
            }
            // line 328
            echo "            ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 329
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
        // line 334
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\"> 
          ";
        // line 337
        $context["counter"] = 1;
        // line 338
        echo "          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["new"] ?? null));
        // line 339
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["new"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "  
            ";
            // line 340
            if ((($context["product_row"] ?? null) != 1)) {
                // line 341
                echo "              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 342
                    echo "                <div class=\"multilevel-item\">
              ";
                }
                // line 344
                echo "            ";
            }
            // line 345
            echo "              <div class=\"item product-container\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 345);
            echo "\"> 
                  <div class=\"product-thumb\">
                <div class=\"image\">
                      <a href=\"";
            // line 348
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 348);
            echo "\">
                  <img src=\"";
            // line 349
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 349);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 349);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 349);
            echo "\" class=\"img-responsive ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 349) != "")) {
                echo " no-change ";
            }
            echo "\" />
                        ";
            // line 350
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 350) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 351
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 351);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 351);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 351);
                echo "\"/>
                        ";
            }
            // line 353
            echo "                      </a>  
                      ";
            // line 354
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 354)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 354);
                echo "</span>";
            }
            echo " 
                      ";
            // line 355
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 355)) {
                // line 356
                echo "                        <div class=\"rating\">
                          ";
                // line 357
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 358
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 358) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 362
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 367
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 368
                echo "                        </div>
                        ";
            } else {
                // line 370
                echo "                        <div class=\"rating\">
                          ";
                // line 371
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 372
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 376
                echo "                        </div>
                      ";
            }
            // line 378
            echo "                      ";
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 379
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 379)) {
                    // line 380
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 383
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 387
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 391
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 395
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 398
                echo "   
                      ";
            }
            // line 400
            echo "                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 402
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 403
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 403);
            echo "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"eye-open\" viewBox=\"0 0 650 650\"><title>eye-open</title>
                                   <g>
                                      <path d=\"M221.02,341.304c-49.708,0-103.206-19.44-154.71-56.22C27.808,257.59,4.044,230.351,3.051,229.203
                                        c-4.068-4.697-4.068-11.669,0-16.367c0.993-1.146,24.756-28.387,63.259-55.881c51.505-36.777,105.003-56.219,154.71-56.219
                                        c49.708,0,103.207,19.441,154.71,56.219c38.502,27.494,62.266,54.734,63.259,55.881c4.068,4.697,4.068,11.669,0,16.367
                                        c-0.993,1.146-24.756,28.387-63.259,55.881C324.227,321.863,270.729,341.304,221.02,341.304z M29.638,221.021
                                        c9.61,9.799,27.747,27.03,51.694,44.071c32.83,23.361,83.714,51.212,139.688,51.212s106.859-27.851,139.688-51.212
                                        c23.944-17.038,42.082-34.271,51.694-44.071c-9.609-9.799-27.747-27.03-51.694-44.071
                                        c-32.829-23.362-83.714-51.212-139.688-51.212s-106.858,27.85-139.688,51.212C57.388,193.988,39.25,211.219,29.638,221.021z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,298.521c-42.734,0-77.5-34.767-77.5-77.5c0-42.733,34.766-77.5,77.5-77.5c18.794,0,36.924,6.814,51.048,19.188
                                        c5.193,4.549,5.715,12.446,1.166,17.639c-4.549,5.193-12.447,5.714-17.639,1.166c-9.564-8.379-21.844-12.993-34.576-12.993
                                        c-28.949,0-52.5,23.552-52.5,52.5s23.551,52.5,52.5,52.5c28.95,0,52.5-23.552,52.5-52.5c0-6.903,5.597-12.5,12.5-12.5
                                        s12.5,5.597,12.5,12.5C298.521,263.754,263.754,298.521,221.02,298.521z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z\"/>
                                    </g></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"16%\" y=\"14%\"></use></svg>
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                <span class=\"lblcart\">";
            // line 427
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 432
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 432);
            echo "');\"><i class=\"fa fa-heart\"></i>
                             <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"heart-shape-outline\" viewBox=\"0 0 850 850\"><title>heart-shape-outline</title><path d=\"M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z\"/>
                                </symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"19%\" y=\"21%\"></use></svg>
                            </button>
                          </div>
                          <div class=\"btn-compare\">  
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 441
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 441);
            echo "');\"><i class=\"fa fa-exchange\"></i>                            
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"report\" viewBox=\"0 0 1050 1050\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"19%\" y=\"25%\"></use></svg>
                            </button>
                          </div>
                      </div>
                </div>   
                <div class=\"caption\">
                  <h4><a href=\"";
            // line 451
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 451);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 451);
            echo "</a></h4>
                  <p class=\"description\">";
            // line 452
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 452);
            echo "</p>
                  ";
            // line 453
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 453)) {
                // line 454
                echo "                  <p class=\"price\">
                    ";
                // line 455
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 455)) {
                    // line 456
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 456);
                    echo "
                    ";
                } else {
                    // line 458
                    echo "                    <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 458);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 458);
                    echo "</span> 
                    ";
                }
                // line 460
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 460)) {
                    // line 461
                    echo "                    <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 461);
                    echo "</span>
                    ";
                }
                // line 463
                echo "                  </p>
                  ";
            }
            // line 464
            echo " 
                  <div class=\"btn-cart\">
                          <button data-toggle=\"tooltip\" title=\"";
            // line 466
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 466);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 466)) {
                echo " class=\"sold-out\" disabled";
            }
            echo "><span class=\"lblcart\">";
            echo ($context["button_cart"] ?? null);
            echo "</span>
                          </button>
                      </div>
                </div>                           
              </div>
                </div>
            ";
            // line 472
            if ((($context["product_row"] ?? null) != 1)) {
                // line 473
                echo "              ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 474
                    echo "                </div>
              ";
                }
                // line 476
                echo "            ";
            }
            echo " 
          ";
            // line 477
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 478
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
        // line 483
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\">
          ";
        // line 486
        $context["counter"] = 1;
        // line 487
        echo "          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["special"] ?? null));
        // line 488
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["special"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "  
            ";
            // line 489
            if ((($context["product_row"] ?? null) != 1)) {
                // line 490
                echo "              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 491
                    echo "                <div class=\"multilevel-item\">
              ";
                }
                // line 493
                echo "            ";
            }
            echo "     
              <div class=\"item product-container\" data-countdowntime=\"";
            // line 494
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 494);
            echo "\"> 
                  <div class=\"product-thumb\">
                <div class=\"image\">
                      <a href=\"";
            // line 497
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 497);
            echo "\">
                        <img src=\"";
            // line 498
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 498);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 498);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 498);
            echo "\" class=\"img-responsive\" />
                        ";
            // line 499
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 499) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 500
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 500);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 500);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 500);
                echo "\"/>
                        ";
            }
            // line 502
            echo "                      </a>  
                      ";
            // line 503
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 503)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 503);
                echo "</span>";
            }
            // line 504
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 504)) {
                // line 505
                echo "                        <div class=\"rating\">
                          ";
                // line 506
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 507
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 507) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 511
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 516
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 517
                echo "                        </div>
                        ";
            } else {
                // line 519
                echo "                        <div class=\"rating\">
                          ";
                // line 520
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 521
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 525
                echo "                        </div>
                      ";
            }
            // line 526
            echo " 
                      ";
            // line 527
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 528
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 528)) {
                    // line 529
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 532
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 536
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 540
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 544
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 547
                echo " 
                      ";
            }
            // line 549
            echo "                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 551
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 552
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 552);
            echo "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"eye-open\" viewBox=\"0 0 650 650\"><title>eye-open</title>
                                   <g>
                                      <path d=\"M221.02,341.304c-49.708,0-103.206-19.44-154.71-56.22C27.808,257.59,4.044,230.351,3.051,229.203
                                        c-4.068-4.697-4.068-11.669,0-16.367c0.993-1.146,24.756-28.387,63.259-55.881c51.505-36.777,105.003-56.219,154.71-56.219
                                        c49.708,0,103.207,19.441,154.71,56.219c38.502,27.494,62.266,54.734,63.259,55.881c4.068,4.697,4.068,11.669,0,16.367
                                        c-0.993,1.146-24.756,28.387-63.259,55.881C324.227,321.863,270.729,341.304,221.02,341.304z M29.638,221.021
                                        c9.61,9.799,27.747,27.03,51.694,44.071c32.83,23.361,83.714,51.212,139.688,51.212s106.859-27.851,139.688-51.212
                                        c23.944-17.038,42.082-34.271,51.694-44.071c-9.609-9.799-27.747-27.03-51.694-44.071
                                        c-32.829-23.362-83.714-51.212-139.688-51.212s-106.858,27.85-139.688,51.212C57.388,193.988,39.25,211.219,29.638,221.021z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,298.521c-42.734,0-77.5-34.767-77.5-77.5c0-42.733,34.766-77.5,77.5-77.5c18.794,0,36.924,6.814,51.048,19.188
                                        c5.193,4.549,5.715,12.446,1.166,17.639c-4.549,5.193-12.447,5.714-17.639,1.166c-9.564-8.379-21.844-12.993-34.576-12.993
                                        c-28.949,0-52.5,23.552-52.5,52.5s23.551,52.5,52.5,52.5c28.95,0,52.5-23.552,52.5-52.5c0-6.903,5.597-12.5,12.5-12.5
                                        s12.5,5.597,12.5,12.5C298.521,263.754,263.754,298.521,221.02,298.521z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z\"/>
                                    </g></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"16%\" y=\"14%\"></use></svg>
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                <span class=\"lblcart\">";
            // line 576
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 581
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 581);
            echo "');\"><i class=\"fa fa-heart\"></i>
                             <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"heart-shape-outline\" viewBox=\"0 0 850 850\"><title>heart-shape-outline</title><path d=\"M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z\"/>
                                </symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"19%\" y=\"21%\"></use></svg>
                            </button>
                          </div>
                          <div class=\"btn-compare\">  
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 590
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 590);
            echo "');\"><i class=\"fa fa-exchange\"></i>                            
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"report\" viewBox=\"0 0 1050 1050\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"19%\" y=\"25%\"></use></svg>
                            </button>
                          </div>
                      </div>
                </div>                   
                <div class=\"caption\">
                  <h4><a href=\"";
            // line 600
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 600);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 600);
            echo "</a></h4>
                  <p class=\"description\">";
            // line 601
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 601);
            echo "</p>
                  ";
            // line 602
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 602)) {
                // line 603
                echo "                  <p class=\"price\">
                    ";
                // line 604
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 604)) {
                    // line 605
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 605);
                    echo "
                    ";
                } else {
                    // line 607
                    echo "                    <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 607);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 607);
                    echo "</span> 
                    ";
                }
                // line 609
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 609)) {
                    // line 610
                    echo "                    <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 610);
                    echo "</span>
                    ";
                }
                // line 612
                echo "                  </p>
                  ";
            }
            // line 613
            echo "  
                  <div class=\"btn-cart\">
                          <button data-toggle=\"tooltip\" title=\"";
            // line 615
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 615);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 615)) {
                echo " class=\"sold-out\" disabled";
            }
            echo "><span class=\"lblcart\">";
            echo ($context["button_cart"] ?? null);
            echo "</span>
                          </button>
                      </div>
                </div>
              </div>
                </div>
            ";
            // line 621
            if ((($context["product_row"] ?? null) != 1)) {
                // line 622
                echo "              ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 623
                    echo "                </div>
              ";
                }
                // line 625
                echo "            ";
            }
            echo " 
          ";
            // line 626
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 627
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
        // line 632
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 633
            echo "  <div class=\"tab-pane\" id=\"category-block";
            echo twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 633);
            echo "-";
            echo ($context["tab_randomnumer"] ?? null);
            echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\">
          ";
            // line 636
            $context["counter"] = 1;
            // line 637
            echo "              ";
            $context["lastproduct"] = twig_length_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["category"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 637)] ?? null) : null));
            // line 638
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["category"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 638)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 639
                echo "                ";
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 640
                    echo "                  ";
                    if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                        // line 641
                        echo "                    <div class=\"multilevel-item\">
                  ";
                    }
                    // line 643
                    echo "                ";
                }
                // line 644
                echo "                  <div class=\"item product-container\" data-countdowntime=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 644);
                echo "\"> 
                  <div class=\"product-thumb\">
                    <div class=\"image\">
                      <a href=\"";
                // line 647
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 647);
                echo "\">
                        <img src=\"";
                // line 648
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 648);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 648);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 648);
                echo "\" class=\"img-responsive\" />
                        ";
                // line 649
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 649) != "") && (($context["hover_image"] ?? null) == 1))) {
                    // line 650
                    echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 650);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 650);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 650);
                    echo "\"/>
                        ";
                }
                // line 652
                echo "                      </a>  
                      ";
                // line 653
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 653)) {
                    echo "<span class=\"outstock-overlay\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 653);
                    echo "</span>";
                }
                echo " 
                       ";
                // line 654
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 654)) {
                    // line 655
                    echo "                        <div class=\"rating\">
                          ";
                    // line 656
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 657
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 657) < $context["i"])) {
                            echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                        } else {
                            // line 661
                            echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                        }
                        // line 666
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 667
                    echo "                        </div>
                        ";
                } else {
                    // line 669
                    echo "                        <div class=\"rating\">
                          ";
                    // line 670
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 671
                        echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 675
                    echo "                        </div>
                      ";
                }
                // line 676
                echo " 
                      ";
                // line 677
                if ((($context["product_counter"] ?? null) == 1)) {
                    // line 678
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 678)) {
                        // line 679
                        echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 682
                        echo ($context["days_name"] ?? null);
                        echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 686
                        echo ($context["hours_name"] ?? null);
                        echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 690
                        echo ($context["min_name"] ?? null);
                        echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 694
                        echo ($context["sec_name"] ?? null);
                        echo "</span>
                            </div>
                          </div>
                        ";
                    }
                    // line 697
                    echo "  
                      ";
                }
                // line 699
                echo "                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
                // line 701
                echo ($context["quick_view"] ?? null);
                echo "\"> 
                              <a class=\"quickbox\" href=\"";
                // line 702
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 702);
                echo "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"eye-open\" viewBox=\"0 0 650 650\"><title>eye-open</title>
                                   <g>
                                      <path d=\"M221.02,341.304c-49.708,0-103.206-19.44-154.71-56.22C27.808,257.59,4.044,230.351,3.051,229.203
                                        c-4.068-4.697-4.068-11.669,0-16.367c0.993-1.146,24.756-28.387,63.259-55.881c51.505-36.777,105.003-56.219,154.71-56.219
                                        c49.708,0,103.207,19.441,154.71,56.219c38.502,27.494,62.266,54.734,63.259,55.881c4.068,4.697,4.068,11.669,0,16.367
                                        c-0.993,1.146-24.756,28.387-63.259,55.881C324.227,321.863,270.729,341.304,221.02,341.304z M29.638,221.021
                                        c9.61,9.799,27.747,27.03,51.694,44.071c32.83,23.361,83.714,51.212,139.688,51.212s106.859-27.851,139.688-51.212
                                        c23.944-17.038,42.082-34.271,51.694-44.071c-9.609-9.799-27.747-27.03-51.694-44.071
                                        c-32.829-23.362-83.714-51.212-139.688-51.212s-106.858,27.85-139.688,51.212C57.388,193.988,39.25,211.219,29.638,221.021z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,298.521c-42.734,0-77.5-34.767-77.5-77.5c0-42.733,34.766-77.5,77.5-77.5c18.794,0,36.924,6.814,51.048,19.188
                                        c5.193,4.549,5.715,12.446,1.166,17.639c-4.549,5.193-12.447,5.714-17.639,1.166c-9.564-8.379-21.844-12.993-34.576-12.993
                                        c-28.949,0-52.5,23.552-52.5,52.5s23.551,52.5,52.5,52.5c28.95,0,52.5-23.552,52.5-52.5c0-6.903,5.597-12.5,12.5-12.5
                                        s12.5,5.597,12.5,12.5C298.521,263.754,263.754,298.521,221.02,298.521z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z\"/>
                                    </g></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"16%\" y=\"14%\"></use></svg>
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                <span class=\"lblcart\">";
                // line 726
                echo ($context["quick_view"] ?? null);
                echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 731
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 731);
                echo "');\"><i class=\"fa fa-heart\"></i>
                             <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"heart-shape-outline\" viewBox=\"0 0 850 850\"><title>heart-shape-outline</title><path d=\"M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z\"/>
                                </symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"19%\" y=\"21%\"></use></svg>
                            </button>
                          </div>
                          <div class=\"btn-compare\">  
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 740
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 740);
                echo "');\"><i class=\"fa fa-exchange\"></i>                            
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"report\" viewBox=\"0 0 1050 1050\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"19%\" y=\"25%\"></use></svg>
                            </button>
                          </div>
                      </div>
                </div>                   
                    <div class=\"caption\">   
                      <h4><a href=\"";
                // line 750
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 750);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 750);
                echo "</a></h4>
                      <p class=\"description\">";
                // line 751
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 751);
                echo "</p>
                      ";
                // line 752
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 752)) {
                    // line 753
                    echo "                      <p class=\"price\">
                        ";
                    // line 754
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 754)) {
                        // line 755
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 755);
                        echo "
                        ";
                    } else {
                        // line 757
                        echo "                        <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 757);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 757);
                        echo "</span> 
                        ";
                    }
                    // line 759
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 759)) {
                        // line 760
                        echo "                        <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 760);
                        echo "</span>
                        ";
                    }
                    // line 762
                    echo "                      </p>
                      ";
                }
                // line 763
                echo " 
                      <div class=\"btn-cart\">
                          <button data-toggle=\"tooltip\" title=\"";
                // line 765
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 765);
                echo "');\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 765)) {
                    echo " class=\"sold-out\" disabled";
                }
                echo "><span class=\"lblcart\">";
                echo ($context["button_cart"] ?? null);
                echo "</span>
                          </button>
                      </div>
                    </div>
                  </div>
                </div>
                ";
                // line 771
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 772
                    echo "                  ";
                    if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                        // line 773
                        echo "                    </div>
                  ";
                    }
                    // line 775
                    echo "                ";
                }
                echo " 
              ";
                // line 776
                $context["counter"] = (($context["counter"] ?? null) + 1);
                // line 777
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
        // line 782
        echo "  </div>
</div>
  <script type=\"text/javascript\">
    \$('#";
        // line 785
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
        // line 794
        echo ($context["mobile_column"] ?? null);
        echo "
            },
            544:{
                items:";
        // line 797
        echo ($context["tablet_column"] ?? null);
        echo "
            },
            768:{
                items:";
        // line 800
        echo ($context["laptop_column"] ?? null);
        echo "
            },
            992:{
                items:";
        // line 803
        echo ($context["laptop_column"] ?? null);
        echo "
            },
            1200:{
                items:";
        // line 806
        echo ($context["desktop_column"] ?? null);
        echo "
            }
        }
    });   
  </script>
<script type=\"text/javascript\"><!--
\$('#";
        // line 812
        echo ($context["ishi_randomnumer"] ?? null);
        echo " li a:first').tab('show');
//--></script>
</section>";
    }

    public function getTemplateName()
    {
        return "fabulous/template/extension/module/ishiproductsblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1893 => 812,  1884 => 806,  1878 => 803,  1872 => 800,  1866 => 797,  1860 => 794,  1848 => 785,  1843 => 782,  1828 => 777,  1826 => 776,  1821 => 775,  1817 => 773,  1814 => 772,  1812 => 771,  1795 => 765,  1791 => 763,  1787 => 762,  1779 => 760,  1776 => 759,  1768 => 757,  1762 => 755,  1760 => 754,  1757 => 753,  1755 => 752,  1751 => 751,  1745 => 750,  1730 => 740,  1716 => 731,  1708 => 726,  1681 => 702,  1677 => 701,  1673 => 699,  1669 => 697,  1662 => 694,  1655 => 690,  1648 => 686,  1641 => 682,  1636 => 679,  1633 => 678,  1631 => 677,  1628 => 676,  1624 => 675,  1615 => 671,  1611 => 670,  1608 => 669,  1604 => 667,  1598 => 666,  1591 => 661,  1582 => 657,  1578 => 656,  1575 => 655,  1573 => 654,  1565 => 653,  1562 => 652,  1552 => 650,  1550 => 649,  1542 => 648,  1538 => 647,  1531 => 644,  1528 => 643,  1524 => 641,  1521 => 640,  1518 => 639,  1513 => 638,  1510 => 637,  1508 => 636,  1499 => 633,  1495 => 632,  1483 => 627,  1481 => 626,  1476 => 625,  1472 => 623,  1469 => 622,  1467 => 621,  1450 => 615,  1446 => 613,  1442 => 612,  1434 => 610,  1431 => 609,  1423 => 607,  1417 => 605,  1415 => 604,  1412 => 603,  1410 => 602,  1406 => 601,  1400 => 600,  1385 => 590,  1371 => 581,  1363 => 576,  1336 => 552,  1332 => 551,  1328 => 549,  1324 => 547,  1317 => 544,  1310 => 540,  1303 => 536,  1296 => 532,  1291 => 529,  1288 => 528,  1286 => 527,  1283 => 526,  1279 => 525,  1270 => 521,  1266 => 520,  1263 => 519,  1259 => 517,  1253 => 516,  1246 => 511,  1237 => 507,  1233 => 506,  1230 => 505,  1227 => 504,  1221 => 503,  1218 => 502,  1208 => 500,  1206 => 499,  1198 => 498,  1194 => 497,  1188 => 494,  1183 => 493,  1179 => 491,  1176 => 490,  1174 => 489,  1167 => 488,  1164 => 487,  1162 => 486,  1156 => 483,  1144 => 478,  1142 => 477,  1137 => 476,  1133 => 474,  1130 => 473,  1128 => 472,  1111 => 466,  1107 => 464,  1103 => 463,  1095 => 461,  1092 => 460,  1084 => 458,  1078 => 456,  1076 => 455,  1073 => 454,  1071 => 453,  1067 => 452,  1061 => 451,  1046 => 441,  1032 => 432,  1024 => 427,  997 => 403,  993 => 402,  989 => 400,  985 => 398,  978 => 395,  971 => 391,  964 => 387,  957 => 383,  952 => 380,  949 => 379,  946 => 378,  942 => 376,  933 => 372,  929 => 371,  926 => 370,  922 => 368,  916 => 367,  909 => 362,  900 => 358,  896 => 357,  893 => 356,  891 => 355,  883 => 354,  880 => 353,  870 => 351,  868 => 350,  856 => 349,  852 => 348,  845 => 345,  842 => 344,  838 => 342,  835 => 341,  833 => 340,  826 => 339,  823 => 338,  821 => 337,  815 => 334,  803 => 329,  800 => 328,  797 => 327,  793 => 325,  790 => 324,  788 => 323,  771 => 317,  768 => 316,  764 => 314,  756 => 312,  753 => 311,  745 => 309,  739 => 307,  737 => 306,  734 => 305,  732 => 304,  728 => 303,  722 => 302,  707 => 292,  693 => 283,  685 => 278,  658 => 254,  654 => 253,  650 => 251,  647 => 250,  640 => 246,  633 => 242,  626 => 238,  619 => 234,  614 => 231,  611 => 230,  609 => 229,  606 => 228,  602 => 227,  593 => 223,  589 => 222,  586 => 221,  582 => 219,  576 => 218,  569 => 213,  560 => 209,  556 => 208,  553 => 207,  551 => 206,  543 => 205,  540 => 204,  530 => 202,  528 => 201,  516 => 200,  512 => 199,  505 => 196,  502 => 195,  498 => 193,  495 => 192,  492 => 191,  487 => 190,  484 => 189,  482 => 188,  476 => 185,  470 => 181,  464 => 180,  461 => 179,  458 => 178,  454 => 176,  451 => 175,  449 => 174,  432 => 168,  429 => 167,  425 => 165,  417 => 163,  414 => 162,  406 => 160,  400 => 158,  398 => 157,  395 => 156,  393 => 155,  389 => 154,  383 => 153,  368 => 143,  354 => 134,  346 => 129,  319 => 105,  315 => 104,  310 => 101,  306 => 100,  299 => 97,  292 => 93,  285 => 89,  278 => 85,  273 => 82,  270 => 81,  268 => 80,  265 => 79,  261 => 78,  252 => 74,  248 => 73,  245 => 72,  241 => 70,  235 => 69,  228 => 64,  219 => 60,  215 => 59,  212 => 58,  209 => 57,  203 => 56,  200 => 55,  190 => 53,  188 => 52,  180 => 51,  176 => 50,  169 => 47,  166 => 46,  162 => 44,  159 => 43,  156 => 42,  152 => 41,  147 => 40,  145 => 39,  139 => 36,  134 => 33,  131 => 32,  118 => 29,  115 => 28,  110 => 27,  107 => 26,  99 => 23,  96 => 22,  93 => 21,  85 => 18,  82 => 17,  79 => 16,  71 => 13,  68 => 12,  65 => 11,  57 => 8,  54 => 7,  52 => 6,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/ishiproductsblock.twig", "");
    }
}
