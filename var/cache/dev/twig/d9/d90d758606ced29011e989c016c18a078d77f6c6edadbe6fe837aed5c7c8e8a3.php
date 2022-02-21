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
        <script>alert(\"Vérifiez que vous avez bien rempli vos champs svp!\")</script>
<div class=\"alert-danger\" style=\"align-content: center\">


    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "descriptionProduit", [], "any", false, false, false, 17), 'errors');
        echo "
</div>
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "descriptionProduit", [], "any", false, false, false, 19), 'label', ["label" => "Description du produit"]);
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "descriptionProduit", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control", "cols" => "55", "rows" => "100", "placeholder" => "ajouter la description"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <div class=\"alert-danger\" style=\"align-content: center\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "prixProduit", [], "any", false, false, false, 24), 'errors');
        echo "</div>
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prixProduit", [], "any", false, false, false, 25), 'label', ["label" => "Prix du produit"]);
        echo "
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "prixProduit", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ajouter le prix"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <div class=\"alert-danger\" style=\"align-content: center\">
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "quantiteProduit", [], "any", false, false, false, 30), 'errors');
        echo " </div>
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "quantiteProduit", [], "any", false, false, false, 31), 'label', ["label" => "Quantite du produit"]);
        echo "
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "quantiteProduit", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ajouter la quantité"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <div class=\"alert-danger\" style=\"align-content: center\">
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "Categorie", [], "any", false, false, false, 36), 'errors');
        echo " </div>
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "Categorie", [], "any", false, false, false, 37), 'label', ["label" => "Categorie du produit"]);
        echo "
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "Categorie", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ajouter la catégorie"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <div class=\"alert-danger\" style=\"align-content: center\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "photo", [], "any", false, false, false, 42), 'errors');
        echo " </div>
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "photo", [], "any", false, false, false, 43), 'label', ["label" => "photo du produit"]);
        echo "
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "photo", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>

<button class=\"btn btn-success\">";
        // line 47
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 47, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
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
        return array (  173 => 48,  169 => 47,  163 => 44,  159 => 43,  155 => 42,  148 => 38,  144 => 37,  140 => 36,  133 => 32,  129 => 31,  125 => 30,  118 => 26,  114 => 25,  110 => 24,  103 => 20,  99 => 19,  94 => 17,  84 => 10,  80 => 9,  76 => 8,  68 => 3,  58 => 2,  35 => 1,);
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
        <script>alert(\"Vérifiez que vous avez bien rempli vos champs svp!\")</script>
<div class=\"alert-danger\" style=\"align-content: center\">


    {{ form_errors(form.descriptionProduit) }}
</div>
        {{ form_label(form.descriptionProduit,\"Description du produit\") }}
        {{ form_widget(form.descriptionProduit ,{'attr': {'class': 'form-control','cols':'55', 'rows':'100','placeholder':'ajouter la description'}}) }}
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
