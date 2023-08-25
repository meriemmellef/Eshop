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

/* FrontendBundle:Profile:facture.html.twig */
class __TwigTemplate_c25a6f52e44740fc664be62195909d8753f9a0acc8687aa7210206e81ef95a2e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'breadcrump' => [$this, 'block_breadcrump'],
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:Profile:facture.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutBreadcrumps.html.twig", "FrontendBundle:Profile:facture.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_breadcrump($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrump"));

        // line 5
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
        <div class=\"row\" style=\"margin-right: 2%;margin-left: 2%\">
            <div class=\"col-lg-9 col-md-9 col-sm-7\">
                <div class=\"row\" style=\"margin-right: 2%\">
                    <div class=\"breadcrumbDiv col-lg-12\">
                        <ul class=\"breadcrumb\">
                            <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
        echo "</a></li>
                            <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "firstName", []), "html", null, true);
        echo "</a></li>
                            <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\">
                                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mes Commandes"), "html", null, true);
        echo "</li>
                        </ul>
                    </div>
                </div>

                <div class=\"row userInfo\">
                    <div class=\"col-lg-12\">
                        <span class=\"titre_m_menu\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bienvenue_sur_votre_compte"), "html", null, true);
        echo "</span>
                        <br>   <br>
                    </div>

                    <div style=\"clear:both\"></div>

                    <div class=\"col-xs-12 col-sm-12\">
                        <table class=\"footable\">
                            <thead  >
                            <tr>
                                <th class=\"titireText\" data-class=\"expand\" data-sort-initial=\"true\" data-type=\"numeric\"><span title=\"tableau trié par cette colonne au chargement\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Références"), "html", null, true);
        echo "</span></th>
                                <th class=\"titireText\" data-hide=\"phone,tablet\" data-sort-ignore=\"true\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nb. articles"), "html", null, true);
        echo "</th>
                                <th class=\"titireText\" data-hide=\"phone,tablet\" data-sort-ignore=\"true\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Désignations"), "html", null, true);
        echo "</th>
                                <th class=\"titireText\"  data-hide=\"phone,tablet\" data-sort-ignore=\"true\"><strong></strong></th>
                                <th class=\"titireText\" data-hide=\"default\" data-type=\"numeric\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix"), "html", null, true);
        echo " </th>
                                <th class=\"titireText\" data-hide=\"default\" data-type=\"numeric\"> ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date et période de retrait"), "html", null, true);
        echo "</th>
                                <th class=\"titireText\" data-hide=\"phone\" data-type=\"numeric\"> ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut"), "html", null, true);
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
   

  ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["factures"] ?? $this->getContext($context, "factures")));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 47
            echo "     
                            <tr>
                                <td data-value=\"}\" class=\"spanText\">#";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "reference", []), "html", null, true);
            echo "</td>
                                <td>
                                  
                                    ";
            // line 52
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["facture"], "commandesproduits", [])), "html", null, true);
            echo "
                                  <small class=\"spanText\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Article"), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["facture"], "commandesproduits", [])) > 1)) {
                echo "(s) ";
            }
            echo "</small>
                                </td>
                              <td>";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["facture"], "commandesproduits", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comp"], "produit", []), "nom", []), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo "-";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                            
                                <td><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_detail", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\" style=\"font-family: Roboto-Regular, sans-serif !important;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Voir Détails"), "html", null, true);
            echo "</a> &nbsp;&nbsp;
                                   <a style=\"display:none;\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facturepdf", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Imprimer facture"), "html", null, true);
            echo "</a>
                               </td>
                                <td data-value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($context["facture"], "prix", []), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
            echo "\"><span class=\"price\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($context["facture"], "prix", []), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "</span></td>
                                <td data-value=\"\" >
                                    <span class=\"spanText\" >";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["facture"], "dateReception", []), "d/m/Y h:i"), "html", null, true);
            echo "</span>

                                    ";
            // line 64
            if (($this->getAttribute($context["facture"], "periodeReception", []) == 1)) {
                // line 65
                echo "
                                        <span class=\"spanText\" > ";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("de 8h à 10h"), "html", null, true);
                echo "</span>

                                    ";
            }
            // line 69
            echo "                                    ";
            if (($this->getAttribute($context["facture"], "periodeReception", []) == 2)) {
                // line 70
                echo "                                    <span class=\"spanText\" > ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("de 10h à 12h"), "html", null, true);
                echo "     </span>

                                    ";
            }
            // line 73
            echo "                                    ";
            if (($this->getAttribute($context["facture"], "periodeReception", []) == 3)) {
                // line 74
                echo "
                                        <span class=\"spanText\" >";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("de 12h à 14h"), "html", null, true);
                echo "</span>

                                    ";
            }
            // line 78
            echo "                                    ";
            if (($this->getAttribute($context["facture"], "periodeReception", []) == 4)) {
                // line 79
                echo "
                                        <span class=\"spanText\" > ";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("de 14h à 16h"), "html", null, true);
                echo "</span>
                                    ";
            }
            // line 82
            echo "                                    ";
            if (($this->getAttribute($context["facture"], "periodeReception", []) == 5)) {
                // line 83
                echo "
                                        <span class=\"spanText\" >";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("de 16h à 18h"), "html", null, true);
                echo "</span>

                                    ";
            }
            // line 87
            echo "                                    ";
            if (($this->getAttribute($context["facture"], "periodeReception", []) == 6)) {
                // line 88
                echo "
                                        <span class=\"spanText\" >";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("de 18h à 20h"), "html", null, true);
                echo "</span>
                                    ";
            }
            // line 91
            echo "                                </td>
                               
                               <td data-value=\"\">
                                ";
            // line 94
            if (($this->getAttribute($context["facture"], "statutcommande", []) == 0)) {
                // line 95
                echo "                                    <span class=\"badge badge-warning\" style=\"font-family: Roboto-Regular, sans-serif\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Non traitée"), "html", null, true);
                echo "</span>
                                ";
            }
            // line 97
            echo "
                                ";
            // line 98
            if (($this->getAttribute($context["facture"], "statutcommande", []) == 1)) {
                // line 99
                echo "                                    <span class=\"badge badge-info\" style=\"font-family: Roboto-Regular, sans-serif\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("En cours de traitement"), "html", null, true);
                echo "</span>
                                ";
            }
            // line 101
            echo "                                ";
            if (($this->getAttribute($context["facture"], "statutcommande", []) == 2)) {
                // line 102
                echo "                                    <span class=\"badge badge-primary\" style=\"font-family: Roboto-Regular, sans-serif\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Traitée"), "html", null, true);
                echo "</span>
                                ";
            }
            // line 104
            echo "                                ";
            if (($this->getAttribute($context["facture"], "statutcommande", []) == 3)) {
                // line 105
                echo "                                    <span class=\"badge badge-success\" style=\"font-family: Roboto-Regular, sans-serif\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Livrée"), "html", null, true);
                echo "</span>
                                ";
            }
            // line 107
            echo "                                ";
            if (($this->getAttribute($context["facture"], "statutcommande", []) == 4)) {
                // line 108
                echo "                                    <span class=\"badge badge-danger\" style=\"font-family: Roboto-Regular, sans-serif\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Annulée"), "html", null, true);
                echo "</span>
                                ";
            }
            // line 110
            echo "                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                            </tbody>
                        </table>
                    </div>

                    <div style=\"clear:both\"></div>

                    <div class=\"col-lg-12 clearfix\" style=\"margin-top: 20px;margin-bottom: 20px\">
                        <div class=\"row\">
                            <a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_frontend");
        echo "\" class=\"float-right col-md-6 col-xs-12 col-lg-5\">
                                <button class=\"btn_card\"  style=\"margin-right: 10px;margin-left: 10px;width: 100%;margin-bottom: 10px\">
                                    ";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Continuer vos achats"), "html", null, true);
        echo "</button></a>

                            <a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte");
        echo "\" class=\"float-left col-lg-5 col-md-6 col-xs-12\"> <button class=\"btn_regist\" style=\"margin-right: 10px;margin-left: 10px;width: 100%\">
                                    ";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mon compte"), "html", null, true);
        echo "</button></a>
                        </div>


                    </div>
                </div>
                <!--/row end-->

            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-5\"></div>
        </div>
        <!--/row-->

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 140
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 141
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <!-- styles needed by footable  -->
    <link href=\"/assets/css/footable-0.1.css?v1\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"/assets/css/footable.sortable-0.1.css\" rel=\"stylesheet\" type=\"text/css\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 147
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 148
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- include footable plugin -->
    <script src=\"/assets/js/footable.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/js/footable.sortable.js\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        \$(function () {
            \$('.footable').footable();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Profile:facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 148,  417 => 147,  405 => 141,  399 => 140,  378 => 126,  374 => 125,  369 => 123,  364 => 121,  354 => 113,  346 => 110,  340 => 108,  337 => 107,  331 => 105,  328 => 104,  322 => 102,  319 => 101,  313 => 99,  311 => 98,  308 => 97,  302 => 95,  300 => 94,  295 => 91,  290 => 89,  287 => 88,  284 => 87,  278 => 84,  275 => 83,  272 => 82,  267 => 80,  264 => 79,  261 => 78,  255 => 75,  252 => 74,  249 => 73,  242 => 70,  239 => 69,  233 => 66,  230 => 65,  228 => 64,  223 => 62,  216 => 60,  209 => 58,  203 => 57,  167 => 55,  158 => 53,  154 => 52,  148 => 49,  144 => 47,  140 => 46,  131 => 40,  127 => 39,  123 => 38,  118 => 36,  114 => 35,  110 => 34,  97 => 24,  87 => 17,  80 => 15,  76 => 14,  68 => 8,  62 => 7,  54 => 5,  48 => 4,  32 => 1,);
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


    {% block breadcrump %}

    {% endblock breadcrump %}
    {% block content %}

        <div class=\"row\" style=\"margin-right: 2%;margin-left: 2%\">
            <div class=\"col-lg-9 col-md-9 col-sm-7\">
                <div class=\"row\" style=\"margin-right: 2%\">
                    <div class=\"breadcrumbDiv col-lg-12\">
                        <ul class=\"breadcrumb\">
                            <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">{{ \"Home\"|trans }}</a></li>
                            <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"{{ path(\"compte\") }}\">{{ app.user.firstName }}</a></li>
                            <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\">
                                {{ \"Mes Commandes\" | trans }}</li>
                        </ul>
                    </div>
                </div>

                <div class=\"row userInfo\">
                    <div class=\"col-lg-12\">
                        <span class=\"titre_m_menu\">{{\"Bienvenue_sur_votre_compte\" | trans}}</span>
                        <br>   <br>
                    </div>

                    <div style=\"clear:both\"></div>

                    <div class=\"col-xs-12 col-sm-12\">
                        <table class=\"footable\">
                            <thead  >
                            <tr>
                                <th class=\"titireText\" data-class=\"expand\" data-sort-initial=\"true\" data-type=\"numeric\"><span title=\"tableau trié par cette colonne au chargement\">{{\"Références\" | trans}}</span></th>
                                <th class=\"titireText\" data-hide=\"phone,tablet\" data-sort-ignore=\"true\">{{ \"Nb. articles\" | trans }}</th>
                                <th class=\"titireText\" data-hide=\"phone,tablet\" data-sort-ignore=\"true\">{{ \"Désignations\" | trans }}</th>
                                <th class=\"titireText\"  data-hide=\"phone,tablet\" data-sort-ignore=\"true\"><strong></strong></th>
                                <th class=\"titireText\" data-hide=\"default\" data-type=\"numeric\">{{ \"Prix\" | trans }} </th>
                                <th class=\"titireText\" data-hide=\"default\" data-type=\"numeric\"> {{\"Date et période de retrait\" | trans}}</th>
                                <th class=\"titireText\" data-hide=\"phone\" data-type=\"numeric\"> {{ \"Statut\" | trans }}</th>
                            </tr>
                            </thead>
                            <tbody>
   

  {% for facture in factures %}
     
                            <tr>
                                <td data-value=\"}\" class=\"spanText\">#{{ facture.reference }}</td>
                                <td>
                                  
                                    {{ facture.commandesproduits|length }}
                                  <small class=\"spanText\">{{ \"Article\"|trans }} {% if  facture.commandesproduits|length>1 %}(s) {% endif %}</small>
                                </td>
                              <td>{% for comp in facture.commandesproduits %}{{comp.produit.nom}}{%if not loop.last%}-{%endif%}{% endfor %}</td>
                            
                                <td><a href=\"{{ path(\"facture_detail\",{\"id\":facture.id}) }}\" class=\"btn btn-primary btn-sm\" style=\"font-family: Roboto-Regular, sans-serif !important;\">{{\"Voir Détails\" | trans}}</a> &nbsp;&nbsp;
                                   <a style=\"display:none;\" href=\"{{ path(\"facturepdf\",{\"id\":facture.id}) }}\" class=\"btn btn-primary btn-sm\">{{ \"Imprimer facture\" | trans }}</a>
                               </td>
                                <td data-value=\"{{ formated_price(facture.prix,app.session.get('pays'),false) }}\"><span class=\"price\" >{{ formated_price(facture.prix,app.session.get('pays')) }}</span></td>
                                <td data-value=\"\" >
                                    <span class=\"spanText\" >{{facture.dateReception|date(\"d/m/Y h:i\") }}</span>

                                    {% if  facture.periodeReception == 1 %}

                                        <span class=\"spanText\" > {{\"de 8h à 10h\" | trans}}</span>

                                    {% endif %}
                                    {% if  facture.periodeReception == 2 %}
                                    <span class=\"spanText\" > {{\"de 10h à 12h\" | trans}}     </span>

                                    {% endif %}
                                    {% if  facture.periodeReception == 3 %}

                                        <span class=\"spanText\" >{{\"de 12h à 14h\" | trans}}</span>

                                    {% endif %}
                                    {% if facture.periodeReception == 4 %}

                                        <span class=\"spanText\" > {{\"de 14h à 16h\" | trans}}</span>
                                    {% endif %}
                                    {% if  facture.periodeReception == 5 %}

                                        <span class=\"spanText\" >{{\"de 16h à 18h\" | trans}}</span>

                                    {% endif %}
                                    {% if facture.periodeReception == 6 %}

                                        <span class=\"spanText\" >{{\"de 18h à 20h\" | trans}}</span>
                                    {% endif %}
                                </td>
                               
                               <td data-value=\"\">
                                {% if  facture.statutcommande == 0 %}
                                    <span class=\"badge badge-warning\" style=\"font-family: Roboto-Regular, sans-serif\">{{\"Non traitée\" | trans}}</span>
                                {% endif %}

                                {% if  facture.statutcommande == 1 %}
                                    <span class=\"badge badge-info\" style=\"font-family: Roboto-Regular, sans-serif\">{{ \"En cours de traitement\" | trans }}</span>
                                {% endif %}
                                {% if  facture.statutcommande == 2 %}
                                    <span class=\"badge badge-primary\" style=\"font-family: Roboto-Regular, sans-serif\">{{\"Traitée\" | trans}}</span>
                                {% endif %}
                                {% if  facture.statutcommande == 3 %}
                                    <span class=\"badge badge-success\" style=\"font-family: Roboto-Regular, sans-serif\">{{\"Livrée\" | trans}}</span>
                                {% endif %}
                                {% if  facture.statutcommande == 4 %}
                                    <span class=\"badge badge-danger\" style=\"font-family: Roboto-Regular, sans-serif\">{{\"Annulée\" | trans}}</span>
                                {% endif %}
                                </td>
                            </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>

                    <div style=\"clear:both\"></div>

                    <div class=\"col-lg-12 clearfix\" style=\"margin-top: 20px;margin-bottom: 20px\">
                        <div class=\"row\">
                            <a href=\"{{ path(\"homepage_frontend\") }}\" class=\"float-right col-md-6 col-xs-12 col-lg-5\">
                                <button class=\"btn_card\"  style=\"margin-right: 10px;margin-left: 10px;width: 100%;margin-bottom: 10px\">
                                    {{ \"Continuer vos achats\" | trans }}</button></a>

                            <a href=\"{{ path(\"compte\") }}\" class=\"float-left col-lg-5 col-md-6 col-xs-12\"> <button class=\"btn_regist\" style=\"margin-right: 10px;margin-left: 10px;width: 100%\">
                                    {{ \"Mon compte\" | trans }}</button></a>
                        </div>


                    </div>
                </div>
                <!--/row end-->

            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-5\"></div>
        </div>
        <!--/row-->

    {% endblock %}
{% block stylesheets %}
{{ parent() }}
    <!-- styles needed by footable  -->
    <link href=\"/assets/css/footable-0.1.css?v1\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"/assets/css/footable.sortable-0.1.css\" rel=\"stylesheet\" type=\"text/css\"/>
{% endblock stylesheets %}

{% block javascripts %}
    {{ parent() }}
    <!-- include footable plugin -->
    <script src=\"/assets/js/footable.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/js/footable.sortable.js\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        \$(function () {
            \$('.footable').footable();
        });
    </script>
{% endblock %}
", "FrontendBundle:Profile:facture.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/Profile/facture.html.twig");
    }
}
