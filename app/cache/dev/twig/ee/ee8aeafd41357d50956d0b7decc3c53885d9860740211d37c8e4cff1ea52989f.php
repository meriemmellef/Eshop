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

/* BackendBundle:admin/pays:formedit.html.twig */
class __TwigTemplate_2d605e9e74f182b1bed02c821eba2246cb5006b876d3314a782a133a9017ffe3 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackendBundle:admin/pays:formedit.html.twig"));

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
    <div class=\"col-lg-12 text-center\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Code Filiale"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", []), 'widget', ["attr" => ["class" => "btn btn-default dropdown-toggle waves-effect waves-classic text-uppercase"]]);
        echo "

            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom Filiale"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
    </div>

    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Code phone"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 59
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
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Timezone"), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "timezone", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 71
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
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Devise"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 85
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
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nb digits décimal"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span>:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise_nb_digits_decimal", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 97
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
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Séparateur décimal"), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise_decimal_separator", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 109
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
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Séparateur milliers"), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise_thousands_separator", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 121
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
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language par défaut"), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "front_language", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "front_language", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Web site title"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "web_site_title", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 148
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
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filiale website name"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "web_site_name_filiale", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "web_site_name_filiale", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filiale website url"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "web_site_url_filiale", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "web_site_url_filiale", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comment commander sur le drive"), "html", null, true);
        echo " :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "how_to_buy_help", []), 'widget', ["attr" => ["class" => "form-control", "style" => "height:150px"]]);
        echo "
                ";
        // line 184
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
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Titre popup choix station"), "html", null, true);
        echo " :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "station_popup_title", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 196
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
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description popup choix station"), "html", null, true);
        echo " :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "station_popup_description", []), 'widget', ["attr" => ["class" => "form-control", "style" => "height:150px"]]);
        echo "
                ";
        // line 208
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
        // line 237
        echo "



            <div class=\"col-lg-3 text-right\">
                <label>CGU:</label>
            </div>
            <div class=\"col-lg-6 text-left input-group input-group-file \" data-plugin=\"inputGroupFile\">

                <input  type=\"text\" class=\"form-control\"  readonly=\"\" id=\"input_cgu_file_upload\">


                <span class=\"input-group-btn\">
                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                ";
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgu_file_upload", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 254
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgu_file_upload", []), 'errors');
        echo "

                    ";
        // line 256
        if (($context["pay"] ?? $this->getContext($context, "pay"))) {
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["condition_general_directory"] ?? $this->getContext($context, "condition_general_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "CguFile", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "CguFile", []), "html", null, true);
            echo "</a>";
        }
        // line 257
        echo "                </span>
                </span>
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>CGV:</label>
            </div>
            <div class=\"col-lg-6 text-left input-group input-group-file \" data-plugin=\"inputGroupFile\">

                <input  type=\"text\" class=\"form-control\"  readonly=\"\" id=\"input_cgv_file_upload\">


                <span class=\"input-group-btn\">
                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                ";
        // line 277
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgv_file_upload", []), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => "usernameplaceholder"]]);
        echo "
                    ";
        // line 278
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgv_file_upload", []), 'errors');
        echo "
                    ";
        // line 279
        if (($context["pay"] ?? $this->getContext($context, "pay"))) {
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["condition_vente_directory"] ?? $this->getContext($context, "condition_vente_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "CgVFile", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "CgVFile", []), "html", null, true);
            echo "</a>";
        }
        // line 280
        echo "                </span>
                </span>
            </div>



        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Données personnelles"), "html", null, true);
        echo ":</label>
            </div>


            <div class=\"col-lg-6 text-left input-group input-group-file \" data-plugin=\"inputGroupFile\">

                <input  type=\"text\" class=\"form-control\"  readonly=\"\" id=\"input_personel_data_file_upload\">


                <span class=\"input-group-btn\">
                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                ";
        // line 305
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personel_data_file_upload", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "usernameplaceholder"]]);
        echo "
                    ";
        // line 306
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personel_data_file_upload", []), 'errors');
        echo "
                    ";
        // line 307
        if (($context["pay"] ?? $this->getContext($context, "pay"))) {
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["personal_data_directory"] ?? $this->getContext($context, "personal_data_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "PersonelDataFile", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "PersonelDataFile", []), "html", null, true);
            echo "</a>";
        }
        // line 308
        echo "                </span>
                </span>
            </div>

        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Montions légales"), "html", null, true);
        echo ":</label>
            </div>

            <div class=\"col-lg-6 text-left input-group input-group-file \" data-plugin=\"inputGroupFile\">

                <input  type=\"text\" class=\"form-control\"  readonly=\"\" id=\"input_mention_legale_file_upload\">


                <span class=\"input-group-btn\">
                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                ";
        // line 330
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mention_legale_file_upload", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "usernameplaceholder"]]);
        echo "
                    ";
        // line 331
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mention_legale_file_upload", []), 'errors');
        echo "
                    ";
        // line 332
        if (($context["pay"] ?? $this->getContext($context, "pay"))) {
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["legal_notice_directory"] ?? $this->getContext($context, "legal_notice_directory")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "MentionLegaleFile", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pay"] ?? $this->getContext($context, "pay")), "MentionLegaleFile", []), "html", null, true);
            echo "</a>";
        }
        // line 333
        echo "                </span>
                </span>
            </div>

        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Rappel RGPD Text"), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 346
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rappel_rgpd_text", []), 'widget', ["attr" => ["class" => "form-control", "style" => "height:300px"]]);
        echo "
                ";
        // line 347
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
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bannière Cookies Text"), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 358
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cookies_banner", []), 'widget', ["attr" => ["class" => "form-control", "style" => "height:300px"]]);
        echo "
                ";
        // line 359
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
        // line 373
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_transport", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 374
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
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span>:</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 385
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_username", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 386
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
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 397
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_password", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 398
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
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Host"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 409
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_host", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 410
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
        // line 421
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_port", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 422
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
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Encryption"), "html", null, true);
        echo "<span style=\"color: #ED0000\">*</span> :</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 433
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_encryption", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 434
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
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Auth Mode"), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-lg-6 text-left\">
                ";
        // line 445
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_auth_mode", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 446
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail_auth_mode", []), 'errors');
        echo "
            </div>
        </div>
    </div>
    <br><br>
    ";
        // line 456
        echo "



    <div class=\"col-lg-12 text-center\">

        <div class=\"row\">
            <div class=\"col-lg-6 text-right\">
                <button class=\"btn social-evernote  waves-effect waves-classic\">";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "</button>

            </div>
            <div class=\"col-lg-6 text-left\">
                <a href=\"";
        // line 468
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pays_index");
        echo "\"  style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\" class=\"btn   btn-danger waves-effect waves-classic\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </div>

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
        // line 499
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        // line 500
        $this->displayBlock('javascripts', $context, $blocks);
        // line 534
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 500
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 501
        echo "
    <script src=\"";
        // line 502
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
        return "BackendBundle:admin/pays:formedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  828 => 502,  825 => 501,  819 => 500,  811 => 534,  809 => 500,  805 => 499,  769 => 468,  762 => 464,  752 => 456,  744 => 446,  740 => 445,  734 => 442,  723 => 434,  719 => 433,  713 => 430,  702 => 422,  698 => 421,  684 => 410,  680 => 409,  674 => 406,  663 => 398,  659 => 397,  653 => 394,  642 => 386,  638 => 385,  632 => 382,  621 => 374,  617 => 373,  600 => 359,  596 => 358,  590 => 355,  579 => 347,  575 => 346,  569 => 343,  557 => 333,  547 => 332,  543 => 331,  539 => 330,  524 => 318,  512 => 308,  502 => 307,  498 => 306,  494 => 305,  478 => 292,  464 => 280,  454 => 279,  450 => 278,  446 => 277,  424 => 257,  414 => 256,  409 => 254,  405 => 253,  387 => 237,  372 => 208,  368 => 207,  362 => 204,  351 => 196,  347 => 195,  341 => 192,  330 => 184,  326 => 183,  320 => 180,  309 => 172,  305 => 171,  299 => 168,  288 => 160,  284 => 159,  278 => 156,  267 => 148,  263 => 147,  257 => 144,  246 => 136,  242 => 135,  236 => 132,  222 => 121,  218 => 120,  212 => 117,  201 => 109,  197 => 108,  191 => 105,  180 => 97,  176 => 96,  170 => 93,  159 => 85,  155 => 84,  149 => 81,  136 => 71,  132 => 70,  126 => 67,  115 => 59,  109 => 56,  97 => 47,  91 => 44,  79 => 35,  73 => 32,  43 => 4,  41 => 3,  37 => 2,  34 => 1,);
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
    <div class=\"col-lg-12 text-center\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Code Filiale\"|trans }} <span style=\"color: #ED0000\">*</span> :</label>
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
                <label>{{ \"Nom Filiale\"|trans }}<span style=\"color: #ED0000\">*</span> :</label>
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
                <label>{{ \"Code phone\"|trans }}<span style=\"color: #ED0000\">*</span> :</label>
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
<div class=\"panel\" style=\"margin-top: 10px;padding: 15px\" >
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{ \"Devise\"|trans }}<span style=\"color: #ED0000\">*</span> :</label>
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
                <label>{{\"Nb digits décimal\"|trans}}<span style=\"color: #ED0000\">*</span>:</label>
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
<div class=\"panel\" style=\"margin-top: 10px;padding: 15px\">
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
                <label>CGU:</label>
            </div>
            <div class=\"col-lg-6 text-left input-group input-group-file \" data-plugin=\"inputGroupFile\">

                <input  type=\"text\" class=\"form-control\"  readonly=\"\" id=\"input_cgu_file_upload\">


                <span class=\"input-group-btn\">
                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                {{ form_widget(form.cgu_file_upload,{'attr': {'class': 'form-control' }}) }}
                    {{ form_errors(form.cgu_file_upload) }}

                    {% if pay %}<a target=\"_blank\" href=\"{{ condition_general_directory }}/{{ pay.CguFile }}\">{{ pay.CguFile }}</a>{% endif %}
                </span>
                </span>
            </div>
        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>CGV:</label>
            </div>
            <div class=\"col-lg-6 text-left input-group input-group-file \" data-plugin=\"inputGroupFile\">

                <input  type=\"text\" class=\"form-control\"  readonly=\"\" id=\"input_cgv_file_upload\">


                <span class=\"input-group-btn\">
                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                {{ form_widget(form.cgv_file_upload, {'attr': {'class': 'form-control ','placeholder': 'usernameplaceholder'}}) }}
                    {{ form_errors(form.cgv_file_upload) }}
                    {% if pay %}<a target=\"_blank\" href=\"{{ condition_vente_directory }}/{{ pay.CgVFile }}\">{{ pay.CgVFile }}</a>{% endif %}
                </span>
                </span>
            </div>



        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{\"Données personnelles\"|trans}}:</label>
            </div>


            <div class=\"col-lg-6 text-left input-group input-group-file \" data-plugin=\"inputGroupFile\">

                <input  type=\"text\" class=\"form-control\"  readonly=\"\" id=\"input_personel_data_file_upload\">


                <span class=\"input-group-btn\">
                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                {{ form_widget(form.personel_data_file_upload,{'attr': {'class': 'form-control','placeholder': 'usernameplaceholder'}}) }}
                    {{ form_errors(form.personel_data_file_upload) }}
                    {% if pay %}<a target=\"_blank\" href=\"{{ personal_data_directory }}/{{ pay.PersonelDataFile }}\">{{ pay.PersonelDataFile }}</a>{% endif %}
                </span>
                </span>
            </div>

        </div>
    </div>
    <br><br>
    <div class=\"col-lg-12\">
        <div class=\"row row-lg\">
            <div class=\"col-lg-3 text-right\">
                <label>{{\"Montions légales\"|trans}}:</label>
            </div>

            <div class=\"col-lg-6 text-left input-group input-group-file \" data-plugin=\"inputGroupFile\">

                <input  type=\"text\" class=\"form-control\"  readonly=\"\" id=\"input_mention_legale_file_upload\">


                <span class=\"input-group-btn\">
                <span class=\"btn btn-default btn-file waves-effect waves-classic\">
                <i class=\"icon md-upload\" aria-hidden=\"true\"></i>

                {{ form_widget(form.mention_legale_file_upload,{'attr': {'class': 'form-control','placeholder': 'usernameplaceholder'}}) }}
                    {{ form_errors(form.mention_legale_file_upload) }}
                    {% if pay %}<a target=\"_blank\" href=\"{{ legal_notice_directory }}/{{ pay.MentionLegaleFile }}\">{{ pay.MentionLegaleFile }}</a>{% endif %}
                </span>
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




    <div class=\"col-lg-12 text-center\">

        <div class=\"row\">
            <div class=\"col-lg-6 text-right\">
                <button class=\"btn social-evernote  waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>

            </div>
            <div class=\"col-lg-6 text-left\">
                <a href=\"{{ path('pays_index') }}\"  style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\" class=\"btn   btn-danger waves-effect waves-classic\">{{ 'back'|trans }}</a>
            </div>
        </div>
    </div>

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
", "BackendBundle:admin/pays:formedit.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle/Resources/views/admin/pays/formedit.html.twig");
    }
}
