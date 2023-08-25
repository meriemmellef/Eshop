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

/* @Backend/base.html.twig */
class __TwigTemplate_fe47af866dfa25a6caada48d5568b8c40c8d761ac3556f3bde969825fe1b2063 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js css-menubar\" lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <meta name=\"description\" content=\"bootstrap material admin template\">
    <meta name=\"author\" content=\"\">

    <title>TotalEnergies|Eshop</title>
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 47
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/breakpoints/breakpoints.js"), "html", null, true);
        echo "\"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class=\"animsition dashboard\">
<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "<!-- End Page -->


<!-- Footer -->
<!-- Core  -->


    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/babel-external-helpers/babel-external-helpers.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/popper-js/umd/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/animsition/animsition.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/mousewheel/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/asscrollbar/jquery-asScrollbar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/asscrollable/jquery-asScrollable.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/ashoverscroll/jquery-asHoverScroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/waves/waves.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/select2/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- Plugins -->
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/switchery/switchery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/intro-js/intro.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/screenfull/screenfull.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/slidepanel/jquery-slidePanel.js"), "html", null, true);
        echo "\"></script>

    <!-- Scripts -->
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/Component.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/Plugin.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/Base.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/Config.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/Plugin/select2.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/assets/js/Section/Menubar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/assets/js/Section/GridMenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/assets/js/Section/Sidebar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/assets/js/Section/PageAside.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/assets/js/Plugin/menu.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/config/colors.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/assets/js/config/tour.js"), "html", null, true);
        echo "\"></script>
    <script>Config.set('assets', 'assets');</script>

    <!-- Page -->
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/assets/js/Site.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/Plugin/asscrollable.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/Plugin/slidepanel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/Plugin/switchery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/Plugin/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/dropify/dropify.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/assets/examples/js/charts/peity.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/Plugin/dropify.js"), "html", null, true);
        echo "\"></script>

    <script>
        (function (document, window, \$) {
            'use strict';

            var Site = window.Site;
            \$(document).ready(function () {
                Site.run();
                \$(\"select\").select2()
            });





        })(document, window, jQuery);
    </script>
    ";
        // line 128
        $this->displayBlock('javascripts', $context, $blocks);
        // line 130
        echo "

</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"apple-touch-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/logo.png"), "html", null, true);
        echo "\">
        <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/logo.png"), "html", null, true);
        echo "\">



        <!-- Stylesheets -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/css/bootstrap.min.css?v7"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/css/bootstrap-extend.min.css?v5"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/assets/css/site.min.css?v6"), "html", null, true);
        echo "\">
        <!-- Plugins -->
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/animsition/animsition.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/asscrollable/asScrollable.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/switchery/switchery.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/intro-js/introjs.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/slidepanel/slidePanel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/flag-icon-css/flag-icon.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/waves/waves.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/select2/select2.css"), "html", null, true);
        echo "?v4\">
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/bootstrap-datepicker/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/dropify/dropify.css"), "html", null, true);
        echo "\">

        <!-- Fonts -->
        <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/fonts/material-design/material-design.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/fonts/brand-icons/brand-icons.min.css"), "html", null, true);
        echo "\">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
        <style>
            .btn-pure.btn-default.active.focus, .btn-pure.btn-default.active:focus, .btn-pure.btn-default.active:hover, .btn-pure.btn-default:active.focus, .btn-pure.btn-default:active:focus, .btn-pure.btn-default:active:hover, .btn-pure.btn-default:focus.focus, .btn-pure.btn-default:focus:focus, .btn-pure.btn-default:focus:hover, .btn-pure.btn-default:hover.focus, .btn-pure.btn-default:hover:focus, .btn-pure.btn-default:hover:hover, .open>.btn-pure.btn-default.dropdown-toggle.focus, .open>.btn-pure.btn-default.dropdown-toggle:focus, .open>.btn-pure.btn-default.dropdown-toggle:hover {
                color: #46bf8c!important;
            }
            body {
                padding-top: 20px !important;
            }

        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 128
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 128,  356 => 58,  337 => 35,  333 => 34,  327 => 31,  323 => 30,  319 => 29,  315 => 28,  311 => 27,  307 => 26,  303 => 25,  299 => 24,  295 => 23,  291 => 22,  286 => 20,  282 => 19,  278 => 18,  270 => 13,  265 => 12,  259 => 11,  248 => 130,  246 => 128,  225 => 110,  221 => 109,  217 => 108,  213 => 107,  209 => 106,  205 => 105,  201 => 104,  197 => 103,  190 => 99,  186 => 98,  181 => 96,  177 => 95,  173 => 94,  169 => 93,  165 => 92,  159 => 89,  155 => 88,  151 => 87,  147 => 86,  143 => 85,  137 => 82,  133 => 81,  129 => 80,  125 => 79,  120 => 77,  116 => 76,  112 => 75,  108 => 74,  104 => 73,  100 => 72,  96 => 71,  92 => 70,  88 => 69,  84 => 68,  80 => 67,  76 => 66,  67 => 59,  65 => 58,  50 => 47,  48 => 11,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js css-menubar\" lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <meta name=\"description\" content=\"bootstrap material admin template\">
    <meta name=\"author\" content=\"\">

    <title>TotalEnergies|Eshop</title>
    {% block stylesheets %}
        <link rel=\"apple-touch-icon\" href=\"{{ asset('assets/ico/logo.png') }}\">
        <link rel=\"shortcut icon\" href=\"{{ asset('assets/ico/logo.png') }}\">



        <!-- Stylesheets -->
        <link rel=\"stylesheet\" href=\"{{ asset('remark/global/css/bootstrap.min.css?v7') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('remark/global/css/bootstrap-extend.min.css?v5') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('remark/assets/css/site.min.css?v6') }}\">
        <!-- Plugins -->
        <link rel=\"stylesheet\" href=\"{{ asset('remark/global/vendor/animsition/animsition.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('remark/global/vendor/asscrollable/asScrollable.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('remark/global/vendor/switchery/switchery.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('remark/global/vendor/intro-js/introjs.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('remark/global/vendor/slidepanel/slidePanel.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('remark/global/vendor/flag-icon-css/flag-icon.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('remark/global/vendor/waves/waves.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('remark/global/vendor/select2/select2.css') }}?v4\">
        <link rel=\"stylesheet\" href=\"{{ asset('remark/global/vendor/bootstrap-datepicker/bootstrap-datepicker.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('remark/global/vendor/dropify/dropify.css') }}\">

        <!-- Fonts -->
        <link rel=\"stylesheet\" href=\"{{ asset('remark/global/fonts/material-design/material-design.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('remark/global/fonts/brand-icons/brand-icons.min.css') }}\">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
        <style>
            .btn-pure.btn-default.active.focus, .btn-pure.btn-default.active:focus, .btn-pure.btn-default.active:hover, .btn-pure.btn-default:active.focus, .btn-pure.btn-default:active:focus, .btn-pure.btn-default:active:hover, .btn-pure.btn-default:focus.focus, .btn-pure.btn-default:focus:focus, .btn-pure.btn-default:focus:hover, .btn-pure.btn-default:hover.focus, .btn-pure.btn-default:hover:focus, .btn-pure.btn-default:hover:hover, .open>.btn-pure.btn-default.dropdown-toggle.focus, .open>.btn-pure.btn-default.dropdown-toggle:focus, .open>.btn-pure.btn-default.dropdown-toggle:hover {
                color: #46bf8c!important;
            }
            body {
                padding-top: 20px !important;
            }

        </style>
    {% endblock %}
    <script src=\"{{ asset('remark/global/vendor/breakpoints/breakpoints.js') }}\"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class=\"animsition dashboard\">
<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

{% block body %}{% endblock %}
<!-- End Page -->


<!-- Footer -->
<!-- Core  -->


    <script src=\"{{ asset('remark/global/vendor/babel-external-helpers/babel-external-helpers.js') }}\"></script>
    <script src=\"{{ asset('remark/global/vendor/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('remark/global/vendor/popper-js/umd/popper.min.js') }}\"></script>
    <script src=\"{{ asset('remark/global/vendor/bootstrap/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('remark/global/vendor/animsition/animsition.js') }}\"></script>
    <script src=\"{{ asset('remark/global/vendor/mousewheel/jquery.mousewheel.js') }}\"></script>
    <script src=\"{{ asset('remark/global/vendor/asscrollbar/jquery-asScrollbar.js') }}\"></script>
    <script src=\"{{ asset('remark/global/vendor/asscrollable/jquery-asScrollable.js') }}\"></script>
    <script src=\"{{ asset('remark/global/vendor/ashoverscroll/jquery-asHoverScroll.js') }}\"></script>
    <script src=\"{{ asset('remark/global/vendor/waves/waves.js') }}\"></script>
    <script src=\"{{ asset('remark/global/vendor/select2/select2.full.min.js') }}\"></script>
    <script src=\"{{ asset('remark/global/vendor/bootstrap-datepicker/bootstrap-datepicker.js') }}\"></script>
    <!-- Plugins -->
    <script src=\"{{ asset('remark/global/vendor/switchery/switchery.js') }}\"></script>
    <script src=\"{{ asset('remark/global/vendor/intro-js/intro.js') }}\"></script>
    <script src=\"{{ asset('remark/global/vendor/screenfull/screenfull.js') }}\"></script>
    <script src=\"{{ asset('remark/global/vendor/slidepanel/jquery-slidePanel.js') }}\"></script>

    <!-- Scripts -->
    <script src=\"{{ asset('remark/global/js/Component.js') }}\"></script>
    <script src=\"{{ asset('remark/global/js/Plugin.js') }}\"></script>
    <script src=\"{{ asset('remark/global/js/Base.js') }}\"></script>
    <script src=\"{{ asset('remark/global/js/Config.js') }}\"></script>
    <script src=\"{{ asset('remark/global/js/Plugin/select2.js') }}\"></script>


    <script src=\"{{ asset('remark/assets/js/Section/Menubar.js') }}\"></script>
    <script src=\"{{ asset('remark/assets/js/Section/GridMenu.js') }}\"></script>
    <script src=\"{{ asset('remark/assets/js/Section/Sidebar.js') }}\"></script>
    <script src=\"{{ asset('remark/assets/js/Section/PageAside.js') }}\"></script>
    <script src=\"{{ asset('remark/assets/js/Plugin/menu.js') }}\"></script>

    <script src=\"{{ asset('remark/global/js/config/colors.js') }}\"></script>
    <script src=\"{{ asset('remark/assets/js/config/tour.js') }}\"></script>
    <script>Config.set('assets', 'assets');</script>

    <!-- Page -->
    <script src=\"{{ asset('remark/assets/js/Site.js') }}\"></script>
    <script src=\"{{ asset('remark/global/js/Plugin/asscrollable.js') }}\"></script>
    <script src=\"{{ asset('remark/global/js/Plugin/slidepanel.js') }}\"></script>
    <script src=\"{{ asset('remark/global/js/Plugin/switchery.js') }}\"></script>
    <script src=\"{{ asset('remark/global/js/Plugin/bootstrap-datepicker.js') }}\"></script>
    <script src=\"{{ asset('remark/global/vendor/dropify/dropify.min.js') }}\"></script>
    <script src=\"{{ asset('remark/assets/examples/js/charts/peity.js') }}\"></script>
    <script src=\"{{ asset('remark/global/js/Plugin/dropify.js') }}\"></script>

    <script>
        (function (document, window, \$) {
            'use strict';

            var Site = window.Site;
            \$(document).ready(function () {
                Site.run();
                \$(\"select\").select2()
            });





        })(document, window, jQuery);
    </script>
    {% block javascripts %}
{% endblock %}


</body>
</html>
", "@Backend/base.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\base.html.twig");
    }
}
