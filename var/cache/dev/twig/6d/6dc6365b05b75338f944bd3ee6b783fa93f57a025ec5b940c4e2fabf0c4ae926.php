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

/* admin_users/index.html.twig */
class __TwigTemplate_701b6bfd4addd8c39594d15da5c6d8f9bd853b25e314c3178bb16d0d6e3e1203 extends Template
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
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_users/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_users/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "admin_users/index.html.twig", 1);
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

        echo "Hello AdminUsersController!";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

";
        // line 11
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

        // line 12
        echo "   <div style=\"background-color: #000000\">
       <div class=\"row my-5 mx-3\">
           <div class=\"col-12 grid-margin\">
               <div class=\"card\">
                   <div class=\"card-body\">
                       <h4 class=\"card-title\">Utilisateurs</h4>

                           <form method=\"get\" class=\" d-flex justify-content-end\">
                               <input type=\"text\" placeholder=\"email\" style=\"width: 200px\" class=\"form-control p_input mr-2\" name=\"email\"/>
                               <input type=\"checkbox\" name=\"rolee\" value=\"ROLE_ADMIN\">Administrateur
                               <input type=\"checkbox\" name=\"rolee\" value=\"ROLE_USER\">Utilisateur
                               <button style=\"background-color: #FFB320 ; color: white\" class=\"btn\" type=\"submit\">Recherche</button>
                           </form>

                       <div class=\"table-responsive\">
                           <table class=\"table\">
                               <thead>
                               <tr>
                                   <th> Nom de client </th>
                                   <th> Email </th>
                                   <th> Numéro de Téléphone </th>
                                   <th> Role </th>
                                   <th> Modifier </th>
                                   <th> Supprimer </th>
                               </tr>
                               </thead>
                               <tbody>
                               ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["userr"]) {
            // line 40
            echo "                                   ";
            if ( !(twig_get_attribute($this->env, $this->source, $context["userr"], "email", [], "any", false, false, false, 40) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "username", [], "any", false, false, false, 40))) {
                // line 41
                echo "                                       <tr>

                                           <td> ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userr"], "nom", [], "any", false, false, false, 43), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userr"], "prenom", [], "any", false, false, false, 43), "html", null, true);
                echo " </td>
                                           <td> ";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userr"], "email", [], "any", false, false, false, 44), "html", null, true);
                echo " </td>
                                           <td> ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userr"], "numTel", [], "any", false, false, false, 45), "html", null, true);
                echo " </td>
                                           <td> ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["userr"], "roles", [], "any", false, false, false, 46));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 47
                    echo "                                                   ";
                    if ((0 === twig_compare($context["role"], "ROLE_ADMIN"))) {
                        // line 48
                        echo "                                                        Administrateur
                                                   ";
                    } else {
                        // line 50
                        echo "                                                          Utilisateur
                                                   ";
                    }
                    // line 52
                    echo "                                               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                                           </td>
                                           <td> <a href=\"/admin/users/";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userr"], "idUser", [], "any", false, false, false, 54), "html", null, true);
                echo "\">
                                                   <div class=\"badge badge-outline-success\">Modifier</div>
                                               </a>
                                           <td>

                                                   <a href=\"/admin/users/delete/";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userr"], "idUser", [], "any", false, false, false, 59), "html", null, true);
                echo "\">
                                                       <div class=\"badge badge-outline-danger\">Supprimer</div>
                                                   </a>

                                           </td>
                                       </tr>
                                   ";
            }
            // line 66
            echo "                               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
                               </tbody>
                           </table>
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
        return "admin_users/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 67,  211 => 66,  201 => 59,  193 => 54,  190 => 53,  184 => 52,  180 => 50,  176 => 48,  173 => 47,  169 => 46,  165 => 45,  161 => 44,  155 => 43,  151 => 41,  148 => 40,  144 => 39,  115 => 12,  96 => 11,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Hello AdminUsersController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

{% block content %}
   <div style=\"background-color: #000000\">
       <div class=\"row my-5 mx-3\">
           <div class=\"col-12 grid-margin\">
               <div class=\"card\">
                   <div class=\"card-body\">
                       <h4 class=\"card-title\">Utilisateurs</h4>

                           <form method=\"get\" class=\" d-flex justify-content-end\">
                               <input type=\"text\" placeholder=\"email\" style=\"width: 200px\" class=\"form-control p_input mr-2\" name=\"email\"/>
                               <input type=\"checkbox\" name=\"rolee\" value=\"ROLE_ADMIN\">Administrateur
                               <input type=\"checkbox\" name=\"rolee\" value=\"ROLE_USER\">Utilisateur
                               <button style=\"background-color: #FFB320 ; color: white\" class=\"btn\" type=\"submit\">Recherche</button>
                           </form>

                       <div class=\"table-responsive\">
                           <table class=\"table\">
                               <thead>
                               <tr>
                                   <th> Nom de client </th>
                                   <th> Email </th>
                                   <th> Numéro de Téléphone </th>
                                   <th> Role </th>
                                   <th> Modifier </th>
                                   <th> Supprimer </th>
                               </tr>
                               </thead>
                               <tbody>
                               {% for userr in users %}
                                   {% if userr.email is not same as app.user.username   %}
                                       <tr>

                                           <td> {{ userr.nom }} {{ userr.prenom }} </td>
                                           <td> {{userr.email}} </td>
                                           <td> {{ userr.numTel }} </td>
                                           <td> {% for role in userr.roles%}
                                                   {% if role == \"ROLE_ADMIN\" %}
                                                        Administrateur
                                                   {% else %}
                                                          Utilisateur
                                                   {% endif %}
                                               {% endfor %}
                                           </td>
                                           <td> <a href=\"/admin/users/{{ userr.idUser }}\">
                                                   <div class=\"badge badge-outline-success\">Modifier</div>
                                               </a>
                                           <td>

                                                   <a href=\"/admin/users/delete/{{ userr.idUser }}\">
                                                       <div class=\"badge badge-outline-danger\">Supprimer</div>
                                                   </a>

                                           </td>
                                       </tr>
                                   {% endif %}
                               {% endfor %}

                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
    {% endblock %}
{% endblock %}
", "admin_users/index.html.twig", "C:\\Users\\21695\\Documents\\I-Plus-Plus\\templates\\admin_users\\index.html.twig");
    }
}
