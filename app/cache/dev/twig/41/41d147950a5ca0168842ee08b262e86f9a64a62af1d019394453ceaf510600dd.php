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

/* FrontendBundle:Blocks:footer.html.twig */
class __TwigTemplate_1433c9c20f057b5ce2fd01ef23369b1fa8f0e4f721b75c6e0840762ba7f67992 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:Blocks:footer.html.twig"));

        // line 1
        echo "<footer>
    <div class=\"footer container\"  style=\"max-width: 1600px\"  >
        <div class=\"container\"  >
            <div class=\"row\">
                <br>
                <div class=\"col-lg-12  col-md-12 col-sm-12 col-xs-12\"  align=\"center\">

                        <span class=\"spandesc\" >
                            ";
        // line 9
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "HowToBuyHelp", []), "html", null, true));
        echo "
                        </span>
                    <br>
                    <div class=\"w100 clearfix\" style=\"padding-top: 20px\">
                        <ul class=\"orderStep orderStepLook2\" style=\"margin-bottom: 0;    margin-top: 10px; \">
                            <li>
                                <a class=\"steporder\" > <i style=\"background-color: #F7F9FA!important; color: #374649\" class=\"fa fa-map-marker\"></i> <span> 1.";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Point de retrait"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li >
                                <a class=\"steporder\" > <i style=\"background-color: #F7F9FA;color: #374649\" class=\"glyphicon glyphicon-shopping-cart\"></i> <span> 2.";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Panier"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li>
                                <a class=\"steporder\" > <i style=\"background-color: #F7F9FA;color: #374649\" class=\"fa fa-calendar\"></i><span> 3.";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Créneau"), "html", null, true);
        echo " </span></a>
                            </li>
                            <li>
                                <a class=\"steporder\" ><i style=\"background-color: #F7F9FA;color: #374649\" class=\"fa fa-check-square \"> </i><span>4.";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Conf"), "html", null, true);
        echo "</span></a>
                            </li>
                        </ul>
                        <!--/.orderStep end-->
                    </div>
                </div>
                <div class=\"col-lg-4  col-md-4 col-sm-4 col-xs-6\">

                    ";
        // line 32
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "CguFile", [])) {
            // line 33
            echo "                    <ul>
                        <li><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["condition_general_directory"] ?? $this->getContext($context, "condition_general_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "CguFile", []), "html", null, true);
            echo "\" target=\"_blank\">
                                <i     class=\"glyphicon glyphicon-play\" style=\"color: #ED0000;width: 24px;height: 24px\"></i>
                                <span class=\"spanlink\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Conditions Générales d'Utilisation"), "html", null, true);
            echo "</span>
                            </a></li>


                    </ul>
                    ";
        }
        // line 42
        echo "
                </div>

                <div class=\"col-lg-4  col-md-4 col-sm-4 col-xs-6\">
                    ";
        // line 46
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "PersonelDataFile", [])) {
            // line 47
            echo "
                    <ul>
                        <li><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, ($context["personal_data_directory"] ?? $this->getContext($context, "personal_data_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "PersonelDataFile", []), "html", null, true);
            echo "\" target=\"_blank\"><i
                                        class=\"glyphicon glyphicon-play\" style=\"color: #ED0000;width: 24px;height: 24px\"></i>
                                <span class=\"spanlink\">";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Données personnelles"), "html", null, true);
            echo "</span>
                            </a></li>
                    </ul>
                    ";
        }
        // line 55
        echo "
                </div>


                <div class=\"col-lg-4  col-md-4 col-sm-4 col-xs-6\">
                    ";
        // line 60
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "CgvFile", [])) {
            // line 61
            echo "
                    <ul class=\"list-unstyled footer-nav\">
                        <li><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, ($context["condition_vente_directory"] ?? $this->getContext($context, "condition_vente_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "CgvFile", []), "html", null, true);
            echo "\" id=\"condition_vente_link\" target=\"_blank\"><i class=\"glyphicon glyphicon-play\"  style=\"color: #ED0000;width: 24px;height: 24px\"></i>
                               <span class=\"spanlink\">";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Conditions Générales de Vente"), "html", null, true);
            echo "</span>

                            </a></li>
                    </ul>
                    ";
        }
        // line 69
        echo "
                </div>


                <div style=\"clear:both\" class=\"hide visible-xs\"></div>

            </div>

        </div>

    </div>
    <!--/.footer-->

    <!-- <div class=\"footer-bottom\" style=\"background: #f0e8de;\">
         <div class=\"container\">
             <ul style=\"list-style: none\">
             <li><p class=\"pull-right\" > Powered by <span style=\"\"><a href=\"http://app4mob.mobi\" target=\"_blank\"><b>APP4MOB</b></a></span></p></li>
             </ul>

         </div>
     </div>-->

      <style>

          .spandesc{
              font-family: Roboto-Regular,sans-serif;
              font-size: 14px;
              line-height: 22px;
              color: #374649;



          }
          .steporder{
              font-family: Roboto-Regular,sans-serif;
              font-weight : 400;
              font-size : 14px;
              line-height : 24px;
              Color : #374649;
              cursor: default !important;
          }
          .spanlink{
              font-family: Roboto-Regular,sans-serif;
              font-weight: bold;
              font-size: 16px;
              color: #ED0000;



          }

    </style>
</footer>

";
        // line 163
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Blocks:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 163,  155 => 69,  147 => 64,  141 => 63,  137 => 61,  135 => 60,  128 => 55,  121 => 51,  114 => 49,  110 => 47,  108 => 46,  102 => 42,  93 => 36,  86 => 34,  83 => 33,  81 => 32,  70 => 24,  64 => 21,  58 => 18,  52 => 15,  43 => 9,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"footer container\"  style=\"max-width: 1600px\"  >
        <div class=\"container\"  >
            <div class=\"row\">
                <br>
                <div class=\"col-lg-12  col-md-12 col-sm-12 col-xs-12\"  align=\"center\">

                        <span class=\"spandesc\" >
                            {{ app.session.get(\"pays\").HowToBuyHelp | nl2br}}
                        </span>
                    <br>
                    <div class=\"w100 clearfix\" style=\"padding-top: 20px\">
                        <ul class=\"orderStep orderStepLook2\" style=\"margin-bottom: 0;    margin-top: 10px; \">
                            <li>
                                <a class=\"steporder\" > <i style=\"background-color: #F7F9FA!important; color: #374649\" class=\"fa fa-map-marker\"></i> <span> 1.{{ \"Point de retrait\" | trans }}</span></a>
                            </li>
                            <li >
                                <a class=\"steporder\" > <i style=\"background-color: #F7F9FA;color: #374649\" class=\"glyphicon glyphicon-shopping-cart\"></i> <span> 2.{{ \"Panier\" | trans }}</span></a>
                            </li>
                            <li>
                                <a class=\"steporder\" > <i style=\"background-color: #F7F9FA;color: #374649\" class=\"fa fa-calendar\"></i><span> 3.{{\"Créneau\" | trans}} </span></a>
                            </li>
                            <li>
                                <a class=\"steporder\" ><i style=\"background-color: #F7F9FA;color: #374649\" class=\"fa fa-check-square \"> </i><span>4.{{ \"Conf\" | trans }}</span></a>
                            </li>
                        </ul>
                        <!--/.orderStep end-->
                    </div>
                </div>
                <div class=\"col-lg-4  col-md-4 col-sm-4 col-xs-6\">

                    {% if app.session.get('pays').CguFile %}
                    <ul>
                        <li><a href=\"{{ condition_general_directory }}/{{ app.session.get('pays').CguFile }}\" target=\"_blank\">
                                <i     class=\"glyphicon glyphicon-play\" style=\"color: #ED0000;width: 24px;height: 24px\"></i>
                                <span class=\"spanlink\">{{\"Conditions Générales d'Utilisation\" | trans}}</span>
                            </a></li>


                    </ul>
                    {% endif %}

                </div>

                <div class=\"col-lg-4  col-md-4 col-sm-4 col-xs-6\">
                    {% if app.session.get('pays').PersonelDataFile %}

                    <ul>
                        <li><a href=\"{{ personal_data_directory }}/{{ app.session.get('pays').PersonelDataFile }}\" target=\"_blank\"><i
                                        class=\"glyphicon glyphicon-play\" style=\"color: #ED0000;width: 24px;height: 24px\"></i>
                                <span class=\"spanlink\">{{\"Données personnelles\" | trans}}</span>
                            </a></li>
                    </ul>
                    {% endif %}

                </div>


                <div class=\"col-lg-4  col-md-4 col-sm-4 col-xs-6\">
                    {% if app.session.get('pays').CgvFile %}

                    <ul class=\"list-unstyled footer-nav\">
                        <li><a href=\"{{ condition_vente_directory }}/{{ app.session.get('pays').CgvFile }}\" id=\"condition_vente_link\" target=\"_blank\"><i class=\"glyphicon glyphicon-play\"  style=\"color: #ED0000;width: 24px;height: 24px\"></i>
                               <span class=\"spanlink\">{{\"Conditions Générales de Vente\" | trans}}</span>

                            </a></li>
                    </ul>
                    {% endif %}

                </div>


                <div style=\"clear:both\" class=\"hide visible-xs\"></div>

            </div>

        </div>

    </div>
    <!--/.footer-->

    <!-- <div class=\"footer-bottom\" style=\"background: #f0e8de;\">
         <div class=\"container\">
             <ul style=\"list-style: none\">
             <li><p class=\"pull-right\" > Powered by <span style=\"\"><a href=\"http://app4mob.mobi\" target=\"_blank\"><b>APP4MOB</b></a></span></p></li>
             </ul>

         </div>
     </div>-->

      <style>

          .spandesc{
              font-family: Roboto-Regular,sans-serif;
              font-size: 14px;
              line-height: 22px;
              color: #374649;



          }
          .steporder{
              font-family: Roboto-Regular,sans-serif;
              font-weight : 400;
              font-size : 14px;
              line-height : 24px;
              Color : #374649;
              cursor: default !important;
          }
          .spanlink{
              font-family: Roboto-Regular,sans-serif;
              font-weight: bold;
              font-size: 16px;
              color: #ED0000;



          }

    </style>
</footer>

{#
<div class=\"cookieinfo\"
     style=\"display:none;border-top: 3px solid #df0c36;position: fixed; left: 0px; right: 0px; height: auto; min-height: 21px; z-index: 2147483647; background: rgb(255, 255, 255); color: rgb(102, 102, 102); line-height: 21px; padding: 8px 18px; font-family: verdana, arial, sans-serif; font-size: 14px; text-align: left; bottom: 0px; opacity: 1;\">
    <div class=\"cookieinfo-close cookiclose\"

         onclick=\"acceptCookies()\">
        {{ \"Ok, J'accepte!\" | trans}}
    </div>
    <span style=\"display:block;padding:5px 0 5px 0;font-family: Roboto-Regular,sans-serif;color:#374649;font-size: 13px;line-height: 24px ;font-weight: 400\">{{ app.session.get(\"pays\").CookiesBanner | nl2br}}<br> <a
                href=\"{{ personal_data_directory }}/{{ app.session.get(\"pays\").personelDataFile }}\" style=\"text-decoration: none; color: #ED0000;font-family: Roboto-Regular,sans-serif;font-size: 13px;font-weight:bold;line-height: 24px\" target=\"_blank\">{{\"Politiquedesdonnées\" | trans}}</a></span>
</div>
<script>
    \$(\"document\").ready(function () {
        hideCookies();
        \$.get(\"{{ path('getConditionVente') }}\", function (data, status) {
            if (status === \"success\") {
                \$(\"#condition_vente_link\").attr(\"href\", data);
            }
        });
    });

    function acceptCookies() {
        localStorage.setItem('localstorage_accepted', '1');
        hideCookies();
    }

    function hideCookies() {
        if (localStorage.getItem(\"localstorage_accepted\") !== null && localStorage.getItem(\"localstorage_accepted\") !== \"\") {
            \$(\".cookieinfo\").hide();
        }
        else{
            \$(\".cookieinfo\").show();
        }

    }


</script>

#}




", "FrontendBundle:Blocks:footer.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/Blocks/footer.html.twig");
    }
}
