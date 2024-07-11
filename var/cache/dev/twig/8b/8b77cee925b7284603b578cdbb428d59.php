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

/* categ_femme/index.html.twig */
class __TwigTemplate_a9001261d0b702c0354d68181f9a5faa extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categ_femme/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categ_femme/index.html.twig", 1);
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

<h1 class=\"titre\">Catégories Femme</h1>

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
                    <img id=\"pan\" src=\"  \" alt=\"panier\">
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
                    <img id=\"pan\" src=\"  \" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <a href=\"/femme\" id=\"test\">
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/3.png"), "html", null, true);
        yield "\" class=\"note\" alt=\"Pantalon\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Pantalon</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"  \" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
     </a>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/4.png"), "html", null, true);
        yield "\" class=\"note\" alt=\"Chemisier\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Chemisier</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"  \" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/5.png"), "html", null, true);
        yield "\" class=\"note\" alt=\"Jean\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Jean</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"  \" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/6.png"), "html", null, true);
        yield "\" class=\"note\" alt=\"Jupe\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Jupe</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"  \" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/7.png"), "html", null, true);
        yield "\" class=\"note\" alt=\"Veste\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Veste</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"  \" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <div id=\"carrd\" class=\"col-lg-2\">
        <div id=\"comm\" class=\"card card-b shadow-lg p-3 mb-5 bg-body-tertiary rounded\">
            <div class=\"image-container\">
                <img src=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/8.png"), "html", null, true);
        yield "\" class=\"note\" alt=\"Pantalon\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Pantalon</h5>
            </div>
            <a id=\"pannn\">
                <button id=\"panier\">
                    <img id=\"pan\" src=\"  \" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
</section>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "categ_femme/index.html.twig";
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
        return array (  240 => 130,  222 => 115,  204 => 100,  186 => 85,  168 => 70,  149 => 54,  130 => 38,  112 => 23,  98 => 11,  91 => 10,  81 => 7,  76 => 6,  69 => 5,  55 => 3,  38 => 1,);
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

<h1 class=\"titre\">Catégories Femme</h1>

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
                    <img id=\"pan\" src=\"  \" alt=\"panier\">
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
                    <img id=\"pan\" src=\"  \" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
    <a href=\"/femme\" id=\"test\">
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
                    <img id=\"pan\" src=\"  \" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
     </a>
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
                    <img id=\"pan\" src=\"  \" alt=\"panier\">
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
                    <img id=\"pan\" src=\"  \" alt=\"panier\">
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
                    <img id=\"pan\" src=\"  \" alt=\"panier\">
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
                    <img id=\"pan\" src=\"  \" alt=\"panier\">
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
                    <img id=\"pan\" src=\"  \" alt=\"panier\">
                </button>
            </a>
        </div>
    </div>
</section>



{% endblock %}
", "categ_femme/index.html.twig", "C:\\Users\\sarah\\dress-code\\templates\\categ_femme\\index.html.twig");
    }
}
