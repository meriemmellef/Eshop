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

/* EasyAdminBundle:default/includes:_actions.html.twig */
class __TwigTemplate_08f7fae9e86807af3cf23ce3ab6092686c07e8ba2bdda516da35ccce4afc9532 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EasyAdminBundle:default/includes:_actions.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? $this->getContext($context, "actions")));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 2
            echo "    ";
            if (("list" == $this->getAttribute($context["action"], "name", []))) {
                // line 3
                echo "        ";
                $context["action_href"] = (((($this->getAttribute(($context["request_parameters"] ?? null), "referer", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["request_parameters"] ?? null), "referer", []), "")) : (""))) ? (urldecode($this->getAttribute(($context["request_parameters"] ?? $this->getContext($context, "request_parameters")), "referer", []))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["request_parameters"] ?? $this->getContext($context, "request_parameters")), ["action" => "list"]))));
                // line 4
                echo "    ";
            } elseif (("method" == $this->getAttribute($context["action"], "type", []))) {
                // line 5
                echo "        ";
                $context["action_href"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["request_parameters"] ?? $this->getContext($context, "request_parameters")), ["action" => $this->getAttribute($context["action"], "name", []), "id" => ($context["item_id"] ?? $this->getContext($context, "item_id"))]));
                // line 6
                echo "    ";
            } elseif (("route" == $this->getAttribute($context["action"], "type", []))) {
                // line 7
                echo "        ";
                $context["action_href"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["action"], "name", []), twig_array_merge(($context["request_parameters"] ?? $this->getContext($context, "request_parameters")), ["action" => $this->getAttribute($context["action"], "name", []), "id" => ($context["item_id"] ?? $this->getContext($context, "item_id"))]));
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    <a class=\"";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "css_class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "css_class", []), "")) : ("")), "html", null, true);
            echo "\" title=\"";
            ((twig_test_empty((($this->getAttribute($context["action"], "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "title", []), "")) : ("")))) ? (print ("")) : (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["action"], "title", []), ($context["trans_parameters"] ?? $this->getContext($context, "trans_parameters")), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true))));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, ($context["action_href"] ?? $this->getContext($context, "action_href")), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "target", []), "html", null, true);
            echo "\">";
            // line 11
            if ($this->getAttribute($context["action"], "icon", [])) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", []), "html", null, true);
                echo "\"></i> ";
            }
            // line 12
            if (($this->getAttribute($context["action"], "label", [], "any", true, true) &&  !twig_test_empty($this->getAttribute($context["action"], "label", [])))) {
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["action"], "label", []), twig_array_merge(($context["trans_parameters"] ?? $this->getContext($context, "trans_parameters")), ["%entity_id%" => ($context["item_id"] ?? $this->getContext($context, "item_id"))]), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            }
            // line 15
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default/includes:_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  78 => 13,  76 => 12,  70 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  43 => 4,  40 => 3,  37 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% for action in actions %}
    {% if 'list' == action.name %}
        {% set action_href = request_parameters.referer|default('') ? request_parameters.referer|easyadmin_urldecode : path('easyadmin', request_parameters|merge({ action: 'list' })) %}
    {% elseif 'method' == action.type %}
        {% set action_href = path('easyadmin', request_parameters|merge({ action: action.name, id: item_id })) %}
    {% elseif 'route' == action.type %}
        {% set action_href = path(action.name, request_parameters|merge({ action: action.name, id: item_id })) %}
    {% endif %}

    <a class=\"{{ action.css_class|default('') }}\" title=\"{{ action.title|default('') is empty ? '' : action.title|trans(trans_parameters, translation_domain) }}\" href=\"{{ action_href }}\" target=\"{{ action.target }}\">
        {%- if action.icon %}<i class=\"fa fa-{{ action.icon }}\"></i> {% endif -%}
        {%- if action.label is defined and not action.label is empty -%}
            {{ action.label|trans(arguments = trans_parameters|merge({ '%entity_id%': item_id }), domain = translation_domain) }}
        {%- endif -%}
    </a>
{% endfor %}
", "EasyAdminBundle:default/includes:_actions.html.twig", "C:\\wamp64\\www\\eshop\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/includes/_actions.html.twig");
    }
}
