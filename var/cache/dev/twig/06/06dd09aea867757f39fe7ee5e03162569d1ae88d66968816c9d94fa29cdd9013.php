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

/* alimfront/index.html.twig */
class __TwigTemplate_c393dfb14712952a9d0ab81701022e9b2edd2bd75ad2fd6b68f97fcb0bad809d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mainContent' => [$this, 'block_mainContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-front-office.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "alimfront/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "alimfront/index.html.twig"));

        $this->parent = $this->loadTemplate("base-front-office.html.twig", "alimfront/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 6
        echo "    -- Tournaments section start -->
    <section class=\"tournaments-section\">
        <div class=\"overlay pt-120\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-5\">
                        <div class=\"section-header text-center\">
                            <h5 class=\"sub-title\">Grow your Muscles With Calometre</h5>
                            <h2 class=\"title\">Aliments</h2>

                        </div>
                    </div>
                </div>

                <div class=\"tab-content\">
                    <div class=\"tab-pane fade show active\" id=\"ongoing\" role=\"tabpanel\" aria-labelledby=\"ongoing-tab\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aliments"]) || array_key_exists("aliments", $context) ? $context["aliments"] : (function () { throw new RuntimeError('Variable "aliments" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["aliment"]) {
            // line 25
            echo "                                <div class=\"single-item\">
                                    <div class=\"left-item\">
                                        <div class=\"logo-item\">
                                            <img src=\"assets/images/icon/tournaments-logo-1.png\" alt=\"icon\">
                                        </div>
                                        <div class=\"mid-area\">
                                            <h3>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</h3>
                                            <ul>
                                                <li>
                                                    <h4>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "categorie", [], "any", false, false, false, 34), "html", null, true);
            echo "</h4>



                                                </li>
                                            </ul>
                                            <h4>Aliment.</h4>
                                            </li>
                                            <h4>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "calories", [], "any", false, false, false, 42), "html", null, true);
            echo "</h4>
                                            <li>

                                        </div>
                                    </div>
                                    <div class=\"last-item\">
                                        <h6>Découvrez les recette</h6>
                                        <span class=\"btn-border\">
                                        <h4><button onclick=\"window.location.href = 'https://fr.w3docs.com/';\">Cliquez Ici</button></h4>
                                         </span>
                                    </div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aliment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                            </div>
                        </div>

                    </div>
                    <div class=\"tab-pane fade\" id=\"upcoming\" role=\"tabpanel\" aria-labelledby=\"upcoming-tab\">
                        <div class=\"row\">
                            <div class=\"col-12\">



                            </div>
                        </div>
                        <div class=\"row mt-60\">
                            <div class=\"col-lg-12 d-flex justify-content-center\">
                                <nav aria-label=\"Page navigation\" class=\"d-flex justify-content-center\">
                                    <ul class=\"pagination justify-content-center align-items-center\">
                                        <li class=\"page-item\">
                                            <a class=\"page-btn previous\" href=\"javascript:void(0)\"
                                               aria-label=\"Previous\">
                                                <img src=\"assets/images/icon/arrow-left.png\" alt=\"icon\">
                                            </a>
                                        </li>
                                        <li class=\"page-item\"><a class=\"page-link xlr\" href=\"javascript:void(0)\">1</a>
                                        </li>
                                        <li class=\"page-item\"><a class=\"page-link xlr active\"
                                                                 href=\"javascript:void(0)\">2</a></li>
                                        <li class=\"page-item\"><a class=\"page-link xlr\" href=\"javascript:void(0)\">3</a>
                                        </li>
                                        <li class=\"page-item\"><a class=\"page-link xlr\" href=\"javascript:void(0)\">4</a>
                                        </li>
                                        <li class=\"page-item\">
                                            <a class=\"page-btn next\" href=\"javascript:void(0)\" aria-label=\"Next\">
                                                <img src=\"assets/images/icon/arrow-right.png\" alt=\"icon\">
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"past\" role=\"tabpanel\" aria-labelledby=\"past-tab\">

                        <div class=\"row\">
                            <div class=\"col-12\">


                            </div>
                        </div>

                        <div class=\"row mt-60\">
                            <div class=\"col-lg-12 d-flex justify-content-center\">
                                <nav aria-label=\"Page navigation\" class=\"d-flex justify-content-center\">
                                    <ul class=\"pagination justify-content-center align-items-center\">
                                        <li class=\"page-item\">
                                            <a class=\"page-btn previous\" href=\"javascript:void(0)\"
                                               aria-label=\"Previous\">
                                                <img src=\"assets/images/icon/arrow-left.png\" alt=\"icon\">
                                            </a>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tournaments section end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "alimfront/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 55,  117 => 42,  106 => 34,  100 => 31,  92 => 25,  88 => 24,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front-office.html.twig' %}



{% block mainContent %}
    -- Tournaments section start -->
    <section class=\"tournaments-section\">
        <div class=\"overlay pt-120\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-5\">
                        <div class=\"section-header text-center\">
                            <h5 class=\"sub-title\">Grow your Muscles With Calometre</h5>
                            <h2 class=\"title\">Aliments</h2>

                        </div>
                    </div>
                </div>

                <div class=\"tab-content\">
                    <div class=\"tab-pane fade show active\" id=\"ongoing\" role=\"tabpanel\" aria-labelledby=\"ongoing-tab\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                {% for aliment in aliments %}
                                <div class=\"single-item\">
                                    <div class=\"left-item\">
                                        <div class=\"logo-item\">
                                            <img src=\"assets/images/icon/tournaments-logo-1.png\" alt=\"icon\">
                                        </div>
                                        <div class=\"mid-area\">
                                            <h3>{{aliment.name}}</h3>
                                            <ul>
                                                <li>
                                                    <h4>{{aliment.categorie}}</h4>



                                                </li>
                                            </ul>
                                            <h4>Aliment.</h4>
                                            </li>
                                            <h4>{{aliment.calories}}</h4>
                                            <li>

                                        </div>
                                    </div>
                                    <div class=\"last-item\">
                                        <h6>Découvrez les recette</h6>
                                        <span class=\"btn-border\">
                                        <h4><button onclick=\"window.location.href = 'https://fr.w3docs.com/';\">Cliquez Ici</button></h4>
                                         </span>
                                    </div>
                                </div>
                                {% endfor %}
                            </div>
                        </div>

                    </div>
                    <div class=\"tab-pane fade\" id=\"upcoming\" role=\"tabpanel\" aria-labelledby=\"upcoming-tab\">
                        <div class=\"row\">
                            <div class=\"col-12\">



                            </div>
                        </div>
                        <div class=\"row mt-60\">
                            <div class=\"col-lg-12 d-flex justify-content-center\">
                                <nav aria-label=\"Page navigation\" class=\"d-flex justify-content-center\">
                                    <ul class=\"pagination justify-content-center align-items-center\">
                                        <li class=\"page-item\">
                                            <a class=\"page-btn previous\" href=\"javascript:void(0)\"
                                               aria-label=\"Previous\">
                                                <img src=\"assets/images/icon/arrow-left.png\" alt=\"icon\">
                                            </a>
                                        </li>
                                        <li class=\"page-item\"><a class=\"page-link xlr\" href=\"javascript:void(0)\">1</a>
                                        </li>
                                        <li class=\"page-item\"><a class=\"page-link xlr active\"
                                                                 href=\"javascript:void(0)\">2</a></li>
                                        <li class=\"page-item\"><a class=\"page-link xlr\" href=\"javascript:void(0)\">3</a>
                                        </li>
                                        <li class=\"page-item\"><a class=\"page-link xlr\" href=\"javascript:void(0)\">4</a>
                                        </li>
                                        <li class=\"page-item\">
                                            <a class=\"page-btn next\" href=\"javascript:void(0)\" aria-label=\"Next\">
                                                <img src=\"assets/images/icon/arrow-right.png\" alt=\"icon\">
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"past\" role=\"tabpanel\" aria-labelledby=\"past-tab\">

                        <div class=\"row\">
                            <div class=\"col-12\">


                            </div>
                        </div>

                        <div class=\"row mt-60\">
                            <div class=\"col-lg-12 d-flex justify-content-center\">
                                <nav aria-label=\"Page navigation\" class=\"d-flex justify-content-center\">
                                    <ul class=\"pagination justify-content-center align-items-center\">
                                        <li class=\"page-item\">
                                            <a class=\"page-btn previous\" href=\"javascript:void(0)\"
                                               aria-label=\"Previous\">
                                                <img src=\"assets/images/icon/arrow-left.png\" alt=\"icon\">
                                            </a>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tournaments section end -->
{% endblock %}
", "alimfront/index.html.twig", "C:\\Users\\Ahmed Mahjoub\\Calometre\\templates\\alimfront\\index.html.twig");
    }
}