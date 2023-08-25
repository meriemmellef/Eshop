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

/* FrontendBundle::base.html.twig */
class __TwigTemplate_b65ed2589489ac989e0e82e798a59b1a8de789cd9f7c0b782003af75dcbc253b extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle::base.html.twig"));

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
        // line 37
        echo "    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->
    <!-- Loading script asynchronously -->


    <script>
        paceOptions = {
            elements: true
        };
    </script>

    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/pace.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery/jquery-1.10.1.min.js"), "html", null, true);
        echo "\"></script>
</head>

<body style=\"font-family: Roboto-Regular, sans-serif; \">
";
        // line 60
        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "station_id", 1 => ""], "method") == "") || true)) {
            // line 61
            echo "    ";
            // line 62
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FrontendBundle:Default:modalStation"));
            echo "
";
        }
        // line 64
        echo "<input type=\"text\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method"), "html", null, true);
        echo "\" id=\"language\"  style=\"display: none;\">



<!-- Modal Login start -->
";
        // line 69
        $this->loadTemplate("FrontendBundle:Modals:loginModal.html.twig", "FrontendBundle::base.html.twig", 69)->display($context);
        // line 70
        echo "
<!-- Modal Signup start -->
";
        // line 72
        $this->loadTemplate("FrontendBundle:Modals:registerModal.html.twig", "FrontendBundle::base.html.twig", 72)->display($context);
        // line 73
        echo "

<!-- Fixed navbar start -->
";
        // line 76
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FrontendBundle:Panier:menu"), []);
        // line 77
        echo "
<script type=\"text/javascript\">
    var language = \$(\"#language\").val();
    console.log(language);
    var utag_data =
        {\"site_name\":\"631397\",
            \"site_section\":\"1\",
            \"page_section\":\"transfer_dsb\",
            \"page_category\":\"\",
            \"page_subcategory\":\"\",
            \"page_name\":\"\",
            \"page_type\":\"\",
            \"env_type\":\"dev\",
            \"language\":\"1\",
            \"customer_id\":\"353\",
            \"car_type\":\"\",
            \"customer_firstname\":\"\",
            \"customer_lastname\":\"\",
            \"email_address\":\"\",
            \"phone_number\":\"\",
            \"city\":\"\"
        };
    if (language ==='en'){
        utag_data[\"language\"]= \"2\" ;
    }else {
        utag_data[\"language\"]= \"1\";
    }

</script>


<script type=\"text/javascript\" >
    (function(a,b,c,d){
            a='https://tags.tiqcdn.com/utag/totalms/ms-eshop-station/prod/utag.js';
            b=document;
            c='script';
            d=b.createElement(c);
            d.src=a;
            d.type='text/java'+c;
            d.async=true;
            a=b.getElementsByTagName(c)[0];
            a.parentNode.insertBefore(d,a);
        }
    )();
</script>


";
        // line 124
        $this->displayBlock('body', $context, $blocks);
        // line 127
        echo "



";
        // line 131
        $this->loadTemplate("FrontendBundle:Blocks:footer.html.twig", "FrontendBundle::base.html.twig", 131)->display($context);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('javascripts', $context, $blocks);
        // line 210
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

        echo "TotalEnergies|Eboutique";
        
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css?v25"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/swiper-master/css/swiper.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom styles for this template -->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/totaltheme.css?v132"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/select2/select2.css"), "html", null, true);
        echo "?v4\">

\t\t<style>
\t\t\t.pickmeup .pmu-instance .pmu-days * {
\t\t\t\twidth: 51px !important;
\t\t\t}
\t\t</style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 124
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 125
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "    <!-- Le javascript
    ================================================== -->

    ";
        // line 138
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js?v3"), "html", null, true);
        echo "\"></script>    <!-- include  parallax plugin -->
    <script src=\"";
        // line 139
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
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.cycle2.min.js"), "html", null, true);
        echo "\"></script>

    <!-- include easing plugin -->
    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>

    <!-- include  parallax plugin -->
    <script type=\"text/javascript\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.parallax-1.1.js"), "html", null, true);
        echo "\"></script>

    <!-- optionally include helper plugins -->
    <script type=\"text/javascript\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/helper-plugins/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>

    <!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

    <script type=\"text/javascript\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.mCustomScrollbar.js"), "html", null, true);
        echo "\"></script>

    <!-- include icheck plugin // customized checkboxes and radio buttons   -->
    <script type=\"text/javascript\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/icheck-1.x/icheck.min.js"), "html", null, true);
        echo "\"></script>

    <!-- include grid.js // for equal Div height  -->
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/grids.js"), "html", null, true);
        echo "\"></script>

    <!-- include carousel slider plugin  -->
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/owl.carousel.min.js?v2"), "html", null, true);
        echo "\"></script>

    <!-- jQuery select2 // custom select
    was
         <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js\"></script>

     -->
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/select2/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/Plugin/select2.js"), "html", null, true);
        echo "\"></script>

    <!-- include touchspin.js // touch friendly input spinner component   -->
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.touchspin.js"), "html", null, true);
        echo "\"></script>

    <!-- include custom script for only homepage  -->
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/home.js"), "html", null, true);
        echo "\"></script>

    <!-- include custom script for site  -->
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/script.js?v32"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.lazyload.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/panier/panier.js?v83"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script>
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 206,  413 => 205,  408 => 203,  404 => 202,  398 => 199,  392 => 196,  386 => 193,  380 => 190,  376 => 189,  366 => 182,  360 => 179,  354 => 176,  348 => 173,  341 => 169,  335 => 166,  329 => 163,  323 => 160,  299 => 139,  294 => 138,  289 => 134,  283 => 133,  275 => 125,  269 => 124,  254 => 29,  246 => 24,  240 => 21,  235 => 19,  232 => 18,  226 => 17,  214 => 15,  204 => 210,  202 => 133,  199 => 132,  197 => 131,  191 => 127,  189 => 124,  140 => 77,  138 => 76,  133 => 73,  131 => 72,  127 => 70,  125 => 69,  116 => 64,  110 => 62,  108 => 61,  106 => 60,  99 => 56,  94 => 54,  75 => 37,  73 => 17,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  51 => 10,  46 => 8,  37 => 1,);
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
    <title>{% block title %}TotalEnergies|Eboutique{% endblock %}</title>

    {% block stylesheets %}
        <!-- Bootstrap core CSS -->
        <link href=\"{{ asset('assets/bootstrap/css/bootstrap.min.css?v25') }}\" rel=\"stylesheet\">

        <link href=\"{{ asset('assets/plugins/swiper-master/css/swiper.min.css') }}\" rel=\"stylesheet\">

        <!-- Custom styles for this template -->
        <link href=\"{{ asset('assets/css/totaltheme.css?v132') }}\" rel=\"stylesheet\">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


        <link rel=\"stylesheet\" href=\"{{ asset('remark/global/vendor/select2/select2.css') }}?v4\">

\t\t<style>
\t\t\t.pickmeup .pmu-instance .pmu-days * {
\t\t\t\twidth: 51px !important;
\t\t\t}
\t\t</style>
    {% endblock stylesheets %}
    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->
    <!-- Loading script asynchronously -->


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
{% if app.session.get(\"station_id\",\"\") == \"\"  or  true %}
    {# was  {% if app.session.get(\"station_id\",\"\") == \"\"  or true%} #}
        {{ render(controller('FrontendBundle:Default:modalStation')) }}
{% endif %}
<input type=\"text\" value=\"{{ app.request.getLocale() }}\" id=\"language\"  style=\"display: none;\">



<!-- Modal Login start -->
{% include 'FrontendBundle:Modals:loginModal.html.twig' %}

<!-- Modal Signup start -->
{% include 'FrontendBundle:Modals:registerModal.html.twig' %}


<!-- Fixed navbar start -->
{% render(controller('FrontendBundle:Panier:menu')) %}

<script type=\"text/javascript\">
    var language = \$(\"#language\").val();
    console.log(language);
    var utag_data =
        {\"site_name\":\"631397\",
            \"site_section\":\"1\",
            \"page_section\":\"transfer_dsb\",
            \"page_category\":\"\",
            \"page_subcategory\":\"\",
            \"page_name\":\"\",
            \"page_type\":\"\",
            \"env_type\":\"dev\",
            \"language\":\"1\",
            \"customer_id\":\"353\",
            \"car_type\":\"\",
            \"customer_firstname\":\"\",
            \"customer_lastname\":\"\",
            \"email_address\":\"\",
            \"phone_number\":\"\",
            \"city\":\"\"
        };
    if (language ==='en'){
        utag_data[\"language\"]= \"2\" ;
    }else {
        utag_data[\"language\"]= \"1\";
    }

</script>


<script type=\"text/javascript\" >
    (function(a,b,c,d){
            a='https://tags.tiqcdn.com/utag/totalms/ms-eshop-station/prod/utag.js';
            b=document;
            c='script';
            d=b.createElement(c);
            d.src=a;
            d.type='text/java'+c;
            d.async=true;
            a=b.getElementsByTagName(c)[0];
            a.parentNode.insertBefore(d,a);
        }
    )();
</script>


{% block body %}

{% endblock %}




{% include 'FrontendBundle:Blocks:footer.html.twig' %}

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
    <script src=\"{{ asset('assets/js/owl.carousel.min.js?v2') }}\"></script>

    <!-- jQuery select2 // custom select
    was
         <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js\"></script>

     -->
    <script src=\"{{ asset('remark/global/vendor/select2/select2.full.min.js') }}\"></script>
    <script src=\"{{ asset('remark/global/js/Plugin/select2.js') }}\"></script>

    <!-- include touchspin.js // touch friendly input spinner component   -->
    <script src=\"{{ asset('assets/js/bootstrap.touchspin.js') }}\"></script>

    <!-- include custom script for only homepage  -->
    <script src=\"{{ asset('assets/js/home.js') }}\"></script>

    <!-- include custom script for site  -->
    <script src=\"{{ asset('assets/js/script.js?v32') }}\"></script>


    <script src=\"{{ asset('assets/js/jquery.lazyload.js') }}\"></script>
    <script src=\"{{ asset('assets/js/panier/panier.js?v83') }}\"></script>

    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}\"></script>
    <script>
    </script>
{% endblock javascripts %}

</body>
</html>
", "FrontendBundle::base.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/base.html.twig");
    }
}
