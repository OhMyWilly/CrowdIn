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

/* pages/translators.html.twig */
class __TwigTemplate_8ac5973e281bcfbeb2f5db8f5bef3436d92c0c5184ca0fea2de6f01be1723dec extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/translators.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/translators.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/translators.html.twig", 1);
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

        echo "Traducteurs
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
\t\t\tborder-spacing: 0;
\t\t}
\t\t.tg td {
\t\t\tborder-color: black;
\t\t\tborder-style: solid;
\t\t\tborder-width: 1px;
\t\t\tfont-family: Arial, sans-serif;
\t\t\tfont-size: 14px;
\t\t\toverflow: hidden;
\t\t\tpadding: 10px 5px;
\t\t\tword-break: normal;
\t\t}
\t\t.tg th {
\t\t\tborder-color: black;
\t\t\tborder-style: solid;
\t\t\tborder-width: 1px;
\t\t\tfont-family: Arial, sans-serif;
\t\t\tfont-size: 14px;
\t\t\tfont-weight: normal;
\t\t\toverflow: hidden;
\t\t\tpadding: 10px 5px;
\t\t\tword-break: normal;
\t\t}
\t\t.tg .tg-dkcx {
\t\t\tbackground-color: #414749;
\t\t\tfont-size: 18px;
\t\t\ttext-align: center;
\t\t\tvertical-align: top
\t\t}
\t\t.tg .tg-baqh {
\t\t\ttext-align: center;
\t\t\tvertical-align: top
\t\t}
\t\t.tg .tg-70gk {
\t\t\tborder-color: inherit;
\t\t\tfont-family: \"Comic Sans MS\", cursive, sans-serif !important;
\t\t\tfont-size: 16px;
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
\t\t.tg .tg-5906 {
\t\t\tbackground-color: #414749;
\t\t\tborder-color: inherit;
\t\t\tcolor: #ffffff;
\t\t\tfont-family: \"Comic Sans MS\", cursive, sans-serif !important;
\t\t\tfont-size: 18px;
\t\t\ttext-align: center;
\t\t\tvertical-align: top
\t\t}
\t\t.tg .tg-2p4q {
\t\t\tbackground-color: #414749;
\t\t\tborder-color: inherit;
\t\t\tfont-family: \"Comic Sans MS\", cursive, sans-serif !important;
\t\t\tfont-size: 18px;
\t\t\ttext-align: center;
\t\t\tvertical-align: top
\t\t}
\t\t.tg .tg-0pky {
\t\t\tborder-color: inherit;
\t\t\ttext-align: left;
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

\t<div class=\"row text-center\">
\t\t<h1>Traducteurs</h1>
\t</div>
\t<br>
\t<div class=\"row\">
\t\t<p>Ici vous retrouverez tous les traducteurs inscrits sur la plateforme, n'hésitez pas a proposer des projets en fonctions de leurs capacités !</p>
\t</div>
\t<br>
\t<div class=\"row\"></div>
\t<div class=\"tg-wrap\">
\t\t<table class=\"tg\" style=\"undefined;table-layout: fixed; width: 100%\">

\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"tg-2p4q\">
\t\t\t\t\t\t<span style=\"font-weight:bold;color:#FFF\">Statut</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"tg-agit\">Email</td>
\t\t\t\t\t<td class=\"tg-5906\">
\t\t\t\t\t\t<span style=\"font-weight:bold\">Langues</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"tg-dkcx\">
\t\t\t\t\t\t<span style=\"font-weight:bold;color:#FFF\">Dernier projet</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"tg-2p4q\">
\t\t\t\t\t\t<span style=\"font-weight:bold;color:#FFF\">Bio</span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 124, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 125
            echo "\t\t\t\t\t";
            if (((0 !== twig_compare($context["user"], twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "user", [], "any", false, false, false, 125))) && (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "countries", [], "any", false, false, false, 125)), 2)))) {
                // line 126
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"tg-70gk\">Disponible 🟢</td>
\t\t\t\t\t\t\t<td class=\"tg-70gk\">";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 128), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"tg-0pky\">
\t\t\t\t\t\t\t\t";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "countries", [], "any", false, false, false, 130));
                foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                    // line 131
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((0 !== twig_compare($context["country"], ""))) {
                        // line 132
                        echo "\t\t\t\t\t\t\t\t\t\t<img src=\"https://www.countryflags.io/";
                        echo twig_escape_filter($this->env, $context["country"], "html", null, true);
                        echo "/flat/48.png\">
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 134
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"tg-baqh\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 137
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projects");
                echo "\">ici</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"tg-0pky\">
\t\t\t\t\t\t\t\t";
                // line 140
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "bio", [], "any", false, false, false, 140), "Description ici 🙂..."))) {
                    // line 141
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "bio", [], "any", false, false, false, 141), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                } else {
                    // line 143
                    echo "\t\t\t\t\t\t\t\t\t<p>L'utilisateur n'a pas renseigné de bio pour l'instant 😔</p>
\t\t\t\t\t\t\t\t";
                }
                // line 145
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            // line 148
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "\t\t\t\t";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 149, $this->source); })()));
        echo "
\t\t\t</tbody>
\t\t</table>
\t</div><br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/translators.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 149,  270 => 148,  265 => 145,  261 => 143,  255 => 141,  253 => 140,  247 => 137,  243 => 135,  237 => 134,  231 => 132,  228 => 131,  224 => 130,  219 => 128,  215 => 126,  212 => 125,  208 => 124,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Traducteurs
{% endblock %}

{% block body %}
\t<style type=\"text/css\">
\t\t.tg {
\t\t\tborder-collapse: collapse;
\t\t\tborder-spacing: 0;
\t\t}
\t\t.tg td {
\t\t\tborder-color: black;
\t\t\tborder-style: solid;
\t\t\tborder-width: 1px;
\t\t\tfont-family: Arial, sans-serif;
\t\t\tfont-size: 14px;
\t\t\toverflow: hidden;
\t\t\tpadding: 10px 5px;
\t\t\tword-break: normal;
\t\t}
\t\t.tg th {
\t\t\tborder-color: black;
\t\t\tborder-style: solid;
\t\t\tborder-width: 1px;
\t\t\tfont-family: Arial, sans-serif;
\t\t\tfont-size: 14px;
\t\t\tfont-weight: normal;
\t\t\toverflow: hidden;
\t\t\tpadding: 10px 5px;
\t\t\tword-break: normal;
\t\t}
\t\t.tg .tg-dkcx {
\t\t\tbackground-color: #414749;
\t\t\tfont-size: 18px;
\t\t\ttext-align: center;
\t\t\tvertical-align: top
\t\t}
\t\t.tg .tg-baqh {
\t\t\ttext-align: center;
\t\t\tvertical-align: top
\t\t}
\t\t.tg .tg-70gk {
\t\t\tborder-color: inherit;
\t\t\tfont-family: \"Comic Sans MS\", cursive, sans-serif !important;
\t\t\tfont-size: 16px;
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
\t\t.tg .tg-5906 {
\t\t\tbackground-color: #414749;
\t\t\tborder-color: inherit;
\t\t\tcolor: #ffffff;
\t\t\tfont-family: \"Comic Sans MS\", cursive, sans-serif !important;
\t\t\tfont-size: 18px;
\t\t\ttext-align: center;
\t\t\tvertical-align: top
\t\t}
\t\t.tg .tg-2p4q {
\t\t\tbackground-color: #414749;
\t\t\tborder-color: inherit;
\t\t\tfont-family: \"Comic Sans MS\", cursive, sans-serif !important;
\t\t\tfont-size: 18px;
\t\t\ttext-align: center;
\t\t\tvertical-align: top
\t\t}
\t\t.tg .tg-0pky {
\t\t\tborder-color: inherit;
\t\t\ttext-align: left;
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

\t<div class=\"row text-center\">
\t\t<h1>Traducteurs</h1>
\t</div>
\t<br>
\t<div class=\"row\">
\t\t<p>Ici vous retrouverez tous les traducteurs inscrits sur la plateforme, n'hésitez pas a proposer des projets en fonctions de leurs capacités !</p>
\t</div>
\t<br>
\t<div class=\"row\"></div>
\t<div class=\"tg-wrap\">
\t\t<table class=\"tg\" style=\"undefined;table-layout: fixed; width: 100%\">

\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"tg-2p4q\">
\t\t\t\t\t\t<span style=\"font-weight:bold;color:#FFF\">Statut</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"tg-agit\">Email</td>
\t\t\t\t\t<td class=\"tg-5906\">
\t\t\t\t\t\t<span style=\"font-weight:bold\">Langues</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"tg-dkcx\">
\t\t\t\t\t\t<span style=\"font-weight:bold;color:#FFF\">Dernier projet</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"tg-2p4q\">
\t\t\t\t\t\t<span style=\"font-weight:bold;color:#FFF\">Bio</span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t{% for user in users %}
\t\t\t\t\t{% if user != app.user and user.countries|length > 2  %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"tg-70gk\">Disponible 🟢</td>
\t\t\t\t\t\t\t<td class=\"tg-70gk\">{{ user.email }}</td>
\t\t\t\t\t\t\t<td class=\"tg-0pky\">
\t\t\t\t\t\t\t\t{% for country in user.countries %}
\t\t\t\t\t\t\t\t\t{% if country != \"\" %}
\t\t\t\t\t\t\t\t\t\t<img src=\"https://www.countryflags.io/{{ country }}/flat/48.png\">
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"tg-baqh\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_projects')}}\">ici</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"tg-0pky\">
\t\t\t\t\t\t\t\t{% if user.bio != \"Description ici 🙂...\" %}
\t\t\t\t\t\t\t\t\t{{ user.bio }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<p>L'utilisateur n'a pas renseigné de bio pour l'instant 😔</p>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t{{ knp_pagination_render(users) }}
\t\t\t</tbody>
\t\t</table>
\t</div><br>

{% endblock %}
", "pages/translators.html.twig", "C:\\Users\\William\\Documents\\Documents ecole\\ETNA\\Crowdin_final\\templates\\pages\\translators.html.twig");
    }
}
