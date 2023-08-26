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

/* BackendBundle:gestionnaire/dashboard:index.html.twig */
class __TwigTemplate_5ef64fc95c33f9a9f14aa5bea84c392950ac867989fc68ca6a366a1d7afde1df extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'page' => [$this, 'block_page'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Backend/layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:gestionnaire/dashboard:index.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "BackendBundle:gestionnaire/dashboard:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/intro-js/introjs.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/css/widgets/social.css"), "html", null, true);
        echo "\">

    <!-- Page -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/fonts/font-awesome/font-awesome.css"), "html", null, true);
        echo "\">

    <!-- Fonts -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/fonts/web-icons/web-icons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/fonts/brand-icons/brand-icons.min.css"), "html", null, true);
        echo "\">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <style>
        .site-menu-title {
            overflow: visible !important;
        }

        .input-daterange .input-group {
            float: left;
            width: 50%;
        }

        .btn-floating.btn-sm {
            width: 40px;
            height: 40px;
            padding: 0;
            font-size: 15px;
        }
        .widget-content{
            padding: 20px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_page($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 37
        echo "
<!-- Page -->
<div class=\"page\" onLoad=\" reloadIt()\">

    <div class=\"page-header\">
        <h1 class=\"page-title\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dashboard"), "html", null, true);
        echo " </h1>
    </div>



    <div class=\"page-content container-fluid\">
        <div class=\"row\" data-plugin=\"matchHeight\" data-by-row=\"true\">
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 info-panel\">
                <div class=\"widget widget-shadow\"  style=\"cursor: pointer;\">
                    <div class=\"widget-content bg-white padding-20\">
                        <button type=\"button\" class=\"btn btn-floating btn-sm btn-info\">
                            <i class=\"icon fa-money\"></i>
                        </button>
                        <span class=\"margin-left-15 font-weight-400 font-size-15\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Commandes par jour"), "html", null, true);
        echo "</span>
                        <div class=\"content-text text-center margin-bottom-0\">
                            <span class=\"font-size-30 font-weight-100\">";
        // line 57
        echo twig_escape_filter($this->env, ($context["cj"] ?? $this->getContext($context, "cj")), "html", null, true);
        echo "</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 info-panel\">
                <div class=\"widget widget-shadow\"  style=\"cursor: pointer;\">
                    <div class=\"widget-content bg-white padding-20\">
                        <button type=\"button\" class=\"btn btn-floating btn-sm btn-info\">
                            <i class=\"icon fa-money\"></i>
                        </button>
                        <span class=\"margin-left-15 font-weight-400 font-size-15\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Commandes par semaine"), "html", null, true);
        echo "</span>
                        <div class=\"content-text text-center margin-bottom-0\">
                            <span class=\"font-size-30 font-weight-100\">";
        // line 71
        echo twig_escape_filter($this->env, ($context["cs"] ?? $this->getContext($context, "cs")), "html", null, true);
        echo "</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 info-panel\">
                <div class=\"widget widget-shadow\"  style=\"cursor: pointer;\">
                    <div class=\"widget-content bg-white padding-20\">
                        <button type=\"button\" class=\"btn btn-floating btn-sm btn-info\">
                            <i class=\"icon fa-money\"></i>
                        </button>
                        <span class=\"margin-left-15 font-weight-400 font-size-15\">";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Commandes par mois"), "html", null, true);
        echo "</span>
                        <div class=\"content-text text-center margin-bottom-0\">
                            <span class=\"font-size-30 font-weight-100\">";
        // line 85
        echo twig_escape_filter($this->env, ($context["cm"] ?? $this->getContext($context, "cm")), "html", null, true);
        echo "</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 info-panel\">
                <div class=\"widget widget-shadow\" style=\"cursor: pointer;\">
                    <div class=\"widget-content bg-white padding-20\">
                        <button type=\"button\" class=\"btn btn-floating btn-sm btn-info\">
                            <i class=\"icon fa-money\"></i>
                        </button>
                        <span class=\"margin-left-15 font-weight-400 font-size-15\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Commandes par année"), "html", null, true);
        echo "</span>
                        <div class=\"content-text text-center margin-bottom-0\">
                            <span class=\"font-size-30 font-weight-100\">";
        // line 99
        echo twig_escape_filter($this->env, ($context["ca"] ?? $this->getContext($context, "ca")), "html", null, true);
        echo "</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4 col-md-4  col-sm-6 col-xs-12 info-panel\">
                <div class=\"widget widget-shadow\" onclick=\"location.href='";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("station_index");
        echo "';\" style=\"cursor: pointer;\">


                    <div class=\"widget-content bg-white padding-20\">
                        <button type=\"button\" class=\"btn btn-floating btn-sm btn-danger\">
                            <i class=\"icon fa-map-marker\"></i>
                        </button>
                        <span class=\"margin-left-15 font-weight-400 font-size-15\">";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stations"), "html", null, true);
        echo "</span>
                        <div class=\"content-text text-center margin-bottom-0\">
                            <span class=\"font-size-30 font-weight-100\"> ";
        // line 115
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["stations"] ?? $this->getContext($context, "stations"))), "html", null, true);
        echo "</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 info-panel\"   style=\"cursor: pointer;\">

                    <div class=\"widget widget-shadow\" onclick=\"location.href='";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_gestion_index");
        echo "';\" >
                        <div class=\"widget-content bg-white padding-20\">
                            <button type=\"button\" class=\"btn btn-floating btn-sm btn-dark\">
                                <i class=\"icon fa-cubes\"></i>
                            </button>
                            <span class=\"margin-left-15 font-weight-400 font-size-15\">";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Produits"), "html", null, true);
        echo " </span>
                            <div class=\"content-text text-center margin-bottom-0\">
                                <span class=\"font-size-30 font-weight-100\">";
        // line 129
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                    </div>

            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 info-panel\" style=\"cursor: pointer;\">
                <div class=\"widget widget-shadow\" onclick=\"location.href='";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
        echo "';\" >
                    <div class=\"widget-content bg-white padding-20\">
                        <button type=\"button\" class=\"btn btn-floating btn-sm btn-primary\">
                            <i class=\"icon fa-users\"></i>
                        </button>
                        <span class=\"margin-left-15 font-weight-400 font-size-15\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Clients"), "html", null, true);
        echo "</span>
                        <div class=\"content-text text-center margin-bottom-0\">
                            <span class=\"font-size-30 font-weight-100\">";
        // line 143
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["clients"] ?? $this->getContext($context, "clients"))), "html", null, true);
        echo "</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 info-panel\"  style=\"cursor: pointer;\">
                <div class=\"widget widget-shadow\" onclick=\"location.href='";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
        echo "';\">
                    <div class=\"widget-content bg-white padding-20\">
                        <button type=\"button\" class=\"btn btn-floating btn-sm btn-success\">
                            <i class=\"icon fa-th-list\"></i>
                        </button>
                        <span class=\"margin-left-15 font-weight-400 font-size-15\">";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégories"), "html", null, true);
        echo "</span>
                        <div class=\"content-text text-center margin-bottom-0\">
                            <span class=\"font-size-30 font-weight-100\">";
        // line 156
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["categories"] ?? $this->getContext($context, "categories"))), "html", null, true);
        echo "</span>

                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 info-panel\"  style=\"cursor: pointer;\">
                <div class=\"widget widget-shadow\" onclick=\"location.href='";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_categorie_index");
        echo "';\" >
                    <div class=\"widget-content bg-white padding-20\">
                        <button type=\"button\" class=\"btn btn-floating btn-sm  social-evernote waves-effect waves-classic\">
                            <i class=\"icon fa-list\"></i>
                        </button>
                        <span class=\"margin-left-15 font-weight-400 font-size-15\">";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégories"), "html", null, true);
        echo " </span>
                        <div class=\"content-text text-center margin-bottom-0\">
                            <span class=\"font-size-30 font-weight-100\">";
        // line 171
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["souscategories"] ?? $this->getContext($context, "souscategories"))), "html", null, true);
        echo "</span>

                        </div>
                    </div>
                </div>
            </div>
                             <div class=\"col-xl-6 col-md-12 mb-4\">
          <div class=\"card\">
            <div class=\"card-body\">
              <div class=\"d-flex justify-content-between p-md-1\">
                <div class=\"d-flex flex-row\">
                  <div class=\"align-self-center\">
                    <i class=\"fa fa-money text-danger\" style=\"font-size:40px;margin-right: 10px\"></i>
                  </div>
                  <div>
                    <h4>Total des ventes</h4>
                    <p class=\"mb-0\">";
        // line 187
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "Now", "d-m-Y"), "html", null, true);
        echo "</p>
                  </div>
                </div>
                <div class=\"align-self-center\">
                  <h2 class=\"h3 mb-0\">";
        // line 191
        echo twig_escape_filter($this->env, ((($context["total_jour"] ?? $this->getContext($context, "total_jour")) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "pays", []), "devise", [])), "html", null, true);
        echo "</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
                  <div class=\"col-xl-6 col-md-12 mb-4\">
          <div class=\"card\">
            <div class=\"card-body\">
              <div class=\"d-flex justify-content-between p-md-1\">
                <div class=\"d-flex flex-row\">
                  <div class=\"align-self-center\">
                    <i class=\"fa fa-money text-danger\" style=\"font-size:40px;margin-right: 10px\"></i>
                  </div>
                  <div>
                    <h4>Total des ventes</h4>
                    <p class=\"mb-0\">";
        // line 207
        echo twig_escape_filter($this->env, ((($context["first_day"] ?? $this->getContext($context, "first_day")) . " - ") . ($context["last_day"] ?? $this->getContext($context, "last_day"))), "html", null, true);
        echo "</p>
                  </div>
                </div>
                <div class=\"align-self-center\">
                  <h2 class=\"h3 mb-0\">";
        // line 211
        echo twig_escape_filter($this->env, ((($context["total_semaine"] ?? $this->getContext($context, "total_semaine")) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "pays", []), "devise", [])), "html", null, true);
        echo "</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
                   <div class=\"col-xl-6 col-md-12 mb-4\">
          <div class=\"card\">
            <div class=\"card-body\">
              <div class=\"d-flex justify-content-between p-md-1\">
                <div class=\"d-flex flex-row\">
                  <div class=\"align-self-center\">
                    <i class=\"fa fa-money text-danger\" style=\"font-size:40px;margin-right: 10px\"></i>
                  </div>
                  <div>
                    <h4>Total des ventes</h4>
                    <p class=\"mb-0\">";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ce mois"), "html", null, true);
        echo "</p>
                  </div>
                </div>
                <div class=\"align-self-center\">
                  <h2 class=\"h3 mb-0\">";
        // line 231
        echo twig_escape_filter($this->env, ((($context["total_mois"] ?? $this->getContext($context, "total_mois")) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "pays", []), "devise", [])), "html", null, true);
        echo "</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
                  <div class=\"col-xl-6 col-md-12 mb-4\">
          <div class=\"card\">
            <div class=\"card-body\">
              <div class=\"d-flex justify-content-between p-md-1\">
                <div class=\"d-flex flex-row\">
                  <div class=\"align-self-center\">
                    <i class=\"fa fa-money text-danger\" style=\"font-size:40px;margin-right: 10px\"></i>
                  </div>
                  <div>
                    <h4>Total des ventes</h4>
                    <p class=\"mb-0\">";
        // line 247
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "Now", "Y"), "html", null, true);
        echo "</p>
                  </div>
                </div>
                <div class=\"align-self-center\">
                  <h2 class=\"h3 mb-0\">";
        // line 251
        echo twig_escape_filter($this->env, ((($context["total_ans"] ?? $this->getContext($context, "total_ans")) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "pays", []), "devise", [])), "html", null, true);
        echo "</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

</div>
<!-- End Page -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 262
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 263
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        jQuery(document).ready(function() {
            \$('.input-daterange').datepicker({
                format: \"yyyy/mm/dd\",
                language: \"fr\"
            });
        });

        function reloadIt() {
            var pGress = setInterval(function() {
                var pVal = \$('#progressbar').progressbar('option', 'value');
                var pCnt = !isNaN(pVal) ? (pVal + 1) : 1;
                if (pCnt > 100) {
                    clearInterval(pGress);
                } else {
                    \$('#progressbar').progressbar({value: pCnt});
                }
            },10);

            if (window.location.href.substr(-2) !== \"?r\") {
                window.location = window.location.href + \"?r\";
            }
        }

        setTimeout('reloadIt()', 1)();

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:gestionnaire/dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 263,  442 => 262,  424 => 251,  417 => 247,  398 => 231,  391 => 227,  372 => 211,  365 => 207,  346 => 191,  339 => 187,  320 => 171,  315 => 169,  307 => 164,  296 => 156,  291 => 154,  283 => 149,  274 => 143,  269 => 141,  261 => 136,  251 => 129,  246 => 127,  238 => 122,  228 => 115,  223 => 113,  213 => 106,  203 => 99,  198 => 97,  183 => 85,  178 => 83,  163 => 71,  158 => 69,  143 => 57,  138 => 55,  122 => 42,  115 => 37,  109 => 36,  78 => 12,  74 => 11,  68 => 8,  62 => 5,  58 => 4,  53 => 3,  47 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Backend/layout/layout.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset(\"remark/global/vendor/intro-js/introjs.min.css\") }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('remark/global/css/widgets/social.css') }}\">

    <!-- Page -->
    <link rel=\"stylesheet\" href=\"{{ asset('remark/global/fonts/font-awesome/font-awesome.css') }}\">

    <!-- Fonts -->
    <link rel=\"stylesheet\" href=\"{{ asset('remark/global/fonts/web-icons/web-icons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('remark/global/fonts/brand-icons/brand-icons.min.css') }}\">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <style>
        .site-menu-title {
            overflow: visible !important;
        }

        .input-daterange .input-group {
            float: left;
            width: 50%;
        }

        .btn-floating.btn-sm {
            width: 40px;
            height: 40px;
            padding: 0;
            font-size: 15px;
        }
        .widget-content{
            padding: 20px;
        }
    </style>
{% endblock %}
{% block page %}

<!-- Page -->
<div class=\"page\" onLoad=\" reloadIt()\">

    <div class=\"page-header\">
        <h1 class=\"page-title\">{{ \"Dashboard\"|trans }} </h1>
    </div>



    <div class=\"page-content container-fluid\">
        <div class=\"row\" data-plugin=\"matchHeight\" data-by-row=\"true\">
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 info-panel\">
                <div class=\"widget widget-shadow\"  style=\"cursor: pointer;\">
                    <div class=\"widget-content bg-white padding-20\">
                        <button type=\"button\" class=\"btn btn-floating btn-sm btn-info\">
                            <i class=\"icon fa-money\"></i>
                        </button>
                        <span class=\"margin-left-15 font-weight-400 font-size-15\">{{ \"Commandes par jour\"|trans }}</span>
                        <div class=\"content-text text-center margin-bottom-0\">
                            <span class=\"font-size-30 font-weight-100\">{{ cj }}</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 info-panel\">
                <div class=\"widget widget-shadow\"  style=\"cursor: pointer;\">
                    <div class=\"widget-content bg-white padding-20\">
                        <button type=\"button\" class=\"btn btn-floating btn-sm btn-info\">
                            <i class=\"icon fa-money\"></i>
                        </button>
                        <span class=\"margin-left-15 font-weight-400 font-size-15\">{{ \"Commandes par semaine\"|trans }}</span>
                        <div class=\"content-text text-center margin-bottom-0\">
                            <span class=\"font-size-30 font-weight-100\">{{ cs }}</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 info-panel\">
                <div class=\"widget widget-shadow\"  style=\"cursor: pointer;\">
                    <div class=\"widget-content bg-white padding-20\">
                        <button type=\"button\" class=\"btn btn-floating btn-sm btn-info\">
                            <i class=\"icon fa-money\"></i>
                        </button>
                        <span class=\"margin-left-15 font-weight-400 font-size-15\">{{ \"Commandes par mois\"|trans }}</span>
                        <div class=\"content-text text-center margin-bottom-0\">
                            <span class=\"font-size-30 font-weight-100\">{{ cm }}</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 info-panel\">
                <div class=\"widget widget-shadow\" style=\"cursor: pointer;\">
                    <div class=\"widget-content bg-white padding-20\">
                        <button type=\"button\" class=\"btn btn-floating btn-sm btn-info\">
                            <i class=\"icon fa-money\"></i>
                        </button>
                        <span class=\"margin-left-15 font-weight-400 font-size-15\">{{\"Commandes par année\"|trans}}</span>
                        <div class=\"content-text text-center margin-bottom-0\">
                            <span class=\"font-size-30 font-weight-100\">{{ ca }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4 col-md-4  col-sm-6 col-xs-12 info-panel\">
                <div class=\"widget widget-shadow\" onclick=\"location.href='{{ path('station_index') }}';\" style=\"cursor: pointer;\">


                    <div class=\"widget-content bg-white padding-20\">
                        <button type=\"button\" class=\"btn btn-floating btn-sm btn-danger\">
                            <i class=\"icon fa-map-marker\"></i>
                        </button>
                        <span class=\"margin-left-15 font-weight-400 font-size-15\">{{ \"Stations\"|trans }}</span>
                        <div class=\"content-text text-center margin-bottom-0\">
                            <span class=\"font-size-30 font-weight-100\"> {{ stations|length }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 info-panel\"   style=\"cursor: pointer;\">

                    <div class=\"widget widget-shadow\" onclick=\"location.href='{{ path('produit_gestion_index') }}';\" >
                        <div class=\"widget-content bg-white padding-20\">
                            <button type=\"button\" class=\"btn btn-floating btn-sm btn-dark\">
                                <i class=\"icon fa-cubes\"></i>
                            </button>
                            <span class=\"margin-left-15 font-weight-400 font-size-15\">{{ \"Produits\"|trans }} </span>
                            <div class=\"content-text text-center margin-bottom-0\">
                                <span class=\"font-size-30 font-weight-100\">{{ produits|length }}</span>
                            </div>
                        </div>
                    </div>

            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 info-panel\" style=\"cursor: pointer;\">
                <div class=\"widget widget-shadow\" onclick=\"location.href='{{ path('client_index') }}';\" >
                    <div class=\"widget-content bg-white padding-20\">
                        <button type=\"button\" class=\"btn btn-floating btn-sm btn-primary\">
                            <i class=\"icon fa-users\"></i>
                        </button>
                        <span class=\"margin-left-15 font-weight-400 font-size-15\">{{ \"Clients\"|trans }}</span>
                        <div class=\"content-text text-center margin-bottom-0\">
                            <span class=\"font-size-30 font-weight-100\">{{ clients|length }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 info-panel\"  style=\"cursor: pointer;\">
                <div class=\"widget widget-shadow\" onclick=\"location.href='{{ path('categorie_index') }}';\">
                    <div class=\"widget-content bg-white padding-20\">
                        <button type=\"button\" class=\"btn btn-floating btn-sm btn-success\">
                            <i class=\"icon fa-th-list\"></i>
                        </button>
                        <span class=\"margin-left-15 font-weight-400 font-size-15\">{{\"Catégories\"|trans}}</span>
                        <div class=\"content-text text-center margin-bottom-0\">
                            <span class=\"font-size-30 font-weight-100\">{{ categories|length }}</span>

                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 info-panel\"  style=\"cursor: pointer;\">
                <div class=\"widget widget-shadow\" onclick=\"location.href='{{ path('sous_categorie_index') }}';\" >
                    <div class=\"widget-content bg-white padding-20\">
                        <button type=\"button\" class=\"btn btn-floating btn-sm  social-evernote waves-effect waves-classic\">
                            <i class=\"icon fa-list\"></i>
                        </button>
                        <span class=\"margin-left-15 font-weight-400 font-size-15\">{{\"Sous Catégories\"|trans}} </span>
                        <div class=\"content-text text-center margin-bottom-0\">
                            <span class=\"font-size-30 font-weight-100\">{{ souscategories|length }}</span>

                        </div>
                    </div>
                </div>
            </div>
                             <div class=\"col-xl-6 col-md-12 mb-4\">
          <div class=\"card\">
            <div class=\"card-body\">
              <div class=\"d-flex justify-content-between p-md-1\">
                <div class=\"d-flex flex-row\">
                  <div class=\"align-self-center\">
                    <i class=\"fa fa-money text-danger\" style=\"font-size:40px;margin-right: 10px\"></i>
                  </div>
                  <div>
                    <h4>Total des ventes</h4>
                    <p class=\"mb-0\">{{ \"Now\"|date('d-m-Y') }}</p>
                  </div>
                </div>
                <div class=\"align-self-center\">
                  <h2 class=\"h3 mb-0\">{{ total_jour~' '~app.user.pays.devise }}</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
                  <div class=\"col-xl-6 col-md-12 mb-4\">
          <div class=\"card\">
            <div class=\"card-body\">
              <div class=\"d-flex justify-content-between p-md-1\">
                <div class=\"d-flex flex-row\">
                  <div class=\"align-self-center\">
                    <i class=\"fa fa-money text-danger\" style=\"font-size:40px;margin-right: 10px\"></i>
                  </div>
                  <div>
                    <h4>Total des ventes</h4>
                    <p class=\"mb-0\">{{first_day~' - '~last_day}}</p>
                  </div>
                </div>
                <div class=\"align-self-center\">
                  <h2 class=\"h3 mb-0\">{{ total_semaine~' '~app.user.pays.devise }}</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
                   <div class=\"col-xl-6 col-md-12 mb-4\">
          <div class=\"card\">
            <div class=\"card-body\">
              <div class=\"d-flex justify-content-between p-md-1\">
                <div class=\"d-flex flex-row\">
                  <div class=\"align-self-center\">
                    <i class=\"fa fa-money text-danger\" style=\"font-size:40px;margin-right: 10px\"></i>
                  </div>
                  <div>
                    <h4>Total des ventes</h4>
                    <p class=\"mb-0\">{{\"Ce mois\"|trans}}</p>
                  </div>
                </div>
                <div class=\"align-self-center\">
                  <h2 class=\"h3 mb-0\">{{ total_mois~' '~app.user.pays.devise }}</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
                  <div class=\"col-xl-6 col-md-12 mb-4\">
          <div class=\"card\">
            <div class=\"card-body\">
              <div class=\"d-flex justify-content-between p-md-1\">
                <div class=\"d-flex flex-row\">
                  <div class=\"align-self-center\">
                    <i class=\"fa fa-money text-danger\" style=\"font-size:40px;margin-right: 10px\"></i>
                  </div>
                  <div>
                    <h4>Total des ventes</h4>
                    <p class=\"mb-0\">{{\"Now\"|date('Y')}}</p>
                  </div>
                </div>
                <div class=\"align-self-center\">
                  <h2 class=\"h3 mb-0\">{{ total_ans~' '~app.user.pays.devise }}</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

</div>
<!-- End Page -->
{% endblock page %}
{%  block javascripts %}
    {{ parent() }}
    <script>
        jQuery(document).ready(function() {
            \$('.input-daterange').datepicker({
                format: \"yyyy/mm/dd\",
                language: \"fr\"
            });
        });

        function reloadIt() {
            var pGress = setInterval(function() {
                var pVal = \$('#progressbar').progressbar('option', 'value');
                var pCnt = !isNaN(pVal) ? (pVal + 1) : 1;
                if (pCnt > 100) {
                    clearInterval(pGress);
                } else {
                    \$('#progressbar').progressbar({value: pCnt});
                }
            },10);

            if (window.location.href.substr(-2) !== \"?r\") {
                window.location = window.location.href + \"?r\";
            }
        }

        setTimeout('reloadIt()', 1)();

    </script>

{% endblock %}
", "BackendBundle:gestionnaire/dashboard:index.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/gestionnaire/dashboard/index.html.twig");
    }
}
