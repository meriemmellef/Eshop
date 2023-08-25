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

/* @Backend/excel/gerant/CommandeExcel.xlsx.twig */
class __TwigTemplate_9d64a471fe4ae52a2e9055b6f00cdaaf3dfcfcc6a4762161412c0adb3419c24c extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/excel/gerant/CommandeExcel.xlsx.twig"));

        // line 1
        $documentProperties = [];
        $context['phpExcel'] = new MewesK\TwigExcelBundle\Wrapper\PhpExcelWrapper($context, $this->env);
        $context['phpExcel']->startDocument($documentProperties);
        unset($documentProperties);
        // line 2
        $sheetIndex = "Worksheet";
        $sheetProperties = ["columnDimension" => ["default" => ["autoSize" => true]]];
        $context['phpExcel']->startSheet($sheetIndex, $sheetProperties);
        unset($sheetIndex, $sheetProperties);
        // line 9
        $context['phpExcel']->setRowIndex(null);
        $context['phpExcel']->startRow($context['phpExcel']->getRowIndex());
        $context['phpExcel']->setRowIndex(0);
        // line 10
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Reference";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]], "margin" => ["left" => "140"]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 11
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Client ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 12
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Nombre Produit";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 13
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Statut Commande";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 14
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Statut Payement ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 19
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Date Reservation ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 20
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Periode Reception ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 9
        $context['phpExcel']->endRow();
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Modeles"] ?? $this->getContext($context, "Modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 27
            $context['phpExcel']->setRowIndex(null);
            $context['phpExcel']->startRow($context['phpExcel']->getRowIndex());
            $context['phpExcel']->setRowIndex(0);
            // line 28
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "reference", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 29
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "utilisateur", []), "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "utilisateur", []), "lastName", []), "html", null, true);
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 30
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nbproduit", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 32
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            // line 33
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "statutcommande", []) == 0)) {
                // line 34
                echo "                       Non traitée
                    ";
            }
            // line 36
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "statutcommande", []) == 1)) {
                // line 37
                echo "                        En cours de traitement
                    ";
            }
            // line 39
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "statutcommande", []) == 2)) {
                // line 40
                echo "                        Traitée
                    ";
            }
            // line 42
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "statutcommande", []) == 3)) {
                // line 43
                echo "                        Livrée
                    ";
            }
            // line 45
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "statutcommande", []) == 4)) {
                // line 46
                echo "                        Annulée
                    ";
            }
            // line 48
            echo "
                ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 50
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            // line 51
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "statutpayement", []) == 0)) {
                // line 52
                echo "                        Non payée
                    ";
            }
            // line 54
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "statutpayement", []) == 1)) {
                // line 55
                echo "                        Payée
                    ";
            }
            // line 57
            echo "                ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 70
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "dateReservation", []), "m/d/Y h:i"), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 71
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            // line 72
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "periodeReception", []) == 1)) {
                // line 73
                echo "                        de 8h à 10h
                    ";
            }
            // line 75
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "periodeReception", []) == 2)) {
                // line 76
                echo "                        de 10h à 12h
                    ";
            }
            // line 78
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "periodeReception", []) == 3)) {
                // line 79
                echo "                        de 12h à 14h
                    ";
            }
            // line 81
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "periodeReception", []) == 4)) {
                // line 82
                echo "                        de 14h à 16h
                    ";
            }
            // line 84
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "periodeReception", []) == 5)) {
                // line 85
                echo "                        de 16h à 18h
                    ";
            }
            // line 87
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "periodeReception", []) == 6)) {
                // line 88
                echo "                        de 18h à 20h
                    ";
            }
            // line 90
            echo "                ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 27
            $context['phpExcel']->endRow();
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2
        $context['phpExcel']->endSheet();
        // line 1
        $context['phpExcel']->endDocument(true, null);
        unset($context['phpExcel']);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/excel/gerant/CommandeExcel.xlsx.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 1,  289 => 2,  283 => 27,  276 => 90,  272 => 88,  269 => 87,  265 => 85,  262 => 84,  258 => 82,  255 => 81,  251 => 79,  248 => 78,  244 => 76,  241 => 75,  237 => 73,  234 => 72,  231 => 71,  221 => 70,  214 => 57,  210 => 55,  207 => 54,  203 => 52,  200 => 51,  197 => 50,  189 => 48,  185 => 46,  182 => 45,  178 => 43,  175 => 42,  171 => 40,  168 => 39,  164 => 37,  161 => 36,  157 => 34,  154 => 33,  151 => 32,  141 => 30,  130 => 29,  120 => 28,  116 => 27,  112 => 26,  110 => 9,  101 => 20,  92 => 19,  83 => 14,  74 => 13,  65 => 12,  56 => 11,  47 => 10,  43 => 9,  38 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% xlsdocument %}
    {% xlssheet 'Worksheet' {
        columnDimension: {
            'default': {
                autoSize: true
            }
        }
    } %}
        {% xlsrow %}
            {% xlscell { style: { font: { size: '14' } }, margin: { left: '140' } } %}Reference{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Client {% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Nombre Produit{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Statut Commande{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Statut Payement {% endxlscell %}
            {#
                        {% xlscell { style: { font: { size: '14' } } } %}Remboursement {% endxlscell %}

            #}
            {% xlscell { style: { font: { size: '14' } } } %}Date Reservation {% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Periode Reception {% endxlscell %}




        {% endxlsrow %}
        {% for Modele in Modeles %}
            {% xlsrow %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.0.commande.reference  }} {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.0.commande.utilisateur.firstName }} {{ Modele.0.commande.utilisateur.lastName }}{% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.nbproduit }} {% endxlscell %}

                {% xlscell { style: { font: { size: '10' } } } %}
                    {% if  Modele.0.commande.statutcommande == 0 %}
                       Non traitée
                    {% endif %}
                    {% if  Modele.0.commande.statutcommande == 1 %}
                        En cours de traitement
                    {% endif %}
                    {% if  Modele.0.commande.statutcommande == 2 %}
                        Traitée
                    {% endif %}
                    {% if  Modele.0.commande.statutcommande == 3 %}
                        Livrée
                    {% endif %}
                    {% if  Modele.0.commande.statutcommande == 4 %}
                        Annulée
                    {% endif %}

                {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}
                    {% if  Modele.0.commande.statutpayement == 0 %}
                        Non payée
                    {% endif %}
                    {% if  Modele.0.commande.statutpayement == 1 %}
                        Payée
                    {% endif %}
                {% endxlscell %}
                {#
                     {% xlscell { style: { font: { size: '10' } } } %}
                    {% if  Modele.0.commande.remboursement == 0 %}
                        Non remboursée
                    {% endif %}
                    {% if  Modele.0.commande.remboursement == 1 %}
                        Remboursée
                    {% endif %}
                {% endxlscell %}
                #}


                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.0.commande.dateReservation|date(\"m/d/Y h:i\")  }} {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}
                    {% if  Modele.0.commande.periodeReception == 1 %}
                        de 8h à 10h
                    {% endif %}
                    {% if  Modele.0.commande.periodeReception == 2 %}
                        de 10h à 12h
                    {% endif %}
                    {% if  Modele.0.commande.periodeReception == 3 %}
                        de 12h à 14h
                    {% endif %}
                    {% if  Modele.0.commande.periodeReception == 4 %}
                        de 14h à 16h
                    {% endif %}
                    {% if  Modele.0.commande.periodeReception == 5 %}
                        de 16h à 18h
                    {% endif %}
                    {% if  Modele.0.commande.periodeReception == 6 %}
                        de 18h à 20h
                    {% endif %}
                {% endxlscell %}

            {% endxlsrow %}
        {% endfor %}
    {% endxlssheet %}
{% endxlsdocument %}
", "@Backend/excel/gerant/CommandeExcel.xlsx.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\excel\\gerant\\CommandeExcel.xlsx.twig");
    }
}
