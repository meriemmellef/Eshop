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

/* @Frontend/Registration/register.html.twig */
class __TwigTemplate_4f80d665e7958fe035424bc773f9cdbff1fb5490533ecf7270bf093a32c38eed extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/Registration/register.html.twig"));

        // line 10
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), [0 => "FrontendBundle:Form:form_errors.html.twig"]);
        // line 1
        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutBreadcrumps.html.twig", "@Frontend/Registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\"
          href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "
        <div class=\"container main-container\">

            <div class=\"row\">
                <div class=\"breadcrumbDiv col-lg-12\">
                    <ul class=\"breadcrumb\">

                        <li>
                            <a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\"
                               href=\"/\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "FOSUserBundle"), "html", null, true);
        echo "</a></li>

                        <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                            ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inscription", [], "FOSUserBundle"), "html", null, true);
        echo "
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"row\" style=\" display: flex;  justify-content: center;  align-items: center;\">

                <div class=\"col-lg-6  col-xs-12  col-md-12 col-sm-12\">
                    <h1 class=\"section-title-inner\"><span hidden><i class=\"fa fa-lock\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inscription", [], "FOSUserBundle"), "html", null, true);
        echo "</span></h1>

                    <div class=\"row userInfo\">

                        <div class=\"col-xs-12 col-sm-12\">

                            <form role=\"form\" class=\"logForm \" id=\"myForm\"
                                  action=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"
                                  method=\"post\">
                                ";
        // line 49
        echo "



                                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashBag", []), "get", [0 => "register"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 54
            echo "                                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
                                        ";
            // line 58
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                    </div>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "


                                <div class=\"form-group\">
                                    <label class=\"inputtitletxt\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom", [], "messages"), "html", null, true);
        echo " <sup> * </sup></label>
                                    ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ""]]);
        echo "


                                    <span style=\"color: #ed0000\"> ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", []), 'errors');
        echo "</span>

                                </div>
                                <div class=\"form-group\">
                                    <label class=\"inputtitletxt\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prénom", [], "messages"), "html", null, true);
        echo " <sup> * </sup></label>
                                    ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ""]]);
        echo "

                                    <span style=\"color: #ed0000\"> ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", []), 'errors');
        echo "</span>

                                </div>


                              ";
        // line 89
        echo "


                                <div class=\"form-group\">
                                    <label class=\"inputtitletxt\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléphone", [], "messages"), "html", null, true);
        echo "<sup> * </sup></label>
                                    ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ""]]);
        echo "
                                    <span style=\"color: #ed0000\"> ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'errors');
        echo "</span>

                                </div>
                                <div class=\"form-group\">
                                    <label class=\"inputtitletxt\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages"), "html", null, true);
        echo " <sup> * </sup></label>
                                    ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ""]]);
        echo "
";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'errors');
        echo "
                                  ";
        // line 106
        echo "



                                </div>
                                <div class=\"form-group\">
                                    <label class=\"inputtitletxt\">";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot de passe", [], "messages"), "html", null, true);
        echo " <sup> * </sup></label>
                                    ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => ""]]);
        echo "
                                   ";
        // line 119
        echo "
                                    <span style=\"color: #ed0000\">";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'errors');
        echo "</span>

                                </div>
                                <div class=\"form-group\">
                                    <label class=\"inputtitletxt\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Vérificationfront", [], "messages"), "html", null, true);
        echo " <sup> * </sup></label>
                                    ";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ""]]);
        echo "
                                    <br><br>
                                    <span  style=\"color: #ed0000\">";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'errors');
        echo "</span>

                                </div>
                                ";
        // line 133
        echo "                                <div style=\"\">
                                    <input type=\"checkbox\" class=\"inputtitletxt\" style=\"width: 10%\"
                                           name=\"fos_user_registration_form[accept_pub]\"/>
                                    <label  class=\"inputtitletxt\" style=\"width: 90%\">
                                    ";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("J'accepte de recevoir par email", [], "messages"), "html", null, true);
        echo "</label>
                                </div>


                                <div style=\"\">
                                    <input type=\"checkbox\" class=\"inputtitletxt\" style=\"width: 10%\"  name=\"fos_user_registration_form[accept_pub]\"/>
                                    <label  class=\"inputtitletxt\" style=\"width: 90%\">
                                        ";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("J'accepte de recevoir par sms", [], "messages"), "html", null, true);
        echo "</label>
                                </div>


                                <br> <br>

                                <div class=\"form-group\">

                                    <input type=\"checkbox\" required/>
                                    <label  class=\"inputtitletxt\"> ";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("J'accepte", [], "messages"), "html", null, true);
        echo "</label>
                                    <a href=\"";
        // line 154
        echo twig_escape_filter($this->env, ($context["condition_general_directory"] ?? $this->getContext($context, "condition_general_directory")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "CguFile", []), "html", null, true);
        echo "\" target=\"_blank\"
                                       style=\"color: #ED0000;font-family: Roboto-Regular, sans-serif !important;font-size: 17px\">
                                        ";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("les conditions générales d’utilisation", [], "messages"), "html", null, true);
        echo "</a>

                                </div>
                               ";
        // line 165
        echo "                                <div style=\"display: block;text-align: center;\">
                                    <button class=\"btn  btn_card\" type=\"submit\"     style=\"margin-top: 20px;margin-bottom: 10px;width: 100%\">
                                        ";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valider", [], "messages"), "html", null, true);
        echo "
                                    </button>
                                    <br>
                                    ";
        // line 170
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "MentionLegaleFile", [])) {
            // line 171
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, ($context["legal_notice_directory"] ?? $this->getContext($context, "legal_notice_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "MentionLegaleFile", []), "html", null, true);
            echo "\" target=\"_blank\"
                                           style=\"color: #ED0000;font-family: Roboto-Regular, sans-serif\">";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mentions légales", [], "messages"), "html", null, true);
            echo "</a>
                                    ";
        }
        // line 174
        echo "
                                    <div style=\"display:none;\">";
        // line 175
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "</div>

                                </div>

                            </form>


                        </div>


                    </div>
                    <!--/row end-->

                </div>

            </div>
            <!--/row-->

            ";
        // line 193
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "RappelRgpdText", [])) {
            // line 194
            echo "                <hr>
                <div style=\"margin-bottom: 20px;color: #374649;font-size: 14px;font-family: Roboto-Regular, sans-serif !important;\">
                    ";
            // line 196
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "RappelRgpdText", []), "html", null, true));
            echo "
                    ";
            // line 197
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "PersonelDataFile", [])) {
                // line 198
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, ($context["personal_data_directory"] ?? $this->getContext($context, "personal_data_directory")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "PersonelDataFile", []), "html", null, true);
                echo "\" target=\"_blank\" style=\"font-family: Roboto-Regular, sans-serif;color:#ED0000 \">
                        <br/>   ";
                // line 199
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("La charte données personnelles et cookies", [], "messages"), "html", null, true);
                echo "</a>
                    ";
            }
            // line 201
            echo "
                </div>
            ";
        }
        // line 204
        echo "
            <div style=\"clear:both\"></div>
        </div>
        <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
        <!-- /wrapper -->



        <style>
            .footer{
                visibility: hidden;
            }
        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 219
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 220
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>
    <script>
     jQuery(document).ready(function() {
            \$('.js-datepicker').datepicker();
        });
        \$(function () {
            \$(\"#fos_user_registration_form_date_naissance\").datepicker(
                {
                    format: 'dd/mm/yyyy',
                    startDate: new Date('1940-1-1'),

                }
            );
        });
        jQuery(document).ready(function () {
            \$('.js-datepicker').datepicker({
                format: 'dd/mm/yyyy',
                startDate: new Date('01/01/1975'),
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 220,  400 => 219,  380 => 204,  375 => 201,  370 => 199,  363 => 198,  361 => 197,  357 => 196,  353 => 194,  351 => 193,  330 => 175,  327 => 174,  322 => 172,  315 => 171,  313 => 170,  307 => 167,  303 => 165,  297 => 156,  290 => 154,  286 => 153,  274 => 144,  264 => 137,  258 => 133,  252 => 127,  247 => 125,  243 => 124,  236 => 120,  233 => 119,  229 => 113,  225 => 112,  217 => 106,  213 => 101,  209 => 100,  205 => 99,  198 => 95,  194 => 94,  190 => 93,  184 => 89,  176 => 77,  171 => 75,  167 => 74,  160 => 70,  154 => 67,  150 => 66,  144 => 62,  134 => 58,  128 => 54,  124 => 53,  118 => 49,  113 => 40,  103 => 33,  91 => 24,  85 => 21,  74 => 12,  68 => 11,  56 => 6,  50 => 5,  42 => 1,  40 => 10,  31 => 1,);
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


{% trans_default_domain 'FOSUserBundle' %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\"
          href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
{% endblock stylesheets %}
{% form_theme form  'FrontendBundle:Form:form_errors.html.twig' %}
    {% block content %}

        <div class=\"container main-container\">

            <div class=\"row\">
                <div class=\"breadcrumbDiv col-lg-12\">
                    <ul class=\"breadcrumb\">

                        <li>
                            <a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\"
                               href=\"/\">{{ \"Home\" | trans }}</a></li>

                        <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                            {{ \"Inscription\" | trans }}
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"row\" style=\" display: flex;  justify-content: center;  align-items: center;\">

                <div class=\"col-lg-6  col-xs-12  col-md-12 col-sm-12\">
                    <h1 class=\"section-title-inner\"><span hidden><i class=\"fa fa-lock\"></i> {{ \"Inscription\" | trans }}</span></h1>

                    <div class=\"row userInfo\">

                        <div class=\"col-xs-12 col-sm-12\">

                            <form role=\"form\" class=\"logForm \" id=\"myForm\"
                                  action=\"{{ path('fos_user_registration_register') }}\"
                                  method=\"post\">
                                {#
                                      {% if form.vars.errors is not empty %}
                                    <div class=\"alert alert-danger\" role=\"alert\">
                                        {{ form_errors(form) }}
                                    </div>
                                {% endif %}
                                #}




                                {% for message in  app.session.flashBag.get('register') %}
                                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
                                        {{ message}}
                                    </div>

                                {% endfor %}



                                <div class=\"form-group\">
                                    <label class=\"inputtitletxt\">{{ \"Nom\" | trans({}, 'messages') }} <sup> * </sup></label>
                                    {{ form_widget(form.firstName,{\"attr\" : {\"class\":\"form-control\",\"placeholder\":\"\"} } ) }}


                                    <span style=\"color: #ed0000\"> {{ form_errors(form.firstName) }}</span>

                                </div>
                                <div class=\"form-group\">
                                    <label class=\"inputtitletxt\">{{\"Prénom\" | trans({}, 'messages')}} <sup> * </sup></label>
                                    {{ form_widget(form.lastName,{\"attr\" : {\"class\":\"form-control\",\"placeholder\":\"\"} } ) }}

                                    <span style=\"color: #ed0000\"> {{ form_errors(form.lastName) }}</span>

                                </div>


                              {#
                                   <div class=\"form-group\">
                                    <label class=\"inputtitletxt\">{{ \"Date de naissance\" | trans({}, 'messages') }} <sup> * </sup></label>
                                    {{ form_widget(form.date_naissance ,{\"attr\" : {\"class\":\"form-control \",\"placeholder\":\"Date de naissance\"} } ) }}
                                    {{ form_errors(form.date_naissance) }}
                                </div>
                              #}



                                <div class=\"form-group\">
                                    <label class=\"inputtitletxt\">{{ \"Téléphone\" | trans({}, 'messages') }}<sup> * </sup></label>
                                    {{ form_widget(form.tel,{\"attr\" : {\"class\":\"form-control\",\"placeholder\":\"\"} } ) }}
                                    <span style=\"color: #ed0000\"> {{ form_errors(form.tel) }}</span>

                                </div>
                                <div class=\"form-group\">
                                    <label class=\"inputtitletxt\">{{ \"Email\" | trans({}, 'messages') }} <sup> * </sup></label>
                                    {{ form_widget(form.email,{\"attr\" : {\"class\":\"form-control\",\"placeholder\":\"\"} } ) }}
{{ form_errors(form.email)}}
                                  {#  {%if form_errors(form.email)  %}
                                        <span style=\"color: #ed0000\"> {{\"email.invalid\"|trans({}, 'messages') }} </span>

                                    {%  endif %}#}




                                </div>
                                <div class=\"form-group\">
                                    <label class=\"inputtitletxt\">{{ \"Mot de passe\" | trans({}, 'messages') }} <sup> * </sup></label>
                                    {{ form_widget(form.plainPassword.first,{\"attr\" : {\"class\":\"form-control \",\"placeholder\":\"\"} } ) }}
                                   {#
                                    {{ form_errors(form.plainPassword.first) }}
                                     <span class=\"error\"> {{\"passwordpattern\"|trans({}, 'messages') }} </span>

                                   #}

                                    <span style=\"color: #ed0000\">{{ form_errors(form.plainPassword.first) }}</span>

                                </div>
                                <div class=\"form-group\">
                                    <label class=\"inputtitletxt\">{{\"Vérificationfront\" | trans({}, 'messages')}} <sup> * </sup></label>
                                    {{ form_widget(form.plainPassword.second,{\"attr\" : {\"class\":\"form-control\",\"placeholder\":\"\"} } ) }}
                                    <br><br>
                                    <span  style=\"color: #ed0000\">{{ form_errors(form.plainPassword.second) }}</span>

                                </div>
                                {#
                                 <img hidden src=\"/interdiction.png\" style=\"margin-bottom: 10px;width: 100%\">
                                #}
                                <div style=\"\">
                                    <input type=\"checkbox\" class=\"inputtitletxt\" style=\"width: 10%\"
                                           name=\"fos_user_registration_form[accept_pub]\"/>
                                    <label  class=\"inputtitletxt\" style=\"width: 90%\">
                                    {{\"J'accepte de recevoir par email\" | trans({}, 'messages')}}</label>
                                </div>


                                <div style=\"\">
                                    <input type=\"checkbox\" class=\"inputtitletxt\" style=\"width: 10%\"  name=\"fos_user_registration_form[accept_pub]\"/>
                                    <label  class=\"inputtitletxt\" style=\"width: 90%\">
                                        {{\"J'accepte de recevoir par sms\" | trans({}, 'messages')}}</label>
                                </div>


                                <br> <br>

                                <div class=\"form-group\">

                                    <input type=\"checkbox\" required/>
                                    <label  class=\"inputtitletxt\"> {{ \"J'accepte\" | trans({}, 'messages')}}</label>
                                    <a href=\"{{ condition_general_directory }}/{{ app.session.get('pays').CguFile }}\" target=\"_blank\"
                                       style=\"color: #ED0000;font-family: Roboto-Regular, sans-serif !important;font-size: 17px\">
                                        {{\"les conditions générales d’utilisation\" | trans({}, 'messages')}}</a>

                                </div>
                               {# <div class=\"input-group\" style=\"padding-top: 14px;padding-bottom: 5px;\">
                                    <div class=\"g-recaptcha\" data-sitekey=\"6LedckodAAAAAAE-j3jaEd9gBOEFaaM7xxW3FKN0\"></div>
                                                   <script type=\"text/javascript\"
                                            src=\"https://www.google.com/recaptcha/api.js?hl=en\">
                                    </script>
                                </div>#}
                                <div style=\"display: block;text-align: center;\">
                                    <button class=\"btn  btn_card\" type=\"submit\"     style=\"margin-top: 20px;margin-bottom: 10px;width: 100%\">
                                        {{ \"Valider\"|trans({}, 'messages') }}
                                    </button>
                                    <br>
                                    {% if  app.session.get(\"pays\").MentionLegaleFile %}
                                    <a href=\"{{ legal_notice_directory }}/{{ app.session.get(\"pays\").MentionLegaleFile }}\" target=\"_blank\"
                                           style=\"color: #ED0000;font-family: Roboto-Regular, sans-serif\">{{\"Mentions légales\" | trans({}, 'messages')}}</a>
                                    {% endif %}

                                    <div style=\"display:none;\">{{ form_rest(form) }}</div>

                                </div>

                            </form>


                        </div>


                    </div>
                    <!--/row end-->

                </div>

            </div>
            <!--/row-->

            {% if app.session.get(\"pays\").RappelRgpdText %}
                <hr>
                <div style=\"margin-bottom: 20px;color: #374649;font-size: 14px;font-family: Roboto-Regular, sans-serif !important;\">
                    {{ app.session.get(\"pays\").RappelRgpdText | nl2br }}
                    {% if app.session.get(\"pays\").PersonelDataFile %}
                    <a href=\"{{ personal_data_directory }}/{{ app.session.get('pays').PersonelDataFile }}\" target=\"_blank\" style=\"font-family: Roboto-Regular, sans-serif;color:#ED0000 \">
                        <br/>   {{\"La charte données personnelles et cookies\" | trans({}, 'messages')}}</a>
                    {% endif %}

                </div>
            {% endif %}

            <div style=\"clear:both\"></div>
        </div>
        <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
        <!-- /wrapper -->



        <style>
            .footer{
                visibility: hidden;
            }
        </style>
    {% endblock content %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>
    <script>
     jQuery(document).ready(function() {
            \$('.js-datepicker').datepicker();
        });
        \$(function () {
            \$(\"#fos_user_registration_form_date_naissance\").datepicker(
                {
                    format: 'dd/mm/yyyy',
                    startDate: new Date('1940-1-1'),

                }
            );
        });
        jQuery(document).ready(function () {
            \$('.js-datepicker').datepicker({
                format: 'dd/mm/yyyy',
                startDate: new Date('01/01/1975'),
            });
        });
    </script>
{% endblock javascripts %}
", "@Frontend/Registration/register.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
