<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_5c217278e871a10b4b0beabeefd419f492d49784d38033c0e9f7b237acfd1e12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_85247fd5e1335b8d9cb34ce0eb935e2d83179a567b77d1d1b2541df7b8e4efec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85247fd5e1335b8d9cb34ce0eb935e2d83179a567b77d1d1b2541df7b8e4efec->enter($__internal_85247fd5e1335b8d9cb34ce0eb935e2d83179a567b77d1d1b2541df7b8e4efec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8efe23239dae497a4c0dbe36c8a5e3e2c3309ea819d57359f235514c5b669689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8efe23239dae497a4c0dbe36c8a5e3e2c3309ea819d57359f235514c5b669689->enter($__internal_8efe23239dae497a4c0dbe36c8a5e3e2c3309ea819d57359f235514c5b669689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85247fd5e1335b8d9cb34ce0eb935e2d83179a567b77d1d1b2541df7b8e4efec->leave($__internal_85247fd5e1335b8d9cb34ce0eb935e2d83179a567b77d1d1b2541df7b8e4efec_prof);

        
        $__internal_8efe23239dae497a4c0dbe36c8a5e3e2c3309ea819d57359f235514c5b669689->leave($__internal_8efe23239dae497a4c0dbe36c8a5e3e2c3309ea819d57359f235514c5b669689_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b008576cd70aff203acbaa93f84aef252ed694e83ac2e1523a389e5c4e479455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b008576cd70aff203acbaa93f84aef252ed694e83ac2e1523a389e5c4e479455->enter($__internal_b008576cd70aff203acbaa93f84aef252ed694e83ac2e1523a389e5c4e479455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5365e24537fc41ed93e8b658716fea42ad071602c75cb313d69de8ab70f956e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5365e24537fc41ed93e8b658716fea42ad071602c75cb313d69de8ab70f956e5->enter($__internal_5365e24537fc41ed93e8b658716fea42ad071602c75cb313d69de8ab70f956e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5365e24537fc41ed93e8b658716fea42ad071602c75cb313d69de8ab70f956e5->leave($__internal_5365e24537fc41ed93e8b658716fea42ad071602c75cb313d69de8ab70f956e5_prof);

        
        $__internal_b008576cd70aff203acbaa93f84aef252ed694e83ac2e1523a389e5c4e479455->leave($__internal_b008576cd70aff203acbaa93f84aef252ed694e83ac2e1523a389e5c4e479455_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b363c7622f55f412351f080177308518eec63e616149db2ae2021b6010e7c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b363c7622f55f412351f080177308518eec63e616149db2ae2021b6010e7c49->enter($__internal_6b363c7622f55f412351f080177308518eec63e616149db2ae2021b6010e7c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9da02bbafcdfd34de4bc019783408434257422920acbfc60e4b8576402f5c783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da02bbafcdfd34de4bc019783408434257422920acbfc60e4b8576402f5c783->enter($__internal_9da02bbafcdfd34de4bc019783408434257422920acbfc60e4b8576402f5c783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9da02bbafcdfd34de4bc019783408434257422920acbfc60e4b8576402f5c783->leave($__internal_9da02bbafcdfd34de4bc019783408434257422920acbfc60e4b8576402f5c783_prof);

        
        $__internal_6b363c7622f55f412351f080177308518eec63e616149db2ae2021b6010e7c49->leave($__internal_6b363c7622f55f412351f080177308518eec63e616149db2ae2021b6010e7c49_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
