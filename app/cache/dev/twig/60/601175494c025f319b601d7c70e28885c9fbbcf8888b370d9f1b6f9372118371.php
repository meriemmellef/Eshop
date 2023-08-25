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

/* @Backend/gestionnaire/coupon/index.html.twig */
class __TwigTemplate_8bb12064cc22bd244f0f69af9335e2986103ca9a6e708250380325c261cb1f7e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'page' => [$this, 'block_page'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Backend/layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gestionnaire/coupon/index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/gestionnaire/coupon/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 5
        echo "    <div class=\"page\">


        <div class=\"page-header\">
            <h1 class=\"page-title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Coupons"), "html", null, true);
        echo "</h1>

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-4 \">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color:#46bf8c;margin-bottom: 0px!important;\"> ";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["nbcoupons"] ?? $this->getContext($context, "nbcoupons"))), "html", null, true);
        echo "</h4>
                            <small style=\"\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Coupons"), "html", null, true);
        echo "</small>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_coupon");
        echo "\" style=\"margin-top: 3px;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("code_specif"), "html", null, true);
        echo "
                        </a>

                    </div>
                    <div class=\"col-lg-4\">
                        <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generer_coupon");
        echo "\" style=\"margin-top: 3px; background-color: #e4072f;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i>   ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("code_alea"), "html", null, true);
        echo "
                        </a>
                    </div>

                    ";
        // line 45
        echo "
                </div>
            </div>
        </div>
        <div class=\"page-content\" style=\"padding-top: 0 !important;padding-bottom: 0 !important;\">
            <!-- Panel -->
            <div class=\"panel\" >
                <div class=\"panel-body container-fluid\" style=\"padding: 0 !important;\">
                    <div class=\"row row-lg\">


                        <div class=\"col-lg-12\">
                            <!-- Example Bordered Table -->
                            <table class=\"table table-bordered\" style=\"border: none;\">
                                <thead>
                                <tr>
                                    <th style=\"border: none;\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filtre"), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;\">
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_index");
        echo "\" method=\"get\">
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\">
                                                <label class=\"control-label\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Coupon"), "html", null, true);
        echo "</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"";
        // line 70
        if ((isset($context["search"]) || array_key_exists("search", $context))) {
            echo twig_escape_filter($this->env, ($context["search"] ?? $this->getContext($context, "search")), "html", null, true);
        }
        echo "\" placeholder=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("code"), "html", null, true);
        echo ">
                                            </div>
                                            <div style=\"padding-top: 10px\"  class=\"col-lg-8  col-md-8 col-xs-8 text-right\">
                                                <button type=\"submit\" class=\"float-right btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i>
                                                </button>
                                            </div>
                                        </form>

                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <!-- End Example Bordered Table -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Panel -->
        </div>
        <div class=\"page-content\" style=\"padding-top: 0px \" >
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\"  style=\"padding-left: 9px !important;padding-right: 9px !important;padding-top: 0px !important;padding-bottom: 0px !important;\">
                    <div class=\"row row-lg\">


                        <div class=\"col-lg-12\">
                            <!-- Example Bordered Table -->

                            <table class=\"table table-striped\">
                                <thead>
                                <tr >
                                    <th style=\"padding-left: 20px;width: 10%\" >";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Code"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 10%\" hidden>";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Montant"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 10%\" hidden>";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pourcentage"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 10%\">Type</th>
                                    <th class=\"text-right text-nowrap\" style=\"padding-right:42px;width: 10%\"class=\"text-nowrap\">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? $this->getContext($context, "coupons")));
        foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
            // line 114
            echo "                                    <tr >
                                        <td style=\"padding-left: 20px; vertical-align: middle;\" >
                                            ";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "code", []), "html", null, true);
            echo "
                                        </td>
                                        <td style=\"    vertical-align: middle;\" hidden>
                                            ";
            // line 119
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["coupon"], "montant", []), $this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "deviseNbDigitsDecimal", []), $this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "deviseDecimalSeparator", []), $this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "deviseThousandsSeparator", [])), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "devise", []), "html", null, true);
            echo "
                                        </td>
                                        <td style=\"    vertical-align: middle;\" hidden>
                                            ";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "pourcentage", []), "html", null, true);
            echo "%
                                        </td>
                                        <td style=\"    vertical-align: middle;\">
                                            ";
            // line 125
            if (($this->getAttribute($context["coupon"], "type", []) == 1)) {
                // line 126
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("réduction par prix"), "html", null, true);
                echo "
                                            ";
            } elseif (($this->getAttribute(            // line 127
$context["coupon"], "type", []) == 2)) {
                // line 128
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("réduction par pourcentage"), "html", null, true);
                echo "
                                            ";
            } else {
                // line 130
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Non affecté"), "html", null, true);
                echo "
                                            ";
            }
            // line 132
            echo "                                        </td>

                                        <td class=\"text-right\" style=\"padding-right:20px;    vertical-align: middle;\">
                                            <a href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_edit", ["id" => $this->getAttribute($context["coupon"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\" class=\"btn btn-pure btn-default icon md-edit waves-effect waves-classic\"></a>
                                            <a data-target=\"#coupon_delete";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "id", []), "html", null, true);
            echo "\" data-toggle=\"modal\" class=\"btn btn-pure btn-default icon md-delete waves-effect waves-classic\"></a>


                                            <div class=\"modal fade\" style=\"top: 111px;z-index: 1711;\"  id=\"coupon_delete";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "id", []), "html", null, true);
            echo "\"   role=\"dialog\">
                                                <div class=\"modal-dialog modal-simple\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                    aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">×</span>
                                                            </button>
                                                            <h4 class=\"modal-title\" id=\"coupon_delete";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("conf_delete"), "html", null, true);
            echo "</h4>
                                                        </div>
                                                        <form action=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_delete", ["id" => $this->getAttribute($context["coupon"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\" method=\"get\">
                                                            <div class=\"modal-body\">
                                                                <h4 style=\"text-align:center\" >";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("msg_conf_delete"), "html", null, true);
            echo "</h4>
                                                            </div>
                                                            <div class=\"panel-footer\">
                                                                <button style=\"margin-left: 80%;width: 100px\" type=\"submit\"
                                                                        class=\"pull-right btn btn-block btn-danger\">";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_delete"), "html", null, true);
            echo "
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>


                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "                                </tbody>
                            </table>
                            <div class=\"navigation\">
                                ";
        // line 170
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["coupons"] ?? $this->getContext($context, "coupons")));
        echo "
                            </div>

                            <!-- End Example Bordered Table -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Panel -->
        </div>


    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 185
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 186
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
    <script>
        \$( \"select[name='categorie']\" ).change(function () {
            var matiereID = \$(this).val();
            console.log('aaaaa');

            if(matiereID) {


                \$.ajax({
                    url: \"";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_sous_categorie_from_categorie");
        echo "\",
                    dataType: 'Json',
                    data: {'categorieid':matiereID},
                    type:'GET',
                    success: function(data) {
                        \$('select[name=\"souscategorie\"]').empty();
                        \$('select[name=\"souscategorie').append('<option value=\"\" selected hidden>'+ 'choisir une sous categorie' +'</option>');

                        for(i = 0; i < data.length; i++) {
                            student = data[i];
                            \$('select[name=\"souscategorie').append('<option value=\"'+ student['id'] +'\">'+ student['nom'] +'</option>');
                        };
                    }
                });


            }else{
                \$('select[name=\"souscategorie\"]').empty();
            }
        });
        (function (document, window, \$) {
            'use strict';

            var Site = window.Site;
            \$(document).ready(function () {
                Site.run();
            });

            \$( \"select[name='categorie']\" ).select2();
            \$( \"select[name='souscategorie']\" ).select2();

        })(document, window, jQuery);
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/gestionnaire/coupon/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 198,  341 => 186,  335 => 185,  313 => 170,  308 => 167,  290 => 155,  283 => 151,  278 => 149,  271 => 147,  260 => 139,  254 => 136,  250 => 135,  245 => 132,  239 => 130,  233 => 128,  231 => 127,  226 => 126,  224 => 125,  218 => 122,  210 => 119,  204 => 116,  200 => 114,  196 => 113,  187 => 107,  183 => 106,  179 => 105,  137 => 70,  133 => 69,  128 => 67,  119 => 61,  101 => 45,  94 => 27,  90 => 26,  82 => 21,  78 => 20,  71 => 16,  67 => 15,  58 => 9,  52 => 5,  46 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Backend/layout/layout.html.twig' %}


{% block page %}
    <div class=\"page\">


        <div class=\"page-header\">
            <h1 class=\"page-title\">{{ \"Gestion Des Coupons\"|trans }}</h1>

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-4 \">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color:#46bf8c;margin-bottom: 0px!important;\"> {{ nbcoupons|length }}</h4>
                            <small style=\"\">{{ \"Coupons\"|trans }}</small>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <a href=\"{{ path('new_coupon') }}\" style=\"margin-top: 3px;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i> {{ \"code_specif\"|trans }}
                        </a>

                    </div>
                    <div class=\"col-lg-4\">
                        <a href=\"{{ path('generer_coupon') }}\" style=\"margin-top: 3px; background-color: #e4072f;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i>   {{\"code_alea\"|trans}}
                        </a>
                    </div>

                    {#
                      <div class=\"col-lg-3\">
                        <a href=\"{{ path('generer_coupon_prix') }}\" style=\"margin-top: 3px; background-color: #e4072f;\" class=\"float-right btn btn-danger btn-sm btn-icon  waves-effect waves-classic\">
                            <i class=\"icon md-money\"> </i>
                            {{\"Générer\"|trans}}
                        </a>
                    </div>
                    <div class=\"col-lg-3\">
                        <a href=\"{{ path('generer_coupon_pourcentage') }}\" style=\"margin-top: 3px; background-color: #e4072f;\" class=\"float-right btn btn-danger btn-sm btn-icon  waves-effect waves-classic\">
                            <i class=\"icon\">% </i>
                            {{\"Générer\"|trans}}
                        </a>
                    </div>
                    #}

                </div>
            </div>
        </div>
        <div class=\"page-content\" style=\"padding-top: 0 !important;padding-bottom: 0 !important;\">
            <!-- Panel -->
            <div class=\"panel\" >
                <div class=\"panel-body container-fluid\" style=\"padding: 0 !important;\">
                    <div class=\"row row-lg\">


                        <div class=\"col-lg-12\">
                            <!-- Example Bordered Table -->
                            <table class=\"table table-bordered\" style=\"border: none;\">
                                <thead>
                                <tr>
                                    <th style=\"border: none;\">{{ \"Filtre\"|trans }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;\">
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"{{ path('coupon_index') }}\" method=\"get\">
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\">
                                                <label class=\"control-label\">{{ \"Coupon\"|trans }}</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\" value=\"{% if search is defined %}{{search}}{% endif %}\" placeholder={{ \"code\"|trans }}>
                                            </div>
                                            <div style=\"padding-top: 10px\"  class=\"col-lg-8  col-md-8 col-xs-8 text-right\">
                                                <button type=\"submit\" class=\"float-right btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i>
                                                </button>
                                            </div>
                                        </form>

                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <!-- End Example Bordered Table -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Panel -->
        </div>
        <div class=\"page-content\" style=\"padding-top: 0px \" >
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\"  style=\"padding-left: 9px !important;padding-right: 9px !important;padding-top: 0px !important;padding-bottom: 0px !important;\">
                    <div class=\"row row-lg\">


                        <div class=\"col-lg-12\">
                            <!-- Example Bordered Table -->

                            <table class=\"table table-striped\">
                                <thead>
                                <tr >
                                    <th style=\"padding-left: 20px;width: 10%\" >{{ \"Code\"|trans }}</th>
                                    <th style=\"width: 10%\" hidden>{{ \"Montant\"|trans }}</th>
                                    <th style=\"width: 10%\" hidden>{{ \"Pourcentage\"|trans }}</th>
                                    <th style=\"width: 10%\">Type</th>
                                    <th class=\"text-right text-nowrap\" style=\"padding-right:42px;width: 10%\"class=\"text-nowrap\">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for coupon in coupons %}
                                    <tr >
                                        <td style=\"padding-left: 20px; vertical-align: middle;\" >
                                            {{ coupon.code}}
                                        </td>
                                        <td style=\"    vertical-align: middle;\" hidden>
                                            {{ coupon.montant  |number_format(pays.deviseNbDigitsDecimal, pays.deviseDecimalSeparator, pays.deviseThousandsSeparator)}} {{ pays.devise }}
                                        </td>
                                        <td style=\"    vertical-align: middle;\" hidden>
                                            {{ coupon.pourcentage}}%
                                        </td>
                                        <td style=\"    vertical-align: middle;\">
                                            {% if coupon.type == 1 %}
                                            {{\"réduction par prix\"|trans}}
                                            {% elseif coupon.type == 2 %}
                                            {{\"réduction par pourcentage\"|trans}}
                                            {% else %}
                                            {{\"Non affecté\"|trans}}
                                            {% endif %}
                                        </td>

                                        <td class=\"text-right\" style=\"padding-right:20px;    vertical-align: middle;\">
                                            <a href=\"{{ path('coupon_edit', {'id': coupon.id,'page':page}) }}\" class=\"btn btn-pure btn-default icon md-edit waves-effect waves-classic\"></a>
                                            <a data-target=\"#coupon_delete{{ coupon.id }}\" data-toggle=\"modal\" class=\"btn btn-pure btn-default icon md-delete waves-effect waves-classic\"></a>


                                            <div class=\"modal fade\" style=\"top: 111px;z-index: 1711;\"  id=\"coupon_delete{{ coupon.id }}\"   role=\"dialog\">
                                                <div class=\"modal-dialog modal-simple\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                    aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">×</span>
                                                            </button>
                                                            <h4 class=\"modal-title\" id=\"coupon_delete{{ coupon.id }}\">{{ 'conf_delete'|trans }}</h4>
                                                        </div>
                                                        <form action=\"{{ path('coupon_delete', { 'id': coupon.id,'page':page }) }}\" method=\"get\">
                                                            <div class=\"modal-body\">
                                                                <h4 style=\"text-align:center\" >{{ 'msg_conf_delete'|trans }}</h4>
                                                            </div>
                                                            <div class=\"panel-footer\">
                                                                <button style=\"margin-left: 80%;width: 100px\" type=\"submit\"
                                                                        class=\"pull-right btn btn-block btn-danger\">{{ 'label_delete'|trans }}
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>


                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                            <div class=\"navigation\">
                                {{ knp_pagination_render(coupons) }}
                            </div>

                            <!-- End Example Bordered Table -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Panel -->
        </div>


    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
    <script>
        \$( \"select[name='categorie']\" ).change(function () {
            var matiereID = \$(this).val();
            console.log('aaaaa');

            if(matiereID) {


                \$.ajax({
                    url: \"{{ path('get_sous_categorie_from_categorie') }}\",
                    dataType: 'Json',
                    data: {'categorieid':matiereID},
                    type:'GET',
                    success: function(data) {
                        \$('select[name=\"souscategorie\"]').empty();
                        \$('select[name=\"souscategorie').append('<option value=\"\" selected hidden>'+ 'choisir une sous categorie' +'</option>');

                        for(i = 0; i < data.length; i++) {
                            student = data[i];
                            \$('select[name=\"souscategorie').append('<option value=\"'+ student['id'] +'\">'+ student['nom'] +'</option>');
                        };
                    }
                });


            }else{
                \$('select[name=\"souscategorie\"]').empty();
            }
        });
        (function (document, window, \$) {
            'use strict';

            var Site = window.Site;
            \$(document).ready(function () {
                Site.run();
            });

            \$( \"select[name='categorie']\" ).select2();
            \$( \"select[name='souscategorie']\" ).select2();

        })(document, window, jQuery);
    </script>
{% endblock %}
", "@Backend/gestionnaire/coupon/index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gestionnaire\\coupon\\index.html.twig");
    }
}
