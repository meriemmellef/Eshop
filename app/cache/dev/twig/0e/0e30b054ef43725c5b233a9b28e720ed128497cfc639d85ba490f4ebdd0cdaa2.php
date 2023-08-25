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

/* FrontendBundle:Default:select_country.html.twig */
class __TwigTemplate_17d641363a5079f9f0b7ecef965a39a7afaef0429805463fdece6d6636ecd54a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:Default:select_country.html.twig"));

        // line 1
        echo "<html lang=\"fr\" prefix=\"og: http://ogp.me/ns#\" data-whatinput=\"mouse\" data-whatintent=\"mouse\"
      class=\" whatinput-types-initial whatinput-types-mouse whatinput-types-keyboard\" data-lt-installed=\"true\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/logo.png"), "html", null, true);
        echo "\">

    <title>TotalEnergies|Eshop</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/landing_page_1.css\" media=\"all\">
    <link rel=\"stylesheet\" href=\"/assets/css/landing_page_2.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/vendor/flag-icon-css/flag-icon.css"), "html", null, true);
        echo "\">


    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" >
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\" ></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js\" integrity=\"sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT\" crossorigin=\"anonymous\"></script>

</head>
<body onLoad=\"reloadIt()\" >
<input type=\"text\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method"), "html", null, true);
        echo "\" id=\"language\"  style=\"display: none;\">

<ul id=\"c5\">
    <li><a href=\"#contenu\" class=\"lien--evitement\"><span class=\"btn-nav-nivo3\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Aller au contenu", [], "messages"), "html", null, true);
        echo "</span></a></li>
</ul>
<div class=\"page-flex l-page\">
    <div class=\"l-intro position-relative\">
        <div class=\"l-gauche\">
            <img src=\"/assets/img/totalenergies--vertical.svg\" alt=\"TotalEnergies\"
                 class=\"l-gauche__logo logo mb-dbl--large\">
            <h1 class=\"l-gauche__accroche accroche\"><span class=\"ligne1\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("L’énergie"), "html", null, true);
        echo "</span><span class=\"ligne2\"><span
                            class=\"hide-for-large\">&nbsp;</span>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("se réinvente"), "html", null, true);
        echo ",</span><br class=\"hide-for-large\"><span
                        class=\"ligne3\">Total ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("devient", [], "messages"), "html", null, true);
        echo "</span><span class=\"ligne4\"><span
                            class=\"hide-for-large\">&nbsp;</span>TotalEnergies</span></h1>
            <a href=\"https://totalenergies.com/\"
               class=\"l-gauche__lien btn-nav-nivo3 var--intro\" rel=\"nofollow\" target=\"_blank\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Découvrir", [], "messages"), "html", null, true);
        echo "</a>
        </div>
    </div>

    <div class=\"l-banniere banniere\" id=\"contenu\">
        <picture>
            <img src=\"/assets/img/banniere.jpg\" alt=\"\" loading=\"lazy\" width=\"958\">
        </picture>
        <div class=\"banniere__texte\">
            <p class=\"banniere__aside text--uppercase l-droite\"> ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pratique et entièrement gratuit"), "html", null, true);
        echo " </p>
            <p class=\"banniere__titre l-droite\"><span class=\"txt-gras--large\">TotalEnergies Eboutique&nbsp;:</span><br>
                ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("vos courses se font désormais en quelques clics"), "html", null, true);
        echo " ! </p>
            <p hidden class=\"l-droite\"><a href=\"#\" class=\"btn-nav-nivo1 var--prehome\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accéder au site"), "html", null, true);
        echo "</a></p>
        </div>
    </div>
    <main class=\"l-contenu bg-contenu text-center\" role=\"main\" id=\"contenu\"  >
        <div class=\"l-droite \">
            <div class=\"row\">


            <p class=\"columns small-8 medium-3 large-6 contenu__titre mb-std\">Eshop ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("est disponible", [], "messages"), "html", null, true);
        echo " :  </p>

                <div class=\"columns small-4 medium-3 large-1 contenu__titre mb-std dropdown float-left\"  >
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\"    id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"          >
                        ";
        // line 60
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr")) {
            echo "FR";
        } else {
            echo "EN";
        }
        // line 61
        echo "                        <b class=\"caret\"> </b>
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
                        ";
        // line 64
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "fr")) {
            // line 65
            echo "                            <li>
                                <a class=\"dropdown-item\"  href=\"";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("translatelanding");
            echo "?to=en\" > <span class=\"flag-icon flag-icon-gb\"></span>EN</a>
                            </li>
                        ";
        } else {
            // line 69
            echo "                            <li>
                                <a class=\"dropdown-item\"  href=\"";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("translatelanding");
            echo "?to=fr\" > <span class=\"flag-icon flag-icon-fr\"></span>FR</a>
                            </li>
                        ";
        }
        // line 73
        echo "


                    </ul>
                </div>
";
        // line 90
        echo "
            </div>



            <div class=\"row\">
                ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pays"] ?? $this->getContext($context, "pays")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 97
            echo "                    <div class=\"columns small-6 medium-3 large-3\">
                        <a class=\"activite\"  href=\"";
            // line 98
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_frontend");
            echo "?pays=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "code", []), "html", null, true);
            echo "\"   >
                            <span class=\"flag-icon flag-icon-";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "code", []), "html", null, true);
            echo "\" style=\"font-size: 60px\" ></span>

                            <div class=\"pt-dm\"> ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", []), "html", null, true);
            echo "</div>
                        </a>
                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "            </div>

        </div>
    </main>


    <footer class=\"l-footer footer\" role=\"contentinfo\">

    </footer>
</div>

";
        // line 117
        $this->displayBlock('javascripts', $context, $blocks);
        // line 197
        echo "
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 117
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        echo "    <script type=\"text/javascript\" src=\"Scripts/jquery-2.1.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"Scripts/bootstrap.min.js\"></script>
    <script type=\"text/javascript\">

        function reloadIt() {
            if (window.location.href.substr(-2) !== \"?r\") {
                window.location = window.location.href + \"?r\";
            }
        }

        setTimeout('reloadIt()', 1)();


    </script>


    <script type=\"text/javascript\">
        var language = \$(\"#language\").val();
        console.log(language);
        var utag_data =
            {\"site_name\":\"631397\",
                \"site_section\":\"1\",
                \"page_section\":\"transfer_dsb\",
                \"page_category\":\"\",
                \"page_subcategory\":\"\",
                \"page_name\":\"\",
                \"page_type\":\"\",
                \"env_type\":\"dev\",
                \"language\":\"1\",
                \"customer_id\":\"353\",
                \"car_type\":\"\",
                \"customer_firstname\":\"\",
                \"customer_lastname\":\"\",
                \"email_address\":\"\",
                \"phone_number\":\"\",
                \"city\":\"\"
            };
        if (language ==='en'){
            utag_data[\"language\"]= \"2\" ;
        }else {
            utag_data[\"language\"]= \"1\";
        }

    </script>


    <script type=\"text/javascript\" >
        (function(a,b,c,d){
                a='https://tags.tiqcdn.com/utag/totalms/ms-eshop-station/prod/utag.js';
                b=document;
                c='script';
                d=b.createElement(c);
                d.src=a;
                d.type='text/java'+c;
                d.async=true;
                a=b.getElementsByTagName(c)[0];
                a.parentNode.insertBefore(d,a);
            }
        )();
    </script>


    <script>


\$(document).ready(function(){

        \$('.fixed-table-body').each(function(){
            \$(this).css(\"min-height\",\"500px\");
        });




    })

</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:select_country.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 118,  231 => 117,  221 => 197,  219 => 117,  206 => 106,  195 => 101,  190 => 99,  184 => 98,  181 => 97,  177 => 96,  169 => 90,  162 => 73,  156 => 70,  153 => 69,  147 => 66,  144 => 65,  142 => 64,  137 => 61,  131 => 60,  124 => 56,  113 => 48,  109 => 47,  104 => 45,  92 => 36,  86 => 33,  82 => 32,  78 => 31,  68 => 24,  62 => 21,  50 => 12,  42 => 7,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\" prefix=\"og: http://ogp.me/ns#\" data-whatinput=\"mouse\" data-whatintent=\"mouse\"
      class=\" whatinput-types-initial whatinput-types-mouse whatinput-types-keyboard\" data-lt-installed=\"true\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel=\"shortcut icon\" href=\"{{ asset('assets/ico/logo.png') }}\">

    <title>TotalEnergies|Eshop</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/landing_page_1.css\" media=\"all\">
    <link rel=\"stylesheet\" href=\"/assets/css/landing_page_2.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('remark/global/vendor/flag-icon-css/flag-icon.css') }}\">


    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" >
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\" ></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js\" integrity=\"sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT\" crossorigin=\"anonymous\"></script>

</head>
<body onLoad=\"reloadIt()\" >
<input type=\"text\" value=\"{{ app.request.getLocale() }}\" id=\"language\"  style=\"display: none;\">

<ul id=\"c5\">
    <li><a href=\"#contenu\" class=\"lien--evitement\"><span class=\"btn-nav-nivo3\">{{ \"Aller au contenu\"|trans({}, 'messages') }}</span></a></li>
</ul>
<div class=\"page-flex l-page\">
    <div class=\"l-intro position-relative\">
        <div class=\"l-gauche\">
            <img src=\"/assets/img/totalenergies--vertical.svg\" alt=\"TotalEnergies\"
                 class=\"l-gauche__logo logo mb-dbl--large\">
            <h1 class=\"l-gauche__accroche accroche\"><span class=\"ligne1\">{{\"L’énergie\"|trans}}</span><span class=\"ligne2\"><span
                            class=\"hide-for-large\">&nbsp;</span>{{\"se réinvente\"|trans}},</span><br class=\"hide-for-large\"><span
                        class=\"ligne3\">Total {{ \"devient\"|trans({}, 'messages') }}</span><span class=\"ligne4\"><span
                            class=\"hide-for-large\">&nbsp;</span>TotalEnergies</span></h1>
            <a href=\"https://totalenergies.com/\"
               class=\"l-gauche__lien btn-nav-nivo3 var--intro\" rel=\"nofollow\" target=\"_blank\">{{\"Découvrir\"|trans({}, 'messages')}}</a>
        </div>
    </div>

    <div class=\"l-banniere banniere\" id=\"contenu\">
        <picture>
            <img src=\"/assets/img/banniere.jpg\" alt=\"\" loading=\"lazy\" width=\"958\">
        </picture>
        <div class=\"banniere__texte\">
            <p class=\"banniere__aside text--uppercase l-droite\"> {{\"Pratique et entièrement gratuit\"|trans}} </p>
            <p class=\"banniere__titre l-droite\"><span class=\"txt-gras--large\">TotalEnergies Eboutique&nbsp;:</span><br>
                {{\"vos courses se font désormais en quelques clics\"|trans}} ! </p>
            <p hidden class=\"l-droite\"><a href=\"#\" class=\"btn-nav-nivo1 var--prehome\">{{\"Accéder au site\"|trans}}</a></p>
        </div>
    </div>
    <main class=\"l-contenu bg-contenu text-center\" role=\"main\" id=\"contenu\"  >
        <div class=\"l-droite \">
            <div class=\"row\">


            <p class=\"columns small-8 medium-3 large-6 contenu__titre mb-std\">Eshop {{ \"est disponible\"|trans({}, 'messages') }} :  </p>

                <div class=\"columns small-4 medium-3 large-1 contenu__titre mb-std dropdown float-left\"  >
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\"    id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"          >
                        {% if app.request.getLocale()  == 'fr' %}FR{% else %}EN{% endif %}
                        <b class=\"caret\"> </b>
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
                        {% if app.request.getLocale()  == 'fr' %}
                            <li>
                                <a class=\"dropdown-item\"  href=\"{{ path('translatelanding') }}?to=en\" > <span class=\"flag-icon flag-icon-gb\"></span>EN</a>
                            </li>
                        {% else %}
                            <li>
                                <a class=\"dropdown-item\"  href=\"{{ path('translatelanding') }}?to=fr\" > <span class=\"flag-icon flag-icon-fr\"></span>FR</a>
                            </li>
                        {% endif %}



                    </ul>
                </div>
{#

  {% if app.request.getLocale()  == 'en' %}
                    <a class=\"\" href=\"{{ path('translatelanding') }}?to=fr\" >
                        <span class=\"flag-icon flag-icon-fr\" style=\"top: -50px;font-size: 19px;margin-left: -21px\"></span>
                    </a>
                {% elseif app.request.getLocale()  == 'fr' %}
                    <a class=\"\" href=\"{{ path('translatelanding') }}?to=en\" >
                        <span class=\"flag-icon flag-icon-gb\" style=\"top: -50px;font-size: 19px;margin-left: -21px\"></span>
                    </a>
                {% endif %}
#}

            </div>



            <div class=\"row\">
                {% for p in pays %}
                    <div class=\"columns small-6 medium-3 large-3\">
                        <a class=\"activite\"  href=\"{{ path(\"homepage_frontend\") }}?pays={{ p.code }}\"   >
                            <span class=\"flag-icon flag-icon-{{p.code}}\" style=\"font-size: 60px\" ></span>

                            <div class=\"pt-dm\"> {{ p.nom }}</div>
                        </a>
                    </div>

                {% endfor %}
            </div>

        </div>
    </main>


    <footer class=\"l-footer footer\" role=\"contentinfo\">

    </footer>
</div>

{% block javascripts %}
    <script type=\"text/javascript\" src=\"Scripts/jquery-2.1.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"Scripts/bootstrap.min.js\"></script>
    <script type=\"text/javascript\">

        function reloadIt() {
            if (window.location.href.substr(-2) !== \"?r\") {
                window.location = window.location.href + \"?r\";
            }
        }

        setTimeout('reloadIt()', 1)();


    </script>


    <script type=\"text/javascript\">
        var language = \$(\"#language\").val();
        console.log(language);
        var utag_data =
            {\"site_name\":\"631397\",
                \"site_section\":\"1\",
                \"page_section\":\"transfer_dsb\",
                \"page_category\":\"\",
                \"page_subcategory\":\"\",
                \"page_name\":\"\",
                \"page_type\":\"\",
                \"env_type\":\"dev\",
                \"language\":\"1\",
                \"customer_id\":\"353\",
                \"car_type\":\"\",
                \"customer_firstname\":\"\",
                \"customer_lastname\":\"\",
                \"email_address\":\"\",
                \"phone_number\":\"\",
                \"city\":\"\"
            };
        if (language ==='en'){
            utag_data[\"language\"]= \"2\" ;
        }else {
            utag_data[\"language\"]= \"1\";
        }

    </script>


    <script type=\"text/javascript\" >
        (function(a,b,c,d){
                a='https://tags.tiqcdn.com/utag/totalms/ms-eshop-station/prod/utag.js';
                b=document;
                c='script';
                d=b.createElement(c);
                d.src=a;
                d.type='text/java'+c;
                d.async=true;
                a=b.getElementsByTagName(c)[0];
                a.parentNode.insertBefore(d,a);
            }
        )();
    </script>


    <script>


\$(document).ready(function(){

        \$('.fixed-table-body').each(function(){
            \$(this).css(\"min-height\",\"500px\");
        });




    })

</script>

{% endblock javascripts %}

</body>
</html>
", "FrontendBundle:Default:select_country.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/Default/select_country.html.twig");
    }
}
