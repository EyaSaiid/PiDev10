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
        echo "    ";
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "images", [], "any", false, false, false, 42), 'errors');
        echo " </div>
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "images", [], "any", false, false, false, 43), 'label', ["label" => "photo du produit"]);
        echo "
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "images", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <div class=\"alert-danger\" style=\"align-content: center\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "photo", [], "any", false, false, false, 48), 'errors');
        echo " </div>
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "photo", [], "any", false, false, false, 49), 'label', ["label" => "photo par défaut"]);
        echo "
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "photo", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    ";
        // line 52
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "request", [], "any", false, false, false, 52), "attributes", [], "any", false, false, false, 52), "get", [0 => "_route"], "method", false, false, false, 52), "produit_edit"))) {
            // line 53
            echo "        <h2>Images</h2>
        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 54, $this->source); })()), "images", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 55
                echo "            <div>
                <img src=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/img" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 56))), "html", null, true);
                echo "\" alt=\"Image\" width=\"150\">
                <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_delete_image", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\"
                   data-delete data-token=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 58))), "html", null, true);
                echo "\">Supprimer</a>
            </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "    ";
        }
        // line 63
        echo "
  <ul><button class=\"btn btn-success\">";
        // line 64
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 64, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button></ul>
    ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
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
        return array (  224 => 65,  220 => 64,  217 => 63,  214 => 62,  204 => 58,  200 => 57,  196 => 56,  193 => 55,  189 => 54,  186 => 53,  184 => 52,  179 => 50,  175 => 49,  171 => 48,  164 => 44,  160 => 43,  156 => 42,  149 => 38,  145 => 37,  141 => 36,  134 => 32,  130 => 31,  126 => 30,  119 => 26,  115 => 25,  111 => 24,  104 => 20,  100 => 19,  95 => 17,  85 => 10,  81 => 9,  77 => 8,  68 => 3,  58 => 2,  35 => 1,);
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
            {{ form_errors(form.images) }} </div>
        {{ form_label(form.images,\"photo du produit\") }}
        {{ form_widget(form.images ,{'attr': {'class': 'form-control'}}) }}
    </div>
    <div class=\"form-group\">
        <div class=\"alert-danger\" style=\"align-content: center\">
            {{ form_errors(form.photo) }} </div>
        {{ form_label(form.photo,\"photo par défaut\") }}
        {{ form_widget(form.photo,{'attr': {'class': 'form-control'}}) }}
    </div>
    {% if app.request.attributes.get('_route') == 'produit_edit' %}
        <h2>Images</h2>
        {% for image in produit.images %}
            <div>
                <img src=\"{{ asset('/upload/img' ~ image.name) }}\" alt=\"Image\" width=\"150\">
                <a href=\"{{ path('produit_delete_image', {id: image.id}) }}\"
                   data-delete data-token=\"{{ csrf_token('delete' ~ image.id) }}\">Supprimer</a>
            </div>

        {% endfor %}
    {% endif %}

  <ul><button class=\"btn btn-success\">{{ button_label|default('Enregistrer') }}</button></ul>
    {{ form_end(form) }}
{% endblock %}", "produit/_form.html.twig", "C:\\Users\\Nour Hammami\\Desktop\\pii\\PiDev10\\templates\\produit\\_form.html.twig");
    }
}
