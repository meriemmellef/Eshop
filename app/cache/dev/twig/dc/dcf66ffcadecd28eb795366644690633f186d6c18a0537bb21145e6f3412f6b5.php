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

/* @Backend/gestionnaire/coupon/new.html.twig */
class __TwigTemplate_9beeeb76fe6420b81c0216bafe07a27e879487633b1920273f8252034eefe05d extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Backend/gestionnaire/coupon/new.html.twig"));

        $this->parent = $this->loadTemplate("@Backend/layout/layout.html.twig", "@Backend/gestionnaire/coupon/new.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nouveau Coupon"), "html", null, true);
        echo " </h4>
                                <br><br>


                                <div class=\"row row-lg\">

                                    ";
        // line 19
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 20
            echo "                                        <div class=\"col-lg-12 text-center\">

                                            ";
            // line 22
            if ((($context["error"] ?? $this->getContext($context, "error")) == 1)) {
                // line 23
                echo "                                                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\">×</span>
                                                    </button>
                                                    ";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("captchincorect", [], "messages"), "html", null, true);
                echo "
                                                </div>

                                            ";
            }
            // line 31
            echo "                                        </div>
                                    ";
        }
        // line 33
        echo "                                    ";
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
        echo "  <span style=\"color: #ED0000\">*</span> :</label>
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
                                    <br> <br>

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nombre de coupons"), "html", null, true);
        echo "  <span style=\"color: #ED0000\">*</span> :</label>
                                            </div>

                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbrcoupon", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbrcoupon", []), 'errors');
        echo "
                                            </div>


                                        </div>
                                    </div>
                                    <br> <br>
                                    <div class=\"col-lg-12\">

                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>Type  <span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", []), 'widget', ["attr" => ["class" => "radio-custom radio-primary"]]);
        echo "
                                                ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", []), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-12\" id=\"divcoupon_montant\" style=\"display: none\">
                                        <br><br>

                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Montant"), "html", null, true);
        echo "  :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", []), 'widget', ["attr" => ["class" => "form-control", "type" => "number"]]);
        echo "
                                                ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", []), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-12\" id=\"divcoupon_pourcentage\" style=\"display: none\">
                                        <br><br>

                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pourcentage"), "html", null, true);
        echo "  :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pourcentage", []), 'widget', ["attr" => ["class" => "form-control", "type" => "number"]]);
        echo "
                                                ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pourcentage", []), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>

                                    ";
        // line 122
        echo "

                                    <br><br>



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
                                            <button class=\"btn social-evernote  waves-effect waves-classic\" value=\"submit\">";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrer"), "html", null, true);
        echo "</button>
                                        </div>
                                        <div class=\"col-lg-6 text-left\">
                                            <a href=\"";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_index");
        echo "\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back"), "html", null, true);
        echo "</a>
                                        </div>
                                    </div>
                                    ";
        // line 162
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

    // line 177
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 178
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
        return "@Backend/gestionnaire/coupon/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 178,  290 => 177,  268 => 162,  260 => 159,  254 => 156,  218 => 122,  209 => 100,  205 => 99,  199 => 96,  186 => 86,  182 => 85,  176 => 82,  163 => 72,  159 => 71,  142 => 57,  138 => 56,  131 => 52,  119 => 43,  115 => 42,  109 => 39,  102 => 35,  96 => 33,  92 => 31,  85 => 27,  79 => 23,  77 => 22,  73 => 20,  71 => 19,  62 => 13,  52 => 5,  46 => 4,  30 => 1,);
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
                                <h4 class=\"example-title\">{{ \"Nouveau Coupon\"|trans }} </h4>
                                <br><br>


                                <div class=\"row row-lg\">

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
                                    {{ form_start(form, {'attr': {'class': 'col-lg-12 '}}) }}

                                    <input type=\"hidden\" name=\"referer\" value=\"{{app.request.headers.get('referer')}}\"/>
                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Code\"|trans }}  <span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.code, {'attr': {'class': 'form-control'}}) }}
                                                {{ form_errors(form.code) }}
                                            </div>
                                        </div>
                                    </div>
                                    <br> <br>

                                    <div class=\"col-lg-12\">
                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Nombre de coupons\"|trans }}  <span style=\"color: #ED0000\">*</span> :</label>
                                            </div>

                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.nbrcoupon, {'attr': {'class': 'form-control',}}) }}
                                                {{ form_errors(form.nbrcoupon) }}
                                            </div>


                                        </div>
                                    </div>
                                    <br> <br>
                                    <div class=\"col-lg-12\">

                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>Type  <span style=\"color: #ED0000\">*</span> :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.type, {'attr': {'class': 'radio-custom radio-primary'}}) }}
                                                {{ form_errors(form.type, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-12\" id=\"divcoupon_montant\" style=\"display: none\">
                                        <br><br>

                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Montant\"|trans }}  :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.montant, {'attr': {'class': 'form-control','type':'number'}}) }}
                                                {{ form_errors(form.montant, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-12\" id=\"divcoupon_pourcentage\" style=\"display: none\">
                                        <br><br>

                                        <div class=\"row row-lg\">
                                            <div class=\"col-lg-3 text-right\">
                                                <label>{{ \"Pourcentage\"|trans }}  :</label>
                                            </div>
                                            <div class=\"col-lg-6 text-left\">
                                                {{ form_widget(form.pourcentage, {'attr': {'class': 'form-control','type':'number'}}) }}
                                                {{ form_errors(form.pourcentage, {'attr': {'class': 'form-control'}}) }}
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>

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
                                            <button class=\"btn social-evernote  waves-effect waves-classic\" value=\"submit\">{{ 'Enregistrer'|trans }}</button>
                                        </div>
                                        <div class=\"col-lg-6 text-left\">
                                            <a href=\"{{ path('coupon_index') }}\" style=\" background-color: #ed0000 !important;  border-color: #ed0000!important;\"  class=\"btn   btn-danger waves-effect waves-classic\">{{ 'back'|trans }}</a>
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
", "@Backend/gestionnaire/coupon/new.html.twig", "C:\\wamp64\\www\\eshop\\src\\BackendBundle\\Resources\\views\\gestionnaire\\coupon\\new.html.twig");
    }
}
