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

/* promo/tablePromo.html.twig */
class __TwigTemplate_e5b90a7a8833bee91dcdd520867c18b8feef7b227bde5a21279e518fd8fa50a0 extends Template
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
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promo/tablePromo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promo/tablePromo.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "promo/tablePromo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
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

        // line 4
        echo "    <div class=\"col-lg-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Striped Table</h4>
                <p class=\"card-description\"> Add class <code>.table-striped</code>
                </p>
                <div class=\"table-responsive\">
                    <input id=\"search\" class=\"form-control form-control-sidebar\"  type=\"search\" placeholder=\"Chercher\" aria-label=\"search\">

                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th> Id </th>
                            <th> Pourcentage promotion </th>
                            <th> dateExp </th>

                            <th> Update </th>
                            <th> Delete </th>

                        </tr>
                        </thead>
                        <tbody id=\"allQQQ\">
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new RuntimeError('Variable "tour" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 27
            echo "                            <tr>
                                <td class=\"py-1\">
                                    ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "
                                </td>
                                <td> ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "pourcentPromo", [], "any", false, false, false, 31), "html", null, true);
            echo " </td>
                                <td>
                                    ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "dateExp", [], "any", false, false, false, 33), "html", null, true);
            echo "
                                </td>

                                <td><button type=\"button\" class=\"btn btn-block btn-outline-primary btn-lg\" onclick=\"window.location.href='";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifier", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "Id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "'\">Update</button></td>
                                <td><button type=\"button\" class=\"btn btn-block btn-outline-danger btn-lg\" onclick=\"window.location.href='";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "Id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "'\">Delete</button></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </tbody>
                        <tbody id=\"search12\">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script
            src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
    </script>
    <script>
        \$( document ).ready(function() {
            \$(\"#search\").keyup(function(e){
                var value = \$(this).val();
                \$.ajax({
                    url : \"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admrecherchelivr2");
        echo "\",
                    type : 'GET',
                    data: {
                        'Promo' : value
                    },
                    success : function(retour){
                        if(retour){
                            \$(\"#search12\").empty();
                            \$.each(JSON.parse(retour), function(i, r) {
                                \$(\"#allQQQ\").hide();

                                \$(\"#search12\").append('<tr style=\"color: grey\">' +
                                    '<td> '+r.id+' </td>' +
                                    '<td>'+r.pourcentPromo+' </td>' +
                                    '<td>'+r.dateExp+' </td>'+

                                    '<td><a class=\"btn btn-block btn-outline-primary btn-lg\" href=\"update/'+r.id+'\">modifier</a> </td></tr>'+
                                    '<td><a class=\"btn btn-block btn-outline-danger btn-lg\" href=\"delete/'+r.id+'\">supprimer</a> </td></tr>'

                                    // '<td><button type=\"button\" class=\"btn btn-block btn-outline-primary btn-lg\" onclick=\"window.location.href=\"modifier/'+r.id+'\"\">Update</button></td>'+
                                    // ' <td><button type=\"button\" class=\"btn btn-block btn-outline-danger btn-lg\" onclick=\"window.location.href=\"supprimer/'+r.id+'\"\">Delete</button></td>'

                                );

                            });
                        }
                        else
                        {
                            \$(\"#allQQQ\").show();
                            \$(\"#search12\").empty();
                            \$(\"#search12\").fadeIn('fast');
                        }
                    },
                });
                return false;
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "promo/tablePromo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 56,  150 => 40,  141 => 37,  137 => 36,  131 => 33,  126 => 31,  121 => 29,  117 => 27,  113 => 26,  89 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}
{% block body %}
    {% block content %}
    <div class=\"col-lg-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Striped Table</h4>
                <p class=\"card-description\"> Add class <code>.table-striped</code>
                </p>
                <div class=\"table-responsive\">
                    <input id=\"search\" class=\"form-control form-control-sidebar\"  type=\"search\" placeholder=\"Chercher\" aria-label=\"search\">

                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th> Id </th>
                            <th> Pourcentage promotion </th>
                            <th> dateExp </th>

                            <th> Update </th>
                            <th> Delete </th>

                        </tr>
                        </thead>
                        <tbody id=\"allQQQ\">
                        {% for p in tour %}
                            <tr>
                                <td class=\"py-1\">
                                    {{ p.id }}
                                </td>
                                <td> {{ p.pourcentPromo}} </td>
                                <td>
                                    {{  p.dateExp }}
                                </td>

                                <td><button type=\"button\" class=\"btn btn-block btn-outline-primary btn-lg\" onclick=\"window.location.href='{{  path('modifier',{'id':p.Id}) }}'\">Update</button></td>
                                <td><button type=\"button\" class=\"btn btn-block btn-outline-danger btn-lg\" onclick=\"window.location.href='{{ path('supprimer',{'id':p.Id}) }}'\">Delete</button></td>
                            </tr>
                        {% endfor %}
                        </tbody>
                        <tbody id=\"search12\">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script
            src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
    </script>
    <script>
        \$( document ).ready(function() {
            \$(\"#search\").keyup(function(e){
                var value = \$(this).val();
                \$.ajax({
                    url : \"{{ path('admrecherchelivr2') }}\",
                    type : 'GET',
                    data: {
                        'Promo' : value
                    },
                    success : function(retour){
                        if(retour){
                            \$(\"#search12\").empty();
                            \$.each(JSON.parse(retour), function(i, r) {
                                \$(\"#allQQQ\").hide();

                                \$(\"#search12\").append('<tr style=\"color: grey\">' +
                                    '<td> '+r.id+' </td>' +
                                    '<td>'+r.pourcentPromo+' </td>' +
                                    '<td>'+r.dateExp+' </td>'+

                                    '<td><a class=\"btn btn-block btn-outline-primary btn-lg\" href=\"update/'+r.id+'\">modifier</a> </td></tr>'+
                                    '<td><a class=\"btn btn-block btn-outline-danger btn-lg\" href=\"delete/'+r.id+'\">supprimer</a> </td></tr>'

                                    // '<td><button type=\"button\" class=\"btn btn-block btn-outline-primary btn-lg\" onclick=\"window.location.href=\"modifier/'+r.id+'\"\">Update</button></td>'+
                                    // ' <td><button type=\"button\" class=\"btn btn-block btn-outline-danger btn-lg\" onclick=\"window.location.href=\"supprimer/'+r.id+'\"\">Delete</button></td>'

                                );

                            });
                        }
                        else
                        {
                            \$(\"#allQQQ\").show();
                            \$(\"#search12\").empty();
                            \$(\"#search12\").fadeIn('fast');
                        }
                    },
                });
                return false;
            });
        });
    </script>
{% endblock %}
{% endblock %}", "promo/tablePromo.html.twig", "C:\\Users\\21695\\Documents\\I-Plus-Plus\\templates\\promo\\tablePromo.html.twig");
    }
}
