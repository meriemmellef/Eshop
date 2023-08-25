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

/* @Frontend/panier/livraison.html.twig */
class __TwigTemplate_0ef87d79564dd03d1f934f4dcf75d96ce019c0d557d32b671616ce6cd779bcd2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'breadcrump' => [$this, 'block_breadcrump'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/panier/livraison.html.twig"));

        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutBreadcrumps.html.twig", "@Frontend/panier/livraison.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pickmeup.css?v2"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_breadcrump($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrump"));

        // line 10
        echo "    <div class=\"row\" style=\"margin-right: 2%;margin-left: 2%\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">


                <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accueil", [], "messages"), "html", null, true);
        echo "</a></li>
                <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Panier", [], "messages"), "html", null, true);
        echo "</a></li>

                <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                    ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Créneau", [], "messages"), "html", null, true);
        echo "</li>
            </ul>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    <!--/.row-->


    <!--/.row-->

    <div class=\"row\" style=\"margin-right: 2%;margin-left: 2%\">
        <div class=\"col-lg-9 col-md-9 col-sm-12\">
            <div class=\"row userInfo\">
                <div class=\"col-xs-12 col-sm-12\">
                    <div class=\"w100 clearfix\">
                        <ul class=\"orderStep orderStepLook2\">

                            <li>
                                <a class=\"inputtitle\" style=\"cursor: default;\"> <i class=\"fa fa-map-marker\"></i> <span> 1.";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Point de retrait"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li >
                                <a class=\"inputtitle\" style=\"cursor: default;\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\"> <i class=\"glyphicon glyphicon-shopping-cart\"></i> <span> 2.";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Panier"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li class=\"active\">
                                <a > <i class=\"fa fa-calendar\"></i><span> 3.";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Créneau"), "html", null, true);
        echo " </span></a>
                            </li>

                            <li>
                                <a class=\"inputtitle\" style=\"cursor: default;\"><i class=\"fa fa-check-square \"> </i><span>4.";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Conf"), "html", null, true);
        echo "</span></a>
                            </li>
                        </ul>
                        <!--/.orderStep end-->
                    </div>


                    <style>
                        .radio-adresse label{
                            margin-bottom: 20px;
                            font-weight: 300;
                        }
                        .radio-adresse .fa{
                            vertical-align: top;
                            margin-top: 4px;
                        }
                        .delegation_select .delegation{
                            width: 90% !important;
                            display: inline;
                        }
                    </style>


                    <div class=\"w100 clearfix\"  style=\"margin-bottom: 20px\">
                        <!--/row end-->
                        <span class=\"titlbleu\"><i class=\"glyphicon glyphicon-calendar\"></i> ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choisir une date de retrait"), "html", null, true);
        echo " </span>
                        <div class=\"row\" style=\"margin-top: 25px\">
                            ";
        // line 76
        if (($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "isOpen", []) == false)) {
            // line 77
            echo "                            <div class=\"col-md-8    \">
                                <h3  class=\"titlbleu\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("La station ne travaille pas les dimanches"), "html", null, true);
            echo "</h3>
                            <input id=\"isOpen\" value=\"false\" hidden >
                            </div>
                            ";
        } else {
            // line 82
            echo "                                <div class=\"col-md-8 \">
                                    <input id=\"isOpen\" value=\"true\" hidden >

                                </div>
                            ";
        }
        // line 87
        echo "                            <div class=\"col-md-8    \">

                                <h3 class=\"titlered\"> ";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date de retrait"), "html", null, true);
        echo ": </h3>
                                <div class=\"single\"  id=\"single\"></div>
                            </div>

                            <style>
                                .iCheck-margin {
                                    margin-bottom: 15px;
                                }
                            </style>
                            <div class=\"col-md-4\">
                                <h3 class=\"titlered\"> ";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Heure de retrait"), "html", null, true);
        echo ": </h3>
                                ";
        // line 100
        $context["i"] = 0;
        // line 101
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "horaires", []));
        foreach ($context['_seq'] as $context["_key"] => $context["horaire"]) {
            // line 102
            echo "                                    ";
            $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
            // line 103
            echo "                                <div id=\"div-";
            echo twig_escape_filter($this->env, $context["horaire"], "html", null, true);
            echo "\">
                                    <input type=\"radio\" name=\"periode\"  id=\"periode-";
            // line 104
            echo twig_escape_filter($this->env, $context["horaire"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["horaire"], "html", null, true);
            echo "\"
                                            ";
            // line 105
            if ((($context["i"] ?? $this->getContext($context, "i")) == 1)) {
                echo " checked=\"\" ";
            }
            echo ">
                                    <label style=\"margin-bottom: 15px; font-family: Roboto-Regular, sans-serif\" for=\"periode-";
            // line 106
            echo twig_escape_filter($this->env, $context["horaire"], "html", null, true);
            echo "\" class=\"radio-inline\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "horaireFromIndex", [0 => $context["horaire"]], "method"), "html", null, true);
            echo "</label>
                                </div>
                               <br>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "


                            </div>
                        </div>

                    </div>
                    <div class=\"cartFooter w100\">
                        <div class=\"box-footer\">

                            <div class=\"pull-left\">
                                <a href=\"/\">
                                    <button type=\"submit\" class=\"btn  btn_regist\" style=\"margin-right: 10px;margin-left: 10px\">
                                        <i class=\"fa fa-arrow-left\"></i>&nbsp; ";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Retour à l'accueil"), "html", null, true);
        echo "
                                    </button>
                                </a>
                            </div>



                            <div class=\"pull-right\">
                                <a  onclick=\"goToAdresse()\" >
                                    <button type=\"submit\" class=\"btn btn_card\" style=\"margin-right: 10px;margin-left: 10px\">
                                        ";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valider"), "html", null, true);
        echo " &nbsp; <i class=\"fa fa-arrow-circle-right\"></i>
                                    </button>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!--/ cartFooter -->

                </div>
            </div>
            <!--/row end-->

        </div>
        
    </div>
    <!--/row-->

    <div style=\"clear:both\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 153
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 154
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/pickmeup.js?v2"), "html", null, true);
        echo "\"></script>
    <script>
        selected_date = new Date();
        selected_date.setDate(selected_date.getDate())
        var date_now=new Date()
        if(selected_date.toISOString().slice(0,10) == date_now.toISOString().slice(0,10)){

            var element1 = document.getElementById('div-1');
            var element2 = document.getElementById('div-2');
            var element3 = document.getElementById('div-3');
            var element4 = document.getElementById('div-4');
            var element5 = document.getElementById('div-5');
            if(date_now.getHours()>= 8 && element1 ){

                element1.style.display='none';
                \$('input:radio[name=\"periode\"][value=\"1\"]').attr('checked', false);
                \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', true);
            }
            if(date_now.getHours()>= 10 && element2 ){
                element2.style.display='none';
                \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', false);
                \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', true);
            }
            if(date_now.getHours()>= 12 && element3){
                element3.style.display='none';
                \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', false);
                \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', true);
            }
            if(date_now.getHours()>= 14 && element4){
                element4.style.display='none';
                \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', false);
                \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', true);
            }
            if(date_now.getHours()>= 16 && element5){
                element5.style.display='none';
                \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', false);


            }

        }

        ";
        // line 197
        if ($this->getAttribute(($context["date"] ?? null), "periode", [], "any", true, true)) {
            // line 198
            echo "        \$('input:radio[name=\"periode\"][value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["date"] ?? $this->getContext($context, "date")), "periode", []), "html", null, true);
            echo "\"]').attr('checked', true);
        ";
        }
        // line 200
        echo "
        ";
        // line 201
        if ($this->getAttribute(($context["date"] ?? null), "date", [], "any", true, true)) {
            // line 202
            echo "        selected_date = \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["date"] ?? $this->getContext($context, "date")), "date", []), "html", null, true);
            echo "\";
        ";
        }
        // line 204
        echo "
        element=pickmeup('#single', {
            flat: true,
            render : function (date) {
                new_date = new Date();
                new_date.setDate(date.getDate())

                if (new_date.toISOString().slice(0,10)  < date_now.toISOString().slice(0,10)) {
                    return {disabled : true, class_name : 'date-in-past'};
                }

                var isOpen = document.getElementById(\"isOpen\").value ;
                if ((new_date.getDay() == 0 ) && (isOpen == 'false')){
                    return {disabled : true, class_name : 'date-in-past'};
                }
                return {};
            }
        }).set_date(selected_date);
        document.getElementById(\"single\").addEventListener('pickmeup-change', function (e)
        {
            var dd = date_now.getDate();
            var mm = date_now.getMonth();
            var yyyy = date_now.getFullYear();
            today = dd+'-'+mm+'-'+yyyy;

            if(e.detail.formatted_date > today){

                var element1 = document.getElementById('div-1');
                var element2 = document.getElementById('div-2');
                var element3 = document.getElementById('div-3');
                var element4 = document.getElementById('div-4');
                var element5 = document.getElementById('div-5');
                if(date_now.getHours()>= 16 && element5){
                    element5.style.display='block';
                    \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', true);
                }
                if(date_now.getHours()>= 14 && element4){
                    element4.style.display='block';
                    \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', true);
                }
                if(date_now.getHours()>= 12 && element3){
                    element3.style.display='block';
                    \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', true);
                }
                if(date_now.getHours()>= 10 && element2 ){
                    element2.style.display='block';
                    \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', true);
                }
                if(date_now.getHours()>= 8 && element1 ){
                    element1.style.display='block';
                    \$('input:radio[name=\"periode\"][value=\"1\"]').attr('checked', true);
                }





            }
            else{
                var element1 = document.getElementById('div-1');
                var element2 = document.getElementById('div-2');
                var element3 = document.getElementById('div-3');
                var element4 = document.getElementById('div-4');
                var element5 = document.getElementById('div-5');
                if(date_now.getHours()>= 8 && element1 ){

                    element1.style.display='none';
                    \$('input:radio[name=\"periode\"][value=\"1\"]').attr('checked', false);
                    \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', true);
                }
                if(date_now.getHours()>= 10 && element2 ){
                    element2.style.display='none';
                    \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', false);
                    \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', true);
                }
                if(date_now.getHours()>= 12 && element3){
                    element3.style.display='none';
                    \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', false);
                    \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', true);
                }
                if(date_now.getHours()>= 14 && element4){
                    element4.style.display='none';
                    \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', false);
                    \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', true);
                }
                if(date_now.getHours()>= 16 && element5){
                    element5.style.display='none';
                    \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', false);


                }
            }
        })
    </script>
    <script>



        function goToAdresse() {
            var isOpen = document.getElementById(\"isOpen\").value ;

            date = pickmeup('.single').get_date(\"Y-m-d\");
            periode = \$('input:radio[name=periode]:checked').val();
            //livraison = \$('input:radio[name=livraison]:checked').val();
            //facturation = \$('input:radio[name=facturation]:checked').val();
            var date_retrait=new Date(pickmeup('.single').get_date(\"Y-m-d\"))
            var date_now=new Date()
            if(date_retrait.toISOString().slice(0,10) < date_now.toISOString().slice(0,10)){
                \$(\".btn-small\").tooltip(\"destroy\");
                \$(\".btn-small\").attr(\"data-toggle\",\"tooltip\");
                \$(\".btn-small\").attr(\"title\",\"Le retrait n´est possible qu´à partir d'aujourd'hui.\");
                \$(\".btn-small\").tooltip(\"show\");
            }
            else if ((date_retrait.getDay() == 0 ) && (isOpen == 'false')){
                \$(\".btn-small\").tooltip(\"destroy\");
                \$(\".btn-small\").attr(\"data-toggle\",\"tooltip\");
                \$(\".btn-small\").attr(\"title\",\"La station ne travaille pas \\n  les dimanches\");
                \$(\".btn-small\").tooltip(\"show\");
            }
            else{
                \$(\".btn-small\").tooltip(\"destroy\");
                window.location.href = '";
        // line 325
        echo "validationAdresse";
        echo "?date=' + date + '&periode=' + periode;
            }

        }


       /* \$(\"#btn-add-adress\").click(function(event){
            console.log(\"tteell\");
            var reg = new RegExp(/^\\+216 [0-9]*\$/);
        if (!reg.test(\$(\"#webbundle_utilisateursadresses_telephone\").val())) {
            event.preventDefault();
            \$(\"#webbundle_utilisateursadresses_telephone\").attr(\"data-toggle\",\"tooltip\");
            \$(\"#webbundle_utilisateursadresses_telephone\").attr(\"data-placement\",\"bottom\");
            \$(\"#webbundle_utilisateursadresses_telephone\").attr(\"title\",\"Vérifier format du télephone \\n Exp: +216 90909090\");
            \$(\"#webbundle_utilisateursadresses_telephone\").tooltip(\"show\");
        }else{
            \$(\"#webbundle_utilisateursadresses_telephone\").tooltip(\"destroy\");
        }
        });*/
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/panier/livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 325,  392 => 204,  386 => 202,  384 => 201,  381 => 200,  375 => 198,  373 => 197,  328 => 155,  323 => 154,  317 => 153,  290 => 133,  277 => 123,  262 => 110,  250 => 106,  244 => 105,  238 => 104,  233 => 103,  230 => 102,  225 => 101,  223 => 100,  219 => 99,  206 => 89,  202 => 87,  195 => 82,  188 => 78,  185 => 77,  183 => 76,  178 => 74,  150 => 49,  143 => 45,  135 => 42,  129 => 39,  113 => 25,  107 => 24,  95 => 19,  87 => 16,  83 => 15,  76 => 10,  70 => 9,  60 => 6,  54 => 4,  48 => 3,  32 => 1,);
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

{% block stylesheets %}
    {{ parent() }}

    <link href=\"{{ asset('assets/css/pickmeup.css?v2') }}\" rel=\"stylesheet\">

{% endblock stylesheets %}
{% block breadcrump %}
    <div class=\"row\" style=\"margin-right: 2%;margin-left: 2%\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">


                <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"/\">{{ \"Accueil\" | trans({}, 'messages') }}</a></li>
                <li><a style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\" href=\"{{ path(\"panier\") }}\">{{ \"Panier\" | trans({}, 'messages') }}</a></li>

                <li style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\">
                    {{\"Créneau\" | trans({}, 'messages')}}</li>
            </ul>
        </div>
    </div>
{% endblock breadcrump %}
{% block content %}

    <!--/.row-->


    <!--/.row-->

    <div class=\"row\" style=\"margin-right: 2%;margin-left: 2%\">
        <div class=\"col-lg-9 col-md-9 col-sm-12\">
            <div class=\"row userInfo\">
                <div class=\"col-xs-12 col-sm-12\">
                    <div class=\"w100 clearfix\">
                        <ul class=\"orderStep orderStepLook2\">

                            <li>
                                <a class=\"inputtitle\" style=\"cursor: default;\"> <i class=\"fa fa-map-marker\"></i> <span> 1.{{ \"Point de retrait\" | trans }}</span></a>
                            </li>
                            <li >
                                <a class=\"inputtitle\" style=\"cursor: default;\" href=\"{{ path(\"panier\") }}\"> <i class=\"glyphicon glyphicon-shopping-cart\"></i> <span> 2.{{ \"Panier\" | trans }}</span></a>
                            </li>
                            <li class=\"active\">
                                <a > <i class=\"fa fa-calendar\"></i><span> 3.{{\"Créneau\" | trans}} </span></a>
                            </li>

                            <li>
                                <a class=\"inputtitle\" style=\"cursor: default;\"><i class=\"fa fa-check-square \"> </i><span>4.{{ \"Conf\" | trans }}</span></a>
                            </li>
                        </ul>
                        <!--/.orderStep end-->
                    </div>


                    <style>
                        .radio-adresse label{
                            margin-bottom: 20px;
                            font-weight: 300;
                        }
                        .radio-adresse .fa{
                            vertical-align: top;
                            margin-top: 4px;
                        }
                        .delegation_select .delegation{
                            width: 90% !important;
                            display: inline;
                        }
                    </style>


                    <div class=\"w100 clearfix\"  style=\"margin-bottom: 20px\">
                        <!--/row end-->
                        <span class=\"titlbleu\"><i class=\"glyphicon glyphicon-calendar\"></i> {{ \"Choisir une date de retrait\" | trans }} </span>
                        <div class=\"row\" style=\"margin-top: 25px\">
                            {% if station.isOpen == false %}
                            <div class=\"col-md-8    \">
                                <h3  class=\"titlbleu\"><i class=\"fa fa-exclamation-circle\"></i> {{ \"La station ne travaille pas les dimanches\" | trans }}</h3>
                            <input id=\"isOpen\" value=\"false\" hidden >
                            </div>
                            {% else %}
                                <div class=\"col-md-8 \">
                                    <input id=\"isOpen\" value=\"true\" hidden >

                                </div>
                            {% endif %}
                            <div class=\"col-md-8    \">

                                <h3 class=\"titlered\"> {{ \"Date de retrait\" | trans }}: </h3>
                                <div class=\"single\"  id=\"single\"></div>
                            </div>

                            <style>
                                .iCheck-margin {
                                    margin-bottom: 15px;
                                }
                            </style>
                            <div class=\"col-md-4\">
                                <h3 class=\"titlered\"> {{ \"Heure de retrait\" | trans }}: </h3>
                                {% set i = 0 %}
                                {%  for   horaire in station.horaires %}
                                    {% set i = i + 1 %}
                                <div id=\"div-{{ horaire }}\">
                                    <input type=\"radio\" name=\"periode\"  id=\"periode-{{ horaire }}\" value=\"{{ horaire }}\"
                                            {% if i == 1 %} checked=\"\" {% endif %}>
                                    <label style=\"margin-bottom: 15px; font-family: Roboto-Regular, sans-serif\" for=\"periode-{{ horaire }}\" class=\"radio-inline\">{{ station.horaireFromIndex(horaire) }}</label>
                                </div>
                               <br>
                                {% endfor %}



                            </div>
                        </div>

                    </div>
                    <div class=\"cartFooter w100\">
                        <div class=\"box-footer\">

                            <div class=\"pull-left\">
                                <a href=\"/\">
                                    <button type=\"submit\" class=\"btn  btn_regist\" style=\"margin-right: 10px;margin-left: 10px\">
                                        <i class=\"fa fa-arrow-left\"></i>&nbsp; {{\"Retour à l'accueil\" | trans}}
                                    </button>
                                </a>
                            </div>



                            <div class=\"pull-right\">
                                <a  onclick=\"goToAdresse()\" >
                                    <button type=\"submit\" class=\"btn btn_card\" style=\"margin-right: 10px;margin-left: 10px\">
                                        {{ \"Valider\" | trans }} &nbsp; <i class=\"fa fa-arrow-circle-right\"></i>
                                    </button>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!--/ cartFooter -->

                </div>
            </div>
            <!--/row end-->

        </div>
        
    </div>
    <!--/row-->

    <div style=\"clear:both\"></div>
{% endblock  %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/pickmeup.js?v2') }}\"></script>
    <script>
        selected_date = new Date();
        selected_date.setDate(selected_date.getDate())
        var date_now=new Date()
        if(selected_date.toISOString().slice(0,10) == date_now.toISOString().slice(0,10)){

            var element1 = document.getElementById('div-1');
            var element2 = document.getElementById('div-2');
            var element3 = document.getElementById('div-3');
            var element4 = document.getElementById('div-4');
            var element5 = document.getElementById('div-5');
            if(date_now.getHours()>= 8 && element1 ){

                element1.style.display='none';
                \$('input:radio[name=\"periode\"][value=\"1\"]').attr('checked', false);
                \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', true);
            }
            if(date_now.getHours()>= 10 && element2 ){
                element2.style.display='none';
                \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', false);
                \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', true);
            }
            if(date_now.getHours()>= 12 && element3){
                element3.style.display='none';
                \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', false);
                \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', true);
            }
            if(date_now.getHours()>= 14 && element4){
                element4.style.display='none';
                \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', false);
                \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', true);
            }
            if(date_now.getHours()>= 16 && element5){
                element5.style.display='none';
                \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', false);


            }

        }

        {% if date.periode is defined %}
        \$('input:radio[name=\"periode\"][value=\"{{ date.periode }}\"]').attr('checked', true);
        {% endif %}

        {% if date.date  is defined %}
        selected_date = \"{{ date.date }}\";
        {% endif %}

        element=pickmeup('#single', {
            flat: true,
            render : function (date) {
                new_date = new Date();
                new_date.setDate(date.getDate())

                if (new_date.toISOString().slice(0,10)  < date_now.toISOString().slice(0,10)) {
                    return {disabled : true, class_name : 'date-in-past'};
                }

                var isOpen = document.getElementById(\"isOpen\").value ;
                if ((new_date.getDay() == 0 ) && (isOpen == 'false')){
                    return {disabled : true, class_name : 'date-in-past'};
                }
                return {};
            }
        }).set_date(selected_date);
        document.getElementById(\"single\").addEventListener('pickmeup-change', function (e)
        {
            var dd = date_now.getDate();
            var mm = date_now.getMonth();
            var yyyy = date_now.getFullYear();
            today = dd+'-'+mm+'-'+yyyy;

            if(e.detail.formatted_date > today){

                var element1 = document.getElementById('div-1');
                var element2 = document.getElementById('div-2');
                var element3 = document.getElementById('div-3');
                var element4 = document.getElementById('div-4');
                var element5 = document.getElementById('div-5');
                if(date_now.getHours()>= 16 && element5){
                    element5.style.display='block';
                    \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', true);
                }
                if(date_now.getHours()>= 14 && element4){
                    element4.style.display='block';
                    \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', true);
                }
                if(date_now.getHours()>= 12 && element3){
                    element3.style.display='block';
                    \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', true);
                }
                if(date_now.getHours()>= 10 && element2 ){
                    element2.style.display='block';
                    \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', true);
                }
                if(date_now.getHours()>= 8 && element1 ){
                    element1.style.display='block';
                    \$('input:radio[name=\"periode\"][value=\"1\"]').attr('checked', true);
                }





            }
            else{
                var element1 = document.getElementById('div-1');
                var element2 = document.getElementById('div-2');
                var element3 = document.getElementById('div-3');
                var element4 = document.getElementById('div-4');
                var element5 = document.getElementById('div-5');
                if(date_now.getHours()>= 8 && element1 ){

                    element1.style.display='none';
                    \$('input:radio[name=\"periode\"][value=\"1\"]').attr('checked', false);
                    \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', true);
                }
                if(date_now.getHours()>= 10 && element2 ){
                    element2.style.display='none';
                    \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', false);
                    \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', true);
                }
                if(date_now.getHours()>= 12 && element3){
                    element3.style.display='none';
                    \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', false);
                    \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', true);
                }
                if(date_now.getHours()>= 14 && element4){
                    element4.style.display='none';
                    \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', false);
                    \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', true);
                }
                if(date_now.getHours()>= 16 && element5){
                    element5.style.display='none';
                    \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', false);


                }
            }
        })
    </script>
    <script>



        function goToAdresse() {
            var isOpen = document.getElementById(\"isOpen\").value ;

            date = pickmeup('.single').get_date(\"Y-m-d\");
            periode = \$('input:radio[name=periode]:checked').val();
            //livraison = \$('input:radio[name=livraison]:checked').val();
            //facturation = \$('input:radio[name=facturation]:checked').val();
            var date_retrait=new Date(pickmeup('.single').get_date(\"Y-m-d\"))
            var date_now=new Date()
            if(date_retrait.toISOString().slice(0,10) < date_now.toISOString().slice(0,10)){
                \$(\".btn-small\").tooltip(\"destroy\");
                \$(\".btn-small\").attr(\"data-toggle\",\"tooltip\");
                \$(\".btn-small\").attr(\"title\",\"Le retrait n´est possible qu´à partir d'aujourd'hui.\");
                \$(\".btn-small\").tooltip(\"show\");
            }
            else if ((date_retrait.getDay() == 0 ) && (isOpen == 'false')){
                \$(\".btn-small\").tooltip(\"destroy\");
                \$(\".btn-small\").attr(\"data-toggle\",\"tooltip\");
                \$(\".btn-small\").attr(\"title\",\"La station ne travaille pas \\n  les dimanches\");
                \$(\".btn-small\").tooltip(\"show\");
            }
            else{
                \$(\".btn-small\").tooltip(\"destroy\");
                window.location.href = '{{ \"validationAdresse\" }}?date=' + date + '&periode=' + periode;
            }

        }


       /* \$(\"#btn-add-adress\").click(function(event){
            console.log(\"tteell\");
            var reg = new RegExp(/^\\+216 [0-9]*\$/);
        if (!reg.test(\$(\"#webbundle_utilisateursadresses_telephone\").val())) {
            event.preventDefault();
            \$(\"#webbundle_utilisateursadresses_telephone\").attr(\"data-toggle\",\"tooltip\");
            \$(\"#webbundle_utilisateursadresses_telephone\").attr(\"data-placement\",\"bottom\");
            \$(\"#webbundle_utilisateursadresses_telephone\").attr(\"title\",\"Vérifier format du télephone \\n Exp: +216 90909090\");
            \$(\"#webbundle_utilisateursadresses_telephone\").tooltip(\"show\");
        }else{
            \$(\"#webbundle_utilisateursadresses_telephone\").tooltip(\"destroy\");
        }
        });*/
    </script>
{% endblock %}
", "@Frontend/panier/livraison.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\panier\\livraison.html.twig");
    }
}
