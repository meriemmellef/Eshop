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

/* FrontendBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_b3b332eb8ae05347777b1b0f8d6b79e9b777ed54d2481106f6b49d174fd966f4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'breadcrump' => [$this, 'block_breadcrump'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "FrontendBundle:Layouts:layoutBreadcrumps.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:ChangePassword:changePassword.html.twig"));

        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), [0 => "FrontendBundle:Form:form_errors.html.twig"]);
        // line 1
        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutBreadcrumps.html.twig", "FrontendBundle:ChangePassword:changePassword.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_breadcrump($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrump"));

        // line 6
        echo "
        <div class=\"row\" style=\"margin-top: 15px\">
            <div class=\"breadcrumbDiv col-lg-12\">
                <ul class=\"breadcrumb\">

                    <li>  <a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\"   href=\"/\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acceuil"), "html", null, true);
        echo "</a></li>
                    <li>  <a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\"   href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "firstName", []), "html", null, true);
        echo "</a></li>

                    <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changer mot de passe"), "html", null, true);
        echo "
                    </li>
                </ul>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12\">

                <div class=\"row userInfo\">


                    <h3 class=\"section-title style2  text-center\">
                        <span style=\"background-color: #F7F9FA; font-size:25px !important; \">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changer mot de passe"), "html", null, true);
        echo " </span>
                    </h3>

                    <form action=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\" style=\" display: flex;  justify-content: center;  align-items: center;\">


                            ";
        // line 36
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "errors", []))) {
            // line 37
            echo "                                <div class=\"alert alert-danger\" role=\"alert\">
                                    ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 41
        echo "

                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group required\">
                                    <label class=\"inputtitletxt\" for=\"InputPasswordCurrent\"> ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot de passe actuel"), "html", null, true);
        echo "  <sup> * </sup> </label>
                                    ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", []), 'errors');
        echo "
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"inputtitletxt\" for=\"InputPasswordnew\"> ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nouveau mot de passe"), "html", null, true);
        echo "  <sup> * </sup> </label>
                                    ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", []), "first", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", []), "first", []), 'errors');
        echo "
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"inputtitletxt\" for=\"InputPasswordnewConfirm\"> ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Vérificationfront"), "html", null, true);
        echo "   <sup> * </sup> </label>
                                    ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", []), "second", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", []), "second", []), 'errors');
        echo "
                                </div>

                                <button type=\"submit\" class=\"btn  btn_card\" style=\"width: 100%\"> ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modifier le mot de passe"), "html", null, true);
        echo "</button>

                            </div>

                            ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
                    </form>
                </div>
                <!--/row end-->

            </div>
        </div>
        <!--/row-->

        <style>
            .footer{
                visibility: hidden;
            }
        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 64,  175 => 60,  169 => 57,  165 => 56,  161 => 55,  155 => 52,  151 => 51,  147 => 50,  141 => 47,  137 => 46,  133 => 45,  127 => 41,  121 => 38,  118 => 37,  116 => 36,  108 => 33,  102 => 30,  92 => 22,  86 => 21,  73 => 14,  66 => 12,  62 => 11,  55 => 6,  49 => 5,  41 => 1,  39 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'FrontendBundle:Layouts:layoutBreadcrumps.html.twig' %}

{% form_theme form  'FrontendBundle:Form:form_errors.html.twig' %}

    {% block breadcrump %}

        <div class=\"row\" style=\"margin-top: 15px\">
            <div class=\"breadcrumbDiv col-lg-12\">
                <ul class=\"breadcrumb\">

                    <li>  <a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\"   href=\"/\">{{ \"Acceuil\"|trans }}</a></li>
                    <li>  <a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\"   href=\"{{ path(\"compte\") }}\">{{ app.user.firstName }}</a></li>

                    <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">{{ \"Changer mot de passe\"|trans }}
                    </li>
                </ul>
            </div>
        </div>
    {% endblock breadcrump %}

    {% block content %}

        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12\">

                <div class=\"row userInfo\">


                    <h3 class=\"section-title style2  text-center\">
                        <span style=\"background-color: #F7F9FA; font-size:25px !important; \">{{ \"Changer mot de passe\"|trans }} </span>
                    </h3>

                    <form action=\"{{ path('fos_user_change_password') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_change_password\" style=\" display: flex;  justify-content: center;  align-items: center;\">


                            {% if form.vars.errors is not empty %}
                                <div class=\"alert alert-danger\" role=\"alert\">
                                    {{ form_errors(form) }}
                                </div>
                            {%  endif %}


                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group required\">
                                    <label class=\"inputtitletxt\" for=\"InputPasswordCurrent\"> {{ \"Mot de passe actuel\"|trans}}  <sup> * </sup> </label>
                                    {{ form_widget(form.current_password,{\"attr\" : {\"class\":\"form-control\"} }) }}
                                    {{ form_errors(form.current_password) }}
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"inputtitletxt\" for=\"InputPasswordnew\"> {{ \"Nouveau mot de passe\"|trans}}  <sup> * </sup> </label>
                                    {{ form_widget(form.new.first,{\"attr\" : {\"class\":\"form-control\"} }) }}
                                    {{ form_errors(form.new.first) }}
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"inputtitletxt\" for=\"InputPasswordnewConfirm\"> {{\"Vérificationfront\"|trans}}   <sup> * </sup> </label>
                                    {{ form_widget(form.new.second,{\"attr\" : {\"class\":\"form-control\"} }) }}
                                    {{ form_errors(form.new.second) }}
                                </div>

                                <button type=\"submit\" class=\"btn  btn_card\" style=\"width: 100%\"> {{ \"Modifier le mot de passe\"|trans }}</button>

                            </div>

                            {{ form_rest(form) }}
                    </form>
                </div>
                <!--/row end-->

            </div>
        </div>
        <!--/row-->

        <style>
            .footer{
                visibility: hidden;
            }
        </style>
    {% endblock %}
", "FrontendBundle:ChangePassword:changePassword.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
