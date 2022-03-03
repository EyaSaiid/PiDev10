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

/* Front/listRestaurent.html.twig */
class __TwigTemplate_f350c5b2a1b639ff6bcb5eafbb6cdedbb501a4135da5e6c7d703eb085e9f108b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/listRestaurent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/listRestaurent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/listRestaurent.html.twig", 1);
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
        echo "<!-- Food Start -->
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
        // line 14
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
        return "Front/listRestaurent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block bodyMenu %}
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

{% endblock %}", "Front/listRestaurent.html.twig", "C:\\Users\\AMEN\\OneDrive\\Bureau\\PIgit\\GitHub\\PiDev10\\templates\\Front\\listRestaurent.html.twig");
    }
}
