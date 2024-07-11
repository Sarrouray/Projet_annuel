<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* homme/index.html.twig */
class __TwigTemplate_1b55bd5e26a1f97726c5d035fa0f980e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'main_content' => [$this, 'block_main_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homme/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homme/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Nos produits";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/boutique.css"), "html", null, true);
        yield "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 10
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_content"));

        // line 11
        yield "

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\"
        crossorigin=\"anonymous\"></script>

<h1 class=\"titre\">Boutique Femmes</h1>

<section class=\"row\">
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1.png"), "html", null, true);
        yield "\" class=\"note\" alt=\"Robe\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Robe</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/panier.png"), "html", null, true);
        yield "\" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/2.png"), "html", null, true);
        yield "\" class=\"note\" alt=\"Top\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Top</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/panier.png"), "html", null, true);
        yield "\" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/3.png"), "html", null, true);
        yield "\" class=\"note\" alt=\"Pantalon\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Pantalon</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/panier.png"), "html", null, true);
        yield "\" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/4.png"), "html", null, true);
        yield "\" class=\"note\" alt=\"Chemisier\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Chemisier</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/panier.png"), "html", null, true);
        yield "\" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/5.png"), "html", null, true);
        yield "\" class=\"note\" alt=\"Jean\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Jean</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/panier.png"), "html", null, true);
        yield "\" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/6.png"), "html", null, true);
        yield "\" class=\"note\" alt=\"Jupe\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Jupe</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/panier.png"), "html", null, true);
        yield "\" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/7.png"), "html", null, true);
        yield "\" class=\"note\" alt=\"Veste\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Veste</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/panier.png"), "html", null, true);
        yield "\" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/8.png"), "html", null, true);
        yield "\" class=\"note\" alt=\"Pantalon\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Pantalon</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/panier.png"), "html", null, true);
        yield "\" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
</section>

<footer id=\"footr\" class=\"d-flex flex-wrap justify-content-between align-items-center py-3 border-top\">
    <div class=\"col-md-4 d-flex align-items-center\">
        <a href=\"/\" class=\"mb-3 me-2 mb-md-0 text-decoration-none lh-1\">
            <svg class=\"bi\" width=\"30\" height=\"24\">
                <use xlink:href=\"#bootstrap\"></use>
            </svg>
        </a>
        <a href=\"mailto:sbenrhouma7@myges.fr\">
            <span class=\"mb-3 mb-md-0\">© BEN RHOUMA Sarah - B3</span>
        </a>
    </div>
</footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 156
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 157
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/mode.js"), "html", null, true);
        yield "\"></script>
    <script>
        // Au chargement de la page, vérifier si le mode est 'dark' et déclencher le changement de mode si nécessaire
        document.addEventListener('DOMContentLoaded', function() {
            var modeEsts = localStorage.getItem('modeEst');
            if (modeEsts == 'dark') {
                // Créer un événement de clic artificiel pour déclencher le changement de mode
                var event = new Event('click');
                document.getElementById('mode').dispatchEvent(event);
            }
            console.log(localStorage.getItem('modeEsts'));
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "homme/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  310 => 158,  305 => 157,  298 => 156,  270 => 135,  260 => 128,  249 => 120,  239 => 113,  228 => 105,  218 => 98,  207 => 90,  197 => 83,  186 => 75,  176 => 68,  165 => 60,  155 => 53,  144 => 45,  134 => 38,  123 => 30,  113 => 23,  99 => 11,  92 => 10,  82 => 7,  77 => 6,  70 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos produits{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/boutique.css') }}\" />
{% endblock %}

{% block main_content %}


<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\"
        crossorigin=\"anonymous\"></script>

<h1 class=\"titre\">Boutique Femmes</h1>

<section class=\"row\">
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"{{ asset('assets/img/1.png') }}\" class=\"note\" alt=\"Robe\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Robe</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"{{ asset('assets/img/panier.png') }}\" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"{{ asset('assets/img/2.png') }}\" class=\"note\" alt=\"Top\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Top</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"{{ asset('assets/img/panier.png') }}\" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"{{ asset('assets/img/3.png') }}\" class=\"note\" alt=\"Pantalon\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Pantalon</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"{{ asset('assets/img/panier.png') }}\" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"{{ asset('assets/img/4.png') }}\" class=\"note\" alt=\"Chemisier\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Chemisier</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"{{ asset('assets/img/panier.png') }}\" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"{{ asset('assets/img/5.png') }}\" class=\"note\" alt=\"Jean\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Jean</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"{{ asset('assets/img/panier.png') }}\" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"{{ asset('assets/img/6.png') }}\" class=\"note\" alt=\"Jupe\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Jupe</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"{{ asset('assets/img/panier.png') }}\" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"{{ asset('assets/img/7.png') }}\" class=\"note\" alt=\"Veste\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Veste</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"{{ asset('assets/img/panier.png') }}\" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"{{ asset('assets/img/8.png') }}\" class=\"note\" alt=\"Pantalon\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Pantalon</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"{{ asset('assets/img/panier.png') }}\" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
</section>

<footer id=\"footr\" class=\"d-flex flex-wrap justify-content-between align-items-center py-3 border-top\">
    <div class=\"col-md-4 d-flex align-items-center\">
        <a href=\"/\" class=\"mb-3 me-2 mb-md-0 text-decoration-none lh-1\">
            <svg class=\"bi\" width=\"30\" height=\"24\">
                <use xlink:href=\"#bootstrap\"></use>
            </svg>
        </a>
        <a href=\"mailto:sbenrhouma7@myges.fr\">
            <span class=\"mb-3 mb-md-0\">© BEN RHOUMA Sarah - B3</span>
        </a>
    </div>
</footer>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/mode.js') }}\"></script>
    <script>
        // Au chargement de la page, vérifier si le mode est 'dark' et déclencher le changement de mode si nécessaire
        document.addEventListener('DOMContentLoaded', function() {
            var modeEsts = localStorage.getItem('modeEst');
            if (modeEsts == 'dark') {
                // Créer un événement de clic artificiel pour déclencher le changement de mode
                var event = new Event('click');
                document.getElementById('mode').dispatchEvent(event);
            }
            console.log(localStorage.getItem('modeEsts'));
        });
    </script>
{% endblock %}
", "homme/index.html.twig", "C:\\Users\\sarah\\dress-code\\templates\\homme\\index.html.twig");
    }
}
