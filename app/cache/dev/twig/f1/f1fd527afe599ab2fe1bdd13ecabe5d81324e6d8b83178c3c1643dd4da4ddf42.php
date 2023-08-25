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

/* @Backend/gerant/commande/show.html.twig */
class __TwigTemplate_0ba2da920b143ac7ed15ce2c63ee57740a4d8557978f71b923bc07d9c7ae9e4d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'page' => [$this, 'block_page'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Backend/layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gerant/commande/show.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/gerant/commande/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 4
        echo "    <!-- Page -->
    <style>
        h4 span {
            font-size: 13px;
            font-weight: normal;
        }
        h4{
            margin-bottom: 20px;
        }
    </style>
    <div class=\"page\">
        <div class=\"page-header\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <h1 class=\"page-title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details Commande"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "reference", []), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"col-lg-6 text-right\">
                    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExportDetailsGerantCommande", ["_filename" => "Details_commandes", "id" => $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "id", [])]), "html", null, true);
        echo "\" class=\"float-center btn btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                        <i class=\"icon md-download\" aria-hidden=\"true\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("exporter"), "html", null, true);
        echo "</a>
                </div>

            </div>

        </div>
        <div class=\"page-content container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <!-- Page Widget -->
                    <div class=\"card card-shadow text-center\">
                        <div class=\"card-block\">

                            <h3 class=\"profile-user\" style=\"margin-bottom: 5px;\">
                                ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "utilisateur", []), "firstName", []), "html", null, true);
        echo "
                                ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "utilisateur", []), "lastName", []), "html", null, true);
        echo "
                            </h3>
                            <h5 class=\"profile-user\" style=\"    margin-top: 0px;\">
                                <i class=\"icon md-email\" aria-hidden=\"true\" style=\"margin-right:5 !important;\"></i>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "utilisateur", []), "email", []), "html", null, true);
        echo "
                            </h5>
                            ";
        // line 42
        if ($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "utilisateur", []), "tel", [])) {
            // line 43
            echo "                                <h5 class=\"profile-user\">
                                    <i class=\"icon md-phone\" aria-hidden=\"true\" style=\"margin-right:5 !important;\"></i>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "utilisateur", []), "tel", []), "html", null, true);
            echo "
                                </h5>
                            ";
        }
        // line 47
        echo "                            <br>
                            ";
        // line 48
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []) == null)) {
            // line 49
            echo "                                <h4 class=\"profile-user\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mode de réception"), "html", null, true);
            echo "
                                    <br><span>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drive"), "html", null, true);
            echo "</span>
                                </h4>


                                <h4 class=\"profile-user\">";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date de retrait"), "html", null, true);
            echo "
                                    <br><span>
                                        <i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateReception", []), "d/m/Y"), "html", null, true);
            echo "<br>
                                        <i class=\"icon md-time\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeToString", []), "html", null, true);
            echo "
                                    </span>
                                </h4>
                                <h4 class=\"profile-user\">";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date de la commande"), "html", null, true);
            echo "
                                    <br><span>
                                        <i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateReservation", []), "d/m/Y"), "html", null, true);
            echo "
                                        <br><i class=\"icon md-time\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "createdAt", []), "h:i"), "html", null, true);
            echo "
                                    </span>
                                </h4>

                                ";
            // line 67
            if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 3)) {
                // line 68
                echo "                                    <h4 class=\"profile-user\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date Livraison"), "html", null, true);
                echo "
                                        <br><span>
                                            <i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>";
                // line 70
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateReception", []), "d/m/Y"), "html", null, true);
                echo "
                                        </span>
                                    </h4>

                                ";
            }
            // line 75
            echo "                                ";
            if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 4)) {
                // line 76
                echo "                                    <h4 class=\"profile-user\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date Annulation"), "html", null, true);
                echo "
                                        <br><span>
                                            <i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>";
                // line 78
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateAnnulation", []), "d/m/Y"), "html", null, true);
                echo "
                                        </span>
                                    </h4>
                                ";
            }
            // line 82
            echo "                            ";
        } else {
            // line 83
            echo "                                <h4 class=\"profile-user\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mode de réception"), "html", null, true);
            echo "
                                    <br><span>";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Livraison"), "html", null, true);
            echo "</span>
                                </h4>



                                <h4 class=\"profile-user\">";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adresse de livraison"), "html", null, true);
            echo "
                                    <br><span >
                                        <i class=\"icon md-pin\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "adresse", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "ville", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "pays", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "cp", []), "html", null, true);
            echo "
                                    </span>
                                </h4>
                                <h4 class=\"profile-user\">";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Télephone"), "html", null, true);
            echo "
                                    <br><span>
                                        ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "telephone", []), "html", null, true);
            echo "
                                    </span>
                                </h4>
                            ";
        }
        // line 100
        echo "


                            <h4 class=\"profile-user\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut Commande"), "html", null, true);
        echo "
                                <br><span>\t<span class=\"badge ";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statusCommandeCssClass", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutCommandeToString", [])), "html", null, true);
        echo "</span>
                                </span>
                            </h4>
                            <h4 class=\"profile-user\" style=\"margin-top: 15px\">";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut Paiement"), "html", null, true);
        echo "
                                <br><span>\t<span class=\"badge ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statusPayementCssClass", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutPayementToString", [])), "html", null, true);
        echo "</span>
                                </span>
                            </h4>
                            ";
        // line 117
        echo "
                            ";
        // line 118
        if ($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", [])) {
            // line 119
            echo "                                <br><br>
                                <div class=\"panel\" style=\"background-color: #fafafa;border: 1px solid #cccccc;\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Coupon"), "html", null, true);
            echo "
                                        </h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <span style=\"    font-weight: bold;\">";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "code", []), "html", null, true);
            echo "</span><br>
                                        <span>";
            // line 127
            if (($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "type", []) == 1)) {
                // line 128
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("réduction de"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "montant", []), 0, "", " "), "html", null, true);
                echo "
                                        ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 129
($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "type", []) == 2)) {
                // line 130
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("réduction de"), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "pourcentage", []), "html", null, true);
                echo "%
                                        ";
            }
            // line 132
            echo "                                    </span>
                                </div>
                            </div>

                            ";
        }
        // line 137
        echo "

                            </div>
                        </div>
                        <!-- End Page Widget -->
                    </div>

                    <div class=\"col-lg-8\">
                        <!-- Panel -->
                        <div class=\"panel\">
                            <div class=\"panel-body nav-tabs-animate nav-tabs-horizontal\" data-plugin=\"tabs\">
                                <div class=\"example table-responsive\">
                                    <table class=\"table\" style=\"border-bottom: 1px solid #e0e0e0;\">
                                        <thead>
                                            <tr>
                                                <th colspan=\"5\"><h4 class=\"profile-user text-right \">";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix Total"), "html", null, true);
        echo "  :
                                                        ";
        // line 153
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "prix", []), 0, "", " "), "html", null, true);
        echo "
                                                    </h4></th>

                                            </tr>
                                            <tr>
                                                <th>";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produit"), "html", null, true);
        echo "</th>
                                                <th colspan=\"2\">";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details"), "html", null, true);
        echo "</th>
                                                <th>";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QT"), "html", null, true);
        echo "</th>
                                                <th>";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total"), "html", null, true);
        echo "</th>
                                                <th>";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action"), "html", null, true);
        echo "</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commande_produit"] ?? $this->getContext($context, "commande_produit")));
        foreach ($context['_seq'] as $context["_key"] => $context["cp"]) {
            // line 167
            echo "                                                <tr>
                                                    <td>
                                                        <img style=\"width: 86px;height: 86px;max-width: 100%;\" class=\"lazy\"
                                                             alt=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cp"], "produit", []), "nom", []), "html", null, true);
            echo "\"
                                                             data-original=\"/uploads/produits/";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cp"], "produit", []), "image", []), "html", null, true);
            echo "\"
                                                             src=\"";
            // line 172
            if (($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "image", []) && ($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "image", []) != ""))) {
                echo "/uploads/produits/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cp"], "produit", []), "image", []), "html", null, true);
            } elseif ((($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "SousCategorie", []) && $this->getAttribute($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "SousCategorie", []), "image", [])) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "SousCategorie", []), "image", []) != ""))) {
                echo "/uploads/produits/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "SousCategorie", []), "image", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default.jpeg"), "html", null, true);
            }
            echo "\">
                                                    </td>
                                                    <td>

                                                        <div style=\"margin-top: 6px;font-size: 14px;font-weight: bold;color: #454545;\">
                                                            <span>";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cp"], "produit", []), "nom", []), "html", null, true);
            echo "</span>
                                                        </div>
                                                        ";
            // line 179
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "finalPrice", []), "prix", [], "array"), 0, "", " "), "html", null, true);
            echo "
                                                    </td>
                                                    <td   ";
            // line 181
            if ($this->getAttribute($context["cp"], "sizes", [])) {
                echo " style=\"width: 30%;\" ";
            }
            echo ">
                                                        ";
            // line 182
            if ($this->getAttribute($context["cp"], "sizes", [])) {
                // line 183
                echo "                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "sizes", []));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 184
                    echo "                                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cp"], "sizes", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["cpsize"]) {
                        // line 185
                        echo "                                                                    ";
                        if ($this->getAttribute($context["cpsize"], $this->getAttribute($context["s"], "id", []), [], "array", true, true)) {
                            // line 186
                            echo "                                                                        <div class=\"row\" style=\"padding-left: 10px;\" >
                                                                            <div style=\"margin-right: 5px;margin-top: 6px;font-size: 14px;font-weight: bold;color: #454545;\">
                                                                                <span>";
                            // line 188
                            echo twig_escape_filter($this->env, $this->getAttribute($context["cpsize"], $this->getAttribute($context["s"], "id", []), [], "array"), "html", null, true);
                            echo "x</span>
                                                                            </div>
                                                                            <p style=\" float:left;display: inline-block;border: 2px solid #ddd;background-color: ";
                            // line 190
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "couleur", []), "codeCouleur", []), "html", null, true);
                            echo ";color: transparent;height: 33px;width: 33px;\"></p>

                                                                            <div style=\"margin-left: 5px;margin-top: 6px;font-size: 14px;font-weight: bold;color: #454545;\">
                                                                                <span>";
                            // line 193
                            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "libelle", []), "html", null, true);
                            echo "</span>
                                                                            </div>

                                                                        </div>
                                                                    ";
                        }
                        // line 198
                        echo "                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cpsize'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 199
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                echo "                                                        ";
            }
            // line 201
            echo "                                                    </td>
                                                    <td>";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($context["cp"], "quantite", []), "html", null, true);
            echo "</td>
                                                    <td style=\"width: 20%;\">
                                                        <div style=\"margin-top: 6px;font-size: 14px;font-weight: bold;color: #454545;\">
                                                            <span>";
            // line 205
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["cp"], "prix", []), 0, "", " "), "html", null, true);
            echo "</span>
                                                        </div>
                                                    </td>
                                                    <td><button class='btn btn-danger' onClick='nondisponible(\"";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute($context["cp"], "id", []), "html", null, true);
            echo "\");'>Non disponible</button></td>

                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                                        </tbody>
                                    </table>

                                    <div class=\"navigation\">
                                        ";
        // line 216
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["commande_produit"] ?? $this->getContext($context, "commande_produit")));
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Panel -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 228
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 229
        echo "                <script>
                    function nondisponible(id) {
                        var id_produit=id;
                        \$.ajax({
                            type: 'POST',
                            url: \"";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nondispo");
        echo "\",
                            data: {id: id_produit},
                            beforeSend: function () {
                            },
                            success: function (data) {
                                location.reload();
                            }
                        });
                    }
                </script>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/gerant/commande/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  541 => 234,  534 => 229,  528 => 228,  509 => 216,  503 => 212,  493 => 208,  487 => 205,  481 => 202,  478 => 201,  475 => 200,  469 => 199,  463 => 198,  455 => 193,  449 => 190,  444 => 188,  440 => 186,  437 => 185,  432 => 184,  427 => 183,  425 => 182,  419 => 181,  414 => 179,  409 => 177,  393 => 172,  389 => 171,  385 => 170,  380 => 167,  376 => 166,  369 => 162,  365 => 161,  361 => 160,  357 => 159,  353 => 158,  345 => 153,  341 => 152,  324 => 137,  317 => 132,  309 => 130,  307 => 129,  300 => 128,  298 => 127,  294 => 126,  287 => 122,  282 => 119,  280 => 118,  277 => 117,  269 => 108,  265 => 107,  257 => 104,  253 => 103,  248 => 100,  241 => 96,  236 => 94,  224 => 91,  219 => 89,  211 => 84,  206 => 83,  203 => 82,  196 => 78,  190 => 76,  187 => 75,  179 => 70,  173 => 68,  171 => 67,  164 => 63,  160 => 62,  155 => 60,  149 => 57,  145 => 56,  140 => 54,  133 => 50,  128 => 49,  126 => 48,  123 => 47,  117 => 44,  114 => 43,  112 => 42,  107 => 40,  101 => 37,  97 => 36,  80 => 22,  76 => 21,  68 => 18,  52 => 4,  46 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Backend/layout/layout.html.twig' %}

{% block page %}
    <!-- Page -->
    <style>
        h4 span {
            font-size: 13px;
            font-weight: normal;
        }
        h4{
            margin-bottom: 20px;
        }
    </style>
    <div class=\"page\">
        <div class=\"page-header\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <h1 class=\"page-title\">{{ \"Details Commande\"|trans }} {{commande.reference}}</h1>
                </div>
                <div class=\"col-lg-6 text-right\">
                    <a href=\"{{ path('ExportDetailsGerantCommande',{'_filename':'Details_commandes','id':commande.id}) }}\" class=\"float-center btn btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                        <i class=\"icon md-download\" aria-hidden=\"true\"></i> {{ \"exporter\"|trans }}</a>
                </div>

            </div>

        </div>
        <div class=\"page-content container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <!-- Page Widget -->
                    <div class=\"card card-shadow text-center\">
                        <div class=\"card-block\">

                            <h3 class=\"profile-user\" style=\"margin-bottom: 5px;\">
                                {{commande.utilisateur.firstName }}
                                {{ commande.utilisateur.lastName}}
                            </h3>
                            <h5 class=\"profile-user\" style=\"    margin-top: 0px;\">
                                <i class=\"icon md-email\" aria-hidden=\"true\" style=\"margin-right:5 !important;\"></i>{{commande.utilisateur.email }}
                            </h5>
                            {% if commande.utilisateur.tel  %}
                                <h5 class=\"profile-user\">
                                    <i class=\"icon md-phone\" aria-hidden=\"true\" style=\"margin-right:5 !important;\"></i>{{commande.utilisateur.tel }}
                                </h5>
                            {% endif %}
                            <br>
                            {% if commande.adresselivraison == null %}
                                <h4 class=\"profile-user\">{{\"Mode de réception\"|trans}}
                                    <br><span>{{ \"Drive\"|trans }}</span>
                                </h4>


                                <h4 class=\"profile-user\">{{ \"Date de retrait\"|trans }}
                                    <br><span>
                                        <i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>{{commande.dateReception|date(\"d/m/Y\") }}<br>
                                        <i class=\"icon md-time\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>{{ commande.periodeToString }}
                                    </span>
                                </h4>
                                <h4 class=\"profile-user\">{{ \"Date de la commande\"|trans }}
                                    <br><span>
                                        <i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>{{commande.dateReservation|date(\"d/m/Y\") }}
                                        <br><i class=\"icon md-time\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>{{commande.createdAt|date(\"h:i\") }}
                                    </span>
                                </h4>

                                {% if commande.statutcommande == 3 %}
                                    <h4 class=\"profile-user\">{{ \"Date Livraison\"|trans }}
                                        <br><span>
                                            <i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>{{commande.dateReception|date(\"d/m/Y\") }}
                                        </span>
                                    </h4>

                                {% endif %}
                                {% if commande.statutcommande == 4 %}
                                    <h4 class=\"profile-user\">{{ \"Date Annulation\"|trans }}
                                        <br><span>
                                            <i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>{{commande.dateAnnulation|date(\"d/m/Y\") }}
                                        </span>
                                    </h4>
                                {% endif %}
                            {% else %}
                                <h4 class=\"profile-user\">{{\"Mode de réception\"|trans}}
                                    <br><span>{{ \"Livraison\"|trans }}</span>
                                </h4>



                                <h4 class=\"profile-user\">{{ \"Adresse de livraison\"|trans }}
                                    <br><span >
                                        <i class=\"icon md-pin\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>{{commande.adresselivraison.adresse }},{{commande.adresselivraison.ville }},{{commande.adresselivraison.pays }},{{commande.adresselivraison.cp}}
                                    </span>
                                </h4>
                                <h4 class=\"profile-user\">{{\"Télephone\"|trans}}
                                    <br><span>
                                        {{commande.adresselivraison.telephone }}
                                    </span>
                                </h4>
                            {% endif %}



                            <h4 class=\"profile-user\">{{ \"Statut Commande\"|trans }}
                                <br><span>\t<span class=\"badge {{ commande.statusCommandeCssClass }}\">{{ commande.statutCommandeToString|trans }}</span>
                                </span>
                            </h4>
                            <h4 class=\"profile-user\" style=\"margin-top: 15px\">{{ \"Statut Paiement\"|trans }}
                                <br><span>\t<span class=\"badge {{ commande.statusPayementCssClass }}\">{{ commande.statutPayementToString|trans }}</span>
                                </span>
                            </h4>
                            {#
                                            <h4 class=\"profile-user\" style=\"margin-top: 15px\">{{ \"Remboursement\"|trans }}
                                    <br><span ><span class=\"badge {{ commande.remboursementCssClass }}\">{{ commande.remboursementToString }}</span>
                            </span>
                            </h4>
                            #}

                            {% if commande.coupon %}
                                <br><br>
                                <div class=\"panel\" style=\"background-color: #fafafa;border: 1px solid #cccccc;\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">{{ \"Coupon\"|trans }}
                                        </h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <span style=\"    font-weight: bold;\">{{ commande.coupon.code }}</span><br>
                                        <span>{% if commande.coupon.type == 1 %}
                                            {{\"réduction de\"|trans}} {{ commande.coupon.montant |number_format(0, '', ' ')}}
                                        {% elseif commande.coupon.type == 2 %}
                                            {{\"réduction de\"|trans}}  {{ commande.coupon.pourcentage }}%
                                        {% endif %}
                                    </span>
                                </div>
                            </div>

                            {% endif %}


                            </div>
                        </div>
                        <!-- End Page Widget -->
                    </div>

                    <div class=\"col-lg-8\">
                        <!-- Panel -->
                        <div class=\"panel\">
                            <div class=\"panel-body nav-tabs-animate nav-tabs-horizontal\" data-plugin=\"tabs\">
                                <div class=\"example table-responsive\">
                                    <table class=\"table\" style=\"border-bottom: 1px solid #e0e0e0;\">
                                        <thead>
                                            <tr>
                                                <th colspan=\"5\"><h4 class=\"profile-user text-right \">{{ \"Prix Total\"|trans }}  :
                                                        {{commande.prix|number_format(0, '', ' ')}}
                                                    </h4></th>

                                            </tr>
                                            <tr>
                                                <th>{{ \"Produit\"|trans }}</th>
                                                <th colspan=\"2\">{{ \"Details\"|trans }}</th>
                                                <th>{{ \"QT\"|trans }}</th>
                                                <th>{{ \"Total\"|trans }}</th>
                                                <th>{{ \"Action\"|trans }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for cp in commande_produit %}
                                                <tr>
                                                    <td>
                                                        <img style=\"width: 86px;height: 86px;max-width: 100%;\" class=\"lazy\"
                                                             alt=\"{{ cp.produit.nom }}\"
                                                             data-original=\"/uploads/produits/{{ cp.produit.image }}\"
                                                             src=\"{%  if  cp.produit.image  and cp.produit.image != \"\" %}/uploads/produits/{{ cp.produit.image }}{%  elseif cp.produit.SousCategorie  and cp.produit.SousCategorie.image  and cp.produit.SousCategorie.image != \"\" %}/uploads/produits/{{ cp.produit.SousCategorie.image }}{% else %}{{ asset('/assets/img/default.jpeg') }}{% endif %}\">
                                                    </td>
                                                    <td>

                                                        <div style=\"margin-top: 6px;font-size: 14px;font-weight: bold;color: #454545;\">
                                                            <span>{{ cp.produit.nom }}</span>
                                                        </div>
                                                        {{ cp.produit.finalPrice[\"prix\"]|number_format(0, '', ' ') }}
                                                    </td>
                                                    <td   {% if cp.sizes %} style=\"width: 30%;\" {% endif %}>
                                                        {% if cp.sizes %}
                                                            {% for s in cp.produit.sizes %}
                                                                {% for cpsize in cp.sizes %}
                                                                    {% if cpsize[s.id] is defined  %}
                                                                        <div class=\"row\" style=\"padding-left: 10px;\" >
                                                                            <div style=\"margin-right: 5px;margin-top: 6px;font-size: 14px;font-weight: bold;color: #454545;\">
                                                                                <span>{{ cpsize[s.id] }}x</span>
                                                                            </div>
                                                                            <p style=\" float:left;display: inline-block;border: 2px solid #ddd;background-color: {{s.couleur.codeCouleur}};color: transparent;height: 33px;width: 33px;\"></p>

                                                                            <div style=\"margin-left: 5px;margin-top: 6px;font-size: 14px;font-weight: bold;color: #454545;\">
                                                                                <span>{{ s.libelle }}</span>
                                                                            </div>

                                                                        </div>
                                                                    {% endif %}
                                                                {% endfor %}
                                                            {% endfor %}
                                                        {% endif %}
                                                    </td>
                                                    <td>{{ cp.quantite }}</td>
                                                    <td style=\"width: 20%;\">
                                                        <div style=\"margin-top: 6px;font-size: 14px;font-weight: bold;color: #454545;\">
                                                            <span>{{ cp.prix |number_format(0, '', ' ')}}</span>
                                                        </div>
                                                    </td>
                                                    <td><button class='btn btn-danger' onClick='nondisponible(\"{{cp.id}}\");'>Non disponible</button></td>

                                                </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>

                                    <div class=\"navigation\">
                                        {{ knp_pagination_render(commande_produit) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Panel -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page -->
        {% endblock %}
            {% block javascripts %}
                <script>
                    function nondisponible(id) {
                        var id_produit=id;
                        \$.ajax({
                            type: 'POST',
                            url: \"{{ path('nondispo') }}\",
                            data: {id: id_produit},
                            beforeSend: function () {
                            },
                            success: function (data) {
                                location.reload();
                            }
                        });
                    }
                </script>
            {% endblock  %}
", "@Backend/gerant/commande/show.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gerant\\commande\\show.html.twig");
    }
}
