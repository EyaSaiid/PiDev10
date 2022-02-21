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

/* Back/offre_travail/_form.html.twig */
class __TwigTemplate_4e7b2687b4d85385d137b3bd22709f66177df4549243ee23eaf46172d970a8fc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/offre_travail/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/offre_travail/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

<div class=\"form-group\">


        <div class=\"alert alert-warning\"  style=\"display: ";
        // line 6
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), "vars", [], "any", false, false, false, 6), "errors", [], "any", false, false, false, 6))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "titre", [], "any", false, false, false, 7), 'errors');
        echo "
            <a class=\"close\" href=\"#\"></a>
        </div>
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "titre", [], "any", false, false, false, 10), 'label', ["label" => "Titre"]);
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "titre", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "with-border", "cols" => "55", "placeholder" => "e.g. le balcon"]]);
        echo "

</div>

<div class=\"form-group\" >
    <div class=\"submit-field\">
        <div class=\"alert alert-warning\"  style=\"display: ";
        // line 17
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), 'errors');
        echo "
            <a class=\"close\" href=\"#\"></a>
        </div>
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), 'label', ["label" => "Description"]);
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), 'widget', ["attr" => ["cols" => "55", "rows" => "5", "placeholder" => "e.g. le balcon"]]);
        echo "
    </div>
</div>

<div class=\"form-group\">
    <div class=\"submit-field\">
        <div class=\"alert alert-warning\"  style=\"display: ";
        // line 28
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "restaurant", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "errors", [], "any", false, false, false, 28))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "restaurant", [], "any", false, false, false, 29), 'errors');
        echo "
            <a class=\"close\" href=\"#\"></a>
        </div>
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "restaurant", [], "any", false, false, false, 32), 'label', ["label" => "Restaurant"]);
        echo "
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "restaurant", [], "any", false, false, false, 33), 'widget', ["attr" => ["title" => "Select your entreprise"]]);
        echo "
    </div>
</div>


    <button   class=\"btn btn-primary\" >";
        // line 38
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 38, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Back/offre_travail/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 39,  131 => 38,  123 => 33,  119 => 32,  113 => 29,  105 => 28,  96 => 22,  92 => 21,  86 => 18,  78 => 17,  69 => 11,  65 => 10,  59 => 7,  51 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}

<div class=\"form-group\">


        <div class=\"alert alert-warning\"  style=\"display: {% if form.titre.vars.errors|length %} {% else %} none {% endif %}  \">
            {{ form_errors(form.titre) }}
            <a class=\"close\" href=\"#\"></a>
        </div>
            {{ form_label(form.titre,'Titre') }}
            {{ form_widget(form.titre, {'attr': {'class': 'with-border','cols': '55','placeholder':'e.g. le balcon'}}) }}

</div>

<div class=\"form-group\" >
    <div class=\"submit-field\">
        <div class=\"alert alert-warning\"  style=\"display: {% if form.description.vars.errors|length %} {% else %} none {% endif %}  \">
            {{ form_errors(form.description) }}
            <a class=\"close\" href=\"#\"></a>
        </div>
        {{ form_label(form.description,'Description') }}
        {{ form_widget(form.description, {'attr': {'cols': '55','rows':'5','placeholder':'e.g. le balcon'}}) }}
    </div>
</div>

<div class=\"form-group\">
    <div class=\"submit-field\">
        <div class=\"alert alert-warning\"  style=\"display: {% if form.restaurant.vars.errors|length %} {% else %} none {% endif %}  \">
            {{ form_errors(form.restaurant) }}
            <a class=\"close\" href=\"#\"></a>
        </div>
        {{ form_label(form.restaurant,'Restaurant') }}
        {{ form_widget(form.restaurant,{'attr':{'title':'Select your entreprise'}}) }}
    </div>
</div>


    <button   class=\"btn btn-primary\" >{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
", "Back/offre_travail/_form.html.twig", "C:\\Users\\SAID EYA\\Desktop\\PiGit\\Pi\\templates\\Back\\offre_travail\\_form.html.twig");
    }
}
