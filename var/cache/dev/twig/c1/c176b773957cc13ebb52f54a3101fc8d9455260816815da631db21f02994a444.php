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

/* Front/about.html.twig */
class __TwigTemplate_c015a8ede01e0ba98f8be16cb935567a5cfdd4543dc59dab6cbb9a82e523d513 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/about.html.twig", 1);
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
                    <h2>About Us</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class=\"about\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6\">
                    <div class=\"about-img\">
                        <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/about.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                        <button type=\"button\" class=\"btn-play\" data-toggle=\"modal\" data-src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/embed/DWRcNpR6Kdc"), "html", null, true);
        echo "\" data-target=\"#videoModal\">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"about-content\">
                        <div class=\"section-header\">
                            <p>About Us</p>
                            <h2>Cooking Since 1990</h2>
                        </div>
                        <div class=\"about-text\">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                            </p>
                            <a class=\"btn custom-btn\" href=\"\">Book A Table</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Video Modal Start-->
    <div class=\"modal fade\" id=\"videoModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"\" id=\"video\"  allowscriptaccess=\"always\" allow=\"autoplay\"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    <hr data-content=\"AND\" class=\"hr-text\">
    <!-- Team Start -->
    <div class=\"team\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <p>Our Team</p>
                <h2>DevFive</h2>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"";
        // line 82
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
        // line 99
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
        // line 116
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
        // line 133
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
        // line 150
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
        // line 167
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
        return "Front/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 167,  235 => 150,  215 => 133,  195 => 116,  175 => 99,  155 => 82,  96 => 26,  92 => 25,  68 => 3,  58 => 2,  35 => 1,);
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
                    <h2>About Us</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class=\"about\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6\">
                    <div class=\"about-img\">
                        <img src=\"{{ asset('Front/img/about.jpg') }}\" alt=\"Image\">
                        <button type=\"button\" class=\"btn-play\" data-toggle=\"modal\" data-src=\"{{ asset('https://www.youtube.com/embed/DWRcNpR6Kdc') }}\" data-target=\"#videoModal\">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"about-content\">
                        <div class=\"section-header\">
                            <p>About Us</p>
                            <h2>Cooking Since 1990</h2>
                        </div>
                        <div class=\"about-text\">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                            </p>
                            <a class=\"btn custom-btn\" href=\"\">Book A Table</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Video Modal Start-->
    <div class=\"modal fade\" id=\"videoModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"\" id=\"video\"  allowscriptaccess=\"always\" allow=\"autoplay\"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    <hr data-content=\"AND\" class=\"hr-text\">
    <!-- Team Start -->
    <div class=\"team\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <p>Our Team</p>
                <h2>DevFive</h2>
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
", "Front/about.html.twig", "C:\\Users\\SAID EYA\\Desktop\\PiGit\\Pi\\templates\\Front\\about.html.twig");
    }
}
