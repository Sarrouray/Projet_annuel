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

/* product/index.html.twig */
class __TwigTemplate_9a8e95d7b6658938601a66fea3f4dcfd extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custom.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/product.css"), "html", null, true);
        yield "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 12
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_content"));

        // line 13
        yield "
    <div class=\"product-container\">
        <div class=\"product-images\">
            <div class=\"thumbnail-container\">
                
            </div>
        </div>

        <div class=\"product-details\">
            <h1>name</h1>
            <p>description</p>
            <p class=\"price\">30 €</p>
            <div class=\"product-options\">
                <div class=\"colors\">
                    <label for=\"colors\">Couleurs:</label>
                    <select id=\"colors\">
                        couleurs
                    </select>
                </div>
                <div class=\"sizes\">
                    <label for=\"sizes\">Tailles:</label>
                    <select id=\"sizes\">
                        taille
                    </select>
                </div>
            </div>
            <div class=\"product-buttons\">
                <button class=\"add-to-cart\">Ajouter au panier</button>
                <button class=\"add-to-favorites\">Ajouter aux favoris</button>
            </div>
            <div class=\"accordion\">
                <details>
                    <summary>Description</summary>
                    <p>descriiiiiiiiiiiiekfljrg</p>
                </details>
                <details>
                    <summary>Paiement et livraison</summary>
                    <p>paye biiiiiien</p>
                </details>
                <details>
                    <summary>Retour</summary>
                    <p>tkt on rend rien nous</p>
                </details>
            </div>
        </div>
    </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "product/index.html.twig";
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
        return array (  87 => 13,  80 => 12,  70 => 9,  66 => 8,  61 => 7,  54 => 6,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends 'base.html.twig' %}


{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/custom.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/product.css') }}\" />
{% endblock %}

{% block main_content %}

    <div class=\"product-container\">
        <div class=\"product-images\">
            <div class=\"thumbnail-container\">
                
            </div>
        </div>

        <div class=\"product-details\">
            <h1>name</h1>
            <p>description</p>
            <p class=\"price\">30 €</p>
            <div class=\"product-options\">
                <div class=\"colors\">
                    <label for=\"colors\">Couleurs:</label>
                    <select id=\"colors\">
                        couleurs
                    </select>
                </div>
                <div class=\"sizes\">
                    <label for=\"sizes\">Tailles:</label>
                    <select id=\"sizes\">
                        taille
                    </select>
                </div>
            </div>
            <div class=\"product-buttons\">
                <button class=\"add-to-cart\">Ajouter au panier</button>
                <button class=\"add-to-favorites\">Ajouter aux favoris</button>
            </div>
            <div class=\"accordion\">
                <details>
                    <summary>Description</summary>
                    <p>descriiiiiiiiiiiiekfljrg</p>
                </details>
                <details>
                    <summary>Paiement et livraison</summary>
                    <p>paye biiiiiien</p>
                </details>
                <details>
                    <summary>Retour</summary>
                    <p>tkt on rend rien nous</p>
                </details>
            </div>
        </div>
    </div>


{% endblock %}", "product/index.html.twig", "C:\\Users\\sarah\\dress-code\\templates\\product\\index.html.twig");
    }
}
