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

/* @Backend/gestionnaire/station/index.html.twig */
class __TwigTemplate_b57c8edb647b2e4a763322170a55bee9cf970cf5d247400c5d0ae9aad1477180 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'page' => [$this, 'block_page'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gestionnaire/station/index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/gestionnaire/station/index.html.twig", 1);
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
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Stations"), "html", null, true);
        echo "</h1>

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-6 \">
                        <div class=\"media-body text-center\">
                            <h3 class=\"mt-0 mb-5\"
                                style=\"color: #f02138;margin-bottom: -5px!important;\"> ";
        // line 14
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["nbstations"] ?? $this->getContext($context, "nbstations"))), "html", null, true);
        echo "</h3>
                            <small style=\"color: #505050;\">Stations </small>
                        </div>
                    </div>
                    <div class=\"col-lg-6 \">
                        <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("station_new");
        echo "\" style=\"margin-top: 3px;\"
                           class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter"), "html", null, true);
        echo "
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"page-content\" style=\"padding-top: 0 !important;padding-bottom: 0 !important;\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\" style=\"padding: 0 !important;\">
                    <div class=\"row row-lg\">


                        <div class=\"col-lg-12\">
                            <!-- Example Bordered Table -->
                            <table class=\"table table-bordered\" style=\"border: none;\">
                                <thead>
                                <tr style=\"border-bottom: 1px solid #f3f3f3;\">
                                    <th style=\"border: none;padding-left: 20px\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filtre"), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;padding: 10px 20px;\">
                                        <form class=\"row\" style=\"align-items: center;max-width: 1520px;\"
                                              action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("station_index");
        echo "\" method=\"get\">
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\">
                                                <label class=\"control-label\">Station</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\"
                                                       value=\"";
        // line 50
        if ((isset($context["search"]) || array_key_exists("search", $context))) {
            echo twig_escape_filter($this->env, ($context["search"] ?? $this->getContext($context, "search")), "html", null, true);
        }
        echo "\"
                                                       placeholder=";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("station"), "html", null, true);
        echo ">

                                            </div>
                                            <div class=\"col-lg-8  col-md-8 col-xs-8 text-right\">
                                                <button style=\"margin-right: 10px;\" type=\"submit\"
                                                        class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>

                                                <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExportStation");
        echo "\"
                                                   class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                                                    <i class=\"icon md-download\" aria-hidden=\"true\"></i> ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("exporter"), "html", null, true);
        echo "</a>
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

        <div class=\"page-content\" style=\"padding-top: 0px \">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\"
                     style=\"padding-left: 0px !important;padding-right: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;\">
                    <div class=\"row row-lg\">


                        <div class=\"col-lg-12\">
                            <!-- Example Bordered Table -->

                            <table class=\"table table-striped\">
                                <thead>
                                <tr class=\"\">
                                    <th style=\"padding-left: 20px;width: 30%;\">Station</th>
                                    <th style=\"width: 15%\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tel"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 15%\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zone"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 15%\" hidden>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fichier"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 10%;text-align: center;\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Est Active"), "html", null, true);
        echo "</th>

                                    <th class=\"text-center\" style=\"padding-right: 20px;width: 15%\" class=\"text-nowrap\">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>


                                ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stations"] ?? $this->getContext($context, "stations")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 108
            echo "


                                    <tr class=\"\">
                                        <td style=\"padding-left: 20px;vertical-align: middle;\">
                                            <div class=\"media-body\">
                                                <h5 class=\"mt-0 mb-5\">";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nom", []), "html", null, true);
            echo " </h5>
                                                <small>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "adresse", []), "html", null, true);
            echo " </small>
                                            </div>
                                        </td>
                                        <td style=\"    vertical-align: middle;\">
                                            ";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "tel", []), "html", null, true);
            echo "
                                        </td>
                                        <td style=\"vertical-align: middle;\">
                                            ";
            // line 122
            if ($this->getAttribute($context["s"], "zone", [])) {
                // line 123
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "zone", []), "nom", []), "html", null, true);
                echo "
                                            ";
            }
            // line 125
            echo "                                        </td>
                                        <td style=\"vertical-align: middle;\" hidden>
                                            ";
            // line 127
            if ($this->getAttribute($context["s"], "file_vente", [])) {
                // line 128
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/condition_vente/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "file_vente", []), "html", null, true);
                echo "\" target=\"_blank\">
                                                    ";
                // line 129
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Télecharger"), "html", null, true);
                echo "
                                                </a>
                                            ";
            }
            // line 132
            echo "                                        </td>
                                        <td style=\"text-align: center;\" >
                                            ";
            // line 134
            if (($this->getAttribute($context["s"], "isActive", []) == false)) {
                // line 135
                echo "                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>
                                            ";
            } else {
                // line 137
                echo "                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>
                                            ";
            }
            // line 139
            echo "                                        </td>
                                        <td class=\"text-right\"
                                            style=\"padding-right: 20px;min-width: 130px; vertical-align: middle;\">

                                            <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("station_edit", ["id" => $this->getAttribute($context["s"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\"
                                               class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \" title=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
            echo "\"
                                               style=\"color: #b1b1b1;border: 1px solid;\"></a>


                                            ";
            // line 148
            if (($this->getAttribute($context["s"], "isActive", []) == false)) {
                // line 149
                echo "                                                <a class=\"btn md-lock-open\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("station_descative", ["id" => $this->getAttribute($context["s"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activer"), "html", null, true);
                echo "\"
                                                   style=\"color: #46bf8c!important;background-color: #ffffff !important;border: 1px solid;\"></a>
                                            ";
            } else {
                // line 152
                echo "                                                <a class=\"btn md-lock-open\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("station_descative", ["id" => $this->getAttribute($context["s"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
                echo "\"  title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("deactivate"), "html", null, true);
                echo "\"
                                                   style=\"color: #b1b1b1!important;background-color: #ffffff !important;border: 1px solid;\"></a>

                                            ";
            }
            // line 156
            echo "


                                            <a data-target=\"#station_disable";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
            echo "\" data-toggle=\"modal\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
            echo "\"
                                               class=\"btn btn-pure btn-danger  md-delete waves-effect waves-classic\"
                                               style=\"color: #f02038;border: 1px solid;\"
                                            ></a>


                                            <div class=\"modal fade\" id=\"station_disable";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
            echo "\" aria-hidden=\"true\"
                                                 aria-labelledby=\"exampleModalTabs\"
                                                 role=\"dialog\" tabindex=\"-1\">
                                                <div class=\"modal-dialog modal-simple\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                    aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">×</span>
                                                            </button>
                                                            <h4 class=\"modal-title\" id=\"station_disable";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("conf_delete"), "html", null, true);
            echo "</h4>
                                                        </div>
                                                        <form action=\"";
            // line 177
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("station_disable", ["id" => $this->getAttribute($context["s"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\" method=\"get\">
                                                            <div class=\"modal-body\">
                                                                <h4 style=\"text-align:center\" >";
            // line 179
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("msg_conf_delete"), "html", null, true);
            echo "</h4>
                                                            </div>
                                                            <div class=\"panel-footer\">
                                                                <button style=\"margin-left: 80%;width: 100px\" type=\"submit\"
                                                                        class=\"pull-right btn btn-block btn-danger\">";
            // line 183
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_delete"), "html", null, true);
            echo "
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
            // line 191
            echo "


                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "
                                </tbody>
                            </table>
                            <div class=\"navigation\">
                                ";
        // line 201
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["stations"] ?? $this->getContext($context, "stations")));
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

    public function getTemplateName()
    {
        return "@Backend/gestionnaire/station/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 201,  375 => 197,  364 => 191,  354 => 183,  347 => 179,  342 => 177,  335 => 175,  322 => 165,  311 => 159,  306 => 156,  296 => 152,  287 => 149,  285 => 148,  278 => 144,  274 => 143,  268 => 139,  264 => 137,  260 => 135,  258 => 134,  254 => 132,  248 => 129,  242 => 128,  240 => 127,  236 => 125,  230 => 123,  228 => 122,  222 => 119,  215 => 115,  211 => 114,  203 => 108,  199 => 107,  186 => 97,  182 => 96,  178 => 95,  174 => 94,  138 => 61,  133 => 59,  122 => 51,  116 => 50,  109 => 46,  99 => 39,  78 => 21,  73 => 19,  65 => 14,  55 => 7,  51 => 5,  45 => 4,  29 => 1,);
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
            <h1 class=\"page-title\">{{ \"Gestion Des Stations\"|trans }}</h1>

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-6 \">
                        <div class=\"media-body text-center\">
                            <h3 class=\"mt-0 mb-5\"
                                style=\"color: #f02138;margin-bottom: -5px!important;\"> {{ nbstations|length }}</h3>
                            <small style=\"color: #505050;\">Stations </small>
                        </div>
                    </div>
                    <div class=\"col-lg-6 \">
                        <a href=\"{{ path('station_new') }}\" style=\"margin-top: 3px;\"
                           class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i> {{ \"Ajouter\"|trans }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"page-content\" style=\"padding-top: 0 !important;padding-bottom: 0 !important;\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\" style=\"padding: 0 !important;\">
                    <div class=\"row row-lg\">


                        <div class=\"col-lg-12\">
                            <!-- Example Bordered Table -->
                            <table class=\"table table-bordered\" style=\"border: none;\">
                                <thead>
                                <tr style=\"border-bottom: 1px solid #f3f3f3;\">
                                    <th style=\"border: none;padding-left: 20px\">{{ \"Filtre\"|trans }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;padding: 10px 20px;\">
                                        <form class=\"row\" style=\"align-items: center;max-width: 1520px;\"
                                              action=\"{{ path('station_index') }}\" method=\"get\">
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\">
                                                <label class=\"control-label\">Station</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\"
                                                       value=\"{% if search is defined %}{{ search }}{% endif %}\"
                                                       placeholder={{ \"station\"|trans }}>

                                            </div>
                                            <div class=\"col-lg-8  col-md-8 col-xs-8 text-right\">
                                                <button style=\"margin-right: 10px;\" type=\"submit\"
                                                        class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>

                                                <a href=\"{{ path('ExportStation') }}\"
                                                   class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                                                    <i class=\"icon md-download\" aria-hidden=\"true\"></i> {{ \"exporter\"|trans }}</a>
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

        <div class=\"page-content\" style=\"padding-top: 0px \">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\"
                     style=\"padding-left: 0px !important;padding-right: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;\">
                    <div class=\"row row-lg\">


                        <div class=\"col-lg-12\">
                            <!-- Example Bordered Table -->

                            <table class=\"table table-striped\">
                                <thead>
                                <tr class=\"\">
                                    <th style=\"padding-left: 20px;width: 30%;\">Station</th>
                                    <th style=\"width: 15%\">{{ \"tel\"|trans }}</th>
                                    <th style=\"width: 15%\">{{ \"Zone\"|trans }}</th>
                                    <th style=\"width: 15%\" hidden>{{ \"Fichier\"|trans }}</th>
                                    <th style=\"width: 10%;text-align: center;\">{{ \"Est Active\"|trans }}</th>

                                    <th class=\"text-center\" style=\"padding-right: 20px;width: 15%\" class=\"text-nowrap\">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>


                                {% for s in stations %}



                                    <tr class=\"\">
                                        <td style=\"padding-left: 20px;vertical-align: middle;\">
                                            <div class=\"media-body\">
                                                <h5 class=\"mt-0 mb-5\">{{ s.nom }} </h5>
                                                <small>{{ s.adresse }} </small>
                                            </div>
                                        </td>
                                        <td style=\"    vertical-align: middle;\">
                                            {{ s.tel }}
                                        </td>
                                        <td style=\"vertical-align: middle;\">
                                            {% if s.zone %}
                                                {{ s.zone.nom }}
                                            {% endif %}
                                        </td>
                                        <td style=\"vertical-align: middle;\" hidden>
                                            {% if s.file_vente %}
                                                <a href=\"{{ asset('uploads/condition_vente/') }}{{ s.file_vente }}\" target=\"_blank\">
                                                    {{\"Télecharger\"|trans}}
                                                </a>
                                            {% endif %}
                                        </td>
                                        <td style=\"text-align: center;\" >
                                            {% if s.isActive == false %}
                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>
                                            {% else %}
                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>
                                            {% endif %}
                                        </td>
                                        <td class=\"text-right\"
                                            style=\"padding-right: 20px;min-width: 130px; vertical-align: middle;\">

                                            <a href=\"{{ path('station_edit', {'id': s.id,'page':page}) }}\"
                                               class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \" title=\"{{ \"edit\"|trans }}\"
                                               style=\"color: #b1b1b1;border: 1px solid;\"></a>


                                            {% if s.isActive == false %}
                                                <a class=\"btn md-lock-open\" href=\"{{ path('station_descative',{'id':s.id,'page':page}) }}\" title=\"{{ \"activer\"|trans }}\"
                                                   style=\"color: #46bf8c!important;background-color: #ffffff !important;border: 1px solid;\"></a>
                                            {% else %}
                                                <a class=\"btn md-lock-open\" href=\"{{ path('station_descative',{'id':s.id,'page':page}) }}\"  title=\"{{ \"deactivate\"|trans }}\"
                                                   style=\"color: #b1b1b1!important;background-color: #ffffff !important;border: 1px solid;\"></a>

                                            {% endif %}



                                            <a data-target=\"#station_disable{{ s.id }}\" data-toggle=\"modal\" title=\"{{ \"delete\"|trans }}\"
                                               class=\"btn btn-pure btn-danger  md-delete waves-effect waves-classic\"
                                               style=\"color: #f02038;border: 1px solid;\"
                                            ></a>


                                            <div class=\"modal fade\" id=\"station_disable{{ s.id }}\" aria-hidden=\"true\"
                                                 aria-labelledby=\"exampleModalTabs\"
                                                 role=\"dialog\" tabindex=\"-1\">
                                                <div class=\"modal-dialog modal-simple\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                    aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">×</span>
                                                            </button>
                                                            <h4 class=\"modal-title\" id=\"station_disable{{ s.id }}\">{{ 'conf_delete'|trans }}</h4>
                                                        </div>
                                                        <form action=\"{{ path('station_disable', { 'id': s.id,'page':page }) }}\" method=\"get\">
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
                                            {#modallllll delete#}



                                        </td>
                                    </tr>
                                {% endfor %}

                                </tbody>
                            </table>
                            <div class=\"navigation\">
                                {{ knp_pagination_render(stations) }}
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
", "@Backend/gestionnaire/station/index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gestionnaire\\station\\index.html.twig");
    }
}
