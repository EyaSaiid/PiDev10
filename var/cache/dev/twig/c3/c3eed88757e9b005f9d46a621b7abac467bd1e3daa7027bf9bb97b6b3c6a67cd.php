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

/* Front/testest.html.twig */
class __TwigTemplate_2908848ae3e34d35221fd74e095be8d2355f62809d3a5b862256e1530689e522 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'DetailMenu' => [$this, 'block_DetailMenu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/Front/menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/testest.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/testest.html.twig"));

        $this->parent = $this->loadTemplate("/Front/menu.html.twig", "Front/testest.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_DetailMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "DetailMenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "DetailMenu"));

        // line 3
        echo "
<div class=\"tab-content\">
    <div id=\"burgers\" class=\"container tab-pane active\">
        <div class=\"row\">

            <div class=\"col-lg-7 col-md-12\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPdt"]) || array_key_exists("listPdt", $context) ? $context["listPdt"] : (function () { throw new RuntimeError('Variable "listPdt" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pdt"]) {
            // line 10
            echo "                    <div class=\"menu-item\">
                        <div class=\"menu-img\">
                            <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/imageMenu2.jpg"), "html", null, true);
            echo "\" alt=\"Image\">
                        </div>
                        <div class=\"menu-text\">
                            <h3><span>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pdt"], "nomProduitPlat", [], "any", false, false, false, 15), "html", null, true);
            echo "</span> <strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pdt"], "Prix", [], "any", false, false, false, 15), "html", null, true);
            echo "</strong></h3>
                            <p> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pdt"], "DescProduitPlat", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pdt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
                <div class=\"pagination\">
                    <div class=\"row-cols-sm-4\">

                    </div>
                </div>
            </div>
            <div class=\"col-lg-5 d-none d-lg-block\">
                <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/imagefood2.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
            </div>
        </div>
    </div>
    <div id=\"snacks\" class=\"container tab-pane fade\">
        <div class=\"row\">
            <div class=\"col-lg-7 col-md-12\">
                <div class=\"menu-item\">
                    <div class=\"menu-img\">
                        <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-snack.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                    </div>
                    <div class=\"menu-text\">
                        <h3><span>Corn Tikki - Spicy fried Aloo</span> <strong>\$15.00</strong></h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-img\">
                        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-snack.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                    </div>
                    <div class=\"menu-text\">
                        <h3><span>Bread besan Toast</span> <strong>\$35.00</strong></h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-img\">
                        <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-snack.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                    </div>
                    <div class=\"menu-text\">
                        <h3><span>Healthy soya nugget snacks</span> <strong>\$20.00</strong></h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-img\">
                        <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-snack.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                    </div>
                    <div class=\"menu-text\">
                        <h3><span>Tandoori Soya Chunks</span> <strong>\$30.00</strong></h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-5 d-none d-lg-block\">
                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-snack.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
            </div>
        </div>
    </div>
    <div id=\"beverages\" class=\"container tab-pane fade\">
        <div class=\"row\">
            <div class=\"col-lg-7 col-md-12\">
                <div class=\"menu-item\">
                    <div class=\"menu-img\">
                        <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-beverage.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                    </div>
                    <div class=\"menu-text\">
                        <h3><span>Single Cup Brew</span> <strong>\$7.00</strong></h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-img\">
                        <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-beverage.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                    </div>
                    <div class=\"menu-text\">
                        <h3><span>Caffe Americano</span> <strong>\$9.00</strong></h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-img\">
                        <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-beverage.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                    </div>
                    <div class=\"menu-text\">
                        <h3><span>Caramel Macchiato</span> <strong>\$15.00</strong></h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-img\">
                        <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-beverage.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                    </div>
                    <div class=\"menu-text\">
                        <h3><span>Standard black coffee</span> <strong>\$8.00</strong></h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-img\">
                        <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-beverage.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                    </div>
                    <div class=\"menu-text\">
                        <h3><span>Standard black coffee</span> <strong>\$12.00</strong></h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-5 d-none d-lg-block\">
                <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/menu-beverage.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/testest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 127,  236 => 118,  224 => 109,  212 => 100,  200 => 91,  188 => 82,  176 => 73,  164 => 64,  152 => 55,  140 => 46,  128 => 37,  116 => 28,  106 => 20,  96 => 16,  90 => 15,  84 => 12,  80 => 10,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends '/Front/menu.html.twig'  %}
{% block DetailMenu %}

<div class=\"tab-content\">
    <div id=\"burgers\" class=\"container tab-pane active\">
        <div class=\"row\">

            <div class=\"col-lg-7 col-md-12\">
                {% for pdt in listPdt %}
                    <div class=\"menu-item\">
                        <div class=\"menu-img\">
                            <img src=\"{{ asset('Front/img/imageMenu2.jpg') }}\" alt=\"Image\">
                        </div>
                        <div class=\"menu-text\">
                            <h3><span>{{ pdt.nomProduitPlat }}</span> <strong> {{ pdt.Prix }}</strong></h3>
                            <p> {{ pdt.DescProduitPlat }}</p>
                        </div>
                    </div>
                {% endfor %}

                <div class=\"pagination\">
                    <div class=\"row-cols-sm-4\">

                    </div>
                </div>
            </div>
            <div class=\"col-lg-5 d-none d-lg-block\">
                <img src=\"{{ asset('Front/img/imagefood2.jpg') }}\" alt=\"Image\">
            </div>
        </div>
    </div>
    <div id=\"snacks\" class=\"container tab-pane fade\">
        <div class=\"row\">
            <div class=\"col-lg-7 col-md-12\">
                <div class=\"menu-item\">
                    <div class=\"menu-img\">
                        <img src=\"{{ asset('Front/img/menu-snack.jpg') }}\" alt=\"Image\">
                    </div>
                    <div class=\"menu-text\">
                        <h3><span>Corn Tikki - Spicy fried Aloo</span> <strong>\$15.00</strong></h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-img\">
                        <img src=\"{{ asset('Front/img/menu-snack.jpg') }}\" alt=\"Image\">
                    </div>
                    <div class=\"menu-text\">
                        <h3><span>Bread besan Toast</span> <strong>\$35.00</strong></h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-img\">
                        <img src=\"{{ asset('Front/img/menu-snack.jpg') }}\" alt=\"Image\">
                    </div>
                    <div class=\"menu-text\">
                        <h3><span>Healthy soya nugget snacks</span> <strong>\$20.00</strong></h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-img\">
                        <img src=\"{{ asset('Front/img/menu-snack.jpg') }}\" alt=\"Image\">
                    </div>
                    <div class=\"menu-text\">
                        <h3><span>Tandoori Soya Chunks</span> <strong>\$30.00</strong></h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-5 d-none d-lg-block\">
                <img src=\"{{ asset('Front/img/menu-snack.jpg') }}\" alt=\"Image\">
            </div>
        </div>
    </div>
    <div id=\"beverages\" class=\"container tab-pane fade\">
        <div class=\"row\">
            <div class=\"col-lg-7 col-md-12\">
                <div class=\"menu-item\">
                    <div class=\"menu-img\">
                        <img src=\"{{ asset('Front/img/menu-beverage.jpg') }}\" alt=\"Image\">
                    </div>
                    <div class=\"menu-text\">
                        <h3><span>Single Cup Brew</span> <strong>\$7.00</strong></h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-img\">
                        <img src=\"{{ asset('Front/img/menu-beverage.jpg') }}\" alt=\"Image\">
                    </div>
                    <div class=\"menu-text\">
                        <h3><span>Caffe Americano</span> <strong>\$9.00</strong></h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-img\">
                        <img src=\"{{ asset('Front/img/menu-beverage.jpg') }}\" alt=\"Image\">
                    </div>
                    <div class=\"menu-text\">
                        <h3><span>Caramel Macchiato</span> <strong>\$15.00</strong></h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-img\">
                        <img src=\"{{ asset('Front/img/menu-beverage.jpg') }}\" alt=\"Image\">
                    </div>
                    <div class=\"menu-text\">
                        <h3><span>Standard black coffee</span> <strong>\$8.00</strong></h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-img\">
                        <img src=\"{{ asset('Front/img/menu-beverage.jpg') }}\" alt=\"Image\">
                    </div>
                    <div class=\"menu-text\">
                        <h3><span>Standard black coffee</span> <strong>\$12.00</strong></h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-5 d-none d-lg-block\">
                <img src=\"{{ asset('Front/img/menu-beverage.jpg') }}\" alt=\"Image\">
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "Front/testest.html.twig", "C:\\Users\\dell\\Desktop\\PGit\\PiDev10\\templates\\Front\\testest.html.twig");
    }
}
