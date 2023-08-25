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

/* BackendBundle:admin/souscategorie:edit.html.twig */
class __TwigTemplate_8d2078ba90b464c248acc51b0cca8a9a383a557c57395024d6e7a079264fcdf2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'page' => [$this, 'block_page'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:admin/souscategorie:edit.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "BackendBundle:admin/souscategorie:edit.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modification Sous Catégorie"), "html", null, true);
        echo "</h1>
        </div>
        ";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 10
            echo "            ";
            if ((($context["error"] ?? $this->getContext($context, "error")) == 2)) {
                // line 11
                echo "                <div class=\"col-lg-12 text-center\">
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
            } elseif ((            // line 19
($context["error"] ?? $this->getContext($context, "error")) == 1)) {
                // line 20
                echo "            <div class=\"col-lg-12 text-center\">
                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                    ";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sous_cat_exist", [], "messages"), "html", null, true);
                echo "
                </div>
            </div>
            ";
            }
            // line 29
            echo "
        ";
        }
        // line 31
        echo "
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <div class=\"row row-lg\">


                                    ";
        // line 42
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "col-lg-12 "]]);
        echo "
                                    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "headers", []), "get", [0 => "referer"], "method"), "html", null, true);
        echo "\"/>


                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-xxl-8 col-lg-8\">
                                                <!-- Example Tabs In The Panel -->
                                                <div class=\"panel nav-tabs-horizontal\" data-plugin=\"tabs\">
                                                    <ul class=\"nav nav-tabs nav-tabs-line\" role=\"tablist\">
                                                        <li class=\"nav-item\" id=\"titleeeone\">
                                                            <a class=\"nav-link active\" id=\"nom_fr\"  style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#nomfr\" aria-controls=\"exampleTopHome\" role=\"tab\" aria-selected=\"true\">
                                                                ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span><span class=\"flag-icon flag-icon-fr\"></span>
                                                            </a>

                                                        </li>

                                                        <li class=\"nav-item\" style=\"\" id=\"titleee\">
                                                            <a class=\"nav-link\" id=\"nom_en\" style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#nomen\" aria-controls=\"exampleTopComponents\" role=\"tab\" aria-selected=\"false\">
                                                                ";
        // line 64
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
        // line 77
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
        // line 89
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
        // line 120
        echo "


                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image"), "html", null, true);
        echo "  :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 141
        if ($this->getAttribute(($context["souscategorie"] ?? $this->getContext($context, "souscategorie")), "image", [])) {
            // line 142
            echo "                                                    <div style=\"padding-top: 20px;\">
                                                        <img class=\"\" style=\"height: 50px;width: auto;  margin-left: auto;  margin-right: auto;  display: block;\"
                                                             src=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/produits/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["souscategorie"] ?? $this->getContext($context, "souscategorie")), "image", []), "html", null, true);
            echo "\"
                                                        >

                                                    </div>
                                                ";
        }
        // line 149
        echo "                                                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imagefile", []), 'widget', ["attr" => ["id" => "input-file-now", "data-plugin" => "dropify", "data-default-file" => "", "style" => "max-height: 100px;max-width:300px"]]);
        echo "
                                                <h6 style=\"color: #ED0000\">";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("image"), "html", null, true);
        echo " ( 400 × 352 px ) ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("maxsize"), "html", null, true);
        echo " (1024k)</h6>

                                            </div>

                                        </div>
                                    </div>
                                    <br><br>
                                    ";
        // line 162
        echo "
                                    <div class=\"row col-lg-12 text-center\">
                                        <div class=\"col-lg-6 text-right\">
                                            <button class=\"btn social-evernote  waves-effect waves-classic\">";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "</button>
                                        </div>
                                        <div class=\"col-lg-6 text-left\">
                                            <a href=\"";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_admin_index");
        echo "\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</a>
                                        </div>
                                    </div>
                                    ";
        // line 171
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

    // line 188
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 189
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>

        \$( \"#save\").click(function() {

            console.log(\"rererere\")
            if ( \$(\"#sous_categorie_nom\").val().length === 0 )
            {

                \$('#titleeeone').find('a').trigger('click');

            }
            if ( \$(\"#sous_categorie_nom_en\").val().length === 0 )
            {

                \$('#titleee').find('a').trigger('click');

            }

        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:admin/souscategorie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 189,  299 => 188,  276 => 171,  268 => 168,  262 => 165,  257 => 162,  245 => 150,  240 => 149,  231 => 144,  227 => 142,  225 => 141,  219 => 138,  208 => 130,  202 => 127,  193 => 120,  174 => 89,  159 => 77,  143 => 64,  133 => 57,  116 => 43,  112 => 42,  99 => 31,  95 => 29,  88 => 25,  81 => 20,  79 => 19,  73 => 16,  66 => 11,  63 => 10,  61 => 9,  56 => 7,  52 => 5,  46 => 4,  30 => 1,);
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
            <h1 class=\"page-title\">{{\"Modification Sous Catégorie\"|trans}}</h1>
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
            {% elseif error ==1 %}
            <div class=\"col-lg-12 text-center\">
                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                    {{ \"sous_cat_exist\"|trans({}, 'messages') }}
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


                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-xxl-8 col-lg-8\">
                                                <!-- Example Tabs In The Panel -->
                                                <div class=\"panel nav-tabs-horizontal\" data-plugin=\"tabs\">
                                                    <ul class=\"nav nav-tabs nav-tabs-line\" role=\"tablist\">
                                                        <li class=\"nav-item\" id=\"titleeeone\">
                                                            <a class=\"nav-link active\" id=\"nom_fr\"  style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#nomfr\" aria-controls=\"exampleTopHome\" role=\"tab\" aria-selected=\"true\">
                                                                {{ \"Nom\"|trans }}<span style=\"color: #ED0000\">*</span><span class=\"flag-icon flag-icon-fr\"></span>
                                                            </a>

                                                        </li>

                                                        <li class=\"nav-item\" style=\"\" id=\"titleee\">
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
                                    was
                                     <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-xxl-8 col-lg-8\">
                                                <h6 style=\"color: #ED0000\">{{ form_errors(form.nom) }}</h6>
                                                <h6 style=\"color: #ED0000\">{{ form_errors(form.nom_en) }}</h6>

                                            </div>
                                        </div>
                                    </div>
                                    #}



                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{\"Catégorie\"|trans}} <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Image\"|trans }}  :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {% if souscategorie.image %}
                                                    <div style=\"padding-top: 20px;\">
                                                        <img class=\"\" style=\"height: 50px;width: auto;  margin-left: auto;  margin-right: auto;  display: block;\"
                                                             src=\"{{ asset('uploads/produits/') }}{{ souscategorie.image }}\"
                                                        >

                                                    </div>
                                                {% endif %}
                                                {{ form_widget(form.imagefile, {'attr': {'id': 'input-file-now', 'data-plugin':'dropify','data-default-file': '','style' : 'max-height: 100px;max-width:300px'}}) }}
                                                <h6 style=\"color: #ED0000\">{{ \"image\"|trans }} ( 400 × 352 px ) {{ \"maxsize\"|trans }} (1024k)</h6>

                                            </div>

                                        </div>
                                    </div>
                                    <br><br>
                                    {#
                                       <div class=\"col-lg-12 text-center\">
                                        <button class=\"float-right btn md-edit social-evernote waves-effect waves-classic waves-effect waves-classic waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>
                                    </div>
                                    #}

                                    <div class=\"row col-lg-12 text-center\">
                                        <div class=\"col-lg-6 text-right\">
                                            <button class=\"btn social-evernote  waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>
                                        </div>
                                        <div class=\"col-lg-6 text-left\">
                                            <a href=\"{{ path('sous_categorie_admin_index') }}\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">{{ 'back'|trans }}</a>
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

{% block javascripts %}
    {{ parent() }}

    <script>

        \$( \"#save\").click(function() {

            console.log(\"rererere\")
            if ( \$(\"#sous_categorie_nom\").val().length === 0 )
            {

                \$('#titleeeone').find('a').trigger('click');

            }
            if ( \$(\"#sous_categorie_nom_en\").val().length === 0 )
            {

                \$('#titleee').find('a').trigger('click');

            }

        });

    </script>
{% endblock %}
", "BackendBundle:admin/souscategorie:edit.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/admin/souscategorie/edit.html.twig");
    }
}
