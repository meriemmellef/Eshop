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

/* BackendBundle:admin/produit:index.html.twig */
class __TwigTemplate_39458a120f88cf26c323144df4cc6cf594e6eb1042203e7e9a2ff7baa55af541 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:admin/produit:index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "BackendBundle:admin/produit:index.html.twig", 1);
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

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-6 \">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color: #f02138;margin-bottom: 0px!important;\"> ";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["nbproduits"] ?? $this->getContext($context, "nbproduits"))), "html", null, true);
        echo "</h4>
                            <small style=\"\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produits"), "html", null, true);
        echo "</small>
                        </div>
                    </div>
                    <div class=\"col-lg-6 \">
                        <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_produit_admin");
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
                                    <th style=\"border: none;\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filtre"), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;\">
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_admin_index");
        echo "\" method=\"get\">
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
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\" style=\"z-index: 1\">
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
                    if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr")) {
                        // line 69
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", []), "html", null, true);
                        echo "

                                                                    ";
                    } else {
                        // line 72
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom_en", []), "html", null, true);
                        echo "
                                                                    ";
                    }
                    // line 74
                    echo "                                                                </option>
                                                            ";
                } else {
                    // line 76
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\">
                                                                    ";
                    // line 77
                    if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr")) {
                        // line 78
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", []), "html", null, true);
                        echo "

                                                                    ";
                    } else {
                        // line 81
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom_en", []), "html", null, true);
                        echo "
                                                                    ";
                    }
                    // line 83
                    echo "                                                                </option>
                                                            ";
                }
                // line 85
                echo "                                                        ";
            } else {
                // line 86
                echo "                                                            <option class=\"dropdown-item\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                echo "\" role=\"menuitem\">
                                                                ";
                // line 87
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr")) {
                    // line 88
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", []), "html", null, true);
                    echo "

                                                                ";
                } else {
                    // line 91
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom_en", []), "html", null, true);
                    echo "
                                                                ";
                }
                // line 93
                echo "                                                            </option>
                                                        ";
            }
            // line 95
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\" style=\"z-index: 1\">
                                                <label class=\"control-label\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégorie"), "html", null, true);
        echo "</label>
                                                <select class=\"form-control\" name=\"souscategorie\" placeholder=";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une sous catégorie"), "html", null, true);
        echo ">
                                                    <option value=\"\" disabled selected hidden>";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une sous catégorie"), "html", null, true);
        echo "</option>
                                                    ";
        // line 102
        if ((($context["souscategorie"] ?? $this->getContext($context, "souscategorie")) == "")) {
            // line 103
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                            ";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les sous categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        } else {
            // line 107
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                            ";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les sous categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        }
        // line 111
        echo "
                                                    ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["souscategories"] ?? $this->getContext($context, "souscategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["sc"]) {
            // line 113
            echo "                                                        ";
            if ((isset($context["souscategorie"]) || array_key_exists("souscategorie", $context))) {
                // line 114
                echo "                                                            ";
                if ((($context["souscategorie"] ?? $this->getContext($context, "souscategorie")) == $this->getAttribute($context["sc"], "id", []))) {
                    // line 115
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\" selected>

                                                                    ";
                    // line 117
                    if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr")) {
                        // line 118
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom", []), "html", null, true);
                        echo "

                                                                    ";
                    } else {
                        // line 121
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom_en", []), "html", null, true);
                        echo "
                                                                    ";
                    }
                    // line 123
                    echo "                                                                </option>
                                                            ";
                } else {
                    // line 125
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\">
                                                                    ";
                    // line 126
                    if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr")) {
                        // line 127
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom", []), "html", null, true);
                        echo "

                                                                    ";
                    } else {
                        // line 130
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom_en", []), "html", null, true);
                        echo "
                                                                    ";
                    }
                    // line 132
                    echo "                                                                </option>
                                                            ";
                }
                // line 134
                echo "                                                        ";
            } else {
                // line 135
                echo "                                                            <option class=\"dropdown-item\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "id", []), "html", null, true);
                echo "\" role=\"menuitem\">
                                                                ";
                // line 136
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr")) {
                    // line 137
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom", []), "html", null, true);
                    echo "

                                                                ";
                } else {
                    // line 140
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom_en", []), "html", null, true);
                    echo "
                                                                ";
                }
                // line 141
                echo "                                                            </option>
                                                        ";
            }
            // line 143
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                                                </select>
                                            </div>
                                            <div style=\"padding-top: 10px\"  class=\"col-lg-3  col-md-3 col-xs-3 text-right\">
                                                <button type=\"submit\" style=\"margin-right: 10px;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i>
                                                </button>
                                                <a href=\"";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExportProduit_admin");
        echo "\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                                                    <i class=\"icon md-download\" aria-hidden=\"true\"></i> ";
        // line 151
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
                                    <th style=\"width: 20%;padding-left: 20px;\" >";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 15%\">";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom/Code"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 15%\">";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fiche_technique"), "html", null, true);
        echo "</th>

                                    <th style=\"width: 15%\">";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 15%\">";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégorie"), "html", null, true);
        echo "</th>
                                    <th class=\"text-right text-nowrap\" style=\"padding-right:42px;width: 20%\">Action
                                        <a type=\"submit\"  href=\"";
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activateall_admin");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activer"), "html", null, true);
        echo "\"  style=\"margin-left: 10px;font-size: 11px;text-transform: capitalize;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                            ";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ActiverAll"), "html", null, true);
        echo "</a>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>



                                ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 198
            echo "


                                    <tr >
                                        <td style=\"vertical-align: middle;padding-left: 20px;\" >
                                            ";
            // line 203
            if ($this->getAttribute($context["produit"], "image", [])) {
                // line 204
                echo "                                                <img class=\"navbar-brand-logo\" style=\"height: 50px;width: auto;\"
                                                     src=\"";
                // line 205
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/produits/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "image", []), "html", null, true);
                echo "\">
                                            ";
            }
            // line 207
            echo "                                        </td>
                                        <td style=\" vertical-align: middle;\">
                                            <div class=\"media-body\">
                                                <h5 class=\"mt-0 mb-5\">
                                                    ";
            // line 211
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr")) {
                // line 212
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", []), "html", null, true);
                echo "

                                                    ";
            } else {
                // line 215
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nomen", []), "html", null, true);
                echo "

                                                    ";
            }
            // line 218
            echo "                                                </h5>
                                                <small>";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "code", []), "html", null, true);
            echo "</small>
                                            </div>
                                        </td>
                                        <td  style=\"vertical-align: middle;\">
                                          <a  target=\"_blank\" href=\"";
            // line 223
            echo twig_escape_filter($this->env, ($context["legal_notice_directory"] ?? $this->getContext($context, "legal_notice_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "file", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "file", []), "html", null, true);
            echo "</a>
                                        </td>
                                        <td style=\"    vertical-align: middle;\">
                                            ";
            // line 226
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr")) {
                // line 227
                echo "
                                                ";
                // line 228
                if (($this->getAttribute($this->getAttribute($context["produit"], "categorie", [], "any", false, true), "nom", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["produit"], "categorie", []), "nom", [])))) {
                    // line 229
                    echo "
                                                    ";
                    // line 230
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "categorie", []), "nom", []), "html", null, true);
                    echo "
                                                ";
                } else {
                    // line 232
                    echo "
                                                ";
                }
                // line 234
                echo "                                            ";
            } else {
                // line 235
                echo "                                                ";
                if (($this->getAttribute($this->getAttribute($context["produit"], "categorie", [], "any", false, true), "nom_en", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["produit"], "categorie", []), "nom_en", [])))) {
                    // line 236
                    echo "
                                                    ";
                    // line 237
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "categorie", []), "nom_en", []), "html", null, true);
                    echo "
                                                ";
                } else {
                    // line 239
                    echo "
                                                ";
                }
                // line 241
                echo "                                            ";
            }
            // line 242
            echo "                                        </td>
                                        <td style=\"    vertical-align: middle;\">
                                            ";
            // line 244
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr")) {
                // line 245
                echo "
                                                ";
                // line 246
                if (($this->getAttribute($this->getAttribute($context["produit"], "sous_categorie", [], "any", false, true), "nom", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["produit"], "sous_categorie", []), "nom", [])))) {
                    // line 247
                    echo "
                                                    ";
                    // line 248
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "sous_categorie", []), "nom", []), "html", null, true);
                    echo "
                                                ";
                } else {
                    // line 250
                    echo "

                                                ";
                }
                // line 253
                echo "                                            ";
            } else {
                // line 254
                echo "                                                ";
                if (($this->getAttribute($this->getAttribute($context["produit"], "sous_categorie", [], "any", false, true), "nom_en", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["produit"], "sous_categorie", []), "nom_en", [])))) {
                    // line 255
                    echo "
                                                    ";
                    // line 256
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "sous_categorie", []), "nom_en", []), "html", null, true);
                    echo "
                                                ";
                } else {
                    // line 258
                    echo "

                                                ";
                }
                // line 261
                echo "                                            ";
            }
            // line 262
            echo "                                        </td>


                                        <td class=\"text-right\" style=\"padding-right:20px;vertical-align: middle;\">

                                            <a href=\"";
            // line 267
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_admin_edit", ["id" => $this->getAttribute($context["produit"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page")), "search" => ($context["search"] ?? $this->getContext($context, "search")), "categorie" => ($context["categorie"] ?? $this->getContext($context, "categorie")), "souscategorie" => ($context["souscategorie"] ?? $this->getContext($context, "souscategorie"))]), "html", null, true);
            echo "\"
                                               class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \" title=\"";
            // line 268
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
            echo "\"
                                               style=\"color: #b1b1b1;border: 1px solid;\"></a>
                                            ";
            // line 270
            if (($this->getAttribute($context["produit"], "is_active", []) == false)) {
                // line 271
                echo "                                                <a class=\"btn md-lock-open\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enableadmin", ["id" => $this->getAttribute($context["produit"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page")), "search" => ($context["search"] ?? $this->getContext($context, "search")), "categorie" => ($context["categorie"] ?? $this->getContext($context, "categorie")), "souscategorie" => ($context["souscategorie"] ?? $this->getContext($context, "souscategorie"))]), "html", null, true);
                echo "\"  title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activer"), "html", null, true);
                echo "\"
                                                   style=\"color: #46bf8c!important;background-color: #ffffff !important;border: 1px solid;\"></a>
                                            ";
            } else {
                // line 274
                echo "                                                <a class=\"btn md-lock-open\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enableadmin", ["id" => $this->getAttribute($context["produit"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page")), "search" => ($context["search"] ?? $this->getContext($context, "search")), "categorie" => ($context["categorie"] ?? $this->getContext($context, "categorie")), "souscategorie" => ($context["souscategorie"] ?? $this->getContext($context, "souscategorie"))]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("deactivate"), "html", null, true);
                echo "\"
                                                   style=\"color: #b1b1b1!important;background-color: #ffffff !important;border: 1px solid;\"></a>

                                            ";
            }
            // line 278
            echo "

                                            <a data-target=\"#produit_delete";
            // line 280
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
            echo "\" data-toggle=\"modal\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
            echo "\"
                                               class=\"btn btn-pure btn-danger  md-delete waves-effect waves-classic\"
                                               style=\"color: #f02038;border: 1px solid;\"></a>


                                            <div class=\"modal fade\" id=\"produit_delete";
            // line 285
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
            // line 295
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("conf_delete"), "html", null, true);
            echo "</h4>
                                                        </div>
                                                        <form action=\"";
            // line 297
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteproduitadmin", ["id" => $this->getAttribute($context["produit"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page")), "search" => ($context["search"] ?? $this->getContext($context, "search")), "categorie" => ($context["categorie"] ?? $this->getContext($context, "categorie")), "souscategorie" => ($context["souscategorie"] ?? $this->getContext($context, "souscategorie"))]), "html", null, true);
            echo "\" method=\"post\">
                                                            <div class=\"modal-body\">
                                                                <h4 style=\"text-align:center\" >";
            // line 299
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("msg_conf_delete"), "html", null, true);
            echo "</h4>
                                                            </div>
                                                            <div class=\"panel-footer\">
                                                                <button style=\"margin-left: 80%;width: 100px\" type=\"submit\"
                                                                        class=\"pull-right btn btn-block btn-danger\">";
            // line 303
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
        // line 316
        echo "                                </tbody>
                            </table>
                            <div class=\"navigation\">
                                ";
        // line 319
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

    // line 334
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 335
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!--     <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
-->

    <script>
        \$(\"select[name='categorie']\" ).change(function () {
            var matiereID = \$(this).val();
         //   console.log('aaaaa');
            if(matiereID) {


                \$.ajax({
                    url: \"";
        // line 347
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_sous_categorie_from_categorie_admin");
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
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:admin/produit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  774 => 347,  758 => 335,  752 => 334,  730 => 319,  725 => 316,  706 => 303,  699 => 299,  694 => 297,  687 => 295,  674 => 285,  664 => 280,  660 => 278,  650 => 274,  641 => 271,  639 => 270,  634 => 268,  630 => 267,  623 => 262,  620 => 261,  615 => 258,  610 => 256,  607 => 255,  604 => 254,  601 => 253,  596 => 250,  591 => 248,  588 => 247,  586 => 246,  583 => 245,  581 => 244,  577 => 242,  574 => 241,  570 => 239,  565 => 237,  562 => 236,  559 => 235,  556 => 234,  552 => 232,  547 => 230,  544 => 229,  542 => 228,  539 => 227,  537 => 226,  527 => 223,  520 => 219,  517 => 218,  510 => 215,  503 => 212,  501 => 211,  495 => 207,  489 => 205,  486 => 204,  484 => 203,  477 => 198,  473 => 197,  462 => 189,  456 => 188,  451 => 186,  447 => 185,  442 => 183,  438 => 182,  434 => 181,  401 => 151,  397 => 150,  389 => 144,  383 => 143,  379 => 141,  373 => 140,  366 => 137,  364 => 136,  359 => 135,  356 => 134,  352 => 132,  346 => 130,  339 => 127,  337 => 126,  332 => 125,  328 => 123,  322 => 121,  315 => 118,  313 => 117,  307 => 115,  304 => 114,  301 => 113,  297 => 112,  294 => 111,  288 => 108,  285 => 107,  279 => 104,  276 => 103,  274 => 102,  270 => 101,  266 => 100,  262 => 99,  257 => 96,  251 => 95,  247 => 93,  241 => 91,  234 => 88,  232 => 87,  227 => 86,  224 => 85,  220 => 83,  214 => 81,  207 => 78,  205 => 77,  200 => 76,  196 => 74,  190 => 72,  183 => 69,  181 => 68,  176 => 67,  173 => 66,  170 => 65,  166 => 64,  163 => 63,  157 => 60,  154 => 59,  148 => 56,  145 => 55,  143 => 54,  139 => 53,  135 => 52,  131 => 51,  121 => 48,  117 => 47,  112 => 45,  103 => 39,  82 => 21,  78 => 20,  71 => 16,  67 => 15,  58 => 9,  52 => 5,  46 => 4,  30 => 1,);
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

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-6 \">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color: #f02138;margin-bottom: 0px!important;\"> {{ nbproduits|length }}</h4>
                            <small style=\"\">{{ \"Produits\"|trans }}</small>
                        </div>
                    </div>
                    <div class=\"col-lg-6 \">
                        <a href=\"{{ path('new_produit_admin') }}\" style=\"margin-top: 3px;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
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
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"{{ path('produit_admin_index') }}\" method=\"get\">
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\">
                                                <label class=\"control-label\">{{ \"Produit\"|trans }}</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"{% if search is defined %}{{search}}{% endif %}\" placeholder={{ \"Produit\"|trans }}>
                                            </div>
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\" style=\"z-index: 1\">
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
                                                                    {% if app.request.getLocale()  == 'fr' %}
                                                                        {{ c.nom }}

                                                                    {% else %}
                                                                        {{ c.nom_en }}
                                                                    {% endif %}
                                                                </option>
                                                            {% else %}
                                                                <option class=\"dropdown-item\" value=\"{{ c.id }}\" role=\"menuitem\">
                                                                    {% if app.request.getLocale()  == 'fr' %}
                                                                        {{ c.nom }}

                                                                    {% else %}
                                                                        {{ c.nom_en }}
                                                                    {% endif %}
                                                                </option>
                                                            {% endif %}
                                                        {% else %}
                                                            <option class=\"dropdown-item\" value=\"{{ c.id }}\" role=\"menuitem\">
                                                                {% if app.request.getLocale()  == 'fr' %}
                                                                    {{ c.nom }}

                                                                {% else %}
                                                                    {{ c.nom_en }}
                                                                {% endif %}
                                                            </option>
                                                        {% endif %}
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\" style=\"z-index: 1\">
                                                <label class=\"control-label\">{{\"Sous Catégorie\"|trans}}</label>
                                                <select class=\"form-control\" name=\"souscategorie\" placeholder={{ \"choisir une sous catégorie\"|trans }}>
                                                    <option value=\"\" disabled selected hidden>{{ \"choisir une sous catégorie\"|trans }}</option>
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

                                                                    {% if app.request.getLocale()  == 'fr' %}
                                                                        {{ sc.nom }}

                                                                    {% else %}
                                                                        {{ sc.nom_en }}
                                                                    {% endif %}
                                                                </option>
                                                            {% else %}
                                                                <option class=\"dropdown-item\" value=\"{{ sc.id }}\" role=\"menuitem\">
                                                                    {% if app.request.getLocale()  == 'fr' %}
                                                                        {{ sc.nom }}

                                                                    {% else %}
                                                                        {{ sc.nom_en }}
                                                                    {% endif %}
                                                                </option>
                                                            {% endif %}
                                                        {% else %}
                                                            <option class=\"dropdown-item\" value=\"{{ sc.id }}\" role=\"menuitem\">
                                                                {% if app.request.getLocale()  == 'fr' %}
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
                                                <a href=\"{{ path('ExportProduit_admin') }}\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
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
                                    <th style=\"width: 20%;padding-left: 20px;\" >{{ \"Image\"|trans }}</th>
                                    <th style=\"width: 15%\">{{ \"Nom/Code\"|trans }}</th>
                                    <th style=\"width: 15%\">{{\"Fiche_technique\"|trans}}</th>

                                    <th style=\"width: 15%\">{{\"Catégorie\"|trans}}</th>
                                    <th style=\"width: 15%\">{{\"Sous Catégorie\"|trans}}</th>
                                    <th class=\"text-right text-nowrap\" style=\"padding-right:42px;width: 20%\">Action
                                        <a type=\"submit\"  href=\"{{ path('activateall_admin') }}\" title=\"{{ \"activer\"|trans }}\"  style=\"margin-left: 10px;font-size: 11px;text-transform: capitalize;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                            {{ \"ActiverAll\"|trans }}</a>
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
                                        <td style=\" vertical-align: middle;\">
                                            <div class=\"media-body\">
                                                <h5 class=\"mt-0 mb-5\">
                                                    {% if app.request.getLocale()  == 'fr' %}
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
                                            {% if app.request.getLocale()  == 'fr' %}

                                                {% if produit.categorie.nom is defined and produit.categorie.nom is not null %}

                                                    {{ produit.categorie.nom}}
                                                {% else %}

                                                {% endif %}
                                            {% else %}
                                                {% if produit.categorie.nom_en is defined and produit.categorie.nom_en is not null %}

                                                    {{ produit.categorie.nom_en}}
                                                {% else %}

                                                {% endif %}
                                            {% endif %}
                                        </td>
                                        <td style=\"    vertical-align: middle;\">
                                            {% if app.request.getLocale()  == 'fr' %}

                                                {% if produit.sous_categorie.nom is defined and produit.sous_categorie.nom is not null %}

                                                    {{ produit.sous_categorie.nom}}
                                                {% else %}


                                                {% endif %}
                                            {% else %}
                                                {% if produit.sous_categorie.nom_en is defined and produit.sous_categorie.nom_en is not null %}

                                                    {{ produit.sous_categorie.nom_en}}
                                                {% else %}


                                                {% endif %}
                                            {% endif %}
                                        </td>


                                        <td class=\"text-right\" style=\"padding-right:20px;vertical-align: middle;\">

                                            <a href=\"{{ path('produit_admin_edit', {'id': produit.id , 'page': page, 'search':search, 'categorie': categorie,'souscategorie': souscategorie}) }}\"
                                               class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \" title=\"{{ \"edit\"|trans }}\"
                                               style=\"color: #b1b1b1;border: 1px solid;\"></a>
                                            {% if produit.is_active == false %}
                                                <a class=\"btn md-lock-open\" href=\"{{ path('enableadmin',{'id':produit.id,'page': page, 'search':search, 'categorie': categorie,'souscategorie': souscategorie}) }}\"  title=\"{{ \"activer\"|trans }}\"
                                                   style=\"color: #46bf8c!important;background-color: #ffffff !important;border: 1px solid;\"></a>
                                            {% else %}
                                                <a class=\"btn md-lock-open\" href=\"{{ path('enableadmin',{'id':produit.id,'page': page, 'search':search, 'categorie': categorie,'souscategorie': souscategorie}) }}\" title=\"{{ \"deactivate\"|trans }}\"
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
                                                        <form action=\"{{ path('deleteproduitadmin', { 'id': produit.id,'page': page, 'search':search, 'categorie': categorie,'souscategorie': souscategorie }) }}\" method=\"post\">
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
        \$(\"select[name='categorie']\" ).change(function () {
            var matiereID = \$(this).val();
         //   console.log('aaaaa');
            if(matiereID) {


                \$.ajax({
                    url: \"{{ path('get_sous_categorie_from_categorie_admin') }}\",
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
    </script>
{% endblock %}
", "BackendBundle:admin/produit:index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/admin/produit/index.html.twig");
    }
}
