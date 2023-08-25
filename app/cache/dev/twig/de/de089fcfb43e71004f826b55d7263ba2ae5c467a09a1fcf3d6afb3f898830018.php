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

/* @Backend/excel/gerant/ProduitExcel.xlsx.twig */
class __TwigTemplate_83fdb7a8e8afe22e54b71513c706907565e481c4783bc1c1f96725117f4bdb46 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/excel/gerant/ProduitExcel.xlsx.twig"));

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
        echo "Code";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 12
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Nom";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 13
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Categorie";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 14
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Sous Categorie";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 15
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Prix ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 16
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Quantité ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 17
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Active ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 9
        $context['phpExcel']->endRow();
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Modeles"] ?? $this->getContext($context, "Modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 22
            $context['phpExcel']->setRowIndex(null);
            $context['phpExcel']->startRow($context['phpExcel']->getRowIndex());
            $context['phpExcel']->setRowIndex(0);
            // line 23
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "id", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 24
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "code", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 25
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nom", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 26
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Modele"], "categorie", []), "nom", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 27
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Modele"], "sous_categorie", []), "nom", []), "html", null, true);
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 28
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "prix", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 29
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "quantite", []), "html", null, true);
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 30
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            // line 31
            echo "                    ";
            if (($this->getAttribute($context["Modele"], "is_active", []) == true)) {
                // line 32
                echo "                        True
                    ";
            } else {
                // line 34
                echo "                        False
                    ";
            }
            // line 36
            echo "                ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 22
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
        return "@Backend/excel/gerant/ProduitExcel.xlsx.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 1,  225 => 2,  219 => 22,  212 => 36,  208 => 34,  204 => 32,  201 => 31,  198 => 30,  188 => 29,  178 => 28,  169 => 27,  159 => 26,  149 => 25,  139 => 24,  129 => 23,  125 => 22,  121 => 21,  119 => 9,  110 => 17,  101 => 16,  92 => 15,  83 => 14,  74 => 13,  65 => 12,  56 => 11,  47 => 10,  43 => 9,  38 => 2,  33 => 1,);
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
            {% xlscell { style: { font: { size: '14' } } } %}Code{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Nom{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Categorie{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Sous Categorie{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Prix {% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Quantité {% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Active {% endxlscell %}


        {% endxlsrow %}
        {% for Modele in Modeles %}
            {% xlsrow %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.id }} {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.code }} {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.nom  }} {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.categorie.nom  }} {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.sous_categorie.nom }}{% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.prix }} {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ Modele.quantite }} {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}
                    {% if Modele.is_active == true %}
                        True
                    {% else %}
                        False
                    {% endif %}
                {% endxlscell %}

            {% endxlsrow %}
        {% endfor %}
    {% endxlssheet %}
{% endxlsdocument %}", "@Backend/excel/gerant/ProduitExcel.xlsx.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\excel\\gerant\\ProduitExcel.xlsx.twig");
    }
}
