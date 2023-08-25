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

/* @Backend/gestionnaire/commande/show.html.twig */
class __TwigTemplate_3d41547dc44cf77ae4a6827d972704351fd83bd825258b51c21a6512d6be473c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'page' => [$this, 'block_page'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gestionnaire/commande/show.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/gestionnaire/commande/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 4
        echo "\t<!-- Page -->
\t<style>
\t\th4 span {
\t\t\tfont-size: 13px;
\t\t\tfont-weight: normal;
\t\t}
\t\th4{
\t\t\tmargin-bottom: 20px;
\t\t}
\t</style>
\t<div class=\"page\">
\t\t<div class=\"page-header\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<h1 class=\"page-title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details Commande"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "reference", []), "html", null, true);
        echo "</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 text-right\">
\t\t\t\t\t<a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExportDetailsCommande", ["_filename" => "Details_commandes", "id" => $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "id", [])]), "html", null, true);
        echo "\" class=\"float-center btn btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
\t\t\t\t\t\t<i class=\"icon md-download\" aria-hidden=\"true\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("exporter"), "html", null, true);
        echo "</a>
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>
\t\t<div class=\"page-content container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<!-- Page Widget -->
\t\t\t\t\t<div class=\"card card-shadow text-center\">
\t\t\t\t\t\t<div class=\"card-block\">

\t\t\t\t\t\t\t<h3 class=\"profile-user\" style=\"margin-bottom: 5px;\">
\t\t\t\t\t\t\t\t";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "utilisateur", []), "firstName", []), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "utilisateur", []), "lastName", []), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<h5 class=\"profile-user\" style=\"    margin-top: 0px;\">
\t\t\t\t\t\t\t\t<i class=\"icon md-email\" aria-hidden=\"true\" style=\"margin-right:5 !important;\"></i>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "utilisateur", []), "email", []), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t";
        // line 42
        if ($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "utilisateur", []), "tel", [])) {
            // line 43
            echo "\t\t\t\t\t\t\t\t<h5 class=\"profile-user\">
\t\t\t\t\t\t\t\t\t<i class=\"icon md-phone\" aria-hidden=\"true\" style=\"margin-right:5 !important;\"></i>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "utilisateur", []), "tel", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
        // line 48
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []) == null)) {
            // line 49
            echo "\t\t\t\t\t\t\t\t<h4 class=\"profile-user\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mode de réception"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<br><span>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drive"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t</h4>


\t\t\t\t\t\t\t\t<h4 class=\"profile-user\">";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date de retrait"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<br><span>
\t\t\t\t\t\t\t\t\t<i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateReception", []), "d/m/Y"), "html", null, true);
            echo "<br>
\t\t\t\t\t\t\t\t\t<i class=\"icon md-time\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeToString", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<h4 class=\"profile-user\">";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date de la commande"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<br><span>
\t\t\t\t\t\t\t\t<i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateReservation", []), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 64
            echo "\t\t\t\t\t\t\t\t<br><i class=\"icon md-time\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "createdAt", []), "h:i"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t";
            // line 68
            if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 3)) {
                // line 69
                echo "\t\t\t\t\t\t\t\t\t<h4 class=\"profile-user\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date Livraison"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t<br><span>
\t\t\t\t\t\t\t\t\t<i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>";
                // line 71
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateReception", []), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t\t\t\t\t";
            if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 4)) {
                // line 77
                echo "\t\t\t\t\t\t\t\t\t<h4 class=\"profile-user\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date Annulation"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t<br><span>
\t\t\t\t\t\t\t\t\t<i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>";
                // line 79
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateAnnulation", []), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t";
            }
            // line 83
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 84
            echo "\t\t\t\t\t\t\t\t<h4 class=\"profile-user\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mode de réception"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<br><span>";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Livraison"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t</h4>



\t\t\t\t\t\t\t\t<h4 class=\"profile-user\">";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adresse de livraison"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<br><span >
\t\t\t\t\t\t\t\t\t<i class=\"icon md-pin\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "adresse", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "ville", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "pays", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "cp", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<h4 class=\"profile-user\">";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Télephone"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<br><span>
\t\t\t\t\t\t\t\t\t\t";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "adresselivraison", []), "telephone", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t";
        }
        // line 101
        echo "


\t\t\t\t\t\t\t<h4 class=\"profile-user\">";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut Commande"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<br><span>\t<span class=\"badge ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statusCommandeCssClass", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutCommandeToString", [])), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<h4 class=\"profile-user\" style=\"margin-top: 15px\">";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut Paiement"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<br><span>\t<span class=\"badge ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statusPayementCssClass", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutPayementToString", [])), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t";
        // line 118
        echo "

\t\t\t\t\t\t\t";
        // line 120
        if ($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", [])) {
            // line 121
            echo "\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t<div class=\"panel\" style=\"background-color: #fafafa;border: 1px solid #cccccc;\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Coupon"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<span style=\"    font-weight: bold;\">";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "code", []), "html", null, true);
            echo "</span><br>
\t\t\t\t\t\t\t\t\t\t<span>";
            // line 129
            if (($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "type", []) == 1)) {
                // line 130
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("réduction de"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "montant", []), 0, "", " "), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute(            // line 131
($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "type", []) == 2)) {
                // line 132
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("réduction de"), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "pourcentage", []), "html", null, true);
                echo "%
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 134
            echo "\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        }
        // line 139
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End Page Widget -->
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<!-- Panel -->
\t\t\t\t\t<div class=\"panel\">
\t\t\t\t\t\t<div class=\"panel-body nav-tabs-animate nav-tabs-horizontal\" data-plugin=\"tabs\">
\t\t\t\t\t\t\t<div class=\"example table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table\" style=\"border-bottom: 1px solid #e0e0e0;\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th colspan=\"5\"><h4 class=\"profile-user text-right \">";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix Total"), "html", null, true);
        echo "  :
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 154
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "prix", []), 0, "", " "), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</h4></th>

\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produit"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t<th colspan=\"2\">";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QT"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commande_produit"] ?? $this->getContext($context, "commande_produit")));
        foreach ($context['_seq'] as $context["_key"] => $context["cp"]) {
            // line 167
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 86px;height: 86px;max-width: 100%;\" class=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\t\t\t alt=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cp"], "produit", []), "nom", []), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t data-original=\"/uploads/produits/";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cp"], "produit", []), "image", []), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t src=\"";
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
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin-top: 6px;font-size: 14px;font-weight: bold;color: #454545;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cp"], "produit", []), "nom", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 179
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "finalPrice", []), "prix", [], "array"), 0, "", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td   ";
            // line 181
            if ($this->getAttribute($context["cp"], "sizes", [])) {
                echo " style=\"width: 30%;\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 182
            if ($this->getAttribute($context["cp"], "sizes", [])) {
                // line 183
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["cp"], "produit", []), "sizes", []));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 184
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cp"], "sizes", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["cpsize"]) {
                        // line 185
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["cpsize"], $this->getAttribute($context["s"], "id", []), [], "array", true, true)) {
                            // line 186
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\" style=\"padding-left: 10px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin-right: 5px;margin-top: 6px;font-size: 14px;font-weight: bold;color: #454545;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 188
                            echo twig_escape_filter($this->env, $this->getAttribute($context["cpsize"], $this->getAttribute($context["s"], "id", []), [], "array"), "html", null, true);
                            echo "x</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\" float:left;display: inline-block;border: 2px solid #ddd;background-color: ";
                            // line 190
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "couleur", []), "codeCouleur", []), "html", null, true);
                            echo ";color: transparent;height: 33px;width: 33px;\"></p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin-left: 5px;margin-top: 6px;font-size: 14px;font-weight: bold;color: #454545;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 193
                            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "libelle", []), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 198
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cpsize'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 199
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 201
            echo "\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($context["cp"], "quantite", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td style=\"width: 20%;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin-top: 6px;font-size: 14px;font-weight: bold;color: #454545;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 205
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["cp"], "prix", []), 0, "", " "), "html", null, true);
            echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t<div class=\"navigation\">
\t\t\t\t\t\t\t\t\t";
        // line 215
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["commande_produit"] ?? $this->getContext($context, "commande_produit")));
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End Panel -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End Page -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/gestionnaire/commande/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 215,  492 => 211,  480 => 205,  474 => 202,  471 => 201,  468 => 200,  462 => 199,  456 => 198,  448 => 193,  442 => 190,  437 => 188,  433 => 186,  430 => 185,  425 => 184,  420 => 183,  418 => 182,  412 => 181,  407 => 179,  402 => 177,  386 => 172,  382 => 171,  378 => 170,  373 => 167,  369 => 166,  361 => 161,  357 => 160,  353 => 159,  345 => 154,  341 => 153,  325 => 139,  318 => 134,  310 => 132,  308 => 131,  301 => 130,  299 => 129,  295 => 128,  288 => 124,  283 => 121,  281 => 120,  277 => 118,  269 => 109,  265 => 108,  257 => 105,  253 => 104,  248 => 101,  241 => 97,  236 => 95,  224 => 92,  219 => 90,  211 => 85,  206 => 84,  203 => 83,  196 => 79,  190 => 77,  187 => 76,  179 => 71,  173 => 69,  171 => 68,  163 => 64,  159 => 62,  154 => 60,  148 => 57,  144 => 56,  139 => 54,  132 => 50,  127 => 49,  125 => 48,  122 => 47,  116 => 44,  113 => 43,  111 => 42,  106 => 40,  100 => 37,  96 => 36,  79 => 22,  75 => 21,  67 => 18,  51 => 4,  45 => 3,  29 => 1,);
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
\t<!-- Page -->
\t<style>
\t\th4 span {
\t\t\tfont-size: 13px;
\t\t\tfont-weight: normal;
\t\t}
\t\th4{
\t\t\tmargin-bottom: 20px;
\t\t}
\t</style>
\t<div class=\"page\">
\t\t<div class=\"page-header\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<h1 class=\"page-title\">{{ \"Details Commande\"|trans }} {{commande.reference}}</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 text-right\">
\t\t\t\t\t<a href=\"{{ path('ExportDetailsCommande',{'_filename':'Details_commandes','id':commande.id}) }}\" class=\"float-center btn btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
\t\t\t\t\t\t<i class=\"icon md-download\" aria-hidden=\"true\"></i> {{ \"exporter\"|trans }}</a>
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>
\t\t<div class=\"page-content container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<!-- Page Widget -->
\t\t\t\t\t<div class=\"card card-shadow text-center\">
\t\t\t\t\t\t<div class=\"card-block\">

\t\t\t\t\t\t\t<h3 class=\"profile-user\" style=\"margin-bottom: 5px;\">
\t\t\t\t\t\t\t\t{{commande.utilisateur.firstName }}
\t\t\t\t\t\t\t\t{{ commande.utilisateur.lastName}}
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<h5 class=\"profile-user\" style=\"    margin-top: 0px;\">
\t\t\t\t\t\t\t\t<i class=\"icon md-email\" aria-hidden=\"true\" style=\"margin-right:5 !important;\"></i>{{commande.utilisateur.email }}
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t{% if commande.utilisateur.tel  %}
\t\t\t\t\t\t\t\t<h5 class=\"profile-user\">
\t\t\t\t\t\t\t\t\t<i class=\"icon md-phone\" aria-hidden=\"true\" style=\"margin-right:5 !important;\"></i>{{commande.utilisateur.tel }}
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t{% if commande.adresselivraison == null %}
\t\t\t\t\t\t\t\t<h4 class=\"profile-user\">{{\"Mode de réception\"|trans}}
\t\t\t\t\t\t\t\t\t<br><span>{{ \"Drive\"|trans }}</span>
\t\t\t\t\t\t\t\t</h4>


\t\t\t\t\t\t\t\t<h4 class=\"profile-user\">{{ \"Date de retrait\"|trans }}
\t\t\t\t\t\t\t\t\t<br><span>
\t\t\t\t\t\t\t\t\t<i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>{{commande.dateReception|date(\"d/m/Y\") }}<br>
\t\t\t\t\t\t\t\t\t<i class=\"icon md-time\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>{{ commande.periodeToString }}
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<h4 class=\"profile-user\">{{ \"Date de la commande\"|trans }}
\t\t\t\t\t\t\t\t\t<br><span>
\t\t\t\t\t\t\t\t<i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>{{commande.dateReservation|date(\"d/m/Y\") }}
\t\t\t\t\t\t\t\t\t\t{#\t\t\t\t\t\t\t\t<br><i class=\"icon md-time\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>{{commande.dateReservation|date(\"h:i\") }}#}
\t\t\t\t\t\t\t\t<br><i class=\"icon md-time\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>{{commande.createdAt|date(\"h:i\") }}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t{% if commande.statutcommande == 3 %}
\t\t\t\t\t\t\t\t\t<h4 class=\"profile-user\">{{ \"Date Livraison\"|trans }}
\t\t\t\t\t\t\t\t\t\t<br><span>
\t\t\t\t\t\t\t\t\t<i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>{{commande.dateReception|date(\"d/m/Y\") }}
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if commande.statutcommande == 4 %}
\t\t\t\t\t\t\t\t\t<h4 class=\"profile-user\">{{ \"Date Annulation\"|trans }}
\t\t\t\t\t\t\t\t\t\t<br><span>
\t\t\t\t\t\t\t\t\t<i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>{{commande.dateAnnulation|date(\"d/m/Y\") }}
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<h4 class=\"profile-user\">{{\"Mode de réception\"|trans}}
\t\t\t\t\t\t\t\t\t<br><span>{{ \"Livraison\"|trans }}</span>
\t\t\t\t\t\t\t\t</h4>



\t\t\t\t\t\t\t\t<h4 class=\"profile-user\">{{ \"Adresse de livraison\"|trans }}
\t\t\t\t\t\t\t\t\t<br><span >
\t\t\t\t\t\t\t\t\t<i class=\"icon md-pin\" aria-hidden=\"true\" style=\"margin-right:5px !important;\"></i>{{commande.adresselivraison.adresse }},{{commande.adresselivraison.ville }},{{commande.adresselivraison.pays }},{{commande.adresselivraison.cp}}
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<h4 class=\"profile-user\">{{\"Télephone\"|trans}}
\t\t\t\t\t\t\t\t\t<br><span>
\t\t\t\t\t\t\t\t\t\t{{commande.adresselivraison.telephone }}
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t{% endif %}



\t\t\t\t\t\t\t<h4 class=\"profile-user\">{{ \"Statut Commande\"|trans }}
\t\t\t\t\t\t\t\t<br><span>\t<span class=\"badge {{ commande.statusCommandeCssClass }}\">{{ commande.statutCommandeToString|trans }}</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<h4 class=\"profile-user\" style=\"margin-top: 15px\">{{ \"Statut Paiement\"|trans }}
\t\t\t\t\t\t\t\t<br><span>\t<span class=\"badge {{ commande.statusPayementCssClass }}\">{{ commande.statutPayementToString|trans }}</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t{#
\t\t\t\t\t\t\t\t<h4 class=\"profile-user\" style=\"margin-top: 15px\">{{ \"Remboursement\"|trans }}
\t\t\t\t\t\t\t\t<br><span ><span class=\"badge {{ commande.remboursementCssClass }}\">{{ commande.remboursementToString }}</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t#}


\t\t\t\t\t\t\t{% if commande.coupon %}
\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t<div class=\"panel\" style=\"background-color: #fafafa;border: 1px solid #cccccc;\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">{{ \"Coupon\"|trans }}
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<span style=\"    font-weight: bold;\">{{ commande.coupon.code }}</span><br>
\t\t\t\t\t\t\t\t\t\t<span>{% if commande.coupon.type == 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t{{\"réduction de\"|trans}} {{ commande.coupon.montant |number_format(0, '', ' ')}}
\t\t\t\t\t\t\t\t\t\t\t{% elseif commande.coupon.type == 2 %}
\t\t\t\t\t\t\t\t\t\t\t\t{{\"réduction de\"|trans}}  {{ commande.coupon.pourcentage }}%
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End Page Widget -->
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<!-- Panel -->
\t\t\t\t\t<div class=\"panel\">
\t\t\t\t\t\t<div class=\"panel-body nav-tabs-animate nav-tabs-horizontal\" data-plugin=\"tabs\">
\t\t\t\t\t\t\t<div class=\"example table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table\" style=\"border-bottom: 1px solid #e0e0e0;\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th colspan=\"5\"><h4 class=\"profile-user text-right \">{{ \"Prix Total\"|trans }}  :
\t\t\t\t\t\t\t\t\t\t\t\t{{commande.prix|number_format(0, '', ' ')}}
\t\t\t\t\t\t\t\t\t\t\t</h4></th>

\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>{{ \"Produit\"|trans }}</th>
\t\t\t\t\t\t\t\t\t\t<th colspan=\"2\">{{ \"Details\"|trans }}</th>
\t\t\t\t\t\t\t\t\t\t<th>{{ \"QT\"|trans }}</th>
\t\t\t\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for cp in commande_produit %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width: 86px;height: 86px;max-width: 100%;\" class=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\t\t\t alt=\"{{ cp.produit.nom }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t data-original=\"/uploads/produits/{{ cp.produit.image }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t src=\"{%  if  cp.produit.image  and cp.produit.image != \"\" %}/uploads/produits/{{ cp.produit.image }}{%  elseif cp.produit.SousCategorie  and cp.produit.SousCategorie.image  and cp.produit.SousCategorie.image != \"\" %}/uploads/produits/{{ cp.produit.SousCategorie.image }}{% else %}{{ asset('/assets/img/default.jpeg') }}{% endif %}\">
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin-top: 6px;font-size: 14px;font-weight: bold;color: #454545;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cp.produit.nom }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{{ cp.produit.finalPrice[\"prix\"]|number_format(0, '', ' ') }}
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td   {% if cp.sizes %} style=\"width: 30%;\" {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t{% if cp.sizes %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for s in cp.produit.sizes %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for cpsize in cp.sizes %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if cpsize[s.id] is defined  %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\" style=\"padding-left: 10px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin-right: 5px;margin-top: 6px;font-size: 14px;font-weight: bold;color: #454545;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cpsize[s.id] }}x</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\" float:left;display: inline-block;border: 2px solid #ddd;background-color: {{s.couleur.codeCouleur}};color: transparent;height: 33px;width: 33px;\"></p>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin-left: 5px;margin-top: 6px;font-size: 14px;font-weight: bold;color: #454545;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ s.libelle }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ cp.quantite }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td style=\"width: 20%;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin-top: 6px;font-size: 14px;font-weight: bold;color: #454545;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cp.prix |number_format(0, '', ' ')}} </span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t<div class=\"navigation\">
\t\t\t\t\t\t\t\t\t{{ knp_pagination_render(commande_produit) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End Panel -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End Page -->
{% endblock %}
", "@Backend/gestionnaire/commande/show.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gestionnaire\\commande\\show.html.twig");
    }
}
