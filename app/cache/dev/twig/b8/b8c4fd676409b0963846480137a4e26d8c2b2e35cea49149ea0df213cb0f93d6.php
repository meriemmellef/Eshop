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

/* BackendBundle:gestionnaire/zone:index.html.twig */
class __TwigTemplate_c7670020c2323e43f5be45f9dcc4a22b6a11802edf52ff554ef43d9bd2906228 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:gestionnaire/zone:index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "BackendBundle:gestionnaire/zone:index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Zones"), "html", null, true);
        echo "</h1>

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-6 \">
                        <div class=\"media-body text-center\">
                            <h3 class=\"mt-0 mb-5\"
                                style=\"color: #f02138;margin-bottom: -5px!important;\"> ";
        // line 14
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["nbzones"] ?? $this->getContext($context, "nbzones"))), "html", null, true);
        echo "</h3>
                            <small style=\"color: #505050;\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zones"), "html", null, true);
        echo " </small>
                        </div>
                    </div>
                    <div class=\"col-lg-6 \">
                        <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_new");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_index");
        echo "\" method=\"get\">
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\">
                                                <label class=\"control-label\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zone"), "html", null, true);
        echo "</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\"
                                                       value=\"";
        // line 50
        if ((isset($context["search"]) || array_key_exists("search", $context))) {
            echo twig_escape_filter($this->env, ($context["search"] ?? $this->getContext($context, "search")), "html", null, true);
        }
        echo "\"
                                                       placeholder=";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("searcharea"), "html", null, true);
        echo ">

                                            </div>
                                            <div class=\"col-lg-8  col-md-8 col-xs-8 text-right\">
                                                <button style=\"margin-right: 10px;\" type=\"submit\"
                                                        class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>


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
                                    <th style=\"padding-left: 20px;width: 50%;\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zone"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 10%;text-align: center;\" hidden>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Est Active"), "html", null, true);
        echo "</th>

                                    <th class=\"text-center \" style=\"padding-right: 20px;width: 50%\" >
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>


                                ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["zones"] ?? $this->getContext($context, "zones")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 103
            echo "


                                    <tr class=\"\">
                                        <td style=\"padding-left: 20px;vertical-align: middle;\">
                                            <div class=\"media-body\">
                                                <h5 class=\"mt-0 mb-5\">";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nom", []), "html", null, true);
            echo " </h5>
                                            </div>
                                        </td>

                                        <td style=\"text-align: center;\" hidden>
                                            ";
            // line 114
            if (($this->getAttribute($context["s"], "isActive", []) == false)) {
                // line 115
                echo "                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>
                                            ";
            } else {
                // line 117
                echo "                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>
                                            ";
            }
            // line 119
            echo "                                        </td>
                                        <td class=\"text-center\" style=\"padding-right: 20px;min-width: 130px; vertical-align: middle;\">

                                            <a href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_edit", ["id" => $this->getAttribute($context["s"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\"
                                               class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \"
                                               style=\"color: #b1b1b1;border: 1px solid;\"></a>
                                            <a data-target=\"#zone_disable";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
            echo "\" data-toggle=\"modal\"
                                               class=\"btn btn-pure btn-danger  md-delete waves-effect waves-classic\"
                                               style=\"color: #f02038;border: 1px solid;\" ></a>



                                            <div class=\"modal fade\" id=\"zone_disable";
            // line 131
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
                                                            <h4 class=\"modal-title\" id=\"zone_disable";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("conf_delete"), "html", null, true);
            echo "</h4>
                                                        </div>
                                                        <form action=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_disable", ["id" => $this->getAttribute($context["s"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\" method=\"get\">
                                                            <div class=\"modal-body\">
                                                                <h4>";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("msg_conf_delete"), "html", null, true);
            echo "</h4>
                                                            </div>
                                                            <div class=\"panel-footer\">
                                                                <button style=\"margin-left: 80%;width: 100px\" type=\"submit\"
                                                                        class=\"pull-right btn btn-block btn-danger\">";
            // line 149
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "
                                </tbody>
                            </table>
                            <div class=\"navigation\">
                                ";
        // line 164
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["zones"] ?? $this->getContext($context, "zones")));
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
        return "BackendBundle:gestionnaire/zone:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 164,  287 => 160,  270 => 149,  263 => 145,  258 => 143,  251 => 141,  238 => 131,  229 => 125,  223 => 122,  218 => 119,  214 => 117,  210 => 115,  208 => 114,  200 => 109,  192 => 103,  188 => 102,  175 => 92,  171 => 91,  128 => 51,  122 => 50,  117 => 48,  112 => 46,  102 => 39,  81 => 21,  76 => 19,  69 => 15,  65 => 14,  55 => 7,  51 => 5,  45 => 4,  29 => 1,);
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
            <h1 class=\"page-title\">{{ \"Gestion Des Zones\"|trans }}</h1>

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-6 \">
                        <div class=\"media-body text-center\">
                            <h3 class=\"mt-0 mb-5\"
                                style=\"color: #f02138;margin-bottom: -5px!important;\"> {{ nbzones|length }}</h3>
                            <small style=\"color: #505050;\">{{ \"Zones\"|trans}} </small>
                        </div>
                    </div>
                    <div class=\"col-lg-6 \">
                        <a href=\"{{ path('zone_new') }}\" style=\"margin-top: 3px;\"
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
                                              action=\"{{ path('zone_index') }}\" method=\"get\">
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\">
                                                <label class=\"control-label\">{{ \"Zone\"|trans }}</label>
                                                <input type=\"text\" class=\"form-control\" name=\"search\"
                                                       value=\"{% if search is defined %}{{ search }}{% endif %}\"
                                                       placeholder={{ \"searcharea\"|trans }}>

                                            </div>
                                            <div class=\"col-lg-8  col-md-8 col-xs-8 text-right\">
                                                <button style=\"margin-right: 10px;\" type=\"submit\"
                                                        class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>


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
                                    <th style=\"padding-left: 20px;width: 50%;\">{{ \"Zone\"|trans }}</th>
                                    <th style=\"width: 10%;text-align: center;\" hidden>{{ \"Est Active\"|trans }}</th>

                                    <th class=\"text-center \" style=\"padding-right: 20px;width: 50%\" >
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>


                                {% for s in zones %}



                                    <tr class=\"\">
                                        <td style=\"padding-left: 20px;vertical-align: middle;\">
                                            <div class=\"media-body\">
                                                <h5 class=\"mt-0 mb-5\">{{ s.nom }} </h5>
                                            </div>
                                        </td>

                                        <td style=\"text-align: center;\" hidden>
                                            {% if s.isActive == false %}
                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>
                                            {% else %}
                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>
                                            {% endif %}
                                        </td>
                                        <td class=\"text-center\" style=\"padding-right: 20px;min-width: 130px; vertical-align: middle;\">

                                            <a href=\"{{ path('zone_edit', {'id': s.id,'page':page}) }}\"
                                               class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \"
                                               style=\"color: #b1b1b1;border: 1px solid;\"></a>
                                            <a data-target=\"#zone_disable{{ s.id }}\" data-toggle=\"modal\"
                                               class=\"btn btn-pure btn-danger  md-delete waves-effect waves-classic\"
                                               style=\"color: #f02038;border: 1px solid;\" ></a>



                                            <div class=\"modal fade\" id=\"zone_disable{{ s.id }}\" aria-hidden=\"true\"
                                                 aria-labelledby=\"exampleModalTabs\"
                                                 role=\"dialog\" tabindex=\"-1\">
                                                <div class=\"modal-dialog modal-simple\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                    aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">×</span>
                                                            </button>
                                                            <h4 class=\"modal-title\" id=\"zone_disable{{ s.id }}\">{{ 'conf_delete'|trans }}</h4>
                                                        </div>
                                                        <form action=\"{{ path('zone_disable', { 'id': s.id,'page':page }) }}\" method=\"get\">
                                                            <div class=\"modal-body\">
                                                                <h4>{{ 'msg_conf_delete'|trans }}</h4>
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
                                {{ knp_pagination_render(zones) }}
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
", "BackendBundle:gestionnaire/zone:index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/gestionnaire/zone/index.html.twig");
    }
}
