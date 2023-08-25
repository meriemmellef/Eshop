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

/* @Frontend/Default/cart.html.twig */
class __TwigTemplate_abe0b36632c19e274a5f656113efa8790919f7955f9c4c50f23d8447a405dbb8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'breadcrump' => [$this, 'block_breadcrump'],
            'content' => [$this, 'block_content'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/Default/cart.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutBreadcrumps.html.twig", "@Frontend/Default/cart.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_breadcrump($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrump"));

        // line 4
        echo "    <ul class=\"breadcrumb\">
        <li><a href=\"#\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
        echo "</a></li>
        <li><a href=\"#\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category"), "html", null, true);
        echo "</a></li>
        <li class=\"active\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cart"), "html", null, true);
        echo "</li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "
    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs\">
            <h1 class=\"section-title-inner\"><span><i
                            class=\"glyphicon glyphicon-shopping-cart\"></i> ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Panier d'achat"), "html", null, true);
        echo " </span></h1>
        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs\">
            <h4 class=\"caps\"><a href=\"/\"><i class=\"fa fa-chevron-left\"></i> ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Continuer vos achats"), "html", null, true);
        echo " </a></h4>
        </div>
    </div>
    <!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7\">
            <div class=\"row userInfo\">
                <div class=\"col-xs-12 col-sm-12\">
                    <div class=\"cartContent w100\">
                        <table class=\"cartTable table-responsive\" style=\"width:100%\">
                            <tbody>
                            <tr class=\"CartProduct cartTableHeader\">
                                <td style=\"width:15%\"> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product"), "html", null, true);
        echo "</td>
                                <td style=\"width:40%\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details"), "html", null, true);
        echo "</td>
                                <td style=\"width:10%\" class=\"delete\">&nbsp;</td>
                                <td style=\"width:10%\">QNT</td>
                                <td style=\"width:15%\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr class=\"CartProduct\">
                                <td class=\"CartProductThumb\">
                                    <div><a href=\"product-details.html\"><img src=\"images/product/a1.jpg\" alt=\"img\"></a>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"CartDescription\">
                                        <h4><a href=\"product-details.html\">Denim T shirt Black </a></h4>
                                        <span class=\"size\">12 x 1.5 L</span>

                                        <div class=\"price\"><span>\$8.80</span></div>
                                    </div>
                                </td>
                                <td class=\"delete\"><a title=\"Delete\"> <i
                                                class=\"glyphicon glyphicon-trash fa-2x\"></i></a></td>
                                <td><input class=\"quanitySniper\" type=\"text\" value=\"2\" name=\"quanitySniper\"></td>
                                <td class=\"price\">\$300</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--cartContent-->

                    <div class=\"cartFooter w100\">
                        <div class=\"box-footer\">
                            <div class=\"pull-left\"><a href=\"index.html\" class=\"btn btn-default\"> <i
                                            class=\"fa fa-arrow-left\"></i> &nbsp; ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Continue shopping"), "html", null, true);
        echo "</a></div>
                            <div class=\"pull-right\">
                                <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-undo\"></i> &nbsp; ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update cart"), "html", null, true);
        echo "
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--/ cartFooter -->

                </div>
            </div>
            <!--/row end-->

        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-5 rightSidebar\">
            <div class=\"contentBox\">
                <div class=\"w100 costDetails\">
                    <div class=\"table-block\" id=\"order-detail-content\"><a class=\"btn btn-primary btn-lg btn-block \"
                                                                          title=\"checkout\" href=\"checkout-0.html\"
                                                                          style=\"margin-bottom:20px\"> Proceed to checkout &nbsp; <i class=\"fa fa-arrow-right\"></i> </a>

                        <div class=\"w100 cartMiniTable\">
                            <table id=\"cart-summary\" class=\"std table\">
                                <tbody>
                                <tr>
                                    <td>Total products</td>
                                    <td class=\"price\">\$216.51</td>
                                </tr>
                                <tr style=\"\">
                                    <td>Shipping</td>
                                    <td class=\"price\"><span class=\"success\">Free shipping!</span></td>
                                </tr>
                                <tr class=\"cart-total-price \">
                                    <td>Total (tax excl.)</td>
                                    <td class=\"price\">\$216.51</td>
                                </tr>
                                <tr>
                                    <td>Total tax</td>
                                    <td class=\"price\" id=\"total-tax\">\$0.00</td>
                                </tr>
                                <tr>
                                    <td> Total</td>
                                    <td class=\" site-color\" id=\"total-price\">\$216.51</td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\">
                                        <div class=\"input-append couponForm\">
                                            <input class=\"col-lg-8\" id=\"appendedInputButton\" type=\"text\"
                                                   placeholder=\"Coupon code\">
                                            <button class=\"col-lg-4 btn btn-success\" type=\"button\">Apply!</button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End popular -->

        </div>
        <!--/rightSidebar-->

    </div>
    <!--/.row-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/Default/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 66,  148 => 64,  117 => 36,  111 => 33,  107 => 32,  91 => 19,  85 => 16,  79 => 12,  73 => 11,  63 => 7,  59 => 6,  55 => 5,  52 => 4,  46 => 3,  30 => 1,);
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

{% block breadcrump %}
    <ul class=\"breadcrumb\">
        <li><a href=\"#\">{{ \"Home\"|trans }}</a></li>
        <li><a href=\"#\">{{ \"Category\"|trans }}</a></li>
        <li class=\"active\">{{ \"Cart\"|trans }}</li>
    </ul>
{% endblock breadcrump %}

{% block content %}

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs\">
            <h1 class=\"section-title-inner\"><span><i
                            class=\"glyphicon glyphicon-shopping-cart\"></i> {{ \"Panier d'achat\"|trans}} </span></h1>
        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs\">
            <h4 class=\"caps\"><a href=\"/\"><i class=\"fa fa-chevron-left\"></i> {{ \"Continuer vos achats\"|trans}} </a></h4>
        </div>
    </div>
    <!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7\">
            <div class=\"row userInfo\">
                <div class=\"col-xs-12 col-sm-12\">
                    <div class=\"cartContent w100\">
                        <table class=\"cartTable table-responsive\" style=\"width:100%\">
                            <tbody>
                            <tr class=\"CartProduct cartTableHeader\">
                                <td style=\"width:15%\"> {{ \"Product\"|trans }}</td>
                                <td style=\"width:40%\">{{ \"Details\"|trans }}</td>
                                <td style=\"width:10%\" class=\"delete\">&nbsp;</td>
                                <td style=\"width:10%\">QNT</td>
                                <td style=\"width:15%\">{{ \"Total\"|trans }}</td>
                            </tr>
                            <tr class=\"CartProduct\">
                                <td class=\"CartProductThumb\">
                                    <div><a href=\"product-details.html\"><img src=\"images/product/a1.jpg\" alt=\"img\"></a>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"CartDescription\">
                                        <h4><a href=\"product-details.html\">Denim T shirt Black </a></h4>
                                        <span class=\"size\">12 x 1.5 L</span>

                                        <div class=\"price\"><span>\$8.80</span></div>
                                    </div>
                                </td>
                                <td class=\"delete\"><a title=\"Delete\"> <i
                                                class=\"glyphicon glyphicon-trash fa-2x\"></i></a></td>
                                <td><input class=\"quanitySniper\" type=\"text\" value=\"2\" name=\"quanitySniper\"></td>
                                <td class=\"price\">\$300</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--cartContent-->

                    <div class=\"cartFooter w100\">
                        <div class=\"box-footer\">
                            <div class=\"pull-left\"><a href=\"index.html\" class=\"btn btn-default\"> <i
                                            class=\"fa fa-arrow-left\"></i> &nbsp; {{ \"Continue shopping\"|trans }}</a></div>
                            <div class=\"pull-right\">
                                <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-undo\"></i> &nbsp; {{ \"Update cart\"|trans }}
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--/ cartFooter -->

                </div>
            </div>
            <!--/row end-->

        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-5 rightSidebar\">
            <div class=\"contentBox\">
                <div class=\"w100 costDetails\">
                    <div class=\"table-block\" id=\"order-detail-content\"><a class=\"btn btn-primary btn-lg btn-block \"
                                                                          title=\"checkout\" href=\"checkout-0.html\"
                                                                          style=\"margin-bottom:20px\"> Proceed to checkout &nbsp; <i class=\"fa fa-arrow-right\"></i> </a>

                        <div class=\"w100 cartMiniTable\">
                            <table id=\"cart-summary\" class=\"std table\">
                                <tbody>
                                <tr>
                                    <td>Total products</td>
                                    <td class=\"price\">\$216.51</td>
                                </tr>
                                <tr style=\"\">
                                    <td>Shipping</td>
                                    <td class=\"price\"><span class=\"success\">Free shipping!</span></td>
                                </tr>
                                <tr class=\"cart-total-price \">
                                    <td>Total (tax excl.)</td>
                                    <td class=\"price\">\$216.51</td>
                                </tr>
                                <tr>
                                    <td>Total tax</td>
                                    <td class=\"price\" id=\"total-tax\">\$0.00</td>
                                </tr>
                                <tr>
                                    <td> Total</td>
                                    <td class=\" site-color\" id=\"total-price\">\$216.51</td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\">
                                        <div class=\"input-append couponForm\">
                                            <input class=\"col-lg-8\" id=\"appendedInputButton\" type=\"text\"
                                                   placeholder=\"Coupon code\">
                                            <button class=\"col-lg-4 btn btn-success\" type=\"button\">Apply!</button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End popular -->

        </div>
        <!--/rightSidebar-->

    </div>
    <!--/.row-->

{% endblock %}
", "@Frontend/Default/cart.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\Default\\cart.html.twig");
    }
}
