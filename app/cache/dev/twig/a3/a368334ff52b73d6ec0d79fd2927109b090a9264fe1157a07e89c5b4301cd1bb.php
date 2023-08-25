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

/* @Backend/gestionnaire/client/index.html.twig */
class __TwigTemplate_225ed48f84aa91b39c09427616ddad5cdbb4c09521d5352ff6aaec7b7785c4e5 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gestionnaire/client/index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/gestionnaire/client/index.html.twig", 1);
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
                            <h4 class=\"mt-0 mb-5\"   style=\"color: #f02138;margin-bottom: -5px!important;\"> ";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["nbclients"] ?? $this->getContext($context, "nbclients"))), "html", null, true);
        echo "</h4>
                            <small style=\"color: #505050;\"> ";
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
                                <tr style=\"border-bottom: 1px solid #f3f3f3;\">
                                    <th style=\"border: none;padding-left: 20px\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filtre"), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;padding: 10px 20px;\">
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
        echo "\" method=\"get\">
                                            <div class=\"col-lg-4  col-md-4 col-xs-6\">
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
                                            <div  class=\"col-lg-4  col-md-4 col-xs-6\">
                                                <div style=\"width: 80%\">
                                                    <label class=\"control-label\">Station</label>
                                                    <select class=\"form-control\" name=\"station\" placeholder=";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une station"), "html", null, true);
        echo ">
                                                        <option value=\"\" disabled selected hidden>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir une station"), "html", null, true);
        echo "</option>
                                                        ";
        // line 48
        if ((($context["station"] ?? $this->getContext($context, "station")) == "")) {
            // line 49
            echo "                                                            <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                                ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les stations"), "html", null, true);
            echo "
                                                            </option>
                                                        ";
        } else {
            // line 53
            echo "                                                            <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                                ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toutes les stations"), "html", null, true);
            echo "
                                                            </option>
                                                        ";
        }
        // line 57
        echo "
                                                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stations"] ?? $this->getContext($context, "stations")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 59
            echo "                                                            ";
            if ((isset($context["station"]) || array_key_exists("station", $context))) {
                // line 60
                echo "                                                                ";
                if ((($context["station"] ?? $this->getContext($context, "station")) == $this->getAttribute($context["s"], "id", []))) {
                    // line 61
                    echo "                                                                    <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\" selected>
                                                                        ";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nom", []), "html", null, true);
                    echo "
                                                                    </option>
                                                                ";
                } else {
                    // line 65
                    echo "                                                                    <option class=\"dropdown-item\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                    echo "\" role=\"menuitem\">
                                                                        ";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nom", []), "html", null, true);
                    echo "
                                                                    </option>
                                                                ";
                }
                // line 69
                echo "                                                            ";
            } else {
                // line 70
                echo "                                                                <option class=\"dropdown-item\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                echo "\" role=\"menuitem\">
                                                                    ";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nom", []), "html", null, true);
                echo "
                                                                </option>
                                                            ";
            }
            // line 74
            echo "                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                                                    </select>

                                                </div>
                                            </div>
                                            <div  class=\"col-lg-4  col-md-4 col-xs-12 text-right\">
                                                <button style=\"margin-right: 10px;\" type=\"submit\" class=\"btn btn-icon social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>

                                                <a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExportClient");
        echo "\"  style=\"margin-right: 10px;\" class=\"float-right btn  btn-icon  btn-dark waves-effect waves-classic waves-effect waves-classic\">
                                                    <i class=\"icon md-download\" aria-hidden=\"true\"></i> ";
        // line 84
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
                <div class=\"panel-body container-fluid\"  style=\"padding-left: 0px !important;padding-right: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;\">
                    <div class=\"row row-lg\">


                        <div class=\"col-lg-12\">
                            <!-- Example Bordered Table -->

                            <table class=\"table table-striped\">
                                <thead>
                                <tr class=\"\">
                                    <th style=\"padding-left: 20px;width: 25%\">";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 25%\">";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom & Prénom"), "html", null, true);
        echo "</th>
                                    <th style=\"width: 25%\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléphone"), "html", null, true);
        echo "</th>
                                    <th class=\"text-center\" style=\"padding-right: 20px;width: 25%\">";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accepte les publications"), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tbody>

                                ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 121
            echo "                                    <tr >
                                        <td style=\"padding-left: 20px; \">
                                            ";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", []), "html", null, true);
            echo "
                                        </td>
                                        <td >
                                            ";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "firstName", []), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "lastName", []), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "tel", []), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"text-center\">
                                            ";
            // line 132
            if (($this->getAttribute($context["client"], "acceptPub", []) == true)) {
                // line 133
                echo "                                                <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>

                                            ";
            } else {
                // line 136
                echo "                                                <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>

                                            ";
            }
            // line 139
            echo "                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                                </tbody>
                            </table>
                            <div class=\"navigation\">
                                ";
        // line 145
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
        return "@Backend/gestionnaire/client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 145,  316 => 142,  308 => 139,  303 => 136,  298 => 133,  296 => 132,  290 => 129,  282 => 126,  276 => 123,  272 => 121,  268 => 120,  260 => 115,  256 => 114,  252 => 113,  248 => 112,  217 => 84,  213 => 83,  203 => 75,  197 => 74,  191 => 71,  186 => 70,  183 => 69,  177 => 66,  172 => 65,  166 => 62,  161 => 61,  158 => 60,  155 => 59,  151 => 58,  148 => 57,  142 => 54,  139 => 53,  133 => 50,  130 => 49,  128 => 48,  124 => 47,  120 => 46,  108 => 41,  104 => 40,  99 => 38,  90 => 32,  69 => 14,  65 => 13,  56 => 7,  51 => 4,  45 => 3,  29 => 1,);
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
                            <h4 class=\"mt-0 mb-5\"   style=\"color: #f02138;margin-bottom: -5px!important;\"> {{ nbclients|length }}</h4>
                            <small style=\"color: #505050;\"> {{ \"Clients\"|trans }} </small>
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
                                <tr style=\"border-bottom: 1px solid #f3f3f3;\">
                                    <th style=\"border: none;padding-left: 20px\">{{ \"Filtre\"|trans }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style=\"border: none;padding: 10px 20px;\">
                                        <form  class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"{{ path('client_index') }}\" method=\"get\">
                                            <div class=\"col-lg-4  col-md-4 col-xs-6\">
                                                <label class=\"control-label\">{{\"Emaill\"|trans}}</label>
                                                <input type=\"text\" class=\"form-control\" name=\"email\" value=\"{% if email is defined %}{{email}}{% endif %}\" placeholder={{ \"Emaill\"|trans }}>
                                            </div>
                                            <div  class=\"col-lg-4  col-md-4 col-xs-6\">
                                                <div style=\"width: 80%\">
                                                    <label class=\"control-label\">Station</label>
                                                    <select class=\"form-control\" name=\"station\" placeholder={{ \"choisir une station\"|trans }}>
                                                        <option value=\"\" disabled selected hidden>{{ \"choisir une station\"|trans }}</option>
                                                        {% if station == '' %}
                                                            <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" selected>
                                                                {{ \"Toutes les stations\"|trans }}
                                                            </option>
                                                        {% else %}
                                                            <option class=\"dropdown-item\" value=\"\" role=\"menuitem\" >
                                                                {{ \"Toutes les stations\"|trans }}
                                                            </option>
                                                        {% endif %}

                                                        {% for s in stations %}
                                                            {% if station is defined   %}
                                                                {% if station == s.id %}
                                                                    <option class=\"dropdown-item\" value=\"{{ s.id }}\" role=\"menuitem\" selected>
                                                                        {{ s.nom }}
                                                                    </option>
                                                                {% else %}
                                                                    <option class=\"dropdown-item\" value=\"{{ s.id }}\" role=\"menuitem\">
                                                                        {{ s.nom }}
                                                                    </option>
                                                                {% endif %}
                                                            {% else %}
                                                                <option class=\"dropdown-item\" value=\"{{ s.id }}\" role=\"menuitem\">
                                                                    {{ s.nom }}
                                                                </option>
                                                            {% endif %}
                                                        {% endfor %}
                                                    </select>

                                                </div>
                                            </div>
                                            <div  class=\"col-lg-4  col-md-4 col-xs-12 text-right\">
                                                <button style=\"margin-right: 10px;\" type=\"submit\" class=\"btn btn-icon social-evernote waves-effect waves-classic\">
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
                <div class=\"panel-body container-fluid\"  style=\"padding-left: 0px !important;padding-right: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;\">
                    <div class=\"row row-lg\">


                        <div class=\"col-lg-12\">
                            <!-- Example Bordered Table -->

                            <table class=\"table table-striped\">
                                <thead>
                                <tr class=\"\">
                                    <th style=\"padding-left: 20px;width: 25%\">{{ \"Email\"|trans }}</th>
                                    <th style=\"width: 25%\">{{\"Nom & Prénom\"|trans}}</th>
                                    <th style=\"width: 25%\">{{\"Téléphone\"|trans}}</th>
                                    <th class=\"text-center\" style=\"padding-right: 20px;width: 25%\">{{ \"Accepte les publications\"|trans }}</th>
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
                                        <td class=\"text-center\">
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
", "@Backend/gestionnaire/client/index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gestionnaire\\client\\index.html.twig");
    }
}
