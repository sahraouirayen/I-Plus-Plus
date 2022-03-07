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

/* act/side.html.twig */
class __TwigTemplate_6d6c451d55f5911c93ee995156d66c1cdbfbcb692be8285210688c7e5694b7bb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "act/side.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "act/side.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>

<!-- sidebar -->

    <div class=\" sidebar pt-5 pt-lg-0\">
        <!-- widget -->
        <div class=\"widget-item\">
            <form class=\"search-widget\">
                <label>
                    <input type=\"text\" placeholder=\"Search\">
                </label>
                <button><i class=\"fa fa-search\"></i></button>
            </form>
        </div>
        <!-- widget -->
        <div class=\"widget-item\">
            <h4 class=\"widget-title\">Latest Posts</h4>
            <div class=\"latest-blog\">
                <div class=\"lb-item\">
                    <div class=\"lb-thumb set-bg\" data-setbg=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/latest-blog/1.jpg"), "html", null, true);
        echo "\"></div>
                    <div class=\"lb-content\">
                        <div class=\"lb-date\">June 21, 2018</div>
                        <p>Ipsum dolor sit amet, consectetur adipisc ing consecips</p>
                        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"lb-author\">By Admin</a>
                    </div>
                </div>
                <div class=\"lb-item\">
                    <div class=\"lb-thumb set-bg\" data-setbg=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/latest-blog/2.jpg"), "html", null, true);
        echo "\"></div>
                    <div class=\"lb-content\">
                        <div class=\"lb-date\">June 21, 2018</div>
                        <p>Ipsum dolor sit amet, consectetur adipisc ing consecips</p>
                        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"lb-author\">By Admin</a>
                    </div>
                </div>
                <div class=\"lb-item\">
                    <div class=\"lb-thumb set-bg\" data-setbg=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/latest-blog/3.jpg"), "html", null, true);
        echo "\"></div>
                    <div class=\"lb-content\">
                        <div class=\"lb-date\">June 21, 2018</div>
                        <p>Ipsum dolor sit amet, consectetur adipisc ing consecips</p>
                        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"lb-author\">By Admin</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- widget -->
        <div class=\"widget-item\">
            <h4 class=\"widget-title\">Top Comments</h4>
            <div class=\"top-comment\">
                <div class=\"tc-item\">
                    <div class=\"tc-thumb set-bg\" data-setbg=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/authors/1.jpg"), "html", null, true);
        echo "\"></div>
                    <div class=\"tc-content\">
                        <p><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">James Smith</a> <span>on</span> Lorem consec ipsum dolor sit amet, co</p>
                        <div class=\"tc-date\">June 21, 2018</div>
                    </div>
                </div>
                <div class=\"tc-item\">
                    <div class=\"tc-thumb set-bg\" data-setbg=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/authors/2.jpg"), "html", null, true);
        echo "\"></div>
                    <div class=\"tc-content\">
                        <p><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Michael James</a> <span>on</span>Cras sit amet sapien aliquam</p>
                        <div class=\"tc-date\">June 21, 2018</div>
                    </div>
                </div>
                <div class=\"tc-item\">
                    <div class=\"tc-thumb set-bg\" data-setbg=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/authors/3.jpg"), "html", null, true);
        echo "\"></div>
                    <div class=\"tc-content\">
                        <p><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Justin More</a> <span>on</span> Lorem ipsum dolor consecsit amet, co</p>
                        <div class=\"tc-date\">June 21, 2018</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- widget -->
        <div class=\"widget-item\">
            <div class=\"feature-item set-bg\" data-setbg=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/features/1.jpg"), "html", null, true);
        echo "\">
                <span class=\"cata new\">new</span>
                <div class=\"fi-content text-white\">
                    <h5><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Suspendisse ut justo tem por, rutrum</a></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"fi-comment\">3 Comments</a>
                </div>
            </div>
        </div>
        <!-- widget -->
        <div class=\"widget-item\">
            <div class=\"review-item\">
                <div class=\"review-cover set-bg\" data-setbg=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/review/1.jpg"), "html", null, true);
        echo "\">
                    <div class=\"score yellow\">9.3</div>
                </div>
                <div class=\"review-text\">
                    <h5>Assasin’’s Creed</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "act/side.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 87,  166 => 80,  161 => 78,  155 => 75,  144 => 67,  139 => 65,  131 => 60,  126 => 58,  118 => 53,  113 => 51,  100 => 41,  93 => 37,  86 => 33,  79 => 29,  72 => 25,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>

<!-- sidebar -->

    <div class=\" sidebar pt-5 pt-lg-0\">
        <!-- widget -->
        <div class=\"widget-item\">
            <form class=\"search-widget\">
                <label>
                    <input type=\"text\" placeholder=\"Search\">
                </label>
                <button><i class=\"fa fa-search\"></i></button>
            </form>
        </div>
        <!-- widget -->
        <div class=\"widget-item\">
            <h4 class=\"widget-title\">Latest Posts</h4>
            <div class=\"latest-blog\">
                <div class=\"lb-item\">
                    <div class=\"lb-thumb set-bg\" data-setbg=\"{{ asset('img/latest-blog/1.jpg')}}\"></div>
                    <div class=\"lb-content\">
                        <div class=\"lb-date\">June 21, 2018</div>
                        <p>Ipsum dolor sit amet, consectetur adipisc ing consecips</p>
                        <a href=\"{{ asset('#')}}\" class=\"lb-author\">By Admin</a>
                    </div>
                </div>
                <div class=\"lb-item\">
                    <div class=\"lb-thumb set-bg\" data-setbg=\"{{ asset('img/latest-blog/2.jpg')}}\"></div>
                    <div class=\"lb-content\">
                        <div class=\"lb-date\">June 21, 2018</div>
                        <p>Ipsum dolor sit amet, consectetur adipisc ing consecips</p>
                        <a href=\"{{ asset('#')}}\" class=\"lb-author\">By Admin</a>
                    </div>
                </div>
                <div class=\"lb-item\">
                    <div class=\"lb-thumb set-bg\" data-setbg=\"{{ asset('img/latest-blog/3.jpg')}}\"></div>
                    <div class=\"lb-content\">
                        <div class=\"lb-date\">June 21, 2018</div>
                        <p>Ipsum dolor sit amet, consectetur adipisc ing consecips</p>
                        <a href=\"{{ asset('#')}}\" class=\"lb-author\">By Admin</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- widget -->
        <div class=\"widget-item\">
            <h4 class=\"widget-title\">Top Comments</h4>
            <div class=\"top-comment\">
                <div class=\"tc-item\">
                    <div class=\"tc-thumb set-bg\" data-setbg=\"{{ asset('img/authors/1.jpg')}}\"></div>
                    <div class=\"tc-content\">
                        <p><a href=\"{{ asset('#')}}\">James Smith</a> <span>on</span> Lorem consec ipsum dolor sit amet, co</p>
                        <div class=\"tc-date\">June 21, 2018</div>
                    </div>
                </div>
                <div class=\"tc-item\">
                    <div class=\"tc-thumb set-bg\" data-setbg=\"{{ asset('img/authors/2.jpg')}}\"></div>
                    <div class=\"tc-content\">
                        <p><a href=\"{{ asset('#')}}\">Michael James</a> <span>on</span>Cras sit amet sapien aliquam</p>
                        <div class=\"tc-date\">June 21, 2018</div>
                    </div>
                </div>
                <div class=\"tc-item\">
                    <div class=\"tc-thumb set-bg\" data-setbg=\"{{ asset('img/authors/3.jpg')}}\"></div>
                    <div class=\"tc-content\">
                        <p><a href=\"{{ asset('#')}}\">Justin More</a> <span>on</span> Lorem ipsum dolor consecsit amet, co</p>
                        <div class=\"tc-date\">June 21, 2018</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- widget -->
        <div class=\"widget-item\">
            <div class=\"feature-item set-bg\" data-setbg=\"{{ asset('img/features/1.jpg')}}\">
                <span class=\"cata new\">new</span>
                <div class=\"fi-content text-white\">
                    <h5><a href=\"{{ asset('#')}}\">Suspendisse ut justo tem por, rutrum</a></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    <a href=\"{{ asset('#')}}\" class=\"fi-comment\">3 Comments</a>
                </div>
            </div>
        </div>
        <!-- widget -->
        <div class=\"widget-item\">
            <div class=\"review-item\">
                <div class=\"review-cover set-bg\" data-setbg=\"{{ asset('img/review/1.jpg')}}\">
                    <div class=\"score yellow\">9.3</div>
                </div>
                <div class=\"review-text\">
                    <h5>Assasin’’s Creed</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>", "act/side.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\act\\side.html.twig");
    }
}
