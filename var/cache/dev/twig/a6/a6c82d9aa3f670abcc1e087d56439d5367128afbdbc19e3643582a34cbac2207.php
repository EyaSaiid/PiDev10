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

/* produit/produitajax.html.twig */
class __TwigTemplate_9ec8958af03d5d0aedf4b2bb64a159ca1d2da474e615639f7b8e085cc799dee6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyMenu' => [$this, 'block_bodyMenu'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/produitajax.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/produitajax.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/produitajax.html.twig", 1);
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
<div class=\"food\">
    <div class=\"container\">
        <div class=\"row align-items-center\">

            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["produit"]);
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 22
            echo "                <div class=\"col-md-4\">
                    <div class=\"food-item\">
                        ";
            // line 25
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["produit"], "images", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 26
                echo "                            <div>
                                <img src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("public/upload/img" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 27))), "html", null, true);
                echo "\" alt=\"Image\" width=\"150\">
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                        <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nomProduit", [], "any", false, false, false, 30), "html", null, true);
            echo "</h2>
                        <p>
                            ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "descriptionProduit", [], "any", false, false, false, 32), "html", null, true);
            echo "
                        </p>
                        <h2>
                            ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prixProduit", [], "any", false, false, false, 35), "html", null, true);
            echo " DNT
                        </h2>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showProduit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" >Voir produit</a>

                    </div>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo " ";
        // line 44
        echo "
              <p>filter<p> <form id=\"filters\">
      ";
        // line 46
        $context["queryParams"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "request", [], "any", false, false, false, 46), "query", [], "any", false, false, false, 46), "all", [], "any", false, false, false, 46);
        // line 47
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categori"]) {
            // line 48
            echo "                   ";
            if (( !twig_test_empty((isset($context["queryParams"]) || array_key_exists("queryParams", $context) ? $context["queryParams"] : (function () { throw new RuntimeError('Variable "queryParams" does not exist.', 48, $this->source); })())) && twig_get_attribute($this->env, $this->source, ($context["queryParams"] ?? null), "categories", [], "any", true, true, false, 48))) {
                // line 49
                echo "                        ";
                $context["checked"] = ((twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, (isset($context["queryParams"]) || array_key_exists("queryParams", $context) ? $context["queryParams"] : (function () { throw new RuntimeError('Variable "queryParams" does not exist.', 49, $this->source); })()), "categories", [], "any", false, false, false, 49))) ? ("checked") : (""));
                // line 50
                echo "                    ";
            } else {
                // line 51
                echo "                        ";
                $context["checked"] = "";
                // line 52
                echo "                    ";
            }
            // line 53
            echo "                      <p><input type=\"checkbox\" name=\"categorie[]\" id=\"cat ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categori"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categori"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\"><label for=\"cat ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categori"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categori"], "Libelle", [], "any", false, false, false, 53), "html", null, true);
            echo "</label></p>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categori'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
                   </form>
          </div>
          <div class=\"col-xs1 col-sm4\" id=\"content\">
             ";
        // line 59
        $this->loadTemplate("Front/testAjax.html.twig", "produit/produitajax.html.twig", 59)->display($context);
        echo " </div>
        </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/jquery/filters.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/produitajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 64,  205 => 63,  191 => 59,  185 => 55,  170 => 53,  167 => 52,  164 => 51,  161 => 50,  158 => 49,  155 => 48,  150 => 47,  148 => 46,  144 => 44,  142 => 42,  130 => 37,  125 => 35,  119 => 32,  113 => 30,  104 => 27,  101 => 26,  96 => 25,  92 => 22,  88 => 21,  69 => 4,  59 => 3,  36 => 1,);
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

            {%  for produit in produit %}
                <div class=\"col-md-4\">
                    <div class=\"food-item\">
                        {#  <i class=\"flaticon-burger\"></i>#}
                        {% for image in produit.images %}
                            <div>
                                <img src=\"{{ asset('public/upload/img' ~ image.name) }}\" alt=\"Image\" width=\"150\">
                            </div>
                        {% endfor %}
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

            {% endfor %} {# <ul>
                {{ knp_pagination_render(produits) }} </ul> #}

              <p>filter<p> <form id=\"filters\">
      {% set queryParams = app.request.query.all %}
                  {% for categori in categories %}
                   {% if queryParams is not empty and queryParams.categories is defined %}
                        {% set checked = (categorie.id in queryParams.categories) ? \"checked\" : \"\" %}
                    {% else %}
                        {% set checked = \"\" %}
                    {% endif %}
                      <p><input type=\"checkbox\" name=\"categorie[]\" id=\"cat {{categori.id}}\" value=\"{{categori.id}}\"><label for=\"cat {{categori.id}}\">{{categori.Libelle}}</label></p>
                  {% endfor %}

                   </form>
          </div>
          <div class=\"col-xs1 col-sm4\" id=\"content\">
             {%include \"Front/testAjax.html.twig\"%} </div>
        </div>
    </div>
    {% endblock %}
 {%block javascripts %}
<script src=\"{{  asset('Back/plugins/jquery/filters.js')}}\"></script>
{%endblock%}", "produit/produitajax.html.twig", "C:\\Users\\Nour Hammami\\Desktop\\pii\\PiDev10\\templates\\produit\\produitajax.html.twig");
    }
}
