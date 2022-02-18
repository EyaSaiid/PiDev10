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

/* produit_plat/show.html.twig */
class __TwigTemplate_015cddea557b1a66148704eaeb95d74e20436aa016bd4d4aced8ef54137c84f0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_plat/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_plat/show.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "produit_plat/show.html.twig", 1);
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

        echo "Boisson / Plat";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_bodyBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        // line 6
        echo "    <h1>Plats / Boissons</h1>

<div class=\"card\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">Table Plats/Boissons</h3>
    </div>
    <!-- /.card-header -->
    <div class=\"card-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-6\">

                </div>
            </div>
        <tbody>
            <tr>
                <th>Id_produitplat</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit_plat"]) || array_key_exists("produit_plat", $context) ? $context["produit_plat"] : (function () { throw new RuntimeError('Variable "produit_plat" does not exist.', 23, $this->source); })()), "idProduitplat", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id_categorie</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit_plat"]) || array_key_exists("produit_plat", $context) ? $context["produit_plat"] : (function () { throw new RuntimeError('Variable "produit_plat" does not exist.', 27, $this->source); })()), "idCategorie", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom_produitplat</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit_plat"]) || array_key_exists("produit_plat", $context) ? $context["produit_plat"] : (function () { throw new RuntimeError('Variable "produit_plat" does not exist.', 31, $this->source); })()), "nomProduitplat", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit_plat"]) || array_key_exists("produit_plat", $context) ? $context["produit_plat"] : (function () { throw new RuntimeError('Variable "produit_plat" does not exist.', 35, $this->source); })()), "prix", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    </div>
</div>

    <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_plat_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_plat_edit", ["id_produitplat" => twig_get_attribute($this->env, $this->source, (isset($context["produit_plat"]) || array_key_exists("produit_plat", $context) ? $context["produit_plat"] : (function () { throw new RuntimeError('Variable "produit_plat" does not exist.', 44, $this->source); })()), "getIdProduitPlat", [], "method", false, false, false, 44)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 46
        echo twig_include($this->env, $context, "produit_plat/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit_plat/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 46,  143 => 44,  138 => 42,  128 => 35,  121 => 31,  114 => 27,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Boisson / Plat{% endblock %}

{% block bodyBack %}
    <h1>Plats / Boissons</h1>

<div class=\"card\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">Table Plats/Boissons</h3>
    </div>
    <!-- /.card-header -->
    <div class=\"card-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-6\">

                </div>
            </div>
        <tbody>
            <tr>
                <th>Id_produitplat</th>
                <td>{{ produit_plat.idProduitplat }}</td>
            </tr>
            <tr>
                <th>Id_categorie</th>
                <td>{{ produit_plat.idCategorie }}</td>
            </tr>
            <tr>
                <th>Nom_produitplat</th>
                <td>{{ produit_plat.nomProduitplat }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ produit_plat.prix }}</td>
            </tr>
        </tbody>
    </table>
    </div>
</div>

    <a href=\"{{ path('produit_plat_index') }}\">back to list</a>

    <a href=\"{{ path('produit_plat_edit', {'id_produitplat': produit_plat.getIdProduitPlat()}) }}\">edit</a>

    {{ include('produit_plat/_delete_form.html.twig') }}
{% endblock %}
", "produit_plat/show.html.twig", "C:\\Users\\dell\\Desktop\\PGit\\PiDev10\\templates\\produit_plat\\show.html.twig");
    }
}
