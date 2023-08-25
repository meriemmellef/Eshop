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

/* FrontendBundle:pagination:sliding.html.twig */
class __TwigTemplate_3558fe01f53e888bd9b628db44d57291cd056361aebb201f1dbaadc6db082dbe extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:pagination:sliding.html.twig"));

        // line 1
        echo "
";
        // line 2
        if ((($context["pageCount"] ?? $this->getContext($context, "pageCount")) > 1)) {
            // line 3
            echo "    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"dataTables_info\" role=\"status\" aria-live=\"polite\"></div>
        </div>
        <div class=\"col-sm-7\">
            <div class=\" paging_simple_numbers pull-right\">
                <ul class=\"pagination\">

                    ";
            // line 11
            if (((isset($context["first"]) || array_key_exists("first", $context)) && (($context["current"] ?? $this->getContext($context, "current")) != ($context["first"] ?? $this->getContext($context, "first"))))) {
                // line 12
                echo "                        <li class=\"paginate_button previous  \">
                            <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), [($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["first"] ?? $this->getContext($context, "first"))])), "html", null, true);
                echo "\">
                                &lt;&lt;
                            </a>
                        </li>
                    ";
            }
            // line 18
            echo "
                    ";
            // line 19
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 20
                echo "                        <li class=\"paginate_button previous  \">
                            <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), [($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["previous"] ?? $this->getContext($context, "previous"))])), "html", null, true);
                echo "\">
                                &lt;
                            </a>
                        </li>
                    ";
            }
            // line 26
            echo "
                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 28
                echo "                        <li class=\"paginate_button  ";
                if (($context["page"] == ($context["current"] ?? $this->getContext($context, "current")))) {
                    echo " active ";
                }
                echo "\">
                            <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), [($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => $context["page"]])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
                    ";
            // line 33
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 34
                echo "                        <li class=\"paginate_button next \">
                            <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), [($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["next"] ?? $this->getContext($context, "next"))])), "html", null, true);
                echo "\">
                                &gt;
                            </a>
                        </li>
                    ";
            }
            // line 40
            echo "
                    ";
            // line 41
            if (((isset($context["last"]) || array_key_exists("last", $context)) && (($context["current"] ?? $this->getContext($context, "current")) != ($context["last"] ?? $this->getContext($context, "last"))))) {
                // line 42
                echo "                        <li class=\"paginate_button next \">
                            <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), [($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["last"] ?? $this->getContext($context, "last"))])), "html", null, true);
                echo "\">
                                &gt;&gt;
                            </a>
                        </li>
                    ";
            }
            // line 48
            echo "                </ul>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 48,  126 => 43,  123 => 42,  121 => 41,  118 => 40,  110 => 35,  107 => 34,  105 => 33,  102 => 32,  91 => 29,  84 => 28,  80 => 27,  77 => 26,  69 => 21,  66 => 20,  64 => 19,  61 => 18,  53 => 13,  50 => 12,  48 => 11,  38 => 3,  36 => 2,  33 => 1,);
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
{% if pageCount > 1 %}
    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"dataTables_info\" role=\"status\" aria-live=\"polite\"></div>
        </div>
        <div class=\"col-sm-7\">
            <div class=\" paging_simple_numbers pull-right\">
                <ul class=\"pagination\">

                    {% if first is defined and current != first %}
                        <li class=\"paginate_button previous  \">
                            <a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">
                                &lt;&lt;
                            </a>
                        </li>
                    {% endif %}

                    {% if previous is defined %}
                        <li class=\"paginate_button previous  \">
                            <a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">
                                &lt;
                            </a>
                        </li>
                    {% endif %}

                    {% for page in pagesInRange %}
                        <li class=\"paginate_button  {% if page == current %} active {% endif %}\">
                            <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                        </li>
                    {% endfor %}

                    {% if next is defined %}
                        <li class=\"paginate_button next \">
                            <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">
                                &gt;
                            </a>
                        </li>
                    {% endif %}

                    {% if last is defined and current != last %}
                        <li class=\"paginate_button next \">
                            <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">
                                &gt;&gt;
                            </a>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </div>
{% endif %}", "FrontendBundle:pagination:sliding.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/pagination/sliding.html.twig");
    }
}
