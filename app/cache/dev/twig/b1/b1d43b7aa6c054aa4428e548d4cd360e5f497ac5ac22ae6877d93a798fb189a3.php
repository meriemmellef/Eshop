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

/* @Backend/paginator/paginator.html.twig */
class __TwigTemplate_8704a3f6db82760d60c810e9e7ecb94fcfbc9e8dd7965ba908a75338ad5180a5 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/paginator/paginator.html.twig"));

        // line 1
        if ((($context["pageCount"] ?? $this->getContext($context, "pageCount")) > 1)) {
            // line 2
            echo "
    <div class=\"dataTables_paginate paging_simple_numbers\" id=\"exampleTableSearch_paginate\" >
        <ul class=\"pagination\"  style=\"justify-content: flex-end;\">

        ";
            // line 6
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 7
                echo "            <li class=\"paginate_button page-item previous disabled\" id=\"exampleTableSearch_previous\">
                <a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), [($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["previous"] ?? $this->getContext($context, "previous"))])), "html", null, true);
                echo "\" aria-controls=\"exampleTableSearch\" data-dt-idx=\"0\" tabindex=\"0\" class=\"page-link\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Previous"), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 11
            echo "
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 13
                echo "            <li class=\"paginate_button page-item ";
                if (($context["page"] == ($context["current"] ?? $this->getContext($context, "current")))) {
                    echo " active  ";
                }
                echo "\">
                <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), [($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => $context["page"]])), "html", null, true);
                echo "\" aria-controls=\"exampleTableSearch\" data-dt-idx=\"1\" tabindex=\"0\" class=\"page-link\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "            ";
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 18
                echo "                <li class=\"paginate_button page-item next\" id=\"exampleTableSearch_next\">
                    <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), [($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["next"] ?? $this->getContext($context, "next"))])), "html", null, true);
                echo "\" aria-controls=\"exampleTableSearch\" data-dt-idx=\"6\" tabindex=\"0\" class=\"page-link\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next"), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 22
            echo "


            ";
            // line 25
            if (((isset($context["last"]) || array_key_exists("last", $context)) && (($context["current"] ?? $this->getContext($context, "current")) != ($context["last"] ?? $this->getContext($context, "last"))))) {
                // line 26
                echo "                <li class=\"paginate_button page-item \">
                    <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), [($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["last"] ?? $this->getContext($context, "last"))])), "html", null, true);
                echo "\" aria-controls=\"exampleTableSearch\" data-dt-idx=\"1\" tabindex=\"0\" class=\"page-link\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("last"), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 30
            echo "
    </ul>
</div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/paginator/paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 30,  103 => 27,  100 => 26,  98 => 25,  93 => 22,  85 => 19,  82 => 18,  79 => 17,  68 => 14,  61 => 13,  57 => 12,  54 => 11,  46 => 8,  43 => 7,  41 => 6,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if pageCount > 1 %}

    <div class=\"dataTables_paginate paging_simple_numbers\" id=\"exampleTableSearch_paginate\" >
        <ul class=\"pagination\"  style=\"justify-content: flex-end;\">

        {% if previous is defined  %}
            <li class=\"paginate_button page-item previous disabled\" id=\"exampleTableSearch_previous\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\" aria-controls=\"exampleTableSearch\" data-dt-idx=\"0\" tabindex=\"0\" class=\"page-link\">{{ \"Previous\"|trans }}</a>
            </li>
        {% endif %}

        {% for page in pagesInRange %}
            <li class=\"paginate_button page-item {% if page == current %} active  {% endif %}\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\" aria-controls=\"exampleTableSearch\" data-dt-idx=\"1\" tabindex=\"0\" class=\"page-link\">{{ page }}</a>
            </li>
        {% endfor %}
            {% if next is defined %}
                <li class=\"paginate_button page-item next\" id=\"exampleTableSearch_next\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\" aria-controls=\"exampleTableSearch\" data-dt-idx=\"6\" tabindex=\"0\" class=\"page-link\">{{ \"Next\"|trans }}</a>
                </li>
            {% endif %}



            {% if last is defined and current != last %}
                <li class=\"paginate_button page-item \">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\" aria-controls=\"exampleTableSearch\" data-dt-idx=\"1\" tabindex=\"0\" class=\"page-link\">{{ \"last\"|trans }}</a>
                </li>
            {% endif %}

    </ul>
</div>
{% endif %}
", "@Backend/paginator/paginator.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\paginator\\paginator.html.twig");
    }
}
