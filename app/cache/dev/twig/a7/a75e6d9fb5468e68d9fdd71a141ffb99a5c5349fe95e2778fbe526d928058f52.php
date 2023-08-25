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

/* @Backend/excel/CommandeExcel.xlsx.twig */
class __TwigTemplate_853d553a3067153ba408a81b0166c59f0e746463b6adad3933b6e29f25e0efc3 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/excel/CommandeExcel.xlsx.twig"));

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
        echo "Station ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 13
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Nombre Produit";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 14
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Statut Commande";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 15
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Statut Payement ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 20
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Date Reservation ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 21
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Modeles"] ?? $this->getContext($context, "Modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 28
            $context['phpExcel']->setRowIndex(null);
            $context['phpExcel']->startRow($context['phpExcel']->getRowIndex());
            $context['phpExcel']->setRowIndex(0);
            // line 29
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "reference", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 30
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
            // line 31
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "station", []), "nom", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 32
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nbproduit", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 34
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            // line 35
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "statutcommande", []) == 0)) {
                // line 36
                echo "                       Non traitée
                    ";
            }
            // line 38
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "statutcommande", []) == 1)) {
                // line 39
                echo "                        En cours de traitement
                    ";
            }
            // line 41
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "statutcommande", []) == 2)) {
                // line 42
                echo "                        Traitée
                    ";
            }
            // line 44
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "statutcommande", []) == 3)) {
                // line 45
                echo "                        Livrée
                    ";
            }
            // line 47
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "statutcommande", []) == 4)) {
                // line 48
                echo "                        Annulée
                    ";
            }
            // line 50
            echo "
                ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 52
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            // line 53
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "statutpayement", []) == 0)) {
                // line 54
                echo "                        Non payée
                    ";
            }
            // line 56
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "statutpayement", []) == 1)) {
                // line 57
                echo "                        Payée
                    ";
            }
            // line 59
            echo "                ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 72
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "dateReservation", []), "m/d/Y h:i"), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 73
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            // line 74
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "periodeReception", []) == 1)) {
                // line 75
                echo "                        de 8h à 10h
                    ";
            }
            // line 77
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "periodeReception", []) == 2)) {
                // line 78
                echo "                        de 10h à 12h
                    ";
            }
            // line 80
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "periodeReception", []) == 3)) {
                // line 81
                echo "                        de 12h à 14h
                    ";
            }
            // line 83
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "periodeReception", []) == 4)) {
                // line 84
                echo "                        de 14h à 16h
                    ";
            }
            // line 86
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "periodeReception", []) == 5)) {
                // line 87
                echo "                        de 16h à 18h
                    ";
            }
            // line 89
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["Modele"], 0, []), "commande", []), "periodeReception", []) == 6)) {
                // line 90
                echo "                        de 18h à 20h
                    ";
            }
            // line 92
            echo "                ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 28
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
        return "@Backend/excel/CommandeExcel.xlsx.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 1,  308 => 2,  302 => 28,  295 => 92,  291 => 90,  288 => 89,  284 => 87,  281 => 86,  277 => 84,  274 => 83,  270 => 81,  267 => 80,  263 => 78,  260 => 77,  256 => 75,  253 => 74,  250 => 73,  240 => 72,  233 => 59,  229 => 57,  226 => 56,  222 => 54,  219 => 53,  216 => 52,  208 => 50,  204 => 48,  201 => 47,  197 => 45,  194 => 44,  190 => 42,  187 => 41,  183 => 39,  180 => 38,  176 => 36,  173 => 35,  170 => 34,  160 => 32,  150 => 31,  139 => 30,  129 => 29,  125 => 28,  121 => 27,  119 => 9,  110 => 21,  101 => 20,  92 => 15,  83 => 14,  74 => 13,  65 => 12,  56 => 11,  47 => 10,  43 => 9,  38 => 2,  33 => 1,);
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
            {% xlscell { style: { font: { size: '14' } } } %}Station {% endxlscell %}
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
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.0.commande.station.nom }} {% endxlscell %}
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
", "@Backend/excel/CommandeExcel.xlsx.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\excel\\CommandeExcel.xlsx.twig");
    }
}
