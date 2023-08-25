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

/* FrontendBundle:panier:modereception.html.twig */
class __TwigTemplate_75cd894b11267123309689c0842c10ccc5d710e0df3c031880facb679ef27e64 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return "FrontendBundle:Layouts:layoutBreadcrumps.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:panier:modereception.html.twig"));

        // line 1
        $context["totalHT"] = 0;
        // line 2
        $context["totalTTC"] = 0;
        // line 3
        $context["refTva"] = [];
        // line 4
        $this->parent = $this->loadTemplate("FrontendBundle:Layouts:layoutBreadcrumps.html.twig", "FrontendBundle:panier:modereception.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "


    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pickmeup.css?v4"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "
    <!--/.row-->

    <!--/.row-->
    <style>

        .radio-adresse label {
            margin-bottom: 20px;
            font-weight: 300;
        }

        .radio-adresse .fa {
            vertical-align: top;
            margin-top: 4px;
        }

        .delegation_select .delegation {
            width: 90% !important;
            display: inline;
            font-family: Roboto-Regular, sans-serif !important;
        }


        input[type='radio'] {
            -webkit-appearance: none;
            width: 20px;
            height: 20px;
            border: 1px solid #e2e2e2;
            border-radius: 50%;
            outline: none;
            box-shadow: 0 0 1px 0 #e2e2e2 inset;
        }

        input[type='radio']:hover {
            box-shadow: 0 0 1px 0 #e2e2e2 inset;
        }

        input[type='radio']:before {
            content: '';
            display: block;
            width: 50%;
            height: 50%;
            margin: 20% auto;
            border-radius: 50%;
        }

        input[type='radio']:checked:before {
            background: #dd1d36;
        }


    </style>



    <div class=\"row userInfo\" style=\"margin-right: 2%;margin-left: 2%\">


        <!--
                <div class=\"w100 clearfix\">
                    <ul class=\"orderStep orderStepLook2\">
                        <li>
                            <a class=\"inputtitle\" style=\"cursor: default;\"> <i class=\"fa fa-map-marker\"></i> <span> 1.";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Point de retrait"), "html", null, true);
        echo "</span></a>
                        </li>
                        <li >
                            <a class=\"inputtitle\" style=\"cursor: default;\" href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\"> <i class=\"glyphicon glyphicon-shopping-cart\"></i> <span> 2.";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Panier"), "html", null, true);
        echo "</span></a>

                        </li>
                        <li class=\"active\">
                            <a > <i class=\"fa fa-calendar\"></i><span> 3.";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mode de reception"), "html", null, true);
        echo " </span></a>
                        </li>


                        <li>
                            <a  class=\"inputtitle\" style=\"cursor: default;\"><i class=\"fa fa-check-square \"> </i><span>4.";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Conf"), "html", null, true);
        echo "</span></a>
                        </li>

                    </ul>
                </div>

                -->


        <div class=\"col-lg-12 col-md-12 col-xs-12 col-sm-12 \">


            <div class=\"row\">
                <div class=\"col-lg-6 col-md-7\">
                    <!--- breadcrump--->

                    <style>
                        /* Custom style for changing separator  */
                        .breadcrumb-item + .breadcrumb-item::before {
                            content: \">\";
                        }
                    </style>
                    <div class=\"breadcrumbDiv \">
                        <ul class=\"breadcrumb\">


                            <li class=\"breadcrumb-item \"><a
                                        style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\"
                                        href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Panier", [], "messages"), "html", null, true);
        echo "</a></li>
                            <li class=\"breadcrumb-item \"><a
                                        style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mode de reception", [], "messages"), "html", null, true);
        echo "</a>
                            </li>

                            <li class=\"breadcrumb-item \"
                                style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #a1a1a1 !important;\"> ";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("validation", [], "messages"), "html", null, true);
        echo "</li>

                        </ul>
                    </div>


                    <!--- breadcrump--->


                    <div style=\"margin-bottom: 25px\">
                        <span class=\"titlered\"> ";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mode de réception", [], "messages"), "html", null, true);
        echo " : </span> <br>
                        <span class=\"spanText\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sélectionnez votre mode de réception de la commande", [], "messages"), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"w100 clearfix\" style=\"margin-bottom: 20px\">
                        <!--/row end-->
                        <div class=\"row\">


                            <div class=\"col-lg-6 col-md-6\">
                                <div class=\"stileone\"
                                     style=\"background: #F7F9FA;border: solid 1px #ED0000;border-radius:10px;padding:11px 58px 11px 11px;width:fit-content\">
                                    <input type=\"radio\" name=\"mode\" id=\"driveradio\" value=\"0\" checked>
                                    <label for=\"driveradio\" class=\"radio-inline spanText\"><i
                                                class=\"fa fa-shopping-cart\"></i>
                                        ";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drive", [], "messages"), "html", null, true);
        echo "</label>

                                </div>

                            </div>


                            ";
        // line 154
        if (($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "isDelivered", []) == true)) {
            // line 155
            echo "                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"stiletwo\" style=\"padding:11px 58px 11px 11px;width:fit-content\">
                                        <input type=\"radio\" name=\"mode\" id=\"livraisonradio\" value=\"1\">
                                        <label for=\"livraisonradio\" class=\"radio-inline spanText\"><i
                                                    class=\"fa fa-truck\"></i>
                                            ";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Livraison à domicile", [], "messages"), "html", null, true);
            echo "</label>

                                    </div>


                                    <div class=\" \" style=\"margin-top: 10px;width: fit-content\">
                                        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\"
                                             style=\"font-family: Roboto-Regular, sans-serif!important;\">
                                            ";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pour la livraison à domicile, il faut une commande d´un montant minimum de", [], "messages"), "html", null, true);
            echo "
                                            ";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "minprixLivraison", []), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "
                                            <br>
                                            ";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("prix de livraison", [], "messages"), "html", null, true);
            echo "
                                            : ";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "prixLivraison", []), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method")), "html", null, true);
            echo "
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        // line 177
        echo "
                        </div>
                    </div>

                    <div class=\"w100 clearfix\" id=\"divdrive\" style=\"margin-bottom: 20px\">
                        <!--/row end-->
                        <div class=\"row\" id=\"div_choix_cre_click\" style=\"display: none\">

                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">×</span>
                                </button>
                                ";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choose_crenau", [], "messages"), "html", null, true);
        echo "
                            </div>
                        </div>
                        <div class=\"row\" id=\"div_choix_cre\" style=\"display: none\">

                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">×</span>
                                </button>
                                ";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choose_crenau", [], "messages"), "html", null, true);
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-12\" style=\"margin-top: 25px\">
                            ";
        // line 202
        if (($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "isOpen", []) == false)) {
            // line 203
            echo "                                <div class=\"col-md-8    \">
                                    <h3 style=\"color:#df0c36\"><i
                                                class=\"fa fa-exclamation-circle\"></i> ";
            // line 205
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("La station ne travaille pas les dimanches", [], "messages"), "html", null, true);
            echo "
                                    </h3>
                                    <input id=\"isOpen\" value=\"false\" hidden>
                                </div>
                            ";
        } else {
            // line 210
            echo "                                <div class=\"col-md-8 \">
                                    <input id=\"isOpen\" value=\"true\" hidden>

                                </div>
                            ";
        }
        // line 215
        echo "

                            <div class=\" row\">
                                <div class=\"col-lg-7 col-md-8 col-xs-12 col-sm-12\">

                                    <span class=\"titlered\">";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date de retrait", [], "messages"), "html", null, true);
        echo " :</span> <br>
                                    <span class=\"spanText\"> ";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choisir une date de retrait", [], "messages"), "html", null, true);
        echo "</span> <br><br>
                                    <div class=\"single\" id=\"single\"></div>

                                    <style>
                                        .iCheck-margin {
                                            margin-bottom: 15px;
                                        }
                                    </style>

                                </div>


                                <div class=\"col-lg-5 col-md-4 col-xs-12 col-sm-12\">
                                    <span class=\"titlered\">";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Heure de retrait", [], "messages"), "html", null, true);
        echo " :</span>
                                    <br><br>

                                    ";
        // line 237
        $context["i"] = 0;
        // line 238
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "horaires", []));
        foreach ($context['_seq'] as $context["_key"] => $context["horaire"]) {
            // line 239
            echo "                                        ";
            $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
            // line 240
            echo "                                        <div id=\"div-";
            echo twig_escape_filter($this->env, $context["horaire"], "html", null, true);
            echo "\">
                                            <input type=\"radio\" name=\"periode\" id=\"periode-";
            // line 241
            echo twig_escape_filter($this->env, $context["horaire"], "html", null, true);
            echo "\"
                                                   value=\"";
            // line 242
            echo twig_escape_filter($this->env, $context["horaire"], "html", null, true);
            echo "\"
                                                    ";
            // line 243
            if ((($context["i"] ?? $this->getContext($context, "i")) == 1)) {
                echo " checked=\"\" ";
            }
            echo ">
                                            <label style=\"  font-family: Roboto-Regular, sans-serif\"
                                                   for=\"periode-";
            // line 245
            echo twig_escape_filter($this->env, $context["horaire"], "html", null, true);
            echo "\"
                                                   class=\"radio-inline spanText\">";
            // line 246
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["station"] ?? $this->getContext($context, "station")), "horaireFromIndex", [0 => $context["horaire"]], "method")), "html", null, true);
            echo "</label>
                                        </div>
                                        <br>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        echo "

                                </div>


                            </div>


                        </div>
                    </div>

                    <div class=\"w100 clearfix\" id=\"divlivraison\" style=\"margin-bottom: 20px;display: none;\">
                        <!--/row end-->

                        <div class=\"row\" style=\"margin-top: 25px\">


                            <div class=\" userInfo\">

                                ";
        // line 269
        if ((twig_length_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "adresses", [])) != 0)) {
            // line 270
            echo "                                    <div class=\"col-lg-6\">
                                        <h2 class=\"titlered\"> ";
            // line 271
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choisir une adresse de livraison"), "html", null, true);
            echo " </h2>

                                        <form action=\"";
            // line 273
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validationAdresse");
            echo "\" method=\"POST\"
                                              class=\"form-address\">

                                            <h4 class=\"spanText\"><i
                                                        class=\"fa fa-truck \"> </i> ";
            // line 277
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adresse de livraison"), "html", null, true);
            echo "
                                            </h4>
                                            ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "adresses", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 280
                echo "                                                <div class=\"radio-adresse\">
                                                    <label class=\"col-mg-10 spanText\">
                                                        <input type=\"radio\" name=\"livraison\" value=\"";
                // line 282
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", []), "html", null, true);
                echo "\"
                                                               ";
                // line 283
                if (($this->getAttribute($context["loop"], "index0", []) == 0)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                                        <label style=\"margin-bottom: 15px;\"> ";
                // line 284
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "adresse", []), "html", null, true);
                echo "
                                                            , ";
                // line 285
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "cp", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", []), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "pays", []), "html", null, true);
                echo "
                                                            <br/>";
                // line 286
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", []), "html", null, true);
                echo "</label>
                                                    </label>
                                                    ";
                // line 292
                echo "                                                </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 294
            echo "

                                        </form>

                                        <br/><br/>
                                        <div class=\"text-center\">

                                            <a onclick=\"goToAdresse()\">
                                                <button class=\"btn btn_card\"
                                                        style=\"padding-right: 25px;padding-left: 25px;width: 100%\">
                                                    ";
            // line 304
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valider"), "html", null, true);
            echo "
                                                </button>
                                            </a>

                                        </div>
                                    </div>

                                ";
        }
        // line 312
        echo "
                                <div class=\"col-lg-6\">
                                    <h2 class=\"titlered\"> ";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter une nouvelle adresse"), "html", null, true);
        echo " </h2>


                                    <form action=\"\" method=\"POST\">

                                        <div class=\"form-group\">
                                            <label class=\"inputtitletxt\">";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo "</label><span
                                                    style=\"color: #ED0000\">*</span>
                                            ";
        // line 322
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ""]]);
        echo "
                                            ";
        // line 323
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'errors');
        echo "
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"inputtitletxt\">";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prenom"), "html", null, true);
        echo "</label><span
                                                    style=\"color: #ED0000\">*</span>
                                            ";
        // line 329
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ""]]);
        echo "
                                            ";
        // line 330
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), 'errors');
        echo "
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"inputtitletxt\">";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléphone"), "html", null, true);
        echo "</label><span
                                                    style=\"color: #ED0000\">*</span>
                                            ";
        // line 336
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ""]]);
        echo "
                                            ";
        // line 337
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", []), 'errors');
        echo "
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"inputtitletxt\">";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adresse"), "html", null, true);
        echo "</label><span
                                                    style=\"color: #ED0000\">*</span>
                                            ";
        // line 343
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ""]]);
        echo "
                                            ";
        // line 344
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'errors');
        echo "
                                        </div>


                                        <div class=\"form-group\">
                                            <label class=\"inputtitletxt\">";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Code Postal"), "html", null, true);
        echo "</label><span
                                                    style=\"color: #ED0000\">*</span>
                                            ";
        // line 351
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", []), 'widget', ["attr" => ["class" => "form-control code", "placeholder" => ""]]);
        echo "
                                            ";
        // line 352
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", []), 'errors');
        echo "
                                        </div>
                                        ";
        // line 362
        echo "



                                        ";
        // line 366
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                                        <button style=\"width: 100%\" class=\" btn  btn_card\" id=\"btn-add-adress\"
                                                type=\"submit\">
                                            ";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter"), "html", null, true);
        echo "</button>
                                    </form>


                                </div>

                            </div>
                        </div>

                    </div>


                    <div class=\"cartFooter w100 hidden-sm hidden-xs\">
                        <div class=\"box-footer\">
                            <div class=\"pull-left\">
                                <a href=\"/\" class=\"btn  \"
                                   style=\"padding-right: 10px;padding-left: 10px;line-height: 40px\">
                                    <i class=\"fa fa-arrow-left\"></i>&nbsp; ";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Retour à l'accueil"), "html", null, true);
        echo "
                                </a>
                            </div>


                            <div class=\"pull-right\">

                                <a onclick=\"goToAdresse()\">
                                    <button class=\"btn btn_card  w100\" style=\"padding-right: 25px;padding-left: 25px\">
                                        ";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valider"), "html", null, true);
        echo "
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-6 col-md-5\" style=\"background-color: #f7f7f7; height: 100vh;padding-top: 20px\">

                    <style>
                        .numberCircle {
                            border-radius: 50%;
                            min-width: 30px;
                            width: auto;
                            height: 30px;
                            padding: 8px;

                            background: #666;
                            border: 1px solid #666;
                            color: #ffffff;
                            text-align: center;


                            position: absolute;
                            top: -13px;
                            right: -11px;
                            display: inline-flex;
                            align-items: center;
                            font-size: 12px;

                        }

                        .divImgg {
                            width: 90px;
                            height: 90px;
                            position: relative;
                            text-align: center;
                            background-color: white;
                            border: 1px solid #dcdcdc;
                            border-radius: 10%;
                            display: inline-block;
                        }
                    </style>

                    ";
        // line 441
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 442
            echo "
                        <div>
                            <div class=\"divImgg\">
                                <img class=\"lazy\" style=\"width:100%;\"
                                     alt=\"";
            // line 446
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", []), "html", null, true);
            echo "\"
                                     data-original=\"/uploads/produits/";
            // line 447
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "image", []), "html", null, true);
            echo "\"
                                     src=\"";
            // line 448
            if (($this->getAttribute($context["produit"], "image", []) && ($this->getAttribute($context["produit"], "image", []) != ""))) {
                echo "/uploads/produits/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "image", []), "html", null, true);
                echo "
                                                           ";
            } else {
                // line 449
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/default_t_e.jpg"), "html", null, true);
            }
            echo "\">
                                <span class=\"numberCircle\"> ";
            // line 450
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier"], "method"), $this->getAttribute($context["produit"], "id", []), [], "array"), "html", null, true);
            echo "</span>
                            </div>

                            <span style=\"display: inline-block;color: #374649;margin-left: 15px\">";
            // line 453
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method") == "en")) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nomen", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", []), "html", null, true);
            }
            echo "</span>

                            <div class=\"price\" style=\"display: inline-block; font-size: 14px;color: #374649;margin-left: 20px \">
                                                <span id=\"price";
            // line 456
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", []), "html", null, true);
            echo "\">
                                                    ";
            // line 457
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice($this->getAttribute($this->getAttribute($context["produit"], "getTotalPrice", [0 => $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", []), [], "array")], "method"), "prix", [], "array"), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
            echo "
                                                </span>
                                <span>&nbsp;";
            // line 459
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "devise", []), "html", null, true);
            echo "</span>
                            </div>
                        </div>




                        <br>


                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 470
        echo "


                    <div class=\"w100 \">
                        ";
        // line 474
        if ((($context["coupon"] ?? $this->getContext($context, "coupon")) && (($context["coupon"] ?? $this->getContext($context, "coupon")) != ""))) {
            // line 475
            echo "                            ";
            if (($this->getAttribute(($context["coupon"] ?? $this->getContext($context, "coupon")), "type", []) == 1)) {
                // line 476
                echo "                                ";
                $context["total_price"] = (($context["total_price"] ?? $this->getContext($context, "total_price")) - $this->getAttribute(($context["coupon"] ?? $this->getContext($context, "coupon")), "montant", []));
                // line 477
                echo "                            ";
            } elseif (($this->getAttribute(($context["coupon"] ?? $this->getContext($context, "coupon")), "type", []) == 2)) {
                // line 478
                echo "                                ";
                $context["total_price"] = ((($context["total_price"] ?? $this->getContext($context, "total_price")) / 100) * (100 - $this->getAttribute(($context["coupon"] ?? $this->getContext($context, "coupon")), "pourcentage", [])));
                // line 479
                echo "                            ";
            }
            // line 480
            echo "                        ";
        }
        // line 481
        echo "
                        <div id=\"IdAlertRecaptcha\" hidden>
                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">

                                ";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("captchincorect", [], "messages"), "html", null, true);
        echo "
                            </div>
                        </div>


                        <table id=\"cart-summary\" class=\"std table\">
                            <tbody>
                            <tr>
                                <td colspan=\"2\">
                                    <div class=\"input-append couponForm \">

                                        <input class=\"col-lg-7\" id=\"couponinput\" name=\"couponinput\"
                                               type=\"text\"
                                               placeholder=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Code coupon"), "html", null, true);
        echo "\"
                                               style=\"padding-right: 10px; padding-right: 10px;margin-right:10px; border-style: none;  border: 1px solid #ececec;outline: transparent;\">
                                        <button class=\"col-lg-4 btn btnb\" style=\"margin-right: 10px\" type=\"button\"
                                                onclick=\"verifcoupon()\"><span>";
        // line 501
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Appliquer"), "html", null, true);
        echo "</span>
                                        </button>

                                    </div>

                                    <div class=\"input-group\" style=\"padding-top: 14px;padding-bottom: 5px;\">
                                        <div class=\"g-recaptcha\" data-sitekey=\"6LedckodAAAAAAE-j3jaEd9gBOEFaaM7xxW3FKN0\"></div>

                                        ";
        // line 515
        echo "
                                        <script type=\"text/javascript\"
                                                src=\"https://www.google.com/recaptcha/api.js?hl=en\">
                                        </script>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span  class=\"labell pull-left\">
                                         ";
        // line 525
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total Commande"), "html", null, true);
        echo "
                                    </span>
                                    <div class=\"site-color pull-right\">
                                        <span id=\"total-price\">";
        // line 528
        echo twig_escape_filter($this->env, $this->env->getExtension('FrontendBundle\Twig\AppExtension')->getFormatedPrice(($context["total_price"] ?? $this->getContext($context, "total_price")), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), false), "html", null, true);
        echo "</span>
                                        <span hidden id=\"total-price-withoutforma\">";
        // line 529
        echo twig_escape_filter($this->env, ($context["total_price"] ?? $this->getContext($context, "total_price")), "html", null, true);
        echo "</span>
                                        <span class=\"site-color\">";
        // line 530
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "devise", []), "html", null, true);
        echo "</span>

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


            <br> <br>


            <div class=\"  hidden-lg hidden-md\">
                <div class=\"row\">


                    <div class=\"col-xs-12 col-sm-12 \">

                        <a onclick=\"goToAdresse()\">
                            <button class=\"btn btn_card  w100\" style=\"padding-right: 25px;padding-left: 25px\">
                                ";
        // line 568
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valider"), "html", null, true);
        echo "
                            </button>
                        </a>

                    </div>

                    <div class=\"col-xs-12 col-sm-12 \" style=\"text-align: center\">
                        <a href=\"/\" class=\"btn  \"
                           style=\"padding-right: 10px;padding-left: 10px;line-height: 40px\">
                            <i class=\"fa fa-arrow-left\"></i>&nbsp; ";
        // line 577
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Retour à l'accueil"), "html", null, true);
        echo "
                        </a>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <!-- Modal -->


        </div>


        <!--/ cartFooter -->


    </div>
    <div style=\"clear:both\"></div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"modal-coupon\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\" style=\"height: 200px !important;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"row transitionfx text-left\">

                    <div class=\"modal-header\" style=\"background: #df0c36;\">
                        <h4 class=\"modal-title\" id=\"exampleModalLongTitle\"
                            style=\"padding-left: 10px;margin-top: 11px;font-family: Roboto-Regular, sans-serif!important;color: white\">
                            ";
        // line 607
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Vérification coupon"), "html", null, true);
        echo "</h4>

                        <button style=\"padding-right: 10px;opacity: 1.2;margin-top: -36px;background-color: #df0c36\"
                                type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body text-center\">
                        <h3 id=\"input_coupon_result\"></h3>
                    </div>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!--/row-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 629
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 630
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/pickmeup.js?v3"), "html", null, true);
        echo "\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>

    <script>

        \$('input[type=radio][name=\"mode\"]').change(function () {
            console.log(\"eeeee\")
            console.log(\$(this).val())


            if (\$(this).val() === '0') {
                console.log(\"equal zero\")

                \$(\"#divdrive\").show();
                \$(\"#divlivraison\").hide();


                \$(\".stileone\").css({
                    \"background\": \"#F7F9FA\",
                    \"border\": \"solid 1px #ED0000\",
                    \"border-radius\": \"10px\",
                    \"padding\": \"11px 58px 11px 11px\",
                    \"width\": \"fit-content\"
                });
                \$(\".stiletwo\").css({\"background\": \"white\", \"border\": \"solid 1px white\", \"border-radius\": \"10px\"});


            } else {
                console.log(\"equal one\")

                \$(\"#divdrive\").hide();
                \$(\"#divlivraison\").show();

                \$(\".stiletwo\").css({
                    \"background\": \"#F7F9FA\",
                    \"border\": \"solid 1px #ED0000\",
                    \"border-radius\": \"10px\",
                    \"padding\": \"11px 58px 11px 11px\",
                    \"width\": \"fit-content\"
                });

                \$(\".stileone\").css({\"background\": \"white\", \"border\": \"solid 1px white\", \"border-radius\": \"10px\"});


            }
        });
        /* \$(document).ready(function(){

                \$('input').iCheck({
                    checkboxClass: 'iradio_square-red',
                    radioClass: 'iradio_square-red',
                });
            });*/
        /*

          \$(\".stileone\").on(\"click\", function() {
               \$(this).css({\"background\": \"#F7F9FA\",\"border\": \"solid 1px #ED0000\",\"border-radius\":\"10px\",\"padding\":\"11px 58px 11px 11px\",\"width\":\"fit-content\"});
               \$(\".stiletwo\").css({\"background\": \"white\",\"border\": \"solid 1px white\",\"border-radius\":\"10px\"});

           })
           \$(\".stiletwo\").on(\"click\", function() {

               \$(this).css({\"background\": \"#F7F9FA\",\"border\": \"solid 1px #ED0000\",\"border-radius\":\"10px\",\"padding\":\"11px 58px 11px 11px\",\"width\":\"fit-content\"});

               \$(\".stileone\").css({\"background\": \"white\",\"border\": \"solid 1px white\",\"border-radius\":\"10px\"});

           })
         */


    </script>


    <script type=\"text/javascript\">

        function verifcoupon() {
            var coupon_value = \$(\"#couponinput\").val();
            //was   var totalprice = parseFloat(\$('#total-price').html());
            var totalprice = parseFloat(\$('#total-price-withoutforma').html());
            //  console.log(\"totalprice\"+totalprice);

            var recaptchaRes = grecaptcha.getResponse();
            // console.log(\"recaptchaRes\"+ recaptchaRes);
            if (recaptchaRes === \"\") {
                console.log(\"You can't proceed!\");
                //
                //     \$('#IdAlertRecaptcha').removeClass('hidden');
                \$('#IdAlertRecaptcha').show();
                return false;
            } else {
                console.log(\"Thank you\");
                //   \$('#IdAlertRecaptcha').addClass('hidden');
                \$('#IdAlertRecaptcha').hide();

            }

            \$.ajax({
                url: \"";
        // line 730
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verificationCoupon");
        echo "\",
                dataType: 'Json',
                data: {\"coupon\": coupon_value},
                type: 'GET',
                success: function (coupon) {
                    if (coupon['result'] == true) {
                        \$.ajax({
                            url: \"";
        // line 737
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("executeCoupon");
        echo "\",
                            dataType: 'Json',
                            data: {\"coupon\": coupon_value},
                            type: 'GET',
                            success: function (data) {
                                if (data['result'] == true) {
                                    //  console.log(\"result\"+true);

                                    if (data['type'] == 1) {
                                        var montant = parseFloat(coupon['montant'])
                                        console.log('montant' + montant)
                                        console.log('total' + totalprice)
                                        if (montant > totalprice) {
                                            \$input_coupon = \$(\"#input_coupon_result\").html('Votre commande doit avoir un montant superieur à' + montant + '";
        // line 750
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "devise", []), "html", null, true);
        echo "');
                                            /* \$(\"document\").ready(function () {
                                                 \$('#modal-coupon').modal({
                                                     backdrop: 'static',
                                                     keyboard: false
                                                 });
                                             })*/
                                            jQuery.noConflict();

                                            \$(\"#modal-coupon\").modal(\"show\");

                                        } else {
                                            \$('#total-price').html((totalprice - montant).toFixed(3));
                                            \$(\".total_price_cart_empty\").html((totalprice - montant).toFixed(3));
                                            \$(\".total_price_cart\").html((totalprice - montant).toFixed(3));
                                        }

                                    }
                                    if (data['type'] == 2) {

                                        var pourcentage = parseFloat(coupon['pourcentage'])
                                        console.log(coupon['pourcentage'])
                                        console.log(totalprice)
                                        \$('#total-price').html((totalprice / 100 * (100 - pourcentage)).toFixed(3));
                                        \$(\".total_price_cart_empty\").html((totalprice / 100 * (100 - pourcentage)).toFixed(3));
                                        \$(\".total_price_cart\").html((totalprice / 100 * (100 - pourcentage)).toFixed(3));
                                    }

                                } else if (data['result'] == false && data['ancien'] !== undefined) {
                                    console.log(\"result\" + false);

                                    if (data['ancientype'] == 1) {

                                        var montant_ancien_reduit = parseFloat(totalprice + data['ancien'])
                                        console.log('montant_ancien_reduit1' + montant_ancien_reduit)
                                    }
                                    if (data['ancientype'] == 2) {
                                        var montant_ancien_reduit = totalprice + (totalprice / (100 - data['ancien']) * data['ancien']);
                                        console.log('montant_ancien_reduit2' + montant_ancien_reduit)
                                    }

                                    if (data['type'] == 1) {
                                        var price = parseFloat(montant_ancien_reduit - data['montant'])
                                        //   console.log('price1' + price)

                                        if (montant > montant_ancien_reduit) {

                                            \$input_coupon = \$(\"#input_coupon_result\").html('Votre commande doit avoir un montant superieur à' + montant + ' ";
        // line 797
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "devise", []), "html", null, true);
        echo "');
                                            /*\$(\"document\").ready(function () {
                                                \$('#modal-coupon').modal({
                                                    backdrop: 'static',
                                                    keyboard: false
                                                });
                                            })*/
                                            jQuery.noConflict();

                                            \$(\"#modal-coupon\").modal(\"show\");

                                        } else {
                                            \$('#total-price').html((price).toFixed(3));
                                            \$(\".total_price_cart_empty\").html((price).toFixed(3));
                                            \$(\".total_price_cart\").html((price).toFixed(3));
                                        }
                                    }
                                    if (data['type'] == 2) {

                                        var price = montant_ancien_reduit / 100 * (100 - data['pourcentage']);
                                        console.log('price2' + price)
                                        \$('#total-price').html((price).toFixed(3));
                                        \$(\".total_price_cart_empty\").html((price).toFixed(3));
                                        \$(\".total_price_cart\").html((price).toFixed(3));
                                    }

                                } else {
                                    //console.log(\"result\"+\"befor else\");

                                    \$input_coupon = \$(\"#input_coupon_result\").html('Vous avez déja entrer un coupon');
                                    /*\$(\"document\").ready(function () {
                                        \$('#modal-coupon').modal({
                                            backdrop: 'static',
                                            keyboard: false
                                        });
                                    })*/
                                    jQuery.noConflict();

                                    \$(\"#modal-coupon\").modal(\"show\");

                                }

                            }
                        })
                    } else {
                        //console.log(\"result\"+\"last else\");
                        \$input_coupon = \$(\"#input_coupon_result\").html('Coupon invalide');
                        /* \$(\"document\").ready(function () {
                              \$('#modal-coupon').modal({
                                  backdrop: 'static',
                                  keyboard: false
                              });
                          })*/
                        jQuery.noConflict();

                        \$(\"#modal-coupon\").modal(\"show\");

                    }

                }
            })

        }
    </script>



    <script>
        function goToAdresse() {

            modereception = \$('input:radio[name=\"mode\"]:checked').val();
            // console.log(modereception);
            //console.log(\"modereception\");

            if (modereception === '1') {
                livraison = \$('input:radio[name=\"livraison\"]:checked').val();
                console.log(\"fffff\");
                console.log(livraison);
                console.log(modereception);

                window.location.href = '";
        // line 877
        echo "validationAdresse";
        echo "?livraison=' + livraison + '&mode=' + 1;
            } else {
                var isOpen = document.getElementById(\"isOpen\").value;
                date = pickmeup('.single').get_date(\"Y-m-d\");
                periode = \$('input:radio[name=\"periode\"]:checked').val();

                //livraison = \$('input:radio[name=livraison]:checked').val();
                //facturation = \$('input:radio[name=facturation]:checked').val();
                var date_retrait = new Date(pickmeup('.single').get_date(\"Y-m-d\"))
                var date_now = new Date()
                if (date_retrait.toISOString().slice(0, 10) < date_now.toISOString().slice(0, 10)) {
                    /* \$(\".btn-small\").tooltip(\"destroy\");
                     \$(\".btn-small\").attr(\"data-toggle\",\"tooltip\");
                     \$(\".btn-small\").attr(\"title\",\"Le retrait n´est possible qu´à partir d'aujourd'hui.\");
                     \$(\".btn-small\").tooltip(\"show\");*/

                    alert(\"Le retrait n´est possible qu´à partir d'aujourd'hui.\")

                } else if ((date_retrait.getDay() === 0) && (isOpen === 'false')) {
                    /* \$(\".btn-small\").tooltip(\"destroy\");
                     \$(\".btn-small\").attr(\"data-toggle\",\"tooltip\");
                     \$(\".btn-small\").attr(\"title\",\"La station ne travaille pas \\n  les dimanches\");
                     \$(\".btn-small\").tooltip(\"show\");*/
                    alert(\"La station ne travaille pas \\n  les dimanches\")

                } else {
                    //  \$(\".btn-small\").tooltip(\"destroy\");
                    // window.location.href = '";
        // line 904
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validationAdresse");
        echo "?date=' + date + '&periode=' + periode+ '&mode=' + 0;
                    console.log(\"ttttt\");
                    console.log(periode);
                    if (periode === 'undefined' || periode == null) {

                        \$(\"#div_choix_cre_click\").show()


                    } else {
                        window.location.href = '";
        // line 913
        echo "validationAdresse";
        echo "?date=' + date + '&periode=' + periode + '&mode=' + 0;

                    }
                }
            }

        }

        \$(\"#btn-add-adress\").click(function (event) {
                var reg = new RegExp(/^[0-9]{8}\$/);
                if (!reg.test(\$(\"#webbundle_utilisateursadresses_telephone\").val())) {
                    event.preventDefault();
                    /*  \$(\"#webbundle_utilisateursadresses_telephone\").attr(\"data-toggle\", \"tooltip\");
                      \$(\"#webbundle_utilisateursadresses_telephone\").attr(\"data-placement\", \"bottom\");
                      \$(\"#webbundle_utilisateursadresses_telephone\").attr(\"title\", \"Vérifier format du télephone \\n Exp:  90909090\");
                      \$(\"#webbundle_utilisateursadresses_telephone\").tooltip(\"show\");*/
                    alert(\"Vérifier format du télephone \\n Exp:  90909090\")
                } else {
                    //  \$(\"#webbundle_utilisateursadresses_telephone\").tooltip(\"destroy\");
                }
            }
        );
    </script>
    <script>
        selected_date = new Date();
        selected_date.setDate(selected_date.getDate())
        var date_now = new Date();
        var isTherperiod = 0;

        if (selected_date.toISOString().slice(0, 10) === date_now.toISOString().slice(0, 10)) {

            var element1 = document.getElementById('div-1');
            var element2 = document.getElementById('div-2');
            var element3 = document.getElementById('div-3');
            var element4 = document.getElementById('div-4');
            var element5 = document.getElementById('div-5');
            var element6 = document.getElementById('div-6');

            if (date_now.getHours() >= 8 && element1) {

                element1.style.display = 'none';
                \$('input:radio[name=\"periode\"][value=\"1\"]').attr('checked', false);
                \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', true);
                isTherperiod = 1;
            }
            if (date_now.getHours() >= 10 && element2) {
                element2.style.display = 'none';
                \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', false);
                \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', true);
                isTherperiod = 1;

            }
            if (date_now.getHours() >= 12 && element3) {
                element3.style.display = 'none';
                \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', false);
                \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', true);
                isTherperiod = 1;

            }
            if (date_now.getHours() >= 14 && element4) {
                element4.style.display = 'none';
                \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', false);
                \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', true);
                isTherperiod = 1;

            }
            if (date_now.getHours() >= 16 && element5) {
                element5.style.display = 'none';
                \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', false);
                \$('input:radio[name=\"periode\"][value=\"6\"]').attr('checked', true);

                isTherperiod = 1;


            }
            if (date_now.getHours() >= 18 && element6) {
                element6.style.display = 'none';
                \$('input:radio[name=\"periode\"][value=\"6\"]').attr('checked', false);
                isTherperiod = 1;

            }

        }

        ";
        // line 997
        if ($this->getAttribute(($context["date"] ?? null), "periode", [], "any", true, true)) {
            // line 998
            echo "        \$('input:radio[name=\"periode\"][value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["date"] ?? $this->getContext($context, "date")), "periode", []), "html", null, true);
            echo "\"]').attr('checked', true);
        ";
        }
        // line 1000
        echo "
        ";
        // line 1001
        if ($this->getAttribute(($context["date"] ?? null), "date", [], "any", true, true)) {
            // line 1002
            echo "        selected_date = \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["date"] ?? $this->getContext($context, "date")), "date", []), "html", null, true);
            echo "\";
        ";
        }
        // line 1004
        echo "        var today = new Date();

        //  console.log(isTherperiod);
        element = pickmeup('#single', {
            flat: true,
            min: today,
            render: function (date) {
                new_date = new Date();
                new_date.setDate(date.getDate());

                /*   if (new_date.toISOString().slice(0,10)  <= date_now.toISOString().slice(0,10)) {
                          return {disabled : true, class_name : 'date-in-past'};
                      }*/


                var isOpen = document.getElementById(\"isOpen\").value;
                var dt = new Date(date);

                if ((dt.getDay() === 0) && (isOpen === 'false')) {


                    return {disabled: true, class_name: 'date-in-past'};
                }
                return {};
            }
        }).set_date(selected_date);
        if (isTherperiod === 0) {

            \$(\"#div_choix_cre\").show();

        } else {

            \$(\"#div_choix_cre\").hide()

        }


        document.getElementById(\"single\").addEventListener('pickmeup-change', function (e) {
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1;
            var yyyy = today.getFullYear();

            if (dd < 10) {
                dd = '0' + dd;
            }
            if (mm < 10) {
                mm = '0' + mm;
            }
            var today = dd + '-' + mm + '-' + yyyy;

            var formateddate = new Date(e.detail.date);
            var todayff = new Date();


            if (formateddate.getTime() > todayff.getTime()) {

                isTherperiod = 0;

                var element1 = document.getElementById('div-1');
                var element2 = document.getElementById('div-2');
                var element3 = document.getElementById('div-3');
                var element4 = document.getElementById('div-4');
                var element5 = document.getElementById('div-5');
                var element6 = document.getElementById('div-6');
                if (date_now.getHours() >= 18 && element6) {
                    element6.style.display = 'block';
                    \$('input:radio[name=\"periode\"][value=\"6\"]').attr('checked', false);//was true
                    isTherperiod = 1;
                }
                if (date_now.getHours() >= 16 && element5) {
                    element5.style.display = 'block';
                    \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', false);//was true
                    isTherperiod = 1;
                }
                if (date_now.getHours() >= 14 && element4) {
                    element4.style.display = 'block';
                    \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', false);//was true
                    isTherperiod = 1;

                }
                if (date_now.getHours() >= 12 && element3) {
                    element3.style.display = 'block';
                    \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', false);//was true
                    isTherperiod = 1;

                }
                if (date_now.getHours() >= 10 && element2) {
                    element2.style.display = 'block';
                    \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', false);//was true
                    isTherperiod = 1;
                }
                if (date_now.getHours() >= 8 && element1) {
                    element1.style.display = 'block';
                    \$('input:radio[name=\"periode\"][value=\"1\"]').attr('checked', false);//was true
                    isTherperiod = 1;
                }


            } else {
                isTherperiod = 0;

                var element1 = document.getElementById('div-1');
                var element2 = document.getElementById('div-2');
                var element3 = document.getElementById('div-3');
                var element4 = document.getElementById('div-4');
                var element5 = document.getElementById('div-5');
                var element6 = document.getElementById('div-6');

                if (date_now.getHours() >= 8 && element1) {

                    element1.style.display = 'none';
                    \$('input:radio[name=\"periode\"][value=\"1\"]').attr('checked', false);
                    \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', true);
                    isTherperiod = 1;
                }
                if (date_now.getHours() >= 10 && element2) {
                    element2.style.display = 'none';
                    \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', false);
                    \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', true);
                    isTherperiod = 1;
                }
                if (date_now.getHours() >= 12 && element3) {
                    element3.style.display = 'none';
                    \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', false);
                    \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', true);
                    isTherperiod = 1;
                }
                if (date_now.getHours() >= 14 && element4) {
                    element4.style.display = 'none';
                    \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', false);
                    \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', true);
                    isTherperiod = 1;
                }
                if (date_now.getHours() >= 16 && element5) {
                    element5.style.display = 'none';
                    \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', false);
                    \$('input:radio[name=\"periode\"][value=\"6\"]').attr('checked', true);

                    isTherperiod = 1;
                }

                if (date_now.getHours() >= 18 && element6) {
                    element6.style.display = 'none';
                    \$('input:radio[name=\"periode\"][value=\"6\"]').attr('checked', false);

                    isTherperiod = 1;
                }
            }

            if (isTherperiod === 0) {
                \$(\"#div_choix_cre\").show();
            } else {
                \$(\"#div_choix_cre\").hide();

            }
        })

        /////


        function goToDate() {
            var isOpen = document.getElementById(\"isOpen\").value;
            date = pickmeup('.single').get_date(\"Y-m-d\");
            periode = \$('input:radio[name=periode]:checked').val();

            //livraison = \$('input:radio[name=livraison]:checked').val();
            //facturation = \$('input:radio[name=facturation]:checked').val();
            date_retrait = new Date(pickmeup('.single').get_date(\"Y-m-d\"))
            if (new Date(pickmeup('.single').get_date(\"Y-m-d\")) < new Date()) {
                /* \$(\".btn-small\").tooltip(\"destroy\");
                 \$(\".btn-small\").attr(\"data-toggle\",\"tooltip\");
                 \$(\".btn-small\").attr(\"title\",\"Le retrait n´est possible qu´à partir du lendemain  \\n de la date de la commande.\");
                 \$(\".btn-small\").tooltip(\"show\");*/
                alert(\"Le retrait n´est possible qu´à partir du lendemain  \\n de la date de la commande.\");
            } else if ((date_retrait.getDay() == 0) && (isOpen == 'false')) {
                /*   \$(\".btn-small\").tooltip(\"destroy\");
                   \$(\".btn-small\").attr(\"data-toggle\",\"tooltip\");
                   \$(\".btn-small\").attr(\"title\",\"La station ne travaille pas \\n  les dimanches\");
                   \$(\".btn-small\").tooltip(\"show\");*/
                alert(\"La station ne travaille pas \\n  les dimanches\");

            } else {
                // \$(\".btn-small\").tooltip(\"destroy\");
                if (periode == 'undefined' || periode == null) {

                    \$(\"#div_choix_cre_click\").show()

                } else {
                    window.location.href = '";
        // line 1193
        echo "validationAdresse";
        echo "?date=' + date + '&periode=' + periode;

                }
            }

        }

        /*  \$(\"document\").ready(function(){
              \$('input:radio[name=mode]').on('ifChecked', function(event){
                  if(\$(this).val() == 0){
                      \$(\"#divdrive\").show();
                      \$(\"#divlivraison\").hide();
                  }
                  else{
                      \$(\"#divdrive\").hide();
                      \$(\"#divlivraison\").show();
                  }
              });
          })

           \$(\"#btn-add-adress\").click(function(event){
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
        return "FrontendBundle:panier:modereception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1634 => 1193,  1443 => 1004,  1437 => 1002,  1435 => 1001,  1432 => 1000,  1426 => 998,  1424 => 997,  1337 => 913,  1325 => 904,  1295 => 877,  1212 => 797,  1162 => 750,  1146 => 737,  1136 => 730,  1035 => 632,  1029 => 630,  1023 => 629,  995 => 607,  962 => 577,  950 => 568,  909 => 530,  905 => 529,  901 => 528,  895 => 525,  883 => 515,  872 => 501,  866 => 498,  850 => 485,  844 => 481,  841 => 480,  838 => 479,  835 => 478,  832 => 477,  829 => 476,  826 => 475,  824 => 474,  818 => 470,  801 => 459,  796 => 457,  792 => 456,  782 => 453,  776 => 450,  771 => 449,  764 => 448,  760 => 447,  756 => 446,  750 => 442,  746 => 441,  697 => 395,  685 => 386,  665 => 369,  659 => 366,  653 => 362,  648 => 352,  644 => 351,  639 => 349,  631 => 344,  627 => 343,  622 => 341,  615 => 337,  611 => 336,  606 => 334,  599 => 330,  595 => 329,  590 => 327,  583 => 323,  579 => 322,  574 => 320,  565 => 314,  561 => 312,  550 => 304,  538 => 294,  523 => 292,  516 => 286,  508 => 285,  504 => 284,  498 => 283,  494 => 282,  490 => 280,  473 => 279,  468 => 277,  461 => 273,  456 => 271,  453 => 270,  451 => 269,  430 => 250,  420 => 246,  416 => 245,  409 => 243,  405 => 242,  401 => 241,  396 => 240,  393 => 239,  388 => 238,  386 => 237,  380 => 234,  364 => 221,  360 => 220,  353 => 215,  346 => 210,  338 => 205,  334 => 203,  332 => 202,  325 => 198,  313 => 189,  299 => 177,  291 => 172,  287 => 171,  282 => 169,  278 => 168,  267 => 160,  260 => 155,  258 => 154,  248 => 147,  232 => 134,  228 => 133,  215 => 123,  208 => 119,  201 => 117,  170 => 89,  162 => 84,  153 => 80,  147 => 77,  83 => 15,  77 => 14,  67 => 10,  60 => 7,  54 => 6,  46 => 4,  44 => 3,  42 => 2,  40 => 1,  31 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set totalHT = 0 %}
{% set totalTTC = 0 %}
{% set refTva = {} %}
{% extends 'FrontendBundle:Layouts:layoutBreadcrumps.html.twig' %}

{% block stylesheets %}
    {{ parent() }}


    <link href=\"{{ asset('assets/css/pickmeup.css?v4') }}\" rel=\"stylesheet\">

{% endblock stylesheets %}

{% block content %}

    <!--/.row-->

    <!--/.row-->
    <style>

        .radio-adresse label {
            margin-bottom: 20px;
            font-weight: 300;
        }

        .radio-adresse .fa {
            vertical-align: top;
            margin-top: 4px;
        }

        .delegation_select .delegation {
            width: 90% !important;
            display: inline;
            font-family: Roboto-Regular, sans-serif !important;
        }


        input[type='radio'] {
            -webkit-appearance: none;
            width: 20px;
            height: 20px;
            border: 1px solid #e2e2e2;
            border-radius: 50%;
            outline: none;
            box-shadow: 0 0 1px 0 #e2e2e2 inset;
        }

        input[type='radio']:hover {
            box-shadow: 0 0 1px 0 #e2e2e2 inset;
        }

        input[type='radio']:before {
            content: '';
            display: block;
            width: 50%;
            height: 50%;
            margin: 20% auto;
            border-radius: 50%;
        }

        input[type='radio']:checked:before {
            background: #dd1d36;
        }


    </style>



    <div class=\"row userInfo\" style=\"margin-right: 2%;margin-left: 2%\">


        <!--
                <div class=\"w100 clearfix\">
                    <ul class=\"orderStep orderStepLook2\">
                        <li>
                            <a class=\"inputtitle\" style=\"cursor: default;\"> <i class=\"fa fa-map-marker\"></i> <span> 1.{{ \"Point de retrait\" | trans }}</span></a>
                        </li>
                        <li >
                            <a class=\"inputtitle\" style=\"cursor: default;\" href=\"{{ path(\"panier\") }}\"> <i class=\"glyphicon glyphicon-shopping-cart\"></i> <span> 2.{{ \"Panier\" | trans }}</span></a>

                        </li>
                        <li class=\"active\">
                            <a > <i class=\"fa fa-calendar\"></i><span> 3.{{ \"Mode de reception\" | trans }} </span></a>
                        </li>


                        <li>
                            <a  class=\"inputtitle\" style=\"cursor: default;\"><i class=\"fa fa-check-square \"> </i><span>4.{{ \"Conf\" | trans }}</span></a>
                        </li>

                    </ul>
                </div>

                -->


        <div class=\"col-lg-12 col-md-12 col-xs-12 col-sm-12 \">


            <div class=\"row\">
                <div class=\"col-lg-6 col-md-7\">
                    <!--- breadcrump--->

                    <style>
                        /* Custom style for changing separator  */
                        .breadcrumb-item + .breadcrumb-item::before {
                            content: \">\";
                        }
                    </style>
                    <div class=\"breadcrumbDiv \">
                        <ul class=\"breadcrumb\">


                            <li class=\"breadcrumb-item \"><a
                                        style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #374649 !important;\"
                                        href=\"{{ path(\"panier\") }}\">{{ \"Panier\" | trans({}, 'messages') }}</a></li>
                            <li class=\"breadcrumb-item \"><a
                                        style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #ED0000 !important;\">{{ \"Mode de reception\" | trans({}, 'messages') }}</a>
                            </li>

                            <li class=\"breadcrumb-item \"
                                style=\"font-family: Roboto-Regular, sans-serif;font-size: 12px;font-weight: 400;color: #a1a1a1 !important;\"> {{ \"validation\" | trans({}, 'messages') }}</li>

                        </ul>
                    </div>


                    <!--- breadcrump--->


                    <div style=\"margin-bottom: 25px\">
                        <span class=\"titlered\"> {{ \"Mode de réception\" | trans({}, 'messages') }} : </span> <br>
                        <span class=\"spanText\">{{ \"Sélectionnez votre mode de réception de la commande\" | trans({}, 'messages') }}</span>
                    </div>
                    <div class=\"w100 clearfix\" style=\"margin-bottom: 20px\">
                        <!--/row end-->
                        <div class=\"row\">


                            <div class=\"col-lg-6 col-md-6\">
                                <div class=\"stileone\"
                                     style=\"background: #F7F9FA;border: solid 1px #ED0000;border-radius:10px;padding:11px 58px 11px 11px;width:fit-content\">
                                    <input type=\"radio\" name=\"mode\" id=\"driveradio\" value=\"0\" checked>
                                    <label for=\"driveradio\" class=\"radio-inline spanText\"><i
                                                class=\"fa fa-shopping-cart\"></i>
                                        {{ \"Drive\" | trans({}, 'messages') }}</label>

                                </div>

                            </div>


                            {% if station.isDelivered == true %}
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"stiletwo\" style=\"padding:11px 58px 11px 11px;width:fit-content\">
                                        <input type=\"radio\" name=\"mode\" id=\"livraisonradio\" value=\"1\">
                                        <label for=\"livraisonradio\" class=\"radio-inline spanText\"><i
                                                    class=\"fa fa-truck\"></i>
                                            {{ \"Livraison à domicile\" | trans({}, 'messages') }}</label>

                                    </div>


                                    <div class=\" \" style=\"margin-top: 10px;width: fit-content\">
                                        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\"
                                             style=\"font-family: Roboto-Regular, sans-serif!important;\">
                                            {{ \"Pour la livraison à domicile, il faut une commande d´un montant minimum de\" | trans ({}, 'messages')}}
                                            {{ formated_price(  station.minprixLivraison,app.session.get(\"pays\")) }}
                                            <br>
                                            {{ \"prix de livraison\" | trans({}, 'messages') }}
                                            : {{ formated_price( station.prixLivraison,app.session.get(\"pays\")) }}
                                        </div>
                                    </div>
                                </div>
                            {% endif %}

                        </div>
                    </div>

                    <div class=\"w100 clearfix\" id=\"divdrive\" style=\"margin-bottom: 20px\">
                        <!--/row end-->
                        <div class=\"row\" id=\"div_choix_cre_click\" style=\"display: none\">

                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">×</span>
                                </button>
                                {{ \"choose_crenau\"|trans({}, 'messages') }}
                            </div>
                        </div>
                        <div class=\"row\" id=\"div_choix_cre\" style=\"display: none\">

                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">×</span>
                                </button>
                                {{ \"choose_crenau\"|trans({}, 'messages') }}
                            </div>
                        </div>
                        <div class=\"col-lg-12\" style=\"margin-top: 25px\">
                            {% if station.isOpen == false %}
                                <div class=\"col-md-8    \">
                                    <h3 style=\"color:#df0c36\"><i
                                                class=\"fa fa-exclamation-circle\"></i> {{ \"La station ne travaille pas les dimanches\" | trans({}, 'messages') }}
                                    </h3>
                                    <input id=\"isOpen\" value=\"false\" hidden>
                                </div>
                            {% else %}
                                <div class=\"col-md-8 \">
                                    <input id=\"isOpen\" value=\"true\" hidden>

                                </div>
                            {% endif %}


                            <div class=\" row\">
                                <div class=\"col-lg-7 col-md-8 col-xs-12 col-sm-12\">

                                    <span class=\"titlered\">{{ \"Date de retrait\" | trans({}, 'messages') }} :</span> <br>
                                    <span class=\"spanText\"> {{ \"Choisir une date de retrait\" | trans({}, 'messages') }}</span> <br><br>
                                    <div class=\"single\" id=\"single\"></div>

                                    <style>
                                        .iCheck-margin {
                                            margin-bottom: 15px;
                                        }
                                    </style>

                                </div>


                                <div class=\"col-lg-5 col-md-4 col-xs-12 col-sm-12\">
                                    <span class=\"titlered\">{{ \"Heure de retrait\" | trans({}, 'messages') }} :</span>
                                    <br><br>

                                    {% set i = 0 %}
                                    {% for   horaire in station.horaires %}
                                        {% set i = i + 1 %}
                                        <div id=\"div-{{ horaire }}\">
                                            <input type=\"radio\" name=\"periode\" id=\"periode-{{ horaire }}\"
                                                   value=\"{{ horaire }}\"
                                                    {% if i == 1 %} checked=\"\" {% endif %}>
                                            <label style=\"  font-family: Roboto-Regular, sans-serif\"
                                                   for=\"periode-{{ horaire }}\"
                                                   class=\"radio-inline spanText\">{{ station.horaireFromIndex(horaire)|trans }}</label>
                                        </div>
                                        <br>
                                    {% endfor %}


                                </div>


                            </div>


                        </div>
                    </div>

                    <div class=\"w100 clearfix\" id=\"divlivraison\" style=\"margin-bottom: 20px;display: none;\">
                        <!--/row end-->

                        <div class=\"row\" style=\"margin-top: 25px\">


                            <div class=\" userInfo\">

                                {% if utilisateur.adresses|length != 0 %}
                                    <div class=\"col-lg-6\">
                                        <h2 class=\"titlered\"> {{ \"Choisir une adresse de livraison\" | trans }} </h2>

                                        <form action=\"{{ path('validationAdresse') }}\" method=\"POST\"
                                              class=\"form-address\">

                                            <h4 class=\"spanText\"><i
                                                        class=\"fa fa-truck \"> </i> {{ \"Adresse de livraison\" | trans }}
                                            </h4>
                                            {% for adresse in utilisateur.adresses %}
                                                <div class=\"radio-adresse\">
                                                    <label class=\"col-mg-10 spanText\">
                                                        <input type=\"radio\" name=\"livraison\" value=\"{{ adresse.id }}\"
                                                               {% if loop.index0 == 0 %}checked=\"checked\"{% endif %}>
                                                        <label style=\"margin-bottom: 15px;\"> {{ adresse.adresse }}
                                                            , {{ adresse.cp }} {{ adresse.ville }} - {{ adresse.pays }}
                                                            <br/>{{ adresse.prenom }} {{ adresse.nom }}</label>
                                                    </label>
                                                    {#
                                                                                                            <a  style=\" font-size: 20px\"  class=\"col-mg-2\" href=\"{{ path('deleteAdresse', { 'id' : adresse.id }) }}\"><i  class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></a><br>

                                                    #}
                                                </div>
                                            {% endfor %}


                                        </form>

                                        <br/><br/>
                                        <div class=\"text-center\">

                                            <a onclick=\"goToAdresse()\">
                                                <button class=\"btn btn_card\"
                                                        style=\"padding-right: 25px;padding-left: 25px;width: 100%\">
                                                    {{ \"Valider\" | trans }}
                                                </button>
                                            </a>

                                        </div>
                                    </div>

                                {% endif %}

                                <div class=\"col-lg-6\">
                                    <h2 class=\"titlered\"> {{ \"Ajouter une nouvelle adresse\" | trans }} </h2>


                                    <form action=\"\" method=\"POST\">

                                        <div class=\"form-group\">
                                            <label class=\"inputtitletxt\">{{ \"Nom\" | trans }}</label><span
                                                    style=\"color: #ED0000\">*</span>
                                            {{ form_widget(form.nom,{\"attr\" : {\"class\":\"form-control\",\"placeholder\":\"\"  } } ) }}
                                            {{ form_errors(form.nom) }}
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"inputtitletxt\">{{ \"Prenom\" | trans }}</label><span
                                                    style=\"color: #ED0000\">*</span>
                                            {{ form_widget(form.prenom,{\"attr\" : {\"class\":\"form-control\",\"placeholder\":\"\" } } ) }}
                                            {{ form_errors(form.prenom) }}
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"inputtitletxt\">{{ \"Téléphone\" | trans }}</label><span
                                                    style=\"color: #ED0000\">*</span>
                                            {{ form_widget(form.telephone,{\"attr\" : {\"class\":\"form-control\",\"placeholder\":\"\"} } ) }}
                                            {{ form_errors(form.telephone) }}
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"inputtitletxt\">{{ \"Adresse\" | trans }}</label><span
                                                    style=\"color: #ED0000\">*</span>
                                            {{ form_widget(form.adresse,{\"attr\" : {\"class\":\"form-control\",\"placeholder\":\"\" } } ) }}
                                            {{ form_errors(form.adresse) }}
                                        </div>


                                        <div class=\"form-group\">
                                            <label class=\"inputtitletxt\">{{ \"Code Postal\" | trans }}</label><span
                                                    style=\"color: #ED0000\">*</span>
                                            {{ form_widget(form.cp,{\"attr\" : {\"class\":\"form-control code\",\"placeholder\":\"\" } } ) }}
                                            {{ form_errors(form.cp) }}
                                        </div>
                                        {#

                                        <div class=\"form-group delegation_select\" hidden >
                                            <label class=\"inputtitletxt\">{{ \"Délégation\" | trans }}</label>
                                            {{ form_widget(form.ville,{\"attr\" : {\"class\":\"form-control delegation\",\"placeholder\":\"Ville\"} } ) }}
                                            {{ form_errors(form.ville) }}
                                        </div>
                                        #}




                                        {{ form_widget(form) }}
                                        <button style=\"width: 100%\" class=\" btn  btn_card\" id=\"btn-add-adress\"
                                                type=\"submit\">
                                            {{ \"Ajouter\" | trans }}</button>
                                    </form>


                                </div>

                            </div>
                        </div>

                    </div>


                    <div class=\"cartFooter w100 hidden-sm hidden-xs\">
                        <div class=\"box-footer\">
                            <div class=\"pull-left\">
                                <a href=\"/\" class=\"btn  \"
                                   style=\"padding-right: 10px;padding-left: 10px;line-height: 40px\">
                                    <i class=\"fa fa-arrow-left\"></i>&nbsp; {{ \"Retour à l'accueil\" | trans }}
                                </a>
                            </div>


                            <div class=\"pull-right\">

                                <a onclick=\"goToAdresse()\">
                                    <button class=\"btn btn_card  w100\" style=\"padding-right: 25px;padding-left: 25px\">
                                        {{ \"Valider\" | trans }}
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-6 col-md-5\" style=\"background-color: #f7f7f7; height: 100vh;padding-top: 20px\">

                    <style>
                        .numberCircle {
                            border-radius: 50%;
                            min-width: 30px;
                            width: auto;
                            height: 30px;
                            padding: 8px;

                            background: #666;
                            border: 1px solid #666;
                            color: #ffffff;
                            text-align: center;


                            position: absolute;
                            top: -13px;
                            right: -11px;
                            display: inline-flex;
                            align-items: center;
                            font-size: 12px;

                        }

                        .divImgg {
                            width: 90px;
                            height: 90px;
                            position: relative;
                            text-align: center;
                            background-color: white;
                            border: 1px solid #dcdcdc;
                            border-radius: 10%;
                            display: inline-block;
                        }
                    </style>

                    {% for produit in produits %}

                        <div>
                            <div class=\"divImgg\">
                                <img class=\"lazy\" style=\"width:100%;\"
                                     alt=\"{{ produit.nom }}\"
                                     data-original=\"/uploads/produits/{{ produit.image }}\"
                                     src=\"{% if  produit.image  and produit.image != \"\" %}/uploads/produits/{{ produit.image }}
                                                           {% else %}{{ asset('/assets/img/default_t_e.jpg') }}{% endif %}\">
                                <span class=\"numberCircle\"> {{ app.session.get('panier')[produit.id] }}</span>
                            </div>

                            <span style=\"display: inline-block;color: #374649;margin-left: 15px\">{% if app.request.getLocale()  == 'en' %}{{ produit.nomen }}{% else %}{{ produit.nom }}{% endif %}</span>

                            <div class=\"price\" style=\"display: inline-block; font-size: 14px;color: #374649;margin-left: 20px \">
                                                <span id=\"price{{ produit.id }}\">
                                                    {{ formated_price(produit.getTotalPrice(panier[produit.id])[\"prix\"],app.session.get(\"pays\"), false) }}
                                                </span>
                                <span>&nbsp;{{ app.session.get(\"pays\").devise }}</span>
                            </div>
                        </div>




                        <br>


                    {% endfor %}



                    <div class=\"w100 \">
                        {% if coupon and coupon != '' %}
                            {% if coupon.type == 1 %}
                                {% set total_price = total_price - coupon.montant %}
                            {% elseif coupon.type == 2 %}
                                {% set total_price = total_price / 100 *(100-coupon.pourcentage) %}
                            {% endif %}
                        {% endif %}

                        <div id=\"IdAlertRecaptcha\" hidden>
                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">

                                {{ \"captchincorect\"|trans({}, 'messages') }}
                            </div>
                        </div>


                        <table id=\"cart-summary\" class=\"std table\">
                            <tbody>
                            <tr>
                                <td colspan=\"2\">
                                    <div class=\"input-append couponForm \">

                                        <input class=\"col-lg-7\" id=\"couponinput\" name=\"couponinput\"
                                               type=\"text\"
                                               placeholder=\"{{ \"Code coupon\" | trans }}\"
                                               style=\"padding-right: 10px; padding-right: 10px;margin-right:10px; border-style: none;  border: 1px solid #ececec;outline: transparent;\">
                                        <button class=\"col-lg-4 btn btnb\" style=\"margin-right: 10px\" type=\"button\"
                                                onclick=\"verifcoupon()\"><span>{{ \"Appliquer\"|trans }}</span>
                                        </button>

                                    </div>

                                    <div class=\"input-group\" style=\"padding-top: 14px;padding-bottom: 5px;\">
                                        <div class=\"g-recaptcha\" data-sitekey=\"6LedckodAAAAAAE-j3jaEd9gBOEFaaM7xxW3FKN0\"></div>

                                        {#
                                                                            <div class=\"g-recaptcha\" data-sitekey=\"6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI\"></div>

                                                                            <div class=\"g-recaptcha\" data-sitekey=\"6Lc5D-wUAAAAAG7zVXP608ZJNL0HncaFG7jLsj2v\"></div>

                                        #}

                                        <script type=\"text/javascript\"
                                                src=\"https://www.google.com/recaptcha/api.js?hl=en\">
                                        </script>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span  class=\"labell pull-left\">
                                         {{ \"Total Commande\" | trans }}
                                    </span>
                                    <div class=\"site-color pull-right\">
                                        <span id=\"total-price\">{{ formated_price(total_price,app.session.get(\"pays\"), false) }}</span>
                                        <span hidden id=\"total-price-withoutforma\">{{ total_price }}</span>
                                        <span class=\"site-color\">{{ app.session.get(\"pays\").devise }}</span>

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


            <br> <br>


            <div class=\"  hidden-lg hidden-md\">
                <div class=\"row\">


                    <div class=\"col-xs-12 col-sm-12 \">

                        <a onclick=\"goToAdresse()\">
                            <button class=\"btn btn_card  w100\" style=\"padding-right: 25px;padding-left: 25px\">
                                {{ \"Valider\" | trans }}
                            </button>
                        </a>

                    </div>

                    <div class=\"col-xs-12 col-sm-12 \" style=\"text-align: center\">
                        <a href=\"/\" class=\"btn  \"
                           style=\"padding-right: 10px;padding-left: 10px;line-height: 40px\">
                            <i class=\"fa fa-arrow-left\"></i>&nbsp; {{ \"Retour à l'accueil\" | trans }}
                        </a>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <!-- Modal -->


        </div>


        <!--/ cartFooter -->


    </div>
    <div style=\"clear:both\"></div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"modal-coupon\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\" style=\"height: 200px !important;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"row transitionfx text-left\">

                    <div class=\"modal-header\" style=\"background: #df0c36;\">
                        <h4 class=\"modal-title\" id=\"exampleModalLongTitle\"
                            style=\"padding-left: 10px;margin-top: 11px;font-family: Roboto-Regular, sans-serif!important;color: white\">
                            {{ \"Vérification coupon\" | trans }}</h4>

                        <button style=\"padding-right: 10px;opacity: 1.2;margin-top: -36px;background-color: #df0c36\"
                                type=\"button\" class=\" close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span style=\"color: #ffffff\" aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body text-center\">
                        <h3 id=\"input_coupon_result\"></h3>
                    </div>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!--/row-->

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('assets/js/pickmeup.js?v3') }}\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>

    <script>

        \$('input[type=radio][name=\"mode\"]').change(function () {
            console.log(\"eeeee\")
            console.log(\$(this).val())


            if (\$(this).val() === '0') {
                console.log(\"equal zero\")

                \$(\"#divdrive\").show();
                \$(\"#divlivraison\").hide();


                \$(\".stileone\").css({
                    \"background\": \"#F7F9FA\",
                    \"border\": \"solid 1px #ED0000\",
                    \"border-radius\": \"10px\",
                    \"padding\": \"11px 58px 11px 11px\",
                    \"width\": \"fit-content\"
                });
                \$(\".stiletwo\").css({\"background\": \"white\", \"border\": \"solid 1px white\", \"border-radius\": \"10px\"});


            } else {
                console.log(\"equal one\")

                \$(\"#divdrive\").hide();
                \$(\"#divlivraison\").show();

                \$(\".stiletwo\").css({
                    \"background\": \"#F7F9FA\",
                    \"border\": \"solid 1px #ED0000\",
                    \"border-radius\": \"10px\",
                    \"padding\": \"11px 58px 11px 11px\",
                    \"width\": \"fit-content\"
                });

                \$(\".stileone\").css({\"background\": \"white\", \"border\": \"solid 1px white\", \"border-radius\": \"10px\"});


            }
        });
        /* \$(document).ready(function(){

                \$('input').iCheck({
                    checkboxClass: 'iradio_square-red',
                    radioClass: 'iradio_square-red',
                });
            });*/
        /*

          \$(\".stileone\").on(\"click\", function() {
               \$(this).css({\"background\": \"#F7F9FA\",\"border\": \"solid 1px #ED0000\",\"border-radius\":\"10px\",\"padding\":\"11px 58px 11px 11px\",\"width\":\"fit-content\"});
               \$(\".stiletwo\").css({\"background\": \"white\",\"border\": \"solid 1px white\",\"border-radius\":\"10px\"});

           })
           \$(\".stiletwo\").on(\"click\", function() {

               \$(this).css({\"background\": \"#F7F9FA\",\"border\": \"solid 1px #ED0000\",\"border-radius\":\"10px\",\"padding\":\"11px 58px 11px 11px\",\"width\":\"fit-content\"});

               \$(\".stileone\").css({\"background\": \"white\",\"border\": \"solid 1px white\",\"border-radius\":\"10px\"});

           })
         */


    </script>


    <script type=\"text/javascript\">

        function verifcoupon() {
            var coupon_value = \$(\"#couponinput\").val();
            //was   var totalprice = parseFloat(\$('#total-price').html());
            var totalprice = parseFloat(\$('#total-price-withoutforma').html());
            //  console.log(\"totalprice\"+totalprice);

            var recaptchaRes = grecaptcha.getResponse();
            // console.log(\"recaptchaRes\"+ recaptchaRes);
            if (recaptchaRes === \"\") {
                console.log(\"You can't proceed!\");
                //
                //     \$('#IdAlertRecaptcha').removeClass('hidden');
                \$('#IdAlertRecaptcha').show();
                return false;
            } else {
                console.log(\"Thank you\");
                //   \$('#IdAlertRecaptcha').addClass('hidden');
                \$('#IdAlertRecaptcha').hide();

            }

            \$.ajax({
                url: \"{{ (path('verificationCoupon')) }}\",
                dataType: 'Json',
                data: {\"coupon\": coupon_value},
                type: 'GET',
                success: function (coupon) {
                    if (coupon['result'] == true) {
                        \$.ajax({
                            url: \"{{ (path('executeCoupon')) }}\",
                            dataType: 'Json',
                            data: {\"coupon\": coupon_value},
                            type: 'GET',
                            success: function (data) {
                                if (data['result'] == true) {
                                    //  console.log(\"result\"+true);

                                    if (data['type'] == 1) {
                                        var montant = parseFloat(coupon['montant'])
                                        console.log('montant' + montant)
                                        console.log('total' + totalprice)
                                        if (montant > totalprice) {
                                            \$input_coupon = \$(\"#input_coupon_result\").html('Votre commande doit avoir un montant superieur à' + montant + '{{ app.session.get(\"pays\").devise }}');
                                            /* \$(\"document\").ready(function () {
                                                 \$('#modal-coupon').modal({
                                                     backdrop: 'static',
                                                     keyboard: false
                                                 });
                                             })*/
                                            jQuery.noConflict();

                                            \$(\"#modal-coupon\").modal(\"show\");

                                        } else {
                                            \$('#total-price').html((totalprice - montant).toFixed(3));
                                            \$(\".total_price_cart_empty\").html((totalprice - montant).toFixed(3));
                                            \$(\".total_price_cart\").html((totalprice - montant).toFixed(3));
                                        }

                                    }
                                    if (data['type'] == 2) {

                                        var pourcentage = parseFloat(coupon['pourcentage'])
                                        console.log(coupon['pourcentage'])
                                        console.log(totalprice)
                                        \$('#total-price').html((totalprice / 100 * (100 - pourcentage)).toFixed(3));
                                        \$(\".total_price_cart_empty\").html((totalprice / 100 * (100 - pourcentage)).toFixed(3));
                                        \$(\".total_price_cart\").html((totalprice / 100 * (100 - pourcentage)).toFixed(3));
                                    }

                                } else if (data['result'] == false && data['ancien'] !== undefined) {
                                    console.log(\"result\" + false);

                                    if (data['ancientype'] == 1) {

                                        var montant_ancien_reduit = parseFloat(totalprice + data['ancien'])
                                        console.log('montant_ancien_reduit1' + montant_ancien_reduit)
                                    }
                                    if (data['ancientype'] == 2) {
                                        var montant_ancien_reduit = totalprice + (totalprice / (100 - data['ancien']) * data['ancien']);
                                        console.log('montant_ancien_reduit2' + montant_ancien_reduit)
                                    }

                                    if (data['type'] == 1) {
                                        var price = parseFloat(montant_ancien_reduit - data['montant'])
                                        //   console.log('price1' + price)

                                        if (montant > montant_ancien_reduit) {

                                            \$input_coupon = \$(\"#input_coupon_result\").html('Votre commande doit avoir un montant superieur à' + montant + ' {{ app.session.get(\"pays\").devise }}');
                                            /*\$(\"document\").ready(function () {
                                                \$('#modal-coupon').modal({
                                                    backdrop: 'static',
                                                    keyboard: false
                                                });
                                            })*/
                                            jQuery.noConflict();

                                            \$(\"#modal-coupon\").modal(\"show\");

                                        } else {
                                            \$('#total-price').html((price).toFixed(3));
                                            \$(\".total_price_cart_empty\").html((price).toFixed(3));
                                            \$(\".total_price_cart\").html((price).toFixed(3));
                                        }
                                    }
                                    if (data['type'] == 2) {

                                        var price = montant_ancien_reduit / 100 * (100 - data['pourcentage']);
                                        console.log('price2' + price)
                                        \$('#total-price').html((price).toFixed(3));
                                        \$(\".total_price_cart_empty\").html((price).toFixed(3));
                                        \$(\".total_price_cart\").html((price).toFixed(3));
                                    }

                                } else {
                                    //console.log(\"result\"+\"befor else\");

                                    \$input_coupon = \$(\"#input_coupon_result\").html('Vous avez déja entrer un coupon');
                                    /*\$(\"document\").ready(function () {
                                        \$('#modal-coupon').modal({
                                            backdrop: 'static',
                                            keyboard: false
                                        });
                                    })*/
                                    jQuery.noConflict();

                                    \$(\"#modal-coupon\").modal(\"show\");

                                }

                            }
                        })
                    } else {
                        //console.log(\"result\"+\"last else\");
                        \$input_coupon = \$(\"#input_coupon_result\").html('Coupon invalide');
                        /* \$(\"document\").ready(function () {
                              \$('#modal-coupon').modal({
                                  backdrop: 'static',
                                  keyboard: false
                              });
                          })*/
                        jQuery.noConflict();

                        \$(\"#modal-coupon\").modal(\"show\");

                    }

                }
            })

        }
    </script>



    <script>
        function goToAdresse() {

            modereception = \$('input:radio[name=\"mode\"]:checked').val();
            // console.log(modereception);
            //console.log(\"modereception\");

            if (modereception === '1') {
                livraison = \$('input:radio[name=\"livraison\"]:checked').val();
                console.log(\"fffff\");
                console.log(livraison);
                console.log(modereception);

                window.location.href = '{{ \"validationAdresse\" }}?livraison=' + livraison + '&mode=' + 1;
            } else {
                var isOpen = document.getElementById(\"isOpen\").value;
                date = pickmeup('.single').get_date(\"Y-m-d\");
                periode = \$('input:radio[name=\"periode\"]:checked').val();

                //livraison = \$('input:radio[name=livraison]:checked').val();
                //facturation = \$('input:radio[name=facturation]:checked').val();
                var date_retrait = new Date(pickmeup('.single').get_date(\"Y-m-d\"))
                var date_now = new Date()
                if (date_retrait.toISOString().slice(0, 10) < date_now.toISOString().slice(0, 10)) {
                    /* \$(\".btn-small\").tooltip(\"destroy\");
                     \$(\".btn-small\").attr(\"data-toggle\",\"tooltip\");
                     \$(\".btn-small\").attr(\"title\",\"Le retrait n´est possible qu´à partir d'aujourd'hui.\");
                     \$(\".btn-small\").tooltip(\"show\");*/

                    alert(\"Le retrait n´est possible qu´à partir d'aujourd'hui.\")

                } else if ((date_retrait.getDay() === 0) && (isOpen === 'false')) {
                    /* \$(\".btn-small\").tooltip(\"destroy\");
                     \$(\".btn-small\").attr(\"data-toggle\",\"tooltip\");
                     \$(\".btn-small\").attr(\"title\",\"La station ne travaille pas \\n  les dimanches\");
                     \$(\".btn-small\").tooltip(\"show\");*/
                    alert(\"La station ne travaille pas \\n  les dimanches\")

                } else {
                    //  \$(\".btn-small\").tooltip(\"destroy\");
                    // window.location.href = '{{ path(\"validationAdresse\") }}?date=' + date + '&periode=' + periode+ '&mode=' + 0;
                    console.log(\"ttttt\");
                    console.log(periode);
                    if (periode === 'undefined' || periode == null) {

                        \$(\"#div_choix_cre_click\").show()


                    } else {
                        window.location.href = '{{ \"validationAdresse\" }}?date=' + date + '&periode=' + periode + '&mode=' + 0;

                    }
                }
            }

        }

        \$(\"#btn-add-adress\").click(function (event) {
                var reg = new RegExp(/^[0-9]{8}\$/);
                if (!reg.test(\$(\"#webbundle_utilisateursadresses_telephone\").val())) {
                    event.preventDefault();
                    /*  \$(\"#webbundle_utilisateursadresses_telephone\").attr(\"data-toggle\", \"tooltip\");
                      \$(\"#webbundle_utilisateursadresses_telephone\").attr(\"data-placement\", \"bottom\");
                      \$(\"#webbundle_utilisateursadresses_telephone\").attr(\"title\", \"Vérifier format du télephone \\n Exp:  90909090\");
                      \$(\"#webbundle_utilisateursadresses_telephone\").tooltip(\"show\");*/
                    alert(\"Vérifier format du télephone \\n Exp:  90909090\")
                } else {
                    //  \$(\"#webbundle_utilisateursadresses_telephone\").tooltip(\"destroy\");
                }
            }
        );
    </script>
    <script>
        selected_date = new Date();
        selected_date.setDate(selected_date.getDate())
        var date_now = new Date();
        var isTherperiod = 0;

        if (selected_date.toISOString().slice(0, 10) === date_now.toISOString().slice(0, 10)) {

            var element1 = document.getElementById('div-1');
            var element2 = document.getElementById('div-2');
            var element3 = document.getElementById('div-3');
            var element4 = document.getElementById('div-4');
            var element5 = document.getElementById('div-5');
            var element6 = document.getElementById('div-6');

            if (date_now.getHours() >= 8 && element1) {

                element1.style.display = 'none';
                \$('input:radio[name=\"periode\"][value=\"1\"]').attr('checked', false);
                \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', true);
                isTherperiod = 1;
            }
            if (date_now.getHours() >= 10 && element2) {
                element2.style.display = 'none';
                \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', false);
                \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', true);
                isTherperiod = 1;

            }
            if (date_now.getHours() >= 12 && element3) {
                element3.style.display = 'none';
                \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', false);
                \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', true);
                isTherperiod = 1;

            }
            if (date_now.getHours() >= 14 && element4) {
                element4.style.display = 'none';
                \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', false);
                \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', true);
                isTherperiod = 1;

            }
            if (date_now.getHours() >= 16 && element5) {
                element5.style.display = 'none';
                \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', false);
                \$('input:radio[name=\"periode\"][value=\"6\"]').attr('checked', true);

                isTherperiod = 1;


            }
            if (date_now.getHours() >= 18 && element6) {
                element6.style.display = 'none';
                \$('input:radio[name=\"periode\"][value=\"6\"]').attr('checked', false);
                isTherperiod = 1;

            }

        }

        {% if date.periode is defined %}
        \$('input:radio[name=\"periode\"][value=\"{{ date.periode }}\"]').attr('checked', true);
        {% endif %}

        {% if date.date  is defined %}
        selected_date = \"{{ date.date }}\";
        {% endif %}
        var today = new Date();

        //  console.log(isTherperiod);
        element = pickmeup('#single', {
            flat: true,
            min: today,
            render: function (date) {
                new_date = new Date();
                new_date.setDate(date.getDate());

                /*   if (new_date.toISOString().slice(0,10)  <= date_now.toISOString().slice(0,10)) {
                          return {disabled : true, class_name : 'date-in-past'};
                      }*/


                var isOpen = document.getElementById(\"isOpen\").value;
                var dt = new Date(date);

                if ((dt.getDay() === 0) && (isOpen === 'false')) {


                    return {disabled: true, class_name: 'date-in-past'};
                }
                return {};
            }
        }).set_date(selected_date);
        if (isTherperiod === 0) {

            \$(\"#div_choix_cre\").show();

        } else {

            \$(\"#div_choix_cre\").hide()

        }


        document.getElementById(\"single\").addEventListener('pickmeup-change', function (e) {
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1;
            var yyyy = today.getFullYear();

            if (dd < 10) {
                dd = '0' + dd;
            }
            if (mm < 10) {
                mm = '0' + mm;
            }
            var today = dd + '-' + mm + '-' + yyyy;

            var formateddate = new Date(e.detail.date);
            var todayff = new Date();


            if (formateddate.getTime() > todayff.getTime()) {

                isTherperiod = 0;

                var element1 = document.getElementById('div-1');
                var element2 = document.getElementById('div-2');
                var element3 = document.getElementById('div-3');
                var element4 = document.getElementById('div-4');
                var element5 = document.getElementById('div-5');
                var element6 = document.getElementById('div-6');
                if (date_now.getHours() >= 18 && element6) {
                    element6.style.display = 'block';
                    \$('input:radio[name=\"periode\"][value=\"6\"]').attr('checked', false);//was true
                    isTherperiod = 1;
                }
                if (date_now.getHours() >= 16 && element5) {
                    element5.style.display = 'block';
                    \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', false);//was true
                    isTherperiod = 1;
                }
                if (date_now.getHours() >= 14 && element4) {
                    element4.style.display = 'block';
                    \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', false);//was true
                    isTherperiod = 1;

                }
                if (date_now.getHours() >= 12 && element3) {
                    element3.style.display = 'block';
                    \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', false);//was true
                    isTherperiod = 1;

                }
                if (date_now.getHours() >= 10 && element2) {
                    element2.style.display = 'block';
                    \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', false);//was true
                    isTherperiod = 1;
                }
                if (date_now.getHours() >= 8 && element1) {
                    element1.style.display = 'block';
                    \$('input:radio[name=\"periode\"][value=\"1\"]').attr('checked', false);//was true
                    isTherperiod = 1;
                }


            } else {
                isTherperiod = 0;

                var element1 = document.getElementById('div-1');
                var element2 = document.getElementById('div-2');
                var element3 = document.getElementById('div-3');
                var element4 = document.getElementById('div-4');
                var element5 = document.getElementById('div-5');
                var element6 = document.getElementById('div-6');

                if (date_now.getHours() >= 8 && element1) {

                    element1.style.display = 'none';
                    \$('input:radio[name=\"periode\"][value=\"1\"]').attr('checked', false);
                    \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', true);
                    isTherperiod = 1;
                }
                if (date_now.getHours() >= 10 && element2) {
                    element2.style.display = 'none';
                    \$('input:radio[name=\"periode\"][value=\"2\"]').attr('checked', false);
                    \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', true);
                    isTherperiod = 1;
                }
                if (date_now.getHours() >= 12 && element3) {
                    element3.style.display = 'none';
                    \$('input:radio[name=\"periode\"][value=\"3\"]').attr('checked', false);
                    \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', true);
                    isTherperiod = 1;
                }
                if (date_now.getHours() >= 14 && element4) {
                    element4.style.display = 'none';
                    \$('input:radio[name=\"periode\"][value=\"4\"]').attr('checked', false);
                    \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', true);
                    isTherperiod = 1;
                }
                if (date_now.getHours() >= 16 && element5) {
                    element5.style.display = 'none';
                    \$('input:radio[name=\"periode\"][value=\"5\"]').attr('checked', false);
                    \$('input:radio[name=\"periode\"][value=\"6\"]').attr('checked', true);

                    isTherperiod = 1;
                }

                if (date_now.getHours() >= 18 && element6) {
                    element6.style.display = 'none';
                    \$('input:radio[name=\"periode\"][value=\"6\"]').attr('checked', false);

                    isTherperiod = 1;
                }
            }

            if (isTherperiod === 0) {
                \$(\"#div_choix_cre\").show();
            } else {
                \$(\"#div_choix_cre\").hide();

            }
        })

        /////


        function goToDate() {
            var isOpen = document.getElementById(\"isOpen\").value;
            date = pickmeup('.single').get_date(\"Y-m-d\");
            periode = \$('input:radio[name=periode]:checked').val();

            //livraison = \$('input:radio[name=livraison]:checked').val();
            //facturation = \$('input:radio[name=facturation]:checked').val();
            date_retrait = new Date(pickmeup('.single').get_date(\"Y-m-d\"))
            if (new Date(pickmeup('.single').get_date(\"Y-m-d\")) < new Date()) {
                /* \$(\".btn-small\").tooltip(\"destroy\");
                 \$(\".btn-small\").attr(\"data-toggle\",\"tooltip\");
                 \$(\".btn-small\").attr(\"title\",\"Le retrait n´est possible qu´à partir du lendemain  \\n de la date de la commande.\");
                 \$(\".btn-small\").tooltip(\"show\");*/
                alert(\"Le retrait n´est possible qu´à partir du lendemain  \\n de la date de la commande.\");
            } else if ((date_retrait.getDay() == 0) && (isOpen == 'false')) {
                /*   \$(\".btn-small\").tooltip(\"destroy\");
                   \$(\".btn-small\").attr(\"data-toggle\",\"tooltip\");
                   \$(\".btn-small\").attr(\"title\",\"La station ne travaille pas \\n  les dimanches\");
                   \$(\".btn-small\").tooltip(\"show\");*/
                alert(\"La station ne travaille pas \\n  les dimanches\");

            } else {
                // \$(\".btn-small\").tooltip(\"destroy\");
                if (periode == 'undefined' || periode == null) {

                    \$(\"#div_choix_cre_click\").show()

                } else {
                    window.location.href = '{{ \"validationAdresse\" }}?date=' + date + '&periode=' + periode;

                }
            }

        }

        /*  \$(\"document\").ready(function(){
              \$('input:radio[name=mode]').on('ifChecked', function(event){
                  if(\$(this).val() == 0){
                      \$(\"#divdrive\").show();
                      \$(\"#divlivraison\").hide();
                  }
                  else{
                      \$(\"#divdrive\").hide();
                      \$(\"#divlivraison\").show();
                  }
              });
          })

           \$(\"#btn-add-adress\").click(function(event){
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
", "FrontendBundle:panier:modereception.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/panier/modereception.html.twig");
    }
}
