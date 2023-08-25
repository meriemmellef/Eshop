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

/* BackendBundle:gerant/produit:new.html.twig */
class __TwigTemplate_e18c1dd704a44c185b70123418a990bb9ff46d1622ecf97363b18668f8c4ecff extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:gerant/produit:new.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "BackendBundle:gerant/produit:new.html.twig", 1);
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
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <div class=\"row row-lg\">


                                    ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "col-lg-12 "]]);
        echo "
                                    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "headers", []), "get", [0 => "referer"], "method"), "html", null, true);
        echo "\"/>

                                    ";
        // line 22
        if ($this->getAttribute(($context["form"] ?? null), "categorie", [], "any", true, true)) {
            // line 23
            echo "                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
            echo " :</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    ";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                                </div>
                                            </div>
                                        </div>

                                        <br><br>
                                    ";
        }
        // line 39
        echo "                                    ";
        if ($this->getAttribute(($context["form"] ?? null), "sous_categorie", [], "any", true, true)) {
            // line 40
            echo "                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégorie"), "html", null, true);
            echo " :</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    ";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sous_categorie", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                    ";
        }
        // line 55
        echo "                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo " :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
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
                                                <label>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom En"), "html", null, true);
        echo " :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomen", []), 'widget', ["attr" => ["class" => "form-control"]]);
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
                                                <label>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo " :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'widget', ["attr" => ["class" => "form-control"]]);
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
                                                <label>";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description En"), "html", null, true);
        echo " :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descriptionen", []), 'widget', ["attr" => ["class" => "form-control"]]);
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
                                                <label>";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix"), "html", null, true);
        echo " :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prix", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <br>
                                                ";
        // line 126
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "valid", [])) {
            // line 127
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 128
                echo "                                                        ";
                // line 129
                echo "                                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "vars", []), "errors", []));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 130
                    echo "                                                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                                    <span aria-hidden=\"true\">×</span>
                                                                </button>
                                                                ";
                    // line 134
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("le prix n'est pas valide"), "html", null, true);
                    echo "
                                                            </div>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "
                                                ";
        }
        // line 140
        echo "                                            </div>
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
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "is_promo", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <label for=\"inputChecked\">";
        // line 156
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
                                                        <li class=\"nav-item\">
                                                            <a class=\"nav-link active\" id=\"promo_prix\"  style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#promoparprix\" aria-controls=\"exampleTopHome\" role=\"tab\" aria-selected=\"true\">
                                                                ";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion par prix"), "html", null, true);
        echo "
                                                            </a>
                                                        </li>
                                                        <li class=\"nav-item\" style=\"\">
                                                            <a class=\"nav-link\" id=\"promo_pourcentage\" style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#promoparpourcentage\" aria-controls=\"exampleTopComponents\" role=\"tab\" aria-selected=\"false\">
                                                                ";
        // line 179
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
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix en promotion"), "html", null, true);
        echo " :</label>
                                                                    </div>
                                                                    <div class=\"col-lg-9 text-left\">
                                                                        ";
        // line 192
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
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pourcentage de promotion"), "html", null, true);
        echo ":</label>
                                                                        </div>
                                                                        <div class=\"col-lg-9 text-left\">
                                                                            ";
        // line 206
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
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Numéro de produit à reduire"), "html", null, true);
        echo ":</label>
                                                                        </div>
                                                                        <div class=\"col-lg-9 text-left\">
                                                                            ";
        // line 219
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
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantité"), "html", null, true);
        echo " :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", []), 'widget', ["attr" => ["class" => "form-control"]]);
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
                                                <label>";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Maximum de produits par commande"), "html", null, true);
        echo "  :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 256
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "maxcommande", []), 'widget', ["attr" => ["class" => "form-control"]]);
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
                                                <label>";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image"), "html", null, true);
        echo "  :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 270
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imagefile", []), 'widget', ["attr" => ["id" => "input-file-now", "data-plugin" => "dropify", "data-default-file" => "", "style" => "max-height: 100px;max-width:300px"]]);
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class=\"col-lg-12\" id=\"divcouleur\" >

                                            ";
        // line 279
        $context["i"] = 0;
        // line 280
        echo "
                                            <div class=\"row row-lg\" >
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Couleurs"), "html", null, true);
        echo "  :</label>
                                                </div>
                                            </div>

                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-4\">
                                            </div>
                                            <div class=\"col-lg-6 \" id=\"divbtnadd\" style=\"margin-top: -33px;\">
                                                <button type=\"button\" onclick=\"adddivcouleur()\"
                                                        class=\"btn social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon md-plus\"></i> ";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter une couleur"), "html", null, true);
        echo "
                                                </button>
                                                <input type=\"text\" class=\"form-control\" id=\"couleur\" value=\"-1\" hidden>
                                                </span>

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
        // line 320
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "is_active", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <label for=\"inputChecked\">";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Est Active"), "html", null, true);
        echo "?</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br><br>
                                ";
        // line 333
        echo "
                                <div class=\"row\">
                                    <div class=\"col-lg-6 text-right\">
                                        <button class=\"btn social-evernote  waves-effect waves-classic\">";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "</button>
                                    </div>
                                    <div class=\"col-lg-6 text-left\">
                                        <button onClick=\"window.history.back();\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                                ";
        // line 342
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

    // line 358
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 359
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/Plugin/input-group-file.js"), "html", null, true);
        echo "\"></script>
    <script>
        if (\$('#produit_is_promo').is(\":checked\"))
        {
            // it is checked
            \$(\"#div_prix_promo\").show()

        }else {
            \$(\"#div_prix_promo\").hide()

        }
    </script>

    <script>
        \$(\"document\").ready(function(){
            \$('#promo_prix').on(\"click\",function(){

                \$('#produit_poucentage_promo').val('');
                \$('#produit_num_produit_promo').val('');
            })

            \$('#promo_pourcentage').on(\"click\",function(){
                \$('#produit_prix_promo').val('');
            })



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
            \$('#produit_is_promo').change(function() {
                if(this.checked) {
                    \$(\"#div_prix_promo\").show()
                }else {
                    \$(\"#div_prix_promo\").hide()

                }
            });
        })

        \$(\"select\").select2();
        \$( \"select[name='produit[categorie]']\" ).change(function () {
            var matiereID = \$(this).val();
            if(matiereID) {
                \$.ajax({
                    url: \"";
        // line 417
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
        // line 457
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
            if (  parseInt( \$(\"#couleur\").val()) == \"undefined\" || isNaN(parseInt( \$(\"#couleur\").val()))) {
                couleur++
                console.log(\"couleurplus\"+couleur);
            }else {
                couleur = parseInt( \$(\"#couleur\").val()) +  1;
                // console.log(\"couleparsint\"+couleur);

            }
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
                // '<select class=\"form-control\" id=\"sizes\" style=\"text-align-last: center\" name=\"sizes'+couleur+'[]\" > ' +
                //   '";
        // line 524
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sizeValue", []));
        foreach ($context['_seq'] as $context["key"] => $context["size"]) {
            echo "'+
                //  ' <option value=\"";
            // line 525
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"  >";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "</option>'+
                //  '  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 526
        echo "'+
                //   '  </select>'+
                '  </div>'+
                '  <div class=\"col-lg-8 text-left\">'+
                '  <span class=\"input-group-btn\">'+
                ' <input type=\"number\" class=\"form-control\" name=\"quantity'+couleur+'[]\" value=\"0\">'+
                '<button type=\"button\" style=\"border-top-left-radius: 0;border-bottom-left-radius: 0;\" onclick=\"adddivsize('+couleur+')\" class=\"btn social-evernote  waves-effect waves-classic\">' +
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
        // line 569
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sizeValue", []));
        foreach ($context['_seq'] as $context["key"] => $context["size"]) {
            echo "'+
                //   ' <option value=\"";
            // line 570
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"  >";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "</option>'+
                //   '  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 571
        echo "'+
                //   '  </select>'+
                '  </div>'+
                '  <div class=\"col-lg-8 text-left\">'+
                '  <span class=\"input-group-btn\">'+
                ' <input type=\"number\" class=\"form-control\" name=\"quantity'+i+'[]\" value=\"0\">'+
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
        return "BackendBundle:gerant/produit:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  828 => 571,  818 => 570,  812 => 569,  767 => 526,  757 => 525,  751 => 524,  681 => 457,  638 => 417,  578 => 360,  573 => 359,  567 => 358,  544 => 342,  538 => 339,  532 => 336,  527 => 333,  517 => 321,  513 => 320,  488 => 298,  473 => 286,  465 => 280,  463 => 279,  451 => 270,  445 => 267,  431 => 256,  425 => 253,  411 => 242,  405 => 239,  382 => 219,  376 => 216,  363 => 206,  357 => 203,  343 => 192,  337 => 189,  324 => 179,  316 => 174,  295 => 156,  291 => 155,  274 => 140,  270 => 138,  264 => 137,  255 => 134,  249 => 130,  244 => 129,  242 => 128,  237 => 127,  235 => 126,  230 => 124,  224 => 121,  210 => 110,  204 => 107,  189 => 95,  183 => 92,  168 => 80,  162 => 77,  146 => 64,  140 => 61,  132 => 55,  123 => 49,  117 => 46,  109 => 40,  106 => 39,  96 => 32,  90 => 29,  82 => 23,  80 => 22,  75 => 20,  71 => 19,  56 => 7,  52 => 5,  46 => 4,  30 => 1,);
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
                                                    <label>{{\"Catégorie\"|trans}} :</label>
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
                                                    <label>{{\"Sous Catégorie\"|trans}} :</label>
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
                                                <label>{{ \"Nom\"|trans }} :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}

                                            </div>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>{{ \"Nom En\"|trans }} :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.nomen, {'attr': {'class': 'form-control'}}) }}
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
                                                {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>{{ \"Description En\"|trans }} :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.descriptionen, {'attr': {'class': 'form-control'}}) }}
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
                                                {% if not form.vars.valid %}
                                                    {% for child in form.children %}
                                                        {# Display the errors of the form item #}
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
                                                        <li class=\"nav-item\">
                                                            <a class=\"nav-link active\" id=\"promo_prix\"  style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#promoparprix\" aria-controls=\"exampleTopHome\" role=\"tab\" aria-selected=\"true\">
                                                                {{ \"Promotion par prix\"|trans }}
                                                            </a>
                                                        </li>
                                                        <li class=\"nav-item\" style=\"\">
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
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>{{\"Quantité\"|trans}} :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.quantite, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>{{ \"Maximum de produits par commande\"|trans }}  :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.maxcommande, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>{{ \"Image\"|trans }}  :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.imagefile, {'attr': {'id': 'input-file-now', 'data-plugin':'dropify','data-default-file': '','style' : 'max-height: 100px;max-width:300px'}}) }}
                                            </div>
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class=\"col-lg-12\" id=\"divcouleur\" >

                                            {%  set i= 0 %}

                                            <div class=\"row row-lg\" >
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>{{ \"Couleurs\"|trans }}  :</label>
                                                </div>
                                            </div>

                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-4\">
                                            </div>
                                            <div class=\"col-lg-6 \" id=\"divbtnadd\" style=\"margin-top: -33px;\">
                                                <button type=\"button\" onclick=\"adddivcouleur()\"
                                                        class=\"btn social-evernote waves-effect waves-classic\">
                                                    <i class=\"icon md-plus\"></i> {{ \"Ajouter une couleur\"|trans }}
                                                </button>
                                                <input type=\"text\" class=\"form-control\" id=\"couleur\" value=\"-1\" hidden>
                                                </span>

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

                                <div class=\"row\">
                                    <div class=\"col-lg-6 text-right\">
                                        <button class=\"btn social-evernote  waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>
                                    </div>
                                    <div class=\"col-lg-6 text-left\">
                                        <button onClick=\"window.history.back();\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">{{ 'back'|trans }}</button>
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
        if (\$('#produit_is_promo').is(\":checked\"))
        {
            // it is checked
            \$(\"#div_prix_promo\").show()

        }else {
            \$(\"#div_prix_promo\").hide()

        }
    </script>

    <script>
        \$(\"document\").ready(function(){
            \$('#promo_prix').on(\"click\",function(){

                \$('#produit_poucentage_promo').val('');
                \$('#produit_num_produit_promo').val('');
            })

            \$('#promo_pourcentage').on(\"click\",function(){
                \$('#produit_prix_promo').val('');
            })



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
            \$('#produit_is_promo').change(function() {
                if(this.checked) {
                    \$(\"#div_prix_promo\").show()
                }else {
                    \$(\"#div_prix_promo\").hide()

                }
            });
        })

        \$(\"select\").select2();
        \$( \"select[name='produit[categorie]']\" ).change(function () {
            var matiereID = \$(this).val();
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
            if (  parseInt( \$(\"#couleur\").val()) == \"undefined\" || isNaN(parseInt( \$(\"#couleur\").val()))) {
                couleur++
                console.log(\"couleurplus\"+couleur);
            }else {
                couleur = parseInt( \$(\"#couleur\").val()) +  1;
                // console.log(\"couleparsint\"+couleur);

            }
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
                // '<select class=\"form-control\" id=\"sizes\" style=\"text-align-last: center\" name=\"sizes'+couleur+'[]\" > ' +
                //   '{% for key,size in produit.sizeValue %}'+
                //  ' <option value=\"{{ key }}\"  >{{ size }}</option>'+
                //  '  {% endfor %}'+
                //   '  </select>'+
                '  </div>'+
                '  <div class=\"col-lg-8 text-left\">'+
                '  <span class=\"input-group-btn\">'+
                ' <input type=\"number\" class=\"form-control\" name=\"quantity'+couleur+'[]\" value=\"0\">'+
                '<button type=\"button\" style=\"border-top-left-radius: 0;border-bottom-left-radius: 0;\" onclick=\"adddivsize('+couleur+')\" class=\"btn social-evernote  waves-effect waves-classic\">' +
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
                ' <input type=\"number\" class=\"form-control\" name=\"quantity'+i+'[]\" value=\"0\">'+
                '   </span>'+
                '  </div>'+
                '  <div class=\"col-lg-3 text-left\">'+
                '   </div>'+
                '   </div>';
            document.getElementById('rowsize'+i).appendChild(div);
        }

    </script>
{% endblock %}
", "BackendBundle:gerant/produit:new.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/gerant/produit/new.html.twig");
    }
}
