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

/* security/resetPasswordMail.html.twig */
class __TwigTemplate_860bc68182d59f6f2d79c9eae42117d21e181ce0d8bca7360b6e59ea1ed648d5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/resetPasswordMail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/resetPasswordMail.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

    <title>Réinisialisation Mot de passe</title>
    <style>
        body{
            font-family: 'Roboto', sans-serif;
            background-color: #212121;
            color: white;
        }
        .body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<div class=\"body\">
    <h2 style=\"font-size: 25px;\"> <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://technext.github.io/game-warrior/img/logo.png"), "html", null, true);
        echo "\">- Réinisialisation du mot de passe</h2>
    <p style=\"font-size: 15px;\">
        <strong style=\"font-size: 15px;\">
            ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "userName", [], "any", false, false, false, 25), "html", null, true);
        echo "</strong>
        tu as oublié ton mot de passe, tu vas pouvoir le réinisialiser en suivant ce lien :</p>
    <p style=\"font-size: 15px;\">
        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "</a>
    </p>
    <p style=\"font-size: 15px; \">L'Equipe Game <span style=\"color: #FFB320\"> Warrior.</span>
        <br/>
    </p>
    <h4> Enjoy !</h4>
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/resetPasswordMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  72 => 25,  66 => 22,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>

    <title>Réinisialisation Mot de passe</title>
    <style>
        body{
            font-family: 'Roboto', sans-serif;
            background-color: #212121;
            color: white;
        }
        .body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<div class=\"body\">
    <h2 style=\"font-size: 25px;\"> <img src=\"{{ asset(\"https://technext.github.io/game-warrior/img/logo.png\") }}\">- Réinisialisation du mot de passe</h2>
    <p style=\"font-size: 15px;\">
        <strong style=\"font-size: 15px;\">
            {{user.userName}}</strong>
        tu as oublié ton mot de passe, tu vas pouvoir le réinisialiser en suivant ce lien :</p>
    <p style=\"font-size: 15px;\">
        <a href=\"{{ url }}\">{{ url }}</a>
    </p>
    <p style=\"font-size: 15px; \">L'Equipe Game <span style=\"color: #FFB320\"> Warrior.</span>
        <br/>
    </p>
    <h4> Enjoy !</h4>
</div>
</body>
</html>", "security/resetPasswordMail.html.twig", "C:\\Users\\21695\\Documents\\I-Plus-Plus\\templates\\security\\resetPasswordMail.html.twig");
    }
}
