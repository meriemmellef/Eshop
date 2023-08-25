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

/* @Backend/admin/pays/index.html.twig */
class __TwigTemplate_91fea142eb9d66695fd8e1c1161c208d9a0876c17fcdba5dacc87144c4dab379 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/admin/pays/index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/admin/pays/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/bootstrap-datepicker/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_page($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 9
        echo "    <div class=\"page\">
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">


                        <div class=\"col-lg-12\">
                            <!-- Example Bordered Table -->
                            <div class=\"example-wrap\">
                                <div class=\"row row-lg\">

                                    <div class=\"col-lg-6\">
                                        <h4 class=\"example-title\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Filiales"), "html", null, true);
        echo " </h4>
                                    </div>
                                    <div class=\"col-lg-6\" >
                                        <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pays_new");
        echo "\" class=\"float-right btn btn-icon social-evernote waves-effect waves-classic\"><i class=\"icon md-plus\" aria-hidden=\"true\"></i>
                                            ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter"), "html", null, true);
        echo "</a>
                                    </div>

                                </div>
                                <br>  <br>
                                <div class=\"\" >
                                    <form class=\"row \" style=\"align-items: center;max-width: 1520px;\" action=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pays_index");
        echo "\" method=\"get\">

                                        <div class=\"col-lg-6 col-md-6 col-xs-6\">
                                            <select class=\"form-control\" name=\"code\" >
                                                <option value=\"\" disabled selected hidden>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir un pays"), "html", null, true);
        echo "</option>
                                                ";
        // line 38
        if ((($context["code"] ?? $this->getContext($context, "code")) == "tous")) {
            // line 39
            echo "                                                    <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                        ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tous les filiale"), "html", null, true);
            echo "
                                                    </option>
                                                ";
        } else {
            // line 43
            echo "                                                    <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                        ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tous les filiale"), "html", null, true);
            echo "
                                                    </option>
                                                ";
        }
        // line 47
        echo "
                                                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listpays"] ?? $this->getContext($context, "listpays")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 49
            echo "                                                    ";
            if ((isset($context["code"]) || array_key_exists("code", $context))) {
                // line 50
                echo "                                                        ";
                if ((($context["code"] ?? $this->getContext($context, "code")) == $this->getAttribute($context["p"], "id", []))) {
                    // line 51
                    echo "                                                            <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\" selected>
                                                                ";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", []), "html", null, true);
                    echo "
                                                            </option>
                                                        ";
                } else {
                    // line 55
                    echo "                                                            <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\">
                                                                ";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", []), "html", null, true);
                    echo "
                                                            </option>
                                                        ";
                }
                // line 59
                echo "                                                    ";
            } else {
                // line 60
                echo "                                                        <option class=\"dropdown-item\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", []), "html", null, true);
                echo "\" role=\"menuitem\">
                                                            ";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", []), "html", null, true);
                echo "
                                                        </option>
                                                    ";
            }
            // line 64
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                            </select>
                                        </div>
                                        <div class=\"col-lg-6  col-md-6 col-xs-6\">
                                            <button type=\"submit\" class=\"float-right btn btn-icon social-evernote waves-effect waves-classic\"><i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>                                    </div>

                                    </form>
                                    <hr>
                                </div>

                                <div class=\"example table-responsive\">
                                    <table class=\"table table-striped\">
                                        <thead>
                                        <tr class=\"text-center\">
                                            <th class=\"text-left\" style=\"width: 20%;padding-left: 20px \" >";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pays"), "html", null, true);
        echo "</th>
                                            <th class=\"text-center\" style=\"width: 5%\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Langue"), "html", null, true);
        echo "</th>
                                            <th  class=\"text-center\" style=\"width: 20%\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Site title"), "html", null, true);
        echo "</th>
                                            <th  class=\"text-center\" style=\"width: 15%\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Devise"), "html", null, true);
        echo "</th>
                                            ";
        // line 84
        echo "                                            <th  class=\"text-center\" style=\"width: 20%\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Timezone"), "html", null, true);
        echo "</th>
                                            <th style=\"width: 20%\" class=\"text-nowrap text-center\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action"), "html", null, true);
        echo "</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pays"] ?? $this->getContext($context, "pays")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 92
            echo "                                            <tr style=\"padding-left: 8px\">
                                                <td class=\"text-left\"   style=\"    vertical-align: middle;\">
                                                    <span class=\"flag-icon flag-icon-";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "code", []), "html", null, true);
            echo "\" style=\"margin-right: 8px;\"></span>
                                                    ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", []), "html", null, true);
            echo "
                                                </td>
                                                <td class=\"text-center\" style=\"  vertical-align: middle;\">
                                                    ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "front_language", []), "html", null, true);
            echo "
                                                </td>
                                                <td class=\"text-center\" style=\"    vertical-align: middle;\">
                                                    ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "web_site_title", []), "html", null, true);
            echo "
                                                </td>
                                                <td class=\"text-center\" style=\"    vertical-align: middle;\">
                                                    ";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "devise", []), "html", null, true);
            echo "
                                                </td>
                                                ";
            // line 111
            echo "
                                                <td class=\"text-center\" style=\"    vertical-align: middle;\">
                                                    ";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "timezone", []), "html", null, true);
            echo "
                                                </td>

                                                <td class=\"text-center\" style=\"    vertical-align: middle;\">
                                                    <a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pays_edit", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
            echo "\"
                                                       style=\"color: #b1b1b1;border: 1px solid;\"></a>

                                                    ";
            // line 120
            if (($this->getAttribute($context["p"], "isActive", []) == false)) {
                // line 121
                echo "                                                        <a class=\"btn md-lock-open\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pays_enable", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
                echo "\"  title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activer"), "html", null, true);
                echo "\"
                                                           style=\"color: #46bf8c!important;background-color: #ffffff !important;border: 1px solid;\"></a>
                                                    ";
            } else {
                // line 124
                echo "                                                        <a class=\"btn md-lock-open\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pays_enable", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("deactivate"), "html", null, true);
                echo "\"
                                                           style=\"color: #b1b1b1!important;background-color: #ffffff !important;border: 1px solid;\"></a>

                                                    ";
            }
            // line 128
            echo "
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "
                                        </tbody>
                                    </table>
                                </div>
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

    // line 147
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 148
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/Plugin/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/admin/pays/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 151,  357 => 150,  351 => 148,  345 => 147,  324 => 132,  315 => 128,  305 => 124,  296 => 121,  294 => 120,  286 => 117,  279 => 113,  275 => 111,  270 => 104,  264 => 101,  258 => 98,  252 => 95,  248 => 94,  244 => 92,  240 => 91,  231 => 85,  226 => 84,  222 => 81,  218 => 80,  214 => 79,  210 => 78,  195 => 65,  189 => 64,  183 => 61,  178 => 60,  175 => 59,  169 => 56,  164 => 55,  158 => 52,  153 => 51,  150 => 50,  147 => 49,  143 => 48,  140 => 47,  134 => 44,  131 => 43,  125 => 40,  122 => 39,  120 => 38,  116 => 37,  109 => 33,  100 => 27,  96 => 26,  90 => 23,  74 => 9,  68 => 8,  59 => 6,  53 => 4,  47 => 3,  31 => 1,);
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

{% block stylesheets %}
    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('remark/global/vendor/bootstrap-datepicker/bootstrap-datepicker.css') }}\">
{%  endblock  stylesheets %}
{% block page %}
    <div class=\"page\">
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">


                        <div class=\"col-lg-12\">
                            <!-- Example Bordered Table -->
                            <div class=\"example-wrap\">
                                <div class=\"row row-lg\">

                                    <div class=\"col-lg-6\">
                                        <h4 class=\"example-title\">{{ \"Gestion Des Filiales\"|trans }} </h4>
                                    </div>
                                    <div class=\"col-lg-6\" >
                                        <a href=\"{{ path('pays_new') }}\" class=\"float-right btn btn-icon social-evernote waves-effect waves-classic\"><i class=\"icon md-plus\" aria-hidden=\"true\"></i>
                                            {{ \"Ajouter\"|trans }}</a>
                                    </div>

                                </div>
                                <br>  <br>
                                <div class=\"\" >
                                    <form class=\"row \" style=\"align-items: center;max-width: 1520px;\" action=\"{{ path('pays_index') }}\" method=\"get\">

                                        <div class=\"col-lg-6 col-md-6 col-xs-6\">
                                            <select class=\"form-control\" name=\"code\" >
                                                <option value=\"\" disabled selected hidden>{{ 'choisir un pays'|trans }}</option>
                                                {% if code == 'tous' %}
                                                    <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                        {{ \"Tous les filiale\"|trans }}
                                                    </option>
                                                {% else %}
                                                    <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                        {{ \"Tous les filiale\"|trans }}
                                                    </option>
                                                {% endif %}

                                                {% for p in listpays %}
                                                    {% if code is defined   %}
                                                        {% if code == p.id %}
                                                            <option class=\"dropdown-item\" value=\"{{ p.id }}\" role=\"menuitem\" selected>
                                                                {{ p.nom }}
                                                            </option>
                                                        {% else %}
                                                            <option class=\"dropdown-item\" value=\"{{ p.id }}\" role=\"menuitem\">
                                                                {{ p.nom }}
                                                            </option>
                                                        {% endif %}
                                                    {% else %}
                                                        <option class=\"dropdown-item\" value=\"{{ p.id }}\" role=\"menuitem\">
                                                            {{ p.nom }}
                                                        </option>
                                                    {% endif %}
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"col-lg-6  col-md-6 col-xs-6\">
                                            <button type=\"submit\" class=\"float-right btn btn-icon social-evernote waves-effect waves-classic\"><i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>                                    </div>

                                    </form>
                                    <hr>
                                </div>

                                <div class=\"example table-responsive\">
                                    <table class=\"table table-striped\">
                                        <thead>
                                        <tr class=\"text-center\">
                                            <th class=\"text-left\" style=\"width: 20%;padding-left: 20px \" >{{ \"Pays\"|trans }}</th>
                                            <th class=\"text-center\" style=\"width: 5%\">{{ \"Langue\"|trans }}</th>
                                            <th  class=\"text-center\" style=\"width: 20%\">{{ \"Site title\"|trans }}</th>
                                            <th  class=\"text-center\" style=\"width: 15%\">{{ \"Devise\"|trans }}</th>
                                            {#                                             <th style=\"width: 20%\">{{ \"Devise Format\"|trans }}</th>
#}
                                            <th  class=\"text-center\" style=\"width: 20%\">{{ \"Timezone\"|trans }}</th>
                                            <th style=\"width: 20%\" class=\"text-nowrap text-center\">{{ \"Action\"|trans }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        {% for p in pays %}
                                            <tr style=\"padding-left: 8px\">
                                                <td class=\"text-left\"   style=\"    vertical-align: middle;\">
                                                    <span class=\"flag-icon flag-icon-{{p.code}}\" style=\"margin-right: 8px;\"></span>
                                                    {{ p.nom }}
                                                </td>
                                                <td class=\"text-center\" style=\"  vertical-align: middle;\">
                                                    {{ p.front_language }}
                                                </td>
                                                <td class=\"text-center\" style=\"    vertical-align: middle;\">
                                                    {{ p.web_site_title }}
                                                </td>
                                                <td class=\"text-center\" style=\"    vertical-align: middle;\">
                                                    {{ p.devise }}
                                                </td>
                                                {#
                                                      <td style=\"vertical-align: middle;\">
                                               1500.200 -> {{ formated_price(15002.10,p)}}
                                            </td>
                                                #}

                                                <td class=\"text-center\" style=\"    vertical-align: middle;\">
                                                    {{ p.timezone }}
                                                </td>

                                                <td class=\"text-center\" style=\"    vertical-align: middle;\">
                                                    <a href=\"{{ path('pays_edit', {'id': p.id}) }}\" class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \" title=\"{{ \"edit\"|trans }}\"
                                                       style=\"color: #b1b1b1;border: 1px solid;\"></a>

                                                    {% if p.isActive == false %}
                                                        <a class=\"btn md-lock-open\" href=\"{{ path('pays_enable',{'id':p.id}) }}\"  title=\"{{ \"activer\"|trans }}\"
                                                           style=\"color: #46bf8c!important;background-color: #ffffff !important;border: 1px solid;\"></a>
                                                    {% else %}
                                                        <a class=\"btn md-lock-open\" href=\"{{ path('pays_enable',{'id':p.id}) }}\" title=\"{{ \"deactivate\"|trans }}\"
                                                           style=\"color: #b1b1b1!important;background-color: #ffffff !important;border: 1px solid;\"></a>

                                                    {% endif %}

                                                </td>
                                            </tr>
                                        {% endfor %}

                                        </tbody>
                                    </table>
                                </div>
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

    <script src=\"{{ asset('remark/global/vendor/bootstrap-datepicker/bootstrap-datepicker.js') }}\"></script>
    <script src=\"{{ asset('remark/global/js/Plugin/bootstrap-datepicker.js') }}\"></script>


{%  endblock  javascripts %}
", "@Backend/admin/pays/index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\admin\\pays\\index.html.twig");
    }
}
