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

/* BackendBundle:gestionnaire/souscategorie:new.html.twig */
class __TwigTemplate_2564b453f63117b75065feda7b578775e774a0709e0eaf3241ef78adbce4271a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'page' => [$this, 'block_page'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:gestionnaire/souscategorie:new.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "BackendBundle:gestionnaire/souscategorie:new.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nouvelle Sous Catégorie"), "html", null, true);
        echo "</h1>
        </div>
        ";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 10
            echo "            <div class=\"col-lg-12 text-center\">
                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                    ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cat_exist", [], "messages"), "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        // line 19
        echo "        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <div class=\"row row-lg\">


                                    ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "col-lg-12 "]]);
        echo "
                                    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "headers", []), "get", [0 => "referer"], "method"), "html", null, true);
        echo "\"/>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 37
        if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
            // line 38
            echo "                                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "

                                                ";
        } else {
            // line 41
            echo "                                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom_en", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "


                                                ";
        }
        // line 45
        echo "                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-xxl-8 col-lg-8\">

                                                ";
        // line 56
        if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
            // line 57
            echo "                                                    <h6 style=\"color: #ED0000\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'errors');
            echo "</h6>

                                                ";
        } else {
            // line 60
            echo "                                                    <h6 style=\"color: #ED0000\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom_en", []), 'errors');
            echo "</h6>


                                                ";
        }
        // line 64
        echo "

                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span>  :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image"), "html", null, true);
        echo "  :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imagefile", []), 'widget', ["attr" => ["id" => "input-file-now", "data-plugin" => "dropify", "data-default-file" => "", "style" => "max-height: 100px;max-width:300px"]]);
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    ";
        // line 98
        echo "

                                    <div class=\"col-lg-12 text-center\">

                                        <div class=\"row\">
                                            <div class=\"col-lg-6 text-right\">
                                                <button class=\"btn md-edit social-evernote  waves-effect waves-classic\">";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "</button>

                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                <a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_index");
        echo "\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</a>
                                            </div>
                                        </div>
                                    </div>
                                    ";
        // line 112
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

                                    <br>
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

    public function getTemplateName()
    {
        return "BackendBundle:gestionnaire/souscategorie:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 112,  209 => 108,  202 => 104,  194 => 98,  186 => 87,  180 => 84,  169 => 76,  163 => 73,  152 => 64,  144 => 60,  137 => 57,  135 => 56,  122 => 45,  114 => 41,  107 => 38,  105 => 37,  99 => 34,  92 => 30,  88 => 29,  76 => 19,  69 => 15,  62 => 10,  60 => 9,  55 => 7,  51 => 5,  45 => 4,  29 => 1,);
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
            <h1 class=\"page-title\">{{\"Nouvelle Sous Catégorie\"|trans}}</h1>
        </div>
        {% if error is defined %}
            <div class=\"col-lg-12 text-center\">
                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                    {{ \"cat_exist\"|trans({}, 'messages') }}
                </div>
            </div>
        {% endif %}
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <div class=\"row row-lg\">


                                    {{ form_start(form, {'attr': {'class': 'col-lg-12 '}}) }}
                                    <input type=\"hidden\" name=\"referer\" value=\"{{app.request.headers.get('referer')}}\"/>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Nom\"|trans }} <span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {% if  pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                    {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}

                                                {% else %}
                                                    {{ form_widget(form.nom_en, {'attr': {'class': 'form-control'}}) }}


                                                {% endif %}
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-xxl-8 col-lg-8\">

                                                {% if  pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                    <h6 style=\"color: #ED0000\">{{ form_errors(form.nom) }}</h6>

                                                {% else %}
                                                    <h6 style=\"color: #ED0000\">{{ form_errors(form.nom_en) }}</h6>


                                                {% endif %}


                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{\"Category\"|trans}} <span style=\"color: #ED0000\">*</span>  :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Image\"|trans }}  :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.imagefile, {'attr': {'id': 'input-file-now', 'data-plugin':'dropify','data-default-file': '','style' : 'max-height: 100px;max-width:300px'}}) }}
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    {#
                                         <div class=\"col-lg-12 text-center\">
                                        <button class=\"float-right btn md-edit social-evernote waves-effect waves-classic waves-effect waves-classic waves-effect waves-classic\">
                                            {{ 'Enregistrer'|trans }}</button>
                                    </div>
                                    #}


                                    <div class=\"col-lg-12 text-center\">

                                        <div class=\"row\">
                                            <div class=\"col-lg-6 text-right\">
                                                <button class=\"btn md-edit social-evernote  waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>

                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                <a href=\"{{ path('sous_categorie_index') }}\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">{{ 'back'|trans }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    {{ form_end(form) }}

                                    <br>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



{% endblock %}
", "BackendBundle:gestionnaire/souscategorie:new.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/gestionnaire/souscategorie/new.html.twig");
    }
}
