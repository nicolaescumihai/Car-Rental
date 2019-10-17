<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_993917c48ca918f86b830c3ddef5bb97c92f399305799a1bae14d5ef9da2bdc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7323dccec092fd04bd7c41b4f665ce27519383ba1f41bb9079547197aa5940bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7323dccec092fd04bd7c41b4f665ce27519383ba1f41bb9079547197aa5940bd->enter($__internal_7323dccec092fd04bd7c41b4f665ce27519383ba1f41bb9079547197aa5940bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_05d256b3abf9df874d32b9d0f63e84597a37ea99bc92b03b4e3f4d80c7517589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d256b3abf9df874d32b9d0f63e84597a37ea99bc92b03b4e3f4d80c7517589->enter($__internal_05d256b3abf9df874d32b9d0f63e84597a37ea99bc92b03b4e3f4d80c7517589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7323dccec092fd04bd7c41b4f665ce27519383ba1f41bb9079547197aa5940bd->leave($__internal_7323dccec092fd04bd7c41b4f665ce27519383ba1f41bb9079547197aa5940bd_prof);

        
        $__internal_05d256b3abf9df874d32b9d0f63e84597a37ea99bc92b03b4e3f4d80c7517589->leave($__internal_05d256b3abf9df874d32b9d0f63e84597a37ea99bc92b03b4e3f4d80c7517589_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_586b2365c749dccd2ce908e116bf9b48265ddb148a1fff1ec0a485ea2445d23f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586b2365c749dccd2ce908e116bf9b48265ddb148a1fff1ec0a485ea2445d23f->enter($__internal_586b2365c749dccd2ce908e116bf9b48265ddb148a1fff1ec0a485ea2445d23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_03169504881d2b47f38076bdb340c8c2f1e5f29992e2dde6785f54988f4b8f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03169504881d2b47f38076bdb340c8c2f1e5f29992e2dde6785f54988f4b8f19->enter($__internal_03169504881d2b47f38076bdb340c8c2f1e5f29992e2dde6785f54988f4b8f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_03169504881d2b47f38076bdb340c8c2f1e5f29992e2dde6785f54988f4b8f19->leave($__internal_03169504881d2b47f38076bdb340c8c2f1e5f29992e2dde6785f54988f4b8f19_prof);

        
        $__internal_586b2365c749dccd2ce908e116bf9b48265ddb148a1fff1ec0a485ea2445d23f->leave($__internal_586b2365c749dccd2ce908e116bf9b48265ddb148a1fff1ec0a485ea2445d23f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a44a3738256a4098fe8bcda9ced8389f150a90e97f015a2012265840a2056c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a44a3738256a4098fe8bcda9ced8389f150a90e97f015a2012265840a2056c9->enter($__internal_5a44a3738256a4098fe8bcda9ced8389f150a90e97f015a2012265840a2056c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_975429124cf9641e0e22ddaf41347cfaa08b1a9a1d6749997c930c210be51091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975429124cf9641e0e22ddaf41347cfaa08b1a9a1d6749997c930c210be51091->enter($__internal_975429124cf9641e0e22ddaf41347cfaa08b1a9a1d6749997c930c210be51091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_975429124cf9641e0e22ddaf41347cfaa08b1a9a1d6749997c930c210be51091->leave($__internal_975429124cf9641e0e22ddaf41347cfaa08b1a9a1d6749997c930c210be51091_prof);

        
        $__internal_5a44a3738256a4098fe8bcda9ced8389f150a90e97f015a2012265840a2056c9->leave($__internal_5a44a3738256a4098fe8bcda9ced8389f150a90e97f015a2012265840a2056c9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e1b6ab2e4f8b2f762524f1152484fd5a6c73534b23e75458c06d46b05703ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e1b6ab2e4f8b2f762524f1152484fd5a6c73534b23e75458c06d46b05703ce2->enter($__internal_3e1b6ab2e4f8b2f762524f1152484fd5a6c73534b23e75458c06d46b05703ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_47238b5a84283d1197cf3fa9bad1a4981b57e1dff5f32a27fef4ee7e1bf5e9a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47238b5a84283d1197cf3fa9bad1a4981b57e1dff5f32a27fef4ee7e1bf5e9a7->enter($__internal_47238b5a84283d1197cf3fa9bad1a4981b57e1dff5f32a27fef4ee7e1bf5e9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_47238b5a84283d1197cf3fa9bad1a4981b57e1dff5f32a27fef4ee7e1bf5e9a7->leave($__internal_47238b5a84283d1197cf3fa9bad1a4981b57e1dff5f32a27fef4ee7e1bf5e9a7_prof);

        
        $__internal_3e1b6ab2e4f8b2f762524f1152484fd5a6c73534b23e75458c06d46b05703ce2->leave($__internal_3e1b6ab2e4f8b2f762524f1152484fd5a6c73534b23e75458c06d46b05703ce2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
