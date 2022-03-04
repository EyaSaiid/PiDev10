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

/* Front/produitDma9.html.twig */
class __TwigTemplate_18618bed2f6d230a4f01ea9620dcc66ef53d38e33bbb24fdb8c4f13872d9e211 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/produitDma9.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/produitDma9.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/produitDma9.html.twig", 1);
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
        echo "    <!-- Page Header Start -->
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
";
        // line 18
        echo "<div class=\"food\">
    <div class=\"container\">
        <div class=\"row align-items-center\">

            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 23
            echo "                <div class=\"col-md-4\">
                    <div class=\"food-item\">
                        ";
            // line 26
            echo "                       ";
            // line 28
            echo "                        <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nomProduit", [], "any", false, false, false, 28), "html", null, true);
            echo "</h2>
                        <p>
                            ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "descriptionProduit", [], "any", false, false, false, 30), "html", null, true);
            echo "
                        </p>
                        <h2>
                            ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prixProduit", [], "any", false, false, false, 33), "html", null, true);
            echo " DNT
                        </h2>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showProduit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" >Voir produit</a>

                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/produitDma9.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 40,  116 => 35,  111 => 33,  105 => 30,  99 => 28,  97 => 26,  93 => 23,  89 => 22,  83 => 18,  68 => 4,  58 => 3,  35 => 1,);
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
{# {{ form(form) }} #}
<div class=\"food\">
    <div class=\"container\">
        <div class=\"row align-items-center\">

            {%  for produit in produits %}
                <div class=\"col-md-4\">
                    <div class=\"food-item\">
                        {#  <i class=\"flaticon-burger\"></i>#}
                       {#   <img src=\"/upload/img/{{ produit.photo }}\" alt=\"{{ produit.nomProduit }}\" class=\"img-fluid\" height=\"250\" width=\"250\">
                        <h2>{{ produit.photo}}</h2>#}
                        <h2>{{ produit.nomProduit }}</h2>
                        <p>
                            {{ produit.descriptionProduit }}
                        </p>
                        <h2>
                            {{ produit.prixProduit }} DNT
                        </h2>
                        <a href=\"{{ path('showProduit', {'id': produit.id}) }}\" >Voir produit</a>

                    </div>
                </div>
            {% endfor %}
            {#             <ul>
                {{ knp_pagination_render(produits) }} </ul>
<div class=\"col-md-4\">
              <p>filter<p> <form id=\"filters\">
      {% set queryParams = app.request.query.all %}
                  {% for categori in categorie %}
                   {% if queryParams is not empty and queryParams.categories is defined %}
                        {% set checked = (categorie.id in queryParams.categories) ? \"checked\" : \"\" %}
                    {% else %}
                        {% set checked = \"\" %}
                    {% endif %}
                      <p><input type=\"checkbox\" name=\"categorie[]\" id=\"cat {{categori.id}}\" value=\"{{categori.id}}\"><label for=\"cat {{categori.id}}\">{{categori.Libelle}}</label></p>
                  {% endfor %}

                   </form>
          </div>
        </div>
          <div class=\"col-xs1 col-sm4\" id=\"content\">
             {%include \"Front/testAjax.html.twig\"%} </div>
          </div> #}
{% endblock %}
        {#  {%block javascripts %}
<script src=\"{{  asset('Back/plugins/jquery/filters.js')}}\"></script>
{%endblock%}#}", "Front/produitDma9.html.twig", "C:\\Users\\Nour Hammami\\Desktop\\pii\\PiDev10\\templates\\Front\\produitDma9.html.twig");
    }
}
