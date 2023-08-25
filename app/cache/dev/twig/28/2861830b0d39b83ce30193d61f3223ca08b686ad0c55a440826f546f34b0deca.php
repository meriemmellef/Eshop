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

/* BackendBundle:admin/user:index.html.twig */
class __TwigTemplate_3eb753dc73eef1d5389c9964fe0780b24c21cbccb6e98e9cdac4f78b232e6b47 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:admin/user:index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "BackendBundle:admin/user:index.html.twig", 1);
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
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestion Des Utilisateurs"), "html", null, true);
        echo " </h4>
                                    </div>
                                    <div class=\"col-lg-6\" >
                                        <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\" class=\"float-right btn btn-icon social-evernote waves-effect waves-classic\"><i class=\"icon md-plus\" aria-hidden=\"true\"></i>
                                            ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter"), "html", null, true);
        echo "</a>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <div class=\"example table-responsive\">
                                    <table class=\"table table-bordered\">
                                        <thead>
                                        <tr>
                                            <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filtre"), "html", null, true);
        echo "</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <form class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\" method=\"get\">
                                                        <div class=\"col-lg-6  col-md-6 col-xs-6\">
                                                            <input type=\"text\" class=\"form-control\" name=\"email\" value=\"";
        // line 40
        if ((isset($context["email"]) || array_key_exists("email", $context))) {
            echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
        }
        echo "\" placeholder=\"email\">

                                                        </div>
                                                        <div class=\"col-lg-6  col-md-5 col-xs-5\">
                                                            <button type=\"submit\" class=\"float-right btn btn-icon social-evernote waves-effect waves-classic\"><i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>                                    </div>
                                                    <br><br>
                                                </form>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"example table-responsive\">
                                    <table class=\"table table-striped\">
                                        <thead>
                                        <tr class=\"text-center\">
                                            <th style=\"width: 33%\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("email"), "html", null, true);
        echo "</th>
                                            <th style=\"width: 20%\" hidden >";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Roles"), "html", null, true);
        echo "</th>
                                            <th class=\"text-left\" style=\"width: 33%\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pays"), "html", null, true);
        echo "</th>
                                            <th style=\"width: 20%\" hidden >";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statut"), "html", null, true);
        echo "</th>
                                            <th class=\"text-nowrap\" style=\"width: 34%\">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 68
            echo "

                                            <tr class=\"text-center\">
                                                <td >
                                                    ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "email", []), "html", null, true);
            echo "
                                                </td>
                                                <td  hidden>
                                                    ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["u"], "roles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 76
                echo "                                                        ";
                if (($context["role"] != "ROLE_USER")) {
                    // line 77
                    echo "                                                           ";
                    if (($context["role"] == "ROLE_GESTIONNAIRE")) {
                        // line 78
                        echo "                                                              <span class=\"badge mb-5 mr-5 badge-warning\"> Gestionnaire</span>
                                                           ";
                    } elseif ((                    // line 79
$context["role"] == "ROLE_SUPER_ADMIN")) {
                        // line 80
                        echo "                                                               <span class=\"badge mb-5 mr-5 badge-info\">Administrateur</span>
                                                           ";
                    } elseif ((                    // line 81
$context["role"] == "ROLE_ACTIVATOR")) {
                        // line 82
                        echo "                                                               <span class=\"badge mb-5 mr-5 badge-danger\">Activateur de photo</span>
                                                            ";
                    }
                    // line 84
                    echo "                                                        ";
                }
                // line 85
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                                                </td>
                                                <td class=\"text-left\">
                                                    ";
            // line 88
            if ($this->getAttribute($context["u"], "pays", [])) {
                // line 89
                echo "                                                    <span class=\"flag-icon flag-icon-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "pays", []), "code", []), "html", null, true);
                echo "\" style=\"margin-right: 8px;\"></span>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "pays", []), "nom", []), "html", null, true);
                echo "
                                                    ";
            }
            // line 91
            echo "                                                </td>
                                                <td hidden >
                                                    ";
            // line 93
            if (($this->getAttribute($context["u"], "enabled", []) == false)) {
                // line 94
                echo "                                                        <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>
                                                    ";
            } else {
                // line 96
                echo "                                                        <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>
                                                    ";
            }
            // line 98
            echo "                                                </td>
                                                <td>
                                                    <a data-target=\"#utilisateurs_disable";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", []), "html", null, true);
            echo "\" data-toggle=\"modal\" class=\"btn btn-pure btn-default  md-delete waves-effect waves-classic\"></a>
                                                    <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", ["id" => $this->getAttribute($context["u"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-pure btn-default icon md-edit waves-effect waves-classic\"></a>






                                                    <div class=\"modal fade\" id=\"utilisateurs_disable";
            // line 108
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
                                                                    <h4 class=\"modal-title\" id=\"utilisateurs_disable";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("conf_delete"), "html", null, true);
            echo "</h4>
                                                                </div>
                                                                <form action=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateurs_disable", ["id" => $this->getAttribute($context["u"], "id", [])]), "html", null, true);
            echo "\" method=\"get\">
                                                                    <div class=\"modal-body\">
                                                                        <h4>";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("msg_conf_delete"), "html", null, true);
            echo "</h4>
                                                                    </div>
                                                                    <div class=\"panel-footer\">
                                                                        <button style=\"margin-left: 80%;width: 100px\" type=\"submit\"
                                                                                class=\"pull-right btn btn-block btn-danger\">";
            // line 126
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
        // line 136
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

    public function getTemplateName()
    {
        return "BackendBundle:admin/user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 136,  275 => 126,  268 => 122,  263 => 120,  256 => 118,  243 => 108,  233 => 101,  229 => 100,  225 => 98,  221 => 96,  217 => 94,  215 => 93,  211 => 91,  203 => 89,  201 => 88,  197 => 86,  191 => 85,  188 => 84,  184 => 82,  182 => 81,  179 => 80,  177 => 79,  174 => 78,  171 => 77,  168 => 76,  164 => 75,  158 => 72,  152 => 68,  148 => 67,  138 => 60,  134 => 59,  130 => 58,  126 => 57,  104 => 40,  99 => 38,  89 => 31,  77 => 22,  73 => 21,  67 => 18,  51 => 4,  45 => 3,  29 => 1,);
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
                                        <h4 class=\"example-title\">{{ \"Gestion Des Utilisateurs\"|trans }} </h4>
                                    </div>
                                    <div class=\"col-lg-6\" >
                                        <a href=\"{{ path('user_new') }}\" class=\"float-right btn btn-icon social-evernote waves-effect waves-classic\"><i class=\"icon md-plus\" aria-hidden=\"true\"></i>
                                            {{ 'Ajouter'|trans }}</a>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <div class=\"example table-responsive\">
                                    <table class=\"table table-bordered\">
                                        <thead>
                                        <tr>
                                            <th>{{ \"Filtre\"|trans }}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <form class=\"row\" style=\"align-items: center;max-width: 1520px;\" action=\"{{ path('user_index') }}\" method=\"get\">
                                                        <div class=\"col-lg-6  col-md-6 col-xs-6\">
                                                            <input type=\"text\" class=\"form-control\" name=\"email\" value=\"{% if email is defined %}{{email}}{% endif %}\" placeholder=\"email\">

                                                        </div>
                                                        <div class=\"col-lg-6  col-md-5 col-xs-5\">
                                                            <button type=\"submit\" class=\"float-right btn btn-icon social-evernote waves-effect waves-classic\"><i class=\"icon icon md-search\" aria-hidden=\"true\"></i></button>                                    </div>
                                                    <br><br>
                                                </form>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"example table-responsive\">
                                    <table class=\"table table-striped\">
                                        <thead>
                                        <tr class=\"text-center\">
                                            <th style=\"width: 33%\">{{ \"email\"|trans }}</th>
                                            <th style=\"width: 20%\" hidden >{{ \"Roles\"|trans }}</th>
                                            <th class=\"text-left\" style=\"width: 33%\">{{ \"Pays\"|trans }}</th>
                                            <th style=\"width: 20%\" hidden >{{ \"Statut\"|trans }}</th>
                                            <th class=\"text-nowrap\" style=\"width: 34%\">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        {% for u in users %}


                                            <tr class=\"text-center\">
                                                <td >
                                                    {{ u.email }}
                                                </td>
                                                <td  hidden>
                                                    {% for role in u.roles %}
                                                        {% if role != \"ROLE_USER\" %}
                                                           {% if role == \"ROLE_GESTIONNAIRE\" %}
                                                              <span class=\"badge mb-5 mr-5 badge-warning\"> Gestionnaire</span>
                                                           {% elseif role == 'ROLE_SUPER_ADMIN' %}
                                                               <span class=\"badge mb-5 mr-5 badge-info\">Administrateur</span>
                                                           {% elseif role == 'ROLE_ACTIVATOR' %}
                                                               <span class=\"badge mb-5 mr-5 badge-danger\">Activateur de photo</span>
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endfor %}
                                                </td>
                                                <td class=\"text-left\">
                                                    {% if u.pays %}
                                                    <span class=\"flag-icon flag-icon-{{u.pays.code}}\" style=\"margin-right: 8px;\"></span>{{ u.pays.nom }}
                                                    {% endif %}
                                                </td>
                                                <td hidden >
                                                    {% if u.enabled == false %}
                                                        <i class=\"md-close text-danger\" style=\"font-size: 25px;\"></i>
                                                    {% else %}
                                                        <i class=\"md-check text-success\" style=\"font-size: 25px;\"></i>
                                                    {% endif %}
                                                </td>
                                                <td>
                                                    <a data-target=\"#utilisateurs_disable{{ u.id }}\" data-toggle=\"modal\" class=\"btn btn-pure btn-default  md-delete waves-effect waves-classic\"></a>
                                                    <a href=\"{{ path('user_edit',{'id':u.id}) }}\" class=\"btn btn-pure btn-default icon md-edit waves-effect waves-classic\"></a>






                                                    <div class=\"modal fade\" id=\"utilisateurs_disable{{ u.id }}\" aria-hidden=\"true\"
                                                         aria-labelledby=\"exampleModalTabs\"
                                                         role=\"dialog\" tabindex=\"-1\">
                                                        <div class=\"modal-dialog modal-simple\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                            aria-label=\"Close\">
                                                                        <span aria-hidden=\"true\">×</span>
                                                                    </button>
                                                                    <h4 class=\"modal-title\" id=\"utilisateurs_disable{{ u.id }}\">{{ 'conf_delete'|trans }}</h4>
                                                                </div>
                                                                <form action=\"{{ path('utilisateurs_disable', { 'id': u.id }) }}\" method=\"get\">
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
", "BackendBundle:admin/user:index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/admin/user/index.html.twig");
    }
}
