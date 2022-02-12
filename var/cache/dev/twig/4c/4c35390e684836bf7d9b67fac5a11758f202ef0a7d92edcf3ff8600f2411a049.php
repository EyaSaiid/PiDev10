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

/* Front/details_menu.html.twig */
class __TwigTemplate_8303787932c1c5a5dbe13c948a2c74ddca3465f2461d80bfad59470b4a9ed7b7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/details_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/details_menu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/details_menu.html.twig", 1);
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
                    <h2>Food Menu</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Menu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Menu Start -->
    <div class=\"menu\">
        <div class=\"container\">
            <div class=\"section-header text-center\">

                <h2>Delicious Food Menu</h2>
            </div>
            <div class=\"menu-tab\">
                <ul class=\"nav nav-pills justify-content-center\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" data-toggle=\"pill\" href=\"#burgers\">Burgers</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-toggle=\"pill\" href=\"#snacks\">Snacks</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-toggle=\"pill\" href=\"#beverages\">Beverages</a>
                    </li>
                </ul>
                <div class=\"tab-content\">
                    <div id=\"burgers\" class=\"container tab-pane active\">
                        <div class=\"row\">
                            <div class=\"col-lg-7 col-md-12\">
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-burger.jpg"), "html", null, true);
        echo "\"  alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Mini cheese Burger</span> <strong>\$9.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-burger.jpg"), "html", null, true);
        echo "\"  alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Double size burger</span> <strong>\$11.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-burger.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Bacon, EGG and Cheese</span> <strong>\$13.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-burger.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Pulled porx Burger</span> <strong>\$18.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-burger.jpg"), "html", null, true);
        echo "\"  alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Fried chicken Burger</span> <strong>\$22.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-5 d-none d-lg-block\">
                                <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-burger-img.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                            </div>
                        </div>
                    </div>
                    <div id=\"snacks\" class=\"container tab-pane fade\">
                        <div class=\"row\">
                            <div class=\"col-lg-7 col-md-12\">
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-snack-img.jpg"), "html", null, true);
        echo "\"alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Corn Tikki - Spicy fried Aloo</span> <strong>\$15.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-snack-img.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Bread besan Toast</span> <strong>\$35.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-snack-img.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Healthy soya nugget snacks</span> <strong>\$20.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-snack-img.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Tandoori Soya Chunks</span> <strong>\$30.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-5 d-none d-lg-block\">
                                <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-snack-img.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                            </div>
                        </div>
                    </div>
                    <div id=\"beverages\" class=\"container tab-pane fade\">
                        <div class=\"row\">
                            <div class=\"col-lg-7 col-md-12\">
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-beverage.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Single Cup Brew</span> <strong>\$7.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-beverage.jpg"), "html", null, true);
        echo "\"alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Caffe Americano</span> <strong>\$9.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-beverage.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Caramel Macchiato</span> <strong>\$15.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-beverage.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Standard black coffee</span> <strong>\$8.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-beverage.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Standard black coffee</span> <strong>\$12.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-5 d-none d-lg-block\">
                                <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-beverage.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/details_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 188,  290 => 179,  278 => 170,  266 => 161,  254 => 152,  242 => 143,  230 => 134,  218 => 125,  206 => 116,  194 => 107,  182 => 98,  170 => 89,  158 => 80,  146 => 71,  134 => 62,  122 => 53,  110 => 44,  68 => 4,  58 => 3,  35 => 1,);
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
                    <h2>Food Menu</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Menu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Menu Start -->
    <div class=\"menu\">
        <div class=\"container\">
            <div class=\"section-header text-center\">

                <h2>Delicious Food Menu</h2>
            </div>
            <div class=\"menu-tab\">
                <ul class=\"nav nav-pills justify-content-center\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" data-toggle=\"pill\" href=\"#burgers\">Burgers</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-toggle=\"pill\" href=\"#snacks\">Snacks</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-toggle=\"pill\" href=\"#beverages\">Beverages</a>
                    </li>
                </ul>
                <div class=\"tab-content\">
                    <div id=\"burgers\" class=\"container tab-pane active\">
                        <div class=\"row\">
                            <div class=\"col-lg-7 col-md-12\">
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"{{ asset('Front/img/menu-burger.jpg')}}\"  alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Mini cheese Burger</span> <strong>\$9.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"{{ asset('Front/img/menu-burger.jpg')}}\"  alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Double size burger</span> <strong>\$11.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"{{ asset('Front/img/menu-burger.jpg')}}\" alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Bacon, EGG and Cheese</span> <strong>\$13.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"{{ asset('Front/img/menu-burger.jpg')}}\" alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Pulled porx Burger</span> <strong>\$18.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"{{ asset('Front/img/menu-burger.jpg')}}\"  alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Fried chicken Burger</span> <strong>\$22.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-5 d-none d-lg-block\">
                                <img src=\"{{ asset('Front/img/menu-burger-img.jpg')}}\" alt=\"Image\">
                            </div>
                        </div>
                    </div>
                    <div id=\"snacks\" class=\"container tab-pane fade\">
                        <div class=\"row\">
                            <div class=\"col-lg-7 col-md-12\">
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"{{ asset('Front/img/menu-snack-img.jpg')}}\"alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Corn Tikki - Spicy fried Aloo</span> <strong>\$15.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"{{ asset('Front/img/menu-snack-img.jpg')}}\" alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Bread besan Toast</span> <strong>\$35.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"{{ asset('Front/img/menu-snack-img.jpg')}}\" alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Healthy soya nugget snacks</span> <strong>\$20.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"{{ asset('Front/img/menu-snack-img.jpg')}}\" alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Tandoori Soya Chunks</span> <strong>\$30.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-5 d-none d-lg-block\">
                                <img src=\"{{ asset('Front/img/menu-snack-img.jpg') }}\" alt=\"Image\">
                            </div>
                        </div>
                    </div>
                    <div id=\"beverages\" class=\"container tab-pane fade\">
                        <div class=\"row\">
                            <div class=\"col-lg-7 col-md-12\">
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"{{ asset('Front/img/menu-beverage.jpg')}}\" alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Single Cup Brew</span> <strong>\$7.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"{{ asset('Front/img/menu-beverage.jpg')}}\"alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Caffe Americano</span> <strong>\$9.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"{{ asset('Front/img/menu-beverage.jpg')}}\" alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Caramel Macchiato</span> <strong>\$15.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"{{ asset('Front/img/menu-beverage.jpg')}}\" alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Standard black coffee</span> <strong>\$8.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                                <div class=\"menu-item\">
                                    <div class=\"menu-img\">
                                        <img src=\"{{ asset('Front/img/menu-beverage.jpg')}}\" alt=\"Image\">
                                    </div>
                                    <div class=\"menu-text\">
                                        <h3><span>Standard black coffee</span> <strong>\$12.00</strong></h3>
                                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-5 d-none d-lg-block\">
                                <img src=\"{{ asset('Front/img/menu-beverage.jpg')}}\" alt=\"Image\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

{% endblock %}", "Front/details_menu.html.twig", "C:\\Users\\SAID EYA\\Desktop\\PiGit\\Pi\\templates\\Front\\details_menu.html.twig");
    }
}
