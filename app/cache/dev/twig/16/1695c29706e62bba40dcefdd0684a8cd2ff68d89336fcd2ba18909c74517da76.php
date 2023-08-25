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

/* BackendBundle:admin/pays:new.html.twig */
class __TwigTemplate_44047e98a1cf312276a219e7f9bc8adcd1c53b1af6354e73ff6dcbcc14b3ecdc extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:admin/pays:new.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "BackendBundle:admin/pays:new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 5
        echo "<div class=\"page\">
    <div class=\"page-content\">
        <!-- Panel -->
        <div class=\"col-lg-12\">
            <div class=\"example-wrap\">
                <h4 class=\"example-title\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nouvelle Filiale"), "html", null, true);
        echo " </h4>
                ";
        // line 18
        echo "
                <br><br>
                <div class=\"row row-lg\">
                    ";
        // line 21
        $this->loadTemplate("@Backend/admin/pays/_form.html.twig", "BackendBundle:admin/pays:new.html.twig", 21)->display(twig_array_merge($context, ["form" => ($context["form"] ?? $this->getContext($context, "form"))]));
        // line 22
        echo "                    <br>
                </div>

            </div>
        </div>
    </div>

</div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:admin/pays:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  67 => 21,  62 => 18,  58 => 10,  51 => 5,  45 => 4,  29 => 1,);
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
    <div class=\"page-content\">
        <!-- Panel -->
        <div class=\"col-lg-12\">
            <div class=\"example-wrap\">
                <h4 class=\"example-title\">{{ \"Nouvelle Filiale\"|trans }} </h4>
                {#
                          {% for type, messages in app.session.flashBag %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ type }}\">{{ message }}</div>
                    {% endfor %}
                {% endfor %}
                #}

                <br><br>
                <div class=\"row row-lg\">
                    {% include \"@Backend/admin/pays/_form.html.twig\" with {form: form} %}
                    <br>
                </div>

            </div>
        </div>
    </div>

</div>




{% endblock %}
", "BackendBundle:admin/pays:new.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/admin/pays/new.html.twig");
    }
}
