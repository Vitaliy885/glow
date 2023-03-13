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

/* fabulous/template/extension/module/newslettersubscribe.twig */
class __TwigTemplate_d8b867831cd21496e700e90e4fa42e409b0a01d8568726b3ce03e16a5a71e21a extends \Twig\Template
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
        echo "<div id=\"_desktop_newsletter\">
\t<section id=\"";
        // line 2
        echo ($context["random_id"] ?? null);
        echo "\" class=\"block_newsletter col-md-3 col-sm-12 col-xs-12\">
\t\t<div class=\"container\">
\t\t\t<div id=\"boxes\" class=\"newletter-container\">
\t\t\t\t<div style=\"\" id=\"dialog\" class=\"window\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div id=\"newsletter-container\" class=\"box-content\">
\t\t\t\t\t\t\t<div class=\"newsletter_text\">
\t\t\t\t\t\t\t\t<span class=\"news-icon\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">          
\t\t\t\t\t\t\t\t\t    <symbol id=\"news-icon\" viewBox=\"0 0 500 500\"><title>news-icon</title>
\t\t\t\t\t\t\t              <path d=\"m494.2,488c0,0 0-225.8 0-301 0-3.1-3.9-7-7.7-9.9l-78.7-57.1v-63.1c0-6.2-5.2-10.4-10.4-10.4h-89.7l-45.7-33.3c-3.1-2.1-8.3-2.1-11.5,0l-45.7,33.3h-89.7c-6.2,0-10.4,5.2-10.4,10.4v62.4l-79.7,57.9c-4.7,2.9-7.7,6.7-7.7,9.9 0,75.7 0,303 0,303 0,5.9 4.7,10 9.6,10.4 0.3,0 0.5,0 0.8,0h456c6.7-0.1 10.5-5.3 10.5-12.5zm-19.8-282.3v263.6l-172.1-137.8 172.1-125.8zm-7.7-18.3l-58.9,42.9v-86.2l58.9,43.3zm-210.9-154.5l18.3,13.5h-36.7l18.4-13.5zm131.2,34.4v178.2l-131.2,95.6-131.2-95.6v-178.2h262.4zm-349.8,138.4l172.1,125.8-172.1,138.6v-264.4zm67.6,25.4l-60.4-44 60.4-43.9v87.9zm-48.9,249.5l170.1-136.9 23.5,17.2c4.5,3.4 7.9,3.4 12.5,0l23.5-17.2 171.1,136.9h-400.7z\"></path><rect width=\"140.5\" x=\"186.1\" y=\"118.3\" height=\"19.8\"></rect><rect width=\"140.5\" x=\"186.1\" y=\"181.8\" height=\"19.8\"></rect><rect width=\"140.5\" x=\"186.1\" y=\"245.3\" height=\"19.8\"></rect>

\t\t\t\t\t\t\t     \t\t</symbol> 
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#news-icon\" x=\"0%\" y=\"0%\"></use></svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<h2 class=\"newsletter-title\">";
        // line 18
        echo ($context["title"] ?? null);
        echo "</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"newsletter\">
\t\t\t\t\t\t\t\t<div id=\"frm_subscribe\" class=\"newsletter_form\">
\t\t\t\t\t\t\t\t\t<form name=\"subscribe\" id=\"subscribe\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"text-email\" placeholder=\"";
        // line 23
        echo ($context["entry_email"] ?? null);
        echo "\" value=\"\" name=\"subscribe_email\" id=\"subscribe_email\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"text-email\" placeholder=\"";
        // line 24
        echo ($context["entry_email"] ?? null);
        echo "\" value=\"\" name=\"subscribe_name\" id=\"subscribe_name\" />
\t\t\t\t\t\t\t\t\t\t<a class=\"button btn-submit\" onclick=\"email_subscribe()\"><span>";
        // line 25
        echo ($context["entry_button"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div id=\"notification-normal\"></div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\tfunction email_subscribe(){
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/subscribe',
\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\tdata:\$(\"#subscribe\").serialize(),
\t\t\t\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\teval(html);
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t} catch (e) {
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t}});\t
\t\t\t\t\t}
\t\t\t\t\tfunction email_unsubscribe(){
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\tdata:\$(\"#subscribe\").serialize(),
\t\t\t\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\teval(html);
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t} catch (e) {
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}}); 
\t\t\t\t\t\t\$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
\t\t\t\t\t}
\t\t\t\t</script>
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\$('#subscribe_email').keypress(function(e) {
\t\t\t\t\t\t\tif(e.which == 13) {
\t\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\t\temail_subscribe();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tvar name= \$(this).val();
\t\t\t\t\t\t\t\$('#subscribe_name').val(name);
\t\t\t\t\t\t});
\t\t\t\t\t\t\$('#subscribe_email').change(function() {
\t\t\t\t\t\tvar name= \$(this).val();
\t\t\t\t\t\t\t\t\$('#subscribe_name').val(name);
\t\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t});
\t\t\t\t</script>
\t\t</div>
\t</section>
</div>";
    }

    public function getTemplateName()
    {
        return "fabulous/template/extension/module/newslettersubscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  71 => 24,  67 => 23,  59 => 18,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fabulous/template/extension/module/newslettersubscribe.twig", "");
    }
}
