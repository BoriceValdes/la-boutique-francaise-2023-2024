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

/* account/address/form.html.twig */
class __TwigTemplate_c13e771b247d79ee0d0760e764ba7815 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/address/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/address/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/address/form.html.twig", 1);
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
        $this->loadTemplate("account/_menu.html.twig", "account/address/form.html.twig", 10)->display($context);
        // line 11
        echo "            </div>
            <div class=\"col-md-9\">
                <h5>Mes adresses</h5>

                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
                    <div class=\"row\">
                        <div class=\"col-md-6\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 17, $this->source); })()), "firstname", [], "any", false, false, false, 17), 'row');
        echo "</div>
                        <div class=\"col-md-6\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 18, $this->source); })()), "lastname", [], "any", false, false, false, 18), 'row');
        echo "</div>
                        <div class=\"col-md-6\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 19, $this->source); })()), "address", [], "any", false, false, false, 19), 'row');
        echo "</div>
                        <div class=\"col-md-6\">";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 20, $this->source); })()), "postal", [], "any", false, false, false, 20), 'row');
        echo "</div>
                        <div class=\"col-md-6\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 21, $this->source); })()), "city", [], "any", false, false, false, 21), 'row');
        echo "</div>
                        <div class=\"col-md-6\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 22, $this->source); })()), "country", [], "any", false, false, false, 22), 'row');
        echo "</div>
                        <div class=\"col-md-6\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 23, $this->source); })()), "phone", [], "any", false, false, false, 23), 'row');
        echo "</div>
                    </div>
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 25, $this->source); })()), 'form_end');
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
        return "account/address/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  113 => 23,  109 => 22,  105 => 21,  101 => 20,  97 => 19,  93 => 18,  89 => 17,  84 => 15,  78 => 11,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
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
                <h5>Mes adresses</h5>

                {{ form_start(addressForm) }}
                    <div class=\"row\">
                        <div class=\"col-md-6\">{{ form_row(addressForm.firstname) }}</div>
                        <div class=\"col-md-6\">{{ form_row(addressForm.lastname) }}</div>
                        <div class=\"col-md-6\">{{ form_row(addressForm.address) }}</div>
                        <div class=\"col-md-6\">{{ form_row(addressForm.postal) }}</div>
                        <div class=\"col-md-6\">{{ form_row(addressForm.city) }}</div>
                        <div class=\"col-md-6\">{{ form_row(addressForm.country) }}</div>
                        <div class=\"col-md-6\">{{ form_row(addressForm.phone) }}</div>
                    </div>
                {{ form_end(addressForm) }}
            </div>
        </div>

    </div>

{% endblock %}", "account/address/form.html.twig", "C:\\la-boutique-francaise-2023-2024\\templates\\account\\address\\form.html.twig");
    }
}
