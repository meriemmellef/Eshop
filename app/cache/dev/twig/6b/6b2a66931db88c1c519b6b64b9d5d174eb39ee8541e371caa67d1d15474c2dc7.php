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

/* @Backend/gerant/produit/edit.html.twig */
class __TwigTemplate_9ac94232f02b2dc636fa840d92e9fbc537c68ecc9dda11afa7f09be51ef6b5df extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gerant/produit/edit.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/gerant/produit/edit.html.twig", 1);
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

            ";
        // line 43
        if ((isset($context["errorc"]) || array_key_exists("errorc", $context))) {
            // line 44
            echo "                <div class=\"col-lg-12 text-center\">
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["errorc"] ?? $this->getContext($context, "errorc"))), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 53
        echo "
            ";
        // line 54
        if ((isset($context["errort"]) || array_key_exists("errort", $context))) {
            // line 55
            echo "                <div class=\"col-lg-12 text-center\">
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        ";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["errort"] ?? $this->getContext($context, "errort"))), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 64
        echo "
            ";
        // line 65
        if ((isset($context["errorp"]) || array_key_exists("errorp", $context))) {
            // line 66
            echo "                <div class=\"col-lg-12 text-center\">
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        ";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["errorp"] ?? $this->getContext($context, "errorp"))), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 75
        echo "
            ";
        // line 76
        if ((isset($context["errorqu"]) || array_key_exists("errorqu", $context))) {
            // line 77
            echo "                <div class=\"col-lg-12 text-center\">
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        ";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["errorqu"] ?? $this->getContext($context, "errorqu"))), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 86
        echo "
            ";
        // line 87
        if ((isset($context["errorquantmax"]) || array_key_exists("errorquantmax", $context))) {
            // line 88
            echo "                <div class=\"col-lg-12 text-center\">
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        ";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["errorquantmax"] ?? $this->getContext($context, "errorquantmax"))), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 97
        echo "        </div>
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <div class=\"row row-lg\">


                                    ";
        // line 108
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "col-lg-12 "]]);
        echo "
                                    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "headers", []), "get", [0 => "referer"], "method"), "html", null, true);
        echo "\"/>

                                    ";
        // line 111
        if ((isset($context["catproduit"]) || array_key_exists("catproduit", $context))) {
            // line 112
            echo "                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie"), "html", null, true);
            echo "<span style=\"color: #ED0000\">*</span> :</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    ";
            // line 121
            if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                // line 122
                echo "                                                        ";
                if ($this->getAttribute(($context["catproduit"] ?? $this->getContext($context, "catproduit")), "nom", [])) {
                    // line 123
                    echo "                                                            <div style=\"padding: 20px;border: 1px solid #d7d7d7\">
                                                                <label>";
                    // line 124
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["catproduit"] ?? $this->getContext($context, "catproduit")), "nom", []), "html", null, true);
                    echo "</label>

                                                            </div>
                                                        ";
                }
                // line 128
                echo "                                                    ";
            } else {
                // line 129
                echo "                                                        ";
                if ($this->getAttribute(($context["catproduit"] ?? $this->getContext($context, "catproduit")), "nomEn", [])) {
                    // line 130
                    echo "                                                            <div style=\"padding: 20px;border: 1px solid #d7d7d7\">
                                                                <label>";
                    // line 131
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["catproduit"] ?? $this->getContext($context, "catproduit")), "nomEn", []), "html", null, true);
                    echo "</label>

                                                            </div>
                                                        ";
                }
                // line 135
                echo "                                                    ";
            }
            echo "                                                </div>
                                            </div>
                                        </div>

                                        <br><br>
                                    ";
        }
        // line 141
        echo "                                    ";
        if ((isset($context["subproduit"]) || array_key_exists("subproduit", $context))) {
            // line 142
            echo "                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sous Catégorie"), "html", null, true);
            echo " <span style=\"color: #ED0000\">*</span> :</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    ";
            // line 151
            if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
                // line 152
                echo "                                                        ";
                if ($this->getAttribute(($context["subproduit"] ?? $this->getContext($context, "subproduit")), "nom", [])) {
                    // line 153
                    echo "                                                            <div style=\"padding: 20px;border: 1px solid #d7d7d7\">
                                                                <label>";
                    // line 154
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["subproduit"] ?? $this->getContext($context, "subproduit")), "nom", []), "html", null, true);
                    echo "</label>

                                                            </div>
                                                        ";
                }
                // line 158
                echo "                                                    ";
            } else {
                // line 159
                echo "                                                        ";
                if ($this->getAttribute(($context["subproduit"] ?? $this->getContext($context, "subproduit")), "nomEn", [])) {
                    // line 160
                    echo "                                                            <div style=\"padding: 20px;border: 1px solid #d7d7d7\">
                                                                <label>";
                    // line 161
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["subproduit"] ?? $this->getContext($context, "subproduit")), "nomEn", []), "html", null, true);
                    echo "</label>

                                                            </div>
                                                        ";
                }
                // line 165
                echo "                                                    ";
            }
            // line 166
            echo "                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                    ";
        }
        // line 171
        echo "                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 180
        if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
            // line 181
            echo "                                                    ";
            if ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nom", [])) {
                // line 182
                echo "                                                        <div style=\"padding: 20px;border: 1px solid #d7d7d7\">
                                                            <label>";
                // line 183
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nom", []), "html", null, true);
                echo "</label>

                                                        </div>
                                                    ";
            }
            // line 187
            echo "                                                ";
        } else {
            // line 188
            echo "                                                    ";
            if ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nomen", [])) {
                // line 189
                echo "                                                        <div style=\"padding: 20px;border: 1px solid #d7d7d7\">
                                                            <label>";
                // line 190
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nomen", []), "html", null, true);
                echo "</label>

                                                        </div>
                                                    ";
            }
            // line 194
            echo "                                                ";
        }
        // line 195
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class=\"col-lg-12\" >
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo " :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\" >

                                                ";
        // line 212
        if ((($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "fr") || ($this->getAttribute(($context["pays"] ?? $this->getContext($context, "pays")), "frontLanguage", []) == "FR"))) {
            // line 213
            echo "                                                    ";
            if ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "description", [])) {
                // line 214
                echo "                                                        <div style=\"padding: 20px;border: 1px solid #d7d7d7\">
                                                            <label>";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "description", []), "html", null, true);
                echo "</label>

                                                        </div>
                                                    ";
            }
            // line 219
            echo "                                                ";
        } else {
            // line 220
            echo "                                                    ";
            if ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "descriptionen", [])) {
                // line 221
                echo "                                                        <div style=\"padding: 20px;border: 1px solid #d7d7d7\">
                                                            <label>";
                // line 222
                echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "descriptionen", []), "html", null, true);
                echo "</label>

                                                        </div>
                                                    ";
            }
            // line 226
            echo "                                                ";
        }
        // line 227
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
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prix", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <br>
                                                ";
        // line 243
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "valid", [])) {
            // line 244
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 245
                echo "                                                        ";
                // line 246
                echo "                                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "vars", []), "errors", []));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 247
                    echo "                                                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                                    <span aria-hidden=\"true\">×</span>
                                                                </button>
                                                                ";
                    // line 251
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("le prix n'est pas valide"), "html", null, true);
                    echo "
                                                            </div>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 254
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "
                                                ";
        }
        // line 257
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
        // line 274
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "is_promo", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <label for=\"inputChecked\">";
        // line 275
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
                                                        <li class=\"nav-item\" id=\"titleeeone\">
                                                            <input type=\"radio\" id=\"radPromotionP\" name=\"drone\" value=\"12\" >

                                                            <a class=\"nav-link active\" id=\"promo_prix\"  style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#promoparprix\" aria-controls=\"exampleTopHome\" role=\"tab\" aria-selected=\"true\">
                                                                ";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Promotion par prix"), "html", null, true);
        echo "
                                                            </a>
                                                        </li>
                                                        <li class=\"nav-item\" style=\"\" id=\"titleee\">
                                                            <input type=\"radio\" id=\"radPromotionPor\" name=\"drone\" value=\"13\"  >

                                                            <a class=\"nav-link\" id=\"promo_pourcentage\" style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#promoparpourcentage\" aria-controls=\"exampleTopComponents\" role=\"tab\" aria-selected=\"false\">
                                                                ";
        // line 302
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
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prix en promotion"), "html", null, true);
        echo " :</label>
                                                                    </div>
                                                                    <div class=\"col-lg-9 text-left\">
                                                                        ";
        // line 315
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
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pourcentage de promotion"), "html", null, true);
        echo ":</label>
                                                                        </div>
                                                                        <div class=\"col-lg-9 text-left\">
                                                                            ";
        // line 329
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
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Numéro de produit à reduire"), "html", null, true);
        echo ":</label>
                                                                        </div>
                                                                        <div class=\"col-lg-9 text-left\">
                                                                            ";
        // line 342
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
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantité"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 365
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
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Maximum de produits par commande"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 379
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
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 393
        if ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", [])) {
            // line 394
            echo "                                                    <div style=\"padding-top: 20px;\">
                                                        <img class=\"\" style=\"height: 50px;width: auto;  margin-left: auto;  margin-right: auto;  display: block;\"
                                                             src=\"";
            // line 396
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/produits/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", []), "html", null, true);
            echo "\">

                                                    </div>
                                                ";
        }
        // line 400
        echo "                                            </div>
                                        </div>
                                    </div>


";
        // line 423
        echo "


                                    <br><br>

                                    <div class=\"col-lg-12\" id=\"divcouleur\" >

                                        <!-- list couleurs > 0 -->
                                        ";
        // line 431
        if ((twig_length_filter($this->env, ($context["list_couleur"] ?? $this->getContext($context, "list_couleur"))) > 0)) {
            // line 432
            echo "                                            ";
            $context["i"] = 0;
            // line 433
            echo "
                                            <!--elements  dans list couleurs  -->
                                            ";
            // line 435
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list_couleur"] ?? $this->getContext($context, "list_couleur")));
            foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                // line 436
                echo "                                                <input type=\"text\" class=\"form-control\" id=\"couleur\" value=\"";
                echo twig_escape_filter($this->env, (twig_length_filter($this->env, ($context["list_couleur"] ?? $this->getContext($context, "list_couleur"))) - 1), "html", null, true);
                echo "\" hidden>
                                                ";
                // line 437
                if ((($context["i"] ?? $this->getContext($context, "i")) == 0)) {
                    // line 438
                    echo "                                                    <div class=\"row row-lg\" >
                                                        <div class=\"col-lg-2 text-left\">

                                                        </div>
                                                        <div class=\"col-lg-2 text-left\">
                                                            <label>";
                    // line 443
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Couleurs"), "html", null, true);
                    echo "  :</label>
                                                        </div>
                                                        <div class=\"col-lg-6 text-right\" style=\"border: 1px solid #dcdcdc;padding: 15px 15px 15px 15px;\">
                                                            <!--couleur -->
                                                            <div class=\"row row-lg\" id=\"rowcouleur\">
                                                                <div class=\"col-lg-4 text-left\">
                                                                    <input type=\"color\" class=\"form-control\" name=\"couleurs[]\" value=\"";
                    // line 449
                    echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "codeCouleur", []), "html", null, true);
                    echo "\" readonly  style=\"pointer-events: none;\">
                                                                    <input type=\"text\" class=\"form-control\" name=\"couleur0\" value=\"0\" hidden>
                                                                </div>
                                                                <div class=\"col-lg-8 text-left\">
                                                                    <span class=\"input-group-btn\" hidden>
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
                    // line 464
                    if (($this->getAttribute($context["color"], "image", []) && ($this->getAttribute($context["color"], "image", []) != ""))) {
                        // line 465
                        echo "                                                                        <img name='img' id='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "image", []), "html", null, true);
                        echo "' style=\"width: 81%;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                                                             src=\"/uploads/produits/";
                        // line 466
                        echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "image", []), "html", null, true);
                        echo "\"  alt=\"img\">
                                                                    ";
                    }
                    // line 468
                    echo "                                                                </div>

                                                            </div>

                                                            <!--size -->
                                                            <div class=\"row row-lg\" id=\"rowsize0\" style=\"padding-top: 10px\">
                                                                ";
                    // line 474
                    if ((twig_length_filter($this->env, $this->getAttribute($context["color"], "sizes", [])) > 0)) {
                        // line 475
                        echo "                                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["color"], "sizes", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                            // line 476
                            echo "                                                                        <div class=\"col-lg-12 \" style=\"padding-top: 10px\">
                                                                            <div class=\"row row-lg\">
                                                                                <div class=\"col-lg-4 text-right\">
                                                                                    <span class=\"input-group-btn\">
                                                                                        <input type=\"text\" class=\"form-control text-center\"  value=\"";
                            // line 480
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                            echo "\" readonly>
                                                                                    </span>
                                                                                </div>
                                                                                <div class=\"col-lg-8 text-left\">
                                                                                    <div class=\"input-group input-group-btn\">
                                                                                        <input type=\"number\" min=\"0\" class=\"form-control\"  value=\"";
                            // line 485
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "quantite", []), "html", null, true);
                            echo "\" id=\"quantityofsize";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo "\" name=\"quantityofsize";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo "\">
                                                                                        <button  type=\"button\" style=\"margin-right: 5px;border-top-left-radius: 0;border-bottom-left-radius: 0;\" onclick=\"updatequantityofsize(";
                            // line 486
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo ")\"
                                                                                                 class=\"btn btn-default waves-effect waves-classic\">
                                                                                            <i class=\"icon md-edit\" ></i>
                                                                                        </button>
                                                                                        <a  style=\"background-color: #ed0000;border-color: #ed0000;\" href=\"";
                            // line 490
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_size_gerant", ["id" => $this->getAttribute($context["size"], "id", []), "idproduit" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
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
                        // line 502
                        echo "                                                                ";
                    }
                    // line 503
                    echo "                                                                <div class=\"col-lg-12 \"  style=\"padding-top: 10px\">
                                                                    <div class=\"row row-lg\">

                                                                        <div class=\"col-lg-4 text-right\">
                                                                            <input type=\"text\" class=\"form-control\" name=\"sizes0[]\" placeholder=\"size\">

                                                                            <!-- <select class=\"form-control\" style=\"text-align-last: center\" name=\"sizes0[]\">
                                                                                ";
                    // line 510
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sizeValue", []));
                    foreach ($context['_seq'] as $context["key"] => $context["size"]) {
                        // line 511
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
                    // line 513
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
                    // line 527
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_couleur_gerant", ["idcouleur" => $this->getAttribute($context["color"], "id", []), "idproduit" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
                    echo "\" class=\"btn btn-primary waves-effect waves-classic\">
                                                                <i style=\"\" class=\"icon md-delete\" ></i> ";
                    // line 528
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
                    // line 539
                    echo "                                                    <div class=\"row row-lg\"  style=\"padding-top: 10px\">
                                                        <div class=\"col-lg-2 text-left\">

                                                        </div>
                                                        <div class=\"col-lg-2 text-left\">
                                                        </div>
                                                        <div class=\"col-lg-6 text-right\" style=\"border: 1px solid #dcdcdc;padding: 15px 15px 15px 15px;\">
                                                            <div class=\"row row-lg\" id=\"rowcouleur\" style=\"padding-top: 10px\">

                                                                <div class=\"col-lg-4 text-left\">
                                                                    <input type=\"color\" class=\"form-control\" name=\"couleurs[]\" value=\"";
                    // line 549
                    echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "codeCouleur", []), "html", null, true);
                    echo "\" readonly style=\"pointer-events: none;\">

                                                                </div>
                                                                <div class=\"col-lg-8 text-left\">
                                                                    <span class=\"input-group-btn\" hidden>
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
                    // line 564
                    if (($this->getAttribute($context["color"], "image", []) && ($this->getAttribute($context["color"], "image", []) != ""))) {
                        // line 565
                        echo "
                                                                        <img name='img' id='";
                        // line 566
                        echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "image", []), "html", null, true);
                        echo "' style=\"    width:  81%;background-size: cover;border-width: 2px; border-color: #dcdbdb;border-style: solid;\"
                                                                             src=\"/uploads/produits/";
                        // line 567
                        echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "image", []), "html", null, true);
                        echo "\"  alt=\"img\">

                                                                    ";
                    }
                    // line 570
                    echo "                                                                </div>
                                                            </div>
                                                            <div class=\"row row-lg\" id=\"rowsize";
                    // line 572
                    echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                    echo "\" style=\"padding-top: 10px\">
                                                                ";
                    // line 573
                    if ((twig_length_filter($this->env, $this->getAttribute($context["color"], "sizes", [])) > 0)) {
                        // line 574
                        echo "                                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["color"], "sizes", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                            // line 575
                            echo "                                                                        <div class=\"col-lg-12 \" style=\"padding-top: 10px\">
                                                                            <div class=\"row row-lg\">
                                                                                <div class=\"col-lg-4 text-right\">
                                                                                    <span class=\"input-group-btn\">
                                                                                        <input type=\"text\" class=\"form-control text-center\"  value=\"";
                            // line 579
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "libelle", []), "html", null, true);
                            echo "\" readonly>
                                                                                    </span>
                                                                                </div>
                                                                                <div class=\"col-lg-8 text-left\">
                                                                                    <div class=\"input-group input-group-btn\">
                                                                                        <input type=\"number\" min=\"0\" class=\"form-control\"  value=\"";
                            // line 584
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "quantite", []), "html", null, true);
                            echo "\" id=\"quantityofsize";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo "\" name=\"quantityofsize";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo "\">
                                                                                        <button type=\"button\" style=\"margin-right: 5px;border-top-left-radius: 0;border-bottom-left-radius: 0;\" onclick=\"updatequantityofsize(";
                            // line 585
                            echo twig_escape_filter($this->env, $this->getAttribute($context["size"], "id", []), "html", null, true);
                            echo ")\"
                                                                                                class=\"btn btn-default waves-effect waves-classic\">
                                                                                            <i class=\"icon md-edit\" ></i>
                                                                                        </button>
                                                                                        <a  style=\"background-color: #ed0000;border-color: #ed0000;\" href=\"";
                            // line 589
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_size_gerant", ["id" => $this->getAttribute($context["size"], "id", []), "idproduit" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
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
                        // line 597
                        echo "                                                                ";
                    }
                    // line 598
                    echo "                                                                <div class=\"col-lg-12\"  style=\"padding-top: 10px\">
                                                                    <div class=\"row row-lg\">
                                                                        <div class=\"col-lg-4 text-right\">
                                                                            <input type=\"text\" class=\"form-control\" name=\"sizes";
                    // line 601
                    echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                    echo "[]\" placeholder=\"size\">

                                                                            <!--   <select class=\"form-control\" style=\"text-align-last: center\" name=\"sizes";
                    // line 603
                    echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                    echo "[]\">
                                                                                   ";
                    // line 604
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sizeValue", []));
                    foreach ($context['_seq'] as $context["key"] => $context["size"]) {
                        // line 605
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
                    // line 607
                    echo "                                                                               </select> -->
                                                                        </div>
                                                                        <div class=\"col-lg-8 text-left\">
                                                                            <span class=\"input-group-btn\">
                                                                                <input type=\"number\" min=\"0\" class=\"form-control\" name=\"quantity";
                    // line 611
                    echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                    echo "[]\" value=\"0\">
                                                                                <button type=\"button\" onclick=\"adddivsize(";
                    // line 612
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
                                                            <a style=\"background-color:#ed0000 ;border-color:#ed0000;margin-top: 15px;\" href=\"";
                    // line 622
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_couleur_gerant", ["idcouleur" => $this->getAttribute($context["color"], "id", []), "idproduit" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "page" => ($context["page"] ?? $this->getContext($context, "page"))]), "html", null, true);
                    echo "\" class=\"btn btn-primary waves-effect waves-classic\">
                                                                <i class=\"icon md-delete\" ></i>";
                    // line 623
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Supprimer la couleur"), "html", null, true);
                    echo "
                                                            </a>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 628
                echo "                                                ";
                $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                // line 629
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 630
            echo "                                            <!-- list couleurs = 0 -->

                                        ";
        } else {
            // line 633
            echo "                                            ";
            $context["i"] = 0;
            // line 634
            echo "
                                            <div class=\"row row-lg\" >
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>";
            // line 640
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Couleurs"), "html", null, true);
            echo "  :</label>
                                                </div>
                                            </div>
                                        ";
        }
        // line 644
        echo "                                    </div>
                                    <div class=\"col-lg-12\">
                                    <div class=\"row row-lg\">
                                        <div class=\"col-lg-4\">
                                        </div>
                                        <div class=\"col-lg-6 \" id=\"divbtnadd\" style=\"   ";
        // line 649
        if ((twig_length_filter($this->env, ($context["list_couleur"] ?? $this->getContext($context, "list_couleur"))) > 0)) {
            echo "margin-top: 15px;padding-left: 0px ";
        } else {
            echo " margin-top: -33px;  ";
        }
        echo " \">
                                            <button type=\"button\" onclick=\"adddivcouleur()\"
                                                    class=\"btn social-evernote waves-effect waves-classic\">
                                                <i class=\"icon md-plus\"></i> ";
        // line 652
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
        // line 671
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "is_active", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <label for=\"inputChecked\">";
        // line 672
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Est Active"), "html", null, true);
        echo "?</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br><br>
                                ";
        // line 684
        echo "                             <div class=\"col-lg-12 text-center\">

                                <div class=\"row\">
                                    <div class=\"col-lg-6 text-right\">
                                        <button class=\"btn social-evernote  waves-effect waves-classic\">";
        // line 688
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "</button>
                                    </div>
                                    <div class=\"col-lg-6 text-left\">
                                        <a href=\"";
        // line 691
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_gerant_index");
        echo "\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                             </div>

                                ";
        // line 696
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

    // line 712
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 713
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 714
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

            \$('#produit_is_promo').change(function() {
                if(this.checked) {
                    \$(\"#div_prix_promo\").show()
                }else {
                    \$(\"#div_prix_promo\").hide()

                }
            });
            \$('#radPromotionP').on(\"click\",function(){
                //   console.log(\"promo_prix\")

               // \$('#produit_poucentage_promo').val('');
               // \$('#produit_num_produit_promo').val('');

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

            if( \$('#produit_poucentage_promo').val()){



                \$('#titleee').find('a').trigger('click');


                //  \$(\"#radPromotionPor\").prop(\"checked\", true);

            }else {
                //   \$(\"#radPromotionP\").prop(\"checked\", true);
                \$('#titleeeone').find('a').trigger('click');


            }

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
            /////////////
            \$('#promo_prix').on(\"click\",function(){

              //was  \$('#produit_poucentage_promo').val('');
             //was   \$('#produit_num_produit_promo').val('');

                \$(\"#radPromotionP\").prop(\"checked\", true);
                \$(\"#radPromotionPor\").prop(\"checked\", false);

            })

            \$('#promo_pourcentage').on(\"click\",function(){
             //was   \$('#produit_prix_promo').val('');
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

            if( \$('#produit_poucentage_promo').val()){

                \$('#titleee').find('a').trigger('click');

            }else {
                \$('#titleeeone').find('a').trigger('click');


            }
        })

        \$(\"select\").select2();


        \$(\"select[name='produit_categorie']\").prop('disabled', true);
        \$(\"select[name='produit_sous_categorie']\").prop('disabled', true);

    </script>
    <script>
        function updatequantityofsize(id){
            var quantity = parseInt(  \$(\"#quantityofsize\"+id).val());
           // console.log(quantity)
            if(quantity> 0){
                \$.ajax({
                    url: \"";
        // line 846
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_size_gerant");
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
            //console.log(couleur)
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
                '<div class=\"input-group input-group-file\" data-plugin=\"inputGroupFile\" hidden> ' +
                '<input type=\"text\" class=\"form-control\" readonly=\"\"> ' +
                '<span class=\"input-group-btn\" hidden> ' +
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
        // line 913
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sizeValue", []));
        foreach ($context['_seq'] as $context["key"] => $context["size"]) {
            echo "'+
                //  ' <option value=\"";
            // line 914
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"  >";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "</option>'+
                //  '  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 915
        echo "'+
                //   '  </select>'+
                '  </div>'+
                '  <div class=\"col-lg-8 text-left\">'+
                '  <span class=\"input-group-btn\">'+
                ' <input type=\"number\" class=\"form-control\" min=\"0\" name=\"quantity'+couleur+'[]\" value=\"0\">'+
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
        // line 958
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "sizeValue", []));
        foreach ($context['_seq'] as $context["key"] => $context["size"]) {
            echo "'+
                //   ' <option value=\"";
            // line 959
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"  >";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "</option>'+
                //   '  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 960
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
        return "@Backend/gerant/produit/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1487 => 960,  1477 => 959,  1471 => 958,  1426 => 915,  1416 => 914,  1410 => 913,  1340 => 846,  1205 => 714,  1200 => 713,  1194 => 712,  1171 => 696,  1161 => 691,  1155 => 688,  1149 => 684,  1139 => 672,  1135 => 671,  1113 => 652,  1103 => 649,  1096 => 644,  1089 => 640,  1081 => 634,  1078 => 633,  1073 => 630,  1067 => 629,  1064 => 628,  1056 => 623,  1052 => 622,  1039 => 612,  1035 => 611,  1029 => 607,  1018 => 605,  1014 => 604,  1010 => 603,  1005 => 601,  1000 => 598,  997 => 597,  983 => 589,  976 => 585,  968 => 584,  960 => 579,  954 => 575,  949 => 574,  947 => 573,  943 => 572,  939 => 570,  933 => 567,  929 => 566,  926 => 565,  924 => 564,  906 => 549,  894 => 539,  880 => 528,  876 => 527,  860 => 513,  849 => 511,  845 => 510,  836 => 503,  833 => 502,  815 => 490,  808 => 486,  800 => 485,  792 => 480,  786 => 476,  781 => 475,  779 => 474,  771 => 468,  766 => 466,  761 => 465,  759 => 464,  741 => 449,  732 => 443,  725 => 438,  723 => 437,  718 => 436,  714 => 435,  710 => 433,  707 => 432,  705 => 431,  695 => 423,  688 => 400,  680 => 396,  676 => 394,  674 => 393,  668 => 390,  654 => 379,  648 => 376,  634 => 365,  628 => 362,  605 => 342,  599 => 339,  586 => 329,  580 => 326,  566 => 315,  560 => 312,  547 => 302,  537 => 295,  514 => 275,  510 => 274,  491 => 257,  487 => 255,  481 => 254,  472 => 251,  466 => 247,  461 => 246,  459 => 245,  454 => 244,  452 => 243,  447 => 241,  441 => 238,  428 => 227,  425 => 226,  418 => 222,  415 => 221,  412 => 220,  409 => 219,  402 => 215,  399 => 214,  396 => 213,  394 => 212,  387 => 208,  372 => 195,  369 => 194,  362 => 190,  359 => 189,  356 => 188,  353 => 187,  346 => 183,  343 => 182,  340 => 181,  338 => 180,  332 => 177,  324 => 171,  317 => 166,  314 => 165,  307 => 161,  304 => 160,  301 => 159,  298 => 158,  291 => 154,  288 => 153,  285 => 152,  283 => 151,  277 => 148,  269 => 142,  266 => 141,  256 => 135,  249 => 131,  246 => 130,  243 => 129,  240 => 128,  233 => 124,  230 => 123,  227 => 122,  225 => 121,  219 => 118,  211 => 112,  209 => 111,  204 => 109,  200 => 108,  187 => 97,  180 => 93,  173 => 88,  171 => 87,  168 => 86,  161 => 82,  154 => 77,  152 => 76,  149 => 75,  142 => 71,  135 => 66,  133 => 65,  130 => 64,  123 => 60,  116 => 55,  114 => 54,  111 => 53,  104 => 49,  97 => 44,  95 => 43,  90 => 41,  52 => 5,  46 => 4,  30 => 1,);
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

            {% if errorc is defined %}
                <div class=\"col-lg-12 text-center\">
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        {{ errorc|trans }}
                    </div>
                </div>
            {% endif %}

            {% if errort is defined %}
                <div class=\"col-lg-12 text-center\">
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        {{ errort|trans }}
                    </div>
                </div>
            {% endif %}

            {% if errorp is defined %}
                <div class=\"col-lg-12 text-center\">
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        {{ errorp|trans }}
                    </div>
                </div>
            {% endif %}

            {% if errorqu is defined %}
                <div class=\"col-lg-12 text-center\">
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        {{ errorqu|trans }}
                    </div>
                </div>
            {% endif %}

            {% if errorquantmax is defined %}
                <div class=\"col-lg-12 text-center\">
                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                        {{ errorquantmax|trans }}
                    </div>
                </div>
            {% endif %}
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

                                    {% if  catproduit is defined%}
                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>{{\"Catégorie\"|trans}}<span style=\"color: #ED0000\">*</span> :</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                        {% if catproduit.nom %}
                                                            <div style=\"padding: 20px;border: 1px solid #d7d7d7\">
                                                                <label>{{ catproduit.nom }}</label>

                                                            </div>
                                                        {% endif %}
                                                    {% else %}
                                                        {% if catproduit.nomEn %}
                                                            <div style=\"padding: 20px;border: 1px solid #d7d7d7\">
                                                                <label>{{  catproduit.nomEn }}</label>

                                                            </div>
                                                        {% endif %}
                                                    {% endif %}                                                </div>
                                            </div>
                                        </div>

                                        <br><br>
                                    {% endif %}
                                    {% if  subproduit is defined%}
                                        <div class=\"col-lg-12\">
                                            <div class=\"row row-lg\">
                                                <div class=\"col-lg-2 text-left\">

                                                </div>
                                                <div class=\"col-lg-2 text-left\">
                                                    <label>{{\"Sous Catégorie\"|trans}} <span style=\"color: #ED0000\">*</span> :</label>
                                                </div>
                                                <div class=\"col-lg-6 text-left\">
                                                    {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                        {% if subproduit.nom %}
                                                            <div style=\"padding: 20px;border: 1px solid #d7d7d7\">
                                                                <label>{{ subproduit.nom }}</label>

                                                            </div>
                                                        {% endif %}
                                                    {% else %}
                                                        {% if subproduit.nomEn %}
                                                            <div style=\"padding: 20px;border: 1px solid #d7d7d7\">
                                                                <label>{{  subproduit.nomEn }}</label>

                                                            </div>
                                                        {% endif %}
                                                    {% endif %}
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
                                                <label>{{ \"Nom\"|trans }}<span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {% if pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                    {% if produit.nom %}
                                                        <div style=\"padding: 20px;border: 1px solid #d7d7d7\">
                                                            <label>{{ produit.nom }}</label>

                                                        </div>
                                                    {% endif %}
                                                {% else %}
                                                    {% if produit.nomen %}
                                                        <div style=\"padding: 20px;border: 1px solid #d7d7d7\">
                                                            <label>{{ produit.nomen }}</label>

                                                        </div>
                                                    {% endif %}
                                                {% endif %}

                                            </div>
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class=\"col-lg-12\" >
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">

                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>{{ \"Description\"|trans }} :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\" >

                                                {% if  pays.frontLanguage  == 'fr' or pays.frontLanguage  == 'FR' %}
                                                    {% if produit.description %}
                                                        <div style=\"padding: 20px;border: 1px solid #d7d7d7\">
                                                            <label>{{ produit.description }}</label>

                                                        </div>
                                                    {% endif %}
                                                {% else %}
                                                    {% if produit.descriptionen %}
                                                        <div style=\"padding: 20px;border: 1px solid #d7d7d7\">
                                                            <label>{{ produit.descriptionen }}</label>

                                                        </div>
                                                    {% endif %}
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
                                                <label>{{ \"Prix\"|trans }} <span style=\"color: #ED0000\">*</span> :</label>
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
                                                        <li class=\"nav-item\" id=\"titleeeone\">
                                                            <input type=\"radio\" id=\"radPromotionP\" name=\"drone\" value=\"12\" >

                                                            <a class=\"nav-link active\" id=\"promo_prix\"  style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#promoparprix\" aria-controls=\"exampleTopHome\" role=\"tab\" aria-selected=\"true\">
                                                                {{\"Promotion par prix\"|trans }}
                                                            </a>
                                                        </li>
                                                        <li class=\"nav-item\" style=\"\" id=\"titleee\">
                                                            <input type=\"radio\" id=\"radPromotionPor\" name=\"drone\" value=\"13\"  >

                                                            <a class=\"nav-link\" id=\"promo_pourcentage\" style=\"padding: 7px 10px 7px 0px;\" data-toggle=\"tab\" href=\"#promoparpourcentage\" aria-controls=\"exampleTopComponents\" role=\"tab\" aria-selected=\"false\">
                                                                {{\"Promotion en pourcentage\"|trans }}
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
                                                <label>{{\"Quantité\"|trans}} <span style=\"color: #ED0000\">*</span>:</label>
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
                                                <label>{{ \"Maximum de produits par commande\"|trans }} <span style=\"color: #ED0000\">*</span> :</label>
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
                                                <label>{{ \"Image\"|trans }} <span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {% if produit.image %}
                                                    <div style=\"padding-top: 20px;\">
                                                        <img class=\"\" style=\"height: 50px;width: auto;  margin-left: auto;  margin-right: auto;  display: block;\"
                                                             src=\"{{ asset('uploads/produits/') }}{{ produit.image }}\">

                                                    </div>
                                                {% endif %}
                                            </div>
                                        </div>
                                    </div>


{#

                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-2 text-left\">
                                            </div>
                                            <div class=\"col-lg-2 text-left\">
                                                <label>{{\"Fichetechnique\"|trans}}:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {% if produit.file %}<a target=\"_blank\" href=\"{{ legal_notice_directory }}/{{ produit.file }}\">{{ produit.file }}</a>{% endif %}

                                            </div>
                                        </div>
                                    </div>

#}



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
                                                                    <span class=\"input-group-btn\" hidden>
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
                                                                                        <a  style=\"background-color: #ed0000;border-color: #ed0000;\" href=\"{{ path('delete_size_gerant',{'id':size.id,'idproduit':produit.id , 'page': page}) }}\" class=\"btn btn-primary waves-effect waves-classic\">
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
                                                            <a style=\"background-color:#ed0000;border-color:#ed0000;margin-top:15px\" href=\"{{ path('delete_couleur_gerant',{'idcouleur':color.id,'idproduit':produit.id,'page': page}) }}\" class=\"btn btn-primary waves-effect waves-classic\">
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
                                                                    <span class=\"input-group-btn\" hidden>
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
                                                                                        <a  style=\"background-color: #ed0000;border-color: #ed0000;\" href=\"{{ path('delete_size_gerant',{'id':size.id,'idproduit':produit.id,'page':page}) }}\" class=\"btn btn-primary waves-effect waves-classic\">
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
                                                            <a style=\"background-color:#ed0000 ;border-color:#ed0000;margin-top: 15px;\" href=\"{{ path('delete_couleur_gerant',{'idcouleur':color.id,'idproduit':produit.id,'page':page}) }}\" class=\"btn btn-primary waves-effect waves-classic\">
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

                                <div class=\"row\">
                                    <div class=\"col-lg-6 text-right\">
                                        <button class=\"btn social-evernote  waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>
                                    </div>
                                    <div class=\"col-lg-6 text-left\">
                                        <a href=\"{{ path('produit_gerant_index') }}\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">{{ 'back'|trans }}</a>
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

            \$('#produit_is_promo').change(function() {
                if(this.checked) {
                    \$(\"#div_prix_promo\").show()
                }else {
                    \$(\"#div_prix_promo\").hide()

                }
            });
            \$('#radPromotionP').on(\"click\",function(){
                //   console.log(\"promo_prix\")

               // \$('#produit_poucentage_promo').val('');
               // \$('#produit_num_produit_promo').val('');

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

            if( \$('#produit_poucentage_promo').val()){



                \$('#titleee').find('a').trigger('click');


                //  \$(\"#radPromotionPor\").prop(\"checked\", true);

            }else {
                //   \$(\"#radPromotionP\").prop(\"checked\", true);
                \$('#titleeeone').find('a').trigger('click');


            }

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
            /////////////
            \$('#promo_prix').on(\"click\",function(){

              //was  \$('#produit_poucentage_promo').val('');
             //was   \$('#produit_num_produit_promo').val('');

                \$(\"#radPromotionP\").prop(\"checked\", true);
                \$(\"#radPromotionPor\").prop(\"checked\", false);

            })

            \$('#promo_pourcentage').on(\"click\",function(){
             //was   \$('#produit_prix_promo').val('');
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

            if( \$('#produit_poucentage_promo').val()){

                \$('#titleee').find('a').trigger('click');

            }else {
                \$('#titleeeone').find('a').trigger('click');


            }
        })

        \$(\"select\").select2();


        \$(\"select[name='produit_categorie']\").prop('disabled', true);
        \$(\"select[name='produit_sous_categorie']\").prop('disabled', true);

    </script>
    <script>
        function updatequantityofsize(id){
            var quantity = parseInt(  \$(\"#quantityofsize\"+id).val());
           // console.log(quantity)
            if(quantity> 0){
                \$.ajax({
                    url: \"{{ path('edit_size_gerant') }}\",
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
            //console.log(couleur)
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
                '<div class=\"input-group input-group-file\" data-plugin=\"inputGroupFile\" hidden> ' +
                '<input type=\"text\" class=\"form-control\" readonly=\"\"> ' +
                '<span class=\"input-group-btn\" hidden> ' +
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
                ' <input type=\"number\" class=\"form-control\" min=\"0\" name=\"quantity'+couleur+'[]\" value=\"0\">'+
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
", "@Backend/gerant/produit/edit.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gerant\\produit\\edit.html.twig");
    }
}
