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

/* BackendBundle:layout:menubar.html.twig */
class __TwigTemplate_66dd6bd0a84789a0bc8dd80ed46098dd29e9ddc1a9656cb3ecb817d6e953f8f4 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:layout:menubar.html.twig"));

        // line 1
        echo "<div class=\"site-menubar\">
    <div class=\"site-menubar-body\">
        <div>
            <div>
                <ul class=\"site-menu\" data-plugin=\"menu\">
                    ";
        // line 6
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "hasRole", [0 => "ROLE_SUPER_ADMIN"], "method")) {
            // line 7
            echo "                    <li class=\"site-menu-category\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin"), "html", null, true);
            echo "</li>
                    <li class=\"site-menu-item has-sub \">
                        <a class=\"animsition-link\" href=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pays_index");
            echo "\">
                            <i class=\"site-menu-icon icon md-format-list-bulleted\" aria-hidden=\"true\"></i>
                            <span class=\"site-menu-title\">";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Filiales"), "html", null, true);
            echo "</span>
                        </a>
                    </li>
                    <li class=\"site-menu-item has-sub\">
                        <a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
            echo "\">
                            <i class=\"site-menu-icon icon md-accounts-alt\" aria-hidden=\"true\"></i>
                            <span class=\"site-menu-title\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Managers"), "html", null, true);
            echo "</span>
                        </a>
                    </li>

                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_admin_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-format-list-bulleted\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Categories"), "html", null, true);
            echo "</span>
                            </a>
                        </li>

                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_admin_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-view-list\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Sous Categories"), "html", null, true);
            echo "</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_admin_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Produits"), "html", null, true);
            echo "</span>
                            </a>
                        </li>



                   ";
        }
        // line 44
        echo "                    ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "hasRole", [0 => "ROLE_GESTIONNAIRE"], "method")) {
            // line 45
            echo "                        <li class=\"site-menu-category\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Administrateur"), "html", null, true);
            echo " </li>


                        <li class=\"site-menu-item active\">
                            <a class=\"animsition-link\" href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-chart\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dashboard"), "html", null, true);
            echo "</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub \">
                            <a class=\"animsition-link\" href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_country");
            echo "\">
                                <i class=\"site-menu-icon icon md-format-list-bulleted\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit_filiale"), "html", null, true);
            echo "</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_gestion_toactivate_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catalogue"), "html", null, true);
            echo "</span>
                            </a>
                        </li>

                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-format-list-bulleted\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Categories"), "html", null, true);
            echo "</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-view-list\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Sous Categories"), "html", null, true);
            echo "</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_gestion_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Produits"), "html", null, true);
            echo "</span>
                            </a>
                        </li>


                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 88
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-pin\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Zones"), "html", null, true);
            echo "</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("station_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-pin\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Stations"), "html", null, true);
            echo "</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gerant_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-account\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Gérants"), "html", null, true);
            echo "</span>
                            </a>
                        </li>

                        <li class=\"site-menu-item has-sub\" hidden>
                            <a href=\"";
            // line 107
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Validation Des Produits"), "html", null, true);
            echo "</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 113
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Coupons"), "html", null, true);
            echo "</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 119
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-money\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Liste Des Commandes"), "html", null, true);
            echo "</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 125
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-accounts-alt\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Liste Des Clients"), "html", null, true);
            echo "</span>
                            </a>
                        </li>


                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 133
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("parametre_sms");
            echo "\">
                                <i class=\"site-menu-icon icon md-smartphone-setting\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">SMS</span>
                            </a>
                        </li>

                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 140
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("parametre_mail");
            echo "\">
                                <i class=\"site-menu-icon icon md-account-box-mail\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">Mail</span>
                            </a>
                        </li>
                    ";
        }
        // line 146
        echo "                    ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "hasRole", [0 => "ROLE_GERANT"], "method")) {
            // line 147
            echo "                        <li class=\"site-menu-category\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestionnaire Station"), "html", null, true);
            echo "</li>
                        <li class=\"site-menu-item active\">
                            <a class=\"animsition-link\" href=\"";
            // line 149
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard_gerant_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-chart\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dashboard"), "html", null, true);
            echo "</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 155
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_toactivate_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catalogue"), "html", null, true);
            echo "</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 161
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_gerant_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Produits"), "html", null, true);
            echo "</span>
                            </a>
                        </li>

                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 168
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_gerant_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-money\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Liste Des Commandes"), "html", null, true);
            echo "</span>
                            </a>
                        </li>


                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 176
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_gerant_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-accounts-alt\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Liste Des Clients"), "html", null, true);
            echo "</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"";
            // line 182
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horaire_gerant_index");
            echo "\">
                                <i class=\"site-menu-icon icon md-settings\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Paramètrage"), "html", null, true);
            echo "</span>
                            </a>
                        </li>



                    ";
        }
        // line 191
        echo "                </ul>
        </div>
    </div>

</div>
</div>

<span style=\"font-size:30px;cursor:pointer;color: black\" onclick=\"openNav()\">&#9776; </span>



<div id=\"mySidenav\" class=\"sidenav\">


    <ul  data-plugin=\"menu\">

        <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">
            <i class=\"site-menu-icon icon md-close\" aria-hidden=\"true\"></i>
        </a>

        ";
        // line 211
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "hasRole", [0 => "ROLE_SUPER_ADMIN"], "method")) {
            // line 212
            echo "            <a class=\"animsition-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pays_index");
            echo "\">
                <i class=\"site-menu-icon icon md-format-list-bulleted\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"";
            // line 215
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
            echo "\">
                <i class=\"site-menu-icon icon md-accounts-alt\" aria-hidden=\"true\"></i>
            </a>

            <a href=\"";
            // line 219
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_admin_index");
            echo "\">
                <i class=\"site-menu-icon icon md-format-list-bulleted\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"";
            // line 222
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_admin_index");
            echo "\">
                <i class=\"site-menu-icon icon md-view-list\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"";
            // line 225
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_admin_index");
            echo "\">
                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
            </a>

            <a  href=\"";
            // line 229
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_logout");
            echo "\"  >
                <i class=\"icon md-power\" aria-hidden=\"true\"></i>
                </a>

        ";
        }
        // line 234
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "hasRole", [0 => "ROLE_GESTIONNAIRE"], "method")) {
            // line 235
            echo "

            <a class=\"animsition-link\" href=\"";
            // line 237
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard_index");
            echo "\">
                <i class=\"site-menu-icon icon md-chart\" aria-hidden=\"true\"></i>
            </a>

            <a class=\"animsition-link\" href=\"";
            // line 241
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_country");
            echo "\">
                <i class=\"site-menu-icon icon md-format-list-bulleted\" aria-hidden=\"true\"></i>
            </a>

            <a href=\"";
            // line 245
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_gestion_toactivate_index");
            echo "\">
                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
            </a>

            <a href=\"";
            // line 249
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
            echo "\">
                <i class=\"site-menu-icon icon md-format-list-bulleted\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"";
            // line 252
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_index");
            echo "\">
                <i class=\"site-menu-icon icon md-view-list\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"";
            // line 255
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_gestion_index");
            echo "\">
                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
            </a>


            <a href=\"";
            // line 260
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_index");
            echo "\">
                <i class=\"site-menu-icon icon md-pin\" aria-hidden=\"true\"></i>
            </a>

            <a href=\"";
            // line 264
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("station_index");
            echo "\">
                <i class=\"site-menu-icon icon md-pin\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"";
            // line 267
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gerant_index");
            echo "\">
                <i class=\"site-menu-icon icon md-account\" aria-hidden=\"true\"></i>
            </a>

            <li class=\"site-menu-item has-sub\" hidden>
                <a href=\"";
            // line 272
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_index");
            echo "\">
                    <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
                </a>
            </li>
            <a href=\"";
            // line 276
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_index");
            echo "\">
                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"";
            // line 279
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_index");
            echo "\">
                <i class=\"site-menu-icon icon md-money\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"";
            // line 282
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
            echo "\">
                <i class=\"site-menu-icon icon md-accounts-alt\" aria-hidden=\"true\"></i>
            </a>

            <a href=\"";
            // line 286
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("parametre_sms");
            echo "\">
                <i class=\"site-menu-icon icon md-smartphone-setting\" aria-hidden=\"true\"></i>
            </a>

            <a href=\"";
            // line 290
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("parametre_mail");
            echo "\">
                <i class=\"site-menu-icon icon md-account-box-mail\" aria-hidden=\"true\"></i>
            </a>


            <a  href=\"";
            // line 295
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_password");
            echo "\" >
                <i class=\"icon md-account\" aria-hidden=\"true\"></i>
                </a>
            <a  href=\"";
            // line 298
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_logout");
            echo "\"  >
                <i class=\"icon md-power\" aria-hidden=\"true\"></i>
            </a>
        ";
        }
        // line 302
        echo "
        ";
        // line 303
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "hasRole", [0 => "ROLE_GERANT"], "method")) {
            // line 304
            echo "            <a class=\"animsition-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard_gerant_index");
            echo "\">
                <i class=\"site-menu-icon icon md-chart\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"";
            // line 307
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_toactivate_index");
            echo "\">
                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"";
            // line 310
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_gerant_index");
            echo "\">
                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
            </a>

            <a href=\"";
            // line 314
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_gerant_index");
            echo "\">
                <i class=\"site-menu-icon icon md-money\" aria-hidden=\"true\"></i>
            </a>

            <a href=\"";
            // line 318
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_gerant_index");
            echo "\">
                <i class=\"site-menu-icon icon md-accounts-alt\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"";
            // line 321
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horaire_gerant_index");
            echo "\">
                <i class=\"site-menu-icon icon md-settings\" aria-hidden=\"true\"></i>
            </a>


            <a  href=\"";
            // line 326
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_password");
            echo "\" ><i class=\"icon md-account\" aria-hidden=\"true\"></i>
                ";
            // line 327
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
            echo "</a>

            <a  href=\"";
            // line 329
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_logout");
            echo "\" >
                <i class=\"icon md-power\" aria-hidden=\"true\"></i>
            </a>


        ";
        }
        // line 335
        echo "    </ul>
</div>


<style>

    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 3;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;

    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .sidenav .closebtn {
        position: relative;
        top: 0;
        right: 0;
        font-size: 25px;
        margin-left: 50px;
        height: 40px;
        width: 40px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
    }


</style>
<script>
    function openNav() {
        document.getElementById(\"mySidenav\").style.width = \"160px\";
    }

    function closeNav() {
        document.getElementById(\"mySidenav\").style.width = \"0\";
    }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:layout:menubar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  644 => 335,  635 => 329,  630 => 327,  626 => 326,  618 => 321,  612 => 318,  605 => 314,  598 => 310,  592 => 307,  585 => 304,  583 => 303,  580 => 302,  573 => 298,  567 => 295,  559 => 290,  552 => 286,  545 => 282,  539 => 279,  533 => 276,  526 => 272,  518 => 267,  512 => 264,  505 => 260,  497 => 255,  491 => 252,  485 => 249,  478 => 245,  471 => 241,  464 => 237,  460 => 235,  457 => 234,  449 => 229,  442 => 225,  436 => 222,  430 => 219,  423 => 215,  416 => 212,  414 => 211,  392 => 191,  382 => 184,  377 => 182,  370 => 178,  365 => 176,  356 => 170,  351 => 168,  343 => 163,  338 => 161,  331 => 157,  326 => 155,  319 => 151,  314 => 149,  308 => 147,  305 => 146,  296 => 140,  286 => 133,  277 => 127,  272 => 125,  265 => 121,  260 => 119,  253 => 115,  248 => 113,  241 => 109,  236 => 107,  228 => 102,  223 => 100,  216 => 96,  211 => 94,  204 => 90,  199 => 88,  190 => 82,  185 => 80,  178 => 76,  173 => 74,  166 => 70,  161 => 68,  153 => 63,  148 => 61,  141 => 57,  136 => 55,  129 => 51,  124 => 49,  116 => 45,  113 => 44,  103 => 37,  98 => 35,  91 => 31,  86 => 29,  78 => 24,  73 => 22,  65 => 17,  60 => 15,  53 => 11,  48 => 9,  42 => 7,  40 => 6,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"site-menubar\">
    <div class=\"site-menubar-body\">
        <div>
            <div>
                <ul class=\"site-menu\" data-plugin=\"menu\">
                    {% if app.user.hasRole(\"ROLE_SUPER_ADMIN\") %}
                    <li class=\"site-menu-category\">{{ \"Admin\"|trans }}</li>
                    <li class=\"site-menu-item has-sub \">
                        <a class=\"animsition-link\" href=\"{{ path('pays_index') }}\">
                            <i class=\"site-menu-icon icon md-format-list-bulleted\" aria-hidden=\"true\"></i>
                            <span class=\"site-menu-title\">{{ \"Gestion Des Filiales\"|trans }}</span>
                        </a>
                    </li>
                    <li class=\"site-menu-item has-sub\">
                        <a href=\"{{ path('user_index') }}\">
                            <i class=\"site-menu-icon icon md-accounts-alt\" aria-hidden=\"true\"></i>
                            <span class=\"site-menu-title\">{{ \"Gestion Des Managers\"|trans }}</span>
                        </a>
                    </li>

                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('categorie_admin_index') }}\">
                                <i class=\"site-menu-icon icon md-format-list-bulleted\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Gestion Des Categories\"|trans }}</span>
                            </a>
                        </li>

                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('sous_categorie_admin_index') }}\">
                                <i class=\"site-menu-icon icon md-view-list\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Gestion Des Sous Categories\"|trans }}</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('produit_admin_index') }}\">
                                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Gestion Des Produits\"|trans }}</span>
                            </a>
                        </li>



                   {% endif %}
                    {% if app.user.hasRole(\"ROLE_GESTIONNAIRE\") %}
                        <li class=\"site-menu-category\">{{ \"Administrateur\"|trans }} </li>


                        <li class=\"site-menu-item active\">
                            <a class=\"animsition-link\" href=\"{{ path('dashboard_index') }}\">
                                <i class=\"site-menu-icon icon md-chart\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Dashboard\"|trans }}</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub \">
                            <a class=\"animsition-link\" href=\"{{ path('edit_country') }}\">
                                <i class=\"site-menu-icon icon md-format-list-bulleted\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"edit_filiale\"|trans }}</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('produit_gestion_toactivate_index') }}\">
                                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Catalogue\"|trans }}</span>
                            </a>
                        </li>

                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('categorie_index') }}\">
                                <i class=\"site-menu-icon icon md-format-list-bulleted\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Gestion Des Categories\"|trans }}</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('sous_categorie_index') }}\">
                                <i class=\"site-menu-icon icon md-view-list\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Gestion Des Sous Categories\"|trans }}</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('produit_gestion_index') }}\">
                                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Gestion Des Produits\"|trans }}</span>
                            </a>
                        </li>


                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('zone_index') }}\">
                                <i class=\"site-menu-icon icon md-pin\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Gestion Des Zones\"|trans }}</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('station_index') }}\">
                                <i class=\"site-menu-icon icon md-pin\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Gestion Des Stations\"|trans }}</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('gerant_index') }}\">
                                <i class=\"site-menu-icon icon md-account\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{\"Gestion Des Gérants\"|trans}}</span>
                            </a>
                        </li>

                        <li class=\"site-menu-item has-sub\" hidden>
                            <a href=\"{{ path('produit_index') }}\">
                                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Validation Des Produits\"|trans }}</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('coupon_index') }}\">
                                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Gestion Des Coupons\"|trans }}</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('commande_index') }}\">
                                <i class=\"site-menu-icon icon md-money\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Liste Des Commandes\"|trans }}</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('client_index') }}\">
                                <i class=\"site-menu-icon icon md-accounts-alt\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Liste Des Clients\"|trans }}</span>
                            </a>
                        </li>


                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('parametre_sms') }}\">
                                <i class=\"site-menu-icon icon md-smartphone-setting\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">SMS</span>
                            </a>
                        </li>

                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('parametre_mail') }}\">
                                <i class=\"site-menu-icon icon md-account-box-mail\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">Mail</span>
                            </a>
                        </li>
                    {% endif %}
                    {% if app.user.hasRole(\"ROLE_GERANT\") %}
                        <li class=\"site-menu-category\">{{ \"Gestionnaire Station\"|trans }}</li>
                        <li class=\"site-menu-item active\">
                            <a class=\"animsition-link\" href=\"{{ path('dashboard_gerant_index') }}\">
                                <i class=\"site-menu-icon icon md-chart\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Dashboard\"|trans }}</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('produit_toactivate_index') }}\">
                                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Catalogue\"|trans }}</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('produit_gerant_index') }}\">
                                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Gestion Des Produits\"|trans }}</span>
                            </a>
                        </li>

                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('commande_gerant_index') }}\">
                                <i class=\"site-menu-icon icon md-money\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Liste Des Commandes\"|trans }}</span>
                            </a>
                        </li>


                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('client_gerant_index') }}\">
                                <i class=\"site-menu-icon icon md-accounts-alt\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{ \"Liste Des Clients\"|trans }}</span>
                            </a>
                        </li>
                        <li class=\"site-menu-item has-sub\">
                            <a href=\"{{ path('horaire_gerant_index') }}\">
                                <i class=\"site-menu-icon icon md-settings\" aria-hidden=\"true\"></i>
                                <span class=\"site-menu-title\">{{\"Paramètrage\"|trans}}</span>
                            </a>
                        </li>



                    {% endif %}
                </ul>
        </div>
    </div>

</div>
</div>

<span style=\"font-size:30px;cursor:pointer;color: black\" onclick=\"openNav()\">&#9776; </span>



<div id=\"mySidenav\" class=\"sidenav\">


    <ul  data-plugin=\"menu\">

        <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">
            <i class=\"site-menu-icon icon md-close\" aria-hidden=\"true\"></i>
        </a>

        {% if app.user.hasRole(\"ROLE_SUPER_ADMIN\") %}
            <a class=\"animsition-link\" href=\"{{ path('pays_index') }}\">
                <i class=\"site-menu-icon icon md-format-list-bulleted\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"{{ path('user_index') }}\">
                <i class=\"site-menu-icon icon md-accounts-alt\" aria-hidden=\"true\"></i>
            </a>

            <a href=\"{{ path('categorie_admin_index') }}\">
                <i class=\"site-menu-icon icon md-format-list-bulleted\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"{{ path('sous_categorie_admin_index') }}\">
                <i class=\"site-menu-icon icon md-view-list\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"{{ path('produit_admin_index') }}\">
                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
            </a>

            <a  href=\"{{ path('admin_logout') }}\"  >
                <i class=\"icon md-power\" aria-hidden=\"true\"></i>
                </a>

        {% endif %}
        {% if app.user.hasRole(\"ROLE_GESTIONNAIRE\") %}


            <a class=\"animsition-link\" href=\"{{ path('dashboard_index') }}\">
                <i class=\"site-menu-icon icon md-chart\" aria-hidden=\"true\"></i>
            </a>

            <a class=\"animsition-link\" href=\"{{ path('edit_country') }}\">
                <i class=\"site-menu-icon icon md-format-list-bulleted\" aria-hidden=\"true\"></i>
            </a>

            <a href=\"{{ path('produit_gestion_toactivate_index') }}\">
                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
            </a>

            <a href=\"{{ path('categorie_index') }}\">
                <i class=\"site-menu-icon icon md-format-list-bulleted\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"{{ path('sous_categorie_index') }}\">
                <i class=\"site-menu-icon icon md-view-list\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"{{ path('produit_gestion_index') }}\">
                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
            </a>


            <a href=\"{{ path('zone_index') }}\">
                <i class=\"site-menu-icon icon md-pin\" aria-hidden=\"true\"></i>
            </a>

            <a href=\"{{ path('station_index') }}\">
                <i class=\"site-menu-icon icon md-pin\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"{{ path('gerant_index') }}\">
                <i class=\"site-menu-icon icon md-account\" aria-hidden=\"true\"></i>
            </a>

            <li class=\"site-menu-item has-sub\" hidden>
                <a href=\"{{ path('produit_index') }}\">
                    <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
                </a>
            </li>
            <a href=\"{{ path('coupon_index') }}\">
                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"{{ path('commande_index') }}\">
                <i class=\"site-menu-icon icon md-money\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"{{ path('client_index') }}\">
                <i class=\"site-menu-icon icon md-accounts-alt\" aria-hidden=\"true\"></i>
            </a>

            <a href=\"{{ path('parametre_sms') }}\">
                <i class=\"site-menu-icon icon md-smartphone-setting\" aria-hidden=\"true\"></i>
            </a>

            <a href=\"{{ path('parametre_mail') }}\">
                <i class=\"site-menu-icon icon md-account-box-mail\" aria-hidden=\"true\"></i>
            </a>


            <a  href=\"{{ path('update_password') }}\" >
                <i class=\"icon md-account\" aria-hidden=\"true\"></i>
                </a>
            <a  href=\"{{ path('admin_logout') }}\"  >
                <i class=\"icon md-power\" aria-hidden=\"true\"></i>
            </a>
        {% endif %}

        {% if app.user.hasRole(\"ROLE_GERANT\") %}
            <a class=\"animsition-link\" href=\"{{ path('dashboard_gerant_index') }}\">
                <i class=\"site-menu-icon icon md-chart\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"{{ path('produit_toactivate_index') }}\">
                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"{{ path('produit_gerant_index') }}\">
                <i class=\"site-menu-icon icon md-card\" aria-hidden=\"true\"></i>
            </a>

            <a href=\"{{ path('commande_gerant_index') }}\">
                <i class=\"site-menu-icon icon md-money\" aria-hidden=\"true\"></i>
            </a>

            <a href=\"{{ path('client_gerant_index') }}\">
                <i class=\"site-menu-icon icon md-accounts-alt\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"{{ path('horaire_gerant_index') }}\">
                <i class=\"site-menu-icon icon md-settings\" aria-hidden=\"true\"></i>
            </a>


            <a  href=\"{{ path('update_password') }}\" ><i class=\"icon md-account\" aria-hidden=\"true\"></i>
                {{ \"profile\"|trans }}</a>

            <a  href=\"{{ path('admin_logout') }}\" >
                <i class=\"icon md-power\" aria-hidden=\"true\"></i>
            </a>


        {% endif %}
    </ul>
</div>


<style>

    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 3;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;

    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .sidenav .closebtn {
        position: relative;
        top: 0;
        right: 0;
        font-size: 25px;
        margin-left: 50px;
        height: 40px;
        width: 40px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
    }


</style>
<script>
    function openNav() {
        document.getElementById(\"mySidenav\").style.width = \"160px\";
    }

    function closeNav() {
        document.getElementById(\"mySidenav\").style.width = \"0\";
    }
</script>
", "BackendBundle:layout:menubar.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/layout/menubar.html.twig");
    }
}
