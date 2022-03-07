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

/* commande/mypdf.html.twig */
class __TwigTemplate_3a107cb706aff1c93109003f781e411588f64c1c5aaec0ae629d6736a31ec6c0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/mypdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/mypdf.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Title of the PDF</title>
</head>
<body>
<h4>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</h4>
<table class=\"table\">
    <thead>
    <tr>
        <th>id commande</th>
        <th>produit</th>
        <th>Quantité</th>
        <th>Prix</th>
    </tr>
    </thead>


    <tbody class=\"w-100\">
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignesCommandes"]) || array_key_exists("lignesCommandes", $context) ? $context["lignesCommandes"] : (function () { throw new RuntimeError('Variable "lignesCommandes" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 23
            echo "        <tr class=\"w-100\">
            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "commande", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
            <td class=\"text-end\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "Produit", [], "any", false, false, false, 25), "title", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
            <td class=\"text-end\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
            <td class=\"text-end\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "price", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>

        </tr>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "        <tr>
            <td colspan=\"5\" class=\"text-center\"> pas de commandes</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
    </tbody>
</table>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "commande/mypdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  98 => 32,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  73 => 23,  68 => 22,  52 => 9,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# ./templates/default/mypdf.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Title of the PDF</title>
</head>
<body>
<h4>{{ title }}</h4>
<table class=\"table\">
    <thead>
    <tr>
        <th>id commande</th>
        <th>produit</th>
        <th>Quantité</th>
        <th>Prix</th>
    </tr>
    </thead>


    <tbody class=\"w-100\">
    {% for ligne in lignesCommandes %}
        <tr class=\"w-100\">
            <td>{{ ligne.commande.id }}</td>
            <td class=\"text-end\">{{ ligne.Produit.title }}</td>
            <td class=\"text-end\">{{ ligne.quantite }}</td>
            <td class=\"text-end\">{{ ligne.price }}</td>

        </tr>

    {% else %}
        <tr>
            <td colspan=\"5\" class=\"text-center\"> pas de commandes</td>
        </tr>
    {% endfor %}

    </tbody>
</table>
</body>
</html>", "commande/mypdf.html.twig", "C:\\Users\\21695\\Documents\\I-Plus-Plus\\templates\\commande\\mypdf.html.twig");
    }
}
