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

/* security/reset_password.html.twig */
class __TwigTemplate_db6d3f0412713a7f3d93fbe543fd15ba8b51e50e9ba6dfb04082d389a9695bf1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/reset_password.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_bodyMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyMenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyMenu"));

        // line 4
        echo "    <div class=\"page-header mb-0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2>Login</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Réinitialisation du mot de passe</a>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 18
        if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 18, $this->source); })()), "page1"))) {
            // line 19
            echo "        <!-- Page Header End -->
        <h1>Réinitialisation du mot de passe</h1>
        <p>Veuillez entrer votre email ci-dessous.</p>
        <form method=\"post\">
            <label for=\"inputEmail\">Email</label>
            <input type=\"email\" name=\"email\" id=\"inputEmail\" placeholder=\"...@....\" required>
            <button type=\"submit\" id=\"valider\">
                reset le mot de passe
            </button>
        </form>
    ";
        } elseif ((0 === twig_compare(        // line 29
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 29, $this->source); })()), "page2"))) {
            // line 30
            echo "        <!-- Page Header End -->
        <h1>Réinitialisation du mot de passe</h1>
        <p>Veuillez entrer votre nouveau mot de passe ci-dessous.</p>
        <form method=\"post\">
            <label for=\"inputPassword\">Password</label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Mot de passe\" required>
            <input type=\"hidden\" name=\"reset_token\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["reset_token"]) || array_key_exists("reset_token", $context) ? $context["reset_token"] : (function () { throw new RuntimeError('Variable "reset_token" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\">
            <button type=\"submit\" id=\"valider\">
                Valider le mot de passe
            </button>
        </form>
    ";
        }
        // line 42
        echo "





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/reset_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  108 => 36,  100 => 30,  98 => 29,  86 => 19,  84 => 18,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block bodyMenu %}
    <div class=\"page-header mb-0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2>Login</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Réinitialisation du mot de passe</a>
                </div>
            </div>
        </div>
    </div>

    {% if page==\"page1\" %}
        <!-- Page Header End -->
        <h1>Réinitialisation du mot de passe</h1>
        <p>Veuillez entrer votre email ci-dessous.</p>
        <form method=\"post\">
            <label for=\"inputEmail\">Email</label>
            <input type=\"email\" name=\"email\" id=\"inputEmail\" placeholder=\"...@....\" required>
            <button type=\"submit\" id=\"valider\">
                reset le mot de passe
            </button>
        </form>
    {% elseif page==\"page2\" %}
        <!-- Page Header End -->
        <h1>Réinitialisation du mot de passe</h1>
        <p>Veuillez entrer votre nouveau mot de passe ci-dessous.</p>
        <form method=\"post\">
            <label for=\"inputPassword\">Password</label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Mot de passe\" required>
            <input type=\"hidden\" name=\"reset_token\" value=\"{{ reset_token }}\">
            <button type=\"submit\" id=\"valider\">
                Valider le mot de passe
            </button>
        </form>
    {% endif %}






{% endblock %}", "security/reset_password.html.twig", "C:\\Users\\SAID EYA\\Desktop\\PiGit\\Pi\\templates\\security\\reset_password.html.twig");
    }
}
