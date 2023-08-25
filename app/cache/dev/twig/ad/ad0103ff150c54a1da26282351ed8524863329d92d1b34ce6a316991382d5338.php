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

/* FrontendBundle:Profile:adresse.html.twig */
class __TwigTemplate_91fbb3f5b704fb0bd29bf45fa01ec834a4aa9238fdf154e20d6bbd35bd34656a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'breadcrump' => [$this, 'block_breadcrump'],
            'content' => [$this, 'block_content'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:Profile:adresse.html.twig"));

        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), [0 => "FrontendBundle:Form:form_errors.html.twig"]);
        // line 1
        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutBreadcrumps.html.twig", "FrontendBundle:Profile:adresse.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_breadcrump($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrump"));

        // line 6
        echo "        <div class=\"row\">
            <div class=\"breadcrumbDiv col-lg-12\">
                <ul class=\"breadcrumb\">
                    <li><a href=\"/\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages"), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "html", null, true);
        echo "</a></li>
                    <li class=\"active\"> ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mes adresses", [], "messages"), "html", null, true);
        echo "</li>
                </ul>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
        <div class=\"row\">
            <div class=\"col-lg-9 col-md-9 col-sm-7\">
                <h1 class=\"section-title-inner\"><span><i
                            class=\"fa fa-unlock-alt\"></i>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mes adresses", [], "messages"), "html", null, true);
        echo " </span></h1>

                <div class=\"row userInfo\">



                    <div class=\"w100 clearfix\"  style=\"margin-bottom: 20px\">
                        <div class=\"row userInfo\">
                            <div class=\"col-lg-6\">
                                <h2 class=\"block-title-2\"> ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Liste des adresses", [], "messages"), "html", null, true);
        echo " </h2>
                                ";
        // line 31
        if ((twig_length_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "adresses", [])) != 0)) {
            // line 32
            echo "
                                        <h4><i class=\"fa fa-truck \"> </i> ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adresse de livraison", [], "messages"), "html", null, true);
            echo "</h4>
                                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "adresses", []));
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 35
                echo "                                            <div class=\"radio-adresse\">
                                                <label class=\"col-mg-10\">
                                                    ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "adresse", []), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "cp", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", []), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "pays", []), "html", null, true);
                echo "
                                                    <br />";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", []), "html", null, true);
                echo "
                                                </label>
                                                <a class=\"col-mg-2\" href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteAdresse", ["id" => $this->getAttribute($context["adresse"], "id", []), "from_profile" => 1]), "html", null, true);
                echo "\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></a><br>
                                            </div>
                                            <hr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
                                        <br /><br />



                                ";
        }
        // line 50
        echo "                            </div>
                            <div class=\"col-lg-6\">
                                <h2 class=\"block-title-2\"> ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter une nouvelle adresse", [], "messages"), "html", null, true);
        echo " </h2>


                                <form action=\"\" method=\"POST\">
                                    <div class=\"form-group\">
                                        <label>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom", [], "messages"), "html", null, true);
        echo "</label>
                                        ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        echo "
                                        ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'errors');
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        <label>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prénom", [], "messages"), "html", null, true);
        echo "</label>
                                        ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prénom"]]);
        echo "
                                        ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), 'errors');
        echo "
                                    </div>

                                    <div class=\"form-group\">
                                        <label>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléphone"), "html", null, true);
        echo "</label>
                                        ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Exp: +216 90909090"]]);
        echo "
                                        ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", []), 'errors');
        echo "
                                    </div>

                                    <div class=\"form-group\">
                                        <label>Adresse</label>
                                        ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse"]]);
        echo "
                                        ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'errors');
        echo "
                                    </div>


                                    <div class=\"form-group\">
                                        <label>Code Postal</label>
                                        ";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", []), 'widget', ["attr" => ["class" => "form-control code", "placeholder" => "Code Postal"]]);
        echo "
                                        ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", []), 'errors');
        echo "
                                    </div>


                                    <div class=\"form-group delegation_select\" >
                                        <label>Delegation</label>
                                        ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", []), 'widget', ["attr" => ["class" => "form-control delegation", "placeholder" => "Ville"]]);
        echo "
                                        ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", []), 'errors');
        echo "
                                    </div>


                                    ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                                    <button class=\"btn btn-primary\" type=\"submit\" id=\"btn-add-adress\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter", [], "messages"), "html", null, true);
        echo "</button>
                                </form>


                            </div>

                        </div>
                        <!--/row end-->

                    </div>


                    <div class=\"col-lg-12 clearfix\">
                        <ul class=\"pager\">
                            <li class=\"previous pull-right\"><a href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_produit");
        echo "\"> <i class=\"fa fa-home\"></i>
                                ";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Continuer vos achats", [], "messages"), "html", null, true);
        echo " </a>
                            </li>
                            <li class=\"next pull-left\"><a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte");
        echo "\"> &larr; ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mon compte", [], "messages"), "html", null, true);
        echo "</a></li>
                        </ul>
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

    // line 123
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(\"#btn-add-adress\").click(function(event){
            console.log(\"tteell\");
            var reg = new RegExp(/^\\+216 [0-9]*\$/);
            if (!reg.test(\$(\"#webbundle_utilisateursadresses_telephone\").val())) {
                event.preventDefault();
                \$(\"#webbundle_utilisateursadresses_telephone\").attr(\"data-toggle\",\"tooltip\");
                \$(\"#webbundle_utilisateursadresses_telephone\").attr(\"data-placement\",\"bottom\");
                \$(\"#webbundle_utilisateursadresses_telephone\").attr(\"title\",\"Vérifier format du télephone\\n Exp: +216 90909090\");
                \$(\"#webbundle_utilisateursadresses_telephone\").tooltip(\"show\");
            }else{
                \$(\"#webbundle_utilisateursadresses_telephone\").tooltip(\"destroy\");
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Profile:adresse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 124,  307 => 123,  287 => 112,  282 => 110,  278 => 109,  261 => 95,  257 => 94,  250 => 90,  246 => 89,  237 => 83,  233 => 82,  224 => 76,  220 => 75,  212 => 70,  208 => 69,  204 => 68,  197 => 64,  193 => 63,  189 => 62,  183 => 59,  179 => 58,  175 => 57,  167 => 52,  163 => 50,  155 => 44,  145 => 40,  138 => 38,  128 => 37,  124 => 35,  120 => 34,  116 => 33,  113 => 32,  111 => 31,  107 => 30,  95 => 21,  89 => 17,  83 => 16,  71 => 11,  65 => 10,  61 => 9,  56 => 6,  50 => 5,  42 => 1,  40 => 3,  31 => 1,);
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

{% form_theme form  'FrontendBundle:Form:form_errors.html.twig' %}

    {% block breadcrump %}
        <div class=\"row\">
            <div class=\"breadcrumbDiv col-lg-12\">
                <ul class=\"breadcrumb\">
                    <li><a href=\"/\">{{ \"Home\"|trans({}, 'messages') }}</a></li>
                    <li><a href=\"{{ path(\"compte\") }}\">{{ app.user }}</a></li>
                    <li class=\"active\"> {{ \"Mes adresses\"|trans({}, 'messages') }}</li>
                </ul>
            </div>
        </div>
    {% endblock breadcrump %}
    {% block content %}

        <div class=\"row\">
            <div class=\"col-lg-9 col-md-9 col-sm-7\">
                <h1 class=\"section-title-inner\"><span><i
                            class=\"fa fa-unlock-alt\"></i>{{ \"Mes adresses\"|trans({}, 'messages') }} </span></h1>

                <div class=\"row userInfo\">



                    <div class=\"w100 clearfix\"  style=\"margin-bottom: 20px\">
                        <div class=\"row userInfo\">
                            <div class=\"col-lg-6\">
                                <h2 class=\"block-title-2\"> {{ \"Liste des adresses\"|trans({}, 'messages') }} </h2>
                                {% if utilisateur.adresses|length != 0 %}

                                        <h4><i class=\"fa fa-truck \"> </i> {{ \"Adresse de livraison\"|trans({}, 'messages') }}</h4>
                                        {% for adresse in utilisateur.adresses %}
                                            <div class=\"radio-adresse\">
                                                <label class=\"col-mg-10\">
                                                    {{ adresse.adresse }}, {{ adresse.cp }} {{ adresse.ville }} - {{ adresse.pays }}
                                                    <br />{{ adresse.prenom }} {{ adresse.nom }}
                                                </label>
                                                <a class=\"col-mg-2\" href=\"{{ path('deleteAdresse', { 'id' : adresse.id, 'from_profile' : 1 }) }}\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></a><br>
                                            </div>
                                            <hr>
                                        {% endfor %}

                                        <br /><br />



                                {% endif %}
                            </div>
                            <div class=\"col-lg-6\">
                                <h2 class=\"block-title-2\"> {{ \"Ajouter une nouvelle adresse\"|trans({}, 'messages') }} </h2>


                                <form action=\"\" method=\"POST\">
                                    <div class=\"form-group\">
                                        <label>{{ \"Nom\"|trans({}, 'messages') }}</label>
                                        {{ form_widget(form.nom,{\"attr\" : {\"class\":\"form-control\",\"placeholder\":\"Nom\" } } ) }}
                                        {{ form_errors(form.nom) }}
                                    </div>
                                    <div class=\"form-group\">
                                        <label>{{ \"Prénom\"|trans({}, 'messages') }}</label>
                                        {{ form_widget(form.prenom,{\"attr\" : {\"class\":\"form-control\",\"placeholder\":\"Prénom\" } } ) }}
                                        {{ form_errors(form.prenom) }}
                                    </div>

                                    <div class=\"form-group\">
                                        <label>{{\"Téléphone\"|trans}}</label>
                                        {{ form_widget(form.telephone,{\"attr\" : {\"class\":\"form-control\",\"placeholder\":\"Exp: +216 90909090\"} } ) }}
                                        {{ form_errors(form.telephone) }}
                                    </div>

                                    <div class=\"form-group\">
                                        <label>Adresse</label>
                                        {{ form_widget(form.adresse,{\"attr\" : {\"class\":\"form-control\",\"placeholder\":\"Adresse\"} } ) }}
                                        {{ form_errors(form.adresse) }}
                                    </div>


                                    <div class=\"form-group\">
                                        <label>Code Postal</label>
                                        {{ form_widget(form.cp,{\"attr\" : {\"class\":\"form-control code\",\"placeholder\":\"Code Postal\"} } ) }}
                                        {{ form_errors(form.cp) }}
                                    </div>


                                    <div class=\"form-group delegation_select\" >
                                        <label>Delegation</label>
                                        {{ form_widget(form.ville,{\"attr\" : {\"class\":\"form-control delegation\",\"placeholder\":\"Ville\"} } ) }}
                                        {{ form_errors(form.ville) }}
                                    </div>


                                    {{ form_widget(form) }}
                                    <button class=\"btn btn-primary\" type=\"submit\" id=\"btn-add-adress\">{{ \"Ajouter\"|trans({}, 'messages') }}</button>
                                </form>


                            </div>

                        </div>
                        <!--/row end-->

                    </div>


                    <div class=\"col-lg-12 clearfix\">
                        <ul class=\"pager\">
                            <li class=\"previous pull-right\"><a href=\"{{ path(\"list_produit\") }}\"> <i class=\"fa fa-home\"></i>
                                {{ \"Continuer vos achats\"|trans({}, 'messages') }} </a>
                            </li>
                            <li class=\"next pull-left\"><a href=\"{{ path(\"compte\") }}\"> &larr; {{ \"Mon compte\"|trans({}, 'messages') }}</a></li>
                        </ul>
                    </div>
                </div>
                <!--/row end-->

            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-5\"></div>
        </div>
        <!--/row-->
    {% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script>
        \$(\"#btn-add-adress\").click(function(event){
            console.log(\"tteell\");
            var reg = new RegExp(/^\\+216 [0-9]*\$/);
            if (!reg.test(\$(\"#webbundle_utilisateursadresses_telephone\").val())) {
                event.preventDefault();
                \$(\"#webbundle_utilisateursadresses_telephone\").attr(\"data-toggle\",\"tooltip\");
                \$(\"#webbundle_utilisateursadresses_telephone\").attr(\"data-placement\",\"bottom\");
                \$(\"#webbundle_utilisateursadresses_telephone\").attr(\"title\",\"Vérifier format du télephone\\n Exp: +216 90909090\");
                \$(\"#webbundle_utilisateursadresses_telephone\").tooltip(\"show\");
            }else{
                \$(\"#webbundle_utilisateursadresses_telephone\").tooltip(\"destroy\");
            }
        });
    </script>
{% endblock javascripts %}
", "FrontendBundle:Profile:adresse.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/Profile/adresse.html.twig");
    }
}
