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

/* @Frontend/Default/detailsproduit.html.twig */
class __TwigTemplate_706fe59156e6067abaa3720d952f0af91d8b6a69bc7e722fda50422453d1de8d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "FrontendBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/Default/detailsproduit.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle::base.html.twig", "@Frontend/Default/detailsproduit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pickmeup.css?v2"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        if (($context["produit"] ?? $this->getContext($context, "produit"))) {
            // line 10
            echo "<div class=\"container\" style=\"padding: 2%;margin-top: 100px;background-color: #ffffff;max-width: 1600px\" >



    <div class=\"row divproddetail\" >
        <div class=\"alert alert-danger\" role=\"alert\" id=\"divmodal-panier\" style=\"display: none\" >
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("quantite_demander_indispo"), "html", null, true);
            echo "
                ";
            // line 17
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nomen", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nom", []), "html", null, true);
            }
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("est"), "html", null, true);
            echo "
            <span id=\"idinputtwo";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo "\">  </span>

            <button type=\"button\" class=\"close\" id=\"closeAlertq\" aria-label=\"Close\">
                <span aria-hidden=\"true\">×</span>
            </button>
        </div>
        <div class=\"alert alert-danger\" role=\"alert\" id=\"divquantity-max\" style=\"display: none\" >

            ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pouvez_commander_au_max"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "maxcommande", []), "html", null, true);
            echo "
            ";
            // line 27
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nomen", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nom", []), "html", null, true);
            }
            // line 28
            echo "
            <button type=\"button\" class=\"close\"  aria-label=\"Close\" id=\"closeAlert\">
                <span aria-hidden=\"true\">×</span>
            </button>
        </div>


        <div class=\" col-lg-6 col-md-6 col-sm-12 col-xs-12\" >
            <div class=\"prodname\" >
                ";
            // line 37
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nomen", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nom", []), "html", null, true);
            }
            // line 38
            echo "
                <br>

                <span class=\"cat_badge\" style=\"margin-left: -5px !important;margin-top: 30px !important;\" >
                  ";
            // line 42
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "categorie", []), "nomEn", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "categorie", []), "nom", []), "html", null, true);
            }
            // line 43
            echo "                  </span>

            </div>

            <img style=\"width: 80%!important;border-top-left-radius: 10px;border-top-right-radius: 10px;max-height: 400px;min-height:200px;height: 80%!important;object-fit: contain !important;  display: block;
              margin-left: auto;  margin-right: auto\"  src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
            echo "\"
              data-original=\"";
            // line 49
            if ((($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []) && $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", [])) && ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []) != ""))) {
                echo "/uploads/produits/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []), "html", null, true);
                echo "
              ";
            } else {
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
                echo " ";
            }
            echo "\" alt=\"img\"    class=\"img-responsive lazy\" >

            <div class=\" price  div_card\" style=\"
            ";
            // line 53
            if ((($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "is_promo", [], "array") == false) || (($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "is_promo", [], "array") == true) && ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "numProduitPromo", []) > 1)))) {
                // line 54
                echo "                    padding-bottom: 22px;
            ";
            }
            // line 55
            echo "\">
                          <span class=\"old-price\" style=\"float:left\">
                                              ";
            // line 57
            if (($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "numProduitPromo", []) == 1))) {
                // line 58
                echo "                                                  ";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
                                              ";
            } elseif ((($this->getAttribute($this->getAttribute(            // line 59
($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prixPromo", [])) && ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prixPromo", []) > 0))) {
                // line 60
                echo "                                                  ";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
                                              ";
            }
            // line 62
            echo "                                                </span>
                <br>
                <span class=\"\"
                      style=\"float:left\"> ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "</span>


            </div>

        </div>
        <div class=\" col-lg-6 col-md-6 col-sm-12 col-xs-12\">

            <div class=\"row\" >
                <br>
                <div class=\"col-lg-6 col-md-6 col-xs-4 col-sm-4\">

                    ";
            // line 96
            echo "
                </div>


                <div class=\" col-lg-6 col-md-6 col-xs-8 col-sm-8 text-right\">
                    <div class=\"row\" id=\"quantite";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo "\"    name=\"quantite";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo "\" disabled=\"none\" hidden>
                        <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                            <div class=\"input-group group_qt\">
                                <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo "\"
                                                                        onclick=\"deleteArticleQuantity(";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prix", []), "html", null, true);
            echo ")\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t                             \t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t                        \t</button>
                                                            </span>
                                <input style=\" height: 4.5rem;!important;\" type=\"text\"
                                       id=\"qte";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo "\"
                                       name=\"qte";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo "\"
                                       class=\"form-control input-number text-center\" ";
            // line 116
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), [], "array", true, true)) {
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), [], "array"), "html", null, true);
                echo "\" ";
            } else {
                echo " value=\"0\" ";
            }
            // line 117
            echo "                                       min=\"1\" max=\"100\" disabled>
                                <span class=\"input-group-btn\">
                                                                <button id=\"addArticle";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo "\"
                                                                        onclick=\"addArticle(";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "quantite", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "maxcommande", []), "html", null, true);
            echo ")\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"plus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
                                                            </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"\" id=\"addcart";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo "\"   name=\"addcart";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
            echo "\">
                        ";
            // line 131
            if (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "quantite", []) == 0)) {
                // line 132
                echo "                            <button disabled type=\"button\"
                                    style=\" background-color: #8c8586; color: white; border: 1px solid #8c8586; padding: 0 0;height: 43px; width: 43px; margin-bottom: 8px;\"
                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
\t\t\t\t\t\t\t\t     <span class=\"add2cart\">
\t\t\t\t\t\t\t\t\t <i style=\"font-size: 17px;\" class=\"glyphicon glyphicon-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t  </span>
                            </button>
                        ";
            } else {
                // line 140
                echo "
                            ";
                // line 141
                if ((twig_length_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", [])) > 0)) {
                    // line 142
                    echo "
                                <div class=\"colordet\">
                                    <ul class=\"swatches Color\" name=\"couleur";
                    // line 144
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo "\"
                                        id=\"couleur";
                    // line 145
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo "\">
                                        ";
                    // line 146
                    $context["i"] = 1;
                    // line 147
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["couleur"]) {
                        // line 148
                        echo "                                            ";
                        if ((($context["i"] ?? $this->getContext($context, "i")) == 1)) {
                            // line 149
                            echo "                                                <li class=\"selected\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                            echo "\"
                                                    onclick=\"changeImagecouleur('";
                            // line 150
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "id", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "image", []), "html", null, true);
                            echo "')\">
                                                    <a style=\"background-color:";
                            // line 151
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                            echo ";color:transparent\"></a>
                                                </li>
                                            ";
                        } else {
                            // line 154
                            echo "                                                <li value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                            echo "\"
                                                    onclick=\"changeImagecouleur('";
                            // line 155
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "id", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "image", []), "html", null, true);
                            echo "')\">
                                                    <a style=\"background-color:";
                            // line 156
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                            echo ";color:transparent\"></a>
                                                </li>
                                            ";
                        }
                        // line 159
                        echo "                                            ";
                        $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                        // line 160
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couleur'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 161
                    echo "                                    </ul>
                                </div>
                            ";
                }
                // line 164
                echo "                            <!--/.color-details-->

                            <div class=\"colordet\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-6 col-xs-6\" style=\"margin-top: 2px\">
                                        ";
                // line 172
                echo "
                                        ";
                // line 173
                if ((twig_length_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", [])) > 0)) {
                    // line 174
                    echo "                                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"deleteArticle";
                    // line 176
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo "\"
                                                                    onclick=\"moinsquantity(";
                    // line 177
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo ")\"
                                                                    type=\"button\"
                                                                    class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                    style=\"border: 1px solid #999;  border-radius: 5px;\" data-type=\"minus\"
                                                                    data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <input style=\"font-family: Roboto-Regular,sans-serif;font-size: 14px;font-weight: bold;  background: transparent;border:none\" type=\"text\"
                                                       id=\"quantitymodal";
                    // line 186
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo "\"
                                                       name=\"quantitymodal";
                    // line 187
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo "\"
                                                       class=\"form-control input-number text-center\" ";
                    // line 188
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), [], "array", true, true)) {
                        echo " value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), [], "array"), "html", null, true);
                        echo "\" ";
                    } else {
                        echo " value=\"1\" ";
                    }
                    // line 189
                    echo "                                                       min=\"1\" max=\"100\" disabled>

                                                <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button onclick=\"plusquantity(";
                    // line 192
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo ")\"
                                                                    type=\"button\"
                                                                    class=\"quantity-right-plus btn btn-success btn-number btn_plus_moins\"
                                                                    style=\"border: 1px solid #999;  border-radius: 5px;\" data-type=\"plus\"
                                                                    data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </div>


                                        ";
                }
                // line 204
                echo "
                                    </div>
                                    ";
                // line 206
                if ((twig_length_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", [])) > 0)) {
                    // line 207
                    echo "
                                        <div class=\"col-lg-6 col-sm-6 col-xs-6\">
                                            ";
                    // line 212
                    echo "                                            <select class=\"form-control \" id=\"sizes";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo "\"
                                                    name=\"sizes";
                    // line 213
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo "\"
                                                    onchange=\"changeSize(";
                    // line 214
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo ")\"
                                                    style=\"border-radius: 0px;height: 43px; font-family: Roboto-Regular,sans-serif\"  >
                                                <option disabled  style=\" color:#374649;font-family: Roboto-Regular,sans-serif;font-size: 12px;font-weight: 400 \" selected>
                                                    ";
                    // line 217
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir la taille"), "html", null, true);
                    echo "</option>
                                                ";
                    // line 218
                    if ((twig_length_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", [])) > 0)) {
                        // line 219
                        echo "                                                    ";
                        $context["i"] = 1;
                        // line 220
                        echo "                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", []), "0", [], "array"), "sizes", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                            // line 221
                            echo "                                                        ";
                            if ((($context["i"] ?? $this->getContext($context, "i")) == 1)) {
                                // line 222
                                echo "                                                            <option value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                                echo "\"
                                                                    selected>";
                                // line 223
                                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                                echo "</option>
                                                        ";
                            } else {
                                // line 225
                                echo "                                                            <option value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                                echo "</option>

                                                        ";
                            }
                            // line 228
                            echo "                                                        ";
                            $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                            // line 229
                            echo "
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 231
                        echo "                                                ";
                    }
                    // line 232
                    echo "                                            </select>
                                        </div>

                                    ";
                }
                // line 236
                echo "
                                </div>
                                ";
                // line 238
                if ((twig_length_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", [])) == 0)) {
                    // line 239
                    echo "                                    <div class=\"row\" id=\"quantite";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo "\"
                                         name=\"quantite";
                    // line 240
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo "\" disabled=\"none\" style=\"\" >

                                        <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                            <div class=\"input-group group_qt\">
                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle";
                    // line 245
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo "\"
                                                                        onclick=\"moinquantityD(";
                    // line 246
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo ")\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
                                                                    <span class=\"glyphicon glyphicon-minus\"></span>
                                                                </button>
                                                            </span>
                                                <input style=\" height: 4.5rem;!important;\" type=\"text\"
                                                       id=\"qte";
                    // line 254
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo "\"
                                                       name=\"qte";
                    // line 255
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo "\"
                                                       class=\"form-control input-number text-center\" ";
                    // line 256
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), [], "array", true, true)) {
                        echo " value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), [], "array"), "html", null, true);
                        echo "\" ";
                    } else {
                        echo " value=\"0\" ";
                    }
                    // line 257
                    echo "                                                       min=\"1\" max=\"100\" disabled>
                                                <span class=\"input-group-btn\">
                                                                <button id=\"addArticle";
                    // line 259
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo "\"
                                                                        onclick=\"plusquantityD(";
                    // line 260
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
                // line 275
                echo "                            </div>
                            <!-- productFilter -->


                            <div class=\"colordet\" >
                                ";
                // line 280
                if ((twig_length_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "couleurs", [])) > 0)) {
                    // line 281
                    echo "                                    <button onclick=\"addArticleSize(";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo ")\"
                                            class=\"  btn_card col-lg-6\" style=\"float: right\" type=\"submit\"
                                            id=\"btn-panier\"
                                            data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                                <span class=\"add2cart\">
                                                                <span class=\"btnspanadd\">";
                    // line 286
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                    echo " <i class=\"fa fa-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t                    </span>
                                    </button>
                                ";
                } else {
                    // line 290
                    echo "                                    <button onclick=\"addArticlee(";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "quantite", []), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "maxcommande", []), "html", null, true);
                    echo ")\"
                                            class=\"  btn_card col-lg-6 \" style=\"float: right\" type=\"submit\"
                                            id=\"addArticlee";
                    // line 292
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "html", null, true);
                    echo "\"
                                            data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                                <span class=\"add2cart\">
                                                                <span class=\"btnspanadd\">";
                    // line 295
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                    echo " <i class=\"fa fa-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t                    </span>
                                    </button>
                                ";
                }
                // line 299
                echo "                            </div>

                            <!--/.cart-actions-->

                  ";
            }
            // line 304
            echo "                    </div>
                </div>
            </div>

            <br>



            ";
            // line 312
            if (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "description", []) || $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "description", []))) {
                // line 313
                echo "                <br>
            <div class=\"divspandesc\">
                <span class=\"spandesc\">";
                // line 315
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("descrip"), "html", null, true);
                echo "</span>
                <hr >


                <span class=\"spandesc\">
                        ";
                // line 320
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "descriptionen", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "description", []), "html", null, true);
                }
                // line 321
                echo "                         </span>



            </div>
            ";
            }
            // line 327
            echo "
            ";
            // line 328
            if ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "file", [])) {
                // line 329
                echo "                <br>
                <a  target=\"_blank\" class=\"spandesc\"
                    href=\"";
                // line 331
                echo twig_escape_filter($this->env, ($context["legal_notice_directory"] ?? $this->getContext($context, "legal_notice_directory")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "file", []), "html", null, true);
                echo "\">

                    <svg _ngcontent-dxq-c64=\"\" height=\"20\" viewBox=\"0 0 512 512\" width=\"20\" xmlns=\"http://www.w3.org/2000/svg\"><g _ngcontent-dxq-c64=\"\" id=\"Solid\"><path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\" d=\"m239.029 384.97a24 24 0 0 0 33.942 0l90.509-90.509a24 24 0 0 0 0-33.941 24 24 0 0 0 -33.941 0l-49.539 49.539v-262.059a24 24 0 0 0 -48 0v262.059l-49.539-49.539a24 24 0 0 0 -33.941 0 24 24 0 0 0 0 33.941z\"></path><path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\" d=\"m464 232a24 24 0 0 0 -24 24v184h-368v-184a24 24 0 0 0 -48 0v192a40 40 0 0 0 40 40h384a40 40 0 0 0 40-40v-192a24 24 0 0 0 -24-24z\"></path></g></svg>
                    ";
                // line 334
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fiche Technique"), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 337
            echo "




        </div>

    </div>




</div>
    ";
        }
        // line 351
        echo "    ";
        if (($context["produits"] ?? $this->getContext($context, "produits"))) {
            // line 352
            echo "
<div class=\"container\" style=\"padding-right: 2%;padding-left: 2%;margin-top: 100px;background-color: #F7F9FA;max-width: 1600px;padding-bottom: 10px;padding-top: 10px\" >


    <h3 class=\"  style2 section-title  text-left\">
        <span >";
            // line 357
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("prodsimilaire"), "html", null, true);
            echo " </span></h3>



    <div id=\"owl-demo\" class=\"owl-carousel owl-theme\" >
        ";
            // line 362
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 363
                echo "
        <div class=\"item \" >
            <div class=\"product\" >


                <a ";
                // line 368
                if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
                    echo " onclick=\"addfavoris(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                    echo ")\"
                ";
                } else {
                    // line 370
                    echo "                    ";
                    // line 371
                    echo "                    href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login", ["produitid" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\"

                ";
                }
                // line 374
                echo "                        class=\" add-fav tooltipHere
                                    ";
                // line 375
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["favoris"]);
                foreach ($context['_seq'] as $context["_key"] => $context["favoris"]) {
                    // line 376
                    echo "                                    ";
                    if ((($this->getAttribute($context["favoris"], "utilisateur", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) && ($this->getAttribute($context["favoris"], "produit", []) == $context["produit"]))) {
                        echo "active";
                    }
                    // line 377
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favoris'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\"
                        data-placement=\"left\" >
                    <i class=\"glyphicon glyphicon-heart\"></i>
                </a>

                <div class=\"image\" style=\"width: 100%!important;height: 70%!important;\">
                    ";
                // line 383
                if (($this->getAttribute($context["produit"], "description", []) || $this->getAttribute($context["produit"], "descriptionen", []))) {
                    // line 384
                    echo "                    <div class=\"quickview\" >
                        <a  class=\"btn btn-xs btn-quickview\" href=\"";
                    // line 385
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_produits", ["produitid" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\"
                        >";
                    // line 386
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details"), "html", null, true);
                    echo " </a>
                    </div>
                    ";
                }
                // line 389
                echo "
                    <img style=\"width: 100%!important;border-top-left-radius: 10px;border-top-right-radius: 10px;max-height: 300px;min-height:300px;height: 100%!important;object-fit: contain  !important\"
                         src=\"";
                // line 391
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
                echo "\"
                         data-original=\"";
                // line 392
                if ((($this->getAttribute($context["produit"], "image", []) && $this->getAttribute($context["produit"], "image", [])) && ($this->getAttribute($context["produit"], "image", []) != ""))) {
                    echo "/uploads/produits/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "image", []), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 393
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
                    echo " ";
                }
                echo "\" alt=\"img\"
                         class=\"img-responsive lazy\" >
                    ";
                // line 395
                if (($this->getAttribute($context["produit"], "quantite", []) > 0)) {
                    // line 396
                    echo "
                        ";
                    // line 397
                    if ((($this->getAttribute($this->getAttribute($context["produit"], "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($context["produit"], "prixPromo", [])) && ($this->getAttribute($context["produit"], "prixPromo", []) > 0))) {
                        // line 398
                        echo "                            <div class=\"promotion\">
                                <span class=\"discount\" >";
                        // line 399
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion"), "html", null, true);
                        echo "</span>
                            </div>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 401
$context["produit"], "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($context["produit"], "numProduitPromo", []) == 1))) {
                        // line 402
                        echo "                            <div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\" >";
                        // line 403
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion"), "html", null, true);
                        echo "
                                            ";
                        // line 404
                        echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($context["produit"], "finalPrice", []), "percentage", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
                        echo "%
\t\t\t\t\t\t\t\t\t\t</span>
                            </div>

                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 408
$context["produit"], "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($context["produit"], "numProduitPromo", []) > 1))) {
                        // line 409
                        echo "                            <div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\" >
                                            ";
                        // line 411
                        echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($context["produit"], "finalPrice", []), "percentage", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
                        echo "%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        ";
                        // line 412
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sur le"), "html", null, true);
                        echo "
                                            ";
                        // line 413
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "numProduitPromo", []), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ème"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t</span>
                            </div>
                        ";
                    }
                    // line 417
                    echo "                    ";
                } else {
                    // line 418
                    echo "                        <div class=\"promotion\">
                            <span class=\"horsstock\" style=\"    font-weight: 400;\">\t";
                    // line 419
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HORS STOCK"), "html", null, true);
                    echo "\t</span>
                        </div>
                    ";
                }
                // line 422
                echo "                </div>
                <div style=\"height: 30%!important;position: relative\">


                    <div class=\"line_gradient\"></div>


                    <div class=\"description\" >
                        ";
                // line 430
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nomen", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", []), "html", null, true);
                }
                // line 431
                echo "
                    </div>
                    <span class=\"cat_badge\" >
                                        ";
                // line 434
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "categorie", []), "nomEn", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "categorie", []), "nom", []), "html", null, true);
                }
                // line 435
                echo "                                    </span>





                    <div class=\"row\" style=\"position: absolute;  bottom: 10px;left: 0;right: 0\">
                        <div class=\"col-lg-6 col-md-6 col-xs-6 col-sm-6\">
                            <div class=\" price  div_card\" style=\"padding-left: 14px;
                            ";
                // line 444
                if ((($this->getAttribute($this->getAttribute($context["produit"], "finalPrice", []), "is_promo", [], "array") == false) || (($this->getAttribute($this->getAttribute($context["produit"], "finalPrice", []), "is_promo", [], "array") == true) && ($this->getAttribute($context["produit"], "numProduitPromo", []) > 1)))) {
                    // line 445
                    echo "                                    padding-bottom: 22px;
                            ";
                }
                // line 446
                echo "\">
                                            <span class=\"old-price\" style=\"float:left\">
                                              ";
                // line 448
                if (($this->getAttribute($this->getAttribute($context["produit"], "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($context["produit"], "numProduitPromo", []) == 1))) {
                    // line 449
                    echo "                                                  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($context["produit"], "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                    echo "
                                              ";
                } elseif ((($this->getAttribute($this->getAttribute(                // line 450
$context["produit"], "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($context["produit"], "prixPromo", [])) && ($this->getAttribute($context["produit"], "prixPromo", []) > 0))) {
                    // line 451
                    echo "                                                  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($context["produit"], "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                    echo "
                                              ";
                }
                // line 453
                echo "                                                </span>
                                <br>
                                <span  class=\"\" style=\"float:left\"> ";
                // line 455
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($context["produit"], "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "</span>



                            </div>
                        </div>
                        <div class=\"div_card col-lg-6 col-md-6 col-xs-6 col-sm-6 text-right\"
                             style=\"padding-right: 20px;padding-left: 23px;\">
                            <div class=\"row\" id=\"quantite";
                // line 463
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\"    name=\"quantite";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\" disabled=\"none\" hidden>

                                <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                    <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle";
                // line 469
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\"
                                                                        onclick=\"deleteArticleQuantity(";
                // line 470
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", []), "html", null, true);
                echo ")\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t                             \t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t                        \t</button>
                                                            </span>
                                        <input style=\" height: 4.5rem;!important;\" type=\"text\"
                                               id=\"qte";
                // line 478
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\"
                                               name=\"qte";
                // line 479
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\"
                                               class=\"form-control input-number text-center\" ";
                // line 480
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute($context["produit"], "id", []), [], "array", true, true)) {
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute($context["produit"], "id", []), [], "array"), "html", null, true);
                    echo "\" ";
                } else {
                    echo " value=\"0\" ";
                }
                // line 481
                echo "                                               min=\"1\" max=\"100\" disabled>
                                        <span class=\"input-group-btn\">
                                                                <button id=\"addArticle";
                // line 483
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\"
                                                                        onclick=\"addArticle(";
                // line 484
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "maxcommande", []), "html", null, true);
                echo ")\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"plus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
                                                            </span>
                                    </div>
                                </div>

                            </div>


                            <div class=\"\" id=\"addcart";
                // line 497
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\"   name=\"addcart";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\">
                                ";
                // line 498
                if (($this->getAttribute($context["produit"], "quantite", []) == 0)) {
                    // line 499
                    echo "                                    <button disabled type=\"button\"
                                            style=\" background-color: #8c8586; color: white; border: 1px solid #8c8586; padding: 0 0;
    height: 43px;
    width: 43px;
    margin-bottom: 8px;

\"
                                            data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
\t\t\t\t\t\t\t\t                        \t<span class=\"add2cart\">
\t\t\t\t\t\t\t\t\t                      \t<i style=\"font-size: 17px;\" class=\"glyphicon glyphicon-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t                       </span>
                                    </button>
                                ";
                } else {
                    // line 512
                    echo "
                                    ";
                    // line 513
                    if ((twig_length_filter($this->env, $this->getAttribute($context["produit"], "couleurs", [])) > 0)) {
                        // line 514
                        echo "
                                        <a class=\" btn_card\" style=\"padding-top: 15px; padding-bottom: 15px;\"
                                           href=\"";
                        // line 516
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_produits", ["produitid" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\"  >
                                                         <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> ";
                        // line 518
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                        echo " <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                                        </a>

                                    ";
                    } else {
                        // line 524
                        echo "
                                    <button type=\"submit\" class=\"btn_card\"
                                            ";
                        // line 537
                        echo "
                                            id=\"btn-panier";
                        // line 538
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                        echo "\"
                                            onclick=\"enabledivquantity(";
                        // line 539
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", []), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "maxcommande", []), "html", null, true);
                        echo ")\"

                                            data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                        <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> ";
                        // line 543
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                        echo " <i class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                                    </button>
                                    ";
                    }
                    // line 547
                    echo "

                                ";
                }
                // line 550
                echo "                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>



            <div class=\"modal fade  \" id=\"modal-panier";
                // line 563
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\"
                 aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\" style=\"background: #ED0000;\">
                            <h4 class=\"modal-title\" id=\"exampleModalLongTitle\"
                                style=\"margin-top: 11px;\">";
                // line 569
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                echo " <i
                                        class=\"fa fa-shopping-cart\"></i>
                            </h4>
                            <button style=\"opacity: 1.2;margin-top: -36px;margin-right: -10px;background-color: #ED0000\"
                                    type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body text-center\">

                            <h3>";
                // line 579
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("quantite_demander_indispo"), "html", null, true);
                echo "
                                ";
                // line 580
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nomen", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", []), "html", null, true);
                }
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("est"), "html", null, true);
                echo "
                                <span id=\"idinputtwo";
                // line 581
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\">  </span></h3>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
            </div>
            <div class=\"modal fade\" id=\"modal-quantity-max";
                // line 587
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\"
                 aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\" style=\"background: #ED0000;\">
                            <h4 class=\"modal-title text-left\" id=\"exampleModalLongTitle\"
                                style=\"margin-top: 11px;\">

                            </h4>
                            <button style=\"opacity: 1.2;margin-top: -26px;margin-right: -10px;background-color: #ED0000\"
                                    type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body text-center\">
                            <h3>
                                ";
                // line 603
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pouvez_commander_au_max"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "maxcommande", []), "html", null, true);
                echo "
                                ";
                // line 604
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nomen", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", []), "html", null, true);
                }
                echo "</h3>


                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 615
            echo "
    </div>
</div>
    ";
        }
        // line 619
        echo "

    <style>
        .owl-buttons {
            display: block;
        }
        .owl-carousel:hover .owl-buttons {
            display: block;
        }

        .owl-item {
            text-align: center;
            padding-left:10px;
            padding-right:10px;
        }


        .owl-theme .owl-controls .owl-buttons div {
            background: transparent;
            color: #ed0000;
            font-size: 40px;
            line-height: 50px;
            margin-top: 150px;
            position: absolute;
            top: 0;

        }



        .owl-theme .owl-controls .owl-buttons .owl-prev {
            left: 0;
            padding-left: 20px;
        }
        .owl-theme .owl-controls .owl-buttons .owl-next {
            right: 0;
            padding-right: 20px;
        }
        .modalerror {
            top: 50px;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 10052;
        }

    </style>

    ";
        // line 672
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>


    <script>
        \$(document).ready(function() {

            var owl = \$(\"#owl-demo\");
            owl.owlCarousel({

                //  itemsDesktop : true,
                //  itemsDesktopSmall : false,
                /// itemsTablet: false,
                // itemsMobile : false,
                startPosition: 0,
                rtl: false,

                items : 4,
                navigation : true,
                loop: false,
                autoplay: true,
                autoplayHoverPause: true,
                navigationText : ['<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-left fa-stack-1x fa-inverse\"></i></span>','<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-right fa-stack-1x fa-inverse\"></i></span>'],

                itemsDesktop : [1100,3], //5 items between 1100px and 901px
                itemsDesktopSmall : [900,2], // betweem 900px and 601px
                itemsTablet: [700,1], //2 items between 600 and 0
                itemsMobile : [500,1] // itemsMobile disabled - inherit from itemsTablet option

            });

            // Custom Navigation Events
            \$(\".owl-carousel-arrows .next\").click(function() {
                owl.trigger('owl.next');
            });

            \$(\".owl-carousel-arrows .prev\").click(function() {
                owl.trigger('owl.prev');
            });
        });
    </script>

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
        // line 729
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
                    \$(\"select\").select2();
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
        // line 762
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
                '    border-color: #ED0000;\\n' +
                '    border-style: solid;';

        }
    </script>
    <script type=\"text/javascript\">

        \$('#closeAlert').click(function(){
            \$(\"#divquantity-max\").hide();


        });
        \$('#closeAlertq').click(function(){

            \$(\"#divmodal-panier\").hide();

        });

        function addArticleSize(id) {

            var selectsizes = document.getElementById(\"sizes\" + id);
            var sizeid = selectsizes.options[selectsizes.selectedIndex].value;
            var qte = parseInt(\$(\"#quantitymodal\" + id).val());
            //alert(qte);

            \$.ajax({
                url: \"";
        // line 828
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("size_from_id");
        echo "\",
                dataType: 'Json',
                data: {\"sizeid\": sizeid},
                type: 'GET',
                success: function (data) {
                    var quantite = data
                    if (qte  > quantite) {

                        //  alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                        document.getElementById(\"idinputtwo\"+id).innerHTML = quantite;

                        \$(\"document\").ready(function () {

                            //was  \$('#modal-panier' + id).modal({backdrop: 'static', keyboard: false});
                            \$('#modal-panier' + id).modal(\"show\");



                        })


                    } else {
                        addArticlewithsize(id, sizeid, qte);
                        \$('#productSetailsModalAjax'+id).modal('hide');

                    }

                }
            });

        }

        function changeSize(id) {
            //\$(\"#quantitymodal\" + id).val(1);
        }

        function enabledivquantity(id, quantite, max) {
            var qte = parseInt(\$(\"#qte\" + id).val());

            if (qte + 1 > quantite) {

                //alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                document.getElementById(\"idinputtwo\"+id).innerHTML = quantite;

                \$(\"document\").ready(function () {
                  //  \$('#modal-panier' + id).modal(\"show\");
                    \$(\"#divmodal-panier\").show();

                })
            } else if (qte + 1 > max) {
                \$(\"document\").ready(function () {
                   // \$('#modal-quantity-max' + id).modal(\"show\");

                    \$(\"#divquantity-max\").show();

                })
            } else if (qte >= 0) {
                var quantities = document.querySelectorAll(\"[id=quantite\" + id+\"]\");
                var btncarts = document.querySelectorAll(\"[id=addcart\" + id+\"]\");
                for(var i = 0; i < btncarts.length; i++){
                    btncarts[i].style.display = \"none\";
                }
                for(var i = 0; i < quantities.length; i++){
                    quantities[i].style.display = \"block\";
                }


                addArticle(id, quantite, max);
            }
        }

        function plusquantity(id) {

            var selectsizes = document.getElementById(\"sizes\" + id);
            var sizeid = selectsizes.options[selectsizes.selectedIndex].value;
            var qte = parseInt(\$(\"#quantitymodal\" + id).val())  ;

            \$.ajax({
                url: \"";
        // line 906
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("size_from_id");
        echo "\",
                dataType: 'Json',
                data: {\"sizeid\": sizeid},
                type: 'GET',
                success: function (data) {
                    var quantite = data;
                    var qtee = parseInt(\$(\"#quantitymodal\" + id).val())+1  ;

                    if (qtee  > quantite) {

                        //alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                        document.getElementById(\"idinputtwo\"+id).innerHTML = quantite;

                        \$(\"document\").ready(function () {

                           // \$('#modal-panier' + id).modal(\"show\");
                            \$(\"#divmodal-panier\").show();

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


            /*
            was befor my change
            var qte = parseInt(\$(\"#quantitymodal\" + id).val()) + 1;
            var qte_input = document.querySelectorAll(\"[id=quantitymodal\" + id+\"]\");
            for(var i = 0; i < qte_input.length; i++){
                qte_input[i].value = qte;
            }*/
        }

        function moinsquantity(id) {
            var qte = parseInt(\$(\"#quantitymodal\" + id).val()) - 1;
            if (qte > 0) {
                \$(\"#quantitymodal\"+id).val(qte);
            } else {
                \$(\"document\").ready(function () {
                    \$('#modal-quantity').modal({backdrop: 'static', keyboard: false});
                })

            }
        }
        <!-- ---- -->

        function plusquantityD(id,quantity,max) {

            var qte = parseInt(\$(\"#qte\" + id).val()) + 1;
            if(qte  > quantity  ){
                document.getElementById(\"idinputtwo\"+id).innerHTML = quantity;

                \$(\"document\").ready(function () {
              //was      \$('#modal-panier' + id).modal(\"show\");
                    \$(\"#divmodal-panier\").show();


                })
            }
            else if (qte > max) {
                \$(\"document\").ready(function () {

                  //was  \$('#modal-quantity-max' + id).modal(\"show\");
                    \$(\"#divquantity-max\").show();

                })
            }else{
                //  \$(\"#qte\" + id).val(qte);
                var qte_input = document.querySelectorAll(\"[id=qte\" + id+\"]\");

                for(var i = 0; i < qte_input.length; i++){
                    qte_input[i].value = qte;
                }
            }

        }

        function moinquantityD(id,quantity,max) {

            var qte = parseInt(\$(\"#qte\" + id).val()) -1;
            //  \$(\"#qte\" + id).val(qte);
            var qte_input = document.querySelectorAll(\"[id=qte\" + id+\"]\");

            if (qte > 0) {
                for(var i = 0; i < qte_input.length; i++){
                    qte_input[i].value = qte;
                }
            } else {
                \$(\"document\").ready(function () {
                    \$('#modal-quantity').modal({backdrop: 'static', keyboard: false});
                })

            }
        }
        function addArticlee(id, quantity,max) {
            var qte = parseInt(  \$(\"#qte\"+id).val());
            var qte_input = document.querySelectorAll(\"[id=qte\" + id+\"]\");


            if(qte  > quantity  ){
                document.getElementById(\"idinputtwo\"+id).innerHTML = quantity;

                \$(\"document\").ready(function () {
                    \$(\"#divmodal-panier\").show();
                  //  \$(\"divmodal-panier\").toggle();

                  //was  \$('#modal-panier' + id).modal(\"show\");

                })
            }
            else if (qte ===0) {
                \$(\"document\").ready(function () {

                   // \$(\"#div-chooseqt\").show();


                })
            }
            else if (qte > max) {
                \$(\"document\").ready(function () {

                   \$(\"#divquantity-max\").show();

                  //was  \$('#modal-quantity-max' + id).modal(\"show\");

                })
            }
            else {

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
                     //  \$this.button('reset');
                        window.location.reload();
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
        return "@Frontend/Default/detailsproduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1561 => 906,  1480 => 828,  1411 => 762,  1375 => 729,  1316 => 672,  1266 => 619,  1260 => 615,  1239 => 604,  1234 => 603,  1215 => 587,  1206 => 581,  1196 => 580,  1192 => 579,  1179 => 569,  1170 => 563,  1155 => 550,  1150 => 547,  1143 => 543,  1132 => 539,  1128 => 538,  1125 => 537,  1121 => 524,  1112 => 518,  1107 => 516,  1103 => 514,  1101 => 513,  1098 => 512,  1083 => 499,  1081 => 498,  1075 => 497,  1055 => 484,  1051 => 483,  1047 => 481,  1039 => 480,  1035 => 479,  1031 => 478,  1018 => 470,  1014 => 469,  1003 => 463,  992 => 455,  988 => 453,  982 => 451,  980 => 450,  975 => 449,  973 => 448,  969 => 446,  965 => 445,  963 => 444,  952 => 435,  946 => 434,  941 => 431,  935 => 430,  925 => 422,  919 => 419,  916 => 418,  913 => 417,  905 => 413,  901 => 412,  897 => 411,  893 => 409,  891 => 408,  884 => 404,  880 => 403,  877 => 402,  875 => 401,  870 => 399,  867 => 398,  865 => 397,  862 => 396,  860 => 395,  853 => 393,  846 => 392,  842 => 391,  838 => 389,  832 => 386,  828 => 385,  825 => 384,  823 => 383,  810 => 377,  805 => 376,  801 => 375,  798 => 374,  791 => 371,  789 => 370,  782 => 368,  775 => 363,  771 => 362,  763 => 357,  756 => 352,  753 => 351,  737 => 337,  731 => 334,  723 => 331,  719 => 329,  717 => 328,  714 => 327,  706 => 321,  700 => 320,  692 => 315,  688 => 313,  686 => 312,  676 => 304,  669 => 299,  662 => 295,  656 => 292,  646 => 290,  639 => 286,  630 => 281,  628 => 280,  621 => 275,  599 => 260,  595 => 259,  591 => 257,  583 => 256,  579 => 255,  575 => 254,  564 => 246,  560 => 245,  552 => 240,  547 => 239,  545 => 238,  541 => 236,  535 => 232,  532 => 231,  525 => 229,  522 => 228,  513 => 225,  508 => 223,  503 => 222,  500 => 221,  495 => 220,  492 => 219,  490 => 218,  486 => 217,  480 => 214,  476 => 213,  471 => 212,  467 => 207,  465 => 206,  461 => 204,  446 => 192,  441 => 189,  433 => 188,  429 => 187,  425 => 186,  413 => 177,  409 => 176,  405 => 174,  403 => 173,  400 => 172,  393 => 164,  388 => 161,  382 => 160,  379 => 159,  373 => 156,  365 => 155,  360 => 154,  354 => 151,  346 => 150,  341 => 149,  338 => 148,  333 => 147,  331 => 146,  327 => 145,  323 => 144,  319 => 142,  317 => 141,  314 => 140,  304 => 132,  302 => 131,  296 => 130,  279 => 120,  275 => 119,  271 => 117,  263 => 116,  259 => 115,  255 => 114,  242 => 106,  238 => 105,  229 => 101,  222 => 96,  207 => 65,  202 => 62,  196 => 60,  194 => 59,  189 => 58,  187 => 57,  183 => 55,  179 => 54,  177 => 53,  169 => 50,  162 => 49,  158 => 48,  151 => 43,  145 => 42,  139 => 38,  133 => 37,  122 => 28,  116 => 27,  110 => 26,  99 => 18,  89 => 17,  85 => 16,  77 => 10,  74 => 9,  68 => 8,  58 => 5,  52 => 3,  46 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'FrontendBundle::base.html.twig' %}
{% block stylesheets %}
    {{ parent() }}

    <link href=\"{{ asset('assets/css/pickmeup.css?v2') }}\" rel=\"stylesheet\">

{% endblock stylesheets %}
{% block body %}
    {% if produit %}
<div class=\"container\" style=\"padding: 2%;margin-top: 100px;background-color: #ffffff;max-width: 1600px\" >



    <div class=\"row divproddetail\" >
        <div class=\"alert alert-danger\" role=\"alert\" id=\"divmodal-panier\" style=\"display: none\" >
            {{\"quantite_demander_indispo\" | trans}}
                {% if app.request.getLocale()  == 'en' %}{{ produit.nomen }}{% else %}{{ produit.nom }}{% endif %} {{\"est\" | trans}}
            <span id=\"idinputtwo{{ produit.id }}\">  </span>

            <button type=\"button\" class=\"close\" id=\"closeAlertq\" aria-label=\"Close\">
                <span aria-hidden=\"true\">×</span>
            </button>
        </div>
        <div class=\"alert alert-danger\" role=\"alert\" id=\"divquantity-max\" style=\"display: none\" >

            {{ \"pouvez_commander_au_max\" | trans}} {{ produit.maxcommande }}
            {% if app.request.getLocale()  == 'en' %}{{ produit.nomen }}{% else %}{{ produit.nom }}{% endif %}

            <button type=\"button\" class=\"close\"  aria-label=\"Close\" id=\"closeAlert\">
                <span aria-hidden=\"true\">×</span>
            </button>
        </div>


        <div class=\" col-lg-6 col-md-6 col-sm-12 col-xs-12\" >
            <div class=\"prodname\" >
                {% if app.request.getLocale()  == 'en' %}{{ produit.nomen }}{% else %}{{ produit.nom }}{% endif %}

                <br>

                <span class=\"cat_badge\" style=\"margin-left: -5px !important;margin-top: 30px !important;\" >
                  {% if app.request.getLocale()  == 'en' %}{{ produit.categorie.nomEn }}{% else %}{{ produit.categorie.nom }}{% endif %}
                  </span>

            </div>

            <img style=\"width: 80%!important;border-top-left-radius: 10px;border-top-right-radius: 10px;max-height: 400px;min-height:200px;height: 80%!important;object-fit: contain !important;  display: block;
              margin-left: auto;  margin-right: auto\"  src=\"{{ asset('/assets/img/default_t_e.jpg') }}\"
              data-original=\"{% if produit.image and produit.image and produit.image != \"\" %}/uploads/produits/{{ produit.image }}
              {% else %}{{ asset('/assets/img/default_t_e.jpg') }} {% endif %}\" alt=\"img\"    class=\"img-responsive lazy\" >

            <div class=\" price  div_card\" style=\"
            {% if (produit.finalPrice[\"is_promo\"] == false) or( produit.finalPrice[\"is_promo\"] == true and produit.numProduitPromo>1 ) %}
                    padding-bottom: 22px;
            {% endif %}\">
                          <span class=\"old-price\" style=\"float:left\">
                                              {% if produit.finalPrice[\"is_promo\"] and produit.numProduitPromo == 1 %}
                                                  {{ formated_price( produit.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }}
                                              {% elseif produit.finalPrice[\"is_promo\"] and produit.prixPromo and produit.prixPromo > 0 %}
                                                  {{ formated_price( produit.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }}
                                              {% endif %}
                                                </span>
                <br>
                <span class=\"\"
                      style=\"float:left\"> {{ formated_price( produit.finalPrice[\"prix\"],app.session.get(\"pays\")) }}</span>


            </div>

        </div>
        <div class=\" col-lg-6 col-md-6 col-sm-12 col-xs-12\">

            <div class=\"row\" >
                <br>
                <div class=\"col-lg-6 col-md-6 col-xs-4 col-sm-4\">

                    {#

                                <div class=\" price  div_card\" style=\"
                    {% if (produit.finalPrice[\"is_promo\"] == false) or( produit.finalPrice[\"is_promo\"] == true and produit.numProduitPromo>1 ) %}
                            padding-bottom: 22px;
                    {% endif %}\">
                          <span class=\"old-price\" style=\"float:left\">
                                              {% if produit.finalPrice[\"is_promo\"] and produit.numProduitPromo == 1 %}
                                                  {{ formated_price( produit.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}}
                                              {% elseif produit.finalPrice[\"is_promo\"] and produit.prixPromo and produit.prixPromo > 0 %}
                                                  {{ formated_price( produit.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}}
                                              {% endif %}
                                                </span>
                        <br>
                        <span  class=\"\" style=\"float:left\"> {{ formated_price( produit.finalPrice[\"prix\"],app.session.get(\"pays\"))}}</span>


                    </div>
                       #}

                </div>


                <div class=\" col-lg-6 col-md-6 col-xs-8 col-sm-8 text-right\">
                    <div class=\"row\" id=\"quantite{{ produit.id }}\"    name=\"quantite{{ produit.id }}\" disabled=\"none\" hidden>
                        <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                            <div class=\"input-group group_qt\">
                                <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle{{ produit.id }}\"
                                                                        onclick=\"deleteArticleQuantity({{ produit.id }},{{ produit.prix }})\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t                             \t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t                        \t</button>
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
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
                                                            </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"\" id=\"addcart{{ produit.id }}\"   name=\"addcart{{ produit.id }}\">
                        {% if produit.quantite == 0 %}
                            <button disabled type=\"button\"
                                    style=\" background-color: #8c8586; color: white; border: 1px solid #8c8586; padding: 0 0;height: 43px; width: 43px; margin-bottom: 8px;\"
                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
\t\t\t\t\t\t\t\t     <span class=\"add2cart\">
\t\t\t\t\t\t\t\t\t <i style=\"font-size: 17px;\" class=\"glyphicon glyphicon-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t  </span>
                            </button>
                        {% else %}

                            {% if produit.couleurs|length>0 %}

                                <div class=\"colordet\">
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

                            <div class=\"colordet\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-6 col-xs-6\" style=\"margin-top: 2px\">
                                        {#
                                          <span class=\"selected-color selectedSpan\"><strong class=\"text_details\">{{\"Quantité\" | trans}}</strong></span>
                                        #}

                                        {% if produit.couleurs|length>0 %}
                                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"deleteArticle{{ produit.id }}\"
                                                                    onclick=\"moinsquantity({{ produit.id }})\"
                                                                    type=\"button\"
                                                                    class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                    style=\"border: 1px solid #999;  border-radius: 5px;\" data-type=\"minus\"
                                                                    data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <input style=\"font-family: Roboto-Regular,sans-serif;font-size: 14px;font-weight: bold;  background: transparent;border:none\" type=\"text\"
                                                       id=\"quantitymodal{{ produit.id }}\"
                                                       name=\"quantitymodal{{ produit.id }}\"
                                                       class=\"form-control input-number text-center\" {% if app.session.get('panier')[produit.id] is defined %} value=\"{{ app.session.get('panier')[produit.id] }}\" {% else %} value=\"1\" {% endif %}
                                                       min=\"1\" max=\"100\" disabled>

                                                <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button onclick=\"plusquantity({{ produit.id }})\"
                                                                    type=\"button\"
                                                                    class=\"quantity-right-plus btn btn-success btn-number btn_plus_moins\"
                                                                    style=\"border: 1px solid #999;  border-radius: 5px;\" data-type=\"plus\"
                                                                    data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </div>


                                        {% endif %}

                                    </div>
                                    {% if produit.couleurs|length>0 %}

                                        <div class=\"col-lg-6 col-sm-6 col-xs-6\">
                                            {#
                                                                                        <span class=\"selected-color selectedSpan\"><strong class=\"text_details\">{{ \"Taille\" | trans }}</strong></span>
                                            #}
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
                                {% if produit.couleurs|length==0 %}
                                    <div class=\"row\" id=\"quantite{{ produit.id }}\"
                                         name=\"quantite{{ produit.id }}\" disabled=\"none\" style=\"\" >

                                        <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                            <div class=\"input-group group_qt\">
                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle{{ produit.id }}\"
                                                                        onclick=\"moinquantityD({{ produit.id }})\"
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
                            <!-- productFilter -->


                            <div class=\"colordet\" >
                                {% if produit.couleurs|length>0 %}
                                    <button onclick=\"addArticleSize({{ produit.id }})\"
                                            class=\"  btn_card col-lg-6\" style=\"float: right\" type=\"submit\"
                                            id=\"btn-panier\"
                                            data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                                <span class=\"add2cart\">
                                                                <span class=\"btnspanadd\">{{ \"Acheter\" | trans }} <i class=\"fa fa-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t                    </span>
                                    </button>
                                {% else %}
                                    <button onclick=\"addArticlee({{ produit.id  }},{{ produit.quantite }},{{ produit.maxcommande }})\"
                                            class=\"  btn_card col-lg-6 \" style=\"float: right\" type=\"submit\"
                                            id=\"addArticlee{{ produit.id }}\"
                                            data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                                <span class=\"add2cart\">
                                                                <span class=\"btnspanadd\">{{ \"Acheter\" | trans }} <i class=\"fa fa-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t                    </span>
                                    </button>
                                {% endif %}
                            </div>

                            <!--/.cart-actions-->

                  {% endif %}
                    </div>
                </div>
            </div>

            <br>



            {% if produit.description or produit.description %}
                <br>
            <div class=\"divspandesc\">
                <span class=\"spandesc\">{{ \"descrip\"|trans }}</span>
                <hr >


                <span class=\"spandesc\">
                        {% if app.request.getLocale()  == 'en' %}{{ produit.descriptionen }}{% else %}{{ produit.description }}{% endif %}
                         </span>



            </div>
            {% endif %}

            {% if produit.file %}
                <br>
                <a  target=\"_blank\" class=\"spandesc\"
                    href=\"{{ legal_notice_directory }}/{{ produit.file }}\">

                    <svg _ngcontent-dxq-c64=\"\" height=\"20\" viewBox=\"0 0 512 512\" width=\"20\" xmlns=\"http://www.w3.org/2000/svg\"><g _ngcontent-dxq-c64=\"\" id=\"Solid\"><path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\" d=\"m239.029 384.97a24 24 0 0 0 33.942 0l90.509-90.509a24 24 0 0 0 0-33.941 24 24 0 0 0 -33.941 0l-49.539 49.539v-262.059a24 24 0 0 0 -48 0v262.059l-49.539-49.539a24 24 0 0 0 -33.941 0 24 24 0 0 0 0 33.941z\"></path><path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\" d=\"m464 232a24 24 0 0 0 -24 24v184h-368v-184a24 24 0 0 0 -48 0v192a40 40 0 0 0 40 40h384a40 40 0 0 0 40-40v-192a24 24 0 0 0 -24-24z\"></path></g></svg>
                    {{ \"Fiche Technique\"|trans }}
                </a>
            {% endif %}





        </div>

    </div>




</div>
    {% endif %}
    {% if produits %}

<div class=\"container\" style=\"padding-right: 2%;padding-left: 2%;margin-top: 100px;background-color: #F7F9FA;max-width: 1600px;padding-bottom: 10px;padding-top: 10px\" >


    <h3 class=\"  style2 section-title  text-left\">
        <span >{{ \"prodsimilaire\" | trans }} </span></h3>



    <div id=\"owl-demo\" class=\"owl-carousel owl-theme\" >
        {% for produit in produits %}

        <div class=\"item \" >
            <div class=\"product\" >


                <a {% if app.user %} onclick=\"addfavoris({{ produit.id }})\"
                {% else %}
                    {#onclick=\"addfavnonConnect()\"#}
                    href=\"{{ path(\"fos_user_security_login\",{'produitid':produit.id})}}\"

                {% endif %}
                        class=\" add-fav tooltipHere
                                    {% for favoris in favoris %}
                                    {% if  favoris.utilisateur == app.user and favoris.produit == produit %}active{% endif %}
                                    {% endfor %}\"
                        data-placement=\"left\" >
                    <i class=\"glyphicon glyphicon-heart\"></i>
                </a>

                <div class=\"image\" style=\"width: 100%!important;height: 70%!important;\">
                    {% if produit.description or produit.descriptionen %}
                    <div class=\"quickview\" >
                        <a  class=\"btn btn-xs btn-quickview\" href=\"{{ path(\"detail_produits\",{'produitid':produit.id}) }}\"
                        >{{ \"Details\" | trans }} </a>
                    </div>
                    {% endif %}

                    <img style=\"width: 100%!important;border-top-left-radius: 10px;border-top-right-radius: 10px;max-height: 300px;min-height:300px;height: 100%!important;object-fit: contain  !important\"
                         src=\"{{ asset('/assets/img/default_t_e.jpg') }}\"
                         data-original=\"{% if produit.image and produit.image and produit.image != \"\" %}/uploads/produits/{{ produit.image }}
                                        {% else %}{{ asset('/assets/img/default_t_e.jpg') }} {% endif %}\" alt=\"img\"
                         class=\"img-responsive lazy\" >
                    {% if produit.quantite >0 %}

                        {% if produit.finalPrice[\"is_promo\"] and produit.prixPromo and produit.prixPromo > 0 %}
                            <div class=\"promotion\">
                                <span class=\"discount\" >{{ \"Promotion\" | trans }}</span>
                            </div>
                        {% elseif produit.finalPrice[\"is_promo\"] and produit.numProduitPromo == 1 %}
                            <div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\" >{{ \"Promotion\" | trans }}
                                            {{ formated_price(produit.finalPrice[\"percentage\"],app.session.get('pays'),false) }}%
\t\t\t\t\t\t\t\t\t\t</span>
                            </div>

                        {% elseif produit.finalPrice[\"is_promo\"] and produit.numProduitPromo > 1 %}
                            <div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\" >
                                            {{ formated_price(produit.finalPrice[\"percentage\"],app.session.get('pays'),false) }}%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        {{ \"sur le\" | trans }}
                                            {{ produit.numProduitPromo }}{{\"ème\" | trans}}
\t\t\t\t\t\t\t\t\t\t</span>
                            </div>
                        {% endif %}
                    {% else %}
                        <div class=\"promotion\">
                            <span class=\"horsstock\" style=\"    font-weight: 400;\">\t{{ \"HORS STOCK\" | trans }}\t</span>
                        </div>
                    {% endif %}
                </div>
                <div style=\"height: 30%!important;position: relative\">


                    <div class=\"line_gradient\"></div>


                    <div class=\"description\" >
                        {% if app.request.getLocale()  == 'en' %}{{ produit.nomen }}{% else %}{{ produit.nom }}{% endif %}

                    </div>
                    <span class=\"cat_badge\" >
                                        {% if app.request.getLocale()  == 'en' %}{{ produit.categorie.nomEn }}{% else %}{{ produit.categorie.nom }}{% endif %}
                                    </span>





                    <div class=\"row\" style=\"position: absolute;  bottom: 10px;left: 0;right: 0\">
                        <div class=\"col-lg-6 col-md-6 col-xs-6 col-sm-6\">
                            <div class=\" price  div_card\" style=\"padding-left: 14px;
                            {% if (produit.finalPrice[\"is_promo\"] == false) or( produit.finalPrice[\"is_promo\"] == true and produit.numProduitPromo>1 ) %}
                                    padding-bottom: 22px;
                            {% endif %}\">
                                            <span class=\"old-price\" style=\"float:left\">
                                              {% if produit.finalPrice[\"is_promo\"] and produit.numProduitPromo == 1 %}
                                                  {{ formated_price( produit.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}}
                                              {% elseif produit.finalPrice[\"is_promo\"] and produit.prixPromo and produit.prixPromo > 0 %}
                                                  {{ formated_price( produit.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}}
                                              {% endif %}
                                                </span>
                                <br>
                                <span  class=\"\" style=\"float:left\"> {{ formated_price( produit.finalPrice[\"prix\"],app.session.get(\"pays\"))}}</span>



                            </div>
                        </div>
                        <div class=\"div_card col-lg-6 col-md-6 col-xs-6 col-sm-6 text-right\"
                             style=\"padding-right: 20px;padding-left: 23px;\">
                            <div class=\"row\" id=\"quantite{{ produit.id }}\"    name=\"quantite{{ produit.id }}\" disabled=\"none\" hidden>

                                <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                    <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle{{ produit.id }}\"
                                                                        onclick=\"deleteArticleQuantity({{ produit.id }},{{ produit.prix }})\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t                             \t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t                        \t</button>
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
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
                                                            </span>
                                    </div>
                                </div>

                            </div>


                            <div class=\"\" id=\"addcart{{ produit.id }}\"   name=\"addcart{{ produit.id }}\">
                                {% if produit.quantite == 0 %}
                                    <button disabled type=\"button\"
                                            style=\" background-color: #8c8586; color: white; border: 1px solid #8c8586; padding: 0 0;
    height: 43px;
    width: 43px;
    margin-bottom: 8px;

\"
                                            data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
\t\t\t\t\t\t\t\t                        \t<span class=\"add2cart\">
\t\t\t\t\t\t\t\t\t                      \t<i style=\"font-size: 17px;\" class=\"glyphicon glyphicon-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t                       </span>
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
                                                onclick=\"enabledivquantity({{ produit.id }},{{ produit.quantite }},{{ produit.maxcommande }})\"

                                            {% endif %}
                                            #}

                                            id=\"btn-panier{{ produit.id }}\"
                                            onclick=\"enabledivquantity({{ produit.id }},{{ produit.quantite }},{{ produit.maxcommande }})\"

                                            data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                        <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> {{ \"Acheter\" | trans }} <i class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                                    </button>
                                    {% endif %}


                                {% endif %}
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>



            <div class=\"modal fade  \" id=\"modal-panier{{ produit.id }}\"
                 aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\" style=\"background: #ED0000;\">
                            <h4 class=\"modal-title\" id=\"exampleModalLongTitle\"
                                style=\"margin-top: 11px;\">{{ \"Acheter\" | trans }} <i
                                        class=\"fa fa-shopping-cart\"></i>
                            </h4>
                            <button style=\"opacity: 1.2;margin-top: -36px;margin-right: -10px;background-color: #ED0000\"
                                    type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body text-center\">

                            <h3>{{ \"quantite_demander_indispo\" | trans }}
                                {% if app.request.getLocale()  == 'en' %}{{ produit.nomen }}{% else %}{{ produit.nom }}{% endif %} {{ \"est\" | trans }}
                                <span id=\"idinputtwo{{ produit.id }}\">  </span></h3>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
            </div>
            <div class=\"modal fade\" id=\"modal-quantity-max{{ produit.id }}\" tabindex=\"-1\" role=\"dialog\"
                 aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\" style=\"background: #ED0000;\">
                            <h4 class=\"modal-title text-left\" id=\"exampleModalLongTitle\"
                                style=\"margin-top: 11px;\">

                            </h4>
                            <button style=\"opacity: 1.2;margin-top: -26px;margin-right: -10px;background-color: #ED0000\"
                                    type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body text-center\">
                            <h3>
                                {{ \"pouvez_commander_au_max\" | trans }}{{ produit.maxcommande }}
                                {% if app.request.getLocale()  == 'en' %}{{ produit.nomen }}{% else %}{{ produit.nom }}{% endif %}</h3>


                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

        {% endfor %}

    </div>
</div>
    {% endif %}


    <style>
        .owl-buttons {
            display: block;
        }
        .owl-carousel:hover .owl-buttons {
            display: block;
        }

        .owl-item {
            text-align: center;
            padding-left:10px;
            padding-right:10px;
        }


        .owl-theme .owl-controls .owl-buttons div {
            background: transparent;
            color: #ed0000;
            font-size: 40px;
            line-height: 50px;
            margin-top: 150px;
            position: absolute;
            top: 0;

        }



        .owl-theme .owl-controls .owl-buttons .owl-prev {
            left: 0;
            padding-left: 20px;
        }
        .owl-theme .owl-controls .owl-buttons .owl-next {
            right: 0;
            padding-right: 20px;
        }
        .modalerror {
            top: 50px;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 10052;
        }

    </style>

    {#
      <script src=\"{{ asset('bundles/app/js/jquery-3.2.1.min.js') }}\" type=\"text/javascript\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>

    #}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>


    <script>
        \$(document).ready(function() {

            var owl = \$(\"#owl-demo\");
            owl.owlCarousel({

                //  itemsDesktop : true,
                //  itemsDesktopSmall : false,
                /// itemsTablet: false,
                // itemsMobile : false,
                startPosition: 0,
                rtl: false,

                items : 4,
                navigation : true,
                loop: false,
                autoplay: true,
                autoplayHoverPause: true,
                navigationText : ['<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-left fa-stack-1x fa-inverse\"></i></span>','<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-right fa-stack-1x fa-inverse\"></i></span>'],

                itemsDesktop : [1100,3], //5 items between 1100px and 901px
                itemsDesktopSmall : [900,2], // betweem 900px and 601px
                itemsTablet: [700,1], //2 items between 600 and 0
                itemsMobile : [500,1] // itemsMobile disabled - inherit from itemsTablet option

            });

            // Custom Navigation Events
            \$(\".owl-carousel-arrows .next\").click(function() {
                owl.trigger('owl.next');
            });

            \$(\".owl-carousel-arrows .prev\").click(function() {
                owl.trigger('owl.prev');
            });
        });
    </script>

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
                    \$(\"select\").select2();
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
                '    border-color: #ED0000;\\n' +
                '    border-style: solid;';

        }
    </script>
    <script type=\"text/javascript\">

        \$('#closeAlert').click(function(){
            \$(\"#divquantity-max\").hide();


        });
        \$('#closeAlertq').click(function(){

            \$(\"#divmodal-panier\").hide();

        });

        function addArticleSize(id) {

            var selectsizes = document.getElementById(\"sizes\" + id);
            var sizeid = selectsizes.options[selectsizes.selectedIndex].value;
            var qte = parseInt(\$(\"#quantitymodal\" + id).val());
            //alert(qte);

            \$.ajax({
                url: \"{{ (path('size_from_id')) }}\",
                dataType: 'Json',
                data: {\"sizeid\": sizeid},
                type: 'GET',
                success: function (data) {
                    var quantite = data
                    if (qte  > quantite) {

                        //  alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                        document.getElementById(\"idinputtwo\"+id).innerHTML = quantite;

                        \$(\"document\").ready(function () {

                            //was  \$('#modal-panier' + id).modal({backdrop: 'static', keyboard: false});
                            \$('#modal-panier' + id).modal(\"show\");



                        })


                    } else {
                        addArticlewithsize(id, sizeid, qte);
                        \$('#productSetailsModalAjax'+id).modal('hide');

                    }

                }
            });

        }

        function changeSize(id) {
            //\$(\"#quantitymodal\" + id).val(1);
        }

        function enabledivquantity(id, quantite, max) {
            var qte = parseInt(\$(\"#qte\" + id).val());

            if (qte + 1 > quantite) {

                //alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                document.getElementById(\"idinputtwo\"+id).innerHTML = quantite;

                \$(\"document\").ready(function () {
                  //  \$('#modal-panier' + id).modal(\"show\");
                    \$(\"#divmodal-panier\").show();

                })
            } else if (qte + 1 > max) {
                \$(\"document\").ready(function () {
                   // \$('#modal-quantity-max' + id).modal(\"show\");

                    \$(\"#divquantity-max\").show();

                })
            } else if (qte >= 0) {
                var quantities = document.querySelectorAll(\"[id=quantite\" + id+\"]\");
                var btncarts = document.querySelectorAll(\"[id=addcart\" + id+\"]\");
                for(var i = 0; i < btncarts.length; i++){
                    btncarts[i].style.display = \"none\";
                }
                for(var i = 0; i < quantities.length; i++){
                    quantities[i].style.display = \"block\";
                }


                addArticle(id, quantite, max);
            }
        }

        function plusquantity(id) {

            var selectsizes = document.getElementById(\"sizes\" + id);
            var sizeid = selectsizes.options[selectsizes.selectedIndex].value;
            var qte = parseInt(\$(\"#quantitymodal\" + id).val())  ;

            \$.ajax({
                url: \"{{ (path('size_from_id')) }}\",
                dataType: 'Json',
                data: {\"sizeid\": sizeid},
                type: 'GET',
                success: function (data) {
                    var quantite = data;
                    var qtee = parseInt(\$(\"#quantitymodal\" + id).val())+1  ;

                    if (qtee  > quantite) {

                        //alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                        document.getElementById(\"idinputtwo\"+id).innerHTML = quantite;

                        \$(\"document\").ready(function () {

                           // \$('#modal-panier' + id).modal(\"show\");
                            \$(\"#divmodal-panier\").show();

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


            /*
            was befor my change
            var qte = parseInt(\$(\"#quantitymodal\" + id).val()) + 1;
            var qte_input = document.querySelectorAll(\"[id=quantitymodal\" + id+\"]\");
            for(var i = 0; i < qte_input.length; i++){
                qte_input[i].value = qte;
            }*/
        }

        function moinsquantity(id) {
            var qte = parseInt(\$(\"#quantitymodal\" + id).val()) - 1;
            if (qte > 0) {
                \$(\"#quantitymodal\"+id).val(qte);
            } else {
                \$(\"document\").ready(function () {
                    \$('#modal-quantity').modal({backdrop: 'static', keyboard: false});
                })

            }
        }
        <!-- ---- -->

        function plusquantityD(id,quantity,max) {

            var qte = parseInt(\$(\"#qte\" + id).val()) + 1;
            if(qte  > quantity  ){
                document.getElementById(\"idinputtwo\"+id).innerHTML = quantity;

                \$(\"document\").ready(function () {
              //was      \$('#modal-panier' + id).modal(\"show\");
                    \$(\"#divmodal-panier\").show();


                })
            }
            else if (qte > max) {
                \$(\"document\").ready(function () {

                  //was  \$('#modal-quantity-max' + id).modal(\"show\");
                    \$(\"#divquantity-max\").show();

                })
            }else{
                //  \$(\"#qte\" + id).val(qte);
                var qte_input = document.querySelectorAll(\"[id=qte\" + id+\"]\");

                for(var i = 0; i < qte_input.length; i++){
                    qte_input[i].value = qte;
                }
            }

        }

        function moinquantityD(id,quantity,max) {

            var qte = parseInt(\$(\"#qte\" + id).val()) -1;
            //  \$(\"#qte\" + id).val(qte);
            var qte_input = document.querySelectorAll(\"[id=qte\" + id+\"]\");

            if (qte > 0) {
                for(var i = 0; i < qte_input.length; i++){
                    qte_input[i].value = qte;
                }
            } else {
                \$(\"document\").ready(function () {
                    \$('#modal-quantity').modal({backdrop: 'static', keyboard: false});
                })

            }
        }
        function addArticlee(id, quantity,max) {
            var qte = parseInt(  \$(\"#qte\"+id).val());
            var qte_input = document.querySelectorAll(\"[id=qte\" + id+\"]\");


            if(qte  > quantity  ){
                document.getElementById(\"idinputtwo\"+id).innerHTML = quantity;

                \$(\"document\").ready(function () {
                    \$(\"#divmodal-panier\").show();
                  //  \$(\"divmodal-panier\").toggle();

                  //was  \$('#modal-panier' + id).modal(\"show\");

                })
            }
            else if (qte ===0) {
                \$(\"document\").ready(function () {

                   // \$(\"#div-chooseqt\").show();


                })
            }
            else if (qte > max) {
                \$(\"document\").ready(function () {

                   \$(\"#divquantity-max\").show();

                  //was  \$('#modal-quantity-max' + id).modal(\"show\");

                })
            }
            else {

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
                     //  \$this.button('reset');
                        window.location.reload();
                    }
                });
            }
        }
    </script>

{% endblock body %}
", "@Frontend/Default/detailsproduit.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\Default\\detailsproduit.html.twig");
    }
}
