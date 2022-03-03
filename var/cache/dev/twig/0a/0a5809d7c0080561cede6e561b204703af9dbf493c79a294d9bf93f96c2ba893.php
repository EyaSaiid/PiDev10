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

/* panier/index.html.twig */
class __TwigTemplate_bfe8d0ce47efd517a427702aa231c62eb5bb8887dd64a9018fcd804059279a42 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 2);
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

        echo " Panier
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_bodyMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyMenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyMenu"));

        // line 7
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

    ";
        // line 21
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 21, $this->source); })())), 0))) {
            // line 22
            echo "        <table class=\"table\">
            <thead>
            <tr>
                <th>Produit</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 34
                echo "                <tr>
                    <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 35, $this->source); })()), $context["key"], [], "array", false, false, false, 35), "nomProduit", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>

                    <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 37, $this->source); })()), $context["key"], [], "array", false, false, false, 37), "prixProduit", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                    <td>
                  <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_minus", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 39, $this->source); })()), $context["key"], [], "array", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\">-</a>
                        ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["qts"]) || array_key_exists("qts", $context) ? $context["qts"] : (function () { throw new RuntimeError('Variable "qts" does not exist.', 40, $this->source); })()), $context["key"], [], "array", false, false, false, 40), "html", null, true);
                echo "

                        <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_plus", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 42, $this->source); })()), $context["key"], [], "array", false, false, false, 42), "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\">+</a> </td>
                    <td>";
                // line 43
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["qts"]) || array_key_exists("qts", $context) ? $context["qts"] : (function () { throw new RuntimeError('Variable "qts" does not exist.', 43, $this->source); })()), $context["key"], [], "array", false, false, false, 43) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 43, $this->source); })()), $context["key"], [], "array", false, false, false, 43), "prixProduit", [], "any", false, false, false, 43)), "html", null, true);
                echo " DT</td>
                    <td>
                        <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 45, $this->source); })()), $context["key"], [], "array", false, false, false, 45), "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\">
                            <i class=\"fas fa-trash\"></i>
                        </a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            </tbody>
            <tfoot>
                <tr>
                    <td colspan=\"3\" class=\"text-right\">Total :
                    </td>

                    <td>";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 57, $this->source); })()), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_all");
            echo "\" class=\"btn btn-danger btn-sm\"> Supprimmer tout
                            <i class=\"fas fa-trash-alt\"></i>
                        </a></td>


                    <td>

                    <a href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraison_new");
            echo "\" class=\"btn btn-success float-right\" >Commander
                    <i class=\"fas fa-shopping-cart mr1\"></i>
                    </a>
                </td>
                </tr>
            </tfoot>
        </table>
    ";
        } else {
            // line 73
            echo "        <p> Votre panier est vide!</p>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 73,  189 => 65,  179 => 58,  175 => 57,  167 => 51,  155 => 45,  150 => 43,  146 => 42,  141 => 40,  137 => 39,  132 => 37,  127 => 35,  124 => 34,  120 => 33,  107 => 22,  105 => 21,  89 => 7,  79 => 6,  59 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}
{% block title %} Panier
{% endblock %}

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

    {% if articles | length >0 %}
        <table class=\"table\">
            <thead>
            <tr>
                <th>Produit</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            {% for key,item in articles %}
                <tr>
                    <td>{{ articles[key].nomProduit  }}</td>

                    <td>{{ articles[key].prixProduit }}</td>
                    <td>
                  <a href=\"{{ path('panier_minus' ,  {'id': articles[key].id}) }}\">-</a>
                        {{ qts[key] }}

                        <a href=\"{{ path('panier_plus', {'id': articles[key].id}) }}\">+</a> </td>
                    <td>{{ qts[key] * articles[key].prixProduit  }} DT</td>
                    <td>
                        <a href=\"{{ path('cart_remove', {'id':articles[key].id}) }}\" class=\"btn btn-danger btn-sm\">
                            <i class=\"fas fa-trash\"></i>
                        </a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
            <tfoot>
                <tr>
                    <td colspan=\"3\" class=\"text-right\">Total :
                    </td>

                    <td>{{ total }}</td>
                    <td><a href=\"{{ path('remove_all')}}\" class=\"btn btn-danger btn-sm\"> Supprimmer tout
                            <i class=\"fas fa-trash-alt\"></i>
                        </a></td>


                    <td>

                    <a href=\"{{ path('livraison_new') }}\" class=\"btn btn-success float-right\" >Commander
                    <i class=\"fas fa-shopping-cart mr1\"></i>
                    </a>
                </td>
                </tr>
            </tfoot>
        </table>
    {% else %}
        <p> Votre panier est vide!</p>
    {% endif %}
{% endblock %}", "panier/index.html.twig", "C:\\Users\\AMEN\\OneDrive\\Bureau\\PIgit\\GitHub\\PiDev10\\templates\\panier\\index.html.twig");
    }
}
