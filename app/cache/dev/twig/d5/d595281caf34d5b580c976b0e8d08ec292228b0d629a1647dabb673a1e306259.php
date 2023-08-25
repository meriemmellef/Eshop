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

/* @Frontend/SwiftLayout/validationCommande.html.twig */
class __TwigTemplate_eb5646cd2f665d366b72de22045be998de4574a8930742770e2e21d814959543 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/SwiftLayout/validationCommande.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-family: sans-serif;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;font-size: 10px;-webkit-tap-highlight-color: rgba(0,0,0,0);\">
<head style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
    <style style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">

        .invoice-title h2, .invoice-title h3 {
            display: inline-block;
        }

        .table > tbody > tr > .no-line {
            border-top: none;
        }

        .table > thead > tr > .no-line {
            border-bottom: none;
        }

        .table > tbody > tr > .thick-line {
            border-top: 2px solid;
        }

    </style>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\"
          style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\"
          integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\"
          style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">

</head>
<body style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;margin: 0;font-family: &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif;font-size: 14px;line-height: 1.42857143;color: #333;background-color: #fff;\">

<div class=\"container\"
     style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;border-radius: 3px ;border: 1px solid #d4d3d3\">
    <div class=\"row\" style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box\">
        <div class=\"row\"
             style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;margin-right: -12px;margin-left: -15px; \">
            <div class=\"col-xs-12\"
                 style=\"padding-right: 15px;padding-left: 15px;float: left;width: 98%;background-color:#ED0000;border-top-left-radius: 3px;border-top-right-radius: 3px\">
                <div class=\"invoice-title\">
                    <span class=\"pull-left\"
                          style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;orphans: 3;widows: 3;page-break-after: avoid;background-color:#ED0000;font-family: Roboto-Regular, sans-serif;font-weight: 500;line-height: 1.1;margin-top: 20px;margin-bottom: 10px;font-size: 24px;display: inline-block;float: left!important;color: #ffffff\">
                        ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Commande"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "reference", []), "html", null, true);
        echo "</span>
                </div>
            </div>
        </div>
        <div class=\"row\"
             style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;margin-right: -15px;margin-left: -15px;\">
            <div class=\"col-lg-6 col-xs-6\"
                 style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;position: relative;min-height: 1px;padding-right: 15px;padding-left: 15px;float: left;width: 50%;\">
                <address
                        style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;margin-bottom: 20px;font-style: normal;line-height: 1.42857143;\">
                    <strong style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-weight: 700;font-family: Roboto-Regular, sans-serif;color:#374649 \">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Point de retrait"), "html", null, true);
        echo ":</strong><br
                            style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-family: Roboto-Regular, sans-serif;color:#374649\">
                    ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "station", []), "nom", []), "html", null, true);
        echo "
                    <br
                            style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-family: Roboto-Regular, sans-serif;color:#374649\">
                    ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "station", []), "adresse", []), "html", null, true);
        echo "

                    <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                    ";
        // line 62
        if ($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "station", []), "tel", [])) {
            // line 63
            echo "
                        <span style=\"font-family: Roboto-Regular, sans-serif;color:#374649\">  ";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléphone"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "station", []), "tel", []), "html", null, true);
            echo "</span>
                        <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                    ";
        }
        // line 67
        echo "                    ";
        if ((($context["email"] ?? $this->getContext($context, "email")) && (($context["email"] ?? $this->getContext($context, "email")) != ""))) {
            // line 68
            echo "
                        <span style=\"font-family: Roboto-Regular, sans-serif;color:#374649\">";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
            echo "</span>

                        <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                        <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                    ";
        }
        // line 74
        echo "
                </address>


                <address
                        style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;margin-bottom: 20px;font-style: normal;line-height: 1.42857143;\">
                    <strong style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-weight: 700;font-family: Roboto-Regular, sans-serif;color:#374649\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details de la commande"), "html", null, true);
        echo ":</strong>
                    <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                    ";
        // line 82
        if ($this->getAttribute($this->getAttribute(($context["commande"] ?? null), "coupon", [], "any", false, true), "type", [], "any", true, true)) {
            // line 83
            echo "
                        <span style=\"font-family: Roboto-Regular, sans-serif;color:#374649\"> ";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix initial"), "html", null, true);
            echo ":</span>
                        ";
            // line 85
            if (($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "type", []) == 1)) {
                // line 86
                echo "
                            <span style=\"font-family: Roboto-Regular, sans-serif;color:#7098A7 \">

                   ";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice(($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "prix", []) + $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "montant", [])), $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "station", []), "pays", [])), "html", null, true);
                echo "
                            </span>
                        ";
            }
            // line 92
            echo "                        ";
            if (($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "type", []) == 2)) {
                // line 93
                echo "
                            <span style=\"font-family: Roboto-Regular, sans-serif;color:#7098A7 \">
                                ";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice(($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "prix", []) + (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "prix", []) / (100 - $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "pourcentage", []))) * $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "pourcentage", []))), $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "station", []), "pays", [])), "html", null, true);
                echo "

                            </span>

                        ";
            }
            // line 100
            echo "                        <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">

                        <span style=\"font-family: Roboto-Regular, sans-serif;color:#374649\">";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Coupon"), "html", null, true);
            echo ":</span>
                        ";
            // line 103
            if (($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "type", []) == 1)) {
                // line 104
                echo "
                            <span style=\"font-family: Roboto-Regular, sans-serif;color:#7098A7 \"> ";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("réduction de"), "html", null, true);
                echo "
                                ";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "montant", []), $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "station", []), "pays", [])), "html", null, true);
                echo "

                            </span>

                        ";
            }
            // line 111
            echo "                        ";
            if (($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "type", []) == 2)) {
                // line 112
                echo "
                            <span style=\"font-family: Roboto-Regular, sans-serif;color:#7098A7 \"> ";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("réduction de"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "coupon", []), "pourcentage", []), "html", null, true);
                echo " %</span>

                        ";
            }
            // line 116
            echo "                        <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">

                        <span style=\"font-family: Roboto-Regular, sans-serif;color:#ED0000 \">";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TOTAL"), "html", null, true);
            echo ":
                            ";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "prix", []), $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "station", []), "pays", [])), "html", null, true);
            echo "

                        </span>


                    ";
        } else {
            // line 125
            echo "
                        <span style=\"font-family: Roboto-Regular, sans-serif;color:#ED0000 \">";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TOTAL"), "html", null, true);
            echo ":
                                                        ";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "prix", []), $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "station", []), "pays", [])), "html", null, true);
            echo "

                        </span>

                    ";
        }
        // line 132
        echo "
                </address>
            </div>
            <div class=\"col-lg-6 col-xs-6 text-right\"
                 style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;text-align: right;position: relative;min-height: 1px;padding-right: 15px;padding-left: 15px;float: right;width:50%;\">
                <address
                        style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;margin-bottom: 20px;font-style: normal;line-height: 1.42857143;\">
                    <strong style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-weight: 700;font-family: Roboto-Regular, sans-serif;color:#374649\">";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date et Heure de retrait"), "html", null, true);
        echo ":</strong>
                    <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">

                    <span style=\"font-family: Roboto-Regular, sans-serif;color:#374649\"> ";
        // line 142
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateReception", []), "Y-m-d"), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeToString", []), "html", null, true);
        echo "</span>

                </address>
            </div>
            <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">

        </div>
    </div>


    <div class=\"row\"
         style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;margin-right: -15px;margin-left: -15px;\">
        <div class=\"col-md-12\"
             style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;position: relative;min-height: 1px;width: 100%;\">
            <div class=\"panel-body\"
                 style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                <div class=\"table-responsive\"
                     style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;min-height: .01%;\">
                    <table class=\"table table-condensed\"
                           style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;border-spacing: 0;border-collapse: collapse!important;background-color: transparent;width: 100%;max-width: 100%;margin-bottom: 0;\">
                        <thead style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;display: table-header-group;\">
                        <tr style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;page-break-inside: avoid;\">
                            <td style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding: 5px;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;white-space: nowrap;background-color: #fff!important;\">
                                <strong style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-weight: 700;font-family: Roboto-Regular, sans-serif;color:#374649\">";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product"), "html", null, true);
        echo "</strong>
                            </td>
                            <td class=\"text-center\"
                                style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding: 5px;text-align: center;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;white-space: nowrap;background-color: #fff!important;\">
                                <strong style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-weight: 700;font-family: Roboto-Regular, sans-serif;color:#374649\">";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix unitaire"), "html", null, true);
        echo "</strong></td>
                            <td class=\"text-center\"
                                style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding: 5px;text-align: center;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;white-space: nowrap;background-color: #fff!important;\">
                                <strong style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-weight: 700;font-family: Roboto-Regular, sans-serif;color:#374649\">";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantité"), "html", null, true);
        echo "</strong>
                            </td>
                            <td class=\"text-right\"
                                style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding: 5px;text-align: right;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;white-space: nowrap;background-color: #fff!important;\">
                                <strong style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-weight: 700;font-family: Roboto-Regular, sans-serif;color:#374649\">";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total"), "html", null, true);
        echo "</strong>
                            </td>
                        </tr>
                        </thead>
                        <tbody style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                        <!-- foreach (\$order->lineItems as \$line) or some such thing here -->
                        ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 183
            echo "                            <tr style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;page-break-inside: avoid;\">
                                <td style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding: 5px;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;white-space: nowrap;background-color: #fff!important;font-family: Roboto-Regular, sans-serif;color:#374649\">";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
            echo "</td>
                                <td class=\"text-center\"
                                    style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding: 5px;text-align: center;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;white-space: nowrap;background-color: #fff!important;font-family: Roboto-Regular, sans-serif;color: #ED0000\">
                                    ";
            // line 187
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "station", []), "pays", [])), "html", null, true);
            echo "

                                </td>
                                <td class=\"text-center\"
                                    style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding: 5px;text-align: center;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;white-space: nowrap;background-color: #fff!important;font-family: Roboto-Regular, sans-serif;color:#374649\">";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", []), "html", null, true);
            echo "</td>
                                <td class=\"text-right\"
                                    style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding: 5px;text-align: right;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;white-space: nowrap;background-color: #fff!important;font-family: Roboto-Regular, sans-serif;color: #ED0000\">

                                                                        ";
            // line 195
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($context["produit"], "prix", []), $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "station", []), "pays", [])), "html", null, true);
            echo "



                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-family: Roboto-Regular, sans-serif;color: #374649 \">
";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cordialement"), "html", null, true);
        echo ".
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/SwiftLayout/validationCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 212,  372 => 202,  359 => 195,  352 => 191,  345 => 187,  339 => 184,  336 => 183,  332 => 182,  323 => 176,  316 => 172,  310 => 169,  303 => 165,  275 => 142,  269 => 139,  260 => 132,  252 => 127,  248 => 126,  245 => 125,  236 => 119,  232 => 118,  228 => 116,  220 => 113,  217 => 112,  214 => 111,  206 => 106,  202 => 105,  199 => 104,  197 => 103,  193 => 102,  189 => 100,  181 => 95,  177 => 93,  174 => 92,  168 => 89,  163 => 86,  161 => 85,  157 => 84,  154 => 83,  152 => 82,  147 => 80,  139 => 74,  129 => 69,  126 => 68,  123 => 67,  115 => 64,  112 => 63,  110 => 62,  104 => 59,  98 => 56,  93 => 54,  78 => 44,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-family: sans-serif;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;font-size: 10px;-webkit-tap-highlight-color: rgba(0,0,0,0);\">
<head style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
    <style style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">

        .invoice-title h2, .invoice-title h3 {
            display: inline-block;
        }

        .table > tbody > tr > .no-line {
            border-top: none;
        }

        .table > thead > tr > .no-line {
            border-bottom: none;
        }

        .table > tbody > tr > .thick-line {
            border-top: 2px solid;
        }

    </style>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\"
          style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\"
          integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\"
          style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">

</head>
<body style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;margin: 0;font-family: &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif;font-size: 14px;line-height: 1.42857143;color: #333;background-color: #fff;\">

<div class=\"container\"
     style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;border-radius: 3px ;border: 1px solid #d4d3d3\">
    <div class=\"row\" style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box\">
        <div class=\"row\"
             style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;margin-right: -12px;margin-left: -15px; \">
            <div class=\"col-xs-12\"
                 style=\"padding-right: 15px;padding-left: 15px;float: left;width: 98%;background-color:#ED0000;border-top-left-radius: 3px;border-top-right-radius: 3px\">
                <div class=\"invoice-title\">
                    <span class=\"pull-left\"
                          style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;orphans: 3;widows: 3;page-break-after: avoid;background-color:#ED0000;font-family: Roboto-Regular, sans-serif;font-weight: 500;line-height: 1.1;margin-top: 20px;margin-bottom: 10px;font-size: 24px;display: inline-block;float: left!important;color: #ffffff\">
                        {{ \"Commande\"|trans }} #{{ commande.reference }}</span>
                </div>
            </div>
        </div>
        <div class=\"row\"
             style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;margin-right: -15px;margin-left: -15px;\">
            <div class=\"col-lg-6 col-xs-6\"
                 style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;position: relative;min-height: 1px;padding-right: 15px;padding-left: 15px;float: left;width: 50%;\">
                <address
                        style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;margin-bottom: 20px;font-style: normal;line-height: 1.42857143;\">
                    <strong style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-weight: 700;font-family: Roboto-Regular, sans-serif;color:#374649 \">{{ \"Point de retrait\"|trans }}:</strong><br
                            style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-family: Roboto-Regular, sans-serif;color:#374649\">
                    {{ commande.station.nom }}
                    <br
                            style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-family: Roboto-Regular, sans-serif;color:#374649\">
                    {{ commande.station.adresse }}

                    <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                    {% if  commande.station.tel %}

                        <span style=\"font-family: Roboto-Regular, sans-serif;color:#374649\">  {{ \"Téléphone\"|trans }}: {{ commande.station.tel }}</span>
                        <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                    {% endif %}
                    {% if email and email !=\"\" %}

                        <span style=\"font-family: Roboto-Regular, sans-serif;color:#374649\">{{ \"Email\"|trans }}: {{ email }}</span>

                        <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                        <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                    {% endif %}

                </address>


                <address
                        style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;margin-bottom: 20px;font-style: normal;line-height: 1.42857143;\">
                    <strong style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-weight: 700;font-family: Roboto-Regular, sans-serif;color:#374649\">{{ \"Details de la commande\"|trans }}:</strong>
                    <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                    {% if commande.coupon.type is defined %}

                        <span style=\"font-family: Roboto-Regular, sans-serif;color:#374649\"> {{ \"Prix initial\"|trans }}:</span>
                        {% if commande.coupon.type == 1 %}

                            <span style=\"font-family: Roboto-Regular, sans-serif;color:#7098A7 \">

                   {{ formated_price(commande.prix+commande.coupon.montant,commande.station.pays) }}
                            </span>
                        {% endif %}
                        {% if commande.coupon.type ==2 %}

                            <span style=\"font-family: Roboto-Regular, sans-serif;color:#7098A7 \">
                                {{ formated_price(commande.prix+(commande.prix/ (100 - commande.coupon.pourcentage)  * commande.coupon.pourcentage),commande.station.pays) }}

                            </span>

                        {% endif %}
                        <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">

                        <span style=\"font-family: Roboto-Regular, sans-serif;color:#374649\">{{ \"Coupon\"|trans }}:</span>
                        {% if commande.coupon.type == 1 %}

                            <span style=\"font-family: Roboto-Regular, sans-serif;color:#7098A7 \"> {{ \"réduction de\" | trans }}
                                {{ formated_price(commande.coupon.montant,commande.station.pays) }}

                            </span>

                        {% endif %}
                        {% if commande.coupon.type ==2 %}

                            <span style=\"font-family: Roboto-Regular, sans-serif;color:#7098A7 \"> {{ \"réduction de\" | trans }} {{ commande.coupon.pourcentage }} %</span>

                        {% endif %}
                        <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">

                        <span style=\"font-family: Roboto-Regular, sans-serif;color:#ED0000 \">{{ \"TOTAL\" | trans }}:
                            {{ formated_price(commande.prix,commande.station.pays) }}

                        </span>


                    {% else %}

                        <span style=\"font-family: Roboto-Regular, sans-serif;color:#ED0000 \">{{ \"TOTAL\" | trans }}:
                                                        {{ formated_price(commande.prix,commande.station.pays ) }}

                        </span>

                    {% endif %}

                </address>
            </div>
            <div class=\"col-lg-6 col-xs-6 text-right\"
                 style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;text-align: right;position: relative;min-height: 1px;padding-right: 15px;padding-left: 15px;float: right;width:50%;\">
                <address
                        style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;margin-bottom: 20px;font-style: normal;line-height: 1.42857143;\">
                    <strong style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-weight: 700;font-family: Roboto-Regular, sans-serif;color:#374649\">{{ \"Date et Heure de retrait\" | trans }}:</strong>
                    <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">

                    <span style=\"font-family: Roboto-Regular, sans-serif;color:#374649\"> {{ commande.dateReception | date(\"Y-m-d\") }}  {{ commande.periodeToString }}</span>

                </address>
            </div>
            <br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">

        </div>
    </div>


    <div class=\"row\"
         style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;margin-right: -15px;margin-left: -15px;\">
        <div class=\"col-md-12\"
             style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;position: relative;min-height: 1px;width: 100%;\">
            <div class=\"panel-body\"
                 style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                <div class=\"table-responsive\"
                     style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;min-height: .01%;\">
                    <table class=\"table table-condensed\"
                           style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;border-spacing: 0;border-collapse: collapse!important;background-color: transparent;width: 100%;max-width: 100%;margin-bottom: 0;\">
                        <thead style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;display: table-header-group;\">
                        <tr style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;page-break-inside: avoid;\">
                            <td style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding: 5px;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;white-space: nowrap;background-color: #fff!important;\">
                                <strong style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-weight: 700;font-family: Roboto-Regular, sans-serif;color:#374649\">{{ \"Product\" | trans }}</strong>
                            </td>
                            <td class=\"text-center\"
                                style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding: 5px;text-align: center;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;white-space: nowrap;background-color: #fff!important;\">
                                <strong style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-weight: 700;font-family: Roboto-Regular, sans-serif;color:#374649\">{{ \"Prix unitaire\" | trans }}</strong></td>
                            <td class=\"text-center\"
                                style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding: 5px;text-align: center;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;white-space: nowrap;background-color: #fff!important;\">
                                <strong style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-weight: 700;font-family: Roboto-Regular, sans-serif;color:#374649\">{{\"Quantité\" | trans}}</strong>
                            </td>
                            <td class=\"text-right\"
                                style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding: 5px;text-align: right;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;white-space: nowrap;background-color: #fff!important;\">
                                <strong style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-weight: 700;font-family: Roboto-Regular, sans-serif;color:#374649\">{{ \"Total\" | trans }}</strong>
                            </td>
                        </tr>
                        </thead>
                        <tbody style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;\">
                        <!-- foreach (\$order->lineItems as \$line) or some such thing here -->
                        {% for produit in produits %}
                            <tr style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;page-break-inside: avoid;\">
                                <td style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding: 5px;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;white-space: nowrap;background-color: #fff!important;font-family: Roboto-Regular, sans-serif;color:#374649\">{{ produit.produit.nom }}</td>
                                <td class=\"text-center\"
                                    style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding: 5px;text-align: center;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;white-space: nowrap;background-color: #fff!important;font-family: Roboto-Regular, sans-serif;color: #ED0000\">
                                    {{ formated_price(produit.produit.finalPrice[\"prix\"],commande.station.pays) }}

                                </td>
                                <td class=\"text-center\"
                                    style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding: 5px;text-align: center;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;white-space: nowrap;background-color: #fff!important;font-family: Roboto-Regular, sans-serif;color:#374649\">{{ produit.quantite }}</td>
                                <td class=\"text-right\"
                                    style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding: 5px;text-align: right;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;white-space: nowrap;background-color: #fff!important;font-family: Roboto-Regular, sans-serif;color: #ED0000\">

                                                                        {{ formated_price(produit.prix,commande.station.pays) }}



                                </td>
                            </tr>
                        {% endfor %}

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<br style=\"-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;font-family: Roboto-Regular, sans-serif;color: #374649 \">
{{ \"Cordialement\"|trans }}.
</body>
</html>
", "@Frontend/SwiftLayout/validationCommande.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\SwiftLayout\\validationCommande.html.twig");
    }
}
