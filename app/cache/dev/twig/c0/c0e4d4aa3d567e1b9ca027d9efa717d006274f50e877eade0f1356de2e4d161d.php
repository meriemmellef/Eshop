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

/* @Backend/gestionnaire/produit/new.html.twig */
class __TwigTemplate_8575f4d2f5bb8159ac3268bd74b94760007a93030209fcda091c9e3d6ac31843 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gestionnaire/produit/new.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/gestionnaire/produit/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 5
        echo "
  <style>
        input[type='radio'] {
            -webkit-appearance:none;
            width:20px;
            height:20px;
            border:1px solid #e2e2e2;
            border-radius:50%;
            outline:none;
            box-shadow:0 0 1px 0 #e2e2e2 inset;
        }

        input[type='radio']:hover {
            box-shadow:0 0 1px 0 #e2e2e2 inset;
        }

        input[type='radio']:before {
            content:'';
            display:block;
            width:50%;
            height:50%;
            margin: 20% auto;
            border-radius:50%;
        }
        input[type='radio']:checked:before {
            background: #dd1d36;
        }
        li {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }


    </style>

    <div class=\"page\">
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <h4 class=\"example-title\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nouveau Produit"), "html", null, true);
        echo " </h4>
                                <br><br>
                                ";
        // line 51
        if ((isset($context["errort"]) || array_key_exists("errort", $context))) {
            // line 52
            echo "                                    <div class=\"col-lg-12 text-center\">
                                        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">×</span>
                                            </button>
                                            ";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["errort"] ?? $this->getContext($context, "errort"))), "html", null, true);
            echo "
                                        </div>
                                    </div>
                                    <br><br>
                                ";
        }
        // line 62
        echo "                                <div class=\"row row-lg\">

                                    ";
        // line 64
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "col-lg-12 "]]);
        echo "
                                    ";
        // line 65
        if ($this->getAttribute(($context["form"] ?? null), "categorie", [], "any", true, true)) {
            // line 66
            echo "                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-3 text-right\">
                                                    <label>";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
            echo "<span style=\"color: #ED0000\">*</span>  :</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    ";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                                </div>
                                            </div>
                                        </div>

                                        <br><br>
                                    ";
        }
        // line 79
        echo "                                    ";
        if ($this->getAttribute(($context["form"] ?? null), "sous_categorie", [], "any", true, true)) {
            // line 80
            echo "                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-3 text-right\">
                                                    <label>";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégorie"), "html", null, true);
            echo "<span style=\"color: #ED0000\">*</span>  :</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    ";
            // line 86
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sous_categorie", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                    ";
        }
        // line 92
        echo "                                    ";
        // line 107
        echo "

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">

                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span>  :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 116
        if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en"))) {
            // line 117
            echo "                                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomen", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "

                                                ";
        } else {
            // line 120
            echo "                                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "

                                                ";
        }
        // line 123
        echo "                                            </div>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">

                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo " :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 135
        if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en"))) {
            // line 136
            echo "                                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descriptionen", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "

                                                ";
        } else {
            // line 139
            echo "                                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "

                                                ";
        }
        // line 142
        echo "                                            </div>
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">

                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix"), "html", null, true);
        echo " :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prix", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <br>

                                                ";
        // line 173
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                            </div>

                                            <div class=\"col-lg-6 text-left\">
                                                <div class=\"checkbox-custom checkbox-primary center-block\">
                                                    ";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "is_promo", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <label for=\"inputChecked\">";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Est Promo"), "html", null, true);
        echo "?</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-12\" id=\"div_prix_promo\">
                                        <br><br>

                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-xxl-8 col-lg-8\">
                                                <!-- Example Tabs In The Panel -->
                                                <div class=\"panel nav-tabs-horizontal\" data-plugin=\"tabs\">
                                                    <ul class=\"nav nav-tabs nav-tabs-line \" role=\"tablist\">

                                                        <li class=\"nav-item \" id=\"titleeeone\" >
                                                            <input  type=\"radio\" id=\"radPromotionP\" name=\"heatSwitchtwo\" value=\"12\" checked />

                                                            <a class=\"nav-link active\"  id=\"promo_prix\"  style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#promoparprix\"
                                                               aria-controls=\"exampleTopHome\" role=\"tab\" aria-selected=\"true\">
                                                                ";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion par prix"), "html", null, true);
        echo "
                                                            </a>

                                                        </li>
                                                        <li class=\"nav-item \"  id=\"titleee\">

                                                            <input type=\"radio\" id=\"radPromotionPor\" name=\"heatSwitchtwo\" value=\"13\"  >

                                                            <a class=\"nav-link\" id=\"promo_pourcentage\" style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#promoparpourcentage\" aria-controls=\"exampleTopComponents\" role=\"tab\" aria-selected=\"false\">
                                                                ";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion en pourcentage"), "html", null, true);
        echo "
                                                            </a>


                                                        </li>
                                                    </ul>


                                                    <div class=\"panel-body\" style=\"border: 1px solid #d4d4d4;\">
                                                        <div class=\"tab-content\">
                                                            <div class=\"tab-pane active\" id=\"promoparprix\" role=\"tabpanel\">

                                                                <div class=\"row row-lg\">
                                                                    <div class=\"col-lg-3 text-left\" style=\"padding-right: 0px;padding-left: 4px;\">
                                                                        <label>";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix en promotion"), "html", null, true);
        echo " :</label>
                                                                    </div>
                                                                    <div class=\"col-lg-9 text-left\">
                                                                        ";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prix_promo", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class=\"tab-pane\" id=\"promoparpourcentage\" role=\"tabpanel\">
                                                                <div class=\"col-lg-12\">
                                                                    <div class=\"row row-lg\">
                                                                        <div class=\"col-lg-3 text-left\" style=\"padding-right: 0px;padding-left: 4px;\">
                                                                            <label>";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pourcentage de promotion"), "html", null, true);
        echo ":</label>
                                                                        </div>
                                                                        <div class=\"col-lg-9 text-left\">
                                                                            ";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "poucentage_promo", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                                            <br>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br><br>
                                                                <div class=\"col-lg-12\">
                                                                    <div class=\"row row-lg\">
                                                                        <div class=\"col-lg-3 text-left\" style=\"padding-right: 0px;padding-left: 4px;\">
                                                                            <label>";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Numéro de produit à reduire"), "html", null, true);
        echo ":</label>
                                                                        </div>
                                                                        <div class=\"col-lg-9 text-left\">
                                                                            ";
        // line 261
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "num_produit_promo", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                                            <br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Example Tabs In The Panel -->
                                            </div>
                                        </div>
                                    </div>


                                    <br><br>

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 285
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imagefile", []), 'widget', ["attr" => ["id" => "input-file-now", "data-plugin" => "dropify", "data-default-file" => "", "style" => "max-height: 100px;max-width:300px"]]);
        echo "
                                                <h6 style=\"color: #ED0000\">";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("image"), "html", null, true);
        echo " ( 400 × 352 px ) ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("maxsize"), "html", null, true);
        echo " (1024k)</h6>

                                            </div>
                                        </div>
                                    </div>

                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fichetechnique"), "html", null, true);
        echo ":</label>
                                            </div>
                                            ";
        // line 305
        echo "

                                            <div class=\"col-lg-6 text-left input-group input-group-file \"
                                                 data-plugin=\"inputGroupFile\">

                                                <input type=\"text\" class=\"form-control\" readonly=\"\"
                                                       id=\"input_cgu_file_upload\">


                                                <span class=\"input-group-btn\">
                                                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                                                 <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                                                ";
        // line 318
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    ";
        // line 319
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'errors');
        echo "
                                                    ";
        // line 320
        if (($context["produit"] ?? $this->getContext($context, "produit"))) {
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["legal_notice_directory"] ?? $this->getContext($context, "legal_notice_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "file", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "file", []), "html", null, true);
            echo "</a>";
        }
        // line 321
        echo "                                                  </span>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>

";
        // line 328
        echo "                                    <br><br>

                                    <div class=\"col-lg-12\" id=\"divcouleur\" >


                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-4\">
                                            </div>
                                            <div class=\"col-lg-6 \" id=\"divbtnadd\" style=\"margin-top: -33px; \">
                                                <button type=\"button\" onclick=\"adddivcouleur()\"
                                                        class=\"btn social-evernote  waves-effect waves-classic\">
                                                    <i class=\"icon md-plus\"></i> ";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter une couleur"), "html", null, true);
        echo "
                                                </button>
                                            </div>

                                        </div>
                                    </div>
";
        // line 348
        echo "


                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                            </div>

                                                <div class=\"col-lg-6 text-left\">
                                                    <div class=\"checkbox-custom checkbox-primary center-block\">
                                                        ";
        // line 359
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "is_active", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                        <label for=\"inputChecked\">";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Est Active"), "html", null, true);
        echo "?</label>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                            </div>

                                            <div class=\"col-lg-6 text-left\">
                                                <div class=\"checkbox-custom checkbox-primary center-block\">
                                                    ";
        // line 374
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isActiveInAllStation", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <label for=\"isActiveInAllStation\">";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("is_active_in_all_station"), "html", null, true);
        echo "?</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                    <br><br>
                                    ";
        // line 392
        echo "

                                    <div class=\"col-lg-12 text-center\">

                                        <div class=\"row\">
                                            <div class=\"col-lg-6 text-right\">
                                                <button class=\"btn md-edit social-evernote  waves-effect waves-classic\">";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "</button>

                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                <a href=\"";
        // line 402
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_index");
        echo "\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</a>
                                            </div>
                                        </div>
                                    </div>
                                    ";
        // line 406
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

                                    <br>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 421
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 422
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 432
        echo "
    <script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/Plugin/input-group-file.js"), "html", null, true);
        echo "\"></script>


    <script type=\"text/javascript\">
        \$(\"#produit_file\").change(function () {
            // alert(\$(\"#pays_cgu_file_upload\").val());
            content = \$(\"#produit_file\").val();
            \$('#input_cgu_file_upload').val(content);
        });

        //div_prix_promo   is_promo

        if (\$('#produit_is_promo').is(\":checked\"))
        {
            // it is checked
            \$(\"#div_prix_promo\").show()

        }else {
            \$(\"#div_prix_promo\").hide()

            console.log(\"hi bb not checked\")
            ///all promo field not required
            \$('#produit_prix_promo').prop('required',false);
            \$('#produit_poucentage_promo').prop('required',false);
            \$('#produit_num_produit_promo').prop('required',false);

        }


    </script >
    <script>
//            document.getElementById(\"inputprix\").required = true;


\$(\"document\").ready(function(){
            \$('#radPromotionP').on(\"click\",function(){
                 console.log(\"promo_prix\")
            //    \$('#produit_poucentage_promo').val('');
            //    \$('#produit_num_produit_promo').val('');
                \$(\"#radPromotionP\").prop(\"checked\", true);
                \$(\"#radPromotionPor\").prop(\"checked\", false);
                \$('#titleeeone').find('a').trigger('click');


                \$('#produit_prix_promo').prop('required',true);
                \$('#produit_poucentage_promo').prop('required',false);
                \$('#produit_num_produit_promo').prop('required',false);

            })

            \$('#radPromotionPor').on(\"click\",function(){
              console.log(\"promo_pourcentage\")

           //     \$('#produit_prix_promo').val('');
                \$(\"#radPromotionP\").prop(\"checked\", false);
                \$(\"#radPromotionPor\").prop(\"checked\", true);
                \$('#titleee').find('a').trigger('click');



                \$('#produit_prix_promo').prop('required',false);
                \$('#produit_poucentage_promo').prop('required',true);
                \$('#produit_num_produit_promo').prop('required',true);

            })

            \$('#produit_is_promo').change(function() {
                if(this.checked) {
                    \$(\"#div_prix_promo\").show()
                    \$('#produit_prix_promo').prop('required',true);
                    \$('#produit_poucentage_promo').prop('required',false);
                    \$('#produit_num_produit_promo').prop('required',false);

                }else {
                    \$(\"#div_prix_promo\").hide()
                    \$('#produit_prix_promo').prop('required',false);
                    \$('#produit_poucentage_promo').prop('required',false);//was true
                    \$('#produit_num_produit_promo').prop('required',false);//was true

                }
            });


           \$('#promo_prix').on(\"click\",function(){

         //       \$('#produit_poucentage_promo').val('');
          //      \$('#produit_num_produit_promo').val('');

             \$(\"#radPromotionP\").prop(\"checked\", true);
             \$(\"#radPromotionPor\").prop(\"checked\", false);


               \$('#produit_prix_promo').prop('required',true);
               \$('#produit_poucentage_promo').prop('required',false);
               \$('#produit_num_produit_promo').prop('required',false);


           })

            \$('#promo_pourcentage').on(\"click\",function(){
            //    \$('#produit_prix_promo').val('');

            \$(\"#radPromotionP\").prop(\"checked\", false);
             \$(\"#radPromotionPor\").prop(\"checked\", true);


                \$('#produit_prix_promo').prop('required',false);
                \$('#produit_poucentage_promo').prop('required',true);
                \$('#produit_num_produit_promo').prop('required',true);


            })

            \$(\"#produit_poucentage_promo\").change(function(){
                //does some stuff;
                \$('#produit_prix_promo').val('');
            });
            \$(\"#produit_prix_promo\").change(function(){
                //does some stuff;
                \$('#produit_poucentage_promo').val('');
                \$('#produit_num_produit_promo').val('');
            });





           // \$(\"select\").select2();
            if (\$(\"select\").length > 0)
                \$(\"select\").select2();

        })

//

        \$( \"select[name='produit[categorie]']\" ).change(function () {
            var matiereID = \$(this).val();
           // console.log('rahmaaaaaa');
           // console.log('aaaaa');
            console.log(matiereID);

            if(matiereID) {


                \$.ajax({
                    url: \"";
        // line 578
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_sous_categorie_from_categorie");
        echo "\",
                    dataType: 'Json',
                    data: {'categorieid':matiereID},
                    type:'GET',
                    success: function(data) {
                        \$('select[name=\"produit[sous_categorie]\"]').empty();
                        \$('select[name=\"produit[sous_categorie]').append('<option value=\"\" selected hidden>'+ 'choisir une sous categorie' +'</option>');

                        for(i = 0; i < data.length; i++) {
                            student = data[i];
                            \$('select[name=\"produit[sous_categorie]').append('<option value=\"'+ student['id'] +'\">'+ student['nom'] +'</option>');
                        };

                    }
                });

                (function (document, window, \$) {
                    \$(\"select\").select2();
                })(document, window, jQuery);
            }else{
                \$('select[name=\"produit[sous_categorie]\"]').empty();
                (function (document, window, \$) {
                    \$(\"select\").select2();
                })(document, window, jQuery);
            }
        });

    </script>


    <script>
        function updatequantityofsize(id){
            var quantity = parseInt(  \$(\"#quantityofsize\"+id).val());
            //console.log(quantity)
            if(quantity> 0){
                \$.ajax({
                    url: \"";
        // line 614
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_size");
        echo "\",
                    dataType: 'Json',
                    data: {'id':id,'quantite':quantity},
                    type:'GET',
                    success: function(data) {
                        \$(\"#quantityofsize\"+id).val(quantity);
                        alert(\"la quantité est modifiée avec succes\")
                    }
                });

            }
            else{
                alert(\"la quantité doit ètre >0\")
            }
        }
        var couleur = -1;

        function adddivcouleur(){
            divinitial=document.getElementById('divbtnadd').style.marginTop = \"15px\";
            divinitial=document.getElementById('divbtnadd').style.paddingLeft = \"0px\";
              console.log(\"cooooleur\"+couleur);
           if (  parseInt( \$(\"#couleur\").val()) == \"undefined\" || isNaN(parseInt( \$(\"#couleur\").val()))) {
               couleur++
               console.log(\"couleurplus\"+couleur);


           }else {
                couleur = parseInt( \$(\"#couleur\").val()) +  1;
              // console.log(\"couleparsint\"+couleur);

            }


            //var couleur =  +1;

            const div = document.createElement('div');
            div.className = 'row row-lg';
            div.style='padding-top: 10px';
            div.id='rowcouleur';
            div.innerHTML =
                '<div class=\"col-lg-12\">'+
                '<div class=\"row row-lg\">'+

                '<div class=\"col-lg-4 text-left\"> ' +
                '<input type=\"color\" class=\"form-control\" name=\"couleurs[]\"> ' +
                '<input type=\"text\" class=\"form-control\" name=\"couleur'+couleur+'\" value=\"'+couleur+'\" hidden>' +
                '</div>' +
                '<div class=\"col-lg-8 text-left\"> ' +
                '<div class=\"input-group input-group-file\" data-plugin=\"inputGroupFile\"> ' +
                '<input type=\"text\" class=\"form-control\" readonly=\"\"> ' +
                '<span class=\"input-group-btn\"> ' +
                '<span class=\"btn btn-default btn-file waves-effect waves-classic\"> ' +
                '<i class=\"icon md-upload\" aria-hidden=\"true\"></i> ' +
                '<input type=\"file\"  accept=\"image/*\" name=\"images[]\" > ' +
                '</span> ' +
                '</span> ' +
                '</div> ' +
                '</div> ' +
                '<div class=\"col-lg-2 text-left\"> </div>'+
                '</div> '+
                '</div> ' ;

            const divsize = document.createElement('div');

            divsize.className = 'row row-lg';
            divsize.style='padding-top: 10px';
            divsize.id='rowsize'+couleur;
            divsize.innerHTML =
                '<div class=\"col-lg-12\">'+
                '<div class=\"row row-lg\">'+
                '<div class=\"col-lg-4 text-right\">' +
                '<input type=\"text\" class=\"form-control\" name=\"sizes'+couleur+'[]\" placeholder=\"size\">'+
                // '<select class=\"form-control\" id=\"sizes\" style=\"text-align-last: center\" name=\"sizes'+couleur+'[]\" > ' +
                //   '";
        // line 687
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sizeValue", []));
        foreach ($context['_seq'] as $context["key"] => $context["size"]) {
            echo "'+
                //  ' <option value=\"";
            // line 688
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"  >";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "</option>'+
                //  '  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 689
        echo "'+
                //   '  </select>'+
                '  </div>'+
                '  <div class=\"col-lg-8 text-left\">'+
                '  <span class=\"input-group-btn\">'+
                ' <input type=\"number\" min=\"0\" class=\"form-control\" name=\"quantity'+couleur+'[]\" value=\"0\">'+
                '<button type=\"button\" style=\"border-top-left-radius: 0;border-bottom-left-radius: 0;\" onclick=\"adddivsize('+couleur+')\" class=\"btn social-evernote waves-effect waves-classic\">' +
                '<i class=\"icon md-plus\"></i>' +
                '</button>'+
                '   </span>'+
                '  </div>'+
                '  <div class=\"col-lg-3 text-left\">'+
                '   </div>'+
                '   </div>'+
                '   </div>';


            const divrow = document.createElement('div');
            divrow.className = 'row row-lg';
            divrow.style='padding-top: 10px';
            divrow.innerHTML =
                '<div class=\"col-lg-4 text-right\"></div>' +
                '<div class=\"col-lg-6 text-right\" style=\"border: 1px solid #dcdcdc;padding: 15px 15px 15px 15px;\" >' +
                div.outerHTML+
                divsize.outerHTML+
                ' </div>';


            document.getElementById('divcouleur').appendChild(divrow);
            \$(\"#couleur\").val(couleur)
        }
        function adddivsize(i){
            var couleur = parseInt(  \$(\"#couleur\").val());
            console.log(\"couleur\"+couleur)
            console.log(couleur)
            const div = document.createElement('div');
            div.className = 'col-lg-12';
            div.style='padding-top: 10px';
            div.innerHTML =

                '<div class=\"row row-lg\">'+
                '<div class=\"col-lg-4 text-right\">' +
                '<input type=\"text\" class=\"form-control\" name=\"sizes'+i+'[]\" placeholder=\"size\">'+
                //    '<select class=\"form-control\" id=\"sizes\" style=\"text-align-last: center\" name=\"sizes'+i+'[]\" > ' +
                //    '";
        // line 733
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sizeValue", []));
        foreach ($context['_seq'] as $context["key"] => $context["size"]) {
            echo "'+
                //   ' <option value=\"";
            // line 734
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"  >";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "</option>'+
                //   '  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 735
        echo "'+
                //   '  </select>'+
                '  </div>'+
                '  <div class=\"col-lg-8 text-left\">'+
                '  <span class=\"input-group-btn\">'+
                ' <input type=\"number\" min=\"0\" class=\"form-control\" name=\"quantity'+i+'[]\" value=\"0\">'+
                '   </span>'+
                '  </div>'+
                '  <div class=\"col-lg-3 text-left\">'+
                '   </div>'+
                '   </div>';
            document.getElementById('rowsize'+i).appendChild(div);
        }

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/gestionnaire/produit/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  953 => 735,  943 => 734,  937 => 733,  891 => 689,  881 => 688,  875 => 687,  799 => 614,  760 => 578,  612 => 433,  609 => 432,  604 => 422,  598 => 421,  576 => 406,  567 => 402,  560 => 398,  552 => 392,  537 => 375,  533 => 374,  516 => 360,  512 => 359,  499 => 348,  490 => 341,  475 => 328,  467 => 321,  457 => 320,  453 => 319,  449 => 318,  434 => 305,  429 => 296,  414 => 286,  410 => 285,  404 => 282,  380 => 261,  374 => 258,  361 => 248,  355 => 245,  341 => 234,  335 => 231,  318 => 217,  306 => 208,  281 => 186,  277 => 185,  263 => 173,  257 => 155,  251 => 152,  239 => 142,  232 => 139,  225 => 136,  223 => 135,  217 => 132,  206 => 123,  199 => 120,  192 => 117,  190 => 116,  184 => 113,  176 => 107,  174 => 92,  165 => 86,  159 => 83,  154 => 80,  151 => 79,  141 => 72,  135 => 69,  130 => 66,  128 => 65,  124 => 64,  120 => 62,  112 => 57,  105 => 52,  103 => 51,  98 => 49,  52 => 5,  46 => 4,  30 => 1,);
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


{% block page %}

  <style>
        input[type='radio'] {
            -webkit-appearance:none;
            width:20px;
            height:20px;
            border:1px solid #e2e2e2;
            border-radius:50%;
            outline:none;
            box-shadow:0 0 1px 0 #e2e2e2 inset;
        }

        input[type='radio']:hover {
            box-shadow:0 0 1px 0 #e2e2e2 inset;
        }

        input[type='radio']:before {
            content:'';
            display:block;
            width:50%;
            height:50%;
            margin: 20% auto;
            border-radius:50%;
        }
        input[type='radio']:checked:before {
            background: #dd1d36;
        }
        li {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }


    </style>

    <div class=\"page\">
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <h4 class=\"example-title\">{{ \"Nouveau Produit\"|trans }} </h4>
                                <br><br>
                                {% if errort is defined %}
                                    <div class=\"col-lg-12 text-center\">
                                        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">×</span>
                                            </button>
                                            {{ errort|trans }}
                                        </div>
                                    </div>
                                    <br><br>
                                {% endif %}
                                <div class=\"row row-lg\">

                                    {{ form_start(form, {'attr': {'class': 'col-lg-12 '}}) }}
                                    {% if  form.categorie is defined%}
                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-3 text-right\">
                                                    <label>{{\"Catégorie\"|trans}}<span style=\"color: #ED0000\">*</span>  :</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
                                                </div>
                                            </div>
                                        </div>

                                        <br><br>
                                    {% endif %}
                                    {% if  form.sous_categorie is defined%}
                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-3 text-right\">
                                                    <label>{{\"Sous Catégorie\"|trans}}<span style=\"color: #ED0000\">*</span>  :</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    {{ form_widget(form.sous_categorie, {'attr': {'class': 'form-control'}}) }}
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                    {% endif %}
                                    {#
                                         {% if  form.stations is defined%}
                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-3 text-right\">
                                                    <label>{{\"stations\"|trans}}<span style=\"color: #ED0000\">*</span>  :</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    {{ form_widget(form.stations, {'attr': {'class': 'form-control'}}) }}
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                    {% endif %}
                                    #}


                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">

                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Nom\"|trans }}<span style=\"color: #ED0000\">*</span>  :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {% if pays.frontLanguage  == 'EN' or pays.frontLanguage  == 'en' %}
                                                    {{ form_widget(form.nomen, {'attr': {'class': 'form-control'}}) }}

                                                {% else %}
                                                    {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}

                                                {% endif %}
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">

                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Description\"|trans }} :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {% if  pays.frontLanguage  == 'EN' or pays.frontLanguage  == 'en' %}
                                                    {{ form_widget(form.descriptionen, {'attr': {'class': 'form-control'}}) }}

                                                {% else %}
                                                    {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}

                                                {% endif %}
                                            </div>
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">

                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Prix\"|trans }} :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.prix, {'attr': {'class': 'form-control'}}) }}
                                                <br>

                                                {#
                                                        {% if not form.vars.valid %}
                                                    {% for child in form.children %}
                                                        {%for error in child.vars.errors%}
                                                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                                    <span aria-hidden=\"true\">×</span>
                                                                </button>
                                                                {{\"le prix n'est pas valide\"|trans}}
                                                            </div>
                                                        {%endfor%}
                                                    {%endfor%}

                                                {%endif%}
                                                #}

                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                            </div>

                                            <div class=\"col-lg-6 text-left\">
                                                <div class=\"checkbox-custom checkbox-primary center-block\">
                                                    {{ form_widget(form.is_promo, {'attr': {'class': 'form-control'}}) }}
                                                    <label for=\"inputChecked\">{{ \"Est Promo\"|trans }}?</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-12\" id=\"div_prix_promo\">
                                        <br><br>

                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-xxl-8 col-lg-8\">
                                                <!-- Example Tabs In The Panel -->
                                                <div class=\"panel nav-tabs-horizontal\" data-plugin=\"tabs\">
                                                    <ul class=\"nav nav-tabs nav-tabs-line \" role=\"tablist\">

                                                        <li class=\"nav-item \" id=\"titleeeone\" >
                                                            <input  type=\"radio\" id=\"radPromotionP\" name=\"heatSwitchtwo\" value=\"12\" checked />

                                                            <a class=\"nav-link active\"  id=\"promo_prix\"  style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#promoparprix\"
                                                               aria-controls=\"exampleTopHome\" role=\"tab\" aria-selected=\"true\">
                                                                {{ \"Promotion par prix\"|trans }}
                                                            </a>

                                                        </li>
                                                        <li class=\"nav-item \"  id=\"titleee\">

                                                            <input type=\"radio\" id=\"radPromotionPor\" name=\"heatSwitchtwo\" value=\"13\"  >

                                                            <a class=\"nav-link\" id=\"promo_pourcentage\" style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#promoparpourcentage\" aria-controls=\"exampleTopComponents\" role=\"tab\" aria-selected=\"false\">
                                                                {{ \"Promotion en pourcentage\"|trans }}
                                                            </a>


                                                        </li>
                                                    </ul>


                                                    <div class=\"panel-body\" style=\"border: 1px solid #d4d4d4;\">
                                                        <div class=\"tab-content\">
                                                            <div class=\"tab-pane active\" id=\"promoparprix\" role=\"tabpanel\">

                                                                <div class=\"row row-lg\">
                                                                    <div class=\"col-lg-3 text-left\" style=\"padding-right: 0px;padding-left: 4px;\">
                                                                        <label>{{ \"Prix en promotion\"|trans }} :</label>
                                                                    </div>
                                                                    <div class=\"col-lg-9 text-left\">
                                                                        {{ form_widget(form.prix_promo, {'attr': {'class': 'form-control'}}) }}


                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class=\"tab-pane\" id=\"promoparpourcentage\" role=\"tabpanel\">
                                                                <div class=\"col-lg-12\">
                                                                    <div class=\"row row-lg\">
                                                                        <div class=\"col-lg-3 text-left\" style=\"padding-right: 0px;padding-left: 4px;\">
                                                                            <label>{{ \"Pourcentage de promotion\"|trans }}:</label>
                                                                        </div>
                                                                        <div class=\"col-lg-9 text-left\">
                                                                            {{ form_widget(form.poucentage_promo, {'attr': {'class': 'form-control'}}) }}
                                                                            <br>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br><br>
                                                                <div class=\"col-lg-12\">
                                                                    <div class=\"row row-lg\">
                                                                        <div class=\"col-lg-3 text-left\" style=\"padding-right: 0px;padding-left: 4px;\">
                                                                            <label>{{\"Numéro de produit à reduire\"|trans}}:</label>
                                                                        </div>
                                                                        <div class=\"col-lg-9 text-left\">
                                                                            {{ form_widget(form.num_produit_promo, {'attr': {'class': 'form-control'}}) }}
                                                                            <br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Example Tabs In The Panel -->
                                            </div>
                                        </div>
                                    </div>


                                    <br><br>

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Image\"|trans }} <span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.imagefile, {'attr': {'id': 'input-file-now', 'data-plugin':'dropify','data-default-file': '','style' : 'max-height: 100px;max-width:300px'}}) }}
                                                <h6 style=\"color: #ED0000\">{{ \"image\"|trans }} ( 400 × 352 px ) {{ \"maxsize\"|trans }} (1024k)</h6>

                                            </div>
                                        </div>
                                    </div>

                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{\"Fichetechnique\"|trans}}:</label>
                                            </div>
                                            {#
                                                <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.file, {'attr': {'class': 'form-control'}}) }}
                                                {{ form_errors(form.file) }}

                                            </div>
                                            #}


                                            <div class=\"col-lg-6 text-left input-group input-group-file \"
                                                 data-plugin=\"inputGroupFile\">

                                                <input type=\"text\" class=\"form-control\" readonly=\"\"
                                                       id=\"input_cgu_file_upload\">


                                                <span class=\"input-group-btn\">
                                                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                                                 <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                                                {{ form_widget(form.file, {'attr': {'class': 'form-control'}}) }}
                                                    {{ form_errors(form.file) }}
                                                    {% if produit %}<a target=\"_blank\" href=\"{{ legal_notice_directory }}/{{ produit.file }}\">{{ produit.file }}</a>{% endif %}
                                                  </span>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>

{#RAHLMMMMMM#}
                                    <br><br>

                                    <div class=\"col-lg-12\" id=\"divcouleur\" >


                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-4\">
                                            </div>
                                            <div class=\"col-lg-6 \" id=\"divbtnadd\" style=\"margin-top: -33px; \">
                                                <button type=\"button\" onclick=\"adddivcouleur()\"
                                                        class=\"btn social-evernote  waves-effect waves-classic\">
                                                    <i class=\"icon md-plus\"></i> {{ \"Ajouter une couleur\"|trans }}
                                                </button>
                                            </div>

                                        </div>
                                    </div>
{#RAHLMMMMMM#}



                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                            </div>

                                                <div class=\"col-lg-6 text-left\">
                                                    <div class=\"checkbox-custom checkbox-primary center-block\">
                                                        {{ form_widget(form.is_active, {'attr': {'class': 'form-control'}}) }}
                                                        <label for=\"inputChecked\">{{ \"Est Active\"|trans }}?</label>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                            </div>

                                            <div class=\"col-lg-6 text-left\">
                                                <div class=\"checkbox-custom checkbox-primary center-block\">
                                                    {{ form_widget(form.isActiveInAllStation, {'attr': {'class': 'form-control'}}) }}
                                                    <label for=\"isActiveInAllStation\">{{ \"is_active_in_all_station\"|trans }}?</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                    <br><br>
                                    {#
                                        <div class=\"col-lg-12 text-center\">
                                        <button class=\"btn social-evernote  waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>
                                    </div>
                                    #}


                                    <div class=\"col-lg-12 text-center\">

                                        <div class=\"row\">
                                            <div class=\"col-lg-6 text-right\">
                                                <button class=\"btn md-edit social-evernote  waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>

                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                <a href=\"{{ path('produit_index') }}\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">{{ 'back'|trans }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    {{ form_end(form) }}

                                    <br>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


{% endblock %}
{% block javascripts %}
    {{ parent() }}
    {#
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />

        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

was     <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js\"></script>

    #}

    <script src=\"{{ asset('remark/global/js/Plugin/input-group-file.js')}}\"></script>


    <script type=\"text/javascript\">
        \$(\"#produit_file\").change(function () {
            // alert(\$(\"#pays_cgu_file_upload\").val());
            content = \$(\"#produit_file\").val();
            \$('#input_cgu_file_upload').val(content);
        });

        //div_prix_promo   is_promo

        if (\$('#produit_is_promo').is(\":checked\"))
        {
            // it is checked
            \$(\"#div_prix_promo\").show()

        }else {
            \$(\"#div_prix_promo\").hide()

            console.log(\"hi bb not checked\")
            ///all promo field not required
            \$('#produit_prix_promo').prop('required',false);
            \$('#produit_poucentage_promo').prop('required',false);
            \$('#produit_num_produit_promo').prop('required',false);

        }


    </script >
    <script>
//            document.getElementById(\"inputprix\").required = true;


\$(\"document\").ready(function(){
            \$('#radPromotionP').on(\"click\",function(){
                 console.log(\"promo_prix\")
            //    \$('#produit_poucentage_promo').val('');
            //    \$('#produit_num_produit_promo').val('');
                \$(\"#radPromotionP\").prop(\"checked\", true);
                \$(\"#radPromotionPor\").prop(\"checked\", false);
                \$('#titleeeone').find('a').trigger('click');


                \$('#produit_prix_promo').prop('required',true);
                \$('#produit_poucentage_promo').prop('required',false);
                \$('#produit_num_produit_promo').prop('required',false);

            })

            \$('#radPromotionPor').on(\"click\",function(){
              console.log(\"promo_pourcentage\")

           //     \$('#produit_prix_promo').val('');
                \$(\"#radPromotionP\").prop(\"checked\", false);
                \$(\"#radPromotionPor\").prop(\"checked\", true);
                \$('#titleee').find('a').trigger('click');



                \$('#produit_prix_promo').prop('required',false);
                \$('#produit_poucentage_promo').prop('required',true);
                \$('#produit_num_produit_promo').prop('required',true);

            })

            \$('#produit_is_promo').change(function() {
                if(this.checked) {
                    \$(\"#div_prix_promo\").show()
                    \$('#produit_prix_promo').prop('required',true);
                    \$('#produit_poucentage_promo').prop('required',false);
                    \$('#produit_num_produit_promo').prop('required',false);

                }else {
                    \$(\"#div_prix_promo\").hide()
                    \$('#produit_prix_promo').prop('required',false);
                    \$('#produit_poucentage_promo').prop('required',false);//was true
                    \$('#produit_num_produit_promo').prop('required',false);//was true

                }
            });


           \$('#promo_prix').on(\"click\",function(){

         //       \$('#produit_poucentage_promo').val('');
          //      \$('#produit_num_produit_promo').val('');

             \$(\"#radPromotionP\").prop(\"checked\", true);
             \$(\"#radPromotionPor\").prop(\"checked\", false);


               \$('#produit_prix_promo').prop('required',true);
               \$('#produit_poucentage_promo').prop('required',false);
               \$('#produit_num_produit_promo').prop('required',false);


           })

            \$('#promo_pourcentage').on(\"click\",function(){
            //    \$('#produit_prix_promo').val('');

            \$(\"#radPromotionP\").prop(\"checked\", false);
             \$(\"#radPromotionPor\").prop(\"checked\", true);


                \$('#produit_prix_promo').prop('required',false);
                \$('#produit_poucentage_promo').prop('required',true);
                \$('#produit_num_produit_promo').prop('required',true);


            })

            \$(\"#produit_poucentage_promo\").change(function(){
                //does some stuff;
                \$('#produit_prix_promo').val('');
            });
            \$(\"#produit_prix_promo\").change(function(){
                //does some stuff;
                \$('#produit_poucentage_promo').val('');
                \$('#produit_num_produit_promo').val('');
            });





           // \$(\"select\").select2();
            if (\$(\"select\").length > 0)
                \$(\"select\").select2();

        })

//

        \$( \"select[name='produit[categorie]']\" ).change(function () {
            var matiereID = \$(this).val();
           // console.log('rahmaaaaaa');
           // console.log('aaaaa');
            console.log(matiereID);

            if(matiereID) {


                \$.ajax({
                    url: \"{{ path('get_sous_categorie_from_categorie') }}\",
                    dataType: 'Json',
                    data: {'categorieid':matiereID},
                    type:'GET',
                    success: function(data) {
                        \$('select[name=\"produit[sous_categorie]\"]').empty();
                        \$('select[name=\"produit[sous_categorie]').append('<option value=\"\" selected hidden>'+ 'choisir une sous categorie' +'</option>');

                        for(i = 0; i < data.length; i++) {
                            student = data[i];
                            \$('select[name=\"produit[sous_categorie]').append('<option value=\"'+ student['id'] +'\">'+ student['nom'] +'</option>');
                        };

                    }
                });

                (function (document, window, \$) {
                    \$(\"select\").select2();
                })(document, window, jQuery);
            }else{
                \$('select[name=\"produit[sous_categorie]\"]').empty();
                (function (document, window, \$) {
                    \$(\"select\").select2();
                })(document, window, jQuery);
            }
        });

    </script>


    <script>
        function updatequantityofsize(id){
            var quantity = parseInt(  \$(\"#quantityofsize\"+id).val());
            //console.log(quantity)
            if(quantity> 0){
                \$.ajax({
                    url: \"{{ path('edit_size') }}\",
                    dataType: 'Json',
                    data: {'id':id,'quantite':quantity},
                    type:'GET',
                    success: function(data) {
                        \$(\"#quantityofsize\"+id).val(quantity);
                        alert(\"la quantité est modifiée avec succes\")
                    }
                });

            }
            else{
                alert(\"la quantité doit ètre >0\")
            }
        }
        var couleur = -1;

        function adddivcouleur(){
            divinitial=document.getElementById('divbtnadd').style.marginTop = \"15px\";
            divinitial=document.getElementById('divbtnadd').style.paddingLeft = \"0px\";
              console.log(\"cooooleur\"+couleur);
           if (  parseInt( \$(\"#couleur\").val()) == \"undefined\" || isNaN(parseInt( \$(\"#couleur\").val()))) {
               couleur++
               console.log(\"couleurplus\"+couleur);


           }else {
                couleur = parseInt( \$(\"#couleur\").val()) +  1;
              // console.log(\"couleparsint\"+couleur);

            }


            //var couleur =  +1;

            const div = document.createElement('div');
            div.className = 'row row-lg';
            div.style='padding-top: 10px';
            div.id='rowcouleur';
            div.innerHTML =
                '<div class=\"col-lg-12\">'+
                '<div class=\"row row-lg\">'+

                '<div class=\"col-lg-4 text-left\"> ' +
                '<input type=\"color\" class=\"form-control\" name=\"couleurs[]\"> ' +
                '<input type=\"text\" class=\"form-control\" name=\"couleur'+couleur+'\" value=\"'+couleur+'\" hidden>' +
                '</div>' +
                '<div class=\"col-lg-8 text-left\"> ' +
                '<div class=\"input-group input-group-file\" data-plugin=\"inputGroupFile\"> ' +
                '<input type=\"text\" class=\"form-control\" readonly=\"\"> ' +
                '<span class=\"input-group-btn\"> ' +
                '<span class=\"btn btn-default btn-file waves-effect waves-classic\"> ' +
                '<i class=\"icon md-upload\" aria-hidden=\"true\"></i> ' +
                '<input type=\"file\"  accept=\"image/*\" name=\"images[]\" > ' +
                '</span> ' +
                '</span> ' +
                '</div> ' +
                '</div> ' +
                '<div class=\"col-lg-2 text-left\"> </div>'+
                '</div> '+
                '</div> ' ;

            const divsize = document.createElement('div');

            divsize.className = 'row row-lg';
            divsize.style='padding-top: 10px';
            divsize.id='rowsize'+couleur;
            divsize.innerHTML =
                '<div class=\"col-lg-12\">'+
                '<div class=\"row row-lg\">'+
                '<div class=\"col-lg-4 text-right\">' +
                '<input type=\"text\" class=\"form-control\" name=\"sizes'+couleur+'[]\" placeholder=\"size\">'+
                // '<select class=\"form-control\" id=\"sizes\" style=\"text-align-last: center\" name=\"sizes'+couleur+'[]\" > ' +
                //   '{% for key,size in produit.sizeValue %}'+
                //  ' <option value=\"{{ key }}\"  >{{ size }}</option>'+
                //  '  {% endfor %}'+
                //   '  </select>'+
                '  </div>'+
                '  <div class=\"col-lg-8 text-left\">'+
                '  <span class=\"input-group-btn\">'+
                ' <input type=\"number\" min=\"0\" class=\"form-control\" name=\"quantity'+couleur+'[]\" value=\"0\">'+
                '<button type=\"button\" style=\"border-top-left-radius: 0;border-bottom-left-radius: 0;\" onclick=\"adddivsize('+couleur+')\" class=\"btn social-evernote waves-effect waves-classic\">' +
                '<i class=\"icon md-plus\"></i>' +
                '</button>'+
                '   </span>'+
                '  </div>'+
                '  <div class=\"col-lg-3 text-left\">'+
                '   </div>'+
                '   </div>'+
                '   </div>';


            const divrow = document.createElement('div');
            divrow.className = 'row row-lg';
            divrow.style='padding-top: 10px';
            divrow.innerHTML =
                '<div class=\"col-lg-4 text-right\"></div>' +
                '<div class=\"col-lg-6 text-right\" style=\"border: 1px solid #dcdcdc;padding: 15px 15px 15px 15px;\" >' +
                div.outerHTML+
                divsize.outerHTML+
                ' </div>';


            document.getElementById('divcouleur').appendChild(divrow);
            \$(\"#couleur\").val(couleur)
        }
        function adddivsize(i){
            var couleur = parseInt(  \$(\"#couleur\").val());
            console.log(\"couleur\"+couleur)
            console.log(couleur)
            const div = document.createElement('div');
            div.className = 'col-lg-12';
            div.style='padding-top: 10px';
            div.innerHTML =

                '<div class=\"row row-lg\">'+
                '<div class=\"col-lg-4 text-right\">' +
                '<input type=\"text\" class=\"form-control\" name=\"sizes'+i+'[]\" placeholder=\"size\">'+
                //    '<select class=\"form-control\" id=\"sizes\" style=\"text-align-last: center\" name=\"sizes'+i+'[]\" > ' +
                //    '{% for key,size in produit.sizeValue %}'+
                //   ' <option value=\"{{ key }}\"  >{{ size }}</option>'+
                //   '  {% endfor %}'+
                //   '  </select>'+
                '  </div>'+
                '  <div class=\"col-lg-8 text-left\">'+
                '  <span class=\"input-group-btn\">'+
                ' <input type=\"number\" min=\"0\" class=\"form-control\" name=\"quantity'+i+'[]\" value=\"0\">'+
                '   </span>'+
                '  </div>'+
                '  <div class=\"col-lg-3 text-left\">'+
                '   </div>'+
                '   </div>';
            document.getElementById('rowsize'+i).appendChild(div);
        }

    </script>
{% endblock %}
", "@Backend/gestionnaire/produit/new.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gestionnaire\\produit\\new.html.twig");
    }
}
