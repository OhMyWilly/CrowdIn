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

/* security/settings.html.twig */
class __TwigTemplate_78bf15a687a93265b4d808dba91b42f2ba0b993700bb3bd0c07512fb4feb5204 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/settings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/settings.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/settings.html.twig", 1);
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

        echo "Paramètres
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<style>
\t\t.tiny_input {
\t\t\tmargin-left: 40%;
\t\t\tmargin-right: 40%;
\t\t\tpadding: 10;
\t\t}
\t</style>
\t<div class=\"row\">
\t\t<h1 class=\"center\">Paramètres</h1>
\t</div>
\t<br><br><br>
\t<div class=\"row\">
\t\t<h4 class=\"center\">Modifier votre email:</h4>
\t</div>
\t<form method=\"POST\">
\t\t<div class=\"row tiny_input\">
\t\t\t<input type=\"email\" name=\"email\" placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "email", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-sm d-flex justify-content-center\">
\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
\t\t\t<input id=\"submit\" type=\"submit\" value=\"Sauvegarder\" class=\"btn btn-dark\">
\t\t</div>
\t</form>
\t<br><br>
\t<div class=\"row\">
\t\t<h4 class=\"center\">Modifier votre mot de passe:</h4>
\t</div>
\t<form method=\"POST\">
\t\t<div class=\"row tiny_input\">
\t\t\t<input type=\"password\" name=\"password\" placeholder=\"•••••••\">
\t\t</div>
\t\t<div class=\"col-sm d-flex justify-content-center\">
\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), "html", null, true);
        echo "\">
\t\t\t<input id=\"submit\" type=\"submit\" value=\"Sauvegarder\" class=\"btn btn-dark\">
\t\t</div>
\t</form>
\t<br><br><br><br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 39,  114 => 26,  108 => 23,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paramètres
{% endblock %}
{% block body %}

\t<style>
\t\t.tiny_input {
\t\t\tmargin-left: 40%;
\t\t\tmargin-right: 40%;
\t\t\tpadding: 10;
\t\t}
\t</style>
\t<div class=\"row\">
\t\t<h1 class=\"center\">Paramètres</h1>
\t</div>
\t<br><br><br>
\t<div class=\"row\">
\t\t<h4 class=\"center\">Modifier votre email:</h4>
\t</div>
\t<form method=\"POST\">
\t\t<div class=\"row tiny_input\">
\t\t\t<input type=\"email\" name=\"email\" placeholder=\"{{ app.user.email}}\">
\t\t</div>
\t\t<div class=\"col-sm d-flex justify-content-center\">
\t\t\t<input type=\"hidden\" name=\"id\" value=\"{{ app.user.id }}\">
\t\t\t<input id=\"submit\" type=\"submit\" value=\"Sauvegarder\" class=\"btn btn-dark\">
\t\t</div>
\t</form>
\t<br><br>
\t<div class=\"row\">
\t\t<h4 class=\"center\">Modifier votre mot de passe:</h4>
\t</div>
\t<form method=\"POST\">
\t\t<div class=\"row tiny_input\">
\t\t\t<input type=\"password\" name=\"password\" placeholder=\"•••••••\">
\t\t</div>
\t\t<div class=\"col-sm d-flex justify-content-center\">
\t\t\t<input type=\"hidden\" name=\"id\" value=\"{{ app.user.id }}\">
\t\t\t<input id=\"submit\" type=\"submit\" value=\"Sauvegarder\" class=\"btn btn-dark\">
\t\t</div>
\t</form>
\t<br><br><br><br>

{% endblock %}
", "security/settings.html.twig", "C:\\Users\\William\\Documents\\Documents ecole\\ETNA\\Crowdin_final\\templates\\security\\settings.html.twig");
    }
}
