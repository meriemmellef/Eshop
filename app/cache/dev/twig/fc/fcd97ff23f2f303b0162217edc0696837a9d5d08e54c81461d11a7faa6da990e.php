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

/* KnpPaginatorBundle:Pagination:bulma_pagination.html.twig */
class __TwigTemplate_737fdc383ed17b574a336d7e6c73d328ea3e7344176245b5805d6f141d239891 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:bulma_pagination.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context["position"] = (((isset($context["position"]) || array_key_exists("position", $context))) ? (_twig_default_filter(($context["position"] ?? $this->getContext($context, "position")), "left")) : ("left"));
        // line 4
        $context["rounded"] = (((isset($context["rounded"]) || array_key_exists("rounded", $context))) ? (_twig_default_filter(($context["rounded"] ?? $this->getContext($context, "rounded")), false)) : (false));
        // line 5
        $context["size"] = (((isset($context["size"]) || array_key_exists("size", $context))) ? (_twig_default_filter(($context["size"] ?? $this->getContext($context, "size")), null)) : (null));
        // line 6
        echo "
";
        // line 7
        $context["classes"] = [0 => "pagination"];
        // line 8
        echo "
";
        // line 9
        if ((($context["position"] ?? $this->getContext($context, "position")) != "left")) {
            $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), [0 => ("is-" . ($context["position"] ?? $this->getContext($context, "position")))]);
        }
        // line 10
        if (($context["rounded"] ?? $this->getContext($context, "rounded"))) {
            $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), [0 => "is-rounded"]);
        }
        // line 11
        if ((($context["size"] ?? $this->getContext($context, "size")) != null)) {
            $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), [0 => ("is-" . ($context["size"] ?? $this->getContext($context, "size")))]);
        }
        // line 12
        echo "
";
        // line 13
        if ((($context["pageCount"] ?? $this->getContext($context, "pageCount")) > 1)) {
            // line 14
            echo "    <nav class=\"";
            echo twig_escape_filter($this->env, twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " "), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"pagination\">
        ";
            // line 15
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 16
                echo "            <a class=\"pagination-previous\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), [($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["previous"] ?? $this->getContext($context, "previous"))])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 18
                echo "            <a class=\"pagination-previous\" disabled>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            }
            // line 20
            echo "
        ";
            // line 21
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 22
                echo "            <a class=\"pagination-next\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), [($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["next"] ?? $this->getContext($context, "next"))])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 24
                echo "            <a class=\"pagination-next\" disabled>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            }
            // line 26
            echo "
        <ul class=\"pagination-list\">
            <li>
                ";
            // line 29
            if ((($context["current"] ?? $this->getContext($context, "current")) == ($context["first"] ?? $this->getContext($context, "first")))) {
                // line 30
                echo "                    <a class=\"pagination-link is-current\" aria-label=\"Page ";
                echo twig_escape_filter($this->env, ($context["current"] ?? $this->getContext($context, "current")), "html", null, true);
                echo "\" aria-current=\"page\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), [($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["first"] ?? $this->getContext($context, "first"))])), "html", null, true);
                echo "\">1</a>
                ";
            } else {
                // line 32
                echo "                    <a class=\"pagination-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), [($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["first"] ?? $this->getContext($context, "first"))])), "html", null, true);
                echo "\">1</a>
                ";
            }
            // line 34
            echo "            </li>

            ";
            // line 36
            if ((($this->getAttribute(($context["pagesInRange"] ?? $this->getContext($context, "pagesInRange")), 0, [], "array") - ($context["first"] ?? $this->getContext($context, "first"))) >= 2)) {
                // line 37
                echo "                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 41
            echo "
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 43
                echo "                ";
                if (((($context["first"] ?? $this->getContext($context, "first")) != $context["page"]) && ($context["page"] != ($context["last"] ?? $this->getContext($context, "last"))))) {
                    // line 44
                    echo "                    <li>
                        ";
                    // line 45
                    if (($context["page"] == ($context["current"] ?? $this->getContext($context, "current")))) {
                        // line 46
                        echo "                            <a class=\"pagination-link is-current\" aria-label=\"Page ";
                        echo twig_escape_filter($this->env, ($context["current"] ?? $this->getContext($context, "current")), "html", null, true);
                        echo "\" aria-current=\"page\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), [($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => $context["page"]])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 48
                        echo "                            <a class=\"pagination-link\" aria-label=\"Goto page ";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), [($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => $context["page"]])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "</a>
                        ";
                    }
                    // line 50
                    echo "                    </li>
                ";
                }
                // line 52
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
            ";
            // line 54
            if (((($context["last"] ?? $this->getContext($context, "last")) - $this->getAttribute(($context["pagesInRange"] ?? $this->getContext($context, "pagesInRange")), (twig_length_filter($this->env, ($context["pagesInRange"] ?? $this->getContext($context, "pagesInRange"))) - 1), [], "array")) >= 2)) {
                // line 55
                echo "                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 59
            echo "
            <li>
                ";
            // line 61
            if ((($context["current"] ?? $this->getContext($context, "current")) == ($context["last"] ?? $this->getContext($context, "last")))) {
                // line 62
                echo "                    <a class=\"pagination-link is-current\" aria-label=\"Page ";
                echo twig_escape_filter($this->env, ($context["current"] ?? $this->getContext($context, "current")), "html", null, true);
                echo "\" aria-current=\"page\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), [($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["last"] ?? $this->getContext($context, "last"))])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["last"] ?? $this->getContext($context, "last")), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 64
                echo "                    <a class=\"pagination-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), [($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["last"] ?? $this->getContext($context, "last"))])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["last"] ?? $this->getContext($context, "last")), "html", null, true);
                echo "</a>
                ";
            }
            // line 66
            echo "            </li>
        </ul>
    </nav>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:bulma_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 66,  212 => 64,  202 => 62,  200 => 61,  196 => 59,  190 => 55,  188 => 54,  185 => 53,  179 => 52,  175 => 50,  165 => 48,  155 => 46,  153 => 45,  150 => 44,  147 => 43,  143 => 42,  140 => 41,  134 => 37,  132 => 36,  128 => 34,  122 => 32,  114 => 30,  112 => 29,  107 => 26,  101 => 24,  93 => 22,  91 => 21,  88 => 20,  82 => 18,  74 => 16,  72 => 15,  67 => 14,  65 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  47 => 8,  45 => 7,  42 => 6,  40 => 5,  38 => 4,  36 => 3,  33 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# bulma Sliding pagination control implementation #}

{% set position = position|default('left') %}
{% set rounded = rounded|default(false) %}
{% set size = size|default(null) %}

{% set classes = ['pagination'] %}

{% if position != 'left' %}{% set classes = classes|merge(['is-' ~ position]) %}{% endif %}
{% if rounded %}{% set classes = classes|merge(['is-rounded']) %}{% endif %}
{% if size != null %}{% set classes = classes|merge(['is-' ~ size]) %}{% endif %}

{% if pageCount > 1 %}
    <nav class=\"{{ classes|join(' ') }}\" role=\"navigation\" aria-label=\"pagination\">
        {% if previous is defined %}
            <a class=\"pagination-previous\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">{{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</a>
        {% else %}
            <a class=\"pagination-previous\" disabled>{{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</a>
        {% endif %}

        {% if next is defined %}
            <a class=\"pagination-next\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">{{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}</a>
        {% else %}
            <a class=\"pagination-next\" disabled>{{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}</a>
        {% endif %}

        <ul class=\"pagination-list\">
            <li>
                {% if current == first %}
                    <a class=\"pagination-link is-current\" aria-label=\"Page {{ current }}\" aria-current=\"page\" href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">1</a>
                {% else %}
                    <a class=\"pagination-link\" href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">1</a>
                {% endif %}
            </li>

            {% if pagesInRange[0] - first >= 2 %}
                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            {% endif %}

            {% for page in pagesInRange %}
                {% if first != page and page != last %}
                    <li>
                        {% if page == current %}
                            <a class=\"pagination-link is-current\" aria-label=\"Page {{ current }}\" aria-current=\"page\" href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                        {% else %}
                            <a class=\"pagination-link\" aria-label=\"Goto page {{ page }}\" href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                        {% endif %}
                    </li>
                {% endif %}
            {% endfor %}

            {% if last - pagesInRange[pagesInRange|length - 1] >= 2 %}
                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            {% endif %}

            <li>
                {% if current == last %}
                    <a class=\"pagination-link is-current\" aria-label=\"Page {{ current }}\" aria-current=\"page\" href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">{{ last }}</a>
                {% else %}
                    <a class=\"pagination-link\" href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">{{ last }}</a>
                {% endif %}
            </li>
        </ul>
    </nav>
{% endif %}
", "KnpPaginatorBundle:Pagination:bulma_pagination.html.twig", "C:\\wamp64\\www\\eshop\\vendor\\knplabs\\knp-paginator-bundle/Resources/views/Pagination/bulma_pagination.html.twig");
    }
}
