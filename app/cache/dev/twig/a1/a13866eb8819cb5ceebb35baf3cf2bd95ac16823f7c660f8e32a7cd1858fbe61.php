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

/* @Backend/gerant/client/index.html.twig */
class __TwigTemplate_2d52580bac559d47e5f85b12e5d3c7cc28fb6858628d47ddba81f86123d0fa4e extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gerant/client/index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/gerant/client/index.html.twig", 1);
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
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Liste Des Clients"), "html", null, true);
        echo "</h1>

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-12 \">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color:#46bf8c;margin-bottom: 0px!important;\"> ";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["clients"] ?? $this->getContext($context, "clients"))), "html", null, true);
        echo "</h4>
                            <small style=\"\"> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Clients"), "html", null, true);
        echo " </small>
                        </div>
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
                                <tr>
                                    <th style=\"border: none;\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filtre"), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;\">
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_gerant_index");
        echo "\" method=\"get\">
                                            <div class=\"col-lg-6  col-md-6 col-xs-6\">
                                                <label class=\"control-label\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Emaill"), "html", null, true);
        echo "</label>
                                                <input type=\"text\" class=\"form-control\" name=\"email\" value=\"";
        // line 41
        if ((isset($context["email"]) || array_key_exists("email", $context))) {
            echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
        }
        echo "\" placeholder=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Emaill"), "html", null, true);
        echo ">
                                            </div>

                                            <div  class=\"col-lg-6  col-md-6 col-xs-6 text-right\">
                                                <button type=\"submit\" class=\"float-right btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>

                                                <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExportClient");
        echo "\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                                                    <i class=\"icon md-download\" aria-hidden=\"true\"></i> ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("exporter"), "html", null, true);
        echo "</a>
                                            </div>
                                        </form>

                                    </td>
                                </tr>
                                </tbody>
                            </table>
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
                                <tr class=\"\">
                                    <th style=\"padding-left: 20px;width: 25%\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 25%\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom & Prénom"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 25%\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléphone"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 20%\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accepte les publications"), "html", null, true);
        echo "</th>

                                </tr>
                                </thead>
                                <tbody>

                                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 87
            echo "

                                    <tr >
                                        <td style=\"padding-left: 20px; \">
                                            ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", []), "html", null, true);
            echo "
                                        </td>
                                        <td >
                                            ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "firstName", []), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "lastName", []), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "tel", []), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 100
            if (($this->getAttribute($context["client"], "acceptPub", []) == true)) {
                // line 101
                echo "                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                            ";
            } else {
                // line 104
                echo "                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                            ";
            }
            // line 107
            echo "                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                                </tbody>
                            </table>
                            <div class=\"navigation\">
                                ";
        // line 113
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["clients"] ?? $this->getContext($context, "clients")));
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
        return "@Backend/gerant/client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 113,  228 => 110,  220 => 107,  215 => 104,  210 => 101,  208 => 100,  202 => 97,  194 => 94,  188 => 91,  182 => 87,  178 => 86,  169 => 80,  165 => 79,  161 => 78,  157 => 77,  126 => 49,  122 => 48,  108 => 41,  104 => 40,  99 => 38,  90 => 32,  69 => 14,  65 => 13,  56 => 7,  51 => 4,  45 => 3,  29 => 1,);
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
            <h1 class=\"page-title\">{{ \"Liste Des Clients\"|trans }}</h1>

            <div class=\"page-header-actions\">
                <div class=\"row\">
                    <div class=\"col-lg-12 \">
                        <div class=\"media-body text-center\">
                            <h4 class=\"mt-0 mb-5\" style=\"color:#46bf8c;margin-bottom: 0px!important;\"> {{ clients|length }}</h4>
                            <small style=\"\"> {{ \"Clients\"|trans }} </small>
                        </div>
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
                                <tr>
                                    <th style=\"border: none;\">{{ \"Filtre\"|trans }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;\">
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"{{ path('client_gerant_index') }}\" method=\"get\">
                                            <div class=\"col-lg-6  col-md-6 col-xs-6\">
                                                <label class=\"control-label\">{{\"Emaill\"|trans}}</label>
                                                <input type=\"text\" class=\"form-control\" name=\"email\" value=\"{% if email is defined %}{{email}}{% endif %}\" placeholder={{ \"Emaill\"|trans }}>
                                            </div>

                                            <div  class=\"col-lg-6  col-md-6 col-xs-6 text-right\">
                                                <button type=\"submit\" class=\"float-right btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>

                                                <a href=\"{{ path('ExportClient') }}\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                                                    <i class=\"icon md-download\" aria-hidden=\"true\"></i> {{ \"exporter\"|trans }}</a>
                                            </div>
                                        </form>

                                    </td>
                                </tr>
                                </tbody>
                            </table>
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
                                <tr class=\"\">
                                    <th style=\"padding-left: 20px;width: 25%\">{{ \"Email\"|trans }}</th>
                                    <th style=\"width: 25%\">{{\"Nom & Prénom\"|trans}}</th>
                                    <th style=\"width: 25%\">{{\"Téléphone\"|trans}}</th>
                                    <th style=\"width: 20%\">{{ \"Accepte les publications\"|trans }}</th>

                                </tr>
                                </thead>
                                <tbody>

                                {% for client in clients %}


                                    <tr >
                                        <td style=\"padding-left: 20px; \">
                                            {{ client.email }}
                                        </td>
                                        <td >
                                            {{ client.firstName }}  {{ client.lastName }}
                                        </td>
                                        <td>
                                            {{ client.tel }}
                                        </td>
                                        <td>
                                            {% if client.acceptPub == true %}
                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                            {% else %}
                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                            <div class=\"navigation\">
                                {{ knp_pagination_render(clients) }}
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
", "@Backend/gerant/client/index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gerant\\client\\index.html.twig");
    }
}
