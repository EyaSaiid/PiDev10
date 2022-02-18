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

/* Front/team.html.twig */
class __TwigTemplate_f48af5b6bfae7b5733b055f83985d255a92aabb88d25f880e33f45f7e5e0ddba extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/team.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/team.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/team.html.twig", 1);
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
    <div class=\"page-header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2>Master Chef</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Chef</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Team Start -->
    <div class=\"team\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <p>Our Team</p>
                <h2>Our Master Chef</h2>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/eya.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                            <div class=\"team-social\">
                                <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-text\">
                            <h2>Eya SAID</h2>
                            <p>CEO, Co Founder</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/nour.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                            <div class=\"team-social\">
                                <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-text\">
                            <h2>Nour HAMMAMI</h2>
                            <p>Master Chef</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/ines.PNG"), "html", null, true);
        echo "\" alt=\"Image\">
                            <div class=\"team-social\">
                                <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-text\">
                            <h2>Ines HABA</h2>
                            <p>Master Chef</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/amen.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                            <div class=\"team-social\">
                                <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-text\">
                            <h2>Amen GABSI</h2>
                            <p>Master Chef</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/badi.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                            <div class=\"team-social\">
                                <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-text\">
                            <h2>Badi GUEDOUAR</h2>
                            <p>Master Chef</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/yassine.png"), "html", null, true);
        echo "\" alt=\"Image\">
                            <div class=\"team-social\">
                                <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-text\">
                            <h2>Yassine SELLAMI</h2>
                            <p>Master Chef</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 115,  177 => 98,  157 => 81,  137 => 64,  117 => 47,  97 => 30,  68 => 3,  58 => 2,  35 => 1,);
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
                    <h2>Master Chef</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Chef</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Team Start -->
    <div class=\"team\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <p>Our Team</p>
                <h2>Our Master Chef</h2>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"{{ asset('Front/img/eya.jpg') }}\" alt=\"Image\">
                            <div class=\"team-social\">
                                <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-text\">
                            <h2>Eya SAID</h2>
                            <p>CEO, Co Founder</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"{{ asset('Front/img/nour.jpg') }}\" alt=\"Image\">
                            <div class=\"team-social\">
                                <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-text\">
                            <h2>Nour HAMMAMI</h2>
                            <p>Master Chef</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"{{ asset('Front/img/ines.PNG') }}\" alt=\"Image\">
                            <div class=\"team-social\">
                                <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-text\">
                            <h2>Ines HABA</h2>
                            <p>Master Chef</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"{{ asset('Front/img/amen.jpg') }}\" alt=\"Image\">
                            <div class=\"team-social\">
                                <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-text\">
                            <h2>Amen GABSI</h2>
                            <p>Master Chef</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"{{ asset('Front/img/badi.jpg') }}\" alt=\"Image\">
                            <div class=\"team-social\">
                                <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-text\">
                            <h2>Badi GUEDOUAR</h2>
                            <p>Master Chef</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"{{ asset('Front/img/yassine.png') }}\" alt=\"Image\">
                            <div class=\"team-social\">
                                <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-text\">
                            <h2>Yassine SELLAMI</h2>
                            <p>Master Chef</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

{% endblock %}
", "Front/team.html.twig", "C:\\Users\\dell\\Desktop\\PGit\\PiDev10\\templates\\Front\\team.html.twig");
    }
}
