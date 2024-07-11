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

/* base.html.twig */
class __TwigTemplate_cb341ce90fc8c79b687a7ac1df524298 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'main_content' => [$this, 'block_main_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
    
    ";
        // line 9
        yield "    ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 31
        yield "</head>
<body>

";
        // line 34
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 76
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\"
        crossorigin=\"anonymous\"></script>

<script>

// product.js
document.addEventListener('DOMContentLoaded', () => {
    const toggles = document.querySelectorAll('.accordion-toggle');
    
    toggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const content = toggle.nextElementSibling;
            if (content.style.display === \"block\") {
                content.style.display = \"none\";
            } else {
                content.style.display = \"block\";
            }
        });
    });

    const thumbnails = document.querySelectorAll('.thumbnail-container img');
    const mainImage = document.querySelector('.product-images img');

    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', () => {
            mainImage.src = thumbnail.src;
        });
    });
});

</script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        yield "            ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
        <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/base.css"), "html", null, true);
        yield "\" />
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap\" rel=\"stylesheet\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
              integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\">
        <link href=\"https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Playpen+Sans&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@700&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
\t\t\tintegrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300&display=swap\"
\t\t\trel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Playpen+Sans&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@700&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap\" rel=\"stylesheet\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 35
        yield "    <header>
        
        <nav id=\"navbar\" class=\"navbar navbar-expand-lg rounded\" aria-label=\"Thirteenth navbar example\">
            <div class=\"container-fluid\">
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarsExample11\"
                        aria-controls=\"navbarsExample11\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                    <ul class=\"navbar-nav \">
                        <li id=\"navitms\" class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/product\">Nouveau</a>
                        </li>
                        <li id=\"navitms\" class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/categ_femme\">Femme</a>
                        </li>
\t\t\t\t\t\t<li id=\"navitms\" class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/product_homme\">Homme</a>
                        </li>
                    </ul>

                    <a id=\"logoo\" href=\"#\">
                        <img src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        yield "\" class=\"logo\" alt=\"Logo\">
                    </a>
                    <div id=\"iccones\">
                        <img id=\"icones\" src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/chercher.png"), "html", null, true);
        yield "\" alt=\"Chercher\">
                        <img id=\"icones\" src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/compte.png"), "html", null, true);
        yield "\" alt=\"Compte\">
                        <img id=\"icones\" src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favoris.png"), "html", null, true);
        yield "\" alt=\"Favoris\">
                        <img id=\"icones\" src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/panier.png"), "html", null, true);
        yield "\" alt=\"Panier\">
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        ";
        // line 71
        yield from $this->unwrap()->yieldBlock('main_content', $context, $blocks);
        // line 73
        yield "    </main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 71
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_content"));

        // line 72
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  243 => 72,  236 => 71,  226 => 73,  224 => 71,  213 => 63,  209 => 62,  205 => 61,  201 => 60,  195 => 57,  171 => 35,  164 => 34,  136 => 11,  131 => 10,  124 => 9,  110 => 5,  67 => 76,  65 => 34,  60 => 31,  57 => 9,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
    
    {# CSS styles #}
    {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/base.css') }}\" />
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap\" rel=\"stylesheet\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
              integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\">
        <link href=\"https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Playpen+Sans&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@700&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
\t\t\tintegrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300&display=swap\"
\t\t\trel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Playpen+Sans&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@700&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap\" rel=\"stylesheet\">
    {% endblock %}
</head>
<body>

{% block body %}
    <header>
        
        <nav id=\"navbar\" class=\"navbar navbar-expand-lg rounded\" aria-label=\"Thirteenth navbar example\">
            <div class=\"container-fluid\">
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarsExample11\"
                        aria-controls=\"navbarsExample11\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                    <ul class=\"navbar-nav \">
                        <li id=\"navitms\" class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/product\">Nouveau</a>
                        </li>
                        <li id=\"navitms\" class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/categ_femme\">Femme</a>
                        </li>
\t\t\t\t\t\t<li id=\"navitms\" class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/product_homme\">Homme</a>
                        </li>
                    </ul>

                    <a id=\"logoo\" href=\"#\">
                        <img src=\"{{ asset('assets/img/logo.png') }}\" class=\"logo\" alt=\"Logo\">
                    </a>
                    <div id=\"iccones\">
                        <img id=\"icones\" src=\"{{ asset('assets/img/chercher.png') }}\" alt=\"Chercher\">
                        <img id=\"icones\" src=\"{{ asset('assets/img/compte.png') }}\" alt=\"Compte\">
                        <img id=\"icones\" src=\"{{ asset('assets/img/favoris.png') }}\" alt=\"Favoris\">
                        <img id=\"icones\" src=\"{{ asset('assets/img/panier.png') }}\" alt=\"Panier\">
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        {% block main_content %}
        {% endblock %}
    </main>

{% endblock %}

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\"
        crossorigin=\"anonymous\"></script>

<script>

// product.js
document.addEventListener('DOMContentLoaded', () => {
    const toggles = document.querySelectorAll('.accordion-toggle');
    
    toggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const content = toggle.nextElementSibling;
            if (content.style.display === \"block\") {
                content.style.display = \"none\";
            } else {
                content.style.display = \"block\";
            }
        });
    });

    const thumbnails = document.querySelectorAll('.thumbnail-container img');
    const mainImage = document.querySelector('.product-images img');

    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', () => {
            mainImage.src = thumbnail.src;
        });
    });
});

</script>
</body>
</html>
", "base.html.twig", "C:\\Users\\sarah\\dress-code\\templates\\base.html.twig");
    }
}
