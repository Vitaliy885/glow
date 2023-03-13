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

/* glow01/template/product/category.twig */
class __TwigTemplate_5e37b3901a5e5d8704c9ac369e12a1437e9d3537c098c9e54ddcc506b718306a extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div class=\"breadcrumb-container\">
  <h2 class=\"page-title\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h2>
  <ul class=\"breadcrumb\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </ul>
</div>
<div id=\"product-category\" class=\"container\">
  <div class=\"row\">
  <div class=\"wrapper_container\">";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 15
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"products\">
        ";
        // line 22
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 23
            echo "          <div class=\"category_banner\">
            <div class=\"row\">
              <div class=\"col-sm-12 category-title\">";
            // line 25
            echo ($context["heading_title"] ?? null);
            echo "</div>
              ";
            // line 26
            if (($context["description"] ?? null)) {
                // line 27
                echo "              <div class=\"col-sm-12 category_description\">";
                echo ($context["description"] ?? null);
                echo "</div>
              ";
            }
            // line 29
            echo "            </div>
          </div>
        ";
        }
        // line 31
        echo "\t\t
        ";
        // line 32
        if ((($context["subcategory_type"] ?? null) != "none")) {
            // line 33
            echo "            ";
            if (($context["categories"] ?? null)) {
                // line 34
                echo "              <div class=\"refine-search\">
                  <div class=\"row\">
                    <div class=\"col-sm-12 category-list\">
                      <ul class=\"";
                // line 37
                if ((($context["subcategory_type"] ?? null) == "slider")) {
                    echo " owl-carousel ";
                } else {
                    echo "row";
                }
                echo "\">
                        ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 39
                    echo "                          <li class=\"item ";
                    if ((($context["subcategory_type"] ?? null) == "grid")) {
                        echo "col-md-3 col-sm-3 col-xs-4";
                    }
                    echo "\">
                            <a href=\"";
                    // line 40
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 40);
                    echo "\">
                              <img src=\"";
                    // line 41
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "subcategory_image", [], "any", false, false, false, 41);
                    echo "\" />
                              <span class=\"subcategory-title\">";
                    // line 42
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 42);
                    echo "</span>
                            </a>
                          </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                      </ul>
                    </div>
                  </div>
              </div>
            ";
            }
            // line 51
            echo "        ";
        }
        echo "\t\t
        ";
        // line 52
        if (($context["products"] ?? null)) {
            // line 53
            echo "          <div class=\"product-list-top\">
            <div class=\"row\">
              <div class=\"btn-list-grid\">
                <div class=\"btn-group btn-group-sm\">
                  <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 57
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
                  <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 58
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>                
                </div>
              </div>
              <div class=\"compare-total\"><a href=\"";
            // line 61
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
              <div class=\"pagination-right\">
                <div class=\"sort-by-wrapper\">
                  <div class=\"col-md-2 text-right sort-by\">
                    <label class=\"control-label\" for=\"input-sort\">";
            // line 65
            echo ($context["text_sort"] ?? null);
            echo "</label>
                  </div>
                  <div class=\"col-md-3 text-right sort\">
                    <div class=\"select-wrapper\">
                      <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 71
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 71) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 72
                    echo "                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 72);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 72);
                    echo "</option>
                        ";
                } else {
                    // line 73
                    echo "                    
                        <option value=\"";
                    // line 74
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 74);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 74);
                    echo "</option>
                        ";
                }
                // line 76
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                      </select>
                    </div>
                  </div>
                </div>
                <div class=\"show-wrapper\">
                  <div class=\"col-md-1 text-right show\">
                    <label class=\"control-label\" for=\"input-limit\">";
            // line 83
            echo ($context["text_limit"] ?? null);
            echo "</label>
                  </div>
                  <div class=\"col-md-2 text-right limit\">
                    <div class=\"select-wrapper\">
                      <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                        ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 89
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 89) == ($context["limit"] ?? null))) {
                    // line 90
                    echo "                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 90);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 90);
                    echo "</option>
                        ";
                } else {
                    // line 92
                    echo "                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 92);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 92);
                    echo "</option>
                        ";
                }
                // line 94
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "                  
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"row product-list-js\"> 
            ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 104
                echo "            <div class=\"product-layout product-list\">
              <div class=\"product-container\">
                <div class=\"product-thumb\">
                  <div class=\"image\" data-countdowntime=\"";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 107);
                echo "\">
                    <a href=\"";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 108);
                echo "\">
                      <img src=\"";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 109);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 109);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 109);
                echo "\" class=\"img-responsive\" />
                      ";
                // line 110
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 110) != "")) {
                    // line 111
                    echo "                        <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 111);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 111);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 111);
                    echo "\"/>
                      ";
                }
                // line 113
                echo "                    </a>  
    \t\t\t\t        ";
                // line 114
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 114)) {
                    echo "<span class=\"outstock-overlay\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 114);
                    echo "</span>";
                }
                // line 115
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 115)) {
                    // line 116
                    echo "                      <div class=\"rating\">
                        ";
                    // line 117
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 118
                        echo "                          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 118) < $context["i"])) {
                            echo " 
                            <span class=\"fa fa-stack\">
                              <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span> 
                          ";
                        } else {
                            // line 122
                            echo " 
                            <span class=\"fa fa-stack\">
                              <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                            </span> 
                          ";
                        }
                        // line 127
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 128
                    echo "                      </div>
                      ";
                } else {
                    // line 130
                    echo "                      <div class=\"rating\">
                        ";
                    // line 131
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 132
                        echo "                        <span class=\"fa fa-stack\">
                          <i class=\"fa fa-star gray fa-stack-2x\"></i>
                          </span>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 136
                    echo "                      </div>
                    ";
                }
                // line 138
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 138) && (($context["category_page_counter"] ?? null) == 1))) {
                    // line 139
                    echo "                      <div class='countdown-container'>
                        <div class='countdown-days counter'>
                          <span class=\"data\"></span>
                          <span class=\"lbl\">";
                    // line 142
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                        </div>
                        <div class='countdown-hours counter'>
                          <span class=\"data\"></span>
                          <span class=\"lbl\">";
                    // line 146
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                        </div>
                        <div class='countdown-minutes counter'>
                          <span class=\"data\"></span>
                          <span class=\"lbl\">";
                    // line 150
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                        </div>
                        <div class='countdown-seconds counter'>
                          <span class=\"data\"></span>
                          <span class=\"lbl\">";
                    // line 154
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                        </div>
                      </div>
                    ";
                }
                // line 157
                echo "\t
                      <div class=\"button-group\">
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 160
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 160);
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
                // line 178
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 178);
                echo "');\"><i class=\"fa fa-exchange\"></i>                            
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"report\" viewBox=\"0 0 1400 1400\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"28%\" y=\"33%\"></use></svg>
                            </button>
                          </div>
                      </div>
                  </div>
                  <div class=\"caption\" data-countdowntime=\"";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 187);
                echo "\"> 
                    <h4><a href=\"";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 188);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 188);
                echo "</a></h4>
                    <p class=\"description\">";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 189);
                echo "</p>
                    ";
                // line 190
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 190)) {
                    // line 191
                    echo "                      <p class=\"price\"> 
                        ";
                    // line 192
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 192)) {
                        // line 193
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 193);
                        echo "
                        ";
                    } else {
                        // line 194
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 194);
                        echo "</span> 
                        <span class=\"price-old\">";
                        // line 195
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 195);
                        echo "</span> 
                        ";
                    }
                    // line 197
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 197)) {
                        echo " 
                        <span class=\"price-tax\">";
                        // line 198
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 198);
                        echo "</span> 
                        ";
                    }
                    // line 199
                    echo " 
                      </p>
                    ";
                }
                // line 202
                echo "                      <div class=\"btn-cart-quickview\">  
                        <div class=\"btn-quickview\"> 
                          <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
                // line 204
                echo ($context["quick_view"] ?? null);
                echo "\"> 
                            <a class=\"quickbox\" href=\"";
                // line 205
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 205);
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
                // line 223
                echo ($context["quick_view"] ?? null);
                echo "</span>
                            </a>
                          </div>
                        </div>
                        <div class=\"btn-cart\">
                            <div class=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 228
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 228);
                echo "');\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 228)) {
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
                // line 248
                echo ($context["button_cart"] ?? null);
                echo "</span>
                            </div>
                        </div>  
                      </div>
                  </div>    
                </div>
              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 256
            echo " 
          </div>
          <div class=\"category-pagination\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-xs-12 text-left pagination-desc\">";
            // line 260
            echo ($context["results"] ?? null);
            echo "</div>
              <div class=\"col-sm-6 col-xs-12 text-right\">";
            // line 261
            echo ($context["pagination"] ?? null);
            echo "</div>
            </div>
          </div>
        ";
        }
        // line 265
        echo "      </div>
      ";
        // line 266
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 267
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 269
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 272
        echo "      ";
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 273
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
</div>
";
        // line 276
        echo ($context["footer"] ?? null);
        echo "
<script type=\"text/javascript\">
  \$('.category-list .owl-carousel').owlCarousel({
    loop:false,
    nav:true,    
    margin: 30,
    dots: false,      
    rewind: true,
    rtl: \$('html').attr('dir') == 'rtl'? true : false,  
    navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
    responsive:{
          0:{
              items:2
          },
          450:{
              items:3
          },
          767:{
              items:3
          },
          991:{
              items:3
          },
          1200:{
              items:4
          }
      }
  });   
</script>";
    }

    public function getTemplateName()
    {
        return "glow01/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  669 => 276,  663 => 273,  657 => 272,  649 => 269,  643 => 267,  641 => 266,  638 => 265,  631 => 261,  627 => 260,  621 => 256,  606 => 248,  577 => 228,  569 => 223,  548 => 205,  544 => 204,  540 => 202,  535 => 199,  528 => 198,  523 => 197,  518 => 195,  513 => 194,  507 => 193,  505 => 192,  502 => 191,  500 => 190,  496 => 189,  490 => 188,  486 => 187,  472 => 178,  449 => 160,  444 => 157,  437 => 154,  430 => 150,  423 => 146,  416 => 142,  411 => 139,  408 => 138,  404 => 136,  395 => 132,  391 => 131,  388 => 130,  384 => 128,  378 => 127,  371 => 122,  362 => 118,  358 => 117,  355 => 116,  352 => 115,  346 => 114,  343 => 113,  333 => 111,  331 => 110,  323 => 109,  319 => 108,  315 => 107,  310 => 104,  306 => 103,  290 => 94,  282 => 92,  274 => 90,  271 => 89,  267 => 88,  259 => 83,  251 => 77,  245 => 76,  238 => 74,  235 => 73,  227 => 72,  224 => 71,  220 => 70,  212 => 65,  203 => 61,  197 => 58,  193 => 57,  187 => 53,  185 => 52,  180 => 51,  173 => 46,  163 => 42,  159 => 41,  155 => 40,  148 => 39,  144 => 38,  136 => 37,  131 => 34,  128 => 33,  126 => 32,  123 => 31,  118 => 29,  112 => 27,  110 => 26,  106 => 25,  102 => 23,  100 => 22,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  72 => 13,  68 => 12,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glow01/template/product/category.twig", "");
    }
}
