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
class __TwigTemplate_b85a41e066f55a8ac4636cd8d03e61cb52baf5573759d11f5827e7fa0ffa7aec extends Template
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
            'content' => [$this, 'block_content'],
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
    ";
        // line 8
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

        // line 9
        echo "
    <div class=\"latest-news-section\">
        <div class=\"ln-title\">Latest News</div>
        <div class=\"news-ticker\">
            <div class=\"news-ticker-contant\">

                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 16
            echo "                    <div class=\"nt-item\"><span  style=\"background:";
            echo twig_escape_filter($this->env, twig_random($this->env, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 16, $this->source); })())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["actualite"], "categorie", [], "any", false, false, false, 16), "NomCatActualite", [], "any", false, false, false, 16), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "description", [], "any", false, false, false, 16), "html", null, true);
            echo " </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </div>
        </div>
    </div>

    <section class=\"page-section recent-game-page spad\">
        <h2>Last added</h2>
        <div class=\"row\">
            <div class=\"col-8\">
                <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("indextri");
        echo "\" class=\"btn btn-primary\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/desc.png"), "html", null, true);
        echo "\" alt=\"\" width=\"24\" height=\"24\"></a>
                <div class=\"widget-item\">
                    <form class=\"search-widget\" action=\"";
        // line 28
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
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 42
            echo "
<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualite_front", ["id" => twig_get_attribute($this->env, $this->source, $context["actualite"], "idActualite", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">

                            <div class=\"col-6\">
                                <div class=\"recent-game-item\">
                                    <div class=\"rgi-thumb set-bg\" data-setbg=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["actualite"], "imageAct", [], "any", false, false, false, 47))), "html", null, true);
            echo "\">
                                        <div class=\"cata new\" style=\"background:";
            // line 48
            echo twig_escape_filter($this->env, twig_random($this->env, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 48, $this->source); })())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["actualite"], "categorie", [], "any", false, false, false, 48), "NomCatActualite", [], "any", false, false, false, 48), "html", null, true);
            echo "</div>
                                    </div>
                                    <div class=\"rgi-content\">
                                        <h5>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "titreActualite", [], "any", false, false, false, 51), "html", null, true);
            echo "</h5>
                                        <p> ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "description", [], "any", false, false, false, 52), "html", null, true);
            echo "</p>
                                        <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
            echo "\" class=\"comment\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "Vu", [], "any", false, false, false, 53), "html", null, true);
            echo "vues</a>
                                        <div class=\"rgi-extra\">

                                            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like", ["id" => twig_get_attribute($this->env, $this->source, $context["actualite"], "idActualite", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\"> <div class=\"rgi-star\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/like.png"), "html", null, true);
            echo "\" alt=\"\"></div></a>
                                           <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dislike", ["id" => twig_get_attribute($this->env, $this->source, $context["actualite"], "idActualite", [], "any", false, false, false, 57)]), "html", null, true);
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
            // line 64
            echo "
                            <td colspan=\"4\">no records found</td>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "

                    </div>
                    <div class=\"pagination-item\">

                        <span>";
        // line 73
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 73, $this->source); })()));
        echo "</span>

                    </div>
                    <div>
                        Nombre d'actualite: ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 77, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 77), "html", null, true);
        echo "
                    </div>
                </div>
            </div>

            <div class=\"col-4\">
                <div class=\"container\">
                    <form method=\"post\" action=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filtreact");
        echo "\">
                        <h2>Filter By Categorie</h2>
                        <h6 style=\"color: #fffffc\">filtrer par categorie :</h6>
                        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 88
            echo "                            <div class=\"bp-text\">

                                <input type=\"checkbox\" name=\"cat[]\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "IdCatActualite", [], "any", false, false, false, 90), "html", null, true);
            echo "\" >
                                <label style=\"color: #e66a02\">";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "NomCatActualite", [], "any", false, false, false, 91), "html", null, true);
            echo "</label>


                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
                        <button type=\"submit\" class=\"btn btn-primary\" ><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/filterr.png"), "html", null, true);
        echo "\" alt=\"\" width=\"24\" height=\"24\"></button>
                    </form>
                    ";
        // line 100
        $this->loadTemplate("act/side.html.twig", "actualite/index.html.twig", 100)->display($context);
        // line 101
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
        return array (  308 => 101,  306 => 100,  301 => 98,  298 => 97,  286 => 91,  282 => 90,  278 => 88,  274 => 87,  268 => 84,  258 => 77,  251 => 73,  244 => 68,  235 => 64,  221 => 57,  215 => 56,  207 => 53,  203 => 52,  199 => 51,  191 => 48,  187 => 47,  180 => 43,  177 => 42,  172 => 41,  156 => 28,  149 => 26,  139 => 18,  126 => 16,  122 => 15,  114 => 9,  95 => 8,  92 => 7,  82 => 6,  63 => 3,  52 => 1,  50 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'act/index.html.twig' %}

{% block title %}Actualite{% endblock %}

{% set colors=[\"#4b0082\t\",\"#dc143c\",\"#0000FF\",\"#FFFF00\"] %}
{% block body %}

    {% block content %}

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
{% endblock %}

", "actualite/index.html.twig", "C:\\Users\\21695\\Documents\\I-Plus-Plus\\templates\\actualite\\index.html.twig");
    }
}
