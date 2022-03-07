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

/* modify_user/index.html.twig */
class __TwigTemplate_1f90a1d7de2b0aaea77af9259968bedc8ab8a658c3635ad8c5f025f86a0989d0 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modify_user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modify_user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "modify_user/index.html.twig", 1);
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

        echo "Hello ModifyUserController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
       i{
           color: #FFB320 !important;
       }
    </style>

";
        // line 12
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

        // line 13
        echo "<div style=\"background-color: #252525 \">
    <div class=\"container py-5 \" >
        <div class=\"row mb-4\">
            <div class=\"col-md-4\">
               <div class=\"card py-5 d-flex align-items-center justify-content-center\" style=\"background-color: #333333\">
                   <i class=\"fa fa-user-circle-o\" aria-hidden=\"true\" style=\"color: white; font-size: 200px\"></i>
                   <h3 class=\"h4 py-2 text-white\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "nom", [], "any", false, false, false, 19), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "prenom", [], "any", false, false, false, 19), "html", null, true);
        echo "</h3>
                   <p class=\"text-center text-gray\">Bienvenue sur votre compte ici vous pouvez gérer vos informations</p>
               </div>
            </div>
            <div class=\"col-md-8\">

                <div class=\"card px-4 py-4\" style=\"background-color: #333333\">
                    <h4 class=\"text-white pb-2 border-bottom\" >Details Personnels</h4>
                    <div class=\"mt-3\">
                        <h6 class=\"text-white\">Email</h6>
                        <div class=\"d-flex justify-content-between\">
                            <p class=\"text-gray\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "email", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
                            <p><a href=\"/user/compte/modifier\" style=\"color:  #FFB320\">Modifier</a></p>
                        </div>

                    </div>
                    <div>
                        <h6 class=\"text-white\">Numéro de Télephone</h6>
                        <div class=\"d-flex justify-content-between\">
                            <p class=\"text-gray\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "numTel", [], "any", false, false, false, 38), "html", null, true);
        echo "</p>
                            <p><a href=\"/user/compte/modifier\" style=\"color:  #FFB320\">Modifier</a></p>
                        </div>

                    </div>
                    <div>
                        <h6 class=\"text-white\">Mot de passe</h6>
                        <div class=\"d-flex justify-content-between\">
                            <p class=\"text-gray\">***********</p>
                            <p><a href=\"/user/compte/modifier/mdp\" style=\"color:  #FFB320\">Modifier</a></p>
                        </div>

                    </div>
                    <div>
                        <h6 class=\"text-white\">Adresse</h6>
                        <div class=\"d-flex justify-content-between\">
                            <p class=\"text-gray\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "adresse", [], "any", false, false, false, 54), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "codePostale", [], "any", false, false, false, 54)) {
            echo " , ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "codePostale", [], "any", false, false, false, 54), "html", null, true);
        }
        echo "</p>
                            <p><a href=\"/user/compte/modifier\" style=\"color:  #FFB320\">Modifier</a></p>
                        </div>

                    </div>
                    <div class=\"d-flex justify-content-center py-2\">
                        <a href=\"/logout\"><button style=\"border: none ; border-radius: 2em ; background-color:#FFB320 ; padding: 10px 20px ; font-weight: 500 \">Déconnexion</button></a>
                    </div>

                </div>
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
        return "modify_user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 54,  151 => 38,  140 => 30,  124 => 19,  116 => 13,  97 => 12,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ModifyUserController!{% endblock %}

{% block body %}
    <style>
       i{
           color: #FFB320 !important;
       }
    </style>

{% block content %}
<div style=\"background-color: #252525 \">
    <div class=\"container py-5 \" >
        <div class=\"row mb-4\">
            <div class=\"col-md-4\">
               <div class=\"card py-5 d-flex align-items-center justify-content-center\" style=\"background-color: #333333\">
                   <i class=\"fa fa-user-circle-o\" aria-hidden=\"true\" style=\"color: white; font-size: 200px\"></i>
                   <h3 class=\"h4 py-2 text-white\">{{ app.user.nom }}  {{ app.user.prenom }}</h3>
                   <p class=\"text-center text-gray\">Bienvenue sur votre compte ici vous pouvez gérer vos informations</p>
               </div>
            </div>
            <div class=\"col-md-8\">

                <div class=\"card px-4 py-4\" style=\"background-color: #333333\">
                    <h4 class=\"text-white pb-2 border-bottom\" >Details Personnels</h4>
                    <div class=\"mt-3\">
                        <h6 class=\"text-white\">Email</h6>
                        <div class=\"d-flex justify-content-between\">
                            <p class=\"text-gray\">{{ app.user.email }}</p>
                            <p><a href=\"/user/compte/modifier\" style=\"color:  #FFB320\">Modifier</a></p>
                        </div>

                    </div>
                    <div>
                        <h6 class=\"text-white\">Numéro de Télephone</h6>
                        <div class=\"d-flex justify-content-between\">
                            <p class=\"text-gray\">{{ app.user.numTel }}</p>
                            <p><a href=\"/user/compte/modifier\" style=\"color:  #FFB320\">Modifier</a></p>
                        </div>

                    </div>
                    <div>
                        <h6 class=\"text-white\">Mot de passe</h6>
                        <div class=\"d-flex justify-content-between\">
                            <p class=\"text-gray\">***********</p>
                            <p><a href=\"/user/compte/modifier/mdp\" style=\"color:  #FFB320\">Modifier</a></p>
                        </div>

                    </div>
                    <div>
                        <h6 class=\"text-white\">Adresse</h6>
                        <div class=\"d-flex justify-content-between\">
                            <p class=\"text-gray\">{{ app.user.adresse }} {% if app.user.codePostale %} , {{ app.user.codePostale }}{% endif %}</p>
                            <p><a href=\"/user/compte/modifier\" style=\"color:  #FFB320\">Modifier</a></p>
                        </div>

                    </div>
                    <div class=\"d-flex justify-content-center py-2\">
                        <a href=\"/logout\"><button style=\"border: none ; border-radius: 2em ; background-color:#FFB320 ; padding: 10px 20px ; font-weight: 500 \">Déconnexion</button></a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
    {% endblock %}
{% endblock %}
", "modify_user/index.html.twig", "C:\\Users\\21695\\Documents\\I-Plus-Plus\\templates\\modify_user\\index.html.twig");
    }
}
