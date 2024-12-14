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

/* account/_menu.html.twig */
class __TwigTemplate_b911006a726fa6dd88a4299f362f3ac7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/_menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/_menu.html.twig"));

        // line 1
        echo "<ul class=\"nav flex-column bg-light-blue\">
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\">Mes commandes</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_addresses");
        echo "\">Mes adresses</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_wishlist");
        echo "\">Ma liste de souhait</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_modify_pwd");
        echo "\">Modifier mon mot de passe</a>
    </li>
    ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 15
            echo "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Administration</a>
        </li>
    ";
        }
        // line 19
        echo "    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Me déconnecter</a>
    </li>
</ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "account/_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  81 => 19,  75 => 16,  72 => 15,  70 => 14,  65 => 12,  59 => 9,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"nav flex-column bg-light-blue\">
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_account') }}\">Mes commandes</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_account_addresses') }}\">Mes adresses</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_account_wishlist') }}\">Ma liste de souhait</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_account_modify_pwd') }}\">Modifier mon mot de passe</a>
    </li>
    {% if is_granted('ROLE_ADMIN') %}
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('admin') }}\">Administration</a>
        </li>
    {% endif %}
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Me déconnecter</a>
    </li>
</ul>
", "account/_menu.html.twig", "C:\\la-boutique-francaise-2023-2024\\templates\\account\\_menu.html.twig");
    }
}
