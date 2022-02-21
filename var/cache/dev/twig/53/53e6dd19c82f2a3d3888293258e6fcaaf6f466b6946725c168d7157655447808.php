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
class __TwigTemplate_26c7af98b2a9220f37e81bd14d83d13670ec2ee3336b2244930b145ec8aeada7 extends Template
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
                    <h2>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 9, $this->source); })()), "nomRestaurant", [], "any", false, false, false, 9), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Accueil</a>
                    <a href=\"\">Reservation</a>
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
                                <h3 class=\"widget-title\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 29, $this->source); })()), "nomRestaurant", [], "any", false, false, false, 29), "html", null, true);
        echo " </h3>
                                <ul class=\"nav service-menu\">


";
        // line 34
        echo "                                    <li><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_menu", ["id_restaurant" => twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 34, $this->source); })()), "getIdRestaurant", [], "method", false, false, false, 34)]), "html", null, true);
        echo "\">Menu</a></li>


                                </ul>
                            </div><!-- Widget end -->

                            <div class=\"widget\">
                                <div class=\"quote-item quote-border\">
                                    <div class=\"quote-text-border\">
                                        Je suis le propriaitaire ce restaurant
                                        Contactez moi en cas de besoin
                                        ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 45, $this->source); })()), "NumTel", [], "any", false, false, false, 45), "html", null, true);
        echo "


                                    </div>

                                    <div class=\"quote-item-footer\">
                                        <img loading=\"lazy\" class=\"testimonial-thumb\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images1/clients/testimonial1.png"), "html", null, true);
        echo "\" alt=\"testimonial\">
                                        <div class=\"quote-item-info\">
                                            <h3 class=\"quote-author\"> ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["nomProp"]) || array_key_exists("nomProp", $context) ? $context["nomProp"] : (function () { throw new RuntimeError('Variable "nomProp" does not exist.', 53, $this->source); })()), "html", null, true);
        echo " </h3>

                                        </div>
                                    </div>
                                </div><!-- Quote item end -->

                            </div><!-- Widget end -->

                        </div><!-- Sidebar end -->
                    </div><!-- Sidebar Col end -->

                    <div class=\"col-xl-8 col-lg-8\">
                        <div class=\"content-inner-page\">

                            <h2 class=\"column-title mrt-0\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 67, $this->source); })()), "nomRestaurant", [], "any", false, false, false, 67), "html", null, true);
        echo "</h2>

                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <p>   ";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 71, $this->source); })()), "DescRestaurant", [], "any", false, false, false, 71), "html", null, true);
        echo "   </p>
                                          </div><!-- col end -->
                            </div><!-- 1st row end-->

                            <div class=\"gap-40\"></div>

                            <div id=\"page-slider\" class=\"page-slider\">
                                <div class=\"item\">
                                    <img loading=\"lazy\" class=\"img-fluid\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/restau.jpg"), "html", null, true);
        echo "\" alt=\"project-slider-image\" />
                                </div>


                            </div><!-- Page slider end -->

                            <div class=\"gap-40\"></div>





                                    <!--/ Accordion end -->
                                </div>
                            </div>
                            <!--2nd row end -->

                            <div class=\"gap-40\"></div>


                        </div><!-- Content inner end -->
                    </div><!-- Content Col end -->
        </section>
    </div> </div>
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
        return array (  170 => 79,  159 => 71,  152 => 67,  135 => 53,  130 => 51,  121 => 45,  106 => 34,  99 => 29,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
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
                    <h2>{{restaurant.nomRestaurant }}</h2>
                </div>
                <div class=\"col-12\">
                    <a href=\"\">Accueil</a>
                    <a href=\"\">Reservation</a>
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
                                <h3 class=\"widget-title\">{{restaurant.nomRestaurant }} </h3>
                                <ul class=\"nav service-menu\">


{#                             <li><a href=\"#\">Address</a></li>#}
                                    <li><a href=\"{{ path('details_menu', {'id_restaurant': restaurant.getIdRestaurant()  }) }}\">Menu</a></li>


                                </ul>
                            </div><!-- Widget end -->

                            <div class=\"widget\">
                                <div class=\"quote-item quote-border\">
                                    <div class=\"quote-text-border\">
                                        Je suis le propriaitaire ce restaurant
                                        Contactez moi en cas de besoin
                                        {{restaurant.NumTel }}


                                    </div>

                                    <div class=\"quote-item-footer\">
                                        <img loading=\"lazy\" class=\"testimonial-thumb\" src=\"{{ asset('Front/images1/clients/testimonial1.png') }}\" alt=\"testimonial\">
                                        <div class=\"quote-item-info\">
                                            <h3 class=\"quote-author\"> {{nomProp}} </h3>

                                        </div>
                                    </div>
                                </div><!-- Quote item end -->

                            </div><!-- Widget end -->

                        </div><!-- Sidebar end -->
                    </div><!-- Sidebar Col end -->

                    <div class=\"col-xl-8 col-lg-8\">
                        <div class=\"content-inner-page\">

                            <h2 class=\"column-title mrt-0\">{{restaurant.nomRestaurant }}</h2>

                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <p>   {{restaurant.DescRestaurant }}   </p>
                                          </div><!-- col end -->
                            </div><!-- 1st row end-->

                            <div class=\"gap-40\"></div>

                            <div id=\"page-slider\" class=\"page-slider\">
                                <div class=\"item\">
                                    <img loading=\"lazy\" class=\"img-fluid\" src=\"{{ asset('Front/img/restau.jpg') }}\" alt=\"project-slider-image\" />
                                </div>


                            </div><!-- Page slider end -->

                            <div class=\"gap-40\"></div>





                                    <!--/ Accordion end -->
                                </div>
                            </div>
                            <!--2nd row end -->

                            <div class=\"gap-40\"></div>


                        </div><!-- Content inner end -->
                    </div><!-- Content Col end -->
        </section>
    </div> </div>
                </div><!-- Main row end -->
            </div><!-- Conatiner end -->
        </section><!-- Main container end -->
    </div><!-- Body inner end -->


{% endblock %}", "Front/restaurent.html.twig", "C:\\Users\\dell\\Desktop\\PGit\\PiDev10\\templates\\Front\\restaurent.html.twig");
    }
}
