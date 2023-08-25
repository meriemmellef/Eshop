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

/* @Frontend/Blocks/parallaxintro.html.twig */
class __TwigTemplate_8695741301fab148dd0011fe62d3fbc00b23a11eec9ed080d99e97d9ab7010c1 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/Blocks/parallaxintro.html.twig"));

        // line 1
        echo "<section id=\"category-intro\" class=\"section-intro scrollme parallaxOffset\">
    <div class=\"cat-intro animateme\" data-when=\"exit\"
         data-from=\"0\"
         data-to=\"1\"
         data-opacity=\"0\"
         data-translatey=\"-220\"
         data-rotatez=\"0\"
         data-crop=\"true\">

        <div class=\"cat-intro-text\">
            <div class=\"display-table hw100\">
                <div class=\"display-table-cell hw100\">
                    <div class=\"box-text-cell-inner white animateme\" data-when=\"exit\"
                         data-from=\"0\"
                         data-to=\"1\"
                         data-opacity=\"0\"
                         data-translatey=\"-260\"
                         data-rotatez=\"0\"
                         data-crop=\"true\">

                        <h1 style=\"font-family: Roboto-Regular\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("VENDEUR DE CONFIANCE"), "html", null, true);
        echo "</h1>


                        <p><a style=\"color:#fff\" href=\"#main-container-wrapper\" class=\"scrollto\"><i
                                        class=\"fa fa-2x fa-angle-down\"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--/.cat-intro-text-->

        <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/parallax/parallaxe.jpg"), "html", null, true);
        echo "\" alt=\"img\" class=\" cat-intro-banner\"></div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/Blocks/parallaxintro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 32,  55 => 21,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"category-intro\" class=\"section-intro scrollme parallaxOffset\">
    <div class=\"cat-intro animateme\" data-when=\"exit\"
         data-from=\"0\"
         data-to=\"1\"
         data-opacity=\"0\"
         data-translatey=\"-220\"
         data-rotatez=\"0\"
         data-crop=\"true\">

        <div class=\"cat-intro-text\">
            <div class=\"display-table hw100\">
                <div class=\"display-table-cell hw100\">
                    <div class=\"box-text-cell-inner white animateme\" data-when=\"exit\"
                         data-from=\"0\"
                         data-to=\"1\"
                         data-opacity=\"0\"
                         data-translatey=\"-260\"
                         data-rotatez=\"0\"
                         data-crop=\"true\">

                        <h1 style=\"font-family: Roboto-Regular\">{{ \"VENDEUR DE CONFIANCE\"|trans }}</h1>


                        <p><a style=\"color:#fff\" href=\"#main-container-wrapper\" class=\"scrollto\"><i
                                        class=\"fa fa-2x fa-angle-down\"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--/.cat-intro-text-->

        <img src=\"{{ asset('images/parallax/parallaxe.jpg') }}\" alt=\"img\" class=\" cat-intro-banner\"></div>
</section>
", "@Frontend/Blocks/parallaxintro.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\Blocks\\parallaxintro.html.twig");
    }
}
