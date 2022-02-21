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

/* Back/table.html.twig */
class __TwigTemplate_d97b89fc2a99862ba18e9a256358c02ea04a9095e80e234657ded58379d7ba2f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/table.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "Back/table.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_bodyBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        // line 3
        echo "<div class=\"row\">
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
            <div class=\"card-body table-responsive p-0\" style=\"height: 300px;\">
                <table class=\"table table-head-fixed text-nowrap\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>NomProduit</th>
                        <th>DescriptionProduit</th>
                        <th>PrixProduit</th>
                        <th>QuantiteProduit</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>183</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                        <td><span class=\"tag tag-success\">Approved</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                        <td>219</td>
                        <td>Alexander Pierce</td>
                        <td>11-7-2014</td>
                        <td><span class=\"tag tag-warning\">Pending</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                        <td>657</td>
                        <td>Bob Doe</td>
                        <td>11-7-2014</td>
                        <td><span class=\"tag tag-primary\">Approved</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                        <td>175</td>
                        <td>Mike Doe</td>
                        <td>11-7-2014</td>
                        <td><span class=\"tag tag-danger\">Denied</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                        <td>134</td>
                        <td>Jim Doe</td>
                        <td>11-7-2014</td>
                        <td><span class=\"tag tag-success\">Approved</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                        <td>494</td>
                        <td>Victoria Doe</td>
                        <td>11-7-2014</td>
                        <td><span class=\"tag tag-warning\">Pending</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                        <td>832</td>
                        <td>Michael Doe</td>
                        <td>11-7-2014</td>
                        <td><span class=\"tag tag-primary\">Approved</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                        <td>982</td>
                        <td>Rocky Doe</td>
                        <td>11-7-2014</td>
                        <td><span class=\"tag tag-danger\">Denied</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Back/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block bodyBack %}
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
            <div class=\"card-body table-responsive p-0\" style=\"height: 300px;\">
                <table class=\"table table-head-fixed text-nowrap\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>NomProduit</th>
                        <th>DescriptionProduit</th>
                        <th>PrixProduit</th>
                        <th>QuantiteProduit</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>183</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                        <td><span class=\"tag tag-success\">Approved</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                        <td>219</td>
                        <td>Alexander Pierce</td>
                        <td>11-7-2014</td>
                        <td><span class=\"tag tag-warning\">Pending</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                        <td>657</td>
                        <td>Bob Doe</td>
                        <td>11-7-2014</td>
                        <td><span class=\"tag tag-primary\">Approved</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                        <td>175</td>
                        <td>Mike Doe</td>
                        <td>11-7-2014</td>
                        <td><span class=\"tag tag-danger\">Denied</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                        <td>134</td>
                        <td>Jim Doe</td>
                        <td>11-7-2014</td>
                        <td><span class=\"tag tag-success\">Approved</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                        <td>494</td>
                        <td>Victoria Doe</td>
                        <td>11-7-2014</td>
                        <td><span class=\"tag tag-warning\">Pending</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                        <td>832</td>
                        <td>Michael Doe</td>
                        <td>11-7-2014</td>
                        <td><span class=\"tag tag-primary\">Approved</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                        <td>982</td>
                        <td>Rocky Doe</td>
                        <td>11-7-2014</td>
                        <td><span class=\"tag tag-danger\">Denied</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
{% endblock %}", "Back/table.html.twig", "C:\\Users\\Nour Hammami\\Desktop\\pii\\PiDev10\\templates\\Back\\table.html.twig");
    }
}
