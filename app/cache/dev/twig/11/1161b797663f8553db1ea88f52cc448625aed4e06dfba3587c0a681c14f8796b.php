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

/* @Backend/gestionnaire/produit/index.html.twig */
class __TwigTemplate_dacf7b2f2adaed005b6c41d2286a04f06be3d34c37ed0e08b587fbaaaf2b2300 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gestionnaire/produit/index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/gestionnaire/produit/index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Produits"), "html", null, true);
        echo "</h1>

            ";
        // line 11
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 12
            echo "                <div class=\"col-lg-12 text-center\">
                    <br><br><br><br>
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("enable_error", [], "messages"), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 22
        echo "            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-6 \">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color: #f02138;margin-bottom: -5px!important;\"> ";
        // line 26
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["nbproduits"] ?? $this->getContext($context, "nbproduits"))), "html", null, true);
        echo "</h4>
                            <small style=\"color: #505050;\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produits"), "html", null, true);
        echo "</small>
                        </div>


                    </div>
                    <div class=\"col-lg-6 \"   >
                        <a  href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_produit_gstionnaire");
        echo "\" style=\"margin-top: 3px;\" class=\" float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i> ";
        // line 34
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
                                    <th style=\"border: none;padding-left: 20px;\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filtre"), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;padding: 0px 20px;\">
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_index");
        echo "\" method=\"get\">
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\">
                                                <label class=\"control-label\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produit"), "html", null, true);
        echo "</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"";
        // line 62
        if ((isset($context["search"]) || array_key_exists("search", $context))) {
            echo twig_escape_filter($this->env, ($context["search"] ?? $this->getContext($context, "search")), "html", null, true);
        }
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produit"), "html", null, true);
        echo "\" >
                                            </div>
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\"  style=\"z-index: 1\">
                                                <label class=\"control-label\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
        echo "</label>
                                                <select class=\"form-control\" name=\"categorie\" placeholder=";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une catégorie"), "html", null, true);
        echo ">
                                                    <option value=\"\" disabled selected hidden>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une catégorie"), "html", null, true);
        echo "</option>
                                                    ";
        // line 68
        if ((($context["categorie"] ?? $this->getContext($context, "categorie")) == "")) {
            // line 69
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                            ";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        } else {
            // line 73
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                            ";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        }
        // line 77
        echo "
                                                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 79
            echo "                                                        ";
            if ((isset($context["categorie"]) || array_key_exists("categorie", $context))) {
                // line 80
                echo "                                                            ";
                if ((($context["categorie"] ?? $this->getContext($context, "categorie")) == $this->getAttribute($context["c"], "id", []))) {
                    // line 81
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\" selected>
                                                                    ";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", []), "html", null, true);
                    echo "
                                                                </option>
                                                            ";
                } else {
                    // line 85
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\">
                                                                    ";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", []), "html", null, true);
                    echo "
                                                                </option>
                                                            ";
                }
                // line 89
                echo "                                                        ";
            } else {
                // line 90
                echo "                                                            <option class=\"dropdown-item\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                echo "\" role=\"menuitem\">
                                                                ";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", []), "html", null, true);
                echo "
                                                            </option>
                                                        ";
            }
            // line 94
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\"  style=\"padding-left: 5px;z-index: 1 \">
                                                <label class=\"control-label\">";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégorie"), "html", null, true);
        echo "</label>
                                                <select class=\"form-control\" name=\"souscategorie\" placeholder=";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une sous catégorie"), "html", null, true);
        echo ">
                                                    <option value=\"\" disabled selected hidden>";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une sous catégorie"), "html", null, true);
        echo "</option>
                                                    ";
        // line 101
        if ((($context["souscategorie"] ?? $this->getContext($context, "souscategorie")) == "")) {
            // line 102
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                            ";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les sous categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        } else {
            // line 106
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                            ";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(" Toutes les sous categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        }
        // line 110
        echo "
                                                    ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["souscategories"] ?? $this->getContext($context, "souscategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["sc"]) {
            // line 112
            echo "                                                        ";
            if ((isset($context["souscategorie"]) || array_key_exists("souscategorie", $context))) {
                // line 113
                echo "                                                            ";
                if ((($context["souscategorie"] ?? $this->getContext($context, "souscategorie")) == $this->getAttribute($context["sc"], "id", []))) {
                    // line 114
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\" selected>
                                                                    ";
                    // line 115
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom", []), "html", null, true);
                    echo "
                                                                </option>
                                                            ";
                } else {
                    // line 118
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\">
                                                                    ";
                    // line 119
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom", []), "html", null, true);
                    echo "
                                                                </option>
                                                            ";
                }
                // line 122
                echo "                                                        ";
            } else {
                // line 123
                echo "                                                            <option class=\"dropdown-item\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "id", []), "html", null, true);
                echo "\" role=\"menuitem\">
                                                                ";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom", []), "html", null, true);
                echo "
                                                            </option>
                                                        ";
            }
            // line 127
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                                                </select>
                                            </div>

                                            ";
        // line 166
        echo "


                                            <div style=\"padding-top: 10px\"  class=\"col-lg-8 col-md-8 col-xs-8 text-right\">
                                                <button type=\"submit\"  style=\"margin-right: 10px;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i>
                                                </button>
                                                <a href=\"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExportProduit");
        echo "\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                                                    <i class=\"icon md-download\" aria-hidden=\"true\"></i> ";
        // line 174
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
                                    <th style=\"width: 15%;padding-left: 20px;\" >";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 15%\">";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom/Code"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 10%\">";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fiche_technique"), "html", null, true);
        echo "</th>

                                    <th style=\"width: 12%\">";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 13%\">";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégorie"), "html", null, true);
        echo "</th>
                                    ";
        // line 213
        echo "                                    <th style=\"width: 10%\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix"), "html", null, true);
        echo "</th>
                                    <th class=\"text-center\" style=\"width: 5%\">";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Est Active"), "html", null, true);
        echo "?</th>
                                    <th class=\"text-center\" style=\"width: 5%\">";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Est Promo"), "html", null, true);
        echo "?</th>

                                    <th class=\"text-center text-nowrap\" style=\"width: 15%\" >
                                        ";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action"), "html", null, true);
        echo "
                                        <a type=\"submit\"  href=\"";
        // line 219
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editallpays");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activer"), "html", null, true);
        echo "\"  style=\"margin-left: 10px;font-size: 11px;text-transform: capitalize;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                            ";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ActiverAll"), "html", null, true);
        echo "</a></th>
                                </tr>
                                </thead>
                                <tbody>



                                ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 228
            echo "                                    <tr >
                                        <td style=\"vertical-align: middle;padding-left: 20px;\" >
                                            ";
            // line 230
            if ($this->getAttribute($context["produit"], "image", [])) {
                // line 231
                echo "                                                <img class=\"navbar-brand-logo\" style=\"height: 50px;width: auto;\"
                                                     src=\"";
                // line 232
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/produits/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "image", []), "html", null, true);
                echo "\">
                                            ";
            }
            // line 234
            echo "                                        </td>
                                        <td style=\"    vertical-align: middle;\">
                                            <div class=\"media-body\">
                                                <h5 class=\"mt-0 mb-5\">
                                                    ";
            // line 238
            if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                // line 239
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", []), "html", null, true);
                echo "
                                                    ";
            } else {
                // line 241
                echo "
                                                        ";
                // line 242
                if (($this->getAttribute($context["produit"], "nomen", [], "any", true, true) &&  !(null === $this->getAttribute($context["produit"], "nomen", [])))) {
                    // line 243
                    echo "
                                                            ";
                    // line 244
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nomen", []), "html", null, true);
                    echo "
                                                        ";
                } else {
                    // line 246
                    echo "                                                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", []), "html", null, true);
                    echo "

                                                        ";
                }
                // line 249
                echo "                                                    ";
            }
            // line 250
            echo "
                                                </h5>
                                                <small>";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "code", []), "html", null, true);
            echo "</small>
                                            </div>
                                        </td>

                                        <td  style=\"vertical-align: middle;\">
                                            <a  target=\"_blank\" href=\"";
            // line 257
            echo twig_escape_filter($this->env, ($context["legal_notice_directory"] ?? $this->getContext($context, "legal_notice_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "file", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "file", []), "html", null, true);
            echo "</a>
                                        </td>
                                        <td style=\"    vertical-align: middle;\">

                                            ";
            // line 261
            if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                // line 262
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "categorie", []), "nom", []), "html", null, true);
                echo "

                                            ";
            } else {
                // line 265
                echo "                                                ";
                if (($this->getAttribute($this->getAttribute($context["produit"], "categorie", [], "any", false, true), "nom_en", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["produit"], "categorie", []), "nom_en", [])))) {
                    // line 266
                    echo "
                                                    ";
                    // line 267
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "categorie", []), "nom_en", []), "html", null, true);
                    echo "
                                                ";
                } else {
                    // line 269
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "categorie", []), "nom", []), "html", null, true);
                    echo "

                                                ";
                }
                // line 272
                echo "
                                            ";
            }
            // line 274
            echo "                                        </td>
                                        <td style=\"    vertical-align: middle;\">

                                            ";
            // line 277
            if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                // line 278
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "sous_categorie", []), "nom", []), "html", null, true);
                echo "
                                            ";
            } else {
                // line 280
                echo "
                                                ";
                // line 281
                if (($this->getAttribute($this->getAttribute($context["produit"], "sous_categorie", [], "any", false, true), "nom_en", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["produit"], "sous_categorie", []), "nom_en", [])))) {
                    // line 282
                    echo "
                                                    ";
                    // line 283
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "sous_categorie", []), "nom_en", []), "html", null, true);
                    echo "
                                                ";
                } else {
                    // line 285
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "sous_categorie", []), "nom", []), "html", null, true);
                    echo "

                                                ";
                }
                // line 288
                echo "
                                            ";
            }
            // line 290
            echo "                                        </td>
                                        ";
            // line 299
            echo "
                                        <td style=\"vertical-align: middle;\">
                                            <h5 class=\"mt-0 mb-5\" style=\"color:#0c3e8f;\">";
            // line 301
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "prix", []), $this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "deviseNbDigitsDecimal", []), $this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "deviseDecimalSeparator", []), $this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "deviseThousandsSeparator", [])), "html", null, true);
            echo "
                                                ";
            // line 302
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "pays", []), "devise", []), "html", null, true);
            echo "</h5>
                                        </td>

                                        <td class=\"text-center\" style=\"    vertical-align: middle;\">
                                            ";
            // line 306
            if (($this->getAttribute($context["produit"], "is_active", []) == true)) {
                // line 307
                echo "                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                            ";
            } else {
                // line 310
                echo "                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                            ";
            }
            // line 313
            echo "                                        </td>
                                        <td class=\"text-center\" style=\"    vertical-align: middle;\">
                                            ";
            // line 315
            if (($this->getAttribute($context["produit"], "is_promo", []) == true)) {
                // line 316
                echo "                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                            ";
            } else {
                // line 319
                echo "                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                            ";
            }
            // line 322
            echo "                                        </td>
                                        <td class=\"text-right \" style=\"padding-right:20px;vertical-align: middle;\">

                                            <a href=\"";
            // line 325
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_edit", ["id" => $this->getAttribute($context["produit"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page")), "search" => ($context["search"] ?? $this->getContext($context, "search")), "categorie" => ($context["categorie"] ?? $this->getContext($context, "categorie")), "souscategorie" => ($context["souscategorie"] ?? $this->getContext($context, "souscategorie"))]), "html", null, true);
            echo "\"
                                               class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \" title=\"";
            // line 326
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
            echo "\"
                                               style=\"color: #b1b1b1;border: 1px solid;\"></a>
                                            ";
            // line 328
            if (($this->getAttribute($context["produit"], "is_active", []) == false)) {
                // line 329
                echo "                                                <a class=\"btn md-lock-open\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enable", ["id" => $this->getAttribute($context["produit"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page")), "search" => ($context["search"] ?? $this->getContext($context, "search")), "categorie" => ($context["categorie"] ?? $this->getContext($context, "categorie")), "souscategorie" => ($context["souscategorie"] ?? $this->getContext($context, "souscategorie"))]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activer"), "html", null, true);
                echo "\"
                                                   style=\"color: #46bf8c!important;background-color: #ffffff !important;border: 1px solid;\"></a>
                                            ";
            } else {
                // line 332
                echo "                                                <a class=\"btn md-lock-open\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enable", ["id" => $this->getAttribute($context["produit"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page")), "search" => ($context["search"] ?? $this->getContext($context, "search")), "categorie" => ($context["categorie"] ?? $this->getContext($context, "categorie")), "souscategorie" => ($context["souscategorie"] ?? $this->getContext($context, "souscategorie"))]), "html", null, true);
                echo "\"  title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("deactivate"), "html", null, true);
                echo "\"
                                                   style=\"color: #b1b1b1!important;background-color: #ffffff !important;border: 1px solid;\"></a>

                                            ";
            }
            // line 336
            echo "

                                            <a data-target=\"#produit_delete";
            // line 338
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
            echo "\" data-toggle=\"modal\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
            echo "\"
                                               class=\"btn btn-pure btn-danger  md-delete waves-effect waves-classic\"
                                               style=\"color: #f02038;border: 1px solid;\"></a>


                                            <div class=\"modal fade\" id=\"produit_delete";
            // line 343
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
            echo "\" aria-hidden=\"true\"  style=\"top: 111px;z-index: 1711;\"
                                                 aria-labelledby=\"exampleModalTabs\"
                                                 role=\"dialog\" tabindex=\"-1\">
                                                <div class=\"modal-dialog modal-simple\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                    aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">×</span>
                                                            </button>
                                                            <h4 class=\"modal-title\" id=\"produit_delete";
            // line 353
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("conf_delete"), "html", null, true);
            echo "</h4>
                                                        </div>
                                                        <form action=\"";
            // line 355
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_p_gestionnaire", ["id" => $this->getAttribute($context["produit"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page")), "search" => ($context["search"] ?? $this->getContext($context, "search")), "categorie" => ($context["categorie"] ?? $this->getContext($context, "categorie")), "souscategorie" => ($context["souscategorie"] ?? $this->getContext($context, "souscategorie"))]), "html", null, true);
            echo "\" method=\"post\">
                                                            <div class=\"modal-body\">
                                                                <h4 style=\"text-align:center\" >";
            // line 357
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("msg_conf_delete"), "html", null, true);
            echo "</h4>
                                                            </div>
                                                            <div class=\"panel-footer\">
                                                                <button style=\"margin-left: 80%;width: 100px\" type=\"submit\"
                                                                        class=\"pull-right btn btn-block btn-danger\">";
            // line 361
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 375
        echo "                                </tbody>
                            </table>
                            <div class=\"navigation\">
                                ";
        // line 378
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["produits"] ?? $this->getContext($context, "produits")));
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

    // line 393
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 394
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!--     <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
-->

    <script>
        \$( \"select[name='categorie']\" ).change(function () {
            var matiereID = \$(this).val();
          //  console.log('aaaaa'+matiereID);

            if(matiereID) {


                \$.ajax({
                    url: \"";
        // line 407
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_sous_categorie_from_categorie");
        echo "\",
                    dataType: 'Json',
                    data: {'categorieid':matiereID},
                    type:'GET',
                    success: function(data) {
                        \$('select[name=\"souscategorie\"]').empty();
                        \$('select[name=\"souscategorie').append('<option value=\"\" selected hidden>'+''  +'</option>');

                        for(i = 0; i < data.length; i++) {
                            student = data[i];
                            \$('select[name=\"souscategorie').append('<option value=\"'+ student['id'] +'\">'+ student['nom'] +'</option>');
                        };
                    }
                });


            }else{
                \$('select[name=\"produit[sous_categorie]\"]').empty();
            }
        });
        (function (document, window, \$) {
            'use strict';

            var Site = window.Site;
            \$(document).ready(function () {
                Site.run();
            });

            \$( \"select[name='produit_categorie']\" ).select2();
            \$( \"select[name='produit_sous_categorie']\" ).select2();

        })(document, window, jQuery);
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/gestionnaire/produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  782 => 407,  765 => 394,  759 => 393,  737 => 378,  732 => 375,  712 => 361,  705 => 357,  700 => 355,  693 => 353,  680 => 343,  670 => 338,  666 => 336,  656 => 332,  647 => 329,  645 => 328,  640 => 326,  636 => 325,  631 => 322,  626 => 319,  621 => 316,  619 => 315,  615 => 313,  610 => 310,  605 => 307,  603 => 306,  596 => 302,  592 => 301,  588 => 299,  585 => 290,  581 => 288,  574 => 285,  569 => 283,  566 => 282,  564 => 281,  561 => 280,  555 => 278,  553 => 277,  548 => 274,  544 => 272,  537 => 269,  532 => 267,  529 => 266,  526 => 265,  519 => 262,  517 => 261,  506 => 257,  498 => 252,  494 => 250,  491 => 249,  484 => 246,  479 => 244,  476 => 243,  474 => 242,  471 => 241,  465 => 239,  463 => 238,  457 => 234,  451 => 232,  448 => 231,  446 => 230,  442 => 228,  438 => 227,  428 => 220,  422 => 219,  418 => 218,  412 => 215,  408 => 214,  403 => 213,  399 => 208,  395 => 207,  390 => 205,  386 => 204,  382 => 203,  350 => 174,  346 => 173,  337 => 166,  332 => 128,  326 => 127,  320 => 124,  315 => 123,  312 => 122,  306 => 119,  301 => 118,  295 => 115,  290 => 114,  287 => 113,  284 => 112,  280 => 111,  277 => 110,  271 => 107,  268 => 106,  262 => 103,  259 => 102,  257 => 101,  253 => 100,  249 => 99,  245 => 98,  240 => 95,  234 => 94,  228 => 91,  223 => 90,  220 => 89,  214 => 86,  209 => 85,  203 => 82,  198 => 81,  195 => 80,  192 => 79,  188 => 78,  185 => 77,  179 => 74,  176 => 73,  170 => 70,  167 => 69,  165 => 68,  161 => 67,  157 => 66,  153 => 65,  143 => 62,  139 => 61,  134 => 59,  125 => 53,  103 => 34,  99 => 33,  90 => 27,  86 => 26,  80 => 22,  73 => 18,  65 => 12,  63 => 11,  58 => 9,  52 => 5,  46 => 4,  30 => 1,);
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
            <h1 class=\"page-title\">{{ \"Gestion Des Produits\" | trans }}</h1>

            {% if error is defined %}
                <div class=\"col-lg-12 text-center\">
                    <br><br><br><br>
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        {{ \"enable_error\"|trans({}, 'messages') }}
                    </div>
                </div>
            {% endif %}
            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-6 \">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color: #f02138;margin-bottom: -5px!important;\"> {{ nbproduits|length }}</h4>
                            <small style=\"color: #505050;\">{{ \"Produits\" | trans }}</small>
                        </div>


                    </div>
                    <div class=\"col-lg-6 \"   >
                        <a  href=\"{{ path('new_produit_gstionnaire') }}\" style=\"margin-top: 3px;\" class=\" float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
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
                                    <th style=\"border: none;padding-left: 20px;\">{{ \"Filtre\" | trans }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;padding: 0px 20px;\">
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"{{ path('produit_index') }}\" method=\"get\">
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\">
                                                <label class=\"control-label\">{{ \"Produit\" | trans }}</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"{% if search is defined %}{{search}}{% endif %}\" placeholder=\"{{ \"Produit\" | trans }}\" >
                                            </div>
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\"  style=\"z-index: 1\">
                                                <label class=\"control-label\">{{\"Catégorie\"|trans}}</label>
                                                <select class=\"form-control\" name=\"categorie\" placeholder={{\"choisir une catégorie\" | trans}}>
                                                    <option value=\"\" disabled selected hidden>{{\"choisir une catégorie\" | trans}}</option>
                                                    {% if categorie == '' %}
                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                            {{ \"Toutes les categories\" | trans }}
                                                        </option>
                                                    {% else %}
                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                            {{ \"Toutes les categories\" | trans }}
                                                        </option>
                                                    {% endif %}

                                                    {% for c in categories %}
                                                        {% if categorie is defined   %}
                                                            {% if categorie == c.id %}
                                                                <option class=\"dropdown-item\" value=\"{{ c.id }}\" role=\"menuitem\" selected>
                                                                    {{ c.nom }}
                                                                </option>
                                                            {% else %}
                                                                <option class=\"dropdown-item\" value=\"{{ c.id }}\" role=\"menuitem\">
                                                                    {{ c.nom }}
                                                                </option>
                                                            {% endif %}
                                                        {% else %}
                                                            <option class=\"dropdown-item\" value=\"{{ c.id }}\" role=\"menuitem\">
                                                                {{ c.nom }}
                                                            </option>
                                                        {% endif %}
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\"  style=\"padding-left: 5px;z-index: 1 \">
                                                <label class=\"control-label\">{{\"Sous Catégorie\"|trans}}</label>
                                                <select class=\"form-control\" name=\"souscategorie\" placeholder={{\"choisir une sous catégorie\"|trans}}>
                                                    <option value=\"\" disabled selected hidden>{{\"choisir une sous catégorie\"|trans}}</option>
                                                    {% if souscategorie== '' %}
                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                            {{ \"Toutes les sous categories\" | trans }}
                                                        </option>
                                                    {% else %}
                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                            {{\" Toutes les sous categories\" | trans }}
                                                        </option>
                                                    {% endif %}

                                                    {% for sc in souscategories %}
                                                        {% if souscategorie is defined   %}
                                                            {% if souscategorie == sc.id %}
                                                                <option class=\"dropdown-item\" value=\"{{ sc.id }}\" role=\"menuitem\" selected>
                                                                    {{ sc.nom }}
                                                                </option>
                                                            {% else %}
                                                                <option class=\"dropdown-item\" value=\"{{ sc.id }}\" role=\"menuitem\">
                                                                    {{ sc.nom }}
                                                                </option>
                                                            {% endif %}
                                                        {% else %}
                                                            <option class=\"dropdown-item\" value=\"{{ sc.id }}\" role=\"menuitem\">
                                                                {{ sc.nom }}
                                                            </option>
                                                        {% endif %}
                                                    {% endfor %}
                                                </select>
                                            </div>

                                            {#
                                                <div style=\"padding-top: 10px\" class=\"col-lg-4  col-md-4 col-xs-4\">
                                                <label class=\"control-label\">Station</label>
                                                <select class=\"form-control\" name=\"station\" placeholder=\"choisir une station\">
                                                    <option value=\"\" disabled selected hidden>{{ \"choisir une station\"|trans }}</option>
                                                    {% if station == '' %}
                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                            {{ \"Toutes les stations\" | trans }}
                                                        </option>
                                                    {% else %}
                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                            {{ \"Toutes les stations\" | trans }}
                                                        </option>
                                                    {% endif %}

                                                    {% for s in stations %}
                                                        {% if station is defined   %}
                                                            {% if station == s.id %}
                                                                <option class=\"dropdown-item\" value=\"{{ s.id }}\" role=\"menuitem\" selected>
                                                                    {{ s.nom }}
                                                                </option>
                                                            {% else %}
                                                                <option class=\"dropdown-item\" value=\"{{ s.id }}\" role=\"menuitem\">
                                                                    {{ s.nom }}
                                                                </option>
                                                            {% endif %}
                                                        {% else %}
                                                            <option class=\"dropdown-item\" value=\"{{ s.id }}\" role=\"menuitem\">
                                                                {{ s.nom }}
                                                            </option>
                                                        {% endif %}
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            #}



                                            <div style=\"padding-top: 10px\"  class=\"col-lg-8 col-md-8 col-xs-8 text-right\">
                                                <button type=\"submit\"  style=\"margin-right: 10px;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i>
                                                </button>
                                                <a href=\"{{ path('ExportProduit') }}\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                                                    <i class=\"icon md-download\" aria-hidden=\"true\"></i> {{ \"exporter\" | trans }}</a>
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
                                    <th style=\"width: 15%;padding-left: 20px;\" >{{ \"Image\" | trans }}</th>
                                    <th style=\"width: 15%\">{{ \"Nom/Code\" | trans }}</th>
                                    <th style=\"width: 10%\">{{\"Fiche_technique\"|trans}}</th>

                                    <th style=\"width: 12%\">{{\"Catégorie\" | trans}}</th>
                                    <th style=\"width: 13%\">{{\"Sous Catégorie\" | trans}}</th>
                                    {#
                                                                        <th style=\"width: 20%\">{{ \"Station\" | trans }}</th>

                                    #}
                                    <th style=\"width: 10%\">{{ \"Prix\" | trans }}</th>
                                    <th class=\"text-center\" style=\"width: 5%\">{{ \"Est Active\" | trans }}?</th>
                                    <th class=\"text-center\" style=\"width: 5%\">{{ \"Est Promo\" | trans }}?</th>

                                    <th class=\"text-center text-nowrap\" style=\"width: 15%\" >
                                        {{ \"Action\" | trans }}
                                        <a type=\"submit\"  href=\"{{ path('editallpays') }}\" title=\"{{ \"activer\"|trans }}\"  style=\"margin-left: 10px;font-size: 11px;text-transform: capitalize;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                            {{ \"ActiverAll\"|trans }}</a></th>
                                </tr>
                                </thead>
                                <tbody>



                                {% for produit in produits %}
                                    <tr >
                                        <td style=\"vertical-align: middle;padding-left: 20px;\" >
                                            {% if produit.image %}
                                                <img class=\"navbar-brand-logo\" style=\"height: 50px;width: auto;\"
                                                     src=\"{{ asset('uploads/produits/') }}{{ produit.image }}\">
                                            {% endif %}
                                        </td>
                                        <td style=\"    vertical-align: middle;\">
                                            <div class=\"media-body\">
                                                <h5 class=\"mt-0 mb-5\">
                                                    {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                        {{ produit.nom}}
                                                    {% else %}

                                                        {% if produit.nomen is defined and produit.nomen is not null %}

                                                            {{ produit.nomen}}
                                                        {% else %}
                                                            {{ produit.nom}}

                                                        {% endif %}
                                                    {% endif %}

                                                </h5>
                                                <small>{{ produit.code}}</small>
                                            </div>
                                        </td>

                                        <td  style=\"vertical-align: middle;\">
                                            <a  target=\"_blank\" href=\"{{ legal_notice_directory }}/{{ produit.file }}\">{{ produit.file }}</a>
                                        </td>
                                        <td style=\"    vertical-align: middle;\">

                                            {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                {{ produit.categorie.nom}}

                                            {% else %}
                                                {% if produit.categorie.nom_en is defined and produit.categorie.nom_en is not null %}

                                                    {{ produit.categorie.nom_en}}
                                                {% else %}
                                                    {{ produit.categorie.nom}}

                                                {% endif %}

                                            {% endif %}
                                        </td>
                                        <td style=\"    vertical-align: middle;\">

                                            {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                {{ produit.sous_categorie.nom}}
                                            {% else %}

                                                {% if produit.sous_categorie.nom_en is defined and produit.sous_categorie.nom_en is not null %}

                                                    {{ produit.sous_categorie.nom_en}}
                                                {% else %}
                                                    {{ produit.sous_categorie.nom}}

                                                {% endif %}

                                            {% endif %}
                                        </td>
                                        {#
                                            <td style=\"    vertical-align: middle;\" hidden>
                                            {% if produit.station != null %}
                                                {{ produit.station.nom}}

                                            {% endif %}
                                        </td>
                                        #}

                                        <td style=\"vertical-align: middle;\">
                                            <h5 class=\"mt-0 mb-5\" style=\"color:#0c3e8f;\">{{ produit.prix |number_format(pays.deviseNbDigitsDecimal, pays.deviseDecimalSeparator, pays.deviseThousandsSeparator)}}
                                                {{ app.user.pays.devise }}</h5>
                                        </td>

                                        <td class=\"text-center\" style=\"    vertical-align: middle;\">
                                            {% if produit.is_active == true %}
                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                            {% else %}
                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                            {% endif %}
                                        </td>
                                        <td class=\"text-center\" style=\"    vertical-align: middle;\">
                                            {% if produit.is_promo == true %}
                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                            {% else %}
                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                            {% endif %}
                                        </td>
                                        <td class=\"text-right \" style=\"padding-right:20px;vertical-align: middle;\">

                                            <a href=\"{{ path('produit_edit', {'id': produit.id,'page': page,'search':search, 'categorie': categorie,'souscategorie': souscategorie}) }}\"
                                               class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \" title=\"{{ \"edit\"|trans }}\"
                                               style=\"color: #b1b1b1;border: 1px solid;\"></a>
                                            {% if produit.is_active == false %}
                                                <a class=\"btn md-lock-open\" href=\"{{ path('enable',{'id':produit.id,'page': page,'search':search, 'categorie': categorie,'souscategorie': souscategorie}) }}\" title=\"{{ \"activer\"|trans }}\"
                                                   style=\"color: #46bf8c!important;background-color: #ffffff !important;border: 1px solid;\"></a>
                                            {% else %}
                                                <a class=\"btn md-lock-open\" href=\"{{ path('enable',{'id':produit.id,'page': page,'search':search, 'categorie': categorie,'souscategorie': souscategorie}) }}\"  title=\"{{ \"deactivate\"|trans }}\"
                                                   style=\"color: #b1b1b1!important;background-color: #ffffff !important;border: 1px solid;\"></a>

                                            {% endif %}


                                            <a data-target=\"#produit_delete{{ produit.id }}\" data-toggle=\"modal\" title=\"{{ \"delete\"|trans }}\"
                                               class=\"btn btn-pure btn-danger  md-delete waves-effect waves-classic\"
                                               style=\"color: #f02038;border: 1px solid;\"></a>


                                            <div class=\"modal fade\" id=\"produit_delete{{ produit.id }}\" aria-hidden=\"true\"  style=\"top: 111px;z-index: 1711;\"
                                                 aria-labelledby=\"exampleModalTabs\"
                                                 role=\"dialog\" tabindex=\"-1\">
                                                <div class=\"modal-dialog modal-simple\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                    aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">×</span>
                                                            </button>
                                                            <h4 class=\"modal-title\" id=\"produit_delete{{ produit.id }}\">{{ 'conf_delete'|trans }}</h4>
                                                        </div>
                                                        <form action=\"{{ path('delete_p_gestionnaire', { 'id': produit.id,'page': page,'search':search, 'categorie': categorie,'souscategorie': souscategorie }) }}\" method=\"post\">
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
                                {{ knp_pagination_render(produits) }}
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
{% block javascripts %}
    {{ parent() }}
    <!--     <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
-->

    <script>
        \$( \"select[name='categorie']\" ).change(function () {
            var matiereID = \$(this).val();
          //  console.log('aaaaa'+matiereID);

            if(matiereID) {


                \$.ajax({
                    url: \"{{ path('get_sous_categorie_from_categorie') }}\",
                    dataType: 'Json',
                    data: {'categorieid':matiereID},
                    type:'GET',
                    success: function(data) {
                        \$('select[name=\"souscategorie\"]').empty();
                        \$('select[name=\"souscategorie').append('<option value=\"\" selected hidden>'+''  +'</option>');

                        for(i = 0; i < data.length; i++) {
                            student = data[i];
                            \$('select[name=\"souscategorie').append('<option value=\"'+ student['id'] +'\">'+ student['nom'] +'</option>');
                        };
                    }
                });


            }else{
                \$('select[name=\"produit[sous_categorie]\"]').empty();
            }
        });
        (function (document, window, \$) {
            'use strict';

            var Site = window.Site;
            \$(document).ready(function () {
                Site.run();
            });

            \$( \"select[name='produit_categorie']\" ).select2();
            \$( \"select[name='produit_sous_categorie']\" ).select2();

        })(document, window, jQuery);
    </script>
{% endblock %}
", "@Backend/gestionnaire/produit/index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gestionnaire\\produit\\index.html.twig");
    }
}
