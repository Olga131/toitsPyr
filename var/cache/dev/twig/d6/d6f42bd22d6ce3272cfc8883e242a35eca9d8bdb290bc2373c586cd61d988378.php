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

/* nos_realisations/categorie.html.twig */
class __TwigTemplate_0d30b7e1f70a1f30e7330fb7a9c15c82c1dfa0ef817dbbaa5260f75aeab73c91 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nos_realisations/categorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nos_realisations/categorie.html.twig"));

        // line 1
        echo "<div>
    <div class=\"ligne_yellow full\">
        <h3 style=\"margin-left: 0 !important;\">";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "</h3>
    </div>

    <div class=\"container\">
        <div class=\"row justify-content-center\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 9
            echo "                <div class=\"article-card gx-3 card col-auto no-padding d-inline-block mb-3\">
                    ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 10)) {
                // line 11
                echo "                        <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 11))), "html", null, true);
                echo "\"/>
                    ";
            }
            // line 13
            echo "                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 14), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["article"], "contenu", [], "any", false, false, false, 15);
            echo "</p>
                        <p class=\"card-text\">
                            <small class=\"text-muted\">
                                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "tag", [], "any", false, false, false, 18), "getValues", [], "method", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 19
                echo "                                    #";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "nom", [], "any", false, false, false, 19), "html", null, true);
                echo "&nbsp;
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                            </small>
                        </p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "nos_realisations/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 26,  96 => 21,  87 => 19,  83 => 18,  77 => 15,  73 => 14,  70 => 13,  64 => 11,  62 => 10,  59 => 9,  55 => 8,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <div class=\"ligne_yellow full\">
        <h3 style=\"margin-left: 0 !important;\">{{ titre }}</h3>
    </div>

    <div class=\"container\">
        <div class=\"row justify-content-center\">
            {% for article in articles %}
                <div class=\"article-card gx-3 card col-auto no-padding d-inline-block mb-3\">
                    {% if article.image %}
                        <img class=\"card-img-top\" src=\"{{ asset('uploads/' ~ article.image) }}\"/>
                    {% endif %}
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ article.titre }}</h5>
                        <p class=\"card-text\">{{ article.contenu|raw }}</p>
                        <p class=\"card-text\">
                            <small class=\"text-muted\">
                                {% for tag in article.tag.getValues() %}
                                    #{{ tag.nom }}&nbsp;
                                {% endfor %}
                            </small>
                        </p>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
", "nos_realisations/categorie.html.twig", "/var/www/html/symfony/ToitsPyr/templates/nos_realisations/categorie.html.twig");
    }
}
