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

/* account/wishlist/index.html.twig */
class __TwigTemplate_ec4893210665f25a1faf7ad8372fd854 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/wishlist/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/wishlist/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/wishlist/index.html.twig", 1);
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
        <h1>Espace membre</h1>

        <div class=\"row\">
            <div class=\"col-md-3\">
                ";
        // line 10
        $this->loadTemplate("account/_menu.html.twig", "account/wishlist/index.html.twig", 10)->display($context);
        // line 11
        echo "            </div>
            <div class=\"col-md-9\">
                <h5>Ma liste de souhait (";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "wishlists", [], "any", false, false, false, 13)), "html", null, true);
        echo ")</h5>
                ";
        // line 14
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "wishlists", [], "any", false, false, false, 14)) > 0)) {
            // line 15
            echo "                    <div class=\"row\">
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "wishlists", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 17
                echo "                            <div class=\"col-md-3 text-center\">
                                <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 18)]), "html", null, true);
                echo "\" class=\"text-decoration-none\">
                                    <img src=\"/uploads/";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "illustration", [], "any", false, false, false, 19), "html", null, true);
                echo "\" class=\"img-fluid\">
                                    <span class=\"d-block fw-bold text-black\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20), "html", null, true);
                echo "</span>
                                </a>
                                <span class=\"d-block\">";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice(twig_get_attribute($this->env, $this->source, $context["product"], "pricewt", [], "any", false, false, false, 22)), "html", null, true);
                echo "</span>
                                <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_wishlist_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\" class=\"small text-secondary\">Supprimer</a>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                    </div>
                ";
        } else {
            // line 28
            echo "                    Vous n'avez pas de produit dans votre liste de souhait.
                ";
        }
        // line 30
        echo "            </div>
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/wishlist/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 30,  128 => 28,  124 => 26,  115 => 23,  111 => 22,  106 => 20,  102 => 19,  98 => 18,  95 => 17,  91 => 16,  88 => 15,  86 => 14,  82 => 13,  78 => 11,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container my-5\">
        <h1>Espace membre</h1>

        <div class=\"row\">
            <div class=\"col-md-3\">
                {% include 'account/_menu.html.twig' %}
            </div>
            <div class=\"col-md-9\">
                <h5>Ma liste de souhait ({{ app.user.wishlists|length }})</h5>
                {% if app.user.wishlists|length > 0 %}
                    <div class=\"row\">
                        {% for product in app.user.wishlists %}
                            <div class=\"col-md-3 text-center\">
                                <a href=\"{{ path('app_product', { slug : product.slug } ) }}\" class=\"text-decoration-none\">
                                    <img src=\"/uploads/{{ product.illustration }}\" class=\"img-fluid\">
                                    <span class=\"d-block fw-bold text-black\">{{ product.name }}</span>
                                </a>
                                <span class=\"d-block\">{{ product.pricewt|price }}</span>
                                <a href=\"{{ path('app_account_wishlist_remove', { id : product.id } ) }}\" class=\"small text-secondary\">Supprimer</a>
                            </div>
                        {% endfor %}
                    </div>
                {% else %}
                    Vous n'avez pas de produit dans votre liste de souhait.
                {% endif %}
            </div>
        </div>

    </div>

{% endblock %}
", "account/wishlist/index.html.twig", "C:\\la-boutique-francaise-2023-2024\\templates\\account\\wishlist\\index.html.twig");
    }
}
