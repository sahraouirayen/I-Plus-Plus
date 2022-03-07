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

/* back.html.twig */
class __TwigTemplate_08938fb78b529604fcf19b9e3cda790f021a37e321be1c285deed9207b91c60b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jvectormap/jquery-jvectormap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/flag-icon-css/css/flag-icon.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/owl-carousel-2/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/owl-carousel-2/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    <!-- End layout styles -->
    <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        echo "\" />
</head>


<body>



<div class=\"container-scroller\">
    <!-- partial:partials/_sidebar.html -->
    <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
            <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        echo "\" alt=\"logo\" /></a>
            <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mini.svg"), "html", null, true);
        echo "\" alt=\"logo\" /></a>
        </div>
        <ul class=\"nav\">
            <li class=\"nav-item profile\">
                <div class=\"profile-desc\">
                    <div class=\"profile-pic\">
                        <div class=\"count-indicator\">
                            <img class=\"img-xs rounded-circle \" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <span class=\"count bg-success\"></span>
                        </div>
                        <div class=\"profile-name\">
                            <h5 class=\"mb-0 font-weight-normal\">Henry Klein</h5>
                            <span>Gold Member</span>
                        </div>
                    </div>
                    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" id=\"profile-dropdown\" data-toggle=\"dropdown\"><i class=\"mdi mdi-dots-vertical\"></i></a>
                    <div class=\"dropdown-menu dropdown-menu-right sidebar-dropdown preview-list\" aria-labelledby=\"profile-dropdown\">
                        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <div class=\"preview-icon bg-dark rounded-circle\">
                                    <i class=\"mdi mdi-settings text-primary\"></i>
                                </div>
                            </div>
                            <div class=\"preview-item-content\">
                                <p class=\"preview-subject ellipsis mb-1 text-small\">Account settings</p>
                            </div>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <div class=\"preview-icon bg-dark rounded-circle\">
                                    <i class=\"mdi mdi-onepassword  text-info\"></i>
                                </div>
                            </div>
                            <div class=\"preview-item-content\">
                                <p class=\"preview-subject ellipsis mb-1 text-small\">Change Password</p>
                            </div>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <div class=\"preview-icon bg-dark rounded-circle\">
                                    <i class=\"mdi mdi-calendar-today text-success\"></i>
                                </div>
                            </div>
                            <div class=\"preview-item-content\">
                                <p class=\"preview-subject ellipsis mb-1 text-small\">To-do list</p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class=\"nav-item nav-category\">
                <span class=\"nav-link\">Navigation</span>
            </li>
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back"), "html", null, true);
        echo "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-speedometer\"></i>
              </span>
                    <span class=\"menu-title\">Dashboard</span>
                </a>
            </li>
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" data-toggle=\"collapse\" href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#ui-basic"), "html", null, true);
        echo "\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-laptop\"></i>
              </span>
                    <span class=\"menu-title\">Basic UI Elements</span>
                    <i class=\"menu-arrow\"></i>
                </a>
                <div class=\"collapse\" id=\"ui-basic\">
                    <ul class=\"nav flex-column sub-menu\">
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/ui-features/buttons.html"), "html", null, true);
        echo "\">Buttons</a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/ui-features/dropdowns.html"), "html", null, true);
        echo "\">Dropdowns</a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/ui-features/typography.html"), "html", null, true);
        echo "\">Typography</a></li>
                    </ul>
                </div>
            </li>
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualite/new"), "html", null, true);
        echo "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-playlist-play\"></i>
              </span>
                    <span class=\"menu-title\">ajouter actualite</span>
                </a>
            </li>
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("categorie/actualite/new"), "html", null, true);
        echo "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-table-large\"></i>
              </span>
                    <span class=\"menu-title\">Ajouter Categorie Actualite</span>
                </a>
            </li>
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/charts/chartjs.html"), "html", null, true);
        echo "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-chart-bar\"></i>
              </span>
                    <span class=\"menu-title\">Charts</span>
                </a>
            </li>
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/icons/mdi.html"), "html", null, true);
        echo "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-contacts\"></i>
              </span>
                    <span class=\"menu-title\">Icons</span>
                </a>
            </li>
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" data-toggle=\"collapse\" href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#auth"), "html", null, true);
        echo "\" aria-expanded=\"false\" aria-controls=\"auth\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-security\"></i>
              </span>
                    <span class=\"menu-title\">User Pages</span>
                    <i class=\"menu-arrow\"></i>
                </a>
                <div class=\"collapse\" id=\"auth\">
                    <ul class=\"nav flex-column sub-menu\">
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/samples/blank-page.html"), "html", null, true);
        echo "\"> Blank Page </a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/samples/error-404.html"), "html", null, true);
        echo "\"> 404 </a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/samples/error-500.html"), "html", null, true);
        echo "\"> 500 </a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/samples/login.html"), "html", null, true);
        echo "\"> Login </a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/samples/register.html"), "html", null, true);
        echo "\"> Register </a></li>
                    </ul>
                </div>
            </li>
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html"), "html", null, true);
        echo "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-file-document-box\"></i>
              </span>
                    <span class=\"menu-title\">Documentation</span>
                </a>
            </li>
        </ul>
    </nav>

    ";
        // line 176
        $this->displayBlock('body', $context, $blocks);
        // line 1053
        echo "<!-- container-scroller -->
<!-- plugins:js -->
<script src=\"";
        // line 1055
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src=\"";
        // line 1058
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1059
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/progressbar.js/progressbar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1060
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jvectormap/jquery-jvectormap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1061
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1062
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/owl-carousel-2/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src=\"";
        // line 1065
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1066
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1067
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1068
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/settings.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1069
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/todolist.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src=\"";
        // line 1072
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboard.js"), "html", null, true);
        echo "\"></script>
<!-- End custom js for this page -->
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 176
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 177
        echo "    <!-- partial -->

        <!-- partial:partials/_navbar.html -->
        <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
            <div class=\"navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center\">
                <a class=\"navbar-brand brand-logo-mini\" href=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mini.svg"), "html", null, true);
        echo "\" alt=\"logo\" /></a>
            </div>
            <div class=\"navbar-menu-wrapper flex-grow d-flex align-items-stretch\">
                <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                    <span class=\"mdi mdi-menu\"></span>
                </button>
                <ul class=\"navbar-nav w-100\">
                    <li class=\"nav-item w-100\">
                        <form class=\"nav-link mt-2 mt-md-0 d-none d-lg-flex search\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search products\">
                        </form>
                    </li>
                </ul>
                <ul class=\"navbar-nav navbar-nav-right\">
                    <li class=\"nav-item dropdown d-none d-lg-block\">
                        <a class=\"nav-link btn btn-success create-new-button\" id=\"createbuttonDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">+ Create New Project</a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"createbuttonDropdown\">
                            <h6 class=\"p-3 mb-0\">Projects</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-file-outline text-primary\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Software Development</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-web text-info\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">UI Development</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-layers text-danger\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Software Testing</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <p class=\"p-3 mb-0 text-center\">See all projects</p>
                        </div>
                    </li>
                    <li class=\"nav-item nav-settings d-none d-lg-block\">
                        <a class=\"nav-link\" href=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">
                            <i class=\"mdi mdi-view-grid\"></i>
                        </a>
                    </li>
                    <li class=\"nav-item dropdown border-left\">
                        <a class=\"nav-link count-indicator dropdown-toggle\" id=\"messageDropdown\" href=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"mdi mdi-email\"></i>
                            <span class=\"count bg-success\"></span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"messageDropdown\">
                            <h6 class=\"p-3 mb-0\">Messages</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face4.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"rounded-circle profile-pic\">
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Mark send you a message</p>
                                    <p class=\"text-muted mb-0\"> 1 Minutes ago </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face2.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"rounded-circle profile-pic\">
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Cregh send you a message</p>
                                    <p class=\"text-muted mb-0\"> 15 Minutes ago </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"rounded-circle profile-pic\">
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Profile picture updated</p>
                                    <p class=\"text-muted mb-0\"> 18 Minutes ago </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <p class=\"p-3 mb-0 text-center\">4 new messages</p>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown border-left\">
                        <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" data-toggle=\"dropdown\">
                            <i class=\"mdi mdi-bell\"></i>
                            <span class=\"count bg-danger\"></span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                            <h6 class=\"p-3 mb-0\">Notifications</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-calendar text-success\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Event today</p>
                                    <p class=\"text-muted ellipsis mb-0\"> Just a reminder that you have an event today </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-settings text-danger\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Settings</p>
                                    <p class=\"text-muted ellipsis mb-0\"> Update dashboard </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-link-variant text-warning\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Launch Admin</p>
                                    <p class=\"text-muted ellipsis mb-0\"> New admin wow! </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <p class=\"p-3 mb-0 text-center\">See all notifications</p>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" id=\"profileDropdown\" href=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" data-toggle=\"dropdown\">
                            <div class=\"navbar-profile\">
                                <img class=\"img-xs rounded-circle\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Henry Klein</p>
                                <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                            </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                            <h6 class=\"p-3 mb-0\">Profile</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-settings text-success\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Settings</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-logout text-danger\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Log out</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <p class=\"p-3 mb-0 text-center\">Advanced settings</p>
                        </div>
                    </li>
                </ul>
                <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
                    <span class=\"mdi mdi-format-line-spacing\"></span>
                </button>
            </div>
        </nav>

        <!-- partial -->
        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                <div class=\"row\">
                    <div class=\"col-12 grid-margin stretch-card\">
                        <div class=\"card corona-gradient-card\">
                            <div class=\"card-body py-0 px-0 px-sm-3\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-4 col-sm-3 col-xl-2\">
                                        <img src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dashboard/Group126@2x.png"), "html", null, true);
        echo "\" class=\"gradient-corona-img img-fluid\" alt=\"\">
                                    </div>
                                    <div class=\"col-5 col-sm-7 col-xl-8 p-0\">
                                        <h4 class=\"mb-1 mb-sm-0\">Want even more features?</h4>
                                        <p class=\"mb-0 font-weight-normal d-none d-sm-block\">Check out our Pro version with 5 unique layouts!</p>
                                    </div>
                                    <div class=\"col-3 col-sm-2 col-xl-2 pl-0 text-center\">
                        <span>
                          <a href=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.bootstrapdash.com/product/corona-admin-template/"), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-outline-light btn-rounded get-started-btn\">Upgrade to PRO</a>
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            <h3 class=\"mb-0\">\$12.34</h3>
                                            <p class=\"text-success ml-2 mb-0 font-weight-medium\">+3.5%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"icon icon-box-success \">
                                            <span class=\"mdi mdi-arrow-top-right icon-item\"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"text-muted font-weight-normal\">Potential growth</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            <h3 class=\"mb-0\">\$17.34</h3>
                                            <p class=\"text-success ml-2 mb-0 font-weight-medium\">+11%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"icon icon-box-success\">
                                            <span class=\"mdi mdi-arrow-top-right icon-item\"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"text-muted font-weight-normal\">Revenue current</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            <h3 class=\"mb-0\">\$12.34</h3>
                                            <p class=\"text-danger ml-2 mb-0 font-weight-medium\">-2.4%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"icon icon-box-danger\">
                                            <span class=\"mdi mdi-arrow-bottom-left icon-item\"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"text-muted font-weight-normal\">Daily Income</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            <h3 class=\"mb-0\">\$31.53</h3>
                                            <p class=\"text-success ml-2 mb-0 font-weight-medium\">+3.5%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"icon icon-box-success \">
                                            <span class=\"mdi mdi-arrow-top-right icon-item\"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"text-muted font-weight-normal\">Expense current</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">Transaction History</h4>
                                <canvas id=\"transaction-history\" class=\"transaction-chart\"></canvas>
                                <div class=\"bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3\">
                                    <div class=\"text-md-center text-xl-left\">
                                        <h6 class=\"mb-1\">Transfer to Paypal</h6>
                                        <p class=\"text-muted mb-0\">07 Jan 2019, 09:12AM</p>
                                    </div>
                                    <div class=\"align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0\">
                                        <h6 class=\"font-weight-bold mb-0\">\$236</h6>
                                    </div>
                                </div>
                                <div class=\"bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3\">
                                    <div class=\"text-md-center text-xl-left\">
                                        <h6 class=\"mb-1\">Tranfer to Stripe</h6>
                                        <p class=\"text-muted mb-0\">07 Jan 2019, 09:12AM</p>
                                    </div>
                                    <div class=\"align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0\">
                                        <h6 class=\"font-weight-bold mb-0\">\$593</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-8 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex flex-row justify-content-between\">
                                    <h4 class=\"card-title mb-1\">Open Projects</h4>
                                    <p class=\"text-muted mb-1\">Your data status</p>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"preview-list\">
                                            <div class=\"preview-item border-bottom\">
                                                <div class=\"preview-thumbnail\">
                                                    <div class=\"preview-icon bg-primary\">
                                                        <i class=\"mdi mdi-file-document\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"preview-item-content d-sm-flex flex-grow\">
                                                    <div class=\"flex-grow\">
                                                        <h6 class=\"preview-subject\">Admin dashboard design</h6>
                                                        <p class=\"text-muted mb-0\">Broadcast web app mockup</p>
                                                    </div>
                                                    <div class=\"mr-auto text-sm-right pt-2 pt-sm-0\">
                                                        <p class=\"text-muted\">15 minutes ago</p>
                                                        <p class=\"text-muted mb-0\">30 tasks, 5 issues </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"preview-item border-bottom\">
                                                <div class=\"preview-thumbnail\">
                                                    <div class=\"preview-icon bg-success\">
                                                        <i class=\"mdi mdi-cloud-download\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"preview-item-content d-sm-flex flex-grow\">
                                                    <div class=\"flex-grow\">
                                                        <h6 class=\"preview-subject\">Wordpress Development</h6>
                                                        <p class=\"text-muted mb-0\">Upload new design</p>
                                                    </div>
                                                    <div class=\"mr-auto text-sm-right pt-2 pt-sm-0\">
                                                        <p class=\"text-muted\">1 hour ago</p>
                                                        <p class=\"text-muted mb-0\">23 tasks, 5 issues </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"preview-item border-bottom\">
                                                <div class=\"preview-thumbnail\">
                                                    <div class=\"preview-icon bg-info\">
                                                        <i class=\"mdi mdi-clock\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"preview-item-content d-sm-flex flex-grow\">
                                                    <div class=\"flex-grow\">
                                                        <h6 class=\"preview-subject\">Project meeting</h6>
                                                        <p class=\"text-muted mb-0\">New project discussion</p>
                                                    </div>
                                                    <div class=\"mr-auto text-sm-right pt-2 pt-sm-0\">
                                                        <p class=\"text-muted\">35 minutes ago</p>
                                                        <p class=\"text-muted mb-0\">15 tasks, 2 issues</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"preview-item border-bottom\">
                                                <div class=\"preview-thumbnail\">
                                                    <div class=\"preview-icon bg-danger\">
                                                        <i class=\"mdi mdi-email-open\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"preview-item-content d-sm-flex flex-grow\">
                                                    <div class=\"flex-grow\">
                                                        <h6 class=\"preview-subject\">Broadcast Mail</h6>
                                                        <p class=\"text-muted mb-0\">Sent release details to team</p>
                                                    </div>
                                                    <div class=\"mr-auto text-sm-right pt-2 pt-sm-0\">
                                                        <p class=\"text-muted\">55 minutes ago</p>
                                                        <p class=\"text-muted mb-0\">35 tasks, 7 issues </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"preview-item\">
                                                <div class=\"preview-thumbnail\">
                                                    <div class=\"preview-icon bg-warning\">
                                                        <i class=\"mdi mdi-chart-pie\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"preview-item-content d-sm-flex flex-grow\">
                                                    <div class=\"flex-grow\">
                                                        <h6 class=\"preview-subject\">UI Design</h6>
                                                        <p class=\"text-muted mb-0\">New application planning</p>
                                                    </div>
                                                    <div class=\"mr-auto text-sm-right pt-2 pt-sm-0\">
                                                        <p class=\"text-muted\">50 minutes ago</p>
                                                        <p class=\"text-muted mb-0\">27 tasks, 4 issues </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4 grid-margin\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5>Revenue</h5>
                                <div class=\"row\">
                                    <div class=\"col-8 col-sm-12 col-xl-8 my-auto\">
                                        <div class=\"d-flex d-sm-block d-md-flex align-items-center\">
                                            <h2 class=\"mb-0\">\$32123</h2>
                                            <p class=\"text-success ml-2 mb-0 font-weight-medium\">+3.5%</p>
                                        </div>
                                        <h6 class=\"text-muted font-weight-normal\">11.38% Since last month</h6>
                                    </div>
                                    <div class=\"col-4 col-sm-12 col-xl-4 text-center text-xl-right\">
                                        <i class=\"icon-lg mdi mdi-codepen text-primary ml-auto\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4 grid-margin\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5>Sales</h5>
                                <div class=\"row\">
                                    <div class=\"col-8 col-sm-12 col-xl-8 my-auto\">
                                        <div class=\"d-flex d-sm-block d-md-flex align-items-center\">
                                            <h2 class=\"mb-0\">\$45850</h2>
                                            <p class=\"text-success ml-2 mb-0 font-weight-medium\">+8.3%</p>
                                        </div>
                                        <h6 class=\"text-muted font-weight-normal\"> 9.61% Since last month</h6>
                                    </div>
                                    <div class=\"col-4 col-sm-12 col-xl-4 text-center text-xl-right\">
                                        <i class=\"icon-lg mdi mdi-wallet-travel text-danger ml-auto\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4 grid-margin\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5>Purchase</h5>
                                <div class=\"row\">
                                    <div class=\"col-8 col-sm-12 col-xl-8 my-auto\">
                                        <div class=\"d-flex d-sm-block d-md-flex align-items-center\">
                                            <h2 class=\"mb-0\">\$2039</h2>
                                            <p class=\"text-danger ml-2 mb-0 font-weight-medium\">-2.1% </p>
                                        </div>
                                        <h6 class=\"text-muted font-weight-normal\">2.27% Since last month</h6>
                                    </div>
                                    <div class=\"col-4 col-sm-12 col-xl-4 text-center text-xl-right\">
                                        <i class=\"icon-lg mdi mdi-monitor text-success ml-auto\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row \">
                    <div class=\"col-12 grid-margin\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">Order Status</h4>
                                <div class=\"table-responsive\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <th>
                                                <div class=\"form-check form-check-muted m-0\">
                                                    <label class=\"form-check-label\">
                                                        <input type=\"checkbox\" class=\"form-check-input\">
                                                    </label>
                                                </div>
                                            </th>
                                            <th> Client Name </th>
                                            <th> Order No </th>
                                            <th> Product Cost </th>
                                            <th> Project </th>
                                            <th> Payment Mode </th>
                                            <th> Start Date </th>
                                            <th> Payment Status </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class=\"form-check form-check-muted m-0\">
                                                    <label class=\"form-check-label\">
                                                        <input type=\"checkbox\" class=\"form-check-input\">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src=\"";
        // line 703
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face1.jpg"), "html", null, true);
        echo "\" alt=\"image\" />
                                                <span class=\"pl-2\">Henry Klein</span>
                                            </td>
                                            <td> 02312 </td>
                                            <td> \$14,500 </td>
                                            <td> Dashboard </td>
                                            <td> Credit card </td>
                                            <td> 04 Dec 2019 </td>
                                            <td>
                                                <div class=\"badge badge-outline-success\">Approved</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-check form-check-muted m-0\">
                                                    <label class=\"form-check-label\">
                                                        <input type=\"checkbox\" class=\"form-check-input\">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src=\"";
        // line 724
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face2.jpg"), "html", null, true);
        echo "\" alt=\"image\" />
                                                <span class=\"pl-2\">Estella Bryan</span>
                                            </td>
                                            <td> 02312 </td>
                                            <td> \$14,500 </td>
                                            <td> Website </td>
                                            <td> Cash on delivered </td>
                                            <td> 04 Dec 2019 </td>
                                            <td>
                                                <div class=\"badge badge-outline-warning\">Pending</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-check form-check-muted m-0\">
                                                    <label class=\"form-check-label\">
                                                        <input type=\"checkbox\" class=\"form-check-input\">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face5.jpg"), "html", null, true);
        echo "\" alt=\"image\" />
                                                <span class=\"pl-2\">Lucy Abbott</span>
                                            </td>
                                            <td> 02312 </td>
                                            <td> \$14,500 </td>
                                            <td> App design </td>
                                            <td> Credit card </td>
                                            <td> 04 Dec 2019 </td>
                                            <td>
                                                <div class=\"badge badge-outline-danger\">Rejected</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-check form-check-muted m-0\">
                                                    <label class=\"form-check-label\">
                                                        <input type=\"checkbox\" class=\"form-check-input\">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src=\"";
        // line 766
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face3.jpg"), "html", null, true);
        echo "\" alt=\"image\" />
                                                <span class=\"pl-2\">Peter Gill</span>
                                            </td>
                                            <td> 02312 </td>
                                            <td> \$14,500 </td>
                                            <td> Development </td>
                                            <td> Online Payment </td>
                                            <td> 04 Dec 2019 </td>
                                            <td>
                                                <div class=\"badge badge-outline-success\">Approved</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-check form-check-muted m-0\">
                                                    <label class=\"form-check-label\">
                                                        <input type=\"checkbox\" class=\"form-check-input\">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src=\"";
        // line 787
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face4.jpg"), "html", null, true);
        echo "\" alt=\"image\" />
                                                <span class=\"pl-2\">Sallie Reyes</span>
                                            </td>
                                            <td> 02312 </td>
                                            <td> \$14,500 </td>
                                            <td> Website </td>
                                            <td> Credit card </td>
                                            <td> 04 Dec 2019 </td>
                                            <td>
                                                <div class=\"badge badge-outline-success\">Approved</div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 col-xl-4 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex flex-row justify-content-between\">
                                    <h4 class=\"card-title\">Messages</h4>
                                    <p class=\"text-muted mb-1 small\">View all</p>
                                </div>
                                <div class=\"preview-list\">
                                    <div class=\"preview-item border-bottom\">
                                        <div class=\"preview-thumbnail\">
                                            <img src=\"";
        // line 817
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face6.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"rounded-circle\" />
                                        </div>
                                        <div class=\"preview-item-content d-flex flex-grow\">
                                            <div class=\"flex-grow\">
                                                <div class=\"d-flex d-md-block d-xl-flex justify-content-between\">
                                                    <h6 class=\"preview-subject\">Leonard</h6>
                                                    <p class=\"text-muted text-small\">5 minutes ago</p>
                                                </div>
                                                <p class=\"text-muted\">Well, it seems to be working now.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"preview-item border-bottom\">
                                        <div class=\"preview-thumbnail\">
                                            <img src=\"";
        // line 831
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face8.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"rounded-circle\" />
                                        </div>
                                        <div class=\"preview-item-content d-flex flex-grow\">
                                            <div class=\"flex-grow\">
                                                <div class=\"d-flex d-md-block d-xl-flex justify-content-between\">
                                                    <h6 class=\"preview-subject\">Luella Mills</h6>
                                                    <p class=\"text-muted text-small\">10 Minutes Ago</p>
                                                </div>
                                                <p class=\"text-muted\">Well, it seems to be working now.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"preview-item border-bottom\">
                                        <div class=\"preview-thumbnail\">
                                            <img src=\"";
        // line 845
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face9.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"rounded-circle\" />
                                        </div>
                                        <div class=\"preview-item-content d-flex flex-grow\">
                                            <div class=\"flex-grow\">
                                                <div class=\"d-flex d-md-block d-xl-flex justify-content-between\">
                                                    <h6 class=\"preview-subject\">Ethel Kelly</h6>
                                                    <p class=\"text-muted text-small\">2 Hours Ago</p>
                                                </div>
                                                <p class=\"text-muted\">Please review the tickets</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"preview-item border-bottom\">
                                        <div class=\"preview-thumbnail\">
                                            <img src=\"";
        // line 859
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face11.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"rounded-circle\" />
                                        </div>
                                        <div class=\"preview-item-content d-flex flex-grow\">
                                            <div class=\"flex-grow\">
                                                <div class=\"d-flex d-md-block d-xl-flex justify-content-between\">
                                                    <h6 class=\"preview-subject\">Herman May</h6>
                                                    <p class=\"text-muted text-small\">4 Hours Ago</p>
                                                </div>
                                                <p class=\"text-muted\">Thanks a lot. It was easy to fix it .</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-xl-4 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">Portfolio Slide</h4>
                                <div class=\"owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel\" id=\"owl-carousel-basic\">
                                    <div class=\"item\">
                                        <img src=\"";
        // line 881
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dashboard/Rectangle.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"item\">
                                        <img src=\"";
        // line 884
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dashboard/Img_5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"item\">
                                        <img src=\"";
        // line 887
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dashboard/img_6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"d-flex py-4\">
                                    <div class=\"preview-list w-100\">
                                        <div class=\"preview-item p-0\">
                                            <div class=\"preview-thumbnail\">
                                                <img src=\"";
        // line 894
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face12.jpg"), "html", null, true);
        echo "\" class=\"rounded-circle\" alt=\"\">
                                            </div>
                                            <div class=\"preview-item-content d-flex flex-grow\">
                                                <div class=\"flex-grow\">
                                                    <div class=\"d-flex d-md-block d-xl-flex justify-content-between\">
                                                        <h6 class=\"preview-subject\">CeeCee Bass</h6>
                                                        <p class=\"text-muted text-small\">4 Hours Ago</p>
                                                    </div>
                                                    <p class=\"text-muted\">Well, it seems to be working now.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class=\"text-muted\">Well, it seems to be working now. </p>
                                <div class=\"progress progress-md portfolio-progress\">
                                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 50%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-xl-4 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">To do list</h4>
                                <div class=\"add-items d-flex\">
                                    <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"enter task..\">
                                    <button class=\"add btn btn-primary todo-list-add-btn\">Add</button>
                                </div>
                                <div class=\"list-wrapper\">
                                    <ul class=\"d-flex flex-column-reverse text-white todo-list todo-list-custom\">
                                        <li>
                                            <div class=\"form-check form-check-primary\">
                                                <label class=\"form-check-label\">
                                                    <input class=\"checkbox\" type=\"checkbox\"> Create invoice </label>
                                            </div>
                                            <i class=\"remove mdi mdi-close-box\"></i>
                                        </li>
                                        <li>
                                            <div class=\"form-check form-check-primary\">
                                                <label class=\"form-check-label\">
                                                    <input class=\"checkbox\" type=\"checkbox\"> Meeting with Alita </label>
                                            </div>
                                            <i class=\"remove mdi mdi-close-box\"></i>
                                        </li>
                                        <li class=\"completed\">
                                            <div class=\"form-check form-check-primary\">
                                                <label class=\"form-check-label\">
                                                    <input class=\"checkbox\" type=\"checkbox\" checked> Prepare for presentation </label>
                                            </div>
                                            <i class=\"remove mdi mdi-close-box\"></i>
                                        </li>
                                        <li>
                                            <div class=\"form-check form-check-primary\">
                                                <label class=\"form-check-label\">
                                                    <input class=\"checkbox\" type=\"checkbox\"> Plan weekend outing </label>
                                            </div>
                                            <i class=\"remove mdi mdi-close-box\"></i>
                                        </li>
                                        <li>
                                            <div class=\"form-check form-check-primary\">
                                                <label class=\"form-check-label\">
                                                    <input class=\"checkbox\" type=\"checkbox\"> Pick up kids from school </label>
                                            </div>
                                            <i class=\"remove mdi mdi-close-box\"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">Visitors by Countries</h4>
                                <div class=\"row\">
                                    <div class=\"col-md-5\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table\">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <i class=\"flag-icon flag-icon-us\"></i>
                                                    </td>
                                                    <td>USA</td>
                                                    <td class=\"text-right\"> 1500 </td>
                                                    <td class=\"text-right font-weight-medium\"> 56.35% </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class=\"flag-icon flag-icon-de\"></i>
                                                    </td>
                                                    <td>Germany</td>
                                                    <td class=\"text-right\"> 800 </td>
                                                    <td class=\"text-right font-weight-medium\"> 33.25% </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class=\"flag-icon flag-icon-au\"></i>
                                                    </td>
                                                    <td>Australia</td>
                                                    <td class=\"text-right\"> 760 </td>
                                                    <td class=\"text-right font-weight-medium\"> 15.45% </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class=\"flag-icon flag-icon-gb\"></i>
                                                    </td>
                                                    <td>United Kingdom</td>
                                                    <td class=\"text-right\"> 450 </td>
                                                    <td class=\"text-right font-weight-medium\"> 25.00% </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class=\"flag-icon flag-icon-ro\"></i>
                                                    </td>
                                                    <td>Romania</td>
                                                    <td class=\"text-right\"> 620 </td>
                                                    <td class=\"text-right font-weight-medium\"> 10.25% </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class=\"flag-icon flag-icon-br\"></i>
                                                    </td>
                                                    <td>Brasil</td>
                                                    <td class=\"text-right\"> 230 </td>
                                                    <td class=\"text-right font-weight-medium\"> 75.00% </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class=\"col-md-7\">
                                        <div id=\"audience-map\" class=\"vector-map\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class=\"footer\">
                <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                    <span class=\"text-muted d-block text-center text-sm-left d-sm-inline-block\">Copyright © bootstrapdash.com 2020</span>
                    <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\"> Free <a href=\"";
        // line 1042
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.bootstrapdash.com/bootstrap-admin-template/"), "html", null, true);
        echo "\" target=\"_blank\">Bootstrap admin templates</a> from Bootstrapdash.com</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1342 => 1042,  1191 => 894,  1181 => 887,  1175 => 884,  1169 => 881,  1144 => 859,  1127 => 845,  1110 => 831,  1093 => 817,  1060 => 787,  1036 => 766,  1012 => 745,  988 => 724,  964 => 703,  648 => 390,  637 => 382,  585 => 333,  580 => 331,  530 => 284,  515 => 272,  502 => 262,  489 => 252,  477 => 243,  469 => 238,  425 => 197,  405 => 182,  398 => 177,  388 => 176,  374 => 1072,  368 => 1069,  364 => 1068,  360 => 1067,  356 => 1066,  352 => 1065,  346 => 1062,  342 => 1061,  338 => 1060,  334 => 1059,  330 => 1058,  324 => 1055,  320 => 1053,  318 => 176,  305 => 166,  297 => 161,  293 => 160,  289 => 159,  285 => 158,  281 => 157,  269 => 148,  258 => 140,  247 => 132,  236 => 124,  225 => 116,  217 => 111,  213 => 110,  209 => 109,  197 => 100,  186 => 92,  166 => 75,  152 => 64,  138 => 53,  133 => 51,  122 => 43,  110 => 36,  104 => 35,  89 => 23,  84 => 21,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  58 => 10,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/css/vendor.bundle.base.css')}}\">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/jvectormap/jquery-jvectormap.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}\">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css')}}\">
    <!-- End layout styles -->
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon.png')}}\" />
</head>


<body>



<div class=\"container-scroller\">
    <!-- partial:partials/_sidebar.html -->
    <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
            <a class=\"sidebar-brand brand-logo\" href=\"{{ asset('back')}}\"><img src=\"{{ asset('assets/images/logo.svg')}}\" alt=\"logo\" /></a>
            <a class=\"sidebar-brand brand-logo-mini\" href=\"{{ asset('back')}}\"><img src=\"{{ asset('assets/images/logo-mini.svg')}}\" alt=\"logo\" /></a>
        </div>
        <ul class=\"nav\">
            <li class=\"nav-item profile\">
                <div class=\"profile-desc\">
                    <div class=\"profile-pic\">
                        <div class=\"count-indicator\">
                            <img class=\"img-xs rounded-circle \" src=\"{{ asset('assets/images/faces/face15.jpg')}}\" alt=\"\">
                            <span class=\"count bg-success\"></span>
                        </div>
                        <div class=\"profile-name\">
                            <h5 class=\"mb-0 font-weight-normal\">Henry Klein</h5>
                            <span>Gold Member</span>
                        </div>
                    </div>
                    <a href=\"{{ asset('#')}}\" id=\"profile-dropdown\" data-toggle=\"dropdown\"><i class=\"mdi mdi-dots-vertical\"></i></a>
                    <div class=\"dropdown-menu dropdown-menu-right sidebar-dropdown preview-list\" aria-labelledby=\"profile-dropdown\">
                        <a href=\"{{ asset('#')}}\" class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <div class=\"preview-icon bg-dark rounded-circle\">
                                    <i class=\"mdi mdi-settings text-primary\"></i>
                                </div>
                            </div>
                            <div class=\"preview-item-content\">
                                <p class=\"preview-subject ellipsis mb-1 text-small\">Account settings</p>
                            </div>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"{{ asset('#')}}\" class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <div class=\"preview-icon bg-dark rounded-circle\">
                                    <i class=\"mdi mdi-onepassword  text-info\"></i>
                                </div>
                            </div>
                            <div class=\"preview-item-content\">
                                <p class=\"preview-subject ellipsis mb-1 text-small\">Change Password</p>
                            </div>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"{{ asset('#')}}\" class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <div class=\"preview-icon bg-dark rounded-circle\">
                                    <i class=\"mdi mdi-calendar-today text-success\"></i>
                                </div>
                            </div>
                            <div class=\"preview-item-content\">
                                <p class=\"preview-subject ellipsis mb-1 text-small\">To-do list</p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class=\"nav-item nav-category\">
                <span class=\"nav-link\">Navigation</span>
            </li>
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"{{ asset('back')}}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-speedometer\"></i>
              </span>
                    <span class=\"menu-title\">Dashboard</span>
                </a>
            </li>
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" data-toggle=\"collapse\" href=\"{{ asset('#ui-basic')}}\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-laptop\"></i>
              </span>
                    <span class=\"menu-title\">Basic UI Elements</span>
                    <i class=\"menu-arrow\"></i>
                </a>
                <div class=\"collapse\" id=\"ui-basic\">
                    <ul class=\"nav flex-column sub-menu\">
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ asset('pages/ui-features/buttons.html')}}\">Buttons</a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ asset('pages/ui-features/dropdowns.html')}}\">Dropdowns</a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ asset('pages/ui-features/typography.html')}}\">Typography</a></li>
                    </ul>
                </div>
            </li>
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"{{ asset('actualite/new')}}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-playlist-play\"></i>
              </span>
                    <span class=\"menu-title\">ajouter actualite</span>
                </a>
            </li>
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"{{ asset('categorie/actualite/new')}}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-table-large\"></i>
              </span>
                    <span class=\"menu-title\">Ajouter Categorie Actualite</span>
                </a>
            </li>
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"{{ asset('pages/charts/chartjs.html')}}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-chart-bar\"></i>
              </span>
                    <span class=\"menu-title\">Charts</span>
                </a>
            </li>
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"{{ asset('pages/icons/mdi.html')}}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-contacts\"></i>
              </span>
                    <span class=\"menu-title\">Icons</span>
                </a>
            </li>
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" data-toggle=\"collapse\" href=\"{{ asset('#auth')}}\" aria-expanded=\"false\" aria-controls=\"auth\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-security\"></i>
              </span>
                    <span class=\"menu-title\">User Pages</span>
                    <i class=\"menu-arrow\"></i>
                </a>
                <div class=\"collapse\" id=\"auth\">
                    <ul class=\"nav flex-column sub-menu\">
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ asset('pages/samples/blank-page.html')}}\"> Blank Page </a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ asset('pages/samples/error-404.html')}}\"> 404 </a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ asset('pages/samples/error-500.html')}}\"> 500 </a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ asset('pages/samples/login.html')}}\"> Login </a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ asset('pages/samples/register.html')}}\"> Register </a></li>
                    </ul>
                </div>
            </li>
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"{{ asset('http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html')}}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-file-document-box\"></i>
              </span>
                    <span class=\"menu-title\">Documentation</span>
                </a>
            </li>
        </ul>
    </nav>

    {% block body %}
    <!-- partial -->

        <!-- partial:partials/_navbar.html -->
        <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
            <div class=\"navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center\">
                <a class=\"navbar-brand brand-logo-mini\" href=\"{{ asset('back')}}\"><img src=\"{{ asset('assets/images/logo-mini.svg')}}\" alt=\"logo\" /></a>
            </div>
            <div class=\"navbar-menu-wrapper flex-grow d-flex align-items-stretch\">
                <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                    <span class=\"mdi mdi-menu\"></span>
                </button>
                <ul class=\"navbar-nav w-100\">
                    <li class=\"nav-item w-100\">
                        <form class=\"nav-link mt-2 mt-md-0 d-none d-lg-flex search\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search products\">
                        </form>
                    </li>
                </ul>
                <ul class=\"navbar-nav navbar-nav-right\">
                    <li class=\"nav-item dropdown d-none d-lg-block\">
                        <a class=\"nav-link btn btn-success create-new-button\" id=\"createbuttonDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"{{ asset('#')}}\">+ Create New Project</a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"createbuttonDropdown\">
                            <h6 class=\"p-3 mb-0\">Projects</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-file-outline text-primary\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Software Development</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-web text-info\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">UI Development</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-layers text-danger\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Software Testing</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <p class=\"p-3 mb-0 text-center\">See all projects</p>
                        </div>
                    </li>
                    <li class=\"nav-item nav-settings d-none d-lg-block\">
                        <a class=\"nav-link\" href=\"{{ asset('#')}}\">
                            <i class=\"mdi mdi-view-grid\"></i>
                        </a>
                    </li>
                    <li class=\"nav-item dropdown border-left\">
                        <a class=\"nav-link count-indicator dropdown-toggle\" id=\"messageDropdown\" href=\"{{ asset('#')}}\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"mdi mdi-email\"></i>
                            <span class=\"count bg-success\"></span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"messageDropdown\">
                            <h6 class=\"p-3 mb-0\">Messages</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"{{ asset('assets/images/faces/face4.jpg')}}\" alt=\"image\" class=\"rounded-circle profile-pic\">
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Mark send you a message</p>
                                    <p class=\"text-muted mb-0\"> 1 Minutes ago </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"{{ asset('assets/images/faces/face2.jpg')}}\" alt=\"image\" class=\"rounded-circle profile-pic\">
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Cregh send you a message</p>
                                    <p class=\"text-muted mb-0\"> 15 Minutes ago </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"{{ asset('assets/images/faces/face3.jpg')}}\" alt=\"image\" class=\"rounded-circle profile-pic\">
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Profile picture updated</p>
                                    <p class=\"text-muted mb-0\"> 18 Minutes ago </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <p class=\"p-3 mb-0 text-center\">4 new messages</p>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown border-left\">
                        <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"{{ asset('#')}}\" data-toggle=\"dropdown\">
                            <i class=\"mdi mdi-bell\"></i>
                            <span class=\"count bg-danger\"></span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                            <h6 class=\"p-3 mb-0\">Notifications</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-calendar text-success\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Event today</p>
                                    <p class=\"text-muted ellipsis mb-0\"> Just a reminder that you have an event today </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-settings text-danger\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Settings</p>
                                    <p class=\"text-muted ellipsis mb-0\"> Update dashboard </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-link-variant text-warning\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Launch Admin</p>
                                    <p class=\"text-muted ellipsis mb-0\"> New admin wow! </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <p class=\"p-3 mb-0 text-center\">See all notifications</p>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" id=\"profileDropdown\" href=\"{{ asset('#')}}\" data-toggle=\"dropdown\">
                            <div class=\"navbar-profile\">
                                <img class=\"img-xs rounded-circle\" src=\"{{ asset('assets/images/faces/face15.jpg')}}\" alt=\"\">
                                <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Henry Klein</p>
                                <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                            </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                            <h6 class=\"p-3 mb-0\">Profile</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-settings text-success\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Settings</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-logout text-danger\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Log out</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <p class=\"p-3 mb-0 text-center\">Advanced settings</p>
                        </div>
                    </li>
                </ul>
                <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
                    <span class=\"mdi mdi-format-line-spacing\"></span>
                </button>
            </div>
        </nav>

        <!-- partial -->
        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                <div class=\"row\">
                    <div class=\"col-12 grid-margin stretch-card\">
                        <div class=\"card corona-gradient-card\">
                            <div class=\"card-body py-0 px-0 px-sm-3\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-4 col-sm-3 col-xl-2\">
                                        <img src=\"{{ asset('assets/images/dashboard/Group126@2x.png')}}\" class=\"gradient-corona-img img-fluid\" alt=\"\">
                                    </div>
                                    <div class=\"col-5 col-sm-7 col-xl-8 p-0\">
                                        <h4 class=\"mb-1 mb-sm-0\">Want even more features?</h4>
                                        <p class=\"mb-0 font-weight-normal d-none d-sm-block\">Check out our Pro version with 5 unique layouts!</p>
                                    </div>
                                    <div class=\"col-3 col-sm-2 col-xl-2 pl-0 text-center\">
                        <span>
                          <a href=\"{{ asset('https://www.bootstrapdash.com/product/corona-admin-template/')}}\" target=\"_blank\" class=\"btn btn-outline-light btn-rounded get-started-btn\">Upgrade to PRO</a>
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            <h3 class=\"mb-0\">\$12.34</h3>
                                            <p class=\"text-success ml-2 mb-0 font-weight-medium\">+3.5%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"icon icon-box-success \">
                                            <span class=\"mdi mdi-arrow-top-right icon-item\"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"text-muted font-weight-normal\">Potential growth</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            <h3 class=\"mb-0\">\$17.34</h3>
                                            <p class=\"text-success ml-2 mb-0 font-weight-medium\">+11%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"icon icon-box-success\">
                                            <span class=\"mdi mdi-arrow-top-right icon-item\"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"text-muted font-weight-normal\">Revenue current</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            <h3 class=\"mb-0\">\$12.34</h3>
                                            <p class=\"text-danger ml-2 mb-0 font-weight-medium\">-2.4%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"icon icon-box-danger\">
                                            <span class=\"mdi mdi-arrow-bottom-left icon-item\"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"text-muted font-weight-normal\">Daily Income</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            <h3 class=\"mb-0\">\$31.53</h3>
                                            <p class=\"text-success ml-2 mb-0 font-weight-medium\">+3.5%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"icon icon-box-success \">
                                            <span class=\"mdi mdi-arrow-top-right icon-item\"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"text-muted font-weight-normal\">Expense current</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">Transaction History</h4>
                                <canvas id=\"transaction-history\" class=\"transaction-chart\"></canvas>
                                <div class=\"bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3\">
                                    <div class=\"text-md-center text-xl-left\">
                                        <h6 class=\"mb-1\">Transfer to Paypal</h6>
                                        <p class=\"text-muted mb-0\">07 Jan 2019, 09:12AM</p>
                                    </div>
                                    <div class=\"align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0\">
                                        <h6 class=\"font-weight-bold mb-0\">\$236</h6>
                                    </div>
                                </div>
                                <div class=\"bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3\">
                                    <div class=\"text-md-center text-xl-left\">
                                        <h6 class=\"mb-1\">Tranfer to Stripe</h6>
                                        <p class=\"text-muted mb-0\">07 Jan 2019, 09:12AM</p>
                                    </div>
                                    <div class=\"align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0\">
                                        <h6 class=\"font-weight-bold mb-0\">\$593</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-8 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex flex-row justify-content-between\">
                                    <h4 class=\"card-title mb-1\">Open Projects</h4>
                                    <p class=\"text-muted mb-1\">Your data status</p>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"preview-list\">
                                            <div class=\"preview-item border-bottom\">
                                                <div class=\"preview-thumbnail\">
                                                    <div class=\"preview-icon bg-primary\">
                                                        <i class=\"mdi mdi-file-document\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"preview-item-content d-sm-flex flex-grow\">
                                                    <div class=\"flex-grow\">
                                                        <h6 class=\"preview-subject\">Admin dashboard design</h6>
                                                        <p class=\"text-muted mb-0\">Broadcast web app mockup</p>
                                                    </div>
                                                    <div class=\"mr-auto text-sm-right pt-2 pt-sm-0\">
                                                        <p class=\"text-muted\">15 minutes ago</p>
                                                        <p class=\"text-muted mb-0\">30 tasks, 5 issues </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"preview-item border-bottom\">
                                                <div class=\"preview-thumbnail\">
                                                    <div class=\"preview-icon bg-success\">
                                                        <i class=\"mdi mdi-cloud-download\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"preview-item-content d-sm-flex flex-grow\">
                                                    <div class=\"flex-grow\">
                                                        <h6 class=\"preview-subject\">Wordpress Development</h6>
                                                        <p class=\"text-muted mb-0\">Upload new design</p>
                                                    </div>
                                                    <div class=\"mr-auto text-sm-right pt-2 pt-sm-0\">
                                                        <p class=\"text-muted\">1 hour ago</p>
                                                        <p class=\"text-muted mb-0\">23 tasks, 5 issues </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"preview-item border-bottom\">
                                                <div class=\"preview-thumbnail\">
                                                    <div class=\"preview-icon bg-info\">
                                                        <i class=\"mdi mdi-clock\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"preview-item-content d-sm-flex flex-grow\">
                                                    <div class=\"flex-grow\">
                                                        <h6 class=\"preview-subject\">Project meeting</h6>
                                                        <p class=\"text-muted mb-0\">New project discussion</p>
                                                    </div>
                                                    <div class=\"mr-auto text-sm-right pt-2 pt-sm-0\">
                                                        <p class=\"text-muted\">35 minutes ago</p>
                                                        <p class=\"text-muted mb-0\">15 tasks, 2 issues</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"preview-item border-bottom\">
                                                <div class=\"preview-thumbnail\">
                                                    <div class=\"preview-icon bg-danger\">
                                                        <i class=\"mdi mdi-email-open\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"preview-item-content d-sm-flex flex-grow\">
                                                    <div class=\"flex-grow\">
                                                        <h6 class=\"preview-subject\">Broadcast Mail</h6>
                                                        <p class=\"text-muted mb-0\">Sent release details to team</p>
                                                    </div>
                                                    <div class=\"mr-auto text-sm-right pt-2 pt-sm-0\">
                                                        <p class=\"text-muted\">55 minutes ago</p>
                                                        <p class=\"text-muted mb-0\">35 tasks, 7 issues </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"preview-item\">
                                                <div class=\"preview-thumbnail\">
                                                    <div class=\"preview-icon bg-warning\">
                                                        <i class=\"mdi mdi-chart-pie\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"preview-item-content d-sm-flex flex-grow\">
                                                    <div class=\"flex-grow\">
                                                        <h6 class=\"preview-subject\">UI Design</h6>
                                                        <p class=\"text-muted mb-0\">New application planning</p>
                                                    </div>
                                                    <div class=\"mr-auto text-sm-right pt-2 pt-sm-0\">
                                                        <p class=\"text-muted\">50 minutes ago</p>
                                                        <p class=\"text-muted mb-0\">27 tasks, 4 issues </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4 grid-margin\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5>Revenue</h5>
                                <div class=\"row\">
                                    <div class=\"col-8 col-sm-12 col-xl-8 my-auto\">
                                        <div class=\"d-flex d-sm-block d-md-flex align-items-center\">
                                            <h2 class=\"mb-0\">\$32123</h2>
                                            <p class=\"text-success ml-2 mb-0 font-weight-medium\">+3.5%</p>
                                        </div>
                                        <h6 class=\"text-muted font-weight-normal\">11.38% Since last month</h6>
                                    </div>
                                    <div class=\"col-4 col-sm-12 col-xl-4 text-center text-xl-right\">
                                        <i class=\"icon-lg mdi mdi-codepen text-primary ml-auto\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4 grid-margin\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5>Sales</h5>
                                <div class=\"row\">
                                    <div class=\"col-8 col-sm-12 col-xl-8 my-auto\">
                                        <div class=\"d-flex d-sm-block d-md-flex align-items-center\">
                                            <h2 class=\"mb-0\">\$45850</h2>
                                            <p class=\"text-success ml-2 mb-0 font-weight-medium\">+8.3%</p>
                                        </div>
                                        <h6 class=\"text-muted font-weight-normal\"> 9.61% Since last month</h6>
                                    </div>
                                    <div class=\"col-4 col-sm-12 col-xl-4 text-center text-xl-right\">
                                        <i class=\"icon-lg mdi mdi-wallet-travel text-danger ml-auto\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4 grid-margin\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5>Purchase</h5>
                                <div class=\"row\">
                                    <div class=\"col-8 col-sm-12 col-xl-8 my-auto\">
                                        <div class=\"d-flex d-sm-block d-md-flex align-items-center\">
                                            <h2 class=\"mb-0\">\$2039</h2>
                                            <p class=\"text-danger ml-2 mb-0 font-weight-medium\">-2.1% </p>
                                        </div>
                                        <h6 class=\"text-muted font-weight-normal\">2.27% Since last month</h6>
                                    </div>
                                    <div class=\"col-4 col-sm-12 col-xl-4 text-center text-xl-right\">
                                        <i class=\"icon-lg mdi mdi-monitor text-success ml-auto\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row \">
                    <div class=\"col-12 grid-margin\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">Order Status</h4>
                                <div class=\"table-responsive\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <th>
                                                <div class=\"form-check form-check-muted m-0\">
                                                    <label class=\"form-check-label\">
                                                        <input type=\"checkbox\" class=\"form-check-input\">
                                                    </label>
                                                </div>
                                            </th>
                                            <th> Client Name </th>
                                            <th> Order No </th>
                                            <th> Product Cost </th>
                                            <th> Project </th>
                                            <th> Payment Mode </th>
                                            <th> Start Date </th>
                                            <th> Payment Status </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class=\"form-check form-check-muted m-0\">
                                                    <label class=\"form-check-label\">
                                                        <input type=\"checkbox\" class=\"form-check-input\">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src=\"{{ asset('assets/images/faces/face1.jpg')}}\" alt=\"image\" />
                                                <span class=\"pl-2\">Henry Klein</span>
                                            </td>
                                            <td> 02312 </td>
                                            <td> \$14,500 </td>
                                            <td> Dashboard </td>
                                            <td> Credit card </td>
                                            <td> 04 Dec 2019 </td>
                                            <td>
                                                <div class=\"badge badge-outline-success\">Approved</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-check form-check-muted m-0\">
                                                    <label class=\"form-check-label\">
                                                        <input type=\"checkbox\" class=\"form-check-input\">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src=\"{{ asset('assets/images/faces/face2.jpg')}}\" alt=\"image\" />
                                                <span class=\"pl-2\">Estella Bryan</span>
                                            </td>
                                            <td> 02312 </td>
                                            <td> \$14,500 </td>
                                            <td> Website </td>
                                            <td> Cash on delivered </td>
                                            <td> 04 Dec 2019 </td>
                                            <td>
                                                <div class=\"badge badge-outline-warning\">Pending</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-check form-check-muted m-0\">
                                                    <label class=\"form-check-label\">
                                                        <input type=\"checkbox\" class=\"form-check-input\">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src=\"{{ asset('assets/images/faces/face5.jpg')}}\" alt=\"image\" />
                                                <span class=\"pl-2\">Lucy Abbott</span>
                                            </td>
                                            <td> 02312 </td>
                                            <td> \$14,500 </td>
                                            <td> App design </td>
                                            <td> Credit card </td>
                                            <td> 04 Dec 2019 </td>
                                            <td>
                                                <div class=\"badge badge-outline-danger\">Rejected</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-check form-check-muted m-0\">
                                                    <label class=\"form-check-label\">
                                                        <input type=\"checkbox\" class=\"form-check-input\">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src=\"{{ asset('assets/images/faces/face3.jpg')}}\" alt=\"image\" />
                                                <span class=\"pl-2\">Peter Gill</span>
                                            </td>
                                            <td> 02312 </td>
                                            <td> \$14,500 </td>
                                            <td> Development </td>
                                            <td> Online Payment </td>
                                            <td> 04 Dec 2019 </td>
                                            <td>
                                                <div class=\"badge badge-outline-success\">Approved</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-check form-check-muted m-0\">
                                                    <label class=\"form-check-label\">
                                                        <input type=\"checkbox\" class=\"form-check-input\">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src=\"{{ asset('assets/images/faces/face4.jpg')}}\" alt=\"image\" />
                                                <span class=\"pl-2\">Sallie Reyes</span>
                                            </td>
                                            <td> 02312 </td>
                                            <td> \$14,500 </td>
                                            <td> Website </td>
                                            <td> Credit card </td>
                                            <td> 04 Dec 2019 </td>
                                            <td>
                                                <div class=\"badge badge-outline-success\">Approved</div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 col-xl-4 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex flex-row justify-content-between\">
                                    <h4 class=\"card-title\">Messages</h4>
                                    <p class=\"text-muted mb-1 small\">View all</p>
                                </div>
                                <div class=\"preview-list\">
                                    <div class=\"preview-item border-bottom\">
                                        <div class=\"preview-thumbnail\">
                                            <img src=\"{{ asset('assets/images/faces/face6.jpg')}}\" alt=\"image\" class=\"rounded-circle\" />
                                        </div>
                                        <div class=\"preview-item-content d-flex flex-grow\">
                                            <div class=\"flex-grow\">
                                                <div class=\"d-flex d-md-block d-xl-flex justify-content-between\">
                                                    <h6 class=\"preview-subject\">Leonard</h6>
                                                    <p class=\"text-muted text-small\">5 minutes ago</p>
                                                </div>
                                                <p class=\"text-muted\">Well, it seems to be working now.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"preview-item border-bottom\">
                                        <div class=\"preview-thumbnail\">
                                            <img src=\"{{ asset('assets/images/faces/face8.jpg')}}\" alt=\"image\" class=\"rounded-circle\" />
                                        </div>
                                        <div class=\"preview-item-content d-flex flex-grow\">
                                            <div class=\"flex-grow\">
                                                <div class=\"d-flex d-md-block d-xl-flex justify-content-between\">
                                                    <h6 class=\"preview-subject\">Luella Mills</h6>
                                                    <p class=\"text-muted text-small\">10 Minutes Ago</p>
                                                </div>
                                                <p class=\"text-muted\">Well, it seems to be working now.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"preview-item border-bottom\">
                                        <div class=\"preview-thumbnail\">
                                            <img src=\"{{ asset('assets/images/faces/face9.jpg')}}\" alt=\"image\" class=\"rounded-circle\" />
                                        </div>
                                        <div class=\"preview-item-content d-flex flex-grow\">
                                            <div class=\"flex-grow\">
                                                <div class=\"d-flex d-md-block d-xl-flex justify-content-between\">
                                                    <h6 class=\"preview-subject\">Ethel Kelly</h6>
                                                    <p class=\"text-muted text-small\">2 Hours Ago</p>
                                                </div>
                                                <p class=\"text-muted\">Please review the tickets</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"preview-item border-bottom\">
                                        <div class=\"preview-thumbnail\">
                                            <img src=\"{{ asset('assets/images/faces/face11.jpg')}}\" alt=\"image\" class=\"rounded-circle\" />
                                        </div>
                                        <div class=\"preview-item-content d-flex flex-grow\">
                                            <div class=\"flex-grow\">
                                                <div class=\"d-flex d-md-block d-xl-flex justify-content-between\">
                                                    <h6 class=\"preview-subject\">Herman May</h6>
                                                    <p class=\"text-muted text-small\">4 Hours Ago</p>
                                                </div>
                                                <p class=\"text-muted\">Thanks a lot. It was easy to fix it .</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-xl-4 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">Portfolio Slide</h4>
                                <div class=\"owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel\" id=\"owl-carousel-basic\">
                                    <div class=\"item\">
                                        <img src=\"{{ asset('assets/images/dashboard/Rectangle.jpg')}}\" alt=\"\">
                                    </div>
                                    <div class=\"item\">
                                        <img src=\"{{ asset('assets/images/dashboard/Img_5.jpg')}}\" alt=\"\">
                                    </div>
                                    <div class=\"item\">
                                        <img src=\"{{ asset('assets/images/dashboard/img_6.jpg')}}\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"d-flex py-4\">
                                    <div class=\"preview-list w-100\">
                                        <div class=\"preview-item p-0\">
                                            <div class=\"preview-thumbnail\">
                                                <img src=\"{{ asset('assets/images/faces/face12.jpg')}}\" class=\"rounded-circle\" alt=\"\">
                                            </div>
                                            <div class=\"preview-item-content d-flex flex-grow\">
                                                <div class=\"flex-grow\">
                                                    <div class=\"d-flex d-md-block d-xl-flex justify-content-between\">
                                                        <h6 class=\"preview-subject\">CeeCee Bass</h6>
                                                        <p class=\"text-muted text-small\">4 Hours Ago</p>
                                                    </div>
                                                    <p class=\"text-muted\">Well, it seems to be working now.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class=\"text-muted\">Well, it seems to be working now. </p>
                                <div class=\"progress progress-md portfolio-progress\">
                                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 50%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-xl-4 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">To do list</h4>
                                <div class=\"add-items d-flex\">
                                    <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"enter task..\">
                                    <button class=\"add btn btn-primary todo-list-add-btn\">Add</button>
                                </div>
                                <div class=\"list-wrapper\">
                                    <ul class=\"d-flex flex-column-reverse text-white todo-list todo-list-custom\">
                                        <li>
                                            <div class=\"form-check form-check-primary\">
                                                <label class=\"form-check-label\">
                                                    <input class=\"checkbox\" type=\"checkbox\"> Create invoice </label>
                                            </div>
                                            <i class=\"remove mdi mdi-close-box\"></i>
                                        </li>
                                        <li>
                                            <div class=\"form-check form-check-primary\">
                                                <label class=\"form-check-label\">
                                                    <input class=\"checkbox\" type=\"checkbox\"> Meeting with Alita </label>
                                            </div>
                                            <i class=\"remove mdi mdi-close-box\"></i>
                                        </li>
                                        <li class=\"completed\">
                                            <div class=\"form-check form-check-primary\">
                                                <label class=\"form-check-label\">
                                                    <input class=\"checkbox\" type=\"checkbox\" checked> Prepare for presentation </label>
                                            </div>
                                            <i class=\"remove mdi mdi-close-box\"></i>
                                        </li>
                                        <li>
                                            <div class=\"form-check form-check-primary\">
                                                <label class=\"form-check-label\">
                                                    <input class=\"checkbox\" type=\"checkbox\"> Plan weekend outing </label>
                                            </div>
                                            <i class=\"remove mdi mdi-close-box\"></i>
                                        </li>
                                        <li>
                                            <div class=\"form-check form-check-primary\">
                                                <label class=\"form-check-label\">
                                                    <input class=\"checkbox\" type=\"checkbox\"> Pick up kids from school </label>
                                            </div>
                                            <i class=\"remove mdi mdi-close-box\"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">Visitors by Countries</h4>
                                <div class=\"row\">
                                    <div class=\"col-md-5\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table\">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <i class=\"flag-icon flag-icon-us\"></i>
                                                    </td>
                                                    <td>USA</td>
                                                    <td class=\"text-right\"> 1500 </td>
                                                    <td class=\"text-right font-weight-medium\"> 56.35% </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class=\"flag-icon flag-icon-de\"></i>
                                                    </td>
                                                    <td>Germany</td>
                                                    <td class=\"text-right\"> 800 </td>
                                                    <td class=\"text-right font-weight-medium\"> 33.25% </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class=\"flag-icon flag-icon-au\"></i>
                                                    </td>
                                                    <td>Australia</td>
                                                    <td class=\"text-right\"> 760 </td>
                                                    <td class=\"text-right font-weight-medium\"> 15.45% </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class=\"flag-icon flag-icon-gb\"></i>
                                                    </td>
                                                    <td>United Kingdom</td>
                                                    <td class=\"text-right\"> 450 </td>
                                                    <td class=\"text-right font-weight-medium\"> 25.00% </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class=\"flag-icon flag-icon-ro\"></i>
                                                    </td>
                                                    <td>Romania</td>
                                                    <td class=\"text-right\"> 620 </td>
                                                    <td class=\"text-right font-weight-medium\"> 10.25% </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class=\"flag-icon flag-icon-br\"></i>
                                                    </td>
                                                    <td>Brasil</td>
                                                    <td class=\"text-right\"> 230 </td>
                                                    <td class=\"text-right font-weight-medium\"> 75.00% </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class=\"col-md-7\">
                                        <div id=\"audience-map\" class=\"vector-map\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class=\"footer\">
                <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                    <span class=\"text-muted d-block text-center text-sm-left d-sm-inline-block\">Copyright © bootstrapdash.com 2020</span>
                    <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\"> Free <a href=\"{{ asset('https://www.bootstrapdash.com/bootstrap-admin-template/')}}\" target=\"_blank\">Bootstrap admin templates</a> from Bootstrapdash.com</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

{% endblock %}
<!-- container-scroller -->
<!-- plugins:js -->
<script src=\"{{ asset('assets/vendors/js/vendor.bundle.base.js')}}\"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src=\"{{ asset('assets/vendors/chart.js/Chart.min.js')}}\"></script>
<script src=\"{{ asset('assets/vendors/progressbar.js/progressbar.min.js')}}\"></script>
<script src=\"{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js')}}\"></script>
<script src=\"{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}\"></script>
<script src=\"{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js')}}\"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src=\"{{ asset('assets/js/off-canvas.js')}}\"></script>
<script src=\"{{ asset('assets/js/hoverable-collapse.js')}}\"></script>
<script src=\"{{ asset('assets/js/misc.js')}}\"></script>
<script src=\"{{ asset('assets/js/settings.js')}}\"></script>
<script src=\"{{ asset('assets/js/todolist.js')}}\"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src=\"{{ asset('assets/js/dashboard.js')}}\"></script>
<!-- End custom js for this page -->
</body>
</html>", "back.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\back.html.twig");
    }
}
