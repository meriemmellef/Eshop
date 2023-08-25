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

/* @Backend/gestionnaire/gerant/edit.html.twig */
class __TwigTemplate_6e8594f80c8b2b5a4b4f22647b00f66a8b9ddaddba0c4334dc3cbce6a02cb8e9 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gestionnaire/gerant/edit.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/gestionnaire/gerant/edit.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modification Gérant"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <div class=\"row row-lg\">

                                    <div class=\"col-lg-3 text-right\">
                                    </div>
                                    <div class=\"col-lg-6\">
                                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashBag", []), "get", [0 => "emailexistant"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            echo "                                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">×</span>
                                                </button>
                                                ";
            // line 26
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                                    </div>
                                    ";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "col-lg-12 "]]);
        echo "
                                    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "headers", []), "get", [0 => "referer"], "method"), "html", null, true);
        echo "\"/>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prénom"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléphone"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléphone"), "html", null, true);
        echo " 2:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telFacultatif", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    ";
        // line 90
        echo "
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("email"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <span class=\"error\" style=\"color: #ed0000\">";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'errors');
        echo "</span>

                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mot de passe"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <span class=\"error\"> ";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("passwordpattern", [], "messages"), "html", null, true);
        echo " </span>

                                                <span class=\"error\" style=\"color: #ed0000\">";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'errors');
        echo "</span>

                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("repeter le mot de passe"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <span class=\"error\" style=\"color: #ed0000\">";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'errors');
        echo "</span>

                                            </div>


                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12 text-center\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("station"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-3 text-left\">
                                                ";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "station", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                            </div>
                                        </div>
                                    </div>
                                <br><br>

                                    <div class=\"col-lg-12 text-center\">

                                        <div class=\"row\">
                                            <div class=\"col-lg-6 text-right\">
                                                <button class=\"btn md-edit social-evernote  waves-effect waves-classic\">";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "</button>

                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                <a href=\"";
        // line 158
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gerant_index");
        echo "\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</a>
                                            </div>
                                        </div>
                                    </div>



                                    ";
        // line 165
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
        return "@Backend/gestionnaire/gerant/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 165,  279 => 158,  272 => 154,  258 => 143,  252 => 140,  237 => 128,  233 => 127,  227 => 124,  214 => 114,  209 => 112,  205 => 111,  199 => 108,  187 => 99,  183 => 98,  177 => 95,  170 => 90,  163 => 72,  157 => 69,  145 => 60,  139 => 57,  128 => 49,  122 => 46,  111 => 38,  105 => 35,  98 => 31,  94 => 30,  91 => 29,  82 => 26,  76 => 22,  72 => 21,  55 => 7,  51 => 5,  45 => 4,  29 => 1,);
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
            <h1 class=\"page-title\">{{\"Modification Gérant\"|trans}}</h1>
        </div>
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <div class=\"row row-lg\">

                                    <div class=\"col-lg-3 text-right\">
                                    </div>
                                    <div class=\"col-lg-6\">
                                        {% for message in app.session.flashBag.get('emailexistant') %}
                                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">×</span>
                                                </button>
                                                {{ message }}
                                            </div>
                                        {% endfor %}
                                    </div>
                                    {{ form_start(form, {'attr': {'class': 'col-lg-12 '}}) }}
                                    <input type=\"hidden\" name=\"referer\" value=\"{{app.request.headers.get('referer')}}\"/>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Nom\"|trans }} <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.firstName, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{\"Prénom\"|trans}}<span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.lastName, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{\"Téléphone\"|trans}}<span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.tel, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>

                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{\"Téléphone\"|trans}} 2:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.telFacultatif, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>
                                    {#
                                            <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"username\"|trans }} <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}

                                            </div>
                                        </div>
                                    </div>
                                    #}

                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"email\"|trans }} <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                                                <span class=\"error\" style=\"color: #ed0000\">{{ form_errors(form.email) }}</span>

                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"mot de passe\"|trans }} <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control'}}) }}
                                                <span class=\"error\"> {{\"passwordpattern\"|trans({}, 'messages') }} </span>

                                                <span class=\"error\" style=\"color: #ed0000\">{{ form_errors(form.plainPassword.first) }}</span>

                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"repeter le mot de passe\"|trans }} <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control'}}) }}
                                                <span class=\"error\" style=\"color: #ed0000\">{{ form_errors(form.plainPassword.second) }}</span>

                                            </div>


                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12 text-center\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"station\"|trans }}<span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-3 text-left\">
                                                {{ form_widget(form.station, {'attr': {'class': 'form-control'}}) }}

                                            </div>
                                        </div>
                                    </div>
                                <br><br>

                                    <div class=\"col-lg-12 text-center\">

                                        <div class=\"row\">
                                            <div class=\"col-lg-6 text-right\">
                                                <button class=\"btn md-edit social-evernote  waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>

                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                <a href=\"{{ path('gerant_index') }}\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">{{ 'back'|trans }}</a>
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

", "@Backend/gestionnaire/gerant/edit.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gestionnaire\\gerant\\edit.html.twig");
    }
}
