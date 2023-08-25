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

/* FrontendBundle:Partial:produit.html.twig */
class __TwigTemplate_6bd2aaea9d073599b71797cb8b7f1847c1b134d98613cec402e398f119db566f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:Partial:produit.html.twig"));

        // line 1
        echo "<div class=\" item col-sm-4 col-lg-3 col-md-4 col-xs-12\" style=\"margin-top: 15px;\">
    <div class=\"product\">

        <a       ";
        // line 4
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
            // line 5
            echo "                   onclick=\"addfavoris(";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo ")\"
                ";
        } else {
            // line 7
            echo "                    ";
            // line 8
            echo "                    href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login", ["produitid" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
            echo "\"
                ";
        }
        // line 10
        echo "                class=\"add-fav tooltipHere
\t\t\t                        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["favoris"]);
        foreach ($context['_seq'] as $context["_key"] => $context["favoris"]) {
            // line 12
            echo "\t\t\t                        ";
            if ((($this->getAttribute($context["favoris"], "utilisateur", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) && ($this->getAttribute($context["favoris"], "produit", []) == ($context["produit"] ?? $this->getContext($context, "produit"))))) {
                echo " active ";
            }
            // line 13
            echo "\t\t\t                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favoris'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\" data-placement=\"left\">
            <i class=\"glyphicon glyphicon-heart\"></i>
        </a>

        <div class=\"image\" style=\"height: 70%!important;width: 100%\">



            <!-- /.modaldetails -->
            ";
        // line 22
        if ((twig_length_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", [])) > 0)) {
            // line 23
            echo "
                ";
            // line 31
            echo "

            ";
            // line 33
            if (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "description", []) || $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "descriptionen", []))) {
                // line 34
                echo "
                <div class=\"quickview\" >
                    <a  class=\"btn btn-xs btn-quickview\" href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_produits", ["produitid" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
                echo "\"
                    >";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details"), "html", null, true);
                echo " </a>
                </div>
                ";
            }
            // line 40
            echo "
                <!-- Modal -->
                <div class=\"modal fade\" id=\"productSetailsModalAjaxx";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\"
                     aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"row transitionfx text-left\" style=\"padding: 30px;margin-right: 0px!important; margin-left: 0px;!important;\">
                                <div class=\"col-lg-12\">
                                    <button style=\"opacity: 1.2;margin-top: -21px;margin-right: -18px;background-color: #ffffff;/* color: #454545; */\" type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span style=\"color: #454545;\" aria-hidden=\"true\">×</span>
                                    </button></div>
                                <!-- left column -->
                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                    <!-- product Image and Zoom -->
                                    <div class=\"main-image sp-wrap col-lg-12 no-padding style3\" style=\"display: inline-block;\">



                                        <div class=\"sp-large\" style=\"overflow: hidden; height: auto; left: 0px; top: 0px;max-width: 100% !important\">
                                            <a href=\"\" class=\"\" style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                                <img id=\"imageproduit";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo "\"
                                                     data-original=\"/uploads/produits/";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []), "html", null, true);
            echo "\"
                                                     src=\"";
            // line 62
            if (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []) && ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []) != ""))) {
                echo "/uploads/produits/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []), "html", null, true);
                echo "
                                                           ";
            } else {
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
            }
            echo "\"
                                                     alt=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nom", []), "html", null, true);
            echo "\" class=\"img-responsive\" style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                            </a>
                                        </div>
                                    </div>


                                </div>
                                <!--/ left column end -->


                                <!-- right column -->
                                <div class=\"col-lg-8 col-md-6 col-sm-6\">
                                    <input type=\"text\" id=\"idproduit\" value=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo "\" hidden>

                                    <h1 class=\"product-title titleproduitt\">

                                        ";
            // line 80
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nomen", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nom", []), "html", null, true);
            }
            // line 81
            echo "
                                    </h1>

                                    <div class=\"description\" >
                                        ";
            // line 85
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "descriptionen", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "description", []), "html", null, true);
            }
            // line 86
            echo "
                                    </div>
                                    <div class=\"product-price\" style=\"font-size: 20px;\">
                                        <span class=\"price-sales price\">  ";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "</span>
                                        ";
            // line 90
            if (($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "numProduitPromo", []) == 1))) {
                // line 91
                echo "                                            <span class=\"price-standard  old-price\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo " </span>
                                        ";
            } elseif ((($this->getAttribute($this->getAttribute(            // line 92
($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prixPromo", [])) && ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prixPromo", []) > 0))) {
                // line 93
                echo "                                            <span class=\"price-standard old-price\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "</span>
                                        ";
            }
            // line 95
            echo "                                    </div>

                                    ";
            // line 97
            if ((twig_length_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", [])) > 0)) {
                // line 98
                echo "
                                        <div class=\"color-details\">
                                            ";
                // line 100
                if (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []) && ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []) != ""))) {
                    // line 101
                    echo "                                                <img name='img' id='";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []), "html", null, true);
                    echo "'
                                                     style=\"width:  100px;height: 100px;background-size: contain;border-width: 2px; border-color: #ED0000;border-style: solid;\"
                                                     src=\"/uploads/produits/";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []), "html", null, true);
                    echo "\"
                                                     onclick=\"changeImage('";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo "')\"
                                                     alt=\"img\">
                                            ";
                }
                // line 107
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", []));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 108
                    echo "                                                ";
                    if (($this->getAttribute($context["c"], "image", []) && ($this->getAttribute($context["c"], "image", []) != ""))) {
                        // line 109
                        echo "
                                                    <img name='img' id='";
                        // line 110
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                        echo "'
                                                         style=\"    width:  100px;height: 100px;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                                         src=\"/uploads/produits/";
                        // line 112
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                        echo "\"
                                                         onclick=\"changeImage('";
                        // line 113
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                        echo "')\"
                                                         alt=\"img\">

                                                ";
                    }
                    // line 117
                    echo "
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                echo "                                        </div>
                                        <div class=\"color-details\">
                                            <span class=\"selected-color selectedSpan\"><strong class=\"text_details\">";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Couleurs"), "html", null, true);
                echo "</strong></span>
                                            <ul class=\"swatches Color\" name=\"couleur";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                id=\"couleur";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\">
                                                ";
                // line 124
                $context["i"] = 1;
                // line 125
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", []));
                foreach ($context['_seq'] as $context["_key"] => $context["couleur"]) {
                    // line 126
                    echo "                                                    ";
                    if ((($context["i"] ?? $this->getContext($context, "i")) == 1)) {
                        // line 127
                        echo "                                                        <li class=\"selected\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                        echo "\"
                                                            onclick=\"changeImagecouleur('";
                        // line 128
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "id", []), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "image", []), "html", null, true);
                        echo "')\">
                                                            <a style=\"background-color:";
                        // line 129
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                        echo ";color:transparent\"></a>
                                                        </li>
                                                    ";
                    } else {
                        // line 132
                        echo "                                                        <li value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                        echo "\"
                                                            onclick=\"changeImagecouleur('";
                        // line 133
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "id", []), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "image", []), "html", null, true);
                        echo "')\">
                                                            <a style=\"background-color:";
                        // line 134
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                        echo ";color:transparent\"></a>
                                                        </li>
                                                    ";
                    }
                    // line 137
                    echo "                                                    ";
                    $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                    // line 138
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couleur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "                                            </ul>
                                        </div>
                                    ";
            }
            // line 142
            echo "                                    <!--/.color-details-->

                                    <div class=\"color-details\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4 col-md-4 col-xs-6\" style=\"\">
                                                <span class=\"selected-color selectedSpan\"><strong class=\"text_details\">";
            // line 147
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantité"), "html", null, true);
            echo "</strong></span>


                                                ";
            // line 150
            if ((twig_length_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", [])) > 0)) {
                // line 151
                echo "                                                    <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"deleteArticle";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                                    onclick=\"moinsquantity(";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo ")\"
                                                                    type=\"button\"
                                                                    class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                    style=\"background-color:#ED0000\" data-type=\"minus\"
                                                                    data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <input style=\"font-family: Roboto-Regular,sans-serif;font-size: 14px;font-weight: bold; height: 4.5rem;!important;\" type=\"text\"
                                                               id=\"quantitymodal";
                // line 163
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                               name=\"quantitymodal";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                               class=\"form-control input-number text-center\" ";
                // line 165
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), [], "array", true, true)) {
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), [], "array"), "html", null, true);
                    echo "\" ";
                } else {
                    echo " value=\"1\" ";
                }
                // line 166
                echo "                                                               min=\"1\" max=\"100\" disabled>

                                                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button onclick=\"plusquantity(";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo ")\"
                                                                    type=\"button\"
                                                                    class=\"quantity-right-plus btn btn-success btn-number btn_plus_moins\"
                                                                    style=\"background-color:#ED0000\" data-type=\"plus\"
                                                                    data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    </div>

                                                ";
            } else {
                // line 180
                echo "                                                    <div class=\"row\" id=\"quantite";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                         name=\"quantite";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"  >

                                                        <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                                            <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle";
                // line 187
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                                        onclick=\"deleteArticleQuantity(";
                // line 188
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prix", []), "html", null, true);
                echo ")\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
                                                                    <span class=\"glyphicon glyphicon-minus\"></span>
                                                                </button>
                                                            </span>
                                                                <input style=\" height: 4.5rem;!important;\" type=\"text\"
                                                                       id=\"qte";
                // line 196
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                                       name=\"qte";
                // line 197
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                                       class=\"form-control input-number text-center\" ";
                // line 198
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), [], "array", true, true)) {
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), [], "array"), "html", null, true);
                    echo "\" ";
                } else {
                    echo " value=\"0\" ";
                }
                // line 199
                echo "                                                                       min=\"1\" max=\"100\" disabled>
                                                                <span class=\"input-group-btn\">
                                                                <button id=\"addArticle";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                                        onclick=\"addArticle(";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "quantite", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "maxcommande", []), "html", null, true);
                echo ")\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"plus\" data-field=\"\">
                                                                    <span class=\"glyphicon glyphicon-plus\"></span>
                                                                </button>
                                                        </span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                ";
            }
            // line 215
            echo "
                                            </div>
                                            ";
            // line 217
            if ((twig_length_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", [])) > 0)) {
                // line 218
                echo "
                                                <div class=\"col-lg-8 col-sm-6 col-xs-6\">
                                                    <span class=\"selected-color selectedSpan\"><strong class=\"text_details\">";
                // line 220
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Taille"), "html", null, true);
                echo "</strong></span>
                                                    <select class=\"form-control \" id=\"sizes";
                // line 221
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                            name=\"sizes";
                // line 222
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                            onchange=\"changeSize(";
                // line 223
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo ")\"
                                                            style=\"border-radius: 0px;height: 43px; font-family: Roboto-Regular,sans-serif\"  >
                                                        <option disabled  style=\" color:#374649;font-family: Roboto-Regular,sans-serif;font-size: 12px;font-weight: 400 \" selected>
                                                            ";
                // line 226
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir la taille"), "html", null, true);
                echo "</option>
                                                        ";
                // line 227
                if ((twig_length_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", [])) > 0)) {
                    // line 228
                    echo "                                                            ";
                    $context["i"] = 1;
                    // line 229
                    echo "                                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", []), "0", [], "array"), "sizes", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                        // line 230
                        echo "                                                                ";
                        if ((($context["i"] ?? $this->getContext($context, "i")) == 1)) {
                            // line 231
                            echo "                                                                    <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo "\"
                                                                            selected>";
                            // line 232
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                            echo "</option>
                                                                ";
                        } else {
                            // line 234
                            echo "                                                                    <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                            echo "</option>

                                                                ";
                        }
                        // line 237
                        echo "                                                                ";
                        $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                        // line 238
                        echo "
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 240
                    echo "                                                        ";
                }
                // line 241
                echo "                                                    </select>
                                                </div>

                                            ";
            }
            // line 245
            echo "                                        </div>
                                    </div>
                                    <!-- productFilter -->


                                    <div class=\"color-details\">
                                        <button onclick=\"addArticleSize(";
            // line 251
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo ")\"
                                                class=\"  btn_card col-lg-6\" type=\"submit\"
                                                id=\"btn-panier\"
                                                data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                            <span class=\"add2cart\">
                                                <span class=\"btnspanadd\">";
            // line 256
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
            echo " <i class=\"fa fa-shopping-cart\"></i></span>

\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </button>

                                        <div class=\"col-lg-6 fich_technique\">
                                            ";
            // line 262
            if ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "file", [])) {
                // line 263
                echo "
                                                <a  target=\"_blank\"
                                                    href=\"";
                // line 265
                echo twig_escape_filter($this->env, ($context["legal_notice_directory"] ?? $this->getContext($context, "legal_notice_directory")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "file", []), "html", null, true);
                echo "\">
                                                    <svg _ngcontent-dxq-c64=\"\" height=\"20\" viewBox=\"0 0 512 512\" width=\"20\" xmlns=\"http://www.w3.org/2000/svg\"><g _ngcontent-dxq-c64=\"\" id=\"Solid\"><path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\" d=\"m239.029 384.97a24 24 0 0 0 33.942 0l90.509-90.509a24 24 0 0 0 0-33.941 24 24 0 0 0 -33.941 0l-49.539 49.539v-262.059a24 24 0 0 0 -48 0v262.059l-49.539-49.539a24 24 0 0 0 -33.941 0 24 24 0 0 0 0 33.941z\"></path><path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\" d=\"m464 232a24 24 0 0 0 -24 24v184h-368v-184a24 24 0 0 0 -48 0v192a40 40 0 0 0 40 40h384a40 40 0 0 0 40-40v-192a24 24 0 0 0 -24-24z\"></path></g></svg>
                                                    ";
                // line 267
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fiche Technique"), "html", null, true);
                echo "
                                                </a>
                                            ";
            }
            // line 270
            echo "
                                        </div>

                                    </div>

                                    <!--/.cart-actions-->

                                </div>
                                <!--/ right column end -->

                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            ";
        } else {
            // line 288
            echo "
                ";
            // line 295
            echo "            ";
            if (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "description", []) || $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "descriptionen", []))) {
                // line 296
                echo "
                <div class=\"quickview\" >
                    <a  class=\"btn btn-xs btn-quickview\" href=\"";
                // line 298
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_produits", ["produitid" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
                echo "\"
                    >";
                // line 299
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details"), "html", null, true);
                echo " </a>
                </div>
            ";
            }
            // line 302
            echo "
                <div class=\"modal fade\" id=\"productSetailsModalAjaxx";
            // line 303
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\"
                     aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"row transitionfx text-left\" style=\"padding: 30px;margin-right: 0px!important; margin-left: 0px;!important;\">
                                <div class=\"col-lg-12\">
                                    <button style=\"opacity: 1.2;margin-top: -21px;margin-right: -18px;background-color: #ffffff;/* color: #454545; */\" type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span style=\"color: #454545;\" aria-hidden=\"true\">×</span>
                                    </button></div>
                                <!-- left column -->
                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                    <!-- product Image and Zoom -->
                                    <div class=\"main-image sp-wrap col-lg-12 no-padding style3\" style=\"display: inline-block;\">



                                        <div class=\"sp-large\" style=\"overflow: hidden; height: auto; left: 0px; top: 0px;max-width: 100% !important\">
                                            <a href=\"\" class=\"\" style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                                <img id=\"imageproduit";
            // line 321
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo "\"
                                                     data-original=\"/uploads/produits/";
            // line 322
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []), "html", null, true);
            echo "\"
                                                     src=\"";
            // line 323
            if (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []) && ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []) != ""))) {
                echo "/uploads/produits/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []), "html", null, true);
                echo "
                                                         ";
            } else {
                // line 324
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
            }
            echo "\"
                                                     alt=\"";
            // line 325
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nom", []), "html", null, true);
            echo "\" class=\"img-responsive\" style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                            </a>
                                        </div>
                                    </div>


                                </div>
                                <!--/ left column end -->


                                <!-- right column -->
                                <div class=\"col-lg-8 col-md-6 col-sm-6\">
                                    <input type=\"text\" id=\"idproduit\" value=\"";
            // line 337
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo "\" hidden>

                                    <h1 class=\"product-title titleproduitt\">

                                        ";
            // line 341
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nomen", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nom", []), "html", null, true);
            }
            // line 342
            echo "
                                    </h1>

                                    <div class=\"description\" >
                                        ";
            // line 346
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "descriptionen", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "description", []), "html", null, true);
            }
            // line 347
            echo "
                                    </div>
                                    <div class=\"product-price\" style=\"font-size: 20px;\">
                                        <span class=\"price-sales price\">  ";
            // line 350
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "</span>
                                        ";
            // line 351
            if (($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "numProduitPromo", []) == 1))) {
                // line 352
                echo "                                            <span class=\"price-standard  old-price\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo " </span>
                                        ";
            } elseif ((($this->getAttribute($this->getAttribute(            // line 353
($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prixPromo", [])) && ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prixPromo", []) > 0))) {
                // line 354
                echo "                                            <span class=\"price-standard old-price\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "</span>
                                        ";
            }
            // line 356
            echo "                                    </div>

                                    ";
            // line 358
            if ((twig_length_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", [])) > 0)) {
                // line 359
                echo "
                                        <div class=\"color-details\">
                                            ";
                // line 361
                if (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []) && ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []) != ""))) {
                    // line 362
                    echo "                                                <img name='img' id='";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []), "html", null, true);
                    echo "'
                                                     style=\"width:  100px;height: 100px;background-size: contain;border-width: 2px; border-color: #ED0000;border-style: solid;\"
                                                     src=\"/uploads/produits/";
                    // line 364
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []), "html", null, true);
                    echo "\"
                                                     onclick=\"changeImage('";
                    // line 365
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo "')\"
                                                     alt=\"img\">
                                            ";
                }
                // line 368
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", []));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 369
                    echo "                                                ";
                    if (($this->getAttribute($context["c"], "image", []) && ($this->getAttribute($context["c"], "image", []) != ""))) {
                        // line 370
                        echo "
                                                    <img name='img' id='";
                        // line 371
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                        echo "'
                                                         style=\"    width:  100px;height: 100px;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                                         src=\"/uploads/produits/";
                        // line 373
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                        echo "\"
                                                         onclick=\"changeImage('";
                        // line 374
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                        echo "')\"
                                                         alt=\"img\">

                                                ";
                    }
                    // line 378
                    echo "
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 380
                echo "                                        </div>
                                        <div class=\"color-details\">
                                            <span class=\"selected-color selectedSpan\"><strong class=\"text_details\">";
                // line 382
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Couleurs"), "html", null, true);
                echo "</strong></span>
                                            <ul class=\"swatches Color\" name=\"couleur";
                // line 383
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                id=\"couleur";
                // line 384
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\">
                                                ";
                // line 385
                $context["i"] = 1;
                // line 386
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", []));
                foreach ($context['_seq'] as $context["_key"] => $context["couleur"]) {
                    // line 387
                    echo "                                                    ";
                    if ((($context["i"] ?? $this->getContext($context, "i")) == 1)) {
                        // line 388
                        echo "                                                        <li class=\"selected\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                        echo "\"
                                                            onclick=\"changeImagecouleur('";
                        // line 389
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "id", []), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "image", []), "html", null, true);
                        echo "')\">
                                                            <a style=\"background-color:";
                        // line 390
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                        echo ";color:transparent\"></a>
                                                        </li>
                                                    ";
                    } else {
                        // line 393
                        echo "                                                        <li value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                        echo "\"
                                                            onclick=\"changeImagecouleur('";
                        // line 394
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "id", []), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "image", []), "html", null, true);
                        echo "')\">
                                                            <a style=\"background-color:";
                        // line 395
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                        echo ";color:transparent\"></a>
                                                        </li>
                                                    ";
                    }
                    // line 398
                    echo "                                                    ";
                    $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                    // line 399
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couleur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 400
                echo "                                            </ul>
                                        </div>
                                    ";
            }
            // line 403
            echo "                                    <!--/.color-details-->

                                    <div class=\"color-details\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4 col-md-4 col-xs-6\" style=\"\">
                                                <span class=\"selected-color selectedSpan\"><strong class=\"text_details\">";
            // line 408
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantité"), "html", null, true);
            echo "</strong></span>
                                                ";
            // line 409
            if ((twig_length_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", [])) > 0)) {
                // line 410
                echo "
                                                    <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"deleteArticle";
                // line 413
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                                    onclick=\"moinsquantity(";
                // line 414
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo ")\"
                                                                    type=\"button\"
                                                                    class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                    style=\"background-color:#ED0000\" data-type=\"minus\"
                                                                    data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <input style=\"font-family: Roboto-Regular,sans-serif;font-size: 14px;font-weight: bold; height: 4.5rem;!important;\" type=\"text\"
                                                               id=\"quantitymodal";
                // line 423
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                               name=\"quantitymodal";
                // line 424
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                               class=\"form-control input-number text-center\" ";
                // line 425
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), [], "array", true, true)) {
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), [], "array"), "html", null, true);
                    echo "\" ";
                } else {
                    echo " value=\"1\" ";
                }
                // line 426
                echo "                                                               min=\"1\" max=\"100\" disabled>

                                                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button onclick=\"plusquantity(";
                // line 429
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo ")\"
                                                                    type=\"button\"
                                                                    class=\"quantity-right-plus btn btn-success btn-number btn_plus_moins\"
                                                                    style=\"background-color:#ED0000\" data-type=\"plus\"
                                                                    data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    </div>
                                                ";
            } else {
                // line 439
                echo "                                                    <div class=\"row\" id=\"quantite";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                         name=\"quantite";
                // line 440
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\" disabled=\"none\"  >

                                                        <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                                            <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle";
                // line 446
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                                        onclick=\"moinquantityD(";
                // line 447
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prix", []), "html", null, true);
                echo ")\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
                                                                    <span class=\"glyphicon glyphicon-minus\"></span>
                                                                </button>
                                                            </span>
                                                                <input style=\" height: 4.5rem;!important;\" type=\"text\"
                                                                       id=\"qte";
                // line 455
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                                       name=\"qte";
                // line 456
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                                       class=\"form-control input-number text-center\" ";
                // line 457
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), [], "array", true, true)) {
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), [], "array"), "html", null, true);
                    echo "\" ";
                } else {
                    echo " value=\"0\" ";
                }
                // line 458
                echo "                                                                       min=\"1\" max=\"100\" disabled>
                                                                <span class=\"input-group-btn\">
                                                                <button id=\"addArticlee";
                // line 460
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                                        onclick=\"plusquantityD(";
                // line 461
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "quantite", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "maxcommande", []), "html", null, true);
                echo ")\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"plus\" data-field=\"\">
                                                                    <span class=\"glyphicon glyphicon-plus\"></span>
                                                                </button>
                                                        </span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                ";
            }
            // line 474
            echo "                                            </div>
                                            ";
            // line 475
            if ((twig_length_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", [])) > 0)) {
                // line 476
                echo "
                                                <div class=\"col-lg-8 col-sm-6 col-xs-6\">
                                                    <span class=\"selected-color selectedSpan\"><strong class=\"text_details\">";
                // line 478
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Taille"), "html", null, true);
                echo "</strong></span>
                                                    <select class=\"form-control \" id=\"sizes";
                // line 479
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                            name=\"sizes";
                // line 480
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                            onchange=\"changeSize(";
                // line 481
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo ")\"
                                                            style=\"border-radius: 0px;height: 43px; font-family: Roboto-Regular,sans-serif\"  >
                                                        <option disabled  style=\" color:#374649;font-family: Roboto-Regular,sans-serif;font-size: 12px;font-weight: 400 \" selected>
                                                            ";
                // line 484
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir la taille"), "html", null, true);
                echo "</option>
                                                        ";
                // line 485
                if ((twig_length_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", [])) > 0)) {
                    // line 486
                    echo "                                                            ";
                    $context["i"] = 1;
                    // line 487
                    echo "                                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", []), "0", [], "array"), "sizes", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                        // line 488
                        echo "                                                                ";
                        if ((($context["i"] ?? $this->getContext($context, "i")) == 1)) {
                            // line 489
                            echo "                                                                    <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo "\"
                                                                            selected>";
                            // line 490
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                            echo "</option>
                                                                ";
                        } else {
                            // line 492
                            echo "                                                                    <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                            echo "</option>

                                                                ";
                        }
                        // line 495
                        echo "                                                                ";
                        $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                        // line 496
                        echo "
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 498
                    echo "                                                        ";
                }
                // line 499
                echo "                                                    </select>
                                                </div>

                                            ";
            }
            // line 503
            echo "                                        </div>
                                    </div>
                                    <!-- productFilter -->


                                    <div class=\"color-details\">
                                        ";
            // line 509
            if ((twig_length_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", [])) > 0)) {
                // line 510
                echo "
                                        <button onclick=\"addArticleSize(";
                // line 511
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo ")\"
                                                class=\"  btn_card col-lg-6\" type=\"submit\"
                                                id=\"btn-panier\"
                                                data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                            <span class=\"add2cart\">
                                                <span class=\"btnspanadd\">";
                // line 516
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                echo " <i class=\"fa fa-shopping-cart\"></i></span>

\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </button>
                                        ";
            } else {
                // line 521
                echo "                                            <button onclick=\"addArticlee(";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "quantite", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "maxcommande", []), "html", null, true);
                echo ")\"
                                                    class=\"  btn_card col-lg-6\" type=\"submit\"
                                                    id=\"addArticlee";
                // line 523
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                            <span class=\"add2cart\">
                                                <span class=\"btnspanadd\">";
                // line 526
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                echo " <i class=\"fa fa-shopping-cart\"></i></span>

\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </button>
                                        ";
            }
            // line 531
            echo "                                        <div class=\"col-lg-6 fich_technique\">
                                            ";
            // line 532
            if ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "file", [])) {
                // line 533
                echo "
                                                <a  target=\"_blank\"
                                                    href=\"";
                // line 535
                echo twig_escape_filter($this->env, ($context["legal_notice_directory"] ?? $this->getContext($context, "legal_notice_directory")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "file", []), "html", null, true);
                echo "\">
                                                    <svg _ngcontent-dxq-c64=\"\" height=\"20\" viewBox=\"0 0 512 512\" width=\"20\" xmlns=\"http://www.w3.org/2000/svg\"><g _ngcontent-dxq-c64=\"\" id=\"Solid\"><path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\" d=\"m239.029 384.97a24 24 0 0 0 33.942 0l90.509-90.509a24 24 0 0 0 0-33.941 24 24 0 0 0 -33.941 0l-49.539 49.539v-262.059a24 24 0 0 0 -48 0v262.059l-49.539-49.539a24 24 0 0 0 -33.941 0 24 24 0 0 0 0 33.941z\"></path><path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\" d=\"m464 232a24 24 0 0 0 -24 24v184h-368v-184a24 24 0 0 0 -48 0v192a40 40 0 0 0 40 40h384a40 40 0 0 0 40-40v-192a24 24 0 0 0 -24-24z\"></path></g></svg>
                                                    ";
                // line 537
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fiche Technique"), "html", null, true);
                echo "
                                                </a>
                                            ";
            }
            // line 540
            echo "
                                        </div>

                                    </div>

                                    <!--/.cart-actions-->

                                </div>
                                <!--/ right column end -->

                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>


                <div class=\"modal fade\" id=\"modal-quantity-max";
            // line 558
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\"
                     aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\" style=\"background: #df0c36;\">
                                <h4 class=\"modal-title text-left\" id=\"exampleModalLongTitle\" style=\"margin-top: 11px;\">

                                </h4>
                                <button style=\"opacity: 1.2;margin-top: -26px;margin-right: -10px;background-color: #df0c36\"
                                        type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body text-center\">
                                <h3>

                                    ";
            // line 574
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pouvez_commander_au_max"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "maxcommande", []), "html", null, true);
            echo "
                                    ";
            // line 575
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nomen", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nom", []), "html", null, true);
            }
            // line 576
            echo "                                </h3>



                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                ";
            // line 600
            echo "


                <div class=\"modal fade\" id=\"modal-panier";
            // line 603
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\"
                     aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\" style=\"z-index:1062 !important\" >
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\" style=\"background: #ED0000;\">
                                <h4 class=\"modal-title\" id=\"exampleModalLongTitle\" style=\"margin-top: 11px;\">";
            // line 608
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
            echo " <i class=\"fa fa-shopping-cart\"></i>
                                </h4>
                                <button style=\"opacity: 1.2;margin-top: -36px;margin-right: -10px;background-color: #ED0000\"
                                        type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body text-center\">
                                ";
            // line 620
            echo "
                                <h3>";
            // line 621
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("quantite_demander_indispo"), "html", null, true);
            echo "
                                    ";
            // line 622
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nomen", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nom", []), "html", null, true);
            }
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("est"), "html", null, true);
            echo " <span id=\"idinputtwo";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo "\">  </span>  </h3>

                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                ";
            // line 642
            echo "


            ";
        }
        // line 646
        echo "

            <img style=\" width: 100%;height:100%!important;max-height: 300px;min-height:300px;object-fit: contain  !important;border-top-left-radius: 10px;border-top-right-radius: 10px\"
                 id=\"img";
        // line 649
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
        echo "\" data-original=\"
              ";
        // line 650
        if (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []) && ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []) != ""))) {
            // line 651
            echo "    /uploads/produits/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []), "html", null, true);
            echo "
";
        } elseif ((($this->getAttribute(        // line 652
($context["produit"] ?? $this->getContext($context, "produit")), "sousCategorie", []) && $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sousCategorie", []), "image", [])) && ($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sousCategorie", []), "image", []) != ""))) {
            // line 653
            echo "    /uploads/produits/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sousCategorie", []), "image", []), "html", null, true);
            echo "
";
        } else {
            // line 655
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
            echo "
";
        }
        // line 656
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
        echo "\"
                 alt=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nom", []), "html", null, true);
        echo "\" class=\"img-responsive lazy\">
            ";
        // line 658
        if (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "quantite", []) > 0)) {
            // line 659
            echo "                ";
            if ((($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prixPromo", [])) && ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prixPromo", []) > 0))) {
                // line 660
                echo "                    <div class=\"promotion\">
                        <span class=\"discount\" style=\"    font-weight: 400;\">";
                // line 661
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion"), "html", null, true);
                echo "</span>
                    </div>
                ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 663
($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "numProduitPromo", []) == 1))) {
                // line 664
                echo "                    <div class=\"promotion\">
\t\t\t\t\t\t<span class=\"discount\" style=\"    font-weight: 400;\">";
                // line 665
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion"), "html", null, true);
                echo "
                            ";
                // line 666
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "percentage", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
                echo "%
\t\t\t\t\t\t</span>
                    </div>
                ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 669
($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "numProduitPromo", []) > 1))) {
                // line 670
                echo "                    <div class=\"promotion\">
\t\t\t\t\t\t<span class=\"discount\" style=\"    font-weight: 400;\">
\t\t\t\t\t\t\t";
                // line 672
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "percentage", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
                echo "% ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sur le"), "html", null, true);
                echo "
                            ";
                // line 673
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "numProduitPromo", []), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ème produit"), "html", null, true);
                echo "
\t\t\t\t\t\t</span>
                    </div>
                ";
            }
            // line 677
            echo "            ";
        } else {
            // line 678
            echo "                <div class=\"promotion\">
\t\t\t\t\t<span class=\"horsstock\" style=\"    font-weight: 400;\">
\t\t\t\t\t\t";
            // line 680
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("En rupture de stock"), "html", null, true);
            echo "
\t\t\t\t\t</span>
                </div>
            ";
        }
        // line 684
        echo "        </div>

        <div style=\"height: 30%;position: relative\">
            <div class=\"line_gradient\"></div>

            <div class=\"col-lg-12 description\">
\t\t\t    <span class=\"\">
                                    ";
        // line 691
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nomen", []), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nom", []), "html", null, true);
        }
        // line 692
        echo "
\t\t\t\t</span>
            </div>
            ";
        // line 715
        echo "

            <div class=\"row\" style=\"position: absolute;  bottom: 10px;left: 15px;right: 0\">
                <div class=\"col-lg-6 col-md-6 col-xs-6 col-sm-6 text-left\">
                    <div class=\"price\">

                        ";
        // line 721
        if ((($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prixPromo", [])) && ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prixPromo", []) > 0))) {
            // line 722
            echo "                            <span class=\"old-price\">
\t\t\t\t\t\t\t";
            // line 723
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "
\t\t\t\t\t\t</span>
                        ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 725
($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "numProduitPromo", []) == 1))) {
            // line 726
            echo "                            <span class=\"old-price\">
\t\t\t\t\t\t\t";
            // line 727
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "
\t\t\t\t\t\t</span>
                        ";
        }
        // line 730
        echo "                        <br>
                        <span>
\t\t\t\t";
        // line 732
        echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
        echo "
\t\t\t</span>

                    </div>
                </div>

                <div class=\"div_card col-lg-6 col-md-6 col-xs-6 col-sm-6 text-right\"
                     style=\"margin-top: 6px;padding-right: 23px;\">
                    <div class=\"row\" style=\"padding: 0px 4px 4px;\" id=\"quantitee";
        // line 740
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
        echo "\"
                         name=\"quantitee";
        // line 741
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
        echo "\"  hidden>

                        <div class=\"col-lg-12 col-md-12 col-xs-12\">
                            <div class=\"input-group \"   style=\"width: 104px;float: right;\">
\t\t\t\t\t\t\t    <span class=\"input-group-btn \" >
\t\t\t\t\t\t\t\t<button id=\"deleteArticle";
        // line 746
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
        echo "\"
                                        onclick=\"deleteArticleQuantity(";
        // line 747
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prix", []), "html", null, true);
        echo ")\"
                                        type=\"button\"
                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                        data-type=\"minus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t    </span>
                                <input style=\"font-weight: bold;font-family: Roboto-Regular,sans-serif\" type=\"text\"
                                       id=\"qte";
        // line 755
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
        echo "\" name=\"qte";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
        echo "\"
                                       class=\"form-control input-number text-center\" ";
        // line 756
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), [], "array", true, true)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), [], "array"), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"0\" ";
        }
        // line 757
        echo "                                       min=\"1\" max=\"100\" disabled>
                                <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t      <button id=\"addArticle";
        // line 759
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
        echo "\"
                                              onclick=\"addArticle(";
        // line 760
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "quantite", []), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "maxcommande", []), "html", null, true);
        echo ")\"
                                              type=\"button\"
                                              class=\"quantity-right-plus btn btn-danger btn-number btn_plus_moins\"
                                              data-type=\"plus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t             \t</span>
                            </div>
                        </div>


                    </div>
                    <div id=\"addcart";
        // line 772
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
        echo "\" name=\"addcart";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
        echo "\">
                        ";
        // line 773
        if (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "quantite", []) == 0)) {
            // line 774
            echo "                            <button disabled type=\"button\" class=\"btn_card\"
                                    style=\"background-color: #8c8586;color: white;border: 1px solid #8c8586;padding: 0 0;height: 43px;width: 43px;margin-bottom: 8px;\"
                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> ";
            // line 776
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Chargement"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<span class=\"add2cart btnspanadd\" style=\"color:#8c8586;\">
\t\t\t\t\t\t\t\t";
            // line 778
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
            echo " <i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t</span>
                            </button>
                        ";
        } else {
            // line 782
            echo "

                        ";
            // line 784
            if ((twig_length_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", [])) > 0)) {
                // line 785
                echo "
                            <a class=\" btn_card\" style=\"padding-top: 15px; padding-bottom: 15px;\"
                               href=\"";
                // line 787
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_produits", ["produitid" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
                echo "\"  >
                                                         <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> ";
                // line 789
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                echo " <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                            </a>

                        ";
            } else {
                // line 795
                echo "
                            <button type=\"submit\" class=\"btn_card\"
                                    ";
                // line 807
                echo "
                                    id=\"btn-panier";
                // line 808
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo "\"
                                    onclick=\"enabledivquantity(";
                // line 809
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "quantite", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "maxcommande", []), "html", null, true);
                echo ", this)\"

                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> ";
                // line 811
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Chargement"), "html", null, true);
                echo "\">
                                                        <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\">";
                // line 813
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                echo " <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                            </button>


                        ";
            }
            // line 820
            echo "                        ";
        }
        // line 821
        echo "                    </div>

                </div>
            </div>
            <!--<div class=\"price\"><span style=\"color:#df0c36; font-size: 22px;font-family: 'Open Sans', sans-serif;\"><b>";
        // line 825
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prix", []), "html", null, true);
        echo " dt</b></span></div>-->

        </div>


    </div>

    <!-- Modal -->


    <div class=\"modal fade\" id=\"myModal\"
         role=\"dialog\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"background: #ED0000;\">
                    <h2 class=\"modal-title text-left\" id=\"exampleModalLongTitle\" style=\"margin-top: 5px\">

                    </h2>
                    <button style=\"opacity: 1.2;margin-top: -26px;margin-right: -10px;background-color: #ED0000\"
                            type=\"button\" class=\" close\" data-dismiss=\"modal\"
                            aria-label=\"Close\">
                        <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body text-center\">
                    <h3>
                        ";
        // line 851
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fav_alert"), "html", null, true);
        echo "
                    </h3>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>



</div>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>

<script>
    function changeCouleur(id) {
    }
    function addfavnonConnect() {
        \$(\"#myModal\").modal({backdrop: true});


    }

    \$('#couleur').on('click', 'li', function () {
        \$(this).addClass(\"selected\"); // Assign the class here
        //   var value = \$('#couleur').val();
        var value = \$(this).attr('value');
        var produit = parseInt(\$(\"#idproduit\").val());
        \$.ajax({
            url: \"";
        // line 880
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("getSizeCouleur");
        echo "\",
            dataType: 'Json',
            data: {\"couleurid\": value, \"produitid\": produit},
            type: 'GET',
            success: function (data) {
                var nameselect = \"sizes\" + produit
                \$('select[name=nameselect]').empty();
                if (data[0]) {
                    student = data[0];
                    \$('select[name=nameselect]').append('<option selected value=\"' + student['id'] + '\">' + student['libelle'] + '</option>');

                }

                for (i = 1; i < data.length; i++) {
                    student = data[i];
                    \$('select[name=\"sizes').append('<option  value=\"' + student['id'] + '\">' + student['libelle'] + '</option>');
                }
                ;
                //\t\$(\"#quantitymodal\" + produit).val(1);
            }
        });
    });

    function changeImagecouleur(produitid, couleurid, image) {
        if (image) {
            changeImage(image, produitid)
        }
        var produit = parseInt(produitid);
        var couleur = parseInt(couleurid);
        \$(\"#quantitymodal\"+produitid).val(1);//rahma addd to

        \$.ajax({
            url: \"";
        // line 912
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("getSizeCouleur");
        echo "\",
            dataType: 'Json',
            data: {\"couleurid\": couleur, \"produitid\": produit},
            type: 'GET',
            success: function (data) {
                var nameselect = \"sizes\" + produitid
                \$('select[name=' + nameselect + ']').empty();

                if (data[0]) {
                    size = data[0];
                    \$('select[name=' + nameselect + ']').append('<option selected value=\"' + size['id'] + '\">' + size['libelle'] + '</option>');
                }

                for (i = 1; i < data.length; i++) {
                    size = data[i];
                    \$('select[name=' + nameselect + ']').append('<option  value=\"' + size['id'] + '\">' + size['libelle'] + '</option>');
                }
                ;
                //\t\$(\"#quantitymodal\" + produit).val(1);
            }
        });

    }

    function changeImage(image, id) {

        document.getElementById(\"imageproduit\" + id).src = '/uploads/produits/' + image;
        var images = document.getElementsByName(\"img\");
        for (i in images) {
            images[i].style = 'width: 100px;\\n' +
                '    height: 100px;\\n' +
                '    background-size: cover;\\n' +
                '    border-width: 2px;\\n' +
                '    border-color: #dcdbdb;\\n' +
                '    border-style: solid;';
        }
        document.getElementById(image).style = 'width: 100px;\\n' +
            '    height: 100px;\\n' +
            '    background-size: cover;\\n' +
            '    border-width: 2px;\\n' +
            '    border-color: #df0c36;\\n' +
            '    border-style: solid;';

    }
</script>
<script>
    function addArticleSize(id) {
        var selectsizes = document.getElementById(\"sizes\" + id);
        var sizeid = selectsizes.options[selectsizes.selectedIndex].value;
        var qte = parseInt(\$(\"#quantitymodal\" + id).val());
        \$.ajax({
            url: \"";
        // line 963
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("size_from_id");
        echo "\",
            dataType: 'Json',
            data: {\"sizeid\": sizeid},
            type: 'GET',
            success: function (data) {
                console.log(data);
                console.log(qte);
                var quantite = data
                if ((quantite !== null) && (qte > quantite)) {
                    //alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                    document.getElementById(\"idinputtwo\"+id).innerHTML = quantite;

                    \$(\"document\").ready(function () {
                      //was  \$('#modal-panier'+id).modal({backdrop: 'static', keyboard: false});
                        \$('#modal-panier' + id).modal(\"show\");
                    })
                } else if ((quantite !== null) && (qte < quantite)) {
                    addArticlewithsize(id, sizeid, qte);
                    \$('#productSetailsModalAjax'+id).modal('hide');

                }

            }
        });

    }

    function changeSize(id) {
        //\$(\"#quantitymodal\" + id).val(1);
    }

    function enabledivquantity(id, quantite, max, el) {
        var qte = parseInt(\$(\"#qte\" + id).val());
        if (qte + 1 > quantite) {

           // alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
            document.getElementById(\"idinputtwo\"+id).innerHTML = quantite;

            \$(\"document\").ready(function () {
              //was  \$('#modal-panier'+id).modal({backdrop: 'static', keyboard: false});

                \$('#modal-panier' + id).modal(\"show\");
            })
        } else if (qte + 1 > max) {
            \$(\"document\").ready(function () {
              //was  \$('#modal-quantity-max' + id).modal({backdrop: 'static', keyboard: false});

                \$('#modal-quantity-max'+id).modal(\"show\");

            })
        } else if (qte >= 0) {
            var quantity = document.getElementById(\"quantitee\" + id);
            console.log(\"ffff\");
            console.log(quantity);
        //    document.getElementById(\"quantite\"+id).style.display = 'block';

            //var quantity = \$(el).parent().parent().find(\"#quantite\" + id);
            var btncart = el;
            quantity.style.display = \"block\";
            btncart.style.display = \"none\";
            addArticle(id, quantite, max);
        }
    }

    function plusquantity(id) {
        var selectsizes = document.getElementById(\"sizes\" + id);
        var sizeid = selectsizes.options[selectsizes.selectedIndex].value;
        var qte = parseInt(\$(\"#quantitymodal\" + id).val()) + 1 ;
        //alert(qte);

        \$.ajax({
            url: \"";
        // line 1034
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("size_from_id");
        echo "\",
            dataType: 'Json',
            data: {\"sizeid\": sizeid},
            type: 'GET',
            success: function (data) {
                var quantite = data;
                var qtee = parseInt(\$(\"#quantitymodal\" + id).val())+1  ;

                if (qtee  > quantite) {

                    //  alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                    document.getElementById(\"idinputtwo\"+id).innerHTML = quantite;

                    \$(\"document\").ready(function () {

                      //was  \$('#modal-panier' + id).modal({backdrop: 'static', keyboard: false});


                        \$('#modal-panier' + id).modal(\"show\");
                    })


                } else {
                    var qte = parseInt(\$(\"#quantitymodal\" + id).val()) + 1;
                    var qte_input = document.querySelectorAll(\"[id=quantitymodal\" + id+\"]\");
                    for(var i = 0; i < qte_input.length; i++){
                        qte_input[i].value = qte;
                    }
                }

            }
        });

      /*  var qte = parseInt(\$(\"#quantitymodal\" + id).val()) + 1;
        \$(\"#quantitymodal\" + id).val(qte);*/


    }
   /* function plusquantityD(id,quantite,max) {

        var qte = parseInt(\$(\"#qte\" + id).val()) + 1;
             if (qte===1){
            console.log(\"qte\");
            console.log(qte);
            \$(\"#qte\" + id).val(0);

            addArticle(id, quantite, max);

        }else {
            console.log(\"qtesecond\");
            console.log(qte);

        }
      //  \$(\"#qte\" + id).val(qte);

        if (qte===1){
            console.log(\"qte\");
            console.log(qte);
            \$(\"#qte\" + id).val(0);

            addArticle(id, quantite, max);

        }else {
            console.log(\"qtesecond\");
            console.log(qte);

        }



    }*/

    function moinsquantity(id) {
        var qte = parseInt(\$(\"#quantitymodal\" + id).val()) - 1;
        if (qte > 0) {
            \$(\"#quantitymodal\" + id).val(qte);

        } else {

            \$(\"document\").ready(function () {
              //was  \$('#modal-quantity').modal({backdrop: 'static', keyboard: false});
                \$('#modal-quantity').modal(\"show\");
            })

        }
    }




    <!-- ---- -->

    function plusquantityD(id,quantity,max) {

        var qte = parseInt(\$(\"#qte\" + id).val()) + 1;



        if(qte  > quantity  ){

         //   alert(\"Vous ne pouvez commander que \" +quantity+\" produit\" )
            document.getElementById(\"idinputtwo\"+id).innerHTML = quantity;

               \$(\"document\").ready(function () {
                  //was \$('#modal-panier'+id).modal({backdrop: 'static',keyboard: false  });

                   \$('#modal-panier' + id).modal(\"show\");
                   //  \$('select').select2();
               })
        }
        else if (qte > max) {
            \$(\"document\").ready(function () {
              //was  \$('#modal-quantity-max'+id).modal({  backdrop: 'static',     keyboard: false});
                \$('#modal-quantity-max'+id).modal(\"show\");

            })
        }else{
            var qte_input = document.querySelectorAll(\"[id=qte\" + id+\"]\");

            for(var i = 0; i < qte_input.length; i++){
                qte_input[i].value = qte;
            }
        }

    }

    function moinquantityD(id) {

        var qte = parseInt(\$(\"#qte\" + id).val()) -1;
        //  \$(\"#qte\" + id).val(qte);
        var qte_input = document.querySelectorAll(\"[id=qte\" + id+\"]\");

        if (qte > 0) {
            for(var i = 0; i < qte_input.length; i++){
                qte_input[i].value = qte;
            }
        } else {
            \$(\"document\").ready(function () {
             //   \$('#modal-quantity').modal({backdrop: 'static', keyboard: false});
                \$('#modal-quantity').modal(\"show\");

            })

        }
    }

    function addArticlee(id, quantity,max) {
        var qte = parseInt(  \$(\"#qte\"+id).val());
        var qte_input = document.querySelectorAll(\"[id=qte\" + id+\"]\");



        if(qte  > quantity  ){

          //  alert(\"Vous ne pouvez commander que \" +quantity+\" produit\" )
            document.getElementById(\"idinputtwo\"+id).innerHTML = quantity;

             \$(\"document\").ready(function () {
               //  \$('#modal-panier'+id).modal({  backdrop: 'static',  keyboard: false        });

                 \$('#modal-panier' + id).modal(\"show\");
                 //  \$('select').select2();
             })
        }
        else if (qte > max) {
            \$(\"document\").ready(function () {
                //was\$('#modal-quantity-max'+id).modal({  backdrop: 'static',  keyboard: false});

                \$('#modal-quantity-max'+id).modal(\"show\");

            })
        } else {


            for(var i = 0; i < qte_input.length; i++){
                qte_input[i].value = qte ;
            }

            //   alert(\"qtettee\"+qte)

            var \$this = \$(\"#addArticlee\"+id);
            \$.ajax({
                url: Routing.generate('add_many_quantity_to_cart', {id: id,qte:qte}), success: function (result) {
                    \$(\".my_nav_bar\").html(result);
                    \$(\".total_price_cart_empty\").html(\$(\".total_price_cart\").html());
                    \$(\"img.lazy\").lazyload({
                        threshold : 50
                    });
                    \$(window).load(function(){
                        \$(\"html,body\").trigger(\"scroll\");
                    });
                    \$this.button('reset');
                    //hide modal after add to cart
                    \$('#productSetailsModalAjax'+id).modal('hide');


                }
            });



        }
    }

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Partial:produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1895 => 1034,  1821 => 963,  1767 => 912,  1732 => 880,  1700 => 851,  1671 => 825,  1665 => 821,  1662 => 820,  1652 => 813,  1647 => 811,  1638 => 809,  1634 => 808,  1631 => 807,  1627 => 795,  1618 => 789,  1613 => 787,  1609 => 785,  1607 => 784,  1603 => 782,  1596 => 778,  1591 => 776,  1587 => 774,  1585 => 773,  1579 => 772,  1560 => 760,  1556 => 759,  1552 => 757,  1544 => 756,  1538 => 755,  1525 => 747,  1521 => 746,  1513 => 741,  1509 => 740,  1498 => 732,  1494 => 730,  1488 => 727,  1485 => 726,  1483 => 725,  1478 => 723,  1475 => 722,  1473 => 721,  1465 => 715,  1460 => 692,  1454 => 691,  1445 => 684,  1438 => 680,  1434 => 678,  1431 => 677,  1423 => 673,  1417 => 672,  1413 => 670,  1411 => 669,  1405 => 666,  1401 => 665,  1398 => 664,  1396 => 663,  1391 => 661,  1388 => 660,  1385 => 659,  1383 => 658,  1379 => 657,  1374 => 656,  1368 => 655,  1362 => 653,  1360 => 652,  1355 => 651,  1353 => 650,  1349 => 649,  1344 => 646,  1338 => 642,  1318 => 622,  1314 => 621,  1311 => 620,  1300 => 608,  1292 => 603,  1287 => 600,  1274 => 576,  1268 => 575,  1263 => 574,  1244 => 558,  1224 => 540,  1218 => 537,  1211 => 535,  1207 => 533,  1205 => 532,  1202 => 531,  1194 => 526,  1188 => 523,  1178 => 521,  1170 => 516,  1162 => 511,  1159 => 510,  1157 => 509,  1149 => 503,  1143 => 499,  1140 => 498,  1133 => 496,  1130 => 495,  1121 => 492,  1116 => 490,  1111 => 489,  1108 => 488,  1103 => 487,  1100 => 486,  1098 => 485,  1094 => 484,  1088 => 481,  1084 => 480,  1080 => 479,  1076 => 478,  1072 => 476,  1070 => 475,  1067 => 474,  1047 => 461,  1043 => 460,  1039 => 458,  1031 => 457,  1027 => 456,  1023 => 455,  1010 => 447,  1006 => 446,  997 => 440,  992 => 439,  979 => 429,  974 => 426,  966 => 425,  962 => 424,  958 => 423,  946 => 414,  942 => 413,  937 => 410,  935 => 409,  931 => 408,  924 => 403,  919 => 400,  913 => 399,  910 => 398,  904 => 395,  896 => 394,  891 => 393,  885 => 390,  877 => 389,  872 => 388,  869 => 387,  864 => 386,  862 => 385,  858 => 384,  854 => 383,  850 => 382,  846 => 380,  839 => 378,  830 => 374,  826 => 373,  821 => 371,  818 => 370,  815 => 369,  810 => 368,  802 => 365,  798 => 364,  792 => 362,  790 => 361,  786 => 359,  784 => 358,  780 => 356,  774 => 354,  772 => 353,  767 => 352,  765 => 351,  761 => 350,  756 => 347,  750 => 346,  744 => 342,  738 => 341,  731 => 337,  716 => 325,  711 => 324,  704 => 323,  700 => 322,  696 => 321,  675 => 303,  672 => 302,  666 => 299,  662 => 298,  658 => 296,  655 => 295,  652 => 288,  632 => 270,  626 => 267,  619 => 265,  615 => 263,  613 => 262,  604 => 256,  596 => 251,  588 => 245,  582 => 241,  579 => 240,  572 => 238,  569 => 237,  560 => 234,  555 => 232,  550 => 231,  547 => 230,  542 => 229,  539 => 228,  537 => 227,  533 => 226,  527 => 223,  523 => 222,  519 => 221,  515 => 220,  511 => 218,  509 => 217,  505 => 215,  485 => 202,  481 => 201,  477 => 199,  469 => 198,  465 => 197,  461 => 196,  448 => 188,  444 => 187,  435 => 181,  430 => 180,  416 => 169,  411 => 166,  403 => 165,  399 => 164,  395 => 163,  383 => 154,  379 => 153,  375 => 151,  373 => 150,  367 => 147,  360 => 142,  355 => 139,  349 => 138,  346 => 137,  340 => 134,  332 => 133,  327 => 132,  321 => 129,  313 => 128,  308 => 127,  305 => 126,  300 => 125,  298 => 124,  294 => 123,  290 => 122,  286 => 121,  282 => 119,  275 => 117,  266 => 113,  262 => 112,  257 => 110,  254 => 109,  251 => 108,  246 => 107,  238 => 104,  234 => 103,  228 => 101,  226 => 100,  222 => 98,  220 => 97,  216 => 95,  210 => 93,  208 => 92,  203 => 91,  201 => 90,  197 => 89,  192 => 86,  186 => 85,  180 => 81,  174 => 80,  167 => 76,  152 => 64,  147 => 63,  140 => 62,  136 => 61,  132 => 60,  111 => 42,  107 => 40,  101 => 37,  97 => 36,  93 => 34,  91 => 33,  87 => 31,  84 => 23,  82 => 22,  66 => 13,  61 => 12,  57 => 11,  54 => 10,  48 => 8,  46 => 7,  40 => 5,  38 => 4,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\" item col-sm-4 col-lg-3 col-md-4 col-xs-12\" style=\"margin-top: 15px;\">
    <div class=\"product\">

        <a       {% if app.user %}
                   onclick=\"addfavoris({{ produit.id }})\"
                {% else %}
                    {#onclick=\"addfavnonConnect()\"#}
                    href=\"{{ path(\"fos_user_security_login\",{'produitid':produit.id})}}\"
                {% endif %}
                class=\"add-fav tooltipHere
\t\t\t                        {% for favoris in favoris %}
\t\t\t                        {% if  favoris.utilisateur == app.user and favoris.produit == produit %} active {% endif %}
\t\t\t                        {% endfor %}\" data-placement=\"left\">
            <i class=\"glyphicon glyphicon-heart\"></i>
        </a>

        <div class=\"image\" style=\"height: 70%!important;width: 100%\">



            <!-- /.modaldetails -->
            {% if produit.couleurs|length > 0 %}

                {#

                 <div class=\"quickview\">
                    <a data-toggle=\"modal\" class=\"btn btn-xs btn-quickview\"
                       data-target=\"#productSetailsModalAjax{{ produit.id }}\">{{ \"Details\"|trans }} </a>
                </div>
               #}


            {% if produit.description or produit.descriptionen %}

                <div class=\"quickview\" >
                    <a  class=\"btn btn-xs btn-quickview\" href=\"{{ path(\"detail_produits\",{'produitid':produit.id}) }}\"
                    >{{ \"Details\" | trans }} </a>
                </div>
                {% endif %}

                <!-- Modal -->
                <div class=\"modal fade\" id=\"productSetailsModalAjaxx{{ produit.id }}\" tabindex=\"-1\" role=\"dialog\"
                     aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"row transitionfx text-left\" style=\"padding: 30px;margin-right: 0px!important; margin-left: 0px;!important;\">
                                <div class=\"col-lg-12\">
                                    <button style=\"opacity: 1.2;margin-top: -21px;margin-right: -18px;background-color: #ffffff;/* color: #454545; */\" type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span style=\"color: #454545;\" aria-hidden=\"true\">×</span>
                                    </button></div>
                                <!-- left column -->
                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                    <!-- product Image and Zoom -->
                                    <div class=\"main-image sp-wrap col-lg-12 no-padding style3\" style=\"display: inline-block;\">



                                        <div class=\"sp-large\" style=\"overflow: hidden; height: auto; left: 0px; top: 0px;max-width: 100% !important\">
                                            <a href=\"\" class=\"\" style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                                <img id=\"imageproduit{{ produit.id }}\"
                                                     data-original=\"/uploads/produits/{{ produit.image }}\"
                                                     src=\"{% if produit.image and produit.image != \"\" %}/uploads/produits/{{ produit.image }}
                                                           {% else %}{{ asset('/assets/img/default_t_e.jpg') }}{% endif %}\"
                                                     alt=\"{{ produit.nom }}\" class=\"img-responsive\" style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                            </a>
                                        </div>
                                    </div>


                                </div>
                                <!--/ left column end -->


                                <!-- right column -->
                                <div class=\"col-lg-8 col-md-6 col-sm-6\">
                                    <input type=\"text\" id=\"idproduit\" value=\"{{ produit.id }}\" hidden>

                                    <h1 class=\"product-title titleproduitt\">

                                        {% if app.request.getLocale()  == 'en' %}{{ produit.nomen }}{% else %}{{ produit.nom }}{% endif %}

                                    </h1>

                                    <div class=\"description\" >
                                        {% if app.request.getLocale()  == 'en' %}{{ produit.descriptionen }}{% else %}{{ produit.description }}{% endif %}

                                    </div>
                                    <div class=\"product-price\" style=\"font-size: 20px;\">
                                        <span class=\"price-sales price\">  {{ formated_price( produit.finalPrice[\"prix\"],app.session.get(\"pays\"))}}</span>
                                        {% if produit.finalPrice[\"is_promo\"] and produit.numProduitPromo == 1 %}
                                            <span class=\"price-standard  old-price\" > {{ formated_price( produit.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}} </span>
                                        {% elseif produit.finalPrice[\"is_promo\"] and produit.prixPromo and produit.prixPromo > 0 %}
                                            <span class=\"price-standard old-price\"> {{ formated_price( produit.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}}</span>
                                        {% endif %}
                                    </div>

                                    {% if produit.couleurs|length>0 %}

                                        <div class=\"color-details\">
                                            {% if produit.image and produit.image != \"\" %}
                                                <img name='img' id='{{ produit.image }}'
                                                     style=\"width:  100px;height: 100px;background-size: contain;border-width: 2px; border-color: #ED0000;border-style: solid;\"
                                                     src=\"/uploads/produits/{{ produit.image }}\"
                                                     onclick=\"changeImage('{{ produit.image }}','{{ produit.id }}')\"
                                                     alt=\"img\">
                                            {% endif %}
                                            {% for c in produit.couleurs %}
                                                {% if c.image and c.image != \"\" %}

                                                    <img name='img' id='{{ c.image }}'
                                                         style=\"    width:  100px;height: 100px;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                                         src=\"/uploads/produits/{{ c.image }}\"
                                                         onclick=\"changeImage('{{ c.image }}','{{ produit.id }}')\"
                                                         alt=\"img\">

                                                {% endif %}

                                            {% endfor %}
                                        </div>
                                        <div class=\"color-details\">
                                            <span class=\"selected-color selectedSpan\"><strong class=\"text_details\">{{ \"Couleurs\" | trans }}</strong></span>
                                            <ul class=\"swatches Color\" name=\"couleur{{ produit.id }}\"
                                                id=\"couleur{{ produit.id }}\">
                                                {% set i = 1 %}
                                                {% for couleur in produit.couleurs %}
                                                    {% if i == 1 %}
                                                        <li class=\"selected\" value=\"{{ couleur.codeCouleur }}\"
                                                            onclick=\"changeImagecouleur('{{ produit.id }}','{{ couleur.id }}','{{ couleur.image }}')\">
                                                            <a style=\"background-color:{{ couleur.codeCouleur }};color:transparent\"></a>
                                                        </li>
                                                    {% else %}
                                                        <li value=\"{{ couleur.codeCouleur }}\"
                                                            onclick=\"changeImagecouleur('{{ produit.id }}','{{ couleur.id }}','{{ couleur.image }}')\">
                                                            <a style=\"background-color:{{ couleur.codeCouleur }};color:transparent\"></a>
                                                        </li>
                                                    {% endif %}
                                                    {% set i = i+1 %}
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                    <!--/.color-details-->

                                    <div class=\"color-details\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4 col-md-4 col-xs-6\" style=\"\">
                                                <span class=\"selected-color selectedSpan\"><strong class=\"text_details\">{{\"Quantité\" | trans}}</strong></span>


                                                {% if produit.couleurs|length>0 %}
                                                    <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"deleteArticle{{ produit.id }}\"
                                                                    onclick=\"moinsquantity({{ produit.id }})\"
                                                                    type=\"button\"
                                                                    class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                    style=\"background-color:#ED0000\" data-type=\"minus\"
                                                                    data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <input style=\"font-family: Roboto-Regular,sans-serif;font-size: 14px;font-weight: bold; height: 4.5rem;!important;\" type=\"text\"
                                                               id=\"quantitymodal{{ produit.id }}\"
                                                               name=\"quantitymodal{{ produit.id }}\"
                                                               class=\"form-control input-number text-center\" {% if app.session.get('panier')[produit.id] is defined %} value=\"{{ app.session.get('panier')[produit.id] }}\" {% else %} value=\"1\" {% endif %}
                                                               min=\"1\" max=\"100\" disabled>

                                                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button onclick=\"plusquantity({{ produit.id }})\"
                                                                    type=\"button\"
                                                                    class=\"quantity-right-plus btn btn-success btn-number btn_plus_moins\"
                                                                    style=\"background-color:#ED0000\" data-type=\"plus\"
                                                                    data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    </div>

                                                {% else %}
                                                    <div class=\"row\" id=\"quantite{{ produit.id }}\"
                                                         name=\"quantite{{ produit.id }}\"  >

                                                        <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                                            <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle{{ produit.id }}\"
                                                                        onclick=\"deleteArticleQuantity({{ produit.id }},{{ produit.prix }})\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
                                                                    <span class=\"glyphicon glyphicon-minus\"></span>
                                                                </button>
                                                            </span>
                                                                <input style=\" height: 4.5rem;!important;\" type=\"text\"
                                                                       id=\"qte{{ produit.id }}\"
                                                                       name=\"qte{{ produit.id }}\"
                                                                       class=\"form-control input-number text-center\" {% if app.session.get('panier')[produit.id] is defined %} value=\"{{ app.session.get('panier')[produit.id] }}\" {% else %} value=\"0\" {% endif %}
                                                                       min=\"1\" max=\"100\" disabled>
                                                                <span class=\"input-group-btn\">
                                                                <button id=\"addArticle{{ produit.id }}\"
                                                                        onclick=\"addArticle({{ produit.id }},{{ produit.quantite }},{{ produit.maxcommande }})\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"plus\" data-field=\"\">
                                                                    <span class=\"glyphicon glyphicon-plus\"></span>
                                                                </button>
                                                        </span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                {% endif %}

                                            </div>
                                            {% if produit.couleurs|length>0 %}

                                                <div class=\"col-lg-8 col-sm-6 col-xs-6\">
                                                    <span class=\"selected-color selectedSpan\"><strong class=\"text_details\">{{ \"Taille\" | trans }}</strong></span>
                                                    <select class=\"form-control \" id=\"sizes{{ produit.id }}\"
                                                            name=\"sizes{{ produit.id }}\"
                                                            onchange=\"changeSize({{ produit.id }})\"
                                                            style=\"border-radius: 0px;height: 43px; font-family: Roboto-Regular,sans-serif\"  >
                                                        <option disabled  style=\" color:#374649;font-family: Roboto-Regular,sans-serif;font-size: 12px;font-weight: 400 \" selected>
                                                            {{ \"choisir la taille\" | trans }}</option>
                                                        {% if  produit.couleurs|length > 0 %}
                                                            {% set i = 1 %}
                                                            {% for size in produit.couleurs[\"0\"].sizes %}
                                                                {% if i == 1 %}
                                                                    <option value=\"{{ size.id }}\"
                                                                            selected>{{ size.libelle }}</option>
                                                                {% else %}
                                                                    <option value=\"{{ size.id }}\">{{ size.libelle }}</option>

                                                                {% endif %}
                                                                {% set i = i+1 %}

                                                            {% endfor %}
                                                        {% endif %}
                                                    </select>
                                                </div>

                                            {% endif %}
                                        </div>
                                    </div>
                                    <!-- productFilter -->


                                    <div class=\"color-details\">
                                        <button onclick=\"addArticleSize({{ produit.id }})\"
                                                class=\"  btn_card col-lg-6\" type=\"submit\"
                                                id=\"btn-panier\"
                                                data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                            <span class=\"add2cart\">
                                                <span class=\"btnspanadd\">{{ \"Acheter\" | trans }} <i class=\"fa fa-shopping-cart\"></i></span>

\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </button>

                                        <div class=\"col-lg-6 fich_technique\">
                                            {% if produit.file %}

                                                <a  target=\"_blank\"
                                                    href=\"{{ legal_notice_directory }}/{{ produit.file }}\">
                                                    <svg _ngcontent-dxq-c64=\"\" height=\"20\" viewBox=\"0 0 512 512\" width=\"20\" xmlns=\"http://www.w3.org/2000/svg\"><g _ngcontent-dxq-c64=\"\" id=\"Solid\"><path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\" d=\"m239.029 384.97a24 24 0 0 0 33.942 0l90.509-90.509a24 24 0 0 0 0-33.941 24 24 0 0 0 -33.941 0l-49.539 49.539v-262.059a24 24 0 0 0 -48 0v262.059l-49.539-49.539a24 24 0 0 0 -33.941 0 24 24 0 0 0 0 33.941z\"></path><path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\" d=\"m464 232a24 24 0 0 0 -24 24v184h-368v-184a24 24 0 0 0 -48 0v192a40 40 0 0 0 40 40h384a40 40 0 0 0 40-40v-192a24 24 0 0 0 -24-24z\"></path></g></svg>
                                                    {{ \"Fiche Technique\"|trans }}
                                                </a>
                                            {% endif %}

                                        </div>

                                    </div>

                                    <!--/.cart-actions-->

                                </div>
                                <!--/ right column end -->

                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            {% else %}

                {#
                  <div class=\"quickview\" onclick=\"plusquantityD({{ produit.id }},{{ produit.quantite }},{{ produit.maxcommande }})\">
                    <a data-toggle=\"modal\" class=\"btn btn-xs btn-quickview\"
                       data-target=\"#productSetailsModalAjaxx{{ produit.id }}\">{{ \"Details\"|trans }} </a>
                </div>
                #}
            {% if produit.description or produit.descriptionen %}

                <div class=\"quickview\" >
                    <a  class=\"btn btn-xs btn-quickview\" href=\"{{ path(\"detail_produits\",{'produitid':produit.id}) }}\"
                    >{{ \"Details\" | trans }} </a>
                </div>
            {% endif %}

                <div class=\"modal fade\" id=\"productSetailsModalAjaxx{{ produit.id }}\" tabindex=\"-1\" role=\"dialog\"
                     aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"row transitionfx text-left\" style=\"padding: 30px;margin-right: 0px!important; margin-left: 0px;!important;\">
                                <div class=\"col-lg-12\">
                                    <button style=\"opacity: 1.2;margin-top: -21px;margin-right: -18px;background-color: #ffffff;/* color: #454545; */\" type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span style=\"color: #454545;\" aria-hidden=\"true\">×</span>
                                    </button></div>
                                <!-- left column -->
                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                    <!-- product Image and Zoom -->
                                    <div class=\"main-image sp-wrap col-lg-12 no-padding style3\" style=\"display: inline-block;\">



                                        <div class=\"sp-large\" style=\"overflow: hidden; height: auto; left: 0px; top: 0px;max-width: 100% !important\">
                                            <a href=\"\" class=\"\" style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                                <img id=\"imageproduit{{ produit.id }}\"
                                                     data-original=\"/uploads/produits/{{ produit.image }}\"
                                                     src=\"{% if produit.image and produit.image != \"\" %}/uploads/produits/{{ produit.image }}
                                                         {% else %}{{ asset('/assets/img/default_t_e.jpg') }}{% endif %}\"
                                                     alt=\"{{ produit.nom }}\" class=\"img-responsive\" style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                            </a>
                                        </div>
                                    </div>


                                </div>
                                <!--/ left column end -->


                                <!-- right column -->
                                <div class=\"col-lg-8 col-md-6 col-sm-6\">
                                    <input type=\"text\" id=\"idproduit\" value=\"{{ produit.id }}\" hidden>

                                    <h1 class=\"product-title titleproduitt\">

                                        {% if app.request.getLocale()  == 'en' %}{{ produit.nomen }}{% else %}{{ produit.nom }}{% endif %}

                                    </h1>

                                    <div class=\"description\" >
                                        {% if app.request.getLocale()  == 'en' %}{{ produit.descriptionen }}{% else %}{{ produit.description }}{% endif %}

                                    </div>
                                    <div class=\"product-price\" style=\"font-size: 20px;\">
                                        <span class=\"price-sales price\">  {{ formated_price( produit.finalPrice[\"prix\"],app.session.get(\"pays\"))}}</span>
                                        {% if produit.finalPrice[\"is_promo\"] and produit.numProduitPromo == 1 %}
                                            <span class=\"price-standard  old-price\" > {{ formated_price( produit.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}} </span>
                                        {% elseif produit.finalPrice[\"is_promo\"] and produit.prixPromo and produit.prixPromo > 0 %}
                                            <span class=\"price-standard old-price\"> {{ formated_price( produit.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}}</span>
                                        {% endif %}
                                    </div>

                                    {% if produit.couleurs|length>0 %}

                                        <div class=\"color-details\">
                                            {% if produit.image and produit.image != \"\" %}
                                                <img name='img' id='{{ produit.image }}'
                                                     style=\"width:  100px;height: 100px;background-size: contain;border-width: 2px; border-color: #ED0000;border-style: solid;\"
                                                     src=\"/uploads/produits/{{ produit.image }}\"
                                                     onclick=\"changeImage('{{ produit.image }}','{{ produit.id }}')\"
                                                     alt=\"img\">
                                            {% endif %}
                                            {% for c in produit.couleurs %}
                                                {% if c.image and c.image != \"\" %}

                                                    <img name='img' id='{{ c.image }}'
                                                         style=\"    width:  100px;height: 100px;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                                         src=\"/uploads/produits/{{ c.image }}\"
                                                         onclick=\"changeImage('{{ c.image }}','{{ produit.id }}')\"
                                                         alt=\"img\">

                                                {% endif %}

                                            {% endfor %}
                                        </div>
                                        <div class=\"color-details\">
                                            <span class=\"selected-color selectedSpan\"><strong class=\"text_details\">{{ \"Couleurs\" | trans }}</strong></span>
                                            <ul class=\"swatches Color\" name=\"couleur{{ produit.id }}\"
                                                id=\"couleur{{ produit.id }}\">
                                                {% set i = 1 %}
                                                {% for couleur in produit.couleurs %}
                                                    {% if i == 1 %}
                                                        <li class=\"selected\" value=\"{{ couleur.codeCouleur }}\"
                                                            onclick=\"changeImagecouleur('{{ produit.id }}','{{ couleur.id }}','{{ couleur.image }}')\">
                                                            <a style=\"background-color:{{ couleur.codeCouleur }};color:transparent\"></a>
                                                        </li>
                                                    {% else %}
                                                        <li value=\"{{ couleur.codeCouleur }}\"
                                                            onclick=\"changeImagecouleur('{{ produit.id }}','{{ couleur.id }}','{{ couleur.image }}')\">
                                                            <a style=\"background-color:{{ couleur.codeCouleur }};color:transparent\"></a>
                                                        </li>
                                                    {% endif %}
                                                    {% set i = i+1 %}
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                    <!--/.color-details-->

                                    <div class=\"color-details\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4 col-md-4 col-xs-6\" style=\"\">
                                                <span class=\"selected-color selectedSpan\"><strong class=\"text_details\">{{\"Quantité\" | trans}}</strong></span>
                                                {% if produit.couleurs|length>0 %}

                                                    <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"deleteArticle{{ produit.id }}\"
                                                                    onclick=\"moinsquantity({{ produit.id }})\"
                                                                    type=\"button\"
                                                                    class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                    style=\"background-color:#ED0000\" data-type=\"minus\"
                                                                    data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <input style=\"font-family: Roboto-Regular,sans-serif;font-size: 14px;font-weight: bold; height: 4.5rem;!important;\" type=\"text\"
                                                               id=\"quantitymodal{{ produit.id }}\"
                                                               name=\"quantitymodal{{ produit.id }}\"
                                                               class=\"form-control input-number text-center\" {% if app.session.get('panier')[produit.id] is defined %} value=\"{{ app.session.get('panier')[produit.id] }}\" {% else %} value=\"1\" {% endif %}
                                                               min=\"1\" max=\"100\" disabled>

                                                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button onclick=\"plusquantity({{ produit.id }})\"
                                                                    type=\"button\"
                                                                    class=\"quantity-right-plus btn btn-success btn-number btn_plus_moins\"
                                                                    style=\"background-color:#ED0000\" data-type=\"plus\"
                                                                    data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    </div>
                                                {% else %}
                                                    <div class=\"row\" id=\"quantite{{ produit.id }}\"
                                                         name=\"quantite{{ produit.id }}\" disabled=\"none\"  >

                                                        <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                                            <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle{{ produit.id }}\"
                                                                        onclick=\"moinquantityD({{ produit.id }},{{ produit.prix }})\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
                                                                    <span class=\"glyphicon glyphicon-minus\"></span>
                                                                </button>
                                                            </span>
                                                                <input style=\" height: 4.5rem;!important;\" type=\"text\"
                                                                       id=\"qte{{ produit.id }}\"
                                                                       name=\"qte{{ produit.id }}\"
                                                                       class=\"form-control input-number text-center\" {% if app.session.get('panier')[produit.id] is defined %} value=\"{{ app.session.get('panier')[produit.id] }}\" {% else %} value=\"0\" {% endif %}
                                                                       min=\"1\" max=\"100\" disabled>
                                                                <span class=\"input-group-btn\">
                                                                <button id=\"addArticlee{{ produit.id }}\"
                                                                        onclick=\"plusquantityD({{ produit.id }},{{ produit.quantite }},{{ produit.maxcommande }})\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"plus\" data-field=\"\">
                                                                    <span class=\"glyphicon glyphicon-plus\"></span>
                                                                </button>
                                                        </span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                {% endif %}
                                            </div>
                                            {% if produit.couleurs|length>0 %}

                                                <div class=\"col-lg-8 col-sm-6 col-xs-6\">
                                                    <span class=\"selected-color selectedSpan\"><strong class=\"text_details\">{{ \"Taille\" | trans }}</strong></span>
                                                    <select class=\"form-control \" id=\"sizes{{ produit.id }}\"
                                                            name=\"sizes{{ produit.id }}\"
                                                            onchange=\"changeSize({{ produit.id }})\"
                                                            style=\"border-radius: 0px;height: 43px; font-family: Roboto-Regular,sans-serif\"  >
                                                        <option disabled  style=\" color:#374649;font-family: Roboto-Regular,sans-serif;font-size: 12px;font-weight: 400 \" selected>
                                                            {{ \"choisir la taille\" | trans }}</option>
                                                        {% if  produit.couleurs|length > 0 %}
                                                            {% set i = 1 %}
                                                            {% for size in produit.couleurs[\"0\"].sizes %}
                                                                {% if i == 1 %}
                                                                    <option value=\"{{ size.id }}\"
                                                                            selected>{{ size.libelle }}</option>
                                                                {% else %}
                                                                    <option value=\"{{ size.id }}\">{{ size.libelle }}</option>

                                                                {% endif %}
                                                                {% set i = i+1 %}

                                                            {% endfor %}
                                                        {% endif %}
                                                    </select>
                                                </div>

                                            {% endif %}
                                        </div>
                                    </div>
                                    <!-- productFilter -->


                                    <div class=\"color-details\">
                                        {% if produit.couleurs|length>0 %}

                                        <button onclick=\"addArticleSize({{ produit.id }})\"
                                                class=\"  btn_card col-lg-6\" type=\"submit\"
                                                id=\"btn-panier\"
                                                data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                            <span class=\"add2cart\">
                                                <span class=\"btnspanadd\">{{ \"Acheter\" | trans }} <i class=\"fa fa-shopping-cart\"></i></span>

\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </button>
                                        {% else %}
                                            <button onclick=\"addArticlee({{ produit.id }},{{ produit.quantite }},{{ produit.maxcommande }})\"
                                                    class=\"  btn_card col-lg-6\" type=\"submit\"
                                                    id=\"addArticlee{{ produit.id }}\"
                                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                            <span class=\"add2cart\">
                                                <span class=\"btnspanadd\">{{ \"Acheter\" | trans }} <i class=\"fa fa-shopping-cart\"></i></span>

\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </button>
                                        {% endif %}
                                        <div class=\"col-lg-6 fich_technique\">
                                            {% if produit.file %}

                                                <a  target=\"_blank\"
                                                    href=\"{{ legal_notice_directory }}/{{ produit.file }}\">
                                                    <svg _ngcontent-dxq-c64=\"\" height=\"20\" viewBox=\"0 0 512 512\" width=\"20\" xmlns=\"http://www.w3.org/2000/svg\"><g _ngcontent-dxq-c64=\"\" id=\"Solid\"><path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\" d=\"m239.029 384.97a24 24 0 0 0 33.942 0l90.509-90.509a24 24 0 0 0 0-33.941 24 24 0 0 0 -33.941 0l-49.539 49.539v-262.059a24 24 0 0 0 -48 0v262.059l-49.539-49.539a24 24 0 0 0 -33.941 0 24 24 0 0 0 0 33.941z\"></path><path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\" d=\"m464 232a24 24 0 0 0 -24 24v184h-368v-184a24 24 0 0 0 -48 0v192a40 40 0 0 0 40 40h384a40 40 0 0 0 40-40v-192a24 24 0 0 0 -24-24z\"></path></g></svg>
                                                    {{ \"Fiche Technique\"|trans }}
                                                </a>
                                            {% endif %}

                                        </div>

                                    </div>

                                    <!--/.cart-actions-->

                                </div>
                                <!--/ right column end -->

                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>


                <div class=\"modal fade\" id=\"modal-quantity-max{{ produit.id }}\" tabindex=\"-1\" role=\"dialog\"
                     aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\" style=\"background: #df0c36;\">
                                <h4 class=\"modal-title text-left\" id=\"exampleModalLongTitle\" style=\"margin-top: 11px;\">

                                </h4>
                                <button style=\"opacity: 1.2;margin-top: -26px;margin-right: -10px;background-color: #df0c36\"
                                        type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body text-center\">
                                <h3>

                                    {{ \"pouvez_commander_au_max\" | trans}}{{ produit.maxcommande }}
                                    {% if app.request.getLocale()  == 'en' %}{{ produit.nomen }}{% else %}{{ produit.nom }}{% endif %}
                                </h3>



                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                {#

                <script>
                    \$(document).click(function(event) {
                        //if you click on anything except the modal itself or the \"open modal\" link, close the modal
                        setTimeout(function(){
                            \$('#modal-quantity-max{{ produit.id }}').modal('hide')
                        }, 14000);

                    });

                </script>
                #}



                <div class=\"modal fade\" id=\"modal-panier{{ produit.id }}\" tabindex=\"-1\" role=\"dialog\"
                     aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\" style=\"z-index:1062 !important\" >
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\" style=\"background: #ED0000;\">
                                <h4 class=\"modal-title\" id=\"exampleModalLongTitle\" style=\"margin-top: 11px;\">{{ \"Acheter\" | trans }} <i class=\"fa fa-shopping-cart\"></i>
                                </h4>
                                <button style=\"opacity: 1.2;margin-top: -36px;margin-right: -10px;background-color: #ED0000\"
                                        type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body text-center\">
                                {#
                                                                <h3>{{\"La quantité demandée est indisponible\" | trans}}</h3>

                                #}

                                <h3>{{\"quantite_demander_indispo\" | trans}}
                                    {% if app.request.getLocale()  == 'en' %}{{ produit.nomen }}{% else %}{{ produit.nom }}{% endif %} {{\"est\" | trans}} <span id=\"idinputtwo{{ produit.id }}\">  </span>  </h3>

                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                {#
                     <script>
                    \$(document).click(function(event) {
                        setTimeout(function(){
                            \$('#modal-panier{{ produit.id }}').modal('hide')
                        }, 14000);

                    });

                </script>
                #}



            {% endif %}


            <img style=\" width: 100%;height:100%!important;max-height: 300px;min-height:300px;object-fit: contain  !important;border-top-left-radius: 10px;border-top-right-radius: 10px\"
                 id=\"img{{ produit.id }}\" data-original=\"
              {% if  produit.image and produit.image != \"\" %}
    /uploads/produits/{{ produit.image }}
{% elseif produit.sousCategorie and produit.sousCategorie.image and produit.sousCategorie.image != \"\" %}
    /uploads/produits/{{ produit.sousCategorie.image }}
{% else %}
    {{ asset('/assets/img/default_t_e.jpg') }}
{% endif %}\" src=\"{{ asset('/assets/img/default_t_e.jpg') }}\"
                 alt=\"{{ produit.nom }}\" class=\"img-responsive lazy\">
            {% if produit.quantite >0 %}
                {% if produit.finalPrice[\"is_promo\"] and produit.prixPromo and produit.prixPromo > 0 %}
                    <div class=\"promotion\">
                        <span class=\"discount\" style=\"    font-weight: 400;\">{{ \"Promotion\" | trans }}</span>
                    </div>
                {% elseif produit.finalPrice[\"is_promo\"] and produit.numProduitPromo == 1 %}
                    <div class=\"promotion\">
\t\t\t\t\t\t<span class=\"discount\" style=\"    font-weight: 400;\">{{ \"Promotion\"|trans }}
                            {{ formated_price(produit.finalPrice[\"percentage\"],app.session.get('pays'),false) }}%
\t\t\t\t\t\t</span>
                    </div>
                {% elseif produit.finalPrice[\"is_promo\"] and produit.numProduitPromo > 1 %}
                    <div class=\"promotion\">
\t\t\t\t\t\t<span class=\"discount\" style=\"    font-weight: 400;\">
\t\t\t\t\t\t\t{{ formated_price(produit.finalPrice[\"percentage\"],app.session.get('pays'),false) }}% {{ \"sur le\" | trans }}
                            {{ produit.numProduitPromo }}{{ \"ème produit\" | trans }}
\t\t\t\t\t\t</span>
                    </div>
                {% endif %}
            {% else %}
                <div class=\"promotion\">
\t\t\t\t\t<span class=\"horsstock\" style=\"    font-weight: 400;\">
\t\t\t\t\t\t{{ \"En rupture de stock\"|trans }}
\t\t\t\t\t</span>
                </div>
            {% endif %}
        </div>

        <div style=\"height: 30%;position: relative\">
            <div class=\"line_gradient\"></div>

            <div class=\"col-lg-12 description\">
\t\t\t    <span class=\"\">
                                    {% if app.request.getLocale()  == 'en' %}{{ produit.nomen }}{% else %}{{ produit.nom }}{% endif %}

\t\t\t\t</span>
            </div>
            {#

            <div class=\"description\" >
                {% if app.request.getLocale()  == 'en' %}{{ produit.descriptionen }}{% else %}{{ produit.description }}{% endif %}

            </div>

            <div class=\"col-lg-12 fich_technique\">
                    {% if produit.file %}

                    <a  target=\"_blank\"
                        href=\"{{ legal_notice_directory }}/{{ produit.file }}\">
                        <svg _ngcontent-dxq-c64=\"\" height=\"20\" viewBox=\"0 0 512 512\" width=\"20\" xmlns=\"http://www.w3.org/2000/svg\"><g _ngcontent-dxq-c64=\"\" id=\"Solid\"><path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\" d=\"m239.029 384.97a24 24 0 0 0 33.942 0l90.509-90.509a24 24 0 0 0 0-33.941 24 24 0 0 0 -33.941 0l-49.539 49.539v-262.059a24 24 0 0 0 -48 0v262.059l-49.539-49.539a24 24 0 0 0 -33.941 0 24 24 0 0 0 0 33.941z\"></path><path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\" d=\"m464 232a24 24 0 0 0 -24 24v184h-368v-184a24 24 0 0 0 -48 0v192a40 40 0 0 0 40 40h384a40 40 0 0 0 40-40v-192a24 24 0 0 0 -24-24z\"></path></g></svg>
                        {{ \"Fiche Technique\"|trans }}
                    </a>
                    {% endif %}

                </div>

            #}


            <div class=\"row\" style=\"position: absolute;  bottom: 10px;left: 15px;right: 0\">
                <div class=\"col-lg-6 col-md-6 col-xs-6 col-sm-6 text-left\">
                    <div class=\"price\">

                        {% if produit.finalPrice[\"is_promo\"] and produit.prixPromo and produit.prixPromo > 0 %}
                            <span class=\"old-price\">
\t\t\t\t\t\t\t{{ formated_price(produit.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }}
\t\t\t\t\t\t</span>
                        {% elseif produit.finalPrice[\"is_promo\"] and produit.numProduitPromo == 1 %}
                            <span class=\"old-price\">
\t\t\t\t\t\t\t{{ formated_price(produit.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }}
\t\t\t\t\t\t</span>
                        {% endif %}
                        <br>
                        <span>
\t\t\t\t{{ formated_price(produit.finalPrice[\"prix\"],app.session.get(\"pays\")) }}
\t\t\t</span>

                    </div>
                </div>

                <div class=\"div_card col-lg-6 col-md-6 col-xs-6 col-sm-6 text-right\"
                     style=\"margin-top: 6px;padding-right: 23px;\">
                    <div class=\"row\" style=\"padding: 0px 4px 4px;\" id=\"quantitee{{ produit.id }}\"
                         name=\"quantitee{{ produit.id }}\"  hidden>

                        <div class=\"col-lg-12 col-md-12 col-xs-12\">
                            <div class=\"input-group \"   style=\"width: 104px;float: right;\">
\t\t\t\t\t\t\t    <span class=\"input-group-btn \" >
\t\t\t\t\t\t\t\t<button id=\"deleteArticle{{ produit.id }}\"
                                        onclick=\"deleteArticleQuantity({{ produit.id }},{{ produit.prix }})\"
                                        type=\"button\"
                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                        data-type=\"minus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t    </span>
                                <input style=\"font-weight: bold;font-family: Roboto-Regular,sans-serif\" type=\"text\"
                                       id=\"qte{{ produit.id }}\" name=\"qte{{ produit.id }}\"
                                       class=\"form-control input-number text-center\" {% if app.session.get('panier')[produit.id] is defined %} value=\"{{ app.session.get('panier')[produit.id] }}\" {% else %} value=\"0\" {% endif %}
                                       min=\"1\" max=\"100\" disabled>
                                <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t      <button id=\"addArticle{{ produit.id }}\"
                                              onclick=\"addArticle({{ produit.id }},{{ produit.quantite }},{{ produit.maxcommande }})\"
                                              type=\"button\"
                                              class=\"quantity-right-plus btn btn-danger btn-number btn_plus_moins\"
                                              data-type=\"plus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t             \t</span>
                            </div>
                        </div>


                    </div>
                    <div id=\"addcart{{ produit.id }}\" name=\"addcart{{ produit.id }}\">
                        {% if produit.quantite == 0 %}
                            <button disabled type=\"button\" class=\"btn_card\"
                                    style=\"background-color: #8c8586;color: white;border: 1px solid #8c8586;padding: 0 0;height: 43px;width: 43px;margin-bottom: 8px;\"
                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> {{ \"Chargement\" | trans }}\">
\t\t\t\t\t\t\t<span class=\"add2cart btnspanadd\" style=\"color:#8c8586;\">
\t\t\t\t\t\t\t\t{{ \"Acheter\" | trans }} <i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t</span>
                            </button>
                        {% else %}


                        {% if  produit.couleurs|length > 0 %}

                            <a class=\" btn_card\" style=\"padding-top: 15px; padding-bottom: 15px;\"
                               href=\"{{ path(\"detail_produits\",{'produitid':produit.id}) }}\"  >
                                                         <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> {{ \"Acheter\" | trans }} <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                            </a>

                        {% else %}

                            <button type=\"submit\" class=\"btn_card\"
                                    {#
                                                                        {% if  produit.couleurs|length > 0 %}
                                        data-toggle=\"modal\"
                                        data-target=\"#productSetailsModalAjax{{ produit.id }}\"
                                    {% else %}
                                        id=\"btn-panier{{ produit.id }}\"
                                        onclick=\"enabledivquantity({{ produit.id }},{{ produit.quantite }},{{ produit.maxcommande }}, this)\"
                                    {% endif %}

                                    #}

                                    id=\"btn-panier{{ produit.id }}\"
                                    onclick=\"enabledivquantity({{ produit.id }},{{ produit.quantite }},{{ produit.maxcommande }}, this)\"

                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> {{ \"Chargement\" | trans }}\">
                                                        <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\">{{ \"Acheter\" | trans }} <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                            </button>


                        {% endif %}
                        {% endif %}
                    </div>

                </div>
            </div>
            <!--<div class=\"price\"><span style=\"color:#df0c36; font-size: 22px;font-family: 'Open Sans', sans-serif;\"><b>{{ produit.prix }} dt</b></span></div>-->

        </div>


    </div>

    <!-- Modal -->


    <div class=\"modal fade\" id=\"myModal\"
         role=\"dialog\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"background: #ED0000;\">
                    <h2 class=\"modal-title text-left\" id=\"exampleModalLongTitle\" style=\"margin-top: 5px\">

                    </h2>
                    <button style=\"opacity: 1.2;margin-top: -26px;margin-right: -10px;background-color: #ED0000\"
                            type=\"button\" class=\" close\" data-dismiss=\"modal\"
                            aria-label=\"Close\">
                        <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body text-center\">
                    <h3>
                        {{ \"fav_alert\" | trans}}
                    </h3>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>



</div>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>

<script>
    function changeCouleur(id) {
    }
    function addfavnonConnect() {
        \$(\"#myModal\").modal({backdrop: true});


    }

    \$('#couleur').on('click', 'li', function () {
        \$(this).addClass(\"selected\"); // Assign the class here
        //   var value = \$('#couleur').val();
        var value = \$(this).attr('value');
        var produit = parseInt(\$(\"#idproduit\").val());
        \$.ajax({
            url: \"{{ (path('getSizeCouleur')) }}\",
            dataType: 'Json',
            data: {\"couleurid\": value, \"produitid\": produit},
            type: 'GET',
            success: function (data) {
                var nameselect = \"sizes\" + produit
                \$('select[name=nameselect]').empty();
                if (data[0]) {
                    student = data[0];
                    \$('select[name=nameselect]').append('<option selected value=\"' + student['id'] + '\">' + student['libelle'] + '</option>');

                }

                for (i = 1; i < data.length; i++) {
                    student = data[i];
                    \$('select[name=\"sizes').append('<option  value=\"' + student['id'] + '\">' + student['libelle'] + '</option>');
                }
                ;
                //\t\$(\"#quantitymodal\" + produit).val(1);
            }
        });
    });

    function changeImagecouleur(produitid, couleurid, image) {
        if (image) {
            changeImage(image, produitid)
        }
        var produit = parseInt(produitid);
        var couleur = parseInt(couleurid);
        \$(\"#quantitymodal\"+produitid).val(1);//rahma addd to

        \$.ajax({
            url: \"{{ (path('getSizeCouleur')) }}\",
            dataType: 'Json',
            data: {\"couleurid\": couleur, \"produitid\": produit},
            type: 'GET',
            success: function (data) {
                var nameselect = \"sizes\" + produitid
                \$('select[name=' + nameselect + ']').empty();

                if (data[0]) {
                    size = data[0];
                    \$('select[name=' + nameselect + ']').append('<option selected value=\"' + size['id'] + '\">' + size['libelle'] + '</option>');
                }

                for (i = 1; i < data.length; i++) {
                    size = data[i];
                    \$('select[name=' + nameselect + ']').append('<option  value=\"' + size['id'] + '\">' + size['libelle'] + '</option>');
                }
                ;
                //\t\$(\"#quantitymodal\" + produit).val(1);
            }
        });

    }

    function changeImage(image, id) {

        document.getElementById(\"imageproduit\" + id).src = '/uploads/produits/' + image;
        var images = document.getElementsByName(\"img\");
        for (i in images) {
            images[i].style = 'width: 100px;\\n' +
                '    height: 100px;\\n' +
                '    background-size: cover;\\n' +
                '    border-width: 2px;\\n' +
                '    border-color: #dcdbdb;\\n' +
                '    border-style: solid;';
        }
        document.getElementById(image).style = 'width: 100px;\\n' +
            '    height: 100px;\\n' +
            '    background-size: cover;\\n' +
            '    border-width: 2px;\\n' +
            '    border-color: #df0c36;\\n' +
            '    border-style: solid;';

    }
</script>
<script>
    function addArticleSize(id) {
        var selectsizes = document.getElementById(\"sizes\" + id);
        var sizeid = selectsizes.options[selectsizes.selectedIndex].value;
        var qte = parseInt(\$(\"#quantitymodal\" + id).val());
        \$.ajax({
            url: \"{{ (path('size_from_id')) }}\",
            dataType: 'Json',
            data: {\"sizeid\": sizeid},
            type: 'GET',
            success: function (data) {
                console.log(data);
                console.log(qte);
                var quantite = data
                if ((quantite !== null) && (qte > quantite)) {
                    //alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                    document.getElementById(\"idinputtwo\"+id).innerHTML = quantite;

                    \$(\"document\").ready(function () {
                      //was  \$('#modal-panier'+id).modal({backdrop: 'static', keyboard: false});
                        \$('#modal-panier' + id).modal(\"show\");
                    })
                } else if ((quantite !== null) && (qte < quantite)) {
                    addArticlewithsize(id, sizeid, qte);
                    \$('#productSetailsModalAjax'+id).modal('hide');

                }

            }
        });

    }

    function changeSize(id) {
        //\$(\"#quantitymodal\" + id).val(1);
    }

    function enabledivquantity(id, quantite, max, el) {
        var qte = parseInt(\$(\"#qte\" + id).val());
        if (qte + 1 > quantite) {

           // alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
            document.getElementById(\"idinputtwo\"+id).innerHTML = quantite;

            \$(\"document\").ready(function () {
              //was  \$('#modal-panier'+id).modal({backdrop: 'static', keyboard: false});

                \$('#modal-panier' + id).modal(\"show\");
            })
        } else if (qte + 1 > max) {
            \$(\"document\").ready(function () {
              //was  \$('#modal-quantity-max' + id).modal({backdrop: 'static', keyboard: false});

                \$('#modal-quantity-max'+id).modal(\"show\");

            })
        } else if (qte >= 0) {
            var quantity = document.getElementById(\"quantitee\" + id);
            console.log(\"ffff\");
            console.log(quantity);
        //    document.getElementById(\"quantite\"+id).style.display = 'block';

            //var quantity = \$(el).parent().parent().find(\"#quantite\" + id);
            var btncart = el;
            quantity.style.display = \"block\";
            btncart.style.display = \"none\";
            addArticle(id, quantite, max);
        }
    }

    function plusquantity(id) {
        var selectsizes = document.getElementById(\"sizes\" + id);
        var sizeid = selectsizes.options[selectsizes.selectedIndex].value;
        var qte = parseInt(\$(\"#quantitymodal\" + id).val()) + 1 ;
        //alert(qte);

        \$.ajax({
            url: \"{{ (path('size_from_id')) }}\",
            dataType: 'Json',
            data: {\"sizeid\": sizeid},
            type: 'GET',
            success: function (data) {
                var quantite = data;
                var qtee = parseInt(\$(\"#quantitymodal\" + id).val())+1  ;

                if (qtee  > quantite) {

                    //  alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                    document.getElementById(\"idinputtwo\"+id).innerHTML = quantite;

                    \$(\"document\").ready(function () {

                      //was  \$('#modal-panier' + id).modal({backdrop: 'static', keyboard: false});


                        \$('#modal-panier' + id).modal(\"show\");
                    })


                } else {
                    var qte = parseInt(\$(\"#quantitymodal\" + id).val()) + 1;
                    var qte_input = document.querySelectorAll(\"[id=quantitymodal\" + id+\"]\");
                    for(var i = 0; i < qte_input.length; i++){
                        qte_input[i].value = qte;
                    }
                }

            }
        });

      /*  var qte = parseInt(\$(\"#quantitymodal\" + id).val()) + 1;
        \$(\"#quantitymodal\" + id).val(qte);*/


    }
   /* function plusquantityD(id,quantite,max) {

        var qte = parseInt(\$(\"#qte\" + id).val()) + 1;
             if (qte===1){
            console.log(\"qte\");
            console.log(qte);
            \$(\"#qte\" + id).val(0);

            addArticle(id, quantite, max);

        }else {
            console.log(\"qtesecond\");
            console.log(qte);

        }
      //  \$(\"#qte\" + id).val(qte);

        if (qte===1){
            console.log(\"qte\");
            console.log(qte);
            \$(\"#qte\" + id).val(0);

            addArticle(id, quantite, max);

        }else {
            console.log(\"qtesecond\");
            console.log(qte);

        }



    }*/

    function moinsquantity(id) {
        var qte = parseInt(\$(\"#quantitymodal\" + id).val()) - 1;
        if (qte > 0) {
            \$(\"#quantitymodal\" + id).val(qte);

        } else {

            \$(\"document\").ready(function () {
              //was  \$('#modal-quantity').modal({backdrop: 'static', keyboard: false});
                \$('#modal-quantity').modal(\"show\");
            })

        }
    }




    <!-- ---- -->

    function plusquantityD(id,quantity,max) {

        var qte = parseInt(\$(\"#qte\" + id).val()) + 1;



        if(qte  > quantity  ){

         //   alert(\"Vous ne pouvez commander que \" +quantity+\" produit\" )
            document.getElementById(\"idinputtwo\"+id).innerHTML = quantity;

               \$(\"document\").ready(function () {
                  //was \$('#modal-panier'+id).modal({backdrop: 'static',keyboard: false  });

                   \$('#modal-panier' + id).modal(\"show\");
                   //  \$('select').select2();
               })
        }
        else if (qte > max) {
            \$(\"document\").ready(function () {
              //was  \$('#modal-quantity-max'+id).modal({  backdrop: 'static',     keyboard: false});
                \$('#modal-quantity-max'+id).modal(\"show\");

            })
        }else{
            var qte_input = document.querySelectorAll(\"[id=qte\" + id+\"]\");

            for(var i = 0; i < qte_input.length; i++){
                qte_input[i].value = qte;
            }
        }

    }

    function moinquantityD(id) {

        var qte = parseInt(\$(\"#qte\" + id).val()) -1;
        //  \$(\"#qte\" + id).val(qte);
        var qte_input = document.querySelectorAll(\"[id=qte\" + id+\"]\");

        if (qte > 0) {
            for(var i = 0; i < qte_input.length; i++){
                qte_input[i].value = qte;
            }
        } else {
            \$(\"document\").ready(function () {
             //   \$('#modal-quantity').modal({backdrop: 'static', keyboard: false});
                \$('#modal-quantity').modal(\"show\");

            })

        }
    }

    function addArticlee(id, quantity,max) {
        var qte = parseInt(  \$(\"#qte\"+id).val());
        var qte_input = document.querySelectorAll(\"[id=qte\" + id+\"]\");



        if(qte  > quantity  ){

          //  alert(\"Vous ne pouvez commander que \" +quantity+\" produit\" )
            document.getElementById(\"idinputtwo\"+id).innerHTML = quantity;

             \$(\"document\").ready(function () {
               //  \$('#modal-panier'+id).modal({  backdrop: 'static',  keyboard: false        });

                 \$('#modal-panier' + id).modal(\"show\");
                 //  \$('select').select2();
             })
        }
        else if (qte > max) {
            \$(\"document\").ready(function () {
                //was\$('#modal-quantity-max'+id).modal({  backdrop: 'static',  keyboard: false});

                \$('#modal-quantity-max'+id).modal(\"show\");

            })
        } else {


            for(var i = 0; i < qte_input.length; i++){
                qte_input[i].value = qte ;
            }

            //   alert(\"qtettee\"+qte)

            var \$this = \$(\"#addArticlee\"+id);
            \$.ajax({
                url: Routing.generate('add_many_quantity_to_cart', {id: id,qte:qte}), success: function (result) {
                    \$(\".my_nav_bar\").html(result);
                    \$(\".total_price_cart_empty\").html(\$(\".total_price_cart\").html());
                    \$(\"img.lazy\").lazyload({
                        threshold : 50
                    });
                    \$(window).load(function(){
                        \$(\"html,body\").trigger(\"scroll\");
                    });
                    \$this.button('reset');
                    //hide modal after add to cart
                    \$('#productSetailsModalAjax'+id).modal('hide');


                }
            });



        }
    }

</script>
", "FrontendBundle:Partial:produit.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/Partial/produit.html.twig");
    }
}
