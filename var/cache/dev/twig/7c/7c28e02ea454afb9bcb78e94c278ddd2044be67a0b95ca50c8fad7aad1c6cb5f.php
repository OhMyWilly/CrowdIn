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

/* pages/my_account.html.twig */
class __TwigTemplate_99d7f16a02a1dcb0fd3277693510dbd35a0ae827e22772e0e4111cbef21b38e0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/my_account.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/my_account.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/my_account.html.twig", 1);
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

        echo "Mon compte
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
        echo "\t<style type=\"text/css\">
\t\t.tg {
\t\t\tborder-collapse: collapse;
\t\t\tborder-color: black;
\t\t\tborder-spacing: 0;
\t\t\tborder-style: solid;
\t\t\tborder-width: 1px;
\t\t}
\t\t.tg td {
\t\t\tborder-style: solid;
\t\t\tborder-width: 0;
\t\t\tfont-family: Arial, sans-serif;
\t\t\tfont-size: 14px;
\t\t\toverflow: hidden;
\t\t\tpadding: 10px 5px;
\t\t\tword-break: normal;
\t\t}
\t\t.tg th {
\t\t\tborder-style: solid;
\t\t\tborder-width: 0;
\t\t\tfont-family: Arial, sans-serif;
\t\t\tfont-size: 14px;
\t\t\tfont-weight: normal;
\t\t\toverflow: hidden;
\t\t\tpadding: 10px 5px;
\t\t\tword-break: normal;
\t\t}
\t\t.tg .tg-fqdu {
\t\t\tborder-color: inherit;
\t\t\tfont-family: \"Comic Sans MS\", cursive, sans-serif !important;
\t\t\tfont-size: 18px;
\t\t\ttext-align: center;
\t\t\tvertical-align: top
\t\t}
\t\t.tg .tg-agit {
\t\t\tbackground-color: #414749;
\t\t\tborder-color: inherit;
\t\t\tcolor: #ffffff;
\t\t\tfont-family: \"Comic Sans MS\", cursive, sans-serif !important;
\t\t\tfont-size: 18px;
\t\t\tfont-weight: bold;
\t\t\ttext-align: center;
\t\t\tvertical-align: top
\t\t}
\t\t.tg .tg-a7n7 {
\t\t\tborder-color: #656565;
\t\t\tfont-family: \"Comic Sans MS\", cursive, sans-serif !important;
\t\t\tfont-size: 18px;
\t\t\ttext-align: center;
\t\t\tvertical-align: top
\t\t}
\t\t.tg .tg-71di {
\t\t\tborder-color: #333333;
\t\t\tfont-family: \"Comic Sans MS\", cursive, sans-serif !important;
\t\t\tfont-size: 18px;
\t\t\ttext-align: center;
\t\t\tvertical-align: top
\t\t}
\t\t@media screen and(max-width: 767px) {
\t\t\t.tg {
\t\t\t\twidth: auto !important;
\t\t\t}
\t\t\t.tg col {
\t\t\t\twidth: auto !important;
\t\t\t}
\t\t\t.tg-wrap {
\t\t\t\toverflow-x: auto;
\t\t\t\t-webkit-overflow-scrolling: touch;
\t\t\t}
\t\t}
\t</style>
\t<br>
\t<div class=\"row\">
\t\t<div class=\"col-sm d-flex justify-content-center\">
\t\t\t<h1>Mon compte</h1>
\t\t</div>
\t</div>
\t<br><br><br>
\t<div class=\"row\">
\t\t<div class=\"col-lg-3\">
\t\t\t<img src=\"img/user.png\" alt=\"...\" class=\"img-thumbnail\" width=\"200px\" height=\"200px\">
\t\t</div>
\t\t<div class=\"col-lg d-flex justify-content-start\">
\t\t\t<div class=\"tg-wrap\">
\t\t\t\t<table class=\"tg\" style=\"undefined;table-layout: fixed; width: 70%\">
\t\t\t\t\t<colgroup>
\t\t\t\t\t\t<col style=\"width: 102px\">
\t\t\t\t\t\t<col style=\"width: 245px\">
\t\t\t\t\t</colgroup>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"tg-agit\">Prenom</td>
\t\t\t\t\t\t\t<td class=\"tg-a7n7\">";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99), "firstname", [], "any", false, false, false, 99), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"tg-agit\">Nom</td>
\t\t\t\t\t\t\t<td class=\"tg-71di\">";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "lastname", [], "any", false, false, false, 103), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"tg-agit\">Email</td>
\t\t\t\t\t\t\t<td class=\"tg-fqdu\">";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "email", [], "any", false, false, false, 107), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"tg-agit\">Role</td>
\t\t\t\t\t\t\t<td class=\"tg-a7n7\">
\t\t\t\t\t\t\t\t";
        // line 112
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "countries", [], "any", false, false, false, 112)), 2))) {
            // line 113
            echo "\t\t\t\t\t\t\t\t\tTraducteur
\t\t\t\t\t\t\t\t";
        } else {
            // line 115
            echo "\t\t\t\t\t\t\t\t\tUtilisateur
\t\t\t\t\t\t\t\t";
        }
        // line 117
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"tg-agit\">Statut</td>
\t\t\t\t\t\t\t<td class=\"tg-fqdu\">
\t\t\t\t\t\t\t\tDisponible 🟢
\t\t\t\t\t\t\t\t";
        // line 127
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"tg-agit\">Bio</td>
\t\t\t\t\t\t\t<form id=\"account_form\" method=\"POST\">
\t\t\t\t\t\t\t\t<td class=\"tg-fqdu\">
\t\t\t\t\t\t\t\t\t";
        // line 133
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "bio", [], "any", false, false, false, 133)) {
            // line 134
            echo "\t\t\t\t\t\t\t\t\t\t<textarea name=\"bio\" id=\"bio\" cols=\"30\" rows=\"3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "user", [], "any", false, false, false, 134), "bio", [], "any", false, false, false, 134), "html", null, true);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 136
            echo "\t\t\t\t\t\t\t\t\t\t<textarea name=\"bio\" id=\"bio\" cols=\"30\" rows=\"3\">Description ici 🙂...</textarea>
\t\t\t\t\t\t\t\t\t";
        }
        // line 138
        echo "\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Sauvegarder\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"row\">
\t\t<div class=\"col-sm d-flex justify-content-center\">
\t\t\t<h2>Mes Langues</h2>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"row\">
\t\t<div class=\"col-sm d-flex justify-content-center\">
\t\t\t<label for=\"language\">Ajoutez un langage depuis la liste de pays:</label>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-sm d-flex justify-content-center\">
\t\t\t<select id=\"languages\" name=\"language\">
\t\t\t\t<option value=\"\" selected disabled hidden>Pays ici</option>
\t\t\t\t";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) || array_key_exists("countries", $context) ? $context["countries"] : (function () { throw new RuntimeError('Variable "countries" does not exist.', 163, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 164
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "\t\t\t</select>
\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "user", [], "any", false, false, false, 167), "id", [], "any", false, false, false, 167), "html", null, true);
        echo "\">
\t\t\t<button id=\"countrySure\" type=\"button\" disabled>Ajouter</button>
\t\t</form>
\t</div>
\t<br>
\t<div class=\"row\">
\t\t<div class=\"col-sm d-flex justify-content-center\">
\t\t\t";
        // line 174
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 174), "countries", [], "any", false, true, false, 174), 1, [], "any", true, true, false, 174)) {
            // line 175
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 175, $this->source); })()), "user", [], "any", false, false, false, 175), "countries", [], "any", false, false, false, 175));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 176
                echo "\t\t\t\t\t";
                if ((0 !== twig_compare($context["key"], ""))) {
                    // line 177
                    echo "\t\t\t\t\t\t<img src=\"https://www.countryflags.io/";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "/flat/64.png\">
\t\t\t\t\t";
                }
                // line 179
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "\t\t\t";
        } else {
            // line 181
            echo "\t\t\t\t<p>Vos langues seront visible ici</p>

\t\t\t";
        }
        // line 184
        echo "
\t\t</div>
\t</div>
\t<br>
\t<script>
\t\t\$(\"#countrySure\").click(function () {
if (confirm(\"Etes-vous sûr de vouloir ajouter une langue ? Ce choix est irreversible, seul un admin pourrait corriger une erreur de votre part.\")) {
\$(\"#account_form\").submit();
}
});
\$(\"#languages\").click(function () {
\$(\"#countrySure\").removeAttr(\"disabled\");
});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/my_account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 184,  323 => 181,  320 => 180,  314 => 179,  308 => 177,  305 => 176,  300 => 175,  298 => 174,  288 => 167,  285 => 166,  274 => 164,  270 => 163,  243 => 138,  239 => 136,  233 => 134,  231 => 133,  223 => 127,  215 => 117,  211 => 115,  207 => 113,  205 => 112,  197 => 107,  190 => 103,  183 => 99,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon compte
{% endblock %}

{% block body %}
\t<style type=\"text/css\">
\t\t.tg {
\t\t\tborder-collapse: collapse;
\t\t\tborder-color: black;
\t\t\tborder-spacing: 0;
\t\t\tborder-style: solid;
\t\t\tborder-width: 1px;
\t\t}
\t\t.tg td {
\t\t\tborder-style: solid;
\t\t\tborder-width: 0;
\t\t\tfont-family: Arial, sans-serif;
\t\t\tfont-size: 14px;
\t\t\toverflow: hidden;
\t\t\tpadding: 10px 5px;
\t\t\tword-break: normal;
\t\t}
\t\t.tg th {
\t\t\tborder-style: solid;
\t\t\tborder-width: 0;
\t\t\tfont-family: Arial, sans-serif;
\t\t\tfont-size: 14px;
\t\t\tfont-weight: normal;
\t\t\toverflow: hidden;
\t\t\tpadding: 10px 5px;
\t\t\tword-break: normal;
\t\t}
\t\t.tg .tg-fqdu {
\t\t\tborder-color: inherit;
\t\t\tfont-family: \"Comic Sans MS\", cursive, sans-serif !important;
\t\t\tfont-size: 18px;
\t\t\ttext-align: center;
\t\t\tvertical-align: top
\t\t}
\t\t.tg .tg-agit {
\t\t\tbackground-color: #414749;
\t\t\tborder-color: inherit;
\t\t\tcolor: #ffffff;
\t\t\tfont-family: \"Comic Sans MS\", cursive, sans-serif !important;
\t\t\tfont-size: 18px;
\t\t\tfont-weight: bold;
\t\t\ttext-align: center;
\t\t\tvertical-align: top
\t\t}
\t\t.tg .tg-a7n7 {
\t\t\tborder-color: #656565;
\t\t\tfont-family: \"Comic Sans MS\", cursive, sans-serif !important;
\t\t\tfont-size: 18px;
\t\t\ttext-align: center;
\t\t\tvertical-align: top
\t\t}
\t\t.tg .tg-71di {
\t\t\tborder-color: #333333;
\t\t\tfont-family: \"Comic Sans MS\", cursive, sans-serif !important;
\t\t\tfont-size: 18px;
\t\t\ttext-align: center;
\t\t\tvertical-align: top
\t\t}
\t\t@media screen and(max-width: 767px) {
\t\t\t.tg {
\t\t\t\twidth: auto !important;
\t\t\t}
\t\t\t.tg col {
\t\t\t\twidth: auto !important;
\t\t\t}
\t\t\t.tg-wrap {
\t\t\t\toverflow-x: auto;
\t\t\t\t-webkit-overflow-scrolling: touch;
\t\t\t}
\t\t}
\t</style>
\t<br>
\t<div class=\"row\">
\t\t<div class=\"col-sm d-flex justify-content-center\">
\t\t\t<h1>Mon compte</h1>
\t\t</div>
\t</div>
\t<br><br><br>
\t<div class=\"row\">
\t\t<div class=\"col-lg-3\">
\t\t\t<img src=\"img/user.png\" alt=\"...\" class=\"img-thumbnail\" width=\"200px\" height=\"200px\">
\t\t</div>
\t\t<div class=\"col-lg d-flex justify-content-start\">
\t\t\t<div class=\"tg-wrap\">
\t\t\t\t<table class=\"tg\" style=\"undefined;table-layout: fixed; width: 70%\">
\t\t\t\t\t<colgroup>
\t\t\t\t\t\t<col style=\"width: 102px\">
\t\t\t\t\t\t<col style=\"width: 245px\">
\t\t\t\t\t</colgroup>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"tg-agit\">Prenom</td>
\t\t\t\t\t\t\t<td class=\"tg-a7n7\">{{ app.user.firstname }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"tg-agit\">Nom</td>
\t\t\t\t\t\t\t<td class=\"tg-71di\">{{ app.user.lastname }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"tg-agit\">Email</td>
\t\t\t\t\t\t\t<td class=\"tg-fqdu\">{{ app.user.email }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"tg-agit\">Role</td>
\t\t\t\t\t\t\t<td class=\"tg-a7n7\">
\t\t\t\t\t\t\t\t{% if app.user.countries|length > 2  %}
\t\t\t\t\t\t\t\t\tTraducteur
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tUtilisateur
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"tg-agit\">Statut</td>
\t\t\t\t\t\t\t<td class=\"tg-fqdu\">
\t\t\t\t\t\t\t\tDisponible 🟢
\t\t\t\t\t\t\t\t{# {% if appp.user.status == true %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOccupé(e) 🔴\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDisponible 🟢
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %} #}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"tg-agit\">Bio</td>
\t\t\t\t\t\t\t<form id=\"account_form\" method=\"POST\">
\t\t\t\t\t\t\t\t<td class=\"tg-fqdu\">
\t\t\t\t\t\t\t\t\t{% if app.user.bio %}
\t\t\t\t\t\t\t\t\t\t<textarea name=\"bio\" id=\"bio\" cols=\"30\" rows=\"3\">{{ app.user.bio }}</textarea>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<textarea name=\"bio\" id=\"bio\" cols=\"30\" rows=\"3\">Description ici 🙂...</textarea>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Sauvegarder\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"row\">
\t\t<div class=\"col-sm d-flex justify-content-center\">
\t\t\t<h2>Mes Langues</h2>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"row\">
\t\t<div class=\"col-sm d-flex justify-content-center\">
\t\t\t<label for=\"language\">Ajoutez un langage depuis la liste de pays:</label>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-sm d-flex justify-content-center\">
\t\t\t<select id=\"languages\" name=\"language\">
\t\t\t\t<option value=\"\" selected disabled hidden>Pays ici</option>
\t\t\t\t{% for key, value in countries %}
\t\t\t\t\t<option value=\"{{ key }}\">{{ value }}</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t\t<input type=\"hidden\" name=\"id\" value=\"{{ app.user.id }}\">
\t\t\t<button id=\"countrySure\" type=\"button\" disabled>Ajouter</button>
\t\t</form>
\t</div>
\t<br>
\t<div class=\"row\">
\t\t<div class=\"col-sm d-flex justify-content-center\">
\t\t\t{% if app.user.countries.1 is defined %}
\t\t\t\t{% for key in app.user.countries %}
\t\t\t\t\t{% if key != \"\" %}
\t\t\t\t\t\t<img src=\"https://www.countryflags.io/{{ key }}/flat/64.png\">
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t{% else %}
\t\t\t\t<p>Vos langues seront visible ici</p>

\t\t\t{% endif %}

\t\t</div>
\t</div>
\t<br>
\t<script>
\t\t\$(\"#countrySure\").click(function () {
if (confirm(\"Etes-vous sûr de vouloir ajouter une langue ? Ce choix est irreversible, seul un admin pourrait corriger une erreur de votre part.\")) {
\$(\"#account_form\").submit();
}
});
\$(\"#languages\").click(function () {
\$(\"#countrySure\").removeAttr(\"disabled\");
});
\t</script>
{% endblock %}
", "pages/my_account.html.twig", "C:\\Users\\William\\Documents\\Documents ecole\\ETNA\\Crowdin_final\\templates\\pages\\my_account.html.twig");
    }
}
