<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* BackendBundle:Security:login.html.twig */
class __TwigTemplate_3ad0a503f7bd85deecd62bf8ebc3a7cddfa83105cd7e76ebcc80d3d053bb7d00 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:Security:login.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html class=\"no-js css-menubar\" lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <meta name=\"description\" content=\"bootstrap admin template\">
    <meta name=\"author\" content=\"\">

    <title style=\"font-family: Roboto-Regular, sans-serif\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login"), "html", null, true);
        echo "</title>

    <link rel=\"apple-touch-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/images/apple-touch-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/logo.png"), "html", null, true);
        echo "\">



    <!-- Stylesheets -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/css/bootstrap-extend.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/css/site.min.css"), "html", null, true);
        echo "\">
    <!-- Stylesheets -->

    <!-- Skin tools (demo site only) -->
    <!-- Plugins -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/css/animsition.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/css/asScrollable.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/css/switchery.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/css/introjs.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/css/slidePanel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/css/jquery-mmenu.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/css/flag-icon.min.css"), "html", null, true);
        echo "\">

    <!-- Page -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/css/login-v2.min.css"), "html", null, true);
        echo "\">

    <!-- Fonts -->
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/css/web-icons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/css/brand-icons.min.css"), "html", null, true);
        echo "\">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


    <!--[if lt IE 9]>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/easyadmin/javascript/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src=\"../../global/vendor/media-match/media.match.min.js\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/easyadmin/javascript/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/breakpoints.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class=\"page-login-v2 layout-full page-dark\"   ";
        // line 59
        if ((($context["error"] ?? $this->getContext($context, "error")) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashBag", []), "has", [0 => "danger"], "method"))) {
            echo "    ";
        } else {
            echo " onLoad=\"reloadIt()\"  ";
        }
        echo "  >
";
        // line 60
        if ((($context["error"] ?? $this->getContext($context, "error")) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashBag", []), "has", [0 => "danger"], "method"))) {
        } else {
            // line 62
            echo "    <script type=\"text/javascript\">

        setTimeout('reloadIt()', 1)();

    </script>
";
        }
        // line 68
        echo "
<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<!-- Page -->
<div class=\"page animsition\" data-animsition-in=\"fade-in\" data-animsition-out=\"fade-out\">
    <div class=\"page-content\">
        <div class=\"page-brand-info\">
            <div class=\"brand\">
            </div>
            <p class=\"font-size-20\"> </p>
        </div>

        <div class=\"page-login-main\">
            <div class=\"brand visible-xs\">

            </div>
            <img class=\"brand-img\" style=\"width: 100px\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/img/logoenergie.png"), "html", null, true);
        echo "\" alt=\"...\">

            <h3 class=\"font-size-24\" style=\"font-family: Roboto-Regular, sans-serif\">";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Authentification"), "html", null, true);
        echo "</h3>
            <p></p>
          ";
        // line 99
        echo "            <form method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_login_check");
        echo "\">
                <input type=\"hidden\" name=\"route\" value=\"0\" />
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                <div class=\"form-group\">
                    <label class=\"sr-only\" for=\"inputEmail\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
        echo "</label>
                    <input type=\"email\" style=\"margin-bottom: 10px; border: 2px solid #e6e6e6;  background-color: #e6e6e6;\" id=\"username\" name=\"_username\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Email\" required=\"required\"  class=\"form-control\" />
                </div>
                <div class=\"form-group\">
                    <label class=\"sr-only\" for=\"inputPassword\">";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password"), "html", null, true);
        echo "</label>
                    <input type=\"password\" style=\"margin-bottom: 10px; border: 2px solid #e6e6e6;  background-color: #e6e6e6;\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Password\" required=\"required\" />

                </div>
                
                ";
        // line 116
        echo "
               <div class=\"input-group\" style=\"padding-top: 14px;padding-bottom: 5px;\">
                    <div class=\"g-recaptcha\" data-sitekey=\"6LdEJ8knAAAAAJHZBs9ry4KIpBH11U-XqwWMJe8c\"></div>


                    <script type=\"text/javascript\"
                            src=\"https://www.google.com/recaptcha/api.js?hl=en\">
                    </script>
                </div>



                <div class=\"form-group clearfix\">


                    <div class=\"  center-block float-left\">
                        <input  type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" style=\" transform: scale(1.5);margin-right: 5px!important;\" />
                        <label for=\"remember_me\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </div>
                </div>

                <button type=\"submit\" id=\"_submit\"  name=\"_submit\" class=\"btn btnn\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "</button>
            </form>

            <p><a href=\"register-v2.html\"></a></p>

            <footer class=\"page-copyright\">
                <p>";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("POWEREDBY"), "html", null, true);
        echo " APP4MOB</p>
            </footer>
        </div>

    </div>
</div>
<!-- End Page -->
<style>

    .btnn{

        text-align: center;
        border-radius: 60px;
        background-color: #ed0000 !important;
        color: white;
        font-weight: 200;
        font-size: 22px;
        font-family: Roboto-regular,sans-serif;
        border: 1px solid #ed0000!important;
        padding: 10px ;
        width: 100%;
        min-width: auto;
        margin-top: 50px;
        margin-bottom: 25px;
    }


    .btnn:hover {
        background-color: white !important;
        color: #ed0000;

    }

    .titrinput{
        font-size:12px;
        font-family: 'Roboto Light',sans-serif;
        line-height: 14px;
        color:#374649
    }





    ";
        // line 219
        echo "
</style>


<!-- Core  -->
<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/animsition.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/jquery-asScroll.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/jquery.asScrollable.all.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/jquery-asHoverScroll.min.js"), "html", null, true);
        echo "\"></script>

<!-- Plugins -->
<script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/jquery.mmenu.min.all.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/switchery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/intro.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/screenfull.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/jquery-slidePanel.min.js"), "html", null, true);
        echo "\"></script>

<!-- Plugins For This Page -->
<script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>

<!-- Scripts -->
<script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/core.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/site.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/menu.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/menubar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/gridmenu.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/sidebar.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/config-colors.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/config-tour.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/asscrollable.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/bas/animsition.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/slidepanel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/bas/switchery.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/frontend/loginadmin/js/jquery-placeholder.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">

    function reloadIt() {


        if (window.location.href.substr(-2) !== \"?r\") {
            window.location = window.location.href + \"?r\";
        }
    }



</script>
<script>

    (function(document, window, \$) {
        'use strict';

        var Site = window.Site;
        \$(document).ready(function() {
            Site.run();
        });
    })(document, window, jQuery);
</script>


<!-- Google Analytics -->
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js',
        'ga');

    ga('create', 'UA-65522665-1', 'auto');
    ga('send', 'pageview');
</script>
</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 259,  428 => 257,  424 => 256,  420 => 255,  416 => 254,  411 => 252,  407 => 251,  402 => 249,  398 => 248,  394 => 247,  390 => 246,  385 => 244,  381 => 243,  375 => 240,  369 => 237,  365 => 236,  361 => 235,  357 => 234,  353 => 233,  347 => 230,  343 => 229,  339 => 228,  335 => 227,  331 => 226,  327 => 225,  323 => 224,  316 => 219,  269 => 143,  258 => 137,  251 => 133,  232 => 116,  224 => 107,  218 => 104,  214 => 103,  209 => 101,  203 => 99,  198 => 89,  193 => 87,  172 => 68,  164 => 62,  161 => 60,  153 => 59,  145 => 54,  141 => 53,  134 => 49,  126 => 44,  118 => 39,  114 => 38,  108 => 35,  102 => 32,  98 => 31,  94 => 30,  90 => 29,  86 => 28,  82 => 27,  78 => 26,  70 => 21,  66 => 20,  62 => 19,  54 => 14,  50 => 13,  45 => 11,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html class=\"no-js css-menubar\" lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <meta name=\"description\" content=\"bootstrap admin template\">
    <meta name=\"author\" content=\"\">

    <title style=\"font-family: Roboto-Regular, sans-serif\">{{ \"Login\"|trans }}</title>

    <link rel=\"apple-touch-icon\" href=\"{{ asset('assets/bundles/frontend/loginadmin/images/apple-touch-icon.png') }}\">
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/ico/logo.png') }}\">



    <!-- Stylesheets -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/bundles/frontend/loginadmin/js/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/bundles/frontend/loginadmin/css/bootstrap-extend.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/bundles/frontend/loginadmin/css/site.min.css') }}\">
    <!-- Stylesheets -->

    <!-- Skin tools (demo site only) -->
    <!-- Plugins -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/bundles/frontend/loginadmin/css/animsition.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/bundles/frontend/loginadmin/css/asScrollable.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/bundles/frontend/loginadmin/css/switchery.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/bundles/frontend/loginadmin/css/introjs.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/bundles/frontend/loginadmin/css/slidePanel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/bundles/frontend/loginadmin/css/jquery-mmenu.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/bundles/frontend/loginadmin/css/flag-icon.min.css') }}\">

    <!-- Page -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/bundles/frontend/loginadmin/css/login-v2.min.css') }}\">

    <!-- Fonts -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/bundles/frontend/loginadmin/css/web-icons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/bundles/frontend/loginadmin/css/brand-icons.min.css') }}\">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


    <!--[if lt IE 9]>
    <script src=\"{{ asset('assets/bundles/easyadmin/javascript/html5shiv.min.js') }}\"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src=\"../../global/vendor/media-match/media.match.min.js\"></script>
    <script src=\"{{ asset('assets/bundles/easyadmin/javascript/respond.min.js') }}\"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/modernizr.min.js') }}\"></script>
    <script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/breakpoints.min.js') }}\"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class=\"page-login-v2 layout-full page-dark\"   {% if error or app.session.flashBag.has('danger')  %}    {% else %} onLoad=\"reloadIt()\"  {% endif %}  >
{% if error or app.session.flashBag.has('danger')  %}
{% else %}
    <script type=\"text/javascript\">

        setTimeout('reloadIt()', 1)();

    </script>
{% endif %}

<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<!-- Page -->
<div class=\"page animsition\" data-animsition-in=\"fade-in\" data-animsition-out=\"fade-out\">
    <div class=\"page-content\">
        <div class=\"page-brand-info\">
            <div class=\"brand\">
            </div>
            <p class=\"font-size-20\"> </p>
        </div>

        <div class=\"page-login-main\">
            <div class=\"brand visible-xs\">

            </div>
            <img class=\"brand-img\" style=\"width: 100px\" src=\"{{ asset('assets/bundles/frontend/img/logoenergie.png') }}\" alt=\"...\">

            <h3 class=\"font-size-24\" style=\"font-family: Roboto-Regular, sans-serif\">{{ \"Authentification\"|trans }}</h3>
            <p></p>
          {#  {% if error or app.session.flashBag.has('danger')  %}
                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                    {{ \"Mot de passe ou Email incorrect\"|trans }}
                </div>
            {% endif %}#}
            <form method=\"post\" action=\"{{ path(\"admin_login_check\") }}\">
                <input type=\"hidden\" name=\"route\" value=\"0\" />
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                <div class=\"form-group\">
                    <label class=\"sr-only\" for=\"inputEmail\">{{ \"Email\"|trans }}</label>
                    <input type=\"email\" style=\"margin-bottom: 10px; border: 2px solid #e6e6e6;  background-color: #e6e6e6;\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"Email\" required=\"required\"  class=\"form-control\" />
                </div>
                <div class=\"form-group\">
                    <label class=\"sr-only\" for=\"inputPassword\">{{ \"Password\"|trans }}</label>
                    <input type=\"password\" style=\"margin-bottom: 10px; border: 2px solid #e6e6e6;  background-color: #e6e6e6;\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Password\" required=\"required\" />

                </div>
                
                {#   <div class=\"g-recaptcha\" data-sitekey=\"6LdEJ8knAAAAAJHZBs9ry4KIpBH11U-XqwWMJe8c\"></div>
                         {#  <div class=\"g-recaptcha\" data-sitekey=\"6LdEJ8knAAAAAJHZBs9ry4KIpBH11U-XqwWMJe8c\"></div>
                                               <div class=\"g-recaptcha\" data-sitekey=\"6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI\"></div>
#}

               <div class=\"input-group\" style=\"padding-top: 14px;padding-bottom: 5px;\">
                    <div class=\"g-recaptcha\" data-sitekey=\"6LdEJ8knAAAAAJHZBs9ry4KIpBH11U-XqwWMJe8c\"></div>


                    <script type=\"text/javascript\"
                            src=\"https://www.google.com/recaptcha/api.js?hl=en\">
                    </script>
                </div>



                <div class=\"form-group clearfix\">


                    <div class=\"  center-block float-left\">
                        <input  type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" style=\" transform: scale(1.5);margin-right: 5px!important;\" />
                        <label for=\"remember_me\">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>
                    </div>
                </div>

                <button type=\"submit\" id=\"_submit\"  name=\"_submit\" class=\"btn btnn\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\" >{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}</button>
            </form>

            <p><a href=\"register-v2.html\"></a></p>

            <footer class=\"page-copyright\">
                <p>{{ \"POWEREDBY\"|trans }} APP4MOB</p>
            </footer>
        </div>

    </div>
</div>
<!-- End Page -->
<style>

    .btnn{

        text-align: center;
        border-radius: 60px;
        background-color: #ed0000 !important;
        color: white;
        font-weight: 200;
        font-size: 22px;
        font-family: Roboto-regular,sans-serif;
        border: 1px solid #ed0000!important;
        padding: 10px ;
        width: 100%;
        min-width: auto;
        margin-top: 50px;
        margin-bottom: 25px;
    }


    .btnn:hover {
        background-color: white !important;
        color: #ed0000;

    }

    .titrinput{
        font-size:12px;
        font-family: 'Roboto Light',sans-serif;
        line-height: 14px;
        color:#374649
    }





    {#  .classbg{
         background: transparent;
         background-image: url(\"/login.png\");
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-position-x:  25%;
         background-position-y:  center;
         background-size : 50% 60%;
        }
      body {

              background: transparent;
           background-image: url(\"/login.png\");
           background-repeat: no-repeat;
           background-attachment: fixed;
           background-position-x:  25%;
           background-position-y:  center;
           background-size : 50% 60%;





       }
       .page-login-v2 .page-login-main {
           position: absolute;
           top: 0;
           right: 0;
           height: auto;
           color: #76838f;
           background-color: #F7F9FA;
       }#}

</style>


<!-- Core  -->
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/animsition.min.js') }}\"></script>
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/jquery-asScroll.min.js') }}\"></script>
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/jquery.mousewheel.min.js') }}\"></script>
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/jquery.asScrollable.all.min.js') }}\"></script>
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/jquery-asHoverScroll.min.js') }}\"></script>

<!-- Plugins -->
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/jquery.mmenu.min.all.js') }}\"></script>
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/switchery.min.js') }}\"></script>
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/intro.min.js') }}\"></script>
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/screenfull.min.js') }}\"></script>
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/jquery-slidePanel.min.js') }}\"></script>

<!-- Plugins For This Page -->
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/jquery.placeholder.min.js') }}\"></script>

<!-- Scripts -->
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/core.min.js') }}\"></script>
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/site.min.js') }}\"></script>

<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/menu.min.js') }}\"></script>
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/menubar.min.js') }}\"></script>
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/gridmenu.min.js') }}\"></script>
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/sidebar.min.js') }}\"></script>

<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/config-colors.min.js') }}\"></script>
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/config-tour.min.js') }}\"></script>

<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/asscrollable.min.js') }}\"></script>
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/bas/animsition.min.js') }}\"></script>
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/slidepanel.min.js') }}\"></script>
<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/bas/switchery.min.js') }}\"></script>

<script src=\"{{ asset('assets/bundles/frontend/loginadmin/js/jquery-placeholder.min.js') }}\"></script>

<script type=\"text/javascript\">

    function reloadIt() {


        if (window.location.href.substr(-2) !== \"?r\") {
            window.location = window.location.href + \"?r\";
        }
    }



</script>
<script>

    (function(document, window, \$) {
        'use strict';

        var Site = window.Site;
        \$(document).ready(function() {
            Site.run();
        });
    })(document, window, jQuery);
</script>


<!-- Google Analytics -->
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js',
        'ga');

    ga('create', 'UA-65522665-1', 'auto');
    ga('send', 'pageview');
</script>
</body>

</html>
", "BackendBundle:Security:login.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/Security/login.html.twig");
    }
}
