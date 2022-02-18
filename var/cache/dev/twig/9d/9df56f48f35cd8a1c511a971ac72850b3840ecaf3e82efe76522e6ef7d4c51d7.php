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

/* Front/feature.html.twig */
class __TwigTemplate_5a9e9e17a363dfa22523755e3ec770d1645cb4afbb3d5b9524b8061ce8fbc188 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/feature.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/feature.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/feature.html.twig", 1);
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
    <div class=\"page-header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2>Why Choose Us</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Features</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Feature Start -->

    <div class=\"feature\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"section-header\">
                        <p>Why Choose Us</p>
                        <h2>Our Key Features</h2>
                    </div>
                    <div class=\"feature-text\">
                        <div class=\"feature-img\">
                            <div class=\"row\">
                                <div class=\"col-6\">
                                    <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/feature-1.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                </div>
                                <div class=\"col-6\">
                                    <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/feature-2.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                </div>
                                <div class=\"col-6\">
                                    <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/feature-3.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                </div>
                                <div class=\"col-6\">
                                    <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/feature-4.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                </div>
                            </div>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Phasel nec preti mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor, auctor id gravida condime, viverra quis sem. Curabit non nisl nec nisi sceleri maximus
                        </p>
                        <a class=\"btn custom-btn\" href=\"\">Book A Table</a>
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"feature-item\">
                                <i class=\"flaticon-cooking\"></i>
                                <h3>World’s best Chef</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"feature-item\">
                                <i class=\"flaticon-vegetable\"></i>
                                <h3>Natural ingredients</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"feature-item\">
                                <i class=\"flaticon-medal\"></i>
                                <h3>Best quality products</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"feature-item\">
                                <i class=\"flaticon-meat\"></i>
                                <h3>Fresh vegetables & Meet</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"feature-item\">
                                <i class=\"flaticon-courier\"></i>
                                <h3>Fastest door delivery</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"feature-item\">
                                <i class=\"flaticon-fruits-and-vegetables\"></i>
                                <h3>Ground beef & Low fat</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 44,  113 => 41,  107 => 38,  101 => 35,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block bodyMenu %}
    <!-- Page Header Start -->
    <div class=\"page-header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2>Why Choose Us</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Features</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Feature Start -->

    <div class=\"feature\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"section-header\">
                        <p>Why Choose Us</p>
                        <h2>Our Key Features</h2>
                    </div>
                    <div class=\"feature-text\">
                        <div class=\"feature-img\">
                            <div class=\"row\">
                                <div class=\"col-6\">
                                    <img src=\"{{ asset('Front/img/feature-1.jpg') }}\" alt=\"Image\">
                                </div>
                                <div class=\"col-6\">
                                    <img src=\"{{ asset('Front/img/feature-2.jpg') }}\" alt=\"Image\">
                                </div>
                                <div class=\"col-6\">
                                    <img src=\"{{ asset('Front/img/feature-3.jpg') }}\" alt=\"Image\">
                                </div>
                                <div class=\"col-6\">
                                    <img src=\"{{ asset('Front/img/feature-4.jpg') }}\" alt=\"Image\">
                                </div>
                            </div>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Phasel nec preti mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor, auctor id gravida condime, viverra quis sem. Curabit non nisl nec nisi sceleri maximus
                        </p>
                        <a class=\"btn custom-btn\" href=\"\">Book A Table</a>
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"feature-item\">
                                <i class=\"flaticon-cooking\"></i>
                                <h3>World’s best Chef</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"feature-item\">
                                <i class=\"flaticon-vegetable\"></i>
                                <h3>Natural ingredients</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"feature-item\">
                                <i class=\"flaticon-medal\"></i>
                                <h3>Best quality products</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"feature-item\">
                                <i class=\"flaticon-meat\"></i>
                                <h3>Fresh vegetables & Meet</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"feature-item\">
                                <i class=\"flaticon-courier\"></i>
                                <h3>Fastest door delivery</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"feature-item\">
                                <i class=\"flaticon-fruits-and-vegetables\"></i>
                                <h3>Ground beef & Low fat</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

{% endblock %}
", "Front/feature.html.twig", "C:\\Users\\dell\\Desktop\\PGit\\PiDev10\\templates\\Front\\feature.html.twig");
    }
}
