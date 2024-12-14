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

/* product/index.html.twig */
class __TwigTemplate_9fddeb1d420815d3a547a0b05a4ef015 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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

        <div class=\"row\">
            <div class=\"col-md-6\">
                <img src=\"/uploads/";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "illustration", [], "any", false, false, false, 9), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-6\">
                <small><i><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "category", [], "any", false, false, false, 12), "slug", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "category", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</a> > ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</i></small>
                <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
                <span class=\"d-block mb-3\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "pricewt", [], "any", false, false, false, 14)), "html", null, true);
        echo "</span>
                ";
        // line 15
        echo twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15);
        echo "
                <div class=\"d-flex align-items-center justify-content-between mt-3\">
                    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "\" class=\"btn btn-success w-100\">Ajouter au panier</a>

                    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) {
            // line 20
            echo "                        ";
            if (twig_in_filter((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "wishlists", [], "any", false, false, false, 20))) {
                // line 21
                echo "                            <a class=\"wishlist-icon wishlist-icon-active\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_wishlist_remove", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\" style=\"margin-left: 10px;\">
                                <i data-feather=\"heart\"></i>
                            </a>
                        ";
            } else {
                // line 25
                echo "                            <a class=\"wishlist-icon\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_wishlist_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\" style=\"margin-left: 10px;\">
                                <i data-feather=\"heart\"></i>
                            </a>
                        ";
            }
            // line 29
            echo "                    ";
        } else {
            // line 30
            echo "                        <a data-bs-toggle=\"collapse\" href=\"#collapseExample\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\" style=\"margin-left: 10px;\">
                            <i data-feather=\"heart\"></i>
                        </a>
                    ";
        }
        // line 34
        echo "                </div>

                <div class=\"collapse\" id=\"collapseExample\">
                    <div class=\"mt-2\">
                        Pour utiliser les avantages de la Wishlist, <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">connectez-vous</a> ou <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">créez votre compte</a> client.
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
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 38,  139 => 34,  133 => 30,  130 => 29,  122 => 25,  114 => 21,  111 => 20,  109 => 19,  104 => 17,  99 => 15,  95 => 14,  91 => 13,  83 => 12,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container my-5\">

        <div class=\"row\">
            <div class=\"col-md-6\">
                <img src=\"/uploads/{{ product.illustration }}\" class=\"img-fluid\" alt=\"{{ product.name }}\">
            </div>
            <div class=\"col-md-6\">
                <small><i><a href=\"{{ path('app_category', { slug : product.category.slug } ) }}\">{{ product.category.name }}</a> > {{ product.name }}</i></small>
                <h1>{{ product.name }}</h1>
                <span class=\"d-block mb-3\">{{ product.pricewt|price }}</span>
                {{ product.description|raw }}
                <div class=\"d-flex align-items-center justify-content-between mt-3\">
                    <a href=\"{{ path('app_cart_add', { id : product.id } ) }}\" class=\"btn btn-success w-100\">Ajouter au panier</a>

                    {% if app.user %}
                        {% if product in app.user.wishlists %}
                            <a class=\"wishlist-icon wishlist-icon-active\" href=\"{{ path('app_account_wishlist_remove', { id : product.id } ) }}\" style=\"margin-left: 10px;\">
                                <i data-feather=\"heart\"></i>
                            </a>
                        {% else %}
                            <a class=\"wishlist-icon\" href=\"{{ path('app_account_wishlist_add', { id : product.id } ) }}\" style=\"margin-left: 10px;\">
                                <i data-feather=\"heart\"></i>
                            </a>
                        {% endif %}
                    {% else %}
                        <a data-bs-toggle=\"collapse\" href=\"#collapseExample\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\" style=\"margin-left: 10px;\">
                            <i data-feather=\"heart\"></i>
                        </a>
                    {% endif %}
                </div>

                <div class=\"collapse\" id=\"collapseExample\">
                    <div class=\"mt-2\">
                        Pour utiliser les avantages de la Wishlist, <a href=\"{{ path('app_login') }}\">connectez-vous</a> ou <a href=\"{{ path('app_register') }}\">créez votre compte</a> client.
                    </div>
                </div>


            </div>
        </div>

    </div>

{% endblock %}
", "product/index.html.twig", "C:\\la-boutique-francaise-2023-2024\\templates\\product\\index.html.twig");
    }
}
