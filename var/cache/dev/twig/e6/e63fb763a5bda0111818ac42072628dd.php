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

/* base.html.twig */
class __TwigTemplate_2b73407bd8e32d75312e0e73f3363132 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\" data-bs-theme=\"auto\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>La Boutique Française - 100% Made in France</title>
    <meta name=\"description\" content=\"La boutique spécialisée dans la fabrication Made In France\">

    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\">

    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"https://unpkg.com/feather-icons\"></script>
</head>
<body>

<header data-bs-theme=\"dark\">
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">La Boutique Française</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Accueil</a>
                    </li>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allCategories"]) || array_key_exists("allCategories", $context) ? $context["allCategories"] : (function () { throw new RuntimeError('Variable "allCategories" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 33
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </ul>
                <div class=\"speed-menu\">
                    ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)) {
            // line 40
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\"><i data-feather=\"user\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "firstname", [], "any", false, false, false, 40), "html", null, true);
            echo "</a>

                        <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_wishlist");
            echo "\">
                            <i data-feather=\"heart\"></i>
                        </a>
                    ";
        } else {
            // line 46
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i data-feather=\"user\"></i></a>
                    ";
        }
        // line 48
        echo "
                    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        echo "\">
                        <i data-feather=\"shopping-cart\"></i>
                        <span class=\"badge text-bg-light\">";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["fullCartQuantity"]) || array_key_exists("fullCartQuantity", $context) ? $context["fullCartQuantity"] : (function () { throw new RuntimeError('Variable "fullCartQuantity" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>

<main>

    <div class=\"container\">
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "flashes", [], "any", false, false, false, 62));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 63
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 64
                echo "                <div class=\"alert mt-4 alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                    ";
                // line 65
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "    </div>

    ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "

    <!-- FOOTER -->
    <footer class=\"container\">
        <p>&copy; 2017–2024 La Boutique Française <a href=\"#\">CGV</a> &middot; <a href=\"#\">CGU</a></p>
    </footer>
</main>

<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/global.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 71,  211 => 81,  207 => 80,  197 => 72,  195 => 71,  191 => 69,  185 => 68,  176 => 65,  171 => 64,  166 => 63,  162 => 62,  148 => 51,  143 => 49,  140 => 48,  134 => 46,  127 => 42,  119 => 40,  117 => 39,  113 => 37,  102 => 34,  99 => 33,  95 => 32,  90 => 30,  80 => 23,  69 => 15,  65 => 14,  59 => 11,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\" data-bs-theme=\"auto\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>La Boutique Française - 100% Made in France</title>
    <meta name=\"description\" content=\"La boutique spécialisée dans la fabrication Made In France\">

    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css') }}\">

    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('assets/css/carousel.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/custom.css') }}\" rel=\"stylesheet\">
    <script src=\"https://unpkg.com/feather-icons\"></script>
</head>
<body>

<header data-bs-theme=\"dark\">
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">La Boutique Française</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_home') }}\">Accueil</a>
                    </li>
                    {% for category in allCategories %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_category', { slug : category.slug } ) }}\">{{ category.name }}</a>
                        </li>
                    {% endfor %}
                </ul>
                <div class=\"speed-menu\">
                    {% if app.user %}
                        <a href=\"{{ path('app_account') }}\"><i data-feather=\"user\"></i> {{ app.user.firstname }}</a>

                        <a href=\"{{ path('app_account_wishlist') }}\">
                            <i data-feather=\"heart\"></i>
                        </a>
                    {% else %}
                        <a href=\"{{ path('app_login') }}\"><i data-feather=\"user\"></i></a>
                    {% endif %}

                    <a href=\"{{ path('app_cart') }}\">
                        <i data-feather=\"shopping-cart\"></i>
                        <span class=\"badge text-bg-light\">{{ fullCartQuantity }}</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>

<main>

    <div class=\"container\">
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert mt-4 alert-{{ label }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>

    {% block body %}{% endblock %}


    <!-- FOOTER -->
    <footer class=\"container\">
        <p>&copy; 2017–2024 La Boutique Française <a href=\"#\">CGV</a> &middot; <a href=\"#\">CGU</a></p>
    </footer>
</main>

<script src=\"{{ asset('assets/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/global.js') }}\"></script>
</body>
</html>
", "base.html.twig", "C:\\la-boutique-francaise-2023-2024\\templates\\base.html.twig");
    }
}
