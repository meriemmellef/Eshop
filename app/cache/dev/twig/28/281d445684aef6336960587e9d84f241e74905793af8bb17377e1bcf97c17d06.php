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

/* BackendBundle:gerant/produit:activerproduits.html.twig */
class __TwigTemplate_35d35617a7f52a8d73e911b1b11f41cadbfadd6a843365a29d2af7c1e6e9b43c extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:gerant/produit:activerproduits.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "BackendBundle:gerant/produit:activerproduits.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catalogue"), "html", null, true);
        echo "</h1>

            <div class=\"page-header-actions\">
                <div class=\"row \">
                    <div class=\"col-lg-8 \">
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
                    <div class=\"col-lg-6 \" >
                        <!--
                         <a href=\"";
        // line 21
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
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_toactivate_index");
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
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filtre"), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class=\"row\" style=\"border: none;\">
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\">
                                                <label class=\"control-label\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produit"), "html", null, true);
        echo "</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"";
        // line 52
        if ((isset($context["search"]) || array_key_exists("search", $context))) {
            echo twig_escape_filter($this->env, ($context["search"] ?? $this->getContext($context, "search")), "html", null, true);
        }
        echo "\" placeholder=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produit"), "html", null, true);
        echo ">
                                            </div>
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\">
                                                <label class=\"control-label\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
        echo "</label>
                                                <select class=\"form-control\" name=\"categorie\" placeholder=";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une catégorie"), "html", null, true);
        echo ">
                                                    <option value=\"\" disabled selected hidden>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une catégorie"), "html", null, true);
        echo "</option>
                                                    ";
        // line 58
        if ((($context["categorie"] ?? $this->getContext($context, "categorie")) == "")) {
            // line 59
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                            ";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        } else {
            // line 63
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                            ";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        }
        // line 67
        echo "
                                                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 69
            echo "                                                        ";
            if ((isset($context["categorie"]) || array_key_exists("categorie", $context))) {
                // line 70
                echo "                                                            ";
                if ((($context["categorie"] ?? $this->getContext($context, "categorie")) == $this->getAttribute($context["c"], "id", []))) {
                    // line 71
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\" selected>
                                                                    ";
                    // line 72
                    if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                        // line 73
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom_en", []), "html", null, true);
                        echo "
                                                                    ";
                    } else {
                        // line 75
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", []), "html", null, true);
                        echo "
                                                                    ";
                    }
                    // line 76
                    echo "                                                                </option>
                                                            ";
                } else {
                    // line 78
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\">
                                                                    ";
                    // line 79
                    if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                        // line 80
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom_en", []), "html", null, true);
                        echo "
                                                                    ";
                    } else {
                        // line 82
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", []), "html", null, true);
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
                // line 88
                if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                    // line 89
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom_en", []), "html", null, true);
                    echo "
                                                                ";
                } else {
                    // line 91
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", []), "html", null, true);
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
                                            <div class=\"col-lg-3  col-md-3 col-xs-3\">
                                                <label class=\"control-label\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégorie"), "html", null, true);
        echo "</label>
                                                <select class=\"form-control\"  name=\"souscategorie\" placeholder=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une sous catégorie"), "html", null, true);
        echo "\">
                                                    <option value=\"\" disabled selected hidden>
                                                        ";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une sous catégorie"), "html", null, true);
        echo "</option>
                                                    ";
        // line 103
        if ((($context["souscategorie"] ?? $this->getContext($context, "souscategorie")) == "")) {
            // line 104
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                            ";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les sous categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        } else {
            // line 108
            echo "                                                        <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                            ";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les sous categories"), "html", null, true);
            echo "
                                                        </option>
                                                    ";
        }
        // line 112
        echo "
                                                    ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["souscategories"] ?? $this->getContext($context, "souscategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["sc"]) {
            // line 114
            echo "                                                        ";
            if ((isset($context["souscategorie"]) || array_key_exists("souscategorie", $context))) {
                // line 115
                echo "                                                            ";
                if ((($context["souscategorie"] ?? $this->getContext($context, "souscategorie")) == $this->getAttribute($context["sc"], "id", []))) {
                    // line 116
                    echo "                                                                <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\" selected>
                                                                    ";
                    // line 117
                    if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                        // line 118
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom_en", []), "html", null, true);
                        echo "

                                                                    ";
                    } else {
                        // line 121
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom", []), "html", null, true);
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
                    if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                        // line 127
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom_en", []), "html", null, true);
                        echo "

                                                                    ";
                    } else {
                        // line 130
                        echo "                                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom", []), "html", null, true);
                        echo "
                                                                    ";
                    }
                    // line 131
                    echo "                                                                </option>
                                                            ";
                }
                // line 133
                echo "                                                        ";
            } else {
                // line 134
                echo "                                                            <option class=\"dropdown-item\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "id", []), "html", null, true);
                echo "\" role=\"menuitem\">
                                                                ";
                // line 135
                if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                    // line 136
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom_en", []), "html", null, true);
                    echo "

                                                                ";
                } else {
                    // line 139
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "nom", []), "html", null, true);
                    echo "
                                                                ";
                }
                // line 140
                echo "                                                            </option>
                                                        ";
            }
            // line 142
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                                                </select>
                                            </div>
                                            <div style=\"padding-top: 10px\"  class=\"col-lg-3  col-md-3 col-xs-3 text-right\">
                                                <button type=\"submit\" style=\"margin-right: 10px;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i>
                                                </button>
                                                <a hidden href=\"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExportProduit_gerant");
        echo "\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                                                    <i class=\"icon md-download\" aria-hidden=\"true\"></i> ";
        // line 150
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
                        <form  action=\"";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activate_checked");
        echo "\" method=\"get\">


                        <div class=\"col-lg-12\">
                            <!-- Example Bordered Table -->
                            ";
        // line 188
        echo "


                            <table class=\"table table-striped\">
                                <thead>
                                <tr >

                                    <th style=\"width: 15%;padding-left: 20px;\" >
                                        <div class=\"checkbox-custom checkbox-primary center-block \" style=\"text-align: left;\" >

                                            <input id=\"checkAll\" type=\"checkbox\" value=\"checkAll\"  name='checkAll'>
                                            <label for=\"checkAll\"  style=\"font-weight: bold\"> ";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check All"), "html", null, true);
        echo "</label>

                                        </div>
                                    </th>
                                    <th style=\"width: 15%;padding-left: 20px;\" >";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 15%\">";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom/Code"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 12%\">";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 13%\">";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégorie"), "html", null, true);
        echo "</th>
                                    <th class=\"text-center\" style=\"width: 10%\">";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action"), "html", null, true);
        echo "?
                                        <a  hidden type=\"submit\"  href=\"";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activateall");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cloneallproducts"), "html", null, true);
        echo "\"  style=\"margin-left: 10px;font-size: 11px;text-transform: capitalize;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                            ";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ActiverAll"), "html", null, true);
        echo "   </a>

                                               <button     type=\"submit\" style=\"margin-right: 10px;width: 70px;font-size: 13px\" class=\"float-right btn  btn-icon  btn-outline-danger waves-effect waves-classic waves-effect waves-classic\">
                                               <i class=\"icon md-lock-open\" aria-hidden=\"true\"></i>Activer</button>


                                    </th>

                                </tr>
                                </thead>
                                <tbody>



                                ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 224
            echo "
                                    ";
            // line 225
            if (( !(null === $this->getAttribute($context["produit"], "sous_categorie", [])) &&  !(null === $this->getAttribute($context["produit"], "categorie", [])))) {
                // line 226
                echo "

                                    <tr >

                                        <td  style=\"padding-left: 20px ;vertical-align: middle\" >
                                            <div class=\"checkbox-custom checkbox-primary center-block float-left\">
                                                <input id=\"";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\" type=\"checkbox\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\"
                                                       name='checkboxvar[]'>

                                                <label for=\"";
                // line 235
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\" class=\"namecategorie\"></label>
                                            </div>

                                        </td>


                                        <td style=\"vertical-align: middle\" >
                                            ";
                // line 242
                if ($this->getAttribute($context["produit"], "image", [])) {
                    // line 243
                    echo "                                                <img class=\"navbar-brand-logo\" style=\"height: 50px;width: auto;\"
                                                     src=\"";
                    // line 244
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/produits/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "image", []), "html", null, true);
                    echo "\">
                                            ";
                }
                // line 246
                echo "                                        </td>
                                        <td style=\"    vertical-align: middle;\">
                                            <div class=\"media-body\">
                                                <h5 class=\"mt-0 mb-5\">
                                                    ";
                // line 250
                if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                    // line 251
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nomen", []), "html", null, true);
                    echo "
                                                    ";
                } else {
                    // line 253
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", []), "html", null, true);
                    echo "
                                                    ";
                }
                // line 255
                echo "
                                                </h5>
                                                <small>";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "code", []), "html", null, true);
                echo "</small>
                                            </div>
                                        </td>
                                        <td style=\"    vertical-align: middle;\">
                                            ";
                // line 261
                if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                    // line 262
                    echo "
                                                ";
                    // line 263
                    if (( !(null === $this->getAttribute($context["produit"], "categorie", [])) && $this->getAttribute($context["produit"], "categorie", [], "any", true, true))) {
                        // line 264
                        echo "                                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "categorie", []), "nom_en", []), "html", null, true);
                        echo "



                                                ";
                    }
                    // line 269
                    echo "
                                            ";
                } else {
                    // line 271
                    echo "                                                ";
                    if (( !(null === $this->getAttribute($context["produit"], "categorie", [])) && $this->getAttribute($context["produit"], "categorie", [], "any", true, true))) {
                        // line 272
                        echo "
                                                    ";
                        // line 273
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "categorie", []), "nom", []), "html", null, true);
                        echo "


                                                ";
                    }
                    // line 277
                    echo "                                            ";
                }
                // line 278
                echo "                                        </td>
                                        <td style=\"    vertical-align: middle;\">

                                            ";
                // line 281
                if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN"))) {
                    // line 282
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "sous_categorie", []), "nom_en", []), "html", null, true);
                    echo "

                                            ";
                } else {
                    // line 285
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "sous_categorie", []), "nom", []), "html", null, true);
                    echo "
                                            ";
                }
                // line 287
                echo "                                        </td>

                                        <td class=\"text-center\" style=\"    vertical-align: middle;\">
                                            <a class=\"btn md-lock-open\" href=\"";
                // line 290
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activateproduit_gerant", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activer"), "html", null, true);
                echo "\"
                                               style=\"color: #46bf8c!important;background-color: #ffffff !important;border: 1px solid;\"></a>
                                        </td>

                                    </tr>

                                    ";
            }
            // line 297
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 298
        echo "                                </tbody>
                            </table>

                            <div class=\"navigation\">
                                ";
        // line 302
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["produits"] ?? $this->getContext($context, "produits")));
        echo "
                            </div>

                            <!-- End Example Bordered Table -->
                        </div>
                        </form>
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

    // line 317
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 318
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
        // line 330
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_sous_categorie_from_categorie_gerant");
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



       /* \$(document).ready(function() {
            //set initial state.
            \$(\"input[name='check[]']\").change(function () {
                var len = \$(\"input[name='check[]']:checked\").length;
                console.log(\"len \"+len);
            });
        });*/


        \$(document).ready(function() {
            //set initial state.
            \$('#checkAll').click(function () {

                \$('input:checkbox').not(this).prop('checked', this.checked);
               // alert(\";)\");
                /* if (\$('#CheckAll').is(':checked') == true) {

                     alert(\";)\");
                 }*/
            });
        });


    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:gerant/produit:activerproduits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  708 => 330,  692 => 318,  686 => 317,  664 => 302,  658 => 298,  652 => 297,  640 => 290,  635 => 287,  629 => 285,  622 => 282,  620 => 281,  615 => 278,  612 => 277,  605 => 273,  602 => 272,  599 => 271,  595 => 269,  586 => 264,  584 => 263,  581 => 262,  579 => 261,  572 => 257,  568 => 255,  562 => 253,  556 => 251,  554 => 250,  548 => 246,  542 => 244,  539 => 243,  537 => 242,  527 => 235,  519 => 232,  511 => 226,  509 => 225,  506 => 224,  502 => 223,  485 => 209,  479 => 208,  475 => 207,  471 => 206,  467 => 205,  463 => 204,  459 => 203,  452 => 199,  439 => 188,  431 => 178,  400 => 150,  396 => 149,  388 => 143,  382 => 142,  378 => 140,  372 => 139,  365 => 136,  363 => 135,  358 => 134,  355 => 133,  351 => 131,  345 => 130,  338 => 127,  336 => 126,  331 => 125,  327 => 123,  321 => 121,  314 => 118,  312 => 117,  307 => 116,  304 => 115,  301 => 114,  297 => 113,  294 => 112,  288 => 109,  285 => 108,  279 => 105,  276 => 104,  274 => 103,  270 => 102,  265 => 100,  261 => 99,  256 => 96,  250 => 95,  246 => 93,  240 => 91,  234 => 89,  232 => 88,  226 => 86,  223 => 85,  219 => 83,  213 => 82,  207 => 80,  205 => 79,  200 => 78,  196 => 76,  190 => 75,  184 => 73,  182 => 72,  177 => 71,  174 => 70,  171 => 69,  167 => 68,  164 => 67,  158 => 64,  155 => 63,  149 => 60,  146 => 59,  144 => 58,  140 => 57,  136 => 56,  132 => 55,  122 => 52,  118 => 51,  108 => 44,  91 => 30,  79 => 21,  71 => 16,  67 => 15,  58 => 9,  52 => 5,  46 => 4,  30 => 1,);
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
                <div class=\"row \">
                    <div class=\"col-lg-8 \">
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
        <form  action=\"{{ path('produit_toactivate_index') }}\" method=\"get\">

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

                                                                {%  if pays.frontLanguage  == 'en' or pays.frontLanguage  == 'EN' %}
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
                                                <select class=\"form-control\"  name=\"souscategorie\" placeholder=\"{{\"choisir une sous catégorie\"|trans}}\">
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
                                                                    {% if  pays.frontLanguage  == 'en' or pays.frontLanguage  == 'EN' %}
                                                                        {{ sc.nom_en }}

                                                                    {% else %}
                                                                        {{ sc.nom }}
                                                                    {% endif %}
                                                                </option>
                                                            {% else %}
                                                                <option class=\"dropdown-item\" value=\"{{ sc.id }}\" role=\"menuitem\">
                                                                    {% if  pays.frontLanguage  == 'en' or pays.frontLanguage  == 'EN' %}
                                                                        {{ sc.nom_en }}

                                                                    {% else %}
                                                                        {{ sc.nom }}
                                                                    {% endif %}                                                                </option>
                                                            {% endif %}
                                                        {% else %}
                                                            <option class=\"dropdown-item\" value=\"{{ sc.id }}\" role=\"menuitem\">
                                                                {% if  pays.frontLanguage  == 'en' or pays.frontLanguage  == 'EN' %}
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
                        <form  action=\"{{ path('activate_checked') }}\" method=\"get\">


                        <div class=\"col-lg-12\">
                            <!-- Example Bordered Table -->
                            {#

                                 <a href=\"{{ path('produit_toactivate_index') }}\"    type=\"submit\" style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-outline-success waves-effect waves-classic waves-effect waves-classic\">
                                    <i class=\"icon md-lock-open\" aria-hidden=\"true\"></i>Activer</a>
#}



                            <table class=\"table table-striped\">
                                <thead>
                                <tr >

                                    <th style=\"width: 15%;padding-left: 20px;\" >
                                        <div class=\"checkbox-custom checkbox-primary center-block \" style=\"text-align: left;\" >

                                            <input id=\"checkAll\" type=\"checkbox\" value=\"checkAll\"  name='checkAll'>
                                            <label for=\"checkAll\"  style=\"font-weight: bold\"> {{ \"Check All\"|trans }}</label>

                                        </div>
                                    </th>
                                    <th style=\"width: 15%;padding-left: 20px;\" >{{ \"Image\"|trans }}</th>
                                    <th style=\"width: 15%\">{{ \"Nom/Code\"|trans }}</th>
                                    <th style=\"width: 12%\">{{\"Catégorie\"|trans}}</th>
                                    <th style=\"width: 13%\">{{\"Sous Catégorie\"|trans}}</th>
                                    <th class=\"text-center\" style=\"width: 10%\">{{ \"Action\"|trans }}?
                                        <a  hidden type=\"submit\"  href=\"{{ path('activateall') }}\" title=\"{{ \"cloneallproducts\"|trans }}\"  style=\"margin-left: 10px;font-size: 11px;text-transform: capitalize;\"  class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                            {{ \"ActiverAll\"|trans }}   </a>

                                               <button     type=\"submit\" style=\"margin-right: 10px;width: 70px;font-size: 13px\" class=\"float-right btn  btn-icon  btn-outline-danger waves-effect waves-classic waves-effect waves-classic\">
                                               <i class=\"icon md-lock-open\" aria-hidden=\"true\"></i>Activer</button>


                                    </th>

                                </tr>
                                </thead>
                                <tbody>



                                {% for produit in produits %}

                                    {% if  produit.sous_categorie is not null  and produit.categorie is not null  %}


                                    <tr >

                                        <td  style=\"padding-left: 20px ;vertical-align: middle\" >
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

                                                {% if produit.categorie is not null and produit.categorie is defined %}
                                                    {{ produit.categorie.nom_en}}



                                                {% endif %}

                                            {% else %}
                                                {% if produit.categorie is not null and produit.categorie is defined %}

                                                    {{ produit.categorie.nom}}


                                                {% endif %}
                                            {% endif %}
                                        </td>
                                        <td style=\"    vertical-align: middle;\">

                                            {% if  pays.frontLanguage  == 'en' or pays.frontLanguage  == 'EN' %}
                                                {{ produit.sous_categorie.nom_en}}

                                            {% else %}
                                                {{ produit.sous_categorie.nom}}
                                            {% endif %}
                                        </td>

                                        <td class=\"text-center\" style=\"    vertical-align: middle;\">
                                            <a class=\"btn md-lock-open\" href=\"{{ path('activateproduit_gerant',{'id':produit.id}) }}\" title=\"{{ \"activer\"|trans }}\"
                                               style=\"color: #46bf8c!important;background-color: #ffffff !important;border: 1px solid;\"></a>
                                        </td>

                                    </tr>

                                    {% endif %}
                                {% endfor %}
                                </tbody>
                            </table>

                            <div class=\"navigation\">
                                {{ knp_pagination_render(produits) }}
                            </div>

                            <!-- End Example Bordered Table -->
                        </div>
                        </form>
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
          console.log('aaaaa'+matiereID);
            if(matiereID) {


                \$.ajax({
                    url: \"{{ path('get_sous_categorie_from_categorie_gerant') }}\",
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



       /* \$(document).ready(function() {
            //set initial state.
            \$(\"input[name='check[]']\").change(function () {
                var len = \$(\"input[name='check[]']:checked\").length;
                console.log(\"len \"+len);
            });
        });*/


        \$(document).ready(function() {
            //set initial state.
            \$('#checkAll').click(function () {

                \$('input:checkbox').not(this).prop('checked', this.checked);
               // alert(\";)\");
                /* if (\$('#CheckAll').is(':checked') == true) {

                     alert(\";)\");
                 }*/
            });
        });


    </script>
{% endblock %}
", "BackendBundle:gerant/produit:activerproduits.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/gerant/produit/activerproduits.html.twig");
    }
}
