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

/* @Backend/gestionnaire/parametre/mail_form.html.twig */
class __TwigTemplate_4d01b0f42d9f8de88734ab12bc30a41b0c74c97dc4aa18581a2be9aeb28da84b extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gestionnaire/parametre/mail_form.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mailréception"), "html", null, true);
        echo "</label>
        ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mailNewCommand", []), 'widget', ["attr" => ["class" => "form-control", "style" => "height: 200px;"]]);
        echo "
        <div class=\"checkbox-custom checkbox-primary center-block\">
            ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isActiveMailNewCommand", []), 'widget', ["attr" => ["class" => "form-control"]]);
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
                    %CLIENTMAIL%
                </td>
                <td style=\"vertical-align: middle;\">
                    ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail du client"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mailréceptionc"), "html", null, true);
        echo "</label>
        ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mailConfirmCommand", []), 'widget', ["attr" => ["class" => "form-control", "style" => "height: 200px;"]]);
        echo "


        <div class=\"checkbox-custom checkbox-primary center-block\">
            ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isActiveMailConfirmCommand", []), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 149
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
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Station"), "html", null, true);
        echo "
                </td>
            </tr>

            <tr>
                <td style=\"vertical-align: middle;\">
                    %QRCODE%
                </td>
                <td style=\"vertical-align: middle;\">
                    ";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Qrcode"), "html", null, true);
        echo "
                </td>
            </tr>


            <tr>
                <td style=\"vertical-align: middle;\">
                    %PRIX%
                </td>
                <td style=\"vertical-align: middle;\">
                    ";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix"), "html", null, true);
        echo "
                </td>

            </tr>

            </tbody>
        </table>
    </div>














  ";
        // line 206
        echo "
    <div class=\"row\">
        <div class=\"col-lg-6 text-right\">
            <button class=\"btn social-evernote  waves-effect waves-classic\">";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "</button>
        </div>

        <div class=\"col-lg-6 text-left\">
            <a href=\"";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard_index");
        echo "\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</a>
        </div>
    </div>
    ";
        // line 216
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <br>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/gestionnaire/parametre/mail_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 216,  337 => 213,  330 => 209,  325 => 206,  300 => 177,  287 => 167,  275 => 158,  263 => 149,  250 => 139,  238 => 130,  223 => 118,  219 => 117,  209 => 110,  205 => 109,  198 => 105,  194 => 104,  181 => 94,  168 => 84,  156 => 75,  142 => 64,  130 => 55,  118 => 46,  103 => 34,  99 => 33,  89 => 26,  85 => 25,  80 => 23,  76 => 22,  72 => 20,  63 => 13,  54 => 11,  50 => 10,  43 => 5,  41 => 4,  37 => 3,  33 => 1,);
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
        <label>{{ \"Mailréception\" | trans }}</label>
        {{ form_widget(form.mailNewCommand, {'attr': {'class': 'form-control','style':'height: 200px;'}}) }}
        <div class=\"checkbox-custom checkbox-primary center-block\">
            {{ form_widget(form.isActiveMailNewCommand, {'attr': {'class': 'form-control'}}) }}
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
                    %CLIENTMAIL%
                </td>
                <td style=\"vertical-align: middle;\">
                    {{ 'Mail du client'|trans }}
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
        <label>{{ \"Mailréceptionc\" | trans }}</label>
        {{ form_widget(form.mailConfirmCommand, {'attr': {'class': 'form-control','style':'height: 200px;'}}) }}


        <div class=\"checkbox-custom checkbox-primary center-block\">
            {{ form_widget(form.isActiveMailConfirmCommand, {'attr': {'class': 'form-control'}}) }}
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
                    %QRCODE%
                </td>
                <td style=\"vertical-align: middle;\">
                    {{ 'Qrcode'|trans }}
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

", "@Backend/gestionnaire/parametre/mail_form.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gestionnaire\\parametre\\mail_form.html.twig");
    }
}
