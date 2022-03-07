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

/* security/resetPassword.html.twig */
class __TwigTemplate_a6bae0838fc0d44565d6c21be16ab76be4e5f72c43873e4b66e2bc0ab5103ac4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/resetPassword.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/resetPassword.html.twig"));

        // line 1
        echo "<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Réinisialisation</title>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" rel=\"shortcut icon\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <style>
        body{
            background: no-repeat 100% url(\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://wallpaper.dog/large/20492255.jpg"), "html", null, true);
        echo "\");
            background-size: cover;

        }
    </style>


</head>
<body>

<div class=\"container-scroller\">
    <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
        <div class=\"row w-100 h-100 d-flex align-items-center justify-content-center\">
            <div class=\"content-wrapper full-page-wrapper d-flex align-items-center  login-bg\">
                <div class=\"card col-lg-12  mx-auto\" style=\"background-color: rgba(255,255,255,0.75)\">
                    <div class=\"card-body px-5 py-5 \">
                        ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "                            <div class=\"mb-3\">
                                You are logged in as ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "username", [], "any", false, false, false, 30), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                            </div>
                        ";
        } else {
            // line 33
            echo "                            <form method=\"post\">
                            <h3 class=\"card-title text-left mb-3\">
                                Réinisialisation du mot de passe
                            </h3>

                            <label for=\"inputPassword\" class=\"\">Nouveau mot de passe*</label>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
                            <input type=\"hidden\" name=\"token\" value=\"{token}\">
                            <div class=\"text-center mt-2\">
                                <button style=\"background-color: #FFB320;color:white\" class=\"btn mt-2 ml-0\" type=\"submit\">
                                    Envoyer !
                                </button>
                            </div>
                            </form>
                        ";
        }
        // line 48
        echo "                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/settings.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/todolist.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/resetPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 62,  135 => 61,  131 => 60,  127 => 59,  123 => 58,  111 => 48,  94 => 33,  86 => 30,  83 => 29,  81 => 28,  62 => 12,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Réinisialisation</title>
    <link href=\"{{ asset('img/favicon.ico')}}\" rel=\"shortcut icon\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css')}}\"/>
    <style>
        body{
            background: no-repeat 100% url(\"{{ asset('https://wallpaper.dog/large/20492255.jpg') }}\");
            background-size: cover;

        }
    </style>


</head>
<body>

<div class=\"container-scroller\">
    <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
        <div class=\"row w-100 h-100 d-flex align-items-center justify-content-center\">
            <div class=\"content-wrapper full-page-wrapper d-flex align-items-center  login-bg\">
                <div class=\"card col-lg-12  mx-auto\" style=\"background-color: rgba(255,255,255,0.75)\">
                    <div class=\"card-body px-5 py-5 \">
                        {% if app.user %}
                            <div class=\"mb-3\">
                                You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                            </div>
                        {% else %}
                            <form method=\"post\">
                            <h3 class=\"card-title text-left mb-3\">
                                Réinisialisation du mot de passe
                            </h3>

                            <label for=\"inputPassword\" class=\"\">Nouveau mot de passe*</label>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
                            <input type=\"hidden\" name=\"token\" value=\"{token}\">
                            <div class=\"text-center mt-2\">
                                <button style=\"background-color: #FFB320;color:white\" class=\"btn mt-2 ml-0\" type=\"submit\">
                                    Envoyer !
                                </button>
                            </div>
                            </form>
                        {% endif %}
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

<script src=\"{{ asset('assets/js/off-canvas.js') }}\"></script>
<script src=\"{{ asset('assets/js/hoverable-collapse.js') }}\"></script>
<script src=\"{{ asset('assets/js/misc.js') }}\"></script>
<script src=\"{{ asset('assets/js/settings.js') }}\"></script>
<script src=\"{{ asset('assets/js/todolist.js') }}\"></script>
</body>
</html>", "security/resetPassword.html.twig", "C:\\Users\\21695\\Documents\\I-Plus-Plus\\templates\\security\\resetPassword.html.twig");
    }
}
