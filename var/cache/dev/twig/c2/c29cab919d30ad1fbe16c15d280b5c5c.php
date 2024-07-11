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

/* home_page/index.html.twig */
class __TwigTemplate_1018030797dc721d327c268e5202e568 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'main_content' => [$this, 'block_main_content'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home_page/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custom.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/accueil.css"), "html", null, true);
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
        yield "<section>
    <div id=\"carouselExample\" class=\"carousel slide\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bann2.png"), "html", null, true);
        yield "\" class=\"d-block\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bann3.png"), "html", null, true);
        yield "\" class=\"d-block\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bann1.png"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"...\">
            </div>
        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExample\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExample\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
        </button>
    </div>
</section>

<section>
    <p class=\"titre_comm\">Le podium des louanges par nos clients fidèles !</p>
    <div class=\"row rcard\">
        <div id=\"comm\" class=\"col-md-4 cardd1\">
            <div id=\"carrd\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
                <img src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/not.png"), "html", null, true);
        yield "\" class=\"guill\" alt=\"...\">
                <img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/note.png"), "html", null, true);
        yield "\" class=\"note\" alt=\"...\">
                <div class=\"card-body\">
                    <p class=\"card-text\">J'adore cette boutique en ligne ! Les vêtements sont superbes et de grande qualité. Je reviendrai certainement pour mes prochains achats de vêtements tendance.</p>
                    <h5 class=\"card-title\">Rose Miller</h5>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 cardd1\">
            <div id=\"carrd\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
                <img src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/not.png"), "html", null, true);
        yield "\" class=\"guill\" alt=\"...\">
                <img src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/note.png"), "html", null, true);
        yield "\" class=\"note\" alt=\"...\">
                <div class=\"card-body\">
                    <p class=\"card-text\">Un grand coup de cœur pour cette boutique en ligne de vêtements. J'ai passé plusieurs commandes, et chaque fois, j'ai été impressionné par la qualité des produits et la facilité de navigation sur le site. Bravo !</p>
                    <h5 class=\"card-title\">Léa Dufresne</h5>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 cardd1\">
            <div id=\"carrd\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
                <img src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/not.png"), "html", null, true);
        yield "\" class=\"guill\" alt=\"...\">
                <img src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/note.png"), "html", null, true);
        yield "\" class=\"note\" alt=\"...\">
                <div class=\"card-body\">
                    <p class=\"card-text\">Je suis une cliente fidèle et je n'ai jamais été déçue. Les vêtements sont à la mode, les prix sont raisonnables, et le service client est excellent. C'est ma première destination pour toutes mes tenues préférées.</p>
                    <h5 class=\"card-title\">Océane Leroux</h5>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 border-top\">
    <div class=\"col-md-4 d-flex align-items-center\">
        <a href=\"#\" class=\"mb-3 me-2 mb-md-0 text-decoration-none lh-1\">
            <svg class=\"bi\" width=\"30\" height=\"24\">
                <use xlink:href=\"#bootstrap\"></use>
            </svg>
        </a>
        <a href=\"mailto:sbenrhouma7@myges.fr\">
            <span class=\"mb-3 mb-md-0\">© SAUVAGE Baptiste & BEN RHOUMA Sarah - B3</span>
        </a>
    </div>
</footer>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home_page/index.html.twig";
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
        return array (  163 => 61,  159 => 60,  147 => 51,  143 => 50,  131 => 41,  127 => 40,  105 => 21,  99 => 18,  93 => 15,  87 => 11,  80 => 10,  70 => 7,  66 => 6,  61 => 5,  54 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/custom.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/accueil.css') }}\" />
{% endblock %}

{% block main_content %}
<section>
    <div id=\"carouselExample\" class=\"carousel slide\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"{{ asset('assets/img/bann2.png') }}\" class=\"d-block\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('assets/img/bann3.png') }}\" class=\"d-block\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('assets/img/bann1.png') }}\" class=\"d-block w-100\" alt=\"...\">
            </div>
        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExample\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExample\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
        </button>
    </div>
</section>

<section>
    <p class=\"titre_comm\">Le podium des louanges par nos clients fidèles !</p>
    <div class=\"row rcard\">
        <div id=\"comm\" class=\"col-md-4 cardd1\">
            <div id=\"carrd\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
                <img src=\"{{ asset('assets/img/not.png') }}\" class=\"guill\" alt=\"...\">
                <img src=\"{{ asset('assets/img/note.png') }}\" class=\"note\" alt=\"...\">
                <div class=\"card-body\">
                    <p class=\"card-text\">J'adore cette boutique en ligne ! Les vêtements sont superbes et de grande qualité. Je reviendrai certainement pour mes prochains achats de vêtements tendance.</p>
                    <h5 class=\"card-title\">Rose Miller</h5>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 cardd1\">
            <div id=\"carrd\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
                <img src=\"{{ asset('assets/img/not.png') }}\" class=\"guill\" alt=\"...\">
                <img src=\"{{ asset('assets/img/note.png') }}\" class=\"note\" alt=\"...\">
                <div class=\"card-body\">
                    <p class=\"card-text\">Un grand coup de cœur pour cette boutique en ligne de vêtements. J'ai passé plusieurs commandes, et chaque fois, j'ai été impressionné par la qualité des produits et la facilité de navigation sur le site. Bravo !</p>
                    <h5 class=\"card-title\">Léa Dufresne</h5>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 cardd1\">
            <div id=\"carrd\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
                <img src=\"{{ asset('assets/img/not.png') }}\" class=\"guill\" alt=\"...\">
                <img src=\"{{ asset('assets/img/note.png') }}\" class=\"note\" alt=\"...\">
                <div class=\"card-body\">
                    <p class=\"card-text\">Je suis une cliente fidèle et je n'ai jamais été déçue. Les vêtements sont à la mode, les prix sont raisonnables, et le service client est excellent. C'est ma première destination pour toutes mes tenues préférées.</p>
                    <h5 class=\"card-title\">Océane Leroux</h5>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 border-top\">
    <div class=\"col-md-4 d-flex align-items-center\">
        <a href=\"#\" class=\"mb-3 me-2 mb-md-0 text-decoration-none lh-1\">
            <svg class=\"bi\" width=\"30\" height=\"24\">
                <use xlink:href=\"#bootstrap\"></use>
            </svg>
        </a>
        <a href=\"mailto:sbenrhouma7@myges.fr\">
            <span class=\"mb-3 mb-md-0\">© SAUVAGE Baptiste & BEN RHOUMA Sarah - B3</span>
        </a>
    </div>
</footer>

{% endblock %}
", "home_page/index.html.twig", "C:\\Users\\sarah\\dress-code\\templates\\home_page\\index.html.twig");
    }
}
