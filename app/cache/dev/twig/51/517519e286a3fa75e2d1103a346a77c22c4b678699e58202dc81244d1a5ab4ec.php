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

/* @Backend/gestionnaire/souscategorie/index.html.twig */
class __TwigTemplate_2f03c69e8e9aaa9ea8b94905d98234d62bc66e79bcb29de38ac172d6238c89f7 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gestionnaire/souscategorie/index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/gestionnaire/souscategorie/index.html.twig", 1);
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

            ";
        // line 11
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "errorc"], "method", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "errorc"], "method") == 1))) {
            // line 12
            echo "                <div class=\"col-lg-12 text-center\">
                    <br><br><br><br>
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ActivateSubCatE"), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 22
        echo "
            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-6 \">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color: #f02138;margin-bottom: -5px!important;\"> ";
        // line 27
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["nbsouscategories"] ?? $this->getContext($context, "nbsouscategories"))), "html", null, true);
        echo "</h4>
                            <small style=\"color: #505050;\"> ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégories"), "html", null, true);
        echo " </small>
                        </div>
                    </div>
                    <div class=\"col-lg-6 \">
                        <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_new");
        echo "\" style=\"margin-top: 3px;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter"), "html", null, true);
        echo "
                        </a>
                    </div>
                    ";
        // line 43
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
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filtre"), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;padding: 0px 20px;\">
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_index");
        echo "\" method=\"get\">
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\">
                                                <label class=\"control-label\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégorie"), "html", null, true);
        echo "</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"";
        // line 69
        if ((isset($context["search"]) || array_key_exists("search", $context))) {
            echo twig_escape_filter($this->env, ($context["search"] ?? $this->getContext($context, "search")), "html", null, true);
        }
        echo "\" placeholder=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("subCategoryName"), "html", null, true);
        echo ">

                                            </div>
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\" style=\"z-index: 1\">
                                                <label class=\"control-label\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
        echo "</label>
                                                <select class=\"form-control\" name=\"categorie_id\" placeholder=";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une catégorie"), "html", null, true);
        echo ">
                                                    <option value=\"\" disabled selected hidden>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une catégorie"), "html", null, true);
        echo "</option>
                                                    ";
        // line 76
        if ((($context["categorie_id"] ?? $this->getContext($context, "categorie_id")) == "")) {
            // line 77
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                            ";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        } else {
            // line 81
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                            ";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        }
        // line 85
        echo "
                                                    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 87
            echo "                                                        ";
            if ((isset($context["categorie_id"]) || array_key_exists("categorie_id", $context))) {
                // line 88
                echo "                                                            ";
                if ((($context["categorie_id"] ?? $this->getContext($context, "categorie_id")) == $this->getAttribute($context["categorie"], "id", []))) {
                    // line 89
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\" selected>

                                                                    ";
                    // line 91
                    if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                        // line 92
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", []), "html", null, true);
                        echo "
                                                                    ";
                    } else {
                        // line 94
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom_en", []), "html", null, true);
                        echo "

                                                                    ";
                    }
                    // line 97
                    echo "                                                                </option>
                                                            ";
                } else {
                    // line 99
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\">

                                                                    ";
                    // line 101
                    if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                        // line 102
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", []), "html", null, true);
                        echo "
                                                                    ";
                    } else {
                        // line 104
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom_en", []), "html", null, true);
                        echo "

                                                                    ";
                    }
                    // line 106
                    echo "                                                                </option>
                                                            ";
                }
                // line 108
                echo "                                                        ";
            } else {
                // line 109
                echo "                                                            <option class=\"dropdown-item\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                echo "\" role=\"menuitem\">

                                                                ";
                // line 111
                if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                    // line 112
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", []), "html", null, true);
                    echo "
                                                                ";
                } else {
                    // line 114
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom_en", []), "html", null, true);
                    echo "

                                                                ";
                }
                // line 116
                echo "                                                            </option>
                                                        ";
            }
            // line 118
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                                                </select>
                                            </div>
                                            <div  class=\"col-lg-4  col-md-4 col-xs-4 text-right\">
                                                <button   style=\"margin-right: 10px;\" type=\"submit\" class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>

                                                <a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExportSousCategorie");
        echo "\"  class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                                                    <i class=\"icon md-download\" aria-hidden=\"true\"></i> ";
        // line 126
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
        // line 161
        echo "                                    <th style=\"width: 30%\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 30%\">";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 10%\">";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Est Active"), "html", null, true);
        echo "?</th>
                                    <th  class=\"text-right\" style=\"width: 30%;padding-right: 30px\">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["souscategories"] ?? $this->getContext($context, "souscategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["souscategorie"]) {
            // line 170
            echo "
                                    <tr >
                                        ";
            // line 179
            echo "
                                        <td>
                                            ";
            // line 181
            if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                // line 182
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["souscategorie"], "nom", []), "html", null, true);
                echo "
                                            ";
            } else {
                // line 184
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["souscategorie"], "nom_en", []), "html", null, true);
                echo "
                                            ";
            }
            // line 186
            echo "                                        </td>
                                        <td >

                                            ";
            // line 189
            if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                // line 190
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["souscategorie"], "categorie", []), "nom", []), "html", null, true);
                echo "
                                            ";
            } else {
                // line 192
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["souscategorie"], "categorie", []), "nom_en", []), "html", null, true);
                echo "
                                            ";
            }
            // line 194
            echo "                                        </td>
                                        <td >

                                            ";
            // line 197
            if ((null === $this->getAttribute($context["souscategorie"], "pays", []))) {
                // line 198
                echo "                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                            ";
            } else {
                // line 201
                echo "

                                                ";
                // line 203
                if ($this->getAttribute($context["souscategorie"], "isActive", [])) {
                    // line 204
                    echo "                                                    <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                                ";
                } else {
                    // line 207
                    echo "
                                                    <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                                ";
                }
                // line 211
                echo "                                            ";
            }
            // line 212
            echo "
                                        </td>
                                        <td class=\"text-right\"  style=\"padding-right: 10px;min-width: 130px; vertical-align: middle;\">

                                            ";
            // line 216
            if ((null === $this->getAttribute($context["souscategorie"], "pays", []))) {
                // line 217
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_activer", ["checkboxvar" => $this->getAttribute($context["souscategorie"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activer"), "html", null, true);
                echo "\" class=\"btn md-lock-open\" style=\"color: #46bf8c!important;background-color: #ffffff !important;border: 1px solid;\"></a>

                                            ";
            } else {
                // line 220
                echo "
                                                ";
                // line 221
                if ($this->getAttribute($context["souscategorie"], "isActive", [])) {
                    // line 222
                    echo "                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_disable", ["id" => $this->getAttribute($context["souscategorie"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("deactivate"), "html", null, true);
                    echo "\"
                                                       class=\"btn btn-pure btn-default  md-lock \"
                                                       style=\"color: #b1b1b1;border: 1px solid;\"></a>
                                                ";
                } else {
                    // line 226
                    echo "                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_disable", ["id" => $this->getAttribute($context["souscategorie"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activer"), "html", null, true);
                    echo "\"
                                                       class=\"btn btn-pure btn-default  md-lock-open  waves-effect waves-classic \"
                                                       style=\"color: #46bf8c;border: 1px solid;\"></a>
                                                ";
                }
                // line 230
                echo "

                                                <a href=\"";
                // line 232
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_edit", ["id" => $this->getAttribute($context["souscategorie"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
                echo "\"
                                                   class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \" title=\"";
                // line 233
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
                echo "\"
                                                   style=\"color: #b1b1b1;border: 1px solid;\"></a>

                                                <a data-target=\"#sous_categorie_disable";
                // line 236
                echo twig_escape_filter($this->env, $this->getAttribute($context["souscategorie"], "id", []), "html", null, true);
                echo "\" data-toggle=\"modal\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
                echo "\"
                                                   class=\"btn btn-pure btn-danger  md-delete waves-effect waves-classic\"
                                                   style=\"color: #f02038;border: 1px solid;\"></a>


                                                <div class=\"modal fade\" style=\"top: 111px;z-index: 1711;\"  id=\"sous_categorie_disable";
                // line 241
                echo twig_escape_filter($this->env, $this->getAttribute($context["souscategorie"], "id", []), "html", null, true);
                echo "\"   role=\"dialog\">
                                                    <div class=\"modal-dialog modal-simple\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                        aria-label=\"Close\">
                                                                    <span aria-hidden=\"true\">×</span>
                                                                </button>
                                                                <h4 class=\"modal-title\" id=\"sous_categorie_disable";
                // line 249
                echo twig_escape_filter($this->env, $this->getAttribute($context["souscategorie"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("conf_delete"), "html", null, true);
                echo "</h4>
                                                            </div>
                                                            <form action=\"";
                // line 251
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_delete", ["id" => $this->getAttribute($context["souscategorie"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
                echo "\" method=\"get\">
                                                                <div class=\"modal-body\">
                                                                    <h4 style=\"text-align:center\" >";
                // line 253
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("msg_conf_delete"), "html", null, true);
                echo "</h4>
                                                                </div>
                                                                <div class=\"panel-footer\">
                                                                    <button style=\"margin-left: 80%;width: 100px\" type=\"submit\"
                                                                            class=\"pull-right btn btn-block btn-danger\">";
                // line 257
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
            // line 266
            echo "

                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['souscategorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "                                </tbody>
                            </table>
                            <div class=\"navigation\">
                                ";
        // line 274
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
        return "@Backend/gestionnaire/souscategorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  549 => 274,  544 => 271,  534 => 266,  522 => 257,  515 => 253,  510 => 251,  503 => 249,  492 => 241,  482 => 236,  476 => 233,  472 => 232,  468 => 230,  458 => 226,  448 => 222,  446 => 221,  443 => 220,  434 => 217,  432 => 216,  426 => 212,  423 => 211,  417 => 207,  412 => 204,  410 => 203,  406 => 201,  401 => 198,  399 => 197,  394 => 194,  388 => 192,  382 => 190,  380 => 189,  375 => 186,  369 => 184,  363 => 182,  361 => 181,  357 => 179,  353 => 170,  349 => 169,  340 => 163,  336 => 162,  331 => 161,  297 => 126,  293 => 125,  285 => 119,  279 => 118,  275 => 116,  268 => 114,  262 => 112,  260 => 111,  254 => 109,  251 => 108,  247 => 106,  240 => 104,  234 => 102,  232 => 101,  226 => 99,  222 => 97,  215 => 94,  209 => 92,  207 => 91,  201 => 89,  198 => 88,  195 => 87,  191 => 86,  188 => 85,  182 => 82,  179 => 81,  173 => 78,  170 => 77,  168 => 76,  164 => 75,  160 => 74,  156 => 73,  145 => 69,  141 => 68,  136 => 66,  127 => 60,  108 => 43,  102 => 33,  98 => 32,  91 => 28,  87 => 27,  80 => 22,  73 => 18,  65 => 12,  63 => 11,  58 => 9,  51 => 4,  45 => 3,  29 => 1,);
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

            {% if app.request.query.get('errorc') is defined  and app.request.query.get('errorc') ==1 %}
                <div class=\"col-lg-12 text-center\">
                    <br><br><br><br>
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        {{ \"ActivateSubCatE\"| trans }}
                    </div>
                </div>
            {% endif %}

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-6 \">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color: #f02138;margin-bottom: -5px!important;\"> {{ nbsouscategories|length }}</h4>
                            <small style=\"color: #505050;\"> {{\"Sous Catégories\"|trans}} </small>
                        </div>
                    </div>
                    <div class=\"col-lg-6 \">
                        <a href=\"{{ path('sous_categorie_new') }}\" style=\"margin-top: 3px;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i> {{ \"Ajouter\"|trans }}
                        </a>
                    </div>
                    {#
                    <div class=\"col-lg-4 \">
                        <a href=\"{{ path('sous_categorie_activer') }}\" style=\"margin-top: 3px;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
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
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"{{ path('sous_categorie_index') }}\" method=\"get\">
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\">
                                                <label class=\"control-label\">{{\"Sous Catégorie\"|trans}}</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"{% if search is defined %}{{search}}{% endif %}\" placeholder={{ \"subCategoryName\"|trans }}>

                                            </div>
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\" style=\"z-index: 1\">
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

                                                                    {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                                        {{ categorie.nom }}
                                                                    {% else %}
                                                                        {{ categorie.nom_en }}

                                                                    {% endif %}
                                                                </option>
                                                            {% else %}
                                                                <option class=\"dropdown-item\" value=\"{{ categorie.id }}\" role=\"menuitem\">

                                                                    {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                                        {{ categorie.nom }}
                                                                    {% else %}
                                                                        {{ categorie.nom_en }}

                                                                    {% endif %}                                                                </option>
                                                            {% endif %}
                                                        {% else %}
                                                            <option class=\"dropdown-item\" value=\"{{ categorie.id }}\" role=\"menuitem\">

                                                                {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
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

                                                <a href=\"{{ path('ExportSousCategorie') }}\"  class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
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
                                    <th style=\"width: 10%\">{{ \"Est Active\" | trans }}?</th>
                                    <th  class=\"text-right\" style=\"width: 30%;padding-right: 30px\">Action</th>
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
                                            {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                {{ souscategorie.nom }}
                                            {% else %}
                                                {{ souscategorie.nom_en }}
                                            {% endif %}
                                        </td>
                                        <td >

                                            {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                {{ souscategorie.categorie.nom }}
                                            {% else %}
                                                {{ souscategorie.categorie.nom_en }}
                                            {% endif %}
                                        </td>
                                        <td >

                                            {% if souscategorie.pays is null %}
                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                            {% else %}


                                                {% if souscategorie.isActive %}
                                                    <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                                {% else %}

                                                    <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                                {% endif %}
                                            {% endif %}

                                        </td>
                                        <td class=\"text-right\"  style=\"padding-right: 10px;min-width: 130px; vertical-align: middle;\">

                                            {% if souscategorie.pays is null  %}
                                                <a href=\"{{ path('sous_categorie_activer',{'checkboxvar':souscategorie.id,'page':page}) }}\" title=\"{{ \"activer\"|trans }}\" class=\"btn md-lock-open\" style=\"color: #46bf8c!important;background-color: #ffffff !important;border: 1px solid;\"></a>

                                            {% else %}

                                                {% if souscategorie.isActive %}
                                                    <a href=\"{{ path('sous_categorie_disable',{'id':souscategorie.id,'page':page}) }}\" title=\"{{ \"deactivate\"|trans }}\"
                                                       class=\"btn btn-pure btn-default  md-lock \"
                                                       style=\"color: #b1b1b1;border: 1px solid;\"></a>
                                                {% else %}
                                                    <a href=\"{{ path('sous_categorie_disable',{'id':souscategorie.id,'page':page}) }}\" title=\"{{ \"activer\"|trans }}\"
                                                       class=\"btn btn-pure btn-default  md-lock-open  waves-effect waves-classic \"
                                                       style=\"color: #46bf8c;border: 1px solid;\"></a>
                                                {% endif %}


                                                <a href=\"{{ path('sous_categorie_edit',{'id':souscategorie.id,'page':page}) }}\"
                                                   class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \" title=\"{{ \"edit\"|trans }}\"
                                                   style=\"color: #b1b1b1;border: 1px solid;\"></a>

                                                <a data-target=\"#sous_categorie_disable{{ souscategorie.id }}\" data-toggle=\"modal\" title=\"{{ \"delete\"|trans }}\"
                                                   class=\"btn btn-pure btn-danger  md-delete waves-effect waves-classic\"
                                                   style=\"color: #f02038;border: 1px solid;\"></a>


                                                <div class=\"modal fade\" style=\"top: 111px;z-index: 1711;\"  id=\"sous_categorie_disable{{ souscategorie.id }}\"   role=\"dialog\">
                                                    <div class=\"modal-dialog modal-simple\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                        aria-label=\"Close\">
                                                                    <span aria-hidden=\"true\">×</span>
                                                                </button>
                                                                <h4 class=\"modal-title\" id=\"sous_categorie_disable{{ souscategorie.id }}\">{{ 'conf_delete'|trans }}</h4>
                                                            </div>
                                                            <form action=\"{{ path('sous_categorie_delete', { 'id': souscategorie.id,'page':page }) }}\" method=\"get\">
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
", "@Backend/gestionnaire/souscategorie/index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gestionnaire\\souscategorie\\index.html.twig");
    }
}
