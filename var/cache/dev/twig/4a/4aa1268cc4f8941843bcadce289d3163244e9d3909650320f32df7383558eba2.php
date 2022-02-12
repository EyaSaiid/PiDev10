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

/* base2.html.twig */
class __TwigTemplate_2f1d809e330993861c42a6b216a63756509db2294c04f16da3902c4f7b30bbf0 extends Template
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
            'bodyBack' => [$this, 'block_bodyBack'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <!-- Favicon -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\">
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "</head>
<body>
";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 422
        echo "
</body>
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

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "
        <!-- Google Font: Source Sans Pro -->
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"), "html", null, true);
        echo "\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">
        <!-- iCheck -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- JQVMap -->
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/jqvmap/jqvmap.min.css"), "html", null, true);
        echo "\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
        <!-- overlayScrollbars -->
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
        <!-- Daterange picker -->
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
        <!-- summernote -->
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/summernote/summernote-bs4.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "
        <!-- jQuery -->
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            \$.widget.bridge('uibutton', \$.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <!-- ChartJS -->
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Sparkline -->
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/sparklines/sparkline.js"), "html", null, true);
        echo "\"></script>
        <!-- JQVMap -->
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/jqvmap/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "\"></script>
        <!-- jQuery Knob Chart -->
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/jquery-knob/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
        <!-- daterangepicker -->
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Summernote -->
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
        <!-- overlayScrollbars -->
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE for demo purposes -->
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 73
        echo "<!-- Preloader -->
<div class=\"preloader flex-column justify-content-center align-items-center\">
    <img class=\"animation__shake\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/dist/img/AdminLTELogo.png"), "html", null, true);
        echo "\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
</div>

    <!-- Nav Bar Start -->
<!-- Navbar -->
<nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
        </li>
        <li class=\"nav-item d-none d-sm-inline-block\">
            <a href=\"index3.html\" class=\"nav-link\">Home</a>
        </li>
        <li class=\"nav-item d-none d-sm-inline-block\">
            <a href=\"#\" class=\"nav-link\">Contact</a>
        </li>
    </ul>
<!-- Right navbar links -->
<ul class=\"navbar-nav ml-auto\">
    <!-- Navbar Search -->
    <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
            <i class=\"fas fa-search\"></i>
        </a>
        <div class=\"navbar-search-block\">
            <form class=\"form-inline\">
                <div class=\"input-group input-group-sm\">
                    <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <div class=\"input-group-append\">
                        <button class=\"btn btn-navbar\" type=\"submit\">
                            <i class=\"fas fa-search\"></i>
                        </button>
                        <button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
                            <i class=\"fas fa-times\"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>
    <!-- Messages Dropdown Menu -->
    <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"far fa-comments\"></i>
            <span class=\"badge badge-danger navbar-badge\">3</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
            <a href=\"#\" class=\"dropdown-item\">
                <!-- Message Start -->
                <div class=\"media\">
                    <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
                    <div class=\"media-body\">
                        <h3 class=\"dropdown-item-title\">
                            Brad Diesel
                            <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                        </h3>
                        <p class=\"text-sm\">Call me whenever you can...</p>
                        <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                    </div>
                </div>
                <!-- Message End -->
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
                <!-- Message Start -->
                <div class=\"media\">
                    <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/dist/img/user8-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                    <div class=\"media-body\">
                        <h3 class=\"dropdown-item-title\">
                            John Pierce
                            <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                        </h3>
                        <p class=\"text-sm\">I got your message bro</p>
                        <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                    </div>
                </div>
                <!-- Message End -->
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
                <!-- Message Start -->
                <div class=\"media\">
                    <img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                    <div class=\"media-body\">
                        <h3 class=\"dropdown-item-title\">
                            Nora Silvester
                            <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                        </h3>
                        <p class=\"text-sm\">The subject goes here</p>
                        <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                    </div>
                </div>
                <!-- Message End -->
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
        </div>
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"far fa-bell\"></i>
            <span class=\"badge badge-warning navbar-badge\">15</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
            <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
                <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                <span class=\"float-right text-muted text-sm\">3 mins</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
                <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                <span class=\"float-right text-muted text-sm\">12 hours</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
                <i class=\"fas fa-file mr-2\"></i> 3 new reports
                <span class=\"float-right text-muted text-sm\">2 days</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
        </div>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
            <i class=\"fas fa-expand-arrows-alt\"></i>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"control-sidebar\" data-controlsidebar-slide=\"true\" href=\"#\" role=\"button\">
            <i class=\"fas fa-th-large\"></i>
        </a>
    </li>
</ul>
</nav>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"#\" class=\"brand-link\">
        <img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/dist/img/AdminLTELogo.png"), "html", null, true);
        echo "\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
        <span class=\"brand-text font-weight-light\">DevFive </span>
    </a>
    <!-- Sidebar -->
    <div class=\"sidebar\">
        <!-- Sidebar user panel (optional) -->
        <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
            <div class=\"image\">
                <img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
            </div>
            <div class=\"info\">
                <a href=\"#\" class=\"d-block\">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class=\"form-inline\">
            <div class=\"input-group\" data-widget=\"sidebar-search\">
                <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-sidebar\">
                        <i class=\"fas fa-search fa-fw\"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class=\"mt-2\">
            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class=\"nav-item \">
                    <a href=\"#\" class=\"nav-link active\">
                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                        <p>
                            Dashboard
                            <i class=\"right fas fa-angle-left\"></i>
                        </p>
                    </a>

                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 260
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("GestionUser");
        echo "\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-table\"></i>
                        <p>
                            Gestion Utilisateur
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>

                </li>


";
        // line 272
        echo "
                <nav class=\"mt-2\">


                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-table\"></i>
                            <p>
                                 GestionRestaurant
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 286
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("GestionRestaurant");
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Afficher Restaraunt</p>
                                </a>
                            </li>

                            <li class=\"nav-item\">
                                <a href=\"../forms/general.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Ajouter Restaraunt</p>
                                </a>
                            </li>

                        </ul>


                    </li>

                </nav>
 ";
        // line 306
        echo "



                <li class=\"nav-item\">
                    <a href=\"";
        // line 311
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("GestionProduit");
        echo "\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-table\"></i>
                        <p>
                            Gestion Produit
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>

                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 321
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("GestionOffreTravail");
        echo "\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-table\"></i>
                        <p>
                            Gestion Offres de travail
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a href=\"";
        // line 331
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("GestionEvenement");
        echo "\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-table\"></i>
                        <p>
                            Gestion Evenement
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a href=\"";
        // line 341
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("GestionMenu");
        echo "\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-table\"></i>
                        <p>
                            Gestion Menu
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                </li>


                <li class=\"nav-item\">
                    <a href=\"";
        // line 352
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("GestionArtiste");
        echo "\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-table\"></i>
                        <p>
                            Gestion Artiste
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a href=\"";
        // line 362
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("GestionCommande");
        echo "\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-table\"></i>
                        <p>
                            Gestion <Commande></Commande>
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                </li>


                <li class=\"nav-header\">EXAMPLES</li>





            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>




    <!-- Nav Bar End -->

<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h1 class=\"m-0\">Dashboard</h1>
                </div><!-- /.col -->
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                        <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                        <li class=\"breadcrumb-item active\">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class=\"content-wrapper\">

    ";
        // line 411
        $this->displayBlock('bodyBack', $context, $blocks);
        // line 412
        echo "
    </div>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 411
    public function block_bodyBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyBack"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  697 => 411,  678 => 412,  676 => 411,  624 => 362,  611 => 352,  597 => 341,  584 => 331,  571 => 321,  558 => 311,  551 => 306,  529 => 286,  513 => 272,  499 => 260,  462 => 226,  451 => 218,  388 => 158,  369 => 142,  350 => 126,  296 => 75,  292 => 73,  282 => 72,  270 => 68,  265 => 66,  260 => 64,  255 => 62,  250 => 60,  245 => 58,  240 => 56,  236 => 55,  231 => 53,  226 => 51,  222 => 50,  217 => 48,  212 => 46,  207 => 44,  198 => 38,  193 => 36,  189 => 34,  179 => 33,  167 => 30,  162 => 28,  157 => 26,  152 => 24,  147 => 22,  142 => 20,  137 => 18,  132 => 16,  127 => 14,  122 => 12,  118 => 10,  108 => 9,  89 => 5,  77 => 422,  75 => 72,  71 => 70,  69 => 33,  66 => 32,  64 => 9,  60 => 8,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <!-- Favicon -->
    <link href=\"{{ asset('Front/img/favicon.ico') }}\" rel=\"icon\">
    {% block stylesheets %}

        <!-- Google Font: Source Sans Pro -->
        <link rel=\"stylesheet\" href=\"{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"{{ asset('Back/plugins/fontawesome-free/css/all.min.css') }}\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}\">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel=\"stylesheet\" href=\"{{ asset('Back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}\">
        <!-- iCheck -->
        <link rel=\"stylesheet\" href=\"{{ asset('Back/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}\">
        <!-- JQVMap -->
        <link rel=\"stylesheet\" href=\"{{ asset('Back/plugins/jqvmap/jqvmap.min.css') }}\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"{{ asset('Back/dist/css/adminlte.min.css') }}\">
        <!-- overlayScrollbars -->
        <link rel=\"stylesheet\" href=\"{{ asset('Back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}\">
        <!-- Daterange picker -->
        <link rel=\"stylesheet\" href=\"{{ asset('Back/plugins/daterangepicker/daterangepicker.css') }}\">
        <!-- summernote -->
        <link rel=\"stylesheet\" href=\"{{ asset('Back/plugins/summernote/summernote-bs4.min.css') }}\">
    {% endblock %}

    {% block javascripts %}

        <!-- jQuery -->
        <script src=\"{{ asset('Back/plugins/jquery/jquery.min.js') }}\"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src=\"{{ asset('Back/plugins/jquery-ui/jquery-ui.min.js') }}\"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            \$.widget.bridge('uibutton', \$.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src=\"{{ asset('Back/plugins/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
        <!-- ChartJS -->
        <script src=\"{{ asset('Back/plugins/chart.js/Chart.min.js') }}\"></script>
        <!-- Sparkline -->
        <script src=\"{{ asset('Back/plugins/sparklines/sparkline.js') }}\"></script>
        <!-- JQVMap -->
        <script src=\"{{ asset('Back/plugins/jqvmap/jquery.vmap.min.js') }}\"></script>
        <script src=\"{{ asset('Back/plugins/jqvmap/maps/jquery.vmap.usa.js') }}\"></script>
        <!-- jQuery Knob Chart -->
        <script src=\"{{ asset('Back/plugins/jquery-knob/jquery.knob.min.js') }}\"></script>
        <!-- daterangepicker -->
        <script src=\"{{ asset('Back/plugins/moment/moment.min.js') }}\"></script>
        <script src=\"{{ asset('Back/plugins/daterangepicker/daterangepicker.js') }}\"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src=\"{{ asset('Back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}\"></script>
        <!-- Summernote -->
        <script src=\"{{ asset('Back/plugins/summernote/summernote-bs4.min.js') }}\"></script>
        <!-- overlayScrollbars -->
        <script src=\"{{ asset('Back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}\"></script>
        <!-- AdminLTE App -->
        <script src=\"{{ asset('Back/dist/js/adminlte.js') }}\"></script>
        <!-- AdminLTE for demo purposes -->
        <script src=\"{{ asset('Back/dist/js/demo.js') }}\"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=\"{{ asset('Back/dist/js/pages/dashboard.js') }}\"></script>
    {% endblock %}
</head>
<body>
{% block body %}
<!-- Preloader -->
<div class=\"preloader flex-column justify-content-center align-items-center\">
    <img class=\"animation__shake\" src=\"{{ asset('Back/dist/img/AdminLTELogo.png') }}\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
</div>

    <!-- Nav Bar Start -->
<!-- Navbar -->
<nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
        </li>
        <li class=\"nav-item d-none d-sm-inline-block\">
            <a href=\"index3.html\" class=\"nav-link\">Home</a>
        </li>
        <li class=\"nav-item d-none d-sm-inline-block\">
            <a href=\"#\" class=\"nav-link\">Contact</a>
        </li>
    </ul>
<!-- Right navbar links -->
<ul class=\"navbar-nav ml-auto\">
    <!-- Navbar Search -->
    <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
            <i class=\"fas fa-search\"></i>
        </a>
        <div class=\"navbar-search-block\">
            <form class=\"form-inline\">
                <div class=\"input-group input-group-sm\">
                    <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <div class=\"input-group-append\">
                        <button class=\"btn btn-navbar\" type=\"submit\">
                            <i class=\"fas fa-search\"></i>
                        </button>
                        <button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
                            <i class=\"fas fa-times\"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>
    <!-- Messages Dropdown Menu -->
    <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"far fa-comments\"></i>
            <span class=\"badge badge-danger navbar-badge\">3</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
            <a href=\"#\" class=\"dropdown-item\">
                <!-- Message Start -->
                <div class=\"media\">
                    <img src=\"{{ asset('Back/dist/img/user1-128x128.jpg') }}\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
                    <div class=\"media-body\">
                        <h3 class=\"dropdown-item-title\">
                            Brad Diesel
                            <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                        </h3>
                        <p class=\"text-sm\">Call me whenever you can...</p>
                        <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                    </div>
                </div>
                <!-- Message End -->
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
                <!-- Message Start -->
                <div class=\"media\">
                    <img src=\"{{ asset('Back/dist/img/user8-128x128.jpg') }}\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                    <div class=\"media-body\">
                        <h3 class=\"dropdown-item-title\">
                            John Pierce
                            <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                        </h3>
                        <p class=\"text-sm\">I got your message bro</p>
                        <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                    </div>
                </div>
                <!-- Message End -->
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
                <!-- Message Start -->
                <div class=\"media\">
                    <img src=\"{{ asset('Back/dist/img/user3-128x128.jpg') }}\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                    <div class=\"media-body\">
                        <h3 class=\"dropdown-item-title\">
                            Nora Silvester
                            <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                        </h3>
                        <p class=\"text-sm\">The subject goes here</p>
                        <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                    </div>
                </div>
                <!-- Message End -->
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
        </div>
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"far fa-bell\"></i>
            <span class=\"badge badge-warning navbar-badge\">15</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
            <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
                <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                <span class=\"float-right text-muted text-sm\">3 mins</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
                <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                <span class=\"float-right text-muted text-sm\">12 hours</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
                <i class=\"fas fa-file mr-2\"></i> 3 new reports
                <span class=\"float-right text-muted text-sm\">2 days</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
        </div>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
            <i class=\"fas fa-expand-arrows-alt\"></i>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"control-sidebar\" data-controlsidebar-slide=\"true\" href=\"#\" role=\"button\">
            <i class=\"fas fa-th-large\"></i>
        </a>
    </li>
</ul>
</nav>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"#\" class=\"brand-link\">
        <img src=\"{{ asset('Back/dist/img/AdminLTELogo.png') }}\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
        <span class=\"brand-text font-weight-light\">DevFive </span>
    </a>
    <!-- Sidebar -->
    <div class=\"sidebar\">
        <!-- Sidebar user panel (optional) -->
        <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
            <div class=\"image\">
                <img src=\"{{ asset('Back/dist/img/user2-160x160.jpg') }}\" class=\"img-circle elevation-2\" alt=\"User Image\">
            </div>
            <div class=\"info\">
                <a href=\"#\" class=\"d-block\">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class=\"form-inline\">
            <div class=\"input-group\" data-widget=\"sidebar-search\">
                <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-sidebar\">
                        <i class=\"fas fa-search fa-fw\"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class=\"mt-2\">
            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class=\"nav-item \">
                    <a href=\"#\" class=\"nav-link active\">
                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                        <p>
                            Dashboard
                            <i class=\"right fas fa-angle-left\"></i>
                        </p>
                    </a>

                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('GestionUser') }}\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-table\"></i>
                        <p>
                            Gestion Utilisateur
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>

                </li>


{#  **********************Gestion restaurant avec navbar*******************************#}

                <nav class=\"mt-2\">


                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-table\"></i>
                            <p>
                                 GestionRestaurant
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ path('GestionRestaurant') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Afficher Restaraunt</p>
                                </a>
                            </li>

                            <li class=\"nav-item\">
                                <a href=\"../forms/general.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Ajouter Restaraunt</p>
                                </a>
                            </li>

                        </ul>


                    </li>

                </nav>
 {#  ***************************        End  --------   Gestion restaurant avec navbar    ************************#}




                <li class=\"nav-item\">
                    <a href=\"{{ path('GestionProduit') }}\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-table\"></i>
                        <p>
                            Gestion Produit
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>

                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('GestionOffreTravail') }}\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-table\"></i>
                        <p>
                            Gestion Offres de travail
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a href=\"{{ path('GestionEvenement') }}\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-table\"></i>
                        <p>
                            Gestion Evenement
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a href=\"{{ path('GestionMenu') }}\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-table\"></i>
                        <p>
                            Gestion Menu
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                </li>


                <li class=\"nav-item\">
                    <a href=\"{{ path('GestionArtiste') }}\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-table\"></i>
                        <p>
                            Gestion Artiste
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a href=\"{{ path('GestionCommande') }}\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-table\"></i>
                        <p>
                            Gestion <Commande></Commande>
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                </li>


                <li class=\"nav-header\">EXAMPLES</li>





            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>




    <!-- Nav Bar End -->

<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h1 class=\"m-0\">Dashboard</h1>
                </div><!-- /.col -->
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                        <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                        <li class=\"breadcrumb-item active\">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class=\"content-wrapper\">

    {% block bodyBack %} {% endblock %}

    </div>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
{% endblock %}

</body>
</html>", "base2.html.twig", "C:\\Users\\dell\\Desktop\\PGit\\PiDev10\\templates\\base2.html.twig");
    }
}
