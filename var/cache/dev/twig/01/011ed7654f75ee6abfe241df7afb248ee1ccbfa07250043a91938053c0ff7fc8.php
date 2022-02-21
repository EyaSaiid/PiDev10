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

/* Produit/showProduitSelonCategorie.html.twig */
class __TwigTemplate_0706876f6af7a3393eb41c2930c01a8870f17752b1cee327b32e53e92e95d4f0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Produit/showProduitSelonCategorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Produit/showProduitSelonCategorie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Produit/showProduitSelonCategorie.html.twig", 1);
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
                <h2>Our products</h2>
            </div>
            <div class=\"col-12\">
                <a href=\"\">Home</a>
                <a href=\"\">About Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
<!-- Food Start -->

<div class=\"food\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <h1>Produit</h1>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card\">

                    </div>
                </div>
                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Nom du Produit</th>
                        <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 35, $this->source); })()), "nomProduit", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Description du Produit</th>
                        <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 39, $this->source); })()), "descriptionProduit", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Prix du Produit</th>
                        <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 43, $this->source); })()), "prixProduit", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>image Produit</th>
                        <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 47, $this->source); })()), "photo", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
                        <img src=\"/upload/img/";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 48, $this->source); })()), "photo", [], "any", false, false, false, 48), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 48, $this->source); })()), "nomProduit", [], "any", false, false, false, 48), "html", null, true);
        echo "\" class=\"img-fluid\" height=\"100\" width=\"400\">
                    </tr>

                    </tbody>

            </div>
            </table>
            <ul>
                <bouton class=\"btn btn-danger\"> <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_front");
        echo "\"> revenir a la liste</a></bouton> </ul>
            <ul>     <bouton class=\"btn btn-success\"> <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_front", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
        echo "\">ajouter au panier</a></bouton></ul>

            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Produit/showProduitSelonCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 57,  139 => 56,  126 => 48,  122 => 47,  115 => 43,  108 => 39,  101 => 35,  68 => 4,  58 => 3,  35 => 1,);
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
                <h2>Our products</h2>
            </div>
            <div class=\"col-12\">
                <a href=\"\">Home</a>
                <a href=\"\">About Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
<!-- Food Start -->

<div class=\"food\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <h1>Produit</h1>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card\">

                    </div>
                </div>
                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Nom du Produit</th>
                        <td>{{ p.nomProduit }}</td>
                    </tr>
                    <tr>
                        <th>Description du Produit</th>
                        <td>{{ p.descriptionProduit }}</td>
                    </tr>
                    <tr>
                        <th>Prix du Produit</th>
                        <td>{{ p.prixProduit }}</td>
                    </tr>
                    <tr>
                        <th>image Produit</th>
                        <td>{{ p.photo }}</td>
                        <img src=\"/upload/img/{{ p.photo }}\" alt=\"{{ p.nomProduit }}\" class=\"img-fluid\" height=\"100\" width=\"400\">
                    </tr>

                    </tbody>

            </div>
            </table>
            <ul>
                <bouton class=\"btn btn-danger\"> <a href=\"{{ path('produit_front') }}\"> revenir a la liste</a></bouton> </ul>
            <ul>     <bouton class=\"btn btn-success\"> <a href=\"{{ path('produit_front', {'id': produit.id}) }}\">ajouter au panier</a></bouton></ul>

            {% endblock %}

", "Produit/showProduitSelonCategorie.html.twig", "C:\\Users\\Nour Hammami\\Desktop\\pii\\PiDev10\\templates\\produit\\showProduitSelonCategorie.html.Twig");
    }
}
