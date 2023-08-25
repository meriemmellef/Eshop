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

/* FrontendBundle:Modals:registerModal.html.twig */
class __TwigTemplate_4acfb11f585968051b13543eb4bd8e3741750f81b9aec337b4af69edc40ce8fe extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:Modals:registerModal.html.twig"));

        // line 1
        echo "<div class=\"modal signUpContent fade\" id=\"ModalSignup\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"> &times; </button>
                <h3 class=\"modal-title-site text-center\"> REGISTER </h3>
            </div>
            <div class=\"modal-body\">
                <div class=\"control-group\"><a class=\"fb_button btn  btn-block btn-lg \" href=\"#\"> SIGNUP WITH
                        FACEBOOK </a></div>
                <h5 style=\"padding:10px 0 10px 0;\" class=\"text-center\"> OR </h5>

                <div class=\"form-group reg-username\">
                    <div>
                        <input name=\"login\" class=\"form-control input\" size=\"20\" placeholder=\"Enter Username\"
                               type=\"text\">
                    </div>
                </div>
                <div class=\"form-group reg-email\">
                    <div>
                        <input name=\"reg\" class=\"form-control input\" size=\"20\" placeholder=\"Enter Email\" type=\"text\">
                    </div>
                </div>
                <div class=\"form-group reg-password\">
                    <div>
                        <input name=\"password\" class=\"form-control input\" size=\"20\" placeholder=\"Password\"
                               type=\"password\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div>
                        <div class=\"checkbox login-remember\">
                            <label>
                                <input name=\"rememberme\" id=\"rememberme\" value=\"forever\" checked=\"checked\"
                                       type=\"checkbox\">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <input name=\"submit\" class=\"btn  btn-block btn-lg btn-primary\" value=\"REGISTER\" type=\"submit\">
                    </div>
                </div>
                <!--userForm-->

            </div>
            <div class=\"modal-footer\">
                <p class=\"text-center\"> Already member? <a data-toggle=\"modal\" data-dismiss=\"modal\" href=\"#ModalLogin\">
                        Sign in </a></p>
            </div>
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Modals:registerModal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal signUpContent fade\" id=\"ModalSignup\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"> &times; </button>
                <h3 class=\"modal-title-site text-center\"> REGISTER </h3>
            </div>
            <div class=\"modal-body\">
                <div class=\"control-group\"><a class=\"fb_button btn  btn-block btn-lg \" href=\"#\"> SIGNUP WITH
                        FACEBOOK </a></div>
                <h5 style=\"padding:10px 0 10px 0;\" class=\"text-center\"> OR </h5>

                <div class=\"form-group reg-username\">
                    <div>
                        <input name=\"login\" class=\"form-control input\" size=\"20\" placeholder=\"Enter Username\"
                               type=\"text\">
                    </div>
                </div>
                <div class=\"form-group reg-email\">
                    <div>
                        <input name=\"reg\" class=\"form-control input\" size=\"20\" placeholder=\"Enter Email\" type=\"text\">
                    </div>
                </div>
                <div class=\"form-group reg-password\">
                    <div>
                        <input name=\"password\" class=\"form-control input\" size=\"20\" placeholder=\"Password\"
                               type=\"password\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div>
                        <div class=\"checkbox login-remember\">
                            <label>
                                <input name=\"rememberme\" id=\"rememberme\" value=\"forever\" checked=\"checked\"
                                       type=\"checkbox\">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <input name=\"submit\" class=\"btn  btn-block btn-lg btn-primary\" value=\"REGISTER\" type=\"submit\">
                    </div>
                </div>
                <!--userForm-->

            </div>
            <div class=\"modal-footer\">
                <p class=\"text-center\"> Already member? <a data-toggle=\"modal\" data-dismiss=\"modal\" href=\"#ModalLogin\">
                        Sign in </a></p>
            </div>
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->

</div>
", "FrontendBundle:Modals:registerModal.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/Modals/registerModal.html.twig");
    }
}
