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

/* evenement/index.html.twig */
class __TwigTemplate_46b277f4b1978099aefe64d0e979165d4815bc1242be508d15648ac1d982d1cf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "evenement/index.html.twig", 1);
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

        echo "Evenement ";
        
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
        $this->displayBlock('content', $context, $blocks);
        // line 205
        echo "


































































































";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <h1>Evenement </h1>


    <div id=\"divs\">
        <input type=\"text\" id=\"search\" placeholder=\"recherche par Nom 🔍\">
        <a class=\"tg-btn\" href=\"\" id=\"idup\">ID (UP) ⬆️</a>
        <a class=\"tg-btn\" href=\"\" id=\"iddown\">ID (DOWN) ⬇️</a>
    </div>





    <table id=\"t\" class=\"table\">
        <thead>
            <tr>
                <th>IdEvent</th>
                <th>NomEvent</th>
                <th>Date</th>
                <th>Lieu</th>
                <th>DescEvent</th>
                <th>Type</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"all\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 34
            echo "            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nomEvent", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "lieu", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "descEvent", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "type", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>

                <td>
                    <a class=\"btn btn-primary\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["idEvent" => twig_get_attribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">show</a>
                    <a class=\"btn btn-primary\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_edit", ["idEvent" => twig_get_attribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>


        <tbody id=\"search\">

        </tbody>



    </table>

    <a class=\"btn btn-primary\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_new");
        echo "\" >Create new</a>
    <a class=\"btn btn-primary\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statkarim");
        echo "\" >Statistique</a>










    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$( document ).ready(function() {

            /*begin rechercher avancee multicritéres selon nom et lieux*/
            \$(\"#divs\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(\"#search\").val();
                if(value.length >= 1 || value.length == 0  )
                {

                    //    alert(value);
                    /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
                    \$.ajax({
                        /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                        url : \"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_event");
        echo "\",
                        /* La méthode utilisée pour transférer les données est GET */
                        type : 'GET',
                        /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                        data: {
                            'searchValue' : value
                        },
                        /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                        success : function(retour){
                            if(retour){
                                \$('#t tbody#search').empty();
                                \$.each(JSON.parse(retour), function(i, obj) {
                                    \$('#t tbody#all').hide();
                                    \$('#t tbody#search').append('<tr><td> '+obj.idEvent+'  </td><td>    '+obj.nomEvent+'  </td> <td>'+obj.date+' </td>  <td>'+obj.lieu+' </td>  <td>'+obj.descEvent+' </td> </td>  <td>'+obj.type+' </td>  <td> <a href=\"/evenement/'+obj.idEvent+'/edit\">🖊️</a> </td>   </tr>');
                                });
                            }
                            else
                            {

                                \$('#t tbody#all').show();
                                \$('#t tbody#search').empty();
                                \$('#t tbody#search').fadeIn('fast');

                            }
                        },
                    });
                    return false;
                }
            });
            /*end rechercher avancee multicritéres selon sujet et staus*/


            /*begin trie up selon id*/
            \$(\"#idup\").click(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(\"#search\").val();
                var value3 =\"ASC\";

                //    alert(value);
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                    url : \"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_event");
        echo "\",
                    /* La méthode utilisée pour transférer les données est GET */
                    type : 'GET',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                    data: {
                        'searchValue' : value,
                        'orderid': value3
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                    success : function(retour){
                        if(retour){
                            \$('#t tbody#search').empty();
                            \$.each(JSON.parse(retour), function(i, obj) {
                                \$('#t tbody#all').hide();
                                \$('#t tbody#search').append('<tr><td> '+obj.idEvent+'  </td><td>    '+obj.nomEvent+'  </td> <td>'+obj.date+' </td>  <td>'+obj.lieu+' </td>  <td>'+obj.descEvent+' </td> </td>  <td>'+obj.type+' </td>  <td> <a href=\"/evenement/'+obj.idEvent+'/edit\">🖊️</a> </td>   </tr>');
                            });
                        }
                        else
                        {
                            \$('#t tbody#all').show();
                            \$('#t tbody#search').empty();
                            \$('#t tbody#search').fadeIn('fast');
                        }
                    },
                });
                return false;

            });
            /*end trie up selon id*/

            /*begin trie down selon id*/
            \$(\"#iddown\").click(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(\"#search\").val();
                var value3 =\"DESC\";

                //    alert(value);
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                    url : \"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_event");
        echo "\",
                    /* La méthode utilisée pour transférer les données est GET */
                    type : 'GET',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                    data: {
                        'searchValue' : value,
                        'orderid': value3
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                    success : function(retour){
                        if(retour){
                            \$('#t tbody#search').empty();
                            \$.each(JSON.parse(retour), function(i, obj) {
                                \$('#t tbody#all').hide();
                                \$('#t tbody#search').append('<tr><td> '+obj.idEvent+'  </td><td>    '+obj.nomEvent+'  </td> <td>'+obj.date+' </td>  <td>'+obj.lieu+' </td>  <td>'+obj.descEvent+' </td> </td>  <td>'+obj.type+' </td>  <td> <a href=\"/evenement/'+obj.idEvent+'/edit\">🖊️</a> </td>   </tr>');
                            });
                        }
                        else
                        {
                            \$('#t tbody#all').show();
                            \$('#t tbody#search').empty();
                            \$('#t tbody#search').fadeIn('fast');
                        }
                    },
                });
                return false;

            });
            /*end trie down selon id*/
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evenement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 172,  385 => 132,  340 => 90,  311 => 64,  307 => 63,  294 => 52,  285 => 48,  276 => 44,  272 => 43,  266 => 40,  262 => 39,  258 => 38,  254 => 37,  250 => 36,  246 => 35,  243 => 34,  238 => 33,  210 => 7,  200 => 6,  91 => 205,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Evenement {% endblock %}

{% block body %}
{% block content %}
    <h1>Evenement </h1>


    <div id=\"divs\">
        <input type=\"text\" id=\"search\" placeholder=\"recherche par Nom 🔍\">
        <a class=\"tg-btn\" href=\"\" id=\"idup\">ID (UP) ⬆️</a>
        <a class=\"tg-btn\" href=\"\" id=\"iddown\">ID (DOWN) ⬇️</a>
    </div>





    <table id=\"t\" class=\"table\">
        <thead>
            <tr>
                <th>IdEvent</th>
                <th>NomEvent</th>
                <th>Date</th>
                <th>Lieu</th>
                <th>DescEvent</th>
                <th>Type</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"all\">
        {% for evenement in evenements %}
            <tr>
                <td>{{ evenement.idEvent }}</td>
                <td>{{ evenement.nomEvent }}</td>
                <td>{{ evenement.date ? evenement.date|date('Y-m-d') : '' }}</td>
                <td>{{ evenement.lieu }}</td>
                <td>{{ evenement.descEvent }}</td>
                                <td>{{ evenement.type }}</td>

                <td>
                    <a class=\"btn btn-primary\" href=\"{{ path('evenement_show', {'idEvent': evenement.idEvent}) }}\">show</a>
                    <a class=\"btn btn-primary\" href=\"{{ path('evenement_edit', {'idEvent': evenement.idEvent}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>


        <tbody id=\"search\">

        </tbody>



    </table>

    <a class=\"btn btn-primary\" href=\"{{ path('evenement_new') }}\" >Create new</a>
    <a class=\"btn btn-primary\" href=\"{{ path('statkarim') }}\" >Statistique</a>










    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$( document ).ready(function() {

            /*begin rechercher avancee multicritéres selon nom et lieux*/
            \$(\"#divs\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(\"#search\").val();
                if(value.length >= 1 || value.length == 0  )
                {

                    //    alert(value);
                    /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
                    \$.ajax({
                        /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                        url : \"{{ path('search_event') }}\",
                        /* La méthode utilisée pour transférer les données est GET */
                        type : 'GET',
                        /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                        data: {
                            'searchValue' : value
                        },
                        /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                        success : function(retour){
                            if(retour){
                                \$('#t tbody#search').empty();
                                \$.each(JSON.parse(retour), function(i, obj) {
                                    \$('#t tbody#all').hide();
                                    \$('#t tbody#search').append('<tr><td> '+obj.idEvent+'  </td><td>    '+obj.nomEvent+'  </td> <td>'+obj.date+' </td>  <td>'+obj.lieu+' </td>  <td>'+obj.descEvent+' </td> </td>  <td>'+obj.type+' </td>  <td> <a href=\"/evenement/'+obj.idEvent+'/edit\">🖊️</a> </td>   </tr>');
                                });
                            }
                            else
                            {

                                \$('#t tbody#all').show();
                                \$('#t tbody#search').empty();
                                \$('#t tbody#search').fadeIn('fast');

                            }
                        },
                    });
                    return false;
                }
            });
            /*end rechercher avancee multicritéres selon sujet et staus*/


            /*begin trie up selon id*/
            \$(\"#idup\").click(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(\"#search\").val();
                var value3 =\"ASC\";

                //    alert(value);
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                    url : \"{{ path('search_event') }}\",
                    /* La méthode utilisée pour transférer les données est GET */
                    type : 'GET',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                    data: {
                        'searchValue' : value,
                        'orderid': value3
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                    success : function(retour){
                        if(retour){
                            \$('#t tbody#search').empty();
                            \$.each(JSON.parse(retour), function(i, obj) {
                                \$('#t tbody#all').hide();
                                \$('#t tbody#search').append('<tr><td> '+obj.idEvent+'  </td><td>    '+obj.nomEvent+'  </td> <td>'+obj.date+' </td>  <td>'+obj.lieu+' </td>  <td>'+obj.descEvent+' </td> </td>  <td>'+obj.type+' </td>  <td> <a href=\"/evenement/'+obj.idEvent+'/edit\">🖊️</a> </td>   </tr>');
                            });
                        }
                        else
                        {
                            \$('#t tbody#all').show();
                            \$('#t tbody#search').empty();
                            \$('#t tbody#search').fadeIn('fast');
                        }
                    },
                });
                return false;

            });
            /*end trie up selon id*/

            /*begin trie down selon id*/
            \$(\"#iddown\").click(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(\"#search\").val();
                var value3 =\"DESC\";

                //    alert(value);
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                    url : \"{{ path('search_event') }}\",
                    /* La méthode utilisée pour transférer les données est GET */
                    type : 'GET',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                    data: {
                        'searchValue' : value,
                        'orderid': value3
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                    success : function(retour){
                        if(retour){
                            \$('#t tbody#search').empty();
                            \$.each(JSON.parse(retour), function(i, obj) {
                                \$('#t tbody#all').hide();
                                \$('#t tbody#search').append('<tr><td> '+obj.idEvent+'  </td><td>    '+obj.nomEvent+'  </td> <td>'+obj.date+' </td>  <td>'+obj.lieu+' </td>  <td>'+obj.descEvent+' </td> </td>  <td>'+obj.type+' </td>  <td> <a href=\"/evenement/'+obj.idEvent+'/edit\">🖊️</a> </td>   </tr>');
                            });
                        }
                        else
                        {
                            \$('#t tbody#all').show();
                            \$('#t tbody#search').empty();
                            \$('#t tbody#search').fadeIn('fast');
                        }
                    },
                });
                return false;

            });
            /*end trie down selon id*/
        });
    </script>

{% endblock %}



































































































{% endblock %}
", "evenement/index.html.twig", "C:\\Users\\21695\\Documents\\I-Plus-Plus\\templates\\evenement\\index.html.twig");
    }
}
