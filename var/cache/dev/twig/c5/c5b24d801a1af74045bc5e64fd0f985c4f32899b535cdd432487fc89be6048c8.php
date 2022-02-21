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
class __TwigTemplate_3e618b1bd4689e354245a34801c3b93b434c5478ebdebf9063a64581e0738f2a extends Template
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

    // line 2
    public function block_bodyMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyMenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyMenu"));

        // line 3
        echo "    <!-- Page Header Start -->
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
                <div class=\"col-md-4\">
                    <div class=\"food-item\">
                        <i class=\"flaticon-burger\"></i>
                        <h2>Burgers</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem.
                        </p>
                        <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant");
        echo "\">Voir Restaurent</a>
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
    <!-- Food End -->

";
        
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
        return array (  96 => 29,  68 => 3,  58 => 2,  35 => 1,);
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
                <div class=\"col-md-4\">
                    <div class=\"food-item\">
                        <i class=\"flaticon-burger\"></i>
                        <h2>Burgers</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem.
                        </p>
                        <a href=\"{{ path(\"restaurant\") }}\">Voir Restaurent</a>
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
    <!-- Food End -->

{% endblock %}", "Front/produitDma9.html.twig", "C:\\Users\\Nour Hammami\\Desktop\\pii\\PiDev10\\templates\\Front\\produitDma9.html.twig");
    }
}
