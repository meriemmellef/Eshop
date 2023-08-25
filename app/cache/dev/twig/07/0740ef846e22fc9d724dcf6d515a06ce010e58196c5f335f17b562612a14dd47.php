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

/* @Backend/excel/CategorieExcel.xlsx.twig */
class __TwigTemplate_24365b2fb2cbe72345cf3476e52adbb4b6c1f0c7e3c505c5c1c1e38f8990e69f extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/excel/CategorieExcel.xlsx.twig"));

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
        echo "Categorie";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 9
        $context['phpExcel']->endRow();
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Modeles"] ?? $this->getContext($context, "Modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 16
            $context['phpExcel']->setRowIndex(null);
            $context['phpExcel']->startRow($context['phpExcel']->getRowIndex());
            $context['phpExcel']->setRowIndex(0);
            // line 17
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "id", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 18
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nom", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 16
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
        return "@Backend/excel/CategorieExcel.xlsx.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 1,  101 => 2,  95 => 16,  85 => 18,  75 => 17,  71 => 16,  67 => 15,  65 => 9,  56 => 11,  47 => 10,  43 => 9,  38 => 2,  33 => 1,);
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
            {% xlscell { style: { font: { size: '14' } } } %}Categorie{% endxlscell %}


        {% endxlsrow %}
        {% for Modele in Modeles %}
            {% xlsrow %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.id }} {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.nom }} {% endxlscell %}
            {% endxlsrow %}
        {% endfor %}
    {% endxlssheet %}
{% endxlsdocument %}", "@Backend/excel/CategorieExcel.xlsx.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\excel\\CategorieExcel.xlsx.twig");
    }
}
