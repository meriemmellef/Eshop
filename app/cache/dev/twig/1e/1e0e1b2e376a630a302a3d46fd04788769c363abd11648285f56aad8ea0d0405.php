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

/* @Frontend/Profile/DetailQrcodeScan.html.twig */
class __TwigTemplate_b7c3acc0cc93838e2ed49384ae1feb26f7a6ed8480890901660e08a068a83520 extends \Twig\Template
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
        return "FrontendBundle:Layouts:layoutqrcodescan.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/Profile/DetailQrcodeScan.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutqrcodescan.html.twig", "@Frontend/Profile/DetailQrcodeScan.html.twig", 1);
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
            <div class=\"breadcrumbDiv col-lg-12\" style=\"margin-right: 2%;margin-left: 2%\">
                <ul class=\"breadcrumb\">

                    <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 15px;font-weight: 400;color: #ED0000 !important;\">
                        ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Détails commande"), "html", null, true);
        echo "#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "reference", []), "html", null, true);
        echo "</li>
                </ul>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "

        <div class=\"row\" style=\"margin-right:1%;margin-left: 1%\">
            <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                <h1 class=\"section-title-inner\" hidden><span><i class=\"fa fa-list-alt\"></i> ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut commande"), "html", null, true);
        echo " </span></h1>

                <div class=\"row userInfo\">
                    <div class=\"col-lg-12\" hidden>
                        <h2 class=\"block-title-2\"> ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Votre statut commande"), "html", null, true);
        echo " </h2>
                    </div>


                    <div class=\"statusContent\">


                        <div class=\"col-sm-12\">
                            <div class=\" statusTop\">
                                <p><strong class=\"labeltitle\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut"), "html", null, true);
        echo ":</strong>
                                    ";
        // line 34
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 0)) {
            // line 35
            echo "                                        <span class=\"badge badge-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Non traitée"), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 37
        echo "
                                    ";
        // line 38
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 1)) {
            // line 39
            echo "                                        <span class=\"badge badge-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("En cours de traitement"), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 41
        echo "                                    ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 2)) {
            // line 42
            echo "                                        <span class=\"badge badge-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Traitée"), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 44
        echo "                                    ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 3)) {
            // line 45
            echo "                                        <span class=\"badge badge-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Livrée"), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 47
        echo "                                    ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 4)) {
            // line 48
            echo "                                        <span class=\"badge badge-dark\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Annulée"), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 50
        echo "                                </p>


                                <p><strong class=\"labeltitle\">";
        // line 53
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
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Les Articles"), "html", null, true);
        echo "</span>


                                </div>


                                <div class=\"order-box-content\">
                                    <div class=\"table-responsive\">
                                        <table class=\"order-details-cart\">
                                            <tbody>

                                            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commande_produit"] ?? $this->getContext($context, "commande_produit")));
        foreach ($context['_seq'] as $context["_key"] => $context["cp"]) {
            // line 75
            echo "
                                                <tr class=\"cartProduct\">
                                                    <td class=\"cartProductThumb\" style=\"width:20%\">
                                                        <div><a href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_produit");
            echo "?sub_categorie_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "sousCategorie", []), "id", []), "html", null, true);
            echo "\"> <img alt=\"img\" class=\"lazy\"
                                                                                                                                                           src=\"";
            // line 79
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "sousCategorie", []), "image", []) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "sousCategorie", []), "image", []) != ""))) {
                echo "/uploads/produits/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "sousCategorie", []), "image", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
            }
            echo "\"  data-original=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "sousCategorie", []), "image", []), "html", null, true);
            echo "\">
                                                            </a></div>
                                                    </td>
                                                    <td style=\"width:40%\">
                                                        <div class=\"miniCartDescription\">
                                                            <h4><a href=\"#\"> ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cp"], "produit", []), "nom", []), "html", null, true);
            echo " </a>
                                                            </h4>

                                                            <div class=\"price\"><span>
                                                                     ";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "prix", []), $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "pays", [])), "html", null, true);
            echo "
                                                                </span></div>
                                                        </div>
                                                    </td>
                                                    <td class=\"labeltitle\" style=\"width:10%\"><a> ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cp"], "produit", []), "quantite", []), "html", null, true);
            echo "  </a></td>
                                                    <td class=\"labeltitle\" style=\"width:15%\"><span> ";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice(($this->getAttribute($context["cp"], "quantite", []) * $this->getAttribute($this->getAttribute($context["cp"], "produit", []), "prix", [])), $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "pays", [])), "html", null, true);
            echo "</span></td>

                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
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
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total"), "html", null, true);
        echo "</td>
                                                <td class=\"\" style=\"width:15%\"><span class=\"price\">
                                                        ";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "prix", []), $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "pays", [])), "html", null, true);
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
        // line 135
        if ($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", [])) {
            // line 136
            echo "                        <div class=\"row\" style=\"margin: 25px 0px\">
                            <div class=\"col-md-6\">

                                <h3 class=\"titlered\"> ";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adresse de livraison"), "html", null, true);
            echo ": </h3>
                                <dt>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "prenom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "nom", []), "html", null, true);
            echo "</dt>
                                <dt>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "adresse", []), "html", null, true);
            echo "</dt>
                                <dt>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "cp", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "ville", []), "html", null, true);
            echo "
                                    - ";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "pays", []), "html", null, true);
            echo "</dt>

                            </div>


                        </div>
                    ";
        } else {
            // line 150
            echo "                        <div class=\"row\" style=\"margin: 25px 0px\">
                            <div class=\"col-md-8\">

                                <h4 class=\"titlered\"> ";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Point de retrait"), "html", null, true);
            echo ": </h4>
                                <h5 class=\"labell\">";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "nom", []), "html", null, true);
            echo "</h5>
                                <h5 class=\"labell\">";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "adresse", []), "html", null, true);
            echo "</h5>
                                ";
            // line 156
            if ($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "tel", [])) {
                // line 157
                echo "                                    <h5 class=\"labell\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléphone"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "tel", []), "html", null, true);
                echo "</h5>
                                ";
            }
            // line 159
            echo "                                ";
            if ((($context["email"] ?? $this->getContext($context, "email")) && (($context["email"] ?? $this->getContext($context, "email")) != ""))) {
                // line 160
                echo "                                    <h5 class=\"labell\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
                echo "</h5>
                                    <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                                    <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                                ";
            }
            // line 164
            echo "
                            </div>

                            <div class=\"col-md-4\">

                                <h4  class=\"titlered\"> ";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date et heure de retrait"), "html", null, true);
            echo ": </h4>
                                <h5 class=\"labell\"> Le ";
            // line 170
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateReception", []), "Y-m-d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeToString", []), "html", null, true);
            echo "</h5>

                            </div>
                        </div>
                    ";
        }
        // line 175
        echo "


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
        return "@Frontend/Profile/DetailQrcodeScan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 175,  380 => 170,  376 => 169,  369 => 164,  359 => 160,  356 => 159,  348 => 157,  346 => 156,  342 => 155,  338 => 154,  334 => 153,  329 => 150,  319 => 143,  313 => 142,  309 => 141,  303 => 140,  299 => 139,  294 => 136,  292 => 135,  270 => 116,  265 => 114,  246 => 97,  236 => 93,  232 => 92,  225 => 88,  218 => 84,  203 => 79,  197 => 78,  192 => 75,  188 => 74,  174 => 63,  159 => 53,  154 => 50,  148 => 48,  145 => 47,  139 => 45,  136 => 44,  130 => 42,  127 => 41,  121 => 39,  119 => 38,  116 => 37,  110 => 35,  108 => 34,  104 => 33,  92 => 24,  85 => 20,  79 => 16,  73 => 15,  59 => 10,  52 => 5,  46 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'FrontendBundle:Layouts:layoutqrcodescan.html.twig' %}


    {% block breadcrump %}
        <div class=\"row\">
            <div class=\"breadcrumbDiv col-lg-12\" style=\"margin-right: 2%;margin-left: 2%\">
                <ul class=\"breadcrumb\">

                    <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 15px;font-weight: 400;color: #ED0000 !important;\">
                        {{\"Détails commande\"|trans}}#{{ commande.reference}}</li>
                </ul>
            </div>
        </div>
    {% endblock breadcrump %}
    {% block content %}


        <div class=\"row\" style=\"margin-right:1%;margin-left: 1%\">
            <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
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
                                                        <div><a href=\"{{ path(\"list_produit\") }}?sub_categorie_id={{ cp.produit.sousCategorie.id }}\"> <img alt=\"img\" class=\"lazy\"
                                                                                                                                                           src=\"{% if cp.produit.sousCategorie.image  and cp.produit.sousCategorie.image != \"\" %}/uploads/produits/{{ cp.produit.sousCategorie.image }}{% else %}{{ asset('/assets/img/default_t_e.jpg') }}{% endif %}\"  data-original=\"{{ cp.produit.sousCategorie.image }}\">
                                                            </a></div>
                                                    </td>
                                                    <td style=\"width:40%\">
                                                        <div class=\"miniCartDescription\">
                                                            <h4><a href=\"#\"> {{ cp.produit.nom }} </a>
                                                            </h4>

                                                            <div class=\"price\"><span>
                                                                     {{ formated_price(cp.produit.prix,commande.pays) }}
                                                                </span></div>
                                                        </div>
                                                    </td>
                                                    <td class=\"labeltitle\" style=\"width:10%\"><a> {{ cp.produit.quantite}}  </a></td>
                                                    <td class=\"labeltitle\" style=\"width:15%\"><span> {{ formated_price((cp.quantite * cp.produit.prix),commande.pays) }}</span></td>

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
                                                        {{ formated_price(commande.prix,commande.pays) }}
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



                </div>
                <!--/row end-->

            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-5\"></div>
        </div>
        <!--/row-->
    {% endblock %}
", "@Frontend/Profile/DetailQrcodeScan.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\Profile\\DetailQrcodeScan.html.twig");
    }
}
