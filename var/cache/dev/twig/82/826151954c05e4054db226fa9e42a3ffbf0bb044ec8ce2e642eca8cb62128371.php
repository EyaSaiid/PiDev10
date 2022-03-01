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

/* Front/profil2.html.twig */
class __TwigTemplate_f0779c220eb1c5e311129a21172bc5411f0ba937c8da996f6d883d9a9c27d0b5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/profil2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/profil2.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<div class=\"form-group\">

    <div class=\"alert alert-warning\"  style=\"display: ";
        // line 4
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), "vars", [], "any", false, false, false, 4), "errors", [], "any", false, false, false, 4))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), 'errors');
        echo "
        <a class=\"close\" href=\"#\"></a>
    </div>
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), 'label', ["label" => "nom d utilisateur"]);
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "with-border", "placeholder" => "e.g. said "]]);
        echo "

</div>
<div class=\"form-group\">

    <div class=\"alert alert-warning\"  style=\"display: ";
        // line 14
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "prenom", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "errors", [], "any", false, false, false, 14))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "prenom", [], "any", false, false, false, 15), 'errors');
        echo "
        <a class=\"close\" href=\"#\"></a>
    </div>
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), 'label', ["label" => "prenom d utilisateur "]);
        echo "
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "prenom", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "with-border", "placeholder" => "e.g. eya"]]);
        echo "
</div>
<div class=\"form-group\">
    <div class=\"alert alert-warning\"  style=\"display: ";
        // line 22
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "date", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "errors", [], "any", false, false, false, 22))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "date", [], "any", false, false, false, 23), 'errors');
        echo "
        <a class=\"close\" href=\"#\"></a>
    </div>
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "date", [], "any", false, false, false, 26), 'label', ["label" => "Date de naissance"]);
        echo "
    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "date", [], "any", false, false, false, 27), 'widget');
        echo "

</div>
<div class=\"form-group\">
    <div class=\"alert alert-warning\"  style=\"display: ";
        // line 31
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "sexe", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "sexe", [], "any", false, false, false, 32), 'errors');
        echo "
        <a class=\"close\" href=\"#\"></a>
    </div>
    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "sexe", [], "any", false, false, false, 35), 'label', ["label" => "user sexe"]);
        echo "
    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "sexe", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "with-border", "placeholder" => "e.g. "]]);
        echo "

</div>
<div class=\"form-group\">
    <div class=\"alert alert-warning\"  style=\"display: ";
        // line 40
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "numero_tele", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "errors", [], "any", false, false, false, 40))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "numero_tele", [], "any", false, false, false, 41), 'errors');
        echo "
        <a class=\"close\" href=\"#\"></a>
    </div>
    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "numero_tele", [], "any", false, false, false, 44), 'label', ["label" => "user numero de telephone"]);
        echo "
    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "numero_tele", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "with-border", "placeholder" => "e.g. 22222222"]]);
        echo "

</div>
<div class=\"form-group\">
    <div class=\"alert alert-warning\"  style=\"display: ";
        // line 49
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "errors", [], "any", false, false, false, 49))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), 'errors');
        echo "
        <a class=\"close\" href=\"#\"></a>
    </div>
    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53), 'label', ["label" => "user email"]);
        echo "
    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "email", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "with-border", "placeholder" => "e.g. ***@***.com"]]);
        echo "

</div>
<div class=\"form-group\">
    <div class=\"submit-field\">
        <div class=\"alert alert-warning\"  style=\"display: ";
        // line 59
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "roles", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "errors", [], "any", false, false, false, 59))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "roles", [], "any", false, false, false, 60), 'errors');
        echo "
            <a class=\"close\" href=\"#\"></a>
        </div>
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "roles", [], "any", false, false, false, 63), 'label', ["label" => "user roles"]);
        echo "
        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "roles", [], "any", false, false, false, 64), 'widget', ["attr" => ["title" => "Select your role"]]);
        echo "
    </div>

</div>
<div class=\"form-group\">
    <div class=\"submit-field\">
        <div class=\"alert alert-warning\"  style=\"display: ";
        // line 70
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "password", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "errors", [], "any", false, false, false, 70))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "password", [], "any", false, false, false, 71), 'errors');
        echo "
            <a class=\"close\" href=\"#\"></a>
        </div>
        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "password", [], "any", false, false, false, 74), 'label', ["label" => " "]);
        echo "
        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "password", [], "any", false, false, false, 75), 'widget', ["attr" => ["title" => "enter your password"]]);
        echo "
    </div>

</div>
<div class=\"form-group\">
    <div class=\"submit-field\">
        <div class=\"alert alert-warning\"  style=\"display: ";
        // line 81
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "image", [], "any", false, false, false, 81), "vars", [], "any", false, false, false, 81), "errors", [], "any", false, false, false, 81))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "image", [], "any", false, false, false, 82), 'errors');
        echo "
            <a class=\"close\" href=\"#\"></a>
        </div>
        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "image", [], "any", false, false, false, 85), 'label', ["label" => " "]);
        echo "
        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "image", [], "any", false, false, false, 86), 'widget', ["attr" => ["title" => "télécharger votre image"]]);
        echo "
    </div>

</div>


<button  class=\"btn btn-primary\">";
        // line 92
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 92, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Front/profil2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 93,  281 => 92,  272 => 86,  268 => 85,  262 => 82,  254 => 81,  245 => 75,  241 => 74,  235 => 71,  227 => 70,  218 => 64,  214 => 63,  208 => 60,  200 => 59,  192 => 54,  188 => 53,  182 => 50,  174 => 49,  167 => 45,  163 => 44,  157 => 41,  149 => 40,  142 => 36,  138 => 35,  132 => 32,  124 => 31,  117 => 27,  113 => 26,  107 => 23,  99 => 22,  93 => 19,  89 => 18,  83 => 15,  75 => 14,  67 => 9,  63 => 8,  57 => 5,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
<div class=\"form-group\">

    <div class=\"alert alert-warning\"  style=\"display: {% if form.nom.vars.errors|length %} {% else %} none {% endif %}  \">
        {{ form_errors(form.nom) }}
        <a class=\"close\" href=\"#\"></a>
    </div>
    {{ form_label(form.nom,'nom d utilisateur') }}
    {{ form_widget(form.nom, {'attr': {'class': 'with-border','placeholder':'e.g. said '}}) }}

</div>
<div class=\"form-group\">

    <div class=\"alert alert-warning\"  style=\"display: {% if form.prenom.vars.errors|length %} {% else %} none {% endif %}  \">
        {{ form_errors(form.prenom) }}
        <a class=\"close\" href=\"#\"></a>
    </div>
    {{ form_label(form.prenom,'prenom d utilisateur ') }}
    {{ form_widget(form.prenom, {'attr': {'class': 'with-border','placeholder':'e.g. eya'}}) }}
</div>
<div class=\"form-group\">
    <div class=\"alert alert-warning\"  style=\"display: {% if form.date.vars.errors|length %} {% else %} none {% endif %}  \">
        {{ form_errors(form.date) }}
        <a class=\"close\" href=\"#\"></a>
    </div>
    {{form_label(form.date,\"Date de naissance\")  }}
    {{form_widget(form.date) }}

</div>
<div class=\"form-group\">
    <div class=\"alert alert-warning\"  style=\"display: {% if form.sexe.vars.errors|length %} {% else %} none {% endif %}  \">
        {{ form_errors(form.sexe) }}
        <a class=\"close\" href=\"#\"></a>
    </div>
    {{ form_label(form.sexe,'user sexe') }}
    {{ form_widget(form.sexe, {'attr': {'class': 'with-border','placeholder':'e.g. '}}) }}

</div>
<div class=\"form-group\">
    <div class=\"alert alert-warning\"  style=\"display: {% if form.numero_tele.vars.errors|length %} {% else %} none {% endif %}  \">
        {{ form_errors(form.numero_tele) }}
        <a class=\"close\" href=\"#\"></a>
    </div>
    {{ form_label(form.numero_tele,'user numero de telephone') }}
    {{ form_widget(form.numero_tele, {'attr': {'class': 'with-border','placeholder':'e.g. 22222222'}}) }}

</div>
<div class=\"form-group\">
    <div class=\"alert alert-warning\"  style=\"display: {% if form.email.vars.errors|length %} {% else %} none {% endif %}  \">
        {{ form_errors(form.email) }}
        <a class=\"close\" href=\"#\"></a>
    </div>
    {{ form_label(form.email,'user email') }}
    {{ form_widget(form.email, {'attr': {'class': 'with-border','placeholder':'e.g. ***@***.com'}}) }}

</div>
<div class=\"form-group\">
    <div class=\"submit-field\">
        <div class=\"alert alert-warning\"  style=\"display: {% if form.roles.vars.errors|length %} {% else %} none {% endif %}  \">
            {{ form_errors(form.roles) }}
            <a class=\"close\" href=\"#\"></a>
        </div>
        {{ form_label(form.roles,'user roles') }}
        {{ form_widget(form.roles,{'attr':{'title':'Select your role'}}) }}
    </div>

</div>
<div class=\"form-group\">
    <div class=\"submit-field\">
        <div class=\"alert alert-warning\"  style=\"display: {% if form.password.vars.errors|length %} {% else %} none {% endif %}  \">
            {{ form_errors(form.password) }}
            <a class=\"close\" href=\"#\"></a>
        </div>
        {{ form_label(form.password,' ') }}
        {{ form_widget(form.password,{'attr':{'title':'enter your password'}}) }}
    </div>

</div>
<div class=\"form-group\">
    <div class=\"submit-field\">
        <div class=\"alert alert-warning\"  style=\"display: {% if form.image.vars.errors|length %} {% else %} none {% endif %}  \">
            {{ form_errors(form.image) }}
            <a class=\"close\" href=\"#\"></a>
        </div>
        {{ form_label(form.image,' ') }}
        {{ form_widget(form.image,{'attr':{'title':'télécharger votre image'}}) }}
    </div>

</div>


<button  class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
", "Front/profil2.html.twig", "C:\\Users\\SAID EYA\\Desktop\\PiGit\\Pi\\templates\\Front\\profil2.html.twig");
    }
}
