<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* cart/index.html.twig */
class __TwigTemplate_dcb49eb1c2d19d20a28b17aaae9742ce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container my-5\">
        <h1>Mon panier</h1>

        <div class=\"row\">

            <div class=\"col-md-8\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "                    <div class=\"row mt-2\">
                        <div class=\"col-md-2\">
                            <img src=\"/uploads/";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "object", [], "any", false, false, false, 14), "illustration", [], "any", false, false, false, 14), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "object", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"col-md-6\">
                            <strong>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "object", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "</strong>
                            <span class=\"d-block small\">Prix unitaire : ";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "object", [], "any", false, false, false, 18), "pricewt", [], "any", false, false, false, 18)), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col-md-2 text-right\">
                            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_decrease", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "object", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">-</a> <span class=\"badge text-bg-secondary\">x";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 21), "html", null, true);
            echo "</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "object", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">+</a>
                        </div>
                        <div class=\"col-md-2\">
                            <strong>";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 24) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "object", [], "any", false, false, false, 24), "pricewt", [], "any", false, false, false, 24))), "html", null, true);
            echo "</strong>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_remove");
        echo "\" class=\"small d-block mt-3\">Vider le panier</a>
            </div>

            <div class=\"col-md-4\">
                <div class=\"bg-light p-3\">
                    <div class=\"d-flex justify-content-between\">
                        <span class=\"fw-bold\">Total produit</span>
                        <span>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["fullCartQuantity"]) || array_key_exists("fullCartQuantity", $context) ? $context["fullCartQuantity"] : (function () { throw new RuntimeError('Variable "fullCartQuantity" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"d-flex justify-content-between mt-3\">
                        <span class=\"fw-bold\">Prix total T.T.C</span>
                        <span>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice((isset($context["totalWt"]) || array_key_exists("totalWt", $context) ? $context["totalWt"] : (function () { throw new RuntimeError('Variable "totalWt" does not exist.', 39, $this->source); })())), "html", null, true);
        echo "</span>
                    </div>
                    <div>
                        <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
        echo "\" class=\"btn btn-success w-100 mt-3\">Commander</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 42,  141 => 39,  134 => 35,  123 => 28,  113 => 24,  103 => 21,  97 => 18,  93 => 17,  85 => 14,  81 => 12,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container my-5\">
        <h1>Mon panier</h1>

        <div class=\"row\">

            <div class=\"col-md-8\">
                {% for product in cart %}
                    <div class=\"row mt-2\">
                        <div class=\"col-md-2\">
                            <img src=\"/uploads/{{ product.object.illustration }}\" class=\"img-fluid\" alt=\"{{ product.object.name }}\">
                        </div>
                        <div class=\"col-md-6\">
                            <strong>{{ product.object.name }}</strong>
                            <span class=\"d-block small\">Prix unitaire : {{ product.object.pricewt|price }}</span>
                        </div>
                        <div class=\"col-md-2 text-right\">
                            <a href=\"{{ path('app_cart_decrease', { id : product.object.id } ) }}\">-</a> <span class=\"badge text-bg-secondary\">x{{ product.qty }}</span> <a href=\"{{ path('app_cart_add', { id : product.object.id } ) }}\">+</a>
                        </div>
                        <div class=\"col-md-2\">
                            <strong>{{ (product.qty * product.object.pricewt)|price }}</strong>
                        </div>
                    </div>
                {% endfor %}
                <a href=\"{{ path('app_cart_remove') }}\" class=\"small d-block mt-3\">Vider le panier</a>
            </div>

            <div class=\"col-md-4\">
                <div class=\"bg-light p-3\">
                    <div class=\"d-flex justify-content-between\">
                        <span class=\"fw-bold\">Total produit</span>
                        <span>{{ fullCartQuantity }}</span>
                    </div>
                    <div class=\"d-flex justify-content-between mt-3\">
                        <span class=\"fw-bold\">Prix total T.T.C</span>
                        <span>{{ totalWt|price }}</span>
                    </div>
                    <div>
                        <a href=\"{{ path('app_order') }}\" class=\"btn btn-success w-100 mt-3\">Commander</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

{% endblock %}
", "cart/index.html.twig", "C:\\la-boutique-francaise-2023-2024\\templates\\cart\\index.html.twig");
    }
}
