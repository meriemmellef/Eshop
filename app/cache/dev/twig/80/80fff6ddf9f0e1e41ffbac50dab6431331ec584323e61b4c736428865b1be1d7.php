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

/* @Frontend/Resetting/reset_content.html.twig */
class __TwigTemplate_da6d24db42ece8bcc90129e51ec72d517ff6fe28c3e6846310fa4586f5a50214 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/Resetting/reset_content.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <div class=' col-md-6 col-md-offset-3'>

        <H1><b class=\"titleiscrit\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Entrer un nouveau mot de passe", [], "messages"), "html", null, true);
        echo "</b></H1>

        <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", ["token" => ($context["token"] ?? $this->getContext($context, "token"))]), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">

            <div class=\"form-group\">
            <label class=\"inputtitletxt\">";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", []), "first", []), 'label');
        echo "</label>
            ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", []), "first", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nouveau mot de passe"]]);
        echo "
                ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", []), "first", []), 'errors');
        echo "
            </div>
            <div class=\"form-group\">
            <label class=\"inputtitletxt\">";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", []), "second", []), 'label');
        echo "</label>
                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", []), "second", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Confirmer mot de passe"]]);
        echo "
                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", []), "second", []), 'errors');
        echo "
            </div>
            ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", []), 'widget');
        echo "
    <br>

    </br>

        <center><button  class=\"btn  btn_card\" style=\"font-weight: 500 !important;width: 100%\"  type=\"submit\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modifier Mot de passe", [], "messages"), "html", null, true);
        echo " </button></center>
    </div>
    </form>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  78 => 18,  73 => 16,  69 => 15,  65 => 14,  59 => 11,  55 => 10,  51 => 9,  43 => 6,  38 => 4,  33 => 1,);
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
    <div class=' col-md-6 col-md-offset-3'>

        <H1><b class=\"titleiscrit\">{{ \"Entrer un nouveau mot de passe\"|trans({}, 'messages') }}</b></H1>

        <form action=\"{{ path('fos_user_resetting_reset', {'token': token}) }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_resetting_reset\">

            <div class=\"form-group\">
            <label class=\"inputtitletxt\">{{ form_label(form.new.first) }}</label>
            {{ form_widget(form.new.first,{\"attr\" : {\"class\":\"form-control\",\"placeholder\":\"Nouveau mot de passe\"} }) }}
                {{ form_errors(form.new.first) }}
            </div>
            <div class=\"form-group\">
            <label class=\"inputtitletxt\">{{ form_label(form.new.second) }}</label>
                {{ form_widget(form.new.second,{\"attr\" : {\"class\":\"form-control\",\"placeholder\":\"Confirmer mot de passe\"} }) }}
                {{ form_errors(form.new.second) }}
            </div>
            {{ form_widget(form._token) }}
    <br>

    </br>

        <center><button  class=\"btn  btn_card\" style=\"font-weight: 500 !important;width: 100%\"  type=\"submit\">{{ \"Modifier Mot de passe\"|trans({}, 'messages') }} </button></center>
    </div>
    </form>
    </div>
</div>
", "@Frontend/Resetting/reset_content.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\Resetting\\reset_content.html.twig");
    }
}
