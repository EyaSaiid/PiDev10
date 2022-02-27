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

/* contact/index.html.twig */
class __TwigTemplate_9f429aeca187c1630c07f1846dc996147d63d517efe6f529422fa55d5e62093e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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
                    ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 83, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <h1> Ajouter un message </h1>

                    <div class=\"form-group\">
                        <div class=\"alert-danger\" style=\"align-content: center\">
                            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 88, $this->source); })()), "name", [], "any", false, false, false, 88), 'errors');
        echo " </div>
                        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 89, $this->source); })()), "name", [], "any", false, false, false, 89), 'label', ["label" => "Nom du produit"]);
        echo "
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 90, $this->source); })()), "name", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ajouter le nom"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 93, $this->source); })()), "email", [], "any", false, false, false, 93), 'errors');
        echo "
                    </div>
                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 95, $this->source); })()), "email", [], "any", false, false, false, 95), 'label', ["label" => "Description du produit"]);
        echo "
                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 96, $this->source); })()), "email", [], "any", false, false, false, 96), 'widget', ["attr" => ["cols" => "55", "rows" => "5", "class" => "form-control", "placeholder" => "ajouter la description"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <div class=\"alert-danger\" style=\"align-content: center\">
                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 100, $this->source); })()), "sujet", [], "any", false, false, false, 100), 'errors');
        echo "</div>
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 101, $this->source); })()), "sujet", [], "any", false, false, false, 101), 'label', ["label" => "Prix du produit"]);
        echo "
                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 102, $this->source); })()), "sujet", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ajouter le prix"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <div class=\"alert-danger\" style=\"align-content: center\">
                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 106, $this->source); })()), "message", [], "any", false, false, false, 106), 'errors');
        echo " </div>
                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 107, $this->source); })()), "message", [], "any", false, false, false, 107), 'label', ["label" => "message"]);
        echo "
                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 108, $this->source); })()), "message", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ajouter la quantité"]]);
        echo "
                </div>
            </div>
        </div>
    </div>

                ";
        // line 114
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 114, $this->source); })()), 'form_end');
        echo "

    <!-- Contact End -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 114,  211 => 108,  207 => 107,  203 => 106,  196 => 102,  192 => 101,  188 => 100,  181 => 96,  177 => 95,  172 => 93,  166 => 90,  162 => 89,  158 => 88,  150 => 83,  68 => 3,  58 => 2,  35 => 1,);
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
                    {{ form_start(contactForm,{'attr': {'novalidate': 'novalidate'}}) }}
                    <h1> Ajouter un message </h1>

                    <div class=\"form-group\">
                        <div class=\"alert-danger\" style=\"align-content: center\">
                            {{ form_errors(contactForm.name) }} </div>
                        {{ form_label(contactForm.name,\"Nom du produit\") }}
                        {{ form_widget(contactForm.name ,{'attr': {'class': 'form-control','placeholder':'ajouter le nom'}}) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_errors(contactForm.email) }}
                    </div>
                    {{ form_label(contactForm.email,\"Description du produit\") }}
                    {{ form_widget(contactForm.email ,{'attr': {'cols':'55', 'rows':'5','class': 'form-control','placeholder':'ajouter la description'}}) }}
                </div>
                <div class=\"form-group\">
                    <div class=\"alert-danger\" style=\"align-content: center\">
                        {{ form_errors(contactForm.sujet) }}</div>
                    {{ form_label(contactForm.sujet,\"Prix du produit\") }}
                    {{ form_widget(contactForm.sujet ,{'attr': {'class': 'form-control','placeholder':'ajouter le prix'}}) }}
                </div>
                <div class=\"form-group\">
                    <div class=\"alert-danger\" style=\"align-content: center\">
                        {{ form_errors(contactForm.message) }} </div>
                    {{ form_label(contactForm.message,\"message\") }}
                    {{ form_widget(contactForm.message ,{'attr': {'class': 'form-control','placeholder':'ajouter la quantité'}}) }}
                </div>
            </div>
        </div>
    </div>

                {{ form_end(contactForm) }}

    <!-- Contact End -->

{% endblock %}
", "contact/index.html.twig", "C:\\Users\\Nour Hammami\\Desktop\\pii\\PiDev10\\templates\\contact\\index.html.twig");
    }
}
