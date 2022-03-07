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
class __TwigTemplate_9bd1aa7dcb6483473ae11b051558bc9ce857bc1d31eb9f0cb4f15d103f14fc1a extends Template
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

        <!-- widget -->
        <div class=\"widget-item\">
            <h4 class=\"widget-title\">Most Vues</h4>
            <div class=\"latest-blog\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualitesvu"]) || array_key_exists("actualitesvu", $context) ? $context["actualitesvu"] : (function () { throw new RuntimeError('Variable "actualitesvu" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 14
            echo "                <div class=\"lb-item\">
                    <div class=\"lb-thumb set-bg\" data-setbg=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["actualite"], "imageAct", [], "any", false, false, false, 15))), "html", null, true);
            echo "\"></div>
                    <div class=\"lb-content\">

                        <div class=\"lb-date\"> ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "titreActualite", [], "any", false, false, false, 18), "html", null, true);
            echo "</div>
                        <p>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "Description", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
                        <p>";
            // line 20
            ((twig_get_attribute($this->env, $this->source, $context["actualite"], "dateAct", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "dateAct", [], "any", false, false, false, 20), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
                        <p>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "Vu", [], "any", false, false, false, 21), "html", null, true);
            echo "Vues</p>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </div>
        </div>
        <div class=\"widget-item\">
            <h4 class=\"widget-title\">Top Liked</h4>
            <div class=\"top-comment\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualiteslike"]) || array_key_exists("actualiteslike", $context) ? $context["actualiteslike"] : (function () { throw new RuntimeError('Variable "actualiteslike" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 31
            echo "                <div class=\"tc-item\">
                    <div class=\"tc-thumb set-bg\" data-setbg=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["actualite"], "imageAct", [], "any", false, false, false, 32))), "html", null, true);
            echo "\"></div>
                    <div class=\"tc-content\">
                        <p> ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "titreActualite", [], "any", false, false, false, 34), "html", null, true);
            echo "</p>
                        <p> ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "RatingAct", [], "any", false, false, false, 35), "html", null, true);
            echo "Likes</p>
                        <div class=\"tc-date\">";
            // line 36
            ((twig_get_attribute($this->env, $this->source, $context["actualite"], "dateAct", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "dateAct", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
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
        return array (  129 => 40,  119 => 36,  115 => 35,  111 => 34,  106 => 32,  103 => 31,  99 => 30,  92 => 25,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  64 => 15,  61 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>

<!-- sidebar -->

    <div class=\" sidebar pt-5 pt-lg-0\">
        <!-- widget -->

        <!-- widget -->
        <div class=\"widget-item\">
            <h4 class=\"widget-title\">Most Vues</h4>
            <div class=\"latest-blog\">
                {% for actualite in actualitesvu %}
                <div class=\"lb-item\">
                    <div class=\"lb-thumb set-bg\" data-setbg=\"{{ asset('uploads/'~actualite.imageAct)}}\"></div>
                    <div class=\"lb-content\">

                        <div class=\"lb-date\"> {{ actualite.titreActualite }}</div>
                        <p>{{ actualite.Description }}</p>
                        <p>{{ actualite.dateAct ? actualite.dateAct|date('Y-m-d') : '' }}</p>
                        <p>{{ actualite.Vu }}Vues</p>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
        <div class=\"widget-item\">
            <h4 class=\"widget-title\">Top Liked</h4>
            <div class=\"top-comment\">
                {% for actualite in actualiteslike %}
                <div class=\"tc-item\">
                    <div class=\"tc-thumb set-bg\" data-setbg=\"{{ asset('uploads/'~actualite.imageAct)}}\"></div>
                    <div class=\"tc-content\">
                        <p> {{ actualite.titreActualite}}</p>
                        <p> {{actualite.RatingAct}}Likes</p>
                        <div class=\"tc-date\">{{ actualite.dateAct ? actualite.dateAct|date('Y-m-d') : '' }}</div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>


    </div>
</div>
</div>
</div>
</section>", "act/side.html.twig", "C:\\Users\\21695\\Documents\\I-Plus-Plus\\templates\\act\\side.html.twig");
    }
}
