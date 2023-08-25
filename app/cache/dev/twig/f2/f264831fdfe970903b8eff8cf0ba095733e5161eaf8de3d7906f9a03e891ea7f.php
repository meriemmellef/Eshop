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

/* @Frontend/SwiftLayout/contactContent.html.twig */
class __TwigTemplate_2d5f580daee0e30f4aded06962be06b79d697b60ac74f87e18d5a072198e45c1 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/SwiftLayout/contactContent.html.twig"));

        // line 1
        echo "sexe : ";
        echo twig_escape_filter($this->env, ($context["sexe"] ?? $this->getContext($context, "sexe")), "html", null, true);
        echo "<br>
nom : ";
        // line 2
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo "<br>
prenom : ";
        // line 3
        echo twig_escape_filter($this->env, ($context["prenom"] ?? $this->getContext($context, "prenom")), "html", null, true);
        echo "<br>
adresse : ";
        // line 4
        echo twig_escape_filter($this->env, ($context["adresse"] ?? $this->getContext($context, "adresse")), "html", null, true);
        echo "<br>
ville : ";
        // line 5
        echo twig_escape_filter($this->env, ($context["ville"] ?? $this->getContext($context, "ville")), "html", null, true);
        echo "<br>
zone : ";
        // line 6
        echo twig_escape_filter($this->env, ($context["zone"] ?? $this->getContext($context, "zone")), "html", null, true);
        echo "<br>
email : ";
        // line 7
        echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
        echo "<br>
telephone : ";
        // line 8
        echo twig_escape_filter($this->env, ($context["tel"] ?? $this->getContext($context, "tel")), "html", null, true);
        echo "<br>
objet:<br>
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["objet"] ?? $this->getContext($context, "objet")));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 11
            echo "-";
            echo twig_escape_filter($this->env, $context["o"], "html", null, true);
            echo "<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "<br>
sujet : ";
        // line 13
        echo twig_escape_filter($this->env, ($context["sujet"] ?? $this->getContext($context, "sujet")), "html", null, true);
        echo "<br>
msg : ";
        // line 14
        echo twig_escape_filter($this->env, ($context["msg"] ?? $this->getContext($context, "msg")), "html", null, true);
        echo "<br>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/SwiftLayout/contactContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 14,  83 => 13,  80 => 12,  71 => 11,  67 => 10,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  46 => 4,  42 => 3,  38 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("sexe : {{ sexe }}<br>
nom : {{ nom }}<br>
prenom : {{ prenom }}<br>
adresse : {{ adresse }}<br>
ville : {{ ville }}<br>
zone : {{ zone }}<br>
email : {{ email }}<br>
telephone : {{ tel }}<br>
objet:<br>
{% for o in objet %}
-{{ o }}<br>
{%endfor%}<br>
sujet : {{ sujet }}<br>
msg : {{ msg }}<br>", "@Frontend/SwiftLayout/contactContent.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\SwiftLayout\\contactContent.html.twig");
    }
}
