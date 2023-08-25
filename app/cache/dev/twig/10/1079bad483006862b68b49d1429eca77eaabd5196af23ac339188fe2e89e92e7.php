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

/* @GregwarCaptcha/captcha.html.twig */
class __TwigTemplate_801b3710fe23cfe42a02d73a9072390f4d05de7ecc751ed287f6593205f990de extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'captcha_widget' => [$this, 'block_captcha_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GregwarCaptcha/captcha.html.twig"));

        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_captcha_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "captcha_widget"));

        // line 2
        echo "    ";
        if (($context["is_human"] ?? $this->getContext($context, "is_human"))) {
            // line 3
            echo "        -
    ";
        } else {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img class=\"captcha_image\" id=\"";
            echo twig_escape_filter($this->env, ($context["image_id"] ?? $this->getContext($context, "image_id")), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, ($context["captcha_code"] ?? $this->getContext($context, "captcha_code")), "html", null, true);
            echo "\" alt=\"\" title=\"captcha\" width=\"";
            echo twig_escape_filter($this->env, ($context["captcha_width"] ?? $this->getContext($context, "captcha_width")), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, ($context["captcha_height"] ?? $this->getContext($context, "captcha_height")), "html", null, true);
            echo "\" />
            &nbsp;&nbsp;&nbsp;&nbsp;
            ";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
            &nbsp;ou&nbsp;
            ";
            // line 10
            if (($context["reload"] ?? $this->getContext($context, "reload"))) {
                // line 11
                echo "                <script type=\"text/javascript\">
                    function reload_";
                // line 12
                echo twig_escape_filter($this->env, ($context["image_id"] ?? $this->getContext($context, "image_id")), "html", null, true);
                echo "() {
                        var img = document.getElementById('";
                // line 13
                echo twig_escape_filter($this->env, ($context["image_id"] ?? $this->getContext($context, "image_id")), "html", null, true);
                echo "');
                        img.src = '";
                // line 14
                echo twig_escape_filter($this->env, ($context["captcha_code"] ?? $this->getContext($context, "captcha_code")), "html", null, true);
                echo "?n=' + (new Date()).getTime();
                    }
                </script>
                <u><a class=\"captcha_reload\" href=\"javascript:reload_";
                // line 17
                echo twig_escape_filter($this->env, ($context["image_id"] ?? $this->getContext($context, "image_id")), "html", null, true);
                echo "();\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Renew", [], "gregwar_captcha"), "html", null, true);
                echo "</a></u>
            ";
            }
            // line 19
            echo "        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 20
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@GregwarCaptcha/captcha.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  102 => 20,  99 => 19,  92 => 17,  86 => 14,  82 => 13,  78 => 12,  75 => 11,  73 => 10,  68 => 8,  56 => 6,  53 => 5,  49 => 3,  46 => 2,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block captcha_widget %}
    {% if is_human %}
        -
    {% else %}
        {% spaceless %}
            <img class=\"captcha_image\" id=\"{{ image_id }}\" src=\"{{ captcha_code }}\" alt=\"\" title=\"captcha\" width=\"{{ captcha_width }}\" height=\"{{ captcha_height }}\" />
            &nbsp;&nbsp;&nbsp;&nbsp;
            {{ form_widget(form) }}
            &nbsp;ou&nbsp;
            {% if reload %}
                <script type=\"text/javascript\">
                    function reload_{{ image_id }}() {
                        var img = document.getElementById('{{ image_id }}');
                        img.src = '{{ captcha_code }}?n=' + (new Date()).getTime();
                    }
                </script>
                <u><a class=\"captcha_reload\" href=\"javascript:reload_{{ image_id }}();\">{{ 'Renew'|trans({}, 'gregwar_captcha') }}</a></u>
            {% endif %}
        {% endspaceless %}
    {% endif %}
{% endblock %}
", "@GregwarCaptcha/captcha.html.twig", "C:\\wamp64\\www\\eshop\\app\\Resources\\GregwarCaptchaBundle\\views\\captcha.html.twig");
    }
}
