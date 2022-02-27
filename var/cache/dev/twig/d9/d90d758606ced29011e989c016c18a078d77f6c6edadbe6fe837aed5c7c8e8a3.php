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

/* produit/_form.html.twig */
class __TwigTemplate_7070286786f42e9c6b3410b66ff7e41a8468e17b06f15663be38ce38b5f1ed8f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_form.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "produit/_form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<h1> Ajouter un produit </h1>

<div class=\"form-group\">
    <div class=\"alert-danger\" style=\"align-content: center\">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nomProduit", [], "any", false, false, false, 8), 'errors');
        echo " </div>
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nomProduit", [], "any", false, false, false, 9), 'label', ["label" => "Nom du produit"]);
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "nomProduit", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ajouter le nom"]]);
        echo "
</div>
    <div class=\"form-group\">
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "descriptionProduit", [], "any", false, false, false, 13), 'errors');
        echo "
</div>
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "descriptionProduit", [], "any", false, false, false, 15), 'label', ["label" => "Description du produit"]);
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "descriptionProduit", [], "any", false, false, false, 16), 'widget', ["attr" => ["cols" => "55", "rows" => "5", "class" => "form-control", "placeholder" => "ajouter la description"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <div class=\"alert-danger\" style=\"align-content: center\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "prixProduit", [], "any", false, false, false, 20), 'errors');
        echo "</div>
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "prixProduit", [], "any", false, false, false, 21), 'label', ["label" => "Prix du produit"]);
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "prixProduit", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ajouter le prix"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <div class=\"alert-danger\" style=\"align-content: center\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "quantiteProduit", [], "any", false, false, false, 26), 'errors');
        echo " </div>
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "quantiteProduit", [], "any", false, false, false, 27), 'label', ["label" => "Quantite du produit"]);
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "quantiteProduit", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ajouter la quantité"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <div class=\"alert-danger\" style=\"align-content: center\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "Categorie", [], "any", false, false, false, 32), 'errors');
        echo " </div>
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "Categorie", [], "any", false, false, false, 33), 'label', ["label" => "Categorie du produit"]);
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "Categorie", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ajouter la catégorie"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <div class=\"alert-danger\" style=\"align-content: center\">
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "photo", [], "any", false, false, false, 38), 'errors');
        echo " </div>
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "photo", [], "any", false, false, false, 39), 'label', ["label" => "photo du produit"]);
        echo "
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "photo", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>

<button class=\"btn btn-success\">";
        // line 43
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 43, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 44,  165 => 43,  159 => 40,  155 => 39,  151 => 38,  144 => 34,  140 => 33,  136 => 32,  129 => 28,  125 => 27,  121 => 26,  114 => 22,  110 => 21,  106 => 20,  99 => 16,  95 => 15,  90 => 13,  84 => 10,  80 => 9,  76 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends 'base2.html.twig' %}
{% block body %}
{{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}
<h1> Ajouter un produit </h1>

<div class=\"form-group\">
    <div class=\"alert-danger\" style=\"align-content: center\">
        {{ form_errors(form.nomProduit) }} </div>
    {{ form_label(form.nomProduit,\"Nom du produit\") }}
    {{ form_widget(form.nomProduit ,{'attr': {'class': 'form-control','placeholder':'ajouter le nom'}}) }}
</div>
    <div class=\"form-group\">
        {{ form_errors(form.descriptionProduit) }}
</div>
        {{ form_label(form.descriptionProduit,\"Description du produit\") }}
        {{ form_widget(form.descriptionProduit ,{'attr': {'cols':'55', 'rows':'5','class': 'form-control','placeholder':'ajouter la description'}}) }}
    </div>
    <div class=\"form-group\">
        <div class=\"alert-danger\" style=\"align-content: center\">
            {{ form_errors(form.prixProduit) }}</div>
        {{ form_label(form.prixProduit,\"Prix du produit\") }}
        {{ form_widget(form.prixProduit ,{'attr': {'class': 'form-control','placeholder':'ajouter le prix'}}) }}
    </div>
    <div class=\"form-group\">
        <div class=\"alert-danger\" style=\"align-content: center\">
            {{ form_errors(form.quantiteProduit) }} </div>
        {{ form_label(form.quantiteProduit,\"Quantite du produit\") }}
        {{ form_widget(form.quantiteProduit ,{'attr': {'class': 'form-control','placeholder':'ajouter la quantité'}}) }}
    </div>
    <div class=\"form-group\">
        <div class=\"alert-danger\" style=\"align-content: center\">
            {{ form_errors(form.Categorie) }} </div>
        {{ form_label(form.Categorie,\"Categorie du produit\") }}
        {{ form_widget(form.Categorie ,{'attr': {'class': 'form-control','placeholder':'ajouter la catégorie'}}) }}
    </div>
    <div class=\"form-group\">
        <div class=\"alert-danger\" style=\"align-content: center\">
            {{ form_errors(form.photo) }} </div>
        {{ form_label(form.photo,\"photo du produit\") }}
        {{ form_widget(form.photo ,{'attr': {'class': 'form-control'}}) }}
    </div>

<button class=\"btn btn-success\">{{ button_label|default('Enregistrer') }}</button>
{{ form_end(form) }}
{% endblock %}
", "produit/_form.html.twig", "C:\\Users\\Nour Hammami\\Desktop\\pii\\PiDev10\\templates\\produit\\_form.html.twig");
    }
}
