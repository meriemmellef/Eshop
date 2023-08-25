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

/* @Backend/gerant/horaire/horaire.html.twig */
class __TwigTemplate_ee21641358bd2c6137858acfa0013df575ccd051fc2a44e585ceaf156fb725cf extends \Twig\Template
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
        // line 2
        return "@Backend/layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gerant/horaire/horaire.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/gerant/horaire/horaire.html.twig", 2);
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
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Horaires de retrait"), "html", null, true);
        echo "  </h1>
        </div>

        <div class=\"page-content\" style=\"padding-top: 0px \" >
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\"  style=\"padding-left: 9px !important;padding-right: 9px !important;padding-top: 0px !important;padding-bottom: 0px !important;\">
                    <form class=\"row row-lg\" style=\"padding-top: 20px;padding-bottom: 20px;\" action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pick_up_time");
        echo "\" method=\"post\">

                        ";
        // line 17
        if ((isset($context["errorhor"]) || array_key_exists("errorhor", $context))) {
            // line 18
            echo "                            <div class=\"col-lg-12 text-center\">
                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">×</span>
                                </button>
                                ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["errorhor"] ?? $this->getContext($context, "errorhor"))), "html", null, true);
            echo "
                            </div>
                            </div>
                        ";
        }
        // line 27
        echo "                        <div class=\"col-lg-12\">
                            <h4 class=\"example-title\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Veuillez choisir les horaires de disponibilité de retrait"), "html", null, true);
        echo "</h4>
                        </div>
                        <div class=\"col-lg-1 col-md-1 col-xs-1\">
                        </div>
                        <div class=\"row col-lg-10\">
                            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horaires"] ?? $this->getContext($context, "horaires")));
        foreach ($context['_seq'] as $context["key"] => $context["horaire"]) {
            // line 34
            echo "                                <div class=\"col-lg-2 col-md-2 col-xs-3\">
                                    <div class=\"checkbox-custom checkbox-primary\">
                                        <input type=\"checkbox\" name=\"listHoraires[]\"  value=\"";
            // line 36
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" id=\"checkbox";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"
                                                ";
            // line 37
            if (twig_in_filter($context["key"], $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "horaires", []))) {
                echo " checked=\"\" ";
            }
            echo ">
                                        <label for=\"checkbox";
            // line 38
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["horaire"]), "html", null, true);
            echo "</label>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['horaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                        </div>


                        <div class=\"offset-1 col-lg-12 col-md-12 col-xs-12\">
                            <div class=\"example-wrap\" style=\"margin-bottom: 40px;\">

                                <div class=\"checkbox-custom checkbox-primary\">
                                    <input type=\"checkbox\" name=\"isOpen\"  value=\"1\" id=\"isOpen\"
                                            ";
        // line 50
        if (($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "isOpen", []) == true)) {
            echo " checked=\"\" ";
        }
        echo ">
                                    <label for=\"isOpen\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("station_open_manday"), "html", null, true);
        echo " </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-12 text-right\">
                            <button type=\"submit\" class=\"btn social-evernote  waves-effect waves-classic\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valider"), "html", null, true);
        echo "</button>
                        </div>
                    </form>

                </div>
            </div>
            <!-- End Panel -->
        </div>
        <div class=\"page-header\" style=\"    padding-top: 0px;\">
            <h1 class=\"page-title\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Livraison"), "html", null, true);
        echo "</h1>
        </div>

        <div class=\"page-content\" style=\"padding-top: 0px \" >
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\"  style=\"padding-left: 9px !important;padding-right: 9px !important;padding-top: 0px !important;padding-bottom: 0px !important;\">
                    <form class=\"row row-lg\" style=\"padding-top: 20px;padding-bottom: 20px;\" action=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horaire_gerant_index");
        echo "\" method=\"post\">

                        ";
        // line 74
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 75
            echo "                            <div class=\"col-lg-12 text-center\">
                                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">×</span>
                                    </button>
                                    ";
            // line 80
            echo twig_escape_filter($this->env, ($context["error"] ?? $this->getContext($context, "error")), "html", null, true);
            echo "
                                </div>
                            </div>
                        ";
        }
        // line 84
        echo "                        <div class=\"col-lg-12\">
                            <h4 class=\"example-title\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Je propose la livraison à domicile pour mes clients"), "html", null, true);
        echo " </h4>
                        </div>

                        <div class=\"offset-1 col-lg-12 col-md-12 col-xs-12 \">
                            <div class=\"example-wrap\" style=\"margin-bottom: 40px;\">

                                    <div class=\"checkbox-custom checkbox-primary\">
                                        <input type=\"checkbox\" name=\"livraison\"   id=\"checkbox\"
                                                ";
        // line 93
        if ($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "isDelivered", [])) {
            echo " checked=\"\" ";
        }
        echo ">
                                        <label>";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active"), "html", null, true);
        echo " ?</label>
                                    </div>
                            </div>
                        </div>
                        <div class=\"offset-1  col-lg-3 \">
                            <label>";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("prix de livraison"), "html", null, true);
        echo "</label>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-xs-6\">
                           <input class=\"form-control\" type=\"number\"  min=\"0\" step=\"0.001\"  ";
        // line 102
        if ($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "isDelivered", [])) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "prixLivraison", []), "html", null, true);
            echo "\"";
        }
        echo " name=\"prix\" id=\"inputprix\" >
                        </div>
                        <div class=\"offset-1 col-lg-3 \" style=\"padding-top :10px\">
                            <label>";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Montant Minimum de la livraison"), "html", null, true);
        echo "</label>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-xs-6\"  style=\"padding-top :10px\">
                            <input class=\"form-control\" type=\"number\"  min=\"0\" step=\"0.001\" ";
        // line 108
        if ($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "isDelivered", [])) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "minprixLivraison", []), "html", null, true);
            echo "\" ";
        }
        echo "  name=\"prixmin\" id=\"inputprixmin\" >
                        </div>
                        <div class=\"col-lg-12 text-right\" style=\"padding-top: 30px;\">
                            <button type=\"submit\" class=\"btn social-evernote  waves-effect waves-classic\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valider"), "html", null, true);
        echo "</button>
                        </div>
                    </form>

                </div>
            </div>
            <!-- End Panel -->
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 122
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>

        if (\$('#checkbox').is(\":checked\"))
        {
            // it is checked
            document.getElementById(\"inputprix\").required = true;
            document.getElementById(\"inputprixmin\").required = true

        }else {

            document.getElementById(\"inputprix\").required = false;
            document.getElementById(\"inputprixmin\").required = false

        }
        \$(\"document\").ready(function(){
            \$('#checkbox').change(function() {
                if(this.checked) {
                    //\$(\"#inputprix\").attr(\"required\", \"true\");
                    //\$(\"#inputprixmin\").attr(\"required\", \"true\");
                    document.getElementById(\"inputprix\").required = true;
                    document.getElementById(\"inputprixmin\").required = true

                }else {
                    document.getElementById(\"inputprix\").required = false;
                    document.getElementById(\"inputprixmin\").required = false
                   // \$(\"#inputprix\").attr(\"required\", \"false\");
                   // \$(\"#inputprixmin\").attr(\"required\", \"false\");

                }
            });

        })

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/gerant/horaire/horaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 122,  275 => 121,  258 => 111,  248 => 108,  242 => 105,  232 => 102,  226 => 99,  218 => 94,  212 => 93,  201 => 85,  198 => 84,  191 => 80,  184 => 75,  182 => 74,  177 => 72,  167 => 65,  155 => 56,  147 => 51,  141 => 50,  131 => 42,  119 => 38,  113 => 37,  107 => 36,  103 => 34,  99 => 33,  91 => 28,  88 => 27,  81 => 23,  74 => 18,  72 => 17,  67 => 15,  57 => 8,  52 => 5,  46 => 4,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends '@Backend/layout/layout.html.twig' %}

{% block page %}
    <div class=\"page\">

        <div class=\"page-header\">
            <h1 class=\"page-title\">{{ \"Horaires de retrait\"|trans }}  </h1>
        </div>

        <div class=\"page-content\" style=\"padding-top: 0px \" >
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\"  style=\"padding-left: 9px !important;padding-right: 9px !important;padding-top: 0px !important;padding-bottom: 0px !important;\">
                    <form class=\"row row-lg\" style=\"padding-top: 20px;padding-bottom: 20px;\" action=\"{{ path('pick_up_time') }}\" method=\"post\">

                        {% if errorhor is defined  %}
                            <div class=\"col-lg-12 text-center\">
                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">×</span>
                                </button>
                                {{ errorhor|trans }}
                            </div>
                            </div>
                        {% endif %}
                        <div class=\"col-lg-12\">
                            <h4 class=\"example-title\">{{\"Veuillez choisir les horaires de disponibilité de retrait\"|trans}}</h4>
                        </div>
                        <div class=\"col-lg-1 col-md-1 col-xs-1\">
                        </div>
                        <div class=\"row col-lg-10\">
                            {%  for  key, horaire in horaires %}
                                <div class=\"col-lg-2 col-md-2 col-xs-3\">
                                    <div class=\"checkbox-custom checkbox-primary\">
                                        <input type=\"checkbox\" name=\"listHoraires[]\"  value=\"{{ key }}\" id=\"checkbox{{ key }}\"
                                                {% if key in station.horaires %} checked=\"\" {% endif %}>
                                        <label for=\"checkbox{{ key }}\">{{ horaire|trans }}</label>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>


                        <div class=\"offset-1 col-lg-12 col-md-12 col-xs-12\">
                            <div class=\"example-wrap\" style=\"margin-bottom: 40px;\">

                                <div class=\"checkbox-custom checkbox-primary\">
                                    <input type=\"checkbox\" name=\"isOpen\"  value=\"1\" id=\"isOpen\"
                                            {% if station.isOpen == true %} checked=\"\" {% endif %}>
                                    <label for=\"isOpen\">{{ \"station_open_manday\"|trans }} </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-12 text-right\">
                            <button type=\"submit\" class=\"btn social-evernote  waves-effect waves-classic\">{{ \"Valider\"|trans }}</button>
                        </div>
                    </form>

                </div>
            </div>
            <!-- End Panel -->
        </div>
        <div class=\"page-header\" style=\"    padding-top: 0px;\">
            <h1 class=\"page-title\">{{ \"Livraison\"|trans }}</h1>
        </div>

        <div class=\"page-content\" style=\"padding-top: 0px \" >
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\"  style=\"padding-left: 9px !important;padding-right: 9px !important;padding-top: 0px !important;padding-bottom: 0px !important;\">
                    <form class=\"row row-lg\" style=\"padding-top: 20px;padding-bottom: 20px;\" action=\"{{ path('horaire_gerant_index') }}\" method=\"post\">

                        {% if error is defined %}
                            <div class=\"col-lg-12 text-center\">
                                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">×</span>
                                    </button>
                                    {{ error }}
                                </div>
                            </div>
                        {% endif %}
                        <div class=\"col-lg-12\">
                            <h4 class=\"example-title\">{{\"Je propose la livraison à domicile pour mes clients\"|trans}} </h4>
                        </div>

                        <div class=\"offset-1 col-lg-12 col-md-12 col-xs-12 \">
                            <div class=\"example-wrap\" style=\"margin-bottom: 40px;\">

                                    <div class=\"checkbox-custom checkbox-primary\">
                                        <input type=\"checkbox\" name=\"livraison\"   id=\"checkbox\"
                                                {% if station.isDelivered %} checked=\"\" {% endif %}>
                                        <label>{{ \"Active\"|trans }} ?</label>
                                    </div>
                            </div>
                        </div>
                        <div class=\"offset-1  col-lg-3 \">
                            <label>{{ \"prix de livraison\"|trans }}</label>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-xs-6\">
                           <input class=\"form-control\" type=\"number\"  min=\"0\" step=\"0.001\"  {% if station.isDelivered %} value=\"{{ station.prixLivraison }}\"{% endif %} name=\"prix\" id=\"inputprix\" >
                        </div>
                        <div class=\"offset-1 col-lg-3 \" style=\"padding-top :10px\">
                            <label>{{ \"Montant Minimum de la livraison\"|trans }}</label>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-xs-6\"  style=\"padding-top :10px\">
                            <input class=\"form-control\" type=\"number\"  min=\"0\" step=\"0.001\" {% if station.isDelivered %} value=\"{{ station.minprixLivraison }}\" {% endif %}  name=\"prixmin\" id=\"inputprixmin\" >
                        </div>
                        <div class=\"col-lg-12 text-right\" style=\"padding-top: 30px;\">
                            <button type=\"submit\" class=\"btn social-evernote  waves-effect waves-classic\">{{ \"Valider\"|trans }}</button>
                        </div>
                    </form>

                </div>
            </div>
            <!-- End Panel -->
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}

    <script>

        if (\$('#checkbox').is(\":checked\"))
        {
            // it is checked
            document.getElementById(\"inputprix\").required = true;
            document.getElementById(\"inputprixmin\").required = true

        }else {

            document.getElementById(\"inputprix\").required = false;
            document.getElementById(\"inputprixmin\").required = false

        }
        \$(\"document\").ready(function(){
            \$('#checkbox').change(function() {
                if(this.checked) {
                    //\$(\"#inputprix\").attr(\"required\", \"true\");
                    //\$(\"#inputprixmin\").attr(\"required\", \"true\");
                    document.getElementById(\"inputprix\").required = true;
                    document.getElementById(\"inputprixmin\").required = true

                }else {
                    document.getElementById(\"inputprix\").required = false;
                    document.getElementById(\"inputprixmin\").required = false
                   // \$(\"#inputprix\").attr(\"required\", \"false\");
                   // \$(\"#inputprixmin\").attr(\"required\", \"false\");

                }
            });

        })

    </script>
{% endblock %}

", "@Backend/gerant/horaire/horaire.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gerant\\horaire\\horaire.html.twig");
    }
}
