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

/* BackendBundle:gestionnaire/produit:edit.html.twig */
class __TwigTemplate_1b2e0b98a81cb91df9100ffd88479342d42040791eae8aba2c22751409250726 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:gestionnaire/produit:edit.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "BackendBundle:gestionnaire/produit:edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 5
        echo "    <style>
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
        <div class=\"page-header\">
            <h1 class=\"page-title\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modification Produit"), "html", null, true);
        echo "</h1>
        </div>

        ";
        // line 44
        if ((isset($context["errort"]) || array_key_exists("errort", $context))) {
            // line 45
            echo "            <div class=\"col-lg-12 text-center\">
                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                    ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["errort"] ?? $this->getContext($context, "errort"))), "html", null, true);
            echo "
                </div>
            </div>
            <br><br>
        ";
        }
        // line 55
        echo "        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <div class=\"row row-lg\">


                                    ";
        // line 65
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "col-lg-12 "]]);
        echo "
                                    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "headers", []), "get", [0 => "referer"], "method"), "html", null, true);
        echo "\"/>

                                    ";
        // line 68
        if ($this->getAttribute(($context["form"] ?? null), "categorie", [], "any", true, true)) {
            // line 69
            echo "                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category"), "html", null, true);
            echo "<span style=\"color: #ED0000\">*</span> :</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    ";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                                </div>
                                            </div>
                                        </div>

                                        <br><br>
                                    ";
        }
        // line 85
        echo "                                    ";
        if ($this->getAttribute(($context["form"] ?? null), "sous_categorie", [], "any", true, true)) {
            // line 86
            echo "                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégorie"), "html", null, true);
            echo " <span style=\"color: #ED0000\">*</span>:</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    ";
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sous_categorie", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                    ";
        }
        // line 101
        echo "                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">

                                                ";
        // line 111
        if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en"))) {
            // line 112
            echo "                                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomen", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "

                                                ";
        } else {
            // line 115
            echo "                                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "

                                                ";
        }
        // line 118
        echo "                                            </div>
                                        </div>
                                    </div>
                                    <br><br>


                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo " :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">

                                                ";
        // line 134
        if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "EN") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "en"))) {
            // line 135
            echo "                                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descriptionen", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "

                                                ";
        } else {
            // line 138
            echo "                                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "

                                                ";
        }
        // line 141
        echo "                                            </div>
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix"), "html", null, true);
        echo " :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prix", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <br>

                                                ";
        // line 175
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>


                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                            </div>

                                            <div class=\"col-lg-6 text-left\">
                                                <div class=\"checkbox-custom checkbox-primary center-block\">
                                                    ";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "is_promo", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <label for=\"inputChecked\">";
        // line 193
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
                                                    <ul class=\"nav nav-tabs nav-tabs-line\" role=\"tablist\">
                                                        <li class=\"nav-item\" id=\"titleeeone\" >
                                                            <input  type=\"radio\" id=\"radPromotionP\" name=\"drone\" value=\"12\" >

                                                            <a class=\"nav-link active\" id=\"promo_prix\" data-toggle=\"tab\" href=\"#promoparprix\" aria-controls=\"exampleTopHome\" role=\"tab\" aria-selected=\"true\">

                                                                ";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion par prix"), "html", null, true);
        echo "
                                                            </a>
                                                        </li>
                                                        <li class=\"nav-item\" id=\"titleee\" >
                                                            <input  type=\"radio\" id=\"radPromotionPor\" name=\"drone\" value=\"13\"  >

                                                            <a class=\"nav-link\" id=\"promo_pourcentage\"  data-toggle=\"tab\" href=\"#promoparpourcentage\" aria-controls=\"exampleTopComponents\" role=\"tab\" aria-selected=\"false\">
                                                                ";
        // line 221
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
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">


                                                ";
        // line 289
        if ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", [])) {
            // line 290
            echo "                                                    <div style=\"padding-top: 20px;\">
                                                        <img class=\"\" style=\"height: 50px;width: auto;  margin-left: auto;  margin-right: auto;  display: block;\"
                                                             src=\"";
            // line 292
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/produits/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []), "html", null, true);
            echo "\">

                                                    </div>
                                                ";
        }
        // line 296
        echo "                                                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imagefile", []), 'widget', ["attr" => ["id" => "input-file-now", "data-plugin" => "dropify", "data-default-file" => "", "style" => "max-height: 100px;max-width:300px"]]);
        echo "
                                                <h6 style=\"color: #ED0000\">";
        // line 297
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
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fichetechnique"), "html", null, true);
        echo ":</label>
                                            </div>
                                            ";
        // line 315
        echo "

                                            <div class=\"col-lg-6 text-left input-group input-group-file \"
                                                 data-plugin=\"inputGroupFile\">

                                                <input type=\"text\" class=\"form-control\" readonly=\"\"
                                                       id=\"input_cgu_file_upload\">


                                                <span class=\"input-group-btn\">
                                                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                                                 <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                                                ";
        // line 328
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    ";
        // line 329
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'errors');
        echo "
                                                    ";
        // line 330
        if (($context["produit"] ?? $this->getContext($context, "produit"))) {
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["legal_notice_directory"] ?? $this->getContext($context, "legal_notice_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "file", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "file", []), "html", null, true);
            echo "</a>";
        }
        // line 331
        echo "                                                  </span>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class=\"col-lg-12\" id=\"divcouleur\" >

                                        <!-- list couleurs > 0 -->
                                        ";
        // line 341
        if ((twig_length_filter($this->env, ($context["list_couleur"] ?? $this->getContext($context, "list_couleur"))) > 0)) {
            // line 342
            echo "                                            ";
            $context["i"] = 0;
            // line 343
            echo "
                                            <!--elements  dans list couleurs  -->
                                            ";
            // line 345
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list_couleur"] ?? $this->getContext($context, "list_couleur")));
            foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                // line 346
                echo "                                                <input type=\"text\" class=\"form-control\" id=\"couleur\" value=\"";
                echo twig_escape_filter($this->env, (twig_length_filter($this->env, ($context["list_couleur"] ?? $this->getContext($context, "list_couleur"))) - 1), "html", null, true);
                echo "\" hidden>
                                                ";
                // line 347
                if ((($context["i"] ?? $this->getContext($context, "i")) == 0)) {
                    // line 348
                    echo "                                                    <div class=\"row row-lg\" >
                                                        <div class=\"col-lg-2 text-left\">

                                                        </div>
                                                        <div class=\"col-lg-2 text-left\">
                                                            <label>";
                    // line 353
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Couleurs"), "html", null, true);
                    echo "  :</label>
                                                        </div>
                                                        <div class=\"col-lg-6 text-right\" style=\"border: 1px solid #dcdcdc;padding: 15px 15px 15px 15px;\">
                                                            <!--couleur -->
                                                            <div class=\"row row-lg\" id=\"rowcouleur\">
                                                                <div class=\"col-lg-4 text-left\">
                                                                    <input type=\"color\" class=\"form-control\" name=\"couleurs[]\" value=\"";
                    // line 359
                    echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "codeCouleur", []), "html", null, true);
                    echo "\" readonly  style=\"pointer-events: none;\">
                                                                    <input type=\"text\" class=\"form-control\" name=\"couleur0\" value=\"0\" hidden>
                                                                </div>
                                                                <div class=\"col-lg-8 text-left\">
                                                                    <span class=\"input-group-btn\">
                                                                         <div class=\"input-group input-group-file\" data-plugin=\"inputGroupFile\">
                                                                             <input type=\"text\" class=\"form-control\" readonly=\"\">
                                                                             <span class=\"input-group-btn\">
                                                                                 <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                                                                                     <i class=\"icon md-upload\" aria-hidden=\"true\"></i>
                                                                                     <input type=\"file\"  accept=\"image/*\"  name=\"images[]\" >
                                                                                 </span>
                                                                             </span>
                                                                         </div>
                                                                    </span>
                                                                    ";
                    // line 374
                    if (($this->getAttribute($context["color"], "image", []) && ($this->getAttribute($context["color"], "image", []) != ""))) {
                        // line 375
                        echo "                                                                        <img name='img' id='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "image", []), "html", null, true);
                        echo "' style=\"width: 81%;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                                                             src=\"/uploads/produits/";
                        // line 376
                        echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "image", []), "html", null, true);
                        echo "\"  alt=\"img\">
                                                                    ";
                    }
                    // line 378
                    echo "                                                                </div>

                                                            </div>

                                                            <!--size -->
                                                            <div class=\"row row-lg\" id=\"rowsize0\" style=\"padding-top: 10px\">
                                                                ";
                    // line 384
                    if ((twig_length_filter($this->env, $this->getAttribute($context["color"], "sizes", [])) > 0)) {
                        // line 385
                        echo "                                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["color"], "sizes", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                            // line 386
                            echo "                                                                        <div class=\"col-lg-12 \" style=\"padding-top: 10px\">
                                                                            <div class=\"row row-lg\">
                                                                                <div class=\"col-lg-4 text-right\">
                                                                                    <span class=\"input-group-btn\">
                                                                                        <input type=\"text\" class=\"form-control text-center\"  value=\"";
                            // line 390
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                            echo "\" readonly>
                                                                                    </span>
                                                                                </div>
                                                                                <div class=\"col-lg-8 text-left\">
                                                                                    <div class=\"input-group input-group-btn\">
                                                                                        <input type=\"number\" min=\"0\" class=\"form-control\"  value=\"";
                            // line 395
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "quantite", []), "html", null, true);
                            echo "\" id=\"quantityofsize";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo "\" name=\"quantityofsize";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo "\">
                                                                                        <button  type=\"button\" style=\"margin-right: 5px;border-top-left-radius: 0;border-bottom-left-radius: 0;\" onclick=\"updatequantityofsize(";
                            // line 396
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo ")\"
                                                                                                 class=\"btn btn-default waves-effect waves-classic\">
                                                                                            <i class=\"icon md-edit\" ></i>
                                                                                        </button>
                                                                                        <a  style=\"background-color: #ed0000;border-color: #ed0000;\" href=\"";
                            // line 400
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_size", ["id" => $this->getAttribute($context["size"], "id", []), "idproduit" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
                            echo "\" class=\"btn btn-primary waves-effect waves-classic\">
                                                                                            <i class=\"icon md-delete\" style=\"\" ></i>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>


                                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 412
                        echo "                                                                ";
                    }
                    // line 413
                    echo "                                                                <div class=\"col-lg-12 \"  style=\"padding-top: 10px\">
                                                                    <div class=\"row row-lg\">

                                                                        <div class=\"col-lg-4 text-right\">
                                                                            <input type=\"text\" class=\"form-control\" name=\"sizes0[]\" placeholder=\"size\">

                                                                            <!-- <select class=\"form-control\" style=\"text-align-last: center\" name=\"sizes0[]\">
                                                                                ";
                    // line 420
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sizeValue", []));
                    foreach ($context['_seq'] as $context["key"] => $context["size"]) {
                        // line 421
                        echo "                                                                                    <option value=\"";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\" >";
                        echo twig_escape_filter($this->env, $context["size"], "html", null, true);
                        echo "</option>
                                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['size'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 423
                    echo "                                                                            </select>-->
                                                                        </div>
                                                                        <div class=\"col-lg-8 text-left\">
                                                                            <span class=\"input-group-btn\">
                                                                                <input type=\"number\" min=\"0\" class=\"form-control\" name=\"quantity0[]\" value=\"0\">
                                                                                <button type=\"button\" onclick=\"adddivsize(0)\" style=\"border-top-left-radius: 0;border-bottom-left-radius: 0;\"
                                                                                        class=\"btn social-evernote waves-effect waves-classic\">
                                                                                    <i class=\"icon md-plus\"></i>
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a style=\"background-color:#ed0000;border-color:#ed0000;margin-top:15px\" href=\"";
                    // line 437
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_couleur", ["idcouleur" => $this->getAttribute($context["color"], "id", []), "idproduit" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-primary waves-effect waves-classic\">
                                                                <i style=\"\" class=\"icon md-delete\" ></i> ";
                    // line 438
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Supprimer la couleur"), "html", null, true);
                    echo "
                                                            </a>
                                                        </div>
                                                        <div class=\"col-lg-2 text-left\">
                                                            <span class=\"input-group-btn\">
                                                                <input type=\"text\" class=\"form-control\" id=\"couleur\" value=\"0\" hidden>
                                                            </span>
                                                        </div>
                                                    </div>

                                                ";
                } else {
                    // line 449
                    echo "                                                    <div class=\"row row-lg\"  style=\"padding-top: 10px\">
                                                        <div class=\"col-lg-2 text-left\">

                                                        </div>
                                                        <div class=\"col-lg-2 text-left\">
                                                        </div>
                                                        <div class=\"col-lg-6 text-right\" style=\"border: 1px solid #dcdcdc;padding: 15px 15px 15px 15px;\">
                                                            <div class=\"row row-lg\" id=\"rowcouleur\" style=\"padding-top: 10px\">

                                                                <div class=\"col-lg-4 text-left\">
                                                                    <input type=\"color\" class=\"form-control\" name=\"couleurs[]\" value=\"";
                    // line 459
                    echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "codeCouleur", []), "html", null, true);
                    echo "\" readonly style=\"pointer-events: none;\">

                                                                </div>
                                                                <div class=\"col-lg-8 text-left\">
                                                                    <span class=\"input-group-btn\">
                                                                        <div class=\"input-group input-group-file\" data-plugin=\"inputGroupFile\">
                                                                        <input type=\"text\" class=\"form-control\" readonly=\"\">
                                                                        <span class=\"input-group-btn\">
                                                                            <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                                                                                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>
                                                                                <input type=\"file\"  accept=\"image/*\"  name=\"images[]\" >
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    </span>
                                                                    ";
                    // line 474
                    if (($this->getAttribute($context["color"], "image", []) && ($this->getAttribute($context["color"], "image", []) != ""))) {
                        // line 475
                        echo "
                                                                        <img name='img' id='";
                        // line 476
                        echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "image", []), "html", null, true);
                        echo "' style=\"    width:  81%;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                                                             src=\"/uploads/produits/";
                        // line 477
                        echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "image", []), "html", null, true);
                        echo "\"  alt=\"img\">

                                                                    ";
                    }
                    // line 480
                    echo "                                                                </div>
                                                            </div>
                                                            <div class=\"row row-lg\" id=\"rowsize";
                    // line 482
                    echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                    echo "\" style=\"padding-top: 10px\">
                                                                ";
                    // line 483
                    if ((twig_length_filter($this->env, $this->getAttribute($context["color"], "sizes", [])) > 0)) {
                        // line 484
                        echo "                                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["color"], "sizes", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                            // line 485
                            echo "                                                                        <div class=\"col-lg-12 \" style=\"padding-top: 10px\">
                                                                            <div class=\"row row-lg\">
                                                                                <div class=\"col-lg-4 text-right\">
                                                                                    <span class=\"input-group-btn\">
                                                                                        <input type=\"text\" class=\"form-control text-center\"  value=\"";
                            // line 489
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                            echo "\" readonly>
                                                                                    </span>
                                                                                </div>
                                                                                <div class=\"col-lg-8 text-left\">
                                                                                    <div class=\"input-group input-group-btn\">
                                                                                        <input type=\"number\" min=\"0\" class=\"form-control\"  value=\"";
                            // line 494
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "quantite", []), "html", null, true);
                            echo "\" id=\"quantityofsize";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo "\" name=\"quantityofsize";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo "\">
                                                                                        <button type=\"button\" style=\"margin-right: 5px;border-top-left-radius: 0;border-bottom-left-radius: 0;\" onclick=\"updatequantityofsize(";
                            // line 495
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo ")\"
                                                                                                class=\"btn btn-default waves-effect waves-classic\">
                                                                                            <i class=\"icon md-edit\" ></i>
                                                                                        </button>
                                                                                        <a  style=\"background-color: #ed0000!important;border-color: #ed0000!important;\" href=\"";
                            // line 499
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_size", ["id" => $this->getAttribute($context["size"], "id", []), "idproduit" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
                            echo "\" class=\"btn btn-primary waves-effect waves-classic\">
                                                                                            <i class=\"icon md-delete\" ></i>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 507
                        echo "                                                                ";
                    }
                    // line 508
                    echo "                                                                <div class=\"col-lg-12\"  style=\"padding-top: 10px\">
                                                                    <div class=\"row row-lg\">
                                                                        <div class=\"col-lg-4 text-right\">
                                                                            <input type=\"text\" class=\"form-control\" name=\"sizes";
                    // line 511
                    echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                    echo "[]\" placeholder=\"size\">

                                                                            <!--   <select class=\"form-control\" style=\"text-align-last: center\" name=\"sizes";
                    // line 513
                    echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                    echo "[]\">
                                                                                   ";
                    // line 514
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sizeValue", []));
                    foreach ($context['_seq'] as $context["key"] => $context["size"]) {
                        // line 515
                        echo "                                                                                       <option value=\"";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\" >";
                        echo twig_escape_filter($this->env, $context["size"], "html", null, true);
                        echo "</option>
                                                                                   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['size'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 517
                    echo "                                                                               </select> -->
                                                                        </div>
                                                                        <div class=\"col-lg-8 text-left\">
                                                                            <span class=\"input-group-btn\">
                                                                                <input type=\"number\" min=\"0\" class=\"form-control\" name=\"quantity";
                    // line 521
                    echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                    echo "[]\" value=\"0\">
                                                                                <button type=\"button\" onclick=\"adddivsize(";
                    // line 522
                    echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                    echo ")\" class=\"btn social-evernote waves-effect waves-classic\"
                                                                                        style=\"border-top-left-radius: 0;border-bottom-left-radius: 0;\">
                                                                                    <i class=\"icon md-plus\"></i>
                                                                                </button>
                                                                            </span>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a style=\"background-color:#ed0000!important; ;border-color:#ed0000!important;margin-top: 15px;\" href=\"";
                    // line 532
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_couleur", ["idcouleur" => $this->getAttribute($context["color"], "id", []), "idproduit" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-primary waves-effect waves-classic\">
                                                                <i class=\"icon md-delete\" ></i>";
                    // line 533
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Supprimer la couleur"), "html", null, true);
                    echo "
                                                            </a>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 538
                echo "                                                ";
                $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                // line 539
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 540
            echo "                                            <!-- list couleurs = 0 -->

                                        ";
        } else {
            // line 543
            echo "                                            ";
            $context["i"] = 0;
            // line 544
            echo "
                                            <div class=\"row row-lg\" >
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>";
            // line 550
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Couleurs"), "html", null, true);
            echo "  :</label>
                                                </div>
                                            </div>
                                        ";
        }
        // line 554
        echo "                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-4\">
                                            </div>
                                            <div class=\"col-lg-6 \" id=\"divbtnadd\" style=\"   ";
        // line 559
        if ((twig_length_filter($this->env, ($context["list_couleur"] ?? $this->getContext($context, "list_couleur"))) > 0)) {
            echo "margin-top: 15px;padding-left: 0px ";
        } else {
            echo " margin-top: -33px;  ";
        }
        echo " \">
                                                <button type=\"button\" onclick=\"adddivcouleur()\"
                                                        class=\"btn social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon md-plus\"></i> ";
        // line 562
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter une couleur"), "html", null, true);
        echo "
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <br><br>




                                <div class=\"col-lg-12\">
                                    <div class=\"row row-lg\">
                                        <div class=\"col-lg-2 text-left\">

                                        </div>
                                        <div class=\"col-lg-2 text-left\">
                                        </div>

                                        <div class=\"col-lg-6 text-left\">
                                            <div class=\"checkbox-custom checkbox-primary center-block\">
                                                ";
        // line 584
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "is_active", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <label for=\"inputChecked\">";
        // line 585
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Est Active"), "html", null, true);
        echo "?</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <br><br>
                                ";
        // line 599
        echo "


                                <div class=\"col-lg-12 text-center\">
                                    <div class=\"row text-center\">
                                        <div class=\"col-lg-6 text-right\">
                                            <button style=\"margin-top: 3px;\" class=\"float-right btn btn-md social-evernote waves-effect waves-classic\">
                                                ";
        // line 606
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "
                                            </button>
                                        </div>

                                        <div class=\"col-lg-6 text-left\">
                                            <a href=\"";
        // line 611
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_index");
        echo "\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</a>
                                        </div>
                                    </div>

                                </div>
                                ";
        // line 616
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




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 632
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 633
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 638
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/Plugin/input-group-file.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(\"#produit_file\").change(function () {
            // alert(\$(\"#pays_cgu_file_upload\").val());
            content = \$(\"#produit_file\").val();
            \$('#input_cgu_file_upload').val(content);
        });


        if (\$('#produit_is_promo').is(\":checked\"))
        {
            // it is checked
            \$(\"#div_prix_promo\").show()

        }else {
            \$(\"#div_prix_promo\").hide()

        }
    </script >

    <script>

        \$(\"document\").ready(function(){

            \$('#produit_is_promo').change(function() {
                if(this.checked) {
                    \$(\"#div_prix_promo\").show()
                }else {
                    \$(\"#div_prix_promo\").hide()

                }
            });


            \$('#radPromotionP').on(\"click\",function(){
                //   console.log(\"promo_prix\")

              //  \$('#produit_poucentage_promo').val('');
              //  \$('#produit_num_produit_promo').val('');

                \$(\"#radPromotionP\").prop(\"checked\", true);
                \$(\"#radPromotionPor\").prop(\"checked\", false);
                \$('#titleeeone').find('a').trigger('click');


            })

            \$('#radPromotionPor').on(\"click\",function(){
                //  console.log(\"promo_pourcentage\")

              //  \$('#produit_prix_promo').val('');
                \$(\"#radPromotionP\").prop(\"checked\", false);
                \$(\"#radPromotionPor\").prop(\"checked\", true);
                \$('#titleee').find('a').trigger('click');


            })
            /////////////

            \$('#titleee a').click(function(evt) {
                evt.preventDefault();
                \$(\"#radPromotionP\").prop(\"checked\", true);
                \$(\"#radPromotionPor\").prop(\"checked\", false);


            });

            \$('#titleeeone a').click(function(evt) {
                evt.preventDefault();
                \$(\"#radPromotionP\").prop(\"checked\", false);
                \$(\"#radPromotionPor\").prop(\"checked\", true);


            });
            ///////////////////////////////////
            \$('#promo_prix').on(\"click\",function(){
             //   console.log(\"promo_prix\")

               // \$('#produit_poucentage_promo').val('');
               // \$('#produit_num_produit_promo').val('');

                \$(\"#radPromotionP\").prop(\"checked\", true);
                \$(\"#radPromotionPor\").prop(\"checked\", false);


            })

            \$('#promo_pourcentage').on(\"click\",function(){
              //  console.log(\"promo_pourcentage\")

               // \$('#produit_prix_promo').val('');
                \$(\"#radPromotionP\").prop(\"checked\", false);
               \$(\"#radPromotionPor\").prop(\"checked\", true);

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

/////////////////////////////////////////////////
            if( \$('#produit_poucentage_promo').val()){

                \$('#titleee').find('a').trigger('click');

            }else {
                \$('#titleeeone').find('a').trigger('click');


            }

        })

        \$(\"select\").select2();
        \$( \"select[name='produit[categorie]']\" ).change(function () {
            var matiereID = \$(this).val();
            console.log('aaaaa');

            if(matiereID) {
                \$.ajax({
                    url: \"";
        // line 765
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
                        \$(\"select\").select2();
                    }
                });


            }else{
                \$('select[name=\"produit[sous_categorie]\"]').empty();
            }
        });
        (function (document, window, \$) {
            'use strict';

            var Site = window.Site;
            \$(document).ready(function () {
                Site.run();
            });

            \$( \"select[name='produit_categorie']\" ).select2();
            \$( \"select[name='produit_sous_categorie']\" ).select2();

        })(document, window, jQuery);
    </script>
    <script>
        function updatequantityofsize(id){
            var quantity = parseInt(  \$(\"#quantityofsize\"+id).val());
            console.log(quantity)
            if(quantity> 0){
                \$.ajax({
                    url: \"";
        // line 805
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
         //   var couleur = parseInt(  \$(\"#couleur\").val())+1;
            if (  parseInt( \$(\"#couleur\").val()) == \"undefined\" || isNaN(parseInt( \$(\"#couleur\").val()))) {
                couleur++
                console.log(\"couleurplus\"+couleur);


            }else {
                couleur = parseInt( \$(\"#couleur\").val()) +  1;
                 console.log(\"couleparsint\"+couleur);

            }
          //  console.log(couleur)
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
                '<input type=\"file\"  accept=\"image/*\" name=\"images[]\"> ' +
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
        // line 875
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sizeValue", []));
        foreach ($context['_seq'] as $context["key"] => $context["size"]) {
            echo "'+
                //  ' <option value=\"";
            // line 876
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"  >";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "</option>'+
                //  '  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 877
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
        // line 920
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sizeValue", []));
        foreach ($context['_seq'] as $context["key"] => $context["size"]) {
            echo "'+
                //   ' <option value=\"";
            // line 921
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"  >";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "</option>'+
                //   '  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 922
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
        return "BackendBundle:gestionnaire/produit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1346 => 922,  1336 => 921,  1330 => 920,  1285 => 877,  1275 => 876,  1269 => 875,  1196 => 805,  1153 => 765,  1022 => 638,  1017 => 633,  1011 => 632,  988 => 616,  978 => 611,  970 => 606,  961 => 599,  949 => 585,  945 => 584,  920 => 562,  910 => 559,  903 => 554,  896 => 550,  888 => 544,  885 => 543,  880 => 540,  874 => 539,  871 => 538,  863 => 533,  859 => 532,  846 => 522,  842 => 521,  836 => 517,  825 => 515,  821 => 514,  817 => 513,  812 => 511,  807 => 508,  804 => 507,  790 => 499,  783 => 495,  775 => 494,  767 => 489,  761 => 485,  756 => 484,  754 => 483,  750 => 482,  746 => 480,  740 => 477,  736 => 476,  733 => 475,  731 => 474,  713 => 459,  701 => 449,  687 => 438,  683 => 437,  667 => 423,  656 => 421,  652 => 420,  643 => 413,  640 => 412,  622 => 400,  615 => 396,  607 => 395,  599 => 390,  593 => 386,  588 => 385,  586 => 384,  578 => 378,  573 => 376,  568 => 375,  566 => 374,  548 => 359,  539 => 353,  532 => 348,  530 => 347,  525 => 346,  521 => 345,  517 => 343,  514 => 342,  512 => 341,  500 => 331,  490 => 330,  486 => 329,  482 => 328,  467 => 315,  462 => 306,  448 => 297,  443 => 296,  435 => 292,  431 => 290,  429 => 289,  421 => 284,  395 => 261,  389 => 258,  376 => 248,  370 => 245,  356 => 234,  350 => 231,  337 => 221,  327 => 214,  303 => 193,  299 => 192,  280 => 175,  274 => 156,  268 => 153,  254 => 141,  247 => 138,  240 => 135,  238 => 134,  231 => 130,  217 => 118,  210 => 115,  203 => 112,  201 => 111,  194 => 107,  186 => 101,  177 => 95,  171 => 92,  163 => 86,  160 => 85,  150 => 78,  144 => 75,  136 => 69,  134 => 68,  129 => 66,  125 => 65,  113 => 55,  105 => 50,  98 => 45,  96 => 44,  90 => 41,  52 => 5,  46 => 4,  30 => 1,);
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
        <div class=\"page-header\">
            <h1 class=\"page-title\">{{ \"Modification Produit\"|trans }}</h1>
        </div>

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
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <div class=\"row row-lg\">


                                    {{ form_start(form, {'attr': {'class': 'col-lg-12 '}}) }}
                                    <input type=\"hidden\" name=\"referer\" value=\"{{app.request.headers.get('referer')}}\"/>

                                    {% if  form.categorie is defined%}
                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>{{\"Category\"|trans}}<span style=\"color: #ED0000\">*</span> :</label>
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
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>{{\"Sous Catégorie\"|trans}} <span style=\"color: #ED0000\">*</span>:</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    {{ form_widget(form.sous_categorie, {'attr': {'class': 'form-control'}}) }}
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                    {% endif %}
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>{{ \"Nom\"|trans }} <span style=\"color: #ED0000\">*</span>:</label>
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
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>{{ \"Description\"|trans }} :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">

                                                {% if pays.frontLanguage  == 'EN' or pays.frontLanguage  == 'en' %}
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
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
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
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
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
                                                    <ul class=\"nav nav-tabs nav-tabs-line\" role=\"tablist\">
                                                        <li class=\"nav-item\" id=\"titleeeone\" >
                                                            <input  type=\"radio\" id=\"radPromotionP\" name=\"drone\" value=\"12\" >

                                                            <a class=\"nav-link active\" id=\"promo_prix\" data-toggle=\"tab\" href=\"#promoparprix\" aria-controls=\"exampleTopHome\" role=\"tab\" aria-selected=\"true\">

                                                                {{ \"Promotion par prix\"|trans }}
                                                            </a>
                                                        </li>
                                                        <li class=\"nav-item\" id=\"titleee\" >
                                                            <input  type=\"radio\" id=\"radPromotionPor\" name=\"drone\" value=\"13\"  >

                                                            <a class=\"nav-link\" id=\"promo_pourcentage\"  data-toggle=\"tab\" href=\"#promoparpourcentage\" aria-controls=\"exampleTopComponents\" role=\"tab\" aria-selected=\"false\">
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
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>{{ \"Image\"|trans }} <span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">


                                                {% if produit.image %}
                                                    <div style=\"padding-top: 20px;\">
                                                        <img class=\"\" style=\"height: 50px;width: auto;  margin-left: auto;  margin-right: auto;  display: block;\"
                                                             src=\"{{ asset('uploads/produits/') }}{{ produit.image }}\">

                                                    </div>
                                                {% endif %}
                                                {{ form_widget(form.imagefile, {'attr': {'id': 'input-file-now', 'data-plugin':'dropify','data-default-file': '','style' : 'max-height: 100px;max-width:300px'}}) }}
                                                <h6 style=\"color: #ED0000\">{{ \"image\"|trans }} ( 400 × 352 px ) {{ \"maxsize\"|trans }} (1024k)</h6>

                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{\"Fichetechnique\"|trans }}:</label>
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
                                    <br><br>

                                    <div class=\"col-lg-12\" id=\"divcouleur\" >

                                        <!-- list couleurs > 0 -->
                                        {% if list_couleur|length > 0 %}
                                            {%  set i= 0 %}

                                            <!--elements  dans list couleurs  -->
                                            {% for color in list_couleur %}
                                                <input type=\"text\" class=\"form-control\" id=\"couleur\" value=\"{{ list_couleur|length -1 }}\" hidden>
                                                {% if i == 0 %}
                                                    <div class=\"row row-lg\" >
                                                        <div class=\"col-lg-2 text-left\">

                                                        </div>
                                                        <div class=\"col-lg-2 text-left\">
                                                            <label>{{ \"Couleurs\"|trans }}  :</label>
                                                        </div>
                                                        <div class=\"col-lg-6 text-right\" style=\"border: 1px solid #dcdcdc;padding: 15px 15px 15px 15px;\">
                                                            <!--couleur -->
                                                            <div class=\"row row-lg\" id=\"rowcouleur\">
                                                                <div class=\"col-lg-4 text-left\">
                                                                    <input type=\"color\" class=\"form-control\" name=\"couleurs[]\" value=\"{{ color.codeCouleur }}\" readonly  style=\"pointer-events: none;\">
                                                                    <input type=\"text\" class=\"form-control\" name=\"couleur0\" value=\"0\" hidden>
                                                                </div>
                                                                <div class=\"col-lg-8 text-left\">
                                                                    <span class=\"input-group-btn\">
                                                                         <div class=\"input-group input-group-file\" data-plugin=\"inputGroupFile\">
                                                                             <input type=\"text\" class=\"form-control\" readonly=\"\">
                                                                             <span class=\"input-group-btn\">
                                                                                 <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                                                                                     <i class=\"icon md-upload\" aria-hidden=\"true\"></i>
                                                                                     <input type=\"file\"  accept=\"image/*\"  name=\"images[]\" >
                                                                                 </span>
                                                                             </span>
                                                                         </div>
                                                                    </span>
                                                                    {% if color.image and color.image != \"\" %}
                                                                        <img name='img' id='{{ color.image }}' style=\"width: 81%;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                                                             src=\"/uploads/produits/{{ color.image }}\"  alt=\"img\">
                                                                    {% endif %}
                                                                </div>

                                                            </div>

                                                            <!--size -->
                                                            <div class=\"row row-lg\" id=\"rowsize0\" style=\"padding-top: 10px\">
                                                                {% if color.sizes|length > 0 %}
                                                                    {% for size in color.sizes %}
                                                                        <div class=\"col-lg-12 \" style=\"padding-top: 10px\">
                                                                            <div class=\"row row-lg\">
                                                                                <div class=\"col-lg-4 text-right\">
                                                                                    <span class=\"input-group-btn\">
                                                                                        <input type=\"text\" class=\"form-control text-center\"  value=\"{{ size.libelle }}\" readonly>
                                                                                    </span>
                                                                                </div>
                                                                                <div class=\"col-lg-8 text-left\">
                                                                                    <div class=\"input-group input-group-btn\">
                                                                                        <input type=\"number\" min=\"0\" class=\"form-control\"  value=\"{{ size.quantite }}\" id=\"quantityofsize{{ size.id }}\" name=\"quantityofsize{{ size.id }}\">
                                                                                        <button  type=\"button\" style=\"margin-right: 5px;border-top-left-radius: 0;border-bottom-left-radius: 0;\" onclick=\"updatequantityofsize({{ size.id }})\"
                                                                                                 class=\"btn btn-default waves-effect waves-classic\">
                                                                                            <i class=\"icon md-edit\" ></i>
                                                                                        </button>
                                                                                        <a  style=\"background-color: #ed0000;border-color: #ed0000;\" href=\"{{ path('delete_size',{'id':size.id,'idproduit':produit.id}) }}\" class=\"btn btn-primary waves-effect waves-classic\">
                                                                                            <i class=\"icon md-delete\" style=\"\" ></i>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>


                                                                    {% endfor %}
                                                                {% endif %}
                                                                <div class=\"col-lg-12 \"  style=\"padding-top: 10px\">
                                                                    <div class=\"row row-lg\">

                                                                        <div class=\"col-lg-4 text-right\">
                                                                            <input type=\"text\" class=\"form-control\" name=\"sizes0[]\" placeholder=\"size\">

                                                                            <!-- <select class=\"form-control\" style=\"text-align-last: center\" name=\"sizes0[]\">
                                                                                {% for key,size in produit.sizeValue %}
                                                                                    <option value=\"{{ key }}\" >{{ size }}</option>
                                                                                {% endfor %}
                                                                            </select>-->
                                                                        </div>
                                                                        <div class=\"col-lg-8 text-left\">
                                                                            <span class=\"input-group-btn\">
                                                                                <input type=\"number\" min=\"0\" class=\"form-control\" name=\"quantity0[]\" value=\"0\">
                                                                                <button type=\"button\" onclick=\"adddivsize(0)\" style=\"border-top-left-radius: 0;border-bottom-left-radius: 0;\"
                                                                                        class=\"btn social-evernote waves-effect waves-classic\">
                                                                                    <i class=\"icon md-plus\"></i>
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a style=\"background-color:#ed0000;border-color:#ed0000;margin-top:15px\" href=\"{{ path('delete_couleur',{'idcouleur':color.id,'idproduit':produit.id}) }}\" class=\"btn btn-primary waves-effect waves-classic\">
                                                                <i style=\"\" class=\"icon md-delete\" ></i> {{ \"Supprimer la couleur\"|trans }}
                                                            </a>
                                                        </div>
                                                        <div class=\"col-lg-2 text-left\">
                                                            <span class=\"input-group-btn\">
                                                                <input type=\"text\" class=\"form-control\" id=\"couleur\" value=\"0\" hidden>
                                                            </span>
                                                        </div>
                                                    </div>

                                                {% else %}
                                                    <div class=\"row row-lg\"  style=\"padding-top: 10px\">
                                                        <div class=\"col-lg-2 text-left\">

                                                        </div>
                                                        <div class=\"col-lg-2 text-left\">
                                                        </div>
                                                        <div class=\"col-lg-6 text-right\" style=\"border: 1px solid #dcdcdc;padding: 15px 15px 15px 15px;\">
                                                            <div class=\"row row-lg\" id=\"rowcouleur\" style=\"padding-top: 10px\">

                                                                <div class=\"col-lg-4 text-left\">
                                                                    <input type=\"color\" class=\"form-control\" name=\"couleurs[]\" value=\"{{ color.codeCouleur }}\" readonly style=\"pointer-events: none;\">

                                                                </div>
                                                                <div class=\"col-lg-8 text-left\">
                                                                    <span class=\"input-group-btn\">
                                                                        <div class=\"input-group input-group-file\" data-plugin=\"inputGroupFile\">
                                                                        <input type=\"text\" class=\"form-control\" readonly=\"\">
                                                                        <span class=\"input-group-btn\">
                                                                            <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                                                                                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>
                                                                                <input type=\"file\"  accept=\"image/*\"  name=\"images[]\" >
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    </span>
                                                                    {% if color.image and color.image != \"\" %}

                                                                        <img name='img' id='{{ color.image }}' style=\"    width:  81%;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                                                             src=\"/uploads/produits/{{ color.image }}\"  alt=\"img\">

                                                                    {% endif %}
                                                                </div>
                                                            </div>
                                                            <div class=\"row row-lg\" id=\"rowsize{{ i }}\" style=\"padding-top: 10px\">
                                                                {% if color.sizes|length > 0 %}
                                                                    {% for size in color.sizes %}
                                                                        <div class=\"col-lg-12 \" style=\"padding-top: 10px\">
                                                                            <div class=\"row row-lg\">
                                                                                <div class=\"col-lg-4 text-right\">
                                                                                    <span class=\"input-group-btn\">
                                                                                        <input type=\"text\" class=\"form-control text-center\"  value=\"{{ size.libelle }}\" readonly>
                                                                                    </span>
                                                                                </div>
                                                                                <div class=\"col-lg-8 text-left\">
                                                                                    <div class=\"input-group input-group-btn\">
                                                                                        <input type=\"number\" min=\"0\" class=\"form-control\"  value=\"{{ size.quantite }}\" id=\"quantityofsize{{ size.id }}\" name=\"quantityofsize{{ size.id }}\">
                                                                                        <button type=\"button\" style=\"margin-right: 5px;border-top-left-radius: 0;border-bottom-left-radius: 0;\" onclick=\"updatequantityofsize({{ size.id }})\"
                                                                                                class=\"btn btn-default waves-effect waves-classic\">
                                                                                            <i class=\"icon md-edit\" ></i>
                                                                                        </button>
                                                                                        <a  style=\"background-color: #ed0000!important;border-color: #ed0000!important;\" href=\"{{ path('delete_size',{'id':size.id,'idproduit':produit.id}) }}\" class=\"btn btn-primary waves-effect waves-classic\">
                                                                                            <i class=\"icon md-delete\" ></i>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    {% endfor %}
                                                                {% endif %}
                                                                <div class=\"col-lg-12\"  style=\"padding-top: 10px\">
                                                                    <div class=\"row row-lg\">
                                                                        <div class=\"col-lg-4 text-right\">
                                                                            <input type=\"text\" class=\"form-control\" name=\"sizes{{ i }}[]\" placeholder=\"size\">

                                                                            <!--   <select class=\"form-control\" style=\"text-align-last: center\" name=\"sizes{{ i }}[]\">
                                                                                   {% for key,size in produit.sizeValue %}
                                                                                       <option value=\"{{ key }}\" >{{ size }}</option>
                                                                                   {% endfor %}
                                                                               </select> -->
                                                                        </div>
                                                                        <div class=\"col-lg-8 text-left\">
                                                                            <span class=\"input-group-btn\">
                                                                                <input type=\"number\" min=\"0\" class=\"form-control\" name=\"quantity{{ i }}[]\" value=\"0\">
                                                                                <button type=\"button\" onclick=\"adddivsize({{ i }})\" class=\"btn social-evernote waves-effect waves-classic\"
                                                                                        style=\"border-top-left-radius: 0;border-bottom-left-radius: 0;\">
                                                                                    <i class=\"icon md-plus\"></i>
                                                                                </button>
                                                                            </span>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a style=\"background-color:#ed0000!important; ;border-color:#ed0000!important;margin-top: 15px;\" href=\"{{ path('delete_couleur',{'idcouleur':color.id,'idproduit':produit.id}) }}\" class=\"btn btn-primary waves-effect waves-classic\">
                                                                <i class=\"icon md-delete\" ></i>{{ \"Supprimer la couleur\"|trans }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                {% endif %}
                                                {% set i = i + 1 %}
                                            {% endfor %}
                                            <!-- list couleurs = 0 -->

                                        {% else %}
                                            {%  set i= 0 %}

                                            <div class=\"row row-lg\" >
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>{{ \"Couleurs\"|trans }}  :</label>
                                                </div>
                                            </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-4\">
                                            </div>
                                            <div class=\"col-lg-6 \" id=\"divbtnadd\" style=\"   {% if list_couleur|length > 0 %}margin-top: 15px;padding-left: 0px {% else %} margin-top: -33px;  {% endif %} \">
                                                <button type=\"button\" onclick=\"adddivcouleur()\"
                                                        class=\"btn social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon md-plus\"></i> {{ \"Ajouter une couleur\"|trans }}
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <br><br>




                                <div class=\"col-lg-12\">
                                    <div class=\"row row-lg\">
                                        <div class=\"col-lg-2 text-left\">

                                        </div>
                                        <div class=\"col-lg-2 text-left\">
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
                                {#
                                <div class=\"col-lg-12 text-center\">
                                    <button class=\"float-right btn md-edit social-evernote waves-effect waves-classic waves-effect waves-classic waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>
                                </div>
                                #}



                                <div class=\"col-lg-12 text-center\">
                                    <div class=\"row text-center\">
                                        <div class=\"col-lg-6 text-right\">
                                            <button style=\"margin-top: 3px;\" class=\"float-right btn btn-md social-evernote waves-effect waves-classic\">
                                                {{ \"Enregistrer\" | trans }}
                                            </button>
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




{% endblock %}
{% block javascripts %}
    {{ parent() }}
    {#
        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

    #}
    <script src=\"{{ asset('remark/global/js/Plugin/input-group-file.js')}}\"></script>
    <script type=\"text/javascript\">
        \$(\"#produit_file\").change(function () {
            // alert(\$(\"#pays_cgu_file_upload\").val());
            content = \$(\"#produit_file\").val();
            \$('#input_cgu_file_upload').val(content);
        });


        if (\$('#produit_is_promo').is(\":checked\"))
        {
            // it is checked
            \$(\"#div_prix_promo\").show()

        }else {
            \$(\"#div_prix_promo\").hide()

        }
    </script >

    <script>

        \$(\"document\").ready(function(){

            \$('#produit_is_promo').change(function() {
                if(this.checked) {
                    \$(\"#div_prix_promo\").show()
                }else {
                    \$(\"#div_prix_promo\").hide()

                }
            });


            \$('#radPromotionP').on(\"click\",function(){
                //   console.log(\"promo_prix\")

              //  \$('#produit_poucentage_promo').val('');
              //  \$('#produit_num_produit_promo').val('');

                \$(\"#radPromotionP\").prop(\"checked\", true);
                \$(\"#radPromotionPor\").prop(\"checked\", false);
                \$('#titleeeone').find('a').trigger('click');


            })

            \$('#radPromotionPor').on(\"click\",function(){
                //  console.log(\"promo_pourcentage\")

              //  \$('#produit_prix_promo').val('');
                \$(\"#radPromotionP\").prop(\"checked\", false);
                \$(\"#radPromotionPor\").prop(\"checked\", true);
                \$('#titleee').find('a').trigger('click');


            })
            /////////////

            \$('#titleee a').click(function(evt) {
                evt.preventDefault();
                \$(\"#radPromotionP\").prop(\"checked\", true);
                \$(\"#radPromotionPor\").prop(\"checked\", false);


            });

            \$('#titleeeone a').click(function(evt) {
                evt.preventDefault();
                \$(\"#radPromotionP\").prop(\"checked\", false);
                \$(\"#radPromotionPor\").prop(\"checked\", true);


            });
            ///////////////////////////////////
            \$('#promo_prix').on(\"click\",function(){
             //   console.log(\"promo_prix\")

               // \$('#produit_poucentage_promo').val('');
               // \$('#produit_num_produit_promo').val('');

                \$(\"#radPromotionP\").prop(\"checked\", true);
                \$(\"#radPromotionPor\").prop(\"checked\", false);


            })

            \$('#promo_pourcentage').on(\"click\",function(){
              //  console.log(\"promo_pourcentage\")

               // \$('#produit_prix_promo').val('');
                \$(\"#radPromotionP\").prop(\"checked\", false);
               \$(\"#radPromotionPor\").prop(\"checked\", true);

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

/////////////////////////////////////////////////
            if( \$('#produit_poucentage_promo').val()){

                \$('#titleee').find('a').trigger('click');

            }else {
                \$('#titleeeone').find('a').trigger('click');


            }

        })

        \$(\"select\").select2();
        \$( \"select[name='produit[categorie]']\" ).change(function () {
            var matiereID = \$(this).val();
            console.log('aaaaa');

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
                        \$(\"select\").select2();
                    }
                });


            }else{
                \$('select[name=\"produit[sous_categorie]\"]').empty();
            }
        });
        (function (document, window, \$) {
            'use strict';

            var Site = window.Site;
            \$(document).ready(function () {
                Site.run();
            });

            \$( \"select[name='produit_categorie']\" ).select2();
            \$( \"select[name='produit_sous_categorie']\" ).select2();

        })(document, window, jQuery);
    </script>
    <script>
        function updatequantityofsize(id){
            var quantity = parseInt(  \$(\"#quantityofsize\"+id).val());
            console.log(quantity)
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
         //   var couleur = parseInt(  \$(\"#couleur\").val())+1;
            if (  parseInt( \$(\"#couleur\").val()) == \"undefined\" || isNaN(parseInt( \$(\"#couleur\").val()))) {
                couleur++
                console.log(\"couleurplus\"+couleur);


            }else {
                couleur = parseInt( \$(\"#couleur\").val()) +  1;
                 console.log(\"couleparsint\"+couleur);

            }
          //  console.log(couleur)
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
                '<input type=\"file\"  accept=\"image/*\" name=\"images[]\"> ' +
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
", "BackendBundle:gestionnaire/produit:edit.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/gestionnaire/produit/edit.html.twig");
    }
}
