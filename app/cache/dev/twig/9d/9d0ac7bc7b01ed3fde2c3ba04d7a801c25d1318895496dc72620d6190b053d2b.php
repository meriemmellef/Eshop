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

/* FrontendBundle:Produit:show.html.twig */
class __TwigTemplate_d3e7c0d7d83a7d693e61d8b43fffcc1bab9212eb5d66ab89084d98fd900a43bd extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:Produit:show.html.twig"));

        // line 1
        echo "


        <div class=\"row transitionfx\">

            <!-- left column -->
            <div class=\"col-lg-6 col-md-6 col-sm-6\">
                <!-- product Image and Zoom -->


                <div class=\"main-image col-lg-12 no-padding style2 style2look2\">
                    <img id=\"imageproduit\" data-original=\"/uploads/produits/";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "image", []), "html", null, true);
        echo "\" src=\"";
        if (($this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "image", []) && ($this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "image", []) != ""))) {
            echo "/uploads/produits/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "image", []), "html", null, true);
        } elseif ((($this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "sousCategorie", []) && $this->getAttribute($this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "sousCategorie", []), "image", [])) && ($this->getAttribute($this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "sousCategorie", []), "image", []) != ""))) {
            echo "/uploads/produits/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "sousCategorie", []), "image", []), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
        }
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "nom", []), "html", null, true);
        echo "\" class=\"img-responsive\" >

                </div>
            </div>
            <!--/ left column end -->


            <!-- right column -->
            <div class=\"col-lg-6 col-md-6 col-sm-5\">
                <input type=\"text\" id=\"idproduit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "id", []), "html", null, true);
        echo "\" hidden>

                <h1 class=\"product-title\">
                    ";
        // line 24
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "nomen", []), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "nom", []), "html", null, true);
        }
        // line 25
        echo "
                </h1>

                    <div class=\"product-price\">
                        <span class=\"price-sales\">  ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "finalPrice", []), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
        echo "\t </span>
                        ";
        // line 30
        if (($this->getAttribute($this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "finalPrice", []), "is_promo", [], "array") && ($this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "numProduitPromo", []) == 1))) {
            // line 31
            echo "                            <span class=\"price-standard\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "finalPrice", []), "old_prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "</span>
                        ";
        }
        // line 33
        echo "                    </div>


                    <div class=\"color-details\">
                        ";
        // line 37
        if (($this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "image", []) && ($this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "image", []) != ""))) {
            // line 38
            echo "                            <img name='img' id='";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "image", []), "html", null, true);
            echo "' style=\"width:  100px;height: 100px;background-size: cover;border-width: 2px; border-color: #df0c36;border-style: solid;\"
                                 src=\"/uploads/produits/";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "image", []), "html", null, true);
            echo "\" onclick=\"changeImage('";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "image", []), "html", null, true);
            echo "')\"  alt=\"img\">
                        ";
        }
        // line 41
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "couleurs", []));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 42
            echo "                            ";
            if (($this->getAttribute($context["c"], "image", []) && ($this->getAttribute($context["c"], "image", []) != ""))) {
                // line 43
                echo "
                                <img name='img' id='";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                echo "' style=\"    width:  100px;height: 100px;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                     src=\"/uploads/produits/";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                echo "\"  onclick=\"changeImage('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "image", []), "html", null, true);
                echo "')\" alt=\"img\">

                            ";
            }
            // line 48
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    </div>
                    <div class=\"color-details\">
                        <span class=\"selected-color\"><strong>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Couleurs"), "html", null, true);
        echo "</strong></span>
                        <ul class=\"swatches Color\" name=\"couleur\" id=\"couleur\">
                            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "couleurs", []));
        foreach ($context['_seq'] as $context["_key"] => $context["couleur"]) {
            // line 55
            echo "                            <li   value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
            echo "\" ";
            if ($this->getAttribute($context["couleur"], "image", [])) {
                echo "onclick=\"changeImage('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "image", []), "html", null, true);
                echo "')\" ";
            }
            echo "><a style=\"background-color:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["couleur"], "codeCouleur", []), "html", null, true);
            echo ";color:transparent\"></a> </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couleur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                        </ul>
                    </div>
                    <!--/.color-details-->

                    <div class=\"productFilter productFilterLook2\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-sm-6 col-xs-6\">
                                <span class=\"selected-color\"><strong>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tailles"), "html", null, true);
        echo "</strong></span>
                                <div class=\"filterBox\">
                                    <select class=\"form-control\"  name=\"sizes\">
                                        <option disabled selected>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choisir la taille"), "html", null, true);
        echo "</option>
                                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sizes"] ?? $this->getContext($context, "sizes")));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 69
            echo "                                        <option value=\"size\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["prod"] ?? $this->getContext($context, "prod")), "sizeToString", [0 => $this->getAttribute($context["size"], "libelle", [])], "method"), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- productFilter -->

                    <div class=\"cart-actions\">
                        <div class=\"addto row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <button onclick=\"productAddToCartForm.submit(this);\"
                                        class=\"button btn-block btn-cart cart first\" title=\"Add to Cart\" type=\"button\">";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter au panier"), "html", null, true);
        echo "
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--/.cart-actions-->

            </div>
            <!--/ right column end -->

        </div>
        <!--/.row-->
        <!-- /main container -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>

        <script>

            \$('#couleur').on('click', 'li', function() {
                \$(this).addClass(\"selected\"); // Assign the class here
             //   var value = \$('#couleur').val();
                var value = \$(this).attr('value');
                var produit = parseInt(  \$(\"#idproduit\").val());
                \$.ajax({
                    url: \"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("getSizeCouleur");
        echo "\",
                    dataType: 'Json',
                    data: {\"couleurid\":value,\"produitid\": produit},
                    type:'GET',
                    success: function(data) {
                        \$('select[name=\"sizes\"]').empty();
                        \$('select[name=\"sizes').append('<option value=\"\" selected hidden>'+ 'choisir la taille' +'</option>');

                        for(i = 0; i < data.length; i++) {
                            student = data[i];
                            \$('select[name=\"sizes').append('<option value=\"'+ student['id'] +'\">'+ student['libelle'] +'</option>');
                        };
                    }
                });
            });
            function changeImage(image) {

                document.getElementById(\"imageproduit\").src = '/uploads/produits/'+image;
                var images = document.getElementsByName(\"img\");

                for(i in images){
                    images[i].style='width: 100px;\\n' +
                        '    height: 100px;\\n' +
                        '    background-size: cover;\\n' +
                        '    border-width: 2px;\\n' +
                        '    border-color: #dcdbdb;\\n' +
                        '    border-style: solid;';
                }
                document.getElementById(image).style = 'width: 100px;\\n' +
                    '    height: 100px;\\n' +
                    '    background-size: cover;\\n' +
                    '    border-width: 2px;\\n' +
                    '    border-color: #df0c36;\\n' +
                    '    border-style: solid;';

            }
        </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Produit:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 106,  226 => 83,  212 => 71,  203 => 69,  199 => 68,  195 => 67,  189 => 64,  180 => 57,  163 => 55,  159 => 54,  154 => 52,  150 => 50,  143 => 48,  135 => 45,  131 => 44,  128 => 43,  125 => 42,  120 => 41,  113 => 39,  108 => 38,  106 => 37,  100 => 33,  94 => 31,  92 => 30,  88 => 29,  82 => 25,  76 => 24,  70 => 21,  46 => 12,  33 => 1,);
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


        <div class=\"row transitionfx\">

            <!-- left column -->
            <div class=\"col-lg-6 col-md-6 col-sm-6\">
                <!-- product Image and Zoom -->


                <div class=\"main-image col-lg-12 no-padding style2 style2look2\">
                    <img id=\"imageproduit\" data-original=\"/uploads/produits/{{ prod.image }}\" src=\"{% if prod.image and prod.image != \"\" %}/uploads/produits/{{ prod.image }}{% elseif prod.sousCategorie and prod.sousCategorie.image and prod.sousCategorie.image != \"\" %}/uploads/produits/{{ prod.sousCategorie.image }}{% else %}{{ asset('/assets/img/default_t_e.jpg') }}{% endif %}\" alt=\"{{ prod.nom }}\" class=\"img-responsive\" >

                </div>
            </div>
            <!--/ left column end -->


            <!-- right column -->
            <div class=\"col-lg-6 col-md-6 col-sm-5\">
                <input type=\"text\" id=\"idproduit\" value=\"{{ prod.id }}\" hidden>

                <h1 class=\"product-title\">
                    {% if app.request.getLocale()  == 'en' %}{{ prod.nomen }}{% else %}{{ prod.nom }}{% endif %}

                </h1>

                    <div class=\"product-price\">
                        <span class=\"price-sales\">  {{ formated_price( prod.finalPrice[\"prix\"],app.session.get(\"pays\"))}}\t </span>
                        {% if prod.finalPrice[\"is_promo\"] and prod.numProduitPromo == 1  %}
                            <span class=\"price-standard\">{{ formated_price( prod.finalPrice[\"old_prix\"],app.session.get(\"pays\"))}}</span>
                        {% endif %}
                    </div>


                    <div class=\"color-details\">
                        {% if prod.image and prod.image != \"\" %}
                            <img name='img' id='{{ prod.image  }}' style=\"width:  100px;height: 100px;background-size: cover;border-width: 2px; border-color: #df0c36;border-style: solid;\"
                                 src=\"/uploads/produits/{{ prod.image  }}\" onclick=\"changeImage('{{ prod.image }}')\"  alt=\"img\">
                        {% endif %}
                        {% for c in prod.couleurs %}
                            {% if c.image and c.image != \"\" %}

                                <img name='img' id='{{ c.image }}' style=\"    width:  100px;height: 100px;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                     src=\"/uploads/produits/{{ c.image }}\"  onclick=\"changeImage('{{ c.image }}')\" alt=\"img\">

                            {% endif %}

                        {% endfor %}
                    </div>
                    <div class=\"color-details\">
                        <span class=\"selected-color\"><strong>{{ \"Couleurs\"|trans }}</strong></span>
                        <ul class=\"swatches Color\" name=\"couleur\" id=\"couleur\">
                            {% for couleur in prod.couleurs %}
                            <li   value=\"{{ couleur.codeCouleur }}\" {% if  couleur.image %}onclick=\"changeImage('{{ couleur.image }}')\" {% endif %}><a style=\"background-color:{{ couleur.codeCouleur }};color:transparent\"></a> </li>
                            {% endfor %}
                        </ul>
                    </div>
                    <!--/.color-details-->

                    <div class=\"productFilter productFilterLook2\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-sm-6 col-xs-6\">
                                <span class=\"selected-color\"><strong>{{ \"Tailles\"|trans }}</strong></span>
                                <div class=\"filterBox\">
                                    <select class=\"form-control\"  name=\"sizes\">
                                        <option disabled selected>{{ \"choisir la taille\"|trans }}</option>
                                        {% for size in sizes %}
                                        <option value=\"size\">{{ prod.sizeToString(size.libelle) }}</option>
                                        {% endfor %}

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- productFilter -->

                    <div class=\"cart-actions\">
                        <div class=\"addto row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <button onclick=\"productAddToCartForm.submit(this);\"
                                        class=\"button btn-block btn-cart cart first\" title=\"Add to Cart\" type=\"button\">{{ \"Ajouter au panier\"|trans }}
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--/.cart-actions-->

            </div>
            <!--/ right column end -->

        </div>
        <!--/.row-->
        <!-- /main container -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>

        <script>

            \$('#couleur').on('click', 'li', function() {
                \$(this).addClass(\"selected\"); // Assign the class here
             //   var value = \$('#couleur').val();
                var value = \$(this).attr('value');
                var produit = parseInt(  \$(\"#idproduit\").val());
                \$.ajax({
                    url: \"{{ (path('getSizeCouleur')) }}\",
                    dataType: 'Json',
                    data: {\"couleurid\":value,\"produitid\": produit},
                    type:'GET',
                    success: function(data) {
                        \$('select[name=\"sizes\"]').empty();
                        \$('select[name=\"sizes').append('<option value=\"\" selected hidden>'+ 'choisir la taille' +'</option>');

                        for(i = 0; i < data.length; i++) {
                            student = data[i];
                            \$('select[name=\"sizes').append('<option value=\"'+ student['id'] +'\">'+ student['libelle'] +'</option>');
                        };
                    }
                });
            });
            function changeImage(image) {

                document.getElementById(\"imageproduit\").src = '/uploads/produits/'+image;
                var images = document.getElementsByName(\"img\");

                for(i in images){
                    images[i].style='width: 100px;\\n' +
                        '    height: 100px;\\n' +
                        '    background-size: cover;\\n' +
                        '    border-width: 2px;\\n' +
                        '    border-color: #dcdbdb;\\n' +
                        '    border-style: solid;';
                }
                document.getElementById(image).style = 'width: 100px;\\n' +
                    '    height: 100px;\\n' +
                    '    background-size: cover;\\n' +
                    '    border-width: 2px;\\n' +
                    '    border-color: #df0c36;\\n' +
                    '    border-style: solid;';

            }
        </script>

", "FrontendBundle:Produit:show.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/Produit/show.html.twig");
    }
}
