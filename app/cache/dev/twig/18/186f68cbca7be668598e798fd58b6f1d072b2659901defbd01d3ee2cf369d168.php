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

/* @Frontend/Profile/edit.html.twig */
class __TwigTemplate_2c4e1a81bc3307fec113cb059a85439cf258dc9308c2535c6e7a439b5e125c78 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/Profile/edit.html.twig"));

        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), [0 => "FrontendBundle:Form:form_errors.html.twig"]);
        // line 1
        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutBreadcrumps.html.twig", "@Frontend/Profile/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<div class=\"container main-container\"  >
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\"  >


                <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages"), "html", null, true);
        echo "</a></li>
                <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "html", null, true);
        echo "</a></li>
                <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                    ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mesinformations", [], "messages"), "html", null, true);
        echo "</li>
            </ul>

        </div>
    </div>


  <div class=\"col-lg-12 col-md-12 col-sm-12\">
          <div class=\"row userInfo\"   style=\" display: flex;  justify-content: center;  align-items: center;\">


                <form action=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"  method=\"POST\" class=\"fos_user_profile_edit col-lg-6 col-md-12 col-xs-12 col-sm-12\">

                    <div class=\"\">
                        <div class=\"form-group required\">
                            <label class=\"inputtitletxt\" for=\"InputPasswordCurrent\"> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom", [], "messages"), "html", null, true);
        echo " <sup> * </sup> </label>
                            ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'errors');
        echo "
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"inputtitletxt\" for=\"InputPasswordCurrent\"> ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prénom"), "html", null, true);
        echo "  <sup> * </sup> </label>
                            ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'errors');
        echo "
                        </div>

                        <div class=\"form-group\">
                            <label class=\"inputtitletxt\" for=\"InputPasswordCurrent\"> ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléphone", [], "messages"), "html", null, true);
        echo "  <sup> * </sup> </label>
                            ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'errors');
        echo "
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"inputtitletxt\" for=\"InputPasswordnew\"> ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages"), "html", null, true);
        echo "  <sup> * </sup> </label>
                            ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'errors');
        echo "
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"inputtitletxt\" for=\"InputPasswordnewConfirm\"> ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot de passe actuel", [], "messages"), "html", null, true);
        echo " <sup> * </sup> </label>
                            ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", []), 'errors');
        echo "
                        </div>
                        <button type=\"submit\" class=\"btn btn_card\" style=\"margin-top: 15px;margin-bottom: 15px;width: 100%\" >
                            ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mettreàjour"), "html", null, true);
        echo "</button>

                    </div>

                    ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", []), 'widget');
        echo "
                </form>
            </div>
            <!--/row end-->
  </div>





        <!--/row-->
</div>

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
        return "@Frontend/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 63,  167 => 59,  161 => 56,  157 => 55,  153 => 54,  147 => 51,  143 => 50,  139 => 49,  132 => 45,  128 => 44,  124 => 43,  117 => 39,  113 => 38,  109 => 37,  102 => 33,  98 => 32,  94 => 31,  87 => 27,  73 => 16,  66 => 14,  62 => 13,  54 => 7,  48 => 6,  40 => 1,  38 => 3,  29 => 1,);
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


    {% block content %}
<div class=\"container main-container\"  >
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\"  >


                <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">{{ \"Home\"|trans({}, 'messages') }}</a></li>
                <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"{{ path(\"compte\") }}\">{{ app.user }}</a></li>
                <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                    {{ \"Mesinformations\"|trans({}, 'messages') }}</li>
            </ul>

        </div>
    </div>


  <div class=\"col-lg-12 col-md-12 col-sm-12\">
          <div class=\"row userInfo\"   style=\" display: flex;  justify-content: center;  align-items: center;\">


                <form action=\"{{ path('fos_user_profile_edit') }}\"  method=\"POST\" class=\"fos_user_profile_edit col-lg-6 col-md-12 col-xs-12 col-sm-12\">

                    <div class=\"\">
                        <div class=\"form-group required\">
                            <label class=\"inputtitletxt\" for=\"InputPasswordCurrent\"> {{ \"Nom\"|trans({}, 'messages') }} <sup> * </sup> </label>
                            {{ form_widget(form.firstName,{\"attr\" : {\"class\":\"form-control\"} }) }}
                            {{ form_errors(form.firstName) }}
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"inputtitletxt\" for=\"InputPasswordCurrent\"> {{\"Prénom\"|trans}}  <sup> * </sup> </label>
                            {{ form_widget(form.lastName,{\"attr\" : {\"class\":\"form-control\"} }) }}
                            {{ form_errors(form.lastName) }}
                        </div>

                        <div class=\"form-group\">
                            <label class=\"inputtitletxt\" for=\"InputPasswordCurrent\"> {{ \"Téléphone\"|trans({}, 'messages') }}  <sup> * </sup> </label>
                            {{ form_widget(form.tel,{\"attr\" : {\"class\":\"form-control\"} }) }}
                            {{ form_errors(form.tel) }}
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"inputtitletxt\" for=\"InputPasswordnew\"> {{ \"Email\"|trans({}, 'messages') }}  <sup> * </sup> </label>
                            {{ form_widget(form.email,{\"attr\" : {\"class\":\"form-control\"} }) }}
                            {{ form_errors(form.email) }}
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"inputtitletxt\" for=\"InputPasswordnewConfirm\"> {{ \"Mot de passe actuel\"|trans({}, 'messages') }} <sup> * </sup> </label>
                            {{ form_widget(form.current_password,{\"attr\" : {\"class\":\"form-control\"} }) }}
                            {{ form_errors(form.current_password) }}
                        </div>
                        <button type=\"submit\" class=\"btn btn_card\" style=\"margin-top: 15px;margin-bottom: 15px;width: 100%\" >
                            {{\"Mettreàjour\"|trans}}</button>

                    </div>

                    {{ form_widget(form._token) }}
                </form>
            </div>
            <!--/row end-->
  </div>





        <!--/row-->
</div>

        <style>
            .footer{
                visibility: hidden;
            }
        </style>
    {% endblock %}
", "@Frontend/Profile/edit.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
