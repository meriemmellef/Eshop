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

/* FrontendBundle:panier:payment.html.twig */
class __TwigTemplate_2e4e391561d34f7e372bc6ed10a076d1a0cccec044b1fb8e471ffca087342354 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:panier:payment.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutBreadcrumps.html.twig", "FrontendBundle:panier:payment.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_breadcrump($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrump"));

        // line 5
        echo "    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"/\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acceuil", [], "messages"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Panier", [], "messages"), "html", null, true);
        echo "</a></li>
                <li class=\"active\"> ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Paiement", [], "messages"), "html", null, true);
        echo "</li>
            </ul>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "<style>
    button.kr-payment-button {
        background-color: #df0c36 !important;
    }
</style>
    <!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs\">
            <h1 class=\"section-title-inner\"><span><i class=\"fa fa-money\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Paiement", [], "messages"), "html", null, true);
        echo "</span></h1>
        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs\">
            <h4 class=\"caps\"><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_produit");
        echo "\"><i class=\"fa fa-chevron-left\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Continuez vos achats", [], "messages"), "html", null, true);
        echo " </a></h4>

        </div>
    </div>
    <!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-12\">
            <div class=\"row userInfo\">

                <div class=\"col-xs-12 col-sm-12\">



                    <div class=\"w100 clearfix\">
                        <ul class=\"orderStep orderStepLook2\">
                            <li>
                                <a href=\"#\"> <i class=\"fa fa-map-marker\"></i> <span> ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Point de retrait", [], "messages"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li>
                                <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\"> <i class=\"glyphicon glyphicon-shopping-cart\"></i> <span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Panier", [], "messages"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li>
                                <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\"> <i class=\"fa fa-calendar\"></i><span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Crénau"), "html", null, true);
        echo " </span></a>
                            </li>
                            <li >
                                <a href=\"#\"><i class=\"fa fa-check-square \"> </i><span>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Conf", [], "messages"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li class=\"active\">
                                <a href=\"#\"><i class=\"fa fa-money\"> </i><span>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Paiement", [], "messages"), "html", null, true);
        echo "</span></a>
                            </li>
                        </ul>
                        <!--/.orderStep end-->
                    </div>

                    <div class=\"w100 clearfix\">


                        <div class=\"row userInfo\">

                            <div class=\"col-lg-12\">
                                <h2 class=\"block-title-2\"> ";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payez avec votre carte bancaire en toute sécurité"), "html", null, true);
        echo "</h2>
                            </div>


                            <div class=\"col-xs-12 col-sm-12\">
                                <div class=\"cartContent w100 checkoutReview \">

                                </div>
                                <!--cartContent-->

                                <div class=\"w100 costDetails\">
                                    <div class=\"table-block\" id=\"order-detail-content\">
                                        <div class=\"kr-embedded\"
                                             kr-form-token=\"";
        // line 82
        echo twig_escape_filter($this->env, ($context["formToken"] ?? $this->getContext($context, "formToken")), "html", null, true);
        echo "\">

                                            <!-- payment form fields -->
                                            <div class=\"kr-pan\"></div>
                                            <div class=\"kr-expiry\"></div>
                                            <div class=\"kr-security-code\"></div>

                                            <!-- payment form submit button -->
                                            <button class=\"kr-payment-button\"></button>

                                            <!-- error zone -->
                                            <div class=\"kr-form-error\"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--/costDetails-->


                                <!--/row-->





                            </div>


                        </div>


                    </div>
                    <!--/row end-->



                </div>


            </div>
        </div>
        <!--/row end-->


        <div class=\"col-lg-3 col-md-3 col-sm-12 rightSidebar\">

            <div class=\"w100 cartMiniTable\">
                <table id=\"cart-summary\" class=\"std table\">
                    <tbody>
                        <tr>
                            <td><h4> ";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total commande", [], "messages"), "html", null, true);
        echo "</h4></td>
                        </tr>
                        <tr>
                            <td class=\" site-color\" ><span id=\"total-price\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice(($context["total_price"] ?? $this->getContext($context, "total_price")), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
        echo "</span> <span class=\" site-color\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "devise", []), "html", null, true);
        echo " </span></td>
                        </tr>


                    </tbody>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
        <!--/rightSidebar-->
    </div>
    <!--/row-->
<br/><br/><br/><br/>
    <div style=\"clear:both\"></div>


    <!-- Javascript library. Should be loaded in head section -->
    <script
            src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "clientEndpoint", []), "html", null, true);
        echo "/static/js/krypton-client/V4.0/stable/kr-payment-form.min.js\"
            kr-public-key=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "publicKey", []), "html", null, true);
        echo "\"
            kr-post-url-success=\"";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation_commande");
        echo "\">
    </script>

    <!-- theme and plugins. should be loaded after the javascript library -->
    <!-- not mandatory but helps to have a nice payment form out of the box -->
    <link rel=\"stylesheet\"
          href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "clientEndpoint", []), "html", null, true);
        echo "/static/js/krypton-client/V4.0/ext/classic-reset.css\">
    <script
            src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "clientEndpoint", []), "html", null, true);
        echo "/static/js/krypton-client/V4.0/ext/classic.js\">
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:panier:payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 164,  283 => 162,  274 => 156,  270 => 155,  266 => 154,  241 => 134,  235 => 131,  183 => 82,  167 => 69,  152 => 57,  146 => 54,  138 => 51,  130 => 48,  124 => 45,  102 => 28,  96 => 25,  85 => 16,  79 => 15,  67 => 10,  61 => 9,  57 => 8,  52 => 5,  46 => 4,  30 => 1,);
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
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"/\">{{ \"Acceuil\" | trans ({}, 'messages')}}</a></li>
                <li><a href=\"{{ path(\"panier\") }}\">{{ \"Panier\" | trans({}, 'messages') }}</a></li>
                <li class=\"active\"> {{ \"Paiement\" | trans({}, 'messages') }}</li>
            </ul>
        </div>
    </div>
{% endblock breadcrump %}
{% block content %}
<style>
    button.kr-payment-button {
        background-color: #df0c36 !important;
    }
</style>
    <!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs\">
            <h1 class=\"section-title-inner\"><span><i class=\"fa fa-money\"></i> {{ \"Paiement\" | trans ({}, 'messages')}}</span></h1>
        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs\">
            <h4 class=\"caps\"><a href=\"{{ path(\"list_produit\") }}\"><i class=\"fa fa-chevron-left\"></i> {{ \"Continuez vos achats\" | trans({}, 'messages') }} </a></h4>

        </div>
    </div>
    <!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-12\">
            <div class=\"row userInfo\">

                <div class=\"col-xs-12 col-sm-12\">



                    <div class=\"w100 clearfix\">
                        <ul class=\"orderStep orderStepLook2\">
                            <li>
                                <a href=\"#\"> <i class=\"fa fa-map-marker\"></i> <span> {{ \"Point de retrait\" | trans({}, 'messages') }}</span></a>
                            </li>
                            <li>
                                <a href=\"{{ path(\"panier\") }}\"> <i class=\"glyphicon glyphicon-shopping-cart\"></i> <span> {{ \"Panier\" | trans({}, 'messages') }}</span></a>
                            </li>
                            <li>
                                <a href=\"{{ path(\"livraison\") }}\"> <i class=\"fa fa-calendar\"></i><span> {{\"Crénau\" | trans}} </span></a>
                            </li>
                            <li >
                                <a href=\"#\"><i class=\"fa fa-check-square \"> </i><span>{{ \"Conf\" | trans ({}, 'messages')}}</span></a>
                            </li>
                            <li class=\"active\">
                                <a href=\"#\"><i class=\"fa fa-money\"> </i><span>{{ \"Paiement\" | trans({}, 'messages') }}</span></a>
                            </li>
                        </ul>
                        <!--/.orderStep end-->
                    </div>

                    <div class=\"w100 clearfix\">


                        <div class=\"row userInfo\">

                            <div class=\"col-lg-12\">
                                <h2 class=\"block-title-2\"> {{\"Payez avec votre carte bancaire en toute sécurité\" | trans}}</h2>
                            </div>


                            <div class=\"col-xs-12 col-sm-12\">
                                <div class=\"cartContent w100 checkoutReview \">

                                </div>
                                <!--cartContent-->

                                <div class=\"w100 costDetails\">
                                    <div class=\"table-block\" id=\"order-detail-content\">
                                        <div class=\"kr-embedded\"
                                             kr-form-token=\"{{ formToken }}\">

                                            <!-- payment form fields -->
                                            <div class=\"kr-pan\"></div>
                                            <div class=\"kr-expiry\"></div>
                                            <div class=\"kr-security-code\"></div>

                                            <!-- payment form submit button -->
                                            <button class=\"kr-payment-button\"></button>

                                            <!-- error zone -->
                                            <div class=\"kr-form-error\"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--/costDetails-->


                                <!--/row-->





                            </div>


                        </div>


                    </div>
                    <!--/row end-->



                </div>


            </div>
        </div>
        <!--/row end-->


        <div class=\"col-lg-3 col-md-3 col-sm-12 rightSidebar\">

            <div class=\"w100 cartMiniTable\">
                <table id=\"cart-summary\" class=\"std table\">
                    <tbody>
                        <tr>
                            <td><h4> {{ \"Total commande\" | trans ({}, 'messages')}}</h4></td>
                        </tr>
                        <tr>
                            <td class=\" site-color\" ><span id=\"total-price\">{{ formated_price(total_price,app.session.get('pays'),false) }}</span> <span class=\" site-color\"> {{ app.session.get(\"pays\").devise }} </span></td>
                        </tr>


                    </tbody>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
        <!--/rightSidebar-->
    </div>
    <!--/row-->
<br/><br/><br/><br/>
    <div style=\"clear:both\"></div>


    <!-- Javascript library. Should be loaded in head section -->
    <script
            src=\"{{ client.clientEndpoint }}/static/js/krypton-client/V4.0/stable/kr-payment-form.min.js\"
            kr-public-key=\"{{ client.publicKey }}\"
            kr-post-url-success=\"{{ path(\"validation_commande\") }}\">
    </script>

    <!-- theme and plugins. should be loaded after the javascript library -->
    <!-- not mandatory but helps to have a nice payment form out of the box -->
    <link rel=\"stylesheet\"
          href=\"{{ client.clientEndpoint }}/static/js/krypton-client/V4.0/ext/classic-reset.css\">
    <script
            src=\"{{ client.clientEndpoint }}/static/js/krypton-client/V4.0/ext/classic.js\">
    </script>
{% endblock %}
", "FrontendBundle:panier:payment.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/panier/payment.html.twig");
    }
}
