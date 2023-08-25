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

/* FrontendBundle:Profile:facturePDF.html.twig */
class __TwigTemplate_1bd33568b461cce13a79999c2d39443dda7392c9126f958d466c4445bdcefec5 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:Profile:facturePDF.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Facture", [], "messages"), "html", null, true);
        echo "</title>
       <style type=\"text/css\">
           h1 {
               position:absolute;
               color:#0088cc;
               font-size:50px;
           }

           .center {
               text-align:center;
           }

           .color {
               color:#0088cc;
           }

           .strong {
               font-weight:bold;
           }
           .min {
               font-size:10px;
           }

           img {
               position:absolute;
               top:80px;
               left:30px;
           }

           ul#coordonnes {
               float:left;
               margin-top:30px;
               margin-left:400px;
               list-style:none;
           }

           ul#coordonnes li {
               height:20px;
           }

           table#enTete {
               position:absolute;
               top:5px;
               right:330px;
               text-align:center;
           }

           table#enTete h1 {
               color:#0088cc;
               font-weight:bold;
               font-size:20px;
           }

           table#entity {
               float:left;
               margin-top:30px;
               text-align:center;
           }

           table#entity td {
               height:45px;
               border-bottom:1px solid #0088cc;
           }

           table#total {
               float:right;
               margin-left:495px;
               border-bottom:1px solid #0088cc;
               border-right:1px solid #0088cc;
               border-left:1px solid #0088cc;
           }

           table#total td {
               height:20px;
           }

           #footer {
               position:absolute;
               bottom:0px;width:100%;
               text-align:center;
               line-height:25px;
           }
       </style>

    </head>
    <body>
        <h1>APP4MOB</h1>
        <table id=\"enTete\">
            <tr>
                <td colspan=\"1\"></td>
                <td colspan=\"1\"><h1>";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Facture"), "html", null, true);
        echo "</h1></td>
                <td colspan=\"1\"></td>
            </tr>
            <tr>
                <td width=\"80\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Page"), "html", null, true);
        echo "</td>
                <td width=\"100\">";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date"), "html", null, true);
        echo "</td>
                <td width=\"120\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ref"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"color\">[[page_nb]]</td>
                <td class=\"color\">";
        // line 105
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "createdAt", []), "d-m-Y"), "html", null, true);
        echo "</td>
                <td class=\"color\">";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "reference", []), "html", null, true);
        echo "</td>
            </tr>
        </table>
        <ul id=\"coordonnes\">
            <li>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "commande", []), "facturation", []), "nom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "commande", []), "facturation", []), "prenom", []), "html", null, true);
        echo "</li>
            <li>";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "commande", []), "facturation", []), "adresse", []), "html", null, true);
        echo "</li>
            <li>";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "commande", []), "facturation", []), "cp", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "commande", []), "facturation", []), "ville", []), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "commande", []), "facturation", []), "pays", []), "html", null, true);
        echo "</li>
        </ul>
        <table id=\"entity\">
            <tr>
                <td width=\"360\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("DESIGNATION"), "html", null, true);
        echo "</td>
                <td width=\"105\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QUANTITE"), "html", null, true);
        echo "</td>
                <td width=\"115\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("P.U"), "html", null, true);
        echo " </td>
                <td width=\"120\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MONTANT"), "html", null, true);
        echo "</td>
            </tr>
                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "commande", []), "produit", []));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 122
            echo "                <tr>
                    <td class=\"color\">";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reference", []), "html", null, true);
            echo "</td>
                    <td class=\"color\">";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", []), "html", null, true);
            echo "</td>
                    <td class=\"color\">";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($context["produit"], "prixHT", []), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "</td>
                    <td class=\"color\">";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice(($this->getAttribute($context["produit"], "prixHT", []) * $this->getAttribute($context["produit"], "quantite", [])), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "        </table>
        <table id=\"total\">
            <tr>
                <td width=\"110\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TOTAL PRIX"), "html", null, true);
        echo " :</td>
                <td width=\"100\" class=\"color\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "commande", []), "prixHT", []), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
        echo "</td>
            </tr>


        </table>
        <div id=\"footer\">
            <span class=\"color strong\">";
        // line 139
        echo twig_escape_filter($this->env, ($context["adresse"] ?? $this->getContext($context, "adresse")), "html", null, true);
        echo "</span>
            <br />
            ";
        // line 141
        echo twig_escape_filter($this->env, ($context["telephone"] ?? $this->getContext($context, "telephone")), "html", null, true);
        echo "
        </div>
    </body>
</html>







";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Profile:facturePDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 141,  249 => 139,  240 => 133,  236 => 132,  231 => 129,  222 => 126,  218 => 125,  214 => 124,  210 => 123,  207 => 122,  203 => 121,  198 => 119,  194 => 118,  190 => 117,  186 => 116,  175 => 112,  171 => 111,  165 => 110,  158 => 106,  154 => 105,  147 => 101,  143 => 100,  139 => 99,  132 => 95,  39 => 5,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>{{ \"Facture\" | trans({}, 'messages') }}</title>
       <style type=\"text/css\">
           h1 {
               position:absolute;
               color:#0088cc;
               font-size:50px;
           }

           .center {
               text-align:center;
           }

           .color {
               color:#0088cc;
           }

           .strong {
               font-weight:bold;
           }
           .min {
               font-size:10px;
           }

           img {
               position:absolute;
               top:80px;
               left:30px;
           }

           ul#coordonnes {
               float:left;
               margin-top:30px;
               margin-left:400px;
               list-style:none;
           }

           ul#coordonnes li {
               height:20px;
           }

           table#enTete {
               position:absolute;
               top:5px;
               right:330px;
               text-align:center;
           }

           table#enTete h1 {
               color:#0088cc;
               font-weight:bold;
               font-size:20px;
           }

           table#entity {
               float:left;
               margin-top:30px;
               text-align:center;
           }

           table#entity td {
               height:45px;
               border-bottom:1px solid #0088cc;
           }

           table#total {
               float:right;
               margin-left:495px;
               border-bottom:1px solid #0088cc;
               border-right:1px solid #0088cc;
               border-left:1px solid #0088cc;
           }

           table#total td {
               height:20px;
           }

           #footer {
               position:absolute;
               bottom:0px;width:100%;
               text-align:center;
               line-height:25px;
           }
       </style>

    </head>
    <body>
        <h1>APP4MOB</h1>
        <table id=\"enTete\">
            <tr>
                <td colspan=\"1\"></td>
                <td colspan=\"1\"><h1>{{ \"Facture\" | trans }}</h1></td>
                <td colspan=\"1\"></td>
            </tr>
            <tr>
                <td width=\"80\">{{ \"Page\" | trans }}</td>
                <td width=\"100\">{{ \"Date\" | trans }}</td>
                <td width=\"120\">{{ \"Ref\" | trans }}</td>
            </tr>
            <tr>
                <td class=\"color\">[[page_nb]]</td>
                <td class=\"color\">{{ facture.createdAt|date('d-m-Y') }}</td>
                <td class=\"color\">{{ facture.reference }}</td>
            </tr>
        </table>
        <ul id=\"coordonnes\">
            <li>{{ facture.commande.facturation.nom }} {{ facture.commande.facturation.prenom }}</li>
            <li>{{ facture.commande.facturation.adresse}}</li>
            <li>{{ facture.commande.facturation.cp }} {{ facture.commande.facturation.ville }} - {{ facture.commande.facturation.pays }}</li>
        </ul>
        <table id=\"entity\">
            <tr>
                <td width=\"360\">{{ \"DESIGNATION\" | trans }}</td>
                <td width=\"105\">{{ \"QUANTITE\" | trans }}</td>
                <td width=\"115\">{{ \"P.U\" | trans }} </td>
                <td width=\"120\">{{ \"MONTANT\" | trans }}</td>
            </tr>
                {% for produit in facture.commande.produit %}
                <tr>
                    <td class=\"color\">{{ produit.reference }}</td>
                    <td class=\"color\">{{ produit.quantite }}</td>
                    <td class=\"color\">{{ formated_price(produit.prixHT,app.session.get('pays')) }}</td>
                    <td class=\"color\">{{ formated_price(produit.prixHT * produit.quantite,app.session.get('pays')) }}</td>
                </tr>
                {% endfor %}
        </table>
        <table id=\"total\">
            <tr>
                <td width=\"110\">{{ \"TOTAL PRIX\" | trans }} :</td>
                <td width=\"100\" class=\"color\">{{ formated_price(facture.commande.prixHT,app.session.get('pays')) }}</td>
            </tr>


        </table>
        <div id=\"footer\">
            <span class=\"color strong\">{{ adresse }}</span>
            <br />
            {{  telephone }}
        </div>
    </body>
</html>







", "FrontendBundle:Profile:facturePDF.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/Profile/facturePDF.html.twig");
    }
}
