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

/* BackendBundle:admin/user:edit.html.twig */
class __TwigTemplate_aa125748079b9faae4464546d2f8258aacc2b587ab8395a17fd55997478ca3c1 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:admin/user:edit.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "BackendBundle:admin/user:edit.html.twig", 1);
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
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <h4 class=\"example-title\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modifier Utilisateur"), "html", null, true);
        echo " </h4>
                                <br><br>
                                <div class=\"row row-lg\">


                                    ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "col-lg-12 "]]);
        echo "
                                    ";
        // line 34
        echo "
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("email"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <span class=\"error\" style=\"color: #ed0000\">";
        // line 42
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
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tel"), "html", null, true);
        echo " :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <span class=\"error\" style=\"color: #ed0000\">";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'errors');
        echo "</span>

                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mot de passe"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">

                                                ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <span class=\"error\"> ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("passwordpattern", [], "messages"), "html", null, true);
        echo " </span>
                                                <span class=\"error\" style=\"color: #ed0000\">";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'errors');
        echo "</span>


                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("repeter le mot de passe"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <span class=\"error\" style=\"color: #ed0000\">";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'errors');
        echo "</span>

                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12 text-center\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pays"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-3 text-left\">
                                                ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"row col-lg-12 text-center\">
                                        <div class=\"col-lg-6 text-right\">
                                            <button class=\"btn social-evernote  waves-effect waves-classic\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "</button>
                                        </div>
                                        <div class=\"col-lg-6 text-left\">
                                            <a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</a>
                                        </div>
                                    </div>


                                    ";
        // line 113
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
        return "BackendBundle:admin/user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 113,  197 => 108,  191 => 105,  180 => 97,  174 => 94,  162 => 85,  158 => 84,  152 => 81,  139 => 71,  135 => 70,  131 => 69,  124 => 65,  112 => 56,  108 => 55,  102 => 52,  89 => 42,  85 => 41,  79 => 38,  73 => 34,  69 => 18,  61 => 13,  51 => 5,  45 => 4,  29 => 1,);
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
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <h4 class=\"example-title\">{{ \"Modifier Utilisateur\"|trans }} </h4>
                                <br><br>
                                <div class=\"row row-lg\">


                                    {{ form_start(form, {'attr': {'class': 'col-lg-12 '}}) }}
                                    {#
                                           <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"nom utilisateur\"|trans }}<span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}

                                            </div>
                                        </div>
                                    </div>
                                                                        <br><br>

                                    #}

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"email\"|trans }}<span style=\"color: #ED0000\">*</span>:</label>
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
                                                <label>{{ \"tel\"|trans }} :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.tel, {'attr': {'class': 'form-control'}}) }}
                                                <span class=\"error\" style=\"color: #ed0000\">{{ form_errors(form.tel) }}</span>

                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"mot de passe\"|trans }}<span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">

                                                {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control' }}) }}
                                                <span class=\"error\"> {{\"passwordpattern\"|trans({}, 'messages') }} </span>
                                                <span class=\"error\" style=\"color: #ed0000\">{{ form_errors(form.plainPassword.first) }}</span>


                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"repeter le mot de passe\"|trans }}<span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control'}}) }}
                                                <span class=\"error\" style=\"color: #ed0000\">{{ form_errors(form.plainPassword.second) }}</span>

                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12 text-center\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"pays\"|trans }}<span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-3 text-left\">
                                                {{ form_widget(form.pays, {'attr': {'class': 'form-control'}}) }}

                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"row col-lg-12 text-center\">
                                        <div class=\"col-lg-6 text-right\">
                                            <button class=\"btn social-evernote  waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>
                                        </div>
                                        <div class=\"col-lg-6 text-left\">
                                            <a href=\"{{ path('user_index') }}\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">{{ 'back'|trans }}</a>
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

", "BackendBundle:admin/user:edit.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/admin/user/edit.html.twig");
    }
}
