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

/* account/order/index.html.twig */
class __TwigTemplate_104d24082461d77e79ce39b0d37fae70 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order/index.html.twig", 1);
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
        $this->loadTemplate("account/_menu.html.twig", "account/order/index.html.twig", 10)->display($context);
        // line 11
        echo "            </div>

            <div class=\"col-md-9\">
                <small><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\" class=\"btn btn-light btn-sm\">Retour</a> <a target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invoice_customer", ["id_order" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\" class=\"btn btn-light btn-sm\">Ma facture</a></small>

                <h5 class=\"mt-4\">Ma commande n°";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</h5>
                <span>Passée le : ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "createdAt", [], "any", false, false, false, 17), "d/m/Y"), "html", null, true);
        echo "</span><br/>
                ";
        // line 18
        echo twig_include($this->env, $context, "admin/state.html.twig", ["field" => ["value" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()), "state", [], "any", false, false, false, 18)]]);
        echo "
                <br/>
                <hr>

                <div class=\"row my-4\">
                    <div class=\"col-md-6\">
                        <strong>Adresse de livraison :</strong><br/>
                        ";
        // line 25
        echo twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 25, $this->source); })()), "delivery", [], "any", false, false, false, 25);
        echo "
                    </div>
                    <div class=\"col-md-6\">
                        <strong>Transporteur</strong><br/>
                        ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()), "carrierName", [], "any", false, false, false, 29), "html", null, true);
        echo "
                    </div>
                </div>

                <hr>

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
            echo "                        <tr>
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
        echo "                    <tr>
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

                <div>
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

            </div>
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 77,  205 => 76,  201 => 75,  192 => 69,  185 => 65,  181 => 63,  172 => 60,  169 => 59,  167 => 58,  163 => 57,  159 => 56,  155 => 55,  151 => 54,  146 => 52,  142 => 50,  138 => 49,  115 => 29,  108 => 25,  98 => 18,  94 => 17,  90 => 16,  83 => 14,  78 => 11,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
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
                <small><a href=\"{{ path('app_account') }}\" class=\"btn btn-light btn-sm\">Retour</a> <a target=\"_blank\" href=\"{{ path('app_invoice_customer', { id_order : order.id }) }}\" class=\"btn btn-light btn-sm\">Ma facture</a></small>

                <h5 class=\"mt-4\">Ma commande n°{{ order.id }}</h5>
                <span>Passée le : {{ order.createdAt|date('d/m/Y') }}</span><br/>
                {{ include('admin/state.html.twig', { field : { 'value' : order.state } } ) }}
                <br/>
                <hr>

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

                <hr>

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

                <div>
                    <strong>Total H.T : </strong> {{ (order.totalWt - order.totalTva)|price }}<br/>
                    <strong>Total TVA : </strong> {{ order.totalTva|price }}<br/>
                    <strong>Total T.T.C : </strong> {{ order.totalWt|price }}
                </div>

            </div>
        </div>

    </div>

{% endblock %}", "account/order/index.html.twig", "C:\\la-boutique-francaise-2023-2024\\templates\\account\\order\\index.html.twig");
    }
}
