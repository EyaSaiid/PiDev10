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

/* Front/index.html.twig */
class __TwigTemplate_1130de61fab7c76a658bfc57ab8b650ff79bdc0d7fa1e25daab00f56af0846df extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/index.html.twig", 1);
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
        echo "    <!-- Carousel Start -->
    <div class=\"carousel\">
        <div class=\"container-fluid\">
            <div class=\"owl-item\">

                <div class=\"carousel-item\">
                    <div class=\"carousel-img\">
                        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/carousel-1.jpg"), "html", null, true);
        echo "\" alt=\"Image\">

                    </div>
                    <div class=\"carousel-text\">
                        <h1> Pour les amateurs de la <span>bonne bouffe</span>, Chez Dma9 vous trouverez votre plaisir</h1>
                        <p>

                        </p>
                        <div class=\"carousel-btn\">
                            <a class=\"btn custom-btn\" href=\"\">Visiter la boutique en ligne</a>
                            <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new");
        echo "\" class=\"btn custom-btn\" href=\"\">Reserver une table</a>
                        </div>
                    </div>
                </div>







            </div>
        </div>
    </div>
    <!-- Carousel End -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block bodyMenu %}
    <!-- Carousel Start -->
    <div class=\"carousel\">
        <div class=\"container-fluid\">
            <div class=\"owl-item\">

                <div class=\"carousel-item\">
                    <div class=\"carousel-img\">
                        <img src=\"{{ asset('Front/img/carousel-1.jpg') }}\" alt=\"Image\">

                    </div>
                    <div class=\"carousel-text\">
                        <h1> Pour les amateurs de la <span>bonne bouffe</span>, Chez Dma9 vous trouverez votre plaisir</h1>
                        <p>

                        </p>
                        <div class=\"carousel-btn\">
                            <a class=\"btn custom-btn\" href=\"\">Visiter la boutique en ligne</a>
                            <a href=\"{{ path(\"reservation_new\") }}\" class=\"btn custom-btn\" href=\"\">Reserver une table</a>
                        </div>
                    </div>
                </div>







            </div>
        </div>
    </div>
    <!-- Carousel End -->

{% endblock %}
", "Front/index.html.twig", "C:\\Users\\dell\\Desktop\\PGit\\PiDev10\\templates\\Front\\index.html.twig");
    }
}
