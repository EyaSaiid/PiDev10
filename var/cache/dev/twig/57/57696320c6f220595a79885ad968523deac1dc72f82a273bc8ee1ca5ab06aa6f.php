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

/* livraison/edit.html.twig */
class __TwigTemplate_55a0239ee51119d5673029edb80c6b403d8ff09fe88fc6d2c1d8f3e88b97f020 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'bodyBack' => [$this, 'block_bodyBack'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/edit.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "livraison/edit.html.twig", 1);
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

        echo "Edit Livraison";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_bodyBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        // line 8
        echo "    <h1>Edit Livraison</h1>
    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Prenom</th>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 17, $this->source); })()), "Prenom", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nom</th>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 21, $this->source); })()), "Nom", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Adresse</th>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 25, $this->source); })()), "adresse", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Tel</th>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 29, $this->source); })()), "tel", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Commande ID</th>
            <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 37, $this->source); })()), "commande", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
        </tr>

        </tbody>
    </table>

    ";
        // line 43
        echo twig_include($this->env, $context, "livraison/_form.html.twig", ["button_label" => "Update"]);
        echo "

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraison_index");
        echo "\">back to list</a>

    ";
        // line 47
        echo twig_include($this->env, $context, "livraison/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "livraison/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 47,  151 => 45,  146 => 43,  137 => 37,  130 => 33,  123 => 29,  116 => 25,  109 => 21,  102 => 17,  95 => 13,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Edit Livraison{% endblock %}



{% block bodyBack %}
    <h1>Edit Livraison</h1>
    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>{{ livraison.id }}</td>
        </tr>
        <tr>
            <th>Prenom</th>
            <td>{{ livraison.Prenom }}</td>
        </tr>
        <tr>
            <th>Nom</th>
            <td>{{ livraison.Nom }}</td>
        </tr>
        <tr>
            <th>Adresse</th>
            <td>{{ livraison.adresse }}</td>
        </tr>
        <tr>
            <th>Tel</th>
            <td>{{ livraison.tel }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ livraison.email }}</td>
        </tr>
        <tr>
            <th>Commande ID</th>
            <td>{{ livraison.commande.id }}</td>
        </tr>

        </tbody>
    </table>

    {{ include('livraison/_form.html.twig', {'button_label': 'Update'}) }}

    <a href=\"{{ path('livraison_index') }}\">back to list</a>

    {{ include('livraison/_delete_form.html.twig') }}
{% endblock %}
", "livraison/edit.html.twig", "C:\\Users\\AMEN\\OneDrive\\Bureau\\PIgit\\GitHub\\PiDev10\\templates\\livraison\\edit.html.twig");
    }
}
