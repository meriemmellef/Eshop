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

/* @Frontend/panier/validation_.html.twig */
class __TwigTemplate_bb018bb2e595110bb33fecc4259a2ed6855196e90606a8d26e47802ad7f7a2a7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/panier/validation_.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutBreadcrumps.html.twig", "@Frontend/panier/validation_.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        

        
        <div class=\"span9\">
            
            
            <h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valider mon panier", [], "messages"), "html", null, true);
        echo "</h2>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Références", [], "messages"), "html", null, true);
        echo "</th>
                        <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantité", [], "messages"), "html", null, true);
        echo "</th>
                        <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix unitaire", [], "messages"), "html", null, true);
        echo "</th>
                        <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "messages"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "commande", []), "produit", []));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 24
            echo "                    <tr>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reference", []), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", []), "html", null, true);
            echo "
                        </td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixHT", []), "html", null, true);
            echo " AR</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prixHT", []) * $this->getAttribute($context["produit"], "quantite", [])), "html", null, true);
            echo " AR</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </tbody>
            </table>
            
            <dl class=\"dl-horizontal pull-right\">
                <dt>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "messages"), "html", null, true);
        echo " :</dt><dd>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "commande", []), "prixHT", []), "html", null, true);
        echo " AR</dd>

            </dl>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adresse de livraison", [], "messages"), "html", null, true);
        echo "</h4></dt>
                    <dt>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "commande", []), "livraison", []), "prenom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "commande", []), "livraison", []), "nom", []), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "commande", []), "livraison", []), "adresse", []), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "commande", []), "livraison", []), "cp", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "commande", []), "livraison", []), "ville", []), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "commande", []), "livraison", []), "pays", []), "html", null, true);
        echo "</dt>
                </dl>
            </div>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adresse de facturation"), "html", null, true);
        echo "</h4></dt>
                    <dt>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "commande", []), "facturation", []), "prenom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "commande", []), "facturation", []), "nom", []), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "commande", []), "facturation", []), "adresse", []), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "commande", []), "facturation", []), "cp", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "commande", []), "facturation", []), "ville", []), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "commande", []), "facturation", []), "pays", []), "html", null, true);
        echo "</dt>
                </dl>
            </div>
            
            <div class=\"clearfix\"></div>
            
            <form action=\"";
        // line 61
        echo "\" method=\"POST\"/>
                <input name=\"token\" type=\"hidden\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "commande", []), "token", []), "html", null, true);
        echo "\" />
                <input name=\"prix\" type=\"hidden\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "commande", []), "prixHT", []), "html", null, true);
        echo "\" />
                <input name=\"date\" type=\"hidden\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "date", []), "dmyhms"), "html", null, true);
        echo "\" />
                <button type=\"submit\" class=\"btn btn-success pull-right\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payer", [], "messages"), "html", null, true);
        echo "</button>
            </form>
            
            <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("retour", [], "messages"), "html", null, true);
        echo "</a>
        </div>

    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/panier/validation_.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 68,  203 => 65,  199 => 64,  195 => 63,  191 => 62,  188 => 61,  175 => 55,  171 => 54,  165 => 53,  161 => 52,  148 => 46,  144 => 45,  138 => 44,  134 => 43,  123 => 37,  117 => 33,  108 => 30,  104 => 29,  99 => 27,  94 => 25,  91 => 24,  87 => 23,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  61 => 12,  51 => 4,  45 => 3,  29 => 1,);
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

{% block content %}
<div class=\"container\">
    <div class=\"row\">
        

        
        <div class=\"span9\">
            
            
            <h2>{{ \"Valider mon panier\"|trans ({}, 'messages')}}</h2>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>{{\"Références\"|trans({}, 'messages')}}</th>
                        <th>{{\"Quantité\"|trans({}, 'messages')}}</th>
                        <th>{{ \"Prix unitaire\"|trans ({}, 'messages')}}</th>
                        <th>{{ \"Total\"|trans({}, 'messages') }}</th>
                    </tr>
                </thead>
                <tbody>
                    {% for produit in commande.commande.produit %}
                    <tr>
                        <td>{{ produit.reference }}</td>
                        <td>
                            {{ produit.quantite }}
                        </td>
                        <td>{{ produit.prixHT }} AR</td>
                        <td>{{ produit.prixHT * produit.quantite }} AR</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
            
            <dl class=\"dl-horizontal pull-right\">
                <dt>{{ \"Total\"|trans ({}, 'messages')}} :</dt><dd>{{ commande.commande.prixHT }} AR</dd>

            </dl>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>{{ \"Adresse de livraison\"|trans({}, 'messages') }}</h4></dt>
                    <dt>{{ commande.commande.livraison.prenom }} {{ commande.commande.livraison.nom }}</dt>
                    <dt>{{ commande.commande.livraison.adresse }}</dt>
                    <dt>{{ commande.commande.livraison.cp }} {{ commande.commande.livraison.ville }} - {{ commande.commande.livraison.pays }}</dt>
                </dl>
            </div>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>{{ \"Adresse de facturation\"|trans}}</h4></dt>
                    <dt>{{ commande.commande.facturation.prenom }} {{ commande.commande.facturation.nom }}</dt>
                    <dt>{{ commande.commande.facturation.adresse }}</dt>
                    <dt>{{ commande.commande.facturation.cp }} {{ commande.commande.facturation.ville }} - {{ commande.commande.facturation.pays }}</dt>
                </dl>
            </div>
            
            <div class=\"clearfix\"></div>
            
            <form action=\"{#{ path('validationCommande', { 'id' : commande.id }) }#}\" method=\"POST\"/>
                <input name=\"token\" type=\"hidden\" value=\"{{ commande.commande.token }}\" />
                <input name=\"prix\" type=\"hidden\" value=\"{{ commande.commande.prixHT }}\" />
                <input name=\"date\" type=\"hidden\" value=\"{{ commande.date|date('dmyhms') }}\" />
                <button type=\"submit\" class=\"btn btn-success pull-right\">{{ \"Payer\"|trans({}, 'messages') }}</button>
            </form>
            
            <a href=\"{{ path('livraison') }}\" class=\"btn btn-primary\">{{ \"retour\"|trans({}, 'messages') }}</a>
        </div>

    </div>
</div>
{% endblock %}
", "@Frontend/panier/validation_.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\panier\\validation_.html.twig");
    }
}
