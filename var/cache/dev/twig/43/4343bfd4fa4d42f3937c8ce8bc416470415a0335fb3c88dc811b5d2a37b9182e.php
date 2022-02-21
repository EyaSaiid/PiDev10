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

/* Front/booking.html.twig */
class __TwigTemplate_7b545366178ecaea424dd9fe916ea3d2a8aa652628da63819e4ae8e9f49f00e9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/booking.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/booking.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/booking.html.twig", 1);
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
                    <h2>Book A Table</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Booking</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Booking Start -->
    <div class=\"booking\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-7\">
                    <div class=\"booking-content\">
                        <div class=\"section-header\">
                            <p>Book A Table</p>
                            <h2>Book Your Table For Private Dinners & Happy Hours</h2>
                        </div>
                        <div class=\"about-text\">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"booking-form\">
                        <form>
                            <div class=\"control-group\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Name\" required=\"required\" />
                                    <div class=\"input-group-append\">
                                        <div class=\"input-group-text\"><i class=\"far fa-user\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"input-group\">
                                    <input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"required\" />
                                    <div class=\"input-group-append\">
                                        <div class=\"input-group-text\"><i class=\"far fa-envelope\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Mobile\" required=\"required\" />
                                    <div class=\"input-group-append\">
                                        <div class=\"input-group-text\"><i class=\"fa fa-mobile-alt\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"input-group date\" id=\"date\" data-target-input=\"nearest\">
                                    <input type=\"text\" class=\"form-control datetimepicker-input\" placeholder=\"Date\" data-target=\"#date\" data-toggle=\"datetimepicker\"/>
                                    <div class=\"input-group-append\" data-target=\"#date\" data-toggle=\"datetimepicker\">
                                        <div class=\"input-group-text\"><i class=\"far fa-calendar-alt\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"input-group time\" id=\"time\" data-target-input=\"nearest\">
                                    <input type=\"text\" class=\"form-control datetimepicker-input\" placeholder=\"Time\" data-target=\"#time\" data-toggle=\"datetimepicker\"/>
                                    <div class=\"input-group-append\" data-target=\"#time\" data-toggle=\"datetimepicker\">
                                        <div class=\"input-group-text\"><i class=\"far fa-clock\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"input-group\">
                                    <select class=\"custom-select form-control\">
                                        <option selected>Guest</option>
                                        <option value=\"1\">1 Guest</option>
                                        <option value=\"2\">2 Guest</option>
                                        <option value=\"3\">3 Guest</option>
                                        <option value=\"4\">4 Guest</option>
                                        <option value=\"5\">5 Guest</option>
                                        <option value=\"6\">6 Guest</option>
                                        <option value=\"7\">7 Guest</option>
                                        <option value=\"8\">8 Guest</option>
                                        <option value=\"9\">9 Guest</option>
                                        <option value=\"10\">10 Guest</option>
                                    </select>
                                    <div class=\"input-group-append\">
                                        <div class=\"input-group-text\"><i class=\"fa fa-chevron-down\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class=\"btn custom-btn\" type=\"submit\">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/booking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
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
                    <h2>Book A Table</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Booking</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Booking Start -->
    <div class=\"booking\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-7\">
                    <div class=\"booking-content\">
                        <div class=\"section-header\">
                            <p>Book A Table</p>
                            <h2>Book Your Table For Private Dinners & Happy Hours</h2>
                        </div>
                        <div class=\"about-text\">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"booking-form\">
                        <form>
                            <div class=\"control-group\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Name\" required=\"required\" />
                                    <div class=\"input-group-append\">
                                        <div class=\"input-group-text\"><i class=\"far fa-user\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"input-group\">
                                    <input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"required\" />
                                    <div class=\"input-group-append\">
                                        <div class=\"input-group-text\"><i class=\"far fa-envelope\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Mobile\" required=\"required\" />
                                    <div class=\"input-group-append\">
                                        <div class=\"input-group-text\"><i class=\"fa fa-mobile-alt\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"input-group date\" id=\"date\" data-target-input=\"nearest\">
                                    <input type=\"text\" class=\"form-control datetimepicker-input\" placeholder=\"Date\" data-target=\"#date\" data-toggle=\"datetimepicker\"/>
                                    <div class=\"input-group-append\" data-target=\"#date\" data-toggle=\"datetimepicker\">
                                        <div class=\"input-group-text\"><i class=\"far fa-calendar-alt\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"input-group time\" id=\"time\" data-target-input=\"nearest\">
                                    <input type=\"text\" class=\"form-control datetimepicker-input\" placeholder=\"Time\" data-target=\"#time\" data-toggle=\"datetimepicker\"/>
                                    <div class=\"input-group-append\" data-target=\"#time\" data-toggle=\"datetimepicker\">
                                        <div class=\"input-group-text\"><i class=\"far fa-clock\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"input-group\">
                                    <select class=\"custom-select form-control\">
                                        <option selected>Guest</option>
                                        <option value=\"1\">1 Guest</option>
                                        <option value=\"2\">2 Guest</option>
                                        <option value=\"3\">3 Guest</option>
                                        <option value=\"4\">4 Guest</option>
                                        <option value=\"5\">5 Guest</option>
                                        <option value=\"6\">6 Guest</option>
                                        <option value=\"7\">7 Guest</option>
                                        <option value=\"8\">8 Guest</option>
                                        <option value=\"9\">9 Guest</option>
                                        <option value=\"10\">10 Guest</option>
                                    </select>
                                    <div class=\"input-group-append\">
                                        <div class=\"input-group-text\"><i class=\"fa fa-chevron-down\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class=\"btn custom-btn\" type=\"submit\">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->
{% endblock %}", "Front/booking.html.twig", "C:\\Users\\Nour Hammami\\Desktop\\pii\\PiDev10\\templates\\Front\\booking.html.twig");
    }
}
