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

/* @Backend/admin/produit/edit.html.twig */
class __TwigTemplate_96689f4b18331c01efd77d58a806ca6c6d9ad1ac02e6125d264545aa4631d0be extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/admin/produit/edit.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/admin/produit/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 5
        echo "    <div class=\"page\">
        <div class=\"page-header\">
            <h1 class=\"page-title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modification Produit"), "html", null, true);
        echo "</h1>
        </div>
        ";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 10
            echo "        <div class=\"col-lg-12 text-center\">
            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
                ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fill_all", [], "messages"), "html", null, true);
            echo "
            </div>
        </div>
        ";
        }
        // line 19
        echo "        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <div class=\"row row-lg\">


                                    ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "col-lg-12 "]]);
        echo "
                                    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "headers", []), "get", [0 => "referer"], "method"), "html", null, true);
        echo "\"/>

                                    ";
        // line 32
        if ($this->getAttribute(($context["form"] ?? null), "categorie", [], "any", true, true)) {
            // line 33
            echo "                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
            echo "<span style=\"color: #ED0000\">*</span> :</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    ";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                                </div>
                                            </div>
                                        </div>

                                        <br><br>
                                    ";
        }
        // line 49
        echo "                                    ";
        if ($this->getAttribute(($context["form"] ?? null), "sous_categorie", [], "any", true, true)) {
            // line 50
            echo "                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégorie"), "html", null, true);
            echo "<span style=\"color: #ED0000\">*</span> :</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    ";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sous_categorie", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                    ";
        }
        // line 65
        echo "
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-xxl-8 col-lg-8\">
                                                <!-- Example Tabs In The Panel -->
                                                <div class=\"panel nav-tabs-horizontal\" data-plugin=\"tabs\">
                                                    <ul class=\"nav nav-tabs nav-tabs-line\" role=\"tablist\">
                                                        <li class=\"nav-item\" id=\"titleeeone\">
                                                            <a class=\"nav-link active\" id=\"nom_fr\"  style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#nomfr\" aria-controls=\"exampleTopHome\" role=\"tab\" aria-selected=\"true\">
                                                                ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span><span class=\"flag-icon flag-icon-fr\"></span>
                                                            </a>

                                                        </li>
                                                        <li class=\"nav-item\" style=\"\" id=\"titleee\" >
                                                            <a class=\"nav-link\" id=\"nom_en\" style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#nomen\" aria-controls=\"exampleTopComponents\" role=\"tab\" aria-selected=\"false\">
                                                                ";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span><span class=\"flag-icon flag-icon-gb\"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class=\"panel-body\" style=\"border: 1px solid #d4d4d4;\">
                                                        <div class=\"tab-content\">
                                                            <div class=\"tab-pane active\" id=\"nomfr\" role=\"tabpanel\">

                                                                <div class=\"row row-lg\">
                                                                    <div class=\"col-lg-3 \">
                                                                    </div>

                                                                    <div class=\"col-lg-9 text-left\">
                                                                        ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class=\"tab-pane\" id=\"nomen\" role=\"tabpanel\">
                                                                <div class=\"row row-lg\">
                                                                    <div class=\"col-lg-3 text-left\" style=\"padding-right: 0px;padding-left: 4px;\">
                                                                    </div>
                                                                    <div class=\"col-lg-9 text-left\">
                                                                        ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomen", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

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
                                            <div class=\"col-xxl-8 col-lg-8\">
                                                <!-- Example Tabs In The Panel -->
                                                <div class=\"panel nav-tabs-horizontal\" data-plugin=\"tabs\">
                                                    <ul class=\"nav nav-tabs nav-tabs-line\" role=\"tablist\">
                                                        <li class=\"nav-item\">
                                                            <a class=\"nav-link active\" id=\"description_fr\"  style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#descriptionfr\" aria-controls=\"exampleTopHome\" role=\"tab\" aria-selected=\"true\">
                                                                ";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "<span class=\"flag-icon flag-icon-fr\"></span>
                                                            </a>

                                                        </li>
                                                        <li class=\"nav-item\" style=\"\">
                                                            <a class=\"nav-link\" id=\"description_en\" style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#descriptionen\" aria-controls=\"exampleTopComponents\" role=\"tab\" aria-selected=\"false\">
                                                                ";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "<span class=\"flag-icon flag-icon-gb\"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class=\"panel-body\" style=\"border: 1px solid #d4d4d4;\">
                                                        <div class=\"tab-content\">
                                                            <div class=\"tab-pane active\" id=\"descriptionfr\" role=\"tabpanel\">

                                                                <div class=\"row row-lg\">
                                                                    <div class=\"col-lg-3 \">

                                                                    </div>

                                                                    <div class=\"col-lg-9 text-left\">
                                                                        ";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class=\"tab-pane\" id=\"descriptionen\" role=\"tabpanel\">
                                                                <div class=\"row row-lg\">
                                                                    <div class=\"col-lg-3 text-left\" style=\"padding-right: 0px;padding-left: 4px;\">

                                                                    </div>
                                                                    <div class=\"col-lg-9 text-left\">
                                                                        ";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descriptionen", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

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
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 197
        if ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", [])) {
            // line 198
            echo "                                                    <div style=\"padding-top: 20px;\">
                                                        <img class=\"\" style=\"height: 50px;width: auto;  margin-left: auto;  margin-right: auto;  display: block;\"
                                                             src=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/produits/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []), "html", null, true);
            echo "\">

                                                    </div>
                                                ";
        }
        // line 204
        echo "                                                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imagefile", []), 'widget', ["attr" => ["id" => "input-file-now", "data-plugin" => "dropify", "data-default-file" => "", "style" => "max-height: 100px;max-width:300px"]]);
        echo "
                                                <h6 style=\"color: #ED0000\">";
        // line 205
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
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fichetechnique"), "html", null, true);
        echo ":</label>
                                            </div>
                                            ";
        // line 226
        echo "

                                            <div class=\"col-lg-6 text-left input-group input-group-file \"
                                                 data-plugin=\"inputGroupFile\">

                                                <input type=\"text\" class=\"form-control\" readonly=\"\"
                                                       id=\"input_cgu_file_upload\">


                                                <span class=\"input-group-btn\">
                                                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                                                 <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                                                ";
        // line 239
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    ";
        // line 240
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'errors');
        echo "
                                                    ";
        // line 241
        if (($context["produit"] ?? $this->getContext($context, "produit"))) {
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["legal_notice_directory"] ?? $this->getContext($context, "legal_notice_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "file", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "file", []), "html", null, true);
            echo "</a>";
        }
        // line 242
        echo "                                                  </span>
                                                    </span>
                                            </div>

                                        </div>
                                    </div>



                                    <br><br>

                                    <div class=\"col-lg-12\" id=\"divcouleur\" hidden>

                                        <!-- list couleurs > 0 -->
                                        ";
        // line 256
        if ((twig_length_filter($this->env, ($context["list_couleur"] ?? $this->getContext($context, "list_couleur"))) > 0)) {
            // line 257
            echo "                                            ";
            $context["i"] = 0;
            // line 258
            echo "
                                            <!--elements  dans list couleurs  -->
                                            ";
            // line 260
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list_couleur"] ?? $this->getContext($context, "list_couleur")));
            foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                // line 261
                echo "                                                <input type=\"text\" class=\"form-control\" id=\"couleur\" value=\"";
                echo twig_escape_filter($this->env, (twig_length_filter($this->env, ($context["list_couleur"] ?? $this->getContext($context, "list_couleur"))) - 1), "html", null, true);
                echo "\" hidden>
                                                ";
                // line 262
                if ((($context["i"] ?? $this->getContext($context, "i")) == 0)) {
                    // line 263
                    echo "                                                    <div class=\"row row-lg\" >
                                                        <div class=\"col-lg-2 text-left\">

                                                        </div>
                                                        <div class=\"col-lg-2 text-left\">
                                                            <label>";
                    // line 268
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Couleurs"), "html", null, true);
                    echo "  :</label>
                                                        </div>
                                                        <div class=\"col-lg-6 text-right\" style=\"border: 1px solid #dcdcdc;padding: 15px 15px 15px 15px;\">
                                                            <!--couleur -->
                                                            <div class=\"row row-lg\" id=\"rowcouleur\">
                                                                <div class=\"col-lg-4 text-left\">
                                                                    <input type=\"color\" class=\"form-control\" name=\"couleurs[]\" value=\"";
                    // line 274
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
                    // line 289
                    if (($this->getAttribute($context["color"], "image", []) && ($this->getAttribute($context["color"], "image", []) != ""))) {
                        // line 290
                        echo "                                                                        <img name='img' id='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "image", []), "html", null, true);
                        echo "' style=\"width: 81%;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                                                             src=\"/uploads/produits/";
                        // line 291
                        echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "image", []), "html", null, true);
                        echo "\"  alt=\"img\">
                                                                    ";
                    }
                    // line 293
                    echo "                                                                </div>

                                                            </div>

                                                            <!--size -->
                                                            <div class=\"row row-lg\" id=\"rowsize0\" style=\"padding-top: 10px\">
                                                                ";
                    // line 299
                    if ((twig_length_filter($this->env, $this->getAttribute($context["color"], "sizes", [])) > 0)) {
                        // line 300
                        echo "                                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["color"], "sizes", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                            // line 301
                            echo "                                                                        <div class=\"col-lg-12 \" style=\"padding-top: 10px\">
                                                                            <div class=\"row row-lg\">
                                                                                <div class=\"col-lg-4 text-right\">
                                                                                    <span class=\"input-group-btn\">
                                                                                        <input type=\"text\" class=\"form-control text-center\"  value=\"";
                            // line 305
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                            echo "\" readonly>
                                                                                    </span>
                                                                                </div>
                                                                                <div class=\"col-lg-8 text-left\">
                                                                                    <div class=\"input-group input-group-btn\">
                                                                                        <input type=\"number\" class=\"form-control\"  value=\"";
                            // line 310
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "quantite", []), "html", null, true);
                            echo "\" id=\"quantityofsize";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo "\" name=\"quantityofsize";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo "\">
                                                                                        <button  type=\"button\" style=\"margin-right: 5px;border-top-left-radius: 0;border-bottom-left-radius: 0;\" onclick=\"updatequantityofsize(";
                            // line 311
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo ")\"
                                                                                                 class=\"btn btn-default waves-effect waves-classic\">
                                                                                            <i class=\"icon md-edit\" ></i>
                                                                                        </button>
                                                                                        <a  style=\"background-color: #df0c36;border-color: #df0c36;\" href=\"";
                            // line 315
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_size_admin", ["id" => $this->getAttribute($context["size"], "id", []), "idproduit" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
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
                        // line 327
                        echo "                                                                ";
                    }
                    // line 328
                    echo "                                                                <div class=\"col-lg-12 \"  style=\"padding-top: 10px\">
                                                                    <div class=\"row row-lg\">

                                                                        <div class=\"col-lg-4 text-right\">
                                                                            <input type=\"text\" class=\"form-control\" name=\"sizes0[]\" placeholder=\"size\">

                                                                            <!-- <select class=\"form-control\" style=\"text-align-last: center\" name=\"sizes0[]\">
                                                                                ";
                    // line 335
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sizeValue", []));
                    foreach ($context['_seq'] as $context["key"] => $context["size"]) {
                        // line 336
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
                    // line 338
                    echo "                                                                            </select>-->
                                                                        </div>
                                                                        <div class=\"col-lg-8 text-left\">
                                                                            <span class=\"input-group-btn\">
                                                                                <input type=\"number\"  class=\"form-control\" name=\"quantity0[]\" value=\"0\">
                                                                                <button type=\"button\" onclick=\"adddivsize(0)\" style=\"border-top-left-radius: 0;border-bottom-left-radius: 0;\"
                                                                                        class=\"btn btn-success waves-effect waves-classic\">
                                                                                    <i class=\"icon md-plus\"></i>
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a style=\"background-color:#df0c36;border-color:#df0c36;margin-top:15px\" href=\"";
                    // line 352
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_couleur_admin", ["idcouleur" => $this->getAttribute($context["color"], "id", []), "idproduit" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-primary waves-effect waves-classic\">
                                                                <i style=\"\" class=\"icon md-delete\" ></i>
                                                                ";
                    // line 354
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
                    // line 365
                    echo "                                                    <div class=\"row row-lg\"  style=\"padding-top: 10px\">
                                                        <div class=\"col-lg-2 text-left\">

                                                        </div>
                                                        <div class=\"col-lg-2 text-left\">
                                                        </div>
                                                        <div class=\"col-lg-6 text-right\" style=\"border: 1px solid #dcdcdc;padding: 15px 15px 15px 15px;\">
                                                            <div class=\"row row-lg\" id=\"rowcouleur\" style=\"padding-top: 10px\">

                                                                <div class=\"col-lg-4 text-left\">
                                                                    <input type=\"color\" class=\"form-control\" name=\"couleurs[]\" value=\"";
                    // line 375
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
                    // line 390
                    if (($this->getAttribute($context["color"], "image", []) && ($this->getAttribute($context["color"], "image", []) != ""))) {
                        // line 391
                        echo "
                                                                        <img name='img' id='";
                        // line 392
                        echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "image", []), "html", null, true);
                        echo "' style=\"    width:  81%;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                                                             src=\"/uploads/produits/";
                        // line 393
                        echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "image", []), "html", null, true);
                        echo "\"  alt=\"img\">

                                                                    ";
                    }
                    // line 396
                    echo "                                                                </div>
                                                            </div>
                                                            <div class=\"row row-lg\" id=\"rowsize";
                    // line 398
                    echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                    echo "\" style=\"padding-top: 10px\">
                                                                ";
                    // line 399
                    if ((twig_length_filter($this->env, $this->getAttribute($context["color"], "sizes", [])) > 0)) {
                        // line 400
                        echo "                                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["color"], "sizes", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                            // line 401
                            echo "                                                                        <div class=\"col-lg-12 \" style=\"padding-top: 10px\">
                                                                            <div class=\"row row-lg\">
                                                                                <div class=\"col-lg-4 text-right\">
                                                                                    <span class=\"input-group-btn\">
                                                                                        <input type=\"text\" class=\"form-control text-center\"  value=\"";
                            // line 405
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                            echo "\" readonly>
                                                                                    </span>
                                                                                </div>
                                                                                <div class=\"col-lg-8 text-left\">
                                                                                    <div class=\"input-group input-group-btn\">
                                                                                        <input type=\"number\" class=\"form-control\"  value=\"";
                            // line 410
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "quantite", []), "html", null, true);
                            echo "\" id=\"quantityofsize";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo "\" name=\"quantityofsize";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo "\">
                                                                                        <button type=\"button\" style=\"margin-right: 5px;border-top-left-radius: 0;border-bottom-left-radius: 0;\" onclick=\"updatequantityofsize(";
                            // line 411
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo ")\"
                                                                                                class=\"btn btn-default waves-effect waves-classic\">
                                                                                            <i class=\"icon md-edit\" ></i>
                                                                                        </button>
                                                                                        <a  style=\"background-color: #df0c36;border-color: #df0c36;\" href=\"";
                            // line 415
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_size_admin", ["id" => $this->getAttribute($context["size"], "id", []), "idproduit" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
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
                        // line 423
                        echo "                                                                ";
                    }
                    // line 424
                    echo "                                                                <div class=\"col-lg-12\"  style=\"padding-top: 10px\">
                                                                    <div class=\"row row-lg\">
                                                                        <div class=\"col-lg-4 text-right\">
                                                                            <input type=\"text\" class=\"form-control\" name=\"sizes";
                    // line 427
                    echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                    echo "[]\" placeholder=\"size\">

                                                                            <!--   <select class=\"form-control\" style=\"text-align-last: center\" name=\"sizes";
                    // line 429
                    echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                    echo "[]\">
                                                                                   ";
                    // line 430
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sizeValue", []));
                    foreach ($context['_seq'] as $context["key"] => $context["size"]) {
                        // line 431
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
                    // line 433
                    echo "                                                                               </select> -->
                                                                        </div>
                                                                        <div class=\"col-lg-8 text-left\">
                                                                            <span class=\"input-group-btn\">
                                                                                <input type=\"number\" class=\"form-control\" name=\"quantity";
                    // line 437
                    echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                    echo "[]\" value=\"0\">
                                                                                <button type=\"button\" onclick=\"adddivsize(";
                    // line 438
                    echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                    echo ")\" class=\"btn btn-success waves-effect waves-classic\"
                                                                                        style=\"border-top-left-radius: 0;border-bottom-left-radius: 0;\">
                                                                                    <i class=\"icon md-plus\"></i>
                                                                                </button>
                                                                            </span>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a style=\"background-color:#df0c36 ;border-color:#df0c36;margin-top: 15px;\" href=\"";
                    // line 448
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_couleur_admin", ["idcouleur" => $this->getAttribute($context["color"], "id", []), "idproduit" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-primary waves-effect waves-classic\">
                                                                <i class=\"icon md-delete\" ></i>";
                    // line 449
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Supprimer la couleur"), "html", null, true);
                    echo "
                                                            </a>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 454
                echo "                                                ";
                $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                // line 455
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 456
            echo "                                            <!-- list couleurs = 0 -->

                                        ";
        } else {
            // line 459
            echo "                                            ";
            $context["i"] = 0;
            // line 460
            echo "
                                            <div class=\"row row-lg\" >
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>";
            // line 466
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Couleurs"), "html", null, true);
            echo "  :</label>
                                                </div>
                                            </div>
                                        ";
        }
        // line 470
        echo "                                    </div>
                                    <div class=\"col-lg-12\" hidden>
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-4\">
                                            </div>
                                            <div class=\"col-lg-6 \" id=\"divbtnadd\" style=\"   ";
        // line 475
        if ((twig_length_filter($this->env, ($context["list_couleur"] ?? $this->getContext($context, "list_couleur"))) > 0)) {
            echo "margin-top: 15px;padding-left: 0px ";
        } else {
            echo " margin-top: -33px;  ";
        }
        echo " \">
                                                <button type=\"button\" onclick=\"adddivcouleur()\"
                                                        class=\"btn btn-success waves-effect waves-classic\">
                                                    <i class=\"icon md-plus\"></i> ";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter une couleur"), "html", null, true);
        echo "
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <br><br>

                                <div class=\"col-lg-12\" hidden>
                                    <div class=\"row row-lg\">
                                        <div class=\"col-lg-2 text-left\">

                                        </div>
                                        <div class=\"col-lg-2 text-left\">
                                        </div>

                                        <div class=\"col-lg-6 text-left\">
                                            <div class=\"checkbox-custom checkbox-primary center-block\">
                                                ";
        // line 497
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "is_active", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <label for=\"inputChecked\">";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Est Active"), "html", null, true);
        echo "?</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br><br>
                                ";
        // line 510
        echo "

                                <div class=\"row col-lg-12 text-center\">
                                    <div class=\"col-lg-6 text-right\">
                                        <button class=\"btn social-evernote  waves-effect waves-classic\" id=\"save\">";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "</button>
                                    </div>
                                    <div class=\"col-lg-6 text-left\">
                                        <a href=\"";
        // line 517
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_admin_index");
        echo "\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\" class=\"btn   btn-danger waves-effect waves-classic\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                                ";
        // line 520
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

    // line 536
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 537
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/Plugin/input-group-file.js"), "html", null, true);
        echo "\"></script>

    <script>

        \$( \"#save\").click(function() {

            //   console.log(\"rererere\")
            if ( \$(\"#produit_nom\").val().length === 0 )
            {
                \$('#titleeeone').find('a').trigger('click');

            }
            if ( \$(\"#produit_nomen\").val().length === 0 )
            {
                \$('#titleee').find('a').trigger('click');

            }

        });

    </script>

    <script type=\"text/javascript\">
        \$(\"#produit_file\").change(function () {
            // alert(\$(\"#pays_cgu_file_upload\").val());
            content = \$(\"#produit_file\").val();
            \$('#input_cgu_file_upload').val(content);
        });
        \$(\"select\").select2();

    </script >
    <script>
        \$(\"document\").ready(function(){
            \$('#promo_prix').on(\"click\",function(){

                \$('#produit_poucentage_promo').val('');
                \$('#produit_num_produit_promo').val('');
            })

            \$('#promo_pourcentage').on(\"click\",function(){
                \$('#produit_prix_promo').val('');
            })


        })
        \$(\"select\").select2();
        \$( \"select[name='produit[categorie]']\" ).change(function () {
            var matiereID = \$(this).val();
            if(matiereID) {
                \$.ajax({
                    url: \"";
        // line 588
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_sous_categorie_from_categorie_admin");
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
        // line 628
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_size_admin");
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
        function adddivcouleur(){
            divinitial=document.getElementById('divbtnadd').style.marginTop = \"15px\";
            divinitial=document.getElementById('divbtnadd').style.paddingLeft = \"0px\";
            var couleur = parseInt(  \$(\"#couleur\").val())+1;
            console.log(couleur)
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
                '  </div>'+
                '  <div class=\"col-lg-8 text-left\">'+
                '  <span class=\"input-group-btn\">'+
                ' <input type=\"number\"  class=\"form-control\" name=\"quantity'+couleur+'[]\" value=\"0\">'+
                '<button type=\"button\" style=\"border-top-left-radius: 0;border-bottom-left-radius: 0;\" onclick=\"adddivsize('+couleur+')\" class=\"btn btn-success waves-effect waves-classic\">' +
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

                '  </div>'+
                '  <div class=\"col-lg-8 text-left\">'+
                '  <span class=\"input-group-btn\">'+
                ' <input type=\"number\"  class=\"form-control\" name=\"quantity'+i+'[]\" value=\"0\">'+
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
        return "@Backend/admin/produit/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  995 => 628,  952 => 588,  899 => 538,  894 => 537,  888 => 536,  865 => 520,  857 => 517,  851 => 514,  845 => 510,  835 => 498,  831 => 497,  809 => 478,  799 => 475,  792 => 470,  785 => 466,  777 => 460,  774 => 459,  769 => 456,  763 => 455,  760 => 454,  752 => 449,  748 => 448,  735 => 438,  731 => 437,  725 => 433,  714 => 431,  710 => 430,  706 => 429,  701 => 427,  696 => 424,  693 => 423,  679 => 415,  672 => 411,  664 => 410,  656 => 405,  650 => 401,  645 => 400,  643 => 399,  639 => 398,  635 => 396,  629 => 393,  625 => 392,  622 => 391,  620 => 390,  602 => 375,  590 => 365,  576 => 354,  571 => 352,  555 => 338,  544 => 336,  540 => 335,  531 => 328,  528 => 327,  510 => 315,  503 => 311,  495 => 310,  487 => 305,  481 => 301,  476 => 300,  474 => 299,  466 => 293,  461 => 291,  456 => 290,  454 => 289,  436 => 274,  427 => 268,  420 => 263,  418 => 262,  413 => 261,  409 => 260,  405 => 258,  402 => 257,  400 => 256,  384 => 242,  374 => 241,  370 => 240,  366 => 239,  351 => 226,  346 => 216,  330 => 205,  325 => 204,  317 => 200,  313 => 198,  311 => 197,  305 => 194,  278 => 170,  262 => 157,  245 => 143,  236 => 137,  204 => 108,  189 => 96,  173 => 83,  164 => 77,  150 => 65,  141 => 59,  135 => 56,  127 => 50,  124 => 49,  114 => 42,  108 => 39,  100 => 33,  98 => 32,  93 => 30,  89 => 29,  77 => 19,  70 => 15,  63 => 10,  61 => 9,  56 => 7,  52 => 5,  46 => 4,  30 => 1,);
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
    <div class=\"page\">
        <div class=\"page-header\">
            <h1 class=\"page-title\">{{ \"Modification Produit\"|trans }}</h1>
        </div>
        {% if error is defined %}
        <div class=\"col-lg-12 text-center\">
            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
                {{ \"fill_all\"|trans({}, 'messages') }}
            </div>
        </div>
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
                                                    <label>{{\"Catégorie\"|trans}}<span style=\"color: #ED0000\">*</span> :</label>
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
                                                    <label>{{\"Sous Catégorie\"|trans}}<span style=\"color: #ED0000\">*</span> :</label>
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
                                            <div class=\"col-xxl-8 col-lg-8\">
                                                <!-- Example Tabs In The Panel -->
                                                <div class=\"panel nav-tabs-horizontal\" data-plugin=\"tabs\">
                                                    <ul class=\"nav nav-tabs nav-tabs-line\" role=\"tablist\">
                                                        <li class=\"nav-item\" id=\"titleeeone\">
                                                            <a class=\"nav-link active\" id=\"nom_fr\"  style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#nomfr\" aria-controls=\"exampleTopHome\" role=\"tab\" aria-selected=\"true\">
                                                                {{ \"Nom\"|trans }}<span style=\"color: #ED0000\">*</span><span class=\"flag-icon flag-icon-fr\"></span>
                                                            </a>

                                                        </li>
                                                        <li class=\"nav-item\" style=\"\" id=\"titleee\" >
                                                            <a class=\"nav-link\" id=\"nom_en\" style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#nomen\" aria-controls=\"exampleTopComponents\" role=\"tab\" aria-selected=\"false\">
                                                                {{ \"Nom\"|trans }}<span style=\"color: #ED0000\">*</span><span class=\"flag-icon flag-icon-gb\"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class=\"panel-body\" style=\"border: 1px solid #d4d4d4;\">
                                                        <div class=\"tab-content\">
                                                            <div class=\"tab-pane active\" id=\"nomfr\" role=\"tabpanel\">

                                                                <div class=\"row row-lg\">
                                                                    <div class=\"col-lg-3 \">
                                                                    </div>

                                                                    <div class=\"col-lg-9 text-left\">
                                                                        {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}


                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class=\"tab-pane\" id=\"nomen\" role=\"tabpanel\">
                                                                <div class=\"row row-lg\">
                                                                    <div class=\"col-lg-3 text-left\" style=\"padding-right: 0px;padding-left: 4px;\">
                                                                    </div>
                                                                    <div class=\"col-lg-9 text-left\">
                                                                        {{ form_widget(form.nomen, {'attr': {'class': 'form-control'}}) }}

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
                                            <div class=\"col-xxl-8 col-lg-8\">
                                                <!-- Example Tabs In The Panel -->
                                                <div class=\"panel nav-tabs-horizontal\" data-plugin=\"tabs\">
                                                    <ul class=\"nav nav-tabs nav-tabs-line\" role=\"tablist\">
                                                        <li class=\"nav-item\">
                                                            <a class=\"nav-link active\" id=\"description_fr\"  style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#descriptionfr\" aria-controls=\"exampleTopHome\" role=\"tab\" aria-selected=\"true\">
                                                                {{ \"Description\"|trans }}<span class=\"flag-icon flag-icon-fr\"></span>
                                                            </a>

                                                        </li>
                                                        <li class=\"nav-item\" style=\"\">
                                                            <a class=\"nav-link\" id=\"description_en\" style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#descriptionen\" aria-controls=\"exampleTopComponents\" role=\"tab\" aria-selected=\"false\">
                                                                {{ \"Description\"|trans }}<span class=\"flag-icon flag-icon-gb\"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class=\"panel-body\" style=\"border: 1px solid #d4d4d4;\">
                                                        <div class=\"tab-content\">
                                                            <div class=\"tab-pane active\" id=\"descriptionfr\" role=\"tabpanel\">

                                                                <div class=\"row row-lg\">
                                                                    <div class=\"col-lg-3 \">

                                                                    </div>

                                                                    <div class=\"col-lg-9 text-left\">
                                                                        {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}


                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class=\"tab-pane\" id=\"descriptionen\" role=\"tabpanel\">
                                                                <div class=\"row row-lg\">
                                                                    <div class=\"col-lg-3 text-left\" style=\"padding-right: 0px;padding-left: 4px;\">

                                                                    </div>
                                                                    <div class=\"col-lg-9 text-left\">
                                                                        {{ form_widget(form.descriptionen, {'attr': {'class': 'form-control'}}) }}

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
                                                <label>{{\"Fichetechnique\"|trans}}:</label>
                                            </div>
                                            {#
                                                <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.file, {'attr': {'class': 'form-control'}}) }}
                                                {{ form_errors(form.file) }}
                                                {% if produit %}<a target=\"_blank\" href=\"{{ legal_notice_directory }}/{{ produit.file }}\">{{ produit.file }}</a>{% endif %}

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

                                    <div class=\"col-lg-12\" id=\"divcouleur\" hidden>

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
                                                                                        <input type=\"number\" class=\"form-control\"  value=\"{{ size.quantite }}\" id=\"quantityofsize{{ size.id }}\" name=\"quantityofsize{{ size.id }}\">
                                                                                        <button  type=\"button\" style=\"margin-right: 5px;border-top-left-radius: 0;border-bottom-left-radius: 0;\" onclick=\"updatequantityofsize({{ size.id }})\"
                                                                                                 class=\"btn btn-default waves-effect waves-classic\">
                                                                                            <i class=\"icon md-edit\" ></i>
                                                                                        </button>
                                                                                        <a  style=\"background-color: #df0c36;border-color: #df0c36;\" href=\"{{ path('delete_size_admin',{'id':size.id,'idproduit':produit.id}) }}\" class=\"btn btn-primary waves-effect waves-classic\">
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
                                                                                <input type=\"number\"  class=\"form-control\" name=\"quantity0[]\" value=\"0\">
                                                                                <button type=\"button\" onclick=\"adddivsize(0)\" style=\"border-top-left-radius: 0;border-bottom-left-radius: 0;\"
                                                                                        class=\"btn btn-success waves-effect waves-classic\">
                                                                                    <i class=\"icon md-plus\"></i>
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a style=\"background-color:#df0c36;border-color:#df0c36;margin-top:15px\" href=\"{{ path('delete_couleur_admin',{'idcouleur':color.id,'idproduit':produit.id}) }}\" class=\"btn btn-primary waves-effect waves-classic\">
                                                                <i style=\"\" class=\"icon md-delete\" ></i>
                                                                {{ \"Supprimer la couleur\"|trans }}
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
                                                                                        <input type=\"number\" class=\"form-control\"  value=\"{{ size.quantite }}\" id=\"quantityofsize{{ size.id }}\" name=\"quantityofsize{{ size.id }}\">
                                                                                        <button type=\"button\" style=\"margin-right: 5px;border-top-left-radius: 0;border-bottom-left-radius: 0;\" onclick=\"updatequantityofsize({{ size.id }})\"
                                                                                                class=\"btn btn-default waves-effect waves-classic\">
                                                                                            <i class=\"icon md-edit\" ></i>
                                                                                        </button>
                                                                                        <a  style=\"background-color: #df0c36;border-color: #df0c36;\" href=\"{{ path('delete_size_admin',{'id':size.id,'idproduit':produit.id}) }}\" class=\"btn btn-primary waves-effect waves-classic\">
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
                                                                                <input type=\"number\" class=\"form-control\" name=\"quantity{{ i }}[]\" value=\"0\">
                                                                                <button type=\"button\" onclick=\"adddivsize({{ i }})\" class=\"btn btn-success waves-effect waves-classic\"
                                                                                        style=\"border-top-left-radius: 0;border-bottom-left-radius: 0;\">
                                                                                    <i class=\"icon md-plus\"></i>
                                                                                </button>
                                                                            </span>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a style=\"background-color:#df0c36 ;border-color:#df0c36;margin-top: 15px;\" href=\"{{ path('delete_couleur_admin',{'idcouleur':color.id,'idproduit':produit.id}) }}\" class=\"btn btn-primary waves-effect waves-classic\">
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
                                    <div class=\"col-lg-12\" hidden>
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-4\">
                                            </div>
                                            <div class=\"col-lg-6 \" id=\"divbtnadd\" style=\"   {% if list_couleur|length > 0 %}margin-top: 15px;padding-left: 0px {% else %} margin-top: -33px;  {% endif %} \">
                                                <button type=\"button\" onclick=\"adddivcouleur()\"
                                                        class=\"btn btn-success waves-effect waves-classic\">
                                                    <i class=\"icon md-plus\"></i> {{ \"Ajouter une couleur\"|trans }}
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <br><br>

                                <div class=\"col-lg-12\" hidden>
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


                                <div class=\"row col-lg-12 text-center\">
                                    <div class=\"col-lg-6 text-right\">
                                        <button class=\"btn social-evernote  waves-effect waves-classic\" id=\"save\">{{ 'Enregistrer'|trans }}</button>
                                    </div>
                                    <div class=\"col-lg-6 text-left\">
                                        <a href=\"{{ path('produit_admin_index') }}\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\" class=\"btn   btn-danger waves-effect waves-classic\">{{ 'back'|trans }}</a>
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
    <script src=\"{{ asset('remark/global/js/Plugin/input-group-file.js')}}\"></script>

    <script>

        \$( \"#save\").click(function() {

            //   console.log(\"rererere\")
            if ( \$(\"#produit_nom\").val().length === 0 )
            {
                \$('#titleeeone').find('a').trigger('click');

            }
            if ( \$(\"#produit_nomen\").val().length === 0 )
            {
                \$('#titleee').find('a').trigger('click');

            }

        });

    </script>

    <script type=\"text/javascript\">
        \$(\"#produit_file\").change(function () {
            // alert(\$(\"#pays_cgu_file_upload\").val());
            content = \$(\"#produit_file\").val();
            \$('#input_cgu_file_upload').val(content);
        });
        \$(\"select\").select2();

    </script >
    <script>
        \$(\"document\").ready(function(){
            \$('#promo_prix').on(\"click\",function(){

                \$('#produit_poucentage_promo').val('');
                \$('#produit_num_produit_promo').val('');
            })

            \$('#promo_pourcentage').on(\"click\",function(){
                \$('#produit_prix_promo').val('');
            })


        })
        \$(\"select\").select2();
        \$( \"select[name='produit[categorie]']\" ).change(function () {
            var matiereID = \$(this).val();
            if(matiereID) {
                \$.ajax({
                    url: \"{{ path('get_sous_categorie_from_categorie_admin') }}\",
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
                    url: \"{{ path('edit_size_admin') }}\",
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
        function adddivcouleur(){
            divinitial=document.getElementById('divbtnadd').style.marginTop = \"15px\";
            divinitial=document.getElementById('divbtnadd').style.paddingLeft = \"0px\";
            var couleur = parseInt(  \$(\"#couleur\").val())+1;
            console.log(couleur)
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
                '  </div>'+
                '  <div class=\"col-lg-8 text-left\">'+
                '  <span class=\"input-group-btn\">'+
                ' <input type=\"number\"  class=\"form-control\" name=\"quantity'+couleur+'[]\" value=\"0\">'+
                '<button type=\"button\" style=\"border-top-left-radius: 0;border-bottom-left-radius: 0;\" onclick=\"adddivsize('+couleur+')\" class=\"btn btn-success waves-effect waves-classic\">' +
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

                '  </div>'+
                '  <div class=\"col-lg-8 text-left\">'+
                '  <span class=\"input-group-btn\">'+
                ' <input type=\"number\"  class=\"form-control\" name=\"quantity'+i+'[]\" value=\"0\">'+
                '   </span>'+
                '  </div>'+
                '  <div class=\"col-lg-3 text-left\">'+
                '   </div>'+
                '   </div>';
            document.getElementById('rowsize'+i).appendChild(div);
        }

    </script>
{% endblock %}
", "@Backend/admin/produit/edit.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\admin\\produit\\edit.html.twig");
    }
}
