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

/* @Backend/admin/produit/new.html.twig */
class __TwigTemplate_1a98191e19b9b95a1079d88868a16842cd84d804e041f14bd24d3646d4e084b9 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/admin/produit/new.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/admin/produit/new.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajout Produit"), "html", null, true);
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
        echo "

        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <div class=\"row row-lg\">


                                    ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "col-lg-12 "]]);
        echo "
                                    <input type=\"hidden\" name=\"referer\"
                                           value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "headers", []), "get", [0 => "referer"], "method"), "html", null, true);
        echo "\"/>

                                    ";
        // line 35
        if ($this->getAttribute(($context["form"] ?? null), "categorie", [], "any", true, true)) {
            // line 36
            echo "                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
            echo " <span style=\"color: #ED0000\">*</span>:</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    ";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                                </div>
                                            </div>
                                        </div>

                                        <br><br>
                                    ";
        }
        // line 52
        echo "
                                    ";
        // line 53
        if ($this->getAttribute(($context["form"] ?? null), "sous_categorie", [], "any", true, true)) {
            // line 54
            echo "                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégorie"), "html", null, true);
            echo " <span style=\"color: #ED0000\">*</span>:</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    ";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sous_categorie", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                    ";
        }
        // line 69
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
                                                            <a class=\"nav-link active\" id=\"nom_fr\"
                                                               style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\"
                                                               href=\"#nomfr\" aria-controls=\"exampleTopHome\" role=\"tab\"
                                                               aria-selected=\"true\">
                                                                ";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span><span class=\"flag-icon flag-icon-fr\"></span>
                                                            </a>

                                                        </li>
                                                        <li class=\"nav-item\" style=\"\"  id=\"titleee\">
                                                            <a class=\"nav-link\" id=\"nom_en\"
                                                               style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\"
                                                               href=\"#nomen\" aria-controls=\"exampleTopComponents\"
                                                               role=\"tab\" aria-selected=\"false\">
                                                                ";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span><span
                                                                        class=\"flag-icon flag-icon-gb\"></span>
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
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class=\"tab-pane\" id=\"nomen\" role=\"tabpanel\">
                                                                <div class=\"row row-lg\">
                                                                    <div class=\"col-lg-3 text-left\"
                                                                         style=\"padding-right: 0px;padding-left: 4px;\">
                                                                    </div>
                                                                    <div class=\"col-lg-9 text-left\">
                                                                        ";
        // line 121
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
                                                            <a class=\"nav-link active\" id=\"description_fr\"
                                                               style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\"
                                                               href=\"#descriptionfr\" aria-controls=\"exampleTopHome\"
                                                               role=\"tab\" aria-selected=\"true\">
                                                                ";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "<span
                                                                        class=\"flag-icon flag-icon-fr\"></span>
                                                            </a>

                                                        </li>
                                                        <li class=\"nav-item\" style=\"\">
                                                            <a class=\"nav-link\" id=\"description_en\"
                                                               style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\"
                                                               href=\"#descriptionen\"
                                                               aria-controls=\"exampleTopComponents\" role=\"tab\"
                                                               aria-selected=\"false\">
                                                                ";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "<span
                                                                        class=\"flag-icon flag-icon-gb\"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class=\"panel-body\" style=\"border: 1px solid #d4d4d4;\">
                                                        <div class=\"tab-content\">
                                                            <div class=\"tab-pane active\" id=\"descriptionfr\"
                                                                 role=\"tabpanel\">

                                                                <div class=\"row row-lg\">
                                                                    <div class=\"col-lg-3 \">

                                                                    </div>

                                                                    <div class=\"col-lg-9 text-left\">
                                                                        ";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class=\"tab-pane\" id=\"descriptionen\" role=\"tabpanel\">
                                                                <div class=\"row row-lg\">
                                                                    <div class=\"col-lg-3 text-left\"
                                                                         style=\"padding-right: 0px;padding-left: 4px;\">

                                                                    </div>
                                                                    <div class=\"col-lg-9 text-left\">
                                                                        ";
        // line 196
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
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imagefile", []), 'widget', ["attr" => ["id" => "input-file-now", "data-plugin" => "dropify", "data-default-file" => "", "style" => "max-height: 100px;max-width:300px"]]);
        echo "
                                                <h6 style=\"color: #ED0000\">";
        // line 224
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
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fichetechnique"), "html", null, true);
        echo ":</label>
                                            </div>
                                   ";
        // line 245
        echo "
                                            <div class=\"col-lg-6 text-left input-group input-group-file \"
                                                 data-plugin=\"inputGroupFile\">

                                                <input type=\"text\" class=\"form-control\" readonly=\"\"
                                                       id=\"input_cgu_file_upload\">


                                                <span class=\"input-group-btn\">
                                                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                                                 <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                                                ";
        // line 257
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    ";
        // line 262
        echo "
                                                    ";
        // line 263
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), "vars", []), "errors", [], "array")) > 0)) {
            // line 264
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), "vars", []), "errors", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 265
                echo "                                                            <span style=\"color: #F44336\">
                                                                            ";
                // line 266
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
                echo "
                                                                        </span>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            echo "                                                    ";
        }
        // line 270
        echo "
                                                    ";
        // line 271
        if (($context["produit"] ?? $this->getContext($context, "produit"))) {
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["legal_notice_directory"] ?? $this->getContext($context, "legal_notice_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "file", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "file", []), "html", null, true);
            echo "</a>";
        }
        // line 272
        echo "                                                  </span>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>

                                    <br><br>


                                    <div class=\"col-lg-12\" id=\"divcouleur\" hidden>

                                        ";
        // line 283
        $context["i"] = 0;
        // line 284
        echo "
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Couleurs"), "html", null, true);
        echo " :</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=\"col-lg-12\" hidden>
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-4\">
                                            </div>
                                            <div class=\"col-lg-6 \" id=\"divbtnadd\" style=\"margin-top: -33px;\">
                                                <button type=\"button\" onclick=\"adddivcouleur()\"
                                                        class=\"btn btn-success waves-effect waves-classic\">
                                                    <i class=\"icon md-plus\"></i> ";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter une couleur"), "html", null, true);
        echo "
                                                </button>
                                                <input type=\"text\" class=\"form-control\" id=\"couleur\" value=\"-1\"
                                                       hidden>                                            </span>

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
        // line 324
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "is_active", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <label for=\"inputChecked\">";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Est Active"), "html", null, true);
        echo "?</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br><br>
                                ";
        // line 337
        echo "

                                <div class=\"row col-lg-12 text-center\" >
                                    <div class=\"col-lg-6 text-right\">
                                        <button class=\"btn social-evernote  waves-effect waves-classic\" id=\"save\">";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "</button>
                                    </div>

                                    <div class=\"col-lg-6 text-left\">
                                        <a href=\"";
        // line 345
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_admin_index");
        echo "\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                                ";
        // line 348
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

    // line 364
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 365
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/Plugin/input-group-file.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 373
        echo "    <script>

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




    </script >

    <script type=\"text/javascript\" >
        \$(\"document\").ready(function () {
            \$('#promo_prix').on(\"click\", function () {

                \$('#produit_poucentage_promo').val('');
                \$('#produit_num_produit_promo').val('');
            })

            \$('#promo_pourcentage').on(\"click\", function () {
                \$('#produit_prix_promo').val('');
            })

            \$(\"select[name='produit[categorie]']\").change(function () {
                var matiereID = \$(this).val();
                console.log('matiereID')
                if (matiereID) {
                    \$.ajax({
                        url: \"";
        // line 425
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_sous_categorie_from_categorie_admin");
        echo "\",
                        dataType: 'Json',
                        data: {'categorieid': matiereID},
                        type: 'GET',
                        success: function (data) {
                            \$('select[name=\"produit[sous_categorie]\"]').empty();
                            \$('select[name=\"produit[sous_categorie]').append('<option value=\"\" selected hidden>' + 'choisir une sous categorie' + '</option>');

                            for (i = 0; i < data.length; i++) {
                                student = data[i];
                                \$('select[name=\"produit[sous_categorie]').append('<option value=\"' + student['id'] + '\">' + student['nom'] + '</option>');
                            }
                            ;
                            //   \$(\"select\").select2();
                        }
                    });


                } else {
                    \$('select[name=\"produit[sous_categorie]\"]').empty();
                }
            });

        })

       // \$(\"select\").select2();

      /*  (function (document, window, \$) {
            'use strict';

            var Site = window.Site;
            \$(document).ready(function () {
                Site.run();
            });

            \$(\"select[name='produit_categorie']\").select2();
            \$(\"select[name='produit_sous_categorie']\").select2();

        })(document, window, jQuery);*/
    </script>
    <script>
      /*  function updatequantityofsize(id) {
            var quantity = parseInt(\$(\"#quantityofsize\" + id).val());
            console.log(quantity)
            if (quantity > 0) {
                \$.ajax({
                    url: \"";
        // line 471
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_size_admin");
        echo "\",
                    dataType: 'Json',
                    data: {'id': id, 'quantite': quantity},
                    type: 'GET',
                    success: function (data) {
                        \$(\"#quantityofsize\" + id).val(quantity);
                        alert(";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("la quantité est modifiée avec succes"), "html", null, true);
        echo ")
                    }
                });

            } else {
                alert(";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("la quantité doit ètre"), "html", null, true);
        echo ")
            }
        }*/

        function adddivcouleur() {
            divinitial = document.getElementById('divbtnadd').style.marginTop = \"15px\";
            divinitial = document.getElementById('divbtnadd').style.paddingLeft = \"0px\";
            var couleur = parseInt(\$(\"#couleur\").val()) + 1;
            console.log(couleur)
            const div = document.createElement('div');
            div.className = 'row row-lg';
            div.style = 'padding-top: 10px';
            div.id = 'rowcouleur';
            div.innerHTML =
                '<div class=\"col-lg-12\">' +
                '<div class=\"row row-lg\">' +

                '<div class=\"col-lg-4 text-left\"> ' +
                '<input type=\"color\" class=\"form-control\" name=\"couleurs[]\"> ' +
                '<input type=\"text\" class=\"form-control\" name=\"couleur' + couleur + '\" value=\"' + couleur + '\" hidden>' +
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
                '<div class=\"col-lg-2 text-left\"> </div>' +
                '</div> ' +
                '</div> ';

            const divsize = document.createElement('div');

            divsize.className = 'row row-lg';
            divsize.style = 'padding-top: 10px';
            divsize.id = 'rowsize' + couleur;
            divsize.innerHTML =
                '<div class=\"col-lg-12\">' +
                '<div class=\"row row-lg\">' +
                '<div class=\"col-lg-4 text-right\">' +
                '<input type=\"text\" class=\"form-control\" name=\"sizes' + couleur + '[]\" placeholder=\"size\">' +
                // '<select class=\"form-control\" id=\"sizes\" style=\"text-align-last: center\" name=\"sizes'+couleur+'[]\" > ' +
                //   '";
        // line 529
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sizeValue", []));
        foreach ($context['_seq'] as $context["key"] => $context["size"]) {
            echo "'+
                //  ' <option value=\"";
            // line 530
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"  >";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "</option>'+
                //  '  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 531
        echo "'+
                //   '  </select>'+
                '  </div>' +
                '  <div class=\"col-lg-8 text-left\">' +
                '  <span class=\"input-group-btn\">' +
                ' <input type=\"number\" class=\"form-control\" name=\"quantity' + couleur + '[]\" value=\"0\">' +
                '<button type=\"button\" style=\"border-top-left-radius: 0;border-bottom-left-radius: 0;\" onclick=\"adddivsize(' + couleur + ')\" class=\"btn btn-success waves-effect waves-classic\">' +
                '<i class=\"icon md-plus\"></i>' +
                '</button>' +
                '   </span>' +
                '  </div>' +
                '  <div class=\"col-lg-3 text-left\">' +
                '   </div>' +
                '   </div>' +
                '   </div>';


            const divrow = document.createElement('div');
            divrow.className = 'row row-lg';
            divrow.style = 'padding-top: 10px';
            divrow.innerHTML =
                '<div class=\"col-lg-4 text-right\"></div>' +
                '<div class=\"col-lg-6 text-right\" style=\"border: 1px solid #dcdcdc;padding: 15px 15px 15px 15px;\" >' +
                div.outerHTML +
                divsize.outerHTML +
                ' </div>';


            document.getElementById('divcouleur').appendChild(divrow);
            \$(\"#couleur\").val(couleur)
        }

        function adddivsize(i) {
            var couleur = parseInt(\$(\"#couleur\").val());
            console.log(couleur)
            const div = document.createElement('div');
            div.className = 'col-lg-12';
            div.style = 'padding-top: 10px';
            div.innerHTML =

                '<div class=\"row row-lg\">' +
                '<div class=\"col-lg-4 text-right\">' +
                '<input type=\"text\" class=\"form-control\" name=\"sizes' + i + '[]\" placeholder=\"size\">' +
                //    '<select class=\"form-control\" id=\"sizes\" style=\"text-align-last: center\" name=\"sizes'+i+'[]\" > ' +
                //    '";
        // line 575
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sizeValue", []));
        foreach ($context['_seq'] as $context["key"] => $context["size"]) {
            echo "'+
                //   ' <option value=\"";
            // line 576
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"  >";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "</option>'+
                //   '  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 577
        echo "'+
                //   '  </select>'+
                '  </div>' +
                '  <div class=\"col-lg-8 text-left\">' +
                '  <span class=\"input-group-btn\">' +
                ' <input type=\"number\" class=\"form-control\" name=\"quantity' + i + '[]\" value=\"0\">' +
                '   </span>' +
                '  </div>' +
                '  <div class=\"col-lg-3 text-left\">' +
                '   </div>' +
                '   </div>';
            document.getElementById('rowsize' + i).appendChild(div);
        }

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/admin/produit/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  803 => 577,  793 => 576,  787 => 575,  741 => 531,  731 => 530,  725 => 529,  675 => 482,  667 => 477,  658 => 471,  609 => 425,  555 => 373,  550 => 366,  545 => 365,  539 => 364,  516 => 348,  508 => 345,  501 => 341,  495 => 337,  485 => 325,  481 => 324,  456 => 302,  441 => 290,  433 => 284,  431 => 283,  418 => 272,  408 => 271,  405 => 270,  402 => 269,  393 => 266,  390 => 265,  385 => 264,  383 => 263,  380 => 262,  376 => 257,  362 => 245,  357 => 234,  342 => 224,  338 => 223,  332 => 220,  305 => 196,  288 => 182,  269 => 166,  255 => 155,  218 => 121,  202 => 108,  185 => 94,  173 => 85,  155 => 69,  146 => 63,  140 => 60,  132 => 54,  130 => 53,  127 => 52,  117 => 45,  111 => 42,  103 => 36,  101 => 35,  96 => 33,  91 => 31,  77 => 19,  70 => 15,  63 => 10,  61 => 9,  56 => 7,  52 => 5,  46 => 4,  30 => 1,);
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
            <h1 class=\"page-title\">{{ \"Ajout Produit\"|trans }}</h1>
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
                                    <input type=\"hidden\" name=\"referer\"
                                           value=\"{{ app.request.headers.get('referer') }}\"/>

                                    {% if  form.categorie is defined %}
                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>{{ \"Catégorie\"|trans }} <span style=\"color: #ED0000\">*</span>:</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
                                                </div>
                                            </div>
                                        </div>

                                        <br><br>
                                    {% endif %}

                                    {% if  form.sous_categorie is defined %}
                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>{{ \"Sous Catégorie\"|trans }} <span style=\"color: #ED0000\">*</span>:</label>
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
                                                            <a class=\"nav-link active\" id=\"nom_fr\"
                                                               style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\"
                                                               href=\"#nomfr\" aria-controls=\"exampleTopHome\" role=\"tab\"
                                                               aria-selected=\"true\">
                                                                {{ \"Nom\"|trans }}<span style=\"color: #ED0000\">*</span><span class=\"flag-icon flag-icon-fr\"></span>
                                                            </a>

                                                        </li>
                                                        <li class=\"nav-item\" style=\"\"  id=\"titleee\">
                                                            <a class=\"nav-link\" id=\"nom_en\"
                                                               style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\"
                                                               href=\"#nomen\" aria-controls=\"exampleTopComponents\"
                                                               role=\"tab\" aria-selected=\"false\">
                                                                {{ \"Nom\"|trans }}<span style=\"color: #ED0000\">*</span><span
                                                                        class=\"flag-icon flag-icon-gb\"></span>
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
                                                                    <div class=\"col-lg-3 text-left\"
                                                                         style=\"padding-right: 0px;padding-left: 4px;\">
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
                                                            <a class=\"nav-link active\" id=\"description_fr\"
                                                               style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\"
                                                               href=\"#descriptionfr\" aria-controls=\"exampleTopHome\"
                                                               role=\"tab\" aria-selected=\"true\">
                                                                {{ \"Description\"|trans }}<span
                                                                        class=\"flag-icon flag-icon-fr\"></span>
                                                            </a>

                                                        </li>
                                                        <li class=\"nav-item\" style=\"\">
                                                            <a class=\"nav-link\" id=\"description_en\"
                                                               style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\"
                                                               href=\"#descriptionen\"
                                                               aria-controls=\"exampleTopComponents\" role=\"tab\"
                                                               aria-selected=\"false\">
                                                                {{ \"Description\"|trans }}<span
                                                                        class=\"flag-icon flag-icon-gb\"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class=\"panel-body\" style=\"border: 1px solid #d4d4d4;\">
                                                        <div class=\"tab-content\">
                                                            <div class=\"tab-pane active\" id=\"descriptionfr\"
                                                                 role=\"tabpanel\">

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
                                                                    <div class=\"col-lg-3 text-left\"
                                                                         style=\"padding-right: 0px;padding-left: 4px;\">

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
                                                <label>{{ \"Image\"|trans }}<span style=\"color: #ED0000\">*</span> :</label>
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
                                                <label>{{ \"Fichetechnique\"|trans }}:</label>
                                            </div>
                                   {#
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.file, {'attr': {'class': 'form-control'}}) }}
                                                {{ form_errors(form.file) }}
                                                {% if produit %}<a target=\"_blank\"
                                                                   href=\"{{ legal_notice_directory }}/{{ produit.file }}\">{{ produit.file }}</a>{% endif %}

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
                                                    {#
                                                                                                        {{ form_errors(form.file) }}

                                                    #}

                                                    {% if form.file.vars['errors']|length > 0 %}
                                                        {% for error in form.file.vars['errors'] %}
                                                            <span style=\"color: #F44336\">
                                                                            {{ error.message }}
                                                                        </span>
                                                        {% endfor %}
                                                    {% endif %}

                                                    {% if produit %}<a target=\"_blank\" href=\"{{ legal_notice_directory }}/{{ produit.file }}\">{{ produit.file }}</a>{% endif %}
                                                  </span>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>

                                    <br><br>


                                    <div class=\"col-lg-12\" id=\"divcouleur\" hidden>

                                        {% set i= 0 %}

                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>{{ \"Couleurs\"|trans }} :</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=\"col-lg-12\" hidden>
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-4\">
                                            </div>
                                            <div class=\"col-lg-6 \" id=\"divbtnadd\" style=\"margin-top: -33px;\">
                                                <button type=\"button\" onclick=\"adddivcouleur()\"
                                                        class=\"btn btn-success waves-effect waves-classic\">
                                                    <i class=\"icon md-plus\"></i> {{ \"Ajouter une couleur\"|trans }}
                                                </button>
                                                <input type=\"text\" class=\"form-control\" id=\"couleur\" value=\"-1\"
                                                       hidden>                                            </span>

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


                                <div class=\"row col-lg-12 text-center\" >
                                    <div class=\"col-lg-6 text-right\">
                                        <button class=\"btn social-evernote  waves-effect waves-classic\" id=\"save\">{{ 'Enregistrer'|trans }}</button>
                                    </div>

                                    <div class=\"col-lg-6 text-left\">
                                        <a href=\"{{ path('produit_admin_index') }}\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">{{ 'back'|trans }}</a>
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
    <script src=\"{{ asset('remark/global/js/Plugin/input-group-file.js') }}\"></script>

    {#
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
    <link href=\"https://rawgit.com/select2/select2/master/dist/css/select2.min.css\" rel=\"stylesheet\"/>
    <script src=\"https://rawgit.com/select2/select2/master/dist/js/select2.js\"></script>
    #}
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




    </script >

    <script type=\"text/javascript\" >
        \$(\"document\").ready(function () {
            \$('#promo_prix').on(\"click\", function () {

                \$('#produit_poucentage_promo').val('');
                \$('#produit_num_produit_promo').val('');
            })

            \$('#promo_pourcentage').on(\"click\", function () {
                \$('#produit_prix_promo').val('');
            })

            \$(\"select[name='produit[categorie]']\").change(function () {
                var matiereID = \$(this).val();
                console.log('matiereID')
                if (matiereID) {
                    \$.ajax({
                        url: \"{{ path('get_sous_categorie_from_categorie_admin') }}\",
                        dataType: 'Json',
                        data: {'categorieid': matiereID},
                        type: 'GET',
                        success: function (data) {
                            \$('select[name=\"produit[sous_categorie]\"]').empty();
                            \$('select[name=\"produit[sous_categorie]').append('<option value=\"\" selected hidden>' + 'choisir une sous categorie' + '</option>');

                            for (i = 0; i < data.length; i++) {
                                student = data[i];
                                \$('select[name=\"produit[sous_categorie]').append('<option value=\"' + student['id'] + '\">' + student['nom'] + '</option>');
                            }
                            ;
                            //   \$(\"select\").select2();
                        }
                    });


                } else {
                    \$('select[name=\"produit[sous_categorie]\"]').empty();
                }
            });

        })

       // \$(\"select\").select2();

      /*  (function (document, window, \$) {
            'use strict';

            var Site = window.Site;
            \$(document).ready(function () {
                Site.run();
            });

            \$(\"select[name='produit_categorie']\").select2();
            \$(\"select[name='produit_sous_categorie']\").select2();

        })(document, window, jQuery);*/
    </script>
    <script>
      /*  function updatequantityofsize(id) {
            var quantity = parseInt(\$(\"#quantityofsize\" + id).val());
            console.log(quantity)
            if (quantity > 0) {
                \$.ajax({
                    url: \"{{ path('edit_size_admin') }}\",
                    dataType: 'Json',
                    data: {'id': id, 'quantite': quantity},
                    type: 'GET',
                    success: function (data) {
                        \$(\"#quantityofsize\" + id).val(quantity);
                        alert({{ \"la quantité est modifiée avec succes\"|trans }})
                    }
                });

            } else {
                alert({{ \"la quantité doit ètre\"|trans }})
            }
        }*/

        function adddivcouleur() {
            divinitial = document.getElementById('divbtnadd').style.marginTop = \"15px\";
            divinitial = document.getElementById('divbtnadd').style.paddingLeft = \"0px\";
            var couleur = parseInt(\$(\"#couleur\").val()) + 1;
            console.log(couleur)
            const div = document.createElement('div');
            div.className = 'row row-lg';
            div.style = 'padding-top: 10px';
            div.id = 'rowcouleur';
            div.innerHTML =
                '<div class=\"col-lg-12\">' +
                '<div class=\"row row-lg\">' +

                '<div class=\"col-lg-4 text-left\"> ' +
                '<input type=\"color\" class=\"form-control\" name=\"couleurs[]\"> ' +
                '<input type=\"text\" class=\"form-control\" name=\"couleur' + couleur + '\" value=\"' + couleur + '\" hidden>' +
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
                '<div class=\"col-lg-2 text-left\"> </div>' +
                '</div> ' +
                '</div> ';

            const divsize = document.createElement('div');

            divsize.className = 'row row-lg';
            divsize.style = 'padding-top: 10px';
            divsize.id = 'rowsize' + couleur;
            divsize.innerHTML =
                '<div class=\"col-lg-12\">' +
                '<div class=\"row row-lg\">' +
                '<div class=\"col-lg-4 text-right\">' +
                '<input type=\"text\" class=\"form-control\" name=\"sizes' + couleur + '[]\" placeholder=\"size\">' +
                // '<select class=\"form-control\" id=\"sizes\" style=\"text-align-last: center\" name=\"sizes'+couleur+'[]\" > ' +
                //   '{% for key,size in produit.sizeValue %}'+
                //  ' <option value=\"{{ key }}\"  >{{ size }}</option>'+
                //  '  {% endfor %}'+
                //   '  </select>'+
                '  </div>' +
                '  <div class=\"col-lg-8 text-left\">' +
                '  <span class=\"input-group-btn\">' +
                ' <input type=\"number\" class=\"form-control\" name=\"quantity' + couleur + '[]\" value=\"0\">' +
                '<button type=\"button\" style=\"border-top-left-radius: 0;border-bottom-left-radius: 0;\" onclick=\"adddivsize(' + couleur + ')\" class=\"btn btn-success waves-effect waves-classic\">' +
                '<i class=\"icon md-plus\"></i>' +
                '</button>' +
                '   </span>' +
                '  </div>' +
                '  <div class=\"col-lg-3 text-left\">' +
                '   </div>' +
                '   </div>' +
                '   </div>';


            const divrow = document.createElement('div');
            divrow.className = 'row row-lg';
            divrow.style = 'padding-top: 10px';
            divrow.innerHTML =
                '<div class=\"col-lg-4 text-right\"></div>' +
                '<div class=\"col-lg-6 text-right\" style=\"border: 1px solid #dcdcdc;padding: 15px 15px 15px 15px;\" >' +
                div.outerHTML +
                divsize.outerHTML +
                ' </div>';


            document.getElementById('divcouleur').appendChild(divrow);
            \$(\"#couleur\").val(couleur)
        }

        function adddivsize(i) {
            var couleur = parseInt(\$(\"#couleur\").val());
            console.log(couleur)
            const div = document.createElement('div');
            div.className = 'col-lg-12';
            div.style = 'padding-top: 10px';
            div.innerHTML =

                '<div class=\"row row-lg\">' +
                '<div class=\"col-lg-4 text-right\">' +
                '<input type=\"text\" class=\"form-control\" name=\"sizes' + i + '[]\" placeholder=\"size\">' +
                //    '<select class=\"form-control\" id=\"sizes\" style=\"text-align-last: center\" name=\"sizes'+i+'[]\" > ' +
                //    '{% for key,size in produit.sizeValue %}'+
                //   ' <option value=\"{{ key }}\"  >{{ size }}</option>'+
                //   '  {% endfor %}'+
                //   '  </select>'+
                '  </div>' +
                '  <div class=\"col-lg-8 text-left\">' +
                '  <span class=\"input-group-btn\">' +
                ' <input type=\"number\" class=\"form-control\" name=\"quantity' + i + '[]\" value=\"0\">' +
                '   </span>' +
                '  </div>' +
                '  <div class=\"col-lg-3 text-left\">' +
                '   </div>' +
                '   </div>';
            document.getElementById('rowsize' + i).appendChild(div);
        }

    </script>
{% endblock %}
", "@Backend/admin/produit/new.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\admin\\produit\\new.html.twig");
    }
}
