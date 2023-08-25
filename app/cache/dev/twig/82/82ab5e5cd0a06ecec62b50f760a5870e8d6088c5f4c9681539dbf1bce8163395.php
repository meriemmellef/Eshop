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

/* @Backend/gestionnaire/categorie/index.html.twig */
class __TwigTemplate_da59d423a72a7798b6bc4d3ff4b78a42fd1d7d11e17b082c860a7aace4a8e52b extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gestionnaire/categorie/index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/gestionnaire/categorie/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 4
        echo "    <div class=\"page\">
        <div class=\"page-header\">
            <h1 class=\"page-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Catégories"), "html", null, true);
        echo "</h1>

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-6 \">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color: #f02138;margin-bottom: -5px!important;\"> ";
        // line 12
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["nbcategories"] ?? $this->getContext($context, "nbcategories"))), "html", null, true);
        echo "</h4>
                            <small style=\"color: #505050;\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégories"), "html", null, true);
        echo " </small>
                        </div>
                    </div>
                    <div class=\"col-lg-6 \">
                        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_new");
        echo "\" style=\"margin-top: 3px;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter"), "html", null, true);
        echo "
                        </a>
                    </div>

                    ";
        // line 29
        echo "

                </div>
            </div>
        </div>
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
                                    <th style=\"border: none;padding-left: 20px\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filtre"), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;padding: 0px 20px;\">
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
        echo "\" method=\"get\">
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\">
                                                <label class=\"control-label\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
        echo "</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"";
        // line 55
        if ((isset($context["search"]) || array_key_exists("search", $context))) {
            echo twig_escape_filter($this->env, ($context["search"] ?? $this->getContext($context, "search")), "html", null, true);
        }
        echo "\" placeholder=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CategoryName"), "html", null, true);
        echo ">

                                            </div>
                                            <div  class=\"col-lg-8  col-md-8 col-xs-8 text-right\">
                                                <button type=\"submit\" style=\"margin-right: 10px;\" class=\" btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>

                                                <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExportCategorie");
        echo "\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                                                    <i class=\"icon md-download\" aria-hidden=\"true\"></i> ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("exporter"), "html", null, true);
        echo "</a>
                                            </div>
                                        </form>

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
                            <!-- Example Bordered Table -->

                            <table class=\"table table-striped\">
                                <thead>
                                <tr class=\"\">
                                    <th style=\"width: 70%;padding-left: 20px;\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo "</th>
                                    <th  style=\"width: 10%\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Est Active"), "html", null, true);
        echo "?</th>
                                    ";
        // line 104
        echo "                                    <th class=\"text-center\" style=\"padding-right: 20px;width: 20%\" >Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 110
            echo "                                    <tr >
                                        <td  style=\"padding-left: 20px;\">
                                            ";
            // line 112
            if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                // line 113
                echo "                                                ";
                if (($this->getAttribute($context["categorie"], "nom", [], "any", true, true) &&  !(null === $this->getAttribute($context["categorie"], "nom", [])))) {
                    // line 114
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", []), "html", null, true);
                    echo "

                                                ";
                } else {
                    // line 117
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom_en", []), "html", null, true);
                    echo "

                                                ";
                }
                // line 120
                echo "                                            ";
            } else {
                // line 121
                echo "                                                ";
                if (($this->getAttribute($context["categorie"], "nom_en", [], "any", true, true) &&  !(null === $this->getAttribute($context["categorie"], "nom_en", [])))) {
                    // line 122
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom_en", []), "html", null, true);
                    echo "

                                                ";
                } else {
                    // line 125
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", []), "html", null, true);
                    echo "

                                                ";
                }
                // line 128
                echo "
                                            ";
            }
            // line 130
            echo "                                        </td>
                                        ";
            // line 165
            echo "
                                        <td >

                                            ";
            // line 168
            if ((null === $this->getAttribute($context["categorie"], "pays", []))) {
                // line 169
                echo "                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                            ";
            } else {
                // line 172
                echo "


                                                ";
                // line 175
                if ($this->getAttribute($context["categorie"], "isActive", [])) {
                    // line 176
                    echo "                                                    <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                                ";
                } else {
                    // line 179
                    echo "
                                                    <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                                ";
                }
                // line 183
                echo "
                                            ";
            }
            // line 185
            echo "


                                        </td>


                                        <td class=\"text-center\" style=\"min-width: 130px;padding-right: 10px;\">

                                            ";
            // line 193
            if ((null === $this->getAttribute($context["categorie"], "pays", []))) {
                // line 194
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_activer", ["checkboxvar" => $this->getAttribute($context["categorie"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activer"), "html", null, true);
                echo "\" class=\"btn md-lock-open\" style=\"color: #46bf8c!important;background-color: #ffffff !important;border: 1px solid;\"></a>

                                            ";
            } else {
                // line 197
                echo "
                                                ";
                // line 198
                if ($this->getAttribute($context["categorie"], "isActive", [])) {
                    // line 199
                    echo "                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_disable", ["id" => $this->getAttribute($context["categorie"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("deactivate"), "html", null, true);
                    echo "\"
                                                       class=\"btn btn-pure btn-default  md-lock \"
                                                       style=\"color: #b1b1b1;border: 1px solid;\"></a>
                                                ";
                } else {
                    // line 203
                    echo "                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_disable", ["id" => $this->getAttribute($context["categorie"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activer"), "html", null, true);
                    echo "\"
                                                       class=\"btn btn-pure btn-default  md-lock-open  waves-effect waves-classic \"
                                                       style=\"color: #46bf8c;border: 1px solid;\"></a>
                                                ";
                }
                // line 207
                echo "

                                                <a href=\"";
                // line 209
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_edit", ["id" => $this->getAttribute($context["categorie"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
                echo "\"
                                                   class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \"
                                                   style=\"color: #b1b1b1;border: 1px solid;\"></a>

                                                <a data-target=\"#categorie_disable";
                // line 213
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                echo "\" data-toggle=\"modal\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
                echo "\"
                                                   class=\"btn btn-pure btn-danger  md-delete waves-effect waves-classic\"
                                                   style=\"color: #f02038;border: 1px solid;\"></a>


                                                <div class=\"modal fade\" id=\"categorie_disable";
                // line 218
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                echo "\" aria-hidden=\"true\"
                                                     aria-labelledby=\"exampleModalTabs\"
                                                     role=\"dialog\" tabindex=\"-1\">
                                                    <div class=\"modal-dialog modal-simple\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                        aria-label=\"Close\">
                                                                    <span aria-hidden=\"true\">×</span>
                                                                </button>
                                                                <h4 class=\"modal-title\" id=\"categorie_disable";
                // line 228
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("conf_delete"), "html", null, true);
                echo "</h4>
                                                            </div>
                                                            <form action=\"";
                // line 230
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_delete", ["id" => $this->getAttribute($context["categorie"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
                echo "\" method=\"get\">
                                                                <div class=\"modal-body\">
                                                                    <h4 style=\"text-align:center\" >";
                // line 232
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("msg_conf_delete"), "html", null, true);
                echo "</h4>
                                                                </div>
                                                                <div class=\"panel-footer\">
                                                                    <button style=\"margin-left: 80%;width: 100px\" type=\"submit\"
                                                                            class=\"pull-right btn btn-block btn-danger\">";
                // line 236
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_delete"), "html", null, true);
                echo "
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>


                                            ";
            }
            // line 246
            echo "


                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo "                                </tbody>
                            </table>
                            <div class=\"navigation\">
                                ";
        // line 255
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["categories"] ?? $this->getContext($context, "categories")));
        echo "
                            </div>

                            <!-- End Example Bordered Table -->
                        </div>

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
        return "@Backend/gestionnaire/categorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 255,  404 => 252,  393 => 246,  380 => 236,  373 => 232,  368 => 230,  361 => 228,  348 => 218,  338 => 213,  329 => 209,  325 => 207,  315 => 203,  305 => 199,  303 => 198,  300 => 197,  291 => 194,  289 => 193,  279 => 185,  275 => 183,  269 => 179,  264 => 176,  262 => 175,  257 => 172,  252 => 169,  250 => 168,  245 => 165,  242 => 130,  238 => 128,  231 => 125,  224 => 122,  221 => 121,  218 => 120,  211 => 117,  204 => 114,  201 => 113,  199 => 112,  195 => 110,  191 => 109,  184 => 104,  180 => 96,  176 => 95,  141 => 63,  137 => 62,  123 => 55,  119 => 54,  114 => 52,  105 => 46,  86 => 29,  79 => 18,  75 => 17,  68 => 13,  64 => 12,  55 => 6,  51 => 4,  45 => 3,  29 => 1,);
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
            <h1 class=\"page-title\">{{\"Gestion Des Catégories\"|trans}}</h1>

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-6 \">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color: #f02138;margin-bottom: -5px!important;\"> {{ nbcategories|length }}</h4>
                            <small style=\"color: #505050;\">{{\"Catégories\"|trans}} </small>
                        </div>
                    </div>
                    <div class=\"col-lg-6 \">
                        <a href=\"{{ path('categorie_new') }}\" style=\"margin-top: 3px;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i> {{ \"Ajouter\"|trans }}
                        </a>
                    </div>

                    {#
                     <div class=\"col-lg-4 \" >
                        <a  href=\"{{ path('categorie_activer') }}\" style=\"margin-top: 3px;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i> {{ \"Activer\"|trans }}
                        </a>
                    </div>
                    #}


                </div>
            </div>
        </div>
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
                                    <th style=\"border: none;padding-left: 20px\">{{ \"Filtre\"|trans }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;padding: 0px 20px;\">
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"{{ path('categorie_index') }}\" method=\"get\">
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\">
                                                <label class=\"control-label\">{{\"Catégorie\"|trans}}</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"{% if search is defined %}{{search}}{% endif %}\" placeholder={{ \"CategoryName\"|trans }}>

                                            </div>
                                            <div  class=\"col-lg-8  col-md-8 col-xs-8 text-right\">
                                                <button type=\"submit\" style=\"margin-right: 10px;\" class=\" btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>

                                                <a href=\"{{ path('ExportCategorie') }}\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                                                    <i class=\"icon md-download\" aria-hidden=\"true\"></i> {{ \"exporter\"|trans }}</a>
                                            </div>
                                        </form>

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
                            <!-- Example Bordered Table -->

                            <table class=\"table table-striped\">
                                <thead>
                                <tr class=\"\">
                                    <th style=\"width: 70%;padding-left: 20px;\">{{ \"Nom\"|trans }}</th>
                                    <th  style=\"width: 10%\">{{ \"Est Active\" | trans }}?</th>
                                    {#
                                     <th class=\"text-center\" style=\"width: 15%\">{{ \"Alimentaire\"|trans }}?</th>
                                    <th class=\"text-center\" style=\"width: 15%\">{{ \"Auto\"|trans }}?</th>
                                    <th class=\"text-center\" style=\"width: 15%\">{{\"Vêtements\"|trans}}?</th>
                                    <th class=\"text-center\" style=\"width: 15%\">{{\"Autre\"|trans}}?</th>

                                    #}
                                    <th class=\"text-center\" style=\"padding-right: 20px;width: 20%\" >Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                {% for categorie in categories %}
                                    <tr >
                                        <td  style=\"padding-left: 20px;\">
                                            {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                {% if categorie.nom is defined and categorie.nom is not null %}
                                                    {{ categorie.nom }}

                                                {% else %}
                                                    {{ categorie.nom_en }}

                                                {% endif %}
                                            {% else %}
                                                {% if categorie.nom_en is defined and categorie.nom_en is not null %}
                                                    {{ categorie.nom_en }}

                                                {% else %}
                                                    {{ categorie.nom }}

                                                {% endif %}

                                            {% endif %}
                                        </td>
                                        {#

                                        <td class=\"text-center\">
                                            {% if categorie.isFood == false %}
                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>
                                            {% else %}
                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>
                                            {% endif %}
                                        </td>
                                        <td class=\"text-center\">
                                            {% if categorie.isAuto == false %}
                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>
                                            {% else %}
                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>
                                            {% endif %}
                                        </td>
                                        <td class=\"text-center\">
                                            {% if categorie.isClothing == false %}
                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>
                                            {% else %}
                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>
                                            {% endif %}
                                        </td>

                                        <td class=\"text-center\">
                                            {% if (categorie.isClothing == false) and  (categorie.isAuto == false) and (categorie.isFood == false) %}
                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                            {% else %}

                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>
                                            {% endif %}
                                        </td>
                                        #}

                                        <td >

                                            {% if categorie.pays is null %}
                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                            {% else %}



                                                {% if categorie.isActive %}
                                                    <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                                {% else %}

                                                    <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                                {% endif %}

                                            {% endif %}



                                        </td>


                                        <td class=\"text-center\" style=\"min-width: 130px;padding-right: 10px;\">

                                            {% if categorie.pays is null  %}
                                                <a href=\"{{ path('categorie_activer',{'checkboxvar':categorie.id ,'page':page}) }}\" title=\"{{ \"activer\"|trans }}\" class=\"btn md-lock-open\" style=\"color: #46bf8c!important;background-color: #ffffff !important;border: 1px solid;\"></a>

                                            {% else %}

                                                {% if categorie.isActive %}
                                                    <a href=\"{{ path('categorie_disable',{'id':categorie.id,'page':page}) }}\" title=\"{{ \"deactivate\"|trans }}\"
                                                       class=\"btn btn-pure btn-default  md-lock \"
                                                       style=\"color: #b1b1b1;border: 1px solid;\"></a>
                                                {% else %}
                                                    <a href=\"{{ path('categorie_disable',{'id':categorie.id,'page':page}) }}\" title=\"{{ \"activer\"|trans }}\"
                                                       class=\"btn btn-pure btn-default  md-lock-open  waves-effect waves-classic \"
                                                       style=\"color: #46bf8c;border: 1px solid;\"></a>
                                                {% endif %}


                                                <a href=\"{{ path('categorie_edit',{'id':categorie.id,'page':page}) }}\" title=\"{{ \"edit\"|trans }}\"
                                                   class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \"
                                                   style=\"color: #b1b1b1;border: 1px solid;\"></a>

                                                <a data-target=\"#categorie_disable{{ categorie.id }}\" data-toggle=\"modal\" title=\"{{ \"delete\"|trans }}\"
                                                   class=\"btn btn-pure btn-danger  md-delete waves-effect waves-classic\"
                                                   style=\"color: #f02038;border: 1px solid;\"></a>


                                                <div class=\"modal fade\" id=\"categorie_disable{{ categorie.id }}\" aria-hidden=\"true\"
                                                     aria-labelledby=\"exampleModalTabs\"
                                                     role=\"dialog\" tabindex=\"-1\">
                                                    <div class=\"modal-dialog modal-simple\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                        aria-label=\"Close\">
                                                                    <span aria-hidden=\"true\">×</span>
                                                                </button>
                                                                <h4 class=\"modal-title\" id=\"categorie_disable{{ categorie.id }}\">{{ 'conf_delete'|trans }}</h4>
                                                            </div>
                                                            <form action=\"{{ path('categorie_delete', { 'id': categorie.id ,'page':page}) }}\" method=\"get\">
                                                                <div class=\"modal-body\">
                                                                    <h4 style=\"text-align:center\" >{{ 'msg_conf_delete'|trans }}</h4>
                                                                </div>
                                                                <div class=\"panel-footer\">
                                                                    <button style=\"margin-left: 80%;width: 100px\" type=\"submit\"
                                                                            class=\"pull-right btn btn-block btn-danger\">{{ 'label_delete'|trans }}
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>


                                            {% endif %}



                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                            <div class=\"navigation\">
                                {{ knp_pagination_render(categories) }}
                            </div>

                            <!-- End Example Bordered Table -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Panel -->
        </div>

    </div>
{% endblock %}
", "@Backend/gestionnaire/categorie/index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gestionnaire\\categorie\\index.html.twig");
    }
}
