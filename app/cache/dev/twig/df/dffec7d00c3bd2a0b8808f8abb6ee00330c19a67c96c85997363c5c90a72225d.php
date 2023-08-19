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

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_5b3f5982c40344ef1cbc7017d33c6c4d888ba98d0a82d8d00b148bb984399a0c extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutBreadcrumps.html.twig", "FOSUserBundle:Security:login.html.twig", 2);
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

                            <form role=\"form\" class=\"logForm \" action=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                                <input type=\"hidden\" name=\"route\" value=\"1\" />
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                                ";
        // line 35
        if ((($context["error"] ?? $this->getContext($context, "error")) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashBag", []), "has", [0 => "danger"], "method"))) {
            // line 36
            echo "                                  ";
            if ((($context["error"] ?? $this->getContext($context, "error")) == 4)) {
                // line 37
                echo "                                      <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                              <span aria-hidden=\"true\">×</span>
                                          </button>
                                          ";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fav_alert", [], "messages"), "html", null, true);
                echo "
                                      </div>
                                  ";
            } else {
                // line 44
                echo "                                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
                                        ";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot de passe ou Email incorrect", [], "messages"), "html", null, true);
                echo "
                                    </div>

                                ";
            }
            // line 52
            echo "                                ";
        }
        // line 53
        echo "

                                <div class=\"form-group\">
                                    <label class=\"inputtitletxt\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages"), "html", null, true);
        echo "</label>
                                    <input type=\"email\" name=\"_username\" class=\"form-control input_lay\" placeholder=";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages"), "html", null, true);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"inputtitletxt\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot de passe", [], "messages"), "html", null, true);
        echo "</label>
                                    <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot de passe", [], "messages"), "html", null, true);
        echo ">
                                </div>

                                <div class=\"form-group\">
                                    <p>

                                        <a title=\"Recover your forgotten password\" style=\"font-family: Roboto-Regular, sans-serif !important; font-weight: 500!important;color: #ED0000 !important;\" href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot_de_passe_perdu", [], "messages"), "html", null, true);
        echo "? </a>
                                    </p>
                                </div>
                                <div class=\"input-group\" style=\"padding-top: 14px;padding-bottom: 5px;\">
                                    <div class=\"g-recaptcha\" data-sitekey=\"6LedckodAAAAAAE-j3jaEd9gBOEFaaM7xxW3FKN0\"></div>

                                    ";
        // line 79
        echo "
                                    <script type=\"text/javascript\"
                                            src=\"https://www.google.com/recaptcha/api.js?hl=en\">
                                    </script>
                                </div>

                                <div  class=\"checkbox\">
                                    <label style=\"font-family: Roboto-Regular, sans-serif !important; font-weight: 400\">
                                        <input type=\"checkbox\" name=\"checkbox\"  id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                                        ";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Garder ma session active", [], "messages"), "html", null, true);
        echo " </label>
                                </div>
                                <button class=\"btn  btn_card \" style=\"    width: 100%;margin-top: 10px\" href=\"account.html\" type=\"submit\"> ";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Se_connecter", [], "messages"), "html", null, true);
        echo "</button>


                            </form>

                            <hr>

                            ";
        // line 131
        echo "

                            <h3 class=\"section-title style2  text-center\">
                                <span style=\"background-color: #F7F9FA; font-size:25px !important; \">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create_new_account", [], "messages"), "html", null, true);
        echo " </span>
                            </h3>
                            <a  style=\"margin-top: 25px\" href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"button\"><button class=\"btn  btn_regist\">
                                ";
        // line 137
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
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 137,  205 => 136,  200 => 134,  195 => 131,  185 => 90,  180 => 88,  169 => 79,  158 => 67,  149 => 61,  145 => 60,  137 => 57,  133 => 56,  128 => 53,  125 => 52,  118 => 48,  112 => 44,  106 => 41,  100 => 37,  97 => 36,  95 => 35,  90 => 33,  85 => 31,  76 => 25,  65 => 17,  59 => 14,  51 => 8,  45 => 7,  29 => 2,);
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

                            <form role=\"form\" class=\"logForm \" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                                <input type=\"hidden\" name=\"route\" value=\"1\" />
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>

                                {% if error  or app.session.flashBag.has('danger')  %}
                                  {% if error==4 %}
                                      <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                              <span aria-hidden=\"true\">×</span>
                                          </button>
                                          {{ \"fav_alert\" | trans({}, 'messages') }}
                                      </div>
                                  {% else %}
                                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
                                        {{ \"Mot de passe ou Email incorrect\"|trans({}, 'messages') }}
                                    </div>

                                {% endif %}
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
                                    <div class=\"g-recaptcha\" data-sitekey=\"6LedckodAAAAAAE-j3jaEd9gBOEFaaM7xxW3FKN0\"></div>

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
                                <button class=\"btn  btn_card \" style=\"    width: 100%;margin-top: 10px\" href=\"account.html\" type=\"submit\"> {{ \"Se_connecter\"|trans({}, 'messages')}}</button>


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

", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/Security/login.html.twig");
    }
}
