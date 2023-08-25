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

/* @Backend/gestionnaire/coupon/edit.html.twig */
class __TwigTemplate_5adbfea3d361ed68b45eb6fb719413fb42ce0236ab572572c9b92b131737b972 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gestionnaire/coupon/edit.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/gestionnaire/coupon/edit.html.twig", 1);
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
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <h4 class=\"example-title\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modification Coupon"), "html", null, true);
        echo " </h4>
                                <br><br>


                                ";
        // line 17
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 18
            echo "                                    <div class=\"col-lg-12 text-center\">

                                        ";
            // line 20
            if ((($context["error"] ?? $this->getContext($context, "error")) == 1)) {
                // line 21
                echo "                                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">×</span>
                                                </button>
                                                ";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("captchincorect", [], "messages"), "html", null, true);
                echo "
                                            </div>

                                        ";
            }
            // line 29
            echo "                                    </div>
                                ";
        }
        // line 31
        echo "
                                <div class=\"row row-lg\">

                                    ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "col-lg-12 "]]);
        echo "
                                    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "headers", []), "get", [0 => "referer"], "method"), "html", null, true);
        echo "\"/>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Code"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", []), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>



                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo " <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", []), 'widget', ["attr" => ["class" => "radio-custom radio-primary"]]);
        echo "
                                                ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", []), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-12\"  id=\"divcoupon_montant\">
                                        <br><br>
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Montant"), "html", null, true);
        echo " :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", []), 'widget', ["attr" => ["class" => "form-control", "type" => "number"]]);
        echo "
                                                ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", []), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-12\" id=\"divcoupon_pourcentage\">
                                        <br><br>
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pourcentage"), "html", null, true);
        echo " :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pourcentage", []), 'widget', ["attr" => ["class" => "form-control", "type" => "number"]]);
        echo "
                                                ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pourcentage", []), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    ";
        // line 105
        echo "

                                    <br><br>
                                    ";
        // line 113
        echo "                                    <div class=\"col-lg-12 \"  >
                                        <div class=\"row\">
                                            <div class=\"col-lg-3\">

                                            </div>
                                            <div class=\"col-lg-9\">
                                                <div class=\"input-group\" style=\"padding-top: 14px;padding-bottom: 5px;\">
                                                    <div class=\"g-recaptcha\" data-sitekey=\"6LedckodAAAAAAE-j3jaEd9gBOEFaaM7xxW3FKN0\"></div>
                                                    <script type=\"text/javascript\"
                                                            src=\"https://www.google.com/recaptcha/api.js?hl=en\">
                                                    </script>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <br><br>

                                    <div class=\"row\">
                                        <div class=\"col-lg-6 text-right\">
                                            <button class=\"btn social-evernote  waves-effect waves-classic\">";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "</button>
                                        </div>
                                        <div class=\"col-lg-6 text-left\">
                                            <a  href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_index");
        echo "\"  style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</a>
                                        </div>
                                    </div>
                                    ";
        // line 141
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

    // line 156
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 157
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
    <script>
        //  divcoupon_montant divcoupon_pourcentage
        \$('input[type=radio][name=\"coupon[type]\"]').change(function() {
            if (this.value === '1') {
                //   coupon_pourcentage.hide
                // \$(\"#coupon_pourcentage\").hide()
                //\$(\"#coupon_montant\").show()
                \$(\"#divcoupon_montant\").show()
                \$(\"#divcoupon_pourcentage\").hide()

            }
            else if (this.value === '2') {
                //coupon_montant.hide
                //  \$(\"#coupon_pourcentage\").show()
                // \$(\"#coupon_montant\").hide()

                \$(\"#divcoupon_montant\").hide()
                \$(\"#divcoupon_pourcentage\").show()


            }
        });



        \$(document).ready (function()
        {
            ////coupon_pourcentage

            if (\$(\"input[name='coupon[type]']:checked\").val()==='1'){
                \$(\"#divcoupon_pourcentage\").hide()
            }

            ////coupon_montant
            if (\$(\"input[name='coupon[type]']:checked\").val()==='2'){
                \$(\"#divcoupon_montant\").hide()
            }

        });


    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Backend/gestionnaire/coupon/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 157,  261 => 156,  239 => 141,  231 => 138,  225 => 135,  201 => 113,  196 => 105,  188 => 84,  184 => 83,  178 => 80,  166 => 71,  162 => 70,  156 => 67,  144 => 58,  140 => 57,  134 => 54,  120 => 43,  116 => 42,  110 => 39,  103 => 35,  99 => 34,  94 => 31,  90 => 29,  83 => 25,  77 => 21,  75 => 20,  71 => 18,  69 => 17,  62 => 13,  52 => 5,  46 => 4,  30 => 1,);
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
        <div class=\"page-content\">
            <!-- Panel -->
            <div class=\"panel\">
                <div class=\"panel-body container-fluid\">
                    <div class=\"row row-lg\">
                        <div class=\"col-lg-12\">
                            <div class=\"example-wrap\">
                                <h4 class=\"example-title\">{{ \"Modification Coupon\"|trans }} </h4>
                                <br><br>


                                {% if error is defined %}
                                    <div class=\"col-lg-12 text-center\">

                                        {% if   error==1   %}
                                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">×</span>
                                                </button>
                                                {{ \"captchincorect\"|trans({}, 'messages') }}
                                            </div>

                                        {% endif %}
                                    </div>
                                {% endif %}

                                <div class=\"row row-lg\">

                                    {{ form_start(form, {'attr': {'class': 'col-lg-12 '}}) }}
                                    <input type=\"hidden\" name=\"referer\" value=\"{{app.request.headers.get('referer')}}\"/>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Code\"|trans }} <span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.code, {'attr': {'class': 'form-control'}}) }}
                                                {{ form_errors(form.code) }}
                                            </div>
                                        </div>
                                    </div>



                                    <br><br>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Type\"|trans }} <span style=\"color: #ED0000\">*</span>:</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.type, {'attr': {'class': 'radio-custom radio-primary'}}) }}
                                                {{ form_errors(form.type, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-12\"  id=\"divcoupon_montant\">
                                        <br><br>
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Montant\"|trans }} :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.montant, {'attr': {'class': 'form-control','type':'number'}}) }}
                                                {{ form_errors(form.montant, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-12\" id=\"divcoupon_pourcentage\">
                                        <br><br>
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Pourcentage\"|trans }} :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.pourcentage, {'attr': {'class': 'form-control','type':'number'}}) }}
                                                {{ form_errors(form.pourcentage, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>

                                    {#
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
                                    #}


                                    <br><br>
                                    {#
                                     <div class=\"col-lg-12 text-center\">
                                        <button class=\"btn social-evernote waves-effect waves-classic\">{{ \"Enregistrer\"|trans }}</button>
                                    </div>
                                    #}
                                    <div class=\"col-lg-12 \"  >
                                        <div class=\"row\">
                                            <div class=\"col-lg-3\">

                                            </div>
                                            <div class=\"col-lg-9\">
                                                <div class=\"input-group\" style=\"padding-top: 14px;padding-bottom: 5px;\">
                                                    <div class=\"g-recaptcha\" data-sitekey=\"6LedckodAAAAAAE-j3jaEd9gBOEFaaM7xxW3FKN0\"></div>
                                                    <script type=\"text/javascript\"
                                                            src=\"https://www.google.com/recaptcha/api.js?hl=en\">
                                                    </script>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <br><br>

                                    <div class=\"row\">
                                        <div class=\"col-lg-6 text-right\">
                                            <button class=\"btn social-evernote  waves-effect waves-classic\">{{ 'Enregistrer'|trans }}</button>
                                        </div>
                                        <div class=\"col-lg-6 text-left\">
                                            <a  href=\"{{ path('coupon_index') }}\"  style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">{{ 'back'|trans }}</a>
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

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
    <script>
        //  divcoupon_montant divcoupon_pourcentage
        \$('input[type=radio][name=\"coupon[type]\"]').change(function() {
            if (this.value === '1') {
                //   coupon_pourcentage.hide
                // \$(\"#coupon_pourcentage\").hide()
                //\$(\"#coupon_montant\").show()
                \$(\"#divcoupon_montant\").show()
                \$(\"#divcoupon_pourcentage\").hide()

            }
            else if (this.value === '2') {
                //coupon_montant.hide
                //  \$(\"#coupon_pourcentage\").show()
                // \$(\"#coupon_montant\").hide()

                \$(\"#divcoupon_montant\").hide()
                \$(\"#divcoupon_pourcentage\").show()


            }
        });



        \$(document).ready (function()
        {
            ////coupon_pourcentage

            if (\$(\"input[name='coupon[type]']:checked\").val()==='1'){
                \$(\"#divcoupon_pourcentage\").hide()
            }

            ////coupon_montant
            if (\$(\"input[name='coupon[type]']:checked\").val()==='2'){
                \$(\"#divcoupon_montant\").hide()
            }

        });


    </script>
{% endblock %}
", "@Backend/gestionnaire/coupon/edit.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gestionnaire\\coupon\\edit.html.twig");
    }
}
