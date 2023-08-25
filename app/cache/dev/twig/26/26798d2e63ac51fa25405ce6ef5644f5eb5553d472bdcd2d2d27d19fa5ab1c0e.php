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

/* @Backend/gestionnaire/parametre/sms_form.html.twig */
class __TwigTemplate_9243b60e736e11e430e210786bcad982c2d4e7948d7a8661511f8ce01581d761 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gestionnaire/parametre/sms_form.html.twig"));

        // line 1
        echo "<div class=\"example-wrap\">

    ";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "row"]]);
        echo "
    ";
        // line 4
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 5
            echo "        <div class=\"offset-lg-2 col-lg-8\" style=\"padding-top: 20px;\">
            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 11
                echo "                    <p class=\"text-danger\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "            </div>

        </div>
        <div class=\"col-lg-4\">

        </div>
    ";
        }
        // line 20
        echo "
    <div class=\"col-lg-6\">
        <label>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMS réception commande pour le gérant"), "html", null, true);
        echo "</label>
        ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "smsNewCommand", []), 'widget', ["attr" => ["class" => "form-control", "style" => "height: 200px;"]]);
        echo "
        <div class=\"checkbox-custom checkbox-primary center-block\">
            ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isActiveSmsNewCommand", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <label for=\"inputChecked\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Est Active"), "html", null, true);
        echo " ?</label>
        </div>
    </div>
    <div class=\"col-lg-6\">
        <table class=\"table table-striped\">
            <thead>
            <tr >
                <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configuration"), "html", null, true);
        echo "</th>
                <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</th>
            </tr>
            </thead>
            </thead>
            <tbody>

            <tr>

                <td style=\"vertical-align: middle;\">
                    %NUM%
                </td>
                <td style=\"vertical-align: middle;\">
                    ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Numéro de la commande"), "html", null, true);
        echo "
                </td>
            </tr>

            <tr>
                <td style=\"vertical-align: middle;\">
                    %PRODUCTNAME%
                </td>
                <td style=\"vertical-align: middle;\">
                    ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom du produit"), "html", null, true);
        echo "
                </td>
            </tr>

            <tr>
                <td style=\"vertical-align: middle;\">
                    %DATE%
                </td>
                <td style=\"vertical-align: middle;\">
                    ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date du RDV"), "html", null, true);
        echo "
                </td>
            </tr>



            <tr>
                <td style=\"vertical-align: middle;\">
                    %CLIENTNAME%
                </td>
                <td style=\"vertical-align: middle;\">
                    ";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom du client"), "html", null, true);
        echo "
                </td>
            </tr>

            <tr>
                <td style=\"vertical-align: middle;\">
                    %CLIENTPHONE%
                </td>
                <td style=\"vertical-align: middle;\">
                    ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléphone du client"), "html", null, true);
        echo "
                </td>

            </tr>

            <tr>
                <td style=\"vertical-align: middle;\">
                    %PRIX%
                </td>
                <td style=\"vertical-align: middle;\">
                    ";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix"), "html", null, true);
        echo "
                </td>

            </tr>
            </tbody>
        </table>
    </div>


    <div class=\"col-lg-6\">
        <label>";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMS confirmation commande pour le client"), "html", null, true);
        echo "</label>
        ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "smsConfirmCommand", []), 'widget', ["attr" => ["class" => "form-control", "style" => "height: 200px;"]]);
        echo "


        <div class=\"checkbox-custom checkbox-primary center-block\">
            ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isActiveSmsConfirmCommand", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <label for=\"inputChecked\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Est Active"), "html", null, true);
        echo "?</label>
        </div>
    </div>
    <div class=\"col-lg-6\">
        <table class=\"table table-striped\">
            <thead>
            <tr >
                <th>";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configuration"), "html", null, true);
        echo "</th>
                <th>";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</th>
            </tr>
            </thead>
            </thead>
            <tbody >

            <tr>

                <td style=\"vertical-align: middle;\">
                    %NUM%
                </td>
                <td style=\"vertical-align: middle;\">
                    ";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Numéro de la commande"), "html", null, true);
        echo "
                </td>
            </tr>

            <tr>
                <td style=\"vertical-align: middle;\">
                    %PRODUCTNAME%
                </td>
                <td style=\"vertical-align: middle;\">
                    ";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom du produit"), "html", null, true);
        echo "
                </td>
            </tr>

            <tr>
                <td style=\"vertical-align: middle;\">
                    %DATE%
                </td>
                <td style=\"vertical-align: middle;\">
                    ";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date du RDV"), "html", null, true);
        echo "
                </td>
            </tr>

            <tr>
                <td style=\"vertical-align: middle;\">
                    %STATION%
                </td>
                <td style=\"vertical-align: middle;\">
                    ";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Station"), "html", null, true);
        echo "
                </td>
            </tr>



            <tr>
                <td style=\"vertical-align: middle;\">
                    %PRIX%
                </td>
                <td style=\"vertical-align: middle;\">
                    ";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix"), "html", null, true);
        echo "
                </td>

            </tr>

            </tbody>
        </table>
    </div>













";
        // line 197
        echo "
    <div class=\"row\">
        <div class=\"col-lg-6 text-right\">
            <button class=\"btn social-evernote  waves-effect waves-classic\">";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "</button>
        </div>

        <div class=\"col-lg-6 text-left\">
            <a href=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard_index");
        echo "\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</a>
        </div>
    </div>
    ";
        // line 207
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <br>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/gestionnaire/parametre/sms_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 207,  324 => 204,  317 => 200,  312 => 197,  288 => 168,  274 => 157,  262 => 148,  250 => 139,  238 => 130,  223 => 118,  219 => 117,  209 => 110,  205 => 109,  198 => 105,  194 => 104,  181 => 94,  168 => 84,  156 => 75,  142 => 64,  130 => 55,  118 => 46,  103 => 34,  99 => 33,  89 => 26,  85 => 25,  80 => 23,  76 => 22,  72 => 20,  63 => 13,  54 => 11,  50 => 10,  43 => 5,  41 => 4,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"example-wrap\">

    {{ form_start(form, {'attr': {'class': 'row'}}) }}
    {% if errors|length > 0 %}
        <div class=\"offset-lg-2 col-lg-8\" style=\"padding-top: 20px;\">
            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
                {% for error in errors %}
                    <p class=\"text-danger\">{{ error }}</p>
                {% endfor %}
            </div>

        </div>
        <div class=\"col-lg-4\">

        </div>
    {% endif %}

    <div class=\"col-lg-6\">
        <label>{{ \"SMS réception commande pour le gérant\" | trans }}</label>
        {{ form_widget(form.smsNewCommand, {'attr': {'class': 'form-control','style':'height: 200px;'}}) }}
        <div class=\"checkbox-custom checkbox-primary center-block\">
            {{ form_widget(form.isActiveSmsNewCommand, {'attr': {'class': 'form-control'}}) }}
            <label for=\"inputChecked\">{{ 'Est Active'|trans }} ?</label>
        </div>
    </div>
    <div class=\"col-lg-6\">
        <table class=\"table table-striped\">
            <thead>
            <tr >
                <th>{{ 'Configuration'|trans }}</th>
                <th>{{ 'Description'|trans }}</th>
            </tr>
            </thead>
            </thead>
            <tbody>

            <tr>

                <td style=\"vertical-align: middle;\">
                    %NUM%
                </td>
                <td style=\"vertical-align: middle;\">
                    {{ 'Numéro de la commande'|trans }}
                </td>
            </tr>

            <tr>
                <td style=\"vertical-align: middle;\">
                    %PRODUCTNAME%
                </td>
                <td style=\"vertical-align: middle;\">
                    {{ 'Nom du produit'|trans }}
                </td>
            </tr>

            <tr>
                <td style=\"vertical-align: middle;\">
                    %DATE%
                </td>
                <td style=\"vertical-align: middle;\">
                    {{ 'Date du RDV'|trans }}
                </td>
            </tr>



            <tr>
                <td style=\"vertical-align: middle;\">
                    %CLIENTNAME%
                </td>
                <td style=\"vertical-align: middle;\">
                    {{ 'Nom du client'|trans }}
                </td>
            </tr>

            <tr>
                <td style=\"vertical-align: middle;\">
                    %CLIENTPHONE%
                </td>
                <td style=\"vertical-align: middle;\">
                    {{ 'Téléphone du client'|trans }}
                </td>

            </tr>

            <tr>
                <td style=\"vertical-align: middle;\">
                    %PRIX%
                </td>
                <td style=\"vertical-align: middle;\">
                    {{ 'Prix'|trans }}
                </td>

            </tr>
            </tbody>
        </table>
    </div>


    <div class=\"col-lg-6\">
        <label>{{ \"SMS confirmation commande pour le client\" | trans }}</label>
        {{ form_widget(form.smsConfirmCommand, {'attr': {'class': 'form-control','style':'height: 200px;'}}) }}


        <div class=\"checkbox-custom checkbox-primary center-block\">
            {{ form_widget(form.isActiveSmsConfirmCommand, {'attr': {'class': 'form-control'}}) }}
            <label for=\"inputChecked\">{{ 'Est Active'|trans }}?</label>
        </div>
    </div>
    <div class=\"col-lg-6\">
        <table class=\"table table-striped\">
            <thead>
            <tr >
                <th>{{ 'Configuration'|trans }}</th>
                <th>{{ 'Description'|trans }}</th>
            </tr>
            </thead>
            </thead>
            <tbody >

            <tr>

                <td style=\"vertical-align: middle;\">
                    %NUM%
                </td>
                <td style=\"vertical-align: middle;\">
                    {{ 'Numéro de la commande'|trans }}
                </td>
            </tr>

            <tr>
                <td style=\"vertical-align: middle;\">
                    %PRODUCTNAME%
                </td>
                <td style=\"vertical-align: middle;\">
                    {{ 'Nom du produit'|trans }}
                </td>
            </tr>

            <tr>
                <td style=\"vertical-align: middle;\">
                    %DATE%
                </td>
                <td style=\"vertical-align: middle;\">
                    {{ 'Date du RDV'|trans }}
                </td>
            </tr>

            <tr>
                <td style=\"vertical-align: middle;\">
                    %STATION%
                </td>
                <td style=\"vertical-align: middle;\">
                    {{ 'Station'|trans }}
                </td>
            </tr>



            <tr>
                <td style=\"vertical-align: middle;\">
                    %PRIX%
                </td>
                <td style=\"vertical-align: middle;\">
                    {{ 'Prix'|trans }}
                </td>

            </tr>

            </tbody>
        </table>
    </div>













{#

    <div class=\"col-lg-12 text-center\">
        <button style=\"margin-top: 3px;\" class=\"float-right btn btn-md social-evernote waves-effect waves-classic\">
            {{ \"Enregistrer\" | trans }}
        </button>
    </div>
#}

    <div class=\"row\">
        <div class=\"col-lg-6 text-right\">
            <button class=\"btn social-evernote  waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>
        </div>

        <div class=\"col-lg-6 text-left\">
            <a href=\"{{ path('dashboard_index') }}\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">{{ 'back'|trans }}</a>
        </div>
    </div>
    {{ form_end(form) }}
    <br>
</div>

", "@Backend/gestionnaire/parametre/sms_form.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gestionnaire\\parametre\\sms_form.html.twig");
    }
}
