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

/* partials/navbar.html.twig */
class __TwigTemplate_2acfdac36a3420707eb212a9a38abb327663c7667a5d4cdc015b710ad906b93b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar.html.twig"));

        // line 1
        echo "<nav class=\"menu container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-4 col-lg-4 col-md-3 col-sm-8 col-8 justify-content-center position-relative\">
                <a href=\"/\">
                    <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo.png"), "html", null, true);
        echo "\" alt=\"Toits Pyreneens Logo\" class=\"logo\">
                </a>
            </div>
            <div class=\"col-xl-8 col-lg-8 col-md-9 d-md-block d-sm-none d-none\">
                <ul>
                    <li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\" class=\"menu_li";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "attributes", [], "any", false, false, false, 10), "get", [0 => "_route"], "method", false, false, false, 10) == "app_accueil")) ? (" active") : (""));
        echo "\">Accueil</a></li>
                    <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nos_realisations");
        echo "\" class=\"menu_li";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "attributes", [], "any", false, false, false, 11), "get", [0 => "_route"], "method", false, false, false, 11) == "app_nos_realisations")) ? (" active") : (""));
        echo "\">Nos réalisations</a></li>
                    <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_clients");
        echo "\" class=\"menu_li";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "attributes", [], "any", false, false, false, 12), "get", [0 => "_route"], "method", false, false, false, 12) == "app_avis_clients")) ? (" active") : (""));
        echo "\">Avis clients</a></li>
                    <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" class=\"menu_li";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "attributes", [], "any", false, false, false, 13), "get", [0 => "_route"], "method", false, false, false, 13) == "app_contact")) ? (" active") : (""));
        echo "\">Contact</a></li>
                </ul>
            </div>

            <div class=\"col-sm-4 col-4 d-md-none d-flex justify-content-end\">
                <button id=\"menutoggle\" class=\"navbar-toggler\" type=\"button\">
                    <span class=\"navbar-toggler-icon\">
                        <svg viewBox='0 0 30 30'><path stroke='rgba(0, 0, 0, 0.55)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>
                    </span>
                </button>
            </div>
        </div>


    <div id=\"mobilemenu\" class=\"hidden\">
        <ul>
            <li><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\" class=\"menu_li";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "attributes", [], "any", false, false, false, 29), "get", [0 => "_route"], "method", false, false, false, 29) == "app_accueil")) ? (" active") : (""));
        echo "\">Accueil</a></li>
            <li><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nos_realisations");
        echo "\" class=\"menu_li";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "attributes", [], "any", false, false, false, 30), "get", [0 => "_route"], "method", false, false, false, 30) == "app_nos_realisations")) ? (" active") : (""));
        echo "\">Nos réalisations</a></li>
            <li><a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_clients");
        echo "\" class=\"menu_li";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "attributes", [], "any", false, false, false, 31), "get", [0 => "_route"], "method", false, false, false, 31) == "app_avis_clients")) ? (" active") : (""));
        echo "\">Avis clients</a></li>
            <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" class=\"menu_li";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "attributes", [], "any", false, false, false, 32), "get", [0 => "_route"], "method", false, false, false, 32) == "app_contact")) ? (" active") : (""));
        echo "\">Contact</a></li>
        </ul>
    </div>
    </nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 32,  108 => 31,  102 => 30,  96 => 29,  75 => 13,  69 => 12,  63 => 11,  57 => 10,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"menu container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-4 col-lg-4 col-md-3 col-sm-8 col-8 justify-content-center position-relative\">
                <a href=\"/\">
                    <img src=\"{{ asset('build/images/logo.png') }}\" alt=\"Toits Pyreneens Logo\" class=\"logo\">
                </a>
            </div>
            <div class=\"col-xl-8 col-lg-8 col-md-9 d-md-block d-sm-none d-none\">
                <ul>
                    <li><a href=\"{{ path('app_accueil') }}\" class=\"menu_li{{ app.request.attributes.get('_route') == 'app_accueil' ? ' active' : '' }}\">Accueil</a></li>
                    <li><a href=\"{{ path('app_nos_realisations') }}\" class=\"menu_li{{ app.request.attributes.get('_route') == 'app_nos_realisations' ? ' active' : '' }}\">Nos réalisations</a></li>
                    <li><a href=\"{{ path('app_avis_clients') }}\" class=\"menu_li{{ app.request.attributes.get('_route') == 'app_avis_clients' ? ' active' : '' }}\">Avis clients</a></li>
                    <li><a href=\"{{ path('app_contact') }}\" class=\"menu_li{{ app.request.attributes.get('_route') == 'app_contact' ? ' active' : '' }}\">Contact</a></li>
                </ul>
            </div>

            <div class=\"col-sm-4 col-4 d-md-none d-flex justify-content-end\">
                <button id=\"menutoggle\" class=\"navbar-toggler\" type=\"button\">
                    <span class=\"navbar-toggler-icon\">
                        <svg viewBox='0 0 30 30'><path stroke='rgba(0, 0, 0, 0.55)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>
                    </span>
                </button>
            </div>
        </div>


    <div id=\"mobilemenu\" class=\"hidden\">
        <ul>
            <li><a href=\"{{ path('app_accueil') }}\" class=\"menu_li{{ app.request.attributes.get('_route') == 'app_accueil' ? ' active' : '' }}\">Accueil</a></li>
            <li><a href=\"{{ path('app_nos_realisations') }}\" class=\"menu_li{{ app.request.attributes.get('_route') == 'app_nos_realisations' ? ' active' : '' }}\">Nos réalisations</a></li>
            <li><a href=\"{{ path('app_avis_clients') }}\" class=\"menu_li{{ app.request.attributes.get('_route') == 'app_avis_clients' ? ' active' : '' }}\">Avis clients</a></li>
            <li><a href=\"{{ path('app_contact') }}\" class=\"menu_li{{ app.request.attributes.get('_route') == 'app_contact' ? ' active' : '' }}\">Contact</a></li>
        </ul>
    </div>
    </nav>
", "partials/navbar.html.twig", "/var/www/html/symfony/ToitsPyr/templates/partials/navbar.html.twig");
    }
}
