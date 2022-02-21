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

/* Front/blog.html.twig */
class __TwigTemplate_c0eb0526f4bb81af723c11119d7ccbf243a6f5fdb07842d204bf68ddc17d3613 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/blog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/blog.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_bodyMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyMenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyMenu"));

        // line 3
        echo "    <!-- Blog Start -->
    <div class=\"blog\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <p>Food Blog</p>
                <h2>Latest From Food Blog</h2>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"blog-item\">
                        <div class=\"blog-img\">
                            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog-1.jpg"), "html", null, true);
        echo "\" alt=\"Blog\">
                        </div>
                        <div class=\"blog-content\">
                            <h2 class=\"blog-title\">Lorem ipsum dolor sit amet</h2>
                            <div class=\"blog-meta\">
                                <p><i class=\"far fa-user\"></i>Admin</p>
                                <p><i class=\"far fa-list-alt\"></i>Food</p>
                                <p><i class=\"far fa-calendar-alt\"></i>01-Jan-2045</p>
                                <p><i class=\"far fa-comments\"></i>10</p>
                            </div>
                            <div class=\"blog-text\">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                </p>
                                <a class=\"btn custom-btn\" href=\"\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"blog-item\">
                        <div class=\"blog-img\">
                            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog-2.jpg"), "html", null, true);
        echo "\" alt=\"Blog\">
                        </div>
                        <div class=\"blog-content\">
                            <h2 class=\"blog-title\">Lorem ipsum dolor sit amet</h2>
                            <div class=\"blog-meta\">
                                <p><i class=\"far fa-user\"></i>Admin</p>
                                <p><i class=\"far fa-list-alt\"></i>Food</p>
                                <p><i class=\"far fa-calendar-alt\"></i>01-Jan-2045</p>
                                <p><i class=\"far fa-comments\"></i>10</p>
                            </div>
                            <div class=\"blog-text\">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                </p>
                                <a class=\"btn custom-btn\" href=\"\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  81 => 14,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block bodyMenu %}
    <!-- Blog Start -->
    <div class=\"blog\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <p>Food Blog</p>
                <h2>Latest From Food Blog</h2>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"blog-item\">
                        <div class=\"blog-img\">
                            <img src=\"{{ asset('Front/img/blog-1.jpg') }}\" alt=\"Blog\">
                        </div>
                        <div class=\"blog-content\">
                            <h2 class=\"blog-title\">Lorem ipsum dolor sit amet</h2>
                            <div class=\"blog-meta\">
                                <p><i class=\"far fa-user\"></i>Admin</p>
                                <p><i class=\"far fa-list-alt\"></i>Food</p>
                                <p><i class=\"far fa-calendar-alt\"></i>01-Jan-2045</p>
                                <p><i class=\"far fa-comments\"></i>10</p>
                            </div>
                            <div class=\"blog-text\">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                </p>
                                <a class=\"btn custom-btn\" href=\"\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"blog-item\">
                        <div class=\"blog-img\">
                            <img src=\"{{ asset('Front/img/blog-2.jpg') }}\" alt=\"Blog\">
                        </div>
                        <div class=\"blog-content\">
                            <h2 class=\"blog-title\">Lorem ipsum dolor sit amet</h2>
                            <div class=\"blog-meta\">
                                <p><i class=\"far fa-user\"></i>Admin</p>
                                <p><i class=\"far fa-list-alt\"></i>Food</p>
                                <p><i class=\"far fa-calendar-alt\"></i>01-Jan-2045</p>
                                <p><i class=\"far fa-comments\"></i>10</p>
                            </div>
                            <div class=\"blog-text\">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                </p>
                                <a class=\"btn custom-btn\" href=\"\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


{% endblock %}
", "Front/blog.html.twig", "C:\\Users\\SAID EYA\\Desktop\\PiGit\\Pi\\templates\\Front\\blog.html.twig");
    }
}
