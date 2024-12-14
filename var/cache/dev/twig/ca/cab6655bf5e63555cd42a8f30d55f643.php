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

/* admin/order.html.twig */
class __TwigTemplate_73e6fadab2087e7802af667f2845e36f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@!EasyAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order.html.twig"));

        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "admin/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <h2>Agir sur la commande</h2>
    ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "state", [], "any", false, false, false, 6) != 1)) {
            // line 7
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "&state=3\" class=\"";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 7, $this->source); })()), "state", [], "any", false, false, false, 7) == 3)) {
                echo "d-none";
            }
            echo " btn btn-light\">Commande en cours de préparation</a>
        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "&state=4\" class=\"";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })()), "state", [], "any", false, false, false, 8) == 4)) {
                echo "d-none";
            }
            echo " btn btn-light\">Commande expédiée</a>
        <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "&state=5\" class=\"";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 9, $this->source); })()), "state", [], "any", false, false, false, 9) == 5)) {
                echo "d-none";
            }
            echo " btn btn-light\">Commande annulée</a>
    ";
        } else {
            // line 11
            echo "        <p>Vous ne pouvez pas agir sur une commande qui n'est pas encore payée.</p>
    ";
        }
        // line 13
        echo "
    <hr>
    <a target=\"_blank\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invoice_admin", ["id_order" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" class=\"btn btn-light btn-sm\">Voir/Imprimer la facture</a>
    <h3 class=\"mt-2\">Commande n°";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</h3>
    ";
        // line 17
        echo twig_include($this->env, $context, "admin/state.html.twig", ["field" => ["value" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "state", [], "any", false, false, false, 17)]]);
        echo "
    <br/>
    <br/>
    <span>Passée le : ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 20, $this->source); })()), "createdAt", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true);
        echo "</span><br/>
    <span>Stripe Session Id : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 21, $this->source); })()), "stripeSessionId", [], "any", false, false, false, 21), "html", null, true);
        echo "</span>


    <div class=\"row my-4\">
        <div class=\"col-md-6\">
            <strong>Adresse de livraison :</strong><br/>
            ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 27, $this->source); })()), "delivery", [], "any", false, false, false, 27);
        echo "
        </div>
        <div class=\"col-md-6\">
            <strong>Transporteur</strong><br/>
            ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 31, $this->source); })()), "carrierName", [], "any", false, false, false, 31), "html", null, true);
        echo "
        </div>
    </div>

    <strong>Contenu de la commande :</strong><br/>

    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Illustration</th>
            <th scope=\"col\">Nom du produit</th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix unitaire H.T</th>
            <th scope=\"col\">TVA</th>
            <th scope=\"col\">Total T.T.C</th>
        </tr>
        </thead>
        <tbody>
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 49, $this->source); })()), "orderDetails", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 50
            echo "                <tr>
                    <td>
                        <img src=\"/uploads/";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productIllustration", [], "any", false, false, false, 52), "html", null, true);
            echo "\" width=\"100px\" alt=\"\">
                    </td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productName", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productQuantity", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice(twig_get_attribute($this->env, $this->source, $context["product"], "productPrice", [], "any", false, false, false, 56)), "html", null, true);
            echo "</td>
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productTva", [], "any", false, false, false, 57), "html", null, true);
            echo "%</td>
                    ";
            // line 58
            $context["coeff"] = (1 + (twig_get_attribute($this->env, $this->source, $context["product"], "productTva", [], "any", false, false, false, 58) / 100));
            // line 59
            echo "
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice(((twig_get_attribute($this->env, $this->source, $context["product"], "productPrice", [], "any", false, false, false, 60) * (isset($context["coeff"]) || array_key_exists("coeff", $context) ? $context["coeff"] : (function () { throw new RuntimeError('Variable "coeff" does not exist.', 60, $this->source); })())) * twig_get_attribute($this->env, $this->source, $context["product"], "productQuantity", [], "any", false, false, false, 60))), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            <tr>
                <td></td>
                <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 65, $this->source); })()), "carrierName", [], "any", false, false, false, 65), "html", null, true);
        echo "</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 69, $this->source); })()), "carrierPrice", [], "any", false, false, false, 69)), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <div class=\"text-right fs-5\">
        <strong>Total H.T : </strong> ";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 75, $this->source); })()), "totalWt", [], "any", false, false, false, 75) - twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 75, $this->source); })()), "totalTva", [], "any", false, false, false, 75))), "html", null, true);
        echo "<br/>
        <strong>Total TVA : </strong> ";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 76, $this->source); })()), "totalTva", [], "any", false, false, false, 76)), "html", null, true);
        echo "<br/>
        <strong>Total T.T.C : </strong> ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 77, $this->source); })()), "totalWt", [], "any", false, false, false, 77)), "html", null, true);
        echo "
    </div>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 77,  230 => 76,  226 => 75,  217 => 69,  210 => 65,  206 => 63,  197 => 60,  194 => 59,  192 => 58,  188 => 57,  184 => 56,  180 => 55,  176 => 54,  171 => 52,  167 => 50,  163 => 49,  142 => 31,  135 => 27,  126 => 21,  122 => 20,  116 => 17,  112 => 16,  108 => 15,  104 => 13,  100 => 11,  91 => 9,  83 => 8,  74 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@!EasyAdmin/layout.html.twig' %}

{% block main %}

    <h2>Agir sur la commande</h2>
    {% if order.state != 1 %}
        <a href=\"{{current_url}}&state=3\" class=\"{% if order.state == 3 %}d-none{% endif %} btn btn-light\">Commande en cours de préparation</a>
        <a href=\"{{current_url}}&state=4\" class=\"{% if order.state == 4 %}d-none{% endif %} btn btn-light\">Commande expédiée</a>
        <a href=\"{{current_url}}&state=5\" class=\"{% if order.state == 5 %}d-none{% endif %} btn btn-light\">Commande annulée</a>
    {% else %}
        <p>Vous ne pouvez pas agir sur une commande qui n'est pas encore payée.</p>
    {% endif %}

    <hr>
    <a target=\"_blank\" href=\"{{ path('app_invoice_admin', { id_order : order.id }) }}\" class=\"btn btn-light btn-sm\">Voir/Imprimer la facture</a>
    <h3 class=\"mt-2\">Commande n°{{ order.id }}</h3>
    {{ include('admin/state.html.twig', { field : { 'value' : order.state } } ) }}
    <br/>
    <br/>
    <span>Passée le : {{ order.createdAt|date('d/m/Y') }}</span><br/>
    <span>Stripe Session Id : {{ order.stripeSessionId }}</span>


    <div class=\"row my-4\">
        <div class=\"col-md-6\">
            <strong>Adresse de livraison :</strong><br/>
            {{ order.delivery|raw }}
        </div>
        <div class=\"col-md-6\">
            <strong>Transporteur</strong><br/>
            {{ order.carrierName }}
        </div>
    </div>

    <strong>Contenu de la commande :</strong><br/>

    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Illustration</th>
            <th scope=\"col\">Nom du produit</th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix unitaire H.T</th>
            <th scope=\"col\">TVA</th>
            <th scope=\"col\">Total T.T.C</th>
        </tr>
        </thead>
        <tbody>
            {% for product in order.orderDetails %}
                <tr>
                    <td>
                        <img src=\"/uploads/{{ product.productIllustration }}\" width=\"100px\" alt=\"\">
                    </td>
                    <td>{{ product.productName }}</td>
                    <td>{{ product.productQuantity }}</td>
                    <td>{{ product.productPrice|price }}</td>
                    <td>{{ product.productTva }}%</td>
                    {% set coeff = 1 + (product.productTva / 100) %}

                    <td>{{ ((product.productPrice * coeff) * product.productQuantity)|price }}</td>
                </tr>
            {% endfor %}
            <tr>
                <td></td>
                <td>{{ order.carrierName }}</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>{{ order.carrierPrice|price }}</td>
            </tr>
        </tbody>
    </table>

    <div class=\"text-right fs-5\">
        <strong>Total H.T : </strong> {{ (order.totalWt - order.totalTva)|price }}<br/>
        <strong>Total TVA : </strong> {{ order.totalTva|price }}<br/>
        <strong>Total T.T.C : </strong> {{ order.totalWt|price }}
    </div>



{% endblock %}", "admin/order.html.twig", "C:\\la-boutique-francaise-2023-2024\\templates\\admin\\order.html.twig");
    }
}
