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

/* Back/GestionProduit.html.twig */
class __TwigTemplate_ee5445753fa9028c8506664e03c23730c2a63d649f9c1c7fb000e366ea321a3d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/GestionProduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/GestionProduit.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "Back/GestionProduit.html.twig", 1);
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
        echo "

            <!-- Main content -->
            <section class=\"content\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <!-- left column -->
                        <div class=\"col-md-6\">
                            <!-- general form elements -->
                            <div class=\"card card-primary\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\">Ajouter produit</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class=\"card-body\">
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputEmail1\">Nom produit</label>
                                            <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter le nom\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputPassword1\">Description produit</label>
                                            <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"description\">
                                        </div>

                                        <div class=\"form-group\">
                                            <label for=\"exampleInputPassword1\">prix produit</label>
                                            <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"prix\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputPassword1\">quantité produit</label>
                                            <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"quantité\">
                                        </div>
                                      ";
        // line 50
        echo "
                                        <!-- /.card-body -->

                                    <div class=\"card-footer\">
                                         <button type=\"submit\" class=\"btn btn-primary\">Submit </button>



                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->


    </script>
    </body>
    </html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Back/GestionProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 50,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block bodyBack %}


            <!-- Main content -->
            <section class=\"content\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <!-- left column -->
                        <div class=\"col-md-6\">
                            <!-- general form elements -->
                            <div class=\"card card-primary\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\">Ajouter produit</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class=\"card-body\">
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputEmail1\">Nom produit</label>
                                            <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter le nom\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputPassword1\">Description produit</label>
                                            <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"description\">
                                        </div>

                                        <div class=\"form-group\">
                                            <label for=\"exampleInputPassword1\">prix produit</label>
                                            <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"prix\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputPassword1\">quantité produit</label>
                                            <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"quantité\">
                                        </div>
                                      {#  <div class=\"form-group\">
                                            <label for=\"exampleInputFile\">Image du produit</label>
                                            <div class=\"input-group\">
                                                <div class=\"custom-file\">
                                                    <input type=\"file\" class=\"custom-file-input\" id=\"exampleInputFile\">
                                                    <label class=\"custom-file-label\" for=\"exampleInputFile\">Choose file</label>
                                                </div>
                                                <div class=\"input-group-append\">
                                                    <span class=\"input-group-text\">Upload</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>#}

                                        <!-- /.card-body -->

                                    <div class=\"card-footer\">
                                         <button type=\"submit\" class=\"btn btn-primary\">Submit </button>



                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->


    </script>
    </body>
    </html>

{% endblock %}", "Back/GestionProduit.html.twig", "C:\\Users\\Nour Hammami\\Desktop\\pii\\PiDev10\\templates\\Back\\GestionProduit.html.twig");
    }
}
