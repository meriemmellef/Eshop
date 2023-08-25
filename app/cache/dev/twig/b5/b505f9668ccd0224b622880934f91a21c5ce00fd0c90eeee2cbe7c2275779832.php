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

/* FrontendBundle:Produit:index.html.twig */
class __TwigTemplate_24615be051abd0d66c6349db25402134a703c6de45e6c1b74a278e8410d38995 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:Produit:index.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle::base.html.twig", "FrontendBundle:Produit:index.html.twig", 1);
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
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <section class=\"headerOffset\" style=\"background-color: #ffffff;\">
        ";
        // line 14
        echo "        <input type=\"text\" value=\"";
        echo twig_escape_filter($this->env, ($context["cp"] ?? $this->getContext($context, "cp")), "html", null, true);
        echo "\" id=\"cp\" style=\"display: none;\">
        <section class=\"main-container-wrapper clearfix\" id=\"main-container-wrapper\" style=\"background-color: #ffffff;padding-right:2%;padding-left: 2%;\">
            <div class=\"container main-container\" style=\"max-width: 1600px;background-color: #ffffff\">

                <!-- Main component call to action -->

                <div class=\"row\" style=\"display: flex; align-items: center;\">
                    <div class=\"breadcrumbDiv\"  >
                        <ul class=\"breadcrumb\">
                            <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
        echo "</a></li>
                            ";
        // line 24
        if (($context["subcategorie"] ?? $this->getContext($context, "subcategorie"))) {
            // line 25
            echo "                            <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                                ";
            // line 26
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "en") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "EN"))) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["subcategorie"] ?? $this->getContext($context, "subcategorie")), "nomEn", []), "html", null, true);
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["subcategorie"] ?? $this->getContext($context, "subcategorie")), "nom", []), "html", null, true);
            }
            // line 27
            echo "                            </li>
                            ";
        }
        // line 29
        echo "
                            ";
        // line 30
        if (($context["categorie"] ?? $this->getContext($context, "categorie"))) {
            // line 31
            echo "                                <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                                    ";
            // line 32
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "en") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "EN"))) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["categorie"] ?? $this->getContext($context, "categorie")), "nomEn", []), "html", null, true);
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["categorie"] ?? $this->getContext($context, "categorie")), "nom", []), "html", null, true);
            }
            // line 33
            echo "
                                </li>
                            ";
        }
        // line 36
        echo "

                        </ul>
                    </div>
                </div>


                <div class=\"row\">

                     ";
        // line 45
        if (($this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), "getTotalItemCount", []) > 0)) {
            echo twig_include($this->env, $context, "@Frontend/Blocks/filterbar.html.twig", ["nb_produit" => $this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), "getTotalItemCount", [])]);
        }
        // line 46
        echo "

                    <div class=\"catColumnWrapper\">
                        ";
        // line 50
        echo "                        ";
        // line 51
        echo "                        <div class=\"col-lg-12 col-md-12 col-sm-12 categoryColumn\">


                            <div class=\"row  categoryProduct xsResponse clearfix\">
                                ";
        // line 55
        if (($this->getAttribute(($context["produits"] ?? $this->getContext($context, "produits")), "getTotalItemCount", []) > 0)) {
            // line 56
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 57
                echo "                                        ";
                echo twig_include($this->env, $context, "@Frontend/Partial/produit.html.twig", ["produit" => $context["produit"], "sizes" => $this->getAttribute($context["produit"], "sizes", [])]);
                echo "
                                        <div class=\"modal fade\" id=\"modal-panier";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\"
                                             aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\" data-backdrop=\"static\" data-keyboard=\"false\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\" style=\"background: #ED0000;\">
                                                        <h4 class=\"modal-title\" id=\"exampleModalLongTitle\" style=\"margin-top: 11px;font-family: Roboto-Regular,sans-serif\">
                                                            ";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                echo "
                                                        </h4>
                                                        <button style=\"opacity: 1.2;margin-top: -36px;margin-right: -10px;background-color: #ED0000\" type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                            <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class=\"modal-body text-center\">

                                                        <h3>";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("quantite_demander_indispo"), "html", null, true);
                echo "
                                                            ";
                // line 73
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nomen", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", []), "html", null, true);
                }
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("est"), "html", null, true);
                echo "  <span id=\"idinputtwo";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
                echo "\">  </span> </h3>


                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <div class=\"modal fade\" id=\"modal-quantity\" tabindex=\"-1\" role=\"dialog\"
                                             aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\" style=\"background: #ED0000;\">
                                                        <h4 class=\"modal-title\" id=\"exampleModalLongTitle\" style=\"margin-top: 11px;\">
                                                            ";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acheter"), "html", null, true);
                echo "
                                                        </h4>
                                                        <button style=\"opacity: 1.2;margin-top: -36px;margin-right: -10px;background-color: #df0c36\" type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                            <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class=\"modal-body text-center\">
                                                        <h3>
                                                            ";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("La quantité doit ètre supèrieure à 0"), "html", null, true);
                echo "</h3>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>

                                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                                ";
        } else {
            // line 106
            echo "                                    <h3 style=\"color:#ED0000;font-family: Roboto-Regular,sans-serif;font-weight: 200\"><i class=\"fa fa-exclamation-circle\"></i>
                                        ";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ce produit est temporairement indisponible"), "html", null, true);
            echo "</h3>
                                ";
        }
        // line 109
        echo "                            </div>



                            <div class=\"navigation\">
                                ";
        // line 114
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["produits"] ?? $this->getContext($context, "produits")));
        echo "
                            </div>
                        </div>
                    </div>


                    ";
        // line 120
        if (($context["sous_categories"] ?? $this->getContext($context, "sous_categories"))) {
            // line 121
            echo "                        <div class=\"row subCategoryList clearfix\" style=\"margin-bottom: 10px;margin-left: 10px\">
                            <h3 class=\"section-title style2  text-left\">
                                <span >";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Autres catégories"), "html", null, true);
            echo "</span></h3>

                            ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sous_categories"] ?? $this->getContext($context, "sous_categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["sub_categorie"]) {
                // line 126
                echo "                                <div class=\"col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center \"
                                     style=\"height: 125px;margin-bottom:10px\">
                                    <div class=\"thumbnail\"><a class=\"subCategoryThumb\"
                                                              href=\"";
                // line 129
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_produit");
                echo "?sub_categorie_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sub_categorie"], "id", []), "html", null, true);
                echo "\">
                                            <img data-original=\"/uploads/produits/";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["sub_categorie"], "image", []), "html", null, true);
                echo "\"
                                                 src=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
                echo "\"
                                                 alt=\"img\" class=\"img-responsive lazy\" style=\"
                                            width: fit-content; height:78px;object-fit : contain;\">
                                        </a> <a class=\"subCategoryTitle\"><span> ";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["sub_categorie"], "nom", []), "html", null, true);
                echo " </span></a>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                        </div>

                    ";
        }
        // line 141
        echo "
                </div>
                <!-- /.row  -->
            </div>
            <!-- /main container -->
        </section>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 149
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 150
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


    <script>
        /*\$( \"#slider-range\" ).slider({
               range: true,
               min: 0,
               max: 5000,
               values: [ ";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "min_price", 1 => 0], "method"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "max_price", 1 => 3000], "method"), "html", null, true);
        echo " ],
            slide: function( event, ui ) {
                \$( \"#min_price\" ).val(ui.values[ 0 ]);
                \$( \"#max_price\" ).val(ui.values[ 1]);
            }
        });
        \$( \"#amount\" ).val( \"\$\" + \$( \"#slider-range\" ).slider( \"values\", 0 ) +
                \" - \$\" + \$( \"#slider-range\" ).slider( \"values\", 1 ) );
*/

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Produit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 158,  370 => 150,  364 => 149,  350 => 141,  345 => 138,  335 => 134,  329 => 131,  325 => 130,  319 => 129,  314 => 126,  310 => 125,  305 => 123,  301 => 121,  299 => 120,  290 => 114,  283 => 109,  278 => 107,  275 => 106,  272 => 105,  249 => 96,  238 => 88,  212 => 73,  208 => 72,  197 => 64,  188 => 58,  183 => 57,  165 => 56,  163 => 55,  157 => 51,  155 => 50,  150 => 46,  146 => 45,  135 => 36,  130 => 33,  123 => 32,  120 => 31,  118 => 30,  115 => 29,  111 => 27,  104 => 26,  101 => 25,  99 => 24,  95 => 23,  82 => 14,  79 => 12,  73 => 11,  63 => 7,  59 => 6,  53 => 4,  47 => 3,  31 => 1,);
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
    <link href=\"{{ asset('assets/css/jquery-ui.css') }}\" rel=\"stylesheet\">

{% endblock stylesheets %}

{% block body %}
    <section class=\"headerOffset\" style=\"background-color: #ffffff;\">
        {#% include '@Frontend/Blocks/parallaxintro.html.twig' %#}
        <input type=\"text\" value=\"{{ cp }}\" id=\"cp\" style=\"display: none;\">
        <section class=\"main-container-wrapper clearfix\" id=\"main-container-wrapper\" style=\"background-color: #ffffff;padding-right:2%;padding-left: 2%;\">
            <div class=\"container main-container\" style=\"max-width: 1600px;background-color: #ffffff\">

                <!-- Main component call to action -->

                <div class=\"row\" style=\"display: flex; align-items: center;\">
                    <div class=\"breadcrumbDiv\"  >
                        <ul class=\"breadcrumb\">
                            <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">{{ \"Home\"|trans }}</a></li>
                            {% if subcategorie %}
                            <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                                {% if  app.session.get(\"pays\").FrontLanguage  == 'en' or app.session.get(\"pays\").FrontLanguage  == 'EN' %}{{ subcategorie.nomEn }}{% else %} {{ subcategorie.nom }}{% endif %}
                            </li>
                            {% endif %}

                            {% if categorie %}
                                <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                                    {% if app.session.get(\"pays\").FrontLanguage  == 'en' or app.session.get(\"pays\").FrontLanguage  == 'EN' %}{{ categorie.nomEn }}{% else %} {{ categorie.nom }}{% endif %}

                                </li>
                            {% endif %}


                        </ul>
                    </div>
                </div>


                <div class=\"row\">

                     {% if produits.getTotalItemCount > 0 %}{{ include('@Frontend/Blocks/filterbar.html.twig', {\"nb_produit\" : produits.getTotalItemCount }) }}{% endif %}


                    <div class=\"catColumnWrapper\">
                        {# left column #}
                        {# right column #}
                        <div class=\"col-lg-12 col-md-12 col-sm-12 categoryColumn\">


                            <div class=\"row  categoryProduct xsResponse clearfix\">
                                {% if produits.getTotalItemCount > 0 %}
                                    {% for produit in produits %}
                                        {{ include('@Frontend/Partial/produit.html.twig' , {'produit' : produit,'sizes' : produit.sizes}) }}
                                        <div class=\"modal fade\" id=\"modal-panier{{ produit.id }}\" tabindex=\"-1\" role=\"dialog\"
                                             aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\" data-backdrop=\"static\" data-keyboard=\"false\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\" style=\"background: #ED0000;\">
                                                        <h4 class=\"modal-title\" id=\"exampleModalLongTitle\" style=\"margin-top: 11px;font-family: Roboto-Regular,sans-serif\">
                                                            {{ \"Acheter\" | trans }}
                                                        </h4>
                                                        <button style=\"opacity: 1.2;margin-top: -36px;margin-right: -10px;background-color: #ED0000\" type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                            <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class=\"modal-body text-center\">

                                                        <h3>{{\"quantite_demander_indispo\" | trans}}
                                                            {% if app.request.getLocale()  == 'en' %}{{ produit.nomen }}{% else %}{{ produit.nom }}{% endif %} {{\"est\" | trans}}  <span id=\"idinputtwo{{ produit.id }}\">  </span> </h3>


                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <div class=\"modal fade\" id=\"modal-quantity\" tabindex=\"-1\" role=\"dialog\"
                                             aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\" style=\"background: #ED0000;\">
                                                        <h4 class=\"modal-title\" id=\"exampleModalLongTitle\" style=\"margin-top: 11px;\">
                                                            {{ \"Acheter\" | trans }}
                                                        </h4>
                                                        <button style=\"opacity: 1.2;margin-top: -36px;margin-right: -10px;background-color: #df0c36\" type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                            <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class=\"modal-body text-center\">
                                                        <h3>
                                                            {{\"La quantité doit ètre supèrieure à 0\" | trans}}</h3>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>

                                    {% endfor %}
                                {% else %}
                                    <h3 style=\"color:#ED0000;font-family: Roboto-Regular,sans-serif;font-weight: 200\"><i class=\"fa fa-exclamation-circle\"></i>
                                        {{ \"Ce produit est temporairement indisponible\" | trans }}</h3>
                                {% endif %}
                            </div>



                            <div class=\"navigation\">
                                {{ knp_pagination_render(produits) }}
                            </div>
                        </div>
                    </div>


                    {% if sous_categories %}
                        <div class=\"row subCategoryList clearfix\" style=\"margin-bottom: 10px;margin-left: 10px\">
                            <h3 class=\"section-title style2  text-left\">
                                <span >{{\"Autres catégories\" | trans}}</span></h3>

                            {% for sub_categorie in sous_categories %}
                                <div class=\"col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center \"
                                     style=\"height: 125px;margin-bottom:10px\">
                                    <div class=\"thumbnail\"><a class=\"subCategoryThumb\"
                                                              href=\"{{ path(\"list_produit\") }}?sub_categorie_id={{ sub_categorie.id }}\">
                                            <img data-original=\"/uploads/produits/{{ sub_categorie.image }}\"
                                                 src=\"{{ asset('/assets/img/default_t_e.jpg') }}\"
                                                 alt=\"img\" class=\"img-responsive lazy\" style=\"
                                            width: fit-content; height:78px;object-fit : contain;\">
                                        </a> <a class=\"subCategoryTitle\"><span> {{ sub_categorie.nom }} </span></a>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>

                    {% endif %}

                </div>
                <!-- /.row  -->
            </div>
            <!-- /main container -->
        </section>
    </section>
{% endblock body %}
{% block javascripts %}
    {{ parent() }}


    <script>
        /*\$( \"#slider-range\" ).slider({
               range: true,
               min: 0,
               max: 5000,
               values: [ {{ app.request.query.get('min_price',0) }}, {{ app.request.query.get('max_price', 3000) }} ],
            slide: function( event, ui ) {
                \$( \"#min_price\" ).val(ui.values[ 0 ]);
                \$( \"#max_price\" ).val(ui.values[ 1]);
            }
        });
        \$( \"#amount\" ).val( \"\$\" + \$( \"#slider-range\" ).slider( \"values\", 0 ) +
                \" - \$\" + \$( \"#slider-range\" ).slider( \"values\", 1 ) );
*/

    </script>
{% endblock javascripts %}
", "FrontendBundle:Produit:index.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/Produit/index.html.twig");
    }
}
