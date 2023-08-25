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

/* FrontendBundle:Resetting:request_content.html.twig */
class __TwigTemplate_2318c95911e2bb058401611c7b79b62a9805162a7b6cd18158f6eeb05eb3369c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:Resetting:request_content.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <div class=' well-sm col-md-6 col-md-offset-3'>
        <H1><b class=\"titleiscrit\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot de Passe Perdu", [], "messages"), "html", null, true);
        echo "</b></H1>
        ";
        // line 24
        echo "        ";
        if ((isset($context["success"]) || array_key_exists("success", $context))) {
            // line 25
            echo "            <div class=\"col-lg-12 text-center\">
                ";
            // line 26
            if ((($context["success"] ?? $this->getContext($context, "success")) == 1)) {
                // line 27
                echo "
                    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        ";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("forget_password_msg", [], "messages"), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 35
            echo "                ";
            if ((($context["success"] ?? $this->getContext($context, "success")) == 0)) {
                // line 36
                echo "                    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        ";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("forget_password_msg", [], "messages"), "html", null, true);
                echo "
                    </div>


                ";
            }
            // line 45
            echo "
                ";
            // line 46
            if ((($context["success"] ?? $this->getContext($context, "success")) == 2)) {
                // line 47
                echo "                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        ";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("captchincorect", [], "messages"), "html", null, true);
                echo "
                    </div>


                ";
            }
            // line 56
            echo "            </div>
        ";
        }
        // line 58
        echo "

        <form role=\"form\" action=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updatePasswordApi");
        echo "\" method=\"post\">
            ";
        // line 61
        if ((isset($context["invalid_username"]) || array_key_exists("invalid_username", $context))) {
            // line 62
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", ["%email%" => ($context["invalid_username"] ?? $this->getContext($context, "invalid_username"))], "FOSUserBundle"), "html", null, true);
            echo "</p>
            ";
        }
        // line 64
        echo "            <div class=\"form-group\">
                <label  class=\"inputtitletxt\" for=\"exampleInputEmail1\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages"), "html", null, true);
        echo "</label>
                <input  type=\"email\" id=\"username\" name=\"username\" required=\"required\" class=\"form-control\" placeholder=\"Entre votre adresse Email\">
            </div>
            <p hidden>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Renseignez votre adresse mail utilisé pour un lien de reinistialisation du mot de passe"), "html", null, true);
        echo ".</p>


            <div class=\"input-group\" style=\"padding-top: 14px;padding-bottom: 5px;\">
                <div class=\"g-recaptcha\" data-sitekey=\"6LedckodAAAAAAE-j3jaEd9gBOEFaaM7xxW3FKN0\"></div>

                ";
        // line 80
        echo "
                <script type=\"text/javascript\"
                        src=\"https://www.google.com/recaptcha/api.js?hl=en\">
                </script>
            </div>

            <br>

            <input type=\"submit\" class=\"btn  btn_card\" style=\"font-weight: 500 !important;width: 100%\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\">


        </form>

    </div>


    <style>
        .footer{
            visibility: hidden;
        }
    </style>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 88,  136 => 80,  127 => 68,  121 => 65,  118 => 64,  112 => 62,  110 => 61,  106 => 60,  102 => 58,  98 => 56,  90 => 51,  84 => 47,  82 => 46,  79 => 45,  71 => 40,  65 => 36,  62 => 35,  56 => 32,  49 => 27,  47 => 26,  44 => 25,  41 => 24,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=' well-sm col-md-6 col-md-offset-3'>
        <H1><b class=\"titleiscrit\">{{ \"Mot de Passe Perdu\"|trans({}, 'messages') }}</b></H1>
        {#
                {% if  app.session.flashBag.has('forgetpassword')  %}
            <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
                {{ \"Please check your email to get your new password\"|trans({}, 'messages') }}
            </div>

        {% endif %}
        {% if  app.session.flashBag.has('forgetpswdfail')  %}
            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
                {{ \"user Not found\"|trans({}, 'messages') }}
            </div>

        {% endif %}
        #}
        {% if success is defined %}
            <div class=\"col-lg-12 text-center\">
                {% if  success==1  %}

                    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        {{ \"forget_password_msg\"|trans({}, 'messages') }}
                    </div>
                {% endif %}
                {% if   success==0   %}
                    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        {{ \"forget_password_msg\"|trans({}, 'messages') }}
                    </div>


                {% endif %}

                {% if   success==2   %}
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        {{ \"captchincorect\"|trans({}, 'messages') }}
                    </div>


                {% endif %}
            </div>
        {% endif %}


        <form role=\"form\" action=\"{{ path('updatePasswordApi') }}\" method=\"post\">
            {% if invalid_username is defined %}
                <p>{{ 'resetting.request.invalid_username'|trans({'%email%': invalid_username}, 'FOSUserBundle') }}</p>
            {% endif %}
            <div class=\"form-group\">
                <label  class=\"inputtitletxt\" for=\"exampleInputEmail1\">{{ 'Email'|trans({}, 'messages') }}</label>
                <input  type=\"email\" id=\"username\" name=\"username\" required=\"required\" class=\"form-control\" placeholder=\"Entre votre adresse Email\">
            </div>
            <p hidden>{{\"Renseignez votre adresse mail utilisé pour un lien de reinistialisation du mot de passe\"|trans}}.</p>


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

            <br>

            <input type=\"submit\" class=\"btn  btn_card\" style=\"font-weight: 500 !important;width: 100%\" value=\"{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}\">


        </form>

    </div>


    <style>
        .footer{
            visibility: hidden;
        }
    </style>
    </div>
", "FrontendBundle:Resetting:request_content.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/Resetting/request_content.html.twig");
    }
}
