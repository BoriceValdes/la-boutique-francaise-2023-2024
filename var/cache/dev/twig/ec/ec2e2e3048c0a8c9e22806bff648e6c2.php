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

/* admin/state.html.twig */
class __TwigTemplate_fa07a4d29af502bb4936550279299468 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/state.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/state.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 1, $this->source); })()), "value", [], "any", false, false, false, 1) == 1)) {
            // line 2
            echo "    <span class=\"badge text-bg-secondary\">En attente de paiement</span>
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 3, $this->source); })()), "value", [], "any", false, false, false, 3) == 2)) {
            // line 4
            echo "    <span class=\"badge text-bg-info\">Payée</span>
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 5, $this->source); })()), "value", [], "any", false, false, false, 5) == 3)) {
            // line 6
            echo "    <span class=\"badge text-bg-warning\">En cours de préparation</span>
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 7, $this->source); })()), "value", [], "any", false, false, false, 7) == 4)) {
            // line 8
            echo "    <span class=\"badge text-bg-success\">Expédiée</span>
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 9, $this->source); })()), "value", [], "any", false, false, false, 9) == 5)) {
            // line 10
            echo "    <span class=\"badge text-bg-danger\">Annulée</span>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/state.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  63 => 9,  60 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if field.value == 1 %}
    <span class=\"badge text-bg-secondary\">En attente de paiement</span>
{% elseif field.value == 2 %}
    <span class=\"badge text-bg-info\">Payée</span>
{% elseif field.value == 3 %}
    <span class=\"badge text-bg-warning\">En cours de préparation</span>
{% elseif field.value == 4 %}
    <span class=\"badge text-bg-success\">Expédiée</span>
{% elseif field.value == 5 %}
    <span class=\"badge text-bg-danger\">Annulée</span>
{% endif %}", "admin/state.html.twig", "C:\\la-boutique-francaise-2023-2024\\templates\\admin\\state.html.twig");
    }
}
