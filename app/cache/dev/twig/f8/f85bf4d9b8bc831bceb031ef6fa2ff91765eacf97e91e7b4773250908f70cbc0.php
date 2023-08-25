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

/* BackendBundle:gerant/produit:index.html.twig */
class __TwigTemplate_cd2b9168bb250d201b76a5f947a2593c8fd0772cec1a4d1861255bf3846b4a15 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:gerant/produit:index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "BackendBundle:gerant/produit:index.html.twig", 1);
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
        // line 10
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 11
            echo "                <div class=\"col-lg-12 text-center\">
                    <br><br><br><br>
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("enable_error", [], "messages"), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 21
        echo "            ";
        if (((isset($context["warn"]) || array_key_exists("warn", $context)) && (($context["warn"] ?? $this->getContext($context, "warn")) == "1"))) {
            // line 22
            echo "                <div class=\"col-lg-12 text-center\">
                    <br><br><br><br>
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_error", [], "messages"), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 32
        echo "
            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-12 \">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color: #f02138;margin-bottom: 0px!important;\"> ";
        // line 37
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["nbproduits"] ?? $this->getContext($context, "nbproduits"))), "html", null, true);
        echo "</h4>
                            <small style=\"\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produits"), "html", null, true);
        echo "</small>
                        </div>
                    </div>
                    <div class=\"col-lg-6  \" hidden  >
                        <a  href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_produit_gerant");
        echo "\" style=\"margin-top: 3px;\" class=\" float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i> ";
        // line 43
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
                                    <th style=\"border: none;\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filtre"), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;\">
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_gerant_index");
        echo "\" method=\"get\">
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\">
                                                <label class=\"control-label\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produit"), "html", null, true);
        echo "</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"";
        // line 70
        if ((isset($context["search"]) || array_key_exists("search", $context))) {
            echo twig_escape_filter($this->env, ($context["search"] ?? $this->getContext($context, "search")), "html", null, true);
        }
        echo "\" placeholder=\"rechercher produit\">
                                            </div>
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\" style=\"z-index: 1\">
                                                <label class=\"control-label\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
        echo "</label>
                                                <select class=\"form-control\" name=\"categorie\" placeholder=\"choisir une catégorie\">
                                                    <option value=\"\" disabled selected hidden>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une catégorie"), "html", null, true);
        echo "</option>
                                                    ";
        // line 76
        if ((($context["categorie"] ?? $this->getContext($context, "categorie")) == "")) {
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
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 87
            echo "                                                        ";
            if ((isset($context["categorie"]) || array_key_exists("categorie", $context))) {
                // line 88
                echo "                                                            ";
                if ((($context["categorie"] ?? $this->getContext($context, "categorie")) == $this->getAttribute($context["c"], "id", []))) {
                    // line 89
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\" selected>

                                                                    ";
                    // line 91
                    if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                        // line 92
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", []), "html", null, true);
                        echo "

                                                                    ";
                    } else {
                        // line 95
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom_en", []), "html", null, true);
                        echo "
                                                                    ";
                    }
                    // line 97
                    echo "                                                                </option>
                                                            ";
                } else {
                    // line 99
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\">

                                                                    ";
                    // line 101
                    if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                        // line 102
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", []), "html", null, true);
                        echo "

                                                                    ";
                    } else {
                        // line 105
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom_en", []), "html", null, true);
                        echo "
                                                                    ";
                    }
                    // line 107
                    echo "                                                                </option>
                                                            ";
                }
                // line 109
                echo "                                                        ";
            } else {
                // line 110
                echo "                                                            <option class=\"dropdown-item\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                echo "\" role=\"menuitem\">

                                                                ";
                // line 112
                if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                    // line 113
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", []), "html", null, true);
                    echo "

                                                                ";
                } else {
                    // line 116
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom_en", []), "html", null, true);
                    echo "
                                                                ";
                }
                // line 117
                echo "                                                            </option>
                                                        ";
            }
            // line 119
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\"  style=\"z-index: 1\">
                                                <label class=\"control-label\">";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégorie"), "html", null, true);
        echo "</label>
                                                <select class=\"form-control\" name=\"souscategorie\" placeholder=\"choisir une catégorie\">
                                                    <option value=\"\" disabled selected hidden>";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une sous catégorie"), "html", null, true);
        echo "</option>
                                                    ";
        // line 126
        if ((($context["souscategorie"] ?? $this->getContext($context, "souscategorie")) == "")) {
            // line 127
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                            ";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les sous categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        } else {
            // line 131
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                            ";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les sous categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        }
        // line 135
        echo "
                                                    ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["souscategories"] ?? $this->getContext($context, "souscategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["sc"]) {
            // line 137
            echo "                                                        ";
            if ((isset($context["souscategorie"]) || array_key_exists("souscategorie", $context))) {
                // line 138
                echo "                                                            ";
                if ((($context["souscategorie"] ?? $this->getContext($context, "souscategorie")) == $this->getAttribute($context["sc"], "id", []))) {
                    // line 139
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\" selected>

                                                                    ";
                    // line 141
                    if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                        // line 142
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom", []), "html", null, true);
                        echo "

                                                                    ";
                    } else {
                        // line 145
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom_en", []), "html", null, true);
                        echo "
                                                                    ";
                    }
                    // line 147
                    echo "                                                                </option>
                                                            ";
                } else {
                    // line 149
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\">
                                                                    ";
                    // line 150
                    if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                        // line 151
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom", []), "html", null, true);
                        echo "

                                                                    ";
                    } else {
                        // line 154
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom_en", []), "html", null, true);
                        echo "
                                                                    ";
                    }
                    // line 156
                    echo "                                                                </option>
                                                            ";
                }
                // line 158
                echo "                                                        ";
            } else {
                // line 159
                echo "                                                            <option class=\"dropdown-item\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "id", []), "html", null, true);
                echo "\" role=\"menuitem\">
                                                                ";
                // line 160
                if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                    // line 161
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom", []), "html", null, true);
                    echo "

                                                                ";
                } else {
                    // line 164
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom_en", []), "html", null, true);
                    echo "
                                                                ";
                }
                // line 165
                echo "                                                            </option>
                                                        ";
            }
            // line 167
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                                                </select>
                                            </div>
                                            <div style=\"padding-top: 10px\"  class=\"col-lg-3  col-md-3 col-xs-3 text-right\">
                                                <button type=\"submit\" style=\"margin-right: 10px;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i>
                                                </button>
                                                <a href=\"";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExportProduit_gerant");
        echo "\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                                                    <i class=\"icon md-download\" aria-hidden=\"true\"></i> ";
        // line 175
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
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 10%\">";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom/Code"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 10%\">";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fiche_technique"), "html", null, true);
        echo "</th>

                                    <th style=\"width: 10%\">";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 10%\">";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégorie"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 15%\">";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 10%\">";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Qté"), "html", null, true);
        echo "</th>
                                    <th class=\"text-center\" style=\"width: 5%\">";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Est Active"), "html", null, true);
        echo "?</th>
                                    <th class=\"text-center\" style=\"width: 5%\">";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Est Promo"), "html", null, true);
        echo "?</th>
                                    <th class=\"text-right text-nowrap\" style=\"padding-right:42px;width: 10%\">Action

                                    </th>
                                </tr>
                                </thead>
                                <tbody>



                                ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 225
            echo "


                                    <tr >
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
                // line 242
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nomen", []), "html", null, true);
                echo "
                                                    ";
            }
            // line 244
            echo "                                                </h5>
                                                <small>";
            // line 245
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "code", []), "html", null, true);
            echo "</small>
                                            </div>
                                        </td>

                                        <td  style=\"vertical-align: middle;\">
                                            <a  target=\"_blank\" href=\"";
            // line 250
            echo twig_escape_filter($this->env, ($context["legal_notice_directory"] ?? $this->getContext($context, "legal_notice_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "file", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "file", []), "html", null, true);
            echo "</a>
                                        </td>
                                        <td style=\"    vertical-align: middle;\">
                                            ";
            // line 253
            if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                // line 254
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "categorie", []), "nom", []), "html", null, true);
                echo "

                                            ";
            } else {
                // line 257
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "categorie", []), "nom_en", []), "html", null, true);
                echo "

                                            ";
            }
            // line 260
            echo "                                        </td>
                                        <td style=\"    vertical-align: middle;\">
                                            ";
            // line 262
            if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                // line 263
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "sous_categorie", []), "nom", []), "html", null, true);
                echo "

                                            ";
            } else {
                // line 266
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "sous_categorie", []), "nom_en", []), "html", null, true);
                echo "

                                            ";
            }
            // line 269
            echo "                                        </td>
                                        <td style=\"    vertical-align: middle;\">
                                            <h5 class=\"mt-0 mb-5\" style=\"color:#0c3e8f;\">";
            // line 271
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "prix", []), $this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "deviseNbDigitsDecimal", []), $this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "deviseDecimalSeparator", []), $this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "deviseThousandsSeparator", [])), "html", null, true);
            echo "
                                                ";
            // line 272
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "pays", []), "devise", []), "html", null, true);
            echo "</h5>
                                        </td>
                                        <td style=\"    vertical-align: middle;\">
                                            ";
            // line 275
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", []), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"text-center\" style=\"    vertical-align: middle;\">
                                            ";
            // line 278
            if (($this->getAttribute($context["produit"], "is_active", []) == true)) {
                // line 279
                echo "                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                            ";
            } else {
                // line 282
                echo "                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                            ";
            }
            // line 285
            echo "                                        </td>
                                        <td class=\"text-center\" style=\"    vertical-align: middle;\">
                                            ";
            // line 287
            if (($this->getAttribute($context["produit"], "is_promo", []) == true)) {
                // line 288
                echo "                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                            ";
            } else {
                // line 291
                echo "                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                            ";
            }
            // line 294
            echo "                                        </td>
                                        <td class=\"text-right\" style=\"padding-right:5px;vertical-align: middle;\">
                                            <a href=\"";
            // line 296
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_gerant_edit", ["id" => $this->getAttribute($context["produit"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page")), "search" => ($context["search"] ?? $this->getContext($context, "search")), "categorie" => ($context["categorie"] ?? $this->getContext($context, "categorie")), "souscategorie" => ($context["souscategorie"] ?? $this->getContext($context, "souscategorie"))]), "html", null, true);
            echo "\"
                                               class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \"  title=\"";
            // line 297
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
            echo "\"
                                               style=\"color: #b1b1b1;border: 1px solid;\"></a>

                                            ";
            // line 300
            if (($this->getAttribute($context["produit"], "is_active", []) == false)) {
                // line 301
                echo "                                                <a class=\"btn md-lock-open\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enablegerant", ["id" => $this->getAttribute($context["produit"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page")), "search" => ($context["search"] ?? $this->getContext($context, "search")), "categorie" => ($context["categorie"] ?? $this->getContext($context, "categorie")), "souscategorie" => ($context["souscategorie"] ?? $this->getContext($context, "souscategorie"))]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activer"), "html", null, true);
                echo "\"
                                                   style=\"color: #46bf8c!important;background-color: #ffffff !important;border: 1px solid;\"></a>
                                            ";
            } else {
                // line 304
                echo "                                                <a class=\"btn md-lock-open\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enablegerant", ["id" => $this->getAttribute($context["produit"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page")), "search" => ($context["search"] ?? $this->getContext($context, "search")), "categorie" => ($context["categorie"] ?? $this->getContext($context, "categorie")), "souscategorie" => ($context["souscategorie"] ?? $this->getContext($context, "souscategorie"))]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("deactivate"), "html", null, true);
                echo "\"
                                                   style=\"color: #b1b1b1!important;background-color: #ffffff !important;border: 1px solid;\"></a>
                                            ";
            }
            // line 307
            echo "


                                            <a data-target=\"#produit_delete";
            // line 310
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
            echo "\" data-toggle=\"modal\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
            echo "\"
                                               class=\"btn btn-pure btn-danger  md-delete waves-effect waves-classic\"
                                               style=\"color: #f02038;border: 1px solid;\"></a>


                                            <div class=\"modal fade\" id=\"produit_delete";
            // line 315
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
            // line 325
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("conf_delete"), "html", null, true);
            echo "</h4>
                                                        </div>
                                                        <form action=\"";
            // line 327
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_p_gerant", ["id" => $this->getAttribute($context["produit"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page")), "search" => ($context["search"] ?? $this->getContext($context, "search")), "categorie" => ($context["categorie"] ?? $this->getContext($context, "categorie")), "souscategorie" => ($context["souscategorie"] ?? $this->getContext($context, "souscategorie"))]), "html", null, true);
            echo "\" method=\"post\">
                                                            <div class=\"modal-body\">
                                                                <h4 style=\"text-align:center\" >";
            // line 329
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("msg_conf_delete"), "html", null, true);
            echo "</h4>
                                                            </div>
                                                            <div class=\"panel-footer\">
                                                                <button style=\"margin-left: 80%;width: 100px\" type=\"submit\"
                                                                        class=\"pull-right btn btn-block btn-danger\">";
            // line 333
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
        // line 345
        echo "                                </tbody>
                            </table>
                            <div class=\"navigation\">
                                ";
        // line 348
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

    // line 363
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 364
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!--     <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
-->

    <script>
        \$( \"select[name='categorie']\" ).change(function () {
            var matiereID = \$(this).val();
            console.log('aaaaa'+matiereID);
            if(matiereID) {


                \$.ajax({
                    url: \"";
        // line 376
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_sous_categorie_from_categorie");
        echo "\",
                    dataType: 'Json',
                    data: {'categorieid':matiereID},
                    type:'GET',
                    success: function(data) {
                        \$('select[name=\"souscategorie\"]').empty();
                        \$('select[name=\"souscategorie').append('<option value=\"\" selected hidden>'+ '' +'</option>');

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
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:gerant/produit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  808 => 376,  792 => 364,  786 => 363,  764 => 348,  759 => 345,  741 => 333,  734 => 329,  729 => 327,  722 => 325,  709 => 315,  699 => 310,  694 => 307,  685 => 304,  676 => 301,  674 => 300,  668 => 297,  664 => 296,  660 => 294,  655 => 291,  650 => 288,  648 => 287,  644 => 285,  639 => 282,  634 => 279,  632 => 278,  626 => 275,  620 => 272,  616 => 271,  612 => 269,  605 => 266,  598 => 263,  596 => 262,  592 => 260,  585 => 257,  578 => 254,  576 => 253,  566 => 250,  558 => 245,  555 => 244,  549 => 242,  542 => 239,  540 => 238,  534 => 234,  528 => 232,  525 => 231,  523 => 230,  516 => 225,  512 => 224,  499 => 214,  495 => 213,  491 => 212,  487 => 211,  483 => 210,  479 => 209,  474 => 207,  470 => 206,  466 => 205,  433 => 175,  429 => 174,  421 => 168,  415 => 167,  411 => 165,  405 => 164,  398 => 161,  396 => 160,  391 => 159,  388 => 158,  384 => 156,  378 => 154,  371 => 151,  369 => 150,  364 => 149,  360 => 147,  354 => 145,  347 => 142,  345 => 141,  339 => 139,  336 => 138,  333 => 137,  329 => 136,  326 => 135,  320 => 132,  317 => 131,  311 => 128,  308 => 127,  306 => 126,  302 => 125,  297 => 123,  292 => 120,  286 => 119,  282 => 117,  276 => 116,  269 => 113,  267 => 112,  261 => 110,  258 => 109,  254 => 107,  248 => 105,  241 => 102,  239 => 101,  233 => 99,  229 => 97,  223 => 95,  216 => 92,  214 => 91,  208 => 89,  205 => 88,  202 => 87,  198 => 86,  195 => 85,  189 => 82,  186 => 81,  180 => 78,  177 => 77,  175 => 76,  171 => 75,  166 => 73,  158 => 70,  154 => 69,  149 => 67,  140 => 61,  119 => 43,  115 => 42,  108 => 38,  104 => 37,  97 => 32,  90 => 28,  82 => 22,  79 => 21,  72 => 17,  64 => 11,  62 => 10,  58 => 9,  52 => 5,  46 => 4,  30 => 1,);
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
            <h1 class=\"page-title\">{{ \"Gestion Des Produits\"|trans }}</h1>
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
            {% if warn is defined and   warn == '1' %}
                <div class=\"col-lg-12 text-center\">
                    <br><br><br><br>
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        {{ \"delete_error\"|trans({}, 'messages') }}
                    </div>
                </div>
            {% endif %}

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-12 \">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color: #f02138;margin-bottom: 0px!important;\"> {{ nbproduits|length }}</h4>
                            <small style=\"\">{{ \"Produits\"|trans }}</small>
                        </div>
                    </div>
                    <div class=\"col-lg-6  \" hidden  >
                        <a  href=\"{{ path('new_produit_gerant') }}\" style=\"margin-top: 3px;\" class=\" float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
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
                                    <th style=\"border: none;\">{{ \"Filtre\"|trans }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;\">
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"{{ path('produit_gerant_index') }}\" method=\"get\">
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\">
                                                <label class=\"control-label\">{{ \"Produit\"|trans }}</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"{% if search is defined %}{{search}}{% endif %}\" placeholder=\"rechercher produit\">
                                            </div>
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\" style=\"z-index: 1\">
                                                <label class=\"control-label\">{{\"Catégorie\"|trans}}</label>
                                                <select class=\"form-control\" name=\"categorie\" placeholder=\"choisir une catégorie\">
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

                                                                    {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                                        {{ c.nom }}

                                                                    {% else %}
                                                                        {{ c.nom_en }}
                                                                    {% endif %}
                                                                </option>
                                                            {% else %}
                                                                <option class=\"dropdown-item\" value=\"{{ c.id }}\" role=\"menuitem\">

                                                                    {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                                        {{ c.nom }}

                                                                    {% else %}
                                                                        {{ c.nom_en }}
                                                                    {% endif %}
                                                                </option>
                                                            {% endif %}
                                                        {% else %}
                                                            <option class=\"dropdown-item\" value=\"{{ c.id }}\" role=\"menuitem\">

                                                                {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                                    {{ c.nom }}

                                                                {% else %}
                                                                    {{ c.nom_en }}
                                                                {% endif %}                                                            </option>
                                                        {% endif %}
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\"  style=\"z-index: 1\">
                                                <label class=\"control-label\">{{\"Sous Catégorie\"|trans}}</label>
                                                <select class=\"form-control\" name=\"souscategorie\" placeholder=\"choisir une catégorie\">
                                                    <option value=\"\" disabled selected hidden>{{\"choisir une sous catégorie\"|trans}}</option>
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

                                                                    {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                                        {{ sc.nom }}

                                                                    {% else %}
                                                                        {{ sc.nom_en }}
                                                                    {% endif %}
                                                                </option>
                                                            {% else %}
                                                                <option class=\"dropdown-item\" value=\"{{ sc.id }}\" role=\"menuitem\">
                                                                    {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                                        {{ sc.nom }}

                                                                    {% else %}
                                                                        {{ sc.nom_en }}
                                                                    {% endif %}
                                                                </option>
                                                            {% endif %}
                                                        {% else %}
                                                            <option class=\"dropdown-item\" value=\"{{ sc.id }}\" role=\"menuitem\">
                                                                {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                                    {{ sc.nom }}

                                                                {% else %}
                                                                    {{ sc.nom_en }}
                                                                {% endif %}                                                            </option>
                                                        {% endif %}
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div style=\"padding-top: 10px\"  class=\"col-lg-3  col-md-3 col-xs-3 text-right\">
                                                <button type=\"submit\" style=\"margin-right: 10px;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i>
                                                </button>
                                                <a href=\"{{ path('ExportProduit_gerant') }}\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
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
                                    <th style=\"width: 15%;padding-left: 20px;\" >{{ \"Image\"|trans }}</th>
                                    <th style=\"width: 10%\">{{ \"Nom/Code\"|trans }}</th>
                                    <th style=\"width: 10%\">{{\"Fiche_technique\"|trans}}</th>

                                    <th style=\"width: 10%\">{{\"Catégorie\"|trans}}</th>
                                    <th style=\"width: 10%\">{{\"Sous Catégorie\"|trans}}</th>
                                    <th style=\"width: 15%\">{{ \"Prix\"|trans }}</th>
                                    <th style=\"width: 10%\">{{\"Qté\"|trans}}</th>
                                    <th class=\"text-center\" style=\"width: 5%\">{{ \"Est Active\"|trans }}?</th>
                                    <th class=\"text-center\" style=\"width: 5%\">{{ \"Est Promo\"|trans }}?</th>
                                    <th class=\"text-right text-nowrap\" style=\"padding-right:42px;width: 10%\">Action

                                    </th>
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
                                                        {{ produit.nomen}}
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
                                                {{ produit.categorie.nom_en}}

                                            {% endif %}
                                        </td>
                                        <td style=\"    vertical-align: middle;\">
                                            {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                {{ produit.sous_categorie.nom}}

                                            {% else %}
                                                {{ produit.sous_categorie.nom_en}}

                                            {% endif %}
                                        </td>
                                        <td style=\"    vertical-align: middle;\">
                                            <h5 class=\"mt-0 mb-5\" style=\"color:#0c3e8f;\">{{ produit.prix |number_format(pays.deviseNbDigitsDecimal, pays.deviseDecimalSeparator, pays.deviseThousandsSeparator)}}
                                                {{ app.user.pays.devise }}</h5>
                                        </td>
                                        <td style=\"    vertical-align: middle;\">
                                            {{ produit.quantite}}
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
                                        <td class=\"text-right\" style=\"padding-right:5px;vertical-align: middle;\">
                                            <a href=\"{{ path('produit_gerant_edit', {'id': produit.id ,'page':page,'search':search, 'categorie': categorie,'souscategorie': souscategorie}) }}\"
                                               class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \"  title=\"{{ \"edit\"|trans }}\"
                                               style=\"color: #b1b1b1;border: 1px solid;\"></a>

                                            {% if produit.is_active == false %}
                                                <a class=\"btn md-lock-open\" href=\"{{ path('enablegerant',{'id':produit.id,'page':page,'search':search, 'categorie': categorie,'souscategorie': souscategorie}) }}\" title=\"{{ \"activer\"|trans }}\"
                                                   style=\"color: #46bf8c!important;background-color: #ffffff !important;border: 1px solid;\"></a>
                                            {% else %}
                                                <a class=\"btn md-lock-open\" href=\"{{ path('enablegerant',{'id':produit.id,'page':page,'search':search, 'categorie': categorie,'souscategorie': souscategorie}) }}\" title=\"{{ \"deactivate\"|trans }}\"
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
                                                        <form action=\"{{ path('delete_p_gerant', { 'id': produit.id,'page':page,'search':search, 'categorie': categorie,'souscategorie': souscategorie }) }}\" method=\"post\">
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
            console.log('aaaaa'+matiereID);
            if(matiereID) {


                \$.ajax({
                    url: \"{{ path('get_sous_categorie_from_categorie') }}\",
                    dataType: 'Json',
                    data: {'categorieid':matiereID},
                    type:'GET',
                    success: function(data) {
                        \$('select[name=\"souscategorie\"]').empty();
                        \$('select[name=\"souscategorie').append('<option value=\"\" selected hidden>'+ '' +'</option>');

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
    </script>
{% endblock %}
", "BackendBundle:gerant/produit:index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/gerant/produit/index.html.twig");
    }
}
