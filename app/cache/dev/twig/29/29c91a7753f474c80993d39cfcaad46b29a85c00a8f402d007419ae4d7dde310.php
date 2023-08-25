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

/* @Backend/admin/categorie/new.html.twig */
class __TwigTemplate_dafabe0cba0318b4d28738dab7cc38a903536f5d0cd9a2ffa79c941295066364 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/admin/categorie/new.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/admin/categorie/new.html.twig", 1);
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
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nouvelle Catégorie"), "html", null, true);
        echo "</h1>
        </div>
        ";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 10
            echo "        ";
            if ((($context["error"] ?? $this->getContext($context, "error")) == 2)) {
                // line 11
                echo "            <div class=\"col-lg-12 text-center\">
                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                    ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fill_all", [], "messages"), "html", null, true);
                echo "
                </div>
            </div>
        ";
            } else {
                // line 20
                echo "            <div class=\"col-lg-12 text-center\">
                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                    ";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cat_exist", [], "messages"), "html", null, true);
                echo "
                </div>
            </div>
        ";
            }
            // line 29
            echo "        ";
        }
        // line 30
        echo "        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <div class=\"row row-lg\">


                                    ";
        // line 40
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "col-lg-12 "]]);
        echo "
                                    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "headers", []), "get", [0 => "referer"], "method"), "html", null, true);
        echo "\"/>
                                    <br><br>
";
        // line 56
        echo "
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-xxl-8 col-lg-8\">
                                                <!-- Example Tabs In The Panel -->
                                                <div class=\"panel nav-tabs-horizontal\" data-plugin=\"tabs\">
                                                    <ul class=\"nav nav-tabs nav-tabs-line\" role=\"tablist\">
                                                        <li class=\"nav-item\">
                                                            <a class=\"nav-link active\" id=\"nom_fr\"  style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#nomfr\" aria-controls=\"exampleTopHome\" role=\"tab\" aria-selected=\"true\">
                                                                ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span><span class=\"flag-icon flag-icon-fr\"></span>
                                                            </a>

                                                        </li>
                                                        <li class=\"nav-item\" style=\"\">
                                                            <a class=\"nav-link\" id=\"nom_en\" style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#nomen\" aria-controls=\"exampleTopComponents\" role=\"tab\" aria-selected=\"false\">
                                                                ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span><span class=\"flag-icon flag-icon-gb\"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class=\"panel-body\" style=\"border: 1px solid #d4d4d4;\">
                                                        <div class=\"tab-content\">
                                                            <div class=\"tab-pane active\" id=\"nomfr\" role=\"tabpanel\">

                                                                <div class=\"row row-lg\">
                                                                    <div class=\"col-lg-3 \">
                                                                    </div>

                                                                    <div class=\"col-lg-9 text-left\">
                                                                        ";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class=\"tab-pane\" id=\"nomen\" role=\"tabpanel\">
                                                                <div class=\"row row-lg\">
                                                                    <div class=\"col-lg-3 text-left\" style=\"padding-right: 0px;padding-left: 4px;\">
                                                                    </div>
                                                                    <div class=\"col-lg-9 text-left\">
                                                                        ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom_en", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                                                    </div>
                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Example Tabs In The Panel -->
                                            </div>
                                        </div>
                                    </div>
                                    ";
        // line 155
        echo "



                                    <br><br>
                                    ";
        // line 166
        echo "

                                    <div class=\"row col-lg-12 text-center\">
                                        <div class=\"col-lg-6 text-right\">
                                            <button class=\"btn social-evernote  waves-effect waves-classic\">";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "</button>
                                        </div>
                                        <div class=\"col-lg-6 text-left\">
                                            <a href=\"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_admin_index");
        echo "\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\" class=\"btn   btn-danger waves-effect waves-classic\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</a>
                                        </div>
                                    </div>
                                    ";
        // line 176
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

                                    <br>
                                </div>

                            </div>
                        </div>
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
        return "@Backend/admin/categorie/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 176,  208 => 173,  202 => 170,  196 => 166,  189 => 155,  171 => 99,  156 => 87,  140 => 74,  131 => 68,  117 => 56,  112 => 41,  108 => 40,  96 => 30,  93 => 29,  86 => 25,  79 => 20,  72 => 16,  65 => 11,  62 => 10,  60 => 9,  55 => 7,  51 => 5,  45 => 4,  29 => 1,);
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
            <h1 class=\"page-title\">{{\"Nouvelle Catégorie\"|trans}}</h1>
        </div>
        {% if error is defined %}
        {% if error == 2 %}
            <div class=\"col-lg-12 text-center\">
                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                    {{ \"fill_all\"|trans({}, 'messages') }}
                </div>
            </div>
        {% else %}
            <div class=\"col-lg-12 text-center\">
                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                    {{ \"cat_exist\"|trans({}, 'messages') }}
                </div>
            </div>
        {% endif %}
        {% endif %}
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <div class=\"row row-lg\">


                                    {{ form_start(form, {'attr': {'class': 'col-lg-12 '}}) }}
                                    <input type=\"hidden\" name=\"referer\" value=\"{{app.request.headers.get('referer')}}\"/>
                                    <br><br>
{#
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Nom\"|trans }} :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>

#}

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-xxl-8 col-lg-8\">
                                                <!-- Example Tabs In The Panel -->
                                                <div class=\"panel nav-tabs-horizontal\" data-plugin=\"tabs\">
                                                    <ul class=\"nav nav-tabs nav-tabs-line\" role=\"tablist\">
                                                        <li class=\"nav-item\">
                                                            <a class=\"nav-link active\" id=\"nom_fr\"  style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#nomfr\" aria-controls=\"exampleTopHome\" role=\"tab\" aria-selected=\"true\">
                                                                {{ \"Nom\"|trans }}<span style=\"color: #ED0000\">*</span><span class=\"flag-icon flag-icon-fr\"></span>
                                                            </a>

                                                        </li>
                                                        <li class=\"nav-item\" style=\"\">
                                                            <a class=\"nav-link\" id=\"nom_en\" style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#nomen\" aria-controls=\"exampleTopComponents\" role=\"tab\" aria-selected=\"false\">
                                                                {{ \"Nom\"|trans }}<span style=\"color: #ED0000\">*</span><span class=\"flag-icon flag-icon-gb\"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class=\"panel-body\" style=\"border: 1px solid #d4d4d4;\">
                                                        <div class=\"tab-content\">
                                                            <div class=\"tab-pane active\" id=\"nomfr\" role=\"tabpanel\">

                                                                <div class=\"row row-lg\">
                                                                    <div class=\"col-lg-3 \">
                                                                    </div>

                                                                    <div class=\"col-lg-9 text-left\">
                                                                        {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}


                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class=\"tab-pane\" id=\"nomen\" role=\"tabpanel\">
                                                                <div class=\"row row-lg\">
                                                                    <div class=\"col-lg-3 text-left\" style=\"padding-right: 0px;padding-left: 4px;\">
                                                                    </div>
                                                                    <div class=\"col-lg-9 text-left\">
                                                                        {{ form_widget(form.nom_en, {'attr': {'class': 'form-control'}}) }}

                                                                    </div>
                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Example Tabs In The Panel -->
                                            </div>
                                        </div>
                                    </div>
                                    {#
                                     <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                            </div>

                                            <div class=\"col-lg-6 text-left\">
                                                <div class=\"checkbox-custom checkbox-primary center-block\">
                                                    {{ form_widget(form.isFood, {'attr': {'class': 'form-control'}}) }}
                                                    <label for=\"inputChecked\">{{ \"Alimentaire\"|trans }} ?</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                            </div>

                                            <div class=\"col-lg-6 text-left\">
                                                <div class=\"checkbox-custom checkbox-primary center-block\">
                                                    {{ form_widget(form.isAuto, {'attr': {'class': 'form-control'}}) }}
                                                    <label for=\"inputChecked\">Auto ?</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                            </div>

                                            <div class=\"col-lg-6 text-left\">
                                                <div class=\"checkbox-custom checkbox-primary center-block\">
                                                    {{ form_widget(form.isClothing, {'attr': {'class': 'form-control'}}) }}
                                                    <label for=\"inputChecked\">{{\"Vêtements\"|trans}} ?</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    #}




                                    <br><br>
                                    {#
                                           <div class=\"col-lg-12 text-center\">
                                        <button class=\"float-right btn md-edit social-evernote waves-effect waves-classic waves-effect waves-classic waves-effect waves-classic\">
                                            {{ 'Enregistrer'|trans }}</button>
                                    </div>
                                    #}


                                    <div class=\"row col-lg-12 text-center\">
                                        <div class=\"col-lg-6 text-right\">
                                            <button class=\"btn social-evernote  waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>
                                        </div>
                                        <div class=\"col-lg-6 text-left\">
                                            <a href=\"{{ path('categorie_admin_index') }}\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\" class=\"btn   btn-danger waves-effect waves-classic\">{{ 'back'|trans }}</a>
                                        </div>
                                    </div>
                                    {{ form_end(form) }}

                                    <br>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



{% endblock %}
", "@Backend/admin/categorie/new.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\admin\\categorie\\new.html.twig");
    }
}
