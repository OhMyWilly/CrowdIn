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

/* pages/home.html.twig */
class __TwigTemplate_7da9a47e46cf9d2248e2527eea02b2c1bfd46bc1c68344360cba88ff6b2adab6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
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

        echo "Accueil, nouveautés
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<style>
\t\t.rectangle {
\t\t\tborder: 1px solid;
\t\t\tborder-spacing: 2px;
\t\t}
\t</style>
\t<section id=\"features\" class=\"features\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"main_features p-top-10\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<h1>Page d'accueil</h1>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<div class=\"divider\"></div><br>
\t\t\t\t\t\t\t<h3>Règles</h3><br>
\t\t\t\t\t\t\t<p>Par défaut, chaque projet dispose d'un seul fichier i18n représentant sa langue d'origine. Ce fichier est à la base de la création d'un projet. Un fichier i18n est un fichier structuré qui permet au site d'intégrer plusieurs langues. Il peut avoir différents formats (YML, CSV, XLIFF, etc.) dépendants de l'utilisateur. Le nom du fichier indique la langue de celui-ci ainsi que son domaine. Exemple: message.fr.csv (ce fichier contiendra les traductions françaises pour le domaine message au format csv)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><br>
\t\t<div class=\"divider\"></div>
\t\t<div class=\"p-top-20\">
\t\t\t<h3 class=\"text-center\">Notes de Patch</h3><br>
\t\t</div>
\t\t<div class=\"container rectangle\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"p-top-10\">
\t\t\t\t\t<p style=\" float:left;\">
\t\t\t\t\t\t<img src=\"img/mad.jpg\" alt=\"Photo\" class=\"img-thumbnail\" width=\"50px\" height=\"50px\"/>
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t<p>Vous pouvez maintenant ajouter vos projets en respectant le format i18n !</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex align-items-start flex-column sticky-top\">
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\tMadani A.
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<p>Admin</p>
\t\t\t\t\t</div>
\t\t\t\t\t<p>04/02/2021</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><br>
\t\t<div class=\"container rectangle\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"p-top-10\">
\t\t\t\t\t<p style=\" float:left;\">
\t\t\t\t\t\t<img src=\"img/wil.jpg\" alt=\"Photo\" class=\"img-thumbnail\" width=\"50px\" height=\"50px\"/>
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t<p>Les pages du site ont subis quelques ravalement de façade pour le plaisir de vos yeux !</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex align-items-start flex-column sticky-top\">
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\tWilliam K.
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<p>Admin</p>
\t\t\t\t\t</div>
\t\t\t\t\t<p>03/02/2021</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><br>
\t\t<div class=\"container rectangle\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"p-top-10\">
\t\t\t\t\t<p style=\" float:left;\">
\t\t\t\t\t\t<img src=\"img/mad.jpg\" alt=\"Photo\" class=\"img-thumbnail\" width=\"50px\" height=\"50px\"/>
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t<p>Il est désormais possible de créer un compte, de le modifier et de se connecter au site !</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex align-items-start flex-column sticky-top\">
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\tMadani A.
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<p>Admin</p>
\t\t\t\t\t</div>
\t\t\t\t\t<p>04/02/2021</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><br>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil, nouveautés
{% endblock %}

{% block body %}
\t<style>
\t\t.rectangle {
\t\t\tborder: 1px solid;
\t\t\tborder-spacing: 2px;
\t\t}
\t</style>
\t<section id=\"features\" class=\"features\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"main_features p-top-10\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<h1>Page d'accueil</h1>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<div class=\"divider\"></div><br>
\t\t\t\t\t\t\t<h3>Règles</h3><br>
\t\t\t\t\t\t\t<p>Par défaut, chaque projet dispose d'un seul fichier i18n représentant sa langue d'origine. Ce fichier est à la base de la création d'un projet. Un fichier i18n est un fichier structuré qui permet au site d'intégrer plusieurs langues. Il peut avoir différents formats (YML, CSV, XLIFF, etc.) dépendants de l'utilisateur. Le nom du fichier indique la langue de celui-ci ainsi que son domaine. Exemple: message.fr.csv (ce fichier contiendra les traductions françaises pour le domaine message au format csv)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><br>
\t\t<div class=\"divider\"></div>
\t\t<div class=\"p-top-20\">
\t\t\t<h3 class=\"text-center\">Notes de Patch</h3><br>
\t\t</div>
\t\t<div class=\"container rectangle\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"p-top-10\">
\t\t\t\t\t<p style=\" float:left;\">
\t\t\t\t\t\t<img src=\"img/mad.jpg\" alt=\"Photo\" class=\"img-thumbnail\" width=\"50px\" height=\"50px\"/>
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t<p>Vous pouvez maintenant ajouter vos projets en respectant le format i18n !</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex align-items-start flex-column sticky-top\">
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\tMadani A.
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<p>Admin</p>
\t\t\t\t\t</div>
\t\t\t\t\t<p>04/02/2021</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><br>
\t\t<div class=\"container rectangle\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"p-top-10\">
\t\t\t\t\t<p style=\" float:left;\">
\t\t\t\t\t\t<img src=\"img/wil.jpg\" alt=\"Photo\" class=\"img-thumbnail\" width=\"50px\" height=\"50px\"/>
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t<p>Les pages du site ont subis quelques ravalement de façade pour le plaisir de vos yeux !</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex align-items-start flex-column sticky-top\">
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\tWilliam K.
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<p>Admin</p>
\t\t\t\t\t</div>
\t\t\t\t\t<p>03/02/2021</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><br>
\t\t<div class=\"container rectangle\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"p-top-10\">
\t\t\t\t\t<p style=\" float:left;\">
\t\t\t\t\t\t<img src=\"img/mad.jpg\" alt=\"Photo\" class=\"img-thumbnail\" width=\"50px\" height=\"50px\"/>
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t<p>Il est désormais possible de créer un compte, de le modifier et de se connecter au site !</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex align-items-start flex-column sticky-top\">
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\tMadani A.
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<p>Admin</p>
\t\t\t\t\t</div>
\t\t\t\t\t<p>04/02/2021</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><br>
\t</section>
{% endblock %}
", "pages/home.html.twig", "C:\\Users\\William\\Documents\\Documents ecole\\ETNA\\Crowdin_final\\templates\\pages\\home.html.twig");
    }
}
