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

/* contact/index.html.twig */
class __TwigTemplate_619404c8dcbabb17ad660c6cb1bed8931d27b9352934843849501a10dabe8837 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        echo "Contact – Toits Pyrènèens";
        
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
        echo "   <section class=\"container\" id=\"header_text_and_vector\">
      <div class=\"row\">
         <div class=\"col-sm-8 col-12\">
            <h1>
               <span>T</span><span>O</span><span>I</span><span>T</span><span>S</span>&nbsp;<span>P</span><span>Y</span><span>R</span><span>É</span><span>N</span><span>É</span><span>E</span><span>N</span><span>S</span>
            </h1>
            <div class=\"topLine\">
               <h3>Contactez-nous
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

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "   <!--les icones-->
   ";
        // line 26
        $this->loadTemplate("partials/icones.html.twig", "contact/index.html.twig", 26)->display($context);
        // line 27
        echo "
<section class=\"contact_sections\">

   <div class=\"ligne_yellow\">
      <h3>OÙ ON SE TROUVE?</h3>
   </div>
   <div class=\"contact_text_information\">
      <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d682.9134490391705!2d-0.39470589770019815!3d43.288132038249195!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd564e9b2633787b%3A0xcd505cbb62e3786f!2zVG9pdHMgUHlyw6luw6llbnM!5e0!3m2!1sru!2sua!4v1656775191659!5m2!1sru!2sua\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
      <h4 style=\"margin-top: 12px;\">19 rue JEAN MOULIN <br>JURANÇON 64110</h4>
   </div>
</section>
<section class=\"contact_sections\">

   <div class=\"ligne_yellow\">
      <h3>HEURES D’OUVERTURE:</h3>
   </div>
   <div class=\"contact_text_information\">
      <h4>Lundi - vendredi     de 08.00 à 17.30 heures</h4>
   </div>
</section>
<section class=\"contact_sections\">

   <div class=\"ligne_yellow\">
      <h3>NUMÉRO DE TÉLÉPHONE:</h3>
   </div>
   <div class=\"contact_text_information\">
      <h4><a href=\"tel:+33688417147\"></a>06 88 41 71 47</h4>
   </div>
</section>
<div class=\"espace\"></div>
<div class=\"ligne_yellow\" style=\"margin-bottom: -20px;\">
      <h3>Pour nous envoyer un message veillez utiliser la forme:</h3>
   </div>
<div class=\"contactContainer\">
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 27,  128 => 26,  125 => 25,  115 => 24,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact – Toits Pyrènèens{% endblock %}

{% block extendNav %}
   <section class=\"container\" id=\"header_text_and_vector\">
      <div class=\"row\">
         <div class=\"col-sm-8 col-12\">
            <h1>
               <span>T</span><span>O</span><span>I</span><span>T</span><span>S</span>&nbsp;<span>P</span><span>Y</span><span>R</span><span>É</span><span>N</span><span>É</span><span>E</span><span>N</span><span>S</span>
            </h1>
            <div class=\"topLine\">
               <h3>Contactez-nous
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

<section class=\"contact_sections\">

   <div class=\"ligne_yellow\">
      <h3>OÙ ON SE TROUVE?</h3>
   </div>
   <div class=\"contact_text_information\">
      <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d682.9134490391705!2d-0.39470589770019815!3d43.288132038249195!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd564e9b2633787b%3A0xcd505cbb62e3786f!2zVG9pdHMgUHlyw6luw6llbnM!5e0!3m2!1sru!2sua!4v1656775191659!5m2!1sru!2sua\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
      <h4 style=\"margin-top: 12px;\">19 rue JEAN MOULIN <br>JURANÇON 64110</h4>
   </div>
</section>
<section class=\"contact_sections\">

   <div class=\"ligne_yellow\">
      <h3>HEURES D’OUVERTURE:</h3>
   </div>
   <div class=\"contact_text_information\">
      <h4>Lundi - vendredi     de 08.00 à 17.30 heures</h4>
   </div>
</section>
<section class=\"contact_sections\">

   <div class=\"ligne_yellow\">
      <h3>NUMÉRO DE TÉLÉPHONE:</h3>
   </div>
   <div class=\"contact_text_information\">
      <h4><a href=\"tel:+33688417147\"></a>06 88 41 71 47</h4>
   </div>
</section>
<div class=\"espace\"></div>
<div class=\"ligne_yellow\" style=\"margin-bottom: -20px;\">
      <h3>Pour nous envoyer un message veillez utiliser la forme:</h3>
   </div>
<div class=\"contactContainer\">
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

{% endblock %}
", "contact/index.html.twig", "/var/www/html/symfony/ToitsPyr/templates/contact/index.html.twig");
    }
}
