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

/* @EasyAdmin/crud/includes/_filters_modal.html.twig */
class __TwigTemplate_e537103238214c85a670ee63881a785e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/includes/_filters_modal.html.twig"));

        // line 1
        yield "<div id=\"modal-filters\" class=\"modal fade\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" data-bs-dismiss=\"modal\" class=\"btn btn-sm btn-secondary\" id=\"modal-clear-button\" formtarget=\"_self\">
                    <i class=\"fa fa-close\"></i> ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.button.clear", array(), "EasyAdminBundle"), "html", null, true);
        yield "
                </button>
                <h5 class=\"modal-title\">
                    <i class=\"fa fa-filter fa-fw\"></i> ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", array(), "EasyAdminBundle"), "html", null, true);
        yield "
                </h5>
                <button type=\"button\" data-bs-dismiss=\"modal\" class=\"btn btn-sm btn-primary\" id=\"modal-apply-button\" formtarget=\"_self\">
                    <i class=\"fa fa-check\"></i> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.button.apply", array(), "EasyAdminBundle"), "html", null, true);
        yield "
                </button>
            </div>
            <div class=\"modal-body p-0\">
                ";
        // line 17
        yield "                ";
        // line 18
        yield "            </div>
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
        return "@EasyAdmin/crud/includes/_filters_modal.html.twig";
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
        return array (  69 => 18,  67 => 17,  60 => 12,  54 => 9,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modal-filters\" class=\"modal fade\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" data-bs-dismiss=\"modal\" class=\"btn btn-sm btn-secondary\" id=\"modal-clear-button\" formtarget=\"_self\">
                    <i class=\"fa fa-close\"></i> {{ 'filter.button.clear'|trans(domain = 'EasyAdminBundle') }}
                </button>
                <h5 class=\"modal-title\">
                    <i class=\"fa fa-filter fa-fw\"></i> {{ 'filter.title'|trans(domain = 'EasyAdminBundle') }}
                </h5>
                <button type=\"button\" data-bs-dismiss=\"modal\" class=\"btn btn-sm btn-primary\" id=\"modal-apply-button\" formtarget=\"_self\">
                    <i class=\"fa fa-check\"></i> {{ 'filter.button.apply'|trans(domain = 'EasyAdminBundle') }}
                </button>
            </div>
            <div class=\"modal-body p-0\">
                {# The filters form will be loaded via AJAX for better performance #}
                {# See @EasyAdmin/default/filters.html.twig template #}
            </div>
        </div>
    </div>
</div>
", "@EasyAdmin/crud/includes/_filters_modal.html.twig", "C:\\Users\\sarah\\dress-code\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\includes\\_filters_modal.html.twig");
    }
}
