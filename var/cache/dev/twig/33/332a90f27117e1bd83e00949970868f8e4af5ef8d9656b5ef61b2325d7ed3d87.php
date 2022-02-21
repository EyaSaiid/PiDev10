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

/* produit/index.html.twig */
class __TwigTemplate_132c4ae3ebeaff7cd7f2ee7ec0fd3909ad88998251bcbaacd305ca6648da24e5 extends Template
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
        // line 26
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "produit/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Produit";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_bodyBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        // line 31
        echo "<h1>Produits</h1>

<table class=\"table\">
    <table class=\"table\" border=\"2\">
        <thead>

            <tr>
                <th>Id</th>
                <th>NomProduit</th>
                <th>DescriptionProduit</th>
                <th>PrixProduit</th>
                <th>QuantiteProduit</th>
                <th>Opérations</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 48
            echo "
            <tr>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nomProduit", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "descriptionProduit", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prixProduit", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantiteProduit", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>

                    <bouton class=\"btn btn-default\"> <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">Voir</a></bouton>
                <bouton class=\"btn btn-default\"> <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">Modifier</a></bouton>

            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </tbody>
            </div>
    </table>
            <bouton class=\"btn btn-default\"><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_new");
        echo "\">Nouveau produit</a></bouton>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 69,  159 => 66,  150 => 62,  141 => 58,  137 => 57,  131 => 54,  127 => 53,  123 => 52,  119 => 51,  115 => 50,  111 => 48,  106 => 47,  88 => 31,  78 => 30,  59 => 28,  36 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("{#  {% extends 'base2.html.twig' %}

{% block title %}Produits{% endblock %}
{% block bodyBack %}
    <h1>Produit index</h1>
<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">Fixed Header Table</h3>

                <div class=\"card-tools\">
                    <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                        <input type=\"text\" name=\"table_search\" class=\"form-control float-right\" placeholder=\"Search\">

                        <div class=\"input-group-append\">
                            <button type=\"submit\" class=\"btn btn-default\">
                                <i class=\"fas fa-search\"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class=\"card-body table-responsive p-0\" style=\"height: 300px;\">#}
{% extends 'base2.html.twig' %}

{% block title %}Produit{% endblock %}

{% block bodyBack %}
<h1>Produits</h1>

<table class=\"table\">
    <table class=\"table\" border=\"2\">
        <thead>

            <tr>
                <th>Id</th>
                <th>NomProduit</th>
                <th>DescriptionProduit</th>
                <th>PrixProduit</th>
                <th>QuantiteProduit</th>
                <th>Opérations</th>
            </tr>
        </thead>
        <tbody>
        {% for produit in produits %}

            <tr>
            <td>{{ produit.id }}</td>
                <td>{{ produit.nomProduit }}</td>
                <td>{{ produit.descriptionProduit }}</td>
                <td>{{ produit.prixProduit }}</td>
                <td>{{ produit.quantiteProduit }}</td>
                <td>

                    <bouton class=\"btn btn-default\"> <a href=\"{{ path('produit_show', {'id': produit.id}) }}\">Voir</a></bouton>
                <bouton class=\"btn btn-default\"> <a href=\"{{ path('produit_edit', {'id': produit.id}) }}\">Modifier</a></bouton>

            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
            </div>
    </table>
            <bouton class=\"btn btn-default\"><a href=\"{{ path('produit_new') }}\">Nouveau produit</a></bouton>
{% endblock %}
", "produit/index.html.twig", "C:\\Users\\Nour Hammami\\Desktop\\pii\\PiDev10\\templates\\produit\\index.html.twig");
    }
}
