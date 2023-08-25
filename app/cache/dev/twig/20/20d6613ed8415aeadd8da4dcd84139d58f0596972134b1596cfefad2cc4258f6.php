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

/* @Frontend/Default/produits.html.twig */
class __TwigTemplate_d8c6521e4934fac5ef02c1697fa397235b4be378a7a80a770ee363cee4d6024e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "FrontendBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/Default/produits.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle::base.html.twig", "@Frontend/Default/produits.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/category-2.css?v1"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <section class=\"category-wrapper\">
        ";
        // line 12
        $this->loadTemplate("@Frontend/Blocks/parallaxintro.html.twig", "@Frontend/Default/produits.html.twig", 12)->display($context);
        // line 13
        echo "
        <section class=\"main-container-wrapper clearfix\" id=\"main-container-wrapper\">
            <div class=\"container main-container\">

                <!-- Main component call to action -->

                <div class=\"row\">

                    ";
        // line 21
        $this->loadTemplate("@Frontend/Blocks/filterbar.html.twig", "@Frontend/Default/produits.html.twig", 21)->display($context);
        // line 22
        echo "
                    <div class=\"catColumnWrapper\">
                        ";
        // line 25
        echo "                        <div class=\"col-lg-3 col-md-3 col-sm-12 filterColumn\">
                            <div class=\"panel-group\" id=\"accordion\">
                                <!--Category-->
                                <div class=\"panel panel-flat\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\"><a data-toggle=\"collapse\" href=\"#collapseCategory\" class=\"\">
                                                <span class=\"pull-right hasMinus\"> <i class=\"i-minus\"></i></span> Category </a>
                                        </h4>
                                    </div>
                                    <div id=\"collapseCategory\" class=\"panel-collapse collapse in\">
                                        <div class=\"panel-body\">
                                            <ul class=\"nav nav-list\">
                                                <li><a> Watches </a></li>
                                                <li><a href=\"#\"> Accessories </a></li>
                                                <li><a href=\"#\"> Clothing </a></li>
                                                <li><a href=\"#\"> Jackets </a></li>
                                                <li><a href=\"#\"> Sweaters </a></li>
                                                <li><a href=\"#\"> Shirts </a></li>
                                                <li><a href=\"#\"> Offers Zone </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--/Category menu end-->

                                <!--Price-->
                                <div class=\"panel panel-flat\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\"><a class=\"\" data-toggle=\"collapse\" href=\"#collapsePrice\">
                                                Price <span class=\"pull-right hasMinus\"> <i class=\"i-minus\"></i></span> </a>
                                        </h4>
                                    </div>
                                    <div id=\"collapsePrice\" class=\"panel-collapse collapse in\">
                                        <div class=\"panel-body priceFilterBody \">
                                            <ul class=\"list-unstyled\">
                                                <li>
                                                    <!-- -->
                                                    <label>
                                                        <input type=\"radio\" name=\"agree\" value=\"0\"/>
                                                        100\$ - 500\$</label>
                                                </li>

                                                <li><label>
                                                        <input type=\"radio\" name=\"agree\" value=\"1\"/>
                                                        500\$ - 1000\$</label>
                                                </li>
                                                <li><label>
                                                        <input type=\"radio\" name=\"agree\" value=\"2\"/>
                                                        1000\$ - 1500\$</label>
                                                </li>
                                                <li><label>
                                                        <input type=\"radio\" name=\"agree\" value=\"3\"/>
                                                        1500\$ - 2000\$</label>
                                                </li>
                                                <li><label>
                                                        <input type=\"radio\" name=\"agree\" value=\"4\"/>
                                                        2000\$ - 2500\$</label>
                                                </li>
                                                <li><label>
                                                        <input type=\"radio\" name=\"agree\" value=\"5\"/>
                                                        2500\$ - 3000\$</label>
                                                </li>
                                                <li><label>
                                                        <input type=\"radio\" name=\"agree\" value=\"6\" disabled checked/>
                                                        Don't know</label></li>
                                            </ul>
                                            <hr>
                                            <p>Enter a Price range </p>

                                            <form class=\"form-inline \" role=\"form\">
                                                <div class=\"form-group\">
                                                    <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail2\"
                                                           placeholder=\"2000 \$\">
                                                </div>
                                                <div class=\"form-group sp\"> -</div>
                                                <div class=\"form-group\">
                                                    <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword2\"
                                                           placeholder=\"3000 \$\">
                                                </div>
                                                <button type=\"submit\" class=\"btn btn-default pull-right\">check</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--/price panel end-->
                            </div>
                        </div>
                        ";
        // line 113
        echo "                        <div class=\"col-lg-9 col-md-9 col-sm-12 categoryColumn\">
                            <div class=\"row  categoryProduct xsResponse clearfix\">
                                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 116
            echo "                                    ";
            $this->loadTemplate("@Frontend/Partial/produit.html.twig", "@Frontend/Default/produits.html.twig", 116)->display($context);
            // line 117
            echo "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row  -->
            </div>
            <!-- /main container -->
        </section>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/Default/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 118,  208 => 117,  205 => 116,  188 => 115,  184 => 113,  95 => 25,  91 => 22,  89 => 21,  79 => 13,  77 => 12,  74 => 11,  68 => 10,  58 => 6,  52 => 4,  46 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'FrontendBundle::base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}

    <link href=\"{{ asset('assets/css/category-2.css?v1') }}\" rel=\"stylesheet\">

{% endblock stylesheets %}

{% block body %}
    <section class=\"category-wrapper\">
        {% include '@Frontend/Blocks/parallaxintro.html.twig' %}

        <section class=\"main-container-wrapper clearfix\" id=\"main-container-wrapper\">
            <div class=\"container main-container\">

                <!-- Main component call to action -->

                <div class=\"row\">

                    {% include '@Frontend/Blocks/filterbar.html.twig' %}

                    <div class=\"catColumnWrapper\">
                        {# left column #}
                        <div class=\"col-lg-3 col-md-3 col-sm-12 filterColumn\">
                            <div class=\"panel-group\" id=\"accordion\">
                                <!--Category-->
                                <div class=\"panel panel-flat\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\"><a data-toggle=\"collapse\" href=\"#collapseCategory\" class=\"\">
                                                <span class=\"pull-right hasMinus\"> <i class=\"i-minus\"></i></span> Category </a>
                                        </h4>
                                    </div>
                                    <div id=\"collapseCategory\" class=\"panel-collapse collapse in\">
                                        <div class=\"panel-body\">
                                            <ul class=\"nav nav-list\">
                                                <li><a> Watches </a></li>
                                                <li><a href=\"#\"> Accessories </a></li>
                                                <li><a href=\"#\"> Clothing </a></li>
                                                <li><a href=\"#\"> Jackets </a></li>
                                                <li><a href=\"#\"> Sweaters </a></li>
                                                <li><a href=\"#\"> Shirts </a></li>
                                                <li><a href=\"#\"> Offers Zone </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--/Category menu end-->

                                <!--Price-->
                                <div class=\"panel panel-flat\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\"><a class=\"\" data-toggle=\"collapse\" href=\"#collapsePrice\">
                                                Price <span class=\"pull-right hasMinus\"> <i class=\"i-minus\"></i></span> </a>
                                        </h4>
                                    </div>
                                    <div id=\"collapsePrice\" class=\"panel-collapse collapse in\">
                                        <div class=\"panel-body priceFilterBody \">
                                            <ul class=\"list-unstyled\">
                                                <li>
                                                    <!-- -->
                                                    <label>
                                                        <input type=\"radio\" name=\"agree\" value=\"0\"/>
                                                        100\$ - 500\$</label>
                                                </li>

                                                <li><label>
                                                        <input type=\"radio\" name=\"agree\" value=\"1\"/>
                                                        500\$ - 1000\$</label>
                                                </li>
                                                <li><label>
                                                        <input type=\"radio\" name=\"agree\" value=\"2\"/>
                                                        1000\$ - 1500\$</label>
                                                </li>
                                                <li><label>
                                                        <input type=\"radio\" name=\"agree\" value=\"3\"/>
                                                        1500\$ - 2000\$</label>
                                                </li>
                                                <li><label>
                                                        <input type=\"radio\" name=\"agree\" value=\"4\"/>
                                                        2000\$ - 2500\$</label>
                                                </li>
                                                <li><label>
                                                        <input type=\"radio\" name=\"agree\" value=\"5\"/>
                                                        2500\$ - 3000\$</label>
                                                </li>
                                                <li><label>
                                                        <input type=\"radio\" name=\"agree\" value=\"6\" disabled checked/>
                                                        Don't know</label></li>
                                            </ul>
                                            <hr>
                                            <p>Enter a Price range </p>

                                            <form class=\"form-inline \" role=\"form\">
                                                <div class=\"form-group\">
                                                    <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail2\"
                                                           placeholder=\"2000 \$\">
                                                </div>
                                                <div class=\"form-group sp\"> -</div>
                                                <div class=\"form-group\">
                                                    <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword2\"
                                                           placeholder=\"3000 \$\">
                                                </div>
                                                <button type=\"submit\" class=\"btn btn-default pull-right\">check</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--/price panel end-->
                            </div>
                        </div>
                        {# right column #}
                        <div class=\"col-lg-9 col-md-9 col-sm-12 categoryColumn\">
                            <div class=\"row  categoryProduct xsResponse clearfix\">
                                {% for i in 0..10 %}
                                    {% include '@Frontend/Partial/produit.html.twig' %}
                                {% endfor %}
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row  -->
            </div>
            <!-- /main container -->
        </section>
    </section>
{% endblock body %}
", "@Frontend/Default/produits.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\Default\\produits.html.twig");
    }
}
