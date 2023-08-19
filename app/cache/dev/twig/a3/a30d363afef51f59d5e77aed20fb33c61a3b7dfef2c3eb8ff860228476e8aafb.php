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

/* FrontendBundle:Default:chooseStaTest.html.twig */
class __TwigTemplate_2a7f881e180532ce350c71d7e0184c0bc2c408b302343f02d70ec72337316dcc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "FrontendBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:Default:chooseStaTest.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle::base.html.twig", "FrontendBundle:Default:chooseStaTest.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\"  style=\"padding-right: 2%;padding-left: 2%;margin-top: 110px;background-color: #F7F9FA;max-width: 1600px;margin-bottom: 20px\">
    <div class=\"row\">
        <div class=\"col-lg-12 col-xs-12\" style=\"padding: 25px;\">
            <div class=\"row\"  style=\" display: flex;  justify-content: center;  align-items: center;padding-bottom: 20px\">
                <div class=\"col-lg-6  col-xs-12 col-md-12 col-sm-12\">
                    <h1 class=\"sectionchoix  no-margin\">
                        <span>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "StationPopupTitle", []), "html", null, true);
        echo " </span>
                    </h1>

                    <p class=\"itempopupDesc\" style=\"margin-top: 30px;  white-space: pre-line;\">
                        ";
        // line 14
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "StationPopupDescription", []), "html", null, true));
        echo "
                    </p>
                    <br/>
                    <h3 class=\"spandesc  no-margin\" ><span>
                                ";
        // line 18
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "en")) {
            echo "Choose your station : ";
        } else {
            echo " Choisissez votre Station :";
        }
        // line 19
        echo "                               </span></h3>
                    <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("setStation");
        echo "\">

                        <select class=\"selectpicker\"  id=\"stationList\"  name=\"station_id\" style=\" width: 100%;border-radius: 10px;border: 1px solid #B7CBD3;height: 38px; font-family: Roboto-Regular,sans-serif; color: #B7CBD3;\">

                            <option class=\"optionp\" selected  disabled >";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(" Choisissez votre station"), "html", null, true);
        echo "</option>

                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stations"] ?? $this->getContext($context, "stations")));
        foreach ($context['_seq'] as $context["key"] => $context["station"]) {
            // line 27
            echo "                                <optgroup   label=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" style=\"color: #ED0000\">
                                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["station"]);
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 29
                echo "                                        <option class=\"optionpopup \"  value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                echo "\"  data-icon=\"glyphicon glyphicon-shopping-cart\" data-subtext=\"Heinz\" >
                                            ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nom", []), "html", null, true);
                echo "
                                        </option>



                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                                </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['station'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                        </select>
                        <br>  <br>

                        <button class=\"btnpopup\" type=\"submit\" style=\" width: 100%;margin-top: 10px;font-size: 17px;font-family: Roboto-Regular,sans-serif;height: 38px\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valider"), "html", null, true);
        echo "</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


    <style>

    .itempopupDesc {
        font-family: Roboto-Regular, sans-serif;
        color: #374649;
        font-size: 14px;
        line-height: 18px;
    }


    .titlepopup {
        font-family: Roboto-Regular, sans-serif;
        font-size: 16px;
        background: -webkit-linear-gradient(left, rgba(239, 111, 0), rgba(237, 0, 0)) !important;

        -webkit-background-clip: text !important;
        -webkit-text-fill-color: transparent !important;
    }

    .btnpopup {


        color: #ffffff;
        border: 1px solid #ED0000;

        padding: 0;
        height: 34px;
        width: 58px;
        font-family: Roboto-Regular, sans-serif;
        font-weight: normal;
        font-size: 14px;

        background: #ED0000;
        text-align: center;
        border-radius: 15px;


    }

    .btnpopup:hover {
        color: #ED0000;
        background: #ffffff;


    }

    .optionpopup {
        font-family: Roboto-Regular, sans-serif;
        font-weight: 400;
        color: #374649;
        font-size: 14px;



    }
    .optionp {
        font-family: Roboto-Regular, sans-serif;
        font-weight: 400;
        color: #B7CBD3;
        font-size: 14px;


    }

    /* .optionpopup{
          font-family: Roboto,sans-serif;
          font-weight: normal;
          font-size: 14px;


      }*/





</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:chooseStaTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 41,  131 => 38,  124 => 36,  112 => 30,  107 => 29,  103 => 28,  98 => 27,  94 => 26,  89 => 24,  82 => 20,  79 => 19,  73 => 18,  66 => 14,  59 => 10,  51 => 4,  45 => 3,  29 => 2,);
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
{% extends 'FrontendBundle::base.html.twig' %}
{% block body %}
<div class=\"container\"  style=\"padding-right: 2%;padding-left: 2%;margin-top: 110px;background-color: #F7F9FA;max-width: 1600px;margin-bottom: 20px\">
    <div class=\"row\">
        <div class=\"col-lg-12 col-xs-12\" style=\"padding: 25px;\">
            <div class=\"row\"  style=\" display: flex;  justify-content: center;  align-items: center;padding-bottom: 20px\">
                <div class=\"col-lg-6  col-xs-12 col-md-12 col-sm-12\">
                    <h1 class=\"sectionchoix  no-margin\">
                        <span>{{ app.session.get(\"pays\").StationPopupTitle }} </span>
                    </h1>

                    <p class=\"itempopupDesc\" style=\"margin-top: 30px;  white-space: pre-line;\">
                        {{ app.session.get(\"pays\").StationPopupDescription |nl2br }}
                    </p>
                    <br/>
                    <h3 class=\"spandesc  no-margin\" ><span>
                                {% if app.session.get(\"pays\").FrontLanguage == 'en' %}Choose your station : {% else %} Choisissez votre Station :{% endif %}
                               </span></h3>
                    <form action=\"{{ path(\"setStation\") }}\">

                        <select class=\"selectpicker\"  id=\"stationList\"  name=\"station_id\" style=\" width: 100%;border-radius: 10px;border: 1px solid #B7CBD3;height: 38px; font-family: Roboto-Regular,sans-serif; color: #B7CBD3;\">

                            <option class=\"optionp\" selected  disabled >{{\" Choisissez votre station\" | trans }}</option>

                            {% for key, station in stations %}
                                <optgroup   label=\"{{ key }}\" style=\"color: #ED0000\">
                                    {% for s in station %}
                                        <option class=\"optionpopup \"  value=\"{{ s.id }}\"  data-icon=\"glyphicon glyphicon-shopping-cart\" data-subtext=\"Heinz\" >
                                            {{ s.nom }}
                                        </option>



                                    {% endfor %}
                                </optgroup>
                            {% endfor %}
                        </select>
                        <br>  <br>

                        <button class=\"btnpopup\" type=\"submit\" style=\" width: 100%;margin-top: 10px;font-size: 17px;font-family: Roboto-Regular,sans-serif;height: 38px\">{{ \"Valider\"|trans }}</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


    <style>

    .itempopupDesc {
        font-family: Roboto-Regular, sans-serif;
        color: #374649;
        font-size: 14px;
        line-height: 18px;
    }


    .titlepopup {
        font-family: Roboto-Regular, sans-serif;
        font-size: 16px;
        background: -webkit-linear-gradient(left, rgba(239, 111, 0), rgba(237, 0, 0)) !important;

        -webkit-background-clip: text !important;
        -webkit-text-fill-color: transparent !important;
    }

    .btnpopup {


        color: #ffffff;
        border: 1px solid #ED0000;

        padding: 0;
        height: 34px;
        width: 58px;
        font-family: Roboto-Regular, sans-serif;
        font-weight: normal;
        font-size: 14px;

        background: #ED0000;
        text-align: center;
        border-radius: 15px;


    }

    .btnpopup:hover {
        color: #ED0000;
        background: #ffffff;


    }

    .optionpopup {
        font-family: Roboto-Regular, sans-serif;
        font-weight: 400;
        color: #374649;
        font-size: 14px;



    }
    .optionp {
        font-family: Roboto-Regular, sans-serif;
        font-weight: 400;
        color: #B7CBD3;
        font-size: 14px;


    }

    /* .optionpopup{
          font-family: Roboto,sans-serif;
          font-weight: normal;
          font-size: 14px;


      }*/





</style>
{% endblock body %}
", "FrontendBundle:Default:chooseStaTest.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/Default/chooseStaTest.html.twig");
    }
}
