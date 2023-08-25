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

/* BackendBundle:excel/gerant:DetailsCommandeExcel.xlsx.twig */
class __TwigTemplate_848c9d894dd0fe1122444cca16d7011332ff3065b4fa5abd0c4addcb7fab1963 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:excel/gerant:DetailsCommandeExcel.xlsx.twig"));

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
        // line 17
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Date Reservation ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 18
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Periode Reception ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 19
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 3)) {
            // line 20
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo "Date Livraison ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "14"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
        }
        // line 22
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 4)) {
            // line 23
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo "Date Annulation ";
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "14"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
        }
        // line 25
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Client";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 26
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Produit";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 27
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo " Quantité";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 28
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Prix Unitaire";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 29
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo "Prix Total";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 30
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
        // line 33
        $context['phpExcel']->setRowIndex(null);
        $context['phpExcel']->startRow($context['phpExcel']->getRowIndex());
        $context['phpExcel']->setRowIndex(0);
        // line 34
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "reference", []), "html", null, true);
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 37
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        // line 38
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 0)) {
            // line 39
            echo "                    Non traitée
                ";
        }
        // line 41
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 1)) {
            // line 42
            echo "                   En cours de traitement
                ";
        }
        // line 44
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 2)) {
            // line 45
            echo "                 Traitée
                ";
        }
        // line 47
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 3)) {
            // line 48
            echo "                  Livrée
                ";
        }
        // line 50
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 4)) {
            // line 51
            echo "                   Annulée
                ";
        }
        // line 53
        echo "            ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 56
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        // line 57
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutpayement", []) == 0)) {
            // line 58
            echo "                   Non payée
                ";
        }
        // line 60
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutpayement", []) == 1)) {
            // line 61
            echo "                   Payée
                ";
        }
        // line 63
        echo "            ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 66
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        // line 67
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "remboursement", []) == 0)) {
            // line 68
            echo "                   Non remboursée
                ";
        }
        // line 70
        echo "
                ";
        // line 71
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "remboursement", []) == 1)) {
            // line 72
            echo "                  Remboursée
                ";
        }
        // line 74
        echo "            ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 77
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateReservation", []), "m/d/Y h:i"), "html", null, true);
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 78
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        // line 79
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeReception", []) == 1)) {
            // line 80
            echo "                de 8h à 10h
            ";
        }
        // line 82
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeReception", []) == 2)) {
            // line 83
            echo "                    de 10h à 12h
                ";
        }
        // line 85
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeReception", []) == 3)) {
            // line 86
            echo "                    de 12h à 14h
                ";
        }
        // line 88
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeReception", []) == 4)) {
            // line 89
            echo "                    de 14h à 16h
                ";
        }
        // line 91
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeReception", []) == 5)) {
            // line 92
            echo "                    de 16h à 18h
                ";
        }
        // line 94
        echo "                ";
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "periodeReception", []) == 6)) {
            // line 95
            echo "                    de 18h à 20h
                ";
        }
        // line 97
        echo "            ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 99
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 3)) {
            // line 100
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateReception", []), "m/d/Y h:i"), "html", null, true);
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
        }
        // line 102
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 4)) {
            // line 103
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateAnnulation", []), "m/d/Y h:i"), "html", null, true);
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
        }
        // line 105
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
        // line 106
        $context['phpExcel']->setCellIndex(null);
        ob_start();
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
        // line 33
        $context['phpExcel']->endRow();
        // line 115
        $context["pt"] = 0;
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 117
            $context['phpExcel']->setRowIndex(null);
            $context['phpExcel']->startRow($context['phpExcel']->getRowIndex());
            $context['phpExcel']->setRowIndex(0);
            // line 118
            $context["pt"] = (($context["pt"] ?? $this->getContext($context, "pt")) + ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prix", []) * $this->getAttribute($context["produit"], "quantite", [])));
            // line 119
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
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
            echo " ";
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
            // line 126
            if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 3)) {
                // line 127
                $context['phpExcel']->setCellIndex(null);
                ob_start();
                $cellValue = trim(ob_get_clean());
                $cellProperties = ["style" => ["font" => ["size" => "10"]]];
                $context['phpExcel']->startCell($cellValue, $cellProperties);
                unset($cellIndex, $cellValue, $cellProperties);
                $context['phpExcel']->endCell();
            }
            // line 129
            if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 4)) {
                // line 130
                $context['phpExcel']->setCellIndex(null);
                ob_start();
                $cellValue = trim(ob_get_clean());
                $cellProperties = ["style" => ["font" => ["size" => "10"]]];
                $context['phpExcel']->startCell($cellValue, $cellProperties);
                unset($cellIndex, $cellValue, $cellProperties);
                $context['phpExcel']->endCell();
            }
            // line 132
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 133
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "nom", []), "html", null, true);
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 134
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", []), "html", null, true);
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 135
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prix", []), "html", null, true);
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 136
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["produit"], "produit", []), "prix", []) * $this->getAttribute($context["produit"], "quantite", [])), "html", null, true);
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 137
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
            // line 117
            $context['phpExcel']->endRow();
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        $context['phpExcel']->setRowIndex(null);
        $context['phpExcel']->startRow($context['phpExcel']->getRowIndex());
        $context['phpExcel']->setRowIndex(0);
        // line 142
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 143
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 144
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo " ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 145
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo " ";
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
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 149
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 3)) {
            // line 150
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
        }
        // line 152
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "statutcommande", []) == 4)) {
            // line 153
            $context['phpExcel']->setCellIndex(null);
            ob_start();
            $cellValue = trim(ob_get_clean());
            $cellProperties = ["style" => ["font" => ["size" => "10"]]];
            $context['phpExcel']->startCell($cellValue, $cellProperties);
            unset($cellIndex, $cellValue, $cellProperties);
            $context['phpExcel']->endCell();
        }
        // line 155
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 156
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 157
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 158
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 159
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "10"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 160
        $context['phpExcel']->setCellIndex(null);
        ob_start();
        echo twig_escape_filter($this->env, ($context["pt"] ?? $this->getContext($context, "pt")), "html", null, true);
        echo " ";
        $cellValue = trim(ob_get_clean());
        $cellProperties = ["style" => ["font" => ["size" => "14"]]];
        $context['phpExcel']->startCell($cellValue, $cellProperties);
        unset($cellIndex, $cellValue, $cellProperties);
        $context['phpExcel']->endCell();
        // line 141
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
        return "BackendBundle:excel/gerant:DetailsCommandeExcel.xlsx.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  691 => 1,  689 => 2,  687 => 141,  677 => 160,  669 => 159,  661 => 158,  653 => 157,  645 => 156,  637 => 155,  628 => 153,  626 => 152,  617 => 150,  615 => 149,  607 => 147,  599 => 146,  590 => 145,  581 => 144,  573 => 143,  565 => 142,  561 => 141,  555 => 117,  547 => 137,  538 => 136,  529 => 135,  519 => 134,  510 => 133,  502 => 132,  493 => 130,  491 => 129,  482 => 127,  480 => 126,  472 => 124,  464 => 123,  455 => 122,  446 => 121,  438 => 120,  430 => 119,  428 => 118,  424 => 117,  420 => 116,  418 => 115,  416 => 33,  408 => 110,  400 => 109,  392 => 108,  384 => 107,  376 => 106,  365 => 105,  355 => 103,  353 => 102,  343 => 100,  341 => 99,  334 => 97,  330 => 95,  327 => 94,  323 => 92,  320 => 91,  316 => 89,  313 => 88,  309 => 86,  306 => 85,  302 => 83,  299 => 82,  295 => 80,  292 => 79,  289 => 78,  280 => 77,  273 => 74,  269 => 72,  267 => 71,  264 => 70,  260 => 68,  257 => 67,  254 => 66,  247 => 63,  243 => 61,  240 => 60,  236 => 58,  233 => 57,  230 => 56,  223 => 53,  219 => 51,  216 => 50,  212 => 48,  209 => 47,  205 => 45,  202 => 44,  198 => 42,  195 => 41,  191 => 39,  188 => 38,  185 => 37,  176 => 34,  172 => 33,  170 => 9,  161 => 30,  152 => 29,  143 => 28,  134 => 27,  125 => 26,  116 => 25,  106 => 23,  104 => 22,  94 => 20,  92 => 19,  83 => 18,  74 => 17,  65 => 12,  56 => 11,  47 => 10,  43 => 9,  38 => 2,  33 => 1,);
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
            {#
                        {% xlscell { style: { font: { size: '14' } } } %}Remboursement {% endxlscell %}

            #}
            {% xlscell { style: { font: { size: '14' } } } %}Date Reservation {% endxlscell %}
            {% xlscell { style: { font: { size: '14' } } } %}Periode Reception {% endxlscell %}
            {% if commande.statutcommande == 3 %}
            {% xlscell { style: { font: { size: '14' } } } %}Date Livraison {% endxlscell %}
            {% endif %}
            {% if commande.statutcommande == 4 %}
                {% xlscell { style: { font: { size: '14' } } } %}Date Annulation {% endxlscell %}
            {% endif %}
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


   {% xlscell { style: { font: { size: '10' } } } %}
                {% if  commande.remboursement == 0 %}
                   Non remboursée
                {% endif %}

                {% if commande.remboursement == 1 %}
                  Remboursée
                {% endif %}
            {% endxlscell %}


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
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}

                {% if commande.statutcommande == 3 %}
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                 {% endif %}
                 {% if commande.statutcommande == 4 %}
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}
                 {% endif %}
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
                {% xlscell { style: { font: { size: '10' } } } %}{% endxlscell %}

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
            {% xlscell { style: { font: { size: '14' } } } %}{{pt}} {% endxlscell %}

        {% endxlsrow %}
        -->
    {% endxlssheet %}
{% endxlsdocument %}
", "BackendBundle:excel/gerant:DetailsCommandeExcel.xlsx.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/excel/gerant/DetailsCommandeExcel.xlsx.twig");
    }
}
