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

/* BackendBundle:gerant/horaire:index.html.twig */
class __TwigTemplate_cc925b15f583cb57a9c8f26e278b67fc466721404d4f4149d3ec9c53d5cc2207 extends \Twig\Template
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
        // line 2
        return "@Backend/layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:gerant/horaire:index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "BackendBundle:gerant/horaire:index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 5
        echo "    <div class=\"page\">

        <div class=\"page-header\">
            <h1 class=\"page-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Horaires de retrait"), "html", null, true);
        echo "  </h1>
        </div>

        <div class=\"page-content\" style=\"padding-top: 0px \" >
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\"  style=\"padding-left: 9px !important;padding-right: 9px !important;padding-top: 0px !important;padding-bottom: 0px !important;\">
                    <div class=\"row row-lg\" style=\"padding-top: 100px;padding-bottom: 100px;\">

                        ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "col-lg-12 "]]);
        echo "
                        <div class=\"col-lg-12\">
                            <div class=\"row row-lg\">
                                <div class=\"col-lg-3 text-right\">
                                    <label>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Horaires"), "html", null, true);
        echo " :</label>
                                </div>
                                <div class=\"col-lg-6 text-left\">
                                    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "horaires", []), 'widget', ["attr" => ["class" => "form-control", "data-plugin" => "select2"]]);
        echo "
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class=\"col-lg-12 text-center\">
                            <button class=\"btn social-evernote waves-effect waves-classic\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valider"), "html", null, true);
        echo "</button>
                        </div>
                        ";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

                        </div>
                </div>
            </div>
            <!-- End Panel -->
        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:gerant/horaire:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  90 => 30,  81 => 24,  75 => 21,  68 => 17,  56 => 8,  51 => 5,  45 => 4,  29 => 2,);
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
{% extends '@Backend/layout/layout.html.twig' %}

{% block page %}
    <div class=\"page\">

        <div class=\"page-header\">
            <h1 class=\"page-title\">{{ \"Horaires de retrait\"|trans }}  </h1>
        </div>

        <div class=\"page-content\" style=\"padding-top: 0px \" >
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\"  style=\"padding-left: 9px !important;padding-right: 9px !important;padding-top: 0px !important;padding-bottom: 0px !important;\">
                    <div class=\"row row-lg\" style=\"padding-top: 100px;padding-bottom: 100px;\">

                        {{ form_start(form, {'attr': {'class': 'col-lg-12 '}}) }}
                        <div class=\"col-lg-12\">
                            <div class=\"row row-lg\">
                                <div class=\"col-lg-3 text-right\">
                                    <label>{{ \"Horaires\"|trans }} :</label>
                                </div>
                                <div class=\"col-lg-6 text-left\">
                                    {{ form_widget(form.horaires, {'attr': {'class': 'form-control' ,'data-plugin':'select2'}}) }}
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class=\"col-lg-12 text-center\">
                            <button class=\"btn social-evernote waves-effect waves-classic\">{{ \"Valider\"|trans }}</button>
                        </div>
                        {{ form_end(form) }}

                        </div>
                </div>
            </div>
            <!-- End Panel -->
        </div>

    </div>
{% endblock %}
", "BackendBundle:gerant/horaire:index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/gerant/horaire/index.html.twig");
    }
}
