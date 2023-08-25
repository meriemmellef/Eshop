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

/* @Backend/Default/profile.html.twig */
class __TwigTemplate_6ab7ee4a07b44a5717fc7996fc962377f663f9e4524c785f93c1a299df93db98 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'page' => [$this, 'block_page'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Backend/layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/Default/profile.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/Default/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_page($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 3
        echo "<div class=\"page\">

    <div class=\"page-header\">
        <h1 class=\"page-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
        echo "</h1>

    </div>


    <div class=\"page-content\" style=\"padding-top: 0 !important;padding-bottom: 0 !important;\">
        <div class=\"panel\" >
            <div class=\"col-lg-12\">

                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "                    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "errors"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            echo "                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </div>

            <div class=\"col-lg-12\">
                <div class=\"example-wrap\">

                    <form class=\"row\" method=\"post\" action=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_password");
        echo "\">

                        <div class=\"offset-lg-2 col-lg-10\" style=\"padding-top: 20px;\">
                            <label>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot de passe actuel"), "html", null, true);
        echo "<span style=\"color: #ed1a3b\">*</span></label>
                        </div>
                        <div class=\"offset-lg-2 col-lg-6\">

                            <input type=\"password\" id=\"acpassword\" name=\"acpassword\" class=\"form-control\"
                                   minlength=\"8\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\"
                                   title=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("passworderror"), "html", null, true);
        echo "\" required >
                        </div>
                        <div class=\"offset-lg-2 col-lg-10\" style=\"padding-top: 20px;\">
                            <label>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nouveau mot de passe"), "html", null, true);
        echo "<span style=\"color: #ed1a3b\">*</span></label>
                        </div>
                        <div class=\"offset-lg-2 col-lg-6\">
                            <input type=\"password\" id=\"nvpassword\" name=\"nvpassword\" class=\"form-control\"
                                   minlength=\"8\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\"
                                   title=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("passworderror"), "html", null, true);
        echo "\" required>
                        </div>
                        <div class=\"offset-lg-2 col-lg-10\" style=\"padding-top: 20px;\">
                            <label>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirmer nouveau mot de passe"), "html", null, true);
        echo "<span style=\"color: #ed1a3b\">*</span></label>
                        </div>
                        <div class=\"offset-lg-2 col-lg-6\">
                            <input type=\"password\" id=\"repeatpassword\" name=\"repeatpassword\" class=\"form-control\"
                                   minlength=\"8\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\"
                                   title=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("passworderror"), "html", null, true);
        echo "\" required >
                        </div>
                        <div class=\"col-lg-12 text-center\">

                            <button style=\"margin-top: 10px; margin-bottom: 10px\"
                                    class=\"float-right btn btn-md social-evernote waves-effect waves-classic\">
                                <i class=\"icon md-plus\" aria-hidden=\"true\"></i>
                                ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Submit"), "html", null, true);
        echo "
                            </button>

                        </div>




                    </form>

        </div>
    </div>


</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/Default/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 68,  157 => 61,  149 => 56,  143 => 53,  135 => 48,  129 => 45,  120 => 39,  114 => 36,  107 => 31,  98 => 28,  92 => 24,  87 => 23,  78 => 20,  72 => 16,  68 => 15,  56 => 6,  51 => 3,  45 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Backend/layout/layout.html.twig' %}
{% block page %}
<div class=\"page\">

    <div class=\"page-header\">
        <h1 class=\"page-title\">{{ \"Profile\"|trans }}</h1>

    </div>


    <div class=\"page-content\" style=\"padding-top: 0 !important;padding-bottom: 0 !important;\">
        <div class=\"panel\" >
            <div class=\"col-lg-12\">

                {% for message in app.session.flashbag.get('success') %}
                    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        {{ message|trans }}
                    </div>
                {% endfor %}
                {% for message in app.session.flashbag.get('errors') %}
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        {{ message|trans }}
                    </div>
                {% endfor %}
            </div>

            <div class=\"col-lg-12\">
                <div class=\"example-wrap\">

                    <form class=\"row\" method=\"post\" action=\"{{ path('update_password') }}\">

                        <div class=\"offset-lg-2 col-lg-10\" style=\"padding-top: 20px;\">
                            <label>{{ \"Mot de passe actuel\" | trans }}<span style=\"color: #ed1a3b\">*</span></label>
                        </div>
                        <div class=\"offset-lg-2 col-lg-6\">

                            <input type=\"password\" id=\"acpassword\" name=\"acpassword\" class=\"form-control\"
                                   minlength=\"8\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\"
                                   title=\"{{\"passworderror\"|trans }}\" required >
                        </div>
                        <div class=\"offset-lg-2 col-lg-10\" style=\"padding-top: 20px;\">
                            <label>{{ \"Nouveau mot de passe\" | trans }}<span style=\"color: #ed1a3b\">*</span></label>
                        </div>
                        <div class=\"offset-lg-2 col-lg-6\">
                            <input type=\"password\" id=\"nvpassword\" name=\"nvpassword\" class=\"form-control\"
                                   minlength=\"8\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\"
                                   title=\"{{ 'passworderror'|trans }}\" required>
                        </div>
                        <div class=\"offset-lg-2 col-lg-10\" style=\"padding-top: 20px;\">
                            <label>{{ \"Confirmer nouveau mot de passe\" | trans }}<span style=\"color: #ed1a3b\">*</span></label>
                        </div>
                        <div class=\"offset-lg-2 col-lg-6\">
                            <input type=\"password\" id=\"repeatpassword\" name=\"repeatpassword\" class=\"form-control\"
                                   minlength=\"8\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\"
                                   title=\"{{ 'passworderror'|trans }}\" required >
                        </div>
                        <div class=\"col-lg-12 text-center\">

                            <button style=\"margin-top: 10px; margin-bottom: 10px\"
                                    class=\"float-right btn btn-md social-evernote waves-effect waves-classic\">
                                <i class=\"icon md-plus\" aria-hidden=\"true\"></i>
                                {{ \"Submit\" | trans }}
                            </button>

                        </div>




                    </form>

        </div>
    </div>


</div>

{% endblock %}
", "@Backend/Default/profile.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\Default\\profile.html.twig");
    }
}
