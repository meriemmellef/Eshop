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

/* @Backend/layout/navbar.html.twig */
class __TwigTemplate_13135a7d4c905336b7e82d1491565cc2d218ebe2faee6053358f07e0a528e023 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/layout/navbar.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/flag-icon-css/flag-icon.css"), "html", null, true);
        echo "\">
<nav class=\"site-navbar navbar navbar-default navbar-fixed-top navbar-mega \" role=\"navigation\">

    <div class=\"navbar-header\" style=\"background-color: white\">
    </div>

    <div class=\"navbar-container container-fluid\">
        <!-- Navbar Collapse -->
        <div class=\"collapse navbar-collapse navbar-collapse-toolbar\" id=\"site-navbar-collapse\">
            <!-- Navbar Toolbar channge language  -->
            <ul class=\"nav navbar-toolbar\">

            </ul>
            <!-- End Navbar Toolbar -->
            <!--
                                <div class=\"dropdown-menu \" style=\"width: fit-content\" >
                                    <a class=\"dropdown-item\" style=\"font-family: Roboto-Regular, sans-serif\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fr_en");
        echo "?to=en\" role=\"menuitem\">
                                     <span class=\"flag-icon flag-icon-gb\"></span>EN</a><br>
                                   <a class=\"dropdown-item\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fr_en");
        echo "?to=fr\" role=\"menuitem\">
                                    <span class=\"flag-icon flag-icon-fr\"></span>FR</a>
                                </div>
                        -->
            <!-- Navbar Toolbar Right -->
            <ul class=\"nav navbar-toolbar navbar-right navbar-toolbar-right\">

                ";
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "hasRole", [0 => "ROLE_SUPER_ADMIN"], "method")) {
            // line 27
            echo "
                <li class=\"nav-item dropdown\">
                        <a class=\"nav-link navbar-avatar\" data-toggle=\"dropdown\" href=\"javascript:void(0)\" data-animation=\"scale-up\"
                           aria-expanded=\"false\" role=\"button\">
                            ";
            // line 31
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo "<span class=\"flag-icon flag-icon-gb\"></span>";
            } elseif (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr")) {
                echo "<span class=\"flag-icon flag-icon-fr\"></span>";
            }
            // line 32
            echo "

                        </a>
                    <div class=\"dropdown-menu\" role=\"menu\">
                        <a class=\"dropdown-item\" href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fr_en");
            echo "?to=en\" role=\"menuitem\">
                            <span class=\"flag-icon flag-icon-gb\"></span>English</a>
                        <a class=\"dropdown-item\" href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fr_en");
            echo "?to=fr\" role=\"menuitem\">
                            <span class=\"flag-icon flag-icon-fr\"></span>Français</a>
                    </div>
                </li>

                ";
        }
        // line 44
        echo "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link navbar-avatar\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\"
                       data-animation=\"scale-up\" role=\"button\">
                       <span class=\"avatar avatar-online\">
                        <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/images/user.png"), "html", null, true);
        echo "\" alt=\"...\">
                       <i></i>
                        </span>
                    </a>
                    <div class=\"dropdown-menu\" role=\"menu\">
                        ";
        // line 53
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "hasRole", [0 => "ROLE_GESTIONNAIRE"], "method") || $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "hasRole", [0 => "ROLE_GERANT"], "method"))) {
            // line 54
            echo "
                            <a class=\"dropdown-item\" href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_password");
            echo "\" role=\"menuitem\"><i class=\"icon md-account\" aria-hidden=\"true\"></i>
                                ";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 58
        echo "


                        <a class=\"dropdown-item\" href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_logout");
        echo "\" role=\"menuitem\"><i class=\"icon md-power\" aria-hidden=\"true\"></i>
                            ";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout"), "html", null, true);
        echo "</a>
                    </div>
                </li>
            </ul>
            <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->

        <!-- Site Navbar Seach -->
        <div class=\"collapse navbar-search-overlap\" id=\"site-navbar-search\">
            <form role=\"search\">
                <div class=\"form-group\">
                    <div class=\"input-search\">
                        <i class=\"input-search-icon md-search\" aria-hidden=\"true\"></i>
                        <input type=\"text\" class=\"form-control\" name=\"site-search\" placeholder=\"Search...\">
                        <button type=\"button\" class=\"input-search-close icon md-close\" data-target=\"#site-navbar-search\"
                                data-toggle=\"collapse\" aria-label=\"Close\"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Site Navbar Seach -->
    </div>
</nav>

<style>
    @media screen and (max-width: 767px) {
        .site-navbar{
            visibility: hidden;

        }
    }

</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/layout/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 62,  135 => 61,  130 => 58,  125 => 56,  121 => 55,  118 => 54,  116 => 53,  108 => 48,  102 => 44,  93 => 38,  88 => 36,  82 => 32,  76 => 31,  70 => 27,  68 => 26,  58 => 19,  53 => 17,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"{{ asset('remark/global/vendor/flag-icon-css/flag-icon.css') }}\">
<nav class=\"site-navbar navbar navbar-default navbar-fixed-top navbar-mega \" role=\"navigation\">

    <div class=\"navbar-header\" style=\"background-color: white\">
    </div>

    <div class=\"navbar-container container-fluid\">
        <!-- Navbar Collapse -->
        <div class=\"collapse navbar-collapse navbar-collapse-toolbar\" id=\"site-navbar-collapse\">
            <!-- Navbar Toolbar channge language  -->
            <ul class=\"nav navbar-toolbar\">

            </ul>
            <!-- End Navbar Toolbar -->
            <!--
                                <div class=\"dropdown-menu \" style=\"width: fit-content\" >
                                    <a class=\"dropdown-item\" style=\"font-family: Roboto-Regular, sans-serif\" href=\"{{ path('fr_en') }}?to=en\" role=\"menuitem\">
                                     <span class=\"flag-icon flag-icon-gb\"></span>EN</a><br>
                                   <a class=\"dropdown-item\" href=\"{{ path('fr_en') }}?to=fr\" role=\"menuitem\">
                                    <span class=\"flag-icon flag-icon-fr\"></span>FR</a>
                                </div>
                        -->
            <!-- Navbar Toolbar Right -->
            <ul class=\"nav navbar-toolbar navbar-right navbar-toolbar-right\">

                {% if app.user.hasRole(\"ROLE_SUPER_ADMIN\") %}

                <li class=\"nav-item dropdown\">
                        <a class=\"nav-link navbar-avatar\" data-toggle=\"dropdown\" href=\"javascript:void(0)\" data-animation=\"scale-up\"
                           aria-expanded=\"false\" role=\"button\">
                            {% if app.request.getLocale()  == 'en' %}<span class=\"flag-icon flag-icon-gb\"></span>{% elseif app.request.getLocale()  == 'fr' %}<span class=\"flag-icon flag-icon-fr\"></span>{% endif %}


                        </a>
                    <div class=\"dropdown-menu\" role=\"menu\">
                        <a class=\"dropdown-item\" href=\"{{ path('fr_en') }}?to=en\" role=\"menuitem\">
                            <span class=\"flag-icon flag-icon-gb\"></span>English</a>
                        <a class=\"dropdown-item\" href=\"{{ path('fr_en') }}?to=fr\" role=\"menuitem\">
                            <span class=\"flag-icon flag-icon-fr\"></span>Français</a>
                    </div>
                </li>

                {% endif %}
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link navbar-avatar\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\"
                       data-animation=\"scale-up\" role=\"button\">
                       <span class=\"avatar avatar-online\">
                        <img src=\"{{ asset('remark/images/user.png')}}\" alt=\"...\">
                       <i></i>
                        </span>
                    </a>
                    <div class=\"dropdown-menu\" role=\"menu\">
                        {% if  app.user.hasRole(\"ROLE_GESTIONNAIRE\") or app.user.hasRole(\"ROLE_GERANT\") %}

                            <a class=\"dropdown-item\" href=\"{{ path('update_password') }}\" role=\"menuitem\"><i class=\"icon md-account\" aria-hidden=\"true\"></i>
                                {{ \"profile\"|trans }}</a>
                        {% endif %}



                        <a class=\"dropdown-item\" href=\"{{ path('admin_logout') }}\" role=\"menuitem\"><i class=\"icon md-power\" aria-hidden=\"true\"></i>
                            {{ \"Logout\"|trans }}</a>
                    </div>
                </li>
            </ul>
            <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->

        <!-- Site Navbar Seach -->
        <div class=\"collapse navbar-search-overlap\" id=\"site-navbar-search\">
            <form role=\"search\">
                <div class=\"form-group\">
                    <div class=\"input-search\">
                        <i class=\"input-search-icon md-search\" aria-hidden=\"true\"></i>
                        <input type=\"text\" class=\"form-control\" name=\"site-search\" placeholder=\"Search...\">
                        <button type=\"button\" class=\"input-search-close icon md-close\" data-target=\"#site-navbar-search\"
                                data-toggle=\"collapse\" aria-label=\"Close\"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Site Navbar Seach -->
    </div>
</nav>

<style>
    @media screen and (max-width: 767px) {
        .site-navbar{
            visibility: hidden;

        }
    }

</style>
", "@Backend/layout/navbar.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\layout\\navbar.html.twig");
    }
}
