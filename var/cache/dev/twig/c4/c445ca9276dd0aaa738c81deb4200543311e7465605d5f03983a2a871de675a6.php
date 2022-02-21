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

/* base.html.twig */
class __TwigTemplate_d9877dd0e39f1521ed25d99cd653a789ad8ce762d5b34cf60fe62d78287c101d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'bodyMenu' => [$this, 'block_bodyMenu'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        echo "    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"Free Website Template\" name=\"keywords\">
    <meta content=\"Free Website Template\" name=\"description\">
    <!-- Favicon -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\">
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 63
        echo "
    ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 106
        echo "</head>
<body>
";
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 239
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "
        <!-- Google Font -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- CSS Libraries -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/flaticon/font/flaticon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        <!-- Template Stylesheet -->
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


        ";
        // line 48
        echo "

        <!-- FontAwesome -->
        <link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins1/fontawesome/css/all.min.css"), "html", null, true);
        echo "\">
        <!-- Animation -->
        <link rel=\"stylesheet\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins1/animate-css/animate.css"), "html", null, true);
        echo "\">
        <!-- slick Carousel -->
        <link rel=\"stylesheet\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins1/slick/slick.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins1/slick/slick-theme.css"), "html", null, true);
        echo "\">
        <!-- Template styles-->
        <link rel=\"stylesheet\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css1/style.css"), "html", null, true);
        echo "\">



    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "        <!-- JavaScript Libraries -->
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/tempusdominus/js/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Contact Javascript File -->
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/mail/jqBootstrapValidation.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/mail/contact.js"), "html", null, true);
        echo "\"></script>

        <!-- Template Javascript -->
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        echo "\"></script>




        <!-- Javascript Files
       ================================================== -->

        <!-- initialize jQuery Library -->
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins1/jQuery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap jQuery -->
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins1/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\" defer></script>
        <!-- Slick Carousel -->
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins1/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins1/slick/slick-animation.min.j"), "html", null, true);
        echo "s\"></script>
        <!-- Color box -->
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins1/colorbox/jquery.colorbox.js"), "html", null, true);
        echo "\"></script>
        <!-- shuffle -->
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins1/shuffle/shuffle.min.js"), "html", null, true);
        echo "\" defer></script>
        <!-- Template custom -->
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js1/script.js"), "html", null, true);
        echo "\"></script>





    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 109
        echo "
    <!-- Nav Bar Start -->
    <div class=\"navbar navbar-expand-lg bg-light navbar-light\">
        <div class=\"container-fluid\">
            <a href=\"base.html.twig\" class=\"navbar-brand\">Dma9-دمق</a>
            <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarCollapse\">
                <li class=\"navbar-nav ml-auto\">
                    <a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-item nav-link active\">Home</a>
                    <a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\" class=\"nav-item nav-link\">About</a>
                    <a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feature");
        echo "\" class=\"nav-item nav-link\">Feature</a>
                    <a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_travail_showAll");
        echo "\" class=\"nav-item nav-link\">Jobs</a>
                    ";
        // line 124
        echo "                     <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_menu");
        echo "\" class=\"nav-item nav-link\">Detail menu</a>
                    <a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_restaurant");
        echo "\" class=\"nav-item nav-link\"> Restaurants </a>
                    <a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking");
        echo "\" class=\"nav-item nav-link\"> Booking </a>
                    <a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"nav-item nav-link\">Contact</a>
                    ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128)) {
            // line 129
            echo "                    <div class=\"nav-item dropdown\">

                        <div class=\"mb-3\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "username", [], "any", false, false, false, 133), "html", null, true);
            echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">???</a>
                                <a class=\"dropdown-item\" href=\" \">Profile</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 138
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\">Admin</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 139
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" >Logout</a>
                            </div>
                        </div>

                    </div>

                    ";
        } else {
            // line 146
            echo "                            <div class=\"mb-3\">

                                    <a href=\"";
            // line 148
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-item nav-link \">Login</a>
                            </div>

                    ";
        }
        // line 152
        echo "                   ";
        // line 160
        echo "                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->




";
        // line 169
        $this->displayBlock('bodyMenu', $context, $blocks);
        // line 170
        echo "

    <!-- Footer Start -->
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"footer-contact\">
                                <h2>Our Address</h2>
                                <p><i class=\"fa fa-map-marker-alt\"></i>123 Street, New York, USA</p>
                                <p><i class=\"fa fa-phone-alt\"></i>+012 345 67890</p>
                                <p><i class=\"fa fa-envelope\"></i>info@example.com</p>
                                <div class=\"footer-social\">
                                    <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a href=\"\"><i class=\"fab fa-youtube\"></i></a>
                                    <a href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                    <a href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"footer-link\">
                                <h2>Quick Links</h2>
                                <a href=\"\">Terms of use</a>
                                <a href=\"\">Privacy policy</a>
                                <a href=\"\">Cookies</a>
                                <a href=\"\">Help</a>
                                <a href=\"\">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"footer-newsletter\">
                        <h2>Newsletter</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Quisque eu lectus a leo dictum nec non quam. Tortor eu placerat rhoncus, lorem quam iaculis felis, sed lacus neque id eros.
                        </p>
                        <div class=\"form\">
                            <input class=\"form-control\" placeholder=\"Email goes here\">
                            <button class=\"btn custom-btn\">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright\">
            <div class=\"container\">
                <p>Copyright &copy; <a href=\"#\">Your Site Name</a>, All Right Reserved.</p>
                <p>Designed By <a href= ";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://htmlcodex.com"), "html", null, true);
        echo " >HTML Codex</a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href=\"#\" class=\"back-to-top\"><i class=\"fa fa-chevron-up\"></i></a>


    <!-- JavaScript Libraries -->

    <!-- Contact Javascript File -->

    <!-- Template Javascript -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 169
    public function block_bodyMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyMenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyMenu"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  505 => 169,  478 => 222,  424 => 170,  422 => 169,  411 => 160,  409 => 152,  402 => 148,  398 => 146,  388 => 139,  384 => 138,  376 => 133,  370 => 129,  368 => 128,  364 => 127,  360 => 126,  356 => 125,  351 => 124,  347 => 122,  343 => 121,  339 => 120,  335 => 119,  323 => 109,  313 => 108,  296 => 99,  291 => 97,  286 => 95,  281 => 93,  277 => 92,  272 => 90,  267 => 88,  255 => 79,  249 => 76,  245 => 75,  239 => 72,  235 => 71,  231 => 70,  227 => 69,  223 => 68,  219 => 67,  215 => 66,  212 => 65,  202 => 64,  187 => 58,  182 => 56,  178 => 55,  173 => 53,  168 => 51,  163 => 48,  157 => 27,  151 => 24,  147 => 23,  143 => 22,  139 => 21,  135 => 20,  131 => 19,  125 => 16,  121 => 14,  111 => 13,  92 => 5,  81 => 239,  79 => 108,  75 => 106,  73 => 64,  70 => 63,  68 => 13,  64 => 12,  58 => 8,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {# Run `composer require symfony/webpack-encore-bundle`
    and uncomment the following Encore helpers to start using Symfony UX #}
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"Free Website Template\" name=\"keywords\">
    <meta content=\"Free Website Template\" name=\"description\">
    <!-- Favicon -->
    <link href=\"{{ asset('Front/img/favicon.ico') }}\" rel=\"icon\">
    {% block stylesheets %}

        <!-- Google Font -->
        <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700') }}\" rel=\"stylesheet\">

        <!-- CSS Libraries -->
        <link href=\"{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('Front/lib/animate/animate.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('Front/lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('Front/lib/flaticon/font/flaticon.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('Front/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}\" rel=\"stylesheet\" />

        <!-- Template Stylesheet -->
        <link href=\"{{ asset('Front/css/style.css') }}\" rel=\"stylesheet\">


        {#<!-- CSS
================================================== -->
        <!-- Bootstrap -->
        <link rel=\"stylesheet\" href=\"{{ asset('Front/plugins1/bootstrap/bootstrap.min.css') }}\">

        <!-- FontAwesome -->
        <link rel=\"stylesheet\" href=\"{{ asset('Front/plugins1/fontawesome/css/all.min.css') }}\">
        <!-- Animation -->
        <link rel=\"stylesheet\" href=\"{{ asset('Front/plugins1/animate-css/animate.css') }}\">
        <!-- slick Carousel -->
        <link rel=\"stylesheet\" href=\"{{ asset('Front/plugins1/slick/slick.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('Front/plugins1/slick/slick-theme.css') }}\">
        <!-- Colorbox -->
        <link rel=\"stylesheet\" href=\"{{ asset('Front/plugins1/colorbox/colorbox.css') }}\">
        <!-- Template styles-->
        <link rel=\"stylesheet\" href=\"{{ asset('Front/css1/style.css') }}\">

#}


        <!-- FontAwesome -->
        <link rel=\"stylesheet\" href=\"{{ asset('Front/plugins1/fontawesome/css/all.min.css') }}\">
        <!-- Animation -->
        <link rel=\"stylesheet\" href=\"{{ asset('Front/plugins1/animate-css/animate.css') }}\">
        <!-- slick Carousel -->
        <link rel=\"stylesheet\" href=\"{{ asset('Front/plugins1/slick/slick.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('Front/plugins1/slick/slick-theme.css') }}\">
        <!-- Template styles-->
        <link rel=\"stylesheet\" href=\"{{ asset('Front/css1/style.css') }}\">



    {% endblock %}

    {% block javascripts %}
        <!-- JavaScript Libraries -->
        <script src=\"{{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}\"></script>
        <script src=\"{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js') }}\"></script>
        <script src=\"{{ asset('Front/lib/easing/easing.min.js') }}\"></script>
        <script src=\"{{ asset('Front/lib/owlcarousel/owl.carousel.min.js') }}\"></script>
        <script src=\"{{ asset('Front/lib/tempusdominus/js/moment.min.js') }}\"></script>
        <script src=\"{{ asset('Front/lib/tempusdominus/js/moment-timezone.min.js') }}\"></script>
        <script src=\"{{ asset('Front/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}\"></script>

        <!-- Contact Javascript File -->
        <script src=\"{{ asset('Front/mail/jqBootstrapValidation.min.js') }}\"></script>
        <script src=\"{{ asset('Front/mail/contact.js') }}\"></script>

        <!-- Template Javascript -->
        <script src=\"{{ asset('Front/js/main.js') }}\"></script>




        <!-- Javascript Files
       ================================================== -->

        <!-- initialize jQuery Library -->
        <script src=\"{{ asset('Front/plugins1/jQuery/jquery.min.js') }}\"></script>
        <!-- Bootstrap jQuery -->
        <script src=\"{{ asset('Front/plugins1/bootstrap/bootstrap.min.js') }}\" defer></script>
        <!-- Slick Carousel -->
        <script src=\"{{ asset('Front/plugins1/slick/slick.min.js') }}\"></script>
        <script src=\"{{ asset('Front/plugins1/slick/slick-animation.min.j') }}s\"></script>
        <!-- Color box -->
        <script src=\"{{ asset('Front/plugins1/colorbox/jquery.colorbox.js') }}\"></script>
        <!-- shuffle -->
        <script src=\"{{ asset('Front/plugins1/shuffle/shuffle.min.js') }}\" defer></script>
        <!-- Template custom -->
        <script src=\"{{ asset('Front/js1/script.js') }}\"></script>





    {% endblock %}
</head>
<body>
{% block body %}

    <!-- Nav Bar Start -->
    <div class=\"navbar navbar-expand-lg bg-light navbar-light\">
        <div class=\"container-fluid\">
            <a href=\"base.html.twig\" class=\"navbar-brand\">Dma9-دمق</a>
            <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarCollapse\">
                <li class=\"navbar-nav ml-auto\">
                    <a href=\"{{ path('home') }}\" class=\"nav-item nav-link active\">Home</a>
                    <a href=\"{{ path('about') }}\" class=\"nav-item nav-link\">About</a>
                    <a href=\"{{ path(\"feature\") }}\" class=\"nav-item nav-link\">Feature</a>
                    <a href=\"{{ path(\"offre_travail_showAll\") }}\" class=\"nav-item nav-link\">Jobs</a>
                    {# <a href=\"{{ path('templates/menu.html.twig') }}\" class=\"nav-item nav-link\">Menu</a> #}
                     <a href=\"{{ path(\"details_menu\") }}\" class=\"nav-item nav-link\">Detail menu</a>
                    <a href=\"{{ path(\"list_restaurant\") }}\" class=\"nav-item nav-link\"> Restaurants </a>
                    <a href=\"{{ path(\"booking\") }}\" class=\"nav-item nav-link\"> Booking </a>
                    <a href=\"{{ path(\"contact\") }}\" class=\"nav-item nav-link\">Contact</a>
                    {% if app.user %}
                    <div class=\"nav-item dropdown\">

                        <div class=\"mb-3\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                {{ app.user.username }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">???</a>
                                <a class=\"dropdown-item\" href=\" \">Profile</a>
                                <a class=\"dropdown-item\" href=\"{{ path('user_index') }}\">Admin</a>
                                <a class=\"dropdown-item\" href=\"{{ path(\"app_logout\") }}\" >Logout</a>
                            </div>
                        </div>

                    </div>

                    {% else %}
                            <div class=\"mb-3\">

                                    <a href=\"{{ path(\"app_login\") }}\" class=\"nav-item nav-link \">Login</a>
                            </div>

                    {% endif %}
                   {# <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Pages</a>
                        <div class=\"dropdown-menu\">
                            <a href=\"{{ path(blog.html) }}\" class=\"dropdown-item\">Blog Grid</a>
                            <a href=\"{{ path(\"single.html\") }}\" class=\"dropdown-item\">Blog Detail</a>
                        </div>
                    </div>
                    #}
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->




{% block bodyMenu %} {% endblock %}


    <!-- Footer Start -->
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"footer-contact\">
                                <h2>Our Address</h2>
                                <p><i class=\"fa fa-map-marker-alt\"></i>123 Street, New York, USA</p>
                                <p><i class=\"fa fa-phone-alt\"></i>+012 345 67890</p>
                                <p><i class=\"fa fa-envelope\"></i>info@example.com</p>
                                <div class=\"footer-social\">
                                    <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a href=\"\"><i class=\"fab fa-youtube\"></i></a>
                                    <a href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                    <a href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"footer-link\">
                                <h2>Quick Links</h2>
                                <a href=\"\">Terms of use</a>
                                <a href=\"\">Privacy policy</a>
                                <a href=\"\">Cookies</a>
                                <a href=\"\">Help</a>
                                <a href=\"\">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"footer-newsletter\">
                        <h2>Newsletter</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Quisque eu lectus a leo dictum nec non quam. Tortor eu placerat rhoncus, lorem quam iaculis felis, sed lacus neque id eros.
                        </p>
                        <div class=\"form\">
                            <input class=\"form-control\" placeholder=\"Email goes here\">
                            <button class=\"btn custom-btn\">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright\">
            <div class=\"container\">
                <p>Copyright &copy; <a href=\"#\">Your Site Name</a>, All Right Reserved.</p>
                <p>Designed By <a href= {{asset('https://htmlcodex.com')}} >HTML Codex</a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href=\"#\" class=\"back-to-top\"><i class=\"fa fa-chevron-up\"></i></a>


    <!-- JavaScript Libraries -->

    <!-- Contact Javascript File -->

    <!-- Template Javascript -->


{% endblock %}
</body>
</html>", "base.html.twig", "C:\\Users\\SAID EYA\\Desktop\\PiGit\\Pi\\templates\\base.html.twig");
    }
}
