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

/* order/summary.html.twig */
class __TwigTemplate_2272a949242c9a32cc87567ee63abf3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/summary.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/summary.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/summary.html.twig", 1);
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
        <h1>Récapitulatif de ma commande</h1>

        <div class=\"row\">

            <div class=\"col-md-8\">

                <div class=\"bg-light p-3\">
                    <strong>Contenu de mon panier</strong><br/>
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 15
            echo "                        <div class=\"row mt-2\">
                            <div class=\"col-md-2\">
                                <img src=\"/uploads/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "object", [], "any", false, false, false, 17), "illustration", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "object", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-md-6\">
                                <strong>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "object", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</strong>
                                <span class=\"d-block small\">Prix unitaire : ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "object", [], "any", false, false, false, 21), "pricewt", [], "any", false, false, false, 21)), "html", null, true);
            echo "</span>
                            </div>
                            <div class=\"col-md-2 text-right\">
                                <span class=\"badge text-bg-secondary\">x";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 24), "html", null, true);
            echo "</span>
                            </div>
                            <div class=\"col-md-2\">
                                <strong>";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 27) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "object", [], "any", false, false, false, 27), "pricewt", [], "any", false, false, false, 27))), "html", null, true);
            echo "</strong>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </div>

                <div class=\"bg-light p-3 my-3\">
                    <strong>Votre adresse de livraison :</strong><br/>
                    ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 35, $this->source); })()), "addresses", [], "any", false, false, false, 35), "firstname", [], "any", false, false, false, 35), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 35, $this->source); })()), "addresses", [], "any", false, false, false, 35), "lastname", [], "any", false, false, false, 35), "html", null, true);
        echo "<br/>
                    ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 36, $this->source); })()), "addresses", [], "any", false, false, false, 36), "address", [], "any", false, false, false, 36), "html", null, true);
        echo "<br/>
                    ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 37, $this->source); })()), "addresses", [], "any", false, false, false, 37), "city", [], "any", false, false, false, 37), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 37, $this->source); })()), "addresses", [], "any", false, false, false, 37), "country", [], "any", false, false, false, 37), "html", null, true);
        echo "
                </div>

                <div class=\"bg-light p-3\">
                    <strong>Votre transporteur :</strong><br/>
                    ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 42, $this->source); })()), "carriers", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
        echo "<br/>
                    ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 43, $this->source); })()), "carriers", [], "any", false, false, false, 43), "description", [], "any", false, false, false, 43), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"col-md-4\">
                <div class=\"bg-light p-3\">
                    <div class=\"d-flex justify-content-between\">
                        <span class=\"fw-bold\">Total produit</span>
                        <span>";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["fullCartQuantity"]) || array_key_exists("fullCartQuantity", $context) ? $context["fullCartQuantity"] : (function () { throw new RuntimeError('Variable "fullCartQuantity" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"d-flex justify-content-between mt-3\">
                        <span class=\"fw-bold\">Total transporteur</span>
                        <span>";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 55, $this->source); })()), "carriers", [], "any", false, false, false, 55), "price", [], "any", false, false, false, 55)), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"d-flex justify-content-between mt-3\">
                        <span class=\"fw-bold\">Total commande</span>
                        <span>";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice(((isset($context["totalWt"]) || array_key_exists("totalWt", $context) ? $context["totalWt"] : (function () { throw new RuntimeError('Variable "totalWt" does not exist.', 59, $this->source); })()) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 59, $this->source); })()), "carriers", [], "any", false, false, false, 59), "price", [], "any", false, false, false, 59))), "html", null, true);
        echo "</span>
                    </div>
                    <div>
                        <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment", ["id_order" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)]), "html", null, true);
        echo "\" class=\"btn btn-success w-100 mt-3\">Payer</a>
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
        return "order/summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 62,  177 => 59,  170 => 55,  163 => 51,  152 => 43,  148 => 42,  138 => 37,  134 => 36,  128 => 35,  122 => 31,  112 => 27,  106 => 24,  100 => 21,  96 => 20,  88 => 17,  84 => 15,  80 => 14,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container my-5\">
        <h1>Récapitulatif de ma commande</h1>

        <div class=\"row\">

            <div class=\"col-md-8\">

                <div class=\"bg-light p-3\">
                    <strong>Contenu de mon panier</strong><br/>
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
                                <span class=\"badge text-bg-secondary\">x{{ product.qty }}</span>
                            </div>
                            <div class=\"col-md-2\">
                                <strong>{{ (product.qty * product.object.pricewt)|price }}</strong>
                            </div>
                        </div>
                    {% endfor %}
                </div>

                <div class=\"bg-light p-3 my-3\">
                    <strong>Votre adresse de livraison :</strong><br/>
                    {{ choices.addresses.firstname }} {{ choices.addresses.lastname }}<br/>
                    {{ choices.addresses.address }}<br/>
                    {{ choices.addresses.city }} - {{ choices.addresses.country }}
                </div>

                <div class=\"bg-light p-3\">
                    <strong>Votre transporteur :</strong><br/>
                    {{ choices.carriers.name }}<br/>
                    {{ choices.carriers.description }}
                </div>
            </div>

            <div class=\"col-md-4\">
                <div class=\"bg-light p-3\">
                    <div class=\"d-flex justify-content-between\">
                        <span class=\"fw-bold\">Total produit</span>
                        <span>{{ fullCartQuantity }}</span>
                    </div>
                    <div class=\"d-flex justify-content-between mt-3\">
                        <span class=\"fw-bold\">Total transporteur</span>
                        <span>{{ choices.carriers.price|price }}</span>
                    </div>
                    <div class=\"d-flex justify-content-between mt-3\">
                        <span class=\"fw-bold\">Total commande</span>
                        <span>{{ (totalWt + choices.carriers.price)|price }}</span>
                    </div>
                    <div>
                        <a href=\"{{ path('app_payment', { 'id_order' : order.id }) }}\" class=\"btn btn-success w-100 mt-3\">Payer</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

{% endblock %}
", "order/summary.html.twig", "C:\\la-boutique-francaise-2023-2024\\templates\\order\\summary.html.twig");
    }
}
