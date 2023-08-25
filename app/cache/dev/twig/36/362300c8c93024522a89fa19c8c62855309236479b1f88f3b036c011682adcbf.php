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

/* @Frontend/Profile/factureDetail.html.twig */
class __TwigTemplate_fe515e765ce1fb2767bb288f6673484776a4d6448ca2400eaeea41219d9f88ed extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/Profile/factureDetail.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutBreadcrumps.html.twig", "@Frontend/Profile/factureDetail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_breadcrump($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrump"));

        // line 5
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "

        <div class=\"row\" style=\"margin-right: 2%;margin-left: 2%\">
            <div class=\"col-lg-9 col-md-9 col-sm-7\">
                <div class=\"row\">
                    <div class=\"breadcrumbDiv col-lg-12\" style=\"margin-right: 2%;margin-top: 5%\">
                        <ul class=\"breadcrumb\">
                            <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
        echo "</a></li>
                            <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "html", null, true);
        echo "</a></li>
                            <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture");
        echo "\">
                                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mes commandes"), "html", null, true);
        echo "</a></li>

                            <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                                ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Détails commande"), "html", null, true);
        echo "#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "reference", []), "html", null, true);
        echo "</li>
                        </ul>
                    </div>
                </div>

                <h1 class=\"section-title-inner\" hidden><span><i class=\"fa fa-list-alt\"></i> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut commande"), "html", null, true);
        echo " </span></h1>

                <div class=\"row userInfo\">
                    <div class=\"col-lg-12\" hidden>
                        <h2 class=\"block-title-2\"> ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Votre statut commande"), "html", null, true);
        echo " </h2>
                    </div>


                    <div class=\"statusContent\">


                        <div class=\"col-sm-12\">
                            <div class=\" statusTop\">
                                <p><strong class=\"labeltitle\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut"), "html", null, true);
        echo ":</strong>
                                    ";
        // line 40
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 0)) {
            // line 41
            echo "                                        <span class=\"badge badge-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Non traitée"), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 43
        echo "
                                    ";
        // line 44
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 1)) {
            // line 45
            echo "                                        <span class=\"badge badge-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("En cours de traitement"), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 47
        echo "                                    ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 2)) {
            // line 48
            echo "                                        <span class=\"badge badge-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Traitée"), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 50
        echo "                                    ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 3)) {
            // line 51
            echo "                                        <span class=\"badge badge-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Livrée"), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 53
        echo "                                    ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 4)) {
            // line 54
            echo "                                        <span class=\"badge badge-dark\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Annulée"), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 56
        echo "                                </p>


                                <p><strong class=\"labeltitle\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ref commande"), "html", null, true);
        echo ":</strong> #";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "reference", []), "html", null, true);
        echo " </p>
                            </div>
                        </div>


                        <div style=\"clear: both\"></div>

                        <div class=\"col-sm-12 clearfix\">
                            <div class=\"order-box\">
                                <div class=\"order-box-header \">
                                    <span class=\"labeltitle\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Les Articles"), "html", null, true);
        echo "</span>


                                </div>


                                <div class=\"order-box-content\">
                                    <div class=\"table-responsive\">
                                        <table class=\"order-details-cart\">
                                            <tbody>

                                            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commande_produit"] ?? $this->getContext($context, "commande_produit")));
        foreach ($context['_seq'] as $context["_key"] => $context["cp"]) {
            // line 81
            echo "
                                                <tr class=\"cartProduct\">
                                                    <td class=\"cartProductThumb\" style=\"width:20%\">
                                                        <div><a href=\"";
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_produit");
            echo "?sub_categorie_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "sousCategorie", []), "id", []), "html", null, true);
            echo "\">
                                                                <img alt=\"img\" class=\"lazy\" src=\"";
            // line 85
            if (($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "image", []) && ($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "image", []) != ""))) {
                echo "/uploads/produits/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cp"], "produit", []), "image", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
            }
            echo "\"  data-original=\"/uploads/produits/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cp"], "produit", []), "image", []), "html", null, true);
            echo "\">
                                                            </a></div>
                                                    </td>
                                                    <td style=\"width:40%\">
                                                        <div class=\"miniCartDescription\">
                                                            <h4><a href=\"#\"> ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cp"], "produit", []), "nom", []), "html", null, true);
            echo " </a>
                                                            </h4>

                                                            <div class=\"price\"><span>
                                                                     ";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "prix", []), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "
                                                                </span></div>
                                                        </div>
                                                    </td>
                                                    <td class=\"labeltitle\" style=\"width:10%\"><a> ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["cp"], "quantite", []), "html", null, true);
            echo "  </a></td>
                                                    <td class=\"labeltitle\" style=\"width:15%\"><span> ";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice(($this->getAttribute($context["cp"], "quantite", []) * $this->getAttribute($this->getAttribute($context["cp"], "produit", []), "prix", [])), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "</span></td>

                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "
                                            <tr class=\"cartTotalTr blank\">
                                                <td class=\"\" style=\"width:20%\">
                                                    <div></div>
                                                </td>
                                                <td style=\"width:40%\"></td>
                                                <td class=\"\" style=\"width:20%\"></td>
                                                <td class=\"\" style=\"width:15%\"><span>  </span></td>

                                            </tr>


                                            <tr class=\"cartTotalTr\">
                                                <td class=\"\" style=\"width:20%\">
                                                    <div></div>
                                                </td>
                                                <td style=\"width:40%\"></td>
                                                <td class=\"labeltitle\" style=\"width:20%\">";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total"), "html", null, true);
        echo "</td>
                                                <td class=\"\" style=\"width:15%\"><span class=\"price\">
                                                        ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "prix", []), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
        echo "
                                                    </span></td>

                                            </tr>


                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>


                    </div>


                    ";
        // line 141
        if ($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", [])) {
            // line 142
            echo "                        <div class=\"row\" style=\"margin: 25px 0px\">
                            <div class=\"col-md-6\">

                                <h3 class=\"titlered\"> ";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adresse de livraison"), "html", null, true);
            echo ": </h3>
                                <dt>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "prenom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "nom", []), "html", null, true);
            echo "</dt>
                                <dt>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "adresse", []), "html", null, true);
            echo "</dt>
                                <dt>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "cp", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "ville", []), "html", null, true);
            echo "
                                    - ";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "pays", []), "html", null, true);
            echo "</dt>

                            </div>


                        </div>
                    ";
        } else {
            // line 156
            echo "                        <div class=\"row\" style=\"margin: 25px 0px\">
                            <div class=\"col-md-8\">

                                <h4 class=\"titlered\"> ";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Point de retrait"), "html", null, true);
            echo ": </h4>
                                <h5 class=\"labell\">";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "nom", []), "html", null, true);
            echo "</h5>
                                <h5 class=\"labell\">";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "adresse", []), "html", null, true);
            echo "</h5>
                                ";
            // line 162
            if ($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "tel", [])) {
                // line 163
                echo "                                    <h5 class=\"labell\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléphone"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "tel", []), "html", null, true);
                echo "</h5>
                                ";
            }
            // line 165
            echo "                                ";
            if ((($context["email"] ?? $this->getContext($context, "email")) && (($context["email"] ?? $this->getContext($context, "email")) != ""))) {
                // line 166
                echo "                                    <h5 class=\"labell\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
                echo "</h5>
                                    <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                                    <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                                ";
            }
            // line 170
            echo "
                            </div>

                            <div class=\"col-md-4\">

                                <h4  class=\"titlered\"> ";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date et heure de retrait"), "html", null, true);
            echo ": </h4>
                                <h5 class=\"labell\"> Le ";
            // line 176
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateReception", []), "Y-m-d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeToString", []), "html", null, true);
            echo "</h5>

                            </div>
                        </div>
                    ";
        }
        // line 181
        echo "

                    <div class=\"col-lg-12 clearfix\" style=\"margin-top: 20px;margin-bottom: 20px\">
                        <div class=\"row\">

                        <a href=\"";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_frontend");
        echo "\" class=\"float-right  col-md-6 col-xs-12 col-lg-5\"> <button class=\"btn_card\"  style=\"margin-right: 10px;margin-left: 10px;width: 100%;margin-bottom: 10px\">
                                ";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Continuer vos achats"), "html", null, true);
        echo "</button></a>

                        <a href=\"";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture");
        echo "\" class=\"float-left  col-md-6 col-xs-12 col-lg-5\"> <button class=\"btn_regist\" style=\"margin-right: 10px;margin-left: 10px;width: 100%;margin-bottom: 10px\">
                                ";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mes commandes"), "html", null, true);
        echo "</button></a>
                        </div>

                    </div>
                </div>
                <!--/row end-->

            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-5\"></div>
        </div>
        <!--/row-->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/Profile/factureDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 190,  426 => 189,  421 => 187,  417 => 186,  410 => 181,  400 => 176,  396 => 175,  389 => 170,  379 => 166,  376 => 165,  368 => 163,  366 => 162,  362 => 161,  358 => 160,  354 => 159,  349 => 156,  339 => 149,  333 => 148,  329 => 147,  323 => 146,  319 => 145,  314 => 142,  312 => 141,  290 => 122,  285 => 120,  266 => 103,  256 => 99,  252 => 98,  245 => 94,  238 => 90,  223 => 85,  217 => 84,  212 => 81,  208 => 80,  194 => 69,  179 => 59,  174 => 56,  168 => 54,  165 => 53,  159 => 51,  156 => 50,  150 => 48,  147 => 47,  141 => 45,  139 => 44,  136 => 43,  130 => 41,  128 => 40,  124 => 39,  112 => 30,  105 => 26,  95 => 21,  89 => 18,  85 => 17,  79 => 16,  75 => 15,  66 => 8,  60 => 7,  52 => 5,  46 => 4,  30 => 1,);
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

    {% endblock breadcrump %}
    {% block content %}


        <div class=\"row\" style=\"margin-right: 2%;margin-left: 2%\">
            <div class=\"col-lg-9 col-md-9 col-sm-7\">
                <div class=\"row\">
                    <div class=\"breadcrumbDiv col-lg-12\" style=\"margin-right: 2%;margin-top: 5%\">
                        <ul class=\"breadcrumb\">
                            <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">{{ \"Home\"|trans }}</a></li>
                            <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"{{ path(\"compte\") }}\">{{ app.user }}</a></li>
                            <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"{{ path(\"facture\") }}\">
                                    {{ \"Mes commandes\"|trans }}</a></li>

                            <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                                {{\"Détails commande\"|trans}}#{{ commande.reference}}</li>
                        </ul>
                    </div>
                </div>

                <h1 class=\"section-title-inner\" hidden><span><i class=\"fa fa-list-alt\"></i> {{ \"Statut commande\"|trans }} </span></h1>

                <div class=\"row userInfo\">
                    <div class=\"col-lg-12\" hidden>
                        <h2 class=\"block-title-2\"> {{ \"Votre statut commande\"|trans}} </h2>
                    </div>


                    <div class=\"statusContent\">


                        <div class=\"col-sm-12\">
                            <div class=\" statusTop\">
                                <p><strong class=\"labeltitle\">{{ \"Statut\"|trans }}:</strong>
                                    {% if  commande.statutcommande == 0 %}
                                        <span class=\"badge badge-danger\">{{\"Non traitée\" | trans}}</span>
                                    {% endif %}

                                    {% if  commande.statutcommande == 1 %}
                                        <span class=\"badge badge-info\">{{ \"En cours de traitement\" | trans }}</span>
                                    {% endif %}
                                    {% if  commande.statutcommande == 2 %}
                                        <span class=\"badge badge-primary\">{{\"Traitée\" | trans}}</span>
                                    {% endif %}
                                    {% if  commande.statutcommande == 3 %}
                                        <span class=\"badge badge-warning\">{{\"Livrée\" | trans}}</span>
                                    {% endif %}
                                    {% if  commande.statutcommande == 4 %}
                                        <span class=\"badge badge-dark\">{{\"Annulée\" | trans}}</span>
                                    {% endif %}
                                </p>


                                <p><strong class=\"labeltitle\">{{ \"Ref commande\" | trans }}:</strong> #{{ commande.reference}} </p>
                            </div>
                        </div>


                        <div style=\"clear: both\"></div>

                        <div class=\"col-sm-12 clearfix\">
                            <div class=\"order-box\">
                                <div class=\"order-box-header \">
                                    <span class=\"labeltitle\">{{ \"Les Articles\" | trans }}</span>


                                </div>


                                <div class=\"order-box-content\">
                                    <div class=\"table-responsive\">
                                        <table class=\"order-details-cart\">
                                            <tbody>

                                            {% for  cp in commande_produit %}

                                                <tr class=\"cartProduct\">
                                                    <td class=\"cartProductThumb\" style=\"width:20%\">
                                                        <div><a href=\"{{ path(\"list_produit\") }}?sub_categorie_id={{ cp.produit.sousCategorie.id }}\">
                                                                <img alt=\"img\" class=\"lazy\" src=\"{% if cp.produit.image  and cp.produit.image != \"\" %}/uploads/produits/{{ cp.produit.image }}{% else %}{{ asset('/assets/img/default_t_e.jpg') }}{% endif %}\"  data-original=\"/uploads/produits/{{ cp.produit.image }}\">
                                                            </a></div>
                                                    </td>
                                                    <td style=\"width:40%\">
                                                        <div class=\"miniCartDescription\">
                                                            <h4><a href=\"#\"> {{ cp.produit.nom }} </a>
                                                            </h4>

                                                            <div class=\"price\"><span>
                                                                     {{ formated_price(cp.produit.prix,app.session.get(\"pays\")) }}
                                                                </span></div>
                                                        </div>
                                                    </td>
                                                    <td class=\"labeltitle\" style=\"width:10%\"><a> {{ cp.quantite}}  </a></td>
                                                    <td class=\"labeltitle\" style=\"width:15%\"><span> {{ formated_price((cp.quantite * cp.produit.prix),app.session.get('pays')) }}</span></td>

                                                </tr>
                                            {% endfor %}

                                            <tr class=\"cartTotalTr blank\">
                                                <td class=\"\" style=\"width:20%\">
                                                    <div></div>
                                                </td>
                                                <td style=\"width:40%\"></td>
                                                <td class=\"\" style=\"width:20%\"></td>
                                                <td class=\"\" style=\"width:15%\"><span>  </span></td>

                                            </tr>


                                            <tr class=\"cartTotalTr\">
                                                <td class=\"\" style=\"width:20%\">
                                                    <div></div>
                                                </td>
                                                <td style=\"width:40%\"></td>
                                                <td class=\"labeltitle\" style=\"width:20%\">{{\"Total\" | trans}}</td>
                                                <td class=\"\" style=\"width:15%\"><span class=\"price\">
                                                        {{ formated_price(commande.prix,app.session.get('pays')) }}
                                                    </span></td>

                                            </tr>


                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>


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
                                <h5 class=\"labell\"> Le {{ commande.dateReception | date(\"Y-m-d\") }} {{ commande.periodeToString  }}</h5>

                            </div>
                        </div>
                    {% endif %}


                    <div class=\"col-lg-12 clearfix\" style=\"margin-top: 20px;margin-bottom: 20px\">
                        <div class=\"row\">

                        <a href=\"{{ path(\"homepage_frontend\") }}\" class=\"float-right  col-md-6 col-xs-12 col-lg-5\"> <button class=\"btn_card\"  style=\"margin-right: 10px;margin-left: 10px;width: 100%;margin-bottom: 10px\">
                                {{ \"Continuer vos achats\" | trans }}</button></a>

                        <a href=\"{{ path(\"facture\") }}\" class=\"float-left  col-md-6 col-xs-12 col-lg-5\"> <button class=\"btn_regist\" style=\"margin-right: 10px;margin-left: 10px;width: 100%;margin-bottom: 10px\">
                                {{ \"Mes commandes\" | trans }}</button></a>
                        </div>

                    </div>
                </div>
                <!--/row end-->

            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-5\"></div>
        </div>
        <!--/row-->
    {% endblock %}
", "@Frontend/Profile/factureDetail.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\Profile\\factureDetail.html.twig");
    }
}
