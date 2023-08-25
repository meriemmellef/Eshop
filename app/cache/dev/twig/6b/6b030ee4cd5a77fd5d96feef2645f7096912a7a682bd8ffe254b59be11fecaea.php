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

/* BackendBundle:gestionnaire/station:new.html.twig */
class __TwigTemplate_61358df6373517bd32975988903392e24468339276c17de178ccdf7f6376feb6 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:gestionnaire/station:new.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "BackendBundle:gestionnaire/station:new.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nouvelle Station"), "html", null, true);
        echo " </h1>
        </div>
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <div class=\"row row-lg\">


                                    ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "col-lg-12 "]]);
        echo "
                                    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "headers", []), "get", [0 => "referer"], "method"), "html", null, true);
        echo "\"/>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 \">
                                            </div>
                                            <div class=\"col-lg-3 \">
                                                <label>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-5 text-left\">
                                                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>

                                        </div>
                                    </div>
                                    ";
        // line 62
        echo "
                                    <br>

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 \">
                                            </div>
                                            <div class=\"col-lg-3 \">
                                                <label>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adresse"), "html", null, true);
        echo ":</label>
                                            </div>
                                            <div class=\"col-lg-5 text-left\">
                                                ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 \">
                                            </div>
                                            <div class=\"col-lg-3 \">
                                                <label>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tel"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-5 text-left\">
                                                ";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 \">
                                            </div>
                                            <div class=\"col-lg-3 \">
                                                <label>";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zone"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-5 text-left\">
                                                ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zone", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"col-lg-12\" hidden>
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 \">
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label>";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fichier des conditions générales de vente"), "html", null, true);
        echo " :</label>
                                            </div>
                                            <div class=\"col-lg-5 text-left\">
                                                ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file_vente", []), 'widget');
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    <br>


                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 \">
                                            </div>
                                            <div class=\"col-lg-3\">
                                            </div>
                                            <div class=\"col-lg-5 text-left\">
                                                <div class=\"checkbox-custom checkbox-primary center-block\">
                                                    ";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isActive", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <label for=\"inputChecked\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Est Active"), "html", null, true);
        echo " ?</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <br>
                                    ";
        // line 144
        echo "

                                    <div class=\"col-lg-12 text-center\">

                                        <div class=\"row\">
                                            <div class=\"col-lg-6 text-right\">
                                                <button class=\"btn md-edit social-evernote  waves-effect waves-classic\">";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "</button>

                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                <a href=\"";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("station_index");
        echo "\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</a>
                                            </div>
                                        </div>
                                    </div>
                                    ";
        // line 158
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
        return "BackendBundle:gestionnaire/station:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 158,  221 => 154,  214 => 150,  206 => 144,  195 => 131,  191 => 130,  172 => 114,  166 => 111,  153 => 101,  147 => 98,  133 => 87,  127 => 84,  113 => 73,  107 => 70,  97 => 62,  89 => 29,  83 => 26,  74 => 20,  70 => 19,  55 => 7,  51 => 5,  45 => 4,  29 => 1,);
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
            <h1 class=\"page-title\">{{ \"Nouvelle Station\"|trans }} </h1>
        </div>
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
                                            <div class=\"col-lg-2 \">
                                            </div>
                                            <div class=\"col-lg-3 \">
                                                <label>{{ \"Nom\"|trans }} <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-5 text-left\">
                                                {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                                            </div>

                                        </div>
                                    </div>
                                    {#
                                            <br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 \">
                                            </div>
                                            <div class=\"col-lg-3 \">
                                                <label>{{ \"longitude\"|trans }}:</label>
                                            </div>
                                            <div class=\"col-lg-5 text-left\">
                                                {{ form_widget(form.longitude, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 \">
                                            </div>
                                            <div class=\"col-lg-3 \">
                                                <label>{{ \"latitude\"|trans }}:</label>
                                            </div>
                                            <div class=\"col-lg-5 text-left\">
                                                {{ form_widget(form.latitude, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>
                                    #}

                                    <br>

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 \">
                                            </div>
                                            <div class=\"col-lg-3 \">
                                                <label>{{ \"Adresse\"|trans }}:</label>
                                            </div>
                                            <div class=\"col-lg-5 text-left\">
                                                {{ form_widget(form.adresse, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 \">
                                            </div>
                                            <div class=\"col-lg-3 \">
                                                <label>{{ \"tel\"|trans }} <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-5 text-left\">
                                                {{ form_widget(form.tel, {'attr': {'class': 'form-control'}}) }}

                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 \">
                                            </div>
                                            <div class=\"col-lg-3 \">
                                                <label>{{ \"Zone\"|trans}} <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-5 text-left\">
                                                {{ form_widget(form.zone, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"col-lg-12\" hidden>
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 \">
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label>{{\"Fichier des conditions générales de vente\"|trans}} :</label>
                                            </div>
                                            <div class=\"col-lg-5 text-left\">
                                                {{ form_widget(form.file_vente) }}
                                            </div>
                                        </div>
                                    </div>

                                    <br>


                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 \">
                                            </div>
                                            <div class=\"col-lg-3\">
                                            </div>
                                            <div class=\"col-lg-5 text-left\">
                                                <div class=\"checkbox-custom checkbox-primary center-block\">
                                                    {{ form_widget(form.isActive, {'attr': {'class': 'form-control'}}) }}
                                                    <label for=\"inputChecked\">{{ \"Est Active\"|trans }} ?</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <br>
                                    {#
                                     <div class=\"col-lg-12 text-center\">
                                        <button class=\"float-right  btn md-plus social-evernote waves-effect waves-classic waves-effect waves-classic waves-effect waves-classic\"> {{ 'Enregistrer'|trans }}</button>
                                    </div>
                                    #}


                                    <div class=\"col-lg-12 text-center\">

                                        <div class=\"row\">
                                            <div class=\"col-lg-6 text-right\">
                                                <button class=\"btn md-edit social-evernote  waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>

                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                <a href=\"{{ path('station_index') }}\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">{{ 'back'|trans }}</a>
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
", "BackendBundle:gestionnaire/station:new.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/gestionnaire/station/new.html.twig");
    }
}
