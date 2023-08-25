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

/* BackendBundle:admin/pays:_form.html.twig */
class __TwigTemplate_744eb352d4b7ae83d855622770be67a2f6402387d9d1c7c76231fb3a2273af4d extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:admin/pays:_form.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "col-lg-12 "]]);
        echo "
";
        // line 3
        $context["usernameplaceholder"] = "";
        // line 4
        echo "<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }


</style>
<!-- Example Tabs Line Top -->
<div class=\"panel\" style=\"margin-top: 10px;padding: 15px\">

    ";
        // line 30
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "hasRole", [0 => "ROLE_SUPER_ADMIN"], "method")) {
            // line 31
            echo "
    <div class=\"col-lg-12 text-center\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pays", [], "messages"), "html", null, true);
            echo " <span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", []), 'widget', ["attr" => ["class" => "btn btn-default dropdown-toggle waves-effect waves-classic text-uppercase"]]);
            echo "

                <h6 style=\"color: #ED0000\">";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", []), 'errors');
            echo "</h6>

            </div>
        </div>
    </div>

    ";
        }
        // line 47
        echo "
    ";
        // line 61
        echo "

    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Code phone", [], "messages"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codePhone", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time_zone", [], "messages"), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "timezone", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "timezone", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
</div>
<div class=\"panel\" style=\"margin-top: 10px;padding: 15px\" >
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Devise", [], "messages"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nb digits décimal", [], "messages"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span>:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise_nb_digits_decimal", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise_nb_digits_decimal", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Séparateur décimal", [], "messages"), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise_decimal_separator", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise_decimal_separator", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Séparateur milliers", [], "messages"), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise_thousands_separator", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise_thousands_separator", []), 'errors');
        echo "
            </div>
        </div>
    </div>

    <br><br>
</div>
<div class=\"panel\" style=\"margin-top: 10px;padding: 15px\">
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language par défaut", [], "messages"), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "front_language", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "front_language", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">

    <div class=\"row  row-lg\"  style=\"padding:15px \">

        <div class=\"col-lg-3 text-right\">
            <label>";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show_carosel"), "html", null, true);
        echo ":</label>
        </div>
             <div class=\" col-lg-6\">
            <label class=\"radio-inline\" style=\"font-family: Roboto-regular, sans-serif;font-style: normal;font-weight: normal;font-size: 14px;line-height: 19px;color: #1B2746;flex: none;order: 1;flex-grow: 0;margin: 0px 4px;\">
                <input type=\"radio\" name=\"hasphoto\" required value=\"0\" id=\"hasphoto\" style=\"height:20px; width:20px; vertical-align: middle;\"   checked  > &nbsp;";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Oui"), "html", null, true);
        echo "  &nbsp;
            </label>
            <label class=\"radio-inline\"  style=\"font-family:Roboto-regular, sans-serif;font-style: normal;font-weight: normal;font-size: 14px;line-height: 19px;color: #1B2746;flex: none;order: 1;flex-grow: 0;margin: 0px 4px;\">
                <input type=\"radio\" name=\"hasphoto\"  required value=\"1\"  id=\"hasnophoto\"  style=\"height:20px; width:20px; vertical-align: middle;\"   >  &nbsp;";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Non"), "html", null, true);
        echo "
            </label>
        </div>


    </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">

            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image"), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 178
        if ($this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "image1", [])) {
            // line 179
            echo "                    <div style=\"padding-top: 20px;\">
                        <img class=\"\" style=\"height: 50px;width: auto;  margin-left: auto;  margin-right: auto;  display: block;\"
                             src=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/produits/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "image1", []), "html", null, true);
            echo "\">

                    </div>
                ";
        }
        // line 185
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image1", []), 'widget', ["attr" => ["id" => "input-file-now", "data-plugin" => "dropify", "data-default-file" => "", "style" => "max-height: 100px;max-width:300px"]]);
        echo "
                <h6 style=\"color: #ED0000\">";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("image"), "html", null, true);
        echo " ( 1440 × 400 px)  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("maxsize"), "html", null, true);
        echo " (1024k)
                </h6>

            </div>
        </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
            </div>
            <div class=\"col-lg-6 text-left\">
                 <span style=\"color: red\">
                           ";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image1", []), 'errors');
        echo "
                 </span>
            </div>
        </div>

    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">

            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image"), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 211
        if ($this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "image2", [])) {
            // line 212
            echo "                    <div style=\"padding-top: 20px;\">
                        <img class=\"\" style=\"height: 50px;width: auto;  margin-left: auto;  margin-right: auto;  display: block;\"
                             src=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/produits/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "image2", []), "html", null, true);
            echo "\">

                    </div>
                ";
        }
        // line 218
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image2", []), 'widget', ["attr" => ["id" => "input-file-now", "data-plugin" => "dropify", "data-default-file" => "", "style" => "max-height: 100px;max-width:300px"]]);
        echo "
                <h6 style=\"color: #ED0000\">";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("image"), "html", null, true);
        echo " ( 1440 × 400 px) ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("maxsize"), "html", null, true);
        echo " (1024k)</h6>

            </div>
        </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
            </div>
            <div class=\"col-lg-6 text-left\">
                 <span style=\"color: red\">
                           ";
        // line 230
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image2", []), 'errors');
        echo "
                 </span>
            </div>
        </div>

    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">

            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image"), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 243
        if ($this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "image3", [])) {
            // line 244
            echo "                    <div style=\"padding-top: 20px;\">
                        <img class=\"\" style=\"height: 50px;width: auto;  margin-left: auto;  margin-right: auto;  display: block;\"
                             src=\"";
            // line 246
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/produits/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "image3", []), "html", null, true);
            echo "\">

                    </div>
                ";
        }
        // line 250
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image3", []), 'widget', ["attr" => ["id" => "input-file-now", "data-plugin" => "dropify", "data-default-file" => "", "style" => "max-height: 100px;max-width:300px"]]);
        echo "
                <h6 style=\"color: #ED0000\">";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("image"), "html", null, true);
        echo " ( 1440 × 400 px) ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("maxsize"), "html", null, true);
        echo " (1024k)</h6>

            </div>
        </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
            </div>
            <div class=\"col-lg-6 text-left\">
                 <span style=\"color: red\">
                           ";
        // line 262
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image3", []), 'errors');
        echo "
                 </span>
            </div>
        </div>

    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">

            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image"), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 275
        if ($this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "image4", [])) {
            // line 276
            echo "                    <div style=\"padding-top: 20px;\">
                        <img class=\"\" style=\"height: 50px;width: auto;  margin-left: auto;  margin-right: auto;  display: block;\"
                             src=\"";
            // line 278
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/produits/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "image4", []), "html", null, true);
            echo "\">

                    </div>
                ";
        }
        // line 282
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image4", []), 'widget', ["attr" => ["id" => "input-file-now", "data-plugin" => "dropify", "data-default-file" => "", "style" => "max-height: 100px;max-width:300px"]]);
        echo "
                <h6 style=\"color: #ED0000\">";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("image"), "html", null, true);
        echo " ( 1440 × 400 px) ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("maxsize"), "html", null, true);
        echo " (1024k)</h6>

            </div>
        </div>
    </div>


    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
            </div>
            <div class=\"col-lg-6 text-left\">
                 <span style=\"color: red\">
                           ";
        // line 296
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image4", []), 'errors');
        echo "
                 </span>
            </div>
        </div>

    </div>



    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Web site title"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 311
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "web_site_title", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 312
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "web_site_title", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filiale website name"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 323
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "web_site_name_filiale", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 324
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "web_site_name_filiale", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    ";
        // line 342
        echo "
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comment commander sur le drive"), "html", null, true);
        echo " :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 350
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "how_to_buy_help", []), 'widget', ["attr" => ["class" => "form-control", "style" => "height:150px"]]);
        echo "
                ";
        // line 351
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "how_to_buy_help", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Titre popup choix station"), "html", null, true);
        echo " :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 362
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "station_popup_title", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 363
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "station_popup_title", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description popup choix station"), "html", null, true);
        echo " :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 374
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "station_popup_description", []), 'widget', ["attr" => ["class" => "form-control", "style" => "height:150px"]]);
        echo "
                ";
        // line 375
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "station_popup_description", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
</div>
<div class=\"panel\" style=\"margin-top: 10px;padding: 15px\">

    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">


            ";
        // line 404
        echo "



            <div class=\"col-lg-3 text-right\">
                <label>CGU (pdf):</label>
            </div>
            <div class=\"col-lg-6 text-left input-group input-group-file \" data-plugin=\"inputGroupFile\">

                <input  type=\"text\" class=\"form-control\"  readonly=\"\" id=\"input_cgu_file_upload\">


                <span class=\"input-group-btn\">

                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                ";
        // line 421
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgu_file_upload", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                ";
        // line 423
        if (($context["pay"] ?? $this->getContext($context, "pay"))) {
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["condition_general_directory"] ?? $this->getContext($context, "condition_general_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "CguFile", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "CguFile", []), "html", null, true);
            echo "</a>";
        }
        // line 424
        echo "                </span>

                </span>

           </div>
        </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
            </div>
            <div class=\"col-lg-6 text-left\">
                 <span style=\"color: red\">
                                        ";
        // line 437
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgu_file_upload", []), 'errors');
        echo "
                 </span>
            </div>
        </div>

    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>CGV (pdf):</label>
            </div>
            <div class=\"col-lg-6 text-left input-group input-group-file \" data-plugin=\"inputGroupFile\">

                <input  type=\"text\" class=\"form-control\"  readonly=\"\" id=\"input_cgv_file_upload\">


                <span class=\"input-group-btn\">
                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                ";
        // line 458
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgv_file_upload", []), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => "usernameplaceholder"]]);
        echo "


                    ";
        // line 461
        if (($context["pay"] ?? $this->getContext($context, "pay"))) {
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["condition_vente_directory"] ?? $this->getContext($context, "condition_vente_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "CgVFile", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "CgVFile", []), "html", null, true);
            echo "</a>";
        }
        // line 462
        echo "                </span>
                </span>

            </div>



        </div>
    </div>

    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
            </div>
            <div class=\"col-lg-6 text-left\">
                 <span style=\"color: red\">
                          ";
        // line 478
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgv_file_upload", []), 'errors');
        echo "
                 </span>
            </div>
        </div>

    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Données personnelles"), "html", null, true);
        echo " (pdf):</label>
            </div>


            <div class=\"col-lg-6 text-left input-group input-group-file \" data-plugin=\"inputGroupFile\">

                <input  type=\"text\" class=\"form-control\"  readonly=\"\" id=\"input_personel_data_file_upload\">


                <span class=\"input-group-btn\">
                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                ";
        // line 501
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personel_data_file_upload", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "usernameplaceholder"]]);
        echo "


                    ";
        // line 504
        if (($context["pay"] ?? $this->getContext($context, "pay"))) {
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["personal_data_directory"] ?? $this->getContext($context, "personal_data_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "PersonelDataFile", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "PersonelDataFile", []), "html", null, true);
            echo "</a>";
        }
        // line 505
        echo "                </span>
                </span>

            </div>

        </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
            </div>
            <div class=\"col-lg-6 text-left\">
                 <span style=\"color: red\">
                          ";
        // line 518
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personel_data_file_upload", []), 'errors');
        echo "
                 </span>
            </div>
        </div>

    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 528
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Montions légales"), "html", null, true);
        echo " (pdf):</label>
            </div>

            <div class=\"col-lg-6 text-left input-group input-group-file \" data-plugin=\"inputGroupFile\">

                <input  type=\"text\" class=\"form-control\"  readonly=\"\" id=\"input_mention_legale_file_upload\">


                <span class=\"input-group-btn\">
                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                ";
        // line 540
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mention_legale_file_upload", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "usernameplaceholder"]]);
        echo "


                    ";
        // line 543
        if (($context["pay"] ?? $this->getContext($context, "pay"))) {
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["legal_notice_directory"] ?? $this->getContext($context, "legal_notice_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "MentionLegaleFile", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "MentionLegaleFile", []), "html", null, true);
            echo "</a>";
        }
        // line 544
        echo "                </span>
                </span>

            </div>

        </div>


    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
            </div>
            <div class=\"col-lg-6 text-left\">
                 <span style=\"color: red\">
                           ";
        // line 559
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mention_legale_file_upload", []), 'errors');
        echo "
                 </span>
            </div>
        </div>

    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 569
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Rappel RGPD Text"), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 572
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rappel_rgpd_text", []), 'widget', ["attr" => ["class" => "form-control", "style" => "height:300px"]]);
        echo "
                ";
        // line 573
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rappel_rgpd_text", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 581
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bannière Cookies Text"), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 584
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cookies_banner", []), 'widget', ["attr" => ["class" => "form-control", "style" => "height:300px"]]);
        echo "
                ";
        // line 585
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cookies_banner", []), 'errors');
        echo "
            </div>
        </div>
    </div>

</div>
<div class=\"panel\" style=\"margin-top: 10px;padding: 15px\">

    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>Transport:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 599
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_transport", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 600
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_transport", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 608
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span>:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 611
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_username", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 612
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_username", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 623
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_password", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 624
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_password", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 632
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Host"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 635
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_host", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 636
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_host", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>Port<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 647
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_port", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 648
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_port", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 656
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Encryption"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 659
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_encryption", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 660
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_encryption", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 668
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Auth Mode"), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 671
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_auth_mode", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 672
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_auth_mode", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    ";
        // line 682
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "hasRole", [0 => "ROLE_SUPER_ADMIN"], "method")) {
            // line 683
            echo "        <div class=\"row col-lg-12 text-center\">
            <div class=\"col-lg-6 text-right\">
                <button class=\"btn social-evernote  waves-effect waves-classic\">";
            // line 685
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
            echo "</button>
            </div>


            <div class=\"col-lg-6 text-left\">
                <a href=\"";
            // line 690
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pays_index");
            echo "\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\" class=\"btn   btn-danger waves-effect waves-classic\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
            echo "</a>
            </div>
        </div>
    ";
        } else {
            // line 694
            echo "
        <div class=\"row col-lg-12 text-center\">
            <div class=\"col-lg-12 text-center\">
                <button class=\"btn social-evernote  waves-effect waves-classic\">";
            // line 697
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
            echo "</button>
            </div>



        </div>


    ";
        }
        // line 706
        echo "

</div>

<!-- End Example Tabs Line Top
<script>

    \$(\"[type=file]\").on(\"change\", function(){
        // Name of file and placeholder
        var file = this.files[0].name;
        var dflt = \$(this).attr(\"placeholder\");
        if(\$(this).val()!=\"\"){
            \$(this).next().text(file);
        } else {
            \$(this).next().text(dflt);
        }
    });
    \$('input[type=file][name=\"pays[cgu_file_upload]\"]').change(function() {
        if (this.value == 'allot') {
            alert(\"Allot Thai Gayo Bhai\");
        }
        else if (this.value == 'transfer') {
            alert(\"Transfer Thai Gayo\");
        }
    });

</script>
-->
";
        // line 734
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        // line 735
        $this->displayBlock('javascripts', $context, $blocks);
        // line 769
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 735
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 736
        echo "
     <script src=\"";
        // line 737
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("remark/global/js/Plugin/input-group-file.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>


    <script type=\"text/javascript\" >
        \$(\"#pays_cgu_file_upload\").change(function(){
           // alert(\$(\"#pays_cgu_file_upload\").val());
            content = \$(\"#pays_cgu_file_upload\").val() ;
            \$('#input_cgu_file_upload').val(content);
        });

        \$(\"#pays_cgv_file_upload\").change(function(){
           // alert(\$(\"#pays_cgu_file_upload\").val());
            content = \$(\"#pays_cgv_file_upload\").val() ;
            \$('#input_cgv_file_upload').val(content);
        });

        \$(\"#pays_personel_data_file_upload\").change(function(){
           // alert(\$(\"#pays_cgu_file_upload\").val());
            content = \$(\"#pays_personel_data_file_upload\").val() ;
            \$('#input_personel_data_file_upload').val(content);
        });

        \$(\"#pays_mention_legale_file_upload\").change(function(){
           // alert(\$(\"#pays_cgu_file_upload\").val());
            content = \$(\"#pays_mention_legale_file_upload\").val() ;
            \$('#input_mention_legale_file_upload').val(content);
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:admin/pays:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1139 => 737,  1136 => 736,  1130 => 735,  1122 => 769,  1120 => 735,  1116 => 734,  1086 => 706,  1074 => 697,  1069 => 694,  1060 => 690,  1052 => 685,  1048 => 683,  1045 => 682,  1037 => 672,  1033 => 671,  1027 => 668,  1016 => 660,  1012 => 659,  1006 => 656,  995 => 648,  991 => 647,  977 => 636,  973 => 635,  967 => 632,  956 => 624,  952 => 623,  946 => 620,  935 => 612,  931 => 611,  925 => 608,  914 => 600,  910 => 599,  893 => 585,  889 => 584,  883 => 581,  872 => 573,  868 => 572,  862 => 569,  849 => 559,  832 => 544,  822 => 543,  816 => 540,  801 => 528,  788 => 518,  773 => 505,  763 => 504,  757 => 501,  741 => 488,  728 => 478,  710 => 462,  700 => 461,  694 => 458,  670 => 437,  655 => 424,  645 => 423,  640 => 421,  621 => 404,  606 => 375,  602 => 374,  596 => 371,  585 => 363,  581 => 362,  575 => 359,  564 => 351,  560 => 350,  554 => 347,  547 => 342,  540 => 324,  536 => 323,  530 => 320,  519 => 312,  515 => 311,  509 => 308,  494 => 296,  476 => 283,  471 => 282,  463 => 278,  459 => 276,  457 => 275,  451 => 272,  438 => 262,  422 => 251,  417 => 250,  409 => 246,  405 => 244,  403 => 243,  397 => 240,  384 => 230,  368 => 219,  363 => 218,  355 => 214,  351 => 212,  349 => 211,  343 => 208,  330 => 198,  313 => 186,  308 => 185,  300 => 181,  296 => 179,  294 => 178,  288 => 175,  274 => 164,  268 => 161,  261 => 157,  248 => 147,  244 => 146,  238 => 143,  224 => 132,  220 => 131,  214 => 128,  203 => 120,  199 => 119,  193 => 116,  182 => 108,  178 => 107,  172 => 104,  161 => 96,  157 => 95,  151 => 92,  138 => 82,  134 => 81,  128 => 78,  117 => 70,  111 => 67,  103 => 61,  100 => 47,  90 => 40,  85 => 38,  79 => 35,  73 => 31,  71 => 30,  43 => 4,  41 => 3,  37 => 2,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{{ form_start(form, {'attr': {'class': 'col-lg-12 '}}) }}
{% set usernameplaceholder = \"\" %}
<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }


</style>
<!-- Example Tabs Line Top -->
<div class=\"panel\" style=\"margin-top: 10px;padding: 15px\">

    {% if app.user.hasRole(\"ROLE_SUPER_ADMIN\") %}

    <div class=\"col-lg-12 text-center\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Pays\"|trans({}, 'messages') }} <span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.code, {'attr': {'class': 'btn btn-default dropdown-toggle waves-effect waves-classic text-uppercase'}}) }}

                <h6 style=\"color: #ED0000\">{{ form_errors(form.code) }}</h6>

            </div>
        </div>
    </div>

    {% endif %}

    {#
       <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Nom Filiale\"|trans }}<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
    </div>
    #}


    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Code phone\"|trans({}, 'messages') }}<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.codePhone, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Time_zone\"|trans({}, 'messages') }}:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.timezone, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.timezone) }}
            </div>
        </div>
    </div>
    <br><br>
</div>
<div class=\"panel\" style=\"margin-top: 10px;padding: 15px\" >
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Devise\"|trans({}, 'messages') }}<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.devise, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.devise) }}
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{\"Nb digits décimal\"|trans({}, 'messages')}}<span style=\"color: #ED0000\">*</span>:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.devise_nb_digits_decimal, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.devise_nb_digits_decimal) }}
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{\"Séparateur décimal\"|trans({}, 'messages')}}:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.devise_decimal_separator, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.devise_decimal_separator) }}
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{\"Séparateur milliers\"|trans({}, 'messages')}}:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.devise_thousands_separator, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.devise_thousands_separator) }}
            </div>
        </div>
    </div>

    <br><br>
</div>
<div class=\"panel\" style=\"margin-top: 10px;padding: 15px\">
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{\"Language par défaut\"|trans({}, 'messages')}}:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.front_language, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.front_language) }}
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">

    <div class=\"row  row-lg\"  style=\"padding:15px \">

        <div class=\"col-lg-3 text-right\">
            <label>{{\"show_carosel\"|trans}}:</label>
        </div>
             <div class=\" col-lg-6\">
            <label class=\"radio-inline\" style=\"font-family: Roboto-regular, sans-serif;font-style: normal;font-weight: normal;font-size: 14px;line-height: 19px;color: #1B2746;flex: none;order: 1;flex-grow: 0;margin: 0px 4px;\">
                <input type=\"radio\" name=\"hasphoto\" required value=\"0\" id=\"hasphoto\" style=\"height:20px; width:20px; vertical-align: middle;\"   checked  > &nbsp;{{ \"Oui\"|trans}}  &nbsp;
            </label>
            <label class=\"radio-inline\"  style=\"font-family:Roboto-regular, sans-serif;font-style: normal;font-weight: normal;font-size: 14px;line-height: 19px;color: #1B2746;flex: none;order: 1;flex-grow: 0;margin: 0px 4px;\">
                <input type=\"radio\" name=\"hasphoto\"  required value=\"1\"  id=\"hasnophoto\"  style=\"height:20px; width:20px; vertical-align: middle;\"   >  &nbsp;{{ \"Non\"|trans }}
            </label>
        </div>


    </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">

            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Image\"|trans }}:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {% if pay.image1 %}
                    <div style=\"padding-top: 20px;\">
                        <img class=\"\" style=\"height: 50px;width: auto;  margin-left: auto;  margin-right: auto;  display: block;\"
                             src=\"{{ asset('uploads/produits/') }}{{ pay.image1 }}\">

                    </div>
                {% endif %}
                {{ form_widget(form.image1, {'attr': {'id': 'input-file-now', 'data-plugin':'dropify','data-default-file': '','style' : 'max-height: 100px;max-width:300px'}}) }}
                <h6 style=\"color: #ED0000\">{{ \"image\"|trans }} ( 1440 × 400 px)  {{ \"maxsize\"|trans }} (1024k)
                </h6>

            </div>
        </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
            </div>
            <div class=\"col-lg-6 text-left\">
                 <span style=\"color: red\">
                           {{ form_errors(form.image1) }}
                 </span>
            </div>
        </div>

    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">

            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Image\"|trans }}:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {% if pay.image2 %}
                    <div style=\"padding-top: 20px;\">
                        <img class=\"\" style=\"height: 50px;width: auto;  margin-left: auto;  margin-right: auto;  display: block;\"
                             src=\"{{ asset('uploads/produits/') }}{{ pay.image2 }}\">

                    </div>
                {% endif %}
                {{ form_widget(form.image2, {'attr': {'id': 'input-file-now', 'data-plugin':'dropify','data-default-file': '','style' : 'max-height: 100px;max-width:300px'}}) }}
                <h6 style=\"color: #ED0000\">{{ \"image\"|trans }} ( 1440 × 400 px) {{ \"maxsize\"|trans }} (1024k)</h6>

            </div>
        </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
            </div>
            <div class=\"col-lg-6 text-left\">
                 <span style=\"color: red\">
                           {{ form_errors(form.image2) }}
                 </span>
            </div>
        </div>

    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">

            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Image\"|trans }}:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {% if pay.image3 %}
                    <div style=\"padding-top: 20px;\">
                        <img class=\"\" style=\"height: 50px;width: auto;  margin-left: auto;  margin-right: auto;  display: block;\"
                             src=\"{{ asset('uploads/produits/') }}{{ pay.image3 }}\">

                    </div>
                {% endif %}
                {{ form_widget(form.image3, {'attr': {'id': 'input-file-now', 'data-plugin':'dropify','data-default-file': '','style' : 'max-height: 100px;max-width:300px'}}) }}
                <h6 style=\"color: #ED0000\">{{ \"image\"|trans }} ( 1440 × 400 px) {{ \"maxsize\"|trans }} (1024k)</h6>

            </div>
        </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
            </div>
            <div class=\"col-lg-6 text-left\">
                 <span style=\"color: red\">
                           {{ form_errors(form.image3) }}
                 </span>
            </div>
        </div>

    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">

            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Image\"|trans }}:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {% if pay.image4 %}
                    <div style=\"padding-top: 20px;\">
                        <img class=\"\" style=\"height: 50px;width: auto;  margin-left: auto;  margin-right: auto;  display: block;\"
                             src=\"{{ asset('uploads/produits/') }}{{ pay.image4 }}\">

                    </div>
                {% endif %}
                {{ form_widget(form.image4, {'attr': {'id': 'input-file-now', 'data-plugin':'dropify','data-default-file': '','style' : 'max-height: 100px;max-width:300px'}}) }}
                <h6 style=\"color: #ED0000\">{{ \"image\"|trans }} ( 1440 × 400 px) {{ \"maxsize\"|trans }} (1024k)</h6>

            </div>
        </div>
    </div>


    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
            </div>
            <div class=\"col-lg-6 text-left\">
                 <span style=\"color: red\">
                           {{ form_errors(form.image4) }}
                 </span>
            </div>
        </div>

    </div>



    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Web site title\"|trans }}<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.web_site_title, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.web_site_title) }}
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Filiale website name\"|trans }}<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.web_site_name_filiale, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.web_site_name_filiale) }}
            </div>
        </div>
    </div>
    {#
        <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Filiale website url\"|trans }}<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.web_site_url_filiale, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.web_site_url_filiale) }}
            </div>
        </div>
    </div>
    #}

    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Comment commander sur le drive\"|trans }} :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.how_to_buy_help, {'attr': {'class': 'form-control', 'style':\"height:150px\"}}) }}
                {{ form_errors(form.how_to_buy_help) }}
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Titre popup choix station\"|trans }} :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.station_popup_title, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.station_popup_title) }}
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Description popup choix station\"|trans }} :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.station_popup_description, {'attr': {'class': 'form-control', 'style':\"height:150px\"}}) }}
                {{ form_errors(form.station_popup_description) }}
            </div>
        </div>
    </div>
    <br><br>
</div>
<div class=\"panel\" style=\"margin-top: 10px;padding: 15px\">

    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">


            {#
                        <label class=\"btn btn-primary\" for=\"my-file-selector\">
                <input id=\"my-file-selector\" type=\"file\" style=\"display:none\"
                       onchange=\"\$('#upload-file-info').text(this.files[0].name)\">
                Button Text Here
            </label>
            <span class='label label-info' id=\"upload-file-info\"></span>
    <div class=\"input-group input-group-file\" data-plugin=\"inputGroupFile\">
                <input type=\"text\" class=\"form-control\" readonly=\"\">
                <span class=\"input-group-btn\"> ' +
                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>
                <input type=\"file\"  accept=\"image/*\" name=\"images[]\">
                </span>
                </span>
            </div>
            #}




            <div class=\"col-lg-3 text-right\">
                <label>CGU (pdf):</label>
            </div>
            <div class=\"col-lg-6 text-left input-group input-group-file \" data-plugin=\"inputGroupFile\">

                <input  type=\"text\" class=\"form-control\"  readonly=\"\" id=\"input_cgu_file_upload\">


                <span class=\"input-group-btn\">

                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                {{ form_widget(form.cgu_file_upload,{'attr': {'class': 'form-control' }}) }}

                {% if pay %}<a target=\"_blank\" href=\"{{ condition_general_directory }}/{{ pay.CguFile }}\">{{ pay.CguFile }}</a>{% endif %}
                </span>

                </span>

           </div>
        </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
            </div>
            <div class=\"col-lg-6 text-left\">
                 <span style=\"color: red\">
                                        {{ form_errors(form.cgu_file_upload) }}
                 </span>
            </div>
        </div>

    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>CGV (pdf):</label>
            </div>
            <div class=\"col-lg-6 text-left input-group input-group-file \" data-plugin=\"inputGroupFile\">

                <input  type=\"text\" class=\"form-control\"  readonly=\"\" id=\"input_cgv_file_upload\">


                <span class=\"input-group-btn\">
                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                {{ form_widget(form.cgv_file_upload, {'attr': {'class': 'form-control ','placeholder': 'usernameplaceholder'}}) }}


                    {% if pay %}<a target=\"_blank\" href=\"{{ condition_vente_directory }}/{{ pay.CgVFile }}\">{{ pay.CgVFile }}</a>{% endif %}
                </span>
                </span>

            </div>



        </div>
    </div>

    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
            </div>
            <div class=\"col-lg-6 text-left\">
                 <span style=\"color: red\">
                          {{ form_errors(form.cgv_file_upload) }}
                 </span>
            </div>
        </div>

    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{\"Données personnelles\"|trans}} (pdf):</label>
            </div>


            <div class=\"col-lg-6 text-left input-group input-group-file \" data-plugin=\"inputGroupFile\">

                <input  type=\"text\" class=\"form-control\"  readonly=\"\" id=\"input_personel_data_file_upload\">


                <span class=\"input-group-btn\">
                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                {{ form_widget(form.personel_data_file_upload,{'attr': {'class': 'form-control','placeholder': 'usernameplaceholder'}}) }}


                    {% if pay %}<a target=\"_blank\" href=\"{{ personal_data_directory }}/{{ pay.PersonelDataFile }}\">{{ pay.PersonelDataFile }}</a>{% endif %}
                </span>
                </span>

            </div>

        </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
            </div>
            <div class=\"col-lg-6 text-left\">
                 <span style=\"color: red\">
                          {{ form_errors(form.personel_data_file_upload) }}
                 </span>
            </div>
        </div>

    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{\"Montions légales\"|trans}} (pdf):</label>
            </div>

            <div class=\"col-lg-6 text-left input-group input-group-file \" data-plugin=\"inputGroupFile\">

                <input  type=\"text\" class=\"form-control\"  readonly=\"\" id=\"input_mention_legale_file_upload\">


                <span class=\"input-group-btn\">
                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                {{ form_widget(form.mention_legale_file_upload,{'attr': {'class': 'form-control','placeholder': 'usernameplaceholder'}}) }}


                    {% if pay %}<a target=\"_blank\" href=\"{{ legal_notice_directory }}/{{ pay.MentionLegaleFile }}\">{{ pay.MentionLegaleFile }}</a>{% endif %}
                </span>
                </span>

            </div>

        </div>


    </div>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
            </div>
            <div class=\"col-lg-6 text-left\">
                 <span style=\"color: red\">
                           {{ form_errors(form.mention_legale_file_upload) }}
                 </span>
            </div>
        </div>

    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Rappel RGPD Text\"|trans }}:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.rappel_rgpd_text, {'attr': {'class': 'form-control',\"style\":\"height:300px\"}}) }}
                {{ form_errors(form.rappel_rgpd_text) }}
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{\"Bannière Cookies Text\"|trans}}:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.cookies_banner, {'attr': {'class': 'form-control',\"style\":\"height:300px\"}}) }}
                {{ form_errors(form.cookies_banner) }}
            </div>
        </div>
    </div>

</div>
<div class=\"panel\" style=\"margin-top: 10px;padding: 15px\">

    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>Transport:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.mail_transport, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.mail_transport) }}
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Username\"|trans }}<span style=\"color: #ED0000\">*</span>:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.mail_username, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.mail_username) }}
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Password\"|trans }}<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.mail_password, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.mail_password) }}
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Host\"|trans }}<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.mail_host, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.mail_host) }}
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>Port<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.mail_port, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.mail_port) }}
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Encryption\"|trans }}<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.mail_encryption, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.mail_encryption) }}
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Auth Mode\"|trans }}:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                {{ form_widget(form.mail_auth_mode, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.mail_auth_mode) }}
            </div>
        </div>
    </div>
    <br><br>
    {#
      <div class=\"col-lg-12 text-center\">
        <button class=\"btn  social-evernote  waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>
    </div>
    #}
    {% if app.user.hasRole(\"ROLE_SUPER_ADMIN\") %}
        <div class=\"row col-lg-12 text-center\">
            <div class=\"col-lg-6 text-right\">
                <button class=\"btn social-evernote  waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>
            </div>


            <div class=\"col-lg-6 text-left\">
                <a href=\"{{ path('pays_index') }}\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\" class=\"btn   btn-danger waves-effect waves-classic\">{{ 'back'|trans }}</a>
            </div>
        </div>
    {% else %}

        <div class=\"row col-lg-12 text-center\">
            <div class=\"col-lg-12 text-center\">
                <button class=\"btn social-evernote  waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>
            </div>



        </div>


    {% endif %}


</div>

<!-- End Example Tabs Line Top
<script>

    \$(\"[type=file]\").on(\"change\", function(){
        // Name of file and placeholder
        var file = this.files[0].name;
        var dflt = \$(this).attr(\"placeholder\");
        if(\$(this).val()!=\"\"){
            \$(this).next().text(file);
        } else {
            \$(this).next().text(dflt);
        }
    });
    \$('input[type=file][name=\"pays[cgu_file_upload]\"]').change(function() {
        if (this.value == 'allot') {
            alert(\"Allot Thai Gayo Bhai\");
        }
        else if (this.value == 'transfer') {
            alert(\"Transfer Thai Gayo\");
        }
    });

</script>
-->
{{ form_end(form) }}
{% block javascripts %}

     <script src=\"{{ asset('remark/global/js/Plugin/input-group-file.js')}}\"></script>

    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>


    <script type=\"text/javascript\" >
        \$(\"#pays_cgu_file_upload\").change(function(){
           // alert(\$(\"#pays_cgu_file_upload\").val());
            content = \$(\"#pays_cgu_file_upload\").val() ;
            \$('#input_cgu_file_upload').val(content);
        });

        \$(\"#pays_cgv_file_upload\").change(function(){
           // alert(\$(\"#pays_cgu_file_upload\").val());
            content = \$(\"#pays_cgv_file_upload\").val() ;
            \$('#input_cgv_file_upload').val(content);
        });

        \$(\"#pays_personel_data_file_upload\").change(function(){
           // alert(\$(\"#pays_cgu_file_upload\").val());
            content = \$(\"#pays_personel_data_file_upload\").val() ;
            \$('#input_personel_data_file_upload').val(content);
        });

        \$(\"#pays_mention_legale_file_upload\").change(function(){
           // alert(\$(\"#pays_cgu_file_upload\").val());
            content = \$(\"#pays_mention_legale_file_upload\").val() ;
            \$('#input_mention_legale_file_upload').val(content);
        });

    </script>
{% endblock %}

{#



{{ form_start(form, {'attr': {'class': 'col-lg-12 '}}) }}

<div class=\"col-xl-12\">
    <!-- Example Tabs Line Top -->
    <div class=\"example-wrap\">
        <div class=\"nav-tabs-horizontal\" data-plugin=\"tabs\">
            <ul class=\"nav nav-tabs nav-tabs-line tabs-line-top\" role=\"tablist\">
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" data-toggle=\"tab\" href=\"#exampleTabsLineTopOne\" aria-controls=\"exampleTabsLineTopOne\" role=\"tab\">{{ \"Pays\"|trans }}</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" data-toggle=\"tab\" href=\"#exampleTabsLineTopTwo\" aria-controls=\"exampleTabsLineTopTwo\" role=\"tab\">{{ \"Devise\"|trans }}</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" data-toggle=\"tab\" href=\"#exampleTabsLineTopThree\" aria-controls=\"exampleTabsLineTopThree\" role=\"tab\">{{ \"Content\"|trans }}</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" data-toggle=\"tab\" href=\"#exampleTabsLineTopFour\" aria-controls=\"exampleTabsLineTopThree\" role=\"tab\">
                        {{\"Conditions Générales\"|trans}}</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" data-toggle=\"tab\" href=\"#exampleTabsLineTopFive\" aria-controls=\"exampleTabsLineTopFour\" role=\"tab\">SMTP</a></li>
            </ul>
            <div class=\"tab-content pt-20\">
                <div class=\"tab-pane active\" id=\"exampleTabsLineTopOne\" role=\"tabpanel\">
                    <div class=\"col-lg-12 text-center\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{ \"Code Filiale\"|trans }}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.code, {'attr': {'class': 'btn btn-default dropdown-toggle waves-effect waves-classic text-uppercase'}}) }}

                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{ \"Nom Filiale\"|trans }}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{ \"Timezone\"|trans }}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.timezone, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.timezone) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                </div>
                <div class=\"tab-pane\" id=\"exampleTabsLineTopTwo\" role=\"tabpanel\">
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{ \"Devise\"|trans }}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.devise, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.devise) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{\"Nb digits décimal\"|trans}}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.devise_nb_digits_decimal, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.devise_nb_digits_decimal) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{\"Séparateur décimal\"|trans}}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.devise_decimal_separator, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.devise_decimal_separator) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{\"Séparateur milliers\"|trans}}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.devise_thousands_separator, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.devise_thousands_separator) }}
                            </div>
                        </div>
                    </div>

                    <br><br>
                </div>
                <div class=\"tab-pane\" id=\"exampleTabsLineTopThree\" role=\"tabpanel\">
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{\"Language par défaut\"|trans}}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.front_language, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.front_language) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{ \"Web site title\"|trans }}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.web_site_title, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.web_site_title) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{ \"Filiale website name\"|trans }}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.web_site_name_filiale, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.web_site_name_filiale) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{ \"Filiale website url\"|trans }}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.web_site_url_filiale, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.web_site_url_filiale) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{ \"Comment commander sur le drive\"|trans }} :</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.how_to_buy_help, {'attr': {'class': 'form-control', 'style':\"height:150px\"}}) }}
                                {{ form_errors(form.how_to_buy_help) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{ \"Titre popup choix station\"|trans }} :</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.station_popup_title, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.station_popup_title) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{ \"Description popup choix station\"|trans }} :</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.station_popup_description, {'attr': {'class': 'form-control', 'style':\"height:150px\"}}) }}
                                {{ form_errors(form.station_popup_description) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                </div>
                <div class=\"tab-pane\" id=\"exampleTabsLineTopFour\" role=\"tabpanel\">

                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>CGU:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.cgu_file_upload, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.cgu_file_upload) }}
                                {% if pay %}<a target=\"_blank\" href=\"{{ condition_general_directory }}/{{ pay.CguFile }}\">{{ pay.CguFile }}</a>{% endif %}
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>CGV:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.cgv_file_upload, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.cgv_file_upload) }}
                                {% if pay %}<a target=\"_blank\" href=\"{{ condition_vente_directory }}/{{ pay.CgVFile }}\">{{ pay.CgVFile }}</a>{% endif %}

                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{\"Données personnelles\"|trans}}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.personel_data_file_upload, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.personel_data_file_upload) }}
                                {% if pay %}<a target=\"_blank\" href=\"{{ personal_data_directory }}/{{ pay.PersonelDataFile }}\">{{ pay.PersonelDataFile }}</a>{% endif %}

                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{\"Montions légales\"|trans}}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.mention_legale_file_upload, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.mention_legale_file_upload) }}
                                {% if pay %}<a target=\"_blank\" href=\"{{ legal_notice_directory }}/{{ pay.MentionLegaleFile }}\">{{ pay.MentionLegaleFile }}</a>{% endif %}

                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{ \"Rappel RGPD Text\"|trans }}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.rappel_rgpd_text, {'attr': {'class': 'form-control',\"style\":\"height:300px\"}}) }}
                                {{ form_errors(form.rappel_rgpd_text) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{\"Bannière Cookies Text\"|trans}}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.cookies_banner, {'attr': {'class': 'form-control',\"style\":\"height:300px\"}}) }}
                                {{ form_errors(form.cookies_banner) }}
                            </div>
                        </div>
                    </div>

                </div>
                <div class=\"tab-pane\" id=\"exampleTabsLineTopFive\" role=\"tabpanel\">

                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>Transport:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.mail_transport, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.mail_transport) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{ \"Username\"|trans }}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.mail_username, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.mail_username) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{ \"Password\"|trans }}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.mail_password, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.mail_password) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{ \"Host\"|trans }}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.mail_host, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.mail_host) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>Port:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.mail_port, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.mail_port) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{ \"Encryption\"|trans }}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.mail_encryption, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.mail_encryption) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class=\"col-lg-12\">
                        <div class=\"row row-lg\">
                            <div class=\"col-lg-3 text-right\">
                                <label>{{ \"Auth Mode\"|trans }}:</label>
                            </div>
                            <div class=\"col-lg-6 text-left\">
                                {{ form_widget(form.mail_auth_mode, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.mail_auth_mode) }}
                            </div>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    <!-- End Example Tabs Line Top -->
</div>
<div class=\"col-lg-12 text-center\">
    <button class=\"btn btn-dark  waves-effect waves-classic\">{{ button_label|default('Ajouter Filiale') }}</button>
</div>
{{ form_end(form) }}

#}
", "BackendBundle:admin/pays:_form.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/admin/pays/_form.html.twig");
    }
}
