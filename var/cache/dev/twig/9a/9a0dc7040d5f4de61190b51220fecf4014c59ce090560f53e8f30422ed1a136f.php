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

/* prod/searchtab.html.twig */
class __TwigTemplate_8c097e040e32bd82408386132f2f3e16990aa21a6c149c06348bd013c275da5c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prod/searchtab.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prod/searchtab.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "prod/searchtab.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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

        // line 7
        echo "<div class=\"section_padding\">
    <div class=\"section-top-border\">

        <div  class=\"\" style=\"background-color:#fafafa ;position:relative; top: 100px; margin-left: 30px; width: 950px;\">
            <h1 style=\"color: #020101\">Livraisons </h1>
            <br>

            <br>
            <br>
            <input id=\"search\" class=\"form-control form-control-sidebar\"  type=\"search\" placeholder=\"Chercher\" aria-label=\"search\">

            <br>

            <table class=\"table\">
                <thead>
                <tr style=\"color: #a65959\">


                    <th>Livraison ID</th>
                    <th>Nom</th>
                    <th>Prenm</th>
                    <th>Destination</th>
                    <th>Num Tel</th>
                    <th>Etat</th>
                    <th>actions</th>
                </tr>
                </thead>
                <tbody id=\"allQQQ\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livraisons"]) || array_key_exists("livraisons", $context) ? $context["livraisons"] : (function () { throw new RuntimeError('Variable "livraisons" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["livraison"]) {
            // line 36
            echo "
                    <tr style=\"color: grey\">
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "livraisonId", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "nom", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "Prenom", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "adresse", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "numTel", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "etat", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                        ";
            // line 44
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["livraison"], "etat", [], "any", false, false, false, 44), "En Attente"))) {
                // line 45
                echo "                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["livraison"], "livreur", [], "any", false, false, false, 45), null))) {
                    // line 46
                    echo "                                <td>
                                    <a class=\"btn btn-info\" href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livreurs", ["id" => twig_get_attribute($this->env, $this->source, $context["livraison"], "livraisonId", [], "any", false, false, false, 47)]), "html", null, true);
                    echo "\">Affecter Au livreur</a>
                                </td>
                            ";
                }
                // line 50
                echo "                        ";
            } else {
                // line 51
                echo "                            <td></td>
                        ";
            }
            // line 53
            echo "
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "                    <tr>
                        <td colspan=\"11\">Pas de Livraisons</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livraison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                </tbody>
                <tbody id=\"search12\">
                </tbody>
            </table>
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
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admrecherchelivr");
        echo "\",
                type : 'GET',
                data: {
                    'livraison' : value
                },
                success : function(retour){
                    if(retour){
                        \$(\"#search12\").empty();
                        \$.each(JSON.parse(retour), function(i, r) {
                            \$(\"#allQQQ\").hide();
                            if(r.etat=='En Attente')
                                \$(\"#search12\").append('<tr style=\"color: grey\">' +
                                    '<td> '+r.livraisonId+' </td>' +
                                    '<td>'+r.nom+' </td>' +
                                    '<td>'+r.prenom+' </td>'+
                                    '<td>'+r.adresse+' </td>' +
                                    '<td>'+r.numTel+' </td>' +
                                    '<td>'+r.etat+' </td>' +
                                    '<td><a class=\"btn btn-info\" href=\"Livreur/'+r.livraisonId+'\">Affecter au Livreur</a> </td></tr>');
                            else
                                \$(\"#search12\").append('<tr style=\"color: grey\">' +
                                    '<td> '+r.livraisonId+' </td>' +
                                    '<td>'+r.nom+' </td>' +
                                    '<td>'+r.prenom+' </td>'+
                                    '<td>'+r.adresse+' </td>' +
                                    '<td>'+r.numTel+' </td>' +
                                    '<td>'+r.etat+' </td></tr>');
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
        return "prod/searchtab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 75,  189 => 60,  180 => 56,  173 => 53,  169 => 51,  166 => 50,  160 => 47,  157 => 46,  154 => 45,  152 => 44,  148 => 43,  144 => 42,  140 => 41,  136 => 40,  132 => 39,  128 => 38,  124 => 36,  119 => 35,  89 => 7,  69 => 6,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}



{% block body %}
    {% block content %}
<div class=\"section_padding\">
    <div class=\"section-top-border\">

        <div  class=\"\" style=\"background-color:#fafafa ;position:relative; top: 100px; margin-left: 30px; width: 950px;\">
            <h1 style=\"color: #020101\">Livraisons </h1>
            <br>

            <br>
            <br>
            <input id=\"search\" class=\"form-control form-control-sidebar\"  type=\"search\" placeholder=\"Chercher\" aria-label=\"search\">

            <br>

            <table class=\"table\">
                <thead>
                <tr style=\"color: #a65959\">


                    <th>Livraison ID</th>
                    <th>Nom</th>
                    <th>Prenm</th>
                    <th>Destination</th>
                    <th>Num Tel</th>
                    <th>Etat</th>
                    <th>actions</th>
                </tr>
                </thead>
                <tbody id=\"allQQQ\">
                {% for livraison in livraisons %}

                    <tr style=\"color: grey\">
                        <td>{{ livraison.livraisonId }}</td>
                        <td>{{ livraison.nom }}</td>
                        <td>{{ livraison.Prenom }}</td>
                        <td>{{ livraison.adresse }}</td>
                        <td>{{ livraison.numTel }}</td>
                        <td>{{ livraison.etat }}</td>
                        {% if  livraison.etat  == 'En Attente' %}
                            {% if livraison.livreur == NULL %}
                                <td>
                                    <a class=\"btn btn-info\" href=\"{{ path('livreurs', {'id': livraison.livraisonId}) }}\">Affecter Au livreur</a>
                                </td>
                            {% endif %}
                        {% else %}
                            <td></td>
                        {% endif %}

                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"11\">Pas de Livraisons</td>
                    </tr>
                {% endfor %}
                </tbody>
                <tbody id=\"search12\">
                </tbody>
            </table>
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
                url : \"{{ path('admrecherchelivr') }}\",
                type : 'GET',
                data: {
                    'livraison' : value
                },
                success : function(retour){
                    if(retour){
                        \$(\"#search12\").empty();
                        \$.each(JSON.parse(retour), function(i, r) {
                            \$(\"#allQQQ\").hide();
                            if(r.etat=='En Attente')
                                \$(\"#search12\").append('<tr style=\"color: grey\">' +
                                    '<td> '+r.livraisonId+' </td>' +
                                    '<td>'+r.nom+' </td>' +
                                    '<td>'+r.prenom+' </td>'+
                                    '<td>'+r.adresse+' </td>' +
                                    '<td>'+r.numTel+' </td>' +
                                    '<td>'+r.etat+' </td>' +
                                    '<td><a class=\"btn btn-info\" href=\"Livreur/'+r.livraisonId+'\">Affecter au Livreur</a> </td></tr>');
                            else
                                \$(\"#search12\").append('<tr style=\"color: grey\">' +
                                    '<td> '+r.livraisonId+' </td>' +
                                    '<td>'+r.nom+' </td>' +
                                    '<td>'+r.prenom+' </td>'+
                                    '<td>'+r.adresse+' </td>' +
                                    '<td>'+r.numTel+' </td>' +
                                    '<td>'+r.etat+' </td></tr>');
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
{% endblock  %}
{% endblock  %}", "prod/searchtab.html.twig", "C:\\Users\\21695\\Documents\\I-Plus-Plus\\templates\\prod\\searchtab.html.twig");
    }
}
