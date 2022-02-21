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

/* Front/restaurent.html.twig */
class __TwigTemplate_a5f6f61a9414b33ae98cee884fefdd12841b70a09eccc0a058dfd588e7cc54fa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/restaurent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/restaurent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/restaurent.html.twig", 1);
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
        echo "
    <!-- Page Header Start -->
    <div class=\"page-header mb-0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2>Restaurant</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Menu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class=\"body-inner\">


        <section id=\"main-container\" class=\"main-container\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-xl-3 col-lg-4\">
                        <div class=\"sidebar sidebar-left\">
                            <div class=\"widget\">
                                <h3 class=\"widget-title\">Solutions</h3>
                                <ul class=\"nav service-menu\">
                                    <li><a href=\"#\">Description</a></li>
                                    <li class=\"active\"><a href=\"#\">Description</a></li>
                                    <li><a href=\"#\">Address</a></li>
                                    <li><a href=\"#\">Menu</a></li>
                                    <li><a href=\"#\">Contact</a></li>
                                    <li><a href=\"#\">Team ou bien review</a></li>
                                </ul>
                            </div><!-- Widget end -->

                            <div class=\"widget\">
                                <div class=\"quote-item quote-border\">
                                    <div class=\"quote-text-border\">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                    </div>

                                    <div class=\"quote-item-footer\">
                                        <img loading=\"lazy\" class=\"testimonial-thumb\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images1/clients/testimonial1.png"), "html", null, true);
        echo "\" alt=\"testimonial\">
                                        <div class=\"quote-item-info\">
                                            <h3 class=\"quote-author\">Weldon Cash</h3>
                                            <span class=\"quote-subtext\">CEO, First Choice Group</span>
                                        </div>
                                    </div>
                                </div><!-- Quote item end -->

                            </div><!-- Widget end -->

                        </div><!-- Sidebar end -->
                    </div><!-- Sidebar Col end -->

                    <div class=\"col-xl-8 col-lg-8\">
                        <div class=\"content-inner-page\">

                            <h2 class=\"column-title mrt-0\">Restaurent ****</h2>

                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus
                                        sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan
                                        ipsum. Pellentesque ultrices ultrices sapien.</p>
                                    <p>Nam scelerisque tristique dolor vitae tincidunt. Aenean quis massa uada mi elementum elementum. , nec
                                        tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla commodo
                                        iaculis ligula, ac dapibus quam ornare ut. Praesent ac hendrerit sem, et tempus sem</p>
                                </div><!-- col end -->
                            </div><!-- 1st row end-->

                            <div class=\"gap-40\"></div>

                            <div id=\"page-slider\" class=\"page-slider\">
                                <div class=\"item\">
                                    <img loading=\"lazy\" class=\"img-fluid\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/carousel-1.jpg"), "html", null, true);
        echo "\" alt=\"project-slider-image\" />
                                </div>

                                <div class=\"item\">
                                    <img loading=\"lazy\" class=\"img-fluid\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/carousel-2.jpg"), "html", null, true);
        echo "\" alt=\"project-slider-image\" />
                                </div>

                                <div class=\"item\">
                                    <img loading=\"lazy\" class=\"img-fluid\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/carousel-3.jpg"), "html", null, true);
        echo "\" alt=\"project-slider-image\" />
                                </div>
                            </div><!-- Page slider end -->

                            <div class=\"gap-40\"></div>

                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h3 class=\"column-title-small\">What Makes Us Different</h3>

                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                        moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        Consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat
                                        tincidunt nunc posuere.</p>
                                    <ul class=\"list-arrow\">
                                        <li>Partnership Strategy tristique eleifend.</li>
                                        <li>Opporutnity to work with amet elit a.</li>
                                        <li>Saving Time to Deal with commodo iaculis.</li>
                                        <li>Leadership skills to manage erat volutpat.</li>
                                        <li>Cut cost without sacrificing dolore magna.</li>
                                        <li>Automate your business elis tristique.</li>
                                    </ul>
                                </div>

                                <div class=\"col-md-6 mt-5 mt-md-0\">
                                    <h3 class=\"column-title-small\">You Should Know</h3>

                                    <div class=\"accordion accordion-group accordion-classic\" id=\"construction-accordion\">
                                        <div class=\"card\">
                                            <div class=\"card-header p-0 bg-transparent\" id=\"headingOne\">
                                                <h2 class=\"mb-0\">
                                                    <button class=\"btn btn-block text-left\" type=\"button\" data-toggle=\"collapse\"
                                                            data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                                        Does the law require head protection on construction sites?
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\"
                                                 data-parent=\"#construction-accordion\">
                                                <div class=\"card-body\">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                                    wolf
                                                    moon officia aute, non cupidata
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"card\">
                                            <div class=\"card-header p-0 bg-transparent\" id=\"headingTwo\">
                                                <h2 class=\"mb-0\">
                                                    <button class=\"btn btn-block text-left collapsed\" type=\"button\" data-toggle=\"collapse\"
                                                            data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                                        What are the first aid requirements for sites?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\"
                                                 data-parent=\"#construction-accordion\">
                                                <div class=\"card-body\">
                                                    Anemi nim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo
                                                    consequat.
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur.
                                                    Excepteur sint occaecat cupid henderit in voluptate velit esse cillu oris nisi ut aliquip ex ea
                                                    com
                                                    matat.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"card\">
                                            <div class=\"card-header p-0 bg-transparent\" id=\"headingThree\">
                                                <h2 class=\"mb-0\">
                                                    <button class=\"btn btn-block text-left collapsed\" type=\"button\" data-toggle=\"collapse\"
                                                            data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                                        What is an appointed person?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\"
                                                 data-parent=\"#construction-accordion\">
                                                <div class=\"card-body\">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                    the
                                                    industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                                    and
                                                    scrambled it to make a type specimen book.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ Accordion end -->
                                </div>
                            </div>
                            <!--2nd row end -->

                            <div class=\"gap-40\"></div>

                            <div class=\"call-to-action classic\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-md-8 text-center text-md-left\">
                                        <div class=\"call-to-action-text\">
                                            <h3 class=\"action-title\">Interested with this service.</h3>
                                        </div>
                                    </div><!-- Col end -->
                                    <div class=\"col-md-4 text-center text-md-right mt-3 mt-md-0\">
                                        <div class=\"call-to-action-btn\">
                                            <a class=\"btn btn-primary\" href=\"#\">Get a Quote</a>
                                        </div>
                                    </div><!-- col end -->
                                </div><!-- row end -->
                            </div><!-- Action end -->

                        </div><!-- Content inner end -->
                    </div><!-- Content Col end -->


                </div><!-- Main row end -->
            </div><!-- Conatiner end -->
        </section><!-- Main container end -->
    </div><!-- Body inner end -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/restaurent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 88,  157 => 84,  150 => 80,  114 => 47,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block bodyMenu %}

    <!-- Page Header Start -->
    <div class=\"page-header mb-0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2>Restaurant</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Home</a>
                    <a href=\"\">Menu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class=\"body-inner\">


        <section id=\"main-container\" class=\"main-container\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-xl-3 col-lg-4\">
                        <div class=\"sidebar sidebar-left\">
                            <div class=\"widget\">
                                <h3 class=\"widget-title\">Solutions</h3>
                                <ul class=\"nav service-menu\">
                                    <li><a href=\"#\">Description</a></li>
                                    <li class=\"active\"><a href=\"#\">Description</a></li>
                                    <li><a href=\"#\">Address</a></li>
                                    <li><a href=\"#\">Menu</a></li>
                                    <li><a href=\"#\">Contact</a></li>
                                    <li><a href=\"#\">Team ou bien review</a></li>
                                </ul>
                            </div><!-- Widget end -->

                            <div class=\"widget\">
                                <div class=\"quote-item quote-border\">
                                    <div class=\"quote-text-border\">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                    </div>

                                    <div class=\"quote-item-footer\">
                                        <img loading=\"lazy\" class=\"testimonial-thumb\" src=\"{{ asset('Front/images1/clients/testimonial1.png') }}\" alt=\"testimonial\">
                                        <div class=\"quote-item-info\">
                                            <h3 class=\"quote-author\">Weldon Cash</h3>
                                            <span class=\"quote-subtext\">CEO, First Choice Group</span>
                                        </div>
                                    </div>
                                </div><!-- Quote item end -->

                            </div><!-- Widget end -->

                        </div><!-- Sidebar end -->
                    </div><!-- Sidebar Col end -->

                    <div class=\"col-xl-8 col-lg-8\">
                        <div class=\"content-inner-page\">

                            <h2 class=\"column-title mrt-0\">Restaurent ****</h2>

                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus
                                        sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan
                                        ipsum. Pellentesque ultrices ultrices sapien.</p>
                                    <p>Nam scelerisque tristique dolor vitae tincidunt. Aenean quis massa uada mi elementum elementum. , nec
                                        tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla commodo
                                        iaculis ligula, ac dapibus quam ornare ut. Praesent ac hendrerit sem, et tempus sem</p>
                                </div><!-- col end -->
                            </div><!-- 1st row end-->

                            <div class=\"gap-40\"></div>

                            <div id=\"page-slider\" class=\"page-slider\">
                                <div class=\"item\">
                                    <img loading=\"lazy\" class=\"img-fluid\" src=\"{{ asset('Front/img/carousel-1.jpg') }}\" alt=\"project-slider-image\" />
                                </div>

                                <div class=\"item\">
                                    <img loading=\"lazy\" class=\"img-fluid\" src=\"{{ asset('Front/img/carousel-2.jpg') }}\" alt=\"project-slider-image\" />
                                </div>

                                <div class=\"item\">
                                    <img loading=\"lazy\" class=\"img-fluid\" src=\"{{ asset('Front/img/carousel-3.jpg') }}\" alt=\"project-slider-image\" />
                                </div>
                            </div><!-- Page slider end -->

                            <div class=\"gap-40\"></div>

                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h3 class=\"column-title-small\">What Makes Us Different</h3>

                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                        moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        Consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat
                                        tincidunt nunc posuere.</p>
                                    <ul class=\"list-arrow\">
                                        <li>Partnership Strategy tristique eleifend.</li>
                                        <li>Opporutnity to work with amet elit a.</li>
                                        <li>Saving Time to Deal with commodo iaculis.</li>
                                        <li>Leadership skills to manage erat volutpat.</li>
                                        <li>Cut cost without sacrificing dolore magna.</li>
                                        <li>Automate your business elis tristique.</li>
                                    </ul>
                                </div>

                                <div class=\"col-md-6 mt-5 mt-md-0\">
                                    <h3 class=\"column-title-small\">You Should Know</h3>

                                    <div class=\"accordion accordion-group accordion-classic\" id=\"construction-accordion\">
                                        <div class=\"card\">
                                            <div class=\"card-header p-0 bg-transparent\" id=\"headingOne\">
                                                <h2 class=\"mb-0\">
                                                    <button class=\"btn btn-block text-left\" type=\"button\" data-toggle=\"collapse\"
                                                            data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                                        Does the law require head protection on construction sites?
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\"
                                                 data-parent=\"#construction-accordion\">
                                                <div class=\"card-body\">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                                    wolf
                                                    moon officia aute, non cupidata
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"card\">
                                            <div class=\"card-header p-0 bg-transparent\" id=\"headingTwo\">
                                                <h2 class=\"mb-0\">
                                                    <button class=\"btn btn-block text-left collapsed\" type=\"button\" data-toggle=\"collapse\"
                                                            data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                                        What are the first aid requirements for sites?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\"
                                                 data-parent=\"#construction-accordion\">
                                                <div class=\"card-body\">
                                                    Anemi nim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo
                                                    consequat.
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur.
                                                    Excepteur sint occaecat cupid henderit in voluptate velit esse cillu oris nisi ut aliquip ex ea
                                                    com
                                                    matat.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"card\">
                                            <div class=\"card-header p-0 bg-transparent\" id=\"headingThree\">
                                                <h2 class=\"mb-0\">
                                                    <button class=\"btn btn-block text-left collapsed\" type=\"button\" data-toggle=\"collapse\"
                                                            data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                                        What is an appointed person?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\"
                                                 data-parent=\"#construction-accordion\">
                                                <div class=\"card-body\">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                    the
                                                    industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                                    and
                                                    scrambled it to make a type specimen book.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ Accordion end -->
                                </div>
                            </div>
                            <!--2nd row end -->

                            <div class=\"gap-40\"></div>

                            <div class=\"call-to-action classic\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-md-8 text-center text-md-left\">
                                        <div class=\"call-to-action-text\">
                                            <h3 class=\"action-title\">Interested with this service.</h3>
                                        </div>
                                    </div><!-- Col end -->
                                    <div class=\"col-md-4 text-center text-md-right mt-3 mt-md-0\">
                                        <div class=\"call-to-action-btn\">
                                            <a class=\"btn btn-primary\" href=\"#\">Get a Quote</a>
                                        </div>
                                    </div><!-- col end -->
                                </div><!-- row end -->
                            </div><!-- Action end -->

                        </div><!-- Content inner end -->
                    </div><!-- Content Col end -->


                </div><!-- Main row end -->
            </div><!-- Conatiner end -->
        </section><!-- Main container end -->
    </div><!-- Body inner end -->


{% endblock %}", "Front/restaurent.html.twig", "C:\\Users\\Nour Hammami\\Desktop\\pii\\PiDev10\\templates\\Front\\restaurent.html.twig");
    }
}
