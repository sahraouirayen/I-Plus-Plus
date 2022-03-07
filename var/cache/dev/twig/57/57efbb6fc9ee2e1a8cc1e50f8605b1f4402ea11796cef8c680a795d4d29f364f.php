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

/* base.html.twig */
class __TwigTemplate_13cb11444322c3f95c671e83b287e6f7fc20f9f0fcb8be2846582fb571be1fc6 extends Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<base>
<html lang=\"zxx\">
<head>
    <title>Game Warrior Template</title>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Game Warrior Template\">
    <meta name=\"keywords\" content=\"warrior, game, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
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



</head>
<body>
";
        // line 37
        echo "
<!-- Header section -->
";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 75
        echo "<!-- Header section end -->


";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 335
        echo "<!-- Footer top section -->
<section class=\"footer-top-section\">
    <div class=\"container\">
        <div class=\"footer-top-bg\">
            <img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/footer-top-bg.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"footer-logo text-white\">
                    <img src=\"";
        // line 344
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
        // line 357
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
        // line 365
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
        // line 373
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
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class=\"tc-date\">June 21, 2018</div>
                            </div>
                        </div>
                        <div class=\"tc-item\">
                            <div class=\"tc-thumb set-bg\" data-setbg=\"img/authors/2.jpg\"></div>
                            <div class=\"tc-content\">
                                <p><a href=\"#\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class=\"tc-date\">June 21, 2018</div>
                            </div>
                        </div>
                        <div class=\"tc-item\">
                            <div class=\"tc-thumb set-bg\" data-setbg=\"img/authors/3.jpg\"></div>
                            <div class=\"tc-content\">
                                <p><a href=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class=\"tc-date\">June 21, 2018</div>
                            </div>
                        </div>
                        <div class=\"tc-item\">
                            <div class=\"tc-thumb set-bg\" data-setbg=\"img/authors/4.jpg\"></div>
                            <div class=\"tc-content\">
                                <p><a href=\"";
        // line 407
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
";
        // line 421
        $this->displayBlock('footer', $context, $blocks);
        // line 440
        echo "<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
";
        // line 444
        $this->displayBlock('js', $context, $blocks);
        // line 451
        echo "
</body>
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

    // line 39
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 40
        echo "    <header class=\"header-section\">
        <div class=\"container\">
            <!-- logo -->
            <a class=\"site-logo\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("new"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
            </a>
            <div class=\"user-panel\">
                ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)) {
            // line 48
            echo "
                    <a href=\"/user/compte\">
                        ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "username", [], "any", false, false, false, 50), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 53
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/login"), "html", null, true);
            echo "\">Login</a>  /  <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/inscription"), "html", null, true);
            echo "\">Register</a>
                ";
        }
        // line 55
        echo "            </div>
            <!-- responsive -->
            <div class=\"nav-switch\">
                <i class=\"fa fa-bars\"></i>
            </div>
            <!-- site menu -->
            <nav class=\"main-menu\">
                <ul>
                    <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("new"), "html", null, true);
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop"), "html", null, true);
        echo "\">Boutique</a></li>
                    <li><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualite"), "html", null, true);
        echo "\">Actualite</a></li>
                    <li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("forum"), "html", null, true);
        echo "\">Forums</a></li>
                    <li><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualite"), "html", null, true);
        echo "\">Evenements</a></li>
                    <li><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact"), "html", null, true);
        echo "\">Reclamation</a></li>
                    <li><a href=\"";
        // line 69
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

    // line 78
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 79
        echo "    <!-- Hero section -->
    <section class=\"hero-section\">
        <div class=\"hero-slider owl-carousel\">
            <div class=\"hs-item set-bg\" data-setbg=\"img/slider-1.jpg\">
                <div class=\"hs-text\">
                    <div class=\"container\">
                        <h2>The Best <span>Games</span> Out There</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada <br> lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. <br>Suspendisse cursus faucibus finibus.</p>
                        <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"site-btn\">Read More</a>
                    </div>
                </div>
            </div>
            <div class=\"hs-item set-bg\" data-setbg=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slider-2.jpg"), "html", null, true);
        echo "\">
                <div class=\"hs-text\">
                    <div class=\"container\">
                        <h2>The Best <span>Games</span> Out There</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada <br> lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. <br>Suspendisse cursus faucibus finibus.</p>
                        <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"site-btn\">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->


    <!-- Latest news section -->
    <div class=\"latest-news-section\">
        <div class=\"ln-title\">Latest News</div>
        <div class=\"news-ticker\">
            <div class=\"news-ticker-contant\">
                <div class=\"nt-item\"><span class=\"new\">new</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
                <div class=\"nt-item\"><span class=\"strategy\">strategy</span>Isum dolor sit amet, consectetur adipiscing elit. </div>
                <div class=\"nt-item\"><span class=\"racing\">racing</span>Isum dolor sit amet, consectetur adipiscing elit. </div>
            </div>
        </div>
    </div>
    <!-- Latest news section end -->


    <!-- Feature section -->
    <section class=\"feature-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 p-0\">
                    <div class=\"feature-item set-bg\" data-setbg=\"img/features/1.jpg\">
                        <span class=\"cata new\">new</span>
                        <div class=\"fi-content text-white\">
                            <h5><a href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Suspendisse ut justo tem por, rutrum</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <a href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"fi-comment\">3 Comments</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 p-0\">
                    <div class=\"feature-item set-bg\" data-setbg=\"img/features/2.jpg\">
                        <span class=\"cata strategy\">strategy</span>
                        <div class=\"fi-content text-white\">
                            <h5><a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Justo tempor, rutrum erat id, molestie</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <a href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"fi-comment\">3 Comments</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 p-0\">
                    <div class=\"feature-item set-bg\" data-setbg=\"img/features/3.jpg\">
                        <span class=\"cata new\">new</span>
                        <div class=\"fi-content text-white\">
                            <h5><a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Nullam lacinia ex eleifend orci porttitor</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <a href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"fi-comment\">3 Comments</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 p-0\">
                    <div class=\"feature-item set-bg\" data-setbg=\"img/features/4.jpg\">
                        <span class=\"cata racing\">racing</span>
                        <div class=\"fi-content text-white\">
                            <h5><a href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Lacinia ex eleifend orci suscipit</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <a href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"fi-comment\">3 Comments</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature section end -->


    <!-- Recent game section  -->
    <section class=\"recent-game-section spad set-bg\" data-setbg=\"img/recent-game-bg.png\">
        <div class=\"container\">
            <div class=\"section-title\">
                <div class=\"cata new\">new</div>
                <h2>Recent Games</h2>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"recent-game-item\">
                        <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/1.jpg\">
                            <div class=\"cata new\">new</div>
                        </div>
                        <div class=\"rgi-content\">
                            <h5>Suspendisse ut justo tem por, rutrum</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                            <a href=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"comment\">3 Comments</a>
                            <div class=\"rgi-extra\">
                                <div class=\"rgi-star\"><img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/star.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div class=\"rgi-heart\"><img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/heart.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"recent-game-item\">
                        <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/2.jpg\">
                            <div class=\"cata racing\">racing</div>
                        </div>
                        <div class=\"rgi-content\">
                            <h5>Susce pulvinar metus nulla, vel  facilisis sem </h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                            <a href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"comment\">3 Comments</a>
                            <div class=\"rgi-extra\">
                                <div class=\"rgi-star\"><img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/star.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div class=\"rgi-heart\"><img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/heart.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"recent-game-item\">
                        <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/3.jpg\">
                            <div class=\"cata adventure\">Adventure</div>
                        </div>
                        <div class=\"rgi-content\">
                            <h5>Suspendisse ut justo tem por, rutrum</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                            <a href=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"comment\">3 Comments</a>
                            <div class=\"rgi-extra\">
                                <div class=\"rgi-star\"><img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/star.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div class=\"rgi-heart\"><img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/heart.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Recent game section end -->


    <!-- Tournaments section -->
    <section class=\"tournaments-section spad\">
        <div class=\"container\">
            <div class=\"tournament-title\">Tournaments</div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"tournament-item mb-4 mb-lg-0\">
                        <div class=\"ti-notic\">Premium Tournament</div>
                        <div class=\"ti-content\">
                            <div class=\"ti-thumb set-bg\" data-setbg=\"img/tournament/1.jpg\"></div>
                            <div class=\"ti-text\">
                                <h4>World Of WarCraft</h4>
                                <ul>
                                    <li><span>Tournament Beggins:</span> June 20, 2018</li>
                                    <li><span>Tounament Ends:</span> July 01, 2018</li>
                                    <li><span>Participants:</span> 10 teams</li>
                                    <li><span>Tournament Author:</span> Admin</li>
                                </ul>
                                <p><span>Prizes:</span> 1st place \$2000, 2nd place: \$1000, 3rd place: \$500</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"tournament-item\">
                        <div class=\"ti-notic\">Premium Tournament</div>
                        <div class=\"ti-content\">
                            <div class=\"ti-thumb set-bg\" data-setbg=\"img/tournament/2.jpg\"></div>
                            <div class=\"ti-text\">
                                <h4>DOOM</h4>
                                <ul>
                                    <li><span>Tournament Beggins:</span> June 20, 2018</li>
                                    <li><span>Tounament Ends:</span> July 01, 2018</li>
                                    <li><span>Participants:</span> 10 teams</li>
                                    <li><span>Tournament Author:</span> Admin</li>
                                </ul>
                                <p><span>Prizes:</span> 1st place \$2000, 2nd place: \$1000, 3rd place: \$500</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tournaments section bg -->


    <!-- Review section -->
    <section class=\"review-section spad set-bg\" data-setbg=\"img/review-bg.png\">
        <div class=\"container\">
            <div class=\"section-title\">
                <div class=\"cata new\">new</div>
                <h2>Recent Reviews</h2>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"review-item\">
                        <div class=\"review-cover set-bg\" data-setbg=\"img/review/1.jpg\">
                            <div class=\"score yellow\">9.3</div>
                        </div>
                        <div class=\"review-text\">
                            <h5>Assasin’’s Creed</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"review-item\">
                        <div class=\"review-cover set-bg\" data-setbg=\"img/review/2.jpg\">
                            <div class=\"score purple\">9.5</div>
                        </div>
                        <div class=\"review-text\">
                            <h5>Doom</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"review-item\">
                        <div class=\"review-cover set-bg\" data-setbg=\"img/review/3.jpg\">
                            <div class=\"score green\">9.1</div>
                        </div>
                        <div class=\"review-text\">
                            <h5>Overwatch</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"review-item\">
                        <div class=\"review-cover set-bg\" data-setbg=\"img/review/4.jpg\">
                            <div class=\"score pink\">9.7</div>
                        </div>
                        <div class=\"review-text\">
                            <h5>GTA</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Review section end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 421
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 422
        echo "    <footer class=\"footer-section\">
        <div class=\"container\">
            <ul class=\"footer-menu\">
                <li><a href=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("new"), "html", null, true);
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop"), "html", null, true);
        echo "\">Games</a></li>
                <li><a href=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualite"), "html", null, true);
        echo "\">Blog</a></li>
                <li><a href=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualite"), "html", null, true);
        echo "\">Evenements</a></li>
                <li><a href=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("forum"), "html", null, true);
        echo "\">Forums</a></li>
                <li><a href=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact"), "html", null, true);
        echo "\">Contact</a></li>

            </ul>
            <p class=\"copyright\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 444
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 445
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.marquee.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  827 => 449,  823 => 448,  819 => 447,  815 => 446,  810 => 445,  800 => 444,  780 => 430,  776 => 429,  772 => 428,  768 => 427,  764 => 426,  760 => 425,  755 => 422,  745 => 421,  620 => 220,  616 => 219,  611 => 217,  595 => 204,  591 => 203,  586 => 201,  570 => 188,  566 => 187,  561 => 185,  532 => 159,  527 => 157,  516 => 149,  511 => 147,  500 => 139,  495 => 137,  484 => 129,  479 => 127,  445 => 96,  437 => 91,  430 => 87,  420 => 79,  410 => 78,  394 => 69,  390 => 68,  386 => 67,  382 => 66,  378 => 65,  374 => 64,  370 => 63,  360 => 55,  352 => 53,  346 => 50,  342 => 48,  340 => 47,  334 => 44,  330 => 43,  325 => 40,  315 => 39,  303 => 25,  299 => 24,  295 => 23,  291 => 22,  286 => 21,  276 => 20,  263 => 16,  253 => 15,  240 => 12,  230 => 11,  218 => 451,  216 => 444,  210 => 440,  208 => 421,  191 => 407,  181 => 400,  164 => 386,  148 => 373,  137 => 365,  126 => 357,  110 => 344,  102 => 339,  96 => 335,  94 => 78,  89 => 75,  87 => 39,  83 => 37,  75 => 27,  73 => 20,  69 => 18,  67 => 15,  64 => 14,  62 => 11,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<base>
<html lang=\"zxx\">
<head>
    <title>Game Warrior Template</title>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Game Warrior Template\">
    <meta name=\"keywords\" content=\"warrior, game, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
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




</head>
<body>
{#<!-- Page Preloder -->#}
{#<div id=\"preloder\">#}
{#    <div class=\"loader\"></div>#}
{#</div>#}

<!-- Header section -->
{% block header %}
    <header class=\"header-section\">
        <div class=\"container\">
            <!-- logo -->
            <a class=\"site-logo\" href=\"{{ asset('new')}}\">
                <img src=\"{{ asset('img/logo.png')}}\" alt=\"\">
            </a>
            <div class=\"user-panel\">
                {% if app.user %}

                    <a href=\"/user/compte\">
                        {{ app.user.username }}
                    </a>
                {% else %}
                    <a href=\"{{ asset('/login')}}\">Login</a>  /  <a href=\"{{ asset('/inscription')}}\">Register</a>
                {% endif %}
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
                    <li><a href=\"{{ asset('actualite')}}\">Actualite</a></li>
                    <li><a href=\"{{ asset('forum')}}\">Forums</a></li>
                    <li><a href=\"{{ asset('actualite')}}\">Evenements</a></li>
                    <li><a href=\"{{ asset('contact')}}\">Reclamation</a></li>
                    <li><a href=\"{{ asset('contact')}}\">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
{% endblock %}
<!-- Header section end -->


{% block body %}
    <!-- Hero section -->
    <section class=\"hero-section\">
        <div class=\"hero-slider owl-carousel\">
            <div class=\"hs-item set-bg\" data-setbg=\"img/slider-1.jpg\">
                <div class=\"hs-text\">
                    <div class=\"container\">
                        <h2>The Best <span>Games</span> Out There</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada <br> lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. <br>Suspendisse cursus faucibus finibus.</p>
                        <a href=\"{{ asset('#')}}\" class=\"site-btn\">Read More</a>
                    </div>
                </div>
            </div>
            <div class=\"hs-item set-bg\" data-setbg=\"{{ asset('img/slider-2.jpg')}}\">
                <div class=\"hs-text\">
                    <div class=\"container\">
                        <h2>The Best <span>Games</span> Out There</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada <br> lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. <br>Suspendisse cursus faucibus finibus.</p>
                        <a href=\"{{ asset('#')}}\" class=\"site-btn\">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->


    <!-- Latest news section -->
    <div class=\"latest-news-section\">
        <div class=\"ln-title\">Latest News</div>
        <div class=\"news-ticker\">
            <div class=\"news-ticker-contant\">
                <div class=\"nt-item\"><span class=\"new\">new</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
                <div class=\"nt-item\"><span class=\"strategy\">strategy</span>Isum dolor sit amet, consectetur adipiscing elit. </div>
                <div class=\"nt-item\"><span class=\"racing\">racing</span>Isum dolor sit amet, consectetur adipiscing elit. </div>
            </div>
        </div>
    </div>
    <!-- Latest news section end -->


    <!-- Feature section -->
    <section class=\"feature-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 p-0\">
                    <div class=\"feature-item set-bg\" data-setbg=\"img/features/1.jpg\">
                        <span class=\"cata new\">new</span>
                        <div class=\"fi-content text-white\">
                            <h5><a href=\"{{ asset('#')}}\">Suspendisse ut justo tem por, rutrum</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <a href=\"{{ asset('#')}}\" class=\"fi-comment\">3 Comments</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 p-0\">
                    <div class=\"feature-item set-bg\" data-setbg=\"img/features/2.jpg\">
                        <span class=\"cata strategy\">strategy</span>
                        <div class=\"fi-content text-white\">
                            <h5><a href=\"{{ asset('#')}}\">Justo tempor, rutrum erat id, molestie</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <a href=\"{{ asset('#')}}\" class=\"fi-comment\">3 Comments</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 p-0\">
                    <div class=\"feature-item set-bg\" data-setbg=\"img/features/3.jpg\">
                        <span class=\"cata new\">new</span>
                        <div class=\"fi-content text-white\">
                            <h5><a href=\"{{ asset('#')}}\">Nullam lacinia ex eleifend orci porttitor</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <a href=\"{{ asset('#')}}\" class=\"fi-comment\">3 Comments</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 p-0\">
                    <div class=\"feature-item set-bg\" data-setbg=\"img/features/4.jpg\">
                        <span class=\"cata racing\">racing</span>
                        <div class=\"fi-content text-white\">
                            <h5><a href=\"{{ asset('#')}}\">Lacinia ex eleifend orci suscipit</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <a href=\"{{ asset('#')}}\" class=\"fi-comment\">3 Comments</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature section end -->


    <!-- Recent game section  -->
    <section class=\"recent-game-section spad set-bg\" data-setbg=\"img/recent-game-bg.png\">
        <div class=\"container\">
            <div class=\"section-title\">
                <div class=\"cata new\">new</div>
                <h2>Recent Games</h2>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"recent-game-item\">
                        <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/1.jpg\">
                            <div class=\"cata new\">new</div>
                        </div>
                        <div class=\"rgi-content\">
                            <h5>Suspendisse ut justo tem por, rutrum</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
                            <a href=\"{{ asset('#')}}\" class=\"comment\">3 Comments</a>
                            <div class=\"rgi-extra\">
                                <div class=\"rgi-star\"><img src=\"{{ asset('img/icons/star.png')}}\" alt=\"\"></div>
                                <div class=\"rgi-heart\"><img src=\"{{ asset('img/icons/heart.png')}}\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"recent-game-item\">
                        <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/2.jpg\">
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
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"recent-game-item\">
                        <div class=\"rgi-thumb set-bg\" data-setbg=\"img/recent-game/3.jpg\">
                            <div class=\"cata adventure\">Adventure</div>
                        </div>
                        <div class=\"rgi-content\">
                            <h5>Suspendisse ut justo tem por, rutrum</h5>
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
        </div>
    </section>
    <!-- Recent game section end -->


    <!-- Tournaments section -->
    <section class=\"tournaments-section spad\">
        <div class=\"container\">
            <div class=\"tournament-title\">Tournaments</div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"tournament-item mb-4 mb-lg-0\">
                        <div class=\"ti-notic\">Premium Tournament</div>
                        <div class=\"ti-content\">
                            <div class=\"ti-thumb set-bg\" data-setbg=\"img/tournament/1.jpg\"></div>
                            <div class=\"ti-text\">
                                <h4>World Of WarCraft</h4>
                                <ul>
                                    <li><span>Tournament Beggins:</span> June 20, 2018</li>
                                    <li><span>Tounament Ends:</span> July 01, 2018</li>
                                    <li><span>Participants:</span> 10 teams</li>
                                    <li><span>Tournament Author:</span> Admin</li>
                                </ul>
                                <p><span>Prizes:</span> 1st place \$2000, 2nd place: \$1000, 3rd place: \$500</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"tournament-item\">
                        <div class=\"ti-notic\">Premium Tournament</div>
                        <div class=\"ti-content\">
                            <div class=\"ti-thumb set-bg\" data-setbg=\"img/tournament/2.jpg\"></div>
                            <div class=\"ti-text\">
                                <h4>DOOM</h4>
                                <ul>
                                    <li><span>Tournament Beggins:</span> June 20, 2018</li>
                                    <li><span>Tounament Ends:</span> July 01, 2018</li>
                                    <li><span>Participants:</span> 10 teams</li>
                                    <li><span>Tournament Author:</span> Admin</li>
                                </ul>
                                <p><span>Prizes:</span> 1st place \$2000, 2nd place: \$1000, 3rd place: \$500</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tournaments section bg -->


    <!-- Review section -->
    <section class=\"review-section spad set-bg\" data-setbg=\"img/review-bg.png\">
        <div class=\"container\">
            <div class=\"section-title\">
                <div class=\"cata new\">new</div>
                <h2>Recent Reviews</h2>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"review-item\">
                        <div class=\"review-cover set-bg\" data-setbg=\"img/review/1.jpg\">
                            <div class=\"score yellow\">9.3</div>
                        </div>
                        <div class=\"review-text\">
                            <h5>Assasin’’s Creed</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"review-item\">
                        <div class=\"review-cover set-bg\" data-setbg=\"img/review/2.jpg\">
                            <div class=\"score purple\">9.5</div>
                        </div>
                        <div class=\"review-text\">
                            <h5>Doom</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"review-item\">
                        <div class=\"review-cover set-bg\" data-setbg=\"img/review/3.jpg\">
                            <div class=\"score green\">9.1</div>
                        </div>
                        <div class=\"review-text\">
                            <h5>Overwatch</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"review-item\">
                        <div class=\"review-cover set-bg\" data-setbg=\"img/review/4.jpg\">
                            <div class=\"score pink\">9.7</div>
                        </div>
                        <div class=\"review-text\">
                            <h5>GTA</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Review section end -->
{% endblock %}
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
                                <a href=\"{{asset('#')}}\" class=\"lb-author\">By Admin</a>
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
                                <p><a href=\"#\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
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
{% block footer %}
    <footer class=\"footer-section\">
        <div class=\"container\">
            <ul class=\"footer-menu\">
                <li><a href=\"{{ asset('new')}}\">Home</a></li>
                <li><a href=\"{{ asset('shop')}}\">Games</a></li>
                <li><a href=\"{{ asset('actualite')}}\">Blog</a></li>
                <li><a href=\"{{ asset('actualite')}}\">Evenements</a></li>
                <li><a href=\"{{ asset('forum')}}\">Forums</a></li>
                <li><a href=\"{{ asset('contact')}}\">Contact</a></li>

            </ul>
            <p class=\"copyright\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </footer>
{% endblock %}
<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
{% block js %}
    <script src=\"{{ asset('js/jquery-3.2.1.min.js')}}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js')}}\"></script>
    <script src=\"{{ asset('js/owl.carousel.min.js')}}\"></script>
    <script src=\"{{ asset('js/jquery.marquee.min.js')}}\"></script>
    <script src=\"{{ asset('js/main.js')}}\"></script>
{% endblock %}

</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\base.html.twig");
    }
}
