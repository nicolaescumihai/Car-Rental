<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_5c217278e871a10b4b0beabeefd419f492d49784d38033c0e9f7b237acfd1e12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c9ed06d56585c4f28ed1618e13d13844869934ea4240b7ab1f0f56be205e273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c9ed06d56585c4f28ed1618e13d13844869934ea4240b7ab1f0f56be205e273->enter($__internal_9c9ed06d56585c4f28ed1618e13d13844869934ea4240b7ab1f0f56be205e273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_7fb8eee9e21ad4dc1a5a517300569d5c3a5a3196653e6683eed8799df46e94dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb8eee9e21ad4dc1a5a517300569d5c3a5a3196653e6683eed8799df46e94dc->enter($__internal_7fb8eee9e21ad4dc1a5a517300569d5c3a5a3196653e6683eed8799df46e94dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c9ed06d56585c4f28ed1618e13d13844869934ea4240b7ab1f0f56be205e273->leave($__internal_9c9ed06d56585c4f28ed1618e13d13844869934ea4240b7ab1f0f56be205e273_prof);

        
        $__internal_7fb8eee9e21ad4dc1a5a517300569d5c3a5a3196653e6683eed8799df46e94dc->leave($__internal_7fb8eee9e21ad4dc1a5a517300569d5c3a5a3196653e6683eed8799df46e94dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c3293ac1fc4a12883edb78e12728c811dec4004bd564caea85b61322c2798e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c3293ac1fc4a12883edb78e12728c811dec4004bd564caea85b61322c2798e5->enter($__internal_8c3293ac1fc4a12883edb78e12728c811dec4004bd564caea85b61322c2798e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b575fd4def757fa66120ca3c409b387b0f68c0835433ea6f8a7238594a827d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b575fd4def757fa66120ca3c409b387b0f68c0835433ea6f8a7238594a827d45->enter($__internal_b575fd4def757fa66120ca3c409b387b0f68c0835433ea6f8a7238594a827d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b575fd4def757fa66120ca3c409b387b0f68c0835433ea6f8a7238594a827d45->leave($__internal_b575fd4def757fa66120ca3c409b387b0f68c0835433ea6f8a7238594a827d45_prof);

        
        $__internal_8c3293ac1fc4a12883edb78e12728c811dec4004bd564caea85b61322c2798e5->leave($__internal_8c3293ac1fc4a12883edb78e12728c811dec4004bd564caea85b61322c2798e5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0acca7d1bfc5eca424ee3bf70a54f364051a5c7ad4aa97e35f5065a8589670e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0acca7d1bfc5eca424ee3bf70a54f364051a5c7ad4aa97e35f5065a8589670e9->enter($__internal_0acca7d1bfc5eca424ee3bf70a54f364051a5c7ad4aa97e35f5065a8589670e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa18068b16748acf6b0b904dd3f905913cd869e62231ec95977c4162a410c422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa18068b16748acf6b0b904dd3f905913cd869e62231ec95977c4162a410c422->enter($__internal_fa18068b16748acf6b0b904dd3f905913cd869e62231ec95977c4162a410c422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_fa18068b16748acf6b0b904dd3f905913cd869e62231ec95977c4162a410c422->leave($__internal_fa18068b16748acf6b0b904dd3f905913cd869e62231ec95977c4162a410c422_prof);

        
        $__internal_0acca7d1bfc5eca424ee3bf70a54f364051a5c7ad4aa97e35f5065a8589670e9->leave($__internal_0acca7d1bfc5eca424ee3bf70a54f364051a5c7ad4aa97e35f5065a8589670e9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/nicolaescu/Workspace/CarRental/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
