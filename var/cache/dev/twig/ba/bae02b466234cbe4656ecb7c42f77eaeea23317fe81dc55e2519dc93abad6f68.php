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

/* prod/facture.html.twig */
class __TwigTemplate_ac8d38aaddf7542387b3008f2c830a995c963c2888a9344f12b3e63ad72d285b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prod/facture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prod/facture.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <div>
        <img style=\"vertical-align:middle\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKgAAACoCAYAAAB0S6W0AAAUJUlEQVR42u2daZQcV3WAv1tV3TOjkUaasSzbkiwfZIwXNuF9w5jNxCRwIIGcJCYk7FEE5MQLsQQ2i5FMMDYnOMQsB0McgwnZfdiDHTAxYIwIxpY32RJgW7IsaTQaa5Zeqm5+vO6Z6pnurprpdcz9zpFm6TdV775367737rv3FRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRjGMwNp582Kl2wCCIAVwEqgBxgFngAOABpcu6XTbWJ0EW1R0OKlmwB84IUofwacDRwLLAL2AduBuxC+TMS9eBB8whTVaIOCFi/dCNALvBn4G2AtKhDFaiCAKMA9wPuBbwNh8ImrO90+RodpqYIWL94IiuDzF8DVwFIEohUR4coimgVvTPAf95EDXrk2O4B3ALcTQXCdKelvM0GrLly8bBOgAKejbASWkoH8GTny5+SIhiLwQAqCt8en5/YegvsyoKwFrkDYhs+eTjeQ0Vm81l06AjQAvQjRo/GU/Jk5chdOEi2Ppu6sGSVcXWTidRMUjy8ACqJng15YUnDjt5gWKigAA8C5KETLI/Jn59BsdaXTgYj8OXm3rocs8GI8pPi+yzvdRkYHaYmCDut6/GsGyL84d7726lqAaFVINBjV/bvoiJDosFIZ4ViUoU43kNFZmq6gw7q+9PU3ryieUNxMVpeCon2auCTTjKI9EW5o137QXhvmf7tp1RB/iiCfioaiEzRwCiYjgoT1NVQmBRmTsutpP8Joe7cSjG6jaav4suXEzTsvA07UxYoOKQyD/4SP95hPuLZYuzK/DvBGptxNDwBPd7qBjM7SbDdTFueMfz2A9iiFEwv4v/KQQ9Dz/SyTS6PpeWYM/wmf7P9mIFQQnga+BxB87OOdbqOqFC9/H7hHaTGwhNkTGMU9YIcA7VY5EuTLAktLX2eSA0aAYitla8oAGrOevwf8I0wvbrwDHn1f7cX/lQ8ehGtD8mfnKa4JIQsyLgQ7fLJ3ZvF2T804/gnYADzdjR1b6rxFwBuBNwDPZXYn5oF7gS8CX6fFHdk02TZeBqEPXnQy8DbgHGB5laK7gW8CnwV2tUq2hi1oTDlfBHwEKlfe0WBE7lU5ev+rB2+Ph/+oR++uXnQgQn2QAnijnutOt915J/Bx4Ong6mtaInQjFDdeBkEBisFbgKtRltRcx3k8C3ghrjPv6nTdU+OHxwGfAU6jluNFWIVwMk6HPljceFmxFf3VrCF+ELgSp6SzKK4NmXhjjp7/yRA84rvF0GRsfeYWRePArcBVeNH9RK120TZAMRgCfh9Yon1KtCKavdycFPw9HihrgFeykBQUXgqcjEB0ZIQumv0Eens8ZEI84NXA9cCTrahIQwpasp49wLtLFa1JuDpk4g0RwUP+vp7bs3d4++QohGW4ULutwI+BO4ADRB7daD2BspUfAI4ggmhlyPgf5VwnlvvRh2Cnz6IbeyFCgNWdrnZqPC0/VD4ZyL0yT+GkIhWWVGHRTb0E233wWAn0tao681bQknL6wEXAJVSfSFegfVosrCte7z3lXdN7WybQgAA3uE8CYbDlE62SsykM63p2sts7+p8PH8xsCwIUREqtMNOCeqXPFgjlqdoIhxYv29zfL+PinjcPN8L5scIludsh3rwU9Cl9F0XCXh//nQKbcCu9JBT4VoR+bvKC3ET/q/6uDeI1nyGWHD/5ssJn/D1yrPekV6eX1FnbBaSkgO8hm/KnFt7a88NM6QGrMcGW9sg3JwUNP3AxQL9cznNyZxV/t3hcdKn6qZQTCRnO3OffkbnHPwUPKV1r6mOcJf0V8ChQ9D96XWslnwOx0WKdIOcS6Fr1ym2XsNO1ABS0JN8q3BriVA0YiMXo1petGxQ0vGJKmVYDH9EsF2a3BiuyW+ewE+X21f8Wv+bfFHAK+nng+vCKiyf9q7pHSXFB11cCr53qlCQLsrAs6Pm4tu9zVS4pZ636l61rNyioq5AKKu8F3gJAlPov4yJJHYOTweM43C7U/1Fy1HeaknUZAI4G+mPtQWLvdLlylmTL4PycK6ZqLKSwju15+NIpqDP1SxE9HwVdpuSfG0HQpEAOAW9YyNzng3I4cBbwvfDKv8b/yCdb3wrJvAlnPQfjdZ6ah9VkQVjQo4GbgedTDnZMO3/uljmo5AGhXzP0IhANKrnzCmiTnAsKZB71yDzgQwikW3S1lJJ1KduRJTgrE1vLav1l+pQCd5+GxjZXwCnlctyW7ez615Mv/rVFJCrosK5nmIn+nm3+6X23ZpbIJDQ7BG5axq4LrTsB2AKsY6YjaWoOltSJXSdTmQC4HBc3UemnFU1R76TRo3mVTESQNeFq/WQ0GB3j74o/Ok2uYPctKpYAZwJHzv6oO4bABvCA44GT69a9lhIKnR3iS8NAFrhI4OUIQ+kmzw3QBrdFEiW5y2nSL8MpafV6TnVgtU5MWAV3Vr4zgD8ETq1aKE0/S3u89UkWNABeC7wOUVBN6JQGacOQkZIeXJTSK2sXSWlBu5Pn46LFeurKl0gHhvjYBPpY3Gp6FYD6uCWCgEy4RU2tBLhaskQDEB5Zo2OlsxYn5k46BzgC53apTSor0zl5qsgGzhG/FjiFutkUuiAs6O8Afz9V5V6IDlP83eDtg75b5xhtpFB4njLx6hDN1BO6tQIncDTwaeBZiSWTFkltcmTPAcHFd25IVTJpDgrtn4PG5l8rmbkw8CD/ggh/l4c3AhRT3qH8JCpuilC3bMfnbSnnLqViSav0zj9wFTWWlGOyxv6vKxt0xII+B/gacMzMD4rHKuOvjwgeB+duSkBAxoTM/YKMk35IbJHQ4eYNAL0g64DTcUO5a+nNaDSoKwrPYYhM/c6RScGbizxwGnBVuPndc5VMcJFe94LeSRTtRTz8D3y6umyqgsgakLNwLrIMoGwBBCmcqGdGg8k66v86ZT+4Motx0WwH5iEfwOPAnag+gFD0318pWwAVc5QAl8qwDGdJZ1UoXKWEq9Lf3X9KCXZ4yASk863NQ8QUhFs2gItbvAzV9Tjn9PQDKuCNQM9PSj8k4WlyTuz08Hgytdw5ySgwjvADfO8S4MFwy4fxN30wJttfAUUQORe4BtUX4PqvwsWc2QZoCtnSuJCmh/9FpJk21KYAPI7HZuBL4ZYNob9pWknjFnQR7oCvC6CJBybEdTLJddr6RcVZwHsRDqtZwk9/MTduar0PmyGP4GIAXg1sB70U9syYYBUAloBcDJxRP8BjjneuJ3xzFkkZ3Jx/I/AjXDbvFHEF9XHD+wkN33KWoLH5mtQpk9goDdbBWbFlCOROV4praMhTIgrRItAqodrhchj7g7lH1MzEm4SeOwVvGBDW4Ua3fZUVAeBI0JOIIFwFuTMUbSBfQnDGNjqy+oeT5yneqZrKINe7R+YhIfNLQDgCl3xYqaDDuv4o4C9x213PbbhFq9VCUrgtoLVKKgpKL+DhQXgUFI9twX1KaB8Un934dbwxyG6dapdeqtp4BSVAyCKgS5xsNb0lTSBcVQ6baFC+YSXjdMOnyrQywEXo/DHO79k60ijdtBI31QM8rOsZgQv6b+X8zIM0aeRtE+WWqNEuw7qeA7Cq5xH+tO+bLJMxunj7v4Z8dYIxWnY+aBzx1E1XEiJ7RFSR5ulOafHnAb7A66MV+nJ5uNwgC0ZFEVEVkHg0bTwiSeC4aBnvpE+XTXlLFoh8U0HCNSKF26KglTsTNRqudTku5wIfAJ5XUZep5lkgzGobARcnsFngpQgD0+UWmly1+71NCkp6XWh+2y7HvbShv+L6C6UPK+fwM2sd4A6GmH74IF20f7dQ6fueVek2KOjMzZl6Qb7NmTyVhr9B4O3AeZRSorWP8mKJzIPg7dXGVvFAtEzInyizVszeKGTvjeaTGlNxA8mj3qEpCzMC5HKnCcCFwGtwe+topuRNEMXfD70/cie3NDQf9aFwvBAeNqPPFLLbFH+4gVV8aU4d7MKlEzlf2fDMYkHplzfjgiPSihPhVv2vIk3Sftro8ub6QQeAPwdOKv+iuNIFrHgHILNdyWxv8IGIoHiMkH+2P+tR90aV3rsUonndI/ZHpdmnRxH4PpF3MLdOwE1dpiaiUT8UV4O/18nXc3eDEWcKZITwcCGs4jXOPhAR7EyxWZFOPoAHgV/OLBgMyQ1PAh+ay9VLFuo8XORPCgUt1ych+rzBOWgsTeNFuEDjiljOcLkwebZH708ivFF1j9l87xdfXVeNzsLtNsV/Tr5mWas0/kvcKXn/KTm+MLxRlovbcKj0V/uQO0XwDinBY1pO02lINvXq+a1xyunFfk6+ZlTxk/u2CDwEfAhfHqdYqSPtmYOmtqBNWSQJzrK8vdon+ROF8EgPb5T5Db8CMq5OyUdSpB0rFNZ65Nd5SQZNvf36lb4fRLfgzbrqfuD+0Xf4B8UFUX+JeAJfiWiZMH6Bjz+sSG7+DZh5MCL7UBQLhqkiZOkz7REmXuKh/XVCUdypBzt6fxZd5e/WvTH5yrEGO4AdhIp36ecr/rQRBZ2DKqVRvMaG21g850rcbkvNWodDQtjAZq43Cvrz9OWjASg8q24D3K/wWdbKHbnTvF8MyQ3VZPNx06o11NmQ1T4ormrsKfdTvfyn1KeBUjxaiJbWvOcEcKPCf+eP978HjB02Q756tN6CxlMjEk+qaNiCXgB8CurstTdNLk0eFUrySPLD94S4c1UPDtXuvEHgRtJOq5oiH/WH+KTMVkcB+LbA14fmoJhl2jTEp8wAnMciqWRdynL046xn4kFmzaEsV5VhMB7wW1umCeB24Dbc0T/VZPNK8vXh0rEXtUW0VBH1iVvT24AfAI/NtxptcjOlbJD5D/MbcKfsHUbdPJsmksraJ8pzELgKuKuOdTkBuBY4ilZvR1ete9LCtu5FvgNcMh/LWaa9FrR1Q/waXFBwe0mSqXbahOJOXb4PGEu4y2KcV+KItsuVOH2p2V9jwE4asJxl2ruTlDZgZO60Pzwi1dEwNeWJgBuA63AvI0iSrQPy0cjGyf3AnwC/abQa7bOgadq5e9N0Z9STaXmSzmaa/YtxnFIeBMYbGf5aR6yvpE6Z2Q9pPibbKJBvVL72+kFTlWtLjdoj02zvxdO40/t+BF38JufUKdWz5P8G8NGSnMM0gfa4mdAUHRrPlFwg1JOp+gq+iHNK39edljNe/zQ5Scwssx+4BwibJV/7LGiaMvO3oLeUGqYRIlxe/MXA4U2SSfEQf290u8KN4nyC2+ZYrx3Ae2iO7/PNwCuacJ3pNijoqH8g+nA04D8FPEJj4TGzaGM8aGuOiik9qVtL/+ZNyed4EvAO0ihookzTI4K/N3x48B/GvuxtuGk+su0H/rUJsgku1TpZQStW6LVGCFVQkZCJ/m9M/gewc67ypaHNjvo089COL5TS2fA0MnXRwQ1zb4WkrM2WBZhX0GWLpPacOdk4Mb9uh4+Gabl8dWV7hiiooKX9aK1TxjXMQunPci5NUvqPVHxZGMSXAkmHSLdatvZsdaZaACmyUCyOyNQLriRU/NGIqCcWbuaBNxbF5Ul7klV34APiHj5vLMIbjWaGGCPhlAUt0sKNhPYtkir2dmslzpU+73Il1R6IBgR/n+LvD1n8rfF46oMCSKRuQBAtoPLAvG/WAcJBzylpBL13T9Lz8ynhphTRy2kpIFsexvk9W0Ibw+1ImNOU5O9y5QTQjJA7Pou/J3SWMtT4UBiXQIG7Ef1Op+s8FworAwprAjI7C0gONxLMlg2EEdBbEB1u6IiROrRvL35BnSaQTGFNwPh5fWR3FjTzWOGnMq7DM7IuC7j3PX0V9/a8BYP2CuNn9tIz5BM8UdgVPBneUyWjdDfu7dTfRUXlXV9pSV3a6GZqYrluQKBwTPBkYU3wG2+y5z1LF92/lc+tnvHKVTf3lHfe0unazplowMtPnNrzqLwo++/LLtr1QV7ePzM9rghoq2Xrrrz4hZazDjcjXBn1efkD+rxoSG5o6i5Kh9kNvEZ9eeLAV1eFQ3JDM45imjPtjWZKE/mzMA4dCHFRO6PARNfvq8+dCVwO/kFgspPytXEOmoI06cndwYPAW2lCvGOXcjnwLZySdpTuGeIX1vA+jjtkoKPWpYXsALZ3g2xtHuLTFO5q61nAvRrxx6Xvn2ncDnwB+EWnK1KmfUlzUv5JqpQob5pNKXG32tEQF5R7dzdYlxawHfhKN8nWcgXVQNwhVoB/MKT3gUnUm+HNFvBHQo0Zz5btTMyTEeDfgEPAU52uTAu4DXgY+GGnKzKT1ivoYo9o0McfCfH3FejbWzEyTqvk9PGCw8BPAeRtX2t3e9SKGNiDS9U40E3WZR7UOurrJuCmbpSt9QrqCxMnL4IIgqcKSK5ijhlXhhDne/siLtm/E4wDP8cpZCz0g50stICP6uwA7qJyou8BeztdsVq0ZZEUDvqMvWQx/nAR71CUyz6S+1jm8cJ29zoDoHy8lBtmtgG5DlhPgF8Db2K2FVXcIVcLGQWux6U7zyQ/x2u1jXktRkopBC8B/oVU6RFTfFeR70Z4N/uEe7pxSDG6i3Y76m8T9FqfEFNOIw3tUtD9wM9wcyDDSE27FPRe4HUs/Hmc0WZaraARboW4u/S9De3GnGi1gh7CvcVuK8/MrUGjxbRKQRXn18zj5p+jZjmN+dAqBd0OvBcXT7ig0h2M7qJRBa3lRz2EO8HtabOcRiM0oqCPAlcw+1ArwW0VNvAiFMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwupP/B7bcSWADTFUrAAAAAElFTkSuQmCC\" alt=\"S\">
        <span style=\"font:bold;font-size: 35px;padding-left: 18%\">
            Liste des Produits</span></div>

    <br><br><br>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <br>
    <table class=\"table\" border =\"1\">
        <thead>
        <tr>
            <th> Id </th>
            <th> name </th>
            <th> Status </th>
            <th> prix </th>
            <th> Rate </th>
            <th> Description </th>
            <th> Categorie </th>
            <th> Image </th>
        </tr>
        </thead>
        <tbody>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new RuntimeError('Variable "tour" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 41
            echo "            <tr>
                <td class=\"py-1\">
                    ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "
                </td>
                <td> ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomProd", [], "any", false, false, false, 45), "html", null, true);
            echo " </td>
                <td>
                    ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prixProd", [], "any", false, false, false, 47), "html", null, true);
            echo "
                </td>
                <td> ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "statusProd", [], "any", false, false, false, 49), "html", null, true);
            echo " </td>
                <td> ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "rateProd", [], "any", false, false, false, 50), "html", null, true);
            echo " </td>
                <td> ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "descriptionProd", [], "any", false, false, false, 51), "html", null, true);
            echo " </td>
                <td> ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "categorieProd", [], "any", false, false, false, 52), "html", null, true);
            echo " </td>
                <td> ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "imgProd", [], "any", false, false, false, 53), "html", null, true);
            echo " </td>
                </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "prod/facture.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  151 => 56,  142 => 53,  138 => 52,  134 => 51,  130 => 50,  126 => 49,  121 => 47,  116 => 45,  111 => 43,  107 => 41,  103 => 40,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    <div>
        <img style=\"vertical-align:middle\" src=\"data:image/png;base64,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\" alt=\"S\">
        <span style=\"font:bold;font-size: 35px;padding-left: 18%\">
            Liste des Produits</span></div>

    <br><br><br>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <br>
    <table class=\"table\" border =\"1\">
        <thead>
        <tr>
            <th> Id </th>
            <th> name </th>
            <th> Status </th>
            <th> prix </th>
            <th> Rate </th>
            <th> Description </th>
            <th> Categorie </th>
            <th> Image </th>
        </tr>
        </thead>
        <tbody>
        <tbody>
        {% for p in tour %}
            <tr>
                <td class=\"py-1\">
                    {{ p.id }}
                </td>
                <td> {{ p.nomProd}} </td>
                <td>
                    {{  p.prixProd }}
                </td>
                <td> {{ p.statusProd}} </td>
                <td> {{ p.rateProd}} </td>
                <td> {{ p.descriptionProd}} </td>
                <td> {{ p.categorieProd}} </td>
                <td> {{ p.imgProd}} </td>
                </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "prod/facture.html.twig", "C:\\Users\\21695\\Documents\\I-Plus-Plus\\templates\\prod\\facture.html.twig");
    }
}