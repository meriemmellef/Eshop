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

/* @Backend/admin/user/new.html.twig */
class __TwigTemplate_f67e61ca5b2287d9529356eee5231dd845461c9b4e91a88d674a3ed95b038eec extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/admin/user/new.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/admin/user/new.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nouveau_manager"), "html", null, true);
        echo " </h4>
                                <br><br>
                                <div class=\"row row-lg\">


                                    ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "col-lg-12 "]]);
        echo "
                                    ";
        // line 33
        echo "
                                    <br><br>
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
                                                <span class=\"text-danger\" style=\"color: #ed0000\">";
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
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tel"), "html", null, true);
        echo ":</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <span class=\"text-danger\" style=\"color: #ed0000\">";
        // line 57
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
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mot de passe"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "form-control", "pattern" => ".{8,}"]]);
        echo "
                                                <span class=\"error\"> ";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("passwordpattern", [], "messages"), "html", null, true);
        echo " </span>
                                                <span class=\"text-danger\" style=\"color: #ed0000\">";
        // line 72
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
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("repeter le mot de passe"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "form-control", "pattern" => ".{8,}"]]);
        echo "
                                                <span class=\"text-danger\" style=\"color: #ed0000\">";
        // line 86
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
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pays"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-3 text-left\">
                                                ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    ";
        // line 109
        echo "


                                    <div class=\"row col-lg-12 text-center\">
                                        <div class=\"col-lg-6 text-right\">
                                            <button class=\"btn social-evernote  waves-effect waves-classic\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "</button>
                                        </div>
                                        <div class=\"col-lg-6 text-left\">
                                            <a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</a>
                                        </div>
                                    </div>
                                    ";
        // line 120
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
        return "@Backend/admin/user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 120,  204 => 117,  198 => 114,  191 => 109,  182 => 98,  176 => 95,  164 => 86,  160 => 85,  154 => 82,  141 => 72,  137 => 71,  133 => 70,  127 => 67,  114 => 57,  110 => 56,  104 => 53,  90 => 42,  86 => 41,  80 => 38,  73 => 33,  69 => 18,  61 => 13,  51 => 5,  45 => 4,  29 => 1,);
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
                                <h4 class=\"example-title\">{{ \"Nouveau_manager\"|trans }} </h4>
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
                                    #}

                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"email\"|trans }}<span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                                                <span class=\"text-danger\" style=\"color: #ed0000\">{{ form_errors(form.email) }}</span>

                                            </div>
                                        </div>
                                    </div>
                                    <br><br>


                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"tel\"|trans }}:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.tel, {'attr': {'class': 'form-control'}}) }}
                                                <span class=\"text-danger\" style=\"color: #ed0000\">{{ form_errors(form.tel) }}</span>

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
                                                {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control' ,'pattern': '.{8,}'}}) }}
                                                <span class=\"error\"> {{\"passwordpattern\"|trans({}, 'messages') }} </span>
                                                <span class=\"text-danger\" style=\"color: #ed0000\">{{ form_errors(form.plainPassword.first) }}</span>

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
                                                {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control','pattern': '.{8,}'}}) }}
                                                <span class=\"text-danger\" style=\"color: #ed0000\">{{ form_errors(form.plainPassword.second) }}</span>

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
                                    {#
                                     <div class=\"col-lg-12 text-center\">
                                        <button class=\"btn social-evernote  waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>
                                    </div>
                                    #}



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
", "@Backend/admin/user/new.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\admin\\user\\new.html.twig");
    }
}
