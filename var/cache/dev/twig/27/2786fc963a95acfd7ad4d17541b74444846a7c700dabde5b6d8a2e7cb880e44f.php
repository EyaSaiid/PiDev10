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

/* registration/register.html.twig */
class __TwigTemplate_8f601ac2471225068c36cb1dac91278d8a480c002e4591c6db462b1d9580eec1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Register";
        
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
                    <h2>Register</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Register</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 22
            echo "            <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "<div class=\"container\" >

        <div class=\"section-header text-center\"> <br>
            <h2>Register</h2>
        </div>

";
        // line 31
        echo "        <div class=\"col-6\">
        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                        <div class=\"form-group\">
                            <div class=\"alert alert-warning\"  style=\"display: ";
        // line 35
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "errors", [], "any", false, false, false, 35))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "nom", [], "any", false, false, false, 36), 'errors');
        echo "
                                <a class=\"close\" href=\"#\"></a>
                            </div>
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), 'label', ["label" => "Nom"]);
        echo "
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "nom", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "with-border", "placeholder" => "e.g. said "]]);
        echo "
                        </div>

                        <div class=\"form-group\">

                            <div class=\"alert alert-warning\"  style=\"display: ";
        // line 45
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "prenom", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "errors", [], "any", false, false, false, 45))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "prenom", [], "any", false, false, false, 46), 'errors');
        echo "
                                <a class=\"close\" href=\"#\"></a>
                            </div>
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "prenom", [], "any", false, false, false, 49), 'label', ["label" => "Prenom "]);
        echo "
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "prenom", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "with-border", "placeholder" => "e.g. eya"]]);
        echo "
                        </div>

        <div class=\"form-group\">
            <div class=\"alert alert-warning\"  style=\"display: ";
        // line 54
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "date", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "errors", [], "any", false, false, false, 54))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "date", [], "any", false, false, false, 55), 'errors');
        echo "
                <a class=\"close\" href=\"#\"></a>
            </div>
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "date", [], "any", false, false, false, 58), 'label', ["label" => "Date de naissance"]);
        echo "
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "date", [], "any", false, false, false, 59), 'widget');
        echo "

        </div>
        <div class=\"form-group\">

            <div class=\"alert alert-warning\"  style=\"display: ";
        // line 64
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "sexe", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "errors", [], "any", false, false, false, 64))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "sexe", [], "any", false, false, false, 65), 'errors');
        echo "
                <a class=\"close\" href=\"#\"></a>
            </div>
            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "sexe", [], "any", false, false, false, 68), 'label', ["label" => "Sexe"]);
        echo "
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "sexe", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "with-border", "placeholder" => "e.g. "]]);
        echo "

        </div>
        <div class=\"form-group\">
            <div class=\"alert alert-warning\"  style=\"display: ";
        // line 73
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "numero_tele", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "errors", [], "any", false, false, false, 73))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 74, $this->source); })()), "numero_tele", [], "any", false, false, false, 74), 'errors');
        echo "
                <a class=\"close\" href=\"#\"></a>
            </div>
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "numero_tele", [], "any", false, false, false, 77), 'label', ["label" => "Numero de telephone"]);
        echo "
            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), "numero_tele", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "with-border", "placeholder" => "e.g. 22222222"]]);
        echo "

        </div>
        <div class=\"form-group\">
            <div class=\"submit-field\">
                <div class=\"alert alert-warning\"  style=\"display: ";
        // line 83
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), "roles", [], "any", false, false, false, 83), "vars", [], "any", false, false, false, 83), "errors", [], "any", false, false, false, 83))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), "roles", [], "any", false, false, false, 84), 'errors');
        echo "
                    <a class=\"close\" href=\"#\"></a>
                </div>
                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), "roles", [], "any", false, false, false, 87), 'label', ["label" => "user roles"]);
        echo "
                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 88, $this->source); })()), "roles", [], "any", false, false, false, 88), 'widget', ["attr" => ["title" => "Select your role"]]);
        echo "
            </div>

        </div>

                <div class=\"form-group\">
                    <div class=\"alert alert-warning\"  style=\"display: ";
        // line 94
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 94, $this->source); })()), "email", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "errors", [], "any", false, false, false, 94))) {
            echo " ";
        } else {
            echo " none ";
        }
        echo "  \">
                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 95, $this->source); })()), "email", [], "any", false, false, false, 95), 'errors');
        echo "
                        <a class=\"close\" href=\"#\"></a>
                    </div>
                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 98, $this->source); })()), "email", [], "any", false, false, false, 98), 'label', ["label" => "Email"]);
        echo "
                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 99, $this->source); })()), "email", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "with-border", "placeholder" => "e.g. ***@***.com"]]);
        echo "
        ";
        // line 101
        echo "                </div>
                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 102, $this->source); })()), "password", [], "any", false, false, false, 102), 'row', ["label" => "Password"]);
        // line 104
        echo "
                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 105, $this->source); })()), "agreeTerms", [], "any", false, false, false, 105), 'row');
        echo "

            <button class=\"btn btn-lg btn-primary\" type=\"submit\"> Register</button> </div>
                </div>
            </div>

    </div>
</div>
    ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 113, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 113,  320 => 105,  317 => 104,  315 => 102,  312 => 101,  308 => 99,  304 => 98,  298 => 95,  290 => 94,  281 => 88,  277 => 87,  271 => 84,  263 => 83,  255 => 78,  251 => 77,  245 => 74,  237 => 73,  230 => 69,  226 => 68,  220 => 65,  212 => 64,  204 => 59,  200 => 58,  194 => 55,  186 => 54,  179 => 50,  175 => 49,  169 => 46,  161 => 45,  153 => 40,  149 => 39,  143 => 36,  135 => 35,  129 => 32,  126 => 31,  118 => 24,  109 => 22,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block bodyMenu %}
    <div class=\"page-header mb-0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2>Register</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Register</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

        {% for flashError in app.flashes('verify_email_error') %}
            <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
        {% endfor %}
<div class=\"container\" >

        <div class=\"section-header text-center\"> <br>
            <h2>Register</h2>
        </div>

{#      <table class=\" justify-content-center align-items-center container\" >#}
        <div class=\"col-6\">
        {{ form_start(registrationForm,{'attr':{'novalidate':'novalidate'}}) }}

                        <div class=\"form-group\">
                            <div class=\"alert alert-warning\"  style=\"display: {% if registrationForm.nom.vars.errors|length %} {% else %} none {% endif %}  \">
                                {{ form_errors(registrationForm.nom) }}
                                <a class=\"close\" href=\"#\"></a>
                            </div>
                            {{ form_label(registrationForm.nom,'Nom') }}
                            {{ form_widget(registrationForm.nom, {'attr': {'class': 'with-border','placeholder':'e.g. said '}}) }}
                        </div>

                        <div class=\"form-group\">

                            <div class=\"alert alert-warning\"  style=\"display: {% if registrationForm.prenom.vars.errors|length %} {% else %} none {% endif %}  \">
                                {{ form_errors(registrationForm.prenom) }}
                                <a class=\"close\" href=\"#\"></a>
                            </div>
                            {{ form_label(registrationForm.prenom,'Prenom ') }}
                            {{ form_widget(registrationForm.prenom, {'attr': {'class': 'with-border','placeholder':'e.g. eya'}}) }}
                        </div>

        <div class=\"form-group\">
            <div class=\"alert alert-warning\"  style=\"display: {% if registrationForm.date.vars.errors|length %} {% else %} none {% endif %}  \">
                {{ form_errors(registrationForm.date) }}
                <a class=\"close\" href=\"#\"></a>
            </div>
            {{form_label(registrationForm.date,\"Date de naissance\")  }}
            {{form_widget(registrationForm.date) }}

        </div>
        <div class=\"form-group\">

            <div class=\"alert alert-warning\"  style=\"display: {% if registrationForm.sexe.vars.errors|length %} {% else %} none {% endif %}  \">
                {{ form_errors(registrationForm.sexe) }}
                <a class=\"close\" href=\"#\"></a>
            </div>
            {{ form_label(registrationForm.sexe,'Sexe') }}
            {{ form_widget(registrationForm.sexe, {'attr': {'class': 'with-border','placeholder':'e.g. '}}) }}

        </div>
        <div class=\"form-group\">
            <div class=\"alert alert-warning\"  style=\"display: {% if registrationForm.numero_tele.vars.errors|length %} {% else %} none {% endif %}  \">
                {{ form_errors(registrationForm.numero_tele) }}
                <a class=\"close\" href=\"#\"></a>
            </div>
            {{ form_label(registrationForm.numero_tele,'Numero de telephone') }}
            {{ form_widget(registrationForm.numero_tele, {'attr': {'class': 'with-border','placeholder':'e.g. 22222222'}}) }}

        </div>
        <div class=\"form-group\">
            <div class=\"submit-field\">
                <div class=\"alert alert-warning\"  style=\"display: {% if registrationForm.roles.vars.errors|length %} {% else %} none {% endif %}  \">
                    {{ form_errors(registrationForm.roles) }}
                    <a class=\"close\" href=\"#\"></a>
                </div>
                {{ form_label(registrationForm.roles,'user roles') }}
                {{ form_widget(registrationForm.roles,{'attr':{'title':'Select your role'}}) }}
            </div>

        </div>

                <div class=\"form-group\">
                    <div class=\"alert alert-warning\"  style=\"display: {% if registrationForm.email.vars.errors|length %} {% else %} none {% endif %}  \">
                        {{ form_errors(registrationForm.email) }}
                        <a class=\"close\" href=\"#\"></a>
                    </div>
                    {{ form_label(registrationForm.email,'Email') }}
                    {{ form_widget(registrationForm.email, {'attr': {'class': 'with-border','placeholder':'e.g. ***@***.com'}}) }}
        {#            {{ form_help(registrationForm.email,' A confirmation link will be send to this address') }}#}
                </div>
                {{ form_row(registrationForm.password, {
                        label: 'Password'
                    }) }}
                    {{ form_row(registrationForm.agreeTerms) }}

            <button class=\"btn btn-lg btn-primary\" type=\"submit\"> Register</button> </div>
                </div>
            </div>

    </div>
</div>
    {{ form_end(registrationForm) }}
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\SAID EYA\\Desktop\\PiGit\\Pi\\templates\\registration\\register.html.twig");
    }
}
