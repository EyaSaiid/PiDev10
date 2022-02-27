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

/* produit/showFront.html.twig */
class __TwigTemplate_79d0cfca915a681be5dafbe86f0ad8221cc210d800eec7763fef6e53a2b338b5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyMenu' => [$this, 'block_bodyMenu'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/showFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/showFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/showFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_bodyMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyMenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyMenu"));

        // line 4
        echo "<!-- Page Header Start -->
<div class=\"page-header mb-0\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h2>Nos produits</h2>
            </div>

        </div>
    </div>
</div>
<!-- Page Header End -->
<!-- Food Start -->

<div class=\"food\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            ";
        // line 21
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 21, $this->source); })()), "quantiteProduit", [], "any", false, false, false, 21), 0))) {
            // line 22
            echo "            <h1 style=\"color:darkgreen\";>Produit en stock</h1>
            ";
        } else {
            // line 24
            echo "            <h1 style=\"color:red\";>Produit en rupture</h1>
            ";
        }
        // line 26
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">

            </div>
        </div>
        <table class=\"table\">
            <tbody>
            <tr>
                <th>Nom du Produit</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 36, $this->source); })()), "nomProduit", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description du Produit</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 40, $this->source); })()), "descriptionProduit", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix du Produit</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 44, $this->source); })()), "prixProduit", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
               ";
        // line 49
        echo "                <img src=\"/upload/img/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 49, $this->source); })()), "photo", [], "any", false, false, false, 49), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 49, $this->source); })()), "nomProduit", [], "any", false, false, false, 49), "html", null, true);
        echo "\" class=\"img-fluid\" height=\"100\" width=\"400\">
            </tr>

            </tbody>

    </div>
    </table>
            ";
        // line 56
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 56, $this->source); })()), "quantiteProduit", [], "any", false, false, false, 56), 0))) {
            // line 57
            echo "            <ul>
                <bouton class=\"btn btn-danger\"> <a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_front");
            echo "\"> revenir a la liste</a></bouton> </ul>
           <ul>     <bouton class=\"btn btn-success\"> <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_front", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">ajouter au panier</a></bouton></ul>

            ";
        } else {
            // line 62
            echo "            <bouton class=\"btn btn-danger\"> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_front");
            echo "\"> revenir a la liste</a></bouton> </ul>
            <ul>
                ";
        }
        // line 65
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/showFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 65,  157 => 62,  151 => 59,  147 => 58,  144 => 57,  142 => 56,  129 => 49,  123 => 44,  116 => 40,  109 => 36,  97 => 26,  93 => 24,  89 => 22,  87 => 21,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block bodyMenu %}
<!-- Page Header Start -->
<div class=\"page-header mb-0\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h2>Nos produits</h2>
            </div>

        </div>
    </div>
</div>
<!-- Page Header End -->
<!-- Food Start -->

<div class=\"food\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            {% if produit.quantiteProduit> 0 %}
            <h1 style=\"color:darkgreen\";>Produit en stock</h1>
            {% else %}
            <h1 style=\"color:red\";>Produit en rupture</h1>
            {% endif %}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">

            </div>
        </div>
        <table class=\"table\">
            <tbody>
            <tr>
                <th>Nom du Produit</th>
                <td>{{ produit.nomProduit }}</td>
            </tr>
            <tr>
                <th>Description du Produit</th>
                <td>{{ produit.descriptionProduit }}</td>
            </tr>
            <tr>
                <th>Prix du Produit</th>
                <td>{{ produit.prixProduit }}</td>
            </tr>
            <tr>
               {#  <th>image du Produit</th>
                <td>{{ produit.photo }}</td>#}
                <img src=\"/upload/img/{{ produit.photo }}\" alt=\"{{ produit.nomProduit }}\" class=\"img-fluid\" height=\"100\" width=\"400\">
            </tr>

            </tbody>

    </div>
    </table>
            {% if produit.quantiteProduit> 0 %}
            <ul>
                <bouton class=\"btn btn-danger\"> <a href=\"{{ path('produit_front') }}\"> revenir a la liste</a></bouton> </ul>
           <ul>     <bouton class=\"btn btn-success\"> <a href=\"{{ path('produit_front', {'id': produit.id}) }}\">ajouter au panier</a></bouton></ul>

            {% else %}
            <bouton class=\"btn btn-danger\"> <a href=\"{{ path('produit_front') }}\"> revenir a la liste</a></bouton> </ul>
            <ul>
                {% endif %}
                {% endblock %}

", "produit/showFront.html.twig", "C:\\Users\\Nour Hammami\\Desktop\\pii\\PiDev10\\templates\\produit\\showFront.html.twig");
    }
}
