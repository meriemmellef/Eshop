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

/* @Frontend/panier/validation.html.twig */
class __TwigTemplate_c2dd6347e9ff853b5c133537404684ef1164327d56c57c9b62dc12263bf6c327 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/panier/validation.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutBreadcrumps.html.twig", "@Frontend/panier/validation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_breadcrump($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrump"));

        // line 5
        echo "    <div class=\"row\" style=\"margin-right: 2%;margin-left: 2%\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">


                <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accueil"), "html", null, true);
        echo "</a></li>
                <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Panier"), "html", null, true);
        echo "</a></li>
                <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adresse"), "html", null, true);
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

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "


    <div class=\"row\"  >
        <div class=\"col-lg-9 col-md-9 col-sm-12\">
            <div class=\"row userInfo\">

                <div class=\"col-xs-12 col-sm-12\"  >

                    <div class=\"w100 clearfix\">
                        <ul class=\"orderStep orderStepLook2\">


                            <li>
                                <a  class=\"inputtitle\" style=\"cursor: default;\"> <i class=\"fa fa-map-marker\"></i> <span> 1.";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Point de retrait"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li>
                                <a  class=\"inputtitle\"  href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\"> <i class=\"glyphicon glyphicon-shopping-cart\"></i> <span> 2.";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Panier"), "html", null, true);
        echo "</span></a>
                            </li>

                            ";
        // line 43
        if ($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "isDelivered", [])) {
            // line 44
            echo "                                <li>
                                    <a  class=\"inputtitle\"  href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modereception");
            echo "\"> <i class=\"fa fa-calendar\"></i><span> 3.";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mode de reception"), "html", null, true);
            echo " </span></a>
                                </li>
                            ";
        } else {
            // line 48
            echo "                                <li>
                                    <a  class=\"inputtitle\"  href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
            echo "\"> <i class=\"fa fa-calendar\"></i><span> 3.";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Crénau"), "html", null, true);
            echo " </span></a>
                                </li>
                            ";
        }
        // line 52
        echo "

                            <li class=\"active\">
                                <a ><i class=\"fa fa-check-square \"> </i><span>4.";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Conf"), "html", null, true);
        echo "</span></a>
                            </li>

                        </ul>
                        <!--/.orderStep end-->
                    </div>

                    <div class=\"w100 clearfix\">

                        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashBag", []), "get", [0 => "errorpayzen"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 65
            echo "                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">×</span>
                                </button>
                                ";
            // line 69
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                        <div class=\"row userInfo\">

                            <div class=\"col-lg-12\">
                                <h2 class=\"titlered\"> ";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valider mon panier"), "html", null, true);
        echo " </h2>

                            </div>


                            <div class=\"col-xs-12 col-sm-12\">
                                <div class=\"cartContent w100 checkoutReview \">
                                    <table class=\"cartTable table-responsive\" style=\"width:100%\">
                                        <tbody>
                                            <tr class=\"CartProduct cartTableHeader\">
                                                <th style=\"width:15%\"> ";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produit"), "html", null, true);
        echo "</th>
                                                <th class=\"checkoutReviewTdDetails\" colspan=\"2\"  style=\"width: 45%\">
                                                    ";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Détails"), "html", null, true);
        echo "</th>
                                                <th class=\"hidden-sm hidden-xs\" style=\"width:10%\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix unitaire"), "html", null, true);
        echo "</th>
                                                <th class=\"hidden-xs \" style=\"width:5%\">";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QT"), "html", null, true);
        echo "</th>
                                                <th style=\"width:15%\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total"), "html", null, true);
        echo "</th>
                                            </tr>

                                            ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 94
            echo "                                                <tr class=\"CartProduct\">
                                                    <td class=\"CartProductThumb\">
                                                        <div><a href=\"/\">
                                                                <img  style=\" object-fit: contain !important; display: inline;width: auto\"  data-original=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
            echo "\"
                                                                      src=\"";
            // line 98
            if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) != ""))) {
                echo "/uploads/produits/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                echo "
                                                                              ";
            } else {
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
            }
            echo "\"
                                                                      alt=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\">

                                                            </a>
                                                        </div>


                                                    </td>
                                                    <td  style=\" width :15%\">
                                                        <div class=\"CartDescription\">
                                                            <h4>
                                                                <a href=\"#\">";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
            echo "</a>
                                                            </h4>
                                                        </div>
                                                    </td>
                                                    <td   style=\" width :30%\" >
                                                        ";
            // line 115
            if ($this->getAttribute(($context["size"] ?? null), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", true, true)) {
                // line 116
                echo "                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "sizes", []));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 117
                    echo "                                                                ";
                    if (($this->getAttribute(($context["size"] ?? null), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", true, true) && $this->getAttribute($this->getAttribute(($context["size"] ?? null), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", false, true), $this->getAttribute($context["s"], "id", []), [], "array", true, true))) {
                        // line 118
                        echo "                                                                    <div class=\"row\" style=\"padding-left: 10px;\" >
                                                                        <p style=\" float:left;display: inline-block;border: 2px solid #ddd;background-color: ";
                        // line 119
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "couleur", []), "codeCouleur", []), "html", null, true);
                        echo ";color: transparent;height: 30px;width: 30px;\"></p>
                                                                        <h5  style=\" padding-left: 10px; padding-top: 4px;display: inline-block; float:left;color: #a1a5a9\">
                                                                            ";
                        // line 121
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Taille"), "html", null, true);
                        echo " :";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "libelle", []), "html", null, true);
                        echo "
                                                                            ";
                        // line 122
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QT"), "html", null, true);
                        echo " :";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["size"] ?? $this->getContext($context, "size")), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array"), $this->getAttribute($context["s"], "id", []), [], "array"), "html", null, true);
                        echo "</h5>
                                                                    </div>

                                                                ";
                    }
                    // line 126
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "                                                        ";
            }
            // line 128
            echo "                                                    </td>

                                                    <td class=\"hidden-sm hidden-xs\">
                                                        <span class=\"price\" style=\"color: #374649\" >    ";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "</span>
                                                        <br>
                                                        ";
            // line 133
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) == 1))) {
                // line 134
                echo "                                                            <span class=\"old-price\">
                                                                 ";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
                                                             </span>
                                                        ";
            } elseif ((($this->getAttribute($this->getAttribute($this->getAttribute(            // line 137
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                // line 138
                echo "                                                             <span class=\"old-price\">
                                                            ";
                // line 139
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "

                                                              </span>
                                                        ";
            }
            // line 143
            echo "                                                    </td>

                                                    <td class=\"hidden-xs spanText\">";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", []), "html", null, true);
            echo "</td>

                                                    <td class=\"price\">
                                                        ";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "getTotalPrice", [0 => $this->getAttribute($context["produit"], "quantite", [])], "method"), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "
                                                        <br>
                                                        ";
            // line 150
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($context["produit"], "quantite", []) >= $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", [])))) {
                // line 151
                echo "                                                            <span class=\"old-price\">
                                                                ";
                // line 152
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "getTotalPrice", [0 => $this->getAttribute($context["produit"], "quantite", [])], "method"), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
                                                            </span>
                                                        ";
            } elseif ((($this->getAttribute($this->getAttribute($this->getAttribute(            // line 154
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                // line 155
                echo "                                                            <span class=\"old-price\">
                                                            ";
                // line 156
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "getTotalPrice", [0 => $this->getAttribute($context["produit"], "quantite", [])], "method"), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "

                                                            </span>
                                                        ";
            }
            // line 160
            echo "                                                    </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                                            ";
        if ($this->getAttribute($this->getAttribute(($context["commande"] ?? null), "coupon", [], "any", false, true), "type", [], "any", true, true)) {
            // line 164
            echo "
                                                <tr class=\"cartTotalTr\">
                                                    <td >
                                                        <div></div>
                                                    </td>
                                                    <td colspan=\"2\" ><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix initial"), "html", null, true);
            echo "</font></font></td>
                                                    <td colspan=\"2\" style=\"padding-right: 10px;\">
                                                    <span><font style=\"vertical-align: inherit;\">
                                                    <font style=\"vertical-align: inherit;\">
                                                        ";
            // line 173
            if (($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "type", []) == 1)) {
                // line 174
                echo "                                                             ";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice(($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "prix", []) + $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "montant", [])), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
                                                        ";
            }
            // line 176
            echo "                                                        ";
            if (($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "type", []) == 2)) {
                // line 177
                echo "                                                           ";
                $context["calculated_price"] = ($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "prix", []) + (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "prix", []) / (100 - $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "pourcentage", []))) * $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "pourcentage", [])));
                // line 178
                echo "                                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice(($context["calculated_price"] ?? $this->getContext($context, "calculated_price")), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "

                                                        ";
            }
            // line 181
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
                                                    <td colspan=\"2\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">";
            // line 192
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Coupon"), "html", null, true);
            echo "</font></font></td>
                                                    <td colspan=\"2\" style=\"padding-right: 10px;\">
                                                     <span><font style=\"vertical-align: inherit;\">
                                                         <font style=\"vertical-align: inherit;\">
                                                        ";
            // line 196
            if (($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "type", []) == 1)) {
                // line 197
                echo "                                                            réduction de ";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "montant", []), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
                                                        ";
            }
            // line 199
            echo "                                                        ";
            if (($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "type", []) == 2)) {
                // line 200
                echo "                                                            réduction de ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "pourcentage", []), "html", null, true);
                echo " %
                                                        ";
            }
            // line 202
            echo "
                                                         </font>
                                                         </font>
                                                       </span>
                                                    </td>

                                                </tr>
                                                <tr class=\"cartTotalTr\">

                                                    <td ></td>
                                                    <td class=\"\" colspan=\"2\">
                                                       <span class=\"labell\">";
            // line 213
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TOTAL"), "html", null, true);
            echo "  </span>
                                                    </td>
                                                    <td class=\"\"colspan=\"2\"  style=\"padding-right: 10px;\" >
                                                        <span class=\"price\">
                                                <font style=\"vertical-align: inherit;\">
                                                    <font style=\"vertical-align: inherit;\">  ";
            // line 218
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "prix", []), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "
                                                    </font>
                                                </font>
                                            </span>
                                                    </td>

                                                </tr>

                                            ";
        } else {
            // line 227
            echo "

                                                <tr class=\"cartTotalTr\">

                                                    <td ></td>
                                                    <td class=\"\" colspan=\"2\">
                                                        <span class=\"labell\">";
            // line 233
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TOTAL"), "html", null, true);
            echo "  </span>

                                                    </td>
                                                    <td class=\"\" style=\"padding-right: 10px;\" colspan=\"2\" >
                                                        <span class=\"price\">
                                                          <font style=\"vertical-align: inherit;\">
                                                             <font style=\"vertical-align: inherit;\"> ";
            // line 239
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "prix", []), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "
                                                            </font>
                                                          </font>
                                                        </span>
                                                    </td>

                                                </tr>
                                            ";
        }
        // line 247
        echo "                                        </tbody>
                                    </table>
                                </div>
                                <!--cartContent-->

                                <div class=\"w100 costDetails\">
                                    <div class=\"table-block\" id=\"order-detail-content\">
                                        <table class=\"std table\" id=\"cart-summary\">
                                            <tr>

                                            </tr>

                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/costDetails-->


                                <!--/row-->

                                ";
        // line 269
        if ($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", [])) {
            // line 270
            echo "                                    <div class=\"row\" style=\"margin: 25px 0px\">
                                        <div class=\"col-md-6\">

                                            <h3 class=\"titlered\"> ";
            // line 273
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adresse de livraison"), "html", null, true);
            echo ": </h3>
                                            <dt>";
            // line 274
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "prenom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "nom", []), "html", null, true);
            echo "</dt>
                                            <dt>";
            // line 275
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "adresse", []), "html", null, true);
            echo "</dt>
                                            <dt>";
            // line 276
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "cp", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "ville", []), "html", null, true);
            echo "
                                                - ";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "pays", []), "html", null, true);
            echo "</dt>

                                        </div>


                                    </div>
                                ";
        } else {
            // line 284
            echo "                                <div class=\"row\" style=\"margin: 25px 0px\">
                                    <div class=\"col-md-8\">

                                        <h4 class=\"titlered\"> ";
            // line 287
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Point de retrait"), "html", null, true);
            echo ": </h4>
                                        <h5 class=\"labell\">";
            // line 288
            echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "nom", []), "html", null, true);
            echo "</h5>
                                        <h5 class=\"labell\">";
            // line 289
            echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "adresse", []), "html", null, true);
            echo "</h5>
                                        ";
            // line 290
            if ($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "tel", [])) {
                // line 291
                echo "                                        <h5 class=\"labell\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléphone"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "tel", []), "html", null, true);
                echo "</h5>
                                        ";
            }
            // line 293
            echo "                                        ";
            if ((($context["email"] ?? $this->getContext($context, "email")) && (($context["email"] ?? $this->getContext($context, "email")) != ""))) {
                // line 294
                echo "                                        <h5 class=\"labell\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
                echo "</h5>
                                            <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                                            <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                                        ";
            }
            // line 298
            echo "
                                    </div>

                                    <div class=\"col-md-4\">

                                        <h4  class=\"titlered\"> ";
            // line 303
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date et heure de retrait"), "html", null, true);
            echo ": </h4>
                                        <h5 class=\"labell\">  ";
            // line 304
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateReception", []), "Y-m-d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeToString", []), "html", null, true);
            echo "</h5>

                                    </div>
                                </div>
                                ";
        }
        // line 309
        echo "

                            </div>


                        </div>


                    </div>
                    <!--/row end-->

                    <div class=\"cartFooter w100\">
                        <div class=\"box-footer\">


                            <div class=\"pull-left\">
                                <a href=\"";
        // line 325
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modereception");
        echo "\" class=\"btn  \"
                                   style=\"padding-right: 10px;padding-left: 10px;line-height: 40px\">
                                    <i class=\"fa fa-arrow-left\"></i>&nbsp; ";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Créneau"), "html", null, true);
        echo "
                                </a>
                            </div>
                            <div class=\"pull-right\">
                                <a href=\"";
        // line 331
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation_commande");
        echo "\" >

                                    <button type=\"submit\" class=\"btn btn_card w100\" >
                                        ";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirmer"), "html", null, true);
        echo " &nbsp; <i class=\"fa fa-check\"></i>
                                    </button>
                                </a>
                            </div>




                        </div>
                    </div>
                    <!--/ cartFooter -->
                </div>


            </div>
        </div>
        <!--/row end-->


        <div class=\"col-lg-3 col-md-3 col-sm-12 rightSidebar\">

            <div class=\"w100 cartMiniTable\">
                <table id=\"cart-summary\" class=\"std table\">
                    <tbody>
                        <tr>
                            <td><h4 class=\"spanText\"> ";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total commande"), "html", null, true);
        echo "</h4></td>
                        </tr>
                        <tr>
                            <td class=\" site-color\" >
                                <span class=\"price\" id=\"total-price\">";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "prix", []), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
        echo "</span>
                                <span class=\" site-color\">  ";
        // line 364
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "devise", []), "html", null, true);
        echo "</span>
                                ";
        // line 365
        if ($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "isDelivered", [])) {
            // line 366
            echo "                                    <span class=\"priceeee\">  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dont"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "prixLivraison", []), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("prix de livraison"), "html", null, true);
            echo " </span>
                                ";
        }
        // line 368
        echo "
                            </td>
                        </tr>


                    </tbody>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
        <!--/rightSidebar-->
    </div>
    <!--/row-->

    <div style=\"clear:both\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/panier/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  742 => 368,  732 => 366,  730 => 365,  726 => 364,  722 => 363,  715 => 359,  687 => 334,  681 => 331,  674 => 327,  669 => 325,  651 => 309,  641 => 304,  637 => 303,  630 => 298,  620 => 294,  617 => 293,  609 => 291,  607 => 290,  603 => 289,  599 => 288,  595 => 287,  590 => 284,  580 => 277,  574 => 276,  570 => 275,  564 => 274,  560 => 273,  555 => 270,  553 => 269,  529 => 247,  518 => 239,  509 => 233,  501 => 227,  489 => 218,  481 => 213,  468 => 202,  462 => 200,  459 => 199,  453 => 197,  451 => 196,  444 => 192,  431 => 181,  424 => 178,  421 => 177,  418 => 176,  412 => 174,  410 => 173,  403 => 169,  396 => 164,  393 => 163,  385 => 160,  378 => 156,  375 => 155,  373 => 154,  368 => 152,  365 => 151,  363 => 150,  358 => 148,  352 => 145,  348 => 143,  341 => 139,  338 => 138,  336 => 137,  331 => 135,  328 => 134,  326 => 133,  321 => 131,  316 => 128,  313 => 127,  307 => 126,  298 => 122,  292 => 121,  287 => 119,  284 => 118,  281 => 117,  276 => 116,  274 => 115,  266 => 110,  253 => 100,  248 => 99,  241 => 98,  237 => 97,  232 => 94,  228 => 93,  222 => 90,  218 => 89,  214 => 88,  210 => 87,  205 => 85,  192 => 75,  187 => 72,  178 => 69,  172 => 65,  168 => 64,  156 => 55,  151 => 52,  143 => 49,  140 => 48,  132 => 45,  129 => 44,  127 => 43,  119 => 40,  113 => 37,  97 => 23,  91 => 22,  77 => 15,  69 => 12,  63 => 11,  59 => 10,  52 => 5,  46 => 4,  30 => 1,);
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
    <div class=\"row\" style=\"margin-right: 2%;margin-left: 2%\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">


                <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">{{ \"Accueil\" | trans }}</a></li>
                <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"{{ path(\"panier\") }}\">{{ \"Panier\" | trans }}</a></li>
                <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"{{ path(\"livraison\") }}\">{{ \"Adresse\" | trans }}</a></li>

                <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                    {{ \"Conf\" | trans }}</li>


            </ul>
        </div>
    </div>
{% endblock breadcrump %}
{% block content %}



    <div class=\"row\"  >
        <div class=\"col-lg-9 col-md-9 col-sm-12\">
            <div class=\"row userInfo\">

                <div class=\"col-xs-12 col-sm-12\"  >

                    <div class=\"w100 clearfix\">
                        <ul class=\"orderStep orderStepLook2\">


                            <li>
                                <a  class=\"inputtitle\" style=\"cursor: default;\"> <i class=\"fa fa-map-marker\"></i> <span> 1.{{ \"Point de retrait\" | trans }}</span></a>
                            </li>
                            <li>
                                <a  class=\"inputtitle\"  href=\"{{ path(\"panier\") }}\"> <i class=\"glyphicon glyphicon-shopping-cart\"></i> <span> 2.{{ \"Panier\" | trans }}</span></a>
                            </li>

                            {% if station.isDelivered %}
                                <li>
                                    <a  class=\"inputtitle\"  href=\"{{ path(\"modereception\") }}\"> <i class=\"fa fa-calendar\"></i><span> 3.{{ \"Mode de reception\" | trans }} </span></a>
                                </li>
                            {% else %}
                                <li>
                                    <a  class=\"inputtitle\"  href=\"{{ path(\"livraison\") }}\"> <i class=\"fa fa-calendar\"></i><span> 3.{{\"Crénau\" | trans}} </span></a>
                                </li>
                            {% endif %}


                            <li class=\"active\">
                                <a ><i class=\"fa fa-check-square \"> </i><span>4.{{ \"Conf\" | trans }}</span></a>
                            </li>

                        </ul>
                        <!--/.orderStep end-->
                    </div>

                    <div class=\"w100 clearfix\">

                        {% for message in app.session.flashBag.get('errorpayzen') %}
                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">×</span>
                                </button>
                                {{ message }}
                            </div>
                        {% endfor %}
                        <div class=\"row userInfo\">

                            <div class=\"col-lg-12\">
                                <h2 class=\"titlered\"> {{ \"Valider mon panier\" | trans }} </h2>

                            </div>


                            <div class=\"col-xs-12 col-sm-12\">
                                <div class=\"cartContent w100 checkoutReview \">
                                    <table class=\"cartTable table-responsive\" style=\"width:100%\">
                                        <tbody>
                                            <tr class=\"CartProduct cartTableHeader\">
                                                <th style=\"width:15%\"> {{ \"Produit\" | trans }}</th>
                                                <th class=\"checkoutReviewTdDetails\" colspan=\"2\"  style=\"width: 45%\">
                                                    {{\"Détails\" | trans}}</th>
                                                <th class=\"hidden-sm hidden-xs\" style=\"width:10%\">{{ \"Prix unitaire\" | trans }}</th>
                                                <th class=\"hidden-xs \" style=\"width:5%\">{{ \"QT\" | trans }}</th>
                                                <th style=\"width:15%\">{{ \"Total\" | trans }}</th>
                                            </tr>

                                            {% for produit in produits %}
                                                <tr class=\"CartProduct\">
                                                    <td class=\"CartProductThumb\">
                                                        <div><a href=\"/\">
                                                                <img  style=\" object-fit: contain !important; display: inline;width: auto\"  data-original=\"{{ asset('/assets/img/default_t_e.jpg') }}\"
                                                                      src=\"{%  if  produit.produit.image  and produit.produit.image != \"\" %}/uploads/produits/{{ produit.produit.image }}
                                                                              {% else %}{{ asset('/assets/img/default_t_e.jpg') }}{% endif %}\"
                                                                      alt=\"{{ produit.produit.id }}\">

                                                            </a>
                                                        </div>


                                                    </td>
                                                    <td  style=\" width :15%\">
                                                        <div class=\"CartDescription\">
                                                            <h4>
                                                                <a href=\"#\">{{ produit.produit.nom }}</a>
                                                            </h4>
                                                        </div>
                                                    </td>
                                                    <td   style=\" width :30%\" >
                                                        {% if size[produit.produit.id] is defined %}
                                                            {% for s in produit.produit.sizes %}
                                                                {% if size[produit.produit.id] is defined and  size[produit.produit.id][s.id] is defined %}
                                                                    <div class=\"row\" style=\"padding-left: 10px;\" >
                                                                        <p style=\" float:left;display: inline-block;border: 2px solid #ddd;background-color: {{s.couleur.codeCouleur}};color: transparent;height: 30px;width: 30px;\"></p>
                                                                        <h5  style=\" padding-left: 10px; padding-top: 4px;display: inline-block; float:left;color: #a1a5a9\">
                                                                            {{ \"Taille\" | trans }} :{{ s.libelle }}
                                                                            {{ \"QT\" | trans }} :{{ size[produit.produit.id][s.id] }}</h5>
                                                                    </div>

                                                                {% endif %}
                                                            {% endfor %}
                                                        {% endif %}
                                                    </td>

                                                    <td class=\"hidden-sm hidden-xs\">
                                                        <span class=\"price\" style=\"color: #374649\" >    {{ formated_price(produit.produit.finalPrice[\"prix\"],app.session.get(\"pays\"))}}</span>
                                                        <br>
                                                        {% if produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo == 1 %}
                                                            <span class=\"old-price\">
                                                                 {{ formated_price(produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}}
                                                             </span>
                                                        {% elseif produit.produit.finalPrice[\"is_promo\"]  and produit.produit.prixPromo and produit.produit.prixPromo > 0  %}
                                                             <span class=\"old-price\">
                                                            {{ formated_price(produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}}

                                                              </span>
                                                        {% endif %}
                                                    </td>

                                                    <td class=\"hidden-xs spanText\">{{ produit.quantite }}</td>

                                                    <td class=\"price\">
                                                        {{ formated_price(produit.produit.getTotalPrice(produit.quantite)[\"prix\"],app.session.get(\"pays\"))}}
                                                        <br>
                                                        {% if produit.produit.finalPrice[\"is_promo\"] and produit.quantite >=   produit.produit.numProduitPromo %}
                                                            <span class=\"old-price\">
                                                                {{ formated_price(produit.produit.getTotalPrice(produit.quantite)[\"old_prix\"],app.session.get(\"pays\"))}}
                                                            </span>
                                                        {% elseif produit.produit.finalPrice[\"is_promo\"]  and produit.produit.prixPromo and produit.produit.prixPromo > 0  %}
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
                                                    <td colspan=\"2\" ><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">{{ \"Prix initial\"|trans }}</font></font></td>
                                                    <td colspan=\"2\" style=\"padding-right: 10px;\">
                                                    <span><font style=\"vertical-align: inherit;\">
                                                    <font style=\"vertical-align: inherit;\">
                                                        {% if commande.coupon.type == 1 %}
                                                             {{ formated_price(commande.prix+commande.coupon.montant,app.session.get(\"pays\"))}}
                                                        {% endif %}
                                                        {% if commande.coupon.type ==2 %}
                                                           {% set calculated_price =  commande.prix+(commande.prix/ (100 - commande.coupon.pourcentage)  * commande.coupon.pourcentage) %}
                                                            {{ formated_price(calculated_price,app.session.get(\"pays\"))}}

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
                                                    <td colspan=\"2\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">{{ \"Coupon\"|trans }}</font></font></td>
                                                    <td colspan=\"2\" style=\"padding-right: 10px;\">
                                                     <span><font style=\"vertical-align: inherit;\">
                                                         <font style=\"vertical-align: inherit;\">
                                                        {% if commande.coupon.type == 1 %}
                                                            réduction de {{ formated_price( commande.coupon.montant,app.session.get(\"pays\"))}}
                                                        {% endif %}
                                                        {% if commande.coupon.type ==2 %}
                                                            réduction de {{  commande.coupon.pourcentage }} %
                                                        {% endif %}

                                                         </font>
                                                         </font>
                                                       </span>
                                                    </td>

                                                </tr>
                                                <tr class=\"cartTotalTr\">

                                                    <td ></td>
                                                    <td class=\"\" colspan=\"2\">
                                                       <span class=\"labell\">{{ \"TOTAL\"|trans}}  </span>
                                                    </td>
                                                    <td class=\"\"colspan=\"2\"  style=\"padding-right: 10px;\" >
                                                        <span class=\"price\">
                                                <font style=\"vertical-align: inherit;\">
                                                    <font style=\"vertical-align: inherit;\">  {{ formated_price( commande.prix,app.session.get(\"pays\"))}}
                                                    </font>
                                                </font>
                                            </span>
                                                    </td>

                                                </tr>

                                            {% else %}


                                                <tr class=\"cartTotalTr\">

                                                    <td ></td>
                                                    <td class=\"\" colspan=\"2\">
                                                        <span class=\"labell\">{{ \"TOTAL\"|trans}}  </span>

                                                    </td>
                                                    <td class=\"\" style=\"padding-right: 10px;\" colspan=\"2\" >
                                                        <span class=\"price\">
                                                          <font style=\"vertical-align: inherit;\">
                                                             <font style=\"vertical-align: inherit;\"> {{ formated_price( commande.prix,app.session.get(\"pays\"))}}
                                                            </font>
                                                          </font>
                                                        </span>
                                                    </td>

                                                </tr>
                                            {% endif%}
                                        </tbody>
                                    </table>
                                </div>
                                <!--cartContent-->

                                <div class=\"w100 costDetails\">
                                    <div class=\"table-block\" id=\"order-detail-content\">
                                        <table class=\"std table\" id=\"cart-summary\">
                                            <tr>

                                            </tr>

                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/costDetails-->


                                <!--/row-->

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
                                        <h5 class=\"labell\">  {{ commande.dateReception | date(\"Y-m-d\") }} {{ commande.periodeToString  }}</h5>

                                    </div>
                                </div>
                                {% endif %}


                            </div>


                        </div>


                    </div>
                    <!--/row end-->

                    <div class=\"cartFooter w100\">
                        <div class=\"box-footer\">


                            <div class=\"pull-left\">
                                <a href=\"{{ path('modereception') }}\" class=\"btn  \"
                                   style=\"padding-right: 10px;padding-left: 10px;line-height: 40px\">
                                    <i class=\"fa fa-arrow-left\"></i>&nbsp; {{ \"Créneau\" | trans }}
                                </a>
                            </div>
                            <div class=\"pull-right\">
                                <a href=\"{{ path('validation_commande') }}\" >

                                    <button type=\"submit\" class=\"btn btn_card w100\" >
                                        {{ \"Confirmer\" | trans }} &nbsp; <i class=\"fa fa-check\"></i>
                                    </button>
                                </a>
                            </div>




                        </div>
                    </div>
                    <!--/ cartFooter -->
                </div>


            </div>
        </div>
        <!--/row end-->


        <div class=\"col-lg-3 col-md-3 col-sm-12 rightSidebar\">

            <div class=\"w100 cartMiniTable\">
                <table id=\"cart-summary\" class=\"std table\">
                    <tbody>
                        <tr>
                            <td><h4 class=\"spanText\"> {{ \"Total commande\"|trans }}</h4></td>
                        </tr>
                        <tr>
                            <td class=\" site-color\" >
                                <span class=\"price\" id=\"total-price\">{{ formated_price( commande.prix  ,app.session.get(\"pays\"),false)}}</span>
                                <span class=\" site-color\">  {{ app.session.get(\"pays\").devise }}</span>
                                {% if station.isDelivered %}
                                    <span class=\"priceeee\">  {{ \"dont\" | trans }} {{ formated_price( station.prixLivraison,app.session.get(\"pays\"))}}  {{ \"prix de livraison\" | trans }} </span>
                                {% endif %}

                            </td>
                        </tr>


                    </tbody>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
        <!--/rightSidebar-->
    </div>
    <!--/row-->

    <div style=\"clear:both\"></div>
{% endblock %}
", "@Frontend/panier/validation.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\panier\\validation.html.twig");
    }
}
