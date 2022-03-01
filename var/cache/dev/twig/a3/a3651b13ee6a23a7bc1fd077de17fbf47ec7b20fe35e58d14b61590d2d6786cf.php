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

/* security/login.html.twig */
class __TwigTemplate_ef7ffb3080b04c8b6c50b667e93ff650ee70b75bde9e9048d5a24872d302c9d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_bodyMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyMenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyMenu"));

        // line 6
        echo "    <div class=\"page-header mb-0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2>Login</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Login</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <div class=\"container\" >

        <div class=\"section-header text-center\"> <br>
            <h2>Please sign in</h2>
        </div>
        <div class=\"col-lg-9\">
        <div class=\" justify-content-center align-items-center container\" >

                    <form method=\"post\">
                        ";
        // line 31
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "                            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })()), "messageKey", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })()), "messageData", [], "any", false, false, false, 32), "security"), "html", null, true);
            echo "</div>

                        ";
        }
        // line 35
        echo "
                        ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36)) {
            // line 37
            echo "                            <div class=\"mb-3\">
                                You are logged in as ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "username", [], "any", false, false, false, 38), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                            </div>
                        ";
        } else {
            // line 41
            echo "                            <div class=\"mb-3\">
                                You are not  logged in <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a>
                            </div>
                        ";
        }
        // line 45
        echo "

                        <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                        <div class=\"form-group\">
                            <label for=\"inputEmail\">Email</label>
                            <input type=\"email\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"inputPassword\">Password</label>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

                            <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                        </div>

                        ";
        // line 70
        echo "
                      <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reset_password_page");
        echo "\" class=\"forgot-password\">Réinitialiser mot de passe </a>

                            <button class=\"btn btn-lg btn-primary\" type=\"submit\" >
                                Sign in
                            </button>
                    </form>
        </div>
        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 71,  172 => 70,  166 => 57,  156 => 50,  149 => 45,  143 => 42,  140 => 41,  132 => 38,  129 => 37,  127 => 36,  124 => 35,  117 => 32,  115 => 31,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block bodyMenu %}
    <div class=\"page-header mb-0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2>Login</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Login</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <div class=\"container\" >

        <div class=\"section-header text-center\"> <br>
            <h2>Please sign in</h2>
        </div>
        <div class=\"col-lg-9\">
        <div class=\" justify-content-center align-items-center container\" >

                    <form method=\"post\">
                        {% if error %}
                            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>

                        {% endif %}

                        {% if app.user %}
                            <div class=\"mb-3\">
                                You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                            </div>
                        {% else %}
                            <div class=\"mb-3\">
                                You are not  logged in <a href=\"{{ path('app_login') }}\">Login</a>
                            </div>
                        {% endif %}


                        <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                        <div class=\"form-group\">
                            <label for=\"inputEmail\">Email</label>
                            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"inputPassword\">Password</label>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

                            <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"{{ csrf_token('authenticate') }}\">
                        </div>

                        {#
                            Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                            See https://symfony.com/doc/current/security/remember_me.html

                            <div class=\"checkbox mb-3\">
                                <label>
                                    <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                                </label>
                            </div>
                        #}

                      <a href=\"{{ path('app_reset_password_page') }}\" class=\"forgot-password\">Réinitialiser mot de passe </a>

                            <button class=\"btn btn-lg btn-primary\" type=\"submit\" >
                                Sign in
                            </button>
                    </form>
        </div>
        </div>

    </div>
{% endblock %}
", "security/login.html.twig", "C:\\Users\\SAID EYA\\Desktop\\PiGit\\Pi\\templates\\security\\login.html.twig");
    }
}
