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

/* BackendBundle:admin/souscategorie:index.html.twig */
class __TwigTemplate_7c1782abbc0e55812b832ce74de400f9bbd19a880505efe34f7a50419daebd05 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:admin/souscategorie:index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "BackendBundle:admin/souscategorie:index.html.twig", 1);
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
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Sous Catégories"), "html", null, true);
        echo "</h1>

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-6 \">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color: #f02138;margin-bottom: -5px!important;\"> ";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["nbsouscategories"] ?? $this->getContext($context, "nbsouscategories"))), "html", null, true);
        echo "</h4>
                            <small style=\"color: #505050;\"> ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégories"), "html", null, true);
        echo " </small>
                        </div>
                    </div>
                    <div class=\"col-lg-6 \">
                        <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_admin_new");
        echo "\" style=\"margin-top: 3px;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i> ";
        // line 21
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
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filtre"), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;padding: 0px 20px;\">
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_admin_index");
        echo "\" method=\"get\">
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\">
                                                <label class=\"control-label\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégorie"), "html", null, true);
        echo "</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"";
        // line 48
        if ((isset($context["search"]) || array_key_exists("search", $context))) {
            echo twig_escape_filter($this->env, ($context["search"] ?? $this->getContext($context, "search")), "html", null, true);
        }
        echo "\" placeholder=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("subCategoryName"), "html", null, true);
        echo " >

                                            </div>
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\"  style=\"z-index: 1\">
                                                <label class=\"control-label\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
        echo "</label>
                                                <select class=\"form-control\" name=\"categorie_id\" placeholder=";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une catégorie"), "html", null, true);
        echo ">
                                                    <option value=\"\" disabled selected hidden>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une catégorie"), "html", null, true);
        echo "</option>
                                                    ";
        // line 55
        if ((($context["categorie_id"] ?? $this->getContext($context, "categorie_id")) == "")) {
            // line 56
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                            ";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        } else {
            // line 60
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                            ";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        }
        // line 64
        echo "
                                                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 66
            echo "                                                        ";
            if ((isset($context["categorie_id"]) || array_key_exists("categorie_id", $context))) {
                // line 67
                echo "                                                            ";
                if ((($context["categorie_id"] ?? $this->getContext($context, "categorie_id")) == $this->getAttribute($context["categorie"], "id", []))) {
                    // line 68
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\" selected>

                                                                    ";
                    // line 70
                    if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr")) {
                        // line 71
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", []), "html", null, true);
                        echo "

                                                                    ";
                    } else {
                        // line 74
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom_en", []), "html", null, true);
                        echo "

                                                                    ";
                    }
                    // line 77
                    echo "                                                                </option>
                                                            ";
                } else {
                    // line 79
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\">

                                                                    ";
                    // line 81
                    if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr")) {
                        // line 82
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", []), "html", null, true);
                        echo "

                                                                    ";
                    } else {
                        // line 85
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom_en", []), "html", null, true);
                        echo "

                                                                    ";
                    }
                    // line 87
                    echo "                                                                </option>
                                                            ";
                }
                // line 89
                echo "                                                        ";
            } else {
                // line 90
                echo "                                                            <option class=\"dropdown-item\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                echo "\" role=\"menuitem\">

                                                                ";
                // line 92
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr")) {
                    // line 93
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", []), "html", null, true);
                    echo "

                                                                ";
                } else {
                    // line 96
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom_en", []), "html", null, true);
                    echo "

                                                                ";
                }
                // line 98
                echo "                                                            </option>
                                                        ";
            }
            // line 100
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                                                </select>
                                            </div>
                                            <div  class=\"col-lg-4  col-md-4 col-xs-4 text-right\">
                                                <button   style=\"margin-right: 10px;\" type=\"submit\" class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>

                                                <a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExportSousCategorieAdmin");
        echo "\"  class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                                                    <i class=\"icon md-download\" aria-hidden=\"true\"></i> ";
        // line 108
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
                                    ";
        // line 142
        echo "                                    <th style=\"width: 30%\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 30%\">";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 20%\">";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("statut"), "html", null, true);
        echo "</th>
                                    <th class=\"text-center text-nowrap\" style=\"padding-right: 10px;width: 20%\">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["souscategories"] ?? $this->getContext($context, "souscategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["souscategorie"]) {
            // line 151
            echo "
                                    <tr >
                                        ";
            // line 160
            echo "
                                        <td>

                                            ";
            // line 163
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr")) {
                // line 164
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["souscategorie"], "nom", []), "html", null, true);
                echo "

                                            ";
            } else {
                // line 167
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["souscategorie"], "nom_en", []), "html", null, true);
                echo "

                                            ";
            }
            // line 170
            echo "                                        </td>

                                        <td >

                                            ";
            // line 174
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr")) {
                // line 175
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["souscategorie"], "categorie", []), "nom", []), "html", null, true);
                echo "

                                            ";
            } else {
                // line 178
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["souscategorie"], "categorie", []), "nom_en", []), "html", null, true);
                echo "

                                            ";
            }
            // line 181
            echo "                                        </td>

                                        <td >

                                            ";
            // line 185
            if ($this->getAttribute($context["souscategorie"], "isActive", [])) {
                // line 186
                echo "                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                            ";
            } else {
                // line 189
                echo "                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                            ";
            }
            // line 192
            echo "                                        </td>
                                        <td class=\"text-center\"  style=\"padding-right: 10px;min-width: 130px; vertical-align: middle;\">
                                            <a href=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_admin_edit", ["id" => $this->getAttribute($context["souscategorie"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
            echo "\"
                                               class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \"
                                               style=\"color: #b1b1b1;border: 1px solid;\"></a>

                                            ";
            // line 198
            if ($this->getAttribute($context["souscategorie"], "isActive", [])) {
                // line 199
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_admin_disable", ["id" => $this->getAttribute($context["souscategorie"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("deactivate"), "html", null, true);
                echo "\"
                                                   class=\"btn btn-pure btn-default  md-lock \"
                                                   style=\"color: #b1b1b1;border: 1px solid;\"></a>
                                            ";
            } else {
                // line 203
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_admin_disable", ["id" => $this->getAttribute($context["souscategorie"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activer"), "html", null, true);
                echo "\"
                                                   class=\"btn btn-pure btn-default  md-lock-open  waves-effect waves-classic \"
                                                   style=\"color: #46bf8c;border: 1px solid;\"></a>
                                            ";
            }
            // line 207
            echo "




                                            <a data-target=\"#sous_categorie_admin_disable";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($context["souscategorie"], "id", []), "html", null, true);
            echo "\" data-toggle=\"modal\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
            echo "\"
                                               class=\"btn btn-pure btn-danger  md-delete waves-effect waves-classic\"
                                               style=\"color: #f02038;border: 1px solid;\"></a>


                                            <div class=\"modal fade\" style=\"top: 111px;z-index: 1711;\"  id=\"sous_categorie_admin_disable";
            // line 217
            echo twig_escape_filter($this->env, $this->getAttribute($context["souscategorie"], "id", []), "html", null, true);
            echo "\"   role=\"dialog\">
                                                <div class=\"modal-dialog modal-simple\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                    aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">×</span>
                                                            </button>
                                                            <h4 class=\"modal-title\" id=\"sous_categorie_admin_disable";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute($context["souscategorie"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("conf_delete"), "html", null, true);
            echo "</h4>
                                                        </div>
                                                        <form action=\"";
            // line 227
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_admin_delete", ["id" => $this->getAttribute($context["souscategorie"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\" method=\"get\">
                                                            <div class=\"modal-body\">
                                                                <h4 style=\"text-align:center\" >";
            // line 229
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("msg_conf_delete"), "html", null, true);
            echo "</h4>
                                                            </div>
                                                            <div class=\"panel-footer\">
                                                                <button style=\"margin-left: 80%;width: 100px\" type=\"submit\"
                                                                        class=\"pull-right btn btn-block btn-danger\">";
            // line 233
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['souscategorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "                                </tbody>
                            </table>
                            <div class=\"navigation\">
                                ";
        // line 247
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

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:admin/souscategorie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 247,  496 => 244,  479 => 233,  472 => 229,  467 => 227,  460 => 225,  449 => 217,  439 => 212,  432 => 207,  422 => 203,  412 => 199,  410 => 198,  401 => 194,  397 => 192,  392 => 189,  387 => 186,  385 => 185,  379 => 181,  372 => 178,  365 => 175,  363 => 174,  357 => 170,  350 => 167,  343 => 164,  341 => 163,  336 => 160,  332 => 151,  328 => 150,  319 => 144,  315 => 143,  310 => 142,  276 => 108,  272 => 107,  264 => 101,  258 => 100,  254 => 98,  247 => 96,  240 => 93,  238 => 92,  232 => 90,  229 => 89,  225 => 87,  218 => 85,  211 => 82,  209 => 81,  203 => 79,  199 => 77,  192 => 74,  185 => 71,  183 => 70,  177 => 68,  174 => 67,  171 => 66,  167 => 65,  164 => 64,  158 => 61,  155 => 60,  149 => 57,  146 => 56,  144 => 55,  140 => 54,  136 => 53,  132 => 52,  121 => 48,  117 => 47,  112 => 45,  103 => 39,  82 => 21,  78 => 20,  71 => 16,  67 => 15,  58 => 9,  51 => 4,  45 => 3,  29 => 1,);
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
            <h1 class=\"page-title\">{{\"Gestion Des Sous Catégories\"|trans}}</h1>

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-6 \">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color: #f02138;margin-bottom: -5px!important;\"> {{ nbsouscategories|length }}</h4>
                            <small style=\"color: #505050;\"> {{\"Sous Catégories\"|trans}} </small>
                        </div>
                    </div>
                    <div class=\"col-lg-6 \">
                        <a href=\"{{ path('sous_categorie_admin_new') }}\" style=\"margin-top: 3px;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
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
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"{{ path('sous_categorie_admin_index') }}\" method=\"get\">
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\">
                                                <label class=\"control-label\">{{\"Sous Catégorie\"|trans}}</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"{% if search is defined %}{{search}}{% endif %}\" placeholder={{ \"subCategoryName\"|trans }} >

                                            </div>
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\"  style=\"z-index: 1\">
                                                <label class=\"control-label\">{{\"Catégorie\"|trans}}</label>
                                                <select class=\"form-control\" name=\"categorie_id\" placeholder={{\"choisir une catégorie\"|trans}}>
                                                    <option value=\"\" disabled selected hidden>{{\"choisir une catégorie\"|trans}}</option>
                                                    {% if categorie_id == '' %}
                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                            {{ \"Toutes les categories\"|trans }}
                                                        </option>
                                                    {% else %}
                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                            {{ \"Toutes les categories\"|trans }}
                                                        </option>
                                                    {% endif %}

                                                    {% for categorie in categories %}
                                                        {% if categorie_id is defined   %}
                                                            {% if categorie_id == categorie.id %}
                                                                <option class=\"dropdown-item\" value=\"{{ categorie.id }}\" role=\"menuitem\" selected>

                                                                    {% if app.request.getLocale()  == 'fr' %}
                                                                        {{ categorie.nom }}

                                                                    {% else %}
                                                                        {{ categorie.nom_en }}

                                                                    {% endif %}
                                                                </option>
                                                            {% else %}
                                                                <option class=\"dropdown-item\" value=\"{{ categorie.id }}\" role=\"menuitem\">

                                                                    {% if app.request.getLocale()  == 'fr' %}
                                                                        {{ categorie.nom }}

                                                                    {% else %}
                                                                        {{ categorie.nom_en }}

                                                                    {% endif %}                                                                </option>
                                                            {% endif %}
                                                        {% else %}
                                                            <option class=\"dropdown-item\" value=\"{{ categorie.id }}\" role=\"menuitem\">

                                                                {% if app.request.getLocale()  == 'fr' %}
                                                                    {{ categorie.nom }}

                                                                {% else %}
                                                                    {{ categorie.nom_en }}

                                                                {% endif %}                                                            </option>
                                                        {% endif %}
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div  class=\"col-lg-4  col-md-4 col-xs-4 text-right\">
                                                <button   style=\"margin-right: 10px;\" type=\"submit\" class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>

                                                <a href=\"{{ path('ExportSousCategorieAdmin') }}\"  class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
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
                                    {#
                                                                        <th style=\"padding-left: 20px;width: 20%;\" hidden>{{ \"Image\"|trans }}</th>
                                    #}
                                    <th style=\"width: 30%\">{{ \"Nom\"|trans }}</th>
                                    <th style=\"width: 30%\">{{\"Catégorie\"|trans}}</th>
                                    <th style=\"width: 20%\">{{\"statut\"|trans}}</th>
                                    <th class=\"text-center text-nowrap\" style=\"padding-right: 10px;width: 20%\">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                {% for souscategorie in souscategories %}

                                    <tr >
                                        {#
                                            <td style=\"padding-left: 20px;\" hidden>
                                            {% if souscategorie.image %}
                                                <img class=\"navbar-brand-logo\" style=\"height: 50px;width: auto;\" src=\"{{ asset('uploads/produits/') }}{{ souscategorie.image }}\">
                                            {% endif %}
                                        </td>
                                        #}

                                        <td>

                                            {% if app.request.getLocale()  == 'fr' %}
                                                {{ souscategorie.nom }}

                                            {% else %}
                                                {{ souscategorie.nom_en }}

                                            {% endif %}
                                        </td>

                                        <td >

                                            {% if app.request.getLocale()  == 'fr' %}
                                                {{ souscategorie.categorie.nom }}

                                            {% else %}
                                                {{ souscategorie.categorie.nom_en }}

                                            {% endif %}
                                        </td>

                                        <td >

                                            {% if souscategorie.isActive %}
                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                            {% else %}
                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                            {% endif %}
                                        </td>
                                        <td class=\"text-center\"  style=\"padding-right: 10px;min-width: 130px; vertical-align: middle;\">
                                            <a href=\"{{ path('sous_categorie_admin_edit',{'id':souscategorie.id, 'page': page}) }}\" title=\"{{ \"edit\"|trans }}\"
                                               class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \"
                                               style=\"color: #b1b1b1;border: 1px solid;\"></a>

                                            {% if souscategorie.isActive %}
                                                <a href=\"{{ path('sous_categorie_admin_disable',{'id':souscategorie.id, 'page': page}) }}\" title=\"{{ \"deactivate\"|trans }}\"
                                                   class=\"btn btn-pure btn-default  md-lock \"
                                                   style=\"color: #b1b1b1;border: 1px solid;\"></a>
                                            {% else %}
                                                <a href=\"{{ path('sous_categorie_admin_disable',{'id':souscategorie.id, 'page': page}) }}\" title=\"{{ \"activer\"|trans }}\"
                                                   class=\"btn btn-pure btn-default  md-lock-open  waves-effect waves-classic \"
                                                   style=\"color: #46bf8c;border: 1px solid;\"></a>
                                            {% endif %}





                                            <a data-target=\"#sous_categorie_admin_disable{{ souscategorie.id }}\" data-toggle=\"modal\" title=\"{{ \"delete\"|trans }}\"
                                               class=\"btn btn-pure btn-danger  md-delete waves-effect waves-classic\"
                                               style=\"color: #f02038;border: 1px solid;\"></a>


                                            <div class=\"modal fade\" style=\"top: 111px;z-index: 1711;\"  id=\"sous_categorie_admin_disable{{ souscategorie.id }}\"   role=\"dialog\">
                                                <div class=\"modal-dialog modal-simple\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                    aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">×</span>
                                                            </button>
                                                            <h4 class=\"modal-title\" id=\"sous_categorie_admin_disable{{ souscategorie.id }}\">{{ 'conf_delete'|trans }}</h4>
                                                        </div>
                                                        <form action=\"{{ path('sous_categorie_admin_delete', { 'id': souscategorie.id, 'page': page }) }}\" method=\"get\">
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
                                {{ knp_pagination_render(souscategories) }}
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
", "BackendBundle:admin/souscategorie:index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/admin/souscategorie/index.html.twig");
    }
}
