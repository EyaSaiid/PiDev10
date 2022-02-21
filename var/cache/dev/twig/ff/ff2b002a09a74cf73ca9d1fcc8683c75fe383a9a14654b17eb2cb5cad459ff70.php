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

/* Front/contact.html.twig */
class __TwigTemplate_81166cb7f9e1b7f546f80b013bde812a93e3647283e45fe49fa82ed4f59f201a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/contact.html.twig", 1);
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
                    <h2>Contact us</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Booking</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Contact Start -->
    <div class=\"contact\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <p>Contact Us</p>
                <h2>Contact For Any Query</h2>
            </div>
            <div class=\"row align-items-center contact-information\">
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"contact-info\">
                        <div class=\"contact-icon\">
                            <i class=\"fa fa-map-marker-alt\"></i>
                        </div>
                        <div class=\"contact-text\">
                            <h3>Address</h3>
                            <p>123 Street, NY, USA</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"contact-info\">
                        <div class=\"contact-icon\">
                            <i class=\"fa fa-phone-alt\"></i>
                        </div>
                        <div class=\"contact-text\">
                            <h3>Call Us</h3>
                            <p>+012 345 6789</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"contact-info\">
                        <div class=\"contact-icon\">
                            <i class=\"fa fa-envelope\"></i>
                        </div>
                        <div class=\"contact-text\">
                            <h3>Email Us</h3>
                            <p>info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"contact-info\">
                        <div class=\"contact-icon\">
                            <i class=\"fa fa-share\"></i>
                        </div>
                        <div class=\"contact-text\">
                            <h3>Follow Us</h3>
                            <div class=\"contact-social\">
                                <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"\"><i class=\"fab fa-youtube\"></i></a>
                                <a href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row contact-form\">
                <div class=\"col-md-6\">
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1600663868074!5m2!1sen!2sbd\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                </div>
                <div class=\"col-md-6\">
                    <div id=\"success\"></div>
                    <form name=\"sentMessage\" id=\"contactForm\" novalidate=\"novalidate\">
                        <div class=\"control-group\">
                            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" required=\"required\" data-validation-required-message=\"Please enter your name\" />
                            <p class=\"help-block text-danger\"></p>
                        </div>
                        <div class=\"control-group\">
                            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Your Email\" required=\"required\" data-validation-required-message=\"Please enter your email\" />
                            <p class=\"help-block text-danger\"></p>
                        </div>
                        <div class=\"control-group\">
                            <input type=\"text\" class=\"form-control\" id=\"subject\" placeholder=\"Subject\" required=\"required\" data-validation-required-message=\"Please enter a subject\" />
                            <p class=\"help-block text-danger\"></p>
                        </div>
                        <div class=\"control-group\">
                            <textarea class=\"form-control\" id=\"message\" placeholder=\"Message\" required=\"required\" data-validation-required-message=\"Please enter your message\"></textarea>
                            <p class=\"help-block text-danger\"></p>
                        </div>
                        <div>
                            <button class=\"btn custom-btn\" type=\"submit\" id=\"sendMessageButton\">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/contact.html.twig";
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
                    <h2>Contact us</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Booking</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Contact Start -->
    <div class=\"contact\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <p>Contact Us</p>
                <h2>Contact For Any Query</h2>
            </div>
            <div class=\"row align-items-center contact-information\">
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"contact-info\">
                        <div class=\"contact-icon\">
                            <i class=\"fa fa-map-marker-alt\"></i>
                        </div>
                        <div class=\"contact-text\">
                            <h3>Address</h3>
                            <p>123 Street, NY, USA</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"contact-info\">
                        <div class=\"contact-icon\">
                            <i class=\"fa fa-phone-alt\"></i>
                        </div>
                        <div class=\"contact-text\">
                            <h3>Call Us</h3>
                            <p>+012 345 6789</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"contact-info\">
                        <div class=\"contact-icon\">
                            <i class=\"fa fa-envelope\"></i>
                        </div>
                        <div class=\"contact-text\">
                            <h3>Email Us</h3>
                            <p>info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"contact-info\">
                        <div class=\"contact-icon\">
                            <i class=\"fa fa-share\"></i>
                        </div>
                        <div class=\"contact-text\">
                            <h3>Follow Us</h3>
                            <div class=\"contact-social\">
                                <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"\"><i class=\"fab fa-youtube\"></i></a>
                                <a href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row contact-form\">
                <div class=\"col-md-6\">
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1600663868074!5m2!1sen!2sbd\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                </div>
                <div class=\"col-md-6\">
                    <div id=\"success\"></div>
                    <form name=\"sentMessage\" id=\"contactForm\" novalidate=\"novalidate\">
                        <div class=\"control-group\">
                            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" required=\"required\" data-validation-required-message=\"Please enter your name\" />
                            <p class=\"help-block text-danger\"></p>
                        </div>
                        <div class=\"control-group\">
                            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Your Email\" required=\"required\" data-validation-required-message=\"Please enter your email\" />
                            <p class=\"help-block text-danger\"></p>
                        </div>
                        <div class=\"control-group\">
                            <input type=\"text\" class=\"form-control\" id=\"subject\" placeholder=\"Subject\" required=\"required\" data-validation-required-message=\"Please enter a subject\" />
                            <p class=\"help-block text-danger\"></p>
                        </div>
                        <div class=\"control-group\">
                            <textarea class=\"form-control\" id=\"message\" placeholder=\"Message\" required=\"required\" data-validation-required-message=\"Please enter your message\"></textarea>
                            <p class=\"help-block text-danger\"></p>
                        </div>
                        <div>
                            <button class=\"btn custom-btn\" type=\"submit\" id=\"sendMessageButton\">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

{% endblock %}
", "Front/contact.html.twig", "C:\\Users\\Nour Hammami\\Desktop\\pii\\PiDev10\\templates\\Front\\contact.html.twig");
    }
}
