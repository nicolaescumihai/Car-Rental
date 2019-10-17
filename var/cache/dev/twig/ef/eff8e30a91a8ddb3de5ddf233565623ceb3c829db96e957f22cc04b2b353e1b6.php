<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f21ae8284ef2f05a61d29a5f4d291ddbd5fcde8b954fee01c14fefaf923c15d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b570e6e7de8649a5e3234d7c762b5fd21ea9c21de709836bd446599736b7459d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b570e6e7de8649a5e3234d7c762b5fd21ea9c21de709836bd446599736b7459d->enter($__internal_b570e6e7de8649a5e3234d7c762b5fd21ea9c21de709836bd446599736b7459d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_841d98b7b3c384dd876fce0d89bb65435b4a907241cf45b6b38034a30aee8b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841d98b7b3c384dd876fce0d89bb65435b4a907241cf45b6b38034a30aee8b0d->enter($__internal_841d98b7b3c384dd876fce0d89bb65435b4a907241cf45b6b38034a30aee8b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b570e6e7de8649a5e3234d7c762b5fd21ea9c21de709836bd446599736b7459d->leave($__internal_b570e6e7de8649a5e3234d7c762b5fd21ea9c21de709836bd446599736b7459d_prof);

        
        $__internal_841d98b7b3c384dd876fce0d89bb65435b4a907241cf45b6b38034a30aee8b0d->leave($__internal_841d98b7b3c384dd876fce0d89bb65435b4a907241cf45b6b38034a30aee8b0d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_813067324735fc60497e2b8e771beae6f51a9ccf777e68467668ddff9c560296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_813067324735fc60497e2b8e771beae6f51a9ccf777e68467668ddff9c560296->enter($__internal_813067324735fc60497e2b8e771beae6f51a9ccf777e68467668ddff9c560296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_707574458ce9bcf6a5b035451cdda23b32327d1aa905be04c369d3e91a1e557c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707574458ce9bcf6a5b035451cdda23b32327d1aa905be04c369d3e91a1e557c->enter($__internal_707574458ce9bcf6a5b035451cdda23b32327d1aa905be04c369d3e91a1e557c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_707574458ce9bcf6a5b035451cdda23b32327d1aa905be04c369d3e91a1e557c->leave($__internal_707574458ce9bcf6a5b035451cdda23b32327d1aa905be04c369d3e91a1e557c_prof);

        
        $__internal_813067324735fc60497e2b8e771beae6f51a9ccf777e68467668ddff9c560296->leave($__internal_813067324735fc60497e2b8e771beae6f51a9ccf777e68467668ddff9c560296_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef964a36926192390d4d25492ded1342e20f975030e984d2e368a43c419a1b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef964a36926192390d4d25492ded1342e20f975030e984d2e368a43c419a1b40->enter($__internal_ef964a36926192390d4d25492ded1342e20f975030e984d2e368a43c419a1b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b8b16e3c4b056a71b56e2aa3dd7f4535b92f4b57b76b7014ec5da80080d9b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8b16e3c4b056a71b56e2aa3dd7f4535b92f4b57b76b7014ec5da80080d9b98->enter($__internal_7b8b16e3c4b056a71b56e2aa3dd7f4535b92f4b57b76b7014ec5da80080d9b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7b8b16e3c4b056a71b56e2aa3dd7f4535b92f4b57b76b7014ec5da80080d9b98->leave($__internal_7b8b16e3c4b056a71b56e2aa3dd7f4535b92f4b57b76b7014ec5da80080d9b98_prof);

        
        $__internal_ef964a36926192390d4d25492ded1342e20f975030e984d2e368a43c419a1b40->leave($__internal_ef964a36926192390d4d25492ded1342e20f975030e984d2e368a43c419a1b40_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
