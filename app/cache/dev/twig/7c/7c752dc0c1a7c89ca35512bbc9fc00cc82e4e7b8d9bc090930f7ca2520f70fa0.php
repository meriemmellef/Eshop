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

/* BackendBundle:gerant/commande:index.html.twig */
class __TwigTemplate_bed4399c922249e60839a831bec920396822d05bbde90223e0f2631c63b04101 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:gerant/commande:index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "BackendBundle:gerant/commande:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 4
        echo "\t<div class=\"page\">


\t\t<div class=\"page-header\">
\t\t\t<h1 class=\"page-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Liste Des Commandes"), "html", null, true);
        echo "</h1>

\t\t\t<div class=\"page-header-actions\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"media-body text-center\">
\t\t\t\t\t\t\t<h4 class=\"mt-0 mb-5\"  style=\"color: #f02138;margin-bottom: -5px!important;\"> ";
        // line 14
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["nbcommandes"] ?? $this->getContext($context, "nbcommandes"))), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t<small style=\"\">";
        // line 15
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
\t\t\t\t\t\t\t\t\t<th style=\"border: none;\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filtre"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"border: none;\">
\t\t\t\t\t\t\t\t\t\t<form  class=\"row\" style=\"align-items: center;max-width: 1550px;\" action=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_gerant_index");
        echo "\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"padding-top: 10px\" class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Réferencecmd"), "html", null, true);
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"reference\" value=\"";
        // line 43
        if ((isset($context["reference"]) || array_key_exists("reference", $context))) {
            echo twig_escape_filter($this->env, ($context["reference"] ?? $this->getContext($context, "reference")), "html", null, true);
        }
        echo "\" placeholder=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Réference"), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Client"), "html", null, true);
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"client\" value=\"";
        // line 47
        if ((isset($context["client"]) || array_key_exists("client", $context))) {
            echo twig_escape_filter($this->env, ($context["client"] ?? $this->getContext($context, "client")), "html", null, true);
        }
        echo "\" placeholder=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Client"), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 80%\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"statutcommande\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"\"  selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tous"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"0\" ";
        // line 56
        if (((isset($context["statutcommande"]) || array_key_exists("statutcommande", $context)) && (($context["statutcommande"] ?? $this->getContext($context, "statutcommande")) == "0"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Non Payée"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"1\" ";
        // line 58
        if (((isset($context["statutcommande"]) || array_key_exists("statutcommande", $context)) && (($context["statutcommande"] ?? $this->getContext($context, "statutcommande")) == "1"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("En cours de traitement"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"2\" ";
        // line 60
        if (((isset($context["statutcommande"]) || array_key_exists("statutcommande", $context)) && (($context["statutcommande"] ?? $this->getContext($context, "statutcommande")) == "2"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Traitée"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"3\" ";
        // line 62
        if (((isset($context["statutcommande"]) || array_key_exists("statutcommande", $context)) && (($context["statutcommande"] ?? $this->getContext($context, "statutcommande")) == "3"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Livrée"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"4\" ";
        // line 64
        if (((isset($context["statutcommande"]) || array_key_exists("statutcommande", $context)) && (($context["statutcommande"] ?? $this->getContext($context, "statutcommande")) == "4"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Annulée"), "html", null, true);
        echo "</option>



\t\t\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 80%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut Payement"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"statutpayement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"\"  selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tous"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"0\" ";
        // line 79
        if (((isset($context["statutpayement"]) || array_key_exists("statutpayement", $context)) && (($context["statutpayement"] ?? $this->getContext($context, "statutpayement")) == "0"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("nonpayée"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"1\" ";
        // line 81
        if (((isset($context["statutpayement"]) || array_key_exists("statutpayement", $context)) && (($context["statutpayement"] ?? $this->getContext($context, "statutpayement")) == "1"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payée"), "html", null, true);
        echo "</option>

\t\t\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 103
        echo "
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Periode de reception"), "html", null, true);
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"periode\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"\"  selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tous"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"1\" ";
        // line 109
        if (((isset($context["periode"]) || array_key_exists("periode", $context)) && (($context["periode"] ?? $this->getContext($context, "periode")) == "1"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("De 8h à 10h"), "html", null, true);
        echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"2\" ";
        // line 111
        if (((isset($context["periode"]) || array_key_exists("periode", $context)) && (($context["periode"] ?? $this->getContext($context, "periode")) == "2"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("De 10h à 12h"), "html", null, true);
        echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"3\" ";
        // line 113
        if (((isset($context["periode"]) || array_key_exists("periode", $context)) && (($context["periode"] ?? $this->getContext($context, "periode")) == "3"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("De 12h à 14h"), "html", null, true);
        echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"4\" ";
        // line 115
        if (((isset($context["periode"]) || array_key_exists("periode", $context)) && (($context["periode"] ?? $this->getContext($context, "periode")) == "4"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("De 14h à 16h"), "html", null, true);
        echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"5\" ";
        // line 117
        if (((isset($context["periode"]) || array_key_exists("periode", $context)) && (($context["periode"] ?? $this->getContext($context, "periode")) == "5"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("De 16h à 18h"), "html", null, true);
        echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"6\" ";
        // line 119
        if (((isset($context["periode"]) || array_key_exists("periode", $context)) && (($context["periode"] ?? $this->getContext($context, "periode")) == "6"))) {
            echo " selected ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("De 18h à 20h"), "html", null, true);
        echo " </option>

\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4  col-md-4 col-xs-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date"), "html", null, true);
        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-daterange\" data-plugin=\"datepicker\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
                                                                <span class=\"input-group-addon\">
                                                                    <i class=\"icon md-calendar\" aria-hidden=\"true\"></i>
                                                                </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"start\" value=\"";
        // line 131
        if (((isset($context["start"]) || array_key_exists("start", $context)) && (($context["start"] ?? $this->getContext($context, "start")) != ""))) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["start"] ?? $this->getContext($context, "start")), "html", null, true);
            echo " ";
        }
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("to"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"end\" value=\"";
        // line 135
        if (((isset($context["end"]) || array_key_exists("end", $context)) && (($context["end"] ?? $this->getContext($context, "end")) != ""))) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["end"] ?? $this->getContext($context, "end")), "html", null, true);
            echo " ";
        }
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3  col-md-3 col-xs-3 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" style=\"margin-right: 10px;\" class=\"btn btn-icon social-evernote waves-effect waves-classic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExportGerantCommande");
        echo "\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon md-download\" aria-hidden=\"true\"></i> ";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("exporter"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>

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


\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<!-- Example Bordered Table -->

\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr class=\"\">
\t\t\t\t\t\t\t\t\t<th style=\"padding-left: 20px;width: 10%\">";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Réference"), "html", null, true);
        echo " </th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 15%\">Client</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 10%\">";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mode de réception"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 10%\">";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nombre Produits"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 10%\">";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut Commande"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 10%\">";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut Payement"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t";
        // line 186
        echo "\t\t\t\t\t\t\t\t\t<th style=\"width: 10%\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date de la commande"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 10%\">";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date de retrait"), "html", null, true);
        echo " </th>
\t\t\t\t\t\t\t\t\t<th class=\"text-right text-nowrap\" style=\"padding-right:42px;width: 5%\">Action</th>

\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 194
            echo "\t\t\t\t\t\t\t\t\t<tr >
\t\t\t\t\t\t\t\t\t\t<td  style=\"padding-left: 20px; \" style=\"width: 100px;\">";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "reference", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mt-0 mb-5\">";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "utilisateur", []), "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "utilisateur", []), "lastName", []), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<small>";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "utilisateur", []), "tel", []), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td  style=\"padding-left: 20px; \" style=\"width: 100px;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 205
            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "adresselivraison", [])) {
                // line 206
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("livraison"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 208
                echo "\t\t\t\t\t\t\t\t\t\t\t\tDrive
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 210
            echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nbproduit", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge ";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "statusCommandeCssClass", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "statutCommandeToString", [])), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge ";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "statusPayementCssClass", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "statutPayementToString", [])), "html", null, true);
            echo "</span>

\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
            // line 228
            echo "
\t\t\t\t\t\t\t\t\t\t<td >
\t\t\t\t\t\t\t\t\t\t\t";
            // line 230
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "adresselivraison", []) == null)) {
                // line 231
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<h6> <i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 232
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "dateReservation", []), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6><i class=\"icon md-alarm\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 235
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "createdAt", []), "h:i"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 238
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<h6> <i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 239
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "dateReservation", []), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6><i class=\"icon md-alarm\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 242
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "createdAt", []), "h:i"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 245
            echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 247
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "adresselivraison", []) == null)) {
                // line 248
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<h6> <i class=\"icon md-calendar\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 249
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "dateReception", []), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 251
                if ($this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "periodeReception", [])) {
                    // line 252
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><i class=\"icon md-alarm\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 253
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "periodeToString", []), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 256
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 258
            echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\" style=\"min-width: 110px;padding-right:20px;\">



\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-pure btn-default icon md-edit waves-effect waves-classic\" id=\"exampleHoverDropdown1\" data-hover=\"dropdown\" data-delay=\"1000\" data-toggle=\"dropdown\" aria-expanded=\"false\"></a>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"exampleHoverDropdown1\" role=\"menu\" x-placement=\"bottom-start\" style=\"position: absolute; transform: translate3d(0px, 36px, 0px); top: 0px; left: -70px; will-change: transform;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 267
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commnde_gerant_edit", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "id", []), "statut" => 1, "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\" class=\"dropdown-item\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 270
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("En cours de\ttraitement"), "html", null, true);
            echo "</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 281
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 283
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commnde_gerant_edit", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "id", []), "statut" => 2, "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\" class=\"dropdown-item\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">";
            // line 285
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Traitée"), "html", null, true);
            echo "</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 288
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commnde_gerant_edit", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "id", []), "statut" => 3, "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\" class=\"dropdown-item\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">";
            // line 290
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Livrée"), "html", null, true);
            echo "</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 293
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commnde_gerant_edit", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "id", []), "statut" => 4, "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\" class=\"dropdown-item\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">";
            // line 295
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Annulée"), "html", null, true);
            echo "</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-pure btn-default icon  md-details waves-effect waves-classic\" href=\"";
            // line 302
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_gerant_show", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], 0, []), "commande", []), "id", [])]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon md-plus\" style=\"color: #46bf8c!important;\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<div class=\"navigation\">
\t\t\t\t\t\t\t\t";
        // line 311
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:gerant/commande:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  645 => 311,  640 => 308,  628 => 302,  618 => 295,  613 => 293,  607 => 290,  602 => 288,  596 => 285,  591 => 283,  587 => 281,  580 => 270,  574 => 267,  563 => 258,  559 => 256,  553 => 253,  550 => 252,  548 => 251,  543 => 249,  540 => 248,  538 => 247,  534 => 245,  528 => 242,  522 => 239,  519 => 238,  513 => 235,  507 => 232,  504 => 231,  502 => 230,  498 => 228,  490 => 219,  482 => 216,  476 => 213,  471 => 210,  467 => 208,  461 => 206,  459 => 205,  451 => 200,  445 => 199,  438 => 195,  435 => 194,  431 => 193,  422 => 187,  417 => 186,  413 => 181,  409 => 180,  405 => 179,  401 => 178,  396 => 176,  363 => 146,  359 => 145,  342 => 135,  338 => 134,  328 => 131,  319 => 125,  311 => 120,  305 => 119,  301 => 118,  295 => 117,  291 => 116,  285 => 115,  281 => 114,  275 => 113,  271 => 112,  265 => 111,  261 => 110,  255 => 109,  251 => 108,  245 => 105,  241 => 103,  231 => 82,  225 => 81,  221 => 80,  215 => 79,  211 => 78,  205 => 75,  192 => 65,  186 => 64,  182 => 63,  176 => 62,  172 => 61,  166 => 60,  162 => 59,  156 => 58,  152 => 57,  146 => 56,  142 => 55,  136 => 52,  124 => 47,  120 => 46,  110 => 43,  106 => 42,  101 => 40,  92 => 34,  70 => 15,  66 => 14,  57 => 8,  51 => 4,  45 => 3,  29 => 1,);
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
\t\t\t\t\t\t\t<h4 class=\"mt-0 mb-5\"  style=\"color: #f02138;margin-bottom: -5px!important;\"> {{ nbcommandes|length }}</h4>
\t\t\t\t\t\t\t<small style=\"\">{{ \"Commandes\"|trans }}</small>
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
\t\t\t\t\t\t\t\t\t<th style=\"border: none;\">{{ \"Filtre\"|trans }}</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"border: none;\">
\t\t\t\t\t\t\t\t\t\t<form  class=\"row\" style=\"align-items: center;max-width: 1550px;\" action=\"{{ path('commande_gerant_index') }}\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"padding-top: 10px\" class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">{{\"Réferencecmd\"|trans}} </label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"reference\" value=\"{% if reference is defined %}{{reference}}{% endif %}\" placeholder={{\"Réference\"|trans}}>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">{{ \"Client\"|trans }} </label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"client\" value=\"{% if client is defined %}{{client}}{% endif %}\" placeholder={{ \"Client\"|trans }}>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 80%\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">{{ \"Statut\"|trans }}</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"statutcommande\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"\"  selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ \"Tous\"|trans }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"0\" {% if statutcommande is defined and statutcommande == '0' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"Non Payée\"|trans}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"1\" {% if statutcommande is defined and statutcommande == '1' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ \"En cours de traitement\"|trans }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"2\" {% if statutcommande is defined and statutcommande == '2' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"Traitée\"|trans}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"3\" {% if statutcommande is defined and statutcommande == '3' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"Livrée\"|trans}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"4\" {% if statutcommande is defined and statutcommande == '4' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"Annulée\"|trans}}</option>



\t\t\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 80%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">{{ \"Statut Payement\"|trans }}</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"statutpayement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"\"  selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ \"Tous\"|trans }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"0\" {% if statutpayement is defined and statutpayement == '0' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ \"nonpayée\"|trans }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"1\" {% if statutpayement is defined and statutpayement == '1' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"Payée\"|trans}}</option>

\t\t\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t{#
\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"padding-top: 10px\" class=\"col-lg-2  col-md-2 col-xs-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">{{ \"Remboursement\"|trans }} </label>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"remboursement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"\"  selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ \"Tous\" }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"0\" {% if remboursement is defined and remboursement == '0' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"Non remboursée\"|trans}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"1\" {% if remboursement is defined and remboursement == '1' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"Remboursée\"|trans}}</option>

\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t#}

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3  col-md-3 col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">{{ \"Periode de reception\"|trans }} </label>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"periode\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"\"  selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ \"Tous\"|trans }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"1\" {% if periode is defined and periode == '1' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"De 8h à 10h\"|trans}} </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"2\" {% if periode is defined and periode == '2' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"De 10h à 12h\"|trans}} </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"3\" {% if periode is defined and periode == '3' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"De 12h à 14h\"|trans}} </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"4\" {% if periode is defined and periode == '4' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"De 14h à 16h\"|trans}} </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"5\" {% if periode is defined and periode == '5' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"De 16h à 18h\"|trans}} </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"btn btn-block btn-default waves-effect waves-classic\" value=\"6\" {% if periode is defined and periode == '6' %} selected {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\"De 18h à 20h\"|trans}} </option>

\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4  col-md-4 col-xs-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">{{ \"Date\"|trans }} </label>
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
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3  col-md-3 col-xs-3 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" style=\"margin-right: 10px;\" class=\"btn btn-icon social-evernote waves-effect waves-classic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('ExportGerantCommande') }}\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon md-download\" aria-hidden=\"true\"></i> {{ \"exporter\"|trans }}</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>

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


\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<!-- Example Bordered Table -->

\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr class=\"\">
\t\t\t\t\t\t\t\t\t<th style=\"padding-left: 20px;width: 10%\">{{\"Réference\"|trans}} </th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 15%\">Client</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 10%\">{{\"mode de réception\"|trans}}</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 10%\">{{ \"Nombre Produits\"|trans }}</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 10%\">{{ \"Statut Commande\"|trans }}</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 10%\">{{ \"Statut Payement\"|trans }}</th>
\t\t\t\t\t\t\t\t\t{#
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 10%\">{{ \"Remboursement\"|trans }} </th>

\t\t\t\t\t\t\t\t\t#}
\t\t\t\t\t\t\t\t\t<th style=\"width: 10%\">{{ \"Date de la commande\"|trans }}</th>
\t\t\t\t\t\t\t\t\t<th style=\"width: 10%\">{{ \"Date de retrait\"|trans }} </th>
\t\t\t\t\t\t\t\t\t<th class=\"text-right text-nowrap\" style=\"padding-right:42px;width: 5%\">Action</th>

\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t{% for c in commandes %}
\t\t\t\t\t\t\t\t\t<tr >
\t\t\t\t\t\t\t\t\t\t<td  style=\"padding-left: 20px; \" style=\"width: 100px;\">{{ c.0.commande.reference }}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mt-0 mb-5\">{{ c.0.commande.utilisateur.firstName }} {{ c.0.commande.utilisateur.lastName }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<small>{{ c.0.commande.utilisateur.tel }}</small>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td  style=\"padding-left: 20px; \" style=\"width: 100px;\">
\t\t\t\t\t\t\t\t\t\t\t{% if c.0.commande.adresselivraison %}
\t\t\t\t\t\t\t\t\t\t\t{{ \"livraison\"|trans }}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\tDrive
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
\t\t\t\t\t\t\t\t\t\t\t<td>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><i class=\"icon md-alarm\" aria-hidden=\"true\" style=\"margin-right:0 !important;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ c.0.commande.periodeToString }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\" style=\"min-width: 110px;padding-right:20px;\">



\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-pure btn-default icon md-edit waves-effect waves-classic\" id=\"exampleHoverDropdown1\" data-hover=\"dropdown\" data-delay=\"1000\" data-toggle=\"dropdown\" aria-expanded=\"false\"></a>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"exampleHoverDropdown1\" role=\"menu\" x-placement=\"bottom-start\" style=\"position: absolute; transform: translate3d(0px, 36px, 0px); top: 0px; left: -70px; will-change: transform;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('commnde_gerant_edit', { 'id': c.0.commande.id,'statut' :1,'page':page }) }}\" class=\"dropdown-item\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ \"En cours de\ttraitement\"|trans }}</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t{#
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('commnde_gerant_edit', { 'id': c.0.commande.id,'statut' :5 }) }}\" class=\"dropdown-item\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">{{\"Payée\"|trans}}</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t#}


\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('commnde_gerant_edit', { 'id': c.0.commande.id,'statut' :2,'page':page }) }}\" class=\"dropdown-item\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">{{\"Traitée\"|trans}}</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('commnde_gerant_edit', { 'id': c.0.commande.id,'statut' :3,'page':page }) }}\" class=\"dropdown-item\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">{{\"Livrée\"|trans}}</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('commnde_gerant_edit', { 'id': c.0.commande.id,'statut' :4 ,'page':page}) }}\" class=\"dropdown-item\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">{{\"Annulée\"|trans}}</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-pure btn-default icon  md-details waves-effect waves-classic\" href=\"{{ path('commande_gerant_show', { 'id': c.0.commande.id }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon md-plus\" style=\"color: #46bf8c!important;\" aria-hidden=\"true\"></i>
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
{% endblock %}
", "BackendBundle:gerant/commande:index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/gerant/commande/index.html.twig");
    }
}
