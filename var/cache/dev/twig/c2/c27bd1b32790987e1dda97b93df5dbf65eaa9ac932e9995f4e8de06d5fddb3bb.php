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

/* livraison/show.html.twig */
class __TwigTemplate_d91aaa340f4cd553340f4e306b7116536b9b8116a2ea44ca28e67977fb001b3b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'bodyMenu' => [$this, 'block_bodyMenu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/show.html.twig"));

        // line 11
        $context["total"] = 0;
        // line 8
        $this->parent = $this->loadTemplate("base.html.twig", "livraison/show.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Panier
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_bodyMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyMenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyMenu"));

        // line 13
        echo "    <div class=\"page-header mb-0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2>Votre panier</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Votre panier</a>
                </div>
            </div>
        </div>
    </div>

        <table class=\"table\">
            <thead>
            <tr>
                <th>Livraison ID</th>
                <th>Nom Produit</th>
                <th>Prix Unitaire</th>
                <th>Quantité</th>
                <th>Prix Total</th>

                <th></th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lp"]) || array_key_exists("lp", $context) ? $context["lp"] : (function () { throw new RuntimeError('Variable "lp" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 41
            echo "                <tr>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "livraison", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>

                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "produit", [], "any", false, false, false, 44), "nomProduit", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "produit", [], "any", false, false, false, 45), "prixProduit", [], "any", false, false, false, 45), "html", null, true);
            echo " DT</td>
                    <td>
                     ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "qte", [], "any", false, false, false, 47), "html", null, true);
            echo "
                    </td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "produit", [], "any", false, false, false, 49), "prixProduit", [], "any", false, false, false, 49) * twig_get_attribute($this->env, $this->source, $context["l"], "qte", [], "any", false, false, false, 49)), "html", null, true);
            echo "</td>
                    ";
            // line 50
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 50, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "produit", [], "any", false, false, false, 50), "prixProduit", [], "any", false, false, false, 50) * twig_get_attribute($this->env, $this->source, $context["l"], "qte", [], "any", false, false, false, 50)));
            // line 51
            echo "
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </tbody>
            <tfoot>
            <tr>
                <td colspan=\"3\" class=\"text-right\">Total : ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "
                </td>






            </tr>
            </tfoot>
        </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "livraison/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 57,  161 => 54,  153 => 51,  151 => 50,  147 => 49,  142 => 47,  137 => 45,  133 => 44,  128 => 42,  125 => 41,  121 => 40,  92 => 13,  82 => 12,  62 => 9,  51 => 8,  49 => 11,  36 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("






{% extends 'base.html.twig' %}
{% block title %} Panier
{% endblock %}
{% set total = 0 %}
{% block bodyMenu %}
    <div class=\"page-header mb-0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2>Votre panier</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Votre panier</a>
                </div>
            </div>
        </div>
    </div>

        <table class=\"table\">
            <thead>
            <tr>
                <th>Livraison ID</th>
                <th>Nom Produit</th>
                <th>Prix Unitaire</th>
                <th>Quantité</th>
                <th>Prix Total</th>

                <th></th>
            </tr>
            </thead>
            <tbody>
            {% for l in lp %}
                <tr>
                    <td>{{ l.livraison.id }}</td>

                    <td>{{ l.produit.nomProduit }}</td>
                    <td>{{ l.produit.prixProduit }} DT</td>
                    <td>
                     {{ l.qte }}
                    </td>
                    <td>{{ l.produit.prixProduit * l.qte }}</td>
                    {% set total = total+ l.produit.prixProduit * l.qte %}

                </tr>
            {% endfor %}
            </tbody>
            <tfoot>
            <tr>
                <td colspan=\"3\" class=\"text-right\">Total : {{ total }}
                </td>






            </tr>
            </tfoot>
        </table>

{% endblock %}", "livraison/show.html.twig", "C:\\Users\\AMEN\\OneDrive\\Bureau\\PIgit\\GitHub\\PiDev10\\templates\\livraison\\show.html.twig");
    }
}
