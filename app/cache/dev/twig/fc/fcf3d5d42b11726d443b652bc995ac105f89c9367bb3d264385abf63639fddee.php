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

/* @Backend/admin/categorie/index.html.twig */
class __TwigTemplate_ae1449e75d297fcad9051f65dffdd5c08f3027783150c87fdd4bc88833cf6030 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/admin/categorie/index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/admin/categorie/index.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_admin_new");
        echo "\" style=\"margin-top: 3px;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter"), "html", null, true);
        echo "
                        </a>
                    </div>
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
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filtre"), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;padding: 0px 20px;\">
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_admin_index");
        echo "\" method=\"get\">
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\">
                                                <label class=\"control-label\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
        echo "</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"";
        // line 45
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
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExportCategorieAdmin");
        echo "\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                                                    <i class=\"icon md-download\" aria-hidden=\"true\"></i> ";
        // line 53
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
                                <tr >
                                    <th  style=\"width: 40%;padding-left: 20px;\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo "</th>

                                    ";
        // line 94
        echo "                                    <th style=\"width: 20%\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("statut"), "html", null, true);
        echo "</th>
                                    <th class=\"text-center text-nowrap\" style=\"padding-right: 5px;width: 40%\" >Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 101
            echo "                                    <tr >
                                        <td  style=\"padding-left: 20px;\">
                                            ";
            // line 103
            if ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr") || ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "FR"))) {
                // line 104
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", []), "html", null, true);
                echo "

                                            ";
            } else {
                // line 107
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom_en", []), "html", null, true);
                echo "

                                            ";
            }
            // line 110
            echo "                                        </td>


                                        <td >

                                            ";
            // line 115
            if ($this->getAttribute($context["categorie"], "isActive", [])) {
                // line 116
                echo "                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                            ";
            } else {
                // line 119
                echo "                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                            ";
            }
            // line 122
            echo "                                        </td>
                                        ";
            // line 158
            echo "

                                        <td class=\"text-center\" style=\"padding-right: 10px;\">
                                            <a href=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_admin_edit", ["id" => $this->getAttribute($context["categorie"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\"
                                               class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \" title=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
            echo "\"
                                               style=\"color: #b1b1b1;border: 1px solid;\"></a>

                                            ";
            // line 165
            if ($this->getAttribute($context["categorie"], "isActive", [])) {
                // line 166
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_admin_disable", ["id" => $this->getAttribute($context["categorie"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("deactivate"), "html", null, true);
                echo "\"
                                                   class=\"btn btn-pure btn-default  md-lock \"
                                                   style=\"color: #b1b1b1;border: 1px solid;\"></a>
                                            ";
            } else {
                // line 170
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_admin_disable", ["id" => $this->getAttribute($context["categorie"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activer"), "html", null, true);
                echo "\"
                                                   class=\"btn btn-pure btn-default  md-lock-open  waves-effect waves-classic \"
                                                   style=\"color: #46bf8c;border: 1px solid;\"></a>
                                            ";
            }
            // line 174
            echo "                                            <a data-target=\"#categorie_admin_disable";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
            echo "\" data-toggle=\"modal\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
            echo "\"
                                               class=\"btn btn-pure btn-danger  md-delete waves-effect waves-classic\"
                                               style=\"color: #f02038;border: 1px solid;\"></a>

                                            <div class=\"modal fade\" style=\"top: 111px;z-index: 1711;\"  id=\"categorie_admin_disable";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
            echo "\"   role=\"dialog\">
                                                <div class=\"modal-dialog modal-simple\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                    aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">×</span>
                                                            </button>
                                                            <h4 class=\"modal-title\" id=\"categorie_admin_disable";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("conf_delete"), "html", null, true);
            echo "</h4>
                                                        </div>
                                                        <form action=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_admin_delete", ["id" => $this->getAttribute($context["categorie"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\" method=\"get\">
                                                            <div class=\"modal-body\">
                                                                <h4 style=\"text-align:center\" >";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("msg_conf_delete"), "html", null, true);
            echo "</h4>
                                                            </div>
                                                            <div class=\"panel-footer\">
                                                                <button style=\"margin-left: 80%;width: 100px\" type=\"submit\"
                                                                        class=\"pull-right btn btn-block btn-danger\">";
            // line 194
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_delete"), "html", null, true);
            echo "
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                                </tbody>
                            </table>
                            <div class=\"navigation\">
                                ";
        // line 208
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
        return "@Backend/admin/categorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 208,  326 => 205,  309 => 194,  302 => 190,  297 => 188,  290 => 186,  279 => 178,  269 => 174,  259 => 170,  249 => 166,  247 => 165,  241 => 162,  237 => 161,  232 => 158,  229 => 122,  224 => 119,  219 => 116,  217 => 115,  210 => 110,  203 => 107,  196 => 104,  194 => 103,  190 => 101,  186 => 100,  176 => 94,  171 => 85,  136 => 53,  132 => 52,  118 => 45,  114 => 44,  109 => 42,  100 => 36,  79 => 18,  75 => 17,  68 => 13,  64 => 12,  55 => 6,  51 => 4,  45 => 3,  29 => 1,);
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
                        <a href=\"{{ path('categorie_admin_new') }}\" style=\"margin-top: 3px;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i> {{ \"Ajouter\"|trans }}
                        </a>
                    </div>
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
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"{{ path('categorie_admin_index') }}\" method=\"get\">
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\">
                                                <label class=\"control-label\">{{\"Catégorie\"|trans}}</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"{% if search is defined %}{{search}}{% endif %}\" placeholder={{ \"CategoryName\"|trans }}>

                                            </div>
                                            <div  class=\"col-lg-8  col-md-8 col-xs-8 text-right\">
                                                <button type=\"submit\" style=\"margin-right: 10px;\" class=\" btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>

                                                <a href=\"{{ path('ExportCategorieAdmin') }}\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
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
                                <tr >
                                    <th  style=\"width: 40%;padding-left: 20px;\">{{ \"Nom\"|trans }}</th>

                                    {#
                                    <th class=\"text-center\" style=\"width: 50%\">{{ \"Alimentaire\"|trans }}?</th>
                                                                        <th class=\"text-center\" style=\"width: 15%\" hidden>Auto?</th>
                                    <th class=\"text-center\" style=\"width: 15%\" hidden>{{\"Vêtements\"|trans}}?</th>
                                    <th class=\"text-center\" style=\"width: 15%\" hidden>{{\"Autre\"|trans}}?</th>

                                    #}
                                    <th style=\"width: 20%\">{{\"statut\"|trans}}</th>
                                    <th class=\"text-center text-nowrap\" style=\"padding-right: 5px;width: 40%\" >Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                {% for categorie in categories %}
                                    <tr >
                                        <td  style=\"padding-left: 20px;\">
                                            {% if app.request.getLocale()  == 'fr' or app.request.getLocale()  == 'FR' %}
                                                {{ categorie.nom }}

                                            {% else %}
                                                {{ categorie.nom_en }}

                                            {% endif %}
                                        </td>


                                        <td >

                                            {% if categorie.isActive %}
                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                            {% else %}
                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                            {% endif %}
                                        </td>
                                        {#
                                             <td class=\"text-center\" hidden>
                                            {% if categorie.isFood == false %}
                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>
                                            {% else %}
                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>
                                            {% endif %}
                                        </td>
                                        <td class=\"text-center\" hidden>
                                            {% if categorie.isAuto == false %}
                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>
                                            {% else %}
                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>
                                            {% endif %}
                                        </td>
                                        <td class=\"text-center\" hidden>
                                            {% if categorie.isClothing == false %}
                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>
                                            {% else %}
                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>
                                            {% endif %}
                                        </td>



                                        <td class=\"text-center\" hidden>
                                            {% if (categorie.isClothing == false) and  (categorie.isAuto == false) and (categorie.isFood == false) %}
                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                            {% else %}

                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>
                                            {% endif %}
                                        </td>
                                        #}


                                        <td class=\"text-center\" style=\"padding-right: 10px;\">
                                            <a href=\"{{ path('categorie_admin_edit',{'id':categorie.id , 'page': page}) }}\"
                                               class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \" title=\"{{ \"edit\"|trans }}\"
                                               style=\"color: #b1b1b1;border: 1px solid;\"></a>

                                            {% if categorie.isActive %}
                                                <a href=\"{{ path('categorie_admin_disable',{'id':categorie.id, 'page': page}) }}\" title=\"{{ \"deactivate\"|trans }}\"
                                                   class=\"btn btn-pure btn-default  md-lock \"
                                                   style=\"color: #b1b1b1;border: 1px solid;\"></a>
                                            {% else %}
                                                <a href=\"{{ path('categorie_admin_disable',{'id':categorie.id, 'page': page}) }}\" title=\"{{ \"activer\"|trans }}\"
                                                   class=\"btn btn-pure btn-default  md-lock-open  waves-effect waves-classic \"
                                                   style=\"color: #46bf8c;border: 1px solid;\"></a>
                                            {% endif %}
                                            <a data-target=\"#categorie_admin_disable{{ categorie.id }}\" data-toggle=\"modal\" title=\"{{ \"delete\"|trans }}\"
                                               class=\"btn btn-pure btn-danger  md-delete waves-effect waves-classic\"
                                               style=\"color: #f02038;border: 1px solid;\"></a>

                                            <div class=\"modal fade\" style=\"top: 111px;z-index: 1711;\"  id=\"categorie_admin_disable{{ categorie.id }}\"   role=\"dialog\">
                                                <div class=\"modal-dialog modal-simple\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                    aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">×</span>
                                                            </button>
                                                            <h4 class=\"modal-title\" id=\"categorie_admin_disable{{ categorie.id }}\">{{ 'conf_delete'|trans }}</h4>
                                                        </div>
                                                        <form action=\"{{ path('categorie_admin_delete', { 'id': categorie.id, 'page': page }) }}\" method=\"get\">
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
", "@Backend/admin/categorie/index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\admin\\categorie\\index.html.twig");
    }
}
