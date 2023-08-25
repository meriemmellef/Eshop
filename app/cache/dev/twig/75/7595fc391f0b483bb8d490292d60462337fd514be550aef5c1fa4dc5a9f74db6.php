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

/* @Frontend/Profile/compte.html.twig */
class __TwigTemplate_366e33d8ea8e0e1e3ea5a9f1c326aacc5aabf8d84c163ab2cb4293f9b7bf1459 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/Profile/compte.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutBreadcrumps.html.twig", "@Frontend/Profile/compte.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_breadcrump($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrump"));

        // line 5
        echo "       <div class=\"row\" style=\"margin-right: 2%;margin-left: 2%\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">

                <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages"), "html", null, true);
        echo "</a></li>
                <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "html", null, true);
        echo "</a></li>

                <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mon Compte", [], "messages"), "html", null, true);
        echo "</li>
            </ul>
        </div>
    </div>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashBag", []), "all", []));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 18
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 19
                echo "                <div class=\"alert ";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], [], "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "
            <div class=\"col-lg-12 col-md-12 col-sm-12\">

                <div class=\"row userInfo\">
                    <div class=\"col-lg-9 col-md-9 col-xs-12 col-sm-12\">

                        <span hidden class=\"titre_7_menu\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bienvenue_sur_votre_compte", [], "messages"), "html", null, true);
        echo "</span>


                        <ul class=\"myAccountList row float-right  hidden-xs\">

                            <li class=\"col-lg-3 col-md-4 col-sm-6 col-xs-6   \" style=\"text-align: -webkit-center;display: inline-block;margin-bottom: 20px \" >
                                <div class=\" \" style=\"height: 180px;width:180px;background: #F7F9FA;border-radius: 18px;\">
                                    <a title=\"Orders\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture");
        echo "\" style=\"height: 30%; display: block; margin: 0 auto;\" >
                                    </a>
                                    <a title=\"Orders\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture");
        echo "\" style=\"height: 50%; display: block; margin: 0 auto;\" >
                                        <i  style=\"color: #ed0000 \"  class=\"fa fa-cube\"></i>
                                         </a>

                                    <a title=\"Orders\" href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture");
        echo "\"  >
                                        ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mes Commandes", [], "messages"), "html", null, true);
        echo "   </a>
                                </div>
                            </li>
                            <li class=\"col-lg-3 col-md-4 col-sm-6 col-xs-6  \" style=\"text-align: -webkit-center;display: inline-block;margin-bottom: 20px \">
                                <div class=\"\" style=\"height: 180px;width:180px;background: #F7F9FA;border-radius: 18px\">
                                    <a title=\"Orders\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris");
        echo "\" style=\"height: 30%; display: block; margin: 0 auto;\">
                                          </a>
                                    <a title=\"Orders\" href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris");
        echo "\" style=\"height: 50%; display: block; margin: 0 auto;\">
                                        <i  style=\"color: #ed0000\" class=\"fa fa-star\"></i>  </a>

                                    <a title=\"Orders\" href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris");
        echo "\" >
                                     ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mes Favoris", [], "messages"), "html", null, true);
        echo " </a>


                                </div>
                            </li>
                            <li class=\"col-lg-3 col-md-4 col-sm-6 col-xs-6  \" style=\"text-align: -webkit-center;display: inline-block;margin-bottom: 20px \">
                                <div class=\"\" style=\"height: 180px;width:180px;background: #F7F9FA;border-radius: 18px\">
                                    <a title=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mesinformations", [], "messages"), "html", null, true);
        echo "\"    href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" style=\"height: 30%; display: block; margin: 0 auto;\">
                                    </a>
                                    <a title=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mesinformations", [], "messages"), "html", null, true);
        echo "\"    href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" style=\"height: 50%; display: block; margin: 0 auto;\"><i  style=\"color: #ed0000\" class=\"fa fa-user\"></i>
                                    </a>
                                    <a title=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mesinformations", [], "messages"), "html", null, true);
        echo "\"    href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" >
                                    ";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mesinformations", [], "messages"), "html", null, true);
        echo "</a></div>
                            </li>
                            <li class=\"col-lg-3 col-md-4 col-sm-6 col-xs-6  \" style=\"text-align: -webkit-center;display: inline-block;margin-bottom: 20px \">
                                <div class=\"\" style=\"height: 180px;width:180px;background: #F7F9FA;border-radius: 18px\">
                                    <a  title=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changer mon mot de passe", [], "messages"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" style=\"height: 25%; display: block; margin: 0 auto;\">
                                        </a>
                                    <a  title=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changer mon mot de passe", [], "messages"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" style=\"height: 50%; display: block; margin: 0 auto;\"> <i
                                                style=\"color: #ed0000\"   class=\"fa fa-edit\"> </i> </a>
                                    <a style=\"padding-right: 10px;padding-left: 10px\" title=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changer mon mot de passe", [], "messages"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" >
                                     ";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changer mon mot de passe", [], "messages"), "html", null, true);
        echo "</a>

                                </div>
                            </li>


                            ";
        // line 92
        echo "                        </ul>
                        <ul class=\"myAccountList row float-right hidden-lg hidden-md hidden-sm\">

                            <li class=\"col-xs-6 \" style=\"text-align: -webkit-center;display: inline-block;margin-bottom: 20px \" >
                                <div class=\" \" style=\"height: 180px;border-radius: 18px;background: #F7F9FA;\">
                                    <a title=\"Orders\" href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture");
        echo "\" style=\"height: 30%; display: block; margin: 0 auto;\" >
                                    </a>
                                    <a title=\"Orders\" href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture");
        echo "\" style=\"height: 50%; display: block; margin: 0 auto;\" >
                                        <i  style=\"color: #ed0000 \"  class=\"fa fa-cube\"></i>
                                    </a>

                                    <a title=\"Orders\" href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture");
        echo "\"  >
                                        ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mes Commandes", [], "messages"), "html", null, true);
        echo "   </a>
                                </div>
                            </li>
                            <li class=\"col-xs-6  \" style=\"text-align: -webkit-center;display: inline-block;margin-bottom: 20px \">
                                <div class=\"\" style=\"height: 180px;background: #F7F9FA;border-radius: 18px\">
                                    <a title=\"Orders\" href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris");
        echo "\" style=\"height: 30%; display: block; margin: 0 auto;\">
                                    </a>
                                    <a title=\"Orders\" href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris");
        echo "\" style=\"height: 50%; display: block; margin: 0 auto;\">
                                        <i  style=\"color: #ed0000\" class=\"fa fa-star\"></i>  </a>

                                    <a title=\"Orders\" href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris");
        echo "\" >
                                        ";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mes Favoris", [], "messages"), "html", null, true);
        echo " </a>


                                </div>
                            </li>
                            <li class=\"col-xs-6  \" style=\"text-align: -webkit-center;display: inline-block;margin-bottom: 20px \">
                                <div class=\"\" style=\"height: 180px;background: #F7F9FA;border-radius: 18px\">
                                    <a title=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mesinformations", [], "messages"), "html", null, true);
        echo "\"    href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" style=\"height: 30%; display: block; margin: 0 auto;\">
                                    </a>
                                    <a title=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mesinformations", [], "messages"), "html", null, true);
        echo "\"    href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" style=\"height: 50%; display: block; margin: 0 auto;\"><i  style=\"color: #ed0000\" class=\"fa fa-user\"></i>
                                    </a>
                                    <a title=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mesinformations", [], "messages"), "html", null, true);
        echo "\"    href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" >
                                        ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mesinformations", [], "messages"), "html", null, true);
        echo "</a></div>
                            </li>
                            <li class=\" col-xs-6  \" style=\"text-align: -webkit-center;display: inline-block;margin-bottom: 20px \">
                                <div class=\"\" style=\"height: 180px;background: #F7F9FA;border-radius: 18px\">
                                    <a  title=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changer mon mot de passe", [], "messages"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" style=\"height: 25%; display: block; margin: 0 auto;\">
                                    </a>
                                    <a  title=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changer mon mot de passe", [], "messages"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" style=\"height: 50%; display: block; margin: 0 auto;\"> <i
                                                style=\"color: #ed0000\"   class=\"fa fa-edit\"> </i> </a>
                                    <a style=\"padding-right: 10px;padding-left: 10px\" title=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changer mon mot de passe", [], "messages"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" >
                                        ";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changer mon mot de passe", [], "messages"), "html", null, true);
        echo "</a>

                                </div>
                            </li>

                            ";
        // line 149
        echo "                        </ul>


                    </div>
                </div>
                <!--/row end-->

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
        return "@Frontend/Profile/compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 149,  343 => 136,  337 => 135,  330 => 133,  323 => 131,  316 => 127,  310 => 126,  303 => 124,  296 => 122,  286 => 115,  282 => 114,  276 => 111,  271 => 109,  263 => 104,  259 => 103,  252 => 99,  247 => 97,  240 => 92,  231 => 78,  225 => 77,  218 => 75,  211 => 73,  204 => 69,  198 => 68,  191 => 66,  184 => 64,  174 => 57,  170 => 56,  164 => 53,  159 => 51,  151 => 46,  147 => 45,  140 => 41,  135 => 39,  125 => 32,  117 => 26,  111 => 25,  104 => 24,  98 => 23,  89 => 20,  84 => 19,  79 => 18,  75 => 17,  68 => 13,  62 => 10,  58 => 9,  52 => 5,  46 => 4,  30 => 1,);
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


    {% block breadcrump %}
       <div class=\"row\" style=\"margin-right: 2%;margin-left: 2%\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">

                <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">{{ \"Home\"|trans({}, 'messages') }}</a></li>
                <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">{{ app.user }}</a></li>

                <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                    {{ \"Mon Compte\"|trans({}, 'messages') }}</li>
            </ul>
        </div>
    </div>
        {% for type, messages in app.session.flashBag.all %}
            {% for message in messages %}
                <div class=\"alert {{ type }}\">
                    {{ message|trans({}, 'FOSUserBundle') }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endblock breadcrump %}
    {% block content %}

            <div class=\"col-lg-12 col-md-12 col-sm-12\">

                <div class=\"row userInfo\">
                    <div class=\"col-lg-9 col-md-9 col-xs-12 col-sm-12\">

                        <span hidden class=\"titre_7_menu\">{{ \"Bienvenue_sur_votre_compte\"|trans({}, 'messages') }}</span>


                        <ul class=\"myAccountList row float-right  hidden-xs\">

                            <li class=\"col-lg-3 col-md-4 col-sm-6 col-xs-6   \" style=\"text-align: -webkit-center;display: inline-block;margin-bottom: 20px \" >
                                <div class=\" \" style=\"height: 180px;width:180px;background: #F7F9FA;border-radius: 18px;\">
                                    <a title=\"Orders\" href=\"{{ path(\"facture\") }}\" style=\"height: 30%; display: block; margin: 0 auto;\" >
                                    </a>
                                    <a title=\"Orders\" href=\"{{ path(\"facture\") }}\" style=\"height: 50%; display: block; margin: 0 auto;\" >
                                        <i  style=\"color: #ed0000 \"  class=\"fa fa-cube\"></i>
                                         </a>

                                    <a title=\"Orders\" href=\"{{ path(\"facture\") }}\"  >
                                        {{ \"Mes Commandes\"|trans({}, 'messages') }}   </a>
                                </div>
                            </li>
                            <li class=\"col-lg-3 col-md-4 col-sm-6 col-xs-6  \" style=\"text-align: -webkit-center;display: inline-block;margin-bottom: 20px \">
                                <div class=\"\" style=\"height: 180px;width:180px;background: #F7F9FA;border-radius: 18px\">
                                    <a title=\"Orders\" href=\"{{ path(\"favoris\") }}\" style=\"height: 30%; display: block; margin: 0 auto;\">
                                          </a>
                                    <a title=\"Orders\" href=\"{{ path(\"favoris\") }}\" style=\"height: 50%; display: block; margin: 0 auto;\">
                                        <i  style=\"color: #ed0000\" class=\"fa fa-star\"></i>  </a>

                                    <a title=\"Orders\" href=\"{{ path(\"favoris\") }}\" >
                                     {{ \"Mes Favoris\"|trans({}, 'messages') }} </a>


                                </div>
                            </li>
                            <li class=\"col-lg-3 col-md-4 col-sm-6 col-xs-6  \" style=\"text-align: -webkit-center;display: inline-block;margin-bottom: 20px \">
                                <div class=\"\" style=\"height: 180px;width:180px;background: #F7F9FA;border-radius: 18px\">
                                    <a title=\"{{ \"Mesinformations\"|trans({}, 'messages') }}\"    href=\"{{ path(\"fos_user_profile_edit\") }}\" style=\"height: 30%; display: block; margin: 0 auto;\">
                                    </a>
                                    <a title=\"{{ \"Mesinformations\"|trans({}, 'messages') }}\"    href=\"{{ path(\"fos_user_profile_edit\") }}\" style=\"height: 50%; display: block; margin: 0 auto;\"><i  style=\"color: #ed0000\" class=\"fa fa-user\"></i>
                                    </a>
                                    <a title=\"{{ \"Mesinformations\"|trans({}, 'messages') }}\"    href=\"{{ path(\"fos_user_profile_edit\") }}\" >
                                    {{\"Mesinformations\"|trans({}, 'messages') }}</a></div>
                            </li>
                            <li class=\"col-lg-3 col-md-4 col-sm-6 col-xs-6  \" style=\"text-align: -webkit-center;display: inline-block;margin-bottom: 20px \">
                                <div class=\"\" style=\"height: 180px;width:180px;background: #F7F9FA;border-radius: 18px\">
                                    <a  title=\"{{\"Changer mon mot de passe\"|trans({}, 'messages') }}\" href=\"{{ path(\"fos_user_change_password\") }}\" style=\"height: 25%; display: block; margin: 0 auto;\">
                                        </a>
                                    <a  title=\"{{\"Changer mon mot de passe\"|trans({}, 'messages') }}\" href=\"{{ path(\"fos_user_change_password\") }}\" style=\"height: 50%; display: block; margin: 0 auto;\"> <i
                                                style=\"color: #ed0000\"   class=\"fa fa-edit\"> </i> </a>
                                    <a style=\"padding-right: 10px;padding-left: 10px\" title=\"{{\"Changer mon mot de passe\"|trans({}, 'messages') }}\" href=\"{{ path(\"fos_user_change_password\") }}\" >
                                     {{ \"Changer mon mot de passe\"|trans({}, 'messages') }}</a>

                                </div>
                            </li>


                            {#
                                 <li class=\"col-lg-2 col-md-2 col-sm-3 col-xs-4   \" >
                                <div hidden >
                                    <a title=\"My addresses\" href=\"{{ path(\"profile_adresse\") }}\"><i
                                                class=\"fa fa-map-marker\"></i> Mes adresses</a>
                                </div>
                            </li>
                            #}
                        </ul>
                        <ul class=\"myAccountList row float-right hidden-lg hidden-md hidden-sm\">

                            <li class=\"col-xs-6 \" style=\"text-align: -webkit-center;display: inline-block;margin-bottom: 20px \" >
                                <div class=\" \" style=\"height: 180px;border-radius: 18px;background: #F7F9FA;\">
                                    <a title=\"Orders\" href=\"{{ path(\"facture\") }}\" style=\"height: 30%; display: block; margin: 0 auto;\" >
                                    </a>
                                    <a title=\"Orders\" href=\"{{ path(\"facture\") }}\" style=\"height: 50%; display: block; margin: 0 auto;\" >
                                        <i  style=\"color: #ed0000 \"  class=\"fa fa-cube\"></i>
                                    </a>

                                    <a title=\"Orders\" href=\"{{ path(\"facture\") }}\"  >
                                        {{ \"Mes Commandes\"|trans({}, 'messages') }}   </a>
                                </div>
                            </li>
                            <li class=\"col-xs-6  \" style=\"text-align: -webkit-center;display: inline-block;margin-bottom: 20px \">
                                <div class=\"\" style=\"height: 180px;background: #F7F9FA;border-radius: 18px\">
                                    <a title=\"Orders\" href=\"{{ path(\"favoris\") }}\" style=\"height: 30%; display: block; margin: 0 auto;\">
                                    </a>
                                    <a title=\"Orders\" href=\"{{ path(\"favoris\") }}\" style=\"height: 50%; display: block; margin: 0 auto;\">
                                        <i  style=\"color: #ed0000\" class=\"fa fa-star\"></i>  </a>

                                    <a title=\"Orders\" href=\"{{ path(\"favoris\") }}\" >
                                        {{ \"Mes Favoris\"|trans ({}, 'messages')}} </a>


                                </div>
                            </li>
                            <li class=\"col-xs-6  \" style=\"text-align: -webkit-center;display: inline-block;margin-bottom: 20px \">
                                <div class=\"\" style=\"height: 180px;background: #F7F9FA;border-radius: 18px\">
                                    <a title=\"{{ \"Mesinformations\"|trans({}, 'messages') }}\"    href=\"{{ path(\"fos_user_profile_edit\") }}\" style=\"height: 30%; display: block; margin: 0 auto;\">
                                    </a>
                                    <a title=\"{{ \"Mesinformations\"|trans({}, 'messages') }}\"    href=\"{{ path(\"fos_user_profile_edit\") }}\" style=\"height: 50%; display: block; margin: 0 auto;\"><i  style=\"color: #ed0000\" class=\"fa fa-user\"></i>
                                    </a>
                                    <a title=\"{{ \"Mesinformations\"|trans({}, 'messages') }}\"    href=\"{{ path(\"fos_user_profile_edit\") }}\" >
                                        {{\"Mesinformations\"|trans({}, 'messages') }}</a></div>
                            </li>
                            <li class=\" col-xs-6  \" style=\"text-align: -webkit-center;display: inline-block;margin-bottom: 20px \">
                                <div class=\"\" style=\"height: 180px;background: #F7F9FA;border-radius: 18px\">
                                    <a  title=\"{{\"Changer mon mot de passe\"|trans({}, 'messages') }}\" href=\"{{ path(\"fos_user_change_password\") }}\" style=\"height: 25%; display: block; margin: 0 auto;\">
                                    </a>
                                    <a  title=\"{{\"Changer mon mot de passe\"|trans({}, 'messages') }}\" href=\"{{ path(\"fos_user_change_password\") }}\" style=\"height: 50%; display: block; margin: 0 auto;\"> <i
                                                style=\"color: #ed0000\"   class=\"fa fa-edit\"> </i> </a>
                                    <a style=\"padding-right: 10px;padding-left: 10px\" title=\"{{\"Changer mon mot de passe\"|trans({}, 'messages') }}\" href=\"{{ path(\"fos_user_change_password\") }}\" >
                                        {{ \"Changer mon mot de passe\"|trans({}, 'messages') }}</a>

                                </div>
                            </li>

                            {#
                                 <li class=\"col-lg-2 col-md-2 col-sm-3 col-xs-4   \" >
                                <div hidden >
                                    <a title=\"My addresses\" href=\"{{ path(\"profile_adresse\") }}\"><i
                                                class=\"fa fa-map-marker\"></i> Mes adresses</a>
                                </div>
                            </li>
                            #}
                        </ul>


                    </div>
                </div>
                <!--/row end-->

            </div>

        <!--/row-->

        <style>
            .footer{
                visibility: hidden;
            }
        </style>
    {% endblock  %}
", "@Frontend/Profile/compte.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\Profile\\compte.html.twig");
    }
}
