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

/* @Backend/excel/StationExcel.xlsx.twig */
class __TwigTemplate_bc804471e0d73aa625744f5e1a73722fd0c54c76ed1daee2d75f3b6002460f05 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/excel/StationExcel.xlsx.twig"));

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
        echo "ID";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]], "margin" => ["left" => "140"]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 11
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Nom";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 12
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Adresse";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 13
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Zone";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 14
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Nom Gerant";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 15
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Email Gerant";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 9
        $context['phpExcel']->endRow();
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Modeles"] ?? $this->getContext($context, "Modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 20
            $context['phpExcel']->setRowIndex(null);
            $context['phpExcel']->startRow($context['phpExcel']->getRowIndex());
            $context['phpExcel']->setRowIndex(0);
            // line 21
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "id", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 22
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nom", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 23
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "adresse", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 24
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Modele"], "zone", []), "nom", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 25
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Modele"], "gerant", []), "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Modele"], "gerant", []), "lastName", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 26
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Modele"], "gerant", []), "email", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 20
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
        return "@Backend/excel/StationExcel.xlsx.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 1,  179 => 2,  173 => 20,  163 => 26,  151 => 25,  141 => 24,  131 => 23,  121 => 22,  111 => 21,  107 => 20,  103 => 19,  101 => 9,  92 => 15,  83 => 14,  74 => 13,  65 => 12,  56 => 11,  47 => 10,  43 => 9,  38 => 2,  33 => 1,);
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
            {% xlscell { style: { font: { size: '14' } }, margin: { left: '140' } } %}ID{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Nom{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Adresse{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Zone{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Nom Gerant{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Email Gerant{% endxlscell %}


        {% endxlsrow %}
        {% for Modele in Modeles %}
            {% xlsrow %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.id }} {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.nom }} {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.adresse  }} {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.zone.nom}} {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.gerant.firstName }} {{ Modele.gerant.lastName }} {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.gerant.email }} {% endxlscell %}

            {% endxlsrow %}
        {% endfor %}
    {% endxlssheet %}
{% endxlsdocument %}
", "@Backend/excel/StationExcel.xlsx.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\excel\\StationExcel.xlsx.twig");
    }
}
