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

/* evenements/details.html.twig */
class __TwigTemplate_8faf3badb62580dbc0c94520d7e6befc8468783cf4ca5bc3459527c07f0d2fde extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenements/details.html.twig", 1);
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
        echo "    <br> <br><br><br><br><br><br><br>
<div class=\"about\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-6\">
                <div class=\"about-img\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Upload/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10), "html", null, true);
        echo "\" alt=\"Image\">
                        <span></span>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"about-content\">
                    <div class=\"section-header\">
                        <p style=\"text-align: center !important;\">Evenement Details </p><br>
                        <h4 style=\"text-align: center !important;\"> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 18, $this->source); })()), "titre", [], "any", false, false, false, 18), "html", null, true);
        echo "</h4>
                    </div>
                    <div class=\"about-text\">
                        <p style=\"text-align: center !important;\"> Description : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), "html", null, true);
        echo "</p><br>
                        <p style=\"text-align: center !important;\"> Lieu : ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), "html", null, true);
        echo "</p><br>
                        <p style=\"text-align: center !important;\"> Date Début : ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), "html", null, true);
        echo "</p><br>
                        <p style=\"text-align: center !important;\"> Date Fin : ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), "html", null, true);
        echo "</p><br>

                    </div>

                </div>

            </div>

        </div>
        <br><br><br><br>


        <div class=\"testimonial-carousel-pagination carousel-pagination\">
            <strong> Commentaires </strong><HR>

            <div class=\"icon-box-content table-cell\">
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 41
            echo "
                    <div class=\"icon-box-title\">
                        <h4 class=\"icon-title\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "idUser", [], "any", false, false, false, 43), "nom", [], "any", false, false, false, 43), "html", null, true);
            echo " :</h4>
                    </div>
                    <div class=\"icon-box-content\">
                        <span class=\"color-a\"> ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment", [], "any", false, false, false, 46), "html", null, true);
            echo "<br></span>
                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_delete", ["idc" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 47), "ide" => twig_get_attribute($this->env, $this->source, (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">delete</a>
                            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 48), "ide" => twig_get_attribute($this->env, $this->source, (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">edit</a><br><br><br>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
            </div>


        ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_start');
        echo "
        <div class=\"col-md-6 mb-3\">
            <div class=\"form-group\" style=\"text-align: center !important\">Commenter:
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "comment", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control form-control-lg form-control-a"]]);
        echo "
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "comment", [], "any", false, false, false, 59), 'errors');
        echo "
            </div>
            <div class=\"col-md-12 text-center\">
                <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\" formnovalidate />
            </div>
        </div>
        ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        echo "
    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evenements/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 65,  172 => 59,  168 => 58,  162 => 55,  156 => 51,  147 => 48,  143 => 47,  139 => 46,  133 => 43,  129 => 41,  125 => 40,  106 => 24,  102 => 23,  98 => 22,  94 => 21,  88 => 18,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block bodyMenu %}
    <br> <br><br><br><br><br><br><br>
<div class=\"about\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-6\">
                <div class=\"about-img\">
                    <img src=\"{{ asset('Upload/')}}{{ evenements.image }}\" alt=\"Image\">
                        <span></span>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"about-content\">
                    <div class=\"section-header\">
                        <p style=\"text-align: center !important;\">Evenement Details </p><br>
                        <h4 style=\"text-align: center !important;\"> {{ evenements.titre }}</h4>
                    </div>
                    <div class=\"about-text\">
                        <p style=\"text-align: center !important;\"> Description : {{ evenements.description }}</p><br>
                        <p style=\"text-align: center !important;\"> Lieu : {{ evenements.description }}</p><br>
                        <p style=\"text-align: center !important;\"> Date Début : {{ evenements.description }}</p><br>
                        <p style=\"text-align: center !important;\"> Date Fin : {{ evenements.description }}</p><br>

                    </div>

                </div>

            </div>

        </div>
        <br><br><br><br>


        <div class=\"testimonial-carousel-pagination carousel-pagination\">
            <strong> Commentaires </strong><HR>

            <div class=\"icon-box-content table-cell\">
                {% for c in commentaires %}

                    <div class=\"icon-box-title\">
                        <h4 class=\"icon-title\">{{ c.idUser.nom }} :</h4>
                    </div>
                    <div class=\"icon-box-content\">
                        <span class=\"color-a\"> {{ c.comment }}<br></span>
                            <a href=\"{{ path('commentaire_delete', {'idc': c.id, 'ide': evenements.id}) }}\" class=\"btn btn-danger\">delete</a>
                            <a href=\"{{ path('commentaire_edit', {'id': c.id, 'ide': evenements.id}) }}\" class=\"btn btn-primary\">edit</a><br><br><br>
                    </div>
                {% endfor %}

            </div>


        {{ form_start(form) }}
        <div class=\"col-md-6 mb-3\">
            <div class=\"form-group\" style=\"text-align: center !important\">Commenter:
                {{ form_widget(form.comment, { 'attr': {'class': 'form-control form-control-lg form-control-a'} }) }}
                {{ form_errors(form.comment) }}
            </div>
            <div class=\"col-md-12 text-center\">
                <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\" formnovalidate />
            </div>
        </div>
        {{ form_end(form) }}
    </div>

</div>
{% endblock %}", "evenements/details.html.twig", "C:\\Users\\Asus\\Documents\\GitHub\\PiDev10\\templates\\evenements\\details.html.twig");
    }
}
