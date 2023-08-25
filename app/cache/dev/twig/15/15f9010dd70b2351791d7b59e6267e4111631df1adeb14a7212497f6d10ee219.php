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

/* BackendBundle:gestionnaire/souscategorie:activer_sous_categorie.html.twig */
class __TwigTemplate_66284d4062f1e60b86a0f6bd4f0a7663a5099a1920543c58c789ba9c53044762 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:gestionnaire/souscategorie:activer_sous_categorie.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "BackendBundle:gestionnaire/souscategorie:activer_sous_categorie.html.twig", 1);
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
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégories"), "html", null, true);
        echo "</h1>

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color: #f02138;margin-bottom: 0px!important;\"> ";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["nbsouscategories"] ?? $this->getContext($context, "nbsouscategories"))), "html", null, true);
        echo "</h4>
                            <small style=\"\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégories"), "html", null, true);
        echo "</small>
                        </div>
                    </div>
                    <div class=\"col-lg-6 \" >


                    </div>
                </div>
            </div>
        </div>
        <form  action=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_activer");
        echo "\" method=\"get\">

            <div class=\"page-content\" style=\"padding-top: 0 !important;padding-bottom: 0 !important;\">
                <!-- Panel -->
                <div class=\"panel\" >
                    <div class=\"panel-body container-fluid\" style=\"padding: 0 !important;\">
                        <div class=\"row row-lg\">


                            <div class=\"col-lg-12\">
                                <!-- Example Bordered Table -->
                                <table class=\"table table-bordered\" style=\"border: none;\">
                                    <thead>
                                    <tr style=\"border-bottom: 1px solid #f3f3f3;\">
                                        <th style=\"border: none;\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filtre"), "html", null, true);
        echo "</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class=\"row\" style=\"border: none;\">
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\">
                                                <label class=\"control-label\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégories"), "html", null, true);
        echo "</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"";
        // line 48
        if ((isset($context["search"]) || array_key_exists("search", $context))) {
            echo twig_escape_filter($this->env, ($context["search"] ?? $this->getContext($context, "search")), "html", null, true);
        }
        echo "\" >
                                            </div>

                                            <div style=\"padding-top: 10px\"  class=\"col-lg-3  col-md-3 col-xs-3 text-right\">
                                                <button type=\"submit\" style=\"margin-right: 10px;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i>
                                                </button>

                                                <button type=\"submit\" style=\"margin-right: 10px;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activer"), "html", null, true);
        echo "
                                                </button>

                                            </div>




                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <!-- End Example Bordered Table -->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Panel -->
            </div>
            <div class=\"page-content\" style=\"padding-top: 0px \" >
                <!-- Panel -->
                <div class=\"panel\">
                    <div class=\"panel-body container-fluid\"  style=\"padding-left: 0px !important;padding-right: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;\">
                        <div class=\"row row-lg\">


                            <div class=\"col-lg-12\">


                                <table class=\"table table-striped\">
                                    <thead>
                                    <tr >

                                        <th style=\"width: 20%;padding-left: 20px;\" >";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activer"), "html", null, true);
        echo "</th>
                                        ";
        // line 97
        echo "                                        <th style=\"width: 40%\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo "</th>
                                        <th style=\"width: 40%\">";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action"), "html", null, true);
        echo "</th>
                                    </tr>
                                    </thead>
                                    <tbody>



                                    ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["souscategories"] ?? $this->getContext($context, "souscategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["scategorie"]) {
            // line 106
            echo "


                                        <tr >

                                            <td  style=\"padding-left: 20px ;vertical-align: middle\">
                                                <div class=\"checkbox-custom checkbox-primary center-block float-left\">
                                                    <input id=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["scategorie"], "id", []), "html", null, true);
            echo "\" type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["scategorie"], "id", []), "html", null, true);
            echo "\"
                                                           name='checkboxvar[]'>

                                                    <label for=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["scategorie"], "id", []), "html", null, true);
            echo "\" class=\"namecategorie\"></label>
                                                </div>

                                            </td>
                                            ";
            // line 128
            echo "
                                            <td style=\"    vertical-align: middle;\">
                                                <div class=\"media-body\">
                                                    <h5 class=\"mt-0 mb-5\">
                                                        ";
            // line 132
            if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                // line 133
                echo "                                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["scategorie"], "nom_en", []), "html", null, true);
                echo "
                                                        ";
            } else {
                // line 135
                echo "                                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["scategorie"], "nom", []), "html", null, true);
                echo "
                                                        ";
            }
            // line 137
            echo "
                                                    </h5>
                                                </div>
                                            </td>

                                            <td style=\" vertical-align: middle;\">
                                                ";
            // line 146
            echo "                                                <a
                                                   class=\"btn md-lock-open\"
                                                   style=\"color: #ffffff!important;background-color: #46bf8c !important;border: 1px solid;\"></a>

                                            </td>

                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scategorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                                    </tbody>
                                </table>

                                <div class=\"navigation\">
                                    ";
        // line 158
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["souscategories"] ?? $this->getContext($context, "souscategories")));
        echo "
                                </div>

                                <!-- End Example Bordered Table -->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Panel -->
            </div>

        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 173
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 174
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
    <script>



        \$('#CheckAll').click(function () {

            if (\$('#CheckAll').is(':checked') == true) {

                alert(\";)\");
            }
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:gestionnaire/souscategorie:activer_sous_categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 174,  283 => 173,  261 => 158,  255 => 154,  242 => 146,  234 => 137,  228 => 135,  222 => 133,  220 => 132,  214 => 128,  207 => 116,  199 => 113,  190 => 106,  186 => 105,  176 => 98,  171 => 97,  167 => 92,  129 => 57,  115 => 48,  111 => 47,  101 => 40,  84 => 26,  71 => 16,  67 => 15,  58 => 9,  52 => 5,  46 => 4,  30 => 1,);
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
            <h1 class=\"page-title\">{{ \"Sous Catégories\"|trans }}</h1>

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color: #f02138;margin-bottom: 0px!important;\"> {{ nbsouscategories|length }}</h4>
                            <small style=\"\">{{ \"Sous Catégories\"|trans }}</small>
                        </div>
                    </div>
                    <div class=\"col-lg-6 \" >


                    </div>
                </div>
            </div>
        </div>
        <form  action=\"{{ path('sous_categorie_activer') }}\" method=\"get\">

            <div class=\"page-content\" style=\"padding-top: 0 !important;padding-bottom: 0 !important;\">
                <!-- Panel -->
                <div class=\"panel\" >
                    <div class=\"panel-body container-fluid\" style=\"padding: 0 !important;\">
                        <div class=\"row row-lg\">


                            <div class=\"col-lg-12\">
                                <!-- Example Bordered Table -->
                                <table class=\"table table-bordered\" style=\"border: none;\">
                                    <thead>
                                    <tr style=\"border-bottom: 1px solid #f3f3f3;\">
                                        <th style=\"border: none;\">{{ \"Filtre\"|trans }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class=\"row\" style=\"border: none;\">
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\">
                                                <label class=\"control-label\">{{ \"Sous Catégories\"|trans }}</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"{% if search is defined %}{{search}}{% endif %}\" >
                                            </div>

                                            <div style=\"padding-top: 10px\"  class=\"col-lg-3  col-md-3 col-xs-3 text-right\">
                                                <button type=\"submit\" style=\"margin-right: 10px;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i>
                                                </button>

                                                <button type=\"submit\" style=\"margin-right: 10px;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    {{ \"Activer\"|trans }}
                                                </button>

                                            </div>




                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <!-- End Example Bordered Table -->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Panel -->
            </div>
            <div class=\"page-content\" style=\"padding-top: 0px \" >
                <!-- Panel -->
                <div class=\"panel\">
                    <div class=\"panel-body container-fluid\"  style=\"padding-left: 0px !important;padding-right: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;\">
                        <div class=\"row row-lg\">


                            <div class=\"col-lg-12\">


                                <table class=\"table table-striped\">
                                    <thead>
                                    <tr >

                                        <th style=\"width: 20%;padding-left: 20px;\" >{{ \"Activer\"|trans }}</th>
                                        {#
                                                                                <th style=\"padding-left: 20px;width: 40%;\" hidden>{{ \"Image\"|trans }}</th>

                                        #}
                                        <th style=\"width: 40%\">{{ \"Nom\"|trans }}</th>
                                        <th style=\"width: 40%\">{{ \"Action\"|trans }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>



                                    {% for scategorie in souscategories %}



                                        <tr >

                                            <td  style=\"padding-left: 20px ;vertical-align: middle\">
                                                <div class=\"checkbox-custom checkbox-primary center-block float-left\">
                                                    <input id=\"{{ scategorie.id }}\" type=\"checkbox\" value=\"{{ scategorie.id }}\"
                                                           name='checkboxvar[]'>

                                                    <label for=\"{{ scategorie.id }}\" class=\"namecategorie\"></label>
                                                </div>

                                            </td>
                                            {#
                                              <td style=\"padding-left: 20px;\" hidden>
                                                {% if scategorie.image %}
                                                    <img class=\"navbar-brand-logo\" style=\"height: 50px;width: auto;\" src=\"{{ asset('uploads/produits/') }}{{ scategorie.image }}\">
                                                {% endif %}
                                            </td>

                                            #}

                                            <td style=\"    vertical-align: middle;\">
                                                <div class=\"media-body\">
                                                    <h5 class=\"mt-0 mb-5\">
                                                        {% if pays.frontLanguage  == 'en' or pays.frontLanguage  == 'EN'  %}
                                                            {{ scategorie.nom_en}}
                                                        {% else %}
                                                            {{ scategorie.nom}}
                                                        {% endif %}

                                                    </h5>
                                                </div>
                                            </td>

                                            <td style=\" vertical-align: middle;\">
                                                {#
                                                href=\"{{ path('sous_categorie_admin_edit',{'id':souscategorie.id}) }}\"
                                                #}
                                                <a
                                                   class=\"btn md-lock-open\"
                                                   style=\"color: #ffffff!important;background-color: #46bf8c !important;border: 1px solid;\"></a>

                                            </td>

                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>

                                <div class=\"navigation\">
                                    {{ knp_pagination_render(souscategories) }}
                                </div>

                                <!-- End Example Bordered Table -->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Panel -->
            </div>

        </form>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
    <script>



        \$('#CheckAll').click(function () {

            if (\$('#CheckAll').is(':checked') == true) {

                alert(\";)\");
            }
        });

    </script>
{% endblock %}
", "BackendBundle:gestionnaire/souscategorie:activer_sous_categorie.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/gestionnaire/souscategorie/activer_sous_categorie.html.twig");
    }
}
