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

/* actualite/index.html.twig */
class __TwigTemplate_71b02c19ca8d943e10a79c3f46b75f2ffc7db6a39ea09d15c481c754931e5abb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "act/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/index.html.twig"));

        // line 5
        $context["colors"] = [0 => "#4b0082\t", 1 => "#dc143c", 2 => "#0000FF", 3 => "#FFFF00"];
        // line 1
        $this->parent = $this->loadTemplate("act/index.html.twig", "actualite/index.html.twig", 1);
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

        echo "Actualite";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class=\"latest-news-section\">
        <div class=\"ln-title\">Latest News</div>
        <div class=\"news-ticker\">
            <div class=\"news-ticker-contant\">

                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 14
            echo "                    <div class=\"nt-item\"><span  style=\"background:";
            echo twig_escape_filter($this->env, twig_random($this->env, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 14, $this->source); })())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["actualite"], "categorie", [], "any", false, false, false, 14), "NomCatActualite", [], "any", false, false, false, 14), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "description", [], "any", false, false, false, 14), "html", null, true);
            echo " </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </div>
        </div>
    </div>

    <section class=\"page-section recent-game-page spad\">
        <h2>Last added</h2>
        <div class=\"row\">
            <div class=\"col-8\">
                <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("indextri");
        echo "\" class=\"btn btn-primary\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/desc.png"), "html", null, true);
        echo "\" alt=\"\" width=\"24\" height=\"24\"></a>
                <div class=\"widget-item\">
                    <form class=\"search-widget\" action=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchact");
        echo "\">
                        <label>
                            <input type=\"text\" placeholder=\"Search\" name=\"search\">
                        </label>
                        <button><i class=\"fa fa-search\"></i></button>
                    </form>
                </div>
                <div class=\"container-fluid\">

                    <div class=\"row\">



                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 40
            echo "
<a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualite_front", ["id" => twig_get_attribute($this->env, $this->source, $context["actualite"], "idActualite", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">

                            <div class=\"col-6\">
                                <div class=\"recent-game-item\">
                                    <div class=\"rgi-thumb set-bg\" data-setbg=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["actualite"], "imageAct", [], "any", false, false, false, 45))), "html", null, true);
            echo "\">
                                        <div class=\"cata new\" style=\"background:";
            // line 46
            echo twig_escape_filter($this->env, twig_random($this->env, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 46, $this->source); })())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["actualite"], "categorie", [], "any", false, false, false, 46), "NomCatActualite", [], "any", false, false, false, 46), "html", null, true);
            echo "</div>
                                    </div>
                                    <div class=\"rgi-content\">
                                        <h5>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "titreActualite", [], "any", false, false, false, 49), "html", null, true);
            echo "</h5>
                                        <p> ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "description", [], "any", false, false, false, 50), "html", null, true);
            echo "</p>
                                        <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
            echo "\" class=\"comment\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "Vu", [], "any", false, false, false, 51), "html", null, true);
            echo "vues</a>
                                        <div class=\"rgi-extra\">

                                            <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like", ["id" => twig_get_attribute($this->env, $this->source, $context["actualite"], "idActualite", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\"> <div class=\"rgi-star\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/like.png"), "html", null, true);
            echo "\" alt=\"\"></div></a>
                                           <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dislike", ["id" => twig_get_attribute($this->env, $this->source, $context["actualite"], "idActualite", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\"><div class=\"rgi-heart\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/dislike.png"), "html", null, true);
            echo "\" alt=\"\"></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
</a>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            echo "
                            <td colspan=\"4\">no records found</td>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "

                    </div>
                    <div class=\"pagination-item\">

                        <span>";
        // line 71
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 71, $this->source); })()));
        echo "</span>

                    </div>
                    <div>
                        Nombre d'actualite: ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 75, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 75), "html", null, true);
        echo "
                    </div>
                </div>
            </div>

            <div class=\"col-4\">
                <div class=\"container\">
                    <form method=\"post\" action=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filtreact");
        echo "\">
                        <h2>Filter By Categorie</h2>
                        <h6 style=\"color: #fffffc\">filtrer par categorie :</h6>
                        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 86
            echo "                            <div class=\"bp-text\">

                                <input type=\"checkbox\" name=\"cat[]\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "IdCatActualite", [], "any", false, false, false, 88), "html", null, true);
            echo "\" >
                                <label style=\"color: #e66a02\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "NomCatActualite", [], "any", false, false, false, 89), "html", null, true);
            echo "</label>


                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
                        <button type=\"submit\" class=\"btn btn-primary\" ><img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/filterr.png"), "html", null, true);
        echo "\" alt=\"\" width=\"24\" height=\"24\"></button>
                    </form>
                    ";
        // line 98
        $this->loadTemplate("act/side.html.twig", "actualite/index.html.twig", 98)->display($context);
        // line 99
        echo "                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "actualite/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 99,  283 => 98,  278 => 96,  275 => 95,  263 => 89,  259 => 88,  255 => 86,  251 => 85,  245 => 82,  235 => 75,  228 => 71,  221 => 66,  212 => 62,  198 => 55,  192 => 54,  184 => 51,  180 => 50,  176 => 49,  168 => 46,  164 => 45,  157 => 41,  154 => 40,  149 => 39,  133 => 26,  126 => 24,  116 => 16,  103 => 14,  99 => 13,  91 => 7,  81 => 6,  62 => 3,  51 => 1,  49 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'act/index.html.twig' %}

{% block title %}Actualite{% endblock %}

{% set colors=[\"#4b0082\t\",\"#dc143c\",\"#0000FF\",\"#FFFF00\"] %}
{% block body %}

    <div class=\"latest-news-section\">
        <div class=\"ln-title\">Latest News</div>
        <div class=\"news-ticker\">
            <div class=\"news-ticker-contant\">

                {% for actualite in actualites %}
                    <div class=\"nt-item\"><span  style=\"background:{{random(colors)}}\">{{ actualite.categorie.NomCatActualite }}</span>{{ actualite.description }} </div>
                {% endfor %}
            </div>
        </div>
    </div>

    <section class=\"page-section recent-game-page spad\">
        <h2>Last added</h2>
        <div class=\"row\">
            <div class=\"col-8\">
                <a href=\"{{ path('indextri') }}\" class=\"btn btn-primary\"><img src=\"{{ asset('img/icons/desc.png')}}\" alt=\"\" width=\"24\" height=\"24\"></a>
                <div class=\"widget-item\">
                    <form class=\"search-widget\" action=\"{{ path('searchact') }}\">
                        <label>
                            <input type=\"text\" placeholder=\"Search\" name=\"search\">
                        </label>
                        <button><i class=\"fa fa-search\"></i></button>
                    </form>
                </div>
                <div class=\"container-fluid\">

                    <div class=\"row\">



                        {% for actualite in actualites %}

<a href=\"{{ path('actualite_front',{id:actualite.idActualite}) }}\">

                            <div class=\"col-6\">
                                <div class=\"recent-game-item\">
                                    <div class=\"rgi-thumb set-bg\" data-setbg=\"{{ asset('uploads/'~actualite.imageAct)}}\">
                                        <div class=\"cata new\" style=\"background:{{random(colors)}}\">{{ actualite.categorie.NomCatActualite }}</div>
                                    </div>
                                    <div class=\"rgi-content\">
                                        <h5>{{ actualite.titreActualite }}</h5>
                                        <p> {{ actualite.description }}</p>
                                        <a href=\"{{ asset('#')}}\" class=\"comment\">{{actualite.Vu}}vues</a>
                                        <div class=\"rgi-extra\">

                                            <a href=\"{{path('like',{id:actualite.idActualite})}}\"> <div class=\"rgi-star\" ><img src=\"{{ asset('img/icons/like.png')}}\" alt=\"\"></div></a>
                                           <a href=\"{{path('dislike',{id:actualite.idActualite})}}\"><div class=\"rgi-heart\"><img src=\"{{ asset('img/icons/dislike.png')}}\" alt=\"\"></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
</a>
                        {% else %}

                            <td colspan=\"4\">no records found</td>

                        {% endfor %}


                    </div>
                    <div class=\"pagination-item\">

                        <span>{{ knp_pagination_render(actualites) }}</span>

                    </div>
                    <div>
                        Nombre d'actualite: {{ actualites.getTotalItemCount }}
                    </div>
                </div>
            </div>

            <div class=\"col-4\">
                <div class=\"container\">
                    <form method=\"post\" action=\"{{ path('filtreact') }}\">
                        <h2>Filter By Categorie</h2>
                        <h6 style=\"color: #fffffc\">filtrer par categorie :</h6>
                        {% for categorie in categories %}
                            <div class=\"bp-text\">

                                <input type=\"checkbox\" name=\"cat[]\" value=\"{{ categorie.IdCatActualite }}\" >
                                <label style=\"color: #e66a02\">{{ categorie.NomCatActualite }}</label>


                            </div>

                        {% endfor %}

                        <button type=\"submit\" class=\"btn btn-primary\" ><img src=\"{{ asset('img/icons/filterr.png')}}\" alt=\"\" width=\"24\" height=\"24\"></button>
                    </form>
                    {% include 'act/side.html.twig' %}
                </div>
            </div>
        </div>
    </section>
{% endblock %}

", "actualite/index.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\actualite\\index.html.twig");
    }
}
