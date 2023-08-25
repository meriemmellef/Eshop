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

/* FrontendBundle:Default:contact.html.twig */
class __TwigTemplate_4f26c9bb747b749ecb260ac05baec971fa40e9fc1bbde4927fc6c2ed0e42f0eb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'captcha_widget' => [$this, 'block_captcha_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "FrontendBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:Default:contact.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle::base.html.twig", "FrontendBundle:Default:contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://malsup.github.com/jquery.form.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <input type=\"text\" value=\"";
        echo twig_escape_filter($this->env, ($context["cp"] ?? $this->getContext($context, "cp")), "html", null, true);
        echo "\" id=\"cp\" style=\"display: none;\">
    <div class=\"container\">

    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_frontend");
        echo "\">Accueil</a></li>
                <li class=\"active\"> Nous contacter</li>
            </ul>
        </div>
    </div>
<br><br>
    <div class=\"row\">
<br><br>
    <div class=\"col-lg-12\">
   <center>
       ";
        // line 23
        if ((($context["done"] ?? $this->getContext($context, "done")) == 1)) {
            // line 24
            echo "       <div class=\"alert alert-success\" role=\"alert\">
           <strong>Merci</strong> votre message a été envoyé avec succès.
       </div>
       ";
        }
        // line 28
        echo "       <h1 class=\"section-title-inner\"><span> VOTRE AVIS NOUS INTÉRESSE</span></h1>
    <h3 class=\"section-title-inner\"><span> N'hésitez pas à nous contacter en remplissant le formulaire ci-dessous ou via nos coordonnées en bas de page.</span></h3></center>
    </div>
        <div class='well well-sm col-md-6 col-md-offset-3'>


            ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "


            <div class=\"form-group\">
                <label>Civilité</label><br>
                ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "civilite", []), 'widget');
        echo "
            </div>

            <div class=\"form-group\">
                <label>Nom</label><br>
                ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group\">
                <label>Prenom</label><br>
                ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group\">
                <label>Adresse</label><br>
                ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group\">
                <label>Ville</label><br>
                ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group\">
                <label>Zone</label><br>
                ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zone", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group\">
                <label>Email <sub> *</sub></label><br>
                ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group\">
                <label>Telephone <sub> *</sub></label><br>
                ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group\">
                <label>Objet <sub> *</sub></label><br>
                ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "object", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <!--<select name=\"objet[]\" name=\"objet\"  class=\"form-control\" required multiple>
                    <option value=\"Prix\">Prix </option>
                        <option value=\"Réclamation\">Réclamation </option>
                    <option value=\"Assistance technique\">Assistance technique </option>
                    <option value=\"Formation\">Formation </option>
                    <option value=\"Autre\">Autre </option>
                </select>-->
            </div>
            <div class=\"form-group\">
                <label>Sujet<sub> *</sub></label><br>
                ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sujet", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group\">
                <label>Message</label><br>
                ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group\">
                <label>Captcha <sub> *</sub></label><br>
            ";
        // line 92
        $this->displayBlock('captcha_widget', $context, $blocks);
        // line 98
        echo "            </div>

            <button class=\"btn btn-primary\"  type=\"submit\"><i class=\"fa fa-user\"></i> Envoyer</button>

            ";
        // line 102
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
    </div>

    <br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 92
    public function block_captcha_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "captcha_widget"));

        // line 93
        echo "                ";
        ob_start();
        // line 94
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "captcha", []), 'widget', ["attr" => ["placeholder" => " Saisissez le captcha"]]);
        echo "
                    ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "captcha", []), 'errors');
        echo "
                ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 97
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 97,  243 => 95,  238 => 94,  235 => 93,  229 => 92,  214 => 102,  208 => 98,  206 => 92,  199 => 88,  192 => 84,  178 => 73,  171 => 69,  164 => 65,  157 => 61,  150 => 57,  143 => 53,  136 => 49,  129 => 45,  121 => 40,  113 => 35,  109 => 34,  101 => 28,  95 => 24,  93 => 23,  80 => 13,  70 => 7,  64 => 6,  53 => 3,  47 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'FrontendBundle::base.html.twig' %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"https://malsup.github.com/jquery.form.js\"></script>
{% endblock %}
{% block body %}
    <input type=\"text\" value=\"{{ cp }}\" id=\"cp\" style=\"display: none;\">
    <div class=\"container\">

    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"{{ path('homepage_frontend') }}\">Accueil</a></li>
                <li class=\"active\"> Nous contacter</li>
            </ul>
        </div>
    </div>
<br><br>
    <div class=\"row\">
<br><br>
    <div class=\"col-lg-12\">
   <center>
       {% if done == 1 %}
       <div class=\"alert alert-success\" role=\"alert\">
           <strong>Merci</strong> votre message a été envoyé avec succès.
       </div>
       {% endif %}
       <h1 class=\"section-title-inner\"><span> VOTRE AVIS NOUS INTÉRESSE</span></h1>
    <h3 class=\"section-title-inner\"><span> N'hésitez pas à nous contacter en remplissant le formulaire ci-dessous ou via nos coordonnées en bas de page.</span></h3></center>
    </div>
        <div class='well well-sm col-md-6 col-md-offset-3'>


            {{ form_start(form) }}
            {{ form_errors(form) }}


            <div class=\"form-group\">
                <label>Civilité</label><br>
                {{ form_widget(form.civilite) }}
            </div>

            <div class=\"form-group\">
                <label>Nom</label><br>
                {{ form_widget(form.nom,{\"attr\" : {\"class\":\"form-control\"} }) }}
            </div>
            <div class=\"form-group\">
                <label>Prenom</label><br>
                {{ form_widget(form.prenom,{\"attr\" : {\"class\":\"form-control\"} }) }}
            </div>
            <div class=\"form-group\">
                <label>Adresse</label><br>
                {{ form_widget(form.adresse,{\"attr\" : {\"class\":\"form-control\"} }) }}
            </div>
            <div class=\"form-group\">
                <label>Ville</label><br>
                {{ form_widget(form.ville,{\"attr\" : {\"class\":\"form-control\"} }) }}
            </div>
            <div class=\"form-group\">
                <label>Zone</label><br>
                {{ form_widget(form.zone,{\"attr\" : {\"class\":\"form-control\"} }) }}
            </div>
            <div class=\"form-group\">
                <label>Email <sub> *</sub></label><br>
                {{ form_widget(form.email,{\"attr\" : {\"class\":\"form-control\"} }) }}
            </div>
            <div class=\"form-group\">
                <label>Telephone <sub> *</sub></label><br>
                {{ form_widget(form.tel,{\"attr\" : {\"class\":\"form-control\"} }) }}
            </div>
            <div class=\"form-group\">
                <label>Objet <sub> *</sub></label><br>
                {{ form_widget(form.object,{\"attr\" : {\"class\":\"form-control\"} }) }}
                <!--<select name=\"objet[]\" name=\"objet\"  class=\"form-control\" required multiple>
                    <option value=\"Prix\">Prix </option>
                        <option value=\"Réclamation\">Réclamation </option>
                    <option value=\"Assistance technique\">Assistance technique </option>
                    <option value=\"Formation\">Formation </option>
                    <option value=\"Autre\">Autre </option>
                </select>-->
            </div>
            <div class=\"form-group\">
                <label>Sujet<sub> *</sub></label><br>
                {{ form_widget(form.sujet,{\"attr\" : {\"class\":\"form-control\"} }) }}
            </div>
            <div class=\"form-group\">
                <label>Message</label><br>
                {{ form_widget(form.message,{\"attr\" : {\"class\":\"form-control\"} }) }}
            </div>
            <div class=\"form-group\">
                <label>Captcha <sub> *</sub></label><br>
            {% block captcha_widget %}
                {% spaceless %}
                    {{ form_widget(form.captcha,{\"attr\" : {\"placeholder\":\" Saisissez le captcha\"} }) }}
                    {{ form_errors(form.captcha) }}
                {% endspaceless %}
            {% endblock %}
            </div>

            <button class=\"btn btn-primary\"  type=\"submit\"><i class=\"fa fa-user\"></i> Envoyer</button>

            {{ form_end(form) }}

    </div>
    </div>

    <br>

{% endblock body %}", "FrontendBundle:Default:contact.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/Default/contact.html.twig");
    }
}
