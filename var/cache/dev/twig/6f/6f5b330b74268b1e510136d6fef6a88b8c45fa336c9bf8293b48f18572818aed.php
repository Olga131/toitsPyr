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

/* accueil/index.html.twig */
class __TwigTemplate_bd846fa71be2c316dd12cdc47418bdae252a78b6eb1887722e845dd9177cc73a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extendNav' => [$this, 'block_extendNav'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil – Toits Pyrènèens";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_extendNav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extendNav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extendNav"));

        // line 6
        echo "    <section class=\"container\" id=\"header_text_and_vector\">
        <div class=\"row\">
            <div class=\"col-sm-8 col-12\">
                <h1>
                    <span>T</span><span>O</span><span>I</span><span>T</span><span>S</span>&nbsp;<span>P</span><span>Y</span><span>R</span><span>É</span><span>N</span><span>É</span><span>E</span><span>N</span><span>S</span>
                </h1>
                <div class=\"topLine\">
                    <h3>Enterprise de Couverture Charpente Zinguerie à Jurançon
                    </h3>
                </div>
            </div>
            <div class=\"col-4 d-md-block d-sm-none d-none\">
                <div class=\"home_vector\"></div>
            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "    <!--les icones-->
    ";
        // line 27
        $this->loadTemplate("partials/icones.html.twig", "accueil/index.html.twig", 27)->display($context);
        // line 28
        echo "
    <!--les realisations, une grande partie ACCORDION-->
    <div class=\"ligne_yellow\"><h3>RÉALISATIONS</h3>
    </div>

    <ul class=\"Accordion\">
        <li class=\"Accordion-item\">
            <input id=\"checkboxes-menu1\" type=\"checkbox\" name=\"menu\"/>

            <div>
                <label for=\"checkboxes-menu1\"><span>Couverture</span></label>
                <ul class=\"Accordion-subElements\">
                    <li class=\"Accordion-subElement\">
                        <div class=\"accordion-contenu\">
                            <p class=\"text_realisations\">
                                Ouvrages réalisés dans les règles de l’art, que ce soit l’ardoise naturelle travaillée à la
                                main ou avec la tuile mécanique. Nous réalisons également la couverture en zinc qui bien
                                appareillée donnera au bâti la longévité et la fiabilité désirés. La terrasse zinc tasseau
                                offre une grande souplesse d’adaptation aux formes planes. Le joint debout est idéal pour
                                les couvertures de surface importante. il offre une étanchéité maximale, est esthétique,
                                moderne et constitue une réponse adaptée aux formes cintrées, complexes.

                                <br>
                                <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nos_realisations");
        echo "\">
                                    <button>Voir nos réalisations</button>
                                </a>
                            </p>
                            <div class=\"img_lien_accueil\">
                                <img class=\"img_accueil\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/acc-courverture.jpeg"), "html", null, true);
        echo "\"
                                     alt=\"couverture Pau Jurançon\">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class=\"Accordion-item\">
            <input id=\"checkboxes-menu2\" type=\"checkbox\" name=\"menu\"/>

            <div>
                <label for=\"checkboxes-menu2\"><span>Charpente</span></label>
                <ul class=\"Accordion-subElements\">
                    <li class=\"Accordion-subElement\">
                        <div class=\"accordion-contenu\">
                            <p class=\"text_realisations\">
                                Ouvrages réalisés dans les règles de l’art, que ce soit l’ardoise
                                naturelle travaillée à la main ou avec la tuile mécanique. Nous réalisons également la
                                couverture en
                                zinc qui bien appareillée donnera au bâti la longévite et la fiabilité désirés. La terrasse
                                zinc
                                tasseau offre une grande souplesse d’adaptation aux formes planes. Le joint debout est idéal
                                pour
                                les couvertures de surface importante. il offre une étanchéité maximale, est esthétique,
                                moderne
                                et
                                constitue une réponse adaptée aux formes cintrées, complexes.

                                <br>
                                <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nos_realisations");
        echo "\">
                                    <button>Voir nos réalisations</button>
                                </a>
                            </p>
                            <div class=\"img_lien_accueil\">
                                <img class=\"img_accueil\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/couver.jpg"), "html", null, true);
        echo "\"
                                     alt=\"couverture Pau Jurançon\">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class=\"Accordion-item\">
            <input id=\"checkboxes-menu21\" type=\"checkbox\" name=\"menu\"/>

            <div>
                <label for=\"checkboxes-menu21\"><span>Zinguerie</span></label>
                <ul class=\"Accordion-subElements\">
                    <li class=\"Accordion-subElement\">
                        <div class=\"accordion-contenu\">
                            <p class=\"text_realisations\">
                                En neuf ou en rénovation concerne notre activité importante: chenaux, entourage de cheminée,
                                rives diverses réalisés avec le concours, dans notre atelier, d’un matériel fiable et
                                moderne.

                                <br>
                                <a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nos_realisations");
        echo "\">
                                    <button>Voir nos réalisations</button>
                                </a>
                            </p>
                            <div class=\"img_lien_accueil\">
                                <img class=\"img_accueil\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/acc-zinguerie.jpeg"), "html", null, true);
        echo "\"
                                     alt=\"couverture Pau Jurançon\">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class=\"Accordion-item\">
            <input id=\"checkboxes-menu4\" type=\"checkbox\" name=\"menu\"/>

            <div>
                <label for=\"checkboxes-menu4\"><span>Pose de fenêtre de toit</span></label>
                <ul class=\"Accordion-subElements\">
                    <li class=\"Accordion-subElement\">
                        <div class=\"accordion-contenu\">
                            <p class=\"text_realisations\">
                                Toits Pyrénéens c’est aussi et surtout le savoir faire dans la pose de fenêtre de toits
                                Velux pour donner à vos combles plus de lumière. Installateur conseil, poseur Velux
                                agrée.

                                <br>
                                <a href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nos_realisations");
        echo "\">
                                    <button>Voir nos réalisations</button>
                                </a>
                            </p>
                            <div class=\"img_lien_accueil\">
                                <img class=\"img_accueil\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/acc-posedefenetres.jpeg"), "html", null, true);
        echo "\"
                                     alt=\"couverture Pau Jurançon\">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class=\"Accordion-item\">
            <input id=\"checkboxes-menu5\" type=\"checkbox\" name=\"menu\"/>

            <div>
                <label for=\"checkboxes-menu5\"><span>Nettoyage de toiture</span></label>
                <ul class=\"Accordion-subElements\">
                    <li class=\"Accordion-subElement\">
                        <div class=\"accordion-contenu\">
                            <p class=\"text_realisations\">
                                Toits Pyrénéens c’est aussi et surtout le savor faire dans la pose de fenêtre de toits Velux
                                pour donner à vos combles plus de lumière. Installateur conseil, poseur Velux agrée.
                                <br>
                                <a href=\"";
        // line 165
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nos_realisations");
        echo "\">
                                    <button>Voir nos réalisations</button>
                                </a>
                            </p>
                            <div class=\"img_lien_accueil\">
                                <img class=\"img_accueil\" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/acc-nettoyage.jpeg"), "html", null, true);
        echo "\"
                                     alt=\"couverture Pau Jurançon\">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class=\"Accordion-item\">
            <input id=\"checkboxes-menu6\" type=\"checkbox\" name=\"menu\"/>

            <div>
                <label for=\"checkboxes-menu6\"><span>Isolation</span></label>
                <ul class=\"Accordion-subElements\">
                    <li class=\"Accordion-subElement\">
                        <div class=\"accordion-contenu\">
                            <p class=\"text_realisations\">
                                Toits Pyrénéens dispose de l’agrément ECO-ARTISAN, R.G.E; (reconnu garant de
                                l’environnement). Cet agrement vous permet de bénéficier d’aides pour le financement de vos
                                projets, de crédit d’impôt.
                                <br>
                                <a href=\"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nos_realisations");
        echo "\">
                                    <button>Voir nos réalisations</button>
                                </a>
                            </p>
                            <div class=\"img_lien_accueil\">
                                <img class=\"img_accueil\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/acc-isolation.jpeg"), "html", null, true);
        echo "\"
                                     alt=\"couverture Pau Jurançon\">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class=\"Accordion-item\">
            <input id=\"checkboxes-menu7\" type=\"checkbox\" name=\"menu\"/>

            <div>
                <label for=\"checkboxes-menu7\"><span>Bardage bois</span></label>
                <ul class=\"Accordion-subElements\">
                    <li class=\"Accordion-subElement\">
                        <div class=\"accordion-contenu\">
                            <p class=\"text_realisations\">
                                Isolation texte à mettre
                                <br>
                                <a href=\"";
        // line 215
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nos_realisations");
        echo "\">
                                    <button>Voir nos réalisations</button>
                                </a>
                            </p>
                            <div class=\"img_lien_accueil\">
                                <img class=\"img_accueil\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/couver.jpg"), "html", null, true);
        echo "\"
                                     alt=\"couverture Pau Jurançon\">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class=\"Accordion-item\">
            <input id=\"checkboxes-menu8\" type=\"checkbox\" name=\"menu\"/>

            <div>
                <label for=\"checkboxes-menu8\"><span>Depannage</span></label>
                <ul class=\"Accordion-subElements\">
                    <li class=\"Accordion-subElement\">
                        <div class=\"accordion-contenu\">
                            <p class=\"text_realisations\">
                                bardage bois texte à mettre
                                <br>
                                <a href=\"";
        // line 239
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nos_realisations");
        echo "\">
                                    <button>Voir nos réalisations</button>
                                </a>
                            </p>
                            <div class=\"img_lien_accueil\">
                                <img class=\"img_accueil\" src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/acc-depannage.jpeg"), "html", null, true);
        echo "\"
                                     alt=\"couverture Pau Jurançon\">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <!--<div class=\"container text_accueil_fin\">
        <div class=\"container\">
            <p>TOITS PYRÉNÉENS c’est le choix d’un partenaire attentif à vos demandes et dont la préoccupation
                première est la QUALITE. SAVOIR FAIRE + COMPÉTENCE = EFFICACITÉ Toits Pyrénéens reste à votre
                disposition pour évaluer vos besoins et vous aider dans votre choix.</p>
        </div>
    </div>
    -->
    <div class=\"ligne_yellow\" style=\"margin-bottom: -20px;\">
        <h3>CONTACT</h3>
    </div>
    <section class=\"contact\">
        <section class=\"form_contact\">
            <div class=\"contactContainer\"
                 style=\"background: linear-gradient(160.29deg, #606060c2 -2.59%, #2e2e2ede 114.93%)\">
                <div class=\"container\">
                    <form action=\"/courrier\" method=\"post\">
                        <p>VEUILLEZ REMPLIR LE FORMULAIRE <em>POUR NOUS ENVOYER
                                UN MESSAGE.</em> VOTRE AVIS COMPTE POUR NOUS.</p>

                        <div class=\"row\">
                            <div class=\"col-12 col-md-6\">
                                <div>
                                    <label for=\"nom\">Présentez vous <em>*</em></label>
                                    <br>
                                    <input type=\"text\" name=\"nom\" id=\"nom\">
                                </div>

                                <div>
                                    <label for=\"email\">Email <em>*</em></label>
                                    <br>
                                    <input type=\"email\" name=\"email\" id=\"email\">
                                </div>
                            </div>
                            <div class=\"col-12 col-md-6\">
                                <div>
                                    <label for=\"nom\">Sujet <em>*</em></label>
                                    <br>
                                    <input type=\"text\" name=\"sujet\" id=\"nom\">
                                </div>

                                <div>
                                    <label for=\"msg\">Votre message <em>*</em></label>
                                    <br>
                                    <textarea name=\"msg\" id=\"msg\" rows=\"5\"></textarea>
                                </div>

                                <div>
                                    <button type=\"submit\">Envoyer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 244,  386 => 239,  364 => 220,  356 => 215,  334 => 196,  326 => 191,  302 => 170,  294 => 165,  271 => 145,  263 => 140,  238 => 118,  230 => 113,  205 => 91,  197 => 86,  164 => 56,  156 => 51,  131 => 28,  129 => 27,  126 => 26,  116 => 25,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil – Toits Pyrènèens{% endblock %}

{% block extendNav %}
    <section class=\"container\" id=\"header_text_and_vector\">
        <div class=\"row\">
            <div class=\"col-sm-8 col-12\">
                <h1>
                    <span>T</span><span>O</span><span>I</span><span>T</span><span>S</span>&nbsp;<span>P</span><span>Y</span><span>R</span><span>É</span><span>N</span><span>É</span><span>E</span><span>N</span><span>S</span>
                </h1>
                <div class=\"topLine\">
                    <h3>Enterprise de Couverture Charpente Zinguerie à Jurançon
                    </h3>
                </div>
            </div>
            <div class=\"col-4 d-md-block d-sm-none d-none\">
                <div class=\"home_vector\"></div>
            </div>
        </div>
    </section>

{% endblock %}

{% block body %}
    <!--les icones-->
    {% include 'partials/icones.html.twig' %}

    <!--les realisations, une grande partie ACCORDION-->
    <div class=\"ligne_yellow\"><h3>RÉALISATIONS</h3>
    </div>

    <ul class=\"Accordion\">
        <li class=\"Accordion-item\">
            <input id=\"checkboxes-menu1\" type=\"checkbox\" name=\"menu\"/>

            <div>
                <label for=\"checkboxes-menu1\"><span>Couverture</span></label>
                <ul class=\"Accordion-subElements\">
                    <li class=\"Accordion-subElement\">
                        <div class=\"accordion-contenu\">
                            <p class=\"text_realisations\">
                                Ouvrages réalisés dans les règles de l’art, que ce soit l’ardoise naturelle travaillée à la
                                main ou avec la tuile mécanique. Nous réalisons également la couverture en zinc qui bien
                                appareillée donnera au bâti la longévité et la fiabilité désirés. La terrasse zinc tasseau
                                offre une grande souplesse d’adaptation aux formes planes. Le joint debout est idéal pour
                                les couvertures de surface importante. il offre une étanchéité maximale, est esthétique,
                                moderne et constitue une réponse adaptée aux formes cintrées, complexes.

                                <br>
                                <a href=\"{{ path('app_nos_realisations') }}\">
                                    <button>Voir nos réalisations</button>
                                </a>
                            </p>
                            <div class=\"img_lien_accueil\">
                                <img class=\"img_accueil\" src=\"{{ asset('build/images/acc-courverture.jpeg') }}\"
                                     alt=\"couverture Pau Jurançon\">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class=\"Accordion-item\">
            <input id=\"checkboxes-menu2\" type=\"checkbox\" name=\"menu\"/>

            <div>
                <label for=\"checkboxes-menu2\"><span>Charpente</span></label>
                <ul class=\"Accordion-subElements\">
                    <li class=\"Accordion-subElement\">
                        <div class=\"accordion-contenu\">
                            <p class=\"text_realisations\">
                                Ouvrages réalisés dans les règles de l’art, que ce soit l’ardoise
                                naturelle travaillée à la main ou avec la tuile mécanique. Nous réalisons également la
                                couverture en
                                zinc qui bien appareillée donnera au bâti la longévite et la fiabilité désirés. La terrasse
                                zinc
                                tasseau offre une grande souplesse d’adaptation aux formes planes. Le joint debout est idéal
                                pour
                                les couvertures de surface importante. il offre une étanchéité maximale, est esthétique,
                                moderne
                                et
                                constitue une réponse adaptée aux formes cintrées, complexes.

                                <br>
                                <a href=\"{{ path('app_nos_realisations') }}\">
                                    <button>Voir nos réalisations</button>
                                </a>
                            </p>
                            <div class=\"img_lien_accueil\">
                                <img class=\"img_accueil\" src=\"{{ asset('build/images/couver.jpg') }}\"
                                     alt=\"couverture Pau Jurançon\">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class=\"Accordion-item\">
            <input id=\"checkboxes-menu21\" type=\"checkbox\" name=\"menu\"/>

            <div>
                <label for=\"checkboxes-menu21\"><span>Zinguerie</span></label>
                <ul class=\"Accordion-subElements\">
                    <li class=\"Accordion-subElement\">
                        <div class=\"accordion-contenu\">
                            <p class=\"text_realisations\">
                                En neuf ou en rénovation concerne notre activité importante: chenaux, entourage de cheminée,
                                rives diverses réalisés avec le concours, dans notre atelier, d’un matériel fiable et
                                moderne.

                                <br>
                                <a href=\"{{ path('app_nos_realisations') }}\">
                                    <button>Voir nos réalisations</button>
                                </a>
                            </p>
                            <div class=\"img_lien_accueil\">
                                <img class=\"img_accueil\" src=\"{{ asset('build/images/acc-zinguerie.jpeg') }}\"
                                     alt=\"couverture Pau Jurançon\">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class=\"Accordion-item\">
            <input id=\"checkboxes-menu4\" type=\"checkbox\" name=\"menu\"/>

            <div>
                <label for=\"checkboxes-menu4\"><span>Pose de fenêtre de toit</span></label>
                <ul class=\"Accordion-subElements\">
                    <li class=\"Accordion-subElement\">
                        <div class=\"accordion-contenu\">
                            <p class=\"text_realisations\">
                                Toits Pyrénéens c’est aussi et surtout le savoir faire dans la pose de fenêtre de toits
                                Velux pour donner à vos combles plus de lumière. Installateur conseil, poseur Velux
                                agrée.

                                <br>
                                <a href=\"{{ path('app_nos_realisations') }}\">
                                    <button>Voir nos réalisations</button>
                                </a>
                            </p>
                            <div class=\"img_lien_accueil\">
                                <img class=\"img_accueil\" src=\"{{ asset('build/images/acc-posedefenetres.jpeg') }}\"
                                     alt=\"couverture Pau Jurançon\">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class=\"Accordion-item\">
            <input id=\"checkboxes-menu5\" type=\"checkbox\" name=\"menu\"/>

            <div>
                <label for=\"checkboxes-menu5\"><span>Nettoyage de toiture</span></label>
                <ul class=\"Accordion-subElements\">
                    <li class=\"Accordion-subElement\">
                        <div class=\"accordion-contenu\">
                            <p class=\"text_realisations\">
                                Toits Pyrénéens c’est aussi et surtout le savor faire dans la pose de fenêtre de toits Velux
                                pour donner à vos combles plus de lumière. Installateur conseil, poseur Velux agrée.
                                <br>
                                <a href=\"{{ path('app_nos_realisations') }}\">
                                    <button>Voir nos réalisations</button>
                                </a>
                            </p>
                            <div class=\"img_lien_accueil\">
                                <img class=\"img_accueil\" src=\"{{ asset('build/images/acc-nettoyage.jpeg') }}\"
                                     alt=\"couverture Pau Jurançon\">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class=\"Accordion-item\">
            <input id=\"checkboxes-menu6\" type=\"checkbox\" name=\"menu\"/>

            <div>
                <label for=\"checkboxes-menu6\"><span>Isolation</span></label>
                <ul class=\"Accordion-subElements\">
                    <li class=\"Accordion-subElement\">
                        <div class=\"accordion-contenu\">
                            <p class=\"text_realisations\">
                                Toits Pyrénéens dispose de l’agrément ECO-ARTISAN, R.G.E; (reconnu garant de
                                l’environnement). Cet agrement vous permet de bénéficier d’aides pour le financement de vos
                                projets, de crédit d’impôt.
                                <br>
                                <a href=\"{{ path('app_nos_realisations') }}\">
                                    <button>Voir nos réalisations</button>
                                </a>
                            </p>
                            <div class=\"img_lien_accueil\">
                                <img class=\"img_accueil\" src=\"{{ asset('build/images/acc-isolation.jpeg') }}\"
                                     alt=\"couverture Pau Jurançon\">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class=\"Accordion-item\">
            <input id=\"checkboxes-menu7\" type=\"checkbox\" name=\"menu\"/>

            <div>
                <label for=\"checkboxes-menu7\"><span>Bardage bois</span></label>
                <ul class=\"Accordion-subElements\">
                    <li class=\"Accordion-subElement\">
                        <div class=\"accordion-contenu\">
                            <p class=\"text_realisations\">
                                Isolation texte à mettre
                                <br>
                                <a href=\"{{ path('app_nos_realisations') }}\">
                                    <button>Voir nos réalisations</button>
                                </a>
                            </p>
                            <div class=\"img_lien_accueil\">
                                <img class=\"img_accueil\" src=\"{{ asset('build/images/couver.jpg') }}\"
                                     alt=\"couverture Pau Jurançon\">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class=\"Accordion-item\">
            <input id=\"checkboxes-menu8\" type=\"checkbox\" name=\"menu\"/>

            <div>
                <label for=\"checkboxes-menu8\"><span>Depannage</span></label>
                <ul class=\"Accordion-subElements\">
                    <li class=\"Accordion-subElement\">
                        <div class=\"accordion-contenu\">
                            <p class=\"text_realisations\">
                                bardage bois texte à mettre
                                <br>
                                <a href=\"{{ path('app_nos_realisations') }}\">
                                    <button>Voir nos réalisations</button>
                                </a>
                            </p>
                            <div class=\"img_lien_accueil\">
                                <img class=\"img_accueil\" src=\"{{ asset('build/images/acc-depannage.jpeg') }}\"
                                     alt=\"couverture Pau Jurançon\">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <!--<div class=\"container text_accueil_fin\">
        <div class=\"container\">
            <p>TOITS PYRÉNÉENS c’est le choix d’un partenaire attentif à vos demandes et dont la préoccupation
                première est la QUALITE. SAVOIR FAIRE + COMPÉTENCE = EFFICACITÉ Toits Pyrénéens reste à votre
                disposition pour évaluer vos besoins et vous aider dans votre choix.</p>
        </div>
    </div>
    -->
    <div class=\"ligne_yellow\" style=\"margin-bottom: -20px;\">
        <h3>CONTACT</h3>
    </div>
    <section class=\"contact\">
        <section class=\"form_contact\">
            <div class=\"contactContainer\"
                 style=\"background: linear-gradient(160.29deg, #606060c2 -2.59%, #2e2e2ede 114.93%)\">
                <div class=\"container\">
                    <form action=\"/courrier\" method=\"post\">
                        <p>VEUILLEZ REMPLIR LE FORMULAIRE <em>POUR NOUS ENVOYER
                                UN MESSAGE.</em> VOTRE AVIS COMPTE POUR NOUS.</p>

                        <div class=\"row\">
                            <div class=\"col-12 col-md-6\">
                                <div>
                                    <label for=\"nom\">Présentez vous <em>*</em></label>
                                    <br>
                                    <input type=\"text\" name=\"nom\" id=\"nom\">
                                </div>

                                <div>
                                    <label for=\"email\">Email <em>*</em></label>
                                    <br>
                                    <input type=\"email\" name=\"email\" id=\"email\">
                                </div>
                            </div>
                            <div class=\"col-12 col-md-6\">
                                <div>
                                    <label for=\"nom\">Sujet <em>*</em></label>
                                    <br>
                                    <input type=\"text\" name=\"sujet\" id=\"nom\">
                                </div>

                                <div>
                                    <label for=\"msg\">Votre message <em>*</em></label>
                                    <br>
                                    <textarea name=\"msg\" id=\"msg\" rows=\"5\"></textarea>
                                </div>

                                <div>
                                    <button type=\"submit\">Envoyer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
{% endblock %}
", "accueil/index.html.twig", "/var/www/html/symfony/ToitsPyr/templates/accueil/index.html.twig");
    }
}
