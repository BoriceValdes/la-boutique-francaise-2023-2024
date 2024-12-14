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

/* home/index.html.twig */
class __TwigTemplate_0be1bbc6947648fdb28553395b391c50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        echo "    <div id=\"myCarousel\" class=\"carousel slide mb-6\" data-bs-ride=\"carousel\">
        <div class=\"carousel-indicators\">
            ";
        // line 6
        if ((twig_length_filter($this->env, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 6, $this->source); })())) > 1)) {
            // line 7
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 8
                echo "                    <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (($context["key"] == 0)) {
                    echo "class=\"active\" aria-current=\"true\"";
                }
                echo " aria-label=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "title", [], "any", false, false, false, 8), "html", null, true);
                echo "\"></button>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "            ";
        }
        // line 11
        echo "        </div>
        <div class=\"carousel-inner\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["header"]) {
            // line 14
            echo "                <div class=\"carousel-item ";
            if (($context["key"] == 0)) {
                echo "active";
            }
            echo "\">
                    <img src=\"/uploads/";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "illustration", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"/></img>
                    <div class=\"container\">
                        <div class=\"carousel-caption text-start\">
                            <h1>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo "</h1>
                            <p class=\"opacity-75\">
                                ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 20), "html", null, true);
            echo "
                            </p>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "buttonLink", [], "any", false, false, false, 22), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "buttonTitle", [], "any", false, false, false, 22), "html", null, true);
            echo "</a></p>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>
        ";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 28, $this->source); })())) > 1)) {
            // line 29
            echo "            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        ";
        }
        // line 38
        echo "    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing\">

        <!-- Three columns of text below the carousel -->
        <div class=\"row\">

            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productsInHomepage"]) || array_key_exists("productsInHomepage", $context) ? $context["productsInHomepage"] : (function () { throw new RuntimeError('Variable "productsInHomepage" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 51
            echo "                <div class=\"col-lg-4\">
                    <img src=\"/uploads/";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "illustration", [], "any", false, false, false, 52), "html", null, true);
            echo "\" class=\"img-fluid\">
                    <h2 class=\"fw-normal mt-2\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "</h2>
                    <div style=\"font-size: 14px;\">
                        ";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 55);
            echo "
                    </div>
                    <p><a class=\"btn btn-secondary mt-2\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">Découvrir</a></p>
                </div><!-- /.col-lg-4 -->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7\">
                <h2 class=\"featurette-heading fw-normal lh-1\">First featurette heading. <span class=\"text-body-secondary\">It’ll blow your mind.</span></h2>
                <p class=\"lead\">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
            </div>
            <div class=\"col-md-5\">
                <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 500x500\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-bg)\"/><text x=\"50%\" y=\"50%\" fill=\"var(--bs-secondary-color)\" dy=\".3em\">500x500</text></svg>
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7 order-md-2\">
                <h2 class=\"featurette-heading fw-normal lh-1\">Oh yeah, it’s that good. <span class=\"text-body-secondary\">See for yourself.</span></h2>
                <p class=\"lead\">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class=\"col-md-5 order-md-1\">
                <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 500x500\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-bg)\"/><text x=\"50%\" y=\"50%\" fill=\"var(--bs-secondary-color)\" dy=\".3em\">500x500</text></svg>
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7\">
                <h2 class=\"featurette-heading fw-normal lh-1\">And lastly, this one. <span class=\"text-body-secondary\">Checkmate.</span></h2>
                <p class=\"lead\">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
            </div>
            <div class=\"col-md-5\">
                <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 500x500\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-bg)\"/><text x=\"50%\" y=\"50%\" fill=\"var(--bs-secondary-color)\" dy=\".3em\">500x500</text></svg>
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 60,  192 => 57,  187 => 55,  182 => 53,  178 => 52,  175 => 51,  171 => 50,  157 => 38,  146 => 29,  144 => 28,  141 => 27,  128 => 22,  123 => 20,  118 => 18,  112 => 15,  105 => 14,  101 => 13,  97 => 11,  94 => 10,  79 => 8,  74 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"myCarousel\" class=\"carousel slide mb-6\" data-bs-ride=\"carousel\">
        <div class=\"carousel-indicators\">
            {% if headers|length > 1 %}
                {% for key,header in headers %}
                    <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"{{ key }}\" {% if key == 0 %}class=\"active\" aria-current=\"true\"{% endif %} aria-label=\"{{ header.title }}\"></button>
                {% endfor %}
            {% endif %}
        </div>
        <div class=\"carousel-inner\">
            {% for key,header in headers %}
                <div class=\"carousel-item {% if key == 0 %}active{% endif %}\">
                    <img src=\"/uploads/{{ header.illustration }}\" class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"/></img>
                    <div class=\"container\">
                        <div class=\"carousel-caption text-start\">
                            <h1>{{ header.title }}</h1>
                            <p class=\"opacity-75\">
                                {{ header.content }}
                            </p>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"{{ header.buttonLink }}\">{{ header.buttonTitle }}</a></p>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
        {% if headers|length > 1 %}
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        {% endif %}
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing\">

        <!-- Three columns of text below the carousel -->
        <div class=\"row\">

            {% for product in productsInHomepage %}
                <div class=\"col-lg-4\">
                    <img src=\"/uploads/{{ product.illustration }}\" class=\"img-fluid\">
                    <h2 class=\"fw-normal mt-2\">{{ product.name }}</h2>
                    <div style=\"font-size: 14px;\">
                        {{ product.description|raw }}
                    </div>
                    <p><a class=\"btn btn-secondary mt-2\" href=\"{{ path('app_product', { slug : product.slug } ) }}\">Découvrir</a></p>
                </div><!-- /.col-lg-4 -->
            {% endfor %}

        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7\">
                <h2 class=\"featurette-heading fw-normal lh-1\">First featurette heading. <span class=\"text-body-secondary\">It’ll blow your mind.</span></h2>
                <p class=\"lead\">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
            </div>
            <div class=\"col-md-5\">
                <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 500x500\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-bg)\"/><text x=\"50%\" y=\"50%\" fill=\"var(--bs-secondary-color)\" dy=\".3em\">500x500</text></svg>
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7 order-md-2\">
                <h2 class=\"featurette-heading fw-normal lh-1\">Oh yeah, it’s that good. <span class=\"text-body-secondary\">See for yourself.</span></h2>
                <p class=\"lead\">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class=\"col-md-5 order-md-1\">
                <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 500x500\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-bg)\"/><text x=\"50%\" y=\"50%\" fill=\"var(--bs-secondary-color)\" dy=\".3em\">500x500</text></svg>
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7\">
                <h2 class=\"featurette-heading fw-normal lh-1\">And lastly, this one. <span class=\"text-body-secondary\">Checkmate.</span></h2>
                <p class=\"lead\">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
            </div>
            <div class=\"col-md-5\">
                <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 500x500\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-bg)\"/><text x=\"50%\" y=\"50%\" fill=\"var(--bs-secondary-color)\" dy=\".3em\">500x500</text></svg>
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
{% endblock %}

", "home/index.html.twig", "C:\\la-boutique-francaise-2023-2024\\templates\\home\\index.html.twig");
    }
}
