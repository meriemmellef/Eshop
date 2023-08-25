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

/* @Backend/excel/DetailsCommandeExcel.xlsx.twig */
class __TwigTemplate_b5cc1770037be6bb8790fd109fa39ee6aa36054ab0e8b81b1612df5f607d30f2 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/excel/DetailsCommandeExcel.xlsx.twig"));

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
        echo "Statut Commande";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 12
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Statut Payement ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 15
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Date Reservation ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 16
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Periode Reception ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 17
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 3)) {
            // line 18
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo "Date Livraison ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "14"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
        }
        // line 20
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 4)) {
            // line 21
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo "Date Annulation ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "14"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
        }
        // line 23
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Station";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 24
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Client";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 25
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Produit";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 26
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo " Quantité";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 27
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Prix Unitaire";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 28
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Prix Total";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 29
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Prix Final";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 9
        $context['phpExcel']->endRow();
        // line 32
        $context['phpExcel']->setRowIndex(null);
        $context['phpExcel']->startRow($context['phpExcel']->getRowIndex());
        $context['phpExcel']->setRowIndex(0);
        // line 33
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "reference", []), "html", null, true);
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 36
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        // line 37
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 0)) {
            // line 38
            echo "                    Non traitée
                ";
        }
        // line 40
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 1)) {
            // line 41
            echo "                   En cours de traitement
                ";
        }
        // line 43
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 2)) {
            // line 44
            echo "                 Traitée
                ";
        }
        // line 46
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 3)) {
            // line 47
            echo "                  Livrée
                ";
        }
        // line 49
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 4)) {
            // line 50
            echo "                   Annulée
                ";
        }
        // line 52
        echo "            ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 55
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        // line 56
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutpayement", []) == 0)) {
            // line 57
            echo "                   Non payée
                ";
        }
        // line 59
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutpayement", []) == 1)) {
            // line 60
            echo "                   Payée
                ";
        }
        // line 62
        echo "            ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 76
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateReservation", []), "m/d/Y h:i"), "html", null, true);
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 77
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        // line 78
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeReception", []) == 1)) {
            // line 79
            echo "                de 8h à 10h
            ";
        }
        // line 81
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeReception", []) == 2)) {
            // line 82
            echo "                    de 10h à 12h
                ";
        }
        // line 84
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeReception", []) == 3)) {
            // line 85
            echo "                    de 12h à 14h
                ";
        }
        // line 87
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeReception", []) == 4)) {
            // line 88
            echo "                    de 14h à 16h
                ";
        }
        // line 90
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeReception", []) == 5)) {
            // line 91
            echo "                    de 16h à 18h
                ";
        }
        // line 93
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeReception", []) == 6)) {
            // line 94
            echo "                    de 18h à 20h
                ";
        }
        // line 96
        echo "            ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 98
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 3)) {
            // line 99
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateReception", []), "m/d/Y h:i"), "html", null, true);
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
        }
        // line 101
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 4)) {
            // line 102
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateAnnulation", []), "m/d/Y h:i"), "html", null, true);
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
        }
        // line 104
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "station", []), "nom", []), "html", null, true);
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 106
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "utilisateur", []), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "utilisateur", []), "lastName", []), "html", null, true);
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 107
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 108
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 109
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 110
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 111
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 32
        $context['phpExcel']->endRow();
        // line 116
        $context["pt"] = 0;
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 118
            $context['phpExcel']->setRowIndex(null);
            $context['phpExcel']->startRow($context['phpExcel']->getRowIndex());
            $context['phpExcel']->setRowIndex(0);
            // line 119
            $context["pt"] = (($context["pt"] ?? $this->getContext($context, "pt")) + ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prix", []) * $this->getAttribute($context["produit"], "quantite", [])));
            // line 120
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 121
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 122
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 123
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo " ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 124
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 128
            if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 3)) {
                // line 129
                $context['phpExcel']->setCellIndex(null);
                ob_start();
                $cellValue = trim(ob_get_clean());
                $cellProperties = ["style" => ["font" => ["size" => "10"]]];
                $context['phpExcel']->startCell($cellValue, $cellProperties);
                unset($cellIndex, $cellValue, $cellProperties);
                $context['phpExcel']->endCell();
            }
            // line 131
            if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 4)) {
                // line 132
                $context['phpExcel']->setCellIndex(null);
                ob_start();
                $cellValue = trim(ob_get_clean());
                $cellProperties = ["style" => ["font" => ["size" => "10"]]];
                $context['phpExcel']->startCell($cellValue, $cellProperties);
                unset($cellIndex, $cellValue, $cellProperties);
                $context['phpExcel']->endCell();
            }
            // line 134
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 135
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 136
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 137
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", []), "html", null, true);
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 138
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prix", []), "html", null, true);
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 139
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prix", []) * $this->getAttribute($context["produit"], "quantite", [])), "html", null, true);
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 140
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 118
            $context['phpExcel']->endRow();
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        $context['phpExcel']->setRowIndex(null);
        $context['phpExcel']->startRow($context['phpExcel']->getRowIndex());
        $context['phpExcel']->setRowIndex(0);
        // line 145
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 146
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 147
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo " ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 148
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo " ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 149
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 155
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 3)) {
            // line 156
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
        }
        // line 158
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 4)) {
            // line 159
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
        }
        // line 161
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 162
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 163
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 164
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 165
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 166
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 167
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo twig_escape_filter($this->env, ($context["pt"] ?? $this->getContext($context, "pt")), "html", null, true);
        echo " ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 144
        $context['phpExcel']->endRow();
        // line 2
        $context['phpExcel']->endSheet();
        // line 1
        $context['phpExcel']->endDocument(true, null);
        unset($context['phpExcel']);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/excel/DetailsCommandeExcel.xlsx.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  683 => 1,  681 => 2,  679 => 144,  669 => 167,  661 => 166,  653 => 165,  645 => 164,  637 => 163,  629 => 162,  621 => 161,  612 => 159,  610 => 158,  601 => 156,  599 => 155,  591 => 149,  582 => 148,  573 => 147,  565 => 146,  557 => 145,  553 => 144,  547 => 118,  539 => 140,  530 => 139,  521 => 138,  511 => 137,  502 => 136,  494 => 135,  486 => 134,  477 => 132,  475 => 131,  466 => 129,  464 => 128,  456 => 124,  447 => 123,  438 => 122,  430 => 121,  422 => 120,  420 => 119,  416 => 118,  412 => 117,  410 => 116,  408 => 32,  400 => 111,  392 => 110,  384 => 109,  376 => 108,  368 => 107,  357 => 106,  348 => 104,  338 => 102,  336 => 101,  326 => 99,  324 => 98,  317 => 96,  313 => 94,  310 => 93,  306 => 91,  303 => 90,  299 => 88,  296 => 87,  292 => 85,  289 => 84,  285 => 82,  282 => 81,  278 => 79,  275 => 78,  272 => 77,  263 => 76,  256 => 62,  252 => 60,  249 => 59,  245 => 57,  242 => 56,  239 => 55,  232 => 52,  228 => 50,  225 => 49,  221 => 47,  218 => 46,  214 => 44,  211 => 43,  207 => 41,  204 => 40,  200 => 38,  197 => 37,  194 => 36,  185 => 33,  181 => 32,  179 => 9,  170 => 29,  161 => 28,  152 => 27,  143 => 26,  134 => 25,  125 => 24,  116 => 23,  106 => 21,  104 => 20,  94 => 18,  92 => 17,  83 => 16,  74 => 15,  65 => 12,  56 => 11,  47 => 10,  43 => 9,  38 => 2,  33 => 1,);
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
            {% xlscell { style: { font: { size: '14' } } } %}Statut Commande{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Statut Payement {% endxlscell %}
            {#            {% xlscell { style: { font: { size: '14' } } } %}Remboursement {% endxlscell %}
#}
            {% xlscell { style: { font: { size: '14' } } } %}Date Reservation {% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Periode Reception {% endxlscell %}
            {% if commande.statutcommande == 3 %}
            {% xlscell { style: { font: { size: '14' } } } %}Date Livraison {% endxlscell %}
            {% endif %}
            {% if commande.statutcommande == 4 %}
                {% xlscell { style: { font: { size: '14' } } } %}Date Annulation {% endxlscell %}
            {% endif %}
            {% xlscell { style: { font: { size: '14' } } } %}Station{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Client{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Produit{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %} Quantité{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Prix Unitaire{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Prix Total{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Prix Final{% endxlscell %}

        {% endxlsrow %}
        {% xlsrow %}
            {% xlscell { style: { font: { size: '10' } } } %}{{commande.reference}}{% endxlscell %}


            {% xlscell { style: { font: { size: '10' } } } %}
                {% if  commande.statutcommande == 0 %}
                    Non traitée
                {% endif %}
                {% if  commande.statutcommande == 1 %}
                   En cours de traitement
                {% endif %}
                {% if  commande.statutcommande == 2 %}
                 Traitée
                {% endif %}
                {% if  commande.statutcommande == 3 %}
                  Livrée
                {% endif %}
                {% if  commande.statutcommande == 4 %}
                   Annulée
                {% endif %}
            {% endxlscell %}


            {% xlscell { style: { font: { size: '10' } } } %}
                {% if  commande.statutpayement == 0 %}
                   Non payée
                {% endif %}
                {% if  commande.statutpayement == 1 %}
                   Payée
                {% endif %}
            {% endxlscell %}

{#
        {% xlscell { style: { font: { size: '10' } } } %}
                {% if  commande.remboursement == 0 %}
                   Non remboursée
                {% endif %}

                {% if commande.remboursement == 1 %}
                  Remboursée
                {% endif %}
            {% endxlscell %}
#}

            {% xlscell { style: { font: { size: '10' } } } %}{{commande.dateReservation|date(\"m/d/Y h:i\") }}{% endxlscell %}
            {% xlscell { style: { font: { size: '10' } } } %}
                {% if  commande.periodeReception == 1 %}
                de 8h à 10h
            {% endif %}
                {% if  commande.periodeReception == 2 %}
                    de 10h à 12h
                {% endif %}
                {% if  commande.periodeReception == 3 %}
                    de 12h à 14h
                {% endif %}
                {% if commande.periodeReception == 4 %}
                    de 14h à 16h
                {% endif %}
                {% if  commande.periodeReception == 5 %}
                    de 16h à 18h
                {% endif %}
                {% if commande.periodeReception == 6 %}
                    de 18h à 20h
                {% endif %}
            {% endxlscell %}

            {% if commande.statutcommande == 3 %}
                {% xlscell { style: { font: { size: '10' } } } %}{{commande.dateReception|date(\"m/d/Y h:i\") }}{% endxlscell %}
            {% endif %}
            {% if commande.statutcommande == 4 %}
                {% xlscell { style: { font: { size: '10' } } } %}{{commande.dateAnnulation|date(\"m/d/Y h:i\") }}{% endxlscell %}
            {% endif %}
            {% xlscell { style: { font: { size: '10' } } } %}{{commande.station.nom }}{% endxlscell %}

            {% xlscell { style: { font: { size: '10' } } } %}{{commande.utilisateur.firstName }} {{ commande.utilisateur.lastName}}{% endxlscell %}
            {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
            {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
            {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
            {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
            {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}

        {% endxlsrow %}

        <!--
        {% set pt = 0 %}
        {% for produit in produits %}
            {% xlsrow %}
            {% set pt = pt + produit.produit.prix * produit.quantite %}
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %} {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %} {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                {#                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
#}

                {% if commande.statutcommande == 3 %}
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                 {% endif %}
                  {% if commande.statutcommande == 4 %}
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                 {% endif %}
                 {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ produit.produit.nom }}{% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %} {{ produit.quantite }}{% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ produit.produit.prix }}{% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{{ produit.produit.prix * produit.quantite  }}{% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}

            {% endxlsrow %}
        {% endfor %}
        {% xlsrow %}
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %} {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %} {% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                {#
                                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}

                #}

                {% if commande.statutcommande == 3 %}
                   {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                {% endif %}
                {% if commande.statutcommande == 4 %}
                   {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                {% endif %}
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}{{pt}} {% endxlscell %}

        {% endxlsrow %}
        -->
    {% endxlssheet %}
{% endxlsdocument %}
", "@Backend/excel/DetailsCommandeExcel.xlsx.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\excel\\DetailsCommandeExcel.xlsx.twig");
    }
}
