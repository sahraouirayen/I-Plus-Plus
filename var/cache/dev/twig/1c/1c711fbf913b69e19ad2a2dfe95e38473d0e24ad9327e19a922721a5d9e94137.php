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

/* actualite/frontactualite.html.twig */
class __TwigTemplate_8b2a3d3ffda69445a3f7bc5513c36469e925059caa2daa087325eeef7c668ced extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/frontactualite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/frontactualite.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "actualite/frontactualite.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        $context["colors"] = [0 => "#4b0082\t", 1 => "#dc143c", 2 => "#0000FF", 3 => "#FFFF00"];
        // line 7
        echo "<section class=\"page-info-section set-bg\" data-setbg=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 7, $this->source); })()), "imageAct", [], "any", false, false, false, 7))), "html", null, true);
        echo "\">
    <div class=\"pi-content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-5 col-lg-6 text-white\">
                    <h2><span  style=\"background:";
        // line 12
        echo twig_escape_filter($this->env, twig_random($this->env, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 12, $this->source); })())), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 12, $this->source); })()), "categorie", [], "any", false, false, false, 12), "NomCatActualite", [], "any", false, false, false, 12), "html", null, true);
        echo "</span></h2>
                    <h3>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13), "html", null, true);
        echo "</h3>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class=\"row\">
    <div class=\"col-8\">
    <div class=\"container\">
    <p>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 22, $this->source); })()), "etendu", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
    </div></div>
    </div>

    <div class=\"col-4\">
        <div class=\"container\">
            ";
        // line 28
        $this->loadTemplate("act/side.html.twig", "actualite/frontactualite.html.twig", 28)->display($context);
        // line 29
        echo "        </div>
    </div>

<section class=\"page-section recent-game-page spad\">
    <div class=\"container\">
        <div class=\"row\">



            <section class=\"page-section spad contact-page\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 mb-5 mb-lg-0\">
                            <h4 class=\"comment-title\">Contact us</h4>
                            <p></p>
                                <div class=\"col-md-9\">
                                    <ul class=\"contact-info-list\">
                                        <li><div class=\"cf-left\">Address</div><div class=\"cf-right\">1481 Creekside Lane Avila Beach, CA 931</div></li>
                                        <li><div class=\"cf-left\">Phone</div><div class=\"cf-right\">+53 345 7953 32453</div></li>
                                        <li><div class=\"cf-left\">E-mail</div><div class=\"cf-right\">yourmail@gmail.com</div></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"social-links\">
                                <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-pinterest\"></i></a>
                                <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-dribbble\"></i></a>
                                <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-behance\"></i></a>
                                <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>

            </section>

            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "actualite/frontactualite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 58,  171 => 57,  167 => 56,  163 => 55,  159 => 54,  155 => 53,  129 => 29,  127 => 28,  118 => 22,  106 => 13,  100 => 12,  91 => 7,  89 => 6,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}


{% block body %}
    {% block content %}
{% set colors=[\"#4b0082\t\",\"#dc143c\",\"#0000FF\",\"#FFFF00\"] %}
<section class=\"page-info-section set-bg\" data-setbg=\"{{ asset('uploads/'~actualites.imageAct)}}\">
    <div class=\"pi-content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-5 col-lg-6 text-white\">
                    <h2><span  style=\"background:{{random(colors)}}\">{{ actualites.categorie.NomCatActualite }}</span></h2>
                    <h3>{{ actualites.description }}</h3>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class=\"row\">
    <div class=\"col-8\">
    <div class=\"container\">
    <p>{{actualites.etendu}}</p>
    </div></div>
    </div>

    <div class=\"col-4\">
        <div class=\"container\">
            {% include 'act/side.html.twig' %}
        </div>
    </div>

<section class=\"page-section recent-game-page spad\">
    <div class=\"container\">
        <div class=\"row\">



            <section class=\"page-section spad contact-page\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 mb-5 mb-lg-0\">
                            <h4 class=\"comment-title\">Contact us</h4>
                            <p></p>
                                <div class=\"col-md-9\">
                                    <ul class=\"contact-info-list\">
                                        <li><div class=\"cf-left\">Address</div><div class=\"cf-right\">1481 Creekside Lane Avila Beach, CA 931</div></li>
                                        <li><div class=\"cf-left\">Phone</div><div class=\"cf-right\">+53 345 7953 32453</div></li>
                                        <li><div class=\"cf-left\">E-mail</div><div class=\"cf-right\">yourmail@gmail.com</div></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"social-links\">
                                <a href=\"{{ asset('#')}}\"><i class=\"fa fa-pinterest\"></i></a>
                                <a href=\"{{ asset('#')}}\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"{{ asset('#')}}\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"{{ asset('#')}}\"><i class=\"fa fa-dribbble\"></i></a>
                                <a href=\"{{ asset('#')}}\"><i class=\"fa fa-behance\"></i></a>
                                <a href=\"{{ asset('#')}}\"><i class=\"fa fa-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>

            </section>

            {% endblock%}
{% endblock%}", "actualite/frontactualite.html.twig", "C:\\Users\\21695\\Documents\\I-Plus-Plus\\templates\\actualite\\frontactualite.html.twig");
    }
}
