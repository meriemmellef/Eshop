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

/* BackendBundle:gestionnaire/gerant:index.html.twig */
class __TwigTemplate_6b09d500cc7e5778f4a3f66a0c16b6fb0b2c47141ce79ed024cc47560a4eb259 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:gestionnaire/gerant:index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "BackendBundle:gestionnaire/gerant:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 4
        echo "    <div class=\"page\">
        <div class=\"page-header\">
            <h1 class=\"page-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Gérants"), "html", null, true);
        echo "</h1>
            ";
        // line 7
        if (($context["message"] ?? $this->getContext($context, "message"))) {
            // line 8
            echo "                <div class=\"alert alert-success alert-dismissible\" role=\"alert\" style=\"width: 50%\">
                    ";
            // line 9
            echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
            echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            ";
        }
        // line 15
        echo "
            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-6 \">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\"  style=\"color: #f02138;margin-bottom: -5px!important;\"> ";
        // line 20
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["nbgerants"] ?? $this->getContext($context, "nbgerants"))), "html", null, true);
        echo "</h4>
                            <small style=\"color: #505050;\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gérants"), "html", null, true);
        echo " </small>
                        </div>
                    </div>
                    <div class=\"col-lg-6 \">
                        <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gerant_new");
        echo "\" style=\"margin-top: 3px;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter"), "html", null, true);
        echo "
                        </a>
                    </div>
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
                                <tr style=\"border-bottom: 1px solid #f3f3f3;\">
                                    <th style=\"border: none;padding-left: 20px\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filtre"), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;padding: 0px 20px;\">
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gerant_index");
        echo "\" method=\"get\">
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\">
                                                <label class=\"control-label\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
        echo "</label>
                                                <input type=\"text\" class=\"form-control\" name=\"email\" value=\"";
        // line 53
        if ((isset($context["email"]) || array_key_exists("email", $context))) {
            echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
        }
        echo "\" placeholder=\"email\">

                                            </div>
                                            <div  class=\"col-lg-8  col-md-8 col-xs-8 text-right\">
                                                <button style=\"margin-right: 10px;\"  type=\"submit\" class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>

                                                <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExportGerant");
        echo "\"  class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
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

        <div class=\"page-content\" style=\"padding-top: 0px \" >
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\"  style=\"padding-left: 0px !important;padding-right: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;\">
                    <div class=\"row row-lg\">


                        <div class=\"col-lg-12\">
                            <!-- Example Bordered Table -->

                            <table class=\"table table-striped\">
                                <thead>
                                <tr class=\"\">
                                    <th style=\"padding-left: 20px;width: 30%\">";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom&Prénom/Email"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 10%\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléphone"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 30%\">Station</th>
                                    <th style=\"width: 10%\" hidden>";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut"), "html", null, true);
        echo "</th>
                                    <th class=\"text-center\" style=\"padding-right: 20px;width: 20%\">Action</th>
                                </tr>
                                </thead>
                                <tbody>


                                ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gerants"] ?? $this->getContext($context, "gerants")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 103
            echo "                                <tr>
                                    <td style=\"padding-left: 20px\">
                                        <h5 class=\"mt-0 mb-5\"> ";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "firstName", []), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "lastName", []), "html", null, true);
            echo "</h5>
                                        <small> ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "email", []), "html", null, true);
            echo " </small>
                                    </td>
                                    <td >
                                        ";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "tel", []), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                            <h5 class=\"mt-0 mb-5\">";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "station", []), "nom", []), "html", null, true);
            echo " </h5>
                                            <small>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "station", []), "adresse", []), "html", null, true);
            echo " </small>

                                    </td>
                                    <td hidden>
                                        ";
            // line 117
            if (($this->getAttribute($context["u"], "enabled", []) == false)) {
                // line 118
                echo "                                            <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>
                                        ";
            } else {
                // line 120
                echo "                                            <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>
                                        ";
            }
            // line 122
            echo "                                    </td>
                                    <td class=\"text-right\" style=\"padding-right: 20px;min-width: 110px;\">
                                        <a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gerant_edit", ["id" => $this->getAttribute($context["u"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\"
                                           class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \"
                                           style=\"color: #b1b1b1;border: 1px solid;\"></a>
                                        <a data-target=\"#gerant_disable";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", []), "html", null, true);
            echo "\" data-toggle=\"modal\"
                                           class=\"btn btn-pure btn-danger  md-delete waves-effect waves-classic\"
                                           style=\"color: #f02038;border: 1px solid;\"></a>


                                        <div class=\"modal fade\" id=\"gerant_disable";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", []), "html", null, true);
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
                                                        <h4 class=\"modal-title\" id=\"gerant_disable";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("conf_delete"), "html", null, true);
            echo "</h4>
                                                    </div>
                                                    <form action=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gerant_disable", ["id" => $this->getAttribute($context["u"], "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
            echo "\" method=\"get\">
                                                        <div class=\"modal-body\">
                                                            <h4 style=\"text-align:center\" >";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("msg_conf_delete"), "html", null, true);
            echo "</h4>
                                                        </div>
                                                        <div class=\"panel-footer\">
                                                            <button style=\"margin-left: 80%;width: 100px\" type=\"submit\"
                                                                    class=\"pull-right btn btn-block btn-danger\">";
            // line 150
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "
                                </tbody>
                            </table>
                            <div class=\"navigation\">
                                ";
        // line 166
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["gerants"] ?? $this->getContext($context, "gerants")));
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
        return "BackendBundle:gestionnaire/gerant:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 166,  318 => 162,  300 => 150,  293 => 146,  288 => 144,  281 => 142,  268 => 132,  260 => 127,  254 => 124,  250 => 122,  246 => 120,  242 => 118,  240 => 117,  233 => 113,  229 => 112,  223 => 109,  217 => 106,  211 => 105,  207 => 103,  203 => 102,  193 => 95,  188 => 93,  184 => 92,  150 => 61,  146 => 60,  134 => 53,  130 => 52,  125 => 50,  116 => 44,  95 => 26,  91 => 25,  84 => 21,  80 => 20,  73 => 15,  64 => 9,  61 => 8,  59 => 7,  55 => 6,  51 => 4,  45 => 3,  29 => 1,);
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
            <h1 class=\"page-title\">{{\"Gestion Des Gérants\"|trans}}</h1>
            {% if message  %}
                <div class=\"alert alert-success alert-dismissible\" role=\"alert\" style=\"width: 50%\">
                    {{ message }}
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            {% endif %}

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-6 \">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\"  style=\"color: #f02138;margin-bottom: -5px!important;\"> {{ nbgerants|length }}</h4>
                            <small style=\"color: #505050;\">{{\"Gérants\"|trans}} </small>
                        </div>
                    </div>
                    <div class=\"col-lg-6 \">
                        <a href=\"{{ path('gerant_new') }}\" style=\"margin-top: 3px;\" class=\"float-right btn btn-sm btn-icon social-evernote waves-effect waves-classic\">
                            <i class=\"icon md-plus\" aria-hidden=\"true\"></i> {{ \"Ajouter\"|trans }}
                        </a>
                    </div>
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
                                <tr style=\"border-bottom: 1px solid #f3f3f3;\">
                                    <th style=\"border: none;padding-left: 20px\">{{ \"Filtre\"|trans }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;padding: 0px 20px;\">
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"{{ path('gerant_index') }}\" method=\"get\">
                                            <div class=\"col-lg-4  col-md-4 col-xs-4\">
                                                <label class=\"control-label\">{{ \"Email\"|trans }}</label>
                                                <input type=\"text\" class=\"form-control\" name=\"email\" value=\"{% if email is defined %}{{email}}{% endif %}\" placeholder=\"email\">

                                            </div>
                                            <div  class=\"col-lg-8  col-md-8 col-xs-8 text-right\">
                                                <button style=\"margin-right: 10px;\"  type=\"submit\" class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>

                                                <a href=\"{{ path('ExportGerant') }}\"  class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
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

        <div class=\"page-content\" style=\"padding-top: 0px \" >
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\"  style=\"padding-left: 0px !important;padding-right: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;\">
                    <div class=\"row row-lg\">


                        <div class=\"col-lg-12\">
                            <!-- Example Bordered Table -->

                            <table class=\"table table-striped\">
                                <thead>
                                <tr class=\"\">
                                    <th style=\"padding-left: 20px;width: 30%\">{{\"Nom&Prénom/Email\"|trans}}</th>
                                    <th style=\"width: 10%\">{{\"Téléphone\"|trans}}</th>
                                    <th style=\"width: 30%\">Station</th>
                                    <th style=\"width: 10%\" hidden>{{ \"Statut\"|trans }}</th>
                                    <th class=\"text-center\" style=\"padding-right: 20px;width: 20%\">Action</th>
                                </tr>
                                </thead>
                                <tbody>


                                {% for u in gerants %}
                                <tr>
                                    <td style=\"padding-left: 20px\">
                                        <h5 class=\"mt-0 mb-5\"> {{ u.firstName }}  {{ u.lastName }}</h5>
                                        <small> {{ u.email }} </small>
                                    </td>
                                    <td >
                                        {{ u.tel }}
                                    </td>
                                    <td>
                                            <h5 class=\"mt-0 mb-5\">{{ u.station.nom }} </h5>
                                            <small>{{ u.station.adresse }} </small>

                                    </td>
                                    <td hidden>
                                        {% if u.enabled == false %}
                                            <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>
                                        {% else %}
                                            <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-right\" style=\"padding-right: 20px;min-width: 110px;\">
                                        <a href=\"{{ path('gerant_edit',{'id':u.id,'page':page}) }}\"
                                           class=\"btn btn-pure btn-default  md-edit waves-effect waves-classic \"
                                           style=\"color: #b1b1b1;border: 1px solid;\"></a>
                                        <a data-target=\"#gerant_disable{{ u.id }}\" data-toggle=\"modal\"
                                           class=\"btn btn-pure btn-danger  md-delete waves-effect waves-classic\"
                                           style=\"color: #f02038;border: 1px solid;\"></a>


                                        <div class=\"modal fade\" id=\"gerant_disable{{ u.id }}\" aria-hidden=\"true\"
                                             aria-labelledby=\"exampleModalTabs\"
                                             role=\"dialog\" tabindex=\"-1\">
                                            <div class=\"modal-dialog modal-simple\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                aria-label=\"Close\">
                                                            <span aria-hidden=\"true\">×</span>
                                                        </button>
                                                        <h4 class=\"modal-title\" id=\"gerant_disable{{ u.id }}\">{{ 'conf_delete'|trans }}</h4>
                                                    </div>
                                                    <form action=\"{{ path('gerant_disable', { 'id': u.id,'page':page }) }}\" method=\"get\">
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
                                {{ knp_pagination_render(gerants) }}
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
", "BackendBundle:gestionnaire/gerant:index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/gestionnaire/gerant/index.html.twig");
    }
}
