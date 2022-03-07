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

/* act/index.html.twig */
class __TwigTemplate_90867c81dd925b7a570c5231bd7a9db8edfa922be4c6df1d896d5cb1c0e085e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'icon' => [$this, 'block_icon'],
            'googlefront' => [$this, 'block_googlefront'],
            'css' => [$this, 'block_css'],
            'js' => [$this, 'block_js'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'jss' => [$this, 'block_jss'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "act/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "act/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">
<head>
    <title>Game Warrior Template</title>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Game Warrior Template\">
    <meta name=\"keywords\" content=\"warrior, game, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Favicon -->
    <!-- Favicon -->
    ";
        // line 11
        $this->displayBlock('icon', $context, $blocks);
        // line 14
        echo "    <!-- Google Fonts -->
    ";
        // line 15
        $this->displayBlock('googlefront', $context, $blocks);
        // line 18
        echo "
    <!-- Stylesheets -->
    ";
        // line 20
        $this->displayBlock('css', $context, $blocks);
        // line 27
        echo "

    <!--[if lt IE 9]>
    ";
        // line 30
        $this->displayBlock('js', $context, $blocks);
        // line 34
        echo "    <![endif]-->

</head>

<body>
<!-- Page Preloder -->
<div id=\"preloder\">
    <div class=\"loader\"></div>
</div>

<!-- Header section -->
";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 74
        echo "<!-- Header section end -->


<!-- Latest news section -->


<!-- Latest news section end -->


<!-- Page info section -->
<section class=\"page-info-section set-bg\" data-setbg=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/page-top-bg/1.jpg "), "html", null, true);
        echo "\">
    <div class=\"pi-content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-5 col-lg-6 text-white\">
                    <h2>Gaming News</h2>
                    <h3>In this section you can find out the news of gaming world</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page info section -->

";
        // line 98
        $this->displayBlock('body', $context, $blocks);
        // line 241
        echo "



<!-- Page section end -->

";
        // line 247
        $this->displayBlock('footer', $context, $blocks);
        // line 352
        echo "<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
";
        // line 356
        $this->displayBlock('jss', $context, $blocks);
        // line 363
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon"));

        // line 12
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" rel=\"shortcut icon\"/>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_googlefront($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "googlefront"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "googlefront"));

        // line 16
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 21
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 31
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "    <header class=\"header-section\">
        <div class=\"container\">
            <!-- logo -->
            <a class=\"site-logo\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("new"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
            </a>
            <div class=\"user-panel\">
                <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Login</a>  /  <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Register</a>
            </div>
            <!-- responsive -->
            <div class=\"nav-switch\">
                <i class=\"fa fa-bars\"></i>
            </div>
            <!-- site menu -->
            <nav class=\"main-menu\">
                <ul>
                    <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("new"), "html", null, true);
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop"), "html", null, true);
        echo "\">Boutique</a></li>
                    <li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("act"), "html", null, true);
        echo "\">Actualite</a></li>
                    <li><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("forum"), "html", null, true);
        echo "\">Forums</a></li>
                    <li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("act"), "html", null, true);
        echo "\">Evenements</a></li>
                    <li><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact"), "html", null, true);
        echo "\">Reclamation</a></li>
                    <li><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact"), "html", null, true);
        echo "\">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 99
        echo "<!-- Page section -->
<section class=\"page-section recent-game-page spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"recent-game-item\">
                            <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/1.jpg\">
                                <div class=\"cata new\">racing</div>
                            </div>
                            <div class=\"rgi-content\">
                                <h5>Suspendisse ut justo tem por, rutrum</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                                <a href=\"#\" class=\"comment\">3 Comments</a>
                                <div class=\"rgi-extra\">
                                    <div class=\"rgi-star\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/star.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                    <div class=\"rgi-heart\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/heart.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"recent-game-item\">
                            <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/2.jpg\">
                                <div class=\"cata racing\">racing</div>
                            </div>
                            <div class=\"rgi-content\">
                                <h5>Susce pulvinar metus nulla, vel  facilisis sem </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                                <a href=\"#\" class=\"comment\">3 Comments</a>
                                <div class=\"rgi-extra\">
                                    <div class=\"rgi-star\"><img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/star.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                    <div class=\"rgi-heart\"><img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/heart.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"recent-game-item\">
                            <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/3.jpg\">
                                <div class=\"cata adventure\">Adventure</div>
                            </div>
                            <div class=\"rgi-content\">
                                <h5>Susce pulvinar metus nulla, vel  facilisis sem </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                                <a href=\"#\" class=\"comment\">3 Comments</a>
                                <div class=\"rgi-extra\">
                                    <div class=\"rgi-star\"><img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/star.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                    <div class=\"rgi-heart\"><img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/heart.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"recent-game-item\">
                            <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/4.jpg\">
                                <div class=\"cata new\">racing</div>
                            </div>
                            <div class=\"rgi-content\">
                                <h5>Suspendisse ut justo tem por, rutrum</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                                <a href=\"#\" class=\"comment\">3 Comments</a>
                                <div class=\"rgi-extra\">
                                    <div class=\"rgi-star\"><img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/star.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                    <div class=\"rgi-heart\"><img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/heart.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"recent-game-item\">
                            <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/5.jpg\">
                                <div class=\"cata racing\">racing</div>
                            </div>
                            <div class=\"rgi-content\">
                                <h5>Susce pulvinar metus nulla, vel  facilisis sem </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                                <a href=\"#\" class=\"comment\">3 Comments</a>
                                <div class=\"rgi-extra\">
                                    <div class=\"rgi-star\"><img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/star.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                    <div class=\"rgi-heart\"><img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/heart.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"recent-game-item\">
                            <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/6.jpg\">
                                <div class=\"cata adventure\">Adventure</div>
                            </div>
                            <div class=\"rgi-content\">
                                <h5>Susce pulvinar metus nulla, vel  facilisis sem </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                                <a href=\"#\" class=\"comment\">3 Comments</a>
                                <div class=\"rgi-extra\">
                                    <div class=\"rgi-star\"><img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/star.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                    <div class=\"rgi-heart\"><img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/heart.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"recent-game-item\">
                            <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/7.jpg\">
                                <div class=\"cata new\">racing</div>
                            </div>
                            <div class=\"rgi-content\">
                                <h5>Suspendisse ut justo tem por, rutrum</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                                <a href=\"#\" class=\"comment\">3 Comments</a>
                                <div class=\"rgi-extra\">
                                    <div class=\"rgi-star\"><img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/star.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                    <div class=\"rgi-heart\"><img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/heart.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"recent-game-item\">
                            <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/8.jpg\">
                                <div class=\"cata racing\">racing</div>
                            </div>
                            <div class=\"rgi-content\">
                                <h5>Susce pulvinar metus nulla, vel  facilisis sem </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                                <a href=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"comment\">3 Comments</a>
                                <div class=\"rgi-extra\">
                                    <div class=\"rgi-star\"><img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/star.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                    <div class=\"rgi-heart\"><img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/heart.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"site-pagination\">
                    <span class=\"active\">01.</span>
                    <a href=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">02.</a>
                    <a href=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">03.</a>
                </div>
            </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 247
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 248
        echo "<!-- Footer top section -->
<section class=\"footer-top-section\">
    <div class=\"container\">
        <div class=\"footer-top-bg\">
            <img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/footer-top-bg.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"footer-logo text-white\">
                    <img src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/footer-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"footer-widget mb-5 mb-md-0\">
                    <h4 class=\"fw-title\">Latest Posts</h4>
                    <div class=\"latest-blog\">
                        <div class=\"lb-item\">
                            <div class=\"lb-thumb set-bg\" data-setbg=\"img/latest-blog/1.jpg\"></div>
                            <div class=\"lb-content\">
                                <div class=\"lb-date\">June 21, 2018</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
                                <a href=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"lb-author\">By Admin</a>
                            </div>
                        </div>
                        <div class=\"lb-item\">
                            <div class=\"lb-thumb set-bg\" data-setbg=\"img/latest-blog/2.jpg\"></div>
                            <div class=\"lb-content\">
                                <div class=\"lb-date\">June 21, 2018</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
                                <a href=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"lb-author\">By Admin</a>
                            </div>
                        </div>
                        <div class=\"lb-item\">
                            <div class=\"lb-thumb set-bg\" data-setbg=\"img/latest-blog/3.jpg\"></div>
                            <div class=\"lb-content\">
                                <div class=\"lb-date\">June 21, 2018</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
                                <a href=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"lb-author\">By Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"footer-widget\">
                    <h4 class=\"fw-title\">Top Comments</h4>
                    <div class=\"top-comment\">
                        <div class=\"tc-item\">
                            <div class=\"tc-thumb set-bg\" data-setbg=\"img/authors/1.jpg\"></div>
                            <div class=\"tc-content\">
                                <p><a href=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class=\"tc-date\">June 21, 2018</div>
                            </div>
                        </div>
                        <div class=\"tc-item\">
                            <div class=\"tc-thumb set-bg\" data-setbg=\"img/authors/2.jpg\"></div>
                            <div class=\"tc-content\">
                                <p><a href=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class=\"tc-date\">June 21, 2018</div>
                            </div>
                        </div>
                        <div class=\"tc-item\">
                            <div class=\"tc-thumb set-bg\" data-setbg=\"img/authors/3.jpg\"></div>
                            <div class=\"tc-content\">
                                <p><a href=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class=\"tc-date\">June 21, 2018</div>
                            </div>
                        </div>
                        <div class=\"tc-item\">
                            <div class=\"tc-thumb set-bg\" data-setbg=\"img/authors/4.jpg\"></div>
                            <div class=\"tc-content\">
                                <p><a href=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class=\"tc-date\">June 21, 2018</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer top section end -->


<!-- Footer section -->

    <footer class=\"footer-section\">
        <div class=\"container\">
            <ul class=\"footer-menu\">
                <li><a href=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("new"), "html", null, true);
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop"), "html", null, true);
        echo "\">Games</a></li>
                <li><a href=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("act"), "html", null, true);
        echo "\">Blog</a></li>
                <li><a href=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("act"), "html", null, true);
        echo "\">Evenements</a></li>
                <li><a href=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("forum"), "html", null, true);
        echo "\">Forums</a></li>
                <li><a href=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact"), "html", null, true);
        echo "\">Contact</a></li>
            </ul>
            <p class=\"copyright\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://colorlib.com\" target=\"_blank"), "html", null, true);
        echo "\">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 356
    public function block_jss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jss"));

        // line 357
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.marquee.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "act/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  765 => 361,  761 => 360,  757 => 359,  753 => 358,  748 => 357,  738 => 356,  722 => 346,  716 => 343,  712 => 342,  708 => 341,  704 => 340,  700 => 339,  696 => 338,  675 => 320,  665 => 313,  655 => 306,  645 => 299,  629 => 286,  618 => 278,  607 => 270,  591 => 257,  583 => 252,  577 => 248,  567 => 247,  553 => 237,  549 => 236,  538 => 228,  534 => 227,  529 => 225,  513 => 212,  509 => 211,  491 => 196,  487 => 195,  469 => 180,  465 => 179,  447 => 164,  443 => 163,  425 => 148,  421 => 147,  403 => 132,  399 => 131,  381 => 116,  377 => 115,  359 => 99,  349 => 98,  333 => 68,  329 => 67,  325 => 66,  321 => 65,  317 => 64,  313 => 63,  309 => 62,  295 => 53,  289 => 50,  285 => 49,  280 => 46,  270 => 45,  258 => 32,  253 => 31,  243 => 30,  231 => 25,  227 => 24,  223 => 23,  219 => 22,  214 => 21,  204 => 20,  191 => 16,  181 => 15,  168 => 12,  158 => 11,  147 => 363,  145 => 356,  139 => 352,  137 => 247,  129 => 241,  127 => 98,  110 => 84,  98 => 74,  96 => 45,  83 => 34,  81 => 30,  76 => 27,  74 => 20,  70 => 18,  68 => 15,  65 => 14,  63 => 11,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">
<head>
    <title>Game Warrior Template</title>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Game Warrior Template\">
    <meta name=\"keywords\" content=\"warrior, game, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Favicon -->
    <!-- Favicon -->
    {% block icon %}
        <link href=\"{{ asset('img/favicon.ico')}}\" rel=\"shortcut icon\"/>
    {% endblock %}
    <!-- Google Fonts -->
    {% block googlefront %}
        <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i')}}\" rel=\"stylesheet\">
    {% endblock %}

    <!-- Stylesheets -->
    {% block css %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css')}}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css')}}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.css')}}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css')}}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css')}}\"/>
    {% endblock %}


    <!--[if lt IE 9]>
    {% block js %}
    <script src=\"{{ asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}\"></script>
    <script src=\"{{ asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}\"></script>
    {% endblock %}
    <![endif]-->

</head>

<body>
<!-- Page Preloder -->
<div id=\"preloder\">
    <div class=\"loader\"></div>
</div>

<!-- Header section -->
{% block header %}
    <header class=\"header-section\">
        <div class=\"container\">
            <!-- logo -->
            <a class=\"site-logo\" href=\"{{ asset('new')}}\">
                <img src=\"{{ asset('img/logo.png')}}\" alt=\"\">
            </a>
            <div class=\"user-panel\">
                <a href=\"{{ asset('#')}}\">Login</a>  /  <a href=\"{{ asset('#')}}\">Register</a>
            </div>
            <!-- responsive -->
            <div class=\"nav-switch\">
                <i class=\"fa fa-bars\"></i>
            </div>
            <!-- site menu -->
            <nav class=\"main-menu\">
                <ul>
                    <li><a href=\"{{ asset('new')}}\">Home</a></li>
                    <li><a href=\"{{ asset('shop')}}\">Boutique</a></li>
                    <li><a href=\"{{ asset('act')}}\">Actualite</a></li>
                    <li><a href=\"{{ asset('forum')}}\">Forums</a></li>
                    <li><a href=\"{{ asset('act')}}\">Evenements</a></li>
                    <li><a href=\"{{ asset('contact')}}\">Reclamation</a></li>
                    <li><a href=\"{{ asset('contact')}}\">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
{% endblock %}
<!-- Header section end -->


<!-- Latest news section -->


<!-- Latest news section end -->


<!-- Page info section -->
<section class=\"page-info-section set-bg\" data-setbg=\"{{asset( 'img/page-top-bg/1.jpg ')}}\">
    <div class=\"pi-content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-5 col-lg-6 text-white\">
                    <h2>Gaming News</h2>
                    <h3>In this section you can find out the news of gaming world</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page info section -->

{% block body %}
<!-- Page section -->
<section class=\"page-section recent-game-page spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"recent-game-item\">
                            <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/1.jpg\">
                                <div class=\"cata new\">racing</div>
                            </div>
                            <div class=\"rgi-content\">
                                <h5>Suspendisse ut justo tem por, rutrum</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                                <a href=\"#\" class=\"comment\">3 Comments</a>
                                <div class=\"rgi-extra\">
                                    <div class=\"rgi-star\"><img src=\"{{ asset('img/icons/star.png')}}\" alt=\"\"></div>
                                    <div class=\"rgi-heart\"><img src=\"{{ asset('img/icons/heart.png')}}\" alt=\"\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"recent-game-item\">
                            <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/2.jpg\">
                                <div class=\"cata racing\">racing</div>
                            </div>
                            <div class=\"rgi-content\">
                                <h5>Susce pulvinar metus nulla, vel  facilisis sem </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                                <a href=\"#\" class=\"comment\">3 Comments</a>
                                <div class=\"rgi-extra\">
                                    <div class=\"rgi-star\"><img src=\"{{ asset('img/icons/star.png')}}\" alt=\"\"></div>
                                    <div class=\"rgi-heart\"><img src=\"{{ asset('img/icons/heart.png')}}\" alt=\"\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"recent-game-item\">
                            <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/3.jpg\">
                                <div class=\"cata adventure\">Adventure</div>
                            </div>
                            <div class=\"rgi-content\">
                                <h5>Susce pulvinar metus nulla, vel  facilisis sem </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                                <a href=\"#\" class=\"comment\">3 Comments</a>
                                <div class=\"rgi-extra\">
                                    <div class=\"rgi-star\"><img src=\"{{ asset('img/icons/star.png')}}\" alt=\"\"></div>
                                    <div class=\"rgi-heart\"><img src=\"{{ asset('img/icons/heart.png')}}\" alt=\"\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"recent-game-item\">
                            <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/4.jpg\">
                                <div class=\"cata new\">racing</div>
                            </div>
                            <div class=\"rgi-content\">
                                <h5>Suspendisse ut justo tem por, rutrum</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                                <a href=\"#\" class=\"comment\">3 Comments</a>
                                <div class=\"rgi-extra\">
                                    <div class=\"rgi-star\"><img src=\"{{ asset('img/icons/star.png')}}\" alt=\"\"></div>
                                    <div class=\"rgi-heart\"><img src=\"{{ asset('img/icons/heart.png')}}\" alt=\"\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"recent-game-item\">
                            <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/5.jpg\">
                                <div class=\"cata racing\">racing</div>
                            </div>
                            <div class=\"rgi-content\">
                                <h5>Susce pulvinar metus nulla, vel  facilisis sem </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                                <a href=\"#\" class=\"comment\">3 Comments</a>
                                <div class=\"rgi-extra\">
                                    <div class=\"rgi-star\"><img src=\"{{ asset('img/icons/star.png')}}\" alt=\"\"></div>
                                    <div class=\"rgi-heart\"><img src=\"{{ asset('img/icons/heart.png')}}\" alt=\"\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"recent-game-item\">
                            <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/6.jpg\">
                                <div class=\"cata adventure\">Adventure</div>
                            </div>
                            <div class=\"rgi-content\">
                                <h5>Susce pulvinar metus nulla, vel  facilisis sem </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                                <a href=\"#\" class=\"comment\">3 Comments</a>
                                <div class=\"rgi-extra\">
                                    <div class=\"rgi-star\"><img src=\"{{ asset('img/icons/star.png')}}\" alt=\"\"></div>
                                    <div class=\"rgi-heart\"><img src=\"{{ asset('img/icons/heart.png')}}\" alt=\"\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"recent-game-item\">
                            <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/7.jpg\">
                                <div class=\"cata new\">racing</div>
                            </div>
                            <div class=\"rgi-content\">
                                <h5>Suspendisse ut justo tem por, rutrum</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                                <a href=\"#\" class=\"comment\">3 Comments</a>
                                <div class=\"rgi-extra\">
                                    <div class=\"rgi-star\"><img src=\"{{ asset('img/icons/star.png')}}\" alt=\"\"></div>
                                    <div class=\"rgi-heart\"><img src=\"{{ asset('img/icons/heart.png')}}\" alt=\"\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"recent-game-item\">
                            <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/8.jpg\">
                                <div class=\"cata racing\">racing</div>
                            </div>
                            <div class=\"rgi-content\">
                                <h5>Susce pulvinar metus nulla, vel  facilisis sem </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                                <a href=\"{{ asset('#')}}\" class=\"comment\">3 Comments</a>
                                <div class=\"rgi-extra\">
                                    <div class=\"rgi-star\"><img src=\"{{ asset('img/icons/star.png')}}\" alt=\"\"></div>
                                    <div class=\"rgi-heart\"><img src=\"{{ asset('img/icons/heart.png')}}\" alt=\"\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"site-pagination\">
                    <span class=\"active\">01.</span>
                    <a href=\"{{ asset('#')}}\">02.</a>
                    <a href=\"{{ asset('#')}}\">03.</a>
                </div>
            </div>
            {% endblock body%}




<!-- Page section end -->

{% block footer %}
<!-- Footer top section -->
<section class=\"footer-top-section\">
    <div class=\"container\">
        <div class=\"footer-top-bg\">
            <img src=\"{{ asset('img/footer-top-bg.png')}}\" alt=\"\">
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"footer-logo text-white\">
                    <img src=\"{{ asset('img/footer-logo.png')}}\" alt=\"\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"footer-widget mb-5 mb-md-0\">
                    <h4 class=\"fw-title\">Latest Posts</h4>
                    <div class=\"latest-blog\">
                        <div class=\"lb-item\">
                            <div class=\"lb-thumb set-bg\" data-setbg=\"img/latest-blog/1.jpg\"></div>
                            <div class=\"lb-content\">
                                <div class=\"lb-date\">June 21, 2018</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
                                <a href=\"{{ asset('#')}}\" class=\"lb-author\">By Admin</a>
                            </div>
                        </div>
                        <div class=\"lb-item\">
                            <div class=\"lb-thumb set-bg\" data-setbg=\"img/latest-blog/2.jpg\"></div>
                            <div class=\"lb-content\">
                                <div class=\"lb-date\">June 21, 2018</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
                                <a href=\"{{ asset('#')}}\" class=\"lb-author\">By Admin</a>
                            </div>
                        </div>
                        <div class=\"lb-item\">
                            <div class=\"lb-thumb set-bg\" data-setbg=\"img/latest-blog/3.jpg\"></div>
                            <div class=\"lb-content\">
                                <div class=\"lb-date\">June 21, 2018</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
                                <a href=\"{{ asset('#')}}\" class=\"lb-author\">By Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"footer-widget\">
                    <h4 class=\"fw-title\">Top Comments</h4>
                    <div class=\"top-comment\">
                        <div class=\"tc-item\">
                            <div class=\"tc-thumb set-bg\" data-setbg=\"img/authors/1.jpg\"></div>
                            <div class=\"tc-content\">
                                <p><a href=\"{{ asset('#')}}\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class=\"tc-date\">June 21, 2018</div>
                            </div>
                        </div>
                        <div class=\"tc-item\">
                            <div class=\"tc-thumb set-bg\" data-setbg=\"img/authors/2.jpg\"></div>
                            <div class=\"tc-content\">
                                <p><a href=\"{{ asset('#')}}\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class=\"tc-date\">June 21, 2018</div>
                            </div>
                        </div>
                        <div class=\"tc-item\">
                            <div class=\"tc-thumb set-bg\" data-setbg=\"img/authors/3.jpg\"></div>
                            <div class=\"tc-content\">
                                <p><a href=\"{{ asset('#')}}\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class=\"tc-date\">June 21, 2018</div>
                            </div>
                        </div>
                        <div class=\"tc-item\">
                            <div class=\"tc-thumb set-bg\" data-setbg=\"img/authors/4.jpg\"></div>
                            <div class=\"tc-content\">
                                <p><a href=\"{{ asset('#')}}\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class=\"tc-date\">June 21, 2018</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer top section end -->


<!-- Footer section -->

    <footer class=\"footer-section\">
        <div class=\"container\">
            <ul class=\"footer-menu\">
                <li><a href=\"{{ asset('new')}}\">Home</a></li>
                <li><a href=\"{{ asset('shop')}}\">Games</a></li>
                <li><a href=\"{{ asset('act')}}\">Blog</a></li>
                <li><a href=\"{{ asset('act')}}\">Evenements</a></li>
                <li><a href=\"{{ asset('forum')}}\">Forums</a></li>
                <li><a href=\"{{ asset('contact')}}\">Contact</a></li>
            </ul>
            <p class=\"copyright\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"{{ asset('https://colorlib.com\" target=\"_blank')}}\">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </footer>
{% endblock %}
<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
{% block jss %}
    <script src=\"{{ asset('js/jquery-3.2.1.min.js')}}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js')}}\"></script>
    <script src=\"{{ asset('js/owl.carousel.min.js')}}\"></script>
    <script src=\"{{ asset('js/jquery.marquee.min.js')}}\"></script>
    <script src=\"{{ asset('js/main.js')}}\"></script>
{% endblock %}
</body>
</html>", "act/index.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\act\\index.html.twig");
    }
}
