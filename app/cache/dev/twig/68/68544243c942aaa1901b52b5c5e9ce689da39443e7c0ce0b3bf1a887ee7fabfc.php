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

/* FrontendBundle:Default:index.html.twig */
class __TwigTemplate_6aa3c1763f22e70980c042c13cfd985477c744b02ce7134064001861a5cff0c5 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:Default:index.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle::base.html.twig", "FrontendBundle:Default:index.html.twig", 1);
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

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <div class=\"container\"
         style=\"padding-right: 2%;padding-left: 2%;margin-top: 100px;background-color: #F7F9FA;max-width: 1600px\">

        ";
        // line 14
        if (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "image1", []) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "image2", [])) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "image3", [])) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "image4", []))) {
            // line 15
            echo "            <!-- carossel-->
            <div id=\"myCarousel\" class=\"carousel slide hidden-xs \" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    ";
            // line 19
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "image1", [])) {
                // line 20
                echo "                        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>

                    ";
            }
            // line 23
            echo "                    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "image2", [])) {
                // line 24
                echo "                        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>

                    ";
            }
            // line 27
            echo "                    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "image3", [])) {
                // line 28
                echo "                        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>

                    ";
            }
            // line 31
            echo "                    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "image4", [])) {
                // line 32
                echo "                        <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>

                    ";
            }
            // line 35
            echo "                </ol>

                <!-- Wrapper for slides
                 href=\"https://dev-eboutique.localbeta.ovh/driveDevMod.php/produit/?categorie_id=43\"
                 -->
                <div class=\"carousel-inner \">
                    ";
            // line 41
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "image1", [])) {
                // line 42
                echo "                        <div class=\"item active  \">
                            <a   href=\"https://eshop-station.com/produit/?categorie_id=43\">
                                <img style=\"width: 100%;height:360px;object-fit: cover; \"
                                    src=\"/uploads/produits/";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "image1", []), "html", null, true);
                echo "\" alt=\"\">
                            </a>

                        </div>
                    ";
            }
            // line 50
            echo "                    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "image2", [])) {
                // line 51
                echo "                        <div class=\"item \">
                            <a href=\"https://eshop-station.com/produit/?categorie_id=38\">
                                <img style=\"width: 100%;height:360px;object-fit: cover;\"  src=\"/uploads/produits/";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "image2", []), "html", null, true);
                echo "\" alt=\"\"></a>
                        </div>
                    ";
            }
            // line 56
            echo "                    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "image3", [])) {
                // line 57
                echo "
                        <div class=\"item \">
                            <a href=\"https://eshop-station.com/produit/?categorie_id=44\">
                                <img style=\"width: 100%;height:360px;object-fit: cover;\"
                                    src=\"/uploads/produits/";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "image3", []), "html", null, true);
                echo "\" alt=\"\"></a>
                        </div>
                    ";
            }
            // line 64
            echo "                    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "image4", [])) {
                // line 65
                echo "
                        <div class=\"item  \">
                            <a href=\"https://eshop-station.com/produit/?categorie_id=44\">
                                <img style=\"width: 100%;height:360px; object-fit: cover;
\"
                                     src=\"/uploads/produits/";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "image4", []), "html", null, true);
                echo "\" alt=\"\"></a>
                        </div>
                    ";
            }
            // line 73
            echo "

                </div>

                <!-- Left and right controls -->
                <!--

            <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\" style=\"background-color: transparent\">
                <span class=\"glyphicon glyphicon-chevron-left\"></span>
                <span class=\"sr-only\">";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Previous"), "html", null, true);
            echo "</span>
            </a>
            <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\" style=\"background-color: transparent\">
                <span class=\"glyphicon glyphicon-chevron-right\"></span>
                <span class=\"sr-only\">";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next"), "html", null, true);
            echo "</span>
            </a>
            -->

            </div>

            <!-- carossel-->
        ";
        }
        // line 94
        echo "

        <input type=\"text\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, ($context["cp"] ?? $this->getContext($context, "cp")), "html", null, true);
        echo "\" id=\"cp\" style=\"display: none;\">
        <!--/.banner style1-->
        ";
        // line 98
        if ((twig_length_filter($this->env, ($context["produitspromo"] ?? $this->getContext($context, "produitspromo"))) > 1)) {
            // line 99
            echo "
            <div class=\"container main-container\" style=\"margin-top: 1px !important;\">

                <!-- Main component call to action -->

                <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">

                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 row\">
                        <h3 class=\"col-lg-9 col-md-9 col-sm-7 col-xs-7 section-title   text-left\">
                            <span>";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nos Promotions", [], "messages"), "html", null, true);
            echo " </span></h3>
                        <div class=\"col-lg-3 col-md-3 col-sm-5 col-xs-5 text-right\">
                            <a style=\"float: right;
                        font-family: Roboto-Regular, sans-serif;
                        font-style: normal;
                        font-weight: bold;
                        font-size: 16px;
                        line-height: 40px;
                        text-align: center;
                        color: #7f8c8d!important;
                          padding-top: 15px\" href=\"";
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_all");
            echo "\">
                                <i class=\"fa fa-caret-right icon\"></i>&nbsp;";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("view_all", [], "messages"), "html", null, true);
            echo " </a>
                        </div>


                    </div>

                    <div class=\"container hidden-xs hidden-sm\">
                        <div class=\"row xsResponse\">

                            ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produitspromo"] ?? $this->getContext($context, "produitspromo")));
            foreach ($context['_seq'] as $context["key"] => $context["produit"]) {
                // line 129
                echo "                                ";
                if (($context["key"] < 4)) {
                    // line 130
                    echo "                                    <div class=\"item col-lg-3 col-md-4 col-sm-6 col-xs-12\" style=\"margin-top: 25px\">
                                        <div class=\"product\">
                                            <a ";
                    // line 132
                    if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
                        // line 133
                        echo "                                                onclick=\"addfavoris(";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                        echo ")\"
                                            ";
                    } else {
                        // line 135
                        echo "                                                ";
                        // line 136
                        echo "                                                href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login", ["produitid" => $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", [])]), "html", null, true);
                        echo "\"

                                            ";
                    }
                    // line 139
                    echo "                                                    class=\"add-fav tooltipHere
                                                ";
                    // line 140
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["favoris"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["favoris"]) {
                        // line 141
                        echo "                                                    ";
                        if ((($this->getAttribute($context["favoris"], "utilisateur", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) && ($this->getAttribute($context["favoris"], "produit", []) == $this->getAttribute($context["produit"], "produit", [])))) {
                            echo " active ";
                        }
                        // line 142
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

                                            <div class=\"image\" style=\"width: 100%!important;height:68%!important\">

                                ";
                    // line 151
                    if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "description", []) || $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "descriptionen", []))) {
                        // line 152
                        echo "                                                <div class=\"quickview\">
                                                    <a class=\"btn btn-xs btn-quickview\"
                                                       href=\"";
                        // line 154
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_produits", ["produitid" => $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", [])]), "html", null, true);
                        echo "\"
                                                    >";
                        // line 155
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details", [], "messages"), "html", null, true);
                        echo " </a>
                                                </div>
                                ";
                    }
                    // line 158
                    echo "                                                <img style=\"width: 100%!important;border-top-left-radius: 10px;border-top-right-radius: 10px;max-height: 300px;min-height:300px;height:100%!important;object-fit: contain  !important\"
                                                     src=\"";
                    // line 159
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
                    echo "\"
                                                     data-original=\"";
                    // line 160
                    if ((($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) != ""))) {
                        echo "/uploads/produits/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
                        echo " ";
                    }
                    echo "\"
                                                     alt=\"img\"
                                                     class=\"img-responsive lazy\">

                                                ";
                    // line 164
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                        // line 165
                        echo "                                                    <div class=\"promotion\">
                                                <span class=\"discount\">";
                        // line 166
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion", [], "messages"), "html", null, true);
                        echo "
                                                </span>
                                                    </div>
                                                ";
                    } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 169
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) == 1))) {
                        // line 170
                        echo "                                                    <div class=\"promotion\">
                                                <span class=\"discount\">";
                        // line 171
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion", [], "messages"), "html", null, true);
                        echo "
                                                    ";
                        // line 172
                        echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "percentage", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
                        echo "%

                                                    ";
                        // line 176
                        echo "                                                </span>
                                                    </div>
                                                ";
                    } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 178
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) > 1))) {
                        // line 179
                        echo "                                                    <div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 181
                        echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "percentage", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
                        echo "%
                                            ";
                        // line 184
                        echo "                                            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sur le", [], "messages"), "html", null, true);
                        echo "
                                            ";
                        // line 185
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ème", [], "messages"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t</span>
                                                    </div>
                                                ";
                    }
                    // line 189
                    echo "                                            </div>
                                            <div style=\"height: 32%!important; position: relative;\">


                                                <div class=\"line_gradient\"></div>

                                                <div class=\"description\">
                                                    ";
                    // line 196
                    if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nomen", []), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
                    }
                    // line 197
                    echo "
                                                </div>

                                                <span class=\"cat_badge\">
                                                ";
                    // line 201
                    if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "categorie", []), "nomEn", []), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "categorie", []), "nom", []), "html", null, true);
                    }
                    // line 202
                    echo "                                            </span>
                                                ";
                    // line 224
                    echo "                                                <div class=\"row\"
                                                     style=\" position: absolute;  bottom: 10px;left: 0;right: 0\">
                                                    <div class=\"col-lg-6 col-md-6 col-xs-6 col-sm-6 \">
                                                        <div class=\"price div_card text-left\" style=\"
                                                        ";
                    // line 228
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") == false) || (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") == true) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) > 1)))) {
                        // line 229
                        echo "                                                                padding-bottom: 22px;
                                                        ";
                    }
                    // line 230
                    echo " padding-left: 14px\">

                                                             <span class=\"old-price\">
                                                    ";
                    // line 233
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                        // line 234
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                        echo "
                                                        ";
                        // line 236
                        echo "                                                    ";
                    } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) == 1))) {
                        // line 237
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                        echo "
                                                    ";
                    }
                    // line 239
                    echo "                                                 </span>
                                                            <br>

                                                            <span>
                                                       ";
                    // line 243
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                    echo "
                                                         </span>
                                                        </div>

                                                    </div>
                                                    <div class=\"div_card  col-lg-6 col-md-6 col-xs-6 col-sm-6 text-right\"
                                                         style=\"padding-right: 23px\">
                                                        <div class=\" \" id=\"quantite";
                    // line 250
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                             name=\"quantite";
                    // line 251
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\" disabled=\"none\"
                                                             hidden>

                                                            <div class=\"col-lg-12 col-md-12 col-xs-12\">
                                                                <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle";
                    // line 258
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                        onclick=\"deleteArticleQuantity(";
                    // line 259
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
                                                                    <input style=\" height: 4.5rem;!important;\"
                                                                           type=\"text\"
                                                                           id=\"qte";
                    // line 268
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                           name=\"qte";
                    // line 269
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                           class=\"form-control input-number text-center\" ";
                    // line 270
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", true, true)) {
                        echo " value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array"), "html", null, true);
                        echo "\" ";
                    } else {
                        echo " value=\"0\" ";
                    }
                    // line 271
                    echo "                                                                           min=\"1\" max=\"100\" disabled>
                                                                    <span class=\"input-group-btn\">
                                                                <button id=\"addArticle";
                    // line 273
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                        onclick=\"addArticle(";
                    // line 274
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
                    // line 285
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                             name=\"addcart";
                    // line 286
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\">
                                                            ";
                    // line 287
                    if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []) == 0)) {
                        // line 288
                        echo "                                                                <button disabled type=\"button\"
                                                                        style=\" background-color: #8c8586; color: white; border: 1px solid #8c8586; padding: 0 0; height: 43px;  width: 43px;\"
                                                                        data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
\t\t\t\t\t\t\t\t                         \t<span class=\"add2cart\">
                                                                ";
                        // line 294
                        echo "                                                            <span class=\"btnspanadd\"> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                        echo " <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t                              \t</span>
                                                                </button>
                                                            ";
                    } else {
                        // line 299
                        echo "                                                                ";
                        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                            // line 300
                            echo "
                                                                    <a class=\" btn_card\"
                                                                       style=\"padding-top: 15px; padding-bottom: 15px;\"
                                                                       href=\"";
                            // line 303
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_produits", ["produitid" => $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", [])]), "html", null, true);
                            echo "\">
                                                         <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> ";
                            // line 305
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                            echo " <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                                                                    </a>

                                                                ";
                        } else {
                            // line 311
                            echo "
                                                                    <button type=\"submit\" class=\"btn_card\"
                                                                            ";
                            // line 323
                            echo "
                                                                            id=\"btn-panier";
                            // line 324
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                            echo "\"
                                                                            onclick=\"enabledivquantity(";
                            // line 325
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                            echo ",";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []), "html", null, true);
                            echo ",";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
                            echo ")\"

                                                                            data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                             <span class=\"add2cart\">
                                                                  <span class=\"btnspanadd\"> ";
                            // line 329
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                            echo " <i
                                                                              class=\"fa fa-shopping-cart\"></i></span>
                                                             </span>
                                                                    </button>

                                                                ";
                        }
                        // line 335
                        echo "
                                                            ";
                    }
                    // line 337
                    echo "                                                        </div>
                                                    </div>

                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                ";
                }
                // line 348
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 350
            echo "
                            <!--/.item-->
                        </div>
                        <!-- /.row -->

                    </div>
                    <!--/.container-->

                    <div class=\"container hidden-lg hidden-md\">
                        <div id=\"owl-demopromos\" class=\"owl-carousel owl-theme\">
                            ";
            // line 360
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produitspromo"] ?? $this->getContext($context, "produitspromo")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 361
                echo "                                <div class=\"item\">
                                    <div class=\"product\">


                                        <a ";
                // line 365
                if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
                    echo " onclick=\"addfavoris(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ")\"
                                        ";
                } else {
                    // line 367
                    echo "                                            ";
                    // line 368
                    echo "                                            href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login", ["produitid" => $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", [])]), "html", null, true);
                    echo "\"

                                        ";
                }
                // line 371
                echo "                                                class=\" add-fav tooltipHere
                                    ";
                // line 372
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["favoris"]);
                foreach ($context['_seq'] as $context["_key"] => $context["favoris"]) {
                    // line 373
                    echo "                                    ";
                    if ((($this->getAttribute($context["favoris"], "utilisateur", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) && ($this->getAttribute($context["favoris"], "produit", []) == $this->getAttribute($context["produit"], "produit", [])))) {
                        echo "active";
                    }
                    // line 374
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favoris'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\"
                                                data-placement=\"left\">
                                            <i class=\"glyphicon glyphicon-heart\"></i>
                                        </a>
                                        <div class=\"image\" style=\"width: 100%!important;height: 68%!important;\">
                                            ";
                // line 379
                if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "description", []) || $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "descriptionen", []))) {
                    // line 380
                    echo "
                                            <div class=\"quickview\">
                                                <a class=\"btn btn-xs btn-quickview\"
                                                   href=\"";
                    // line 383
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_produits", ["produitid" => $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", [])]), "html", null, true);
                    echo "\"
                                                >";
                    // line 384
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details"), "html", null, true);
                    echo " </a>
                                            </div>
                                            ";
                }
                // line 387
                echo "
                                            <img style=\"width: 100%!important;border-top-left-radius: 10px;border-top-right-radius: 10px;max-height: 300px;min-height:300px;height: 100%!important;object-fit: contain  !important\"
                                                 src=\"";
                // line 389
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
                echo "\"
                                                 data-original=\"";
                // line 390
                if ((($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) != ""))) {
                    echo "/uploads/produits/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 391
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
                    echo " ";
                }
                echo "\" alt=\"img\"
                                                 class=\"img-responsive lazy\"> ";
                // line 392
                if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []) > 0)) {
                    // line 393
                    echo "
                                                ";
                    // line 394
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                        // line 395
                        echo "                                                    <div class=\"promotion\">
                                                        <span class=\"discount\">";
                        // line 396
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion"), "html", null, true);
                        echo "</span>
                                                    </div>
                                                ";
                    } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 398
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) == 1))) {
                        // line 399
                        echo "                                                    <div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\">";
                        // line 400
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion"), "html", null, true);
                        echo "
                                            ";
                        // line 401
                        echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "percentage", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
                        echo "%
\t\t\t\t\t\t\t\t\t\t</span>
                                                    </div>

                                                ";
                    } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 405
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) > 1))) {
                        // line 406
                        echo "                                                    <div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\">
                                            ";
                        // line 408
                        echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "percentage", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
                        echo "%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        ";
                        // line 409
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sur le"), "html", null, true);
                        echo "
                                            ";
                        // line 410
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ème"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t</span>
                                                    </div>
                                                ";
                    }
                    // line 414
                    echo "                                            ";
                } else {
                    // line 415
                    echo "                                                <div class=\"promotion\">
                                                    <span class=\"horsstock\"
                                                          style=\"    font-weight: 400;\">\t";
                    // line 417
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HORS STOCK"), "html", null, true);
                    echo "\t</span>
                                                </div>
                                            ";
                }
                // line 420
                echo "                                        </div>
                                        <div style=\"height: 32%!important;position: relative\">


                                            <div class=\"line_gradient\"></div>


                                            <div class=\"description\">
                                                ";
                // line 428
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nomen", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
                }
                // line 429
                echo "
                                            </div>
                                            <span class=\"cat_badge\">
                                        ";
                // line 432
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "categorie", []), "nomEn", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "categorie", []), "nom", []), "html", null, true);
                }
                // line 433
                echo "                                    </span>
                                            ";
                // line 452
                echo "

                                            <div class=\"row\" style=\"position: absolute;  bottom: 10px;left: 0;right: 0\">
                                                <div class=\"col-lg-6 col-md-6 col-xs-6 col-sm-6\">
                                                    <div class=\" price  div_card\" style=\"padding-left: 14px;
                                                    ";
                // line 457
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") == false) || (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") == true) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) > 1)))) {
                    // line 458
                    echo "                                                            padding-bottom: 22px;
                                                    ";
                }
                // line 459
                echo " \">
                                                        <span class=\"old-price\" style=\"float:left\">
                                              ";
                // line 461
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) == 1))) {
                    // line 462
                    echo "                                                  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                    echo "
                                              ";
                } elseif ((($this->getAttribute($this->getAttribute($this->getAttribute(                // line 463
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                    // line 464
                    echo "                                                  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                    echo "
                                              ";
                }
                // line 466
                echo "                                                </span>
                                                        <br>
                                                        <span class=\"\"
                                                              style=\"float:left\"> ";
                // line 469
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "</span>


                                                    </div>
                                                </div>
                                                <div class=\"div_card col-lg-6 col-md-6 col-xs-6 col-sm-6 \"
                                                     style=\"padding-right: 20px;padding-left: 10px;\">
                                                    <div class=\"row\" id=\"quantite";
                // line 476
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                         name=\"quantite";
                // line 477
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\" disabled=\"none\" hidden>

                                                        <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                                            <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle";
                // line 483
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                        onclick=\"deleteArticleQuantity(";
                // line 484
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prix", []), "html", null, true);
                echo ")\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t                             \t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t                        \t</button>
                                                            </span>
                                                                <input style=\" height: 4.5rem;!important;\" type=\"text\"
                                                                       id=\"qte";
                // line 492
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                       name=\"qte";
                // line 493
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                       class=\"form-control input-number text-center\" ";
                // line 494
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", true, true)) {
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array"), "html", null, true);
                    echo "\" ";
                } else {
                    echo " value=\"0\" ";
                }
                // line 495
                echo "                                                                       min=\"1\" max=\"100\" disabled>
                                                                <span class=\"input-group-btn\">
                                                                <button id=\"addArticle";
                // line 497
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                        onclick=\"addArticle(";
                // line 498
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
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
                // line 511
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                         name=\"addcart";
                // line 512
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\">
                                                        ";
                // line 513
                if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []) == 0)) {
                    // line 514
                    echo "                                                            <button disabled type=\"button\"
                                                                    style=\" background-color: #8c8586; color: white; border: 1px solid #8c8586; padding: 0 0;
    height: 43px;
    width: 43px;
    margin-bottom: 8px;

\"
                                                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
\t\t\t\t\t\t\t\t                        \t<span class=\"add2cart\">
\t\t\t\t\t\t\t\t\t                      \t<i style=\"font-size: 17px;\"
                                                               class=\"glyphicon glyphicon-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t                       </span>
                                                            </button>
                                                        ";
                } else {
                    // line 528
                    echo "
                                                            ";
                    // line 529
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                        // line 530
                        echo "
                                                                <a class=\" btn_card\"
                                                                   style=\"padding-top: 15px; padding-bottom: 15px;\"
                                                                   href=\"";
                        // line 533
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_produits", ["produitid" => $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", [])]), "html", null, true);
                        echo "\">
                                                         <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> ";
                        // line 535
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                        echo " <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                                                                </a>

                                                            ";
                    } else {
                        // line 541
                        echo "                                                                <button type=\"submit\" class=\"btn_card\"
                                                                        ";
                        // line 551
                        echo "

                                                                        id=\"btn-panier";
                        // line 553
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                        echo "\"
                                                                        onclick=\"enabledivquantity(";
                        // line 554
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
                        echo ")\"

                                                                        data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                        <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> ";
                        // line 558
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                        echo " <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                                                                </button>
                                                            ";
                    }
                    // line 563
                    echo "

                                                        ";
                }
                // line 566
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
            // line 577
            echo "
                        </div>

                    </div>


                    ";
            // line 583
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produitspromo"] ?? $this->getContext($context, "produitspromo")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 584
                echo "                        <!-- Modal -->
                        <div class=\"modal fade\" id=\"productSetailsModalAjax";
                // line 585
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\" tabindex=\"-1\"
                             role=\"dialog\"
                             aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"row transitionfx text-left\"
                                         style=\"padding: 30px;margin-right: 0px!important; margin-left: 0px;!important;  \">
                                        <div class=\"col-lg-12\">
                                            <button style=\"opacity: 1.2;margin-top: -21px;margin-right: -18px;background-color: #ffffff;/* color: #454545; */\"
                                                    type=\"button\" class=\" close\" data-dismiss=\"modal\"
                                                    aria-label=\"Close\">
                                                <span style=\"color: #454545;\" aria-hidden=\"true\">×</span>
                                            </button>
                                        </div>
                                        <!-- left column -->
                                        <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                            <!-- product Image and Zoom -->


                                            <div class=\"sp-large\"
                                                 style=\"overflow: hidden; height: auto; left: 0px; top: 0px;max-width: 100% !important\">
                                                <a href=\"\" class=\"\"
                                                   style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                                    <img id=\"imageproduit";
                // line 608
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                         data-original=\"/uploads/produits/";
                // line 609
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                echo "\"
                                                         src=\"";
                // line 610
                if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) != ""))) {
                    echo "/uploads/produits/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default"), "html", null, true);
                }
                echo "\"
                                                         alt=\"";
                // line 611
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
                echo "\" class=\"img-responsive\">
                                                </a>
                                            </div>
                                        </div>
                                        <!--/ left column end -->


                                        <!-- right column -->
                                        <div class=\"col-lg-8 col-md-6 col-sm-5\">
                                            <input type=\"text\" id=\"idproduit\" value=\"";
                // line 620
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                   hidden>

                                            <h1 class=\"product-title titleproduitt\">";
                // line 623
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nomen", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
                }
                // line 624
                echo "
                                            </h1>

                                            <div class=\"description\">
                                                ";
                // line 628
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "descriptionen", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "description", []), "html", null, true);
                }
                // line 629
                echo "
                                            </div>
                                            <div class=\"product-price\" style=\"    font-size: 20px;\">
                                                <span class=\"price-sales price\">  ";
                // line 632
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "\t </span>

                                                ";
                // line 634
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) == 1))) {
                    // line 635
                    echo "                                                    <span class=\"price-standard old-price\"> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                    echo " </span>

                                                ";
                } elseif ((($this->getAttribute($this->getAttribute($this->getAttribute(                // line 637
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                    // line 638
                    echo "                                                    <span class=\"price-standard old-price\"> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                    echo "</span>
                                                ";
                }
                // line 640
                echo "                                            </div>
                                            ";
                // line 641
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                    // line 642
                    echo "
                                                <div class=\"color-details\">
                                                    ";
                    // line 644
                    if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) != ""))) {
                        // line 645
                        echo "                                                        <img name='img' id='";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                        echo "'
                                                             style=\"width:  100px;height: 100px;background-size: contain;border-width: 2px; border-color: #ED0000;border-style: solid;\"
                                                             src=\"/uploads/produits/";
                        // line 647
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                        echo "\"
                                                             onclick=\"changeImage('";
                        // line 648
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                        echo "')\"
                                                             alt=\"img\">
                                                    ";
                    }
                    // line 651
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 652
                        echo "                                                        ";
                        if (($this->getAttribute($context["c"], "image", []) && ($this->getAttribute($context["c"], "image", []) != ""))) {
                            // line 653
                            echo "
                                                            <img name='img' id='";
                            // line 654
                            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                            echo "'
                                                                 style=\"    width:  100px;height: 100px;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                                                 src=\"/uploads/produits/";
                            // line 656
                            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                            echo "\"
                                                                 onclick=\"changeImage('";
                            // line 657
                            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                            echo "')\"
                                                                 alt=\"img\">

                                                        ";
                        }
                        // line 661
                        echo "
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 663
                    echo "                                                </div>
                                                <div class=\"color-details\">
                                                    <span class=\"selected-color\"><strong
                                                                class=\"text_details\">";
                    // line 666
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Couleurs"), "html", null, true);
                    echo "</strong></span>
                                                    <ul class=\"swatches Color\" name=\"couleur";
                    // line 667
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                        id=\"couleur";
                    // line 668
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\">
                                                        ";
                    // line 669
                    $context["i"] = 1;
                    // line 670
                    echo "                                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["couleur"]) {
                        // line 671
                        echo "                                                            ";
                        if ((($context["i"] ?? $this->getContext($context, "i")) == 1)) {
                            // line 672
                            echo "                                                                <li class=\"selected\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                            echo "\"
                                                                    onclick=\"changeImagecouleur('";
                            // line 673
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "id", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "image", []), "html", null, true);
                            echo "')\">
                                                                    <a style=\"background-color:";
                            // line 674
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                            echo ";color:transparent\"></a>
                                                                </li>
                                                            ";
                        } else {
                            // line 677
                            echo "                                                                <li value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                            echo "\"
                                                                    onclick=\"changeImagecouleur('";
                            // line 678
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "id", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "image", []), "html", null, true);
                            echo "')\">
                                                                    <a style=\"background-color:";
                            // line 679
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                            echo ";color:transparent\"></a>
                                                                </li>
                                                            ";
                        }
                        // line 682
                        echo "                                                            ";
                        $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                        // line 683
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couleur'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 684
                    echo "                                                    </ul>
                                                </div>
                                            ";
                }
                // line 687
                echo "                                            <!--/.color-details-->
                                            <div class=\"color-details\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-4 col-md-4 col-xs-6\" style=\"\">
                                                        <span class=\"selected-color\"><strong
                                                                    class=\"text_details\">";
                // line 692
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantité"), "html", null, true);
                echo "</strong></span>
                                                        ";
                // line 693
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                    // line 694
                    echo "
                                                            <div class=\"input-group\">
                                                                <span class=\"input-group-btn \">
                                                                    <button id=\"deleteArticle";
                    // line 697
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                            onclick=\"moinsquantity(";
                    // line 698
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ")\"
                                                                            type=\"button\"
                                                                            class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                            style=\"background-color:#ED0000\"
                                                                            data-type=\"minus\"
                                                                            data-field=\"\">
                                                                        <span class=\"glyphicon glyphicon-minus\"></span>
                                                                    </button>
                                                                </span>
                                                                <input style=\" height: 4.5rem;!important;\" type=\"text\"
                                                                       id=\"quantitymodal";
                    // line 708
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                       name=\"quantitymodal";
                    // line 709
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                       class=\"form-control input-number text-center\" ";
                    // line 710
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", true, true)) {
                        echo " value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array"), "html", null, true);
                        echo "\" ";
                    } else {
                        echo " value=\"1\" ";
                    }
                    // line 711
                    echo "                                                                       min=\"1\" max=\"100\" disabled>
                                                                <span class=\"input-group-btn\">
                                                                    <button onclick=\"plusquantity(";
                    // line 713
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ")\"
                                                                            type=\"button\"
                                                                            class=\"quantity-right-plus btn btn-success btn-number btn_plus_moins\"
                                                                            style=\"background-color:#ED0000\"
                                                                            data-type=\"plus\"
                                                                            data-field=\"\">
                                                                        <span class=\"glyphicon glyphicon-plus\"></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        ";
                } else {
                    // line 724
                    echo "
                                                            <div class=\"row\" id=\"quantite";
                    // line 725
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                 name=\"quantite";
                    // line 726
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                 disabled=\"none\">

                                                                <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                                                    <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle";
                    // line 733
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                        onclick=\"moinquantityD(";
                    // line 734
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ")\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
                                                                    <span class=\"glyphicon glyphicon-minus\"></span>
                                                                </button>
                                                            </span>
                                                                        <input style=\" height: 4.5rem;!important;\"
                                                                               type=\"text\"
                                                                               id=\"qte";
                    // line 743
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                               name=\"qte";
                    // line 744
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                               class=\"form-control input-number text-center\" ";
                    // line 745
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", true, true)) {
                        echo " value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array"), "html", null, true);
                        echo "\" ";
                    } else {
                        echo " value=\"0\" ";
                    }
                    // line 746
                    echo "                                                                               min=\"1\" max=\"100\" disabled>
                                                                        <span class=\"input-group-btn\">
                                                                <button id=\"addArticle";
                    // line 748
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                        onclick=\"plusquantityD(";
                    // line 749
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
                // line 762
                echo "

                                                    </div>

                                                    ";
                // line 766
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                    // line 767
                    echo "
                                                        <div class=\"col-lg-8 col-sm-6 col-xs-6\">
                                                            <span class=\"selected-color\"><strong
                                                                        class=\"text_details\">";
                    // line 770
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Taille"), "html", null, true);
                    echo "</strong></span>
                                                            <select class=\"form-control\"
                                                                    id=\"sizes";
                    // line 772
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                    name=\"sizes";
                    // line 773
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                    onchange=\"changeSize(";
                    // line 774
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ")\"
                                                                    style=\"border-radius: 0px;height: 43px;font-family: Roboto-Regular,sans-serif\">
                                                                <option disabled selected class=\"text_details\">
                                                                    ";
                    // line 777
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir la taille"), "html", null, true);
                    echo "</option>
                                                                ";
                    // line 778
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                        // line 779
                        echo "                                                                    ";
                        $context["i"] = 1;
                        // line 780
                        echo "                                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", []), "0", [], "array"), "sizes", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                            // line 781
                            echo "                                                                        ";
                            if ((($context["i"] ?? $this->getContext($context, "i")) == 1)) {
                                // line 782
                                echo "                                                                            <option value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                                echo "\"
                                                                                    selected>";
                                // line 783
                                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                                echo "</option>
                                                                        ";
                            } else {
                                // line 785
                                echo "                                                                            <option value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                                echo "</option>

                                                                        ";
                            }
                            // line 788
                            echo "                                                                        ";
                            $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                            // line 789
                            echo "
                                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 791
                        echo "                                                                ";
                    }
                    // line 792
                    echo "                                                            </select>
                                                        </div>
                                                    ";
                }
                // line 795
                echo "
                                                </div>
                                            </div>
                                            <!-- productFilter -->
                                            <div class=\"color-details\">
                                                ";
                // line 800
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                    // line 801
                    echo "
                                                    <button onclick=\"addArticleSize(";
                    // line 802
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ")\"
                                                            class=\"btn  btn-primary btn_card col-lg-6 \" type=\"submit\"
                                                            style=\"border: none;border-radius: 0px;padding: 12px 20px;\"
                                                            id=\"btn-panier\"
                                                            data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                              <span class=\"add2cart btnspanadd\">
                                                                  ";
                    // line 808
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter au panier"), "html", null, true);
                    echo "
                                                               </span>
                                                    </button>
                                                ";
                } else {
                    // line 812
                    echo "                                                    <button id=\"addArticlee";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                            onclick=\"addArticlee(";
                    // line 813
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
                    echo ")\"
                                                            class=\"btn  btn-primary btn_card col-lg-6 \" type=\"submit\"
                                                            style=\"border: none;border-radius: 0px;padding: 12px 20px;\"
                                                            data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                                    <span class=\"add2cart btnspanadd\">
                                                                    ";
                    // line 818
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter au panier"), "html", null, true);
                    echo "
                                                                     </span>
                                                    </button>
                                                ";
                }
                // line 822
                echo "
                                                <div class=\"col-lg-6 fich_technique\">
                                                    ";
                // line 824
                if ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "file", [])) {
                    // line 825
                    echo "
                                                        <a target=\"_blank\"
                                                           href=\"";
                    // line 827
                    echo twig_escape_filter($this->env, ($context["legal_notice_directory"] ?? $this->getContext($context, "legal_notice_directory")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "file", []), "html", null, true);
                    echo "\">
                                                            <svg _ngcontent-dxq-c64=\"\" height=\"20\" viewBox=\"0 0 512 512\"
                                                                 width=\"20\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                <g _ngcontent-dxq-c64=\"\" id=\"Solid\">
                                                                    <path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\"
                                                                          d=\"m239.029 384.97a24 24 0 0 0 33.942 0l90.509-90.509a24 24 0 0 0 0-33.941 24 24 0 0 0 -33.941 0l-49.539 49.539v-262.059a24 24 0 0 0 -48 0v262.059l-49.539-49.539a24 24 0 0 0 -33.941 0 24 24 0 0 0 0 33.941z\"></path>
                                                                    <path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\"
                                                                          d=\"m464 232a24 24 0 0 0 -24 24v184h-368v-184a24 24 0 0 0 -48 0v192a40 40 0 0 0 40 40h384a40 40 0 0 0 40-40v-192a24 24 0 0 0 -24-24z\"></path>
                                                                </g>
                                                            </svg>
                                                            ";
                    // line 837
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fiche Technique"), "html", null, true);
                    echo "
                                                        </a>
                                                    ";
                }
                // line 840
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
                // line 859
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
                // line 877
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pouvez_commander_au_max"), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
                echo "
                                            ";
                // line 878
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nomen", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
                }
                // line 879
                echo "                                        </h3>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        ";
                // line 899
                echo "
                        <div class=\"modal fade  \" id=\"modal-panier";
                // line 900
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                             aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\" style=\"background: #ED0000;\">
                                        <h4 class=\"modal-title\" id=\"exampleModalLongTitle\"
                                            style=\"margin-top: 11px;\">";
                // line 906
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
                // line 916
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("quantite_demander_indispo"), "html", null, true);
                echo "
                                            ";
                // line 917
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nomen", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
                }
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("est"), "html", null, true);
                echo "
                                            <span id=\"idinputtwo";
                // line 918
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\">  </span></h3>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                        </div>
                        ";
                // line 938
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 939
            echo "
                </div>

            </div>

        ";
        }
        // line 945
        echo "

        ";
        // line 947
        if ((twig_length_filter($this->env, ($context["produitspromo"] ?? $this->getContext($context, "produitspromo"))) == 1)) {
            // line 948
            echo "
            <div class=\"container main-container\" style=\"margin-top: 1px !important;\">

                <!-- Main component call to action -->

                <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">
                    <h3 class=\"section-title style2  text-left\">
                        <span style=\"background-color: #F7F9FA;\">";
            // line 955
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nos Promotions"), "html", null, true);
            echo "  </span></h3>

                    <div class=\"container\">
                        <div class=\"row xsResponse\">
                            ";
            // line 959
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produitspromo"] ?? $this->getContext($context, "produitspromo")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 960
                echo "                                <div class=\"item col-lg-3 col-md-3 col-sm-4 col-xs-12\" style=\"margin-top: 15px\">
                                    <div class=\"product\">
                                        <a ";
                // line 962
                if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
                    // line 963
                    echo "                                            onclick=\"addfavoris(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ")\"
                                        ";
                } else {
                    // line 965
                    echo "                                            ";
                    // line 966
                    echo "                                            href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login", ["produitid" => $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", [])]), "html", null, true);
                    echo "\"

                                        ";
                }
                // line 969
                echo "                                                class=\"add-fav tooltipHere
                                                ";
                // line 970
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["favoris"]);
                foreach ($context['_seq'] as $context["_key"] => $context["favoris"]) {
                    // line 971
                    echo "                                                    ";
                    if ((($this->getAttribute($context["favoris"], "utilisateur", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) && ($this->getAttribute($context["favoris"], "produit", []) == $this->getAttribute($context["produit"], "produit", [])))) {
                        echo " active

                                                    ";
                    }
                    // line 974
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

                                        <div class=\"image\"
                                             style=\"width: 100%!important;height:68%!important;border-radius: 5px\">
                                            ";
                // line 983
                if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "description", []) || $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "descriptionen", []))) {
                    // line 984
                    echo "
                                            <div class=\"quickview\">
                                                <a class=\"btn btn-xs btn-quickview\"
                                                   href=\"";
                    // line 987
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_produits", ["produitid" => $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", [])]), "html", null, true);
                    echo "\"
                                                >";
                    // line 988
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details"), "html", null, true);
                    echo " </a>
                                            </div>
                                            ";
                }
                // line 991
                echo "
                                            <img style=\"width: 100%!important;border-top-left-radius: 10px;border-top-right-radius: 10px;max-height: 300px;min-height:300px;height:100%!important;object-fit: contain  !important\"
                                                 src=\"";
                // line 993
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
                echo "\"
                                                 data-original=\"";
                // line 994
                if ((($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) != ""))) {
                    echo "/uploads/produits/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                    echo "
                                                            ";
                } else {
                    // line 995
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
                    echo " ";
                }
                echo "\"
                                                 alt=\"img\" class=\"img-responsive lazy\"
                                            >

                                            ";
                // line 999
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                    // line 1000
                    echo "                                                <div class=\"promotion\">
                                                    <span class=\"discount\">";
                    // line 1001
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion"), "html", null, true);
                    echo "</span>
                                                </div>
                                            ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 1003
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) == 1))) {
                    // line 1004
                    echo "                                                <div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\">";
                    // line 1005
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion"), "html", null, true);
                    echo "
                                            ";
                    // line 1006
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "percentage", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
                    echo "%
\t\t\t\t\t\t\t\t\t\t</span>
                                                </div>

                                            ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 1010
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) > 1))) {
                    // line 1011
                    echo "                                                <div class=\"promotion\">
                                                <span class=\"discount\">
                                                    ";
                    // line 1013
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "percentage", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
                    echo "%
                                                    ";
                    // line 1014
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sur le"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ème"), "html", null, true);
                    echo "
                                                </span>
                                                </div>
                                            ";
                }
                // line 1018
                echo "                                        </div>
                                        <div style=\"height: 32%!important;position: relative\">


                                            <div class=\"line_gradient\"></div>


                                            <div class=\"description\">
                                                ";
                // line 1026
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nomen", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
                }
                // line 1027
                echo "
                                            </div>
                                            <span class=\"cat_badge\">
                                                ";
                // line 1030
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "categorie", []), "nomEn", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "categorie", []), "nom", []), "html", null, true);
                }
                // line 1031
                echo "                                            </span>
                                            ";
                // line 1051
                echo "

                                            <div class=\"row\" style=\"position: absolute;  bottom: 10px;left: 0;right: 0\">
                                                <div class=\"col-lg-6 col-md-6 col-xs-6 col-sm-6\">
                                                    <div class=\" price div_card\" style=\"padding-left: 14px;
                                                    ";
                // line 1056
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") == false) || (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") == true) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) > 1)))) {
                    // line 1057
                    echo "                                                            padding-bottom: 22px;
                                                    ";
                }
                // line 1058
                echo "\">

                                                        <span class=\"old-price\">
                                                   ";
                // line 1061
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                    // line 1062
                    echo "                                                       ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                    echo "

                                                   ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 1064
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) == 1))) {
                    // line 1065
                    echo "                                                       ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                    echo "
                                                   ";
                }
                // line 1067
                echo "                                                </span>

                                                        <br>
                                                        <span>
                                                         ";
                // line 1071
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
                                                            ";
                // line 1074
                echo "                                                </span>
                                                    </div>

                                                </div>
                                                <div class=\"div_card col-lg-6 col-md-6 col-xs-6 col-sm-6 text-right\"
                                                     style=\"padding-right: 20px;padding-left: 10px;\">
                                                    <div class=\"row\" id=\"quantite";
                // line 1080
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                         name=\"quantite";
                // line 1081
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\" disabled=\"none\" hidden>

                                                        <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                                            <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle";
                // line 1087
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                        onclick=\"deleteArticleQuantity(";
                // line 1088
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prix", []), "html", null, true);
                echo ")\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
                                                                    <span class=\"glyphicon glyphicon-minus\"></span>
                                                                </button>
                                                            </span>
                                                                <input style=\" height: 4.5rem;!important;\" type=\"text\"
                                                                       id=\"qte";
                // line 1096
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                       name=\"qte";
                // line 1097
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                       class=\"form-control input-number text-center\" ";
                // line 1098
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", true, true)) {
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array"), "html", null, true);
                    echo "\" ";
                } else {
                    echo " value=\"0\" ";
                }
                // line 1099
                echo "                                                                       min=\"1\" max=\"100\" disabled>
                                                                <span class=\"input-group-btn\">
                                                                <button id=\"addArticle";
                // line 1101
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                        onclick=\"addArticle(";
                // line 1102
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
                                                    <div class=\"\" id=\"addcart";
                // line 1113
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                         name=\"addcart";
                // line 1114
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\">
                                                        ";
                // line 1115
                if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []) == 0)) {
                    // line 1116
                    echo "                                                            <button disabled type=\"button\"
                                                                    style=\"

    background-color: #8c8586;
    color: white;
    border: 1px solid #8c8586;
    padding: 0 0;
    height: 43px;
    width: 43px;
    margin-bottom: 8px;

\"
                                                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
\t\t\t\t\t\t\t\t                             \t<span class=\"add2cart\">
\t\t\t\t\t\t\t\t\t                         \t<i style=\"font-size: 17px;\"
                                                                   class=\"glyphicon glyphicon-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t                              </span>
                                                            </button>
                                                        ";
                } else {
                    // line 1135
                    echo "                                                            ";
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                        // line 1136
                        echo "
                                                                <a class=\" btn_card\"
                                                                   style=\"padding-top: 15px; padding-bottom: 15px;\"
                                                                   href=\"";
                        // line 1139
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_produits", ["produitid" => $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", [])]), "html", null, true);
                        echo "\">
                                                         <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> ";
                        // line 1141
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                        echo " <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                                                                </a>

                                                            ";
                    } else {
                        // line 1147
                        echo "
                                                                <button type=\"submit\" class=\"btn_card\"
                                                                        ";
                        // line 1159
                        echo "
                                                                        id=\"btn-panier";
                        // line 1160
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                        echo "\"
                                                                        onclick=\"enabledivquantity(";
                        // line 1161
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
                        echo ")\"

                                                                        data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                                  <span class=\"add2cart\">
                                                                         <span class=\"btnspanadd\"> ";
                        // line 1165
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                        echo " <i
                                                                                     class=\"fa fa-shopping-cart\"></i></span>

                                                                     </span>
                                                                </button>
                                                            ";
                    }
                    // line 1171
                    echo "


                                                        ";
                }
                // line 1175
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
            // line 1183
            echo "                            <!--/.item-->
                            ";
            // line 1184
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produitspromo"] ?? $this->getContext($context, "produitspromo")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 1185
                echo "                                <div class=\"modal fade\" id=\"productSetailsModalAjax";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                     tabindex=\"-1\" role=\"dialog\"
                                     aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"row transitionfx text-left\"
                                                 style=\"padding: 30px;margin-right: 0px!important; margin-left: 0px;!important;\">
                                                <div class=\"col-lg-12\">
                                                    <button style=\"opacity: 1.2;margin-top: -21px;margin-right: -18px;background-color: #ffffff;/* color: #454545; */\"
                                                            type=\"button\" class=\" close\" data-dismiss=\"modal\"
                                                            aria-label=\"Close\">
                                                        <span style=\"color: #454545;\" aria-hidden=\"true\">×</span>
                                                    </button>
                                                </div>
                                                <!-- left column -->
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <!-- product Image and Zoom -->
                                                    <div class=\"main-image sp-wrap col-lg-12 no-padding style3\"
                                                         style=\"display: inline-block;\">


                                                        <div class=\"sp-large\"
                                                             style=\"overflow: hidden; height: auto; left: 0px; top: 0px;max-width: 100% !important\">
                                                            <a href=\"\" class=\"\"
                                                               style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                                                <img id=\"imageproduit";
                // line 1210
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                     data-original=\"/uploads/produits/";
                // line 1211
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                echo "\"
                                                                     src=\"";
                // line 1212
                if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) != ""))) {
                    echo "/uploads/produits/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                    echo "

                                                                          ";
                } else {
                    // line 1214
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
                }
                echo "\"
                                                                     alt=\"";
                // line 1215
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
                echo "\"
                                                                     class=\"img-responsive\"
                                                                     style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                                            </a>
                                                        </div>
                                                    </div>


                                                </div>
                                                <!--/ left column end -->


                                                <!-- right column -->
                                                <div class=\"col-lg-8 col-md-6 col-sm-6\">
                                                    <input type=\"text\" id=\"idproduit\" value=\"";
                // line 1229
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                           hidden>

                                                    <h1 class=\"product-title titleproduitt\">

                                                        ";
                // line 1234
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nomen", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
                }
                // line 1235
                echo "
                                                    </h1>

                                                    <div class=\"description\">
                                                        ";
                // line 1239
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "descriptionen", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "description", []), "html", null, true);
                }
                // line 1240
                echo "
                                                    </div>
                                                    <div class=\"product-price\" style=\"font-size: 20px;\">
                                                        <span class=\"price-sales price\">  ";
                // line 1243
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "</span>
                                                        ";
                // line 1244
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) == 1))) {
                    // line 1245
                    echo "                                                            <span class=\"price-standard  old-price\"> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                    echo " </span>
                                                        ";
                } elseif ((($this->getAttribute($this->getAttribute($this->getAttribute(                // line 1246
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                    // line 1247
                    echo "                                                            <span class=\"price-standard old-price\"> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                    echo "</span>
                                                        ";
                }
                // line 1249
                echo "                                                    </div>

                                                    ";
                // line 1251
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                    // line 1252
                    echo "
                                                        <div class=\"color-details\">
                                                            ";
                    // line 1254
                    if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) != ""))) {
                        // line 1255
                        echo "                                                                <img name='img' id='";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                        echo "'
                                                                     style=\"width:  100px;height: 100px;background-size: contain;border-width: 2px; border-color: #ED0000;border-style: solid;\"
                                                                     src=\"/uploads/produits/";
                        // line 1257
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                        echo "\"
                                                                     onclick=\"changeImage('";
                        // line 1258
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                        echo "')\"
                                                                     alt=\"img\">
                                                            ";
                    }
                    // line 1261
                    echo "                                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 1262
                        echo "                                                                ";
                        if (($this->getAttribute($context["c"], "image", []) && ($this->getAttribute($context["c"], "image", []) != ""))) {
                            // line 1263
                            echo "
                                                                    <img name='img' id='";
                            // line 1264
                            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                            echo "'
                                                                         style=\"    width:  100px;height: 100px;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                                                         src=\"/uploads/produits/";
                            // line 1266
                            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                            echo "\"
                                                                         onclick=\"changeImage('";
                            // line 1267
                            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                            echo "')\"
                                                                         alt=\"img\">

                                                                ";
                        }
                        // line 1271
                        echo "
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1273
                    echo "                                                        </div>
                                                        <div class=\"color-details\">
                                                            <span class=\"selected-color selectedSpan\"><strong
                                                                        class=\"text_details\">";
                    // line 1276
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Couleurs"), "html", null, true);
                    echo "</strong></span>
                                                            <ul class=\"swatches Color\"
                                                                name=\"couleur";
                    // line 1278
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                id=\"couleur";
                    // line 1279
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\">
                                                                ";
                    // line 1280
                    $context["i"] = 1;
                    // line 1281
                    echo "                                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["couleur"]) {
                        // line 1282
                        echo "                                                                    ";
                        if ((($context["i"] ?? $this->getContext($context, "i")) == 1)) {
                            // line 1283
                            echo "                                                                        <li class=\"selected\"
                                                                            value=\"";
                            // line 1284
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                            echo "\"
                                                                            onclick=\"changeImagecouleur('";
                            // line 1285
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "id", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "image", []), "html", null, true);
                            echo "')\">
                                                                            <a style=\"background-color:";
                            // line 1286
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                            echo ";color:transparent\"></a>
                                                                        </li>
                                                                    ";
                        } else {
                            // line 1289
                            echo "                                                                        <li value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                            echo "\"
                                                                            onclick=\"changeImagecouleur('";
                            // line 1290
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "id", []), "html", null, true);
                            echo "','";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "image", []), "html", null, true);
                            echo "')\">
                                                                            <a style=\"background-color:";
                            // line 1291
                            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                            echo ";color:transparent\"></a>
                                                                        </li>
                                                                    ";
                        }
                        // line 1294
                        echo "                                                                    ";
                        $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                        // line 1295
                        echo "                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couleur'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1296
                    echo "                                                            </ul>
                                                        </div>
                                                    ";
                }
                // line 1299
                echo "                                                    <!--/.color-details-->

                                                    <div class=\"color-details\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-4 col-md-4 col-xs-6\" style=\"\">
                                                                <span class=\"selected-color selectedSpan\"><strong
                                                                            class=\"text_details\">";
                // line 1305
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantité"), "html", null, true);
                echo "</strong></span>

                                                                ";
                // line 1307
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                    // line 1308
                    echo "                                                                    <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"deleteArticle";
                    // line 1310
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                    onclick=\"moinsquantity(";
                    // line 1311
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ")\"
                                                                    type=\"button\"
                                                                    class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                    style=\"background-color:#ED0000\" data-type=\"minus\"
                                                                    data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                        <input style=\"font-family: Roboto-Regular,sans-serif;font-size: 14px;font-weight: bold; height: 4.5rem;!important;\"
                                                                               type=\"text\"
                                                                               id=\"quantitymodal";
                    // line 1321
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                               name=\"quantitymodal";
                    // line 1322
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                               class=\"form-control input-number text-center\" ";
                    // line 1323
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", true, true)) {
                        echo " value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array"), "html", null, true);
                        echo "\" ";
                    } else {
                        echo " value=\"1\" ";
                    }
                    // line 1324
                    echo "                                                                               min=\"1\" max=\"100\" disabled>

                                                                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button onclick=\"plusquantity(";
                    // line 1327
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
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
                    // line 1338
                    echo "
                                                                    <div class=\"row\"
                                                                         id=\"quantite";
                    // line 1340
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                         name=\"quantite";
                    // line 1341
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                         disabled=\"none\">

                                                                        <div class=\"col-lg-12 col-md-12 col-xs-12\"
                                                                             style=\"\">
                                                                            <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle";
                    // line 1349
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                        onclick=\"moinquantityD(";
                    // line 1350
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ")\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
                                                                    <span class=\"glyphicon glyphicon-minus\"></span>
                                                                </button>
                                                            </span>
                                                                                <input style=\" height: 4.5rem;!important;\"
                                                                                       type=\"text\"
                                                                                       id=\"qte";
                    // line 1359
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                                       name=\"qte";
                    // line 1360
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                                       class=\"form-control input-number text-center\" ";
                    // line 1361
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", true, true)) {
                        echo " value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array"), "html", null, true);
                        echo "\" ";
                    } else {
                        echo " value=\"0\" ";
                    }
                    // line 1362
                    echo "                                                                                       min=\"1\" max=\"100\" disabled>
                                                                                <span class=\"input-group-btn\">
                                                                <button id=\"addArticle";
                    // line 1364
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                        onclick=\"plusquantityD(";
                    // line 1365
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
                // line 1378
                echo "
                                                            </div>
                                                            ";
                // line 1380
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                    // line 1381
                    echo "
                                                                <div class=\"col-lg-8 col-sm-6 col-xs-6\">
                                                                    <span class=\"selected-color selectedSpan\"><strong
                                                                                class=\"text_details\">";
                    // line 1384
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Taille"), "html", null, true);
                    echo "</strong></span>
                                                                    <select class=\"form-control \"
                                                                            id=\"sizes";
                    // line 1386
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                            name=\"sizes";
                    // line 1387
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                            onchange=\"changeSize(";
                    // line 1388
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ")\"
                                                                            style=\"border-radius: 0px;height: 43px; font-family: Roboto-Regular,sans-serif\">
                                                                        <option disabled
                                                                                style=\" color:#374649;font-family: Roboto-Regular,sans-serif;font-size: 12px;font-weight: 400 \"
                                                                                selected>
                                                                            ";
                    // line 1393
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir la taille"), "html", null, true);
                    echo "</option>
                                                                        ";
                    // line 1394
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                        // line 1395
                        echo "                                                                            ";
                        $context["i"] = 1;
                        // line 1396
                        echo "                                                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", []), "0", [], "array"), "sizes", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                            // line 1397
                            echo "                                                                                ";
                            if ((($context["i"] ?? $this->getContext($context, "i")) == 1)) {
                                // line 1398
                                echo "                                                                                    <option value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                                echo "\"
                                                                                            selected>";
                                // line 1399
                                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                                echo "</option>
                                                                                ";
                            } else {
                                // line 1401
                                echo "                                                                                    <option value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                                echo "</option>

                                                                                ";
                            }
                            // line 1404
                            echo "                                                                                ";
                            $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                            // line 1405
                            echo "
                                                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1407
                        echo "                                                                        ";
                    }
                    // line 1408
                    echo "                                                                    </select>
                                                                </div>

                                                            ";
                }
                // line 1412
                echo "                                                        </div>
                                                    </div>
                                                    <!-- productFilter -->


                                                    <div class=\"color-details\">
                                                        ";
                // line 1418
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                    // line 1419
                    echo "

                                                            <button onclick=\"addArticleSize(";
                    // line 1421
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ")\"
                                                                    class=\"  btn_card col-lg-6\" type=\"submit\"
                                                                    id=\"btn-panier\"
                                                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                                <span class=\"add2cart\">
                                                                <span class=\"btnspanadd\">";
                    // line 1426
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                    echo " <i
                                                                            class=\"fa fa-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t                    </span>
                                                            </button>
                                                        ";
                } else {
                    // line 1431
                    echo "                                                            <button onclick=\"addArticlee(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
                    echo ")\"
                                                                    class=\"  btn_card col-lg-6\" type=\"submit\"
                                                                    id=\"addArticlee";
                    // line 1433
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                                <span class=\"add2cart\">
                                                                <span class=\"btnspanadd\">";
                    // line 1436
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                    echo " <i
                                                                            class=\"fa fa-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t                    </span>
                                                            </button>
                                                        ";
                }
                // line 1441
                echo "                                                        <div class=\"col-lg-6 fich_technique\">
                                                            ";
                // line 1442
                if ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "file", [])) {
                    // line 1443
                    echo "
                                                                <a target=\"_blank\"
                                                                   href=\"";
                    // line 1445
                    echo twig_escape_filter($this->env, ($context["legal_notice_directory"] ?? $this->getContext($context, "legal_notice_directory")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "file", []), "html", null, true);
                    echo "\">
                                                                    <svg _ngcontent-dxq-c64=\"\" height=\"20\"
                                                                         viewBox=\"0 0 512 512\" width=\"20\"
                                                                         xmlns=\"http://www.w3.org/2000/svg\">
                                                                        <g _ngcontent-dxq-c64=\"\" id=\"Solid\">
                                                                            <path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\"
                                                                                  d=\"m239.029 384.97a24 24 0 0 0 33.942 0l90.509-90.509a24 24 0 0 0 0-33.941 24 24 0 0 0 -33.941 0l-49.539 49.539v-262.059a24 24 0 0 0 -48 0v262.059l-49.539-49.539a24 24 0 0 0 -33.941 0 24 24 0 0 0 0 33.941z\"></path>
                                                                            <path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\"
                                                                                  d=\"m464 232a24 24 0 0 0 -24 24v184h-368v-184a24 24 0 0 0 -48 0v192a40 40 0 0 0 40 40h384a40 40 0 0 0 40-40v-192a24 24 0 0 0 -24-24z\"></path>
                                                                        </g>
                                                                    </svg>
                                                                    ";
                    // line 1456
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fiche Technique"), "html", null, true);
                    echo "
                                                                </a>
                                                            ";
                }
                // line 1459
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
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1476
            echo "                        </div>
                        <!-- /.row -->

                    </div>
                    <!--/.container-->
                </div>

            </div>

        ";
        }
        // line 1486
        echo "
        <div class=\"container main-container\" style=\"margin-top: 1px !important;\">

            <!-- Main component call to action -->

            <div class=\"row featuredPostContainer globalPadding style2\">

                ";
        // line 1493
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashBag", []), "get", [0 => "produitfini"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 1494
            echo "                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        ";
            // line 1498
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1501
        echo "                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 row\">
                    <h3 class=\"col-lg-8 col-md-8 col-sm-7 col-xs-7 section-title style2  text-left\">
                        <span> ";
        // line 1503
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produits les plus vendus"), "html", null, true);
        echo " </span>
                    </h3>

                    <div class=\"col-lg-4 col-md-4 col-sm-5 col-xs-5 text-right\">
                        <a style=\"float: right;
                        font-family: Roboto-Regular, sans-serif;
                        font-style: normal;
                        font-weight: bold;
                        font-size: 16px;
                        line-height: 40px;
                        text-align: center;
                        color: #7f8c8d!important;
                         padding-top: 15px\" href=\"";
        // line 1515
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_products");
        echo "\">
                            <i class=\"fa fa-caret-right icon\"></i>&nbsp;";
        // line 1516
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("view_all"), "html", null, true);
        echo " </a>
                    </div>
                </div>
                <br> <br> <br>
                <div id=\"owl-demo\" class=\"owl-carousel owl-theme\">
                    ";
        // line 1521
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 1522
            echo "                        <div class=\"item\">
                            <div class=\"product\">


                                <a ";
            // line 1526
            if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
                echo " onclick=\"addfavoris(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo ")\"
                                ";
            } else {
                // line 1528
                echo "                                    ";
                // line 1529
                echo "                                    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login", ["produitid" => $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", [])]), "html", null, true);
                echo "\"

                                ";
            }
            // line 1532
            echo "                                        class=\" add-fav tooltipHere
                                    ";
            // line 1533
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["favoris"]);
            foreach ($context['_seq'] as $context["_key"] => $context["favoris"]) {
                // line 1534
                echo "                                    ";
                if ((($this->getAttribute($context["favoris"], "utilisateur", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) && ($this->getAttribute($context["favoris"], "produit", []) == $this->getAttribute($context["produit"], "produit", [])))) {
                    echo "active";
                }
                // line 1535
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favoris'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\"
                                        data-placement=\"left\">
                                    <i class=\"glyphicon glyphicon-heart\"></i>
                                </a>
                                <div class=\"image\" style=\"width: 100%!important;height: 68%!important;\">


                                    ";
            // line 1542
            if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "description", []) || $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "descriptionen", []))) {
                // line 1543
                echo "
                                    <div class=\"quickview\">
                                        <a class=\"btn btn-xs btn-quickview\"
                                           href=\"";
                // line 1546
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_produits", ["produitid" => $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", [])]), "html", null, true);
                echo "\"
                                        >";
                // line 1547
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details"), "html", null, true);
                echo " </a>
                                    </div>
                                    ";
            }
            // line 1550
            echo "
                                    <img style=\"width: 100%!important;border-top-left-radius: 10px;border-top-right-radius: 10px;max-height: 300px;min-height:300px;height: 100%!important;object-fit: contain  !important\"
                                         src=\"";
            // line 1552
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
            echo "\"
                                         data-original=\"";
            // line 1553
            if ((($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) != ""))) {
                echo "/uploads/produits/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                echo "
                                        ";
            } else {
                // line 1554
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
                echo " ";
            }
            echo "\" alt=\"img\"
                                         class=\"img-responsive lazy\"> ";
            // line 1555
            if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []) > 0)) {
                // line 1556
                echo "
                                        ";
                // line 1557
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                    // line 1558
                    echo "                                            <div class=\"promotion\">
                                                <span class=\"discount\">";
                    // line 1559
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion"), "html", null, true);
                    echo "</span>
                                            </div>
                                        ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 1561
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) == 1))) {
                    // line 1562
                    echo "                                            <div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\">";
                    // line 1563
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion"), "html", null, true);
                    echo "
                                            ";
                    // line 1564
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "percentage", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
                    echo "%
\t\t\t\t\t\t\t\t\t\t</span>
                                            </div>

                                        ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 1568
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) > 1))) {
                    // line 1569
                    echo "                                            <div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\">
                                            ";
                    // line 1571
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "percentage", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
                    echo "%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        ";
                    // line 1572
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sur le"), "html", null, true);
                    echo "
                                            ";
                    // line 1573
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ème"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t</span>
                                            </div>
                                        ";
                }
                // line 1577
                echo "                                    ";
            } else {
                // line 1578
                echo "                                        <div class=\"promotion\">
                                            <span class=\"horsstock\"
                                                  style=\"    font-weight: 400;\">\t";
                // line 1580
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HORS STOCK"), "html", null, true);
                echo "\t</span>
                                        </div>
                                    ";
            }
            // line 1583
            echo "                                </div>
                                <div style=\"height: 32%!important;position: relative\">


                                    <div class=\"line_gradient\"></div>


                                    <div class=\"description\">
                                        ";
            // line 1591
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nomen", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
            }
            // line 1592
            echo "
                                    </div>
                                    <span class=\"cat_badge\">
                                        ";
            // line 1595
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "categorie", []), "nomEn", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "categorie", []), "nom", []), "html", null, true);
            }
            // line 1596
            echo "                                    </span>
                                    ";
            // line 1615
            echo "

                                    <div class=\"row\" style=\"position: absolute;  bottom: 10px;left: 0;right: 0\">
                                        <div class=\"col-lg-6 col-md-6 col-xs-6 col-sm-6\">
                                            <div class=\" price  div_card\" style=\"padding-left: 14px;
                                            ";
            // line 1620
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") == false) || (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") == true) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) > 1)))) {
                // line 1621
                echo "                                                    padding-bottom: 22px;
                                            ";
            }
            // line 1622
            echo "\">
                                            <span class=\"old-price\" style=\"float:left\">
                                              ";
            // line 1624
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) == 1))) {
                // line 1625
                echo "                                                  ";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
                                              ";
            } elseif ((($this->getAttribute($this->getAttribute($this->getAttribute(            // line 1626
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                // line 1627
                echo "                                                  ";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
                                              ";
            }
            // line 1629
            echo "                                                </span>
                                                <br>
                                                <span class=\"\"
                                                      style=\"float:left\"> ";
            // line 1632
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "</span>


                                            </div>
                                        </div>
                                        <div class=\"div_card col-lg-6 col-md-6 col-xs-6 col-sm-6 text-right\"
                                             style=\"padding-right: 20px;padding-left: 10px;\">
                                            <div class=\"row\" id=\"quantite";
            // line 1639
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\"
                                                 name=\"quantite";
            // line 1640
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\" disabled=\"none\" hidden>

                                                <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                                    <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle";
            // line 1646
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\"
                                                                        onclick=\"deleteArticleQuantity(";
            // line 1647
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prix", []), "html", null, true);
            echo ")\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t                             \t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t                        \t</button>
                                                            </span>
                                                        <input style=\" height: 4.5rem;!important;\" type=\"text\"
                                                               id=\"qte";
            // line 1655
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\"
                                                               name=\"qte";
            // line 1656
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\"
                                                               class=\"form-control input-number text-center\" ";
            // line 1657
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", true, true)) {
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array"), "html", null, true);
                echo "\" ";
            } else {
                echo " value=\"0\" ";
            }
            // line 1658
            echo "                                                               min=\"1\" max=\"100\" disabled>
                                                        <span class=\"input-group-btn\">
                                                                <button id=\"addArticle";
            // line 1660
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\"
                                                                        onclick=\"addArticle(";
            // line 1661
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
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
            // line 1674
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\"
                                                 name=\"addcart";
            // line 1675
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\">
                                                ";
            // line 1676
            if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []) == 0)) {
                // line 1677
                echo "                                                    <button disabled type=\"button\"
                                                            style=\" background-color: #8c8586; color: white; border: 1px solid #8c8586; padding: 0 0;
    height: 43px;
    width: 43px;
    margin-bottom: 8px;

\"
                                                            data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
\t\t\t\t\t\t\t\t                        \t<span class=\"add2cart\">
\t\t\t\t\t\t\t\t\t                      \t<i style=\"font-size: 17px;\"
                                                               class=\"glyphicon glyphicon-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t                       </span>
                                                    </button>
                                                ";
            } else {
                // line 1691
                echo "
                                                    ";
                // line 1692
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                    // line 1693
                    echo "
                                                        <a class=\" btn_card\"
                                                           style=\"padding-top: 15px; padding-bottom: 15px;\"
                                                           href=\"";
                    // line 1696
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_produits", ["produitid" => $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", [])]), "html", null, true);
                    echo "\">
                                                         <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> ";
                    // line 1698
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                    echo " <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                                                        </a>

                                                    ";
                } else {
                    // line 1704
                    echo "                                                        <button type=\"submit\" class=\"btn_card\"
                                                                ";
                    // line 1716
                    echo "                                                                id=\"btn-panier";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
                                                                onclick=\"enabledivquantity(";
                    // line 1717
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
                    echo ")\"

                                                                data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                        <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> ";
                    // line 1721
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                    echo " <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                                                        </button>
                                                    ";
                }
                // line 1726
                echo "




                                                ";
            }
            // line 1732
            echo "                                            </div>
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
        // line 1743
        echo "
                </div>


                ";
        // line 1747
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 1748
            echo "                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"productSetailsModalAjax";
            // line 1749
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\" tabindex=\"-1\"
                         role=\"dialog\"
                         aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"row transitionfx text-left\"
                                     style=\"padding: 30px;margin-right: 0px!important; margin-left: 0px;!important;\">
                                    <div class=\"col-lg-12\">
                                        <button style=\"opacity: 1.2;margin-top: -21px;margin-right: -18px;background-color: #ffffff;/* color: #454545; */\"
                                                type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span style=\"color: #454545;\" aria-hidden=\"true\">×</span>
                                        </button>
                                    </div>
                                    <!-- left column -->
                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                        <!-- product Image and Zoom -->
                                        <div class=\"main-image sp-wrap col-lg-12 no-padding style3\"
                                             style=\"display: inline-block;\">


                                            <div class=\"sp-large\"
                                                 style=\"overflow: hidden; height: auto; left: 0px; top: 0px;max-width: 100% !important\">
                                                <a href=\"\" class=\"\"
                                                   style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                                    <img id=\"imageproduit";
            // line 1773
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\"
                                                         data-original=\"/uploads/produits/";
            // line 1774
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
            echo "\"
                                                         src=\"";
            // line 1775
            if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) != ""))) {
                echo "/uploads/produits/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                echo "
                                                          ";
            } else {
                // line 1776
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
            }
            echo "\"
                                                         alt=\"";
            // line 1777
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
            echo "\" class=\"img-responsive\"
                                                         style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                    <!--/ left column end -->


                                    <!-- right column -->
                                    <div class=\"col-lg-8 col-md-6 col-sm-6\">
                                        <input type=\"text\" id=\"idproduit\" value=\"";
            // line 1790
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\" hidden>

                                        <h1 class=\"product-title titleproduitt\">

                                            ";
            // line 1794
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nomen", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
            }
            // line 1795
            echo "
                                        </h1>

                                        <div class=\"description\">
                                            ";
            // line 1799
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "descriptionen", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "description", []), "html", null, true);
            }
            // line 1800
            echo "
                                        </div>
                                        <div class=\"product-price\" style=\"font-size: 20px;\">
                                            <span class=\"price-sales price\">  ";
            // line 1803
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "</span>
                                            ";
            // line 1804
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) == 1))) {
                // line 1805
                echo "                                                <span class=\"price-standard  old-price\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo " </span>
                                            ";
            } elseif ((($this->getAttribute($this->getAttribute($this->getAttribute(            // line 1806
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                // line 1807
                echo "                                                <span class=\"price-standard old-price\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "</span>
                                            ";
            }
            // line 1809
            echo "                                        </div>

                                        ";
            // line 1811
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                // line 1812
                echo "
                                            <div class=\"color-details\">
                                                ";
                // line 1814
                if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) != ""))) {
                    // line 1815
                    echo "                                                    <img name='img' id='";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                    echo "'
                                                         style=\"width:  100px;height: 100px;background-size: contain;border-width: 2px; border-color: #ED0000;border-style: solid;\"
                                                         src=\"/uploads/produits/";
                    // line 1817
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                    echo "\"
                                                         onclick=\"changeImage('";
                    // line 1818
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "')\"
                                                         alt=\"img\">
                                                ";
                }
                // line 1821
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", []));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 1822
                    echo "                                                    ";
                    if (($this->getAttribute($context["c"], "image", []) && ($this->getAttribute($context["c"], "image", []) != ""))) {
                        // line 1823
                        echo "
                                                        <img name='img' id='";
                        // line 1824
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                        echo "'
                                                             style=\"    width:  100px;height: 100px;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                                             src=\"/uploads/produits/";
                        // line 1826
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                        echo "\"
                                                             onclick=\"changeImage('";
                        // line 1827
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                        echo "')\"
                                                             alt=\"img\">

                                                    ";
                    }
                    // line 1831
                    echo "
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1833
                echo "                                            </div>
                                            <div class=\"color-details\">
                                                <span class=\"selected-color selectedSpan\"><strong
                                                            class=\"text_details\">";
                // line 1836
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Couleurs"), "html", null, true);
                echo "</strong></span>
                                                <ul class=\"swatches Color\" name=\"couleur";
                // line 1837
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                    id=\"couleur";
                // line 1838
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\">
                                                    ";
                // line 1839
                $context["i"] = 1;
                // line 1840
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", []));
                foreach ($context['_seq'] as $context["_key"] => $context["couleur"]) {
                    // line 1841
                    echo "                                                        ";
                    if ((($context["i"] ?? $this->getContext($context, "i")) == 1)) {
                        // line 1842
                        echo "                                                            <li class=\"selected\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                        echo "\"
                                                                onclick=\"changeImagecouleur('";
                        // line 1843
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "id", []), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "image", []), "html", null, true);
                        echo "')\">
                                                                <a style=\"background-color:";
                        // line 1844
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                        echo ";color:transparent\"></a>
                                                            </li>
                                                        ";
                    } else {
                        // line 1847
                        echo "                                                            <li value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                        echo "\"
                                                                onclick=\"changeImagecouleur('";
                        // line 1848
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "id", []), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "image", []), "html", null, true);
                        echo "')\">
                                                                <a style=\"background-color:";
                        // line 1849
                        echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
                        echo ";color:transparent\"></a>
                                                            </li>
                                                        ";
                    }
                    // line 1852
                    echo "                                                        ";
                    $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                    // line 1853
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couleur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1854
                echo "                                                </ul>
                                            </div>
                                        ";
            }
            // line 1857
            echo "                                        <!--/.color-details-->

                                        <div class=\"color-details\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-4 col-md-4 col-xs-6\" style=\"\">
                                                    <span class=\"selected-color selectedSpan\"><strong
                                                                class=\"text_details\">";
            // line 1863
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantité"), "html", null, true);
            echo "</strong></span>
                                                    ";
            // line 1864
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                // line 1865
                echo "
                                                        <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"deleteArticle";
                // line 1868
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                    onclick=\"moinsquantity(";
                // line 1869
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo ")\"
                                                                    type=\"button\"
                                                                    class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                    style=\"background-color:#ED0000\" data-type=\"minus\"
                                                                    data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            <input style=\"font-family: Roboto-Regular,sans-serif;font-size: 14px;font-weight: bold; height: 4.5rem;!important;\"
                                                                   type=\"text\"
                                                                   id=\"quantitymodal";
                // line 1879
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                   name=\"quantitymodal";
                // line 1880
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                   class=\"form-control input-number text-center\" ";
                // line 1881
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", true, true)) {
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array"), "html", null, true);
                    echo "\" ";
                } else {
                    echo " value=\"1\" ";
                }
                // line 1882
                echo "                                                                   min=\"1\" max=\"100\" disabled>

                                                            <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button onclick=\"plusquantity(";
                // line 1885
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
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
                // line 1897
                echo "
                                                        <div class=\"row\" id=\"quantite";
                // line 1898
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                             name=\"quantite";
                // line 1899
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\" disabled=\"none\">

                                                            <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                                                <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle";
                // line 1905
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                        onclick=\"moinquantityD(";
                // line 1906
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo ")\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
                                                                    <span class=\"glyphicon glyphicon-minus\"></span>
                                                                </button>
                                                            </span>
                                                                    <input style=\" height: 4.5rem;!important;\"
                                                                           type=\"text\"
                                                                           id=\"qte";
                // line 1915
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                           name=\"qte";
                // line 1916
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                           class=\"form-control input-number text-center\" ";
                // line 1917
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", true, true)) {
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array"), "html", null, true);
                    echo "\" ";
                } else {
                    echo " value=\"0\" ";
                }
                // line 1918
                echo "                                                                           min=\"1\" max=\"100\" disabled>
                                                                    <span class=\"input-group-btn\">
                                                                <button id=\"addArticle";
                // line 1920
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                        onclick=\"plusquantityD(";
                // line 1921
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
            // line 1934
            echo "                                                </div>
                                                ";
            // line 1935
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                // line 1936
                echo "
                                                    <div class=\"col-lg-8 col-sm-6 col-xs-6\">
                                                        <span class=\"selected-color selectedSpan\"><strong
                                                                    class=\"text_details\">";
                // line 1939
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Taille"), "html", null, true);
                echo "</strong></span>
                                                        <select class=\"form-control \" id=\"sizes";
                // line 1940
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                name=\"sizes";
                // line 1941
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                                onchange=\"changeSize(";
                // line 1942
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo ")\"
                                                                style=\"border-radius: 0px;height: 43px; font-family: Roboto-Regular,sans-serif\">
                                                            <option disabled
                                                                    style=\" color:#374649;font-family: Roboto-Regular,sans-serif;font-size: 12px;font-weight: 400 \"
                                                                    selected>
                                                                ";
                // line 1947
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir la taille"), "html", null, true);
                echo "</option>
                                                            ";
                // line 1948
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                    // line 1949
                    echo "                                                                ";
                    $context["i"] = 1;
                    // line 1950
                    echo "                                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", []), "0", [], "array"), "sizes", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                        // line 1951
                        echo "                                                                    ";
                        if ((($context["i"] ?? $this->getContext($context, "i")) == 1)) {
                            // line 1952
                            echo "                                                                        <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo "\"
                                                                                selected>";
                            // line 1953
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                            echo "</option>
                                                                    ";
                        } else {
                            // line 1955
                            echo "                                                                        <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                            echo "</option>

                                                                    ";
                        }
                        // line 1958
                        echo "                                                                    ";
                        $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                        // line 1959
                        echo "
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1961
                    echo "                                                            ";
                }
                // line 1962
                echo "                                                        </select>
                                                    </div>

                                                ";
            }
            // line 1966
            echo "                                            </div>
                                        </div>
                                        <!-- productFilter -->


                                        <div class=\"color-details\">
                                            ";
            // line 1972
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                // line 1973
                echo "
                                                <button onclick=\"addArticleSize(";
                // line 1974
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo ")\"
                                                        class=\"  btn_card col-lg-6\" type=\"submit\"
                                                        id=\"btn-panier\"
                                                        data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                   <span class=\"add2cart\">
                                                        <span class=\"btnspanadd\">";
                // line 1979
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                echo " <i
                                                                    class=\"fa fa-shopping-cart\"></i></span>

\t\t\t\t\t\t\t\t\t\t            \t</span>
                                                </button>
                                            ";
            } else {
                // line 1985
                echo "                                                <button onclick=\"addArticlee(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
                echo ")\"
                                                        class=\"  btn_card col-lg-6\" type=\"submit\"
                                                        id=\"addArticlee";
                // line 1987
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                echo "\"
                                                        data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                   <span class=\"add2cart\">
                                                        <span class=\"btnspanadd\">";
                // line 1990
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                echo " <i
                                                                    class=\"fa fa-shopping-cart\"></i></span>

\t\t\t\t\t\t\t\t\t\t            \t</span>
                                                </button>
                                            ";
            }
            // line 1996
            echo "
                                            <div class=\"col-lg-6 fich_technique\">
                                                ";
            // line 1998
            if ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "file", [])) {
                // line 1999
                echo "
                                                    <a target=\"_blank\"
                                                       href=\"";
                // line 2001
                echo twig_escape_filter($this->env, ($context["legal_notice_directory"] ?? $this->getContext($context, "legal_notice_directory")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "file", []), "html", null, true);
                echo "\">
                                                        <svg _ngcontent-dxq-c64=\"\" height=\"20\" viewBox=\"0 0 512 512\"
                                                             width=\"20\" xmlns=\"http://www.w3.org/2000/svg\">
                                                            <g _ngcontent-dxq-c64=\"\" id=\"Solid\">
                                                                <path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\"
                                                                      d=\"m239.029 384.97a24 24 0 0 0 33.942 0l90.509-90.509a24 24 0 0 0 0-33.941 24 24 0 0 0 -33.941 0l-49.539 49.539v-262.059a24 24 0 0 0 -48 0v262.059l-49.539-49.539a24 24 0 0 0 -33.941 0 24 24 0 0 0 0 33.941z\"></path>
                                                                <path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\"
                                                                      d=\"m464 232a24 24 0 0 0 -24 24v184h-368v-184a24 24 0 0 0 -48 0v192a40 40 0 0 0 40 40h384a40 40 0 0 0 40-40v-192a24 24 0 0 0 -24-24z\"></path>
                                                            </g>
                                                        </svg>
                                                        ";
                // line 2011
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fiche Technique"), "html", null, true);
                echo "
                                                    </a>
                                                ";
            }
            // line 2014
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
            // line 2033
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
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
            // line 2049
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pouvez_commander_au_max"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
            echo "
                                        ";
            // line 2050
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nomen", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
            }
            echo "</h3>


                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    ";
            // line 2072
            echo "


                    <div class=\"modal fade  \" id=\"modal-panier";
            // line 2075
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\"
                         aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\" style=\"background: #ED0000;\">
                                    <h4 class=\"modal-title\" id=\"exampleModalLongTitle\"
                                        style=\"margin-top: 11px;\">";
            // line 2081
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
            // line 2090
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("quantite_demander_indispo"), "html", null, true);
            echo "
                                        ";
            // line 2091
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nomen", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
            }
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("est"), "html", null, true);
            echo "
                                        <span id=\"idinputtwo";
            // line 2092
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\">  </span></h3>

                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                    </div>

                    ";
            // line 2112
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2114
        echo "
                <!--/.productslider id=\"owl-demo\"   id=\"productslider\"-->

            </div>
            <!--/.featuredPostContainer-->
        </div>


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
        // line 2138
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
    ";
        // line 2149
        if (($context["categories"] ?? $this->getContext($context, "categories"))) {
            // line 2150
            echo "
        <div class=\"container\"
             style=\"padding-right: 2%;padding-left: 2%;margin-top: 20px;margin-bottom: 20px;background-color: #ffffff;max-width: 1600px\">
            <div class=\"row xsResponse\">
                ";
            // line 2155
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 2156
                echo "
                    <div class=\"col-lg-3 col-md-4 col-xs-6 col-sm-4\">

                        <div>
                            <br>
                            <a style=\"font-weight: bold;color: #ED0000;font-family: Roboto-Regular, sans-serif !important\"
                               href=\"";
                // line 2162
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_produit");
                echo "?categorie_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", []), "html", null, true);
                echo "\">
                                ";
                // line 2163
                if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "en") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "EN"))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "nomEn", []), "html", null, true);
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "nom", []), "html", null, true);
                }
                // line 2164
                echo "                            </a>
                            <br>
                            ";
                // line 2166
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "sousCategories", []));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_category"]) {
                    // line 2167
                    echo "                                <a style=\"margin-top: 10px!important;font-family: Roboto-Regular, sans-serif !important\"
                                   href=\"";
                    // line 2168
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_produit");
                    echo "?sub_categorie_id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sub_category"], "id", []), "html", null, true);
                    echo "\">
                                    <i class=\"fa fa-caret-right icon\" style=\"color: #ED0000 \"></i>&nbsp;

                                    ";
                    // line 2171
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "en") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "EN"))) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub_category"], "nomEn", []), "html", null, true);
                    } else {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub_category"], "nom", []), "html", null, true);
                    }
                    // line 2172
                    echo "                                </a>
                                <br>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2175
                echo "                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2178
            echo "
            </div>


        </div>

    ";
        }
        // line 2185
        echo "
    <div class=\"fab\" id=\"div_fab\" hidden><i class=\"triangle_down\"></i> </div>



    <style>
        .triangle_down {
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-top: 15px solid #ffffff;
            font-size: 0;
            line-height: 0;
        }

        .fab {
            width: 50px;
            height: 50px;
            background-color: #ED0000;
            border-radius: 50%;
            box-shadow: 0 6px 10px 0 #666;
            transition: all 0.1s ease-in-out;

            font-size: 40px;
            color: white;
            text-align: center;
            line-height: 50px;

            position: fixed;
            right: 50px;
            bottom: 50px;

        }

        .fab:hover {
            box-shadow: 0 6px 14px 0 #666;
            transform: scale(1.05);
        }


        .owl-buttons {
            display: block;
        }

        .owl-carousel:hover .owl-buttons {
            display: block;
        }

        .owl-item {
            text-align: center;
            padding-left: 10px;
            padding-right: 10px;
        }


        .owl-theme .owl-controls .owl-buttons div {
            background: transparent;
            color: #869791;
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

    <!-- /main container -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>

    <script>
        \$(\"#div_fab\").click(function() {
            window.scrollTo(0, document.body.scrollHeight);

        });


    </script>

    <script>
        \$(document).ready(function () {

            var owl = \$(\"#owl-demo\");
            owl.owlCarousel({

                //  itemsDesktop : true,
                //  itemsDesktopSmall : false,
                /// itemsTablet: false,
                // itemsMobile : false,
                startPosition: 0,
                rtl: false,

                items: 4,
                navigation: true,
                loop: false,
                autoPlay: 5000,
                autoplaySpeed: 10000,
                autoplayHoverPause: true,
                navigationText: ['<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-left fa-stack-1x fa-inverse\"></i></span>', '<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-right fa-stack-1x fa-inverse\"></i></span>'],

                itemsDesktop: [1100, 3], //5 items between 1100px and 901px
                itemsDesktopSmall: [900, 2], // betweem 900px and 601px
                itemsTablet: [700, 2], //2 items between 600 and 0
                itemsMobile: [520, 1] // itemsMobile disabled - inherit from itemsTablet option

            });

            // Custom Navigation Events
            \$(\".owl-carousel-arrows .next\").click(function () {
                owl.trigger('owl.next');
            });

            \$(\".owl-carousel-arrows .prev\").click(function () {
                owl.trigger('owl.prev');
            });
        });
    </script>
    <script>
        \$(document).ready(function () {

            var owl = \$(\"#owl-demopromos\");
            owl.owlCarousel({

                //  itemsDesktop : true,
                // itemsDesktopSmall : false,
                //  itemsTablet: false,
                //  itemsMobile : false,
                //
                startPosition: 0,
                rtl: false,

                items: 4,
                loop: false,
                autoPlay: 5000,

                navigation: true,
                autoplayHoverPause: true,
                navigationText: ['<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-left fa-stack-1x fa-inverse\"></i></span>', '<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-right fa-stack-1x fa-inverse\"></i></span>'],

                itemsDesktop: [1100, 3], //5 items between 1100px and 901px
                itemsDesktopSmall: [900, 2], // betweem 900px and 601px
                itemsTablet: [700, 2], //2 items between 600 and 0
                itemsMobile: [520, 1] // itemsMobile disabled - inherit from itemsTablet option

            });

            // Custom Navigation Events
            \$(\".owl-carousel-arrows .next\").click(function () {
                owl.trigger('owl.next');
            });

            \$(\".owl-carousel-arrows .prev\").click(function () {
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
        // line 2377
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

            \$(\"#quantitymodal\" + produitid).val(1);//rahma addd to

            \$.ajax({
                url: \"";
        // line 2410
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
        function addArticleSize(id) {

            var selectsizes = document.getElementById(\"sizes\" + id);
            var sizeid = selectsizes.options[selectsizes.selectedIndex].value;
            var qte = parseInt(\$(\"#quantitymodal\" + id).val());
            //alert(qte);

            \$.ajax({
                url: \"";
        // line 2464
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("size_from_id");
        echo "\",
                dataType: 'Json',
                data: {\"sizeid\": sizeid},
                type: 'GET',
                success: function (data) {
                    var quantite = data
                    if (qte > quantite) {

                        //  alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                        document.getElementById(\"idinputtwo\" + id).innerHTML = quantite;

                        \$(\"document\").ready(function () {

                            //was  \$('#modal-panier' + id).modal({backdrop: 'static', keyboard: false});
                            \$('#modal-panier' + id).modal(\"show\");


                        })


                    } else {
                        addArticlewithsize(id, sizeid, qte);
                        \$('#productSetailsModalAjax' + id).modal('hide');

                    }

                }
            });

        }

        function changeSize(id) {
            //\$(\"#quantitymodal\" + id).val(1);
        }

        function goToProdDetail(produitid) {
            console.log(\"produitid\" + produitid)
            console.log(produitid)
            \$.ajax({
                'url': Routing.generate('detail_produits', {'produitid': produitid}),
                'success': function (r) {
                    \$('#div1').html(r);
                }
            });


        }

        function enabledivquantity(id, quantite, max) {
            var qte = parseInt(\$(\"#qte\" + id).val());

            if (qte + 1 > quantite) {

                //alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                document.getElementById(\"idinputtwo\" + id).innerHTML = quantite;

                \$(\"document\").ready(function () {
                    //wasss \$('#modal-panier' + id).modal({backdrop: 'static', keyboard: false});
                    \$('#modal-panier' + id).modal(\"show\");

                })
            } else if (qte + 1 > max) {
                \$(\"document\").ready(function () {
                    //was \$('#modal-quantity-max' + id).modal({backdrop: 'static', keyboard: false});
                    \$('#modal-quantity-max' + id).modal(\"show\");
                })
            } else if (qte >= 0) {
                var quantities = document.querySelectorAll(\"[id=quantite\" + id + \"]\");
                var btncarts = document.querySelectorAll(\"[id=addcart\" + id + \"]\");
                for (var i = 0; i < btncarts.length; i++) {
                    btncarts[i].style.display = \"none\";
                }
                for (var i = 0; i < quantities.length; i++) {
                    quantities[i].style.display = \"block\";
                }


                addArticle(id, quantite, max);
            }
        }

        function plusquantity(id) {

            var selectsizes = document.getElementById(\"sizes\" + id);
            var sizeid = selectsizes.options[selectsizes.selectedIndex].value;
            var qte = parseInt(\$(\"#quantitymodal\" + id).val());

            \$.ajax({
                url: \"";
        // line 2552
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("size_from_id");
        echo "\",
                dataType: 'Json',
                data: {\"sizeid\": sizeid},
                type: 'GET',
                success: function (data) {
                    var quantite = data;
                    var qtee = parseInt(\$(\"#quantitymodal\" + id).val()) + 1;

                    if (qtee > quantite) {

                        //alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                        document.getElementById(\"idinputtwo\" + id).innerHTML = quantite;

                        \$(\"document\").ready(function () {

                            //wass \$('#modal-panier' + id).modal({backdrop: 'static', keyboard: false});
                            \$('#modal-panier' + id).modal(\"show\");

                        })

                    } else {
                        var qte = parseInt(\$(\"#quantitymodal\" + id).val()) + 1;
                        var qte_input = document.querySelectorAll(\"[id=quantitymodal\" + id + \"]\");
                        for (var i = 0; i < qte_input.length; i++) {
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
                \$(\"#quantitymodal\" + id).val(qte);
            } else {
                \$(\"document\").ready(function () {
                    \$('#modal-quantity').modal({backdrop: 'static', keyboard: false});
                })

            }
        }

        <!-- ---- -->

        function plusquantityD(id, quantity, max) {

            var qte = parseInt(\$(\"#qte\" + id).val()) + 1;
            if (qte > quantity) {
                document.getElementById(\"idinputtwo\" + id).innerHTML = quantity;

                \$(\"document\").ready(function () {
                    //was  \$('#modal-panier' + id).modal({  backdrop: 'static',    keyboard: false  });
                    \$('#modal-panier' + id).modal(\"show\");


                })
            } else if (qte > max) {
                \$(\"document\").ready(function () {
                    //was  \$('#modal-quantity-max'+id).modal({ backdrop: 'static',   keyboard: false});

                    \$('#modal-quantity-max' + id).modal(\"show\");

                })
            } else {
                //  \$(\"#qte\" + id).val(qte);
                var qte_input = document.querySelectorAll(\"[id=qte\" + id + \"]\");

                for (var i = 0; i < qte_input.length; i++) {
                    qte_input[i].value = qte;
                }
            }

        }

        function moinquantityD(id, quantity, max) {

            var qte = parseInt(\$(\"#qte\" + id).val()) - 1;
            //  \$(\"#qte\" + id).val(qte);
            var qte_input = document.querySelectorAll(\"[id=qte\" + id + \"]\");

            if (qte > 0) {
                for (var i = 0; i < qte_input.length; i++) {
                    qte_input[i].value = qte;
                }
            } else {
                \$(\"document\").ready(function () {
                    \$('#modal-quantity').modal({backdrop: 'static', keyboard: false});
                })

            }
        }

        function addArticlee(id, quantity, max) {
            var qte = parseInt(\$(\"#qte\" + id).val());
            var qte_input = document.querySelectorAll(\"[id=qte\" + id + \"]\");

            //  console.log(\"eeeee\");
            //   console.log(qte)


            if (qte > quantity) {
                document.getElementById(\"idinputtwo\" + id).innerHTML = quantity;

                \$(\"document\").ready(function () {
                    //wasss  \$('#modal-panier' + id).modal({                         backdrop: 'static',                         keyboard: false                     });

                    \$('#modal-panier' + id).modal(\"show\");

                })
            } else if (qte > max) {
                \$(\"document\").ready(function () {
                    //was  \$('#modal-quantity-max'+id).modal({  backdrop: 'static',  keyboard: false});

                    \$('#modal-quantity-max' + id).modal(\"show\");

                })
            } else {
                for (var i = 0; i < qte_input.length; i++) {
                    qte_input[i].value = qte;
                }
                //   alert(\"qtettee\"+qte)
                var \$this = \$(\"#addArticlee\" + id);
                \$.ajax({
                    url: Routing.generate('add_many_quantity_to_cart', {id: id, qte: qte}), success: function (result) {
                        \$(\".my_nav_bar\").html(result);
                        \$(\".total_price_cart_empty\").html(\$(\".total_price_cart\").html());
                        \$(\"img.lazy\").lazyload({
                            threshold: 50
                        });
                        \$(window).load(function () {
                            \$(\"html,body\").trigger(\"scroll\");
                        });
                        \$this.button('reset');
                        //hide modal after add to cart
                        // \$('#productSetailsModalAjax'+id).modal('hide');
                        \$('.modal').modal('hide');

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
        return "FrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4513 => 2552,  4422 => 2464,  4365 => 2410,  4329 => 2377,  4135 => 2185,  4126 => 2178,  4118 => 2175,  4110 => 2172,  4103 => 2171,  4095 => 2168,  4092 => 2167,  4088 => 2166,  4084 => 2164,  4077 => 2163,  4071 => 2162,  4063 => 2156,  4058 => 2155,  4052 => 2150,  4050 => 2149,  4036 => 2138,  4010 => 2114,  4003 => 2112,  3992 => 2092,  3982 => 2091,  3978 => 2090,  3966 => 2081,  3957 => 2075,  3952 => 2072,  3936 => 2050,  3931 => 2049,  3912 => 2033,  3891 => 2014,  3885 => 2011,  3870 => 2001,  3866 => 1999,  3864 => 1998,  3860 => 1996,  3851 => 1990,  3845 => 1987,  3835 => 1985,  3826 => 1979,  3818 => 1974,  3815 => 1973,  3813 => 1972,  3805 => 1966,  3799 => 1962,  3796 => 1961,  3789 => 1959,  3786 => 1958,  3777 => 1955,  3772 => 1953,  3767 => 1952,  3764 => 1951,  3759 => 1950,  3756 => 1949,  3754 => 1948,  3750 => 1947,  3742 => 1942,  3738 => 1941,  3734 => 1940,  3730 => 1939,  3725 => 1936,  3723 => 1935,  3720 => 1934,  3700 => 1921,  3696 => 1920,  3692 => 1918,  3684 => 1917,  3680 => 1916,  3676 => 1915,  3664 => 1906,  3660 => 1905,  3651 => 1899,  3647 => 1898,  3644 => 1897,  3629 => 1885,  3624 => 1882,  3616 => 1881,  3612 => 1880,  3608 => 1879,  3595 => 1869,  3591 => 1868,  3586 => 1865,  3584 => 1864,  3580 => 1863,  3572 => 1857,  3567 => 1854,  3561 => 1853,  3558 => 1852,  3552 => 1849,  3544 => 1848,  3539 => 1847,  3533 => 1844,  3525 => 1843,  3520 => 1842,  3517 => 1841,  3512 => 1840,  3510 => 1839,  3506 => 1838,  3502 => 1837,  3498 => 1836,  3493 => 1833,  3486 => 1831,  3477 => 1827,  3473 => 1826,  3468 => 1824,  3465 => 1823,  3462 => 1822,  3457 => 1821,  3449 => 1818,  3445 => 1817,  3439 => 1815,  3437 => 1814,  3433 => 1812,  3431 => 1811,  3427 => 1809,  3421 => 1807,  3419 => 1806,  3414 => 1805,  3412 => 1804,  3408 => 1803,  3403 => 1800,  3397 => 1799,  3391 => 1795,  3385 => 1794,  3378 => 1790,  3362 => 1777,  3357 => 1776,  3350 => 1775,  3346 => 1774,  3342 => 1773,  3315 => 1749,  3312 => 1748,  3308 => 1747,  3302 => 1743,  3286 => 1732,  3278 => 1726,  3270 => 1721,  3259 => 1717,  3254 => 1716,  3251 => 1704,  3242 => 1698,  3237 => 1696,  3232 => 1693,  3230 => 1692,  3227 => 1691,  3211 => 1677,  3209 => 1676,  3205 => 1675,  3201 => 1674,  3181 => 1661,  3177 => 1660,  3173 => 1658,  3165 => 1657,  3161 => 1656,  3157 => 1655,  3144 => 1647,  3140 => 1646,  3131 => 1640,  3127 => 1639,  3117 => 1632,  3112 => 1629,  3106 => 1627,  3104 => 1626,  3099 => 1625,  3097 => 1624,  3093 => 1622,  3089 => 1621,  3087 => 1620,  3080 => 1615,  3077 => 1596,  3071 => 1595,  3066 => 1592,  3060 => 1591,  3050 => 1583,  3044 => 1580,  3040 => 1578,  3037 => 1577,  3029 => 1573,  3025 => 1572,  3021 => 1571,  3017 => 1569,  3015 => 1568,  3008 => 1564,  3004 => 1563,  3001 => 1562,  2999 => 1561,  2994 => 1559,  2991 => 1558,  2989 => 1557,  2986 => 1556,  2984 => 1555,  2978 => 1554,  2971 => 1553,  2967 => 1552,  2963 => 1550,  2957 => 1547,  2953 => 1546,  2948 => 1543,  2946 => 1542,  2932 => 1535,  2927 => 1534,  2923 => 1533,  2920 => 1532,  2913 => 1529,  2911 => 1528,  2904 => 1526,  2898 => 1522,  2894 => 1521,  2886 => 1516,  2882 => 1515,  2867 => 1503,  2863 => 1501,  2854 => 1498,  2848 => 1494,  2844 => 1493,  2835 => 1486,  2823 => 1476,  2801 => 1459,  2795 => 1456,  2779 => 1445,  2775 => 1443,  2773 => 1442,  2770 => 1441,  2762 => 1436,  2756 => 1433,  2746 => 1431,  2738 => 1426,  2730 => 1421,  2726 => 1419,  2724 => 1418,  2716 => 1412,  2710 => 1408,  2707 => 1407,  2700 => 1405,  2697 => 1404,  2688 => 1401,  2683 => 1399,  2678 => 1398,  2675 => 1397,  2670 => 1396,  2667 => 1395,  2665 => 1394,  2661 => 1393,  2653 => 1388,  2649 => 1387,  2645 => 1386,  2640 => 1384,  2635 => 1381,  2633 => 1380,  2629 => 1378,  2609 => 1365,  2605 => 1364,  2601 => 1362,  2593 => 1361,  2589 => 1360,  2585 => 1359,  2573 => 1350,  2569 => 1349,  2558 => 1341,  2554 => 1340,  2550 => 1338,  2536 => 1327,  2531 => 1324,  2523 => 1323,  2519 => 1322,  2515 => 1321,  2502 => 1311,  2498 => 1310,  2494 => 1308,  2492 => 1307,  2487 => 1305,  2479 => 1299,  2474 => 1296,  2468 => 1295,  2465 => 1294,  2459 => 1291,  2451 => 1290,  2446 => 1289,  2440 => 1286,  2432 => 1285,  2428 => 1284,  2425 => 1283,  2422 => 1282,  2417 => 1281,  2415 => 1280,  2411 => 1279,  2407 => 1278,  2402 => 1276,  2397 => 1273,  2390 => 1271,  2381 => 1267,  2377 => 1266,  2372 => 1264,  2369 => 1263,  2366 => 1262,  2361 => 1261,  2353 => 1258,  2349 => 1257,  2343 => 1255,  2341 => 1254,  2337 => 1252,  2335 => 1251,  2331 => 1249,  2325 => 1247,  2323 => 1246,  2318 => 1245,  2316 => 1244,  2312 => 1243,  2307 => 1240,  2301 => 1239,  2295 => 1235,  2289 => 1234,  2281 => 1229,  2264 => 1215,  2259 => 1214,  2251 => 1212,  2247 => 1211,  2243 => 1210,  2214 => 1185,  2210 => 1184,  2207 => 1183,  2194 => 1175,  2188 => 1171,  2179 => 1165,  2168 => 1161,  2164 => 1160,  2161 => 1159,  2157 => 1147,  2148 => 1141,  2143 => 1139,  2138 => 1136,  2135 => 1135,  2114 => 1116,  2112 => 1115,  2108 => 1114,  2104 => 1113,  2086 => 1102,  2082 => 1101,  2078 => 1099,  2070 => 1098,  2066 => 1097,  2062 => 1096,  2049 => 1088,  2045 => 1087,  2036 => 1081,  2032 => 1080,  2024 => 1074,  2020 => 1071,  2014 => 1067,  2008 => 1065,  2006 => 1064,  2000 => 1062,  1998 => 1061,  1993 => 1058,  1989 => 1057,  1987 => 1056,  1980 => 1051,  1977 => 1031,  1971 => 1030,  1966 => 1027,  1960 => 1026,  1950 => 1018,  1941 => 1014,  1937 => 1013,  1933 => 1011,  1931 => 1010,  1924 => 1006,  1920 => 1005,  1917 => 1004,  1915 => 1003,  1910 => 1001,  1907 => 1000,  1905 => 999,  1896 => 995,  1889 => 994,  1885 => 993,  1881 => 991,  1875 => 988,  1871 => 987,  1866 => 984,  1864 => 983,  1848 => 974,  1841 => 971,  1837 => 970,  1834 => 969,  1827 => 966,  1825 => 965,  1819 => 963,  1817 => 962,  1813 => 960,  1809 => 959,  1802 => 955,  1793 => 948,  1791 => 947,  1787 => 945,  1779 => 939,  1773 => 938,  1764 => 918,  1754 => 917,  1750 => 916,  1737 => 906,  1728 => 900,  1725 => 899,  1716 => 879,  1710 => 878,  1704 => 877,  1683 => 859,  1662 => 840,  1656 => 837,  1641 => 827,  1637 => 825,  1635 => 824,  1631 => 822,  1624 => 818,  1612 => 813,  1607 => 812,  1600 => 808,  1591 => 802,  1588 => 801,  1586 => 800,  1579 => 795,  1574 => 792,  1571 => 791,  1564 => 789,  1561 => 788,  1552 => 785,  1547 => 783,  1542 => 782,  1539 => 781,  1534 => 780,  1531 => 779,  1529 => 778,  1525 => 777,  1519 => 774,  1515 => 773,  1511 => 772,  1506 => 770,  1501 => 767,  1499 => 766,  1493 => 762,  1473 => 749,  1469 => 748,  1465 => 746,  1457 => 745,  1453 => 744,  1449 => 743,  1437 => 734,  1433 => 733,  1423 => 726,  1419 => 725,  1416 => 724,  1402 => 713,  1398 => 711,  1390 => 710,  1386 => 709,  1382 => 708,  1369 => 698,  1365 => 697,  1360 => 694,  1358 => 693,  1354 => 692,  1347 => 687,  1342 => 684,  1336 => 683,  1333 => 682,  1327 => 679,  1319 => 678,  1314 => 677,  1308 => 674,  1300 => 673,  1295 => 672,  1292 => 671,  1287 => 670,  1285 => 669,  1281 => 668,  1277 => 667,  1273 => 666,  1268 => 663,  1261 => 661,  1252 => 657,  1248 => 656,  1243 => 654,  1240 => 653,  1237 => 652,  1232 => 651,  1224 => 648,  1220 => 647,  1214 => 645,  1212 => 644,  1208 => 642,  1206 => 641,  1203 => 640,  1197 => 638,  1195 => 637,  1189 => 635,  1187 => 634,  1182 => 632,  1177 => 629,  1171 => 628,  1165 => 624,  1159 => 623,  1153 => 620,  1141 => 611,  1132 => 610,  1128 => 609,  1124 => 608,  1098 => 585,  1095 => 584,  1091 => 583,  1083 => 577,  1067 => 566,  1062 => 563,  1054 => 558,  1043 => 554,  1039 => 553,  1035 => 551,  1032 => 541,  1023 => 535,  1018 => 533,  1013 => 530,  1011 => 529,  1008 => 528,  992 => 514,  990 => 513,  986 => 512,  982 => 511,  962 => 498,  958 => 497,  954 => 495,  946 => 494,  942 => 493,  938 => 492,  925 => 484,  921 => 483,  912 => 477,  908 => 476,  898 => 469,  893 => 466,  887 => 464,  885 => 463,  880 => 462,  878 => 461,  874 => 459,  870 => 458,  868 => 457,  861 => 452,  858 => 433,  852 => 432,  847 => 429,  841 => 428,  831 => 420,  825 => 417,  821 => 415,  818 => 414,  810 => 410,  806 => 409,  802 => 408,  798 => 406,  796 => 405,  789 => 401,  785 => 400,  782 => 399,  780 => 398,  775 => 396,  772 => 395,  770 => 394,  767 => 393,  765 => 392,  759 => 391,  752 => 390,  748 => 389,  744 => 387,  738 => 384,  734 => 383,  729 => 380,  727 => 379,  715 => 374,  710 => 373,  706 => 372,  703 => 371,  696 => 368,  694 => 367,  687 => 365,  681 => 361,  677 => 360,  665 => 350,  658 => 348,  645 => 337,  641 => 335,  632 => 329,  621 => 325,  617 => 324,  614 => 323,  610 => 311,  601 => 305,  596 => 303,  591 => 300,  588 => 299,  579 => 294,  573 => 288,  571 => 287,  567 => 286,  563 => 285,  545 => 274,  541 => 273,  537 => 271,  529 => 270,  525 => 269,  521 => 268,  507 => 259,  503 => 258,  493 => 251,  489 => 250,  479 => 243,  473 => 239,  467 => 237,  464 => 236,  459 => 234,  457 => 233,  452 => 230,  448 => 229,  446 => 228,  440 => 224,  437 => 202,  431 => 201,  425 => 197,  419 => 196,  410 => 189,  402 => 185,  397 => 184,  393 => 181,  389 => 179,  387 => 178,  383 => 176,  378 => 172,  374 => 171,  371 => 170,  369 => 169,  363 => 166,  360 => 165,  358 => 164,  345 => 160,  341 => 159,  338 => 158,  332 => 155,  328 => 154,  324 => 152,  322 => 151,  306 => 142,  301 => 141,  297 => 140,  294 => 139,  287 => 136,  285 => 135,  279 => 133,  277 => 132,  273 => 130,  270 => 129,  266 => 128,  254 => 119,  250 => 118,  237 => 108,  226 => 99,  224 => 98,  219 => 96,  215 => 94,  204 => 86,  197 => 82,  186 => 73,  180 => 70,  173 => 65,  170 => 64,  164 => 61,  158 => 57,  155 => 56,  149 => 53,  145 => 51,  142 => 50,  134 => 45,  129 => 42,  127 => 41,  119 => 35,  114 => 32,  111 => 31,  106 => 28,  103 => 27,  98 => 24,  95 => 23,  90 => 20,  88 => 19,  82 => 15,  80 => 14,  74 => 10,  68 => 9,  58 => 5,  52 => 3,  46 => 2,  30 => 1,);
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

    <div class=\"container\"
         style=\"padding-right: 2%;padding-left: 2%;margin-top: 100px;background-color: #F7F9FA;max-width: 1600px\">

        {% if app.session.get('pays').image1 or app.session.get('pays').image2 or app.session.get('pays').image3 or app.session.get('pays').image4 %}
            <!-- carossel-->
            <div id=\"myCarousel\" class=\"carousel slide hidden-xs \" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    {% if app.session.get('pays').image1 %}
                        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>

                    {% endif %}
                    {% if app.session.get('pays').image2 %}
                        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>

                    {% endif %}
                    {% if app.session.get('pays').image3 %}
                        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>

                    {% endif %}
                    {% if app.session.get('pays').image4 %}
                        <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>

                    {% endif %}
                </ol>

                <!-- Wrapper for slides
                 href=\"https://dev-eboutique.localbeta.ovh/driveDevMod.php/produit/?categorie_id=43\"
                 -->
                <div class=\"carousel-inner \">
                    {% if app.session.get('pays').image1 %}
                        <div class=\"item active  \">
                            <a   href=\"https://eshop-station.com/produit/?categorie_id=43\">
                                <img style=\"width: 100%;height:360px;object-fit: cover; \"
                                    src=\"/uploads/produits/{{ app.session.get('pays').image1 }}\" alt=\"\">
                            </a>

                        </div>
                    {% endif %}
                    {% if app.session.get('pays').image2 %}
                        <div class=\"item \">
                            <a href=\"https://eshop-station.com/produit/?categorie_id=38\">
                                <img style=\"width: 100%;height:360px;object-fit: cover;\"  src=\"/uploads/produits/{{ app.session.get('pays').image2 }}\" alt=\"\"></a>
                        </div>
                    {% endif %}
                    {% if app.session.get('pays').image3 %}

                        <div class=\"item \">
                            <a href=\"https://eshop-station.com/produit/?categorie_id=44\">
                                <img style=\"width: 100%;height:360px;object-fit: cover;\"
                                    src=\"/uploads/produits/{{ app.session.get('pays').image3 }}\" alt=\"\"></a>
                        </div>
                    {% endif %}
                    {% if app.session.get('pays').image4 %}

                        <div class=\"item  \">
                            <a href=\"https://eshop-station.com/produit/?categorie_id=44\">
                                <img style=\"width: 100%;height:360px; object-fit: cover;
\"
                                     src=\"/uploads/produits/{{ app.session.get('pays').image4 }}\" alt=\"\"></a>
                        </div>
                    {% endif %}


                </div>

                <!-- Left and right controls -->
                <!--

            <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\" style=\"background-color: transparent\">
                <span class=\"glyphicon glyphicon-chevron-left\"></span>
                <span class=\"sr-only\">{{ \"Previous\" | trans }}</span>
            </a>
            <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\" style=\"background-color: transparent\">
                <span class=\"glyphicon glyphicon-chevron-right\"></span>
                <span class=\"sr-only\">{{ \"Next\" | trans }}</span>
            </a>
            -->

            </div>

            <!-- carossel-->
        {% endif %}


        <input type=\"text\" value=\"{{ cp }}\" id=\"cp\" style=\"display: none;\">
        <!--/.banner style1-->
        {% if produitspromo|length > 1 %}

            <div class=\"container main-container\" style=\"margin-top: 1px !important;\">

                <!-- Main component call to action -->

                <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">

                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 row\">
                        <h3 class=\"col-lg-9 col-md-9 col-sm-7 col-xs-7 section-title   text-left\">
                            <span>{{ \"Nos Promotions\" | trans({}, 'messages') }} </span></h3>
                        <div class=\"col-lg-3 col-md-3 col-sm-5 col-xs-5 text-right\">
                            <a style=\"float: right;
                        font-family: Roboto-Regular, sans-serif;
                        font-style: normal;
                        font-weight: bold;
                        font-size: 16px;
                        line-height: 40px;
                        text-align: center;
                        color: #7f8c8d!important;
                          padding-top: 15px\" href=\"{{ path(\"view_all\") }}\">
                                <i class=\"fa fa-caret-right icon\"></i>&nbsp;{{ \"view_all\"|trans({}, 'messages') }} </a>
                        </div>


                    </div>

                    <div class=\"container hidden-xs hidden-sm\">
                        <div class=\"row xsResponse\">

                            {% for key, produit in produitspromo %}
                                {% if key <4 %}
                                    <div class=\"item col-lg-3 col-md-4 col-sm-6 col-xs-12\" style=\"margin-top: 25px\">
                                        <div class=\"product\">
                                            <a {% if app.user %}
                                                onclick=\"addfavoris({{ produit.produit.id }})\"
                                            {% else %}
                                                {#onclick=\"addfavnonConnect()\"#}
                                                href=\"{{ path(\"fos_user_security_login\",{'produitid':produit.produit.id}) }}\"

                                            {% endif %}
                                                    class=\"add-fav tooltipHere
                                                {% for favoris in favoris %}
                                                    {% if  favoris.utilisateur == app.user and favoris.produit == produit.produit %} active {% endif %}
                                                {% endfor %}\"
                                                    data-toggle=\"tooltip\"
                                                    data-original-title=\"Add to Wishlist\"
                                                    data-placement=\"left\">
                                                <i class=\"glyphicon glyphicon-heart\"></i>
                                            </a>

                                            <div class=\"image\" style=\"width: 100%!important;height:68%!important\">

                                {% if produit.produit.description or produit.produit.descriptionen %}
                                                <div class=\"quickview\">
                                                    <a class=\"btn btn-xs btn-quickview\"
                                                       href=\"{{ path(\"detail_produits\",{'produitid':produit.produit.id}) }}\"
                                                    >{{ \"Details\" | trans({}, 'messages') }} </a>
                                                </div>
                                {% endif %}
                                                <img style=\"width: 100%!important;border-top-left-radius: 10px;border-top-right-radius: 10px;max-height: 300px;min-height:300px;height:100%!important;object-fit: contain  !important\"
                                                     src=\"{{ asset('/assets/img/default_t_e.jpg') }}\"
                                                     data-original=\"{% if produit.produit.image and produit.produit.image and produit.produit.image != \"\" %}/uploads/produits/{{ produit.produit.image }}{% else %}{{ asset('/assets/img/default_t_e.jpg') }} {% endif %}\"
                                                     alt=\"img\"
                                                     class=\"img-responsive lazy\">

                                                {% if produit.produit.finalPrice[\"is_promo\"] and produit.produit.prixPromo and produit.produit.prixPromo > 0 %}
                                                    <div class=\"promotion\">
                                                <span class=\"discount\">{{ \"Promotion\" | trans({}, 'messages') }}
                                                </span>
                                                    </div>
                                                {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo == 1 %}
                                                    <div class=\"promotion\">
                                                <span class=\"discount\">{{ \"Promotion\" | trans({}, 'messages') }}
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
                                            {{ \"sur le\" | trans({}, 'messages') }}
                                            {{ produit.produit.numProduitPromo }}{{ \"ème\" | trans({}, 'messages') }}
\t\t\t\t\t\t\t\t\t\t</span>
                                                    </div>
                                                {% endif %}
                                            </div>
                                            <div style=\"height: 32%!important; position: relative;\">


                                                <div class=\"line_gradient\"></div>

                                                <div class=\"description\">
                                                    {% if app.request.getLocale()  == 'en' %}{{ produit.produit.nomen }}{% else %}{{ produit.produit.nom }}{% endif %}

                                                </div>

                                                <span class=\"cat_badge\">
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
                                                <div class=\"row\"
                                                     style=\" position: absolute;  bottom: 10px;left: 0;right: 0\">
                                                    <div class=\"col-lg-6 col-md-6 col-xs-6 col-sm-6 \">
                                                        <div class=\"price div_card text-left\" style=\"
                                                        {% if (produit.produit.finalPrice[\"is_promo\"] == false) or( produit.produit.finalPrice[\"is_promo\"] == true and produit.produit.numProduitPromo>1 ) %}
                                                                padding-bottom: 22px;
                                                        {% endif %} padding-left: 14px\">

                                                             <span class=\"old-price\">
                                                    {% if produit.produit.finalPrice[\"is_promo\"] and produit.produit.prixPromo and produit.produit.prixPromo > 0 %}
                                                        {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }}
                                                        {#    {{ produit.produit.finalPrice[\"old_prix\"]|number_format(2, '.', ',') }} Ar#}
                                                    {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo == 1 %}
                                                        {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }}
                                                    {% endif %}
                                                 </span>
                                                            <br>

                                                            <span>
                                                       {{ formated_price( produit.produit.finalPrice[\"prix\"],app.session.get(\"pays\")) }}
                                                         </span>
                                                        </div>

                                                    </div>
                                                    <div class=\"div_card  col-lg-6 col-md-6 col-xs-6 col-sm-6 text-right\"
                                                         style=\"padding-right: 23px\">
                                                        <div class=\" \" id=\"quantite{{ produit.produit.id }}\"
                                                             name=\"quantite{{ produit.produit.id }}\" disabled=\"none\"
                                                             hidden>

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
                                                                    <input style=\" height: 4.5rem;!important;\"
                                                                           type=\"text\"
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
                                                            <span class=\"btnspanadd\"> {{ \"Acheter\" | trans }} <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t                              \t</span>
                                                                </button>
                                                            {% else %}
                                                                {% if  produit.produit.couleurs|length > 0 %}

                                                                    <a class=\" btn_card\"
                                                                       style=\"padding-top: 15px; padding-bottom: 15px;\"
                                                                       href=\"{{ path(\"detail_produits\",{'produitid':produit.produit.id}) }}\">
                                                         <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> {{ \"Acheter\" | trans }} <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                                                                    </a>

                                                                {% else %}

                                                                    <button type=\"submit\" class=\"btn_card\"
                                                                            {#
                                                                                                                                                    {% if  produit.produit.couleurs|length > 0 %}
                                                                                onclick=\"goToProdDetail({{ produit.produit.id }})\"
                                                                            {% else %}
                                                                                id=\"btn-panier{{ produit.produit.id }}\"
                                                                                onclick=\"enabledivquantity({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"

                                                                            {% endif %}

                                                                            #}

                                                                            id=\"btn-panier{{ produit.produit.id }}\"
                                                                            onclick=\"enabledivquantity({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"

                                                                            data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                             <span class=\"add2cart\">
                                                                  <span class=\"btnspanadd\"> {{ \"Acheter\" | trans }} <i
                                                                              class=\"fa fa-shopping-cart\"></i></span>
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
                                {% endif %}

                            {% endfor %}

                            <!--/.item-->
                        </div>
                        <!-- /.row -->

                    </div>
                    <!--/.container-->

                    <div class=\"container hidden-lg hidden-md\">
                        <div id=\"owl-demopromos\" class=\"owl-carousel owl-theme\">
                            {% for produit in produitspromo %}
                                <div class=\"item\">
                                    <div class=\"product\">


                                        <a {% if app.user %} onclick=\"addfavoris({{ produit.produit.id }})\"
                                        {% else %}
                                            {#onclick=\"addfavnonConnect()\"#}
                                            href=\"{{ path(\"fos_user_security_login\",{'produitid':produit.produit.id}) }}\"

                                        {% endif %}
                                                class=\" add-fav tooltipHere
                                    {% for favoris in favoris %}
                                    {% if  favoris.utilisateur == app.user and favoris.produit == produit.produit %}active{% endif %}
                                    {% endfor %}\"
                                                data-placement=\"left\">
                                            <i class=\"glyphicon glyphicon-heart\"></i>
                                        </a>
                                        <div class=\"image\" style=\"width: 100%!important;height: 68%!important;\">
                                            {% if produit.produit.description or produit.produit.descriptionen %}

                                            <div class=\"quickview\">
                                                <a class=\"btn btn-xs btn-quickview\"
                                                   href=\"{{ path(\"detail_produits\",{'produitid':produit.produit.id}) }}\"
                                                >{{ \"Details\" | trans }} </a>
                                            </div>
                                            {% endif %}

                                            <img style=\"width: 100%!important;border-top-left-radius: 10px;border-top-right-radius: 10px;max-height: 300px;min-height:300px;height: 100%!important;object-fit: contain  !important\"
                                                 src=\"{{ asset('/assets/img/default_t_e.jpg') }}\"
                                                 data-original=\"{% if produit.produit.image and produit.produit.image and produit.produit.image != \"\" %}/uploads/produits/{{ produit.produit.image }}
                                        {% else %}{{ asset('/assets/img/default_t_e.jpg') }} {% endif %}\" alt=\"img\"
                                                 class=\"img-responsive lazy\"> {% if produit.produit.quantite >0 %}

                                                {% if produit.produit.finalPrice[\"is_promo\"] and produit.produit.prixPromo and produit.produit.prixPromo > 0 %}
                                                    <div class=\"promotion\">
                                                        <span class=\"discount\">{{ \"Promotion\" | trans }}</span>
                                                    </div>
                                                {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo == 1 %}
                                                    <div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\">{{ \"Promotion\" | trans }}
                                            {{ formated_price(produit.produit.finalPrice[\"percentage\"],app.session.get('pays'),false) }}%
\t\t\t\t\t\t\t\t\t\t</span>
                                                    </div>

                                                {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo > 1 %}
                                                    <div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\">
                                            {{ formated_price(produit.produit.finalPrice[\"percentage\"],app.session.get('pays'),false) }}%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        {{ \"sur le\" | trans }}
                                            {{ produit.produit.numProduitPromo }}{{ \"ème\" | trans }}
\t\t\t\t\t\t\t\t\t\t</span>
                                                    </div>
                                                {% endif %}
                                            {% else %}
                                                <div class=\"promotion\">
                                                    <span class=\"horsstock\"
                                                          style=\"    font-weight: 400;\">\t{{ \"HORS STOCK\" | trans }}\t</span>
                                                </div>
                                            {% endif %}
                                        </div>
                                        <div style=\"height: 32%!important;position: relative\">


                                            <div class=\"line_gradient\"></div>


                                            <div class=\"description\">
                                                {% if app.request.getLocale()  == 'en' %}{{ produit.produit.nomen }}{% else %}{{ produit.produit.nom }}{% endif %}

                                            </div>
                                            <span class=\"cat_badge\">
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


                                            <div class=\"row\" style=\"position: absolute;  bottom: 10px;left: 0;right: 0\">
                                                <div class=\"col-lg-6 col-md-6 col-xs-6 col-sm-6\">
                                                    <div class=\" price  div_card\" style=\"padding-left: 14px;
                                                    {% if (produit.produit.finalPrice[\"is_promo\"] == false) or( produit.produit.finalPrice[\"is_promo\"] == true and produit.produit.numProduitPromo>1 ) %}
                                                            padding-bottom: 22px;
                                                    {% endif %} \">
                                                        <span class=\"old-price\" style=\"float:left\">
                                              {% if produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo == 1 %}
                                                  {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }}
                                              {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.prixPromo and produit.produit.prixPromo > 0 %}
                                                  {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }}
                                              {% endif %}
                                                </span>
                                                        <br>
                                                        <span class=\"\"
                                                              style=\"float:left\"> {{ formated_price( produit.produit.finalPrice[\"prix\"],app.session.get(\"pays\")) }}</span>


                                                    </div>
                                                </div>
                                                <div class=\"div_card col-lg-6 col-md-6 col-xs-6 col-sm-6 \"
                                                     style=\"padding-right: 20px;padding-left: 10px;\">
                                                    <div class=\"row\" id=\"quantite{{ produit.produit.id }}\"
                                                         name=\"quantite{{ produit.produit.id }}\" disabled=\"none\" hidden>

                                                        <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                                            <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle{{ produit.produit.id }}\"
                                                                        onclick=\"deleteArticleQuantity({{ produit.produit.id }},{{ produit.produit.prix }})\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t                             \t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t                        \t</button>
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
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
                                                            </span>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class=\"\" id=\"addcart{{ produit.produit.id }}\"
                                                         name=\"addcart{{ produit.produit.id }}\">
                                                        {% if produit.produit.quantite == 0 %}
                                                            <button disabled type=\"button\"
                                                                    style=\" background-color: #8c8586; color: white; border: 1px solid #8c8586; padding: 0 0;
    height: 43px;
    width: 43px;
    margin-bottom: 8px;

\"
                                                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
\t\t\t\t\t\t\t\t                        \t<span class=\"add2cart\">
\t\t\t\t\t\t\t\t\t                      \t<i style=\"font-size: 17px;\"
                                                               class=\"glyphicon glyphicon-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t                       </span>
                                                            </button>
                                                        {% else %}

                                                            {% if  produit.produit.couleurs|length > 0 %}

                                                                <a class=\" btn_card\"
                                                                   style=\"padding-top: 15px; padding-bottom: 15px;\"
                                                                   href=\"{{ path(\"detail_produits\",{'produitid':produit.produit.id}) }}\">
                                                         <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> {{ \"Acheter\" | trans }} <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                                                                </a>

                                                            {% else %}
                                                                <button type=\"submit\" class=\"btn_card\"
                                                                        {#
                                                                         {% if  produit.produit.couleurs|length > 0 %}
                                                                            onclick=\"goToProdDetail({{ produit.produit.id }})\"
                                                                        {% else %}
                                                                            id=\"btn-panier{{ produit.produit.id }}\"
                                                                            onclick=\"enabledivquantity({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"

                                                                        {% endif %}
                                                                        #}


                                                                        id=\"btn-panier{{ produit.produit.id }}\"
                                                                        onclick=\"enabledivquantity({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"

                                                                        data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                        <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> {{ \"Acheter\" | trans }} <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
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

                    </div>


                    {% for produit in produitspromo %}
                        <!-- Modal -->
                        <div class=\"modal fade\" id=\"productSetailsModalAjax{{ produit.produit.id }}\" tabindex=\"-1\"
                             role=\"dialog\"
                             aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"row transitionfx text-left\"
                                         style=\"padding: 30px;margin-right: 0px!important; margin-left: 0px;!important;  \">
                                        <div class=\"col-lg-12\">
                                            <button style=\"opacity: 1.2;margin-top: -21px;margin-right: -18px;background-color: #ffffff;/* color: #454545; */\"
                                                    type=\"button\" class=\" close\" data-dismiss=\"modal\"
                                                    aria-label=\"Close\">
                                                <span style=\"color: #454545;\" aria-hidden=\"true\">×</span>
                                            </button>
                                        </div>
                                        <!-- left column -->
                                        <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                            <!-- product Image and Zoom -->


                                            <div class=\"sp-large\"
                                                 style=\"overflow: hidden; height: auto; left: 0px; top: 0px;max-width: 100% !important\">
                                                <a href=\"\" class=\"\"
                                                   style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                                    <img id=\"imageproduit{{ produit.produit.id }}\"
                                                         data-original=\"/uploads/produits/{{ produit.produit.image }}\"
                                                         src=\"{% if produit.produit.image and produit.produit.image != \"\" %}/uploads/produits/{{ produit.produit.image }}{% else %}{{ asset('/assets/img/default') }}{% endif %}\"
                                                         alt=\"{{ produit.produit.nom }}\" class=\"img-responsive\">
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

                                            <div class=\"description\">
                                                {% if app.request.getLocale()  == 'en' %}{{ produit.produit.descriptionen }}{% else %}{{ produit.produit.description }}{% endif %}

                                            </div>
                                            <div class=\"product-price\" style=\"    font-size: 20px;\">
                                                <span class=\"price-sales price\">  {{ formated_price( produit.produit.finalPrice[\"prix\"],app.session.get(\"pays\")) }}\t </span>

                                                {% if produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo == 1 %}
                                                    <span class=\"price-standard old-price\"> {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }} </span>

                                                {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.prixPromo and produit.produit.prixPromo > 0 %}
                                                    <span class=\"price-standard old-price\"> {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }}</span>
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
                                                    <span class=\"selected-color\"><strong
                                                                class=\"text_details\">{{ \"Couleurs\" | trans }}</strong></span>
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
                                                        <span class=\"selected-color\"><strong
                                                                    class=\"text_details\">{{ \"Quantité\" | trans }}</strong></span>
                                                        {% if produit.produit.couleurs|length>0 %}

                                                            <div class=\"input-group\">
                                                                <span class=\"input-group-btn \">
                                                                    <button id=\"deleteArticle{{ produit.produit.id }}\"
                                                                            onclick=\"moinsquantity({{ produit.produit.id }})\"
                                                                            type=\"button\"
                                                                            class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                            style=\"background-color:#ED0000\"
                                                                            data-type=\"minus\"
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
                                                                            style=\"background-color:#ED0000\"
                                                                            data-type=\"plus\"
                                                                            data-field=\"\">
                                                                        <span class=\"glyphicon glyphicon-plus\"></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        {% else %}

                                                            <div class=\"row\" id=\"quantite{{ produit.produit.id }}\"
                                                                 name=\"quantite{{ produit.produit.id }}\"
                                                                 disabled=\"none\">

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
                                                                        <input style=\" height: 4.5rem;!important;\"
                                                                               type=\"text\"
                                                                               id=\"qte{{ produit.produit.id }}\"
                                                                               name=\"qte{{ produit.produit.id }}\"
                                                                               class=\"form-control input-number text-center\" {% if app.session.get('panier')[produit.produit.id] is defined %} value=\"{{ app.session.get('panier')[produit.produit.id] }}\" {% else %} value=\"0\" {% endif %}
                                                                               min=\"1\" max=\"100\" disabled>
                                                                        <span class=\"input-group-btn\">
                                                                <button id=\"addArticle{{ produit.produit.id }}\"
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
                                                            <span class=\"selected-color\"><strong
                                                                        class=\"text_details\">{{ \"Taille\" | trans }}</strong></span>
                                                            <select class=\"form-control\"
                                                                    id=\"sizes{{ produit.produit.id }}\"
                                                                    name=\"sizes{{ produit.produit.id }}\"
                                                                    onchange=\"changeSize({{ produit.produit.id }})\"
                                                                    style=\"border-radius: 0px;height: 43px;font-family: Roboto-Regular,sans-serif\">
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
                                                    {% endif %}

                                                </div>
                                            </div>
                                            <!-- productFilter -->
                                            <div class=\"color-details\">
                                                {% if produit.produit.couleurs|length>0 %}

                                                    <button onclick=\"addArticleSize({{ produit.produit.id }})\"
                                                            class=\"btn  btn-primary btn_card col-lg-6 \" type=\"submit\"
                                                            style=\"border: none;border-radius: 0px;padding: 12px 20px;\"
                                                            id=\"btn-panier\"
                                                            data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                              <span class=\"add2cart btnspanadd\">
                                                                  {{ \"Ajouter au panier\" | trans }}
                                                               </span>
                                                    </button>
                                                {% else %}
                                                    <button id=\"addArticlee{{ produit.produit.id }}\"
                                                            onclick=\"addArticlee({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"
                                                            class=\"btn  btn-primary btn_card col-lg-6 \" type=\"submit\"
                                                            style=\"border: none;border-radius: 0px;padding: 12px 20px;\"
                                                            data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                                    <span class=\"add2cart btnspanadd\">
                                                                    {{ \"Ajouter au panier\" | trans }}
                                                                     </span>
                                                    </button>
                                                {% endif %}

                                                <div class=\"col-lg-6 fich_technique\">
                                                    {% if produit.produit.file %}

                                                        <a target=\"_blank\"
                                                           href=\"{{ legal_notice_directory }}/{{ produit.produit.file }}\">
                                                            <svg _ngcontent-dxq-c64=\"\" height=\"20\" viewBox=\"0 0 512 512\"
                                                                 width=\"20\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                <g _ngcontent-dxq-c64=\"\" id=\"Solid\">
                                                                    <path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\"
                                                                          d=\"m239.029 384.97a24 24 0 0 0 33.942 0l90.509-90.509a24 24 0 0 0 0-33.941 24 24 0 0 0 -33.941 0l-49.539 49.539v-262.059a24 24 0 0 0 -48 0v262.059l-49.539-49.539a24 24 0 0 0 -33.941 0 24 24 0 0 0 0 33.941z\"></path>
                                                                    <path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\"
                                                                          d=\"m464 232a24 24 0 0 0 -24 24v184h-368v-184a24 24 0 0 0 -48 0v192a40 40 0 0 0 40 40h384a40 40 0 0 0 40-40v-192a24 24 0 0 0 -24-24z\"></path>
                                                                </g>
                                                            </svg>
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
                                            {{ \"pouvez_commander_au_max\" | trans }}  {{ produit.produit.maxcommande }}
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

                        <div class=\"modal fade  \" id=\"modal-panier{{ produit.produit.id }}\"
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
                                            {% if app.request.getLocale()  == 'en' %}{{ produit.produit.nomen }}{% else %}{{ produit.produit.nom }}{% endif %} {{ \"est\" | trans }}
                                            <span id=\"idinputtwo{{ produit.produit.id }}\">  </span></h3>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
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

                </div>

            </div>

        {% endif %}


        {% if produitspromo|length == 1 %}

            <div class=\"container main-container\" style=\"margin-top: 1px !important;\">

                <!-- Main component call to action -->

                <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">
                    <h3 class=\"section-title style2  text-left\">
                        <span style=\"background-color: #F7F9FA;\">{{ \"Nos Promotions\" | trans }}  </span></h3>

                    <div class=\"container\">
                        <div class=\"row xsResponse\">
                            {% for produit in produitspromo %}
                                <div class=\"item col-lg-3 col-md-3 col-sm-4 col-xs-12\" style=\"margin-top: 15px\">
                                    <div class=\"product\">
                                        <a {% if app.user %}
                                            onclick=\"addfavoris({{ produit.produit.id }})\"
                                        {% else %}
                                            {#onclick=\"addfavnonConnect()\"#}
                                            href=\"{{ path(\"fos_user_security_login\",{'produitid':produit.produit.id}) }}\"

                                        {% endif %}
                                                class=\"add-fav tooltipHere
                                                {% for favoris in favoris %}
                                                    {% if  favoris.utilisateur == app.user and favoris.produit == produit.produit %} active

                                                    {% endif %}
                                                {% endfor %}\"
                                                data-toggle=\"tooltip\"
                                                data-original-title=\"Add to Wishlist\"
                                                data-placement=\"left\">
                                            <i class=\"glyphicon glyphicon-heart\"></i>
                                        </a>

                                        <div class=\"image\"
                                             style=\"width: 100%!important;height:68%!important;border-radius: 5px\">
                                            {% if produit.produit.description or produit.produit.descriptionen %}

                                            <div class=\"quickview\">
                                                <a class=\"btn btn-xs btn-quickview\"
                                                   href=\"{{ path(\"detail_produits\",{'produitid':produit.produit.id}) }}\"
                                                >{{ \"Details\" | trans }} </a>
                                            </div>
                                            {% endif %}

                                            <img style=\"width: 100%!important;border-top-left-radius: 10px;border-top-right-radius: 10px;max-height: 300px;min-height:300px;height:100%!important;object-fit: contain  !important\"
                                                 src=\"{{ asset('/assets/img/default_t_e.jpg') }}\"
                                                 data-original=\"{% if produit.produit.image and produit.produit.image and produit.produit.image != \"\" %}/uploads/produits/{{ produit.produit.image }}
                                                            {% else %}{{ asset('/assets/img/default_t_e.jpg') }} {% endif %}\"
                                                 alt=\"img\" class=\"img-responsive lazy\"
                                            >

                                            {% if produit.produit.finalPrice[\"is_promo\"] and produit.produit.prixPromo and produit.produit.prixPromo > 0 %}
                                                <div class=\"promotion\">
                                                    <span class=\"discount\">{{ \"Promotion\" | trans }}</span>
                                                </div>
                                            {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo == 1 %}
                                                <div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\">{{ \"Promotion\" | trans }}
                                            {{ formated_price(produit.produit.finalPrice[\"percentage\"],app.session.get('pays'),false) }}%
\t\t\t\t\t\t\t\t\t\t</span>
                                                </div>

                                            {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo > 1 %}
                                                <div class=\"promotion\">
                                                <span class=\"discount\">
                                                    {{ formated_price(produit.produit.finalPrice[\"percentage\"],app.session.get('pays'),false) }}%
                                                    {{ \"sur le\" | trans }}{{ produit.produit.numProduitPromo }}{{ \"ème\" | trans }}
                                                </span>
                                                </div>
                                            {% endif %}
                                        </div>
                                        <div style=\"height: 32%!important;position: relative\">


                                            <div class=\"line_gradient\"></div>


                                            <div class=\"description\">
                                                {% if app.request.getLocale()  == 'en' %}{{ produit.produit.nomen }}{% else %}{{ produit.produit.nom }}{% endif %}

                                            </div>
                                            <span class=\"cat_badge\">
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


                                            <div class=\"row\" style=\"position: absolute;  bottom: 10px;left: 0;right: 0\">
                                                <div class=\"col-lg-6 col-md-6 col-xs-6 col-sm-6\">
                                                    <div class=\" price div_card\" style=\"padding-left: 14px;
                                                    {% if (produit.produit.finalPrice[\"is_promo\"] == false) or( produit.produit.finalPrice[\"is_promo\"] == true and produit.produit.numProduitPromo>1 ) %}
                                                            padding-bottom: 22px;
                                                    {% endif %}\">

                                                        <span class=\"old-price\">
                                                   {% if produit.produit.finalPrice[\"is_promo\"] and produit.produit.prixPromo and produit.produit.prixPromo > 0 %}
                                                       {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }}

                                                   {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo == 1 %}
                                                       {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }}
                                                   {% endif %}
                                                </span>

                                                        <br>
                                                        <span>
                                                         {{ formated_price( produit.produit.finalPrice[\"prix\"],app.session.get(\"pays\")) }}
                                                            {#                                                    <span style=\"float:left\">{{ produit.produit.finalPrice[\"prix\"]|number_format(2, '.', ',') }} Ar
    #}
                                                </span>
                                                    </div>

                                                </div>
                                                <div class=\"div_card col-lg-6 col-md-6 col-xs-6 col-sm-6 text-right\"
                                                     style=\"padding-right: 20px;padding-left: 10px;\">
                                                    <div class=\"row\" id=\"quantite{{ produit.produit.id }}\"
                                                         name=\"quantite{{ produit.produit.id }}\" disabled=\"none\" hidden>

                                                        <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                                            <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle{{ produit.produit.id }}\"
                                                                        onclick=\"deleteArticleQuantity({{ produit.produit.id }},{{ produit.produit.prix }})\"
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
                                                                <button id=\"addArticle{{ produit.produit.id }}\"
                                                                        onclick=\"addArticle({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"plus\" data-field=\"\">
                                                                    <span class=\"glyphicon glyphicon-plus\"></span>
                                                                </button>
                                                        </span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class=\"\" id=\"addcart{{ produit.produit.id }}\"
                                                         name=\"addcart{{ produit.produit.id }}\">
                                                        {% if produit.produit.quantite == 0 %}
                                                            <button disabled type=\"button\"
                                                                    style=\"

    background-color: #8c8586;
    color: white;
    border: 1px solid #8c8586;
    padding: 0 0;
    height: 43px;
    width: 43px;
    margin-bottom: 8px;

\"
                                                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
\t\t\t\t\t\t\t\t                             \t<span class=\"add2cart\">
\t\t\t\t\t\t\t\t\t                         \t<i style=\"font-size: 17px;\"
                                                                   class=\"glyphicon glyphicon-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t                              </span>
                                                            </button>
                                                        {% else %}
                                                            {% if  produit.produit.couleurs|length > 0 %}

                                                                <a class=\" btn_card\"
                                                                   style=\"padding-top: 15px; padding-bottom: 15px;\"
                                                                   href=\"{{ path(\"detail_produits\",{'produitid':produit.produit.id}) }}\">
                                                         <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> {{ \"Acheter\" | trans }} <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                                                                </a>

                                                            {% else %}

                                                                <button type=\"submit\" class=\"btn_card\"
                                                                        {#
                                                                                                                                            {% if  produit.produit.couleurs|length > 0 %}
                                                                            onclick=\"goToProdDetail({{ produit.produit.id }})\"
                                                                        {% else %}
                                                                            id=\"btn-panier{{ produit.produit.id }}\"
                                                                            onclick=\"enabledivquantity({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"

                                                                        {% endif %}

                                                                        #}

                                                                        id=\"btn-panier{{ produit.produit.id }}\"
                                                                        onclick=\"enabledivquantity({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"

                                                                        data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                                  <span class=\"add2cart\">
                                                                         <span class=\"btnspanadd\"> {{ \"Acheter\" | trans }} <i
                                                                                     class=\"fa fa-shopping-cart\"></i></span>

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
                            <!--/.item-->
                            {% for produit in produitspromo %}
                                <div class=\"modal fade\" id=\"productSetailsModalAjax{{ produit.produit.id }}\"
                                     tabindex=\"-1\" role=\"dialog\"
                                     aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"row transitionfx text-left\"
                                                 style=\"padding: 30px;margin-right: 0px!important; margin-left: 0px;!important;\">
                                                <div class=\"col-lg-12\">
                                                    <button style=\"opacity: 1.2;margin-top: -21px;margin-right: -18px;background-color: #ffffff;/* color: #454545; */\"
                                                            type=\"button\" class=\" close\" data-dismiss=\"modal\"
                                                            aria-label=\"Close\">
                                                        <span style=\"color: #454545;\" aria-hidden=\"true\">×</span>
                                                    </button>
                                                </div>
                                                <!-- left column -->
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <!-- product Image and Zoom -->
                                                    <div class=\"main-image sp-wrap col-lg-12 no-padding style3\"
                                                         style=\"display: inline-block;\">


                                                        <div class=\"sp-large\"
                                                             style=\"overflow: hidden; height: auto; left: 0px; top: 0px;max-width: 100% !important\">
                                                            <a href=\"\" class=\"\"
                                                               style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                                                <img id=\"imageproduit{{ produit.produit.id }}\"
                                                                     data-original=\"/uploads/produits/{{ produit.produit.image }}\"
                                                                     src=\"{% if produit.produit.image and produit.produit.image != \"\" %}/uploads/produits/{{ produit.produit.image }}

                                                                          {% else %}{{ asset('/assets/img/default_t_e.jpg') }}{% endif %}\"
                                                                     alt=\"{{ produit.produit.nom }}\"
                                                                     class=\"img-responsive\"
                                                                     style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                                            </a>
                                                        </div>
                                                    </div>


                                                </div>
                                                <!--/ left column end -->


                                                <!-- right column -->
                                                <div class=\"col-lg-8 col-md-6 col-sm-6\">
                                                    <input type=\"text\" id=\"idproduit\" value=\"{{ produit.produit.id }}\"
                                                           hidden>

                                                    <h1 class=\"product-title titleproduitt\">

                                                        {% if app.request.getLocale()  == 'en' %}{{ produit.produit.nomen }}{% else %}{{ produit.produit.nom }}{% endif %}

                                                    </h1>

                                                    <div class=\"description\">
                                                        {% if app.request.getLocale()  == 'en' %}{{ produit.produit.descriptionen }}{% else %}{{ produit.produit.description }}{% endif %}

                                                    </div>
                                                    <div class=\"product-price\" style=\"font-size: 20px;\">
                                                        <span class=\"price-sales price\">  {{ formated_price( produit.produit.finalPrice[\"prix\"],app.session.get(\"pays\")) }}</span>
                                                        {% if produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo == 1 %}
                                                            <span class=\"price-standard  old-price\"> {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }} </span>
                                                        {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.prixPromo and produit.produit.prixPromo > 0 %}
                                                            <span class=\"price-standard old-price\"> {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }}</span>
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
                                                            <span class=\"selected-color selectedSpan\"><strong
                                                                        class=\"text_details\">{{ \"Couleurs\" | trans }}</strong></span>
                                                            <ul class=\"swatches Color\"
                                                                name=\"couleur{{ produit.produit.id }}\"
                                                                id=\"couleur{{ produit.produit.id }}\">
                                                                {% set i = 1 %}
                                                                {% for couleur in produit.produit.couleurs %}
                                                                    {% if i == 1 %}
                                                                        <li class=\"selected\"
                                                                            value=\"{{ couleur.codeCouleur }}\"
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
                                                                <span class=\"selected-color selectedSpan\"><strong
                                                                            class=\"text_details\">{{ \"Quantité\" | trans }}</strong></span>

                                                                {% if produit.produit.couleurs|length>0 %}
                                                                    <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"deleteArticle{{ produit.produit.id }}\"
                                                                    onclick=\"moinsquantity({{ produit.produit.id }})\"
                                                                    type=\"button\"
                                                                    class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                    style=\"background-color:#ED0000\" data-type=\"minus\"
                                                                    data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                        <input style=\"font-family: Roboto-Regular,sans-serif;font-size: 14px;font-weight: bold; height: 4.5rem;!important;\"
                                                                               type=\"text\"
                                                                               id=\"quantitymodal{{ produit.produit.id }}\"
                                                                               name=\"quantitymodal{{ produit.produit.id }}\"
                                                                               class=\"form-control input-number text-center\" {% if app.session.get('panier')[produit.produit.id] is defined %} value=\"{{ app.session.get('panier')[produit.produit.id] }}\" {% else %} value=\"1\" {% endif %}
                                                                               min=\"1\" max=\"100\" disabled>

                                                                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button onclick=\"plusquantity({{ produit.produit.id }})\"
                                                                    type=\"button\"
                                                                    class=\"quantity-right-plus btn btn-success btn-number btn_plus_moins\"
                                                                    style=\"background-color:#ED0000\" data-type=\"plus\"
                                                                    data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                    </div>

                                                                {% else %}

                                                                    <div class=\"row\"
                                                                         id=\"quantite{{ produit.produit.id }}\"
                                                                         name=\"quantite{{ produit.produit.id }}\"
                                                                         disabled=\"none\">

                                                                        <div class=\"col-lg-12 col-md-12 col-xs-12\"
                                                                             style=\"\">
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
                                                                                <input style=\" height: 4.5rem;!important;\"
                                                                                       type=\"text\"
                                                                                       id=\"qte{{ produit.produit.id }}\"
                                                                                       name=\"qte{{ produit.produit.id }}\"
                                                                                       class=\"form-control input-number text-center\" {% if app.session.get('panier')[produit.produit.id] is defined %} value=\"{{ app.session.get('panier')[produit.produit.id] }}\" {% else %} value=\"0\" {% endif %}
                                                                                       min=\"1\" max=\"100\" disabled>
                                                                                <span class=\"input-group-btn\">
                                                                <button id=\"addArticle{{ produit.produit.id }}\"
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
                                                                    <span class=\"selected-color selectedSpan\"><strong
                                                                                class=\"text_details\">{{ \"Taille\" | trans }}</strong></span>
                                                                    <select class=\"form-control \"
                                                                            id=\"sizes{{ produit.produit.id }}\"
                                                                            name=\"sizes{{ produit.produit.id }}\"
                                                                            onchange=\"changeSize({{ produit.produit.id }})\"
                                                                            style=\"border-radius: 0px;height: 43px; font-family: Roboto-Regular,sans-serif\">
                                                                        <option disabled
                                                                                style=\" color:#374649;font-family: Roboto-Regular,sans-serif;font-size: 12px;font-weight: 400 \"
                                                                                selected>
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

                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <!-- productFilter -->


                                                    <div class=\"color-details\">
                                                        {% if produit.produit.couleurs|length>0 %}


                                                            <button onclick=\"addArticleSize({{ produit.produit.id }})\"
                                                                    class=\"  btn_card col-lg-6\" type=\"submit\"
                                                                    id=\"btn-panier\"
                                                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                                <span class=\"add2cart\">
                                                                <span class=\"btnspanadd\">{{ \"Acheter\" | trans }} <i
                                                                            class=\"fa fa-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t                    </span>
                                                            </button>
                                                        {% else %}
                                                            <button onclick=\"addArticlee({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"
                                                                    class=\"  btn_card col-lg-6\" type=\"submit\"
                                                                    id=\"addArticlee{{ produit.produit.id }}\"
                                                                    data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                                <span class=\"add2cart\">
                                                                <span class=\"btnspanadd\">{{ \"Acheter\" | trans }} <i
                                                                            class=\"fa fa-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t                    </span>
                                                            </button>
                                                        {% endif %}
                                                        <div class=\"col-lg-6 fich_technique\">
                                                            {% if produit.produit.file %}

                                                                <a target=\"_blank\"
                                                                   href=\"{{ legal_notice_directory }}/{{ produit.produit.file }}\">
                                                                    <svg _ngcontent-dxq-c64=\"\" height=\"20\"
                                                                         viewBox=\"0 0 512 512\" width=\"20\"
                                                                         xmlns=\"http://www.w3.org/2000/svg\">
                                                                        <g _ngcontent-dxq-c64=\"\" id=\"Solid\">
                                                                            <path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\"
                                                                                  d=\"m239.029 384.97a24 24 0 0 0 33.942 0l90.509-90.509a24 24 0 0 0 0-33.941 24 24 0 0 0 -33.941 0l-49.539 49.539v-262.059a24 24 0 0 0 -48 0v262.059l-49.539-49.539a24 24 0 0 0 -33.941 0 24 24 0 0 0 0 33.941z\"></path>
                                                                            <path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\"
                                                                                  d=\"m464 232a24 24 0 0 0 -24 24v184h-368v-184a24 24 0 0 0 -48 0v192a40 40 0 0 0 40 40h384a40 40 0 0 0 40-40v-192a24 24 0 0 0 -24-24z\"></path>
                                                                        </g>
                                                                    </svg>
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
                            {% endfor %}
                        </div>
                        <!-- /.row -->

                    </div>
                    <!--/.container-->
                </div>

            </div>

        {% endif %}

        <div class=\"container main-container\" style=\"margin-top: 1px !important;\">

            <!-- Main component call to action -->

            <div class=\"row featuredPostContainer globalPadding style2\">

                {% for message in app.session.flashBag.get('produitfini') %}
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        {{ message }}
                    </div>
                {% endfor %}
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 row\">
                    <h3 class=\"col-lg-8 col-md-8 col-sm-7 col-xs-7 section-title style2  text-left\">
                        <span> {{ \"Produits les plus vendus\" | trans }} </span>
                    </h3>

                    <div class=\"col-lg-4 col-md-4 col-sm-5 col-xs-5 text-right\">
                        <a style=\"float: right;
                        font-family: Roboto-Regular, sans-serif;
                        font-style: normal;
                        font-weight: bold;
                        font-size: 16px;
                        line-height: 40px;
                        text-align: center;
                        color: #7f8c8d!important;
                         padding-top: 15px\" href=\"{{ path(\"view_products\") }}\">
                            <i class=\"fa fa-caret-right icon\"></i>&nbsp;{{ \"view_all\"|trans }} </a>
                    </div>
                </div>
                <br> <br> <br>
                <div id=\"owl-demo\" class=\"owl-carousel owl-theme\">
                    {% for produit in produits %}
                        <div class=\"item\">
                            <div class=\"product\">


                                <a {% if app.user %} onclick=\"addfavoris({{ produit.produit.id }})\"
                                {% else %}
                                    {#onclick=\"addfavnonConnect()\"#}
                                    href=\"{{ path(\"fos_user_security_login\",{'produitid':produit.produit.id}) }}\"

                                {% endif %}
                                        class=\" add-fav tooltipHere
                                    {% for favoris in favoris %}
                                    {% if  favoris.utilisateur == app.user and favoris.produit == produit.produit %}active{% endif %}
                                    {% endfor %}\"
                                        data-placement=\"left\">
                                    <i class=\"glyphicon glyphicon-heart\"></i>
                                </a>
                                <div class=\"image\" style=\"width: 100%!important;height: 68%!important;\">


                                    {% if produit.produit.description or produit.produit.descriptionen %}

                                    <div class=\"quickview\">
                                        <a class=\"btn btn-xs btn-quickview\"
                                           href=\"{{ path(\"detail_produits\",{'produitid':produit.produit.id}) }}\"
                                        >{{ \"Details\" | trans }} </a>
                                    </div>
                                    {% endif %}

                                    <img style=\"width: 100%!important;border-top-left-radius: 10px;border-top-right-radius: 10px;max-height: 300px;min-height:300px;height: 100%!important;object-fit: contain  !important\"
                                         src=\"{{ asset('/assets/img/default_t_e.jpg') }}\"
                                         data-original=\"{% if produit.produit.image and produit.produit.image and produit.produit.image != \"\" %}/uploads/produits/{{ produit.produit.image }}
                                        {% else %}{{ asset('/assets/img/default_t_e.jpg') }} {% endif %}\" alt=\"img\"
                                         class=\"img-responsive lazy\"> {% if produit.produit.quantite >0 %}

                                        {% if produit.produit.finalPrice[\"is_promo\"] and produit.produit.prixPromo and produit.produit.prixPromo > 0 %}
                                            <div class=\"promotion\">
                                                <span class=\"discount\">{{ \"Promotion\" | trans }}</span>
                                            </div>
                                        {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo == 1 %}
                                            <div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\">{{ \"Promotion\" | trans }}
                                            {{ formated_price(produit.produit.finalPrice[\"percentage\"],app.session.get('pays'),false) }}%
\t\t\t\t\t\t\t\t\t\t</span>
                                            </div>

                                        {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo > 1 %}
                                            <div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\">
                                            {{ formated_price(produit.produit.finalPrice[\"percentage\"],app.session.get('pays'),false) }}%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        {{ \"sur le\" | trans }}
                                            {{ produit.produit.numProduitPromo }}{{ \"ème\" | trans }}
\t\t\t\t\t\t\t\t\t\t</span>
                                            </div>
                                        {% endif %}
                                    {% else %}
                                        <div class=\"promotion\">
                                            <span class=\"horsstock\"
                                                  style=\"    font-weight: 400;\">\t{{ \"HORS STOCK\" | trans }}\t</span>
                                        </div>
                                    {% endif %}
                                </div>
                                <div style=\"height: 32%!important;position: relative\">


                                    <div class=\"line_gradient\"></div>


                                    <div class=\"description\">
                                        {% if app.request.getLocale()  == 'en' %}{{ produit.produit.nomen }}{% else %}{{ produit.produit.nom }}{% endif %}

                                    </div>
                                    <span class=\"cat_badge\">
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


                                    <div class=\"row\" style=\"position: absolute;  bottom: 10px;left: 0;right: 0\">
                                        <div class=\"col-lg-6 col-md-6 col-xs-6 col-sm-6\">
                                            <div class=\" price  div_card\" style=\"padding-left: 14px;
                                            {% if (produit.produit.finalPrice[\"is_promo\"] == false) or( produit.produit.finalPrice[\"is_promo\"] == true and produit.produit.numProduitPromo>1 ) %}
                                                    padding-bottom: 22px;
                                            {% endif %}\">
                                            <span class=\"old-price\" style=\"float:left\">
                                              {% if produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo == 1 %}
                                                  {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }}
                                              {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.prixPromo and produit.produit.prixPromo > 0 %}
                                                  {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }}
                                              {% endif %}
                                                </span>
                                                <br>
                                                <span class=\"\"
                                                      style=\"float:left\"> {{ formated_price( produit.produit.finalPrice[\"prix\"],app.session.get(\"pays\")) }}</span>


                                            </div>
                                        </div>
                                        <div class=\"div_card col-lg-6 col-md-6 col-xs-6 col-sm-6 text-right\"
                                             style=\"padding-right: 20px;padding-left: 10px;\">
                                            <div class=\"row\" id=\"quantite{{ produit.produit.id }}\"
                                                 name=\"quantite{{ produit.produit.id }}\" disabled=\"none\" hidden>

                                                <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                                    <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle{{ produit.produit.id }}\"
                                                                        onclick=\"deleteArticleQuantity({{ produit.produit.id }},{{ produit.produit.prix }})\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"minus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t                             \t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t                        \t</button>
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
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
                                                            </span>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class=\"\" id=\"addcart{{ produit.produit.id }}\"
                                                 name=\"addcart{{ produit.produit.id }}\">
                                                {% if produit.produit.quantite == 0 %}
                                                    <button disabled type=\"button\"
                                                            style=\" background-color: #8c8586; color: white; border: 1px solid #8c8586; padding: 0 0;
    height: 43px;
    width: 43px;
    margin-bottom: 8px;

\"
                                                            data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
\t\t\t\t\t\t\t\t                        \t<span class=\"add2cart\">
\t\t\t\t\t\t\t\t\t                      \t<i style=\"font-size: 17px;\"
                                                               class=\"glyphicon glyphicon-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t                       </span>
                                                    </button>
                                                {% else %}

                                                    {% if  produit.produit.couleurs|length > 0 %}

                                                        <a class=\" btn_card\"
                                                           style=\"padding-top: 15px; padding-bottom: 15px;\"
                                                           href=\"{{ path(\"detail_produits\",{'produitid':produit.produit.id}) }}\">
                                                         <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> {{ \"Acheter\" | trans }} <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
                                                        </a>

                                                    {% else %}
                                                        <button type=\"submit\" class=\"btn_card\"
                                                                {#
                                                                 {% if  produit.produit.couleurs|length > 0 %}
                                                                     onclick=\"goToProdDetail({{ produit.produit.id }})\"
                                                                 {% else %}
                                                                     id=\"btn-panier{{ produit.produit.id }}\"
                                                                     onclick=\"enabledivquantity({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"

                                                                 {% endif %}


                                                                 #}
                                                                id=\"btn-panier{{ produit.produit.id }}\"
                                                                onclick=\"enabledivquantity({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"

                                                                data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                        <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> {{ \"Acheter\" | trans }} <i
                                                                        class=\"fa fa-shopping-cart\"></i></span>
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


                {% for produit in produits %}
                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"productSetailsModalAjax{{ produit.produit.id }}\" tabindex=\"-1\"
                         role=\"dialog\"
                         aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"row transitionfx text-left\"
                                     style=\"padding: 30px;margin-right: 0px!important; margin-left: 0px;!important;\">
                                    <div class=\"col-lg-12\">
                                        <button style=\"opacity: 1.2;margin-top: -21px;margin-right: -18px;background-color: #ffffff;/* color: #454545; */\"
                                                type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span style=\"color: #454545;\" aria-hidden=\"true\">×</span>
                                        </button>
                                    </div>
                                    <!-- left column -->
                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                        <!-- product Image and Zoom -->
                                        <div class=\"main-image sp-wrap col-lg-12 no-padding style3\"
                                             style=\"display: inline-block;\">


                                            <div class=\"sp-large\"
                                                 style=\"overflow: hidden; height: auto; left: 0px; top: 0px;max-width: 100% !important\">
                                                <a href=\"\" class=\"\"
                                                   style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                                    <img id=\"imageproduit{{ produit.produit.id }}\"
                                                         data-original=\"/uploads/produits/{{ produit.produit.image }}\"
                                                         src=\"{% if produit.produit.image and produit.produit.image != \"\" %}/uploads/produits/{{ produit.produit.image }}
                                                          {% else %}{{ asset('/assets/img/default_t_e.jpg') }}{% endif %}\"
                                                         alt=\"{{ produit.produit.nom }}\" class=\"img-responsive\"
                                                         style=\"width: 100%;height: 100%;border-radius: 10px!important;\">
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                    <!--/ left column end -->


                                    <!-- right column -->
                                    <div class=\"col-lg-8 col-md-6 col-sm-6\">
                                        <input type=\"text\" id=\"idproduit\" value=\"{{ produit.produit.id }}\" hidden>

                                        <h1 class=\"product-title titleproduitt\">

                                            {% if app.request.getLocale()  == 'en' %}{{ produit.produit.nomen }}{% else %}{{ produit.produit.nom }}{% endif %}

                                        </h1>

                                        <div class=\"description\">
                                            {% if app.request.getLocale()  == 'en' %}{{ produit.produit.descriptionen }}{% else %}{{ produit.produit.description }}{% endif %}

                                        </div>
                                        <div class=\"product-price\" style=\"font-size: 20px;\">
                                            <span class=\"price-sales price\">  {{ formated_price( produit.produit.finalPrice[\"prix\"],app.session.get(\"pays\")) }}</span>
                                            {% if produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo == 1 %}
                                                <span class=\"price-standard  old-price\"> {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }} </span>
                                            {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.prixPromo and produit.produit.prixPromo > 0 %}
                                                <span class=\"price-standard old-price\"> {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }}</span>
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
                                                <span class=\"selected-color selectedSpan\"><strong
                                                            class=\"text_details\">{{ \"Couleurs\" | trans }}</strong></span>
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
                                                    <span class=\"selected-color selectedSpan\"><strong
                                                                class=\"text_details\">{{ \"Quantité\" | trans }}</strong></span>
                                                    {% if produit.produit.couleurs|length>0 %}

                                                        <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"deleteArticle{{ produit.produit.id }}\"
                                                                    onclick=\"moinsquantity({{ produit.produit.id }})\"
                                                                    type=\"button\"
                                                                    class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                    style=\"background-color:#ED0000\" data-type=\"minus\"
                                                                    data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            <input style=\"font-family: Roboto-Regular,sans-serif;font-size: 14px;font-weight: bold; height: 4.5rem;!important;\"
                                                                   type=\"text\"
                                                                   id=\"quantitymodal{{ produit.produit.id }}\"
                                                                   name=\"quantitymodal{{ produit.produit.id }}\"
                                                                   class=\"form-control input-number text-center\" {% if app.session.get('panier')[produit.produit.id] is defined %} value=\"{{ app.session.get('panier')[produit.produit.id] }}\" {% else %} value=\"1\" {% endif %}
                                                                   min=\"1\" max=\"100\" disabled>

                                                            <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button onclick=\"plusquantity({{ produit.produit.id }})\"
                                                                    type=\"button\"
                                                                    class=\"quantity-right-plus btn btn-success btn-number btn_plus_moins\"
                                                                    style=\"background-color:#ED0000\" data-type=\"plus\"
                                                                    data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </div>


                                                    {% else %}

                                                        <div class=\"row\" id=\"quantite{{ produit.produit.id }}\"
                                                             name=\"quantite{{ produit.produit.id }}\" disabled=\"none\">

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
                                                                    <input style=\" height: 4.5rem;!important;\"
                                                                           type=\"text\"
                                                                           id=\"qte{{ produit.produit.id }}\"
                                                                           name=\"qte{{ produit.produit.id }}\"
                                                                           class=\"form-control input-number text-center\" {% if app.session.get('panier')[produit.produit.id] is defined %} value=\"{{ app.session.get('panier')[produit.produit.id] }}\" {% else %} value=\"0\" {% endif %}
                                                                           min=\"1\" max=\"100\" disabled>
                                                                    <span class=\"input-group-btn\">
                                                                <button id=\"addArticle{{ produit.produit.id }}\"
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
                                                        <span class=\"selected-color selectedSpan\"><strong
                                                                    class=\"text_details\">{{ \"Taille\" | trans }}</strong></span>
                                                        <select class=\"form-control \" id=\"sizes{{ produit.produit.id }}\"
                                                                name=\"sizes{{ produit.produit.id }}\"
                                                                onchange=\"changeSize({{ produit.produit.id }})\"
                                                                style=\"border-radius: 0px;height: 43px; font-family: Roboto-Regular,sans-serif\">
                                                            <option disabled
                                                                    style=\" color:#374649;font-family: Roboto-Regular,sans-serif;font-size: 12px;font-weight: 400 \"
                                                                    selected>
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

                                                {% endif %}
                                            </div>
                                        </div>
                                        <!-- productFilter -->


                                        <div class=\"color-details\">
                                            {% if  produit.produit.couleurs|length > 0 %}

                                                <button onclick=\"addArticleSize({{ produit.produit.id }})\"
                                                        class=\"  btn_card col-lg-6\" type=\"submit\"
                                                        id=\"btn-panier\"
                                                        data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                   <span class=\"add2cart\">
                                                        <span class=\"btnspanadd\">{{ \"Acheter\" | trans }} <i
                                                                    class=\"fa fa-shopping-cart\"></i></span>

\t\t\t\t\t\t\t\t\t\t            \t</span>
                                                </button>
                                            {% else %}
                                                <button onclick=\"addArticlee({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"
                                                        class=\"  btn_card col-lg-6\" type=\"submit\"
                                                        id=\"addArticlee{{ produit.produit.id }}\"
                                                        data-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                   <span class=\"add2cart\">
                                                        <span class=\"btnspanadd\">{{ \"Acheter\" | trans }} <i
                                                                    class=\"fa fa-shopping-cart\"></i></span>

\t\t\t\t\t\t\t\t\t\t            \t</span>
                                                </button>
                                            {% endif %}

                                            <div class=\"col-lg-6 fich_technique\">
                                                {% if produit.produit.file %}

                                                    <a target=\"_blank\"
                                                       href=\"{{ legal_notice_directory }}/{{ produit.produit.file }}\">
                                                        <svg _ngcontent-dxq-c64=\"\" height=\"20\" viewBox=\"0 0 512 512\"
                                                             width=\"20\" xmlns=\"http://www.w3.org/2000/svg\">
                                                            <g _ngcontent-dxq-c64=\"\" id=\"Solid\">
                                                                <path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\"
                                                                      d=\"m239.029 384.97a24 24 0 0 0 33.942 0l90.509-90.509a24 24 0 0 0 0-33.941 24 24 0 0 0 -33.941 0l-49.539 49.539v-262.059a24 24 0 0 0 -48 0v262.059l-49.539-49.539a24 24 0 0 0 -33.941 0 24 24 0 0 0 0 33.941z\"></path>
                                                                <path _ngcontent-dxq-c64=\"\" fill=\"#ED0000\"
                                                                      d=\"m464 232a24 24 0 0 0 -24 24v184h-368v-184a24 24 0 0 0 -48 0v192a40 40 0 0 0 40 40h384a40 40 0 0 0 40-40v-192a24 24 0 0 0 -24-24z\"></path>
                                                            </g>
                                                        </svg>
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


                    <div class=\"modal fade\" id=\"modal-quantity-max{{ produit.produit.id }}\" tabindex=\"-1\" role=\"dialog\"
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
                                        {{ \"pouvez_commander_au_max\" | trans }}{{ produit.produit.maxcommande }}
                                        {% if app.request.getLocale()  == 'en' %}{{ produit.produit.nomen }}{% else %}{{ produit.produit.nom }}{% endif %}</h3>


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
                                                }, 14000)


                                            });

                                        </script>
                    #}



                    <div class=\"modal fade  \" id=\"modal-panier{{ produit.produit.id }}\"
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
                                        {% if app.request.getLocale()  == 'en' %}{{ produit.produit.nomen }}{% else %}{{ produit.produit.nom }}{% endif %} {{ \"est\" | trans }}
                                        <span id=\"idinputtwo{{ produit.produit.id }}\">  </span></h3>

                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                    </div>

                    {#
                          <script>
                              \$(document).click(function(event) {
                                setTimeout(function(){
                                      \$('#modal-panier{{ produit.produit.id }}').modal('hide')
                                  }, 14000);


                              });

                          </script>
                    #}

                {% endfor %}

                <!--/.productslider id=\"owl-demo\"   id=\"productslider\"-->

            </div>
            <!--/.featuredPostContainer-->
        </div>


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
                            {{ \"fav_alert\" | trans }}
                        </h3>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>


    </div>
    {% if categories %}

        <div class=\"container\"
             style=\"padding-right: 2%;padding-left: 2%;margin-top: 20px;margin-bottom: 20px;background-color: #ffffff;max-width: 1600px\">
            <div class=\"row xsResponse\">
                {# % for key,category in categories[\"other\"] %} #}
                {% for key,category in categories %}

                    <div class=\"col-lg-3 col-md-4 col-xs-6 col-sm-4\">

                        <div>
                            <br>
                            <a style=\"font-weight: bold;color: #ED0000;font-family: Roboto-Regular, sans-serif !important\"
                               href=\"{{ path(\"list_produit\") }}?categorie_id={{ category.id }}\">
                                {% if app.session.get(\"pays\").FrontLanguage  == 'en' or app.session.get(\"pays\").FrontLanguage  == 'EN' %}{{ category.nomEn }}{% else %} {{ category.nom }}{% endif %}
                            </a>
                            <br>
                            {% for sub_category in category.sousCategories %}
                                <a style=\"margin-top: 10px!important;font-family: Roboto-Regular, sans-serif !important\"
                                   href=\"{{ path(\"list_produit\") }}?sub_categorie_id={{ sub_category.id }}\">
                                    <i class=\"fa fa-caret-right icon\" style=\"color: #ED0000 \"></i>&nbsp;

                                    {% if  app.session.get(\"pays\").FrontLanguage  == 'en' or app.session.get(\"pays\").FrontLanguage  == 'EN' %}{{ sub_category.nomEn }}{% else %} {{ sub_category.nom }}{% endif %}
                                </a>
                                <br>
                            {% endfor %}
                        </div>
                    </div>
                {% endfor %}

            </div>


        </div>

    {% endif %}

    <div class=\"fab\" id=\"div_fab\" hidden><i class=\"triangle_down\"></i> </div>



    <style>
        .triangle_down {
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-top: 15px solid #ffffff;
            font-size: 0;
            line-height: 0;
        }

        .fab {
            width: 50px;
            height: 50px;
            background-color: #ED0000;
            border-radius: 50%;
            box-shadow: 0 6px 10px 0 #666;
            transition: all 0.1s ease-in-out;

            font-size: 40px;
            color: white;
            text-align: center;
            line-height: 50px;

            position: fixed;
            right: 50px;
            bottom: 50px;

        }

        .fab:hover {
            box-shadow: 0 6px 14px 0 #666;
            transform: scale(1.05);
        }


        .owl-buttons {
            display: block;
        }

        .owl-carousel:hover .owl-buttons {
            display: block;
        }

        .owl-item {
            text-align: center;
            padding-left: 10px;
            padding-right: 10px;
        }


        .owl-theme .owl-controls .owl-buttons div {
            background: transparent;
            color: #869791;
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

    <!-- /main container -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>

    <script>
        \$(\"#div_fab\").click(function() {
            window.scrollTo(0, document.body.scrollHeight);

        });


    </script>

    <script>
        \$(document).ready(function () {

            var owl = \$(\"#owl-demo\");
            owl.owlCarousel({

                //  itemsDesktop : true,
                //  itemsDesktopSmall : false,
                /// itemsTablet: false,
                // itemsMobile : false,
                startPosition: 0,
                rtl: false,

                items: 4,
                navigation: true,
                loop: false,
                autoPlay: 5000,
                autoplaySpeed: 10000,
                autoplayHoverPause: true,
                navigationText: ['<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-left fa-stack-1x fa-inverse\"></i></span>', '<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-right fa-stack-1x fa-inverse\"></i></span>'],

                itemsDesktop: [1100, 3], //5 items between 1100px and 901px
                itemsDesktopSmall: [900, 2], // betweem 900px and 601px
                itemsTablet: [700, 2], //2 items between 600 and 0
                itemsMobile: [520, 1] // itemsMobile disabled - inherit from itemsTablet option

            });

            // Custom Navigation Events
            \$(\".owl-carousel-arrows .next\").click(function () {
                owl.trigger('owl.next');
            });

            \$(\".owl-carousel-arrows .prev\").click(function () {
                owl.trigger('owl.prev');
            });
        });
    </script>
    <script>
        \$(document).ready(function () {

            var owl = \$(\"#owl-demopromos\");
            owl.owlCarousel({

                //  itemsDesktop : true,
                // itemsDesktopSmall : false,
                //  itemsTablet: false,
                //  itemsMobile : false,
                //
                startPosition: 0,
                rtl: false,

                items: 4,
                loop: false,
                autoPlay: 5000,

                navigation: true,
                autoplayHoverPause: true,
                navigationText: ['<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-left fa-stack-1x fa-inverse\"></i></span>', '<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-right fa-stack-1x fa-inverse\"></i></span>'],

                itemsDesktop: [1100, 3], //5 items between 1100px and 901px
                itemsDesktopSmall: [900, 2], // betweem 900px and 601px
                itemsTablet: [700, 2], //2 items between 600 and 0
                itemsMobile: [520, 1] // itemsMobile disabled - inherit from itemsTablet option

            });

            // Custom Navigation Events
            \$(\".owl-carousel-arrows .next\").click(function () {
                owl.trigger('owl.next');
            });

            \$(\".owl-carousel-arrows .prev\").click(function () {
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

            \$(\"#quantitymodal\" + produitid).val(1);//rahma addd to

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
                    if (qte > quantite) {

                        //  alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                        document.getElementById(\"idinputtwo\" + id).innerHTML = quantite;

                        \$(\"document\").ready(function () {

                            //was  \$('#modal-panier' + id).modal({backdrop: 'static', keyboard: false});
                            \$('#modal-panier' + id).modal(\"show\");


                        })


                    } else {
                        addArticlewithsize(id, sizeid, qte);
                        \$('#productSetailsModalAjax' + id).modal('hide');

                    }

                }
            });

        }

        function changeSize(id) {
            //\$(\"#quantitymodal\" + id).val(1);
        }

        function goToProdDetail(produitid) {
            console.log(\"produitid\" + produitid)
            console.log(produitid)
            \$.ajax({
                'url': Routing.generate('detail_produits', {'produitid': produitid}),
                'success': function (r) {
                    \$('#div1').html(r);
                }
            });


        }

        function enabledivquantity(id, quantite, max) {
            var qte = parseInt(\$(\"#qte\" + id).val());

            if (qte + 1 > quantite) {

                //alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                document.getElementById(\"idinputtwo\" + id).innerHTML = quantite;

                \$(\"document\").ready(function () {
                    //wasss \$('#modal-panier' + id).modal({backdrop: 'static', keyboard: false});
                    \$('#modal-panier' + id).modal(\"show\");

                })
            } else if (qte + 1 > max) {
                \$(\"document\").ready(function () {
                    //was \$('#modal-quantity-max' + id).modal({backdrop: 'static', keyboard: false});
                    \$('#modal-quantity-max' + id).modal(\"show\");
                })
            } else if (qte >= 0) {
                var quantities = document.querySelectorAll(\"[id=quantite\" + id + \"]\");
                var btncarts = document.querySelectorAll(\"[id=addcart\" + id + \"]\");
                for (var i = 0; i < btncarts.length; i++) {
                    btncarts[i].style.display = \"none\";
                }
                for (var i = 0; i < quantities.length; i++) {
                    quantities[i].style.display = \"block\";
                }


                addArticle(id, quantite, max);
            }
        }

        function plusquantity(id) {

            var selectsizes = document.getElementById(\"sizes\" + id);
            var sizeid = selectsizes.options[selectsizes.selectedIndex].value;
            var qte = parseInt(\$(\"#quantitymodal\" + id).val());

            \$.ajax({
                url: \"{{ (path('size_from_id')) }}\",
                dataType: 'Json',
                data: {\"sizeid\": sizeid},
                type: 'GET',
                success: function (data) {
                    var quantite = data;
                    var qtee = parseInt(\$(\"#quantitymodal\" + id).val()) + 1;

                    if (qtee > quantite) {

                        //alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
                        document.getElementById(\"idinputtwo\" + id).innerHTML = quantite;

                        \$(\"document\").ready(function () {

                            //wass \$('#modal-panier' + id).modal({backdrop: 'static', keyboard: false});
                            \$('#modal-panier' + id).modal(\"show\");

                        })

                    } else {
                        var qte = parseInt(\$(\"#quantitymodal\" + id).val()) + 1;
                        var qte_input = document.querySelectorAll(\"[id=quantitymodal\" + id + \"]\");
                        for (var i = 0; i < qte_input.length; i++) {
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
                \$(\"#quantitymodal\" + id).val(qte);
            } else {
                \$(\"document\").ready(function () {
                    \$('#modal-quantity').modal({backdrop: 'static', keyboard: false});
                })

            }
        }

        <!-- ---- -->

        function plusquantityD(id, quantity, max) {

            var qte = parseInt(\$(\"#qte\" + id).val()) + 1;
            if (qte > quantity) {
                document.getElementById(\"idinputtwo\" + id).innerHTML = quantity;

                \$(\"document\").ready(function () {
                    //was  \$('#modal-panier' + id).modal({  backdrop: 'static',    keyboard: false  });
                    \$('#modal-panier' + id).modal(\"show\");


                })
            } else if (qte > max) {
                \$(\"document\").ready(function () {
                    //was  \$('#modal-quantity-max'+id).modal({ backdrop: 'static',   keyboard: false});

                    \$('#modal-quantity-max' + id).modal(\"show\");

                })
            } else {
                //  \$(\"#qte\" + id).val(qte);
                var qte_input = document.querySelectorAll(\"[id=qte\" + id + \"]\");

                for (var i = 0; i < qte_input.length; i++) {
                    qte_input[i].value = qte;
                }
            }

        }

        function moinquantityD(id, quantity, max) {

            var qte = parseInt(\$(\"#qte\" + id).val()) - 1;
            //  \$(\"#qte\" + id).val(qte);
            var qte_input = document.querySelectorAll(\"[id=qte\" + id + \"]\");

            if (qte > 0) {
                for (var i = 0; i < qte_input.length; i++) {
                    qte_input[i].value = qte;
                }
            } else {
                \$(\"document\").ready(function () {
                    \$('#modal-quantity').modal({backdrop: 'static', keyboard: false});
                })

            }
        }

        function addArticlee(id, quantity, max) {
            var qte = parseInt(\$(\"#qte\" + id).val());
            var qte_input = document.querySelectorAll(\"[id=qte\" + id + \"]\");

            //  console.log(\"eeeee\");
            //   console.log(qte)


            if (qte > quantity) {
                document.getElementById(\"idinputtwo\" + id).innerHTML = quantity;

                \$(\"document\").ready(function () {
                    //wasss  \$('#modal-panier' + id).modal({                         backdrop: 'static',                         keyboard: false                     });

                    \$('#modal-panier' + id).modal(\"show\");

                })
            } else if (qte > max) {
                \$(\"document\").ready(function () {
                    //was  \$('#modal-quantity-max'+id).modal({  backdrop: 'static',  keyboard: false});

                    \$('#modal-quantity-max' + id).modal(\"show\");

                })
            } else {
                for (var i = 0; i < qte_input.length; i++) {
                    qte_input[i].value = qte;
                }
                //   alert(\"qtettee\"+qte)
                var \$this = \$(\"#addArticlee\" + id);
                \$.ajax({
                    url: Routing.generate('add_many_quantity_to_cart', {id: id, qte: qte}), success: function (result) {
                        \$(\".my_nav_bar\").html(result);
                        \$(\".total_price_cart_empty\").html(\$(\".total_price_cart\").html());
                        \$(\"img.lazy\").lazyload({
                            threshold: 50
                        });
                        \$(window).load(function () {
                            \$(\"html,body\").trigger(\"scroll\");
                        });
                        \$this.button('reset');
                        //hide modal after add to cart
                        // \$('#productSetailsModalAjax'+id).modal('hide');
                        \$('.modal').modal('hide');

                    }
                });
            }
        }
    </script>
{% endblock body %}
", "FrontendBundle:Default:index.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/Default/index.html.twig");
    }
}
