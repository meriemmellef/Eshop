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

/* WebBundle::error404.html.twig */
class __TwigTemplate_1f9defb194de124f055777edc8ea1250fed23a1336e191cceb319eeb00caf370 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle::error404.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\">
    </script>
    <link rel=\"stylesheet\" href=\"custom.css\">
</head>
<body>
<div class=\"container\">
    <div class=\"row text-center\">
        <div class=\"col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1\">
                    <h1 class=\"m-0\">404</h1>
                    <h6>Page not found</h6>
                    <p>Lorem ipsum dolor sit <span class=\"text-info\">amet</span>, consectetur
                        <span class=\"text-info\">adipisicing</span> elit, sed do eiusmod.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle::error404.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\">
    </script>
    <link rel=\"stylesheet\" href=\"custom.css\">
</head>
<body>
<div class=\"container\">
    <div class=\"row text-center\">
        <div class=\"col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1\">
                    <h1 class=\"m-0\">404</h1>
                    <h6>Page not found</h6>
                    <p>Lorem ipsum dolor sit <span class=\"text-info\">amet</span>, consectetur
                        <span class=\"text-info\">adipisicing</span> elit, sed do eiusmod.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>", "WebBundle::error404.html.twig", "C:\\wamp64\\www\\eshop\\src\\WebBundle/Resources/views/error404.html.twig");
    }
}
