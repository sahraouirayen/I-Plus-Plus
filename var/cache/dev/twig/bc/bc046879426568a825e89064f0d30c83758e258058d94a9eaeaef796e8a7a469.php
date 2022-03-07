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
class __TwigTemplate_6c5ce00fcf1d0f53c300c2abe89a628be5bc063a2f0d443e6011c51257ecd9f1 extends Template
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
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 13
            echo "                    <div class=\"nt-item\"><span  style=\"background:";
            echo twig_escape_filter($this->env, twig_random($this->env, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 13, $this->source); })())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["actualite"], "categorie", [], "any", false, false, false, 13), "NomCatActualite", [], "any", false, false, false, 13), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "description", [], "any", false, false, false, 13), "html", null, true);
            echo " </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </div>
        </div>
    </div>
    <section class=\"page-section recent-game-page spad\">
        <div class=\"row\">
            <div class=\"col-8\">
                <div class=\"container-fluid\">

                    <div class=\"row\">


                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 27
            echo "


                            <div class=\"col-6\">
                                <div class=\"recent-game-item\">
                                    <div class=\"rgi-thumb set-bg\" data-setbg=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["actualite"], "imageAct", [], "any", false, false, false, 32))), "html", null, true);
            echo "\">
                                        <div class=\"cata new\" style=\"background:";
            // line 33
            echo twig_escape_filter($this->env, twig_random($this->env, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 33, $this->source); })())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["actualite"], "categorie", [], "any", false, false, false, 33), "NomCatActualite", [], "any", false, false, false, 33), "html", null, true);
            echo "</div>
                                    </div>
                                    <div class=\"rgi-content\">
                                        <h5>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "titreActualite", [], "any", false, false, false, 36), "html", null, true);
            echo "</h5>
                                        <p> ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "description", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
                                        <a href=\"#\" class=\"comment\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["actualite"], "commentAct", [], "any", false, false, false, 38), "idComment", [], "any", false, false, false, 38), "html", null, true);
            echo " Comment</a>
                                        <div class=\"rgi-extra\">
                                            <a href=\"#\"> <div class=\"rgi-star\" ><img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/like.png"), "html", null, true);
            echo "\" alt=\"\"></div></a>
                                           <a href=\"#\"><div class=\"rgi-heart\"><img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/dislike.png"), "html", null, true);
            echo "\" alt=\"\"></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "
                            <td colspan=\"4\">no records found</td>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "

                    </div>
                </div>
            </div>
            <div class=\"col-4\">
                <div class=\"container\">
                    ";
        // line 59
        $this->loadTemplate("act/side.html.twig", "actualite/index.html.twig", 59)->display($context);
        // line 60
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
        return array (  201 => 60,  199 => 59,  190 => 52,  181 => 48,  169 => 41,  165 => 40,  160 => 38,  156 => 37,  152 => 36,  144 => 33,  140 => 32,  133 => 27,  128 => 26,  115 => 15,  102 => 13,  98 => 12,  91 => 7,  81 => 6,  62 => 3,  51 => 1,  49 => 5,  36 => 1,);
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
        <div class=\"row\">
            <div class=\"col-8\">
                <div class=\"container-fluid\">

                    <div class=\"row\">


                        {% for actualite in actualites %}



                            <div class=\"col-6\">
                                <div class=\"recent-game-item\">
                                    <div class=\"rgi-thumb set-bg\" data-setbg=\"{{ asset('uploads/'~actualite.imageAct)}}\">
                                        <div class=\"cata new\" style=\"background:{{random(colors)}}\">{{ actualite.categorie.NomCatActualite }}</div>
                                    </div>
                                    <div class=\"rgi-content\">
                                        <h5>{{ actualite.titreActualite }}</h5>
                                        <p> {{ actualite.description }}</p>
                                        <a href=\"#\" class=\"comment\">{{actualite.commentAct.idComment}} Comment</a>
                                        <div class=\"rgi-extra\">
                                            <a href=\"#\"> <div class=\"rgi-star\" ><img src=\"{{ asset('img/icons/like.png')}}\" alt=\"\"></div></a>
                                           <a href=\"#\"><div class=\"rgi-heart\"><img src=\"{{ asset('img/icons/dislike.png')}}\" alt=\"\"></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        {% else %}

                            <td colspan=\"4\">no records found</td>

                        {% endfor %}


                    </div>
                </div>
            </div>
            <div class=\"col-4\">
                <div class=\"container\">
                    {% include 'act/side.html.twig' %}
                </div>
            </div>
        </div>
    </section>
{% endblock %}

", "actualite/index.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\actualite\\index.html.twig");
    }
}
