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

/* account/index.html.twig */
class __TwigTemplate_b25408df5a11b3378f50ea2c22f25484 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/index.html.twig", 1);
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
        $this->loadTemplate("account/_menu.html.twig", "account/index.html.twig", 10)->display($context);
        // line 11
        echo "            </div>

            <div class=\"col-md-9\">
                <h5>Mes dernières commandes</h5>
                ";
        // line 15
        if ((twig_length_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 15, $this->source); })())) == 0)) {
            // line 16
            echo "                    <div class=\"alert alert-info\">
                        Vous n'avez passé aucune commande pour le moment.
                    </div>
                ";
        } else {
            // line 20
            echo "                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">N°</th>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Statut</th>
                        <th scope=\"col\">Total T.T.C</th>
                        <th scope=\"col\"></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 31, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 32
                echo "                        <tr>
                            <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                            <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 35
                echo twig_include($this->env, $context, "admin/state.html.twig", ["field" => ["value" => twig_get_attribute($this->env, $this->source, $context["order"], "state", [], "any", false, false, false, 35)]]);
                echo "</td>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice(twig_get_attribute($this->env, $this->source, $context["order"], "totalWt", [], "any", false, false, false, 36)), "html", null, true);
                echo "</td>
                            <td><a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_order", ["id_order" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\">Voir</a></td>
                        </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                    </tbody>
                </table>
                ";
        }
        // line 43
        echo "            </div>
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 43,  158 => 40,  141 => 37,  137 => 36,  133 => 35,  129 => 34,  125 => 33,  122 => 32,  105 => 31,  92 => 20,  86 => 16,  84 => 15,  78 => 11,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
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
                <h5>Mes dernières commandes</h5>
                {% if orders|length == 0 %}
                    <div class=\"alert alert-info\">
                        Vous n'avez passé aucune commande pour le moment.
                    </div>
                {% else %}
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">N°</th>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Statut</th>
                        <th scope=\"col\">Total T.T.C</th>
                        <th scope=\"col\"></th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for order in orders %}
                        <tr>
                            <td>{{ order.id }}</td>
                            <td>{{ order.createdAt|date('d/m/Y') }}</td>
                            <td>{{ include('admin/state.html.twig', { field : { 'value' : order.state } } ) }}</td>
                            <td>{{ order.totalWt|price }}</td>
                            <td><a href=\"{{ path('app_account_order', { 'id_order' : order.id } ) }}\">Voir</a></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
                {% endif %}
            </div>
        </div>

    </div>

{% endblock %}
", "account/index.html.twig", "C:\\la-boutique-francaise-2023-2024\\templates\\account\\index.html.twig");
    }
}
