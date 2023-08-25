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

/* FrontendBundle:Modals:loginModal.html.twig */
class __TwigTemplate_1cfa0d6696785bdc43e3a1cbf1d0c75b9fb9806e404aa60879b873ee72a9680d extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:Modals:loginModal.html.twig"));

        // line 1
        echo "<div class=\"modal signUpContent fade\" id=\"ModalLogin\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <form role=\"form\" class=\"logForm \" action=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                ";
        // line 5
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FrontendBundle:User:csrfUserForm"), []);
        // line 6
        echo "                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"> &times; </button>
                    <h3 class=\"modal-title-site text-center\"> ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login"), "html", null, true);
        echo " </h3>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group login-username\">
                        <div>
                            <input type=\"text\" name=\"_username\" class=\"form-control input\"
                                   placeholder=\"Nom d'utilisateur\">
                        </div>
                    </div>
                    <div class=\"form-group login-password\">
                        <div>
                            <input type=\"password\" name=\"_password\" class=\"form-control input\"
                                   placeholder=\"Mot de passe\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div>
                            <div class=\"checkbox login-remember\">
                                <label>
                                    <input type=\"checkbox\" name=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"
                                           value=\"on\">
                                    Garder ma session active </label>
                            </div>
                        </div>
                        <div>
                            <div>
                                <input name=\"submit\" class=\"btn  btn-block btn-lg btn-primary\" value=\"SE CONNECTER\"
                                       type=\"submit\">
                            </div>
                        </div>
                        <!--userForm-->

                    </div>
                </div>
                <div class=\"modal-footer\">
                    <p class=\"text-center\"> Nouveau client ? <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"> Commencer ici. </a> <br>
                    <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\"> Mot de passe oublié? </a></p>
                </div>


            </form>
            <!-- /.modal-content -->

        </div>
        <!-- /.modal-dialog -->

    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Modals:loginModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 44,  86 => 43,  48 => 8,  44 => 6,  42 => 5,  38 => 4,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal signUpContent fade\" id=\"ModalLogin\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <form role=\"form\" class=\"logForm \" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                {% render(controller(\"FrontendBundle:User:csrfUserForm\")) %}
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"> &times; </button>
                    <h3 class=\"modal-title-site text-center\"> {{ \"Login\"|trans}} </h3>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group login-username\">
                        <div>
                            <input type=\"text\" name=\"_username\" class=\"form-control input\"
                                   placeholder=\"Nom d'utilisateur\">
                        </div>
                    </div>
                    <div class=\"form-group login-password\">
                        <div>
                            <input type=\"password\" name=\"_password\" class=\"form-control input\"
                                   placeholder=\"Mot de passe\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div>
                            <div class=\"checkbox login-remember\">
                                <label>
                                    <input type=\"checkbox\" name=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"
                                           value=\"on\">
                                    Garder ma session active </label>
                            </div>
                        </div>
                        <div>
                            <div>
                                <input name=\"submit\" class=\"btn  btn-block btn-lg btn-primary\" value=\"SE CONNECTER\"
                                       type=\"submit\">
                            </div>
                        </div>
                        <!--userForm-->

                    </div>
                </div>
                <div class=\"modal-footer\">
                    <p class=\"text-center\"> Nouveau client ? <a href=\"{{ path('fos_user_registration_register') }}\"> Commencer ici. </a> <br>
                    <a href=\"{{ path('fos_user_resetting_request') }}\"> Mot de passe oublié? </a></p>
                </div>


            </form>
            <!-- /.modal-content -->

        </div>
        <!-- /.modal-dialog -->

    </div>
</div>
", "FrontendBundle:Modals:loginModal.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/Modals/loginModal.html.twig");
    }
}
