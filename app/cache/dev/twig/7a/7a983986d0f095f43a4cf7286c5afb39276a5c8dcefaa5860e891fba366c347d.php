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

/* EasyAdminBundle:default:menu.html.twig */
class __TwigTemplate_8d1b937c80fc2071eb4560d466cb28740d0e7e30482f423723ce96779dd2e3f5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'main_menu_before' => [$this, 'block_main_menu_before'],
            'main_menu' => [$this, 'block_main_menu'],
            'main_menu_after' => [$this, 'block_main_menu_after'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        // line 28
        echo "
";
        // line 29
        $context["helper"] = $this;
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 32
        echo "
<ul class=\"sidebar-menu\">
    ";
        // line 34
        $this->displayBlock('main_menu', $context, $blocks);
        // line 72
        echo "</ul>

";
        // line 74
        $this->displayBlock('main_menu_after', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_main_menu_before($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_before"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_main_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu"));

        // line 35
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.menu"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "            
            ";
            // line 37
            if ( !twig_test_empty((($this->getAttribute($context["item"], "level", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "level", []), [])) : ([])))) {
                echo "                
                ";
                // line 38
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["item"], "level", []))) {
                    // line 39
                    echo "                    <li class=\"";
                    echo ((($this->getAttribute($context["item"], "type", []) == "divider")) ? ("header") : (""));
                    echo " ";
                    echo (( !twig_test_empty($this->getAttribute($context["item"], "children", []))) ? ("treeview") : (""));
                    echo " ";
                    echo ((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "menuIndex"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "menuIndex"], "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", []))) ? ("active") : (""));
                    echo " ";
                    echo ((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "submenuIndex"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "submenuIndex"], "method"),  -1)) : ( -1)) !=  -1)) ? ("submenu-active") : (""));
                    echo "\">
                        ";
                    // line 40
                    echo $context["helper"]->getrender_menu_item($context["item"]);
                    echo "

                        ";
                    // line 42
                    if ( !twig_test_empty((($this->getAttribute($context["item"], "children", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "children", []), [])) : ([])))) {
                        // line 43
                        echo "                            <ul class=\"treeview-menu\">
                                ";
                        // line 44
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "children", []));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                            // line 45
                            echo "                                    <li class=\"";
                            echo ((($this->getAttribute($context["subitem"], "type", []) == "divider")) ? ("header") : (""));
                            echo " ";
                            echo (((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "menuIndex"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "menuIndex"], "method"),  -1)) : ( -1)) == $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", []), "loop", []), "index0", [])) && ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "submenuIndex"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "submenuIndex"], "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", [])))) ? ("active") : (""));
                            echo "\">
                                        ";
                            // line 46
                            echo $context["helper"]->getrender_menu_item($context["subitem"]);
                            echo "
                                    </li>
                                ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 49
                        echo "                            </ul>
                        ";
                    }
                    // line 51
                    echo "                    </li>
                    ";
                } else {
                    // line 53
                    echo "                        
                    ";
                }
                // line 55
                echo "            ";
            } else {
                // line 56
                echo "                <li class=\"";
                echo ((($this->getAttribute($context["item"], "type", []) == "divider")) ? ("header") : (""));
                echo " ";
                echo (( !twig_test_empty($this->getAttribute($context["item"], "children", []))) ? ("treeview") : (""));
                echo " ";
                echo ((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "menuIndex"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "menuIndex"], "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", []))) ? ("active") : (""));
                echo " ";
                echo ((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "submenuIndex"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "submenuIndex"], "method"),  -1)) : ( -1)) !=  -1)) ? ("submenu-active") : (""));
                echo "\">
                        ";
                // line 57
                echo $context["helper"]->getrender_menu_item($context["item"]);
                echo "

                        ";
                // line 59
                if ( !twig_test_empty((($this->getAttribute($context["item"], "children", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "children", []), [])) : ([])))) {
                    // line 60
                    echo "                            <ul class=\"treeview-menu\">
                                ";
                    // line 61
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "children", []));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 62
                        echo "                                    <li class=\"";
                        echo ((($this->getAttribute($context["subitem"], "type", []) == "divider")) ? ("header") : (""));
                        echo " ";
                        echo (((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "menuIndex"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "menuIndex"], "method"),  -1)) : ( -1)) == $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", []), "loop", []), "index0", [])) && ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "submenuIndex"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "submenuIndex"], "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", [])))) ? ("active") : (""));
                        echo "\">
                                        ";
                        // line 63
                        echo $context["helper"]->getrender_menu_item($context["subitem"]);
                        echo "
                                    </li>
                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 66
                    echo "                            </ul>
                        ";
                }
                // line 68
                echo "                    </li>
            ";
            }
            // line 70
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 74
    public function block_main_menu_after($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_after"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function getrender_menu_item($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 2
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "type", []) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", [])), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = ["menuIndex" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "menu_index", []), "submenuIndex" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "submenu_index", [])];
                // line 6
                echo "        ";
                $context["path"] = ((($this->getAttribute(                // line 7
($context["item"] ?? $this->getContext($context, "item")), "type", []) == "link")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "url", [])) : (((($this->getAttribute(                // line 8
($context["item"] ?? $this->getContext($context, "item")), "type", []) == "route")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", []), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "params", []))) : (((($this->getAttribute(                // line 9
($context["item"] ?? $this->getContext($context, "item")), "type", []) == "entity")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(twig_array_merge(["entity" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "entity", []), "action" => "list"], ($context["menu_params"] ?? $this->getContext($context, "menu_params"))), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "params", [])))) : (((($this->getAttribute(                // line 10
($context["item"] ?? $this->getContext($context, "item")), "type", []) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "type", []) == "route") && (is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["path"] ?? $this->getContext($context, "path"))) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin")) && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", []), twig_array_merge(($context["menu_params"] ?? $this->getContext($context, "menu_params")), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "params", [])));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
                echo "\" ";
                if ((($this->getAttribute(($context["item"] ?? null), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "target", []), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "target", []), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 22
                if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "icon", []))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "icon", []), "html", null, true);
                    echo "\"></i>";
                }
                // line 23
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", [])), "html", null, true);
                echo "</span>
            ";
                // line 24
                if ( !twig_test_empty((($this->getAttribute(($context["item"] ?? null), "children", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "children", []), [])) : ([])))) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 25
                echo "        </a>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 25,  356 => 24,  351 => 23,  345 => 22,  335 => 21,  332 => 20,  329 => 19,  326 => 18,  323 => 17,  320 => 12,  318 => 10,  317 => 9,  316 => 8,  315 => 7,  313 => 6,  310 => 5,  304 => 3,  301 => 2,  286 => 1,  275 => 74,  268 => 71,  254 => 70,  250 => 68,  246 => 66,  229 => 63,  222 => 62,  205 => 61,  202 => 60,  200 => 59,  195 => 57,  184 => 56,  181 => 55,  177 => 53,  173 => 51,  169 => 49,  152 => 46,  145 => 45,  128 => 44,  125 => 43,  123 => 42,  118 => 40,  107 => 39,  105 => 38,  101 => 37,  98 => 36,  80 => 35,  74 => 34,  63 => 31,  56 => 74,  52 => 72,  50 => 34,  46 => 32,  44 => 31,  41 => 30,  39 => 29,  36 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro render_menu_item(item) %}
    {% if item.type == 'divider' %}
        {{ item.label|trans }}
    {% else %}
        {% set menu_params = { menuIndex: item.menu_index, submenuIndex: item.submenu_index } %}
        {% set path =
            item.type == 'link' ? item.url :
            item.type == 'route' ? path(item.route, item.params) :
            item.type == 'entity' ? path('easyadmin', { entity: item.entity, action: 'list' }|merge(menu_params)|merge(item.params)) :
            item.type == 'empty' ? '#' : ''
        %}

        {# if the URL generated for the route belongs to the backend, regenerate
           the URL to include the menu_params to display the selected menu item
           (this is checked comparing the beginning of the route URL with the backend homepage URL)
        #}
        {% if item.type == 'route' and (path starts with path('easyadmin')) %}
            {% set path = path(item.route, menu_params|merge(item.params)) %}
        {% endif %}

        <a href=\"{{ path }}\" {% if item.target|default(false) %}target=\"{{ item.target }}\"{% endif %}>
            {% if item.icon is not empty %}<i class=\"fa {{ item.icon }}\"></i>{% endif %}
            <span>{{ item.label|trans }}</span>
            {% if item.children|default([]) is not empty %}<i class=\"fa fa-angle-left pull-right\"></i>{% endif %}
        </a>
    {% endif %}
{% endmacro %}

{% import _self as helper %}

{% block main_menu_before %}{% endblock %}

<ul class=\"sidebar-menu\">
    {% block main_menu %}
        {% for item in easyadmin_config('design.menu') %}
            
            {% if item.level|default([]) is not empty %}                
                {% if is_granted(item.level) %}
                    <li class=\"{{ item.type == 'divider' ? 'header' }} {{ item.children is not empty ? 'treeview' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.index0 ? 'active' }} {{ app.request.query.get('submenuIndex')|default(-1) != -1 ? 'submenu-active' }}\">
                        {{ helper.render_menu_item(item) }}

                        {% if item.children|default([]) is not empty %}
                            <ul class=\"treeview-menu\">
                                {% for subitem in item.children %}
                                    <li class=\"{{ subitem.type == 'divider' ? 'header' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.parent.loop.index0 and app.request.query.get('submenuIndex')|default(-1) == loop.index0 ? 'active' }}\">
                                        {{ helper.render_menu_item(subitem) }}
                                    </li>
                                {% endfor %}
                            </ul>
                        {% endif %}
                    </li>
                    {% else %}
                        
                    {% endif %}
            {% else %}
                <li class=\"{{ item.type == 'divider' ? 'header' }} {{ item.children is not empty ? 'treeview' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.index0 ? 'active' }} {{ app.request.query.get('submenuIndex')|default(-1) != -1 ? 'submenu-active' }}\">
                        {{ helper.render_menu_item(item) }}

                        {% if item.children|default([]) is not empty %}
                            <ul class=\"treeview-menu\">
                                {% for subitem in item.children %}
                                    <li class=\"{{ subitem.type == 'divider' ? 'header' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.parent.loop.index0 and app.request.query.get('submenuIndex')|default(-1) == loop.index0 ? 'active' }}\">
                                        {{ helper.render_menu_item(subitem) }}
                                    </li>
                                {% endfor %}
                            </ul>
                        {% endif %}
                    </li>
            {% endif %}
        {% endfor %}
    {% endblock main_menu %}
</ul>

{% block main_menu_after %}{% endblock %}
", "EasyAdminBundle:default:menu.html.twig", "C:\\wamp64\\www\\eshop\\app/Resources/EasyAdminBundle/views/default/menu.html.twig");
    }
}
