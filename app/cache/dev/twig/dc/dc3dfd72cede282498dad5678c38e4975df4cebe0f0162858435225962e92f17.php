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

/* FrontendBundle::basetwo.html.twig */
class __TwigTemplate_89dcba94f0f2cfa298f8f70a8079b38dad3b816edf9fcf937e2138079e0c1467 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle::basetwo.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\"
          href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/logo.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\"
          href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/logo.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\"
          href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/logo.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/logo.png"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/logo.png"), "html", null, true);
        echo "\">
    <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->


    <script>
        paceOptions = {
            elements: true
        };
    </script>

    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/pace.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery/jquery-1.10.1.min.js"), "html", null, true);
        echo "\"></script>
</head>

<body style=\"font-family: Roboto-Regular, sans-serif; \">

<!-- Modal Login start -->
";
        // line 53
        $this->loadTemplate("FrontendBundle:Modals:loginModal.html.twig", "FrontendBundle::basetwo.html.twig", 53)->display($context);
        // line 54
        echo "
<!-- Modal Signup start -->
";
        // line 56
        $this->loadTemplate("FrontendBundle:Modals:registerModal.html.twig", "FrontendBundle::basetwo.html.twig", 56)->display($context);
        // line 57
        echo "

<!-- Fixed navbar start was{ render(controller('FrontendBundle:Panier:menu')) } -->



";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "




";
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        // line 146
        echo "
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "TotalEnergies|Eshop";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css?v24"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/swiper-master/css/swiper.min.css?v1"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom styles for this template -->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/totaltheme.css?v131"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 63
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 64
        echo "    <div class=\"container\">

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "    <!-- Le javascript
    ================================================== -->

    ";
        // line 79
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js?v3"), "html", null, true);
        echo "\"></script>    <!-- include  parallax plugin -->
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/swiper-master/js/swiper.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script>


        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            nextButton: '.nextControl',
            prevButton: '.prevControl',
            keyboardControl: true,
            paginationClickable: true,
            slidesPerView: 'auto',
            autoResize: true,
            resizeReInit: true,
            spaceBetween: 0,
            freeMode: true
        });


    </script>

    <!-- include jqueryCycle plugin -->
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.cycle2.min.js"), "html", null, true);
        echo "\"></script>

    <!-- include easing plugin -->
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>

    <!-- include  parallax plugin -->
    <script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.parallax-1.1.js"), "html", null, true);
        echo "\"></script>

    <!-- optionally include helper plugins -->
    <script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/helper-plugins/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>

    <!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

    <script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.mCustomScrollbar.js"), "html", null, true);
        echo "\"></script>

    <!-- include icheck plugin // customized checkboxes and radio buttons   -->
    <script type=\"text/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/icheck-1.x/icheck.min.js"), "html", null, true);
        echo "\"></script>

    <!-- include grid.js // for equal Div height  -->
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/grids.js"), "html", null, true);
        echo "\"></script>

    <!-- include carousel slider plugin  -->
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/owl.carousel.min.js?v3"), "html", null, true);
        echo "\"></script>

    <!-- jQuery select2 // custom select   -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js\"></script>

    <!-- include touchspin.js // touch friendly input spinner component   -->
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.touchspin.js"), "html", null, true);
        echo "\"></script>

    <!-- include custom script for only homepage  -->
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/home.js"), "html", null, true);
        echo "\"></script>

    <!-- include custom script for site  -->
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/script.js?v33"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.lazyload.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/panier/panier.js?v83"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script>
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle::basetwo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 142,  324 => 141,  319 => 139,  315 => 138,  309 => 135,  303 => 132,  297 => 129,  288 => 123,  282 => 120,  276 => 117,  270 => 114,  263 => 110,  257 => 107,  251 => 104,  245 => 101,  221 => 80,  216 => 79,  211 => 75,  205 => 74,  194 => 64,  188 => 63,  176 => 24,  170 => 21,  165 => 19,  162 => 18,  156 => 17,  144 => 15,  134 => 146,  132 => 74,  125 => 69,  123 => 63,  115 => 57,  113 => 56,  109 => 54,  107 => 53,  98 => 47,  93 => 45,  75 => 29,  73 => 17,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  51 => 10,  46 => 8,  37 => 1,);
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
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\"
          href=\"{{ asset('assets/ico/logo.png') }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\"
          href=\"{{ asset('assets/ico/logo.png') }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\"
          href=\"{{ asset('assets/ico/logo.png') }}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('assets/ico/logo.png') }}\">
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/ico/logo.png') }}\">
    <title>{% block title %}TotalEnergies|Eshop{% endblock %}</title>

    {% block stylesheets %}
        <!-- Bootstrap core CSS -->
        <link href=\"{{ asset('assets/bootstrap/css/bootstrap.min.css?v24') }}\" rel=\"stylesheet\">

        <link href=\"{{ asset('assets/plugins/swiper-master/css/swiper.min.css?v1') }}\" rel=\"stylesheet\">

        <!-- Custom styles for this template -->
        <link href=\"{{ asset('assets/css/totaltheme.css?v131') }}\" rel=\"stylesheet\">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    {% endblock stylesheets %}
    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->


    <script>
        paceOptions = {
            elements: true
        };
    </script>

    <script src=\"{{ asset('assets/js/pace.min.js') }}\"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"{{ asset('assets/js/jquery/jquery-1.10.1.min.js') }}\"></script>
</head>

<body style=\"font-family: Roboto-Regular, sans-serif; \">

<!-- Modal Login start -->
{% include 'FrontendBundle:Modals:loginModal.html.twig' %}

<!-- Modal Signup start -->
{% include 'FrontendBundle:Modals:registerModal.html.twig' %}


<!-- Fixed navbar start was{ render(controller('FrontendBundle:Panier:menu')) } -->



{% block body %}
    <div class=\"container\">

    </div>

{% endblock %}





{% block javascripts %}
    <!-- Le javascript
    ================================================== -->

    {#        <script src=\"{{ asset('assets/js/jquery-ui.js') }}\"></script>#}
    <script src=\"{{ asset('assets/bootstrap/js/bootstrap.min.js?v3') }}\"></script>    <!-- include  parallax plugin -->
    <script src=\"{{ asset('assets/plugins/swiper-master/js/swiper.jquery.min.js') }}\"></script>
    <script>


        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            nextButton: '.nextControl',
            prevButton: '.prevControl',
            keyboardControl: true,
            paginationClickable: true,
            slidesPerView: 'auto',
            autoResize: true,
            resizeReInit: true,
            spaceBetween: 0,
            freeMode: true
        });


    </script>

    <!-- include jqueryCycle plugin -->
    <script src=\"{{ asset('assets/js/jquery.cycle2.min.js') }}\"></script>

    <!-- include easing plugin -->
    <script src=\"{{ asset('assets/js/jquery.easing.1.3.js') }}\"></script>

    <!-- include  parallax plugin -->
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/jquery.parallax-1.1.js') }}\"></script>

    <!-- optionally include helper plugins -->
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/helper-plugins/jquery.mousewheel.min.js') }}\"></script>

    <!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

    <script type=\"text/javascript\" src=\"{{ asset('assets/js/jquery.mCustomScrollbar.js') }}\"></script>

    <!-- include icheck plugin // customized checkboxes and radio buttons   -->
    <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/icheck-1.x/icheck.min.js') }}\"></script>

    <!-- include grid.js // for equal Div height  -->
    <script src=\"{{ asset('assets/js/grids.js') }}\"></script>

    <!-- include carousel slider plugin  -->
    <script src=\"{{ asset('assets/js/owl.carousel.min.js?v3') }}\"></script>

    <!-- jQuery select2 // custom select   -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js\"></script>

    <!-- include touchspin.js // touch friendly input spinner component   -->
    <script src=\"{{ asset('assets/js/bootstrap.touchspin.js') }}\"></script>

    <!-- include custom script for only homepage  -->
    <script src=\"{{ asset('assets/js/home.js') }}\"></script>

    <!-- include custom script for site  -->
    <script src=\"{{ asset('assets/js/script.js?v33') }}\"></script>


    <script src=\"{{ asset('assets/js/jquery.lazyload.js') }}\"></script>
    <script src=\"{{ asset('assets/js/panier/panier.js?v83') }}\"></script>

    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}\"></script>
    <script>
    </script>
{% endblock javascripts %}

</body>
</html>
", "FrontendBundle::basetwo.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/basetwo.html.twig");
    }
}
