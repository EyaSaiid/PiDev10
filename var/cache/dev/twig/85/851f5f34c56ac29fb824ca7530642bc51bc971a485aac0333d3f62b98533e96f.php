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

/* reservation/_form.html.twig */
class __TwigTemplate_63038e52113651b765e4564af188ac7527cdfc61baae71e3a97595d48f0612b8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/_form.html.twig"));

        // line 1
        echo "
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "booking-form"]]);
        echo "

   ";
        // line 15
        echo "
    <div class=\"control-group\">
       <h4 >  ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nombre", [], "any", false, false, false, 17), 'label', ["label" => "Le nombre de place à reserver"]);
        echo " </h4>
       <h5 class=\"text-danger\"> ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "nombre", [], "any", false, false, false, 18), 'errors');
        echo "</h5>
        <div class=\"input-group\">
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nombre", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

            <div >

                <div class=\"input-group-text\"><i class=\"far fa-user\"></i></div>
            </div>
        </div>
    </div>


    <div class=\"control-group\">
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "date_reservation", [], "any", false, false, false, 31), 'label', ["label" => "la date de reservation"]);
        echo "
        <h5 class=\"text-danger\"> ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "date_reservation", [], "any", false, false, false, 32), 'errors');
        echo "</h5>

        <div class=\"input-group-append\" data-target=\"#time\" data-toggle=\"datetimepicker\">



                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "date_reservation", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "input-group date"]]);
        echo "


            </div>

    </div>
    <div class=\"control-group\">

        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "restaurants", [], "any", false, false, false, 46), 'label', ["label" => "Nom du restaurant"]);
        echo "
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "restaurants", [], "any", false, false, false, 47), 'errors');
        echo "
        <div class=\"input-group\">

            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "restaurants", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "custom-select form-control"]]);
        echo "

            <div class=\"input-group-append\">
                <div class=\"input-group-text\"><i class=\"fa fa-chevron-down\"></i></div>
            </div>
        </div>
    </div>
    <div>
        <button class=\"btn custom-btn\" type=\"submit\">Book Now</button>
    </div>

    ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reservation/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 61,  112 => 50,  106 => 47,  102 => 46,  91 => 38,  82 => 32,  78 => 31,  64 => 20,  59 => 18,  55 => 17,  51 => 15,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    {{ form_start(form,{'attr': {'novalidate': 'novalidate' , 'class':'booking-form'}}) }}

   {# <div class=\"control-group\">
        {{ form_label(form.id_client,\"l'identifiant du client\") }}
        {{ form_errors(form.id_client) }}
        <div class=\"input-group\">
            {{ form_widget(form.id_client ,{'attr': {'class': 'form-control'}}) }}

            <div class=\"input-group-append\">
                <div class=\"input-group-text\"><i class=\"far fa-user\"></i></div>
            </div>
        </div>
    </div>#}

    <div class=\"control-group\">
       <h4 >  {{ form_label(form.nombre,\"Le nombre de place à reserver\") }} </h4>
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



                {{ form_widget(form.date_reservation ,{'attr': {'class': 'input-group date'}}) }}


            </div>

    </div>
    <div class=\"control-group\">

        {{ form_label(form.restaurants,\"Nom du restaurant\") }}
        {{ form_errors(form.restaurants) }}
        <div class=\"input-group\">

            {{ form_widget(form.restaurants ,{'attr': {'class': 'custom-select form-control'}}) }}

            <div class=\"input-group-append\">
                <div class=\"input-group-text\"><i class=\"fa fa-chevron-down\"></i></div>
            </div>
        </div>
    </div>
    <div>
        <button class=\"btn custom-btn\" type=\"submit\">Book Now</button>
    </div>

    {{ form_end(form) }}
", "reservation/_form.html.twig", "C:\\Users\\dell\\Desktop\\PGit\\PiDev10\\templates\\reservation\\_form.html.twig");
    }
}
