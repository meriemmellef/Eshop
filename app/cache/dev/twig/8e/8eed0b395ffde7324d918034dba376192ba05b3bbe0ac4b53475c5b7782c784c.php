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

/* @Backend/gestionnaire/commande/index.html.twig */
class __TwigTemplate_e6b1a75b1a7fb94d149050ce98ffa7919697a3775a2baab589af545bddf96d7c extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gestionnaire/commande/index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/gestionnaire/commande/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_page($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 3
        echo "\t<div class=\"page\">


\t\t<div class=\"page-header\">
\t\t\t<h1 class=\"page-title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Liste Des Commandes"), "html", null, true);
        echo "</h1>

\t\t\t<div class=\"page-header-actions\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"media-body text-center\">
\t\t\t\t\t\t\t<h4 class=\"mt-0 mb-5\"   style=\"color: #f02138;margin-bottom: -5px!important;\"> ";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["nbcommandes"] ?? $this->getContext($context, "nbcommandes"))), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t<small style=\"color: #505050;\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Commandes"), "html", null, true);
        echo "</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"page-content\" style=\"padding-top: 0 !important;padding-bottom: 0 !important;\">
\t\t\t<!-- Panel -->
\t\t\t<div class=\"panel\" >
\t\t\t\t<div class=\"panel-body container-fluid\" style=\"padding: 0 !important;\">
\t\t\t\t\t<div class=\"row row-lg\">


\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<!-- Example Bordered Table -->
\t\t\t\t\t\t\t<table class=\"table table-bordered\" style=\"border: none;\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr style=\"border-bottom: 1px solid #f3f3f3;\">
\t\t\t\t\t\t\t\t\t<th style=\"border: none;padding-left: 20px\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filtre"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"border: none;padding: 10px 20px\">

\t\t\t\t\t\t\t\t\t\t\t<form style=\"align-items: center\"  action=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_index");
        echo "\" method=\"get\">
                                             <div class=\"row\" >
\t\t\t\t\t\t\t\t\t\t\t<div  class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 80%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Station</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"station\" placeholder=\"choisir une station\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected hidden>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une station"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 48
        if ((($context["station"] ?? $this->getContext($context, "station")) == "")) {
            // line 49
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les stations"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les stations"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 57
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stations"] ?? $this->getContext($context, "stations")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 59
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((isset($context["station"]) || array_key_exists("station", $context))) {
                // line 60
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((($context["station"] ?? $this->getContext($context, "station")) == $this->getAttribute($context["s"], "id", []))) {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\" selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nom", []), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 65
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nom", []), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 69
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 70
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"dropdown-item\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nom", []), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 80%\" >

\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut Commande"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"statutcommande\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"\"  selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tous"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"0\" ";
        // line 86
        if (((isset($context["statutcommande"]) || array_key_exists("statutcommande", $context)) && (($context["statutcommande"] ?? $this->getContext($context, "statutcommande")) == "0"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Non Traitée"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"1\" ";
        // line 88
        if (((isset($context["statutcommande"]) || array_key_exists("statutcommande", $context)) && (($context["statutcommande"] ?? $this->getContext($context, "statutcommande")) == "1"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("En cours de traitement"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"2\" ";
        // line 90
        if (((isset($context["statutcommande"]) || array_key_exists("statutcommande", $context)) && (($context["statutcommande"] ?? $this->getContext($context, "statutcommande")) == "2"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Traitée"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"3\" ";
        // line 92
        if (((isset($context["statutcommande"]) || array_key_exists("statutcommande", $context)) && (($context["statutcommande"] ?? $this->getContext($context, "statutcommande")) == "3"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Livrée"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"4\" ";
        // line 94
        if (((isset($context["statutcommande"]) || array_key_exists("statutcommande", $context)) && (($context["statutcommande"] ?? $this->getContext($context, "statutcommande")) == "4"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Annulée"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 80%\" >

\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut Payement"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"statutpayement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"\"  selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tous"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"0\" ";
        // line 107
        if (((isset($context["statutpayement"]) || array_key_exists("statutpayement", $context)) && (($context["statutpayement"] ?? $this->getContext($context, "statutpayement")) == "0"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Non payée"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"1\" ";
        // line 109
        if (((isset($context["statutpayement"]) || array_key_exists("statutpayement", $context)) && (($context["statutpayement"] ?? $this->getContext($context, "statutpayement")) == "1"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payée"), "html", null, true);
        echo "</option>

\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t ";
        // line 129
        echo "\t\t\t\t\t\t\t\t\t\t\t<div style=\"padding-top: 10px\" class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 80%\">

\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Periode de reception"), "html", null, true);
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"periode\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"\"  selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tous"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"1\" ";
        // line 136
        if (((isset($context["periode"]) || array_key_exists("periode", $context)) && (($context["periode"] ?? $this->getContext($context, "periode")) == "1"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("De 8h à 10h"), "html", null, true);
        echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"2\" ";
        // line 138
        if (((isset($context["periode"]) || array_key_exists("periode", $context)) && (($context["periode"] ?? $this->getContext($context, "periode")) == "2"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("De 10h à 12h"), "html", null, true);
        echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"2\" ";
        // line 140
        if (((isset($context["periode"]) || array_key_exists("periode", $context)) && (($context["periode"] ?? $this->getContext($context, "periode")) == "3"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("De 12h à 14h"), "html", null, true);
        echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"4\" ";
        // line 142
        if (((isset($context["periode"]) || array_key_exists("periode", $context)) && (($context["periode"] ?? $this->getContext($context, "periode")) == "4"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("De 14h à 16h"), "html", null, true);
        echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"5\" ";
        // line 144
        if (((isset($context["periode"]) || array_key_exists("periode", $context)) && (($context["periode"] ?? $this->getContext($context, "periode")) == "5"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("De 16h à 18h"), "html", null, true);
        echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"6\" ";
        // line 146
        if (((isset($context["periode"]) || array_key_exists("periode", $context)) && (($context["periode"] ?? $this->getContext($context, "periode")) == "6"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("De 18h à 20h"), "html", null, true);
        echo " </option>

\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>





\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6  col-md-6 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Date </label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-daterange\" data-plugin=\"datepicker\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
                                                                <span class=\"input-group-addon\">
                                                                    <i class=\"icon md-calendar\" aria-hidden=\"true\"></i>
                                                                </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"start\" value=\"";
        // line 165
        if (((isset($context["start"]) || array_key_exists("start", $context)) && (($context["start"] ?? $this->getContext($context, "start")) != ""))) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["start"] ?? $this->getContext($context, "start")), "html", null, true);
            echo " ";
        }
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("to"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"end\" value=\"";
        // line 169
        if (((isset($context["end"]) || array_key_exists("end", $context)) && (($context["end"] ?? $this->getContext($context, "end")) != ""))) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["end"] ?? $this->getContext($context, "end")), "html", null, true);
            echo " ";
        }
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Réferencecmd"), "html", null, true);
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"reference\" value=\"";
        // line 176
        if ((isset($context["reference"]) || array_key_exists("reference", $context))) {
            echo twig_escape_filter($this->env, ($context["reference"] ?? $this->getContext($context, "reference")), "html", null, true);
        }
        echo "\" placeholder=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Réference"), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div style=\"padding-top: 10px\" class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Client"), "html", null, true);
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"client\" value=\"";
        // line 181
        if ((isset($context["client"]) || array_key_exists("client", $context))) {
            echo twig_escape_filter($this->env, ($context["client"] ?? $this->getContext($context, "client")), "html", null, true);
        }
        echo "\" placeholder=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Client"), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div  class=\"col-lg-12  col-md-12 col-xs-12 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t<button style=\"margin-right: 10px;\" type=\"submit\" class=\" btn btn-icon social-evernote waves-effect waves-classic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExportCommande");
        echo "\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon md-download\" aria-hidden=\"true\"></i> ";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("exporter"), "html", null, true);
        echo "</a>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</form>


\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t<!-- End Example Bordered Table -->
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- End Panel -->
\t\t</div>
\t\t<div class=\"page-content\" style=\"padding-top: 0px \" >
\t\t\t<!-- Panel -->
\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"panel-body container-fluid\"  style=\"padding-left: 0px !important;padding-right: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;\">
\t\t\t\t\t<div class=\"row row-lg\">

\t\t\t\t\t\t<div style=\" padding-left: 48px;\" class=\"col-lg-12  col-md-12 col-xs-12 text-left\">
";
        // line 225
        echo "

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<!-- Example Bordered Table -->

\t\t\t\t\t\t\t<table class=\"table table-striped\" id=\"produits\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr class=\"\">
\t\t\t\t\t\t\t\t\t<th style=\"padding-left: 20px;width: 5%\">
\t\t\t\t\t\t\t\t\t\t";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Réference"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 13%\">";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Client/Station"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 7%\">";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mode de réception"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 5%\">";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nbr Produits"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 8%\">";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut Commande"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 8%\">";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut Paiement"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t";
        // line 246
        echo "\t\t\t\t\t\t\t\t\t<th style=\"width: 15%\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date de la commande"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 14%\">";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date de retrait"), "html", null, true);
        echo " </th>
\t\t\t\t\t\t\t\t\t<th class=\"text-center text-nowrap\" style=\"padding-right:20px;width: 10%\">Action</th>

\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 254
            echo "\t\t\t\t\t\t\t\t\t<tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "id", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<td  style=\"padding-left: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 265
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-left\">


\t\t\t\t\t\t\t\t\t\t\t\t<label>";
            // line 268
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "reference", []), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mt-0 mb-5\">";
            // line 274
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "utilisateur", []), "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "utilisateur", []), "lastName", []), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<small>";
            // line 275
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "utilisateur", []), "tel", []), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t\t\t\t\t<small>";
            // line 276
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "station", []), "nom", []), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t<td  style=\"padding-left: 20px; \" style=\"width: 100px;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 282
            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "adresselivraison", [])) {
                // line 283
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Livraison"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 285
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drive"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 287
            echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 289
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nbproduit", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge ";
            // line 292
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "statusCommandeCssClass", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "statutCommandeToString", [])), "html", null, true);
            echo "</span>

\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge ";
            // line 296
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "statusPayementCssClass", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "statutPayementToString", [])), "html", null, true);
            echo "</span>

\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
            // line 304
            echo "
\t\t\t\t\t\t\t\t\t\t<td >
\t\t\t\t\t\t\t\t\t\t\t";
            // line 306
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "adresselivraison", []) == null)) {
                // line 307
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<h6> <i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 308
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "dateReservation", []), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6><i class=\"icon md-alarm\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 311
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "createdAt", []), "h:i"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</h6>

\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 315
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<h6> <i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 316
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "dateReservation", []), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6><i class=\"icon md-alarm\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 319
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "createdAt", []), "h:i"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 322
            echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 324
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "adresselivraison", []) == null)) {
                // line 325
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<h6> <i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 326
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "dateReception", []), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 328
                if ($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "periodeReception", [])) {
                    // line 329
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<h6><i class=\"icon md-alarm\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 330
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "periodeToString", []), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 333
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 335
            echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\" style=\"min-width: 115px;padding-right:20px;\">

\t\t\t\t\t\t\t\t\t";
            // line 363
            echo "
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-pure btn-danger md-plus waves-effect waves-classic\"
\t\t\t\t\t\t\t\t\t\t\t   style=\"color: #46bf8c!important;border: 1px solid;\"
\t\t\t\t\t\t\t\t\t\t\t   href=\"";
            // line 366
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_show", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "id", [])]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 371
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<div class=\"navigation\">
\t\t\t\t\t\t\t\t";
        // line 374
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["commandes"] ?? $this->getContext($context, "commandes")));
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- End Example Bordered Table -->
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- End Panel -->
\t\t</div>

\t\t</div>
\t<script>
\t\tvar checkbox = document.querySelector(\"input:checked\");

\t\tcheckbox.addEventListener( 'change', function() {
\t\t\tif(\$(\"input:checked\").length>0){
\t\t\t\talert(\$(\"input:checked\").length)
\t\t\t\tdocument.getElementById('rembourser').style.backgroundColor = \"#46bf8c!important\";
\t\t\t\tdocument.getElementById('rembourser').style.borderColor = \"#46bf8c!important\";
\t\t\t}
\t\t\telse{
\t\t\t\talert(\$(\"input:checked\").length)
\t\t\t\tdocument.getElementById('rembourser').style.backgroundColor = \"#616161!important\";
\t\t\t\tdocument.getElementById('rembourser').style.borderColor = \"#616161!important\";
\t\t\t}
\t\t})
\t\tfunction remboursercommande() {

\t\t\tvar array_produit = new Array();
\t\t\t\$(\"input:checked\").each(function () {
\t\t\t\tarray_produit.push(\$(this).val());
\t\t\t});
\t\t\t//array_tenant_id = [\"1000\", \"1002\"]
\t\t\t\$.ajax({
\t\t\t\turl: \"";
        // line 410
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rembourserCommande");
        echo "\",
\t\t\t\tmethod: 'GET',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: {\"checkbox\": array_produit},
\t\t\t\tsuccess: function (data) {

\t\t\t\t\tfor (let i = 0; i < data.produits.length; i++)
                   {
                   \tconsole.log('#produits #'+ data.produits[i]+' #remboursement'+data.produits[i])
\t\t\t\t\t   \$('#produits #'+ data.produits[i]+' #remboursement'+data.produits[i]).html(\"<span class='badge badge-success'>Remboursée</span>\");

\t\t\t\t\t  // \$(\"#\" + produits + \" td.remboursement\"+data.produits[i]).html(\"<span class='badge badge-success'>Remboursée</span>\");
\t\t\t\t\t  // \$(\"#produits\"  + \" td.remboursement\"+data.produits[i]).html(\"<span class='badge badge-success'>Remboursée</span>\");

\t\t\t\t   }
\t\t\t\t\t//read response: data
\t\t\t\t}
\t\t\t});
\t\t}
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/gestionnaire/commande/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  754 => 410,  715 => 374,  710 => 371,  699 => 366,  694 => 363,  689 => 335,  685 => 333,  679 => 330,  676 => 329,  674 => 328,  669 => 326,  666 => 325,  664 => 324,  660 => 322,  654 => 319,  648 => 316,  645 => 315,  638 => 311,  632 => 308,  629 => 307,  627 => 306,  623 => 304,  615 => 296,  606 => 292,  600 => 289,  596 => 287,  590 => 285,  584 => 283,  582 => 282,  573 => 276,  569 => 275,  563 => 274,  554 => 268,  549 => 265,  543 => 254,  539 => 253,  530 => 247,  525 => 246,  521 => 241,  517 => 240,  513 => 239,  509 => 238,  505 => 237,  500 => 235,  488 => 225,  458 => 190,  454 => 189,  439 => 181,  435 => 180,  424 => 176,  420 => 175,  407 => 169,  403 => 168,  393 => 165,  372 => 147,  366 => 146,  362 => 145,  356 => 144,  352 => 143,  346 => 142,  342 => 141,  336 => 140,  332 => 139,  326 => 138,  322 => 137,  316 => 136,  312 => 135,  306 => 132,  301 => 129,  293 => 110,  287 => 109,  283 => 108,  277 => 107,  273 => 106,  267 => 103,  256 => 95,  250 => 94,  246 => 93,  240 => 92,  236 => 91,  230 => 90,  226 => 89,  220 => 88,  216 => 87,  210 => 86,  206 => 85,  200 => 82,  191 => 75,  185 => 74,  179 => 71,  174 => 70,  171 => 69,  165 => 66,  160 => 65,  154 => 62,  149 => 61,  146 => 60,  143 => 59,  139 => 58,  136 => 57,  130 => 54,  127 => 53,  121 => 50,  118 => 49,  116 => 48,  112 => 47,  103 => 41,  93 => 34,  70 => 14,  66 => 13,  57 => 7,  51 => 3,  45 => 2,  29 => 1,);
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
\t<div class=\"page\">


\t\t<div class=\"page-header\">
\t\t\t<h1 class=\"page-title\">{{ \"Liste Des Commandes\"|trans }}</h1>

\t\t\t<div class=\"page-header-actions\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"media-body text-center\">
\t\t\t\t\t\t\t<h4 class=\"mt-0 mb-5\"   style=\"color: #f02138;margin-bottom: -5px!important;\"> {{ nbcommandes|length }}</h4>
\t\t\t\t\t\t\t<small style=\"color: #505050;\">{{ \"Commandes\"|trans }}</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"page-content\" style=\"padding-top: 0 !important;padding-bottom: 0 !important;\">
\t\t\t<!-- Panel -->
\t\t\t<div class=\"panel\" >
\t\t\t\t<div class=\"panel-body container-fluid\" style=\"padding: 0 !important;\">
\t\t\t\t\t<div class=\"row row-lg\">


\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<!-- Example Bordered Table -->
\t\t\t\t\t\t\t<table class=\"table table-bordered\" style=\"border: none;\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr style=\"border-bottom: 1px solid #f3f3f3;\">
\t\t\t\t\t\t\t\t\t<th style=\"border: none;padding-left: 20px\">{{ \"Filtre\"|trans }}</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"border: none;padding: 10px 20px\">

\t\t\t\t\t\t\t\t\t\t\t<form style=\"align-items: center\"  action=\"{{ path('commande_index') }}\" method=\"get\">
                                             <div class=\"row\" >
\t\t\t\t\t\t\t\t\t\t\t<div  class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 80%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Station</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"station\" placeholder=\"choisir une station\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected hidden>{{ \"choisir une station\"|trans }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if station == '' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ \"Toutes les stations\"|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ \"Toutes les stations\"|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for s in stations %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if station is defined   %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if station == s.id %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"dropdown-item\" value=\"{{ s.id }}\" role=\"menuitem\" selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ s.nom }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"dropdown-item\" value=\"{{ s.id }}\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ s.nom }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"dropdown-item\" value=\"{{ s.id }}\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ s.nom }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 80%\" >

\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">{{ \"Statut Commande\"|trans }}</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"statutcommande\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"\"  selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ \"Tous\"|trans }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"0\" {% if statutcommande is defined and statutcommande == '0' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"Non Traitée\"|trans}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"1\" {% if statutcommande is defined and statutcommande == '1' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ \"En cours de traitement\"|trans }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"2\" {% if statutcommande is defined and statutcommande == '2' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"Traitée\"|trans}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"3\" {% if statutcommande is defined and statutcommande == '3' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"Livrée\"|trans}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"4\" {% if statutcommande is defined and statutcommande == '4' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"Annulée\"|trans}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 80%\" >

\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">{{ \"Statut Payement\"|trans }}</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"statutpayement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"\"  selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ \"Tous\"|trans }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"0\" {% if statutpayement is defined and statutpayement == '0' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"Non payée\"|trans}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"1\" {% if statutpayement is defined and statutpayement == '1' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"Payée\"|trans}}</option>

\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t {#
\t\t\t\t\t\t\t\t\t\t\t\t \t<div class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">{{ \"Remboursement\"|trans }} </label>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"remboursement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"\"  selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ \"Tous\"|trans }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"0\" {% if remboursement is defined and remboursement == '0' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"Non remboursée\"|trans}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"1\" {% if remboursement is defined and remboursement == '1' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"Remboursée\"|trans}}</option>

\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t #}
\t\t\t\t\t\t\t\t\t\t\t<div style=\"padding-top: 10px\" class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 80%\">

\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">{{ \"Periode de reception\"|trans }} </label>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"periode\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"\"  selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ \"Tous\"|trans }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"1\" {% if periode is defined and periode == '1' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"De 8h à 10h\"|trans}} </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"2\" {% if periode is defined and periode == '2' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"De 10h à 12h\"|trans}} </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"2\" {% if periode is defined and periode == '3' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"De 12h à 14h\"|trans}} </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"4\" {% if periode is defined and periode == '4' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"De 14h à 16h\"|trans}} </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"5\" {% if periode is defined and periode == '5' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"De 16h à 18h\"|trans}} </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"6\" {% if periode is defined and periode == '6' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"De 18h à 20h\"|trans}} </option>

\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>





\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6  col-md-6 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Date </label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-daterange\" data-plugin=\"datepicker\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
                                                                <span class=\"input-group-addon\">
                                                                    <i class=\"icon md-calendar\" aria-hidden=\"true\"></i>
                                                                </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"start\" value=\"{% if start is defined  and start !=''%} {{ start }} {% endif %}\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">{{ \"to\"|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"end\" value=\"{% if end  is defined and end !='' %} {{ end }} {% endif %}\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">{{\"Réferencecmd\"|trans}} </label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"reference\" value=\"{% if reference is defined %}{{reference}}{% endif %}\" placeholder={{ \"Réference\"|trans }}>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div style=\"padding-top: 10px\" class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">{{ \"Client\"|trans }} </label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"client\" value=\"{% if client is defined %}{{client}}{% endif %}\" placeholder={{ \"Client\"|trans }}>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div  class=\"col-lg-12  col-md-12 col-xs-12 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t<button style=\"margin-right: 10px;\" type=\"submit\" class=\" btn btn-icon social-evernote waves-effect waves-classic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('ExportCommande') }}\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon md-download\" aria-hidden=\"true\"></i> {{ \"exporter\"|trans }}</a>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</form>


\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t<!-- End Example Bordered Table -->
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- End Panel -->
\t\t</div>
\t\t<div class=\"page-content\" style=\"padding-top: 0px \" >
\t\t\t<!-- Panel -->
\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"panel-body container-fluid\"  style=\"padding-left: 0px !important;padding-right: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;\">
\t\t\t\t\t<div class=\"row row-lg\">

\t\t\t\t\t\t<div style=\" padding-left: 48px;\" class=\"col-lg-12  col-md-12 col-xs-12 text-left\">
{#

\t<button onclick=\"remboursercommande()\"
\t\t\t\t\t\t\t\t\tid=\"rembourser\" name=\"rembourser\"
\t\t\t\t\t\t\t\t\tclass=\"float-left  btn btn-icon social-evernote waves-effect waves-classic\"
\t\t\t\t\t\t\tstyle=\"background-color: #616161!important;border-color: #616161;box-shadow: none;\">
\t\t\t\t\t\t\t\t<i class=\"icon md-download\" aria-hidden=\"true\"></i> {{ \"rembourser\"|trans }}</button>
#}


\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<!-- Example Bordered Table -->

\t\t\t\t\t\t\t<table class=\"table table-striped\" id=\"produits\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr class=\"\">
\t\t\t\t\t\t\t\t\t<th style=\"padding-left: 20px;width: 5%\">
\t\t\t\t\t\t\t\t\t\t{{\"Réference\"|trans}}
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 13%\">{{ \"Client/Station\"|trans }}</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 7%\">{{\"Mode de réception\"|trans}}</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 5%\">{{ \"Nbr Produits\"|trans }}</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 8%\">{{ \"Statut Commande\"|trans }}</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 8%\">{{ \"Statut Paiement\"|trans }}</th>
\t\t\t\t\t\t\t\t\t{#
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 10%\">{{ \"Remboursement\"|trans }} </th>

\t\t\t\t\t\t\t\t\t#}
\t\t\t\t\t\t\t\t\t<th style=\"width: 15%\">{{ \"Date de la commande\"|trans }}</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 14%\">{{\"Date de retrait\"|trans}} </th>
\t\t\t\t\t\t\t\t\t<th class=\"text-center text-nowrap\" style=\"padding-right:20px;width: 10%\">Action</th>

\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t{% for c in commandes %}
\t\t\t\t\t\t\t\t\t<tr id=\"{{ c.0.commande.id }}\">
\t\t\t\t\t\t\t\t\t\t<td  style=\"padding-left: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t{#
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom checkbox-primary text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set key = c.0.commande.id  %}
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"checkbox[]\"  value=\"{{ key }}\" id=\"checkbox{{ key }}\" {% if checkbox[ key ] is defined %} checked=\"\" {% endif %}>


\t\t\t\t\t\t\t\t\t\t\t\t<label>{{ c.0.commande.reference }}</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t#}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-left\">


\t\t\t\t\t\t\t\t\t\t\t\t<label>{{ c.0.commande.reference }}</label>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mt-0 mb-5\">{{ c.0.commande.utilisateur.firstName }} {{ c.0.commande.utilisateur.lastName }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<small>{{ c.0.commande.utilisateur.tel }}</small>
\t\t\t\t\t\t\t\t\t\t\t\t<small>{{ c.0.commande.station.nom }}</small>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t<td  style=\"padding-left: 20px; \" style=\"width: 100px;\">
\t\t\t\t\t\t\t\t\t\t\t{% if c.0.commande.adresselivraison %}
\t\t\t\t\t\t\t\t\t\t\t{{ \"Livraison\"|trans }}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t{{ \"Drive\"|trans }}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t{{ c.nbproduit }}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge {{ c.0.commande.statusCommandeCssClass }}\">{{ c.0.commande.statutCommandeToString|trans }}</span>

\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge {{ c.0.commande.statusPayementCssClass }}\">{{ c.0.commande.statutPayementToString|trans }}</span>

\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t{#
\t\t\t\t\t\t\t\t\t\t\t<td id=\"remboursement{{ c.0.commande.id }}\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge {{ c.0.commande.remboursementCssClass }}\">{{ c.0.commande.remboursementToString }}</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t#}

\t\t\t\t\t\t\t\t\t\t<td >
\t\t\t\t\t\t\t\t\t\t\t{% if c.0.commande.adresselivraison == null %}
\t\t\t\t\t\t\t\t\t\t\t\t<h6> <i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ c.0.commande.dateReservation|date(\"d/m/Y\") }}
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6><i class=\"icon md-alarm\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ c.0.commande.createdAt|date(\"h:i\") }}
\t\t\t\t\t\t\t\t\t\t\t\t</h6>

\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<h6> <i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ c.0.commande.dateReservation|date(\"d/m/Y\") }}
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6><i class=\"icon md-alarm\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ c.0.commande.createdAt|date(\"h:i\") }}
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t{% if c.0.commande.adresselivraison == null %}
\t\t\t\t\t\t\t\t\t\t\t\t<h6> <i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ c.0.commande.dateReception|date(\"d/m/Y\")  }}
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t{% if c.0.commande.periodeReception %}
\t\t\t\t\t\t\t\t\t\t\t\t<h6><i class=\"icon md-alarm\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ c.0.commande.periodeToString }}
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\" style=\"min-width: 115px;padding-right:20px;\">

\t\t\t\t\t\t\t\t\t{#
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t   class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \"
\t\t\t\t\t\t\t\t\t\t\t\t   style=\"color: #b1b1b1;border: 1px solid;\"
\t\t\t\t\t\t\t\t\t\t\t\t   id=\"exampleHoverDropdown1\" data-hover=\"dropdown\" data-delay=\"1000\" data-toggle=\"dropdown\" aria-expanded=\"false\"></a>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"exampleHoverDropdown1\" role=\"menu\" x-placement=\"bottom-start\" style=\"position: absolute; transform: translate3d(0px, 36px, 0px); top: 0px; left: 0px; will-change: transform;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('commnde_edit', { 'id': c.0.commande.id,'remboursement' :0 }) }}\" class=\"dropdown-item\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">{{\"Non remboursée\"|trans}}</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('commnde_edit', { 'id': c.0.commande.id,'remboursement' :1 }) }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t   class=\"dropdown-item\"
\t\t\t\t\t\t\t\t\t\t\t\t\t   role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">{{\"Remboursée\"|trans}}</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t#}

\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-pure btn-danger md-plus waves-effect waves-classic\"
\t\t\t\t\t\t\t\t\t\t\t   style=\"color: #46bf8c!important;border: 1px solid;\"
\t\t\t\t\t\t\t\t\t\t\t   href=\"{{ path('commande_show', { 'id': c.0.commande.id }) }}\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<div class=\"navigation\">
\t\t\t\t\t\t\t\t{{ knp_pagination_render(commandes) }}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- End Example Bordered Table -->
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- End Panel -->
\t\t</div>

\t\t</div>
\t<script>
\t\tvar checkbox = document.querySelector(\"input:checked\");

\t\tcheckbox.addEventListener( 'change', function() {
\t\t\tif(\$(\"input:checked\").length>0){
\t\t\t\talert(\$(\"input:checked\").length)
\t\t\t\tdocument.getElementById('rembourser').style.backgroundColor = \"#46bf8c!important\";
\t\t\t\tdocument.getElementById('rembourser').style.borderColor = \"#46bf8c!important\";
\t\t\t}
\t\t\telse{
\t\t\t\talert(\$(\"input:checked\").length)
\t\t\t\tdocument.getElementById('rembourser').style.backgroundColor = \"#616161!important\";
\t\t\t\tdocument.getElementById('rembourser').style.borderColor = \"#616161!important\";
\t\t\t}
\t\t})
\t\tfunction remboursercommande() {

\t\t\tvar array_produit = new Array();
\t\t\t\$(\"input:checked\").each(function () {
\t\t\t\tarray_produit.push(\$(this).val());
\t\t\t});
\t\t\t//array_tenant_id = [\"1000\", \"1002\"]
\t\t\t\$.ajax({
\t\t\t\turl: \"{{ path('rembourserCommande') }}\",
\t\t\t\tmethod: 'GET',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: {\"checkbox\": array_produit},
\t\t\t\tsuccess: function (data) {

\t\t\t\t\tfor (let i = 0; i < data.produits.length; i++)
                   {
                   \tconsole.log('#produits #'+ data.produits[i]+' #remboursement'+data.produits[i])
\t\t\t\t\t   \$('#produits #'+ data.produits[i]+' #remboursement'+data.produits[i]).html(\"<span class='badge badge-success'>Remboursée</span>\");

\t\t\t\t\t  // \$(\"#\" + produits + \" td.remboursement\"+data.produits[i]).html(\"<span class='badge badge-success'>Remboursée</span>\");
\t\t\t\t\t  // \$(\"#produits\"  + \" td.remboursement\"+data.produits[i]).html(\"<span class='badge badge-success'>Remboursée</span>\");

\t\t\t\t   }
\t\t\t\t\t//read response: data
\t\t\t\t}
\t\t\t});
\t\t}
\t</script>
{% endblock %}
", "@Backend/gestionnaire/commande/index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gestionnaire\\commande\\index.html.twig");
    }
}
