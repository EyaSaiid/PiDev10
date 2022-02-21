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

/* Back/reservation/_form.html.twig */
class __TwigTemplate_0ac3990fe48873dd924c36a99001024fe0371fc979ba88bb08c89e76a97d0384 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/reservation/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/reservation/_form.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
<script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>

<div class=\"booking\">
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "booking-form"]]);
        echo "

    <div class=\"control-group\">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nombre", [], "any", false, false, false, 8), 'label', ["label" => "Le nombre de place à reserver"]);
        echo "
       <h5 class=\"text-danger\"> ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nombre", [], "any", false, false, false, 9), 'errors');
        echo "</h5>
        <div class=\"input-group\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "nombre", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <div >
                <div class=\"input-group-text\"><i class=\"far fa-user\"></i></div>
            </div>
        </div>
    </div>

    <div class=\"control-group\">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "date_reservation", [], "any", false, false, false, 19), 'label', ["label" => "la date de reservation"]);
        echo "
        <h5 class=\"text-danger\"> ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "date_reservation", [], "any", false, false, false, 20), 'errors');
        echo "</h5>

        <div class=\"input-group-append\" data-target=\"#time\" data-toggle=\"datetimepicker\">
            <script>
                jQuery(document).ready(function() {
                    \$('.js-datepicker').datepicker();
                    format: 'yyyy-mm-dd'
                });
            </script>
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "date_reservation", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "input-group date"]]);
        echo "
            </div>

    </div>
    <div class=\"control-group\">

        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "restaurants", [], "any", false, false, false, 35), 'label', ["label" => "Nom du restaurant"]);
        echo "
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "restaurants", [], "any", false, false, false, 36), 'errors');
        echo "
        <div class=\"input-group\" >
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "restaurants", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "custom-select form-control-input-gray-dark"]]);
        echo "

            <div class=\"input-group-append \">
                <div class=\"input-group-text\"><i class=\"fa fa-chevron-down\"></i></div>
            </div>
        </div>
    </div>

        <div class=\"input-group\">
        <button class=\"btn custom-btn\">";
        // line 47
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 47, $this->source); })()), "Réserver")) : ("Réserver")), "html", null, true);
        echo "</button>
        </div>


    ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Back/reservation/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 51,  121 => 47,  109 => 38,  104 => 36,  100 => 35,  91 => 29,  79 => 20,  75 => 19,  64 => 11,  59 => 9,  55 => 8,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
<script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>

<div class=\"booking\">
    {{ form_start(form,{'attr': {'novalidate': 'novalidate', 'class':'booking-form'}}) }}

    <div class=\"control-group\">
        {{ form_label(form.nombre,\"Le nombre de place à reserver\") }}
       <h5 class=\"text-danger\"> {{ form_errors(form.nombre) }}</h5>
        <div class=\"input-group\">
        {{ form_widget(form.nombre,{'attr': {'class': 'form-control'}}) }}
            <div >
                <div class=\"input-group-text\"><i class=\"far fa-user\"></i></div>
            </div>
        </div>
    </div>

    <div class=\"control-group\">
        {{ form_label(form.date_reservation,\"la date de reservation\") }}
        <h5 class=\"text-danger\"> {{ form_errors(form.date_reservation) }}</h5>

        <div class=\"input-group-append\" data-target=\"#time\" data-toggle=\"datetimepicker\">
            <script>
                jQuery(document).ready(function() {
                    \$('.js-datepicker').datepicker();
                    format: 'yyyy-mm-dd'
                });
            </script>
                {{ form_widget(form.date_reservation ,{'attr': {'class': 'input-group date'}}) }}
            </div>

    </div>
    <div class=\"control-group\">

        {{ form_label(form.restaurants,\"Nom du restaurant\") }}
        {{ form_errors(form.restaurants) }}
        <div class=\"input-group\" >
            {{ form_widget(form.restaurants ,{'attr': {'class': 'custom-select form-control-input-gray-dark'}}) }}

            <div class=\"input-group-append \">
                <div class=\"input-group-text\"><i class=\"fa fa-chevron-down\"></i></div>
            </div>
        </div>
    </div>

        <div class=\"input-group\">
        <button class=\"btn custom-btn\">{{ button_label|default('Réserver') }}</button>
        </div>


    {{ form_end(form) }}
</div>
", "Back/reservation/_form.html.twig", "C:\\Users\\dell\\Desktop\\PGit\\PiDev10\\templates\\Back\\reservation\\_form.html.twig");
    }
}
