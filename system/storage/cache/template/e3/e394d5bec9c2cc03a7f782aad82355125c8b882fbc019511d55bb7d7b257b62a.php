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

/* fabulous/template/product/category.twig */
class __TwigTemplate_f699e9d319996b4df0e73be09cd69ce0e82d001206c71a90f5dcc56676d0a872 extends \Twig\Template
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
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
                // line 160
                echo ($context["quick_view"] ?? null);
                echo "\"> 
                              <a class=\"quickbox\" href=\"";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 161);
                echo "\">
                               <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"quickview\" viewBox=\"0 0 1050 1050\"><title>quickview</title>
                                    <path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687
                                      c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818
                                      c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68
                                      c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699
                                      C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554
                                      c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704
                                      c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971
                                      c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999
                                      c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04
                                      c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222
                                      c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362
                                      s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362
                                      c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04
                                      z\"></path>
                                    </symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#quickview\" x=\"26%\" y=\"26%\"></use></svg>

                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                <span class=\"lblcart\">";
                // line 183
                echo ($context["quick_view"] ?? null);
                echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 188
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 188);
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
                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#wishlist-outline\" x=\"30%\" y=\"30%\"></use></svg>
                            </button>
                          </div>
                          <div class=\"btn-compare\">  
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 206
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 206);
                echo "');\"><i class=\"fa fa-exchange\"></i>                            
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"report\" viewBox=\"0 0 1400 1400\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"25%\" y=\"30%\"></use></svg>
                            </button>
                          </div>
                      </div>
                  </div>
                  <div class=\"caption\" data-countdowntime=\"";
                // line 215
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 215);
                echo "\"> 
                    <h4><a href=\"";
                // line 216
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 216);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 216);
                echo "</a></h4>
                    <p class=\"description\">";
                // line 217
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 217);
                echo "</p>
                    ";
                // line 218
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 218)) {
                    // line 219
                    echo "                      <p class=\"price\"> 
                        ";
                    // line 220
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 220)) {
                        // line 221
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 221);
                        echo "
                        ";
                    } else {
                        // line 222
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 222);
                        echo "</span> 
                        <span class=\"price-old\">";
                        // line 223
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 223);
                        echo "</span> 
                        ";
                    }
                    // line 225
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 225)) {
                        echo " 
                        <span class=\"price-tax\">";
                        // line 226
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 226);
                        echo "</span> 
                        ";
                    }
                    // line 227
                    echo " 
                      </p>
                    ";
                }
                // line 230
                echo "                    <div class=\"btn-cart\">
                          <button data-toggle=\"tooltip\" title=\"";
                // line 231
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 231);
                echo "');\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 231)) {
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
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            echo " 
          </div>
          <div class=\"category-pagination\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-xs-12 text-left pagination-desc\">";
            // line 242
            echo ($context["results"] ?? null);
            echo "</div>
              <div class=\"col-sm-6 col-xs-12 text-right\">";
            // line 243
            echo ($context["pagination"] ?? null);
            echo "</div>
            </div>
          </div>
        ";
        }
        // line 247
        echo "      </div>
      ";
        // line 248
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 249
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 251
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 254
        echo "      ";
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 255
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
</div>
";
        // line 258
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
        return "fabulous/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 258,  644 => 255,  638 => 254,  630 => 251,  624 => 249,  622 => 248,  619 => 247,  612 => 243,  608 => 242,  602 => 238,  580 => 231,  577 => 230,  572 => 227,  565 => 226,  560 => 225,  555 => 223,  550 => 222,  544 => 221,  542 => 220,  539 => 219,  537 => 218,  533 => 217,  527 => 216,  523 => 215,  509 => 206,  486 => 188,  478 => 183,  453 => 161,  449 => 160,  444 => 157,  437 => 154,  430 => 150,  423 => 146,  416 => 142,  411 => 139,  408 => 138,  404 => 136,  395 => 132,  391 => 131,  388 => 130,  384 => 128,  378 => 127,  371 => 122,  362 => 118,  358 => 117,  355 => 116,  352 => 115,  346 => 114,  343 => 113,  333 => 111,  331 => 110,  323 => 109,  319 => 108,  315 => 107,  310 => 104,  306 => 103,  290 => 94,  282 => 92,  274 => 90,  271 => 89,  267 => 88,  259 => 83,  251 => 77,  245 => 76,  238 => 74,  235 => 73,  227 => 72,  224 => 71,  220 => 70,  212 => 65,  203 => 61,  197 => 58,  193 => 57,  187 => 53,  185 => 52,  180 => 51,  173 => 46,  163 => 42,  159 => 41,  155 => 40,  148 => 39,  144 => 38,  136 => 37,  131 => 34,  128 => 33,  126 => 32,  123 => 31,  118 => 29,  112 => 27,  110 => 26,  106 => 25,  102 => 23,  100 => 22,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  72 => 13,  68 => 12,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/product/category.twig", "");
    }
}
