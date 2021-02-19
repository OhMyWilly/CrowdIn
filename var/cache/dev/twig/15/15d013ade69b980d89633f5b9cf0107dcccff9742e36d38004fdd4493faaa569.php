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

/* pages/projects.html.twig */
class __TwigTemplate_7365fe71597154e66156dcc5284aa64ef299092459d542d75e9eb73acdaca9fc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/projects.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/projects.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/projects.html.twig", 1);
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

        echo "Les projets
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
        echo "<style>
\t.margined {
\t\tmargin-left: 21%;
\t\tmargin-right: 21%;
\t}
\t.rectangle {
\t\tborder: 1px solid;
\t\tborder-spacing: 2px;
\t}
</style>

<div class=\"row\">
\t<h1 class=\"center\">Projets</h1>
</div>
<br>
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 23
            echo "\t<div class=\"rectangle\">
\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t<h4 class=\"row d-flex justify-content-center\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</h4>
\t\t</div>
\t\t<div class=\" row\">
\t\t\t<div class=\"col-md-4 d-flex justify-content-end\">
\t\t\t\t<img src=\"img/user.png\" alt=\"...\" class=\"img-thumbnail\" width=\"110px\" height=\"110px\">
\t\t\t</div>
\t\t\t<div class=\"col-md d-flex align-items-center\">
\t\t\t\t<img title=\"Langue source ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "LangSource", [], "any", false, false, false, 32), "html", null, true);
            echo "\" src=\"https://www.countryflags.io/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "LangSource", [], "any", false, false, false, 32), "html", null, true);
            echo "/flat/32.png\">
\t\t\t\tLangue Source &nbsp;&nbsp;
\t\t\t\t<img title=\"Langue destination ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "LangDest", [], "any", false, false, false, 34), "html", null, true);
            echo "\" src=\"https://www.countryflags.io/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "LangDest", [], "any", false, false, false, 34), "html", null, true);
            echo "/flat/32.png\">
\t\t\t\tLangue Souhaité
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 d-flex justify-content-end\">
\t\t\t\t<p>
\t\t\t\t\tAutheur
\t\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "author", [], "any", false, false, false, 42), "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t<h5 class=\"row d-flex justify-content-center\">Détails</h5>
\t\t</div>
\t\t<div class=\"row d-flex justify-content-center margined text-center\">
\t\t\t<p>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "details", [], "any", false, false, false, 49), "html", null, true);
            echo "</p>
\t\t</div>
\t\t<br>
\t\t<form method=\"POST\">
\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t<button id=\"subject\" name=\"IFile\" value=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\" class=\"d-flex justify-content-center btn btn-outline-primary\">Télécharger le fichier i18n</button>
\t\t\t</div>
\t\t\t<br>
\t\t\t";
            // line 57
            if (1) {
                // line 58
                echo "\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<h5>
\t\t\t\t\t\tDerniere traduction proposée</h5>
\t\t\t\t</div><br>
\t\t\t\t<input id=\"isProposal\" type=\"hidden\" name=\"Project\" value=\"\">
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<button name=\"IFile\" value=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 64), "html", null, true);
                echo "\" id=\"lastResult\" class=\"d-flex justify-content-center btn btn-outline-secondary\">Telecharger le dernier résultat</button>
\t\t\t\t</div><br>
\t\t\t\t<div class=\"row margined\">
\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t<h5>Proposez votre traduction</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t<div class=\"custom-file\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"idProject\" value=\"";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 75), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<input type=\"file\" class=\"custom-file-input\" id=\"inputGroupFile02\" name=\"resultFile\">
\t\t\t\t\t\t\t<label class=\"custom-file-label\" for=\"inputGroupFile02\">
\t\t\t\t\t\t\t\tChoose file</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t<button class=\"input-group-text\">Envoyer</button>
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><br><br>
\t\t<script src=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/project.js"), "html", null, true);
                echo "\"></script>
\t";
            }
            // line 90
            echo "</div><br>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 90, $this->source); })()));
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 90,  208 => 88,  192 => 75,  178 => 64,  170 => 58,  168 => 57,  162 => 54,  154 => 49,  144 => 42,  131 => 34,  124 => 32,  114 => 25,  110 => 23,  106 => 22,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Les projets
{% endblock %}

{% block body %}
<style>
\t.margined {
\t\tmargin-left: 21%;
\t\tmargin-right: 21%;
\t}
\t.rectangle {
\t\tborder: 1px solid;
\t\tborder-spacing: 2px;
\t}
</style>

<div class=\"row\">
\t<h1 class=\"center\">Projets</h1>
</div>
<br>
{% for project in projects %}
\t<div class=\"rectangle\">
\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t<h4 class=\"row d-flex justify-content-center\">{{ project.name}}</h4>
\t\t</div>
\t\t<div class=\" row\">
\t\t\t<div class=\"col-md-4 d-flex justify-content-end\">
\t\t\t\t<img src=\"img/user.png\" alt=\"...\" class=\"img-thumbnail\" width=\"110px\" height=\"110px\">
\t\t\t</div>
\t\t\t<div class=\"col-md d-flex align-items-center\">
\t\t\t\t<img title=\"Langue source {{ project.LangSource }}\" src=\"https://www.countryflags.io/{{ project.LangSource }}/flat/32.png\">
\t\t\t\tLangue Source &nbsp;&nbsp;
\t\t\t\t<img title=\"Langue destination {{ project.LangDest }}\" src=\"https://www.countryflags.io/{{ project.LangDest }}/flat/32.png\">
\t\t\t\tLangue Souhaité
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 d-flex justify-content-end\">
\t\t\t\t<p>
\t\t\t\t\tAutheur
\t\t\t\t\t{{ project.author}}</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t<h5 class=\"row d-flex justify-content-center\">Détails</h5>
\t\t</div>
\t\t<div class=\"row d-flex justify-content-center margined text-center\">
\t\t\t<p>{{ project.details}}</p>
\t\t</div>
\t\t<br>
\t\t<form method=\"POST\">
\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t<button id=\"subject\" name=\"IFile\" value=\"{{ project.id }}\" class=\"d-flex justify-content-center btn btn-outline-primary\">Télécharger le fichier i18n</button>
\t\t\t</div>
\t\t\t<br>
\t\t\t{% if 1 %}
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<h5>
\t\t\t\t\t\tDerniere traduction proposée</h5>
\t\t\t\t</div><br>
\t\t\t\t<input id=\"isProposal\" type=\"hidden\" name=\"Project\" value=\"\">
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<button name=\"IFile\" value=\"{{ project.id }}\" id=\"lastResult\" class=\"d-flex justify-content-center btn btn-outline-secondary\">Telecharger le dernier résultat</button>
\t\t\t\t</div><br>
\t\t\t\t<div class=\"row margined\">
\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t<h5>Proposez votre traduction</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t<div class=\"custom-file\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"idProject\" value=\"{{ project.id }}\">
\t\t\t\t\t\t\t<input type=\"file\" class=\"custom-file-input\" id=\"inputGroupFile02\" name=\"resultFile\">
\t\t\t\t\t\t\t<label class=\"custom-file-label\" for=\"inputGroupFile02\">
\t\t\t\t\t\t\t\tChoose file</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t<button class=\"input-group-text\">Envoyer</button>
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><br><br>
\t\t<script src=\"{{ asset('js/project.js') }}\"></script>
\t{% endif %}
</div><br>{% endfor %}{{ knp_pagination_render(projects) }}</div>{% endblock %}
", "pages/projects.html.twig", "C:\\Users\\William\\Documents\\Documents ecole\\ETNA\\Crowdin_final\\templates\\pages\\projects.html.twig");
    }
}
