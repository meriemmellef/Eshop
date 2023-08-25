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

/* BackendBundle:Resetting:request_content.html.twig */
class __TwigTemplate_ee69873392bd8dd9b5e49e427bb8b0a63cd48541e9b516f7c1e907e8206d0ac3 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:Resetting:request_content.html.twig"));

        // line 1
        echo "<center><form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" >
    <div>
        ";
        // line 3
        if ((isset($context["invalid_username"]) || array_key_exists("invalid_username", $context))) {
            // line 4
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", ["%username%" => ($context["invalid_username"] ?? $this->getContext($context, "invalid_username"))], "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 6
        echo "
        <div class=\"form-group\">
        <label for=\"username\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Entrez votre adresse e-mail"), "html", null, true);
        echo ":</label>
        <input type=\"text\" size=\"35\" id=\"username\" name=\"username\" required=\"required\" />
        </div>
    </div>
    <div>
        <button class=\"btn btn-primary\" type=\"submit\" >";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", [], "FOSUserBundle"), "html", null, true);
        echo " </button>
    </div>
</form>
</center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  51 => 8,  47 => 6,  41 => 4,  39 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<center><form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" >
    <div>
        {% if invalid_username is defined %}
            <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</p>
        {% endif %}

        <div class=\"form-group\">
        <label for=\"username\">{{ \"Entrez votre adresse e-mail\"|trans }}:</label>
        <input type=\"text\" size=\"35\" id=\"username\" name=\"username\" required=\"required\" />
        </div>
    </div>
    <div>
        <button class=\"btn btn-primary\" type=\"submit\" >{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }} </button>
    </div>
</form>
</center>
", "BackendBundle:Resetting:request_content.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/Resetting/request_content.html.twig");
    }
}
