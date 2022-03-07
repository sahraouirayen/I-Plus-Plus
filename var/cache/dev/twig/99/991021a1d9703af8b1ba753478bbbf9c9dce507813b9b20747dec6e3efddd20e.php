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

/* shop/index.html.twig */
class __TwigTemplate_a5f4378893464f53d9984f9c47eeea2cc4c2eee9893e099ccab8d41a0a6df6e7 extends Template
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
            'footer' => [$this, 'block_footer'],
            'jss' => [$this, 'block_jss'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/index.html.twig"));

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
    ";
        // line 10
        $this->displayBlock('icon', $context, $blocks);
        // line 13
        echo "    <!-- Google Fonts -->
    ";
        // line 14
        $this->displayBlock('googlefront', $context, $blocks);
        // line 17
        echo "
    <!-- Stylesheets -->
    ";
        // line 19
        $this->displayBlock('css', $context, $blocks);
        // line 26
        echo "

    <!--[if lt IE 9]>
    ";
        // line 29
        $this->displayBlock('js', $context, $blocks);
        // line 33
        echo "    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id=\"preloder\">
    <div class=\"loader\"></div>
</div>

<!-- Header section -->
";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 72
        echo "<!-- Header section end -->


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


<!-- Page info section -->
<section class=\"page-info-section set-bg\" data-setbg=\"img/page-top-bg/3.jpg\">
    <div class=\"pi-content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-5 col-lg-6 text-white\">
                    <h2>Game reviews</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page info section -->


<!-- Page section -->
<section class=\"page-section review-page spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"review-item\">
                    <div class=\"review-cover set-bg\" data-setbg=\"img/review/5.jpg\">
                        <div class=\"score yellow\">9.3</div>
                    </div>
                    <div class=\"review-text\">
                        <h4>Overwatch Halloween</h4>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star is-fade\"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"review-item\">
                    <div class=\"review-cover set-bg\" data-setbg=\"img/review/6.jpg\">
                        <div class=\"score yellow\">9.3</div>
                    </div>
                    <div class=\"review-text\">
                        <h4>Grand Theft Auto</h4>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star is-fade\"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"review-item\">
                    <div class=\"review-cover set-bg\" data-setbg=\"img/review/7.jpg\">
                        <div class=\"score yellow\">9.3</div>
                    </div>
                    <div class=\"review-text\">
                        <h4>Avatar</h4>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star is-fade\"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"review-item\">
                    <div class=\"review-cover set-bg\" data-setbg=\"img/review/8.jpg\">
                        <div class=\"score yellow\">9.3</div>
                    </div>
                    <div class=\"review-text\">
                        <h4>Anthem</h4>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star is-fade\"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"review-item\">
                    <div class=\"review-cover set-bg\" data-setbg=\"img/review/9.jpg\">
                        <div class=\"score yellow\">9.3</div>
                    </div>
                    <div class=\"review-text\">
                        <h4>Cyberpunk 2077</h4>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star is-fade\"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"review-item\">
                    <div class=\"review-cover set-bg\" data-setbg=\"img/review/10.jpg\">
                        <div class=\"score yellow\">9.3</div>
                    </div>
                    <div class=\"review-text\">
                        <h4>Spiderman</h4>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star is-fade\"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"text-center pt-4\">
            <button class=\"site-btn btn-sm\">Load More</button>
        </div>
    </div>
</section>
<!-- Page section end -->


<!-- Review section -->
<section class=\"review-section review-dark spad set-bg\" data-setbg=\"img/review-bg-2.jpg\">
    <div class=\"container\">
        <div class=\"section-title text-white\">
            <div class=\"cata new\">new</div>
            <h2>Recent Reviews</h2>
        </div>
        <div class=\"row text-white\">
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


<!-- Footer top section -->
<section class=\"footer-top-section\">
    <div class=\"container\">
        <div class=\"footer-top-bg\">
            <img src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/footer-top-bg.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"footer-logo text-white\">
                    <img src=\"";
        // line 293
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
        // line 306
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
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"lb-author\">By Admin</a>
                            </div>
                        </div>
                        <div class=\"lb-item\">
                            <div class=\"lb-thumb set-bg\" data-setbg=\"img/latest-blog/3.jpg\"></div>
                            <div class=\"lb-content\">
                                <div class=\"lb-date\">June 21, 2018</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
                                <a href=\"\"";
        // line 322
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
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class=\"tc-date\">June 21, 2018</div>
                            </div>
                        </div>
                        <div class=\"tc-item\">
                            <div class=\"tc-thumb set-bg\" data-setbg=\"img/authors/2.jpg\"></div>
                            <div class=\"tc-content\">
                                <p><a href=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class=\"tc-date\">June 21, 2018</div>
                            </div>
                        </div>
                        <div class=\"tc-item\">
                            <div class=\"tc-thumb set-bg\" data-setbg=\"img/authors/3.jpg\"></div>
                            <div class=\"tc-content\">
                                <p><a href=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class=\"tc-date\">June 21, 2018</div>
                            </div>
                        </div>
                        <div class=\"tc-item\">
                            <div class=\"tc-thumb set-bg\" data-setbg=\"img/authors/4.jpg\"></div>
                            <div class=\"tc-content\">
                                <p><a href=\"";
        // line 356
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
        // line 370
        $this->displayBlock('footer', $context, $blocks);
        // line 388
        echo "<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
";
        // line 392
        $this->displayBlock('jss', $context, $blocks);
        // line 399
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon"));

        // line 11
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" rel=\"shortcut icon\"/>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_googlefront($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "googlefront"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "googlefront"));

        // line 15
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 20
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 30
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "    <header class=\"header-section\">
        <div class=\"container\">
            <!-- logo -->
            <a class=\"site-logo\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("new"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
            </a>
            <div class=\"user-panel\">
                <a href=\"";
        // line 51
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
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("new"), "html", null, true);
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop"), "html", null, true);
        echo "\">Boutique</a></li>
                    <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("act"), "html", null, true);
        echo "\">Actualite</a></li>
                    <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("forum"), "html", null, true);
        echo "\">Forums</a></li>
                    <li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("act"), "html", null, true);
        echo "\">Evenements</a></li>
                    <li><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact"), "html", null, true);
        echo "\">Reclamation</a></li>
                    <li><a href=\"";
        // line 66
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

    // line 370
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 371
        echo "    <footer class=\"footer-section\">
        <div class=\"container\">
            <ul class=\"footer-menu\">
                <li><a href=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("new"), "html", null, true);
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop"), "html", null, true);
        echo "\">Games</a></li>
                <li><a href=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("act"), "html", null, true);
        echo "\">Blog</a></li>
                <li><a href=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("act"), "html", null, true);
        echo "\">Evenements</a></li>
                <li><a href=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("forum"), "html", null, true);
        echo "\">Forums</a></li>
                <li><a href=\"";
        // line 379
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

    // line 392
    public function block_jss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jss"));

        // line 393
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.marquee.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "shop/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  715 => 397,  711 => 396,  707 => 395,  703 => 394,  698 => 393,  688 => 392,  669 => 379,  665 => 378,  661 => 377,  657 => 376,  653 => 375,  649 => 374,  644 => 371,  634 => 370,  618 => 66,  614 => 65,  610 => 64,  606 => 63,  602 => 62,  598 => 61,  594 => 60,  580 => 51,  574 => 48,  570 => 47,  565 => 44,  555 => 43,  543 => 31,  538 => 30,  528 => 29,  516 => 24,  512 => 23,  508 => 22,  504 => 21,  499 => 20,  489 => 19,  476 => 15,  466 => 14,  453 => 11,  443 => 10,  432 => 399,  430 => 392,  424 => 388,  422 => 370,  405 => 356,  395 => 349,  385 => 342,  375 => 335,  359 => 322,  348 => 314,  337 => 306,  321 => 293,  313 => 288,  95 => 72,  93 => 43,  81 => 33,  79 => 29,  74 => 26,  72 => 19,  68 => 17,  66 => 14,  63 => 13,  61 => 10,  50 => 1,);
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


<!-- Page info section -->
<section class=\"page-info-section set-bg\" data-setbg=\"img/page-top-bg/3.jpg\">
    <div class=\"pi-content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-5 col-lg-6 text-white\">
                    <h2>Game reviews</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page info section -->


<!-- Page section -->
<section class=\"page-section review-page spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"review-item\">
                    <div class=\"review-cover set-bg\" data-setbg=\"img/review/5.jpg\">
                        <div class=\"score yellow\">9.3</div>
                    </div>
                    <div class=\"review-text\">
                        <h4>Overwatch Halloween</h4>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star is-fade\"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"review-item\">
                    <div class=\"review-cover set-bg\" data-setbg=\"img/review/6.jpg\">
                        <div class=\"score yellow\">9.3</div>
                    </div>
                    <div class=\"review-text\">
                        <h4>Grand Theft Auto</h4>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star is-fade\"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"review-item\">
                    <div class=\"review-cover set-bg\" data-setbg=\"img/review/7.jpg\">
                        <div class=\"score yellow\">9.3</div>
                    </div>
                    <div class=\"review-text\">
                        <h4>Avatar</h4>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star is-fade\"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"review-item\">
                    <div class=\"review-cover set-bg\" data-setbg=\"img/review/8.jpg\">
                        <div class=\"score yellow\">9.3</div>
                    </div>
                    <div class=\"review-text\">
                        <h4>Anthem</h4>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star is-fade\"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"review-item\">
                    <div class=\"review-cover set-bg\" data-setbg=\"img/review/9.jpg\">
                        <div class=\"score yellow\">9.3</div>
                    </div>
                    <div class=\"review-text\">
                        <h4>Cyberpunk 2077</h4>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star is-fade\"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"review-item\">
                    <div class=\"review-cover set-bg\" data-setbg=\"img/review/10.jpg\">
                        <div class=\"score yellow\">9.3</div>
                    </div>
                    <div class=\"review-text\">
                        <h4>Spiderman</h4>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star is-fade\"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"text-center pt-4\">
            <button class=\"site-btn btn-sm\">Load More</button>
        </div>
    </div>
</section>
<!-- Page section end -->


<!-- Review section -->
<section class=\"review-section review-dark spad set-bg\" data-setbg=\"img/review-bg-2.jpg\">
    <div class=\"container\">
        <div class=\"section-title text-white\">
            <div class=\"cata new\">new</div>
            <h2>Recent Reviews</h2>
        </div>
        <div class=\"row text-white\">
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
                                <a href=\"\"{{ asset('#')}}\" class=\"lb-author\">By Admin</a>
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
{% block footer %}
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
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
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
</html>", "shop/index.html.twig", "C:\\Users\\21695\\Documents\\I-Plus-Plus\\templates\\shop\\index.html.twig");
    }
}
