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

/* forum/index.html.twig */
class __TwigTemplate_3941db74964e8b36eb06aa5cd84995f18eb6725a017ac1d621c5e2ce502830b0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
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
<section class=\"page-info-section set-bg\" data-setbg=\"img/page-top-bg/4.jpg\">
    <div class=\"pi-content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-5 col-lg-6 text-white\">
                    <h2>Our Community</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page info section -->


<!-- Page section -->
<section class=\"page-section community-page set-bg\" data-setbg=\"img/community-bg.jpg\">
    <div class=\"community-warp spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h3 class=\"community-top-title\">All Members (344)</h3>
                </div>
                <div class=\"col-md-6 text-lg-right\">
                    <form class=\"community-filter\">
                        <label for=\"fdf5\">Show</label>
                        <select id=\"fdf5\">
                            <option value=\"#\">Everything</option>
                            <option value=\"#\">Everything</option>
                        </select>
                    </form>
                </div>
            </div>
            <ul class=\"community-post-list\">
                <li>
                    <div class=\"community-post\">
                        <div class=\"author-avator set-bg\" data-setbg=\"img/authors/1.jpg\"></div>
                        <div class=\"post-content\">
                            <h5>James Smith<span>posted an update</span></h5>
                            <div class=\"post-date\">June 21, 2018</div>
                            <p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"community-post\">
                        <div class=\"author-avator set-bg\" data-setbg=\"img/authors/8.jpg\"></div>
                        <div class=\"post-content\">
                            <h5>Partik Williams<span>posted an update</span></h5>
                            <div class=\"post-date\">June 21, 2018</div>
                            <p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
                            <div class=\"attachment-file\">
                                <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/attachment.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"community-post\">
                        <div class=\"author-avator set-bg\" data-setbg=\"img/authors/5.jpg\"></div>
                        <div class=\"post-content\">
                            <h5>Cris The Man<span>posted an update</span></h5>
                            <div class=\"post-date\">June 21, 2018</div>
                            <p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"community-post\">
                        <div class=\"author-avator set-bg\" data-setbg=\"img/authors/1.jpg\"></div>
                        <div class=\"post-content\">
                            <h5>James Smith<span>posted an update</span></h5>
                            <div class=\"post-date\">June 21, 2018</div>
                            <p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"community-post\">
                        <div class=\"author-avator set-bg\" data-setbg=\"img/authors/4.jpg\"></div>
                        <div class=\"post-content\">
                            <h5>Cris The Man<span>posted an update</span></h5>
                            <div class=\"post-date\">June 21, 2018</div>
                            <p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"community-post\">
                        <div class=\"author-avator set-bg\" data-setbg=\"img/authors/6.jpg\"></div>
                        <div class=\"post-content\">
                            <h5>James Smith<span>posted an update</span></h5>
                            <div class=\"post-date\">June 21, 2018</div>
                            <p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"community-post\">
                        <div class=\"author-avator set-bg\" data-setbg=\"img/authors/7.jpg\"></div>
                        <div class=\"post-content\">
                            <h5>Maria Doe<span>posted an update</span></h5>
                            <div class=\"post-date\">June 21, 2018</div>
                            <p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
                        </div>
                    </div>
                </li>
            </ul>
            <div class=\"site-pagination sp-style-2\">
                <span class=\"active\">01.</span>
                <a href=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">02.</a>
                <a href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">03.</a>
            </div>
        </div>
    </div>
</section>
<!-- Page section end -->


<!-- Footer top section -->
<section class=\"footer-top-section\">
    <div class=\"container\">
        <div class=\"footer-top-bg\">
            <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/footer-top-bg.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"footer-logo text-white\">
                    <img src=\"";
        // line 218
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
        // line 231
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
        // line 239
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
        // line 247
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
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class=\"tc-date\">June 21, 2018</div>
                            </div>
                        </div>
                        <div class=\"tc-item\">
                            <div class=\"tc-thumb set-bg\" data-setbg=\"img/authors/2.jpg\"></div>
                            <div class=\"tc-content\">
                                <p><a href=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class=\"tc-date\">June 21, 2018</div>
                            </div>
                        </div>
                        <div class=\"tc-item\">
                            <div class=\"tc-thumb set-bg\" data-setbg=\"img/authors/3.jpg\"></div>
                            <div class=\"tc-content\">
                                <p><a href=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class=\"tc-date\">June 21, 2018</div>
                            </div>
                        </div>
                        <div class=\"tc-item\">
                            <div class=\"tc-thumb set-bg\" data-setbg=\"img/authors/4.jpg\"></div>
                            <div class=\"tc-content\">
                                <p><a href=\"";
        // line 281
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
        // line 295
        $this->displayBlock('footer', $context, $blocks);
        // line 313
        echo "<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
";
        // line 317
        $this->displayBlock('jss', $context, $blocks);
        // line 324
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

    // line 295
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 296
        echo "    <footer class=\"footer-section\">
        <div class=\"container\">
            <ul class=\"footer-menu\">
                <li><a href=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("new"), "html", null, true);
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop"), "html", null, true);
        echo "\">Games</a></li>
                <li><a href=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("act"), "html", null, true);
        echo "\">Blog</a></li>
                <li><a href=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("act"), "html", null, true);
        echo "\">Evenements</a></li>
                <li><a href=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("forum"), "html", null, true);
        echo "\">Forums</a></li>
                <li><a href=\"";
        // line 304
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

    // line 317
    public function block_jss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jss"));

        // line 318
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.marquee.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "forum/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  649 => 322,  645 => 321,  641 => 320,  637 => 319,  632 => 318,  622 => 317,  603 => 304,  599 => 303,  595 => 302,  591 => 301,  587 => 300,  583 => 299,  578 => 296,  568 => 295,  552 => 66,  548 => 65,  544 => 64,  540 => 63,  536 => 62,  532 => 61,  528 => 60,  514 => 51,  508 => 48,  504 => 47,  499 => 44,  489 => 43,  477 => 31,  472 => 30,  462 => 29,  450 => 24,  446 => 23,  442 => 22,  438 => 21,  433 => 20,  423 => 19,  410 => 15,  400 => 14,  387 => 11,  377 => 10,  366 => 324,  364 => 317,  358 => 313,  356 => 295,  339 => 281,  329 => 274,  319 => 267,  309 => 260,  293 => 247,  282 => 239,  271 => 231,  255 => 218,  247 => 213,  232 => 201,  228 => 200,  167 => 142,  95 => 72,  93 => 43,  81 => 33,  79 => 29,  74 => 26,  72 => 19,  68 => 17,  66 => 14,  63 => 13,  61 => 10,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
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
<section class=\"page-info-section set-bg\" data-setbg=\"img/page-top-bg/4.jpg\">
    <div class=\"pi-content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-5 col-lg-6 text-white\">
                    <h2>Our Community</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page info section -->


<!-- Page section -->
<section class=\"page-section community-page set-bg\" data-setbg=\"img/community-bg.jpg\">
    <div class=\"community-warp spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h3 class=\"community-top-title\">All Members (344)</h3>
                </div>
                <div class=\"col-md-6 text-lg-right\">
                    <form class=\"community-filter\">
                        <label for=\"fdf5\">Show</label>
                        <select id=\"fdf5\">
                            <option value=\"#\">Everything</option>
                            <option value=\"#\">Everything</option>
                        </select>
                    </form>
                </div>
            </div>
            <ul class=\"community-post-list\">
                <li>
                    <div class=\"community-post\">
                        <div class=\"author-avator set-bg\" data-setbg=\"img/authors/1.jpg\"></div>
                        <div class=\"post-content\">
                            <h5>James Smith<span>posted an update</span></h5>
                            <div class=\"post-date\">June 21, 2018</div>
                            <p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"community-post\">
                        <div class=\"author-avator set-bg\" data-setbg=\"img/authors/8.jpg\"></div>
                        <div class=\"post-content\">
                            <h5>Partik Williams<span>posted an update</span></h5>
                            <div class=\"post-date\">June 21, 2018</div>
                            <p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
                            <div class=\"attachment-file\">
                                <img src=\"{{ asset('img/attachment.jpg')}}\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"community-post\">
                        <div class=\"author-avator set-bg\" data-setbg=\"img/authors/5.jpg\"></div>
                        <div class=\"post-content\">
                            <h5>Cris The Man<span>posted an update</span></h5>
                            <div class=\"post-date\">June 21, 2018</div>
                            <p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"community-post\">
                        <div class=\"author-avator set-bg\" data-setbg=\"img/authors/1.jpg\"></div>
                        <div class=\"post-content\">
                            <h5>James Smith<span>posted an update</span></h5>
                            <div class=\"post-date\">June 21, 2018</div>
                            <p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"community-post\">
                        <div class=\"author-avator set-bg\" data-setbg=\"img/authors/4.jpg\"></div>
                        <div class=\"post-content\">
                            <h5>Cris The Man<span>posted an update</span></h5>
                            <div class=\"post-date\">June 21, 2018</div>
                            <p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"community-post\">
                        <div class=\"author-avator set-bg\" data-setbg=\"img/authors/6.jpg\"></div>
                        <div class=\"post-content\">
                            <h5>James Smith<span>posted an update</span></h5>
                            <div class=\"post-date\">June 21, 2018</div>
                            <p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"community-post\">
                        <div class=\"author-avator set-bg\" data-setbg=\"img/authors/7.jpg\"></div>
                        <div class=\"post-content\">
                            <h5>Maria Doe<span>posted an update</span></h5>
                            <div class=\"post-date\">June 21, 2018</div>
                            <p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
                        </div>
                    </div>
                </li>
            </ul>
            <div class=\"site-pagination sp-style-2\">
                <span class=\"active\">01.</span>
                <a href=\"{{ asset('#')}}\">02.</a>
                <a href=\"{{ asset('#')}}\">03.</a>
            </div>
        </div>
    </div>
</section>
<!-- Page section end -->


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
                                <p><a href=\"{{ asset('#') }}\">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
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
</html>", "forum/index.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\forum\\index.html.twig");
    }
}
