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

/* @Frontend/panier/panier.html.twig */
class __TwigTemplate_901b903ab833a8dc3b37b0ef302e257977f4cd57889f926b7a68b5dd5cd14dfa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'breadcrump' => [$this, 'block_breadcrump'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "FrontendBundle:Layouts:layoutBreadcrumps.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/panier/panier.html.twig"));

        // line 1
        $context["totalHT"] = 0;
        // line 2
        $context["totalTTC"] = 0;
        // line 3
        $context["refTva"] = [];
        // line 7
        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutBreadcrumps.html.twig", "@Frontend/panier/panier.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pickmeup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_breadcrump($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrump"));

        // line 18
        echo "
    <style>
        /* Custom style for changing separator  */
        .breadcrumb-item + .breadcrumb-item::before {
            content: \">\";
        }
    </style>

    <ul class=\"breadcrumb\" style=\"margin-right: 2%;margin-left: 2%\">


        <li class=\"breadcrumb-item \">
            <a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Panier"), "html", null, true);
        echo "</a></li>

        <li class=\"breadcrumb-item\">
            <a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #a1a1a1 !important;\"
               >";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mode de reception"), "html", null, true);
        echo "</a></li>


        <li  class=\"breadcrumb-item\" style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #a1a1a1 !important;\">
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("validation"), "html", null, true);
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 45
        echo "    <style>
        .btnb {
            padding: 9px;
        }
    </style>

    <!--/.row-->



    <div class=\"row \" style=\"margin-right: 2%;margin-left: 2%\">
        <form name=\"aa\" method=\"get\" action=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_cart");
        echo "\">
            <div class=\"row userInfo\">
                <div class=\"col-xs-12 col-sm-12 \">
                    ";
        // line 90
        echo "

                    <div class=\"cartContent col-lg-9 \">
                        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashBag", []), "get", [0 => "produitfini"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 94
            echo "                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">×</span>
                                </button>
                                ";
            // line 98
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "
                        <table class=\"cartTable table-responsive w100\" id=\"TablepanierID\">
                            <tbody>
                            <tr class=\"CartProduct cartTableHeader\">
                                <td style=\"width:10%\"> ";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product"), "html", null, true);
        echo "</td>
                                <td style=\"width:15%\" class=\"hidden-xs hidden-sm\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details"), "html", null, true);
        echo "</td>

                                ";
        // line 108
        if ((isset($context["produit"]) || array_key_exists("produit", $context))) {
            // line 109
            echo "
                                ";
            // line 110
            if ($this->getAttribute(($context["size"] ?? null), $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), [], "array", true, true)) {
                // line 111
                echo "
                                <td style=\"width:35%\"></td>
                                ";
            }
            // line 114
            echo "                                ";
        }
        // line 115
        echo "                                <td style=\"width:10%\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QNT"), "html", null, true);
        echo "</td>
                                <td style=\"width:10%\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total"), "html", null, true);
        echo "</td>
                                <td style=\"width:10%\" class=\"delete\">&nbsp;</td>

                            </tr>
                            ";
        // line 120
        $context["total_price"] = 0;
        // line 121
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 122
            echo "                                ";
            $context["nb_article"] = $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", []), [], "array");
            // line 123
            echo "


                                <tr class=\"CartProduct product-";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
            echo "\">
                                    <td class=\"CartProductThumb\">
                                        <div>
                                            <a href=\"/\">
                                                <img class=\"lazy\"
                                                     alt=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", []), "html", null, true);
            echo "\"
                                                     data-original=\"/uploads/produits/";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "image", []), "html", null, true);
            echo "\"
                                                     src=\"";
            // line 133
            if (($this->getAttribute($context["produit"], "image", []) && ($this->getAttribute($context["produit"], "image", []) != ""))) {
                echo "/uploads/produits/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "image", []), "html", null, true);
                echo "
                                                           ";
            } else {
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
            }
            echo "\">

                                            </a>

                                            <div class=\"CartDescription hidden-lg hidden-md\">
                                                <h5><a href=\"#\">";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", []), "html", null, true);
            echo "</a></h5>
                                                <div class=\"price\" style=\"color: #374649 !important;\">
                                                    <span>
                                                        ";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($context["produit"], "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                    </td>
                                    <td style=\"width: 20% \" class=\"hidden-xs hidden-sm\">
                                        <div class=\"CartDescription\">
                                            <h5><a href=\"#\">";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", []), "html", null, true);
            echo "</a></h5>
                                            <div class=\"price\" style=\"color: #374649 !important;\">
                                                    <span>
                                                        ";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($context["produit"], "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "
                                                    </span>
                                            </div>
                                        </div>
                                    </td>
                                    ";
            // line 159
            if ($this->getAttribute(($context["size"] ?? null), $this->getAttribute($context["produit"], "id", []), [], "array", true, true)) {
                // line 160
                echo "                                    <td style=\"width: 40%\">
                                            ";
                // line 161
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["produit"], "sizes", []));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 162
                    echo "                                                ";
                    if (($this->getAttribute(($context["size"] ?? null), $this->getAttribute($context["produit"], "id", []), [], "array", true, true) && $this->getAttribute($this->getAttribute(($context["size"] ?? null), $this->getAttribute($context["produit"], "id", []), [], "array", false, true), $this->getAttribute($context["s"], "id", []), [], "array", true, true))) {
                        // line 163
                        echo "                                                    <div class=\"row\" id='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                        echo "'>
                                                        <p style=\"float:left;display: inline-block;border: 2px solid #ddd;background-color: ";
                        // line 164
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "couleur", []), "codeCouleur", []), "html", null, true);
                        echo ";color: transparent;height: 30px;width: 30px;\"></p>
                                                        <h4 style=\"padding-left: 10px; padding-top: 4px;display: inline-block; float:left\">
                                                            ";
                        // line 166
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Taille"), "html", null, true);
                        echo " :";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "libelle", []), "html", null, true);
                        echo " Qte
                                                            :";
                        // line 167
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["size"] ?? $this->getContext($context, "size")), $this->getAttribute($context["produit"], "id", []), [], "array"), $this->getAttribute($context["s"], "id", []), [], "array"), "html", null, true);
                        echo "</h4>

                                                        <a title=\"Delete\"
                                                           style=\"display: inline-block;float:right;margin-right: 50px; \"
                                                           onclick=\"deleteSize(";
                        // line 171
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["size"] ?? $this->getContext($context, "size")), $this->getAttribute($context["produit"], "id", []), [], "array"), $this->getAttribute($context["s"], "id", []), [], "array"), "html", null, true);
                        echo ",
                                                             ";
                        // line 172
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", []), "html", null, true);
                        echo ",";
                        if ($this->getAttribute($context["produit"], "numProduitPromo", [])) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "numProduitPromo", []), "html", null, true);
                        } else {
                            echo "null ";
                        }
                        echo ", ";
                        echo twig_escape_filter($this->env, ($this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", []), [], "array") * $this->getAttribute($context["produit"], "prix", [])), "html", null, true);
                        echo ",";
                        if ($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "isDelivered", [])) {
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "isDelivered", []), "html", null, true);
                        } else {
                            echo "null ";
                        }
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "minprixLivraison", []), "html", null, true);
                        echo ",";
                        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
                            echo "'true'";
                        } else {
                            echo "'false'";
                        }
                        echo ")\">
                                                            x
                                                        </a>
                                                    </div>
                                                ";
                    }
                    // line 177
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                echo "
                                    </td>
                                    ";
            }
            // line 181
            echo "
                                    <td>
                                        ";
            // line 183
            if ((twig_length_filter($this->env, $this->getAttribute($context["produit"], "couleurs", [])) > 0)) {
                // line 184
                echo "                                            <input type=\"text\" class=\"quanitySniper\"
                                                   value=\"";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", []), [], "array"), "html", null, true);
                echo "\"
                                                   name=\"qte[]\" id=\"qte";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\" readonly=\"readonly\">
                                        ";
            } else {
                // line 188
                echo "                                            ";
                // line 194
                echo "                                            <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                                <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticlep";
                // line 198
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\"
                                                                        onclick=\"deleteArticleQuantityp(";
                // line 199
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
                // line 207
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\"
                                                           name=\"qte";
                // line 208
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\"
                                                           class=\"form-control input-number text-center\" ";
                // line 209
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "panier"], "method", false, true), $this->getAttribute($context["produit"], "id", []), [], "array", true, true)) {
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute($context["produit"], "id", []), [], "array"), "html", null, true);
                    echo "\" ";
                } else {
                    echo " value=\"0\" ";
                }
                // line 210
                echo "                                                           min=\"1\" max=\"100\" disabled>
                                                    <span class=\"input-group-btn\">
                                                                <button id=\"addArticlep";
                // line 212
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\"
                                                                        onclick=\"addArticlep(";
                // line 213
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
                                        ";
            }
            // line 223
            echo "
                                    </td>

                                    <td class=\"price\">
                                        <div class=\"price\" style=\" \">
                                                <span id=\"price";
            // line 228
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
            echo "\">
                                                    ";
            // line 229
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($context["produit"], "getTotalPrice", [0 => $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", []), [], "array")], "method"), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
            echo "
                                                </span>
                                            <span>&nbsp;";
            // line 231
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "devise", []), "html", null, true);
            echo "</span>
                                        </div>


                                        ";
            // line 235
            if (($this->getAttribute($this->getAttribute($context["produit"], "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", []), [], "array") >= $this->getAttribute($context["produit"], "numProduitPromo", [])))) {
                // line 236
                echo "                                            <div class=\"old-price\">
                                                    <span id=\"promotion";
                // line 237
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\">
                                                        ";
                // line 238
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($context["produit"], "getTotalPrice", [0 => $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", []), [], "array")], "method"), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
                echo "
                                                   </span>
                                                <span>&nbsp;";
                // line 240
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "devise", []), "html", null, true);
                echo "</span>
                                            </div>


                                        ";
            }
            // line 245
            echo "

                                    </td>

                                    <td class=\"delete\"
                                            ";
            // line 251
            echo "                                        onclick=\"deleteArticle(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", []), [], "array") * $this->getAttribute($context["produit"], "prix", [])), "html", null, true);
            echo ")\">
                                        <a title=\"Delete\"> <i class=\"glyphicon glyphicon-trash fa-2x\" style=\"color: #ED0000\"></i></a>
                                    </td>

                                </tr>
                                ";
            // line 256
            $context["total_price"] = (($context["total_price"] ?? $this->getContext($context, "total_price")) + $this->getAttribute($this->getAttribute($context["produit"], "getTotalPrice", [0 => $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", []), [], "array")], "method"), "prix", [], "array"));
            // line 257
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "                            </tbody>
                        </table>
                        <div class=\"cartFooter w100\">
                            <div class=\"box-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"/\" class=\"btn  \"
                                       style=\"padding-right: 10px;padding-left: 10px;line-height: 40px\">
                                        <i class=\"fa fa-arrow-left\"></i>&nbsp; ";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Continuez vos achats"), "html", null, true);
        echo "
                                    </a>
                                </div>


                                <div class=\"pull-right\">

                                    ";
        // line 279
        echo "                                    <a id=\"btn-livrer\"

                                            ";
        // line 281
        if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
            // line 282
            echo "                                                href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"
                                            ";
        }
        // line 284
        echo "                                       title=\"\"
                                            ";
        // line 285
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) && (twig_length_filter($this->env, ($context["panier"] ?? $this->getContext($context, "panier"))) > 0))) {
            // line 286
            echo "                                                href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verification_panier");
            echo "\"
                                            ";
        }
        // line 288
        echo "
                                        style=\"margin-bottom:20px;\">
                                        <button class=\"btn  btn_card_square w100 \" type=\"button\">

                                            ";
        // line 292
        if (( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) && (twig_length_filter($this->env, ($context["panier"] ?? $this->getContext($context, "panier"))) > 0))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Se Connecter"), "html", null, true);
            echo "
                                            ";
        } elseif (($this->getAttribute(        // line 293
($context["app"] ?? $this->getContext($context, "app")), "user", []) && (twig_length_filter($this->env, ($context["panier"] ?? $this->getContext($context, "panier"))) <= 0))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Panier vide"), "html", null, true);
            echo "
                                            ";
        } else {
            // line 295
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("continuer"), "html", null, true);
            echo "
                                            ";
            // line 303
            echo "


                                             ";
        }
        // line 307
        echo "                                            <i class=\"fa fa-arrow-right\"></i>
                                              </button>

                                       </a>



                            </div>
                        </div>
                    </div>
                  </div>
                <!--cartContent-->
                    ";
        // line 408
        echo "

                   ";
        // line 415
        echo "

                    <!--/ cartFooter -->

                </div>
            </div>

        </form>

        <!--/rightSidebar-->

    </div>
    <!--/.row-->

    <!-- Modal -->
    <div class=\"modal fade\" id=\"modal-coupon\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"row transitionfx text-left\">

                    <div class=\"modal-header\" style=\"background: #df0c36;\">
                        <h4 class=\"modal-title\" id=\"exampleModalLongTitle\"
                            style=\"padding-left: 10px;margin-top: 11px;font-family: Roboto-Regular, sans-serif!important;color: white\">
                            ";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Vérification coupon"), "html", null, true);
        echo "</h4>

                        <button style=\"padding-right: 10px;opacity: 1.2;margin-top: -36px;background-color: #df0c36\"
                                type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body text-center\">
                        <h3 id=\"input_coupon_result\"></h3>
                    </div>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <script>
        function verifcoupon() {
            var coupon_value = \$(\"#couponinput\").val();
            var totalprice = parseFloat(\$('#total-price').html());
            console.log(totalprice);
            \$.ajax({
                url: \"";
        // line 463
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verificationCoupon");
        echo "\",
                dataType: 'Json',
                data: {\"coupon\": coupon_value},
                type: 'GET',
                success: function (coupon) {
                    if (coupon['result'] == true) {
                        \$.ajax({
                            url: \"";
        // line 470
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("executeCoupon");
        echo "\",
                            dataType: 'Json',
                            data: {\"coupon\": coupon_value},
                            type: 'GET',
                            success: function (data) {
                                if (data['result'] == true) {

                                    if (data['type'] == 1) {
                                        var montant = parseFloat(coupon['montant'])
                                        console.log('montant'.montant)
                                        console.log('total'.totalprice)
                                        if (montant > totalprice) {
                                            \$input_coupon = \$(\"#input_coupon_result\").html('Votre commande doit avoir un montant superieur à' + montant + '";
        // line 482
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "devise", []), "html", null, true);
        echo "');
                                            \$(\"document\").ready(function () {
                                                \$('#modal-coupon').modal({
                                                    backdrop: 'static',
                                                    keyboard: false
                                                });
                                            })
                                        } else {
                                            \$('#total-price').html((totalprice - montant).toFixed(3));
                                            \$(\".total_price_cart_empty\").html((totalprice - montant).toFixed(3));
                                            \$(\".total_price_cart\").html((totalprice - montant).toFixed(3));
                                        }

                                    }
                                    if (data['type'] == 2) {

                                        var pourcentage = parseFloat(coupon['pourcentage'])
                                        console.log(coupon['pourcentage'])
                                        console.log(totalprice)
                                        \$('#total-price').html((totalprice / 100 * (100 - pourcentage)).toFixed(3));
                                        \$(\".total_price_cart_empty\").html((totalprice / 100 * (100 - pourcentage)).toFixed(3));
                                        \$(\".total_price_cart\").html((totalprice / 100 * (100 - pourcentage)).toFixed(3));
                                    }

                                } else if (data['result'] == false && data['ancien'] !== undefined) {

                                    if (data['ancientype'] == 1) {

                                        var montant_ancien_reduit = parseFloat(totalprice + data['ancien'])
                                        console.log('montant_ancien_reduit1' + montant_ancien_reduit)
                                    }
                                    if (data['ancientype'] == 2) {
                                        var montant_ancien_reduit = totalprice + (totalprice / (100 - data['ancien']) * data['ancien']);
                                        console.log('montant_ancien_reduit2' + montant_ancien_reduit)
                                    }

                                    if (data['type'] == 1) {
                                        var price = parseFloat(montant_ancien_reduit - data['montant'])
                                        console.log('price1' + price)

                                        if (montant > montant_ancien_reduit) {

                                            \$input_coupon = \$(\"#input_coupon_result\").html('Votre commande doit avoir un montant superieur à' + montant + ' ";
        // line 524
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "devise", []), "html", null, true);
        echo "');
                                            \$(\"document\").ready(function () {
                                                \$('#modal-coupon').modal({
                                                    backdrop: 'static',
                                                    keyboard: false
                                                });
                                            })
                                        } else {
                                            \$('#total-price').html((price).toFixed(3));
                                            \$(\".total_price_cart_empty\").html((price).toFixed(3));
                                            \$(\".total_price_cart\").html((price).toFixed(3));
                                        }
                                    }
                                    if (data['type'] == 2) {

                                        var price = montant_ancien_reduit / 100 * (100 - data['pourcentage']);
                                        console.log('price2' + price)
                                        \$('#total-price').html((price).toFixed(3));
                                        \$(\".total_price_cart_empty\").html((price).toFixed(3));
                                        \$(\".total_price_cart\").html((price).toFixed(3));
                                    }

                                } else {
                                    \$input_coupon = \$(\"#input_coupon_result\").html('Vous avez déja entrer un coupon');
                                    \$(\"document\").ready(function () {
                                        \$('#modal-coupon').modal({
                                            backdrop: 'static',
                                            keyboard: false
                                        });
                                    })
                                }

                            }
                        })
                    } else {
                        \$input_coupon = \$(\"#input_coupon_result\").html('Coupon invalide');
                        \$(\"document\").ready(function () {
                            \$('#modal-coupon').modal({
                                backdrop: 'static',
                                keyboard: false
                            });
                        })
                    }

                }
            })

        }



        function addArticlep(id, quantity,max) {
            var qte = parseInt(  \$(\"#qte\"+id).val());
            var qte_input = document.querySelectorAll(\"[id=qte\" + id+\"]\");


            if(qte+ 1  > quantity  ){
                document.getElementById(\"idinputtwo\"+id).innerHTML = quantity;

                \$(\"document\").ready(function () {
                    \$('#modal-panier'+id).modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                    //  \$('select').select2();
                })
            }
            else if (qte + 1 > max) {
                \$(\"document\").ready(function () {
                    \$('#modal-quantity-max'+id).modal({
                        backdrop: 'static',
                        keyboard: false});
                })
            }
            else {


                for(var i = 0; i < qte_input.length; i++){
                    qte_input[i].value = qte + 1;
                }

                //   alert(\"qtettee\"+qte)

                var \$this = \$(\"#addArticlep\"+id);
                \$.ajax({
                    url: Routing.generate('add_quantity_to_cart', {id: id}), success: function (result) {
                        \$(\".my_nav_bar\").html(result);
                        \$(\".total_price_cart_empty\").html(\$(\".total_price_cart\").html());
                        \$(\"img.lazy\").lazyload({
                            threshold : 50
                        });

                        \$(window).load(function(){
                            \$(\"html,body\").trigger(\"scroll\");
                        });
                        \$this.button('reset');

                        //   window.location.reload();
                        location.reload();
                        console.log(\"location reload\")

                    }
                });



            }
        }

        function deleteArticleQuantityp(id, product_price) {
            var qte_input = document.querySelectorAll(\"[id=qte\" + id+\"]\");
            var quantity = parseInt(  \$(\"#qte\"+id).val());
            if (quantity > 0) {

                for(var i = 0; i < qte_input.length; i++){
                    qte_input[i].value = quantity - 1;
                }

                var \$this = \$(\"#deleteArticlep\"+id);

                \$.ajax({
                    url: Routing.generate('delete_quantity_to_cart', {id: id}), success: function (result) {
                        \$(\".my_nav_bar\").html(result);
                        \$(\".total_price_cart_empty\").html(\$(\".total_price_cart\").html());
                        \$this.button('reset');
                        \$(\"img.lazy\").lazyload({
                            threshold : 50
                        });

                        \$(window).load(function(){
                            \$(\"html,body\").trigger(\"scroll\");
                        });

                        // \$('#productSetailsModalAjax'+id).modal('hide');
                        \$('.modal').modal('hide');
                        location.reload();



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
        return "@Frontend/panier/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  741 => 524,  696 => 482,  681 => 470,  671 => 463,  644 => 439,  618 => 415,  614 => 408,  600 => 307,  594 => 303,  589 => 295,  583 => 293,  578 => 292,  572 => 288,  566 => 286,  564 => 285,  561 => 284,  555 => 282,  553 => 281,  549 => 279,  539 => 265,  530 => 258,  524 => 257,  522 => 256,  511 => 251,  504 => 245,  496 => 240,  491 => 238,  487 => 237,  484 => 236,  482 => 235,  475 => 231,  470 => 229,  466 => 228,  459 => 223,  442 => 213,  438 => 212,  434 => 210,  426 => 209,  422 => 208,  418 => 207,  405 => 199,  401 => 198,  395 => 194,  393 => 188,  388 => 186,  384 => 185,  381 => 184,  379 => 183,  375 => 181,  370 => 178,  364 => 177,  334 => 172,  326 => 171,  319 => 167,  313 => 166,  308 => 164,  303 => 163,  300 => 162,  296 => 161,  293 => 160,  291 => 159,  283 => 154,  277 => 151,  265 => 142,  259 => 139,  250 => 134,  243 => 133,  239 => 132,  235 => 131,  227 => 126,  222 => 123,  219 => 122,  214 => 121,  212 => 120,  205 => 116,  200 => 115,  197 => 114,  192 => 111,  190 => 110,  187 => 109,  185 => 108,  180 => 106,  176 => 105,  170 => 101,  161 => 98,  155 => 94,  151 => 93,  146 => 90,  140 => 56,  127 => 45,  121 => 44,  110 => 38,  103 => 34,  96 => 30,  82 => 18,  76 => 17,  66 => 13,  60 => 11,  54 => 10,  46 => 7,  44 => 3,  42 => 2,  40 => 1,  31 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set totalHT = 0 %}
{% set totalTTC = 0 %}
{% set refTva = {} %}



{% extends 'FrontendBundle:Layouts:layoutBreadcrumps.html.twig' %}


{% block stylesheets %}
    {{ parent() }}

    <link href=\"{{ asset('assets/css/pickmeup.css') }}\" rel=\"stylesheet\">

{% endblock stylesheets %}

{% block breadcrump %}

    <style>
        /* Custom style for changing separator  */
        .breadcrumb-item + .breadcrumb-item::before {
            content: \">\";
        }
    </style>

    <ul class=\"breadcrumb\" style=\"margin-right: 2%;margin-left: 2%\">


        <li class=\"breadcrumb-item \">
            <a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\">{{ \"Panier\" | trans }}</a></li>

        <li class=\"breadcrumb-item\">
            <a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #a1a1a1 !important;\"
               >{{ \"Mode de reception\" | trans }}</a></li>


        <li  class=\"breadcrumb-item\" style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #a1a1a1 !important;\">
            {{ \"validation\" | trans }}
        </li>
    </ul>
{% endblock breadcrump %}


{% block content %}
    <style>
        .btnb {
            padding: 9px;
        }
    </style>

    <!--/.row-->



    <div class=\"row \" style=\"margin-right: 2%;margin-left: 2%\">
        <form name=\"aa\" method=\"get\" action=\"{{ path(\"update_cart\") }}\">
            <div class=\"row userInfo\">
                <div class=\"col-xs-12 col-sm-12 \">
                    {#
                                        <div class=\"w100 clearfix\">
                        <ul class=\"orderStep orderStepLook2\">
                            <li>
                                <a class=\"inputtitle\" style=\"cursor: default;\"> <i class=\"fa fa-map-marker\"></i>
                                    <span> 1.{{ \"Point de retrait\" | trans }}</span></a>
                            </li>
                            <li class=\"active\">
                                <a href=\"#\"> <i class=\"glyphicon glyphicon-shopping-cart\"></i>
                                    <span> 2.{{ \"Panier\" | trans }}</span></a>
                            </li>
                            {% if station.isDelivered is defined and station.isDelivered %}
                                <li>
                                    <a class=\"inputtitle\" style=\"cursor: default;\"> <i
                                                class=\"fa fa-calendar\"></i><span> 3.{{ \"Mode de reception\" | trans }} </span></a>
                                </li>
                            {% else %}
                                <li>
                                    <a class=\"inputtitle\" style=\"cursor: default;\"> <i
                                                class=\"fa fa-calendar\"></i><span> 3.{{ \"Créneau\" | trans }} </span></a>
                                </li>
                            {% endif %}
                            <li>
                                <a class=\"inputtitle\" style=\"cursor: default;\"><i
                                            class=\"fa fa-check-square \"> </i><span>4.{{ \"Conf\" | trans }}</span></a>
                            </li>
                        </ul>
                        <!--/.orderStep end-->
                    </div>

                    #}


                    <div class=\"cartContent col-lg-9 \">
                        {% for message in app.session.flashBag.get('produitfini') %}
                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">×</span>
                                </button>
                                {{ message }}
                            </div>
                        {% endfor %}

                        <table class=\"cartTable table-responsive w100\" id=\"TablepanierID\">
                            <tbody>
                            <tr class=\"CartProduct cartTableHeader\">
                                <td style=\"width:10%\"> {{ \"Product\" | trans }}</td>
                                <td style=\"width:15%\" class=\"hidden-xs hidden-sm\">{{ \"Details\" | trans }}</td>

                                {% if produit is defined %}

                                {% if size[produit.id] is defined %}

                                <td style=\"width:35%\"></td>
                                {% endif %}
                                {% endif %}
                                <td style=\"width:10%\">{{ \"QNT\" | trans }}</td>
                                <td style=\"width:10%\">{{ \"Total\" | trans }}</td>
                                <td style=\"width:10%\" class=\"delete\">&nbsp;</td>

                            </tr>
                            {% set total_price = 0 %}
                            {% for produit in produits %}
                                {% set nb_article = panier[produit.id] %}



                                <tr class=\"CartProduct product-{{ produit.id }}\">
                                    <td class=\"CartProductThumb\">
                                        <div>
                                            <a href=\"/\">
                                                <img class=\"lazy\"
                                                     alt=\"{{ produit.nom }}\"
                                                     data-original=\"/uploads/produits/{{ produit.image }}\"
                                                     src=\"{% if  produit.image  and produit.image != \"\" %}/uploads/produits/{{ produit.image }}
                                                           {% else %}{{ asset('/assets/img/default_t_e.jpg') }}{% endif %}\">

                                            </a>

                                            <div class=\"CartDescription hidden-lg hidden-md\">
                                                <h5><a href=\"#\">{{ produit.nom }}</a></h5>
                                                <div class=\"price\" style=\"color: #374649 !important;\">
                                                    <span>
                                                        {{ formated_price(produit.finalPrice[\"prix\"],app.session.get(\"pays\")) }}
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                    </td>
                                    <td style=\"width: 20% \" class=\"hidden-xs hidden-sm\">
                                        <div class=\"CartDescription\">
                                            <h5><a href=\"#\">{{ produit.nom }}</a></h5>
                                            <div class=\"price\" style=\"color: #374649 !important;\">
                                                    <span>
                                                        {{ formated_price(produit.finalPrice[\"prix\"],app.session.get(\"pays\")) }}
                                                    </span>
                                            </div>
                                        </div>
                                    </td>
                                    {% if size[produit.id] is defined %}
                                    <td style=\"width: 40%\">
                                            {% for s in produit.sizes %}
                                                {% if size[produit.id] is defined and  size[produit.id][s.id] is defined %}
                                                    <div class=\"row\" id='{{ s.id }}'>
                                                        <p style=\"float:left;display: inline-block;border: 2px solid #ddd;background-color: {{ s.couleur.codeCouleur }};color: transparent;height: 30px;width: 30px;\"></p>
                                                        <h4 style=\"padding-left: 10px; padding-top: 4px;display: inline-block; float:left\">
                                                            {{ \"Taille\" | trans }} :{{ s.libelle }} Qte
                                                            :{{ size[produit.id][s.id] }}</h4>

                                                        <a title=\"Delete\"
                                                           style=\"display: inline-block;float:right;margin-right: 50px; \"
                                                           onclick=\"deleteSize({{ produit.id }},{{ s.id }},{{ size[produit.id][s.id] }},
                                                             {{ produit.prix }},{% if produit.numProduitPromo %}{{  produit.numProduitPromo }}{% else %}null {% endif %}, {{ panier[produit.id] * produit.prix }},{% if station.isDelivered %}{{  station.isDelivered }}{% else %}null {% endif %}, {{ station.minprixLivraison }},{% if app.user %}'true'{% else %}'false'{% endif %})\">
                                                            x
                                                        </a>
                                                    </div>
                                                {% endif %}
                                            {% endfor %}

                                    </td>
                                    {% endif %}

                                    <td>
                                        {% if  produit.couleurs|length > 0 %}
                                            <input type=\"text\" class=\"quanitySniper\"
                                                   value=\"{{ panier[produit.id] }}\"
                                                   name=\"qte[]\" id=\"qte{{ produit.id }}\" readonly=\"readonly\">
                                        {% else %}
                                            {#
                                            was like this
                                                <input class=\"quanitySniper\"  type=\"text\"
                                                   value=\"{{ panier[produit.id] }}\"
                                                   name=\"qte[]\" readonly=\"false\">
                                            #}
                                            <div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"\">
                                                <div class=\"input-group group_qt\">

                                                            <span class=\"input-group-btn\">
                                                                <button id=\"deleteArticlep{{ produit.id }}\"
                                                                        onclick=\"deleteArticleQuantityp({{ produit.id }},{{ produit.prix }})\"
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
                                                                <button id=\"addArticlep{{ produit.id }}\"
                                                                        onclick=\"addArticlep({{ produit.id }},{{ produit.quantite }},{{ produit.maxcommande }})\"
                                                                        type=\"button\"
                                                                        class=\"quantity-left-minus btn btn-danger btn-number btn_plus_moins\"
                                                                        data-type=\"plus\" data-field=\"\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
                                                            </span>
                                                </div>
                                            </div>
                                        {% endif %}

                                    </td>

                                    <td class=\"price\">
                                        <div class=\"price\" style=\" \">
                                                <span id=\"price{{ produit.id }}\">
                                                    {{ formated_price(produit.getTotalPrice(panier[produit.id])[\"prix\"],app.session.get(\"pays\"), false) }}
                                                </span>
                                            <span>&nbsp;{{ app.session.get(\"pays\").devise }}</span>
                                        </div>


                                        {% if produit.finalPrice[\"is_promo\"] and panier[produit.id] >=   produit.numProduitPromo %}
                                            <div class=\"old-price\">
                                                    <span id=\"promotion{{ produit.id }}\">
                                                        {{ formated_price(produit.getTotalPrice(panier[produit.id])[\"old_prix\"],app.session.get(\"pays\"), false) }}
                                                   </span>
                                                <span>&nbsp;{{ app.session.get(\"pays\").devise }}</span>
                                            </div>


                                        {% endif %}


                                    </td>

                                    <td class=\"delete\"
                                            {#                                            onclick=\"deleteArticlePagePanier({{ produit.id }},{{ panier[produit.id] }},{{ produit.prix }},{{ station.isDelivered }}, {{ station.minprixLivraison }},{{ panier[produit.id] * produit.prix }},{% if app.user %}'true'{% else %}'false'{% endif %})\">#}
                                        onclick=\"deleteArticle({{ produit.id }},{{ panier[produit.id] * produit.prix }})\">
                                        <a title=\"Delete\"> <i class=\"glyphicon glyphicon-trash fa-2x\" style=\"color: #ED0000\"></i></a>
                                    </td>

                                </tr>
                                {% set total_price = total_price +  produit.getTotalPrice(panier[produit.id])[\"prix\"] %}
                            {% endfor %}
                            </tbody>
                        </table>
                        <div class=\"cartFooter w100\">
                            <div class=\"box-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"/\" class=\"btn  \"
                                       style=\"padding-right: 10px;padding-left: 10px;line-height: 40px\">
                                        <i class=\"fa fa-arrow-left\"></i>&nbsp; {{ \"Continuez vos achats\" | trans }}
                                    </a>
                                </div>


                                <div class=\"pull-right\">

                                    {#
                                       <button type=\"submit\" class=\"btn  btn_regist\"
                                            style=\"padding-right: 10px;padding-left: 10px\"><i
                                                class=\"fa fa-undo\"></i>&nbsp;
                                        {{ \"Mise à jour du panier\" | trans }}
                                    </button>
                                    #}
                                    <a id=\"btn-livrer\"

                                            {% if not app.user %}
                                                href=\"{{ path('fos_user_security_login') }}\"
                                            {% endif %}
                                       title=\"\"
                                            {% if app.user and panier|length >0 %}
                                                href=\"{{ path(\"verification_panier\") }}\"
                                            {% endif %}

                                        style=\"margin-bottom:20px;\">
                                        <button class=\"btn  btn_card_square w100 \" type=\"button\">

                                            {% if not app.user and panier|length >0 %}{{ \"Se Connecter\" | trans }}
                                            {% elseif app.user and panier|length<=0 %}{{ \"Panier vide\" | trans }}
                                            {% else %}
                                            {{ \"continuer\" | trans }}
                                            {#
                                                 {% if station.isDelivered is defined and  station.isDelivered and total_price >= station.minprixLivraison %}
                                                {{ \"Choisir entre drive et livraison\" | trans }}
                                            {% else %}
                                                {{ \"Sélectionnez votre créneau\" | trans }}
                                            {% endif %}
                                            #}



                                             {% endif %}
                                            <i class=\"fa fa-arrow-right\"></i>
                                              </button>

                                       </a>



                            </div>
                        </div>
                    </div>
                  </div>
                <!--cartContent-->
                    {#
                      <div class=\"col-lg-3 col-md-6 rightSidebar\">
                    <div class=\"contentBox\">
                        <div class=\"w100 costDetails\">
                            <div class=\"table-block\" id=\"order-detail-content\">
                                {% if station.isDelivered is defined and station.isDelivered  and total_price <= station.minprixLivraison %}

                                    <div class=\"w100 \" id=\"divlivraison\" name=\"divlivraison\"
                                         style=\"margin-top: 10px\">
                                        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\"
                                             style=\"font-family: Roboto-Regular, sans-serif!important;\">
                                            {{ \"Pour la livraison à domicile, il faut une commande d´un montant minimum de\" | trans }}
                                            {{ formated_price(  station.minprixLivraison,app.session.get(\"pays\")) }}
                                        </div>
                                    </div>

                                {% endif %}

                                <div class=\"w100 cartMiniTable\" hidden>
                                    {% if coupon and coupon != '' %}
                                        {% if coupon.type == 1 %}
                                            {% set total_price = total_price - coupon.montant %}
                                        {% elseif coupon.type == 2 %}
                                            {% set total_price = total_price / 100 *(100-coupon.pourcentage) %}
                                        {% endif %}
                                    {% endif %}
                                    <table id=\"cart-summary\" class=\"std table\">
                                        <tbody>
                                        <tr>
                                            <td class=\"labell\"> {{ \"Total Commande\" | trans }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\" site-color\">
                                                <span id=\"total-price\">{{ formated_price(total_price,app.session.get(\"pays\"), false) }}</span>
                                                <span class=\"site-color\">{{ app.session.get(\"pays\").devise }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                <div class=\"input-append couponForm\">
                                                    <button class=\"col-lg-4 btn btnb\" type=\"button\"
                                                            onclick=\"verifcoupon()\">{{ \"Appliquer\"|trans }}
                                                    </button>
                                                    <input class=\"col-lg-7\" id=\"couponinput\" name=\"couponinput\"
                                                           type=\"text\"
                                                           placeholder=\"{{ \"Code coupon\" | trans }}\"
                                                           style=\"padding-right: 10px; padding-left: 10px;margin-left:10px; border-style: none;  border: 1px solid #ececec;outline: transparent;\">

                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                                {#
                                                                    <a id=\"btn-livrer\"

                                        {% if not app.user %}
                                            href=\"{{ path('fos_user_security_login') }}\"
                                        {% endif %}
                                   title=\"\"
                                        {% if app.user and panier|length >0 %}
                                            href=\"{{ path(\"verification_panier\") }}\"
                                        {% endif %}
                                   style=\"margin-bottom:20px;\">
                                    <button class=\"btn  btn_card_square w100 \" type=\"button\">

                                        {% if not app.user and panier|length >0 %}{{ \"Se Connecter\" | trans }}
                                        {% elseif app.user and panier|length<=0 %}{{ \"Panier vide\" | trans }}
                                        {% else %}
                                            {{ \"continuer\" | trans }}
                                            {#
                                                 {% if station.isDelivered is defined and  station.isDelivered and total_price >= station.minprixLivraison %}
                                                {{ \"Choisir entre drive et livraison\" | trans }}
                                            {% else %}
                                                {{ \"Sélectionnez votre créneau\" | trans }}
                                            {% endif %}



                                {% endif %}
                                <i class=\"fa fa-arrow-right\"></i>
                                </button>

                                </a>

                                #}


                   {#  </div>
                   </div>
                  </div>
                 </div>
                    #}


                    <!--/ cartFooter -->

                </div>
            </div>

        </form>

        <!--/rightSidebar-->

    </div>
    <!--/.row-->

    <!-- Modal -->
    <div class=\"modal fade\" id=\"modal-coupon\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"row transitionfx text-left\">

                    <div class=\"modal-header\" style=\"background: #df0c36;\">
                        <h4 class=\"modal-title\" id=\"exampleModalLongTitle\"
                            style=\"padding-left: 10px;margin-top: 11px;font-family: Roboto-Regular, sans-serif!important;color: white\">
                            {{ \"Vérification coupon\" | trans }}</h4>

                        <button style=\"padding-right: 10px;opacity: 1.2;margin-top: -36px;background-color: #df0c36\"
                                type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body text-center\">
                        <h3 id=\"input_coupon_result\"></h3>
                    </div>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <script>
        function verifcoupon() {
            var coupon_value = \$(\"#couponinput\").val();
            var totalprice = parseFloat(\$('#total-price').html());
            console.log(totalprice);
            \$.ajax({
                url: \"{{ (path('verificationCoupon')) }}\",
                dataType: 'Json',
                data: {\"coupon\": coupon_value},
                type: 'GET',
                success: function (coupon) {
                    if (coupon['result'] == true) {
                        \$.ajax({
                            url: \"{{ (path('executeCoupon')) }}\",
                            dataType: 'Json',
                            data: {\"coupon\": coupon_value},
                            type: 'GET',
                            success: function (data) {
                                if (data['result'] == true) {

                                    if (data['type'] == 1) {
                                        var montant = parseFloat(coupon['montant'])
                                        console.log('montant'.montant)
                                        console.log('total'.totalprice)
                                        if (montant > totalprice) {
                                            \$input_coupon = \$(\"#input_coupon_result\").html('Votre commande doit avoir un montant superieur à' + montant + '{{ app.session.get(\"pays\").devise }}');
                                            \$(\"document\").ready(function () {
                                                \$('#modal-coupon').modal({
                                                    backdrop: 'static',
                                                    keyboard: false
                                                });
                                            })
                                        } else {
                                            \$('#total-price').html((totalprice - montant).toFixed(3));
                                            \$(\".total_price_cart_empty\").html((totalprice - montant).toFixed(3));
                                            \$(\".total_price_cart\").html((totalprice - montant).toFixed(3));
                                        }

                                    }
                                    if (data['type'] == 2) {

                                        var pourcentage = parseFloat(coupon['pourcentage'])
                                        console.log(coupon['pourcentage'])
                                        console.log(totalprice)
                                        \$('#total-price').html((totalprice / 100 * (100 - pourcentage)).toFixed(3));
                                        \$(\".total_price_cart_empty\").html((totalprice / 100 * (100 - pourcentage)).toFixed(3));
                                        \$(\".total_price_cart\").html((totalprice / 100 * (100 - pourcentage)).toFixed(3));
                                    }

                                } else if (data['result'] == false && data['ancien'] !== undefined) {

                                    if (data['ancientype'] == 1) {

                                        var montant_ancien_reduit = parseFloat(totalprice + data['ancien'])
                                        console.log('montant_ancien_reduit1' + montant_ancien_reduit)
                                    }
                                    if (data['ancientype'] == 2) {
                                        var montant_ancien_reduit = totalprice + (totalprice / (100 - data['ancien']) * data['ancien']);
                                        console.log('montant_ancien_reduit2' + montant_ancien_reduit)
                                    }

                                    if (data['type'] == 1) {
                                        var price = parseFloat(montant_ancien_reduit - data['montant'])
                                        console.log('price1' + price)

                                        if (montant > montant_ancien_reduit) {

                                            \$input_coupon = \$(\"#input_coupon_result\").html('Votre commande doit avoir un montant superieur à' + montant + ' {{ app.session.get(\"pays\").devise }}');
                                            \$(\"document\").ready(function () {
                                                \$('#modal-coupon').modal({
                                                    backdrop: 'static',
                                                    keyboard: false
                                                });
                                            })
                                        } else {
                                            \$('#total-price').html((price).toFixed(3));
                                            \$(\".total_price_cart_empty\").html((price).toFixed(3));
                                            \$(\".total_price_cart\").html((price).toFixed(3));
                                        }
                                    }
                                    if (data['type'] == 2) {

                                        var price = montant_ancien_reduit / 100 * (100 - data['pourcentage']);
                                        console.log('price2' + price)
                                        \$('#total-price').html((price).toFixed(3));
                                        \$(\".total_price_cart_empty\").html((price).toFixed(3));
                                        \$(\".total_price_cart\").html((price).toFixed(3));
                                    }

                                } else {
                                    \$input_coupon = \$(\"#input_coupon_result\").html('Vous avez déja entrer un coupon');
                                    \$(\"document\").ready(function () {
                                        \$('#modal-coupon').modal({
                                            backdrop: 'static',
                                            keyboard: false
                                        });
                                    })
                                }

                            }
                        })
                    } else {
                        \$input_coupon = \$(\"#input_coupon_result\").html('Coupon invalide');
                        \$(\"document\").ready(function () {
                            \$('#modal-coupon').modal({
                                backdrop: 'static',
                                keyboard: false
                            });
                        })
                    }

                }
            })

        }



        function addArticlep(id, quantity,max) {
            var qte = parseInt(  \$(\"#qte\"+id).val());
            var qte_input = document.querySelectorAll(\"[id=qte\" + id+\"]\");


            if(qte+ 1  > quantity  ){
                document.getElementById(\"idinputtwo\"+id).innerHTML = quantity;

                \$(\"document\").ready(function () {
                    \$('#modal-panier'+id).modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                    //  \$('select').select2();
                })
            }
            else if (qte + 1 > max) {
                \$(\"document\").ready(function () {
                    \$('#modal-quantity-max'+id).modal({
                        backdrop: 'static',
                        keyboard: false});
                })
            }
            else {


                for(var i = 0; i < qte_input.length; i++){
                    qte_input[i].value = qte + 1;
                }

                //   alert(\"qtettee\"+qte)

                var \$this = \$(\"#addArticlep\"+id);
                \$.ajax({
                    url: Routing.generate('add_quantity_to_cart', {id: id}), success: function (result) {
                        \$(\".my_nav_bar\").html(result);
                        \$(\".total_price_cart_empty\").html(\$(\".total_price_cart\").html());
                        \$(\"img.lazy\").lazyload({
                            threshold : 50
                        });

                        \$(window).load(function(){
                            \$(\"html,body\").trigger(\"scroll\");
                        });
                        \$this.button('reset');

                        //   window.location.reload();
                        location.reload();
                        console.log(\"location reload\")

                    }
                });



            }
        }

        function deleteArticleQuantityp(id, product_price) {
            var qte_input = document.querySelectorAll(\"[id=qte\" + id+\"]\");
            var quantity = parseInt(  \$(\"#qte\"+id).val());
            if (quantity > 0) {

                for(var i = 0; i < qte_input.length; i++){
                    qte_input[i].value = quantity - 1;
                }

                var \$this = \$(\"#deleteArticlep\"+id);

                \$.ajax({
                    url: Routing.generate('delete_quantity_to_cart', {id: id}), success: function (result) {
                        \$(\".my_nav_bar\").html(result);
                        \$(\".total_price_cart_empty\").html(\$(\".total_price_cart\").html());
                        \$this.button('reset');
                        \$(\"img.lazy\").lazyload({
                            threshold : 50
                        });

                        \$(window).load(function(){
                            \$(\"html,body\").trigger(\"scroll\");
                        });

                        // \$('#productSetailsModalAjax'+id).modal('hide');
                        \$('.modal').modal('hide');
                        location.reload();



                    }
                });
            }

        }

    </script>

{% endblock %}


", "@Frontend/panier/panier.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\panier\\panier.html.twig");
    }
}
