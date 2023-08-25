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

/* FrontendBundle:Blocks:filterbar.html.twig */
class __TwigTemplate_3cb1e094fa19a7f1395aade8a77e807a79d7c7d5815ca73163d4d0ca92dfa523 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:Blocks:filterbar.html.twig"));

        // line 1
        echo "<div class=\"catTopBar clearfix\">
    <div class=\"catTopBarInner clearfix\">
        <div class=\"col-lg-3 col-md-3 col-sm-12\">
            <div class=\"f-left hidden-xs\">
                <h4 class=\"filterToggle \"><strong class=\"txtnbrr\">
                        ";
        // line 6
        if ((($context["nb_produit"] ?? $this->getContext($context, "nb_produit")) == 1)) {
            // line 7
            echo "                        ";
            echo twig_escape_filter($this->env, ($context["nb_produit"] ?? $this->getContext($context, "nb_produit")), "html", null, true);
            echo " Produit
                        ";
        } else {
            // line 9
            echo "                            ";
            echo twig_escape_filter($this->env, ($context["nb_produit"] ?? $this->getContext($context, "nb_produit")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produits", [], "messages"), "html", null, true);
            echo "
                        ";
        }
        // line 11
        echo "                    </strong>
                </h4>
            </div>
        </div>
        <div class=\"col-lg-9 col-md-9 col-sm-12\" >
            <div class=\"f-right\">
                <div class=\"w100  clearfix center-xs-inner\">
                    <p class=\"pull-right shrtByP center-xs  btnspanadd\"><span class=\"btnspanadd\"> ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Trierpar", [], "messages"), "html", null, true);
        echo " :</span>
                        <a  href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_produit", ["sortby" => 1, "categorie_id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "categorie_id"], "method"), "sub_categorie_id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "sub_categorie_id"], "method"), "min_price" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "min_price"], "method"), "max_price" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "max_price"], "method")]), "html", null, true);
        echo "\"

                                ";
        // line 21
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "sortby"], "method") == 1)) {
            echo " class=\"active \" ";
        }
        echo "  style=\"font-family: Roboto-Regular, sans-serif; color:";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "sortby"], "method") == 1)) {
            echo "  #ED0000   ";
        } else {
            echo "  #374649  ";
        }
        echo " ; font-size: 15px\">  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("NOUVEAU"), "html", null, true);
        echo " </a> |

                        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_produit", ["sortby" => 2, "categorie_id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "categorie_id"], "method"), "sub_categorie_id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "sub_categorie_id"], "method"), "min_price" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "min_price"], "method"), "max_price" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "max_price"], "method")]), "html", null, true);
        echo "\"


                                ";
        // line 26
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "sortby"], "method") == 2)) {
            echo " class=\"active\" ";
        }
        echo " style=\"font-family: Roboto-Regular, sans-serif; color:";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "sortby"], "method") == 2)) {
            echo "  #ED0000   ";
        } else {
            echo "  #374649  ";
        }
        echo " ;\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("POPULAIRE"), "html", null, true);
        echo " </a>|

                        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_produit", ["sortby" => 3, "categorie_id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "categorie_id"], "method"), "sub_categorie_id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "sub_categorie_id"], "method"), "min_price" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "min_price"], "method"), "max_price" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "max_price"], "method")]), "html", null, true);
        echo "\"

                                ";
        // line 30
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "sortby"], "method") == 3)) {
            echo " class=\"active\" ";
        }
        echo "  style=\"font-family: Roboto-Regular, sans-serif; color:";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "sortby"], "method") == 3)) {
            echo "  #ED0000   ";
        } else {
            echo "  #374649  ";
        }
        echo " ;\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PRIX"), "html", null, true);
        echo "</a></p>


                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Blocks:filterbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 30,  110 => 28,  95 => 26,  89 => 23,  74 => 21,  69 => 19,  65 => 18,  56 => 11,  48 => 9,  42 => 7,  40 => 6,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"catTopBar clearfix\">
    <div class=\"catTopBarInner clearfix\">
        <div class=\"col-lg-3 col-md-3 col-sm-12\">
            <div class=\"f-left hidden-xs\">
                <h4 class=\"filterToggle \"><strong class=\"txtnbrr\">
                        {% if nb_produit == 1 %}
                        {{ nb_produit }} Produit
                        {% else %}
                            {{ nb_produit }} {{ \"Produits\" | trans({}, 'messages') }}
                        {% endif %}
                    </strong>
                </h4>
            </div>
        </div>
        <div class=\"col-lg-9 col-md-9 col-sm-12\" >
            <div class=\"f-right\">
                <div class=\"w100  clearfix center-xs-inner\">
                    <p class=\"pull-right shrtByP center-xs  btnspanadd\"><span class=\"btnspanadd\"> {{ \"Trierpar\" | trans({}, 'messages') }} :</span>
                        <a  href=\"{{ path(\"list_produit\",{\"sortby\":1,\"categorie_id\":app.request.query.get('categorie_id'),\"sub_categorie_id\":app.request.query.get('sub_categorie_id'),\"min_price\":app.request.query.get('min_price'), \"max_price\":app.request.query.get('max_price')}) }}\"

                                {% if app.request.query.get(\"sortby\") == 1 %} class=\"active \" {% endif %}  style=\"font-family: Roboto-Regular, sans-serif; color:{% if app.request.query.get(\"sortby\") == 1 %}  #ED0000   {% else %}  #374649  {% endif %} ; font-size: 15px\">  {{ \"NOUVEAU\" | trans }} </a> |

                        <a href=\"{{ path(\"list_produit\",{\"sortby\":2,\"categorie_id\":app.request.query.get('categorie_id'),\"sub_categorie_id\":app.request.query.get('sub_categorie_id'),\"min_price\":app.request.query.get('min_price'), \"max_price\":app.request.query.get('max_price')}) }}\"


                                {% if app.request.query.get(\"sortby\") == 2 %} class=\"active\" {% endif %} style=\"font-family: Roboto-Regular, sans-serif; color:{% if app.request.query.get(\"sortby\") == 2 %}  #ED0000   {% else %}  #374649  {% endif %} ;\">{{ \"POPULAIRE\" | trans }} </a>|

                        <a href=\"{{ path(\"list_produit\",{\"sortby\":3,\"categorie_id\":app.request.query.get('categorie_id'),\"sub_categorie_id\":app.request.query.get('sub_categorie_id'), \"min_price\":app.request.query.get('min_price'), \"max_price\":app.request.query.get('max_price')}) }}\"

                                {% if app.request.query.get(\"sortby\") == 3 %} class=\"active\" {% endif %}  style=\"font-family: Roboto-Regular, sans-serif; color:{% if app.request.query.get(\"sortby\") == 3 %}  #ED0000   {% else %}  #374649  {% endif %} ;\">{{ \"PRIX\" | trans }}</a></p>


                </div>
            </div>
        </div>
    </div>
</div>
", "FrontendBundle:Blocks:filterbar.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/Blocks/filterbar.html.twig");
    }
}
