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

/* account/address/index.html.twig */
class __TwigTemplate_052db6daf830b1d1b74771de06a0ba33 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/address/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/address/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/address/index.html.twig", 1);
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
        $this->loadTemplate("account/_menu.html.twig", "account/address/index.html.twig", 10)->display($context);
        // line 11
        echo "            </div>
            <div class=\"col-md-9\">
                <div class=\"d-flex justify-content-between\">
                    <h5>Mes adresses</h5>
                    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_form");
        echo "\" class=\"btn btn-light\">Ajouter une adresse</a>
                </div>

                ";
        // line 18
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "addresses", [], "any", false, false, false, 18)) == 0)) {
            // line 19
            echo "                    <p>Vous n'avez pas encore enregistré d'adresse sur La Boutique Française.</p>
                ";
        } else {
            // line 21
            echo "                    <div class=\"row\">
                    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "addresses", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 23
                echo "                        <div class=\"col-md-4 mt-2\">
                            <div class=\"bg-light p-2 text-center\">
                                <strong>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 25), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 25), "html", null, true);
                echo "</strong><br/>
                                ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "address", [], "any", false, false, false, 26), "html", null, true);
                echo "<br/>
                                ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "postal", [], "any", false, false, false, 27), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 27), "html", null, true);
                echo "<br/>
                                ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 28), "html", null, true);
                echo "<br/>
                                <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_form", ["id" => twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\" class=\"small text-secondary\">Éditer</a>
                                <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\" class=\"small text-secondary\">Supprimer</a>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                    </div>
                ";
        }
        // line 36
        echo "
            </div>
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/address/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 36,  141 => 34,  131 => 30,  127 => 29,  123 => 28,  117 => 27,  113 => 26,  107 => 25,  103 => 23,  99 => 22,  96 => 21,  92 => 19,  90 => 18,  84 => 15,  78 => 11,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
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
                <div class=\"d-flex justify-content-between\">
                    <h5>Mes adresses</h5>
                    <a href=\"{{ path('app_account_address_form') }}\" class=\"btn btn-light\">Ajouter une adresse</a>
                </div>

                {% if app.user.addresses|length == 0 %}
                    <p>Vous n'avez pas encore enregistré d'adresse sur La Boutique Française.</p>
                {% else %}
                    <div class=\"row\">
                    {% for address in app.user.addresses %}
                        <div class=\"col-md-4 mt-2\">
                            <div class=\"bg-light p-2 text-center\">
                                <strong>{{ address.firstname }} {{ address.lastname }}</strong><br/>
                                {{ address.address }}<br/>
                                {{ address.postal }}, {{ address.city }}<br/>
                                {{ address.country }}<br/>
                                <a href=\"{{ path('app_account_address_form', { id : address.id } ) }}\" class=\"small text-secondary\">Éditer</a>
                                <a href=\"{{ path('app_account_address_delete', { id : address.id } ) }}\" class=\"small text-secondary\">Supprimer</a>
                            </div>
                        </div>
                    {% endfor %}
                    </div>
                {% endif %}

            </div>
        </div>

    </div>

{% endblock %}", "account/address/index.html.twig", "C:\\la-boutique-francaise-2023-2024\\templates\\account\\address\\index.html.twig");
    }
}
