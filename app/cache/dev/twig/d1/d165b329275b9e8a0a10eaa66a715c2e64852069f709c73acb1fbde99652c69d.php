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

/* @Frontend/panier/thanks.html.twig */
class __TwigTemplate_0c019a439baa4b9436111b85451206f952b758de4bc620aa89b6f45c68a39b43 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'breadcrump' => [$this, 'block_breadcrump'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "FrontendBundle:Layouts:layoutBreadcrumps.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/panier/thanks.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutBreadcrumps.html.twig", "@Frontend/panier/thanks.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_breadcrump($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrump"));

        // line 5
        echo "        <div class=\"row\">
            <div class=\"breadcrumbDiv col-lg-12\">
                <ul class=\"breadcrumb\">



                    <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accueil"), "html", null, true);
        echo "</a></li>
                    <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Panier"), "html", null, true);
        echo "</a></li>

                    <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                        ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Conf"), "html", null, true);
        echo "</li>

                </ul>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "        <div class=\"row\">
            <div class=\"col-lg-12 \">
                <div class=\"row userInfo\">

                    <div class=\"thanxContent text-center\">

                        <h1 class=\"titlered\"> ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Merci d'avoir passé votre commande chez nous"), "html", null, true);
        echo " , <a href=\"#\">#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "reference", []), "html", null, true);
        echo "</a></h1>
                        <h5 class=\"thanxContent text-center\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Vous serez contacté dans les plus brefs délais par un de nos agents afin de convenir de la date de livraison"), "html", null, true);
        echo "</h5>
                        <center><img src=\"/uploads/commandes/";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "uid", []), "html", null, true);
        echo ".png\" /></center>
                    </div>

                    <div class=\"col-lg-7 col-center\">
                        <h4></h4>

                        <div class=\"cartContent table-responsive  w100\">
                            <table style=\"width:100%\" class=\"cartTable cartTableBorder\">
                                <tbody>

                                <tr class=\"CartProduct  cartTableHeader\">
                                    <td style=\"font-family: Roboto-Regular, sans-serif\" colspan=\"3\"> ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Articles à expédier"), "html", null, true);
        echo "</td>


                                    <td style=\"width:15%\"></td>
                                </tr>

                                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 48
            echo "                                    <tr class=\"CartProduct\">
                                        <td class=\"CartProductThumb\">
                                            <div><a href=\"\"><img class=\"lazy\"
                                                                 alt=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
            echo "\"
                                                                 data-original=\"/uploads/produits/";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
            echo "\"
                                                                 src=\"
                                                                ";
            // line 54
            if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) != ""))) {
                echo "/uploads/produits/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                echo "
                                                                ";
            } elseif ((($this->getAttribute($this->getAttribute(            // line 55
$context["produit"], "produit", []), "SousCategorie", []) && $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "SousCategorie", []), "image", [])) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "SousCategorie", []), "image", []) != ""))) {
                echo "/uploads/produits/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "SousCategorie", []), "image", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
            }
            echo "\">
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"CartDescription\">
                                                <h4 class=\"labelldd\"><a href=\"/\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
            echo " </a></h4>

                                                <div class=\"price\">
                                                    ";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "
                                                    <br>
                                                    ";
            // line 66
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) == 1))) {
                // line 67
                echo "                                                        <span class=\"old-price\">
                                                            ";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
                                                        </span>
                                                    ";
            } elseif ((($this->getAttribute($this->getAttribute($this->getAttribute(            // line 70
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                // line 71
                echo "                                                        <span class=\"old-price\">
                                                            ";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
                                                        </span>
                                                    ";
            }
            // line 75
            echo "                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            ";
            // line 80
            if ($this->getAttribute(($context["size"] ?? null), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", true, true)) {
                // line 81
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "sizes", []));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 82
                    echo "                                                    ";
                    if (($this->getAttribute(($context["size"] ?? null), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", true, true) && $this->getAttribute($this->getAttribute(($context["size"] ?? null), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", false, true), $this->getAttribute($context["s"], "id", []), [], "array", true, true))) {
                        // line 83
                        echo "                                                        <div class=\"row\" style=\"padding-left: 10px;\" >
                                                            <p style=\" float:left;display: inline-block;border: 2px solid #ddd;background-color: ";
                        // line 84
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "couleur", []), "codeCouleur", []), "html", null, true);
                        echo ";color: transparent;height: 30px;width: 30px;\"></p>
                                                            <h5  style=\" padding-left: 10px; padding-top: 4px;display: inline-block; float:left;color: #a1a5a9\">
                                                                ";
                        // line 86
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Taille"), "html", null, true);
                        echo " :";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "libelle", []), "html", null, true);
                        echo " Qte :";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["size"] ?? $this->getContext($context, "size")), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array"), $this->getAttribute($context["s"], "id", []), [], "array"), "html", null, true);
                        echo "</h5>
                                                        </div>
                                                    ";
                    }
                    // line 89
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                                            ";
            }
            // line 91
            echo "                                        </td>
                                        <td class=\"price\">
                                            ";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "getTotalPrice", [0 => $this->getAttribute($context["produit"], "quantite", [])], "method"), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "
                                            ";
            // line 94
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($context["produit"], "quantite", []) >= $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", [])))) {
                echo "<br>
                                                <span class=\"old-price\">
                                                     ";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "getTotalPrice", [0 => $this->getAttribute($context["produit"], "quantite", [])], "method"), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
                                                        </span>
                                            ";
            }
            // line 99
            echo "                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                                ";
        if ($this->getAttribute($this->getAttribute(($context["commande"] ?? null), "coupon", [], "any", false, true), "type", [], "any", true, true)) {
            // line 103
            echo "
                                    <tr class=\"cartTotalTr\">
                                        <td >
                                            <div></div>
                                        </td>
                                        <td ><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix initial"), "html", null, true);
            echo "</font></font></td>
                                        <td style=\"padding-right: 10px;\">
                                            <span><font style=\"vertical-align: inherit;\">
                                                    <font style=\"vertical-align: inherit;\">
                                                        ";
            // line 112
            if (($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "type", []) == 1)) {
                // line 113
                echo "                                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice((($context["totale"] ?? $this->getContext($context, "totale")) + $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "montant", [])), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
                                                        ";
            }
            // line 115
            echo "                                                        ";
            if (($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "type", []) == 2)) {
                // line 116
                echo "                                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice((($context["totale"] ?? $this->getContext($context, "totale")) + ((($context["totale"] ?? $this->getContext($context, "totale")) / (100 - $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "pourcentage", []))) * $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "pourcentage", []))), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
                                                        ";
            }
            // line 118
            echo "
                                                         </font>
                                                </font>
                                            </span>
                                        </td>

                                    </tr>
                                    <tr class=\"cartTotalTr\">
                                        <td >
                                            <div></div>
                                        </td>
                                        <td style=\"\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Coupon"), "html", null, true);
            echo "</font></font></td>
                                        <td style=\"padding-right: 10px;\">
                                            <span><font style=\"vertical-align: inherit;\">
                                                    <font style=\"vertical-align: inherit;\">
                                                        ";
            // line 133
            if (($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "type", []) == 1)) {
                // line 134
                echo "                                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("réduction de"), "html", null, true);
                echo "
                                                            ";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "montant", []), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "

                                                        ";
            }
            // line 138
            echo "                                                        ";
            if (($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "type", []) == 2)) {
                // line 139
                echo "                                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("réduction de"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "pourcentage", []), "html", null, true);
                echo " %
                                                        ";
            }
            // line 141
            echo "
                                                         </font>
                                                </font>
                                            </span>
                                        </td>

                                    </tr>

                                    <tr class=\"cartTotalTr\">

                                        <td ></td>
                                        <td class=\"\" >
                                             <span class=\"labell\">
                                                 <font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TOTAL"), "html", null, true);
            echo "</font></font>
                                             </span>
                                        </td>
                                        <td class=\"\" style=\"padding-right: 10px;\" >
                                            <span class=\"price\">
                                                <font style=\"vertical-align: inherit;\">
                                                    <font style=\"vertical-align: inherit;\">  ";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice(($context["totale"] ?? $this->getContext($context, "totale")), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "
                                                    </font>
                                                </font>
                                            </span>
                                        </td>

                                    </tr>

                                ";
        } else {
            // line 169
            echo "

                                    <tr class=\"cartTotalTr\">

                                        <td ></td>
                                        <td class=\"\" >
                                            <span class=\"labell\">
                                                ";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TOTAL"), "html", null, true);
            echo "
                                             </span>
                                        </td>
                                        <td class=\"\" style=\"padding-right: 10px;\" ><span class=\"price\">
                                                <font style=\"vertical-align: inherit;\">
                                                    <font style=\"vertical-align: inherit;\"> ";
            // line 181
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice(($context["totale"] ?? $this->getContext($context, "totale")), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "
                                                    </font>
                                                </font>
                                            </span>
                                        </td>

                                    </tr>
                                ";
        }
        // line 189
        echo "                                </tbody>
                            </table>
                        </div>



                        ";
        // line 195
        if ($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", [])) {
            // line 196
            echo "                            <div class=\"row\" style=\"margin: 25px 0px\">
                                <div class=\"col-md-6\">

                                    <h3 class=\"titlered\"> ";
            // line 199
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adresse de livraison"), "html", null, true);
            echo ": </h3>
                                    <dt>";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "prenom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "nom", []), "html", null, true);
            echo "</dt>
                                    <dt>";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "adresse", []), "html", null, true);
            echo "</dt>
                                    <dt>";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "cp", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "ville", []), "html", null, true);
            echo "
                                        - ";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "pays", []), "html", null, true);
            echo "</dt>

                                </div>


                            </div>
                        ";
        } else {
            // line 210
            echo "                            <div class=\"row\" style=\"margin: 25px 0px\">
                                <div class=\"col-md-8\">

                                    <h4 class=\"titlered\"> ";
            // line 213
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Point de retrait"), "html", null, true);
            echo ": </h4>
                                    <h5 class=\"labell\">";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "nom", []), "html", null, true);
            echo "</h5>
                                    <h5 class=\"labell\">";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "adresse", []), "html", null, true);
            echo "</h5>
                                    ";
            // line 216
            if ($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "tel", [])) {
                // line 217
                echo "                                        <h5 class=\"labell\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléphone"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "tel", []), "html", null, true);
                echo "</h5>
                                    ";
            }
            // line 219
            echo "                                    ";
            if ((($context["email"] ?? $this->getContext($context, "email")) && (($context["email"] ?? $this->getContext($context, "email")) != ""))) {
                // line 220
                echo "                                        <h5 class=\"labell\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
                echo "</h5>
                                        <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                                        <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                                    ";
            }
            // line 224
            echo "
                                </div>

                                <div class=\"col-md-4\">

                                    <h4  class=\"titlered\"> ";
            // line 229
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date et heure de retrait"), "html", null, true);
            echo ": </h4>
                                    <h5 class=\"labell\"> ";
            // line 230
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Le"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateReception", []), "Y-m-d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeToString", []), "html", null, true);
            echo "</h5>

                                </div>
                            </div>
                        ";
        }
        // line 235
        echo "                    </div>
                </div>
                <!--/row end-->

            </div>

            <!--/rightSidebar-->

        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/panier/thanks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  523 => 235,  511 => 230,  507 => 229,  500 => 224,  490 => 220,  487 => 219,  479 => 217,  477 => 216,  473 => 215,  469 => 214,  465 => 213,  460 => 210,  450 => 203,  444 => 202,  440 => 201,  434 => 200,  430 => 199,  425 => 196,  423 => 195,  415 => 189,  404 => 181,  396 => 176,  387 => 169,  375 => 160,  366 => 154,  351 => 141,  343 => 139,  340 => 138,  334 => 135,  329 => 134,  327 => 133,  320 => 129,  307 => 118,  301 => 116,  298 => 115,  292 => 113,  290 => 112,  283 => 108,  276 => 103,  273 => 102,  265 => 99,  259 => 96,  254 => 94,  250 => 93,  246 => 91,  243 => 90,  237 => 89,  227 => 86,  222 => 84,  219 => 83,  216 => 82,  211 => 81,  209 => 80,  202 => 75,  196 => 72,  193 => 71,  191 => 70,  186 => 68,  183 => 67,  181 => 66,  176 => 64,  170 => 61,  156 => 55,  150 => 54,  145 => 52,  141 => 51,  136 => 48,  132 => 47,  123 => 41,  109 => 30,  105 => 29,  99 => 28,  91 => 22,  85 => 21,  72 => 15,  64 => 12,  60 => 11,  52 => 5,  46 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'FrontendBundle:Layouts:layoutBreadcrumps.html.twig' %}


    {% block breadcrump %}
        <div class=\"row\">
            <div class=\"breadcrumbDiv col-lg-12\">
                <ul class=\"breadcrumb\">



                    <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">{{ \"Accueil\" | trans }}</a></li>
                    <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"{{ path(\"panier\") }}\">{{ \"Panier\" | trans }}</a></li>

                    <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                        {{ \"Conf\" | trans }}</li>

                </ul>
            </div>
        </div>
    {% endblock breadcrump %}
    {% block content %}
        <div class=\"row\">
            <div class=\"col-lg-12 \">
                <div class=\"row userInfo\">

                    <div class=\"thanxContent text-center\">

                        <h1 class=\"titlered\"> {{ \"Merci d'avoir passé votre commande chez nous\" | trans}} , <a href=\"#\">#{{ commande.reference }}</a></h1>
                        <h5 class=\"thanxContent text-center\">{{\"Vous serez contacté dans les plus brefs délais par un de nos agents afin de convenir de la date de livraison\" | trans}}</h5>
                        <center><img src=\"/uploads/commandes/{{ commande.uid }}.png\" /></center>
                    </div>

                    <div class=\"col-lg-7 col-center\">
                        <h4></h4>

                        <div class=\"cartContent table-responsive  w100\">
                            <table style=\"width:100%\" class=\"cartTable cartTableBorder\">
                                <tbody>

                                <tr class=\"CartProduct  cartTableHeader\">
                                    <td style=\"font-family: Roboto-Regular, sans-serif\" colspan=\"3\"> {{\"Articles à expédier\" | trans}}</td>


                                    <td style=\"width:15%\"></td>
                                </tr>

                                {% for produit in produits %}
                                    <tr class=\"CartProduct\">
                                        <td class=\"CartProductThumb\">
                                            <div><a href=\"\"><img class=\"lazy\"
                                                                 alt=\"{{ produit.produit.nom }}\"
                                                                 data-original=\"/uploads/produits/{{ produit.produit.image }}\"
                                                                 src=\"
                                                                {%  if  produit.produit.image  and produit.produit.image != \"\" %}/uploads/produits/{{ produit.produit.image }}
                                                                {%  elseif produit.produit.SousCategorie  and produit.produit.SousCategorie.image  and produit.produit.SousCategorie.image != \"\" %}/uploads/produits/{{ produit.produit.SousCategorie.image }}{% else %}{{ asset('/assets/img/default_t_e.jpg') }}{% endif %}\">
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"CartDescription\">
                                                <h4 class=\"labelldd\"><a href=\"/\">{{ produit.produit.nom }} </a></h4>

                                                <div class=\"price\">
                                                    {{ formated_price(produit.produit.finalPrice[\"prix\"],app.session.get(\"pays\"))}}
                                                    <br>
                                                    {% if produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo == 1  %}
                                                        <span class=\"old-price\">
                                                            {{ formated_price(produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}}
                                                        </span>
                                                    {% elseif produit.produit.finalPrice[\"is_promo\"]  and produit.produit.prixPromo and produit.produit.prixPromo > 0  %}
                                                        <span class=\"old-price\">
                                                            {{ formated_price(produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}}
                                                        </span>
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            {% if size[produit.produit.id] is defined %}
                                                {% for s in produit.produit.sizes %}
                                                    {% if size[produit.produit.id] is defined and  size[produit.produit.id][s.id] is defined %}
                                                        <div class=\"row\" style=\"padding-left: 10px;\" >
                                                            <p style=\" float:left;display: inline-block;border: 2px solid #ddd;background-color: {{s.couleur.codeCouleur}};color: transparent;height: 30px;width: 30px;\"></p>
                                                            <h5  style=\" padding-left: 10px; padding-top: 4px;display: inline-block; float:left;color: #a1a5a9\">
                                                                {{ \"Taille\"| trans}} :{{ s.libelle }} Qte :{{ size[produit.produit.id][s.id] }}</h5>
                                                        </div>
                                                    {% endif %}
                                                {% endfor %}
                                            {% endif %}
                                        </td>
                                        <td class=\"price\">
                                            {{ formated_price( produit.produit.getTotalPrice(produit.quantite)[\"prix\"],app.session.get(\"pays\"))}}
                                            {% if produit.produit.finalPrice[\"is_promo\"] and produit.quantite >=   produit.produit.numProduitPromo %}<br>
                                                <span class=\"old-price\">
                                                     {{ formated_price(produit.produit.getTotalPrice(produit.quantite)[\"old_prix\"],app.session.get(\"pays\"))}}
                                                        </span>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                                {% if commande.coupon.type is defined %}

                                    <tr class=\"cartTotalTr\">
                                        <td >
                                            <div></div>
                                        </td>
                                        <td ><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">{{ \"Prix initial\" | trans }}</font></font></td>
                                        <td style=\"padding-right: 10px;\">
                                            <span><font style=\"vertical-align: inherit;\">
                                                    <font style=\"vertical-align: inherit;\">
                                                        {% if commande.coupon.type == 1 %}
                                                            {{ formated_price(totale+commande.coupon.montant,app.session.get(\"pays\"))}}
                                                        {% endif %}
                                                        {% if commande.coupon.type ==2 %}
                                                            {{ formated_price(totale+(totale/ (100 - commande.coupon.pourcentage)  * commande.coupon.pourcentage),app.session.get(\"pays\"))}}
                                                        {% endif %}

                                                         </font>
                                                </font>
                                            </span>
                                        </td>

                                    </tr>
                                    <tr class=\"cartTotalTr\">
                                        <td >
                                            <div></div>
                                        </td>
                                        <td style=\"\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">{{ \"Coupon\" | trans }}</font></font></td>
                                        <td style=\"padding-right: 10px;\">
                                            <span><font style=\"vertical-align: inherit;\">
                                                    <font style=\"vertical-align: inherit;\">
                                                        {% if commande.coupon.type == 1 %}
                                                            {{\"réduction de\" | trans}}
                                                            {{ formated_price(commande.coupon.montant,app.session.get(\"pays\"))}}

                                                        {% endif %}
                                                        {% if commande.coupon.type ==2 %}
                                                            {{\"réduction de\" | trans}} {{  commande.coupon.pourcentage }} %
                                                        {% endif %}

                                                         </font>
                                                </font>
                                            </span>
                                        </td>

                                    </tr>

                                    <tr class=\"cartTotalTr\">

                                        <td ></td>
                                        <td class=\"\" >
                                             <span class=\"labell\">
                                                 <font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">{{ \"TOTAL\" | trans }}</font></font>
                                             </span>
                                        </td>
                                        <td class=\"\" style=\"padding-right: 10px;\" >
                                            <span class=\"price\">
                                                <font style=\"vertical-align: inherit;\">
                                                    <font style=\"vertical-align: inherit;\">  {{ formated_price(totale,app.session.get(\"pays\"))}}
                                                    </font>
                                                </font>
                                            </span>
                                        </td>

                                    </tr>

                                {% else %}


                                    <tr class=\"cartTotalTr\">

                                        <td ></td>
                                        <td class=\"\" >
                                            <span class=\"labell\">
                                                {{ \"TOTAL\" | trans }}
                                             </span>
                                        </td>
                                        <td class=\"\" style=\"padding-right: 10px;\" ><span class=\"price\">
                                                <font style=\"vertical-align: inherit;\">
                                                    <font style=\"vertical-align: inherit;\"> {{ formated_price(totale,app.session.get(\"pays\"))}}
                                                    </font>
                                                </font>
                                            </span>
                                        </td>

                                    </tr>
                                {% endif%}
                                </tbody>
                            </table>
                        </div>



                        {% if commande.adresselivraison %}
                            <div class=\"row\" style=\"margin: 25px 0px\">
                                <div class=\"col-md-6\">

                                    <h3 class=\"titlered\"> {{ \"Adresse de livraison\"|trans }}: </h3>
                                    <dt>{{ commande.adresselivraison.prenom }} {{ commande.adresselivraison.nom }}</dt>
                                    <dt>{{ commande.adresselivraison.adresse }}</dt>
                                    <dt>{{ commande.adresselivraison.cp }} {{ commande.adresselivraison.ville }}
                                        - {{ commande.adresselivraison.pays }}</dt>

                                </div>


                            </div>
                        {% else %}
                            <div class=\"row\" style=\"margin: 25px 0px\">
                                <div class=\"col-md-8\">

                                    <h4 class=\"titlered\"> {{ \"Point de retrait\" | trans }}: </h4>
                                    <h5 class=\"labell\">{{station.nom}}</h5>
                                    <h5 class=\"labell\">{{station.adresse}}</h5>
                                    {% if  station.tel %}
                                        <h5 class=\"labell\">{{ \"Téléphone\"  | trans}}: {{station.tel}}</h5>
                                    {% endif %}
                                    {% if email and email !=\"\" %}
                                        <h5 class=\"labell\"> {{ \"Email\" | trans }}: {{ email }}</h5>
                                        <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                                        <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                                    {% endif %}

                                </div>

                                <div class=\"col-md-4\">

                                    <h4  class=\"titlered\"> {{ \"Date et heure de retrait\" | trans }}: </h4>
                                    <h5 class=\"labell\"> {{ 'Le'|trans }} {{ commande.dateReception | date(\"Y-m-d\") }} {{ commande.periodeToString  }}</h5>

                                </div>
                            </div>
                        {% endif %}
                    </div>
                </div>
                <!--/row end-->

            </div>

            <!--/rightSidebar-->

        </div>
    {% endblock %}
", "@Frontend/panier/thanks.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\panier\\thanks.html.twig");
    }
}
