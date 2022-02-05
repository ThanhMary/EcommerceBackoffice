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

/* include/navbar.html.twig */
class __TwigTemplate_4761458bf4d5111fcfec52a20728f1329fad23527020c4267fc3e4f3cf4476e1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\" style=\"height: 70px;\">
\t<img src=\"../../../../img/logo.jpg\" alt=\"Image\" width=\"100\" height=\"80\"/>
\t<h4>
\t\t<span id=\"title\">
\t\t\tECOMMERCE MEUBLES BACK OFFICE</span>
\t</h4>
</a>
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t<span class=\"navbar-toggler-icon\"></span>
</button>
<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t<ul class=\"navbar-nav mr-auto\">
\t\t<li class=\"nav-item active\">
\t\t\t<a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\">PRODUCTS</a>
\t\t</li>
\t\t<li class=\"nav-item active\">
\t\t\t<a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\">CATEGORIES</a>
\t\t</li>
\t\t";
        // line 36
        echo "\t</ul>
\t<div
\t\tclass=\"d-flex\" style=\"float: right; !important\">";
        // line 45
        echo "\t</div>
</div></nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 45,  69 => 36,  64 => 17,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\" style=\"height: 70px;\">
\t<img src=\"../../../../img/logo.jpg\" alt=\"Image\" width=\"100\" height=\"80\"/>
\t<h4>
\t\t<span id=\"title\">
\t\t\tECOMMERCE MEUBLES BACK OFFICE</span>
\t</h4>
</a>
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t<span class=\"navbar-toggler-icon\"></span>
</button>
<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t<ul class=\"navbar-nav mr-auto\">
\t\t<li class=\"nav-item active\">
\t\t\t<a class=\"nav-link\" href=\"{{path('product_index')}}\">PRODUCTS</a>
\t\t</li>
\t\t<li class=\"nav-item active\">
\t\t\t<a class=\"nav-link\" href=\"{{path('category_index')}}\">CATEGORIES</a>
\t\t</li>
\t\t{# {% if app.user and is_granted('ROLE_ADMIN') %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('user_index')}}\">USERS</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('module_index')}}\">MODULES</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('client_index')}}\">CLIENTS</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('category_index')}}\">CATEGORIES MODULES</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('type_client_index')}}\">TYPES CLIENTS</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %} #}
\t</ul>
\t<div
\t\tclass=\"d-flex\" style=\"float: right; !important\">{# {% if app.user %}
\t\t\t\t\t\t<ul class=\"btn-lightt\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_logout')}}\">DECONNEXION</a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_login')}}\">CONNEXION</a>
\t\t\t\t\t\t</ul>
\t\t\t\t\t{% endif %} #}
\t</div>
</div></nav>
", "include/navbar.html.twig", "C:\\Users\\thanh\\Desktop\\YNOV\\ARCHITECTURELOGICIEL\\PROJET\\ecommerce\\templates\\include\\navbar.html.twig");
    }
}
