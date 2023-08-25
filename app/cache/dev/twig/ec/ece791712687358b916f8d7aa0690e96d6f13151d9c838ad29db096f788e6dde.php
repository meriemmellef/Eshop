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

/* @Backend/gestionnaire/coupon/generer.html.twig */
class __TwigTemplate_e199b975aa6d745c3ac30c76b04a8b2bbadd8029a75fa773e24f40267bbf47da extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'page' => [$this, 'block_page'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Backend/layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gestionnaire/coupon/generer.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/gestionnaire/coupon/generer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 5
        echo "    <div class=\"page\">
        <div class=\"page-header\">
            <h1 class=\"page-title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Générer Coupons"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">


                                <div class=\"col-lg-12\">
                                    <div class=\"row row-lg\">
                                        <div class=\"col-lg-2 text-left\">

                                        </div>
                                        <div class=\"col-xxl-8 col-lg-8\">


                                            ";
        // line 26
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 27
            echo "                                                <div class=\"col-lg-12 text-center\">

                                                    ";
            // line 29
            if ((($context["error"] ?? $this->getContext($context, "error")) == 1)) {
                // line 30
                echo "                                                        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">×</span>
                                                            </button>
                                                            ";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("captchincorect", [], "messages"), "html", null, true);
                echo "
                                                        </div>

                                                    ";
            }
            // line 38
            echo "                                                </div>
                                            ";
        }
        // line 40
        echo "                                            <!-- Example Tabs In The Panel -->
                                            <div class=\"panel nav-tabs-horizontal\" data-plugin=\"tabs\">
                                                <ul class=\"nav nav-tabs nav-tabs-line\" role=\"tablist\">
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link active\" id=\"cop_prix\"  style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#coupanprix\" aria-controls=\"exampleTopHome\" role=\"tab\" aria-selected=\"true\">
                                                            ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Générer Coupons Par Prix"), "html", null, true);
        echo "
                                                        </a>
                                                    </li>
                                                    <li class=\"nav-item\" style=\"\">
                                                        <a class=\"nav-link\" id=\"cop_pourcentage\" style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#coupantpourcentage\" aria-controls=\"exampleTopComponents\" role=\"tab\" aria-selected=\"false\">


                                                            ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Générer Coupons Par Pourcentage"), "html", null, true);
        echo "
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class=\"panel-body\" style=\"border: 1px solid #d4d4d4;\">


                                                    <div class=\"tab-content\">
                                                        <div class=\"tab-pane active\" id=\"coupanprix\" role=\"tabpanel\">
                                                            ";
        // line 61
        $this->loadTemplate("@Backend/gestionnaire/coupon/generercouponprix.html.twig", "@Backend/gestionnaire/coupon/generer.html.twig", 61)->display($context);
        // line 62
        echo "

                                                        </div>
                                                        <div class=\"tab-pane\" id=\"coupantpourcentage\" role=\"tabpanel\">
                                                            ";
        // line 66
        $this->loadTemplate("@Backend/gestionnaire/coupon/generercouponpourcentage.html.twig", "@Backend/gestionnaire/coupon/generer.html.twig", 66)->display($context);
        // line 67
        echo "
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Example Tabs In The Panel -->
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
    <script>

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/gestionnaire/coupon/generer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 90,  170 => 89,  142 => 67,  140 => 66,  134 => 62,  132 => 61,  120 => 52,  110 => 45,  103 => 40,  99 => 38,  92 => 34,  86 => 30,  84 => 29,  80 => 27,  78 => 26,  56 => 7,  52 => 5,  46 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Backend/layout/layout.html.twig' %}


{% block page %}
    <div class=\"page\">
        <div class=\"page-header\">
            <h1 class=\"page-title\">{{\"Générer Coupons\"|trans}}</h1>
        </div>
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">


                                <div class=\"col-lg-12\">
                                    <div class=\"row row-lg\">
                                        <div class=\"col-lg-2 text-left\">

                                        </div>
                                        <div class=\"col-xxl-8 col-lg-8\">


                                            {% if error is defined %}
                                                <div class=\"col-lg-12 text-center\">

                                                    {% if   error==1   %}
                                                        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">×</span>
                                                            </button>
                                                            {{ \"captchincorect\"|trans({}, 'messages') }}
                                                        </div>

                                                    {% endif %}
                                                </div>
                                            {% endif %}
                                            <!-- Example Tabs In The Panel -->
                                            <div class=\"panel nav-tabs-horizontal\" data-plugin=\"tabs\">
                                                <ul class=\"nav nav-tabs nav-tabs-line\" role=\"tablist\">
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link active\" id=\"cop_prix\"  style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#coupanprix\" aria-controls=\"exampleTopHome\" role=\"tab\" aria-selected=\"true\">
                                                            {{\"Générer Coupons Par Prix\"|trans}}
                                                        </a>
                                                    </li>
                                                    <li class=\"nav-item\" style=\"\">
                                                        <a class=\"nav-link\" id=\"cop_pourcentage\" style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#coupantpourcentage\" aria-controls=\"exampleTopComponents\" role=\"tab\" aria-selected=\"false\">


                                                            {{\"Générer Coupons Par Pourcentage\"|trans}}
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class=\"panel-body\" style=\"border: 1px solid #d4d4d4;\">


                                                    <div class=\"tab-content\">
                                                        <div class=\"tab-pane active\" id=\"coupanprix\" role=\"tabpanel\">
                                                            {% include \"@Backend/gestionnaire/coupon/generercouponprix.html.twig\" %}


                                                        </div>
                                                        <div class=\"tab-pane\" id=\"coupantpourcentage\" role=\"tabpanel\">
                                                            {% include \"@Backend/gestionnaire/coupon/generercouponpourcentage.html.twig\" %}

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Example Tabs In The Panel -->
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


{% endblock %}
{% block javascripts %}
    {{ parent() }}

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
    <script>

    </script>
{% endblock %}
", "@Backend/gestionnaire/coupon/generer.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gestionnaire\\coupon\\generer.html.twig");
    }
}
