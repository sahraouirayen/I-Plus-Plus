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

/* /actualite/pdfact.html.twig */
class __TwigTemplate_6f6979819c944178b67a5edba8f0dff07865219c76ee978bb38308a8c8748653 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/actualite/pdfact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/actualite/pdfact.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Actualite index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <head>
    <h1 align=\"center\" style=\"color: #e66a02\">I++</h1>
    <hr />
    </br>

    </head>
    <table class=\"table\">
        <thead>
        <tr>

            <th>titreActualite</th>
            <th>desciption</th>
            <th>imageAct</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "TitreActualite", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "Description", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td> ";
            // line 26
            ((twig_get_attribute($this->env, $this->source, $context["actualite"], "dateAct", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "dateAct", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualite_show", ["idActualite" => twig_get_attribute($this->env, $this->source, $context["actualite"], "IdActualite", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualite_edit", ["idActualite" => twig_get_attribute($this->env, $this->source, $context["actualite"], "IdActualite", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>
    <table width=\"100%\" style=\"font-family: sans-serif; font-size: 14px;\" >
        <br>
        <tr>
            <td>
                <table width=\"25%\" align=\"left\" style=\"font-family: sans-serif; font-size: 14px;\" >

                </table>
                <table width=\"50%\" align=\"left\" style=\"font-family: sans-serif; font-size: 13px; text-align: center;\" >
                    <tr>
                        <td style=\"padding: 0px; line-height: 20px;\">
                            <strong>I++</strong>
                            <br>
                            ghazzela,ariana soghra
                            <br>
                            Tel: +216 25 131 887 | Email: Iplusplus@gmail.com
                            <br>
                            Company Registered in Tunisia. Company Reg. 12121212.
                            <br>
                            VAT Registration No. 021021021 | ATOL No. 1234
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
        <br>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/actualite/pdfact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  152 => 37,  143 => 33,  134 => 29,  130 => 28,  125 => 26,  121 => 25,  117 => 24,  114 => 23,  109 => 22,  89 => 4,  79 => 3,  60 => 1,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block title %}Actualite index{% endblock %}

{% block body %}

    <head>
    <h1 align=\"center\" style=\"color: #e66a02\">I++</h1>
    <hr />
    </br>

    </head>
    <table class=\"table\">
        <thead>
        <tr>

            <th>titreActualite</th>
            <th>desciption</th>
            <th>imageAct</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        {% for actualite in actualites %}
            <tr>
                <td>{{ actualite.TitreActualite }}</td>
                <td>{{ actualite.Description }}</td>
                <td> {{ actualite.dateAct? actualite.dateAct|date('Y-m-d') : '' }}</td>
                <td>
                    <a href=\"{{ path('actualite_show', {'idActualite': actualite.IdActualite}) }}\">show</a>
                    <a href=\"{{ path('actualite_edit', {'idActualite': actualite.IdActualite}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <table width=\"100%\" style=\"font-family: sans-serif; font-size: 14px;\" >
        <br>
        <tr>
            <td>
                <table width=\"25%\" align=\"left\" style=\"font-family: sans-serif; font-size: 14px;\" >

                </table>
                <table width=\"50%\" align=\"left\" style=\"font-family: sans-serif; font-size: 13px; text-align: center;\" >
                    <tr>
                        <td style=\"padding: 0px; line-height: 20px;\">
                            <strong>I++</strong>
                            <br>
                            ghazzela,ariana soghra
                            <br>
                            Tel: +216 25 131 887 | Email: Iplusplus@gmail.com
                            <br>
                            Company Registered in Tunisia. Company Reg. 12121212.
                            <br>
                            VAT Registration No. 021021021 | ATOL No. 1234
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
        <br>
    </table>

{% endblock %}", "/actualite/pdfact.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\actualite\\pdfact.html.twig");
    }
}
