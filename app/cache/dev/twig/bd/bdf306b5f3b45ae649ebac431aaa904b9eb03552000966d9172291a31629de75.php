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

/* @Frontend/Blocks/navbar.html.twig */
class __TwigTemplate_102b54ad49fafcbb03343ce156f5b80f7c49b4ce60753c52df2f5d61761ea997 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/Blocks/navbar.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/flag-icon-css/flag-icon.css"), "html", null, true);
        echo "\">

<script>
    function changeStation() {
        r = confirm(\"Le panier sera vidé si vous changez la station\");
        if (r === true) {
            \$(\"#form-station\").submit();
        }

    }

    \$(document).ready(function () {
        var route = \$('#cp').val();
        if (route != null) {
            if (route == \"homepage_frontend\") {
                \$('#homepage').addClass(\"active\");
                //\$('#homepage_link').css('color','white')
            } else if (route == \"list_produit\") {
                \$('#prods').addClass(\"active\");
                // \$('#prods_link').css('color','white')
            } else if (route == \"contact_us\") {
                \$('#contact').addClass(\"active\");
                //\$('#contact_link').css('color','white');
            }


        }
    });
</script>
<style>

    .navbar-top{
        padding-top:20px !important;
    }
    .miniCartFooter {
        background: #F7F9FA;
    }

    @media (min-width: 980px) and (max-width: 993px) {
        .cartMenu a.dropdown-toggle, .cartMenu a#cart-sidebar-toggle {
            font-size: 0px !important;
        }
    }

    @media (min-width: 768px) {
        .navbar-tshop ul.nav li.dropdown ul.dropdown-menu {
            max-height: 500px;
            overflow-y: auto;
        }
    }
    @media (max-width: 768px) {
        .navbar-top{
            padding-top:0px !important;
        }
    }

    @media (min-width: 768px) and (max-width: 1199px) {
        .navbar-nav > li > a {
            font-size: 12px;
            font-family: 'roboto-bold', sans-serif;
            line-height: 12px;
            font-weight: 600;
        }

        .cartMenu a.dropdown-toggle, .cartMenu a#cart-sidebar-toggle {
            font-size: 15px;
        }

        .userMenu > li > a {
            font-size: 11px;
        }
    }


</style>

    <div class=\"navbar navbar-tshop navbar-fixed-top megamenu my_nav_bar container \" role=\"navigation\"
         style=\"padding-left: 2%;padding-right:2%;\">

        <div class=\"navbar-top \" >
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-1   col-md-1  col-sm-2   hidden-xs   \"
                         style=\"text-align: center;padding-right: 10px\">
                        <a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_frontend");
        echo "\" class=\"hidden-xs \">
                            <img class=\"img_logo\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logo_totalenergies.png"), "html", null, true);
        echo "\" alt=\"logo total\"
                            >
                        </a>
                    </div>

                    ";
        // line 121
        echo "
                    <div class=\"col-lg-11 col-sm-10 col-xs-12 col-md-10  \">
                        <div class=\"pull-left\">
                            <ul class=\"userMenu\">
                                <li>
                                    <a class=\"hidden-xs \" href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_frontend");
        echo "\">
                                        <span class=\"hidden-xs titre_7_menu\">";
        // line 127
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "webSiteTitle", []), "html", null, true);
        }
        echo "</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class=\"pull-right\">

                            <ul class=\"userMenu\">
                                <li class=\"dropdown dropdown_station\" style=\"padding-top: -1px\">
                                    <a ";
        // line 137
        if (($context["station"] ?? $this->getContext($context, "station"))) {
            echo " href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("choosestation");
            echo "\" ";
        }
        echo "   style=\"text-transform:none;background: -webkit-linear-gradient(left, rgba(239, 111, 0), rgba(237, 0, 0)) !important;
                                               -webkit-background-clip: text !important;
                                                 -webkit-text-fill-color: transparent !important;\">
                                        <i class=\"fa fa-map-marker\"></i>&nbsp;";
        // line 140
        if (($context["station"] ?? $this->getContext($context, "station"))) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "nom", []), "html", null, true);
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select Station", [], "messages"), "html", null, true);
        }
        echo " <i class=\"fa  fa-sort-desc\"></i>
                                    </a>
                                    ";
        // line 149
        echo "                                </li>



                                <li class=\"dropdown hasUserMenu\">

                                    <a style=\"text-transform: none !important;\" class=\"dropdown-toggle\"
                                       data-toggle=\"dropdown\" aria-expanded=\"true\">

                                        <span class=\"hidden-xs\"> ";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact", [], "messages"), "html", null, true);
        echo " </span>
                                        <i class=\"fa fa-info-circle hide visible-xs \"></i>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <br>
                                        ";
        // line 163
        if ((($context["station"] ?? $this->getContext($context, "station")) && $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "adresse", []))) {
            // line 164
            echo "                                            <li>
                                                <a href=\"\"><i class=\"fa fa-map-marker\"></i>
                                                    <span class=\"hidden-xs txtnbrr \"> ";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adresse", [], "messages"), "html", null, true);
            echo ": </span> ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "adresse", []), "html", null, true);
            echo "
                                                </a>
                                            </li>
                                        ";
        }
        // line 170
        echo "                                        ";
        if ((($context["station"] ?? $this->getContext($context, "station")) && $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "gerant", []))) {
            // line 171
            echo "                                            <li><a href=\"https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "gerant", []), "email", []), "html", null, true);
            echo "\" target=\"_blank\" ><i class=\"fa fa-envelope\"></i>
                                                    <span class=\"hidden-xs\"> ";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages"), "html", null, true);
            echo ": </span>
                                                    ";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "gerant", []), "email", []), "html", null, true);
            echo "</a>
                                            </li>
                                        ";
        }
        // line 176
        echo "                                        ";
        if ((($context["station"] ?? $this->getContext($context, "station")) && $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "tel", []))) {
            // line 177
            echo "                                            <li><a href=\"\"><i class=\"fa fa-phone\"></i>
                                                    <span class=\"hidden-xs\"> ";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléphone", [], "messages"), "html", null, true);
            echo ": </span>
                                                    ";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "tel", []), "html", null, true);
            echo "</a></li>
                                        ";
        }
        // line 181
        echo "                                        <br>
                                    </ul>
                                </li>

                                ";
        // line 185
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
            // line 186
            echo "                                    <li><a style=\"text-transform: none !important;\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte");
            echo "\">
                                            <span class=\"hidden-xs\"> ";
            // line 187
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mon Compte", [], "messages"), "html", null, true);
            echo " </span>
                                            <i class=\"glyphicon glyphicon-user hide visible-xs \"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a style=\"text-transform: none !important;\" href=\"";
            // line 193
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout_user");
            echo "\">
                                            <span class=\"hidden-xs\">";
            // line 194
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Déconnexion", [], "messages"), "html", null, true);
            echo "</span>
                                            <i class=\"glyphicon glyphicon-log-out hide visible-xs \"></i>
                                        </a>
                                    </li>
                                ";
        } else {
            // line 199
            echo "                                    <li><a style=\"text-transform: none !important;\"
                                           href=\"";
            // line 200
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">
                                            <span class=\"hidden-xs\">";
            // line 201
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Se Connecter", [], "messages"), "html", null, true);
            echo " </span>
                                            <i class=\"glyphicon glyphicon-user hide visible-xs \"></i>
                                        </a>
                                    </li>
                                    <li class=\"hidden-xs\">
                                        <a style=\"text-transform: none !important;\"
                                           href=\"";
            // line 207
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Créer nouveau compte", [], "messages"), "html", null, true);
            echo "</a>
                                    </li>
                                ";
        }
        // line 210
        echo "                                <li class=\"hidden-xs\">
                                    <a style=\"color: #ED0000;text-transform: none !important;\" ";
        // line 211
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")) {
            // line 212
            echo "                                        href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "webSiteUrlFiliale", []), "html", null, true);
            echo "\"";
        }
        echo " target=\"_blank\">";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "webSiteNameFiliale", []), "html", null, true);
        }
        echo "</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.navbar-top-->
        <hr class=\"hidden-xs  line\" style=\"margin-right: 30px\">
        <hr class=\"hidden-lg hidden-sm hidden-md linexs\">

        <div class=\"container\">
            <div class=\"navbar-header\">

                <a href=\"";
        // line 227
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_frontend");
        echo "\" class=\"hidden-lg hidden-sm hidden-md\">
                    <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logo_totalenergies_mobile.png"), "html", null, true);
        echo "\" alt=\"logo total\"
                         style=\"  width: 64px;\">
                </a>
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"
                        style=\"background: #ffffff !important;float:right;margin-right: 10px;\"><span
                            class=\"sr-only\"> Toggle navigation </span> <span class=\"icon-bar\"> </span> <span
                            class=\"icon-bar\">
                </span> <span class=\"icon-bar\"> </span>
                </button>
                <a href=\"";
        // line 237
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-cart\"><i
                                class=\"fa fa-shopping-cart colorWhite \"> </i> <span
                                class=\"cartRespons colorWhite\">(";
        // line 240
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["panier"] ?? $this->getContext($context, "panier"))), "html", null, true);
        echo ")

                        </span>
                    </button>
                </a>

                ";
        // line 246
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
            // line 247
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">

                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-cart\"><i
                                    class=\"glyphicon glyphicon-heart colorWhite \"  > </i> <span
                                    class=\"cartRespons colorWhite\">(";
            // line 251
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["favoris"] ?? $this->getContext($context, "favoris"))), "html", null, true);
            echo ")

                        </span>
                        </button>
                    </a>
                ";
        }
        // line 257
        echo "

                <!-- this part for mobile -->
                <div class=\"search-box pull-right hidden-lg hidden-md hidden-sm\">
                    <div class=\"input-group\">
                        <button class=\"btn  getFullSearch\" type=\"button\" style=\"background-color: #ffffff;color: #545252;\">
                            <i class=\"fa fa-search\"> </i>
                        </button>
                    </div>
                    <!-- /input-group -->
                </div>


            </div>


            <!--/.navbar-cart-->
            <li class=\"navbar-collapse collapse\">

                <ul class=\"nav navbar-nav\">

                    ";
        // line 485
        echo "
                    ";
        // line 487
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["key"] => $context["category"]) {
            // line 488
            echo "                        <li class=\"dropdown megamenu-30width \">
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\"
                               href=\"";
            // line 490
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_produit");
            echo "?categorie_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", []), "html", null, true);
            echo "\">
                                ";
            // line 491
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "en") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "EN"))) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "nomEn", []), "html", null, true);
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "nom", []), "html", null, true);
            }
            // line 492
            echo "
                                <b class=\"caret\"> </b>

                            </a>
                            <ul class=\"dropdown-menu\"  style=\"box-shadow: 3px 3px 3px lightgrey;\">
                                <li class=\"megamenu-content \">
                                    <ul class=\"col-lg-12  col-sm-12 col-md-12 unstyled noMarginLeft newCollectionUl\">

                                        <li style=\"margin-top:16px \">
                                            <a href=\"";
            // line 501
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_produit");
            echo "?categorie_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", []), "html", null, true);
            echo "\">
                                                ";
            // line 502
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all"), "html", null, true);
            echo "
                                                ";
            // line 503
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "en") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "EN"))) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "nomEn", []), "html", null, true);
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "nom", []), "html", null, true);
            }
            // line 504
            echo "
                                            </a>
                                        </li>
                                        ";
            // line 507
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "sousCategories", []));
            foreach ($context['_seq'] as $context["_key"] => $context["sub_category"]) {
                // line 508
                echo "                                            <li style=\"margin-top:16px \">
                                                <a href=\"";
                // line 509
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_produit");
                echo "?sub_categorie_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sub_category"], "id", []), "html", null, true);
                echo "\">
                                                    ";
                // line 510
                if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "en") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "EN"))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sub_category"], "nomEn", []), "html", null, true);
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sub_category"], "nom", []), "html", null, true);
                }
                // line 511
                echo "
                                                </a>
                                            </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 515
            echo "
                                    </ul>

                                    ";
            // line 518
            if ((($this->getAttribute($context["category"], "id", []) == 8) && false)) {
                // line 519
                echo "                                        <ul class=\"col-lg-9  col-sm-3 col-md-3  col-xs-4\">
                                            <li><a class=\"newProductMenuBlock\" href=\"product-details.html\"> <img
                                                            class=\"img-responsive\"
                                                            src=\"https://tn.jumia.is/cms/campaign-TN/2020/w15/W15_Protection_SX_TN_020420.jpg\"
                                                            alt=\"product\" style=\"width: 100%; max-height: 300px;\"><span
                                                            class=\"ProductMenuCaption\"> <i
                                                                class=\"fa fa-caret-right\"> </i> ";
                // line 525
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion"), "html", null, true);
                echo "
                                        </span>
                                                </a></li>
                                        </ul>
                                    ";
            }
            // line 530
            echo "                                </li>
                            </ul>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 534
        echo "                </ul>

                <!--

           <div class=\"dropdown cartMenu pull-right hidden-lg hidden-md hidden-sm\">
                <div  class=\"input-group\" style=\"margin-top: 5px\">

                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"javascript:void(0)\" data-animation=\"scale-up\"
                   aria-expanded=\"false\" role=\"button\">
                    ";
        // line 543
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
            echo "EN";
        } elseif (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr")) {
            echo "FR";
        }
        // line 544
        echo "                </a>
                <div class=\"dropdown-menu \" >
                    <a class=\"dropdown-item\" style=\"font-family: Roboto-Regular, sans-serif\" href=\"";
        // line 546
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fr_en");
        echo "?to=en\" role=\"menuitem\">
                        <span class=\"flag-icon flag-icon-gb\"></span>EN</a><br>
                    <a class=\"dropdown-item\" href=\"";
        // line 548
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fr_en");
        echo "?to=fr\" role=\"menuitem\">
                        <span class=\"flag-icon flag-icon-fr\"></span>FR</a>
                </div>
                </div>
            </div>
-->
                <!--- this part will be hidden for mobile version -->
                <div class=\"nav navbar-nav navbar-right hidden-xs\">
                    <ul class=\"nav navbar-nav \" style=\"float: right\">

                        <li class=\"dropdown \">
                            ";
        // line 559
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")) {
            // line 560
            echo "
                                ";
            // line 561
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "code", []) == "mg")) {
                // line 562
                echo "                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"javascript:void(0)\"
                                       aria-expanded=\"false\" role=\"button\"  >
                                        <span style=\"border: 1px solid grey;border-radius: 15%;padding-top: -1px\" class=\"flag-icon flag-icon-";
                // line 564
                if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "code", []), "html", null, true);
                }
                echo "\"></span>
                                    </a>
                                ";
            } else {
                // line 567
                echo "                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"javascript:void(0)\"
                                       aria-expanded=\"false\" role=\"button\"  >
                                        <span class=\"flag-icon flag-icon-";
                // line 569
                if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "code", []), "html", null, true);
                }
                echo "\"></span>

                                    </a>
                                ";
            }
            // line 573
            echo "
                            ";
        }
        // line 575
        echo "
                            <!--
                        <ul class=\"dropdown-menu\" style=\"margin-top: -10px\">
                            ";
        // line 578
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pays"] ?? $this->getContext($context, "pays")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 579
            echo "                                <li class=\"megamenu-content\">
                                    <ul class=\" \">
                                        <li>


                                               <a class=\"dropdown-item\" style=\"font-family: Roboto-Regular, sans-serif\"
                                               href=\"";
            // line 585
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_frontend");
            echo "?pays=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "code", []), "html", null, true);
            echo "\" role=\"menuitem\">
                                                <span class=\"flag-icon flag-icon-";
            // line 586
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "code", []), "html", null, true);
            echo "\"></span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", []), "html", null, true);
            echo "</a>



                                        </li>

                                    </ul>

                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 596
        echo "
                        </ul>

                        -->
                        </li>

                    </ul>


                    <div class=\"search-box\" style=\"border-right: 1px solid white;float: left;\">
                        <div class=\"input-group\">
                            <button class=\"btn btn-nobg getFullSearch\" type=\"button\"><i class=\"fa fa-search\"> </i></button>
                        </div>
                        <!-- /input-group -->
                    </div>
                    ";
        // line 611
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
            // line 612
            echo "                        <div class=\"dropdown cartMenu\">
                            <a href=\"";
            // line 613
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"glyphicon glyphicon-heart  hidden-lg\" style=\"color: #df0c36\"></i>

                                <span class=\"cartRespons\">
                            <span class=\"nb-article\">";
            // line 617
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["favoris"] ?? $this->getContext($context, "favoris"))), "html", null, true);
            echo "</span>
                             <i class=\"glyphicon glyphicon-heart hide visible-xs\" style=\"color: #df0c36\"></i>
                            ";
            // line 619
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Favoris"), "html", null, true);
            echo "
                        </span> <b class=\"caret\"> </b>
                            </a>

                            <div class=\"dropdown-menu col-lg-4 col-xs-12 col-md-4\">
                                <div class=\"w100 miniCartTable scroll-pane\" style=\"overflow-y: auto;\">
                                    <table>
                                        <tbody>
                                        ";
            // line 627
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["favoris"] ?? $this->getContext($context, "favoris")));
            foreach ($context['_seq'] as $context["key"] => $context["fav"]) {
                // line 628
                echo "                                            <tr class=\"CartProduct\" id='fav";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fav"], "produit", []), "id", []), "html", null, true);
                echo "'>
                                                <td style=\"width:40%\" class=\"CartProductThumb\">
                                                    <div>
                                                        <img style=\"  background-repeat: no-repeat;  background-size: contain\" alt=\"";
                // line 631
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fav"], "produit", []), "nom", []), "html", null, true);
                echo "\"
                                                             data-original=\"/uploads/produits/";
                // line 632
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fav"], "produit", []), "image", []), "html", null, true);
                echo "\"
                                                             src=\"";
                // line 633
                if (($this->getAttribute($this->getAttribute($context["fav"], "produit", []), "image", []) && ($this->getAttribute($this->getAttribute($context["fav"], "produit", []), "image", []) != ""))) {
                    echo "/uploads/produits/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fav"], "produit", []), "image", []), "html", null, true);
                    echo "
                                                         ";
                } else {
                    // line 634
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
                }
                echo "\">
                                                    </div>
                                                </td>
                                                <td style=\"width:30%\">
                                                    <div class=\"CartDescription\">
                                                        <h4>
                                                            <a style=\"font-size: 13px\" href=\"";
                // line 640
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_produit", ["keyword" => $this->getAttribute($this->getAttribute($context["fav"], "produit", []), "nom", [])]), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fav"], "produit", []), "nom", []), "html", null, true);
                echo "</a>
                                                        </h4>
                                                        <div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t     <span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 644
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($context["fav"], "produit", []), "prix", []), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style=\"width:30%\" class=\"delete\">
                                                    <a title=\"Delete\" onclick=\"deletefavoris(";
                // line 651
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fav"], "produit", []), "id", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo ")\">
                                                        <i class=\"glyphicon glyphicon-trash fa-2x\"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['fav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 657
            echo "                                        </tbody>
                                    </table>
                                </div>
                                <!--/.miniCartTable-->


                                <!--/.miniCartFooter-->

                            </div>
                            <!--/.dropdown-menu-->
                        </div>

                    ";
        }
        // line 670
        echo "





                    <div class=\"dropdown cartMenu\">
                        <a href=\"";
        // line 677
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-shopping-cart\"> </i>
                            <span class=\"cartRespons\">
                            <span class=\"nb-article\">";
        // line 680
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["panier"] ?? $this->getContext($context, "panier"))), "html", null, true);
        echo "</span>
                            ";
        // line 681
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Article"), "html", null, true);
        if ((twig_length_filter($this->env, ($context["panier"] ?? $this->getContext($context, "panier"))) != 1)) {
            echo "s";
        }
        // line 682
        echo "                            | <span class=\"total_price_cart_empty\">0</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "devise", []), "html", null, true);
        echo "
                        </span> <b class=\"caret\"> </b>
                        </a>

                        <div class=\"dropdown-menu col-lg-4 col-xs-12 col-md-4\">
                            <div class=\"w100 miniCartTable scroll-pane\" style=\"overflow-y: auto;\">
                                <table>
                                    <tbody>
                                    ";
        // line 690
        $context["total_price"] = 0;
        // line 691
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 692
            echo "                                        ";
            $context["nb_article"] = $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["article"], "id", []), [], "array");
            // line 693
            echo "                                        <tr class=\"miniCartProduct product-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", []), "html", null, true);
            echo "\">
                                            <td style=\"width:20%\" class=\"miniCartProductThumb\">
                                                <div><a href=\"\"> <img class=\"lazy\"
                                                                      alt=\"";
            // line 696
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nom", []), "html", null, true);
            echo "\"
                                                                      data-original=\"/uploads/produits/";
            // line 697
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "image", []), "html", null, true);
            echo "\"
                                                                      src=\"";
            // line 698
            if (($this->getAttribute($context["article"], "image", []) && ($this->getAttribute($context["article"], "image", []) != ""))) {
                echo "/uploads/produits/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "image", []), "html", null, true);
                echo "  ";
            } elseif ((($this->getAttribute($context["article"], "SousCategorie", []) && $this->getAttribute($this->getAttribute($context["article"], "SousCategorie", []), "image", [])) && ($this->getAttribute($this->getAttribute($context["article"], "SousCategorie", []), "image", []) != ""))) {
                echo "/uploads/produits/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "SousCategorie", []), "image", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
            }
            echo "\">
                                                    </a>
                                                </div>
                                            </td>
                                            <td style=\"width:40%\">
                                                <div class=\"miniCartDescription\">
                                                    <h4>
                                                        <a href=\"\">";
            // line 705
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nom", []), "html", null, true);
            echo " </a>
                                                    </h4>
                                                    <div class=\"price\">
                                                    <span style=\"color:#ED0000; font-size: 14px\">
                                                        ";
            // line 709
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($context["article"], "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "
                                                    </span>
                                                        ";
            // line 711
            if (($this->getAttribute($this->getAttribute($context["article"], "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($context["article"], "numProduitPromo", []) == 1))) {
                // line 712
                echo "                                                            <span class=\"old-price\">
                                                            ";
                // line 713
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($context["article"], "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
                                                    </span>

                                                        ";
            } elseif ((($this->getAttribute($this->getAttribute(            // line 716
$context["article"], "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($context["article"], "prixPromo", [])) && ($this->getAttribute($context["article"], "prixPromo", []) > 0))) {
                // line 717
                echo "                                                            <span class=\"old-price\">
                                                            ";
                // line 718
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($context["article"], "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
                                                        </span>
                                                        ";
            }
            // line 721
            echo "
                                                    </div>
                                                </div>
                                            </td>
                                            <td style=\"width:10%\" class=\"miniCartQuantity\"><a> X ";
            // line 725
            echo twig_escape_filter($this->env, ($context["nb_article"] ?? $this->getContext($context, "nb_article")), "html", null, true);
            echo " </a>
                                            </td>
                                            <td style=\"width:15%\" class=\"miniCartSubtotal\">
                                            <span>
                                            ";
            // line 729
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($context["article"], "getTotalPrice", [0 => ($context["nb_article"] ?? $this->getContext($context, "nb_article"))], "method"), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "
                                            </span>
                                                ";
            // line 731
            if (($this->getAttribute($this->getAttribute($context["article"], "finalPrice", []), "is_promo", [], "array") && (($context["nb_article"] ?? $this->getContext($context, "nb_article")) >= $this->getAttribute($context["article"], "numProduitPromo", [])))) {
                // line 732
                echo "                                                    <span class=\"old-price\">
                                                     ";
                // line 733
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($context["article"], "getTotalPrice", [0 => ($context["nb_article"] ?? $this->getContext($context, "nb_article"))], "method"), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
                                            </span>
                                                ";
            }
            // line 736
            echo "                                            </td>
                                            ";
            // line 737
            $context["total_price"] = (($context["total_price"] ?? $this->getContext($context, "total_price")) + $this->getAttribute($this->getAttribute($context["article"], "getTotalPrice", [0 => ($context["nb_article"] ?? $this->getContext($context, "nb_article"))], "method"), "prix", [], "array"));
            // line 738
            echo "                                            <td style=\"width:5%\" class=\"delete\"
                                                onclick=\"deleteArticle(";
            // line 739
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, (($context["nb_article"] ?? $this->getContext($context, "nb_article")) * $this->getAttribute($context["article"], "prix", [])), "html", null, true);
            echo " )\">
                                                <a style=\"font-size:21px !important;font-family: sans-serif;color: #374649;margin-left: 5px \">
                                                    <i class=\"glyphicon glyphicon-trash fa-xs\"></i> </a>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 745
        echo "                                    </tbody>
                                </table>
                            </div>
                            <!--/.miniCartTable-->

                            <div class=\"miniCartFooter text-right\">
                                ";
        // line 751
        if ((($context["coupon"] ?? $this->getContext($context, "coupon")) && (($context["coupon"] ?? $this->getContext($context, "coupon")) != ""))) {
            // line 752
            echo "
                                    ";
            // line 753
            if (($this->getAttribute(($context["coupon"] ?? $this->getContext($context, "coupon")), "type", []) == 1)) {
                // line 754
                echo "                                        ";
                $context["total_price"] = (($context["total_price"] ?? $this->getContext($context, "total_price")) - $this->getAttribute(($context["coupon"] ?? $this->getContext($context, "coupon")), "montant", []));
                // line 755
                echo "                                    ";
            } elseif (($this->getAttribute(($context["coupon"] ?? $this->getContext($context, "coupon")), "type", []) == 2)) {
                // line 756
                echo "                                        ";
                $context["total_price"] = ((($context["total_price"] ?? $this->getContext($context, "total_price")) / 100) * (100 - $this->getAttribute(($context["coupon"] ?? $this->getContext($context, "coupon")), "pourcentage", [])));
                // line 757
                echo "                                    ";
            }
            // line 758
            echo "                                ";
        }
        // line 759
        echo "                                <h3 class=\"text-right subtotal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total"), "html", null, true);
        echo ": <span class=\"total_price_cart\">
                                     ";
        // line 760
        echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice(($context["total_price"] ?? $this->getContext($context, "total_price")), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
        echo "
                                </span> ";
        // line 761
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "devise", []), "html", null, true);
        echo "
                                </h3>
                                <a class=\"btn btnvoirpanier\" href=\"";
        // line 763
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Voir panier"), "html", null, true);
        echo "</a>
                                <a class=\"btn btnvoirpayer\" ";
        // line 764
        if (((twig_length_filter($this->env, ($context["panier"] ?? $this->getContext($context, "panier"))) > 0) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []))) {
            echo "href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modereception");
            echo "\"
                                   ";
        } else {
            // line 765
            echo "href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
            echo "\" ";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Commander"), "html", null, true);
        echo " </a>
                            </div>
                            <!--/.miniCartFooter-->

                        </div>
                        <!--/.dropdown-menu-->
                    </div>
                    <!--/.cartMenu-->

                    <!--/.language   -->


                    <!--/.language-->
                </div>
                <!--/.navbar-nav hidden-xs-->

            </li>
            <!--/.nav-collapse -->


        </div>
        <div class=\"search-full text-right\" style=\"\">
            <a class=\"pull-right search-close\"> <i class=\" fa fa-times-circle\"> </i> </a>
            <form action=\"";
        // line 788
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_produit");
        echo "\" method=\"get\">
                <div class=\"searchInputBox pull-right\">
                    <input type=\"search\" data-searchurl=\"keyword?=\" name=\"keyword\" placeholder=";
        // line 790
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Rechercher"), "html", null, true);
        echo "
                    class=\"search-input\">
                    <button class=\"btn-nobg search-btn\" type=\"submit\"><span class=\"description\"></span></button>
                </div>
            </form>

        </div>

        <div hidden style=\"height: 6px;background: linear-gradient(90deg,#fff,#fff 37.17%,#c5c6c7);\"></div>

    </div>



";
        // line 804
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 808
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 804
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 805
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flag-icon.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 806
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/stflagiconcss/css/flag-icon.min.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/Blocks/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1069 => 806,  1064 => 805,  1058 => 804,  1050 => 808,  1048 => 804,  1031 => 790,  1026 => 788,  995 => 765,  988 => 764,  982 => 763,  977 => 761,  973 => 760,  968 => 759,  965 => 758,  962 => 757,  959 => 756,  956 => 755,  953 => 754,  951 => 753,  948 => 752,  946 => 751,  938 => 745,  924 => 739,  921 => 738,  919 => 737,  916 => 736,  910 => 733,  907 => 732,  905 => 731,  900 => 729,  893 => 725,  887 => 721,  881 => 718,  878 => 717,  876 => 716,  870 => 713,  867 => 712,  865 => 711,  860 => 709,  853 => 705,  834 => 698,  830 => 697,  826 => 696,  819 => 693,  816 => 692,  811 => 691,  809 => 690,  797 => 682,  792 => 681,  788 => 680,  782 => 677,  773 => 670,  758 => 657,  744 => 651,  734 => 644,  725 => 640,  715 => 634,  708 => 633,  704 => 632,  700 => 631,  693 => 628,  689 => 627,  678 => 619,  673 => 617,  666 => 613,  663 => 612,  661 => 611,  644 => 596,  626 => 586,  620 => 585,  612 => 579,  608 => 578,  603 => 575,  599 => 573,  590 => 569,  586 => 567,  578 => 564,  574 => 562,  572 => 561,  569 => 560,  567 => 559,  553 => 548,  548 => 546,  544 => 544,  538 => 543,  527 => 534,  518 => 530,  510 => 525,  502 => 519,  500 => 518,  495 => 515,  486 => 511,  479 => 510,  473 => 509,  470 => 508,  466 => 507,  461 => 504,  454 => 503,  450 => 502,  444 => 501,  433 => 492,  426 => 491,  420 => 490,  416 => 488,  411 => 487,  408 => 485,  385 => 257,  376 => 251,  368 => 247,  366 => 246,  357 => 240,  351 => 237,  339 => 228,  335 => 227,  310 => 212,  308 => 211,  305 => 210,  297 => 207,  288 => 201,  284 => 200,  281 => 199,  273 => 194,  269 => 193,  260 => 187,  255 => 186,  253 => 185,  247 => 181,  242 => 179,  238 => 178,  235 => 177,  232 => 176,  226 => 173,  222 => 172,  217 => 171,  214 => 170,  205 => 166,  201 => 164,  199 => 163,  191 => 158,  180 => 149,  170 => 140,  160 => 137,  145 => 127,  141 => 126,  134 => 121,  126 => 86,  122 => 85,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"{{ asset('remark/global/vendor/flag-icon-css/flag-icon.css') }}\">

<script>
    function changeStation() {
        r = confirm(\"Le panier sera vidé si vous changez la station\");
        if (r === true) {
            \$(\"#form-station\").submit();
        }

    }

    \$(document).ready(function () {
        var route = \$('#cp').val();
        if (route != null) {
            if (route == \"homepage_frontend\") {
                \$('#homepage').addClass(\"active\");
                //\$('#homepage_link').css('color','white')
            } else if (route == \"list_produit\") {
                \$('#prods').addClass(\"active\");
                // \$('#prods_link').css('color','white')
            } else if (route == \"contact_us\") {
                \$('#contact').addClass(\"active\");
                //\$('#contact_link').css('color','white');
            }


        }
    });
</script>
<style>

    .navbar-top{
        padding-top:20px !important;
    }
    .miniCartFooter {
        background: #F7F9FA;
    }

    @media (min-width: 980px) and (max-width: 993px) {
        .cartMenu a.dropdown-toggle, .cartMenu a#cart-sidebar-toggle {
            font-size: 0px !important;
        }
    }

    @media (min-width: 768px) {
        .navbar-tshop ul.nav li.dropdown ul.dropdown-menu {
            max-height: 500px;
            overflow-y: auto;
        }
    }
    @media (max-width: 768px) {
        .navbar-top{
            padding-top:0px !important;
        }
    }

    @media (min-width: 768px) and (max-width: 1199px) {
        .navbar-nav > li > a {
            font-size: 12px;
            font-family: 'roboto-bold', sans-serif;
            line-height: 12px;
            font-weight: 600;
        }

        .cartMenu a.dropdown-toggle, .cartMenu a#cart-sidebar-toggle {
            font-size: 15px;
        }

        .userMenu > li > a {
            font-size: 11px;
        }
    }


</style>

    <div class=\"navbar navbar-tshop navbar-fixed-top megamenu my_nav_bar container \" role=\"navigation\"
         style=\"padding-left: 2%;padding-right:2%;\">

        <div class=\"navbar-top \" >
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-1   col-md-1  col-sm-2   hidden-xs   \"
                         style=\"text-align: center;padding-right: 10px\">
                        <a href=\"{{ path('homepage_frontend') }}\" class=\"hidden-xs \">
                            <img class=\"img_logo\" src=\"{{ asset('assets/img/logo_totalenergies.png') }}\" alt=\"logo total\"
                            >
                        </a>
                    </div>

                    {#
                    style=\"border-bottom: 1px solid rgba(222, 222, 222, 0.6);min-height: 40px\"
                        <div class=\"col-lg-4 col-sm-5 col-xs-6 col-md-5 hidden\" >
                        <div class=\"pull-left \">
                            <ul class=\"userMenu \">
                                <li class=\"dropdown dropdown_station\">
                                    <form   action=\"{{ path(\"setStation\") }}\">
                                        <select class=\"custom_select\" id=\"stationList\" name=\"station_id\"
                                                style=\"margin-left: -4px; color:#374649\"
                                                onchange=\"this.form.submit()\">
                                            <option></option>
                                            {% for key, station in stations %}
                                                <optgroup  style=\" color:#374649 \" label=\"{{ key }}\">
                                                    {% for s in station %}
                                                        <option value=\"{{ s.id }}\"
                                                                {% if app.session.get(\"station_id\",\"\") == s.id %} selected
                                                                {% endif %}>{{ s.nom }}</option>
                                                    {% endfor %}
                                                </optgroup>
                                            {% endfor %}

                    </select>
                    </form>
                    </li>

                    </ul>
                </div>
            </div>
            style=\"border-bottom: 0.5px solid rgba(222, 222, 222, 0.6);min-height: 30px;\"
                    #}

                    <div class=\"col-lg-11 col-sm-10 col-xs-12 col-md-10  \">
                        <div class=\"pull-left\">
                            <ul class=\"userMenu\">
                                <li>
                                    <a class=\"hidden-xs \" href=\"{{ path('homepage_frontend') }}\">
                                        <span class=\"hidden-xs titre_7_menu\">{% if app.session.get(\"pays\") %}{{ app.session.get(\"pays\").webSiteTitle }}{% endif %}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class=\"pull-right\">

                            <ul class=\"userMenu\">
                                <li class=\"dropdown dropdown_station\" style=\"padding-top: -1px\">
                                    <a {% if station %} href=\"{{ path('choosestation') }}\" {% endif %}   style=\"text-transform:none;background: -webkit-linear-gradient(left, rgba(239, 111, 0), rgba(237, 0, 0)) !important;
                                               -webkit-background-clip: text !important;
                                                 -webkit-text-fill-color: transparent !important;\">
                                        <i class=\"fa fa-map-marker\"></i>&nbsp;{% if station %}{{ station.nom }}{% else %} {{ \"Select Station\" | trans({}, 'messages') }}{% endif %} <i class=\"fa  fa-sort-desc\"></i>
                                    </a>
                                    {#
                                      <a href=\"#\" onclick=\"showSelectStation()\" style=\"text-transform:none;background: -webkit-linear-gradient(left, rgba(239, 111, 0), rgba(237, 0, 0)) !important;
                                                   -webkit-background-clip: text !important;
                                                     -webkit-text-fill-color: transparent !important;\"> <i
                                                class=\"fa fa-map-marker\"></i>&nbsp;{% if station %}{{ station.nom }}{% else %} {{ \"Select Station\" | trans }}{% endif %}
                                    </a>
                                    #}
                                </li>



                                <li class=\"dropdown hasUserMenu\">

                                    <a style=\"text-transform: none !important;\" class=\"dropdown-toggle\"
                                       data-toggle=\"dropdown\" aria-expanded=\"true\">

                                        <span class=\"hidden-xs\"> {{ \"Contact\" | trans({}, 'messages') }} </span>
                                        <i class=\"fa fa-info-circle hide visible-xs \"></i>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <br>
                                        {% if station and station.adresse %}
                                            <li>
                                                <a href=\"\"><i class=\"fa fa-map-marker\"></i>
                                                    <span class=\"hidden-xs txtnbrr \"> {{ \"Adresse\" | trans({}, 'messages') }}: </span> {{ station.adresse }}
                                                </a>
                                            </li>
                                        {% endif %}
                                        {% if station and station.gerant %}
                                            <li><a href=\"https://mail.google.com/mail/?view=cm&fs=1&tf=1&to={{ station.gerant.email }}\" target=\"_blank\" ><i class=\"fa fa-envelope\"></i>
                                                    <span class=\"hidden-xs\"> {{ \"Email\" | trans({}, 'messages') }}: </span>
                                                    {{ station.gerant.email }}</a>
                                            </li>
                                        {% endif %}
                                        {% if  station and station.tel %}
                                            <li><a href=\"\"><i class=\"fa fa-phone\"></i>
                                                    <span class=\"hidden-xs\"> {{ \"Téléphone\" | trans({}, 'messages') }}: </span>
                                                    {{ station.tel }}</a></li>
                                        {% endif %}
                                        <br>
                                    </ul>
                                </li>

                                {% if  app.user %}
                                    <li><a style=\"text-transform: none !important;\" href=\"{{ path(\"compte\") }}\">
                                            <span class=\"hidden-xs\"> {{ \"Mon Compte\" | trans({}, 'messages') }} </span>
                                            <i class=\"glyphicon glyphicon-user hide visible-xs \"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a style=\"text-transform: none !important;\" href=\"{{ path(\"logout_user\") }}\">
                                            <span class=\"hidden-xs\">{{ \"Déconnexion\" | trans({}, 'messages') }}</span>
                                            <i class=\"glyphicon glyphicon-log-out hide visible-xs \"></i>
                                        </a>
                                    </li>
                                {% else %}
                                    <li><a style=\"text-transform: none !important;\"
                                           href=\"{{ path('fos_user_security_login') }}\">
                                            <span class=\"hidden-xs\">{{ \"Se Connecter\"| trans({}, 'messages') }} </span>
                                            <i class=\"glyphicon glyphicon-user hide visible-xs \"></i>
                                        </a>
                                    </li>
                                    <li class=\"hidden-xs\">
                                        <a style=\"text-transform: none !important;\"
                                           href=\"{{ path('fos_user_registration_register') }}\">{{ \"Créer nouveau compte\"|trans({}, 'messages') }}</a>
                                    </li>
                                {% endif %}
                                <li class=\"hidden-xs\">
                                    <a style=\"color: #ED0000;text-transform: none !important;\" {% if app.session.get(\"pays\") %}
                                        href=\"{{ app.session.get(\"pays\").webSiteUrlFiliale }}\"{% endif %} target=\"_blank\">{% if app.session.get(\"pays\") %}{{ app.session.get(\"pays\").webSiteNameFiliale }}{% endif %}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.navbar-top-->
        <hr class=\"hidden-xs  line\" style=\"margin-right: 30px\">
        <hr class=\"hidden-lg hidden-sm hidden-md linexs\">

        <div class=\"container\">
            <div class=\"navbar-header\">

                <a href=\"{{ path('homepage_frontend') }}\" class=\"hidden-lg hidden-sm hidden-md\">
                    <img src=\"{{ asset('assets/img/logo_totalenergies_mobile.png') }}\" alt=\"logo total\"
                         style=\"  width: 64px;\">
                </a>
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"
                        style=\"background: #ffffff !important;float:right;margin-right: 10px;\"><span
                            class=\"sr-only\"> Toggle navigation </span> <span class=\"icon-bar\"> </span> <span
                            class=\"icon-bar\">
                </span> <span class=\"icon-bar\"> </span>
                </button>
                <a href=\"{{ path(\"panier\") }}\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-cart\"><i
                                class=\"fa fa-shopping-cart colorWhite \"> </i> <span
                                class=\"cartRespons colorWhite\">({{ panier|length }})

                        </span>
                    </button>
                </a>

                {% if  app.user %}
                    <a href=\"{{ path(\"favoris\") }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">

                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-cart\"><i
                                    class=\"glyphicon glyphicon-heart colorWhite \"  > </i> <span
                                    class=\"cartRespons colorWhite\">({{ favoris|length }})

                        </span>
                        </button>
                    </a>
                {% endif %}


                <!-- this part for mobile -->
                <div class=\"search-box pull-right hidden-lg hidden-md hidden-sm\">
                    <div class=\"input-group\">
                        <button class=\"btn  getFullSearch\" type=\"button\" style=\"background-color: #ffffff;color: #545252;\">
                            <i class=\"fa fa-search\"> </i>
                        </button>
                    </div>
                    <!-- /input-group -->
                </div>


            </div>


            <!--/.navbar-cart-->
            <li class=\"navbar-collapse collapse\">

                <ul class=\"nav navbar-nav\">

                    {#
                                       {% if categories[\"food\"]|length > 0 %}
                                           <li class=\"dropdown megamenu-fullwidth\">
                                              if category equal 1 then

                                                   {% if categories[\"food\"]|length == 1 &  %}

                                                   <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                                                       {{ \"Alimentaire\" | trans }}
                                                       <b class=\"caret\"> </b> </a>
                                                   <ul class=\"dropdown-menu\">
                                                       <li class=\"megamenu-content\">
                                                           <!-- megamenu-content -->

                                                           {% for key,category in categories[\"food\"] %}
                                                               <div class=\"col-lg-{{ (12 /categories[\"food\"]|length)|round }}  col-sm-{{ (12 /categories[\"food\"]|length)|round }} col-md-{{ (12 /categories[\"food\"]|length)|round }}\">
                                                                   <ul class=\" \">
                                                                       <li>
                                                                           <a href=\"{{ path(\"list_produit\") }}?categorie_id={{ category.id }}\">
                                                                               <p>
                                                                                   <strong>

                                                                                       {% if app.request.getLocale()  == 'en' %}{{ category.nomEn }}{% else %}{{ category.nom }}{% endif %}


                                                                                   </strong></p>
                                                                           </a>
                                                                       </li>
                                                                       {% for sub_category in category.sousCategories %}
                                                                           <li>
                                                                               <a href=\"{{ path(\"list_produit\") }}?sub_categorie_id={{ sub_category.id }}\">


                                                                                   {% if app.request.getLocale()  == 'en' %}{{ sub_category.nomEn }}{% else %} {{ sub_category.nom }}{% endif %}

                                                                               </a>
                                                                           </li>
                                                                       {% endfor %}

                                                                   </ul>
                                                               </div>
                                                           {% endfor %}

                                                       </li>
                                                   </ul>
                                               {% else %}

                                                   <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                                                       {{ \"Alimentaire\" | trans }}
                                                       <b class=\"caret\"> </b> </a>
                                                   <ul class=\"dropdown-menu\">
                                                       <li class=\"megamenu-content\">
                                                           <!-- megamenu-content -->

                                                           {% for key,category in categories[\"food\"] %}
                                                               <div class=\"col-lg-{{ (12 /categories[\"food\"]|length)|round }}  col-sm-{{ (12 /categories[\"food\"]|length)|round }} col-md-{{ (12 /categories[\"food\"]|length)|round }}\">
                                                                   <ul class=\" \">
                                                                       <li>
                                                                           <a href=\"{{ path(\"list_produit\") }}?categorie_id={{ category.id }}\">
                                                                               <p>
                                                                                   <strong>

                                                                                       {% if app.request.getLocale()  == 'en' %}{{ category.nomEn }}{% else %}{{ category.nom }}{% endif %}


                                                                                   </strong></p>
                                                                           </a>
                                                                       </li>
                                                                       {% for sub_category in category.sousCategories %}
                                                                           <li>
                                                                               <a href=\"{{ path(\"list_produit\") }}?sub_categorie_id={{ sub_category.id }}\">


                                                                                   {% if app.request.getLocale()  == 'en' %}{{ sub_category.nomEn }}{% else %} {{ sub_category.nom }}{% endif %}

                                                                               </a>
                                                                           </li>
                                                                       {% endfor %}

                                                                   </ul>
                                                               </div>
                                                           {% endfor %}

                                                       </li>
                                                   </ul>
                                               {% endif %}



                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                                {{ \"Alimentaire\" | trans }}
                                <b class=\"caret\"> </b> </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"megamenu-content\">
                                    <!-- megamenu-content -->

                                    {% for key,category in categories[\"food\"] %}
                                        <div class=\"col-lg-{{ (12 /categories[\"food\"]|length)|round }}  col-sm-{{ (12 /categories[\"food\"]|length)|round }} col-md-{{ (12 /categories[\"food\"]|length)|round }}\">
                                            <ul class=\" \">
                                                <li>
                                                    <a href=\"{{ path(\"list_produit\") }}?categorie_id={{ category.id }}\">
                                                        <p>
                                                            <strong>

                                                                {% if app.request.getLocale()  == 'en' %}{{ category.nomEn }}{% else %}{{ category.nom }}{% endif %}


                                                            </strong></p>
                                                    </a>
                                                </li>
                                                {% for sub_category in category.sousCategories %}
                                                    <li>
                                                        <a href=\"{{ path(\"list_produit\") }}?sub_categorie_id={{ sub_category.id }}\">


                                                            {% if app.request.getLocale()  == 'en' %}{{ sub_category.nomEn }}{% else %} {{ sub_category.nom }}{% endif %}

                                                        </a>
                                                    </li>
                                                {% endfor %}

                                            </ul>
                                        </div>
                                    {% endfor %}

                                </li>
                            </ul>

                        </li>
                    {% endif %}
                    {% if categories[\"auto\"]|length > 0 %}
                        <li class=\"dropdown megamenu-fullwidth \">
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                                {{ \"Produits Auto\" | trans }}
                                <b class=\"caret\"> </b> </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"megamenu-content\">
                                    <!-- megamenu-content -->
                                    {% for key,category in categories[\"auto\"] %}

                                        <div class=\"col-lg-{{ (12 /categories[\"auto\"]|length)|round }}  col-sm-{{ (12 /categories[\"auto\"]|length)|round }} col-md-{{ (12 /categories[\"auto\"]|length)|round }}\">
                                            <ul class=\" \">
                                                <li>
                                                    <a href=\"{{ path(\"list_produit\") }}?categorie_id={{ category.id }}\">
                                                        <p>
                                                            <strong>

                                                                {% if app.request.getLocale()  == 'en' %}{{ category.nomEn }}{% else %} {{ category.nom }}{% endif %}

                                                            </strong></p>
                                                    </a>
                                                </li>
                                                {% for sub_category in category.sousCategories %}
                                                    <li>
                                                        <a href=\"{{ path(\"list_produit\") }}?sub_categorie_id={{ sub_category.id }}\">
                                                            {% if app.request.getLocale()  == 'en' %}{{ sub_category.nomEn }}{% else %} {{ sub_category.nom }}{% endif %}

                                                        </a>
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    {% endfor %}
                                </li>
                            </ul>

                        </li>
                    {% endif %}
                    {% if categories[\"clothing\"]|length > 0 %}
                        <li class=\"dropdown megamenu-fullwidth \">
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                                {{ \"Vetements\" | trans }}
                                <b class=\"caret\"> </b> </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"megamenu-content\">
                                    <!-- megamenu-content -->
                                    {% for key,category in categories[\"clothing\"] %}
                                        <ul class=
                                            \"col-lg-{{ (12 /categories[\"clothing\"]|length)|round }}
                                        col-sm-{{ (12 /categories[\"clothing\"]|length)|round }}
                                        col-md-{{ (12 /categories[\"clothing\"]|length)|round }}\">
                                            <li>
                                                <a href=\"{{ path(\"list_produit\") }}?categorie_id={{ category.id }}\">
                                                    <p>
                                                        <strong>
                                                            {% if app.request.getLocale()  == 'en' %}{{ category.nomEn }}{% else %} {{ category.nom }}{% endif %}

                                                        </strong></p>
                                                </a>
                                            </li>
                                            {% for sub_category in category.sousCategories %}
                                                <li>
                                                    <a href=\"{{ path(\"list_produit\") }}?sub_categorie_id={{ sub_category.id }}\">
                                                        {% if app.request.getLocale()  == 'en' %}{{ sub_category.nomEn }}{% else %} {{ sub_category.nom }}{% endif %}

                                                    </a>
                                                </li>
                                            {% endfor %}
                                        </ul>

                                    {% endfor %}
                                </li>
                            </ul>

                        </li>
                    {% endif %}
 #}

                    {#  {% for key,category in categories[\"other\"] %} #}
                    {% for key,category in categories %}
                        <li class=\"dropdown megamenu-30width \">
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\"
                               href=\"{{ path(\"list_produit\") }}?categorie_id={{ category.id }}\">
                                {% if app.session.get(\"pays\").FrontLanguage  == 'en' or app.session.get(\"pays\").FrontLanguage  == 'EN' %}{{ category.nomEn }}{% else %} {{ category.nom }}{% endif %}

                                <b class=\"caret\"> </b>

                            </a>
                            <ul class=\"dropdown-menu\"  style=\"box-shadow: 3px 3px 3px lightgrey;\">
                                <li class=\"megamenu-content \">
                                    <ul class=\"col-lg-12  col-sm-12 col-md-12 unstyled noMarginLeft newCollectionUl\">

                                        <li style=\"margin-top:16px \">
                                            <a href=\"{{ path(\"list_produit\") }}?categorie_id={{ category.id }}\">
                                                {{  \"all\" | trans }}
                                                {% if app.session.get(\"pays\").FrontLanguage  == 'en' or app.session.get(\"pays\").FrontLanguage  == 'EN' %}{{ category.nomEn }}{% else %} {{ category.nom }}{% endif %}

                                            </a>
                                        </li>
                                        {% for sub_category in category.sousCategories %}
                                            <li style=\"margin-top:16px \">
                                                <a href=\"{{ path(\"list_produit\") }}?sub_categorie_id={{ sub_category.id }}\">
                                                    {% if  app.session.get(\"pays\").FrontLanguage  == 'en' or app.session.get(\"pays\").FrontLanguage  == 'EN' %}{{ sub_category.nomEn }}{% else %} {{ sub_category.nom }}{% endif %}

                                                </a>
                                            </li>
                                        {% endfor %}

                                    </ul>

                                    {% if category.id == 8  and false %}
                                        <ul class=\"col-lg-9  col-sm-3 col-md-3  col-xs-4\">
                                            <li><a class=\"newProductMenuBlock\" href=\"product-details.html\"> <img
                                                            class=\"img-responsive\"
                                                            src=\"https://tn.jumia.is/cms/campaign-TN/2020/w15/W15_Protection_SX_TN_020420.jpg\"
                                                            alt=\"product\" style=\"width: 100%; max-height: 300px;\"><span
                                                            class=\"ProductMenuCaption\"> <i
                                                                class=\"fa fa-caret-right\"> </i> {{ \"Promotion\"|trans }}
                                        </span>
                                                </a></li>
                                        </ul>
                                    {% endif %}
                                </li>
                            </ul>
                        </li>
                    {% endfor %}
                </ul>

                <!--

           <div class=\"dropdown cartMenu pull-right hidden-lg hidden-md hidden-sm\">
                <div  class=\"input-group\" style=\"margin-top: 5px\">

                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"javascript:void(0)\" data-animation=\"scale-up\"
                   aria-expanded=\"false\" role=\"button\">
                    {% if app.request.getLocale()  == 'en' %}EN{% elseif app.request.getLocale()  == 'fr' %}FR{% endif %}
                </a>
                <div class=\"dropdown-menu \" >
                    <a class=\"dropdown-item\" style=\"font-family: Roboto-Regular, sans-serif\" href=\"{{ path('fr_en') }}?to=en\" role=\"menuitem\">
                        <span class=\"flag-icon flag-icon-gb\"></span>EN</a><br>
                    <a class=\"dropdown-item\" href=\"{{ path('fr_en') }}?to=fr\" role=\"menuitem\">
                        <span class=\"flag-icon flag-icon-fr\"></span>FR</a>
                </div>
                </div>
            </div>
-->
                <!--- this part will be hidden for mobile version -->
                <div class=\"nav navbar-nav navbar-right hidden-xs\">
                    <ul class=\"nav navbar-nav \" style=\"float: right\">

                        <li class=\"dropdown \">
                            {% if  app.session.get(\"pays\") %}

                                {% if  app.session.get(\"pays\").code ==\"mg\" %}
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"javascript:void(0)\"
                                       aria-expanded=\"false\" role=\"button\"  >
                                        <span style=\"border: 1px solid grey;border-radius: 15%;padding-top: -1px\" class=\"flag-icon flag-icon-{% if  app.session.get(\"pays\") %}{{ app.session.get(\"pays\").code }}{% endif %}\"></span>
                                    </a>
                                {% else %}
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"javascript:void(0)\"
                                       aria-expanded=\"false\" role=\"button\"  >
                                        <span class=\"flag-icon flag-icon-{% if  app.session.get(\"pays\") %}{{ app.session.get(\"pays\").code }}{% endif %}\"></span>

                                    </a>
                                {% endif %}

                            {% endif %}

                            <!--
                        <ul class=\"dropdown-menu\" style=\"margin-top: -10px\">
                            {% for p in pays %}
                                <li class=\"megamenu-content\">
                                    <ul class=\" \">
                                        <li>


                                               <a class=\"dropdown-item\" style=\"font-family: Roboto-Regular, sans-serif\"
                                               href=\"{{ path(\"homepage_frontend\") }}?pays={{ p.code }}\" role=\"menuitem\">
                                                <span class=\"flag-icon flag-icon-{{ p.code }}\"></span>{{ p.nom }}</a>



                                        </li>

                                    </ul>

                                </li>
                            {% endfor %}

                        </ul>

                        -->
                        </li>

                    </ul>


                    <div class=\"search-box\" style=\"border-right: 1px solid white;float: left;\">
                        <div class=\"input-group\">
                            <button class=\"btn btn-nobg getFullSearch\" type=\"button\"><i class=\"fa fa-search\"> </i></button>
                        </div>
                        <!-- /input-group -->
                    </div>
                    {% if  app.user %}
                        <div class=\"dropdown cartMenu\">
                            <a href=\"{{ path(\"favoris\") }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"glyphicon glyphicon-heart  hidden-lg\" style=\"color: #df0c36\"></i>

                                <span class=\"cartRespons\">
                            <span class=\"nb-article\">{{ favoris|length }}</span>
                             <i class=\"glyphicon glyphicon-heart hide visible-xs\" style=\"color: #df0c36\"></i>
                            {{ \"Favoris\"|trans }}
                        </span> <b class=\"caret\"> </b>
                            </a>

                            <div class=\"dropdown-menu col-lg-4 col-xs-12 col-md-4\">
                                <div class=\"w100 miniCartTable scroll-pane\" style=\"overflow-y: auto;\">
                                    <table>
                                        <tbody>
                                        {% for key,fav in favoris %}
                                            <tr class=\"CartProduct\" id='fav{{fav.produit.id}}'>
                                                <td style=\"width:40%\" class=\"CartProductThumb\">
                                                    <div>
                                                        <img style=\"  background-repeat: no-repeat;  background-size: contain\" alt=\"{{ fav.produit.nom }}\"
                                                             data-original=\"/uploads/produits/{{ fav.produit.image }}\"
                                                             src=\"{% if fav.produit.image and fav.produit.image != \"\" %}/uploads/produits/{{ fav.produit.image }}
                                                         {% else %}{{ asset('/assets/img/default_t_e.jpg') }}{% endif %}\">
                                                    </div>
                                                </td>
                                                <td style=\"width:30%\">
                                                    <div class=\"CartDescription\">
                                                        <h4>
                                                            <a style=\"font-size: 13px\" href=\"{{ path('list_produit',{'keyword':fav.produit.nom}) }}\" >{{fav.produit.nom}}</a>
                                                        </h4>
                                                        <div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t     <span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ formated_price(fav.produit.prix ,app.session.get('pays')) }}

\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style=\"width:30%\" class=\"delete\">
                                                    <a title=\"Delete\" onclick=\"deletefavoris({{ fav.produit.id }},{{key}})\">
                                                        <i class=\"glyphicon glyphicon-trash fa-2x\"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                                <!--/.miniCartTable-->


                                <!--/.miniCartFooter-->

                            </div>
                            <!--/.dropdown-menu-->
                        </div>

                    {% endif %}






                    <div class=\"dropdown cartMenu\">
                        <a href=\"{{ path(\"panier\") }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-shopping-cart\"> </i>
                            <span class=\"cartRespons\">
                            <span class=\"nb-article\">{{ panier|length }}</span>
                            {{ \"Article\"|trans }}{% if panier|length != 1 %}s{% endif %}
                            | <span class=\"total_price_cart_empty\">0</span> {{ app.session.get(\"pays\").devise }}
                        </span> <b class=\"caret\"> </b>
                        </a>

                        <div class=\"dropdown-menu col-lg-4 col-xs-12 col-md-4\">
                            <div class=\"w100 miniCartTable scroll-pane\" style=\"overflow-y: auto;\">
                                <table>
                                    <tbody>
                                    {% set total_price = 0 %}
                                    {% for article in articles %}
                                        {% set nb_article = panier[article.id] %}
                                        <tr class=\"miniCartProduct product-{{ article.id }}\">
                                            <td style=\"width:20%\" class=\"miniCartProductThumb\">
                                                <div><a href=\"\"> <img class=\"lazy\"
                                                                      alt=\"{{ article.nom }}\"
                                                                      data-original=\"/uploads/produits/{{ article.image }}\"
                                                                      src=\"{% if  article.image  and article.image != \"\" %}/uploads/produits/{{ article.image }}  {% elseif article.SousCategorie  and article.SousCategorie.image  and article.SousCategorie.image != \"\" %}/uploads/produits/{{ article.SousCategorie.image }}{% else %}{{ asset('/assets/img/default_t_e.jpg') }}{% endif %}\">
                                                    </a>
                                                </div>
                                            </td>
                                            <td style=\"width:40%\">
                                                <div class=\"miniCartDescription\">
                                                    <h4>
                                                        <a href=\"\">{{ article.nom }} </a>
                                                    </h4>
                                                    <div class=\"price\">
                                                    <span style=\"color:#ED0000; font-size: 14px\">
                                                        {{ formated_price(article.finalPrice[\"prix\"],app.session.get(\"pays\")) }}
                                                    </span>
                                                        {% if article.finalPrice[\"is_promo\"] and article.numProduitPromo == 1 %}
                                                            <span class=\"old-price\">
                                                            {{ formated_price(article.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }}
                                                    </span>

                                                        {% elseif article.finalPrice[\"is_promo\"] and article.prixPromo and article.prixPromo > 0 %}
                                                            <span class=\"old-price\">
                                                            {{ formated_price(article.finalPrice[\"old_prix\"],app.session.get(\"pays\")) }}
                                                        </span>
                                                        {% endif %}

                                                    </div>
                                                </div>
                                            </td>
                                            <td style=\"width:10%\" class=\"miniCartQuantity\"><a> X {{ nb_article }} </a>
                                            </td>
                                            <td style=\"width:15%\" class=\"miniCartSubtotal\">
                                            <span>
                                            {{ formated_price(article.getTotalPrice(nb_article)[\"prix\"],app.session.get(\"pays\")) }}
                                            </span>
                                                {% if article.finalPrice[\"is_promo\"] and nb_article >=   article.numProduitPromo %}
                                                    <span class=\"old-price\">
                                                     {{ formated_price(article.getTotalPrice(nb_article)[\"old_prix\"],app.session.get(\"pays\")) }}
                                            </span>
                                                {% endif %}
                                            </td>
                                            {% set total_price = total_price +  article.getTotalPrice(nb_article)[\"prix\"] %}
                                            <td style=\"width:5%\" class=\"delete\"
                                                onclick=\"deleteArticle({{ article.id }},{{ nb_article * article.prix }} )\">
                                                <a style=\"font-size:21px !important;font-family: sans-serif;color: #374649;margin-left: 5px \">
                                                    <i class=\"glyphicon glyphicon-trash fa-xs\"></i> </a>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                            <!--/.miniCartTable-->

                            <div class=\"miniCartFooter text-right\">
                                {% if coupon and coupon != '' %}

                                    {% if coupon.type == 1 %}
                                        {% set total_price = total_price - coupon.montant %}
                                    {% elseif coupon.type == 2 %}
                                        {% set total_price = total_price / 100 *(100-coupon.pourcentage) %}
                                    {% endif %}
                                {% endif %}
                                <h3 class=\"text-right subtotal\">{{ \"Total\" | trans }}: <span class=\"total_price_cart\">
                                     {{ formated_price(total_price,app.session.get(\"pays\"),false) }}
                                </span> {{ app.session.get(\"pays\").devise }}
                                </h3>
                                <a class=\"btn btnvoirpanier\" href=\"{{ path(\"panier\") }}\"> {{ \"Voir panier\"|trans }}</a>
                                <a class=\"btn btnvoirpayer\" {% if panier|length > 0 and  app.user  %}href=\"{{ path(\"modereception\") }}\"
                                   {% else %}href=\"{{ path(\"panier\") }}\" {% endif %}> {{ \"Commander\"|trans }} </a>
                            </div>
                            <!--/.miniCartFooter-->

                        </div>
                        <!--/.dropdown-menu-->
                    </div>
                    <!--/.cartMenu-->

                    <!--/.language   -->


                    <!--/.language-->
                </div>
                <!--/.navbar-nav hidden-xs-->

            </li>
            <!--/.nav-collapse -->


        </div>
        <div class=\"search-full text-right\" style=\"\">
            <a class=\"pull-right search-close\"> <i class=\" fa fa-times-circle\"> </i> </a>
            <form action=\"{{ path(\"list_produit\") }}\" method=\"get\">
                <div class=\"searchInputBox pull-right\">
                    <input type=\"search\" data-searchurl=\"keyword?=\" name=\"keyword\" placeholder={{ \"Rechercher\"|trans }}
                    class=\"search-input\">
                    <button class=\"btn-nobg search-btn\" type=\"submit\"><span class=\"description\"></span></button>
                </div>
            </form>

        </div>

        <div hidden style=\"height: 6px;background: linear-gradient(90deg,#fff,#fff 37.17%,#c5c6c7);\"></div>

    </div>



{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/flag-icon.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/stflagiconcss/css/flag-icon.min.css') }}\" />
{% endblock %}

", "@Frontend/Blocks/navbar.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\Blocks\\navbar.html.twig");
    }
}
