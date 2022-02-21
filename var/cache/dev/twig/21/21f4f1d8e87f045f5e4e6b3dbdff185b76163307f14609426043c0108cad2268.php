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

/* Front/categorie_produit_dma9.html.twig */
class __TwigTemplate_fb2e48ed1a9818c11400f2e5c8c8b897b94b9407d648392232e313091c6feafd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/categorie_produit_dma9.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/categorie_produit_dma9.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/categorie_produit_dma9.html.twig", 1);
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
                    <h2>Nos categories</h2>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 22
            echo "        <div class=\"col-md-4\">
            <div class=\"food-item\">
                  <i class=\"flaticon-categorie\"></i>
                <h3>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "Libelle", [], "any", false, false, false, 25), "html", null, true);
            echo "</h3>

                 <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showProduitByCategory", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">Voir Categorie</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    ";
        // line 86
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/categorie_produit_dma9.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 86,  111 => 31,  101 => 27,  96 => 25,  91 => 22,  87 => 21,  68 => 4,  58 => 3,  35 => 1,);
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
                    <h2>Nos categories</h2>
                </div>

            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Food Start -->

    <div class=\"food\">
    <div class=\"container\">
    <div class=\"row align-items-center\">
    {%  for categorie in categories %}
        <div class=\"col-md-4\">
            <div class=\"food-item\">
                  <i class=\"flaticon-categorie\"></i>
                <h3>{{ categorie.Libelle }}</h3>

                 <a href=\"{{ path('showProduitByCategory', {'id': categorie.id}) }}\">Voir Categorie</a>
            </div>
        </div>
    {% endfor %}
    {#  <div class=\"col-md-4\">
                    <div class=\"food-item\">
                        <i class=\"flaticon-snack\"></i>
                        <h2>Snacks</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem.
                        </p>
                        <a href=\"\">Voir Restaurent</a>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"food-item\">
                        <i class=\"flaticon-cocktail\"></i>
                        <h2>Beverages</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem.
                        </p>
                        <a href=\"\">Voir Restaurent</a>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"food-item\">
                        <i class=\"flaticon-burger\"></i>
                        <h2>Burgers</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem.
                        </p>
                        <a href=\"\">Voir Restaurent</a>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"food-item\">
                        <i class=\"flaticon-snack\"></i>
                        <h2>Snacks</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem.
                        </p>
                        <a href=\"\">Voir Restaurent</a>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"food-item\">
                        <i class=\"flaticon-cocktail\"></i>
                        <h2>Beverages</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem.
                        </p>
                        <a href=\"\">Voir Restaurent</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Food End -->#}

{% endblock %}", "Front/categorie_produit_dma9.html.twig", "C:\\Users\\Nour Hammami\\Desktop\\pii\\PiDev10\\templates\\Front\\categorie_produit_dma9.html.twig");
    }
}
