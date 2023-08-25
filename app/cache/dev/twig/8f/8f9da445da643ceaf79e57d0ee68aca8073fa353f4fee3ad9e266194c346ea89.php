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

/* @Backend/gestionnaire/produit/activerproduits.html.twig */
class __TwigTemplate_f5e5a0fa469b2241c98d87a9fe233fcf6cc2de166d5cf09e4ca2858f97504317 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gestionnaire/produit/activerproduits.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/gestionnaire/produit/activerproduits.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catalogue"), "html", null, true);
        echo "</h1>

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color: #f02138;margin-bottom: 0px!important;\"> ";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["nbproduits"] ?? $this->getContext($context, "nbproduits"))), "html", null, true);
        echo "</h4>
                            <small style=\"\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produits"), "html", null, true);
        echo "</small>
                        </div>
                    </div>
                    <div class=\"col-lg-6 \" >
                        <!--
                         <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_produit_gerant");
        echo "\" style=\"margin-top: 3px;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i> Ajouter
                        </a>
                        -->

                    </div>
                </div>
            </div>
        </div>
        <form  action=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_gestion_toactivate_index");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produit"), "html", null, true);
        echo "</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"";
        // line 48
        if ((isset($context["search"]) || array_key_exists("search", $context))) {
            echo twig_escape_filter($this->env, ($context["search"] ?? $this->getContext($context, "search")), "html", null, true);
        }
        echo "\" placeholder=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produit"), "html", null, true);
        echo ">
                                            </div>
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\">
                                                <label class=\"control-label\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
        echo "</label>
                                                <select class=\"form-control\" name=\"categorie\" placeholder=";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une catégorie"), "html", null, true);
        echo ">
                                                    <option value=\"\" disabled selected hidden>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une catégorie"), "html", null, true);
        echo "</option>
                                                    ";
        // line 54
        if ((($context["categorie"] ?? $this->getContext($context, "categorie")) == "")) {
            // line 55
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                            ";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        } else {
            // line 59
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                            ";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        }
        // line 63
        echo "
                                                    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 65
            echo "                                                        ";
            if ((isset($context["categorie"]) || array_key_exists("categorie", $context))) {
                // line 66
                echo "                                                            ";
                if ((($context["categorie"] ?? $this->getContext($context, "categorie")) == $this->getAttribute($context["c"], "id", []))) {
                    // line 67
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\" selected>
                                                                    ";
                    // line 68
                    if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                        // line 69
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom_en", []), "html", null, true);
                        echo "
                                                                    ";
                    } else {
                        // line 71
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", []), "html", null, true);
                        echo "
                                                                    ";
                    }
                    // line 72
                    echo "                                                                </option>
                                                            ";
                } else {
                    // line 74
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\">
                                                                    ";
                    // line 75
                    if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                        // line 76
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom_en", []), "html", null, true);
                        echo "
                                                                    ";
                    } else {
                        // line 78
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", []), "html", null, true);
                        echo "
                                                                    ";
                    }
                    // line 79
                    echo "                                                                </option>
                                                            ";
                }
                // line 81
                echo "                                                        ";
            } else {
                // line 82
                echo "                                                            <option class=\"dropdown-item\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                echo "\" role=\"menuitem\">

                                                                ";
                // line 84
                if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                    // line 85
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom_en", []), "html", null, true);
                    echo "
                                                                ";
                } else {
                    // line 87
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", []), "html", null, true);
                    echo "
                                                                ";
                }
                // line 89
                echo "                                                            </option>
                                                        ";
            }
            // line 91
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\">
                                                <label class=\"control-label\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégorie"), "html", null, true);
        echo "</label>
                                                <select class=\"form-control\"  name=\"souscategorie\" placeholder=";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une sous catégorie"), "html", null, true);
        echo ">
                                                    <option value=\"\" disabled selected hidden>
                                                        ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une sous catégorie"), "html", null, true);
        echo "</option>
                                                    ";
        // line 99
        if ((($context["souscategorie"] ?? $this->getContext($context, "souscategorie")) == "")) {
            // line 100
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                            ";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les sous categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        } else {
            // line 104
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                            ";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les sous categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        }
        // line 108
        echo "
                                                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["souscategories"] ?? $this->getContext($context, "souscategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["sc"]) {
            // line 110
            echo "                                                        ";
            if ((isset($context["souscategorie"]) || array_key_exists("souscategorie", $context))) {
                // line 111
                echo "                                                            ";
                if ((($context["souscategorie"] ?? $this->getContext($context, "souscategorie")) == $this->getAttribute($context["sc"], "id", []))) {
                    // line 112
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\" selected>
                                                                    ";
                    // line 113
                    if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                        // line 114
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom_en", []), "html", null, true);
                        echo "

                                                                    ";
                    } else {
                        // line 117
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom", []), "html", null, true);
                        echo "
                                                                    ";
                    }
                    // line 119
                    echo "                                                                </option>
                                                            ";
                } else {
                    // line 121
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\">
                                                                    ";
                    // line 122
                    if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                        // line 123
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom_en", []), "html", null, true);
                        echo "

                                                                    ";
                    } else {
                        // line 126
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom", []), "html", null, true);
                        echo "
                                                                    ";
                    }
                    // line 127
                    echo "                                                                </option>
                                                            ";
                }
                // line 129
                echo "                                                        ";
            } else {
                // line 130
                echo "                                                            <option class=\"dropdown-item\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "id", []), "html", null, true);
                echo "\" role=\"menuitem\">
                                                                ";
                // line 131
                if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                    // line 132
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom_en", []), "html", null, true);
                    echo "

                                                                ";
                } else {
                    // line 135
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom", []), "html", null, true);
                    echo "
                                                                ";
                }
                // line 136
                echo "                                                            </option>
                                                        ";
            }
            // line 138
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                                                </select>
                                            </div>
                                            <div style=\"padding-top: 10px\"  class=\"col-lg-3  col-md-3 col-xs-3 text-right\">
                                                <button type=\"submit\" style=\"margin-right: 10px;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i>
                                                </button>
                                                <a hidden href=\"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExportProduit_gerant");
        echo "\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                                                    <i class=\"icon md-download\" aria-hidden=\"true\"></i> ";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("exporter"), "html", null, true);
        echo "</a>



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
                                <!-- Example Bordered Table -->

                                ";
        // line 176
        echo "
                                <table class=\"table table-striped\">
                                    <thead>
                                    <tr >

                                        <th style=\"width: 15%;padding-left: 20px;\" hidden>";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activer"), "html", null, true);
        echo "</th>
                                        <th style=\"width: 15%;padding-left: 20px;\" >";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image"), "html", null, true);
        echo "</th>
                                        <th style=\"width: 15%\">";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom/Code"), "html", null, true);
        echo "</th>
                                        <th style=\"width: 12%\">";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
        echo "</th>
                                        <th style=\"width: 13%\">";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégorie"), "html", null, true);
        echo "</th>
                                        <th class=\"text-center\" style=\"width: 20%\">";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action"), "html", null, true);
        echo "?
                                            <a type=\"submit\"  href=\"";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activate_all");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cloneallproducts"), "html", null, true);
        echo "\" style=\"margin-left: 10px;font-size: 11px;text-transform: capitalize;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                ";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ActiverAll"), "html", null, true);
        echo "</a>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>



                                    ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 197
            echo "


                                        <tr >

                                            <td  style=\"padding-left: 20px ;vertical-align: middle\" hidden>
                                                <div class=\"checkbox-custom checkbox-primary center-block float-left\">
                                                    <input id=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
            echo "\" type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
            echo "\"
                                                           name='checkboxvar[]'>

                                                    <label for=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
            echo "\" class=\"namecategorie\"></label>
                                                </div>

                                            </td>


                                            <td style=\"vertical-align: middle\" >
                                                ";
            // line 214
            if ($this->getAttribute($context["produit"], "image", [])) {
                // line 215
                echo "                                                    <img class=\"navbar-brand-logo\" style=\"height: 50px;width: auto;\"
                                                         src=\"";
                // line 216
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/produits/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "image", []), "html", null, true);
                echo "\">
                                                ";
            }
            // line 218
            echo "                                            </td>
                                            <td style=\"    vertical-align: middle;\">
                                                <div class=\"media-body\">
                                                    <h5 class=\"mt-0 mb-5\">
                                                        ";
            // line 222
            if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                // line 223
                echo "                                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nomen", []), "html", null, true);
                echo "
                                                        ";
            } else {
                // line 225
                echo "                                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", []), "html", null, true);
                echo "
                                                        ";
            }
            // line 227
            echo "
                                                    </h5>
                                                    <small>";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "code", []), "html", null, true);
            echo "</small>
                                                </div>
                                            </td>
                                            <td style=\"    vertical-align: middle;\">
                                                ";
            // line 233
            if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                // line 234
                echo "
                                                ";
                // line 235
                if (( !(null === $this->getAttribute($this->getAttribute($context["produit"], "categorie", []), "nom_en", [])) && $this->getAttribute($this->getAttribute($context["produit"], "categorie", [], "any", false, true), "nom_en", [], "any", true, true))) {
                    // line 236
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "categorie", []), "nom", []), "html", null, true);
                    echo "

                                                ";
                } else {
                    // line 239
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "categorie", []), "nom_en", []), "html", null, true);
                    echo "

                                                ";
                }
                // line 242
                echo "
                                                ";
            } else {
                // line 244
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "categorie", []), "nom", []), "html", null, true);
                echo "
                                                ";
            }
            // line 246
            echo "                                            </td>
                                            <td style=\"    vertical-align: middle;\">

                                                ";
            // line 249
            if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                // line 250
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "sous_categorie", []), "nom_en", []), "html", null, true);
                echo "

                                                ";
            } else {
                // line 253
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "sous_categorie", []), "nom", []), "html", null, true);
                echo "
                                                ";
            }
            // line 255
            echo "                                            </td>





                                            <td class=\"text-center\" style=\"    vertical-align: middle;\">
                                                <a class=\"btn md-lock-open\" href=\"";
            // line 262
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activateproduit", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activer"), "html", null, true);
            echo "\"
                                                        style=\"color: #46bf8c!important;background-color: #ffffff !important;border: 1px solid;\"></a>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "                                    </tbody>
                                </table>

                                <div class=\"navigation\">
                                    ";
        // line 271
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

        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 286
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 287
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!--     <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
-->

    <script>
        \$( \"select[name='categorie']\" ).change(function () {
            var matiereID = \$(this).val();
            if(matiereID) {


                \$.ajax({
                    url: \"";
        // line 298
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_sous_categorie_from_categorie");
        echo "\",
                    dataType: 'Json',
                    data: {'categorieid':matiereID},
                    type:'GET',
                    success: function(data) {
                        \$('select[name=\"souscategorie\"]').empty();
                        \$('select[name=\"souscategorie').append('<option value=\"\" selected hidden>'+ 'choisir une sous categorie' +'</option>');

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

            \$( \"select[name='categorie']\" ).select2();
            \$( \"select[name='souscategorie']\" ).select2();

        })(document, window, jQuery);



        /* \$(document).ready(function() {
             //set initial state.
             \$(\"input[name='check[]']\").change(function () {
                 var len = \$(\"input[name='check[]']:checked\").length;
                 console.log(\"len \"+len);
             });
         });*/

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
        return "@Backend/gestionnaire/produit/activerproduits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  668 => 298,  653 => 287,  647 => 286,  625 => 271,  619 => 267,  606 => 262,  597 => 255,  591 => 253,  584 => 250,  582 => 249,  577 => 246,  571 => 244,  567 => 242,  560 => 239,  553 => 236,  551 => 235,  548 => 234,  546 => 233,  539 => 229,  535 => 227,  529 => 225,  523 => 223,  521 => 222,  515 => 218,  509 => 216,  506 => 215,  504 => 214,  494 => 207,  486 => 204,  477 => 197,  473 => 196,  462 => 188,  456 => 187,  452 => 186,  448 => 185,  444 => 184,  440 => 183,  436 => 182,  432 => 181,  425 => 176,  396 => 146,  392 => 145,  384 => 139,  378 => 138,  374 => 136,  368 => 135,  361 => 132,  359 => 131,  354 => 130,  351 => 129,  347 => 127,  341 => 126,  334 => 123,  332 => 122,  327 => 121,  323 => 119,  317 => 117,  310 => 114,  308 => 113,  303 => 112,  300 => 111,  297 => 110,  293 => 109,  290 => 108,  284 => 105,  281 => 104,  275 => 101,  272 => 100,  270 => 99,  266 => 98,  261 => 96,  257 => 95,  252 => 92,  246 => 91,  242 => 89,  236 => 87,  230 => 85,  228 => 84,  222 => 82,  219 => 81,  215 => 79,  209 => 78,  203 => 76,  201 => 75,  196 => 74,  192 => 72,  186 => 71,  180 => 69,  178 => 68,  173 => 67,  170 => 66,  167 => 65,  163 => 64,  160 => 63,  154 => 60,  151 => 59,  145 => 56,  142 => 55,  140 => 54,  136 => 53,  132 => 52,  128 => 51,  118 => 48,  114 => 47,  104 => 40,  89 => 28,  77 => 19,  69 => 14,  65 => 13,  56 => 7,  52 => 5,  46 => 4,  30 => 1,);
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
            <h1 class=\"page-title\">{{ \"Catalogue\"|trans }}</h1>

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color: #f02138;margin-bottom: 0px!important;\"> {{ nbproduits|length }}</h4>
                            <small style=\"\">{{ \"Produits\"|trans }}</small>
                        </div>
                    </div>
                    <div class=\"col-lg-6 \" >
                        <!--
                         <a href=\"{{ path('new_produit_gerant') }}\" style=\"margin-top: 3px;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i> Ajouter
                        </a>
                        -->

                    </div>
                </div>
            </div>
        </div>
        <form  action=\"{{ path('produit_gestion_toactivate_index') }}\" method=\"get\">

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
                                                <label class=\"control-label\">{{ \"Produit\"|trans }}</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"{% if search is defined %}{{search}}{% endif %}\" placeholder={{ \"Produit\"|trans }}>
                                            </div>
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\">
                                                <label class=\"control-label\">{{\"Catégorie\"|trans}}</label>
                                                <select class=\"form-control\" name=\"categorie\" placeholder={{\"choisir une catégorie\"|trans}}>
                                                    <option value=\"\" disabled selected hidden>{{\"choisir une catégorie\"|trans}}</option>
                                                    {% if categorie == '' %}
                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                            {{ \"Toutes les categories\"|trans }}
                                                        </option>
                                                    {% else %}
                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                            {{ \"Toutes les categories\"|trans }}
                                                        </option>
                                                    {% endif %}

                                                    {% for c in categories %}
                                                        {% if categorie is defined   %}
                                                            {% if categorie == c.id %}
                                                                <option class=\"dropdown-item\" value=\"{{ c.id }}\" role=\"menuitem\" selected>
                                                                    {% if pays.frontLanguage  == 'en' or pays.frontLanguage  == 'EN' %}
                                                                        {{ c.nom_en }}
                                                                    {% else %}
                                                                        {{ c.nom }}
                                                                    {% endif %}                                                                </option>
                                                            {% else %}
                                                                <option class=\"dropdown-item\" value=\"{{ c.id }}\" role=\"menuitem\">
                                                                    {% if pays.frontLanguage  == 'en' or pays.frontLanguage  == 'EN' %}
                                                                        {{ c.nom_en }}
                                                                    {% else %}
                                                                        {{ c.nom }}
                                                                    {% endif %}                                                                </option>
                                                            {% endif %}
                                                        {% else %}
                                                            <option class=\"dropdown-item\" value=\"{{ c.id }}\" role=\"menuitem\">

                                                                {% if pays.frontLanguage  == 'en' or pays.frontLanguage  == 'EN' %}
                                                                    {{ c.nom_en }}
                                                                {% else %}
                                                                    {{ c.nom }}
                                                                {% endif %}
                                                            </option>
                                                        {% endif %}
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\">
                                                <label class=\"control-label\">{{\"Sous Catégorie\"|trans}}</label>
                                                <select class=\"form-control\"  name=\"souscategorie\" placeholder={{\"choisir une sous catégorie\"|trans}}>
                                                    <option value=\"\" disabled selected hidden>
                                                        {{\"choisir une sous catégorie\"|trans}}</option>
                                                    {% if souscategorie== '' %}
                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                            {{ \"Toutes les sous categories\"|trans }}
                                                        </option>
                                                    {% else %}
                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                            {{ \"Toutes les sous categories\"|trans }}
                                                        </option>
                                                    {% endif %}

                                                    {% for sc in souscategories %}
                                                        {% if souscategorie is defined   %}
                                                            {% if souscategorie == sc.id %}
                                                                <option class=\"dropdown-item\" value=\"{{ sc.id }}\" role=\"menuitem\" selected>
                                                                    {% if pays.frontLanguage  == 'en' or pays.frontLanguage  == 'EN' %}
                                                                        {{ sc.nom_en }}

                                                                    {% else %}
                                                                        {{ sc.nom }}
                                                                    {% endif %}
                                                                </option>
                                                            {% else %}
                                                                <option class=\"dropdown-item\" value=\"{{ sc.id }}\" role=\"menuitem\">
                                                                    {% if pays.frontLanguage  == 'en' or pays.frontLanguage  == 'EN' %}
                                                                        {{ sc.nom_en }}

                                                                    {% else %}
                                                                        {{ sc.nom }}
                                                                    {% endif %}                                                                </option>
                                                            {% endif %}
                                                        {% else %}
                                                            <option class=\"dropdown-item\" value=\"{{ sc.id }}\" role=\"menuitem\">
                                                                {% if pays.frontLanguage  == 'en' or pays.frontLanguage  == 'EN' %}
                                                                    {{ sc.nom_en }}

                                                                {% else %}
                                                                    {{ sc.nom }}
                                                                {% endif %}                                                            </option>
                                                        {% endif %}
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div style=\"padding-top: 10px\"  class=\"col-lg-3  col-md-3 col-xs-3 text-right\">
                                                <button type=\"submit\" style=\"margin-right: 10px;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i>
                                                </button>
                                                <a hidden href=\"{{ path('ExportProduit_gerant') }}\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                                                    <i class=\"icon md-download\" aria-hidden=\"true\"></i> {{ \"exporter\"|trans }}</a>



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
                                <!-- Example Bordered Table -->

                                {#
                                 <a href=\"{{ path('produit_toactivate_index') }}\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-outline-success waves-effect waves-classic waves-effect waves-classic\">
                                    <i class=\"icon md-lock-open\" aria-hidden=\"true\"></i>Activer</a>
                                #}

                                <table class=\"table table-striped\">
                                    <thead>
                                    <tr >

                                        <th style=\"width: 15%;padding-left: 20px;\" hidden>{{ \"Activer\"|trans }}</th>
                                        <th style=\"width: 15%;padding-left: 20px;\" >{{ \"Image\"|trans }}</th>
                                        <th style=\"width: 15%\">{{ \"Nom/Code\"|trans }}</th>
                                        <th style=\"width: 12%\">{{\"Catégorie\"|trans}}</th>
                                        <th style=\"width: 13%\">{{\"Sous Catégorie\"|trans}}</th>
                                        <th class=\"text-center\" style=\"width: 20%\">{{ \"Action\"|trans }}?
                                            <a type=\"submit\"  href=\"{{ path('activate_all') }}\" title=\"{{ \"cloneallproducts\"|trans }}\" style=\"margin-left: 10px;font-size: 11px;text-transform: capitalize;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                {{ \"ActiverAll\"|trans }}</a>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>



                                    {% for produit in produits %}



                                        <tr >

                                            <td  style=\"padding-left: 20px ;vertical-align: middle\" hidden>
                                                <div class=\"checkbox-custom checkbox-primary center-block float-left\">
                                                    <input id=\"{{ produit.id }}\" type=\"checkbox\" value=\"{{ produit.id }}\"
                                                           name='checkboxvar[]'>

                                                    <label for=\"{{ produit.id }}\" class=\"namecategorie\"></label>
                                                </div>

                                            </td>


                                            <td style=\"vertical-align: middle\" >
                                                {% if produit.image %}
                                                    <img class=\"navbar-brand-logo\" style=\"height: 50px;width: auto;\"
                                                         src=\"{{ asset('uploads/produits/') }}{{ produit.image }}\">
                                                {% endif %}
                                            </td>
                                            <td style=\"    vertical-align: middle;\">
                                                <div class=\"media-body\">
                                                    <h5 class=\"mt-0 mb-5\">
                                                        {% if pays.frontLanguage  == 'en' or pays.frontLanguage  == 'EN' %}
                                                            {{ produit.nomen}}
                                                        {% else %}
                                                            {{ produit.nom}}
                                                        {% endif %}

                                                    </h5>
                                                    <small>{{ produit.code}}</small>
                                                </div>
                                            </td>
                                            <td style=\"    vertical-align: middle;\">
                                                {% if pays.frontLanguage  == 'en' or pays.frontLanguage  == 'EN' %}

                                                {% if produit.categorie.nom_en is not null and produit.categorie.nom_en is defined %}
                                                    {{ produit.categorie.nom}}

                                                {% else %}
                                                    {{ produit.categorie.nom_en}}

                                                {% endif %}

                                                {% else %}
                                                    {{ produit.categorie.nom}}
                                                {% endif %}
                                            </td>
                                            <td style=\"    vertical-align: middle;\">

                                                {% if pays.frontLanguage  == 'en' or pays.frontLanguage  == 'EN' %}
                                                    {{ produit.sous_categorie.nom_en}}

                                                {% else %}
                                                    {{ produit.sous_categorie.nom}}
                                                {% endif %}
                                            </td>





                                            <td class=\"text-center\" style=\"    vertical-align: middle;\">
                                                <a class=\"btn md-lock-open\" href=\"{{ path('activateproduit',{'id':produit.id}) }}\" title=\"{{ \"activer\"|trans }}\"
                                                        style=\"color: #46bf8c!important;background-color: #ffffff !important;border: 1px solid;\"></a>
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

        </form>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <!--     <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
-->

    <script>
        \$( \"select[name='categorie']\" ).change(function () {
            var matiereID = \$(this).val();
            if(matiereID) {


                \$.ajax({
                    url: \"{{ path('get_sous_categorie_from_categorie') }}\",
                    dataType: 'Json',
                    data: {'categorieid':matiereID},
                    type:'GET',
                    success: function(data) {
                        \$('select[name=\"souscategorie\"]').empty();
                        \$('select[name=\"souscategorie').append('<option value=\"\" selected hidden>'+ 'choisir une sous categorie' +'</option>');

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

            \$( \"select[name='categorie']\" ).select2();
            \$( \"select[name='souscategorie']\" ).select2();

        })(document, window, jQuery);



        /* \$(document).ready(function() {
             //set initial state.
             \$(\"input[name='check[]']\").change(function () {
                 var len = \$(\"input[name='check[]']:checked\").length;
                 console.log(\"len \"+len);
             });
         });*/

        \$('#CheckAll').click(function () {

            if (\$('#CheckAll').is(':checked') == true) {

                alert(\";)\");
            }
        });

    </script>
{% endblock %}
", "@Backend/gestionnaire/produit/activerproduits.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gestionnaire\\produit\\activerproduits.html.twig");
    }
}
