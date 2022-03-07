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

/* security/user-login.html.twig */
class __TwigTemplate_4958fed665d12a3d15db2f5bb8ae026c48fbca2da88d044c2d992341a6e3ba0f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/user-login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/user-login.html.twig"));

        // line 1
        echo "<html>
<head>

    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Connexion</title>
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

<form method=\"post\">
    ";
        // line 21
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })()), "messageKey", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })()), "messageData", [], "any", false, false, false, 22), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>

    ";
        }
        // line 31
        echo "

    <div class=\"container-scroller\">
        <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
            <div class=\"row w-100 d-flex align-items-center justify-content-center\" style=\"margin-top: 8%\">
                <div class=\"content-wrapper full-page-wrapper d-flex align-items-center\">
                    <div class=\"card col-lg-12 mx-auto\" style=\"background-color: rgba(255,255,255,0.75)\">
                        <div class=\"card-body px-5 py-5\">
                            <h3 class=\"card-title text-left mb-3\">Connexion</h3>
                            <form>
                                <div class=\"form-group\">
                                    <label for=\"inputEmail\">Email</label>
                                    <input type=\"email\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail p_input\" class=\"form-control\" autocomplete=\"email\" required autofocus>

                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputPassword\">Mot de passe</label>

                                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control p_input\" autocomplete=\"current-password\" required>

                                </div>
                                <input type=\"hidden\" name=\"_csrf_token\"
                                       value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                                >
                                <div class=\"form-group d-flex align-items-center justify-content-between\">

                                    <a href=\"/mot-passe-oublié\" class=\"forgot-pass\">Mot de passe oublié?</a>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" name=\"_remember_me\"/>Remember me
                                    </label>
                                </div>
                                <div class=\"text-center d-flex justify-content-center\">

                                    <button class=\"btn btn-warning btn-block enter-btn text-white w-50 \" type=\"submit\">
                                        connexion
                                    </button>

                                </div>

                                <p class=\"sign-up mt-2\">Vous n'avez pas de compte ?<a href=\"/inscription\"> S'inscrire</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>


    ";
        // line 95
        echo "


</form>

<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/settings.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/todolist.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/user-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 104,  180 => 103,  176 => 102,  172 => 101,  168 => 100,  161 => 95,  126 => 53,  113 => 43,  99 => 31,  90 => 27,  87 => 26,  85 => 25,  82 => 24,  76 => 22,  74 => 21,  62 => 12,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>

    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Connexion</title>
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

<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>

    {% endif %}


    <div class=\"container-scroller\">
        <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
            <div class=\"row w-100 d-flex align-items-center justify-content-center\" style=\"margin-top: 8%\">
                <div class=\"content-wrapper full-page-wrapper d-flex align-items-center\">
                    <div class=\"card col-lg-12 mx-auto\" style=\"background-color: rgba(255,255,255,0.75)\">
                        <div class=\"card-body px-5 py-5\">
                            <h3 class=\"card-title text-left mb-3\">Connexion</h3>
                            <form>
                                <div class=\"form-group\">
                                    <label for=\"inputEmail\">Email</label>
                                    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail p_input\" class=\"form-control\" autocomplete=\"email\" required autofocus>

                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputPassword\">Mot de passe</label>

                                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control p_input\" autocomplete=\"current-password\" required>

                                </div>
                                <input type=\"hidden\" name=\"_csrf_token\"
                                       value=\"{{ csrf_token('authenticate') }}\"
                                >
                                <div class=\"form-group d-flex align-items-center justify-content-between\">

                                    <a href=\"/mot-passe-oublié\" class=\"forgot-pass\">Mot de passe oublié?</a>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" name=\"_remember_me\"/>Remember me
                                    </label>
                                </div>
                                <div class=\"text-center d-flex justify-content-center\">

                                    <button class=\"btn btn-warning btn-block enter-btn text-white w-50 \" type=\"submit\">
                                        connexion
                                    </button>

                                </div>

                                <p class=\"sign-up mt-2\">Vous n'avez pas de compte ?<a href=\"/inscription\"> S'inscrire</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>


    {#
    Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
    See https://symfony.com/doc/current/security/remember_me.html

    <div class=\"checkbox mb-3\">
        <label>
            <input type=\"checkbox\" name=\"_remember_me\"> Remember me
        </label>
    </div>
    #}



</form>

<script src=\"{{ asset('assets/js/off-canvas.js') }}\"></script>
<script src=\"{{ asset('assets/js/hoverable-collapse.js') }}\"></script>
<script src=\"{{ asset('assets/js/misc.js') }}\"></script>
<script src=\"{{ asset('assets/js/settings.js') }}\"></script>
<script src=\"{{ asset('assets/js/todolist.js') }}\"></script>
</body>
</html>", "security/user-login.html.twig", "C:\\Users\\21695\\Documents\\I-Plus-Plus\\templates\\security\\user-login.html.twig");
    }
}
