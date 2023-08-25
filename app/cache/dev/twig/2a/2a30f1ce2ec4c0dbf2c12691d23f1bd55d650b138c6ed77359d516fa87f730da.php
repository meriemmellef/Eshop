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

/* @Frontend/Profile/favoris.html.twig */
class __TwigTemplate_3e42af877823dc65d9b760bc92d1da88c93dc1e91affce182e78b2254e9aeb4f extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/Profile/favoris.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutBreadcrumps.html.twig", "@Frontend/Profile/favoris.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_breadcrump($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrump"));

        // line 5
        echo "\t<ul class=\"breadcrumb\" style=\"margin-right: 2%;margin-left: 2%\">

\t\t<li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
        echo "</a></li>
\t\t<li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "html", null, true);
        echo "</a></li>
\t\t<li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\"> ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Favoris"), "html", null, true);
        echo "</li>
\t</ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
\t<div class=\"container\">

\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["favoris"] ?? $this->getContext($context, "favoris")));
        foreach ($context['_seq'] as $context["key"] => $context["produit"]) {
            // line 17
            echo "
\t\t\t<div class=\"item col-lg-3 col-md-4 col-sm-6 col-xs-12\" style=\"margin-top: 15px;margin-bottom: 15px\" >
\t\t\t\t<div class=\"product\" >


\t\t\t\t\t<a \tonclick=\"deletefavoris(";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo ")\"
\t\t\t\t\t\t  class=\" add-fav tooltipHere
                                   active\"
\t\t\t\t\t\t  data-placement=\"left\" >
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-heart\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"image\" style=\"width: 100%!important;height: 70%!important;\">
\t\t\t\t\t\t";
            // line 29
            if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "description", []) || $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "descriptionen", []))) {
                // line 30
                echo "
\t\t\t\t\t\t<div class=\"quickview\" >
\t\t\t\t\t\t\t<a  class=\"btn btn-xs btn-quickview\" href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_produits", ["produitid" => $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", [])]), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t>";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details"), "html", null, true);
                echo " </a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 36
            echo "
\t\t\t\t\t\t<img style=\"width: 100%!important;border-top-left-radius: 10px;border-top-right-radius: 10px;max-height: 300px;min-height:300px;height: 100%!important;object-fit: contain  !important\"
\t\t\t\t\t\t\t src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t data-original=\"";
            // line 39
            if ((($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []) != ""))) {
                echo "/uploads/produits/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "image", []), "html", null, true);
                echo "
                                        ";
            } else {
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
                echo " ";
            }
            echo "\" alt=\"img\"
\t\t\t\t\t\t\t class=\"img-responsive lazy\" >
\t\t\t\t\t\t";
            // line 42
            if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []) > 0)) {
                // line 43
                echo "
\t\t\t\t\t\t\t";
                // line 44
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                    // line 45
                    echo "\t\t\t\t\t\t\t\t<div class=\"promotion\">
\t\t\t\t\t\t\t\t\t<span class=\"discount\" >";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 48
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) == 1))) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t<div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\" >";
                    // line 50
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "percentage", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
                    echo "%
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 55
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) > 1))) {
                    // line 56
                    echo "\t\t\t\t\t\t\t\t<div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\" >
                                            ";
                    // line 58
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "percentage", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
                    echo "%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        ";
                    // line 59
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sur le"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ème"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 64
                echo "\t\t\t\t\t\t";
            } else {
                // line 65
                echo "\t\t\t\t\t\t\t<div class=\"promotion\">
\t\t\t\t\t\t\t\t<span class=\"horsstock\" style=\"    font-weight: 400;\">\t";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HORS STOCK"), "html", null, true);
                echo "\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"height: 30%!important;position: relative\">


\t\t\t\t\t\t<div class=\"line_gradient\"></div>


\t\t\t\t\t\t<div class=\"description\" >
\t\t\t\t\t\t\t";
            // line 77
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nomen", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
            }
            // line 78
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"cat_badge\" >
                                        ";
            // line 81
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "categorie", []), "nomEn", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "categorie", []), "nom", []), "html", null, true);
            }
            // line 82
            echo "                                    </span>





\t\t\t\t\t\t<div class=\"row\" style=\"position: absolute;  bottom: 10px;left: 0;right: 0\">
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-xs-6 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\" price  div_card\" style=\"padding-left: 14px;
\t\t\t\t\t\t\t\t";
            // line 91
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") == false) || (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") == true) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) > 1)))) {
                // line 92
                echo "\t\t\t\t\t\t\t\t\t\tpadding-bottom: 22px;
\t\t\t\t\t\t\t\t";
            }
            // line 93
            echo "\">
                                            <span class=\"old-price\" style=\"float:left\">
                                              ";
            // line 95
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "numProduitPromo", []) == 1))) {
                // line 96
                echo "\t\t\t\t\t\t\t\t\t\t\t\t  ";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t  ";
            } elseif ((($this->getAttribute($this->getAttribute($this->getAttribute(            // line 97
$context["produit"], "produit", []), "finalPrice", []), "is_promo", [], "array") && $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", [])) && ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prixPromo", []) > 0))) {
                // line 98
                echo "\t\t\t\t\t\t\t\t\t\t\t\t  ";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t  ";
            }
            // line 100
            echo "                                                </span>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span  class=\"\" style=\"float:left\"> ";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "</span>



\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"div_card col-lg-6 col-md-6 col-xs-6 col-sm-6 text-right\"
\t\t\t\t\t\t\t\t style=\"padding-right: 20px;padding-left: 23px;\">
\t\t\t\t\t\t\t\t<div class=\"row\" id=\"quantite";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\"    name=\"quantite";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\" disabled=\"none\" hidden>

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"deleteArticleQuantity(";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prix", []), "html", null, true);
            echo ")\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-type=\"minus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t                             \t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t                        \t</button>
                                                            </span>
\t\t\t\t\t\t\t\t\t\t\t<input style=\" height: 4.5rem;!important;\" type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t   id=\"qte";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t   name=\"qte";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t   class=\"form-control input-number text-center\" ";
            // line 127
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array", true, true)) {
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), [], "array"), "html", null, true);
                echo "\" ";
            } else {
                echo " value=\"0\" ";
            }
            // line 128
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   min=\"1\" max=\"100\" disabled>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
                                                                <button id=\"addArticle";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"addArticle(";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
            echo ")\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-type=\"plus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
                                                            </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"\" id=\"addcart";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\"   name=\"addcart";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 145
            if (($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []) == 0)) {
                // line 146
                echo "\t\t\t\t\t\t\t\t\t\t<button disabled type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\" background-color: #8c8586; color: white; border: 1px solid #8c8586; padding: 0 0;
    height: 43px;
    width: 43px;
    margin-bottom: 8px;

\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
\t\t\t\t\t\t\t\t                        \t<span class=\"add2cart\">
\t\t\t\t\t\t\t\t\t                      \t<i style=\"font-size: 17px;\" class=\"glyphicon glyphicon-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t                       </span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 159
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 160
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "couleurs", [])) > 0)) {
                    // line 161
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<a class=\" btn_card\" style=\"padding-top: 15px; padding-bottom: 15px;\"
\t\t\t\t\t\t\t\t\t\t\t   href=\"";
                    // line 163
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_produits", ["produitid" => $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", [])]), "html", null, true);
                    echo "\"  >
                                                         <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> ";
                    // line 165
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                    echo " <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 171
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_card\"
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 184
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"btn-panier";
                    // line 185
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"enabledivquantity(";
                    // line 186
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "quantite", []), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
                    echo ")\"

\t\t\t\t\t\t\t\t\t\t\t\t\tdata-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                        <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> ";
                    // line 190
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                    echo " <i class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 194
                echo "

\t\t\t\t\t\t\t\t\t";
            }
            // line 197
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>



\t\t\t<div class=\"modal fade  \" id=\"modal-panier";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\"
\t\t\t\t aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\" style=\"background: #ED0000;\">
\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"exampleModalLongTitle\"
\t\t\t\t\t\t\t\tstyle=\"margin-top: 11px;\">";
            // line 216
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
            echo " <i
\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<button style=\"opacity: 1.2;margin-top: -36px;margin-right: -10px;background-color: #ED0000\"
\t\t\t\t\t\t\t\t\ttype=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t<span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body text-center\">

\t\t\t\t\t\t\t<h3>";
            // line 226
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("quantite_demander_indispo"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 227
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nomen", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
            }
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("est"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t<span id=\"idinputtwo";
            // line 228
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\">  </span></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.modal-content -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal fade\" id=\"modal-quantity-max";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "id", []), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\"
\t\t\t\t aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\" style=\"background: #ED0000;\">
\t\t\t\t\t\t\t<h4 class=\"modal-title text-left\" id=\"exampleModalLongTitle\"
\t\t\t\t\t\t\t\tstyle=\"margin-top: 11px;\">

\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<button style=\"opacity: 1.2;margin-top: -26px;margin-right: -10px;background-color: #ED0000\"
\t\t\t\t\t\t\t\t\ttype=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t<span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body text-center\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t";
            // line 250
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pouvez_commander_au_max"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "maxcommande", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 251
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nomen", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
            }
            echo "</h3>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.modal-content -->
\t\t\t\t</div>
\t\t\t\t<!-- /.modal-dialog -->
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        echo "\t</div>

\t";
        // line 347
        echo "\t<!--/row-->


\t<style>
\t\t.owl-buttons {
\t\t\tdisplay: block;
\t\t}

\t\t.owl-carousel:hover .owl-buttons {
\t\t\tdisplay: block;
\t\t}

\t\t.owl-item {
\t\t\ttext-align: center;
\t\t\tpadding-left: 10px;
\t\t\tpadding-right: 10px;
\t\t}


\t\t.owl-theme .owl-controls .owl-buttons div {
\t\t\tbackground: transparent;
\t\t\tcolor: #869791;
\t\t\tfont-size: 40px;
\t\t\tline-height: 50px;
\t\t\tmargin-top: 150px;
\t\t\tposition: absolute;
\t\t\ttop: 0;

\t\t}


\t\t.owl-theme .owl-controls .owl-buttons .owl-prev {
\t\t\tleft: 0;
\t\t\tpadding-left: 20px;
\t\t}

\t\t.owl-theme .owl-controls .owl-buttons .owl-next {
\t\t\tright: 0;
\t\t\tpadding-right: 20px;
\t\t}

\t\t.modalerror {
\t\t\ttop: 50px;
\t\t\tright: 0;
\t\t\tbottom: 0;
\t\t\tleft: 0;
\t\t\tz-index: 10052;
\t\t}

\t</style>

\t<!-- /main container -->
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>

\t<script>
\t\t\$(document).ready(function () {

\t\t\tvar owl = \$(\"#owl-demo\");
\t\t\towl.owlCarousel({

\t\t\t\t//  itemsDesktop : true,
\t\t\t\t//  itemsDesktopSmall : false,
\t\t\t\t/// itemsTablet: false,
\t\t\t\t// itemsMobile : false,
\t\t\t\tstartPosition: 0,
\t\t\t\trtl: false,

\t\t\t\titems: 4,
\t\t\t\tnavigation: true,
\t\t\t\tloop: false,
\t\t\t\tautoplay: true,
\t\t\t\tautoplayHoverPause: true,
\t\t\t\tnavigationText: ['<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-left fa-stack-1x fa-inverse\"></i></span>', '<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-right fa-stack-1x fa-inverse\"></i></span>'],

\t\t\t\titemsDesktop: [1100, 3], //5 items between 1100px and 901px
\t\t\t\titemsDesktopSmall: [900, 2], // betweem 900px and 601px
\t\t\t\titemsTablet: [700, 1], //2 items between 600 and 0
\t\t\t\titemsMobile: [500, 1] // itemsMobile disabled - inherit from itemsTablet option

\t\t\t});

\t\t\t// Custom Navigation Events
\t\t\t\$(\".owl-carousel-arrows .next\").click(function () {
\t\t\t\towl.trigger('owl.next');
\t\t\t});

\t\t\t\$(\".owl-carousel-arrows .prev\").click(function () {
\t\t\t\towl.trigger('owl.prev');
\t\t\t});
\t\t});
\t</script>
\t<script>
\t\t\$(document).ready(function () {

\t\t\tvar owl = \$(\"#owl-demopromos\");
\t\t\towl.owlCarousel({

\t\t\t\t//  itemsDesktop : true,
\t\t\t\t//  itemsDesktopSmall : false,
\t\t\t\t/// itemsTablet: false,
\t\t\t\t// itemsMobile : false,
\t\t\t\tstartPosition: 0,
\t\t\t\trtl: false,

\t\t\t\titems: 4,
\t\t\t\tnavigation: true,
\t\t\t\tloop: false,
\t\t\t\tautoplay: true,
\t\t\t\tautoplayHoverPause: true,
\t\t\t\tnavigationText: ['<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-left fa-stack-1x fa-inverse\"></i></span>', '<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-right fa-stack-1x fa-inverse\"></i></span>'],

\t\t\t\titemsDesktop: [1100, 3], //5 items between 1100px and 901px
\t\t\t\titemsDesktopSmall: [900, 2], // betweem 900px and 601px
\t\t\t\titemsTablet: [700, 1], //2 items between 600 and 0
\t\t\t\titemsMobile: [500, 1] // itemsMobile disabled - inherit from itemsTablet option

\t\t\t});

\t\t\t// Custom Navigation Events
\t\t\t\$(\".owl-carousel-arrows .next\").click(function () {
\t\t\t\towl.trigger('owl.next');
\t\t\t});

\t\t\t\$(\".owl-carousel-arrows .prev\").click(function () {
\t\t\t\towl.trigger('owl.prev');
\t\t\t});
\t\t});
\t</script>
\t<script>
\t\tfunction changeCouleur(id) {
\t\t}

\t\tfunction addfavnonConnect() {
\t\t\t\$(\"#myModal\").modal({backdrop: true});

\t\t}

\t\t\$('#couleur').on('click', 'li', function () {
\t\t\t\$(this).addClass(\"selected\"); // Assign the class here
\t\t\t//   var value = \$('#couleur').val();
\t\t\tvar value = \$(this).attr('value');
\t\t\tvar produit = parseInt(\$(\"#idproduit\").val());
\t\t\t\$.ajax({
\t\t\t\turl: \"";
        // line 490
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("getSizeCouleur");
        echo "\",
\t\t\t\tdataType: 'Json',
\t\t\t\tdata: {\"couleurid\": value, \"produitid\": produit},
\t\t\t\ttype: 'GET',
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tvar nameselect = \"sizes\" + produit
\t\t\t\t\t\$('select[name=nameselect]').empty();
\t\t\t\t\tif (data[0]) {
\t\t\t\t\t\tstudent = data[0];
\t\t\t\t\t\t\$('select[name=nameselect]').append('<option selected value=\"' + student['id'] + '\">' + student['libelle'] + '</option>');

\t\t\t\t\t}

\t\t\t\t\tfor (i = 1; i < data.length; i++) {
\t\t\t\t\t\tstudent = data[i];
\t\t\t\t\t\t\$('select[name=\"sizes').append('<option  value=\"' + student['id'] + '\">' + student['libelle'] + '</option>');
\t\t\t\t\t}
\t\t\t\t\t\$(\"select\").select2();
\t\t\t\t\t//\t\$(\"#quantitymodal\" + produit).val(1);
\t\t\t\t}
\t\t\t});
\t\t});

\t\tfunction changeImagecouleur(produitid, couleurid, image) {
\t\t\tif (image) {
\t\t\t\tchangeImage(image, produitid)
\t\t\t}
\t\t\tvar produit = parseInt(produitid);
\t\t\tvar couleur = parseInt(couleurid);

\t\t\t\$(\"#quantitymodal\" + produitid).val(1);//rahma addd to

\t\t\t\$.ajax({
\t\t\t\turl: \"";
        // line 523
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("getSizeCouleur");
        echo "\",
\t\t\t\tdataType: 'Json',
\t\t\t\tdata: {\"couleurid\": couleur, \"produitid\": produit},
\t\t\t\ttype: 'GET',
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tvar nameselect = \"sizes\" + produitid
\t\t\t\t\t\$('select[name=' + nameselect + ']').empty();

\t\t\t\t\tif (data[0]) {
\t\t\t\t\t\tsize = data[0];
\t\t\t\t\t\t\$('select[name=' + nameselect + ']').append('<option selected value=\"' + size['id'] + '\">' + size['libelle'] + '</option>');
\t\t\t\t\t}

\t\t\t\t\tfor (i = 1; i < data.length; i++) {
\t\t\t\t\t\tsize = data[i];
\t\t\t\t\t\t\$('select[name=' + nameselect + ']').append('<option  value=\"' + size['id'] + '\">' + size['libelle'] + '</option>');
\t\t\t\t\t}

\t\t\t\t\t//\t\$(\"#quantitymodal\" + produit).val(1);
\t\t\t\t}
\t\t\t});

\t\t}

\t\tfunction changeImage(image, id) {

\t\t\tdocument.getElementById(\"imageproduit\" + id).src = '/uploads/produits/' + image;
\t\t\tvar images = document.getElementsByName(\"img\");
\t\t\tfor (i in images) {
\t\t\t\timages[i].style = 'width: 100px;\\n' +
\t\t\t\t\t\t'    height: 100px;\\n' +
\t\t\t\t\t\t'    background-size: cover;\\n' +
\t\t\t\t\t\t'    border-width: 2px;\\n' +
\t\t\t\t\t\t'    border-color: #dcdbdb;\\n' +
\t\t\t\t\t\t'    border-style: solid;';
\t\t\t}
\t\t\tdocument.getElementById(image).style = 'width: 100px;\\n' +
\t\t\t\t\t'    height: 100px;\\n' +
\t\t\t\t\t'    background-size: cover;\\n' +
\t\t\t\t\t'    border-width: 2px;\\n' +
\t\t\t\t\t'    border-color: #ED0000;\\n' +
\t\t\t\t\t'    border-style: solid;';

\t\t}
\t</script>
\t<script type=\"text/javascript\">
\t\tfunction addArticleSize(id) {

\t\t\tvar selectsizes = document.getElementById(\"sizes\" + id);
\t\t\tvar sizeid = selectsizes.options[selectsizes.selectedIndex].value;
\t\t\tvar qte = parseInt(\$(\"#quantitymodal\" + id).val());
\t\t\t//alert(qte);

\t\t\t\$.ajax({
\t\t\t\turl: \"";
        // line 577
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("size_from_id");
        echo "\",
\t\t\t\tdataType: 'Json',
\t\t\t\tdata: {\"sizeid\": sizeid},
\t\t\t\ttype: 'GET',
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tvar quantite = data
\t\t\t\t\tif (qte > quantite) {

\t\t\t\t\t\t//  alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
\t\t\t\t\t\tdocument.getElementById(\"idinputtwo\" + id).innerHTML = quantite;

\t\t\t\t\t\t\$(\"document\").ready(function () {

\t\t\t\t\t\t\t//was  \$('#modal-panier' + id).modal({backdrop: 'static', keyboard: false});
\t\t\t\t\t\t\t\$('#modal-panier' + id).modal(\"show\");


\t\t\t\t\t\t})


\t\t\t\t\t} else {
\t\t\t\t\t\taddArticlewithsize(id, sizeid, qte);
\t\t\t\t\t\t\$('#productSetailsModalAjax' + id).modal('hide');

\t\t\t\t\t}

\t\t\t\t}
\t\t\t});

\t\t}

\t\tfunction changeSize(id) {
\t\t\t//\$(\"#quantitymodal\" + id).val(1);
\t\t}

\t\tfunction goToProdDetail(produitid) {
\t\t\tconsole.log(\"produitid\" + produitid)
\t\t\tconsole.log(produitid)
\t\t\t\$.ajax({
\t\t\t\t'url': Routing.generate('detail_produits', {'produitid': produitid}),
\t\t\t\t'success': function (r) {
\t\t\t\t\t\$('#div1').html(r);
\t\t\t\t}
\t\t\t});


\t\t}

\t\tfunction enabledivquantity(id, quantite, max) {
\t\t\tvar qte = parseInt(\$(\"#qte\" + id).val());

\t\t\tif (qte + 1 > quantite) {

\t\t\t\t//alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
\t\t\t\tdocument.getElementById(\"idinputtwo\" + id).innerHTML = quantite;

\t\t\t\t\$(\"document\").ready(function () {
\t\t\t\t\t//wasss \$('#modal-panier' + id).modal({backdrop: 'static', keyboard: false});
\t\t\t\t\t\$('#modal-panier' + id).modal(\"show\");

\t\t\t\t})
\t\t\t} else if (qte + 1 > max) {
\t\t\t\t\$(\"document\").ready(function () {
\t\t\t\t\t//was \$('#modal-quantity-max' + id).modal({backdrop: 'static', keyboard: false});
\t\t\t\t\t\$('#modal-quantity-max' + id).modal(\"show\");
\t\t\t\t})
\t\t\t} else if (qte >= 0) {
\t\t\t\tvar quantities = document.querySelectorAll(\"[id=quantite\" + id + \"]\");
\t\t\t\tvar btncarts = document.querySelectorAll(\"[id=addcart\" + id + \"]\");
\t\t\t\tfor (var i = 0; i < btncarts.length; i++) {
\t\t\t\t\tbtncarts[i].style.display = \"none\";
\t\t\t\t}
\t\t\t\tfor (var i = 0; i < quantities.length; i++) {
\t\t\t\t\tquantities[i].style.display = \"block\";
\t\t\t\t}


\t\t\t\taddArticle(id, quantite, max);
\t\t\t}
\t\t}

\t\tfunction plusquantity(id) {

\t\t\tvar selectsizes = document.getElementById(\"sizes\" + id);
\t\t\tvar sizeid = selectsizes.options[selectsizes.selectedIndex].value;
\t\t\tvar qte = parseInt(\$(\"#quantitymodal\" + id).val());

\t\t\t\$.ajax({
\t\t\t\turl: \"";
        // line 665
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("size_from_id");
        echo "\",
\t\t\t\tdataType: 'Json',
\t\t\t\tdata: {\"sizeid\": sizeid},
\t\t\t\ttype: 'GET',
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tvar quantite = data;
\t\t\t\t\tvar qtee = parseInt(\$(\"#quantitymodal\" + id).val()) + 1;

\t\t\t\t\tif (qtee > quantite) {

\t\t\t\t\t\t//alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
\t\t\t\t\t\tdocument.getElementById(\"idinputtwo\" + id).innerHTML = quantite;

\t\t\t\t\t\t\$(\"document\").ready(function () {

\t\t\t\t\t\t\t//wass \$('#modal-panier' + id).modal({backdrop: 'static', keyboard: false});
\t\t\t\t\t\t\t\$('#modal-panier' + id).modal(\"show\");

\t\t\t\t\t\t})

\t\t\t\t\t} else {
\t\t\t\t\t\tvar qte = parseInt(\$(\"#quantitymodal\" + id).val()) + 1;
\t\t\t\t\t\tvar qte_input = document.querySelectorAll(\"[id=quantitymodal\" + id + \"]\");
\t\t\t\t\t\tfor (var i = 0; i < qte_input.length; i++) {
\t\t\t\t\t\t\tqte_input[i].value = qte;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t}
\t\t\t});


\t\t\t/*
            was befor my change
            var qte = parseInt(\$(\"#quantitymodal\" + id).val()) + 1;
            var qte_input = document.querySelectorAll(\"[id=quantitymodal\" + id+\"]\");
            for(var i = 0; i < qte_input.length; i++){
                qte_input[i].value = qte;
            }*/
\t\t}

\t\tfunction moinsquantity(id) {
\t\t\tvar qte = parseInt(\$(\"#quantitymodal\" + id).val()) - 1;
\t\t\tif (qte > 0) {
\t\t\t\t\$(\"#quantitymodal\" + id).val(qte);
\t\t\t} else {
\t\t\t\t\$(\"document\").ready(function () {
\t\t\t\t\t\$('#modal-quantity').modal({backdrop: 'static', keyboard: false});
\t\t\t\t})

\t\t\t}
\t\t}

\t\t<!-- ---- -->

\t\tfunction plusquantityD(id, quantity, max) {

\t\t\tvar qte = parseInt(\$(\"#qte\" + id).val()) + 1;
\t\t\tif (qte > quantity) {
\t\t\t\tdocument.getElementById(\"idinputtwo\" + id).innerHTML = quantity;

\t\t\t\t\$(\"document\").ready(function () {
\t\t\t\t\t//was  \$('#modal-panier' + id).modal({  backdrop: 'static',    keyboard: false  });
\t\t\t\t\t\$('#modal-panier' + id).modal(\"show\");


\t\t\t\t})
\t\t\t} else if (qte > max) {
\t\t\t\t\$(\"document\").ready(function () {
\t\t\t\t\t//was  \$('#modal-quantity-max'+id).modal({ backdrop: 'static',   keyboard: false});

\t\t\t\t\t\$('#modal-quantity-max' + id).modal(\"show\");

\t\t\t\t})
\t\t\t} else {
\t\t\t\t//  \$(\"#qte\" + id).val(qte);
\t\t\t\tvar qte_input = document.querySelectorAll(\"[id=qte\" + id + \"]\");

\t\t\t\tfor (var i = 0; i < qte_input.length; i++) {
\t\t\t\t\tqte_input[i].value = qte;
\t\t\t\t}
\t\t\t}

\t\t}

\t\tfunction moinquantityD(id, quantity, max) {

\t\t\tvar qte = parseInt(\$(\"#qte\" + id).val()) - 1;
\t\t\t//  \$(\"#qte\" + id).val(qte);
\t\t\tvar qte_input = document.querySelectorAll(\"[id=qte\" + id + \"]\");

\t\t\tif (qte > 0) {
\t\t\t\tfor (var i = 0; i < qte_input.length; i++) {
\t\t\t\t\tqte_input[i].value = qte;
\t\t\t\t}
\t\t\t} else {
\t\t\t\t\$(\"document\").ready(function () {
\t\t\t\t\t\$('#modal-quantity').modal({backdrop: 'static', keyboard: false});
\t\t\t\t})

\t\t\t}
\t\t}

\t\tfunction addArticlee(id, quantity, max) {
\t\t\tvar qte = parseInt(\$(\"#qte\" + id).val());
\t\t\tvar qte_input = document.querySelectorAll(\"[id=qte\" + id + \"]\");

\t\t\t//  console.log(\"eeeee\");
\t\t\t//   console.log(qte)


\t\t\tif (qte > quantity) {
\t\t\t\tdocument.getElementById(\"idinputtwo\" + id).innerHTML = quantity;

\t\t\t\t\$(\"document\").ready(function () {
\t\t\t\t\t//wasss  \$('#modal-panier' + id).modal({                         backdrop: 'static',                         keyboard: false                     });

\t\t\t\t\t\$('#modal-panier' + id).modal(\"show\");

\t\t\t\t})
\t\t\t} else if (qte > max) {
\t\t\t\t\$(\"document\").ready(function () {
\t\t\t\t\t//was  \$('#modal-quantity-max'+id).modal({  backdrop: 'static',  keyboard: false});

\t\t\t\t\t\$('#modal-quantity-max' + id).modal(\"show\");

\t\t\t\t})
\t\t\t} else {
\t\t\t\tfor (var i = 0; i < qte_input.length; i++) {
\t\t\t\t\tqte_input[i].value = qte;
\t\t\t\t}
\t\t\t\t//   alert(\"qtettee\"+qte)
\t\t\t\tvar \$this = \$(\"#addArticlee\" + id);
\t\t\t\t\$.ajax({
\t\t\t\t\turl: Routing.generate('add_many_quantity_to_cart', {id: id, qte: qte}), success: function (result) {
\t\t\t\t\t\t\$(\".my_nav_bar\").html(result);
\t\t\t\t\t\t\$(\".total_price_cart_empty\").html(\$(\".total_price_cart\").html());
\t\t\t\t\t\t\$(\"img.lazy\").lazyload({
\t\t\t\t\t\t\tthreshold: 50
\t\t\t\t\t\t});
\t\t\t\t\t\t\$(window).load(function () {
\t\t\t\t\t\t\t\$(\"html,body\").trigger(\"scroll\");
\t\t\t\t\t\t});
\t\t\t\t\t\t\$this.button('reset');
\t\t\t\t\t\t//hide modal after add to cart
\t\t\t\t\t\t// \$('#productSetailsModalAjax'+id).modal('hide');
\t\t\t\t\t\t\$('.modal').modal('hide');

\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/Profile/favoris.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  880 => 665,  789 => 577,  732 => 523,  696 => 490,  551 => 347,  547 => 261,  527 => 251,  522 => 250,  503 => 234,  494 => 228,  484 => 227,  480 => 226,  467 => 216,  458 => 210,  443 => 197,  438 => 194,  431 => 190,  420 => 186,  416 => 185,  413 => 184,  409 => 171,  400 => 165,  395 => 163,  391 => 161,  389 => 160,  386 => 159,  371 => 146,  369 => 145,  363 => 144,  343 => 131,  339 => 130,  335 => 128,  327 => 127,  323 => 126,  319 => 125,  306 => 117,  302 => 116,  291 => 110,  280 => 102,  276 => 100,  270 => 98,  268 => 97,  263 => 96,  261 => 95,  257 => 93,  253 => 92,  251 => 91,  240 => 82,  234 => 81,  229 => 78,  223 => 77,  213 => 69,  207 => 66,  204 => 65,  201 => 64,  193 => 60,  189 => 59,  185 => 58,  181 => 56,  179 => 55,  172 => 51,  168 => 50,  165 => 49,  163 => 48,  158 => 46,  155 => 45,  153 => 44,  150 => 43,  148 => 42,  141 => 40,  134 => 39,  130 => 38,  126 => 36,  120 => 33,  116 => 32,  112 => 30,  110 => 29,  98 => 22,  91 => 17,  87 => 16,  82 => 13,  76 => 12,  66 => 9,  60 => 8,  56 => 7,  52 => 5,  46 => 4,  30 => 1,);
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
\t<ul class=\"breadcrumb\" style=\"margin-right: 2%;margin-left: 2%\">

\t\t<li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">{{ \"Home\" | trans }}</a></li>
\t\t<li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"{{ path(\"compte\") }}\">{{ app.user }}</a></li>
\t\t<li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\"> {{ \"Favoris\" | trans }}</li>
\t</ul>
{% endblock breadcrump %}
{% block content %}

\t<div class=\"container\">

\t\t{% for key,produit in favoris %}

\t\t\t<div class=\"item col-lg-3 col-md-4 col-sm-6 col-xs-12\" style=\"margin-top: 15px;margin-bottom: 15px\" >
\t\t\t\t<div class=\"product\" >


\t\t\t\t\t<a \tonclick=\"deletefavoris({{ produit.produit.id }},{{key}})\"
\t\t\t\t\t\t  class=\" add-fav tooltipHere
                                   active\"
\t\t\t\t\t\t  data-placement=\"left\" >
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-heart\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"image\" style=\"width: 100%!important;height: 70%!important;\">
\t\t\t\t\t\t{% if produit.produit.description or produit.produit.descriptionen %}

\t\t\t\t\t\t<div class=\"quickview\" >
\t\t\t\t\t\t\t<a  class=\"btn btn-xs btn-quickview\" href=\"{{ path(\"detail_produits\",{'produitid':produit.produit.id}) }}\"
\t\t\t\t\t\t\t>{{ \"Details\" | trans }} </a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<img style=\"width: 100%!important;border-top-left-radius: 10px;border-top-right-radius: 10px;max-height: 300px;min-height:300px;height: 100%!important;object-fit: contain  !important\"
\t\t\t\t\t\t\t src=\"{{ asset('/assets/img/default_t_e.jpg') }}\"
\t\t\t\t\t\t\t data-original=\"{% if produit.produit.image and produit.produit.image and produit.produit.image != \"\" %}/uploads/produits/{{ produit.produit.image }}
                                        {% else %}{{ asset('/assets/img/default_t_e.jpg') }} {% endif %}\" alt=\"img\"
\t\t\t\t\t\t\t class=\"img-responsive lazy\" >
\t\t\t\t\t\t{% if produit.produit.quantite >0 %}

\t\t\t\t\t\t\t{% if produit.produit.finalPrice[\"is_promo\"] and produit.produit.prixPromo and produit.produit.prixPromo > 0 %}
\t\t\t\t\t\t\t\t<div class=\"promotion\">
\t\t\t\t\t\t\t\t\t<span class=\"discount\" >{{ \"Promotion\" | trans }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo == 1 %}
\t\t\t\t\t\t\t\t<div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\" >{{ \"Promotion\" | trans }}
\t\t\t\t\t\t\t\t\t\t\t{{ formated_price(produit.produit.finalPrice[\"percentage\"],app.session.get('pays'),false) }}%
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo > 1 %}
\t\t\t\t\t\t\t\t<div class=\"promotion\">
\t\t\t\t\t\t\t\t\t\t<span class=\"discount\" >
                                            {{ formated_price(produit.produit.finalPrice[\"percentage\"],app.session.get('pays'),false) }}%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        {{ \"sur le\" | trans }}
\t\t\t\t\t\t\t\t\t\t\t{{ produit.produit.numProduitPromo }}{{\"ème\" | trans}}
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"promotion\">
\t\t\t\t\t\t\t\t<span class=\"horsstock\" style=\"    font-weight: 400;\">\t{{ \"HORS STOCK\" | trans }}\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"height: 30%!important;position: relative\">


\t\t\t\t\t\t<div class=\"line_gradient\"></div>


\t\t\t\t\t\t<div class=\"description\" >
\t\t\t\t\t\t\t{% if app.request.getLocale()  == 'en' %}{{ produit.produit.nomen }}{% else %}{{ produit.produit.nom }}{% endif %}

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"cat_badge\" >
                                        {% if app.request.getLocale()  == 'en' %}{{ produit.produit.categorie.nomEn }}{% else %}{{ produit.produit.categorie.nom }}{% endif %}
                                    </span>





\t\t\t\t\t\t<div class=\"row\" style=\"position: absolute;  bottom: 10px;left: 0;right: 0\">
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-xs-6 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\" price  div_card\" style=\"padding-left: 14px;
\t\t\t\t\t\t\t\t{% if (produit.produit.finalPrice[\"is_promo\"] == false) or( produit.produit.finalPrice[\"is_promo\"] == true and produit.produit.numProduitPromo>1 ) %}
\t\t\t\t\t\t\t\t\t\tpadding-bottom: 22px;
\t\t\t\t\t\t\t\t{% endif %}\">
                                            <span class=\"old-price\" style=\"float:left\">
                                              {% if produit.produit.finalPrice[\"is_promo\"] and produit.produit.numProduitPromo == 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t  {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}}
\t\t\t\t\t\t\t\t\t\t\t  {% elseif produit.produit.finalPrice[\"is_promo\"] and produit.produit.prixPromo and produit.produit.prixPromo > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t  {{ formated_price( produit.produit.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}}
\t\t\t\t\t\t\t\t\t\t\t  {% endif %}
                                                </span>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span  class=\"\" style=\"float:left\"> {{ formated_price( produit.produit.finalPrice[\"prix\"],app.session.get(\"pays\"))}}</span>



\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"div_card col-lg-6 col-md-6 col-xs-6 col-sm-6 text-right\"
\t\t\t\t\t\t\t\t style=\"padding-right: 20px;padding-left: 23px;\">
\t\t\t\t\t\t\t\t<div class=\"row\" id=\"quantite{{ produit.produit.id }}\"    name=\"quantite{{ produit.produit.id }}\" disabled=\"none\" hidden>

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticle{{ produit.produit.id }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"deleteArticleQuantity({{ produit.produit.id }},{{ produit.produit.prix }})\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-type=\"minus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t                             \t<span class=\"glyphicon glyphicon-minus\"></span>
\t\t\t\t\t\t\t\t\t                        \t</button>
                                                            </span>
\t\t\t\t\t\t\t\t\t\t\t<input style=\" height: 4.5rem;!important;\" type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t   id=\"qte{{ produit.produit.id }}\"
\t\t\t\t\t\t\t\t\t\t\t\t   name=\"qte{{ produit.produit.id }}\"
\t\t\t\t\t\t\t\t\t\t\t\t   class=\"form-control input-number text-center\" {% if app.session.get('panier')[produit.produit.id] is defined %} value=\"{{ app.session.get('panier')[produit.produit.id] }}\" {% else %} value=\"0\" {% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t   min=\"1\" max=\"100\" disabled>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
                                                                <button id=\"addArticle{{ produit.produit.id }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"addArticle({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-type=\"plus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
                                                            </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"\" id=\"addcart{{ produit.produit.id }}\"   name=\"addcart{{ produit.produit.id }}\">
\t\t\t\t\t\t\t\t\t{% if produit.produit.quantite == 0 %}
\t\t\t\t\t\t\t\t\t\t<button disabled type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\" background-color: #8c8586; color: white; border: 1px solid #8c8586; padding: 0 0;
    height: 43px;
    width: 43px;
    margin-bottom: 8px;

\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
\t\t\t\t\t\t\t\t                        \t<span class=\"add2cart\">
\t\t\t\t\t\t\t\t\t                      \t<i style=\"font-size: 17px;\" class=\"glyphicon glyphicon-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t                       </span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t\t\t\t{% if  produit.produit.couleurs|length > 0 %}

\t\t\t\t\t\t\t\t\t\t\t<a class=\" btn_card\" style=\"padding-top: 15px; padding-bottom: 15px;\"
\t\t\t\t\t\t\t\t\t\t\t   href=\"{{ path(\"detail_produits\",{'produitid':produit.produit.id}) }}\"  >
                                                         <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> {{ \"Acheter\" | trans }} <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_card\"
\t\t\t\t\t\t\t\t\t\t\t\t\t{#

                                                      {% if  produit.couleurs|length > 0 %}
                                                        data-toggle=\"modal\"
                                                        data-target=\"#productSetailsModalAjax{{ produit.id }}\"
                                                    {% else %}
                                                        id=\"btn-panier{{ produit.id }}\"
                                                        onclick=\"enabledivquantity({{ produit.id }},{{ produit.quantite }},{{ produit.maxcommande }})\"

                                                    {% endif %}
                                                    #}

\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"btn-panier{{ produit.produit.id }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"enabledivquantity({{ produit.produit.id }},{{ produit.produit.quantite }},{{ produit.produit.maxcommande }})\"

\t\t\t\t\t\t\t\t\t\t\t\t\tdata-loading-text=\"<i class='fa fa-spinner fa-spin '> </i> Chargement\">
                                                        <span class=\"add2cart\">
                                                            <span class=\"btnspanadd\"> {{ \"Acheter\" | trans }} <i class=\"fa fa-shopping-cart\"></i></span>
                                                        </span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>



\t\t\t<div class=\"modal fade  \" id=\"modal-panier{{ produit.produit.id }}\"
\t\t\t\t aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\" style=\"background: #ED0000;\">
\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"exampleModalLongTitle\"
\t\t\t\t\t\t\t\tstyle=\"margin-top: 11px;\">{{ \"Acheter\" | trans }} <i
\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<button style=\"opacity: 1.2;margin-top: -36px;margin-right: -10px;background-color: #ED0000\"
\t\t\t\t\t\t\t\t\ttype=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t<span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body text-center\">

\t\t\t\t\t\t\t<h3>{{ \"quantite_demander_indispo\" | trans }}
\t\t\t\t\t\t\t\t{% if app.request.getLocale()  == 'en' %}{{ produit.produit.nomen }}{% else %}{{ produit.produit.nom }}{% endif %} {{ \"est\" | trans }}
\t\t\t\t\t\t\t\t<span id=\"idinputtwo{{ produit.produit.id }}\">  </span></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.modal-content -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal fade\" id=\"modal-quantity-max{{ produit.produit.id }}\" tabindex=\"-1\" role=\"dialog\"
\t\t\t\t aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\" style=\"background: #ED0000;\">
\t\t\t\t\t\t\t<h4 class=\"modal-title text-left\" id=\"exampleModalLongTitle\"
\t\t\t\t\t\t\t\tstyle=\"margin-top: 11px;\">

\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<button style=\"opacity: 1.2;margin-top: -26px;margin-right: -10px;background-color: #ED0000\"
\t\t\t\t\t\t\t\t\ttype=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t<span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body text-center\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t{{ \"pouvez_commander_au_max\" | trans }}{{ produit.produit.maxcommande }}
\t\t\t\t\t\t\t\t{% if app.request.getLocale()  == 'en' %}{{ produit.produit.nomen }}{% else %}{{ produit.produit.nom }}{% endif %}</h3>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.modal-content -->
\t\t\t\t</div>
\t\t\t\t<!-- /.modal-dialog -->
\t\t\t</div>
\t\t{% endfor %}
\t</div>

\t{# <div class=\"row\" style=\"margin-right: 2%;margin-left: 2%\">
\t{% set pays = app.session.get('pays') %}
\t<div class=\"row\">
\t\t<div class=\"col-lg-8 col-md-9 col-sm-12\">
\t\t\t<div class=\"col-lg-12\">

\t\t\t</div>

\t\t\t<div class=\"row userInfo\">
\t\t\t\t\t<div style=\"clear:both\"></div>

\t\t\t\t<div class=\"col-xs-12 col-sm-12\">
\t\t\t\t\t<table id='favoris'>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr class=\"CartProduct cartTableHeader\">
\t\t\t\t\t\t\t<td style=\"width:20%\"> {{ \"Product\"|trans }}</td>
\t\t\t\t\t\t\t<td style=\"width:15%\" >{{\"Details\"|trans}}</td>
\t\t\t\t\t\t\t<td style=\"width:35%\" ></td>
\t\t\t\t\t\t\t<td style=\"width:10%\" class=\"delete\">&nbsp;</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% for key,fav in favoris %}
\t\t\t\t\t\t\t\t<tr class=\"CartProduct\" id='fav{{fav.produit.id}}'>
\t\t\t\t\t\t\t\t\t<td style=\"width:10%\" class=\"CartProductThumb\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<img style=\"  background-repeat: no-repeat;  background-size: contain;height: 86px\" alt=\"{{ fav.produit.nom }}\"
\t\t\t\t\t\t\t\t\t\t\t\t data-original=\"/uploads/produits/{{ fav.produit.image }}\"
\t\t\t\t\t\t\t\t\t\t\t\t src=\"{% if fav.produit.image and fav.produit.image != \"\" %}/uploads/produits/{{ fav.produit.image }}
                                                         {% else %}{{ asset('/assets/img/default_t_e.jpg') }}{% endif %}\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td style=\"width:40%\">
\t\t\t\t\t\t\t\t\t\t<div class=\"CartDescription\">
\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"font-size: 13px\" href=\"{{ path('list_produit',{'keyword':fav.produit.nom}) }}\" >{{fav.produit.nom}}</a>

\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ formated_price(fav.produit.prix ,app.session.get('pays')) }}

\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td style=\"width:40%\" class=\"delete\">
\t\t\t\t\t\t\t\t\t\t<a title=\"Delete\" onclick=\"deletefavoris({{ fav.produit.id }},{{key}})\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-trash fa-2x\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div style=\"clear:both\"></div>

\t\t\t\t<div class=\"col-lg-12 clearfix\" hidden>
\t\t\t\t\t<ul class=\"pager\">
\t\t\t\t\t\t<li class=\"previous pull-right\">
\t\t\t\t\t\t\t<a href=\"{{ path(\"homepage_frontend\") }}\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t{{ \"Continuer vos achats\" | trans }}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"next pull-left\">
\t\t\t\t\t\t\t<a href=\"{{ path(\"compte\") }}\">
\t\t\t\t\t\t\t\t&larr; {{ \"Mon compte\" | trans }}</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>




\t\t\t</div>
\t\t\t<!--/row end-->

\t\t</div>
\t\t<div class=\"col-lg-3 col-md-3 col-sm-5\"></div>
\t</div>
\t#}
\t<!--/row-->


\t<style>
\t\t.owl-buttons {
\t\t\tdisplay: block;
\t\t}

\t\t.owl-carousel:hover .owl-buttons {
\t\t\tdisplay: block;
\t\t}

\t\t.owl-item {
\t\t\ttext-align: center;
\t\t\tpadding-left: 10px;
\t\t\tpadding-right: 10px;
\t\t}


\t\t.owl-theme .owl-controls .owl-buttons div {
\t\t\tbackground: transparent;
\t\t\tcolor: #869791;
\t\t\tfont-size: 40px;
\t\t\tline-height: 50px;
\t\t\tmargin-top: 150px;
\t\t\tposition: absolute;
\t\t\ttop: 0;

\t\t}


\t\t.owl-theme .owl-controls .owl-buttons .owl-prev {
\t\t\tleft: 0;
\t\t\tpadding-left: 20px;
\t\t}

\t\t.owl-theme .owl-controls .owl-buttons .owl-next {
\t\t\tright: 0;
\t\t\tpadding-right: 20px;
\t\t}

\t\t.modalerror {
\t\t\ttop: 50px;
\t\t\tright: 0;
\t\t\tbottom: 0;
\t\t\tleft: 0;
\t\t\tz-index: 10052;
\t\t}

\t</style>

\t<!-- /main container -->
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>

\t<script>
\t\t\$(document).ready(function () {

\t\t\tvar owl = \$(\"#owl-demo\");
\t\t\towl.owlCarousel({

\t\t\t\t//  itemsDesktop : true,
\t\t\t\t//  itemsDesktopSmall : false,
\t\t\t\t/// itemsTablet: false,
\t\t\t\t// itemsMobile : false,
\t\t\t\tstartPosition: 0,
\t\t\t\trtl: false,

\t\t\t\titems: 4,
\t\t\t\tnavigation: true,
\t\t\t\tloop: false,
\t\t\t\tautoplay: true,
\t\t\t\tautoplayHoverPause: true,
\t\t\t\tnavigationText: ['<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-left fa-stack-1x fa-inverse\"></i></span>', '<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-right fa-stack-1x fa-inverse\"></i></span>'],

\t\t\t\titemsDesktop: [1100, 3], //5 items between 1100px and 901px
\t\t\t\titemsDesktopSmall: [900, 2], // betweem 900px and 601px
\t\t\t\titemsTablet: [700, 1], //2 items between 600 and 0
\t\t\t\titemsMobile: [500, 1] // itemsMobile disabled - inherit from itemsTablet option

\t\t\t});

\t\t\t// Custom Navigation Events
\t\t\t\$(\".owl-carousel-arrows .next\").click(function () {
\t\t\t\towl.trigger('owl.next');
\t\t\t});

\t\t\t\$(\".owl-carousel-arrows .prev\").click(function () {
\t\t\t\towl.trigger('owl.prev');
\t\t\t});
\t\t});
\t</script>
\t<script>
\t\t\$(document).ready(function () {

\t\t\tvar owl = \$(\"#owl-demopromos\");
\t\t\towl.owlCarousel({

\t\t\t\t//  itemsDesktop : true,
\t\t\t\t//  itemsDesktopSmall : false,
\t\t\t\t/// itemsTablet: false,
\t\t\t\t// itemsMobile : false,
\t\t\t\tstartPosition: 0,
\t\t\t\trtl: false,

\t\t\t\titems: 4,
\t\t\t\tnavigation: true,
\t\t\t\tloop: false,
\t\t\t\tautoplay: true,
\t\t\t\tautoplayHoverPause: true,
\t\t\t\tnavigationText: ['<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-left fa-stack-1x fa-inverse\"></i></span>', '<span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-right fa-stack-1x fa-inverse\"></i></span>'],

\t\t\t\titemsDesktop: [1100, 3], //5 items between 1100px and 901px
\t\t\t\titemsDesktopSmall: [900, 2], // betweem 900px and 601px
\t\t\t\titemsTablet: [700, 1], //2 items between 600 and 0
\t\t\t\titemsMobile: [500, 1] // itemsMobile disabled - inherit from itemsTablet option

\t\t\t});

\t\t\t// Custom Navigation Events
\t\t\t\$(\".owl-carousel-arrows .next\").click(function () {
\t\t\t\towl.trigger('owl.next');
\t\t\t});

\t\t\t\$(\".owl-carousel-arrows .prev\").click(function () {
\t\t\t\towl.trigger('owl.prev');
\t\t\t});
\t\t});
\t</script>
\t<script>
\t\tfunction changeCouleur(id) {
\t\t}

\t\tfunction addfavnonConnect() {
\t\t\t\$(\"#myModal\").modal({backdrop: true});

\t\t}

\t\t\$('#couleur').on('click', 'li', function () {
\t\t\t\$(this).addClass(\"selected\"); // Assign the class here
\t\t\t//   var value = \$('#couleur').val();
\t\t\tvar value = \$(this).attr('value');
\t\t\tvar produit = parseInt(\$(\"#idproduit\").val());
\t\t\t\$.ajax({
\t\t\t\turl: \"{{ (path('getSizeCouleur')) }}\",
\t\t\t\tdataType: 'Json',
\t\t\t\tdata: {\"couleurid\": value, \"produitid\": produit},
\t\t\t\ttype: 'GET',
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tvar nameselect = \"sizes\" + produit
\t\t\t\t\t\$('select[name=nameselect]').empty();
\t\t\t\t\tif (data[0]) {
\t\t\t\t\t\tstudent = data[0];
\t\t\t\t\t\t\$('select[name=nameselect]').append('<option selected value=\"' + student['id'] + '\">' + student['libelle'] + '</option>');

\t\t\t\t\t}

\t\t\t\t\tfor (i = 1; i < data.length; i++) {
\t\t\t\t\t\tstudent = data[i];
\t\t\t\t\t\t\$('select[name=\"sizes').append('<option  value=\"' + student['id'] + '\">' + student['libelle'] + '</option>');
\t\t\t\t\t}
\t\t\t\t\t\$(\"select\").select2();
\t\t\t\t\t//\t\$(\"#quantitymodal\" + produit).val(1);
\t\t\t\t}
\t\t\t});
\t\t});

\t\tfunction changeImagecouleur(produitid, couleurid, image) {
\t\t\tif (image) {
\t\t\t\tchangeImage(image, produitid)
\t\t\t}
\t\t\tvar produit = parseInt(produitid);
\t\t\tvar couleur = parseInt(couleurid);

\t\t\t\$(\"#quantitymodal\" + produitid).val(1);//rahma addd to

\t\t\t\$.ajax({
\t\t\t\turl: \"{{ (path('getSizeCouleur')) }}\",
\t\t\t\tdataType: 'Json',
\t\t\t\tdata: {\"couleurid\": couleur, \"produitid\": produit},
\t\t\t\ttype: 'GET',
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tvar nameselect = \"sizes\" + produitid
\t\t\t\t\t\$('select[name=' + nameselect + ']').empty();

\t\t\t\t\tif (data[0]) {
\t\t\t\t\t\tsize = data[0];
\t\t\t\t\t\t\$('select[name=' + nameselect + ']').append('<option selected value=\"' + size['id'] + '\">' + size['libelle'] + '</option>');
\t\t\t\t\t}

\t\t\t\t\tfor (i = 1; i < data.length; i++) {
\t\t\t\t\t\tsize = data[i];
\t\t\t\t\t\t\$('select[name=' + nameselect + ']').append('<option  value=\"' + size['id'] + '\">' + size['libelle'] + '</option>');
\t\t\t\t\t}

\t\t\t\t\t//\t\$(\"#quantitymodal\" + produit).val(1);
\t\t\t\t}
\t\t\t});

\t\t}

\t\tfunction changeImage(image, id) {

\t\t\tdocument.getElementById(\"imageproduit\" + id).src = '/uploads/produits/' + image;
\t\t\tvar images = document.getElementsByName(\"img\");
\t\t\tfor (i in images) {
\t\t\t\timages[i].style = 'width: 100px;\\n' +
\t\t\t\t\t\t'    height: 100px;\\n' +
\t\t\t\t\t\t'    background-size: cover;\\n' +
\t\t\t\t\t\t'    border-width: 2px;\\n' +
\t\t\t\t\t\t'    border-color: #dcdbdb;\\n' +
\t\t\t\t\t\t'    border-style: solid;';
\t\t\t}
\t\t\tdocument.getElementById(image).style = 'width: 100px;\\n' +
\t\t\t\t\t'    height: 100px;\\n' +
\t\t\t\t\t'    background-size: cover;\\n' +
\t\t\t\t\t'    border-width: 2px;\\n' +
\t\t\t\t\t'    border-color: #ED0000;\\n' +
\t\t\t\t\t'    border-style: solid;';

\t\t}
\t</script>
\t<script type=\"text/javascript\">
\t\tfunction addArticleSize(id) {

\t\t\tvar selectsizes = document.getElementById(\"sizes\" + id);
\t\t\tvar sizeid = selectsizes.options[selectsizes.selectedIndex].value;
\t\t\tvar qte = parseInt(\$(\"#quantitymodal\" + id).val());
\t\t\t//alert(qte);

\t\t\t\$.ajax({
\t\t\t\turl: \"{{ (path('size_from_id')) }}\",
\t\t\t\tdataType: 'Json',
\t\t\t\tdata: {\"sizeid\": sizeid},
\t\t\t\ttype: 'GET',
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tvar quantite = data
\t\t\t\t\tif (qte > quantite) {

\t\t\t\t\t\t//  alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
\t\t\t\t\t\tdocument.getElementById(\"idinputtwo\" + id).innerHTML = quantite;

\t\t\t\t\t\t\$(\"document\").ready(function () {

\t\t\t\t\t\t\t//was  \$('#modal-panier' + id).modal({backdrop: 'static', keyboard: false});
\t\t\t\t\t\t\t\$('#modal-panier' + id).modal(\"show\");


\t\t\t\t\t\t})


\t\t\t\t\t} else {
\t\t\t\t\t\taddArticlewithsize(id, sizeid, qte);
\t\t\t\t\t\t\$('#productSetailsModalAjax' + id).modal('hide');

\t\t\t\t\t}

\t\t\t\t}
\t\t\t});

\t\t}

\t\tfunction changeSize(id) {
\t\t\t//\$(\"#quantitymodal\" + id).val(1);
\t\t}

\t\tfunction goToProdDetail(produitid) {
\t\t\tconsole.log(\"produitid\" + produitid)
\t\t\tconsole.log(produitid)
\t\t\t\$.ajax({
\t\t\t\t'url': Routing.generate('detail_produits', {'produitid': produitid}),
\t\t\t\t'success': function (r) {
\t\t\t\t\t\$('#div1').html(r);
\t\t\t\t}
\t\t\t});


\t\t}

\t\tfunction enabledivquantity(id, quantite, max) {
\t\t\tvar qte = parseInt(\$(\"#qte\" + id).val());

\t\t\tif (qte + 1 > quantite) {

\t\t\t\t//alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
\t\t\t\tdocument.getElementById(\"idinputtwo\" + id).innerHTML = quantite;

\t\t\t\t\$(\"document\").ready(function () {
\t\t\t\t\t//wasss \$('#modal-panier' + id).modal({backdrop: 'static', keyboard: false});
\t\t\t\t\t\$('#modal-panier' + id).modal(\"show\");

\t\t\t\t})
\t\t\t} else if (qte + 1 > max) {
\t\t\t\t\$(\"document\").ready(function () {
\t\t\t\t\t//was \$('#modal-quantity-max' + id).modal({backdrop: 'static', keyboard: false});
\t\t\t\t\t\$('#modal-quantity-max' + id).modal(\"show\");
\t\t\t\t})
\t\t\t} else if (qte >= 0) {
\t\t\t\tvar quantities = document.querySelectorAll(\"[id=quantite\" + id + \"]\");
\t\t\t\tvar btncarts = document.querySelectorAll(\"[id=addcart\" + id + \"]\");
\t\t\t\tfor (var i = 0; i < btncarts.length; i++) {
\t\t\t\t\tbtncarts[i].style.display = \"none\";
\t\t\t\t}
\t\t\t\tfor (var i = 0; i < quantities.length; i++) {
\t\t\t\t\tquantities[i].style.display = \"block\";
\t\t\t\t}


\t\t\t\taddArticle(id, quantite, max);
\t\t\t}
\t\t}

\t\tfunction plusquantity(id) {

\t\t\tvar selectsizes = document.getElementById(\"sizes\" + id);
\t\t\tvar sizeid = selectsizes.options[selectsizes.selectedIndex].value;
\t\t\tvar qte = parseInt(\$(\"#quantitymodal\" + id).val());

\t\t\t\$.ajax({
\t\t\t\turl: \"{{ (path('size_from_id')) }}\",
\t\t\t\tdataType: 'Json',
\t\t\t\tdata: {\"sizeid\": sizeid},
\t\t\t\ttype: 'GET',
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tvar quantite = data;
\t\t\t\t\tvar qtee = parseInt(\$(\"#quantitymodal\" + id).val()) + 1;

\t\t\t\t\tif (qtee > quantite) {

\t\t\t\t\t\t//alert(\"Vous ne pouvez commander que \" +quantite+\" produit\" )
\t\t\t\t\t\tdocument.getElementById(\"idinputtwo\" + id).innerHTML = quantite;

\t\t\t\t\t\t\$(\"document\").ready(function () {

\t\t\t\t\t\t\t//wass \$('#modal-panier' + id).modal({backdrop: 'static', keyboard: false});
\t\t\t\t\t\t\t\$('#modal-panier' + id).modal(\"show\");

\t\t\t\t\t\t})

\t\t\t\t\t} else {
\t\t\t\t\t\tvar qte = parseInt(\$(\"#quantitymodal\" + id).val()) + 1;
\t\t\t\t\t\tvar qte_input = document.querySelectorAll(\"[id=quantitymodal\" + id + \"]\");
\t\t\t\t\t\tfor (var i = 0; i < qte_input.length; i++) {
\t\t\t\t\t\t\tqte_input[i].value = qte;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t}
\t\t\t});


\t\t\t/*
            was befor my change
            var qte = parseInt(\$(\"#quantitymodal\" + id).val()) + 1;
            var qte_input = document.querySelectorAll(\"[id=quantitymodal\" + id+\"]\");
            for(var i = 0; i < qte_input.length; i++){
                qte_input[i].value = qte;
            }*/
\t\t}

\t\tfunction moinsquantity(id) {
\t\t\tvar qte = parseInt(\$(\"#quantitymodal\" + id).val()) - 1;
\t\t\tif (qte > 0) {
\t\t\t\t\$(\"#quantitymodal\" + id).val(qte);
\t\t\t} else {
\t\t\t\t\$(\"document\").ready(function () {
\t\t\t\t\t\$('#modal-quantity').modal({backdrop: 'static', keyboard: false});
\t\t\t\t})

\t\t\t}
\t\t}

\t\t<!-- ---- -->

\t\tfunction plusquantityD(id, quantity, max) {

\t\t\tvar qte = parseInt(\$(\"#qte\" + id).val()) + 1;
\t\t\tif (qte > quantity) {
\t\t\t\tdocument.getElementById(\"idinputtwo\" + id).innerHTML = quantity;

\t\t\t\t\$(\"document\").ready(function () {
\t\t\t\t\t//was  \$('#modal-panier' + id).modal({  backdrop: 'static',    keyboard: false  });
\t\t\t\t\t\$('#modal-panier' + id).modal(\"show\");


\t\t\t\t})
\t\t\t} else if (qte > max) {
\t\t\t\t\$(\"document\").ready(function () {
\t\t\t\t\t//was  \$('#modal-quantity-max'+id).modal({ backdrop: 'static',   keyboard: false});

\t\t\t\t\t\$('#modal-quantity-max' + id).modal(\"show\");

\t\t\t\t})
\t\t\t} else {
\t\t\t\t//  \$(\"#qte\" + id).val(qte);
\t\t\t\tvar qte_input = document.querySelectorAll(\"[id=qte\" + id + \"]\");

\t\t\t\tfor (var i = 0; i < qte_input.length; i++) {
\t\t\t\t\tqte_input[i].value = qte;
\t\t\t\t}
\t\t\t}

\t\t}

\t\tfunction moinquantityD(id, quantity, max) {

\t\t\tvar qte = parseInt(\$(\"#qte\" + id).val()) - 1;
\t\t\t//  \$(\"#qte\" + id).val(qte);
\t\t\tvar qte_input = document.querySelectorAll(\"[id=qte\" + id + \"]\");

\t\t\tif (qte > 0) {
\t\t\t\tfor (var i = 0; i < qte_input.length; i++) {
\t\t\t\t\tqte_input[i].value = qte;
\t\t\t\t}
\t\t\t} else {
\t\t\t\t\$(\"document\").ready(function () {
\t\t\t\t\t\$('#modal-quantity').modal({backdrop: 'static', keyboard: false});
\t\t\t\t})

\t\t\t}
\t\t}

\t\tfunction addArticlee(id, quantity, max) {
\t\t\tvar qte = parseInt(\$(\"#qte\" + id).val());
\t\t\tvar qte_input = document.querySelectorAll(\"[id=qte\" + id + \"]\");

\t\t\t//  console.log(\"eeeee\");
\t\t\t//   console.log(qte)


\t\t\tif (qte > quantity) {
\t\t\t\tdocument.getElementById(\"idinputtwo\" + id).innerHTML = quantity;

\t\t\t\t\$(\"document\").ready(function () {
\t\t\t\t\t//wasss  \$('#modal-panier' + id).modal({                         backdrop: 'static',                         keyboard: false                     });

\t\t\t\t\t\$('#modal-panier' + id).modal(\"show\");

\t\t\t\t})
\t\t\t} else if (qte > max) {
\t\t\t\t\$(\"document\").ready(function () {
\t\t\t\t\t//was  \$('#modal-quantity-max'+id).modal({  backdrop: 'static',  keyboard: false});

\t\t\t\t\t\$('#modal-quantity-max' + id).modal(\"show\");

\t\t\t\t})
\t\t\t} else {
\t\t\t\tfor (var i = 0; i < qte_input.length; i++) {
\t\t\t\t\tqte_input[i].value = qte;
\t\t\t\t}
\t\t\t\t//   alert(\"qtettee\"+qte)
\t\t\t\tvar \$this = \$(\"#addArticlee\" + id);
\t\t\t\t\$.ajax({
\t\t\t\t\turl: Routing.generate('add_many_quantity_to_cart', {id: id, qte: qte}), success: function (result) {
\t\t\t\t\t\t\$(\".my_nav_bar\").html(result);
\t\t\t\t\t\t\$(\".total_price_cart_empty\").html(\$(\".total_price_cart\").html());
\t\t\t\t\t\t\$(\"img.lazy\").lazyload({
\t\t\t\t\t\t\tthreshold: 50
\t\t\t\t\t\t});
\t\t\t\t\t\t\$(window).load(function () {
\t\t\t\t\t\t\t\$(\"html,body\").trigger(\"scroll\");
\t\t\t\t\t\t});
\t\t\t\t\t\t\$this.button('reset');
\t\t\t\t\t\t//hide modal after add to cart
\t\t\t\t\t\t// \$('#productSetailsModalAjax'+id).modal('hide');
\t\t\t\t\t\t\$('.modal').modal('hide');

\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}
\t</script>
{% endblock %}
", "@Frontend/Profile/favoris.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\Profile\\favoris.html.twig");
    }
}
