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

/* @Frontend/Default/view_all_products.html.twig */
class __TwigTemplate_553398f57aa7e3c609d3c67abd582aa1955035b2a099f5c3ef0d319854b6df76 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/Default/view_all_products.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle::base.html.twig", "@Frontend/Default/view_all_products.html.twig", 1);
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


    <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

    <style>
        .w3-sidebar a {font-family: \"Roboto\", sans-serif}
        body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: \"Roboto\", sans-serif;}


    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "
    <div class=\"container\" style=\"padding-right: 2%;padding-left: 2%;margin-top: 100px;padding-bottom: 20px;background-color: #F7F9FA ;max-width: 1600px\" >



        <input type=\"text\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["cp"] ?? $this->getContext($context, "cp")), "html", null, true);
        echo "\" id=\"cp\" style=\"display: none;\">
        <!--/.banner style1-->

            <div class=\"container main-container\" style=\"margin-top: 1px !important;\">

                <!-- Main component call to action -->

                <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">

                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 row\" >


                        <div class=\"row\" style=\"display: flex; align-items: center;\">
                            <div class=\"breadcrumbDiv\" style=\"margin-left: 27px;\">
                                <ul class=\"breadcrumb\">
                                    <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
        echo "</a></li>

                                    <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                                        ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produits les plus vendus"), "html", null, true);
        echo "</li>
                                </ul>
                            </div>
                        </div>



                        <h3 class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9 section-title style2  text-left hidden-lg hidden-md \">
                            <span class=\"\" >";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produits les plus vendus"), "html", null, true);
        echo " </span>

                        </h3>

                        <h3 class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9 text-left hidden-xs hidden-sm\">
                            <span class=\"hidden-xs hidden-sm \">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("filterproducts"), "html", null, true);
        echo " </span>

                        </h3>
                        <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 text-right hidden\" >
                            <a style=\"float: right;
                        font-family: Roboto-Regular, sans-serif;
                        font-style: normal;
                        font-weight: bold;
                        font-size: 16px;
                        line-height: 40px;
                        text-align: center;
                        color: #ED0000!important\" href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_all");
        echo "\">
                                <i  class=\"fa fa-caret-right icon\"></i>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("view_all"), "html", null, true);
        echo " </a>
                        </div>



                    </div>

                    <div class=\"container\">
                        <div class=\"row xsResponse\">


                            <div class=\"col-lg-2 col-md-2 hidden-sm hidden-xs\" style=\"margin-top: 25px\" >
                                <!-- Sidebar -->

                                <div class=\" w3-bar-block\" style=\"box-shadow: 0px 0px 4px #e6e6e6\"  >



                                    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["categories"] ?? $this->getContext($context, "categories")), "other", [], "array"));
        foreach ($context['_seq'] as $context["key"] => $context["category"]) {
            // line 87
            echo "
                                    <div class=\"w3-dropdown-hover\" style=\"background-color: white;padding-bottom: 10px\">

                                        <button class=\"w3-button\">
                                            ";
            // line 91
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "en") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "EN"))) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "nomEn", []), "html", null, true);
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "nom", []), "html", null, true);
            }
            echo " <i class=\"fa fa-caret-down\"></i></button>
                                        <div class=\"w3-dropdown-content w3-bar-block\">
                                            ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "sousCategories", []));
            foreach ($context['_seq'] as $context["_key"] => $context["sub_category"]) {
                // line 94
                echo "
                                                    <a href=\"";
                // line 95
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_products");
                echo "?subcategorie_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sub_category"], "id", []), "html", null, true);
                echo "\"
                                                       class=\"w3-bar-item w3-button\">
                                                        ";
                // line 97
                if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "en") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "EN"))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sub_category"], "nomEn", []), "html", null, true);
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sub_category"], "nom", []), "html", null, true);
                }
                // line 98
                echo "                                                    </a>



                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                                        </div>

                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "

                                </div>


                            </div>

                            ";
        // line 114
        if ((twig_length_filter($this->env, ($context["produitspromo"] ?? $this->getContext($context, "produitspromo"))) > 0)) {
            // line 115
            echo "
                            <div class=\"col-lg-10 col-md-10\">




                            ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produitspromo"] ?? $this->getContext($context, "produitspromo")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 122
                echo "

                                <div class=\"item col-lg-3 col-md-4 col-sm-6 col-xs-12\" style=\"margin-top: 25px\">
                                    <div class=\"product\" >
                                        <a ";
                // line 126
                if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
                    // line 127
                    echo "                                            onclick=\"addfavoris(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ")\"
                                        ";
                } else {
                    // line 129
                    echo "                                            ";
                    // line 130
                    echo "                                            href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login", ["produitid" => $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", [])]), "html", null, true);
                    echo "\"

                                        ";
                }
                // line 133
                echo "                                                class=\"add-fav tooltipHere
                                                ";
                // line 134
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["favoris"]);
                foreach ($context['_seq'] as $context["_key"] => $context["favoris"]) {
                    // line 135
                    echo "                                                    ";
                    if ((($this->getAttribute($context["favoris"], "utilisateur", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) && ($this->getAttribute($context["favoris"], "produit", []) == $this->getAttribute($context["produit"], "produit", [])))) {
                        echo " active ";
                    }
                    // line 136
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favoris'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\"
                                                data-toggle=\"tooltip\"
                                                data-original-title=\"Add to Wishlist\"
                                                data-placement=\"left\">
                                            <i class=\"glyphicon glyphicon-heart\"></i>
                                        </a>

                                        <div class=\"image\"  style=\"width: 100%!important;height:70%!important\">
                                            ";
                // line 144
                if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "description", []) || $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "descriptionen", []))) {
                    // line 145
                    echo "                                            <div class=\"quickview\" >
                                                <a  class=\"btn btn-xs btn-quickview\" href=\"";
                    // line 146
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_produits", ["produitid" => $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", [])]), "html", null, true);
                    echo "\"
                                                >";
                    // line 147
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details"), "html", null, true);
                    echo " </a>
                                            </div>
                                            ";
                }
                // line 150
                echo "
                                            <img style=\"width: 100%!important;border-top-left-radius: 10px;border-top-right-radius: 10px;max-height: 300px;min-height:300px;height:100%!important;object-fit: contain  !important\"
                                                 src=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
                echo "\"
                                                 data-original=\"";
                // line 153
                if ((($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) != ""))) {
                    echo "/uploads/produits/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
                    echo " ";
                }
                echo "\" alt=\"img\"
                                                 class=\"img-responsive lazy\" >

                                            ";
                // line 156
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                    // line 157
                    echo "                                                <div class=\"promotion\">
                                                <span class=\"discount\"  >";
                    // line 158
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion"), "html", null, true);
                    echo "
                                                </span>
                                                </div>
                                            ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 161
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) == 1))) {
                    // line 162
                    echo "                                                <div class=\"promotion\">
                                                <span class=\"discount\">";
                    // line 163
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion"), "html", null, true);
                    echo "
                                                    ";
                    // line 164
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "percentage", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
                    echo "%

                                                    ";
                    // line 168
                    echo "                                                </span>
                                                </div>
                                            ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 170
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) > 1))) {
                    // line 171
                    echo "                                                <div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 173
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "percentage", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
                    echo "%
                                            ";
                    // line 176
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sur le"), "html", null, true);
                    echo "
                                            ";
                    // line 177
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ème"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t</span>
                                                </div>
                                            ";
                }
                // line 181
                echo "                                        </div>
                                        <div style=\"height: 30%!important;position: relative\">


                                            <div class=\"line_gradient\"></div>

                                            <div class=\"description\" >
                                                ";
                // line 188
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nomen", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
                }
                // line 189
                echo "
                                            </div>

                                            <span class=\"cat_badge\" >
                                        ";
                // line 193
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "categorie", []), "nomEn", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "categorie", []), "nom", []), "html", null, true);
                }
                // line 194
                echo "                                           </span>
                                            ";
                // line 216
                echo "                                            <div class=\"row\" style=\"position: absolute;  bottom: 10px;left: 0;right: 0 \">
                                                <div class=\"col-lg-6 col-md-6 col-xs-6 col-sm-6\">
                                                    <div class=\"price div_card\" style=\"padding-left: 8px;
                                                    ";
                // line 219
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") == false) || (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") == true) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) > 1)))) {
                    // line 220
                    echo "                                                            padding-bottom: 22px;
                                                    ";
                }
                // line 221
                echo "\">
                                                  <span class=\"old-price\" style=\"float:left\">
                                                    ";
                // line 223
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                    // line 224
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                    echo "
                                                        ";
                    // line 227
                    echo "                                                    ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) == 1))) {
                    // line 228
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                    echo "
                                                    ";
                }
                // line 230
                echo "                                                   </span>

                                                        <br>
                                                        <span style=\"float:left\">
                                                       ";
                // line 234
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
                                                  </span>



                                                    </div>
                                                </div>
                                                <div class=\"div_card  col-lg-6 col-md-6 col-xs-6 col-sm-6 text-right\" style=\"padding-right: 22px\">

                                                    <div class=\" \" id=\"quantite";
                // line 243
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"    name=\"quantite";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\" disabled=\"none\" hidden>

                                                        <div class=\"col-lg-12 col-md-12 col-xs-12\">
                                                            <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle";
                // line 249
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                        onclick=\"deleteArticleQuantity(";
                // line 250
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prix", []), "html", null, true);
                echo ")\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t                                  \t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t\t                             </button>
                                                            </span>
                                                                <input style=\" height: 4.5rem;!important;\" type=\"text\"
                                                                       id=\"qte";
                // line 258
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                       name=\"qte";
                // line 259
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                       class=\"form-control input-number text-center\" ";
                // line 260
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", true, true)) {
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array"), "html", null, true);
                    echo "\" ";
                } else {
                    echo " value=\"0\" ";
                }
                // line 261
                echo "                                                                       min=\"1\" max=\"100\" disabled>
                                                                <span class=\"input-group-btn\">
                                                                <button id=\"addArticle";
                // line 263
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                        onclick=\"addArticle(";
                // line 264
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
                echo ")\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"plus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t                          <span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t                          \t</button>
                                                            </span>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class=\"\" id=\"addcart";
                // line 277
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                         name=\"addcart";
                // line 278
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\">
                                                        ";
                // line 279
                if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []) == 0)) {
                    // line 280
                    echo "                                                            <button disabled type=\"button\"
                                                                    style=\" background-color: #8c8586; color: white; border: 1px solid #8c8586; padding: 0 0; height: 43px;  width: 43px;\"
                                                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
\t\t\t\t\t\t\t\t                         \t<span class=\"add2cart\">
                                                                ";
                    // line 286
                    echo "                                                            <span class=\"btnspanadd\" > ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                    echo " <i class=\"fa fa-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t                              \t</span>
                                                            </button>
                                                        ";
                } else {
                    // line 290
                    echo "
                                                            ";
                    // line 291
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                        // line 292
                        echo "
                                                                <a class=\" btn_card\" style=\"padding-top: 15px; padding-bottom: 15px;\"
                                                                   href=\"";
                        // line 294
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_produits", ["produitid" => $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", [])]), "html", null, true);
                        echo "\"  >
                                                         <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> ";
                        // line 296
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                        echo " <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                                                                </a>

                                                            ";
                    } else {
                        // line 302
                        echo "
                                                            <button type=\"submit\" class=\"btn_card\"
                                                                    ";
                        // line 315
                        echo "
                                                                    id=\"btn-panier";
                        // line 316
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                        echo "\"
                                                                    onclick=\"enabledivquantity(";
                        // line 317
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
                        echo ")\"

                                                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                             <span class=\"add2cart\">
                                                                  <span  class=\"btnspanadd\"> ";
                        // line 321
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                        echo " <i class=\"fa fa-shopping-cart\"></i></span>
                                                             </span>
                                                            </button>

                                                            ";
                    }
                    // line 326
                    echo "


                                                        ";
                }
                // line 330
                echo "                                                    </div>
                                                </div>

                                            </div>


                                        </div>

                                    </div>
                                </div>



                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 344
            echo "
                               </div>


                            ";
            // line 348
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produitspromo"] ?? $this->getContext($context, "produitspromo")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 349
                echo "                                <!-- Modal -->
                                <div class=\"modal fade\" id=\"productSetailsModalAjax";
                // line 350
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\" tabindex=\"-1\"
                                     role=\"dialog\"
                                     aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"row transitionfx text-left\" style=\"padding: 30px;margin-right: 0px!important; margin-left: 0px;!important;  \">
                                                <div class=\"col-lg-12\">
                                                    <button style=\"opacity: 1.2;margin-top: -21px;margin-right: -18px;background-color: #ffffff;/* color: #454545; */\" type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                        <span style=\"color: #454545;\" aria-hidden=\"true\">×</span>
                                                    </button></div>
                                                <!-- left column -->
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <!-- product Image and Zoom -->


                                                    <div class=\"sp-large\" style=\"overflow: hidden; height: auto; left: 0px; top: 0px;max-width: 100% !important\">
                                                        <a href=\"\" class=\"\" style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                                            <img id=\"imageproduit";
                // line 367
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                 data-original=\"/uploads/produits/";
                // line 368
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                echo "\"
                                                                 src=\"";
                // line 369
                if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) != ""))) {
                    echo "/uploads/produits/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default"), "html", null, true);
                }
                echo "\"
                                                                 alt=\"";
                // line 370
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"img\">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--/ left column end -->


                                                <!-- right column -->
                                                <div class=\"col-lg-8 col-md-6 col-sm-5\">
                                                    <input type=\"text\" id=\"idproduit\" value=\"";
                // line 379
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                           hidden>

                                                    <h1 class=\"product-title titleproduitt\">";
                // line 382
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nomen", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
                }
                // line 383
                echo "
                                                    </h1>

                                                    <div class=\"description\" >
                                                        ";
                // line 387
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "descriptionen", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "description", []), "html", null, true);
                }
                // line 388
                echo "
                                                    </div>
                                                    <div class=\"product-price\" style=\"    font-size: 20px;\">
                                                        <span class=\"price-sales price\">  ";
                // line 391
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "\t </span>

                                                        ";
                // line 393
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) == 1))) {
                    // line 394
                    echo "                                                            <span class=\"price-standard old-price\"> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                    echo " </span>

                                                        ";
                } elseif ((($this->getAttribute($this->getAttribute($this->getAttribute(                // line 396
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                    // line 397
                    echo "                                                            <span class=\"price-standard old-price\"> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                    echo "</span>
                                                        ";
                }
                // line 399
                echo "                                                    </div>
                                                    ";
                // line 400
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                    // line 401
                    echo "
                                                        <div class=\"color-details\">
                                                            ";
                    // line 403
                    if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) != ""))) {
                        // line 404
                        echo "                                                                <img name='img' id='";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                        echo "'
                                                                     style=\"width:  100px;height: 100px;background-size: contain;border-width: 2px; border-color: #ED0000;border-style: solid;\"
                                                                     src=\"/uploads/produits/";
                        // line 406
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                        echo "\"
                                                                     onclick=\"changeImage('";
                        // line 407
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                        echo "')\"
                                                                     alt=\"img\">
                                                            ";
                    }
                    // line 410
                    echo "                                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 411
                        echo "                                                                ";
                        if (($this->getAttribute($context["c"], "image", []) && ($this->getAttribute($context["c"], "image", []) != ""))) {
                            // line 412
                            echo "
                                                                    <img name='img' id='";
                            // line 413
                            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                            echo "'
                                                                         style=\"    width:  100px;height: 100px;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                                                         src=\"/uploads/produits/";
                            // line 415
                            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                            echo "\"
                                                                         onclick=\"changeImage('";
                            // line 416
                            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                            echo "')\"
                                                                         alt=\"img\">

                                                                ";
                        }
                        // line 420
                        echo "
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 422
                    echo "                                                        </div>
                                                        <div class=\"color-details\">
                                                            <span class=\"selected-color\"><strong class=\"text_details\">";
                    // line 424
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Couleurs"), "html", null, true);
                    echo "</strong></span>
                                                            <ul class=\"swatches Color\" name=\"couleur";
                    // line 425
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                id=\"couleur";
                    // line 426
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\">
                                                                ";
                    // line 427
                    $context["i"] = 1;
                    // line 428
                    echo "                                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["couleur"]) {
                        // line 429
                        echo "                                                                    ";
                        if ((($context["i"] ?? $this->getContext($context, "i")) == 1)) {
                            // line 430
                            echo "                                                                        <li class=\"selected\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                            echo "\"
                                                                            onclick=\"changeImagecouleur('";
                            // line 431
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "id", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "image", []), "html", null, true);
                            echo "')\">
                                                                            <a style=\"background-color:";
                            // line 432
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                            echo ";color:transparent\"></a>
                                                                        </li>
                                                                    ";
                        } else {
                            // line 435
                            echo "                                                                        <li value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                            echo "\"
                                                                            onclick=\"changeImagecouleur('";
                            // line 436
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "id", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "image", []), "html", null, true);
                            echo "')\">
                                                                            <a style=\"background-color:";
                            // line 437
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                            echo ";color:transparent\"></a>
                                                                        </li>
                                                                    ";
                        }
                        // line 440
                        echo "                                                                    ";
                        $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                        // line 441
                        echo "                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couleur'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 442
                    echo "                                                            </ul>
                                                        </div>
                                                    ";
                }
                // line 445
                echo "                                                    <!--/.color-details-->
                                                    <div class=\"color-details\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-4 col-md-4 col-xs-6\" style=\"\">
                                                                <span class=\"selected-color\"><strong class=\"text_details\">";
                // line 449
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantité"), "html", null, true);
                echo "</strong></span>
                                                                ";
                // line 450
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                    // line 451
                    echo "
                                                                    <div class=\"input-group\">
                                                                <span class=\"input-group-btn \">
                                                                    <button id=\"deleteArticle";
                    // line 454
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                            onclick=\"moinsquantity(";
                    // line 455
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ")\"
                                                                            type=\"button\"
                                                                            class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                            style=\"background-color:#ED0000\" data-type=\"minus\"
                                                                            data-field=\"\">
                                                                        <span class=\"glyphicon glyphicon-minus\"></span>
                                                                    </button>
                                                                </span>
                                                                        <input style=\" height: 4.5rem;!important;\" type=\"text\"
                                                                               id=\"quantitymodal";
                    // line 464
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                               name=\"quantitymodal";
                    // line 465
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                               class=\"form-control input-number text-center\" ";
                    // line 466
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", true, true)) {
                        echo " value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array"), "html", null, true);
                        echo "\" ";
                    } else {
                        echo " value=\"1\" ";
                    }
                    // line 467
                    echo "                                                                               min=\"1\" max=\"100\" disabled>
                                                                        <span class=\"input-group-btn\">
                                                                    <button onclick=\"plusquantity(";
                    // line 469
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ")\"
                                                                            type=\"button\"
                                                                            class=\"quantity-right-plus btn btn-success btn-number btn_plus_moins\"
                                                                            style=\"background-color:#ED0000\" data-type=\"plus\"
                                                                            data-field=\"\">
                                                                        <span class=\"glyphicon glyphicon-plus\"></span>
                                                                    </button>
                                                                </span>
                                                                    </div>
                                                                ";
                } else {
                    // line 479
                    echo "
                                                                    <div class=\"row\" id=\"quantite";
                    // line 480
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                         name=\"quantite";
                    // line 481
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\" disabled=\"none\" >

                                                                        <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                                                            <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle";
                    // line 487
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                        onclick=\"moinquantityD(";
                    // line 488
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ")\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
                                                                    <span class=\"glyphicon glyphicon-minus\"></span>
                                                                </button>
                                                            </span>
                                                                                <input style=\" height: 4.5rem;!important;\" type=\"text\"
                                                                                       id=\"qte";
                    // line 496
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                                       name=\"qte";
                    // line 497
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                                       class=\"form-control input-number text-center\" ";
                    // line 498
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", true, true)) {
                        echo " value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array"), "html", null, true);
                        echo "\" ";
                    } else {
                        echo " value=\"0\" ";
                    }
                    // line 499
                    echo "                                                                                       min=\"1\" max=\"100\" disabled>
                                                                                <span class=\"input-group-btn\">
                                                                <button id=\"addArticlee";
                    // line 501
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                        onclick=\"plusquantityD(";
                    // line 502
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
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
                // line 515
                echo "

                                                            </div>

                                                            ";
                // line 519
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                    // line 520
                    echo "
                                                                <div class=\"col-lg-8 col-sm-6 col-xs-6\">
                                                                    <span class=\"selected-color\"><strong class=\"text_details\">";
                    // line 522
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Taille"), "html", null, true);
                    echo "</strong></span>
                                                                    <select class=\"form-control\"
                                                                            id=\"sizes";
                    // line 524
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                            name=\"sizes";
                    // line 525
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                            onchange=\"changeSize(";
                    // line 526
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ")\"
                                                                            style=\"border-radius: 0px;height: 43px;font-family: Roboto-Regular,sans-serif\"  >
                                                                        <option disabled selected class=\"text_details\">
                                                                            ";
                    // line 529
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir la taille"), "html", null, true);
                    echo "</option>
                                                                        ";
                    // line 530
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                        // line 531
                        echo "                                                                            ";
                        $context["i"] = 1;
                        // line 532
                        echo "                                                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", []), "0", [], "array"), "sizes", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                            // line 533
                            echo "                                                                                ";
                            if ((($context["i"] ?? $this->getContext($context, "i")) == 1)) {
                                // line 534
                                echo "                                                                                    <option value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                                echo "\"
                                                                                            selected>";
                                // line 535
                                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                                echo "</option>
                                                                                ";
                            } else {
                                // line 537
                                echo "                                                                                    <option value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                                echo "</option>

                                                                                ";
                            }
                            // line 540
                            echo "                                                                                ";
                            $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                            // line 541
                            echo "
                                                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 543
                        echo "                                                                        ";
                    }
                    // line 544
                    echo "                                                                    </select>
                                                                </div>
                                                            ";
                }
                // line 547
                echo "
                                                        </div>
                                                    </div>
                                                    <!-- productFilter -->
                                                    <div class=\"color-details\">

                                                        ";
                // line 553
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                    // line 554
                    echo "                                                            <button  onclick=\"addArticleSize(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ")\"
                                                                     class=\"btn  btn-primary btn_card col-lg-6 \" type=\"submit\"
                                                                     style=\"border: none;border-radius: 0px;padding: 12px 20px;\" id=\"btn-panier\"
                                                                     data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                        <span class=\"add2cart btnspanadd\" >
                                                            ";
                    // line 559
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter au panier"), "html", null, true);
                    echo "
                                                        </span>
                                                            </button>
                                                        ";
                } else {
                    // line 563
                    echo "                                                            ";
                    // line 564
                    echo "
                                                            <button id=\"addArticlee";
                    // line 565
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\" onclick=\"addArticlee(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
                    echo ")\"
                                                                    class=\"btn  btn-primary btn_card col-lg-6 \" type=\"submit\"
                                                                    style=\"border: none;border-radius: 0px;padding: 12px 20px;\"
                                                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                        <span class=\"add2cart btnspanadd\" >
                                                            ";
                    // line 570
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter au panier"), "html", null, true);
                    echo "
                                                        </span>
                                                            </button>
                                                        ";
                }
                // line 574
                echo "
                                                        <div class=\"col-lg-6 fich_technique\">
                                                            ";
                // line 576
                if ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "file", [])) {
                    // line 577
                    echo "
                                                                <a  target=\"_blank\"
                                                                    href=\"";
                    // line 579
                    echo twig_escape_filter($this->env, ($context["legal_notice_directory"] ?? $this->getContext($context, "legal_notice_directory")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "file", []), "html", null, true);
                    echo "\">
                                                                    <svg _ngcontent-dxq-c64=\"\" height=\"20\" viewBox=\"0 0 512 512\" width=\"20\" xmlns=\"http://www.w3.org/2000/svg\"><g _ngcontent-dxq-c64=\"\" id=\"Solid\"><path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\" d=\"m239.029 384.97a24 24 0 0 0 33.942 0l90.509-90.509a24 24 0 0 0 0-33.941 24 24 0 0 0 -33.941 0l-49.539 49.539v-262.059a24 24 0 0 0 -48 0v262.059l-49.539-49.539a24 24 0 0 0 -33.941 0 24 24 0 0 0 0 33.941z\"></path><path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\" d=\"m464 232a24 24 0 0 0 -24 24v184h-368v-184a24 24 0 0 0 -48 0v192a40 40 0 0 0 40 40h384a40 40 0 0 0 40-40v-192a24 24 0 0 0 -24-24z\"></path></g></svg>
                                                                    ";
                    // line 581
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fiche Technique"), "html", null, true);
                    echo "
                                                                </a>
                                                            ";
                }
                // line 584
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


                                <div class=\"modal fade\" id=\"modal-quantity-max";
                // line 603
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\" tabindex=\"-1\"
                                     role=\"dialog\"
                                     aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\" style=\"background: #ED0000;\">
                                                <h4 class=\"modal-title text-left\" id=\"exampleModalLongTitle\"
                                                    style=\"margin-top: 11px;\">

                                                </h4>
                                                <button style=\"opacity: 1.2;margin-top: -26px;margin-right: -10px;background-color: #ED0000\"
                                                        type=\"button\" class=\" close\" data-dismiss=\"modal\"
                                                        aria-label=\"Close\">
                                                    <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                                                </button>
                                            </div>
                                            <div class=\"modal-body text-center\">
                                                <h3>
                                                    ";
                // line 621
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pouvez_commander_au_max"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
                echo "
                                                    ";
                // line 622
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nomen", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
                }
                // line 623
                echo "
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                       ";
                // line 644
                echo "

                                <div class=\"modal fade\" id=\"modal-panier";
                // line 646
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\"
                                     aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\" >
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\" style=\"background: #ED0000;\">
                                                <h4 class=\"modal-title\" id=\"exampleModalLongTitle\" style=\"margin-top: 11px;\">";
                // line 651
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                echo " <i class=\"fa fa-shopping-cart\"></i>
                                                </h4>
                                                <button style=\"opacity: 1.2;margin-top: -36px;margin-right: -10px;background-color: #ED0000\"
                                                        type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                    <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                                                </button>
                                            </div>
                                            <div class=\"modal-body text-center\">
                                                <h3>";
                // line 659
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("quantite_demander_indispo"), "html", null, true);
                echo "
                                                    ";
                // line 660
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nomen", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
                }
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("est"), "html", null, true);
                echo " <span id=\"idinputtwo";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\">  </span>
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                ";
                // line 680
                echo "


                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 684
            echo "                            <!--/.item-->

                            ";
        }
        // line 687
        echo "                        </div>
                        <!-- /.row -->

                    </div>
                    <!--/.container-->


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
        // line 710
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

            </div>









    </div>

    <!-- /main container -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>

    <script>

        function addfavnonConnect() {
            \$(\"#myModal\").modal({backdrop: true});


        }

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

                itemsDesktop : [1000,4], //5 items between 1000px and 901px
                itemsDesktopSmall : [900,2], // betweem 900px and 601px
                itemsTablet: [600,1], //2 items between 600 and 0
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

        \$('#couleur').on('click', 'li', function () {
            \$(this).addClass(\"selected\"); // Assign the class here
            //   var value = \$('#couleur').val();
            var value = \$(this).attr('value');
            var produit = parseInt(\$(\"#idproduit\").val());
            \$.ajax({
                url: \"";
        // line 796
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
        // line 828
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
    <script>
        function addArticleSize(id) {

            var selectsizes = document.getElementById(\"sizes\" + id);
            var sizeid = selectsizes.options[selectsizes.selectedIndex].value;
            var qte = parseInt(\$(\"#quantitymodal\" + id).val());
            \$.ajax({
                url: \"";
        // line 880
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("size_from_id");
        echo "\",
                dataType: 'Json',
                data: {\"sizeid\": sizeid},
                type: 'GET',
                success: function (data) {
                    var quantite = data
                    // console.log(\"gggg\"+quantite);
                    // console.log(\"qte \"+qte);
                    if (qte > quantite) {
                      //  alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                        document.getElementById(\"idinputtwo\"+id).innerHTML = quantite;

                       \$(\"document\").ready(function () {
                       //was     \$('#modal-panier'+id).modal({backdrop: 'static', keyboard: false});
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
              //  alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                document.getElementById(\"idinputtwo\"+id).innerHTML = quantite;

                \$(\"document\").ready(function () {
                  //was  \$('#modal-panier'+id).modal({backdrop: 'static', keyboard: false});
                    \$('#modal-panier' + id).modal(\"show\");
                })
            } else if (qte + 1 > max) {
                \$(\"document\").ready(function () {
                    //\$('#modal-quantity-max' + id).modal({backdrop: 'static', keyboard: false});
                    \$('#modal-quantity-max' + id).modal(\"show\");

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
            var qte = parseInt(\$(\"#quantitymodal\" + id).val()) +1;
            //alert(qte);

            \$.ajax({
                url: \"";
        // line 950
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
         /*   var qte = parseInt(\$(\"#quantitymodal\" + id).val()) + 1;
            var qte_input = document.querySelectorAll(\"[id=quantitymodal\" + id+\"]\");

            for(var i = 0; i < qte_input.length; i++){
                qte_input[i].value = qte;
            }*/

        }

        /*was  function plusquantityD(id,quantite,max) {



              \$(\"#qte\" + id).val(0);

              addArticle(id, quantite, max);

          }*/

        function moinsquantity(id) {
            var qte = parseInt(\$(\"#quantitymodal\" + id).val()) - 1;
            if (qte > 0) {
                \$(\"#quantitymodal\" + id).val(qte);

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
               /// alert(\"Vous ne pouvez commander que \" +quantity+\" produit\" )
                document.getElementById(\"idinputtwo\"+id).innerHTML = quantity;

                   \$(\"document\").ready(function () {
                     //was  \$('#modal-panier'+id).modal({ backdrop: 'static',keyboard: false       });
                       \$('#modal-panier' + id).modal(\"show\");
                   })
            }
            else if (qte > max) {
                \$(\"document\").ready(function () {
                  //was  \$('#modal-quantity-max'+id).modal({ backdrop: 'static', keyboard: false});

                    \$('#modal-quantity-max' + id).modal(\"show\");
                })
            }else {
                //  \$(\"#qte\" + id).val(qte);
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
                    \$('#modal-quantity').modal({backdrop: 'static', keyboard: false});
                })

            }
        }

        function addArticlee(id, quantity,max) {
            var qte = parseInt(  \$(\"#qte\"+id).val());
            var qte_input = document.querySelectorAll(\"[id=qte\" + id+\"]\");

            console.log(\"eeeee\");
            console.log(qte)


            if(qte  > quantity  ){

               // alert(\"Vous pouvez commander que \" +quantity+\" produit\" )

                document.getElementById(\"idinputtwo\"+id).innerHTML = quantity;

                \$(\"document\").ready(function () {
                 //was   \$('#modal-panier'+id).modal({ backdrop: 'static',  keyboard: false         });

                    \$('#modal-panier' + id).modal(\"show\");
                    //  \$('select').select2();
                })
            }
            else if (qte > max) {
                \$(\"document\").ready(function () {
                  //was  \$('#modal-quantity-max'+id).modal({ backdrop: 'static',   keyboard: false});

                    \$('#modal-quantity-max' + id).modal(\"show\");
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
                        \$this.button('reset');

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
        return "@Frontend/Default/view_all_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1603 => 950,  1530 => 880,  1475 => 828,  1440 => 796,  1351 => 710,  1326 => 687,  1321 => 684,  1312 => 680,  1293 => 660,  1289 => 659,  1278 => 651,  1270 => 646,  1266 => 644,  1256 => 623,  1250 => 622,  1245 => 621,  1224 => 603,  1203 => 584,  1197 => 581,  1190 => 579,  1186 => 577,  1184 => 576,  1180 => 574,  1173 => 570,  1159 => 565,  1156 => 564,  1154 => 563,  1147 => 559,  1138 => 554,  1136 => 553,  1128 => 547,  1123 => 544,  1120 => 543,  1113 => 541,  1110 => 540,  1101 => 537,  1096 => 535,  1091 => 534,  1088 => 533,  1083 => 532,  1080 => 531,  1078 => 530,  1074 => 529,  1068 => 526,  1064 => 525,  1060 => 524,  1055 => 522,  1051 => 520,  1049 => 519,  1043 => 515,  1023 => 502,  1019 => 501,  1015 => 499,  1007 => 498,  1003 => 497,  999 => 496,  988 => 488,  984 => 487,  975 => 481,  971 => 480,  968 => 479,  955 => 469,  951 => 467,  943 => 466,  939 => 465,  935 => 464,  923 => 455,  919 => 454,  914 => 451,  912 => 450,  908 => 449,  902 => 445,  897 => 442,  891 => 441,  888 => 440,  882 => 437,  874 => 436,  869 => 435,  863 => 432,  855 => 431,  850 => 430,  847 => 429,  842 => 428,  840 => 427,  836 => 426,  832 => 425,  828 => 424,  824 => 422,  817 => 420,  808 => 416,  804 => 415,  799 => 413,  796 => 412,  793 => 411,  788 => 410,  780 => 407,  776 => 406,  770 => 404,  768 => 403,  764 => 401,  762 => 400,  759 => 399,  753 => 397,  751 => 396,  745 => 394,  743 => 393,  738 => 391,  733 => 388,  727 => 387,  721 => 383,  715 => 382,  709 => 379,  697 => 370,  688 => 369,  684 => 368,  680 => 367,  660 => 350,  657 => 349,  653 => 348,  647 => 344,  628 => 330,  622 => 326,  614 => 321,  603 => 317,  599 => 316,  596 => 315,  592 => 302,  583 => 296,  578 => 294,  574 => 292,  572 => 291,  569 => 290,  561 => 286,  555 => 280,  553 => 279,  549 => 278,  545 => 277,  525 => 264,  521 => 263,  517 => 261,  509 => 260,  505 => 259,  501 => 258,  488 => 250,  484 => 249,  473 => 243,  461 => 234,  455 => 230,  449 => 228,  446 => 227,  441 => 224,  439 => 223,  435 => 221,  431 => 220,  429 => 219,  424 => 216,  421 => 194,  415 => 193,  409 => 189,  403 => 188,  394 => 181,  386 => 177,  381 => 176,  377 => 173,  373 => 171,  371 => 170,  367 => 168,  362 => 164,  358 => 163,  355 => 162,  353 => 161,  347 => 158,  344 => 157,  342 => 156,  330 => 153,  326 => 152,  322 => 150,  316 => 147,  312 => 146,  309 => 145,  307 => 144,  292 => 136,  287 => 135,  283 => 134,  280 => 133,  273 => 130,  271 => 129,  265 => 127,  263 => 126,  257 => 122,  253 => 121,  245 => 115,  243 => 114,  234 => 107,  225 => 103,  215 => 98,  208 => 97,  201 => 95,  198 => 94,  194 => 93,  184 => 91,  178 => 87,  174 => 86,  153 => 68,  149 => 67,  135 => 56,  127 => 51,  116 => 43,  110 => 40,  92 => 25,  85 => 20,  79 => 19,  58 => 5,  52 => 3,  46 => 2,  30 => 1,);
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


    <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

    <style>
        .w3-sidebar a {font-family: \"Roboto\", sans-serif}
        body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: \"Roboto\", sans-serif;}


    </style>
{% endblock stylesheets %}
{% block body %}

    <div class=\"container\" style=\"padding-right: 2%;padding-left: 2%;margin-top: 100px;padding-bottom: 20px;background-color: #F7F9FA ;max-width: 1600px\" >



        <input type=\"text\" value=\"{{ cp }}\" id=\"cp\" style=\"display: none;\">
        <!--/.banner style1-->

            <div class=\"container main-container\" style=\"margin-top: 1px !important;\">

                <!-- Main component call to action -->

                <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">

                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 row\" >


                        <div class=\"row\" style=\"display: flex; align-items: center;\">
                            <div class=\"breadcrumbDiv\" style=\"margin-left: 27px;\">
                                <ul class=\"breadcrumb\">
                                    <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">{{ \"Home\"|trans }}</a></li>

                                    <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                                        {{ \"Produits les plus vendus\"|trans }}</li>
                                </ul>
                            </div>
                        </div>



                        <h3 class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9 section-title style2  text-left hidden-lg hidden-md \">
                            <span class=\"\" >{{ \"Produits les plus vendus\" | trans }} </span>

                        </h3>

                        <h3 class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9 text-left hidden-xs hidden-sm\">
                            <span class=\"hidden-xs hidden-sm \">{{ \"filterproducts\" | trans }} </span>

                        </h3>
                        <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 text-right hidden\" >
                            <a style=\"float: right;
                        font-family: Roboto-Regular, sans-serif;
                        font-style: normal;
                        font-weight: bold;
                        font-size: 16px;
                        line-height: 40px;
                        text-align: center;
                        color: #ED0000!important\" href=\"{{ path(\"view_all\") }}\">
                                <i  class=\"fa fa-caret-right icon\"></i>{{ \"view_all\"|trans}} </a>
                        </div>



                    </div>

                    <div class=\"container\">
                        <div class=\"row xsResponse\">


                            <div class=\"col-lg-2 col-md-2 hidden-sm hidden-xs\" style=\"margin-top: 25px\" >
                                <!-- Sidebar -->

                                <div class=\" w3-bar-block\" style=\"box-shadow: 0px 0px 4px #e6e6e6\"  >



                                    {% for  key,category in categories[\"other\"] %}

                                    <div class=\"w3-dropdown-hover\" style=\"background-color: white;padding-bottom: 10px\">

                                        <button class=\"w3-button\">
                                            {% if app.session.get(\"pays\").FrontLanguage  == 'en' or app.session.get(\"pays\").FrontLanguage  == 'EN' %}{{ category.nomEn }}{% else %} {{ category.nom }}{% endif %} <i class=\"fa fa-caret-down\"></i></button>
                                        <div class=\"w3-dropdown-content w3-bar-block\">
                                            {% for sub_category in category.sousCategories %}

                                                    <a href=\"{{ path(\"view_products\") }}?subcategorie_id={{ sub_category.id }}\"
                                                       class=\"w3-bar-item w3-button\">
                                                        {% if  app.session.get(\"pays\").FrontLanguage  == 'en' or app.session.get(\"pays\").FrontLanguage  == 'EN' %}{{ sub_category.nomEn }}{% else %} {{ sub_category.nom }}{% endif %}
                                                    </a>



                                            {% endfor %}
                                        </div>

                                    </div>
                                    {% endfor %}


                                </div>


                            </div>

                            {% if produitspromo|length > 0 %}

                            <div class=\"col-lg-10 col-md-10\">




                            {% for produit in produitspromo %}


                                <div class=\"item col-lg-3 col-md-4 col-sm-6 col-xs-12\" style=\"margin-top: 25px\">
                                    <div class=\"product\" >
                                        <a {% if app.user %}
                                            onclick=\"addfavoris({{ produit.produit.id }})\"
                                        {% else %}
                                            {#onclick=\"addfavnonConnect()\"#}
                                            href=\"{{ path(\"fos_user_security_login\",{'produitid':produit.produit.id})}}\"

                                        {% endif %}
                                                class=\"add-fav tooltipHere
                                                {% for favoris in favoris %}
                                                    {% if  favoris.utilisateur == app.user and favoris.produit == produit.produit  %} active {% endif %}
                                                {% endfor %}\"
                                                data-toggle=\"tooltip\"
                                                data-original-title=\"Add to Wishlist\"
                                                data-placement=\"left\">
                                            <i class=\"glyphicon glyphicon-heart\"></i>
                                        </a>

                                        <div class=\"image\"  style=\"width: 100%!important;height:70%!important\">
                                            {% if produit.produit.description or produit.produit.descriptionen %}
                                            <div class=\"quickview\" >
                                                <a  class=\"btn btn-xs btn-quickview\" href=\"{{ path(\"detail_produits\",{'produitid':produit.produit.id}) }}\"
                                                >{{ \"Details\" | trans }} </a>
                                            </div>
                                            {%  endif %}

                                            <img style=\"width: 100%!important;border-top-left-radius: 10px;border-top-right-radius: 10px;max-height: 300px;min-height:300px;height:100%!important;object-fit: contain  !important\"
                                                 src=\"{{ asset('/assets/img/default_t_e.jpg') }}\"
                                                 data-original=\"{% if produit.produit.image and produit.produit.image and produit.produit.image != \"\" %}/uploads/produits/{{ produit.produit.image }}{% else %}{{ asset('/assets/img/default_t_e.jpg') }} {% endif %}\" alt=\"img\"
                                                 class=\"img-responsive lazy\" >

                                            {% if produit.produit.finalPrice[\"is_promo\"] and produit.produit.prixPromo and produit.produit.prixPromo > 0 %}
                                                <div class=\"promotion\">
                                                <span class=\"discount\"  >{{ \"Promotion\" | trans }}
                                                </span>
                                                </div>
                                            {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo == 1 %}
                                                <div class=\"promotion\">
                                                <span class=\"discount\">{{ \"Promotion\" | trans }}
                                                    {{ formated_price(produit.produit.finalPrice[\"percentage\"],app.session.get('pays'),false) }}%

                                                    {#                                                    {{ produit.produit.finalPrice[\"percentage\"]|number_format(0, '.', ',') }}%
#}
                                                </span>
                                                </div>
                                            {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo > 1 %}
                                                <div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\">
\t\t\t\t\t\t\t\t\t\t\t{{ formated_price(produit.produit.finalPrice[\"percentage\"],app.session.get('pays'),false) }}%
                                            {#\t\t\t\t\t\t\t\t\t\t\t{{ produit.produit.finalPrice[\"percentage\"]|number_format(0, '.', ',') }}%
#}
                                            {{ \"sur le\" | trans }}
                                            {{ produit.produit.numProduitPromo }}{{\"ème\" | trans}}
\t\t\t\t\t\t\t\t\t\t</span>
                                                </div>
                                            {% endif %}
                                        </div>
                                        <div style=\"height: 30%!important;position: relative\">


                                            <div class=\"line_gradient\"></div>

                                            <div class=\"description\" >
                                                {% if app.request.getLocale()  == 'en' %}{{ produit.produit.nomen }}{% else %}{{ produit.produit.nom }}{% endif %}

                                            </div>

                                            <span class=\"cat_badge\" >
                                        {% if app.request.getLocale()  == 'en' %}{{ produit.produit.categorie.nomEn }}{% else %}{{ produit.produit.categorie.nom }}{% endif %}
                                           </span>
                                            {#


                                            <div class=\"description\" >
                                                {% if app.request.getLocale()  == 'en' %}{{ produit.produit.descriptionen }}{% else %}{{ produit.produit.description }}{% endif %}

                                            </div>

                                                <div class=\"col-lg-12 fich_technique\">
                                                    {% if produit.produit.file %}

                                                    <a  target=\"_blank\"
                                                        href=\"{{ legal_notice_directory }}/{{ produit.produit.file }}\">
                                                        <svg _ngcontent-dxq-c64=\"\" height=\"20\" viewBox=\"0 0 512 512\" width=\"20\" xmlns=\"http://www.w3.org/2000/svg\"><g _ngcontent-dxq-c64=\"\" id=\"Solid\"><path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\" d=\"m239.029 384.97a24 24 0 0 0 33.942 0l90.509-90.509a24 24 0 0 0 0-33.941 24 24 0 0 0 -33.941 0l-49.539 49.539v-262.059a24 24 0 0 0 -48 0v262.059l-49.539-49.539a24 24 0 0 0 -33.941 0 24 24 0 0 0 0 33.941z\"></path><path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\" d=\"m464 232a24 24 0 0 0 -24 24v184h-368v-184a24 24 0 0 0 -48 0v192a40 40 0 0 0 40 40h384a40 40 0 0 0 40-40v-192a24 24 0 0 0 -24-24z\"></path></g></svg>
                                                        {{ \"Fiche Technique\"|trans }}
                                                    </a>
                                                    {% endif %}

                                                </div>

                                            #}
                                            <div class=\"row\" style=\"position: absolute;  bottom: 10px;left: 0;right: 0 \">
                                                <div class=\"col-lg-6 col-md-6 col-xs-6 col-sm-6\">
                                                    <div class=\"price div_card\" style=\"padding-left: 8px;
                                                    {% if (produit.produit.finalPrice[\"is_promo\"] == false) or( produit.produit.finalPrice[\"is_promo\"] == true and produit.produit.numProduitPromo>1 ) %}
                                                            padding-bottom: 22px;
                                                    {% endif %}\">
                                                  <span class=\"old-price\" style=\"float:left\">
                                                    {% if produit.produit.finalPrice[\"is_promo\"] and produit.produit.prixPromo and produit.produit.prixPromo > 0 %}
                                                        {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}}
                                                        {#                                                        {{ produit.produit.finalPrice[\"old_prix\"]|number_format(2, '.', ',') }} Ar
#}
                                                    {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo == 1 %}
                                                        {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}}
                                                    {% endif %}
                                                   </span>

                                                        <br>
                                                        <span style=\"float:left\">
                                                       {{ formated_price( produit.produit.finalPrice[\"prix\"],app.session.get(\"pays\"))}}
                                                  </span>



                                                    </div>
                                                </div>
                                                <div class=\"div_card  col-lg-6 col-md-6 col-xs-6 col-sm-6 text-right\" style=\"padding-right: 22px\">

                                                    <div class=\" \" id=\"quantite{{ produit.produit.id }}\"    name=\"quantite{{ produit.produit.id }}\" disabled=\"none\" hidden>

                                                        <div class=\"col-lg-12 col-md-12 col-xs-12\">
                                                            <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle{{ produit.produit.id }}\"
                                                                        onclick=\"deleteArticleQuantity({{ produit.produit.id }},{{ produit.produit.prix }})\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t                                  \t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t\t                             </button>
                                                            </span>
                                                                <input style=\" height: 4.5rem;!important;\" type=\"text\"
                                                                       id=\"qte{{ produit.produit.id }}\"
                                                                       name=\"qte{{ produit.produit.id }}\"
                                                                       class=\"form-control input-number text-center\" {% if app.session.get('panier')[produit.produit.id] is defined %} value=\"{{ app.session.get('panier')[produit.produit.id] }}\" {% else %} value=\"0\" {% endif %}
                                                                       min=\"1\" max=\"100\" disabled>
                                                                <span class=\"input-group-btn\">
                                                                <button id=\"addArticle{{ produit.produit.id }}\"
                                                                        onclick=\"addArticle({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"plus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t                          <span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t                          \t</button>
                                                            </span>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class=\"\" id=\"addcart{{ produit.produit.id }}\"
                                                         name=\"addcart{{ produit.produit.id }}\">
                                                        {% if produit.produit.quantite == 0 %}
                                                            <button disabled type=\"button\"
                                                                    style=\" background-color: #8c8586; color: white; border: 1px solid #8c8586; padding: 0 0; height: 43px;  width: 43px;\"
                                                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
\t\t\t\t\t\t\t\t                         \t<span class=\"add2cart\">
                                                                {#                                                            <i style=\"font-size: 17px;float: left;margin-left: 20px\" class=\"glyphicon glyphicon-shopping-cart\"></i>
#}
                                                            <span class=\"btnspanadd\" > {{ \"Acheter\" | trans }} <i class=\"fa fa-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t                              \t</span>
                                                            </button>
                                                        {% else %}

                                                            {% if  produit.produit.couleurs|length > 0 %}

                                                                <a class=\" btn_card\" style=\"padding-top: 15px; padding-bottom: 15px;\"
                                                                   href=\"{{ path(\"detail_produits\",{'produitid':produit.produit.id}) }}\"  >
                                                         <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> {{ \"Acheter\" | trans }} <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                                                                </a>

                                                            {% else %}

                                                            <button type=\"submit\" class=\"btn_card\"
                                                                    {#
                                                                                                                                        {% if  produit.produit.couleurs|length > 0 %}
                                                                        data-toggle=\"modal\"
                                                                        data-target=\"#productSetailsModalAjax{{ produit.produit.id }}\"
                                                                    {% else %}
                                                                        id=\"btn-panier{{ produit.produit.id }}\"
                                                                        onclick=\"enabledivquantity({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"

                                                                    {% endif %}

                                                                    #}

                                                                    id=\"btn-panier{{ produit.produit.id }}\"
                                                                    onclick=\"enabledivquantity({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"

                                                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                             <span class=\"add2cart\">
                                                                  <span  class=\"btnspanadd\"> {{ \"Acheter\" | trans }} <i class=\"fa fa-shopping-cart\"></i></span>
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



                            {% endfor %}

                               </div>


                            {% for produit in produitspromo %}
                                <!-- Modal -->
                                <div class=\"modal fade\" id=\"productSetailsModalAjax{{ produit.produit.id }}\" tabindex=\"-1\"
                                     role=\"dialog\"
                                     aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"row transitionfx text-left\" style=\"padding: 30px;margin-right: 0px!important; margin-left: 0px;!important;  \">
                                                <div class=\"col-lg-12\">
                                                    <button style=\"opacity: 1.2;margin-top: -21px;margin-right: -18px;background-color: #ffffff;/* color: #454545; */\" type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                        <span style=\"color: #454545;\" aria-hidden=\"true\">×</span>
                                                    </button></div>
                                                <!-- left column -->
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <!-- product Image and Zoom -->


                                                    <div class=\"sp-large\" style=\"overflow: hidden; height: auto; left: 0px; top: 0px;max-width: 100% !important\">
                                                        <a href=\"\" class=\"\" style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                                            <img id=\"imageproduit{{ produit.produit.id }}\"
                                                                 data-original=\"/uploads/produits/{{ produit.produit.image }}\"
                                                                 src=\"{% if produit.produit.image and produit.produit.image != \"\" %}/uploads/produits/{{ produit.produit.image }}{% else %}{{ asset('/assets/img/default') }}{% endif %}\"
                                                                 alt=\"{{ produit.produit.nom }}\" class=\"img-responsive\" alt=\"img\">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--/ left column end -->


                                                <!-- right column -->
                                                <div class=\"col-lg-8 col-md-6 col-sm-5\">
                                                    <input type=\"text\" id=\"idproduit\" value=\"{{ produit.produit.id }}\"
                                                           hidden>

                                                    <h1 class=\"product-title titleproduitt\">{% if app.request.getLocale()  == 'en' %}{{ produit.produit.nomen }}{% else %}{{ produit.produit.nom }}{% endif %}

                                                    </h1>

                                                    <div class=\"description\" >
                                                        {% if app.request.getLocale()  == 'en' %}{{ produit.produit.descriptionen }}{% else %}{{ produit.produit.description }}{% endif %}

                                                    </div>
                                                    <div class=\"product-price\" style=\"    font-size: 20px;\">
                                                        <span class=\"price-sales price\">  {{ formated_price( produit.produit.finalPrice[\"prix\"],app.session.get(\"pays\"))}}\t </span>

                                                        {% if produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo == 1 %}
                                                            <span class=\"price-standard old-price\"> {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}} </span>

                                                        {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.prixPromo and produit.produit.prixPromo > 0 %}
                                                            <span class=\"price-standard old-price\"> {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}}</span>
                                                        {% endif %}
                                                    </div>
                                                    {% if produit.produit.couleurs|length>0 %}

                                                        <div class=\"color-details\">
                                                            {% if produit.produit.image and produit.produit.image != \"\" %}
                                                                <img name='img' id='{{ produit.produit.image }}'
                                                                     style=\"width:  100px;height: 100px;background-size: contain;border-width: 2px; border-color: #ED0000;border-style: solid;\"
                                                                     src=\"/uploads/produits/{{ produit.produit.image }}\"
                                                                     onclick=\"changeImage('{{ produit.produit.image }}','{{ produit.produit.id }}')\"
                                                                     alt=\"img\">
                                                            {% endif %}
                                                            {% for c in produit.produit.couleurs %}
                                                                {% if c.image and c.image != \"\" %}

                                                                    <img name='img' id='{{ c.image }}'
                                                                         style=\"    width:  100px;height: 100px;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                                                         src=\"/uploads/produits/{{ c.image }}\"
                                                                         onclick=\"changeImage('{{ c.image }}','{{ produit.produit.id }}')\"
                                                                         alt=\"img\">

                                                                {% endif %}

                                                            {% endfor %}
                                                        </div>
                                                        <div class=\"color-details\">
                                                            <span class=\"selected-color\"><strong class=\"text_details\">{{ \"Couleurs\" | trans }}</strong></span>
                                                            <ul class=\"swatches Color\" name=\"couleur{{ produit.produit.id }}\"
                                                                id=\"couleur{{ produit.produit.id }}\">
                                                                {% set i = 1 %}
                                                                {% for couleur in produit.produit.couleurs %}
                                                                    {% if i == 1 %}
                                                                        <li class=\"selected\" value=\"{{ couleur.codeCouleur }}\"
                                                                            onclick=\"changeImagecouleur('{{ produit.produit.id }}','{{ couleur.id }}','{{ couleur.image }}')\">
                                                                            <a style=\"background-color:{{ couleur.codeCouleur }};color:transparent\"></a>
                                                                        </li>
                                                                    {% else %}
                                                                        <li value=\"{{ couleur.codeCouleur }}\"
                                                                            onclick=\"changeImagecouleur('{{ produit.produit.id }}','{{ couleur.id }}','{{ couleur.image }}')\">
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
                                                                <span class=\"selected-color\"><strong class=\"text_details\">{{\"Quantité\" | trans}}</strong></span>
                                                                {% if produit.produit.couleurs|length>0 %}

                                                                    <div class=\"input-group\">
                                                                <span class=\"input-group-btn \">
                                                                    <button id=\"deleteArticle{{ produit.produit.id }}\"
                                                                            onclick=\"moinsquantity({{ produit.produit.id }})\"
                                                                            type=\"button\"
                                                                            class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                            style=\"background-color:#ED0000\" data-type=\"minus\"
                                                                            data-field=\"\">
                                                                        <span class=\"glyphicon glyphicon-minus\"></span>
                                                                    </button>
                                                                </span>
                                                                        <input style=\" height: 4.5rem;!important;\" type=\"text\"
                                                                               id=\"quantitymodal{{ produit.produit.id }}\"
                                                                               name=\"quantitymodal{{ produit.produit.id }}\"
                                                                               class=\"form-control input-number text-center\" {% if app.session.get('panier')[produit.produit.id] is defined %} value=\"{{ app.session.get('panier')[produit.produit.id] }}\" {% else %} value=\"1\" {% endif %}
                                                                               min=\"1\" max=\"100\" disabled>
                                                                        <span class=\"input-group-btn\">
                                                                    <button onclick=\"plusquantity({{ produit.produit.id }})\"
                                                                            type=\"button\"
                                                                            class=\"quantity-right-plus btn btn-success btn-number btn_plus_moins\"
                                                                            style=\"background-color:#ED0000\" data-type=\"plus\"
                                                                            data-field=\"\">
                                                                        <span class=\"glyphicon glyphicon-plus\"></span>
                                                                    </button>
                                                                </span>
                                                                    </div>
                                                                {% else %}

                                                                    <div class=\"row\" id=\"quantite{{ produit.produit.id }}\"
                                                                         name=\"quantite{{ produit.produit.id }}\" disabled=\"none\" >

                                                                        <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                                                            <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle{{ produit.produit.id }}\"
                                                                        onclick=\"moinquantityD({{ produit.produit.id }})\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
                                                                    <span class=\"glyphicon glyphicon-minus\"></span>
                                                                </button>
                                                            </span>
                                                                                <input style=\" height: 4.5rem;!important;\" type=\"text\"
                                                                                       id=\"qte{{ produit.produit.id }}\"
                                                                                       name=\"qte{{ produit.produit.id }}\"
                                                                                       class=\"form-control input-number text-center\" {% if app.session.get('panier')[produit.produit.id] is defined %} value=\"{{ app.session.get('panier')[produit.produit.id] }}\" {% else %} value=\"0\" {% endif %}
                                                                                       min=\"1\" max=\"100\" disabled>
                                                                                <span class=\"input-group-btn\">
                                                                <button id=\"addArticlee{{ produit.produit.id }}\"
                                                                        onclick=\"plusquantityD({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"
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

                                                            {% if produit.produit.couleurs|length>0 %}

                                                                <div class=\"col-lg-8 col-sm-6 col-xs-6\">
                                                                    <span class=\"selected-color\"><strong class=\"text_details\">{{ \"Taille\" | trans }}</strong></span>
                                                                    <select class=\"form-control\"
                                                                            id=\"sizes{{ produit.produit.id }}\"
                                                                            name=\"sizes{{ produit.produit.id }}\"
                                                                            onchange=\"changeSize({{ produit.produit.id }})\"
                                                                            style=\"border-radius: 0px;height: 43px;font-family: Roboto-Regular,sans-serif\"  >
                                                                        <option disabled selected class=\"text_details\">
                                                                            {{ \"choisir la taille\" | trans }}</option>
                                                                        {% if  produit.produit.couleurs|length > 0 %}
                                                                            {% set i = 1 %}
                                                                            {% for size in produit.produit.couleurs[\"0\"].sizes %}
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
                                                            {% endif%}

                                                        </div>
                                                    </div>
                                                    <!-- productFilter -->
                                                    <div class=\"color-details\">

                                                        {% if produit.produit.couleurs|length>0 %}
                                                            <button  onclick=\"addArticleSize({{ produit.produit.id }})\"
                                                                     class=\"btn  btn-primary btn_card col-lg-6 \" type=\"submit\"
                                                                     style=\"border: none;border-radius: 0px;padding: 12px 20px;\" id=\"btn-panier\"
                                                                     data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                        <span class=\"add2cart btnspanadd\" >
                                                            {{ \"Ajouter au panier\" | trans }}
                                                        </span>
                                                            </button>
                                                        {% else%}
                                                            {# button addarticle si prod sans coleur #}

                                                            <button id=\"addArticlee{{ produit.produit.id }}\" onclick=\"addArticlee({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"
                                                                    class=\"btn  btn-primary btn_card col-lg-6 \" type=\"submit\"
                                                                    style=\"border: none;border-radius: 0px;padding: 12px 20px;\"
                                                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                        <span class=\"add2cart btnspanadd\" >
                                                            {{ \"Ajouter au panier\" | trans }}
                                                        </span>
                                                            </button>
                                                        {% endif%}

                                                        <div class=\"col-lg-6 fich_technique\">
                                                            {% if produit.produit.file %}

                                                                <a  target=\"_blank\"
                                                                    href=\"{{ legal_notice_directory }}/{{ produit.produit.file }}\">
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


                                <div class=\"modal fade\" id=\"modal-quantity-max{{ produit.produit.id }}\" tabindex=\"-1\"
                                     role=\"dialog\"
                                     aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\" style=\"background: #ED0000;\">
                                                <h4 class=\"modal-title text-left\" id=\"exampleModalLongTitle\"
                                                    style=\"margin-top: 11px;\">

                                                </h4>
                                                <button style=\"opacity: 1.2;margin-top: -26px;margin-right: -10px;background-color: #ED0000\"
                                                        type=\"button\" class=\" close\" data-dismiss=\"modal\"
                                                        aria-label=\"Close\">
                                                    <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                                                </button>
                                            </div>
                                            <div class=\"modal-body text-center\">
                                                <h3>
                                                    {{ \"pouvez_commander_au_max\" | trans}}{{ produit.produit.maxcommande }}
                                                    {% if app.request.getLocale()  == 'en' %}{{ produit.produit.nomen }}{% else %}{{ produit.produit.nom }}{% endif %}

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
                                            \$('#modal-quantity-max{{ produit.produit.id }}').modal('hide')
                                        }, 14000);

                                    });

                                </script>
                       #}


                                <div class=\"modal fade\" id=\"modal-panier{{ produit.produit.id }}\" tabindex=\"-1\" role=\"dialog\"
                                     aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\" >
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
                                                <h3>{{\"quantite_demander_indispo\" | trans}}
                                                    {% if app.request.getLocale()  == 'en' %}{{ produit.produit.nomen }}{% else %}{{ produit.produit.nom }}{% endif %} {{\"est\" | trans}} <span id=\"idinputtwo{{ produit.produit.id }}\">  </span>
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
                                            \$('#modal-panier{{ produit.produit.id }}').modal('hide')
                                        }, 14000);

                                    });

                                </script>
                                #}



                            {% endfor %}
                            <!--/.item-->

                            {% endif %}
                        </div>
                        <!-- /.row -->

                    </div>
                    <!--/.container-->


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

            </div>









    </div>

    <!-- /main container -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>

    <script>

        function addfavnonConnect() {
            \$(\"#myModal\").modal({backdrop: true});


        }

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

                itemsDesktop : [1000,4], //5 items between 1000px and 901px
                itemsDesktopSmall : [900,2], // betweem 900px and 601px
                itemsTablet: [600,1], //2 items between 600 and 0
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
                    var quantite = data
                    // console.log(\"gggg\"+quantite);
                    // console.log(\"qte \"+qte);
                    if (qte > quantite) {
                      //  alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                        document.getElementById(\"idinputtwo\"+id).innerHTML = quantite;

                       \$(\"document\").ready(function () {
                       //was     \$('#modal-panier'+id).modal({backdrop: 'static', keyboard: false});
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
              //  alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                document.getElementById(\"idinputtwo\"+id).innerHTML = quantite;

                \$(\"document\").ready(function () {
                  //was  \$('#modal-panier'+id).modal({backdrop: 'static', keyboard: false});
                    \$('#modal-panier' + id).modal(\"show\");
                })
            } else if (qte + 1 > max) {
                \$(\"document\").ready(function () {
                    //\$('#modal-quantity-max' + id).modal({backdrop: 'static', keyboard: false});
                    \$('#modal-quantity-max' + id).modal(\"show\");

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
            var qte = parseInt(\$(\"#quantitymodal\" + id).val()) +1;
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
         /*   var qte = parseInt(\$(\"#quantitymodal\" + id).val()) + 1;
            var qte_input = document.querySelectorAll(\"[id=quantitymodal\" + id+\"]\");

            for(var i = 0; i < qte_input.length; i++){
                qte_input[i].value = qte;
            }*/

        }

        /*was  function plusquantityD(id,quantite,max) {



              \$(\"#qte\" + id).val(0);

              addArticle(id, quantite, max);

          }*/

        function moinsquantity(id) {
            var qte = parseInt(\$(\"#quantitymodal\" + id).val()) - 1;
            if (qte > 0) {
                \$(\"#quantitymodal\" + id).val(qte);

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
               /// alert(\"Vous ne pouvez commander que \" +quantity+\" produit\" )
                document.getElementById(\"idinputtwo\"+id).innerHTML = quantity;

                   \$(\"document\").ready(function () {
                     //was  \$('#modal-panier'+id).modal({ backdrop: 'static',keyboard: false       });
                       \$('#modal-panier' + id).modal(\"show\");
                   })
            }
            else if (qte > max) {
                \$(\"document\").ready(function () {
                  //was  \$('#modal-quantity-max'+id).modal({ backdrop: 'static', keyboard: false});

                    \$('#modal-quantity-max' + id).modal(\"show\");
                })
            }else {
                //  \$(\"#qte\" + id).val(qte);
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
                    \$('#modal-quantity').modal({backdrop: 'static', keyboard: false});
                })

            }
        }

        function addArticlee(id, quantity,max) {
            var qte = parseInt(  \$(\"#qte\"+id).val());
            var qte_input = document.querySelectorAll(\"[id=qte\" + id+\"]\");

            console.log(\"eeeee\");
            console.log(qte)


            if(qte  > quantity  ){

               // alert(\"Vous pouvez commander que \" +quantity+\" produit\" )

                document.getElementById(\"idinputtwo\"+id).innerHTML = quantity;

                \$(\"document\").ready(function () {
                 //was   \$('#modal-panier'+id).modal({ backdrop: 'static',  keyboard: false         });

                    \$('#modal-panier' + id).modal(\"show\");
                    //  \$('select').select2();
                })
            }
            else if (qte > max) {
                \$(\"document\").ready(function () {
                  //was  \$('#modal-quantity-max'+id).modal({ backdrop: 'static',   keyboard: false});

                    \$('#modal-quantity-max' + id).modal(\"show\");
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
                        \$this.button('reset');

                        \$('#productSetailsModalAjax'+id).modal('hide');
                    }
                });



            }
        }


    </script>
{% endblock body %}
", "@Frontend/Default/view_all_products.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\Default\\view_all_products.html.twig");
    }
}
