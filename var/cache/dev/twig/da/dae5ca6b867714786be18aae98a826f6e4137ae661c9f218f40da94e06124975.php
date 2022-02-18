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

/* Back/reservation/_formEdit.html.twig */
class __TwigTemplate_1fff9abf9245ebe7fad706280057508cd627e1cca98b7f3b6cde06a8203056e1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/reservation/_formEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/reservation/_formEdit.html.twig"));

        // line 1
        echo "
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "booking-form"]]);
        echo "

   ";
        // line 9
        echo "    <div class=\"form-group\">
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "nombre", [], "any", false, false, false, 10), 'label', ["label" => "nombre de place à reserver"]);
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "nombre", [], "any", false, false, false, 11), 'errors');
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nombre", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <div class=\"form-group\">

    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "date_reservation", [], "any", false, false, false, 16), 'label', ["label" => "la date de reservation"]);
        echo "
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "date_reservation", [], "any", false, false, false, 17), 'errors');
        echo "
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "date_reservation", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "input-group date"]]);
        echo "
    </div>
    <div class=\"form-group\">
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "restaurants", [], "any", false, false, false, 21), 'label', ["label" => "Nom du restaurant"]);
        echo "
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "restaurants", [], "any", false, false, false, 22), 'errors');
        echo "
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "restaurants", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "custom-select form-control"]]);
        echo "
        <div class=\"card-footer\">
            <button class=\"btn\">";
        // line 25
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 25, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
        </div>
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Back/reservation/_formEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  96 => 25,  91 => 23,  87 => 22,  83 => 21,  77 => 18,  73 => 17,  69 => 16,  62 => 12,  58 => 11,  54 => 10,  51 => 9,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    {{ form_start(form,{'attr': {'novalidate': 'novalidate' , 'class':'booking-form'}}) }}

   {# <div class=\"form-group\">
    {{ form_label(form.id_client,\"l'identifiant du client\") }}
    {{ form_errors(form.id_client) }}
    {{ form_widget(form.id_client ,{'attr': {'class': 'form-control'}}) }}
    </div>#}
    <div class=\"form-group\">
    {{ form_label(form.nombre,\"nombre de place à reserver\") }}
    {{ form_errors(form.nombre) }}
    {{ form_widget(form.nombre,{'attr': {'class': 'form-control'}}) }}
    </div>
    <div class=\"form-group\">

    {{ form_label(form.date_reservation,\"la date de reservation\") }}
    {{ form_errors(form.date_reservation) }}
    {{ form_widget(form.date_reservation ,{'attr': {'class': 'input-group date'}}) }}
    </div>
    <div class=\"form-group\">
    {{ form_label(form.restaurants,\"Nom du restaurant\") }}
    {{ form_errors(form.restaurants) }}
    {{ form_widget(form.restaurants ,{'attr': {'class': 'custom-select form-control'}}) }}
        <div class=\"card-footer\">
            <button class=\"btn\">{{ button_label|default('Save') }}</button>
        </div>
    {{ form_end(form) }}
", "Back/reservation/_formEdit.html.twig", "C:\\Users\\dell\\Desktop\\PGit\\PiDev10\\templates\\Back\\reservation\\_formEdit.html.twig");
    }
}
