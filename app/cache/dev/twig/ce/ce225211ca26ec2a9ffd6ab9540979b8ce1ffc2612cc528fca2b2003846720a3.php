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

/* FrontendBundle:Security:login.html.twig */
class __TwigTemplate_0db8d0e55cc80b1d72a6560a544ff59f536b8b5f6b7d42701443727eb7954c46 extends \Twig\Template
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
        // line 2
        return "FrontendBundle:Layouts:layoutBreadcrumps.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:Security:login.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutBreadcrumps.html.twig", "FrontendBundle:Security:login.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
    <div class=\"container main-container\" style=\"padding-right:2%;padding-left:2%\">

        <div class=\"row\" style=\"display: flex; align-items: center\">
            <div class=\"breadcrumbDiv col-lg-12\">
                <ul class=\"breadcrumb\">
                    <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages"), "html", null, true);
        echo " </a></li>

                    <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Authentification", [], "messages"), "html", null, true);
        echo "</li>
                </ul>
            </div>
        </div>

        <div class=\"row\"  style=\" display: flex;  justify-content: center;  align-items: center;padding-bottom: 20px\">

            <div class=\"col-lg-6  col-xs-12 col-md-12 col-sm-12\">
                <h1 class=\"section-title-inner \"><span class=\"titleiscrit\" hidden>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Authentification", [], "FOSUserBundle"), "html", null, true);
        echo "</span></h1>

                <div class=\"row userInfo\">

                    <div class=\"col-xs-12 col-sm-12\">
 ";
        // line 30
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 31
            echo "              <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["error"] ?? $this->getContext($context, "error")), [], "FOSUserBundle"), "html", null, true);
            echo "</div>
            ";
        }
        // line 33
        echo "                        <form role=\"form\" class=\"logForm \" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                           <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                          
                                ";
        // line 37
        if ((($context["error"] ?? $this->getContext($context, "error")) == 4)) {
            // line 38
            echo "                                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
                                        ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fav_alert", [], "messages"), "html", null, true);
            echo "
                                    </div>
                                ";
        } elseif ((        // line 44
($context["error"] ?? $this->getContext($context, "error")) != "")) {
            // line 45
            echo "                                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
                                        ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot de passe ou Email incorrect", [], "messages"), "html", null, true);
            echo "
                                    </div>

                                ";
        }
        // line 53
        echo "                               
                         


                            <div class=\"form-group\">
                                <label class=\"inputtitletxt\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages"), "html", null, true);
        echo "</label>
                                <input type=\"email\" name=\"_username\" class=\"form-control input_lay\" placeholder=";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages"), "html", null, true);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"inputtitletxt\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot de passe", [], "messages"), "html", null, true);
        echo "</label>
                                <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot de passe", [], "messages"), "html", null, true);
        echo ">
                            </div>

                            <div class=\"form-group\">
                                <p>

                                    <a title=\"Recover your forgotten password\" style=\"font-family: Roboto-Regular, sans-serif !important; font-weight: 500!important;color: #ED0000 !important;\" href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot_de_passe_perdu", [], "messages"), "html", null, true);
        echo "? </a>
                                </p>
                            </div>
                            <div class=\"input-group\" style=\"padding-top: 14px;padding-bottom: 5px;\">
                                 <div class=\"g-recaptcha\" data-sitekey=\"6LdEJ8knAAAAAJHZBs9ry4KIpBH11U-XqwWMJe8c\"></div>

                                 ";
        // line 81
        echo "
                             <script type=\"text/javascript\"
                                      src=\"https://www.google.com/recaptcha/api.js?hl=en\">
                              </script>
                          </div>

                            <div  class=\"checkbox\">
                                <label style=\"font-family: Roboto-Regular, sans-serif !important; font-weight: 400\">
                                    <input type=\"checkbox\" name=\"checkbox\"  id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                                    ";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Garder ma session active", [], "messages"), "html", null, true);
        echo " </label>
                            </div>
                            <input class=\"btn  btn_card \" style=\"    width: 100%;margin-top: 10px\"  type=\"submit\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Se_connecter", [], "messages"), "html", null, true);
        echo "\"> 


                        </form>

                        <hr>

                        ";
        // line 133
        echo "

                        <h3 class=\"section-title style2  text-center\">
                            <span style=\"background-color: #F7F9FA; font-size:25px !important; \">";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create_new_account", [], "messages"), "html", null, true);
        echo " </span>
                        </h3>
                        <a  style=\"margin-top: 25px\" href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"button\"><button class=\"btn  btn_regist\">
                                ";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("S’inscrire", [], "messages"), "html", null, true);
        echo "</button></a>

                    </div>



                </div>
                <!--/row end-->

            </div>

        </div>
        <!--/row-->

        <div style=\"clear:both\"></div>
    </div>
    <!-- /wrapper -->


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
        return "FrontendBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 139,  210 => 138,  205 => 136,  200 => 133,  190 => 92,  185 => 90,  174 => 81,  163 => 69,  154 => 63,  150 => 62,  142 => 59,  138 => 58,  131 => 53,  124 => 49,  118 => 45,  116 => 44,  111 => 42,  105 => 38,  103 => 37,  97 => 34,  92 => 33,  86 => 31,  84 => 30,  76 => 25,  65 => 17,  59 => 14,  51 => 8,  45 => 7,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'FrontendBundle:Layouts:layoutBreadcrumps.html.twig' %}

{% trans_default_domain 'FOSUserBundle' %}


{% block content %}

    <div class=\"container main-container\" style=\"padding-right:2%;padding-left:2%\">

        <div class=\"row\" style=\"display: flex; align-items: center\">
            <div class=\"breadcrumbDiv col-lg-12\">
                <ul class=\"breadcrumb\">
                    <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">{{ \"Home\" | trans({}, 'messages') }} </a></li>

                    <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                        {{ \"Authentification\" | trans({}, 'messages') }}</li>
                </ul>
            </div>
        </div>

        <div class=\"row\"  style=\" display: flex;  justify-content: center;  align-items: center;padding-bottom: 20px\">

            <div class=\"col-lg-6  col-xs-12 col-md-12 col-sm-12\">
                <h1 class=\"section-title-inner \"><span class=\"titleiscrit\" hidden>{{ \"Authentification\"|trans }}</span></h1>

                <div class=\"row userInfo\">

                    <div class=\"col-xs-12 col-sm-12\">
 {% if error %}
              <div>{{ error|trans({}, 'FOSUserBundle') }}</div>
            {% endif %}
                        <form role=\"form\" class=\"logForm \" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                           <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

                          
                                {% if error==4 %}
                                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
                                        {{ \"fav_alert\" | trans({}, 'messages') }}
                                    </div>
                                {% elseif error!=\"\" %}
                                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
                                        {{ \"Mot de passe ou Email incorrect\"|trans({}, 'messages') }}
                                    </div>

                                {% endif %}
                               
                         


                            <div class=\"form-group\">
                                <label class=\"inputtitletxt\">{{ \"Email\"|trans({}, 'messages') }}</label>
                                <input type=\"email\" name=\"_username\" class=\"form-control input_lay\" placeholder={{ \"Email\"|trans({}, 'messages') }} value=\"{{ last_username }}\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"inputtitletxt\">{{ \"Mot de passe\"|trans({}, 'messages') }}</label>
                                <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder={{ \"Mot de passe\"|trans({}, 'messages') }}>
                            </div>

                            <div class=\"form-group\">
                                <p>

                                    <a title=\"Recover your forgotten password\" style=\"font-family: Roboto-Regular, sans-serif !important; font-weight: 500!important;color: #ED0000 !important;\" href=\"{{ path('fos_user_resetting_request') }}\">{{ \"Mot_de_passe_perdu\"|trans({}, 'messages')}}? </a>
                                </p>
                            </div>
                            <div class=\"input-group\" style=\"padding-top: 14px;padding-bottom: 5px;\">
                                 <div class=\"g-recaptcha\" data-sitekey=\"6LdEJ8knAAAAAJHZBs9ry4KIpBH11U-XqwWMJe8c\"></div>

                                 {#
                                                                     <div class=\"g-recaptcha\" data-sitekey=\"6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI\"></div>

                                                                     <div class=\"g-recaptcha\" data-sitekey=\"6Lc5D-wUAAAAAG7zVXP608ZJNL0HncaFG7jLsj2v\"></div>

                                 #}

                             <script type=\"text/javascript\"
                                      src=\"https://www.google.com/recaptcha/api.js?hl=en\">
                              </script>
                          </div>

                            <div  class=\"checkbox\">
                                <label style=\"font-family: Roboto-Regular, sans-serif !important; font-weight: 400\">
                                    <input type=\"checkbox\" name=\"checkbox\"  id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                                    {{ \"Garder ma session active\"|trans({}, 'messages') }} </label>
                            </div>
                            <input class=\"btn  btn_card \" style=\"    width: 100%;margin-top: 10px\"  type=\"submit\" value=\"{{ \"Se_connecter\"|trans({}, 'messages')}}\"> 


                        </form>

                        <hr>

                        {#

                        <div class=\"fb-login-button m_y\" scope=\"email,user_birthday\" onlogin=\"after_click()\"></div>

                        <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_US/sdk.js\"></script>
                        <script>
                            window.fbAsyncInit = function() {
                                FB.init({
                                    appId  : '727649985058168', // App ID
                                    cookie : true,
                                    xfbml  : true,
                                    oauth  : true
                                });
                            };

                            function after_click() {
                                FB.getLoginStatus(function(response) {
                                    if (response.status === 'connected') {
                                      //  window.location = \" hwi_oauth_login_url('facebook') }}\";
                                    }
                                });
                            }

                            // Load the SDK Asynchronously
                            (function(d){
                                var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
                                if (d.getElementById(id)) { window.fbAsyncInit(); return;}
                                js = d.createElement('script'); js.id = id; js.async = true;
                                js.onload = window.fbAsyncInit;
                                js.src = '//connect.facebook.net/fr_FR/all.js';
                                ref.parentNode.insertBefore(js, ref);
                            }(document));
                        </script>
                        #}


                        <h3 class=\"section-title style2  text-center\">
                            <span style=\"background-color: #F7F9FA; font-size:25px !important; \">{{ \"create_new_account\"|trans({}, 'messages') }} </span>
                        </h3>
                        <a  style=\"margin-top: 25px\" href=\"{{ path('fos_user_registration_register') }}\" class=\"button\"><button class=\"btn  btn_regist\">
                                {{\"S’inscrire\"|trans({}, 'messages')}}</button></a>

                    </div>



                </div>
                <!--/row end-->

            </div>

        </div>
        <!--/row-->

        <div style=\"clear:both\"></div>
    </div>
    <!-- /wrapper -->


    <style>
        .footer{
            visibility: hidden;
        }
    </style>
{% endblock content %}

", "FrontendBundle:Security:login.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/Security/login.html.twig");
    }
}
