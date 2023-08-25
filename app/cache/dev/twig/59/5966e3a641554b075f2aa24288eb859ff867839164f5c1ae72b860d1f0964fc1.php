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

/* @Backend/gestionnaire/coupon/generercouponprix.html.twig */
class __TwigTemplate_49802c7a14f622c9178807b0d2585e43256d79564a8af243e034f6175aaef8a1 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gestionnaire/coupon/generercouponprix.html.twig"));

        // line 1
        echo "

<form class=\"row row-lg\" action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generer_coupon_prix");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "headers", []), "get", [0 => "referer"], "method"), "html", null, true);
        echo "\"/>

    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nombre de coupons"), "html", null, true);
        echo " :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                <input type=\"number\" class=\"form-control\"  name=\"nbcoupon\">
            </div>
        </div>
    </div>
    <br><br>

    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Montant"), "html", null, true);
        echo "  :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                <input type=\"number\" class=\"form-control\" step=0.01 min=\"0\"  name=\"montant\">
            </div>
        </div>
    </div>

    <br><br>

    <div class=\"col-lg-12 \"  >
        <div class=\"row\">
            <div class=\"col-lg-3\">

            </div>
            <div class=\"col-lg-9\">
                <div class=\"input-group\" style=\"padding-top: 14px;padding-bottom: 5px;\">
                    <div class=\"g-recaptcha\" data-sitekey=\"6LedckodAAAAAAE-j3jaEd9gBOEFaaM7xxW3FKN0\"></div>
                    <script type=\"text/javascript\"
                            src=\"https://www.google.com/recaptcha/api.js?hl=en\">
                    </script>
                </div>
            </div>
        </div>

    </div>
    <br><br>

    <br><br>
    <div class=\"row col-lg-12 text-center\">
        <div class=\"col-lg-6 text-right\">
            <button class=\"btn  social-evernote submit  waves-effect waves-classic\" value=\"submit\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "</button>
        </div>
        <div class=\"col-lg-6 text-left\">
            <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_index");
        echo "\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"   class=\"btn   btn-danger waves-effect waves-classic\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</a>
        </div>
    </div>

    <br>
</form>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/gestionnaire/coupon/generercouponprix.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 55,  98 => 52,  64 => 21,  49 => 9,  41 => 4,  37 => 3,  33 => 1,);
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

<form class=\"row row-lg\" action=\"{{ path('generer_coupon_prix') }}\" method=\"post\">
    <input type=\"hidden\" name=\"referer\" value=\"{{app.request.headers.get('referer')}}\"/>

    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Nombre de coupons\"|trans }} :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                <input type=\"number\" class=\"form-control\"  name=\"nbcoupon\">
            </div>
        </div>
    </div>
    <br><br>

    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Montant\"|trans }}  :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                <input type=\"number\" class=\"form-control\" step=0.01 min=\"0\"  name=\"montant\">
            </div>
        </div>
    </div>

    <br><br>

    <div class=\"col-lg-12 \"  >
        <div class=\"row\">
            <div class=\"col-lg-3\">

            </div>
            <div class=\"col-lg-9\">
                <div class=\"input-group\" style=\"padding-top: 14px;padding-bottom: 5px;\">
                    <div class=\"g-recaptcha\" data-sitekey=\"6LedckodAAAAAAE-j3jaEd9gBOEFaaM7xxW3FKN0\"></div>
                    <script type=\"text/javascript\"
                            src=\"https://www.google.com/recaptcha/api.js?hl=en\">
                    </script>
                </div>
            </div>
        </div>

    </div>
    <br><br>

    <br><br>
    <div class=\"row col-lg-12 text-center\">
        <div class=\"col-lg-6 text-right\">
            <button class=\"btn  social-evernote submit  waves-effect waves-classic\" value=\"submit\">{{ 'Enregistrer'|trans }}</button>
        </div>
        <div class=\"col-lg-6 text-left\">
            <a href=\"{{ path('coupon_index') }}\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"   class=\"btn   btn-danger waves-effect waves-classic\">{{ 'back'|trans }}</a>
        </div>
    </div>

    <br>
</form>


{#{% extends '@Backend/layout/layout.html.twig' %}


{% block page %}
    <div class=\"page\">
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <h4 class=\"example-title\" hidden>{{\"Générer Coupons Par Prix\"|trans}}</h4>
                                <br><br>
                                <form class=\"row row-lg\" action=\"{{ path('generer_coupon_prix') }}\" method=\"post\">
                                    <input type=\"hidden\" name=\"referer\" value=\"{{app.request.headers.get('referer')}}\"/>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Nombre de coupons\"|trans }} :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                <input type=\"number\" class=\"form-control\"  name=\"nbcoupon\">
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Montant\"|trans }}  :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                <input type=\"number\" class=\"form-control\" step=0.01 min=\"0\"  name=\"montant\">
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>

                                    <br><br>
                                    <div class=\"col-lg-12 text-center\">
                                        <button class=\"btn  social-evernote  waves-effect waves-classic\">{{ button_label|default('Générer ') }}</button>
                                    </div>
                                    <br>
                                </form>

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

#}
", "@Backend/gestionnaire/coupon/generercouponprix.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gestionnaire\\coupon\\generercouponprix.html.twig");
    }
}
